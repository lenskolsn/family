<x-trangchu title="Trang chủ">
    <div class="row mt-3">
        @foreach ($sanpham as $item)
            <div class="col-md-3">
                <div class="card m-auto">
                    <img src="/storage/sanpham/{{$item->hinhanh}}" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold " style="color: rgb(0 178 20);">{{$item->tensanpham}}</h5>
                        <p class="card-text " style="color: rgb(0 178 20);">{{number_format($item->gia)}} VNĐ</p>
                        <a href="" class="text-light p-2 rounded-2" style="background: rgb(0 178 20);">Chi tiết</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</x-trangchu>
