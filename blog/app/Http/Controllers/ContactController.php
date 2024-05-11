<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class ContactController extends Controller
{
    public function sendEmail(Request $request)
    {
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message
        ];

        Mail::send('emails.email', ['data' => $data], function ($message) use ($data) {
            $message->to('admin@example.com')
                    ->subject('New Contact Message')
                    ->from($data['email'])
                    ->replyTo($data['email']);
        });

        return redirect()->back()->with('message', 'Message sent successfully!');
    }
}
