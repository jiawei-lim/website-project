-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2019 at 09:07 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `accounts`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `productimg` varchar(100) NOT NULL,
  `productname` varchar(100) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `productimg`, `productname`, `price`) VALUES
(1, 'NpaV2Cw.png', 'Artisan Notebook AN-01', 1799),
(2, 'screenshot_2019-02-26_08.53.53.png', 'FLX-11', 10122),
(3, 'Asus-Precog-10.png', 'Awesome Matrix AMX1', 3569),
(4, '11.png', 'Epic Sliding Laptop ESL1', 4500),
(5, 'eiq-49SUWD144FSH_9_Supersize.jpg', 'Quantum Curved Display P500', 1249),
(6, 'D-1.jpg', 'Thin-X TX-1200', 9899),
(7, 'amp-with-q-acoustics-concept-40-_-free-cable2.png', 'Laranex Acoustics System SX-100', 6711),
(8, 'FB_Samsung-Galaxy-A50_600px-X-600px-300x300.png', 'iDot 9X pro', 3567),
(9, 'image31.png', 'Duo series - FTL-120 ', 1300);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(60) NOT NULL,
  `username` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `password`) VALUES
(15, 'jiawei322@gmail.com', 'Jakelim320', '$2y$10$7p1l22E0oOGDzMf.oVATo.v7n0Cc05B2PHFsK8tRnFWN1NAy8Of1i'),
(16, 'as', 'as', '$2y$10$fLdJTMPsD0NVqrUczIrNCeGSZQfX/mtR0LllvKK7H/xESbex5JYaa'),
(17, 'schlong@gmail.com ', 'BigDingDong', '$2y$10$vo.xXDtzfYjMSTCe9iXkf.qrdF8WNLais.rdDSxx3sXWmxPQyJtlK'),
(18, 'zx', 'zx', '$2y$10$bUPhAssQETMnyR1ACq.W1elx52fn.tv3ql3.jE3Zi9t1adJC.BVj2'),
(19, 'bb', 'bb', '$2y$10$pE.85oPiGVdMBTZobLdVSukyUthbuu3wMqPSu0WGk4My/Q7/BoWIG'),
(20, 'w@wd', 'w', '$2y$10$.2lfq70rpFamqkYSQP5l3.f79Go17YmfjEwWz/0jgI9KiYodkAu.u'),
(21, 'zx@email.com', 'zx', '$2y$10$FrFgc1b48S6/GU2GeK7D5.qOiFez9NHxrDgV2SpKjyU4KVKIZtabC');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
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
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
