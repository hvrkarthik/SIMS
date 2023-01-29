-- phpMyAdmin SQL Dump
-- version 2.11.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 03, 2019 at 06:03 AM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sims`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `att_id` int(20) NOT NULL auto_increment,
  `stud_id` varchar(20) NOT NULL,
  `subject_id` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `time` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY  (`att_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `attendance`
--


-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `course_id` int(20) NOT NULL auto_increment,
  `name` varchar(25) NOT NULL,
  `desc` text NOT NULL,
  `fees` varchar(40) NOT NULL,
  PRIMARY KEY  (`course_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `course`
--


-- --------------------------------------------------------

--
-- Table structure for table `course_subject`
--

CREATE TABLE `course_subject` (
  `cs_id` int(20) NOT NULL auto_increment,
  `course_id` varchar(35) NOT NULL,
  `subject_id` varchar(20) NOT NULL,
  `semester` int(30) NOT NULL,
  PRIMARY KEY  (`cs_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `course_subject`
--


-- --------------------------------------------------------

--
-- Table structure for table `exam`
--

CREATE TABLE `exam` (
  `exam_id` int(15) NOT NULL auto_increment,
  `exam_name` varchar(100) NOT NULL,
  `min_marks` int(16) NOT NULL,
  `max_marks` int(15) NOT NULL,
  `exam_date` date NOT NULL,
  `course_id` int(15) NOT NULL,
  `semester` int(15) NOT NULL,
  `desc` varchar(500) NOT NULL,
  PRIMARY KEY  (`exam_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `exam`
--


-- --------------------------------------------------------

--
-- Table structure for table `exam_subject`
--

CREATE TABLE `exam_subject` (
  `es_id` int(15) NOT NULL auto_increment,
  `exam_id` varchar(15) NOT NULL,
  `subject_id` varchar(15) NOT NULL,
  `course_id` varchar(15) NOT NULL,
  `semester` int(15) NOT NULL,
  PRIMARY KEY  (`es_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `exam_subject`
--


-- --------------------------------------------------------

--
-- Table structure for table `fees`
--

CREATE TABLE `fees` (
  `fees_id` int(20) NOT NULL auto_increment,
  `stud_id` int(25) NOT NULL,
  `date` date NOT NULL,
  `amount` int(30) NOT NULL,
  `mode_of_payment` text NOT NULL,
  `mode_no` text NOT NULL,
  PRIMARY KEY  (`fees_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `fees`
--

