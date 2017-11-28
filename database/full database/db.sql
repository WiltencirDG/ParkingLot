-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: estacionamento
-- ------------------------------------------------------
-- Server version	5.7.20-log

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
-- Table structure for table `estar`
--

DROP TABLE IF EXISTS `estar`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `estar` (
  `id_estar` int(11) NOT NULL AUTO_INCREMENT,
  `status` int(11) DEFAULT '0',
  PRIMARY KEY (`id_estar`)
) ENGINE=InnoDB AUTO_INCREMENT=81 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `estar`
--

LOCK TABLES `estar` WRITE;
/*!40000 ALTER TABLE `estar` DISABLE KEYS */;
INSERT INTO `estar` VALUES (1,0),(2,0),(3,0),(4,0),(5,0),(6,0),(7,0),(8,0),(9,0),(10,0),(11,0),(12,0),(13,0),(14,0),(15,0),(16,0),(17,0),(18,0),(19,0),(20,0),(21,0),(22,0),(23,0),(24,0),(25,0),(26,0),(27,0),(28,0),(29,0),(30,0),(31,0),(32,0),(33,0),(34,0),(35,0),(36,0),(37,0),(38,0),(39,0),(40,0),(41,0),(42,0),(43,0),(44,0),(45,0),(46,0),(47,0),(48,0),(49,0),(50,0),(51,0),(52,0),(53,0),(54,0),(55,0),(56,0),(57,0),(58,0),(59,0),(60,0),(61,0),(62,0),(63,0),(64,0),(65,0),(66,0),(67,0),(68,0),(69,0),(70,0),(71,0),(72,0),(73,0),(74,0),(75,0),(76,0),(77,0),(78,0),(79,0),(80,0);
/*!40000 ALTER TABLE `estar` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `vagas`
--

DROP TABLE IF EXISTS `vagas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `vagas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `vaga_id` int(11) NOT NULL,
  `checkin` varchar(20) DEFAULT NULL,
  `placa` varchar(20) DEFAULT NULL,
  `modelo` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_vaga_idx` (`vaga_id`),
  CONSTRAINT `fk_vaga` FOREIGN KEY (`vaga_id`) REFERENCES `estar` (`id_estar`)
) ENGINE=InnoDB AUTO_INCREMENT=178 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `vagas`
--

LOCK TABLES `vagas` WRITE;
/*!40000 ALTER TABLE `vagas` DISABLE KEYS */;
INSERT INTO `vagas` VALUES (98,1,'','',''),(99,2,'','',''),(100,3,'','',''),(101,4,'','',''),(102,5,'','',''),(103,6,'','',''),(104,7,'','',''),(105,8,'','',''),(106,9,'','',''),(107,10,'','',''),(108,11,'','',''),(109,12,'','',''),(110,13,'','',''),(111,14,'','',''),(112,15,'','',''),(113,16,'','',''),(114,17,'','',''),(115,18,'','',''),(116,19,'','',''),(117,20,'','',''),(118,21,'','',''),(119,22,'','',''),(120,23,'','',''),(121,24,'','',''),(122,25,'','',''),(123,26,'','',''),(124,27,'','',''),(125,28,'','',''),(126,29,'','',''),(127,30,'','',''),(128,31,'','',''),(129,32,'','',''),(130,33,'','',''),(131,34,'','',''),(132,35,'','',''),(133,36,'','',''),(134,37,'','',''),(135,38,'','',''),(136,39,'','',''),(137,40,'','',''),(138,41,'','',''),(139,42,'','',''),(140,43,'','',''),(141,44,'','',''),(142,45,'','',''),(143,46,'','',''),(144,47,'','',''),(145,48,'','',''),(146,49,'','',''),(147,50,'','',''),(148,51,'','',''),(149,52,'','',''),(150,53,'','',''),(151,54,'','',''),(152,55,'','',''),(153,56,'','',''),(154,57,'','',''),(155,58,'','',''),(156,59,'','',''),(157,60,'','',''),(158,61,'','',''),(159,62,'','',''),(160,63,'','',''),(161,64,'','',''),(162,65,'','',''),(163,66,'','',''),(164,67,'','',''),(165,68,'','',''),(166,69,'','',''),(167,70,'','',''),(168,71,'','',''),(169,72,'','',''),(170,73,'','',''),(171,74,'','',''),(172,75,'','',''),(173,76,'','',''),(174,77,'','',''),(175,78,'','',''),(176,79,'','',''),(177,80,'','','');
/*!40000 ALTER TABLE `vagas` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-11-28 11:32:59
