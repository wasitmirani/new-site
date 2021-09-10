-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 27, 2021 at 04:33 PM
-- Server version: 5.7.24
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `newsite`
--

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
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `integrations`
--

CREATE TABLE `integrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `w_thumbnail` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `integrations`
--

INSERT INTO `integrations` (`id`, `title`, `slug`, `icon`, `thumbnail`, `w_thumbnail`, `short_description`, `description`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Amazon', 'amazon', 'amazon_icon.png', 'amazon.png', 'w_amazon.png', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. ', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. ', NULL, NULL, NULL),
(2, 'eBay', 'eBay', 'eBay_icon.png', 'eBay.png', 'w_ebay.png', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. ', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. ', NULL, NULL, NULL),
(3, 'Shopify', 'shopify ', 'shopify_icon.png ', 'shopify.png', 'w_shopify.png', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. ', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. ', NULL, NULL, NULL),
(4, 'BigCommerce ', 'BigCommerce ', 'bigcommerce_icon.png', 'bigcommerce.png', 'w_bigcommerce.png', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.', NULL, NULL, NULL),
(5, 'OnBuy', 'OnBuy', 'onbuy_icon.png', 'onbuy.png', 'w_onbuy.png', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. ', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. ', NULL, NULL, NULL),
(6, 'Wish', 'wish', 'wish_icon.png', 'wish.png', 'w_wish.png', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. ', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. ', NULL, NULL, NULL),
(7, 'Linnworks', 'linnworks', 'linnworks_icon.png', 'linnworks.png', 'w_linnworks.png', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. ', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. ', NULL, NULL, NULL),
(8, 'fruugo', 'fruugo', 'fruugo_icon.png', 'fruugo.jpg', 'w_fruugo.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. ', 'Lorem Ipsum is simply dummy text of theLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry.  printing and typesetting industry. ', NULL, NULL, NULL),
(9, 'woocommerce ', 'WooCommerce ', 'woocommerce_icon.png', 'woocommerce.png', 'woo_bigcommerce.png', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.', NULL, NULL, NULL),
(10, 'Etsy', 'Etsy', 'Etsy_icon.png', 'Etsy.png', 'w_Etsy.png', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. ', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. ', NULL, NULL, NULL),
(11, 'gumtree', 'Gumtree', 'gumtree_icon.png', 'gumtree.png', 'w_gumtree.png', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. ', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. ', NULL, NULL, NULL),
(12, 'googleshop', 'google', 'google_icon.png', 'google.png', 'w_google.png', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. ', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. ', NULL, NULL, NULL),
(13, 'FacebookShop', 'FacebookShop', 'facebook_icon.png', 'facebook.png', 'w_facebook.png', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. ', 'Lorem Ipsum is simply dummy text of theLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry.  printing and typesetting industry. ', NULL, NULL, NULL),
(14, 'InstaShop', 'InstaShop', 'insta_icon.png', 'insta.png', 'w_insta.png', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. ', 'Lorem Ipsum is simply dummy text of theLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry.  printing and typesetting industry. ', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `integration_cards`
--

CREATE TABLE `integration_cards` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `integration_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `integration_cards`
--

INSERT INTO `integration_cards` (`id`, `integration_id`, `title`, `short_description`, `thumbnail`, `created_at`, `updated_at`) VALUES
(1, 1, 'Simple Process', 'Integrating your Amazon store on eDropShip’s portal is quite simple. Just add your Amazon listings and start selling right away. \r\n', 'life-ring', NULL, NULL),
(2, 1, 'Easy and Swift Payments\r\n', 'eDropShip provides secure and automated payments to help you to operate from a one-for-all platform. \r\n', NULL, NULL, NULL),
(3, 1, 'Automated Processing \r\n', 'Our portal enables automated processing of orders and communicates the shipping instructions instantly to your suppliers. \r\n\r\n', NULL, NULL, NULL),
(4, 1, 'Synchronized Inventory ', 'We update the inventory levels every few minutes to prevent you from overselling. \r\n\r\n', NULL, NULL, NULL),
(5, 2, 'Simple Process', 'Integrating your eBay store into eDropShip’s portal is quite simple. Just add your product listings and start selling right away. ', 'life-ring', NULL, NULL),
(6, 2, 'Easy and Swift Payments\r\n', 'eDropShip provides secure and automated payments to help you to operate from a one-for-all platform. ', NULL, NULL, NULL),
(7, 2, 'Automated Processing \r\n', 'Our portal enables automated processing of orders and communicates the shipping instructions instantly to your suppliers. \r\n', NULL, NULL, NULL),
(8, 2, 'Synchronized Inventory ', '\r\nWe update the inventory levels every few minutes to prevent you from overselling. ', NULL, NULL, NULL),
(9, 3, 'Simple Process', 'Integrating your Shopify store into eDropShip’s portal is quite simple. Just add your product listings and start selling right away. ', 'life-ring', NULL, NULL),
(10, 3, 'Easy and Swift Payments\r\n', 'eDropShip provides secure and automated payments to help you to operate from a one-for-all platform. ', NULL, NULL, NULL),
(11, 3, 'Automated Processing \r\n', 'Our portal enables automated processing of orders and communicates the shipping instructions instantly to your suppliers. \r\n', NULL, NULL, NULL),
(12, 3, 'Synchronized Inventory ', '\r\nWe update the inventory levels every few minutes to prevent you from overselling. ', NULL, NULL, NULL),
(13, 4, 'Simple Process', 'Integrating your BigCommerce store into eDropShip’s portal is quite simple. Just add your product listings and start selling right away. ', 'life-ring', NULL, NULL),
(14, 4, 'Easy and Swift Payments\r\n', 'eDropShip provides secure and automated payments to help you to operate from a one-for-all platform. ', NULL, NULL, NULL),
(15, 4, 'Automated Processing \r\n', 'Our portal enables automated processing of orders and communicates the shipping instructions instantly to your suppliers. \r\n', NULL, NULL, NULL),
(16, 4, 'Synchronized Inventory ', '\r\nWe update the inventory levels every few minutes to prevent you from overselling. ', NULL, NULL, NULL),
(17, 5, 'Simple Process', 'Integrating your OnBuy store into eDropShip’s portal is quite simple. Just add your product listings and start selling right away. ', 'life-ring', NULL, NULL),
(18, 5, 'Easy and Swift Payments\r\n', 'eDropShip provides secure and automated payments to help you to operate from a one-for-all platform. ', NULL, NULL, NULL),
(19, 5, 'Automated Processing \r\n', 'Our portal enables automated processing of orders and communicates the shipping instructions instantly to your suppliers. \r\n', NULL, NULL, NULL),
(20, 5, 'Synchronized Inventory ', '\r\nWe update the inventory levels every few minutes to prevent you from overselling. ', NULL, NULL, NULL),
(21, 6, 'Simple Process', 'Integrating your wish store into eDropShip’s portal is quite simple. Just add your product listings and start selling right away. ', 'life-ring', NULL, NULL),
(22, 6, 'Easy and Swift Payments\r\n', 'eDropShip provides secure and automated payments to help you to operate from a one-for-all platform. ', NULL, NULL, NULL),
(23, 6, 'Automated Processing \r\n', 'Our portal enables automated processing of orders and communicates the shipping instructions instantly to your suppliers. \r\n', NULL, NULL, NULL),
(24, 6, 'Synchronized Inventory ', '\r\nWe update the inventory levels every few minutes to prevent you from overselling. ', NULL, NULL, NULL),
(29, 11, 'Simple Process', 'Integrating your gumtree store into eDropShip’s portal is quite simple. Just add your product listings and start selling right away. ', 'life-ring', NULL, NULL),
(30, 11, 'Easy and Swift Payments\r\n', 'eDropShip provides secure and automated payments to help you to operate from a one-for-all platform. ', NULL, NULL, NULL),
(31, 11, 'Automated Processing \r\n', 'Our portal enables automated processing of orders and communicates the shipping instructions instantly to your suppliers. \r\n', NULL, NULL, NULL),
(32, 11, 'Synchronized Inventory ', '\r\nWe update the inventory levels every few minutes to prevent you from overselling. ', NULL, NULL, NULL),
(33, 11, 'Simple Process', 'Integrating your gumtree store into eDropShip’s portal is quite simple. Just add your product listings and start selling right away. ', 'life-ring', NULL, NULL),
(34, 11, 'Easy and Swift Payments\r\n', 'eDropShip provides secure and automated payments to help you to operate from a one-for-all platform. ', NULL, NULL, NULL),
(35, 11, 'Automated Processing \r\n', 'Our portal enables automated processing of orders and communicates the shipping instructions instantly to your suppliers. \r\n', NULL, NULL, NULL),
(36, 11, 'Synchronized Inventory ', '\r\nWe update the inventory levels every few minutes to prevent you from overselling. ', NULL, NULL, NULL),
(37, 12, 'Simple Process', 'Integrating your GoogleShop store into eDropShip’s portal is quite simple. Just add your product listings and start selling right away. ', 'life-ring', NULL, NULL),
(38, 12, 'Easy and Swift Payments\r\n', 'eDropShip provides secure and automated payments to help you to operate from a one-for-all platform. ', NULL, NULL, NULL),
(39, 12, 'Automated Processing \r\n', 'Our portal enables automated processing of orders and communicates the shipping instructions instantly to your suppliers. \r\n', NULL, NULL, NULL),
(40, 12, 'Synchronized Inventory ', '\r\nWe update the inventory levels every few minutes to prevent you from overselling. ', NULL, NULL, NULL),
(42, 8, 'Simple Process', 'Integrating your fruugo store into eDropShip’s portal is quite simple. Just add your product listings and start selling right away. ', 'life-ring', NULL, NULL),
(43, 8, 'Easy and Swift Payments\r\n', 'eDropShip provides secure and automated payments to help you to operate from a one-for-all platform. ', NULL, NULL, NULL),
(44, 8, 'Automated Processing \r\n', 'Our portal enables automated processing of orders and communicates the shipping instructions instantly to your suppliers. \r\n', NULL, NULL, NULL),
(45, 8, 'Synchronized Inventory ', '\r\nWe update the inventory levels every few minutes to prevent you from overselling. ', NULL, NULL, NULL),
(46, 9, 'Simple Process', 'Integrating your woocommerce store into eDropShip’s portal is quite simple. Just add your product listings and start selling right away. ', 'life-ring', NULL, NULL),
(47, 9, 'Easy and Swift Payments\r\n', 'eDropShip provides secure and automated payments to help you to operate from a one-for-all platform. ', NULL, NULL, NULL),
(48, 9, 'Automated Processing \r\n', 'Our portal enables automated processing of orders and communicates the shipping instructions instantly to your suppliers. \r\n', NULL, NULL, NULL),
(49, 9, 'Synchronized Inventory ', '\r\nWe update the inventory levels every few minutes to prevent you from overselling. ', NULL, NULL, NULL),
(50, 10, 'Simple Process', 'Integrating your Etsy store into eDropShip’s portal is quite simple. Just add your product listings and start selling right away. ', 'life-ring', NULL, NULL),
(51, 10, 'Easy and Swift Payments\r\n', 'eDropShip provides secure and automated payments to help you to operate from a one-for-all platform. ', NULL, NULL, NULL),
(52, 10, 'Automated Processing \r\n', 'Our portal enables automated processing of orders and communicates the shipping instructions instantly to your suppliers. \r\n', NULL, NULL, NULL),
(53, 10, 'Synchronized Inventory ', '\r\nWe update the inventory levels every few minutes to prevent you from overselling. ', NULL, NULL, NULL),
(54, 14, 'Simple Process', 'Integrating your instashop store into eDropShip’s portal is quite simple. Just add your product listings and start selling right away. ', 'life-ring', NULL, NULL),
(55, 14, 'Easy and Swift Payments\r\n', 'eDropShip provides secure and automated payments to help you to operate from a one-for-all platform. ', NULL, NULL, NULL),
(56, 14, 'Automated Processing \r\n', 'Our portal enables automated processing of orders and communicates the shipping instructions instantly to your suppliers. \r\n', NULL, NULL, NULL),
(57, 14, 'Synchronized Inventory ', '\r\nWe update the inventory levels every few minutes to prevent you from overselling. ', NULL, NULL, NULL),
(58, 13, 'Simple Process', 'Integrating your FacebookShop store into eDropShip’s portal is quite simple. Just add your product listings and start selling right away. ', 'life-ring', NULL, NULL),
(59, 13, 'Easy and Swift Payments\r\n', 'eDropShip provides secure and automated payments to help you to operate from a one-for-all platform. ', NULL, NULL, NULL),
(60, 13, 'Automated Processing \r\n', 'Our portal enables automated processing of orders and communicates the shipping instructions instantly to your suppliers. \r\n', NULL, NULL, NULL),
(61, 13, 'Synchronized Inventory ', '\r\nWe update the inventory levels every few minutes to prevent you from overselling. ', NULL, NULL, NULL),
(62, 7, 'Simple Process', 'Integrating your linnworks store into eDropShip’s portal is quite simple. Just add your product listings and start selling right away. ', 'life-ring', NULL, NULL),
(63, 7, 'Easy and Swift Payments\r\n', 'eDropShip provides secure and automated payments to help you to operate from a one-for-all platform. ', NULL, NULL, NULL),
(64, 7, 'Automated Processing \r\n', 'Our portal enables automated processing of orders and communicates the shipping instructions instantly to your suppliers. \r\n', NULL, NULL, NULL),
(65, 7, 'Synchronized Inventory ', '\r\nWe update the inventory levels every few minutes to prevent you from overselling. ', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `integration_sections`
--

CREATE TABLE `integration_sections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `integration_id` bigint(20) UNSIGNED NOT NULL,
  `heading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subheading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbnail_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thumbnail_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thumbnail_3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `integration_sections`
--

INSERT INTO `integration_sections` (`id`, `integration_id`, `heading`, `subheading`, `thumbnail_1`, `thumbnail_2`, `thumbnail_3`, `description`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 'Amp up your sales on Amazon!', 'Diversify Your Inventory ', 'our-statistic-image-relative.png', 'service3.jpg', 'service4.png', 'Make the maximum from one of the world’s largest ecommerce marketplace. Diversify your inventory by dropshipping quality products from eDropShips’s vast UK-based supplier base and expand your clientele on the go with our integration panel.\r\n\r\n', NULL, NULL, NULL),
(4, 10, 'Amp up your sales on Etsy!\r\n', 'Diversify Your Inventory ', 'our-statistic-image-relative.png', 'service3.jpg', 'service4.png', 'Work to grow your business rather than getting stuck in complicated procedures with eDropShip. Speed up your transactions with automation that will reduce your work by half and let you focus on your growth strategies. \r\n\r\n', NULL, NULL, NULL),
(5, 5, 'Amp up your sales on OnBuy!', 'Diversify Your Inventory ', 'our-statistic-image-relative.png', 'service3.jpg', 'service4.png', 'Work to grow your business rather than getting stuck in complicated procedures with eDropShip. Make your online store time-efficient with automation that will reduce your work by half and let you focus on your growth strategies.', NULL, NULL, NULL),
(6, 13, 'Sync your inventory to Facebook and enjoy increased sales. ', 'Diversify Your Inventory ', 'our-statistic-image-relative.png', 'service3.jpg', 'service4.png', 'Add more products to your inventory without them taking more of your space. Dropship from verified UK-based suppliers at eDropShip. Source our inventory to expand your clientele and grow your business.  Whether seasonal items or home items, you can find all kinds of items with our supplier base.  \r\n\r\n', NULL, NULL, NULL),
(7, 4, 'Diversify your inventory and enjoy increased sales. ', 'Diversify Your Inventory ', 'our-statistic-image-relative.png', 'service3.jpg', 'service4.png', 'Add more products to your inventory without them taking more of your space. Dropship from verified UK-based suppliers at eDropShip. Source our inventory to expand your clientele and grow your business.  Whether seasonal items or home items, you can find all kinds of products with our supplier base.  \r\n', NULL, NULL, NULL),
(8, 11, 'Source inventory for your GumTree store and diversify your sales!', 'Diversify Your Inventory ', 'our-statistic-image-relative.png', 'service3.jpg', 'service4.png', 'Work to grow your business rather than getting stuck in complicated procedures with eDropShip. Accelerate your transactions with automation that will reduce your work by half and let you focus on your growth strategies. \r\n\r\n', NULL, NULL, NULL),
(9, 14, 'Link your Insta Store with our intuitive, simple integration panel', 'Diversify Your Inventory ', 'our-statistic-image-relative.png', 'service3.jpg', 'service4.png', 'Work to grow your business rather than getting stuck in complicated procedures with eDropShip. Accelerate your transactions with automation that will reduce your work by half and let you focus on your growth strategies. ', NULL, NULL, NULL),
(10, 6, 'Link your Wish Store with our intuitive, simple integration panel', 'Diversify Your Inventory ', 'our-statistic-image-relative.png', 'service3.jpg', 'service4.png', 'Add more products to your inventory without them taking more of your space. Dropship from verified UK-based suppliers at eDropShip. Source our inventory to expand your clientele and grow your business.  Whether seasonal items or home items, you can find all kinds of items with our supplier base.  ', NULL, NULL, NULL),
(11, 3, 'Source inventory for your Shopify store and diversify your sales!', 'Diversify Your Inventory ', 'our-statistic-image-relative.png', 'service3.jpg', 'service4.png', 'Add more products to your inventory without them taking more of your space. Dropship from verified UK-based suppliers at eDropShip. Source our inventory to expand your clientele and grow your business.  From home to stationary, you can find all kinds of trending items with our supplier base \r\n\r\n', NULL, NULL, NULL),
(13, 12, 'Link your Google store with our intuitive, simple integration panel', 'Diversify Your Inventory ', 'our-statistic-image-relative.png', 'service3.jpg', 'service4.png', 'Add more products to your inventory without them taking more of your space. Dropship from verified UK-based suppliers at eDropShip. Source our inventory to expand your clientele and grow your business.  Whether seasonal items or home items, you can find all kinds of products with our supplier base.  \r\n\r\n', NULL, NULL, NULL),
(14, 9, 'Link your store with our intuitive, simple integration panel', 'Diversify Your Inventory ', 'our-statistic-image-relative.png', 'service3.jpg', 'service4.png', 'Add more products to your inventory without them taking more of your space. Dropship from verified UK-based suppliers at eDropShip. Source our inventory to expand your clientele and grow your business.  Whether seasonal items or home items, you can find all kinds of products with our supplier base.  ', NULL, NULL, NULL),
(15, 2, 'Integrate your eBay Store with our smooth, easy integration process', 'Diversify Your Inventory ', 'our-statistic-image-relative.png', 'service3.jpg', 'service4.png', 'Add more products to your eBay listing by dropshipping from verified UK-based suppliers. Expnad your inventory to expand your clientele and grow your online store.  From home items to beauty products, you can find all kinds of trending items with our supplier base.   ', NULL, NULL, NULL),
(16, 7, 'Integrate your linworks Store with our smooth, easy integration process', 'Diversify Your Inventory ', 'our-statistic-image-relative.png', 'service3.jpg', 'service4.png', 'Add more products to your eBay listing by dropshipping from verified UK-based suppliers. Expnad your inventory to expand your clientele and grow your online store.  From home items to beauty products, you can find all kinds of trending items with our supplier base.   ', NULL, NULL, NULL),
(17, 8, 'Integrate your Fruugo Store with our smooth, easy integration process', 'Diversify Your Inventory ', 'our-statistic-image-relative.png', 'service3.jpg', 'service4.png', 'Add more products to your eBay listing by dropshipping from verified UK-based suppliers. Expnad your inventory to expand your clientele and grow your online store.  From home items to beauty products, you can find all kinds of trending items with our supplier base.   ', NULL, NULL, NULL);

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
(4, '2021_08_17_084929_create_integrations_table', 1),
(5, '2021_08_17_090307_create_integration_sections_table', 1),
(6, '2021_08_17_195905_create_pricings_table', 2),
(7, '2021_08_17_200825_create_pricing_addons_table', 2),
(8, '2021_08_18_121041_create_partners_table', 3),
(9, '2021_08_18_121714_create_partner_sections_table', 3),
(10, '2021_08_18_124930_create_partner_cards_table', 3),
(11, '2021_08_19_125046_create_partner_futures_table', 4),
(12, '2021_08_22_192547_create_integration_cards_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

CREATE TABLE `partners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `partners`
--

INSERT INTO `partners` (`id`, `name`, `slug`, `title`, `short_description`, `thumbnail`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Seller', 'seller', 'Become Our Seller', 'eDropShip is fully automated portal for bulk trading across the globe. We achieve this by providing required tools to suppliers for their products to meet a global audience, and helping customers easily and reliably by identifying products and suppliers.', NULL, NULL, NULL, NULL),
(2, 'Vendor/Supplier', 'vendor', 'Sign Up, Punch In Your Product Listing, And Start Selling', 'eDropShip is an automated one-stop solution that offers everything needed to scale your business. We help out the vendors who seek to expand their clientele.', NULL, NULL, NULL, NULL),
(3, 'Exporter ', 'Exporter', 'Go Global by Signing Up\r\non', 'Connect with buyers from across\r\nthe globe and let us worry about the rest.', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `partner_cards`
--

CREATE TABLE `partner_cards` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `partner_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sort` int(11) NOT NULL DEFAULT '10',
  `short_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `partner_cards`
--

INSERT INTO `partner_cards` (`id`, `partner_id`, `title`, `sort`, `short_description`, `thumbnail`, `created_at`, `updated_at`) VALUES
(1, 1, '\r\nOur integrated solution', 1, 'profoundly helps to connect suppliers around the world. Just Click and DropShip.', 'Our integrated solution02-01.png', NULL, NULL),
(2, 1, 'Low costs and low risk\r\n', 2, 'Increase the cash flow – you pay the supplier when you are paid by the client.', 'Low costs-01.png', NULL, NULL),
(3, 1, 'Expand your business\r\n', 3, 'expand your business globally as we have everything you need to sell in more than 30+ sales channels.', 'Data-and-Analyticss.png', NULL, NULL),
(4, 1, 'Quick shipping\r\n', 4, 'Quick shipping is the most important advantage.  you do not have to wait long in the queues for deliveries. ', 'Streamlined-Operations.png', NULL, NULL),
(6, 2, 'Sign-Up', 1, 'Sign up as vendor on our portal and fill in the requisite details like your contact info.', '2.png', NULL, NULL),
(7, 2, 'Log-In', 2, 'You can login and add your product listing, which will be visible to thousands of sellers', '3.png', NULL, NULL),
(8, 2, 'Easy Earning Record\r\n', 3, 'It keeps you up-to-date through analytics and helps track your earnings.', 'HASSLE-FREE-EXPERIENCE.png', NULL, NULL),
(9, 2, 'Setup Your Dashboard', 4, 'Easy-to-use dashboard. This is an all-in-one venue that manages your inventory and orders in one place.', 'Online-Store.png', NULL, NULL),
(10, 3, 'Display Your Brand', 1, 'Set up your store on eDropShip and reach thousands of new buyers every day.', 'Display-Your-Brand.png', NULL, NULL),
(11, 3, 'Integrate Your Stores', 2, 'Utilize our 30+ integration channels to ramp up your sales and unify your brand.', 'Integrate-Your-Stores.png', NULL, NULL),
(12, 3, 'Delegate\r\n', 3, 'Focus on expanding your customer base and let us handle the communications.', 'Delegate.png', NULL, NULL),
(13, 3, 'Secure Payments', 4, 'We provide secure payment methods for your transactions. Generally we gave a real solutions. ', 'secure-Payment.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `partner_futures`
--

CREATE TABLE `partner_futures` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `partner_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sort` int(11) NOT NULL DEFAULT '12',
  `short_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `partner_futures`
--

INSERT INTO `partner_futures` (`id`, `partner_id`, `title`, `sort`, `short_description`, `thumbnail`, `created_at`, `updated_at`) VALUES
(4, 1, 'Integrated', 4, 'With 30+ channel integrations (including with Shopify, eBay and Amazon, we\'ve got a way to do stuff that\'s set up to optimize incentive.', 'Streamlined-Operations.png', NULL, NULL),
(8, 1, 'Refund Policy', 2, 'Your customers can return your item and get 100% refund if they are not happy with the order. Therefore, you don\'t need to think about the disappointment of your clients.', 'Reliable-Returns.png', NULL, NULL),
(9, 1, 'Customer support', 3, 'We\'re still available to help you out here. You can contact us by phone, email and live chat.', 'customer-support.png', NULL, NULL),
(10, 1, 'Explore Opportunities', 1, 'In particular, eDropShip works with a UK-based business. We will leap your newly started company to infinite possibilities', 'Expand your bussiness-01.png', NULL, NULL),
(11, 2, 'Sales Channels', 2, 'Choose from the most popular marketplaces and shopping carts.', 'integration.png', NULL, NULL),
(12, 2, 'Easy Integration', 2, 'With just a few clicks, you’ll be securely connected to your chosen platforms.', 'Integration-Channels.png', NULL, NULL),
(13, 2, 'Ongoing Development', 2, 'We’re constantly adding new integrations to help you save even more time!', 'development.png', NULL, NULL),
(14, 2, 'Dedicated Customer', 2, 'Our dedicated customer service is just an email/message away. It is available round the clock throughout the week to facilitate', 'customer-support.png', NULL, NULL),
(15, 3, '\r\nEasy, Simplified Transactions', 1, 'Sign up and start receiving orders from all over the world. We intermediate your communication with the buyers to provide a convenient and trouble-free experience.', 'Easy,-Simplified-Transactions.png', NULL, NULL),
(16, 3, 'Streamlined Operations', 2, 'Our integration channels allow you to link your stores on other platforms like eBay, Amazon, WooCommerce, and Wish, etc. to your eDropShip account.', 'Streamlined-Operations.png', NULL, NULL),
(17, 3, 'Data and analytics', 3, 'Leverage the in-depth data of your transaction. We provide a rundown on the daily, weekly, monthly, and yearly sales and overall performance.', 'DATA-AND-ANALYTICS.png', NULL, NULL),
(18, 3, 'Hassle-free experience', 4, 'We take the orders on your behalf and handle all the customer interactions to help you focus on other stuff.', 'HASSLE-FREE-EXPERIENCE.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `partner_sections`
--

CREATE TABLE `partner_sections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `partner_id` bigint(20) UNSIGNED NOT NULL,
  `heading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subheading` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_description` varchar(432) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `btn_class` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `btn_label` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `btn_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `partner_sections`
--

INSERT INTO `partner_sections` (`id`, `partner_id`, `heading`, `slug`, `subheading`, `short_description`, `img_1`, `img_2`, `img_3`, `description`, `btn_class`, `btn_label`, `btn_link`, `created_at`, `updated_at`) VALUES
(1, 1, 'Advantages of working with us', 'heading-two', 'We are one of the largest UK based wholesalers. Let’s get connect with us to avail the following benefits.', 'Quick shipping is the most important advantage. You do not have to deal with the courier companies and you do not have to wait long in the queues for deliveries. ', 'our-statistic-image-relative.png', 'service1.jpg', 'our-statistic-image-absolute.png', 'Your customers can return your item and get 100% refund if they are not happy with the order. Therefore, you don\'t need to think about the disappointment of your clients.', 'In particular, eDropShip works with a UK-based business. We will leap your newly started company to infinite possibilities.', ' We\'re still available to help you out here. You can contact us by phone, email and live chat.', NULL, NULL, NULL),
(2, 1, 'Become a Seller with \r\n', 'heading-one', ' With 30+ channel integrations (including with Shopify, eBay and Amazon, we\'ve got a way to do stuff that\'s set up to optimize incentive.', 'We are set up to help you concentrate on the things that matter to you. Your time is precious as a company, so we\'ve set up our procedures to be simple and intuitive.', 'service4.png', 'service3.jpg', 'our-statistic-image-absolute.png', ' Our dedicated customer support team is familiar with the back-to-front portal and is only ever away by phone or e-mail.\r\n', ' We have a unique way of doing things and will always push to help our seller’s group by integrating new functionality into our platform.', 'Sellers pay only 10% commission on each product without taking any risk.', NULL, NULL, NULL),
(4, 2, 'Get More Audience For Your Products', 'heading-one', 'eDropShip connects the vendors with sellers and provide them with the requisite tools to extend their sales globally. We enable you to reach out to sellers in a hassle-free manner.', 'Unlimited access to thousands of sellers', 'service4.png', 'service3.jpg', 'our-statistic-image-absolute.png', '30+ integration channels\r\n', 'Reduced marketing costs', 'Time-effective, as our ultra-fast portal handles all the routine tasks for you', 'Our dedicated customer service is just an email/message away. It is available round the clock throughout the week to facilitate', NULL, NULL),
(5, 2, 'Integration Panel', 'heading-two', '\r\n\r\nThe Vendors Link Their Products On Other Marketplaces To EDropShip', 'We offer integrations with other online marketplaces like eBay, Amazon, Wish, Magento , WooCommerce and so on. You can link your products on these platforms to eDropShip. We are striving to enhance our integration panel, which has now 30+ sales channels.\r', 'our-statistic-image-relative.png', 'service1.jpg', 'our-statistic-image-absolute.png', 'The Vendors Link Their Products On Other Marketplaces To EDropShip', 'In particular, eDropShip works with a UK-based business. We will leap your newly started company to infinite possibilities.', ' We\'re still available to help you out here. You can contact us by phone, email and live chat.', NULL, NULL, NULL),
(6, 3, '\r\nStatements Gothrought  ', 'heading-one', 'We aspire to make a mark in the world of ecommerce by providing the right infrastructure and make business flourish with reduced costs and high profits.', 'With eDropShip, you can widen your customer base. Boost your sales without any further marketing effort and cost. We ensure a simplified, user-friendly experience by providing these specifics:', 'our-statistic-image-relative.png', 'service1.jpg', 'our-statistic-image-absolute.png', 'We strive to remove the barriers between the various ecommerce actors via an automated portal—a one-stop solution for traders, be it sellers, buyers, vendors, exporters, and manufacturers.', 'Customers First, Be Transparent , Build Trust , Learn and Innovate , Rise to the Occasion , Diversify , Be Inclusive , Deliver', 'eDropShip is an automated portal connecting exporters to buyers. We make your enterprise visible to the potential customers and help it scale.', 'We offer you an online venue to establish your business’s credibility and extend your reach while letting the sales soar.', NULL, NULL),
(7, 3, 'Garner Global Customers with \r\n', 'heading-two', '\r\n\r\n\r\n\r\neDropShip is an automated portal connecting exporters to buyers. We make your enterprise visible to the potential customers and help it scale. \r\n\r\n\r\n', '\r\n\r\n\r\nSign up and start receiving orders from all over the world. We intermediate your communication with the buyers to provide a convenient and trouble-free experience\r\n', 'our-statistic-image-relative.png', 'service1.jpg', 'our-statistic-image-absolute.png', '\r\n\r\nOur integration channels allow you to link your stores on other platforms like eBay, Amazon, WooCommerce, and Wish, etc. to your eDropShip account.', '\r\n\r\nTo bring the actors in ecommerce together at one place by tapping the full potential of internet and technological innovation.', 'eDropShip is an automated portal connecting exporters to buyers. We make your enterprise visible to the potential customers and help it scale.\r\n\r\n', '', NULL, NULL);

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
-- Table structure for table `pricings`
--

CREATE TABLE `pricings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'professional',
  `class` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `btn_class` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rate` double(15,2) DEFAULT '0.00',
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sort` int(10) UNSIGNED DEFAULT '12',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pricings`
--

INSERT INTO `pricings` (`id`, `title`, `type`, `class`, `btn_class`, `rate`, `description`, `thumbnail`, `sort`, `created_at`, `updated_at`) VALUES
(1, 'Free Trial', 'starter', 'bg-burning-orange-gradient', 'bg-burning-orange', 0.00, 'Free TrialFree TrialFree TrialFree TrialFree Trial', NULL, 1, NULL, NULL),
(2, 'Startups', 'professional', 'bg-ocean-blue-gradient', 'bg-ocean-blue-gradient', 9.99, 'StartupsStartupsStartups', NULL, 2, NULL, NULL),
(3, 'Business\r\n', 'premium', 'bg-magenta-gradient', ' bg-magenta', 14.99, 'Free TrialFree TrialFree TrialFree TrialFree Trial', NULL, 3, NULL, NULL),
(4, 'Professional ', 'professional', 'bg-ocean-blue-gradient', 'bg-ocean-blue-gradient', 24.99, 'StartupsStartupsStartups', NULL, 4, NULL, NULL),
(5, 'Enterprise', 'starter', 'bg-burning-orange-gradient', 'bg-burning-orange', 49.99, 'StartupsStartupsStartups', NULL, 5, NULL, NULL),
(6, 'CORPORATE', 'premium', 'bg-magenta-gradient', ' bg-magenta', 99.99, 'StartupsStartupsStartups', NULL, 6, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pricing_addons`
--

CREATE TABLE `pricing_addons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `price_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rate` double(15,2) DEFAULT '0.00',
  `sort` int(10) UNSIGNED DEFAULT '12',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pricing_addons`
--

INSERT INTO `pricing_addons` (`id`, `price_id`, `title`, `rate`, `sort`, `created_at`, `updated_at`) VALUES
(1, 1, '50 orders / month', 0.00, 1, NULL, NULL),
(2, 1, '1 Payment card Integration', 0.00, 2, NULL, NULL),
(3, 1, '1 Channel Integration\r\n', 0.00, 3, NULL, NULL),
(4, 1, '1 user Access', 0.00, 4, NULL, NULL),
(5, 2, '150 orders / month\r\n', 0.00, 1, NULL, NULL),
(6, 2, '2 Payment card Integration\r\n', 0.00, 2, NULL, NULL),
(7, 2, '2 Channel Integration\r\n', 0.00, 3, NULL, NULL),
(8, 2, '2 user Access', 0.00, 4, NULL, NULL),
(9, 1, '10 Product Listings\r\n', 0.00, 5, NULL, NULL),
(10, 2, '100 Product Listings\r\n', 0.00, 5, NULL, NULL),
(11, 3, '250 orders / month\r\n', 0.00, 1, NULL, NULL),
(12, 3, '3 Payment card Integration\r\n', 0.00, 2, NULL, NULL),
(13, 3, '3 Channel Integration\r\n', 0.00, 3, NULL, NULL),
(14, 3, '3 user Access', 0.00, 4, NULL, NULL),
(15, 3, '200 Product Listings\r\n', 0.00, 5, NULL, NULL),
(16, 4, '450 orders / month\r\n', 0.00, 1, NULL, NULL),
(17, 4, '5 Payment card Integration', 0.00, 2, NULL, NULL),
(18, 4, '5 Channel Integration\r\n\r\n', 0.00, 3, NULL, NULL),
(19, 4, '5 user Access', 0.00, 4, NULL, NULL),
(20, 5, 'Unlimited orders / month\r\n', 0.00, 1, NULL, NULL),
(21, 5, 'unlimited Payment card Integration\r\n', 0.00, 1, NULL, NULL),
(22, 5, 'Unlimited Channel Integration\r\n', 0.00, 2, NULL, NULL),
(23, 5, '10 user Access\r\n', 0.00, 3, NULL, NULL),
(24, 5, '1000 Product Listings\r\n', 0.00, 4, NULL, NULL),
(25, 5, 'Dedicated eGuru\r\n', 0.00, 5, NULL, NULL),
(26, 4, '500 Product Listings\r\n', 0.00, 5, NULL, NULL),
(27, 6, 'Unlimited orders / month\r\n', 0.00, 1, NULL, NULL),
(28, 6, 'unlimited Payment card Integration\r\n', 0.00, 1, NULL, NULL),
(29, 6, 'Unlimited Channel Integration\r\n', 0.00, 2, NULL, NULL),
(30, 6, 'Unlimited user Access\r\n', 0.00, 3, NULL, NULL),
(31, 6, 'Unlimited Product Listings\r\n\r\n', 0.00, 4, NULL, NULL),
(32, 6, 'Dedicated Success Manager\r\n', 0.00, 5, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `integrations`
--
ALTER TABLE `integrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `integration_cards`
--
ALTER TABLE `integration_cards`
  ADD PRIMARY KEY (`id`),
  ADD KEY `integration_cards_integration_id_foreign` (`integration_id`);

--
-- Indexes for table `integration_sections`
--
ALTER TABLE `integration_sections`
  ADD PRIMARY KEY (`id`),
  ADD KEY `integration_sections_integration_id_foreign` (`integration_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partner_cards`
--
ALTER TABLE `partner_cards`
  ADD PRIMARY KEY (`id`),
  ADD KEY `partner_cards_partner_id_foreign` (`partner_id`);

--
-- Indexes for table `partner_futures`
--
ALTER TABLE `partner_futures`
  ADD PRIMARY KEY (`id`),
  ADD KEY `partner_futures_partner_id_foreign` (`partner_id`);

--
-- Indexes for table `partner_sections`
--
ALTER TABLE `partner_sections`
  ADD PRIMARY KEY (`id`),
  ADD KEY `partner_sections_partner_id_foreign` (`partner_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pricings`
--
ALTER TABLE `pricings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pricing_addons`
--
ALTER TABLE `pricing_addons`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pricing_addons_price_id_foreign` (`price_id`);

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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `integrations`
--
ALTER TABLE `integrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `integration_cards`
--
ALTER TABLE `integration_cards`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `integration_sections`
--
ALTER TABLE `integration_sections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `partners`
--
ALTER TABLE `partners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `partner_cards`
--
ALTER TABLE `partner_cards`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `partner_futures`
--
ALTER TABLE `partner_futures`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `partner_sections`
--
ALTER TABLE `partner_sections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pricings`
--
ALTER TABLE `pricings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pricing_addons`
--
ALTER TABLE `pricing_addons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `integration_cards`
--
ALTER TABLE `integration_cards`
  ADD CONSTRAINT `integration_cards_integration_id_foreign` FOREIGN KEY (`integration_id`) REFERENCES `integrations` (`id`);

--
-- Constraints for table `integration_sections`
--
ALTER TABLE `integration_sections`
  ADD CONSTRAINT `integration_sections_integration_id_foreign` FOREIGN KEY (`integration_id`) REFERENCES `integrations` (`id`);

--
-- Constraints for table `partner_cards`
--
ALTER TABLE `partner_cards`
  ADD CONSTRAINT `partner_cards_partner_id_foreign` FOREIGN KEY (`partner_id`) REFERENCES `partners` (`id`);

--
-- Constraints for table `partner_futures`
--
ALTER TABLE `partner_futures`
  ADD CONSTRAINT `partner_futures_partner_id_foreign` FOREIGN KEY (`partner_id`) REFERENCES `partners` (`id`);

--
-- Constraints for table `partner_sections`
--
ALTER TABLE `partner_sections`
  ADD CONSTRAINT `partner_sections_partner_id_foreign` FOREIGN KEY (`partner_id`) REFERENCES `partners` (`id`);

--
-- Constraints for table `pricing_addons`
--
ALTER TABLE `pricing_addons`
  ADD CONSTRAINT `pricing_addons_price_id_foreign` FOREIGN KEY (`price_id`) REFERENCES `pricings` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
