-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2020 at 02:01 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_biodatacalon`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(7, '2014_10_12_100000_create_password_resets_table', 1),
(8, '2019_08_19_000000_create_failed_jobs_table', 1),
(9, '2020_04_07_064625_create_users_table', 1),
(10, '2020_04_07_065355_create_riwayat_pendidikan_table', 1),
(11, '2020_04_07_065712_create_riwayat_pelatihan_table', 1),
(12, '2020_04_07_065907_create_riwayat_pekerjaan_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `riwayat_pekerjaan`
--

CREATE TABLE `riwayat_pekerjaan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `users_id` bigint(20) UNSIGNED NOT NULL,
  `nama_perusahaan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `posisi_terakhir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pendapatan_terakhir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun_riwayat_pekerjaan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `riwayat_pekerjaan`
--

INSERT INTO `riwayat_pekerjaan` (`id`, `users_id`, `nama_perusahaan`, `posisi_terakhir`, `pendapatan_terakhir`, `tahun_riwayat_pekerjaan`, `created_at`, `updated_at`) VALUES
(1, 1, 'PT. EDII', 'Web Developer', '5500000', '2020', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `riwayat_pelatihan`
--

CREATE TABLE `riwayat_pelatihan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `users_id` bigint(20) UNSIGNED NOT NULL,
  `nama_pelatihan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sertifikat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun_riwayat_pelatihan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `riwayat_pelatihan`
--

INSERT INTO `riwayat_pelatihan` (`id`, `users_id`, `nama_pelatihan`, `sertifikat`, `tahun_riwayat_pelatihan`, `created_at`, `updated_at`) VALUES
(1, 1, 'Android Expert', 'Ya', '2020', NULL, NULL),
(2, 1, 'Android Pemula', 'Ya', '2020', NULL, NULL),
(3, 1, 'Web Expert', 'Ya', '2020', NULL, NULL),
(4, 1, 'Web Pemula', 'Ya', '2020', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `riwayat_pendidikan`
--

CREATE TABLE `riwayat_pendidikan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `users_id` bigint(20) UNSIGNED NOT NULL,
  `jenjang_pend_terakhir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_instansi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jurusan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun_lulus` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ipk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `riwayat_pendidikan`
--

INSERT INTO `riwayat_pendidikan` (`id`, `users_id`, `jenjang_pend_terakhir`, `nama_instansi`, `jurusan`, `tahun_lulus`, `ipk`, `created_at`, `updated_at`) VALUES
(1, 1, 'D3', 'Universitas Telkom', 'Informatika', '2020', '3.6', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `posisi_dilamar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_lengkap` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_ktp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ttl` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jenis_kelamin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `agama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gol_darah` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat_ktp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat_tinggal` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_telp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orang_terdekat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `skill` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bersedia_penempatan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `penghasilan_diharapkan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `email_verified_at`, `role`, `posisi_dilamar`, `nama_lengkap`, `no_ktp`, `ttl`, `jenis_kelamin`, `agama`, `gol_darah`, `status`, `alamat_ktp`, `alamat_tinggal`, `no_telp`, `orang_terdekat`, `skill`, `bersedia_penempatan`, `penghasilan_diharapkan`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'zakariawahyu', '$2y$10$jQuu/fLAL7Apeeog4kmexOEQeKJ92Oi.NkGJr8oY.w3mF1RZmKD2u', 'zakarianur6@gmail.com', NULL, 'user', 'PHP Developer', 'Zakaria Wahyu Nur Utomo', '3310112006990004', 'Klaten, 25 Juni 1999', 'l', 'Islam', 'O', 'Lajang', NULL, 'Sukapura, Dayeuhkolot, Bandung', '082309027297', 'Akbar Gustama', 'Web Developer', 'y', '5500000', NULL, NULL, '2020-04-07 03:14:54'),
(2, 'admin', '$2y$10$2odBVtoHeXzcEJEvd4c8VeDwS/K1R0XNAT94iFB6jKUM8NM1vIGYS', 'admin@gmail.com', NULL, 'admin', 'PHP Developer', 'Admin', '3310112006990007', 'Klaten, 25 Juni 1999', 'l', 'Islam', 'O', 'Lajang', NULL, 'Sukapura, Dayeuhkolot, Bandung', '082309027297', 'Akbar Gustama', 'Web Developer', 'y', '6000000', NULL, NULL, '2020-04-07 04:45:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `riwayat_pekerjaan`
--
ALTER TABLE `riwayat_pekerjaan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `riwayat_pekerjaan_users_id_foreign` (`users_id`);

--
-- Indexes for table `riwayat_pelatihan`
--
ALTER TABLE `riwayat_pelatihan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `riwayat_pelatihan_users_id_foreign` (`users_id`);

--
-- Indexes for table `riwayat_pendidikan`
--
ALTER TABLE `riwayat_pendidikan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `riwayat_pendidikan_users_id_foreign` (`users_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `riwayat_pekerjaan`
--
ALTER TABLE `riwayat_pekerjaan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `riwayat_pelatihan`
--
ALTER TABLE `riwayat_pelatihan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `riwayat_pendidikan`
--
ALTER TABLE `riwayat_pendidikan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `riwayat_pekerjaan`
--
ALTER TABLE `riwayat_pekerjaan`
  ADD CONSTRAINT `riwayat_pekerjaan_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `riwayat_pelatihan`
--
ALTER TABLE `riwayat_pelatihan`
  ADD CONSTRAINT `riwayat_pelatihan_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `riwayat_pendidikan`
--
ALTER TABLE `riwayat_pendidikan`
  ADD CONSTRAINT `riwayat_pendidikan_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
