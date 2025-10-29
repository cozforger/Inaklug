<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('kontak');
    }

    public function send(Request $request)
    {
        $request->validate([
            'name'    => 'required|string|max:100',
            'email'   => 'required|email',
            'message' => 'required|string|max:1000',
            'g-recaptcha-response' => 'required|captcha',
        ]);

        $data = [
            'name'    => $request->name,
            'email'   => $request->email,
            'message' => $request->message,
        ];

        Mail::send('emails.contact', $data, function ($mail) use ($data) {
            $mail->to('info@inaklug.com') // Ganti dengan email penerima kamu
                 ->subject('Pesan Baru dari ' . $data['name']);
        });

        return back()->with('success', 'Pesan kamu telah dikirim! Kami akan segera menghubungi kamu.');
    }
}
