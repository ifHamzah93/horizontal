-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 26, 2020 at 06:32 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `skote`
--

-- --------------------------------------------------------

--
-- Table structure for table `dyn_menu`
--

CREATE TABLE `dyn_menu` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link_type` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `page_id` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `module_name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `uri` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dyn_group_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `target` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_parent` smallint(6) DEFAULT NULL,
  `show_menu` varchar(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dyn_menu`
--

INSERT INTO `dyn_menu` (`id`, `title`, `icon`, `link_type`, `page_id`, `module_name`, `url`, `uri`, `dyn_group_id`, `position`, `target`, `parent_id`, `is_parent`, `show_menu`, `created_at`, `updated_at`) VALUES
(1, 'Master', NULL, NULL, NULL, NULL, '#', NULL, NULL, NULL, NULL, '0', 1, NULL, '2020-07-18 08:28:44', '2020-07-18 08:31:42'),
(2, 'Users', NULL, NULL, NULL, NULL, 'master-users', NULL, NULL, NULL, NULL, '1', 1, NULL, '2020-07-18 10:35:04', '2020-07-18 10:35:04'),
(3, 'Roles', NULL, NULL, NULL, NULL, 'master-roles', NULL, NULL, NULL, NULL, '1', NULL, NULL, '2020-07-18 10:35:25', '2020-07-18 10:35:25'),
(4, 'Menu', NULL, NULL, NULL, NULL, 'master-menu', NULL, NULL, NULL, NULL, '1', NULL, NULL, '2020-07-18 10:35:49', '2020-07-18 10:35:49'),
(5, 'tes', NULL, NULL, NULL, NULL, 'tes', NULL, NULL, NULL, NULL, '2', 1, NULL, '2020-07-18 11:03:06', '2020-07-18 11:03:06'),
(6, 'tes 2', NULL, NULL, NULL, NULL, 'tes2', NULL, NULL, NULL, NULL, '5', NULL, NULL, '2020-07-19 00:57:59', '2020-07-19 00:57:59'),
(7, 'tes 3', NULL, NULL, NULL, NULL, 'tes3', NULL, NULL, NULL, NULL, '2', NULL, NULL, '2020-07-19 00:59:03', '2020-07-19 01:00:53'),
(8, 'Dashboards', NULL, NULL, NULL, NULL, '#', NULL, NULL, NULL, NULL, '0', 1, NULL, '2020-07-19 01:08:53', '2020-07-19 01:08:53'),
(9, 'Default', NULL, NULL, NULL, NULL, 'index', NULL, NULL, NULL, NULL, '8', NULL, NULL, '2020-07-19 01:09:11', '2020-07-19 01:09:11'),
(10, 'Saas', NULL, NULL, NULL, NULL, 'dashboard-saas', NULL, NULL, NULL, NULL, '8', NULL, NULL, '2020-07-19 01:09:49', '2020-07-19 01:09:49'),
(11, 'Crypto', NULL, NULL, NULL, NULL, 'dashboard-crypto', NULL, NULL, NULL, NULL, '8', NULL, NULL, '2020-07-19 01:10:44', '2020-07-19 01:10:44'),
(12, 'UI Elements', NULL, NULL, NULL, NULL, '#', NULL, NULL, NULL, NULL, '0', NULL, NULL, '2020-07-19 03:34:56', '2020-07-19 03:34:56'),
(13, 'Alerts', NULL, NULL, NULL, NULL, 'ui-alerts', NULL, NULL, NULL, NULL, '12', NULL, NULL, '2020-07-19 03:35:20', '2020-07-19 03:35:20'),
(14, 'ui-buttons', NULL, NULL, NULL, NULL, 'Buttons', NULL, NULL, NULL, NULL, '12', NULL, NULL, '2020-07-19 03:35:45', '2020-07-19 03:35:45'),
(15, 'Cards', NULL, NULL, NULL, NULL, 'ui-cards', NULL, NULL, NULL, NULL, '12', NULL, NULL, '2020-07-19 03:36:29', '2020-07-19 03:36:29'),
(16, 'Carousel', NULL, NULL, NULL, NULL, 'ui-carousel', NULL, NULL, NULL, NULL, '12', NULL, NULL, '2020-07-19 03:37:30', '2020-07-19 03:37:30'),
(17, 'Dropdowns', NULL, NULL, NULL, NULL, 'ui-dropdowns', NULL, NULL, NULL, NULL, '12', NULL, NULL, '2020-07-19 03:40:31', '2020-07-19 03:40:31'),
(18, 'Grid', NULL, NULL, NULL, NULL, 'ui-grid', NULL, NULL, NULL, NULL, '12', NULL, NULL, '2020-07-19 03:41:00', '2020-07-19 03:41:00'),
(19, 'Images', NULL, NULL, NULL, NULL, 'ui-images', NULL, NULL, NULL, NULL, '12', NULL, NULL, '2020-07-19 03:41:18', '2020-07-19 03:41:18'),
(20, 'Lightbox', NULL, NULL, NULL, NULL, 'ui-lightbox', NULL, NULL, NULL, NULL, '12', NULL, NULL, '2020-07-19 03:41:36', '2020-07-19 03:41:36'),
(21, 'Modals', NULL, NULL, NULL, NULL, 'ui-modals', NULL, NULL, NULL, NULL, '12', NULL, NULL, '2020-07-19 03:41:51', '2020-07-19 03:42:07'),
(22, 'Range Slider', NULL, NULL, NULL, NULL, 'ui-rangeslider', NULL, NULL, NULL, NULL, '12', NULL, NULL, '2020-07-19 03:42:29', '2020-07-19 03:42:29'),
(23, 'Session Timeout', NULL, NULL, NULL, NULL, 'ui-session-timeout', NULL, NULL, NULL, NULL, '12', NULL, NULL, '2020-07-19 03:42:44', '2020-07-19 03:42:51'),
(24, 'Progress Bars', NULL, NULL, NULL, NULL, 'ui-progressbars', NULL, NULL, NULL, NULL, '12', NULL, NULL, '2020-07-19 03:43:14', '2020-07-19 03:43:14'),
(25, 'ui-sweet-alert', NULL, NULL, NULL, NULL, 'Sweet-Alert', NULL, NULL, NULL, NULL, '12', NULL, NULL, '2020-07-19 03:43:37', '2020-07-19 03:43:37'),
(26, 'Tabs & Accordions', NULL, NULL, NULL, NULL, 'ui-tabs-accordions', NULL, NULL, NULL, NULL, '12', NULL, NULL, '2020-07-19 03:44:51', '2020-07-19 03:44:51'),
(27, 'Typography', NULL, NULL, NULL, NULL, 'ui-typography', NULL, NULL, NULL, NULL, '12', NULL, NULL, '2020-07-19 03:45:32', '2020-07-19 03:45:32'),
(28, 'Video', NULL, NULL, NULL, NULL, 'ui-video', NULL, NULL, NULL, NULL, '12', NULL, NULL, '2020-07-19 03:45:52', '2020-07-19 03:45:52'),
(29, 'General', NULL, NULL, NULL, NULL, 'ui-general', NULL, NULL, NULL, NULL, '12', NULL, NULL, '2020-07-19 03:46:11', '2020-07-19 03:46:11'),
(30, 'Colors', NULL, NULL, NULL, NULL, 'ui-colors', NULL, NULL, NULL, NULL, '12', NULL, NULL, '2020-07-19 03:46:34', '2020-07-19 03:46:34'),
(31, 'Rating', NULL, NULL, NULL, NULL, 'ui-rating', NULL, NULL, NULL, NULL, '12', NULL, NULL, '2020-07-19 03:46:51', '2020-07-19 03:46:51'),
(32, 'Notifications', NULL, NULL, NULL, NULL, 'ui-notifications', NULL, NULL, NULL, NULL, '12', NULL, NULL, '2020-07-19 03:47:06', '2020-07-19 03:47:06'),
(33, 'Image Cropper', NULL, NULL, NULL, NULL, 'ui-image-cropper', NULL, NULL, NULL, NULL, '12', NULL, NULL, '2020-07-19 03:47:26', '2020-07-19 03:47:26'),
(34, 'Apps', NULL, NULL, NULL, NULL, '#', NULL, NULL, NULL, NULL, '0', NULL, NULL, '2020-07-19 04:01:30', '2020-07-19 04:01:30'),
(35, 'Calendar', NULL, NULL, NULL, NULL, 'calendar', NULL, NULL, NULL, NULL, '34', NULL, NULL, '2020-07-19 04:01:50', '2020-07-19 04:01:50'),
(36, 'Chat', NULL, NULL, NULL, NULL, 'chat', NULL, NULL, NULL, NULL, '34', NULL, NULL, '2020-07-19 04:02:14', '2020-07-19 04:02:14'),
(37, 'Email', NULL, NULL, NULL, NULL, '#', NULL, NULL, NULL, NULL, '34', NULL, NULL, '2020-07-19 04:03:12', '2020-07-19 04:03:12'),
(38, 'Inbox', NULL, NULL, NULL, NULL, 'email-inbox', NULL, NULL, NULL, NULL, '37', NULL, NULL, '2020-07-19 04:03:35', '2020-07-19 04:03:35'),
(39, 'Read Email', NULL, NULL, NULL, NULL, 'email-read', NULL, NULL, NULL, NULL, '37', NULL, NULL, '2020-07-19 04:03:51', '2020-07-19 04:03:51'),
(40, 'Ecommerce', NULL, NULL, NULL, NULL, '#', NULL, NULL, NULL, NULL, '34', NULL, NULL, '2020-07-19 04:05:25', '2020-07-19 04:05:25'),
(41, 'Products', NULL, NULL, NULL, NULL, 'ecommerce-products', NULL, NULL, NULL, NULL, '40', NULL, NULL, '2020-07-19 04:05:50', '2020-07-19 04:05:50'),
(42, 'Product Detail', NULL, NULL, NULL, NULL, 'ecommerce-product-detail', NULL, NULL, NULL, NULL, '40', NULL, NULL, '2020-07-19 04:06:11', '2020-07-19 04:06:11'),
(43, 'Orders', NULL, NULL, NULL, NULL, 'ecommerce-orders', NULL, NULL, NULL, NULL, '40', NULL, NULL, '2020-07-19 04:06:37', '2020-07-19 04:06:37'),
(44, 'Customers', NULL, NULL, NULL, NULL, 'ecommerce-customers', NULL, NULL, NULL, NULL, '40', NULL, NULL, '2020-07-19 04:07:32', '2020-07-19 04:07:32'),
(45, 'Cart', NULL, NULL, NULL, NULL, 'ecommerce-cart', NULL, NULL, NULL, NULL, '40', NULL, NULL, '2020-07-19 04:07:47', '2020-07-19 04:07:47'),
(46, 'Checkout', NULL, NULL, NULL, NULL, 'ecommerce-checkout', NULL, NULL, NULL, NULL, '40', NULL, NULL, '2020-07-19 04:08:05', '2020-07-19 04:08:05'),
(47, 'Shops', NULL, NULL, NULL, NULL, 'ecommerce-shops', NULL, NULL, NULL, NULL, '40', NULL, NULL, '2020-07-19 04:08:27', '2020-07-19 04:08:27'),
(48, 'Add Product', NULL, NULL, NULL, NULL, 'ecommerce-add-product', NULL, NULL, NULL, NULL, '40', NULL, NULL, '2020-07-19 04:08:46', '2020-07-19 04:08:46'),
(49, 'kategori', NULL, NULL, NULL, NULL, 'master-kategori', NULL, NULL, NULL, NULL, '1', NULL, NULL, '2020-07-19 09:53:16', '2020-07-19 09:53:16'),
(50, 'Produk', NULL, NULL, NULL, NULL, 'master-produk', NULL, NULL, NULL, NULL, '1', NULL, NULL, '2020-07-25 07:17:00', '2020-07-25 07:17:00');

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
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(2, 'WOMEN', '2020-07-20 06:07:42', '2020-07-26 07:48:35'),
(3, 'MEN', '2020-07-20 06:07:48', '2020-07-26 07:48:45'),
(4, 'KIDS', '2020-07-20 06:07:52', '2020-07-26 07:49:05'),
(5, 'accessories', '2020-07-26 07:50:39', '2020-07-26 07:50:39'),
(6, 'sale off', '2020-07-26 07:51:01', '2020-07-26 07:51:01');

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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_01_23_142838_create_menu_table', 2),
(5, '2020_01_23_143258_create_otori_table', 2),
(6, '2014_10_12_000000_create_users_table', 3),
(7, '2020_01_23_144147_create_role_table', 4),
(8, '2014_10_12_000000_create_kategori_table', 5),
(9, '2014_10_12_000000_create_produk_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `otori`
--

CREATE TABLE `otori` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `menu_id` bigint(20) NOT NULL,
  `show_menu` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `otori`
--

INSERT INTO `otori` (`id`, `user_id`, `menu_id`, `show_menu`, `created_at`, `updated_at`) VALUES
(246, 1, 1, 1, NULL, NULL),
(247, 1, 2, 1, NULL, NULL),
(248, 1, 3, 1, NULL, NULL),
(249, 1, 4, 1, NULL, NULL),
(250, 1, 5, 1, NULL, NULL),
(251, 1, 6, 1, NULL, NULL),
(252, 1, 7, 1, NULL, NULL),
(253, 1, 8, 1, NULL, NULL),
(254, 1, 9, 1, NULL, NULL),
(255, 1, 10, 1, NULL, NULL),
(256, 1, 11, 1, NULL, NULL),
(257, 1, 12, 1, NULL, NULL),
(258, 1, 13, 1, NULL, NULL),
(259, 1, 14, 1, NULL, NULL),
(260, 1, 15, 1, NULL, NULL),
(261, 1, 16, 1, NULL, NULL),
(262, 1, 17, 1, NULL, NULL),
(263, 1, 18, 1, NULL, NULL),
(264, 1, 19, 1, NULL, NULL),
(265, 1, 20, 1, NULL, NULL),
(266, 1, 21, 1, NULL, NULL),
(267, 1, 22, 1, NULL, NULL),
(268, 1, 23, 1, NULL, NULL),
(269, 1, 24, 1, NULL, NULL),
(270, 1, 25, 1, NULL, NULL),
(271, 1, 26, 1, NULL, NULL),
(272, 1, 27, 1, NULL, NULL),
(273, 1, 28, 1, NULL, NULL),
(274, 1, 29, 1, NULL, NULL),
(275, 1, 30, 1, NULL, NULL),
(276, 1, 31, 1, NULL, NULL),
(277, 1, 32, 1, NULL, NULL),
(278, 1, 33, 1, NULL, NULL),
(279, 1, 34, 1, NULL, NULL),
(280, 1, 35, 1, NULL, NULL),
(281, 1, 36, 1, NULL, NULL),
(282, 1, 37, 1, NULL, NULL),
(283, 1, 38, 1, NULL, NULL),
(284, 1, 39, 1, NULL, NULL),
(285, 1, 40, 1, NULL, NULL),
(286, 1, 41, 1, NULL, NULL),
(287, 1, 42, 1, NULL, NULL),
(288, 1, 43, 1, NULL, NULL),
(289, 1, 44, 1, NULL, NULL),
(290, 1, 45, 1, NULL, NULL),
(291, 1, 46, 1, NULL, NULL),
(292, 1, 47, 1, NULL, NULL),
(293, 1, 48, 1, NULL, NULL),
(294, 1, 49, 1, NULL, NULL),
(295, 1, 50, 1, NULL, NULL);

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
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` double NOT NULL,
  `diskon` double NOT NULL,
  `stok` int(6) NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gambar2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gambar3` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gambar4` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idkategori` smallint(6) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `nama`, `harga`, `diskon`, `stok`, `deskripsi`, `gambar1`, `gambar2`, `gambar3`, `gambar4`, `status`, `idkategori`, `created_at`, `updated_at`) VALUES
(4, 'Product Mehoi', 10000, 2, 1, 'Pri quas audiam virtute ut, case utamur fuisset eam ut, iisque accommodare an eam. Reque blandit qui eu, cu vix nonumy volumus. Legendos intellegam id usu, vide oporteat vix eu, id illud principes has. Nam tempor utamur gubergren no. Ex soleat habemus usu, te nec eligendi deserunt vituperata. Natum consulatu vel ea, duo cetero repudiare efficiendi cu.', '159577534527702.jpg', '159577535140502.jpg', '159577535369402.jpg', '159577535609702.jpg', 'aktif-terjual', 2, '2020-07-20 10:30:28', '2020-07-26 07:55:57'),
(7, 'Product Mehoi', 10000, 2, 1, 'Pri quas audiam virtute ut, case utamur fuisset eam ut, iisque accommodare an eam. Reque blandit qui eu, cu vix nonumy volumus. Legendos intellegam id usu, vide oporteat vix eu, id illud principes has. Nam tempor utamur gubergren no. Ex soleat habemus usu, te nec eligendi deserunt vituperata. Natum consulatu vel ea, duo cetero repudiare efficiendi cu.', '159577534527702.jpg', '159577535140502.jpg', '159577535369402.jpg', '159577535609702.jpg', 'aktif-terjual', 2, '2020-07-20 10:30:28', '2020-07-26 07:55:57'),
(8, 'Product Mehoi', 10000, 2, 1, 'Pri quas audiam virtute ut, case utamur fuisset eam ut, iisque accommodare an eam. Reque blandit qui eu, cu vix nonumy volumus. Legendos intellegam id usu, vide oporteat vix eu, id illud principes has. Nam tempor utamur gubergren no. Ex soleat habemus usu, te nec eligendi deserunt vituperata. Natum consulatu vel ea, duo cetero repudiare efficiendi cu.', '159577534527702.jpg', '159577535140502.jpg', '159577535369402.jpg', '159577535609702.jpg', 'aktif-terjual', 2, '2020-07-20 10:30:28', '2020-07-26 07:55:57'),
(9, 'Product Mehoi', 10000, 2, 1, 'Pri quas audiam virtute ut, case utamur fuisset eam ut, iisque accommodare an eam. Reque blandit qui eu, cu vix nonumy volumus. Legendos intellegam id usu, vide oporteat vix eu, id illud principes has. Nam tempor utamur gubergren no. Ex soleat habemus usu, te nec eligendi deserunt vituperata. Natum consulatu vel ea, duo cetero repudiare efficiendi cu.', '159577534527702.jpg', '159577535140502.jpg', '159577535369402.jpg', '159577535609702.jpg', 'aktif-terjual', 2, '2020-07-20 10:30:28', '2020-07-26 07:55:57'),
(10, 'Product Mehoi', 10000, 2, 1, 'Pri quas audiam virtute ut, case utamur fuisset eam ut, iisque accommodare an eam. Reque blandit qui eu, cu vix nonumy volumus. Legendos intellegam id usu, vide oporteat vix eu, id illud principes has. Nam tempor utamur gubergren no. Ex soleat habemus usu, te nec eligendi deserunt vituperata. Natum consulatu vel ea, duo cetero repudiare efficiendi cu.', '159577534527702.jpg', '159577535140502.jpg', '159577535369402.jpg', '159577535609702.jpg', 'aktif-terjual', 2, '2020-07-20 10:30:28', '2020-07-26 07:55:57'),
(11, 'Product Mehoi', 10000, 2, 1, 'Pri quas audiam virtute ut, case utamur fuisset eam ut, iisque accommodare an eam. Reque blandit qui eu, cu vix nonumy volumus. Legendos intellegam id usu, vide oporteat vix eu, id illud principes has. Nam tempor utamur gubergren no. Ex soleat habemus usu, te nec eligendi deserunt vituperata. Natum consulatu vel ea, duo cetero repudiare efficiendi cu.', '159577534527702.jpg', '159577535140502.jpg', '159577535369402.jpg', '159577535609702.jpg', 'aktif-terjual', 2, '2020-07-20 10:30:28', '2020-07-26 07:55:57'),
(12, 'Product Mehoi', 10000, 2, 1, 'Pri quas audiam virtute ut, case utamur fuisset eam ut, iisque accommodare an eam. Reque blandit qui eu, cu vix nonumy volumus. Legendos intellegam id usu, vide oporteat vix eu, id illud principes has. Nam tempor utamur gubergren no. Ex soleat habemus usu, te nec eligendi deserunt vituperata. Natum consulatu vel ea, duo cetero repudiare efficiendi cu.', '159577534527702.jpg', '159577535140502.jpg', '159577535369402.jpg', '159577535609702.jpg', 'aktif-terjual', 2, '2020-07-20 10:30:28', '2020-07-26 07:55:57'),
(13, 'Product Mehoi', 10000, 2, 1, 'Pri quas audiam virtute ut, case utamur fuisset eam ut, iisque accommodare an eam. Reque blandit qui eu, cu vix nonumy volumus. Legendos intellegam id usu, vide oporteat vix eu, id illud principes has. Nam tempor utamur gubergren no. Ex soleat habemus usu, te nec eligendi deserunt vituperata. Natum consulatu vel ea, duo cetero repudiare efficiendi cu.', '159577534527702.jpg', '159577535140502.jpg', '159577535369402.jpg', '159577535609702.jpg', 'aktif-terjual', 2, '2020-07-20 10:30:28', '2020-07-26 07:55:57'),
(14, 'Product Keren', 10000, 2, 1, 'Pri quas audiam virtute ut, case utamur fuisset eam ut, iisque accommodare an eam. Reque blandit qui eu, cu vix nonumy volumus. Legendos intellegam id usu, vide oporteat vix eu, id illud principes has. Nam tempor utamur gubergren no. Ex soleat habemus usu, te nec eligendi deserunt vituperata. Natum consulatu vel ea, duo cetero repudiare efficiendi cu.', '159577585868503.jpg', '159577586160303.jpg', '159577586426203.jpg', '159577586635503.jpg', 'aktif-terjual', 3, '2020-07-20 10:30:28', '2020-07-26 08:04:37'),
(15, 'Product Keren', 10000, 2, 1, 'Pri quas audiam virtute ut, case utamur fuisset eam ut, iisque accommodare an eam. Reque blandit qui eu, cu vix nonumy volumus. Legendos intellegam id usu, vide oporteat vix eu, id illud principes has. Nam tempor utamur gubergren no. Ex soleat habemus usu, te nec eligendi deserunt vituperata. Natum consulatu vel ea, duo cetero repudiare efficiendi cu.', '159577585868503.jpg', '159577586160303.jpg', '159577586426203.jpg', '159577586635503.jpg', 'aktif-terjual', 3, '2020-07-20 10:30:28', '2020-07-26 08:04:37'),
(16, 'Product Keren', 10000, 2, 1, 'Pri quas audiam virtute ut, case utamur fuisset eam ut, iisque accommodare an eam. Reque blandit qui eu, cu vix nonumy volumus. Legendos intellegam id usu, vide oporteat vix eu, id illud principes has. Nam tempor utamur gubergren no. Ex soleat habemus usu, te nec eligendi deserunt vituperata. Natum consulatu vel ea, duo cetero repudiare efficiendi cu.', '159577585868503.jpg', '159577586160303.jpg', '159577586426203.jpg', '159577586635503.jpg', 'aktif-terjual', 3, '2020-07-20 10:30:28', '2020-07-26 08:04:37'),
(17, 'Product Keren', 10000, 2, 1, 'Pri quas audiam virtute ut, case utamur fuisset eam ut, iisque accommodare an eam. Reque blandit qui eu, cu vix nonumy volumus. Legendos intellegam id usu, vide oporteat vix eu, id illud principes has. Nam tempor utamur gubergren no. Ex soleat habemus usu, te nec eligendi deserunt vituperata. Natum consulatu vel ea, duo cetero repudiare efficiendi cu.', '159577585868503.jpg', '159577586160303.jpg', '159577586426203.jpg', '159577586635503.jpg', 'aktif-terjual', 3, '2020-07-20 10:30:28', '2020-07-26 08:04:37'),
(18, 'Product Keren', 10000, 2, 1, 'Pri quas audiam virtute ut, case utamur fuisset eam ut, iisque accommodare an eam. Reque blandit qui eu, cu vix nonumy volumus. Legendos intellegam id usu, vide oporteat vix eu, id illud principes has. Nam tempor utamur gubergren no. Ex soleat habemus usu, te nec eligendi deserunt vituperata. Natum consulatu vel ea, duo cetero repudiare efficiendi cu.', '159577585868503.jpg', '159577586160303.jpg', '159577586426203.jpg', '159577586635503.jpg', 'aktif-terjual', 3, '2020-07-20 10:30:28', '2020-07-26 08:04:37'),
(19, 'Product Keren', 10000, 2, 1, 'Pri quas audiam virtute ut, case utamur fuisset eam ut, iisque accommodare an eam. Reque blandit qui eu, cu vix nonumy volumus. Legendos intellegam id usu, vide oporteat vix eu, id illud principes has. Nam tempor utamur gubergren no. Ex soleat habemus usu, te nec eligendi deserunt vituperata. Natum consulatu vel ea, duo cetero repudiare efficiendi cu.', '159577585868503.jpg', '159577586160303.jpg', '159577586426203.jpg', '159577586635503.jpg', 'aktif-terjual', 3, '2020-07-20 10:30:28', '2020-07-26 08:04:37'),
(20, 'Product Keren', 10000, 2, 1, 'Pri quas audiam virtute ut, case utamur fuisset eam ut, iisque accommodare an eam. Reque blandit qui eu, cu vix nonumy volumus. Legendos intellegam id usu, vide oporteat vix eu, id illud principes has. Nam tempor utamur gubergren no. Ex soleat habemus usu, te nec eligendi deserunt vituperata. Natum consulatu vel ea, duo cetero repudiare efficiendi cu.', '159577585868503.jpg', '159577586160303.jpg', '159577586426203.jpg', '159577586635503.jpg', 'aktif-terjual', 3, '2020-07-20 10:30:28', '2020-07-26 08:04:37'),
(21, 'Product Keren', 10000, 2, 1, 'Pri quas audiam virtute ut, case utamur fuisset eam ut, iisque accommodare an eam. Reque blandit qui eu, cu vix nonumy volumus. Legendos intellegam id usu, vide oporteat vix eu, id illud principes has. Nam tempor utamur gubergren no. Ex soleat habemus usu, te nec eligendi deserunt vituperata. Natum consulatu vel ea, duo cetero repudiare efficiendi cu.', '159577585868503.jpg', '159577586160303.jpg', '159577586426203.jpg', '159577586635503.jpg', 'aktif-terjual', 3, '2020-07-20 10:30:28', '2020-07-26 08:04:37'),
(22, 'Product Aduhai', 10000, 2, 1, 'Pri quas audiam virtute ut, case utamur fuisset eam ut, iisque accommodare an eam. Reque blandit qui eu, cu vix nonumy volumus. Legendos intellegam id usu, vide oporteat vix eu, id illud principes has. Nam tempor utamur gubergren no. Ex soleat habemus usu, te nec eligendi deserunt vituperata. Natum consulatu vel ea, duo cetero repudiare efficiendi cu.', '159577628575004.jpg', '159577628843504.jpg', '159577629025404.jpg', '159577629234204.jpg', 'aktif-terjual', 4, '2020-07-20 10:30:28', '2020-07-26 08:11:43'),
(23, 'Product Aduhai', 10000, 2, 1, 'Pri quas audiam virtute ut, case utamur fuisset eam ut, iisque accommodare an eam. Reque blandit qui eu, cu vix nonumy volumus. Legendos intellegam id usu, vide oporteat vix eu, id illud principes has. Nam tempor utamur gubergren no. Ex soleat habemus usu, te nec eligendi deserunt vituperata. Natum consulatu vel ea, duo cetero repudiare efficiendi cu.', '159577628575004.jpg', '159577628843504.jpg', '159577629025404.jpg', '159577629234204.jpg', 'aktif-terjual', 4, '2020-07-20 10:30:28', '2020-07-26 08:11:43'),
(24, 'Product Aduhai', 10000, 2, 1, 'Pri quas audiam virtute ut, case utamur fuisset eam ut, iisque accommodare an eam. Reque blandit qui eu, cu vix nonumy volumus. Legendos intellegam id usu, vide oporteat vix eu, id illud principes has. Nam tempor utamur gubergren no. Ex soleat habemus usu, te nec eligendi deserunt vituperata. Natum consulatu vel ea, duo cetero repudiare efficiendi cu.', '159577628575004.jpg', '159577628843504.jpg', '159577629025404.jpg', '159577629234204.jpg', 'aktif-terjual', 4, '2020-07-20 10:30:28', '2020-07-26 08:11:43'),
(25, 'Product Aduhai', 10000, 2, 1, 'Pri quas audiam virtute ut, case utamur fuisset eam ut, iisque accommodare an eam. Reque blandit qui eu, cu vix nonumy volumus. Legendos intellegam id usu, vide oporteat vix eu, id illud principes has. Nam tempor utamur gubergren no. Ex soleat habemus usu, te nec eligendi deserunt vituperata. Natum consulatu vel ea, duo cetero repudiare efficiendi cu.', '159577628575004.jpg', '159577628843504.jpg', '159577629025404.jpg', '159577629234204.jpg', 'aktif-terjual', 4, '2020-07-20 10:30:28', '2020-07-26 08:11:43'),
(26, 'Product Aduhai', 10000, 2, 1, 'Pri quas audiam virtute ut, case utamur fuisset eam ut, iisque accommodare an eam. Reque blandit qui eu, cu vix nonumy volumus. Legendos intellegam id usu, vide oporteat vix eu, id illud principes has. Nam tempor utamur gubergren no. Ex soleat habemus usu, te nec eligendi deserunt vituperata. Natum consulatu vel ea, duo cetero repudiare efficiendi cu.', '159577628575004.jpg', '159577628843504.jpg', '159577629025404.jpg', '159577629234204.jpg', 'aktif-terjual', 4, '2020-07-20 10:30:28', '2020-07-26 08:11:43'),
(27, 'Product Aduhai', 10000, 2, 1, 'Pri quas audiam virtute ut, case utamur fuisset eam ut, iisque accommodare an eam. Reque blandit qui eu, cu vix nonumy volumus. Legendos intellegam id usu, vide oporteat vix eu, id illud principes has. Nam tempor utamur gubergren no. Ex soleat habemus usu, te nec eligendi deserunt vituperata. Natum consulatu vel ea, duo cetero repudiare efficiendi cu.', '159577628575004.jpg', '159577628843504.jpg', '159577629025404.jpg', '159577629234204.jpg', 'aktif-terjual', 4, '2020-07-20 10:30:28', '2020-07-26 08:11:43'),
(28, 'Product Aduhai', 10000, 2, 1, 'Pri quas audiam virtute ut, case utamur fuisset eam ut, iisque accommodare an eam. Reque blandit qui eu, cu vix nonumy volumus. Legendos intellegam id usu, vide oporteat vix eu, id illud principes has. Nam tempor utamur gubergren no. Ex soleat habemus usu, te nec eligendi deserunt vituperata. Natum consulatu vel ea, duo cetero repudiare efficiendi cu.', '159577628575004.jpg', '159577628843504.jpg', '159577629025404.jpg', '159577629234204.jpg', 'aktif-terjual', 4, '2020-07-20 10:30:28', '2020-07-26 08:11:43'),
(29, 'Product Aduhai', 10000, 2, 1, 'Pri quas audiam virtute ut, case utamur fuisset eam ut, iisque accommodare an eam. Reque blandit qui eu, cu vix nonumy volumus. Legendos intellegam id usu, vide oporteat vix eu, id illud principes has. Nam tempor utamur gubergren no. Ex soleat habemus usu, te nec eligendi deserunt vituperata. Natum consulatu vel ea, duo cetero repudiare efficiendi cu.', '159577628575004.jpg', '159577628843504.jpg', '159577629025404.jpg', '159577629234204.jpg', 'aktif-terjual', 4, '2020-07-20 10:30:28', '2020-07-26 08:11:43'),
(30, 'Product Seksi Euy', 10000, 2, 1, 'Pri quas audiam virtute ut, case utamur fuisset eam ut, iisque accommodare an eam. Reque blandit qui eu, cu vix nonumy volumus. Legendos intellegam id usu, vide oporteat vix eu, id illud principes has. Nam tempor utamur gubergren no. Ex soleat habemus usu, te nec eligendi deserunt vituperata. Natum consulatu vel ea, duo cetero repudiare efficiendi cu.', '159577640090905.jpg', '159577640306905.jpg', '159577640484205.jpg', '159577640679405.jpg', 'aktif-terjual', 5, '2020-07-20 10:30:28', '2020-07-26 08:13:40'),
(31, 'Product Seksi Euy', 10000, 2, 1, 'Pri quas audiam virtute ut, case utamur fuisset eam ut, iisque accommodare an eam. Reque blandit qui eu, cu vix nonumy volumus. Legendos intellegam id usu, vide oporteat vix eu, id illud principes has. Nam tempor utamur gubergren no. Ex soleat habemus usu, te nec eligendi deserunt vituperata. Natum consulatu vel ea, duo cetero repudiare efficiendi cu.', '159577640090905.jpg', '159577640306905.jpg', '159577640484205.jpg', '159577640679405.jpg', 'aktif-terjual', 5, '2020-07-20 10:30:28', '2020-07-26 08:13:40'),
(32, 'Product Seksi Euy', 10000, 2, 1, 'Pri quas audiam virtute ut, case utamur fuisset eam ut, iisque accommodare an eam. Reque blandit qui eu, cu vix nonumy volumus. Legendos intellegam id usu, vide oporteat vix eu, id illud principes has. Nam tempor utamur gubergren no. Ex soleat habemus usu, te nec eligendi deserunt vituperata. Natum consulatu vel ea, duo cetero repudiare efficiendi cu.', '159577640090905.jpg', '159577640306905.jpg', '159577640484205.jpg', '159577640679405.jpg', 'aktif-terjual', 5, '2020-07-20 10:30:28', '2020-07-26 08:13:40'),
(33, 'Product Seksi Euy', 10000, 2, 1, 'Pri quas audiam virtute ut, case utamur fuisset eam ut, iisque accommodare an eam. Reque blandit qui eu, cu vix nonumy volumus. Legendos intellegam id usu, vide oporteat vix eu, id illud principes has. Nam tempor utamur gubergren no. Ex soleat habemus usu, te nec eligendi deserunt vituperata. Natum consulatu vel ea, duo cetero repudiare efficiendi cu.', '159577640090905.jpg', '159577640306905.jpg', '159577640484205.jpg', '159577640679405.jpg', 'aktif-terjual', 5, '2020-07-20 10:30:28', '2020-07-26 08:13:40'),
(34, 'Product Seksi Euy', 10000, 2, 1, 'Pri quas audiam virtute ut, case utamur fuisset eam ut, iisque accommodare an eam. Reque blandit qui eu, cu vix nonumy volumus. Legendos intellegam id usu, vide oporteat vix eu, id illud principes has. Nam tempor utamur gubergren no. Ex soleat habemus usu, te nec eligendi deserunt vituperata. Natum consulatu vel ea, duo cetero repudiare efficiendi cu.', '159577640090905.jpg', '159577640306905.jpg', '159577640484205.jpg', '159577640679405.jpg', 'aktif-terjual', 5, '2020-07-20 10:30:28', '2020-07-26 08:13:40'),
(35, 'Product Seksi Euy', 10000, 2, 1, 'Pri quas audiam virtute ut, case utamur fuisset eam ut, iisque accommodare an eam. Reque blandit qui eu, cu vix nonumy volumus. Legendos intellegam id usu, vide oporteat vix eu, id illud principes has. Nam tempor utamur gubergren no. Ex soleat habemus usu, te nec eligendi deserunt vituperata. Natum consulatu vel ea, duo cetero repudiare efficiendi cu.', '159577640090905.jpg', '159577640306905.jpg', '159577640484205.jpg', '159577640679405.jpg', 'aktif-terjual', 5, '2020-07-20 10:30:28', '2020-07-26 08:13:40'),
(36, 'Product Seksi Euy', 10000, 2, 1, 'Pri quas audiam virtute ut, case utamur fuisset eam ut, iisque accommodare an eam. Reque blandit qui eu, cu vix nonumy volumus. Legendos intellegam id usu, vide oporteat vix eu, id illud principes has. Nam tempor utamur gubergren no. Ex soleat habemus usu, te nec eligendi deserunt vituperata. Natum consulatu vel ea, duo cetero repudiare efficiendi cu.', '159577640090905.jpg', '159577640306905.jpg', '159577640484205.jpg', '159577640679405.jpg', 'aktif-terjual', 5, '2020-07-20 10:30:28', '2020-07-26 09:29:33'),
(37, 'Product Enak Euy', 10000, 2, 1, 'Pri quas audiam virtute ut, case utamur fuisset eam ut, iisque accommodare an eam. Reque blandit qui eu, cu vix nonumy volumus. Legendos intellegam id usu, vide oporteat vix eu, id illud principes has. Nam tempor utamur gubergren no. Ex soleat habemus usu, te nec eligendi deserunt vituperata. Natum consulatu vel ea, duo cetero repudiare efficiendi cu.', '159577656839906.jpg', '159577657029006.jpg', '159577657205806.jpg', '159577657387506.jpg', 'aktif-terjual', 6, '2020-07-20 10:30:28', '2020-07-26 08:16:16'),
(38, 'Product Seksi Euy', 10000, 2, 1, 'Pri quas audiam virtute ut, case utamur fuisset eam ut, iisque accommodare an eam. Reque blandit qui eu, cu vix nonumy volumus. Legendos intellegam id usu, vide oporteat vix eu, id illud principes has. Nam tempor utamur gubergren no. Ex soleat habemus usu, te nec eligendi deserunt vituperata. Natum consulatu vel ea, duo cetero repudiare efficiendi cu.', '159577640090905.jpg', '159577640306905.jpg', '159577640484205.jpg', '159577640679405.jpg', 'aktif-terjual', 5, '2020-07-20 10:30:28', '2020-07-26 08:13:40'),
(39, 'Product Seksi Euy', 10000, 2, 1, 'Pri quas audiam virtute ut, case utamur fuisset eam ut, iisque accommodare an eam. Reque blandit qui eu, cu vix nonumy volumus. Legendos intellegam id usu, vide oporteat vix eu, id illud principes has. Nam tempor utamur gubergren no. Ex soleat habemus usu, te nec eligendi deserunt vituperata. Natum consulatu vel ea, duo cetero repudiare efficiendi cu.', '159577640090905.jpg', '159577640306905.jpg', '159577640484205.jpg', '159577640679405.jpg', 'aktif-terjual', 5, '2020-07-20 10:30:28', '2020-07-26 08:13:40'),
(40, 'Product Seksi Euy', 10000, 2, 1, 'Pri quas audiam virtute ut, case utamur fuisset eam ut, iisque accommodare an eam. Reque blandit qui eu, cu vix nonumy volumus. Legendos intellegam id usu, vide oporteat vix eu, id illud principes has. Nam tempor utamur gubergren no. Ex soleat habemus usu, te nec eligendi deserunt vituperata. Natum consulatu vel ea, duo cetero repudiare efficiendi cu.', '159577640090905.jpg', '159577640306905.jpg', '159577640484205.jpg', '159577640679405.jpg', 'aktif-terjual', 5, '2020-07-20 10:30:28', '2020-07-26 08:13:40'),
(41, 'Product Seksi Euy', 10000, 2, 1, 'Pri quas audiam virtute ut, case utamur fuisset eam ut, iisque accommodare an eam. Reque blandit qui eu, cu vix nonumy volumus. Legendos intellegam id usu, vide oporteat vix eu, id illud principes has. Nam tempor utamur gubergren no. Ex soleat habemus usu, te nec eligendi deserunt vituperata. Natum consulatu vel ea, duo cetero repudiare efficiendi cu.', '159577640090905.jpg', '159577640306905.jpg', '159577640484205.jpg', '159577640679405.jpg', 'aktif-terjual', 5, '2020-07-20 10:30:28', '2020-07-26 08:13:40'),
(42, 'Product Seksi Euy', 10000, 2, 1, 'Pri quas audiam virtute ut, case utamur fuisset eam ut, iisque accommodare an eam. Reque blandit qui eu, cu vix nonumy volumus. Legendos intellegam id usu, vide oporteat vix eu, id illud principes has. Nam tempor utamur gubergren no. Ex soleat habemus usu, te nec eligendi deserunt vituperata. Natum consulatu vel ea, duo cetero repudiare efficiendi cu.', '159577640090905.jpg', '159577640306905.jpg', '159577640484205.jpg', '159577640679405.jpg', 'aktif-terjual', 5, '2020-07-20 10:30:28', '2020-07-26 08:13:40'),
(43, 'Product Seksi Euy', 10000, 2, 1, 'Pri quas audiam virtute ut, case utamur fuisset eam ut, iisque accommodare an eam. Reque blandit qui eu, cu vix nonumy volumus. Legendos intellegam id usu, vide oporteat vix eu, id illud principes has. Nam tempor utamur gubergren no. Ex soleat habemus usu, te nec eligendi deserunt vituperata. Natum consulatu vel ea, duo cetero repudiare efficiendi cu.', '159577640090905.jpg', '159577640306905.jpg', '159577640484205.jpg', '159577640679405.jpg', 'aktif-terjual', 5, '2020-07-20 10:30:28', '2020-07-26 08:13:40'),
(44, 'Product Seksi Euy', 10000, 2, 1, 'Pri quas audiam virtute ut, case utamur fuisset eam ut, iisque accommodare an eam. Reque blandit qui eu, cu vix nonumy volumus. Legendos intellegam id usu, vide oporteat vix eu, id illud principes has. Nam tempor utamur gubergren no. Ex soleat habemus usu, te nec eligendi deserunt vituperata. Natum consulatu vel ea, duo cetero repudiare efficiendi cu.', '159577640090905.jpg', '159577640306905.jpg', '159577640484205.jpg', '159577640679405.jpg', 'aktif-terjual', 5, '2020-07-20 10:30:28', '2020-07-26 08:13:40'),
(45, 'Product Enak Euy', 10000, 2, 1, 'Pri quas audiam virtute ut, case utamur fuisset eam ut, iisque accommodare an eam. Reque blandit qui eu, cu vix nonumy volumus. Legendos intellegam id usu, vide oporteat vix eu, id illud principes has. Nam tempor utamur gubergren no. Ex soleat habemus usu, te nec eligendi deserunt vituperata. Natum consulatu vel ea, duo cetero repudiare efficiendi cu.', '159577656839906.jpg', '159577657029006.jpg', '159577657205806.jpg', '159577657387506.jpg', 'aktif-terjual', 6, '2020-07-20 10:30:28', '2020-07-26 08:16:16'),
(46, 'Product Enak Euy', 10000, 2, 1, 'Pri quas audiam virtute ut, case utamur fuisset eam ut, iisque accommodare an eam. Reque blandit qui eu, cu vix nonumy volumus. Legendos intellegam id usu, vide oporteat vix eu, id illud principes has. Nam tempor utamur gubergren no. Ex soleat habemus usu, te nec eligendi deserunt vituperata. Natum consulatu vel ea, duo cetero repudiare efficiendi cu.', '159577656839906.jpg', '159577657029006.jpg', '159577657205806.jpg', '159577657387506.jpg', 'aktif-terjual', 6, '2020-07-20 10:30:28', '2020-07-26 08:16:16'),
(47, 'Product Enak Euy', 10000, 2, 1, 'Pri quas audiam virtute ut, case utamur fuisset eam ut, iisque accommodare an eam. Reque blandit qui eu, cu vix nonumy volumus. Legendos intellegam id usu, vide oporteat vix eu, id illud principes has. Nam tempor utamur gubergren no. Ex soleat habemus usu, te nec eligendi deserunt vituperata. Natum consulatu vel ea, duo cetero repudiare efficiendi cu.', '159577656839906.jpg', '159577657029006.jpg', '159577657205806.jpg', '159577657387506.jpg', 'aktif-terjual', 6, '2020-07-20 10:30:28', '2020-07-26 08:16:16'),
(48, 'Product Enak Euy', 10000, 2, 1, 'Pri quas audiam virtute ut, case utamur fuisset eam ut, iisque accommodare an eam. Reque blandit qui eu, cu vix nonumy volumus. Legendos intellegam id usu, vide oporteat vix eu, id illud principes has. Nam tempor utamur gubergren no. Ex soleat habemus usu, te nec eligendi deserunt vituperata. Natum consulatu vel ea, duo cetero repudiare efficiendi cu.', '159577656839906.jpg', '159577657029006.jpg', '159577657205806.jpg', '159577657387506.jpg', 'aktif-terjual', 6, '2020-07-20 10:30:28', '2020-07-26 08:16:16'),
(49, 'Product Enak Euy', 10000, 2, 1, 'Pri quas audiam virtute ut, case utamur fuisset eam ut, iisque accommodare an eam. Reque blandit qui eu, cu vix nonumy volumus. Legendos intellegam id usu, vide oporteat vix eu, id illud principes has. Nam tempor utamur gubergren no. Ex soleat habemus usu, te nec eligendi deserunt vituperata. Natum consulatu vel ea, duo cetero repudiare efficiendi cu.', '159577656839906.jpg', '159577657029006.jpg', '159577657205806.jpg', '159577657387506.jpg', 'aktif-terjual', 6, '2020-07-20 10:30:28', '2020-07-26 08:16:16'),
(50, 'Product Enak Euy', 10000, 2, 1, 'Pri quas audiam virtute ut, case utamur fuisset eam ut, iisque accommodare an eam. Reque blandit qui eu, cu vix nonumy volumus. Legendos intellegam id usu, vide oporteat vix eu, id illud principes has. Nam tempor utamur gubergren no. Ex soleat habemus usu, te nec eligendi deserunt vituperata. Natum consulatu vel ea, duo cetero repudiare efficiendi cu.', '159577656839906.jpg', '159577657029006.jpg', '159577657205806.jpg', '159577657387506.jpg', 'aktif-terjual', 6, '2020-07-20 10:30:28', '2020-07-26 08:16:16'),
(51, 'Product Enak Euy', 10000, 2, 1, 'Pri quas audiam virtute ut, case utamur fuisset eam ut, iisque accommodare an eam. Reque blandit qui eu, cu vix nonumy volumus. Legendos intellegam id usu, vide oporteat vix eu, id illud principes has. Nam tempor utamur gubergren no. Ex soleat habemus usu, te nec eligendi deserunt vituperata. Natum consulatu vel ea, duo cetero repudiare efficiendi cu.', '159577656839906.jpg', '159577657029006.jpg', '159577657205806.jpg', '159577657387506.jpg', 'aktif-terjual', 6, '2020-07-20 10:30:28', '2020-07-26 08:16:16');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `title`, `active`, `created_at`, `updated_at`) VALUES
(1, 'Admin', NULL, NULL, '2020-07-18 08:03:23'),
(3, 'pegawai', NULL, '2020-07-19 03:38:16', '2020-07-19 03:38:16');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` tinyint(1) DEFAULT NULL,
  `active` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `password`, `image_name`, `role`, `active`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Hamzah', 'admin', 'if.hamzah93@gmail.com', '$2y$10$mfEEMrj1pTfJ3kCAADF8PuFHe3FO7dCAVgNbSa94NvfU0P0eP5XFy', 'c7ce488094a665df704d2dda5e819327.jpeg', 1, '1', '7iXY3Xo4SCnNcN5ouvdzkQsGtNm1OY0X6yK8lBxJjjbXs4s0idvGu2BOUiMR', NULL, '2020-01-30 12:27:08'),
(2, 'hamzah', 'hamzah', 'hamzah@kresnasecurities.com', '$2y$10$LQfhLo37l/fVGw14I9GKTOaX8MMLTyqzmuGje31xl.crHULOtkvNW', '7b037aa3db91ed2c259998eb607018a6.jpeg', 2, '1', NULL, '2020-01-26 18:05:40', '2020-01-30 13:54:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dyn_menu`
--
ALTER TABLE `dyn_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `otori`
--
ALTER TABLE `otori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

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
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dyn_menu`
--
ALTER TABLE `dyn_menu`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `otori`
--
ALTER TABLE `otori`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=296;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
