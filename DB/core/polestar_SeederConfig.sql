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
-- Table structure for table `SeederConfig`
--

DROP TABLE IF EXISTS `SeederConfig`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `SeederConfig` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `label` varchar(100) NOT NULL,
  `abbrv` varchar(5) NOT NULL,
  `description` text,
  `seedSize` int(11) NOT NULL,
  `seedShape` int(11) NOT NULL,
  `plate` int(11) NOT NULL,
  `seeder` int(11) NOT NULL,
  `frontGear` int(11) NOT NULL,
  `rearGear` int(11) NOT NULL,
  `withinRow_cm` double DEFAULT NULL,
  `betweenRow_cm` double DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_SeederConfig_SeedSize_idx` (`seedSize`),
  KEY `fk_SeederConfig_SeedShape_idx` (`seedShape`),
  KEY `fk_SeederConfig_Plate_idx` (`plate`),
  KEY `fk_SeederConfig_Seeder_idx` (`seeder`),
  KEY `fk_SeederConfig_FrontGear_idx` (`frontGear`),
  KEY `fk_SeederConfig_RearGear_idx` (`rearGear`),
  CONSTRAINT `fk_SeederConfig_FrontGear` FOREIGN KEY (`frontGear`) REFERENCES `SeederGears` (`id`) ON UPDATE CASCADE,
  CONSTRAINT `fk_SeederConfig_Plate` FOREIGN KEY (`plate`) REFERENCES `Equipment` (`id`) ON UPDATE CASCADE,
  CONSTRAINT `fk_SeederConfig_RearGear` FOREIGN KEY (`rearGear`) REFERENCES `SeederGears` (`id`) ON UPDATE CASCADE,
  CONSTRAINT `fk_SeederConfig_SeedShape` FOREIGN KEY (`seedShape`) REFERENCES `SeedShape` (`id`) ON UPDATE CASCADE,
  CONSTRAINT `fk_SeederConfig_SeedSize` FOREIGN KEY (`seedSize`) REFERENCES `SeedSize` (`id`) ON UPDATE CASCADE,
  CONSTRAINT `fk_SeederConfig_Seeder` FOREIGN KEY (`seeder`) REFERENCES `Equipment` (`id`) ON UPDATE CASCADE
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

-- Dump completed on 2020-01-24 10:51:44
