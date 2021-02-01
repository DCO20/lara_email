<?php

namespace App\Http\Controllers;

use App\Mail\Contact;
use App\Mail\TesteMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendEmail(Request $request)
    {
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
        ];

        Mail::send(new Contact($data));

        return view('email.thanks');
    }

    public function thank()
    {
        return view('email.thanks');
    }
}
