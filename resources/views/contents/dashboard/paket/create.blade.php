@extends('layouts.dashboard')
@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Form Data Paket</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{route('dashboard')}}">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="{{route('paket.create')}}">Tambah Data Paket</a></div>
            </div>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-12">
                    <div class="card">
                        <form method="POST" action="{{ route('paket.store') }}" enctype="multipart/form-data">
                            @method('post')
                            @csrf
                            <div class="card-header">
                                <h4>Tambah Data Paket</h4>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Tanggal</label>
                                    <input type="date" name="date" class="form-control" required>
                                    <label>Nama Pengirim</label>
                                    <input type="text" name="nama_pengirim" class="form-control" required>
                                    <label>No Pengirim </label>
                                    <input type="text" name="no_pengirim" class="form-control" required>
                                    <label>Nama Penerima</label>
                                    <input type="text" name="nama_penerima" class="form-control" required>
                                    <label>No Penerima </label>
                                    <input type="text" name="no_penerima" class="form-control" required>
                                    <label>Provinsi</label>
                                    <select class="form-control form-control-sm" id="provinsi" name="provinsi" required>
                                        <option>Pilih Provinsi...</option>
                                    </select>
                                    <label>Kota/kabupaten</label>
                                    <select class="form-control form-control-sm" id="kota" name="kota_kabupaten"
                                        required>
                                        <option>Pilih Kota/Kabupaten...</option>
                                    </select>
                                    <label>Kecamatan</label>
                                    <select class="form-control form-control-sm" id="kecamatan" name="kecamatan"
                                        required>
                                        <option>Pilih Kecamatan...</option>
                                    </select>
                                    <label>Desa</label>
                                    <select class="form-control form-control-sm" id="desa" name="desa" required>
                                        <option>Pilih Desa...</option>
                                    </select>
                                    <label>Textarea</label>
                                    <textarea class="form-control" name="alamat"></textarea>
                                    <label>Jenis Layanan</label>
                                    <input type="text" name="layanan" class="form-control" required>
                                    <label>Status</label>
                                    <input type="text" name="status" class="form-control" required>
                                </div>
                                <div class="card-footer text-right">
                                    <button class="btn btn-primary mr-1" type="submit"><i class="fas fa-save"></i>
                                        Simpan</button>
                                    <button class="btn btn-warning" type="reset"><i class="fas fa-undo"></i>
                                        Batal</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
    </section>
</div>

@endsection
