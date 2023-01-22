@extends('layouts.dashboard')
@section('content')
<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Data Kantor </h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item"><a href="#">Data Kantor</a></div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                <a href="{{route('kantor.create')}}" class="btn btn-icon icon-left btn-primary"><i
                        class="fas fa-plus"></i> Tambah Data</a>
                <table class="table table-striped table-bordered" style="margin: 1%">
                    <tr>
                        <td>No</td>
                        <td>Id kantor</td>
                        <td>Nama</td>
                        <td>Telepon Kantor</td>
                        <td>Provinsi</td>
                        <td>Kota/Kabupaten</td>
                        <td>Alamat</td>
                        <td class="text-center">Aksi</td>
                    </tr>
                    @foreach($kantor as $key => $data)
                    <tr>
                        <input type="hidden" class="delete_id" value="{{ $data->id }}">
                        <input type="hidden" class="nama" value="{{ $data->nama }}">
                        <td>{{$key + $kantor->firstItem() }}</td>
                        <td>{{$data->id_kantor??null}}</td>
                        <td>{{$data->nama}}</td>
                        <td>{{$data->telepon_kantor}}</td>
                        <td>{{$data->provinsi}}</td>
                        <td>{{$data->kota_kabupaten}}</td>
                        <td>{{$data->alamat}}</td>
                        <td>
                            <div class="btn-group">
                                <a href="{{ route('kantor.edit', ['kantor' => $data->id]) }}" class="btn btn-warning"
                                    data-toggle="tooltip" data-placement="top" title="Edit Data">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form action="{{ route('kantor.destroy', ['kantor' => $data->id]) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button  type="button" data-id="{{$data->id}}" data-toggle="tooltip" class="btn btn-danger btndelete" title="Hapus Data">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </table>
                {{ $kantor->links() }}
            </div>
        </div>
    </section>
</div>

@push('page-scripts')
<script src="{{asset('vendors/dashboard/assets/modules/sweetalert/sweetalert.min.js')}}"></script>
@endpush
@push('after-scripts')
<script>
    $(document).ready(function () {

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

$('.btndelete').click(function (e) {
    e.preventDefault();

    var deleteid = $(this).closest("tr").find('.delete_id').val();
    var nama = $(this).closest("tr").find('.nama').val();

    swal({
            title: "Yakin Hapus?",
            text: "Setelah dihapus,Anda tidak dapat memulihkan " + nama +" ",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {

                var data = {
                    "_token": $('input[name=_token]').val(),
                    'id': deleteid,
                };
                $.ajax({
                    type: "DELETE",
                    url: 'kantor/' + deleteid,
                    data: data,
                    success: function (response) {
                        swal(response.status, {
                                icon: "success",
                            })
                            .then((result) => {
                                location.reload();
                            });
                    }
                });
            }
        });
});

});

</script>
@endpush
@include('sweetalert::alert')
@endsection
