<header class="vs-header header-layout2">
    <div class="header-top">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col col-sm-auto">
                    <div class="header-logo">
                        <a href="{{route('home.index')}}">
                            <img src="{{asset('logo/logo-simik.jpg')}}" style="width: 100px" alt="logo">
                        </a>
                    </div>
                </div>
                <div class="col-6 col-sm-auto d-none d-lg-block">
                    <div class="header-links style3 style-white">
                        <ul>
                            <li class="d-none d-xl-inline-block"><i class="fas fa-envelope"></i>Email: <a href="mailto:nazir@simik.id">nazir@simik.id</a></li>
                            <li><i class="fas fa-mobile-alt"></i>Kontak : <a href="tel:+6285260061002">+62 852 6006 1002</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col">
                    <div class="row align-items-center justify-content-end gx-3">
                        <div class="col-auto d-none d-lg-block">
                            <div class="header-icons">
                                <button class="simple-icon style2 sideMenuToggler"><i class="far fa-bars"></i></button>
                            </div>
                        </div>
                        <div class="col-auto ">
                            {{-- <a href="{{route('home.daftar')}}" class="vs-btn sideMenuToggler">Pendaftaran</a> --}}
                            <a href="{{route('home.daftar')}}" class="vs-btn">Pendaftaran</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="menu-area">
            <div class="row justify-content-between align-items-center">
                <div class="col">
                    <nav class="main-menu menu-style2 d-none d-lg-block">
                        <ul>
                            <li>
                                <a href="#">Beranda</a>

                            </li>
                            <li>
                                <a href="#">Tentang Kami</a>
                            </li>
                            {{-- <li class="menu-item-has-children">
                                <a href="match.html">Classes</a>
                                <ul class="sub-menu">
                                    <li><a href="class.html">Class Style 1</a></li>
                                    <li><a href="class-2.html">Class Style 2</a></li>
                                    <li><a href="class-details.html">Class Details</a></li>
                                </ul>
                            </li> --}}
                            <li class="menu-item-has-children">
                                <a href="blog.html">Blog</a>
                                <ul class="sub-menu">
                                    <li><a href="blog.html">Blog</a></li>
                                    <li><a href="blog-details.html">Blog Details</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="#">Kontak Kami</a>
                            </li>
                        </ul>
                    </nav>
                    <button class="vs-menu-toggle d-inline-block d-lg-none"><i class="fal fa-bars"></i></button>
                </div>
                <div class="col-auto">
                    <button class="simple-icon searchBoxTggler"><i class="far fa-search"></i></button>
                </div>
            </div>
        </div>
    </div>
</header>
