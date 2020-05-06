-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3305
-- Generation Time: May 06, 2020 at 05:04 AM
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
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cust_details`
--

INSERT INTO `cust_details` (`cust_id`, `email`, `first_name`, `middle_name`, `last_name`, `password`, `address`, `gender`, `marital_status`, `cust_type`) VALUES
(1, 'ninawekunal@gmail.com', 'Kunal', 'Vijay', 'Ninawe', 'e10adc3949ba59abbe56e057f20f883e', 'New York', 'M', 'S', 'H'),
(2, 'ninawekunal3@gmail.com', 'Kunal', NULL, 'Ninawe', 'e10adc3949ba59abbe56e057f20f883e', ' New YOrk', 'M', 'S', 'A'),
(6, 'kvn238@nyu.edu', 'Kunal', 'Vijay', 'Ninawe', 'e10adc3949ba59abbe56e057f20f883e', '409, Church Ave, Brooklyn.', 'M', 'S', 'H'),
(8, 'xyz@gmail.com', 'XYZ', 'ABC', 'EFG', 'e10adc3949ba59abbe56e057f20f883e', 'New Jersey', 'M', 'W', 'H'),
(9, 'cmorebutts@xmail.com', 'Seymore', NULL, 'Butz', '0b9a54438fba2dc0d39be8f7c6c71a58', NULL, 'M', 'S', 'H'),
(11, 'a@a.com', 'Kunal', NULL, 'Ninawe', 'e10adc3949ba59abbe56e057f20f883e', NULL, 'M', 'S', 'H'),
(12, 'sanjana@gmail.com', 'Sanjana', '', 'J', 'e610bc070b8eed06b6cae827d8d9772a', 'bayridge', 'F', 'S', 'H'),
(13, 'pulakmehta@gmail.com', 'Pulak', '', 'Mehta', 'e10adc3949ba59abbe56e057f20f883e', '', 'F', 'S', 'H');

-- --------------------------------------------------------

--
-- Table structure for table `drivers`
--

DROP TABLE IF EXISTS `drivers`;
CREATE TABLE IF NOT EXISTS `drivers` (
  `license_no` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `vehicle_id` int(11) NOT NULL,
  `name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `birth_date` date NOT NULL,
  PRIMARY KEY (`license_no`)
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
) ENGINE=MyISAM AUTO_INCREMENT=36 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `home_details`
--

INSERT INTO `home_details` (`home_id`, `cust_id`, `hinsid`, `location`, `purchase_date`, `purchase_value`, `area_sq_feet`, `home_type`, `auto_fire_noti`, `home_security`, `swimming_pool`, `basement`) VALUES
(1, 1, 4, 'New York', '2020-04-15', 250000, 1000.5, 'S', 1, 0, 'U', 1),
(13, 1, 4, 'New Jersey', '2020-04-08', 120100, 1212, 'M', 0, 0, 'O', 1),
(11, 1, 5, 'Hoboken', '2020-04-15', 400000, 2010, 'M', 0, 0, 'M', 0),
(16, 1, 3, 'Texas', '2020-05-01', 100000, 800, 'S', 1, 1, 'nu', 0),
(23, 1, 3, 'California', '2020-05-02', 120000, 1200, 'S', 1, 1, 'U', 1),
(24, 1, 6, 'CA', '2020-05-03', 120000, 2211, 'S', 1, 1, 'null', 1),
(25, 1, 8, 'Nevada', '2020-05-05', 100000, 1200, 'S', 1, 1, 'null', 1),
(26, 11, 9, 'NY', '2020-05-05', 120000, 1210, 'S', 1, 1, 'U', 1),
(27, 11, 9, 'CA', '2020-05-05', 12100, 1210, 'S', 1, 1, 'U', 1),
(28, 11, 9, 'TA', '2020-05-05', 120000, 1210, 'S', 1, 1, 'U', 1),
(29, 11, 9, 'IN', '2020-05-05', 300000, 1000, 'S', 1, 1, 'U', 1),
(30, 11, 9, 'Hoboken', '2020-05-15', 500000, 3000, 'S', 1, 1, 'U', 1),
(31, 11, 9, 'New Jersey', '2020-05-05', 100000, 1000, 'S', 1, 1, 'null', 1),
(32, 6, 10, 'NY', '2020-05-05', 100000, 1000, 'S', 1, 1, 'null', 1),
(33, 12, 11, 'bayridge', '1999-12-12', 120000, 1000, 'S', 1, 1, 'null', 0),
(34, 13, 12, 'New Delhi', '2021-06-05', 2453, 24, 'S', 1, 1, 'U', 1),
(35, 13, 12, 'new york', '1999-05-01', 1000000, 2000, 'C', 1, 0, 'I', 1);

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
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `home_ins`
--

INSERT INTO `home_ins` (`hinsid`, `cust_id`, `start_date`, `end_date`, `total_amount`, `status`) VALUES
(3, 1, '2020-05-02', '2021-05-02', 2675, 'C'),
(4, 1, '2020-05-02', '2021-05-02', 3989, 'C'),
(5, 1, '2020-05-02', '2022-05-02', 4288, 'C'),
(6, 1, '2020-05-03', '2021-05-03', 1572, 'C'),
(8, 1, '2020-05-05', '2021-05-05', 1239, 'C'),
(9, 11, '2020-05-05', '2021-05-05', 13823, 'C'),
(10, 6, '2020-05-06', '2021-05-06', 1217, 'C'),
(11, 12, '2020-05-06', '2025-05-06', 1452, 'C'),
(12, 13, '2020-05-06', '2021-05-06', 10438, 'C');

-- --------------------------------------------------------

--
-- Table structure for table `home_ins_payments`
--

DROP TABLE IF EXISTS `home_ins_payments`;
CREATE TABLE IF NOT EXISTS `home_ins_payments` (
  `payment_id` int(11) NOT NULL AUTO_INCREMENT,
  `payment_date` date DEFAULT NULL,
  `due_date` date NOT NULL,
  `amount` bigint(20) DEFAULT NULL,
  `payment_type` varchar(6) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT 'Check',
  `hinsid` int(11) NOT NULL COMMENT 'Foreign key giving all info about the insurance',
  `status` int(1) NOT NULL DEFAULT '0' COMMENT '0 means payment not done',
  PRIMARY KEY (`payment_id`)
) ENGINE=MyISAM AUTO_INCREMENT=234 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `home_ins_payments`
--

INSERT INTO `home_ins_payments` (`payment_id`, `payment_date`, `due_date`, `amount`, `payment_type`, `hinsid`, `status`) VALUES
(63, NULL, '2020-09-02', 3989, 'Check', 4, 0),
(62, NULL, '2020-08-02', 3989, 'Check', 4, 0),
(61, NULL, '2020-07-02', 3989, 'Check', 4, 0),
(60, NULL, '2020-06-02', 3989, 'Check', 4, 0),
(59, NULL, '2021-05-02', 2675, 'Check', 3, 0),
(58, NULL, '2021-04-02', 2675, 'Check', 3, 0),
(57, NULL, '2021-03-02', 2675, 'Check', 3, 0),
(56, NULL, '2021-02-02', 2675, 'Check', 3, 0),
(55, NULL, '2021-01-02', 2675, 'Check', 3, 0),
(54, NULL, '2020-12-02', 2675, 'Check', 3, 0),
(53, NULL, '2020-11-02', 2675, 'Check', 3, 0),
(52, NULL, '2020-10-02', 2675, 'Check', 3, 0),
(51, NULL, '2020-09-02', 2675, 'Check', 3, 0),
(50, NULL, '2020-08-02', 2675, 'Check', 3, 0),
(49, NULL, '2020-07-02', 2675, 'Check', 3, 0),
(48, NULL, '2020-06-02', 2675, 'Check', 3, 0),
(64, NULL, '2020-10-02', 3989, 'Check', 4, 0),
(65, NULL, '2020-11-02', 3989, 'Check', 4, 0),
(66, NULL, '2020-12-02', 3989, 'Check', 4, 0),
(67, NULL, '2021-01-02', 3989, 'Check', 4, 0),
(68, NULL, '2021-02-02', 3989, 'Check', 4, 0),
(69, NULL, '2021-03-02', 3989, 'Check', 4, 0),
(70, NULL, '2021-04-02', 3989, 'Check', 4, 0),
(71, NULL, '2021-05-02', 3989, 'Check', 4, 0),
(72, NULL, '2020-06-02', 4288, 'Check', 5, 0),
(73, NULL, '2020-07-02', 4288, 'Check', 5, 0),
(74, NULL, '2020-08-02', 4288, 'Check', 5, 0),
(75, NULL, '2020-09-02', 4288, 'Check', 5, 0),
(76, NULL, '2020-10-02', 4288, 'Check', 5, 0),
(77, NULL, '2020-11-02', 4288, 'Check', 5, 0),
(78, NULL, '2020-12-02', 4288, 'Check', 5, 0),
(79, NULL, '2021-01-02', 4288, 'Check', 5, 0),
(80, NULL, '2021-02-02', 4288, 'Check', 5, 0),
(81, NULL, '2021-03-02', 4288, 'Check', 5, 0),
(82, NULL, '2021-04-02', 4288, 'Check', 5, 0),
(83, NULL, '2021-05-02', 4288, 'Check', 5, 0),
(84, NULL, '2021-06-02', 4288, 'Check', 5, 0),
(85, NULL, '2021-07-02', 4288, 'Check', 5, 0),
(86, NULL, '2021-08-02', 4288, 'Check', 5, 0),
(87, NULL, '2021-09-02', 4288, 'Check', 5, 0),
(88, NULL, '2021-10-02', 4288, 'Check', 5, 0),
(89, NULL, '2021-11-02', 4288, 'Check', 5, 0),
(90, NULL, '2021-12-02', 4288, 'Check', 5, 0),
(91, NULL, '2022-01-02', 4288, 'Check', 5, 0),
(92, NULL, '2022-02-02', 4288, 'Check', 5, 0),
(93, NULL, '2022-03-02', 4288, 'Check', 5, 0),
(94, NULL, '2022-04-02', 4288, 'Check', 5, 0),
(95, NULL, '2022-05-02', 4288, 'Check', 5, 0),
(96, NULL, '2020-06-03', 1572, 'Check', 6, 0),
(97, NULL, '2020-07-03', 1572, 'Check', 6, 0),
(98, NULL, '2020-08-03', 1572, 'Check', 6, 0),
(99, NULL, '2020-09-03', 1572, 'Check', 6, 0),
(100, NULL, '2020-10-03', 1572, 'Check', 6, 0),
(101, NULL, '2020-11-03', 1572, 'Check', 6, 0),
(102, NULL, '2020-12-03', 1572, 'Check', 6, 0),
(103, NULL, '2021-01-03', 1572, 'Check', 6, 0),
(104, NULL, '2021-02-03', 1572, 'Check', 6, 0),
(105, NULL, '2021-03-03', 1572, 'Check', 6, 0),
(106, NULL, '2021-04-03', 1572, 'Check', 6, 0),
(107, NULL, '2021-05-03', 1572, 'Check', 6, 0),
(131, NULL, '2021-04-30', 1239, 'Check', 8, 0),
(130, NULL, '2021-03-31', 1239, 'Check', 8, 0),
(129, NULL, '2021-02-28', 1239, 'Check', 8, 0),
(128, NULL, '2021-01-31', 1239, 'Check', 8, 0),
(127, NULL, '2020-12-31', 1239, 'Check', 8, 0),
(126, NULL, '2020-11-30', 1239, 'Check', 8, 0),
(125, NULL, '2020-10-31', 1239, 'Check', 8, 0),
(124, NULL, '2020-09-30', 1239, 'Check', 8, 0),
(123, NULL, '2020-08-31', 1239, 'Check', 8, 0),
(122, NULL, '2020-07-31', 1239, 'Check', 8, 0),
(121, NULL, '2020-06-30', 1239, 'Check', 8, 0),
(120, '2020-05-05', '2020-05-31', 1239, 'Paypal', 8, 1),
(132, NULL, '2021-05-31', 1239, 'Check', 8, 0),
(133, '2020-05-05', '2020-04-20', 1239, 'Debit', 8, 1),
(134, '2020-05-05', '2020-05-31', 1476, 'Paypal', 9, 1),
(135, NULL, '2020-06-30', 13823, 'Check', 9, 0),
(136, NULL, '2020-07-31', 13823, 'Check', 9, 0),
(137, NULL, '2020-08-31', 13823, 'Check', 9, 0),
(138, NULL, '2020-09-30', 13823, 'Check', 9, 0),
(139, NULL, '2020-10-31', 13823, 'Check', 9, 0),
(140, NULL, '2020-11-30', 13823, 'Check', 9, 0),
(141, NULL, '2020-12-31', 13823, 'Check', 9, 0),
(142, NULL, '2021-01-31', 13823, 'Check', 9, 0),
(143, NULL, '2021-02-28', 13823, 'Check', 9, 0),
(144, NULL, '2021-03-31', 13823, 'Check', 9, 0),
(145, NULL, '2021-04-30', 13823, 'Check', 9, 0),
(146, NULL, '2021-05-31', 13823, 'Check', 9, 0),
(147, '2020-05-05', '2020-05-31', 1217, 'Paypal', 10, 1),
(148, NULL, '2020-06-30', 1217, 'Check', 10, 0),
(149, NULL, '2020-07-31', 1217, 'Check', 10, 0),
(150, NULL, '2020-08-31', 1217, 'Check', 10, 0),
(151, NULL, '2020-09-30', 1217, 'Check', 10, 0),
(152, NULL, '2020-10-31', 1217, 'Check', 10, 0),
(153, NULL, '2020-11-30', 1217, 'Check', 10, 0),
(154, NULL, '2020-12-31', 1217, 'Check', 10, 0),
(155, NULL, '2021-01-31', 1217, 'Check', 10, 0),
(156, NULL, '2021-02-28', 1217, 'Check', 10, 0),
(157, NULL, '2021-03-31', 1217, 'Check', 10, 0),
(158, NULL, '2021-04-30', 1217, 'Check', 10, 0),
(159, NULL, '2021-05-31', 1217, 'Check', 10, 0),
(160, '2020-05-05', '2020-05-31', 1452, 'Debit', 11, 1),
(161, NULL, '2020-06-30', 1452, 'Check', 11, 0),
(162, NULL, '2020-07-31', 1452, 'Check', 11, 0),
(163, NULL, '2020-08-31', 1452, 'Check', 11, 0),
(164, NULL, '2020-09-30', 1452, 'Check', 11, 0),
(165, NULL, '2020-10-31', 1452, 'Check', 11, 0),
(166, NULL, '2020-11-30', 1452, 'Check', 11, 0),
(167, NULL, '2020-12-31', 1452, 'Check', 11, 0),
(168, NULL, '2021-01-31', 1452, 'Check', 11, 0),
(169, NULL, '2021-02-28', 1452, 'Check', 11, 0),
(170, NULL, '2021-03-31', 1452, 'Check', 11, 0),
(171, NULL, '2021-04-30', 1452, 'Check', 11, 0),
(172, NULL, '2021-05-31', 1452, 'Check', 11, 0),
(173, NULL, '2021-06-30', 1452, 'Check', 11, 0),
(174, NULL, '2021-07-31', 1452, 'Check', 11, 0),
(175, NULL, '2021-08-31', 1452, 'Check', 11, 0),
(176, NULL, '2021-09-30', 1452, 'Check', 11, 0),
(177, NULL, '2021-10-31', 1452, 'Check', 11, 0),
(178, NULL, '2021-11-30', 1452, 'Check', 11, 0),
(179, NULL, '2021-12-31', 1452, 'Check', 11, 0),
(180, NULL, '2022-01-31', 1452, 'Check', 11, 0),
(181, NULL, '2022-02-28', 1452, 'Check', 11, 0),
(182, NULL, '2022-03-31', 1452, 'Check', 11, 0),
(183, NULL, '2022-04-30', 1452, 'Check', 11, 0),
(184, NULL, '2022-05-31', 1452, 'Check', 11, 0),
(185, NULL, '2022-06-30', 1452, 'Check', 11, 0),
(186, NULL, '2022-07-31', 1452, 'Check', 11, 0),
(187, NULL, '2022-08-31', 1452, 'Check', 11, 0),
(188, NULL, '2022-09-30', 1452, 'Check', 11, 0),
(189, NULL, '2022-10-31', 1452, 'Check', 11, 0),
(190, NULL, '2022-11-30', 1452, 'Check', 11, 0),
(191, NULL, '2022-12-31', 1452, 'Check', 11, 0),
(192, NULL, '2023-01-31', 1452, 'Check', 11, 0),
(193, NULL, '2023-02-28', 1452, 'Check', 11, 0),
(194, NULL, '2023-03-31', 1452, 'Check', 11, 0),
(195, NULL, '2023-04-30', 1452, 'Check', 11, 0),
(196, NULL, '2023-05-31', 1452, 'Check', 11, 0),
(197, NULL, '2023-06-30', 1452, 'Check', 11, 0),
(198, NULL, '2023-07-31', 1452, 'Check', 11, 0),
(199, NULL, '2023-08-31', 1452, 'Check', 11, 0),
(200, NULL, '2023-09-30', 1452, 'Check', 11, 0),
(201, NULL, '2023-10-31', 1452, 'Check', 11, 0),
(202, NULL, '2023-11-30', 1452, 'Check', 11, 0),
(203, NULL, '2023-12-31', 1452, 'Check', 11, 0),
(204, NULL, '2024-01-31', 1452, 'Check', 11, 0),
(205, NULL, '2024-02-29', 1452, 'Check', 11, 0),
(206, NULL, '2024-03-31', 1452, 'Check', 11, 0),
(207, NULL, '2024-04-30', 1452, 'Check', 11, 0),
(208, NULL, '2024-05-31', 1452, 'Check', 11, 0),
(209, NULL, '2024-06-30', 1452, 'Check', 11, 0),
(210, NULL, '2024-07-31', 1452, 'Check', 11, 0),
(211, NULL, '2024-08-31', 1452, 'Check', 11, 0),
(212, NULL, '2024-09-30', 1452, 'Check', 11, 0),
(213, NULL, '2024-10-31', 1452, 'Check', 11, 0),
(214, NULL, '2024-11-30', 1452, 'Check', 11, 0),
(215, NULL, '2024-12-31', 1452, 'Check', 11, 0),
(216, NULL, '2025-01-31', 1452, 'Check', 11, 0),
(217, NULL, '2025-02-28', 1452, 'Check', 11, 0),
(218, NULL, '2025-03-31', 1452, 'Check', 11, 0),
(219, NULL, '2025-04-30', 1452, 'Check', 11, 0),
(220, NULL, '2025-05-31', 1452, 'Check', 11, 0),
(221, '2020-05-06', '2020-05-31', 10438, 'Paypal', 12, 1),
(222, NULL, '2020-06-30', 10438, 'Check', 12, 0),
(223, NULL, '2020-07-31', 10438, 'Check', 12, 0),
(224, NULL, '2020-08-31', 10438, 'Check', 12, 0),
(225, NULL, '2020-09-30', 10438, 'Check', 12, 0),
(226, NULL, '2020-10-31', 10438, 'Check', 12, 0),
(227, NULL, '2020-11-30', 10438, 'Check', 12, 0),
(228, NULL, '2020-12-31', 10438, 'Check', 12, 0),
(229, NULL, '2021-01-31', 10438, 'Check', 12, 0),
(230, NULL, '2021-02-28', 10438, 'Check', 12, 0),
(231, NULL, '2021-03-31', 10438, 'Check', 12, 0),
(232, NULL, '2021-04-30', 10438, 'Check', 12, 0),
(233, NULL, '2021-05-31', 10438, 'Check', 12, 0);

-- --------------------------------------------------------

--
-- Table structure for table `vehicles`
--

DROP TABLE IF EXISTS `vehicles`;
CREATE TABLE IF NOT EXISTS `vehicles` (
  `vin` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `cust_id` int(11) NOT NULL,
  `vehicle_type` varchar(30) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'CAR' COMMENT 'Car, Truck, Bike',
  `make` varchar(30) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Name of the company',
  `model` varchar(30) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Model of the vehicle',
  `year` int(4) NOT NULL,
  `status` varchar(1) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'O' COMMENT 'L, F, O possible options',
  PRIMARY KEY (`vin`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `vehicles`
--

INSERT INTO `vehicles` (`vin`, `cust_id`, `vehicle_type`, `make`, `model`, `year`, `status`) VALUES
('1234', 1, 'Car', 'Toyota', 'Supra', 2019, 'O');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
