<?php

namespace App\Http\Controllers;

use App\Mail\SignupEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public static function sendVerificationMail($name, $email, $verification_token){
        $user = [
            'name' => $name,
            'email'=> $email,
            'verification_token'=> $verification_token
        ];
        Mail::to($email)->send(new SignupEmail($user));
        
    }
}
