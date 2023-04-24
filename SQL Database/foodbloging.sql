-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2023 at 04:51 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `foodbloging`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact1`
--

CREATE TABLE `contact1` (
  `idc` int(4) NOT NULL,
  `name` text NOT NULL,
  `mail` varchar(30) NOT NULL,
  `message` varchar(200) NOT NULL,
  `datetime` datetime(4) NOT NULL DEFAULT current_timestamp(4)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact1`
--

INSERT INTO `contact1` (`idc`, `name`, `mail`, `message`, `datetime`) VALUES
(1, 'Priti Paul', 'priti28@gmail.com', 'This is the food blogging website', '2021-11-21 21:33:30.0000'),
(2, 'Ranjit Paul', 'iot@gmail.com', 'hi this is the SMS box', '2021-11-24 07:55:44.3863'),
(3, 'Priti Paul', 'paulpriti877@gmail.com', 'hi', '2021-12-12 07:28:25.1963'),
(6, 'Indrajit Ghosh', 'io@gmail.com', 'this is the text for testing', '2021-12-12 21:11:04.3102'),
(7, 'ty', 't@gmail.com', 'hi', '2023-04-24 08:20:41.7558');

-- --------------------------------------------------------

--
-- Table structure for table `order-place`
--

CREATE TABLE `order-place` (
  `idw` int(4) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `address` varchar(100) NOT NULL,
  `district` varchar(100) NOT NULL,
  `pin` int(20) NOT NULL,
  `state` text NOT NULL,
  `food` text NOT NULL,
  `number` int(10) NOT NULL,
  `date` datetime(4) NOT NULL DEFAULT current_timestamp(4)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order-place`
--

INSERT INTO `order-place` (`idw`, `name`, `email`, `phone`, `address`, `district`, `pin`, `state`, `food`, `number`, `date`) VALUES
(38, 'Priti Paul', 'paulpriti877@gmail.com', '8617783073', 'Rajarhat Bhatenda', 'South 12 pgs ', 7800135, 'Cash on Delivery', 'fp', 4, '2022-01-22 20:06:33.6230'),
(39, 'Priti Paul', 'paulpriti877@gmail.com', '8617783073', 'Rajarhat Bhatenda', 'South 12 pgs ', 700135, 'Online Payment', 'erty', 12, '2022-02-02 17:46:19.7520'),
(40, 'Priti Paul', 'paulpriti877@gmail.com', '8617783073', 'Rajarhat Bhatenda', 'South 12 pgs ', 700135, 'Online Payment', 'erty', 12, '2022-02-02 17:46:19.8632'),
(41, 'Priti Paul', 'paulpriti877@gmail.com', '8617783073', 'Rajarhat Bhatenda', 'South 12 pgs ', 700135, 'Cash on Delivery', 'erty', 12, '2022-02-02 17:46:32.2916'),
(42, 'Priti Paul', 'paulpriti877@gmail.com', '8617783073', 'Rajarhat Bhatenda', 'South 12 pgs ', 700135, 'Online Payment', 'erty', 12, '2022-02-02 17:46:58.6699'),
(43, 'Priti Paul', 'paulpriti877@gmail.com', '8617783073', 'Rajarhat Bhatenda', 'South 12 pgs ', 700135, 'Online Payment', 'erty', 12, '2022-02-02 17:46:58.6801'),
(44, 'Priti Paul', 'paulpriti877@gmail.com', '8617783073', 'Rajarhat Bhatenda', 'South 12 pgs 12', 700135, 'Online Payment', 'erty', 7878, '2022-03-05 07:57:35.1778'),
(45, 'Priti Paul', 'paulpriti877@gmail.com', '8617783073', 'Rajarhat Bhatenda', 'South 12 pgs 12', 700135, 'Online Payment', 'erty', 7878, '2022-03-05 07:57:35.2454'),
(46, 'Gaytri Paul', 'gayatri@gmail.com', '7894562356', 'Rajarhat Bhatenda', 'South 12 pgs ', 700135, 'Online Payment', 'erty', 0, '2023-04-24 18:27:26.5052'),
(47, 'Gaytri Paul', 'gayatri@gmail.com', '7894562356', 'Rajarhat Bhatenda', 'South 12 pgs ', 700135, 'Online Payment', 'erty', 0, '2023-04-24 18:27:26.7009');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact1`
--
ALTER TABLE `contact1`
  ADD PRIMARY KEY (`idc`),
  ADD UNIQUE KEY `mail` (`mail`);

--
-- Indexes for table `order-place`
--
ALTER TABLE `order-place`
  ADD PRIMARY KEY (`idw`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact1`
--
ALTER TABLE `contact1`
  MODIFY `idc` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `order-place`
--
ALTER TABLE `order-place`
  MODIFY `idw` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
