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
-- Table structure for table `SeedSearch`
--

DROP TABLE IF EXISTS `SeedSearch`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `SeedSearch` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `searched` datetime NOT NULL,
  `variety` int(11) NOT NULL,
  `search_1` int(11) NOT NULL,
  `search_2` int(11) NOT NULL,
  `search_3` int(11) NOT NULL,
  `source` int(11) NOT NULL,
  `nonGMO` tinyint(4) NOT NULL,
  `nonTreated` tinyint(4) NOT NULL,
  `whyNonOrganic` text NOT NULL,
  `reciept` tinyint(4) NOT NULL,
  `updated` datetime DEFAULT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `fk_SeedSearch_Variety_idx` (`variety`),
  KEY `fk_SeedSearch_Search_1_idx` (`search_1`),
  KEY `fk_SeedSearch_Search_2_idx` (`search_2`),
  KEY `fk_SeedSearch_Search_3_idx` (`search_3`),
  KEY `fk_SeedSearch_Source_idx` (`source`),
  CONSTRAINT `fk_SeedSearch_Search_1` FOREIGN KEY (`search_1`) REFERENCES `polestar`.`SeedSource` (`id`) ON UPDATE CASCADE,
  CONSTRAINT `fk_SeedSearch_Search_2` FOREIGN KEY (`search_2`) REFERENCES `polestar`.`SeedSource` (`id`) ON UPDATE CASCADE,
  CONSTRAINT `fk_SeedSearch_Search_3` FOREIGN KEY (`search_3`) REFERENCES `polestar`.`SeedSource` (`id`) ON UPDATE CASCADE,
  CONSTRAINT `fk_SeedSearch_Source` FOREIGN KEY (`source`) REFERENCES `polestar`.`SeedSource` (`id`) ON UPDATE CASCADE,
  CONSTRAINT `fk_SeedSearch_Variety` FOREIGN KEY (`variety`) REFERENCES `polestar`.`Variety` (`id`) ON UPDATE CASCADE
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
