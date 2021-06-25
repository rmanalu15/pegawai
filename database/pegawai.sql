-- MySQL dump 10.13  Distrib 8.0.22, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: pegawai
-- ------------------------------------------------------
-- Server version	8.0.22

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `reg_pegawai`
--

DROP TABLE IF EXISTS `reg_pegawai`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `reg_pegawai` (
  `id_regpegawai` int NOT NULL AUTO_INCREMENT,
  `kode_regpegawai` varchar(50) NOT NULL,
  `password_regpegawai` varchar(255) NOT NULL,
  `nama_regpegawai` varchar(50) NOT NULL,
  `jenis_kelamin_regpegawai` varchar(20) NOT NULL,
  `kelahiran_regpegawai` date NOT NULL,
  `nomor_telepon_regpegawai` varchar(20) NOT NULL,
  `alamat_regpegawai` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_regpegawai`),
  UNIQUE KEY `kode_regpegawai_UNIQUE` (`kode_regpegawai`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reg_pegawai`
--

LOCK TABLES `reg_pegawai` WRITE;
/*!40000 ALTER TABLE `reg_pegawai` DISABLE KEYS */;
INSERT INTO `reg_pegawai` VALUES (1,'062521001','$2y$10$YT/gWnN8s1tbVHHEUDlLYunliIm72f5sbYw4wNHJOsByigDQzfbFy','Rupinda Manalu','Pria','1997-01-28','081283404176','Karang Tengah, Kota Tangerang','2021-06-25 08:27:34');
/*!40000 ALTER TABLE `reg_pegawai` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-06-25 16:12:04
