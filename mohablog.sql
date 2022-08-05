-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 05, 2022 at 11:49 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mohablog`
--

-- --------------------------------------------------------

--
-- Table structure for table `extensions`
--

CREATE TABLE `extensions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `extensions`
--

INSERT INTO `extensions` (`id`, `name`, `type`, `created_at`, `updated_at`) VALUES
(1, 'Laravel', 'Framework', '2022-07-29 17:21:17', '2022-07-29 18:47:28'),
(2, 'VS Code', 'Editor', '2022-07-29 17:30:26', '2022-07-29 17:30:26'),
(3, 'Ubuntu', 'Operating System', '2022-07-29 17:30:43', '2022-07-29 17:30:43'),
(5, 'Sublime', 'Editor', '2022-07-29 18:09:39', '2022-07-29 18:09:39'),
(6, 'Windows', 'Operating System', '2022-07-29 18:09:51', '2022-07-29 18:09:51'),
(10, 'wordpress', 'Framework', '2022-07-29 18:33:58', '2022-07-29 18:33:58');

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
-- Table structure for table `feed_backs`
--

CREATE TABLE `feed_backs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `caption` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stars` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
(12, '2014_10_12_000000_create_users_table', 1),
(13, '2014_10_12_100000_create_password_resets_table', 1),
(14, '2019_08_19_000000_create_failed_jobs_table', 1),
(15, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(16, '2022_06_14_092653_create_skills_table', 1),
(17, '2022_06_14_092851_create_speaking_languages_table', 1),
(18, '2022_06_14_093337_create_projects_table', 1),
(19, '2022_06_14_093634_create_work_exps_table', 1),
(20, '2022_06_14_093843_create_feed_backs_table', 1),
(21, '2022_06_17_114347_create_site_details_table', 1),
(22, '2022_06_17_194944_create_extensions_table', 1);

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
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '_',
  `caption` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `techmologyStack` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `endDate` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `name`, `url`, `caption`, `techmologyStack`, `endDate`, `created_at`, `updated_at`) VALUES
(1, 'Al-Handasya', 'https://github.com/MohabsMamdouh/Al-Handasya', 'created to make the admin able to manage client\'s requests and manage employes.', 'Laravel, Bootstrap, HTML, CSS', '2022-07-20', '2022-07-26 11:20:41', '2022-07-26 11:20:41'),
(2, 'Amireta', 'https://amireta.com/', 'It is a blog about women and it has it\'s Mobile application', 'Wordpress, PHP, Bootstrap, HTML, CSS', '2021-08-31', '2022-07-26 11:21:55', '2022-07-26 11:21:55'),
(3, 'Pharmacy', 'https://github.com/MohabsMamdouh/My_Pharamacy', 'Created to make the admin able to manage Orders from the patient and keep tracking his medicines.', 'PHP, Bootstrap, HTML, CSS, Jquery, AJAX', '2021-06-24', '2022-07-26 11:22:32', '2022-07-26 11:22:32'),
(4, 'Gym', 'https://github.com/MohabsMamdouh/GYM', 'It is a blog about gym, the admin could post offers and manage coashes.', 'PHP, Bootstrap, HTML, CSS, Jquery, AJAX', '2021-03-15', '2022-07-26 11:23:10', '2022-07-26 11:23:10');

-- --------------------------------------------------------

--
-- Table structure for table `site_details`
--

CREATE TABLE `site_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `favicon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `colorCode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `site_details`
--

INSERT INTO `site_details` (`id`, `favicon`, `colorCode`, `created_at`, `updated_at`) VALUES
(1, 'favicon.png', '#F16269', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `languageName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `percentage` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `main` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `languageName`, `percentage`, `main`, `created_at`, `updated_at`) VALUES
(1, 'php / Laravel', '75', 'primary', '2022-07-26 11:17:43', '2022-07-26 11:17:43'),
(2, 'wordpress', '60', 'null', '2022-07-26 11:17:54', '2022-07-26 11:17:54'),
(3, 'Database (MYSQL)', '70', 'null', '2022-07-26 11:18:11', '2022-07-26 11:18:11'),
(4, 'HTML', '85', 'null', '2022-07-26 11:18:27', '2022-07-26 11:18:27'),
(5, 'css', '85', 'null', '2022-07-26 11:18:36', '2022-07-26 11:18:36'),
(6, 'Javasvript', '65', 'null', '2022-07-26 11:18:56', '2022-07-26 11:18:56'),
(7, 'python', '60', 'null', '2022-07-26 11:19:08', '2022-07-26 11:19:08');

-- --------------------------------------------------------

--
-- Table structure for table `speaking_languages`
--

CREATE TABLE `speaking_languages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `languageName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `speaking_languages`
--

INSERT INTO `speaking_languages` (`id`, `languageName`, `level`, `created_at`, `updated_at`) VALUES
(1, 'English', 'Level 3', '2022-07-26 13:35:46', '2022-07-26 14:23:15'),
(2, 'Arabic', 'Level 5', '2022-07-26 14:23:28', '2022-07-26 14:23:28');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fullName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `profileImage` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expYear` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `currentPosition` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `github` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `linked_in` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `my_site` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullName`, `username`, `title`, `email`, `email_verified_at`, `address`, `phone`, `profile`, `profileImage`, `password`, `expYear`, `currentPosition`, `remember_token`, `created_at`, `updated_at`, `github`, `linked_in`, `my_site`) VALUES
(1, 'Mohab Mamdouh Abd El-Twab', 'mohablog', 'Backend Developer PHP / Laravel', 'mohabmamdouh22@gmail.com', NULL, 'Cairo, El-Slam', '01156047032', 'Mohab is a backend developer PHP/Laravel, He has 1 year of experience in backend development websites, Develop functions with a good knowledge of Web Applications Development.', 'mohablog-1659731467.jpg', '$2y$10$3UzadoHYUSKdnnP0JrGMw.EbwG7yEB6/XXZ7m7G0WIpzMSKzAiZ1K', '1', 'Backend Developer PHP/Laravel', 'caD4woqICDaCdWvKoGE5S2vHOr8HVzBIaWjvSdPcBKI039dmiitwMWPGk8gZ', NULL, '2022-08-05 18:31:07', 'https://github.com/MohabsMamdouh', 'https://linkedin.com/in/mohab-mamdouh-9307a57b/', 'http://mohablog.herokuapp.com/');

-- --------------------------------------------------------

--
-- Table structure for table `work_exps`
--

CREATE TABLE `work_exps` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `companyName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `startDate` date NOT NULL,
  `endDate` date DEFAULT NULL,
  `current` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `caption` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `environment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `work_exps`
--

INSERT INTO `work_exps` (`id`, `companyName`, `startDate`, `endDate`, `current`, `caption`, `environment`, `title`, `created_at`, `updated_at`) VALUES
(1, 'Freelances Sites', '2022-03-10', NULL, 'Present', 'Seeking for Opportunity to develop my skill into the next level', 'Laravel, PHP, Bootstrap, Basic Frontend', 'Backend Developer PHP / Laravel', '2022-07-26 11:25:06', '2022-07-26 11:25:06'),
(2, 'Caian Technology', '2021-07-15', '2021-09-26', NULL, 'Created some projects.', 'Wordpress, PHP, Bootstrap, HTML, CSS', 'Internee Backend Developer PHP', '2022-07-26 11:31:09', '2022-07-26 11:31:09'),
(3, 'Icouna', '2020-09-26', '2020-11-26', NULL, 'Learned some technical skills like: (planning to start project - Designing Database)', 'PHP, Bootstrap, HTML, CSS, Javascript', 'Internee Backend Developer PHP', '2022-07-26 11:32:04', '2022-07-26 11:32:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `extensions`
--
ALTER TABLE `extensions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `feed_backs`
--
ALTER TABLE `feed_backs`
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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `site_details`
--
ALTER TABLE `site_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `speaking_languages`
--
ALTER TABLE `speaking_languages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `work_exps`
--
ALTER TABLE `work_exps`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `extensions`
--
ALTER TABLE `extensions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feed_backs`
--
ALTER TABLE `feed_backs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `site_details`
--
ALTER TABLE `site_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `speaking_languages`
--
ALTER TABLE `speaking_languages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `work_exps`
--
ALTER TABLE `work_exps`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
