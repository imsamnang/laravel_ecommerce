-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.23 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for ecom_alex
DROP DATABASE IF EXISTS `ecom_alex`;
CREATE DATABASE IF NOT EXISTS `ecom_alex` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `ecom_alex`;

-- Dumping structure for table ecom_alex.activity_log
DROP TABLE IF EXISTS `activity_log`;
CREATE TABLE IF NOT EXISTS `activity_log` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `log_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject_id` int(11) DEFAULT NULL,
  `subject_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `causer_id` int(11) DEFAULT NULL,
  `causer_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `properties` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `activity_log_log_name_index` (`log_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ecom_alex.activity_log: ~0 rows (approximately)
/*!40000 ALTER TABLE `activity_log` DISABLE KEYS */;
/*!40000 ALTER TABLE `activity_log` ENABLE KEYS */;

-- Dumping structure for table ecom_alex.categories
DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) unsigned NOT NULL DEFAULT '0',
  `category_name` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `is_active` tinyint(1) NOT NULL DEFAULT '0',
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ecom_alex.categories: ~17 rows (approximately)
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` (`id`, `parent_id`, `category_name`, `description`, `is_active`, `image`, `deleted_at`, `created_at`, `updated_at`) VALUES
	(1, 0, 'Phones & Tablets Update', 'Phones and Tablets Update', 1, 'Ps5ITK7KIyECl0TyqlgJjieta3MmJ5iqKbuWGYCD.jpeg', NULL, '2019-04-05 09:59:18', '2019-04-06 04:33:11'),
	(2, 0, 'Computers & Accessories', 'Computers and Accessories', 1, 'qHRmR6L7KSmgG2JNzvPKepvMT1X2UvXdONwREUDI.jpeg', NULL, '2019-04-05 10:08:59', '2019-04-05 10:08:59'),
	(3, 0, 'Electronics & Appliances', 'Electronics and Appliances', 1, 'fpBDUnjkL8f8pTq3vi0oN5kLMJi7IRR1tBL1CmkD.jpeg', NULL, '2019-04-05 10:09:31', '2019-04-05 10:09:31'),
	(4, 0, 'House & Lands', 'House and Lands', 1, 'fmbiY12FxZhMLVkhI8h8SDGOQoOfimIztvJgruzO.jpeg', NULL, '2019-04-05 10:09:59', '2019-04-05 10:09:59'),
	(5, 0, 'Jobs', 'Jobs', 1, 'fmbiY12FxZhMLVkhI8h8SDGOQoOfimIztvJgruzO.jpeg', NULL, '2019-04-05 10:10:23', '2019-04-05 10:10:23'),
	(6, 1, 'Phones, Tablets', 'Phones, Tablets', 1, 'q9RQEAihpGbdFF4AzuJhEOFiszkpzheQZomA4m4a.jpeg', NULL, '2019-04-05 10:12:06', '2019-04-05 10:12:06'),
	(7, 1, 'Phone Accessories', 'Phone Accessories', 1, '3nySjNNjvpuVhMvRYzQmhFg7jtpB9F4sCMbgNj30.jpeg', NULL, '2019-04-05 10:12:33', '2019-04-05 10:12:33'),
	(8, 2, 'Computers', 'Computers', 1, 'RgeoAEVqbC2sd6qY8yC54pgAjAzrcGQek5ebkoca.jpeg', NULL, '2019-04-05 10:12:55', '2019-04-05 10:12:55'),
	(9, 2, 'Software', 'Software', 1, 'XOJ4UCNdZhgLsVm2y6UeSIpi7ZLwNXeDdvPmOsKe.jpeg', NULL, '2019-04-05 10:13:22', '2019-04-05 10:13:22'),
	(10, 3, 'Consumer Electronics', 'Consumer Electronics', 1, 'i6RjN3ekVTIvfAH0U9QFbyJohDyY8mdau8ApcW8S.jpeg', NULL, '2019-04-05 10:13:50', '2019-04-05 10:13:50'),
	(11, 3, 'Security Camera', 'Security Camera', 1, 'PivKpBByRiM5rlygUAAU6nGv6c1NPd15yj7qjwwr.jpeg', NULL, '2019-04-05 10:14:15', '2019-04-05 10:14:15'),
	(12, 4, 'Land for Sale', 'Land for Sale', 1, 'PBSiDUdNGn3FvDydpPeNoi4VlDChoMf7YueZxo9Q.jpeg', NULL, '2019-04-05 10:14:40', '2019-04-05 10:14:40'),
	(13, 4, 'Land for Rent', 'Land for Rent', 1, 'kwfRMwaUTRWEyYDFLDYQL8JUOwq0nv00Wys35BJh.jpeg', NULL, '2019-04-05 10:15:05', '2019-04-05 10:15:05'),
	(14, 5, 'Accounting', 'Accounting', 1, 'Y50CLe8yz5ImMSOV9dj9FuH7RgM4UZRJ4UQZsGOM.jpeg', NULL, '2019-04-05 10:15:32', '2019-04-05 10:15:32'),
	(15, 5, 'Administration', 'Administration', 1, '7bjlZxYNoYpx1IfGGkyoRmPYOIMCjU6HJki7Sq3g.jpeg', NULL, '2019-04-05 10:15:55', '2019-04-05 10:15:55'),
	(16, 5, 'Banking/Insurance', 'Banking/Insurance', 1, 'fIvrEswKGjIA6KHmqStu8zEHbYpE39wkPELMg00f.jpeg', NULL, '2019-04-05 10:16:22', '2019-04-05 10:16:22'),
	(17, 5, 'Security/Driver', 'Security/Driver', 1, 'MPepdq97OMEaIotEu386HLfi8JqsOpzX7EFftRFu.jpeg', NULL, '2019-04-05 10:16:44', '2019-04-05 10:16:44');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;

-- Dumping structure for table ecom_alex.cities
DROP TABLE IF EXISTS `cities`;
CREATE TABLE IF NOT EXISTS `cities` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ecom_alex.cities: ~2 rows (approximately)
/*!40000 ALTER TABLE `cities` DISABLE KEYS */;
INSERT INTO `cities` (`id`, `name`, `state_id`, `created_at`, `updated_at`) VALUES
	(1, 'Varanasi', 1, NULL, NULL),
	(2, 'Kanpur', 1, NULL, NULL);
/*!40000 ALTER TABLE `cities` ENABLE KEYS */;

-- Dumping structure for table ecom_alex.colors
DROP TABLE IF EXISTS `colors`;
CREATE TABLE IF NOT EXISTS `colors` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `color_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ecom_alex.colors: ~0 rows (approximately)
/*!40000 ALTER TABLE `colors` DISABLE KEYS */;
/*!40000 ALTER TABLE `colors` ENABLE KEYS */;

-- Dumping structure for table ecom_alex.communes
DROP TABLE IF EXISTS `communes`;
CREATE TABLE IF NOT EXISTS `communes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `district_id` int(11) NOT NULL,
  `name_en` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_kh` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ecom_alex.communes: ~23 rows (approximately)
/*!40000 ALTER TABLE `communes` DISABLE KEYS */;
INSERT INTO `communes` (`id`, `district_id`, `name_en`, `name_kh`, `created_at`, `updated_at`) VALUES
	(1, 1, 'Svay Pak', '', NULL, NULL),
	(2, 1, 'Russey Keo', '', NULL, NULL),
	(3, 2, 'Krang Thnong', '', NULL, NULL),
	(4, 2, 'Khmuonh', '', NULL, NULL),
	(5, 2, 'Phnom Penh Thmei', '', NULL, NULL),
	(6, 3, 'Ovlaok', '', NULL, NULL),
	(7, 3, 'Kamboul', '', NULL, NULL),
	(8, 4, 'Bak Kheng', '', NULL, NULL),
	(9, 4, 'Praek Leab', '', NULL, NULL),
	(10, 5, 'Ponsang', '', NULL, NULL),
	(11, 5, 'Kouk Roka', '', NULL, NULL),
	(12, 6, 'Veal Sbov', '', NULL, NULL),
	(13, 6, 'Praek Aeng', '', NULL, NULL),
	(14, 27, 'Char Chhouk', '', NULL, NULL),
	(15, 27, 'Daun Peng', '', NULL, NULL),
	(16, 28, 'Chub Tatrav', '', NULL, NULL),
	(17, 28, 'Leang Dai', '', NULL, NULL),
	(18, 29, 'Khnar Sanday', '', NULL, NULL),
	(19, 29, 'Khun Ream', '', NULL, NULL),
	(20, 30, 'Anlong Samnor', '', NULL, NULL),
	(21, 30, 'Chi Kraeng', '', NULL, NULL),
	(22, 31, 'Chonleas Dai', '', NULL, NULL),
	(23, 31, 'Kampong Thkov', '', NULL, NULL);
/*!40000 ALTER TABLE `communes` ENABLE KEYS */;

-- Dumping structure for table ecom_alex.countries
DROP TABLE IF EXISTS `countries`;
CREATE TABLE IF NOT EXISTS `countries` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ecom_alex.countries: ~2 rows (approximately)
/*!40000 ALTER TABLE `countries` DISABLE KEYS */;
INSERT INTO `countries` (`id`, `name`, `created_at`, `updated_at`) VALUES
	(1, 'India', NULL, NULL),
	(2, 'Pakishtan', NULL, NULL);
/*!40000 ALTER TABLE `countries` ENABLE KEYS */;

-- Dumping structure for table ecom_alex.coupons
DROP TABLE IF EXISTS `coupons`;
CREATE TABLE IF NOT EXISTS `coupons` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `promotion_id` int(10) unsigned NOT NULL,
  `coupon` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expired_date` datetime DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ecom_alex.coupons: ~0 rows (approximately)
/*!40000 ALTER TABLE `coupons` DISABLE KEYS */;
/*!40000 ALTER TABLE `coupons` ENABLE KEYS */;

-- Dumping structure for table ecom_alex.customers
DROP TABLE IF EXISTS `customers`;
CREATE TABLE IF NOT EXISTS `customers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `customer_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sex` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `phone` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '0',
  `city` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `district` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `commune` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `village` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lat` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lng` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `customers_email_unique` (`email`),
  UNIQUE KEY `customers_username_unique` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ecom_alex.customers: ~0 rows (approximately)
/*!40000 ALTER TABLE `customers` DISABLE KEYS */;
/*!40000 ALTER TABLE `customers` ENABLE KEYS */;

-- Dumping structure for table ecom_alex.customer_product_favorites
DROP TABLE IF EXISTS `customer_product_favorites`;
CREATE TABLE IF NOT EXISTS `customer_product_favorites` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `product_id` int(10) unsigned NOT NULL,
  `customer_id` int(11) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ecom_alex.customer_product_favorites: ~0 rows (approximately)
/*!40000 ALTER TABLE `customer_product_favorites` DISABLE KEYS */;
/*!40000 ALTER TABLE `customer_product_favorites` ENABLE KEYS */;

-- Dumping structure for table ecom_alex.districts
DROP TABLE IF EXISTS `districts`;
CREATE TABLE IF NOT EXISTS `districts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `province_id` int(11) NOT NULL,
  `name_en` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_kh` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=198 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ecom_alex.districts: ~197 rows (approximately)
/*!40000 ALTER TABLE `districts` DISABLE KEYS */;
INSERT INTO `districts` (`id`, `province_id`, `name_en`, `name_kh`, `created_at`, `updated_at`) VALUES
	(1, 1, 'Ruessei Kaev', 'ឫស្សីកែវ', NULL, NULL),
	(2, 1, 'Saensokh', 'សែនសុខ', NULL, NULL),
	(3, 1, 'Por Senchey', 'ពោធិសែនជ័យ', NULL, NULL),
	(4, 1, 'Chrouy Changva', 'ជ្រោយចង្វារ', NULL, NULL),
	(5, 1, 'Preaek Pnov', 'ព្រែកភ្នៅ', NULL, NULL),
	(6, 1, 'Chbar Ampov', 'ច្បារអំពៅ', NULL, NULL),
	(7, 1, 'Doun Penh', 'ដូនពេញ', NULL, NULL),
	(8, 1, 'Prampir Meakkara', '៧មករា', NULL, NULL),
	(9, 1, 'Toul Kouk', 'ទួលគោក', NULL, NULL),
	(10, 1, 'Dangkao', 'ដង្កោ', NULL, NULL),
	(11, 1, 'Mean Chey', 'មានជ័យ', NULL, NULL),
	(12, 1, 'Chamkar Mon', 'ចំការមន', NULL, NULL),
	(13, 2, 'Krong Preah Sihanouk', 'ព្រះសីហនុ', NULL, NULL),
	(14, 2, 'Prey Nob', 'ព្រៃនប់', NULL, NULL),
	(15, 2, 'Stueng Hav Chey', 'ស្ទឹងហាវ', NULL, NULL),
	(16, 2, 'Kompong Seila', 'កំពង់សីលា', NULL, NULL),
	(17, 3, 'Krong Kampong Cham', 'កំពង់ចាម', NULL, NULL),
	(18, 3, 'Kampong Siem', 'កំពង់សៀម', NULL, NULL),
	(19, 3, 'KangMeas', 'កងមាស', NULL, NULL),
	(20, 3, 'Kaoh Soutin', 'កោះសុទិន', NULL, NULL),
	(21, 3, 'Prey Chhor', 'ព្រៃឈរ', NULL, NULL),
	(22, 3, 'Srei Santhor', 'ស្រីសន្ធរ', NULL, NULL),
	(23, 3, 'Stueng Trang', 'ស្ទឹងត្រង់', NULL, NULL),
	(24, 3, 'Batheay', 'បាធាយ', NULL, NULL),
	(25, 3, 'Chamkar Leu', 'ចំការលើ', NULL, NULL),
	(26, 3, 'Cheung Prey', 'ជើងព្រៃ', NULL, NULL),
	(27, 4, 'Angkor Chum', 'អង្គរជុំ', NULL, NULL),
	(28, 4, 'Angkor Thom', 'អង្គរធំ', NULL, NULL),
	(29, 4, 'Banteay Srey', 'បន្ទាយស្រី', NULL, NULL),
	(30, 4, 'Chi Kraeng', 'ជីក្រែង', NULL, NULL),
	(31, 4, 'Kralanh', 'ក្រឡាញ់', NULL, NULL),
	(32, 4, 'Pouk', 'ពួក', NULL, NULL),
	(33, 4, 'Prasat Bakong', 'ប្រាសាទបាគង', NULL, NULL),
	(34, 4, 'Krong Siem Reap', 'ក្រុងសៀមរាប', NULL, NULL),
	(35, 4, 'Soutr Nikum', 'សុទ្រនិគមន៍', NULL, NULL),
	(36, 4, 'Srei Snam', 'ស្រីស្នំ', NULL, NULL),
	(37, 4, 'Svay Leu', 'ស្វាយលើ', NULL, NULL),
	(38, 4, 'Varin', 'វ៉ារិន', NULL, NULL),
	(39, 5, 'Banan', 'បាណន់', NULL, NULL),
	(40, 5, 'Thma Koul', 'ថ្មរគោល', NULL, NULL),
	(41, 5, 'Krong Battambang', 'ក្រុងបាត់ដំបង', NULL, NULL),
	(42, 5, 'Bavel', 'បវេល', NULL, NULL),
	(43, 5, 'Aek Phnum', 'ឯកភ្នំ', NULL, NULL),
	(44, 5, 'Moung Ruessei', 'មោង រស្សី', NULL, NULL),
	(45, 5, 'Rotonak Mondol', 'រតនាមណ្ឌល', NULL, NULL),
	(46, 5, 'Sangkae', 'សង្កៃរ', NULL, NULL),
	(47, 5, 'Samlout', 'សំឡូត', NULL, NULL),
	(48, 5, 'Sampov Lun', 'សំពៅលូន', NULL, NULL),
	(49, 5, 'Phnom Proek', 'ភ្នំព្រឹក', NULL, NULL),
	(50, 5, 'Kamrieng', 'កំរៀង', NULL, NULL),
	(51, 5, 'Koas Krala', 'គាស់ក្រឡ', NULL, NULL),
	(52, 5, 'Rukhak Kiri', 'រុក្ខគីរី', NULL, NULL),
	(53, 6, 'Kandal Stueng', '', NULL, NULL),
	(54, 6, 'Koh Thum', '', NULL, NULL),
	(55, 6, 'Mukh Kamphool', '', NULL, NULL),
	(56, 6, 'Sa Ang', '', NULL, NULL),
	(57, 6, 'Leuk Daek', '', NULL, NULL),
	(58, 6, 'Krong Ta Khmau', '', NULL, NULL),
	(59, 6, 'Kien Svay', '', NULL, NULL),
	(60, 6, 'Ponhea Leu', '', NULL, NULL),
	(61, 6, 'Lvea Aem', '', NULL, NULL),
	(62, 6, 'Khsach Kandal', '', NULL, NULL),
	(63, 7, 'Mongkol Borei', '', NULL, NULL),
	(64, 7, 'Preah Netr Preah', '', NULL, NULL),
	(65, 7, 'Serei Saophoan', '', NULL, NULL),
	(66, 7, 'Svay Chek', '', NULL, NULL),
	(67, 7, 'Ou Chrov', '', NULL, NULL),
	(68, 7, 'Thma Puok', '', NULL, NULL),
	(69, 7, 'Malai', '', NULL, NULL),
	(70, 7, 'Ou Chrov', '', NULL, NULL),
	(71, 7, 'Phnum Srok', '', NULL, NULL),
	(72, 8, 'Baribour', '', NULL, NULL),
	(73, 8, 'Kampong Chhnang', '', NULL, NULL),
	(74, 8, 'Kampong Tralach', '', NULL, NULL),
	(75, 8, 'Sameakki', '', NULL, NULL),
	(76, 8, 'Kampong Leaeng', '', NULL, NULL),
	(77, 8, 'Chol Kiri', '', NULL, NULL),
	(78, 8, 'Rolea B\'ier', '', NULL, NULL),
	(79, 8, 'Tuek Phos', '', NULL, NULL),
	(80, 9, 'Basedth', '', NULL, NULL),
	(81, 9, 'Kong Pisei', '', NULL, NULL),
	(82, 9, 'Odongk', '', NULL, NULL),
	(83, 9, 'Samraong Tong', '', NULL, NULL),
	(84, 9, 'Aoral', '', NULL, NULL),
	(85, 9, 'Phnom Sruoch', '', NULL, NULL),
	(86, 9, 'Chbar Mon', '', NULL, NULL),
	(87, 9, 'Thpong', '', NULL, NULL),
	(88, 10, 'Baray', '', NULL, NULL),
	(89, 10, 'Stueng Saen', '', NULL, NULL),
	(90, 10, 'Sandaan', '', NULL, NULL),
	(91, 10, 'Stoung', '', NULL, NULL),
	(92, 10, 'Prasat Balangk', '', NULL, NULL),
	(93, 10, 'Santuk', '', NULL, NULL),
	(94, 10, 'Prasat Sambour', '', NULL, NULL),
	(95, 10, 'Kampong Svay', '', NULL, NULL),
	(96, 11, 'Angkor Chey', '', NULL, NULL),
	(97, 11, 'Chhuk', '', NULL, NULL),
	(98, 11, 'Dorng Tong', '', NULL, NULL),
	(99, 11, 'Teouk Chhou', '', NULL, NULL),
	(100, 11, 'Banteay Meas', '', NULL, NULL),
	(101, 11, 'Kampong Trach', '', NULL, NULL),
	(102, 11, 'Chum Kiri', '', NULL, NULL),
	(103, 11, 'Kampot', '', NULL, NULL),
	(104, 12, 'Krong Kep', '', NULL, NULL),
	(105, 12, 'Damnak Chang aeur', '', NULL, NULL),
	(106, 12, 'Krong Kep', '', NULL, NULL),
	(107, 13, 'Botum Sakor', '', NULL, NULL),
	(108, 13, 'Koh Kong', '', NULL, NULL),
	(109, 13, 'Mondol Seima', '', NULL, NULL),
	(110, 13, 'Thma Bang', '', NULL, NULL),
	(111, 13, 'Kiri Sakor', '', NULL, NULL),
	(112, 13, 'Khemara Phoumin', '', NULL, NULL),
	(113, 13, 'Srae Ambel', '', NULL, NULL),
	(114, 14, 'Chhlong', '', NULL, NULL),
	(115, 14, 'Chitr Borei', '', NULL, NULL),
	(116, 14, 'Krong Kratie', '', NULL, NULL),
	(117, 14, 'Sombo', '', NULL, NULL),
	(118, 14, 'Preaek Prasob', '', NULL, NULL),
	(119, 14, 'Snoul', '', NULL, NULL),
	(120, 15, 'Kaev Seima', '', NULL, NULL),
	(121, 15, 'Ou Reang', '', NULL, NULL),
	(122, 15, 'Krong Saen', '', NULL, NULL),
	(123, 15, 'Pech Chreada', '', NULL, NULL),
	(124, 15, 'Kaoh Nheaek', '', NULL, NULL),
	(125, 16, 'Anlong Veaeng', '', NULL, NULL),
	(126, 16, 'Banteay Ampil', '', NULL, NULL),
	(127, 16, 'Chong Kal', '', NULL, NULL),
	(128, 16, 'Krong Samraong', '', NULL, NULL),
	(129, 16, 'Trapeang Prasat', '', NULL, NULL),
	(130, 17, 'Krong Pailin', '', NULL, NULL),
	(131, 17, 'Sala Krau', '', NULL, NULL),
	(132, 17, 'Chong Kal', '', NULL, NULL),
	(133, 18, 'Chey Saen', '', NULL, NULL),
	(134, 18, 'Choam Khsant', '', NULL, NULL),
	(135, 18, 'Rovieng', '', NULL, NULL),
	(136, 18, 'Sangkom Thmei', '', NULL, NULL),
	(137, 18, 'Chhaeb', '', NULL, NULL),
	(138, 18, 'Kulen', '', NULL, NULL),
	(139, 18, 'Tbaeng Mean Chey', '', NULL, NULL),
	(140, 18, 'Krong Preah Vihear', '', NULL, NULL),
	(141, 19, 'Ba Phnum', '', NULL, NULL),
	(142, 19, 'Kanhchriech', '', NULL, NULL),
	(143, 19, 'Peam Ro', '', NULL, NULL),
	(144, 19, 'Preah Sdach', '', NULL, NULL),
	(145, 19, 'Me Sang', '', NULL, NULL),
	(146, 19, 'Pea Reang', '', NULL, NULL),
	(147, 19, 'Kamchay Mear', '', NULL, NULL),
	(148, 19, 'Prey Veaeng', '', NULL, NULL),
	(149, 19, 'Peam Chor', '', NULL, NULL),
	(150, 19, 'Kampong Trabaek', '', NULL, NULL),
	(151, 19, 'Por Reang', '', NULL, NULL),
	(152, 19, 'Svay Ontor', '', NULL, NULL),
	(153, 20, 'Bakan', '', NULL, NULL),
	(154, 20, 'Krakor', '', NULL, NULL),
	(155, 20, 'Krong Pursat', '', NULL, NULL),
	(156, 20, 'Kandieng', '', NULL, NULL),
	(157, 20, 'Phnum Kravanh', '', NULL, NULL),
	(158, 20, 'Veal Veaeng', '', NULL, NULL),
	(159, 21, 'Andoung Meas', '', NULL, NULL),
	(160, 21, 'Koun Mom', '', NULL, NULL),
	(161, 21, 'Ou Chum', '', NULL, NULL),
	(162, 21, 'Ta Veaeng', '', NULL, NULL),
	(163, 21, 'Krong Banlung', '', NULL, NULL),
	(164, 21, 'Lumphat', '', NULL, NULL),
	(165, 21, 'Ou Ya Dav', '', NULL, NULL),
	(166, 21, 'Bar Kaev', '', NULL, NULL),
	(167, 22, 'Sesan', '', NULL, NULL),
	(168, 22, 'Siem Bouk', '', NULL, NULL),
	(169, 22, 'Siem Pang', '', NULL, NULL),
	(170, 22, 'Thala Barivat', '', NULL, NULL),
	(171, 22, 'Krong Stung Treng', '', NULL, NULL),
	(172, 23, 'Chantrea', '', NULL, NULL),
	(173, 23, 'Rumduol', '', NULL, NULL),
	(174, 23, 'Svay Chrum', '', NULL, NULL),
	(175, 23, 'Svay Teab', '', NULL, NULL),
	(176, 23, 'Kampong Rou', '', NULL, NULL),
	(177, 23, 'Romeas Haek', '', NULL, NULL),
	(178, 23, 'Krong Bavet', '', NULL, NULL),
	(179, 23, 'Krong Svay Rieng', '', NULL, NULL),
	(180, 24, 'Angkor Borei', '', NULL, NULL),
	(181, 24, 'Kiri Vong', '', NULL, NULL),
	(182, 24, 'Samraong', '', NULL, NULL),
	(183, 24, 'Treang', '', NULL, NULL),
	(184, 24, 'Bati', '', NULL, NULL),
	(185, 24, 'Krong Doun Kaev', '', NULL, NULL),
	(186, 24, 'Kaoh Andaet', '', NULL, NULL),
	(187, 24, 'Krong Doun Kaev', '', NULL, NULL),
	(188, 24, 'Tram Kak', '', NULL, NULL),
	(189, 24, 'Prey Kabbas', '', NULL, NULL),
	(190, 24, 'Bourei Cholsar', '', NULL, NULL),
	(191, 25, 'Dombae', '', NULL, NULL),
	(192, 25, 'Memot', '', NULL, NULL),
	(193, 25, 'Ponhea Kraek', '', NULL, NULL),
	(194, 25, 'Krouch Chhma', '', NULL, NULL),
	(195, 25, 'Tboung Khmum', '', NULL, NULL),
	(196, 25, 'Ou Reang Ov', '', NULL, NULL),
	(197, 25, 'Krong Suong', '', NULL, NULL);
/*!40000 ALTER TABLE `districts` ENABLE KEYS */;

-- Dumping structure for table ecom_alex.languages
DROP TABLE IF EXISTS `languages`;
CREATE TABLE IF NOT EXISTS `languages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `flag` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ecom_alex.languages: ~4 rows (approximately)
/*!40000 ALTER TABLE `languages` DISABLE KEYS */;
INSERT INTO `languages` (`id`, `name`, `code`, `flag`, `created_at`, `updated_at`) VALUES
	(2, 'Khmer', 'kh', 'kh.png', NULL, NULL),
	(3, 'Thai', 'th', 'th.png', NULL, NULL),
	(4, 'Franch', 'fr', 'fr.png', NULL, NULL),
	(5, 'German', 'de', 'de.png', NULL, NULL);
/*!40000 ALTER TABLE `languages` ENABLE KEYS */;

-- Dumping structure for table ecom_alex.migrations
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ecom_alex.migrations: ~21 rows (approximately)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1),
	(3, '2019_04_03_072320_create_categories_table', 1),
	(4, '2019_04_03_072654_create_products_table', 1),
	(5, '2019_04_03_073539_create_product_galleries_table', 1),
	(6, '2019_04_03_073827_create_product_colors_table', 1),
	(7, '2019_04_03_074106_create_orders_table', 1),
	(8, '2019_04_03_075255_create_order_items_table', 1),
	(9, '2019_04_03_075612_create_statuses_table', 1),
	(10, '2019_04_03_075822_create_customer_product_favorites_table', 1),
	(11, '2019_04_03_080048_create_customers_table', 1),
	(12, '2019_04_03_081059_create_shipping_addresses_table', 1),
	(13, '2019_04_03_083757_create_order_statuses_table', 1),
	(14, '2019_04_03_084010_create_promotions_table', 1),
	(15, '2019_04_03_084030_create_coupons_table', 1),
	(16, '2019_04_03_085257_create_colors_table', 1),
	(17, '2019_04_05_034203_create_languages_table', 1),
	(18, '2019_04_05_073226_create_activity_log_table', 2),
	(19, '2019_04_10_024133_create_country_state_city_tables', 3),
	(20, '2019_04_09_165740_create_teacher_student_tables', 4),
	(21, '2019_04_10_042644_create_province_district_commune_tables', 4),
	(22, '2019_04_10_023959_create_properties_table', 5),
	(23, '2019_04_10_024114_create_property_galleries_table', 5);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Dumping structure for table ecom_alex.orders
DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned DEFAULT NULL,
  `deliver_id` int(10) unsigned DEFAULT NULL,
  `payment_id` int(11) DEFAULT NULL,
  `status_id` int(11) DEFAULT NULL,
  `coupon_Id` int(11) DEFAULT NULL,
  `transaction_date` datetime DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ecom_alex.orders: ~0 rows (approximately)
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;

-- Dumping structure for table ecom_alex.order_items
DROP TABLE IF EXISTS `order_items`;
CREATE TABLE IF NOT EXISTS `order_items` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `order_id` int(10) unsigned NOT NULL,
  `product_id` int(10) unsigned NOT NULL,
  `color_id` int(10) unsigned NOT NULL,
  `qty` int(11) DEFAULT NULL,
  `price` double(8,2) DEFAULT NULL,
  `amount` double(8,2) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ecom_alex.order_items: ~0 rows (approximately)
/*!40000 ALTER TABLE `order_items` DISABLE KEYS */;
/*!40000 ALTER TABLE `order_items` ENABLE KEYS */;

-- Dumping structure for table ecom_alex.order_statuses
DROP TABLE IF EXISTS `order_statuses`;
CREATE TABLE IF NOT EXISTS `order_statuses` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `order_id` int(10) unsigned NOT NULL,
  `status_id` int(10) unsigned NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ecom_alex.order_statuses: ~0 rows (approximately)
/*!40000 ALTER TABLE `order_statuses` DISABLE KEYS */;
/*!40000 ALTER TABLE `order_statuses` ENABLE KEYS */;

-- Dumping structure for table ecom_alex.password_resets
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ecom_alex.password_resets: ~0 rows (approximately)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Dumping structure for table ecom_alex.posts
DROP TABLE IF EXISTS `posts`;
CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `post_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post_body` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ecom_alex.posts: ~0 rows (approximately)
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
INSERT INTO `posts` (`id`, `created_at`, `updated_at`, `deleted_at`, `post_title`, `post_body`, `image`, `is_active`) VALUES
	(1, '2019-04-05 08:09:37', '2019-04-05 08:09:37', NULL, 'Post 01', 'Content of post 01', 'uploads/EHaWl8kBN2ZTAMggL7fzjvZ0j002OwX24lSxBxsE.jpeg', 1);
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;

-- Dumping structure for table ecom_alex.products
DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `category_id` int(10) unsigned NOT NULL,
  `product_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_name` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `price` double(8,2) DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '0',
  `description` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ecom_alex.products: ~0 rows (approximately)
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` (`id`, `category_id`, `product_code`, `product_name`, `qty`, `price`, `is_active`, `description`, `image`, `deleted_at`, `created_at`, `updated_at`) VALUES
	(1, 6, NULL, 'IPHONE 7 Update', 10, 200.00, 1, 'IPHONE 7 Update', '1554524314.jpg', NULL, '2019-04-06 04:18:34', '2019-04-06 04:34:51');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;

-- Dumping structure for table ecom_alex.product_colors
DROP TABLE IF EXISTS `product_colors`;
CREATE TABLE IF NOT EXISTS `product_colors` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `product_id` int(10) unsigned NOT NULL,
  `color_id` int(10) unsigned NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ecom_alex.product_colors: ~0 rows (approximately)
/*!40000 ALTER TABLE `product_colors` DISABLE KEYS */;
/*!40000 ALTER TABLE `product_colors` ENABLE KEYS */;

-- Dumping structure for table ecom_alex.product_galleries
DROP TABLE IF EXISTS `product_galleries`;
CREATE TABLE IF NOT EXISTS `product_galleries` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `product_id` int(10) unsigned NOT NULL,
  `gallery_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ecom_alex.product_galleries: ~0 rows (approximately)
/*!40000 ALTER TABLE `product_galleries` DISABLE KEYS */;
/*!40000 ALTER TABLE `product_galleries` ENABLE KEYS */;

-- Dumping structure for table ecom_alex.promotions
DROP TABLE IF EXISTS `promotions`;
CREATE TABLE IF NOT EXISTS `promotions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `promotion_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ecom_alex.promotions: ~0 rows (approximately)
/*!40000 ALTER TABLE `promotions` DISABLE KEYS */;
/*!40000 ALTER TABLE `promotions` ENABLE KEYS */;

-- Dumping structure for table ecom_alex.properties
DROP TABLE IF EXISTS `properties`;
CREATE TABLE IF NOT EXISTS `properties` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `category_id` int(10) unsigned NOT NULL,
  `parent_id` int(10) unsigned NOT NULL,
  `title` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(8,2) NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone1` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone3` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `province_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `district_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `commune_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` text COLLATE utf8mb4_unicode_ci,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ecom_alex.properties: ~0 rows (approximately)
/*!40000 ALTER TABLE `properties` DISABLE KEYS */;
INSERT INTO `properties` (`id`, `user_id`, `category_id`, `parent_id`, `title`, `size`, `price`, `description`, `name`, `phone1`, `phone2`, `phone3`, `email`, `province_id`, `district_id`, `commune_id`, `location`, `deleted_at`, `created_at`, `updated_at`) VALUES
	(1, 1, 4, 12, 'ដីសំរាប់ជួល កុងត្រា 3ឆ្នាំ នៅក្រោយផ្សារឈកមាស', '2250', 2200.00, 'ដីសំរាប់ជួលកុងត្រា3ឆ្នាំ នៅក្រោយផ្សារឈូកមាស\r\n\r\nដីកំពុងមានសក្តានុពលភាព សំរាប់អភិវឌ្ឍន៍អាជីវកម្មគ្រប់ប្រភេទ ដែលពោពេញទៅដោយសំណង់ផ្ទះល្វែងថ្មីៗ និង បុរឺពិភពថ្មី ដែលមានផ្ទះរាប់ពាន់ខ្នង ល្អបំផុតសំរាប់ បើកហាងលក់ឡាន លាងឡាន រឺ បើកលក់អាជីវកម្មផ្សេងៗ។\r\nទំហំដី: 45x50 \r\nទីតាំង: នៅខាងក្រោយផ្សារឈូកមាស\r\nបើមានចំណាំអារម្មណ៌ រឺសាកសួរពត៌មានបន្ថែម សូមទាក់ទងលេខទូរស័ព្ទម្ចាស់ដីផ្ទាល់\r\nCellcard: 078/099636xxx ចុចដើម្បីតេ/Click To Call\r\nSmart Axiata: 087/098636xxx ចុចដើម្បីតេ/Click To Call\r\nMetfone: 068636xxx ចុចដើម្បីតេ/Click To Call \r\nសូមអរគុណ!', 'Samnang', '078343143', NULL, NULL, 'applephagna@gmail.com', '1', '27', '14', 'ទីតាំង: នៅខាងក្រោយផ្សារឈូកមាស', NULL, '2019-04-23 01:43:37', '2019-05-01 01:57:46');
/*!40000 ALTER TABLE `properties` ENABLE KEYS */;

-- Dumping structure for table ecom_alex.property_galleries
DROP TABLE IF EXISTS `property_galleries`;
CREATE TABLE IF NOT EXISTS `property_galleries` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `property_id` int(10) unsigned NOT NULL,
  `gallery_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ecom_alex.property_galleries: ~4 rows (approximately)
/*!40000 ALTER TABLE `property_galleries` DISABLE KEYS */;
INSERT INTO `property_galleries` (`id`, `property_id`, `gallery_image`, `deleted_at`, `created_at`, `updated_at`) VALUES
	(6, 1, '1331486308.jpg', NULL, '2019-05-01 01:57:47', '2019-05-01 01:57:47'),
	(7, 1, '484421311.jpg', NULL, '2019-05-01 01:57:47', '2019-05-01 01:57:47'),
	(8, 1, '2130992099.jpg', NULL, '2019-05-01 01:57:47', '2019-05-01 01:57:47'),
	(9, 1, '1124767072.jpg', NULL, '2019-05-01 01:57:47', '2019-05-01 01:57:47');
/*!40000 ALTER TABLE `property_galleries` ENABLE KEYS */;

-- Dumping structure for table ecom_alex.provinces
DROP TABLE IF EXISTS `provinces`;
CREATE TABLE IF NOT EXISTS `provinces` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name_en` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_kh` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ecom_alex.provinces: ~25 rows (approximately)
/*!40000 ALTER TABLE `provinces` DISABLE KEYS */;
INSERT INTO `provinces` (`id`, `name_en`, `name_kh`, `created_at`, `updated_at`) VALUES
	(1, 'Phnom Penh', 'ភ្នំពេញ', NULL, NULL),
	(2, 'Preah Sihanouk', 'ព្រះសីហនុ', NULL, NULL),
	(3, 'Kampong Cham', 'កំពង់ចាម', NULL, NULL),
	(4, 'Siem Reap', 'សៀមរាប', NULL, NULL),
	(5, 'Battambang', 'បាត់ដំបង', NULL, NULL),
	(6, 'Kandal', 'កណ្តាល', NULL, NULL),
	(7, 'Banteay Meanchey', 'បន្ទាយមានជ័យ', NULL, NULL),
	(8, 'Kampong Chhnang', 'កំពង់ឆ្នាំង', NULL, NULL),
	(9, 'Kampong Speu', 'កំពង់ស្ពឺ', NULL, NULL),
	(10, 'Kampong Thom', 'កំពង់ធំ', NULL, NULL),
	(11, 'Kampot', 'កំពត', NULL, NULL),
	(12, 'Kep', 'កែប', NULL, NULL),
	(13, 'Koh Kong', 'កោះកុង', NULL, NULL),
	(14, 'Kratie', 'ក្រចេះ', NULL, NULL),
	(15, 'Mondulkiri', 'មណ្ឌលគិរី', NULL, NULL),
	(16, 'Oddar Meanchey', 'ឧត្តរមានជ័យ', NULL, NULL),
	(17, 'Pailin', 'ប៉ៃលិន', NULL, NULL),
	(18, 'Preah Vihear', 'ព្រះវិហារ', NULL, NULL),
	(19, 'Prey Veng', 'ព្រៃវែង', NULL, NULL),
	(20, 'Pursat', 'ពោធ៌សាត់', NULL, NULL),
	(21, 'Ratanakiri', 'រតនគីរី', NULL, NULL),
	(22, 'Stung Treng', 'ស្ទឹងត្រែង', NULL, NULL),
	(23, 'Svay Rieng', 'ស្វាយរៀង', NULL, NULL),
	(24, 'Takeo', 'តាកែវ', NULL, NULL),
	(25, 'Tboung Khmum', 'ត្បូងឃ្មុំ', NULL, NULL);
/*!40000 ALTER TABLE `provinces` ENABLE KEYS */;

-- Dumping structure for table ecom_alex.shipping_addresses
DROP TABLE IF EXISTS `shipping_addresses`;
CREATE TABLE IF NOT EXISTS `shipping_addresses` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `order_id` int(11) NOT NULL,
  `customer_id` int(10) unsigned NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `district` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `commune` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `village` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `postcode` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ecom_alex.shipping_addresses: ~0 rows (approximately)
/*!40000 ALTER TABLE `shipping_addresses` DISABLE KEYS */;
/*!40000 ALTER TABLE `shipping_addresses` ENABLE KEYS */;

-- Dumping structure for table ecom_alex.states
DROP TABLE IF EXISTS `states`;
CREATE TABLE IF NOT EXISTS `states` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ecom_alex.states: ~4 rows (approximately)
/*!40000 ALTER TABLE `states` DISABLE KEYS */;
INSERT INTO `states` (`id`, `name`, `country_id`, `created_at`, `updated_at`) VALUES
	(1, 'Uttar Pradesh', 1, NULL, NULL),
	(2, 'Delhi', 1, NULL, NULL),
	(3, 'Balochistan', 2, NULL, NULL),
	(4, 'Sindh', 2, NULL, NULL);
/*!40000 ALTER TABLE `states` ENABLE KEYS */;

-- Dumping structure for table ecom_alex.statuses
DROP TABLE IF EXISTS `statuses`;
CREATE TABLE IF NOT EXISTS `statuses` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ecom_alex.statuses: ~0 rows (approximately)
/*!40000 ALTER TABLE `statuses` DISABLE KEYS */;
/*!40000 ALTER TABLE `statuses` ENABLE KEYS */;

-- Dumping structure for table ecom_alex.student
DROP TABLE IF EXISTS `student`;
CREATE TABLE IF NOT EXISTS `student` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `teacher_id` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ecom_alex.student: ~0 rows (approximately)
/*!40000 ALTER TABLE `student` DISABLE KEYS */;
/*!40000 ALTER TABLE `student` ENABLE KEYS */;

-- Dumping structure for table ecom_alex.teacher
DROP TABLE IF EXISTS `teacher`;
CREATE TABLE IF NOT EXISTS `teacher` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ecom_alex.teacher: ~0 rows (approximately)
/*!40000 ALTER TABLE `teacher` DISABLE KEYS */;
/*!40000 ALTER TABLE `teacher` ENABLE KEYS */;

-- Dumping structure for table ecom_alex.tests
DROP TABLE IF EXISTS `tests`;
CREATE TABLE IF NOT EXISTS `tests` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `testname` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `testbody` text COLLATE utf8mb4_unicode_ci,
  `is_active` tinyint(1) DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ecom_alex.tests: ~0 rows (approximately)
/*!40000 ALTER TABLE `tests` DISABLE KEYS */;
/*!40000 ALTER TABLE `tests` ENABLE KEYS */;

-- Dumping structure for table ecom_alex.users
DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `firstname` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lastname` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ecom_alex.users: ~0 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `username`, `firstname`, `lastname`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'applephagna', 'Applephagna', 'Samnang', 'applephagna@gmail.com', NULL, '$2y$10$aeYXBrvyyUJ5WZTBCo.fme8ahJWpY8b.1t4XUKnW8hOreOAKIuclC', NULL, '2019-04-05 07:43:34', '2019-04-05 07:43:34');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
