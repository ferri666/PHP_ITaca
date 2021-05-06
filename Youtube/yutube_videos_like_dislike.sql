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
-- Table structure for table `videos_like_dislike`
--

DROP TABLE IF EXISTS `videos_like_dislike`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `videos_like_dislike` (
  `Usuari_Usuari_id` int NOT NULL,
  `Videos_Videos_id` int NOT NULL,
  `Like_Dislike` char(1) NOT NULL,
  `Like_Dislike_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`Usuari_Usuari_id`,`Videos_Videos_id`),
  KEY `fk_Usuari_has_Videos_Videos1_idx` (`Videos_Videos_id`),
  KEY `fk_Usuari_has_Videos_Usuari1_idx` (`Usuari_Usuari_id`),
  CONSTRAINT `fk_Usuari_has_Videos_Usuari1` FOREIGN KEY (`Usuari_Usuari_id`) REFERENCES `usuaris` (`Usuari_id`),
  CONSTRAINT `fk_Usuari_has_Videos_Videos1` FOREIGN KEY (`Videos_Videos_id`) REFERENCES `videos` (`Videos_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `videos_like_dislike`
--

LOCK TABLES `videos_like_dislike` WRITE;
/*!40000 ALTER TABLE `videos_like_dislike` DISABLE KEYS */;
INSERT INTO `videos_like_dislike` VALUES (2,1,'l','2021-05-05 16:58:35'),(2,2,'l','2021-05-05 16:58:56'),(2,3,'l','2021-05-05 16:59:00'),(2,4,'l','2021-05-05 16:59:02'),(2,5,'l','2021-05-05 16:59:04'),(6,1,'l','2021-05-05 16:59:51'),(6,2,'l','2021-05-05 16:59:57'),(6,3,'l','2021-05-05 16:59:59'),(6,5,'d','2021-05-05 16:59:17'),(7,1,'d','2021-05-05 17:01:08'),(7,2,'d','2021-05-05 17:01:10'),(7,3,'d','2021-05-05 17:01:12'),(7,4,'d','2021-05-05 17:01:14'),(7,5,'d','2021-05-05 17:01:17');
/*!40000 ALTER TABLE `videos_like_dislike` ENABLE KEYS */;
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
