-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 23, 2022 at 08:56 AM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tracking_details`
--

-- --------------------------------------------------------

--
-- Table structure for table `track`
--

DROP TABLE IF EXISTS `track`;
CREATE TABLE IF NOT EXISTS `track` (
  `Tracking_id` int(255) NOT NULL AUTO_INCREMENT,
  `Tracking_number` varchar(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Location` varchar(255) NOT NULL,
  `Status` varchar(255) NOT NULL,
  `Ship_date` varchar(255) NOT NULL,
  `Expected_ship_date` varchar(255) NOT NULL,
  PRIMARY KEY (`Tracking_id`)
) ENGINE=MyISAM AUTO_INCREMENT=123456790 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `track`
--

INSERT INTO `track` (`Tracking_id`, `Tracking_number`, `Name`, `Location`, `Status`, `Ship_date`, `Expected_ship_date`) VALUES
(1234678, 'MYMP0001234789', 'Jackie Liew', 'No.44, Jalan Desa Melur 4/1, Taman Bandar Connaught, 56000 Cheras, Kuala Lumpur, Malaysia', 'Pending', '2022-3-20', '2022-5-25'),
(9084587, 'TH1034AB2FH9', 'Adam Chua', 'No.66, Jalan Kenari, 43000 Kajang, Selangor, Malaysia', 'Delivered', '2022-2-26', '2022-3-30'),
(123456789, 'TH4566546672', 'Jack Thum', 'C31-1, Bukit Jalil, 57000 Kuala Lumpur, Federal Territory of Kuala Lumpur', 'Shipped', '2022-5-10', '2022-10-20');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
