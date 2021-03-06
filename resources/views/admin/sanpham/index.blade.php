<x-admin title="Danh sách sản phẩm">
    <div class="row">
        @if (Session::has('message'))
            <p class="alert bg-success text-light">{{ Session::get('message') }}</p>
        @endif
        <div class="col-md-12 py-3">
            {{ $sanpham->links() }}
            <table class="table">
                <thead>
                    <tr class="bg-dark text-light">
                        <th>#</th>
                        <th>Tên sản phẩm</th>
                        <th>Hình ảnh</th>
                        <th>Giá</th>
                        {{-- <th>Mô tả</th> --}}
                        <th>Chiều cao</th>
                        <th>Danh mục</th>
                        <th class="text-center">Hành động</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($sanpham as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->tensanpham }}</td>
                            <td>
                                <img src="/storage/sanpham/{{ $item->hinhanh }}" width="100" class="img-thumbnail">
                            </td>
                            <td>{{ number_format($item->gia) }}</td>
                            {{-- <td>{!!$item->mota!!}</td> --}}
                            <td>
                                @if ($item->chieucao != null)
                                    {{ $item->chieucao }} cm
                                @else
                                    Đang cập nhật...
                                @endif
                            </td>
                            <td>{{ $item->danhmuc->tendanhmuc }}</td>
                            <td class="text-center">
                                <a href="{{ route('sanpham.chitiet', $item->id) }}"
                                    class="text-decoration btn btn-primary text-light"><i class="fas fa-eye"></i></a>
                                <a href="{{ route('sanpham.sua', $item->id) }}"
                                    class="text-decoration btn btn-warning text-light"><i
                                        class="fas fa-pen"></i></a>
                                <a href="{{ route('sanpham.xoa', $item->id) }}"
                                    class="text-decoration btn btn-danger"><i class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-admin>
