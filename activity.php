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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" href="image/logo.png" type="image/icon">
</head>

<div class="container-fluid background1">
    <div class="container text-center">
        <h1 class="display-7 font-family-sans-serif fw-bold">Kegiatan di Pondok</h1>
        <h2 class="display-5 font-family-sans-serif fw-bold">MODERN AL MUFLIHIN</h2>
        <h3 class="display-6 font-family-sans-serif fw-bold">Cirebon</h3>
    </div>
</div>

<!-- kegiatan awal -->

<style>
    .card {
        border-radius: 10px;
        /* Membulatkan sudut card */
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        /* Animasi transformasi dan bayangan */
    }

    .card:hover {
        transform: translateY(-10px);
        /* Card terangkat sedikit saat di-hover */
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        /* Bayangan lebih besar saat hover */
    }

    .card img {
        object-fit: cover;
        /* Menjaga agar gambar tetap proporsional dan memenuhi ruang card */
        height: 200px;
        /* Ukuran gambar tetap konsisten */
    }

    .card-body {
        padding: 20px;
        /* Memberikan padding pada konten dalam card */
    }

    .card-title {
        font-size: 1.2rem;
        /* Menyesuaikan ukuran font judul */
    }

    .card-text {
        font-size: 1rem;
        /* Ukuran font deskripsi */
    }

    .btn {
        margin-top: 10px;
        /* Memberi jarak antara teks dan tombol */
    }
</style>

<div class="container-fluid mt-4 pt-4 pb-3 fade-up">
    <div class="container text-center">
        <h2 class="display-6 font-family-sans-serif fw-bold" id="activity">Kegiatan</h2>
        <p>Pondok Pesantren Roudlotul Muta’allimin Al Kholiqy</p>
    </div>
</div>

<div class="container fade-up">
    <div class="row g-4">
        <div class="col-md-4">
            <div class="card shadow-sm h-100">
                <img src="image/foto6.jpg" class="card-img-top" alt="foto6">
                <div class="card-body">
                    <h5 class="card-title">Kegiatan Belajar Mengajar</h5>
                    <p class="card-text">Proses pendidikan yang berlangsung di lingkungan pesantren, di mana santri dan
                        ustadz/ustadzah berinteraksi untuk mengembangkan ilmu agama.</p>
                    <a href="kbm.php" class="btn btn-success text-light">Read More</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow-sm h-100">
                <img src="image/foto9.JPG" class="card-img-top" alt="Haul Almagfurlah">
                <div class="card-body">
                    <h5 class="card-title">Haul Almagfurlah</h5>
                    <p class="card-text">Memperingati haul Almagfurlah Kyai. M. Rohmat Romdlon, S.Ag sebagai pimpinan
                        Pondok Modern Al Muflihin.</p>
                    <a href="haul.php" class="btn btn-success text-light">Read More</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow-sm h-100">
                <img src="image/foto7.jpg" class="card-img-top" alt="Perpustakaan">
                <div class="card-body">
                    <h5 class="card-title">Perpustakaan</h5>
                    <p class="card-text">Fasilitas yang menyediakan buku untuk mendukung proses belajar santri, termasuk
                        kitab kuning, Al-Qur'an, hadist, dan lain-lainnya.</p>
                    <a href="perpus.php" class="btn btn-success text-light">Read More</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow-sm h-100">
                <img src="image/foto1.JPG" class="card-img-top" alt="Tari Kombinasi">
                <div class="card-body">
                    <h5 class="card-title">Tari Kombinasi</h5>
                    <p class="card-text">Biasanya melibatkan penggabungan gerakan tari tradisional dengan unsur-unsur
                        nilai keagamaan atau budaya lokal yang diajarkan di lingkungan pesantren.</p>
                    <a href="tarkom.php" class="btn btn-success text-light">Read More</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow-sm h-100">
                <img src="image/kegiatan1.jpg" class="card-img-top" alt="Praktek Khitobah">
                <div class="card-body">
                    <h5 class="card-title">Praktek Khitobah</h5>
                    <p class="card-text">Kegiatan latihan berpidato atau berbicara di depan umum yang dilakukan oleh
                        santri untuk mengasah kemampuan komunikasi dan penyampaian dakwah.</p>
                    <a href="khitobah.php" class="btn btn-success text-light">Read More</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow-sm h-100">
                <img src="image/mengajar.jpg" class="card-img-top" alt="Praktek Mengajar">
                <div class="card-body">
                    <h5 class="card-title">Praktek Mengajar</h5>
                    <p class="card-text">Kegiatan di mana santri atau calon pengajar di pesantren melakukan pembelajaran
                        di hadapan teman-teman mereka atau kelompok santri lainnya.</p>
                    <a href="praktek_mengajar.php" class="btn btn-success text-light">Read More</a>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- kegiatan akhir -->

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
                <h5 class="text-uppercase fw-bold">Pondok Pesantren Roudlotul Muta’allimin <br> Al Kholiqy </h5>
                <p class="pt-3">
                    <a href="https://maps.app.goo.gl/gEwL9iivMyDVq3u28"
                        class="text-light mx-2 text-decoration-none" target="_blank">
                        <i class="fas fa-map-marker-alt fa-lg"></i>
                            Jl. KH. Ageng Sholeh, Krajan, Laju Kidul, Kec. Singgahan, Kabupaten Tuban, Jawa Timur 62361
                    </a>
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