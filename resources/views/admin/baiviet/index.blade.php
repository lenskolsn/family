<x-admin title="Danh sách bài viết">
    <div class="row">
        @if (Session::has('message'))
            <p class="alert bg-success text-light">{{ Session::get('message') }}</p>
        @endif
        <div class="col-md-12 mt-3">
            <table class="table">
                <thead class="bg-dark text-light">
                    <tr>
                        <th>#</th>
                        <th style="width: 500px;">Bài viết</th>
                        <th>Danh mục</th>
                        <th>Tải lên</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($baiviet as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td class="d-flex">
                                <img src="/storage/anhbaiviet/{{ $item->hinhanh }}" width="80" height="80">
                                <div class="ms-4">
                                    <ul class="m-0 p-0">
                                        <li style="font-size: 14px;">{{ $item->tieude }}</li>
                                        <li class="text-secondary" style="font-size: 13px;">{{ $item->mota }}</li>
                                    </ul>
                                </div>
                            </td>
                            <td>{{ $item->danhmucbaiviet->tendanhmuc }}</td>
                            <td>{{ $item->created_at->diffForHumans() }}</td>
                            <td>
                                <a href="{{ route('baiviet.sua', $item->id) }}" class="btn btn-warning text-light"><i
                                        class="fas fa-edit"></i></a>
                                <a href="{{ route('baiviet.xoa', $item->id) }}" class="btn btn-danger"><i
                                        class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-admin>
