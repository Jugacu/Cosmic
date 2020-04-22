<?php
namespace App\Controllers\Admin;

use App\Config;

use App\Models\Admin;
use App\Models\Log;
use App\Models\Player;

use Core\View;

use Library\HotelApi;
use Library\Json;

use stdClass;

class Wordfilter
{
    private $data;

    public function __construct()
    {
        $this->data = new stdClass();
    }

    public function add()
    {
        $validate = request()->validator->validate([
            'post' => 'required|min:3|max:20'
        ]);

        if(!$validate->isSuccess()) {
            return;
        }

        $word = input()->post('post')->value;

        $word_filter = Admin::getWordFilterByWord($word);

        if ($word_filter) {
            response()->json(["status" => "error", "message" => "¡{$word} ya está en la lista negra de palabras!"]);
        }

        Admin::addWordFilter($word, request()->player->id);

        if(Config::apiEnabled) {
            HotelApi::execute('updatewordfilter');
        };

        Log::addStaffLog('-1', 'Added wordfilter: ' . $word, request()->player->id, 'wordfilter');
        response()->json(["status" => "success", "message" => "¡{$word} ha sido añadido con éxito a la lista negra de palabras!"]);
    }

    public function remove()
    {
        $validate = request()->validator->validate([
            'post' => 'required|min:3|max:20'
        ]);

        if(!$validate->isSuccess()) {
            return;
        }

        $word = input()->post('post')->value;

        $word_filter = Admin::getWordFilterByWord($word);
        if (empty($word_filter)) {
            response()->json(["status" => "error", "message" => "¡{$word} ya ha sido eliminado con éxito de la lista negra de palabras!"]);
        }

        Admin::deleteWordByWord($word);
      
        if(Config::apiEnabled) {
            HotelApi::execute('updatewordfilter');
        }

        Log::addStaffLog('-1', 'Removed wordfilter: ' . $word, request()->player->id, 'wordfilter');
        response()->json(["status" => "success", "message" => "¡{$word} ha sido eliminado con éxito de la lista negra de palabras!"]);
    }

    public function getwordfilters()
    {
        $word_filter = Admin::getWordFilters();

        foreach ($word_filter as $row) {
            $row->hide    = ($row->hide == 0 ? 'No' : 'Sí');
            $row->report  = ($row->report == 0 ? 'No' : 'Sí');
            $row->mute    = ($row->mute == 0 ? 'No' : 'Sí');
        }

        Json::filter($word_filter, 'desc', 'id');
    }

    public function view()
    {
        View::renderTemplate('Admin/Management/wordfilter.html', ['permission' => 'housekeeping_wordfilter_control']);
    }
}