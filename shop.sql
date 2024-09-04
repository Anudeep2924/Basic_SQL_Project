-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 09, 2023 at 07:30 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `shop`
--

CREATE TABLE `shop` (
  `id` int(3) NOT NULL,
  `price` varchar(5) NOT NULL,
  `name` text NOT NULL,
  `details` text NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `shop`
--

INSERT INTO `shop` (`id`, `price`, `name`, `details`, `image`) VALUES
(37, '₹6999', 'Apple iPhone 13', 'Apple iPhone 13 (128GB) - (Product) RED', 'https://m.media-amazon.com/images/I/71gm8v4uPBL._SX679_.jpg'),
(38, '₹100', 'iPhone 14 Pro Max', 'Apple iPhone 14 Pro Max 128GB Deep Purple', 'https://m.media-amazon.com/images/I/31GmCJTD0GL._SY445_SX342_QL70_FMwebp_.jpg'),
(39, '₹100', 'boAt Airdopes 141', 'boAt Airdopes 141 Bluetooth Truly Wireless in Ear Earbuds with mic, 42H Playtime', 'https://m.media-amazon.com/images/I/51HBom8xz7L._SY450_.jpg'),
(41, '₹100', 'OnePlus Android TV', 'OnePlus 80 cm (32 inches) Y Series HD Ready LED Smart Android TV 32Y1 ', 'https://m.media-amazon.com/images/I/71d5fMDvq9L._SX679_.jpg'),
(46, '₹3599', 'Blue Star AC', 'Blue Star 1.5 Ton 3 Star Inverter Split AC', 'https://m.media-amazon.com/images/I/319a-hhiehL._SX679_.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `shop`
--
ALTER TABLE `shop`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `shop`
--
ALTER TABLE `shop`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
