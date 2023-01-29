@extends('layouts.landing')
@section('content')
{{-- <section class="contact-wrap pad-120" id="kontak">
    <span class="bg-text wow fadeInLeft" data-wow-offset="50" data-wow-delay=".20s"> Kontak </span>
    <div class="theme-container container">
        <div class="row">
            <div class="col-md-6 col-sm-8">
                <div class="title-wrap">
                    <h2 class="section-title wow fadeInLeft" data-wow-offset="50" data-wow-delay=".20s">Kontak kami</h2>
                    <p class="wow fadeInLeft" data-wow-offset="50" data-wow-delay=".20s" >Hubungi kami dangan mudah</p>
                </div>
                <ul class="contact-detail title-2">
                    <li class="wow slideInUp" data-wow-offset="50" data-wow-delay=".20s"> <span>Telp :</span> <p class="gray-clr"> (62 21) 2826 9999</p> </li>
                    <li class="wow slideInUp" data-wow-offset="50" data-wow-delay=".25s"> <span>Sosial Media:</span> <p class="gray-clr"> Facebook : Dianterin <br> Instagram : @dianterin_id </p> </li>
                    <li class="wow slideInUp" data-wow-offset="50" data-wow-delay=".30s"> <span>Email address:</span> <p class="gray-clr"> customer@dntrn.co.id <br> dianterininfo@dntrn.co.id </p> </li>
                </ul>
            </div>
        </div>
    </div>
</section> --}}

<article>
    <!-- Breadcrumb -->
    <section class="theme-breadcrumb pad-50">
        <div class="theme-container container ">
            <div class="row">
                <div class="col-sm-8 pull-left">
                    <div class="title-wrap">
                        <h2 class="section-title no-margin">Hubungi Kami</h2>
                        <p class="fs-16 no-margin"> Hubungi kami dangan mudah </p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <ol class="breadcrumb-menubar list-inline">
                        <li><a href="{{route('index')}}" class="gray-clr">Beranda</a></li>
                        <li class="active">Hubungi Kami</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <!-- /.Breadcrumb -->

    <!-- Contact Us -->
    <section class="contact-page pad-30">
        <div class="theme-container container">
            <div class="row">
                <div class="col-md-4 col-sm-6 col-md-offset-1">
                    <ul class="contact-detail title-2 pt-50">
                        <li class="wow fadeInUp" data-wow-offset="50" data-wow-delay=".30s"> <span>Telp :</span> <p class="gray-clr"> +(62 21) 2826 9999 </li>
                        <li class="wow fadeInUp" data-wow-offset="50" data-wow-delay=".40s"> <span>Sosial Media:</span> <p class="gray-clr"> Facebook : Dianterin <br> Instagram : @dianterin_id </p> </li>
                        <li class="wow fadeInUp" data-wow-offset="50" data-wow-delay=".50s"> <span>Alamat Email:</span> <p class="gray-clr"> customer@dntrn.co.id <br> dianterininfo@dntrn.co.id </p> </li>
                    </ul>
                </div>

                <div class="col-md-5 col-sm-6 col-md-offset-1 contact-form">
                    <div class="calculate-form">
                        <form class="row" method="POST" action="{{route('hubungikami.kirim')}}" encytype="multipart/form-data">
                            @csrf
                            <div class="form-group wow fadeInUp" data-wow-offset="50" data-wow-delay=".30s">
                                <div class="col-sm-3"> <label class="title-2"> Nama: </label></div>
                                <div class="col-sm-9"> <input type="text" name="name" id="name" required placeholder="" class="form-control"> </div>
                            </div>
                            <div class="form-group wow fadeInUp" data-wow-offset="50" data-wow-delay=".30s">
                                <div class="col-sm-3"> <label class="title-2"> Email: </label></div>
                                <div class="col-sm-9"> <input type="text" name="email" id="email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" placeholder="" class="form-control"> </div>
                            </div>
                            <div class="form-group wow fadeInUp" data-wow-offset="50" data-wow-delay=".30s">
                                <div class="col-sm-3"> <label class="title-2"> No.HP: </label></div>
                                <div class="col-sm-9"> <input type="text" name="phone" id="phone" placeholder="" class="form-control"> </div>
                            </div>
                            <div class="form-group wow fadeInUp" data-wow-offset="50" data-wow-delay=".30s">
                                <div class="col-sm-3"> <label class="title-2"> Pesan: </label></div>
                                <div class="col-sm-9"> <textarea class="form-control" name="message" id="message" required cols="25" rows="3"></textarea> </div>
                            </div>
                            <div class="form-group wow fadeInUp" data-wow-offset="50" data-wow-delay=".30s">
                                <div class="col-sm-9 col-xs-12 pull-right">
                                    <button name="submit"  class="btn-1"> Kirim Pesan </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.Contact Us -->

    <!-- Contact Map -->
    <section class="map pt-80">
        <div class="map-canvas">
            <div id="map-canvas"></div>
        </div>
    </section>
    <!-- /.Contact Map -->

</article>
@endsection

