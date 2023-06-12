<?php

namespace App\Http\Controllers;

use App\Mail\ContactSend;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    //
    function contact()
    {
        return view('contact');
    }

    function sendEmail(Request $request)
    {
        try {
            $fromEmail = $request->email; // Dirección de correo del remitente
            $mailContent = $request->message; // Contenido del correo electrónico

            $mail = new ContactSend($mailContent, $request->fname, $request->lname, $request->email);
            $mail->subject('Contact');
            $mail->from($fromEmail);

            Mail::to('contact@hoteldondepilo.com')->send($mail);
            return redirect('contact')->with('msg', 'Email sent!');
        } catch (Exception $e) {
            return redirect('contact')->with('error', 'Email not sent!');
        }
    }
}