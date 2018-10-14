-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 14, 2018 at 11:37 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `java-jam-coffee`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(11) NOT NULL,
  `customer_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `customer_name`) VALUES
(1, 'Phua Chyee Gin'),
(2, 'Sherry Chin');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `order_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `amount` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`timestamp`, `order_id`, `item_id`, `qty`, `amount`) VALUES
('2018-10-13 21:14:31', 1, 100, 1, 2),
('2018-10-13 21:14:31', 2, 101, 2, 4),
('2018-10-13 21:14:31', 3, 102, 1, 3),
('2018-10-13 21:14:31', 4, 103, 2, 9.5),
('2018-10-13 21:14:31', 5, 104, 1, 5.75),
('2018-10-14 03:41:39', 6, 100, 3, 6),
('2018-10-14 03:41:39', 7, 101, 5, 10),
('2018-10-14 03:41:39', 8, 102, 3, 9),
('2018-10-14 03:41:39', 9, 103, 4, 19),
('2018-10-14 03:41:39', 10, 104, 2, 11.5),
('2018-10-14 03:42:08', 11, 100, 12, 24),
('2018-10-14 03:42:08', 12, 101, 1, 2),
('2018-10-14 03:42:08', 13, 102, 2, 6),
('2018-10-14 03:42:08', 14, 103, 3, 14.25),
('2018-10-14 03:42:37', 15, 100, 1, 2),
('2018-10-14 03:42:37', 16, 101, 1, 2),
('2018-10-14 03:42:37', 17, 102, 1, 3),
('2018-10-14 03:42:37', 18, 103, 1, 4.75),
('2018-10-14 03:42:37', 19, 104, 1, 5.75),
('2018-10-14 06:45:05', 20, 100, 5, 10),
('2018-10-14 06:45:05', 21, 101, 1, 2),
('2018-10-14 06:45:05', 22, 102, 1, 3),
('2018-10-14 06:45:05', 23, 103, 2, 9.5),
('2018-10-14 06:45:05', 24, 104, 2, 11.5),
('2018-10-14 07:49:20', 25, 100, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `item_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `size` text NOT NULL,
  `price` float UNSIGNED NOT NULL,
  `description` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`item_id`, `name`, `size`, `price`, `description`) VALUES
(100, 'Just Java', 'Endless Cup', 2, 'Regular house blend, decaffeinated coffee or flavour of the day.'),
(101, 'Cafe au Lait', 'Single', 2, 'House blended coffee infused into a smooth, steamed milk.'),
(102, 'Cafe au Lait', 'Double', 3, 'House blended coffee infused into a smooth, steamed milk.'),
(103, 'Iced Cappuccino', 'Single', 4.75, 'Sweetened espresso blended with icy-cold milk and served in a chilled glass.'),
(104, 'Iced Cappuccino', 'Double', 5.75, 'Sweetened espresso blended with icy-cold milk and served in a chilled glass.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`) USING BTREE;

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `item_id` (`item_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`item_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `item_id` FOREIGN KEY (`item_id`) REFERENCES `products` (`item_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
