-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2020 at 10:12 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bank`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `name` text NOT NULL,
  `email` text NOT NULL,
  `balance` int(13) NOT NULL,
  `account` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`name`, `email`, `balance`, `account`) VALUES
('Nikhil Sharma', 'nikhil@gmail.com', 500340, 1231531),
('Sonali', 'sonali@gmail.com', 802100, 5867657),
('Shiva Singh', 'shiva@gmail.com', 652110, 5453453),
('Tarun Gupta', 'tarun@gmail.com', 893501, 5867657),
('Yatendra Singh', 'yatendra@gmail.com', 762100, 7973126),
('Naman Rawat', 'naman@gmail.com', 216970, 58676571),
('Neha Sharma', 'neha@gmail.com', 345000, 7212886),
('Shiva', 'shiva@gmail.com', 876540, 6812690),
('Pakhi Gupta', 'pakhi@gmail.com', 670000, 7927919),
('Shaan Saini', 'shaan@gmail.com', 232010, 3739123),
('panda', 'panda@gmail.com', 113131, 2321212),
('Varun Gupta', 'varun@gmail.com', 450100, 4589225),
('Akshay', 'akshay@gmail.com', 245101, 43262894);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
