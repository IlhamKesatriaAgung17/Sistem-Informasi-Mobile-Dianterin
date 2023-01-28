<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index(){
        return view('contents.landing.index');
    }

    public function tentang(){
        return view('contents.landing.about');
    }

    public function kontak(){
        return view('contents.landing.kontak');
    }

}
