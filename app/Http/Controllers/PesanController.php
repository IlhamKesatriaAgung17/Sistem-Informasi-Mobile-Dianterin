<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\PesanDianterin;

class PesanController extends Controller
{
    // public function index()
    // {
    //     return view('contents.landing.index');
    // }

    public function form_pesan()
    {
        return view('contents.landing.kontak');
    }

    public function kirim_pesan(Request $request)
    {
        $data = [
            'name' =>$request->name,
            'email' =>$request->email,
            'phone' =>$request->phone,
            'message'=>$request->message,
        ];

        Mail::to('kuywedding.link@gmail.com')->send(new PesanDianterin($data));

        // Session::flash('message', 'Thank you for your email');
        return redirect()->route('hubungikami.form')->with('success', 'Pesan Berhasil Dikirim');
    }
}
