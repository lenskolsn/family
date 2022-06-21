<x-admin title="Sửa khách hàng">
    <div class="col-md-6">
        <form action="{{ route('khachhang.luu', $khachhang->id) }}" method="post">
            @csrf
            <x-input name="name" value="{{ $khachhang->name }}" label="Họ tên" />
            <x-input name="email" value="{{ $khachhang->email }}" label="Email" />
            <x-input name="address" value="{{ $khachhang->address }}" label="Địa chỉ" />
            <x-input name="phone" value="{{ $khachhang->phone }}" label="Số điện thoại" />
            <div class="form-group">
                <label class="form-label">Giới tính</label> <br>
                <input checked type="radio" value="0" name="male"> Nam
                <input type="radio" value="1" name="male"> Nữ
            </div>
            <x-input name="password" type="password" label="Mật khẩu" />
            <x-input name="confirm_password" type="password" label="Nhập lại mật khẩu" />
            <button class="btn btn-dark">Cập nhật dữ liệu</button>
        </form>
    </div>
</x-admin>
