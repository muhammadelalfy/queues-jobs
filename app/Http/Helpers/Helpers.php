<?php
namespace App\Http\Helpers;

use Illuminate\Support\Facades\Mail;

class Helpers
{
    public function sendEmail($template , $to , $subject , $data){
        \Mail::send($template , function ($message) use($to , $subject){
            $message -> subject($subject);
            $message -> to($to);

        });

    }
}
