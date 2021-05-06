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
-- Table structure for table `usuaris`
--

DROP TABLE IF EXISTS `usuaris`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `usuaris` (
  `Usuari_id` int NOT NULL AUTO_INCREMENT,
  `Usuari_name` varchar(45) NOT NULL,
  `Usuari_password` varchar(45) NOT NULL,
  `Usuari_email` varchar(45) NOT NULL,
  `Usuari_sexe` char(1) NOT NULL,
  `Usuari_data_naixement` date DEFAULT NULL,
  `Usuari_pais` varchar(45) DEFAULT NULL,
  `Usuari_codi_postal` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`Usuari_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuaris`
--

LOCK TABLES `usuaris` WRITE;
/*!40000 ALTER TABLE `usuaris` DISABLE KEYS */;
INSERT INTO `usuaris` VALUES (1,'Wacky Will','123456','ww123456@hotmail.es','m','1993-04-05','America','43256'),(2,'Ultimate Fan','nadielovaasaber','hifutami@hotmail.ja','m','1987-08-22','Japan','6678904'),(3,'Sansa','Brandon','northremembers@gmail.com','f','1991-12-03','Invernalia','11111111'),(4,'Paul','shadowman','yourchild@jazztel.com','c','1997-11-12','America','1993786328'),(5,'Claire','shadowman','yourchild2@jazztel.com','c','1997-11-12','America','1993786328'),(6,'Nightmare Professor','Cthulu69','davidtotler@gmail.com','m','1985-02-20','UK','1539775'),(7,'An Idiot','000000','juststupid@yahoo.com','s','2009-01-01','Yugoslavia','1048937');
/*!40000 ALTER TABLE `usuaris` ENABLE KEYS */;
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
