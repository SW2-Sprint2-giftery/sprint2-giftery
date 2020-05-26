-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2020 at 01:02 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `giftry-ia`
--

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
(4, 'HP 9EV92EA ABV Pavilion 15-dk0028ne Gaming Laptop', 18999, '            15.6 Inch FHD IPS, Intel Core i7-9750H, 16 GB RAM, 1 TB SATA and 256 GB PCIe, NVIDIA GeF', 'HP.png'),
(5, 'Lenovo YOGA 730 ', 40000, '           Core i7-8550U, 15.6 Inch 4K UHD , 16GB, 1TB, nVidia GTX1050 4GB, Win10, English Keyboard ', 'Yoga.png'),
(6, 'Intel Core i7-9750H, 15.6 Inch, 1 TB Plus 512 SSD, 16 GB RAM, NVIDIA GeForce RTX 2070W10 8 GB VGA, Windows - Black', 26999, '        Intel Core i7-9750H, 15.6 Inch, 1 TB Plus 512 SSD, 16 GB RAM, NVIDIA GeForce RTX 2070W10 8 G', 'G5.png');

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
(4, 'Admin', 'admin@gmail.com', '14785', 'admin407');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
