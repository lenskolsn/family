<x-trangchu title="{{ $sanpham->tensanpham }} - Vườn Mai Phú Thuận A">
    {{-- Hiển thị chi tiết sản phẩm --}}
    <div class="row pb-3" style="border-bottom: 1px solid #dadada;">
        <div class="col-md-4">
            <div class="product_img">
                <img src="/storage/sanpham/{{ $sanpham->hinhanh }}" width="100%" alt="{{ $sanpham->tensanpham }}">
            </div>
            <div class="img_thumbnail d-flex justify-content-between mt-3">
                <img src="/storage/sanpham/{{ $sanpham->hinhanh }}" width="70" height="70" alt="">
                <img src="/storage/sanpham/{{ $sanpham->hinhanh }}" width="70" height="70" alt="">
                <img src="/storage/sanpham/{{ $sanpham->hinhanh }}" width="70" height="70" alt="">
                <img src="/storage/sanpham/{{ $sanpham->hinhanh }}" width="70" height="70" alt="">
            </div>
        </div>
        <div class="col-md-5" style="border-right: 1px solid #dadada;">
            <p class="text-secondary">Trang chủ / <span
                    style="color: rgb(61, 184, 75);">{{ $sanpham->tensanpham }}</span></p>
            <h4 class="fw-bold" style="color: rgb(61, 184, 75);">{{ $sanpham->tensanpham }}</h4>
            <p>Giá: {{ number_format($sanpham->gia) }} VNĐ</p>
            <p>Chiều cao: {{ $sanpham->chieucao }} cm</p>
            <p>{!! $sanpham->mota !!}</p>
            <p>Danh mục: {{ $sanpham->danhmuc->tendanhmuc }}</p>
        </div>
        <div class="col-md-3">
            <div class="hotline">
                Mọi nhu cầu tư vấn về sản phẩm, vui lòng gọi trực tiếp: 0849817373 - 0354632349 (Nam Lê)
            </div>
            <span class="my-3 d-block">Thông tin của nhà vườn</span>
            <div class="thongtincuahang">
                Đường xã Phú Thuận A, Phú Thuận A, Hồng Ngự, Đồng Tháp, Việt Nam
            </div>
        </div>
    </div>
    {{-- Mô tả sản phẩm --}}
    <div class="row mt-3">
        <h5 class="fw-bold pb-2 w-25" style="color: rgb(61, 184, 75);
        border-bottom: 3px solid rgb(61, 184, 75);">Mô tả</h5>
        <div class="col-md-12">
            <p>{!! $sanpham->mota !!}</p>
        </div>
    </div>
</x-trangchu>
