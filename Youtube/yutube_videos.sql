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
-- Table structure for table `videos`
--

DROP TABLE IF EXISTS `videos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `videos` (
  `Videos_id` int NOT NULL AUTO_INCREMENT,
  `Videos_titol` varchar(45) NOT NULL,
  `Videos_descripcio` varchar(400) DEFAULT NULL,
  `Videos_nom_arxiu` varchar(45) NOT NULL,
  `Videos_durada_video` int NOT NULL,
  `Videos_Thumbnail` blob,
  `Videos_nombre_reproduccions` int DEFAULT NULL,
  `Videos_likes` int DEFAULT NULL,
  `Videos_dislikes` int DEFAULT NULL,
  `Videos_estat` enum('public','privat','ocult') NOT NULL,
  `Videos_creacio` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `Canal_Canal_id` int NOT NULL,
  `Usuari_Usuari_id` int NOT NULL,
  PRIMARY KEY (`Videos_id`),
  KEY `fk_Videos_Canal1_idx` (`Canal_Canal_id`),
  KEY `fk_Videos_Usuari1_idx` (`Usuari_Usuari_id`),
  CONSTRAINT `fk_Videos_Canal1` FOREIGN KEY (`Canal_Canal_id`) REFERENCES `canals` (`Canal_id`),
  CONSTRAINT `fk_Videos_Usuari1` FOREIGN KEY (`Usuari_Usuari_id`) REFERENCES `usuaris` (`Usuari_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `videos`
--

LOCK TABLES `videos` WRITE;
/*!40000 ALTER TABLE `videos` DISABLE KEYS */;
INSERT INTO `videos` VALUES (1,'Diminish Act 1 Ep 1','This game was made for me to play. A follower made a discord server follow here: http:www.discord.com/channels/243663353','Diminish1.mp4',537,NULL,25182,1832,4,'public','2021-05-05 15:28:21',1,1),(2,'Diminish Act 1 Ep 2','This game was made for me to play. A follower made a discord server follow here: http:www.discord.com/channels/243663353','Diminish2.mp4',712,NULL,14913,973,4,'public','2021-05-05 15:29:11',1,1),(3,'Diminish Act 1 Ep 3','This game was made for me to play. A follower made a discord server follow here: http:www.discord.com/channels/243663353','Diminish3.mp4',958,NULL,13421,844,3,'public','2021-05-05 15:30:02',1,1),(4,'Makeup Tutorial 101','Just a Start, Thanks for watching <3','97359347.wmv',366,NULL,678,54,15,'public','2021-05-05 15:42:39',3,3),(5,'WHY ARE PEOPLE SO MEAN!!??','I have Everything','923358.wmv',266,NULL,2978,354,120,'privat','2021-05-05 15:44:33',3,3),(6,'Analisis Diminish 1','This series is interesting','Dim1.mp4',650,NULL,450,55,3,'public','2021-05-06 13:15:01',4,6),(7,'Analisis Diminish 2','On the works','Dim2.mp4',630,NULL,0,0,0,'ocult','2021-05-06 13:15:40',4,6),(8,'Petscop1','This game I found','49247iohjsh.mp4',670,NULL,1264647,320,10,'public','2021-05-06 14:56:22',2,4),(9,'Petscop2','This game I found','w5i905309te.mp4',540,NULL,978436,240,5,'public','2021-05-06 14:57:25',2,4),(10,'Petscop3','This game I found','892ogiuewi39754.mp4',790,NULL,965963,220,4,'public','2021-05-06 14:58:06',2,4);
/*!40000 ALTER TABLE `videos` ENABLE KEYS */;
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
