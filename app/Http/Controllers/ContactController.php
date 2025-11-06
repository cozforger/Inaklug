<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function showForm()
    {
        return view('kontak'); // tampilkan form
    }

    public function send(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email',
            'message' => 'required|string|max:1000',
            'g-recaptcha-response' => 'required|captcha',
        ]);

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'messageText' => $request->message,
        ];

        Mail::send('emails.contact', $data, function ($message) use ($data) {
            $message->to('admin@inaklug.com', 'Admin Inaklug')
                    ->subject('Pesan Baru dari Form Kontak')
                    ->from($data['email'], $data['name']);
        });

        return back()->with('success', 'Pesan kamu sudah dikirim!');
    }
}
