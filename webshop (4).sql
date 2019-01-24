-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 24, 2019 at 07:21 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cijena` int(10) UNSIGNED NOT NULL,
  `kolicina` int(10) UNSIGNED NOT NULL,
  `opis` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `slika` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `name`, `cijena`, `kolicina`, `opis`, `created_at`, `updated_at`, `user_id`, `slika`, `category_id`) VALUES
(15, 'Tipkovnica 1', 304, 73, '<p>Ovo je tipkovnica 1</p>', '2019-01-17 15:48:13', '2019-01-24 07:43:04', 1, '81p1o_fGJ5L._SL1500__1530204493.jpg', NULL),
(16, 'Miš 1', 20, 2, 'Ovo je miš 1', '2019-01-17 15:48:13', '2018-06-28 14:48:40', 1, '12351871_1530204520.jpg', 2),
(17, 'Laptop 1', 1500, 0, 'Ovo je laptop 1', '2019-01-17 15:48:13', '2019-01-24 07:39:34', 1, '2-in-1-laptops_1530204542.jpg', 4),
(18, 'Kućište 1', 1500, 2, 'Ovo je kućište 1', '2019-01-17 15:48:13', '2019-01-24 07:37:58', 1, '11-133-335-V16_1530204567.jpg', 5),
(19, 'Kućište 2', 900, 2, 'Ovo je kućište 2', '2019-01-17 15:48:13', '2018-06-28 14:49:57', 1, '11-147-237-01_1530204597.jpg', 5),
(20, 'Laptop 2', 1100, 0, 'Ovo je laptop 2', '2019-01-17 15:48:13', '2019-01-24 07:39:39', 1, '750_1530204626.jpg', 4),
(21, 'Miš 2', 15, 98, 'Ovo je miš 2', '2019-01-17 15:48:13', '2019-01-24 07:37:16', 1, '61YmYER3h5L._SL1280__1530204645.jpg', 2),
(22, 'Tipkovnica 2', 40, 99, 'Ovo je Tipkovnica 2', '2019-01-17 15:48:13', '2018-06-28 14:51:18', 1, 'Excellent_hero_1530204678.jpg', 1),
(23, 'Kućište 4', 2000, 0, 'Ovo je kućište 4', '2019-01-17 15:48:13', '2018-06-28 14:51:56', 1, 'F6KISQCJ1QOZBFV.LARGE_1530204716.jpg', 5),
(24, 'Tipkovnica 4', 18, 99, 'Ovo je tipkovnica 4', '2019-01-17 15:48:13', '2018-06-28 14:52:27', 1, 'ktype-640x353_1530204747.jpg', 1),
(25, 'Tipkovnica 5', 10, 3, 'Ovo je tipkovnica 5', '2019-01-17 15:48:13', '2018-06-28 14:52:49', 1, '352614-das-keyboard-4_1530204769.jpg', 1),
(26, 'Laptop 4', 800, 0, 'Ovo je laptop 4', '2019-01-17 15:48:13', '2018-06-28 14:53:22', 1, 'jkastrenakes_161222_1339_A_0018__1_.0.0_1530204802.jpeg', 4),
(27, 'Kućište 3', 500, 10, 'Ovo je kućište 3', '2019-01-17 15:48:13', '2018-06-28 14:53:56', 1, 'aigo-Crystal-pc-case-gaming-Tempered-Glass_1530204836.jpg', 5),
(28, 'Slušalice 1', 50, 10, 'Ovo su slušalice 1', '2019-01-17 15:48:13', '2018-06-28 14:55:30', 1, '5921000_rd_1530204930.jpg', 3),
(29, 'Zvučnik 1', 30, 5, 'Ovo je zvučnik 1', '2019-01-17 15:48:13', '2018-06-28 16:50:23', 1, 'SPA35A_94-IMS-en_IN_1530204951.jpg', 3),
(30, 'Kućište 5', 1200, 5, 'Ovo je kućište 5', '2019-01-17 15:48:13', '2018-07-01 10:18:24', 1, '71HLmbqxghL._SY450__1530204979.jpg', 5),
(31, 'Kućište 6', 1100, 0, 'Ovo je kućište 6', '2019-01-17 15:48:13', '2018-06-28 14:57:17', 1, '11-147-237-01_1530205037.jpg', 5),
(32, 'Monitor 1', 100, 2, 'Ovo je monitor 1', '2019-01-17 15:48:13', '2019-01-20 07:37:10', 1, 'flex_monitors_gaming_1530205095.jpg', 6),
(33, 'Monitor 2', 200, 0, 'Ovo je monitor 2', '2019-01-17 15:48:13', '2018-06-28 14:58:40', 1, 'flex_all_monitors5029703_1530205120.jpg', 6),
(34, 'Kućište 7', 600, 2, 'Ovo je kućište 7', '2019-01-17 15:48:13', '2019-01-20 07:37:04', 1, 'deepcool_tesseract_sw_tesseract_mid_tower_case_black_1251372_1530205146.jpg', 5);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Tipkovnice', NULL, NULL),
(2, 'Miševi', NULL, NULL),
(3, 'Zvučnici i slušalice', NULL, NULL),
(4, 'Laptopi', NULL, NULL),
(5, 'Kućišta', NULL, NULL),
(6, 'Monitori', NULL, NULL),
(7, 'test', '2019-01-24 07:35:40', '2019-01-24 07:35:40');

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
(3, '2018_04_24_062612_create_articles_table', 2),
(4, '2018_04_24_063046_create_articles_table', 3),
(5, '2018_04_24_063515_create_articles_table', 4),
(6, '2018_04_24_064142_create_articles_table', 5),
(7, '2018_04_24_074100_add_user_id_to_article', 6),
(8, '2018_04_28_134244_add_image_to_article', 7),
(9, '2018_05_08_060646_add_user_role', 8),
(10, '2018_05_10_060342_create_orders_table', 9),
(11, '2018_06_28_113017_create_categories_table', 10),
(12, '2018_06_28_113521_add_category_id_to_article', 11),
(13, '2016_06_01_000001_create_oauth_auth_codes_table', 12),
(14, '2016_06_01_000002_create_oauth_access_tokens_table', 12),
(15, '2016_06_01_000003_create_oauth_refresh_tokens_table', 12),
(16, '2016_06_01_000004_create_oauth_clients_table', 12),
(17, '2016_06_01_000005_create_oauth_personal_access_clients_table', 12),
(18, '2018_08_01_115943_adds_api_token_users_table', 12),
(19, '2019_01_20_104733_create_reminders_table', 13);

-- --------------------------------------------------------

--
-- Table structure for table `oauth_access_tokens`
--

CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `client_id` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_auth_codes`
--

CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_clients`
--

CREATE TABLE `oauth_clients` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `redirect` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_personal_access_clients`
--

CREATE TABLE `oauth_personal_access_clients` (
  `id` int(10) UNSIGNED NOT NULL,
  `client_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_refresh_tokens`
--

CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `cart` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `created_at`, `updated_at`, `user_id`, `cart`, `address`, `name`) VALUES
(1, '2018-05-10 04:25:29', '2018-05-10 04:25:29', 1, 'O:8:\"App\\Cart\":3:{s:5:\"items\";a:1:{i:4;a:3:{s:3:\"qty\";i:1;s:5:\"price\";i:500;s:4:\"item\";O:11:\"App\\Article\":26:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";N;s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:13:\"\0*\0attributes\";a:9:{s:2:\"id\";i:4;s:4:\"name\";s:8:\"Artikl 1\";s:6:\"cijena\";i:500;s:8:\"kolicina\";i:4;s:4:\"opis\";s:15:\"Ovo je Artikl 1\";s:10:\"created_at\";s:19:\"2018-04-28 13:58:55\";s:10:\"updated_at\";s:19:\"2018-04-28 13:58:55\";s:7:\"user_id\";i:1;s:5:\"slika\";s:61:\"16088-cheshire-cat-1920x1200-cartoon-wallpaper_1524923935.jpg\";}s:11:\"\0*\0original\";a:9:{s:2:\"id\";i:4;s:4:\"name\";s:8:\"Artikl 1\";s:6:\"cijena\";i:500;s:8:\"kolicina\";i:4;s:4:\"opis\";s:15:\"Ovo je Artikl 1\";s:10:\"created_at\";s:19:\"2018-04-28 13:58:55\";s:10:\"updated_at\";s:19:\"2018-04-28 13:58:55\";s:7:\"user_id\";i:1;s:5:\"slika\";s:61:\"16088-cheshire-cat-1920x1200-cartoon-wallpaper_1524923935.jpg\";}s:10:\"\0*\0changes\";a:0:{}s:8:\"\0*\0casts\";a:0:{}s:8:\"\0*\0dates\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:0:{}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}}}}s:8:\"totalQty\";i:1;s:10:\"totalPrice\";i:500;}', 'xyz', 'Ferdo Vukojević'),
(2, '2018-05-10 04:26:24', '2018-05-10 04:26:24', 1, 'O:8:\"App\\Cart\":3:{s:5:\"items\";a:2:{i:4;a:3:{s:3:\"qty\";i:2;s:5:\"price\";i:1000;s:4:\"item\";O:11:\"App\\Article\":26:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";N;s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:13:\"\0*\0attributes\";a:9:{s:2:\"id\";i:4;s:4:\"name\";s:8:\"Artikl 1\";s:6:\"cijena\";i:500;s:8:\"kolicina\";i:4;s:4:\"opis\";s:15:\"Ovo je Artikl 1\";s:10:\"created_at\";s:19:\"2018-04-28 13:58:55\";s:10:\"updated_at\";s:19:\"2018-04-28 13:58:55\";s:7:\"user_id\";i:1;s:5:\"slika\";s:61:\"16088-cheshire-cat-1920x1200-cartoon-wallpaper_1524923935.jpg\";}s:11:\"\0*\0original\";a:9:{s:2:\"id\";i:4;s:4:\"name\";s:8:\"Artikl 1\";s:6:\"cijena\";i:500;s:8:\"kolicina\";i:4;s:4:\"opis\";s:15:\"Ovo je Artikl 1\";s:10:\"created_at\";s:19:\"2018-04-28 13:58:55\";s:10:\"updated_at\";s:19:\"2018-04-28 13:58:55\";s:7:\"user_id\";i:1;s:5:\"slika\";s:61:\"16088-cheshire-cat-1920x1200-cartoon-wallpaper_1524923935.jpg\";}s:10:\"\0*\0changes\";a:0:{}s:8:\"\0*\0casts\";a:0:{}s:8:\"\0*\0dates\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:0:{}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}}}i:7;a:3:{s:3:\"qty\";i:1;s:5:\"price\";i:600;s:4:\"item\";O:11:\"App\\Article\":26:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";N;s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:13:\"\0*\0attributes\";a:9:{s:2:\"id\";i:7;s:4:\"name\";s:18:\"Artikl 3 bez slike\";s:6:\"cijena\";i:600;s:8:\"kolicina\";i:1;s:4:\"opis\";s:15:\"Ovo je artikl 3\";s:10:\"created_at\";s:19:\"2018-04-28 14:23:42\";s:10:\"updated_at\";s:19:\"2018-04-28 14:23:42\";s:7:\"user_id\";i:2;s:5:\"slika\";s:11:\"noimage.jpg\";}s:11:\"\0*\0original\";a:9:{s:2:\"id\";i:7;s:4:\"name\";s:18:\"Artikl 3 bez slike\";s:6:\"cijena\";i:600;s:8:\"kolicina\";i:1;s:4:\"opis\";s:15:\"Ovo je artikl 3\";s:10:\"created_at\";s:19:\"2018-04-28 14:23:42\";s:10:\"updated_at\";s:19:\"2018-04-28 14:23:42\";s:7:\"user_id\";i:2;s:5:\"slika\";s:11:\"noimage.jpg\";}s:10:\"\0*\0changes\";a:0:{}s:8:\"\0*\0casts\";a:0:{}s:8:\"\0*\0dates\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:0:{}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}}}}s:8:\"totalQty\";i:3;s:10:\"totalPrice\";i:1600;}', 'hraha', 'jeth'),
(3, '2018-05-10 04:49:55', '2018-05-10 04:49:55', 1, 'O:8:\"App\\Cart\":3:{s:5:\"items\";a:1:{i:4;a:3:{s:3:\"qty\";i:3;s:5:\"price\";i:1500;s:4:\"item\";O:11:\"App\\Article\":26:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";N;s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:13:\"\0*\0attributes\";a:9:{s:2:\"id\";i:4;s:4:\"name\";s:8:\"Artikl 1\";s:6:\"cijena\";i:500;s:8:\"kolicina\";i:4;s:4:\"opis\";s:15:\"Ovo je Artikl 1\";s:10:\"created_at\";s:19:\"2018-04-28 13:58:55\";s:10:\"updated_at\";s:19:\"2018-04-28 13:58:55\";s:7:\"user_id\";i:1;s:5:\"slika\";s:61:\"16088-cheshire-cat-1920x1200-cartoon-wallpaper_1524923935.jpg\";}s:11:\"\0*\0original\";a:9:{s:2:\"id\";i:4;s:4:\"name\";s:8:\"Artikl 1\";s:6:\"cijena\";i:500;s:8:\"kolicina\";i:4;s:4:\"opis\";s:15:\"Ovo je Artikl 1\";s:10:\"created_at\";s:19:\"2018-04-28 13:58:55\";s:10:\"updated_at\";s:19:\"2018-04-28 13:58:55\";s:7:\"user_id\";i:1;s:5:\"slika\";s:61:\"16088-cheshire-cat-1920x1200-cartoon-wallpaper_1524923935.jpg\";}s:10:\"\0*\0changes\";a:0:{}s:8:\"\0*\0casts\";a:0:{}s:8:\"\0*\0dates\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:0:{}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}}}}s:8:\"totalQty\";i:3;s:10:\"totalPrice\";i:1500;}', 'hrwaw', 'hwr'),
(4, '2018-05-10 04:54:39', '2018-05-10 04:54:39', 1, 'O:8:\"App\\Cart\":3:{s:5:\"items\";a:2:{i:4;a:3:{s:3:\"qty\";i:2;s:5:\"price\";i:1000;s:4:\"item\";O:11:\"App\\Article\":26:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";N;s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:13:\"\0*\0attributes\";a:9:{s:2:\"id\";i:4;s:4:\"name\";s:8:\"Artikl 1\";s:6:\"cijena\";i:500;s:8:\"kolicina\";i:4;s:4:\"opis\";s:15:\"Ovo je Artikl 1\";s:10:\"created_at\";s:19:\"2018-04-28 13:58:55\";s:10:\"updated_at\";s:19:\"2018-04-28 13:58:55\";s:7:\"user_id\";i:1;s:5:\"slika\";s:61:\"16088-cheshire-cat-1920x1200-cartoon-wallpaper_1524923935.jpg\";}s:11:\"\0*\0original\";a:9:{s:2:\"id\";i:4;s:4:\"name\";s:8:\"Artikl 1\";s:6:\"cijena\";i:500;s:8:\"kolicina\";i:4;s:4:\"opis\";s:15:\"Ovo je Artikl 1\";s:10:\"created_at\";s:19:\"2018-04-28 13:58:55\";s:10:\"updated_at\";s:19:\"2018-04-28 13:58:55\";s:7:\"user_id\";i:1;s:5:\"slika\";s:61:\"16088-cheshire-cat-1920x1200-cartoon-wallpaper_1524923935.jpg\";}s:10:\"\0*\0changes\";a:0:{}s:8:\"\0*\0casts\";a:0:{}s:8:\"\0*\0dates\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:0:{}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}}}i:7;a:3:{s:3:\"qty\";i:1;s:5:\"price\";i:600;s:4:\"item\";O:11:\"App\\Article\":26:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";N;s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:13:\"\0*\0attributes\";a:9:{s:2:\"id\";i:7;s:4:\"name\";s:18:\"Artikl 3 bez slike\";s:6:\"cijena\";i:600;s:8:\"kolicina\";i:1;s:4:\"opis\";s:15:\"Ovo je artikl 3\";s:10:\"created_at\";s:19:\"2018-04-28 14:23:42\";s:10:\"updated_at\";s:19:\"2018-04-28 14:23:42\";s:7:\"user_id\";i:2;s:5:\"slika\";s:11:\"noimage.jpg\";}s:11:\"\0*\0original\";a:9:{s:2:\"id\";i:7;s:4:\"name\";s:18:\"Artikl 3 bez slike\";s:6:\"cijena\";i:600;s:8:\"kolicina\";i:1;s:4:\"opis\";s:15:\"Ovo je artikl 3\";s:10:\"created_at\";s:19:\"2018-04-28 14:23:42\";s:10:\"updated_at\";s:19:\"2018-04-28 14:23:42\";s:7:\"user_id\";i:2;s:5:\"slika\";s:11:\"noimage.jpg\";}s:10:\"\0*\0changes\";a:0:{}s:8:\"\0*\0casts\";a:0:{}s:8:\"\0*\0dates\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:0:{}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}}}}s:8:\"totalQty\";i:3;s:10:\"totalPrice\";i:1600;}', 'hwgq', 'MArtic MArio'),
(5, '2018-06-28 14:14:40', '2018-06-28 14:14:40', 4, 'O:8:\"App\\Cart\":3:{s:5:\"items\";a:1:{i:14;a:3:{s:3:\"qty\";i:1;s:5:\"price\";i:133;s:4:\"item\";O:11:\"App\\Article\":26:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";N;s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:13:\"\0*\0attributes\";a:10:{s:2:\"id\";i:14;s:4:\"name\";s:16:\"Tipkovnica glupa\";s:6:\"cijena\";i:133;s:8:\"kolicina\";i:4;s:4:\"opis\";s:23:\"Ovo je glupa tipkovnica\";s:10:\"created_at\";s:19:\"2018-06-28 14:55:01\";s:10:\"updated_at\";s:19:\"2018-06-28 16:14:24\";s:7:\"user_id\";i:1;s:5:\"slika\";s:11:\"noimage.jpg\";s:11:\"category_id\";i:1;}s:11:\"\0*\0original\";a:10:{s:2:\"id\";i:14;s:4:\"name\";s:16:\"Tipkovnica glupa\";s:6:\"cijena\";i:133;s:8:\"kolicina\";i:4;s:4:\"opis\";s:23:\"Ovo je glupa tipkovnica\";s:10:\"created_at\";s:19:\"2018-06-28 14:55:01\";s:10:\"updated_at\";s:19:\"2018-06-28 16:14:24\";s:7:\"user_id\";i:1;s:5:\"slika\";s:11:\"noimage.jpg\";s:11:\"category_id\";i:1;}s:10:\"\0*\0changes\";a:2:{s:8:\"kolicina\";i:4;s:10:\"updated_at\";s:19:\"2018-06-28 16:14:24\";}s:8:\"\0*\0casts\";a:0:{}s:8:\"\0*\0dates\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:0:{}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}}}}s:8:\"totalQty\";i:1;s:10:\"totalPrice\";i:133;}', 'Test', 'Test'),
(6, '2019-01-24 07:38:50', '2019-01-24 07:38:50', 10, 'O:8:\"App\\Cart\":3:{s:5:\"items\";a:3:{i:21;a:3:{s:3:\"qty\";i:1;s:5:\"price\";i:15;s:4:\"item\";O:11:\"App\\Article\":26:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";N;s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:13:\"\0*\0attributes\";a:10:{s:2:\"id\";i:21;s:4:\"name\";s:6:\"Miš 2\";s:6:\"cijena\";i:15;s:8:\"kolicina\";i:98;s:4:\"opis\";s:13:\"Ovo je miš 2\";s:10:\"created_at\";s:19:\"2019-01-17 16:48:13\";s:10:\"updated_at\";s:19:\"2019-01-24 08:37:16\";s:7:\"user_id\";i:1;s:5:\"slika\";s:35:\"61YmYER3h5L._SL1280__1530204645.jpg\";s:11:\"category_id\";i:2;}s:11:\"\0*\0original\";a:10:{s:2:\"id\";i:21;s:4:\"name\";s:6:\"Miš 2\";s:6:\"cijena\";i:15;s:8:\"kolicina\";i:98;s:4:\"opis\";s:13:\"Ovo je miš 2\";s:10:\"created_at\";s:19:\"2019-01-17 16:48:13\";s:10:\"updated_at\";s:19:\"2019-01-24 08:37:16\";s:7:\"user_id\";i:1;s:5:\"slika\";s:35:\"61YmYER3h5L._SL1280__1530204645.jpg\";s:11:\"category_id\";i:2;}s:10:\"\0*\0changes\";a:2:{s:8:\"kolicina\";i:98;s:10:\"updated_at\";s:19:\"2019-01-24 08:37:16\";}s:8:\"\0*\0casts\";a:0:{}s:8:\"\0*\0dates\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:0:{}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}}}i:15;a:3:{s:3:\"qty\";i:1;s:5:\"price\";i:608;s:4:\"item\";O:11:\"App\\Article\":26:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";N;s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:13:\"\0*\0attributes\";a:10:{s:2:\"id\";i:15;s:4:\"name\";s:12:\"Tipkovnica 1\";s:6:\"cijena\";i:304;s:8:\"kolicina\";i:73;s:4:\"opis\";s:26:\"<p>Ovo je tipkovnica 1</p>\";s:10:\"created_at\";s:19:\"2019-01-17 16:48:13\";s:10:\"updated_at\";s:19:\"2019-01-24 08:37:18\";s:7:\"user_id\";i:1;s:5:\"slika\";s:35:\"81p1o_fGJ5L._SL1500__1530204493.jpg\";s:11:\"category_id\";i:7;}s:11:\"\0*\0original\";a:10:{s:2:\"id\";i:15;s:4:\"name\";s:12:\"Tipkovnica 1\";s:6:\"cijena\";i:304;s:8:\"kolicina\";i:73;s:4:\"opis\";s:26:\"<p>Ovo je tipkovnica 1</p>\";s:10:\"created_at\";s:19:\"2019-01-17 16:48:13\";s:10:\"updated_at\";s:19:\"2019-01-24 08:37:18\";s:7:\"user_id\";i:1;s:5:\"slika\";s:35:\"81p1o_fGJ5L._SL1500__1530204493.jpg\";s:11:\"category_id\";i:7;}s:10:\"\0*\0changes\";a:2:{s:8:\"kolicina\";i:73;s:10:\"updated_at\";s:19:\"2019-01-24 08:37:18\";}s:8:\"\0*\0casts\";a:0:{}s:8:\"\0*\0dates\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:0:{}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}}}i:18;a:3:{s:3:\"qty\";i:1;s:5:\"price\";i:1500;s:4:\"item\";O:11:\"App\\Article\":26:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";N;s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:13:\"\0*\0attributes\";a:10:{s:2:\"id\";i:18;s:4:\"name\";s:11:\"Kućište 1\";s:6:\"cijena\";i:1500;s:8:\"kolicina\";i:2;s:4:\"opis\";s:18:\"Ovo je kućište 1\";s:10:\"created_at\";s:19:\"2019-01-17 16:48:13\";s:10:\"updated_at\";s:19:\"2019-01-24 08:37:58\";s:7:\"user_id\";i:1;s:5:\"slika\";s:29:\"11-133-335-V16_1530204567.jpg\";s:11:\"category_id\";i:5;}s:11:\"\0*\0original\";a:10:{s:2:\"id\";i:18;s:4:\"name\";s:11:\"Kućište 1\";s:6:\"cijena\";i:1500;s:8:\"kolicina\";i:2;s:4:\"opis\";s:18:\"Ovo je kućište 1\";s:10:\"created_at\";s:19:\"2019-01-17 16:48:13\";s:10:\"updated_at\";s:19:\"2019-01-24 08:37:58\";s:7:\"user_id\";i:1;s:5:\"slika\";s:29:\"11-133-335-V16_1530204567.jpg\";s:11:\"category_id\";i:5;}s:10:\"\0*\0changes\";a:2:{s:8:\"kolicina\";i:2;s:10:\"updated_at\";s:19:\"2019-01-24 08:37:58\";}s:8:\"\0*\0casts\";a:0:{}s:8:\"\0*\0dates\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:0:{}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}}}}s:8:\"totalQty\";i:3;s:10:\"totalPrice\";i:1819;}', 'test@gmail.com', 'Ferdo Vukojević'),
(7, '2019-01-24 07:40:08', '2019-01-24 07:40:08', 10, 'O:8:\"App\\Cart\":3:{s:5:\"items\";a:2:{i:17;a:3:{s:3:\"qty\";i:1;s:5:\"price\";i:1500;s:4:\"item\";O:11:\"App\\Article\":26:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";N;s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:13:\"\0*\0attributes\";a:10:{s:2:\"id\";i:17;s:4:\"name\";s:8:\"Laptop 1\";s:6:\"cijena\";i:1500;s:8:\"kolicina\";i:0;s:4:\"opis\";s:15:\"Ovo je laptop 1\";s:10:\"created_at\";s:19:\"2019-01-17 16:48:13\";s:10:\"updated_at\";s:19:\"2019-01-24 08:39:34\";s:7:\"user_id\";i:1;s:5:\"slika\";s:29:\"2-in-1-laptops_1530204542.jpg\";s:11:\"category_id\";i:4;}s:11:\"\0*\0original\";a:10:{s:2:\"id\";i:17;s:4:\"name\";s:8:\"Laptop 1\";s:6:\"cijena\";i:1500;s:8:\"kolicina\";i:0;s:4:\"opis\";s:15:\"Ovo je laptop 1\";s:10:\"created_at\";s:19:\"2019-01-17 16:48:13\";s:10:\"updated_at\";s:19:\"2019-01-24 08:39:34\";s:7:\"user_id\";i:1;s:5:\"slika\";s:29:\"2-in-1-laptops_1530204542.jpg\";s:11:\"category_id\";i:4;}s:10:\"\0*\0changes\";a:2:{s:8:\"kolicina\";i:0;s:10:\"updated_at\";s:19:\"2019-01-24 08:39:34\";}s:8:\"\0*\0casts\";a:0:{}s:8:\"\0*\0dates\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:0:{}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}}}i:20;a:3:{s:3:\"qty\";i:1;s:5:\"price\";i:1100;s:4:\"item\";O:11:\"App\\Article\":26:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";N;s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:13:\"\0*\0attributes\";a:10:{s:2:\"id\";i:20;s:4:\"name\";s:8:\"Laptop 2\";s:6:\"cijena\";i:1100;s:8:\"kolicina\";i:0;s:4:\"opis\";s:15:\"Ovo je laptop 2\";s:10:\"created_at\";s:19:\"2019-01-17 16:48:13\";s:10:\"updated_at\";s:19:\"2019-01-24 08:39:39\";s:7:\"user_id\";i:1;s:5:\"slika\";s:18:\"750_1530204626.jpg\";s:11:\"category_id\";i:4;}s:11:\"\0*\0original\";a:10:{s:2:\"id\";i:20;s:4:\"name\";s:8:\"Laptop 2\";s:6:\"cijena\";i:1100;s:8:\"kolicina\";i:0;s:4:\"opis\";s:15:\"Ovo je laptop 2\";s:10:\"created_at\";s:19:\"2019-01-17 16:48:13\";s:10:\"updated_at\";s:19:\"2019-01-24 08:39:39\";s:7:\"user_id\";i:1;s:5:\"slika\";s:18:\"750_1530204626.jpg\";s:11:\"category_id\";i:4;}s:10:\"\0*\0changes\";a:2:{s:8:\"kolicina\";i:0;s:10:\"updated_at\";s:19:\"2019-01-24 08:39:39\";}s:8:\"\0*\0casts\";a:0:{}s:8:\"\0*\0dates\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:0:{}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}}}}s:8:\"totalQty\";i:2;s:10:\"totalPrice\";i:2600;}', 'GEWGQGQ', 'Ferdo Vukojević');

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
-- Table structure for table `reminders`
--

CREATE TABLE `reminders` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reminders`
--

INSERT INTO `reminders` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'napraviti ovo ono', '2019-01-20 09:54:53', '2019-01-20 09:54:53'),
(2, 'Moj prvi podsjednik', '2019-01-20 09:55:00', '2019-01-20 09:55:00'),
(3, 'qtqtqtq3', '2019-01-22 19:17:15', '2019-01-22 19:17:15'),
(4, 'popraviti kategorije', '2019-01-22 19:23:29', '2019-01-22 19:23:29');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `slika` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'no_image.jpg',
  `api_token` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `role`, `slika`, `api_token`) VALUES
(1, 'Admin admin', 'admin@gmail.com', '$2y$10$XM8G91l3F79qQzxKjZWfk.QsIGgPESeSrCJxatm6YgVVI1gVgRT0i', 'lMrpYerpShLuBfaeeND5h0JyAapBGvd4N7Q1NjRDKrNzCy7UE4W6nJxvMVug', '2019-01-17 15:48:13', '2019-01-20 09:28:19', 'admin', '17241-200_1547973373.png', NULL),
(4, 'Ivo Ivić', 'ivo@gmail.com', '$2y$10$vxxHwSWDRAlWycvDgLFamukdJU91WF3mBuZdGx1N/eBu5Zn0dnCt.', 'kIjlzIISAf9uVfCtuU2Z4SWbUXdN2mJ1zDoNvWd4DfHd8OM6JSemtlQcLTB6', '2019-01-17 15:48:13', '2019-01-20 09:29:45', 'user', '', NULL),
(6, 'John Doe', 'john@gmail.com', '$2y$10$XM4ooN36SxfovL56pq62C.iZlJyAFxyNGQE9BBz2E8JlvCvOdZLPy', 'Y32ACxj7rFuE3PvJL7qbiojJ8RRg7OGDtaFMXzqtDSIx41QugtB7dXvr23Xj', '2019-01-17 15:48:13', '2018-07-01 10:51:46', 'user', '', NULL),
(9, 'Uredeni korisnik', 'korisnik@gmail.com', '$2y$10$378kEzENSu3ZCQ1Mr3mTOujdbfp7uQPQteHw9ny1tkhZQb2gQ.4Mi', 'ysvo3It4wHSRlZYrxyPmX5QULtVst9WN8BQw2Cd7ofV2j6vzmda9Zcc6e7HS', '2019-01-17 15:48:13', '2019-01-20 09:45:23', 'user', 'no_image.jpg', NULL),
(10, 'testni korisnik', 'testni@gmail.com', '$2y$10$MEUsScQd4O/PR2kiQDOOh.Dqixp7mxbJ7l1wc9awrKRcRnaqetkEO', 'BVuWO0GXz7DBaiIa8e5VhRvy58YCZXHkhUkXqBR5TZpV0ewoBgpPG2gdenzH', '2019-01-24 07:37:02', '2019-01-24 07:37:02', 'user', 'no_image.jpg', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_access_tokens`
--
ALTER TABLE `oauth_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_access_tokens_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_auth_codes`
--
ALTER TABLE `oauth_auth_codes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_clients_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_personal_access_clients_client_id_index` (`client_id`);

--
-- Indexes for table `oauth_refresh_tokens`
--
ALTER TABLE `oauth_refresh_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`);

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
-- Indexes for table `reminders`
--
ALTER TABLE `reminders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_api_token_unique` (`api_token`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `reminders`
--
ALTER TABLE `reminders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
