CREATE DATABASE  IF NOT EXISTS `corvus` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `corvus`;
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

--
-- Table structure for table `Bed`
--

DROP TABLE IF EXISTS `Bed`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Bed` (
  `id` int(11) NOT NULL,
  `label` varchar(45) NOT NULL,
  `field` int(11) NOT NULL,
  `earthCover` int(11) NOT NULL,
  `length_m` int(11) DEFAULT NULL,
  `width_cm` int(11) DEFAULT NULL,
  `noDripLines` int(11) DEFAULT NULL,
  `emmiterSpacing_mm` int(11) DEFAULT NULL,
  `emitterDripRate_gph` decimal(3,2) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_Bed_Field_idx` (`field`),
  KEY `fk_Bed_EarthCover_idx` (`earthCover`),
  CONSTRAINT `fk_Bed_EarthCover` FOREIGN KEY (`earthCover`) REFERENCES `polestar`.`Covers` (`id`) ON UPDATE CASCADE,
  CONSTRAINT `fk_Bed_Field` FOREIGN KEY (`field`) REFERENCES `polestar`.`Field` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

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

--
-- Table structure for table `IrrigationSchedule`
--

DROP TABLE IF EXISTS `IrrigationSchedule`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `IrrigationSchedule` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `label` varchar(45) NOT NULL,
  `zone` int(11) NOT NULL,
  `active` tinyint(4) NOT NULL DEFAULT '0',
  `peakFlow_gpm` decimal(4,2) NOT NULL,
  `start` varchar(4) NOT NULL,
  `minutes` int(11) NOT NULL,
  `Mo` tinyint(4) NOT NULL DEFAULT '0',
  `Tu` tinyint(4) NOT NULL DEFAULT '0',
  `We` tinyint(4) NOT NULL DEFAULT '0',
  `Th` tinyint(4) NOT NULL DEFAULT '0',
  `Fr` tinyint(4) NOT NULL DEFAULT '0',
  `Sa` tinyint(4) NOT NULL DEFAULT '0',
  `Su` tinyint(4) NOT NULL DEFAULT '0',
  `updated` datetime DEFAULT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `fk_IrrigationSchedule_Zone_idx` (`zone`),
  CONSTRAINT `fk_IrrigationSchedule_Zone` FOREIGN KEY (`zone`) REFERENCES `Zone` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `Location`
--

DROP TABLE IF EXISTS `Location`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Location` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bed` int(11) NOT NULL,
  `startMeter` decimal(4,1) NOT NULL,
  `stopMeter` decimal(4,1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_Location_Bed_idx` (`bed`),
  CONSTRAINT `fk_Location_Bed` FOREIGN KEY (`bed`) REFERENCES `Bed` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `PestObservation`
--

DROP TABLE IF EXISTS `PestObservation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `PestObservation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `observed` datetime NOT NULL,
  `observation` text NOT NULL,
  `managementPlan` text NOT NULL,
  `followedUp` datetime DEFAULT NULL,
  `followUpNotes` text,
  `location` int(11) NOT NULL,
  `variety` int(11) NOT NULL,
  `notes` text,
  `updated` datetime DEFAULT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `fk_PestObservation_variety_idx` (`variety`),
  KEY `fk_PestObservation_Location_idx` (`location`),
  CONSTRAINT `fk_PestObservation_Location` FOREIGN KEY (`location`) REFERENCES `Location` (`id`) ON UPDATE CASCADE,
  CONSTRAINT `fk_PestObservation_variety` FOREIGN KEY (`variety`) REFERENCES `polestar`.`Variety` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `PlannedMap`
--

DROP TABLE IF EXISTS `PlannedMap`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `PlannedMap` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `variety` int(11) NOT NULL,
  `location` int(11) NOT NULL,
  `startDate` date NOT NULL,
  `endDate` date NOT NULL,
  `updated` datetime DEFAULT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `fk_PlannedMap_Variety_idx` (`variety`),
  KEY `fk_PlannedMap_Location_idx` (`location`),
  CONSTRAINT `fk_PlannedMap_Location` FOREIGN KEY (`location`) REFERENCES `Location` (`id`) ON UPDATE CASCADE,
  CONSTRAINT `fk_PlannedMap_Variety` FOREIGN KEY (`variety`) REFERENCES `polestar`.`Variety` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `Planting`
--

DROP TABLE IF EXISTS `Planting`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Planting` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `planted` datetime NOT NULL,
  `variety` int(11) NOT NULL,
  `method` int(11) NOT NULL,
  `location` int(11) NOT NULL,
  `withinRow_cm` decimal(4,2) NOT NULL,
  `betweenRow_cm` decimal(4,2) NOT NULL,
  `sowingDepth_mm` decimal(3,1) NOT NULL,
  `rowsPerBed` int(11) NOT NULL,
  `totalRowMetersSown` int(11) NOT NULL,
  `laborMinutes` int(11) NOT NULL,
  `emerged` date DEFAULT NULL,
  `initialCount` int(11) DEFAULT NULL,
  `finalCount` int(11) DEFAULT NULL,
  `firstHarvest` date DEFAULT NULL,
  `lastHarvest` date DEFAULT NULL,
  `noHarvests` int(11) DEFAULT NULL,
  `seasonYield` decimal(5,2) DEFAULT NULL,
  `units` int(11) NOT NULL,
  `notes` text,
  `updated` datetime DEFAULT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `fk_Planting_Variety_idx` (`variety`),
  KEY `fk_Planting_Method_idx` (`method`),
  KEY `fk_Planting_Location_idx` (`location`),
  CONSTRAINT `fk_Planting_Location` FOREIGN KEY (`location`) REFERENCES `Location` (`id`) ON UPDATE CASCADE,
  CONSTRAINT `fk_Planting_Method` FOREIGN KEY (`method`) REFERENCES `polestar`.`PlantingMethod` (`id`) ON UPDATE CASCADE,
  CONSTRAINT `fk_Planting_Variety` FOREIGN KEY (`variety`) REFERENCES `polestar`.`Variety` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `Product`
--

DROP TABLE IF EXISTS `Product`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Product` (
  `id` int(11) NOT NULL,
  `label` varchar(100) DEFAULT NULL,
  `description` text,
  `SKU` varchar(40) DEFAULT NULL,
  `productType` int(11) DEFAULT NULL,
  `variety` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_Product_ProductType_idx` (`productType`),
  KEY `fk_Product_Variety_idx` (`variety`),
  CONSTRAINT `fk_Product_ProductType` FOREIGN KEY (`productType`) REFERENCES `polestar`.`ProductType` (`id`) ON UPDATE CASCADE,
  CONSTRAINT `fk_Product_Variety` FOREIGN KEY (`variety`) REFERENCES `polestar`.`Variety` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `RecordedMap`
--

DROP TABLE IF EXISTS `RecordedMap`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `RecordedMap` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `variety` int(11) NOT NULL,
  `location` int(11) NOT NULL,
  `startDate` date NOT NULL,
  `endDate` date NOT NULL,
  `updated` datetime DEFAULT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `fk_RecordedMap_Variety_idx` (`variety`),
  KEY `fk_RecordedMap_Location_idx` (`location`),
  CONSTRAINT `fk_RecordedMap_Location` FOREIGN KEY (`location`) REFERENCES `Location` (`id`) ON UPDATE CASCADE,
  CONSTRAINT `fk_RecordedMap_Variety` FOREIGN KEY (`variety`) REFERENCES `polestar`.`Variety` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `Sale`
--

DROP TABLE IF EXISTS `Sale`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Sale` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sold` datetime NOT NULL,
  `traceabilityCode` varchar(10) NOT NULL,
  `purchaseOrder` int(11) NOT NULL,
  `invoice` int(11) NOT NULL,
  `customer` int(11) NOT NULL,
  `product` int(11) NOT NULL,
  `quantity` decimal(5,2) NOT NULL,
  `units` int(11) NOT NULL,
  `rate` decimal(5,2) NOT NULL,
  `subtotal` decimal(5,2) NOT NULL,
  `recieved` datetime NOT NULL,
  `check` int(11) DEFAULT NULL,
  `notes` text,
  `updated` datetime DEFAULT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_Sale_Customer_idx` (`customer`),
  KEY `fk_Sale_Product_idx` (`product`),
  KEY `fk_Sale_Units_idx` (`units`),
  CONSTRAINT `fk_Sale_Customer` FOREIGN KEY (`customer`) REFERENCES `polestar`.`Account` (`id`) ON UPDATE CASCADE,
  CONSTRAINT `fk_Sale_Product` FOREIGN KEY (`product`) REFERENCES `Product` (`id`) ON UPDATE CASCADE,
  CONSTRAINT `fk_Sale_Units` FOREIGN KEY (`units`) REFERENCES `polestar`.`Units` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

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

--
-- Table structure for table `Zone`
--

DROP TABLE IF EXISTS `Zone`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Zone` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bed_1` int(11) NOT NULL,
  `bed_2` int(11) NOT NULL,
  `bed_3` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_Zone_Bed_1_idx` (`bed_1`),
  KEY `fk_Zone_Bed_2_idx` (`bed_2`),
  KEY `fk_Zone_Bed_3_idx` (`bed_3`),
  CONSTRAINT `fk_Zone_Bed_1` FOREIGN KEY (`bed_1`) REFERENCES `Bed` (`id`) ON UPDATE CASCADE,
  CONSTRAINT `fk_Zone_Bed_2` FOREIGN KEY (`bed_2`) REFERENCES `Bed` (`id`) ON UPDATE CASCADE,
  CONSTRAINT `fk_Zone_Bed_3` FOREIGN KEY (`bed_3`) REFERENCES `Bed` (`id`) ON UPDATE CASCADE
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

-- Dump completed on 2020-01-24 11:06:07
