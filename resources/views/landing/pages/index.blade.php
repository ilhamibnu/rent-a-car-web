@extends('landing.layout.main')
@section('content')

<!-- BANNER SECTION -->
<section class="boxcar-banner-section-v1">
    <div class="container">
        <div class="banner-content">
            <span class="wow fadeInUp">Find cars for sale and for rent near you</span>
            <h2 class="wow fadeInUp" data-wow-delay="100ms">Find Your Perfect Car</h2>
            <div class="form-tabs">
                <ul class="form-tabs-list wow fadeInUp" data-wow-delay="200ms">
                    <li class="current" data-tab="tab-1">All</li>
                    <li data-tab="tab-2">New</li>
                    <li data-tab="tab-3">Used</li>
                </ul>
                <div class="form-tab-content">
                    <div class="form-tab-content wow fadeInUp" data-wow-delay="300ms">
                        <div class="form-tab-pane current" id="tab-1">
                            <form action="/" method="GET">
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
                                <div class="row">
                                    <div class="text-center">
                                        {{-- <div class="select">
                                            <span>Any Models</span>
                                            <i class="fa fa-angle-down"></i>
                                        </div> --}}
                                        <input type="date" class="form-control" id="future-date-1" name="tanggal_keluar">
                                        {{-- <ul class="dropdown" style="display: none;">
                                            <li>A3</li>
                                            <li>Accord</li>
                                        </ul> --}}
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="text-center">
                                        {{-- <div class="select">
                                            <span>Any Price</span>
                                            <i class="fa fa-angle-down"></i>
                                        </div> --}}
                                        <input type="date" class="form-control" id="future-date-2" name="tanggal_kembali">
                                        {{-- <ul class="dropdown" style="display: none;">
                                            <li>200$</li>
                                            <li>300$</li>
                                        </ul> --}}
                                    </div>
                                </div>
                                <div class="form-submit">
                                    <button type="submit" class="theme-btn"><i class="flaticon-search"></i>Search Cars</button>
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

<!-- brand section -->
<section class="boxcar-brand-section section-radius-top bg-1">
    <div class="boxcar-container">
        <div class="boxcar-title">
            <h2 class="wow fadeInUp">Explore Our Premium Brands</h2>
            <a href="inventory-list-01.html" class="btn-title">Show All Brands<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewbox="0 0 14 14" fill="none">
                    <g clip-path="url(#clip0_601_3199)">
                        <path d="M13.6109 0H5.05533C4.84037 0 4.66643 0.173943 4.66643 0.388901C4.66643 0.603859 4.84037 0.777802 5.05533 0.777802H12.6721L0.113697 13.3362C-0.0382246 13.4881 -0.0382246 13.7342 0.113697 13.8861C0.18964 13.962 0.289171 14 0.388666 14C0.488161 14 0.587656 13.962 0.663635 13.8861L13.222 1.3277V8.94447C13.222 9.15943 13.3959 9.33337 13.6109 9.33337C13.8259 9.33337 13.9998 9.15943 13.9998 8.94447V0.388901C13.9998 0.173943 13.8258 0 13.6109 0Z" fill="#050B20"></path>
                    </g>
                    <defs>
                        <clippath id="clip0_601_3199">
                            <rect width="14" height="14" fill="white"></rect>
                        </clippath>
                    </defs>
                </svg></a>
        </div>
        <div class="row">
            <!-- cars-block -->
            <div class="cars-block style-1 col-lg-2 col-md-6 col-sm-6">
                <div class="inner-box wow fadeInUp">
                    <div class="image-box">
                        <figure class="image"><a href="inventory-list-01.html"><img src="{{ asset('landing/images/resource/brand-1.png') }}" alt=""></a></figure>
                    </div>
                    <div class="content-box">
                        <h6 class="title"><a href="inventory-list-01.html">Audi</a></h6>
                    </div>
                </div>
            </div>
            <!-- cars-block -->
            <div class="cars-block style-1 col-lg-2 col-md-6 col-sm-6">
                <div class="inner-box wow fadeInUp" data-wow-delay="100ms">
                    <div class="image-box">
                        <figure class="image"><a href="inventory-list-01.html"><img src="{{ asset('landing/images/resource/brand-2.png') }}" alt=""></a></figure>
                    </div>
                    <div class="content-box">
                        <h6 class="title"><a href="inventory-list-01.html">BMW</a></h6>
                    </div>
                </div>
            </div>
            <!-- cars-block -->
            <div class="cars-block style-1 col-lg-2 col-md-6 col-sm-6">
                <div class="inner-box wow fadeInUp" data-wow-delay="200ms">
                    <div class="image-box">
                        <figure class="image"><a href="inventory-list-01.html"><img src="{{ asset('landing/images/resource/brand-3.png') }}" alt=""></a></figure>
                    </div>
                    <div class="content-box">
                        <h6 class="title"><a href="inventory-list-01.html">ford</a></h6>
                    </div>
                </div>
            </div>
            <!-- cars-block -->
            <div class="cars-block style-1 col-lg-2 col-md-6 col-sm-6">
                <div class="inner-box wow fadeInUp" data-wow-delay="300ms">
                    <div class="image-box">
                        <figure class="image"><a href="inventory-list-01.html"><img src="{{ asset('landing/images/resource/brand-4.png') }}" alt=""></a></figure>
                    </div>
                    <div class="content-box">
                        <h6 class="title"><a href="inventory-list-01.html">Mercedes Benz</a></h6>
                    </div>
                </div>
            </div>
            <!-- cars-block -->
            <div class="cars-block style-1 col-lg-2 col-md-6 col-sm-6">
                <div class="inner-box wow fadeInUp" data-wow-delay="400ms">
                    <div class="image-box">
                        <figure class="image"><a href="inventory-list-01.html"><img src="{{ asset('landing/images/resource/brand-5.png') }}" alt=""></a></figure>
                    </div>
                    <div class="content-box">
                        <h6 class="title"><a href="inventory-list-01.html">Peugeot</a></h6>
                    </div>
                </div>
            </div>
            <!-- cars-block -->
            <div class="cars-block style-1 col-lg-2 col-md-6 col-sm-6">
                <div class="inner-box wow fadeInUp" data-wow-delay="500ms">
                    <div class="image-box">
                        <figure class="image"><a href="inventory-list-01.html"><img src="{{ asset('landing/images/resource/brand-6.png') }}" alt=""></a></figure>
                    </div>
                    <div class="content-box">
                        <h6 class="title"><a href="inventory-list-01.html">Volkswagen</a></h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End brand section -->

<!-- pricing section -->
<section class="cars-section-four v1 layout-radius">
    <div class="boxcar-container">
        <div class="boxcar-title-three wow fadeInUp">
            <ul class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li><span>Cars for Sale</span></li>
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
                    <a href="#" title="" class="filter-btn filter-popup"><img src="images/icons/filter.svg" alt="" /> More Filters</a>
                </div>
            </form>
            <div class="text-box v1">
                <div class="text">Showing 1 to 16 of 1559 vehicles</div>
                <form>
                    <div class="form_boxes v3">
                        <small>Sort by</small>
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
                </form>
            </div>
        </div>
        <div class="row wow fadeInUp">
            <!-- car-block-four -->
            @foreach ($mobil as $data )


            <div class="car-block-four col-xl-3 col-lg-4 col-md-6 col-sm-6">
                <div class="inner-box">
                    <div class="image-box">
                        @if ($tanggal_keluar == '0'  && $tanggal_kembali == '0')
                        <figure class="image"><a href="/user/detail-product/{{ $data->id }}"><img src="{{ asset('landing/images/resource/shop3-1.jpg') }}" alt=""></a></figure>
                        @else
                        <figure class="image"><a href="/user/detail-product/{{ $data->id }}/{{ $tanggal_keluar }}/{{ $tanggal_kembali }}"><img src="{{ asset('landing/images/resource/shop3-1.jpg') }}" alt=""></a></figure>
                        @endif
                        {{-- <span>Low Mileage</span> --}}
                        <a class="icon-box">
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
                        </a>
                    </div>
                    <div class="content-box">
                        @if ($tanggal_keluar == '0' && $tanggal_kembali == '0')
                        <h6 class="title"><a href="/user/detail-product/{{ $data->id }}">{{ $data->nama }}</a></h6>
                        @else
                        <h6 class="title"><a href="/user/detail-product/{{ $data->id }}/{{ $tanggal_keluar }}/{{ $tanggal_kembali }}">{{ $data->nama }}</a></h6>
                        @endif
                        <div class="text"></div>
                        <ul>
                            <li><i class="flaticon-gasoline-pump"></i>72,925 miles</li>
                            <li><i class="flaticon-speedometer"></i>Petrol</li>
                            <li><i class="flaticon-gearbox"></i>Automatic</li>
                        </ul>
                        <div class="btn-box">
                            <span>Rp. {{ number_format($data->harga) }} Per day</span>


                            @if($tanggal_keluar == '0' && $tanggal_kembali == '0')

                            @else
                            <span>
                                <?php
                                        $date1 = new DateTime($tanggal_keluar);
                                         $date2 = new DateTime($tanggal_kembali);
                                        $diff = $date1->diff($date2);
                                        $total = $diff->days * $data->harga;
                                        if($total == 0){
                                            // echo "Rp. ".number_format($data->harga)." Per day";
                                        }else{
                                            echo "Rp. ".number_format($total);
                                        }
                                    ?>
                            </span>
                            @endif

                            @if ($tanggal_keluar == '0' && $tanggal_kembali == '0')
                            <a href="/user/detail-product/{{ $data->id }}" class="details">View Details<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
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
                            <a href="/user/detail-product/{{ $data->id }}/{{ $tanggal_keluar }}/{{ $tanggal_kembali }}" class="details">View Details<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
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
                            @endif

                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            {{-- <!-- car-block-four -->
            <div class="car-block-four col-xl-3 col-lg-4 col-md-6 col-sm-6">
                <div class="inner-box">
                    <div class="image-box">
                        <figure class="image"><a href="#"><img src="images/resource/shop3-2.jpg" alt=""></a></figure>
                        <a class="icon-box">
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
                        </a>
                    </div>
                    <div class="content-box">
                        <h6 class="title"><a href="#">Mercedes-Benz, C Class</a></h6>
                        <div class="text">2023 C300e AMG Line Night Ed Premiu...</div>
                        <ul>
                            <li><i class="flaticon-gasoline-pump"></i>72,925 miles</li>
                            <li><i class="flaticon-speedometer"></i>Petrol</li>
                            <li><i class="flaticon-gearbox"></i>Automatic</li>
                        </ul>
                        <div class="btn-box">
                            <span>$789</span>
                            <small>$399</small>
                            <a href="#" class="details">View Details<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
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
                </div>
            </div>
            <!-- car-block-four -->
            <div class="car-block-four col-xl-3 col-lg-4 col-md-6 col-sm-6">
                <div class="inner-box">
                    <div class="image-box two">
                        <figure class="image"><a href="#"><img src="images/resource/shop3-3.jpg" alt=""></a></figure>
                        <span>Great Price</span>
                        <a class="icon-box">
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
                        </a>
                    </div>
                    <div class="content-box">
                        <h6 class="title"><a href="#">New Range Rover, Evoque</a></h6>
                        <div class="text">2023 C300e AMG Line Night Ed Premiu...</div>
                        <ul>
                            <li><i class="flaticon-gasoline-pump"></i>72,925 miles</li>
                            <li><i class="flaticon-speedometer"></i>Petrol</li>
                            <li><i class="flaticon-gearbox"></i>Automatic</li>
                        </ul>
                        <div class="btn-box">
                            <span>$789</span>
                            <small>$399</small>
                            <a href="#" class="details">View Details<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
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
                </div>
            </div>
            <!-- car-block-four -->
            <div class="car-block-four col-xl-3 col-lg-4 col-md-6 col-sm-6">
                <div class="inner-box">
                    <div class="image-box">
                        <figure class="image"><a href="#"><img src="images/resource/shop3-4.jpg" alt=""></a></figure>
                        <a class="icon-box">
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
                        </a>
                    </div>
                    <div class="content-box">
                        <h6 class="title"><a href="#">Audi, Q5</a></h6>
                        <div class="text">2023 C300e AMG Line Night Ed Premiu...</div>
                        <ul>
                            <li><i class="flaticon-gasoline-pump"></i>72,925 miles</li>
                            <li><i class="flaticon-speedometer"></i>Petrol</li>
                            <li><i class="flaticon-gearbox"></i>Automatic</li>
                        </ul>
                        <div class="btn-box">
                            <span>$789</span>
                            <small>$399</small>
                            <a href="#" class="details">View Details<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
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
                </div>
            </div>
            <!-- car-block-four -->
            <div class="car-block-four col-xl-3 col-lg-4 col-md-6 col-sm-6">
                <div class="inner-box">
                    <div class="image-box">
                        <figure class="image"><a href="#"><img src="images/resource/shop12-1.jpg" alt=""></a></figure>
                        <a class="icon-box">
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
                        </a>
                    </div>
                    <div class="content-box">
                        <h6 class="title"><a href="#">Volkswagen, Tiguan</a></h6>
                        <div class="text">2023 C300e AMG Line Night Ed Premiu...</div>
                        <ul>
                            <li><i class="flaticon-gasoline-pump"></i>72,925 miles</li>
                            <li><i class="flaticon-speedometer"></i>Petrol</li>
                            <li><i class="flaticon-gearbox"></i>Automatic</li>
                        </ul>
                        <div class="btn-box">
                            <span>$789</span>
                            <small>$399</small>
                            <a href="#" class="details">View Details<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
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
                </div>
            </div>
            <!-- car-block-four -->
            <div class="car-block-four col-xl-3 col-lg-4 col-md-6 col-sm-6">
                <div class="inner-box">
                    <div class="image-box two">
                        <figure class="image"><a href="#"><img src="images/resource/shop12-8.jpg" alt=""></a></figure>
                        <a class="icon-box">
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
                        </a>
                    </div>
                    <div class="content-box">
                        <h6 class="title"><a href="#">Honda, Accord</a></h6>
                        <div class="text">2023 C300e AMG Line Night Ed Premiu...</div>
                        <ul>
                            <li><i class="flaticon-gasoline-pump"></i>72,925 miles</li>
                            <li><i class="flaticon-speedometer"></i>Petrol</li>
                            <li><i class="flaticon-gearbox"></i>Automatic</li>
                        </ul>
                        <div class="btn-box">
                            <span>$789</span>
                            <small>$399</small>
                            <a href="#" class="details">View Details<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
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
                </div>
            </div>
            <!-- car-block-four -->
            <div class="car-block-four col-xl-3 col-lg-4 col-md-6 col-sm-6">
                <div class="inner-box">
                    <div class="image-box">
                        <figure class="image"><a href="#"><img src="images/resource/shop12-3.jpg" alt=""></a></figure>
                        <a class="icon-box">
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
                        </a>
                    </div>
                    <div class="content-box">
                        <h6 class="title"><a href="#">Volkswagen, CC</a></h6>
                        <div class="text">2023 C300e AMG Line Night Ed Premiu...</div>
                        <ul>
                            <li><i class="flaticon-gasoline-pump"></i>72,925 miles</li>
                            <li><i class="flaticon-speedometer"></i>Petrol</li>
                            <li><i class="flaticon-gearbox"></i>Automatic</li>
                        </ul>
                        <div class="btn-box">
                            <span>$789</span>
                            <small>$399</small>
                            <a href="#" class="details">View Details<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
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
                </div>
            </div>
            <!-- car-block-four -->
            <div class="car-block-four col-xl-3 col-lg-4 col-md-6 col-sm-6">
                <div class="inner-box">
                    <div class="image-box">
                        <figure class="image"><a href="#"><img src="images/resource/shop3-6.jpg" alt=""></a></figure>
                        <a class="icon-box">
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
                        </a>
                    </div>
                    <div class="content-box">
                        <h6 class="title"><a href="#">Hyundai, Exter</a></h6>
                        <div class="text">2023 C300e AMG Line Night Ed Premiu...</div>
                        <ul>
                            <li><i class="flaticon-gasoline-pump"></i>72,925 miles</li>
                            <li><i class="flaticon-speedometer"></i>Petrol</li>
                            <li><i class="flaticon-gearbox"></i>Automatic</li>
                        </ul>
                        <div class="btn-box">
                            <span>$789</span>
                            <small>$399</small>
                            <a href="#" class="details">View Details<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
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
                </div>
            </div>
            <!-- car-block-four -->
            <div class="car-block-four col-xl-3 col-lg-4 col-md-6 col-sm-6">
                <div class="inner-box">
                    <div class="image-box">
                        <figure class="image"><a href="#"><img src="images/resource/shop12-4.jpg" alt=""></a></figure>
                        <a class="icon-box">
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
                        </a>
                    </div>
                    <div class="content-box">
                        <h6 class="title"><a href="#">BMW X1</a></h6>
                        <div class="text">2023 C300e AMG Line Night Ed Premiu...</div>
                        <ul>
                            <li><i class="flaticon-gasoline-pump"></i>72,925 miles</li>
                            <li><i class="flaticon-speedometer"></i>Petrol</li>
                            <li><i class="flaticon-gearbox"></i>Automatic</li>
                        </ul>
                        <div class="btn-box">
                            <span>$789</span>
                            <small>$399</small>
                            <a href="#" class="details">View Details<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
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
                </div>
            </div>
            <!-- car-block-four -->
            <div class="car-block-four col-xl-3 col-lg-4 col-md-6 col-sm-6">
                <div class="inner-box">
                    <div class="image-box two">
                        <figure class="image"><a href="#"><img src="images/resource/shop12-5.jpg" alt=""></a></figure>
                        <a class="icon-box">
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
                        </a>
                    </div>
                    <div class="content-box">
                        <h6 class="title"><a href="#">Mercedes-Benz, GLA</a></h6>
                        <div class="text">2023 C300e AMG Line Night Ed Premiu...</div>
                        <ul>
                            <li><i class="flaticon-gasoline-pump"></i>72,925 miles</li>
                            <li><i class="flaticon-speedometer"></i>Petrol</li>
                            <li><i class="flaticon-gearbox"></i>Automatic</li>
                        </ul>
                        <div class="btn-box">
                            <span>$789</span>
                            <small>$399</small>
                            <a href="#" class="details">View Details<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
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
                </div>
            </div>
            <!-- car-block-four -->
            <div class="car-block-four col-xl-3 col-lg-4 col-md-6 col-sm-6">
                <div class="inner-box">
                    <div class="image-box">
                        <figure class="image"><a href="#"><img src="images/resource/shop12-6.jpg" alt=""></a></figure>
                        <a class="icon-box">
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
                        </a>
                    </div>
                    <div class="content-box">
                        <h6 class="title"><a href="#">Mercedes-Benz, S Class</a></h6>
                        <div class="text">2023 C300e AMG Line Night Ed Premiu...</div>
                        <ul>
                            <li><i class="flaticon-gasoline-pump"></i>72,925 miles</li>
                            <li><i class="flaticon-speedometer"></i>Petrol</li>
                            <li><i class="flaticon-gearbox"></i>Automatic</li>
                        </ul>
                        <div class="btn-box">
                            <span>$789</span>
                            <small>$399</small>
                            <a href="#" class="details">View Details<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
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
                </div>
            </div>
            <!-- car-block-four -->
            <div class="car-block-four col-xl-3 col-lg-4 col-md-6 col-sm-6">
                <div class="inner-box">
                    <div class="image-box">
                        <figure class="image"><a href="#"><img src="images/resource/shop12-7.jpg" alt=""></a></figure>
                        <a class="icon-box">
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
                        </a>
                    </div>
                    <div class="content-box">
                        <h6 class="title"><a href="#">BMW 6 Series</a></h6>
                        <div class="text">2023 C300e AMG Line Night Ed Premiu...</div>
                        <ul>
                            <li><i class="flaticon-gasoline-pump"></i>72,925 miles</li>
                            <li><i class="flaticon-speedometer"></i>Petrol</li>
                            <li><i class="flaticon-gearbox"></i>Automatic</li>
                        </ul>
                        <div class="btn-box">
                            <span>$789</span>
                            <small>$399</small>
                            <a href="#" class="details">View Details<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
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
                </div>
            </div> --}}
        </div>
        {{-- <div class="pagination-sec">
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true"><svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2.57983 5.99989C2.57983 5.7849 2.66192 5.56987 2.82573 5.4059L7.98559 0.24617C8.31382 -0.0820565 8.84598 -0.0820565 9.17408 0.24617C9.50217 0.574263 9.50217 1.10632 9.17408 1.43457L4.60841 5.99989L9.17376 10.5654C9.50185 10.8935 9.50185 11.4256 9.17376 11.7537C8.84566 12.0821 8.31366 12.0821 7.98544 11.7537L2.82555 6.59404C2.66176 6.42999 2.57983 6.21495 2.57983 5.99989Z" fill="#050B20" />
                                </svg> </span>
                            <span class="sr-only">Previous</span>
                        </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                    <li class="page-item"><a class="page-link" href="#">...</a></li>
                    <li class="page-item"><a class="page-link" href="#">20</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true"><svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_2880_6407)">
                                        <path d="M9.42017 6.00011C9.42017 6.2151 9.33808 6.43013 9.17427 6.5941L4.01441 11.7538C3.68618 12.0821 3.15402 12.0821 2.82592 11.7538C2.49783 11.4257 2.49783 10.8937 2.82592 10.5654L7.39159 6.00011L2.82624 1.43461C2.49815 1.10652 2.49815 0.574382 2.82624 0.246315C3.15434 -0.0820709 3.68634 -0.0820709 4.01457 0.246315L9.17446 5.40596C9.33824 5.57001 9.42017 5.78505 9.42017 6.00011Z" fill="#050B20" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_2880_6407">
                                            <rect width="12" height="12" fill="white" transform="translate(12 12) rotate(-180)" />
                                        </clipPath>
                                    </defs>
                                </svg> </span>
                            <span class="sr-only">Next</span>
                        </a>
                    </li>
                </ul>
                <div class="text">Showing results 1-30 of 1,415</div>
            </nav>
        </div> --}}
    </div>
</section>
<!-- End pricing section -->

<!-- Fun Fact Section -->
<section class="boxcar-fun-fact-section">
    <div class="large-container">
        <div class="fact-counter">
            <div class="row">
                <!-- Counter block Two-->
                <div class="counter-block col-lg-3 col-md-3 col-sm-4 wow fadeInUp">
                    <div class="inner wow fadeInUp">
                        <div class="content">
                            <div class="widget-counter"><span class="count-text" data-speed="3000" data-stop="834">0</span>M</div>
                            <h6 class="counter-title">CARS FOR SALE</h6>
                        </div>
                    </div>
                </div>

                <!-- Counter block Two-->
                <div class="counter-block col-lg-3 col-md-3 col-sm-4 wow fadeInUp" data-wow-delay="300ms">
                    <div class="inner wow fadeInUp" data-wow-delay="100ms">
                        <div class="content">
                            <div class="widget-counter"><span class="count-text" data-speed="3000" data-stop="732">0</span>M</div>
                            <h6 class="counter-title">DEALER REVIEWS</h6>
                        </div>
                    </div>
                </div>

                <!-- Counter block Two-->
                <div class="counter-block col-lg-3 col-md-3 col-sm-4 wow fadeInUp" data-wow-delay="600ms">
                    <div class="inner wow fadeInUp" data-wow-delay="200ms">
                        <div class="content">
                            <div class="widget-counter"><span class="count-text" data-speed="3000" data-stop="90">0</span>M</div>
                            <h6 class="counter-title">VISITORS PER DAY</h6>
                        </div>
                    </div>
                </div>

                <!-- Counter block Two-->
                <div class="counter-block col-lg-3 col-md-3 col-sm-4 wow fadeInUp" data-wow-delay="900ms">
                    <div class="inner wow fadeInUp" data-wow-delay="300ms">
                        <div class="content">
                            <div class="widget-counter"><span class="count-text" data-speed="3000" data-stop="236">0</span>M</div>
                            <h6 class="counter-title">VERIFIED DEALERS</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Fun Fact Section-->
<!-- why choose us section -->
<section class="why-choose-us-section">
    <div class="boxcar-container">
        <div class="boxcar-title wow fadeInUp">
            <h2 class="title">Why Choose Us?</h2>
        </div>
        <div class="row">
            <!-- choose-us-block -->
            <div class="choose-us-block col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box wow fadeInUp">
                    <div class="icon-box"><svg xmlns="http://www.w3.org/2000/svg" width="51" height="60" viewbox="0 0 51 60" fill="none">
                            <g clip-path="url(#clip0_24_628)">
                                <path d="M22.9688 52.9676C22.9688 52.732 22.827 52.5195 22.6096 52.4289C20.0682 51.3695 18.2812 48.8627 18.2812 45.9375V23.4375C18.2812 20.5123 20.0682 18.0054 22.6096 16.9461C22.827 16.8555 22.9688 16.6429 22.9688 16.4074V16.4062H18.2812C14.398 16.4062 11.25 19.5543 11.25 23.4375V45.9375C11.25 49.8207 14.398 52.9688 18.2812 52.9688H22.9688V52.9676Z" fill="#EEF1FB"></path>
                                <path d="M23.3708 41.3167L36.6292 28.0583" stroke="#FF5CF4" stroke-width="3" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                                <path d="M30 21.0938L44.0625 2.34375" stroke="#405FF2" stroke-width="3" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                                <path d="M15.9375 2.34375L25.3895 12.9483" stroke="#405FF2" stroke-width="3" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                                <path d="M48.75 30V23.4375C48.75 19.5543 45.602 16.4062 41.7188 16.4062H38.0747C36.4508 13.6159 33.4612 11.7188 30 11.7188C26.5388 11.7188 23.5493 13.6159 21.9253 16.4062H18.2812C14.398 16.4062 11.25 19.5543 11.25 23.4375V45.9375C11.25 49.8207 14.398 52.9688 18.2812 52.9688H21.9253C23.5492 55.7591 26.5388 57.6562 30 57.6562C33.4612 57.6562 36.4507 55.7591 38.0747 52.9688H41.7188C45.602 52.9688 48.75 49.8207 48.75 45.9375V39.375" stroke="#405FF2" stroke-width="3" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                            </g>
                            <defs>
                                <clippath id="clip0_24_628">
                                    <rect width="51" height="60" fill="white"></rect>
                                </clippath>
                            </defs>
                        </svg>
                    </div>
                    <div class="content-box">
                        <h6 class="title">Special Financing Offers</h6>
                        <div class="text">Our stress-free finance department that can find financial solutions to save you money.</div>
                    </div>
                </div>
            </div>
            <!-- choose-us-block -->
            <div class="choose-us-block col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box wow fadeInUp" data-wow-delay="100ms">
                    <div class="icon-box"><svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewbox="0 0 60 60" fill="none">
                            <path d="M30 2.34375V7.03125" stroke="#FF5CF4" stroke-width="3" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M48.75 2.34375L44.0625 7.03125" stroke="#FF5CF4" stroke-width="3" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M15.4738 36.6607C14.3072 35.4056 13.5938 33.7236 13.5938 31.875C13.5938 30.7464 13.8596 29.68 14.3323 28.7347L19.0198 19.3597C20.1732 17.0529 22.5579 15.4688 25.3125 15.4688H18.2812C15.5266 15.4688 13.142 17.0529 11.9885 19.3597L7.30102 28.7347C6.8284 29.68 6.5625 30.7464 6.5625 31.875C6.5625 33.7236 7.27594 35.4056 8.44254 36.6607L26.5658 56.1592C27.4218 57.0802 28.6436 57.6562 30 57.6562C31.3564 57.6562 32.5782 57.0802 33.4342 56.1593L33.5156 56.0716L15.4738 36.6607Z" fill="#EEF1FB"></path>
                            <path d="M48.0115 19.3597L52.699 28.7347C53.1716 29.6798 53.4375 30.7464 53.4375 31.875C53.4375 33.7236 52.7241 35.4057 51.5575 36.6608L33.4342 56.1593C32.5782 57.0802 31.3564 57.6562 30 57.6562C28.6436 57.6562 27.4218 57.0802 26.5658 56.1593L8.44254 36.6608C7.27594 35.4057 6.5625 33.7236 6.5625 31.875C6.5625 30.7464 6.8284 29.6798 7.30102 28.7347L11.9885 19.3597C13.142 17.0528 15.5266 15.4688 18.2812 15.4688H41.7188C44.4734 15.4688 46.858 17.0528 48.0115 19.3597Z" stroke="#405FF2" stroke-width="3" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M11.25 2.34375L15.9375 7.03125" stroke="#FF5CF4" stroke-width="3" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M17.3849 29.5312H42.6151" stroke="#405FF2" stroke-width="3" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M25.3125 24.8438L30 29.5312L34.6875 24.8438" stroke="#405FF2" stroke-width="3" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M30 43.5938V29.7306" stroke="#405FF2" stroke-width="3" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </div>
                    <div class="content-box">
                        <h6 class="title">Trusted Car Dealership</h6>
                        <div class="text">Our stress-free finance department that can find financial solutions to save you money.</div>
                    </div>
                </div>
            </div>
            <!-- choose-us-block -->
            <div class="choose-us-block col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box wow fadeInUp" data-wow-delay="200ms">
                    <div class="icon-box"><svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewbox="0 0 60 60" fill="none">
                            <g clip-path="url(#clip0_24_681)">
                                <path d="M8.75576 36.7478L35.3054 10.198C37.136 8.36741 40.104 8.36741 41.9346 10.198L36.8955 5.15894C35.0649 3.32837 32.097 3.32837 30.2664 5.15894L3.71671 31.7087C1.88613 33.5393 1.88613 36.5073 3.71671 38.3378L8.75576 43.3768C6.92518 41.5462 6.92518 38.5783 8.75576 36.7478Z" fill="#EEF1FB"></path>
                                <path d="M50.1537 18.4171C51.9843 20.2477 51.9843 23.2157 50.1537 25.0463L23.6039 51.5959C21.7734 53.4265 18.8054 53.4265 16.9748 51.5959L3.71671 38.3378C1.88613 36.5072 1.88613 33.5392 3.71671 31.7086L30.2664 5.15894C32.097 3.32836 35.0649 3.32836 36.8955 5.15894L43.5247 11.7881L52.9689 2.34387" stroke="#405FF2" stroke-width="3" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                                <path d="M18.9633 31.0458C18.7631 32.4554 19.2051 33.9388 20.2894 35.0231C22.12 36.8537 25.088 36.8537 26.9186 35.0231C28.7492 33.1926 28.7492 30.2246 26.9186 28.394C25.088 26.5634 25.088 23.5954 26.9186 21.7648C28.7492 19.9342 31.7172 19.9342 33.5478 21.7648C34.6321 22.8491 35.0741 24.3325 34.8739 25.7421" stroke="#405FF2" stroke-width="3" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                                <path d="M16.9749 38.3378L20.2894 35.0232" stroke="#405FF2" stroke-width="3" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                                <path d="M33.5476 21.765L36.8621 18.4504" stroke="#405FF2" stroke-width="3" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                                <path d="M43.5938 57.6562L57.6563 43.5937" stroke="#FF5CF4" stroke-width="3" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                            </g>
                            <defs>
                                <clippath id="clip0_24_681">
                                    <rect width="60" height="60" fill="white"></rect>
                                </clippath>
                            </defs>
                        </svg>
                    </div>
                    <div class="content-box">
                        <h6 class="title">Transparent Pricing</h6>
                        <div class="text">Our stress-free finance department that can find financial solutions to save you money.</div>
                    </div>
                </div>
            </div>
            <!-- choose-us-block -->
            <div class="choose-us-block col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box wow fadeInUp" data-wow-delay="300ms">
                    <div class="icon-box"><svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewbox="0 0 60 60" fill="none">
                            <path d="M23.5465 4.45312C19.8452 4.45312 16.4904 6.63082 14.9836 10.0114L8.88656 23.6906C5.23148 23.9418 2.34375 26.9843 2.34375 30.7031V36.0938C2.34375 39.3298 4.96711 41.9531 8.20312 41.9531H9.80918C9.81785 41.5022 9.82934 41.0514 9.84375 40.6005C9.4623 39.823 9.24727 38.949 9.24727 38.0245L9.14062 33.8672C9.14062 30.7927 9.76617 29.6094 12.0483 29.1497C13.1331 28.9311 14.0413 28.192 14.4858 27.1786L22.0148 10.0114C23.5215 6.63082 26.8764 4.45312 30.5777 4.45312H23.5465Z" fill="#EEF1FB"></path>
                            <path d="M8.20312 41.9531C4.96711 41.9531 2.34375 39.3298 2.34375 36.0938V30.7031C2.34375 26.9843 5.23148 23.9418 8.88656 23.6906L14.9836 10.0114C16.4903 6.63082 19.8451 4.45312 23.5465 4.45312H34.2217C37.7441 4.45312 40.9692 6.4275 42.5711 9.56461L45.5859 15.4688M57.6562 30.7031C57.6562 26.8199 54.5082 23.6719 50.625 23.6719H18.6328M28.2422 15.4688V4.57031M32.4609 41.9531H27.1873M20.742 37.2656C18.1532 37.2656 16.0545 39.3643 16.0545 41.9531C16.0545 44.5419 18.1532 46.6406 20.742 46.6406C23.3307 46.6406 25.4295 44.5419 25.4295 41.9531C25.4295 39.3643 23.3309 37.2656 20.742 37.2656Z" stroke="#405FF2" stroke-width="3" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M57.6562 41.6016C57.6562 46.0997 54.0098 49.8047 49.5117 49.8047C45.0136 49.8047 41.3672 46.1583 41.3672 41.6602C41.3672 37.162 45.0722 33.5156 49.5703 33.5156M43.5352 48.1055L36.0938 55.5469" stroke="#FF5CF3" stroke-width="3" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </div>
                    <div class="content-box">
                        <h6 class="title">Expert Car Service</h6>
                        <div class="text">Our stress-free finance department that can find financial solutions to save you money.</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End why choose us section -->

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
                <button class="nav-link active" id="nav-home-tab2" data-bs-toggle="tab" data-bs-target="#nav-home2" type="button" role="tab" aria-controls="nav-home2" aria-selected="true">Audi</button>
                <button class="nav-link" id="nav-profile-tab2" data-bs-toggle="tab" data-bs-target="#nav-profile2" type="button" role="tab" aria-controls="nav-profile2" aria-selected="false">BMW</button>
                <button class="nav-link" id="nav-contact-tab2" data-bs-toggle="tab" data-bs-target="#nav-contact2" type="button" role="tab" aria-controls="nav-contact2" aria-selected="false">Mercedes</button>
            </div>
        </nav>

    </div>
    <div class="tab-content wow fadeInUp" data-wow-delay="200ms" id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-home2" role="tabpanel" aria-labelledby="nav-home-tab2">
            <div class="row car-slider slider-layout-1" data-preview="2.3">
                <div class="car-block-two col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="#"><img src="{{ asset('landing/images/resource/shop1-1.jpg') }}" alt=""></a></figure>
                            <span>Low Mileage</span>
                            <a href="#" class="icon-box">
                                <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_2806_1274)">
                                        <path d="M9.39062 12C9.15156 12 8.91671 11.9312 8.71128 11.8009L6.11794 10.1543C6.04701 10.1091 5.95296 10.1096 5.88256 10.1543L3.28869 11.8009C2.8048 12.1082 2.13755 12.0368 1.72722 11.6454C1.47556 11.4047 1.33685 11.079 1.33685 10.728V1.2704C1.33738 0.570053 1.90743 0 2.60778 0H9.39272C10.0931 0 10.6631 0.570053 10.6631 1.2704V10.728C10.6631 11.4294 10.0925 12 9.39062 12ZM6.00025 9.06935C6.24193 9.06935 6.47783 9.13765 6.68169 9.26743L9.27503 10.9135C9.31233 10.9371 9.35069 10.9487 9.39114 10.9487C9.48046 10.9487 9.61286 10.8788 9.61286 10.728V1.2704C9.61233 1.14956 9.51356 1.05079 9.39272 1.05079H2.60778C2.48642 1.05079 2.38817 1.14956 2.38817 1.2704V10.728C2.38817 10.7911 2.41023 10.8436 2.45384 10.8851C2.52582 10.9539 2.63563 10.9708 2.72599 10.9135L5.31934 9.2669C5.52267 9.13765 5.75857 9.06935 6.00025 9.06935Z" fill="black" />
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
                <div class="car-block-two col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="#"><img src="{{ asset('landing/images/resource/shop1-2.jpg') }}" alt=""></a></figure>
                            <a href="#" class="icon-box">
                                <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_2806_1274)">
                                        <path d="M9.39062 12C9.15156 12 8.91671 11.9312 8.71128 11.8009L6.11794 10.1543C6.04701 10.1091 5.95296 10.1096 5.88256 10.1543L3.28869 11.8009C2.8048 12.1082 2.13755 12.0368 1.72722 11.6454C1.47556 11.4047 1.33685 11.079 1.33685 10.728V1.2704C1.33738 0.570053 1.90743 0 2.60778 0H9.39272C10.0931 0 10.6631 0.570053 10.6631 1.2704V10.728C10.6631 11.4294 10.0925 12 9.39062 12ZM6.00025 9.06935C6.24193 9.06935 6.47783 9.13765 6.68169 9.26743L9.27503 10.9135C9.31233 10.9371 9.35069 10.9487 9.39114 10.9487C9.48046 10.9487 9.61286 10.8788 9.61286 10.728V1.2704C9.61233 1.14956 9.51356 1.05079 9.39272 1.05079H2.60778C2.48642 1.05079 2.38817 1.14956 2.38817 1.2704V10.728C2.38817 10.7911 2.41023 10.8436 2.45384 10.8851C2.52582 10.9539 2.63563 10.9708 2.72599 10.9135L5.31934 9.2669C5.52267 9.13765 5.75857 9.06935 6.00025 9.06935Z" fill="black" />
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
                <div class="car-block-two col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="#"><img src="{{ asset('landing/images/resource/shop1-1.jpg') }}" alt=""></a></figure>
                            <span>Low Mileage</span>
                            <a href="#" class="icon-box">
                                <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_2806_1274)">
                                        <path d="M9.39062 12C9.15156 12 8.91671 11.9312 8.71128 11.8009L6.11794 10.1543C6.04701 10.1091 5.95296 10.1096 5.88256 10.1543L3.28869 11.8009C2.8048 12.1082 2.13755 12.0368 1.72722 11.6454C1.47556 11.4047 1.33685 11.079 1.33685 10.728V1.2704C1.33738 0.570053 1.90743 0 2.60778 0H9.39272C10.0931 0 10.6631 0.570053 10.6631 1.2704V10.728C10.6631 11.4294 10.0925 12 9.39062 12ZM6.00025 9.06935C6.24193 9.06935 6.47783 9.13765 6.68169 9.26743L9.27503 10.9135C9.31233 10.9371 9.35069 10.9487 9.39114 10.9487C9.48046 10.9487 9.61286 10.8788 9.61286 10.728V1.2704C9.61233 1.14956 9.51356 1.05079 9.39272 1.05079H2.60778C2.48642 1.05079 2.38817 1.14956 2.38817 1.2704V10.728C2.38817 10.7911 2.41023 10.8436 2.45384 10.8851C2.52582 10.9539 2.63563 10.9708 2.72599 10.9135L5.31934 9.2669C5.52267 9.13765 5.75857 9.06935 6.00025 9.06935Z" fill="black" />
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
                <div class="car-block-two col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="#"><img src="{{ asset('landing/images/resource/shop1-1.jpg') }}" alt=""></a></figure>
                            <span>Low Mileage</span>
                            <a href="#" class="icon-box">
                                <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_2806_1274)">
                                        <path d="M9.39062 12C9.15156 12 8.91671 11.9312 8.71128 11.8009L6.11794 10.1543C6.04701 10.1091 5.95296 10.1096 5.88256 10.1543L3.28869 11.8009C2.8048 12.1082 2.13755 12.0368 1.72722 11.6454C1.47556 11.4047 1.33685 11.079 1.33685 10.728V1.2704C1.33738 0.570053 1.90743 0 2.60778 0H9.39272C10.0931 0 10.6631 0.570053 10.6631 1.2704V10.728C10.6631 11.4294 10.0925 12 9.39062 12ZM6.00025 9.06935C6.24193 9.06935 6.47783 9.13765 6.68169 9.26743L9.27503 10.9135C9.31233 10.9371 9.35069 10.9487 9.39114 10.9487C9.48046 10.9487 9.61286 10.8788 9.61286 10.728V1.2704C9.61233 1.14956 9.51356 1.05079 9.39272 1.05079H2.60778C2.48642 1.05079 2.38817 1.14956 2.38817 1.2704V10.728C2.38817 10.7911 2.41023 10.8436 2.45384 10.8851C2.52582 10.9539 2.63563 10.9708 2.72599 10.9135L5.31934 9.2669C5.52267 9.13765 5.75857 9.06935 6.00025 9.06935Z" fill="black" />
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
                <div class="car-block-two col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="#"><img src="{{ asset('landing/images/resource/shop1-1.jpg') }}" alt=""></a></figure>
                            <span>Low Mileage</span>
                            <a href="#" class="icon-box">
                                <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_2806_1274)">
                                        <path d="M9.39062 12C9.15156 12 8.91671 11.9312 8.71128 11.8009L6.11794 10.1543C6.04701 10.1091 5.95296 10.1096 5.88256 10.1543L3.28869 11.8009C2.8048 12.1082 2.13755 12.0368 1.72722 11.6454C1.47556 11.4047 1.33685 11.079 1.33685 10.728V1.2704C1.33738 0.570053 1.90743 0 2.60778 0H9.39272C10.0931 0 10.6631 0.570053 10.6631 1.2704V10.728C10.6631 11.4294 10.0925 12 9.39062 12ZM6.00025 9.06935C6.24193 9.06935 6.47783 9.13765 6.68169 9.26743L9.27503 10.9135C9.31233 10.9371 9.35069 10.9487 9.39114 10.9487C9.48046 10.9487 9.61286 10.8788 9.61286 10.728V1.2704C9.61233 1.14956 9.51356 1.05079 9.39272 1.05079H2.60778C2.48642 1.05079 2.38817 1.14956 2.38817 1.2704V10.728C2.38817 10.7911 2.41023 10.8436 2.45384 10.8851C2.52582 10.9539 2.63563 10.9708 2.72599 10.9135L5.31934 9.2669C5.52267 9.13765 5.75857 9.06935 6.00025 9.06935Z" fill="black" />
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
                                <a href="#" class="details">View Details<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewbox="0 0 14 14" fill="none">
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
            </div>
        </div>
        <div class="tab-pane fade" id="nav-profile2" role="tabpanel" aria-labelledby="nav-profile-tab2">
            <div class="row car-slider slider-layout-1" data-preview="2.3">
                <div class="car-block-two col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="#"><img src="{{ asset('landing/images/resource/shop1-1.jpg') }}" alt=""></a></figure>
                            <span>Low Mileage</span>
                            <a href="#" class="icon-box">
                                <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_2806_1274)">
                                        <path d="M9.39062 12C9.15156 12 8.91671 11.9312 8.71128 11.8009L6.11794 10.1543C6.04701 10.1091 5.95296 10.1096 5.88256 10.1543L3.28869 11.8009C2.8048 12.1082 2.13755 12.0368 1.72722 11.6454C1.47556 11.4047 1.33685 11.079 1.33685 10.728V1.2704C1.33738 0.570053 1.90743 0 2.60778 0H9.39272C10.0931 0 10.6631 0.570053 10.6631 1.2704V10.728C10.6631 11.4294 10.0925 12 9.39062 12ZM6.00025 9.06935C6.24193 9.06935 6.47783 9.13765 6.68169 9.26743L9.27503 10.9135C9.31233 10.9371 9.35069 10.9487 9.39114 10.9487C9.48046 10.9487 9.61286 10.8788 9.61286 10.728V1.2704C9.61233 1.14956 9.51356 1.05079 9.39272 1.05079H2.60778C2.48642 1.05079 2.38817 1.14956 2.38817 1.2704V10.728C2.38817 10.7911 2.41023 10.8436 2.45384 10.8851C2.52582 10.9539 2.63563 10.9708 2.72599 10.9135L5.31934 9.2669C5.52267 9.13765 5.75857 9.06935 6.00025 9.06935Z" fill="black" />
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
                <div class="car-block-two col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="#"><img src="{{ asset('landing/images/resource/shop1-2.jpg') }}" alt=""></a></figure>
                            <a href="#" class="icon-box">
                                <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_2806_1274)">
                                        <path d="M9.39062 12C9.15156 12 8.91671 11.9312 8.71128 11.8009L6.11794 10.1543C6.04701 10.1091 5.95296 10.1096 5.88256 10.1543L3.28869 11.8009C2.8048 12.1082 2.13755 12.0368 1.72722 11.6454C1.47556 11.4047 1.33685 11.079 1.33685 10.728V1.2704C1.33738 0.570053 1.90743 0 2.60778 0H9.39272C10.0931 0 10.6631 0.570053 10.6631 1.2704V10.728C10.6631 11.4294 10.0925 12 9.39062 12ZM6.00025 9.06935C6.24193 9.06935 6.47783 9.13765 6.68169 9.26743L9.27503 10.9135C9.31233 10.9371 9.35069 10.9487 9.39114 10.9487C9.48046 10.9487 9.61286 10.8788 9.61286 10.728V1.2704C9.61233 1.14956 9.51356 1.05079 9.39272 1.05079H2.60778C2.48642 1.05079 2.38817 1.14956 2.38817 1.2704V10.728C2.38817 10.7911 2.41023 10.8436 2.45384 10.8851C2.52582 10.9539 2.63563 10.9708 2.72599 10.9135L5.31934 9.2669C5.52267 9.13765 5.75857 9.06935 6.00025 9.06935Z" fill="black" />
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
                                <a href="#" class="details">View Details<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewbox="0 0 14 14" fill="none">
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
                <div class="car-block-two col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="#"><img src="{{ asset('landing/images/resource/shop1-1.jpg') }}" alt=""></a></figure>
                            <span>Low Mileage</span>
                            <a href="#" class="icon-box">
                                <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_2806_1274)">
                                        <path d="M9.39062 12C9.15156 12 8.91671 11.9312 8.71128 11.8009L6.11794 10.1543C6.04701 10.1091 5.95296 10.1096 5.88256 10.1543L3.28869 11.8009C2.8048 12.1082 2.13755 12.0368 1.72722 11.6454C1.47556 11.4047 1.33685 11.079 1.33685 10.728V1.2704C1.33738 0.570053 1.90743 0 2.60778 0H9.39272C10.0931 0 10.6631 0.570053 10.6631 1.2704V10.728C10.6631 11.4294 10.0925 12 9.39062 12ZM6.00025 9.06935C6.24193 9.06935 6.47783 9.13765 6.68169 9.26743L9.27503 10.9135C9.31233 10.9371 9.35069 10.9487 9.39114 10.9487C9.48046 10.9487 9.61286 10.8788 9.61286 10.728V1.2704C9.61233 1.14956 9.51356 1.05079 9.39272 1.05079H2.60778C2.48642 1.05079 2.38817 1.14956 2.38817 1.2704V10.728C2.38817 10.7911 2.41023 10.8436 2.45384 10.8851C2.52582 10.9539 2.63563 10.9708 2.72599 10.9135L5.31934 9.2669C5.52267 9.13765 5.75857 9.06935 6.00025 9.06935Z" fill="black" />
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
                                <a href="#" class="details">View Details<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewbox="0 0 14 14" fill="none">
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
                <div class="car-block-two col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="#"><img src="{{ asset('landing/images/resource/shop1-1.jpg') }}" alt=""></a></figure>
                            <span>Low Mileage</span>
                            <a href="#" class="icon-box">
                                <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_2806_1274)">
                                        <path d="M9.39062 12C9.15156 12 8.91671 11.9312 8.71128 11.8009L6.11794 10.1543C6.04701 10.1091 5.95296 10.1096 5.88256 10.1543L3.28869 11.8009C2.8048 12.1082 2.13755 12.0368 1.72722 11.6454C1.47556 11.4047 1.33685 11.079 1.33685 10.728V1.2704C1.33738 0.570053 1.90743 0 2.60778 0H9.39272C10.0931 0 10.6631 0.570053 10.6631 1.2704V10.728C10.6631 11.4294 10.0925 12 9.39062 12ZM6.00025 9.06935C6.24193 9.06935 6.47783 9.13765 6.68169 9.26743L9.27503 10.9135C9.31233 10.9371 9.35069 10.9487 9.39114 10.9487C9.48046 10.9487 9.61286 10.8788 9.61286 10.728V1.2704C9.61233 1.14956 9.51356 1.05079 9.39272 1.05079H2.60778C2.48642 1.05079 2.38817 1.14956 2.38817 1.2704V10.728C2.38817 10.7911 2.41023 10.8436 2.45384 10.8851C2.52582 10.9539 2.63563 10.9708 2.72599 10.9135L5.31934 9.2669C5.52267 9.13765 5.75857 9.06935 6.00025 9.06935Z" fill="black" />
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
                                <a href="#" class="details">View Details<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewbox="0 0 14 14" fill="none">
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
                <div class="car-block-two col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="#"><img src="{{ asset('landing/images/resource/shop1-1.jpg') }}" alt=""></a></figure>
                            <span>Low Mileage</span>
                            <a href="#" class="icon-box">
                                <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_2806_1274)">
                                        <path d="M9.39062 12C9.15156 12 8.91671 11.9312 8.71128 11.8009L6.11794 10.1543C6.04701 10.1091 5.95296 10.1096 5.88256 10.1543L3.28869 11.8009C2.8048 12.1082 2.13755 12.0368 1.72722 11.6454C1.47556 11.4047 1.33685 11.079 1.33685 10.728V1.2704C1.33738 0.570053 1.90743 0 2.60778 0H9.39272C10.0931 0 10.6631 0.570053 10.6631 1.2704V10.728C10.6631 11.4294 10.0925 12 9.39062 12ZM6.00025 9.06935C6.24193 9.06935 6.47783 9.13765 6.68169 9.26743L9.27503 10.9135C9.31233 10.9371 9.35069 10.9487 9.39114 10.9487C9.48046 10.9487 9.61286 10.8788 9.61286 10.728V1.2704C9.61233 1.14956 9.51356 1.05079 9.39272 1.05079H2.60778C2.48642 1.05079 2.38817 1.14956 2.38817 1.2704V10.728C2.38817 10.7911 2.41023 10.8436 2.45384 10.8851C2.52582 10.9539 2.63563 10.9708 2.72599 10.9135L5.31934 9.2669C5.52267 9.13765 5.75857 9.06935 6.00025 9.06935Z" fill="black" />
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
                                <a href="#" class="details">View Details<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewbox="0 0 14 14" fill="none">
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
            </div>
        </div>
        <div class="tab-pane fade" id="nav-contact2" role="tabpanel" aria-labelledby="nav-contact-tab2">
            <div class="row car-slider slider-layout-1" data-preview="2.3">
                <div class="car-block-two col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="#"><img src="{{ asset('landing/images/resource/shop1-1.jpg') }}" alt=""></a></figure>
                            <span>Low Mileage</span>
                            <a href="#" class="icon-box">
                                <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_2806_1274)">
                                        <path d="M9.39062 12C9.15156 12 8.91671 11.9312 8.71128 11.8009L6.11794 10.1543C6.04701 10.1091 5.95296 10.1096 5.88256 10.1543L3.28869 11.8009C2.8048 12.1082 2.13755 12.0368 1.72722 11.6454C1.47556 11.4047 1.33685 11.079 1.33685 10.728V1.2704C1.33738 0.570053 1.90743 0 2.60778 0H9.39272C10.0931 0 10.6631 0.570053 10.6631 1.2704V10.728C10.6631 11.4294 10.0925 12 9.39062 12ZM6.00025 9.06935C6.24193 9.06935 6.47783 9.13765 6.68169 9.26743L9.27503 10.9135C9.31233 10.9371 9.35069 10.9487 9.39114 10.9487C9.48046 10.9487 9.61286 10.8788 9.61286 10.728V1.2704C9.61233 1.14956 9.51356 1.05079 9.39272 1.05079H2.60778C2.48642 1.05079 2.38817 1.14956 2.38817 1.2704V10.728C2.38817 10.7911 2.41023 10.8436 2.45384 10.8851C2.52582 10.9539 2.63563 10.9708 2.72599 10.9135L5.31934 9.2669C5.52267 9.13765 5.75857 9.06935 6.00025 9.06935Z" fill="black" />
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
                            <div class="text">2023 C300e AMG Line Night Ed Premium Plus </div>
                            <ul>
                                <li><i class="flaticon-speedometer"></i>72,925 miles</li>
                                <li><i class="flaticon-gasoline-pump"></i>Petrol</li>
                                <li><i class="flaticon-gearbox"></i>Automatic</li>
                            </ul>
                            <div class="btn-box">
                                <span>$789</span>
                                <small>$399</small>
                                <a href="#" class="details">View Details<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewbox="0 0 14 14" fill="none">
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
                <div class="car-block-two col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="#"><img src="{{ asset('landing/images/resource/shop1-2.jpg') }}" alt=""></a></figure>
                            <a href="#" class="icon-box">
                                <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_2806_1274)">
                                        <path d="M9.39062 12C9.15156 12 8.91671 11.9312 8.71128 11.8009L6.11794 10.1543C6.04701 10.1091 5.95296 10.1096 5.88256 10.1543L3.28869 11.8009C2.8048 12.1082 2.13755 12.0368 1.72722 11.6454C1.47556 11.4047 1.33685 11.079 1.33685 10.728V1.2704C1.33738 0.570053 1.90743 0 2.60778 0H9.39272C10.0931 0 10.6631 0.570053 10.6631 1.2704V10.728C10.6631 11.4294 10.0925 12 9.39062 12ZM6.00025 9.06935C6.24193 9.06935 6.47783 9.13765 6.68169 9.26743L9.27503 10.9135C9.31233 10.9371 9.35069 10.9487 9.39114 10.9487C9.48046 10.9487 9.61286 10.8788 9.61286 10.728V1.2704C9.61233 1.14956 9.51356 1.05079 9.39272 1.05079H2.60778C2.48642 1.05079 2.38817 1.14956 2.38817 1.2704V10.728C2.38817 10.7911 2.41023 10.8436 2.45384 10.8851C2.52582 10.9539 2.63563 10.9708 2.72599 10.9135L5.31934 9.2669C5.52267 9.13765 5.75857 9.06935 6.00025 9.06935Z" fill="black" />
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
                                <a href="#" class="details">View Details<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewbox="0 0 14 14" fill="none">
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
                <div class="car-block-two col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="#"><img src="{{ asset('landing/images/resource/shop1-1.jpg') }}" alt=""></a></figure>
                            <span>Low Mileage</span>
                            <a href="#" class="icon-box">
                                <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_2806_1274)">
                                        <path d="M9.39062 12C9.15156 12 8.91671 11.9312 8.71128 11.8009L6.11794 10.1543C6.04701 10.1091 5.95296 10.1096 5.88256 10.1543L3.28869 11.8009C2.8048 12.1082 2.13755 12.0368 1.72722 11.6454C1.47556 11.4047 1.33685 11.079 1.33685 10.728V1.2704C1.33738 0.570053 1.90743 0 2.60778 0H9.39272C10.0931 0 10.6631 0.570053 10.6631 1.2704V10.728C10.6631 11.4294 10.0925 12 9.39062 12ZM6.00025 9.06935C6.24193 9.06935 6.47783 9.13765 6.68169 9.26743L9.27503 10.9135C9.31233 10.9371 9.35069 10.9487 9.39114 10.9487C9.48046 10.9487 9.61286 10.8788 9.61286 10.728V1.2704C9.61233 1.14956 9.51356 1.05079 9.39272 1.05079H2.60778C2.48642 1.05079 2.38817 1.14956 2.38817 1.2704V10.728C2.38817 10.7911 2.41023 10.8436 2.45384 10.8851C2.52582 10.9539 2.63563 10.9708 2.72599 10.9135L5.31934 9.2669C5.52267 9.13765 5.75857 9.06935 6.00025 9.06935Z" fill="black" />
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
                                <a href="#" class="details">View Details<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewbox="0 0 14 14" fill="none">
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
                <div class="car-block-two col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="#"><img src="{{ asset('landing/images/resource/shop1-1.jpg') }}" alt=""></a></figure>
                            <span>Low Mileage</span>
                            <a href="#" class="icon-box">
                                <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_2806_1274)">
                                        <path d="M9.39062 12C9.15156 12 8.91671 11.9312 8.71128 11.8009L6.11794 10.1543C6.04701 10.1091 5.95296 10.1096 5.88256 10.1543L3.28869 11.8009C2.8048 12.1082 2.13755 12.0368 1.72722 11.6454C1.47556 11.4047 1.33685 11.079 1.33685 10.728V1.2704C1.33738 0.570053 1.90743 0 2.60778 0H9.39272C10.0931 0 10.6631 0.570053 10.6631 1.2704V10.728C10.6631 11.4294 10.0925 12 9.39062 12ZM6.00025 9.06935C6.24193 9.06935 6.47783 9.13765 6.68169 9.26743L9.27503 10.9135C9.31233 10.9371 9.35069 10.9487 9.39114 10.9487C9.48046 10.9487 9.61286 10.8788 9.61286 10.728V1.2704C9.61233 1.14956 9.51356 1.05079 9.39272 1.05079H2.60778C2.48642 1.05079 2.38817 1.14956 2.38817 1.2704V10.728C2.38817 10.7911 2.41023 10.8436 2.45384 10.8851C2.52582 10.9539 2.63563 10.9708 2.72599 10.9135L5.31934 9.2669C5.52267 9.13765 5.75857 9.06935 6.00025 9.06935Z" fill="black" />
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
                                <a href="#" class="details">View Details<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewbox="0 0 14 14" fill="none">
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
                <div class="car-block-two col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="#"><img src="{{ asset('landing/images/resource/shop1-1.jpg') }}" alt=""></a></figure>
                            <span>Low Mileage</span>
                            <a href="#" class="icon-box">
                                <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_2806_1274)">
                                        <path d="M9.39062 12C9.15156 12 8.91671 11.9312 8.71128 11.8009L6.11794 10.1543C6.04701 10.1091 5.95296 10.1096 5.88256 10.1543L3.28869 11.8009C2.8048 12.1082 2.13755 12.0368 1.72722 11.6454C1.47556 11.4047 1.33685 11.079 1.33685 10.728V1.2704C1.33738 0.570053 1.90743 0 2.60778 0H9.39272C10.0931 0 10.6631 0.570053 10.6631 1.2704V10.728C10.6631 11.4294 10.0925 12 9.39062 12ZM6.00025 9.06935C6.24193 9.06935 6.47783 9.13765 6.68169 9.26743L9.27503 10.9135C9.31233 10.9371 9.35069 10.9487 9.39114 10.9487C9.48046 10.9487 9.61286 10.8788 9.61286 10.728V1.2704C9.61233 1.14956 9.51356 1.05079 9.39272 1.05079H2.60778C2.48642 1.05079 2.38817 1.14956 2.38817 1.2704V10.728C2.38817 10.7911 2.41023 10.8436 2.45384 10.8851C2.52582 10.9539 2.63563 10.9708 2.72599 10.9135L5.31934 9.2669C5.52267 9.13765 5.75857 9.06935 6.00025 9.06935Z" fill="black" />
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
                                <a href="#" class="details">View Details<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewbox="0 0 14 14" fill="none">
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
            </div>
        </div>
    </div>
</section>
<!-- End shop section two -->

<!-- cars-section -->
<section class="cars-section">
    <div class="boxcar-container">
        <div class="boxcar-title wow fadeInUp">
            <h2>Shop BoxCar Your Way</h2>
            <a href="#" class="btn-title">View More<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewbox="0 0 14 14" fill="none">
                    <g clip-path="url(#clip0_601_3199)">
                        <path d="M13.6109 0H5.05533C4.84037 0 4.66643 0.173943 4.66643 0.388901C4.66643 0.603859 4.84037 0.777802 5.05533 0.777802H12.6721L0.113697 13.3362C-0.0382246 13.4881 -0.0382246 13.7342 0.113697 13.8861C0.18964 13.962 0.289171 14 0.388666 14C0.488161 14 0.587656 13.962 0.663635 13.8861L13.222 1.3277V8.94447C13.222 9.15943 13.3959 9.33337 13.6109 9.33337C13.8259 9.33337 13.9998 9.15943 13.9998 8.94447V0.388901C13.9998 0.173943 13.8258 0 13.6109 0Z" fill="#050B20"></path>
                    </g>
                    <defs>
                        <clippath id="clip0_601_3199">
                            <rect width="14" height="14" fill="white"></rect>
                        </clippath>
                    </defs>
                </svg></a>
        </div>
        <ul class="nav nav-tabs wow fadeInUp" data-wow-delay="100ms" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">New Cars For Sale</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Used Cars For Sale</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Browse By Type</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Browse By Brand</button>
            </li>
        </ul>
        <div class="tab-content wow fadeInUp" data-wow-delay="200ms" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <div class="shop-cars">
                    <ul class="cars-list">
                        <li><a href="#">Used Abarth Cars</a></li>
                        <li><a href="#">Used Alfa Romeo Cars</a></li>
                        <li><a href="#">Used Audi Cars</a></li>
                        <li><a href="#">Used Bentley Cars</a></li>
                        <li><a href="#">Used BMW Cars</a></li>
                        <li><a href="#">Used Chevrolet Cars</a></li>
                    </ul>
                    <ul class="cars-list">
                        <li><a href="#">Used Chrysler Cars</a></li>
                        <li><a href="#">Used Citroen Cars</a></li>
                        <li><a href="#">Used Cupra Cars</a></li>
                        <li><a href="#">Used Dacia Cars</a></li>
                        <li><a href="#">Used DS Cars</a></li>
                        <li><a href="#">Used Fiat Cars</a></li>
                    </ul>
                    <ul class="cars-list">
                        <li><a href="#">Used Ford Cars</a></li>
                        <li><a href="#">Used Honda Cars</a></li>
                        <li><a href="#">Used Hyundai Cars</a></li>
                        <li><a href="#">Used Infiniti Cars</a></li>
                        <li><a href="#">Used Jaguar Cars</a></li>
                        <li><a href="#">Used Jeep Cars</a></li>
                    </ul>
                    <ul class="cars-list">
                        <li><a href="#">Used Kia Cars</a></li>
                        <li><a href="#">Used Land Rover Cars</a></li>
                        <li><a href="#">Used Lexus Cars</a></li>
                        <li><a href="#">Used Mazda Cars</a></li>
                        <li><a href="#">Used Mercedes-Benz Cars</a></li>
                        <li><a href="#">Used MG Cars</a></li>
                    </ul>
                    <ul class="cars-list">
                        <li><a href="#">Used Mini Cars</a></li>
                        <li><a href="#">Used Mitsubishi Cars</a></li>
                        <li><a href="#">Used Nissan Cars</a></li>
                        <li><a href="#">Used Peugeot Cars</a></li>
                        <li><a href="#">Used Porsche Cars</a></li>
                        <li><a href="#">Used Renault Cars</a></li>
                    </ul>
                </div>
            </div>
            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <div class="shop-cars">
                    <ul class="cars-list">
                        <li><a href="#">Used Abarth Cars</a></li>
                        <li><a href="#">Used Alfa Romeo Cars</a></li>
                        <li><a href="#">Used Audi Cars</a></li>
                        <li><a href="#">Used Bentley Cars</a></li>
                        <li><a href="#">Used BMW Cars</a></li>
                        <li><a href="#">Used Chevrolet Cars</a></li>
                    </ul>
                    <ul class="cars-list">
                        <li><a href="#">Used Chrysler Cars</a></li>
                        <li><a href="#">Used Citroen Cars</a></li>
                        <li><a href="#">Used Cupra Cars</a></li>
                        <li><a href="#">Used Dacia Cars</a></li>
                        <li><a href="#">Used DS Cars</a></li>
                        <li><a href="#">Used Fiat Cars</a></li>
                    </ul>
                    <ul class="cars-list">
                        <li><a href="#">Used Ford Cars</a></li>
                        <li><a href="#">Used Honda Cars</a></li>
                        <li><a href="#">Used Hyundai Cars</a></li>
                        <li><a href="#">Used Infiniti Cars</a></li>
                        <li><a href="#">Used Jaguar Cars</a></li>
                        <li><a href="#">Used Jeep Cars</a></li>
                    </ul>
                    <ul class="cars-list">
                        <li><a href="#">Used Kia Cars</a></li>
                        <li><a href="#">Used Land Rover Cars</a></li>
                        <li><a href="#">Used Lexus Cars</a></li>
                        <li><a href="#">Used Mazda Cars</a></li>
                        <li><a href="#">Used Mercedes-Benz Cars</a></li>
                        <li><a href="#">Used MG Cars</a></li>
                    </ul>
                    <ul class="cars-list">
                        <li><a href="#">Used Mini Cars</a></li>
                        <li><a href="#">Used Mitsubishi Cars</a></li>
                        <li><a href="#">Used Nissan Cars</a></li>
                        <li><a href="#">Used Peugeot Cars</a></li>
                        <li><a href="#">Used Porsche Cars</a></li>
                        <li><a href="#">Used Renault Cars</a></li>
                    </ul>
                </div>
            </div>
            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                <div class="shop-cars">
                    <ul class="cars-list">
                        <li><a href="#">Used Abarth Cars</a></li>
                        <li><a href="#">Used Alfa Romeo Cars</a></li>
                        <li><a href="#">Used Audi Cars</a></li>
                        <li><a href="#">Used Bentley Cars</a></li>
                        <li><a href="#">Used BMW Cars</a></li>
                        <li><a href="#">Used Chevrolet Cars</a></li>
                    </ul>
                    <ul class="cars-list">
                        <li><a href="#">Used Chrysler Cars</a></li>
                        <li><a href="#">Used Citroen Cars</a></li>
                        <li><a href="#">Used Cupra Cars</a></li>
                        <li><a href="#">Used Dacia Cars</a></li>
                        <li><a href="#">Used DS Cars</a></li>
                        <li><a href="#">Used Fiat Cars</a></li>
                    </ul>
                    <ul class="cars-list">
                        <li><a href="#">Used Ford Cars</a></li>
                        <li><a href="#">Used Honda Cars</a></li>
                        <li><a href="#">Used Hyundai Cars</a></li>
                        <li><a href="#">Used Infiniti Cars</a></li>
                        <li><a href="#">Used Jaguar Cars</a></li>
                        <li><a href="#">Used Jeep Cars</a></li>
                    </ul>
                    <ul class="cars-list">
                        <li><a href="#">Used Kia Cars</a></li>
                        <li><a href="#">Used Land Rover Cars</a></li>
                        <li><a href="#">Used Lexus Cars</a></li>
                        <li><a href="#">Used Mazda Cars</a></li>
                        <li><a href="#">Used Mercedes-Benz Cars</a></li>
                        <li><a href="#">Used MG Cars</a></li>
                    </ul>
                    <ul class="cars-list">
                        <li><a href="#">Used Mini Cars</a></li>
                        <li><a href="#">Used Mitsubishi Cars</a></li>
                        <li><a href="#">Used Nissan Cars</a></li>
                        <li><a href="#">Used Peugeot Cars</a></li>
                        <li><a href="#">Used Porsche Cars</a></li>
                        <li><a href="#">Used Renault Cars</a></li>
                    </ul>
                </div>
            </div>
            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                <div class="shop-cars">
                    <ul class="cars-list">
                        <li><a href="#">Used Abarth Cars</a></li>
                        <li><a href="#">Used Alfa Romeo Cars</a></li>
                        <li><a href="#">Used Audi Cars</a></li>
                        <li><a href="#">Used Bentley Cars</a></li>
                        <li><a href="#">Used BMW Cars</a></li>
                        <li><a href="#">Used Chevrolet Cars</a></li>
                    </ul>
                    <ul class="cars-list">
                        <li><a href="#">Used Chrysler Cars</a></li>
                        <li><a href="#">Used Citroen Cars</a></li>
                        <li><a href="#">Used Cupra Cars</a></li>
                        <li><a href="#">Used Dacia Cars</a></li>
                        <li><a href="#">Used DS Cars</a></li>
                        <li><a href="#">Used Fiat Cars</a></li>
                    </ul>
                    <ul class="cars-list">
                        <li><a href="#">Used Ford Cars</a></li>
                        <li><a href="#">Used Honda Cars</a></li>
                        <li><a href="#">Used Hyundai Cars</a></li>
                        <li><a href="#">Used Infiniti Cars</a></li>
                        <li><a href="#">Used Jaguar Cars</a></li>
                        <li><a href="#">Used Jeep Cars</a></li>
                    </ul>
                    <ul class="cars-list">
                        <li><a href="#">Used Kia Cars</a></li>
                        <li><a href="#">Used Land Rover Cars</a></li>
                        <li><a href="#">Used Lexus Cars</a></li>
                        <li><a href="#">Used Mazda Cars</a></li>
                        <li><a href="#">Used Mercedes-Benz Cars</a></li>
                        <li><a href="#">Used MG Cars</a></li>
                    </ul>
                    <ul class="cars-list">
                        <li><a href="#">Used Mini Cars</a></li>
                        <li><a href="#">Used Mitsubishi Cars</a></li>
                        <li><a href="#">Used Nissan Cars</a></li>
                        <li><a href="#">Used Peugeot Cars</a></li>
                        <li><a href="#">Used Porsche Cars</a></li>
                        <li><a href="#">Used Renault Cars</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End shop section -->

<!-- boxcar-testimonial-section -->
<section class="boxcar-testimonial-section home1">
    <div class="boxcar-container">
        <div class="boxcar-title wow fadeInUp">
            <h2>What our customers say</h2>
            <div class="text">Rated 4.7 / 5 based on 28,370 reviews Showing our 4 & 5 star reviews</div>
        </div>
        <div class="testimonial-slider-two">
            <div class="testimonial-slide-two">
                <div class="row">
                    <div class="image-column col-lg-4 col-md-12 col-sm-12">
                        <div class="inner-column wow fadeInUp">
                            <div class="image-box">
                                <figure class="image"><img src="{{ asset('landing/images/resource/test-1.jpg') }}" alt=""></figure>
                            </div>
                        </div>
                    </div>
                    <div class="content-column col-lg-8 col-md-12 col-sm-12">
                        <div class="inner-column wow fadeInUp" data-wow-delay="100ms">
                            <ul class="rating">
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <span>4.8</span>
                            </ul>
                            <h6 class="title">Ali TUFAN</h6>
                            <span>Designer</span>
                            <div class="text">I'd suggest Macklin Motors Nissan Glasgow South to
                                a friend because I had great service from my salesman Patrick
                                and all of the team.</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="testimonial-slide-two">
                <div class="row">
                    <div class="image-column col-lg-4 col-md-12 col-sm-12">
                        <div class="inner-column wow fadeInUp">
                            <div class="image-box">
                                <figure class="image"><img src="{{ asset('landing/images/resource/test-1.jpg') }}" alt=""></figure>
                            </div>
                        </div>
                    </div>
                    <div class="content-column col-lg-8 col-md-12 col-sm-12">
                        <div class="inner-column wow fadeInUp" data-wow-delay="100ms">
                            <ul class="rating">
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <span>4.8</span>
                            </ul>
                            <h6 class="title">Ali TUFAN</h6>
                            <span>Designer</span>
                            <div class="text">I'd suggest Macklin Motors Nissan Glasgow South to
                                a friend because I had great service from my salesman Patrick
                                and all of the team.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End boxcar-testimonial-section -->

<!-- blog section -->
<section class="blog-section">
    <div class="boxcar-container">
        <div class="boxcar-title wow fadeInUp">
            <h2>Latest Blog Posts</h2>
        </div>
        <div class="row">
            <!-- blog-block -->
            <div class="blog-block col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box wow fadeInUp">
                    <div class="image-box">
                        <figure class="image"><a href="blog-single.html"><img src="{{ asset('landing/images/resource/blog-1.jpg') }}" alt=""></a></figure>
                        <span class="date">news</span>
                    </div>
                    <div class="content-box">
                        <ul class="post-info">
                            <li>Ali Tufan</li>
                            <li>April 20, 2023</li>
                        </ul>
                        <h6 class="title"><a href="blog-single.html" title="">This Long-Awaited Technology May Finally Change the World</a></h6>
                    </div>
                </div>
            </div>
            <!-- blog-block -->
            <div class="blog-block col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box wow fadeInUp" data-wow-delay="100ms">
                    <div class="image-box">
                        <figure class="image"><a href="blog-single.html"><img src="{{ asset('landing/images/resource/blog-2.jpg') }}" alt=""></a></figure>
                        <span class="date">news</span>
                    </div>
                    <div class="content-box">
                        <ul class="post-info">
                            <li>Ali Tufan</li>
                            <li>April 20, 2023</li>
                        </ul>
                        <h6 class="title"><a href="blog-single.html" title="">This Long-Awaited Technology May Finally Change the World</a></h6>
                    </div>
                </div>
            </div>
            <!-- blog-block -->
            <div class="blog-block col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box wow fadeInUp" data-wow-delay="200ms">
                    <div class="image-box">
                        <figure class="image"><a href="blog-single.html"><img src="{{ asset('landing/images/resource/blog-3.jpg') }}" alt=""></a></figure>
                        <span class="date">news</span>
                    </div>
                    <div class="content-box">
                        <ul class="post-info">
                            <li>Ali Tufan</li>
                            <li>April 20, 2023</li>
                        </ul>
                        <h6 class="title"><a href="blog-single.html" title="">This Long-Awaited Technology May Finally Change the World</a></h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End blog-section -->

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

</script>
@endsection
