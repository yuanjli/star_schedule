-- MySQL dump 10.13  Distrib 5.7.17, for macos10.12 (x86_64)
--
-- Host: localhost    Database: project
-- ------------------------------------------------------
-- Server version	5.7.17

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
-- Current Database: `project`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `project` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `project`;

--
-- Table structure for table `Contact`
--

DROP TABLE IF EXISTS `Contact`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Contact` (
  `Name` varchar(15) NOT NULL,
  `Email` varchar(25) NOT NULL,
  `Message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Contact`
--

LOCK TABLES `Contact` WRITE;
/*!40000 ALTER TABLE `Contact` DISABLE KEYS */;
/*!40000 ALTER TABLE `Contact` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Test`
--

DROP TABLE IF EXISTS `Test`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Test` (
  `fname` varchar(255) DEFAULT NULL,
  `lname` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Test`
--

LOCK TABLES `Test` WRITE;
/*!40000 ALTER TABLE `Test` DISABLE KEYS */;
INSERT INTO `Test` VALUES ('sd','sd');
/*!40000 ALTER TABLE `Test` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `UserTable`
--

DROP TABLE IF EXISTS `UserTable`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `UserTable` (
  `c_id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `street` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `zip` varchar(255) NOT NULL,
  `phno` varchar(255) NOT NULL,
  `cardno` int(11) DEFAULT NULL,
  `exp_date` varchar(255) DEFAULT NULL,
  `name_card` varchar(255) DEFAULT NULL,
  `cvv` tinyint(4) DEFAULT NULL,
  `card_type` varchar(255) DEFAULT NULL,
  `passwd` varchar(255) NOT NULL,
  PRIMARY KEY (`c_id`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `cardno_2` (`cardno`),
  UNIQUE KEY `cardno_3` (`cardno`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `UserTable`
--

LOCK TABLES `UserTable` WRITE;
/*!40000 ALTER TABLE `UserTable` DISABLE KEYS */;
INSERT INTO `UserTable` VALUES (12,'Jerrin','Sures','jerrinsuresh@gml.com','asdas','bloomignton','234324','34324',NULL,NULL,NULL,NULL,NULL,'test123'),(13,'mitali','paygude','mitali@paygude.com','qwewqe','sdfas','23432','234',NULL,NULL,NULL,NULL,NULL,'test123'),(14,'Test123','Test123','test123@gmail.com','werew','werw','3432','32424',NULL,NULL,NULL,NULL,NULL,'test123'),(15,'test1234','test','test@gmail.com','sjhv','dnsbh','3276','2387649234',NULL,NULL,NULL,NULL,NULL,'test123');
/*!40000 ALTER TABLE `UserTable` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `drivers`
--

DROP TABLE IF EXISTS `drivers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `drivers` (
  `d_id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `exp` int(11) DEFAULT NULL,
  `rating` float DEFAULT NULL,
  PRIMARY KEY (`d_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `drivers`
--

LOCK TABLES `drivers` WRITE;
/*!40000 ALTER TABLE `drivers` DISABLE KEYS */;
INSERT INTO `drivers` VALUES (1,'Jessica Wally',55,15,3.5),(2,'Mike Sloan',35,7,4.6),(3,'Michele Doe',40,10,4.1),(4,'Linda Evans',42,11,3.4),(5,'Mario Puzo',34,12,4.8),(6,'John Smith',38,6,3),(7,'Kelly Matthews',42,4,4),(8,'Michael Crichton',52,20,4.3),(9,'Tom Hiddleston',27,3,3.5),(10,'Marilyn Monroe',21,1,2.9),(11,'Leo Mathew',23,1,2),(12,'John Deree',24,1,3);
/*!40000 ALTER TABLE `drivers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `transactions`
--

DROP TABLE IF EXISTS `transactions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `transactions` (
  `t_id` int(11) NOT NULL AUTO_INCREMENT,
  `c_id` int(11) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `total_amnt` float DEFAULT NULL,
  `d_id` int(11) DEFAULT NULL,
  `v_type` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`t_id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `transactions`
--

LOCK TABLES `transactions` WRITE;
/*!40000 ALTER TABLE `transactions` DISABLE KEYS */;
INSERT INTO `transactions` VALUES (1,1,'2017-03-03','2017-03-05',2000,5,'dlx_coach'),(2,2,'2017-03-03','2017-03-05',2000,1,'dlx_coach'),(3,3,'2017-03-03','2017-03-06',1000,2,'dlx_coach'),(4,4,'2017-03-03','2017-03-05',1000,1,'dlx_coach'),(5,5,'2017-03-07','2017-03-08',10000,2,'dlx_coach'),(6,5,'2017-03-01','2017-03-08',3000,1,'dlx_coach'),(13,13,'2017-04-03','2017-04-26',18000,0,'dlx_lux'),(14,13,'2017-04-04','2017-04-27',24000,0,'dlx_coach'),(15,13,'2017-04-04','2017-04-27',24000,0,'dlx_coach'),(16,14,'2017-04-25','2017-04-26',600,9,'school_bus');
/*!40000 ALTER TABLE `transactions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `vehicles`
--

DROP TABLE IF EXISTS `vehicles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `vehicles` (
  `v_id` int(11) NOT NULL,
  `pp_day` float DEFAULT NULL,
  `model_no` varchar(255) NOT NULL,
  `seats` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`v_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `vehicles`
--

LOCK TABLES `vehicles` WRITE;
/*!40000 ALTER TABLE `vehicles` DISABLE KEYS */;
INSERT INTO `vehicles` VALUES (1,1000,'dlx_coach',56),(2,1000,'dlx_coach',56),(3,1000,'dlx_coach',56),(4,1000,'dlx_coach',56),(5,750,'dlx_lux',48),(6,750,'dlx_lux',48),(7,750,'dlx_lux',48),(8,750,'dlx_lux',48),(9,500,'mega_bus',52),(10,500,'mega_bus',52),(11,500,'mega_bus',52),(12,500,'mega_bus',52),(15,300,'mini_bus',28),(16,300,'mini_bus',28),(17,300,'mini_bus',28),(18,300,'mini_bus',28),(19,200,'school_bus',32),(20,200,'school_bus',32),(21,200,'school_bus',32),(23,200,'school_bus',32),(24,250,'party_bus',32),(25,250,'party_bus',32),(26,250,'party_bus',32),(27,250,'party_bus',32),(28,300,'sprinter',16),(29,300,'sprinter',16),(30,300,'sprinter',16),(31,300,'sprinter',16),(32,100,'ford_transit',11),(33,100,'ford_transit',11),(34,100,'ford_transit',11),(35,100,'ford_transit',11);
/*!40000 ALTER TABLE `vehicles` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-04-25 15:52:07
