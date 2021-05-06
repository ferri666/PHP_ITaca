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
-- Table structure for table `comentaris`
--

DROP TABLE IF EXISTS `comentaris`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `comentaris` (
  `Comentari_id` int NOT NULL AUTO_INCREMENT,
  `Comentari_text` varchar(400) DEFAULT NULL,
  `Comentari_data` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `Usuari_Usuari_id` int NOT NULL,
  `Videos_Videos_id` int NOT NULL,
  PRIMARY KEY (`Comentari_id`),
  KEY `fk_Comentari_Usuari1_idx` (`Usuari_Usuari_id`),
  KEY `fk_Comentari_Videos1_idx` (`Videos_Videos_id`),
  CONSTRAINT `fk_Comentari_Usuari1` FOREIGN KEY (`Usuari_Usuari_id`) REFERENCES `usuaris` (`Usuari_id`),
  CONSTRAINT `fk_Comentari_Videos1` FOREIGN KEY (`Videos_Videos_id`) REFERENCES `videos` (`Videos_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comentaris`
--

LOCK TABLES `comentaris` WRITE;
/*!40000 ALTER TABLE `comentaris` DISABLE KEYS */;
INSERT INTO `comentaris` VALUES (1,'FIRST!!!!!!!','2021-05-05 16:01:50',7,1),(2,'FIRST!!!!!!!','2021-05-05 16:01:53',7,2),(3,'FIRST!!!!!!!','2021-05-05 16:01:55',7,3),(4,'FIRST!!!!!!!','2021-05-05 16:02:02',7,4),(5,'FIRST!!!!!!!','2021-05-05 16:02:05',7,5),(6,'Very Interesting. Keep The Good Work','2021-05-06 15:43:33',6,1),(7,'This Episode its sooo weird','2021-05-06 15:45:47',6,1),(8,'i like your chanel','2021-05-06 15:46:33',5,4),(9,'So much Dramaaaaaaaaaaaaaa','2021-05-06 15:47:10',2,5);
/*!40000 ALTER TABLE `comentaris` ENABLE KEYS */;
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
