@extends('layouts.dashboard')
@section('content')
<div class="main-content">
    <section class="section">
      <div class="section-header">
        <h1>Edit Data</h1>
        <div class="section-header-breadcrumb">
          <div class="breadcrumb-item active"><a href="{{route('dashboard')}}">Dashboard</a></div>
          <div class="breadcrumb-item"><a href="{{route('kantor.index')}}"> Data Kantor</a></div>
        </div>
      </div>
      <div class="section-body">
        <div class="row">
          <div class="col-12 col-md-12 col-lg-12">
            <div class="card">
            <form method="POST" action="{{ route('kantor.update',$data = $kantor->id)}}" enctype="multipart/form-data">
                @method('patch')
                @csrf
                <div class="card-header">
                    <h4>Edit Data Kantor</h4>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label>Id Kantor</label>
                        <input type="text" name="id_kantor" class="form-control" value="{{ $kantor->id_kantor }}" disabled>
                        <label>Nama Kantor</label>
                        <input type="text" name="nama" class="form-control" value="{{ $kantor->nama }}" required>
                        <label>Telepon </label>
                        <input type="text" name="telepon_kantor" class="form-control" value="{{ $kantor->telepon_kantor }}" required>
                        <label>Provinsi</label>
                        <select class="form-control form-control-sm" name="provinsi" value="{{ $kantor->provinsi }}" required>
                            <option>Jawa Barat</option>
                            <option>Jawa Tengah</option>
                            <option>Jawa Timur</option>
                        </select>
                        <label>Kota/kabupaten</label>
                        <select class="form-control form-control-sm" name="kota_kabupaten" value="{{ $kantor->kota_kabupaten }}" required>
                            <option>Cirebon</option>
                            <option>Malang</option>
                            <option>Surabaya</option>
                        </select>
                        <label>Textarea</label>
                        <textarea class="form-control" name="alamat" required>{{ $kantor->alamat }}</textarea>
                    </div>
                <div class="card-footer text-right">
                    <button class="btn btn-primary mr-1" type="submit"><i class="fas fa-save"></i> Simpan</button>
                    <button class="btn btn-warning" type="reset"><i class="fas fa-undo"></i> Batal</button>
                </div>
                </div>
            </form>
        </div>
      </div>
    </section>
  </div>
@endsection
