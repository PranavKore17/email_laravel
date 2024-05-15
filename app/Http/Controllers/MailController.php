<?php

namespace App\Http\Controllers;

use App\Mail\TestingMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    // public function index(){
    //     $mailData = [
    //         'title' => 'mail from pranav',
    //         'body' => 'this is for testing email using smpt',
    //     ];
    //     // Mail::to('pranavkore17@gmail.com')->send(new TestingMail($mailData));
    //     Mail::to('harshbhoyar09@gmail.com')->send(new TestingMail($mailData));
    //     dd('email send successfully....');
    // }

    // public function index(){
    //     $mailData = [
    //         'title' => 'Test Subject for attachment',
    //         'body' => 'Test message for attachment',
    //     ];
    //     Mail::to('pranavkore17@gmail.com')->send(new TestingMail($mailData));

    //     //Mail::to('harshbhoyar09@gmail.com')->send(new TestingMail($mailData));
    //     dd('email send successfully....');
    // }

    public function index(){
        $mailData = [
            'title' => 'Test Subject for attachment',
            'body' => 'Test message for attachment',
        ];

        // $ccEmails = ["demo@gmail.com", "demo2@gmail.com"];
        // $bccEmails = ["demo3@gmail.com", "demo4@gmail.com"];

        Mail::to('pranavkore17@gmail.com')
                 ->cc( ["demo@gmail.com", "demo2@gmail.com"])
                 ->bcc( ["mowadeankita21@gmail.com", "test@gmail.com"])
                ->send(new TestingMail($mailData));

        //Mail::to('harshbhoyar09@gmail.com')->send(new TestingMail($mailData));
        dd('email send successfully....');
    }

}
