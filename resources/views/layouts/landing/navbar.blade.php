<!-- Header -->
{{-- <header class="header-main">

    <!-- Header Topbar -->
    <div class="top-bar font2-title1 white-clr">
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
    </div>
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
                            {{-- </li>
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

</header> --}}
<!-- /.Header -->

<!-- Header -->
<header class="header-main header-style3">

    <!-- Header Topbar -->
    <div class="top-bar2 " style="background-color: rgb(0, 0, 0)">
        <div class="theme-container container">
            <div class="row">
                <div class="col-md-2 col-sm-12">
                    <a class="navbar-logo" href="#"> <img src="{{asset('assets/img/logo/rsz_logo5.png')}}" alt="logo" /> </a>
                </div>
                <div class="col-md-10 col-sm-12 fs-12 text-right">
                    <ul class="list-inline">
                        <li> <h6 class="font2-light"> Kantor Cabang Utama </h6> <p class="theme-clr  font2-title1"> Komplek CSB Mall,No.9,Pekiringan,Kec.Kesambi,Kota Cirebon</p> </li>
                        <li> <h6 class="font2-light"> Jam Kerja </h6> <p class="theme-clr  font2-title1"> Senin-Sabtu,09:00 - 18:00 WIB</p> </li>
                        <li> <h6 class="font2-light"> Butuh bantuan ? </h6> <p class="theme-clr font2-title1"> +(62 21) 2826 9999 </p></li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
    <!-- /.Header Topbar -->

    <!-- Header Logo & Navigation -->
    <nav class="menu-bar font2-title1 white-clr" style="background-color: rgb(244, 155, 38)">
        <div class="theme-container container">
            <div class="row">
                <div class="col-xs-12 visible-xs">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <div class="visible-xs">
                        <a data-toggle="modal" href="{{route('login')}}" class="login fs-12 black-bg">Login </a>
                    </div>
                </div>
                <div class="col-md-10 col-sm-10 col-xs-12 fs-12">
                    <a class="sticky-logo hidden-sm" href="index-2.html"> <img alt="" src="{{asset('assets/img/logo/rsz_logo5.png')}}" /> </a>
                    <div id="navbar" class="collapse navbar-collapse no-pad">
                        <ul class="navbar-nav theme-menu">
                            <li class="nav-item {{ Route::is('index') ? 'active' : '' }}">
                                <a class="nav-link" href="{{route('index')}}" >Beranda</a>
                            </li>
                            <li class="nav-item {{ Route::is('tentang') ? 'active' : '' }}" >
                                <a class="nav-link" href="{{route('tentang')}}">Tentang</a>
                            </li>
                            <li class="nav-item {{ Route::is('cek-ongkir') ? 'active' : '' }}">
                                <a class="nav-link" href="{{route('cek-ongkir')}}"> Cek Ongkir </a>
                            </li>
                            <li class="nav-item {{ Route::is('hubungi-kami') ? 'active' : '' }}">
                                <a class="nav-link" href="{{route('hubungi-kami')}}">Hubungi Kami </a>
                            </li>
                            {{-- <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" >Blog</a>
                                <ul class="dropdown-menu">
                                    <li><a href="blog.html">Blog</a></li>
                                    <li><a href="blog-left.html">Blog Left</a></li>
                                    <li><a href="single-blog.html">Single Post</a></li>
                                </ul>
                            </li> --}}
                            <li><span class="search  white-clr transition"> </span></li>
                        </ul>
                    </div>
                </div>
                @if (Route::has('login'))
                    @auth
                        @if (Auth()->user()->role==1)
                        <div class="col-md-2 col-sm-2 text-right hidden-xs">
                            <a data-toggle="modal" href="{{route('admin.dashboard')}}" class="sign-in fs-12"  style="background-color: rgb(62, 48, 255)">{{Auth::user()->name}}</a>
                        </div>
                        @elseif (Auth()->user()->role==2)
                            <li class="col-md-2 col-sm-2 text-right hidden-xs dropdown">
                                <a href="#" class="sign-in fs-12 dropdown-toggle" data-toggle="dropdown"  role="button" aria-haspopup="true" style="background-color: rgb(62, 48, 255)">{{Auth::user()->name}}</a>
                                <ul class="dropdown-menu">
                                    <li><a href="{{route('logout')}}" class="dropdown-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="bi bi-box-arrow-left"></i>Logout</a></li>
                                </ul>
                            </li>
                        <form id="logout-form" action ="{{route('logout')}}" method="POST" class="d-none">
                            @csrf
                        </form>
                        @endif
                    @else
                    <div class="col-md-2 col-sm-2 text-right hidden-xs">
                        <a data-toggle="modal" href="{{route('login')}}" class="sign-in fs-12"  style="background-color: rgb(62, 48, 255)">Login</a>
                    </div>
                    @endauth

                @endif
            </div>
        </div>
    </nav>
    <!-- /.Header Logo & Navigation -->

</header>
<!-- /.Header -->
