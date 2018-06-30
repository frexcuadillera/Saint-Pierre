-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2018 at 08:32 AM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `st_pierre_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE IF NOT EXISTS `item` (
  `item_id` int(10) NOT NULL,
  `item_user_email` varchar(30) NOT NULL,
  `item_product_id` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=82 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`item_id`, `item_user_email`, `item_product_id`) VALUES
(1, 'villaverdepaolo99@gmail.com', '1'),
(2, 'villaverdepaolo99@gmail.com', '2'),
(3, 'villaverdepaolo99@gmail.com', '3'),
(4, 'villaverdepaolo99@gmail.com', '4'),
(5, 'villaverdepaolo99@gmail.com', '5'),
(6, 'villaverdepaolo99@gmail.com', '6'),
(7, 'villaverdepaolo99@gmail.com', '7'),
(8, 'villaverdepaolo99@gmail.com', '8'),
(9, 'villaverdepaolo99@gmail.com', '9'),
(10, 'marizeranada@yahoo.com', '1'),
(11, 'marizeranada@yahoo.com', '2'),
(12, 'marizeranada@yahoo.com', '3'),
(13, 'marizeranada@yahoo.com', '4'),
(14, 'marizeranada@yahoo.com', '5'),
(15, 'marizeranada@yahoo.com', '6'),
(16, 'marizeranada@yahoo.com', '7'),
(17, 'marizeranada@yahoo.com', '8'),
(19, 'marizeranada@yahoo.com', '1'),
(20, 'marizeranada@yahoo.com', '2'),
(21, 'marizeranada@yahoo.com', '3'),
(22, 'marizeranada@yahoo.com', '4'),
(23, 'marizeranada@yahoo.com', '5'),
(24, 'marizeranada@yahoo.com', '6'),
(25, 'marizeranada@yahoo.com', '7'),
(26, 'marizeranada@yahoo.com', '8'),
(27, 'marizeranada@yahoo.com', '9'),
(28, 'marizeranada@yahoo.com', '1'),
(29, 'marizeranada@yahoo.com', '2'),
(30, 'marizeranada@yahoo.com', '3'),
(31, 'marizeranada@yahoo.com', '4'),
(32, 'marizeranada@yahoo.com', '5'),
(33, 'marizeranada@yahoo.com', '6'),
(34, 'marizeranada@yahoo.com', '7'),
(35, 'marizeranada@yahoo.com', '8'),
(36, 'marizeranada@yahoo.com', '9'),
(37, 'marizeranada@yahoo.com', '1'),
(38, 'marizeranada@yahoo.com', '2'),
(39, 'marizeranada@yahoo.com', '3'),
(40, 'marizeranada@yahoo.com', '4'),
(41, 'marizeranada@yahoo.com', '5'),
(42, 'marizeranada@yahoo.com', '6'),
(43, 'marizeranada@yahoo.com', '7'),
(44, 'marizeranada@yahoo.com', '8'),
(45, 'marizeranada@yahoo.com', '9'),
(46, 'marizeranada@yahoo.com', '1'),
(47, 'marizeranada@yahoo.com', '2'),
(48, 'marizeranada@yahoo.com', '3'),
(49, 'marizeranada@yahoo.com', '4'),
(50, 'marizeranada@yahoo.com', '5'),
(51, 'marizeranada@yahoo.com', '6'),
(52, 'marizeranada@yahoo.com', '7'),
(53, 'marizeranada@yahoo.com', '8'),
(54, 'marizeranada@yahoo.com', '9'),
(55, 'marizeranada@yahoo.com', '1'),
(56, 'marizeranada@yahoo.com', '2'),
(57, 'marizeranada@yahoo.com', '3'),
(58, 'marizeranada@yahoo.com', '4'),
(59, 'marizeranada@yahoo.com', '5'),
(60, 'marizeranada@yahoo.com', '6'),
(61, 'marizeranada@yahoo.com', '7'),
(62, 'marizeranada@yahoo.com', '8'),
(63, 'marizeranada@yahoo.com', '9'),
(64, 'marizeranada@yahoo.com', '1'),
(65, 'marizeranada@yahoo.com', '2'),
(66, 'marizeranada@yahoo.com', '3'),
(67, 'marizeranada@yahoo.com', '4'),
(68, 'marizeranada@yahoo.com', '5'),
(69, 'marizeranada@yahoo.com', '6'),
(70, 'marizeranada@yahoo.com', '7'),
(71, 'marizeranada@yahoo.com', '8'),
(72, 'marizeranada@yahoo.com', '9'),
(73, 'fcuadillera@gmail.com', '1'),
(74, 'fcuadillera@gmail.com', '2'),
(75, 'fcuadillera@gmail.com', '3'),
(76, 'fcuadillera@gmail.com', '4'),
(77, 'fcuadillera@gmail.com', '5'),
(78, 'fcuadillera@gmail.com', '6'),
(79, 'fcuadillera@gmail.com', '7'),
(80, 'fcuadillera@gmail.com', '8'),
(81, 'fcuadillera@gmail.com', '9');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `product_id` int(10) NOT NULL,
  `product_name` varchar(30) NOT NULL,
  `product_price` int(10) NOT NULL,
  `product_img_src` varchar(50) NOT NULL,
  `product_category` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product_price`, `product_img_src`, `product_category`) VALUES
(1, 'Bear Claw', 25, 'bear claw.jpg', 'bread'),
(2, 'Bavarian Cream Donut', 25, 'bavarian cream donut.jpg', 'donut'),
(3, 'Cassava Cake', 100, 'cassava cake.jpg', 'cake'),
(4, 'Cinnamon Roll', 40, 'cinnamon roll.jpg', 'bread'),
(5, 'Croissant', 5, 'croissant.jpg', 'bread'),
(6, 'Danish Pastry 1', 50, 'danish pastry 1.jpg', 'danish'),
(7, 'Danish Pastry 2', 45, 'danish pastry 2.jpg', 'danish'),
(8, 'Ensaymada', 10, 'ensaymada.jpg', 'bread'),
(9, 'Hawaiian Pizza.jpg', 200, 'hawaiian pizza.jpg', 'pizza'),
(10, 'Yema Cake.jpg', 120, 'yema cake.jpg', 'cake');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(10) NOT NULL,
  `user_email` varchar(30) NOT NULL,
  `user_password` varchar(30) NOT NULL,
  `user_fname` varchar(30) NOT NULL,
  `user_lname` varchar(30) NOT NULL,
  `user_DOB` date NOT NULL,
  `user_address` varchar(100) NOT NULL,
  `user_contact_no` varchar(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_email`, `user_password`, `user_fname`, `user_lname`, `user_DOB`, `user_address`, `user_contact_no`) VALUES
(1, 'fcuadillera@gmail.com', 'aezakmi123', 'Frex', 'Cuadillera', '1999-04-24', 'Tiaong', '09199491468'),
(2, 'villaverdepaolo99@gmail.com', 'paolovillaverde', 'Paolo', 'VIllaverde', '1999-09-18', 'Gumaca', '09502734618'),
(3, 'marizeranada@yahoo.com', 'marizeranada', 'MarizeValery', 'RaÃ±ada', '1999-03-01', 'Pangil, Laguna', '09056304012');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`item_id`),
  ADD KEY `item_product_id` (`item_product_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `item_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=82;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
