-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 23, 2020 at 11:20 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tumtuna_app`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Plumbing', NULL, NULL),
(2, 'Carpentry', NULL, NULL),
(3, 'Masonry', NULL, NULL),
(4, 'Plastering', NULL, NULL),
(5, 'Electrician', NULL, NULL),
(6, 'Siding', NULL, NULL),
(7, 'Vent repair', NULL, NULL),
(8, 'Painting', NULL, NULL),
(9, 'Cleaning', '2020-07-28 11:03:54', '2020-07-28 11:04:13');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(10) UNSIGNED NOT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `firstname`, `lastname`, `phone`, `email`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Mandy', 'Brakus', '9773327935', 'your.email+faker65830@gmail.com', 'Aut ut pariatur eos.', '2020-07-27 16:57:53', '2020-07-27 16:57:53'),
(2, 'Earlene', 'Kuphal', '3730707422', 'your.email+faker83060@gmail.com', 'Fugit incidunt qui culpa quam facilis est.', '2020-07-27 17:29:22', '2020-07-27 17:29:22'),
(3, 'Earlene', 'Kuphal', '3730707422', 'your.email+faker83060@gmail.com', 'Fugit incidunt qui culpa quam facilis est.', '2020-07-27 17:29:54', '2020-07-27 17:29:54');

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
(3, '2020_05_16_002427_create_roles_table', 1),
(4, '2020_05_26_215540_create_posts_table', 1),
(5, '2020_05_27_005428_create_categories_table', 1),
(6, '2020_05_27_011918_create_photos_table', 1),
(7, '2020_06_09_012345_create_contacts_table', 1),
(8, '2020_06_16_131051_create_reviews_table', 1),
(9, '2020_06_16_140705_add_post_id_to_reviews', 1),
(10, '2020_07_26_233652_add_slug_post', 2),
(11, '2020_07_27_142255_add_slug_review', 3);

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
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `id` int(10) UNSIGNED NOT NULL,
  `filename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`id`, `filename`, `created_at`, `updated_at`) VALUES
(1, '159243026936.jpg', '2020-06-17 21:44:29', '2020-06-17 21:44:29'),
(2, '159243040346.jpg', '2020-06-17 21:46:43', '2020-06-17 21:46:43'),
(3, '159243057086.jpg', '2020-06-17 21:49:30', '2020-06-17 21:49:30'),
(4, '159243064891.jpg', '2020-06-17 21:50:48', '2020-06-17 21:50:48'),
(5, '1593440562photo-1502378735452-bc7d86632805.jpg', '2020-06-29 14:22:42', '2020-06-29 14:22:42'),
(6, '1595847277MV5BNTczMzk1MjU1MV5BMl5BanBnXkFtZTcwNDk2MzAyMg@@._V1_UY256_CR2,0,172,256_AL_.jpg', '2020-07-27 10:54:37', '2020-07-27 10:54:37'),
(7, '1595849371sgeHfTT.jpg', '2020-07-27 11:29:31', '2020-07-27 11:29:31'),
(8, '1595850392KtCFjlD4.jpg', '2020-07-27 11:46:32', '2020-07-27 11:46:32'),
(9, '159585181443.jpg', '2020-07-27 12:10:14', '2020-07-27 12:10:14'),
(10, '1595851933pexels-photo-614810.webp', '2020-07-27 12:12:13', '2020-07-27 12:12:13'),
(11, '159585200076.jpg', '2020-07-27 12:13:20', '2020-07-27 12:13:20');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `photo_id` int(11) NOT NULL,
  `published` tinyint(4) NOT NULL DEFAULT 0,
  `rating_cache` double(2,1) NOT NULL DEFAULT 3.0,
  `rating_count` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `category_id`, `photo_id`, `published`, `rating_cache`, `rating_count`, `phone`, `city`, `state`, `address`, `description`, `created_at`, `updated_at`, `slug`) VALUES
(1, 1, 4, 1, 0, 3.0, 0, '0310485599', 'South Daphnefort', 'Washington', '752 Hettinger Valleys', 'Veniam similique suscipit saepe.', '2020-06-17 21:44:29', '2020-06-17 21:44:29', ''),
(2, 2, 3, 2, 0, 3.0, 0, '4959877547', 'Langoshtown', 'Wyoming', '2742 Frederick Pines', 'Eum velit nesciunt est et et perspiciatis.', '2020-06-17 21:46:43', '2020-06-17 21:46:43', ''),
(3, 3, 1, 3, 0, 3.0, 0, '5290399900', 'Lake Terranceberg', 'Illinois', '56852 Lenore Meadow', 'Rerum sed dolore.', '2020-06-17 21:49:30', '2020-06-17 21:49:30', ''),
(4, 4, 8, 4, 0, 3.0, 0, '6396995311', 'Port Adonis', 'North Carolina', '428 Stacey Inlet', 'Voluptates inventore at maxime debitis officia est eum soluta iure.', '2020-06-17 21:50:48', '2020-06-17 21:50:48', ''),
(5, 10, 2, 5, 0, 3.0, 0, '2560625391', 'North Erwinbury', 'Oregon', '372 Kiley Route', 'Dolores et error qui sit quaerat.', '2020-06-29 14:22:42', '2020-06-29 14:23:12', ''),
(6, 21, 8, 6, 0, 3.0, 0, '6694346871', 'South Ryleigh', 'New Hampshire', '9572 Abelardo Manors', 'Voluptatem recusandae quae dignissimos eos totam sit aut.', '2020-07-27 10:54:37', '2020-07-27 10:54:37', 'new-hampshire'),
(7, 22, 3, 7, 0, 3.0, 0, '0186891423', 'Jedediahside', 'Tennessee', '95685 Eladio Skyway', 'Odio rerum libero.', '2020-07-27 11:29:31', '2020-07-27 11:29:31', 'tennessee'),
(8, 23, 7, 8, 0, 3.0, 0, '6917416030', 'Port Ismaelstad', 'Hawaii', '760 Donald Port', 'Rerum tempora et.', '2020-07-27 11:46:32', '2020-07-27 11:46:32', 'sampson'),
(9, 24, 6, 9, 0, 3.0, 0, '0915098618', 'Ferryburgh', 'Delaware', '732 Oswaldo Freeway', 'Totam quaerat reiciendis nemo pariatur provident.', '2020-07-27 12:10:14', '2020-07-27 12:10:14', 'robin'),
(10, 25, 6, 10, 0, 3.0, 0, '2021552097', 'Mannborough', 'Wisconsin', '2003 Ritchie Trafficway', 'Illum autem eveniet magnam aperiam quod.', '2020-07-27 12:12:13', '2020-07-27 12:12:13', 'keith'),
(11, 26, 7, 11, 0, 3.0, 0, '7091543620', 'West Otis', 'Alaska', '3454 Dane Path', 'Vel distinctio magnam.', '2020-07-27 12:13:20', '2020-07-27 12:13:20', 'tina');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `headline` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rating` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `approved` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `post_id` int(10) UNSIGNED NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `user_id`, `headline`, `description`, `rating`, `approved`, `created_at`, `updated_at`, `post_id`, `slug`) VALUES
(1, 5, 'Very smart', 'Tumtuna is the most valuable business resource we have EVER purchased. It fits our needs perfectly. Without Tumtuna, we would have gone bankrupt by now. It\'s really wonderful.', '3', NULL, '2020-06-17 21:56:44', '2020-06-17 21:56:44', 4, ''),
(2, 6, 'leaky pipe', 'It\'s really wonderful. I am so pleased with this product. I can\'t say enough about Tumtuna. No matter where you go, Tumtuna is the coolest, most happening thing around!', '4', NULL, '2020-06-17 21:59:11', '2020-06-17 21:59:11', 4, ''),
(3, 7, 'i love it!!', 'Definitely worth the investment. Great job, I will definitely be ordering again! You\'ve saved our business!', '5', NULL, '2020-06-17 22:00:54', '2020-06-17 22:00:54', 3, ''),
(4, 9, 'good attitude', 'Needless to say we are extremely satisfied with the results. It\'s all good. You won\'t regret it. Tumtuna is worth much more than I paid.', '1', NULL, '2020-06-17 22:02:23', '2020-06-17 22:02:23', 2, ''),
(5, 8, 'Must use service!!', 'I love Tumtuna. I am completely blown away. Thank you so much for your help. I will recommend you to my colleagues.', '3', NULL, '2020-06-17 22:04:01', '2020-06-17 22:04:01', 1, ''),
(6, 8, 'Best on the market', 'It\'s really wonderful. It\'s exactly what I\'ve been looking for. Dude, your stuff is the bomb!', '2', NULL, '2020-06-17 22:04:51', '2020-06-17 22:04:51', 1, ''),
(7, 10, 'very hardworking', 'trustful', '4', NULL, '2020-06-29 14:23:54', '2020-06-29 14:23:54', 5, ''),
(8, 9, 'Voluptates sequi molestias recusandae ut aliquam aspernatur dolor.', 'Reiciendis dolorem nihil pariatur velit non quis.', '5', NULL, '2020-07-07 16:52:10', '2020-07-07 16:52:10', 4, ''),
(9, 11, 'Aut delectus adipisci culpa quam ut odit ut ipsum voluptate.', 'Cum corrupti aliquam.', '2', NULL, '2020-07-08 10:00:33', '2020-07-08 10:00:33', 4, ''),
(10, 14, 'Voluptatem reiciendis deleniti in quia dicta eum.', 'Nihil quia nulla maiores.', '1', NULL, '2020-07-09 16:35:30', '2020-07-09 16:35:30', 4, ''),
(11, 13, 'Ipsum ratione at saepe architecto voluptas tenetur.', 'Consequuntur sed earum enim ut.', '1', NULL, '2020-07-09 16:36:45', '2020-07-09 16:36:45', 4, ''),
(12, 15, 'Mollitia nesciunt nobis et quas dolorum natus.', 'Magnam fugiat sint exercitationem dolorem consequatur et aliquid.', '2', NULL, '2020-07-20 13:27:07', '2020-07-20 13:27:07', 4, ''),
(14, 15, 'Occaecati fuga ut sint modi rem mollitia adipisci quo.', 'Odio eius consequatur temporibus cumque non non.', '4', NULL, '2020-07-20 13:56:53', '2020-07-20 13:56:53', 1, ''),
(15, 12, 'bhbhn', 'uknuk', '4', NULL, '2020-07-20 14:36:05', '2020-07-20 14:36:05', 2, ''),
(16, 17, 'consectetur maxime dicta', 'Aliquid occaecati facere enim sunt voluptatem aut commodi libero occaecati.', '1', NULL, '2020-07-20 19:53:20', '2020-07-20 19:53:20', 5, ''),
(17, 18, 'quod sed autem', 'Voluptatibus non nesciunt harum alias et enim repellat et fugiat.', '3', NULL, '2020-07-20 21:08:37', '2020-07-20 21:08:37', 5, ''),
(18, 12, 'tempora accusamus et', 'Dolorem voluptatem ea iusto.', '4', NULL, '2020-07-20 22:14:15', '2020-07-20 22:14:15', 5, ''),
(23, 26, 'Beatae dolor aut.', 'Dolores facere ut quidem aut sit eum.', '5', NULL, '2020-07-27 14:57:19', '2020-07-27 14:57:19', 10, 'tina'),
(24, 23, 'Sequi in molestiae animi dolores delectus.', 'Libero ipsam sapiente molestiae dolores blanditiis quia dolor.', '1', NULL, '2020-07-27 15:01:45', '2020-07-27 15:01:45', 10, 'sampson'),
(25, 19, 'Aut et rerum et dolor dolore ducimus odit.', 'Illum perspiciatis veritatis expedita.', '1', NULL, '2020-07-28 00:24:04', '2020-07-28 00:24:04', 8, 'caris'),
(27, 27, 'Quisquam ut et quis.', 'Et ipsum est voluptatem odit natus maxime ratione optio.', '3', NULL, '2020-07-29 10:36:51', '2020-07-29 10:36:51', 11, 'craig'),
(28, 27, 'Deleniti nostrum et libero sequi ducimus.', 'Nostrum consequatur consequuntur accusantium tempore qui ut aut.', '3', NULL, '2020-07-29 12:46:52', '2020-07-29 12:46:52', 10, 'craig-1'),
(34, 1, 'Quo quia animi commodi veniam at distinctio porro.', 'Aspernatur hic quibusdam accusantium iure porro.', '3', NULL, '2020-07-30 00:39:41', '2020-07-30 00:39:41', 9, 'james'),
(40, 1, 'Praesentium vitae quia laboriosam quis cum consequatur.', 'Non temporibus aut rerum minima omnis illo atque.', '2', NULL, '2020-07-30 11:12:38', '2020-07-30 11:12:38', 9, 'james-1'),
(41, 1, 'Molestiae consequatur voluptas dolorem sint explicabo aspernatur iusto corporis.', 'In ut voluptatem dolor.', '5', NULL, '2020-07-30 11:22:07', '2020-07-30 11:22:07', 9, 'james-2'),
(42, 27, 'Itaque est eaque aliquam.', 'Debitis et asperiores rerum animi corporis illo sit.', '1', NULL, '2020-07-30 11:36:09', '2020-07-30 11:36:09', 9, 'craig-2'),
(43, 27, 'Est placeat illum odit doloribus.', 'Debitis recusandae similique quod nesciunt officiis et.', '1', NULL, '2020-07-30 13:51:54', '2020-07-30 13:51:54', 9, 'craig-3'),
(44, 27, 'Eos magnam maiores ea non vel aut non iure illo.', 'Quia consequuntur tempore.', '4', NULL, '2020-07-30 15:17:38', '2020-07-30 15:17:38', 9, 'craig-4');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'administrator', NULL, NULL),
(2, 'guest', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `role_id` int(11) NOT NULL DEFAULT 2,
  `active` int(11) NOT NULL DEFAULT 1,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `active`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'James', 'james@gmail.com', NULL, '$2y$10$g/YcXf7S2xB3ydK5N5hYM.ku1TdRWQ3.1fnl6gkYT5CH.C7IAz88C', '3iTgaNnc8K84mBsDVYUMzYruJtcZhxzT8VFnlaPcJT0EcSV7OIgUfToboXW8', '2020-06-17 21:43:04', '2020-06-17 21:43:04'),
(2, 2, 1, 'John', 'john@gmail.com', NULL, '$2y$10$hflzn1uUECiaj7rYZhcrl.1SzPJtcZdl9Dh/dlDBdQI5x5cjlSlOy', 'saVgBOPheHqPvoRMs5CEZXOqbhvVWLqS4amYATY9i6vu7lZeGXlTB3WPzHNY', '2020-06-17 21:46:20', '2020-06-17 21:46:20'),
(3, 2, 1, 'Robert', 'robert@gmail.com', NULL, '$2y$10$QfHQqbFacKotGfHXWXNyK.jreYP94Hp1JRAwJgVzafRhQuu.BmNn6', 'nAdskJZ7N5pIfbkSOWZEtupbbsBo4WsKeYku3iAaUN5xIGIyzlqYwEC7SMeL', '2020-06-17 21:49:08', '2020-06-17 21:49:08'),
(4, 2, 1, 'William', 'william@gmail.com', NULL, '$2y$10$aHrJMXKsJERSMQTrVN2lReHBI07T5It4fYDgp/Unk7HEQcPwP.VFy', 'QEYGMWahPqsgsPJtwUpuOwTvjOcRK5OCGchrwxkYENWjzJcbR9YF66D0Ch71', '2020-06-17 21:50:22', '2020-06-17 21:50:22'),
(5, 2, 1, 'Mary', 'mary@gmail.com', NULL, '$2y$10$bfs1aRqFyKguK1hei58Qa.CDIRQfmMe9MXGqd4cp0/FbXGbAhPlfq', 'kUybJ8mhUAI7HherABn7bdoMrPpHWzuccriyX5lCAGWVSRPI5xhtsPJncEr0', '2020-06-17 21:51:47', '2020-06-17 21:51:47'),
(6, 2, 1, 'Patricia', 'patricia@gmail.com', NULL, '$2y$10$6C738tMd4RHuhR7DSab3ee9yQgR/6ercWDqhwJyZcqQeAvz3RKTF2', 'vBovkf1CJYKzS8xuB789uPGapx1eK5i7INpbq9Q7SgZ7MBKfIogYhOq6EcDs', '2020-06-17 21:52:19', '2020-06-17 21:52:19'),
(7, 2, 1, 'Jennifer', 'jennifer@gmail.com', NULL, '$2y$10$Z.cVrGhXmMNTjR3j04.nre8hWziErX1VSh1hvvMqggwno9kOaSUDe', 'i9JGI0VluDcn0CBAL5vYmyEGf1MmsfKBMcbC0EWGjJmwrgQcdz2b8MdjAEP7', '2020-06-17 21:52:52', '2020-06-17 21:52:52'),
(8, 2, 1, 'Susan', 'susan@gmail.com', NULL, '$2y$10$z8.pOH2zEDHQhnLi7DK53.3DPEfg0zXZhiemsW8UVrNIDWM2p/.7y', 'zoFsNVDWAcKl5vtVshgHR2FIGDbMy9JCnUD3XTBCdf5yxwvTsGvPdKVPboCt', '2020-06-17 21:53:22', '2020-06-17 21:53:22'),
(9, 2, 1, 'Anthony', 'anthony@gmail.com', NULL, '$2y$10$BJWmDtakV95balRgJyf4FeL1X5FTPhQ98UlQPkHRfYslkfO87ZmsC', 'D1JowO5AtSg0Fc383HQnRwJHCiZWuZ7aD7FyrEVPAh8k3F6PyCp3q5BjJCuC', '2020-06-17 21:54:06', '2020-06-17 21:54:06'),
(10, 2, 1, 'manuel', 'manuel@gmail.com', NULL, '$2y$10$XSayEEzyS3Nii5gnPZskWONxulfA7q10WvUlEQq2g8x9/9EcMSJym', 'dHVAZ6o2N9HENuSic2Y1WfNbosNILPCBveZLwQe5hF6hKsiNman6W8SZPMb3', '2020-06-29 14:21:39', '2020-06-29 14:21:39'),
(11, 2, 1, 'Paul', 'paula@gmail.com', NULL, '$2y$10$pe0R.1zAUZr1QkdClb3Lt.QPppR4sHLbim0SMgw2Gd9zlg86ssy9G', 'FJOQeNmMUsaULNceuqbEiANhqnpvHTDqEWqAX76T7vlkegFvzeIQyLzpbqyt', '2020-07-08 09:59:59', '2020-07-08 09:59:59'),
(12, 2, 1, 'Travis', 'travis@gmail.com', NULL, '$2y$10$ld1zZuX820AHy2pqDC86FOgxUobLNbiiKGu/3a03XRrB1ie9RgyOa', '0A4iA36x7KFMNgJcGkJx9FitOWq3mdAicVkUQcMN4GytIYuQS7P3goDmtpyt', '2020-07-09 16:33:37', '2020-07-09 16:33:37'),
(13, 2, 1, 'Rashford', 'rashford@gmail.com', NULL, '$2y$10$kLXvDNIQXW5FVPGcJ5eUieOV3OgfQbFMgwom4i3X0FMPFtmMhdkNK', 'rZTTaKpop4Akooznxp2DClnBCHdZF9i1P4peLgS9ck3pnY7eYMAA69OKsNVR', '2020-07-09 16:34:27', '2020-07-09 16:34:27'),
(14, 2, 1, 'Raphael', 'ralph@gmail.com', NULL, '$2y$10$OYJ3M4DLtTpcYnVGkevele2.RXVvlZRw7fjeeievHWFaeo9/Pdfwe', 'BC7dhpC11D8FiJKRep8Z6znCaiNTxG0k7KEWTNPApo23VNhp6NYIf7G4uHxA', '2020-07-09 16:35:04', '2020-07-09 16:35:04'),
(15, 2, 1, 'maxwell', 'maxwell@gmail.com', NULL, '$2y$10$gBcTFOUuVcF9hUfg9hsT4OVQeboEyGTYY2diYHwg8IbHFvOag4Gdq', '0oHgttzuLt8rMmx4bxIl1ki1NvcmdmiivndR49uubCVr5maieTfbLjCJHKFs', '2020-07-19 16:38:49', '2020-07-19 16:38:49'),
(16, 2, 1, 'Naomi', 'naomi@gmail.com', NULL, '$2y$10$7ZEgFG6NdbFqiBvbAxcDAO1kWauRJqTVIIbj2OhMJISRPNc3AMvSy', '7Zre6WEbry0Q4lEotd1qEneZ3SkkrazfUPsGQWtwcctClmEmAD4uKTjRddN2', '2020-07-19 16:48:06', '2020-07-19 16:48:06'),
(17, 2, 1, 'Rashid', 'rashid@gmail.com', NULL, '$2y$10$aV3ECOWC5CU.A4Rh6CtzS.arKeuaj5V6wnAP9pvX8vk8bB5cu8GEG', 'fz1sli35PXSIOzCuOy130RGF2LaKLiA1yyRyx70U8BVNOrPN0vS3pQ3uiIbC', '2020-07-20 18:39:41', '2020-07-20 18:39:41'),
(18, 2, 1, 'Christopher', 'christopher@gmail.com', NULL, '$2y$10$Ea3I8bdV1eTAjIAgl9nsAuSFk4fQYCaA2HOakJB90.mchqcgwXphq', '51L27BM6gV51pANrfnQ9AZzfwLP7wAaWSZZbDYjMZ713kuw56nKQxeh47Snv', '2020-07-20 20:19:42', '2020-07-20 20:19:42'),
(19, 2, 1, 'Caris', 'caris@gmail.com', NULL, '$2y$10$2R.BjHSaPqKJwx9GOZnRIegFTqkmuIIgSs20rkB9VTqaUpCn/Is6m', 'mEsVhvAdCxmfOezXpd1OzFhgKJ0R0pXTTKdHJfgarK51FelKqqGVtLfF5cNz', '2020-07-21 13:04:03', '2020-07-21 13:04:03'),
(20, 2, 1, 'Ashley', 'ashley@gmail.com', NULL, '$2y$10$dKvWjrO/WULAIsTPr4J72e.txj.mdbxdI5xWk/3IS67dWQoudnJ/e', 'iJfschNKCiETp4ErdUyQhyOqwO8SaC7szTwq9fd2D8XeOqLBnwTbQobk8DPc', '2020-07-21 13:04:40', '2020-07-21 13:04:40'),
(21, 2, 1, 'jacob', 'jacob@gmail.com', NULL, '$2y$10$TWJSFxI/MqoJbUEyla2axu.46BQxCxQf2Puha7hNtCPOuzQr1bnR2', 'aBs1sZB8hkYe0ieny6epdyvLTXQDMvPiUjNe84oQQI9jdXjFau9eaKJTxL86', '2020-07-27 10:54:07', '2020-07-27 10:54:07'),
(22, 2, 1, 'Carl', 'carl@gmail.com', NULL, '$2y$10$mKropZLaXycyWsmInX/6I.KPzSlEbFJg7BCoprTRQkj9LmdtmGgJS', 'RjSSlo91N9JP7Nqj1YVaOwBQyz0WbCYSW9nOWt7ZronhO0d7FTsCJMlzAL3r', '2020-07-27 11:27:21', '2020-07-27 11:27:21'),
(23, 2, 1, 'Sampson', 'sampson@gmail.com', NULL, '$2y$10$x7ZMZS8.iccxQh9PHtJ.QuAHQGPOcL3upMpDwVSPXbGw.b4lKihtC', '0gJsDlJ9NRM0jb6MUUBO3kbjM2SVrvwgqIDjqz8SC3XCSi901mBIhOCdjKCM', '2020-07-27 11:43:00', '2020-07-27 11:43:00'),
(24, 2, 1, 'Robin', 'robin@gmail.com', NULL, '$2y$10$qSuuNlTz9EqH1djS/SlQhuOYdn6aR0mRqTyuViktXhmmGft7da.TK', 'pJav4TD5fHmpx6qZJasHwU9CDA97RPmRphG3H725DpHAgVM8c8lkt73F8iAW', '2020-07-27 12:09:10', '2020-07-27 12:09:10'),
(25, 2, 1, 'Keith', '00burnettghartey@gmail.com', NULL, '$2y$10$CWLJqKksYlpLliLs46RhueczJtpb4qyQWzOXrWWZg.RH2vsurXPl6', 'yIzLiDbQQnSBPljSsSP9b7ssZkSU8ZbSkbXPKuTUgamOMQpE03gw84sYVVzp', '2020-07-27 12:11:34', '2020-07-27 12:11:34'),
(26, 2, 1, 'Tina', 'tina@gmail.com', NULL, '$2y$10$VeNhVelUMI.bdHsLlr850eDabQmrWRaBf1SEJXItNVK5h7snmfzia', 'D9LQzrrDlulbCF5as8Qz03fmaGpr9OVfc6RUKxD8W16FNObjpAp4ySS0ZgBw', '2020-07-27 12:12:48', '2020-07-27 12:12:48'),
(27, 2, 1, 'Craig', 'craig@gmail.com', NULL, '$2y$10$9Tlq5ghGH9FZbIC3Xc02xuMunTpe5asWLo9IUxgKjPaPQElz2n6im', '2PNu3sUMYebK67OgNHeEVh4FPF1AYeIkem7G9aS34mg0g9xd53uO0BJYq3OY', '2020-07-29 10:35:22', '2020-07-29 10:35:22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
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
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posts_user_id_index` (`user_id`),
  ADD KEY `posts_category_id_index` (`category_id`),
  ADD KEY `posts_slug_index` (`slug`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reviews_slug_index` (`slug`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
