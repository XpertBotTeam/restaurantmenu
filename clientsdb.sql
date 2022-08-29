-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 29, 2022 at 01:27 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `clientsdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(8) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `phone`, `remember_token`, `created_at`, `updated_at`) VALUES
(14, 'youssef', 'youssefshreim78@icloud.com', NULL, '$2y$10$xqWBw9fYsntoLN8e9Vb9TOKO8LAyNXaGR/LGR1vW9C1ad3w.VJZqO', '', NULL, '2022-08-18 08:34:14', '2022-08-18 08:34:14'),
(15, 'Search', 'search78@icloud.com', NULL, '$2y$10$h3NFgPyD7wpxSzL7mgRuM.p3yIyMHaPplJ.u368KK3nuZFsV.lbdW', '', NULL, '2022-08-18 08:46:21', '2022-08-18 08:46:21'),
(16, 'youssef', 'youssefshreim888@icloud.com', NULL, '$2y$10$ZW7ncRadG5zRYweWAAfERuusISnn/p0ijFCKgxUOa93Li4mOmGKN2', '76969553', NULL, '2022-08-18 10:12:14', '2022-08-18 10:12:14'),
(17, 'youssef', 'youssefshreim8888@icloud.com', NULL, '$2y$10$QOx7fc3F28c/R3mjiJ78uODRbmf0O12Y8zbDLLB343W38duanjlsq', '76969553', NULL, '2022-08-18 10:44:28', '2022-08-18 10:44:28'),
(18, 'youssef', 'youssefshreim88888@icloud.com', NULL, '$2y$10$9B2stRnnlQcXGAZLc4L2V.XeuHm.Aow38uZ5gCUL0LW65zjKWTaMy', '76969553', NULL, '2022-08-18 10:48:02', '2022-08-18 10:48:02'),
(19, 'youssef', 'youssefshreim888888@icloud.com', NULL, '$2y$10$yQrJ/2Z1fwQS6nyS6r7phO239nY6oXM4gWV0C5ly7BFjsiIhfhFvm', '76969553', NULL, '2022-08-18 10:50:48', '2022-08-18 10:50:48'),
(20, 'لاابسا', 'youssefshreim74561238@icloud.com', NULL, '$2y$10$hS16iBZwgtRhiV3.Rpo.hOJRpv7yG2/YzQaqn6c5J6hztIJB0VIqG', '76969553', NULL, '2022-08-19 07:45:21', '2022-08-19 07:45:21'),
(21, 'youssef', 'youssefshreim13245678@icloud.com', NULL, '$2y$10$EcWrJtt/ulsYwCmldx3YMeBcD2K7pgBtnxPB4196zGrCwFzwrl28q', '76969553', NULL, '2022-08-19 07:48:22', '2022-08-19 07:48:22'),
(22, 'Search', 'youssef.chreim@st.ul.edu.lb', NULL, '$2y$10$N4YqMjlPl0CokcXnWcqtp.xbhF/oDk6ggzWmfUaWwLuwmjgWSNcLa', '76969557', NULL, '2022-08-19 07:55:19', '2022-08-19 07:55:19'),
(23, 'youssef', 'youssefshreim7558@icloud.com', NULL, '$2y$10$Zr2sLqzvya.Wc4bhoi3SkuENsHKKkwCGZOqFJToZEvxIldaQnTeoK', '76969553', NULL, '2022-08-19 10:22:51', '2022-08-19 10:22:51'),
(24, 'anis', 'anisshriem@gmiai.com', NULL, '$2y$10$1x0KeMSBrXh0LEGpLGuk4uto.P2YviBuvfUSObetLLJAPoJRDPUg6', '7696553', NULL, '2022-08-23 08:09:40', '2022-08-23 08:09:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
