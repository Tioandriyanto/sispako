<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>SISPAKO - Sistem Pakar Diagnosa Kerusakan Komputer</title>
    <meta name="description" content="Sistem Pakar Diagnosa Kerusakan Komputer menggunakan metode forward chaining">
    <meta name="keywords" content="sistem pakar, diagnosa komputer, kerusakan komputer">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- Main CSS File -->
    <link href="assets/css/main.css" rel="stylesheet">
</head>

<body class="index-page">

    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container position-relative d-flex align-items-center justify-content-between">

            <a href="index.php" class="logo d-flex align-items-center me-auto me-xl-0">
                <h1 class="sitename">SISPAKO</h1>
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="index.php" class="active">Home</a></li>
                    <li><a href="diagnosa.php">Diagnosa</a></li>
                    <li><a href="tentang.php">Tentang Sistem</a></li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>

            <a class="btn-getstarted" href="diagnosa.php">Mulai Diagnosa</a>

        </div>
    </header>

    <main class="main">

        <!-- Hero Section -->
        <section id="hero" class="hero section dark-background">
            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="hero-content" data-aos="fade-up" data-aos-delay="200">
                            <h2>SISPAKO – Sistem Pakar Diagnosa Kerusakan Komputer</h2>
                            <p>SISPAKO membantu pengguna mendiagnosa berbagai kerusakan komputer berdasarkan gejala yang dialami menggunakan metode inferensi forward chaining.</p>
                            <div class="hero-btns">
                                <a href="diagnosa.php" class="btn btn-primary">Mulai Diagnosa</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="hero-image" data-aos="zoom-out" data-aos-delay="300">
                            <img src="assets/img/about/about-21.webp" alt="Diagnosa Komputer" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- /Hero Section -->

        <!-- Features Section -->
        <section id="features" class="about section">
            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="row">
                    <div class="col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="feature-item">
                            <div class="icon">
                                <i class="fas fa-cogs fa-3x text-primary mb-3"></i>
                            </div>
                            <h4>Diagnosa Akurat</h4>
                            <p>Menggunakan metode forward chaining untuk menganalisis gejala dan memberikan hasil diagnosa yang akurat.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="300">
                        <div class="feature-item">
                            <div class="icon">
                                <i class="fas fa-laptop-medical fa-3x text-primary mb-3"></i>
                            </div>
                            <h4>Solusi Tepat</h4>
                            <p>Memberikan solusi dan rekomendasi perbaikan berdasarkan hasil diagnosa kerusakan komputer.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="400">
                        <div class="feature-item">
                            <div class="icon">
                                <i class="fas fa-user-cog fa-3x text-primary mb-3"></i>
                            </div>
                            <h4>Mudah Digunakan</h4>
                            <p>Antarmuka yang sederhana dan user-friendly, dapat digunakan oleh siapa saja tanpa pengetahuan teknis.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- /Features Section -->

        <!-- How It Works Section -->
        <section id="work-process" class="work-process section">
            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Cara Kerja SISPAKO</h2>
                <div><span>Diagnosa kerusakan komputer Anda dalam</span> <span class="description-title">3 langkah mudah</span></div>
            </div><!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="row">
                    <div class="col-lg-12" data-aos="zoom-out" data-aos-delay="300">
                        <div class="steps-list">
                            <div class="step-item">
                                <div class="step-number">01</div>
                                <div class="step-content">
                                    <h3>Pilih Gejala</h3>
                                    <p>Pilih gejala-gejala kerusakan yang dialami oleh komputer Anda dari daftar yang tersedia.</p>
                                </div>
                            </div>

                            <div class="step-item">
                                <div class="step-number">02</div>
                                <div class="step-content">
                                    <h3>Proses Diagnosa</h3>
                                    <p>Sistem akan memproses gejala yang dipilih menggunakan metode forward chaining untuk menentukan kerusakan.</p>
                                </div>
                            </div>

                            <div class="step-item">
                                <div class="step-number">03</div>
                                <div class="step-content">
                                    <h3>Dapatkan Hasil</h3>
                                    <p>Lihat hasil diagnosa berupa jenis kerusakan, deskripsi, dan solusi perbaikan yang direkomendasikan.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-5" data-aos="fade-up" data-aos-delay="400">
                    <a href="diagnosa.php" class="btn btn-primary">
                        <i class="fas fa-stethoscope me-2"></i>Mulai Diagnosa Sekarang
                    </a>
                </div>
            </div>
        </section><!-- /How It Works Section -->

    </main><!-- End #main -->

    <footer id="footer" class="footer">
        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>SISPAKO</span></strong>. All Rights Reserved
            </div>
        </div>
    </footer><!-- End Footer -->

    <?php include 'footer.php'; ?>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>

    <!-- Main JS File -->
    <script src="assets/js/main.js"></script>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</body>

</html>