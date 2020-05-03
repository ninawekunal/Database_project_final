-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3305
-- Generation Time: May 03, 2020 at 01:32 AM
-- Server version: 8.0.18
-- PHP Version: 7.3.12

SET FOREIGN_KEY_CHECKS=0;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_proj_final`
--
CREATE DATABASE IF NOT EXISTS `db_proj_final` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `db_proj_final`;

-- --------------------------------------------------------

--
-- Table structure for table `auto_ins`
--

DROP TABLE IF EXISTS `auto_ins`;
CREATE TABLE IF NOT EXISTS `auto_ins` (
  `ainsid` int(11) NOT NULL AUTO_INCREMENT,
  `cust_id` int(11) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `total_amount` bigint(13) NOT NULL,
  `status` varchar(1) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT 'C',
  PRIMARY KEY (`ainsid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `auto_ins_payments`
--

DROP TABLE IF EXISTS `auto_ins_payments`;
CREATE TABLE IF NOT EXISTS `auto_ins_payments` (
  `payment_id` int(11) NOT NULL AUTO_INCREMENT,
  `due_date` date NOT NULL,
  `payment_type` varchar(6) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Check',
  `auto_ins_id` int(11) NOT NULL COMMENT 'Foreign key giving all info about the insurance',
  `status` int(1) NOT NULL DEFAULT '0' COMMENT '0 means payment not done',
  PRIMARY KEY (`payment_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cust_details`
--

DROP TABLE IF EXISTS `cust_details`;
CREATE TABLE IF NOT EXISTS `cust_details` (
  `cust_id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `first_name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `middle_name` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gender` varchar(1) COLLATE utf8_unicode_ci DEFAULT 'M',
  `marital_status` varchar(1) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'S',
  `cust_type` varchar(1) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'H',
  PRIMARY KEY (`cust_id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cust_details`
--

INSERT INTO `cust_details` (`cust_id`, `email`, `first_name`, `middle_name`, `last_name`, `password`, `address`, `gender`, `marital_status`, `cust_type`) VALUES
(1, 'ninawekunal@gmail.com', 'Kunal', '', 'Ninawe', '81dc9bdb52d04dc20036dbd8313ed055', 'New York', 'M', 'S', 'H'),
(2, 'ninawekunal3@gmail.com', 'Kunal', NULL, 'Ninawe', 'd93591bdf7860e1e4ee2fca799911215', ' New YOrk', 'M', 'S', 'A'),
(6, 'kvn238@nyu.edu', 'Kunal', 'Vijay', 'Ninawe', '81dc9bdb52d04dc20036dbd8313ed055', '409, Church Ave, Brooklyn.', 'M', 'S', 'H'),
(8, 'xyz@gmail.com', 'XYZ', 'ABC', 'EFG', '81dc9bdb52d04dc20036dbd8313ed055', 'New Jersey', 'M', 'W', 'H'),
(9, 'cmorebutts@xmail.com', 'Seymore', NULL, 'Butz', '0b9a54438fba2dc0d39be8f7c6c71a58', NULL, 'M', 'S', 'H');

-- --------------------------------------------------------

--
-- Table structure for table `drivers`
--

DROP TABLE IF EXISTS `drivers`;
CREATE TABLE IF NOT EXISTS `drivers` (
  `driver_id` int(11) NOT NULL AUTO_INCREMENT,
  `vehicle_id` int(11) NOT NULL,
  `license_no` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `birth_date` date NOT NULL,
  PRIMARY KEY (`driver_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `home_details`
--

DROP TABLE IF EXISTS `home_details`;
CREATE TABLE IF NOT EXISTS `home_details` (
  `home_id` int(11) NOT NULL AUTO_INCREMENT,
  `cust_id` int(11) NOT NULL,
  `hinsid` int(11) NOT NULL DEFAULT '0',
  `location` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `purchase_date` date NOT NULL,
  `purchase_value` bigint(13) NOT NULL,
  `area_sq_feet` float NOT NULL,
  `home_type` varchar(1) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT 'S',
  `auto_fire_noti` int(1) NOT NULL DEFAULT '0',
  `home_security` int(1) NOT NULL DEFAULT '0',
  `swimming_pool` varchar(4) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `basement` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`home_id`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `home_details`
--

INSERT INTO `home_details` (`home_id`, `cust_id`, `hinsid`, `location`, `purchase_date`, `purchase_value`, `area_sq_feet`, `home_type`, `auto_fire_noti`, `home_security`, `swimming_pool`, `basement`) VALUES
(1, 1, 4, 'New York', '2020-04-15', 250000, 1000.5, 'S', 1, 0, 'U', 1),
(13, 1, 4, 'New Jersey', '2020-04-08', 120100, 1212, 'M', 0, 0, 'O', 1),
(11, 1, 5, 'Hoboken', '2020-04-15', 400000, 2010, 'M', 0, 0, 'M', 0),
(16, 1, 3, 'Texas', '2020-05-01', 100000, 800, 'S', 1, 1, 'nu', 0),
(23, 1, 3, 'California', '2020-05-02', 120000, 1200, 'S', 1, 1, 'U', 1);

-- --------------------------------------------------------

--
-- Table structure for table `home_ins`
--

DROP TABLE IF EXISTS `home_ins`;
CREATE TABLE IF NOT EXISTS `home_ins` (
  `hinsid` int(11) NOT NULL AUTO_INCREMENT,
  `cust_id` int(11) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `total_amount` bigint(13) NOT NULL,
  `status` varchar(1) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'C',
  PRIMARY KEY (`hinsid`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `home_ins`
--

INSERT INTO `home_ins` (`hinsid`, `cust_id`, `start_date`, `end_date`, `total_amount`, `status`) VALUES
(3, 1, '2020-05-02', '2021-05-02', 2675, 'C'),
(4, 1, '2020-05-02', '2021-05-02', 3989, 'C'),
(5, 1, '2020-05-02', '2022-05-02', 4288, 'C');

-- --------------------------------------------------------

--
-- Table structure for table `home_ins_payments`
--

DROP TABLE IF EXISTS `home_ins_payments`;
CREATE TABLE IF NOT EXISTS `home_ins_payments` (
  `payment_id` int(11) NOT NULL AUTO_INCREMENT,
  `due_date` date NOT NULL,
  `amount` bigint(20) DEFAULT NULL,
  `payment_type` varchar(6) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT 'Check',
  `hinsid` int(11) NOT NULL COMMENT 'Foreign key giving all info about the insurance',
  `status` int(1) NOT NULL DEFAULT '0' COMMENT '0 means payment not done',
  PRIMARY KEY (`payment_id`)
) ENGINE=MyISAM AUTO_INCREMENT=96 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `home_ins_payments`
--

INSERT INTO `home_ins_payments` (`payment_id`, `due_date`, `amount`, `payment_type`, `hinsid`, `status`) VALUES
(63, '2020-09-02', 3989, 'Check', 4, 0),
(62, '2020-08-02', 3989, 'Check', 4, 0),
(61, '2020-07-02', 3989, 'Check', 4, 0),
(60, '2020-06-02', 3989, 'Check', 4, 0),
(59, '2021-05-02', 2675, 'Check', 3, 0),
(58, '2021-04-02', 2675, 'Check', 3, 0),
(57, '2021-03-02', 2675, 'Check', 3, 0),
(56, '2021-02-02', 2675, 'Check', 3, 0),
(55, '2021-01-02', 2675, 'Check', 3, 0),
(54, '2020-12-02', 2675, 'Check', 3, 0),
(53, '2020-11-02', 2675, 'Check', 3, 0),
(52, '2020-10-02', 2675, 'Check', 3, 0),
(51, '2020-09-02', 2675, 'Check', 3, 0),
(50, '2020-08-02', 2675, 'Check', 3, 0),
(49, '2020-07-02', 2675, 'Check', 3, 0),
(48, '2020-06-02', 2675, 'Check', 3, 0),
(64, '2020-10-02', 3989, 'Check', 4, 0),
(65, '2020-11-02', 3989, 'Check', 4, 0),
(66, '2020-12-02', 3989, 'Check', 4, 0),
(67, '2021-01-02', 3989, 'Check', 4, 0),
(68, '2021-02-02', 3989, 'Check', 4, 0),
(69, '2021-03-02', 3989, 'Check', 4, 0),
(70, '2021-04-02', 3989, 'Check', 4, 0),
(71, '2021-05-02', 3989, 'Check', 4, 0),
(72, '2020-06-02', 4288, 'Check', 5, 0),
(73, '2020-07-02', 4288, 'Check', 5, 0),
(74, '2020-08-02', 4288, 'Check', 5, 0),
(75, '2020-09-02', 4288, 'Check', 5, 0),
(76, '2020-10-02', 4288, 'Check', 5, 0),
(77, '2020-11-02', 4288, 'Check', 5, 0),
(78, '2020-12-02', 4288, 'Check', 5, 0),
(79, '2021-01-02', 4288, 'Check', 5, 0),
(80, '2021-02-02', 4288, 'Check', 5, 0),
(81, '2021-03-02', 4288, 'Check', 5, 0),
(82, '2021-04-02', 4288, 'Check', 5, 0),
(83, '2021-05-02', 4288, 'Check', 5, 0),
(84, '2021-06-02', 4288, 'Check', 5, 0),
(85, '2021-07-02', 4288, 'Check', 5, 0),
(86, '2021-08-02', 4288, 'Check', 5, 0),
(87, '2021-09-02', 4288, 'Check', 5, 0),
(88, '2021-10-02', 4288, 'Check', 5, 0),
(89, '2021-11-02', 4288, 'Check', 5, 0),
(90, '2021-12-02', 4288, 'Check', 5, 0),
(91, '2022-01-02', 4288, 'Check', 5, 0),
(92, '2022-02-02', 4288, 'Check', 5, 0),
(93, '2022-03-02', 4288, 'Check', 5, 0),
(94, '2022-04-02', 4288, 'Check', 5, 0),
(95, '2022-05-02', 4288, 'Check', 5, 0);

-- --------------------------------------------------------

--
-- Table structure for table `vehicle`
--

DROP TABLE IF EXISTS `vehicle`;
CREATE TABLE IF NOT EXISTS `vehicle` (
  `vehicle_id` int(11) NOT NULL AUTO_INCREMENT,
  `vehicle_type` varchar(30) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'CAR' COMMENT 'Car, Truck, Bike',
  `identification_no` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `make` varchar(30) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Name of the company',
  `model` varchar(30) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Model of the vehicle',
  `year` int(4) NOT NULL,
  `status` varchar(1) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'O' COMMENT 'L, F, O possible options',
  PRIMARY KEY (`vehicle_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
SET FOREIGN_KEY_CHECKS=1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
