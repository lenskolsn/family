<x-admin title="Danh mục">
    <div class="row">
        <div class="col-md-4">
            <form action="{{route('danhmuc.luu')}}" method="post">
                @csrf
                <x-input name="tendanhmuc" label="Tên danh mục" />
                <button class="btn btn-dark mt-3">Thêm dữ liệu</button>
            </form>
        </div>
        <div class="col-md-12 py-3">
            <table class="table">
                <thead>
                    <tr class="bg-dark text-light">
                        <th>#</th>
                        <th>Tên danh mục</th>
                        <th>Tổng sản phẩm</th>
                        <th class="text-center">Hành động</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($danhmuc as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->tendanhmuc}}</td>
                        <td></td>
                        <td class="text-center">
                            <a href="" class="text-decoration btn btn-warning text-light"><i class="fas fa-pen"></i></a>
                            <a href="{{route('danhmuc.xoa',$item->id)}}" class="text-decoration btn btn-danger"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-admin>
