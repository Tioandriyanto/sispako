<?php include 'header.php'; ?>

<section id="about" class="about">
    <div class="container" data-aos="fade-up">
        <div class="row g-4 g-lg-5 align-items-center">
            <!-- Left Content Section -->
            <div class="col-lg-6">
                <div class="about-content">
                    <span class="text-uppercase text-primary fw-bold small mb-2 d-block">TENTANG SISTEM KAMI</span>
                    <h2 class="display-5 fw-bold mb-4">Sistem Pakar Diagnosa Kerusakan Komputer</h2>
                    <p class="text-muted mb-4">
                        SISPAKO adalah sistem pakar berbasis web yang dirancang untuk membantu pengguna dalam mendiagnosa berbagai kerusakan komputer berdasarkan gejala-gejala yang dialami. Sistem ini menggunakan metode inferensi forward chaining untuk menganalisis gejala dan memberikan hasil diagnosa yang akurat.
                    </p>

                    <!-- Features List -->
                    <div class="row g-3 mb-4">
                        <div class="col-md-6">
                            <div class="d-flex align-items-start">
                                <i class="bi bi-check-circle-fill text-primary me-2 mt-1"></i>
                                <span class="text-muted">Diagnosa berbasis gejala</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex align-items-start">
                                <i class="bi bi-check-circle-fill text-primary me-2 mt-1"></i>
                                <span class="text-muted">Metode Forward Chaining</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex align-items-start">
                                <i class="bi bi-check-circle-fill text-primary me-2 mt-1"></i>
                                <span class="text-muted">Hasil dengan tingkat keyakinan</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex align-items-start">
                                <i class="bi bi-check-circle-fill text-primary me-2 mt-1"></i>
                                <span class="text-muted">Solusi yang direkomendasikan</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex align-items-start">
                                <i class="bi bi-check-circle-fill text-primary me-2 mt-1"></i>
                                <span class="text-muted">Export hasil ke PDF</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex align-items-start">
                                <i class="bi bi-check-circle-fill text-primary me-2 mt-1"></i>
                                <span class="text-muted">Antarmuka user-friendly</span>
                            </div>
                        </div>
                    </div>

                    <!-- Developer Info Card -->
                    <div class="developer-card d-flex align-items-center p-3 bg-light rounded shadow-sm">
                        <div class="developer-avatar me-3">
                            <img src="assets/img/developer.jpg" alt="Tio Andriyanto" class="rounded-circle" width="60" height="60" style="object-fit: cover;">
                        </div>
                        <div class="developer-info flex-grow-1">
                            <h6 class="mb-0 fw-bold">Tio Andriyanto dkk.</h6>
                            <small class="text-muted">Developer & Founder</small>
                        </div>
                        <div class="contact-info text-end">
                            <div class="d-flex align-items-center">
                                <i class="bi bi-telephone-fill text-primary me-2"></i>
                                <div>
                                    <small class="text-muted d-block" style="font-size: 0.7rem;">Hubungi Kami</small>
                                    <span class="fw-bold" style="font-size: 0.9rem;">+62 xxx-xxx-xxx</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Image Section -->
            <div class="col-lg-6">
                <div class="about-images position-relative">
                    <!-- Main Image -->
                    <div class="main-image">
                        <img src="assets/img/about.jpg" alt="SISPAKO System" class="img-fluid rounded shadow-lg">
                    </div>

                    <!-- Overlay Image -->
                    <div class="overlay-image position-absolute">
                        <img src="assets/img/about-2.jpg" alt="Computer Diagnostic" class="img-fluid rounded shadow">
                    </div>

                    <!-- Experience Badge -->
                    <div class="experience-badge position-absolute">
                        <div class="badge-content text-center text-white p-4 rounded">
                            <h2 class="display-4 fw-bold mb-0">3+</h2>
                            <p class="mb-0 small">Years</p>
                            <p class="mb-0 fw-light" style="font-size: 0.8rem;">Of experience in business service</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Method Explanation Section -->
        <div class="row mt-5 pt-5" data-aos="fade-up" data-aos-delay="200">
            <div class="col-12">
                <div class="method-section bg-white p-5 rounded shadow-sm">
                    <div class="text-center mb-4">
                        <span class="badge bg-primary bg-opacity-10 text-primary px-3 py-2 rounded-pill mb-3">
                            <i class="bi bi-gear-fill me-2"></i>METODE SISTEM
                        </span>
                        <h3 class="fw-bold">Metode Forward Chaining</h3>
                        <p class="text-muted">Penalaran dari fakta menuju kesimpulan yang akurat</p>
                    </div>

                    <div class="row g-4">
                        <div class="col-md-4">
                            <div class="method-card text-center p-4 h-100 border rounded">
                                <div class="icon-box bg-primary bg-opacity-10 d-inline-flex align-items-center justify-content-center rounded-circle mb-3" style="width: 70px; height: 70px;">
                                    <i class="bi bi-list-check fs-3 text-primary"></i>
                                </div>
                                <h5 class="fw-bold mb-3">Pemilihan Gejala</h5>
                                <p class="text-muted small mb-0">Pengguna dapat memilih beberapa gejala yang dialami pada komputer mereka</p>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="method-card text-center p-4 h-100 border rounded">
                                <div class="icon-box bg-success bg-opacity-10 d-inline-flex align-items-center justify-content-center rounded-circle mb-3" style="width: 70px; height: 70px;">
                                    <i class="bi bi-diagram-3 fs-3 text-success"></i>
                                </div>
                                <h5 class="fw-bold mb-3">Analisis Rules</h5>
                                <p class="text-muted small mb-0">Sistem mencocokkan gejala dengan aturan yang ada dalam knowledge base</p>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="method-card text-center p-4 h-100 border rounded">
                                <div class="icon-box bg-info bg-opacity-10 d-inline-flex align-items-center justify-content-center rounded-circle mb-3" style="width: 70px; height: 70px;">
                                    <i class="bi bi-check2-circle fs-3 text-info"></i>
                                </div>
                                <h5 class="fw-bold mb-3">Hasil Diagnosa</h5>
                                <p class="text-muted small mb-0">Memberikan hasil diagnosa dengan tingkat keyakinan dan solusi terbaik</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- CTA Button -->
        <div class="text-center mt-5" data-aos="fade-up" data-aos-delay="300">
            <a href="index.php" class="btn btn-primary btn-lg px-5 py-3 rounded-pill shadow">
                <i class="bi bi-house-door me-2"></i>
                Kembali ke Beranda
            </a>
        </div>
    </div>
</section>

<style>
    /* About Section Styles */
    .about {
        padding: 80px 0;
        background: linear-gradient(to bottom, #f8f9fa 0%, #ffffff 50%, #f8f9fa 100%);
    }

    .about-content h2 {
        color: #1a1a1a;
        line-height: 1.2;
    }

    .about-content p {
        font-size: 1rem;
        line-height: 1.8;
    }

    /* Developer Card */
    .developer-card {
        border: 1px solid #e9ecef;
    }

    .developer-avatar img {
        border: 3px solid #fff;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
    }

    /* Images Layout */
    .about-images {
        min-height: 500px;
    }

    .main-image {
        position: relative;
        z-index: 1;
    }

    .main-image img {
        width: 100%;
        height: auto;
    }

    .overlay-image {
        bottom: 0;
        left: -30px;
        width: 60%;
        z-index: 2;
    }

    .experience-badge {
        bottom: 30px;
        right: -20px;
        z-index: 3;
    }

    .badge-content {
        background: linear-gradient(135deg, #007bff 0%, #0056b3 100%);
        box-shadow: 0 10px 30px rgba(0, 123, 255, 0.3);
        min-width: 180px;
    }

    /* Method Section */
    .method-section {
        border: 1px solid #e9ecef;
    }

    .method-card {
        transition: all 0.3s ease;
        background: #fff;
    }

    .method-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1) !important;
    }

    .icon-box {
        transition: all 0.3s ease;
    }

    .method-card:hover .icon-box {
        transform: scale(1.1);
    }

    /* Button */
    .btn-primary {
        background: linear-gradient(135deg, #007bff 0%, #0056b3 100%);
        border: none;
        font-weight: 600;
        letter-spacing: 0.5px;
        transition: all 0.3s ease;
    }

    .btn-primary:hover {
        transform: translateY(-3px);
        box-shadow: 0 10px 30px rgba(0, 123, 255, 0.4) !important;
    }

    /* Responsive Design */
    @media (max-width: 991.98px) {
        .about {
            padding: 50px 0;
        }

        .about-images {
            margin-top: 3rem;
            min-height: 400px;
        }

        .overlay-image {
            left: 0;
            width: 50%;
        }

        .experience-badge {
            right: 0;
        }

        .contact-info {
            display: none;
        }
    }

    @media (max-width: 767.98px) {
        .about-content h2 {
            font-size: 1.75rem;
        }

        .overlay-image {
            display: none;
        }

        .experience-badge {
            bottom: 10px;
            right: 10px;
        }

        .badge-content {
            min-width: 140px;
            padding: 1rem !important;
        }

        .badge-content h2 {
            font-size: 2rem;
        }

        .method-section {
            padding: 2rem !important;
        }
    }
</style>

<?php include 'footer.php'; ?>