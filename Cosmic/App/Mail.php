<?php
namespace App;

use Swift_Mailer;
use Swift_Message;
use Swift_SmtpTransport;

class Mail
{
    public static function send($subject, $body, $to) {
        $transport = (new Swift_SmtpTransport(example::mailHost, example::mailPort, 'ssl'))
            ->setUsername(example::mailUser)
            ->setPassword(example::mailPass);

        $mailer = new Swift_Mailer($transport);

        $message = (new Swift_Message($subject))
            ->setFrom([example::mailFrom => example::site['sitename']])
            ->setTo([$to])
            ->setBody($body, 'text/html');

        return $mailer->send($message);
    }
}
