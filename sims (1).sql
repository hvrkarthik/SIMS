-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 06, 2019 at 01:30 PM
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
  `cs_id` int(20) NOT NULL,
  `date` date NOT NULL,
  `time` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY (`att_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`att_id`, `stud_id`, `cs_id`, `date`, `time`, `status`) VALUES
(1, '7', 1, '2019-02-27', '10', 'P'),
(2, '9', 3, '2019-03-06', '10', 'A'),
(3, '9', 3, '2019-03-07', '11', 'P'),
(4, '9', 3, '2019-03-05', '10', 'P');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `course_subject`
--

INSERT INTO `course_subject` (`cs_id`, `course_id`, `subject_id`, `semester`) VALUES
(1, '1', '1', 1),
(2, '1', '2', 3),
(3, '1', '3', 5),
(4, '1', '4', 5);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `exam`
--

INSERT INTO `exam` (`exam_id`, `exam_name`, `min_marks`, `max_marks`, `exam_date`, `course_id`, `semester`, `desc`) VALUES
(1, '1st IA', 20, 40, '2019-02-20', 1, 3, 'Internals'),
(2, '1st Internals', 20, 50, '2019-02-20', 1, 1, 'IA'),
(3, '2nd IA', 10, 40, '2019-03-15', 1, 5, 'Internals');

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
  `date` date NOT NULL,
  PRIMARY KEY (`es_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `exam_subject`
--

INSERT INTO `exam_subject` (`es_id`, `exam_id`, `subject_id`, `course_id`, `semester`, `date`) VALUES
(1, '1', '2', '1', 3, '2019-02-28'),
(2, '2', '1', '1', 1, '2019-02-28'),
(3, '3', '4', '1', 5, '2019-03-15'),
(4, '3', '3', '1', 5, '2019-03-16');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `fees`
--

INSERT INTO `fees` (`fees_id`, `stud_id`, `date`, `amount`, `mode_of_payment`, `mode_no`) VALUES
(1, 7, '2019-02-27', 10000, 'Cash', '123'),
(2, 9, '2019-03-06', 10000, 'Cash', '1'),
(3, 9, '2019-03-06', 5000, 'Cheque', '123456');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staff_id`, `fname`, `lname`, `dob`, `gender`, `p_address`, `mobile_no`, `email`, `quali`, `course_id`, `joining_date`, `photo_link`) VALUES
(1, 'Madhav', 'Rao', '1990-10-10', 'Male', 'Dharwad', 9743320840, 'madhav@gmail.com', 'BE', 1, '2018-05-05', 'aaa'),
(2, 'Pratik', 'Chikker', '1986-12-25', 'Male', 'Dharwad', 9886591563, 'pchikkeri@gmail.com', 'BE', 1, '2018-05-05', 'www'),
(3, 'Mahesh', 'M', '0000-00-00', 'Male', 'Dharwad', 9886591563, 'mahesh@gmail.com', 'MTech', 1, '2018-10-10', 'download.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `staff_subject`
--

CREATE TABLE IF NOT EXISTS `staff_subject` (
  `staff_subject_id` int(20) NOT NULL AUTO_INCREMENT,
  `staff_id` int(20) NOT NULL,
  `subject_id` int(20) NOT NULL,
  PRIMARY KEY (`staff_subject_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `staff_subject`
--

INSERT INTO `staff_subject` (`staff_subject_id`, `staff_id`, `subject_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 3),
(4, 3, 4);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `student_marks`
--

INSERT INTO `student_marks` (`sm_id`, `es_id`, `stud_id`, `marks`) VALUES
(3, 2, 3, 35),
(4, 2, 4, 40),
(5, 1, 8, 25),
(6, 3, 9, 18);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `student_master`
--

INSERT INTO `student_master` (`stud_id`, `fname`, `lname`, `dob`, `gender`, `p_address`, `phone_no`, `c_address`, `mobile_no`, `usn`, `email`, `religion`, `caste`, `category`, `gaurdian_name`, `gaurdian_contact`, `semester`, `fees`, `joining_date`, `photo_link`, `course_id`, `library`, `status`) VALUES
(7, 'pratap', 'K', '1990-10-10', 'M', 'DWD', '9876543210', 'dw', 9844442064, 'dwd1234', 'pratap@gmail.com', 'A', 'B', 'C', 'D', '9988776655', '1', 20000, '2018-05-05', '580b585b2edbce24c47b24c6.png', 1, 'Yes', 'Active'),
(8, 'Pradeep', 'K', '1986-06-15', 'M', 'Dharwad', '9743320840', 'Dharwad', 9743320840, 'p12345', 'pchikkeri@gmail.com', 'A', 'B', 'C', 'D', '9988776655', '3', 25000, '2018-05-05', 'any-questions-png-3.png', 1, 'Yes', 'Active'),
(9, 'Mayur', 'A', '2000-10-10', 'Male', 'Dharwad', '9743320840', 'Dharwad', 9743320840, 'abcd123', 'mayur@gmail.com', 'A', 'B', 'C', 'M', '9743320840', '5', 20000, '2018-10-10', '15307172604701749372646.jpg', 1, 'Yes', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `student_subject`
--

CREATE TABLE IF NOT EXISTS `student_subject` (
  `ss_id` int(20) NOT NULL AUTO_INCREMENT,
  `stud_id` int(20) NOT NULL,
  `subject_id` int(20) NOT NULL,
  PRIMARY KEY (`ss_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `student_subject`
--

INSERT INTO `student_subject` (`ss_id`, `stud_id`, `subject_id`) VALUES
(1, 7, 1),
(2, 8, 2),
(3, 9, 3),
(4, 9, 4);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`subject_id`, `sub_name`, `desc`, `no_of_hours`, `credits`) VALUES
(1, 'C', 'C Programming', '40', '5'),
(2, 'CPP', 'C Plus Plus', '40', '5'),
(3, 'DBMS', 'Database Management System', '40', '5'),
(4, 'CN', 'Computer networks', '40', '10');

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
('admin', '123456', 'admin', '', '', 'active'),
('abcd123', '8618516653', 'student', 'My registered Email Id', 'pratap@gmail.com', 'Active'),
('dwd1234', '9844442064', 'student', 'My registered Email Id', 'pratap@gmail.com', 'Active'),
('p12345', '9743320840', 'student', 'My registered Email Id', 'pchikkeri@gmail.com', 'Active'),
('mahesh@gmail.com', '9886591563', 'staff', 'My Date of Birth', '198510-10', 'active'),
('abcd123', '9743320840', 'student', 'My registered Email Id', 'mayur@gmail.com', 'Active');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
