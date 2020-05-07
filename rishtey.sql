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
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `blogs`
--

LOCK TABLES `blogs` WRITE;
/*!40000 ALTER TABLE `blogs` DISABLE KEYS */;
INSERT INTO `blogs` VALUES (1,1234,'1588777980-1234.jpg','first post','<p><strong>My first post</strong></p>','first post',1,1,'2020-05-06 16:02:23'),(2,1234,'1588778137-1234.jpg','first post','<p><strong>My first post</strong></p>','first post',1,2,'2020-05-06 15:52:12'),(3,1234,'1588781010-1234.jpg','Second Post','<p><strong>Second Post</strong></p>','Second Post',1,0,'2020-05-06 16:03:45'),(4,1234,'1588781036-1234.jpg','Second Post','<p><strong>Second Post</strong></p>','Second Post',1,0,'2020-05-06 16:04:08'),(5,1234,'1588781884-1234.jpg','first post','<p>asdfsdf</p>','first post',0,0,'2020-05-06 16:18:04'),(6,1234,'1588781922-1234.jpg','first post','<p>asdfsdf</p>','first post',0,0,'2020-05-06 16:18:42'),(7,1234,'1588781924-1234.jpg','first post','<p>asdfsdf</p>','first post',0,0,'2020-05-06 16:18:44'),(8,1234,'1588781946-1234.jpg','first post','<p>asdfsdf</p>','first post',0,0,'2020-05-06 16:19:06'),(9,1234,'1588781954-1234.jpg','first post','<p>asdfsdf</p>','first post',0,0,'2020-05-06 16:19:14'),(10,1234,'1588781987-1234.jpg','first post','<p>asdfsdf</p>','first post',0,0,'2020-05-06 16:19:47'),(11,1234,'1588781989-1234.jpg','first post','<p>asdfsdf</p>','first post',0,0,'2020-05-06 16:19:49'),(12,1234,'1588782046-1234.jpg','first post','<p>asdfsdf</p>','first post',0,0,'2020-05-06 16:20:46'),(13,1234,'1588782084-1234.jpg','first post','<p>asdfsdf</p>','first post',0,0,'2020-05-06 16:21:24'),(14,1234,'1588782096-1234.jpg','first post','<p>asdfsdf</p>','first post',0,0,'2020-05-06 16:21:36'),(15,1234,'1588782142-1234.jpg','first post','<p>asdfsdf</p>','first post',0,0,'2020-05-06 16:22:22'),(16,1234,'1588782148-1234.jpg','first post','<p>asdfsdf</p>','first post',0,0,'2020-05-06 16:22:28'),(17,1234,'1588835457-1234.jpg','first post','<p>asdfsdf</p>','first post',0,0,'2020-05-07 07:10:57');
/*!40000 ALTER TABLE `blogs` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-05-07 19:43:32
