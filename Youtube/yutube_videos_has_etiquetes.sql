-- MySQL dump 10.13  Distrib 8.0.24, for Win64 (x86_64)
--
-- Host: localhost    Database: yutube
-- ------------------------------------------------------
-- Server version	8.0.24

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
-- Table structure for table `videos_has_etiquetes`
--

DROP TABLE IF EXISTS `videos_has_etiquetes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `videos_has_etiquetes` (
  `Videos_Videos_id` int NOT NULL,
  `Etiquetes_Etiquetes_id` int NOT NULL,
  PRIMARY KEY (`Videos_Videos_id`,`Etiquetes_Etiquetes_id`),
  KEY `fk_Videos_has_Etiquetes_Etiquetes1_idx` (`Etiquetes_Etiquetes_id`),
  KEY `fk_Videos_has_Etiquetes_Videos_idx` (`Videos_Videos_id`),
  CONSTRAINT `fk_Videos_has_Etiquetes_Etiquetes1` FOREIGN KEY (`Etiquetes_Etiquetes_id`) REFERENCES `etiquetes` (`Etiquetes_id`),
  CONSTRAINT `fk_Videos_has_Etiquetes_Videos` FOREIGN KEY (`Videos_Videos_id`) REFERENCES `videos` (`Videos_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `videos_has_etiquetes`
--

LOCK TABLES `videos_has_etiquetes` WRITE;
/*!40000 ALTER TABLE `videos_has_etiquetes` DISABLE KEYS */;
INSERT INTO `videos_has_etiquetes` VALUES (1,1),(2,1),(3,1),(1,2),(2,2),(3,2),(4,3),(4,4),(1,5),(2,5),(3,5),(5,5),(1,6),(2,6),(3,6);
/*!40000 ALTER TABLE `videos_has_etiquetes` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-05-06 18:37:40
