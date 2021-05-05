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
-- Table structure for table `comanda_has_producte`
--

DROP TABLE IF EXISTS `comanda_has_producte`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `comanda_has_producte` (
  `Comanda_Comanda_id` int NOT NULL,
  `Producte_Producte_id` int NOT NULL,
  `Quantitat` smallint DEFAULT '1',
  PRIMARY KEY (`Comanda_Comanda_id`,`Producte_Producte_id`),
  KEY `fk_Comanda_has_Producte_Producte1_idx` (`Producte_Producte_id`),
  KEY `fk_Comanda_has_Producte_Comanda1_idx` (`Comanda_Comanda_id`),
  CONSTRAINT `fk_Comanda_has_Producte_Comanda1` FOREIGN KEY (`Comanda_Comanda_id`) REFERENCES `comanda` (`Comanda_id`),
  CONSTRAINT `fk_Comanda_has_Producte_Producte1` FOREIGN KEY (`Producte_Producte_id`) REFERENCES `producte` (`Producte_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comanda_has_producte`
--

LOCK TABLES `comanda_has_producte` WRITE;
/*!40000 ALTER TABLE `comanda_has_producte` DISABLE KEYS */;
INSERT INTO `comanda_has_producte` VALUES (1,1,1),(1,4,1),(2,2,2),(2,5,2),(3,5,2),(3,6,1);
/*!40000 ALTER TABLE `comanda_has_producte` ENABLE KEYS */;
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
