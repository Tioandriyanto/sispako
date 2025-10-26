<?php
include 'koneksi.php';
include 'header.php';

// Query untuk mengambil semua gejala
$query = "SELECT * FROM tb_gejala ORDER BY kode_gejala ASC";
$result = mysqli_query($koneksi, $query);

// Pesan error jika ada
$error_message = isset($_GET['error']) ? $_GET['error'] : '';
?>

<section id="diagnosa" class="diagnosa">
    <div class="container" data-aos="fade-up">
        <div class="section-header">
            <h2>Diagnosa Kerusakan Komputer</h2>
            <p>Silakan isi data diri Anda dan pilih gejala-gejala kerusakan yang dialami</p>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card" data-aos="fade-up" data-aos-delay="200">
                    <div class="card-body p-4">
                        <?php if (!empty($error_message)): ?>
                            <div class="alert alert-danger">
                                <i class="bi bi-exclamation-triangle-fill me-2"></i><?php echo $error_message; ?>
                            </div>
                        <?php endif; ?>
                        
                        <p class="mb-4 text-muted fst-italic">Pilih minimal 1 gejala yang dialami pada komputer Anda untuk mendapatkan hasil diagnosa yang akurat.</p>
                        
                        <form action="proses.php" method="post">
                            <div class="row mb-3">
                                <div class="col-md-6 mb-3 mb-md-0">
                                    <label for="nama" class="form-label">Nama</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="bi bi-person-fill"></i></span>
                                        <input type="text" class="form-control" id="nama" name="nama" required placeholder="Masukkan nama Anda">
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <label for="jenis_komputer" class="form-label">Jenis Komputer</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="bi bi-pc-display"></i></span>
                                        <select class="form-select" id="jenis_komputer" name="jenis_komputer" required>
                                            <option value="">Pilih Jenis Komputer</option>
                                            <option value="PC Desktop">PC Desktop</option>
                                            <option value="Laptop">Laptop</option>
                                            <option value="All-in-One PC">All-in-One PC</option>
                                            <option value="Mini PC">Mini PC</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="mb-4">
                                <label class="form-label fw-bold">Gejala yang Dialami</label>
                                <div class="alert alert-info d-flex align-items-center">
                                    <i class="bi bi-info-circle-fill me-2"></i>
                                    <small>Pilih minimal 1 gejala yang dialami pada komputer Anda.</small>
                                </div>
                                
                                <div class="gejala-list">
                                    <?php
                                    if (mysqli_num_rows($result) > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo '<div class="form-check mb-2">';
                                            echo '<input class="form-check-input" type="checkbox" name="gejala[]" value="' . $row['id_gejala'] . '" id="gejala' . $row['id_gejala'] . '">';
                                            echo '<label class="form-check-label" for="gejala' . $row['id_gejala'] . '">';
                                            echo '<span class="fw-medium">' . $row['kode_gejala'] . '</span> - ' . $row['nama_gejala'];
                                            echo '</label>';
                                            echo '</div>';
                                        }
                                    } else {
                                        echo '<p class="text-danger">Tidak ada data gejala yang tersedia.</p>';
                                    }
                                    ?>
                                </div>
                            </div>
                            
                            <div class="d-grid">
                                <button type="submit" class="btn-submit">
                                    <i class="bi bi-search me-2"></i>Proses Diagnosa
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>