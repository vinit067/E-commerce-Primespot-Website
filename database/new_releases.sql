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
-- Table structure for table `new_releases`
--

CREATE TABLE `new_releases` (
  `new_id` int(11) NOT NULL,
  `new_brand` varchar(200) NOT NULL,
  `new_name` varchar(200) NOT NULL,
  `new_price` double(10,2) NOT NULL,
  `new_image` varchar(200) NOT NULL,
  `new_register` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `new_releases`
--

INSERT INTO `new_releases` (`new_id`, `new_brand`, `new_name`, `new_price`, `new_image`, `new_register`) VALUES
(1, 'sckhejkceanc', 'acoewicjewiajm', 8000.00, './assets/products/15.png', NULL),
(2, 'slkasvnewkjlvnc', 'a\'eljfcnajf', 8000.00, './assets/products/12.png', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `new_releases`
--
ALTER TABLE `new_releases`
  ADD PRIMARY KEY (`new_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `new_releases`
--
ALTER TABLE `new_releases`
  MODIFY `new_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
