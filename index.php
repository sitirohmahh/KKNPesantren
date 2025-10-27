<?php
include 'navbar.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Profile Pondok Pesantren Roudlotul Muta’allimin Al Kholiqy</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" href="image/logo.png" type="image/icon">
</head>

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
    <!-- navbar start -->

    <!-- navbar-expand-lg, akan menyesuaikan tampilan navbar sesuai dengan ukuran layar -->
    <!-- fixed-top, untuk menetapkan posisi navbar ketika di scrol ke atas -->
    <!-- div class, tag HTML yang digunakan untuk membuat elemen atau kontainer di dalam halaman web -->
    <!-- class, atribut yang menambahkan kelas CSS tertentu pada elemen tersebut -->
    <!-- container, kelas umum yang digunakan untuk mengatur lebar dan tata letak konten pada halaman web -->
    <!-- a href, tag yang digunakan untuk membuat hyperlink, yaitu tautan yang dapat diklik untuk membuka halaman atau dokumen lain -->
    <!-- expanded diperluas, collapse ditutup -->

    <nav class="navbar navbar-expand-lg bg-success fixed-top shadow-lg">
        <div class="container">
            <!-- width itu lebar, height itu tinggi -->
            <!-- src, source untuk menentukan sumber atau lokasi gambar yang akan ditampilkan -->
            <!-- alt, teks alternatif yang menjelaskan gambar -->
            <a href="index.html" class="navbar-expand-lg">
                <a href="#top">
                    <img src="image/pprm1.png" alt="pprm1" width="150" height="65">
                </a>
            </a>
            <!-- navbar-toogler, kelas bootstrap yang digunakan pada tombol button untuk mengaktifkan fitur
            "collapse" atau buka-tutup menu pada navbar, terutama pada tampilan layar kecil seperti ponsel -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- collapse untuk membuat konten di dalam elemen tersebut untuk diperluas (expanded) atau ditutup (collapsed) secara dinamis -->
            <!-- ms-auto digunakan untuk mendorong elemen ke kanan -->
            <!-- ms itu margin-start -->
            <!-- nav link ketika dipencet maka akan menuju sesuai dengan nama link nya (responsif) -->
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
                    <li class="nav-item">
                        <a class="nav-link text-light" href="login.php">Login</a>
                    </li>
                    <!-- <button type="button" class="btn btn-outline-light">Login Admin</button> -->
                </div>
            </div>
        </div>
    </nav>
    <!-- navbar end -->

    <!-- background -->
    <div class="container-fluid background">
        <div class="container text-center">
            <h1 class="display-7 font-family-sans-serif fw-bold">Pondok Pesantren</h1>
            <h2 class="display-5 font-family-sans-serif fw-bold text-light">Roudlotul Muta’allimin Al Kholiqy</h2>
            <h3 class="display-6 font-family-sans-serif fw-bold pb-3">Tuban</h3>
        </div>
    </div>
    <!-- background End-->

    <!-- bagian penerimaan awal -->

    <!-- pt digunakan untuk memberi jarak di bagian atas suatu elemen -->
    <!-- pb digunakan untuk memberikan padding-bottom jarak bagian bawah, jarak teks profile dengan navbar -->
    <!-- mt digunakan untuk memberikan margin-top jarak bagian atas, jara teks profile dengan foto background -->
    <!-- ps padding start untuk memberikan jarak dari sisi kiri -->
    <!-- col-md-5 yaitu kelas yang digunakan untuk menentukan lebar kolom dalam sistem grid Bootstrap -->
    <!-- fw-bold, font weight digunakan untuk membuat teks menjadi tebal -->
    <!-- id, untuk memberikan pengenal unik pada elemen -->

    <!-- <nav class="navbar bg-warning pb-3"> -->

    <div class="container mt-5 text-left fade-up">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <h4 class="display-6 font-family-sans-serif fw-bold pt-5" id="profile">Penerimaan</h4>
                <h5 class="display-6 font-family-sans-serif fw-bold">Santri Baru Tahun 2026</h5>
                <p style="text-align: justify;">Roudlotul Muta’allimin Al Kholiqy Tuban adalah Pondok Pesantren Modern yang berfokus pada pendidikan integral (menyeluruh).
                    Pesantren ini menyelenggarakan pendidikan untuk mengembangkan seluruh potensi para santri, meliputi pembinaan keterampilan (skill),
                    kecerdasan intelektual, kematangan emosi, serta penanaman sikap yang taat kepada Allah SWT, dengan landasan keilmuan Islam yang kuat.</p>
            </div>
            <div class="col-lg-6 text-center">
                <img src="image/foto8.jpg" alt="foto8" width="400" height="250" class="rounded-3 class=" img-fluid
                    rounded-3">
            </div>
        </div>

        <div class="container-fluid pt-4 pb-4">
            <div class="d-flex flex-wrap justify-content-start">
                <a href="profile.php" class="me-3">
                    <button type="button" class="btn btn-success rounded-4 fs-6 px-5 text-light">Profile</button>
                </a>
                </div>
        </div>
    </div>
    <!-- bagian penerimaan akhir -->

    <!-- profile awal -->

    <style>
        /* Awal: elemen tidak terlihat dan bergeser ke bawah */
        .fade-up {
            opacity: 0;
            transform: translateY(50px);
            /* Geser elemen ke bawah */
            transition: opacity 0.5s ease-out, transform 0.5s ease-out;
        }

        /* Saat elemen terlihat: posisi normal */
        .fade-up.visible {
            opacity: 1;
            transform: translateY(0);
        }
    </style>

    <div class="container-fluid profile pt-3 pb-3 fade-up">
        <div class="container text-center fade-up">
            <h1 class="display-6 font-family-sans-serif fw-bold fade-up">Falsafah Pondok</h1>
            <p class="fade-up">
               Roudlotul Muta’allimin Al Kholiqy Tuban adalah Pondok Pesantren Modern yang menyelenggarakan pendidikan untuk mengembangkan seluruh potensi para santri
               secara menyeluruh, meliputi pembinaan skill, kecerdasan intelektual, kematangan emosi, dan penanaman sikap yang taat kepada Allah SWT.
            </p>
<div class="row pt-4 justify-content-center">
    <div class="col-md-4 fade-up">
        <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor"
            class="bi bi-chat-square-text-fill" viewBox="0 0 16 16">
            <path
                d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2h-2.5a1 1 0 0 0-.8.4l-1.9 2.533a1 1 0 0 1-1.6 0L5.3 12.4a1 1 0 0 0-.8-.4H2a2 2 0 0 1-2-2zm3.5 1a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1zm0 2.5a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1zm0 2.5a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1z" />
        </svg>
        <h2 class="display-7 mt-3 font-family-sans-serif fw-bold">Motto Pondok</h2>
        <p>Menjadi Pondok Pesantren Modern unggulan yang melahirkan generasi Ulul Albab (pemikir yang beriman)
            yang berkarakter Islami, berwawasan luas, mandiri, dan siap memimpin umat.
        </p>
        <a href="mottopondok.php">
            <button type="button" class="btn btn-success text-light">Baca Selengkapnya</button>
        </a>
    </div>
    <div class="col-md-4 fade-up">
        <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor"
            class="bi bi-bag-dash-fill" viewBox="0 0 16 16">
            <path fill-rule="evenodd"
                d="M10.5 3.5a2.5 2.5 0 0 0-5 0V4h5zm1 0V4H15v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V4h3.5v-.5a3.5 3.5 0 1 1 7 0M6 9.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1z" />
        </svg>
        <h2 class="display-7 mt-3 font-family-sans-serif fw-bold">Visi & Misi</h2>
        <p>Menjadi Pondok Pesantren Modern unggulan yang melahirkan generasi Ulul Albab (pemikir yang beriman)
            yang berkarakter Islami, berwawasan luas, mandiri, dan siap memimpin umat.</p>
        <a href="visimisi.php">
            <button type="button" class="btn btn-success text-light">Baca Selengkapnya</button>
        </a>
    </div>
</div>
            </div>
        </div>
    </div>

    <!-- <hr class="my-4" style="border: 2px solid #333;"> -->

    <!-- profile akhir -->

    <!-- tentang awal -->

    <div class="container-fluid pt-3 pb-3 fade-up">
        <div class="container">
            <h2 class="display-6 text-center font-family-sans-serif fw-bold" id="about">About</h2>
            <p class="text-center">
                Pondok Pesantren Roudlotul Muta’allimin Al Kholiqy, Lajukidul, Tujuan, Jawa Timur
            </p>
            <div class="clearfix pt-5">
                <img src="image/foto9.JPG" class="col-md-6 float-md-end mb-3 crop-img rounded-4" width="300"
                    height="300">
                <div class="col-md-5">
                    <p style="text-align: justify;">
                        Roudlotul Muta’allimin Al Kholiqy Tuban (RM AKT) hadir sebagai lembaga pendidikan Islam modern yang berkomitmen penuh
                        untuk mencetak generasi muslim unggul yang memiliki keseimbangan sempurna antara kecerdasan intelektual, kematangan emosional, dan kedalaman spiritual.
                        Pondok Pesantren RM AKT menyelenggarakan pendidikan yang bersifat integral dan menyeluruh.
                        Kami memadukan kurikulum pendidikan agama yang kuat dengan pembinaan soft skill dan hard skill yang relevan dengan perkembangan zaman.
                        Tujuannya adalah memastikan setiap santri tidak hanya taat kepada Allah SWT, tetapi juga siap menjadi pemimpin dan agen perubahan di masyarakat.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- footer awal -->

    <footer class="bg-light text-white text-center py-4 pt-5">
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
                            Jl. KH. Ageng Sholeh, Krajan, Laju Kidul, Kec. Singgahan, Kabupaten Tuban, Jawa Timur 62361                        </a>
                    </p>
                    <!-- Social Media Icons -->
                    <div class="mt-0">
                        <a href="https://www.tiktok.com/@pprmalkholiqy?_t=ZS-90s5D7GoLcf&_r=1"
                            class="text-light mx-2"><i class="fab fa-tiktok fa-lg"></i></a>
                        <a href="https://www.facebook.com/pprm.alkholiqy.7" class="text-light mx-2"><i
                                class="fab fa-facebook fa-lg"></i></a>
                        <a href="https://www.instagram.com/pprm_alkholiqy?igsh=MTU5NDg2aTdudXR6cQ=="
                            class="text-light mx-2"><i class="fab fa-instagram fa-lg"></i></a>
                        <a href="https://web.whatsapp.com/+6285235344313" class="text-light mx-2" target="_blank"><i
                                class="fab fa-whatsapp fa-lg"></i></a>
                        <a href="https://youtube.com/@pprmalkholiqy?si=dlTr6dFb7agokLrq" class="text-light mx-2"><i
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
                        <li><a href="contact.php" class="text-light text-decoration-none">Kontak</a></li>
                        <li><a href="login.php" class="text-light text-decoration-none">Login</a></li>
                    </ul>
                </div>
                <!-- Section 3: Program -->
                <div class="col-md-2 mb-4">
                    <h5 class="text-uppercase fw-bold">Program</h5>
                    <ul class="list-unstyled mt-3">
                        <li><a href="#" class="text-light text-decoration-none">Tafaqquh fiddin</a></li>
                        <li><a href="#" class="text-light text-decoration-none">Tahfidzul Qur'an</a></li>
                        <li><a href="#" class="text-light text-decoration-none">IT Club & Digital Skill</a></li>
                        <li><a href="#" class="text-light text-decoration-none">Mu'adalah Wustho</a></li>
                        <li><a href="#" class="text-light text-decoration-none">Mu'adalah Ulya</a></li>
                    </ul>
                </div>
                <!-- Section 4: Activity -->
                <div class="col-md-2 mb-4">
                    <h5 class="text-uppercase fw-bold">Activity</h5>
                    <ul class="list-unstyled mt-3">
                        <li><a href="kbm.php" class="text-light text-decoration-none">Ngaji alqur'an</a></li>
                        <li><a href="haul.php" class="text-light text-decoration-none">Musyawarah kitab</a></li>
                        <li><a href="perpus.php" class="text-light text-decoration-none">Maulid albarzanji, ad dziba'i & simtud durror</a></li>
                        <li><a href="tarkom.php" class="text-light text-decoration-none">Bahtsul masa'il</a></li>
                        <li><a href="khitobah.php" class="text-light text-decoration-none">Rotibul haddad</a></li>
                        <li><a href="haul.php" class="text-light text-decoration-none">Manaqib syekh abdul qodir al jaelani</a></li>
                        <li><a href="perpus.php" class="text-light text-decoration-none">Muhafadzoh</a></li>
                        <li><a href="tarkom.php" class="text-light text-decoration-none">Sorogan kutubus salaf</a></li>
                        <li><a href="khitobah.php" class="text-light text-decoration-none">Khitobiah</a></li>

                    </ul>
                </div>
                <!-- Section 5: Contact -->
                <div class="col-md-3 mb-4">
                    <h5 class="text-uppercase fw-bold">Contact</h5>
                    <ul class="list-unstyled mt-3">
                        <li>Email: <a href="https://pprm.alkholiqy@gmail.com"
                                class="text-light text-decoration-none">pprm.alkholiqy@gmail.com</a></li>
                        <li>Phone: <br>- PPRM Al Kholiqy <br> +6285235344313</li>
                    </ul>
                </div>
            </div>
            <!-- Footer Bottom -->
            <hr class="text-light">
            <div class="text-center">
                <p class="mb-0">&copy; 2025 Pondok Pesantren Roudlotul Muta’allimin Al Kholiqy | Laju Kidul, Singgahan, Tuban, Jawa Timur</p>
            </div>
        </div>
    </footer>

    <!-- footer akhir -->

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const elements = document.querySelectorAll(".fade-up");

            const observer = new IntersectionObserver((entries) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add("visible"); // Tambahkan kelas 'visible' saat elemen terlihat
                    } else {
                        entry.target.classList.remove("visible"); // Hapus kelas 'visible' saat elemen keluar viewport
                    }
                });
            }, {
                threshold: 0.2, // Elemen terlihat ketika 20% masuk ke viewport
            });

            elements.forEach((element) => observer.observe(element));
        });

    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>