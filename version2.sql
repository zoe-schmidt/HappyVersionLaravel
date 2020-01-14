-- MySQL dump 10.13  Distrib 8.0.14, for Win64 (x86_64)
--
-- Host: localhost    Database: happy
-- ------------------------------------------------------
-- Server version	8.0.14

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
 SET NAMES utf8 ;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `carritos`
--

DROP TABLE IF EXISTS `carritos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `carritos` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `idProducto` bigint(20) unsigned NOT NULL,
  `idUsuario` bigint(20) unsigned NOT NULL,
  `estadoCompra` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cantidad` decimal(15,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `carritos`
--

LOCK TABLES `carritos` WRITE;
/*!40000 ALTER TABLE `carritos` DISABLE KEYS */;
INSERT INTO `carritos` VALUES (1,'2019-12-16 23:17:53','2019-12-17 15:58:37',7,5,'Pendiente de pago',13.00),(2,'2019-12-16 23:29:23','2019-12-17 06:13:44',9,5,'Pendiente de pago',110.00),(12,'2019-12-20 20:39:15','2019-12-20 21:17:35',18,10,'Pendiente de pago',6.00),(14,'2019-12-20 21:34:59','2019-12-20 21:34:59',18,11,'Pendiente de pago',1.00),(15,'2019-12-20 21:35:07','2019-12-20 21:35:07',9,11,'Pendiente de pago',1.00),(16,'2019-12-20 21:37:55','2019-12-20 21:37:55',22,8,'Pendiente de pago',1.00);
/*!40000 ALTER TABLE `carritos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categorias`
--

DROP TABLE IF EXISTS `categorias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `categorias` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categorias`
--

LOCK TABLES `categorias` WRITE;
/*!40000 ALTER TABLE `categorias` DISABLE KEYS */;
INSERT INTO `categorias` VALUES (1,NULL,NULL,'viajes'),(2,NULL,NULL,'actividades'),(3,NULL,NULL,'gastronomia');
/*!40000 ALTER TABLE `categorias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2019_11_21_154406_create_productos_table',1),(4,'2019_11_21_154620_create_productos_comprados_table',2),(5,'2019_11_27_195038_create_column_apellido',3),(6,'2019_12_11_174713_cargar_imagen_producto',4),(7,'2019_12_11_182747_cargar_id_categorias_por_default',5),(8,'2019_12_18_183124_crear_campo_administrador',6);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `password_resets` (
  `email` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `productos`
--

DROP TABLE IF EXISTS `productos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `productos` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `precio` decimal(15,2) NOT NULL,
  `idCategoria` bigint(20) NOT NULL DEFAULT '0',
  `imagen` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `productos`
--

LOCK TABLES `productos` WRITE;
/*!40000 ALTER TABLE `productos` DISABLE KEYS */;
INSERT INTO `productos` VALUES (9,'2019-12-14 23:54:29','2019-12-14 23:54:29','Paseo por temaiken!','Disfruta de un día en familia en Temaiken!',12000.00,2,'2poqQSNegG4pwWqMIdcEL2dvuscp3tnVXvdtbgS1.png'),(10,'2019-12-14 23:55:12','2019-12-14 23:55:12','Paseo por temaiken!','Una semana en las Cataratas del Iguazú',15000.00,2,'xhHyMBJ5Zmo050t2SDwAJv16MYXY5JZCxcMS1mbo.png'),(16,'2019-12-19 21:41:51','2019-12-19 21:41:51','Golpear a Lenny','golpea a Lenny en la Nuca!',3000.00,2,'8c3abA1rdgeNcGXgNUy3oiFagwYFDB0Kby4Ljj0e.jpeg'),(18,'2019-12-19 21:55:57','2019-12-19 21:55:57','Combo Hamburguesa','Combo de Hamburguesa + birra',3000.00,3,'MJ9s4ExKU8pnsA8j8KwZVJ2xfxdVHwQKADGc05tj.jpeg'),(20,'2019-12-19 21:57:32','2019-12-19 21:57:32','cenara para 2','Cena para dos en Centro Okinawense',3000.00,3,'jm8vkKMG7P2i97Pg6tVl26A3vNBd58vqWyHkvt8L.jpeg'),(21,'2019-12-20 20:16:16','2019-12-20 20:16:16','Clases de Bailer','Clases de Baile',63000.00,2,'CFpNi8HrTtjqOVahbQQEuTtduXtNohCL1CDG2Hjg.jpeg');
/*!40000 ALTER TABLE `productos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `productos_comprados`
--

DROP TABLE IF EXISTS `productos_comprados`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `productos_comprados` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `idProducto` bigint(20) unsigned NOT NULL,
  `idUsuario` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `productos_comprados`
--

LOCK TABLES `productos_comprados` WRITE;
/*!40000 ALTER TABLE `productos_comprados` DISABLE KEYS */;
/*!40000 ALTER TABLE `productos_comprados` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `apellido` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `administrador` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `email_2` (`email`),
  UNIQUE KEY `email_3` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'nico','nico@nico.com',NULL,'$2y$10$026XZrsf.feoHU06uV/S0Ogj5x/Mu4tVxAVjY5VrHtL34HO4yUPru',NULL,'2019-11-27 23:07:58','2019-11-27 23:07:58','','tuvieja',0),(2,'juan','jua@juan.com',NULL,'$2y$10$H.mhnmhKpqBQm6yL6Frcne2eQ05w1XpHfvoWzGSH.yOqhqQYQ.0/C',NULL,'2019-11-27 23:24:15','2019-11-27 23:24:15','','tuvieja',0),(3,'nicolas','lucas@mmm.com',NULL,'$2y$10$w1JDk.UaBJbZFWxgoEgr9.3jg8onAMDu.v8msDqZ6qPPNW2GdDyL2',NULL,'2019-11-27 23:41:59','2019-11-27 23:41:59','','stecher',0),(4,'jorge','joge@mmm.com',NULL,'$2y$10$BKFPBCKT/ToHiZWykLxdfuohDUeB7vA.xYwm0vlsBH.f44Swrvd42',NULL,'2019-11-27 23:42:43','2019-11-27 23:42:43','','aluz',0),(5,'nico','nico@maru.com',NULL,'$2y$10$dXKv40oMmtitsJC5nuwEbuRkmSp4O2q97NogQS0j6IstjI1Oegq9C',NULL,'2019-12-14 19:32:02','2019-12-14 19:32:02','','nico',0),(6,'juan','juan@juan.com',NULL,'$2y$10$GezPpcUKTKIXOSoFgxqocebDOC7ec5O/UZYeMNal9rTH7Mk0jRkla',NULL,'2019-12-16 18:43:57','2019-12-16 18:43:57','GOAUqNk8ZxtZiu31ZLpMseyj7Hatq57prRTOlRcl.png','carlos',0),(7,'nico','nico@jjj.com',NULL,'$2y$10$OWz0rrbpJPrMoqKf9SkefuickSNVfbKfaD0frpFQ/GypGS/XYTRaC',NULL,'2019-12-18 03:47:49','2019-12-18 03:47:49','5f8DuzAjDkmqqRcbt2n7cSWjVWNCKW7jFqd72pZO.jpeg','stecher',0),(8,'nico','nico@pp.com',NULL,'$2y$10$drYRsJMSv5dtSeHS7U4ha.W4mQICjAqY5SP9IZ530o4WXCvURqydG',NULL,'2019-12-18 04:03:30','2019-12-18 04:03:30','5wzaPfhSyeiooxvAUZpu57tzhz8CIcch7rY1iDhb.jpeg','asdasd',1),(9,'ricardo','rico@rico.com',NULL,'$2y$10$Z707ChNXFm0dccAiNACrFOOFMYBZKwL9bJGPn2ccSj/pY0/Y7egz6',NULL,'2019-12-20 17:42:52','2019-12-20 17:42:52','5ztavcoqZ87V5fV6Eji9hKY4rwOBQSjOZLGRKocT.png','gonzalez',0),(10,'Dario','dario@dario.com',NULL,'$2y$10$YbJ4Acry6jYAFvtgFDjPROcujv4PbPvaGgI0q14JXf1i5IiyC45w6',NULL,'2019-12-20 20:31:28','2019-12-20 20:31:28','f3g5ohRPaewwaPz54FCrbDJaLcSY03caXlZwoBpb.png','sus',0),(11,'dario','dario@ddd.com',NULL,'$2y$10$8y5kBEc02Ojyc/Omc5/kje5igXubHpyzzotTDyX0iTOHuI1RX66q6',NULL,'2019-12-20 21:34:26','2019-12-20 21:34:26','81RYeTgQwWzHwFLFheOlnSFNjUNoZk2LpBV4txCg.png','dario',0);
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

-- Dump completed on 2020-01-13 17:29:24
