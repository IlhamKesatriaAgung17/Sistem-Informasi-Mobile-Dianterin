<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Kantor;
use App\Helpers\Helper;
use App\Models\Province;
use App\Models\Regency;
use App\Models\District;
use App\Models\Village;

class KantorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kantor = Kantor::paginate(10);
        return view('contents.dashboard.kantor.index',compact('kantor'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $provinces = Province::all();
        return view('contents.dashboard.kantor.create',compact('provinces'));

    }

    // public function getdata(Request $request){
    //     echo "asdsas";
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nama           = $request->nama;
        $telepon_kantor = $request->telepon_kantor;
        $provinsi       = $request->provinsi;
        $kota_kabupaten = $request->kota_kabupaten;
        $alamat         = $request->alamat;

        $id_kantor = Helper::IDGenerator(new Kantor,'id_kantor',3,'KTR');
        $kantor = new Kantor;
        $kantor->id_kantor = $id_kantor;
        $kantor->nama = $nama;
        $kantor->telepon_kantor = $telepon_kantor;
        $kantor->provinsi = $provinsi;
        $kantor->kota_kabupaten = $kota_kabupaten;
        $kantor->alamat = $alamat;

        $kantor->save();
        return redirect()->route('kantor.index')->with('toast_success', 'Data Berhasil ditambahkan!');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Requset $request, Kantor $kantor)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Kantor $kantor)
    {
        return view('contents.dashboard.kantor.edit',compact('kantor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kantor $kantor)
    {
        $kantor->update([
            'nama' => $request->nama,
            'telepon_kantor' => $request->telepon_kantor,
            'provinsi' => $request->provinsi,
            'kota_kabupaten' => $request->kota_kabupaten,
            'alamat' => $request->alamat,
        ]);
        return redirect()->route('kantor.index')->with('toast_success', 'Data berhasil di ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kantor $kantor)
    {

        $kantor->delete();

        return response()->json(['status'=>'Data Berhasil di hapus']);
    }
    public function getkota(Request $request)
    {
        // echo "asasas";

        $id_provinsi = $request->post('id_provinsi');
        $kotas = Regency::where('province_id',$id_provinsi)->get();

        $option = "<option>Pilih Kota/Kabupaten</option>";
        foreach ($kotas as $kota){
            $option .= "<option value='$kota->id'>$kota->name</option>";
        }
        echo $option;
    }
    public function getkecamatan(Request $request)
    {
        // echo "asasas";

        $id_kota = $request->post('id_kota');
        $kecamatans = District::where('regency_id',$id_kota)->get();
        $option = "<option>Pilih Kecamatan</option>";
        foreach ($kecamatans as $kecamatan){
            $option .="<option value='$kecamatan->id'>$kecamatan->name</option>";
        }
        echo $option;
    }
    public function getdesa(Request $request)
    {
        // echo "asasas";

        $id_kecamatan = $request->post('id_kecamatan');
        $desas = Village::where('district_id',$id_kecamatan)->get();
        $option = "<option>Pilih Desa</option>";
        foreach ($desas as $desa){
            $option .="<option value='$desa->id'>$desa->name</option>";
        }
        echo $option;
    }

}
