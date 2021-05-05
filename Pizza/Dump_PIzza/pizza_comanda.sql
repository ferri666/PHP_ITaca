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
-- Table structure for table `comanda`
--

DROP TABLE IF EXISTS `comanda`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `comanda` (
  `Comanda_id` int NOT NULL AUTO_INCREMENT,
  `Comanda_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `Comanda_tipus` char(1) DEFAULT NULL,
  `Comanda_preu_total` int DEFAULT NULL,
  `Comanda_quant_produc` smallint DEFAULT NULL,
  `Botiga_Botiga_id` int NOT NULL,
  `Clients_Clients_id` int NOT NULL,
  PRIMARY KEY (`Comanda_id`,`Botiga_Botiga_id`,`Clients_Clients_id`),
  KEY `fk_Comanda_Botiga1_idx` (`Botiga_Botiga_id`),
  KEY `fk_Comanda_Clients1_idx` (`Clients_Clients_id`),
  CONSTRAINT `fk_Comanda_Botiga1` FOREIGN KEY (`Botiga_Botiga_id`) REFERENCES `botiga` (`Botiga_id`),
  CONSTRAINT `fk_Comanda_Clients1` FOREIGN KEY (`Clients_Clients_id`) REFERENCES `clients` (`Clients_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comanda`
--

LOCK TABLES `comanda` WRITE;
/*!40000 ALTER TABLE `comanda` DISABLE KEYS */;
INSERT INTO `comanda` VALUES (1,'2021-05-05 08:11:35','b',13,2,1,3),(2,'2021-05-05 08:14:18','d',21,4,2,1),(3,'2021-05-05 13:11:31','d',15,3,3,2);
/*!40000 ALTER TABLE `comanda` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-05-05 15:16:36
