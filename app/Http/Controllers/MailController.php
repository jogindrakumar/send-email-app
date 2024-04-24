<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\DemoMail;

class MailController extends Controller
{
    //
    public function index(){
        $mailData = [
            'title' => 'Mail from Jogindrakumar.com',
            'body' => 'This is for testing purposes',
        ];
        Mail::to('info@jogindrakumar.com')->send(new DemoMail($mailData));
        dd('email sent successfully');
    }
}
