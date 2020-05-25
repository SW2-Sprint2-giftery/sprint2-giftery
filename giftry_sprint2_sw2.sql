-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2020 at 06:08 PM
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
-- Database: `giftry_sprint2_sw2`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `pc_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `username`, `pc_id`) VALUES
(9, 'Mahmoud', 10),
(10, 'Mahmoud', 11),
(11, 'Ali', 9);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(100) NOT NULL,
  `name` varchar(200) NOT NULL,
  `price` int(50) NOT NULL,
  `product_desc` varchar(100) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `price`, `product_desc`, `img`) VALUES
(9, 'Dell Inspiron G5 5590 Gaming Laptop', 26999, '             Intel Core i7-9750H, 15.6 Inch, 1 TB Plus 512 SSD, 16 GB RAM, NVIDIA GeForce RTX 2070W1', 'item_XL_99997917_62e00e7b657be.jpg'),
(10, 'HP 9EV92EA ABV Pavilion 15-dk0028ne Gaming Laptop', 18999, '                      15.6 Inch FHD IPS, Intel Core i7-9750H, 16 GB RAM, 1 TB SATA and 256 GB PCIe, ', 'item_XL_110270193_ba7990649cd9e.jpg'),
(11, 'Lenovo YOGA 730 ', 40000, '                   Core i7-8550U, 15.6 Inch 4K UHD , 16GB, 1TB, nVidia GTX1050 4GB, Win10, English K', 'item_XL_55262628_e20003accee60.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `sw2_feedback`
--

CREATE TABLE `sw2_feedback` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `text` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sw2_feedback`
--

INSERT INTO `sw2_feedback` (`id`, `username`, `text`) VALUES
(1, 'Ali', ' welcome first comment\r\n\r\n         \r\n    \r\n                \r\n                '),
(2, 'Mahmoud', ' \r\n         second comment by user mahmoud\r\n    \r\n                \r\n                ');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(100) NOT NULL,
  `username` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`, `address`) VALUES
(1, 'Mahmoud', 'mahmoudelwan460@gmail.com', '1478530123M', '407 omer ibn '),
(4, 'Admin', 'admin@gmail.com', '14785', 'admin407'),
(5, 'Ali', 'mahmoudn460@gmail.com', '1478530123A', 'ioj');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pc_id` (`pc_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `sw2_feedback`
--
ALTER TABLE `sw2_feedback`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `sw2_feedback`
--
ALTER TABLE `sw2_feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`pc_id`) REFERENCES `product` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sw2_feedback`
--
ALTER TABLE `sw2_feedback`
  ADD CONSTRAINT `sw2_feedback_ibfk_1` FOREIGN KEY (`username`) REFERENCES `user` (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
