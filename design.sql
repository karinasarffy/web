-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2017 at 04:30 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `design`
--

-- --------------------------------------------------------

--
-- Table structure for table `cursant`
--

CREATE TABLE IF NOT EXISTS `cursant` (
  `id_cursant` int(4) NOT NULL AUTO_INCREMENT,
  `nume` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `prenume` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `oras` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `tel` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `materie` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `nota` int(2) NOT NULL,
  `taxa` int(10) NOT NULL,
  `achitat` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `parola` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_cursant`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- Dumping data for table `cursant`
--

INSERT INTO `cursant` (`id_cursant`, `nume`, `prenume`, `oras`, `tel`, `email`, `materie`, `nota`, `taxa`, `achitat`, `parola`) VALUES
(1, 'Manole', 'Ana', 'Cluj', '0741253227', 'anam@gmail.com', 'Summer Course', 5, 70, 'Nu', 'student'),
(2, 'Munteanu', 'George', 'Cluj', '0745614584', 'georgemunteanu@gmail.com', 'Summer Course', 5, 70, 'Da', 'student'),
(3, 'Popescu', 'Dan', 'Arad', '0746475891', 'danp@gmail.com', 'Half a year course', 7, 140, 'Nu', 'student'),
(4, 'Pann', 'Anna', 'Targu-Mures', '0742456781', 'annapann@gmail.com', 'One year course', 9, 180, 'Da', 'student'),
(5, 'Vandilie', 'Ilinca', 'Baia-Mare', '0743452178', 'ilincavand@gmail.com', 'Two years course', 6, 290, 'Nu', 'student'),
(6, 'Rominescu', 'Codrin', 'Cluj', '0742456841', 'codrinrominescu@gmail.com', 'Three years course', 10, 380, 'Da', 'student'),
(7, 'Pop', 'Dan', 'Baia-Mare', '0745846795', 'pop.dan@gmail.com', 'Half a year course', 0, 0, '', 'student');

-- --------------------------------------------------------

--
-- Table structure for table `secretara`
--

CREATE TABLE IF NOT EXISTS `secretara` (
  `id_secretara` int(4) NOT NULL AUTO_INCREMENT,
  `nume` varchar(10) COLLATE latin1_general_ci NOT NULL,
  `parola` varchar(10) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`id_secretara`),
  KEY `nume` (`nume`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `secretara`
--

INSERT INTO `secretara` (`id_secretara`, `nume`, `parola`) VALUES
(1, 'Rumnea', '1234'),
(2, 'Popescu', '2468');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
