-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2018 at 05:40 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `voting_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `candidates`
--

CREATE TABLE IF NOT EXISTS `candidates` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `party` varchar(50) NOT NULL,
  `district` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `candidates`
--

INSERT INTO `candidates` (`id`, `name`, `party`, `district`) VALUES
(1, 'Mahinda rajapaksha', 'UPFA', 'Hambantota'),
(2, 'Ranil wikramasingha', 'UNP', 'Colombo'),
(3, 'Anura kumara', 'JVP', 'Kurunegala'),
(4, 'ss', 'JVP', 'Mannar');

-- --------------------------------------------------------

--
-- Table structure for table `candidates_local`
--

CREATE TABLE IF NOT EXISTS `candidates_local` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `party` varchar(50) NOT NULL,
  `district` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `candidates_local`
--

INSERT INTO `candidates_local` (`id`, `name`, `party`, `district`) VALUES
(1, 'Mohan peris', 'UNP', 'Galle'),
(2, 'Janaka wakkubura', 'UNP', 'Ratnapura'),
(3, 'Lalith athugalpitiya', 'JVP', 'Colombo'),
(4, 'Gamini senarath', 'UNP', 'Mannar'),
(5, 'Ramin pelmadulla', 'JVP', 'Ratnapura'),
(6, 'Diwya senarathna', 'JVP', 'Monaragala');

-- --------------------------------------------------------

--
-- Table structure for table `candidates_parliment`
--

CREATE TABLE IF NOT EXISTS `candidates_parliment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `party` varchar(50) NOT NULL,
  `province` varchar(100) NOT NULL,
  `district` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `candidates_parliment`
--

INSERT INTO `candidates_parliment` (`id`, `name`, `party`, `province`, `district`) VALUES
(1, 'Lohan rathwaththe', 'UPFA', 'Central', 'Kandy'),
(2, 'Ravi karunanayaka', 'UNP', 'Western', 'Kaluthara'),
(3, 'Mangala Samaraweera', 'UNP', 'Nortcentral', 'Ratnapura');

-- --------------------------------------------------------

--
-- Table structure for table `candidates_province`
--

CREATE TABLE IF NOT EXISTS `candidates_province` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `party` varchar(50) NOT NULL,
  `district` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `candidates_province`
--

INSERT INTO `candidates_province` (`id`, `name`, `party`, `district`) VALUES
(1, 'Kamal rupasingha', 'UNP', 'Colombo'),
(2, 'Ranjan ramanayaka', 'UNP', 'Nuwara Eliya'),
(3, 'Rosi senanayaka', 'UPFA', 'Kurunegala'),
(4, 'Dunesh gankanda', 'UNP', 'Ratnapura'),
(5, 'Jon senawirathna', 'UPFA', 'Puttalam'),
(6, 'Pawithra wanniarachi', 'UPFA', 'Gampaha'),
(7, 'Punchinilame', 'JVP', 'Kurunegala'),
(8, 'Yasitha srimal', 'JVP', 'Mullaitivu'),
(9, 'Arjun aksh', 'JVP', 'Kaluthara');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(60) NOT NULL AUTO_INCREMENT,
  `username` varchar(150) NOT NULL,
  `pw` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `pw`) VALUES
(5, 'df', 'e4da3b7fbbce2345d7772b0674a318d5'),
(6, 'admin', '202cb962ac59075b964b07152d234b70'),
(7, 'abc', '250cf8b51c773f3f8dc8b4be867a9a02');

-- --------------------------------------------------------

--
-- Table structure for table `parties`
--

CREATE TABLE IF NOT EXISTS `parties` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `parties`
--

INSERT INTO `parties` (`id`, `name`) VALUES
(1, 'UNP'),
(2, 'JVP'),
(3, 'UPFA'),
(4, 'bb');

-- --------------------------------------------------------

--
-- Table structure for table `parties_local`
--

CREATE TABLE IF NOT EXISTS `parties_local` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `parties_local`
--

INSERT INTO `parties_local` (`id`, `name`) VALUES
(1, 'UNP'),
(2, 'JVP'),
(3, 'UPFA');

-- --------------------------------------------------------

--
-- Table structure for table `parties_parliment`
--

CREATE TABLE IF NOT EXISTS `parties_parliment` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `parties_parliment`
--

INSERT INTO `parties_parliment` (`id`, `name`) VALUES
(1, 'UNP'),
(2, 'JVP'),
(3, 'UPFA');

-- --------------------------------------------------------

--
-- Table structure for table `parties_province`
--

CREATE TABLE IF NOT EXISTS `parties_province` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `parties_province`
--

INSERT INTO `parties_province` (`id`, `name`) VALUES
(1, 'UNP'),
(2, 'JVP'),
(3, 'UPFA');

-- --------------------------------------------------------

--
-- Table structure for table `voters`
--

CREATE TABLE IF NOT EXISTS `voters` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) NOT NULL,
  `NIC` varchar(10) NOT NULL,
  `District` varchar(20) NOT NULL,
  `president` varchar(20) DEFAULT '0',
  `parliment` varchar(11) NOT NULL DEFAULT '0',
  `province` varchar(11) NOT NULL DEFAULT '0',
  `local` varchar(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `NIC` (`NIC`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `voters`
--

INSERT INTO `voters` (`id`, `Name`, `NIC`, `District`, `president`, `parliment`, `province`, `local`) VALUES
(1, 'Amila ranganath', '940053749V', 'Ratnapura', '0', '0', '1', '0'),
(2, 'Praboth rangana', '940033357V', 'Ratnapura', '0', '0', '0', '0'),
(3, 'Hashini wijekoon', '945103876V', 'Kandy', '1', '0', '0', '0'),
(4, 'Malshi hasara', '947943626V', 'Galle', '0', '0', '0', '1'),
(10, 'dd', '123456789v', 'Mullaitivu', '0', '0', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `votes`
--

CREATE TABLE IF NOT EXISTS `votes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `party` varchar(20) NOT NULL,
  `votes` varchar(20) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `votes`
--

INSERT INTO `votes` (`id`, `name`, `party`, `votes`) VALUES
(1, 'Mahinda rajapaksha', 'UPFA', '56'),
(2, 'Ranil wikramasingha', 'UNP', '175'),
(3, 'Anura kumara', 'JVP', '500'),
(4, 'ss', 'JVP', '0');

-- --------------------------------------------------------

--
-- Table structure for table `votes_local`
--

CREATE TABLE IF NOT EXISTS `votes_local` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `party` varchar(20) NOT NULL,
  `votes` varchar(20) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `votes_local`
--

INSERT INTO `votes_local` (`id`, `name`, `party`, `votes`) VALUES
(1, 'Mohan peris', 'UNP', '16'),
(2, 'Janaka wakkubura', 'UNP', '41'),
(3, 'Lalith athugalpitiya', 'JVP', '80'),
(4, 'Gamini senarath', 'UNP', '11'),
(5, 'Ramin pelmadulla', 'JVP', '150'),
(6, 'Diwya senarathna', 'JVP', '25');

-- --------------------------------------------------------

--
-- Table structure for table `votes_parliment`
--

CREATE TABLE IF NOT EXISTS `votes_parliment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `party` varchar(20) NOT NULL,
  `votes` varchar(20) DEFAULT '0',
  `province` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `votes_parliment`
--

INSERT INTO `votes_parliment` (`id`, `name`, `party`, `votes`, `province`) VALUES
(1, 'Lohan rathwaththe', 'UPFA', '150', 'Central'),
(2, 'Ravi karunanayaka', 'UNP', '45', 'Western'),
(3, 'Mangala Samaraweera', 'UNP', '22', 'Nortcentral');

-- --------------------------------------------------------

--
-- Table structure for table `votes_province`
--

CREATE TABLE IF NOT EXISTS `votes_province` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `party` varchar(20) NOT NULL,
  `votes` varchar(20) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `votes_province`
--

INSERT INTO `votes_province` (`id`, `name`, `party`, `votes`) VALUES
(1, 'Kamal rupasingha', 'UNP', '10'),
(2, 'Ranjan ramanayaka', 'UNP', '25'),
(3, 'Rosi senanayaka', 'UPFA', '40'),
(4, 'Dunesh gankanda', 'UNP', '180'),
(5, 'Jon senawirathna', 'UPFA', '45'),
(6, 'Pawithra wanniarachi', 'UPFA', '120'),
(7, 'Punchinilame', 'JVP', '90'),
(8, 'Yasitha srimal', 'JVP', '30'),
(9, 'Arjun aksh', 'JVP', '5');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
