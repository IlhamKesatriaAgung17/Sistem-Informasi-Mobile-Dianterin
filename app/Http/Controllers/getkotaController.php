<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Province;

class getkotaController extends Controller
{
    public function getkota($id)
    {
        $kota = Regency::where('province_id',$id)->get();

    }
}
