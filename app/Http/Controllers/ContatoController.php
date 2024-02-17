<?php

namespace App\Http\Controllers;

use App\Mail\Contato;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Symfony\Component\HttpFoundation\Test\Constraint\RequestAttributeValueSame;

class ContatoController extends Controller
{
    public function index()
    {
        return view('contato');
    }

    public function send()
    {
        $data = request()->validate([
            'name' => 'required|min:3',
            'whatsapp' => 'required|min:3',
            'message' => 'required|min:3',
        ]);

        Mail::to('your_email@gmail.com')->send(new Contato($data));
        dd('sent');
    }
}
