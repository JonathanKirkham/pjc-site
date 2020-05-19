<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function store() {
        # dd(request()->all());
        $data = request()->validate([
            'nome' => 'required|min: 3',
            'email' => 'required|email',
            'mensagem' => 'required|max: 255',
            'g-recaptcha-response' => 'recaptcha',
        ]);
         Mail::to('jmk5321@hotmail.de')->send(new ContactMail($data));

         return redirect('contact')
         ->with('mensagem', 'Obrigado por entrar em contato, em até 24 horas você será atendido');
    }


}
