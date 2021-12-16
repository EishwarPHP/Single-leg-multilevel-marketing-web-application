-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 11, 2021 at 01:49 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kartcastle_mlmlaravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `direct_incomes`
--

CREATE TABLE `direct_incomes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `userref` int(11) NOT NULL,
  `amount` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `direct_incomes`
--

INSERT INTO `direct_incomes` (`id`, `userref`, `amount`, `created_at`, `updated_at`) VALUES
(1, 473753, 600.00, '2021-08-07 07:57:29', '2021-08-07 07:57:29'),
(12, 465739, 600.00, '2021-08-11 01:49:46', '2021-08-11 01:49:46'),
(13, 384277, 600.00, '2021-08-11 02:33:02', '2021-08-11 02:33:02'),
(14, 409002, 600.00, '2021-08-11 02:45:22', '2021-08-11 02:45:22'),
(15, 702919, 600.00, '2021-08-11 03:12:03', '2021-08-11 03:12:03'),
(16, 647701, 600.00, '2021-08-11 03:16:27', '2021-08-11 03:16:27'),
(17, 202954, 600.00, '2021-08-11 03:27:23', '2021-08-11 03:27:23'),
(18, 114544, 600.00, '2021-08-11 03:55:35', '2021-08-11 03:55:35'),
(19, 796515, 600.00, '2021-08-11 03:56:39', '2021-08-11 03:56:39'),
(20, 674744, 600.00, '2021-08-11 03:59:07', '2021-08-11 03:59:07'),
(21, 684487, 600.00, '2021-08-11 05:56:39', '2021-08-11 05:56:39');

-- --------------------------------------------------------

--
-- Table structure for table `epinrequests`
--

CREATE TABLE `epinrequests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `userid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` double(8,2) NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `epinrequests`
--

INSERT INTO `epinrequests` (`id`, `userid`, `amount`, `status`, `created_at`, `updated_at`) VALUES
(1, 'admin@gmail.com', 10000.00, 'Close', '2021-08-07 07:57:56', '2021-08-07 07:57:56'),
(2, 'nilam@gmail.com', 2000.00, 'Close', '2021-08-07 08:03:02', '2021-08-07 08:03:02'),
(3, 'nishant@gmail.com', 1000.00, 'Close', '2021-08-07 08:05:21', '2021-08-07 08:05:21');

-- --------------------------------------------------------

--
-- Table structure for table `epins`
--

CREATE TABLE `epins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `epins`
--

INSERT INTO `epins` (`id`, `user_id`, `pin`, `status`, `created_at`, `updated_at`) VALUES
(1, 'admino@gmail.com', '8545632510', 'Close', NULL, NULL),
(2, 'admin@gmail.com', '3867431252', 'Close', '2021-08-07 07:58:24', '2021-08-07 07:58:24'),
(3, 'admin@gmail.com', '8803659086', 'Close', '2021-08-07 07:58:24', '2021-08-07 07:58:24'),
(4, 'admin@gmail.com', '9156382429', 'Close', '2021-08-07 07:58:24', '2021-08-07 07:58:24'),
(5, 'admin@gmail.com', '7568526724', 'Close', '2021-08-07 07:58:24', '2021-08-07 07:58:24'),
(6, 'admin@gmail.com', '5772767612', 'Close', '2021-08-07 07:58:24', '2021-08-07 07:58:24'),
(7, 'admin@gmail.com', '5864006600', 'Close', '2021-08-07 07:58:24', '2021-08-07 07:58:24'),
(8, 'admin@gmail.com', '7061692268', 'Close', '2021-08-07 07:58:24', '2021-08-07 07:58:24'),
(9, 'admin@gmail.com', '6538350092', 'Close', '2021-08-07 07:58:24', '2021-08-07 07:58:24'),
(10, 'admin@gmail.com', '4244247091', 'Close', '2021-08-07 07:58:24', '2021-08-07 07:58:24'),
(11, 'admin@gmail.com', '9128017595', 'Close', '2021-08-07 07:58:24', '2021-08-07 07:58:24'),
(12, 'admin@gmail.com', '3166517588', 'Close', '2021-08-07 07:58:24', '2021-08-07 07:58:24'),
(13, 'admin@gmail.com', '5060156862', 'Close', '2021-08-07 07:58:24', '2021-08-07 07:58:24'),
(14, 'admin@gmail.com', '1497844009', 'Close', '2021-08-07 07:58:24', '2021-08-07 07:58:24'),
(15, 'admin@gmail.com', '8573538415', 'Close', '2021-08-07 07:58:24', '2021-08-07 07:58:24'),
(16, 'admin@gmail.com', '2597525535', 'Close', '2021-08-07 07:58:24', '2021-08-07 07:58:24'),
(17, 'admin@gmail.com', '5972716128', 'Close', '2021-08-07 07:58:24', '2021-08-07 07:58:24'),
(18, 'admin@gmail.com', '9486771649', 'Close', '2021-08-07 07:58:24', '2021-08-07 07:58:24'),
(19, 'admin@gmail.com', '3409564811', 'Close', '2021-08-07 07:58:24', '2021-08-07 07:58:24'),
(20, 'admin@gmail.com', '7363711918', 'Open', '2021-08-07 07:58:24', '2021-08-07 07:58:24'),
(21, 'nilam@gmail.com', '1732892081', 'Close', '2021-08-07 08:03:13', '2021-08-07 08:03:13'),
(22, 'nilam@gmail.com', '339355256', 'Open', '2021-08-07 08:03:13', '2021-08-07 08:03:13'),
(23, 'nilam@gmail.com', '9763541579', 'Open', '2021-08-07 08:03:13', '2021-08-07 08:03:13'),
(24, 'nishant@gmail.com', '9924329294', 'Close', '2021-08-07 08:05:30', '2021-08-07 08:05:30');

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
-- Table structure for table `incomes`
--

CREATE TABLE `incomes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `userid` int(11) NOT NULL,
  `day_bal` double(8,2) NOT NULL,
  `levels` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `incomes`
--

INSERT INTO `incomes` (`id`, `userid`, `day_bal`, `levels`, `created_at`, `updated_at`) VALUES
(1, 473753, 140.00, 'Level 1', '2021-08-11 01:44:20', '2021-08-11 01:44:20'),
(6, 465739, 140.00, 'Level 1', '2021-08-11 02:32:51', '2021-08-11 02:32:51'),
(8, 473753, 60.00, 'Level 2', '2021-08-11 02:33:02', '2021-08-11 02:33:02'),
(9, 384277, 140.00, 'Level 1', '2021-08-11 02:45:22', '2021-08-11 02:45:22'),
(10, 465739, 60.00, 'Level 2', '2021-08-11 02:45:22', '2021-08-11 02:45:22'),
(11, 473753, 40.00, 'Level 3', '2021-08-11 02:45:22', '2021-08-11 02:45:22'),
(12, 409002, 140.00, 'Level 1', '2021-08-11 02:53:11', '2021-08-11 02:53:11'),
(13, 384277, 60.00, 'Level 2', '2021-08-11 02:53:12', '2021-08-11 02:53:12'),
(14, 465739, 40.00, 'Level 3', '2021-08-11 02:53:12', '2021-08-11 02:53:12'),
(15, 473753, 20.00, 'Level 4', '2021-08-11 02:53:12', '2021-08-11 02:53:12'),
(17, 702919, 140.00, 'Level 1', '2021-08-11 03:29:17', '2021-08-11 03:29:17'),
(18, 409002, 60.00, 'Level 2', '2021-08-11 03:29:17', '2021-08-11 03:29:17'),
(19, 384277, 40.00, 'Level 3', '2021-08-11 03:29:17', '2021-08-11 03:29:17'),
(20, 465739, 20.00, 'Level 4', '2021-08-11 03:29:17', '2021-08-11 03:29:17'),
(21, 465739, 15.00, 'Level 5', '2021-08-11 03:29:17', '2021-08-11 03:29:17'),
(30, 473753, 15.00, 'Level 5', '2021-08-11 03:59:07', '2021-08-11 03:59:07'),
(31, 473753, 140.00, 'Level 1', '2021-08-11 05:56:39', '2021-08-11 05:56:39');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `parent_id`, `created_at`, `updated_at`) VALUES
(1, 'User 1', NULL, NULL, NULL),
(2, 'User 2', NULL, NULL, NULL),
(3, 'User 3', NULL, NULL, NULL),
(4, 'User 4', NULL, NULL, NULL),
(5, 'User 1.1', 1, NULL, NULL),
(6, 'User 6', 2, NULL, NULL),
(7, 'User 3', 3, NULL, NULL),
(8, 'User 4', 4, NULL, NULL),
(9, 'User 1.5.1', 5, NULL, NULL),
(10, 'User 2', 9, NULL, NULL),
(11, 'User 3', 10, NULL, NULL),
(12, 'User 4', 1, NULL, NULL),
(13, 'User 5', 1, NULL, NULL),
(14, 'User 6', 2, NULL, NULL),
(15, 'User 3', 3, NULL, NULL),
(16, 'User 4', 4, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `levelsettings`
--

CREATE TABLE `levelsettings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `level` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `commision` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `levelsettings`
--

INSERT INTO `levelsettings` (`id`, `level`, `commision`, `created_at`, `updated_at`) VALUES
(1, 'Level 1', '7', '2021-08-10 11:16:52', '2021-08-10 11:16:52'),
(2, 'Level 2', '3', '2021-08-10 11:16:58', '2021-08-10 11:16:58'),
(3, 'Level 3', '2', '2021-08-10 11:17:05', '2021-08-10 11:17:05'),
(4, 'Level 4', '1', '2021-08-10 11:17:12', '2021-08-10 11:17:12'),
(5, 'Level 5', '0.75', '2021-08-10 11:17:18', '2021-08-10 11:17:18'),
(6, 'Level 6', '0.50', '2021-08-10 11:17:24', '2021-08-10 11:17:24'),
(7, 'Level 7', '0.25', '2021-08-10 11:17:34', '2021-08-10 11:17:34');

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
(4, '2021_07_28_123810_create_levelsettings_table', 1),
(5, '2021_07_30_125433_create_epins_table', 1),
(6, '2021_07_30_130224_create_epinrequests_table', 1),
(7, '2021_07_31_085009_create_incomes_table', 1),
(8, '2021_07_31_121923_add_epin_to_users', 1),
(9, '2021_08_01_085432_create_direct_incomes_table', 1),
(10, '2021_08_04_141339_create_categories_table', 1),
(11, '2021_08_07_090758_create_items_table', 1),
(12, '2021_08_09_093453_add_forenid_to_users', 2),
(13, '2021_08_11_105959_add_levels_to_incomes', 3);

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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `referralkey` bigint(20) UNSIGNED DEFAULT NULL,
  `sponserid` bigint(20) UNSIGNED DEFAULT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `epin` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `forenid` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `referralkey`, `sponserid`, `mobile`, `amount`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `epin`, `forenid`) VALUES
(1, 'admin', 473753, NULL, '8545652321', '2000', 'admin@gmail.com', NULL, '$2y$10$95B7yw.ahD7DNa26s8tCyOepUovAOwk6DN.4Z/bi4nx0EgBPADjU2', NULL, '2021-08-07 07:57:29', '2021-08-07 07:57:29', '8545632510', NULL),
(13, 'Mayank ', 465739, 473753, '8521456320', '2000', 'mayank@gmail.com', NULL, '$2y$10$Os8SNdVE0CiIg4j20lxKGeVYWnjAs9hR0DYhju9jNqX9W8td./lBC', NULL, '2021-08-11 01:49:46', '2021-08-11 01:49:46', '4244247091', 1),
(14, 'Nihal jassi', 384277, 465739, '8521456320', '2000', 'nihals@gmail.com', NULL, '$2y$10$uXiZPp0YxsQm.ASk7PEbTeRxfVc7xsfSijx1mQUfn5kOcFQUjNJ3a', NULL, '2021-08-11 02:33:02', '2021-08-11 02:33:02', '9128017595', 13),
(15, 'Akash', 409002, 384277, '8542102356', '2000', 'akash@gmail.com', NULL, '$2y$10$ZUTC3B4mRiM06VNktFFkouehSsIalGQc3X5r8BiEKhbhBx9fZmn4m', NULL, '2021-08-11 02:45:22', '2021-08-11 02:45:22', '3166517588', 14),
(16, 'Manikant', 702919, 409002, '8521456320', '2000', 'manikant@gmail.com', NULL, '$2y$10$20nQpAOE0/u5FL9TD.DAdOPHvzTYeHvqDRjyky/b8CNcUec9ntDWm', NULL, '2021-08-11 03:12:03', '2021-08-11 03:12:03', '5060156862', 15),
(21, 'Shashank', 674744, 702919, '8451200012', '2000', 'shashank@gmail.com', NULL, '$2y$10$OWDXJz68v7XlpEDsPGOQEO6lRdpP1Ej0Tzn/W8FfHwQG6H/2xX3hO', NULL, '2021-08-11 03:59:07', '2021-08-11 03:59:07', '9486771649', 16),
(22, 'Hayat', 684487, 473753, '8521402156', '2000', 'hayat@gmail.com', NULL, '$2y$10$OPOIg3ILKwEQCjSts57phO0XiQ8UAG5x276MoWLOYakvSPMSY1RpK', NULL, '2021-08-11 05:56:39', '2021-08-11 05:56:39', '3409564811', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `direct_incomes`
--
ALTER TABLE `direct_incomes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `epinrequests`
--
ALTER TABLE `epinrequests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `epins`
--
ALTER TABLE `epins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `incomes`
--
ALTER TABLE `incomes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `items_parent_id_foreign` (`parent_id`);

--
-- Indexes for table `levelsettings`
--
ALTER TABLE `levelsettings`
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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `referralkey` (`referralkey`),
  ADD KEY `sponserid` (`sponserid`),
  ADD KEY `forenid` (`forenid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `direct_incomes`
--
ALTER TABLE `direct_incomes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `epinrequests`
--
ALTER TABLE `epinrequests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `epins`
--
ALTER TABLE `epins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `incomes`
--
ALTER TABLE `incomes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `levelsettings`
--
ALTER TABLE `levelsettings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `items`
--
ALTER TABLE `items`
  ADD CONSTRAINT `items_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `items` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
