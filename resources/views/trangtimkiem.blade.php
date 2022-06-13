<x-trangchu title="Danh mục">
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
        <div class="col-lg-9">
            <div class="row">
                @if ($sanpham->count() > 0)
                    @foreach ($sanpham as $item)
                        <div class="col-lg-3 col-md-4 col-sm-6 py-2">
                            <div class="product card m-auto">
                                <div class="product_img" style="height: 300px;">
                                    <a href="{{ route('trangchu.chitietsanpham', $item->id) }}"><img
                                            src="/storage/sanpham/{{ $item->hinhanh }}" class="card-img-top"
                                            alt="{{ $item->tensanpham }}"></a>
                                </div>
                                <div class="card-body text-center">
                                    <h5 class="card-title fw-bold " style="color: rgb(0 178 20);">
                                        {{ $item->tensanpham }}
                                    </h5>
                                    <p class="card-text " style="color: rgb(0 178 20);">
                                        {{ number_format($item->gia) }}
                                        VNĐ
                                    </p>
                                    <a href="{{ route('trangchu.chitietsanpham', $item->id) }}"
                                        class="text-light p-2 rounded-2" style="background: rgb(0 178 20);">Chi tiết</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <p class="text-danger text-center">Không tìm thấy sản phẩm!</p>
                @endif
            </div>
        </div>
    </div>
</x-trangchu>
