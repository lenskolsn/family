<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="/login_admin/fonts/icomoon/style.css">

    <link rel="stylesheet" href="/login_admin/css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/login_admin/css/bootstrap.min.css">

    <!-- Style -->
    <link rel="stylesheet" href="/login_admin/css/style.css">

    <title>Login #8</title>
</head>

<body>
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-6 order-md-2 text-center">
                    <img src="https://b-f6-zpcloud.zdn.vn/326401507244711501/163cb2eebbd77b8922c6.jpg" alt="Image"
                        class="img-thumbnail" width="70%">
                </div>
                <div class="col-md-6 contents">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="mb-4">
                                <h3><strong>Login Admin</strong></h3>
                            </div>
                            <form action="{{ route('admin.luu_dangnhap') }}" method="post">
                                @csrf
                                <div class="form-group first">
                                    <label for="email">Email</label>
                                    <input type="text" class="form-control" name="email" id="email">
                                    @error('email')
                                        <span class="badge bg-danger text-light">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group last mb-4">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" name="password" id="password">
                                    @error('password')
                                        <span class="badge bg-danger text-light">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="d-flex mb-5 align-items-center">
                                    <label class="control control--checkbox mb-0"><span class="caption">Remember
                                            me</span>
                                        <input type="checkbox" checked="checked" />
                                        <div class="control__indicator"></div>
                                    </label>
                                    <span class="ml-auto"><a href="#" class="forgot-pass">Forgot
                                            Password</a></span>
                                </div>

                                <button type="submit"
                                    class="btn text-white btn-block btn-primary">Log In</button>

                                <span class="d-block text-left my-4 text-muted"> or sign in with</span>

                                <div class="social-login">
                                    <a href="#" class="facebook">
                                        <span class="icon-facebook mr-3"></span>
                                    </a>
                                    <a href="#" class="twitter">
                                        <span class="icon-twitter mr-3"></span>
                                    </a>
                                    <a href="#" class="google">
                                        <span class="icon-google mr-3"></span>
                                    </a>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>


    <script src="/login_admin/js/jquery-3.3.1.min.js"></script>
    <script src="/login_admin/js/popper.min.js"></script>
    <script src="/login_admin/js/bootstrap.min.js"></script>
    <script src="/login_admin/js/main.js"></script>
</body>

</html>
