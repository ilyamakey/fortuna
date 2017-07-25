-- MySQL dump 10.13  Distrib 5.7.17, for Linux (x86_64)
--
-- Host: 127.0.0.1    Database: fortuna
-- ------------------------------------------------------
-- Server version	5.7.19-0ubuntu0.16.04.1

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
-- Table structure for table `machines`
--

DROP TABLE IF EXISTS `machines`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `machines` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `coiling way` varchar(10) NOT NULL DEFAULT 'cold',
  `spring type` varchar(20) NOT NULL,
  `model` varchar(30) NOT NULL,
  `wire 800 min` float NOT NULL COMMENT '\n',
  `wire 800 max` int(10) NOT NULL,
  `wire 1300 min` float NOT NULL COMMENT '\n\n',
  `wire 1300 max` int(10) NOT NULL,
  `wire 1900 min` float DEFAULT NULL,
  `wire 1900 max` int(10) DEFAULT NULL,
  `spring od min` int(10) NOT NULL,
  `spring od max` int(10) NOT NULL,
  `productivity` int(10) NOT NULL,
  `trimming machine` varchar(20) NOT NULL,
  `looping machine` varchar(20) NOT NULL,
  `power reel` varchar(50) NOT NULL,
  `mode` varchar(20) DEFAULT NULL,
  `description` varchar(2000) DEFAULT 'No description available',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `machines`
--

LOCK TABLES `machines` WRITE;
/*!40000 ALTER TABLE `machines` DISABLE KEYS */;
INSERT INTO `machines` VALUES (1,'cold','tension','WIM-4',0.8,6,0.8,4,NULL,NULL,8,80,6,'CMH-5','OBW-2/OBW-4','HMV-50/HMV-100/HMV-200',NULL,'some sort of description goes here'),(2,'cold','tension','WIM-8',4,8,0.8,20,NULL,NULL,16,130,6,'CMH-8','OBW-6/OBW-8','HMV-200/HMV-350/HMV-600',NULL,'No description available');
/*!40000 ALTER TABLE `machines` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-07-25 21:36:35
