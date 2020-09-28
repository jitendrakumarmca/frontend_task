-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 20, 2020 at 07:46 AM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `frontendtask`
--

-- --------------------------------------------------------

--
-- Table structure for table `resume`
--

DROP TABLE IF EXISTS `resume`;
CREATE TABLE IF NOT EXISTS `resume` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `Firstname` varchar(255) NOT NULL,
  `Lastname` varchar(255) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Mobile` bigint(10) DEFAULT NULL,
  `Gender` varchar(10) NOT NULL,
  `State` varchar(255) NOT NULL,
  `City` varchar(255) NOT NULL,
  `Eduction` varchar(255) NOT NULL,
  `Hobbies` varchar(255) NOT NULL,
  `CareerObjective` varchar(255) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resume`
--

INSERT INTO `resume` (`ID`, `Firstname`, `Lastname`, `Email`, `Mobile`, `Gender`, `State`, `City`, `Eduction`, `Hobbies`, `CareerObjective`) VALUES
(3, 'jitendra', 'jkfndjkf', 'yjsgacgag@gmail.dhhd', 4545458784, 'Male', 'Gujarat', 'Ahmedabad', 'BCA,MCA,MBA,BBA,BA', 'Chess,Coocking,Dancing', 'jkvjzdbkvzjdbnvjzdjvnnzdnv'),
(4, 'jitendra', 'jkfndjkf', 'yjsgacgag@gmail.dhhd', 4545458784, 'Male', 'Gujarat', 'Ahmedabad', 'BCA,MCA,MBA,BBA,BA', 'Chess,Coocking,Dancing', 'jkvjzdbkvzjdbnvjzdjvnnzdnv'),
(5, 'jitendra', 'jkfndjkf', 'yjsgacgag@gmail.dhhd', 4545458784, 'Male', 'Gujarat', 'Ahmedabad', 'BCA,MCA,MBA,BBA,BA', 'Chess,Coocking,Dancing', 'jkvjzdbkvzjdbnvjzdjvnnzdnv'),
(6, 'hfdfedfv', 'parmar', 'test@djfchej.com', 4525252525, 'Male', 'Gujarat', 'Ahmedabad', 'MCA,HSC', 'Coocking,Dancing', 'uichiejfiojioejofjoejkotge');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
