<x-admin title="Thêm sản phẩm">
    <div class="row">
        <form action="{{ route('sanpham.luu') }}" method="post" enctype="multipart/form-data">
            <div class="col-md-6">
                @csrf
                <x-input name="tensanpham" label="Tên sản phẩm" />
                <x-select-danhmuc />
                <x-input name="gia" label="Giá" />
                <x-input name="chieucao" label="Chiều cao (cm)" />
                <x-textarea name="mota" label="Mô tả" />
                @error('mota')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
                <button class="btn btn-dark mt-3">Thêm dữ liệu</button>
            </div>
            <div class="col-md-6">
                <x-input name="hinhanh" type="file" label="Hình ảnh" />
            </div>
        </form>
    </div>
</x-admin>
