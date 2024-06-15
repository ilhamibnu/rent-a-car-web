<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from laravel.pixelstrap.com/viho/dashboard by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 25 Feb 2024 08:28:01 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="viho admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities. laravel/framework: ^8.40">
    <meta name="keywords" content="admin template, viho admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="{{ asset('admin/assets/images/favicon.png') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('admin/assets/images/favicon.png') }}" type="image/x-icon">
    <title>@yield('title') Rent A Car</title>
    <!-- Google font-->
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <!-- Font Awesome-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/css/fontawesome.css') }}">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/css/icofont.css') }}">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/css/themify.css') }}">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/css/flag-icon.css') }}">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/css/feather-icon.css') }}">
    <!-- Plugins css start-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/css/datatables.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/new/dataTables.bootstrap4.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/new/datatablesbutton.css') }}">
    <!-- Plugins css start-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/css/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/css/chartist.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/css/date-picker.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/css/prism.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/css/vector-map.css') }}">
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/css/bootstrap.css') }}">
    <!-- App css-->

    <link rel="preload" as="style" href="{{ asset('admin/build/assets/style-48b1edf8.css') }}" />
    <link rel="modulepreload" href="{{ asset('admin/build/assets/app-e4a857d6.js') }}" />
    <link rel="stylesheet" href="{{ asset('admin/build/assets/style-48b1edf8.css') }}" />
    <script type="module" src="{{ asset('admin/build/assets/app-e4a857d6.js') }}"></script>
    <link id="color" rel="stylesheet" href="{{ asset('admin/assets/css/color-1.css') }}" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/css/responsive.css') }}">
</head>


<body>
    <!-- Loader starts-->
    <div class="loader-wrapper">
        <div class="theme-loader"></div>
    </div>
    <!-- Loader ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-sidebar" id="pageWrapper">
        <!-- Page Header Start-->
        @include('admin.partials.header')
        <!-- Page Header Ends -->
        <!-- Page Body Start-->
        <div class="page-body-wrapper sidebar-icon">
            <!-- Page Sidebar Start-->
            @include('admin.partials.nav')
            <!-- Page Sidebar Ends-->
            <div class="page-body">
                @yield('content')
            </div>
            <!-- footer start-->
            @include('admin.partials.footer')
            <!-- footer end-->
        </div>
    </div>
    <!-- latest jquery-->
    <script src="{{ asset('admin/assets/js/jquery-3.5.1.min.js') }}"></script>
    <!-- feather icon js-->
    <script src="{{ asset('admin/assets/js/icons/feather-icon/feather.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/icons/feather-icon/feather-icon.js') }}"></script>
    <!-- Sidebar jquery-->
    <script src="{{ asset('admin/assets/js/sidebar-menu.js') }}"></script>
    <script src="{{ asset('admin/assets/js/config.js') }}"></script>
    <!-- Bootstrap js-->




    <script src="{{ asset('admin/assets/js/bootstrap/popper.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/bootstrap/bootstrap.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/datatable/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/datatable/datatables/datatable.custom.js') }}"></script>

    <script src="https://cdn.datatables.net/buttons/2.3.6/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.colVis.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.print.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/quagga/0.12.1/quagga.min.js"></script>
    <!-- Plugins JS start-->
    <script src="{{ asset('admin/assets/js/chart/chartist/chartist.js') }}"></script>
    <script src="{{ asset('admin/assets/js/chart/chartist/chartist-plugin-tooltip.js') }}"></script>
    <script src="{{ asset('admin/assets/js/chart/knob/knob.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/chart/knob/knob-chart.js') }}"></script>
    <script src="{{ asset('admin/assets/js/chart/apex-chart/apex-chart.js') }}"></script>
    <script src="{{ asset('admin/assets/js/chart/apex-chart/stock-prices.js') }}"></script>
    <script src="{{ asset('admin/assets/js/prism/prism.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/clipboard/clipboard.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/counter/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/counter/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/counter/counter-custom.js') }}"></script>
    <script src="{{ asset('admin/assets/js/custom-card/custom-card.js') }}"></script>
    <script src="{{ asset('admin/assets/js/notify/bootstrap-notify.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/vector-map/jquery-jvectormap-2.0.2.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/vector-map/map/jquery-jvectormap-world-mill-en.js') }}"></script>
    <script src="{{ asset('admin/assets/js/vector-map/map/jquery-jvectormap-us-aea-en.js') }}"></script>
    <script src="{{ asset('admin/assets/js/vector-map/map/jquery-jvectormap-uk-mill-en.js') }}"></script>
    <script src="{{ asset('admin/assets/js/vector-map/map/jquery-jvectormap-au-mill.js') }}"></script>
    <script src="{{ asset('admin/assets/js/vector-map/map/jquery-jvectormap-chicago-mill-en.js') }}"></script>
    <script src="{{ asset('admin/assets/js/vector-map/map/jquery-jvectormap-in-mill.js') }}"></script>
    <script src="{{ asset('admin/assets/js/vector-map/map/jquery-jvectormap-asia-mill.j') }}s"></script>
    <script src="{{ asset('admin/assets/js/dashboard/default.js') }}"></script>
    {{-- <script src="{{ asset('admin/assets/js/notify/index.js') }}"></script> --}}
    <script src="{{ asset('admin/assets/js/datepicker/date-picker/datepicker.js') }}"></script>
    <script src="{{ asset('admin/assets/js/datepicker/date-picker/datepicker.en.js') }}"></script>
    <script src="{{ asset('admin/assets/js/datepicker/date-picker/datepicker.custom.js') }}"></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="{{ asset('admin/assets/js/script.js') }}"></script>
    <script src="{{ asset('admin/assets/js/theme-customizer/customizer.js') }}"></script>
    <!-- Plugin used-->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    <script>
        $(document).ready(function() {
            let colorTheme = false;
            let defaultTheme = localStorage.getItem('dark');
            var dirValue = $('html').attr('dir');

            // Function to get the value of 'dir' attribute
            function getDirAttributeValue() {
                dirValue = $('html').attr('dir');
                // Perform actions based on the 'dir' value here
            }
            getDirAttributeValue();

            $("body").attr("class", defaultTheme);
            $(".mode").on("click", function() {
                colorTheme = !colorTheme;
                // console.log(dirValue);
                if (dirValue == 'rtl') {
                    if (colorTheme) {
                        $("body").attr("class", "rtl dark-only");
                        localStorage.setItem("dark", "dark-only");
                    } else {
                        $("body").attr("class", "rtl");
                        localStorage.setItem("dark", "light");
                    }
                } else {
                    if (colorTheme) {
                        $("body").attr("class", "dark-only");
                        localStorage.setItem("dark", "dark-only");
                    } else {
                        $("body").attr("class", "");
                        localStorage.setItem("dark", "light");
                    }
                }
            });
            setInterval(getDirAttributeValue, 5000);
        });

    </script>

    @yield('script')

    @if (Session::get('login'))
    <script>
        Swal.fire({
            icon: "success"
            , title: "Success"
            , text: "Login Berhasil"
        });

    </script>
    @endif

    @if (Session::get('updateprofil'))
    <script>
        Swal.fire({
            icon: "success"
            , title: "Success"
            , text: "Profil Berhasil Diupdate"
        });

    </script>
    @endif


    @if (Session::get('store'))
    <script>
        Swal.fire({
            icon: "success"
            , title: "Success"
            , text: "Data Berhasil Disimpan"
        });

    </script>
    @endif

    @if (Session::get('update'))
    <script>
        Swal.fire({
            icon: "success"
            , title: "Success"
            , text: "Profil Berhasil Diupdate"
        });

    </script>
    @endif

    @if (Session::get('destroy'))
    <script>
        Swal.fire({
            icon: "success"
            , title: "Success"
            , text: "Data Berhasil Dihapus"
        });

    </script>
    @endif

    @if (Session::get('statusubah'))
    <script>
        Swal.fire({
            icon: "success"
            , title: "Success"
            , text: "Status Berhasil Diubah"
        });

    </script>
    @endif
</body>


<!-- Mirrored from laravel.pixelstrap.com/viho/dashboard by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 25 Feb 2024 08:29:02 GMT -->

</html>
