-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 18, 2020 at 10:26 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Assignment`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(255) NOT NULL,
  `user` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `comment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `user`, `email`, `mobile`, `comment`) VALUES
(2, 'Test1', 'test@gmail.com', '1234567890', 'Please work'),
(3, 'Test2', 'test2@gmail.com', '1234567890', 'Please work'),
(4, 'Mayank', 'ngwdkfne', '4791844', 'Very nice'),
(5, '', '', '', ''),
(6, 'fnekwfne', 'nwkef@n.com', '112233443322', 'gnvrekjv'),
(7, 'nekjrqn', 'jwfnjq@h.com', '68778', 'knwkfnmq '),
(8, 'nfksed', 'abc@g.com', '317391837', 'vdmvklw '),
(9, 'fedfde', 'dfcvadq@g.cko', '134534t3', 'try');

-- --------------------------------------------------------

--
-- Table structure for table `menu-card`
--

CREATE TABLE `menu-card` (
  `item-id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `img` varchar(100) NOT NULL,
  `price` int(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `item-desc` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `registration_admin`
--

CREATE TABLE `registration_admin` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration_admin`
--

INSERT INTO `registration_admin` (`id`, `name`, `email`, `phone`, `pass`) VALUES
(1, 'Mayank', 'mayank@gmail.com', '1231231234', '84c97fd7e6b98e7cedde337bece1328e'),
(2, 'abc', 'abc@gmail.com', '1231234123', 'e99a18c428cb38d5f260853678922e03'),
(3, 'rohan', 'rohan@gmail.com', '1234123412', 'aeae5b2f900e84d784a0f0111e650835');

-- --------------------------------------------------------

--
-- Table structure for table `registration_user`
--

CREATE TABLE `registration_user` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `pref` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration_user`
--

INSERT INTO `registration_user` (`id`, `name`, `email`, `phone`, `pref`, `pass`) VALUES
(1, 'abc', 'abc@gmail.com', '1234123456', 'veg', 'e99a18c428cb38d5f260853678922e03'),
(2, 'Mayank', 'mayank@gmail.com', '1231231234', 'Veg', '84c97fd7e6b98e7cedde337bece1328e');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `pref` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `mobile`, `pass`, `pref`) VALUES
(1, 'mayank', 'mayank@gmail.com', '1122334455', 'pass', 'veg'),
(2, 'abc', 'abc@gmail.com', '1234512345', 'password', 'veg'),
(3, 'rohan', 'rohan@gmail.com', '12345654321', 'rohan123', 'non-veg'),
(4, 'aman', 'aman@gmail.com', '1231231234', 'aman123', 'veg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu-card`
--
ALTER TABLE `menu-card`
  ADD PRIMARY KEY (`item-id`);

--
-- Indexes for table `registration_admin`
--
ALTER TABLE `registration_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration_user`
--
ALTER TABLE `registration_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `menu-card`
--
ALTER TABLE `menu-card`
  MODIFY `item-id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `registration_admin`
--
ALTER TABLE `registration_admin`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `registration_user`
--
ALTER TABLE `registration_user`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
