-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 19, 2021 at 03:36 PM
-- Server version: 5.7.33
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
-- Database: `edropshipsite_db`
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
(4, 'BigCommerce ', 'big-commerce ', 'bigcommerce_icon.png', 'bigcommerce.png', 'w_bigcommerce.png', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.', NULL, NULL, NULL),
(5, 'OnBuy', 'on-buy', 'onbuy_icon.png', 'onbuy.png', 'w_onbuy.png', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. ', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. ', NULL, NULL, NULL),
(6, 'Wish', 'wish', 'wish_icon.png', 'wish.png', 'w_wish.png', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. ', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. ', NULL, NULL, NULL),
(7, 'Linnworks', 'linnworks', 'linnworks_icon.png', 'linnworks.png', 'w_linnworks.png', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. ', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. ', NULL, NULL, NULL),
(8, 'fruugo', 'fruugo', 'fruugo_icon.png', 'fruugo.jpg', 'w_fruugo.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. ', 'Lorem Ipsum is simply dummy text of theLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry.  printing and typesetting industry. ', NULL, NULL, NULL);

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
(11, '2021_08_19_125046_create_partner_futures_table', 4);

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
(1, 'Seller', 'seller', NULL, 'Seller description	 ', NULL, NULL, NULL, NULL),
(2, 'Vendor/Supplier', 'vendor', ' Vendor/Supplier', 'description	 Vendor/Supplier', NULL, NULL, NULL, NULL);

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
(1, 1, 'Smart Software\'s\r\n', 1, 'Quis autem vel eum iure righteous qui in ea voluptate velit esse.', 'service-thumbnail-7.jpg', NULL, NULL),
(2, 1, 'Trusted Security\r\n', 2, 'On the other hand we denounce with righteous indignation dislike', 'service-thumbnail-8.jpg\r\n', NULL, NULL),
(3, 1, 'Awards Winners\r\n', 3, 'To take trivial example which of ever undertakes laborious physical', 'service-thumbnail-10.jpg\r\n', NULL, NULL),
(4, 1, 'Great Experience\r\n', 4, 'To take trivial example which of ever undertakes laborious physical', 'service-thumbnail-9.jpg\r\n', NULL, NULL);

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
(1, 1, 'Business Analysis\r\n', 1, 'Sed perspiciatis unde omnis iste natus error sit voluptatem accusa ntium dolore.\r\n\r\n', 'business-analysis.png\r\n', NULL, NULL),
(2, 1, 'Focused Research', 2, 'Sed perspiciatis unde omnis iste natus error sit voluptatem accusa ntium dolore.\r\n\r\n', 'consulting.png', NULL, NULL);

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
  `short_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
(1, 1, 'Our Track Record Of Fearless Ventures', 'heading-two', 'Partner Statistic', 'Sed ut perspiciatis unde omnis iste natus error voluptate accusantium doloremque \r\nSed ut perspiciatis unde omnis iste natus error voluptate accusantium doloremque \r\n', 'our-statistic-image-relative.png', 'service1.jpg', 'our-statistic-image-absolute.png', 'Sed ut perspiciatis unde omnis iste natus error voluptate accusantium doloremque laudantium, totam rem aperiam eaque ipsa quae abillo inventore.\r\n\r\nQuis autem vel eum iure reprehenderit qui ea voluptate velit esse quam nihil molestiae consequatur', NULL, NULL, NULL, NULL, NULL),
(2, 1, 'Pace Of Change Is Power Law In Financial Services\r\n', 'heading-one', 'Services Power Law\r\n', 'Sed ut perspiciatis unde omnis iste natus error voluptate accusantium doloremque \r\n', 'service4.png', 'service3.jpg', 'our-statistic-image-absolute.png', 'Sed ut perspiciatis unde omnis iste natus error voluptate accusantium doloremque laudantium, totam rem aperiam eaque ipsa quae abillo inventore.\r\n\r\n', NULL, NULL, NULL, NULL, NULL);

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
(4, 'Professional', 'professional', 'bg-ocean-blue-gradient', 'bg-ocean-blue-gradient', 24.99, 'StartupsStartupsStartups', NULL, 4, NULL, NULL),
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
(26, 4, '400 Product Listings\r\n', 0.00, 5, NULL, NULL),
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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `integration_sections`
--
ALTER TABLE `integration_sections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `partners`
--
ALTER TABLE `partners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `partner_cards`
--
ALTER TABLE `partner_cards`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `partner_futures`
--
ALTER TABLE `partner_futures`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `partner_sections`
--
ALTER TABLE `partner_sections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
