@extends('landing.layout.main2')
@section('title', 'Detail Product ' . $mobil->nama . ' -')
@section('content')
<section class="inventory-section pb-0 layout-radius">
    <div class="boxcar-container">
        <div class="boxcar-title-three">
            <ul class="breadcrumb">
                <li><a href="/">Beranda</a></li>
                <li><span>Detail Produk</span></li>
            </ul>
        </div>
        <div class="row">
            <div class="inspection-column v2 col-lg-7 col-md-12 col-sm-12">
                <div class="inner-column">
                    <div class="gallery-sec">
                        <div class="image-column wrap-gallery-box">
                            <div class="inner-column inventry-slider-two">
                                <div class="image-box">
                                    <figure class="image"><a href="{{ asset($mobil->foto) }}" data-fancybox="gallery"><img src="{{ asset($mobil->foto) }}" alt=""></a></figure>
                                </div>
                               
                        </div>
                        
                    </div>
                </div>
                <!-- description-sec -->
                <div class="description-sec">
                    <h4 class="title">Deskripsi Kendaraan</h4>
                    <div class="text two">{{ $mobil->deskripsi }}
                    </div>
                    {{-- <div class="text">Etiam sit amet ex pharetra, venenatis ante vehicula,
                            gravida sapien. Fusce eleifend vulputate nibh, non cursus augue placerat
                            pellentesque. Sed venenatis risus nec felis mollis, in pharetra urna euismod.
                            Morbi aliquam ut turpis sit amet ultrices. Vestibulum mattis blandit nisl,
                            et tristique elit scelerisque nec. Fusce eleifend laoreet dui eget aliquet.
                            Ut rutrum risus et nunc pretium scelerisque.
                        </div> --}}
                    <ul class="des-list">
                        <li><a href="#"><img src="{{ asset('landing/images/resource/book1-1.svg') }}">View Vin
                                Report</a></li>
                        <li class="two"><a href="#"><img src="{{ asset('landing/images/resource/book1-2.svg') }}">Car Brochure</a></li>
                    </ul>
                </div>
               
                
               
               
                

                <div class="testimonial-slider">
                    <div class="carousel" id="testimonial-carousel">
                        @if (!$ulasan)
                        <p>Tidak ada ulasan untuk produk ini.</p>
                        @elseif ($ulasan->isEmpty())
                        <p>Tidak ada ulasan untuk produk ini.</p>
                        @else
                        <div class="toggle-reviews">
                            @foreach ($ulasan as $index => $detail)
                            <div class="review{{ $index >= 3 ? ' hidden' : '' }}">
                                <h4>{{ $detail->transaksi->user->name }}</h4>
                                <p>Email: {{ $detail->transaksi->user->email }}</p>
                                <p>{{ $detail->ulasan }}</p>
                            </div>
                            @endforeach
                        </div>
                        @if ($ulasan->count() > 3)
                        <button id="show-all-reviews" onclick="toggleReviews()">Lihat Semua</button>
                        @endif
                        @endif
                    </div>
                </div>

            </div>
        </div>

        <div class="side-bar-column v2 v3 col-lg-5 col-md-12 col-sm-12">
            <div class="inner-column">
                <div class="contact-box-two">
                    
                    <span>Harga Terbaik</span>
                    <h3 class="title">Rp. {{ number_format($mobil->harga, 0, ',', '.') }}</h3>
                    <small>Per Hari</small>
                    <div>
                        <form action="/user/detail-product/{{ $mobil->id }}" method="POST">
                            @csrf
                            <div class="row">
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
                                <h3 class="title">Filter</h3>
                                <input name="id_mobil" type="hidden" value="{{ $mobil->id }}">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Tanggal Keluar</label>
                                        <input type="date" id="future-date-1" name="tanggal_keluar" class="form-control2" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Tanggal Kembali</label>
                                        <input type="date" id="future-date-2" name="tanggal_kembali" class="form-control2" required>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <div class="btn-box">
                                        <button type="submit" class="side-btn">Cek Ketersediaan</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    @if ($filtermobil == '1')
                    @else
                    <div class="mt-2">
                        <h3 class="title">
                            @php
                            $date1 = new DateTime($tanggal_keluar);
                            $date2 = new DateTime($tanggal_kembali);
                            $diff = $date1->diff($date2);

                            @endphp
                            Total :
                            Rp. {{ number_format($mobil->harga * $diff->days, 0, ',', '.') }}
                        </h3>
                        <ul class="list">
                            <li>Tanggal Keluar : {{ date('d-m-Y', strtotime($tanggal_keluar)) }}</li>
                            <li>Tanggal Kembali : {{ date('d-m-Y', strtotime($tanggal_kembali)) }}</li>
                            <li> Jumlah Hari :
                                @php
                                $date1 = new DateTime($tanggal_keluar);
                                $date2 = new DateTime($tanggal_kembali);
                                $diff = $date1->diff($date2);
                                echo $diff->days;
                                @endphp
                            </li>
                            <li>Harga Per Hari
                                Rp. {{ number_format($mobil->harga, 0, ',', '.') }}
                            </li>
                        </ul>
                    </div>
                    @endif

                    <div>
                        <form action="/user/booking" method="POST">
                            @csrf
                            <div class="text-center">
                                <div class="btn-box">
                                    <input type="hidden" name="id_mobil" value="{{ $mobil->id }}">
                                    <input type="hidden" name="tanggal_keluar" value="{{ $tanggal_keluar }}">
                                    <input type="hidden" name="tanggal_kembali" value="{{ $tanggal_kembali }}">
                                    @if ($filtermobil == '1')
                                    @else
                                    <button type="submit" class="side-btn">Pesan Sekarang
            
                                    </button>
                                    @endif
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                
            </div>
        </div>
    </div>
    </div>
    <!-- cars-section-three -->
    <div class="cars-section-three">
        <div class="boxcar-container">
            <div class="boxcar-title wow fadeInUp">
                <h2>Related Listings</h2>
                <a href="#" class="btn-title">View All<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewbox="0 0 14 14" fill="none">
                        <g clip-path="url(#clip0_601_243)">
                            <path d="M13.6109 0H5.05533C4.84037 0 4.66643 0.173943 4.66643 0.388901C4.66643 0.603859 4.84037 0.777802 5.05533 0.777802H12.6721L0.113697 13.3362C-0.0382246 13.4881 -0.0382246 13.7342 0.113697 13.8861C0.18964 13.962 0.289171 14 0.388666 14C0.488161 14 0.587656 13.962 0.663635 13.8861L13.222 1.3277V8.94447C13.222 9.15943 13.3959 9.33337 13.6109 9.33337C13.8259 9.33337 13.9998 9.15943 13.9998 8.94447V0.388901C13.9998 0.173943 13.8258 0 13.6109 0Z" fill="#050B20"></path>
                        </g>
                        <defs>
                            <clippath id="clip0_601_243">
                                <rect width="14" height="14" fill="white"></rect>
                            </clippath>
                        </defs>
                    </svg>
                </a>
            </div>

            <div class="row car-slider-three" data-preview="4">
                <!-- car-block-three -->
                <div class="car-block-three col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="#"><img src="{{ asset('landing/images/resource/shop3-1.jpg') }}" alt=""></a>
                            </figure>
                            <span>Low Mileage</span>
                            <a href="#" title="" class="icon-box">
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewbox="0 0 12 12" fill="none">
                                    <g clip-path="url(#clip0_601_1274)">
                                        <path d="M9.39062 12C9.15156 12 8.91671 11.9312 8.71128 11.8009L6.11794 10.1543C6.04701 10.1091 5.95296 10.1096 5.88256 10.1543L3.28869 11.8009C2.8048 12.1082 2.13755 12.0368 1.72722 11.6454C1.47556 11.4047 1.33685 11.079 1.33685 10.728V1.2704C1.33738 0.570053 1.90743 0 2.60778 0H9.39272C10.0931 0 10.6631 0.570053 10.6631 1.2704V10.728C10.6631 11.4294 10.0925 12 9.39062 12ZM6.00025 9.06935C6.24193 9.06935 6.47783 9.13765 6.68169 9.26743L9.27503 10.9135C9.31233 10.9371 9.35069 10.9487 9.39114 10.9487C9.48046 10.9487 9.61286 10.8788 9.61286 10.728V1.2704C9.61233 1.14956 9.51356 1.05079 9.39272 1.05079H2.60778C2.48642 1.05079 2.38817 1.14956 2.38817 1.2704V10.728C2.38817 10.7911 2.41023 10.8436 2.45384 10.8851C2.52582 10.9539 2.63563 10.9708 2.72599 10.9135L5.31934 9.2669C5.52267 9.13765 5.75857 9.06935 6.00025 9.06935Z" fill="black"></path>
                                    </g>
                                    <defs>
                                        <clippath id="clip0_601_1274">
                                            <rect width="12" height="12" fill="white"></rect>
                                        </clippath>
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
                                <a href="#" class="details">View Details<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewbox="0 0 14 14" fill="none">
                                        <g clip-path="url(#clip0_601_4346)">
                                            <path d="M13.6109 0H5.05533C4.84037 0 4.66643 0.173943 4.66643 0.388901C4.66643 0.603859 4.84037 0.777802 5.05533 0.777802H12.6721L0.113697 13.3362C-0.0382246 13.4881 -0.0382246 13.7342 0.113697 13.8861C0.18964 13.962 0.289171 14 0.388666 14C0.488161 14 0.587656 13.962 0.663635 13.8861L13.222 1.3277V8.94447C13.222 9.15943 13.3959 9.33337 13.6109 9.33337C13.8259 9.33337 13.9998 9.15943 13.9998 8.94447V0.388901C13.9998 0.173943 13.8258 0 13.6109 0Z" fill="#405FF2"></path>
                                        </g>
                                        <defs>
                                            <clippath id="clip0_601_4346">
                                                <rect width="14" height="14" fill="white"></rect>
                                            </clippath>
                                        </defs>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- car-block-three -->
                <div class="car-block-three col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="#"><img src="{{ asset('landing/images/resource/shop3-2.jpg') }}" alt=""></a>
                            </figure>
                            <a href="#" title="" class="icon-box">
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewbox="0 0 12 12" fill="none">
                                    <g clip-path="url(#clip0_601_1274)">
                                        <path d="M9.39062 12C9.15156 12 8.91671 11.9312 8.71128 11.8009L6.11794 10.1543C6.04701 10.1091 5.95296 10.1096 5.88256 10.1543L3.28869 11.8009C2.8048 12.1082 2.13755 12.0368 1.72722 11.6454C1.47556 11.4047 1.33685 11.079 1.33685 10.728V1.2704C1.33738 0.570053 1.90743 0 2.60778 0H9.39272C10.0931 0 10.6631 0.570053 10.6631 1.2704V10.728C10.6631 11.4294 10.0925 12 9.39062 12ZM6.00025 9.06935C6.24193 9.06935 6.47783 9.13765 6.68169 9.26743L9.27503 10.9135C9.31233 10.9371 9.35069 10.9487 9.39114 10.9487C9.48046 10.9487 9.61286 10.8788 9.61286 10.728V1.2704C9.61233 1.14956 9.51356 1.05079 9.39272 1.05079H2.60778C2.48642 1.05079 2.38817 1.14956 2.38817 1.2704V10.728C2.38817 10.7911 2.41023 10.8436 2.45384 10.8851C2.52582 10.9539 2.63563 10.9708 2.72599 10.9135L5.31934 9.2669C5.52267 9.13765 5.75857 9.06935 6.00025 9.06935Z" fill="black"></path>
                                    </g>
                                    <defs>
                                        <clippath id="clip0_601_1274">
                                            <rect width="12" height="12" fill="white"></rect>
                                        </clippath>
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
                                <a href="#" class="details">View Details<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewbox="0 0 14 14" fill="none">
                                        <g clip-path="url(#clip0_601_4346)">
                                            <path d="M13.6109 0H5.05533C4.84037 0 4.66643 0.173943 4.66643 0.388901C4.66643 0.603859 4.84037 0.777802 5.05533 0.777802H12.6721L0.113697 13.3362C-0.0382246 13.4881 -0.0382246 13.7342 0.113697 13.8861C0.18964 13.962 0.289171 14 0.388666 14C0.488161 14 0.587656 13.962 0.663635 13.8861L13.222 1.3277V8.94447C13.222 9.15943 13.3959 9.33337 13.6109 9.33337C13.8259 9.33337 13.9998 9.15943 13.9998 8.94447V0.388901C13.9998 0.173943 13.8258 0 13.6109 0Z" fill="#405FF2"></path>
                                        </g>
                                        <defs>
                                            <clippath id="clip0_601_4346">
                                                <rect width="14" height="14" fill="white"></rect>
                                            </clippath>
                                        </defs>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- car-block-three -->
                <div class="car-block-three col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image-box two">
                            <figure class="image"><a href="#"><img src="{{ asset('landing/images/resource/shop3-3.jpg') }}" alt=""></a>
                            </figure>
                            <span>Great Price</span>
                            <a href="#" title="" class="icon-box">
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewbox="0 0 12 12" fill="none">
                                    <g clip-path="url(#clip0_601_1274)">
                                        <path d="M9.39062 12C9.15156 12 8.91671 11.9312 8.71128 11.8009L6.11794 10.1543C6.04701 10.1091 5.95296 10.1096 5.88256 10.1543L3.28869 11.8009C2.8048 12.1082 2.13755 12.0368 1.72722 11.6454C1.47556 11.4047 1.33685 11.079 1.33685 10.728V1.2704C1.33738 0.570053 1.90743 0 2.60778 0H9.39272C10.0931 0 10.6631 0.570053 10.6631 1.2704V10.728C10.6631 11.4294 10.0925 12 9.39062 12ZM6.00025 9.06935C6.24193 9.06935 6.47783 9.13765 6.68169 9.26743L9.27503 10.9135C9.31233 10.9371 9.35069 10.9487 9.39114 10.9487C9.48046 10.9487 9.61286 10.8788 9.61286 10.728V1.2704C9.61233 1.14956 9.51356 1.05079 9.39272 1.05079H2.60778C2.48642 1.05079 2.38817 1.14956 2.38817 1.2704V10.728C2.38817 10.7911 2.41023 10.8436 2.45384 10.8851C2.52582 10.9539 2.63563 10.9708 2.72599 10.9135L5.31934 9.2669C5.52267 9.13765 5.75857 9.06935 6.00025 9.06935Z" fill="black"></path>
                                    </g>
                                    <defs>
                                        <clippath id="clip0_601_1274">
                                            <rect width="12" height="12" fill="white"></rect>
                                        </clippath>
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
                                <a href="#" class="details">View Details<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewbox="0 0 14 14" fill="none">
                                        <g clip-path="url(#clip0_601_4346)">
                                            <path d="M13.6109 0H5.05533C4.84037 0 4.66643 0.173943 4.66643 0.388901C4.66643 0.603859 4.84037 0.777802 5.05533 0.777802H12.6721L0.113697 13.3362C-0.0382246 13.4881 -0.0382246 13.7342 0.113697 13.8861C0.18964 13.962 0.289171 14 0.388666 14C0.488161 14 0.587656 13.962 0.663635 13.8861L13.222 1.3277V8.94447C13.222 9.15943 13.3959 9.33337 13.6109 9.33337C13.8259 9.33337 13.9998 9.15943 13.9998 8.94447V0.388901C13.9998 0.173943 13.8258 0 13.6109 0Z" fill="#405FF2"></path>
                                        </g>
                                        <defs>
                                            <clippath id="clip0_601_4346">
                                                <rect width="14" height="14" fill="white"></rect>
                                            </clippath>
                                        </defs>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- car-block-three -->
                <div class="car-block-three col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="#"><img src="{{ asset('landing/images/resource/shop3-4.jpg') }}" alt=""></a>
                            </figure>
                            <a href="#" title="" class="icon-box">
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewbox="0 0 12 12" fill="none">
                                    <g clip-path="url(#clip0_601_1274)">
                                        <path d="M9.39062 12C9.15156 12 8.91671 11.9312 8.71128 11.8009L6.11794 10.1543C6.04701 10.1091 5.95296 10.1096 5.88256 10.1543L3.28869 11.8009C2.8048 12.1082 2.13755 12.0368 1.72722 11.6454C1.47556 11.4047 1.33685 11.079 1.33685 10.728V1.2704C1.33738 0.570053 1.90743 0 2.60778 0H9.39272C10.0931 0 10.6631 0.570053 10.6631 1.2704V10.728C10.6631 11.4294 10.0925 12 9.39062 12ZM6.00025 9.06935C6.24193 9.06935 6.47783 9.13765 6.68169 9.26743L9.27503 10.9135C9.31233 10.9371 9.35069 10.9487 9.39114 10.9487C9.48046 10.9487 9.61286 10.8788 9.61286 10.728V1.2704C9.61233 1.14956 9.51356 1.05079 9.39272 1.05079H2.60778C2.48642 1.05079 2.38817 1.14956 2.38817 1.2704V10.728C2.38817 10.7911 2.41023 10.8436 2.45384 10.8851C2.52582 10.9539 2.63563 10.9708 2.72599 10.9135L5.31934 9.2669C5.52267 9.13765 5.75857 9.06935 6.00025 9.06935Z" fill="black"></path>
                                    </g>
                                    <defs>
                                        <clippath id="clip0_601_1274">
                                            <rect width="12" height="12" fill="white"></rect>
                                        </clippath>
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
                                <a href="#" class="details">View Details<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewbox="0 0 14 14" fill="none">
                                        <g clip-path="url(#clip0_601_4346)">
                                            <path d="M13.6109 0H5.05533C4.84037 0 4.66643 0.173943 4.66643 0.388901C4.66643 0.603859 4.84037 0.777802 5.05533 0.777802H12.6721L0.113697 13.3362C-0.0382246 13.4881 -0.0382246 13.7342 0.113697 13.8861C0.18964 13.962 0.289171 14 0.388666 14C0.488161 14 0.587656 13.962 0.663635 13.8861L13.222 1.3277V8.94447C13.222 9.15943 13.3959 9.33337 13.6109 9.33337C13.8259 9.33337 13.9998 9.15943 13.9998 8.94447V0.388901C13.9998 0.173943 13.8258 0 13.6109 0Z" fill="#405FF2"></path>
                                        </g>
                                        <defs>
                                            <clippath id="clip0_601_4346">
                                                <rect width="14" height="14" fill="white"></rect>
                                            </clippath>
                                        </defs>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- car-block-three -->
                <div class="car-block-three col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="#"><img src="{{ asset('landing/images/resource/shop3-1.jpg') }}" alt=""></a>
                            </figure>
                            <span>Low Mileage</span>
                            <a href="#" title="" class="icon-box">
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewbox="0 0 12 12" fill="none">
                                    <g clip-path="url(#clip0_601_1274)">
                                        <path d="M9.39062 12C9.15156 12 8.91671 11.9312 8.71128 11.8009L6.11794 10.1543C6.04701 10.1091 5.95296 10.1096 5.88256 10.1543L3.28869 11.8009C2.8048 12.1082 2.13755 12.0368 1.72722 11.6454C1.47556 11.4047 1.33685 11.079 1.33685 10.728V1.2704C1.33738 0.570053 1.90743 0 2.60778 0H9.39272C10.0931 0 10.6631 0.570053 10.6631 1.2704V10.728C10.6631 11.4294 10.0925 12 9.39062 12ZM6.00025 9.06935C6.24193 9.06935 6.47783 9.13765 6.68169 9.26743L9.27503 10.9135C9.31233 10.9371 9.35069 10.9487 9.39114 10.9487C9.48046 10.9487 9.61286 10.8788 9.61286 10.728V1.2704C9.61233 1.14956 9.51356 1.05079 9.39272 1.05079H2.60778C2.48642 1.05079 2.38817 1.14956 2.38817 1.2704V10.728C2.38817 10.7911 2.41023 10.8436 2.45384 10.8851C2.52582 10.9539 2.63563 10.9708 2.72599 10.9135L5.31934 9.2669C5.52267 9.13765 5.75857 9.06935 6.00025 9.06935Z" fill="black"></path>
                                    </g>
                                    <defs>
                                        <clippath id="clip0_601_1274">
                                            <rect width="12" height="12" fill="white"></rect>
                                        </clippath>
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
                                <a href="#" class="details">View Details<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewbox="0 0 14 14" fill="none">
                                        <g clip-path="url(#clip0_601_4346)">
                                            <path d="M13.6109 0H5.05533C4.84037 0 4.66643 0.173943 4.66643 0.388901C4.66643 0.603859 4.84037 0.777802 5.05533 0.777802H12.6721L0.113697 13.3362C-0.0382246 13.4881 -0.0382246 13.7342 0.113697 13.8861C0.18964 13.962 0.289171 14 0.388666 14C0.488161 14 0.587656 13.962 0.663635 13.8861L13.222 1.3277V8.94447C13.222 9.15943 13.3959 9.33337 13.6109 9.33337C13.8259 9.33337 13.9998 9.15943 13.9998 8.94447V0.388901C13.9998 0.173943 13.8258 0 13.6109 0Z" fill="#405FF2"></path>
                                        </g>
                                        <defs>
                                            <clippath id="clip0_601_4346">
                                                <rect width="14" height="14" fill="white"></rect>
                                            </clippath>
                                        </defs>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- car-block-three -->
                <div class="car-block-three col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="#"><img src="{{ asset('landing/images/resource/shop3-2.jpg') }}" alt=""></a>
                            </figure>
                            <a href="#" title="" class="icon-box">
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewbox="0 0 12 12" fill="none">
                                    <g clip-path="url(#clip0_601_1274)">
                                        <path d="M9.39062 12C9.15156 12 8.91671 11.9312 8.71128 11.8009L6.11794 10.1543C6.04701 10.1091 5.95296 10.1096 5.88256 10.1543L3.28869 11.8009C2.8048 12.1082 2.13755 12.0368 1.72722 11.6454C1.47556 11.4047 1.33685 11.079 1.33685 10.728V1.2704C1.33738 0.570053 1.90743 0 2.60778 0H9.39272C10.0931 0 10.6631 0.570053 10.6631 1.2704V10.728C10.6631 11.4294 10.0925 12 9.39062 12ZM6.00025 9.06935C6.24193 9.06935 6.47783 9.13765 6.68169 9.26743L9.27503 10.9135C9.31233 10.9371 9.35069 10.9487 9.39114 10.9487C9.48046 10.9487 9.61286 10.8788 9.61286 10.728V1.2704C9.61233 1.14956 9.51356 1.05079 9.39272 1.05079H2.60778C2.48642 1.05079 2.38817 1.14956 2.38817 1.2704V10.728C2.38817 10.7911 2.41023 10.8436 2.45384 10.8851C2.52582 10.9539 2.63563 10.9708 2.72599 10.9135L5.31934 9.2669C5.52267 9.13765 5.75857 9.06935 6.00025 9.06935Z" fill="black"></path>
                                    </g>
                                    <defs>
                                        <clippath id="clip0_601_1274">
                                            <rect width="12" height="12" fill="white"></rect>
                                        </clippath>
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
                                <a href="#" class="details">View Details<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewbox="0 0 14 14" fill="none">
                                        <g clip-path="url(#clip0_601_4346)">
                                            <path d="M13.6109 0H5.05533C4.84037 0 4.66643 0.173943 4.66643 0.388901C4.66643 0.603859 4.84037 0.777802 5.05533 0.777802H12.6721L0.113697 13.3362C-0.0382246 13.4881 -0.0382246 13.7342 0.113697 13.8861C0.18964 13.962 0.289171 14 0.388666 14C0.488161 14 0.587656 13.962 0.663635 13.8861L13.222 1.3277V8.94447C13.222 9.15943 13.3959 9.33337 13.6109 9.33337C13.8259 9.33337 13.9998 9.15943 13.9998 8.94447V0.388901C13.9998 0.173943 13.8258 0 13.6109 0Z" fill="#405FF2"></path>
                                        </g>
                                        <defs>
                                            <clippath id="clip0_601_4346">
                                                <rect width="14" height="14" fill="white"></rect>
                                            </clippath>
                                        </defs>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- car-block-three -->
                <div class="car-block-three col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image-box two">
                            <figure class="image"><a href="#"><img src="{{ asset('landing/images/resource/shop3-3.jpg') }}" alt=""></a>
                            </figure>
                            <span>Great Price</span>
                            <a href="#" title="" class="icon-box">
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewbox="0 0 12 12" fill="none">
                                    <g clip-path="url(#clip0_601_1274)">
                                        <path d="M9.39062 12C9.15156 12 8.91671 11.9312 8.71128 11.8009L6.11794 10.1543C6.04701 10.1091 5.95296 10.1096 5.88256 10.1543L3.28869 11.8009C2.8048 12.1082 2.13755 12.0368 1.72722 11.6454C1.47556 11.4047 1.33685 11.079 1.33685 10.728V1.2704C1.33738 0.570053 1.90743 0 2.60778 0H9.39272C10.0931 0 10.6631 0.570053 10.6631 1.2704V10.728C10.6631 11.4294 10.0925 12 9.39062 12ZM6.00025 9.06935C6.24193 9.06935 6.47783 9.13765 6.68169 9.26743L9.27503 10.9135C9.31233 10.9371 9.35069 10.9487 9.39114 10.9487C9.48046 10.9487 9.61286 10.8788 9.61286 10.728V1.2704C9.61233 1.14956 9.51356 1.05079 9.39272 1.05079H2.60778C2.48642 1.05079 2.38817 1.14956 2.38817 1.2704V10.728C2.38817 10.7911 2.41023 10.8436 2.45384 10.8851C2.52582 10.9539 2.63563 10.9708 2.72599 10.9135L5.31934 9.2669C5.52267 9.13765 5.75857 9.06935 6.00025 9.06935Z" fill="black"></path>
                                    </g>
                                    <defs>
                                        <clippath id="clip0_601_1274">
                                            <rect width="12" height="12" fill="white"></rect>
                                        </clippath>
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
                                <a href="#" class="details">View Details<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewbox="0 0 14 14" fill="none">
                                        <g clip-path="url(#clip0_601_4346)">
                                            <path d="M13.6109 0H5.05533C4.84037 0 4.66643 0.173943 4.66643 0.388901C4.66643 0.603859 4.84037 0.777802 5.05533 0.777802H12.6721L0.113697 13.3362C-0.0382246 13.4881 -0.0382246 13.7342 0.113697 13.8861C0.18964 13.962 0.289171 14 0.388666 14C0.488161 14 0.587656 13.962 0.663635 13.8861L13.222 1.3277V8.94447C13.222 9.15943 13.3959 9.33337 13.6109 9.33337C13.8259 9.33337 13.9998 9.15943 13.9998 8.94447V0.388901C13.9998 0.173943 13.8258 0 13.6109 0Z" fill="#405FF2"></path>
                                        </g>
                                        <defs>
                                            <clippath id="clip0_601_4346">
                                                <rect width="14" height="14" fill="white"></rect>
                                            </clippath>
                                        </defs>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- car-block-three -->
                <div class="car-block-three col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="#"><img src="{{ asset('landing/images/resource/shop3-4.jpg') }}" alt=""></a>
                            </figure>
                            <a href="#" title="" class="icon-box">
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewbox="0 0 12 12" fill="none">
                                    <g clip-path="url(#clip0_601_1274)">
                                        <path d="M9.39062 12C9.15156 12 8.91671 11.9312 8.71128 11.8009L6.11794 10.1543C6.04701 10.1091 5.95296 10.1096 5.88256 10.1543L3.28869 11.8009C2.8048 12.1082 2.13755 12.0368 1.72722 11.6454C1.47556 11.4047 1.33685 11.079 1.33685 10.728V1.2704C1.33738 0.570053 1.90743 0 2.60778 0H9.39272C10.0931 0 10.6631 0.570053 10.6631 1.2704V10.728C10.6631 11.4294 10.0925 12 9.39062 12ZM6.00025 9.06935C6.24193 9.06935 6.47783 9.13765 6.68169 9.26743L9.27503 10.9135C9.31233 10.9371 9.35069 10.9487 9.39114 10.9487C9.48046 10.9487 9.61286 10.8788 9.61286 10.728V1.2704C9.61233 1.14956 9.51356 1.05079 9.39272 1.05079H2.60778C2.48642 1.05079 2.38817 1.14956 2.38817 1.2704V10.728C2.38817 10.7911 2.41023 10.8436 2.45384 10.8851C2.52582 10.9539 2.63563 10.9708 2.72599 10.9135L5.31934 9.2669C5.52267 9.13765 5.75857 9.06935 6.00025 9.06935Z" fill="black"></path>
                                    </g>
                                    <defs>
                                        <clippath id="clip0_601_1274">
                                            <rect width="12" height="12" fill="white"></rect>
                                        </clippath>
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
                                <a href="#" class="details">View Details<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewbox="0 0 14 14" fill="none">
                                        <g clip-path="url(#clip0_601_4346)">
                                            <path d="M13.6109 0H5.05533C4.84037 0 4.66643 0.173943 4.66643 0.388901C4.66643 0.603859 4.84037 0.777802 5.05533 0.777802H12.6721L0.113697 13.3362C-0.0382246 13.4881 -0.0382246 13.7342 0.113697 13.8861C0.18964 13.962 0.289171 14 0.388666 14C0.488161 14 0.587656 13.962 0.663635 13.8861L13.222 1.3277V8.94447C13.222 9.15943 13.3959 9.33337 13.6109 9.33337C13.8259 9.33337 13.9998 9.15943 13.9998 8.94447V0.388901C13.9998 0.173943 13.8258 0 13.6109 0Z" fill="#405FF2"></path>
                                        </g>
                                        <defs>
                                            <clippath id="clip0_601_4346">
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
    <!-- End shop section two -->
</section>
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
<script>
    function toggleReviews() {
        var button = document.getElementById('show-all-reviews');
        var reviews = document.querySelectorAll('.toggle-reviews .review.hidden');

        reviews.forEach(function(review) {
            review.style.display = 'block';
        });

        button.style.display = 'none';
    }

</script>

@endsection
