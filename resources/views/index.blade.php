<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('/SBAdmin/login/css/bootstrap.min.css') }}" />

    <!-- Style -->
    <link rel="stylesheet" href="{{ asset('/SBAdmin/login/css/style.css') }}" />

    <title>E-Absensi</title>
</head>

<body>
    <div class="content">
        <div class="container" style="margin-top: 7%">
            <div class="d-flex justify-content-center">
                <div class="col-md-6">
                    <img src="{{ asset('/SBAdmin/login/img/sabang.png') }}" alt="Image" class="img-fluid" style="margin-top: 90px;" />
                </div>
                <div class="col-md-6 contents">
                    <div class="row justify-content-center align-middle">
                        <div class="col-md-8">
                            <h3 class="mb-5 text-center" style="font-weight: bold; color: #3d64d3">
                                E-Absensi
                            </h3>
                            <div class="mb-4">
                                <p>
                                    <span style="color: #3d64d3; font-weight: bolder">Login</span>
                                    as Admin
                                </p>
                            </div>
                            <form action="{{ route('auth.login') }}" method="post">
                                @csrf
                                <div class="form-group first mb-3">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" value="{{ old('email') }}" />
                                </div>
                                <div class="form-group last mb-4">
                                    <label for="password">Password</label>
                                    <input type="password" name="password" class="form-control" id="password" />
                                </div>
                                    <button type="submit" class="btn btn-primary w-100">Login</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </form>
    <script src="{{ asset('/SBAdmin/login/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('/SBAdmin/login/js/popper.min.js') }}"></script>
    <script src="{{ asset('/SBAdmin/login/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('/SBAdmin/login/js/main.js') }}"></script>
</body>

</html>
