<x-trangchu title="Trang chủ">
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 py-2 col-md-12">
                    <div class="category">
                        <ul class="list-group">
                            <li id="active" class="list-group-item" aria-current="true">
                                <i class="fas fa-bars"></i> Danh mục sản phẩm
                            </li>
                            @foreach ($danhmuc as $item)
                                <li class="list-group-item"><a
                                        href="{{ route('trangchu.danhmucsanpham', $item->id) }}">{{ $item->tendanhmuc }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9 py-2 col-md-12 d-md-block d-none">
                    <div class="banner">
                        <div id="carouselExampleDark" class="carousel carousel-light slide" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0"
                                    class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                                    aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
                                    aria-label="Slide 3"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active" data-bs-interval="10000">
                                    <img src="https://maivangtet.com/wp-content/uploads/2021/10/mai-vang-tet-1536x590.jpg"
                                        class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item" data-bs-interval="2000">
                                    <img src="https://maivangtet.com/wp-content/uploads/2021/10/panel-mai-vang-tet-binh-loi-1536x590.jpg"
                                        class="d-block w-100" alt="...">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="new_product bg-light">
        <div class="row py-3">
            <h4>SẢN PHẨM MỚI NHẤT</h4>
        </div>
    </div>
    <div class="row mt-3">
        <div>{{ $sanphammoi->links() }}</div>
        @foreach ($sanphammoi as $item)
            <div class="col-lg-3 col-md-4 col-sm-6 py-2">
                <div class="product card m-auto">
                    <div class="product_img">
                        <a href="{{ route('trangchu.chitietsanpham', $item->id) }}"><img
                                src="/storage/sanpham/{{ $item->hinhanh }}" class="card-img-top"
                                alt="{{ $item->tensanpham }}"></a>
                    </div>
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold " style="color: rgb(0 178 20);">{{ $item->tensanpham }}</h5>
                        <p class="card-text " style="color: rgb(0 178 20);">{{ number_format($item->gia) }} VNĐ
                        </p>
                        <a href="{{ route('trangchu.chitietsanpham', $item->id) }}" class="text-light p-2 rounded-2"
                            style="background: rgb(0 178 20);">Chi tiết</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    @foreach ($danhmuc as $item)
        <div class="row mt-3">
            @if ($item->sanpham->count() > 0)
                <div class="col-md-3">
                    <h5 class="fw-bold pb-2"
                        style="color: rgb(61, 184, 75); border-bottom: 3px solid rgb(61, 184, 75); text-transform: uppercase;">
                        {{ $item->tendanhmuc }}</h5>
                </div>
                <div class="col-md-12">
                    <div class="row">
                        @foreach ($item->sanpham as $sp)
                            <div class="col-lg-3 col-md-4 col-sm-6 py-2">
                                <div class="product card m-auto">
                                    <div class="product_img">
                                        <a href="{{ route('trangchu.chitietsanpham', $sp->id) }}"><img
                                                src="/storage/sanpham/{{ $sp->hinhanh }}" class="card-img-top"
                                                alt="{{ $sp->tensanpham }}"></a>
                                    </div>
                                    <div class="card-body text-center">
                                        <h5 class="card-title fw-bold " style="color: rgb(0 178 20);">
                                            {{ $sp->tensanpham }}</h5>
                                        <p class="card-text " style="color: rgb(0 178 20);">
                                            {{ number_format($sp->gia) }} VNĐ</p>
                                        <a href="{{ route('trangchu.chitietsanpham', $sp->id) }}"
                                            class="text-light p-2 rounded-2" style="background: rgb(0 178 20);">Chi
                                            tiết</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif
        </div>
    @endforeach
</x-trangchu>
