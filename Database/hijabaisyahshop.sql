-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2015 at 12:38 AM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hijabaisyahshop`
--
CREATE DATABASE IF NOT EXISTS `hijabaisyahshop` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `hijabaisyahshop`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `admin_username` varchar(50) DEFAULT NULL,
  `admin_password` varchar(50) DEFAULT NULL,
  `admin_level` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_username`, `admin_password`, `admin_level`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `email`, `phone`, `address`) VALUES
(1, 'hijababaisyahshop@gmail.com', '+6281-999-758-789', 'Jln. Bimo Kurdo');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE IF NOT EXISTS `customers` (
  `serial` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `email` varchar(80) COLLATE latin1_general_ci NOT NULL,
  `address` varchar(80) COLLATE latin1_general_ci NOT NULL,
  `phone` varchar(20) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`serial`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=10 ;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`serial`, `name`, `email`, `address`, `phone`) VALUES
(1, 'Aisyah Maharani', 'aisyah.bijaksana@gmail.com', 'Jl. Bima Kurda 55233 Yogyakarta Indonesia', '087873392883'),
(2, 'Macan Tutul', 'sdf', 'Yiigyajkarta', 'sw23423'),
(8, 'joyo', 'joyo@yahoo.com', 'Yogyakarta', '902384934'),
(9, 'obi', 'hghgfh@tggg.coo', 'gtredgfdgf', 'jhfhjgfjhfj'),
(7, 'agan', 'agan@yahoo.com', 'agan agan', '000000000'),
(5, 'Sujiwo tejo', 'sujiwotejo@yahoo.com', 'bandung bondowoso', '081992837738');

-- --------------------------------------------------------

--
-- Table structure for table `inbox`
--

CREATE TABLE IF NOT EXISTS `inbox` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `message` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `inbox`
--

INSERT INTO `inbox` (`id`, `name`, `email`, `message`) VALUES
(1, 'edi', 'test@yahoo.com', 'test sistem\r\n'),
(8, 'jghhh', 'hgvhghj@yahoo.com', 'hgvhgj');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `serial` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `customerid` int(11) NOT NULL,
  PRIMARY KEY (`serial`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=10 ;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`serial`, `date`, `customerid`) VALUES
(1, '2015-11-24', 1),
(2, '2015-11-25', 2),
(3, '2015-11-25', 3),
(4, '2015-11-25', 4),
(5, '2015-11-25', 5),
(6, '2015-11-25', 6),
(7, '2015-11-25', 7),
(8, '2015-11-26', 8),
(9, '2015-11-27', 9);

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE IF NOT EXISTS `order_detail` (
  `orderid` int(11) NOT NULL,
  `productid` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` (`orderid`, `productid`, `quantity`, `price`) VALUES
(1, 5, 1, 5),
(1, 4, 2, 40),
(2, 5, 1, 5),
(2, 4, 1, 40),
(3, 4, 2, 40),
(3, 6, 1, 299),
(6, 5, 2, 5),
(7, 3, 1, 50),
(7, 5, 1, 5),
(8, 2, 1, 80),
(8, 4, 1, 40),
(9, 6, 1, 45000),
(9, 4, 1, 40000);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `serial` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `description` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `price` float NOT NULL,
  `picture` varchar(80) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`serial`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=37 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`serial`, `name`, `description`, `price`, `picture`) VALUES
(31, 'ALLURE HIJAB', '  Our limited edition Allure Hijab features a mixture of tones, ranging from pink, black and grey.   Made from: 100% Polyester Georgette.  Approximate Size: 25" (64cm) x 75" (190cm) Colour may vary depending on individual monitor settings.', 60000, 'images/allure-hijab-115-detail-11.jpg'),
(32, 'BLACK FLORAL EMBELLI', ' This georgette hijab features beutiful handcrafted georgette flowers on one end of the hijab. Simply wrap around for a casual look or wear volumised for an occasional look.  - Approximately measures: 25" X 75"  - x 10 fabric flowers  Hand wash only', 55000, 'images/black-floral-embellished-hijab-120-detail-1.jpg'),
(33, 'MAROON REGAL PRINT H', '  Printed Hijab.  Made from: 100% Polyester Georgette.  Approximate Size: 25" (64cm) x 75" (190cm) Colour may vary depending on individual monitor settings.', 75000, 'images/maroon-regal-print-hijab-119-detail-1.jpg'),
(34, 'MINK SOFT GEORGETTE ', '  Our georgette hijabs are made from soft georgette fabric, allowing you to create various hijab styles ideal for any occasion. Being so versatile, they are a must have in every wardrobe! Pair our georgette hijabs up with one of our kaftans or signature a', 100000, 'images/mink-soft-georgette-hijab-113-detail-1.jpg'),
(35, 'MINK LIGHT MODAL HIJ', ' Our ''light'' modal hijabs are slightly lighter than our standard modal hijabs.  Our modal hijabs are perfect to wear throughout all seasons. They are light in weight, non-slip, have a soft texture, great for draping, and provide excellent coverage. Made f', 75000, 'images/mink-light-modal-hijab-111-detail-1.jpg'),
(36, 'BLACK & WHITE STRIPE', ' This limited edition georgette hijab features a black and white stripe print throughout the hijab. Pair the print up with shades of mustard, black, burgundy and tan for a modern look. Made from: 100% Polyester Georgette    Approximate Size: 25" (64cm) x ', 55000, 'images/black-white-stripe-hijab-117-detail-1.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
