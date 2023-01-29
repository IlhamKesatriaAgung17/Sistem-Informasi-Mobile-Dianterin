@extends('layouts.landing')
@section('content')

<section class="calculate pt-100" id="cek-ongkir">
    <div class="theme-container container">
        <span class="bg-text right wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s"> Cek Ongkir</span>
        <div class="row">
            <div class="col-md-6 text-center">
                <img src="assets/img/block/Courier-Man.png" alt="" class="wow slideInLeft" data-wow-offset="50" data-wow-delay=".20s" />
            </div>
            <div class="col-md-6">
                <div class="pad-10"></div>
                <h2 class="section-title pb-10 wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s" > Cek Ongkir </h2>
                <p class="fs-16 wow fadeInUp" data-wow-offset="50" data-wow-delay=".25s">Silahkan cek ongkos kirim anda berdasarkan tempat yang ingin dituju</p>
                <div class="calculate-form">
                    <form class="row" action="{{route('cek-ongkir')}}" method="GET">
                        @csrf
                        {{-- <div class="form-group wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s">
                            <div class="col-sm-3"> <label class="title-2"> Nama </label></div>
                            <div class="col-sm-9"> <input data-bind="in:value, f: float" data-name="height" type="text" placeholder="" class="form-control"> </div>
                        </div> --}}
                        <div class="form-group wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s">
                            <div class="col-sm-3"> <label class="title-2"> Provinsi Pengirim </label></div>
                            <div class="col-sm-9">
                                <div class="form-group">
                                    <select data-bind="in:value" name="province_from" data-name="package" class="selectpicker form-control" data-live-search="true" data-width="100%" data-toggle="tooltip" title="Pilih Provinsi" required>
                                        <option value="">Pilih Provinsi</option>
                                        @foreach ($provinsi as $data )
                                            <option value="{{$data->id}}">{{$data->province}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s">
                            <div class="col-sm-3"> <label class="title-2"> Kota/Kabupaten Pengirim </label></div>
                            <div class="col-sm-9">
                                <div class="form-group">
                                    <select data-bind="in:value" data-name="package" class="form-select form-control" data-live-search="true" data-width="100%" data-toggle="tooltip"  name="origin" id="origin" title="Pilih Kota/Kabupaten" required>
                                        <option value="" holder>Pilih Kota/Kabupaten</option>
                                        {{-- @foreach ($cities as $data )
                                            <option value="{{$data->id}}">{{$data->city_name}}</option>
                                        @endforeach --}}
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s">
                            <div class="col-sm-3"> <label class="title-2"> Provinsi Penerima: </label></div>
                            <div class="col-sm-9">
                                <div class="form-group">
                                    <select data-bind="in:value" name="province_to" data-name="package" class="selectpicker form-control" data-live-search="true" data-width="100%" data-toggle="tooltip" title="Pilih Provinsi" required>
                                        <option value="">Pilih Provinsi</option>
                                        @foreach ($provinsi as $data )
                                            <option value="{{$data->id}}">{{$data->province}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s">
                            <div class="col-sm-3"> <label class="title-2"> Kota/Kabupaten Penerima: </label></div>
                            <div class="col-sm-9">
                                <div class="form-group">
                                    <select data-bind="in:value" name="destination" data-name="package" class="form-select form-control" data-live-search="true" data-width="100%" data-toggle="tooltip" title="Pilih Kota/Kabupaten" required>
                                        <bold><option value="">Pilih Kota/Kabupaten</option></bold>
                                    </select>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="form-group wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s">
                            <div class="col-sm-3"> <label class="title-2"> location: </label></div>
                            <div class="col-sm-9">
                                <div class="col-sm-6 no-pad">
                                    <input type="text" data-bind="in:value" data-name="locations[from]" placeholder="From" class="form-control from fw-600">
                                </div>
                                <div class="col-sm-6 no-pad">
                                    <input type="text" data-bind="in:value" data-name="locations[to]" placeholder="To" class="form-control to fw-600">
                                </div>
                            </div>
                        </div> --}}
                        <div class="form-group wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s">
                            <div class="col-sm-3"> <label class="title-2"> Berat </label></div>
                            <div class="col-sm-9">
                                <input data-bind="in:value, f: float" name="weight" data-name="height" type="text" placeholder="" class="form-control" required>
                                <small>Isikan dalam satuan gram misalnya = 1000 = 1 kg</small>
                            </div>
                        </div>
                        {{-- <div class="form-group wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s">
                            <div class="col-sm-3"> <label class="title-2"> Paket Pengiriman </label></div>
                            <div class="col-sm-9">
                                <div class="form-group">
                                    <select data-bind="in:value" name="courier" data-name="package" class="selectpicker form-control" data-live-search="true" data-width="100%" required
                                            data-toggle="tooltip" title="Pilih Paket Pengiriman">
                                        <option value="" holder>Pilih Paket Pengiriman</option>
                                        <option value="jne">Dianterin 1</option>
                                        <option value="tiki">Dianterin 2</option>
                                        <option value="post">Dianterin 3</option>
                                    </select>
                                </div>
                            </div>
                        </div> --}}
                        <div class="form-group wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s">
                            <div class="col-sm-9 col-xs-12 pull-right">
                                <button type="submit" class="btn btn-1 btn-block" style="text-align: center">
                                    <span> Cek Ongkir</span>
                                    {{-- <span data-bind="out:price, f:currency" data-name="cost" class="btn-1 dark">
                                        <span class="pr-sign">-&nbsp;</span> $<span class="pr-wrap" style="display: none;"><span class="pr">0</span></span>
                                    </span> --}}
                                </button>
                            </div>
                        </div>
                    </form>
                    @if ($cekongkir)
                    {{-- <div class="row">
                        <div class="col">
                            <table class="table table-striped tab-bordered table-hover" width="100%">
                                <thead>
                                    <tr>
                                       <th>Service</th>
                                       <th>Deskripsi</th>
                                       <th>Harga</th>
                                       <th>Estimasi</th>
                                       <th>Catatan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($cekongkir as $data)
                                    <tr>
                                        <td>{{$data['service']}}</td>
                                        <td>{{$data['description']}}</td>
                                        <td>{{$data['cost'][0]['value']}}</td>
                                        <td> {{$data['cost'][0]['etd']}} hari</td>
                                        <td>{{$data['cost'][0]['note']}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div> --}}
                    <div class="row">
                        <div class="col-md-12 pad-30 wow fadeInRight" data-wow-offset="50" data-wow-delay=".30s">
                            <div class="prod-info white-clr" style="background-color: rgb(78, 78, 240)">
                                @foreach ($cekongkir as $data)
                                <ul>
                                    <li> <span class="title-2">Paket Pengiriman:</span> <span class="fs-16">Dianterin {{$data['service']}}</span> </li>
                                    <li> <span class="title-2">Deskripsi:</span> <span class="fs-16">{{$data['description']}}</span> </li>
                                    <li> <span class="title-2">Harga:</span> <span class="fs-16">{{$data['cost'][0]['value']}}</span> </li>
                                    <li> <span class="title-2">Estimasi:</span> <span class="fs-16">{{$data['cost'][0]['etd']}} hari</span> </li>
                                    <li> <span class="title-2 text-white">status:</span> <span>Yes</span> </li>
                                    {{-- <li> <span class="title-2">Catatan:</span> <span class="fs-16">{{$data['cost'][0]['note']}}</span> </li> --}}
                                </ul>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    @else

                    @endif

                </div>
                <div class="pt-80 hidden-lg"></div>
            </div>
        </div>
    </div>
</section>
<br>

<!-- Steps -->
<section class="steps-wrap mask-overlay pad-80">
    <div class="theme-container container">
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="font-2 fs-50 wow fadeInLeft" data-wow-offset="50" data-wow-delay=".20s"> 1. </div>
                <div class="steps-content wow fadeInLeft" data-wow-offset="50" data-wow-delay=".25s">
                    <h2 class="title-3">Pesan</h2>
                    <p class="gray-clr">Melakukan pengriman barang <br> dari kantor cabang kami</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="font-2 fs-50 wow fadeInLeft" data-wow-offset="50" data-wow-delay=".20s"> 2. </div>
                <div class="steps-content wow fadeInLeft" data-wow-offset="50" data-wow-delay=".25s">
                    <h2 class="title-3">Menunggu</h2>
                    <p class="gray-clr">Menunggu barang Anda akan <br>diproses terlebih dahulu</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="font-2 fs-50 wow fadeInLeft" data-wow-offset="50" data-wow-delay=".20s"> 3. </div>
                <div class="steps-content wow fadeInLeft" data-wow-offset="50" data-wow-delay=".25s">
                    <h2 class="title-3">Kirim</h2>
                    <p class="gray-clr">Setelah selesai barang akan<br>dikirimkan ke alamat yang dituju</p>
                </div>
            </div>
        </div>
    </div>
    <div class="step-img wow slideInRight" data-wow-offset="50" data-wow-delay=".20s"> <img src="assets/img/block/step-img.png" alt="" /> </div>
</section>
<!-- /.Steps -->

@endsection

