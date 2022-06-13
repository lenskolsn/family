<x-admin title="Sửa banner">
    <div class="col-md-4">
        <form action="{{ route('banner.luu',$banner->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            <x-input name='hinhanh' label="Hình ảnh" type="file" />
            <button class="btn btn-dark text-light mb-3">Cập nhật dữ liệu</button>
        </form>
    </div>
</x-admin>