-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2024 at 08:19 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `user_id`, `product_id`, `price`, `qty`) VALUES
(2, 0, 4, 50, 1),
(3, 2, 2, 125, 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `number` int(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `address` varchar(30) NOT NULL,
  `address_type` varchar(30) NOT NULL,
  `method` varchar(30) NOT NULL,
  `product_id` int(20) NOT NULL,
  `price` int(20) NOT NULL,
  `qty` int(20) NOT NULL,
  `date` date DEFAULT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `name`, `number`, `email`, `address`, `address_type`, `method`, `product_id`, `price`, `qty`, `date`, `status`) VALUES
(1, 2, 'Manav Vyas', 2147483647, 'manav23067@gmail.com', '38, Bhagwati Krupa Society, Ne', 'home', 'cash on delivery', 9, 95, 1, NULL, ''),
(2, 2, 'Manav Vyas', 2147483647, 'manav23067@gmail.com', '38, Bhagwati Krupa Society, Ne', 'home', 'cash on delivery', 1, 125, 1, NULL, ''),
(7, 0, 'Manav Vyas', 2147483647, 'manav2306@gmail.com', '38, Bhagwati Krupa Society, Ne', 'home', 'cash on delivery', 1, 200, 1, NULL, 'canceled'),
(8, 0, 'Manav Vyas', 1234565672, 'manav2306@gmail.com', '38, Bhagwati Krupa Society, Ne', 'home', 'cash on delivery', 8, 120, 1, NULL, 'canceled'),
(9, 0, 'Manav Vyas', 2147483647, 'manav2306@gmail.com', '38, Bhagwati Krupa Society, Ne', 'home', 'cash on delivery', 2, 125, 1, NULL, 'canceled'),
(10, 2, 'Manav Vyas', 2147483647, 'manav2306@gmail.com', '38, Bhagwati Krupa Society, Ne', 'home', 'cash on delivery', 5, 80, 1, NULL, ''),
(11, 2, 'Manav Vyas', 2147483647, 'manavvyas029@gmail.com', '38, Bhagwati Krupa Society, Ne', 'home', 'cash on delivery', 2, 125, 1, NULL, '');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(25) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `product_detail` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `image`, `product_detail`) VALUES
(1, 'fukamushi sencha tea ', 200, 'tea.jpg', ''),
(2, 'Lemon green tea', 125, 'lemon_tea.jpg', ''),
(3, 'kabusecha green tea', 160, 'kab.jpg', ''),
(4, 'Gyokuro Green tea', 50, 'gyo.jpg', ''),
(5, 'Sweet Lemon Iced Tea', 80, 'sweet.png', ''),
(6, 'lemon Verbena Tea', 80, 'lemon.jpg', ''),
(7, 'longjing tea', 70, 'longij.png', ''),
(8, 'Gun powder tea', 120, 'gun.png', ''),
(9, 'minty lemon iced tea', 95, 'minced.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(20) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `user_type` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `user_type`) VALUES
(1, 'Manav Vyas', 'manav2306@gmail.com', '1234', NULL),
(2, 'Manav Vyas', 'manav23067@gmail.com', '1234567', NULL),
(3, 'gaurav', 'gaurav282000@gmail.com', '1234567', NULL),
(4, 'Amit', 'amit@gmail.com', '1234567', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `id` int(20) NOT NULL,
  `user_id` int(20) NOT NULL,
  `product_id` int(20) NOT NULL,
  `price` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`id`, `user_id`, `product_id`, `price`) VALUES
(1, 2, 9, 95),
(2, 0, 1, 200),
(3, 0, 2, 125),
(4, 0, 5, 80),
(5, 2, 2, 125);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `date` (`date`);

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
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
