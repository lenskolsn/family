<x-admin title="Sửa danh mục">
    <div class="col-md-4">
        <form action="{{ route('danhmuc.luu', $danhmuc->id) }}" method="post">
            @csrf
            <x-input name="tendanhmuc" value="{{ $danhmuc->tendanhmuc }}" label="Tên danh mục" />
            <button class="btn btn-dark mb-3">Cập nhật dữ liệu</button>
        </form>
    </div>
</x-admin>
