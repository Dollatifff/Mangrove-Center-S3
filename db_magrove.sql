-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 06, 2023 at 05:05 PM
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
-- Database: `db_magrove`
--

-- --------------------------------------------------------

--
-- Table structure for table `even`
--

CREATE TABLE `even` (
  `id` int NOT NULL,
  `nama_event` varchar(225) NOT NULL,
  `waktu_event` datetime NOT NULL,
  `thumbnail` varchar(100) NOT NULL,
  `deskripsi_event` longtext NOT NULL,
  `lokasi` longtext NOT NULL,
  `lat` varchar(100) NOT NULL,
  `lng` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `even`
--

INSERT INTO `even` (`id`, `nama_event`, `waktu_event`, `thumbnail`, `deskripsi_event`, `lokasi`, `lat`, `lng`, `created_at`, `updated_at`) VALUES
(8, 'event penanaman sejuta mangrove', '2023-11-23 10:23:00', 'app/event/vnAYcwIgWojjH7uKC4O0kZ8YX0xPC9RSZWO1YkW3.jpg', 'menanam sejuta mangrove', 'Tsantsabane Ward 6, Tsantsabane Local Municipality, ZF Mgcawu District Municipality, Northern Cape, Afrika Selatan', '-28.3960315', '22.40496273', '2023-11-22 20:25:37', '2023-11-22 20:25:37'),
(9, 'penanaman 2 juta mangrove', '2023-11-30 11:10:00', 'app/event/6RVPjpZbqHI85VLjugTg0sXRJQCscZtJ066cIWgZ.jpg', 'ihuig23rx3n9yr7838t7`873rtg`8trhwuh', 'Kuala Satong, Matan Hilir Utara, Ketapang, Kalimantan Barat, Kalimantan, Indonesia', '-1.39950978', '110.0680104', '2023-11-29 21:11:09', '2023-11-29 21:11:09');

-- --------------------------------------------------------

--
-- Table structure for table `katalog`
--

CREATE TABLE `katalog` (
  `id` int NOT NULL,
  `nama_pohon` varchar(225) NOT NULL,
  `foto` varchar(225) NOT NULL,
  `deskripsi` longtext NOT NULL,
  `create_at` timestamp NULL DEFAULT NULL,
  `update_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `penanaman`
--

CREATE TABLE `penanaman` (
  `id` int NOT NULL,
  `user_id` int DEFAULT NULL,
  `event_id` int DEFAULT NULL,
  `lokasi` longtext,
  `sampel` longtext,
  `tanggal_penanaman` datetime DEFAULT NULL,
  `jenis_mangrove` varchar(255) DEFAULT NULL,
  `jenis_tanah` varchar(255) DEFAULT NULL,
  `masa_tumbuh` varchar(255) DEFAULT NULL,
  `umur_tanaman` varchar(255) DEFAULT NULL,
  `deskripsi` text,
  `status_penanaman` enum('baru ditanam','hidup','mati') DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `lat` varchar(255) DEFAULT NULL,
  `lng` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` char(36) NOT NULL,
  `nama_lengkap` int NOT NULL,
  `username` int NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `foto_profil` varchar(255) NOT NULL,
  `bio` varchar(255) NOT NULL,
  `remember_token` varchar(255) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `even`
--
ALTER TABLE `even`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `katalog`
--
ALTER TABLE `katalog`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `even`
--
ALTER TABLE `even`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `katalog`
--
ALTER TABLE `katalog`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
