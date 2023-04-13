-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 09, 2022 at 08:01 AM
-- Server version: 10.3.35-MariaDB-log-cll-lve
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `topunfgj_autofixer`
--

-- --------------------------------------------------------

--
-- Table structure for table `company_vechicles`
--

CREATE TABLE `company_vechicles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `v_make` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `v_model` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `v_year` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vin` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `v_reg` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `company_vechicles`
--

INSERT INTO `company_vechicles` (`id`, `user_id`, `v_make`, `v_model`, `v_year`, `vin`, `v_reg`, `created_at`, `updated_at`) VALUES
(4, 10, 'Toyota', 'Camry', '2019', '1374JFMSJDTEKSFN', '635382', '2022-06-01 01:44:17', '2022-06-01 01:44:17');

-- --------------------------------------------------------

--
-- Table structure for table `documents`
--

CREATE TABLE `documents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `report` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `invoice` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'No Description',
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `documents`
--

INSERT INTO `documents` (`id`, `report`, `invoice`, `description`, `user_id`, `created_at`, `updated_at`) VALUES
(4, '-Diagnostics Report from Auto-fixer-2022-05-24-628cdd42d74fa.pdf', '-Invoice from Auto-fixer -2022-05-24-628cdd42d5729.pdf', 'good', 5, '2022-05-24 17:27:30', '2022-05-24 17:27:30'),
(5, NULL, '-Invoice from Auto-fixer -2022-05-26-628f9d69ba51c.pdf', 'sent you a doc', 8, '2022-05-26 19:31:53', '2022-05-26 19:31:53'),
(6, '-Diagnostics Report from Auto-fixer-2022-05-26-628f9da497b9a.pdf', NULL, 'i just sent you a diagnostics file', 8, '2022-05-26 19:32:52', '2022-05-26 19:32:52');

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
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_05_02_043415_create_company_vechicles_table', 1),
(6, '2022_05_07_150307_create_services_table', 1),
(7, '2022_05_07_173804_create_documents_table', 1);

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
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `r_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `r_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `r_cost` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `m_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `m_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `m_cost` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `r_date`, `r_type`, `r_cost`, `m_date`, `m_type`, `m_cost`, `user_id`, `created_at`, `updated_at`) VALUES
(1, '1 may 2022', 'change oil', '1000', NULL, NULL, NULL, 5, '2022-05-24 17:47:41', '2022-05-24 17:47:41'),
(2, '2022/5/26', 'oil change', '3000', NULL, NULL, NULL, 8, '2022-05-26 19:25:37', '2022-05-26 19:25:37'),
(3, '9039', 'crank shaft fixing', '30000', NULL, NULL, NULL, 9, '2022-05-26 19:40:58', '2022-05-26 19:40:58');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `is_auth` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_phone` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `p_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `p_phone` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `p_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `p_position` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `city` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `is_auth`, `c_name`, `c_address`, `c_email`, `c_phone`, `p_name`, `p_phone`, `p_email`, `p_position`, `name`, `phone`, `email`, `email_verified_at`, `city`, `username`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'admin', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'use@itsolutionstuff.com', NULL, NULL, 'Admin', '$2y$10$3Gq9WFYnXmZeiQ7e7.2GWubMiGoR9VFkOGuhPkF6y2wB59DdF7PQO', NULL, '2022-05-23 14:10:34', '2022-05-23 14:10:34'),
(5, 'individual', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'mis', '09037190224', 'marvelmikel1997@gmail.com', NULL, 'minna', 'marvel', '$2y$10$QnmSP2oDTdAq.kLJpWkYq.NcCEpxWV8fVrKzM5qHU3I1Wnn/F91Ne', NULL, '2022-05-24 17:06:24', '2022-05-31 20:10:40'),
(8, 'individual', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'John', '03rr89350934', 'seyi446@gmail.com', NULL, 'JC', 'John Doe', '$2y$10$beTkC4twGOJHh2FOaTFnHODtCyG35TZTjFgimNej.3.T1SYTHFqzm', NULL, '2022-05-26 19:18:49', '2022-06-01 02:22:58'),
(9, 'company', 'Alliance', 'alliance', 'alliance@mail.com', '0383844', 'alliance', '8137713', 'alliance@mail.com', 'alliance', NULL, NULL, NULL, NULL, NULL, 'alliance', '$2y$10$eepuxzAODL/LeRDcVLU1W.Cp9r2QhjRI3GPCQPulub0wCeQT0JBsa', NULL, '2022-05-26 19:39:12', '2022-05-26 19:39:12'),
(10, 'individual', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Daniel anderson', '09083748333', 'anderson0000000@gmail.com', NULL, 'Benin', 'SA', '$2y$10$wN0jnY3gwDCorCPAW2d2tenjgeF8ahP2xEd.il8rp99cmcDEsFJyy', NULL, '2022-06-01 01:43:20', '2022-06-01 01:43:20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `company_vechicles`
--
ALTER TABLE `company_vechicles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `company_vechicles_user_id_foreign` (`user_id`);

--
-- Indexes for table `documents`
--
ALTER TABLE `documents`
  ADD PRIMARY KEY (`id`),
  ADD KEY `documents_user_id_foreign` (`user_id`);

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
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`),
  ADD KEY `services_user_id_foreign` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_c_email_unique` (`c_email`),
  ADD UNIQUE KEY `users_p_email_unique` (`p_email`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `company_vechicles`
--
ALTER TABLE `company_vechicles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `documents`
--
ALTER TABLE `documents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `company_vechicles`
--
ALTER TABLE `company_vechicles`
  ADD CONSTRAINT `company_vechicles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `documents`
--
ALTER TABLE `documents`
  ADD CONSTRAINT `documents_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `services`
--
ALTER TABLE `services`
  ADD CONSTRAINT `services_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
