<x-admin title="Chi tiết sản phẩm">
    <div class="row d-flex justify-content-center py-5">
        <div class="col-md-4 py-2">
            <img src="/storage/sanpham/{{ $sanpham->hinhanh }}" class="img-thumbnail"
                alt="{{ $sanpham->tensanpham }}">
        </div>
        <div class="col-md-4 py-2">
            <p class="h4 fw-bold">Tên sản phẩm: {{ $sanpham->tensanpham }}</p>
            <p>Giá: {{ $sanpham->gia }}</p>
            <p>Chiều cao: {{ $sanpham->chieucao }} cm</p>
            <p>Mô tả: {!! $sanpham->mota !!}</p>
        </div>
    </div>
</x-admin>
