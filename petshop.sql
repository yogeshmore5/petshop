-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 22, 2015 at 07:36 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `petshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `pets`
--

CREATE TABLE IF NOT EXISTS `pets` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `type` varchar(25) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `pets`
--

INSERT INTO `pets` (`id`, `type`, `created_at`, `updated_at`) VALUES
(1, 'Cat', '2015-08-22 15:41:06', '2015-08-22 15:41:06'),
(2, 'Dog', '2015-08-22 16:05:36', '2015-08-22 16:05:36'),
(3, 'Tortoise', '2015-08-22 16:05:54', '2015-08-22 16:05:54'),
(4, 'Snake', '2015-08-22 16:22:28', '2015-08-22 16:22:28');

-- --------------------------------------------------------

--
-- Table structure for table `pet_service`
--

CREATE TABLE IF NOT EXISTS `pet_service` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `pet_id` tinyint(4) NOT NULL,
  `service_id` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `pet_id` (`pet_id`),
  KEY `service_id` (`service_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `pet_service`
--

INSERT INTO `pet_service` (`id`, `pet_id`, `service_id`) VALUES
(1, 1, 1),
(4, 1, 2),
(5, 2, 2),
(6, 2, 1),
(7, 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE IF NOT EXISTS `services` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `type` varchar(25) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `type`, `created_at`, `updated_at`) VALUES
(1, 'Bath', '2015-08-22 15:41:26', '2015-08-22 15:41:26'),
(2, 'Pedicure', '2015-08-22 16:04:48', '2015-08-22 16:04:48');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pet_service`
--
ALTER TABLE `pet_service`
  ADD CONSTRAINT `pet_service_ibfk_2` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`),
  ADD CONSTRAINT `pet_service_ibfk_1` FOREIGN KEY (`pet_id`) REFERENCES `pets` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
