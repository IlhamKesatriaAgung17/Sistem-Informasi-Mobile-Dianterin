@extends('layouts.landing')
@section('content')

<body id="home">
    <!-- Preloader -->
    <div id="preloader">

        <div class="small1">
            <div class="small ball smallball1"></div>
            <div class="small ball smallball2"></div>
            <div class="small ball smallball3"></div>
            <div class="small ball smallball4"></div>
        </div>


        <div class="small2">
            <div class="small ball smallball5"></div>
            <div class="small ball smallball6"></div>
            <div class="small ball smallball7"></div>
            <div class="small ball smallball8"></div>
        </div>

        <div class="bigcon">
            <div class="big ball"></div>
        </div>

    </div>
    <!-- /.Preloader -->

    <!-- Main Wrapper -->
    <main class="wrapper">

        <!-- Content Wrapper -->
        <article>
            <!-- Banner -->
            <section class="banner mask-overlay pad-120 white-clr">
                <div class="container theme-container rel-div">
                    <img class="pt-10 effect animated fadeInLeft" alt="" src="assets/img/icons/icon-1.png" />
                    <ul class="list-items fw-600 effect animated wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s">
                        <li><a href="#about">Cepat</a></li>
                        <li><a href="#about">Terjamin</a></li>
                        <li><a href="#about">Diseluruh Indonesia</a></li>
                    </ul>
                    <h2 class="section-title fs-48 effect animated wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s"> DIANTERIN<br> <span class="theme-clr"> courier </span> & <span class="theme-clr"> delivery </span> services </h2>
                </div>
                <div class="pad-50 visible-lg"></div>
            </section>
            <!-- /.Banner -->

            <!-- Track Product -->
            <section>
                <div class="theme-container container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 track-prod clrbg-before wow slideInUp" data-wow-offset="50" data-wow-delay=".20s">
                            @if (Route::has('login'))
                                @auth
                                    @if (Auth()->user()->role==1)
                                    <h2 class="title-1"> Lacak Paket Kamu</h2> <span class="font2-light fs-12"><b>Silahkan lacak paket Anda disini !</b></span>
                                    <div class="row">
                                        <form class="">
                                            <div class="col-md-7 col-sm-7">
                                                <div class="form-group">
                                                    <input type="text" placeholder="Masukan No Resi" required="" class="form-control box-shadow">
                                                </div>
                                            </div>
                                            <div class="col-md-5 col-sm-5">
                                                <div class="form-group">
                                                    <button type="submit" class="btn-1">Lacak Paket</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    @elseif (Auth()->user()->role==2)
                                    <h2 class="title-1"> Lacak Paket Kamu</h2> <span class="font2-light fs-12"><b>Silahkan lacak paket Anda disini !</b></span>
                                    <div class="row">
                                        <form class="">
                                            <div class="col-md-7 col-sm-7">
                                                <div class="form-group">
                                                    <input type="text" placeholder="Masukan No Resi" required="" class="form-control box-shadow">
                                                </div>
                                            </div>
                                            <div class="col-md-5 col-sm-5">
                                                <div class="form-group">
                                                    <button type="submit" class="btn-1">Lacak Paket</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    @endif
                                    @else
                                    <h2 class="title-1"> Lacak Paket Kamu</h2> <span class="fs-12 font2-light"><b> Untuk melacak paket Anda, silahkan login terlebih dahulu !</b></span>
                                    <div class="row">
                                        <form class="">
                                            <div class="col-md-7 col-sm-7">
                                                <div class="form-group">
                                                    <input type="text" placeholder="Masukan No Resi" required="" class="form-control box-shadow">
                                                </div>
                                            </div>
                                            <div class="col-md-5 col-sm-5">
                                                <div class="form-group">
                                                    <button type="submit" class="btn-1"><a href="{{route('login')}}">Lacak Paket</a></button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                @endauth
                            @endif
                        </div>
                    </div>
                </div>
            </section>
            <!-- /.Track Product -->

            @include('contents.landing.tentang')

            <!-- Calculate Your Cost -->
           {{-- @include('contents.landing.ongkir') --}}
            <!-- /.Calculate Your Cost -->

            <!-- Pricing & Plans -->
            {{-- @include('contents.landing.paket_pengriman') --}}
            <!-- /.Pricing & Plans -->

            <!-- Testimonial -->
            @include('contents.landing.testimoni')
            <!-- /.Testimonial -->

            <!-- Contact us -->
            {{-- @include('contents.landing.kontak') --}}
            <!-- /.Contact us -->
        </article>
        <!-- /.Content Wrapper -->
    </main>
    <!-- / Main Wrapper -->

</body>
@endsection
