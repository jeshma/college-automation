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
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `applications`
--

LOCK TABLES `applications` WRITE;
/*!40000 ALTER TABLE `applications` DISABLE KEYS */;
INSERT INTO `applications` VALUES (17,'sdf','ert',NULL,NULL,'rt','76',7,6,5,4,3,2,1,0,9,'8',8,7,6,0,0,'approve'),(18,'noufalck','ert',NULL,NULL,'rt','76',7,6,5,4,3,2,1,0,10,'8',8,7,6,0,0,'approve'),(22,'xxx','bbb',NULL,NULL,'nnn','786543',67,88,99,0,77,66,55,44,33,'bbv',22,22,11,77,88,'approve'),(26,'murshid','hbbb',NULL,NULL,'ghh','786543',5,4,3,2,6,7,8,9,7,'gh',5,4,4,3,2,'approve'),(29,'rrrr','tttt',NULL,NULL,'yyyy','uuuuu',0,0,0,0,0,0,0,0,0,'aaaa',0,0,0,0,0,'approve');
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
) ENGINE=InnoDB AUTO_INCREMENT=114 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `courses`
--

LOCK TABLES `courses` WRITE;
/*!40000 ALTER TABLE `courses` DISABLE KEYS */;
INSERT INTO `courses` VALUES (73,'new Cource','',0),(75,'first','',7),(81,'fgj','',10),(84,'ffb','bbbbbbbb',10),(85,'dvc','dg',11),(89,'jj','hf',0),(90,'jkfgjb','g',0),(91,'hjhj','b',0),(92,'hd','edg',0),(93,'fgj','fh',0),(94,'fhh','gf',0),(95,'afds','d',0),(96,'nb','fbv',0),(97,'ggf','gf',0),(101,'bca','fhxh',7),(103,'BCA','SIMPLEE',11),(104,'mca','cvdf',11),(105,'eng','dfg',7),(106,'eng','dvx',13),(107,'msd','c,kv',13),(108,'mca','fh',7),(109,'khjgh','likj',0),(112,'ba eng','rgfs',15),(113,'ma eng','ghg',15);
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
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `departments`
--

LOCK TABLES `departments` WRITE;
/*!40000 ALTER TABLE `departments` DISABLE KEYS */;
INSERT INTO `departments` VALUES (7,'new department','new'),(13,'computer science','thmfb'),(15,'ba','jhkj');
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
  `semester_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `student` (`student_id`),
  KEY `exam_type` (`exam_type_id`),
  CONSTRAINT `exam_type` FOREIGN KEY (`exam_type_id`) REFERENCES `examtypes` (`id`),
  CONSTRAINT `student` FOREIGN KEY (`student_id`) REFERENCES `student` (`id`)
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
  `departments_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `examtypes`
--

LOCK TABLES `examtypes` WRITE;
/*!40000 ALTER TABLE `examtypes` DISABLE KEYS */;
INSERT INTO `examtypes` VALUES (1,'internal','00:00:00','0000-00-00',NULL),(2,'sgj','00:00:00','0000-00-00',NULL),(3,'sgj','00:00:00','0000-00-00',NULL),(4,'fbn','00:00:00','0000-00-00',NULL),(5,'fbn','00:00:00','0000-00-00',NULL),(6,'fbn','00:00:00','0000-00-00',NULL),(7,'fbn','00:00:00','0000-00-00',NULL),(8,'fbn','00:00:00','0000-00-00',NULL),(9,'fbn','00:00:00','0000-00-00',NULL),(10,'fbn','00:00:00','0000-00-00',NULL),(11,'fbn','00:00:00','0000-00-00',NULL),(12,'jeshma','00:00:45','0000-00-00',NULL),(13,'djgf','00:00:00','0000-00-00',NULL),(14,'internal','00:04:34','2016-12-01',NULL),(15,'ffckl','00:00:00','0000-00-00',NULL),(16,'ffckl','00:00:00','0000-00-00',NULL),(17,'internal','00:04:34','2016-12-01',NULL),(18,'internal','00:04:34','2016-12-01',NULL),(19,'1 st semester','02:34:56','2016-12-01',NULL),(20,'internal','00:00:00','2016-12-01',13),(21,'2nd internal','03:45:55','2016-12-01',0),(22,'3rd internal','00:00:00','2016-12-01',0),(23,'4th internal','03:49:30','2016-12-01',0),(24,'1stsem intrnl','05:44:32','2016-12-01',0),(25,'gchj','43:56:45','0000-00-00',0),(26,'rtdf','00:04:56','0000-00-00',0),(27,'wertfhvb','00:04:56','2016-12-01',0),(28,'internal-1st','43:56:45','2016-12-01',13),(29,'likujy','00:00:00','2016-12-01',7);
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
  CONSTRAINT `studentid` FOREIGN KEY (`student_id`) REFERENCES `student` (`id`)
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
  CONSTRAINT `parentstudents` FOREIGN KEY (`student_id`) REFERENCES `student` (`id`)
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
  `date` date DEFAULT NULL,
  `amount` int(20) DEFAULT NULL,
  `staff_id` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `staff` (`staff_id`),
  CONSTRAINT `staff` FOREIGN KEY (`staff_id`) REFERENCES `staffs` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `payroll`
--

LOCK TABLES `payroll` WRITE;
/*!40000 ALTER TABLE `payroll` DISABLE KEYS */;
INSERT INTO `payroll` VALUES (1,'0000-00-00',0,1),(2,'0000-00-00',0,1),(3,'1993-12-23',10254,1),(4,'2016-12-01',10212,11),(5,'2016-12-01',544,5),(6,'2016-12-01',56,34),(7,'2016-12-01',654,32),(8,'2016-12-01',234,47),(9,'0000-00-00',0,50);
/*!40000 ALTER TABLE `payroll` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `semester`
--

LOCK TABLES `semester` WRITE;
/*!40000 ALTER TABLE `semester` DISABLE KEYS */;
INSERT INTO `semester` VALUES (2,'1 st semester',74),(3,'secoond sem',74),(4,'www',74),(5,'uy',74),(6,'3rd sen',74),(7,'4th sem',74),(8,'5th sem',74),(9,'6th sem',103),(10,'1st sem',104),(11,'2nd sem',104),(12,'1st sem',105),(13,'1st',106),(14,'2nd sem',106),(15,'6th sem',74),(16,'3dr sem',106),(17,'7th sem',101),(18,'1st sem',112);
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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `semester_subject`
--

LOCK TABLES `semester_subject` WRITE;
/*!40000 ALTER TABLE `semester_subject` DISABLE KEYS */;
INSERT INTO `semester_subject` VALUES (1,2,16),(2,13,16),(3,12,2),(4,13,2),(5,3,3),(6,11,2),(7,12,18);
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
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `staffattend`
--

LOCK TABLES `staffattend` WRITE;
/*!40000 ALTER TABLE `staffattend` DISABLE KEYS */;
INSERT INTO `staffattend` VALUES (1,1,'56',NULL),(2,20,'34',NULL),(3,12,'45',NULL),(4,36,'67',NULL),(5,14,'34',NULL),(6,14,'34',NULL),(7,6,'23',NULL),(8,6,'23',NULL),(9,36,'34',NULL),(10,36,'34',NULL),(11,36,'12',NULL),(12,37,'23',NULL),(13,38,'56',NULL),(14,38,'56',NULL),(15,34,'23',NULL),(16,34,'23',NULL),(17,33,'23',NULL),(18,33,'23',NULL),(19,10,'21',NULL),(20,10,'21',NULL),(21,26,'34',NULL),(22,17,'12',NULL),(23,8,'efff',NULL),(24,28,'56',NULL),(25,19,'89',NULL),(26,7,'23',NULL),(27,43,'23',NULL);
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
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `staffs`
--

LOCK TABLES `staffs` WRITE;
/*!40000 ALTER TABLE `staffs` DISABLE KEYS */;
INSERT INTO `staffs` VALUES (28,'PSYBO','AAA',1),(32,'success','sss',1),(34,'test','next',3),(36,'sharmina','ruejgjddj',2),(37,'husna','jfgfhjggfhgd',3),(38,'nisha','chali',4),(39,'rinna','chamadan',2),(40,'ninu','kt',3),(41,'noufu','ck',1),(45,'jeshma','dd',3),(50,'fdfs','ljkhjgh',15);
/*!40000 ALTER TABLE `staffs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `student` (
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
-- Dumping data for table `student`
--

LOCK TABLES `student` WRITE;
/*!40000 ALTER TABLE `student` DISABLE KEYS */;
/*!40000 ALTER TABLE `student` ENABLE KEYS */;
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
  `usertype` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `userlogin`
--

LOCK TABLES `userlogin` WRITE;
/*!40000 ALTER TABLE `userlogin` DISABLE KEYS */;
INSERT INTO `userlogin` VALUES (1,'husna','202cb962ac59075b964b07152d234b70','12',NULL),(2,'sna','127','15',NULL),(3,'jesh','1301','9',NULL);
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

-- Dump completed on 2016-04-06 15:05:44
