<x-admin title="Sửa sản phẩm">
    <div class="row">
        <form action="{{ route('sanpham.luu', $sanpham->id) }}" method="post" enctype="multipart/form-data">
            <div class="col-md-6">
                @csrf
                <x-input name="tensanpham" value="{{ $sanpham->tensanpham }}" label="Tên sản phẩm" />
                <div class="form-group">
                    <label for="id_danhmuc" class="form-label">Danh mục</label>
                    <select class="form-select" name="id_danhmuc">
                        <option value="">
                            <-- chọn một danh mục -->
                        </option>
                        @foreach ($danhmuc as $item)
                            <option value="{{ $item->id }}" @if ($item->id == $sanpham->id_danhmuc) selected @endif>
                                {{ $item->tendanhmuc }}</option>
                        @endforeach
                    </select>
                </div>
                @error('id_danhmuc')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
                <x-input name="gia" value="{{ $sanpham->gia }}" label="Giá" />
                <x-input name="chieucao" value="{{ $sanpham->chieucao }}" label="Chiều cao (cm)" />
                <div class="form-group mt-3">
                    <label for="" class="form-label">Mô tả</label>
                    <textarea name="mota" id="editor1">{!! $sanpham->mota !!}</textarea>
                </div>
                @error('mota')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
                <button class="btn btn-dark mt-3">Cập nhật dữ liệu</button>
            </div>
            <div class="col-md-6">
                <x-input name="hinhanh" type="file" label="Hình ảnh" />
            </div>
        </form>
    </div>
</x-admin>
