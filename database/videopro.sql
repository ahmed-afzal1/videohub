-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2021 at 07:07 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `videohub`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` int(11) DEFAULT 0,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `phone`, `role`, `photo`, `password`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', '34553442334', 23, '1583907282man.png', '$2y$10$k49rQPEn5DFI2DW.VKPqE.oVToRK53ullSMb9HmiwTBZqqurt7RL.', 1, 'SA50Fp9JPrOMgN4A5ZxsktZqmwuYX2tHd9Bt7mh3gDEubz0CFGpty6OmdvSm', '2018-02-27 23:27:08', '2020-03-11 00:24:59'),
(2, 'Shaon', 'genius@gmail.com', '2346545324', 25, NULL, '$2y$10$p35S2FczpEfpbe41CX4j4.XE548tHBtF5weGLPxZ56MX5dsOFtaCC', 1, '2x9ax4IYPKaUMBO5inFUW2g9mEc0nLCNba9iOVGTaWHJuRSEWed0vlRGBpmV', '2018-02-27 23:27:09', '2020-03-28 01:41:37'),
(4, 'Staff', 'staff@gmail.com', '34534534534', 23, '15853808181564298473side-triple2.jpg', '$2y$10$I/2L8FXvxOQV7irwh2PH2upufB0DBMponc99HDo8U4cWx2B/6ASwa', 1, 'TronE5p2LlRL3ZeusD3JeSDo1yecvzFr6uFp9FZU8GLMFKXcMtMmZZ4O1f8C', '2019-05-23 08:10:30', '2020-03-28 01:33:58');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` int(191) NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `source` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `views` int(11) NOT NULL DEFAULT 0,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `meta_tag` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tags` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `category_id`, `title`, `slug`, `description`, `source`, `views`, `status`, `meta_tag`, `meta_description`, `tags`, `created_at`) VALUES
(46, 5, 'How to design effective arts?', 'fashionaaa', '<h2 style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; line-height: 24px; font-family: DauphinPlain; font-size: 24px; color: rgb(0, 0, 0);\">Where can I get some?</h2><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;\"=\"\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;\"=\"\"><br></p><h2 style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; line-height: 24px; font-family: DauphinPlain; font-size: 24px; color: rgb(0, 0, 0);\">Where can I get some?</h2><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;\"=\"\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;\"=\"\"><br></p><h2 style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; line-height: 24px; font-family: DauphinPlain; font-size: 24px; color: rgb(0, 0, 0);\">Where can I get some?</h2><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;\"=\"\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>', 'adsfads', 24, 1, 'sgdas,adfga,agf,adfg', 'afsdaf afaf agddsaf', 'dfs,sdfg,saaga,a', '2020-02-11 18:00:00'),
(47, 6, 'Privacy & Policy', 'fashiona', '<h2 style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; line-height: 24px; font-family: DauphinPlain; font-size: 24px; color: rgb(0, 0, 0);\">Where can I get some?</h2><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;\"=\"\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;\"=\"\"><br></p><h2 style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; line-height: 24px; font-family: DauphinPlain; font-size: 24px; color: rgb(0, 0, 0);\">Where can I get some?</h2><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;\"=\"\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;\"=\"\"><br></p><h2 style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; line-height: 24px; font-family: DauphinPlain; font-size: 24px; color: rgb(0, 0, 0);\">Where can I get some?</h2><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;\"=\"\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>', 'gsfg', 32, 1, NULL, NULL, 'dfs,fd,yt', '2020-02-26 18:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `cast_crews`
--

CREATE TABLE `cast_crews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bio` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cast_crews`
--

INSERT INTO `cast_crews` (`id`, `name`, `bio`, `status`, `created_at`, `updated_at`) VALUES
(3, 'Anthony Russo', 'Anthony Russo was born on February 3, 1970 in Cleveland, Ohio, USA as Anthony J. Russo. He is a producer and director, known for Avengers: Endgame (2019), Avengers: Infinity War (2018) and Captain America: The Winter Soldier (2014).', 1, '2020-03-07 00:31:52', '2020-03-07 00:31:52'),
(4, 'Robert Downey Jr', 'Robert Downey Jr. has evolved into one of the most respected actors in Hollywood. With an amazing list of credits to his name, he has managed to stay new and fresh even after over four decades in the business. Downey was born April 4, 1965 in Manhattan, New York, the son of writer, director and filmographer Robert Downey Sr. and actress Elsie Downey', 1, '2020-03-07 00:34:11', '2020-03-07 03:12:57'),
(5, 'Chris Evans', 'Christopher Robert Evans began his acting career in typical fashion: performing in school productions and community theatre. He was born in Boston, Massachusetts, the son of Lisa (Capuano), who worked at the Concord Youth Theatre, and G. Robert Evans III, a dentist. His uncle is congressman Mike Capuano. Chris\'s father is of half German and half', 1, '2020-03-07 00:36:10', '2020-03-07 00:36:10'),
(6, 'Mark Ruffalo', 'Mark Ruffalo was born in Kenosha, Wisconsin, to Marie Rose (Hebert), a stylist and hairdresser, and Frank Lawrence Ruffalo, a construction painter. His father\'s ancestry is Italian, and his mother is of half French-Canadian and half Italian descent. Mark moved with his family to Virginia Beach, Virginia, where he lived out most of his teenage', 1, '2020-03-07 00:36:47', '2020-03-07 00:36:47'),
(7, 'Scarlett Johansson', 'Scarlett Johansson was born in New York City. Her mother, Melanie Sloan, is from a Jewish family from the Bronx, and her father, Karsten Johansson, is a Danish-born architect, from Copenhagen. She has a sister, Vanessa Johansson, who is also an actress, a brother, Adrian, a twin brother, Hunter Johansson, born three minutes after her', 1, '2020-03-07 00:37:30', '2020-03-16 03:44:23');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(3, 'Movies', 'movies', 0, '2021-12-10 13:56:23', '2021-12-11 04:50:24'),
(4, 'Drama', 'drama', 0, '2021-12-10 13:56:29', '2021-12-11 04:50:23'),
(5, 'Kids', 'kids', 0, '2021-12-10 13:56:35', '2021-12-11 04:50:21'),
(6, 'Series', 'series', 0, '2021-12-10 13:56:43', '2021-12-11 04:50:19');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(191) NOT NULL,
  `user_id` int(191) UNSIGNED NOT NULL,
  `movie_id` int(191) UNSIGNED NOT NULL,
  `text` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `user_id`, `movie_id`, `text`, `created_at`, `updated_at`) VALUES
(25, 9, 21, 'Hi', '2020-03-04 00:57:32', '2020-03-04 00:57:32'),
(30, 10, 23, 'HI', '2020-03-04 01:30:42', '2020-03-04 01:30:42'),
(31, 9, 23, 'gdadfg', '2020-03-04 01:46:10', '2020-03-04 01:46:10');

-- --------------------------------------------------------

--
-- Table structure for table `currencies`
--

CREATE TABLE `currencies` (
  `id` int(191) NOT NULL,
  `name` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sign` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` double NOT NULL,
  `currency_format` varchar(191) DEFAULT NULL,
  `is_default` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `currencies`
--

INSERT INTO `currencies` (`id`, `name`, `sign`, `value`, `currency_format`, `is_default`) VALUES
(1, 'USD', '$', 2, '1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `episodes`
--

CREATE TABLE `episodes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `access` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tv_show_id` int(11) NOT NULL,
  `tv_session_id` int(11) NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `release_date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `duration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `video_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `video` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tag` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `episodes`
--

INSERT INTO `episodes` (`id`, `access`, `tv_show_id`, `tv_session_id`, `title`, `description`, `release_date`, `duration`, `video_type`, `video`, `status`, `slug`, `tag`, `created_at`, `updated_at`) VALUES
(13, 'free', 14, 2, 'Episode 1', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries<br>', '2020-03-14 04:29:49', '1 hour 30 min', 'url', 'https://www.youtube.com/embed/2rR158vUmnU', 1, 'episode-1', 'a,b,c,d', '2020-03-13 22:29:49', '2020-03-13 22:29:49'),
(14, 'premium', 14, 2, 'Episode 2', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries<br>', '2020-03-14 04:31:37', '1 hour 30 min', 'url', 'https://www.youtube.com/embed/8BiFXHGn1PA', 1, 'episode-2', 'a,b,c,d', '2020-03-13 22:31:37', '2020-03-13 23:53:56');

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
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `title`, `details`, `status`) VALUES
(3, 'Man particular insensible celebrated', '<span style=\"color: rgb(70, 85, 65); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 16px;\">Nam enim risus, molestie et, porta ac, aliquam ac, risus. Quisque lobortis. Phasellus pellentesque purus in massa. Aenean in pede. Phasellus ac libero ac tellus pellentesque semper. Sed ac felis. Sed commodo, magna quis lacinia ornare, quam ante aliquam nisi, eu iaculis leo purus venenatis dui.</span><br>', 1),
(4, 'Civilly why how end viewing related', '<span style=\"color: rgb(70, 85, 65); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 16px;\">Nam enim risus, molestie et, porta ac, aliquam ac, risus. Quisque lobortis. Phasellus pellentesque purus in massa. Aenean in pede. Phasellus ac libero ac tellus pellentesque semper. Sed ac felis. Sed commodo, magna quis lacinia ornare, quam ante aliquam nisi, eu iaculis leo purus venenatis dui.</span><br>', 0),
(5, 'Six started far placing saw respect', '<span style=\"color: rgb(70, 85, 65); font-family: \" open=\"\" sans\",=\"\" sans-serif;=\"\" font-size:=\"\" 16px;\"=\"\">Nam enim risus, molestie et, porta ac, aliquam ac, risus. Quisque lobortis. Phasellus pellentesque purus in massa. Aenean in pede. Phasellus ac libero ac tellus pellentesque semper. Sed ac felis. Sed commodo, magna quis lacinia ornare, quam ante aliquam nisi, eu iaculis leo purus venenatis dui.</span><br>', 0),
(6, 'She jointure goodness interest debat', '<div style=\"text-align:center;\"><div style=\"text-align:justify;\"><font color=\"#000000\">Nam enim risus, molestie et, porta ac, aliquam ac, risus. Quisque lobortis. Phasellus pellentesque purus in massa. Aenean in pede. Phasellus ac libero ac tellus pellentesque semper. Sed ac felis. Sed commodo, magna quis lacinia ornare, quam ante aliquam nisi, eu iaculis leo purus venenatis dui.</font></div><div style=\"text-align:justify;\"><br></div><div style=\"text-align:justify;\"><br></div><div style=\"text-align:justify;\"></div><div style=\"text-align:justify;\"></div></div>', 0),
(11, 'Privacy & Policy', '<div><h2 style=\"line-height:1.44444;\"><font size=\"6\">Title number 1</font></h2><p><span style=\"font-weight:700;\">Lorem Ipsum</span>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p></div><div><h2><font size=\"6\">Title number 2</font><br></h2><p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p></div><br><div><h2><font size=\"6\">Title number 3</font><br></h2><p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</p><p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p></div><h2><font size=\"6\">Title number 9</font><br></h2><p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>', 0),
(12, 'adsfadsdsfasd', 'qewrtwrtwretwert', 0),
(13, 'adsfadsadfadfad', 'qewrtwrtwretwert', 0);

-- --------------------------------------------------------

--
-- Table structure for table `favarites`
--

CREATE TABLE `favarites` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `video_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `favarites`
--

INSERT INTO `favarites` (`id`, `user_id`, `video_id`, `created_at`, `updated_at`) VALUES
(24, 12, 22, NULL, NULL),
(56, 10, 20, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `generalsettings`
--

CREATE TABLE `generalsettings` (
  `id` int(191) NOT NULL,
  `website_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `header_logo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `favicon` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `website_loader` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_loader` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_admin_loader` int(11) NOT NULL DEFAULT 1,
  `is_website_loader` int(11) NOT NULL DEFAULT 1,
  `secendary_color` varchar(80) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_tawk` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `theme_color` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_verification` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tawk_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_disqus` tinyint(1) NOT NULL DEFAULT 0,
  `disqus` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `paypal_check` tinyint(1) DEFAULT 0,
  `paypal_client_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `paypal_client_secret` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `paypal_sendbox_check` int(11) NOT NULL DEFAULT 1,
  `stripe_check` tinyint(1) NOT NULL DEFAULT 0,
  `paypal_business` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stripe_key` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stripe_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `smtp_host` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `smtp_port` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_text` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `smtp_user` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `smtp_pass` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `from_email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `from_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_smtp` tinyint(1) NOT NULL DEFAULT 0,
  `is_currency` tinyint(1) NOT NULL DEFAULT 0,
  `currency_format` tinyint(1) NOT NULL DEFAULT 0,
  `subscribe_success` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subscribe_error` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `error_title` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `error_text` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `error_photo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `breadcumb_banner` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `footer_logo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `footer_text` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `copy_right_text` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_verification_email` int(11) NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `generalsettings`
--

INSERT INTO `generalsettings` (`id`, `website_title`, `header_logo`, `favicon`, `website_loader`, `admin_loader`, `is_admin_loader`, `is_website_loader`, `secendary_color`, `is_tawk`, `theme_color`, `is_verification`, `tawk_id`, `is_disqus`, `disqus`, `paypal_check`, `paypal_client_id`, `paypal_client_secret`, `paypal_sendbox_check`, `stripe_check`, `paypal_business`, `stripe_key`, `stripe_secret`, `smtp_host`, `smtp_port`, `order_title`, `order_text`, `smtp_user`, `smtp_pass`, `from_email`, `from_name`, `is_smtp`, `is_currency`, `currency_format`, `subscribe_success`, `subscribe_error`, `error_title`, `error_text`, `error_photo`, `breadcumb_banner`, `footer_logo`, `footer_text`, `copy_right_text`, `is_verification_email`) VALUES
(1, 'Video Pro', '1584504007logo.png', '15825409991573982412statistics1.png', '1584504315158036409715739824491563333857loader.gif', '158450432115739824491563333857loader.gif', 1, 1, '#0062e9', '0', '#afafaf', '1', '5bc2019c61d0b77092512d03', 1, 'text', 1, 'AcWYnysKa_elsQIAnlfsJXokR64Z31CeCbpis9G3msDC-BvgcbAwbacfDfEGSP-9Dp9fZaGgD05pX5Qi', 'EGZXTq6d6vBPq8kysVx8WQA5NpavMpDzOLVOb9u75UfsJ-cFzn6aeBXIMyJW2lN1UZtJg5iDPNL9ocYE', 1, 1, 'shaon143-facilitator-1@gmail.com', 'pk_test_UnU1Coi1p5qFGwtpjZMRMgJM', 'sk_test_QQcg3vGsKRPlW6T3dXcNJsor', 'smtp.mailtrap.io', '587', 'THANK YOU FOR YOUR GREAT GENEROSITY.', 'THANK YOU FOR YOUR GREAT GENEROSITY.', '57d0463c894d86', '8a4a767af36650', 'admin@geniusocean.com', 'GeniusOcean', 1, 0, 0, 'You are subscribed Successfully...', 'This email has already been taken.', 'adfgadsf', 'adfgadsf', '15826106951561878540404.png', '15825414171578741410blog.jpg', '1582613180logo.png', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut, adipiscing elit, sed do. eiusmod tempor incididunt ut, adipiscing.', 'COPYRIGHT © 2019. All Rights Reserved By <a href=\"http://geniusocean.com/\">GeniusOcean.com</a>', 0);

-- --------------------------------------------------------

--
-- Table structure for table `genres`
--

CREATE TABLE `genres` (
  `id` int(191) NOT NULL,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `genres`
--

INSERT INTO `genres` (`id`, `name`, `slug`, `status`, `updated_at`, `created_at`) VALUES
(34, 'Flower', 'flower', 1, '2021-12-11 13:09:00', NULL),
(38, 'messi jr', 'asdsdas', 1, '2021-12-11 10:46:22', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

CREATE TABLE `languages` (
  `id` int(191) NOT NULL,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_default` tinyint(1) NOT NULL DEFAULT 0,
  `language` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rtl` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `languages`
--

INSERT INTO `languages` (`id`, `name`, `is_default`, `language`, `file`, `rtl`) VALUES
(1, '15836611490f0uCB10', 1, 'English', '15836611490f0uCB10.json', 0),
(7, '1584341028Tg1UjPlb', 0, 'Arabic', '1584341028Tg1UjPlb.json', 1);

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
(4, '2020_02_08_053220_create_videos_table', 1),
(7, '2020_02_13_034016_create_show_images_table', 3),
(8, '2020_02_13_034055_create_tv_shows_table', 3),
(9, '2020_02_13_034150_create_tv_sessions_table', 3),
(10, '2020_02_13_034542_create_video_languages_table', 3),
(11, '2020_02_17_093546_create_episodes_table', 4),
(12, '2020_02_23_085351_create_subscription_plans_table', 5),
(13, '2020_02_23_101530_create_sports_categories_table', 6),
(16, '2020_02_23_104158_create_sports_videos_table', 7),
(17, '2020_02_10_055418_create_moves_table', 8),
(20, '2020_03_01_054719_create_reviews_table', 9),
(21, '2020_03_02_065931_create_favarites_table', 10),
(22, '2020_03_03_092244_create_orders_table', 11),
(24, '2020_03_07_052545_create_cast_crews_table', 12),
(25, '2021_12_10_191625_create_categories_table', 13),
(27, '2021_12_11_174236_create_plan_features_table', 14);

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `video_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `genre_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `language_id` int(11) DEFAULT NULL,
  `video` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tag` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `access` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `relase_date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `heighlight` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `producer` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `directors` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cast` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`id`, `title`, `slug`, `video_type`, `genre_id`, `language_id`, `video`, `description`, `tag`, `status`, `access`, `relase_date`, `heighlight`, `producer`, `directors`, `cast`, `created_at`, `updated_at`) VALUES
(28, 'khusu', 'khusu', 'url', NULL, NULL, 'https://www.youtube.com/embed/S-lwK7n-4_s', 'kajsdhf kjskf jshalkfj haslkfjh dkfhsdlakfhlsdaf', 'dsadasd', '1', 'free', '01-01-1970', 'trending,new', '4', '4', '5', '2021-12-10 14:44:24', '2021-12-10 15:45:04');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `plan_id` int(11) NOT NULL,
  `order_amount` double NOT NULL DEFAULT 0,
  `payment_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `txnid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `charge_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `name`, `email`, `phone`, `plan_id`, `order_amount`, `payment_type`, `order_number`, `title`, `payment_status`, `txnid`, `charge_id`, `created_at`, `updated_at`) VALUES
(5, 9, 'user', 'user@gmail.com', '12131243', 10, 100, 'paypal', '5qfx1583231433', 'PREMIUM Via Paypal', 'Completed', '41Y95536G0574381G', NULL, '2019-03-17 22:49:55', '2029-03-03 04:30:33'),
(6, 9, 'user', 'user@gmail.com', '12131243', 16, 100, 'paypal', '5qfx1583231433', 'PREMIUM Via Paypal', 'Completed', '41Y95536G0574381G', NULL, '2019-11-19 22:49:55', '2029-03-03 04:30:33');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(191) NOT NULL,
  `title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_tag` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `title`, `slug`, `details`, `meta_tag`, `meta_description`) VALUES
(1, 'About Us', 'about', '<div helvetica=\"\" neue\",=\"\" helvetica,=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;=\"\" font-style:=\"\" normal;=\"\" font-variant-ligatures:=\"\" font-variant-caps:=\"\" font-weight:=\"\" 400;=\"\" letter-spacing:=\"\" orphans:=\"\" 2;=\"\" text-align:=\"\" start;=\"\" text-indent:=\"\" 0px;=\"\" text-transform:=\"\" none;=\"\" white-space:=\"\" widows:=\"\" word-spacing:=\"\" -webkit-text-stroke-width:=\"\" background-color:=\"\" rgb(255,=\"\" 255,=\"\" 255);=\"\" text-decoration-style:=\"\" initial;=\"\" text-decoration-color:=\"\" initial;\"=\"\"><h2><font size=\"6\">Title number 1</font><br></h2><p><span style=\"font-weight: 700;\">Lorem Ipsum</span>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p></div><div helvetica=\"\" neue\",=\"\" helvetica,=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;=\"\" font-style:=\"\" normal;=\"\" font-variant-ligatures:=\"\" font-variant-caps:=\"\" font-weight:=\"\" 400;=\"\" letter-spacing:=\"\" orphans:=\"\" 2;=\"\" text-align:=\"\" start;=\"\" text-indent:=\"\" 0px;=\"\" text-transform:=\"\" none;=\"\" white-space:=\"\" widows:=\"\" word-spacing:=\"\" -webkit-text-stroke-width:=\"\" background-color:=\"\" rgb(255,=\"\" 255,=\"\" 255);=\"\" text-decoration-style:=\"\" initial;=\"\" text-decoration-color:=\"\" initial;\"=\"\"><h2><font size=\"6\">Title number 2</font><br></h2><p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p></div><br helvetica=\"\" neue\",=\"\" helvetica,=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;=\"\" font-style:=\"\" normal;=\"\" font-variant-ligatures:=\"\" font-variant-caps:=\"\" font-weight:=\"\" 400;=\"\" letter-spacing:=\"\" orphans:=\"\" 2;=\"\" text-align:=\"\" start;=\"\" text-indent:=\"\" 0px;=\"\" text-transform:=\"\" none;=\"\" white-space:=\"\" widows:=\"\" word-spacing:=\"\" -webkit-text-stroke-width:=\"\" background-color:=\"\" rgb(255,=\"\" 255,=\"\" 255);=\"\" text-decoration-style:=\"\" initial;=\"\" text-decoration-color:=\"\" initial;\"=\"\"><div helvetica=\"\" neue\",=\"\" helvetica,=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;=\"\" font-style:=\"\" normal;=\"\" font-variant-ligatures:=\"\" font-variant-caps:=\"\" font-weight:=\"\" 400;=\"\" letter-spacing:=\"\" orphans:=\"\" 2;=\"\" text-align:=\"\" start;=\"\" text-indent:=\"\" 0px;=\"\" text-transform:=\"\" none;=\"\" white-space:=\"\" widows:=\"\" word-spacing:=\"\" -webkit-text-stroke-width:=\"\" background-color:=\"\" rgb(255,=\"\" 255,=\"\" 255);=\"\" text-decoration-style:=\"\" initial;=\"\" text-decoration-color:=\"\" initial;\"=\"\"><h2><font size=\"6\">Title number 3</font><br></h2><p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</p><p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p></div><h2 helvetica=\"\" neue\",=\"\" helvetica,=\"\" arial,=\"\" sans-serif;=\"\" font-weight:=\"\" 700;=\"\" line-height:=\"\" 1.1;=\"\" color:=\"\" rgb(51,=\"\" 51,=\"\" 51);=\"\" margin:=\"\" 0px=\"\" 15px;=\"\" font-size:=\"\" 30px;=\"\" font-style:=\"\" normal;=\"\" font-variant-ligatures:=\"\" font-variant-caps:=\"\" letter-spacing:=\"\" orphans:=\"\" 2;=\"\" text-align:=\"\" start;=\"\" text-indent:=\"\" 0px;=\"\" text-transform:=\"\" none;=\"\" white-space:=\"\" widows:=\"\" word-spacing:=\"\" -webkit-text-stroke-width:=\"\" background-color:=\"\" rgb(255,=\"\" 255,=\"\" 255);=\"\" text-decoration-style:=\"\" initial;=\"\" text-decoration-color:=\"\" initial;\"=\"\" style=\"font-family: \" 51);\"=\"\"><font size=\"6\">Title number 9</font><br></h2><p helvetica=\"\" neue\",=\"\" helvetica,=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;=\"\" font-style:=\"\" normal;=\"\" font-variant-ligatures:=\"\" font-variant-caps:=\"\" font-weight:=\"\" 400;=\"\" letter-spacing:=\"\" orphans:=\"\" 2;=\"\" text-align:=\"\" start;=\"\" text-indent:=\"\" 0px;=\"\" text-transform:=\"\" none;=\"\" white-space:=\"\" widows:=\"\" word-spacing:=\"\" -webkit-text-stroke-width:=\"\" background-color:=\"\" rgb(255,=\"\" 255,=\"\" 255);=\"\" text-decoration-style:=\"\" initial;=\"\" text-decoration-color:=\"\" initial;\"=\"\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>', 'about us,our teams', 'Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.'),
(2, 'Privacy & Policy', 'privacy', '<div><h2 style=\"line-height:1.44444;\"><font size=\"6\">Title number 1</font></h2><p><span style=\"font-weight:700;\">Lorem Ipsum</span>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p></div><div><h2><font size=\"6\">Title number 2</font><br></h2><p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p></div><br><div><h2><font size=\"6\">Title number 3</font><br></h2><p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</p><p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p></div><h2><font size=\"6\">Title number 9</font><br></h2><p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>', 'privacy,terms,conditions,policy', 'Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.');

-- --------------------------------------------------------

--
-- Table structure for table `pagesettings`
--

CREATE TABLE `pagesettings` (
  `id` int(10) UNSIGNED NOT NULL,
  `success_message` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `day` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `time` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `street_address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_number` int(11) DEFAULT NULL,
  `fax` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_key` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `home_page_photo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `home_page_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trending_section` tinyint(1) NOT NULL DEFAULT 1,
  `recent_section` tinyint(1) NOT NULL DEFAULT 1,
  `new_section` tinyint(1) NOT NULL DEFAULT 1,
  `old_section` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pagesettings`
--

INSERT INTO `pagesettings` (`id`, `success_message`, `contact_email`, `website`, `day`, `time`, `street_address`, `contact_number`, `fax`, `meta_key`, `meta_description`, `home_page_photo`, `home_page_title`, `trending_section`, `recent_section`, `new_section`, `old_section`) VALUES
(1, 'Success! Thanks for contacting us, we will get back to you shortly.', 'admin@gmail.com', NULL, 'Mon - Sat', '9am - 5pm', 'Dhaka,Bangladesh', 19000000, '00 000 000 0001', 'c1,v1,n1,t1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eget ipsum vel leo molestie cursus sit amet eget dolor. Quisque egestas nisi vitae ipsum porttitor,', '1582966128herobg.jpg', 'BROWSE ALL MOVIES & TV-SERIES', 1, 0, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `plan_features`
--

CREATE TABLE `plan_features` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `features` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `plan_features`
--

INSERT INTO `plan_features` (`id`, `features`, `status`, `created_at`, `updated_at`) VALUES
(1, 'test', 1, '2021-12-11 12:06:47', '2021-12-11 12:17:28'),
(2, 'test3', 1, '2021-12-11 12:08:05', '2021-12-11 12:39:14'),
(3, 'safhkjshdfjk', 1, '2021-12-11 12:38:46', '2021-12-11 12:39:15');

-- --------------------------------------------------------

--
-- Table structure for table `replies`
--

CREATE TABLE `replies` (
  `id` int(11) NOT NULL,
  `user_id` int(191) UNSIGNED NOT NULL,
  `comment_id` int(191) UNSIGNED NOT NULL,
  `text` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `replies`
--

INSERT INTO `replies` (`id`, `user_id`, `comment_id`, `text`, `created_at`, `updated_at`) VALUES
(1, 22, 2, 'gf', '2019-10-14 01:57:32', '2019-10-14 01:57:32'),
(25, 22, 18, 'fd', '2019-11-10 22:24:31', '2019-11-10 22:24:31'),
(26, 22, 18, 'ss', '2019-11-10 22:24:35', '2019-11-10 22:24:35'),
(27, 13, 17, 'sds', '2019-11-10 22:30:06', '2019-11-10 22:30:06'),
(28, 13, 17, 'fgfg', '2019-11-10 22:30:11', '2019-11-10 22:30:11'),
(29, 13, 17, 'fgfg', '2019-11-10 22:30:14', '2019-11-10 22:30:14'),
(30, 13, 17, 'gfgfg', '2019-11-10 22:30:16', '2019-11-10 22:30:16'),
(35, 22, 20, 'hfj', '2020-03-03 23:57:27', '2020-03-03 23:57:27'),
(36, 22, 20, 'ghj', '2020-03-03 23:57:30', '2020-03-03 23:57:30'),
(37, 22, 20, 'ghjfkjk', '2020-03-03 23:57:33', '2020-03-03 23:57:36'),
(41, 9, 25, 'aadf', '2020-03-04 01:06:04', '2020-03-04 01:06:04'),
(43, 10, 28, 'ewrqwr', '2020-03-04 01:09:19', '2020-03-04 01:09:19');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `video_id` int(11) NOT NULL,
  `review_value` int(11) DEFAULT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `user_id`, `video_id`, `review_value`, `comment`, `created_at`, `updated_at`) VALUES
(35, 12, 23, 7, NULL, '2020-03-03 22:16:17', '2020-03-06 21:25:49'),
(39, 11, 23, 7, NULL, '2020-03-03 22:16:17', '2020-03-06 21:25:49'),
(41, 14, 23, 7, NULL, '2020-03-03 22:16:17', '2020-03-06 21:25:49'),
(42, 15, 23, 6, NULL, '2020-03-10 22:55:32', '2020-03-10 22:55:32'),
(43, 9, 21, 8, NULL, '2020-03-03 22:16:17', '2020-03-06 21:25:49'),
(47, 9, 22, 8, NULL, '2020-03-11 21:42:51', '2020-03-11 21:42:51'),
(48, 10, 20, 7, NULL, '2020-03-16 04:50:31', '2020-03-16 04:50:31');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(191) NOT NULL,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `section` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `section`) VALUES
(23, 'staff', 'Cast & Crew Section,Blog Section,Language Section,Support Message Section'),
(25, 'writer', 'Genres Section,Video Language Section');

-- --------------------------------------------------------

--
-- Table structure for table `show_images`
--

CREATE TABLE `show_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `imageable_id` int(11) NOT NULL,
  `imageable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `show_images`
--

INSERT INTO `show_images` (`id`, `image`, `imageable_id`, `imageable_type`, `created_at`, `updated_at`) VALUES
(13, '1581584763girl.png', 17, 'App\\Models\\VideoLanguage', '2020-02-13 03:04:26', '2020-02-13 03:06:03'),
(14, '1581584749man.png', 19, 'App\\Models\\VideoLanguage', '2020-02-13 03:05:32', '2020-02-13 03:05:50'),
(15, '1581585069girl.png', 33, 'App\\Models\\Genre', '2020-02-13 03:10:54', '2020-02-13 03:11:09'),
(20, '1581928133news.jpg', 10, 'App\\Models\\TvShow', '2020-02-16 04:17:35', '2020-02-17 02:28:53'),
(21, '15818484031578741410blog.jpg', 11, 'App\\Models\\TvShow', '2020-02-16 04:20:03', '2020-02-16 04:20:03'),
(22, '1639219562logo.png', 34, 'App\\Models\\Genre', '2020-02-16 04:37:13', '2021-12-11 04:46:03'),
(23, '15818496421574060315servicebg.jpg', 35, 'App\\Models\\Genre', '2020-02-16 04:40:42', '2020-02-16 04:40:42'),
(24, NULL, 13, 'App\\Models\\TvShow', '2020-02-17 02:41:58', '2020-02-17 02:41:58'),
(25, '1584158069Kingdom_Korean_Drama-TP-310x310.jpg', 14, 'App\\Models\\TvShow', '2020-02-17 03:10:30', '2020-03-13 21:54:29'),
(26, '1581931738request-call.png', 1, 'App\\Models\\TvSession', '2020-02-17 03:24:38', '2020-02-17 03:28:58'),
(27, '1584158204Kingdom_Korean_Drama-TP-310x310.jpg', 2, 'App\\Models\\TvSession', '2020-02-17 03:29:23', '2020-03-13 21:56:44'),
(28, '1584158204Kingdom_Korean_Drama-TP-310x310.jpg', 2, 'App\\Models\\TvSession', '2020-02-18 04:27:07', '2020-03-13 21:56:44'),
(29, '1584158190Kingdom_Korean_Drama-TP-310x310.jpg', 3, 'App\\Models\\TvSession', '2020-02-18 04:27:34', '2020-03-13 21:56:30'),
(30, '1582181638testimonial-author-1.png', 5, 'App\\Models\\Episode', '2020-02-20 00:53:58', '2020-02-20 00:53:58'),
(31, '1582435740news.jpg', 6, 'App\\Models\\Episode', '2020-02-20 01:06:34', '2020-02-22 23:29:01'),
(33, '1582189341Donations-min.jpg', 8, 'App\\Models\\Episode', '2020-02-20 03:02:21', '2020-02-20 03:02:21'),
(34, '1582437616fg14935513162-min.jpg', 9, 'App\\Models\\Episode', '2020-02-22 21:57:20', '2020-02-23 00:00:16'),
(35, '15824302871578741410blog.jpg', 10, 'App\\Models\\Episode', '2020-02-22 21:58:07', '2020-02-22 21:58:07'),
(36, '1582439317ukaZ4gZZujLWoK4yRYUR6rj.jpg', 11, 'App\\Models\\Episode', '2020-02-23 00:28:00', '2020-02-23 00:28:37'),
(37, '1584158246Brooklyn99-310x310.jpg', 4, 'App\\Models\\TvSession', '2020-02-23 01:03:09', '2020-03-13 21:57:26'),
(38, '1582441429testimonial-author-1.png', 15, 'App\\Models\\TvShow', '2020-02-23 01:03:49', '2020-02-23 01:03:49'),
(39, '1582454044Donations-min.jpg', 1, 'App\\Models\\SportsCategory', '2020-02-23 04:27:47', '2020-02-23 04:34:05'),
(40, '1582454062testimonial-author-1.png', 2, 'App\\Models\\SportsCategory', '2020-02-23 04:34:22', '2020-02-23 04:34:22'),
(41, '1582454228Donations-min.jpg', 3, 'App\\Models\\SportsCategory', '2020-02-23 04:36:16', '2020-02-23 04:37:08'),
(42, '1582523947request-call.png', 1, 'App\\Models\\SportsVideo', '2020-02-23 22:45:04', '2020-02-23 23:59:07'),
(43, '1582520864testimonial-author-1.png', 2, 'App\\Models\\SportsVideo', '2020-02-23 23:07:44', '2020-02-23 23:07:44'),
(48, '1583142446unnamed.jpg', 20, 'App\\Models\\Movie', '2020-02-25 04:32:41', '2020-03-02 03:47:26'),
(49, '1583142182inception_movie_poster_banner_01.jpg', 21, 'App\\Models\\Movie', '2020-02-25 21:24:30', '2020-03-02 03:43:02'),
(50, '1583142205unnamed.jpg', 22, 'App\\Models\\Movie', '2020-02-25 22:24:07', '2020-03-02 03:43:25'),
(51, '15829516341578465053request-call.png', 46, 'App\\Models\\Blog', '2020-02-28 21:26:55', '2020-02-28 22:47:14'),
(52, '15829519881578741410blog.jpg', 47, 'App\\Models\\Blog', '2020-02-28 22:01:02', '2020-02-28 22:53:08'),
(53, '15829560871578465053request-call.png', 36, 'App\\Models\\Genre', '2020-02-28 23:59:40', '2020-02-29 00:01:28'),
(54, '1583142163Aladdin-Live-Action-Banner24.jpg-e1566222177733.jpeg', 23, 'App\\Models\\Movie', '2020-02-29 00:03:02', '2020-03-02 03:42:43'),
(55, '1583208653paper-plane.png', 9, 'App\\Models\\SubscriptionPlan', '2020-03-02 22:10:04', '2020-03-02 22:10:53'),
(56, '1583208711paper-plane.png', 10, 'App\\Models\\SubscriptionPlan', '2020-03-02 22:11:51', '2020-03-02 22:11:51'),
(57, '1583208729paper-plane.png', 11, 'App\\Models\\SubscriptionPlan', '2020-03-02 22:12:10', '2020-03-02 22:12:10'),
(58, '1583219342paper-plane.png', 15, 'App\\Models\\SubscriptionPlan', '2020-03-03 01:09:02', '2020-03-03 01:09:02'),
(59, '1583219428paper-plane.png', 16, 'App\\Models\\SubscriptionPlan', '2020-03-03 01:10:28', '2020-03-03 01:10:28'),
(60, '158356227215824302871578741410blog.jpg', 2, 'App\\Models\\CastCrew', '2020-03-07 00:18:51', '2020-03-07 00:24:32'),
(61, '1583562713MV5BMTc2NjM5MTM0Ml5BMl5BanBnXkFtZTgwMTY3ODczNjM@._V1_UX214_CR0,0,214,317_AL_.jpg', 3, 'App\\Models\\CastCrew', '2020-03-07 00:31:53', '2020-03-07 00:31:53'),
(62, '1583562851MV5BNzg1MTUyNDYxOF5BMl5BanBnXkFtZTgwNTQ4MTE2MjE@._V1_UX214_CR0,0,214,317_AL_.jpg', 4, 'App\\Models\\CastCrew', '2020-03-07 00:34:11', '2020-03-07 00:34:11'),
(63, '1583562970MV5BMTU2NTg1OTQzMF5BMl5BanBnXkFtZTcwNjIyMjkyMg@@._V1_UY317_CR6,0,214,317_AL_.jpg', 5, 'App\\Models\\CastCrew', '2020-03-07 00:36:10', '2020-03-07 00:36:10'),
(64, '1583563007MV5BNDQyNzMzZTMtYjlkNS00YzFhLWFhMTctY2M4YmQ1NmRhODBkXkEyXkFqcGdeQXVyNjcyNzgyOTE@._V1_UY317_CR20,0,214,317_AL_.jpg', 6, 'App\\Models\\CastCrew', '2020-03-07 00:36:47', '2020-03-07 00:36:47'),
(65, '1639204609logo.png', 7, 'App\\Models\\CastCrew', '2020-03-07 00:37:30', '2021-12-11 00:36:51'),
(66, '1583577794MV5BOTI0MzcxMTYtZDVkMy00NjY1LTgyMTYtZmUxN2M3NmQ2NWJhXkEyXkFqcGdeQXVyMTQxNzMzNDI@._V1_UX182_CR0,0,182,268_AL_.jpg', 24, 'App\\Models\\Movie', '2020-03-07 01:07:29', '2020-03-07 04:43:15'),
(67, '15840085001578465053request-call.png', 12, 'App\\Models\\Episode', '2020-03-12 04:21:40', '2020-03-12 04:21:40'),
(68, '1584157446Brooklyn99-310x310.jpg', 16, 'App\\Models\\TvShow', '2020-03-13 21:44:06', '2020-03-13 21:44:06'),
(69, '1584157597Brooklyn99-310x310.jpg', 17, 'App\\Models\\TvShow', '2020-03-13 21:46:37', '2020-03-13 21:46:37'),
(70, '1584157690Brooklyn99-310x310.jpg', 18, 'App\\Models\\TvShow', '2020-03-13 21:48:10', '2020-03-13 21:48:10'),
(71, '1584158122MV5BMjMyZTdlNjAtODZmOC00OGI2LTliOWEtNThmYjNiN2E2Njk2XkEyXkFqcGdeQXVyNjg4NzAyOTA@-310x310.jpg', 19, 'App\\Models\\TvShow', '2020-03-13 21:55:22', '2020-03-13 21:55:22'),
(72, '1584158246Brooklyn99-310x310.jpg', 4, 'App\\Models\\TvSession', '2020-03-13 21:56:59', '2020-03-13 21:57:26'),
(73, '1584158264MV5BMjMyZTdlNjAtODZmOC00OGI2LTliOWEtNThmYjNiN2E2Njk2XkEyXkFqcGdeQXVyNjg4NzAyOTA@-310x310.jpg', 5, 'App\\Models\\TvSession', '2020-03-13 21:57:44', '2020-03-13 21:57:44'),
(74, '1584158281MV5BMjMyZTdlNjAtODZmOC00OGI2LTliOWEtNThmYjNiN2E2Njk2XkEyXkFqcGdeQXVyNjg4NzAyOTA@-310x310.jpg', 6, 'App\\Models\\TvSession', '2020-03-13 21:58:01', '2020-03-13 21:58:01'),
(75, '1584158290MV5BMjMyZTdlNjAtODZmOC00OGI2LTliOWEtNThmYjNiN2E2Njk2XkEyXkFqcGdeQXVyNjg4NzAyOTA@-310x310.jpg', 7, 'App\\Models\\TvSession', '2020-03-13 21:58:10', '2020-03-13 21:58:10'),
(76, '1584160189Brooklyn99-310x310.jpg', 13, 'App\\Models\\Episode', '2020-03-13 22:29:49', '2020-03-13 22:29:49'),
(77, '1584160297Brooklyn99-310x310.jpg', 14, 'App\\Models\\Episode', '2020-03-13 22:31:37', '2020-03-13 22:31:37'),
(78, '1584348517MV5BMTM3OTUwMDYwNl5BMl5BanBnXkFtZTcwNTUyNzc3Nw@@._V1_UY317_CR23,0,214,317_AL_.jpg', 36, 'App\\Models\\Genre', '2020-03-16 02:48:37', '2020-03-16 02:48:37'),
(79, '1584348650MV5BMTM3OTUwMDYwNl5BMl5BanBnXkFtZTcwNTUyNzc3Nw@@._V1_UY317_CR23,0,214,317_AL_.jpg', 37, 'App\\Models\\Genre', '2020-03-16 02:50:50', '2020-03-16 02:50:50'),
(80, '1639167062pexels-alesia-kozik-6765363.jpg', 25, 'App\\Models\\Movie', '2021-12-10 14:11:02', '2021-12-10 14:11:02'),
(81, '1639169064logo.png', 28, 'App\\Models\\Movie', '2021-12-10 14:44:24', '2021-12-10 14:44:24'),
(82, '1639219583pexels-alesia-kozik-6765363.jpg', 38, 'App\\Models\\Genre', '2021-12-11 04:46:23', '2021-12-11 04:46:23'),
(83, '1639248013logo.png', 20, 'App\\Models\\TvShow', '2021-12-11 12:40:13', '2021-12-11 12:40:13'),
(84, '1639248221logo.png', 21, 'App\\Models\\TvShow', '2021-12-11 12:43:41', '2021-12-11 12:43:41'),
(85, '1639248279pexels-alesia-kozik-6765363.jpg', 22, 'App\\Models\\TvShow', '2021-12-11 12:44:39', '2021-12-11 12:44:39'),
(86, '1639248739logo.png', 23, 'App\\Models\\TvShow', '2021-12-11 12:52:19', '2021-12-11 12:52:19'),
(87, '1639248967logo.png', 24, 'App\\Models\\TvShow', '2021-12-11 12:56:08', '2021-12-11 12:56:08'),
(88, '1639249112pexels-alesia-kozik-6765363.jpg', 25, 'App\\Models\\TvShow', '2021-12-11 12:58:32', '2021-12-11 12:58:32'),
(89, '1639249691logo.png', 26, 'App\\Models\\TvShow', '2021-12-11 13:08:11', '2021-12-11 13:08:11'),
(90, '1639249763screencapture-localhost-websolution-3-servicetop-kawsar-script-content-main-files-admin-pages-create-2021-09-15-20_48_42.png', 27, 'App\\Models\\TvShow', '2021-12-11 13:09:23', '2021-12-11 13:09:23');

-- --------------------------------------------------------

--
-- Table structure for table `socialsettings`
--

CREATE TABLE `socialsettings` (
  `id` int(10) UNSIGNED NOT NULL,
  `facebook` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gplus` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `twitter` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `linkedin` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dribble` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `f_status` tinyint(4) NOT NULL DEFAULT 1,
  `g_status` tinyint(4) NOT NULL DEFAULT 1,
  `t_status` tinyint(4) NOT NULL DEFAULT 1,
  `l_status` tinyint(4) NOT NULL DEFAULT 1,
  `d_status` tinyint(4) NOT NULL DEFAULT 1,
  `f_check` tinyint(10) DEFAULT NULL,
  `g_check` tinyint(10) DEFAULT NULL,
  `fclient_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fclient_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fredirect` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gclient_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gclient_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gredirect` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `socialsettings`
--

INSERT INTO `socialsettings` (`id`, `facebook`, `gplus`, `twitter`, `linkedin`, `dribble`, `f_status`, `g_status`, `t_status`, `l_status`, `d_status`, `f_check`, `g_check`, `fclient_id`, `fclient_secret`, `fredirect`, `gclient_id`, `gclient_secret`, `gredirect`) VALUES
(1, 'https://www.facebook.com/', 'https://plus.google.com/', 'https://twitter.com/', 'https://www.linkedin.com/', 'https://dribbble.com/', 0, 0, 0, 0, 0, 1, 0, '0663460329', 'f66cd670ec43d14209a2728af26dcc43', 'https://localhost/charity/main-charity/auth/facebook/callback', '915191002660-okcvhj4qspmbcm4qgn9et4vnu5q3mdei.apps.googleusercontent.com', 'PP-ZuCXvvdIPrpUy2WEDeIck', 'http://localhost/charity/main-charity/auth/google/callback');

-- --------------------------------------------------------

--
-- Table structure for table `sports_categories`
--

CREATE TABLE `sports_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sports_categories`
--

INSERT INTO `sports_categories` (`id`, `name`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Foods', 'foods', 1, NULL, '2020-02-23 04:37:31'),
(3, 'Fashion', 'fashion', 1, NULL, '2020-03-27 22:55:52');

-- --------------------------------------------------------

--
-- Table structure for table `sports_videos`
--

CREATE TABLE `sports_videos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `access` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sports_category_id` int(11) NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `release_date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `duration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `video_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `video` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `tag` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sports_videos`
--

INSERT INTO `sports_videos` (`id`, `access`, `sports_category_id`, `title`, `description`, `release_date`, `duration`, `video_type`, `video`, `status`, `tag`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'free', 3, 'Latest project. 2', 'afsdfgasdg gfasfa gadfasfv adfads', '2020-02-24 04:45:04', '1 hour 30 min', 'url', 'https://www.youtube.com/embed/A6aHpgBRcg0', 1, 'fads,aefasd,dfgad', 'latest-project-2', '2020-02-23 22:45:04', '2020-03-27 20:23:00'),
(2, 'free', 3, 'How to design effective arts?', 'trgwyer agr swsergtartjnsw sh', '2020-02-24 05:07:44', '1 hour 35min', 'file', 'dolbycanyon_mkv_(1)_-_Copy.mkv', 1, 'fdg,dfasgf,uyhriy', 'how-to-design-effective-arts', '2020-02-23 23:07:44', '2020-03-27 20:22:43');

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `id` int(191) NOT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subscribers`
--

INSERT INTO `subscribers` (`id`, `email`) VALUES
(29, 'user@gmail.com'),
(30, 'admin@gmail.com'),
(31, 'user1@gmail.com'),
(32, 'writer@gmail.com'),
(33, 'admin@admin.com');

-- --------------------------------------------------------

--
-- Table structure for table `subscription_plans`
--

CREATE TABLE `subscription_plans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `plan_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `duration` int(11) NOT NULL,
  `price` double NOT NULL,
  `icon` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `plan_features` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subscription_plans`
--

INSERT INTO `subscription_plans` (`id`, `plan_name`, `duration`, `price`, `icon`, `description`, `plan_features`, `status`, `created_at`, `updated_at`) VALUES
(25, 'asda', 78, 89, NULL, 'asdasd asd asdsad asd a', '[\"2\"]', 1, '2021-12-11 12:22:32', '2021-12-11 12:29:21'),
(26, 'asd', 78, 89, NULL, 'asdasd asd asdsad asd a', '[\"1\",\"2\"]', 1, '2021-12-11 12:32:54', '2021-12-11 12:32:54');

-- --------------------------------------------------------

--
-- Table structure for table `tv_sessions`
--

CREATE TABLE `tv_sessions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `show_id` int(11) NOT NULL,
  `session_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tv_sessions`
--

INSERT INTO `tv_sessions` (`id`, `show_id`, `session_title`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(2, 14, 'Season 1', 'season-1', 1, '2020-02-18 04:27:06', '2020-03-13 21:09:49'),
(3, 14, 'Season 2', 'season-2', 1, '2020-02-18 04:27:34', '2020-03-13 21:08:43'),
(4, 18, 'Season 1', 'season-1', 1, '2020-03-13 21:56:59', '2020-03-13 21:56:59'),
(5, 18, 'Season 2', 'season-2', 1, '2020-03-13 21:57:44', '2020-03-13 21:57:44'),
(6, 19, 'Season 1', 'season-1', 1, '2020-03-13 21:58:01', '2020-03-13 21:58:01'),
(7, 19, 'Season 2', 'season-2', 1, '2020-03-13 21:58:10', '2020-03-16 04:13:15');

-- --------------------------------------------------------

--
-- Table structure for table `tv_shows`
--

CREATE TABLE `tv_shows` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `language_id` int(11) DEFAULT NULL,
  `genre_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `show_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `access` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'free',
  `relase_date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tv_shows`
--

INSERT INTO `tv_shows` (`id`, `language_id`, `genre_id`, `show_name`, `slug`, `description`, `status`, `access`, `relase_date`, `created_at`, `updated_at`) VALUES
(24, NULL, '[\"38\"]', 'asdsad', 'asdsad', 'aad asd asdasd adasda', 1, 'free', '12/14/2021', '2021-12-11 12:56:07', '2021-12-11 12:56:07'),
(25, NULL, '[\"38\"]', 'test3', 'test3', 'ad asdasdas dasd asd', 1, 'free', '12/13/2021', '2021-12-11 12:58:31', '2021-12-11 13:02:34');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birthday` date DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gander` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_provider` tinyint(10) NOT NULL DEFAULT 0,
  `status` tinyint(10) NOT NULL DEFAULT 0,
  `verification_link` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified` enum('Yes','No') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'No'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `photo`, `email`, `birthday`, `address`, `phone`, `gander`, `password`, `remember_token`, `created_at`, `updated_at`, `is_provider`, `status`, `verification_link`, `email_verified`) VALUES
(9, 'user', '15845261351578465053request-call.png', 'user@gmail.com', '2011-03-10', 'New York', '01111111114', 'Male', '$2y$10$PRPJpf/I5rwjCmw9kq92EOObnyxSmGOqfSodw38hNpmlSb1vpEC0y', NULL, '2020-02-26 22:38:41', '2020-03-18 04:08:55', 0, 0, '6899de8946dff229b5ac8390284e4119', 'Yes'),
(12, 'user', NULL, 'user5@gmail.com', '1999-04-11', NULL, '01111111114', 'Male', '$2y$10$PRPJpf/I5rwjCmw9kq92EOObnyxSmGOqfSodw38hNpmlSb1vpEC0y', NULL, '2020-02-26 22:38:41', '2020-03-10 04:17:00', 0, 0, '6899de8946dff229b5ac8390284e4119', 'Yes'),
(13, 'user', NULL, 'user34@gmail.com', '1998-03-10', NULL, '01111111114', 'Female', '$2y$10$PRPJpf/I5rwjCmw9kq92EOObnyxSmGOqfSodw38hNpmlSb1vpEC0y', NULL, '2020-02-26 22:38:41', '2020-03-10 04:17:00', 0, 0, '6899de8946dff229b5ac8390284e4119', 'Yes'),
(14, 'user', NULL, 'user143@gmail.com', '1997-03-10', NULL, '01111111114', 'Male', '$2y$10$PRPJpf/I5rwjCmw9kq92EOObnyxSmGOqfSodw38hNpmlSb1vpEC0y', NULL, '2020-02-26 22:38:41', '2020-03-10 04:17:00', 0, 0, '6899de8946dff229b5ac8390284e4119', 'Yes'),
(15, 'user', NULL, 'user332@gmail.com', '2009-03-10', NULL, '01111111114', 'Female', '$2y$10$PRPJpf/I5rwjCmw9kq92EOObnyxSmGOqfSodw38hNpmlSb1vpEC0y', NULL, '2020-02-26 22:38:41', '2020-03-10 04:17:00', 0, 0, '6899de8946dff229b5ac8390284e4119', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `video` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `name`, `video`, `created_at`, `updated_at`) VALUES
(1, 'aa', 'aad', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cast_crews`
--
ALTER TABLE `cast_crews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_name_unique` (`name`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `currencies`
--
ALTER TABLE `currencies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `episodes`
--
ALTER TABLE `episodes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `favarites`
--
ALTER TABLE `favarites`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `generalsettings`
--
ALTER TABLE `generalsettings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `genres`
--
ALTER TABLE `genres`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pagesettings`
--
ALTER TABLE `pagesettings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `plan_features`
--
ALTER TABLE `plan_features`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `plan_features_features_unique` (`features`);

--
-- Indexes for table `replies`
--
ALTER TABLE `replies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `show_images`
--
ALTER TABLE `show_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `socialsettings`
--
ALTER TABLE `socialsettings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sports_categories`
--
ALTER TABLE `sports_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sports_videos`
--
ALTER TABLE `sports_videos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscription_plans`
--
ALTER TABLE `subscription_plans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tv_sessions`
--
ALTER TABLE `tv_sessions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tv_shows`
--
ALTER TABLE `tv_shows`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `cast_crews`
--
ALTER TABLE `cast_crews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(191) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `currencies`
--
ALTER TABLE `currencies`
  MODIFY `id` int(191) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `episodes`
--
ALTER TABLE `episodes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `favarites`
--
ALTER TABLE `favarites`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `generalsettings`
--
ALTER TABLE `generalsettings`
  MODIFY `id` int(191) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `genres`
--
ALTER TABLE `genres`
  MODIFY `id` int(191) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `languages`
--
ALTER TABLE `languages`
  MODIFY `id` int(191) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(191) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pagesettings`
--
ALTER TABLE `pagesettings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `plan_features`
--
ALTER TABLE `plan_features`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `replies`
--
ALTER TABLE `replies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(191) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `show_images`
--
ALTER TABLE `show_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT for table `socialsettings`
--
ALTER TABLE `socialsettings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sports_categories`
--
ALTER TABLE `sports_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sports_videos`
--
ALTER TABLE `sports_videos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` int(191) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `subscription_plans`
--
ALTER TABLE `subscription_plans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `tv_sessions`
--
ALTER TABLE `tv_sessions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tv_shows`
--
ALTER TABLE `tv_shows`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
