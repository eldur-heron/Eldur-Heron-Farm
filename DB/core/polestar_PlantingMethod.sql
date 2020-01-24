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
-- Table structure for table `PlantingMethod`
--

DROP TABLE IF EXISTS `PlantingMethod`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `PlantingMethod` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `label` varchar(100) NOT NULL,
  `abbrv` varchar(5) NOT NULL,
  `description` text,
  `seederConfig` int(11) NOT NULL,
  `soilBlock_gs` int(11) NOT NULL,
  `blocksPerTray_gs` int(11) DEFAULT NULL,
  `traysPerShelf` int(11) DEFAULT NULL,
  `soilBlock_gh` int(11) NOT NULL,
  `blocksPerTray_gh` int(11) DEFAULT NULL,
  `traysPerTable` int(11) DEFAULT NULL,
  `transplantTool` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_PlantingMethod_SeederConfig_idx` (`seederConfig`),
  KEY `fk_PlantingMethod_SoilBlock_gh_idx` (`soilBlock_gh`),
  KEY `fk_PlantingMethod_SoilBlock_gs_idx` (`soilBlock_gs`),
  KEY `fk_PlantingMethod_TpTool_idx` (`transplantTool`),
  CONSTRAINT `fk_PlantingMethod_SeederConfig` FOREIGN KEY (`seederConfig`) REFERENCES `SeederConfig` (`id`) ON UPDATE CASCADE,
  CONSTRAINT `fk_PlantingMethod_SoilBlock_gh` FOREIGN KEY (`soilBlock_gh`) REFERENCES `Equipment` (`id`) ON UPDATE CASCADE,
  CONSTRAINT `fk_PlantingMethod_SoilBlock_gs` FOREIGN KEY (`soilBlock_gs`) REFERENCES `Equipment` (`id`) ON UPDATE CASCADE,
  CONSTRAINT `fk_PlantingMethod_TpTool` FOREIGN KEY (`transplantTool`) REFERENCES `Equipment` (`id`) ON UPDATE CASCADE
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