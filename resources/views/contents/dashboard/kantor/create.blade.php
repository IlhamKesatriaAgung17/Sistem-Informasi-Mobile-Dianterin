@extends('layouts.dashboard')
@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Form Data Kantor</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{route('dashboard')}}">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="{{route('kantor.create')}}">Tambah Data Kantor</a></div>
            </div>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-12">
                    <div class="card">
                        <form method="POST" action="{{ route('kantor.store') }}" enctype="multipart/form-data">
                            @method('post')
                            @csrf
                            <div class="card-header">
                                <h4>Tambah Data Kantor</h4>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Nama Kantor</label>
                                    <input type="text" name="nama" class="form-control" required>
                                    <label>Telepon </label>
                                    <input type="text" name="telepon_kantor" class="form-control" required>
                                    <label>Provinsi</label>
                                    <select class="form-control form-control-sm" id="provinsi" name="provinsi" required>
                                        <option hidden>Pilih Provinsi...</option>
                                        @foreach ($provinces as $provinsi)
                                        <option value="{{$provinsi->id}}">{{$provinsi->name}}</option>
                                        @endforeach
                                    </select>
                                    <label class="">Kota/kabupaten</label>
                                    <select class="form-control form-control-sm" id="kota" name="kota_kabupaten" required>

                                    </select>
                                    <label>Kecamatan</label>
                                    <select class="form-control form-control-sm" id="kecamatan" name="kecamatan"
                                        required>
                                    </select>
                                    <label>Desa</label>
                                    <select class="form-control form-control-sm" id="desa" name="desa" required>

                                    </select>
                                    <label>Textarea</label>
                                    <textarea class="form-control" name="alamat"></textarea>
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
@push('after-scripts')
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $(document).ready(function () {
        $('#provinsi').on('change', function () {
            let id_provinsi = $('#provinsi').val();
            console.log(id_provinsi)
            $.ajax({
                url: '{{route("getkota")}}',
                type: "POST",

                data: {
                    id_provinsi:id_provinsi,
                    "_token": "{{ csrf_token() }}"
                },
                success: function (response) {
                    $('#kota').html(response);
                    $('#kecamatan').html('');
                    $('#desa').html('');
                },
                error : function(data){
                    console.log('error',data);
                }
            });
        });
        $('#kota').on('change', function () {
            let id_kota = $('#kota').val();
            console.log(id_kota)
            $.ajax({
                url: '{{route("getkecamatan")}}',
                type: "POST",
                data: {
                    id_kota:id_kota,
                    "_token": "{{ csrf_token() }}"
                },
                success: function (response) {
                    $('#kecamatan').html(response);
                    $('#desa').html('');
                },
                error : function(data){
                    console.log('error',data);
                }
            });
        });
        $('#kecamatan').on('change', function () {
            let id_kecamatan = $('#kecamatan').val();
            console.log(id_kecamatan)
            $.ajax({
                url: '{{route("getdesa")}}',
                type: "POST",
                data: {
                    id_kecamatan:id_kecamatan,
                    "_token": "{{ csrf_token() }}"
                },
                success: function (response) {
                    $('#desa').html(response)
                },
                error : function(data){
                    console.log('error',data);
                }
            });
        });
    });

</script>
@endpush
@endsection
