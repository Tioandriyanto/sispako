-- Database: `sispako`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_gejala`
--

CREATE TABLE `tb_gejala` (
  `id_gejala` int(11) NOT NULL AUTO_INCREMENT,
  `kode_gejala` varchar(10) NOT NULL,
  `nama_gejala` varchar(255) NOT NULL,
  PRIMARY KEY (`id_gejala`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_gejala`
--

INSERT INTO `tb_gejala` (`kode_gejala`, `nama_gejala`) VALUES
('G001', 'Komputer tidak mau menyala sama sekali'),
('G002', 'Komputer menyala tapi tidak ada tampilan di monitor'),
('G003', 'Komputer sering restart sendiri'),
('G004', 'Komputer mengeluarkan bunyi beep panjang'),
('G005', 'Komputer mengeluarkan bunyi beep pendek berulang'),
('G006', 'Komputer terasa lambat saat dioperasikan'),
('G007', 'Komputer sering hang/not responding'),
('G008', 'Komputer mengeluarkan suara bising dari kipas'),
('G009', 'Komputer cepat panas'),
('G010', 'Layar monitor berkedip-kedip'),
('G011', 'Layar monitor berwarna biru (blue screen)'),
('G012', 'Harddisk mengeluarkan suara aneh'),
('G013', 'File sering corrupt atau rusak'),
('G014', 'Komputer tidak bisa mengakses internet'),
('G015', 'Keyboard tidak berfungsi sebagian atau seluruhnya'),
('G016', 'Mouse tidak berfungsi atau bergerak sendiri'),
('G017', 'Printer tidak terdeteksi oleh komputer'),
('G018', 'Printer mencetak dengan hasil tidak sempurna'),
('G019', 'Komputer tidak mengenali USB flashdisk'),
('G020', 'Sistem operasi tidak bisa booting');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kerusakan`
--

CREATE TABLE `tb_kerusakan` (
  `id_kerusakan` int(11) NOT NULL AUTO_INCREMENT,
  `kode_kerusakan` varchar(10) NOT NULL,
  `nama_kerusakan` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `solusi` text NOT NULL,
  PRIMARY KEY (`id_kerusakan`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_kerusakan`
--

INSERT INTO `tb_kerusakan` (`kode_kerusakan`, `nama_kerusakan`, `deskripsi`, `solusi`) VALUES
('K001', 'Kerusakan Power Supply', 'Power supply adalah komponen yang menyediakan daya listrik untuk semua komponen dalam komputer. Kerusakan pada power supply menyebabkan komputer tidak dapat menyala atau sering restart sendiri.', 'Ganti power supply dengan yang baru. Pastikan spesifikasi power supply sesuai dengan kebutuhan komputer Anda. Jika memungkinkan, bawa ke teknisi untuk penggantian yang aman.'),
('K002', 'Kerusakan RAM (Random Access Memory)', 'RAM adalah komponen penyimpanan sementara yang digunakan komputer untuk menjalankan program. Kerusakan pada RAM dapat menyebabkan komputer lambat, sering hang, atau tidak mau booting.', 'Coba bersihkan slot RAM dengan kuas halus. Jika masih bermasalah, ganti dengan RAM baru yang kompatibel dengan motherboard Anda. Pastikan kapasitas dan tipe RAM sesuai.'),
('K003', 'Kerusakan Harddisk', 'Harddisk adalah media penyimpanan utama pada komputer. Kerusakan harddisk dapat menyebabkan file corrupt, sistem tidak bisa booting, atau komputer lambat.', 'Backup data penting segera jika masih bisa diakses. Jalankan disk check untuk memperbaiki bad sector. Jika kerusakan parah, ganti dengan harddisk baru dan install ulang sistem operasi.'),
('K004', 'Kerusakan VGA Card', 'VGA Card bertanggung jawab untuk menampilkan gambar ke monitor. Kerusakan pada VGA dapat menyebabkan tidak ada tampilan, layar berkedip, atau blue screen.', 'Coba bersihkan slot VGA dan pasang kembali. Update driver VGA ke versi terbaru. Jika masih bermasalah, ganti dengan VGA card baru yang kompatibel.'),
('K005', 'Kerusakan Motherboard', 'Motherboard adalah papan sirkuit utama tempat semua komponen komputer terhubung. Kerusakan motherboard bisa menyebabkan berbagai masalah serius pada komputer.', 'Kerusakan motherboard biasanya memerlukan penggantian. Bawa komputer ke teknisi profesional untuk diagnosis lebih lanjut dan penggantian motherboard jika diperlukan.'),
('K006', 'Kerusakan Processor/CPU', 'Processor adalah otak komputer yang memproses semua instruksi. Kerusakan processor dapat menyebabkan komputer tidak menyala, restart sendiri, atau hang.', 'Pastikan processor tidak overheat dengan membersihkan heatsink dan fan. Jika processor rusak, ganti dengan yang baru yang kompatibel dengan socket motherboard Anda.'),
('K007', 'Masalah Sistem Operasi', 'Sistem operasi adalah software yang mengelola hardware dan software lain di komputer. Kerusakan pada sistem operasi bisa karena file corrupt atau virus.', 'Coba repair sistem operasi menggunakan installation disk. Jika tidak berhasil, backup data penting dan install ulang sistem operasi. Pastikan menggunakan antivirus yang updated.'),
('K008', 'Masalah Driver', 'Driver adalah software yang memungkinkan sistem operasi berkomunikasi dengan hardware. Driver yang rusak atau tidak kompatibel dapat menyebabkan hardware tidak berfungsi.', 'Update driver ke versi terbaru dari situs resmi produsen hardware. Jika masalah terjadi setelah update driver, coba rollback ke versi sebelumnya yang stabil.');

-- --------------------------------------------------------

--
-- Table structure for table `tb_rule`
--

CREATE TABLE `tb_rule` (
  `id_rule` int(11) NOT NULL AUTO_INCREMENT,
  `kode_rule` varchar(10) NOT NULL,
  `if_gejala` text NOT NULL,
  `then_kerusakan` varchar(10) NOT NULL,
  PRIMARY KEY (`id_rule`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_rule`
--

INSERT INTO `tb_rule` (`kode_rule`, `if_gejala`, `then_kerusakan`) VALUES
('R001', 'G001,G003,G004', 'K001'),
('R002', 'G001,G002,G005', 'K005'),
('R003', 'G006,G007,G011', 'K002'),
('R004', 'G012,G013,G020', 'K003'),
('R005', 'G002,G010,G011', 'K004'),
('R006', 'G003,G008,G009', 'K006'),
('R007', 'G011,G020', 'K007'),
('R008', 'G014,G017,G019', 'K008');