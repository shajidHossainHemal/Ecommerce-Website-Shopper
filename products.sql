-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 08, 2022 at 05:43 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopper`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `product_type` varchar(30) NOT NULL,
  `brand` varchar(30) NOT NULL,
  `product_code` varchar(30) NOT NULL,
  `price` varchar(30) NOT NULL,
  `availability` varchar(30) NOT NULL,
  `sizes` varchar(30) NOT NULL,
  `colors` varchar(30) NOT NULL,
  `image_source` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_type`, `brand`, `product_code`, `price`, `availability`, `sizes`, `colors`, `image_source`) VALUES
(1, 'T-Shirt', 'GAP', 'PROD-123656', '$15.50', '15 in stock', 'Large, Medium, Small, X-Large', 'Ash, Black, Red', 'themes/images/products/1.jpg'),
(2, 'Sweaters', 'ZARA', 'PROD-423545', '$44.50', '3 in stock', 'Large, Medium', 'Black, Red', 'themes/images/products/2.jpg'),
(3, 'Casual Attire', 'H&M', 'PROD-674322', '$23', '9 in stock', 'Large, Medium, Small', 'Orange, Ash, Green, Blue', 'themes/images/products/3.jpg'),
(4, 'T-Shirt', 'ZARA', 'PROD-123234', '$17.20', '9 in stock', 'Large, Medium, X-Large', 'Green, Blue, White', 'themes/images/products/4.jpg'),
(5, 'T-Shirt', 'H&M', 'PROD-423987', '$20', 'Out of stock', 'Large, Medium, Small, X-Large', 'Black, Red, Brown', 'themes/images/products/5.jpg'),
(6, 'T-Shirt', 'GAP', 'PROD-879467', '22.50', '7 in stock', 'Large, Medium', 'Green, Blue, White', 'themes/images/products/6.jpg'),
(7, 'T-Shirt', 'GAP', 'PROD-489545', '$67.45', 'Out of stock', 'Large, Medium, Small, X-Large', 'Green, Blue, Black', 'themes/images/products/7.jpg'),
(8, 'Casual Attire', 'H&M', 'PROD-978545', '$34', '9 in stock', 'Large, Medium, Small, X-Large', 'Green, Blue, Black', 'themes/images/products/8.jpg'),
(9, 'Sweaters', 'GAP', 'PROD-1224556', '$15', 'Out of stock', 'Large, Medium', 'Black, Red', 'themes/images/products/9.jpg'),
(10, 'T-Shirt', 'ZARA', 'PROD-42398723', '$20', 'Out of stock', 'Large, Medium, Small, X-Large', 'Pink, Blue', 'themes/images/cloth/18.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
