-- MariaDB dump 10.19  Distrib 10.4.32-MariaDB, for Linux (x86_64)
--
-- Host: localhost    Database: redteam
-- ------------------------------------------------------
-- Server version	10.4.32-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
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
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `feedback_data` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `comment` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=114 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `feedback_data`
--

LOCK TABLES `feedback_data` WRITE;
/*!40000 ALTER TABLE `feedback_data` DISABLE KEYS */;
INSERT INTO `feedback_data` VALUES (88,'Anna','Attacks simulated effectively'),(89,'Bob','Breach detection was top-notch'),(90,'Charlie','Cybersecurity measures tested thoroughly'),(91,'Diana','Defenses evaluated properly'),(92,'Edward','Excellent penetration testing'),(93,'Fiona','Found vulnerabilities quickly'),(94,'George','Great at identifying weak points'),(95,'Hannah','Highly skilled at intrusion detection'),(96,'Ivan','Impressive security audit'),(97,'Jack','Justified our investment in red teaming'),(98,'Katie','Keen eye for security gaps'),(99,'Liam','Learned a lot from the exercise'),(100,'Mia','Mitigation strategies suggested were effective'),(101,'Nick','Noticed issues we overlooked'),(102,'Olivia','Outstanding risk assessment'),(103,'Paul','Penetration tests were thorough'),(104,'Quincy','Quick to identify potential threats'),(105,'Rachel','Red teaming was a valuable experience'),(106,'Steve','Security vulnerabilities were well-documented'),(107,'Tina','Thorough in their approach'),(108,'Uma','Understood our system well'),(109,'Victor','Valuable insights into our security'),(110,'Wendy','We will definitely do this again'),(111,'Xavier','eXcellent threat modeling'),(112,'Yara','Yielded important security improvements'),(113,'Zoe','Zeroed in on key vulnerabilities');
/*!40000 ALTER TABLE `feedback_data` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-05-15 15:21:57
