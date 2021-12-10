-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2021 at 12:38 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_daramahkota`
--

-- --------------------------------------------------------

--
-- Table structure for table `auth_activation_attempts`
--

CREATE TABLE `auth_activation_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups`
--

CREATE TABLE `auth_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_groups`
--

INSERT INTO `auth_groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'App Administrator'),
(2, 'user', 'App User');

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups_permissions`
--

CREATE TABLE `auth_groups_permissions` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_groups_permissions`
--

INSERT INTO `auth_groups_permissions` (`group_id`, `permission_id`) VALUES
(1, 1),
(1, 2),
(1, 3),
(1, 4),
(1, 5),
(1, 6),
(2, 2),
(2, 3),
(2, 4),
(2, 5),
(2, 6);

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups_users`
--

CREATE TABLE `auth_groups_users` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_groups_users`
--

INSERT INTO `auth_groups_users` (`group_id`, `user_id`) VALUES
(1, 1),
(2, 2),
(2, 3),
(2, 4),
(2, 5),
(2, 6);

-- --------------------------------------------------------

--
-- Table structure for table `auth_logins`
--

CREATE TABLE `auth_logins` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `user_id` int(11) UNSIGNED DEFAULT NULL,
  `date` datetime NOT NULL,
  `success` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_logins`
--

INSERT INTO `auth_logins` (`id`, `ip_address`, `email`, `user_id`, `date`, `success`) VALUES
(1, '::1', 'rahadian.ibrahim@gmail.com', 1, '2021-08-26 01:22:51', 1),
(2, '::1', 'rahadian.ibrahim@gmail.com', 1, '2021-08-26 01:25:52', 1),
(3, '::1', 'rahadian.ibrahim@gmail.com', 1, '2021-08-26 01:30:18', 1),
(4, '::1', 'rahadian.ibrahim@gmail.com', 1, '2021-08-26 01:37:26', 1),
(5, '::1', 'rahadian.ibrahim@gmail.com', 1, '2021-08-26 01:39:24', 1),
(6, '::1', 'rahadian.ibrahim@gmail.com', 1, '2021-08-26 04:44:19', 1),
(7, '::1', 'rahadian.ibrahim@gmail.com', 1, '2021-08-26 04:59:41', 1),
(8, '::1', 'rahadian.ibrahim@gmail.com', 1, '2021-08-26 23:05:45', 1),
(9, '::1', 'rahadian.ibrahim@gmail.com', 1, '2021-08-27 05:50:38', 1),
(10, '::1', 'ibrahimjjl@gmail.com', 2, '2021-08-27 05:51:04', 1),
(11, '::1', 'ibrahimjjl@gmail.com', 2, '2021-08-27 22:31:08', 1),
(12, '::1', 'rahadian.ibrahim@gmail.com', 1, '2021-08-27 22:31:25', 1),
(13, '::1', 'ibrahimjjl@gmail.com', 2, '2021-08-27 22:35:08', 1),
(14, '::1', 'ibrahimjjl@gmail.com', 2, '2021-08-27 22:35:15', 1),
(15, '::1', 'rahadian.ibrahim@gmail.com', 1, '2021-08-27 22:44:09', 1),
(16, '::1', 'daftarpakeadmin@gmail.com', 3, '2021-08-27 22:44:53', 1),
(17, '::1', 'daftarpakeadmin@gmail.com', 3, '2021-08-27 22:46:46', 1),
(18, '::1', 'rahadian.ibrahim@gmail.com', 1, '2021-08-27 22:49:04', 1),
(19, '::1', 'rahadian.ibrahim@gmail.com', 1, '2021-08-27 22:49:57', 1),
(20, '::1', 'rahadian.ibrahim@gmail.com', 1, '2021-08-28 20:58:52', 1),
(21, '::1', 'ibrahimjjl@gmail.com', 2, '2021-08-30 22:09:34', 1),
(22, '::1', 'rahadian.ibrahim@gmail.com', 1, '2021-08-31 06:23:21', 1),
(23, '::1', 'rahadian.ibrahim@gmail.com', 1, '2021-08-31 08:13:28', 1),
(24, '::1', 'ibrahimjjl@gmail.com', 2, '2021-08-31 08:17:01', 1),
(25, '::1', 'rahadian.ibrahim@gmail.com', 1, '2021-08-31 08:18:30', 1),
(26, '::1', 'rahadian.ibrahim@gmail.com', 1, '2021-09-01 22:24:01', 1),
(27, '::1', 'rahadian.ibrahim@gmail.com', 1, '2021-10-04 21:37:31', 1),
(28, '::1', 'rahadian.ibrahim@gmail.com', 1, '2021-10-04 21:40:31', 1),
(29, '::1', 'rahadian.ibrahim@gmail.com', 1, '2021-10-04 21:55:19', 1),
(30, '::1', 'rahadian.ibrahim@gmail.com', 1, '2021-10-05 04:45:31', 1),
(31, '::1', 'rahadian.ibrahim@gmail.com', 1, '2021-10-06 07:42:39', 1),
(32, '::1', 'rahadian.ibrahim@gmail.com', 1, '2021-10-20 00:51:43', 1),
(33, '::1', 'ibrahimjjl@gmail.com', 2, '2021-10-20 01:37:12', 1),
(34, '::1', 'rahadian.ibrahim@gmail.com', 1, '2021-10-20 04:00:14', 1),
(35, '::1', 'admin', NULL, '2021-10-20 21:11:25', 0),
(36, '::1', 'rahadian.ibrahim@gmail.com', 1, '2021-10-20 21:11:30', 1),
(37, '::1', 'rahadian.ibrahim@gmail.com', 1, '2021-10-26 08:43:51', 1),
(38, '::1', 'rahadian.ibrahim@gmail.com', 1, '2021-10-29 21:28:44', 1),
(39, '::1', 'rahadian.ibrahim@gmail.com', 1, '2021-10-30 05:51:55', 1),
(40, '::1', 'rahadian.ibrahim@gmail.com', 1, '2021-10-30 09:06:27', 1),
(41, '::1', 'rahadian.ibrahim@gmail.com', 1, '2021-10-31 10:34:43', 1),
(42, '::1', 'rahadian.ibrahim@gmail.com', 1, '2021-11-07 21:38:43', 1),
(43, '::1', 'rahadian.ibrahim@gmail.com', 1, '2021-11-07 21:42:30', 1),
(44, '::1', 'ardian@gmail.com', 6, '2021-11-07 21:46:22', 1),
(45, '::1', 'rahadian.ibrahim@gmail.com', 1, '2021-11-07 21:46:50', 1),
(46, '::1', 'ardian@gmail.com', 6, '2021-11-07 21:48:47', 1),
(47, '::1', 'admin', NULL, '2021-11-07 21:49:26', 0),
(48, '::1', 'rahadian.ibrahim@gmail.com', 1, '2021-11-07 21:49:32', 1),
(49, '::1', 'ardian@gmail.com', 6, '2021-11-07 21:50:02', 1),
(50, '::1', 'rahadian.ibrahim@gmail.com', 1, '2021-11-08 21:23:19', 1),
(51, '::1', 'rahadian.ibrahim@gmail.com', 1, '2021-11-09 22:06:13', 1),
(52, '::1', 'rahadian.ibrahim@gmail.com', 1, '2021-11-11 07:00:33', 1),
(53, '::1', 'admin', NULL, '2021-11-15 05:26:25', 0),
(54, '::1', 'rahadian.ibrahim@gmail.com', 1, '2021-11-15 05:26:30', 1),
(55, '::1', 'rahadian.ibrahim@gmail.com', 1, '2021-11-15 19:47:14', 1),
(56, '::1', 'rahadian.ibrahim@gmail.com', 1, '2021-11-16 08:23:43', 1),
(57, '::1', 'rahadian.ibrahim@gmail.com', 1, '2021-11-19 05:50:33', 1),
(58, '::1', 'rahadian.ibrahim@gmail.com', 1, '2021-11-19 19:36:04', 1),
(59, '::1', 'rahadian.ibrahim@gmail.com', 1, '2021-11-21 05:25:25', 1);

-- --------------------------------------------------------

--
-- Table structure for table `auth_permissions`
--

CREATE TABLE `auth_permissions` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_permissions`
--

INSERT INTO `auth_permissions` (`id`, `name`, `description`) VALUES
(1, 'manage-users', 'Manage All Users'),
(2, 'manage-profile', 'Manage Profile'),
(3, 'manage-balita', 'Manage Data Balita'),
(4, 'manage-lansia', 'Manage Data Lansia'),
(5, 'manage-bumil', 'Manage Data Ibu Hamil'),
(6, 'manage-wargavaksin', 'Manage Data Warga Vaksin');

-- --------------------------------------------------------

--
-- Table structure for table `auth_reset_attempts`
--

CREATE TABLE `auth_reset_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_tokens`
--

CREATE TABLE `auth_tokens` (
  `id` int(11) UNSIGNED NOT NULL,
  `selector` varchar(255) NOT NULL,
  `hashedValidator` varchar(255) NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `expires` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_users_permissions`
--

CREATE TABLE `auth_users_permissions` (
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `balita`
--

CREATE TABLE `balita` (
  `nik_balita` varchar(16) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(9) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `berat_lahir` float NOT NULL,
  `panjang_lahir` float NOT NULL,
  `status_kesehatan` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `nik_ayah` varchar(16) DEFAULT NULL,
  `nama_ayah` varchar(50) DEFAULT NULL,
  `nik_ibu` varchar(16) DEFAULT NULL,
  `nama_ibu` varchar(50) DEFAULT NULL,
  `no_hp_ortu` varchar(14) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `balita`
--

INSERT INTO `balita` (`nik_balita`, `nama`, `jenis_kelamin`, `tgl_lahir`, `berat_lahir`, `panjang_lahir`, `status_kesehatan`, `alamat`, `nik_ayah`, `nama_ayah`, `nik_ibu`, `nama_ibu`, `no_hp_ortu`) VALUES
('3275043798666661', 'Antonio Antonio Antonio Antonio', 'Laki-laki', '2021-08-03', 3.9, 30, 'sehat', 'Jl Abcd', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `data_warga_vaksin`
--

CREATE TABLE `data_warga_vaksin` (
  `nik` int(16) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `tanggal_vaksin_pertama` date NOT NULL,
  `tanggal_vaksin_kedua` date DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ibu_hamil`
--

CREATE TABLE `ibu_hamil` (
  `nik_ibu_hamil` varchar(16) NOT NULL,
  `nama_ibu_hamil` varchar(50) NOT NULL,
  `umur` int(2) NOT NULL,
  `hamil_keberapa` int(2) NOT NULL,
  `anak_keberapa` int(2) NOT NULL,
  `hpht` varchar(10) NOT NULL,
  `hpl` varchar(10) NOT NULL,
  `skor_rochjati` int(3) NOT NULL,
  `nama_suami` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_hp` varchar(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ibu_hamil`
--

INSERT INTO `ibu_hamil` (`nik_ibu_hamil`, `nama_ibu_hamil`, `umur`, `hamil_keberapa`, `anak_keberapa`, `hpht`, `hpl`, `skor_rochjati`, `nama_suami`, `alamat`, `no_hp`) VALUES
('3275554413222221', 'Test Nama Ibu', 30, 3, 3, 'gak tau', 'gak tau', 100, 'Dian', 'Jl Abcde', '089811113333');

-- --------------------------------------------------------

--
-- Table structure for table `lansia`
--

CREATE TABLE `lansia` (
  `nik_lansia` varchar(16) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(9) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_hp` varchar(14) DEFAULT NULL,
  `tgl_lahir` date NOT NULL,
  `status_kesehatan` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lansia`
--

INSERT INTO `lansia` (`nik_lansia`, `nama`, `jenis_kelamin`, `alamat`, `no_hp`, `tgl_lahir`, `status_kesehatan`) VALUES
('3275443311119876', 'Ibrahim', 'Laki-laki', 'Jl Akasia K2 no 55', '081213134455', '2019-05-01', 'sehat');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2017-11-20-223112', 'Myth\\Auth\\Database\\Migrations\\CreateAuthTables', 'default', 'Myth\\Auth', 1629958945, 1);

-- --------------------------------------------------------

--
-- Table structure for table `timbang_balita`
--

CREATE TABLE `timbang_balita` (
  `kode_timbang` varchar(10) NOT NULL,
  `nik_balita` varchar(16) NOT NULL,
  `berat_badan` float NOT NULL,
  `tinggi_badan` float NOT NULL,
  `lingkar_kepala` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `timbang_balita`
--

INSERT INTO `timbang_balita` (`kode_timbang`, `nik_balita`, `berat_badan`, `tinggi_badan`, `lingkar_kepala`) VALUES
('TB000001', '3275043798666661', 20, 18, 15),
('TB000002', '3275043798666661', 25, 20, 18),
('TB000003', '3275043798666661', 30, 25, 19);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `password_hash` varchar(255) NOT NULL,
  `reset_hash` varchar(255) DEFAULT NULL,
  `reset_at` datetime DEFAULT NULL,
  `reset_expires` datetime DEFAULT NULL,
  `activate_hash` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `status_message` varchar(255) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `force_pass_reset` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `fullname`, `password_hash`, `reset_hash`, `reset_at`, `reset_expires`, `activate_hash`, `status`, `status_message`, `active`, `force_pass_reset`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'rahadian.ibrahim@gmail.com', 'admin', NULL, '$2y$10$L.yBXeedPs35PsOmVzRMxu637mP/SSZB8ow.EfmcMTbVG2CXgHa9K', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-08-26 01:22:43', '2021-08-26 01:22:43', NULL),
(2, 'ibrahimjjl@gmail.com', 'testuser ', NULL, '$2y$10$PM7Wo0D.iq60SixbLMn0ReKQHQBg.EswPamEIntJa0Q1uADpdjipy', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-08-26 08:20:33', '2021-08-26 08:20:33', NULL),
(3, 'daftarpakeadmin@gmail.com', 'testuser2', NULL, '$2y$10$9HAD9JOS8jGFdxz5jbTOaOCRyXsn8IY4JkLLLVStKpBOyFqEUr5Fy', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-08-27 22:44:37', '2021-08-27 22:44:37', NULL),
(4, 'testuser3@gmail.com', 'testuser3', NULL, '$2y$10$g4EKqUSfQaej56K8uEREH.mwWPZtS470MWjsmjM9dfTucbO7N6eoS', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-08-27 22:49:32', '2021-08-27 22:49:32', NULL),
(5, 'testuser4@gmail.com', 'testuser4', NULL, '$2y$10$nX6uUQf0aa69a16uK7YYcukLrhdMAtWrq25Dq36/XIa3r4I87f0te', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-08-27 22:50:18', '2021-08-27 22:50:18', NULL),
(6, 'ardian@gmail.com', 'ardian', NULL, '$2y$10$Y7tzl8ffBBJjDNU1fIoRbuA07mAivE9nw7UlXliBP1EUhEtnd/XP6', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-11-07 21:43:34', '2021-11-07 21:43:34', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `warga_vaksin`
--

CREATE TABLE `warga_vaksin` (
  `nik` varchar(16) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(9) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `no_hp` varchar(14) NOT NULL,
  `tgl_vaksin_pertama` date NOT NULL,
  `tgl_vaksin_kedua` date DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `warga_vaksin`
--

INSERT INTO `warga_vaksin` (`nik`, `nama`, `jenis_kelamin`, `alamat`, `no_hp`, `tgl_vaksin_pertama`, `tgl_vaksin_kedua`, `keterangan`) VALUES
('3210222276541245', 'Joni', 'Perempuan', 'Jl Akasia JJJ', '089922347711', '2021-10-01', '2021-10-05', 'sudah vaksin kedua'),
('3275007197602245', 'Lanjar Tampubolon', 'Laki-laki', 'Jr. Rajawali Timur No. 56, Blitar 40447, DIY', '058088250857', '2021-09-01', '2021-10-04', ''),
('3275558864720826', 'Waluyo Pradana', 'Laki-laki', 'Jln. Baranang Siang Indah No. 491, Madiun 38774, Gorontalo', '06151348086 ', '2021-10-03', '0000-00-00', 'Belum vaksin kedua');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_groups`
--
ALTER TABLE `auth_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD KEY `auth_groups_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `group_id_permission_id` (`group_id`,`permission_id`);

--
-- Indexes for table `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD KEY `auth_groups_users_user_id_foreign` (`user_id`),
  ADD KEY `group_id_user_id` (`group_id`,`user_id`);

--
-- Indexes for table `auth_logins`
--
ALTER TABLE `auth_logins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `auth_permissions`
--
ALTER TABLE `auth_permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `auth_tokens_user_id_foreign` (`user_id`),
  ADD KEY `selector` (`selector`);

--
-- Indexes for table `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD KEY `auth_users_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `user_id_permission_id` (`user_id`,`permission_id`);

--
-- Indexes for table `balita`
--
ALTER TABLE `balita`
  ADD PRIMARY KEY (`nik_balita`);

--
-- Indexes for table `data_warga_vaksin`
--
ALTER TABLE `data_warga_vaksin`
  ADD PRIMARY KEY (`nik`);

--
-- Indexes for table `lansia`
--
ALTER TABLE `lansia`
  ADD PRIMARY KEY (`nik_lansia`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `timbang_balita`
--
ALTER TABLE `timbang_balita`
  ADD PRIMARY KEY (`kode_timbang`),
  ADD KEY `FK_nik_balita` (`nik_balita`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `warga_vaksin`
--
ALTER TABLE `warga_vaksin`
  ADD PRIMARY KEY (`nik`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_groups`
--
ALTER TABLE `auth_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `auth_logins`
--
ALTER TABLE `auth_logins`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `auth_permissions`
--
ALTER TABLE `auth_permissions`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD CONSTRAINT `auth_groups_permissions_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD CONSTRAINT `auth_groups_users_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD CONSTRAINT `auth_tokens_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD CONSTRAINT `auth_users_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_users_permissions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `timbang_balita`
--
ALTER TABLE `timbang_balita`
  ADD CONSTRAINT `FK_nik_balita` FOREIGN KEY (`nik_balita`) REFERENCES `balita` (`nik_balita`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
