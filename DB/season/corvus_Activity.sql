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
-- Table structure for table `Activity`
--

DROP TABLE IF EXISTS `Activity`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Activity` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `farmer` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `location` int(11) NOT NULL,
  `completed` datetime NOT NULL,
  `description` text,
  `extraPeople` int(11) NOT NULL DEFAULT '0',
  `laborMinutes` int(11) NOT NULL,
  `tractor` int(11) NOT NULL,
  `implement` int(11) NOT NULL,
  `equip_1` int(11) NOT NULL,
  `equip_2` int(11) NOT NULL,
  `equip_3` int(11) NOT NULL,
  `equip_4` int(11) NOT NULL,
  `equip_5` int(11) NOT NULL,
  `useMinutes` int(11) NOT NULL,
  `notes` text,
  `updated` datetime DEFAULT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `fk_Activity_Farmer_idx` (`farmer`),
  KEY `fk_Activity_Type_idx` (`type`),
  KEY `fk_Activity_Location_idx` (`location`),
  KEY `fk_Activity_Tractor_idx` (`tractor`),
  KEY `fk_Activity_Implement_idx` (`implement`),
  KEY `fk_Activity_Equip_1_idx` (`equip_1`),
  KEY `fk_Activity_Equip_2_idx` (`equip_2`),
  KEY `fk_Activity_Equip_3_idx` (`equip_3`),
  KEY `fk_Activity_Equip_3_idx1` (`equip_4`),
  KEY `fk_Activity_Equip_5_idx` (`equip_5`),
  CONSTRAINT `fk_Activity_Equip_1` FOREIGN KEY (`equip_1`) REFERENCES `polestar`.`Equipment` (`id`) ON UPDATE CASCADE,
  CONSTRAINT `fk_Activity_Equip_2` FOREIGN KEY (`equip_2`) REFERENCES `polestar`.`Equipment` (`id`) ON UPDATE CASCADE,
  CONSTRAINT `fk_Activity_Equip_3` FOREIGN KEY (`equip_3`) REFERENCES `polestar`.`Equipment` (`id`) ON UPDATE CASCADE,
  CONSTRAINT `fk_Activity_Equip_4` FOREIGN KEY (`equip_4`) REFERENCES `polestar`.`Equipment` (`id`) ON UPDATE CASCADE,
  CONSTRAINT `fk_Activity_Equip_5` FOREIGN KEY (`equip_5`) REFERENCES `polestar`.`Equipment` (`id`) ON UPDATE CASCADE,
  CONSTRAINT `fk_Activity_Farmer` FOREIGN KEY (`farmer`) REFERENCES `polestar`.`Account` (`id`) ON UPDATE CASCADE,
  CONSTRAINT `fk_Activity_Implement` FOREIGN KEY (`implement`) REFERENCES `polestar`.`Equipment` (`id`) ON UPDATE CASCADE,
  CONSTRAINT `fk_Activity_Location` FOREIGN KEY (`location`) REFERENCES `Location` (`id`) ON UPDATE CASCADE,
  CONSTRAINT `fk_Activity_Tractor` FOREIGN KEY (`tractor`) REFERENCES `polestar`.`Equipment` (`id`) ON UPDATE CASCADE,
  CONSTRAINT `fk_Activity_Type` FOREIGN KEY (`type`) REFERENCES `polestar`.`ActivityType` (`id`) ON UPDATE CASCADE
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

-- Dump completed on 2020-01-24 10:52:26
