<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Mail;

class MailController extends Controller
{
 public function send(){

        $email = "mrttemizel@gmail.com";
        $array = [
            'name'=>'Murat',
            'surname' => 'Temizel',
            'date' => date("Y-m-d")
        ];

        mail::send('back.pages.mail.hosgeldin',$array,function($message) use($email){
            $message->subject('Hoşgeldin');
            $message->to( $email);
        });
    }


}
