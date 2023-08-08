-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 21, 2022 at 05:37 PM
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
-- Database: `international_shipping`
--

-- --------------------------------------------------------

--
-- Table structure for table `shipping_detail`
--

DROP TABLE IF EXISTS `shipping_detail`;
CREATE TABLE IF NOT EXISTS `shipping_detail` (
  `fullname` varchar(100) NOT NULL,
  `phonenumber` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(255) NOT NULL,
  `country` enum('brunei','singapore','thailand','japen','korea','taiwan','united_states','england','france') NOT NULL,
  `addresstype` enum('home','office') NOT NULL,
  `shippingpropose` enum('personal','business') NOT NULL,
  `producttype` enum('document','parcel') NOT NULL,
  `weight` varchar(5) NOT NULL,
  `quantity` int(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shipping_detail`
--

INSERT INTO `shipping_detail` (`fullname`, `phonenumber`, `email`, `address`, `country`, `addresstype`, `shippingpropose`, `producttype`, `weight`, `quantity`) VALUES
('thum', '123789', 'thum@gmail.com', '112,sdsdj', 'singapore', 'office', 'business', 'document', '15.5', 10);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
