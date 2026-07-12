/*M!999999\- enable the sandbox mode */ 
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*M!100616 SET @OLD_NOTE_VERBOSITY=@@NOTE_VERBOSITY, NOTE_VERBOSITY=0 */;
DROP TABLE IF EXISTS `cache`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `cache_locks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `current_informations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `current_informations` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `text` text DEFAULT NULL,
  `text2` text DEFAULT NULL,
  `params` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `excursion_emails`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `excursion_emails` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `excursion_id` bigint(20) unsigned DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `params` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `emails` varchar(255) DEFAULT NULL,
  `quantity` int(11) NOT NULL DEFAULT 1,
  `excursion_date` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `excursion_emails_excursion_id_foreign` (`excursion_id`),
  CONSTRAINT `excursion_emails_excursion_id_foreign` FOREIGN KEY (`excursion_id`) REFERENCES `excursions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `excursion_fleet_schoolboy`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `excursion_fleet_schoolboy` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `excursion_id` bigint(20) unsigned DEFAULT NULL,
  `fleet_schoolboy_id` bigint(20) unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `excursion_fleet_schoolboy_excursion_id_foreign` (`excursion_id`),
  KEY `excursion_fleet_schoolboy_fleet_schoolboy_id_foreign` (`fleet_schoolboy_id`),
  CONSTRAINT `excursion_fleet_schoolboy_excursion_id_foreign` FOREIGN KEY (`excursion_id`) REFERENCES `excursions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `excursion_fleet_schoolboy_fleet_schoolboy_id_foreign` FOREIGN KEY (`fleet_schoolboy_id`) REFERENCES `fleet_schoolboys` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `excursion_fleet_ship`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `excursion_fleet_ship` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `excursion_id` bigint(20) unsigned DEFAULT NULL,
  `fleet_ship_id` bigint(20) unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `excursion_fleet_ship_excursion_id_foreign` (`excursion_id`),
  KEY `excursion_fleet_ship_fleet_ship_id_foreign` (`fleet_ship_id`),
  CONSTRAINT `excursion_fleet_ship_excursion_id_foreign` FOREIGN KEY (`excursion_id`) REFERENCES `excursions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `excursion_fleet_ship_fleet_ship_id_foreign` FOREIGN KEY (`fleet_ship_id`) REFERENCES `fleet_ships` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `excursion_fleet_speedboat`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `excursion_fleet_speedboat` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `excursion_id` bigint(20) unsigned DEFAULT NULL,
  `fleet_speedboat_id` bigint(20) unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `excursion_fleet_speedboat_excursion_id_foreign` (`excursion_id`),
  KEY `excursion_fleet_speedboat_fleet_speedboat_id_foreign` (`fleet_speedboat_id`),
  CONSTRAINT `excursion_fleet_speedboat_excursion_id_foreign` FOREIGN KEY (`excursion_id`) REFERENCES `excursions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `excursion_fleet_speedboat_fleet_speedboat_id_foreign` FOREIGN KEY (`fleet_speedboat_id`) REFERENCES `fleet_speedboats` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `excursion_menu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `excursion_menu` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `menu_id` bigint(20) unsigned DEFAULT NULL,
  `excursion_id` bigint(20) unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `custom_title` varchar(255) DEFAULT NULL,
  `custom_url` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `excursion_menu_menu_id_foreign` (`menu_id`),
  KEY `excursion_menu_excursion_id_foreign` (`excursion_id`),
  CONSTRAINT `excursion_menu_excursion_id_foreign` FOREIGN KEY (`excursion_id`) REFERENCES `excursions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `excursion_menu_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `excursion_next_ticket_numbers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `excursion_next_ticket_numbers` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `next_value` bigint(20) unsigned NOT NULL DEFAULT 100,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `excursion_orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `excursion_orders` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `excursion_id` bigint(20) unsigned DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `order` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `excursion_date` date DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `number` varchar(255) DEFAULT NULL,
  `series` varchar(255) DEFAULT NULL,
  `ticket` varchar(255) DEFAULT NULL,
  `amount` double DEFAULT NULL,
  `id_yoo_kassa` varchar(255) DEFAULT NULL,
  `quantity` int(11) NOT NULL DEFAULT 0,
  `notification_yoo_kassa` longtext DEFAULT NULL,
  `status_yoo_kassa` enum('pending','waiting_for_capture','succeeded','canceled') NOT NULL DEFAULT 'pending',
  PRIMARY KEY (`id`),
  KEY `excursion_orders_excursion_id_foreign` (`excursion_id`),
  CONSTRAINT `excursion_orders_excursion_id_foreign` FOREIGN KEY (`excursion_id`) REFERENCES `excursions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `excursions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `excursions` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `sku` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `subtitle` varchar(255) DEFAULT NULL,
  `short_desc` text DEFAULT NULL,
  `desc` text DEFAULT NULL,
  `desc2` text DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `gallery` text DEFAULT NULL,
  `yandex_map` text DEFAULT NULL,
  `route` text DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `price_desc` text DEFAULT NULL,
  `price_pier` int(11) DEFAULT NULL,
  `price_advantage` int(11) DEFAULT NULL,
  `price_advantage_desc` text DEFAULT NULL,
  `price_child` int(11) DEFAULT NULL,
  `price_child_desc` text DEFAULT NULL,
  `place` int(11) DEFAULT NULL,
  `list_points` text DEFAULT NULL,
  `metatitle` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `keywords` text DEFAULT NULL,
  `params` text DEFAULT NULL,
  `published` varchar(255) NOT NULL DEFAULT '1',
  `sorting` int(11) NOT NULL DEFAULT 999,
  `price_hide` int(11) NOT NULL DEFAULT 1,
  `time_route` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `pier` text DEFAULT NULL,
  `privilege` text DEFAULT NULL,
  `departure_time` text DEFAULT NULL,
  `count_ticket` int(11) NOT NULL DEFAULT 100,
  `real_ticket` int(11) DEFAULT NULL,
  `teaser` text DEFAULT NULL,
  `dont_register` int(11) NOT NULL DEFAULT 0,
  `dont_register_prefix_price` varchar(255) DEFAULT NULL,
  `dont_register_price` varchar(255) DEFAULT NULL,
  `dont_register_button` varchar(255) DEFAULT NULL,
  `dont_register_form` varchar(255) DEFAULT NULL,
  `dont_register_desc` varchar(255) DEFAULT NULL,
  `departure_time_desc` text DEFAULT NULL,
  `series` varchar(255) DEFAULT NULL,
  `rent_text` text DEFAULT NULL,
  `html` longtext DEFAULT NULL,
  `closed_date` text DEFAULT NULL,
  `open_date` date DEFAULT NULL,
  `test` int(11) NOT NULL DEFAULT 0,
  `dont_register_form_to_email` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `excursions_slug_unique` (`slug`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `fleet_schoolboys`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `fleet_schoolboys` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `subtitle` varchar(255) DEFAULT NULL,
  `desc` text DEFAULT NULL,
  `desc2` text DEFAULT NULL,
  `params` text DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `img2` varchar(255) DEFAULT NULL,
  `gallery` text DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `published` tinyint(4) NOT NULL DEFAULT 1,
  `sorting` int(11) NOT NULL DEFAULT 999,
  `metatitle` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `keywords` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `fleet_schoolboys_slug_unique` (`slug`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `fleet_ships`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `fleet_ships` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `subtitle` varchar(255) DEFAULT NULL,
  `desc` text DEFAULT NULL,
  `desc2` text DEFAULT NULL,
  `params` text DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `img2` varchar(255) DEFAULT NULL,
  `gallery` text DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `published` tinyint(4) NOT NULL DEFAULT 1,
  `sorting` int(11) NOT NULL DEFAULT 999,
  `metatitle` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `keywords` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `slug` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `fleet_ships_slug_unique` (`slug`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `fleet_speedboats`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `fleet_speedboats` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `subtitle` varchar(255) DEFAULT NULL,
  `desc` text DEFAULT NULL,
  `desc2` text DEFAULT NULL,
  `params` text DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `img2` varchar(255) DEFAULT NULL,
  `gallery` text DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `published` tinyint(4) NOT NULL DEFAULT 1,
  `sorting` int(11) NOT NULL DEFAULT 999,
  `metatitle` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `keywords` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `slug` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `fleet_speedboats_slug_unique` (`slug`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `job_batches`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) unsigned NOT NULL,
  `reserved_at` int(10) unsigned DEFAULT NULL,
  `available_at` int(10) unsigned NOT NULL,
  `created_at` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jobs_queue_index` (`queue`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `menu_bottoms`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `menu_bottoms` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `published` int(11) NOT NULL DEFAULT 1,
  `sorting` int(11) NOT NULL DEFAULT 999,
  `submenu` text DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `menu_page`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `menu_page` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `menu_id` bigint(20) unsigned DEFAULT NULL,
  `page_id` bigint(20) unsigned DEFAULT NULL,
  `custom_title` varchar(255) DEFAULT NULL,
  `custom_url` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `menu_page_menu_id_foreign` (`menu_id`),
  KEY `menu_page_page_id_foreign` (`page_id`),
  CONSTRAINT `menu_page_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `menu_page_page_id_foreign` FOREIGN KEY (`page_id`) REFERENCES `pages` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `menus`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `menus` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `published` int(11) NOT NULL DEFAULT 1,
  `sorting` int(11) NOT NULL DEFAULT 999,
  `submenu` text DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `moonshine_user_roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `moonshine_user_roles` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `moonshine_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `moonshine_users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `moonshine_user_role_id` bigint(20) unsigned NOT NULL DEFAULT 1,
  `email` varchar(190) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `moonshine_users_email_unique` (`email`),
  KEY `moonshine_users_moonshine_user_role_id_foreign` (`moonshine_user_role_id`),
  CONSTRAINT `moonshine_users_moonshine_user_role_id_foreign` FOREIGN KEY (`moonshine_user_role_id`) REFERENCES `moonshine_user_roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `notifications`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `notifications` (
  `id` char(36) NOT NULL,
  `type` varchar(255) NOT NULL,
  `notifiable_type` varchar(255) NOT NULL,
  `notifiable_id` bigint(20) unsigned NOT NULL,
  `data` text NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `notifications_notifiable_type_notifiable_id_index` (`notifiable_type`,`notifiable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `pages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `pages` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `subtitle` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `text` text DEFAULT NULL,
  `text2` text DEFAULT NULL,
  `gallery` text DEFAULT NULL,
  `html` text DEFAULT NULL,
  `html2` text DEFAULT NULL,
  `faq` text DEFAULT NULL,
  `faq_title` varchar(255) DEFAULT NULL,
  `metatitle` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `keywords` text DEFAULT NULL,
  `published` int(11) NOT NULL DEFAULT 1,
  `sorting` int(11) NOT NULL DEFAULT 999,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `pages_slug_unique` (`slug`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `password_reset_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) unsigned DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `site_news`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `site_news` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `subtitle` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `text` text DEFAULT NULL,
  `text2` text DEFAULT NULL,
  `gallery` text DEFAULT NULL,
  `html` text DEFAULT NULL,
  `html2` text DEFAULT NULL,
  `faq_title` varchar(255) DEFAULT NULL,
  `faq` text DEFAULT NULL,
  `metatitle` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `keywords` text DEFAULT NULL,
  `published` int(11) NOT NULL DEFAULT 1,
  `sorting` int(11) NOT NULL DEFAULT 999,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `site_news_slug_unique` (`slug`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*M!100616 SET NOTE_VERBOSITY=@OLD_NOTE_VERBOSITY */;

/*M!999999\- enable the sandbox mode */ 
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (1,'0001_01_01_000000_create_users_table',1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (2,'0001_01_01_000001_create_cache_table',1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (3,'0001_01_01_000002_create_jobs_table',1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (4,'2020_10_04_115514_create_moonshine_roles_table',2);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (5,'2020_10_05_173148_create_moonshine_tables',2);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (6,'2025_12_22_152214_create_notifications_table',2);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (7,'2025_12_24_033908_create_excursions_table',3);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (8,'2025_12_24_035853_create_site_form_emails_table',4);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (9,'2025_12_24_041901_add_to_excursions',5);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (11,'2025_12_27_082829_add_to_excursions',6);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (12,'2025_12_28_061945_add_to_excursions',7);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (15,'2026_01_06_125732_create_excursion_emails_table',8);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (16,'2026_01_06_125741_create_excursion_orders_table',8);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (17,'2026_01_06_132806_add_to_excursion_emails',9);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (18,'2026_01_07_101212_add_to_excursion_emails',10);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (19,'2026_01_08_100132_create_menus_table',11);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (21,'2026_01_08_104845_create_excursion_menu',12);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (26,'2026_01_10_084850_create_pages_table',13);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (27,'2026_01_10_094907_create_menu_page',14);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (28,'2026_01_12_085359_create_menu_bottoms_table',15);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (31,'2026_01_13_013501_create_site_news_table',16);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (32,'2026_01_15_161151_add_to_excursion_orders',17);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (33,'2026_01_22_122631_add_to_excursion_orders',18);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (34,'2026_01_22_124044_add_to_excursions',19);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (37,'2026_01_22_132226_create_excursion_next_ticket_numbers_table',20);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (38,'2026_01_24_031323_create_fleet_ships_table',21);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (39,'2026_01_24_031323_create_fleet_speedboats_table',21);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (40,'2026_01_24_031428_create_excursion_fleet_speedboat',21);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (41,'2026_01_24_031429_create_excursion_fleet_ship',21);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (42,'2026_01_24_040526_add_to_fleet_ships',22);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (43,'2026_01_24_040646_add_to_fleet_speedboats',22);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (44,'2026_01_24_044510_add_to_excursions',23);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (47,'2026_02_01_142721_add_to_excursion_orders',24);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (48,'2026_02_01_144627_add_to_excursion_orders',25);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (49,'2026_02_01_183146_create_fleet_schoolboys_table',26);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (50,'2026_02_01_183542_create_excursion_fleet_schoolboy',26);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (51,'2026_02_14_043121_add_to_users',27);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (53,'2026_02_15_035727_create_current_information_table',28);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (54,'2026_02_22_140940_add_to_excursions',29);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (55,'2026_02_25_122542_add_to_excursions',30);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (56,'2026_02_28_171431_add_to_excursions',31);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (57,'2026_04_14_050511_add_to_excursions',32);
