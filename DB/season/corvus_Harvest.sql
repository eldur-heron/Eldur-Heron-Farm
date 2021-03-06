-- MySQL dump 10.13  Distrib 5.7.28, for Linux (x86_64)
--
-- Host: 127.0.0.1    Database: corvus
-- ------------------------------------------------------
-- Server version	5.7.28-0ubuntu0.18.04.4

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `Harvest`
--

DROP TABLE IF EXISTS `Harvest`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Harvest` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `harvested` datetime NOT NULL,
  `tracebilityCode` varchar(10) NOT NULL,
  `product` int(11) NOT NULL,
  `quantity` decimal(5,2) NOT NULL,
  `units` int(11) NOT NULL,
  `location` int(11) NOT NULL,
  `totalRowMeters` decimal(4,1) NOT NULL,
  `yieldPerRowMeter` decimal(4,1) NOT NULL,
  `notes` text NOT NULL,
  `updated` datetime DEFAULT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `fk_Harvest_Product_idx` (`product`),
  KEY `fk_Harvest_Units_idx` (`units`),
  KEY `fk_Harvest_Location_idx` (`location`),
  CONSTRAINT `fk_Harvest_Location` FOREIGN KEY (`location`) REFERENCES `Location` (`id`) ON UPDATE CASCADE,
  CONSTRAINT `fk_Harvest_Product` FOREIGN KEY (`product`) REFERENCES `Product` (`id`) ON UPDATE CASCADE,
  CONSTRAINT `fk_Harvest_Units` FOREIGN KEY (`units`) REFERENCES `polestar`.`Units` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-01-24 10:52:27
