-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 11, 2023 at 08:34 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pianocrm`
--

-- --------------------------------------------------------

--
-- Table structure for table `addresses`
--

CREATE TABLE `addresses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ad_num` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ad_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ad_email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ad_address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `appointment_mails`
--

CREATE TABLE `appointment_mails` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `shop_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lead_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `f_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zip` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `day` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `end` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `virtual_platform` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `level_of_piano` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `specific_brand` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `details` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `article_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `article_shop_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `article_user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `article_page_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `article_page_sub_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `article` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `article_images`
--

CREATE TABLE `article_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `article_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `article_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `article_videos`
--

CREATE TABLE `article_videos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `article_video_link` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `article_article_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `az_inventory_price_list_10_2022`
--

CREATE TABLE `az_inventory_price_list_10_2022` (
  `COL 1` varchar(30) DEFAULT NULL,
  `COL 2` varchar(58) DEFAULT NULL,
  `COL 3` varchar(19) DEFAULT NULL,
  `COL 4` varchar(59) DEFAULT NULL,
  `COL 5` varchar(23) DEFAULT NULL,
  `COL 6` varchar(16) DEFAULT NULL,
  `COL 7` varchar(7) DEFAULT NULL,
  `COL 8` varchar(9) DEFAULT NULL,
  `COL 9` varchar(17) DEFAULT NULL,
  `COL 10` varchar(9) DEFAULT NULL,
  `COL 11` varchar(7) DEFAULT NULL,
  `COL 12` varchar(8) DEFAULT NULL,
  `COL 13` varchar(15) DEFAULT NULL,
  `COL 14` varchar(8) DEFAULT NULL,
  `COL 15` varchar(8) DEFAULT NULL,
  `COL 16` varchar(73) DEFAULT NULL,
  `COL 17` varchar(81) DEFAULT NULL,
  `COL 18` varchar(121) DEFAULT NULL,
  `COL 19` varchar(10) DEFAULT NULL,
  `COL 20` varchar(10) DEFAULT NULL,
  `COL 21` varchar(10) DEFAULT NULL,
  `COL 22` varchar(10) DEFAULT NULL,
  `COL 23` varchar(10) DEFAULT NULL,
  `COL 24` varchar(10) DEFAULT NULL,
  `COL 25` varchar(10) DEFAULT NULL,
  `COL 26` varchar(10) DEFAULT NULL,
  `COL 27` varchar(10) DEFAULT NULL,
  `COL 28` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `shop_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `book_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `assign_id` int(11) DEFAULT NULL,
  `piano_id` int(11) DEFAULT NULL,
  `f_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address_2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zip` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remain_bal` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `steps` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `timeframe` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `shop_name`, `book_number`, `user_id`, `assign_id`, `piano_id`, `f_name`, `l_name`, `email`, `contact`, `address`, `address_2`, `city`, `state`, `zip`, `remain_bal`, `steps`, `timeframe`, `created_at`, `updated_at`) VALUES
(3, 'Scottsdale, AZ', 'Book6362e500c1995', '2', NULL, 34, 'Casio', 'GP-310', 'demo@demo.com', '01305686771', 'bl BL', 'dfsfsdfsdfsdf', 'hghgh', '5345345', '4545', 'Bank Transfer', 'Yes', 'A Week', '2022-11-03 04:45:36', '2022-11-03 04:45:36'),
(4, 'Wixom, MI', 'Book6379545fc3ae1', '1', NULL, 159, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Credit Card', NULL, 'A Week', '2022-11-19 22:10:39', '2022-11-19 22:10:39');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `brand` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `campaigns`
--

CREATE TABLE `campaigns` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shop_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `camp_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `camp_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `camp_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `camp_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `from` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `to` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `campaigns`
--

INSERT INTO `campaigns` (`id`, `user_id`, `shop_id`, `camp_number`, `camp_name`, `camp_title`, `camp_image`, `message`, `from`, `to`, `created_at`, `updated_at`) VALUES
(4, '1', '5', 'campaign637b1bdf05a77', '234567789', '23456789', '1669012447.jpg', 'mn.n;jb;kbjbjj;b;b', '2022-11-21', '2022-12-14', '2022-11-21 06:34:07', '2022-11-21 06:34:07'),
(6, '1', '3', 'campaign639f6581337d8', 'New Sales', 'New Sales', '1671390593.jpg', 'Get Best Price for you Best Piano', NULL, NULL, '2022-12-18 19:09:53', '2022-12-18 19:09:53');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cat_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `contact_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `f_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `l_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zip` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `agent` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `contact_number`, `f_name`, `user_id`, `l_name`, `name`, `email`, `phone`, `city`, `state`, `country`, `zip`, `agent`, `created_at`, `updated_at`) VALUES
(1, 'C:6328bdd1a18c0', 'srg', 3, 'sdrfgt', 'sdfg', 'sdgsdf@DSSDF.SDF', '544', 'fgdfg', 'dfgdf', 'dfgdf', '3423', 'gfdgfd', '2022-09-19 13:06:57', '2022-09-19 13:06:57');

-- --------------------------------------------------------

--
-- Table structure for table `covers`
--

CREATE TABLE `covers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cover_pic` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cover_user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cover_shop_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `f_a_q_s`
--

CREATE TABLE `f_a_q_s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `home_mails`
--

CREATE TABLE `home_mails` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `shop_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `f_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lead_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zip` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `piano_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `level_of_piano` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `specific_brand` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price_range` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `feature` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_piano_system` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `picture_of_piano` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `system_work` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_seen_by_tunner` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price_you_want` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `details` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pic_1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pic_2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pic_3` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pic_4` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `model_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `serial_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `manufacturer` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `move_from` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `move_to` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stairs` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `how_many` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `day_time_drop_off` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `day_time_drop_off_2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location_in_out` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `designer` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l_s_b_t` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ask_price` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `poc` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ml` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mlh` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bs` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `storage_term` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `piano_size` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `event_piano` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `organization_contact` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `page_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_mails`
--

INSERT INTO `home_mails` (`id`, `shop_number`, `f_name`, `lead_name`, `l_name`, `phone`, `email`, `zip`, `address`, `piano_type`, `level_of_piano`, `specific_brand`, `price_range`, `feature`, `current_piano_system`, `picture_of_piano`, `system_work`, `last_seen_by_tunner`, `price_you_want`, `details`, `pic_1`, `pic_2`, `pic_3`, `pic_4`, `model_number`, `serial_number`, `manufacturer`, `move_from`, `move_to`, `stairs`, `location`, `how_many`, `day_time_drop_off`, `day_time_drop_off_2`, `location_in_out`, `designer`, `l_s_b_t`, `ask_price`, `poc`, `ml`, `mlh`, `bs`, `storage_term`, `piano_size`, `event_piano`, `organization_contact`, `page_name`, `created_at`, `updated_at`) VALUES
(1, NULL, 'fdg', NULL, 'jhgjh', NULL, 'hjkl@drfsd.gjhg', '547575', 'fjhfgjhfg', 'Upright Piano', NULL, NULL, '54545', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-11 05:05:06', '2022-11-11 05:05:06'),
(2, NULL, 'Lenard', NULL, 'Mattos', NULL, 'lenard.mattos@yahoo.com', '9071', 'Huttenstrasse 49', 'Player Piano', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Hello!', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-14 20:12:26', '2022-11-14 20:12:26'),
(3, NULL, 'Jottself', NULL, 'Jottself', '89031192223', 'c.ramirez56@yahoo.com', '155213', 'Telegram - @Cryptaxbot', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Need money? Get it here easily! Just press this to launch the robot. Telegram - @Cryptaxbot', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-14 20:29:18', '2022-11-14 20:29:18'),
(4, NULL, 'Jottself', NULL, 'Jottself', '89030288812', 'pegronabi@yahoo.com', '113124', 'Telegram - @Cryptaxbot', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'The online income is the easiest ways to make you dream come true. Telegram - @Cryptaxbot', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-15 03:13:41', '2022-11-15 03:13:41'),
(5, NULL, 'JamesGob', NULL, 'JamesGob', '84133634287', 'sport-bmw@freenet.de', '123552', NULL, NULL, NULL, NULL, '53715', NULL, NULL, NULL, NULL, NULL, NULL, 'How ordinary students make from $3000 (3000 EUR) per day https://telegra.ph/Verify-that-you-are-human-11-11-2?id-61294595', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-15 07:44:01', '2022-11-15 07:44:01'),
(6, NULL, 'Jottself', NULL, 'Jottself', '89031259424', 'nag.sarah@gmail.com', '132251', 'Telegram - @Cryptaxbot', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Even a child knows how to make money. This robot is what you need! Telegram - @Cryptaxbot', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-15 10:01:09', '2022-11-15 10:01:09'),
(7, NULL, 'Jottself', NULL, 'Jottself', '89038743078', 'pacsound10452@aol.com', '135144', 'Telegram - @Cryptaxbot', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Rich people are rich because they use this robot. Telegram - @Cryptaxbot', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-15 16:47:19', '2022-11-15 16:47:19'),
(8, NULL, 'Jottself', NULL, 'Jottself', '89033345434', 'sandra.savary@laposte.net', '134455', 'Telegram - @Cryptaxbot', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Check out the newest way to make a fantastic profit. Telegram - @Cryptaxbot', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-15 23:39:15', '2022-11-15 23:39:15'),
(9, NULL, 'Jottself', NULL, 'Jottself', '89039420346', 'madrezim@gmail.com', '115535', 'Telegram - @Cryptaxbot', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Earn additional money without efforts and skills. Telegram - @Cryptaxbot', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-16 06:26:29', '2022-11-16 06:26:29'),
(10, NULL, 'Jottself', NULL, 'Jottself', '89039280613', 'nazeer.info@gmail.com', '155225', 'Telegram - @Cryptaxbot', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Making money in the net is easier now. Telegram - @Cryptaxbot', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-16 13:13:32', '2022-11-16 13:13:32'),
(11, NULL, 'Jottself', NULL, 'Jottself', '89033893612', 'sanjay.palbhavi@yahoo.com', '142331', 'Telegram - @Cryptaxbot', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Join the society of successful people who make money here. Telegram - @Cryptaxbot', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-16 20:01:19', '2022-11-16 20:01:19'),
(12, NULL, 'Jottself', NULL, 'Jottself', '89031113885', 'lauraloo76@gmail.com', '145331', 'Telegram - @Cryptaxbot', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'The additional income for everyone. Telegram - @Cryptaxbot', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-17 02:48:00', '2022-11-17 02:48:00'),
(13, NULL, 'Jottself', NULL, 'Jottself', '89034488446', 'bvburr@rcn.com', '142124', 'Telegram - @Cryptaxbot', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Start making thousands of dollars every week. Telegram - @Cryptaxbot', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-17 09:32:36', '2022-11-17 09:32:36'),
(14, NULL, 'Jottself', NULL, 'Jottself', '89035376752', 'ikeithtraitoryhm4@ymail.com', '153525', 'Telegram - @Cryptaxbot', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Launch the best investment instrument to start making money today. Telegram - @Cryptaxbot', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-17 16:19:56', '2022-11-17 16:19:56'),
(15, NULL, 'Jottself', NULL, 'Jottself', '89039719326', 'susancowles356@hotmail.com', '125434', 'Telegram - @Cryptaxbot', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'No need to work anymore while you have the Robot launched! Telegram - @Cryptaxbot', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-17 23:25:37', '2022-11-17 23:25:37'),
(16, NULL, 'Jottself', NULL, 'Jottself', '89032070753', 'p.wiesinger@hotmail.com', '154512', 'Telegram - @Cryptaxbot', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Even a child knows how to make money. Do you? Telegram - @Cryptaxbot', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-18 06:11:55', '2022-11-18 06:11:55'),
(17, NULL, 'Jottself', NULL, 'Jottself', '89039558409', 'max.deluca@thermofisher.com', '131543', 'Telegram - @Cryptaxbot', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'This robot can bring you money 24/7. Telegram - @Cryptaxbot', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-18 12:58:12', '2022-11-18 12:58:12'),
(18, NULL, 'Jottself', NULL, 'Jottself', '89032646374', 'heather.palacios@yahoo.com', '112554', 'Telegram - @Cryptaxbot', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Automatic robot is the best start for financial independence. Telegram - @Cryptaxbot', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-18 20:06:07', '2022-11-18 20:06:07'),
(19, NULL, 'Jottself', NULL, 'Jottself', '89036003690', 'janderson760@gmail.com', '131345', 'Telegram - @Cryptaxbot', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'The best online job for retirees. Make your old ages rich. Telegram - @Cryptaxbot', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-19 02:55:03', '2022-11-19 02:55:03'),
(20, NULL, 'Jottself', NULL, 'Jottself', '89031063039', 'jl_17_21@hotmail.com', '132313', 'Telegram - @Cryptaxbot', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Wow! This is a fastest way for a financial independence. Telegram - @Cryptaxbot', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-19 10:00:07', '2022-11-19 10:00:07'),
(21, NULL, 'Jottself', NULL, 'Jottself', '89030414697', 'SAZONDRNU@AOL.COM', '142352', 'Telegram - @Cryptaxbot', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'The huge income without investments is available. Telegram - @Cryptaxbot', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-19 16:48:56', '2022-11-19 16:48:56'),
(22, NULL, 'Jottself', NULL, 'Jottself', '89036491691', 'david.casanas@gmail.com', '125313', 'Telegram - @Cryptaxbot', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Trust the financial Bot to become rich. Telegram - @Cryptaxbot', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-19 23:35:56', '2022-11-19 23:35:56'),
(23, NULL, 'Jottself', NULL, 'Jottself', '89038462797', 'gregghoutex@yahoo.com', '112145', 'Telegram - @Cryptaxbot', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Have no financial skills? Let Robot make money for you. Telegram - @Cryptaxbot', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-20 06:24:51', '2022-11-20 06:24:51'),
(24, NULL, 'Jottself', NULL, 'Jottself', '89038204786', 'blank_phyllis@yahoo.com', '123533', 'Telegram - @Cryptaxbot', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Just one click can turn you dollar into $1000. Telegram - @Cryptaxbot', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-20 13:11:40', '2022-11-20 13:11:40'),
(25, NULL, 'Jottself', NULL, 'Jottself', '89036434280', 'andypad40@yahoo.com', '114555', 'Telegram - @Cryptaxbot', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Make money in the internet using this Bot. It really works! Telegram - @Cryptaxbot', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-20 20:40:36', '2022-11-20 20:40:36'),
(26, NULL, 'Jottself', NULL, 'Jottself', '89032101843', 'kschnider@gmail.com', '132332', 'Telegram - @Cryptaxbot', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Feel free to buy everything you want with the additional income. Telegram - @Cryptaxbot', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-21 03:28:58', '2022-11-21 03:28:58'),
(27, NULL, 'Jottself', NULL, 'Jottself', '89035823447', 'natalie.mejia@ocps.net', '151154', 'Telegram - @Cryptaxbot', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Attention! Here you can earn money online! Telegram - @Cryptaxbot', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-21 10:18:11', '2022-11-21 10:18:11'),
(28, NULL, 'Jottself', NULL, 'Jottself', '89036395658', 'benton.stanley234+573907178@gmail.com', '133134', 'Telegram - @Cryptaxbot', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Even a child knows how to make $100 today. Telegram - @Cryptaxbot', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-21 17:07:15', '2022-11-21 17:07:15'),
(29, NULL, 'Shams', NULL, 'Tabriz', '554545', 'az@pianonation.com', '4334', 'dfydsftytryrtytry', 'Baby Grand Piano', NULL, NULL, '0989', NULL, NULL, NULL, NULL, NULL, NULL, 'srty', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-21 17:37:35', '2022-11-21 17:37:35'),
(30, NULL, 'Shams', NULL, 'Tabriz', '554545', 'az@pianonation.com', 'stysrty', 'ddfdfdf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-21 17:39:11', '2022-11-21 17:39:11'),
(31, NULL, 'Shams', NULL, 'Tabriz', '554545', 'ben@pianonation.com', NULL, NULL, 'Baby Grand Piano', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-21 17:40:20', '2022-11-21 17:40:20');

-- --------------------------------------------------------

--
-- Table structure for table `leads`
--

CREATE TABLE `leads` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `lead_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `f_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shop_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `source` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tag` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rating` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `leads`
--

INSERT INTO `leads` (`id`, `lead_number`, `f_name`, `l_name`, `name`, `email`, `phone`, `user_id`, `shop_id`, `company`, `location`, `source`, `tag`, `note`, `rating`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Lead63365ac0a1fda', 'khan', 'asad', 'mollah', 'ben@pianonation.com', NULL, '3', NULL, 'Blackrock', '1', NULL, NULL, NULL, 'Select One.', '1664506560.jpg', '2022-09-29 20:56:00', '2022-09-29 20:56:00');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `brand_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_07_11_080655_create_roles_table', 1),
(5, '2020_07_11_081109_create_role_user_table', 1),
(6, '2020_07_14_062352_create_zillas_table', 1),
(7, '2020_07_14_062908_create_thanas_table', 1),
(8, '2020_07_14_085637_create_request_bloods_table', 1),
(9, '2020_07_14_095412_create_notifications_table', 1),
(10, '2022_07_02_180716_create_products_table', 1),
(11, '2022_07_02_215014_create_shops_table', 1),
(12, '2022_07_02_215356_create_slide__shops_table', 1),
(13, '2022_07_02_220216_create_picc_shops_table', 1),
(14, '2022_07_02_220418_create_video_shops_table', 1),
(15, '2022_07_03_194442_create_categories_table', 1),
(16, '2022_07_31_185433_create_pre_products_table', 1),
(17, '2022_07_31_192738_create_sub_cats_table', 1),
(18, '2022_08_02_100410_create_sub_cates_table', 1),
(19, '2022_08_02_132823_create_tasks_table', 1),
(20, '2022_08_02_140045_create_contacts_table', 1),
(21, '2022_08_02_154301_create_brands_table', 1),
(22, '2022_08_02_154312_create_menus_table', 1),
(23, '2022_08_15_174909_create_services_table', 1),
(24, '2022_08_15_184604_create_addresses_table', 1),
(25, '2022_08_15_191051_create_socials_table', 1),
(26, '2022_08_15_195854_create_f_a_q_s_table', 1),
(27, '2022_08_20_213907_create_covers_table', 1),
(28, '2022_08_20_220355_create_articles_table', 1),
(29, '2022_08_20_225437_create_article_videos_table', 1),
(30, '2022_08_20_225629_create_article_images_table', 1),
(31, '2022_09_29_050856_create_leads_table', 2),
(32, '2022_10_01_012211_create_campaigns_table', 3),
(33, '2022_10_01_025003_create_s_e_o_s_table', 4),
(34, '2022_11_17_110127_create_site_pros_table', 5),
(35, '2022_11_19_174234_create_pro_images_table', 6),
(36, '2022_11_22_092633_create_appointment_mails_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_id` bigint(20) UNSIGNED NOT NULL,
  `data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `assign_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `order_id`, `assign_id`, `order_status`, `created_at`, `updated_at`) VALUES
(2, 'Book6362e500c1995', 'arizona', NULL, '2022-11-03 05:06:54', '2022-11-03 05:06:54');

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
-- Table structure for table `picc_shops`
--

CREATE TABLE `picc_shops` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `shop_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pic_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `picture` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pre_products`
--

CREATE TABLE `pre_products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `product_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_category` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shop_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photos_2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_desc` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_desc` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `discount` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `model` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `unit` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weight` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `length` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `width` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `height` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `user_id`, `product_id`, `product_number`, `name`, `category`, `sub_category`, `shop_name`, `photo`, `photos_2`, `short_desc`, `description`, `meta_title`, `meta_desc`, `price`, `discount`, `model`, `unit`, `status`, `weight`, `type`, `length`, `width`, `height`, `created_at`, `updated_at`) VALUES
(33, 2, 'P633f12c9f1016', '#81891326', 'A. Geyer GG-160', NULL, NULL, 'Scottsdale, AZ', '1665077961.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'New', '50kg', 'Grand Piano', NULL, '5\'3\"', NULL, '2022-10-07 00:39:22', '2022-11-21 06:32:35'),
(34, 2, 'P633f13060b1f3', '#81891310', 'A. Geyer GG-160 WHP', NULL, NULL, 'Scottsdale, AZ', '1665078021.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'New', NULL, 'Grand Piano', NULL, NULL, NULL, '2022-10-07 00:40:22', '2022-10-07 00:40:22'),
(35, 2, 'P633f137883dda', '#81891305', 'A. Geyer GG-170 EP', NULL, NULL, 'Scottsdale, AZ', '1665078136.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'New', NULL, 'Grand Piano', NULL, NULL, NULL, '2022-10-07 00:42:16', '2022-10-07 00:42:16'),
(36, 2, 'P633f13ba617ea', '#81891321', 'A. Geyer GG-170 EP', NULL, NULL, 'Scottsdale, AZ', '1665078202.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'New', NULL, 'Grand Piano', NULL, NULL, NULL, '2022-10-07 00:43:22', '2022-10-07 00:43:22'),
(37, 2, 'P633f13f207269', '#81891283', 'A. Geyer GG-186 EP', NULL, NULL, 'Scottsdale, AZ', '1665078258.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'New', NULL, 'Grand Piano', NULL, NULL, NULL, '2022-10-07 00:44:18', '2022-10-07 00:44:18'),
(38, 2, 'P633f14329d338', 'EP #520202', 'Baldwin BA161', NULL, NULL, 'Scottsdale, AZ', '1665078322.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'New', NULL, 'Grand Piano', NULL, NULL, NULL, '2022-10-07 00:45:22', '2022-10-07 00:45:22'),
(39, 2, 'P633f1469958ec', '#8251', 'Bosendorfer 190', NULL, NULL, 'Scottsdale, AZ', '1665078377.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'New', NULL, 'Grand Piano', NULL, NULL, NULL, '2022-10-07 00:46:17', '2022-10-07 00:46:17'),
(40, 2, 'P633f15377a032', 'EP #1210003186', 'Brodmann PE-121', NULL, NULL, 'Scottsdale, AZ', '1665078583.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'New', NULL, 'Grand Piano', NULL, NULL, NULL, '2022-10-07 00:49:43', '2022-10-07 00:49:43'),
(41, 2, 'P633f156da899a', '#1260001063', 'Brodmann PE-126I EP', NULL, NULL, 'Scottsdale, AZ', '1665078637.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'New', NULL, 'Grand Piano', NULL, NULL, NULL, '2022-10-07 00:50:37', '2022-10-07 00:50:37'),
(42, 2, 'P633f159e82c48', '#1620001904', 'Brodmann PE-162 EP', NULL, NULL, 'Scottsdale, AZ', '1665078686.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'New', NULL, 'Grand Piano', NULL, NULL, NULL, '2022-10-07 00:51:26', '2022-10-07 00:51:26'),
(43, 2, 'P633f15e44deff', '#1870002539', 'Brodmann PE-187 EP', NULL, NULL, 'Scottsdale, AZ', '1665078756.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'New', NULL, 'Grand Piano', NULL, NULL, NULL, '2022-10-07 00:52:36', '2022-10-07 00:52:36'),
(44, 2, 'P633f161934320', '#2120001167', 'Brodmann PE-212 EP', NULL, NULL, 'Scottsdale, AZ', '1665078808.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'New', NULL, 'Grand Piano', NULL, NULL, NULL, '2022-10-07 00:53:29', '2022-10-07 00:53:29'),
(45, 2, 'P633f1680bf1ef', '#935DDC314000600ABF', 'Casio GP-310 WE', NULL, NULL, 'Scottsdale, AZ', '1665078912.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'New', NULL, 'Grand Piano', NULL, NULL, NULL, '2022-10-07 00:55:12', '2022-10-07 00:55:12'),
(46, 2, 'P633f16ec4bbf1', '#240001905005', 'Dynatone VGP-4000Q BK', NULL, NULL, 'Scottsdale, AZ', '1665079020.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'New', NULL, 'Grand Piano', NULL, NULL, NULL, '2022-10-07 00:57:00', '2022-10-07 00:57:00'),
(47, 2, 'P633f1728a2279', '#E142731C', 'Essex EGP-155 EP', NULL, NULL, 'Scottsdale, AZ', '1665079080.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'New', NULL, 'Grand Piano', NULL, NULL, NULL, '2022-10-07 00:58:00', '2022-10-07 00:58:00'),
(48, 2, 'P633f174dadcf5', '#E169112C', 'Essex EGP-155 WHP', NULL, NULL, 'Scottsdale, AZ', '1665079117.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'New', NULL, 'Grand Piano', NULL, NULL, NULL, '2022-10-07 00:58:37', '2022-10-07 00:58:37'),
(49, 2, 'P633f178fcb0b4', '#1214692', 'Ezekiel PlexIQ EP-ACRYL', NULL, NULL, 'Scottsdale, AZ', '1665079183.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'New', NULL, 'Grand Piano', NULL, NULL, NULL, '2022-10-07 00:59:43', '2022-10-07 00:59:43'),
(50, 2, 'P633f18c6ee93a', '#819846', 'Gebr. Schulz G-20 EP', NULL, NULL, 'Scottsdale, AZ', '1665079494.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'New', NULL, 'Grand Piano', NULL, NULL, NULL, '2022-10-07 01:04:55', '2022-10-07 01:04:55'),
(51, 2, 'P633f193a4dc61', '#4925', 'Grotrian Steinweg Grand EP', NULL, NULL, 'Scottsdale, AZ', '1665079610.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'New', NULL, 'Grand Piano', NULL, NULL, NULL, '2022-10-07 01:06:50', '2022-10-07 01:06:50'),
(52, 2, 'P633f196cbf369', '#K1180005002', 'K. Clara K-118 EP', NULL, NULL, 'Scottsdale, AZ', '1665079660.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'New', NULL, 'Grand Piano', NULL, NULL, NULL, '2022-10-07 01:07:40', '2022-10-07 01:07:40'),
(53, 2, 'P633f199a9786c', '#K1250005993', 'K. Clara K-125 EP', NULL, NULL, 'Scottsdale, AZ', '1665079706.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'New', NULL, 'Baby Grand Piano', NULL, NULL, NULL, '2022-10-07 01:08:26', '2022-11-19 21:05:41'),
(54, 2, 'P633f19c72a7d2', '#K1520005002', 'K. Clara K-152 EP', NULL, NULL, 'Scottsdale, AZ', '1665079751.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'New', NULL, 'Baby Grand Piano', NULL, NULL, NULL, '2022-10-07 01:09:11', '2022-11-19 21:05:51'),
(55, 2, 'P633f1a13ecbfa', '#666529', 'Kohler _ Campbell Spinet CP', NULL, NULL, 'Scottsdale, AZ', '1665079827.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'New', NULL, 'Grand Piano', NULL, NULL, NULL, '2022-10-07 01:10:28', '2022-10-07 01:10:28'),
(56, 2, 'P633f1a47c6eff', '#91410', 'Mason _ Hamlin Model A BUB', NULL, NULL, 'Scottsdale, AZ', '1665079879.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'New', NULL, 'Grand Piano', NULL, NULL, NULL, '2022-10-07 01:11:19', '2022-10-07 01:11:19'),
(57, 2, 'P633f1b0a8c7f2', '#570607', 'Petrof P109 MS', NULL, NULL, 'Scottsdale, AZ', '1665080074.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'New', NULL, 'Grand Piano', NULL, NULL, NULL, '2022-10-07 01:14:34', '2022-10-07 01:14:34'),
(58, 2, 'P633f1b57e1967', '#27362', 'Ritmüller 160 EP', NULL, NULL, 'Scottsdale, AZ', '1665080151.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'New', NULL, 'Grand Piano', NULL, NULL, NULL, '2022-10-07 01:15:51', '2022-10-07 01:15:51'),
(59, 2, 'P633f1ba3aadcf', '#1981585', 'Ritmüller GH118R EP', NULL, NULL, 'Scottsdale, AZ', '1665080227.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'New', NULL, 'Grand Piano', NULL, NULL, NULL, '2022-10-07 01:17:07', '2022-10-07 01:17:07'),
(60, 2, 'P633f1bef2bda5', '#IKSIG0136', 'Seiler GS-208 EBHP', NULL, NULL, 'Scottsdale, AZ', '1665080303.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'New', NULL, 'Grand Piano', NULL, NULL, NULL, '2022-10-07 01:18:23', '2022-10-07 01:18:23'),
(61, 2, 'P633f1c2163dbc', '#179399', 'Seiler SE-132KO EP', NULL, NULL, 'Scottsdale, AZ', '1665080353.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'New', NULL, 'Grand Piano', NULL, NULL, NULL, '2022-10-07 01:19:13', '2022-10-07 01:19:13'),
(62, 2, 'P633f1c683954b', '#180385', 'Seiler SE-208PRB EBHP', NULL, NULL, 'Scottsdale, AZ', '1665080424.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'New', NULL, 'Grand Piano', NULL, NULL, NULL, '2022-10-07 01:20:24', '2022-10-07 01:20:24'),
(63, 2, 'P633f1c9da9a4f', '#411483', 'Steinway 1098 MS', NULL, NULL, 'Scottsdale, AZ', '1665080477.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'New', NULL, 'Grand Piano', NULL, NULL, NULL, '2022-10-07 01:21:17', '2022-10-07 01:21:17'),
(64, 2, 'P633f1ce4b451f', '#540826', 'Steinway B Tiffany BUB', NULL, NULL, 'Scottsdale, AZ', '1665080548.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'New', NULL, 'Grand Piano', NULL, NULL, NULL, '2022-10-07 01:22:28', '2022-10-07 01:22:28'),
(65, 2, 'P633f1d1f35c50', '#296843', 'Steinway B TUX', NULL, NULL, 'Scottsdale, AZ', '1665080607.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'New', NULL, 'Grand Piano', NULL, NULL, NULL, '2022-10-07 01:23:27', '2022-10-07 01:23:27'),
(66, 2, 'P633f1d569db94', '#366268', 'Steinway B WS', NULL, NULL, 'Scottsdale, AZ', '1665080662.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'New', NULL, 'Grand Piano', NULL, NULL, NULL, '2022-10-07 01:24:22', '2022-10-07 01:24:22'),
(67, 2, 'P633f1db7b8a38', '#531199', 'Steinway B Zero Profile ES', NULL, NULL, 'Scottsdale, AZ', '1665080759.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'New', NULL, 'Grand Piano', NULL, NULL, NULL, '2022-10-07 01:25:59', '2022-10-07 01:25:59'),
(68, 2, 'P633f1df7ba9ce', '#96744', 'Steinway K-52 MS', NULL, NULL, 'Scottsdale, AZ', '1665080823.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'New', NULL, 'Grand Piano', NULL, NULL, NULL, '2022-10-07 01:27:03', '2022-10-07 01:27:03'),
(69, 2, 'P633f1e46b27df', '#107174', 'Steinway K-52 MS', NULL, NULL, 'Scottsdale, AZ', '1665080902.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'New', NULL, 'Grand Piano', NULL, NULL, NULL, '2022-10-07 01:28:22', '2022-10-07 01:28:22'),
(70, 2, 'P633f1e7443858', '#447914', 'Steinway L', NULL, NULL, 'Scottsdale, AZ', '1665080948.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'New', NULL, 'Grand Piano', NULL, NULL, NULL, '2022-10-07 01:29:08', '2022-10-07 01:29:08'),
(71, 2, 'P633f1e9d812c5', '#237491', 'Steinway L ES', NULL, NULL, 'Scottsdale, AZ', '1665080989.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'New', NULL, 'Grand Piano', NULL, NULL, NULL, '2022-10-07 01:29:49', '2022-10-07 01:29:49'),
(72, 2, 'P633f1ece21a46', '#483199', 'Steinway M Chipendale MS', NULL, NULL, 'Scottsdale, AZ', '1665081038.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'New', NULL, 'Grand Piano', NULL, NULL, NULL, '2022-10-07 01:30:38', '2022-10-07 01:30:38'),
(73, 2, 'P633f1eff8b531', '#614751', 'Steinway M EP', NULL, NULL, 'Scottsdale, AZ', '1665081087.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'New', NULL, 'Grand Piano', NULL, NULL, NULL, '2022-10-07 01:31:27', '2022-10-07 01:31:27'),
(74, 2, 'P633f1f2a70461', '#210306', 'Steinway M ES', NULL, NULL, 'Scottsdale, AZ', '1665081130.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'New', NULL, 'Grand Piano', NULL, NULL, NULL, '2022-10-07 01:32:10', '2022-10-07 01:32:10'),
(75, 2, 'P633f1f57e4471', '#247320', 'Steinway M ES', NULL, NULL, 'Scottsdale, AZ', '1665081175.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'New', NULL, 'Grand Piano', NULL, NULL, NULL, '2022-10-07 01:32:55', '2022-10-07 01:32:55'),
(76, 2, 'P633f1f85633c1', '#266996', 'Steinway M Square MS', NULL, NULL, 'Scottsdale, AZ', '1665081221.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'New', NULL, 'Grand Piano', NULL, NULL, NULL, '2022-10-07 01:33:41', '2022-10-07 01:33:41'),
(77, 2, 'P633f1fba244f4', '#20100149', 'Story _ Clark G-118 (UP120) EP', NULL, NULL, 'Scottsdale, AZ', '1665081274.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'New', NULL, 'Grand Piano', NULL, NULL, NULL, '2022-10-07 01:34:34', '2022-10-07 01:34:34'),
(78, 2, 'P633f200d08d25', '#IJRAG0672', 'Story _ Clark S500 Manhattan ES-Maple', NULL, NULL, 'Scottsdale, AZ', '1665081357.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'New', NULL, 'Grand Piano', NULL, NULL, NULL, '2022-10-07 01:35:57', '2022-10-07 01:35:57'),
(79, 2, 'P633f205c85d00', '#IJRAG0665', 'Story _ Clark S700 Versailles CS', NULL, NULL, 'Scottsdale, AZ', '1665081436.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'New', NULL, 'Grand Piano', NULL, NULL, NULL, '2022-10-07 01:37:16', '2022-10-07 01:37:16'),
(80, 2, 'P633f20902a8d5', '#301.958', 'W. Steinberg P-121 EP', NULL, NULL, 'Scottsdale, AZ', '1665081487.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'New', NULL, 'Grand Piano', NULL, NULL, NULL, '2022-10-07 01:38:08', '2022-10-07 01:38:08'),
(81, 2, 'P633f20dccb7e7', '#KJLEG0300', 'WM. Knabe WKG-53 MP', NULL, NULL, 'Scottsdale, AZ', '1665081564.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'New', NULL, 'Grand Piano', NULL, NULL, NULL, '2022-10-07 01:39:24', '2022-10-07 01:39:24'),
(82, 2, 'P633f2115e3eec', '#6136337', 'Yamaha DC2M4 ES', NULL, NULL, 'Scottsdale, AZ', '1665081621.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'New', NULL, 'Grand Piano', NULL, NULL, NULL, '2022-10-07 01:40:21', '2022-10-07 01:40:21'),
(83, 2, 'P633f213c2c8e5', '#5604691', 'Yamaha DC3 WS', NULL, NULL, 'Scottsdale, AZ', '1665081659.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'New', NULL, 'Grand Piano', NULL, NULL, NULL, '2022-10-07 01:41:00', '2022-10-07 01:41:00'),
(84, 2, 'P633f2179043d5', '#5328862', 'Yamaha U1 EP', NULL, NULL, 'Scottsdale, AZ', '1665081721.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'New', NULL, 'Grand Piano', NULL, NULL, NULL, '2022-10-07 01:42:01', '2022-10-07 01:42:01'),
(85, 2, 'P633f219ca9a8b', '#G104816', 'Young Chang G-208PNOmation WHP', NULL, NULL, 'Scottsdale, AZ', '1665081756.jpg', NULL, NULL, NULL, NULL, NULL, '25888', NULL, NULL, '0', 'Pre Owned', NULL, 'Grand Piano', NULL, NULL, NULL, '2022-10-07 01:42:36', '2022-11-18 18:19:33'),
(86, 2, 'P63417600722bd', '#81891125', 'A. Geyer GG-150 MP', NULL, NULL, 'Grand Rapids, MI', '1665234432.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'New', NULL, 'Grand Piano', NULL, NULL, NULL, '2022-10-08 20:07:12', '2022-10-08 20:07:12'),
(87, 2, 'P634176e3a6072', '#168475 ES', 'Baldwin M', NULL, NULL, 'Grand Rapids, MI', '1665234659.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'New', NULL, 'Grand Piano', NULL, NULL, NULL, '2022-10-08 20:10:59', '2022-10-08 20:10:59'),
(88, 2, 'P634178293b79e', '#245702 ES', 'Baldwin R', NULL, NULL, 'Grand Rapids, MI', '1665234985.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'New', NULL, 'Grand Piano', NULL, NULL, NULL, '2022-10-08 20:16:25', '2022-10-08 20:16:25'),
(89, 2, 'P63417eef68946', '#935DDC317000615BCG WE', 'Casio Celviano GP-310', NULL, NULL, 'Grand Rapids, MI', '1665236719.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'New', NULL, 'Grand Piano', NULL, NULL, NULL, '2022-10-08 20:45:19', '2022-10-08 20:45:19'),
(90, 2, 'P63417f57414cb', '#240001905002 BK', 'Dynatone VGP-4000Q', NULL, NULL, 'Grand Rapids, MI', '1665236823.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'New', NULL, 'Grand Piano', NULL, NULL, NULL, '2022-10-08 20:47:03', '2022-10-08 20:47:03'),
(92, 1, 'P6377d4a9a4345', 'B5549704', 'Yamaha GH1', 'GH1', NULL, 'Wixom, MI', '1668797609.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Pre Owned', NULL, 'Grand Piano', '5’3\"', NULL, NULL, '2022-11-18 18:53:29', '2022-11-18 18:53:29'),
(159, 1, 'P637921360fa34', '0001173', 'Brodmann PE-212', 'PE212', NULL, 'Wixom, MI', '1668882742.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'New', NULL, 'Grand Piano', '7’', NULL, NULL, '2022-11-19 18:32:22', '2022-11-19 19:28:49'),
(160, 1, 'P6379220039a4b', '0002546', 'Brodmann PE-187', 'PE 187', NULL, 'Wixom, MI', '1668882944.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'New', NULL, 'Grand Piano', '6’2\"', NULL, NULL, '2022-11-19 18:35:44', '2022-11-19 19:28:06'),
(161, 1, 'P6379226d4964b', '02184', 'Baldwin BP-148', 'BP 148', NULL, 'Wixom, MI', '1668883053.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'New', NULL, 'Baby Grand Piano', '4’8\"', NULL, NULL, '2022-11-19 18:37:33', '2022-11-19 19:26:44'),
(162, 1, 'P637922efd4b8d', '2584136', 'Story and Clark H160', 'SC H160', 'Player Piano', 'Wixom, MI', '1669152838.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'New', NULL, 'Baby Grand Piano', '5’3\"', NULL, NULL, '2022-11-19 18:39:43', '2022-11-22 21:33:58'),
(164, 1, 'P6379241e08940', '1785596', 'Story and Clark H80', 'H80', 'Player Piano', 'Wixom, MI', '1668883486.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'New', NULL, 'Grand Piano', '6\'1\"', NULL, NULL, '2022-11-19 18:44:46', '2022-11-19 19:15:24'),
(174, 1, 'P6379349eb3aa5', '81891299', 'A. Geyer GG-160', 'GG-160', 'Black Polish', 'Wixom, MI', '1669141907.jpg', NULL, NULL, NULL, NULL, NULL, '19999', '12999', NULL, NULL, 'New', NULL, 'Baby Grand Piano', NULL, '5\'3\"', NULL, '2022-11-19 19:55:10', '2022-11-22 18:31:47'),
(175, 1, 'P637934e5d5bc8', '336199', 'Baldwin L', 'L', NULL, 'Wixom, MI', '1669139305.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Pre Owned', NULL, 'Grand Piano', '6\'3\"', NULL, NULL, '2022-11-19 19:56:21', '2022-11-22 17:48:25'),
(176, 1, 'P6379351b981e5', 'TG0007454', 'Bergmann TG-175', 'TG-175', NULL, 'Wixom, MI', '1669139625.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Pre Owned', NULL, 'Baby Grand Piano', '5\'9\"', NULL, NULL, '2022-11-19 19:57:15', '2022-11-22 17:53:45'),
(177, 1, 'P637935451a312', 'B114430', 'Boston GP-178PD', 'GP-178PD', NULL, 'Wixom, MI', '1669139831.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Pre Owned', NULL, 'Baby Grand Piano', '5\'10\"', NULL, NULL, '2022-11-19 19:57:57', '2022-11-22 17:57:11'),
(178, 1, 'P637935700d249', 'B178895', 'Boston GP-215', 'GP-215', NULL, 'Wixom, MI', '1669142034.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'New', NULL, 'Grand Piano', '7\'1\"', NULL, NULL, '2022-11-19 19:58:40', '2022-11-22 18:33:54'),
(181, 1, 'P6379369aae4b8', '1160', 'Collard and Collard Grand', 'Grand', NULL, 'Wixom, MI', '1669142388.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Pre Owned', NULL, 'Baby Grand Piano', NULL, NULL, NULL, '2022-11-19 20:03:38', '2022-11-22 18:39:48'),
(182, 1, 'P637936bd64614', '81891120', 'Gebr. Schulz GSG-160', 'GSG-160', NULL, 'Wixom, MI', '1669142500.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'New', NULL, 'Baby Grand Piano', '5\'3\"', NULL, NULL, '2022-11-19 20:04:13', '2022-11-22 18:41:40'),
(183, 1, 'P637936dcbd522', '4925', 'Grotrian Steinweg Grand', 'Grand', NULL, 'Wixom, MI', '1669142575.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Pre Owned', NULL, 'Grand Piano', NULL, NULL, NULL, '2022-11-19 20:04:44', '2022-11-22 18:42:55'),
(184, 1, 'P637936fa79097', '2585702', 'Hallet Davis GP148', 'GP148', NULL, 'Wixom, MI', '1669142705.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'New', NULL, 'Baby Grand Piano', '4\'10\"', NULL, NULL, '2022-11-19 20:05:14', '2022-11-22 18:45:05'),
(185, 1, 'P6379371b22191', '2284942', 'Hallet Davis GP160', 'GP160', NULL, 'Wixom, MI', '1669147927.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'New', NULL, 'Baby Grand Piano', '5\'3\"', NULL, NULL, '2022-11-19 20:05:47', '2022-11-22 20:12:07'),
(186, 1, 'P6379374693bf6', '1451606P', 'Kawai GP-30PD QRS', 'GP-30PD QRS', NULL, 'Wixom, MI', '1669148107.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Pre Owned', NULL, 'Grand Piano', '6\'1\"', NULL, NULL, '2022-11-19 20:06:30', '2022-11-22 20:15:07'),
(187, 1, 'P637937623c7ac', 'K1520005001', 'K. Clara K-152', 'K-152', NULL, 'Wixom, MI', '1669148183.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'New', NULL, 'Grand Piano', '5\'0\"', NULL, NULL, '2022-11-19 20:06:58', '2022-11-22 20:16:23'),
(188, 1, 'P6379377c1b133', 'K1680005002', 'K. Clara K-168', 'K-168', NULL, 'Wixom, MI', '1669148404.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'New', NULL, 'Grand Piano', '5\'6\"', NULL, NULL, '2022-11-19 20:07:24', '2022-11-22 20:20:04'),
(189, 1, 'P637937a225353', 'D85460', 'Kimball 4520 La Petite', '4520 La Petite', NULL, 'Wixom, MI', '1669148461.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Pre Owned', NULL, 'Baby Grand Piano', '4\'4\"', NULL, NULL, '2022-11-19 20:08:02', '2022-11-22 20:21:01'),
(190, 1, 'P637937c3991fa', 'KJDDG0457', 'Kohler & Campbell SKG-500S', 'SKG-500S', NULL, 'Wixom, MI', '1669149197.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Pre Owned', NULL, 'Baby Grand Piano', '5\'1\"', NULL, NULL, '2022-11-19 20:08:35', '2022-11-22 20:33:17'),
(191, 1, 'P637937de4cf43', '85186', 'Mathushek Spinet Square', 'Spinet Square', NULL, 'Wixom, MI', '1668888542.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Pre Owned', NULL, 'Baby Grand Piano', NULL, NULL, NULL, '2022-11-19 20:09:02', '2022-11-19 21:06:41'),
(192, 1, 'P637937f9379d0', '963506', 'Pearl River GP142', 'GP142', NULL, 'Wixom, MI', '1669149275.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Pre Owned', NULL, 'Baby Grand Piano', '4\'8\"', NULL, NULL, '2022-11-19 20:09:29', '2022-11-22 20:34:35'),
(193, 1, 'P6379381dd2568', 'KJJJG0334', 'Samick SG-172', 'SG-172', NULL, 'Wixom, MI', '1669149333.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Pre Owned', NULL, 'Baby Grand Piano', '5\'8\"', NULL, NULL, '2022-11-19 20:10:05', '2022-11-22 20:35:33'),
(194, 1, 'P63793844e1b50', 'IJMEG0088', 'Samick SIG-54PD', 'SIG-54PD', NULL, 'Wixom, MI', '1669149382.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Pre Owned', NULL, 'Baby Grand Piano', '5\'4\"', NULL, NULL, '2022-11-19 20:10:44', '2022-11-22 20:36:22'),
(195, 1, 'P637938604911a', '373.923', 'Schimmel C-189T', 'C-189T', NULL, 'Wixom, MI', '1669149431.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'New', NULL, 'Grand Piano', '6\'2\"', NULL, NULL, '2022-11-19 20:11:12', '2022-11-22 20:37:11'),
(196, 1, 'P637938848b5c8', '017.552', 'Schimmel W-180T', 'W-180T', NULL, 'Wixom, MI', '1669149473.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'New', NULL, 'Baby Grand Piano', '5\'11\"', NULL, NULL, '2022-11-19 20:11:48', '2022-11-22 20:37:53'),
(197, 1, 'P637938a1ace29', '842877', 'Schumann G-80A', 'G-80A', NULL, 'Wixom, MI', '1669137286.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Pre Owned', NULL, 'Baby Grand Piano', '5\'0\"', NULL, NULL, '2022-11-19 20:12:17', '2022-11-22 17:14:46'),
(198, 1, 'P637938bc7b278', 'ILLHG0022', 'Seiler ED-160', 'ED-160', 'PE', 'Wixom, MI', '1669137614.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'New', NULL, 'Baby Grand Piano', NULL, NULL, NULL, '2022-11-19 20:12:44', '2022-11-22 17:23:01'),
(199, 1, 'P637938dcd9dd5', 'ILKJG0076', 'Seiler ED-168ALE', 'ED-168ALE', 'ALE', 'Wixom, MI', '1669137670.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'New', NULL, 'Grand Piano', '5\'6\"', NULL, NULL, '2022-11-19 20:13:16', '2022-11-22 17:22:12'),
(200, 1, 'P637938feb0d4a', 'IKRJG0166', 'Seiler ED-186', 'ED-186', 'PE', 'Wixom, MI', '1669138020.jpg', NULL, NULL, NULL, NULL, NULL, '60031', NULL, NULL, NULL, 'New', NULL, 'Grand Piano', '6\'1\"', NULL, NULL, '2022-11-19 20:13:50', '2022-11-22 17:27:00'),
(201, 1, 'P6379391befbc6', 'ILLHG0002', 'Seiler ED-186', 'ED-186', NULL, 'Wixom, MI', '1669138101.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'New', NULL, 'Grand Piano', '6\'1\"', NULL, NULL, '2022-11-19 20:14:19', '2022-11-22 17:28:21'),
(202, 1, 'P6379396a70803', 'IKKCG0210', 'Seiler ED-186 PNOScan', 'ED-186 PNOScan', NULL, 'Wixom, MI', '1669138313.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Pre Owned', NULL, 'Grand Piano', '6\'1\"', NULL, NULL, '2022-11-19 20:15:38', '2022-11-22 17:31:53'),
(203, 1, 'P637939b504632', 'ILLEG0009', 'Seiler GS-150NAD', NULL, NULL, 'Wixom, MI', '1668889013.png', NULL, NULL, 'In a box', NULL, NULL, NULL, NULL, NULL, NULL, 'New', NULL, 'Grand Piano', '5\'0\"', NULL, NULL, '2022-11-19 20:16:53', '2022-11-22 17:35:18'),
(204, 1, 'P637939d2b5c22', '159267', 'Seiler Model 206', 'Model 206', NULL, 'Wixom, MI', '1669150740.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Pre Owned', NULL, 'Grand Piano', '6\'9\"', NULL, NULL, '2022-11-19 20:17:22', '2022-11-22 20:59:00'),
(205, 1, 'P637939fc65640', '175523', 'Seiler SE-186MA', 'SE-186MA', NULL, 'Wixom, MI', '1669151342.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'New', NULL, 'Grand Piano', '6\'1\"', NULL, NULL, '2022-11-19 20:18:04', '2022-11-22 21:09:02'),
(206, 1, 'P63793a3907300', '116897', 'Steinway A', 'A', NULL, 'Wixom, MI', '1669151395.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Pre Owned', NULL, 'Grand Piano', '6\'2\"', NULL, NULL, '2022-11-19 20:19:05', '2022-11-22 21:09:55'),
(207, 1, 'P63793aaa77c85', '89443', 'Steinway A Centennial', 'A Centennial', NULL, 'Wixom, MI', '1669151552.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Pre Owned', NULL, 'Grand Piano', '6\'2\"', NULL, NULL, '2022-11-19 20:20:58', '2022-11-22 21:12:32'),
(208, 1, 'P63793acae6dce', '219648', 'Steinway D', 'D', NULL, 'Wixom, MI', '1669151647.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Pre Owned', NULL, 'Grand Piano', '8\'11.8\"', NULL, NULL, '2022-11-19 20:21:30', '2022-11-22 21:14:07'),
(209, 1, 'P63793aea4e679', '201949', 'Steinway L QRS', 'L QRS', NULL, 'Wixom, MI', '1669151745.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Pre Owned', NULL, 'Baby Grand Piano', '5\'10.5\"', NULL, NULL, '2022-11-19 20:22:02', '2022-11-22 21:15:45'),
(210, 1, 'P63793b0e85789', '210403', 'Steinway M', 'M', NULL, 'Wixom, MI', '1669151856.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Pre Owned', NULL, 'Baby Grand Piano', '5\'7\"', NULL, NULL, '2022-11-19 20:22:38', '2022-11-22 21:17:36'),
(211, 1, 'P63793b2ee4669', '288353', 'Steinway M', 'M', NULL, 'Wixom, MI', '1669151921.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Pre Owned', NULL, 'Baby Grand Piano', '5\'7\"', NULL, NULL, '2022-11-19 20:23:10', '2022-11-22 21:18:41'),
(212, 1, 'P63793b4a37d7a', '230875', 'Steinway M XR', 'M XR', NULL, 'Wixom, MI', '1669152105.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Pre Owned', NULL, 'Grand Piano', '6\'2\"', NULL, NULL, '2022-11-19 20:23:38', '2022-11-22 21:21:45'),
(213, 1, 'P63793b6ba04f1', '266996', 'Steinway M Kitchen Square', 'M Kitchen Square', NULL, 'Wixom, MI', '1669152277.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Pre Owned', NULL, 'Baby Grand Piano', '5\'7\"', NULL, NULL, '2022-11-19 20:24:11', '2022-11-22 21:24:37'),
(214, 1, 'P63793b842bb0a', '332066', 'Steinway S', 'S', NULL, 'Wixom, MI', '1669152376.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Pre Owned', NULL, 'Baby Grand Piano', '5\'1\"', NULL, NULL, '2022-11-19 20:24:36', '2022-11-22 21:26:16'),
(215, 1, 'P63793ba4ec30a', '2583657', 'Story & Clark H48', 'H48', NULL, 'Wixom, MI', '1669152640.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'New', NULL, 'Baby Grand Piano', '4\'11\"', NULL, NULL, '2022-11-19 20:25:08', '2022-11-22 21:30:40'),
(216, 1, 'P63793bc5d8649', '2584136', 'Story & Clark H60 Zero Profile', 'H-60 zero', 'PE', 'Wixom, MI', '1668889541.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'New', NULL, 'Grand Piano', '5\'0\"', NULL, NULL, '2022-11-19 20:25:41', '2022-11-22 21:32:16'),
(217, 1, 'P63793bf75084a', '1785596', 'Story & Clark H80 Zero Profile', 'H80 Zero Profile', NULL, 'Wixom, MI', '1669152972.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'New', NULL, 'Grand Piano', '6\'1\"', NULL, NULL, '2022-11-19 20:26:31', '2022-11-22 21:36:12'),
(218, 1, 'P63793c1438a17', '901050', 'Story & Clark Model 158', 'Model 158', NULL, 'Wixom, MI', '1669153092.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Pre Owned', NULL, 'Baby Grand Piano', '5\'3\"', NULL, NULL, '2022-11-19 20:27:00', '2022-11-22 21:38:12'),
(219, 1, 'P63793c2e63f87', '455520', 'Story & Clark Model 158C', '158C', NULL, 'Wixom, MI', '1669153155.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Pre Owned', NULL, 'Baby Grand Piano', '5\'3\"', NULL, NULL, '2022-11-19 20:27:26', '2022-11-22 21:39:15'),
(220, 1, 'P63793c4cda3ec', 'T80795', 'Story & Clark S600 Melrose', 'S600 Melrose', NULL, 'Wixom, MI', '1669153851.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'New', NULL, 'Baby Grand Piano', '5\'4\"', NULL, NULL, '2022-11-19 20:27:56', '2022-11-22 21:50:51'),
(221, 1, 'P63793c6d87c86', 'T80799', 'Story & Clark S600 Melrose', 'S600 Melrose', NULL, 'Wixom, MI', '1669154676.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'New', NULL, 'Baby Grand Piano', '5\'4\"', NULL, NULL, '2022-11-19 20:28:29', '2022-11-22 22:04:36'),
(222, 1, 'P63793c9051c45', '101.549', 'W. Steinberg P-152S', 'P-152S', NULL, 'Wixom, MI', '1669167080.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'New', NULL, 'Baby Grand Piano', '5\'0\"', NULL, NULL, '2022-11-19 20:29:04', '2022-11-23 01:31:20'),
(223, 1, 'P63793cae57337', '101.554', 'W. Steinberg P-165S', 'P-165S', NULL, 'Wixom, MI', '1669167103.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'New', NULL, 'Baby Grand Piano', '5\'5\"', NULL, NULL, '2022-11-19 20:29:34', '2022-11-23 01:31:43'),
(224, 1, 'P63793cc9733ff', '2056607', 'Wurlitzer G-452', 'G-452', 'Brown Mahogany Pol', 'Wixom, MI', '1669167334.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Pre Owned', NULL, 'Grand Piano', '5\'2\"', NULL, NULL, '2022-11-19 20:30:01', '2022-11-23 01:35:34'),
(225, 1, 'P63793ce8225b1', '2053939', 'Wurlitzer G-452PD', 'G-452PD', NULL, 'Wixom, MI', '1669167172.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Pre Owned', NULL, 'Baby Grand Piano', '5\'2\"', NULL, NULL, '2022-11-19 20:30:32', '2022-11-23 01:32:52'),
(226, 1, 'P63793d0659e94', 'B5549704', 'Yamaha GH1PD', 'GH1 PD', 'Mahogany Polish', 'Wixom, MI', '1669168080.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Pre Owned', NULL, 'Grand Piano', '5\'3\"', NULL, NULL, '2022-11-19 20:31:02', '2022-11-23 01:48:00'),
(227, 1, 'P63793d22dddba', 'YGO132804', 'Young Chang PG-150', 'PG-150', NULL, 'Wixom, MI', '1669168193.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Pre Owned', NULL, 'Baby Grand Piano', '4\'11\"', NULL, NULL, '2022-11-19 20:31:30', '2022-11-23 01:49:53'),
(228, 1, 'P63793d466db2f', 'G101702', 'Young Chang/PianoDisc PD-590', 'PD-590', NULL, 'Wixom, MI', '1669168260.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Pre Owned', NULL, 'Baby Grand Piano', '5\'9\"', NULL, NULL, '2022-11-19 20:32:06', '2022-11-23 01:51:00'),
(229, 1, 'P63793d6db8da6', '604044', 'Baldwin Acrosonic', 'Acrosonic', NULL, 'Wixom, MI', '1668889965.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Pre Owned', NULL, 'Upright Piano', NULL, NULL, NULL, '2022-11-19 20:32:45', '2022-11-19 20:32:45'),
(230, 1, 'P63793d9294f2c', '1546428', 'Baldwin 662 Classic', '662 Classic', NULL, 'Wixom, MI', '1668890002.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Pre Owned', NULL, 'Upright Piano', NULL, NULL, '47\"', '2022-11-19 20:33:22', '2022-11-19 20:33:22'),
(231, 1, 'P63793dad8cbca', '1563239', 'Baldwin Classic', 'Classic', NULL, 'Wixom, MI', '1668890029.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Pre Owned', NULL, 'Upright Piano', NULL, NULL, '41\"', '2022-11-19 20:33:49', '2022-11-19 20:33:49'),
(232, 1, 'P63793dca6dfc7', '0463419', 'Baldwin 5045 Hamilton', '5045 Hamilton', NULL, 'Wixom, MI', '1669168359.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Pre Owned', NULL, 'Upright Piano', NULL, NULL, '45\"', '2022-11-19 20:34:18', '2022-11-23 01:52:39'),
(233, 1, 'P63793de363181', '413277', 'Baldwin Hamilton', 'Hamilton', NULL, 'Wixom, MI', '1669168407.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Pre Owned', NULL, 'Upright Piano', NULL, NULL, NULL, '2022-11-19 20:34:43', '2022-11-23 01:53:27'),
(234, 1, 'P63793dfd8bc14', '918554', 'Baldwin Howard', 'Howard', NULL, 'Wixom, MI', '1668890109.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Pre Owned', NULL, 'Upright Piano', NULL, NULL, NULL, '2022-11-19 20:35:09', '2022-11-19 20:35:09'),
(235, 1, 'P63793e19e4f8f', '1180001806', 'Brodmann PE-118V', 'PE-118V', NULL, 'Wixom, MI', '1669168754.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'New', NULL, 'Upright Piano', NULL, NULL, '47\"', '2022-11-19 20:35:37', '2022-11-23 01:59:14'),
(236, 1, 'P63793e35868a3', '303730', 'Cable Nelson Console', 'Console', NULL, 'Wixom, MI', '1669226914.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Pre Owned', NULL, 'Upright Piano', NULL, NULL, NULL, '2022-11-19 20:36:05', '2022-11-23 18:08:34'),
(237, 1, 'P63793e4fe2431', '248939', 'Hobart M. Cable Console', 'Console', NULL, 'Wixom, MI', '1668890191.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Pre Owned', NULL, 'Upright Piano', NULL, NULL, NULL, '2022-11-19 20:36:31', '2022-11-19 20:36:31'),
(238, 1, 'P63793e6956cd7', 'IJF00829', 'Hyundai U822', 'U822', NULL, 'Wixom, MI', '1669168694.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Pre Owned', NULL, 'Upright Piano', NULL, NULL, NULL, '2022-11-19 20:36:57', '2022-11-23 01:58:14'),
(239, 1, 'P63793e8073afe', 'K498999', 'Kawai Mini', 'Mini', NULL, 'Wixom, MI', '1668890240.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Pre Owned', NULL, 'Upright Piano', NULL, NULL, NULL, '2022-11-19 20:37:20', '2022-11-19 20:37:20'),
(240, 1, 'P63793e9ac2b46', '1620871', 'Kawai NS-15', 'NS-15', NULL, 'Wixom, MI', '1669226041.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Pre Owned', NULL, 'Upright Piano', NULL, NULL, '50\"', '2022-11-19 20:37:46', '2022-11-23 17:54:01'),
(241, 1, 'P63793eb823514', 'K1180005002', 'K. Clara K-118', 'K-118', NULL, 'Wixom, MI', '1669226129.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'New', NULL, 'Upright Piano', NULL, NULL, '47\"', '2022-11-19 20:38:16', '2022-11-23 17:55:29'),
(242, 1, 'P63793ed2557b8', '634710', 'Kimball Artist Console', 'Artist Console', NULL, 'Wixom, MI', '1668890322.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Pre Owned', NULL, 'Upright Piano', NULL, NULL, NULL, '2022-11-19 20:38:42', '2022-11-19 20:38:42'),
(243, 1, 'P63793eeeeaa60', '752029', 'Kimball Console', 'Console', NULL, 'Wixom, MI', '1668890350.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Pre Owned', NULL, 'Upright Piano', NULL, NULL, NULL, '2022-11-19 20:39:10', '2022-11-19 20:39:10'),
(244, 1, 'P63793f1093ac0', 'B36770', 'Kimball Model 4232', 'Model 4232', NULL, 'Wixom, MI', '1668890384.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Pre Owned', NULL, 'Upright Piano', NULL, NULL, '42\"', '2022-11-19 20:39:44', '2022-11-19 20:39:44'),
(245, 1, 'P63793f2d05c66', 'D86543', 'Kimball Model 4242', 'Model 4242', NULL, 'Wixom, MI', '1668890413.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Pre Owned', NULL, 'Upright Piano', NULL, NULL, '42\"', '2022-11-19 20:40:13', '2022-11-19 20:40:13'),
(246, 1, 'P63793f4b51792', 'D33161', 'Kimball Model 4244', 'Model 4244', NULL, 'Wixom, MI', '1668890443.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Pre Owned', NULL, 'Upright Piano', NULL, NULL, '42\"', '2022-11-19 20:40:43', '2022-11-19 20:40:43'),
(247, 1, 'P63793f6ccec6e', 'IMC01328', 'Kohler & Campbell SKV-108', 'SKV-108', NULL, 'Wixom, MI', '1668890476.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Pre Owned', NULL, 'Upright Piano', NULL, NULL, '45\"', '2022-11-19 20:41:16', '2022-11-19 20:41:16'),
(248, 1, 'P63793f87f24ed', '204040', 'Lester Console', 'Console', NULL, 'Wixom, MI', '1668890503.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Pre Owned', NULL, 'Upright Piano', NULL, NULL, NULL, '2022-11-19 20:41:44', '2022-11-19 20:41:44'),
(249, 1, 'P63793fa4399ad', '767792', 'Pearl River UP110P2', 'UP110P2', NULL, 'Wixom, MI', '1668890532.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Pre Owned', NULL, 'Upright Piano', NULL, NULL, '44\"', '2022-11-19 20:42:12', '2022-11-19 20:42:12'),
(250, 1, 'P63793fc275984', 'IGAA0202', 'Samick SU-347F', 'SU-347F', NULL, 'Wixom, MI', '1668890562.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Pre Owned', NULL, 'Upright Piano', NULL, NULL, NULL, '2022-11-19 20:42:42', '2022-11-19 20:42:42'),
(251, 1, 'P63793fd8c3d8d', '51413', 'Schimmel 42', '42', NULL, 'Wixom, MI', '1668890584.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Pre Owned', NULL, 'Upright Piano', NULL, NULL, NULL, '2022-11-19 20:43:04', '2022-11-19 20:43:04'),
(252, 1, 'P63793ff47b848', '116761', 'Schimmel F116T', 'F116T', NULL, 'Wixom, MI', '1669226258.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'New', NULL, 'Upright Piano', NULL, NULL, '46\"', '2022-11-19 20:43:32', '2022-11-23 17:57:38'),
(253, 1, 'P63794013a8aed', 'ILLFU0032', 'Seiler ED-126', 'ED-126', NULL, 'Wixom, MI', '1669169133.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'New', NULL, 'Upright Piano', NULL, NULL, '49\"', '2022-11-19 20:44:03', '2022-11-23 02:05:33'),
(254, 1, 'P6379402f41510', 'ILLFU0039', 'Seiler ED-132', 'ED-132', NULL, 'Wixom, MI', '1669169175.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'New', NULL, 'Upright Piano', NULL, NULL, '52\"', '2022-11-19 20:44:31', '2022-11-23 02:06:15'),
(255, 1, 'P6379404a84cd6', 'ILLHU0013', 'Seiler GS-116N', 'GS-116N', NULL, 'Wixom, MI', '1669168898.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'New', NULL, 'Upright Piano', NULL, NULL, '45.5\"', '2022-11-19 20:44:58', '2022-11-23 02:01:38'),
(256, 1, 'P63794072a7125', 'ILKLU0030', 'Seiler GS-122N IMPULZ', 'GS-122 IMPULZ', NULL, 'Wixom, MI', '1669169020.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'New', NULL, 'Upright Piano', NULL, NULL, '48.5\"', '2022-11-19 20:45:38', '2022-11-23 02:03:40'),
(257, 1, 'P637940930b29a', '137279', 'Starck Upright', 'Upright', NULL, 'Wixom, MI', '1668890771.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Pre Owned', NULL, 'Upright Piano', NULL, NULL, NULL, '2022-11-19 20:46:11', '2022-11-19 20:46:11'),
(258, 1, 'P637940afc416d', '295428', 'Steinway Model 45', 'Model 45', NULL, 'Wixom, MI', '1669168490.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Pre Owned', NULL, 'Upright Piano', NULL, NULL, '45\"', '2022-11-19 20:46:39', '2022-11-23 01:54:50'),
(259, 1, 'P637940c9caac1', '336163', 'Steinway Model 100', 'Model 100', NULL, 'Wixom, MI', '1668890825.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Pre Owned', NULL, 'Upright Piano', NULL, NULL, '42\"', '2022-11-19 20:47:05', '2022-11-19 20:47:05'),
(260, 1, 'P637940e67d43d', '351145', 'Steinway Model 100', 'Model 100', NULL, 'Wixom, MI', '1668890854.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Pre Owned', NULL, 'Upright Piano', NULL, NULL, '42\"', '2022-11-19 20:47:34', '2022-11-19 20:47:34'),
(261, 1, 'P637941055c656', '800001435', 'Story & Clark H6 Calais', 'Story & Clark H6 Calais', NULL, 'Wixom, MI', '1669226497.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'New', NULL, 'Upright Piano', NULL, NULL, '44\"', '2022-11-19 20:48:05', '2022-11-23 18:01:37'),
(262, 1, 'P6379412153139', '278010', 'Story & Clark H8', 'H8', NULL, 'Wixom, MI', '1669226088.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Pre Owned', NULL, 'Upright Piano', NULL, NULL, '48\"', '2022-11-19 20:48:33', '2022-11-23 17:54:48'),
(263, 1, 'P6379413d8be1f', '278051', 'Story & Clark H8', 'H8', NULL, 'Wixom, MI', '1669226373.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Pre Owned', NULL, 'Upright Piano', NULL, NULL, '48\"', '2022-11-19 20:49:01', '2022-11-23 17:59:33'),
(264, 1, 'P637941576f553', 'T80799', 'Story & Clark H9', 'H9', NULL, 'Wixom, MI', '1668890967.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Pre Owned', NULL, 'Upright Piano', NULL, NULL, NULL, '2022-11-19 20:49:27', '2022-11-19 20:49:27'),
(265, 1, 'P6379418885d93', 'S95868', 'Whitney Model 3710', 'Model 3710', NULL, 'Wixom, MI', '1668891016.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Pre Owned', NULL, 'Upright Piano', NULL, NULL, NULL, '2022-11-19 20:50:16', '2022-11-19 20:50:16'),
(266, 1, 'P637941a74fe93', '793980', 'Whitney Upright', 'Upright', NULL, 'Wixom, MI', '1668891047.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Pre Owned', NULL, 'Upright Piano', NULL, NULL, NULL, '2022-11-19 20:50:47', '2022-11-19 20:50:47'),
(267, 1, 'P637941bfa263d', '1058777', 'Wurlitzer Console', 'Console', NULL, 'Wixom, MI', '1668891071.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Pre Owned', NULL, 'Upright Piano', NULL, NULL, NULL, '2022-11-19 20:51:11', '2022-11-19 20:51:11'),
(268, 1, 'P637941dba7e61', '2056880', 'Wurlitzer Model 2975', 'Model 2975', NULL, 'Wixom, MI', '1668891099.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Pre Owned', NULL, 'Upright Piano', NULL, NULL, NULL, '2022-11-19 20:51:39', '2022-11-19 20:51:39'),
(269, 1, 'P637941f77e58e', 'T179547', 'Yamaha M1E', 'M1E', NULL, 'Wixom, MI', '1669167884.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Pre Owned', NULL, 'Upright Piano', NULL, NULL, '43\"', '2022-11-19 20:52:07', '2022-11-23 01:44:44'),
(270, 1, 'P637942165a1d7', '241102', 'Yamaha M500G', 'M500G', NULL, 'Wixom, MI', '1668891158.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Pre Owned', NULL, 'Upright Piano', NULL, NULL, '44\"', '2022-11-19 20:52:38', '2022-11-19 20:52:38'),
(271, 1, 'P6379423a6c333', '4977315', 'Yamaha MX100R MIDIman', 'MX100R MIDIman', NULL, 'Wixom, MI', '1669168569.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Pre Owned', NULL, 'Upright Piano', NULL, NULL, '49\"', '2022-11-19 20:53:14', '2022-11-23 01:56:09'),
(272, 1, 'P6379425871f4a', '1349351', 'Yamaha P22', 'P22', NULL, 'Wixom, MI', '1668891224.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Pre Owned', NULL, 'Upright Piano', NULL, NULL, '45.75\"', '2022-11-19 20:53:44', '2022-11-19 20:53:44'),
(273, 1, 'P637942c91ef3a', 'S53004510049', 'Kurzweil Mark 152', 'Mark 152', NULL, 'Wixom, MI', '1668891337.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Pre Owned', NULL, 'Digital Piano', '4\'11\"', NULL, NULL, '2022-11-19 20:55:37', '2022-11-19 20:55:37'),
(274, 1, 'P637943254ecdf', '11880', 'Suzuki DG10', 'DG10', NULL, 'Wixom, MI', '1668891429.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Pre Owned', NULL, 'Digital Piano', '2\'7\"', '4\'7\"', NULL, '2022-11-19 20:57:09', '2022-11-19 20:57:09'),
(275, 1, 'P637943a74a3ec', 'UCTN01019', 'Yamaha N1', 'N1', NULL, 'Wixom, MI', '1669168628.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Pre Owned', NULL, 'Digital Piano', '2\'0\"', '4\'10\"', '3\'3\"', '2022-11-19 20:59:19', '2022-11-23 01:57:08'),
(277, 1, 'P6379496312e2c', 'WE001', 'Casio Celviano AP-270', 'AP-270', 'Celviano', 'Wixom, MI', '1668893027.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'New', NULL, 'Digital Piano', NULL, NULL, NULL, '2022-11-19 21:23:47', '2022-11-19 21:23:47'),
(278, 1, 'P6379497ece2d1', 'BN001', 'Casio Celviano AP-270', 'AP-270', 'Celviano', 'Wixom, MI', '1668893054.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'New', NULL, 'Digital Piano', NULL, NULL, NULL, '2022-11-19 21:24:14', '2022-11-19 21:24:14'),
(279, 1, 'P637949b8b97f4', 'BK001', 'Casio Celviano AP-270', 'AP-270', 'Celviano', 'Wixom, MI', '1668893112.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'New', NULL, 'Digital Piano', NULL, NULL, NULL, '2022-11-19 21:25:12', '2022-11-19 21:25:12'),
(280, 1, 'P637949db333f5', 'BK002', 'Casio Celviano AP-470', 'AP-470', 'Celviano', 'Wixom, MI', '1668893147.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'New', NULL, 'Digital Piano', NULL, NULL, NULL, '2022-11-19 21:25:47', '2022-11-19 21:25:47'),
(281, 1, 'P637949ff994ae', 'WE002', 'Casio Celviano AP-470', 'AP-470', 'Celviano', 'Wixom, MI', '1668893183.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'New', NULL, 'Digital Piano', NULL, NULL, NULL, '2022-11-19 21:26:23', '2022-11-19 21:26:23'),
(282, 1, 'P63794a27ac2ca', 'BN002', 'Casio Celviano AP-470', 'AP-470', 'Celviano', 'Wixom, MI', '1668893223.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'New', NULL, 'Digital Piano', NULL, NULL, NULL, '2022-11-19 21:27:03', '2022-11-19 21:27:03'),
(283, 1, 'P63794a4421e4e', 'BK003', 'Casio Celviano AP-710', 'AP-710', 'Celviano', 'Wixom, MI', '1668893252.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'New', NULL, 'Digital Piano', NULL, NULL, NULL, '2022-11-19 21:27:32', '2022-11-19 21:27:32'),
(284, 1, 'P63794a97bf886', 'BK004', 'Casio Celviano GP-310', 'GP-310', 'Celviano', 'Wixom, MI', '1668893335.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'New', NULL, 'Digital Piano', NULL, NULL, NULL, '2022-11-19 21:28:55', '2022-11-19 21:28:55'),
(285, 1, 'P63794aba6f37e', 'WE003', 'Casio Celviano GP-310', 'GP-310', 'Celviano', 'Wixom, MI', '1668893370.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'New', NULL, 'Digital Piano', NULL, NULL, NULL, '2022-11-19 21:29:30', '2022-11-19 21:29:30'),
(286, 1, 'P63794ae15f339', 'BP001', 'Casio Celviano GP-510BP', 'GP-510BP', 'Celviano', 'Wixom, MI', '1668893409.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'New', NULL, 'Digital Piano', NULL, NULL, NULL, '2022-11-19 21:30:09', '2022-11-19 21:30:09'),
(287, 1, 'P63794d05d4080', 'CB001', 'Roland F701', 'F701', NULL, 'Wixom, MI', '1668893957.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'New', NULL, 'Digital Piano', NULL, NULL, NULL, '2022-11-19 21:39:17', '2022-11-19 21:39:17'),
(288, 1, 'P63794d2d640b5', 'LA001', 'Roland F701', 'F701', NULL, 'Wixom, MI', '1668893997.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'New', NULL, 'Digital Piano', NULL, NULL, NULL, '2022-11-19 21:39:57', '2022-11-19 21:39:57'),
(289, 1, 'P63794d440a691', 'WH001', 'Roland F701', 'F701', NULL, 'Wixom, MI', '1668894020.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'New', NULL, 'Digital Piano', NULL, NULL, NULL, '2022-11-19 21:40:20', '2022-11-19 21:40:20'),
(290, 1, 'P63794d6743e9a', 'BK001', 'Roland FP-30X', 'FP-30X', NULL, 'Wixom, MI', '1668894055.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'New', NULL, 'Digital Piano', NULL, NULL, NULL, '2022-11-19 21:40:55', '2022-11-19 21:40:55'),
(291, 1, 'P63794d7b201c5', 'WH002', 'Roland FP-30X', 'FP-30X', NULL, 'Wixom, MI', '1668894075.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'New', NULL, 'Digital Piano', NULL, NULL, NULL, '2022-11-19 21:41:15', '2022-11-19 21:41:15'),
(292, 1, 'P63794db0ad6a4', 'BK002', 'Roland FP-60X', 'FP-60X', NULL, 'Wixom, MI', '1668894128.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'New', NULL, 'Digital Piano', NULL, NULL, NULL, '2022-11-19 21:42:08', '2022-11-19 21:42:08'),
(293, 1, 'P63794dce9ea72', 'WH003', 'Roland FP-60X', 'FP-60X', NULL, 'Wixom, MI', '1668894158.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'New', NULL, 'Digital Piano', NULL, NULL, NULL, '2022-11-19 21:42:38', '2022-11-19 21:42:38'),
(294, 1, 'P63794debaf254', 'BK003', 'Roland FP-90X', 'FP-90X', NULL, 'Wixom, MI', '1668894187.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'New', NULL, 'Digital Piano', NULL, NULL, NULL, '2022-11-19 21:43:07', '2022-11-19 21:43:07'),
(295, 1, 'P63794e0498fab', 'WH004', 'Roland FP-90X', 'FP-90X', NULL, 'Wixom, MI', '1668894212.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'New', NULL, 'Digital Piano', NULL, NULL, NULL, '2022-11-19 21:43:32', '2022-11-19 21:43:32'),
(296, 1, 'P63794e2cc371c', 'BK005', 'Roland GO:PIANO88', 'GO:PIANO88', NULL, 'Wixom, MI', '1668894252.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'New', NULL, 'Digital Piano', NULL, NULL, NULL, '2022-11-19 21:44:12', '2022-11-19 21:44:12'),
(297, 1, 'P63794e4c65633', 'PE001', 'Roland GP607', 'GP607', NULL, 'Wixom, MI', '1668894284.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'New', NULL, 'Digital Piano', NULL, NULL, NULL, '2022-11-19 21:44:44', '2022-11-19 21:44:44'),
(298, 1, 'P63794e6067ab1', 'PW001', 'Roland GP607', 'GP607', NULL, 'Wixom, MI', '1668894304.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'New', NULL, 'Digital Piano', NULL, NULL, NULL, '2022-11-19 21:45:04', '2022-11-19 21:45:04'),
(299, 1, 'P63794e7aead94', 'PE002', 'Roland GP609', 'GP609', NULL, 'Wixom, MI', '1668894330.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'New', NULL, 'Digital Piano', NULL, NULL, NULL, '2022-11-19 21:45:30', '2022-11-19 21:45:30'),
(300, 1, 'P63794e8d951a6', 'PW002', 'Roland GP609', 'GP609', NULL, 'Wixom, MI', '1668894349.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'New', NULL, 'Digital Piano', NULL, NULL, NULL, '2022-11-19 21:45:49', '2022-11-19 21:45:49'),
(301, 1, 'P63794eb938610', 'CH001', 'Roland HP702', 'HP702', NULL, 'Wixom, MI', '1668894393.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'New', NULL, 'Digital Piano', NULL, NULL, NULL, '2022-11-19 21:46:33', '2022-11-19 21:46:33'),
(302, 1, 'P63794eca01860', 'DR001', 'Roland HP702', 'HP702', NULL, 'Wixom, MI', '1668894410.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'New', NULL, 'Digital Piano', NULL, NULL, NULL, '2022-11-19 21:46:50', '2022-11-19 21:46:50'),
(303, 1, 'P63794edc4310a', 'LA002', 'Roland HP702', 'HP702', NULL, 'Wixom, MI', '1668894428.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'New', NULL, 'Digital Piano', NULL, NULL, NULL, '2022-11-19 21:47:08', '2022-11-19 21:47:08'),
(304, 1, 'P63794ef1621cf', 'WH005', 'Roland HP702', 'HP702', NULL, 'Wixom, MI', '1668894449.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'New', NULL, 'Digital Piano', NULL, NULL, NULL, '2022-11-19 21:47:29', '2022-11-19 21:47:29');
INSERT INTO `products` (`id`, `user_id`, `product_id`, `product_number`, `name`, `category`, `sub_category`, `shop_name`, `photo`, `photos_2`, `short_desc`, `description`, `meta_title`, `meta_desc`, `price`, `discount`, `model`, `unit`, `status`, `weight`, `type`, `length`, `width`, `height`, `created_at`, `updated_at`) VALUES
(305, 1, 'P63794f0e7e955', 'CH002', 'Roland HP704', 'HP704', NULL, 'Wixom, MI', '1668894478.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'New', NULL, 'Digital Piano', NULL, NULL, NULL, '2022-11-19 21:47:58', '2022-11-19 21:47:58'),
(306, 1, 'P63794f27776ff', 'DR002', 'Roland HP704', 'HP704', NULL, 'Wixom, MI', '1668894503.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'New', NULL, 'Digital Piano', NULL, NULL, NULL, '2022-11-19 21:48:23', '2022-11-19 21:48:23'),
(307, 1, 'P63794f398e4f5', 'LA003', 'Roland HP704', 'Roland HP704', NULL, 'Wixom, MI', '1668894521.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'New', NULL, 'Digital Piano', NULL, NULL, NULL, '2022-11-19 21:48:41', '2022-11-19 21:48:41'),
(308, 1, 'P63794f4c7ea27', 'PE003', 'Roland HP704', 'HP704', NULL, 'Wixom, MI', '1668894540.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'New', NULL, 'Digital Piano', NULL, NULL, NULL, '2022-11-19 21:49:00', '2022-11-19 21:49:00'),
(309, 1, 'P63794f5c8c6f7', 'WH006', 'Roland HP704', 'HP704', NULL, 'Wixom, MI', '1668894556.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'New', NULL, 'Digital Piano', NULL, NULL, NULL, '2022-11-19 21:49:16', '2022-11-19 21:49:16'),
(310, 1, 'P63794f89f2e07', 'CH003', 'Roland LX705', 'LX705', NULL, 'Wixom, MI', '1668894601.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'New', NULL, 'Digital Piano', NULL, NULL, NULL, '2022-11-19 21:50:02', '2022-11-19 21:50:02'),
(311, 1, 'P63794fa07f3c5', 'DR003', 'Roland LX705', 'Roland LX705', NULL, 'Wixom, MI', '1668894624.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'New', NULL, 'Digital Piano', NULL, NULL, NULL, '2022-11-19 21:50:24', '2022-11-19 21:50:24'),
(312, 1, 'P63794fb98cb0c', 'LA004', 'Roland LX705', 'Roland LX705', NULL, 'Wixom, MI', '1668894649.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'New', NULL, 'Digital Piano', NULL, NULL, NULL, '2022-11-19 21:50:49', '2022-11-19 21:50:49'),
(313, 1, 'P63794fcc6d21d', 'PE004', 'Roland LX705', 'LX705', NULL, 'Wixom, MI', '1668894668.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'New', NULL, 'Digital Piano', NULL, NULL, NULL, '2022-11-19 21:51:08', '2022-11-19 21:51:08'),
(314, 1, 'P63794ffb76fba', 'CH004', 'Roland LX706', 'LX706', NULL, 'Wixom, MI', '1668894715.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'New', NULL, 'Digital Piano', NULL, NULL, NULL, '2022-11-19 21:51:55', '2022-11-19 21:51:55'),
(315, 1, 'P6379501566992', 'DR004', 'Roland LX706', 'LX706', NULL, 'Wixom, MI', '1668894741.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'New', NULL, 'Digital Piano', NULL, NULL, NULL, '2022-11-19 21:52:21', '2022-11-19 21:52:21'),
(316, 1, 'P6379502948a30', 'PE005', 'Roland LX706', 'LX706', NULL, 'Wixom, MI', '1668894761.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'New', NULL, 'Digital Piano', NULL, NULL, NULL, '2022-11-19 21:52:41', '2022-11-19 21:52:41'),
(317, 1, 'P637950469bcd0', 'CH005', 'Roland LX708', 'LX708', NULL, 'Wixom, MI', '1668894790.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'New', NULL, 'Digital Piano', NULL, NULL, NULL, '2022-11-19 21:53:10', '2022-11-19 21:53:10'),
(318, 1, 'P637950589c3d4', 'PE006', 'Roland LX708', 'LX708', NULL, 'Wixom, MI', '1668894808.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'New', NULL, 'Digital Piano', NULL, NULL, NULL, '2022-11-19 21:53:28', '2022-11-19 21:53:28'),
(319, 1, 'P6379506f68d3d', 'PW003', 'Roland LX708', 'LX708', NULL, 'Wixom, MI', '1668894831.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'New', NULL, 'Digital Piano', NULL, NULL, NULL, '2022-11-19 21:53:51', '2022-11-19 21:53:51'),
(320, 1, 'P6379508d834fc', 'BK006', 'Roland RD-2000', 'RD-2000', NULL, 'Wixom, MI', '1668894861.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'New', NULL, 'Digital Piano', NULL, NULL, NULL, '2022-11-19 21:54:21', '2022-11-19 21:54:21'),
(321, 1, 'P637950b3cae6d', 'BK007', 'Roland RP102', 'RP102', NULL, 'Wixom, MI', '1668894899.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'New', NULL, 'Digital Piano', NULL, NULL, NULL, '2022-11-19 21:54:59', '2022-11-19 21:54:59'),
(322, 1, 'P637950d0b0b00', 'BK007', 'Roland RP30', 'RP30', NULL, 'Wixom, MI', '1668894928.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'New', NULL, 'Digital Piano', NULL, NULL, NULL, '2022-11-19 21:55:28', '2022-11-19 21:55:28'),
(323, 1, 'P637950eeeba79', 'CB002', 'Roland RP701', 'RP701', NULL, 'Wixom, MI', '1668894958.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'New', NULL, 'Digital Piano', NULL, NULL, NULL, '2022-11-19 21:55:58', '2022-11-19 21:55:58'),
(324, 1, 'P63795107d49e8', 'DR005', 'Roland RP701', 'RP701', NULL, 'Wixom, MI', '1668894983.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'New', NULL, 'Digital Piano', NULL, NULL, NULL, '2022-11-19 21:56:23', '2022-11-19 21:56:23'),
(325, 1, 'P6379511c01943', 'LA005', 'Roland RP701', 'RP701', NULL, 'Wixom, MI', '1668895004.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'New', NULL, 'Digital Piano', NULL, NULL, NULL, '2022-11-19 21:56:44', '2022-11-19 21:56:44'),
(326, 1, 'P637951341d4b1', 'WH007', 'Roland RP701', 'RP701', NULL, 'Wixom, MI', '1668895028.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'New', NULL, 'Digital Piano', NULL, NULL, NULL, '2022-11-19 21:57:08', '2022-11-19 21:57:08');

-- --------------------------------------------------------

--
-- Table structure for table `pro_images`
--

CREATE TABLE `pro_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pro_images`
--

INSERT INTO `pro_images` (`id`, `product_id`, `photo`, `created_at`, `updated_at`) VALUES
(1, NULL, '1668880895.jpg', '2022-11-19 18:01:35', '2022-11-19 18:01:35'),
(5, 'P637921360fa34', '1668882779.jpg', '2022-11-19 18:32:59', '2022-11-19 18:32:59'),
(7, 'P6379349eb3aa5', '1668887779.jpg', '2022-11-19 19:56:19', '2022-11-19 19:56:19'),
(8, 'P637934e5d5bc8', '1668887880.jpg', '2022-11-19 19:58:00', '2022-11-19 19:58:00'),
(9, 'P6379351b981e5', '1668888061.jpg', '2022-11-19 20:01:01', '2022-11-19 20:01:01'),
(10, 'P637935451a312', '1668888120.jpg', '2022-11-19 20:02:00', '2022-11-19 20:02:00'),
(11, 'P637935700d249', '1668888152.jpg', '2022-11-19 20:02:32', '2022-11-19 20:02:32'),
(12, 'P6379369aae4b8', '1668888906.jpg', '2022-11-19 20:15:06', '2022-11-19 20:15:06'),
(13, 'P637936bd64614', '1668889441.jpg', '2022-11-19 20:24:01', '2022-11-19 20:24:01'),
(15, 'P637936dcbd522', '1668889621.jpg', '2022-11-19 20:27:01', '2022-11-19 20:27:01'),
(16, 'P637936fa79097', '1668889796.jpg', '2022-11-19 20:29:56', '2022-11-19 20:29:56'),
(18, 'P637936fa79097', '1668889920.jpg', '2022-11-19 20:32:00', '2022-11-19 20:32:00'),
(20, 'P6379374693bf6', '1668969335.jpg', '2022-11-20 18:35:35', '2022-11-20 18:35:35'),
(21, 'P637937623c7ac', '1668970058.jpg', '2022-11-20 18:47:38', '2022-11-20 18:47:38'),
(22, 'P6379377c1b133', '1668970101.jpg', '2022-11-20 18:48:21', '2022-11-20 18:48:21'),
(23, 'P637937a225353', '1668970158.jpg', '2022-11-20 18:49:18', '2022-11-20 18:49:18'),
(24, 'P637937f9379d0', '1668970465.jpg', '2022-11-20 18:54:25', '2022-11-20 18:54:25'),
(25, 'P63793844e1b50', '1668970543.jpg', '2022-11-20 18:55:43', '2022-11-20 18:55:43'),
(26, 'P6379381dd2568', '1668970725.jpg', '2022-11-20 18:58:45', '2022-11-20 18:58:45'),
(27, 'P637938604911a', '1668970876.jpg', '2022-11-20 19:01:16', '2022-11-20 19:01:16'),
(28, 'P637937c3991fa', '1668970992.jpg', '2022-11-20 19:03:12', '2022-11-20 19:03:12'),
(29, 'P637938848b5c8', '1668971085.jpg', '2022-11-20 19:04:45', '2022-11-20 19:04:45'),
(30, 'P63793a3907300', '1669151453.jpg', '2022-11-22 21:10:53', '2022-11-22 21:10:53'),
(31, 'P63793aaa77c85', '1669151579.jpg', '2022-11-22 21:12:59', '2022-11-22 21:12:59'),
(32, 'P63793acae6dce', '1669151677.jpg', '2022-11-22 21:14:37', '2022-11-22 21:14:37'),
(33, 'P63793aea4e679', '1669151762.jpg', '2022-11-22 21:16:02', '2022-11-22 21:16:02'),
(34, 'P63793b0e85789', '1669151874.jpg', '2022-11-22 21:17:54', '2022-11-22 21:17:54'),
(35, 'P63793b2ee4669', '1669151950.jpg', '2022-11-22 21:19:10', '2022-11-22 21:19:10'),
(36, 'P63793b4a37d7a', '1669152123.jpg', '2022-11-22 21:22:03', '2022-11-22 21:22:03'),
(37, 'P63793b6ba04f1', '1669152288.jpg', '2022-11-22 21:24:48', '2022-11-22 21:24:48'),
(38, 'P63793b842bb0a', '1669152407.jpg', '2022-11-22 21:26:47', '2022-11-22 21:26:47'),
(39, 'P63793ba4ec30a', '1669152660.jpg', '2022-11-22 21:31:00', '2022-11-22 21:31:00'),
(40, 'P637922efd4b8d', '1669152821.jpg', '2022-11-22 21:33:41', '2022-11-22 21:33:41'),
(41, 'P63793bf75084a', '1669152991.jpg', '2022-11-22 21:36:31', '2022-11-22 21:36:31'),
(42, 'P63793c1438a17', '1669153111.jpg', '2022-11-22 21:38:31', '2022-11-22 21:38:31'),
(43, 'P63793c2e63f87', '1669153201.jpg', '2022-11-22 21:40:01', '2022-11-22 21:40:01'),
(46, 'P63793c4cda3ec', '1669153919.jpg', '2022-11-22 21:51:59', '2022-11-22 21:51:59'),
(47, 'P63793e35868a3', '1669227157.jpg', '2022-11-23 18:12:37', '2022-11-23 18:12:37');

-- --------------------------------------------------------

--
-- Table structure for table `request_bloods`
--

CREATE TABLE `request_bloods` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hospital_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `problem` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `relationship` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bloodgroup` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `urole` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `urole`, `created_at`, `updated_at`) VALUES
(1, 'superadmin', '2022-11-18 16:59:10', '2022-11-18 16:59:10'),
(2, 'admin', '2022-11-18 16:59:10', '2022-11-18 16:59:10'),
(3, 'author', '2022-11-18 16:59:10', '2022-11-18 16:59:10'),
(4, 'user', '2022-11-18 16:59:10', '2022-11-18 16:59:10');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`id`, `role_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 2, 1, NULL, NULL),
(2, 2, 2, NULL, NULL),
(3, 2, 3, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ser_num` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ser_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ser_photo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ser_details` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `ser_num`, `ser_name`, `ser_photo`, `ser_details`, `created_at`, `updated_at`) VALUES
(1, 'Ser:637b1de85c43d', 'Wood Finish Cleaning', '1669012968.jpg', 'We can Detail', '2022-11-21 06:42:48', '2022-11-21 06:42:48');

-- --------------------------------------------------------

--
-- Table structure for table `shops`
--

CREATE TABLE `shops` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `shop_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shop_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shop_owner` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shop_logo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shop_location` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shop_address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shops`
--

INSERT INTO `shops` (`id`, `shop_number`, `shop_name`, `shop_owner`, `email`, `phone`, `shop_logo`, `shop_location`, `shop_address`, `location`, `created_at`, `updated_at`) VALUES
(3, 'Shop6331dc21e588d', 'Wixom, MI', '3', 'ben@pianonation.com', '(877) 977-4266', '1664212001.jpg', NULL, '30553 Wixom Rd Suite 200, Wixom, MI', '42.51849036802535, -83.53795522328213', '2022-09-27 00:06:41', '2022-09-27 00:06:41'),
(5, 'Shop6331e0d12f818', 'Scottsdale, AZ', '3', 'ben@pianonation.com', '4802915888', '1664213200.jpg', NULL, '9180 Talking Stick Way Suite F2, F3, Scottsdale, AZ 85250', '33.97593779897632, -111.89676505641441', '2022-09-27 00:26:41', '2022-09-27 00:26:41'),
(6, 'Shop6331e201506aa', 'Grand Rapids, MI', '3', 'ben@pianonation.com', '(877) 977-4266', '1664213505.jpg', NULL, '2300 28th St SE, Grand Rapids, MI 49508', '42.913500890009736, -85.61065570896704', '2022-09-27 00:31:45', '2022-09-27 00:31:45'),
(8, 'Shop637bb5ade73f7', 'Luxury Artist Selection Hall, Dallas', 'Select One.', 'ben@pianonation.com', '8779774266', '1669051821.jpg', NULL, '1451 Wycliff Ave, Dallas, TX 75207', '32.83011481717631, -96.90094666847659', '2022-11-21 17:30:21', '2022-11-22 19:25:14'),
(9, 'Shop637bbc1972666', 'Roland Clearance Center', 'Select One.', 'ben@pianonation.com', '8779774266', '1669116684.jpg', NULL, '30553 S. Wixom Road Wixom, MI 48393', '37.0902° N, 95.7129° W', '2022-11-21 17:57:45', '2022-11-22 11:31:24'),
(10, 'Shop637bbce73075d', 'Nashville, TN ONLINE', 'Select One.', 'ben@pianonation.com', '916-276-3152', '1669053671.jpg', NULL, '2031 Powell Dr. Culleoka, TN. 38451', '35.496671514089, -86.97318562754754', '2022-11-21 18:01:11', '2022-11-21 19:38:07');

-- --------------------------------------------------------

--
-- Table structure for table `site_cuses`
--

CREATE TABLE `site_cuses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `site_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `header` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cover` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video_link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `site_cuses`
--

INSERT INTO `site_cuses` (`id`, `user_id`, `site_number`, `title`, `slug`, `header`, `cover`, `video_link`, `created_at`, `updated_at`) VALUES
(8, '5', 'S63585daa8796b', 'Upcoming Sell', '84048', 'We are providing up to 30% discount on any Pianos you like', '1666735530.jpg', 'https://www.youtube.com/watch?v=rX95f2XYJ7g&ab_channel=PianoNation', '2022-10-26 05:05:30', '2022-10-26 05:05:30'),
(10, '2', 'S6372bdd781999', 'Huge Sale', '21333', 'Biggest Holiday Sale Ever', '1668464087.jpg', NULL, '2022-11-14 22:14:47', '2022-11-14 22:14:47'),
(11, '2', 'S637660ec69ffc', 'todds selection', '25742', 'baby grand', '1668801422.jpg', NULL, '2022-11-17 16:27:24', '2022-11-18 19:57:02'),
(13, '1', 'S6377e3e0561cf', 'Todd\'s Selection', '62160', 'PianoNation', '1668801504.jpg', NULL, '2022-11-18 19:58:24', '2022-11-18 19:58:24');

-- --------------------------------------------------------

--
-- Table structure for table `site_pros`
--

CREATE TABLE `site_pros` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pro_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `site_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `site_pros`
--

INSERT INTO `site_pros` (`id`, `pro_number`, `site_number`, `product_id`, `created_at`, `updated_at`) VALUES
(1, 'Si6376229e95ef4', 'S6372bdd781999', 'P633f12c9f1016,P633f13060b1f3,P633f137883dda,P633f13ba617ea,P633f13f207269,P633f14329d338,P633f1469958ec,P633f15377a032', '2022-11-17 12:01:34', '2022-11-17 12:01:34'),
(2, 'Si6377782d22b51', 'S637660ec69ffc', 'P633f12c9f1016,P633f13060b1f3,P633f137883dda,P633f13f207269', '2022-11-18 12:18:53', '2022-11-18 12:18:53'),
(3, 'Si6377b54ad6c28', 'S6372bdd781999', 'P633f13060b1f3,P633f137883dda', '2022-11-18 16:39:38', '2022-11-18 16:39:38'),
(4, 'Si6377b57ea0fcc', 'S637660ec69ffc', 'P633f13060b1f3,P633f13ba617ea', '2022-11-18 16:40:30', '2022-11-18 16:40:30'),
(5, 'Si6377b7a421e64', 'S637660ec69ffc', 'P633f1df7ba9ce,P633f1e46b27df,P633f1e7443858,P633f1e9d812c5,P633f1ece21a46,P633f1eff8b531', '2022-11-18 16:49:40', '2022-11-18 16:49:40'),
(6, 'Si6377badf1e9e3', 'S6377baca437dd', 'P633f1e7443858,P633f1e9d812c5,P633f1ece21a46', '2022-11-18 17:03:27', '2022-11-18 17:03:27'),
(7, 'Si6377e40bf0bd7', 'S6377e3e0561cf', 'P633f1c9da9a4f,P633f1ce4b451f,P633f1d1f35c50,P633f1d569db94,P633f1db7b8a38,P633f1df7ba9ce', '2022-11-18 19:59:07', '2022-11-18 19:59:07'),
(8, 'Si6377e44158012', 'S6377e3e0561cf', 'P633f1db7b8a38', '2022-11-18 20:00:01', '2022-11-18 20:00:01'),
(9, 'Si637b20e4e51d1', 'S6377e3e0561cf', 'P633f1ce4b451f,P633f1d1f35c50,P633f1d569db94', '2022-11-21 06:55:32', '2022-11-21 06:55:32'),
(10, 'Si637bae82e3c04', 'S6377e3e0561cf', 'P633f12c9f1016,P633f13060b1f3', '2022-11-21 16:59:46', '2022-11-21 16:59:46'),
(11, 'Si637baea08cee3', 'S6377e3e0561cf', 'P633f1c2163dbc,P633f1c683954b', '2022-11-21 17:00:16', '2022-11-21 17:00:16'),
(12, 'Si637bc4e1e0b49', 'S6377e3e0561cf', 'P633f1bef2bda5,P633f1c2163dbc,P633f1c683954b', '2022-11-21 18:35:13', '2022-11-21 18:35:13'),
(13, 'Si639cd8345f28b', 'S6377e3e0561cf', 'P633f12c9f1016,P633f13060b1f3', '2022-12-16 20:42:28', '2022-12-16 20:42:28'),
(14, 'Si639ceb7b96ea8', 'S6377e3e0561cf', 'P633f161934320,P633f1680bf1ef,P633f16ec4bbf1', '2022-12-16 22:04:43', '2022-12-16 22:04:43'),
(15, 'Si639cebcb88252', 'S6377e3e0561cf', 'P633f1680bf1ef,P633f16ec4bbf1,P633f174dadcf5', '2022-12-16 22:06:03', '2022-12-16 22:06:03'),
(16, 'Si63a1ee5ce7c83', 'S6377e3e0561cf', 'P633f12c9f1016,P633f13060b1f3,P633f137883dda,P633f13f207269', '2022-12-20 17:18:20', '2022-12-20 17:18:20'),
(17, 'Si63a1f85a0dded', 'S6377e3e0561cf', 'P633f12c9f1016,P633f13ba617ea', '2022-12-20 18:00:58', '2022-12-20 18:00:58');

-- --------------------------------------------------------

--
-- Table structure for table `slide__shops`
--

CREATE TABLE `slide__shops` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slide_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shop_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slide` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slide_link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slide_header` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `socials`
--

CREATE TABLE `socials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `social_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `social_icon` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sub_cates`
--

CREATE TABLE `sub_cates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `subcategory` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sub_cats`
--

CREATE TABLE `sub_cats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `s_e_o_s`
--

CREATE TABLE `s_e_o_s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_meta` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_script` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `task_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `task_assign` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `task_start` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `task_end` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `task_time` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `task_work` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `task_place` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `thanas`
--

CREATE TABLE `thanas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `thana_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zilla_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `types`
--

CREATE TABLE `types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `types`
--

INSERT INTO `types` (`id`, `type`, `created_at`, `updated_at`) VALUES
(1, 'Grand Piano', NULL, NULL),
(2, 'Restored Steinways', NULL, NULL),
(3, 'Baby Grand Piano', NULL, NULL),
(4, 'Upright Piano', NULL, NULL),
(5, 'Digital Piano', NULL, NULL),
(6, 'Player Piano', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shop_id` int(11) DEFAULT NULL,
  `f_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `urole` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `avatar`, `name`, `shop_id`, `f_name`, `l_name`, `phone`, `gender`, `urole`, `email`, `status`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Ben', NULL, NULL, NULL, NULL, NULL, 'admin', 'ben@pianonation.com', '1', NULL, '$2y$10$xpnVnG4NqADn2HWD2lJwF.tW2wX1vSQXryI3J0iHRO1Ump5RmsijG', 'wa3jJ1fjG00lmELOryGwUAvjshPfyXVP3Pv3ZRSuyboQZvc2J2CSc9xvo677', '2022-11-18 16:59:10', '2022-11-18 16:59:10'),
(2, NULL, 'Renee', NULL, NULL, NULL, NULL, NULL, 'admin', 'renee@pianonation.com', '1', NULL, '$2y$10$EFRsZ/RfISNaakDRYreymOhBeJyRZrsp/fRdh.v4P87akQ3fR.JVe', NULL, '2022-11-18 16:59:11', '2022-11-18 16:59:11'),
(3, NULL, 'Rtood', NULL, NULL, NULL, NULL, NULL, 'admin', 'rtood@pianonation.com', '1', NULL, '$2y$10$lCTS6bhuBG5Fy0H9XUL3T.O6V6nS.mHLey727Yg4OPyFcTEj4otL.', NULL, '2022-11-18 16:59:11', '2022-11-18 16:59:11');

-- --------------------------------------------------------

--
-- Table structure for table `video_shops`
--

CREATE TABLE `video_shops` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `shop_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vid_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `video` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `header` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `zillas`
--

CREATE TABLE `zillas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `zilla_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addresses`
--
ALTER TABLE `addresses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appointment_mails`
--
ALTER TABLE `appointment_mails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `article_images`
--
ALTER TABLE `article_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `article_videos`
--
ALTER TABLE `article_videos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `campaigns`
--
ALTER TABLE `campaigns`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `covers`
--
ALTER TABLE `covers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `f_a_q_s`
--
ALTER TABLE `f_a_q_s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_mails`
--
ALTER TABLE `home_mails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leads`
--
ALTER TABLE `leads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notifications_notifiable_type_notifiable_id_index` (`notifiable_type`,`notifiable_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `picc_shops`
--
ALTER TABLE `picc_shops`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pre_products`
--
ALTER TABLE `pre_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pro_images`
--
ALTER TABLE `pro_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `request_bloods`
--
ALTER TABLE `request_bloods`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shops`
--
ALTER TABLE `shops`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `site_cuses`
--
ALTER TABLE `site_cuses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `site_pros`
--
ALTER TABLE `site_pros`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slide__shops`
--
ALTER TABLE `slide__shops`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `socials`
--
ALTER TABLE `socials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_cates`
--
ALTER TABLE `sub_cates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_cats`
--
ALTER TABLE `sub_cats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `s_e_o_s`
--
ALTER TABLE `s_e_o_s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `thanas`
--
ALTER TABLE `thanas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `types`
--
ALTER TABLE `types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `video_shops`
--
ALTER TABLE `video_shops`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `zillas`
--
ALTER TABLE `zillas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addresses`
--
ALTER TABLE `addresses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `appointment_mails`
--
ALTER TABLE `appointment_mails`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `article_images`
--
ALTER TABLE `article_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `article_videos`
--
ALTER TABLE `article_videos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `campaigns`
--
ALTER TABLE `campaigns`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `covers`
--
ALTER TABLE `covers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `f_a_q_s`
--
ALTER TABLE `f_a_q_s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `home_mails`
--
ALTER TABLE `home_mails`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `leads`
--
ALTER TABLE `leads`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `picc_shops`
--
ALTER TABLE `picc_shops`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pre_products`
--
ALTER TABLE `pre_products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=327;

--
-- AUTO_INCREMENT for table `pro_images`
--
ALTER TABLE `pro_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `request_bloods`
--
ALTER TABLE `request_bloods`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `role_user`
--
ALTER TABLE `role_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `shops`
--
ALTER TABLE `shops`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `site_cuses`
--
ALTER TABLE `site_cuses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `site_pros`
--
ALTER TABLE `site_pros`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `slide__shops`
--
ALTER TABLE `slide__shops`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `socials`
--
ALTER TABLE `socials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sub_cates`
--
ALTER TABLE `sub_cates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sub_cats`
--
ALTER TABLE `sub_cats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `s_e_o_s`
--
ALTER TABLE `s_e_o_s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `thanas`
--
ALTER TABLE `thanas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `types`
--
ALTER TABLE `types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `video_shops`
--
ALTER TABLE `video_shops`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `zillas`
--
ALTER TABLE `zillas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
