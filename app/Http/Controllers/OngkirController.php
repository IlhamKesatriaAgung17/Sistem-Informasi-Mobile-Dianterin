<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Province;
use App\Models\City;


class OngkirController extends Controller
{
    public function index(Request $request){
        //Cek Data Provinsi
        // $response = Http::withHeaders([
        //     'key' => 'eb2c4ba4c0ed5bf805e837355daadc6f'
        // ])->get('https://api.rajaongkir.com/starter/province');
        // return $response->body();

        //Cek Data Kota
        // $response = Http::withHeaders([
        //     'key' => 'eb2c4ba4c0ed5bf805e837355daadc6f'
        // ])->get('https://api.rajaongkir.com/starter/city');
        // return $response->body();

        //Cek Data Provinsi
        // $response = Http::withHeaders([
        //     'key' => 'eb2c4ba4c0ed5bf805e837355daadc6f'
        // ])->get('https://api.rajaongkir.com/starter/province');
        // return $response['rajaongkir']['results'];


        //Cek Data Kota
        // $response = Http::withHeaders([
        //     'key' => 'eb2c4ba4c0ed5bf805e837355daadc6f'
        // ])->get('https://api.rajaongkir.com/starter/city');
        // return $response['rajaongkir']['results'];

        //dd($request->all());

        //Cek Ongkir
        if ($request->origin && $request->destination && $request->weight){

            $origin = $request->origin;
            $destination = $request->destination;
            $weight = $request->weight;
            $courier = "jne";

            $response = Http::asForm()->withHeaders([
                'key' => 'eb2c4ba4c0ed5bf805e837355daadc6f'
            ])->post('https://api.rajaongkir.com/starter/cost',[
                'origin' => $origin,
                'destination' => $destination,
                'weight' => $weight,
                'courier' => $courier
            ]);
            $cekongkir = $response['rajaongkir']['results'][0]['costs'];

        } else {

            $origin = '';
            $destination = '';
            $weight = '';
            $courier = '';
            $cekongkir = null;
        }

        $provinsi = Province::all();
        return view('contents.landing.index',compact('provinsi','cekongkir'));
        // return $response['rajaongkir']['results'][0];

    }

    public function ajax($id){
        $cities = City::where('province_id','=', $id)->pluck('city_name','id');

        return json_encode($cities);
    }
}
