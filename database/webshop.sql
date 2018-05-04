-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2018 at 08:04 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

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
(1, '2018_01_24_100501_tbl_product_images', 1),
(2, '2018_01_24_102837_tbl_product_images', 2),
(3, '2018_01_24_103216_tbl_product_images', 3),
(4, '2018_01_24_103436_tbl_product_images', 4),
(5, '2018_01_24_103709_tbl_pro_images', 5),
(7, '2018_01_24_104455_tbl_pro_images', 6),
(8, '2018_01_24_104800_tbl_pro_imgs', 7);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `title` varchar(50) COLLATE utf32_unicode_ci NOT NULL,
  `summary` varchar(50) COLLATE utf32_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `shows`
--

CREATE TABLE `shows` (
  `s_id` int(10) UNSIGNED NOT NULL,
  `s_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `s_email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `s_pass` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_brand`
--

CREATE TABLE `tbl_brand` (
  `brand_id` int(15) NOT NULL,
  `brand_name` varchar(255) COLLATE utf32_unicode_ci NOT NULL,
  `brand_img` varchar(255) COLLATE utf32_unicode_ci NOT NULL,
  `brand_link` varchar(255) COLLATE utf32_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cat_detail` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cat_img` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`cat_id`, `cat_name`, `cat_detail`, `cat_img`, `created_at`, `updated_at`) VALUES
(8, 'shirts', 'T-shirt,suit,', '1516906599.jpg', '2018-01-21 03:34:19', '2018-01-25 11:56:40'),
(9, 'Pant', 'Quần', '1516531029.jpg', '2018-01-21 03:37:09', '2018-01-21 03:37:09'),
(10, 'Dress', 'Váy', '1516531127.jpg', '2018-01-21 03:38:47', '2018-01-21 03:38:47');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_configs`
--

CREATE TABLE `tbl_configs` (
  `id` int(11) NOT NULL,
  `logo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title_web` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `descript_web` text COLLATE utf8_unicode_ci,
  `contact_page` text COLLATE utf8_unicode_ci,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hotline` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `footer` text COLLATE utf8_unicode_ci,
  `gmail` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gplus` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `active` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE `tbl_contact` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fax` varchar(19) COLLATE utf8_unicode_ci NOT NULL,
  `facebook` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `google` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `adress` text COLLATE utf8_unicode_ci,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `active` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer_contact`
--

CREATE TABLE `tbl_customer_contact` (
  `c_id` int(30) NOT NULL,
  `c_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `c_email` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `c_phone` text COLLATE utf32_unicode_ci,
  `c_content` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cus_comment`
--

CREATE TABLE `tbl_cus_comment` (
  `c_cm_id` int(11) NOT NULL,
  `c_cm_name` varchar(255) COLLATE utf32_unicode_ci NOT NULL,
  `c_cm_image` varchar(255) COLLATE utf32_unicode_ci NOT NULL,
  `c_cm_content` varchar(255) COLLATE utf32_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_detail_order`
--

CREATE TABLE `tbl_detail_order` (
  `id` int(11) NOT NULL,
  `order_id` int(11) DEFAULT NULL,
  `pro_id` int(11) DEFAULT NULL,
  `pro_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `pro_price` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_huyen`
--

CREATE TABLE `tbl_huyen` (
  `id` int(11) NOT NULL,
  `tinh_id` int(11) DEFAULT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_menu`
--

CREATE TABLE `tbl_menu` (
  `menu_id` int(11) NOT NULL,
  `is_home` tinyint(1) NOT NULL,
  `menu_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `menu_img` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `menu_icon` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `menu_banner` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `menu_position` tinyint(1) NOT NULL,
  `menu_status` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_news`
--

CREATE TABLE `tbl_news` (
  `news_id` int(11) NOT NULL,
  `user_fullname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ngay_dang` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `last_update` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `tieu_de` tinytext COLLATE utf8_unicode_ci,
  `mo_ta` longtext COLLATE utf8_unicode_ci,
  `noi_dung` longtext COLLATE utf8_unicode_ci,
  `anh_bia` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `stt` int(11) DEFAULT NULL,
  `url_rewite` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `luot_xem` int(11) DEFAULT NULL,
  `active` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `cus_fullname` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cus_address` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cus_phone` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cus_email` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pay_number` text COLLATE utf8_unicode_ci NOT NULL,
  `pay_cvc` int(3) NOT NULL,
  `pay_mm` int(2) NOT NULL,
  `pay_yyyy` int(4) NOT NULL,
  `total_price` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`order_id`, `user_id`, `cus_fullname`, `cus_address`, `cus_phone`, `cus_email`, `pay_number`, `pay_cvc`, `pay_mm`, `pay_yyyy`, `total_price`, `create_date`) VALUES
(1, 5, 'linh', '4761 Corpening Drive', '0930129301', 'linh@gmail.com', '32131', 311, 12, 2017, '150,400.00', '2018-01-24 06:06:19'),
(2, 5, 'linh2', 'HN', '09302193021', 'linh@gmail.com', '083332', 311, 12, 2017, '150,400.00', '2018-01-24 06:10:07'),
(7, 6, 'Hoang Linh', 'Ha Noi', '03921093012', 'hoanglinh@gmail.com', '323344', 322, 12, 2019, '855.00', '2018-01-25 19:04:22');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_products`
--

CREATE TABLE `tbl_products` (
  `pro_id` int(11) NOT NULL,
  `cat_id` int(11) DEFAULT NULL,
  `pro_title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pro_descript` longtext COLLATE utf8_unicode_ci,
  `pro_detail` longtext COLLATE utf8_unicode_ci,
  `pro_img` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `pro_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `pro_price` double DEFAULT NULL,
  `pro_status` int(1) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `tbl_products`
--

INSERT INTO `tbl_products` (`pro_id`, `cat_id`, `pro_title`, `pro_descript`, `pro_detail`, `pro_img`, `quantity`, `pro_date`, `pro_price`, `pro_status`, `created_at`, `updated_at`) VALUES
(1, 9, 'quan veston new', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.', 'mau xanh', '1516906633.jpg', 5, '2018-01-25 18:57:13', 150000, 0, '2018-01-21 10:48:10', '2018-01-25 11:57:13'),
(2, 9, 'Quan veston 2', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.', 'chat lieu xin', '1516593265.jpg', 8, '2018-01-22 16:36:47', 400, 0, '2018-01-21 20:54:25', '2018-01-22 09:36:47'),
(3, 8, 'office shirt', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.', 'blue, for work only', '1516593501.jpg', 4, '2018-01-24 15:36:09', 300, 1, '2018-01-21 20:58:21', '2018-01-24 08:36:09'),
(4, 10, 'Red dress', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.', 'red, long', '1516593543.jpg', 2, '2018-01-24 15:36:16', 700, 1, '2018-01-21 20:59:03', '2018-01-24 08:36:16'),
(5, 10, 'Party Dress', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.', 'Green', '1516806539.jpg', 4, '2018-01-24 15:08:59', 500, 0, '2018-01-24 08:08:59', '2018-01-24 08:08:59'),
(6, 8, 'T-Sshirt', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.', 'office t-shirt', '1516806582.jpg', 5, '2018-01-24 15:22:44', 55, 1, '2018-01-24 08:09:42', '2018-01-24 08:09:42');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pro_imgs`
--

CREATE TABLE `tbl_pro_imgs` (
  `proimg_id` int(10) UNSIGNED NOT NULL,
  `pro_id` int(11) NOT NULL,
  `product_img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_pro_imgs`
--

INSERT INTO `tbl_pro_imgs` (`proimg_id`, `pro_id`, `product_img`, `created_at`, `updated_at`) VALUES
(3, 1, '1516807613.jpg', '2018-01-24 08:26:53', '2018-01-24 08:26:53'),
(4, 1, '1516807654.jpg', '2018-01-24 08:27:34', '2018-01-24 08:27:34'),
(5, 1, '1516807673.jpg', '2018-01-24 08:27:53', '2018-01-24 08:27:53'),
(6, 2, '1516807724.jpeg', '2018-01-24 08:28:44', '2018-01-24 08:28:44'),
(7, 2, '1516807747.jpg', '2018-01-24 08:29:07', '2018-01-24 08:29:07'),
(8, 2, '1516807765.jpeg', '2018-01-24 08:29:25', '2018-01-24 08:29:25'),
(9, 3, '1516807815.jpg', '2018-01-24 08:30:15', '2018-01-24 08:30:15'),
(10, 3, '1516807822.jpg', '2018-01-24 08:30:22', '2018-01-24 08:30:22'),
(11, 3, '1516807832.jpg', '2018-01-24 08:30:32', '2018-01-24 08:30:32'),
(12, 6, '1516807917.jpg', '2018-01-24 08:31:57', '2018-01-24 08:31:57'),
(13, 6, '1516807922.jpg', '2018-01-24 08:32:02', '2018-01-24 08:32:02'),
(14, 6, '1516807929.jpeg', '2018-01-24 08:32:09', '2018-01-24 08:32:09'),
(15, 4, '1516807972.jpg', '2018-01-24 08:32:52', '2018-01-24 08:32:52'),
(16, 4, '1516807983.jpg', '2018-01-24 08:33:03', '2018-01-24 08:33:03'),
(17, 4, '1516808062.jpg', '2018-01-24 08:34:22', '2018-01-24 08:34:22'),
(18, 5, '1516808106.jpg', '2018-01-24 08:35:06', '2018-01-24 08:35:06'),
(19, 5, '1516808113.jpg', '2018-01-24 08:35:13', '2018-01-24 08:35:13'),
(20, 5, '1516808118.jpg', '2018-01-24 08:35:18', '2018-01-24 08:35:18'),
(21, 6, '1516808455.jpg', '2018-01-24 08:40:56', '2018-01-24 08:40:56'),
(22, 6, '1516808503.jpg', '2018-01-24 08:41:43', '2018-01-24 08:41:43'),
(23, 6, '1516808584.jpg', '2018-01-24 08:43:04', '2018-01-24 08:43:04'),
(24, 6, '1516808824.jpg', '2018-01-24 08:47:04', '2018-01-24 08:47:04'),
(25, 5, '1516808943.jpg', '2018-01-24 08:49:03', '2018-01-24 08:49:03');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_role`
--

CREATE TABLE `tbl_role` (
  `role_id` tinyint(4) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `role_permissions` text COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_role`
--

INSERT INTO `tbl_role` (`role_id`, `title`, `role_permissions`) VALUES
(1, 'Super admin', '{\"admin\":[\"index\",\"layout_review\"],\"user\":[\"user_list\",\"user_add\",\"user_edit\",\"user_delete\",\"user_delete_all\",\"profile\"],\"slide\":[\"slide_list\",\"slide_add\",\"slide_edit\",\"slide_delete\",\"slide_delete_all\"],\"menu\":[\"menu_list\",\"menu_add\",\"menu_edit\",\"menu_delete\",\"menu_delete_all\"]}'),
(2, 'Admin', '{\"admin\":[\"index\",\"layout_review\"],\"user\":[\"profile\"],\"slide\":[\"slide_list\",\"slide_add\",\"slide_edit\",\"slide_delete\",\"slide_delete_all\"],\"menu\":[\"menu_list\",\"menu_add\",\"menu_edit\",\"menu_delete\",\"menu_delete_all\"]}'),
(3, 'Editor', '{\"admin\":[\"index\",\"layout_review\"],\"slide\":[\"slide_list\",\"slide_add\",\"slide_edit\",\"slide_delete\",\"slide_delete_all\"],\"menu\":[\"menu_list\",\"menu_add\",\"menu_edit\",\"menu_delete\",\"menu_delete_all\"]}'),
(4, 'Khách hàng', 'null');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_slide`
--

CREATE TABLE `tbl_slide` (
  `slide_id` int(11) NOT NULL,
  `slide_title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `slide_descript` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `slide_image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `slide_sub_image` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `slide_sale` int(255) NOT NULL,
  `slide_price` int(255) NOT NULL,
  `slide_url` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `active` tinyint(1) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tinhthanh`
--

CREATE TABLE `tbl_tinhthanh` (
  `tinh_id` int(11) NOT NULL,
  `tinh_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gia_ship` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `user_id` int(11) NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `role_id` tinyint(4) DEFAULT NULL,
  `user_fullname` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `sex` text COLLATE utf8_unicode_ci,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_status` tinyint(1) DEFAULT '1',
  `remember_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`user_id`, `email`, `password`, `role_id`, `user_fullname`, `birthday`, `sex`, `address`, `phone`, `user_status`, `remember_token`, `created_at`, `updated_at`) VALUES
(4, 'admin@gmail.com', '$2y$10$1QWf3T6PYtWLdgE4SK154OJAnmEEwffEFYE/jWltLx1.t9Wqjj45e', 1, 'nguyen van hoang linh', '2018-01-19', 'nam', 'ha noi', '0912143039', 1, 'aQULYOWqNDvCAcQVaeQi2hcCZVfRB6kcTHCwUnzdfz4qtHc6SkvleNWlpOvr', '2018-01-17 02:52:00', '2018-01-22 11:02:25'),
(5, 'linh@gmail.com', '$2y$10$vdauQ8B/7DtNZlfQVMoE1uDZWYqkUPrTu7uYFCIX4bL8RvcjNSW/W', 2, 'linh', '2018-01-11', 'nam', 'ha nam', '1682970668', 1, 'Nv7lTJowQ2hySPdHj2v0zMzAROdBA4DaFYPhXg70iIENZuebX5eEuPeuXRbp', '2018-01-17 02:52:49', '2018-01-17 02:52:49'),
(6, 'linh3@gmail.com', '$2y$10$5HPQz0V6kr.k/qFJqDQ1Q.y0fChlZxRztSOYaxyXdye3.dsZ6QuRy', 4, 'linh1', '2018-01-11', 'nam', 'ha nam', '1682970668', 1, 'BrvhC3sZmtjasw0LnuZHD4Ukcm1kGxA6L07Yv4fitJbtDpOxC1cHuvtXGqsp', '2018-01-17 02:55:51', '2018-01-23 01:30:25'),
(7, 'linh2@gmail.com', '$2y$10$nFWvrxsKMz1JPeaQ48M8su4NIV9TfsWY1B/j1YSRvepbtKv36fNM.', 3, 'hoang linh', '2018-01-11', 'nữ', 'ha dong', '0912143039', 1, 'Zkx8FHfhsiJigjnuKMTKwiFMQPVPah6NdZm7P5AuRCpr0dRNABTpFWLm1tx8', '2018-01-23 01:26:40', '2018-01-23 01:26:40'),
(8, 'hlinh@gmail.com', '$2y$10$BBlfxYuIO1hxrdVFfARIoek09tojokJbRuPCQIyrh3JQns0i0Tl8.', 3, 'hlinh', '2018-01-13', 'nam', 'hn', '43423424', 1, NULL, '2018-01-25 10:43:01', '2018-01-25 11:58:01');

--
-- Indexes for dumped tables
--

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
-- Indexes for table `shows`
--
ALTER TABLE `shows`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `tbl_brand`
--
ALTER TABLE `tbl_brand`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`cat_id`),
  ADD UNIQUE KEY `cat_name` (`cat_name`);

--
-- Indexes for table `tbl_configs`
--
ALTER TABLE `tbl_configs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `tbl_customer_contact`
--
ALTER TABLE `tbl_customer_contact`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `tbl_cus_comment`
--
ALTER TABLE `tbl_cus_comment`
  ADD PRIMARY KEY (`c_cm_id`);

--
-- Indexes for table `tbl_detail_order`
--
ALTER TABLE `tbl_detail_order`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `pro_id` (`pro_id`);

--
-- Indexes for table `tbl_huyen`
--
ALTER TABLE `tbl_huyen`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tinh_id` (`tinh_id`);

--
-- Indexes for table `tbl_menu`
--
ALTER TABLE `tbl_menu`
  ADD PRIMARY KEY (`menu_id`);

--
-- Indexes for table `tbl_news`
--
ALTER TABLE `tbl_news`
  ADD PRIMARY KEY (`news_id`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `tbl_products`
--
ALTER TABLE `tbl_products`
  ADD PRIMARY KEY (`pro_id`),
  ADD KEY `cat_id` (`cat_id`);

--
-- Indexes for table `tbl_pro_imgs`
--
ALTER TABLE `tbl_pro_imgs`
  ADD PRIMARY KEY (`proimg_id`);

--
-- Indexes for table `tbl_role`
--
ALTER TABLE `tbl_role`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `tbl_slide`
--
ALTER TABLE `tbl_slide`
  ADD PRIMARY KEY (`slide_id`);

--
-- Indexes for table `tbl_tinhthanh`
--
ALTER TABLE `tbl_tinhthanh`
  ADD PRIMARY KEY (`tinh_id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_email` (`email`),
  ADD KEY `role_id` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `shows`
--
ALTER TABLE `shows`
  MODIFY `s_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_brand`
--
ALTER TABLE `tbl_brand`
  MODIFY `brand_id` int(15) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `tbl_configs`
--
ALTER TABLE `tbl_configs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_customer_contact`
--
ALTER TABLE `tbl_customer_contact`
  MODIFY `c_id` int(30) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_cus_comment`
--
ALTER TABLE `tbl_cus_comment`
  MODIFY `c_cm_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_detail_order`
--
ALTER TABLE `tbl_detail_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_huyen`
--
ALTER TABLE `tbl_huyen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_menu`
--
ALTER TABLE `tbl_menu`
  MODIFY `menu_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_news`
--
ALTER TABLE `tbl_news`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tbl_products`
--
ALTER TABLE `tbl_products`
  MODIFY `pro_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbl_pro_imgs`
--
ALTER TABLE `tbl_pro_imgs`
  MODIFY `proimg_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `tbl_role`
--
ALTER TABLE `tbl_role`
  MODIFY `role_id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_slide`
--
ALTER TABLE `tbl_slide`
  MODIFY `slide_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_tinhthanh`
--
ALTER TABLE `tbl_tinhthanh`
  MODIFY `tinh_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  ADD CONSTRAINT `tbl_contact_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `tbl_users` (`user_id`);

--
-- Constraints for table `tbl_detail_order`
--
ALTER TABLE `tbl_detail_order`
  ADD CONSTRAINT `tbl_detail_order_ibfk_2` FOREIGN KEY (`pro_id`) REFERENCES `tbl_products` (`pro_id`),
  ADD CONSTRAINT `tbl_detail_order_ibfk_3` FOREIGN KEY (`order_id`) REFERENCES `tbl_order` (`order_id`);

--
-- Constraints for table `tbl_huyen`
--
ALTER TABLE `tbl_huyen`
  ADD CONSTRAINT `tbl_huyen_ibfk_1` FOREIGN KEY (`tinh_id`) REFERENCES `tbl_tinhthanh` (`tinh_id`);

--
-- Constraints for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD CONSTRAINT `tbl_order_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `tbl_users` (`user_id`);

--
-- Constraints for table `tbl_products`
--
ALTER TABLE `tbl_products`
  ADD CONSTRAINT `tbl_products_ibfk_2` FOREIGN KEY (`cat_id`) REFERENCES `tbl_category` (`cat_id`);

--
-- Constraints for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD CONSTRAINT `tbl_users_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `tbl_role` (`role_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
