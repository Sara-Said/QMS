-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 08, 2017 at 12:45 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quiz_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `id` int(10) UNSIGNED NOT NULL,
  `answer` text COLLATE utf8_unicode_ci NOT NULL,
  `question_id` int(10) UNSIGNED NOT NULL,
  `is_correct` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `lkp_category`
--

CREATE TABLE `lkp_category` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `lkp_category`
--

INSERT INTO `lkp_category` (`id`, `name`, `code`, `created_at`, `updated_at`) VALUES
(1, 'PHP', 'php', '2017-06-19 13:24:41', NULL),
(2, 'Java SE', 'JSE', '2017-06-19 13:24:41', NULL),
(3, 'MySQL', 'mysql', '2017-06-19 13:25:52', NULL),
(4, 'Python', 'python', '2017-06-19 13:25:52', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `lkp_questions_type`
--

CREATE TABLE `lkp_questions_type` (
  `id` int(10) UNSIGNED NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `lkp_questions_type`
--

INSERT INTO `lkp_questions_type` (`id`, `type`, `created_at`, `updated_at`) VALUES
(1, 'True/False', '2017-06-19 13:28:05', NULL),
(2, 'Choices', '2017-06-19 13:28:05', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `lkp_user_states`
--

CREATE TABLE `lkp_user_states` (
  `id` int(10) UNSIGNED NOT NULL,
  `state` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `lkp_user_states`
--

INSERT INTO `lkp_user_states` (`id`, `state`, `created_at`, `updated_at`) VALUES
(1, 'invited', '2017-06-19 13:23:55', NULL),
(2, 'taken', '2017-06-19 13:23:55', NULL),
(3, 'rejected', '2017-06-19 13:24:04', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(26, '2014_10_12_000000_create_users_table', 1),
(27, '2014_10_12_100000_create_password_resets_table', 1),
(28, '2017_08_04_184126_create_lkp_category_table', 1),
(29, '2017_08_04_190447_create_lkp_questions_type_table', 1),
(30, '2017_08_04_190705_create_lkp_user_states_table', 1),
(31, '2017_08_04_192528_create_question_table', 1),
(32, '2017_08_05_034018_create_quizes_table', 1),
(33, '2017_08_05_034300_create_quiz_questions_table', 1),
(34, '2017_08_05_035508_create_user_quizes_table', 1),
(35, '2017_08_05_035712_create_answers_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `id` int(10) UNSIGNED NOT NULL,
  `question` text COLLATE utf8_unicode_ci NOT NULL,
  `question_type_id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `points` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`id`, `question`, `question_type_id`, `category_id`, `points`, `created_at`, `updated_at`) VALUES
(1, 'How old are you?', 2, 2, 4, '2017-08-22 03:00:00', '2017-08-07 02:00:22'),
(2, 'Are you okay?', 1, 2, 6, '2017-08-07 01:54:26', '2017-08-07 02:00:36'),
(4, 'Whats your name?', 2, 1, 8, '2017-08-07 02:01:03', '2017-08-07 02:01:03');

-- --------------------------------------------------------

--
-- Table structure for table `quizes`
--

CREATE TABLE `quizes` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `time` int(11) NOT NULL,
  `total_points` int(11) NOT NULL,
  `pass_points` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `quizes`
--

INSERT INTO `quizes` (`id`, `name`, `category_id`, `time`, `total_points`, `pass_points`, `created_at`, `updated_at`) VALUES
(2, 'enimy sara', 3, 1, 77, 30, '2017-08-06 04:54:12', '2017-08-06 23:35:12'),
(3, 'molestiae', 1, 2, 95, 57, '2017-08-06 04:54:12', '2017-08-06 04:54:12'),
(4, 'id', 4, 2, 56, 68, '2017-08-06 04:54:12', '2017-08-06 04:54:12'),
(5, 'possimus', 3, 2, 93, 53, '2017-08-06 04:54:48', '2017-08-06 04:54:48'),
(7, 'vitae', 2, 4, 92, 60, '2017-08-06 04:54:49', '2017-08-06 04:54:49'),
(8, 'Khut Project', 2, 1, 122, 75, '2017-08-06 14:32:17', '2017-08-06 14:32:17'),
(10, 'sara', 4, 1, 1, 1, '2017-08-06 14:57:24', '2017-08-06 14:57:24'),
(11, 'done', 2, 2, 55, 20, '2017-08-06 23:35:49', '2017-08-06 23:35:49');

-- --------------------------------------------------------

--
-- Table structure for table `quiz_questions`
--

CREATE TABLE `quiz_questions` (
  `id` int(10) UNSIGNED NOT NULL,
  `question_id` int(10) UNSIGNED NOT NULL,
  `quiz_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `quiz_questions`
--

INSERT INTO `quiz_questions` (`id`, `question_id`, `quiz_id`, `created_at`, `updated_at`) VALUES
(1, 2, 10, '2017-08-08 22:00:00', '2017-08-07 12:10:50'),
(3, 2, 8, '2017-08-07 03:19:22', '2017-08-07 12:03:11'),
(5, 2, 4, '2017-08-07 12:06:46', '2017-08-07 12:06:46');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `is_admin` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `is_admin`, `remember_token`, `created_at`, `updated_at`) VALUES
(61, 'sera', 'sara@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 1, '', '2017-08-05 10:47:59', '2017-08-05 10:47:59');

-- --------------------------------------------------------

--
-- Table structure for table `user_quizes`
--

CREATE TABLE `user_quizes` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `quiz_id` int(10) UNSIGNED NOT NULL,
  `state_id` int(10) UNSIGNED NOT NULL,
  `result_details` text COLLATE utf8_unicode_ci NOT NULL,
  `result_points` int(11) NOT NULL,
  `result_state` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `answers_question_id_foreign` (`question_id`);

--
-- Indexes for table `lkp_category`
--
ALTER TABLE `lkp_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lkp_questions_type`
--
ALTER TABLE `lkp_questions_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lkp_user_states`
--
ALTER TABLE `lkp_user_states`
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
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`id`),
  ADD KEY `question_category_id_foreign` (`category_id`),
  ADD KEY `question_question_type_id_foreign` (`question_type_id`);

--
-- Indexes for table `quizes`
--
ALTER TABLE `quizes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `quizes_category_id_foreign` (`category_id`);

--
-- Indexes for table `quiz_questions`
--
ALTER TABLE `quiz_questions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `quiz_questions_question_id_foreign` (`question_id`),
  ADD KEY `	quiz_questions_quiz_id_foreign` (`quiz_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_quizes`
--
ALTER TABLE `user_quizes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_quizes_user_id_foreign` (`user_id`),
  ADD KEY `user_quizes_quiz_id_foreign` (`quiz_id`),
  ADD KEY `user_quizes_state_id_foreign` (`state_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `lkp_category`
--
ALTER TABLE `lkp_category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `lkp_questions_type`
--
ALTER TABLE `lkp_questions_type`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `lkp_user_states`
--
ALTER TABLE `lkp_user_states`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `quizes`
--
ALTER TABLE `quizes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `quiz_questions`
--
ALTER TABLE `quiz_questions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;
--
-- AUTO_INCREMENT for table `user_quizes`
--
ALTER TABLE `user_quizes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `answers`
--
ALTER TABLE `answers`
  ADD CONSTRAINT `answers_question_id_foreign` FOREIGN KEY (`question_id`) REFERENCES `question` (`id`);

--
-- Constraints for table `question`
--
ALTER TABLE `question`
  ADD CONSTRAINT `question_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `lkp_category` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `question_question_type_id_foreign` FOREIGN KEY (`question_type_id`) REFERENCES `lkp_questions_type` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `quizes`
--
ALTER TABLE `quizes`
  ADD CONSTRAINT `quizes_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `lkp_category` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `quiz_questions`
--
ALTER TABLE `quiz_questions`
  ADD CONSTRAINT `	quiz_questions_quiz_id_foreign` FOREIGN KEY (`quiz_id`) REFERENCES `quizes` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `quiz_questions_question_id_foreign` FOREIGN KEY (`question_id`) REFERENCES `question` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `user_quizes`
--
ALTER TABLE `user_quizes`
  ADD CONSTRAINT `user_quizes_state_id_foreign` FOREIGN KEY (`state_id`) REFERENCES `lkp_user_states` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
