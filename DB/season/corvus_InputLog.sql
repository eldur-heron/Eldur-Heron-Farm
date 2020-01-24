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
-- Table structure for table `InputLog`
--

DROP TABLE IF EXISTS `InputLog`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `InputLog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `applied` datetime NOT NULL,
  `input` int(11) NOT NULL,
  `amount` decimal(5,2) NOT NULL,
  `units` int(11) NOT NULL,
  `method` int(11) NOT NULL,
  `area` int(11) NOT NULL,
  `listed` tinyint(4) NOT NULL,
  `reciept` tinyint(4) NOT NULL,
  `updated` datetime DEFAULT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `fk_InputLog_InputMat_idx` (`input`),
  KEY `fk_InputLog_Units_idx` (`units`),
  KEY `fk_InputLog_Method_idx` (`method`),
  KEY `fk_InputLog_Area_idx` (`area`),
  CONSTRAINT `fk_InputLog_Area` FOREIGN KEY (`area`) REFERENCES `Location` (`id`) ON UPDATE CASCADE,
  CONSTRAINT `fk_InputLog_InputMat` FOREIGN KEY (`input`) REFERENCES `polestar`.`InputMaterial` (`id`) ON UPDATE CASCADE,
  CONSTRAINT `fk_InputLog_Method` FOREIGN KEY (`method`) REFERENCES `polestar`.`ApplicationMethod` (`id`) ON UPDATE CASCADE,
  CONSTRAINT `fk_InputLog_Units` FOREIGN KEY (`units`) REFERENCES `polestar`.`Units` (`id`) ON UPDATE CASCADE
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
