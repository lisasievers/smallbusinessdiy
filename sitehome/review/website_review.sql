-- MySQL dump 10.13  Distrib 5.1.73, for debian-linux-gnu (i486)
--
-- Host: localhost    Database: website_review
-- ------------------------------------------------------
-- Server version	5.1.73-0ubuntu0.10.04.1

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
-- Table structure for table `ca_cloud`
--

DROP TABLE IF EXISTS `ca_cloud`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ca_cloud` (
  `wid` int(10) unsigned NOT NULL,
  `words` text NOT NULL,
  `matrix` text NOT NULL,
  PRIMARY KEY (`wid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ca_cloud`
--

LOCK TABLES `ca_cloud` WRITE;
/*!40000 ALTER TABLE `ca_cloud` DISABLE KEYS */;
/*!40000 ALTER TABLE `ca_cloud` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ca_content`
--

DROP TABLE IF EXISTS `ca_content`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ca_content` (
  `wid` int(10) unsigned NOT NULL,
  `headings` text NOT NULL,
  `total_img` smallint(5) unsigned NOT NULL,
  `total_alt` smallint(5) unsigned NOT NULL,
  `deprecated` text NOT NULL,
  `isset_headings` tinyint(4) NOT NULL,
  PRIMARY KEY (`wid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ca_content`
--

LOCK TABLES `ca_content` WRITE;
/*!40000 ALTER TABLE `ca_content` DISABLE KEYS */;
/*!40000 ALTER TABLE `ca_content` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ca_document`
--

DROP TABLE IF EXISTS `ca_document`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ca_document` (
  `wid` int(10) unsigned NOT NULL,
  `doctype` varchar(100) DEFAULT NULL,
  `lang` varchar(2) DEFAULT NULL,
  `charset` varchar(20) DEFAULT NULL,
  `css` tinyint(3) unsigned NOT NULL,
  `js` tinyint(3) unsigned NOT NULL,
  `htmlratio` tinyint(3) unsigned NOT NULL,
  `favicon` varchar(120) DEFAULT NULL,
  PRIMARY KEY (`wid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ca_document`
--

LOCK TABLES `ca_document` WRITE;
/*!40000 ALTER TABLE `ca_document` DISABLE KEYS */;
/*!40000 ALTER TABLE `ca_document` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ca_issetobject`
--

DROP TABLE IF EXISTS `ca_issetobject`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ca_issetobject` (
 `wid` int(10) unsigned NOT NULL,
 `flash` tinyint(1) DEFAULT NULL,
 `iframe` tinyint(1) DEFAULT NULL,
 `nestedtables` tinyint(1) DEFAULT NULL,
 `inlinecss` tinyint(1) DEFAULT NULL,
 `email` tinyint(1) DEFAULT NULL,
 `viewport` tinyint(1) DEFAULT NULL,
 `dublincore` tinyint(1) DEFAULT NULL,
 `printable` tinyint(1) DEFAULT NULL,
 `appleicons` tinyint(1) DEFAULT NULL,
 `robotstxt` tinyint(1) DEFAULT NULL,
 `gzip` tinyint(1) DEFAULT NULL,
 PRIMARY KEY (`wid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ca_issetobject`
--

LOCK TABLES `ca_issetobject` WRITE;
/*!40000 ALTER TABLE `ca_issetobject` DISABLE KEYS */;
/*!40000 ALTER TABLE `ca_issetobject` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ca_links`
--


DROP TABLE IF EXISTS `ca_links`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ca_links` (
  `wid` int(10) unsigned NOT NULL,
  `links` mediumblob NOT NULL,
  `internal` smallint(5) unsigned NOT NULL,
  `external_dofollow` smallint(5) unsigned NOT NULL,
  `external_nofollow` smallint(5) unsigned NOT NULL,
  `isset_underscore` tinyint(1) NOT NULL,
  `files_count` smallint(5) unsigned NOT NULL,
  `friendly` tinyint(1) NOT NULL,
  PRIMARY KEY (`wid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ca_links`
--

LOCK TABLES `ca_links` WRITE;
/*!40000 ALTER TABLE `ca_links` DISABLE KEYS */;
/*!40000 ALTER TABLE `ca_links` ENABLE KEYS */;
UNLOCK TABLES;


--
-- Table structure for table `ca_misc`
--

DROP TABLE IF EXISTS `ca_misc`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;

CREATE TABLE `ca_misc` (
 `wid` int(10) unsigned NOT NULL,
 `sitemap` text NOT NULL,
 `analytics` text NOT NULL,
 PRIMARY KEY (`wid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ca_misc`
--

LOCK TABLES `ca_misc` WRITE;
/*!40000 ALTER TABLE `ca_misc` DISABLE KEYS */;
/*!40000 ALTER TABLE `ca_misc` ENABLE KEYS */;
UNLOCK TABLES;


--
-- Table structure for table `ca_pagespeed`
--

DROP TABLE IF EXISTS `ca_pagespeed`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;

CREATE TABLE `ca_pagespeed` (
`wid` int(10) unsigned NOT NULL,
`data` longtext NOT NULL,
`lang_id` varchar(5) NOT NULL,
PRIMARY KEY (`wid`,`lang_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ca_pagespeed`
--

LOCK TABLES `ca_pagespeed` WRITE;
/*!40000 ALTER TABLE `ca_pagespeed` DISABLE KEYS */;
/*!40000 ALTER TABLE `ca_pagespeed` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ca_metatags`
--

DROP TABLE IF EXISTS `ca_metatags`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ca_metatags` (
  `wid` int(10) unsigned NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `keyword` varchar(200) DEFAULT NULL,
  `description` varchar(1000) DEFAULT NULL,
  `ogproperties` text,
  PRIMARY KEY (`wid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ca_metatags`
--

LOCK TABLES `ca_metatags` WRITE;
/*!40000 ALTER TABLE `ca_metatags` DISABLE KEYS */;
/*!40000 ALTER TABLE `ca_metatags` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ca_w3c`
--

DROP TABLE IF EXISTS `ca_w3c`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ca_w3c` (
  `wid` int(10) unsigned NOT NULL,
  `validator` enum('html') NOT NULL,
  `valid` tinyint(1) NOT NULL,
  `errors` smallint(5) unsigned NOT NULL,
  `warnings` smallint(5) unsigned NOT NULL,
  PRIMARY KEY (`wid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ca_w3c`
--

LOCK TABLES `ca_w3c` WRITE;
/*!40000 ALTER TABLE `ca_w3c` DISABLE KEYS */;
/*!40000 ALTER TABLE `ca_w3c` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ca_website`
--

DROP TABLE IF EXISTS `ca_website`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ca_website` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `domain` varchar(90) DEFAULT NULL,
  `idn` varchar(255) DEFAULT NULL,
  `md5domain` varchar(32) DEFAULT NULL,
  `added` timestamp NULL DEFAULT NULL,
  `modified` timestamp NULL DEFAULT NULL,
  `score` tinyint(3) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `ix_md5domain` (`md5domain`),
  KEY `ix_rating` (`score`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ca_website`
--

LOCK TABLES `ca_website` WRITE;
/*!40000 ALTER TABLE `ca_website` DISABLE KEYS */;
/*!40000 ALTER TABLE `ca_website` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-08-14  9:22:07