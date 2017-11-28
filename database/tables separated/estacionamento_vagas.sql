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

-- Dump completed on 2017-11-28 11:32:09
