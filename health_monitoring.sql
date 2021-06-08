-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2021 at 05:38 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `health_monitoring`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `user` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`email`, `password`, `user`) VALUES
('hashem@gmail.com', '321321', 'user'),
('rashed@gmail.com', '121221', 'Doctor'),
('najip@gmail.com', '010101', 'user'),
('masum@gmail.com', '321321', 'admin'),
('mahim@gamil.com', '020202', 'user'),
('nasir@gmail.com', '112233', 'user'),
('nadim@gmail.com', '2211', 'user'),
('khalid@gmail.com', '121212', 'user'),
('tuser@gamil.com', '12312', 'user'),
('duli@gmail.com', '332211', 'user'),
('kasim@gmail.com', '1414', 'doctor'),
('polash@gmail.com', '1231212', 'doctor'),
('raihan@gmail.com', '1112222', 'doctor'),
('khalid@gmail.com', '0606', 'user'),
('nadim@gmail.com', '123123', 'doctor');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
