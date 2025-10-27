<?php
include 'navbar.php';
include 'script.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Profile Pondok Pesantren Roudlotul Muta’allimin Al Kholiqy</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<link rel="stylesheet" href="styles.css">
<link rel="icon" href="image/logo.png" type="image/icon">

<body>

    <style>
        /* Efek hover untuk semua teks di navbar */
        .navbar-nav .nav-link:hover,
        .navbar-nav .dropdown-toggle:hover,
        .dropdown-menu .dropdown-item:hover {
            color: #343434 !important;
            /* Warna teks berubah menjadi hitam */
            /* text-decoration: underline; */
            /* Garis bawah muncul saat hover */
            transition: color 0.3s ease, text-decoration 0.3s ease;
            /* Efek transisi */
        }

        /* Hover khusus pada dropdown menu */
        .dropdown-menu .dropdown-item:hover {
            background-color: #e1e1e1;
            /* Latar belakang biru saat hover */
            color: #ffffff;
            /* Warna teks menjadi putih */
            transition: background-color 0.3s ease, color 0.3s ease;
            /* Transisi lembut */
        }
    </style>

    <!-- navbar awal -->
    <nav class="navbar navbar-expand-lg bg-success fixed-top shadow-lg">
        <div class="container">
            <a href="index.html" class="navbar-expand-lg">
                <a href="#top">
                    <img src="image/pprm1.png" alt="pprm1" width="150" height="65">
                </a>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <div class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link text-light" aria-current="page" href="index.php">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light text-decoration-none" href="profile.php">Tentang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="activity.php">Kegiatan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="contact.php">Kontak</a>
                    </li>
                </div>
            </div>
        </div>
    </nav>
    <!-- navbar akhir -->

    <!-- visi misi awal -->
    <div class="container-fluid mt-4 pt-5 pb-2  fade-up">
        <div class="container">
            <div class="clearfix pt-5">
                <h1 class="font-family-sans-serif fw-bold fs-2">Visi</h1>
                <p><i>Menjadi Pondok Pesantren Modern unggulan yang melahirkan generasi Ulul Albab (pemikir yang beriman)
                    yang berkarakter Islami, berwawasan luas, mandiri, dan siap memimpin umat.</i></p>
                <h1 class="font-family-sans-serif fw-bold fs-2">Misi</h1>
                <h1 class="font-family-sans-serif fs-5">1. Pendidikan Integral</h1>
                <p>Melaksanakan sistem pendidikan yang terpadu antara penguasaan ilmu-ilmu agama
                     (tafaqquh fiddin) dengan ilmu pengetahuan umum dan teknologi.</p>
                <h2 class="font-family-sans-serif fs-5">2. Pengembangan Potensi</h2>
                <p>Mengembangkan seluruh potensi santri secara menyeluruh,
                    meliputi pembinaan skill (keterampilan), kecerdasan intelektual, dan kematangan emosi.
                </p>
                <h3 class="font-family-sans-serif fs-5">3. Pembentukan Karakter</h3>
                <p>Membentuk pribadi santri yang memiliki akhlakul karimah (akhlak mulia), disiplin tinggi,
                     dan senantiasa menumbuhkan sikap taat kepada Allah SWT.</p>
                <h4 class="font-family-sans-serif fs-5">4. Mengembangkan Kompetensi Global
                </h4>
                <p>Membekali santri dengan kemampuan akademik, teknologi, dan bahasa asing untuk berkontribusi secara
                    aktif di dunia
                    internasional.</p>
                <h5 class="font-family-sans-serif fs-5">5. Lingkungan Edukatif</h5>
                <p>Menciptakan suasana dan lingkungan pesantren yang kondusif, mendidik, inspiratif, dan menunjang kemandirian santri.</p>
            </div>
        </div>
    </div>
    <!-- visi misi akhir -->

    <!-- footer awal -->

    <footer class="bg-light text-white text-center py-4">
        <footer id="sticky-footer">
            <div class="container text-center">
                <p class="mb-0"></p>
        </footer>
        </div>
    </footer>
    <footer class="bg-success text-light py-5">
        <div class="container">
            <div class="row">
                <!-- Section 1: Info -->
                <div class="col-md-3 mb-4">
                    <h5 class="text-uppercase fw-bold">Pondok Pesantren Roudlotul Muta’allimin <br> Al Kholiqy</h5>
                    <p class="pt-3">
                        <a href="https://maps.app.goo.gl/gEwL9iivMyDVq3u28"
                            class="text-light mx-2 text-decoration-none" target="_blank">
                            <i class="fas fa-map-marker-alt fa-lg"></i>
                            Jl. Soekarno, Gebang Ilir, Kec. Gebang, Kab. Cirebon, Jawa Barat.
                        </a>
                    </p>
                    <!-- Social Media Icons -->
                    <div class="mt-0">
                        <a href="https://twitter.com/almuflihin_crb" class="text-light mx-2"><i
                                class="fab fa-twitter fa-lg"></i></a>
                        <a href="https://www.tiktok.com/@almuflihin_cirebon?lang=id-id&is_from_webapp=1&sender_device=mobile&sender_web_id=7192400905366537729"
                            class="text-light mx-2"><i class="fab fa-tiktok fa-lg"></i></a>
                        <a href="https://www.facebook.com/Pesantrenalmuflihin" class="text-light mx-2"><i
                                class="fab fa-facebook fa-lg"></i></a>
                        <a href="https://www.instagram.com/almuflihin_cirebon?igshid=MzRlODBiNWFlZA%3D%3D"
                            class="text-light mx-2"><i class="fab fa-instagram fa-lg"></i></a>
                        <a href="https://web.whatsapp.com/+62 882-0060-16690" class="text-light mx-2" target="_blank"><i
                                class="fab fa-whatsapp fa-lg"></i></a>
                        <a href="https://www.youtube.com/@almuflihincirebon7929" class="text-light mx-2"><i
                                class="fab fa-youtube fa-lg"></i></a>
                    </div>
                </div>
                <!-- Section 2: Menu -->
                <div class="col-md-2 mb-4">
                    <h5 class="text-uppercase fw-bold">Menu</h5>
                    <ul class="list-unstyled mt-3">
                        <li><a href="index.php" class="text-light text-decoration-none">Beranda</a></li>
                        <li><a href="profile.php" class="text-light text-decoration-none">Tentang</a></li>
                        <li><a href="activity.php" class="text-light text-decoration-none">Kegiatan</a></li>
                        <li><a href="pendaftaran.php" class="text-light text-decoration-none">Pendaftaran</a></li>
                        <li><a href="contact.php" class="text-light text-decoration-none">Kontak</a></li>
                        <li><a href="login.php" class="text-light text-decoration-none">Login</a></li>
                    </ul>
                </div>
                <!-- Section 3: Program -->
                <div class="col-md-2 mb-4">
                    <h5 class="text-uppercase fw-bold">Program</h5>
                    <ul class="list-unstyled mt-3">
                        <li><a href="#" class="text-light text-decoration-none">Pidato 3 Bahasa</a></li>
                        <li><a href="#" class="text-light text-decoration-none">Jurnalistik</a></li>
                        <li><a href="#" class="text-light text-decoration-none">Pramuka</a></li>
                        <li><a href="#" class="text-light text-decoration-none">Praktek Mengajar</a></li>
                        <li><a href="#" class="text-light text-decoration-none">Manasik Haji</a></li>
                    </ul>
                </div>
                <!-- Section 4: Activity -->
                <div class="col-md-2 mb-4">
                    <h5 class="text-uppercase fw-bold">Activity</h5>
                    <ul class="list-unstyled mt-3">
                        <li><a href="kbm.php" class="text-light text-decoration-none">Kegiatan Belajar</a></li>
                        <li><a href="haul.php" class="text-light text-decoration-none">Haul Almagfurlah</a></li>
                        <li><a href="perpus.php" class="text-light text-decoration-none">Perpustakaan</a></li>
                        <li><a href="tarkom.php" class="text-light text-decoration-none">Tari Kombinasi</a></li>
                        <li><a href="khitobah.php" class="text-light text-decoration-none">Praktek Khitobah</a></li>
                    </ul>
                </div>
                <!-- Section 5: Contact -->
                <div class="col-md-3 mb-4">
                    <h5 class="text-uppercase fw-bold">Contact</h5>
                    <ul class="list-unstyled mt-3">
                        <li>Email: <a href="https://ponpesalmuflihincirebon@gmail.com"
                                class="text-light text-decoration-none">ponpesalmuflihincirebon@gmail.com</a></li>
                        <li>Phone: <br>- Ust. Riswandi Bahuwa, S.H <br> 081234567890</li>
                        <li>- Ustadzah Fitri, S.H <br> 081234567890</li>
                    </ul>
                </div>
            </div>
            <!-- Footer Bottom -->
            <hr class="text-light">
            <div class="text-center">
                <p class="mb-0">&copy; 2024 Pondok Modern Al Muflihin | Gebang Ilir, Gebang, Cirebon, Jawa Barat</p>
            </div>
        </div>
    </footer>

    <!-- footer akhir -->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>