<x-admin title="Danh sách sản phẩm">
    <div class="row">
        <div class="col-md-12 py-3">
            <table class="table">
                <thead>
                    <tr class="bg-dark text-light">
                        <th>#</th>
                        <th>Tên sản phẩm</th>
                        <th>Hình ảnh</th>
                        <th>Giá</th>
                        <th>Mô tả</th>
                        <th>Chiều cao</th>
                        <th class="text-center">Hành động</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($sanpham as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->tensanpham }}</td>
                            <td>{{ $item->hinhanh }}</td>
                            <td>{{ $item->gia }}</td>
                            <td>{{ $item->mota }}</td>
                            <td>{{ $item->chieucao }}</td>
                            <td class="text-center">
                                <a href="" class="text-decoration btn btn-warning text-light"><i
                                        class="fas fa-pen"></i></a>
                                <a href="{{ route('sanpham.xoa', $item->id) }}" class="text-decoration btn btn-danger"><i
                                        class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-admin>
