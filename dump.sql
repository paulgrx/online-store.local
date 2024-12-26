-- MySQL dump 10.13  Distrib 8.0.40, for Linux (x86_64)
--
-- Host: localhost    Database: shop
-- ------------------------------------------------------
-- Server version	8.0.40-0ubuntu0.22.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `categories` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `categories` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,'Buty',NULL,NULL),(2,'Piłki',NULL,NULL),(3,'Lifestyle',NULL,NULL),(4,'Odzież piłkarska',NULL,NULL),(5,'Koszulki',NULL,NULL),(6,'Spodenki',NULL,NULL),(7,'Bluzy',NULL,NULL),(8,'Skarpety',NULL,NULL),(9,'Akcesoria',NULL,NULL),(10,'Torby i plecaki',NULL,NULL),(11,'Do treningu',NULL,NULL);
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=66 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (13,'2024_05_20_203836_create_category_table',3),(48,'2014_10_12_000000_create_users_table',4),(49,'2014_10_12_100000_create_password_reset_tokens_table',4),(50,'2019_08_19_000000_create_failed_jobs_table',4),(51,'2019_12_14_000001_create_personal_access_tokens_table',4),(52,'2024_05_15_200159_create_shop_table',4),(53,'2024_05_20_203836_create_categories_table',4),(54,'2024_05_26_183337_create_product_categories',4),(62,'2024_07_25_184245_create_orders_table',5),(63,'2024_07_28_180738_create_order_products_table',5),(65,'2024_08_21_195026_payment_data',6);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `order_products`
--

DROP TABLE IF EXISTS `order_products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `order_products` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `order_id` int NOT NULL,
  `product_id` int NOT NULL,
  `product_count` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `order_products`
--

LOCK TABLES `order_products` WRITE;
/*!40000 ALTER TABLE `order_products` DISABLE KEYS */;
INSERT INTO `order_products` VALUES (1,1,1,3,'2024-08-22 17:54:59','2024-08-22 17:54:59'),(2,2,1,3,'2024-08-22 17:55:15','2024-08-22 17:55:15'),(3,3,1,3,'2024-08-22 17:55:47','2024-08-22 17:55:47'),(4,4,1,3,'2024-08-22 17:55:59','2024-08-22 17:55:59'),(5,5,1,3,'2024-08-22 17:56:12','2024-08-22 17:56:12'),(6,6,1,3,'2024-08-22 17:56:21','2024-08-22 17:56:21'),(7,7,1,3,'2024-08-22 17:59:21','2024-08-22 17:59:21'),(8,8,1,3,'2024-08-22 17:59:50','2024-08-22 17:59:50'),(9,9,1,3,'2024-08-22 18:09:42','2024-08-22 18:09:42'),(10,10,1,1,'2024-09-01 15:04:32','2024-09-01 15:04:32'),(11,11,2,3,'2024-09-03 16:27:09','2024-09-03 16:27:09'),(12,12,3,1,'2024-09-08 15:57:47','2024-09-08 15:57:47'),(13,13,3,12,'2024-09-11 18:08:00','2024-09-11 18:08:00'),(14,14,3,3,'2024-09-16 18:54:08','2024-09-16 18:54:08'),(15,14,2,1,'2024-09-16 18:54:08','2024-09-16 18:54:08'),(16,15,3,3,'2024-09-16 18:55:50','2024-09-16 18:55:50'),(17,15,2,1,'2024-09-16 18:55:50','2024-09-16 18:55:50'),(18,16,3,3,'2024-09-16 18:57:13','2024-09-16 18:57:13'),(19,16,2,1,'2024-09-16 18:57:13','2024-09-16 18:57:13'),(20,17,1,1,'2024-10-22 16:42:06','2024-10-22 16:42:06'),(21,18,1,1,'2024-10-22 16:58:13','2024-10-22 16:58:13'),(22,19,2,1,'2024-10-27 19:35:11','2024-10-27 19:35:11');
/*!40000 ALTER TABLE `order_products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `orders` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `street` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nr_of_building` int NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders`
--

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
INSERT INTO `orders` VALUES (1,'DSF','SDF','sdf',483,'socwoi','04-672','koncewiczpaul@gmail.com','+123456789091','2024-08-22 17:54:59','2024-08-22 17:54:59'),(2,'DSF','SDF','sdf',483,'socwoi','04-672','koncewiczpaul@gmail.com','+123456789091','2024-08-22 17:55:15','2024-08-22 17:55:15'),(3,'DSF','SDF','sdf',483,'socwoi','04-672','koncewiczpaul@gmail.com','+123456789091','2024-08-22 17:55:47','2024-08-22 17:55:47'),(4,'DSF','SDF','sdf',483,'socwoi','04-672','koncewiczpaul@gmail.com','+123456789091','2024-08-22 17:55:59','2024-08-22 17:55:59'),(5,'DSF','SDF','sdf',483,'socwoi','04-672','koncewiczpaul@gmail.com','+123456789091','2024-08-22 17:56:12','2024-08-22 17:56:12'),(6,'DSF','SDF','sdf',483,'socwoi','04-672','koncewiczpaul@gmail.com','+123456789091','2024-08-22 17:56:21','2024-08-22 17:56:21'),(7,'DSF','SDF','sdf',483,'socwoi','04-672','koncewiczpaul@gmail.com','+123456789091','2024-08-22 17:59:21','2024-08-22 17:59:21'),(8,'DSF','SDF','sdf',483,'socwoi','04-672','koncewiczpaul@gmail.com','+123456789091','2024-08-22 17:59:50','2024-08-22 17:59:50'),(9,'DSF','SDF','sdf',483,'socwoi','04-672','koncewiczpaul@gmail.com','+123456789091','2024-08-22 18:09:42','2024-08-22 18:09:42'),(10,'er;lfmw','fwjemcw','eopvje',483,'socwoi','04-672','koncewiczpaul@gmail.com','+123456789091','2024-09-01 15:04:32','2024-09-01 15:04:32'),(11,'er;lfmw','fwjemcw','eopvje',483,'socwoi','04-672','koncewiczpaul@gmail.com','+123456789091','2024-09-03 16:27:09','2024-09-03 16:27:09'),(12,'er;lfmw','fwjemcw','eopvje',483,'socwoi','koncewiczpaul@gmail.com','koncewiczpaul@gmail.com','+123456789091','2024-09-08 15:57:47','2024-09-08 15:57:47'),(13,'John','Greer','Klimontowska',15,'Warszawa','04-672','example@gmail.com','+123456789091','2024-09-11 18:08:00','2024-09-11 18:08:00'),(14,'sfew','weeeeef','cwef',3,'socwoi','04-672','koncewiczpaul@gmail.com','+123456789091','2024-09-16 18:54:08','2024-09-16 18:54:08'),(15,'sfew','weeeeef','cwef',3,'socwoi','04-672','koncewiczpaul@gmail.com','+123456789091','2024-09-16 18:55:50','2024-09-16 18:55:50'),(16,'sfew','weeeeef','cwef',3,'socwoi','04-672','koncewiczpaul@gmail.com','+123456789091','2024-09-16 18:57:13','2024-09-16 18:57:13'),(17,'er;lfmw','fwjemcw','sdg',483,'wawa','04-672','koncewiczpaul@gmail.com','+123456789091','2024-10-22 16:42:06','2024-10-22 16:42:06'),(18,'Paweł','Koncewicz','Klimontowska',15,'Warszawa','04-672','example@gmail.com','+123456789091','2024-10-22 16:58:13','2024-10-22 16:58:13'),(19,'Paweł','Koncewicz','Klimontowska',15,'Warszawa','04-35','example@gmail.com','+123456789091','2024-10-27 19:35:11','2024-10-27 19:35:11');
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_reset_tokens`
--

LOCK TABLES `password_reset_tokens` WRITE;
/*!40000 ALTER TABLE `password_reset_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_reset_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `payment_data`
--

DROP TABLE IF EXISTS `payment_data`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `payment_data` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `order_id` int NOT NULL,
  `session_id` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_of_payment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `payment_data`
--

LOCK TABLES `payment_data` WRITE;
/*!40000 ALTER TABLE `payment_data` DISABLE KEYS */;
INSERT INTO `payment_data` VALUES (1,1,'cs_test_a1eVe0il7yBKfkCJW9rCa4ZInGlgLlmpd1LJ6hXJ0kPZetB8imrtmZPj7l','succeeded','2024-08-22 17:55:00','2024-08-22 17:55:00'),(2,2,'cs_test_a1nuTCWoFzPfMYgXkZ8PfVLOzoGpWjOPHTqfnn24KBzvcPQMB2hnkdiy0o','succeeded','2024-08-22 17:55:16','2024-08-22 17:55:16'),(3,3,'cs_test_a13k00RzHAf09pNDLGMA842RXpuC577Op2gaN5VlIhBkL0E6qaCGVSPvri','succeeded','2024-08-22 17:55:49','2024-08-22 17:55:49'),(4,4,'cs_test_a1QiQle2VjfziujtTpryhVlbbXLFpWUjoSLmnS3enB3taXVbeipLNbkftp','succeeded','2024-08-22 17:56:00','2024-08-22 17:56:00'),(5,5,'cs_test_a1AIjnQDd2yjEVcLcLCPXIFnO8REi5cvVHumYHHBaK5RK5huqqD3GAFhqo','succeeded','2024-08-22 17:56:13','2024-08-22 17:56:13'),(6,6,'cs_test_a1xhLiNoNCM0eY7vFnghHTTy61DnJDERDtw8j6ZJck1Muz7qFEEV3KsRlo','succeeded','2024-08-22 17:56:22','2024-08-22 17:56:22'),(7,7,'cs_test_a14VAGJqM9sOlcurOGZXnAfphf3VX1taBWrPJu4HWo7XmIANQofpfQhd7F','succeeded','2024-08-22 17:59:22','2024-08-22 17:59:22'),(8,8,'cs_test_a1aYzGKFt9T1j5R7zKeYM3rDAkXR3yMMYQWJGwr4ZKflRSnztfKcSZhOba','succeeded','2024-08-22 17:59:51','2024-08-22 17:59:51'),(9,9,'cs_test_a10CAKNUjVoMtZW9j8ce8TVpsngap7o8rLkE1rxFaWSGcwWTjQTL9hwsQX','succeeded','2024-08-22 18:09:43','2024-08-22 18:09:43'),(10,10,'cs_test_a1KEGOGTnbL0WMhsZIqyVcQ4V71bGfHvcp8hlLjbkUtWTqFRgwOUBnTuQx','succeeded','2024-09-01 15:04:34','2024-09-01 15:04:34'),(11,11,'cs_test_a1lAxGMWPzuZJKPjfZ5oBJi472Uu6u8yyABsi3sRio6YYRHyNus6d39v9r','paid','2024-09-03 16:27:10','2024-09-03 16:27:10'),(12,12,'cs_test_a1k5p5qWrzEFXxkDh6skH2OJZgx8S04IFMG7loHq2ZPmNt3Ba4t8slsnLL','paid','2024-09-08 15:57:48','2024-09-08 15:57:48'),(13,13,'cs_test_a1j1tUxU8eNl4lbI6UYyDdgXc6MNTkEZVyXRGphMGmIg4rPh4HApbfHh2R','succeeded','2024-09-11 18:08:01','2024-09-11 18:08:01'),(14,14,'cs_test_a1RWDqPF0UJ2FQeSABxT673LCKRmYTOsDEENqkQ4KK0HBYfKm9Hz8QGLhk','succeeded','2024-09-16 18:54:09','2024-09-16 18:54:09'),(15,15,'cs_test_a1o2Q98ufPkxnHaLa4nlrZhndDW4y6x3PwF7PCGIHnKb5nWgqWUa8rXyHx','succeeded','2024-09-16 18:55:51','2024-09-16 18:55:51'),(16,16,'cs_test_a1uX0wlLGZM5loh4CUzvP0rMuXanRdStAUYZRCVLPuacFFTfm2OHT08aF4','opłacone','2024-09-16 18:57:14','2024-09-16 18:57:14'),(17,17,'cs_test_a1nDITwumARq0cc7y2oY5TtnzxDjEWXzvfolwLWKDnVmxcsstDqr8hhp6p','opłacone','2024-10-22 16:42:07','2024-10-22 16:42:07'),(18,18,'cs_test_a1DWTukDnyZ7SJMAwvwNIaB7QvYVvltWs1DeD7TY4xgFC8Ed9qnwaKKC1E','opłacone','2024-10-22 16:58:14','2024-10-22 16:58:14'),(19,19,'cs_test_a1LJOM5RTeGYzMkgkxSulWqDbkxPGjjcWCRFsms3xtwF07bijp5UtId13p','opłacone','2024-10-27 19:35:13','2024-10-27 19:35:13');
/*!40000 ALTER TABLE `payment_data` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_access_tokens`
--

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product_categories`
--

DROP TABLE IF EXISTS `product_categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `product_categories` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `productId` int NOT NULL,
  `categoryId` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product_categories`
--

LOCK TABLES `product_categories` WRITE;
/*!40000 ALTER TABLE `product_categories` DISABLE KEYS */;
INSERT INTO `product_categories` VALUES (1,1,2,NULL,NULL),(2,2,1,NULL,NULL),(3,3,5,NULL,NULL),(4,4,6,NULL,NULL),(5,5,8,NULL,NULL),(6,6,2,NULL,NULL);
/*!40000 ALTER TABLE `product_categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `shop`
--

DROP TABLE IF EXISTS `shop`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `shop` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `shop`
--

LOCK TABLES `shop` WRITE;
/*!40000 ALTER TABLE `shop` DISABLE KEYS */;
INSERT INTO `shop` VALUES (1,'Piłka adidas Pro rozmiar 5',371,'Oficjalna piłka PKO Ekstraklasy na sezon 2023/24, inspirowana futbolówką, którą rozgrywane będą mecze podczas Mistrzostw Świata kobiet FIFA™.\n                                    Model stworzony z myślą o płynnej grze. adidas Oceaunz Pro wyróżnia się grafiką,\n                                    która odzwierciedla znaczenie Australii i malowniczego wybrzeża Nowej Zelandii,\n                                    a także będących źródłem życia jezior i dróg wodnych. Bezszwowa konstrukcja zapewnia przewidywalną\n                                    trajektorię lotu i odbicie. Znak jakości Quality Pro to najwyższa ocena FIFA.','iq4933-5_1.jpg',NULL,NULL),(2,'Korki adidas Predator Elite FG',977,'Powitaj nowe buty Predator 24 Elite FG, kolejny uwielbiany model\n                                    z kolekcji inspirowanej piękną grą. Buty Predator stworzone we współpracy z profesjonalnymi piłkarzami wykorzystują nowe sposoby poprawy Twojej wydajności na naturalnej nawierzchni. Ruszaj na boisko w dobrym stylu i przygotuj się, by przejąć kontrolę nad grą.','ie1802_16.webp',NULL,NULL),(3,'Koszulka adidas Tabela 23 Junior',69,'Zawsze dawaj z siebie wszystko. Ta młodzieżowa koszulka piłkarska adidas prezentuje prosty styl za sprawą charakterystycznych 3 pasków i logo z 3 paskami. Pochłaniający wilgoć AEROREADY i rękawy z siateczki zapewnią Ci suchy komfort przez cały mecz.\n                                    Ten produkt został wykonany w 100% z materiałów pochodzących z recyklingu i stanowi tylko jedno z rozwiązań, które pomogą wyeliminować zanieczyszczenie plastikiem.','ia9154_1.webp',NULL,NULL),(4,'Spodenki adidas Tiro 23 League Match Damskie - Biały',124,'Model stworzony z myślą o pięknej grze. Szorty piłkarskie adidas, będące częścią kolekcji Tiro 23 League, pozwolą Ci swobodnie poruszać się po boisku. Model z gładkiego, lekkiego materiału ma pochłaniający wilgoć AEROREADY, który zapewni Ci suchy komfort nawet przy pełnej prędkości. W kieszeniach na suwaki bezpiecznie przechowasz cenne drobiazgi, gdy nie chcesz ich zostawiać przy linii bocznej.\n\nTen produkt został wykonany wyłącznie z materiałów pochodzących z recyklingu i stanowi tylko jedno rozwiązań, które pomogą wyeliminować zanieczyszczenie plastikiem.','hr9750_1.webp',NULL,NULL),(5,'Skarpety Nike Dri-FIT Strike - Czarny',47,'Ciesz się wygodą na boisku dzięki skarpetkom Nike Strike Crew. Technologia odprowadzania wilgoci pomaga zachować suchość i wygodę, a amortyzacja w obszarach narażonych na ścieranie pomaga amortyzować uderzenia.\n\nTechnologia Nike Dri-FIT odprowadza ze skóry wilgoć i umożliwia jej szybkie odparowanie, co zapewnia uczucie suchości i wygodę.\nAmortyzacja w strefach narażonych na otarcia pochłania wstrząsy podczas biegu.','fz8485-010_1.webp',NULL,NULL),(6,'Piłka adidas Pro rozmiar 5',100,'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer justo urna, condimentum et odio a, porttitor placerat nunc. Praesent vel sollicitudin odio. Integer sit amet sapien volutpat, placerat ante sodales, tincidunt tortor. Duis lorem quam, hendrerit quis velit at, pulvinar finibus mauris. Vestibulum vulputate nibh facilisis urna elementum, a consequat magna viverra. Duis consectetur nulla sapien, dignissim eleifend arcu tincidunt sed. Aliquam tincidunt leo sed nunc volutpat, sit amet dictum odio lacinia. ','iq4933-5_1.jpg',NULL,NULL);
/*!40000 ALTER TABLE `shop` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-12-24 21:24:54
