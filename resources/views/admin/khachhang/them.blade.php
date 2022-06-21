<x-admin title="Thêm khách hàng">
    <div class="col-md-6">
        <form action="{{ route('khachhang.luu') }}" method="post">
            @csrf
            <x-input name="name" label="Họ tên" />
            <x-input name="email" label="Email" />
            <x-input name="address" label="Địa chỉ" />
            <x-input name="phone" label="Số điện thoại" />
            <div class="form-group">
                <label class="form-label">Giới tính</label> <br>
                <input checked type="radio" value="0" name="male"> Nam
                <input type="radio" value="1" name="male"> Nữ
            </div>
            <x-input name="password" type="password" label="Mật khẩu" />
            <x-input name="confirm_password" type="password" label="Nhập lại mật khẩu" />
            <button class="btn btn-dark">Thêm dữ liệu</button>
        </form>
    </div>
</x-admin>
