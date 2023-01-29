-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 25, 2019 at 05:10 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sims`
--
CREATE DATABASE IF NOT EXISTS `sims` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `sims`;

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE IF NOT EXISTS `attendance` (
  `att_id` int(20) NOT NULL AUTO_INCREMENT,
  `stud_id` varchar(20) NOT NULL,
  `subject_id` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `time` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY (`att_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE IF NOT EXISTS `course` (
  `course_id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(25) NOT NULL,
  `desc` text NOT NULL,
  `fees` varchar(40) NOT NULL,
  PRIMARY KEY (`course_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `name`, `desc`, `fees`) VALUES
(1, 'BCA', 'Bachelor of Computer Application', '30000'),
(2, 'BBA', 'Bachelor of Business Administration', '35000');

-- --------------------------------------------------------

--
-- Table structure for table `course_subject`
--

CREATE TABLE IF NOT EXISTS `course_subject` (
  `cs_id` int(20) NOT NULL AUTO_INCREMENT,
  `course_id` varchar(35) NOT NULL,
  `subject_id` varchar(20) NOT NULL,
  `semester` int(30) NOT NULL,
  PRIMARY KEY (`cs_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `course_subject`
--

INSERT INTO `course_subject` (`cs_id`, `course_id`, `subject_id`, `semester`) VALUES
(1, '1', '1', 1),
(2, '1', '2', 3),
(3, '1', '3', 5);

-- --------------------------------------------------------

--
-- Table structure for table `exam`
--

CREATE TABLE IF NOT EXISTS `exam` (
  `exam_id` int(15) NOT NULL AUTO_INCREMENT,
  `exam_name` varchar(100) NOT NULL,
  `min_marks` int(16) NOT NULL,
  `max_marks` int(15) NOT NULL,
  `exam_date` date NOT NULL,
  `course_id` int(15) NOT NULL,
  `semester` int(15) NOT NULL,
  `desc` varchar(500) NOT NULL,
  PRIMARY KEY (`exam_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `exam`
--

INSERT INTO `exam` (`exam_id`, `exam_name`, `min_marks`, `max_marks`, `exam_date`, `course_id`, `semester`, `desc`) VALUES
(1, '1st IA', 20, 40, '2019-02-20', 1, 3, 'Internals');

-- --------------------------------------------------------

--
-- Table structure for table `exam_subject`
--

CREATE TABLE IF NOT EXISTS `exam_subject` (
  `es_id` int(15) NOT NULL AUTO_INCREMENT,
  `exam_id` varchar(15) NOT NULL,
  `subject_id` varchar(15) NOT NULL,
  `course_id` varchar(15) NOT NULL,
  `semester` int(15) NOT NULL,
  PRIMARY KEY (`es_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `fees`
--

CREATE TABLE IF NOT EXISTS `fees` (
  `fees_id` int(20) NOT NULL AUTO_INCREMENT,
  `stud_id` int(25) NOT NULL,
  `date` date NOT NULL,
  `amount` int(30) NOT NULL,
  `mode_of_payment` text NOT NULL,
  `mode_no` text NOT NULL,
  PRIMARY KEY (`fees_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE IF NOT EXISTS `staff` (
  `staff_id` int(20) NOT NULL AUTO_INCREMENT,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(20) NOT NULL,
  `p_address` varchar(200) NOT NULL,
  `mobile_no` bigint(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `quali` varchar(50) NOT NULL,
  `course_id` int(20) NOT NULL,
  `joining_date` varchar(20) NOT NULL,
  `photo_link` varchar(500) NOT NULL,
  PRIMARY KEY (`staff_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staff_id`, `fname`, `lname`, `dob`, `gender`, `p_address`, `mobile_no`, `email`, `quali`, `course_id`, `joining_date`, `photo_link`) VALUES
(1, 'Madhav', 'Rao', '1990-10-10', 'Male', 'Dharwad', 9743320840, 'madhav@gmail.com', 'BE', 1, '2018-05-05', 'aaa'),
(2, 'Pratik', 'Chikker', '1986-12-25', 'Male', 'Dharwad', 9886591563, 'pchikkeri@gmail.com', 'BE', 1, '2018-05-05', 'www');

-- --------------------------------------------------------

--
-- Table structure for table `staff_subject`
--

CREATE TABLE IF NOT EXISTS `staff_subject` (
  `staff_subject_id` int(20) NOT NULL AUTO_INCREMENT,
  `staff_id` int(20) NOT NULL,
  `subject_id` int(20) NOT NULL,
  PRIMARY KEY (`staff_subject_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `staff_subject`
--

INSERT INTO `staff_subject` (`staff_subject_id`, `staff_id`, `subject_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 3);

-- --------------------------------------------------------

--
-- Table structure for table `student_marks`
--

CREATE TABLE IF NOT EXISTS `student_marks` (
  `sm_id` int(20) NOT NULL AUTO_INCREMENT,
  `es_id` int(20) NOT NULL,
  `stud_id` int(20) NOT NULL,
  `marks` int(20) NOT NULL,
  PRIMARY KEY (`sm_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `student_master`
--

CREATE TABLE IF NOT EXISTS `student_master` (
  `stud_id` int(20) NOT NULL AUTO_INCREMENT,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(20) NOT NULL,
  `p_address` varchar(200) NOT NULL,
  `phone_no` varchar(30) NOT NULL,
  `c_address` varchar(200) NOT NULL,
  `mobile_no` bigint(30) NOT NULL,
  `usn` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `religion` varchar(50) NOT NULL,
  `caste` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL,
  `gaurdian_name` varchar(50) NOT NULL,
  `gaurdian_contact` varchar(30) NOT NULL,
  `semester` varchar(20) NOT NULL,
  `fees` int(20) NOT NULL,
  `joining_date` date NOT NULL,
  `photo_link` varchar(1000) NOT NULL,
  `course_id` int(20) NOT NULL,
  `library` varchar(20) NOT NULL,
  `status` varchar(100) NOT NULL,
  PRIMARY KEY (`stud_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `student_subject`
--

CREATE TABLE IF NOT EXISTS `student_subject` (
  `ss_id` int(20) NOT NULL AUTO_INCREMENT,
  `stud_id` int(20) NOT NULL,
  `subject_id` int(20) NOT NULL,
  PRIMARY KEY (`ss_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE IF NOT EXISTS `subject` (
  `subject_id` int(20) NOT NULL AUTO_INCREMENT,
  `sub_name` varchar(100) NOT NULL,
  `desc` varchar(500) NOT NULL,
  `no_of_hours` varchar(30) NOT NULL,
  `credits` varchar(20) NOT NULL,
  PRIMARY KEY (`subject_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`subject_id`, `sub_name`, `desc`, `no_of_hours`, `credits`) VALUES
(1, 'C', 'C Programming', '40', '5'),
(2, 'CPP', 'C Plus Plus', '40', '5'),
(3, 'DBMS', 'Database Management System', '40', '5');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `usertype` varchar(50) NOT NULL,
  `hintq` varchar(200) NOT NULL,
  `hinta` varchar(200) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `usertype`, `hintq`, `hinta`, `status`) VALUES
('pchikkeri@gmail.com', '9886591563', 'staff', 'My Date of Birth', '1986-12-25', 'active'),
('admin', 'admin123', 'admin', '', '', 'active');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
