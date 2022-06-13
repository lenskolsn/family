<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ $attributes['title'] }}</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="icon" href="https://cdn-icons-png.flaticon.com/512/5322/5322033.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="/vendors/bootstrap/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="/vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="/vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="/vendors/selectFX/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="/vendors/jqvmap/dist/jqvmap.min.css">

    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/css/prolife.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <script src="https://cdn.ckeditor.com/4.19.0/standard/ckeditor.js"></script>

</head>

<body>


    <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu"
                    aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="./">Hi! {{ Auth::user()->name }}</a>
                <a class="navbar-brand hidden" href="./"><img src="/images/logo2.png" alt="Logo"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="{{ route('admin.dashboard') }}"> <i
                                class="menu-icon fab fa-asymmetrik"></i>Dashboard</a>
                    </li>
                    <li>
                        <a href="{{ route('danhmuc.danhsach') }}"> <i class="menu-icon fas fa-list"></i>Danh mục</a>
                    </li>
                    <li>
                        <a href="{{ route('banner.danhsach') }}"> <i class="menu-icon fas fa-image"></i>Banner</a>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false"> <i class="menu-icon fas fa-shopping-basket"></i>Sản phẩm</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fas fa-list"></i><a href="{{ route('sanpham.danhsach') }}">Danh
                                    sách</a>
                            </li>
                            <li><i class="menu-icon fas fa-plus"></i><a href="{{ route('sanpham.them') }}">Thêm
                                    mới</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false"> <i class="menu-icon fas fa-shopping-basket"></i>Khách hàng</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fas fa-list"></i><a href="{{ route('khachhang.danhsach') }}">Danh
                                    sách</a>
                            </li>
                            <li><i class="menu-icon fas fa-plus"></i><a href="{{ route('khachhang.them') }}">Thêm
                                    mới</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false"> <i class="menu-icon fas fa-feather-alt"></i>Bài viết</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fas fa-list"> </i><a
                                    href="{{ route('danhmucbaiviet.danhsach') }}">Danh
                                    mục bài viết</a>
                            </li>
                            <li><i class="menu-icon fas fa-list-alt"></i><a
                                    href="{{ route('baiviet.danhsach') }}">Danh
                                    sách</a>
                            </li>
                            <li><i class="menu-icon fas fa-plus"></i><a href="{{ route('baiviet.them') }}">Thêm
                                    mới</a></li>
                        </ul>
                    </li>


                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    <div class="header-left">
                        <button class="search-trigger"><i class="fa fa-search"></i></button>
                        <div class="form-inline">
                            <form class="search-form">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search ..."
                                    aria-label="Search">
                                <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                            </form>
                        </div>

                    </div>
                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <img class="rounded-circle img-thumbnail" width="40"
                                src="/storage/avatar/{{ Auth::user()->avatar }}"> {{ Auth::user()->name }} <i
                                class="fas fa-caret-down"></i>
                        </a>

                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="{{ route('admin.thongtin') }}"><i
                                    class="fa fa-user"></i> Tài khoản</a>

                            <a class="nav-link" href="{{ route('admin.dangxuat') }}"><i
                                    class="fa fa-power-off"></i> Đăng xuất</a>
                        </div>
                    </div>
                </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->

        <div class="col-md-12">
            <span class="badge bg-dark">{{ $attributes['title'] }}</span>
        </div>

        <div class="content mt-3">
            <div class="col-md-12 bg-white rounded-1 shadow py-3">
                {{ $slot }}
            </div>
        </div> <!-- .content -->
    </div><!-- /#right-panel -->

    <!-- Right Panel -->
    <script src="/js/admin.js"></script>
    @yield('anhbaiviet')

    <script src="/vendors/jquery/dist/jquery.min.js"></script>
    <script src="/vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="/assets/js/main.js"></script>


    <script src="/vendors/chart.js/dist/Chart.bundle.min.js"></script>
    <script src="/assets/js/dashboard.js"></script>
    <script src="/assets/js/widgets.js"></script>
    <script src="/vendors/jqvmap/dist/jquery.vmap.min.js"></script>
    <script src="/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <script src="/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script>
        CKEDITOR.replace('editor1');
    </script>
    <script>
        (function($) {
            "use strict";

            jQuery('#vmap').vectorMap({
                map: 'world_en',
                backgroundColor: null,
                color: '#ffffff',
                hoverOpacity: 0.7,
                selectedColor: '#1de9b6',
                enableZoom: true,
                showTooltip: true,
                values: sample_data,
                scaleColors: ['#1de9b6', '#03a9f5'],
                normalizeFunction: 'polynomial'
            });
        })(jQuery);
    </script>

</body>

</html>
