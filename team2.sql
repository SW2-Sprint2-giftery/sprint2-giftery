-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2020 at 09:48 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `team2`
--

-- --------------------------------------------------------

--
-- Table structure for table `carte`
--

CREATE TABLE `carte` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `pc_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `carte`
--

INSERT INTO `carte` (`id`, `username`, `pc_id`) VALUES
(1, 'Mahmoud', 7),
(2, 'Mahmoud', 8),
(7, 'Ali', 7);

-- --------------------------------------------------------

--
-- Table structure for table ` feedback`
--

CREATE TABLE ` feedback` (
  `F_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `Feedback` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table ` feedback`
--

INSERT INTO ` feedback` (`F_id`, `username`, `Feedback`) VALUES
(1, 'Ali', ' welcome first comment\r\n\r\n         \r\n    \r\n                \r\n                '),
(2, 'Mahmoud', ' \r\n         second comment by user mahmoud\r\n    \r\n                \r\n                ');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `PR_id` int(100) NOT NULL,
  `P_name` varchar(200) NOT NULL,
  `price` int(50) NOT NULL,
  `pr_desc` varchar(100) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`PR_id`, `P_name`, `price`, `pr_desc`, `image`) VALUES
(7, 'gg', 25, '       oojj                  ', 'HP.jpg'),
(8, 'jjj', 255, '        hjklll                 ', 'item_XXL_38655519_150657188.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `username` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `address`) VALUES
(1, 'Mahmoud', 'mahmoudelwan460@gmail.com', '1478530123M', '407 omer ibn '),
(4, 'Admin', 'admin@gmail.com', '14785', 'admin407'),
(5, 'Ali', 'mahmoudn460@gmail.com', '1478530123A', 'ioj');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carte`
--
ALTER TABLE `carte`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pc_id` (`pc_id`);

--
-- Indexes for table ` feedback`
--
ALTER TABLE ` feedback`
  ADD PRIMARY KEY (`F_id`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`PR_id`),
  ADD UNIQUE KEY `name` (`P_name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carte`
--
ALTER TABLE `carte`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table ` feedback`
--
ALTER TABLE ` feedback`
  MODIFY `F_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `PR_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `carte`
--
ALTER TABLE `carte`
  ADD CONSTRAINT `carte_ibfk_1` FOREIGN KEY (`pc_id`) REFERENCES `product` (`PR_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table ` feedback`
--
ALTER TABLE ` feedback`
  ADD CONSTRAINT `feedback` FOREIGN KEY (`username`) REFERENCES `users` (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
