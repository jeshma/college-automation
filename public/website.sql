-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 04, 2016 at 09:34 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `website`
--
CREATE DATABASE IF NOT EXISTS `website` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `website`;

-- --------------------------------------------------------

--
-- Table structure for table `applications`
--

CREATE TABLE IF NOT EXISTS `applications` (
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `applications`
--

INSERT INTO `applications` (`id`, `name`, `address`, `dob`, `gender`, `guardian_name`, `pin`, `firstlang`, `secondlang`, `maths`, `english`, `chemistry`, `physics`, `electronics`, `zoology`, `botony`, `course`, `bussiness`, `accounting`, `economics`, `politics`, `statistics`, `status`) VALUES
(17, 'sdf', 'ert', NULL, NULL, 'rt', '76', 7, 6, 5, 4, 3, 2, 1, 0, 9, '8', 8, 7, 6, 0, 0, 'listed'),
(18, 'noufalck', 'ert', NULL, NULL, 'rt', '76', 7, 6, 5, 4, 3, 2, 1, 0, 10, '8', 8, 7, 6, 0, 0, 'listed'),
(19, 'shameem', 'bjom', NULL, NULL, 'bbb', '7654', 99, 88, 77, 66, 55, 44, 33, 22, 11, 'vvvv', 2, 33, 44, 55, 66, 'listed'),
(20, 'noufal', 'asdfghjk', NULL, NULL, 'qwertyu', '652136', 3, 4, 5, 6, 7, 8, 9, 7, 56, 'bba', 5, 4, 3, 2, 1, 'listed'),
(21, 'noufal', 'asdfghjk', NULL, NULL, 'qwertyu', '652136', 3, 4, 5, 6, 7, 8, 9, 7, 56, 'bba', 5, 4, 3, 2, 1, 'listed'),
(22, 'xxx', 'bbb', NULL, NULL, 'nnn', '786543', 67, 88, 99, 0, 77, 66, 55, 44, 33, 'bbv', 22, 22, 11, 77, 88, 'listed'),
(26, 'murshid', 'hbbb', NULL, NULL, 'ghh', '786543', 5, 4, 3, 2, 6, 7, 8, 9, 7, 'gh', 5, 4, 4, 3, 2, 'listed'),
(27, 'panth', 'rhbbb', NULL, NULL, 'r', 'r', 9, 6, 6, 5, 4, 3, 2, 1, 3, 'gh', 344, 5, 77, 88, 99, 'listed'),
(28, 'jeshma', 'chettiyarammal', NULL, NULL, 'afsal', '12345', 32, 55, 66, 88, 66, 55, 44, 33, 22, 'bca', 111, 22, 333, 44, 55, 'listed');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE IF NOT EXISTS `courses` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE IF NOT EXISTS `departments` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `examresults`
--

CREATE TABLE IF NOT EXISTS `examresults` (
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
  KEY `exam_type` (`exam_type_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `examtypes`
--

CREATE TABLE IF NOT EXISTS `examtypes` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) DEFAULT NULL,
  `time` time DEFAULT NULL,
  `date` date DEFAULT NULL,
  `department_id` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `department_id` (`department_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `marks`
--

CREATE TABLE IF NOT EXISTS `marks` (
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
  KEY `studentid` (`student_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `parentlogin`
--

CREATE TABLE IF NOT EXISTS `parentlogin` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `student_id` int(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `parentstudents` (`student_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `payroll`
--

CREATE TABLE IF NOT EXISTS `payroll` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `amount` int(20) DEFAULT NULL,
  `staff_id` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `staff` (`staff_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `registrations`
--

CREATE TABLE IF NOT EXISTS `registrations` (
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
  KEY `couse` (`course_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `scholorships`
--

CREATE TABLE IF NOT EXISTS `scholorships` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `type` varchar(50) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `staffattend`
--

CREATE TABLE IF NOT EXISTS `staffattend` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `staff_id` int(20) DEFAULT NULL,
  `attendance` varchar(50) DEFAULT NULL,
  `date` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `staffid` (`staff_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `staffs`
--

CREATE TABLE IF NOT EXISTS `staffs` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `dapartment_id` int(20) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `departmet` (`dapartment_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `userlogin`
--

CREATE TABLE IF NOT EXISTS `userlogin` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `student_id` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `examresults`
--
ALTER TABLE `examresults`
  ADD CONSTRAINT `exam_type` FOREIGN KEY (`exam_type_id`) REFERENCES `examtypes` (`id`),
  ADD CONSTRAINT `student` FOREIGN KEY (`student_id`) REFERENCES `registrations` (`id`);

--
-- Constraints for table `examtypes`
--
ALTER TABLE `examtypes`
  ADD CONSTRAINT `department_id` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`);

--
-- Constraints for table `marks`
--
ALTER TABLE `marks`
  ADD CONSTRAINT `studentid` FOREIGN KEY (`student_id`) REFERENCES `registrations` (`id`);

--
-- Constraints for table `parentlogin`
--
ALTER TABLE `parentlogin`
  ADD CONSTRAINT `parentstudents` FOREIGN KEY (`student_id`) REFERENCES `registrations` (`id`);

--
-- Constraints for table `payroll`
--
ALTER TABLE `payroll`
  ADD CONSTRAINT `staff` FOREIGN KEY (`staff_id`) REFERENCES `staffs` (`id`);

--
-- Constraints for table `registrations`
--
ALTER TABLE `registrations`
  ADD CONSTRAINT `couse` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`);

--
-- Constraints for table `staffattend`
--
ALTER TABLE `staffattend`
  ADD CONSTRAINT `staffid` FOREIGN KEY (`staff_id`) REFERENCES `staffs` (`id`);

--
-- Constraints for table `staffs`
--
ALTER TABLE `staffs`
  ADD CONSTRAINT `departmet` FOREIGN KEY (`dapartment_id`) REFERENCES `departments` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
