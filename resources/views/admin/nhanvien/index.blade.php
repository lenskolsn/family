<x-admin title="Danh sách nhân viên">
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
            @foreach ($nhanvien as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td class="d-flex">
                        <img src="/storage/avatar/{{ $item->avatar }}" class="rounded border border-1" width="80"
                            height="80" alt="">
                        <div class="ms-4">
                            <ul style="font-size: 14px;" class="text-secondary">
                                <li>Họ tên: {{ $item->name }}</li>
                                <li>Email: {{ $item->email }}</li>
                                <li>Chức vụ:
                                    @if ($item->is_admin == 1)
                                        <span class="badge bg-dark">Quản trị viên</span>
                                    @else
                                        <span class="badge bg-warning">Nhân viên</span>
                                    @endif
                                </li>
                            </ul>
                        </div>
                    </td>
                    <td>{{ $item->created_at->diffForHumans() }}</td>
                    <td class="text-center">
                        <a href="{{ route('nhanvien.chitiet', $item->id) }}"
                            class="text-decoration btn btn-info text-light"><i class="fas fa-eye"></i></a>
                        <a href="{{ route('nhanvien.sua', $item->id) }}"
                            class="text-decoration btn btn-warning text-light"><i class="fas fa-pen"></i></a>
                        <a href="{{ route('nhanvien.xoa', $item->id) }}" class="text-decoration btn btn-danger"><i
                                class="fas fa-trash"></i></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</x-admin>
