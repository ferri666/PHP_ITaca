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
-- Table structure for table `producte`
--

DROP TABLE IF EXISTS `producte`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `producte` (
  `Producte_id` int NOT NULL AUTO_INCREMENT,
  `Producte_nom` varchar(45) NOT NULL,
  `Producte_tipus` enum('pizza','hamburguesa','beguda') NOT NULL,
  `Producte_descripcio` varchar(200) DEFAULT NULL,
  `Producte_imatge` blob,
  `Producte_preu` double NOT NULL,
  `Categories_Pizza_Categories_id` int DEFAULT NULL,
  PRIMARY KEY (`Producte_id`),
  KEY `fk_Producte_Categories_Pizza1_idx` (`Categories_Pizza_Categories_id`),
  CONSTRAINT `fk_Producte_Categories_Pizza1` FOREIGN KEY (`Categories_Pizza_Categories_id`) REFERENCES `categories_pizza` (`Categories_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `producte`
--

LOCK TABLES `producte` WRITE;
/*!40000 ALTER TABLE `producte` DISABLE KEYS */;
INSERT INTO `producte` VALUES (1,'Aigua','beguda','H20, Fresca i pura',NULL,3,NULL),(2,'Chesseburger','hamburguesa','Favorita de ratolins i hamsters',NULL,5,NULL),(3,'Chesseburger doble','hamburguesa','Quan una no es suficient',NULL,8,NULL),(4,'BIG PIZZA','pizza','Que gran',NULL,10,1),(5,'small pizza','pizza','Que petita',NULL,6,1),(6,'Cola','beguda','No enganxa tant com esperaries',NULL,3,NULL);
/*!40000 ALTER TABLE `producte` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-05-05 15:16:35
