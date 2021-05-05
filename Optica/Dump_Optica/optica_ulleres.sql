-- MySQL dump 10.13  Distrib 8.0.24, for Win64 (x86_64)
--
-- Host: localhost    Database: optica
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
-- Table structure for table `ulleres`
--

DROP TABLE IF EXISTS `ulleres`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ulleres` (
  `Ulleres_id` int NOT NULL AUTO_INCREMENT,
  `Graduacio_Esq` smallint NOT NULL,
  `Graduacio_Dret` smallint NOT NULL,
  `Tipus_muntura` enum('flotant','pasta','metalica') DEFAULT NULL,
  `Color_muntura` varchar(20) DEFAULT NULL,
  `Color_vidres` varchar(20) DEFAULT NULL,
  `Preu` decimal(10,0) DEFAULT NULL,
  `Marques_Marca_id1` int NOT NULL,
  PRIMARY KEY (`Ulleres_id`),
  KEY `fk_Ulleres_Marques1_idx` (`Marques_Marca_id1`),
  CONSTRAINT `fk_Ulleres_Marques1` FOREIGN KEY (`Marques_Marca_id1`) REFERENCES `marques` (`Marca_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ulleres`
--

LOCK TABLES `ulleres` WRITE;
/*!40000 ALTER TABLE `ulleres` DISABLE KEYS */;
INSERT INTO `ulleres` VALUES (1,20,20,'pasta','marró','transparent',40,1),(2,20,20,'metalica','negre','transparent',40,1),(3,30,10,'flotant','blanc','negre',60,4),(4,50,50,'flotant','blau','vermell',30,5),(5,20,30,'flotant','blau','vermell',20,5);
/*!40000 ALTER TABLE `ulleres` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-05-05 10:56:56
