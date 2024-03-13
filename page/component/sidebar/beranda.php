<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>
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
                            <a href="./beranda.php" class="nav-link active text-white" aria-current="page">
                                <i class="fa-solid fa-house"></i>
                                Beranda
                            </a>
                        </li>
                        <li>
                            <a href="./pesan.php" class="nav-link text-white" aria-current="page">
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
                            <a href="./gtk.php" class="nav-link text-white">
                                <i class="fa-solid fa-graduation-cap"></i>
                                GTK
                            </a>
                        </li>
                        <li>
                            <a href="./pesdik.php" class="nav-link text-white">
                                <i class="fa-regular fa-face-smile"></i>
                                Peserta Didik
                            </a>
                        </li>
                        <li>
                            <a href="./rombel.php" class="nav-link text-white">
                                <i class="fa-solid fa-users"></i>
                                Rombongan Belajar
                            </a>
                        </li>
                        <li>
                            <a href="./nilai.php" class="nav-link text-white">
                                <i class="fa-solid fa-bars"></i>
                                Nilai
                            </a>
                        </li>
                        <li>
                            <a href="./jadwal.php" class="nav-link text-white">
                                <i class="fa-regular fa-calendar-days"></i>
                                Jadwal
                            </a>
                        </li>
                        <li>
                            <a href="./valid.php" class="nav-link text-white">
                                <i class="fa-solid fa-check"></i>
                                Validasi
                            </a>
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
            <div class="col-8">
                <h2>Dashboard</h2>
                <br>
                <!-- Text on the right side -->
                <div class="container text-center ">
                    <div class="row ">
                        <div class="card" style="width: auto;">                            
                                <div class="text-start " style="font-size: xx-large;">
                                <i class="fa-solid fa-building-columns text-start ml-4" style="font-size: xx-large;"></i> 
                                <font style="align-items: flex-end;">5</font>
                            </div>                                                       
                            <div style="font-size: small;"> Jumlah Ruang Kelas</div>
                        </div>

                        <div class="card" style="width: auto;">                            
                                <div class="text-start " style="font-size: xx-large;">
                                <i class="fa-solid fa-graduation-cap text-start ml-4" style="font-size: xx-large;"></i> 
                                <font style="align-items: flex-end;">7</font>
                            </div>                                                       
                            <div style="font-size: small;"> Jumlah Guru</div>
                        </div>
                        <div class="card" style="width: auto;">                            
                                <div class="text-start " style="font-size: xx-large;">
                                <i class="fa-regular fa-face-smile text-start ml-4" style="font-size: xx-large;"></i> 
                                <font style="align-items: flex-end;">98</font>
                            </div>                                                       
                            <div style="font-size: small;"> Jumlah Peserta Didik</div>
                        </div>
                        <div class="card" style="width: auto;">                            
                                <div class="text-start " style="font-size: xx-large;">
                                <i class="fa-solid fa-users text-start ml-4" style="font-size: xx-large;"></i> 
                                <font style="align-items: flex-end;">5</font>
                            </div>                                                       
                            <div style="font-size: small;"> Jumlah Rombel</div>
                        </div>
                    </div>

                </div>
                <br>
                <div class="card" style="width: 45rem;">

                    <div class="card-body">
                        <p class="card-text">
                        <i class="fa-solid fa-school"> TK PEMBINA III KOTA TANGERANG SELATAN</i>
                        <p>NIPDN : 6989917</p>
                        <p>Bentuk Pendidikan : TK</p>
                        <p>Status : Negeri</p>
                        <p>Kecamatan : Kec.Serpong</p>
                        <p>Kabupaten : Kota Tangerang Selatan</p>
                        <p>Provinsi : Prov. Banten</p>
                        <p>PLT Kepala Sekolah : <font style="color: orange;">ELI SUSILAWATI</font></p>
                        <p>Operator : Ingrid Maharani Basuki</p>
                        <p>Username : tkn.pembina3serpong@gmail.com</p>
                        <br>
                        <p>Implementasi Kurikulum : Merdeka</p>
                        <p>Status BOSP : <font style="color: green;">Bersedia Menerima BOSP</font></p>
                        <p>Bendahara BOSP : ENDAH SURYATI</p>
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>