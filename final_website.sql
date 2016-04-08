-- MySQL dump 10.13  Distrib 5.5.46, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: website
-- ------------------------------------------------------
-- Server version	5.5.46-0ubuntu0.14.04.2

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
-- Table structure for table `applications`
--

DROP TABLE IF EXISTS `applications`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `applications` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `gender` varchar(1) DEFAULT NULL,
  `guardian_name` varchar(100) DEFAULT NULL,
  `pin` varchar(10) DEFAULT NULL,
  `firstlang` int(10) DEFAULT NULL,
  `secondlang` int(10) DEFAULT NULL,
  `maths` int(10) DEFAULT NULL,
  `english` int(10) DEFAULT NULL,
  `chemistry` int(10) DEFAULT NULL,
  `physics` int(10) DEFAULT NULL,
  `electronics` int(10) DEFAULT NULL,
  `zoology` int(10) DEFAULT NULL,
  `botony` int(10) DEFAULT NULL,
  `course` varchar(50) DEFAULT NULL,
  `bussiness` int(11) DEFAULT NULL,
  `accounting` int(11) DEFAULT NULL,
  `economics` int(11) DEFAULT NULL,
  `politics` int(11) DEFAULT NULL,
  `statistics` int(11) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `applications`
--

LOCK TABLES `applications` WRITE;
/*!40000 ALTER TABLE `applications` DISABLE KEYS */;
INSERT INTO `applications` VALUES (16,'nbv','sdfgh',NULL,NULL,'wertyu','56',78,6,5,4,3,2,1,0,9,'dfghj',8,7,6,5,4,'listed'),(17,'sdf','ert',NULL,NULL,'rt','76',7,6,5,4,3,2,1,0,9,'8',8,7,6,0,0,'listed'),(18,'noufalck','ert',NULL,NULL,'rt','76',7,6,5,4,3,2,1,0,10,'8',8,7,6,0,0,'listed'),(20,'noufal','asdfghjk',NULL,NULL,'qwertyu','652136',3,4,5,6,7,8,9,7,56,'bba',5,4,3,2,1,'listed'),(21,'noufal','asdfghjk',NULL,NULL,'qwertyu','652136',3,4,5,6,7,8,9,7,56,'bba',5,4,3,2,1,'listed'),(22,'xxx','bbb',NULL,NULL,'nnn','786543',67,88,99,0,77,66,55,44,33,'bbv',22,22,11,77,88,'listed'),(26,'murshid','hbbb',NULL,NULL,'ghh','786543',5,4,3,2,6,7,8,9,7,'gh',5,4,4,3,2,'listed'),(27,'panth','rhbbb',NULL,NULL,'r','r',9,6,6,5,4,3,2,1,3,'gh',344,5,77,88,99,'listed');
/*!40000 ALTER TABLE `applications` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `courses`
--

DROP TABLE IF EXISTS `courses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `courses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `description` varchar(45) DEFAULT NULL,
  `department_id` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_courses_department1_idx` (`department_id`),
  CONSTRAINT `fk_courses_department1` FOREIGN KEY (`department_id`) REFERENCES `department` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=107 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `courses`
--

LOCK TABLES `courses` WRITE;
/*!40000 ALTER TABLE `courses` DISABLE KEYS */;
INSERT INTO `courses` VALUES (73,'new Cource','',0),(74,'second','',7),(75,'first','',7),(81,'fgj','',10),(84,'ffb','bbbbbbbb',10),(85,'dvc','dg',11),(89,'jj','hf',0),(90,'jkfgjb','g',0),(91,'hjhj','b',0),(92,'hd','edg',0),(93,'fgj','fh',0),(94,'fhh','gf',0),(95,'afds','d',0),(96,'nb','fbv',0),(97,'ggf','gf',0),(101,'bca','fhxh',7),(103,'BCA','SIMPLEE',11),(104,'mca','cvdf',11),(105,'eng','dfg',7),(106,'eng','dvx',13);
/*!40000 ALTER TABLE `courses` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `department`
--

DROP TABLE IF EXISTS `department`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `department` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `discription` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `department`
--

LOCK TABLES `department` WRITE;
/*!40000 ALTER TABLE `department` DISABLE KEYS */;
/*!40000 ALTER TABLE `department` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `departments`
--

DROP TABLE IF EXISTS `departments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `departments` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `departments`
--

LOCK TABLES `departments` WRITE;
/*!40000 ALTER TABLE `departments` DISABLE KEYS */;
INSERT INTO `departments` VALUES (7,'new department','new'),(13,'computer science','thmfb'),(14,'jgdnf','g4eg');
/*!40000 ALTER TABLE `departments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `examresults`
--

DROP TABLE IF EXISTS `examresults`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `examresults` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `student_id` int(20) DEFAULT NULL,
  `exam_type_id` int(20) DEFAULT NULL,
  `1st_sub` varchar(50) DEFAULT NULL,
  `2nd_sub` varchar(50) DEFAULT NULL,
  `3rd_sub` varchar(50) DEFAULT NULL,
  `4th_sub` varchar(50) DEFAULT NULL,
  `5th_sub` varchar(50) DEFAULT NULL,
  `6th_sub` varchar(50) DEFAULT NULL,
  `total` int(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `student` (`student_id`),
  KEY `exam_type` (`exam_type_id`),
  CONSTRAINT `exam_type` FOREIGN KEY (`exam_type_id`) REFERENCES `examtypes` (`id`),
  CONSTRAINT `student` FOREIGN KEY (`student_id`) REFERENCES `registrations` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `examresults`
--

LOCK TABLES `examresults` WRITE;
/*!40000 ALTER TABLE `examresults` DISABLE KEYS */;
/*!40000 ALTER TABLE `examresults` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `examtypes`
--

DROP TABLE IF EXISTS `examtypes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `examtypes` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) DEFAULT NULL,
  `time` time DEFAULT NULL,
  `date` date DEFAULT NULL,
  `department_id` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `department_id` (`department_id`),
  CONSTRAINT `department_id` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `examtypes`
--

LOCK TABLES `examtypes` WRITE;
/*!40000 ALTER TABLE `examtypes` DISABLE KEYS */;
/*!40000 ALTER TABLE `examtypes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `marks`
--

DROP TABLE IF EXISTS `marks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `marks` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `student_id` int(50) DEFAULT NULL,
  `1st_lang` varchar(50) DEFAULT NULL,
  `2nd_lang` varchar(50) DEFAULT NULL,
  `1st_sub` varchar(50) DEFAULT NULL,
  `2nd_sub` varchar(50) DEFAULT NULL,
  `3rd_sub` varchar(50) DEFAULT NULL,
  `4th_sub` varchar(50) DEFAULT NULL,
  `5th_sub` varchar(50) DEFAULT NULL,
  `6th_sub` varbinary(50) DEFAULT NULL,
  `7th_sub` varchar(50) DEFAULT NULL,
  `8th_sub` varchar(50) DEFAULT NULL,
  `total_marks` int(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `studentid` (`student_id`),
  CONSTRAINT `studentid` FOREIGN KEY (`student_id`) REFERENCES `registrations` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `marks`
--

LOCK TABLES `marks` WRITE;
/*!40000 ALTER TABLE `marks` DISABLE KEYS */;
/*!40000 ALTER TABLE `marks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `parentlogin`
--

DROP TABLE IF EXISTS `parentlogin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `parentlogin` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `student_id` int(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `parentstudents` (`student_id`),
  CONSTRAINT `parentstudents` FOREIGN KEY (`student_id`) REFERENCES `registrations` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `parentlogin`
--

LOCK TABLES `parentlogin` WRITE;
/*!40000 ALTER TABLE `parentlogin` DISABLE KEYS */;
/*!40000 ALTER TABLE `parentlogin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `payroll`
--

DROP TABLE IF EXISTS `payroll`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `payroll` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `amount` int(20) DEFAULT NULL,
  `staff_id` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `staff` (`staff_id`),
  CONSTRAINT `staff` FOREIGN KEY (`staff_id`) REFERENCES `staffs` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `payroll`
--

LOCK TABLES `payroll` WRITE;
/*!40000 ALTER TABLE `payroll` DISABLE KEYS */;
/*!40000 ALTER TABLE `payroll` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `registrations`
--

DROP TABLE IF EXISTS `registrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `registrations` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `address` varchar(150) DEFAULT NULL,
  `gender` varchar(1) DEFAULT NULL,
  `father` varchar(50) DEFAULT NULL,
  `mother` varchar(50) DEFAULT NULL,
  `pin` int(10) DEFAULT NULL,
  `income` int(20) DEFAULT NULL,
  `number` int(15) DEFAULT NULL,
  `mail` varchar(50) DEFAULT NULL,
  `religion_community` varchar(50) DEFAULT NULL,
  `cast` varchar(50) DEFAULT NULL,
  `panchayath` varchar(50) DEFAULT NULL,
  `taluk` varchar(50) DEFAULT NULL,
  `district` varchar(50) DEFAULT NULL,
  `martia_status` varchar(50) DEFAULT NULL,
  `spouse_name_address` varchar(50) DEFAULT NULL,
  `institution_last_attend` varchar(50) DEFAULT NULL,
  `physically_handicapped` varchar(50) DEFAULT NULL,
  `course_id` int(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `couse` (`course_id`),
  CONSTRAINT `couse` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `registrations`
--

LOCK TABLES `registrations` WRITE;
/*!40000 ALTER TABLE `registrations` DISABLE KEYS */;
/*!40000 ALTER TABLE `registrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `scholorships`
--

DROP TABLE IF EXISTS `scholorships`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `scholorships` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `type` varchar(50) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `scholorships`
--

LOCK TABLES `scholorships` WRITE;
/*!40000 ALTER TABLE `scholorships` DISABLE KEYS */;
/*!40000 ALTER TABLE `scholorships` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `semester`
--

DROP TABLE IF EXISTS `semester`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `semester` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `cources_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_semester_cources1_idx` (`cources_id`),
  CONSTRAINT `fk_semester_cources1` FOREIGN KEY (`cources_id`) REFERENCES `courses` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `semester`
--

LOCK TABLES `semester` WRITE;
/*!40000 ALTER TABLE `semester` DISABLE KEYS */;
INSERT INTO `semester` VALUES (2,'1 st semester',74),(3,'secoond sem',74),(4,'www',74),(5,'uy',74),(6,'3rd sen',74),(7,'4th sem',74),(8,'5th sem',74),(9,'6th sem',103),(10,'1st sem',104),(11,'2nd sem',104),(12,'1st sem',105),(13,'1st',106),(14,'2nd sem',106);
/*!40000 ALTER TABLE `semester` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `semester_subject`
--

DROP TABLE IF EXISTS `semester_subject`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `semester_subject` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `subject_id` int(11) DEFAULT NULL,
  `semester_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_semester_subject_subject1_idx` (`subject_id`),
  KEY `fk_semester_subject_semester1_idx` (`semester_id`),
  CONSTRAINT `fk_semester_subject_semester1` FOREIGN KEY (`semester_id`) REFERENCES `semester` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_semester_subject_subject1` FOREIGN KEY (`subject_id`) REFERENCES `subject` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `semester_subject`
--

LOCK TABLES `semester_subject` WRITE;
/*!40000 ALTER TABLE `semester_subject` DISABLE KEYS */;
/*!40000 ALTER TABLE `semester_subject` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `staffattend`
--

DROP TABLE IF EXISTS `staffattend`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `staffattend` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `staff_id` int(20) DEFAULT NULL,
  `attendance` varchar(50) DEFAULT NULL,
  `date` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `staffid` (`staff_id`),
  CONSTRAINT `staffid` FOREIGN KEY (`staff_id`) REFERENCES `staffs` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `staffattend`
--

LOCK TABLES `staffattend` WRITE;
/*!40000 ALTER TABLE `staffattend` DISABLE KEYS */;
INSERT INTO `staffattend` VALUES (1,1,'56',NULL),(2,20,'34',NULL),(3,12,'45',NULL),(4,36,'67',NULL),(5,14,'34',NULL),(6,14,'34',NULL),(7,6,'23',NULL),(8,6,'23',NULL),(9,36,'34',NULL),(10,36,'34',NULL),(11,36,'12',NULL),(12,37,'23',NULL),(13,38,'56',NULL),(14,38,'56',NULL),(15,34,'23',NULL),(16,34,'23',NULL),(17,33,'23',NULL),(18,33,'23',NULL),(19,10,'21',NULL),(20,10,'21',NULL),(21,26,'34',NULL),(22,17,'12',NULL),(23,8,'efff',NULL),(24,28,'56',NULL),(25,19,'89',NULL);
/*!40000 ALTER TABLE `staffattend` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `staffs`
--

DROP TABLE IF EXISTS `staffs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `staffs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `address` varchar(350) DEFAULT NULL,
  `departments_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `staffs`
--

LOCK TABLES `staffs` WRITE;
/*!40000 ALTER TABLE `staffs` DISABLE KEYS */;
INSERT INTO `staffs` VALUES (1,'aaaaa','aaa',1),(2,'WW','WW',3),(3,'WW','WW',3),(4,'successssSSS','sss',1),(5,'successssSSS','sss',1),(6,'SSS','SSS',3),(7,'SSS','SSS',3),(8,'SSS','SSS',3),(9,'success','sss',1),(10,'dsd','dd',1),(11,'dsd','dd',1),(12,'dd','dd',1),(13,'dd','dd',1),(14,'ccc','ccc',1),(15,'ccc','ccc',1),(16,'ff','fff',1),(17,'ff','fff',1),(18,'ff','fff',1),(19,'ff','fff',1),(20,'ff','fff',1),(21,'ff','fff',1),(22,'ff','fff',1),(23,'ff','fff',1),(24,'ff','fff',1),(25,'ff','fff',1),(26,'PSYBO','AAA',1),(27,'PSYBO','AAA',1),(28,'PSYBO','AAA',1),(29,'dfgg','dd',1),(30,'dd','dd',1),(31,'dd','dd',1),(32,'success','sss',1),(33,'dd','ddd',1),(34,'test','next',3),(35,'noufal','gjgfjn',2),(36,'sharmina','ruejgjddj',2),(37,'husna','jfgfhjggfhgd',3),(38,'nisha','chali',4),(39,'rinna','chamadan',2),(40,'ninu','kt',3);
/*!40000 ALTER TABLE `staffs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `subject`
--

DROP TABLE IF EXISTS `subject`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `subject` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `subject`
--

LOCK TABLES `subject` WRITE;
/*!40000 ALTER TABLE `subject` DISABLE KEYS */;
INSERT INTO `subject` VALUES (1,'th'),(2,'th'),(3,'th'),(4,'th'),(5,'th'),(6,'th'),(7,'th'),(8,'th'),(9,'hh'),(10,'hyu'),(11,'gh'),(12,'english'),(13,'malayalam'),(14,'fd'),(15,'jg');
/*!40000 ALTER TABLE `subject` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `userlogin`
--

DROP TABLE IF EXISTS `userlogin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `userlogin` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `student_id` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `userlogin`
--

LOCK TABLES `userlogin` WRITE;
/*!40000 ALTER TABLE `userlogin` DISABLE KEYS */;
INSERT INTO `userlogin` VALUES (1,'husna','202cb962ac59075b964b07152d234b70','12'),(2,'sna','127','15'),(3,'jesh','1301','9');
/*!40000 ALTER TABLE `userlogin` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-03-31 12:32:01
