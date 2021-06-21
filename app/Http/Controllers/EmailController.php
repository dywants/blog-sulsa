<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function create()
    {
        return view('front.email');
    }

    public function sendEmail(Request $request): RedirectResponse
    {
        $request->validate([
            'email' => 'required|email',
            'subject' => 'required',
            'name' => 'required',
            'messageForm' => 'required',
        ]);

        $data = [
            'subject' => $request->subject,
            'name' => $request->name,
            'email' => $request->email,
            'messageForm' => $request->messageForm,
        ];

        Mail::send('emails.contact-mail', $data, function($message) use ($data) {
            $message->from($data['email'])
                ->to(config('lacuisinedesulson.admin_support_email'))
                ->subject($data['subject']);
        });

        return back()->with(['message' => 'Merci pour votre message, nous vous répondrons dans les plus brefs délais']);
    }
}
