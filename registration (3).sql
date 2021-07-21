-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 21, 2021 at 09:22 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `firstName` text NOT NULL,
  `lastName` text NOT NULL,
  `email` text NOT NULL,
  `phone` varchar(10) NOT NULL,
  `message` text NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `firstName`, `lastName`, `email`, `phone`, `message`, `image`) VALUES
(1, 'Bony', 'Babu', 'bonymoolan@gmail.com', '8071234567', 'hello', 'white shirt.jpg'),
(2, 'Bony', 'Babu', 'bonymoolan@gmail.com', '8071234567', 'hello', 'white shirt.jpg'),
(3, 'Bony', 'Babu', 'bonymoolan@gmail.com', '8071234567', 'hello', 'white shirt.jpg_1624650236_6325'),
(4, 'Bony', 'Babu', 'bonymoolan@gmail.com', '8071234567', 'hello', '1624650359_9587_white shirt.jpg'),
(5, 'Ammu', 'Joseph', 'ajosep13@confederationcollege.ca', '8073561234', 'Ammuuu', '1624650474_5664_bundle.jpg'),
(6, 'A', 'b', 'd', '1', 'B', '1624653860_5639_bundle.jpg'),
(7, 'Lala', 'lala', 'lala', '1234', 'lala', '1624654719_8969_jeans.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `menuId` int(11) NOT NULL,
  `name` text NOT NULL,
  `category` text NOT NULL,
  `price` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`menuId`, `name`, `category`, `price`) VALUES
(1, 'Americano', 'Hot', '5.99'),
(2, 'Espresso', 'Hot', '5.99'),
(3, 'Cappuccino', 'Hot', '5.99'),
(4, 'Cafe Latte', 'Hot', '5.99'),
(5, 'Cafe Frappe', 'Cold', '5.99'),
(6, 'Smoothie', 'Cold', '5.99'),
(7, 'Doppio', 'Hot', '5.99'),
(8, 'Choc', 'Cold', '6.99');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `firstName` text NOT NULL,
  `lastName` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `address` text NOT NULL,
  `image` text NOT NULL,
  `date` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `firstName`, `lastName`, `email`, `password`, `address`, `image`, `date`) VALUES
(2, 'Ammu', 'Joseph', 'ammucherusseril@gmail.com', '$2y$10$FE61CR/w98.q0YXui3MpLOOdEFyK76pYIHPPn/FfCcaLK4de/v5ji', '230 Vickers', '1194685690611626797436.jpg', 'July, 20, 2021'),
(3, 'admin', 'admin', 'admin@gmail.com', '$2y$10$PzbVvTdYaLB.QrzckGvWQ.OXQwksnKS4G6FSWSG1KkurPmi.5W3PK', '230 vickers', '7217011025961626882834.jpg', 'July, 21, 2021');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`menuId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `menuId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
