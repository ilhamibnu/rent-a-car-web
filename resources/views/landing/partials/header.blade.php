<header class="boxcar-header header-style-v1 header-default">
    <div class="header-inner">
        <div class="inner-container">
            <!-- Main box -->
            <div class="c-box">
                <div class="logo-inner">
                    <div class="logo"><a href="/"><img src="{{ asset('landing/images/logo.svg') }}" alt="" title="Boxcar"></a></div>
                    <div class="layout-search">

                    </div>
                </div>

                <!--Nav Box-->
                <div class="nav-out-bar">
                    <nav class="nav main-menu">
                        <ul class="navigation" id="navbar">
                            <li class="current-dropdown current"><a href="/">Beranda</a></li>
                            </li>
                            @if (Auth::check () && Auth::user ()->role == 'user')
                            <li class="current-dropdown right-one"><span>{{ Auth::user()->name }} <i class="fa-solid fa-angle-down"></i></span>
                                <ul class="dropdown">
                                    <li><a href="/user/penyewaan">Penyewaan</a></li>
                                    <li><a href="/user/cart">Keranjang</a></li>
                                    <li><a href="/user/profil">Profil</a></li>
                                    <li><a href="/user/logout">Keluar</a></li>
                                </ul>
                            </li>
                            @else
                            <li><a href="/user/login">Masuk / Daftar</a></li>
                            @endif
                        </ul>
                    </nav>
                    <!-- Main Menu End-->
                </div>
                <div class="right-box">
                    <div class="mobile-navigation">
                        <a href="#nav-mobile" title="">
                            <!-- <i class="fa fa-bars"></i> -->
                            <svg width="22" height="11" viewBox="0 0 22 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="22" height="2" fill="white" />
                                <rect y="9" width="22" height="2" fill="white" />
                            </svg>

                        </a>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu  -->
        </div>
    </div>

    <!-- Header Search -->
    <div class="search-popup">
        <span class="search-back-drop"></span>
        <button class="close-search"><span class="fa fa-times"></span></button>

        <div class="search-inner">
            <form method="post" action="https://creativelayers.net/themes/boxcar-html/index.html">
                <div class="form-group">
                    <input type="search" name="search-field" value="" placeholder="Search..." required="">
                    <button type="submit"><i class="fa fa-search"></i></button>
                </div>
            </form>
        </div>
    </div>
    <!-- End Header Search -->

    <div id="nav-mobile"></div>
</header>
