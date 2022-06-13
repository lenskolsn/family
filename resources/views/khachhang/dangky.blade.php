<x-trangchu title="Đăng ký">
    @section('login_khachhang')
        <style>
            h1 {
                color: red;
            }

            .form-group {
                margin-bottom: 1rem;
                position: relative;
                display: flex;
            }

            .form-group label {
                position: absolute;
                top: 50%;
                transform: translateY(-50%);
                pointer-events: none;
            }

            .form-group input,
            select {
                width: 100%;
                background: none;
                outline: none;
                border: none;
                padding: 8px 5px;
                border-bottom: 3px solid rgb(61, 184, 75);
            }

            .form-group .icon_input {
                position: absolute;
                right: 0;
                top: 50%;
                transform: translateY(-50%);
                color: rgb(61, 184, 75);
            }

        </style>
    @endsection
    <div class="row d-flex justify-content-center">
        <div class="col-md-4">
            <img src="https://b-f6-zpcloud.zdn.vn/326401507244711501/163cb2eebbd77b8922c6.jpg" class="img-thumbnail"
                width="100%" alt="">
        </div>
        <div class="col-md-4">
            <h4 class="text-center">Đăng ký tài khoản</h4>
            <form action="{{ route('trangchu.luu_dangky') }}" method="post">
                @csrf
                <div class="form-group">
                    <input type="text" value="{{old('name')}}" placeholder="Họ tên: " name="name">
                    <i class="icon_input fas fa-user"></i>
                </div>
                @error('name')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
                <div class="form-group">
                    <input type="text" value="{{old('email')}}" placeholder="Email:" name="email">
                    <i class="icon_input fas fa-envelope"></i>
                </div>
                @error('email')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
                <div class="form-group">
                    <input type="text" value="{{old('address')}}" placeholder="Địa chỉ:" name="address">
                    <i class="icon_input fas fa-location-arrow"></i>
                </div>
                @error('address')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
                <div class="mt-3 px-1" style="border-bottom: 3px solid rgb(61, 184, 75);">
                    <label for="" class="form-label text-secondary">Giới tính</label> <br>
                    <input checked type="radio" value="0" name="male"> Nam
                    <input type="radio" value="1" name="male"> Nữ
                </div>
                @error('male')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
                <div class="form-group">
                    <input type="text" value="{{old('phone')}}" placeholder="Số điện thoại:" name="phone">
                    <i class="icon_input fas fa-phone"></i>
                </div>
                @error('phone')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
                <div class="form-group">
                    <input placeholder="Mật khẩu:" type="password" name="password">
                    <i class="icon_input fas fa-lock"></i>
                </div>
                @error('password')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
                <div class="form-group">
                    <input placeholder="Nhập lại mật khẩu:" type="password" name="confirm_password">
                    <i class="icon_input fas fa-lock"></i>
                </div>
                @error('confirm_password')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
                <div class="form-group">
                    <button class="text-light p-2 rounded-2 w-100"
                        style="background: rgb(0 178 20); border:  none;">Đăng
                        ký</button>
                </div>
            </form>
        </div>
    </div>
</x-trangchu>
