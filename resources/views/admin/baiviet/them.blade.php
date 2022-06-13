<x-admin title="Thêm bài viết">
    <div class="row">
        <form action="{{ route('baiviet.luu') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="col-md-8">
                <div class="form-group mt-3">
                    <label for="editor1" class="form-label">Nội dung</label>
                    <textarea id="editor1" name="noidung"></textarea>
                    @error('noidung')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <x-textarea name="mota" label="Mô tả" />
                @error('mota')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="col-md-4">
                <x-input name="tieude" label="Tiêu đề" />
                <div class="form-group mt-3">
                    <label for="id_danhmuc" class="form-label">Danh mục bài viết</label>
                    <select name="id_danhmuc" class="form-select" id="id_danhmuc">
                        @if ($danhmucbaiviet->count() > 0)
                            @foreach ($danhmucbaiviet as $item)
                                <option value="{{ $item->id }}">{{ $item->tendanhmuc }}</option>
                            @endforeach
                        @else
                            <option value="">Đang cập nhật...</option>
                        @endif
                    </select>
                </div>
                <x-input name="hinhanh" id="uploadImage" type="file" label="Hình ảnh" />
                <div>
                    <img src="https://customercare.igloosoftware.com/.api2/api/v1/communities/10068556/previews/thumbnails/4fc20722-5368-e911-80d5-b82a72db46f2?width=680&height=680&crop=False"
                        id="image" width="200" height="200" alt="">
                </div>
                <button class="btn btn-dark mt-3">Thêm dữ liệu</button>
            </div>
        </form>
    </div>
</x-admin>
