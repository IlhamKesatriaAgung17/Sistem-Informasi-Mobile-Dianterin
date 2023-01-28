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
                    <form class="row">
                        <div class="form-group wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s">
                            <div class="col-sm-3"> <label class="title-2"> Provinsi Pengirim </label></div>
                            <div class="col-sm-9"> <input data-bind="in:value, f: float" data-name="height" type="text" placeholder="" class="form-control"> </div>
                        </div>
                        <div class="form-group wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s">
                            <div class="col-sm-3"> <label class="title-2"> Kota/Kabupaten Pengirim </label></div>
                            <div class="col-sm-9"> <input data-bind="in:value, f: float" data-name="width" type="text" placeholder="" class="form-control"> </div>
                        </div>
                        <div class="form-group wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s">
                            <div class="col-sm-3"> <label class="title-2"> Provinsi Penerima: </label></div>
                            <div class="col-sm-9"> <input data-bind="in:value, f: float" data-name="depth" type="text" placeholder="" class="form-control"> </div>
                        </div>
                        <div class="form-group wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s">
                            <div class="col-sm-3"> <label class="title-2"> Kota/Kabupaten Penerima: </label></div>
                            <div class="col-sm-9"> <input data-bind="in:value, f: float" data-name="weight" type="text" placeholder="" class="form-control"> </div>
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
                            <div class="col-sm-3"> <label class="title-2"> Paket Pengiriman </label></div>
                            <div class="col-sm-9">
                                <div class="form-group">
                                    <select data-bind="in:value" data-name="package" class="selectpicker form-control" data-live-search="true" data-width="100%"
                                            data-toggle="tooltip" title="select your package">
                                        <option value="cost">Paket Pengirman</option>
                                        <option value="cost + 25">Fastest Delivery: + $25</option>
                                        <option value="cost*0.9">Discount Delivery: -10%</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s">
                            <div class="col-sm-9 col-xs-12 pull-right">
                                <div class="btn-1"> <span> Cek Ongkir </span>
                                    <span data-bind="out:price, f:currency" data-name="cost" class="btn-1 dark">
                                        <span class="pr-sign">-&nbsp;</span> $<span class="pr-wrap" style="display: none;"><span class="pr">0</span></span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="pt-80 hidden-lg"></div>
            </div>
        </div>
    </div>
</section>

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
