<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <title>
        Argon Dashboard 3 by Creative Tim
    </title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <link href="https://demos.creative-tim.com/argon-dashboard-pro/assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="https://demos.creative-tim.com/argon-dashboard-pro/assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- CSS Files -->
    @vite('resources/css/dashboard/argon-dashboard.css?v=2.1.0')
</head>

<body>
    <div class="container-fluid py-4">
        <div class="card shadow-lg mx-4 card-profile-top">
            <div class="card-body p-3">
                <div class="row gx-4">
                    <div class="col-auto">
                        <div class="avatar avatar-xl position-relative">
                            <img src="{{ Vite::asset('resources/img/product_img/apel.jpg') }}" alt="profile_image"
                                class="w-100 h-100 border-radius-lg shadow-sm">
                        </div>
                    </div>
                    <div class="col-auto my-auto">
                        <div class="h-100">
                            <h5 class="mb-1">
                                Gifari Fajar Maulana
                            </h5>
                            <p class="mb-0 font-weight-bold text-sm">
                                <span>083888822</span> | <span>gifarifajar@gmail.com</span>
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
                        <div class="nav-wrapper position-relative end-0">
                            <ul class="nav nav-pills nav-fill p-1" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link mb-0 px-0 py-1 active d-flex align-items-center justify-content-center "
                                        data-bs-toggle="tab" href="javascript:;" role="tab" aria-selected="true">
                                        <span class="ms-2">Riwayat Pesanan</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link mb-0 px-0 py-1 active d-flex align-items-center justify-content-center "
                                        data-bs-toggle="tab" href="{{ route("shop") }}" role="tab" aria-selected="true">
                                        <span class="ms-2">Kembali</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <form action="{{ route("logout") }}" method="post">
                                        @csrf
                                        <button type="submit" class="nav-link mb-0 px-0 py-1 d-flex align-items-center justify-content-center text-danger">Logout</button>
                                    </form>
                                    {{-- <a href="{{ route("logout") }}" method ="post" class=""
                                        data-bs-toggle="tab" role="tab" aria-selected="false">
                                        <span class="ms-2">Log Out</span>
                                    </a> --}}
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row px-4 mt-5">
            <div class="col-md-8">
                <div class="card">
                    <form action="" class="col-md-12">
                        <div class="card-header pb-0">
                            <div class="d-flex align-items-center">
                                <p class="mb-0">Edit Profile</p>
                                <button class="btn btn-success btn-sm ms-auto">Simpan</button>
                            </div>
                        </div>
                        <div class="card-body">
                            <p class="text-uppercase text-sm">User Information</p>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Username</label>
                                        <input class="form-control" type="text" value="lucky.jesse" name="username">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Alamat email</label>
                                        <input class="form-control" type="email" value="jesse@example.com"
                                            name="email">
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Alamat</label>
                                        <input class="form-control" type="text"
                                            value="Bld Mihail Kogalniceanu, nr. 8 Bl 1, Sc 1, Ap 09" name="alamat">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Kota</label>
                                        <input class="form-control" type="text" value="New York" name="kota">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Negara</label>
                                        <input class="form-control" type="text" value="United States"
                                            name="negara">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Kode
                                            pos</label>
                                        <input class="form-control" type="text" value="437300" name="kode_pos">
                                    </div>
                                </div>

                            </div>
                        </div>
                    </form>

                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <form action="" class="col-md-12">
                        <div class="card-header pb-0">
                            <div class="d-flex align-items-center">
                                <p class="mb-0">Ubah Password</p>
                                <button class="btn btn-success btn-sm ms-auto">Simpan</button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Password
                                            lama</label>
                                        <input class="form-control" type="text" name="password_lama"
                                            value="">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Password
                                            baru</label>
                                        <input class="form-control" type="password" name="password_baru"
                                            value="">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Konfimarsi
                                            password</label>
                                        <input class="form-control" type="password" name="konfirmasi_password"
                                            value="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>



    </div>
</body>

</html>
