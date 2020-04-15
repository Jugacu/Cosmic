<?php
namespace App\Controllers\Home;

use App\example;
use App\Auth;

use App\Models\Player;
use App\Models\Core;

use Core\Locale;
use Core\View;

use Library\Json;
use Library\HotelApi;

class Registration
{
    public function __construct()
    {
        $this->settings = Core::settings();
    }
  
    public function request()
    {
        $validate = request()->validator->validate([
            'username'              => 'required|min:2|max:15|pattern:[a-zA-Z0-9-=?!@:.]+',
            'email'                 => 'required|max:150|email',
            'password'              => 'required|min:6|max:32',
            'password_repeat'       => 'required|same:password',
            'birthdate_day'         => 'required|numeric|pattern:0?[1-9]OR[12][0-9]OR3[01]',
            'birthdate_month'       => 'required|numeric',
            'birthdate_year'        => 'required|numeric',
            'gender'                => 'required|pattern:^(?:maleORfemale)$',
            'figure'                => 'required|figure',
            'g-recaptcha-response'  => 'captcha'
        ]);

        if(!$validate->isSuccess()) {
            exit;
        }
      
        $username = input()->post('username')->value;

        $settings = Core::settings();
        $playerData = (object)input()->all();
        $playerData->figure = input()->post('figure')->value;
        $getMaxIp = Player::checkMaxIp(request()->getIp());
        
        if (Player::exists($username)) {
            response()->json(["status" => "error", "message" => Locale::get('register/username_exists')]);
        }

        if (Player::mailTaken(input()->post('email')->value)) {
            response()->json(["status" => "error", "message" => Locale::get('register/email_exists')]);
        }
      
          
        if ($getMaxIp != 0 && $getMaxIp >= $settings->registration_max_ip) {
            response()->json(["status" => "error", "message" => Locale::get('register/too_many_accounts')]);
        }

        if (!Player::create($playerData)) {
            response()->json(["status" => "error", "message" => Locale::get('core/notification/something_wrong'), "captcha_error" => "error"]);
        }
  
        $player = Player::getDataByUsername($username, array('id', 'password', 'rank'));
      
        $freeCurrencys = Core::getCurrencys();
      
        if($freeCurrencys) {
            foreach($freeCurrencys as $currency) {
                Player::createCurrency($player->id, $currency->type);
                Player::updateCurrency($player->id, $currency->type, $currency->amount);
            }
        }
      
        if(isset($playerData->referral)) {
          
            $referral = Player::getDataByUsername($playerData->referral);
          
            if(!empty($referral) && Player::checkMaxIp(request()->getIp) == 0) {
                $referral_days = strtotime('-' . $settings->referral_acc_create_days . ' days');
                $referralSignup = Player::getReferral($referral->id, request()->getIp());
                
                if($referral->account_created < $referral_days && $referralSignup == 0) {
                    Player::insertReferral($player->id, $referral->id, request()->getIp(), time());
                    HotelApi::execute('givepoints', ['user_id' => $referral->id, 'points' => $this->settings->referral_points, 'type' => $this->settings->referral_points_type]);
                }
            }
        }

        Auth::login($player);
        response()->json(["status" => "success", "location" => "/hotel"]);
    }

    public function index($referral = false)
    {
        View::renderTemplate('Home/registration.html', [
            'title' => Locale::get('core/title/registration'),
            'looks' => example::look,
            'page'  => 'registration',
            'referral' => ($referral) ? Player::getDataByUsername($referral, ['username']) : $referral
        ]);
    }
}
