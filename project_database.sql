-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 20, 2018 at 08:30 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `miniproject`
--
CREATE DATABASE IF NOT EXISTS `miniproject` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `miniproject`;

-- --------------------------------------------------------

--
-- Table structure for table `bid`
--
-- Creation: Nov 15, 2017 at 05:06 PM
--

DROP TABLE IF EXISTS `bid`;
CREATE TABLE `bid` (
  `biddingid` int(10) NOT NULL,
  `itemid` int(10) NOT NULL,
  `userid` int(10) NOT NULL,
  `cprice` int(10) NOT NULL,
  `bidamt` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELATIONSHIPS FOR TABLE `bid`:
--   `itemid`
--       `items` -> `itemid`
--   `userid`
--       `register` -> `userid`
--

--
-- Dumping data for table `bid`
--

INSERT INTO `bid` (`biddingid`, `itemid`, `userid`, `cprice`, `bidamt`) VALUES
(1, 15, 1000015, 100000, NULL),
(2, 26, 1000015, 62895, NULL),
(3, 15, 1000013, 140546, NULL),
(4, 27, 1000013, 19958, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `items`
--
-- Creation: Nov 18, 2017 at 06:41 AM
--

DROP TABLE IF EXISTS `items`;
CREATE TABLE `items` (
  `itemid` int(10) NOT NULL,
  `itemname` varchar(30) NOT NULL,
  `category` varchar(30) NOT NULL,
  `oprice` int(10) NOT NULL,
  `sprice` int(10) NOT NULL,
  `sdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `edate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `description` varchar(200) DEFAULT NULL,
  `image` varchar(500) NOT NULL,
  `userid` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELATIONSHIPS FOR TABLE `items`:
--   `userid`
--       `register` -> `userid`
--

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`itemid`, `itemname`, `category`, `oprice`, `sprice`, `sdate`, `edate`, `description`, `image`, `userid`) VALUES
(12, 'MacBook Air pro', 'Electronics', 80000, 40000, '2018-01-19 17:45:20', '2018-01-29 16:00:00', 'Apples MacBook Pro Air Operating System:Apple iOS RAM:2GB ', 'macbook.jpg', 1000019),
(15, 'Yamaha YZF R15', 'CarBikes', 160000, 85000, '2018-01-24 17:56:30', '2018-01-27 13:15:00', 'Colour-Black\r\nEngine Capacityâ€Ž: â€Ž149 cc\r\nBrakesâ€Ž: â€ŽDouble Disc\r\nStarting Systemâ€Ž: â€ŽSelf Start Only\r\nMileageâ€Ž: â€Ž35-45 kmpl (Approx.)', 'yamaha yzf r1.jpg', 1000015),
(20, 'Unique Painting by Hussain', 'Home', 17000, 8200, '2018-01-21 18:40:07', '2018-02-01 01:05:55', 'Uniquely designed by the the renowned painter M.F.Hussain', 'painting.jpg', 1000016),
(22, 'Harry Potter Novel Series', 'Books', 2000, 900, '2018-01-24 18:00:00', '2018-01-27 12:40:00', 'A set of 8 novels by the renowned British Author J.K.Rowling.\r\nGenre:Fiction', 'harrypotter.jpg', 1000016),
(23, 'LG MC2146BL convection microwa', 'Electronics', 18000, 9200, '2018-01-25 12:00:00', '2018-01-26 11:10:00', 'Bring convenience to your kitchen with LG MC2146BL convection microwave oven 32L .Features 151 Auto Cook Menu & True Baking to prepare healthier food', 'microwave oven.jpg', 1000017),
(25, 'Apple iPhone 8', 'Mobile', 86000, 47000, '2018-01-27 02:55:00', '2018-01-31 16:15:00', ' 4.7â€³ LED-backlit IPS LCD display, Apple A11 Bionic chipset, 12 MP primary camera, 7 MP front camera\r\nColoursâ€Ž: â€ŽSilver, Space Gray, Gold,Rose Gold\r\nWeight (g)â€Ž: â€Ž148.00	', 'iphone8.jpg', 1000018),
(26, 'Hyundai Verna', 'Home', 64565, 57574, '2018-01-14 12:37:00', '2018-01-28 23:34:00', 'm nxmnmjhg,g', 'car.jpg', 1000018),
(27, 'Samsung Tab 4', 'Mobile', 22790, 13570, '2018-01-15 13:00:00', '2018-01-26 23:50:00', ' Samsung Galaxy Tab 4 SM-T337V 8.0 in 16GB Verizon 4G Android LTE Black ', 'tab4.jpeg', 1000018),
(28, 'Renault Duster', 'CarBikes', 1500000, 600000, '2018-01-22 17:28:59', '2018-01-26 07:00:00', 'Renault Duster Lodgy\r\nColour:brown\r\nAverage:25kmpl\r\nNo of Seats:25', 'duster.jpg', 1000019),
(31, 'St Bernard pup', 'Pets', 40000, 20000, '2018-01-13 17:35:54', '2018-01-27 13:30:00', 'Colour-Brown/White\r\nOn pre-order only\r\nDelivery After 6 months', 'stbernard.jpg', 1000013),
(33, 'Kylie Lip Colours', 'Fashion', 4800, 2000, '2018-01-16 17:42:59', '2018-01-28 13:20:00', 'Set of 12 matte lip shades by Kylie Cosmetics\r\nMRP of each shade-Rs 460/', 'matte lipshades.jpg', 1000013),
(36, 'Sony Bravia', 'Electronics', 400000, 175000, '2018-01-21 18:02:45', '2018-01-25 10:05:00', 'Discover a new level of clarity and colour with the X83D 4K HDR Android TV.\r\nThe revolutionary upscaling technology in our latest TVs brings everything you watch to life in our stunning 4K quality. Ou', 'sonybravia.jpg', 1000015),
(38, 'LOreal Smokey Eye Shadow Kit', 'Fashion', 3200, 1580, '2018-01-22 18:12:07', '2018-01-27 21:15:00', ' LOreal Paris Color Riche Le Stylo Smoky Eye Shadow from Nykaa.Achieve alluring smoky and sultry eye makeup looks with this ultra-glamorous Deborah Perfect Smokey Eye Palette.', 'eyeshadokit.jpg', 1000014),
(40, 'Sofa Set', 'Home', 75000, 42000, '2018-01-23 18:15:36', '2018-01-25 22:50:00', '5 Seater Sofa Set with a centre table\r\ncolor:Red and Black\r\nseat density-60cc\r\nfully covered with original leather', 'sofa.jpg', 1000014),
(42, 'Antique wall Clocks', 'Home', 4000, 1600, '2018-01-18 01:39:00', '2018-01-28 23:20:26', 'Set of Two unique wall clocks with antique mettalic design in copper and bronze finish', 'clock.jpeg', 1000016),
(43, 'Godrej Almirah', 'Home', 45000, 18000, '2018-01-11 19:25:09', '2018-01-26 03:10:00', 'Unique New Designs & Abundant Space. Hurry!\r\nSleek Metallic Design Â· Store Bedroom Accessories Â· Multiple Drawers & Locker Â· Dent Resistant Steel\r\nTypes: Two Door Locker Almirah, Storewel Almirah, ', 'almirah.jpg', 1000014);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--
-- Creation: Nov 07, 2017 at 01:30 PM
--

DROP TABLE IF EXISTS `register`;
CREATE TABLE `register` (
  `userid` int(10) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `uname` varchar(30) NOT NULL,
  `pass` varchar(16) NOT NULL,
  `cpass` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELATIONSHIPS FOR TABLE `register`:
--

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`userid`, `fname`, `lname`, `email`, `uname`, `pass`, `cpass`) VALUES
(1000013, 'Yashika', 'Ahuja', 'yashikaahuja@gmail.com', 'yashikaahuja', '12345', '12345'),
(1000014, 'Shreya', 'Aggarwal', 'shreyaaggarwal1701@gmail.com', 'shreyaaggarwal20', '7890', '7890'),
(1000015, 'Shivanshu', 'Ahuja', 'shivansh@gmail.com', 'shivanshuahuja', 'xyz', 'xyz'),
(1000016, 'Sumandeep', 'Cheema', 'sumandeepkaurcheema@gmail.com', 'suman_kaur', 'qwer', 'qwer'),
(1000017, 'Tejasvita', 'Rathore', 'tejasvitarathore@gmail.com', 'tejas.rathore', 'tejas', 'tejas'),
(1000018, 'Deepak', 'Uniyal', 'deepakuniyal08@gmail.com', 'deepakuniyal', 'asdf', 'asdf'),
(1000019, 'Ashish', 'Garg', 'ashishgarg@gmail.com', '_Ashish_Garg', 'geu', 'geu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bid`
--
ALTER TABLE `bid`
  ADD PRIMARY KEY (`biddingid`),
  ADD KEY `itemid` (`itemid`),
  ADD KEY `userid` (`userid`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`itemid`),
  ADD KEY `userid` (`userid`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bid`
--
ALTER TABLE `bid`
  MODIFY `biddingid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `itemid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `userid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1000020;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bid`
--
ALTER TABLE `bid`
  ADD CONSTRAINT `bid_ibfk_1` FOREIGN KEY (`itemid`) REFERENCES `items` (`itemid`),
  ADD CONSTRAINT `bid_ibfk_2` FOREIGN KEY (`userid`) REFERENCES `register` (`userid`);

--
-- Constraints for table `items`
--
ALTER TABLE `items`
  ADD CONSTRAINT `items_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `register` (`userid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
