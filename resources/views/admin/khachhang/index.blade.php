<x-admin title="Danh sách khách hàng">
    <table class="table">
        <thead>
            <tr class="bg-dark text-light">
                <th>#</th>
                <th>Thông tin</th>
                <th>Đăng ký</th>
                <th class="text-center">Chức năng</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($khachhang as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td class="d-flex">
                        <img src="/storage/avatar/{{ $item->avatar }}" class="rounded border border-1" width="80"
                            height="80" alt="">
                        <div class="ms-4">
                            <ul style="font-size: 14px;" class="text-secondary">
                                <li>Họ tên: {{ $item->name }}</li>
                                <li>Email: {{ $item->email }}</li>
                                <li>Địa chỉ: {{ $item->address }}</li>
                                <li>Số điện thoại: {{ $item->phone }}</li>
                                <li>Giới tính:
                                    @if ($item->male == 0)
                                        Nam
                                    @else
                                        Nữ
                                    @endif
                                </li>
                            </ul>
                        </div>
                    </td>
                    <td>{{ $item->created_at->diffForHumans() }}</td>
                    <td class="text-center">
                        <a href="{{ route('khachhang.chitiet', $item->id) }}"
                            class="text-decoration btn btn-info text-light"><i class="fas fa-eye"></i></a>
                        <a href="{{ route('khachhang.sua', $item->id) }}"
                            class="text-decoration btn btn-warning text-light"><i class="fas fa-pen"></i></a>
                        <a href="{{ route('khachhang.xoa', $item->id) }}" class="text-decoration btn btn-danger"><i
                                class="fas fa-trash"></i></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</x-admin>
