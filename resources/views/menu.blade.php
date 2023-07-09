<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pos Coffee</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>

<body>

    <!-- Navbar-->
    <nav class="navbar navbar-expand navbar-dark bg-primary sticky-top">
        <div class="container-lg">
            <a class="navbar-brand" href="/">
                <img src=" {{ asset('assets/images/logo.jpg') }}" alt="" style="height: 2rem;"> Pos Coffee</a>
            <div class="collapse navbar-collapse d-flex justify-content-end me-5" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#" data-bs-toggle="modal"
                                    data-bs-target="#ModalUbahPassword">
                                    <i class="bi bi-key"></i> Ubah Password</a></li>

                            <li><a class="dropdown-item" href="#">
                                    <i class="bi bi-person-circle"></i> Profile</a></li>

                            <li><a class="dropdown-item" href="logout">
                                    <i class="bi bi-box-arrow-left"></i> Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar-->

    <div class="modal fade" id="ModalUbahPassword" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg modal-fullscreen-md-down">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Ubah Password</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="needs-validation" novalidate action="proses/proses_ubah_password.php" method="post">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-floating mb-3">
                                    <input disabled type="email" class="form-control" id="floatingInput"
                                        placeholder="name@example.com" required name="username" value=" ">
                                    <label for="floatingInput">Username</label>
                                    <div class="invalid-feedback">
                                        Masukkan username
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-floating mb-3">
                                    <input type="password" class="form-control" id="floatingPassword"
                                        name="passwordlama" required>
                                    <label for="floatingInput">Password Lama</label>
                                    <div class="invalid-feedback">
                                        Masukkan Password Lama.
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-floating mb-3">
                                    <input type="password" class="form-control" id="floatingInput" name="passwordbaru"
                                        required>
                                    <label for="floatingInput">Password Baru</label>
                                    <div class="invalid-feedback">
                                        Masukkan Password Baru
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-floating mb-3">
                                    <input type="password" class="form-control" id="floatingPassword"
                                        name="repasswordbaru" required>
                                    <label for="floatingInput">Ulangi Password Baru</label>
                                    <div class="invalid-feedback">
                                        Ulangi Password Baru
                                    </div>
                                </div>

                            </div>
                        </div>


                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" name="ubah_password_validate"
                                value="12345">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <!-- Sidebar & Content-->
    <div class="container-lg">
        <div class="row mb-5">
            <!-- Sidebar -->
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
            <link rel="shortcut icon" href="gambar/coffe.webp">
            <div class="col-lg-3">
                <nav class="navbar navbar-expand-lg bg-light rounded mt-2">
                    <div class="container-fluid">
                        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                            data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar"
                            aria-labelledby="offcanvasNavbarLabel" style="width: 250px;">
                            <div class="offcanvas-header">
                                <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                                    aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body">
                                <ul class="navbar-nav nav-pills flex-column justify-content-end flex-grow-1">
                                    <li class="nav-item">
                                        <a class="nav-link ps-2" aria-current="page" href="/">
                                            <i class="bi bi-house-heart">
                                            </i> Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link ps-2" href="/menu">
                                            <i class="bi bi-card-list">
                                            </i> Menu</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link ps-2" href="/about">
                                            <i class="bi bi-file-earmark-person"></i> About</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link ps-2" href="/contact">
                                            <i class="bi bi-telephone"></i> Contact</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
            <!-- End Sidebar -->

            <!-- Content -->
            <div class="col-lg-9 mt-2">
                <div class="card-header">
                    <b>
                        <h5>Halaman Menu</h5>
                    </b>
                </div>
                <div class="card-group">
                    <div class="card">
                        <img src="{{ asset('assets/images/menu-1.png') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Sanger Espreso</h5>
                            <p class="card-text">Kopi Americano adalah espresso yang ditambahkan air panas.</p>
                            <a href="/menu" class="btn btn-primary">Pesan Sekarang</a>
                        </div>
                    </div>
                    <div class="card">
                        <img src="{{ asset('assets/images/menu-2.png') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Mocha Latte</h5>
                            <p class="card-text">Kopi Americano adalah espresso yang ditambahkan air panas.</p>
                            <a href="/menu" class="btn btn-primary">Pesan Sekarang</a>
                        </div>
                    </div>
                    <div class="card">
                        <img src="{{ asset('assets/images/menu-3.png') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Latte Art</h5>
                            <p class="card-text">Kopi Americano adalah espresso yang ditambahkan air panas.</p>
                            <a href="/menu" class="btn btn-primary">Pesan Sekarang</a>
                        </div>
                    </div>
                </div>
                <div class="card-group">
                    <div class="card">
                        <img src="{{ asset('assets/images/menu-4.png') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Espreso</h5>
                            <p class="card-text">Kopi Americano adalah espresso yang ditambahkan air panas.</p>
                            <a href="/menu" class="btn btn-primary">Pesan Sekarang</a>
                        </div>
                    </div>
                    <div class="card">
                        <img src="{{ asset('assets/images/menu-5.png') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Sanger Pancong</h5>
                            <p class="card-text">Kopi Americano adalah espresso yang ditambahkan air panas.</p>
                            <a href="/menu" class="btn btn-primary">Pesan Sekarang</a>
                        </div>
                    </div>
                    <div class="card">
                        <img src="{{ asset('assets/images/menu-6.png') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Americano</h5>
                            <p class="card-text">Kopi Americano adalah espresso yang ditambahkan air panas.</p>
                            <a href="/menu" class="btn btn-primary">Pesan Sekarang</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Content-->
        </div>
    </div>
    <!-- End Container Sidebar & Content -->

    <!-- Footer -->
    <div class="container-fluid fixed-bottom">
        <div class="card text-center border-0 bg-light py-2">
            &copy; 2023 Aldo Amrullah - Teknik Informatika
        </div>
    </div>
    <!-- End Footer -->
</body>

</html>
