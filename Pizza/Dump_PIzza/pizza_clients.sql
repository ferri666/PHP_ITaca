-- MySQL dump 10.13  Distrib 8.0.24, for Win64 (x86_64)
--
-- Host: localhost    Database: pizza
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
-- Table structure for table `clients`
--

DROP TABLE IF EXISTS `clients`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `clients` (
  `Clients_id` int NOT NULL AUTO_INCREMENT,
  `Clients_nom` varchar(45) DEFAULT NULL,
  `Clients_cognom` varchar(45) DEFAULT NULL,
  `Clients_adreça` varchar(80) DEFAULT NULL,
  `Clients_Codi_Postal` varchar(10) DEFAULT NULL,
  `Clients_telefon` varchar(20) DEFAULT NULL,
  `Provincia_Provincia_id` int NOT NULL,
  `Localitat_Localitat_id` int NOT NULL,
  PRIMARY KEY (`Clients_id`,`Provincia_Provincia_id`,`Localitat_Localitat_id`),
  KEY `fk_Clients_Provincia2_idx` (`Provincia_Provincia_id`),
  KEY `fk_Clients_Localitat1_idx` (`Localitat_Localitat_id`),
  CONSTRAINT `fk_Clients_Localitat1` FOREIGN KEY (`Localitat_Localitat_id`) REFERENCES `localitat` (`Localitat_id`),
  CONSTRAINT `fk_Clients_Provincia2` FOREIGN KEY (`Provincia_Provincia_id`) REFERENCES `provincia` (`Provincia_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clients`
--

LOCK TABLES `clients` WRITE;
/*!40000 ALTER TABLE `clients` DISABLE KEYS */;
INSERT INTO `clients` VALUES (1,'Fernando','Fernandez','Carrer Pastanaga 3','17220','+34777788889',2,1),(2,'Paco','Perez','Carrer Taronja 9','987654','+35866878432',1,2),(3,'Laura','Palacios','Carrer Trufo 77','19880',NULL,2,3);
/*!40000 ALTER TABLE `clients` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-05-05 15:16:37
