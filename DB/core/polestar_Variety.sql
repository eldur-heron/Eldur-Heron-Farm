-- MySQL dump 10.13  Distrib 5.7.28, for Linux (x86_64)
--
-- Host: 127.0.0.1    Database: polestar
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
-- Table structure for table `Variety`
--

DROP TABLE IF EXISTS `Variety`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Variety` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `label` varchar(100) NOT NULL,
  `abbrv` varchar(5) NOT NULL,
  `description` text,
  `crop` int(11) NOT NULL,
  `seedSource` int(11) NOT NULL,
  `organic` tinyint(4) NOT NULL,
  `pollination` int(11) NOT NULL,
  `dtm_min` int(11) DEFAULT NULL,
  `dtm_max` int(11) DEFAULT NULL,
  `noHarvests` int(11) DEFAULT NULL,
  `harvestPeriod_wk` int(11) DEFAULT NULL,
  `yieldPerRowMeter` double DEFAULT NULL,
  `yieldUnits` int(11) NOT NULL,
  `yieldSafetyBuffer` double DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_Variety_Crop_idx` (`crop`),
  KEY `fk_Variety_SeedSource_idx` (`seedSource`),
  KEY `fk_Variety_Pollination_idx` (`pollination`),
  KEY `fk_Variety_YieldUnits_idx` (`yieldUnits`),
  CONSTRAINT `fk_Variety_Crop` FOREIGN KEY (`crop`) REFERENCES `Crop` (`id`) ON UPDATE CASCADE,
  CONSTRAINT `fk_Variety_Pollination` FOREIGN KEY (`pollination`) REFERENCES `Pollination` (`id`) ON UPDATE CASCADE,
  CONSTRAINT `fk_Variety_SeedSource` FOREIGN KEY (`seedSource`) REFERENCES `SeedSource` (`id`) ON UPDATE CASCADE,
  CONSTRAINT `fk_Variety_YieldUnits` FOREIGN KEY (`yieldUnits`) REFERENCES `Units` (`id`) ON UPDATE CASCADE
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

-- Dump completed on 2020-01-24 10:51:43
