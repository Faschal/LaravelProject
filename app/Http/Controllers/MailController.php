<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestMail;
class MailController extends Controller
{
    public function sendEmail()
    {
        $details = [
            'title' => 'Mail from Test Email',
            'body' => 'This is for testing mail'
        ];

        Mail::to("faschalaja@gmail.com")->send(new TestMail($details));

        return "Email Sent";
    }
}
