<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function getSend(){

        $content='安安 你好 測試';
        $data=['name'=>'大雄','content'=>$content,];

        Mail::send('email.test', $data, function($message){
            $message->subject('Laravel 5 Mail');
            $message->to('tim5556618@gmail.com','大雄');
            $message->from('f37c183652-b21d25@inbox.mailtrap.io', 'netadmin');
        });

        return "Email 已寄出";

    }
}
