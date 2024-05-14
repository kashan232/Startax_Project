-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2024 at 12:22 AM
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
-- Database: `star_tax`
--

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `admin_or_user_id` int(11) NOT NULL,
  `client_type` text DEFAULT NULL,
  `AY` text DEFAULT NULL,
  `first_name` text DEFAULT NULL,
  `middel_name` text DEFAULT NULL,
  `last_name` text DEFAULT NULL,
  `father_name` text DEFAULT NULL,
  `DOB` text DEFAULT NULL,
  `PAN_numbr` text DEFAULT NULL,
  `gender` text DEFAULT NULL,
  `marital_status` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `admin_or_user_id`, `client_type`, `AY`, `first_name`, `middel_name`, `last_name`, `father_name`, `DOB`, `PAN_numbr`, `gender`, `marital_status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 2, 'Individual', '2024-2025', 'Muhammad testing', 'Kashan', 'Shaikh', 'Sohail Shaikh', '2001-01-02', '212312321', 'Select Option', 'Select Option', '2024-05-06 15:25:24', '2024-05-07 14:33:42', NULL),
(2, 2, 'Individual', '2024-2025', 'Muhammad', 'Zain', 'Shaikh', 'Sohail Shaikh', '2010-03-02', '34343434', 'Male', 'Unmarried', '2024-05-06 15:57:56', '2024-05-06 15:57:56', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `client_addresses`
--

CREATE TABLE `client_addresses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `admin_or_user_id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `flat_door` text DEFAULT NULL,
  `Premise_name` text DEFAULT NULL,
  `road_street` text DEFAULT NULL,
  `pin_code` text DEFAULT NULL,
  `Area_locality` text DEFAULT NULL,
  `town_city` text DEFAULT NULL,
  `State` text DEFAULT NULL,
  `Country` text DEFAULT NULL,
  `mobile_phone` text DEFAULT NULL,
  `email_address` text DEFAULT NULL,
  `email_address_secondary` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `client_addresses`
--

INSERT INTO `client_addresses` (`id`, `admin_or_user_id`, `client_id`, `flat_door`, `Premise_name`, `road_street`, `pin_code`, `Area_locality`, `town_city`, `State`, `Country`, `mobile_phone`, `email_address`, `email_address_secondary`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 2, 1, 'testing', 'testing', 'testing', '32123', 'hyderabad', 'hyd', 'DELHI', 'INDIA', '03173859647', 'shaikhkashan670@gmail.com', 'shaikhkashan670@gmail.com', '2024-05-07 17:11:15', '2024-05-07 17:11:15', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_05_06_192510_create_clients_table', 2),
(6, '2024_05_07_213554_create_client_addresses_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `usertype` varchar(255) NOT NULL DEFAULT 'user',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `usertype`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$10$7cxC5MqA.iei7O0cnOKmAuz1M25JZlpTYBhYJKYDEUcYK1h/zjkX.', 'admin', NULL, '2024-04-30 18:29:24', '2024-04-30 18:29:24'),
(2, 'user', 'user@gmail.com', NULL, '$2y$10$GovVZMIspy0v2puuLJRPtuB.C7bLgE29CQTCmTTB8VvhVHuofjb9e', 'user', NULL, '2024-04-30 18:30:03', '2024-04-30 18:30:03'),
(3, 'kashan', 'kashan12@gmail.com', NULL, '$2y$10$NKtbLKDWdQ74UXAzfPfSwe3nuMT8ucGUjyRtOGxIGkjMKd2YmYNuC', 'user', NULL, '2024-05-01 10:31:42', '2024-05-01 10:31:42'),
(4, 'Ali', 'ali12@gmail.com', NULL, '$2y$10$x4Be4tJfG9g9Re41x/.na.6VOpNatw/MOfbwnIoL22JJ0y2uK/RkS', 'user', NULL, '2024-05-01 10:33:17', '2024-05-01 10:33:17'),
(5, 'usertesting', 'usertest12@gmail.com', NULL, '$2y$10$FtqFvQdM6JWr4R9RgJqsceeoISjrizxHQSy6IvSYfr.d3FQVC6m.6', 'user', NULL, '2024-05-01 10:34:51', '2024-05-01 10:34:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client_addresses`
--
ALTER TABLE `client_addresses`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

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
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `client_addresses`
--
ALTER TABLE `client_addresses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
