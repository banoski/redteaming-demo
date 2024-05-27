-- MySQL dump 10.13  Distrib 8.0.36, for Linux (x86_64)
--
-- Host: localhost    Database: redteam
-- ------------------------------------------------------
-- Server version	5.5.5-10.4.32-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `feedback_data`
--

DROP TABLE IF EXISTS `feedback_data`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `feedback_data` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) DEFAULT NULL,
  `comment` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=92 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `feedback_data`
--

LOCK TABLES `feedback_data` WRITE;
/*!40000 ALTER TABLE `feedback_data` DISABLE KEYS */;
INSERT INTO `feedback_data` VALUES (66,'Anna','Attacks simulated effectively'),(67,'Bob','Breach detection was top-notch'),(68,'Charlie','Cybersecurity measures tested thoroughly'),(69,'Diana','Defenses evaluated properly'),(70,'Edward','Excellent penetration testing'),(71,'Fiona','Found vulnerabilities quickly'),(72,'George','Great at identifying weak points'),(73,'Hannah','Highly skilled at intrusion detection'),(74,'Ivan','Impressive security audit'),(75,'Jack','Justified our investment in red teaming'),(76,'Katie','Keen eye for security gaps'),(77,'Liam','Learned a lot from the exercise'),(78,'Mia','Mitigation strategies suggested were effective'),(79,'Nick','Noticed issues we overlooked'),(80,'Olivia','Outstanding risk assessment'),(81,'Paul','Penetration tests were thorough'),(82,'Quincy','Quick to identify potential threats'),(83,'Rachel','Red teaming was a valuable experience'),(84,'Steve','Security vulnerabilities were well-documented'),(85,'Tina','Thorough in their approach'),(86,'Uma','Understood our system well'),(87,'Victor','Valuable insights into our security'),(88,'Wendy','We will definitely do this again'),(89,'Xavier','eXcellent threat modeling'),(90,'Yara','Yielded important security improvements'),(91,'Zoe','Zeroed in on key vulnerabilities');
/*!40000 ALTER TABLE `feedback_data` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (12,'test','test','test'),(13,'admin','$2y$10$KhEAGaoLbVeIdU78chYhMuI01CVRfQtxV5UXrKo03nIxoT0D0bUXe','admin@redteam.com'),(14,'alice','$2y$10$2.9TvtLepYKXbGuTsztUJeCKsr4OOI8m.a7Nd2.ohLzYv0zk4JLYO','alice@star.com'),(15,'bob','$2y$10$YwAQvozmwQPSoX3Hyaf.eOTyg1yYbxSc5TWj01CYc8r54nT39EzzS','bob@google.com'),(16,'eve','$2y$10$WB0JL/qBokQ.g4kpR9V2qONJTUOVk1yMWpbIJKiTFgts.xbifg1F.','eve3@chocolate.co.uk');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-05-27  9:29:35
