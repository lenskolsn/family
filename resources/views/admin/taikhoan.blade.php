<x-admin title="Thông tin">
    <div class="row profile">
        <div class="col-md-3 m-auto card">
            @if (Session::has('message'))
                <p class="alert bg-success text-light">{{ Session::get('message') }}</p>
            @endif
            <div class="profile-sidebar">
                <!-- SIDEBAR USERPIC -->
                <div class="profile-userpic text-center">
                    <form action="{{ route('admin.doiavatar') }}" method="post" class="mt-1" enctype="multipart/form-data">
                        @csrf
                        <label style="cursor: pointer;" for="uploadImage">
                            <img id="image" src="/storage/avatar/{{ Auth::user()->avatar }}"
                                class="img-thumbnail" width="200" height="200">
                        </label>
                        <input type="file" class="d-none" id="uploadImage" name="avatar">
                        <button class="btn btn-sm btn-success"><i class="fas fa-save fs-5"></i></button>
                    </form>
                </div>
                <!-- END SIDEBAR USERPIC -->
                <!-- SIDEBAR USER TITLE -->
                <div class="profile-usertitle">
                    <div class="profile-usertitle-name">
                        <i class="fas fa-user-shield"></i> {{ Auth::user()->name }}
                    </div>
                    <div class="profile-usertitle-name">
                        <i class="fas fa-envelope"></i> {{ Auth::user()->email }}
                    </div>
                    <div class="profile-usertitle-job">
                        @if (Auth::user()->is_admin == 0)
                            <i class="fas fa-shield"></i> Nhân viên
                        @else
                            <i class="fas fa-shield"></i> Quản trị viên
                        @endif
                    </div>
                    <div class="profile-usertitle-name">
                        <i class="fas fa-check"></i> {{ Auth::user()->created_at->diffForHumans() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin>
