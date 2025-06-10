-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2025 at 07:49 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `log_`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2025_04_27_061310_create_users_table', 1),
(2, '2025_04_27_062443_create_sessions_table', 1),
(3, '2025_06_09_180329_usertablemodify', 2);

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('3nhzywVmcBrkGrvmPovGj6F5pGV9Eob0bgx0odAG', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36 Edg/137.0.0.0', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoieVdVM0hsVGZpcVpibHhDR25STFptb2Y0bndSWnB4NndwR1BaYVFJOCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbi9kYXNoYm9hcmQiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO30=', 1749534386);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` int(11) NOT NULL,
  `work` varchar(50) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `place` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`, `work`, `age`, `created_at`, `updated_at`, `place`) VALUES
(1, 'admin', 'admin@gmail.com', '$2y$12$5ZBh6v7yvVi7ou0/GxDsA.1596AKhi9Zf6xUSOWN6/LJ9JR30y6OS', 0, NULL, NULL, '2025-06-09 11:03:03', '2025-06-09 11:03:03', NULL),
(6, 'mubi', 'mubi@gmail.com', '$2y$12$nVQdbdc5QdysSL/Ic4Bzk.koBQlqWqwP.Z7VpJiRjskbGC/jna6jy', 1, 'ias', NULL, '2025-06-09 13:21:47', '2025-06-10 00:09:06', 'cbee'),
(9, 'aaa', 'dmin@gmail.com', '$2y$12$mTxT/4HAlAk.gniwFs8sve9SYIkorsXDWiObIUC/3vq/cduhOAjSu', 1, 'aa', NULL, '2025-06-09 14:10:26', '2025-06-10 00:15:10', 'aa'),
(10, 'yahi', 'adn@gmail.com', '$2y$12$PVuE9eBsccMD9VGoACt4HuyPFYyo8maBPy5L39lgMK3vhmt0aos52', 1, 'a', NULL, '2025-06-09 14:12:49', '2025-06-09 14:12:49', 'a'),
(11, 'aa', '', '$2y$12$iZTXRr5GFHce7ajlyQzxAe0IzqdRzAvNVXgDzavFKesGFLLBP/Xfy', 1, 'aa', NULL, '2025-06-09 14:40:21', '2025-06-10 00:07:48', 'aa'),
(12, 'abdulla', '', '$2y$12$xkvCmVU0vgjCp1kvjgatmeZLaXx3SwT20wPhQ2FWkEIH/raZIKUFu', 1, 'b.pharm', NULL, '2025-06-09 23:56:21', '2025-06-10 00:07:58', 'apk'),
(13, 'yahii', 'yahi@gmail.com', '$2y$12$HWRNzlwovvdS.Agm5adXSuYLNTSXKsg9iEQPGWxQxOQKq.Mq4xk/W', 1, 'developer', NULL, '2025-06-10 00:15:56', '2025-06-10 00:15:56', 'tuty');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
