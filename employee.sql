-- phpMyAdmin SQL Dump
-- version 2.11.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 26, 2017 at 04:57 AM
-- Server version: 5.0.51
-- PHP Version: 5.2.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `employee`
--

-- --------------------------------------------------------

--
-- Table structure for table `emp_details`
--

CREATE TABLE IF NOT EXISTS `emp_details` (
  `EmpId` varchar(50) NOT NULL,
  `FirstName` varchar(50) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `Gender` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `ContactNo` varchar(50) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Position` varchar(50) NOT NULL,
  PRIMARY KEY  (`EmpId`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emp_details`
--

INSERT INTO `emp_details` (`EmpId`, `FirstName`, `LastName`, `Gender`, `Email`, `ContactNo`, `Address`, `Position`) VALUES
('E123', 'Miten', 'Solanki', 'Male', 'mitensolanki@gmail.com', '8759846735', 'Mumbai', 'Developer'),
('E124', 'Saurabh   ', 'Tripathi', 'Male', 'saurabhtripathi@gmail.com', '9856735674', 'Mumbai', 'Developer'),
('E125', 'Deepa', 'Turshani', 'Female', 'deepaturshani@gmail.com', '8957831190', 'Mumbai', 'Developer'),
('E126', 'Rohini', 'Yeddili', 'Female', 'rohiniyedelli@gmail.com', '9000578356', 'Mumbai', 'Developer');
