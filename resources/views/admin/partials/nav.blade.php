<header class="main-nav">
    <div class="sidebar-user text-center">
        <img class="img-90 rounded-circle" src="{{ asset('admin/assets/images/dashboard/1.png') }}" alt="" />
        <div class="badge-bottom"><span class="badge badge-primary">New</span></div>
        <a href="/dashboard">
            <h6 class="mt-3 f-14 f-w-600">{{ Auth::user()->name }}</h6>
        </a>
        <p class="mb-0 font-roboto">{{ Auth::user()->role }}</p>
        <div class="mt-2">
            <a class="btn btn-light" href="/profil">Update Profil</a>
        </div>
        {{-- <ul>
            <li>
                <span><span class="counter">19.8</span>k</span>
                <p>Follow</p>
            </li>
            <li>
                <span>2 year</span>
                <p>Experince</p>
            </li>
            <li>
                <span><span class="counter">95.2</span>k</span>
                <p>Follower</p>
            </li>
        </ul> --}}
    </div>
    <nav>
        <div class="main-navbar">
            <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
            <div id="mainnav">
                <ul class="nav-menu custom-scrollbar">
                    <li class="back-btn">
                        <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
                    </li>
                    <li class="sidebar-main-title">
                        <div>
                            <h6>General</h6>
                        </div>
                    </li>


                    <li class="dropdown">
                        <a class="nav-link menu-title link-nav " href="/dashboard"><i data-feather="home"></i><span>Dashboard</span></a>
                    </li>

                    <li class="dropdown">
                        <a class="nav-link menu-title link-nav " href="/data-transaksi"><i data-feather="shopping-cart"></i><span>Data Transaksi</span></a>
                    </li>

                    <li class="dropdown">
                        <a class="nav-link menu-title link-nav " href="/data-mobil"><i data-feather="truck"></i><span>Data Mobil</span></a>
                    </li>

                    <li class="dropdown">
                        <a class="nav-link menu-title link-nav " href="/data-ulasan"><i data-feather="message-square"></i><span>Data Ulasan</span></a>
                    </li>

                    <li class="dropdown">
                        <a class="nav-link menu-title link-nav " href="/data-user"><i data-feather="user"></i><span>Data User</span></a>
                    </li>
                </ul>
            </div>
            <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
        </div>
    </nav>
</header>
