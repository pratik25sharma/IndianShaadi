-- MySQL dump 10.13  Distrib 5.7.28, for macos10.14 (x86_64)
--
-- Host: localhost    Database: rishtey
-- ------------------------------------------------------
-- Server version	5.7.28

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
-- Table structure for table `admin_user`
--

DROP TABLE IF EXISTS `admin_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin_user` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin_user`
--

LOCK TABLES `admin_user` WRITE;
/*!40000 ALTER TABLE `admin_user` DISABLE KEYS */;
INSERT INTO `admin_user` VALUES (1,'admin@admin.com','dc3c29850776b509861e6279882bf18cc4522b0c359ca6ade78b3f02',1,'2020-05-08 07:10:58');
/*!40000 ALTER TABLE `admin_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `banner`
--

DROP TABLE IF EXISTS `banner`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `banner` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `banner_header` text NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `banner`
--

LOCK TABLES `banner` WRITE;
/*!40000 ALTER TABLE `banner` DISABLE KEYS */;
INSERT INTO `banner` VALUES (1,'Get 21 Contacts Free On Being A New Member',1,'2020-05-03 10:59:29'),(2,'Get 7 Contacts Free On Liking Our Facebook Page',1,'2020-05-03 10:59:40'),(3,'Only For Indians',1,'2020-05-03 10:59:47'),(4,'No Mediator',1,'2020-05-03 10:59:59'),(5,'Nominal Package',1,'2020-05-03 11:00:06'),(6,'Start Conversation',1,'2020-05-03 11:00:16'),(7,'Every Profile Is Phone Verified',1,'2020-05-03 11:00:25'),(8,'Niswarth Sewa',1,'2020-05-03 11:00:33');
/*!40000 ALTER TABLE `banner` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `blogs`
--

DROP TABLE IF EXISTS `blogs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `blogs` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `posted_by` int(4) NOT NULL,
  `blog_image` varchar(250) NOT NULL,
  `blog_heading` varchar(250) NOT NULL,
  `blog_text` text NOT NULL,
  `banner_header` text NOT NULL,
  `blog_status` tinyint(4) NOT NULL DEFAULT '0',
  `display_order` int(4) NOT NULL DEFAULT '0',
  `posted_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `blogs`
--

LOCK TABLES `blogs` WRITE;
/*!40000 ALTER TABLE `blogs` DISABLE KEYS */;
INSERT INTO `blogs` VALUES (19,1234,'1588870933-1234.jpg','Second Post','<p>Scond Post</p>','Second Post',1,0,'2020-05-07 17:02:41'),(20,1234,'1588880932-1234.jpg','luckyPost','<p>This is the first post i am writing</p>','luckyPost',1,0,'2020-05-07 19:49:10'),(21,1234,'1588883324-1234.jpg','first post','<p>lkasdflaksjfaksdfksldfaksf</p>','first post',1,0,'2020-05-08 06:33:41'),(24,1234,'1588981275-1234.jpg','First post','<p>Secno</p>','First post',1,0,'2020-05-08 23:41:36'),(25,1234,'1588981357-1234.jpg','thrd','<p>Thr</p>','thrd',1,0,'2020-05-08 23:42:59');
/*!40000 ALTER TABLE `blogs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `imagebanner`
--

DROP TABLE IF EXISTS `imagebanner`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `imagebanner` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `banner_image` varchar(256) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `imagebanner`
--

LOCK TABLES `imagebanner` WRITE;
/*!40000 ALTER TABLE `imagebanner` DISABLE KEYS */;
INSERT INTO `imagebanner` VALUES (2,'1589213686.jpg',1,'2020-05-11 16:14:46'),(3,'1589211835.jpg',1,'2020-05-11 16:16:21');
/*!40000 ALTER TABLE `imagebanner` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `textbanner`
--

DROP TABLE IF EXISTS `textbanner`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `textbanner` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `title` varchar(256) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `textbanner`
--

LOCK TABLES `textbanner` WRITE;
/*!40000 ALTER TABLE `textbanner` DISABLE KEYS */;
INSERT INTO `textbanner` VALUES (1,'Meet Big And Beautiful Love Here !!!','2020-05-11 16:30:49');
/*!40000 ALTER TABLE `textbanner` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-05-11 22:23:11
