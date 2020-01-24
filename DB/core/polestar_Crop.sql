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
-- Table structure for table `Crop`
--

DROP TABLE IF EXISTS `Crop`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Crop` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `label` varchar(100) NOT NULL,
  `abbrv` varchar(5) NOT NULL,
  `rotation` int(11) NOT NULL,
  `growthHabit` int(11) NOT NULL,
  `support` int(11) NOT NULL,
  `earthCover` int(11) NOT NULL,
  `airCover` int(11) NOT NULL,
  `plantingMethod` int(11) NOT NULL,
  `minSeedsPerGram` int(11) DEFAULT NULL,
  `maxSeedsPerGram` int(11) DEFAULT NULL,
  `minSoilTemp_C` double DEFAULT NULL,
  `optSoilTemp_C` double DEFAULT NULL,
  `maxSoilTemp_C` double DEFAULT NULL,
  `dtg_min` int(11) DEFAULT NULL,
  `dtg_max` int(11) DEFAULT NULL,
  `dtt_min` int(11) DEFAULT NULL,
  `dtt_max` int(11) DEFAULT NULL,
  `withinRow_cm` int(11) DEFAULT NULL,
  `betweenRow_cm` int(11) DEFAULT NULL,
  `sowingDepth_mm` int(11) DEFAULT NULL,
  `noRowsPerBed` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_Crop_Rotation_idx` (`rotation`),
  KEY `fk_Crop_GrowthHabit_idx` (`growthHabit`),
  KEY `fk_Crop_EarthCover_idx` (`earthCover`),
  KEY `fk_Crop_AirCover_idx` (`airCover`),
  KEY `fk_Crop_Supports_idx` (`support`),
  KEY `fk_Crop_PlantingMethod_idx` (`plantingMethod`),
  CONSTRAINT `fk_Crop_AirCover` FOREIGN KEY (`airCover`) REFERENCES `Covers` (`id`) ON UPDATE CASCADE,
  CONSTRAINT `fk_Crop_EarthCover` FOREIGN KEY (`earthCover`) REFERENCES `Covers` (`id`) ON UPDATE CASCADE,
  CONSTRAINT `fk_Crop_GrowthHabit` FOREIGN KEY (`growthHabit`) REFERENCES `GrowthHabit` (`id`) ON UPDATE CASCADE,
  CONSTRAINT `fk_Crop_PlantingMethod` FOREIGN KEY (`plantingMethod`) REFERENCES `PlantingMethod` (`id`) ON UPDATE CASCADE,
  CONSTRAINT `fk_Crop_Rotation` FOREIGN KEY (`rotation`) REFERENCES `Rotation` (`id`) ON UPDATE CASCADE,
  CONSTRAINT `fk_Crop_Supports` FOREIGN KEY (`support`) REFERENCES `Supports` (`id`) ON UPDATE CASCADE
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
