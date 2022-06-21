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
            <ul>
                <li>Giá: {{ number_format($sanpham->gia) }} VNĐ</li>
                @if ($sanpham->chieucao != null)
                    <li>Chiều cao: {{ $sanpham->chieucao }} cm</li>
                @endif
                <li>Danh mục: {{ $sanpham->danhmuc->tendanhmuc }}</li>
            </ul>
            <div>
                @if ($sanpham->mota != null)
                    {!! $sanpham->mota !!}
                @else
                    Đang cập nhật...
                @endif
            </div>
            <div class="mua-hang">
                <div class="row">
                    <div class="col-md-6 mt-3">
                        <a href="" class="btn text-light w-100" style="background: #21569a;">Facebook</a>
                    </div>
                    <div class="col-md-6 mt-3">
                        <a href="" class="btn text-light w-100" style="background: #00abff;">Zalo</a>
                    </div>
                    <div class="col-md-6 mt-3">
                        <a href="" class="btn text-light w-100 btn-warning">Liên hệ: 0819817373</a>
                    </div>
                    <div class="col-md-6 mt-3">
                        <a href="" class="btn text-light w-100 btn-danger">Liên hệ: 0354632349 (Nam Lê)</a>
                    </div>
                    <div class="col-md-12 mt-3">
                        <a href="" class="btn w-100 text-light" style="background: #3db84b;" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">
                            Mua Hàng
                            <p style="font-size: 13px;">(Cách nhanh nhất để gửi đơn hàng cho chúng tôi)</p>
                        </a>
                    </div>
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header" style="background: #3db84b;">
                                    <h6 class="modal-title text-light" id="exampleModalLabel">Đặt mua
                                        {{ $sanpham->tensanpham }}</h6>
                                    <button type="button" class="btn text-light" data-bs-dismiss="modal"><i
                                            class="fas fa-times"></i></button>
                                </div>
                                <form action="" method="post">
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-md-6 d-flex align-items-center">
                                                <div>
                                                    <img src="/storage/sanpham/{{ $sanpham->hinhanh }}" width="100"
                                                        class="rounded shadow-sm" alt="">
                                                </div>
                                                <h6 class="ms-2">{{ $sanpham->tensanpham }}</h6>
                                            </div>
                                            <div class="col-md-6">
                                                <h6>Thông tin người mua</h6>
                                                @csrf
                                                <input type="radio" name="male"> Anh
                                                <input type="radio" name="male"> Chị
                                                <div class="row">
                                                    <div class="col-md-6 mt-2">
                                                        <input type="text" name="name" class="w-100"
                                                            placeholder="Họ và tên"
                                                            style="font-size: 13px; padding: 2px;">
                                                    </div>
                                                    <div class="col-md-6 mt-2">
                                                        <input type="text" name="phone" class="w-100"
                                                            placeholder="Số điện thoại"
                                                            style="font-size: 13px; padding: 2px;">
                                                    </div>
                                                    <div class="col-md-12 mt-2">
                                                        <input type="text" name="email" class="w-100"
                                                            placeholder="Email" style="font-size: 13px; padding: 2px;">
                                                    </div>
                                                    <div class="col-md-12 mt-2">
                                                        <input type="text" name="address" class="w-100"
                                                            placeholder="Địa chỉ"
                                                            style="font-size: 13px; padding: 2px;">
                                                    </div>
                                                    <div class="col-md-12 mt-3">
                                                        <textarea class="w-100" placeholder="Ghi chú đơn hàng" style="font-size: 13px; padding: 2px;" name="ghichu"
                                                            rows="3"></textarea>
                                                    </div>
                                                    <p>Tổng: <span class="text-danger fw-bold">0 <u>đ</u></span></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger btn-sm"
                                            data-bs-dismiss="modal">Đóng</button>
                                        <button type="submit" class="btn text-light btn-sm"
                                            style="background: #3db84b;">Đặt
                                            hàng ngay</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
