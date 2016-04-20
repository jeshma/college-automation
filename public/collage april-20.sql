-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 20, 2016 at 04:46 PM
-- Server version: 5.5.47-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `website`
--

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `applications`
--

INSERT INTO `applications` (`id`, `name`, `address`, `dob`, `gender`, `guardian_name`, `pin`, `firstlang`, `secondlang`, `maths`, `english`, `chemistry`, `physics`, `electronics`, `zoology`, `botony`, `course`, `bussiness`, `accounting`, `economics`, `politics`, `statistics`, `status`) VALUES
(17, 'sdf', 'ert', NULL, NULL, 'rt', '76', 7, 6, 5, 4, 3, 2, 1, 0, 9, '8', 8, 7, 6, 0, 0, 'request'),
(18, 'noufalck', 'ert', NULL, NULL, 'rt', '76', 7, 6, 5, 4, 3, 2, 1, 0, 10, '8', 8, 7, 6, 0, 0, 'request'),
(21, 'noufal', 'asdfghjk', NULL, NULL, 'qwertyu', '652136', 3, 4, 5, 6, 7, 8, 9, 7, 56, 'bba', 5, 4, 3, 2, 1, 'listed'),
(22, 'xxx', 'bbb', NULL, NULL, 'nnn', '786543', 67, 88, 99, 0, 77, 66, 55, 44, 33, 'bbv', 22, 22, 11, 77, 88, 'listed'),
(26, 'murshid', 'hbbb', NULL, NULL, 'ghh', '786543', 5, 4, 3, 2, 6, 7, 8, 9, 7, 'gh', 5, 4, 4, 3, 2, 'approve'),
(27, 'panth', 'rhbbb', NULL, NULL, 'r', 'r', 9, 6, 6, 5, 4, 3, 2, 1, 3, 'gh', 344, 5, 77, 88, 99, 'approve');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE IF NOT EXISTS `courses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `description` varchar(45) DEFAULT NULL,
  `department_id` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_courses_department1_idx` (`department_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=112 ;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `name`, `description`, `department_id`) VALUES
(73, 'new Cource', '', 0),
(74, 'second', '', 7),
(75, 'first', '', 7),
(81, 'fgj', '', 10),
(84, 'ffb', 'bbbbbbbb', 10),
(85, 'dvc', 'dg', 11),
(89, 'jj', 'hf', 0),
(90, 'jkfgjb', 'g', 0),
(91, 'hjhj', 'b', 0),
(92, 'hd', 'edg', 0),
(93, 'fgj', 'fh', 0),
(94, 'fhh', 'gf', 0),
(95, 'afds', 'd', 0),
(96, 'nb', 'fbv', 0),
(97, 'ggf', 'gf', 0),
(101, 'bca', 'fhxh', 7),
(103, 'BCA', 'SIMPLEE', 11),
(104, 'mca', 'cvdf', 11),
(105, 'eng', 'dfg', 7),
(107, 'test cource', 'jhbjh', 15),
(109, 'b', 'jhbhkj', 13),
(111, 'dsadsds', 'dsdsDSAds', 13);

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE IF NOT EXISTS `department` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `discription` varchar(500) DEFAULT NULL,
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `name`, `description`) VALUES
(13, 'computer science', 'thmfb'),
(18, 'SADSsssasa', 'sasa');

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
  `duration` time DEFAULT NULL,
  `departments_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `examtypes`
--

INSERT INTO `examtypes` (`id`, `name`, `time`, `date`, `duration`, `departments_id`) VALUES
(4, 'DDSDS', '12:30:00', '2016-04-05', '01:00:00', 13),
(5, 'sadsasd', '12:00:00', '2016-04-05', '01:45:00', 13);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `payroll`
--

INSERT INTO `payroll` (`id`, `name`, `date`, `amount`, `staff_id`) VALUES
(1, NULL, '2016-04-06', 45858, NULL),
(2, NULL, '2016-04-07', 23456, NULL),
(3, NULL, '2016-04-22', 4455, NULL),
(4, NULL, '2016-03-02', 785, NULL),
(5, NULL, '2016-06-08', 5454, NULL),
(6, NULL, '2016-04-12', 156, 42),
(7, NULL, '2016-04-13', 4545, 41);

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
-- Table structure for table `semester`
--

CREATE TABLE IF NOT EXISTS `semester` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `cources_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_semester_cources1_idx` (`cources_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `semester`
--

INSERT INTO `semester` (`id`, `name`, `cources_id`) VALUES
(2, '1 st semester', 74),
(3, 'secoond sem', 74),
(4, 'www', 74),
(5, 'uy', 74),
(6, '3rd sen', 74),
(7, '4th sem', 74),
(8, '5th sem', 74),
(9, '6th sem', 103),
(10, '1st sem', 104),
(11, '2nd sem', 104),
(12, '1st sem', 105),
(13, '1st', 106),
(14, '2nd sem', 106),
(15, 'test semester', 107),
(16, 'dsadsd', 111),
(17, 'sem 1', 109),
(18, 'sem 2', 109),
(19, 'sem 2', 111);

-- --------------------------------------------------------

--
-- Table structure for table `semester_subject`
--

CREATE TABLE IF NOT EXISTS `semester_subject` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `subject_id` int(11) DEFAULT NULL,
  `semester_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_semester_subject_subject1_idx` (`subject_id`),
  KEY `fk_semester_subject_semester1_idx` (`semester_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `semester_subject`
--

INSERT INTO `semester_subject` (`id`, `subject_id`, `semester_id`) VALUES
(1, 1, 2),
(2, 1, 2),
(3, 1, 2),
(4, 1, 2),
(5, 1, 2),
(6, 1, 2),
(7, 1, 2),
(8, 1, 2),
(9, 1, 2),
(10, 1, 2),
(11, 1, 2),
(12, 1, 2),
(13, 1, 2),
(14, 4, 2),
(15, 1, 3),
(16, 13, 2),
(17, 5, 5),
(18, 1, 5),
(19, 3, 15),
(20, 2, 15),
(23, 6, 16),
(24, 4, 16),
(25, 16, 16);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `staffattend`
--

INSERT INTO `staffattend` (`id`, `staff_id`, `attendance`, `date`) VALUES
(1, 41, NULL, NULL),
(2, 42, NULL, '2016-04-05'),
(3, 41, '13', '2016-04-05');

-- --------------------------------------------------------

--
-- Table structure for table `staffs`
--

CREATE TABLE IF NOT EXISTS `staffs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `address` varchar(350) DEFAULT NULL,
  `departments_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=44 ;

--
-- Dumping data for table `staffs`
--

INSERT INTO `staffs` (`id`, `name`, `address`, `departments_id`) VALUES
(34, 'test', 'next', 3),
(35, 'noufal', 'gjgfjn', 2),
(36, 'sharmina', 'ruejgjddj', 2),
(37, 'husna', 'jfgfhjggfhgd', 3),
(38, 'nisha', 'chali', 4),
(39, 'rinna', 'chamadan', 2),
(40, 'ninu', 'kt', 3),
(41, 'new test', 'hjbhkj', 13),
(42, 'new ', 'kjhlkj', 13),
(43, 'noushid', 'kjkj', 18);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE IF NOT EXISTS `students` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `address` varchar(45) DEFAULT NULL,
  `phone` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `gender` varchar(45) DEFAULT NULL COMMENT '	',
  `application_id` int(11) DEFAULT NULL,
  `cource_id` int(11) DEFAULT NULL,
  `department_id` int(11) DEFAULT NULL,
  `course_name` varchar(45) DEFAULT NULL,
  `department_name` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE IF NOT EXISTS `subject` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`id`, `name`) VALUES
(1, 'th'),
(2, 'th'),
(3, 'th'),
(4, 'th'),
(5, 'th'),
(6, 'th'),
(7, 'th'),
(8, 'th'),
(9, 'hh'),
(10, 'hyu'),
(11, 'gh'),
(12, 'english'),
(13, 'malayalam'),
(14, 'fd'),
(15, 'jg'),
(16, 'test subject');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `userlogin`
--

INSERT INTO `userlogin` (`id`, `user_name`, `password`, `student_id`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', '12'),
(2, 'sna', '127', '15'),
(3, 'jesh', '1301', '9');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `courses`
--
ALTER TABLE `courses`
  ADD CONSTRAINT `fk_courses_department1` FOREIGN KEY (`department_id`) REFERENCES `department` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `examresults`
--
ALTER TABLE `examresults`
  ADD CONSTRAINT `exam_type` FOREIGN KEY (`exam_type_id`) REFERENCES `examtypes` (`id`),
  ADD CONSTRAINT `student` FOREIGN KEY (`student_id`) REFERENCES `registrations` (`id`);

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
-- Constraints for table `semester`
--
ALTER TABLE `semester`
  ADD CONSTRAINT `fk_semester_cources1` FOREIGN KEY (`cources_id`) REFERENCES `courses` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `semester_subject`
--
ALTER TABLE `semester_subject`
  ADD CONSTRAINT `fk_semester_subject_semester1` FOREIGN KEY (`semester_id`) REFERENCES `semester` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_semester_subject_subject1` FOREIGN KEY (`subject_id`) REFERENCES `subject` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `staffattend`
--
ALTER TABLE `staffattend`
  ADD CONSTRAINT `staffid` FOREIGN KEY (`staff_id`) REFERENCES `staffs` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
