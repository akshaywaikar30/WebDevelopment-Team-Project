-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2018 at 08:49 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `currencyfluctuation`
--

-- --------------------------------------------------------

--
-- Table structure for table `currency`
--

CREATE TABLE `currency` (
  `cName` varchar(20) NOT NULL,
  `country` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `currency`
--

INSERT INTO `currency` (`cName`, `country`) VALUES
('EUR', 'Germany'),
('GBP', 'UK'),
('INR', 'India'),
('USD', 'USA'),
('YEN', 'Japan');

-- --------------------------------------------------------

--
-- Table structure for table `currencydetails`
--

CREATE TABLE `currencydetails` (
  `currencyName` varchar(20) DEFAULT NULL,
  `value` float DEFAULT NULL,
  `cDate` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `currencydetails`
--

INSERT INTO `currencydetails` (`currencyName`, `value`, `cDate`) VALUES
('INR', 65, '2018-03-16'),
('INR', 67, '2018-03-14'),
('INR', 67, '2018-03-15'),
('GBP', 0.72, '2018-03-16'),
('GBP', 0.71, '2018-03-14'),
('GBP', 0.73, '2018-03-15'),
('EUR', 0.81, '2018-03-16'),
('EUR', 0.82, '2018-03-14'),
('EUR', 0.8, '2018-03-15'),
('USD', 1, '2018-03-15'),
('YEN', 107.64, '2018-04-21'),
('INR', 67, '2018-04-21'),
('EUR', 0.75, '2018-04-21'),
('GBP', 0.82, '2018-04-21'),
('INR', 66, '2018-04-20'),
('GBP', 0.83, '2018-04-20'),
('EUR', 0.72, '2018-04-20'),
('YEN', 108, '2018-04-20'),
('INR', 66.32, '2018-04-19'),
('GBP', 0.81, '2018-04-19'),
('EUR', 0.71, '2018-04-19'),
('YEN', 107.42, '2018-04-19'),
('INR', 67, '2018-04-18'),
('GBP', 0.81, '2018-04-18'),
('EUR', 0.73, '2018-04-18'),
('YEN', 108, '2018-04-18'),
('INR', 66.21, '2018-04-17'),
('GBP', 0.8, '2018-04-17'),
('EUR', 70, '2018-04-17'),
('YEN', 107.55, '2018-04-17');

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `itemID` varchar(20) NOT NULL,
  `iName` varchar(20) DEFAULT NULL,
  `cost` varchar(20) DEFAULT NULL,
  `currName` varchar(20) DEFAULT NULL,
  `actionType` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`itemID`, `iName`, `cost`, `currName`, `actionType`) VALUES
('100152', 'phone', '1000', 'INR', 'buy'),
('100153', 'ipad', '22', 'GBP', 'buy'),
('100154', 'watch', '10', 'EUR', 'buy'),
('100155', 'laptop', '66000', 'INR', 'sell'),
('100156', 'watch', '2000', 'INR', 'sell'),
('100157', 'mobile', '326.33', 'GBP', 'sell');

-- --------------------------------------------------------

--
-- Table structure for table `person`
--

CREATE TABLE `person` (
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(200) DEFAULT NULL,
  `DOB` date DEFAULT NULL,
  `contact` varchar(10) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `userType` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `person`
--

INSERT INTO `person` (`name`, `email`, `password`, `DOB`, `contact`, `address`, `userType`) VALUES
('Akshay', 'akshay24@gmail.com', '4a9c198ddfc9a400d75029e4b6bc7ac7fdf23d20', '1994-05-30', '703-803-06', 'JYOTIBA NAGAR,TALAWADE', 'end_user'),
('Antonio Martial', 'antonio@gmail.com', 'a08f08bac39aeae6c9580ade7aa8387b5a0e7428', '1989-11-29', '6824772455', '1105 greek row, NY', 'admin'),
('David Villa', 'david@gmail.com', 'aa743a0aaec8f7d7a1f01442503957f4d7a2d634', '1992-12-22', '6824727696', '455 oak Street,TX', 'end_user'),
('Gary Cahill', 'gary@gmail.com', 'f9023000f29773649f3850298becb9544b5fd6a9', '1991-03-19', '4726829980', '1002 greek row dr,TX', 'end_user'),
('Jason Roy', 'jason@gmail.com', '68c46a606457643eab92053c1c05574abb26f861', '1992-10-10', '6824724455', '1010 greek row, CA', 'admin'),
('John Terry', 'john@gmail.com', 'a51dda7c7ff50b61eaea0444371f4a6a9301e501', '1994-06-21', '9096582949', '409 Summit Ave,TX', 'end_user'),
('Michael Ballack', 'michael@gmail.com', '17b9e1c64588c7fa6419b4d29dc1f4426279ba01', '1993-03-21', '7852342226', '40 maple street,TX', 'end_user'),
('Noopur Kharche', 'noopur2212@gmail.com', 'a7b72636cf4eaa978586ca938cd25720de868461', '1992-12-22', '682-472-77', '409 Summit Ave, 324', 'end_user'),
('Steven Gerrad', 'steven@gmail.com', '4068f0880b399410602d694b3cc711c8a8f4727e', '1990-12-13', '6824727708', ' 122 park ave st,TX', 'end_user');

-- --------------------------------------------------------

--
-- Table structure for table `tradeitems`
--

CREATE TABLE `tradeitems` (
  `userID` varchar(50) DEFAULT NULL,
  `itemID` varchar(20) DEFAULT NULL,
  `tradeType` varchar(20) DEFAULT NULL,
  `Credit` int(16) NOT NULL,
  `Month` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Year` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tradeitems`
--

INSERT INTO `tradeitems` (`userID`, `itemID`, `tradeType`, `Credit`, `Month`, `Name`, `Year`) VALUES
('john@gmail.com', '100152', 'buy', 0, 0, '', 0),
('gary@gmail.com', '100153', 'sell', 0, 0, '', 0),
('david@gmail.com', '100155', 'sell', 0, 0, '', 0),
('gary@gmail.com', '100156', 'sell', 0, 0, '', 0),
('steven@gmail.com', '100157', 'buy', 0, 0, '', 0),
('john@gmail.com', '100156', 'sell', 0, 0, '', 0),
('john@gmail.com', '100155', 'buy', 0, 0, '', 0),
('noopur2212@gmail.com', '100155', 'buy', 0, 0, '', 0),
('noopur2212@gmail.com', '100155', 'buy', 2147483647, 12, 'Noopur Kharche', 2019),
('gary@gmail.com', '100155', 'buy', 2147483647, 11, 'Akshay Waikar', 2020),
('gary@gmail.com', '100156', 'sell', 2147483647, 11, 'Akshay Waikar', 2020),
('gary@gmail.com', '100155', 'buy', 2147483647, 12, 'Akshay Mahesh Waikar', 2020),
('gary@gmail.com', '100156', 'sell', 2147483647, 12, 'Akshay Mahesh Waikar', 2020),
('gary@gmail.com', '100155', 'buy', 2147483647, 9, 'Akshay Waikar', 2020),
('gary@gmail.com', '100156', 'sell', 2147483647, 9, 'Akshay Waikar', 2020),
('gary@gmail.com', '100155', 'buy', 2147483647, 10, 'sanket kale', 2020),
('gary@gmail.com', '100156', 'buy', 2147483647, 10, 'sanket kale', 2020);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `currency`
--
ALTER TABLE `currency`
  ADD PRIMARY KEY (`cName`);

--
-- Indexes for table `currencydetails`
--
ALTER TABLE `currencydetails`
  ADD KEY `currencyName` (`currencyName`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`itemID`),
  ADD KEY `currName` (`currName`);

--
-- Indexes for table `person`
--
ALTER TABLE `person`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `tradeitems`
--
ALTER TABLE `tradeitems`
  ADD KEY `userID` (`userID`),
  ADD KEY `itemID` (`itemID`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `currencydetails`
--
ALTER TABLE `currencydetails`
  ADD CONSTRAINT `currencydetails_ibfk_1` FOREIGN KEY (`currencyName`) REFERENCES `currency` (`cName`);

--
-- Constraints for table `item`
--
ALTER TABLE `item`
  ADD CONSTRAINT `item_ibfk_1` FOREIGN KEY (`currName`) REFERENCES `currency` (`cName`);

--
-- Constraints for table `tradeitems`
--
ALTER TABLE `tradeitems`
  ADD CONSTRAINT `tradeitems_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `person` (`email`),
  ADD CONSTRAINT `tradeitems_ibfk_2` FOREIGN KEY (`itemID`) REFERENCES `item` (`itemID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
