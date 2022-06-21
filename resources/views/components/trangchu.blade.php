<!DOCTYPE html>
<html lang="en">

<head>
    <title>{{ $attributes['title'] }}</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <link rel="icon" href="https://cdn.iconscout.com/icon/premium/png-256-thumb/house-1701-818513.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="/css/style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
    @yield('login_khachhang')
</head>

<body>
    <div class="goi-ngay d-flex align-items-center">
        <div class="phone">
            <i class="fas fa-phone"></i>
        </div>
        <span class="ms-2">Gọi Ngay</span>
    </div>
    <!-- Top -->
    <div class="top">
        <div class="container">
            <div class="row p-1">
                <div class="col-lg-8 col-6 text-light">
                    <span><i class="fas fa-phone"></i> 0819817373</span>
                    <span><i class="fas fa-phone"></i> 0354632349 (Nam Lê)</span>
                </div>
                <div class="col-lg-4 col-6 text-light text-end">
                    <span>Liên hệ:</span>
                    <span class="ms-2"><a href="https://www.facebook.com/LenskoLSN/" class="text-light"><i
                                class="fab fa-facebook"></i></a></span>
                    <span class="ms-2"><a href="" class="text-light"><i
                                class="fas fa-envelope"></i></a></span>
                </div>
            </div>
        </div>
    </div>
    <!-- Header -->
    <header class="bg-white">
        <div class="container">
            <div class="row py-2">
                <div class="col-md-3">
                    <div class="header_logo">
                        <a href="{{ route('trangchu') }}"><img
                                src="https://b-f4-zpcloud.zdn.vn/1321182270169760295/6606f4609cd75c8905c6.jpg"
                                alt="" /></a>
                    </div>
                </div>
                <div class="col-md-5 py-2">
                    <form action="{{ route('trangchu.trangtimkiem') }}">
                        <div class="header_search">
                            <input type="text" name="key" placeholder="Nhập từ khóa để tìm kiếm..."
                                style="font-size: 15px;" />
                            <button><i class="fas fa-search"></i></button>
                        </div>
                    </form>
                </div>
                <div class="col-md-3 d-flex justify-content-end align-items-center">
                    <div class="header_login fw-bold ">
                        @if (Auth::guard('khachhang')->check())
                            <div class="user-area dropdown float-right">
                                <a style="font-size: 14px;" href="#" class="dropdown-toggle text-secondary"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img class="rounded-circle img-thumbnail" width="40"
                                        src="/storage/avatar/{{ Auth::guard('khachhang')->user()->avatar }}">
                                    {{ Auth::guard('khachhang')->user()->name }}
                                </a>

                                <div class="user-menu dropdown-menu">
                                    <a style="font-size: 14px;" class="nav-link text-secondary"
                                        href="{{ route('trangchu.thongtin') }}"><i class="fa fa-user"></i> Tài
                                        khoản</a>

                                    <a style="font-size: 14px;" class="nav-link text-secondary"
                                        href="{{ route('trangchu.dangxuat') }}"><i class="fa fa-power-off"></i> Đăng
                                        xuất</a>
                                </div>
                            </div>
                        @else
                            <div>
                                <a style="font-size: 14px;" href="{{ route('trangchu.dangky') }}"
                                    class="text-secondary">ĐĂNG
                                    KÝ /</a>
                                <a style="font-size: 14px;" href="{{ route('trangchu.dangnhap') }}"
                                    class="text-secondary">ĐĂNG NHẬP</a>
                            </div>
                        @endif
                    </div>
                    <div class="header_cart ms-2 fw-bold">
                        <a style="font-size: 14px;" href="">GIỎ HÀNG <i class="fas fa-shopping-cart"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white border border-1 shadow-sm">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse d-flex justify-content-between" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('trangchu') }}">Trang chủ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('trangchu.gioithieu') }}">Giới thiệu</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Sản phẩm
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            @foreach ($danhmuc as $item)
                                <li><a class="dropdown-item"
                                        href="{{ route('trangchu.danhmucsanpham', $item->id) }}">{{ $item->tendanhmuc }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('trangchu.baiviet') }}">Bài viết</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('trangchu.lienhe') }}">Liên hệ</a>
                    </li>
                </ul>
                <div class="contact">
                    <span style="background: rgb(61, 184, 75); padding: 10px 15px; border-radius: 16px;"><a href=""
                            class="text-light">0354632349 (Nam Lê)</a></span>
                </div>
            </div>
        </div>
    </nav>
    <!-- Category and Banner -->
    <section>
        <div class="container bg-white my-3 p-3 shadow-sm">
            {{ $slot }}
        </div>
    </section>
    <footer class="border bg-white border-1 shadow-sm">
        <div class="container">
            <div class="row py-5">
                <div class="col-md-4">
                    <p class="h5 fw-bold">VƯỜN MAI PHÚ THUẬN A</p>
                    <p class="text-secondary">Chuyên cung cấp Mai vàng sỉ & lẻ
                        Dịch vụ cho thuê Mai vàng chưng tết 2022 uy tín</p>
                    <p class="text-secondary">Nhận chăm sóc Mai vàng sau tết.</p>
                    <ul class="text-secondary">
                        <li>Địa chỉ: Ấp phú hòa B, xã Phú Thuận A, huyện Hồng Ngự, tỉnh Đồng Tháp</li>
                        <li>Điện thoại: <i class="fas fa-phone"></i> 0819817373 <i class="fas fa-phone"></i>
                            0354632349 (Nam Lê)</li>
                        <li>Email: lnam6507@gmail.com</li>
                        <li>Website: vuonmaiphuthuan.com</li>
                        <li>Facebook: <a
                                href="https://www.facebook.com/LenskoLSN/">https://www.facebook.com/LenskoLSN/</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <p class="h5 fw-bold">Fanpage của chúng tôi</p>
                    <div class="fb-page m-auto" data-href="https://www.facebook.com/NCSfanmade" data-tabs="timeline"
                        data-width="" data-height="" data-small-header="false" data-adapt-container-width="true"
                        data-hide-cover="false" data-show-facepile="true">
                        <blockquote cite="https://www.facebook.com/NCSfanmade" class="fb-xfbml-parse-ignore"><a
                                href="https://www.facebook.com/NCSfanmade">LSN</a></blockquote>
                    </div>
                </div>
                <div class="col-md-4">
                    <p class="h5 fw-bold">BẢN ĐỒ VƯỜN MAI PHÚ THUẬN A</p>
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d4681.049348619204!2d105.28258696600258!3d10.724142865298857!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x310a3b0dfa8ad30f%3A0x7a3e09bfb39d8cba!2zVsaw4budbiBNYWkgUGjDuiBUaHXhuq1uIEE!5e1!3m2!1svi!2s!4v1654075111809!5m2!1svi!2s"
                        width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
        <p class="text-center py-3 m-0 text-light" style="background: rgb(61, 184, 75);">VƯỜN MAI PHÚ THUẬN A</p>
    </footer>

    <script src="/vendors/jquery/dist/jquery.min.js"></script>
    <script src="/vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="/js/home.js"></script>

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous"
        src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v14.0&appId=238683943543481&autoLogAppEvents=1"
        nonce="JxBedrik"></script>
</body>

</html>
