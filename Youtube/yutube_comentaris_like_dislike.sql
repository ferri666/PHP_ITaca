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
-- Table structure for table `comentaris_like_dislike`
--

DROP TABLE IF EXISTS `comentaris_like_dislike`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `comentaris_like_dislike` (
  `Comentaris_Comentari_id` int NOT NULL,
  `Usuaris_Usuari_id` int NOT NULL,
  `Comentaris_Like_Dislike` char(1) DEFAULT 'n',
  `Comentaris_Data` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`Comentaris_Comentari_id`,`Usuaris_Usuari_id`),
  KEY `fk_Comentaris_has_Usuaris_Usuaris1_idx` (`Usuaris_Usuari_id`),
  KEY `fk_Comentaris_has_Usuaris_Comentaris1_idx` (`Comentaris_Comentari_id`),
  CONSTRAINT `fk_Comentaris_has_Usuaris_Comentaris1` FOREIGN KEY (`Comentaris_Comentari_id`) REFERENCES `comentaris` (`Comentari_id`),
  CONSTRAINT `fk_Comentaris_has_Usuaris_Usuaris1` FOREIGN KEY (`Usuaris_Usuari_id`) REFERENCES `usuaris` (`Usuari_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comentaris_like_dislike`
--

LOCK TABLES `comentaris_like_dislike` WRITE;
/*!40000 ALTER TABLE `comentaris_like_dislike` DISABLE KEYS */;
INSERT INTO `comentaris_like_dislike` VALUES (1,1,'d','2021-05-05 17:03:10'),(1,2,'d','2021-05-05 17:03:29'),(2,1,'d','2021-05-05 17:03:14'),(2,2,'d','2021-05-05 17:03:34'),(3,1,'d','2021-05-05 17:03:16'),(3,2,'d','2021-05-05 17:03:37'),(4,2,'d','2021-05-05 17:03:40'),(5,2,'d','2021-05-05 17:03:42'),(6,1,'l','2021-05-06 16:30:15'),(6,4,'l','2021-05-06 16:31:07'),(7,2,'l','2021-05-06 16:30:33'),(8,3,'l','2021-05-06 16:32:24'),(8,7,'d','2021-05-06 16:32:43');
/*!40000 ALTER TABLE `comentaris_like_dislike` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-05-06 18:37:38
