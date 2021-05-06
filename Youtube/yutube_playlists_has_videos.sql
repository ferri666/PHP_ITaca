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
-- Table structure for table `playlists_has_videos`
--

DROP TABLE IF EXISTS `playlists_has_videos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `playlists_has_videos` (
  `Playlists_Playlists_id` int NOT NULL,
  `Videos_Videos_id` int NOT NULL,
  PRIMARY KEY (`Playlists_Playlists_id`,`Videos_Videos_id`),
  KEY `fk_Playlists_has_Videos_Videos1_idx` (`Videos_Videos_id`),
  KEY `fk_Playlists_has_Videos_Playlists1_idx` (`Playlists_Playlists_id`),
  CONSTRAINT `fk_Playlists_has_Videos_Playlists1` FOREIGN KEY (`Playlists_Playlists_id`) REFERENCES `playlists` (`Playlists_id`),
  CONSTRAINT `fk_Playlists_has_Videos_Videos1` FOREIGN KEY (`Videos_Videos_id`) REFERENCES `videos` (`Videos_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `playlists_has_videos`
--

LOCK TABLES `playlists_has_videos` WRITE;
/*!40000 ALTER TABLE `playlists_has_videos` DISABLE KEYS */;
INSERT INTO `playlists_has_videos` VALUES (1,1),(2,1),(1,2),(2,2),(1,3),(2,3),(2,8),(2,9),(2,10);
/*!40000 ALTER TABLE `playlists_has_videos` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-05-06 18:37:39
