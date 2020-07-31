<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Mail;

class ContactFormController extends Controller
{
    public function create()
    {
        return view('contact.create');
    }

    public function store(Request $request)
    {
        $data =  $request->validate([
            'name' => 'required',
            'email' => 'required',
            'message' => 'required'
        ]);
        Mail::to('supriadiroadman2@gmail.com')->send(new ContactFormMail($data));
        return 'success';

        /*
            $datass =  Mail::send('emails.contact', [
                'msg' => request()->message
            ],  function ($mail) use ($request) {
                $mail->from($request->email, $request->name);
                $mail->to('supriadiroadman2@gmail.com')->subject('Contact Message subject');
            });
        */
    }
}
