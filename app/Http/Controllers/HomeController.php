<?php

namespace App\Http\Controllers;

use Mail;
use App\About;
use App\Service;
use App\Contact;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    private $maile_receiver = 'mototaxi@mototaximga.com.br';

    public function index()
    {
        return view('home', [
          'about' => About::first(),
          'services' => Service::all(),
          'contact'  => Contact::first()
        ]);
    }

    public function sendMail(Request $request)
    {
        if ($request->has('email') && filter_var($request->input('email'), FILTER_VALIDATE_EMAIL)) {
            Mail::send('emails.contact', [
                'sender' => [
                    'name'  => $request->input('name'),
                    'email' => $request->input('email'),
                    'message' => $request->input('message')
                ]
            ], function($m) use ($request) {
                $m->from($request->input('email'), $request->input('name'));
                $m->to($this->maile_receiver, "Mototaxi Maringá")->subject("Contato no site");
            });
        }

        return redirect()->route('home');
    }
}
