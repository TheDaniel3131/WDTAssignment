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
-- Database: `domestic_shipping`
--

-- --------------------------------------------------------

--
-- Table structure for table `shipping_detail`
--

DROP TABLE IF EXISTS `shipping_detail`;
CREATE TABLE IF NOT EXISTS `shipping_detail` (
  `fullname` varchar(100) NOT NULL,
  `phonenumber` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(255) NOT NULL,
  `addresstype` enum('home','office') NOT NULL,
  `shippingtype` enum('one-time','standard','multiple') NOT NULL,
  `producttype` enum('document','parcel') NOT NULL,
  `weight` varchar(6) NOT NULL,
  `quantity` int(3) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shipping_detail`
--

INSERT INTO `shipping_detail` (`fullname`, `phonenumber`, `email`, `address`, `addresstype`, `shippingtype`, `producttype`, `weight`, `quantity`) VALUES
('Jackin Fu', '123456789', 'jackin@gmail.com', 'No.123, Taman ABC, Jalan ABC, fdfd', 'home', 'one-time', 'parcel', '2', 1),
('Jackin Fu', '123456789', 'jackin@gmail.com', 'No.123, Taman ABC, Jalan ABC, fdfd', 'home', 'one-time', 'parcel', '2', 0),
('Jackin Fu', '123456789', 'jackin@gmail.com', 'No.123, Taman ABC, Jalan ABC, fdfd', 'home', 'one-time', 'parcel', '2.5', 1),
('dsd', '2', 's@sds', 'dfdf', 'home', 'one-time', 'document', '12.5', 1),
('Jackin Fu', '123456', '121@sas', '123,sdsdf', 'home', 'multiple', 'document', '2.5', 3),
('123', '424', '123@gmail.com', '424', 'home', 'one-time', 'document', '2.5', 1),
('123', '424', '123@gmail.com', '424', 'home', 'one-time', 'document', '2.5', 1),
('a', '1', 'a@d', '1', 'home', 'one-time', 'document', '1', 1),
('a', '1', 'a@d', '1', 'home', 'one-time', 'document', '1', 1),
('a', '1', 'a@d', '1', 'home', 'one-time', 'document', '1', 1),
('ghjg', '123123', 'dd@fdf', '12dfddf', 'home', 'one-time', 'document', '3', 3);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
