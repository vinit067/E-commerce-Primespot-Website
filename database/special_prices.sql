-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 17, 2022 at 05:10 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopee`
--

-- --------------------------------------------------------

--
-- Table structure for table `special_prices`
--

CREATE TABLE `special_prices` (
  `ctg_id` int(11) NOT NULL,
  `ctg_brand` varchar(255) NOT NULL,
  `ctg_name` varchar(255) NOT NULL,
  `ctg_price` double(10,2) NOT NULL,
  `ctg_image` varchar(200) NOT NULL,
  `ctg_register` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `special_prices`
--

INSERT INTO `special_prices` (`ctg_id`, `ctg_brand`, `ctg_name`, `ctg_price`, `ctg_image`, `ctg_register`) VALUES
(1, 'Apple XS', 'Apple XS', 8000.00, './assets/apple xs.jpg', '2022-03-16 14:19:27'),
(2, 'wofiehfweofnewf', 'aeowe', 8000.00, './assets/products/1.png', NULL),
(3, 'asiudhsuidh', 'odnsjndjsn', 9000.00, './assets/products/10.png', NULL),
(4, 'lsnclkjsdnv', 'skncjdanc', 8000.00, './assets/products/12.png', NULL),
(5, 'nckdnewv', 'wpdijaeifan', 9000.00, './assets/products/11.png', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `special_prices`
--
ALTER TABLE `special_prices`
  ADD PRIMARY KEY (`ctg_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `special_prices`
--
ALTER TABLE `special_prices`
  MODIFY `ctg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
