<x-trangchu title="Đăng nhập">
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
                margin-right: 5px;
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
            @if (Session::has('message'))
                <p class="alert bg-danger text-light">{{ Session::get('message') }}</p>
            @endif
            <h4 class="text-center">Đăng nhập</h4>
            <form action="{{ route('trangchu.luu_dangnhap') }}" method="post">
                @csrf
                <div class="form-group">
                    <input type="text" placeholder="Email:" name="email">
                    <i class="icon_input fas fa-envelope"></i>
                </div>
                @error('email')
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
                    <button class="text-light p-2 rounded-2 w-100"
                        style="background: rgb(0 178 20); border:  none;">Đăng
                        nhập</button>
                </div>
            </form>
        </div>
    </div>
</x-trangchu>
