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
    <link rel="icon" href="assets/images/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
    <title>Default Page</title>
    <!-- Google font-->
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <!-- Font Awesome-->
    <link rel="stylesheet" type="text/css" href="assets/css/fontawesome.css">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="assets/css/icofont.css">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="assets/css/themify.css">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="assets/css/flag-icon.css">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="assets/css/feather-icon.css">
    <!-- Plugins css start-->
    <link rel="stylesheet" type="text/css" href="assets/css/animate.css">
    <link rel="stylesheet" type="text/css" href="assets/css/chartist.css">
    <link rel="stylesheet" type="text/css" href="assets/css/date-picker.css">
    <link rel="stylesheet" type="text/css" href="assets/css/prism.css">
    <link rel="stylesheet" type="text/css" href="assets/css/vector-map.css">
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
    <!-- App css-->

    <link rel="preload" as="style" href="build/assets/style-48b1edf8.css" />
    <link rel="modulepreload" href="build/assets/app-e4a857d6.js" />
    <link rel="stylesheet" href="build/assets/style-48b1edf8.css" />
    <script type="module" src="build/assets/app-e4a857d6.js"></script>
    <link id="color" rel="stylesheet" href="assets/css/color-1.css" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
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
        <div class="page-main-header">
            <div class="main-header-right row m-0">
                <div class="main-header-left">
                    <div class="logo-wrapper"><a href="dashboard.html"><img class="img-fluid" src="assets/images/logo/logo.png" alt=""></a></div>
                    <div class="dark-logo-wrapper"><a href="dashboard.html"><img class="img-fluid" src="assets/images/logo/dark-logo.png" alt=""></a></div>
                    <div class="toggle-sidebar"><i class="status_toggle middle" data-feather="align-center" id="sidebar-toggle"> </i></div>
                </div>
                <div class="left-menu-header col">
                    <ul>
                        <li>
                            <form class="form-inline search-form">
                                <div class="search-bg"><i class="fa fa-search"></i>
                                    <input class="form-control-plaintext" placeholder="Search here.....">
                                </div>
                            </form>
                            <span class="d-sm-none mobile-search search-bg"><i class="fa fa-search"></i></span>
                        </li>
                    </ul>
                </div>
                <div class="nav-right col pull-right right-menu p-0">
                    <ul class="nav-menus">
                        <li><a class="text-dark" href="#!" onclick="javascript:toggleFullScreen()"><i data-feather="maximize"></i></a></li>
                        <li class="onhover-dropdown">
                            <div class="bookmark-box"><i data-feather="star"></i></div>
                            <div class="bookmark-dropdown onhover-show-div">
                                <div class="form-group mb-0">
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-search"></i></span></div>
                                        <input class="form-control" type="text" placeholder="Search for bookmark...">
                                    </div>
                                </div>
                                <ul>
                                    <li class="add-to-bookmark"><i class="bookmark-icon" data-feather="inbox"></i>Email<span class="pull-right"><i data-feather="star"></i></span></li>
                                    <li class="add-to-bookmark"><i class="bookmark-icon" data-feather="message-square"></i>Chat<span class="pull-right"><i data-feather="star"></i></span></li>
                                    <li class="add-to-bookmark"><i class="bookmark-icon" data-feather="command"></i>Feather Icon<span class="pull-right"><i data-feather="star"></i></span></li>
                                    <li class="add-to-bookmark"><i class="bookmark-icon" data-feather="airplay"></i>Widgets<span class="pull-right"><i data-feather="star"> </i></span></li>
                                </ul>
                            </div>
                        </li>
                        <li class="onhover-dropdown">
                            <div class="notification-box"><i data-feather="bell"></i><span class="dot-animated"></span></div>
                            <ul class="notification-dropdown onhover-show-div">
                                <li>
                                    <p class="f-w-700 mb-0">You have 3 Notifications<span class="pull-right badge badge-primary badge-pill">4</span></p>
                                </li>
                                <li class="noti-primary">
                                    <div class="media">
                                        <span class="notification-bg bg-light-primary"><i data-feather="activity"> </i></span>
                                        <div class="media-body">
                                            <p>Delivery processing </p>
                                            <span>10 minutes ago</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="noti-secondary">
                                    <div class="media">
                                        <span class="notification-bg bg-light-secondary"><i data-feather="check-circle"> </i></span>
                                        <div class="media-body">
                                            <p>Order Complete</p>
                                            <span>1 hour ago</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="noti-success">
                                    <div class="media">
                                        <span class="notification-bg bg-light-success"><i data-feather="file-text"> </i></span>
                                        <div class="media-body">
                                            <p>Tickets Generated</p>
                                            <span>3 hour ago</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="noti-danger">
                                    <div class="media">
                                        <span class="notification-bg bg-light-danger"><i data-feather="user-check"> </i></span>
                                        <div class="media-body">
                                            <p>Delivery Complete</p>
                                            <span>6 hour ago</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <div class="mode"><i class="fa fa-moon-o"></i></div>
                        </li>
                        <li class="onhover-dropdown">
                            <i data-feather="message-square"></i>
                            <ul class="chat-dropdown onhover-show-div">
                                <li>
                                    <div class="media">
                                        <img class="img-fluid rounded-circle me-3" src="assets/images/user/4.jpg" alt="">
                                        <div class="media-body">
                                            <span>Ain Chavez</span>
                                            <p class="f-12 light-font">Lorem Ipsum is simply dummy...</p>
                                        </div>
                                        <p class="f-12">32 mins ago</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="media">
                                        <img class="img-fluid rounded-circle me-3" src="assets/images/user/1.jpg" alt="">
                                        <div class="media-body">
                                            <span>Erica Hughes</span>
                                            <p class="f-12 light-font">Lorem Ipsum is simply dummy...</p>
                                        </div>
                                        <p class="f-12">58 mins ago</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="media">
                                        <img class="img-fluid rounded-circle me-3" src="assets/images/user/2.jpg" alt="">
                                        <div class="media-body">
                                            <span>Kori Thomas</span>
                                            <p class="f-12 light-font">Lorem Ipsum is simply dummy...</p>
                                        </div>
                                        <p class="f-12">1 hr ago</p>
                                    </div>
                                </li>
                                <li class="text-center"> <a class="f-w-700" href="javascript:void(0)">See All </a></li>
                            </ul>
                        </li>
                        <li class="onhover-dropdown p-0">
                            <button class="btn btn-primary-light" type="button"><i data-feather="log-out"></i>Log out</button>
                        </li>
                    </ul>
                </div>
                <div class="d-lg-none mobile-toggle pull-right w-auto"><i data-feather="more-horizontal"></i></div>
            </div>
        </div>
        <!-- Page Header Ends -->
        <!-- Page Body Start-->
        <div class="page-body-wrapper sidebar-icon">
            <!-- Page Sidebar Start-->
            <header class="main-nav">
                <div class="sidebar-user text-center">
                    <a class="setting-primary" href="javascript:void(0)"><i data-feather="settings"></i></a><img class="img-90 rounded-circle" src="assets/images/dashboard/1.png" alt="" />
                    <div class="badge-bottom"><span class="badge badge-primary">New</span></div>
                    <a href="user-profile.html">
                        <h6 class="mt-3 f-14 f-w-600">Emay Walter</h6>
                    </a>
                    <p class="mb-0 font-roboto">Human Resources Department</p>
                    <ul>
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
                    </ul>
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
                                    <a class="nav-link menu-title active" href="javascript:void(0)"><i data-feather="home"></i><span>Dashboard</span></a>
                                    <ul class="nav-submenu menu-content" style="display: block;">
                                        <li><a href="dashboard.html" class="active">Default</a></li>
                                        <li><a href="dashboard/dashboard-02.html" class="">Ecommerce</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a class="nav-link menu-title " href="javascript:void(0)"><i data-feather="airplay"></i><span>Widgets</span></a>
                                    <ul class="nav-submenu menu-content" style="display: none;">
                                        <li><a href="widgets/general-widget.html" class="">General</a></li>
                                        <li><a href="widgets/chart-widget.html" class="">Chart</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a class="nav-link menu-title " href="javascript:void(0)"><i data-feather="layout"></i><span>Page layout</span></a>
                                    <ul class="nav-submenu menu-content" style="display: none;">
                                        <li><a href="page-layout/boxed-layout.html" class="">Boxed</a></li>
                                        <li><a href="page-layout/layout-rtl.html" class="">RTL</a></li>
                                        <li><a href="page-layout/layout-dark.html" class="">Dark</a></li>
                                        <li><a href="page-layout/footer-light.html" class="">Footer Light</a></li>
                                        <li><a href="page-layout/footer-dark.html" class="">Footer Dark</a></li>
                                        <li><a href="page-layout/footer-fixed.html" class="">Footer Fixed</a></li>
                                    </ul>
                                </li>
                                <li class="sidebar-main-title">
                                    <div>
                                        <h6>Components</h6>
                                    </div>
                                </li>
                                <li class="dropdown">
                                    <a class="nav-link menu-title " href="javascript:void(0)"><i data-feather="box"></i><span>Ui Kits</span></a>
                                    <ul class="nav-submenu menu-content" style="display: none;">
                                        <li><a href="ui-kits/state-color.html" class="">State color</a></li>
                                        <li><a href="ui-kits/typography.html" class="">Typography</a></li>
                                        <li><a href="ui-kits/avatars.html" class="">Avatars</a></li>
                                        <li><a href="ui-kits/helper-classes.html" class="">helper classes</a></li>
                                        <li><a href="ui-kits/grid.html" class="">Grid</a></li>
                                        <li><a href="ui-kits/tag-pills.html" class="">Tag & pills</a></li>
                                        <li><a href="ui-kits/progress-bar.html" class="">Progress</a></li>
                                        <li><a href="ui-kits/modal.html" class="">Modal</a></li>
                                        <li><a href="ui-kits/alert.html" class="">Alert</a></li>
                                        <li><a href="ui-kits/popover.html" class="">Popover</a></li>
                                        <li><a href="ui-kits/tooltip.html" class="">Tooltip</a></li>
                                        <li><a href="ui-kits/loader.html" class="">Spinners</a></li>
                                        <li><a href="ui-kits/dropdown.html" class="">Dropdown</a></li>
                                        <li><a href="ui-kits/according.html" class="">Accordion</a></li>
                                        <li>
                                            <a class="submenu-title  " href="javascript:void(0)">
                                                Tabs<span class="sub-arrow"><i class="fa fa-chevron-right"></i></span>
                                            </a>
                                            <ul class="nav-sub-childmenu submenu-content" style="display: none;">
                                                <li><a href="ui-kits/tab-bootstrap.html" class="">Bootstrap Tabs</a></li>
                                                <li><a href="ui-kits/tab-material.html" class="">Line Tabs</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="ui-kits/navs.html" class="">Navs</a></li>
                                        <li><a href="ui-kits/box-shadow.html" class="">Shadow</a></li>
                                        <li><a href="ui-kits/list.html" class="">Lists</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a class="nav-link menu-title " href="javascript:void(0)"><i data-feather="folder-plus"></i><span>Bonus Ui</span></a>
                                    <ul class="nav-submenu menu-content" style="display: none;">
                                        <li><a href="bonus-ui/scrollable.html" class="">Scrollable</a></li>
                                        <li><a href="bonus-ui/tree.html" class="">Tree view</a></li>
                                        <li><a href="bonus-ui/bootstrap-notify.html" class="">Bootstrap Notify</a></li>
                                        <li><a href="bonus-ui/rating.html" class="">Rating</a></li>
                                        <li><a href="bonus-ui/dropzone.html" class="">dropzone</a></li>
                                        <li><a href="bonus-ui/tour.html" class="">Tour</a></li>
                                        <li><a href="bonus-ui/sweet-alert2.html" class="">SweetAlert2</a></li>
                                        <li><a href="bonus-ui/modal-animated.html" class="">Animated Modal</a></li>
                                        <li><a href="bonus-ui/owl-carousel.html" class="">Owl Carousel</a></li>
                                        <li><a href="bonus-ui/ribbons.html" class="">Ribbons</a></li>
                                        <li><a href="bonus-ui/pagination.html" class="">Pagination</a></li>
                                        <li><a href="bonus-ui/steps.html" class="">Steps</a></li>
                                        <li><a href="bonus-ui/breadcrumb.html" class="">Breadcrumb</a></li>
                                        <li><a href="bonus-ui/range-slider.html" class="">Range Slider</a></li>
                                        <li><a href="bonus-ui/image-cropper.html" class="">Image cropper</a></li>
                                        <li><a href="bonus-ui/sticky.html" class="">Sticky </a></li>
                                        <li><a href="bonus-ui/basic-card.html" class="">Basic Card</a></li>
                                        <li><a href="bonus-ui/creative-card.html" class="">Creative Card</a></li>
                                        <li><a href="bonus-ui/tabbed-card.html" class="">Tabbed Card</a></li>
                                        <li><a href="bonus-ui/dragable-card.html" class="">Draggable Card</a></li>
                                        <li>
                                            <a class="submenu-title " href="javascript:void(0)">
                                                Timeline<span class="sub-arrow"><i class="fa fa-chevron-right"></i></span>
                                            </a>
                                            <ul class="nav-sub-childmenu submenu-content" style="display: none;">
                                                <li><a href="bonus-ui/timeline-v-1.html" class="">Timeline 1</a></li>
                                                <li><a href="bonus-ui/timeline-v-2.html" class="">Timeline 2</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a class="nav-link menu-title " href="javascript:void(0)"><i data-feather="edit-3"></i><span>Builders</span></a>
                                    <ul class="nav-submenu menu-content" style="display: none;">
                                        <li><a href="builders/form-builder-1.html" class="">Form Builder 1</a></li>
                                        <li><a href="builders/form-builder-2.html" class="">Form Builder 2</a></li>
                                        <li><a href="builders/pagebuild.html" class="">Page Builder</a></li>
                                        <li><a href="builders/button-builder.html" class="">Button Builder</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a class="nav-link menu-title " href="javascript:void(0)"><i data-feather="cloud-drizzle"></i><span>Animation</span></a>
                                    <ul class="nav-submenu menu-content" style="display: none;">
                                        <li><a href="animation/animate.html" class="">Animate</a></li>
                                        <li><a href="animation/scroll-reval.html" class="">Scroll Reveal</a></li>
                                        <li><a href="animation/aos.html" class="">AOS animation</a></li>
                                        <li><a href="animation/tilt.html" class="">Tilt Animation</a></li>
                                        <li><a href="animation/wow.html" class="">Wow Animation</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a class="nav-link menu-title " href="javascript:void(0)"><i data-feather="command"></i><span>Icons</span></a>
                                    <ul class="nav-submenu menu-content" style="display: none;">
                                        <li><a href="icons/flag-icon.html" class="">Flag icon</a></li>
                                        <li><a href="icons/font-awesome.html" class="">Fontawesome Icon</a></li>
                                        <li><a href="icons/ico-icon.html" class="">Ico Icon</a></li>
                                        <li><a href="icons/themify-icon.html" class="">Thimify Icon</a></li>
                                        <li><a href="icons/feather-icon.html" class="">Feather icon</a></li>
                                        <li><a href="icons/whether-icon.html" class="">Whether Icon </a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a class="nav-link menu-title " href="javascript:void(0)"><i data-feather="cloud"></i><span>Buttons</span></a>
                                    <ul class="nav-submenu menu-content" style="display: none;">
                                        <li><a href="buttons/buttons.html" class="">Default Style</a></li>
                                        <li><a href="buttons/buttons-flat.html" class="">Flat Style</a></li>
                                        <li><a href="buttons/buttons-edge.html" class="">Edge Style</a></li>
                                        <li><a href="buttons/raised-button.html" class="">Raised Style</a></li>
                                        <li><a href="buttons/button-group.html" class="">Button Group</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a class="nav-link menu-title " href="javascript:void(0)"><i data-feather="bar-chart"></i><span>Charts</span></a>
                                    <ul class="nav-submenu menu-content" style="display: none;">
                                        <li><a href="charts/chart-apex.html" class="">Apex Chart</a></li>
                                        <li><a href="charts/chart-google.html" class="">Google Chart</a></li>
                                        <li><a href="charts/chart-sparkline.html" class="">Sparkline chart</a></li>
                                        <li><a href="charts/chart-flot.html" class="">Flot Chart</a></li>
                                        <li><a href="charts/chart-knob.html" class="">Knob Chart</a></li>
                                        <li><a href="charts/chart-morris.html" class="">Morris Chart</a></li>
                                        <li><a href="charts/chartjs.html" class="">Chatjs Chart</a></li>
                                        <li><a href="charts/chartist.html" class="">Chartist Chart</a></li>
                                        <li><a href="charts/chart-peity.html" class="">Peity Chart</a></li>
                                    </ul>
                                </li>
                                <li class="sidebar-main-title">
                                    <div>
                                        <h6>Forms</h6>
                                    </div>
                                </li>
                                <li class="dropdown">
                                    <a class="nav-link menu-title " href="javascript:void(0)"><i data-feather="sliders"></i><span>Form Controls </span></a>
                                    <ul class="nav-submenu menu-content" style="display: none;">
                                        <li><a href="form-controls/form-validation.html" class="">Form Validation</a></li>
                                        <li><a href="form-controls/base-input.html" class="">Base Inputs</a></li>
                                        <li><a href="form-controls/radio-checkbox-control.html" class="">Checkbox & Radio</a></li>
                                        <li><a href="form-controls/input-group.html" class="">Input Groups</a></li>
                                        <li><a href="form-controls/megaoptions.html" class="">Mega Options </a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a class="nav-link menu-title " href="javascript:void(0)"><i data-feather="package"></i><span>Form Widgets</span></a>
                                    <ul class="nav-submenu menu-content" style="display: none;">
                                        <li><a href="form-widgets/datepicker.html" class="">Datepicker</a></li>
                                        <li><a href="form-widgets/time-picker.html" class="">Timepicker</a></li>
                                        <li><a href="form-widgets/datetimepicker.html" class="">Datetimepicker</a></li>
                                        <li><a href="form-widgets/daterangepicker.html" class="">Daterangepicker</a></li>
                                        <li><a href="form-widgets/touchspin.html" class="">Touchspin</a></li>
                                        <li><a href="form-widgets/select2.html" class="">Select2</a></li>
                                        <li><a href="form-widgets/switch.html" class="">Switch</a></li>
                                        <li><a href="form-widgets/typeahead.html" class="">Typeahead</a></li>
                                        <li><a href="form-widgets/clipboard.html" class="">Clipboard </a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a class="nav-link menu-title " href="javascript:void(0)"><i data-feather="layout"></i><span>Form layout</span></a>
                                    <ul class="nav-submenu menu-content" style="display: none;">
                                        <li><a href="form-layout/default-form.html" class="">Default Forms</a></li>
                                        <li><a href="form-layout/form-wizard.html" class="">Form Wizard 1</a></li>
                                        <li><a href="form-layout/form-wizard-two.html" class="">Form Wizard 2</a></li>
                                        <li><a href="form-layout/form-wizard-three.html" class="">Form Wizard 3</a></li>
                                    </ul>
                                </li>
                                <li class="sidebar-main-title">
                                    <div>
                                        <h6>Table</h6>
                                    </div>
                                </li>
                                <li class="dropdown">
                                    <a class="nav-link menu-title " href="javascript:void(0)"><i data-feather="server"></i><span>Bootstrap Tables </span></a>
                                    <ul class="nav-submenu menu-content" style="display: none;">
                                        <li><a href="bootstrap-tables/bootstrap-basic-table.html" class="">Basic Tables</a></li>
                                        <li><a href="bootstrap-tables/bootstrap-sizing-table.html" class="">Sizing Tables</a></li>
                                        <li><a href="bootstrap-tables/bootstrap-border-table.html" class="">Border Tables</a></li>
                                        <li><a href="bootstrap-tables/bootstrap-styling-table.html" class="">Styling Tables</a></li>
                                        <li><a href="bootstrap-tables/table-components.html" class="">Table components</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a class="nav-link menu-title " href="javascript:void(0)"><i data-feather="database"></i><span>Data Tables </span></a>
                                    <ul class="nav-submenu menu-content" style="display: none;">
                                        <li><a href="data-tables/datatable-basic-init.html" class="">Basic Init</a></li>
                                        <li><a href="data-tables/datatable-advance.html" class="">Advance Init</a></li>
                                        <li><a href="data-tables/datatable-styling.html" class="">Styling</a></li>
                                        <li><a href="data-tables/datatable-AJAX.html" class="">AJAX</a></li>
                                        <li><a href="data-tables/datatable-server-side.html" class="">Server Side</a></li>
                                        <li><a href="data-tables/datatable-plugin.html" class="">Plug-in</a></li>
                                        <li><a href="data-tables/datatable-API.html" class="">API</a></li>
                                        <li><a href="data-tables/datatable-data-source.html" class="">Data Sources</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a class="nav-link menu-title " href="javascript:void(0)"><i data-feather="hard-drive"></i><span>Ex. Data Tables </span></a>
                                    <ul class="nav-submenu menu-content" style="display: none;">
                                        <li><a href="ex-data-tables/datatable-ext-autofill.html" class="">Auto Fill</a></li>
                                        <li><a href="ex-data-tables/datatable-ext-basic-button.html" class="">Basic Button</a></li>
                                        <li><a href="ex-data-tables/datatable-ext-col-reorder.html" class="">Column Reorder</a></li>
                                        <li><a href="ex-data-tables/datatable-ext-fixed-header.html" class="">Fixed Header</a></li>
                                        <li><a href="ex-data-tables/datatable-ext-key-table.html" class="">Key Table</a></li>
                                        <li><a href="ex-data-tables/datatable-ext-responsive.html" class="">Responsive</a></li>
                                        <li><a href="ex-data-tables/datatable-ext-row-reorder.html" class="">Row Reorder</a></li>
                                        <li><a href="ex-data-tables/datatable-ext-scroller.html" class="">Scroller </a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a class="nav-link menu-title link-nav " href="jsgrid-table.html"><i data-feather="file-text"></i><span>Js Grid Table</span></a>
                                </li>
                                <li class="sidebar-main-title">
                                    <div>
                                        <h6>Applications</h6>
                                    </div>
                                </li>
                                <li class="dropdown">
                                    <a class="nav-link menu-title " href="javascript:void(0)"><i data-feather="box"></i><span>Project </span></a>
                                    <ul class="nav-submenu menu-content" style="display: none;">
                                        <li><a href="project/projects.html" class="">Project List</a></li>
                                        <li><a href="project/projectcreate.html" class="">Create new </a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a class="nav-link menu-title link-nav " href="file-manager.html"><i data-feather="git-pull-request"></i><span>File manager</span></a>
                                </li>
                                <li class="dropdown">
                                    <a class="nav-link menu-title link-nav " href="kanban.html"><i data-feather="monitor"></i><span>Kanban Board</span></a>
                                </li>
                                <li class="dropdown">
                                    <a class="nav-link menu-title " href="javascript:void(0)"><i data-feather="shopping-bag"></i><span>Ecommerce</span></a>
                                    <ul class="nav-submenu menu-content" style="display: none;">
                                        <li><a href="ecommerce/product.html" class="">Product</a></li>
                                        <li><a href="ecommerce/product-page.html" class="">Product page</a></li>
                                        <li><a href="ecommerce/list-products.html" class="">Product list</a></li>
                                        <li><a href="ecommerce/payment-details.html" class="">Payment Details</a></li>
                                        <li><a href="ecommerce/order-history.html" class="">Order History</a></li>
                                        <li><a href="ecommerce/invoice-template.html" class="">Invoice</a></li>
                                        <li><a href="ecommerce/cart.html" class="">Cart</a></li>
                                        <li><a href="ecommerce/list-wish.html" class="">Wishlist</a></li>
                                        <li><a href="ecommerce/checkout.html" class="">Checkout</a></li>
                                        <li><a href="ecommerce/pricing.html" class="">Pricing</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a class="nav-link menu-title " href="javascript:void(0)"><i data-feather="mail"></i><span>Email</span></a>
                                    <ul class="nav-submenu menu-content" style="display: none;">
                                        <li><a href="email/email_inbox.html" class="">Mail Inbox</a></li>
                                        <li><a href="email/email_read.html" class="">Read mail</a></li>
                                        <li><a href="email/email_compose.html" class="">Compose</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a class="nav-link menu-title " href="javascript:void(0)"><i data-feather="message-circle"></i><span>Chat</span></a>
                                    <ul class="nav-submenu menu-content" style="display: none;">
                                        <li><a href="chat/chat.html" class="">Chat App</a></li>
                                        <li><a href="chat/chat-video.html" class="">Video chat</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a class="nav-link menu-title " href="javascript:void(0)"><i data-feather="users"></i><span>Users</span></a>
                                    <ul class="nav-submenu menu-content" style="display: none;">
                                        <li><a href="users/user-profile.html" class="">Users Profile</a></li>
                                        <li><a href="users/edit-profile.html" class="">Users Edit</a></li>
                                        <li><a href="users/user-cards.html" class="">Users Cards</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a class="nav-link menu-title link-nav " href="bookmark.html"><i data-feather="heart"></i><span>Bookmarks</span></a>
                                </li>
                                <li class="dropdown">
                                    <a class="nav-link menu-title link-nav " href="contacts.html"><i data-feather="list"></i><span>Contacts</span></a>
                                </li>
                                <li class="dropdown">
                                    <a class="nav-link menu-title link-nav " href="task.html"><i data-feather="check-square"></i><span>Tasks</span></a>
                                </li>
                                <li class="dropdown">
                                    <a class="nav-link menu-title link-nav " href="calendar-basic.html"><i data-feather="calendar"></i><span>Calender </span></a>
                                </li>
                                <li class="dropdown">
                                    <a class="nav-link menu-title link-nav " href="social-app.html"><i data-feather="zap"></i><span>Social App</span></a>
                                </li>
                                <li class="dropdown">
                                    <a class="nav-link menu-title link-nav " href="to-do.html"><i data-feather="clock"></i><span>To-Do</span></a>
                                </li>
                                <li class="dropdown">
                                    <a class="nav-link menu-title link-nav " href="search.html"><i data-feather="search"></i><span>Search Result</span></a>
                                </li>
                                <li class="sidebar-main-title">
                                    <div>
                                        <h6>Pages</h6>
                                    </div>
                                </li>
                                <li>

                                </li>
                                <li>
                                    <a class="nav-link menu-title link-nav " href="sample-page.html"><i data-feather="file"></i><span>Sample page</span></a>
                                </li>
                                <li class="dropdown">
                                    <a class="nav-link menu-title link-nav " href="internationalization.html"><i data-feather="aperture"></i><span>Internationalization</span></a>
                                </li>
                                <li class="mega-menu">
                                    <a class="nav-link menu-title " href="javascript:void(0)"><i data-feather="layers"></i><span>Others</span></a>
                                    <div class="mega-menu-container menu-content" style="display: none;">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col mega-box">
                                                    <div class="link-section">
                                                        <div class="submenu-title">
                                                            <h5>Error Page</h5>
                                                        </div>
                                                        <div class="submenu-content opensubmegamenu">
                                                            <ul>
                                                                <li><a href="error-page1.html" class="" target="_blank">Error page 1</a></li>
                                                                <li><a href="error-page2.html" class="" target="_blank">Error page 2</a></li>
                                                                <li><a href="error-page3.html" class="" target="_blank">Error page 3</a></li>
                                                                <li><a href="error-page4.html" class="" target="_blank">Error page 4 </a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col mega-box">
                                                    <div class="link-section">
                                                        <div class="submenu-title">
                                                            <h5>Authentication</h5>
                                                        </div>
                                                        <div class="submenu-content opensubmegamenu">
                                                            <ul>
                                                                <li><a href="login.html" class="" target="_blank">Login Simple</a></li>
                                                                <li><a href="login_one.html" class="" target="_blank">Login with bg image</a></li>
                                                                <li><a href="login_two.html" class="" target="_blank">Login with image two </a></li>
                                                                <li><a href="login-bs-validation.html" class="" target="_blank">Login With validation</a></li>
                                                                <li><a href="login-bs-tt-validation.html" class="" target="_blank">Login with tooltip</a></li>
                                                                <li><a href="login-sa-validation.html" class="" target="_blank">Login with sweetalert</a></li>
                                                                <li><a href="sign-up.html" class="" target="_blank">Register Simple</a></li>
                                                                <li><a href="sign-up-one.html" class="" target="_blank">Register with Bg Image </a></li>
                                                                <li><a href="sign-up-two.html" class="" target="_blank">Register with Bg video </a></li>
                                                                <li><a href="unlock.html" class="">Unlock User</a></li>
                                                                <li><a href="forget-password.html" class="">Forget Password</a></li>
                                                                <li><a href="creat-password.html" class="">Creat Password</a></li>
                                                                <li><a href="maintenance.html" class="">Maintenance</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col mega-box">
                                                    <div class="link-section">
                                                        <div class="submenu-title">
                                                            <h5>Coming Soon</h5>
                                                        </div>
                                                        <div class="submenu-content opensubmegamenu">
                                                            <ul>
                                                                <li><a href="comingsoon.html" class="">Coming Simple</a></li>
                                                                <li><a href="comingsoon-bg-video.html" class="">Coming with Bg video</a></li>
                                                                <li><a href="comingsoon-bg-img.html" class="">Coming with Bg Image</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col mega-box">
                                                    <div class="link-section">
                                                        <div class="submenu-title">
                                                            <h5>Email templates</h5>
                                                        </div>
                                                        <div class="submenu-content opensubmegamenu">
                                                            <ul>
                                                                <li><a href="basic-template.html" class="">Basic Email</a></li>
                                                                <li><a href="email-header.html" class="">Basic With Header</a></li>
                                                                <li><a href="template-email.html" class="">Ecomerce Template</a></li>
                                                                <li><a href="template-email-2.html" class="">Email Template 2</a></li>
                                                                <li><a href="ecommerce-templates.html" class="">Ecommerce Email</a></li>
                                                                <li><a href="email-order-success.html" class="">Order Success </a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="sidebar-main-title">
                                    <div>
                                        <h6>Miscellaneous</h6>
                                    </div>
                                </li>
                                <li class="dropdown">
                                    <a class="nav-link menu-title " href="javascript:void(0)"><i data-feather="image"></i><span>Gallery</span></a>
                                    <ul class="nav-submenu menu-content" style="display: none;">
                                        <li><a href="gallery.html" class="">Gallery Grid</a></li>
                                        <li><a href="gallery/gallery-with-description.html" class="">Gallery Grid Desc</a></li>
                                        <li><a href="gallery/gallery-masonry.html" class="">Masonry Gallery</a></li>
                                        <li><a href="gallery/masonry-gallery-with-disc.html" class="">Masonry with Desc</a></li>
                                        <li><a href="gallery/gallery-hover.html" class="">Hover Effects</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a class="nav-link menu-title " href="javascript:void(0)"><i data-feather="edit"></i><span>Blog</span></a>
                                    <ul class="nav-submenu menu-content" style="display: none;">
                                        <li><a href="blog.html" class="">Blog Details</a></li>
                                        <li><a href="blog/blog-single.html" class="">Blog Single</a></li>
                                        <li><a href="blog/add-post.html" class="">Add Post</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a class="nav-link menu-title link-nav " href="faq.html"><i data-feather="help-circle"></i><span>FAQ</span></a>
                                </li>
                                <li class="dropdown">
                                    <a class="nav-link menu-title " href="javascript:void(0)"><i data-feather="user-check"></i><span>Job Search</span></a>
                                    <ul class="nav-submenu menu-content" style="display: none;">
                                        <li><a href="job-search/job-cards-view.html" class="">Cards view</a></li>
                                        <li><a href="job-search/job-list-view.html" class="">List View</a></li>
                                        <li><a href="job-search/job-details.html" class="">Job Details</a></li>
                                        <li><a href="job-search/job-apply.html" class="">Apply</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a class="nav-link menu-title " href="javascript:void(0)"><i data-feather="layers"></i><span>Learning</span></a>
                                    <ul class="nav-submenu menu-content" style="display: none;">
                                        <li><a href="learning/learning-list-view.html" class="">Learning List</a></li>
                                        <li><a href="learning/learning-detailed.html" class="">Detailed Course</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a class="nav-link menu-title " href="javascript:void(0)"><i data-feather="map"></i><span>Maps</span></a>
                                    <ul class="nav-submenu menu-content" style="display: none;">
                                        <li><a href="maps/map-js.html" class="">Maps JS</a></li>
                                        <li><a href="maps/vector-map.html" class="">Vector Maps</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a class="nav-link menu-title " href="javascript:void(0)"><i data-feather="git-pull-request"></i><span>Editors</span></a>
                                    <ul class="nav-submenu menu-content" style="display: none;">
                                        <li><a href="editors/summernote.html" class="">Summer Note</a></li>
                                        <li><a href="editors/ckeditor.html" class="">CK editor</a></li>
                                        <li><a href="editors/simple-MDE.html" class="">MDE editor</a></li>
                                        <li><a href="editors/ace-code-editor.html" class="">ACE code editor</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a class="nav-link menu-title " href="javascript:void(0)"><i data-feather="database"></i><span>Knowledgebase</span></a>
                                    <ul class="nav-submenu menu-content" style="display: none;">
                                        <li><a href="knowledgebase.html" class="">Knowledgebase</a></li>
                                        <li><a href="knowledgebase/knowledge-category.html" class="">Knowledge category</a></li>
                                        <li><a href="knowledgebase/knowledge-detail.html" class="">Knowledge detail</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a class="nav-link menu-title link-nav " href="support-ticket.html"><i data-feather="headphones"></i><span>Support Ticket</span></a>
                                </li>
                            </ul>
                        </div>
                        <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
                    </div>
                </nav>
            </header>
            <!-- Page Sidebar Ends-->
            <div class="page-body">
                <!-- Container-fluid starts-->
                <!-- Container-fluid starts-->
                <div class="container-fluid dashboard-default-sec">
                    <div class="row">
                        <div class="col-xl-5 box-col-12 des-xl-100">
                            <div class="row">
                                <div class="col-xl-12 col-md-6 box-col-6 des-xl-50">
                                    <div class="card profile-greeting">
                                        <div class="card-header">
                                            <div class="header-top">
                                                <div class="setting-list bg-primary position-unset">
                                                    <ul class="list-unstyled setting-option">
                                                        <li>
                                                            <div class="setting-white"><i class="icon-settings"></i></div>
                                                        </li>
                                                        <li><i class="view-html fa fa-code font-white"></i></li>
                                                        <li><i class="icofont icofont-maximize full-card font-white"></i></li>
                                                        <li><i class="icofont icofont-minus minimize-card font-white"></i></li>
                                                        <li><i class="icofont icofont-refresh reload-card font-white"></i></li>
                                                        <li><i class="icofont icofont-error close-card font-white"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body text-center p-t-0">
                                            <h3 class="font-light">Wellcome Back, John!!</h3>
                                            <p>Welcome to the viho Family! we are glad that you are visite this dashboard. we will be happy to help you grow your business.</p>
                                            <button class="btn btn-light">Update</button>
                                        </div>
                                        <div class="confetti">
                                            <div class="confetti-piece"></div>
                                            <div class="confetti-piece"></div>
                                            <div class="confetti-piece"></div>
                                            <div class="confetti-piece"></div>
                                            <div class="confetti-piece"></div>
                                            <div class="confetti-piece"></div>
                                            <div class="confetti-piece"></div>
                                            <div class="confetti-piece"></div>
                                            <div class="confetti-piece"></div>
                                            <div class="confetti-piece"></div>
                                            <div class="confetti-piece"></div>
                                            <div class="confetti-piece"></div>
                                            <div class="confetti-piece"></div>
                                            <div class="code-box-copy">
                                                <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#profile-greeting" title="Copy"><i class="icofont icofont-copy-alt"></i></button>
                                                <pre><code class="language-html" id="profile-greeting">                                     &lt;div class="card profile-greeting"&gt;
&lt;div class="card-header"&gt;
&lt;div class="header-top"&gt;
  &lt;div class="setting-list bg-primary"&gt;
    &lt;ul class="list-unstyled setting-option"&gt;
      &lt;li&gt;&lt;div class="setting-white"&gt;&lt;i class="icon-settings"&gt;&lt;/i&gt;&lt;/div&gt;&lt;/li&gt;
      &lt;li&gt;&lt;i class="view-html fa fa-code font-white"&gt;&lt;/i&gt;&lt;/li&gt;
      &lt;li&gt;&lt;i class="icofont icofont-maximize full-card font-white"&gt;&lt;/i&gt;&lt;/li&gt;
      &lt;li&gt;&lt;i class="icofont icofont-minus minimize-card font-white"&gt;&lt;/i&gt;&lt;/li&gt;
      &lt;li&gt;&lt;i class="icofont icofont-refresh reload-card font-white"&gt;&lt;/i&gt;&lt;/li&gt;
      &lt;li&gt;&lt;i class="icofont icofont-error close-card font-white"&gt; &lt;/i&gt;&lt;/li&gt;
    &lt;/ul&gt;
  &lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="card-body text-center"&gt;
&lt;h3 class="font-light"&gt;Wellcome Back, John!!&lt;/h3&gt;
&lt;p&gt;Lorem ipsum is simply dummy text of the printing and typesetting industry.Lorem ipsum has been&lt;/p&gt;
&lt;button class="btn btn-light"&gt;Update &lt;/button&gt;
&lt;/div&gt;
&lt;/div&gt;</code></pre>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-md-3 col-sm-6 box-col-3 des-xl-25 rate-sec">
                                    <div class="card income-card card-primary">
                                        <div class="card-body text-center">
                                            <div class="round-box">
                                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewbox="0 0 448.057 448.057" style="enable-background:new 0 0 448.057 448.057;" xml:space="preserve">
                                                    <g>
                                                        <g>
                                                            <path d="M404.562,7.468c-0.021-0.017-0.041-0.034-0.062-0.051c-13.577-11.314-33.755-9.479-45.069,4.099                                            c-0.017,0.02-0.034,0.041-0.051,0.062l-135.36,162.56L88.66,11.577C77.35-2.031,57.149-3.894,43.54,7.417                                            c-13.608,11.311-15.471,31.512-4.16,45.12l129.6,155.52h-40.96c-17.673,0-32,14.327-32,32s14.327,32,32,32h64v144                                            c0,17.673,14.327,32,32,32c17.673,0,32-14.327,32-32v-180.48l152.64-183.04C419.974,38.96,418.139,18.782,404.562,7.468z"></path>
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path d="M320.02,208.057h-16c-17.673,0-32,14.327-32,32s14.327,32,32,32h16c17.673,0,32-14.327,32-32                                            S337.694,208.057,320.02,208.057z"></path>
                                                        </g>
                                                    </g>
                                                </svg>
                                            </div>
                                            <h5>8,50,49</h5>
                                            <p>Our Annual Income</p><a class="btn-arrow arrow-primary" href="javascript:void(0)"><i class="toprightarrow-primary fa fa-arrow-up me-2"></i>95.54% </a>
                                            <div class="parrten">
                                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewbox="0 0 448.057 448.057" style="enable-background:new 0 0 448.057 448.057;" xml:space="preserve">
                                                    <g>
                                                        <g>
                                                            <path d="M404.562,7.468c-0.021-0.017-0.041-0.034-0.062-0.051c-13.577-11.314-33.755-9.479-45.069,4.099                                            c-0.017,0.02-0.034,0.041-0.051,0.062l-135.36,162.56L88.66,11.577C77.35-2.031,57.149-3.894,43.54,7.417                                            c-13.608,11.311-15.471,31.512-4.16,45.12l129.6,155.52h-40.96c-17.673,0-32,14.327-32,32s14.327,32,32,32h64v144                                            c0,17.673,14.327,32,32,32c17.673,0,32-14.327,32-32v-180.48l152.64-183.04C419.974,38.96,418.139,18.782,404.562,7.468z"></path>
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path d="M320.02,208.057h-16c-17.673,0-32,14.327-32,32s14.327,32,32,32h16c17.673,0,32-14.327,32-32                                            S337.694,208.057,320.02,208.057z"> </path>
                                                        </g>
                                                    </g>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-md-3 col-sm-6 box-col-3 des-xl-25 rate-sec">
                                    <div class="card income-card card-secondary">
                                        <div class="card-body text-center">
                                            <div class="round-box">
                                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewbox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                                    <g>
                                                        <g>
                                                            <path d="M256,0C114.615,0,0,114.615,0,256s114.615,256,256,256s256-114.615,256-256S397.385,0,256,0z M96,100.16                                            c50.315,35.939,80.124,94.008,80,155.84c0.151,61.839-29.664,119.919-80,155.84C11.45,325.148,11.45,186.851,96,100.16z M256,480                                            c-49.143,0.007-96.907-16.252-135.84-46.24C175.636,391.51,208.14,325.732,208,256c0.077-69.709-32.489-135.434-88-177.6                                            c80.1-61.905,191.9-61.905,272,0c-98.174,75.276-116.737,215.885-41.461,314.059c11.944,15.577,25.884,29.517,41.461,41.461                                            C353.003,463.884,305.179,480.088,256,480z M416,412v-0.16c-86.068-61.18-106.244-180.548-45.064-266.616                                            c12.395-17.437,27.627-32.669,45.064-45.064C500.654,186.871,500.654,325.289,416,412z"></path>
                                                        </g>
                                                    </g>
                                                </svg>
                                            </div>
                                            <h5>2,03,59</h5>
                                            <p>our Annual losses</p><a class="btn-arrow arrow-secondary" href="javascript:void(0)"><i class="toprightarrow-secondary fa fa-arrow-up me-2"></i>90.54% </a>
                                            <div class="parrten">
                                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewbox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                                    <g>
                                                        <g>
                                                            <path d="M256,0C114.615,0,0,114.615,0,256s114.615,256,256,256s256-114.615,256-256S397.385,0,256,0z M96,100.16                                            c50.315,35.939,80.124,94.008,80,155.84c0.151,61.839-29.664,119.919-80,155.84C11.45,325.148,11.45,186.851,96,100.16z M256,480                                            c-49.143,0.007-96.907-16.252-135.84-46.24C175.636,391.51,208.14,325.732,208,256c0.077-69.709-32.489-135.434-88-177.6                                            c80.1-61.905,191.9-61.905,272,0c-98.174,75.276-116.737,215.885-41.461,314.059c11.944,15.577,25.884,29.517,41.461,41.461                                            C353.003,463.884,305.179,480.088,256,480z M416,412v-0.16c-86.068-61.18-106.244-180.548-45.064-266.616                                            c12.395-17.437,27.627-32.669,45.064-45.064C500.654,186.871,500.654,325.289,416,412z"></path>
                                                        </g>
                                                    </g>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-7 box-col-12 des-xl-100 dashboard-sec">
                            <div class="card income-card">
                                <div class="card-header">
                                    <div class="header-top d-sm-flex align-items-center">
                                        <h5>Sales overview</h5>
                                        <div class="center-content">
                                            <p class="d-sm-flex align-items-center"><span class="font-primary m-r-10 f-w-700">$859.25k</span><i class="toprightarrow-primary fa fa-arrow-up m-r-10"></i>86% More than last year</p>
                                        </div>
                                        <div class="setting-list">
                                            <ul class="list-unstyled setting-option">
                                                <li>
                                                    <div class="setting-primary"><i class="icon-settings"></i></div>
                                                </li>
                                                <li><i class="view-html fa fa-code font-primary"></i></li>
                                                <li><i class="icofont icofont-maximize full-card font-primary"></i></li>
                                                <li><i class="icofont icofont-minus minimize-card font-primary"></i></li>
                                                <li><i class="icofont icofont-refresh reload-card font-primary"></i></li>
                                                <li><i class="icofont icofont-error close-card font-primary"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body p-0">
                                    <div id="chart-timeline-dashbord"></div>
                                    <div class="code-box-copy">
                                        <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#yearly-overview" title="Copy"><i class="icofont icofont-copy-alt"></i></button>
                                        <pre><code class="language-html" id="yearly-overview">&lt;div class="card income-card"&gt;
&lt;div class="card-header"&gt;
&lt;div class="header-top d-sm-flex align-items-center"&gt;
  &lt;h5&gt; yearly overview  &lt;/h5&gt;
    &lt;div class="center-content" &gt;
      &lt;p&gt;
        &lt;span class="font-primary fontbold-600" &gt; $859.25k &lt;/span&gt;
        &lt;i class="toprightarrow-primary fa fa-arrow-up m-l-10 m-r-10" &gt; &lt;/i&gt;
        86% More than last year
      &lt;/p&gt;
  &lt;/div&gt;
  &lt;div class="setting-list"&gt;
    &lt;ul class="list-unstyled setting-option"&gt;
      &lt;li&gt;&lt;div class="setting-primary"&gt;&lt;i class="icon-settings"&gt;&lt;/i&gt;&lt;/div&gt;&lt;/li&gt;
      &lt;li&gt;&lt;i class="view-html fa fa-code font-primary"&gt;&lt;/i&gt;&lt;/li&gt;
      &lt;li&gt;&lt;i class="icofont icofont-maximize full-card font-primary"&gt;&lt;/i&gt;&lt;/li&gt;
      &lt;li&gt;&lt;i class="icofont icofont-minus minimize-card font-primary"&gt;&lt;/i&gt;&lt;/li&gt;
      &lt;li&gt;&lt;i class="icofont icofont-refresh reload-card font-primary"&gt;&lt;/i&gt;&lt;/li&gt;
      &lt;li&gt;&lt;i class="icofont icofont-error close-card font-primary"&gt; &lt;/i&gt;&lt;/li&gt;
    &lt;/ul&gt;
  &lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="card-body p-0"&gt;
&lt;div id="chart-timeline-dashbord"&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;</code></pre>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-8 box-col-12 des-xl-100">
                            <div class="row">
                                <div class="col-xl-6 col-50 box-col-6 des-xl-50">
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="header-top d-sm-flex align-items-center">
                                                <h5>Growth Overview</h5>
                                                <div class="center-content">
                                                    <p class="d-flex align-items-center"><i class="toprightarrow-primary fa fa-arrow-up me-2"></i>80% Growth</p>
                                                </div>
                                                <div class="setting-list">
                                                    <ul class="list-unstyled setting-option">
                                                        <li>
                                                            <div class="setting-primary"><i class="icon-settings"> </i></div>
                                                        </li>
                                                        <li><i class="view-html fa fa-code font-primary"></i></li>
                                                        <li><i class="icofont icofont-maximize full-card font-primary"></i></li>
                                                        <li><i class="icofont icofont-minus minimize-card font-primary"></i></li>
                                                        <li><i class="icofont icofont-refresh reload-card font-primary"></i></li>
                                                        <li><i class="icofont icofont-error close-card font-primary"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body p-0">
                                            <div id="chart-dashbord"></div>
                                            <div class="code-box-copy">
                                                <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#sell-overview" title="Copy"><i class="icofont icofont-copy-alt"></i></button>
                                                <pre><code class="language-html" id="sell-overview">                                     &lt;div class="card"&gt;
&lt;div class="card-header"&gt;
&lt;div class="header-top d-sm-flex align-items-center"&gt;
  &lt;h5&gt; Sell Overview &lt;/h5&gt;
    &lt;div class="center-content" &gt;
      &lt;p class="d-flex align-items-center"&gt;
        &lt;i class="toprightarrow-primary fa fa-arrow-up me-2" &gt; &lt;/i&gt;
        86% Growth
      &lt;/p&gt;
  &lt;/div&gt;
  &lt;div class="setting-list"&gt;
    &lt;ul class="list-unstyled setting-option"&gt;
      &lt;li&gt;&lt;div class="setting-primary"&gt;&lt;i class="icon-settings"&gt;&lt;/i&gt;&lt;/div&gt;&lt;/li&gt;
      &lt;li&gt;&lt;i class="view-html fa fa-code font-primary"&gt;&lt;/i&gt;&lt;/li&gt;
      &lt;li&gt;&lt;i class="icofont icofont-maximize full-card font-primary"&gt;&lt;/i&gt;&lt;/li&gt;
      &lt;li&gt;&lt;i class="icofont icofont-minus minimize-card font-primary"&gt;&lt;/i&gt;&lt;/li&gt;
      &lt;li&gt;&lt;i class="icofont icofont-refresh reload-card font-primary"&gt;&lt;/i&gt;&lt;/li&gt;
      &lt;li&gt;&lt;i class="icofont icofont-error close-card font-primary"&gt; &lt;/i&gt;&lt;/li&gt;
    &lt;/ul&gt;
  &lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="card-body p-0"&gt;
&lt;div id="chart-dashbord"&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;</code></pre>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-50 box-col-6 des-xl-50">
                                    <div class="card latest-update-sec">
                                        <div class="card-header">
                                            <div class="header-top d-sm-flex align-items-center">
                                                <h5>Latest activity</h5>
                                                <div class="center-content">
                                                    <ul class="week-date">
                                                        <li class="font-primary">Today</li>
                                                        <li>Month </li>
                                                    </ul>
                                                </div>
                                                <div class="setting-list">
                                                    <ul class="list-unstyled setting-option">
                                                        <li>
                                                            <div class="setting-primary"><i class="icon-settings"></i></div>
                                                        </li>
                                                        <li><i class="view-html fa fa-code font-primary"></i></li>
                                                        <li><i class="icofont icofont-maximize full-card font-primary"></i></li>
                                                        <li><i class="icofont icofont-minus minimize-card font-primary"></i></li>
                                                        <li><i class="icofont icofont-refresh reload-card font-primary"></i></li>
                                                        <li><i class="icofont icofont-error close-card font-primary"> </i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table class="table table-bordernone">
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <div class="media">
                                                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewbox="0 0 512.001 512.001" style="enable-background:new 0 0 512.001 512.001;" xml:space="preserve">
                                                                        <g>
                                                                            <g>
                                                                                <path d="M506.35,80.699c-7.57-7.589-19.834-7.609-27.43-0.052L331.662,227.31l-42.557-42.557c-7.577-7.57-19.846-7.577-27.423,0                                                      L89.076,357.36c-7.577,7.57-7.577,19.853,0,27.423c3.782,3.788,8.747,5.682,13.712,5.682c4.958,0,9.93-1.894,13.711-5.682                                                      l158.895-158.888l42.531,42.524c7.57,7.57,19.808,7.577,27.397,0.032l160.97-160.323                                                      C513.881,100.571,513.907,88.288,506.35,80.699z"></path>
                                                                            </g>
                                                                        </g>
                                                                        <g>
                                                                            <g>
                                                                                <path d="M491.96,449.94H38.788V42.667c0-10.712-8.682-19.394-19.394-19.394S0,31.955,0,42.667v426.667                                                      c0,10.712,8.682,19.394,19.394,19.394H491.96c10.712,0,19.394-8.682,19.394-19.394C511.354,458.622,502.672,449.94,491.96,449.94z                                                      "></path>
                                                                            </g>
                                                                        </g>
                                                                        <g>
                                                                            <g>
                                                                                <path d="M492.606,74.344H347.152c-10.712,0-19.394,8.682-19.394,19.394s8.682,19.394,19.394,19.394h126.061v126.067                                                      c0,10.705,8.682,19.394,19.394,19.394S512,249.904,512,239.192V93.738C512,83.026,503.318,74.344,492.606,74.344z"></path>
                                                                            </g>
                                                                        </g>
                                                                    </svg>
                                                                    <div class="media-body"><span>Google project Apply Review</span>
                                                                        <p>Complete in 3 Hours</p>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td><a href="dashboard.html" target="_blank">Edit</a></td>
                                                            <td><a href="dashboard.html" target="_blank">Delete</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="media">
                                                                    <svg enable-background="new 0 0 512 512" viewbox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="m362 91v-60h-212v60h-150v390h512c0-16.889 0-372.29 0-390zm-182-30h152v30h-152zm302 390h-452v-202.844l90 36v46.844h90v-30h92v30h90v-46.844l90-36zm-302-150h-30v-60h30zm152-60h30v60h-30c0-7.259 0-52.693 0-60zm150-25.156-90 36v-40.844h-90v60h-92v-60h-90v40.844l-90-36c0-14.163 0-84.634 0-94.844h452z"></path>
                                                                    </svg>
                                                                    <div class="media-body"><span>Business Logo Create</span>
                                                                        <p>Complete in 2 Days</p>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td><a href="dashboard.html" target="_blank">Edit</a></td>
                                                            <td><a href="dashboard.html" target="_blank">Delete</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="media">
                                                                    <svg enable-background="new 0 0 512 512" viewbox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                                                        <g>
                                                                            <path d="m345.622 126.038c-50.748-45.076-130.482-46.914-183.244 3.903-21.262 20.478-35.375 47.381-39.737 75.754-5.454 35.471 2.872 70.834 23.444 99.576 56.271 78.616 49.132 141.058 49.915 145.691 0 16.435 6.211 31.795 17.491 43.253 11.289 11.469 26.386 17.785 42.509 17.785 33.084 0 60-26.916 60-60 .686-4.269-6.11-72.81 47.676-143.691 17.875-23.557 27.324-51.673 27.324-81.309 0-38.547-16.54-75.347-45.378-100.962zm-89.622 355.962c-16.486 0-29.462-13.096-29.975-30h59.975c0 16.542-13.458 30-30 30zm83.777-191.826c-30.015 39.554-47.946 84.707-52.569 131.826h-62.57c-4.961-45.331-23.43-91.26-54.157-134.19-15.985-22.333-22.444-49.876-18.188-77.556 7.293-47.43 49.733-88.262 103.846-88.262 58.661 0 104.861 47.891 104.861 105.008 0 23.032-7.339 44.877-21.223 63.174z"></path>
                                                                            <path d="m256 62c8.284 0 15-6.716 15-15v-32c0-8.284-6.716-15-15-15s-15 6.716-15 15v32c0 8.284 6.716 15 15 15z"></path>
                                                                            <path d="m419.385 149.99 25.98-15c7.174-4.142 9.632-13.316 5.49-20.49-4.142-7.175-13.316-9.633-20.49-5.49l-25.98 15c-7.174 4.142-9.632 13.316-5.49 20.49 4.162 7.21 13.349 9.613 20.49 5.49z"></path>
                                                                            <path d="m92.615 304.01-25.98 15c-7.174 4.142-9.632 13.316-5.49 20.49 4.163 7.21 13.35 9.613 20.49 5.49l25.98-15c7.174-4.142 9.632-13.316 5.49-20.49-4.141-7.175-13.316-9.632-20.49-5.49z"></path>
                                                                            <path d="m338.5 84.105c7.141 4.124 16.33 1.716 20.49-5.49l15-25.98c4.142-7.174 1.684-16.348-5.49-20.49-7.174-4.144-16.349-1.685-20.49 5.49l-15 25.98c-4.142 7.175-1.684 16.348 5.49 20.49z"></path>
                                                                            <path d="m153.01 78.615c4.163 7.21 13.35 9.613 20.49 5.49 7.174-4.142 9.632-13.316 5.49-20.49l-15-25.98c-4.142-7.174-13.315-9.633-20.49-5.49-7.174 4.142-9.632 13.316-5.49 20.49z"></path>
                                                                            <path d="m445.365 319.01-25.98-15c-7.175-4.143-16.349-1.684-20.49 5.49-4.142 7.174-1.684 16.348 5.49 20.49l25.98 15c7.141 4.124 16.33 1.716 20.49-5.49 4.143-7.174 1.685-16.348-5.49-20.49z"></path>
                                                                            <path d="m107.615 124.01-25.98-15c-7.175-4.144-16.348-1.684-20.49 5.49s-1.684 16.348 5.49 20.49l25.98 15c7.141 4.124 16.33 1.716 20.49-5.49 4.143-7.174 1.685-16.348-5.49-20.49z"></path>
                                                                            <path d="m466 212h-30c-8.284 0-15 6.716-15 15s6.716 15 15 15h30c8.284 0 15-6.716 15-15s-6.716-15-15-15z"></path>
                                                                            <path d="m91 227c0-8.284-6.716-15-15-15h-30c-8.284 0-15 6.716-15 15s6.716 15 15 15h30c8.284 0 15-6.716 15-15z"></path>
                                                                            <path d="m275.394 216.394-19.394 19.393-19.394-19.393c-5.857-5.858-15.355-5.858-21.213 0s-5.858 15.355 0 21.213l25.607 25.606v53.787c0 8.284 6.716 15 15 15s15-6.716 15-15v-53.787l25.606-25.606c5.858-5.858 5.858-15.355 0-21.213-5.857-5.859-15.355-5.859-21.212 0z"></path>
                                                                        </g>
                                                                    </svg>
                                                                    <div class="media-body"><span>Business Project Research</span>
                                                                        <p>Due in 1 hour</p>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td><a href="dashboard.html" target="_blank">Edit</a></td>
                                                            <td><a href="dashboard.html" target="_blank">Delete</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="media">
                                                                    <svg enable-background="new 0 0 512 512" viewbox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                                                        <g>
                                                                            <path d="m512 390v-390h-512v390h241v32h-15c-41.355 0-75 33.645-75 75v15h210v-15c0-41.355-33.645-75-75-75h-15v-32zm-226 62c19.556 0 36.239 12.539 42.43 30h-144.86c6.191-17.461 22.874-30 42.43-30zm-256-92v-330h452v330c-12.164 0-438.947 0-452 0z"></path>
                                                                            <path d="m136 180c24.813 0 45-20.187 45-45s-20.187-45-45-45-45 20.187-45 45 20.187 45 45 45zm0-60c8.271 0 15 6.729 15 15s-6.729 15-15 15-15-6.729-15-15 6.729-15 15-15z"></path>
                                                                            <path d="m184.568 197.848c-28.678-24.39-60.953-16.827-61.054-16.833-35.639 5.799-62.514 38.985-62.514 77.196v41.789h150v-45c0-22.034-9.634-42.865-26.432-57.152zm-3.568 72.152h-90v-11.789c0-23.666 16.049-44.122 37.332-47.584 13.509-2.198 26.578 1.38 36.801 10.074 10.083 8.577 15.867 21.078 15.867 34.299z"></path>
                                                                            <path d="m241 270h120v30h-120z"></path>
                                                                            <path d="m241 210h210v30h-210z"></path>
                                                                            <path d="m241 150h210v30h-210z"></path>
                                                                            <path d="m331 90h120v30h-120z"></path>
                                                                            <path d="m241 90h60v30h-60z"></path>
                                                                            <path d="m391 270h60v30h-60z"></path>
                                                                        </g>
                                                                    </svg>
                                                                    <div class="media-body"><span>Recruitment in IT Depertment</span>
                                                                        <p>Complete in 3 Hours</p>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td><a href="dashboard.html" target="_blank">Edit</a></td>
                                                            <td><a href="dashboard.html" target="_blank">Delete</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="media">
                                                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewbox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                                                        <g>
                                                                            <g>
                                                                                <path d="M256,0C114.848,0,0,114.848,0,256s114.848,256,256,256s256-114.848,256-256S397.152,0,256,0z M256,480                                                      C132.48,480,32,379.52,32,256S132.48,32,256,32s224,100.48,224,224S379.52,480,256,480z"></path>
                                                                            </g>
                                                                        </g>
                                                                        <g>
                                                                            <g>
                                                                                <path d="M340.688,292.688L272,361.376V96h-32v265.376l-68.688-68.688l-22.624,22.624l96,96c3.12,3.12,7.216,4.688,11.312,4.688                                                      s8.192-1.568,11.312-4.688l96-96L340.688,292.688z"></path>
                                                                            </g>
                                                                        </g>
                                                                    </svg>
                                                                    <div class="media-body"><span>Submit Riverfront Project</span>
                                                                        <p>Complete in 2 Days</p>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td><a href="dashboard.html" target="_blank">Edit</a></td>
                                                            <td><a href="dashboard.html" target="_blank">Delete </a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="code-box-copy">
                                                <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#latest-update-sec" title="Copy"><i class="icofont icofont-copy-alt"></i></button>
                                                <pre><code class="language-html" id="latest-update-sec">                                     &lt;div class="card latest-update-sec"&gt;
&lt;div class="card-header"&gt;
&lt;div class="header-top d-sm-flex align-items-center"&gt;
  &lt;h5&gt; Latest Update &lt;/h5&gt;
    &lt;div class="center-content" &gt;
      &lt;ul class="week-date" &gt;
          &lt;li class="font-primary"&gt; Today &lt;/li&gt;
          &lt;li &gt; Month &lt;/li&gt;
      &lt;/ul&gt;
  &lt;/div&gt;
  &lt;div class="setting-list"&gt;
    &lt;ul class="list-unstyled setting-option"&gt;
      &lt;li&gt;&lt;div class="setting-primary"&gt;&lt;i class="icon-settings"&gt;&lt;/i&gt;&lt;/div&gt;&lt;/li&gt;
      &lt;li&gt;&lt;i class="view-html fa fa-code font-primary"&gt;&lt;/i&gt;&lt;/li&gt;
      &lt;li&gt;&lt;i class="icofont icofont-maximize full-card font-primary"&gt;&lt;/i&gt;&lt;/li&gt;
      &lt;li&gt;&lt;i class="icofont icofont-minus minimize-card font-primary"&gt;&lt;/i&gt;&lt;/li&gt;
      &lt;li&gt;&lt;i class="icofont icofont-refresh reload-card font-primary"&gt;&lt;/i&gt;&lt;/li&gt;
      &lt;li&gt;&lt;i class="icofont icofont-error close-card font-primary"&gt; &lt;/i&gt;&lt;/li&gt;
    &lt;/ul&gt;
  &lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="card-body px-0"&gt;
&lt;div class="table-responsive"&gt;
    &lt;table class="table table-bordernone"&gt;
        &lt;tbody&gt;
          &lt;tr&gt;
            &lt;td&gt;
                  &lt;div class="media"&gt;
                        &lt;svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewbox="0 0 512.001 512.001" style="enable-background:new 0 0 512.001 512.001;" xml:space="preserve"&gt;
                          &lt;g&gt;
                            &lt;g&gt;
                              &lt;path d="M506.35,80.699c-7.57-7.589-19.834-7.609-27.43-0.052L331.662,227.31l-42.557-42.557c-7.577-7.57-19.846-7.577-27.423,0 L89.076,357.36c-7.577,7.57-7.577,19.853,0,27.423c3.782,3.788,8.747,5.682,13.712,5.682c4.958,0,9.93-1.894,13.711-5.682 l158.895-158.888l42.531,42.524c7.57,7.57,19.808,7.577,27.397,0.032l160.97-160.323 C513.881,100.571,513.907,88.288,506.35,80.699z"&gt;&lt;/path&gt;
                            &lt;/g&gt;
                          &lt;/g&gt;
                          &lt;g&gt;
                            &lt;g&gt;
                              &lt;path d="M491.96,449.94H38.788V42.667c0-10.712-8.682-19.394-19.394-19.394S0,31.955,0,42.667v426.667 c0,10.712,8.682,19.394,19.394,19.394H491.96c10.712,0,19.394-8.682,19.394-19.394C511.354,458.622,502.672,449.94,491.96,449.94z "&gt;&lt;/path&gt;
                            &lt;/g&gt;
                          &lt;/g&gt;
                          &lt;g&gt;
                            &lt;g&gt;
                              &lt;path d="M492.606,74.344H347.152c-10.712,0-19.394,8.682-19.394,19.394s8.682,19.394,19.394,19.394h126.061v126.067 c0,10.705,8.682,19.394,19.394,19.394S512,249.904,512,239.192V93.738C512,83.026,503.318,74.344,492.606,74.344z"&gt;&lt;/path&gt;
                            &lt;/g&gt;
                          &lt;/g&gt;
                        &lt;/svg&gt;
                    &lt;div class="media-body"&gt;
                        &lt;span&gt; Google project Apply Review&lt;/span&gt;
                        &lt;p&gt; Complete in 3 Hours&lt;/p&gt;
                    &lt;/div&gt;
                  &lt;/div&gt;
            &lt;/td&gt;
            &lt;td&gt;
              &lt;a href='https://laravel.pixelstrap.com/viho/dashboard' target='_blank'&gt; Edit
              &lt;/a&gt;
            &lt;/td&gt;
            &lt;td&gt;
              &lt;a href='https://laravel.pixelstrap.com/viho/dashboard' target='_blank'&gt; Detete
              &lt;/a&gt;
            &lt;/td&gt;
          &lt;/tr&gt;
          &lt;tr&gt;
            &lt;td&gt;
                  &lt;div class="media"&gt;
                      &lt;svg enable-background="new 0 0 512 512" viewbox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"&gt;
                            &lt;path d="m362 91v-60h-212v60h-150v390h512c0-16.889 0-372.29 0-390zm-182-30h152v30h-152zm302 390h-452v-202.844l90 36v46.844h90v-30h92v30h90v-46.844l90-36zm-302-150h-30v-60h30zm152-60h30v60h-30c0-7.259 0-52.693 0-60zm150-25.156-90 36v-40.844h-90v60h-92v-60h-90v40.844l-90-36c0-14.163 0-84.634 0-94.844h452z"&gt;&lt;/path&gt;
                        &lt;/svg&gt;
                    &lt;div class="media-body"&gt;
                        &lt;span&gt; Business Logo Create&lt;/span&gt;
                        &lt;p&gt; Complete in 2 Days&lt;/p&gt;
                    &lt;/div&gt;
                  &lt;/div&gt;
            &lt;/td&gt;
            &lt;td&gt;
              &lt;a href='https://laravel.pixelstrap.com/viho/dashboard' target='_blank'&gt; Edit
              &lt;/a&gt;
            &lt;/td&gt;
            &lt;td&gt;
              &lt;a href='https://laravel.pixelstrap.com/viho/dashboard' target='_blank'&gt; Detete
              &lt;/a&gt;
            &lt;/td&gt;
          &lt;/tr&gt;
          &lt;tr&gt;
            &lt;td&gt;
                  &lt;div class="media"&gt;
                      &lt;svg enable-background="new 0 0 512 512" viewbox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"&gt;
                            &lt;g&gt;
                              &lt;path d="m345.622 126.038c-50.748-45.076-130.482-46.914-183.244 3.903-21.262 20.478-35.375 47.381-39.737 75.754-5.454 35.471 2.872 70.834 23.444 99.576 56.271 78.616 49.132 141.058 49.915 145.691 0 16.435 6.211 31.795 17.491 43.253 11.289 11.469 26.386 17.785 42.509 17.785 33.084 0 60-26.916 60-60 .686-4.269-6.11-72.81 47.676-143.691 17.875-23.557 27.324-51.673 27.324-81.309 0-38.547-16.54-75.347-45.378-100.962zm-89.622 355.962c-16.486 0-29.462-13.096-29.975-30h59.975c0 16.542-13.458 30-30 30zm83.777-191.826c-30.015 39.554-47.946 84.707-52.569 131.826h-62.57c-4.961-45.331-23.43-91.26-54.157-134.19-15.985-22.333-22.444-49.876-18.188-77.556 7.293-47.43 49.733-88.262 103.846-88.262 58.661 0 104.861 47.891 104.861 105.008 0 23.032-7.339 44.877-21.223 63.174z"&gt;&lt;/path&gt;<br />&lt;path d="m256 62c8.284 0 15-6.716 15-15v-32c0-8.284-6.716-15-15-15s-15 6.716-15 15v32c0 8.284 6.716 15 15 15z"&gt;&lt;/path&gt;<br />&lt;path d="m419.385 149.99 25.98-15c7.174-4.142 9.632-13.316 5.49-20.49-4.142-7.175-13.316-9.633-20.49-5.49l-25.98 15c-7.174 4.142-9.632 13.316-5.49 20.49 4.162 7.21 13.349 9.613 20.49 5.49z"&gt;&lt;/path&gt;<br />&lt;path d="m92.615 304.01-25.98 15c-7.174 4.142-9.632 13.316-5.49 20.49 4.163 7.21 13.35 9.613 20.49 5.49l25.98-15c7.174-4.142 9.632-13.316 5.49-20.49-4.141-7.175-13.316-9.632-20.49-5.49z"&gt;&lt;/path&gt;<br />&lt;path d="m338.5 84.105c7.141 4.124 16.33 1.716 20.49-5.49l15-25.98c4.142-7.174 1.684-16.348-5.49-20.49-7.174-4.144-16.349-1.685-20.49 5.49l-15 25.98c-4.142 7.175-1.684 16.348 5.49 20.49z"&gt;&lt;/path&gt;<br />&lt;path d="m153.01 78.615c4.163 7.21 13.35 9.613 20.49 5.49 7.174-4.142 9.632-13.316 5.49-20.49l-15-25.98c-4.142-7.174-13.315-9.633-20.49-5.49-7.174 4.142-9.632 13.316-5.49 20.49z"&gt;&lt;/path&gt;<br />&lt;path d="m445.365 319.01-25.98-15c-7.175-4.143-16.349-1.684-20.49 5.49-4.142 7.174-1.684 16.348 5.49 20.49l25.98 15c7.141 4.124 16.33 1.716 20.49-5.49 4.143-7.174 1.685-16.348-5.49-20.49z"&gt;&lt;/path&gt;<br />&lt;path d="m107.615 124.01-25.98-15c-7.175-4.144-16.348-1.684-20.49 5.49s-1.684 16.348 5.49 20.49l25.98 15c7.141 4.124 16.33 1.716 20.49-5.49 4.143-7.174 1.685-16.348-5.49-20.49z"&gt;&lt;/path&gt;<br />&lt;path d="m466 212h-30c-8.284 0-15 6.716-15 15s6.716 15 15 15h30c8.284 0 15-6.716 15-15s-6.716-15-15-15z"&gt;&lt;/path&gt;<br />&lt;path d="m91 227c0-8.284-6.716-15-15-15h-30c-8.284 0-15 6.716-15 15s6.716 15 15 15h30c8.284 0 15-6.716 15-15z"&gt;&lt;/path&gt;<br />&lt;path d="m275.394 216.394-19.394 19.393-19.394-19.393c-5.857-5.858-15.355-5.858-21.213 0s-5.858 15.355 0 21.213l25.607 25.606v53.787c0 8.284 6.716 15 15 15s15-6.716 15-15v-53.787l25.606-25.606c5.858-5.858 5.858-15.355 0-21.213-5.857-5.859-15.355-5.859-21.212 0z"&gt;&lt;/path&gt;
                            &lt;/g&gt;
                        &lt;/svg&gt;
                    &lt;div class="media-body"&gt;
                        &lt;span&gt; Business Project Research&lt;/span&gt;
                        &lt;p&gt; Due in 1 hour&lt;/p&gt;
                    &lt;/div&gt;
                  &lt;/div&gt;
            &lt;/td&gt;
            &lt;td&gt;
              &lt;a href='https://laravel.pixelstrap.com/viho/dashboard' target='_blank'&gt; Edit
              &lt;/a&gt;
            &lt;/td&gt;
            &lt;td&gt;
              &lt;a href='https://laravel.pixelstrap.com/viho/dashboard' target='_blank'&gt; Detete
              &lt;/a&gt;
            &lt;/td&gt;
          &lt;/tr&gt;
          &lt;tr&gt;
            &lt;td&gt;
                  &lt;div class="media"&gt;
                      &lt;svg enable-background="new 0 0 512 512" viewbox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"&gt;
                            &lt;g&gt;
                              &lt;path d="m512 390v-390h-512v390h241v32h-15c-41.355 0-75 33.645-75 75v15h210v-15c0-41.355-33.645-75-75-75h-15v-32zm-226 62c19.556 0 36.239 12.539 42.43 30h-144.86c6.191-17.461 22.874-30 42.43-30zm-256-92v-330h452v330c-12.164 0-438.947 0-452 0z"&gt;&lt;/path&gt;
                              &lt;path d="m136 180c24.813 0 45-20.187 45-45s-20.187-45-45-45-45 20.187-45 45 20.187 45 45 45zm0-60c8.271 0 15 6.729 15 15s-6.729 15-15 15-15-6.729-15-15 6.729-15 15-15z"&gt;&lt;/path&gt;<br />&lt;path d="m184.568 197.848c-28.678-24.39-60.953-16.827-61.054-16.833-35.639 5.799-62.514 38.985-62.514 77.196v41.789h150v-45c0-22.034-9.634-42.865-26.432-57.152zm-3.568 72.152h-90v-11.789c0-23.666 16.049-44.122 37.332-47.584 13.509-2.198 26.578 1.38 36.801 10.074 10.083 8.577 15.867 21.078 15.867 34.299z"&gt;&lt;/path&gt;
                              &lt;path d="m241 270h120v30h-120z"&gt;&lt;/path&gt;
                              &lt;path d="m241 210h210v30h-210z"&gt;&lt;/path&gt;
                              &lt;path d="m241 150h210v30h-210z"&gt;&lt;/path&gt;
                              &lt;path d="m331 90h120v30h-120z"&gt;&lt;/path&gt;
                              &lt;path d="m241 90h60v30h-60z"&gt;&lt;/path&gt;
                              &lt;path d="m391 270h60v30h-60z"&gt;&lt;/path&gt;
                            &lt;/g&gt;
                        &lt;/svg&gt;
                    &lt;div class="media-body"&gt;
                        &lt;span&gt; Recruitment in IT Depertment&lt;/span&gt;
                        &lt;p&gt; Complete in 3 Hours&lt;/p&gt;
                    &lt;/div&gt;
                  &lt;/div&gt;
            &lt;/td&gt;
            &lt;td&gt;
              &lt;a href='https://laravel.pixelstrap.com/viho/dashboard' target='_blank'&gt; Edit
              &lt;/a&gt;
            &lt;/td&gt;
            &lt;td&gt;
              &lt;a href='https://laravel.pixelstrap.com/viho/dashboard' target='_blank'&gt; Detete
              &lt;/a&gt;
            &lt;/td&gt;
          &lt;/tr&gt;
          &lt;tr&gt;
            &lt;td&gt;
                  &lt;div class="media"&gt;
                        &lt;svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewbox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve"&gt;
                            &lt;g&gt;
                              &lt;g&gt;
                                &lt;path d="M256,0C114.848,0,0,114.848,0,256s114.848,256,256,256s256-114.848,256-256S397.152,0,256,0z M256,480 C132.48,480,32,379.52,32,256S132.48,32,256,32s224,100.48,224,224S379.52,480,256,480z"&gt;&lt;/path&gt;
                              &lt;/g&gt;
                            &lt;/g&gt;
                          &lt;g&gt;
                            &lt;g&gt;
                              &lt;path d="M340.688,292.688L272,361.376V96h-32v265.376l-68.688-68.688l-22.624,22.624l96,96c3.12,3.12,7.216,4.688,11.312,4.688 s8.192-1.568,11.312-4.688l96-96L340.688,292.688z"&gt;&lt;/path&gt;
                            &lt;/g&gt;
                          &lt;/g&gt;
                        &lt;/svg&gt;
                    &lt;div class="media-body"&gt;
                        &lt;span&gt; Submit Riverfront Project&lt;/span&gt;
                        &lt;p&gt; Complete in 2 Days&lt;/p&gt;
                    &lt;/div&gt;
                  &lt;/div&gt;
            &lt;/td&gt;
            &lt;td&gt;
              &lt;a href='https://laravel.pixelstrap.com/viho/dashboard' target='_blank'&gt; Edit
              &lt;/a&gt;
            &lt;/td&gt;
            &lt;td&gt;
              &lt;a href='https://laravel.pixelstrap.com/viho/dashboard' target='_blank'&gt; Detete
              &lt;/a&gt;
            &lt;/td&gt;
          &lt;/tr&gt;
        &lt;/tbody&gt;
    &lt;/table&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;</code></pre>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12 recent-order-sec">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <h5>Recent Orders</h5>
                                                <table class="table table-bordernone">
                                                    <thead>
                                                        <tr>
                                                            <th>Name</th>
                                                            <th>Date</th>
                                                            <th>Quantity</th>
                                                            <th>Value</th>
                                                            <th>Rate</th>
                                                            <th>
                                                                <div class="setting-list">
                                                                    <ul class="list-unstyled setting-option">
                                                                        <li>
                                                                            <div class="setting-primary"><i class="icon-settings"> </i></div>
                                                                        </li>
                                                                        <li><i class="view-html fa fa-code font-primary"></i></li>
                                                                        <li><i class="icofont icofont-maximize full-card font-primary"></i></li>
                                                                        <li><i class="icofont icofont-minus minimize-card font-primary"></i></li>
                                                                        <li><i class="icofont icofont-refresh reload-card font-primary"></i></li>
                                                                        <li><i class="icofont icofont-error close-card font-primary"></i></li>
                                                                    </ul>
                                                                </div>
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <div class="media"><img class="img-fluid rounded-circle" src="assets/images/dashboard/product-1.png" alt="" data-original-title="" title="">
                                                                    <div class="media-body"><a href="#"><span>Yellow New Nike shoes</span></a></div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <p>16 August</p>
                                                            </td>
                                                            <td>
                                                                <p>54146</p>
                                                            </td>
                                                            <td><img class="img-fluid" src="assets/images/dashboard/graph-1.png" alt="" data-original-title="" title=""></td>
                                                            <td>
                                                                <p>$210326</p>
                                                            </td>
                                                            <td>
                                                                <p>Done</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="media"><img class="img-fluid rounded-circle" src="assets/images/dashboard/product-2.png" alt="" data-original-title="" title="">
                                                                    <div class="media-body"><a href="#"><span>Sony Brand New Headphone</span></a></div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <p>2 October</p>
                                                            </td>
                                                            <td>
                                                                <p>32015</p>
                                                            </td>
                                                            <td><img class="img-fluid" src="assets/images/dashboard/graph-2.png" alt="" data-original-title="" title=""></td>
                                                            <td>
                                                                <p>$548526</p>
                                                            </td>
                                                            <td>
                                                                <p>Done</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="media"><img class="img-fluid rounded-circle" src="assets/images/dashboard/product-3.png" alt="" data-original-title="" title="">
                                                                    <div class="media-body"><a href="#"><span>Beautiful Golden Tree plant</span></a></div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <p>21 March</p>
                                                            </td>
                                                            <td>
                                                                <p>12548</p>
                                                            </td>
                                                            <td><img class="img-fluid" src="assets/images/dashboard/graph-3.png" alt="" data-original-title="" title=""></td>
                                                            <td>
                                                                <p>$589565</p>
                                                            </td>
                                                            <td>
                                                                <p>Done</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="media"><img class="img-fluid rounded-circle" src="assets/images/dashboard/product-4.png" alt="" data-original-title="" title="">
                                                                    <div class="media-body"><a href="#"><span>Marco M Kely Handbeg</span></a></div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <p>31 December</p>
                                                            </td>
                                                            <td>
                                                                <p>15495</p>
                                                            </td>
                                                            <td><img class="img-fluid" src="assets/images/dashboard/graph-4.png" alt="" data-original-title="" title=""></td>
                                                            <td>
                                                                <p>$125424 </p>
                                                            </td>
                                                            <td>
                                                                <p>Done</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="media"><img class="img-fluid rounded-circle" src="assets/images/dashboard/product-5.png" alt="" data-original-title="" title="">
                                                                    <div class="media-body"><a href="#"><span>Being Human Branded T-Shirt </span></a></div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <p>26 January</p>
                                                            </td>
                                                            <td>
                                                                <p>56625</p>
                                                            </td>
                                                            <td><img class="img-fluid" src="assets/images/dashboard/graph-5.png" alt="" data-original-title="" title=""></td>
                                                            <td>
                                                                <p>$112103</p>
                                                            </td>
                                                            <td>
                                                                <p>Done</p>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="code-box-copy">
                                                <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#recent-order" title="Copy"><i class="icofont icofont-copy-alt"></i></button>
                                                <pre><code class="language-html" id="recent-order">&lt;div class="card"&gt;
&lt;div class="card-body"&gt;
&lt;div class="table-responsive"&gt;
  &lt;table class="table table-bordernone"&gt;
    &lt;thead&gt;
      &lt;tr&gt;
        &lt;th&gt;Name&lt;/th&gt;
        &lt;th&gt;Date&lt;/th&gt;
        &lt;th&gt;Quantity&lt;/th&gt;
        &lt;th&gt;Value&lt;/th&gt;
        &lt;th&gt;Rate&lt;/th&gt;
        &lt;th&gt;
          &lt;div class="setting-list"&gt;
            &lt;ul class="list-unstyled setting-option"&gt;
              &lt;li&gt;
                &lt;div class="setting-primary"&gt;&lt;i class="icon-settings"&gt; &lt;/i&gt;&lt;/div&gt;
              &lt;/li&gt;
              &lt;li&gt;&lt;i class="view-html fa fa-code font-primary"&gt;&lt;/i&gt;&lt;/li&gt;
              &lt;li&gt;&lt;i class="icofont icofont-maximize full-card font-primary"&gt;&lt;/i&gt;&lt;/li&gt;
              &lt;li&gt;&lt;i class="icofont icofont-minus minimize-card font-primary"&gt;&lt;/i&gt;&lt;/li&gt;
              &lt;li&gt;&lt;i class="icofont icofont-refresh reload-card font-primary"&gt;&lt;/i&gt;&lt;/li&gt;
              &lt;li&gt;&lt;i class="icofont icofont-error close-card font-primary"&gt;&lt;/i&gt;&lt;/li&gt;
            &lt;/ul&gt;
          &lt;/div&gt;
        &lt;/th&gt;
      &lt;/tr&gt;
    &lt;/thead&gt;
    &lt;tbody&gt;
      &lt;tr&gt;
        &lt;td&gt;
          &lt;div class="media"&gt;
            &lt;img class="img-fluid rounded-circle" src="https://laravel.pixelstrap.com/viho/assets/images/dashboard/product-1.png" alt="" data-original-title="" title=""&gt;
            &lt;div class="media-body"&gt;
              &lt;span&gt;Yellow New Nike shoes&lt;/span&gt;
            &lt;/div&gt;
          &lt;/div&gt;
        &lt;/td&gt;
        &lt;td&gt;
          &lt;p&gt;16 August&lt;/p&gt;
        &lt;/td&gt;
        &lt;td&gt;
          &lt;p&gt;54146&lt;/p&gt;
        &lt;/td&gt;
        &lt;td&gt;
          &lt;img class="img-fluid" src="https://laravel.pixelstrap.com/viho/assets/images/dashboard/graph-1.png" alt="" data-original-title="" title=""&gt;
        &lt;/td&gt;
        &lt;td&gt;
          &lt;p&gt;$210326&lt;/p&gt;
        &lt;/td&gt;
        &lt;td&gt;
          &lt;p&gt;Done&lt;/p&gt;
        &lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr&gt;
        &lt;td&gt;
          &lt;div class="media"&gt;
            &lt;img class="img-fluid rounded-circle" src="https://laravel.pixelstrap.com/viho/assets/images/dashboard/product-2.png" alt="" data-original-title="" title=""&gt;
            &lt;div class="media-body"&gt;
              &lt;span&gt;Sony Brand New Headphone&lt;/span&gt;
            &lt;/div&gt;
          &lt;/div&gt;
        &lt;/td&gt;
        &lt;td&gt;
          &lt;p&gt;2 October&lt;/p&gt;
        &lt;/td&gt;
        &lt;td&gt;
          &lt;p&gt;32015&lt;/p&gt;
        &lt;/td&gt;
        &lt;td&gt;
          &lt;img class="img-fluid" src="https://laravel.pixelstrap.com/viho/assets/images/dashboard/graph-2.png" alt="" data-original-title="" title=""&gt;
        &lt;/td&gt;
        &lt;td&gt;
          &lt;p&gt;$548526&lt;/p&gt;
        &lt;/td&gt;
        &lt;td&gt;
          &lt;p&gt;Done&lt;/p&gt;
        &lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr&gt;
        &lt;td&gt;
          &lt;div class="media"&gt;
            &lt;img class="img-fluid rounded-circle" src="https://laravel.pixelstrap.com/viho/assets/images/dashboard/product-3.png" alt="" data-original-title="" title=""&gt;
            &lt;div class="media-body"&gt;
              &lt;span&gt;Beautiful Golden Tree plant&lt;/span&gt;
            &lt;/div&gt;
          &lt;/div&gt;
        &lt;/td&gt;
        &lt;td&gt;
          &lt;p&gt;21 March&lt;/p&gt;
        &lt;/td&gt;
        &lt;td&gt;
          &lt;p&gt;12548&lt;/p&gt;
        &lt;/td&gt;
        &lt;td&gt;
          &lt;img class="img-fluid" src="https://laravel.pixelstrap.com/viho/assets/images/dashboard/graph-3.png" alt="" data-original-title="" title=""&gt;
        &lt;/td&gt;
        &lt;td&gt;
          &lt;p&gt;$589565&lt;/p&gt;
        &lt;/td&gt;
        &lt;td&gt;
          &lt;p&gt;Done&lt;/p&gt;
        &lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr&gt;
        &lt;td&gt;
          &lt;div class="media"&gt;
            &lt;img class="img-fluid rounded-circle" src="https://laravel.pixelstrap.com/viho/assets/images/dashboard/product-4.png" alt="" data-original-title="" title=""&gt;
            &lt;div class="media-body"&gt;
              &lt;span&gt;Marco M Kely Handbeg&lt;/span&gt;
            &lt;/div&gt;
          &lt;/div&gt;
        &lt;/td&gt;
        &lt;td&gt;
          &lt;p&gt;31 December&lt;/p&gt;
        &lt;/td&gt;
        &lt;td&gt;
          &lt;p&gt;15495&lt;/p&gt;
        &lt;/td&gt;
        &lt;td&gt;
          &lt;img class="img-fluid" src="https://laravel.pixelstrap.com/viho/assets/images/dashboard/graph-4.png" alt="" data-original-title="" title=""&gt;
        &lt;/td&gt;
        &lt;td&gt;
          &lt;p&gt;$125424 &lt;/p&gt;
        &lt;/td&gt;
        &lt;td&gt;
          &lt;p&gt;Done&lt;/p&gt;
        &lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr&gt;
        &lt;td&gt;
          &lt;div class="media"&gt;
            &lt;img class="img-fluid rounded-circle" src="https://laravel.pixelstrap.com/viho/assets/images/dashboard/product-5.png" alt="" data-original-title="" title=""&gt;
            &lt;div class="media-body"&gt;
              &lt;span&gt;Being Human Branded T-Shirt&lt;/span&gt;
            &lt;/div&gt;
          &lt;/div&gt;
        &lt;/td&gt;
        &lt;td&gt;
          &lt;p&gt;26 January&lt;/p&gt;
        &lt;/td&gt;
        &lt;td&gt;
          &lt;p&gt;56625&lt;/p&gt;
        &lt;/td&gt;
        &lt;td&gt;
          &lt;img class="img-fluid" src="https://laravel.pixelstrap.com/viho/assets/images/dashboard/graph-5.png" alt="" data-original-title="" title=""&gt;
        &lt;/td&gt;
        &lt;td&gt;
          &lt;p&gt;$112103&lt;/p&gt;
        &lt;/td&gt;
        &lt;td&gt;
          &lt;p&gt;Done&lt;/p&gt;
        &lt;/td&gt;
      &lt;/tr&gt;
    &lt;/tbody&gt;
  &lt;/table&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;</code></pre>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 box-col-12 des-xl-100">
                            <div class="row">
                                <div class="col-xl-12 box-col-6 des-xl-50">
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="header-top d-sm-flex align-items-center">
                                                <h5>User Activations</h5>
                                                <div class="center-content">
                                                    <p>Yearly User 24.65k</p>
                                                </div>
                                                <div class="setting-list">
                                                    <ul class="list-unstyled setting-option">
                                                        <li>
                                                            <div class="setting-primary"><i class="icon-settings"></i></div>
                                                        </li>
                                                        <li><i class="view-html fa fa-code font-primary"></i></li>
                                                        <li><i class="icofont icofont-maximize full-card font-primary"></i></li>
                                                        <li><i class="icofont icofont-minus minimize-card font-primary"></i></li>
                                                        <li><i class="icofont icofont-refresh reload-card font-primary"></i></li>
                                                        <li><i class="icofont icofont-error close-card font-primary"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body p-0">
                                            <div id="user-activation-dash-2"></div>
                                            <div class="code-box-copy">
                                                <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#user-activations" title="Copy"><i class="icofont icofont-copy-alt"></i></button>
                                                <pre><code class="language-html" id="user-activations">&lt;div class="card"&gt;
&lt;div class="card-header"&gt;
  &lt;div class="header-top d-sm-flex align-items-center"&gt;
    &lt;h5&gt;User Activations&lt;/h5&gt;
    &lt;div class="center-content"&gt;
      &lt;p&gt;Yearly User 24.65k&lt;/p&gt;
    &lt;/div&gt;
    &lt;div class="setting-list"&gt;
        &lt;ul class="list-unstyled setting-option"&gt;
          &lt;li&gt;
            &lt;div class="setting-primary"&gt;
              &lt;i class="icon-settings"&gt;&lt;/i&gt;
            &lt;/div&gt;
          &lt;/li&gt;
          &lt;li&gt;
            &lt;i class="view-html fa fa-code font-primary"&gt;&lt;/i&gt;
          &lt;/li&gt;
          &lt;li&gt;
            &lt;i class="icofont icofont-maximize full-card font-primary"&gt;&lt;/i&gt;
          &lt;/li&gt;
          &lt;li&gt;
            &lt;i class="icofont icofont-minus minimize-card font-primary"&gt;&lt;/i&gt;
          &lt;/li&gt;
          &lt;li&gt;
            &lt;i class="icofont icofont-refresh reload-card font-primary"&gt;&lt;/i&gt;
          &lt;/li&gt;
          &lt;li&gt;
            &lt;i class="icofont icofont-error close-card font-primary"&gt;&lt;/i&gt;
          &lt;/li&gt;
        &lt;/ul&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;
&lt;div class="card-body p-0"&gt;
  &lt;div id="user-activation-dash-2"&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;</code></pre>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12 box-col-6 des-xl-50">
                                    <div class="card trasaction-sec">
                                        <div class="card-header">
                                            <div class="header-top d-sm-flex align-items-center">
                                                <h5>Transaction</h5>
                                                <div class="center-content">
                                                    <p>5878 Suceessfull Transaction</p>
                                                </div>
                                                <div class="setting-list">
                                                    <ul class="list-unstyled setting-option">
                                                        <li>
                                                            <div class="setting-secondary"><i class="icon-settings"> </i></div>
                                                        </li>
                                                        <li><i class="view-html fa fa-code font-secondary"></i></li>
                                                        <li><i class="icofont icofont-maximize full-card font-secondary"></i></li>
                                                        <li><i class="icofont icofont-minus minimize-card font-secondary"></i></li>
                                                        <li><i class="icofont icofont-refresh reload-card font-secondary"></i></li>
                                                        <li><i class="icofont icofont-error close-card font-secondary"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="transaction-totalbal">
                                            <h2> $2,09,352k <span class="ms-3"> <a class="btn-arrow arrow-secondary" href="javascript:void(0)"><i class="toprightarrow-secondary fa fa-arrow-up me-2"></i>98.54%</a></span></h2>
                                            <p>Total Balance</p>
                                        </div>
                                        <div class="card-body p-0">
                                            <div id="chart-3dash"></div>
                                            <div class="code-box-copy">
                                                <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#transaction" title="Copy"><i class="icofont icofont-copy-alt"></i></button>
                                                <pre><code class="language-html" id="transaction">&lt;div class="card trasaction-sec"&gt;
&lt;div class="card-header"&gt;
&lt;div class="header-top d-sm-flex align-items-center"&gt;
  &lt;h5&gt;Transaction&lt;/h5&gt;
&lt;div class="center-content"&gt;
  &lt;p&gt;5878 Suceessfull Transaction&lt;/p&gt;
&lt;/div&gt;
&lt;div class="setting-list"&gt;
  &lt;ul class="list-unstyled setting-option"&gt;
    &lt;li&gt;
      &lt;div class="setting-secondary"&gt;
        &lt;i class="icon-settings"&gt; &lt;/i&gt;
      &lt;/div&gt;
    &lt;/li&gt;
    &lt;li&gt;
      &lt;i class="view-html fa fa-code font-secondary"&gt;&lt;/i&gt;
    &lt;/li&gt;
    &lt;li&gt;
      &lt;i class="icofont icofont-maximize full-card font-secondary"&gt;&lt;/i&gt;
    &lt;/li&gt;
    &lt;li&gt;
      &lt;i class="icofont icofont-minus minimize-card font-secondary"&gt;&lt;/i&gt;
    &lt;/li&gt;
    &lt;li&gt;
      &lt;i class="icofont icofont-refresh reload-card font-secondary"&gt;&lt;/i&gt;
    &lt;/li&gt;
    &lt;li&gt;
      &lt;i class="icofont icofont-error close-card font-secondary"&gt;&lt;/i&gt;
    &lt;/li&gt;
  &lt;/ul&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="transaction-totalbal"&gt;
&lt;h2&gt; $2,09,352k
&lt;span class="ms-3"&gt;
  &lt;a class="btn-arrow arrow-secondary" href="javascript:void(0)"&gt;
    &lt;i class="toprightarrow-secondary fa fa-arrow-up me-2"&gt;&lt;/i&gt;98.54%
  &lt;/a&gt;
&lt;/span&gt;
&lt;/h2&gt;
&lt;p&gt;Total Balance&lt;/p&gt;
&lt;/div&gt;
&lt;div class="card-body p-0"&gt;
&lt;div id="chart-3dash"&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;</code></pre>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Container-fluid Ends-->
                <!-- Container-fluid Ends-->
            </div>
            <!-- footer start-->
            <footer>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 footer-copyright">
                            <p class="mb-0">Copyright
                                2024-25 © viho
                                All rights reserved.</p>
                        </div>
                        <div class="col-md-6">
                            <p class="pull-right mb-0">Hand crafted & made with <i class="fa fa-heart font-secondary"></i></p>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <!-- latest jquery-->
    <script src="assets/js/jquery-3.5.1.min.js"></script>
    <!-- feather icon js-->
    <script src="assets/js/icons/feather-icon/feather.min.js"></script>
    <script src="assets/js/icons/feather-icon/feather-icon.js"></script>
    <!-- Sidebar jquery-->
    <script src="assets/js/sidebar-menu.js"></script>
    <script src="assets/js/config.js"></script>
    <!-- Bootstrap js-->
    <script src="assets/js/bootstrap/popper.min.js"></script>
    <script src="assets/js/bootstrap/bootstrap.min.js"></script>
    <!-- Plugins JS start-->
    <script src="assets/js/chart/chartist/chartist.js"></script>
    <script src="assets/js/chart/chartist/chartist-plugin-tooltip.js"></script>
    <script src="assets/js/chart/knob/knob.min.js"></script>
    <script src="assets/js/chart/knob/knob-chart.js"></script>
    <script src="assets/js/chart/apex-chart/apex-chart.js"></script>
    <script src="assets/js/chart/apex-chart/stock-prices.js"></script>
    <script src="assets/js/prism/prism.min.js"></script>
    <script src="assets/js/clipboard/clipboard.min.js"></script>
    <script src="assets/js/counter/jquery.waypoints.min.js"></script>
    <script src="assets/js/counter/jquery.counterup.min.js"></script>
    <script src="assets/js/counter/counter-custom.js"></script>
    <script src="assets/js/custom-card/custom-card.js"></script>
    <script src="assets/js/notify/bootstrap-notify.min.js"></script>
    <script src="assets/js/vector-map/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="assets/js/vector-map/map/jquery-jvectormap-world-mill-en.js"></script>
    <script src="assets/js/vector-map/map/jquery-jvectormap-us-aea-en.js"></script>
    <script src="assets/js/vector-map/map/jquery-jvectormap-uk-mill-en.js"></script>
    <script src="assets/js/vector-map/map/jquery-jvectormap-au-mill.js"></script>
    <script src="assets/js/vector-map/map/jquery-jvectormap-chicago-mill-en.js"></script>
    <script src="assets/js/vector-map/map/jquery-jvectormap-in-mill.js"></script>
    <script src="assets/js/vector-map/map/jquery-jvectormap-asia-mill.js"></script>
    <script src="assets/js/dashboard/default.js"></script>
    <script src="assets/js/notify/index.js"></script>
    <script src="assets/js/datepicker/date-picker/datepicker.js"></script>
    <script src="assets/js/datepicker/date-picker/datepicker.en.js"></script>
    <script src="assets/js/datepicker/date-picker/datepicker.custom.js"></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="assets/js/script.js"></script>
    <script src="assets/js/theme-customizer/customizer.js"></script>
    <!-- Plugin used-->

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
                console.log(dirValue);
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
</body>


<!-- Mirrored from laravel.pixelstrap.com/viho/dashboard by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 25 Feb 2024 08:29:02 GMT -->
</html>
