@extends('landing.layout.main')
@section('content')
<!-- BANNER SECTION -->
<section class="boxcar-banner-section-v1">
    <div class="container">
        <div class="banner-content">
            <span class="wow fadeInUp">Temukan mobil yang disewakan</span>
            <h2 class="wow fadeInUp" data-wow-delay="100ms">Temukan Mobil Impian Anda</h2>
            <div class="form-tabs">
                {{-- <ul class="form-tabs-list wow fadeInUp" data-wow-delay="200ms">
                        <li class="current" data-tab="tab-1">All</li>
                        <li data-tab="tab-2">New</li>
                        <li data-tab="tab-3">Used</li>
                    </ul> --}}
                <div class="form-tab-content">
                    <div class="form-tab-content wow fadeInUp" data-wow-delay="300ms">
                        <div class="form-tab-pane current" id="tab-1">
                            <form action="/" method="GET">
                                <div class="form_boxes line-r">
                                    <div class="drop-menu">
                                        <div class="select">
                                            <span>Tipe Kendaraan</span>
                                            <i class="fa fa-angle-down"></i>
                                        </div>
                                        <input type="hidden" name="jenis_kendaraan" id="jenis_kendaraan">
                                        <ul class="dropdown" style="display: none;">
                                            <li data-value="motor">Motor</li>
                                            <li data-value="mobil">Mobil</li>
                                        </ul>
                                    </div>
                                </div>


                                <style>
                                    .form-control2 {
                                        height: calc(2.25rem + 27px);
                                        padding: 30px 60px;
                                        outline: 0;
                                        /* background-color: #f4f5f8; */
                                        border: 1px solid #f4f5f8;
                                        border-radius: 16px;
                                        /* color: #686a6f; */
                                        font-size: 0.9rem;
                                        width: 100%;
                                    }

                                </style>
                                <div class="row">
                                    <div class="text-center">
                                        <input type="date" class="form-control2" id="future-date-1" name="tanggal_keluar" value="{{ optional($tanggal_keluar)->format('Y-m-d') ?? '' }}">

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="text-center">
                                        <input type="date" class="form-control2" id="future-date-2" name="tanggal_kembali" value="{{ optional($tanggal_kembali)->format('Y-m-d') ?? '' }}">
                                    </div>
                                </div>
                                <div class="form-submit">
                                    <button type="submit" class="theme-btn"><i class="flaticon-search"></i>Telusuri</button>
                                </div>
                            </form>
                        </div>
                        <div class="form-tab-pane" id="tab-2">
                            <form>
                                <div class="form_boxes line-r">
                                    <div class="drop-menu">
                                        <div class="select">
                                            <span>Any Makes</span>
                                            <i class="fa fa-angle-down"></i>
                                        </div>
                                        <input type="hidden" name="gender">
                                        <ul class="dropdown" style="display: none;">
                                            <li>Audi</li>
                                            <li>Honda</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="form_boxes line-r">
                                    <div class="drop-menu">
                                        <div class="select">
                                            <span>Any Models</span>
                                            <i class="fa fa-angle-down"></i>
                                        </div>
                                        <input type="hidden" name="gender">
                                        <ul class="dropdown" style="display: none;">
                                            <li>A3</li>
                                            <li>Accord</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="form_boxes">
                                    <div class="drop-menu">
                                        <div class="select">
                                            <span>Any Price</span>
                                            <i class="fa fa-angle-down"></i>
                                        </div>
                                        <input type="hidden" name="gender">
                                        <ul class="dropdown" style="display: none;">
                                            <li>200$</li>
                                            <li>300$</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="form-submit">
                                    <button type="submit" class="theme-btn">Search 9451 Cars</button>
                                </div>
                            </form>
                        </div>
                        <div class="form-tab-pane" id="tab-3">
                            <form>
                                <div class="form_boxes line-r">
                                    <div class="drop-menu">
                                        <div class="select">
                                            <span>Any Makes</span>
                                            <i class="fa fa-angle-down"></i>
                                        </div>
                                        <input type="hidden" name="gender">
                                        <ul class="dropdown" style="display: none;">
                                            <li>Audi</li>
                                            <li>Honda</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="form_boxes line-r">
                                    <div class="drop-menu">
                                        <div class="select">
                                            <span>Any Models</span>
                                            <i class="fa fa-angle-down"></i>
                                        </div>
                                        <input type="hidden" name="gender">
                                        <ul class="dropdown" style="display: none;">
                                            <li>A3</li>
                                            <li>Accord</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="form_boxes">
                                    <div class="drop-menu">
                                        <div class="select">
                                            <span>Any Price</span>
                                            <i class="fa fa-angle-down"></i>
                                        </div>
                                        <input type="hidden" name="gender">
                                        <ul class="dropdown" style="display: none;">
                                            <li>200$</li>
                                            <li>300$</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="form-submit">
                                    <button type="submit" class="theme-btn">Search 9451 Cars</button>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- BANNER SECTION END -->



<!-- pricing section -->
<section class="cars-section-four v1 layout-radius">
    <div class="boxcar-container">
        <div class="boxcar-title-three wow fadeInUp">
            <ul class="breadcrumb">
                <li><a href="#">Beranda</a></li>
                <li><span>Produk</span></li>
            </ul>

            {{-- <h2>New and Used Cars For Sale</h2>
            <form class="form-box">
                <div class="form_boxes">
                    <div class="drop-menu">
                        <div class="select">
                            <span>New & Used<i class="fa-solid fa-angle-down"></i></span>
                        </div>
                        <input type="hidden" name="gender">
                        <ul class="dropdown" style="display: none;">
                            <li>used</li>
                            <li>new</li>
                        </ul>
                    </div>
                </div>
                <div class="form_boxes">
                    <div class="drop-menu">
                        <div class="select">
                            <span>Type<i class="fa-solid fa-angle-down"></i></span>
                        </div>
                        <input type="hidden" name="gender">
                        <ul class="dropdown" style="display: none;">
                            <li>Tufan</li>
                            <li>Tufan</li>
                        </ul>
                    </div>
                </div>
                <div class="form_boxes">
                    <div class="drop-menu">
                        <div class="select">
                            <span>Make<i class="fa-solid fa-angle-down"></i></span>
                        </div>
                        <input type="hidden" name="gender">
                        <ul class="dropdown" style="display: none;">
                            <li>Tofan</li>
                            <li>Tofan</li>
                        </ul>
                    </div>
                </div>
                <div class="form_boxes">
                    <div class="drop-menu">
                        <div class="select">
                            <span>Models<i class="fa-solid fa-angle-down"></i></span>
                        </div>
                        <input type="hidden" name="gender">
                        <ul class="dropdown" style="display: none;">
                            <li>2010</li>
                            <li>2012</li>
                        </ul>
                    </div>
                </div>
                <div class="form_boxes">
                    <div class="drop-menu">
                        <div class="select">
                            <span>Years<i class="fa-solid fa-angle-down"></i></span>
                        </div>
                        <input type="hidden" name="gender">
                        <ul class="dropdown" style="display: none;">
                            <li>2010</li>
                            <li>2012</li>
                        </ul>
                    </div>
                </div>
                <div class="form_boxes">
                    <div class="drop-menu">
                        <div class="select">
                            <span>Mileage<i class="fa-solid fa-angle-down"></i></span>
                        </div>
                        <input type="hidden" name="gender">
                        <ul class="dropdown" style="display: none;">
                            <li>2010</li>
                            <li>2012</li>
                        </ul>
                    </div>
                </div>
                <div class="form_boxes">
                    <div class="drop-menu">
                        <div class="select">
                            <span>Price<i class="fa-solid fa-angle-down"></i></span>
                        </div>
                        <input type="hidden" name="gender">
                        <ul class="dropdown" style="display: none;">
                            <li>2010</li>
                            <li>2012</li>
                        </ul>
                    </div>
                </div>
                <div class="form_boxes">
                    <a href="#" title="" class="filter-btn filter-popup"><img src="" alt="" /> More Filters</a>
                </div>
            </form>
            <div class="text-box v1">
                <div class="text">Menampilkan 1 hingga 16</div>

            </div> --}}
        </div>
        <div class="row wow fadeInUp">
            <!-- car-block-four -->
            @foreach ($mobil as $data)
            <div class="car-block-four col-xl-3 col-lg-4 col-md-6 col-sm-6">
                <div class="inner-box">
                    <div class="image-box">
                        @if ($tanggal_keluar == '0' && $tanggal_kembali == '0')
                        <figure class="image"><a href="/user/detail-product/{{ $data->id }}"><img src="{{ asset($data->foto) }}" alt=""></a>
                        </figure>
                        @else
                        <figure class="image"><a href="/user/detail-product/{{ $data->id }}/{{ $tanggal_keluar }}/{{ $tanggal_kembali }}"><img src="{{ asset($data->foto) }}" alt="" height="200px"></a>
                        </figure>
                        @endif
                        {{-- <span>Low Mileage</span> --}}
                        {{-- <a class="icon-box">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                <g clip-path="url(#clip0_601_1274)">
                                    <path d="M9.39062 12C9.15156 12 8.91671 11.9312 8.71128 11.8009L6.11794 10.1543C6.04701 10.1091 5.95296 10.1096 5.88256 10.1543L3.28869 11.8009C2.8048 12.1082 2.13755 12.0368 1.72722 11.6454C1.47556 11.4047 1.33685 11.079 1.33685 10.728V1.2704C1.33738 0.570053 1.90743 0 2.60778 0H9.39272C10.0931 0 10.6631 0.570053 10.6631 1.2704V10.728C10.6631 11.4294 10.0925 12 9.39062 12ZM6.00025 9.06935C6.24193 9.06935 6.47783 9.13765 6.68169 9.26743L9.27503 10.9135C9.31233 10.9371 9.35069 10.9487 9.39114 10.9487C9.48046 10.9487 9.61286 10.8788 9.61286 10.728V1.2704C9.61233 1.14956 9.51356 1.05079 9.39272 1.05079H2.60778C2.48642 1.05079 2.38817 1.14956 2.38817 1.2704V10.728C2.38817 10.7911 2.41023 10.8436 2.45384 10.8851C2.52582 10.9539 2.63563 10.9708 2.72599 10.9135L5.31934 9.2669C5.52267 9.13765 5.75857 9.06935 6.00025 9.06935Z" fill="black" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_601_1274">
                                        <rect width="12" height="12" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </a> --}}
                    </div>
                    <div class="content-box">
                        @if ($tanggal_keluar == '0' && $tanggal_kembali == '0')
                        <h6 class="title text-capitalize"><a href="/user/detail-product/{{ $data->id }}">{{ $data->nama }}</a></h6>
                        @else
                        <h6 class="title"><a href="/user/detail-product/{{ $data->id }}/{{ $tanggal_keluar }}/{{ $tanggal_kembali }}">{{ $data->nama }}</a>
                        </h6>
                        @endif
                        <div class="btn-box">
                            <span>Rp. {{ number_format($data->harga) }} Per hari</span><br>


                            @if ($tanggal_keluar == '0' && $tanggal_kembali == '0')
                            @else
                            <span>
                                <?php
                                            $date1 = new DateTime($tanggal_keluar);
                                            $date2 = new DateTime($tanggal_kembali);
                                            $diff = $date1->diff($date2);
                                            $total = $diff->days * $data->harga;
                                            if ($total == 0) {
                                                // echo "Rp. ".number_format($data->harga)." Per day";
                                            } else {
                                                echo 'Rp. ' . number_format($total);
                                            }
                                            ?>
                            </span>
                            @endif

                            @if ($tanggal_keluar == '0' && $tanggal_kembali == '0')
                            <a href="/user/detail-product/{{ $data->id }}" class="details">Lihat
                                Rincian<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                                    <g clip-path="url(#clip0_601_4346)">
                                        <path d="M13.6109 0H5.05533C4.84037 0 4.66643 0.173943 4.66643 0.388901C4.66643 0.603859 4.84037 0.777802 5.05533 0.777802H12.6721L0.113697 13.3362C-0.0382246 13.4881 -0.0382246 13.7342 0.113697 13.8861C0.18964 13.962 0.289171 14 0.388666 14C0.488161 14 0.587656 13.962 0.663635 13.8861L13.222 1.3277V8.94447C13.222 9.15943 13.3959 9.33337 13.6109 9.33337C13.8259 9.33337 13.9998 9.15943 13.9998 8.94447V0.388901C13.9998 0.173943 13.8258 0 13.6109 0Z" fill="#405FF2" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_601_4346">
                                            <rect width="14" height="14" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </a>
                            @else
                            <div class="row">
                                <div class="col-md-6">
                                    <form action="/user/booking" method="post" class="pt-2">
                                        @csrf
                                        <input type="hidden" name="id_mobil" value="{{ $data->id }}">
                                        <input type="hidden" name="tanggal_keluar" value="{{ $tanggal_keluar }}">
                                        <input type="hidden" name="tanggal_kembali" value="{{ $tanggal_kembali }}">
                                        <button type="submit" class="btn btn-primary text-light text-capitalize">booking
                                        </button>
                                    </form>
                                </div>
                                <div class="col-md-6">
                                    <a href="/user/detail-product/{{ $data->id }}/{{ $tanggal_keluar }}/{{ $tanggal_kembali }}" class="details">Lihat Rincian<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                                            <g clip-path="url(#clip0_601_4346)">
                                                <path d="M13.6109 0H5.05533C4.84037 0 4.66643 0.173943 4.66643 0.388901C4.66643 0.603859 4.84037 0.777802 5.05533 0.777802H12.6721L0.113697 13.3362C-0.0382246 13.4881 -0.0382246 13.7342 0.113697 13.8861C0.18964 13.962 0.289171 14 0.388666 14C0.488161 14 0.587656 13.962 0.663635 13.8861L13.222 1.3277V8.94447C13.222 9.15943 13.3959 9.33337 13.6109 9.33337C13.8259 9.33337 13.9998 9.15943 13.9998 8.94447V0.388901C13.9998 0.173943 13.8258 0 13.6109 0Z" fill="#405FF2" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_601_4346">
                                                    <rect width="14" height="14" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
</section>
<!-- End pricing section -->

<!-- cars-section-two -->
<section class="cars-section-two">
    <div class="boxcar-container">
        <div class="boxcar-title light wow fadeInUp">
            <h2>Popular Makes</h2>
            <a href="#" class="btn-title">View All<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewbox="0 0 14 14" fill="none">
                    <g clip-path="url(#clip0_601_675)">
                        <path d="M13.6109 0H5.05533C4.84037 0 4.66643 0.173943 4.66643 0.388901C4.66643 0.603859 4.84037 0.777802 5.05533 0.777802H12.6721L0.113697 13.3362C-0.0382246 13.4881 -0.0382246 13.7342 0.113697 13.8861C0.18964 13.962 0.289171 14 0.388666 14C0.488161 14 0.587656 13.962 0.663635 13.8861L13.222 1.3277V8.94447C13.222 9.15943 13.3959 9.33337 13.6109 9.33337C13.8259 9.33337 13.9998 9.15943 13.9998 8.94447V0.388901C13.9998 0.173943 13.8258 0 13.6109 0Z" fill="white"></path>
                    </g>
                    <defs>
                        <clippath id="clip0_601_675">
                            <rect width="14" height="14" fill="white"></rect>
                        </clippath>
                    </defs>
                </svg>
            </a>
        </div>
        <nav class="wow fadeInUp" data-wow-delay="100ms">
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <button class="nav-link active" id="nav-home-tab2" data-bs-toggle="tab" data-bs-target="#nav-home2" type="button" role="tab" aria-controls="nav-home2" aria-selected="true">All</button>
                <button class="nav-link" id="nav-profile-tab2" data-bs-toggle="tab" data-bs-target="#nav-profile2" type="button" role="tab" aria-controls="nav-profile2" aria-selected="false">Mobil</button>
                <button class="nav-link" id="nav-contact-tab2" data-bs-toggle="tab" data-bs-target="#nav-contact2" type="button" role="tab" aria-controls="nav-contact2" aria-selected="false">Motor</button>
            </div>
        </nav>
    </div>
    <div class="tab-content wow fadeInUp" data-wow-delay="200ms" id="nav-tabContent">
        {{-- All --}}
        <div class="tab-pane fade show active" id="nav-home2" role="tabpanel" aria-labelledby="nav-home-tab2">
            <div class="row car-slider slider-layout-1" data-preview="2.3">
                @foreach ($popularKendaraan as $item)
                <div class="car-block-two col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="#"><img src="{{ asset($item->foto) }}" alt=""></a>
                            </figure>

                        </div>
                        <div class="content-box">
                            <h6 class="title"><a href="inventory-page-single.html">{{ $item->nama }}</a></h6>
                            <div class="text">{{ $item->deskripsi }}</div>
                            <div class="btn-box">
                                <small>Rp. {{ number_format($item->harga) }} Per hari</small><br><br>
                                <a href="/user/detail-product/{{ $item->id }}" class="details">View Details
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewbox="0 0 14 14" fill="none">
                                        <g clip-path="url(#clip0_601_1238)">
                                            <path d="M13.6109 0H5.05533C4.84037 0 4.66642 0.173943 4.66642 0.388901C4.66642 0.603859 4.84037 0.777802 5.05533 0.777802H12.6721L0.11369 13.3362C-0.0382322 13.4881 -0.0382322 13.7342 0.11369 13.8861C0.189632 13.962 0.289164 14 0.388658 14C0.488153 14 0.587648 13.962 0.663627 13.8861L13.222 1.3277V8.94447C13.222 9.15943 13.3959 9.33337 13.6109 9.33337C13.8259 9.33337 13.9998 9.15943 13.9998 8.94447V0.388901C13.9998 0.173943 13.8258 0 13.6109 0Z" fill="white"></path>
                                        </g>
                                        <defs>
                                            <clippath id="clip0_601_1238">
                                                <rect width="14" height="14" fill="white"></rect>
                                            </clippath>
                                        </defs>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        {{-- Mobil --}}
        <div class="tab-pane fade" id="nav-profile2" role="tabpanel" aria-labelledby="nav-profile-tab2">
            <div class="row car-slider slider-layout-1" data-preview="2.3">
                @foreach ($popularKendaraan as $item)
                @if ($item->jenis_kendaraan == 'mobil')
                <div class="car-block-two col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="#"><img src="{{ asset($item->foto) }}" alt=""></a>
                            </figure>

                        </div>
                        <div class="content-box">
                            <h6 class="title"><a href="inventory-page-single.html">{{ $item->nama }}</a>
                            </h6>
                            <div class="text">{{ $item->deskripsi }}</div>
                            <div class="btn-box">
                                <small>Rp. {{ number_format($item->harga) }} Per hari</small><br><br>
                                <a href="/user/detail-product/{{ $item->id }}" class="details">View
                                    Details
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewbox="0 0 14 14" fill="none">
                                        <g clip-path="url(#clip0_601_1238)">
                                            <path d="M13.6109 0H5.05533C4.84037 0 4.66642 0.173943 4.66642 0.388901C4.66642 0.603859 4.84037 0.777802 5.05533 0.777802H12.6721L0.11369 13.3362C-0.0382322 13.4881 -0.0382322 13.7342 0.11369 13.8861C0.189632 13.962 0.289164 14 0.388658 14C0.488153 14 0.587648 13.962 0.663627 13.8861L13.222 1.3277V8.94447C13.222 9.15943 13.3959 9.33337 13.6109 9.33337C13.8259 9.33337 13.9998 9.15943 13.9998 8.94447V0.388901C13.9998 0.173943 13.8258 0 13.6109 0Z" fill="white"></path>
                                        </g>
                                        <defs>
                                            <clippath id="clip0_601_1238">
                                                <rect width="14" height="14" fill="white"></rect>
                                            </clippath>
                                        </defs>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
                @endforeach
            </div>
        </div>
        {{-- Motor --}}
        <div class="tab-pane fade" id="nav-contact2" role="tabpanel" aria-labelledby="nav-contact-tab2">
            <div class="row car-slider slider-layout-1" data-preview="2.3">
                @foreach ($popularKendaraan as $item)
                @if ($item->jenis_kendaraan == 'motor')
                <div class="car-block-two col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="#"><img src="{{ asset($item->foto) }}" alt=""></a>
                            </figure>

                        </div>
                        <div class="content-box">
                            <h6 class="title"><a href="inventory-page-single.html">{{ $item->nama }}</a>
                            </h6>
                            <div class="text">{{ $item->deskripsi }}</div>
                            <div class="btn-box">
                                <small>Rp. {{ number_format($item->harga) }} Per hari</small><br><br>
                                <a href="/user/detail-product/{{ $item->id }}" class="details">View
                                    Details
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewbox="0 0 14 14" fill="none">
                                        <g clip-path="url(#clip0_601_1238)">
                                            <path d="M13.6109 0H5.05533C4.84037 0 4.66642 0.173943 4.66642 0.388901C4.66642 0.603859 4.84037 0.777802 5.05533 0.777802H12.6721L0.11369 13.3362C-0.0382322 13.4881 -0.0382322 13.7342 0.11369 13.8861C0.189632 13.962 0.289164 14 0.388658 14C0.488153 14 0.587648 13.962 0.663627 13.8861L13.222 1.3277V8.94447C13.222 9.15943 13.3959 9.33337 13.6109 9.33337C13.8259 9.33337 13.9998 9.15943 13.9998 8.94447V0.388901C13.9998 0.173943 13.8258 0 13.6109 0Z" fill="white"></path>
                                        </g>
                                        <defs>
                                            <clippath id="clip0_601_1238">
                                                <rect width="14" height="14" fill="white"></rect>
                                            </clippath>
                                        </defs>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
                @endforeach
            </div>
        </div>
    </div>
</section>
<!-- End shop section two -->

<!-- boxcar-testimonial-section -->
{{-- <section class="boxcar-testimonial-section home1">
    <div class="boxcar-container">
        <div class="boxcar-title wow fadeInUp">
            <h2>Ulasan Pengguna</h2>

        </div>
        <div class="testimonial-slider">
            <div class="carousel" id="testimonial-carousel">
                @php $slide = 1; @endphp
                @foreach ($ulasan as $key => $data)
                <div class="testimonial-slide @if ($slide == 1 && $key == 0) active @endif" id="slide{{ $slide }}">

                    @foreach ($data->transaksi->detailTransaksi as $detail)
                    <div>
                        <strong>Mobil:</strong> {{ $detail->mobil->nama }}
                        <img src="{{ asset($detail->mobil->foto) }}" alt="{{ $detail->mobil->nama }}" style="max-width: 300px; transition: transform 0.3s;">
                    </div>
                    @endforeach

                    <div class="testimonial-author">
                        <h4>{{ $data->transaksi->user->name }}</h4>
                        <span>{{ $data->transaksi->user->email }}</span>
                    </div>

                    <div class="testimonial-content">
                        <p>{{ $data->ulasan }}</p>
                    </div>
                </div>
                @php $slide++; @endphp
                @endforeach
            </div>
        </div>
        <div class="navigation">
            <button id="prev-slide"><i class="fas fa-chevron-left"></i></button>
            <button id="next-slide"><i class="fas fa-chevron-right"></i></button>
        </div>
    </div>
</section> --}}
<!-- End boxcar-testimonial-section -->

<!-- blog-section-two -->
<section class="blog-section-two pt-0 section-radius-bottom bg-white">
    <div class="boxcar-container">
        <div class="row">
            <!-- blog-blockt-two -->
            <div class="blog-blockt-two col-lg-6 col-md-6 col-sm-12">
                <div class="inner-box wow fadeInUp">
                    <h3 class="title">Are You Looking <br>For a Car ?</h3>
                    <div class="text">We are committed to providing our customers with exceptional service.</div>
                    <a href="#" class="read-more">Get Started
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewbox="0 0 14 14" fill="none">
                            <g clip-path="url(#clip0_601_692)">
                                <path d="M13.6109 0H5.05533C4.84037 0 4.66643 0.173943 4.66643 0.388901C4.66643 0.603859 4.84037 0.777802 5.05533 0.777802H12.6721L0.113697 13.3362C-0.0382246 13.4881 -0.0382246 13.7342 0.113697 13.8861C0.18964 13.962 0.289171 14 0.388666 14C0.488161 14 0.587656 13.962 0.663635 13.8861L13.222 1.3277V8.94447C13.222 9.15943 13.3959 9.33337 13.6109 9.33337C13.8259 9.33337 13.9998 9.15943 13.9998 8.94447V0.388901C13.9998 0.173943 13.8258 0 13.6109 0Z" fill="white"></path>
                            </g>
                            <defs>
                                <clippath id="clip0_601_692">
                                    <rect width="14" height="14" fill="white"></rect>
                                </clippath>
                            </defs>
                        </svg>
                    </a>
                    <div class="hover-img">
                        <svg xmlns="http://www.w3.org/2000/svg" width="110" height="110" viewbox="0 0 110 110" fill="none">
                            <path d="M43.1686 14.8242C36.3829 14.8242 30.2324 18.8167 27.4699 25.0145L16.292 50.093C9.59105 50.5534 4.29688 56.1314 4.29688 62.9492V75.8398C4.29688 81.7725 9.10637 86.582 15.0391 86.582H17.9835C17.9994 85.7553 18.0204 84.9288 18.0469 84.1023C17.3476 82.6768 16.9533 81.0745 16.9533 79.3796L16.7578 71.7578C16.7578 66.1212 17.9046 60.9441 22.0885 60.1012C24.0773 59.7006 25.7424 58.3456 26.5573 56.4876L40.3605 25.0145C43.1228 18.8167 49.2733 14.8242 56.0592 14.8242H43.1686Z" fill="#CEE1F2"></path>
                            <path d="M94.9609 86.582C100.894 86.582 105.703 81.7725 105.703 75.8398V62.9492C105.703 55.8299 99.9318 50.0586 92.8125 50.0586L79.5736 24.2505C76.6474 18.4688 70.7184 14.8242 64.2383 14.8242H43.1686C36.3829 14.8242 30.2324 18.8167 27.4699 25.0145L16.292 50.093C9.59105 50.5534 4.29688 56.1314 4.29688 62.9492V75.8398C4.29688 81.7725 9.10637 86.582 15.0391 86.582" stroke="#405FF2" stroke-width="5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M38.0269 95.1758C42.7731 95.1758 46.6207 91.3282 46.6207 86.582C46.6207 81.8358 42.7731 77.9883 38.0269 77.9883C33.2807 77.9883 29.4332 81.8358 29.4332 86.582C29.4332 91.3282 33.2807 95.1758 38.0269 95.1758Z" stroke="#405FF2" stroke-width="5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M63.1641 86.582H49.8433" stroke="#405FF2" stroke-width="5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M71.9727 95.1758C76.7189 95.1758 80.5664 91.3282 80.5664 86.582C80.5664 81.8358 76.7189 77.9883 71.9727 77.9883C67.2265 77.9883 63.3789 81.8358 63.3789 86.582C63.3789 91.3282 67.2265 95.1758 71.9727 95.1758Z" stroke="#405FF2" stroke-width="5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M51.5608 66.8164L63.5304 55.2099C65.9362 52.8587 64.2729 48.7712 60.9101 48.7712H49.9475C46.5786 48.7712 44.9182 44.6705 47.3367 42.3234L59.7328 30.293" stroke="#FF5CF3" stroke-width="5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </div>
                </div>
            </div>
            <!-- blog-blockt-two -->
            <div class="blog-blockt-two col-lg-6 col-md-6 col-sm-12">
                <div class="inner-box two wow fadeInUp" data-wow-delay="100ms">
                    <h3 class="title">Do You Want to <br>Sell a Car ?</h3>
                    <div class="text">We are committed to providing our customers with exceptional service.</div>
                    <a href="#" class="read-more">Get Started
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewbox="0 0 14 14" fill="none">
                            <g clip-path="url(#clip0_601_692)">
                                <path d="M13.6109 0H5.05533C4.84037 0 4.66643 0.173943 4.66643 0.388901C4.66643 0.603859 4.84037 0.777802 5.05533 0.777802H12.6721L0.113697 13.3362C-0.0382246 13.4881 -0.0382246 13.7342 0.113697 13.8861C0.18964 13.962 0.289171 14 0.388666 14C0.488161 14 0.587656 13.962 0.663635 13.8861L13.222 1.3277V8.94447C13.222 9.15943 13.3959 9.33337 13.6109 9.33337C13.8259 9.33337 13.9998 9.15943 13.9998 8.94447V0.388901C13.9998 0.173943 13.8258 0 13.6109 0Z" fill="white"></path>
                            </g>
                            <defs>
                                <clippath id="clip0_601_692">
                                    <rect width="14" height="14" fill="white"></rect>
                                </clippath>
                            </defs>
                        </svg>
                    </a>
                    <div class="hover-img">
                        <svg xmlns="http://www.w3.org/2000/svg" width="110" height="110" viewbox="0 0 110 110" fill="none">
                            <path d="M17.1875 84.2276V25.7724C17.1875 13.9118 26.779 4.29688 38.6109 4.29688H25.5664C13.7008 4.29688 4.08203 13.9156 4.08203 25.7812V84.2188C4.08203 96.0841 13.7008 105.703 25.5664 105.703H38.6109C26.779 105.703 17.1875 96.0882 17.1875 84.2276Z" fill="#CEE1F2"></path>
                            <path d="M72.4023 104.506C70.1826 105.281 67.7967 105.703 65.3125 105.703H25.7812C13.9156 105.703 4.29688 96.0841 4.29688 84.2188V25.7812C4.29688 13.9156 13.9156 4.29688 25.7812 4.29688H65.3125C77.1779 4.29688 86.7969 13.9156 86.7969 25.7812V48.3398M54.7852 82.2852H71.1133M21.4844 82.0703L25.4341 86.1614C27.1343 87.8681 29.8912 87.8681 31.5915 86.1614L39.7461 77.7734" stroke="#405FF2" stroke-width="5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M105.047 70.0629C100.32 68.2247 97.1951 67.9622 94.8535 67.9622C90.5029 67.9622 87.0117 71.489 87.0117 75.8398C87.0117 80.1906 90.9148 83.7175 96.6917 83.7175C101.681 83.7175 105.703 87.2444 105.703 91.5952C105.703 95.9458 101.961 99.4729 97.6106 99.4729C95.5763 99.4729 91.0458 98.8124 86.582 97.038M96.6797 67.9622V61.0156M96.6797 99.4727V105.703M57.793 57.793V59.5117M34.1602 57.793V59.5117" stroke="#FF5CF4" stroke-width="5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M68.5352 36.7383H68.1835C68.1734 36.7146 68.1661 36.6902 68.1557 36.6667L64.3038 28.1203C64.3002 28.1123 64.2967 28.1046 64.2931 28.0966C62.5023 24.1867 58.9291 21.3217 54.734 20.4329C52.2427 19.9053 49.1996 19.5508 45.8829 19.5508C42.6308 19.5508 39.6816 19.8928 37.2649 20.402C33.0507 21.2902 29.4639 24.1577 27.6706 28.0728C27.6669 28.0807 27.6635 28.0887 27.6598 28.0966L23.7974 36.6665C23.7869 36.6899 23.7798 36.7144 23.7697 36.7381H23.418C21.0448 36.7381 19.1211 38.6618 19.1211 41.0349C19.1211 43.4081 21.0448 45.3318 23.418 45.3318V49.303C23.418 54.8137 27.8339 59.2969 33.2617 59.2969H58.6912C64.1193 59.2969 68.5352 54.8137 68.5352 49.3032V45.332C70.9083 45.332 72.832 43.4083 72.832 41.0352C72.832 38.662 70.9083 36.7383 68.5352 36.7383ZM35.4885 31.6415C36.1541 30.1969 37.4799 29.1393 39.0369 28.8112C40.6093 28.4799 42.9015 28.1445 45.8831 28.1445C48.9326 28.1445 51.3212 28.4945 52.953 28.8402C54.4951 29.167 55.811 30.2227 56.4755 31.6654L58.7617 36.7383H33.1914L35.4885 31.6415ZM35.0195 53.0664C32.1718 53.0664 29.8633 50.7579 29.8633 47.9102C29.8633 45.0624 32.1718 42.7539 35.0195 42.7539C37.8673 42.7539 40.1758 45.0624 40.1758 47.9102C40.1758 50.7579 37.8673 53.0664 35.0195 53.0664ZM56.9336 53.0664C54.0858 53.0664 51.7773 50.7579 51.7773 47.9102C51.7773 45.0624 54.0858 42.7539 56.9336 42.7539C59.7813 42.7539 62.0898 45.0624 62.0898 47.9102C62.0898 50.7579 59.7813 53.0664 56.9336 53.0664Z" fill="#FF5CF4"></path>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- blog-section-two -->
@endsection


@section('script')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Mendapatkan elemen input tanggal
        const dateInput = document.getElementById('future-date-1');

        // Mendapatkan tanggal hari ini dalam format YYYY-MM-DD
        const today = new Date();
        const year = today.getFullYear();
        const month = String(today.getMonth() + 1).padStart(2, '0'); // Bulan dimulai dari 0
        const day = String(today.getDate()).padStart(2, '0');
        const todayDate = `${year}-${month}-${day}`;

        // Menetapkan atribut min ke elemen input tanggal
        dateInput.setAttribute('min', todayDate);
    });

    document.addEventListener('DOMContentLoaded', function() {
        // Mendapatkan elemen input tanggal
        const dateInput = document.getElementById('future-date-2');

        // Mendapatkan tanggal hari ini dalam format YYYY-MM-DD
        const today = new Date();
        const year = today.getFullYear();
        const month = String(today.getMonth() + 1).padStart(2, '0'); // Bulan dimulai dari 0
        const day = String(today.getDate()).padStart(2, '0');
        const todayDate = `${year}-${month}-${day}`;

        // Menetapkan atribut min ke elemen input tanggal
        dateInput.setAttribute('min', todayDate);
    });
    // filter jenis_kendaraan cuy...
    document.querySelectorAll('.dropdown li').forEach(item => {
        item.addEventListener('click', function() {
            document.querySelector('.select span').textContent = this.textContent;
            document.getElementById('jenis_kendaraan').value = this.getAttribute(
                'data-value');

        });
    });

</script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        let currentSlide = 1;
        const totalSlides = document.querySelectorAll(".testimonial-slide").length;

        function showSlide(slideIndex) {
            const slides = document.querySelectorAll(".testimonial-slide");
            if (slideIndex < 1) {
                currentSlide = totalSlides;
            } else if (slideIndex > totalSlides) {
                currentSlide = 1;
            }
            slides.forEach(function(slide) {
                slide.classList.remove("active");
                slide.style.display = "none";
            });
            slides[currentSlide - 1].classList.add("active");
            slides[currentSlide - 1].style.display = "block";
        }

        document.getElementById("prev-slide").addEventListener("click", function() {
            showSlide(currentSlide -= 1);
        });

        document.getElementById("next-slide").addEventListener("click", function() {
            showSlide(currentSlide += 1);
        });

        showSlide(currentSlide);
    });

</script>
@endsection
