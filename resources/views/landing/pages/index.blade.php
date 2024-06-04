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
                                        <input type="date" class="form-control2" id="future-date-1"
                                            name="tanggal_keluar"
                                            value="{{ optional($tanggal_keluar)->format('Y-m-d') ?? '' }}">

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="text-center">
                                        <input type="date" class="form-control2" id="future-date-2"
                                            name="tanggal_kembali"
                                            value="{{ optional($tanggal_kembali)->format('Y-m-d') ?? '' }}">
                                    </div>
                                </div>
                                <div class="form-submit">
                                    <button type="submit" class="theme-btn"><i
                                            class="flaticon-search"></i>Telusuri</button>
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
                    <span class="wow fadeInUp" data-wow-delay="400ms">Or Browse Featured Model</span>
                    <ul class="model-links">
                        <li>
                            <a href="#" title="">
                                <i class="flaticon-car"></i>
                                SUV
                            </a>
                        </li>
                        <li>
                            <a href="#" title="">
                                <i class="flaticon-car-1"></i>
                                Sedan
                            </a>
                        </li>
                        <li>
                            <a href="#" title="">
                                <i class="flaticon-van"></i>
                                Hatchback
                            </a>
                        </li>
                        <li>
                            <a href="#" title="">
                                <i class="flaticon-convertible-car"></i>
                                Coupe
                            </a>
                        </li>
                        <li>
                            <a href="#" title="">
                                <i class="flaticon-electric-car-1"></i>
                                Hybrid
                            </a>
                        </li>
                    </ul>
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
           
            <h2>New and Used Cars For Sale</h2>
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
                
            </div>
        </div>
        <div class="row wow fadeInUp">
            <!-- car-block-four -->
            @foreach ($mobil as $data)
            <div class="car-block-four col-xl-3 col-lg-4 col-md-6 col-sm-6">
                <div class="inner-box">
                    <div class="image-box">
                        @if ($tanggal_keluar == '0' && $tanggal_kembali == '0')
                        <figure class="image"><a href="/user/detail-product/{{ $data->id }}"><img
                                    src="{{ asset($data->foto) }}" alt=""></a>
                        </figure>
                        @else
                        <figure class="image"><a
                                href="/user/detail-product/{{ $data->id }}/{{ $tanggal_keluar }}/{{ $tanggal_kembali }}"><img
                                    src="{{ asset($data->foto) }}" alt="" height="200px"></a>
                        </figure>
                        @endif
                        {{-- <span>Low Mileage</span> --}}
                        <a class="icon-box">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12"
                                fill="none">
                                <g clip-path="url(#clip0_601_1274)">
                                    <path
                                        d="M9.39062 12C9.15156 12 8.91671 11.9312 8.71128 11.8009L6.11794 10.1543C6.04701 10.1091 5.95296 10.1096 5.88256 10.1543L3.28869 11.8009C2.8048 12.1082 2.13755 12.0368 1.72722 11.6454C1.47556 11.4047 1.33685 11.079 1.33685 10.728V1.2704C1.33738 0.570053 1.90743 0 2.60778 0H9.39272C10.0931 0 10.6631 0.570053 10.6631 1.2704V10.728C10.6631 11.4294 10.0925 12 9.39062 12ZM6.00025 9.06935C6.24193 9.06935 6.47783 9.13765 6.68169 9.26743L9.27503 10.9135C9.31233 10.9371 9.35069 10.9487 9.39114 10.9487C9.48046 10.9487 9.61286 10.8788 9.61286 10.728V1.2704C9.61233 1.14956 9.51356 1.05079 9.39272 1.05079H2.60778C2.48642 1.05079 2.38817 1.14956 2.38817 1.2704V10.728C2.38817 10.7911 2.41023 10.8436 2.45384 10.8851C2.52582 10.9539 2.63563 10.9708 2.72599 10.9135L5.31934 9.2669C5.52267 9.13765 5.75857 9.06935 6.00025 9.06935Z"
                                        fill="black" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_601_1274">
                                        <rect width="12" height="12" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </a>
                    </div>
                    <div class="content-box">
                        @if ($tanggal_keluar == '0' && $tanggal_kembali == '0')
                        <h6 class="title text-capitalize"><a
                                href="/user/detail-product/{{ $data->id }}">{{ $data->nama }}</a></h6>
                        @else
                        <h6 class="title"><a
                                href="/user/detail-product/{{ $data->id }}/{{ $tanggal_keluar }}/{{ $tanggal_kembali }}">{{ $data->nama }}</a>
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
                            <a href="/user/detail-product/{{ $data->id }}" class="details">Lihat Rincian<svg
                                    xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14"
                                    fill="none">
                                    <g clip-path="url(#clip0_601_4346)">
                                        <path
                                            d="M13.6109 0H5.05533C4.84037 0 4.66643 0.173943 4.66643 0.388901C4.66643 0.603859 4.84037 0.777802 5.05533 0.777802H12.6721L0.113697 13.3362C-0.0382246 13.4881 -0.0382246 13.7342 0.113697 13.8861C0.18964 13.962 0.289171 14 0.388666 14C0.488161 14 0.587656 13.962 0.663635 13.8861L13.222 1.3277V8.94447C13.222 9.15943 13.3959 9.33337 13.6109 9.33337C13.8259 9.33337 13.9998 9.15943 13.9998 8.94447V0.388901C13.9998 0.173943 13.8258 0 13.6109 0Z"
                                            fill="#405FF2" />
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
                                    <a href="/user/detail-product/{{ $data->id }}/{{ $tanggal_keluar }}/{{ $tanggal_kembali }}"
                                        class="details">Lihat Rincian<svg xmlns="http://www.w3.org/2000/svg" width="14"
                                            height="14" viewBox="0 0 14 14" fill="none">
                                            <g clip-path="url(#clip0_601_4346)">
                                                <path
                                                    d="M13.6109 0H5.05533C4.84037 0 4.66643 0.173943 4.66643 0.388901C4.66643 0.603859 4.84037 0.777802 5.05533 0.777802H12.6721L0.113697 13.3362C-0.0382246 13.4881 -0.0382246 13.7342 0.113697 13.8861C0.18964 13.962 0.289171 14 0.388666 14C0.488161 14 0.587656 13.962 0.663635 13.8861L13.222 1.3277V8.94447C13.222 9.15943 13.3959 9.33337 13.6109 9.33337C13.8259 9.33337 13.9998 9.15943 13.9998 8.94447V0.388901C13.9998 0.173943 13.8258 0 13.6109 0Z"
                                                    fill="#405FF2" />
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
            <a href="#" class="btn-title">View All<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                    viewbox="0 0 14 14" fill="none">
                    <g clip-path="url(#clip0_601_675)">
                        <path
                            d="M13.6109 0H5.05533C4.84037 0 4.66643 0.173943 4.66643 0.388901C4.66643 0.603859 4.84037 0.777802 5.05533 0.777802H12.6721L0.113697 13.3362C-0.0382246 13.4881 -0.0382246 13.7342 0.113697 13.8861C0.18964 13.962 0.289171 14 0.388666 14C0.488161 14 0.587656 13.962 0.663635 13.8861L13.222 1.3277V8.94447C13.222 9.15943 13.3959 9.33337 13.6109 9.33337C13.8259 9.33337 13.9998 9.15943 13.9998 8.94447V0.388901C13.9998 0.173943 13.8258 0 13.6109 0Z"
                            fill="white"></path>
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
                <button class="nav-link active" id="nav-home-tab2" data-bs-toggle="tab" data-bs-target="#nav-home2"
                    type="button" role="tab" aria-controls="nav-home2" aria-selected="true">Audi</button>
                <button class="nav-link" id="nav-profile-tab2" data-bs-toggle="tab" data-bs-target="#nav-profile2"
                    type="button" role="tab" aria-controls="nav-profile2" aria-selected="false">BMW</button>
                <button class="nav-link" id="nav-contact-tab2" data-bs-toggle="tab" data-bs-target="#nav-contact2"
                    type="button" role="tab" aria-controls="nav-contact2" aria-selected="false">Mercedes</button>
            </div>
        </nav>

    </div>
    <div class="tab-content wow fadeInUp" data-wow-delay="200ms" id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-home2" role="tabpanel" aria-labelledby="nav-home-tab2">
            <div class="row car-slider slider-layout-1" data-preview="2.3">
                <div class="car-block-two col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="#"><img
                                        src="{{ asset('landing/images/resource/shop1-1.jpg') }}" alt=""></a>
                            </figure>
                            <span>Low Mileage</span>
                            <a href="#" class="icon-box">
                                <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_2806_1274)">
                                        <path
                                            d="M9.39062 12C9.15156 12 8.91671 11.9312 8.71128 11.8009L6.11794 10.1543C6.04701 10.1091 5.95296 10.1096 5.88256 10.1543L3.28869 11.8009C2.8048 12.1082 2.13755 12.0368 1.72722 11.6454C1.47556 11.4047 1.33685 11.079 1.33685 10.728V1.2704C1.33738 0.570053 1.90743 0 2.60778 0H9.39272C10.0931 0 10.6631 0.570053 10.6631 1.2704V10.728C10.6631 11.4294 10.0925 12 9.39062 12ZM6.00025 9.06935C6.24193 9.06935 6.47783 9.13765 6.68169 9.26743L9.27503 10.9135C9.31233 10.9371 9.35069 10.9487 9.39114 10.9487C9.48046 10.9487 9.61286 10.8788 9.61286 10.728V1.2704C9.61233 1.14956 9.51356 1.05079 9.39272 1.05079H2.60778C2.48642 1.05079 2.38817 1.14956 2.38817 1.2704V10.728C2.38817 10.7911 2.41023 10.8436 2.45384 10.8851C2.52582 10.9539 2.63563 10.9708 2.72599 10.9135L5.31934 9.2669C5.52267 9.13765 5.75857 9.06935 6.00025 9.06935Z"
                                            fill="black" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_2806_1274">
                                            <rect width="12" height="12" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>

                            </a>
                        </div>
                        <div class="content-box">
                            <h6 class="title"><a href="inventory-page-single.html">Mercedes-Benz, C Class</a></h6>
                            <div class="text">2023 C300e AMG Line Night Ed Premium Plus</div>
                            <ul>
                                <li><i class="flaticon-speedometer"></i>72,925 miles</li>
                                <li><i class="flaticon-gasoline-pump"></i>Petrol</li>
                                <li><i class="flaticon-gearbox"></i>Automatic</li>
                            </ul>
                            <div class="btn-box">
                                <span>$789</span>
                                <small>$399</small>
                                <a href="#" class="details">View Details
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewbox="0 0 14 14"
                                        fill="none">
                                        <g clip-path="url(#clip0_601_1238)">
                                            <path
                                                d="M13.6109 0H5.05533C4.84037 0 4.66642 0.173943 4.66642 0.388901C4.66642 0.603859 4.84037 0.777802 5.05533 0.777802H12.6721L0.11369 13.3362C-0.0382322 13.4881 -0.0382322 13.7342 0.11369 13.8861C0.189632 13.962 0.289164 14 0.388658 14C0.488153 14 0.587648 13.962 0.663627 13.8861L13.222 1.3277V8.94447C13.222 9.15943 13.3959 9.33337 13.6109 9.33337C13.8259 9.33337 13.9998 9.15943 13.9998 8.94447V0.388901C13.9998 0.173943 13.8258 0 13.6109 0Z"
                                                fill="white"></path>
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
                <div class="car-block-two col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="#"><img
                                        src="{{ asset('landing/images/resource/shop1-2.jpg') }}" alt=""></a>
                            </figure>
                            <a href="#" class="icon-box">
                                <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_2806_1274)">
                                        <path
                                            d="M9.39062 12C9.15156 12 8.91671 11.9312 8.71128 11.8009L6.11794 10.1543C6.04701 10.1091 5.95296 10.1096 5.88256 10.1543L3.28869 11.8009C2.8048 12.1082 2.13755 12.0368 1.72722 11.6454C1.47556 11.4047 1.33685 11.079 1.33685 10.728V1.2704C1.33738 0.570053 1.90743 0 2.60778 0H9.39272C10.0931 0 10.6631 0.570053 10.6631 1.2704V10.728C10.6631 11.4294 10.0925 12 9.39062 12ZM6.00025 9.06935C6.24193 9.06935 6.47783 9.13765 6.68169 9.26743L9.27503 10.9135C9.31233 10.9371 9.35069 10.9487 9.39114 10.9487C9.48046 10.9487 9.61286 10.8788 9.61286 10.728V1.2704C9.61233 1.14956 9.51356 1.05079 9.39272 1.05079H2.60778C2.48642 1.05079 2.38817 1.14956 2.38817 1.2704V10.728C2.38817 10.7911 2.41023 10.8436 2.45384 10.8851C2.52582 10.9539 2.63563 10.9708 2.72599 10.9135L5.31934 9.2669C5.52267 9.13765 5.75857 9.06935 6.00025 9.06935Z"
                                            fill="black" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_2806_1274">
                                            <rect width="12" height="12" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>

                            </a>
                        </div>
                        <div class="content-box">
                            <h6 class="title"><a href="inventory-page-single-v2.html">Mercedes-Benz, C Class</a></h6>
                            <div class="text">2023 C300e AMG Line Night Ed Premium Plus</div>
                            <ul>
                                <li><i class="flaticon-speedometer"></i>72,925 miles</li>
                                <li><i class="flaticon-gasoline-pump"></i>Petrol</li>
                                <li><i class="flaticon-gearbox"></i>Automatic</li>
                            </ul>
                            <div class="btn-box">
                                <span>$789</span>
                                <small>$399</small>
                                <a href="#" class="details">View Details
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewbox="0 0 14 14"
                                        fill="none">
                                        <g clip-path="url(#clip0_601_1238)">
                                            <path
                                                d="M13.6109 0H5.05533C4.84037 0 4.66642 0.173943 4.66642 0.388901C4.66642 0.603859 4.84037 0.777802 5.05533 0.777802H12.6721L0.11369 13.3362C-0.0382322 13.4881 -0.0382322 13.7342 0.11369 13.8861C0.189632 13.962 0.289164 14 0.388658 14C0.488153 14 0.587648 13.962 0.663627 13.8861L13.222 1.3277V8.94447C13.222 9.15943 13.3959 9.33337 13.6109 9.33337C13.8259 9.33337 13.9998 9.15943 13.9998 8.94447V0.388901C13.9998 0.173943 13.8258 0 13.6109 0Z"
                                                fill="white"></path>
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
                <div class="car-block-two col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="#"><img
                                        src="{{ asset('landing/images/resource/shop1-1.jpg') }}" alt=""></a>
                            </figure>
                            <span>Low Mileage</span>
                            <a href="#" class="icon-box">
                                <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_2806_1274)">
                                        <path
                                            d="M9.39062 12C9.15156 12 8.91671 11.9312 8.71128 11.8009L6.11794 10.1543C6.04701 10.1091 5.95296 10.1096 5.88256 10.1543L3.28869 11.8009C2.8048 12.1082 2.13755 12.0368 1.72722 11.6454C1.47556 11.4047 1.33685 11.079 1.33685 10.728V1.2704C1.33738 0.570053 1.90743 0 2.60778 0H9.39272C10.0931 0 10.6631 0.570053 10.6631 1.2704V10.728C10.6631 11.4294 10.0925 12 9.39062 12ZM6.00025 9.06935C6.24193 9.06935 6.47783 9.13765 6.68169 9.26743L9.27503 10.9135C9.31233 10.9371 9.35069 10.9487 9.39114 10.9487C9.48046 10.9487 9.61286 10.8788 9.61286 10.728V1.2704C9.61233 1.14956 9.51356 1.05079 9.39272 1.05079H2.60778C2.48642 1.05079 2.38817 1.14956 2.38817 1.2704V10.728C2.38817 10.7911 2.41023 10.8436 2.45384 10.8851C2.52582 10.9539 2.63563 10.9708 2.72599 10.9135L5.31934 9.2669C5.52267 9.13765 5.75857 9.06935 6.00025 9.06935Z"
                                            fill="black" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_2806_1274">
                                            <rect width="12" height="12" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </a>
                        </div>
                        <div class="content-box">
                            <h6 class="title"><a href="inventory-page-single-v3.html">Mercedes-Benz, C Class</a></h6>
                            <div class="text">2023 C300e AMG Line Night Ed Premium Plus</div>
                            <ul>
                                <li><i class="flaticon-speedometer"></i>72,925 miles</li>
                                <li><i class="flaticon-gasoline-pump"></i>Petrol</li>
                                <li><i class="flaticon-gearbox"></i>Automatic</li>
                            </ul>
                            <div class="btn-box">
                                <span>$789</span>
                                <small>$399</small>
                                <a href="#" class="details">View Details
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewbox="0 0 14 14"
                                        fill="none">
                                        <g clip-path="url(#clip0_601_1238)">
                                            <path
                                                d="M13.6109 0H5.05533C4.84037 0 4.66642 0.173943 4.66642 0.388901C4.66642 0.603859 4.84037 0.777802 5.05533 0.777802H12.6721L0.11369 13.3362C-0.0382322 13.4881 -0.0382322 13.7342 0.11369 13.8861C0.189632 13.962 0.289164 14 0.388658 14C0.488153 14 0.587648 13.962 0.663627 13.8861L13.222 1.3277V8.94447C13.222 9.15943 13.3959 9.33337 13.6109 9.33337C13.8259 9.33337 13.9998 9.15943 13.9998 8.94447V0.388901C13.9998 0.173943 13.8258 0 13.6109 0Z"
                                                fill="white"></path>
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
                <div class="car-block-two col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="#"><img
                                        src="{{ asset('landing/images/resource/shop1-1.jpg') }}" alt=""></a>
                            </figure>
                            <span>Low Mileage</span>
                            <a href="#" class="icon-box">
                                <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_2806_1274)">
                                        <path
                                            d="M9.39062 12C9.15156 12 8.91671 11.9312 8.71128 11.8009L6.11794 10.1543C6.04701 10.1091 5.95296 10.1096 5.88256 10.1543L3.28869 11.8009C2.8048 12.1082 2.13755 12.0368 1.72722 11.6454C1.47556 11.4047 1.33685 11.079 1.33685 10.728V1.2704C1.33738 0.570053 1.90743 0 2.60778 0H9.39272C10.0931 0 10.6631 0.570053 10.6631 1.2704V10.728C10.6631 11.4294 10.0925 12 9.39062 12ZM6.00025 9.06935C6.24193 9.06935 6.47783 9.13765 6.68169 9.26743L9.27503 10.9135C9.31233 10.9371 9.35069 10.9487 9.39114 10.9487C9.48046 10.9487 9.61286 10.8788 9.61286 10.728V1.2704C9.61233 1.14956 9.51356 1.05079 9.39272 1.05079H2.60778C2.48642 1.05079 2.38817 1.14956 2.38817 1.2704V10.728C2.38817 10.7911 2.41023 10.8436 2.45384 10.8851C2.52582 10.9539 2.63563 10.9708 2.72599 10.9135L5.31934 9.2669C5.52267 9.13765 5.75857 9.06935 6.00025 9.06935Z"
                                            fill="black" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_2806_1274">
                                            <rect width="12" height="12" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </a>
                        </div>
                        <div class="content-box">
                            <h6 class="title"><a href="inventory-page-single-v4.html">Mercedes-Benz, C Class</a></h6>
                            <div class="text">2023 C300e AMG Line Night Ed Premium Plus</div>
                            <ul>
                                <li><i class="flaticon-speedometer"></i>72,925 miles</li>
                                <li><i class="flaticon-gasoline-pump"></i>Petrol</li>
                                <li><i class="flaticon-gearbox"></i>Automatic</li>
                            </ul>
                            <div class="btn-box">
                                <span>$789</span>
                                <small>$399</small>
                                <a href="#" class="details">View Details
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewbox="0 0 14 14"
                                        fill="none">
                                        <g clip-path="url(#clip0_601_1238)">
                                            <path
                                                d="M13.6109 0H5.05533C4.84037 0 4.66642 0.173943 4.66642 0.388901C4.66642 0.603859 4.84037 0.777802 5.05533 0.777802H12.6721L0.11369 13.3362C-0.0382322 13.4881 -0.0382322 13.7342 0.11369 13.8861C0.189632 13.962 0.289164 14 0.388658 14C0.488153 14 0.587648 13.962 0.663627 13.8861L13.222 1.3277V8.94447C13.222 9.15943 13.3959 9.33337 13.6109 9.33337C13.8259 9.33337 13.9998 9.15943 13.9998 8.94447V0.388901C13.9998 0.173943 13.8258 0 13.6109 0Z"
                                                fill="white"></path>
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
                <div class="car-block-two col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="#"><img
                                        src="{{ asset('landing/images/resource/shop1-1.jpg') }}" alt=""></a>
                            </figure>
                            <span>Low Mileage</span>
                            <a href="#" class="icon-box">
                                <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_2806_1274)">
                                        <path
                                            d="M9.39062 12C9.15156 12 8.91671 11.9312 8.71128 11.8009L6.11794 10.1543C6.04701 10.1091 5.95296 10.1096 5.88256 10.1543L3.28869 11.8009C2.8048 12.1082 2.13755 12.0368 1.72722 11.6454C1.47556 11.4047 1.33685 11.079 1.33685 10.728V1.2704C1.33738 0.570053 1.90743 0 2.60778 0H9.39272C10.0931 0 10.6631 0.570053 10.6631 1.2704V10.728C10.6631 11.4294 10.0925 12 9.39062 12ZM6.00025 9.06935C6.24193 9.06935 6.47783 9.13765 6.68169 9.26743L9.27503 10.9135C9.31233 10.9371 9.35069 10.9487 9.39114 10.9487C9.48046 10.9487 9.61286 10.8788 9.61286 10.728V1.2704C9.61233 1.14956 9.51356 1.05079 9.39272 1.05079H2.60778C2.48642 1.05079 2.38817 1.14956 2.38817 1.2704V10.728C2.38817 10.7911 2.41023 10.8436 2.45384 10.8851C2.52582 10.9539 2.63563 10.9708 2.72599 10.9135L5.31934 9.2669C5.52267 9.13765 5.75857 9.06935 6.00025 9.06935Z"
                                            fill="black" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_2806_1274">
                                            <rect width="12" height="12" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </a>
                        </div>
                        <div class="content-box">
                            <h6 class="title"><a href="inventory-page-single-v2.html">Mercedes-Benz, C Class</a></h6>
                            <div class="text">2023 C300e AMG Line Night Ed Premium Plus</div>
                            <ul>
                                <li><i class="flaticon-speedometer"></i>72,925 miles</li>
                                <li><i class="flaticon-gasoline-pump"></i>Petrol</li>
                                <li><i class="flaticon-gearbox"></i>Automatic</li>
                            </ul>
                            <div class="btn-box">
                                <span>$789</span>
                                <small>$399</small>
                                <a href="#" class="details">View Details<svg xmlns="http://www.w3.org/2000/svg"
                                        width="14" height="14" viewbox="0 0 14 14" fill="none">
                                        <g clip-path="url(#clip0_601_1238)">
                                            <path
                                                d="M13.6109 0H5.05533C4.84037 0 4.66642 0.173943 4.66642 0.388901C4.66642 0.603859 4.84037 0.777802 5.05533 0.777802H12.6721L0.11369 13.3362C-0.0382322 13.4881 -0.0382322 13.7342 0.11369 13.8861C0.189632 13.962 0.289164 14 0.388658 14C0.488153 14 0.587648 13.962 0.663627 13.8861L13.222 1.3277V8.94447C13.222 9.15943 13.3959 9.33337 13.6109 9.33337C13.8259 9.33337 13.9998 9.15943 13.9998 8.94447V0.388901C13.9998 0.173943 13.8258 0 13.6109 0Z"
                                                fill="white"></path>
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
            </div>
        </div>
        <div class="tab-pane fade" id="nav-profile2" role="tabpanel" aria-labelledby="nav-profile-tab2">
            <div class="row car-slider slider-layout-1" data-preview="2.3">
                <div class="car-block-two col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="#"><img
                                        src="{{ asset('landing/images/resource/shop1-1.jpg') }}" alt=""></a>
                            </figure>
                            <span>Low Mileage</span>
                            <a href="#" class="icon-box">
                                <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_2806_1274)">
                                        <path
                                            d="M9.39062 12C9.15156 12 8.91671 11.9312 8.71128 11.8009L6.11794 10.1543C6.04701 10.1091 5.95296 10.1096 5.88256 10.1543L3.28869 11.8009C2.8048 12.1082 2.13755 12.0368 1.72722 11.6454C1.47556 11.4047 1.33685 11.079 1.33685 10.728V1.2704C1.33738 0.570053 1.90743 0 2.60778 0H9.39272C10.0931 0 10.6631 0.570053 10.6631 1.2704V10.728C10.6631 11.4294 10.0925 12 9.39062 12ZM6.00025 9.06935C6.24193 9.06935 6.47783 9.13765 6.68169 9.26743L9.27503 10.9135C9.31233 10.9371 9.35069 10.9487 9.39114 10.9487C9.48046 10.9487 9.61286 10.8788 9.61286 10.728V1.2704C9.61233 1.14956 9.51356 1.05079 9.39272 1.05079H2.60778C2.48642 1.05079 2.38817 1.14956 2.38817 1.2704V10.728C2.38817 10.7911 2.41023 10.8436 2.45384 10.8851C2.52582 10.9539 2.63563 10.9708 2.72599 10.9135L5.31934 9.2669C5.52267 9.13765 5.75857 9.06935 6.00025 9.06935Z"
                                            fill="black" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_2806_1274">
                                            <rect width="12" height="12" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>

                            </a>
                        </div>
                        <div class="content-box">
                            <h6 class="title"><a href="inventory-page-single-v5.html">Mercedes-Benz, C Class</a></h6>
                            <div class="text">2023 C300e AMG Line Night Ed Premium Plus </div>
                            <ul>
                                <li><i class="flaticon-speedometer"></i>72,925 miles</li>
                                <li><i class="flaticon-gasoline-pump"></i>Petrol</li>
                                <li><i class="flaticon-gearbox"></i>Automatic</li>
                            </ul>
                            <div class="btn-box">
                                <span>$789</span>
                                <small>$399</small>
                                <a href="#" class="details">View Details
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewbox="0 0 14 14"
                                        fill="none">
                                        <g clip-path="url(#clip0_601_1238)">
                                            <path
                                                d="M13.6109 0H5.05533C4.84037 0 4.66642 0.173943 4.66642 0.388901C4.66642 0.603859 4.84037 0.777802 5.05533 0.777802H12.6721L0.11369 13.3362C-0.0382322 13.4881 -0.0382322 13.7342 0.11369 13.8861C0.189632 13.962 0.289164 14 0.388658 14C0.488153 14 0.587648 13.962 0.663627 13.8861L13.222 1.3277V8.94447C13.222 9.15943 13.3959 9.33337 13.6109 9.33337C13.8259 9.33337 13.9998 9.15943 13.9998 8.94447V0.388901C13.9998 0.173943 13.8258 0 13.6109 0Z"
                                                fill="white"></path>
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
                <div class="car-block-two col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="#"><img
                                        src="{{ asset('landing/images/resource/shop1-2.jpg') }}" alt=""></a>
                            </figure>
                            <a href="#" class="icon-box">
                                <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_2806_1274)">
                                        <path
                                            d="M9.39062 12C9.15156 12 8.91671 11.9312 8.71128 11.8009L6.11794 10.1543C6.04701 10.1091 5.95296 10.1096 5.88256 10.1543L3.28869 11.8009C2.8048 12.1082 2.13755 12.0368 1.72722 11.6454C1.47556 11.4047 1.33685 11.079 1.33685 10.728V1.2704C1.33738 0.570053 1.90743 0 2.60778 0H9.39272C10.0931 0 10.6631 0.570053 10.6631 1.2704V10.728C10.6631 11.4294 10.0925 12 9.39062 12ZM6.00025 9.06935C6.24193 9.06935 6.47783 9.13765 6.68169 9.26743L9.27503 10.9135C9.31233 10.9371 9.35069 10.9487 9.39114 10.9487C9.48046 10.9487 9.61286 10.8788 9.61286 10.728V1.2704C9.61233 1.14956 9.51356 1.05079 9.39272 1.05079H2.60778C2.48642 1.05079 2.38817 1.14956 2.38817 1.2704V10.728C2.38817 10.7911 2.41023 10.8436 2.45384 10.8851C2.52582 10.9539 2.63563 10.9708 2.72599 10.9135L5.31934 9.2669C5.52267 9.13765 5.75857 9.06935 6.00025 9.06935Z"
                                            fill="black" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_2806_1274">
                                            <rect width="12" height="12" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>

                            </a>
                        </div>
                        <div class="content-box">
                            <h6 class="title"><a href="inventory-page-single.html">Mercedes-Benz, C Class</a></h6>
                            <div class="text">2023 C300e AMG Line Night Ed Premium Plus </div>
                            <ul>
                                <li><i class="flaticon-speedometer"></i>72,925 miles</li>
                                <li><i class="flaticon-gasoline-pump"></i>Petrol</li>
                                <li><i class="flaticon-gearbox"></i>Automatic</li>
                            </ul>
                            <div class="btn-box">
                                <span>$789</span>
                                <small>$399</small>
                                <a href="#" class="details">View Details<svg xmlns="http://www.w3.org/2000/svg"
                                        width="14" height="14" viewbox="0 0 14 14" fill="none">
                                        <g clip-path="url(#clip0_601_1238)">
                                            <path
                                                d="M13.6109 0H5.05533C4.84037 0 4.66642 0.173943 4.66642 0.388901C4.66642 0.603859 4.84037 0.777802 5.05533 0.777802H12.6721L0.11369 13.3362C-0.0382322 13.4881 -0.0382322 13.7342 0.11369 13.8861C0.189632 13.962 0.289164 14 0.388658 14C0.488153 14 0.587648 13.962 0.663627 13.8861L13.222 1.3277V8.94447C13.222 9.15943 13.3959 9.33337 13.6109 9.33337C13.8259 9.33337 13.9998 9.15943 13.9998 8.94447V0.388901C13.9998 0.173943 13.8258 0 13.6109 0Z"
                                                fill="white"></path>
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
                <div class="car-block-two col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="#"><img
                                        src="{{ asset('landing/images/resource/shop1-1.jpg') }}" alt=""></a>
                            </figure>
                            <span>Low Mileage</span>
                            <a href="#" class="icon-box">
                                <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_2806_1274)">
                                        <path
                                            d="M9.39062 12C9.15156 12 8.91671 11.9312 8.71128 11.8009L6.11794 10.1543C6.04701 10.1091 5.95296 10.1096 5.88256 10.1543L3.28869 11.8009C2.8048 12.1082 2.13755 12.0368 1.72722 11.6454C1.47556 11.4047 1.33685 11.079 1.33685 10.728V1.2704C1.33738 0.570053 1.90743 0 2.60778 0H9.39272C10.0931 0 10.6631 0.570053 10.6631 1.2704V10.728C10.6631 11.4294 10.0925 12 9.39062 12ZM6.00025 9.06935C6.24193 9.06935 6.47783 9.13765 6.68169 9.26743L9.27503 10.9135C9.31233 10.9371 9.35069 10.9487 9.39114 10.9487C9.48046 10.9487 9.61286 10.8788 9.61286 10.728V1.2704C9.61233 1.14956 9.51356 1.05079 9.39272 1.05079H2.60778C2.48642 1.05079 2.38817 1.14956 2.38817 1.2704V10.728C2.38817 10.7911 2.41023 10.8436 2.45384 10.8851C2.52582 10.9539 2.63563 10.9708 2.72599 10.9135L5.31934 9.2669C5.52267 9.13765 5.75857 9.06935 6.00025 9.06935Z"
                                            fill="black" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_2806_1274">
                                            <rect width="12" height="12" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>

                            </a>
                        </div>
                        <div class="content-box">
                            <h6 class="title"><a href="inventory-page-single-v2.html">Mercedes-Benz, C Class</a></h6>
                            <div class="text">2023 C300e AMG Line Night Ed Premium Plus </div>
                            <ul>
                                <li><i class="flaticon-speedometer"></i>72,925 miles</li>
                                <li><i class="flaticon-gasoline-pump"></i>Petrol</li>
                                <li><i class="flaticon-gearbox"></i>Automatic</li>
                            </ul>
                            <div class="btn-box">
                                <span>$789</span>
                                <small>$399</small>
                                <a href="#" class="details">View Details<svg xmlns="http://www.w3.org/2000/svg"
                                        width="14" height="14" viewbox="0 0 14 14" fill="none">
                                        <g clip-path="url(#clip0_601_1238)">
                                            <path
                                                d="M13.6109 0H5.05533C4.84037 0 4.66642 0.173943 4.66642 0.388901C4.66642 0.603859 4.84037 0.777802 5.05533 0.777802H12.6721L0.11369 13.3362C-0.0382322 13.4881 -0.0382322 13.7342 0.11369 13.8861C0.189632 13.962 0.289164 14 0.388658 14C0.488153 14 0.587648 13.962 0.663627 13.8861L13.222 1.3277V8.94447C13.222 9.15943 13.3959 9.33337 13.6109 9.33337C13.8259 9.33337 13.9998 9.15943 13.9998 8.94447V0.388901C13.9998 0.173943 13.8258 0 13.6109 0Z"
                                                fill="white"></path>
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
                <div class="car-block-two col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="#"><img
                                        src="{{ asset('landing/images/resource/shop1-1.jpg') }}" alt=""></a>
                            </figure>
                            <span>Low Mileage</span>
                            <a href="#" class="icon-box">
                                <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_2806_1274)">
                                        <path
                                            d="M9.39062 12C9.15156 12 8.91671 11.9312 8.71128 11.8009L6.11794 10.1543C6.04701 10.1091 5.95296 10.1096 5.88256 10.1543L3.28869 11.8009C2.8048 12.1082 2.13755 12.0368 1.72722 11.6454C1.47556 11.4047 1.33685 11.079 1.33685 10.728V1.2704C1.33738 0.570053 1.90743 0 2.60778 0H9.39272C10.0931 0 10.6631 0.570053 10.6631 1.2704V10.728C10.6631 11.4294 10.0925 12 9.39062 12ZM6.00025 9.06935C6.24193 9.06935 6.47783 9.13765 6.68169 9.26743L9.27503 10.9135C9.31233 10.9371 9.35069 10.9487 9.39114 10.9487C9.48046 10.9487 9.61286 10.8788 9.61286 10.728V1.2704C9.61233 1.14956 9.51356 1.05079 9.39272 1.05079H2.60778C2.48642 1.05079 2.38817 1.14956 2.38817 1.2704V10.728C2.38817 10.7911 2.41023 10.8436 2.45384 10.8851C2.52582 10.9539 2.63563 10.9708 2.72599 10.9135L5.31934 9.2669C5.52267 9.13765 5.75857 9.06935 6.00025 9.06935Z"
                                            fill="black" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_2806_1274">
                                            <rect width="12" height="12" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>

                            </a>
                        </div>
                        <div class="content-box">
                            <h6 class="title"><a href="inventory-page-single-v3.html">Mercedes-Benz, C Class</a></h6>
                            <div class="text">2023 C300e AMG Line Night Ed Premium Plus</div>
                            <ul>
                                <li><i class="flaticon-speedometer"></i>72,925 miles</li>
                                <li><i class="flaticon-gasoline-pump"></i>Petrol</li>
                                <li><i class="flaticon-gearbox"></i>Automatic</li>
                            </ul>
                            <div class="btn-box">
                                <span>$789</span>
                                <small>$399</small>
                                <a href="#" class="details">View Details<svg xmlns="http://www.w3.org/2000/svg"
                                        width="14" height="14" viewbox="0 0 14 14" fill="none">
                                        <g clip-path="url(#clip0_601_1238)">
                                            <path
                                                d="M13.6109 0H5.05533C4.84037 0 4.66642 0.173943 4.66642 0.388901C4.66642 0.603859 4.84037 0.777802 5.05533 0.777802H12.6721L0.11369 13.3362C-0.0382322 13.4881 -0.0382322 13.7342 0.11369 13.8861C0.189632 13.962 0.289164 14 0.388658 14C0.488153 14 0.587648 13.962 0.663627 13.8861L13.222 1.3277V8.94447C13.222 9.15943 13.3959 9.33337 13.6109 9.33337C13.8259 9.33337 13.9998 9.15943 13.9998 8.94447V0.388901C13.9998 0.173943 13.8258 0 13.6109 0Z"
                                                fill="white"></path>
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
                <div class="car-block-two col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="#"><img
                                        src="{{ asset('landing/images/resource/shop1-1.jpg') }}" alt=""></a>
                            </figure>
                            <span>Low Mileage</span>
                            <a href="#" class="icon-box">
                                <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_2806_1274)">
                                        <path
                                            d="M9.39062 12C9.15156 12 8.91671 11.9312 8.71128 11.8009L6.11794 10.1543C6.04701 10.1091 5.95296 10.1096 5.88256 10.1543L3.28869 11.8009C2.8048 12.1082 2.13755 12.0368 1.72722 11.6454C1.47556 11.4047 1.33685 11.079 1.33685 10.728V1.2704C1.33738 0.570053 1.90743 0 2.60778 0H9.39272C10.0931 0 10.6631 0.570053 10.6631 1.2704V10.728C10.6631 11.4294 10.0925 12 9.39062 12ZM6.00025 9.06935C6.24193 9.06935 6.47783 9.13765 6.68169 9.26743L9.27503 10.9135C9.31233 10.9371 9.35069 10.9487 9.39114 10.9487C9.48046 10.9487 9.61286 10.8788 9.61286 10.728V1.2704C9.61233 1.14956 9.51356 1.05079 9.39272 1.05079H2.60778C2.48642 1.05079 2.38817 1.14956 2.38817 1.2704V10.728C2.38817 10.7911 2.41023 10.8436 2.45384 10.8851C2.52582 10.9539 2.63563 10.9708 2.72599 10.9135L5.31934 9.2669C5.52267 9.13765 5.75857 9.06935 6.00025 9.06935Z"
                                            fill="black" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_2806_1274">
                                            <rect width="12" height="12" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>

                            </a>
                        </div>
                        <div class="content-box">
                            <h6 class="title"><a href="inventory-page-single-v2.html">Mercedes-Benz, C Class</a>
                            </h6>
                            <div class="text">2023 C300e AMG Line Night Ed Premium Plus</div>
                            <ul>
                                <li><i class="flaticon-speedometer"></i>72,925 miles</li>
                                <li><i class="flaticon-gasoline-pump"></i>Petrol</li>
                                <li><i class="flaticon-gearbox"></i>Automatic</li>
                            </ul>
                            <div class="btn-box">
                                <span>$789</span>
                                <small>$399</small>
                                <a href="#" class="details">View Details<svg xmlns="http://www.w3.org/2000/svg"
                                        width="14" height="14" viewbox="0 0 14 14" fill="none">
                                        <g clip-path="url(#clip0_601_1238)">
                                            <path
                                                d="M13.6109 0H5.05533C4.84037 0 4.66642 0.173943 4.66642 0.388901C4.66642 0.603859 4.84037 0.777802 5.05533 0.777802H12.6721L0.11369 13.3362C-0.0382322 13.4881 -0.0382322 13.7342 0.11369 13.8861C0.189632 13.962 0.289164 14 0.388658 14C0.488153 14 0.587648 13.962 0.663627 13.8861L13.222 1.3277V8.94447C13.222 9.15943 13.3959 9.33337 13.6109 9.33337C13.8259 9.33337 13.9998 9.15943 13.9998 8.94447V0.388901C13.9998 0.173943 13.8258 0 13.6109 0Z"
                                                fill="white"></path>
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
            </div>
        </div>
        <div class="tab-pane fade" id="nav-contact2" role="tabpanel" aria-labelledby="nav-contact-tab2">
            <div class="row car-slider slider-layout-1" data-preview="2.3">
                <div class="car-block-two col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="#"><img
                                        src="{{ asset('landing/images/resource/shop1-1.jpg') }}" alt=""></a></figure>
                            <span>Low Mileage</span>
                            <a href="#" class="icon-box">
                                <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_2806_1274)">
                                        <path
                                            d="M9.39062 12C9.15156 12 8.91671 11.9312 8.71128 11.8009L6.11794 10.1543C6.04701 10.1091 5.95296 10.1096 5.88256 10.1543L3.28869 11.8009C2.8048 12.1082 2.13755 12.0368 1.72722 11.6454C1.47556 11.4047 1.33685 11.079 1.33685 10.728V1.2704C1.33738 0.570053 1.90743 0 2.60778 0H9.39272C10.0931 0 10.6631 0.570053 10.6631 1.2704V10.728C10.6631 11.4294 10.0925 12 9.39062 12ZM6.00025 9.06935C6.24193 9.06935 6.47783 9.13765 6.68169 9.26743L9.27503 10.9135C9.31233 10.9371 9.35069 10.9487 9.39114 10.9487C9.48046 10.9487 9.61286 10.8788 9.61286 10.728V1.2704C9.61233 1.14956 9.51356 1.05079 9.39272 1.05079H2.60778C2.48642 1.05079 2.38817 1.14956 2.38817 1.2704V10.728C2.38817 10.7911 2.41023 10.8436 2.45384 10.8851C2.52582 10.9539 2.63563 10.9708 2.72599 10.9135L5.31934 9.2669C5.52267 9.13765 5.75857 9.06935 6.00025 9.06935Z"
                                            fill="black" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_2806_1274">
                                            <rect width="12" height="12" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </a>
                        </div>
                        <div class="content-box">
                            <h6 class="title"><a href="inventory-page-single-v4.html">Mercedes-Benz, C Class</a>
                            </h6>
                            <div class="text">2023 C300e AMG Line Night Ed Premium Plus </div>
                            <ul>
                                <li><i class="flaticon-speedometer"></i>72,925 miles</li>
                                <li><i class="flaticon-gasoline-pump"></i>Petrol</li>
                                <li><i class="flaticon-gearbox"></i>Automatic</li>
                            </ul>
                            <div class="btn-box">
                                <span>$789</span>
                                <small>$399</small>
                                <a href="#" class="details">View Details<svg xmlns="http://www.w3.org/2000/svg"
                                        width="14" height="14" viewbox="0 0 14 14" fill="none">
                                        <g clip-path="url(#clip0_601_1238)">
                                            <path
                                                d="M13.6109 0H5.05533C4.84037 0 4.66642 0.173943 4.66642 0.388901C4.66642 0.603859 4.84037 0.777802 5.05533 0.777802H12.6721L0.11369 13.3362C-0.0382322 13.4881 -0.0382322 13.7342 0.11369 13.8861C0.189632 13.962 0.289164 14 0.388658 14C0.488153 14 0.587648 13.962 0.663627 13.8861L13.222 1.3277V8.94447C13.222 9.15943 13.3959 9.33337 13.6109 9.33337C13.8259 9.33337 13.9998 9.15943 13.9998 8.94447V0.388901C13.9998 0.173943 13.8258 0 13.6109 0Z"
                                                fill="white"></path>
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
                <div class="car-block-two col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="#"><img
                                        src="{{ asset('landing/images/resource/shop1-2.jpg') }}" alt=""></a></figure>
                            <a href="#" class="icon-box">
                                <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_2806_1274)">
                                        <path
                                            d="M9.39062 12C9.15156 12 8.91671 11.9312 8.71128 11.8009L6.11794 10.1543C6.04701 10.1091 5.95296 10.1096 5.88256 10.1543L3.28869 11.8009C2.8048 12.1082 2.13755 12.0368 1.72722 11.6454C1.47556 11.4047 1.33685 11.079 1.33685 10.728V1.2704C1.33738 0.570053 1.90743 0 2.60778 0H9.39272C10.0931 0 10.6631 0.570053 10.6631 1.2704V10.728C10.6631 11.4294 10.0925 12 9.39062 12ZM6.00025 9.06935C6.24193 9.06935 6.47783 9.13765 6.68169 9.26743L9.27503 10.9135C9.31233 10.9371 9.35069 10.9487 9.39114 10.9487C9.48046 10.9487 9.61286 10.8788 9.61286 10.728V1.2704C9.61233 1.14956 9.51356 1.05079 9.39272 1.05079H2.60778C2.48642 1.05079 2.38817 1.14956 2.38817 1.2704V10.728C2.38817 10.7911 2.41023 10.8436 2.45384 10.8851C2.52582 10.9539 2.63563 10.9708 2.72599 10.9135L5.31934 9.2669C5.52267 9.13765 5.75857 9.06935 6.00025 9.06935Z"
                                            fill="black" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_2806_1274">
                                            <rect width="12" height="12" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>

                            </a>
                        </div>
                        <div class="content-box">
                            <h6 class="title"><a href="inventory-page-single-v5.html">Mercedes-Benz, C Class</a>
                            </h6>
                            <div class="text">2023 C300e AMG Line Night Ed Premium Plus </div>
                            <ul>
                                <li><i class="flaticon-speedometer"></i>72,925 miles</li>
                                <li><i class="flaticon-gasoline-pump"></i>Petrol</li>
                                <li><i class="flaticon-gearbox"></i>Automatic</li>
                            </ul>
                            <div class="btn-box">
                                <span>$789</span>
                                <small>$399</small>
                                <a href="#" class="details">View Details<svg xmlns="http://www.w3.org/2000/svg"
                                        width="14" height="14" viewbox="0 0 14 14" fill="none">
                                        <g clip-path="url(#clip0_601_1238)">
                                            <path
                                                d="M13.6109 0H5.05533C4.84037 0 4.66642 0.173943 4.66642 0.388901C4.66642 0.603859 4.84037 0.777802 5.05533 0.777802H12.6721L0.11369 13.3362C-0.0382322 13.4881 -0.0382322 13.7342 0.11369 13.8861C0.189632 13.962 0.289164 14 0.388658 14C0.488153 14 0.587648 13.962 0.663627 13.8861L13.222 1.3277V8.94447C13.222 9.15943 13.3959 9.33337 13.6109 9.33337C13.8259 9.33337 13.9998 9.15943 13.9998 8.94447V0.388901C13.9998 0.173943 13.8258 0 13.6109 0Z"
                                                fill="white"></path>
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
                <div class="car-block-two col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="#"><img
                                        src="{{ asset('landing/images/resource/shop1-1.jpg') }}" alt=""></a></figure>
                            <span>Low Mileage</span>
                            <a href="#" class="icon-box">
                                <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_2806_1274)">
                                        <path
                                            d="M9.39062 12C9.15156 12 8.91671 11.9312 8.71128 11.8009L6.11794 10.1543C6.04701 10.1091 5.95296 10.1096 5.88256 10.1543L3.28869 11.8009C2.8048 12.1082 2.13755 12.0368 1.72722 11.6454C1.47556 11.4047 1.33685 11.079 1.33685 10.728V1.2704C1.33738 0.570053 1.90743 0 2.60778 0H9.39272C10.0931 0 10.6631 0.570053 10.6631 1.2704V10.728C10.6631 11.4294 10.0925 12 9.39062 12ZM6.00025 9.06935C6.24193 9.06935 6.47783 9.13765 6.68169 9.26743L9.27503 10.9135C9.31233 10.9371 9.35069 10.9487 9.39114 10.9487C9.48046 10.9487 9.61286 10.8788 9.61286 10.728V1.2704C9.61233 1.14956 9.51356 1.05079 9.39272 1.05079H2.60778C2.48642 1.05079 2.38817 1.14956 2.38817 1.2704V10.728C2.38817 10.7911 2.41023 10.8436 2.45384 10.8851C2.52582 10.9539 2.63563 10.9708 2.72599 10.9135L5.31934 9.2669C5.52267 9.13765 5.75857 9.06935 6.00025 9.06935Z"
                                            fill="black" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_2806_1274">
                                            <rect width="12" height="12" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>

                            </a>
                        </div>
                        <div class="content-box">
                            <h6 class="title"><a href="inventory-page-single.html">Mercedes-Benz, C Class</a></h6>
                            <div class="text">2023 C300e AMG Line Night Ed Premium Plus </div>
                            <ul>
                                <li><i class="flaticon-speedometer"></i>72,925 miles</li>
                                <li><i class="flaticon-gasoline-pump"></i>Petrol</li>
                                <li><i class="flaticon-gearbox"></i>Automatic</li>
                            </ul>
                            <div class="btn-box">
                                <span>$789</span>
                                <small>$399</small>
                                <a href="#" class="details">View Details<svg xmlns="http://www.w3.org/2000/svg"
                                        width="14" height="14" viewbox="0 0 14 14" fill="none">
                                        <g clip-path="url(#clip0_601_1238)">
                                            <path
                                                d="M13.6109 0H5.05533C4.84037 0 4.66642 0.173943 4.66642 0.388901C4.66642 0.603859 4.84037 0.777802 5.05533 0.777802H12.6721L0.11369 13.3362C-0.0382322 13.4881 -0.0382322 13.7342 0.11369 13.8861C0.189632 13.962 0.289164 14 0.388658 14C0.488153 14 0.587648 13.962 0.663627 13.8861L13.222 1.3277V8.94447C13.222 9.15943 13.3959 9.33337 13.6109 9.33337C13.8259 9.33337 13.9998 9.15943 13.9998 8.94447V0.388901C13.9998 0.173943 13.8258 0 13.6109 0Z"
                                                fill="white"></path>
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
                <div class="car-block-two col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="#"><img
                                        src="{{ asset('landing/images/resource/shop1-1.jpg') }}" alt=""></a></figure>
                            <span>Low Mileage</span>
                            <a href="#" class="icon-box">
                                <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_2806_1274)">
                                        <path
                                            d="M9.39062 12C9.15156 12 8.91671 11.9312 8.71128 11.8009L6.11794 10.1543C6.04701 10.1091 5.95296 10.1096 5.88256 10.1543L3.28869 11.8009C2.8048 12.1082 2.13755 12.0368 1.72722 11.6454C1.47556 11.4047 1.33685 11.079 1.33685 10.728V1.2704C1.33738 0.570053 1.90743 0 2.60778 0H9.39272C10.0931 0 10.6631 0.570053 10.6631 1.2704V10.728C10.6631 11.4294 10.0925 12 9.39062 12ZM6.00025 9.06935C6.24193 9.06935 6.47783 9.13765 6.68169 9.26743L9.27503 10.9135C9.31233 10.9371 9.35069 10.9487 9.39114 10.9487C9.48046 10.9487 9.61286 10.8788 9.61286 10.728V1.2704C9.61233 1.14956 9.51356 1.05079 9.39272 1.05079H2.60778C2.48642 1.05079 2.38817 1.14956 2.38817 1.2704V10.728C2.38817 10.7911 2.41023 10.8436 2.45384 10.8851C2.52582 10.9539 2.63563 10.9708 2.72599 10.9135L5.31934 9.2669C5.52267 9.13765 5.75857 9.06935 6.00025 9.06935Z"
                                            fill="black" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_2806_1274">
                                            <rect width="12" height="12" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>

                            </a>
                        </div>
                        <div class="content-box">
                            <h6 class="title"><a href="inventory-page-single-v2.html">Mercedes-Benz, C Class</a>
                            </h6>
                            <div class="text">2023 C300e AMG Line Night Ed Premium Plus</div>
                            <ul>
                                <li><i class="flaticon-speedometer"></i>72,925 miles</li>
                                <li><i class="flaticon-gasoline-pump"></i>Petrol</li>
                                <li><i class="flaticon-gearbox"></i>Automatic</li>
                            </ul>
                            <div class="btn-box">
                                <span>$789</span>
                                <small>$399</small>
                                <a href="#" class="details">View Details<svg xmlns="http://www.w3.org/2000/svg"
                                        width="14" height="14" viewbox="0 0 14 14" fill="none">
                                        <g clip-path="url(#clip0_601_1238)">
                                            <path
                                                d="M13.6109 0H5.05533C4.84037 0 4.66642 0.173943 4.66642 0.388901C4.66642 0.603859 4.84037 0.777802 5.05533 0.777802H12.6721L0.11369 13.3362C-0.0382322 13.4881 -0.0382322 13.7342 0.11369 13.8861C0.189632 13.962 0.289164 14 0.388658 14C0.488153 14 0.587648 13.962 0.663627 13.8861L13.222 1.3277V8.94447C13.222 9.15943 13.3959 9.33337 13.6109 9.33337C13.8259 9.33337 13.9998 9.15943 13.9998 8.94447V0.388901C13.9998 0.173943 13.8258 0 13.6109 0Z"
                                                fill="white"></path>
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
                <div class="car-block-two col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="#"><img
                                        src="{{ asset('landing/images/resource/shop1-1.jpg') }}" alt=""></a></figure>
                            <span>Low Mileage</span>
                            <a href="#" class="icon-box">
                                <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_2806_1274)">
                                        <path
                                            d="M9.39062 12C9.15156 12 8.91671 11.9312 8.71128 11.8009L6.11794 10.1543C6.04701 10.1091 5.95296 10.1096 5.88256 10.1543L3.28869 11.8009C2.8048 12.1082 2.13755 12.0368 1.72722 11.6454C1.47556 11.4047 1.33685 11.079 1.33685 10.728V1.2704C1.33738 0.570053 1.90743 0 2.60778 0H9.39272C10.0931 0 10.6631 0.570053 10.6631 1.2704V10.728C10.6631 11.4294 10.0925 12 9.39062 12ZM6.00025 9.06935C6.24193 9.06935 6.47783 9.13765 6.68169 9.26743L9.27503 10.9135C9.31233 10.9371 9.35069 10.9487 9.39114 10.9487C9.48046 10.9487 9.61286 10.8788 9.61286 10.728V1.2704C9.61233 1.14956 9.51356 1.05079 9.39272 1.05079H2.60778C2.48642 1.05079 2.38817 1.14956 2.38817 1.2704V10.728C2.38817 10.7911 2.41023 10.8436 2.45384 10.8851C2.52582 10.9539 2.63563 10.9708 2.72599 10.9135L5.31934 9.2669C5.52267 9.13765 5.75857 9.06935 6.00025 9.06935Z"
                                            fill="black" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_2806_1274">
                                            <rect width="12" height="12" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>

                            </a>
                        </div>
                        <div class="content-box">
                            <h6 class="title"><a href="inventory-page-single-v2.html">Mercedes-Benz, C Class</a>
                            </h6>
                            <div class="text">2023 C300e AMG Line Night Ed Premium Plus</div>
                            <ul>
                                <li><i class="flaticon-speedometer"></i>72,925 miles</li>
                                <li><i class="flaticon-gasoline-pump"></i>Petrol</li>
                                <li><i class="flaticon-gearbox"></i>Automatic</li>
                            </ul>
                            <div class="btn-box">
                                <span>$789</span>
                                <small>$399</small>
                                <a href="#" class="details">View Details<svg xmlns="http://www.w3.org/2000/svg"
                                        width="14" height="14" viewbox="0 0 14 14" fill="none">
                                        <g clip-path="url(#clip0_601_1238)">
                                            <path
                                                d="M13.6109 0H5.05533C4.84037 0 4.66642 0.173943 4.66642 0.388901C4.66642 0.603859 4.84037 0.777802 5.05533 0.777802H12.6721L0.11369 13.3362C-0.0382322 13.4881 -0.0382322 13.7342 0.11369 13.8861C0.189632 13.962 0.289164 14 0.388658 14C0.488153 14 0.587648 13.962 0.663627 13.8861L13.222 1.3277V8.94447C13.222 9.15943 13.3959 9.33337 13.6109 9.33337C13.8259 9.33337 13.9998 9.15943 13.9998 8.94447V0.388901C13.9998 0.173943 13.8258 0 13.6109 0Z"
                                                fill="white"></path>
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
            </div>
        </div>
    </div>
</section>
<!-- End shop section two -->



<!-- boxcar-testimonial-section -->
<section class="boxcar-testimonial-section home1">
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
                        <img src="{{ asset($detail->mobil->foto) }}" alt="{{ $detail->mobil->nama }}"
                            style="max-width: 300px; transition: transform 0.3s;">
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
</section>
<!-- End boxcar-testimonial-section -->




@endsection


@section('script')
<script>
    document.addEventListener('DOMContentLoaded', function () {
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

    document.addEventListener('DOMContentLoaded', function () {
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
        item.addEventListener('click', function () {
            document.querySelector('.select span').textContent = this.textContent;
            document.getElementById('jenis_kendaraan').value = this.getAttribute(
                'data-value');

        });
    });

</script>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        let currentSlide = 1;
        const totalSlides = document.querySelectorAll(".testimonial-slide").length;

        function showSlide(slideIndex) {
            const slides = document.querySelectorAll(".testimonial-slide");
            if (slideIndex < 1) {
                currentSlide = totalSlides;
            } else if (slideIndex > totalSlides) {
                currentSlide = 1;
            }
            slides.forEach(function (slide) {
                slide.classList.remove("active");
                slide.style.display = "none";
            });
            slides[currentSlide - 1].classList.add("active");
            slides[currentSlide - 1].style.display = "block";
        }

        document.getElementById("prev-slide").addEventListener("click", function () {
            showSlide(currentSlide -= 1);
        });

        document.getElementById("next-slide").addEventListener("click", function () {
            showSlide(currentSlide += 1);
        });

        showSlide(currentSlide);
    });

</script>
@endsection
