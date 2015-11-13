-- MySQL dump 10.13  Distrib 5.6.24, for osx10.8 (x86_64)
--
-- Host: 127.0.0.1    Database: travelp
-- ------------------------------------------------------
-- Server version	5.5.42

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
-- Table structure for table `trips`
--

DROP TABLE IF EXISTS `trips`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `trips` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `place` varchar(45) DEFAULT NULL,
  `description` varchar(99) DEFAULT NULL,
  `d_from` varchar(45) DEFAULT NULL,
  `d_to` varchar(45) DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `trips`
--

LOCK TABLES `trips` WRITE;
/*!40000 ALTER TABLE `trips` DISABLE KEYS */;
INSERT INTO `trips` VALUES (1,'Austin TX','Go to the LBJ library and the texas capitol','2016-04-15','2016-04-18',2,'2015-11-10 14:26:47','2015-11-10 14:26:47'),(2,'New Mexico','Sky diving and  bungee jumping off a cliff and zombies','2017-03-29','2017-03-31',3,'2015-11-10 14:40:39','2015-11-10 14:40:39'),(3,'Moscow','Assasination of high value foreign diplomat who supports terrorism','2016-09-29','2016-09-29',4,'2015-11-10 14:54:57','2015-11-10 14:54:57'),(4,'Sesame Street','A place to sing songs and count numbers','2016-08-24','2016-08-27',5,'2015-11-10 15:36:22','2015-11-10 15:36:22'),(5,'Phillipines','Go to that one Volcano Island with a Volcano on it','2018-06-29','2018-07-25',6,'2015-11-10 16:15:32','2015-11-10 16:15:32'),(6,'New York','Going to a broadway show','2015-11-29','2015-11-30',7,'2015-11-10 16:48:10','2015-11-10 16:48:10'),(7,'The Haunted Forest','Going to catch spiders and bugs','2018-09-26','2018-09-30',8,'2015-11-10 16:56:01','2015-11-10 16:56:01');
/*!40000 ALTER TABLE `trips` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `username` varchar(45) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Geraldo','Gdigs','password','2015-11-10 13:07:41','2015-11-10 13:07:41'),(2,'Mary','MarW','password','2015-11-10 14:24:47','2015-11-10 14:24:47'),(3,'Peter','petey','password','2015-11-10 14:39:52','2015-11-10 14:39:52'),(4,'James Bond','jbond','password','2015-11-10 14:52:10','2015-11-10 14:52:10'),(5,'Big Bird','bbird','password','2015-11-10 15:34:40','2015-11-10 15:34:40'),(6,'Paul Jumbotron','pjumbo','password','2015-11-10 15:55:19','2015-11-10 15:55:19'),(7,'Mark','markymark','password','2015-11-10 16:47:26','2015-11-10 16:47:26'),(8,'Voldemort','vdizzle','password','2015-11-10 16:54:58','2015-11-10 16:54:58');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `vacation`
--

DROP TABLE IF EXISTS `vacation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `vacation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `trip_id` int(11) NOT NULL,
  `place` varchar(45) DEFAULT NULL,
  `description` varchar(99) DEFAULT NULL,
  `d_from` varchar(45) DEFAULT NULL,
  `d_to` varchar(45) DEFAULT NULL,
  `added_by` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_users_has_trips_trips1_idx` (`trip_id`),
  KEY `fk_users_has_trips_users_idx` (`user_id`),
  CONSTRAINT `fk_users_has_trips_users` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_users_has_trips_trips1` FOREIGN KEY (`trip_id`) REFERENCES `trips` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `vacation`
--

LOCK TABLES `vacation` WRITE;
/*!40000 ALTER TABLE `vacation` DISABLE KEYS */;
INSERT INTO `vacation` VALUES (2,2,1,'Austin TX','Go to the LBJ library and the texas capitol','2016-04-15','2016-04-18',2,'2015-11-10 14:26:47','2015-11-10 14:26:47'),(3,3,2,'New Mexico','Sky diving and  bungee jumping off a cliff and zombies','2017-03-29','2017-03-31',3,'2015-11-10 14:40:39','2015-11-10 14:40:39'),(4,4,3,'Moscow','Assasination of high value foreign diplomat who supports terrorism','2016-09-29','2016-09-29',4,'2015-11-10 14:54:57','2015-11-10 14:54:57'),(5,5,4,'Sesame Street','A place to sing songs and count numbers','2016-08-24','2016-08-27',5,'2015-11-10 15:36:22','2015-11-10 15:36:22'),(6,4,3,'Moscow','Assasination of high value foreign diplomat who supports terrorism','2016-09-29','2016-09-29',5,'2015-11-10 15:52:19','2015-11-10 15:52:19'),(7,3,2,'New Mexico','Sky diving and  bungee jumping off a cliff and zombies','2017-03-29','2017-03-31',6,'2015-11-10 16:14:43','2015-11-10 16:14:43'),(8,6,5,'Phillipines','Go to that one Volcano Island with a Volcano on it','2018-06-29','2018-07-25',6,'2015-11-10 16:15:32','2015-11-10 16:15:32'),(9,7,6,'New York','Going to a broadway show','2015-11-29','2015-11-30',7,'2015-11-10 16:48:10','2015-11-10 16:48:10'),(10,4,3,'Moscow','Assasination of high value foreign diplomat who supports terrorism','2016-09-29','2016-09-29',7,'2015-11-10 16:48:24','2015-11-10 16:48:24'),(11,6,5,'Phillipines','Go to that one Volcano Island with a Volcano on it','2018-06-29','2018-07-25',7,'2015-11-10 16:52:40','2015-11-10 16:52:40'),(12,8,7,'The Haunted Forest','Going to catch spiders and bugs','2018-09-26','2018-09-30',8,'2015-11-10 16:56:01','2015-11-10 16:56:01'),(13,5,4,'Sesame Street','A place to sing songs and count numbers','2016-08-24','2016-08-27',8,'2015-11-10 16:56:55','2015-11-10 16:56:55');
/*!40000 ALTER TABLE `vacation` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-11-10 16:59:42
