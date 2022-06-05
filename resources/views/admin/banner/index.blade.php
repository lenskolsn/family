    <x-admin title="Danh sách banner">
        <div class="row">
            <div class="col-md-4">
                <form action="{{ route('banner.luu') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <x-input name='hinhanh' label="Hình ảnh" type="file" />
                    <button class="btn btn-dark text-light">Thêm dữ liệu</button>
                </form>
            </div>
            <div class="col-md-12 mt-3">
                <table class="table">
                    <thead class="bg-dark text-light">
                        <tr>
                            <th>#</th>
                            <th>Hình ảnh</th>
                            <th>Tải lên</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($banner as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>
                                    <img src="/storage/banner/{{ $item->hinhanh }}" class="rounded img-thumbnail" width="200"
                                        alt="">
                                </td>
                                <td>{{ $item->created_at->diffForHumans() }}</td>
                                <td>
                                    <a href="" class="btn btn-warning text-light"><i class="fas fa-edit"></i></a>
                                    <a href="" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </x-admin>
