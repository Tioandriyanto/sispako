-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 20, 2025 at 04:28 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pakar`
--

-- --------------------------------------------------------

--
-- Table structure for table `analisa`
--

CREATE TABLE `analisa` (
  `Id_Analisa` int NOT NULL,
  `Solusi` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `Id_Kerusakan` int NOT NULL,
  `Tanggal` date NOT NULL,
  `Id_User` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `detail_kerusakan`
--

CREATE TABLE `detail_kerusakan` (
  `Id_Kerusakan` int NOT NULL,
  `Id_Gejala` int NOT NULL,
  `Id_Analisa` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gejala`
--

CREATE TABLE `gejala` (
  `Id_Gejala` int NOT NULL,
  `Nama_Gejala` varchar(50) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kerusakan`
--

CREATE TABLE `kerusakan` (
  `Id_Kerusakan` int NOT NULL,
  `Nama_Kerusakan` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `Keterangan` varchar(100) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kerusakan`
--

INSERT INTO `kerusakan` (`Id_Kerusakan`, `Nama_Kerusakan`, `Keterangan`) VALUES
(0, 'Belum Diketahui', 'Belum ada kerusakan yang ditentukan');

-- --------------------------------------------------------

--
-- Table structure for table `memiliki`
--

CREATE TABLE `memiliki` (
  `Id_Gejala` int NOT NULL,
  `Id_Kerusakan` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `Id_User` int NOT NULL,
  `Username` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `Email` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `Jenis_Komputer` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `Id_Kerusakan` int DEFAULT NULL,
  `Password` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`Id_User`, `Username`, `Email`, `Jenis_Komputer`, `Id_Kerusakan`, `Password`) VALUES
(1, 'arr', 'arifsantoso.bk@gmail.com', 'Laptop', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `analisa`
--
ALTER TABLE `analisa`
  ADD PRIMARY KEY (`Id_Analisa`),
  ADD KEY `Id_User` (`Id_User`),
  ADD KEY `Id_Kerusakan` (`Id_Kerusakan`);

--
-- Indexes for table `detail_kerusakan`
--
ALTER TABLE `detail_kerusakan`
  ADD PRIMARY KEY (`Id_Kerusakan`),
  ADD KEY `Id_Analisa` (`Id_Analisa`),
  ADD KEY `Id_Gejala` (`Id_Gejala`);

--
-- Indexes for table `gejala`
--
ALTER TABLE `gejala`
  ADD PRIMARY KEY (`Id_Gejala`);

--
-- Indexes for table `kerusakan`
--
ALTER TABLE `kerusakan`
  ADD PRIMARY KEY (`Id_Kerusakan`);

--
-- Indexes for table `memiliki`
--
ALTER TABLE `memiliki`
  ADD PRIMARY KEY (`Id_Gejala`,`Id_Kerusakan`),
  ADD KEY `Id_Kerusakan` (`Id_Kerusakan`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`Id_User`),
  ADD KEY `Id_Kerusakan` (`Id_Kerusakan`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `analisa`
--
ALTER TABLE `analisa`
  ADD CONSTRAINT `analisa_ibfk_1` FOREIGN KEY (`Id_User`) REFERENCES `pengguna` (`Id_User`),
  ADD CONSTRAINT `analisa_ibfk_2` FOREIGN KEY (`Id_Kerusakan`) REFERENCES `kerusakan` (`Id_Kerusakan`);

--
-- Constraints for table `detail_kerusakan`
--
ALTER TABLE `detail_kerusakan`
  ADD CONSTRAINT `detail_kerusakan_ibfk_1` FOREIGN KEY (`Id_Analisa`) REFERENCES `analisa` (`Id_Analisa`),
  ADD CONSTRAINT `detail_kerusakan_ibfk_2` FOREIGN KEY (`Id_Kerusakan`) REFERENCES `kerusakan` (`Id_Kerusakan`),
  ADD CONSTRAINT `detail_kerusakan_ibfk_3` FOREIGN KEY (`Id_Gejala`) REFERENCES `gejala` (`Id_Gejala`);

--
-- Constraints for table `memiliki`
--
ALTER TABLE `memiliki`
  ADD CONSTRAINT `memiliki_ibfk_1` FOREIGN KEY (`Id_Gejala`) REFERENCES `gejala` (`Id_Gejala`),
  ADD CONSTRAINT `memiliki_ibfk_2` FOREIGN KEY (`Id_Kerusakan`) REFERENCES `kerusakan` (`Id_Kerusakan`);

--
-- Constraints for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD CONSTRAINT `pengguna_ibfk_1` FOREIGN KEY (`Id_Kerusakan`) REFERENCES `kerusakan` (`Id_Kerusakan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
