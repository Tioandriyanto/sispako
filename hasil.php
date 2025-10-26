<?php
session_start();
include 'koneksi.php';
include 'header.php';

// Check if diagnosis result exists in session
if (!isset($_SESSION['diagnosis_result'])) {
    header("Location: diagnosa.php");
    exit();
}

// Get diagnosis result from session
$diagnosis = $_SESSION['diagnosis_result'];
$user_data = $_SESSION['user_data'];
$selected_gejala = $_SESSION['selected_gejala'];

// Get selected gejala details
$gejala_details = [];
foreach ($selected_gejala as $id_gejala) {
    $query = "SELECT * FROM tb_gejala WHERE id_gejala = $id_gejala";
    $result = mysqli_query($koneksi, $query);
    $gejala_details[] = mysqli_fetch_assoc($result);
}
?>

<section id="hasil" class="hasil">
    <div class="container" data-aos="fade-up">
        <div class="section-header">
            <h2>Hasil Diagnosa</h2>
            <p>Hasil Diagnosa Kerusakan Komputer</p>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-10 mx-auto">
                <div class="card" data-aos="fade-up" data-aos-delay="200">
                    <div class="card-header">
                        <i class="bi bi-person-circle me-2"></i>Informasi Pengguna
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <p><strong>Nama:</strong> <?php echo $user_data['nama']; ?></p>
                            </div>
                            <div class="col-md-6">
                                <p><strong>Jenis Komputer:</strong> <?php echo $user_data['jenis_komputer']; ?></p>
                            </div>
                        </div>
                        <p><strong>Tanggal Diagnosa:</strong> <?php echo date('d-m-Y H:i', strtotime($diagnosis['timestamp'])); ?></p>
                    </div>
                </div>
                
                <div class="card mb-4 mt-4">
                    <div class="card-header">
                        <i class="bi bi-clipboard-check me-2"></i>Gejala yang Dipilih
                    </div>
                    <div class="card-body">
                        <ul class="list-group">
                            <?php foreach ($gejala_details as $gejala): ?>
                            <li class="list-group-item d-flex align-items-center">
                                <i class="bi bi-check-circle-fill me-2 text-success"></i>
                                <span class="fw-medium"><?php echo $gejala['kode_gejala']; ?></span> - <?php echo $gejala['nama_gejala']; ?>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
                
                <div class="card mb-4">
                    <div class="card-header bg-primary text-white">
                        <i class="bi bi-clipboard-pulse me-2"></i>Hasil Diagnosa
                    </div>
                    <div class="card-body">
                        <div class="result-box">
                            <h4 class="result-title">
                                <i class="bi bi-laptop me-2"></i>
                                <?php echo $diagnosis['kerusakan']['nama_kerusakan']; ?>
                            </h4>
                            
                            <div class="mb-3">
                                <div class="progress">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: <?php echo round($diagnosis['confidence']); ?>%" aria-valuenow="<?php echo round($diagnosis['confidence']); ?>" aria-valuemin="0" aria-valuemax="100">
                                        <?php echo round($diagnosis['confidence']); ?>%
                                    </div>
                                </div>
                                <small class="text-muted">Tingkat keyakinan berdasarkan gejala yang dipilih</small>
                            </div>
                            
                            <div class="mb-4">
                                <h5 class="d-flex align-items-center">
                                    <i class="bi bi-info-circle me-2"></i>Deskripsi:
                                </h5>
                                <p><?php echo $diagnosis['kerusakan']['deskripsi']; ?></p>
                            </div>
                            
                            <div class="mb-4">
                                <h5 class="d-flex align-items-center">
                                    <i class="bi bi-tools me-2"></i>Solusi yang Direkomendasikan:
                                </h5>
                                <div class="alert alert-info">
                                    <?php echo $diagnosis['kerusakan']['solusi']; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="text-center mb-4">
                    <a href="cetak_pdf.php" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center me-2">
                        <i class="bi bi-file-pdf me-2"></i>
                        <span>Cetak Hasil Diagnosa (PDF)</span>
                    </a>
                    <a href="index.php" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                        <i class="bi bi-house me-2"></i>
                        <span>Kembali ke Beranda</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>