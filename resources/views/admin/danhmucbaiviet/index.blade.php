<x-admin title="Danh mục bài viết">
    <div class="row">
        @if (Session::has('messasge'))
            <p class="alert bg-success text-light">{{ Session::get('message') }}</p>
        @endif
        <div class="col-md-4">
            <form action="{{ route('danhmucbaiviet.luu') }}" method="post">
                @csrf
                <x-input name="tendanhmuc" label="Tên danh mục" />
                <button class="btn btn-dark">Thêm dữ liệu</button>
            </form>
        </div>
        <div class="col-md-12 mt-3">
            <table class="table">
                <thead class="bg-dark text-light">
                    <tr>
                        <th>#</th>
                        <th>Tên danh mục</th>
                        <th>Tổng bài viết</th>
                        <th>Tải lên</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($danhmucbaiviet as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->tendanhmuc }}</td>
                            <td></td>
                            <td>{{ $item->created_at->diffForHumans() }}</td>
                            <td>
                                <a href="{{ route('danhmucbaiviet.sua', $item->id) }}"
                                    class="text-decoration btn btn-warning text-light"><i class="fas fa-pen"></i></a>
                                <a href="{{ route('danhmucbaiviet.xoa', $item->id) }}"
                                    class="text-decoration btn btn-danger"><i class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-admin>
