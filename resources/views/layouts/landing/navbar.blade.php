<!-- Header -->
<header class="header-main">

    <!-- Header Topbar -->
    {{-- <div class="top-bar font2-title1 white-clr">
        <div class="theme-container container">
            <div class="row">
                <div class="col-md-6 col-sm-5">
                    <ul class="list-items fs-10">
                        <li><a href="#">sitemap</a></li>
                        <li class="active"><a href="#">Privacy</a></li>
                        <li><a href="#">Pricing</a></li>
                    </ul>
                </div>
                <div class="col-md-4 col-sm-7 fs-12">
                    <p class="contact-num">  <i class="fa fa-phone"></i> Hubungi Kami : <span class="theme-clr"> <a href="">+62 896-2116-3045</a></span> </p>
                </div>
            </div>
        </div>
        <a data-toggle="modal" href="#login-popup" class="sign-in fs-12 theme-clr-bg"> sign in </a>
    </div> --}}
    <!-- /.Header Topbar -->

    <!-- Header Logo & Navigation -->
    <nav class="menu-bar font2-title1">
        <div class="theme-container container">
            <div class="row">
                <div class="col-md-2 col-sm-2">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-logo" href="#"> <img src="{{asset('assets/img/logo/rsz_logo5.png')}}" alt="logo" /> </a>
                </div>
                <div class="col-md-10 col-sm-10 fs-12">
                    <div id="navbar" class="collapse navbar-collapse no-pad">
                        <ul class="navbar-nav theme-menu">
                            <li class="dropdown active">
                                <a href="{{route('index')}}">Beranda</a>
                                {{-- <ul class="dropdown-menu">
                                    <li><a href="index-2.html">Home Page1</a></li>
                                    <li><a href="index-3.html">Home Page2</a></li>
                                    <li><a href="index-4.html">Home Page3</a></li>

                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" >Submenu Level 1 </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">Submenu</a></li>
                                            <li><a href="#">Submenu</a></li>
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" >Submenu Level 2</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="#">Submenu</a></li>
                                                    <li><a href="#">Submenu</a></li>
                                                    <li><a href="#">Submenu</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                </ul> --}}
                            </li>
                            <li> <a href="#about">Tentang Kami</a> </li>
                            <li> <a href="#cek-ongkir">Cek Ongkir</a> </li>
                            <li> <a href="#paket-pengiriman">Paket Pengiriman</a></li>
                            <li> <a href="#testimoni">Testimoni</a></li>
                            <li> <a href="#kontak">Kontak</a> </li>
                            <li> <a href="{{ route('login') }}">Masuk</a></li>
                            <li><span class=""> </span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <!-- /.Header Logo & Navigation -->

</header>
<!-- /.Header -->
