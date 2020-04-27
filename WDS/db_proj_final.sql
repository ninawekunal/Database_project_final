-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3305
-- Generation Time: Apr 27, 2020 at 05:24 AM
-- Server version: 8.0.18
-- PHP Version: 7.3.12

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

-- --------------------------------------------------------

--
-- Table structure for table `auto_ins`
--

DROP TABLE IF EXISTS `auto_ins`;
CREATE TABLE IF NOT EXISTS `auto_ins` (
  `ins_id` int(11) NOT NULL AUTO_INCREMENT,
  `policy_name` varchar(50) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `premium_amt` bigint(13) NOT NULL,
  `status` varchar(1) NOT NULL DEFAULT 'C',
  `policy_desc` varchar(150) NOT NULL,
  PRIMARY KEY (`ins_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `auto_ins_payments`
--

DROP TABLE IF EXISTS `auto_ins_payments`;
CREATE TABLE IF NOT EXISTS `auto_ins_payments` (
  `payment_id` int(11) NOT NULL AUTO_INCREMENT,
  `due_date` date NOT NULL,
  `payment_type` varchar(6) NOT NULL DEFAULT 'Check',
  `auto_ins_id` int(11) NOT NULL COMMENT 'Foreign key giving all info about the insurance',
  `status` int(1) NOT NULL DEFAULT '0' COMMENT '0 means payment not done',
  PRIMARY KEY (`payment_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cust_auto_insurances`
--

DROP TABLE IF EXISTS `cust_auto_insurances`;
CREATE TABLE IF NOT EXISTS `cust_auto_insurances` (
  `auto_ins_id` int(11) NOT NULL AUTO_INCREMENT,
  `ins_id` int(11) NOT NULL,
  `cust_id` int(11) NOT NULL,
  `vehicle_id` int(11) NOT NULL,
  `total_amount` bigint(13) NOT NULL,
  `payment_type` varchar(1) NOT NULL DEFAULT 'M' COMMENT 'D, M, Q, Y options, D means Daily',
  PRIMARY KEY (`auto_ins_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cust_details`
--

DROP TABLE IF EXISTS `cust_details`;
CREATE TABLE IF NOT EXISTS `cust_details` (
  `cust_id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `middle_name` varchar(30) DEFAULT NULL,
  `last_name` varchar(30) NOT NULL,
  `password` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `address` varchar(150) DEFAULT NULL,
  `gender` varchar(1) DEFAULT 'M',
  `marital_status` varchar(1) NOT NULL DEFAULT 'S',
  `cust_type` varchar(1) NOT NULL DEFAULT 'H',
  PRIMARY KEY (`cust_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `cust_details`
--

INSERT INTO `cust_details` (`cust_id`, `email`, `first_name`, `middle_name`, `last_name`, `password`, `address`, `gender`, `marital_status`, `cust_type`) VALUES
(1, 'ninawekunal@gmail.com', 'Kunal', NULL, 'Ninawe', '81dc9bdb52d04dc20036dbd8313ed055', ' New YOrk', 'M', 'S', 'H'),
(2, 'ninawekunal3@gmail.com', 'Kunal', NULL, 'Ninawe', 'd93591bdf7860e1e4ee2fca799911215', ' New YOrk', 'M', 'S', 'A'),
(6, 'kvn238@nyu.edu', 'Kunal', 'Vijay', 'Ninawe', '81dc9bdb52d04dc20036dbd8313ed055', '409, Church Ave, Brooklyn.', 'M', 'S', 'H');

-- --------------------------------------------------------

--
-- Table structure for table `cust_home_insurances`
--

DROP TABLE IF EXISTS `cust_home_insurances`;
CREATE TABLE IF NOT EXISTS `cust_home_insurances` (
  `home_ins_id` int(11) NOT NULL AUTO_INCREMENT,
  `cust_id` int(11) NOT NULL,
  `ins_id` int(11) NOT NULL,
  `home_id` int(11) NOT NULL,
  `total_amount` bigint(13) NOT NULL,
  `payment_type` varchar(1) NOT NULL DEFAULT 'M' COMMENT 'D, M, Q, Y options, D means Daily',
  PRIMARY KEY (`home_ins_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `drivers`
--

DROP TABLE IF EXISTS `drivers`;
CREATE TABLE IF NOT EXISTS `drivers` (
  `driver_id` int(11) NOT NULL AUTO_INCREMENT,
  `vehicle_id` int(11) NOT NULL,
  `license_no` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `birth_date` date NOT NULL,
  PRIMARY KEY (`driver_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `home_details`
--

DROP TABLE IF EXISTS `home_details`;
CREATE TABLE IF NOT EXISTS `home_details` (
  `home_id` int(11) NOT NULL AUTO_INCREMENT,
  `cust_id` int(11) NOT NULL COMMENT 'Foreign Key coming from cust_details table',
  `purchase_date` date NOT NULL,
  `purchase_value` bigint(13) NOT NULL,
  `area_sq_feet` float NOT NULL,
  `home_type` varchar(1) NOT NULL DEFAULT 'S' COMMENT 'S,M,C,T possible values',
  `is_rent` int(1) NOT NULL DEFAULT '0' COMMENT '0 means not rent',
  `auto_fire_noti` int(1) NOT NULL DEFAULT '0' COMMENT '0 means not enabled',
  `home_security` int(1) NOT NULL DEFAULT '0' COMMENT '0 means not enabled',
  `swimming_pool` varchar(2) DEFAULT NULL,
  `basement` int(1) NOT NULL DEFAULT '0' COMMENT '0 means not enabled',
  PRIMARY KEY (`home_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `home_ins`
--

DROP TABLE IF EXISTS `home_ins`;
CREATE TABLE IF NOT EXISTS `home_ins` (
  `ins_id` int(11) NOT NULL AUTO_INCREMENT,
  `policy_name` varchar(50) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `premium_amt` bigint(13) NOT NULL,
  `status` varchar(1) NOT NULL DEFAULT 'C',
  `policy_desc` varchar(150) NOT NULL,
  PRIMARY KEY (`ins_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `home_ins_payments`
--

DROP TABLE IF EXISTS `home_ins_payments`;
CREATE TABLE IF NOT EXISTS `home_ins_payments` (
  `payment_id` int(11) NOT NULL AUTO_INCREMENT,
  `due_date` date NOT NULL,
  `payment_type` varchar(6) NOT NULL DEFAULT 'Check',
  `home_ins_id` int(11) NOT NULL COMMENT 'Foreign key giving all info about the insurance',
  `status` int(1) NOT NULL DEFAULT '0' COMMENT '0 means payment not done',
  PRIMARY KEY (`payment_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `vehicle`
--

DROP TABLE IF EXISTS `vehicle`;
CREATE TABLE IF NOT EXISTS `vehicle` (
  `vehicle_id` int(11) NOT NULL AUTO_INCREMENT,
  `vehicle_type` varchar(30) NOT NULL DEFAULT 'CAR' COMMENT 'Car, Truck, Bike',
  `identification_no` varchar(15) NOT NULL,
  `make` varchar(30) NOT NULL COMMENT 'Name of the company',
  `model` varchar(30) NOT NULL COMMENT 'Model of the vehicle',
  `year` int(4) NOT NULL,
  `status` varchar(1) NOT NULL DEFAULT 'O' COMMENT 'L, F, O possible options',
  PRIMARY KEY (`vehicle_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
