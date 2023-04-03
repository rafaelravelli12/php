-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.32 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.4.0.6659
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for project_80_03_second_proposed_project
CREATE DATABASE IF NOT EXISTS `project_80_03_second_proposed_project` /*!40100 DEFAULT CHARACTER SET latin1 */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `project_80_03_second_proposed_project`;

-- Dumping structure for table project_80_03_second_proposed_project.categories
CREATE TABLE IF NOT EXISTS `categories` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint NOT NULL DEFAULT '1',
  `created_by` int DEFAULT NULL,
  `updated_by` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table project_80_03_second_proposed_project.categories: ~8 rows (approximately)
INSERT INTO `categories` (`id`, `name`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
	(2, 'aaaaaaaaaaaaa', 1, 2, NULL, '2023-03-31 19:28:42', NULL),
	(3, 'Multivitamínico', 1, 2, NULL, '2023-03-31 22:46:33', NULL),
	(4, 'Creatina', 1, 2, NULL, '2023-03-31 22:46:41', NULL),
	(5, 'Whey Protein', 1, 2, NULL, '2023-03-31 22:46:52', NULL),
	(6, 'Pré-Treino', 1, 2, NULL, '2023-03-31 22:47:05', NULL),
	(7, 'Aminoácidos', 1, 2, NULL, '2023-03-31 22:47:16', NULL),
	(8, 'Termogênico', 1, 2, NULL, '2023-03-31 22:47:26', NULL),
	(9, 'Proteínas', 1, 2, NULL, '2023-03-31 22:47:46', NULL),
	(10, 'Vitaminas', 1, 2, NULL, '2023-03-31 22:48:02', NULL);

-- Dumping structure for table project_80_03_second_proposed_project.customers
CREATE TABLE IF NOT EXISTS `customers` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint NOT NULL DEFAULT '1',
  `created_by` int DEFAULT NULL,
  `updated_by` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table project_80_03_second_proposed_project.customers: ~4 rows (approximately)
INSERT INTO `customers` (`id`, `name`, `customer_image`, `mobile_no`, `email`, `address`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
	(1, 'k', 'upload/customer/1761893974285611.png', 'k', 'k@gmail.com', 'y', 1, 2, 2, '2023-03-31 17:25:50', '2023-03-31 17:30:31'),
	(3, 'Lúcio Paulo Ravane', 'upload/customer/1761912849662743.png', '+55 11 96630-1128', 'lucio@gmail.com', 'R. Cristiano Viana, 640-778 - Pinheiros, São Paulo - SP', 1, 2, NULL, '2023-03-31 22:30:32', NULL),
	(4, 'Pedro Luis', 'upload/customer/1761913109942127.png', '+55 11 94400-9820', 'pedro@hotmail.com', 'R. Dr. Paulo Vieira, 153 - Sumaré, São Paulo - SP', 1, 2, NULL, '2023-03-31 22:34:40', NULL),
	(5, 'Letícia Ferreira', 'upload/customer/1761913164463112.png', '+55 19 98445-2788', 'leticiaferreira10@gmail.com', 'Alameda Gabriel Monteiro da Silva, 2731 - Jardim America, São Paulo - SP', 1, 2, NULL, '2023-03-31 22:35:32', NULL),
	(6, 'Fernado Bueno', 'upload/customer/1761913226201446.png', '+55 12 99938-1189', 'ferbueno@gmail.com', 'Av. Morumbi, 1991-1957 - Morumbi, São Paulo - SP, 04533-085', 1, 2, NULL, '2023-03-31 22:36:31', NULL);

-- Dumping structure for table project_80_03_second_proposed_project.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table project_80_03_second_proposed_project.failed_jobs: ~0 rows (approximately)

-- Dumping structure for table project_80_03_second_proposed_project.invoices
CREATE TABLE IF NOT EXISTS `invoices` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `invoice_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` date DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `status` tinyint NOT NULL DEFAULT '0' COMMENT '0=Pending, 1=Approved',
  `created_by` int DEFAULT NULL,
  `updated_by` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table project_80_03_second_proposed_project.invoices: ~4 rows (approximately)
INSERT INTO `invoices` (`id`, `invoice_no`, `date`, `description`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
	(1, '1', '2023-04-01', 'aaaaaaaaaaa', 0, 2, NULL, '2023-04-01 22:50:03', '2023-04-01 22:50:03'),
	(2, '2', '2023-04-01', 'bbbbbbbbbbbb', 1, 2, 2, '2023-04-01 22:53:46', '2023-04-01 23:24:24'),
	(3, '2', '2023-04-01', 'bbbbbbbbbbbb', 1, 2, 2, '2023-04-01 22:59:13', '2023-04-01 23:20:46'),
	(5, '3', '2023-04-01', 'ffffffffffffffffff', 0, 2, NULL, '2023-04-01 23:23:26', '2023-04-01 23:23:26');

-- Dumping structure for table project_80_03_second_proposed_project.invoice_details
CREATE TABLE IF NOT EXISTS `invoice_details` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `date` date DEFAULT NULL,
  `invoice_id` int DEFAULT NULL,
  `category_id` int DEFAULT NULL,
  `product_id` int DEFAULT NULL,
  `selling_qty` double DEFAULT NULL,
  `unit_price` double DEFAULT NULL,
  `selling_price` double DEFAULT NULL,
  `status` tinyint NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table project_80_03_second_proposed_project.invoice_details: ~4 rows (approximately)
INSERT INTO `invoice_details` (`id`, `date`, `invoice_id`, `category_id`, `product_id`, `selling_qty`, `unit_price`, `selling_price`, `status`, `created_at`, `updated_at`) VALUES
	(1, '2023-04-01', 1, 3, 8, 1, 12, 12, 0, '2023-04-01 22:50:03', '2023-04-01 22:50:03'),
	(2, '2023-04-01', 1, 3, 9, 12, 111, 1332, 0, '2023-04-01 22:50:03', '2023-04-01 22:50:03'),
	(3, '2023-04-01', 2, 5, 5, 1, 12112, 12112, 1, '2023-04-01 22:53:46', '2023-04-01 23:24:24'),
	(4, '2023-04-01', 3, 5, 5, 1, 12112, 12112, 1, '2023-04-01 22:59:13', '2023-04-01 23:20:46'),
	(6, '2023-04-01', 5, 7, 10, 2, 123, 246, 0, '2023-04-01 23:23:26', '2023-04-01 23:23:26');

-- Dumping structure for table project_80_03_second_proposed_project.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table project_80_03_second_proposed_project.migrations: ~14 rows (approximately)
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1),
	(3, '2019_08_19_000000_create_failed_jobs_table', 1),
	(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(5, '2023_03_31_130516_create_suppliers_table', 2),
	(6, '2023_03_31_135903_create_customers_table', 3),
	(7, '2023_03_31_160402_create_units_table', 4),
	(8, '2023_03_31_162112_create_categories_table', 5),
	(10, '2023_03_31_163108_create_products_table', 6),
	(11, '2023_03_31_173356_create_purchases_table', 7),
	(12, '2023_04_01_190741_create_invoices_table', 8),
	(13, '2023_04_01_190857_create_invoice_details_table', 8),
	(14, '2023_04_01_190918_create_payments_table', 8),
	(15, '2023_04_01_190931_create_payment_details_table', 8);

-- Dumping structure for table project_80_03_second_proposed_project.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table project_80_03_second_proposed_project.password_resets: ~0 rows (approximately)

-- Dumping structure for table project_80_03_second_proposed_project.payments
CREATE TABLE IF NOT EXISTS `payments` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `invoice_id` int DEFAULT NULL,
  `customer_id` int DEFAULT NULL,
  `paid_status` varchar(51) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `paid_amount` double DEFAULT NULL,
  `due_amount` double DEFAULT NULL,
  `total_amount` double DEFAULT NULL,
  `discount_amount` double DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table project_80_03_second_proposed_project.payments: ~4 rows (approximately)
INSERT INTO `payments` (`id`, `invoice_id`, `customer_id`, `paid_status`, `paid_amount`, `due_amount`, `total_amount`, `discount_amount`, `created_at`, `updated_at`) VALUES
	(1, 1, 3, 'full_paid', 1244, 0, 1244, 100, '2023-04-01 22:50:03', '2023-04-01 22:50:03'),
	(2, 2, 3, 'full_paid', 12112, 0, 12112, NULL, '2023-04-01 22:53:46', '2023-04-01 22:53:46'),
	(3, 3, 3, 'full_paid', 12112, 0, 12112, NULL, '2023-04-01 22:59:13', '2023-04-01 22:59:13'),
	(5, 5, 5, 'full_paid', 234, 0, 234, 12, '2023-04-01 23:23:26', '2023-04-03 17:51:24');

-- Dumping structure for table project_80_03_second_proposed_project.payment_details
CREATE TABLE IF NOT EXISTS `payment_details` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `invoice_id` int DEFAULT NULL,
  `current_paid_amount` double DEFAULT NULL,
  `date` date DEFAULT NULL,
  `updated_by` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table project_80_03_second_proposed_project.payment_details: ~5 rows (approximately)
INSERT INTO `payment_details` (`id`, `invoice_id`, `current_paid_amount`, `date`, `updated_by`, `created_at`, `updated_at`) VALUES
	(1, 1, 1244, '2023-04-01', NULL, '2023-04-01 22:50:03', '2023-04-01 22:50:03'),
	(2, 2, 12112, '2023-04-01', NULL, '2023-04-01 22:53:46', '2023-04-01 22:53:46'),
	(3, 3, 12112, '2023-04-01', NULL, '2023-04-01 22:59:13', '2023-04-01 22:59:13'),
	(5, 5, 111, '2023-04-01', NULL, '2023-04-01 23:23:26', '2023-04-01 23:23:26'),
	(6, 5, 123, '2023-04-03', 2, '2023-04-03 17:51:24', '2023-04-03 17:51:24');

-- Dumping structure for table project_80_03_second_proposed_project.personal_access_tokens
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table project_80_03_second_proposed_project.personal_access_tokens: ~0 rows (approximately)

-- Dumping structure for table project_80_03_second_proposed_project.products
CREATE TABLE IF NOT EXISTS `products` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `supplier_id` int NOT NULL,
  `unit_id` int NOT NULL,
  `category_id` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` double NOT NULL DEFAULT '0',
  `status` tinyint NOT NULL DEFAULT '1',
  `created_by` int DEFAULT NULL,
  `updated_by` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table project_80_03_second_proposed_project.products: ~11 rows (approximately)
INSERT INTO `products` (`id`, `supplier_id`, `unit_id`, `category_id`, `name`, `quantity`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
	(2, 2, 2, 2, 'a', 1, 1, 2, NULL, '2023-03-31 20:30:17', '2023-03-31 22:12:32'),
	(3, 2, 2, 2, 'b', 0, 1, 2, NULL, '2023-03-31 20:30:24', NULL),
	(4, 2, 2, 2, 'c', 0, 1, 2, NULL, '2023-03-31 20:30:46', NULL),
	(5, 4, 3, 5, '3W WHEY PROTEIN', 1, 1, 2, NULL, '2023-03-31 23:05:49', '2023-04-01 23:24:24'),
	(6, 4, 3, 5, 'MÉDIUM WHEY PROTEIN', 0, 1, 2, NULL, '2023-03-31 23:06:25', NULL),
	(7, 4, 3, 5, 'BASIC WHEY PROTEIN', 0, 1, 2, NULL, '2023-03-31 23:07:14', NULL),
	(8, 5, 3, 3, 'MULTIVITAMÍNICO ULTRA GROWTH', 0, 1, 2, NULL, '2023-03-31 23:08:08', NULL),
	(9, 5, 3, 3, 'MULTIVIRAMÍNICO VEGANO GROWTH', 0, 1, 2, NULL, '2023-03-31 23:10:34', NULL),
	(10, 6, 4, 7, 'BCAA EM COMPRIMIDOS TAB GROWTH', 0, 1, 2, NULL, '2023-03-31 23:12:17', NULL),
	(11, 6, 4, 7, 'L-GLUTAMINA EM PÓ GROWTH', 0, 1, 2, NULL, '2023-03-31 23:13:01', NULL),
	(12, 6, 4, 7, 'BETA-ALANINA', 0, 1, 2, NULL, '2023-03-31 23:13:33', NULL);

-- Dumping structure for table project_80_03_second_proposed_project.purchases
CREATE TABLE IF NOT EXISTS `purchases` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `supplier_id` int NOT NULL,
  `category_id` int NOT NULL,
  `product_id` int NOT NULL,
  `purchase_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `buying_qty` double NOT NULL,
  `unit_price` double NOT NULL,
  `buying_price` double NOT NULL,
  `status` tinyint NOT NULL DEFAULT '0' COMMENT '0=Pending, 1=Approved',
  `created_by` int DEFAULT NULL,
  `updated_by` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table project_80_03_second_proposed_project.purchases: ~4 rows (approximately)
INSERT INTO `purchases` (`id`, `supplier_id`, `category_id`, `product_id`, `purchase_no`, `date`, `description`, `buying_qty`, `unit_price`, `buying_price`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
	(5, 4, 5, 5, '1', '2023-03-31', NULL, 3, 150, 450, 1, 2, NULL, '2023-03-31 23:15:53', '2023-04-01 01:48:11'),
	(6, 4, 5, 6, '2', '2023-03-31', 'venda à vista', 12, 10, 120, 0, 2, NULL, '2023-04-01 01:55:48', '2023-04-01 01:55:48'),
	(7, 5, 3, 8, '3', '2023-03-31', 'venda à vista', 23, 5, 115, 0, 2, NULL, '2023-04-01 01:55:48', '2023-04-01 01:55:48'),
	(8, 6, 7, 12, '4', '2023-03-31', 'venda à vista', 3, 100, 300, 0, 2, NULL, '2023-04-01 01:55:48', '2023-04-01 01:55:48');

-- Dumping structure for table project_80_03_second_proposed_project.suppliers
CREATE TABLE IF NOT EXISTS `suppliers` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint NOT NULL DEFAULT '1',
  `created_by` int DEFAULT NULL,
  `updated_by` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table project_80_03_second_proposed_project.suppliers: ~6 rows (approximately)
INSERT INTO `suppliers` (`id`, `name`, `mobile_no`, `email`, `address`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
	(2, 'adf', 'asdf', 'adf@gmail.com', 'adf', 1, 2, NULL, '2023-03-31 16:55:27', NULL),
	(3, '1234', '1234', '1234@gmail.com', '1234', 1, 2, NULL, '2023-03-31 16:55:41', NULL),
	(4, 'Atacado Suplemento', '+55 (11) 3280-0700', 'sac@atacadosuplemento.com.br', 'Rua Luiz Gonzaga de Camargo, 334 - Paraguaçu Paulista - São Paulo', 1, 2, NULL, '2023-03-31 22:21:59', NULL),
	(5, 'American Distribuidor', '+55 (19) 3413-4190', 'sac@americandistribuidor.com.br', 'Area Ade Conjunto 18 Lote, 11 Parte B AGUAS CLARAS BRASILIA - DF', 1, 2, NULL, '2023-03-31 22:24:32', NULL),
	(6, 'Real Suplementos', '+55 (41) 3180-0367', 'contato@realsuplementos.com.br', 'AV. MARECHAL FLORIANO PEIXOTO, 661 - CENTRO - CURITIBA - PR', 1, 2, NULL, '2023-03-31 22:26:09', NULL),
	(7, 'Ótima Nutri Atacado', '+55 (18) 3322 2132', 'vendas1@otimanutriatacado.com.br', 'Avenida Felix de Castro, 360 - Assis - SP', 1, 2, NULL, '2023-03-31 22:28:00', NULL);

-- Dumping structure for table project_80_03_second_proposed_project.units
CREATE TABLE IF NOT EXISTS `units` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint NOT NULL DEFAULT '1',
  `created_by` int DEFAULT NULL,
  `updated_by` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table project_80_03_second_proposed_project.units: ~6 rows (approximately)
INSERT INTO `units` (`id`, `name`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
	(2, 'rafa', 1, 2, NULL, '2023-03-31 19:17:46', NULL),
	(3, 'Unidade Morumbi - R. Alvorada do Sul, 48-122 - Morumbi, São Paulo - SP, 05612-010', 1, 2, 2, '2023-03-31 22:37:49', '2023-03-31 22:38:25'),
	(4, 'Unidade Santo Andre - R. Atibaia, 464-632 - Vila Valparaiso, Santo André - SP, 09060-110', 1, 2, 2, '2023-03-31 22:38:12', '2023-03-31 22:38:19'),
	(5, 'Unidade Oswando Cruz - R. Maceió, 422 - Barcelona, São Caetano do Sul - SP, 09551-030', 1, 2, NULL, '2023-03-31 22:38:46', NULL),
	(6, 'Unidade Vila Alpina - R. Bpo. Eugênio Demazemod - Vila Alpina, São Paulo - SP, 03206-040', 1, 2, NULL, '2023-03-31 22:39:09', NULL),
	(7, 'Unidade Vila Prudente - R. Falchi Gianini, 352 - Vila Prudente, São Paulo - SP, 03136-040', 1, 2, NULL, '2023-03-31 22:39:35', NULL);

-- Dumping structure for table project_80_03_second_proposed_project.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profile_image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table project_80_03_second_proposed_project.users: ~4 rows (approximately)
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `username`, `profile_image`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'User', 'user@gmail.com', '2022-03-09 17:16:01', '$2y$10$rGET1JC4RHIml.EboWuABOxzgNGUB9EQZLTQsjOf2NkkKiOKlCEOi', 'user', '202203112055download.jpg', 'AEe7IjaEFf1qlITAqy3Ehgh0KQKtWPb7AFtyXynJ7IECGEaNKLlcXczBWYsS', '2022-03-09 16:27:03', '2022-03-11 15:08:45'),
	(2, 'Kazi', 'kazi@gmail.com', '2022-03-09 17:14:32', '$2y$10$cdhHGJTOuPvl5jIlTKInWuk57U0fOnWuTpX8S4IU47H1jOYiMTa4C', 'kazi', '202203112033ariyan.jpg', NULL, '2022-03-09 17:12:44', '2022-03-11 15:57:21'),
	(4, 'Demo', 'demo@gmail.com', '2022-03-09 17:54:03', '$2y$10$Ne1R842eJJw7VpVZ.jv31ulN12pHgAVKvx9JiB1nNfABYU/EwbvVy', 'demo', NULL, NULL, '2022-03-09 17:53:48', '2022-03-09 17:54:03'),
	(5, 'TEST', 'test@gmail.com', '2022-03-10 14:14:10', '$2y$10$6pvyEf0zI1lnLrZLA8f2sO36IaTsRJizUrpT9Tp1IrZKRlZlCAYEO', 'test', NULL, NULL, '2022-03-10 13:52:07', '2022-03-10 14:14:10');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
