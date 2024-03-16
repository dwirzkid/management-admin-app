<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Jadwal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <link rel="stylesheet" href="../../../assets/fontawesome/css/all.min.css">
    <style>
        body {
            background-image: radial-gradient(#F1FADA, #0d6efd);
        }

        .b-example-divider {
            flex-shrink: 0;
            height: auto;
            background-color: rgba(0, 0, 0, .1);
            border: solid rgba(0, 0, 0, .15);
            border-width: 1px 0;
            box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
        }
    </style>
</head>

<body>
    <div class="">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-3">
                <div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark" style="width: 280px;">
                    <ul class="nav nav-pills flex-column mb-auto">
                        <li>
                            <a href="./beranda.php" class="nav-link text-white" aria-current="page">
                                <i class="fa-solid fa-house"></i>
                                Beranda
                            </a>
                        </li>
                        <li>
                            <a href="./pesan.php" class="nav-link active text-white" aria-current="page">
                                <i class="fa-solid fa-message"></i>
                                Pesan
                            </a>
                        </li>
                        <li>
                            <a href="./sekolah.php" class="nav-link text-white">
                                <i class="fa-solid fa-school"></i>
                                Sekolah
                            </a>
                        </li>
                        <li>
                            <a href="#" class="sidebar-link collapsed has-dropdown btn-secondary dropdown-toggle nav-link text-white" data-bs-toggle="collapse" data-bs-target="#auth" aria-expanded="false" aria-controls="auth">
                                <i class="fa-solid fa-graduation-cap"></i>
                                <span>GTK</span>
                            </a>
                            <ul id="auth" class="sidebar-dropdown list-unstyled collapse text-end container-lg" data-bs-parent="#sidebar">
                                <li class="sidebar-item">
                                    <a href="#" class="nav-link text-white">
                                        <span> Guru</span>
                                        <i class="fa-solid fa-graduation-cap"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="nav-link text-white ">
                                        <span> Tendik</span>
                                        <i class="fa-solid fa-graduation-cap"></i>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="#" class="nav-link text-white">
                                        <span> GTK Non-Aktif</span>
                                        <i class="fa-solid fa-graduation-cap"></i>
                                    </a>
                                </li>
                            </ul>
                        </li>

<li>
                            <a href="#" class="sidebar-link collapsed has-dropdown btn-secondary dropdown-toggle nav-link text-white" data-bs-toggle="collapse" data-bs-target="#pesdik" aria-expanded="false" aria-controls="auth">
                                <i class="fa-regular fa-face-smile"></i>
                                <span>Peserta Didik</span>
                            </a>
                            <ul id="pesdik" class="sidebar-dropdown list-unstyled collapse text-end container-lg" data-bs-parent="#sidebar">
                                <li class="sidebar-item">
                                    <a href="#" class="nav-link text-white">
                                        <span> Guru</span>
                                        <i class="fa-regular fa-face-smile"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="nav-link text-white ">
                                        <span> Tendik</span>
                                        <i class="fa-regular fa-face-smile"></i>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="#" class="nav-link text-white">
                                        <span> GTK Non-Aktif</span>
                                        <i class="fa-regular fa-face-smile"></i>
                                    </a>
                                </li>
                            </ul>
                        </li>


<li>
                            <a href="#" class="sidebar-link collapsed has-dropdown btn-secondary dropdown-toggle nav-link text-white" data-bs-toggle="collapse" data-bs-target="#rombel" aria-expanded="false" aria-controls="auth">
                                <i class="fa-solid fa-users"></i>
                                <span> Rombongan Belajar</span>
                            </a>
                            <ul id="rombel" class="sidebar-dropdown list-unstyled collapse text-end container-lg" data-bs-parent="#sidebar">
                                <li class="sidebar-item">
                                    <a href="#" class="nav-link text-white">
                                        <span> Guru</span>
                                        <i class="fa-solid fa-users"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="nav-link text-white ">
                                        <span> Tendik</span>
                                        <i class="fa-solid fa-users"></i>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="#" class="nav-link text-white">
                                        <span> GTK Non-Aktif</span>
                                        <i class="fa-solid fa-users"></i>
                                    </a>
                                </li>
                            </ul>
                        </li>

<li>
                            <a href="#" class="sidebar-link collapsed has-dropdown btn-secondary dropdown-toggle nav-link text-white" data-bs-toggle="collapse" data-bs-target="#nilai" aria-expanded="false" aria-controls="auth">
                                <i class="fa-solid fa-bars"></i>
                                <span> Nilai</span>
                            </a>
                            <ul id="nilai" class="sidebar-dropdown list-unstyled collapse text-end container-lg" data-bs-parent="#sidebar">
                                <li class="sidebar-item">
                                    <a href="#" class="nav-link text-white">
                                        <span> Guru</span>
                                        <i class="fa-solid fa-bars"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="nav-link text-white ">
                                        <span> Tendik</span>
                                        <i class="fa-solid fa-bars"></i>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="#" class="nav-link text-white">
                                        <span> GTK Non-Aktif</span>
                                        <i class="fa-solid fa-bars"></i>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="./jadwal.php" class="nav-link text-white">
                                <i class="fa-regular fa-calendar-days"></i>
                                Jadwal
                            </a>
                        </li>
                        <li>
                            <a href="#" class="sidebar-link collapsed has-dropdown btn-secondary dropdown-toggle nav-link text-white" data-bs-toggle="collapse" data-bs-target="#valid" aria-expanded="false" aria-controls="auth">
                                <i class="fa-solid fa-check"></i>

                                <span> Validasi</span>
                            </a>
                            <ul id="valid" class="sidebar-dropdown list-unstyled collapse text-end container-lg" data-bs-parent="#sidebar">
                                <li class="sidebar-item">
                                    <a href="#" class="nav-link text-white">
                                        <span> Guru</span>
                                        <i class="fa-solid fa-check"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="nav-link text-white ">
                                        <span> Tendik</span>
                                        <i class="fa-solid fa-check"></i>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="#" class="nav-link text-white">
                                        <span> GTK Non-Aktif</span>
                                        <i class="fa-solid fa-check"></i>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="./tarik.php" class="nav-link text-white">
                                <i class="fa-solid fa-arrow-down"></i>
                                Tarik Data
                            </a>
                        </li>
                        <li>
                            <a href="./pusat.php" class="nav-link text-white">
                                <i class="fa-solid fa-download"></i>
                                Pusat Unduhan
                            </a>
                        </li>
                        <li>
                            <a href="./profil.php" class="nav-link text-white">
                                <i class="fa-solid fa-user"></i>
                                Profil Pengguna
                            </a>
                        </li>
                        <li>
                            <a href="./pengaturan.php" class="nav-link text-white">
                                <i class="fa-solid fa-gear"></i>
                                Pengaturan
                            </a>
                        </li>
                        <li>
                            <a href="./tentang.php" class="nav-link text-white">
                                <i class="fa-regular fa-copyright"></i>
                                Tentang
                            </a>
                        </li>
                        <li>
                            <br>
                            <a href="../../dashboard.php" class="nav-link text-white">
                                <svg class="bi me-2" width="16" height="16">
                                    <use xlink:href="#people-circle" />
                                </svg>
                                Keluar
                            </a>
                        </li>
                    </ul>
                    <div class="b-example-divider invisible"></div>
                </div>
            </div>

            <!-- Content -->
            <div class="col-9 ">
                    <h2>Pesan</h2>
                    
                
            </div>

        </div>
    </div>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>