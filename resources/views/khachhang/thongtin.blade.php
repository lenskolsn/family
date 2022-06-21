<x-trangchu title="{{ Auth::guard('khachhang')->user()->name }}">
    <div class="row profile">
        <p class="badge" style="background: #3db84b;">Thông tin tài khoản</p>
        <div class="col-md-4 m-auto card">
            @if (Session::has('message'))
                <p class="alert bg-success text-light mt-2">{{ Session::get('message') }}</p>
            @endif
            <div class="profile-sidebar d-flex align-items-center py-2">
                <!-- SIDEBAR USERPIC -->
                <div class="profile-userpic text-center">
                    <form action="{{ route('khachhang.doiavatar') }}" method="post" class="mt-1"
                        enctype="multipart/form-data">
                        @csrf
                        <label style="cursor: pointer;" for="uploadAvatar">
                            <img id="avatar_user" src="/storage/avatar/{{ Auth::guard('khachhang')->user()->avatar }}"
                                class="img-thumbnail rounded-circle" width="150" height="150">
                        </label>
                        <input type="file" class="d-none" id="uploadAvatar" name="avatar">
                        <br>
                        <button class="btn btn-sm btn-success mt-3"><i class="fas fa-save fs-5"></i></button>
                    </form>
                </div>
                <div class="profile-usertitle ms-3 text-secondary mt-1" style="font-size: 14px;">
                    <div class="profile-usertitle-name">
                        Họ tên: {{ Auth::guard('khachhang')->user()->name }}
                    </div>
                    <div class="profile-usertitle-name">
                        Email: {{ Auth::guard('khachhang')->user()->email }}
                    </div>
                    <div class="profile-usertitle-name">
                        Địa chỉ: {{ Auth::guard('khachhang')->user()->address }}
                    </div>
                    <div class="profile-usertitle-name">
                        Số diện thoại: {{ Auth::guard('khachhang')->user()->phone }}
                    </div>
                    <div class="profile-usertitle-name">
                        Giới tính:
                        @if (Auth::guard('khachhang')->user()->male == 0)
                            Nam
                        @else
                            Nữ
                        @endif
                    </div>
                    <div class="profile-usertitle-name">
                        Đăng ký:
                        {{ Auth::guard('khachhang')->user()->created_at->diffForHumans() }}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-8">

        </div>
    </div>
</x-trangchu>
