<?php
session_start();
include 'koneksi.php';

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

// Set headers for browser to recognize as PDF
header('Content-Type: text/html; charset=utf-8');
$timestamp = date('Ymd_His');
$filename = "Hasil_Diagnosa_$timestamp";
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $filename; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 20px;
        }
        .header {
            text-align: center;
            margin-bottom: 30px;
        }
        .section {
            margin-bottom: 20px;
        }
        h1 {
            font-size: 24px;
            margin-bottom: 5px;
        }
        h2 {
            font-size: 18px;
            margin-bottom: 10px;
        }
        h3 {
            font-size: 16px;
            margin-bottom: 10px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        .footer {
            margin-top: 30px;
            text-align: center;
            font-size: 12px;
            color: #777;
        }
        @media print {
            .no-print {
                display: none;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>SISPAKO - Sistem Pakar Diagnosa Kerusakan Komputer</h1>
            <p>Hasil Diagnosa Kerusakan Komputer</p>
        </div>

        <div class="section">
            <h2>Informasi Pengguna</h2>
            <table>
                <tr>
                    <td width="150">Nama</td>
                    <td width="10">:</td>
                    <td><?php echo $user_data['nama']; ?></td>
                </tr>
                <tr>
                    <td>Jenis Komputer</td>
                    <td>:</td>
                    <td><?php echo $user_data['jenis_komputer']; ?></td>
                </tr>
                <tr>
                    <td>Tanggal Diagnosa</td>
                    <td>:</td>
                    <td><?php echo date('d-m-Y H:i', strtotime($diagnosis['timestamp'])); ?></td>
                </tr>
            </table>
        </div>

        <div class="section">
            <h2>Gejala yang Dipilih</h2>
            <ol>
                <?php foreach ($gejala_details as $gejala): ?>
                <li><?php echo $gejala['kode_gejala'] . ' - ' . $gejala['nama_gejala']; ?></li>
                <?php endforeach; ?>
            </ol>
        </div>

        <div class="section">
            <h2>Hasil Diagnosa</h2>
            <h3><?php echo $diagnosis['kerusakan']['nama_kerusakan']; ?></h3>
            <p>Tingkat Keyakinan: <?php echo round($diagnosis['confidence']); ?>%</p>
            
            <h3>Deskripsi:</h3>
            <p><?php echo nl2br($diagnosis['kerusakan']['deskripsi']); ?></p>
            
            <h3>Solusi yang Direkomendasikan:</h3>
            <p><?php echo nl2br($diagnosis['kerusakan']['solusi']); ?></p>
        </div>

        <div class="footer">
            <p>Dokumen ini dihasilkan oleh SISPAKO pada <?php echo date('d-m-Y H:i'); ?></p>
        </div>
        
        <div class="text-center mt-4 no-print">
            <button class="btn btn-primary" onclick="window.print()">Cetak Hasil</button>
            <a href="hasil.php" class="btn btn-secondary">Kembali</a>
        </div>
    </div>

    <script>
        // Auto print when page loads
        window.onload = function() {
            // Uncomment line below to automatically open print dialog
            // window.print();
        }
    </script>
</body>
</html>