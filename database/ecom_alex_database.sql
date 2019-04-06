-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.23 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             10.1.0.5464
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
	(1, 0, 'Phones & Tablets', 'Phones and Tablets', 1, 'Ps5ITK7KIyECl0TyqlgJjieta3MmJ5iqKbuWGYCD.jpeg', NULL, '2019-04-05 09:59:18', '2019-04-05 09:59:18'),
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
	(12, 4, 'House for Sale', 'House for Sale', 1, 'PBSiDUdNGn3FvDydpPeNoi4VlDChoMf7YueZxo9Q.jpeg', NULL, '2019-04-05 10:14:40', '2019-04-05 10:14:40'),
	(13, 4, 'House for Rent', 'House for Rent', 1, 'kwfRMwaUTRWEyYDFLDYQL8JUOwq0nv00Wys35BJh.jpeg', NULL, '2019-04-05 10:15:05', '2019-04-05 10:15:05'),
	(14, 5, 'Accounting', 'Accounting', 1, 'Y50CLe8yz5ImMSOV9dj9FuH7RgM4UZRJ4UQZsGOM.jpeg', NULL, '2019-04-05 10:15:32', '2019-04-05 10:15:32'),
	(15, 5, 'Administration', 'Administration', 1, '7bjlZxYNoYpx1IfGGkyoRmPYOIMCjU6HJki7Sq3g.jpeg', NULL, '2019-04-05 10:15:55', '2019-04-05 10:15:55'),
	(16, 5, 'Banking/Insurance', 'Banking/Insurance', 1, 'fIvrEswKGjIA6KHmqStu8zEHbYpE39wkPELMg00f.jpeg', NULL, '2019-04-05 10:16:22', '2019-04-05 10:16:22'),
	(17, 5, 'Security/Driver', 'Security/Driver', 1, 'MPepdq97OMEaIotEu386HLfi8JqsOpzX7EFftRFu.jpeg', NULL, '2019-04-05 10:16:44', '2019-04-05 10:16:44');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;

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

-- Dumping data for table ecom_alex.languages: ~5 rows (approximately)
/*!40000 ALTER TABLE `languages` DISABLE KEYS */;
INSERT INTO `languages` (`id`, `name`, `code`, `flag`, `created_at`, `updated_at`) VALUES
	(1, 'English', 'en', 'en.png', NULL, NULL),
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
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ecom_alex.migrations: ~19 rows (approximately)
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
	(18, '2019_04_05_073226_create_activity_log_table', 2);
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ecom_alex.products: ~0 rows (approximately)
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
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
