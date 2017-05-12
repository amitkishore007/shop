-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 12, 2017 at 12:17 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `description` text,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `parent_id`, `description`, `created_at`) VALUES
(1, 'cat ', 1, 'test !', '2017-05-10 23:38:38'),
(2, 'test', 3, 'test !', '2017-05-10 23:39:08'),
(3, 'phones', 0, 'category for phones', '2017-05-10 23:46:30'),
(4, 'gadget', 3, 'subcategory of parent', '2017-05-10 23:49:11'),
(5, 'bags', 3, 'testing !', '2017-05-10 23:09:14'),
(6, 'tess', 2, 'tesging', '2017-05-10 23:10:56');

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `id` varchar(128) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `data` blob NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('a7dvt131d2ptgts7mcidnqm03pj3cds3', '::1', 1494201745, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439343230313436303b),
('c6dqgcl01ac1mt4sgjcmbftakm566k82', '::1', 1494199380, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439343230313738313b61646d696e5f69647c733a313a2231223b61646d696e5f656d61696c7c733a31343a2261646d696e4073686f702e636f6d223b726f6c657c733a31303a22737570657261646d696e223b69735f6c6f676765645f696e7c623a313b),
('rogn3g01kqf4u11i5fjtrkpv62gkuaf5', '::1', 1494457678, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439343435373537323b61646d696e5f69647c733a313a2231223b61646d696e5f656d61696c7c733a31343a2261646d696e4073686f702e636f6d223b726f6c657c733a31303a22737570657261646d696e223b69735f6c6f676765645f696e7c623a313b),
('akq7pfodclvg1q00dpcqhmbbpsg9v78r', '::1', 1494457888, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439343435373838343b61646d696e5f69647c733a313a2231223b61646d696e5f656d61696c7c733a31343a2261646d696e4073686f702e636f6d223b726f6c657c733a31303a22737570657261646d696e223b69735f6c6f676765645f696e7c623a313b),
('fikjc21aueuj6p17ruo8o91g54rbugul', '::1', 1494458654, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439343435383336333b61646d696e5f69647c733a313a2231223b61646d696e5f656d61696c7c733a31343a2261646d696e4073686f702e636f6d223b726f6c657c733a31303a22737570657261646d696e223b69735f6c6f676765645f696e7c623a313b),
('69t085vu60443hen1gci1e6m752spjsk', '::1', 1494458751, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439343435383637393b61646d696e5f69647c733a313a2231223b61646d696e5f656d61696c7c733a31343a2261646d696e4073686f702e636f6d223b726f6c657c733a31303a22737570657261646d696e223b69735f6c6f676765645f696e7c623a313b),
('r4ogqiu4043un2eom1l3ldhr8udf1pvq', '::1', 1494459561, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439343435393336313b61646d696e5f69647c733a313a2231223b61646d696e5f656d61696c7c733a31343a2261646d696e4073686f702e636f6d223b726f6c657c733a31303a22737570657261646d696e223b69735f6c6f676765645f696e7c623a313b),
('qq0jr8mgffc06f15lokj8c3t8kf8ceqj', '::1', 1494459598, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439343435393831373b61646d696e5f69647c733a313a2231223b61646d696e5f656d61696c7c733a31343a2261646d696e4073686f702e636f6d223b726f6c657c733a31303a22737570657261646d696e223b69735f6c6f676765645f696e7c623a313b),
('sooh5n7p8rphvulcu8b3hvk1e05ugupq', '::1', 1494460062, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439343436313031363b61646d696e5f69647c733a313a2231223b61646d696e5f656d61696c7c733a31343a2261646d696e4073686f702e636f6d223b726f6c657c733a31303a22737570657261646d696e223b69735f6c6f676765645f696e7c623a313b),
('s0me0hl58j3tk5pvsngg3jkqvtdtn73h', '::1', 1494549378, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439343534393134383b61646d696e5f69647c733a313a2231223b61646d696e5f656d61696c7c733a31343a2261646d696e4073686f702e636f6d223b726f6c657c733a31303a22737570657261646d696e223b69735f6c6f676765645f696e7c623a313b);

-- --------------------------------------------------------

--
-- Table structure for table `order_product`
--

CREATE TABLE `order_product` (
  `id` int(11) NOT NULL,
  `user_id` int(111) NOT NULL,
  `address` text,
  `order_status` varchar(30) NOT NULL,
  `product_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `price` decimal(10,0) DEFAULT NULL,
  `subtotal` decimal(10,0) NOT NULL,
  `payment_mode` varchar(50) NOT NULL,
  `payment_status` varchar(30) NOT NULL,
  `purchase_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `delivery_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `quantity` int(11) NOT NULL,
  `thumbnail` text,
  `option_name` varchar(255) DEFAULT NULL,
  `option_values` varchar(255) DEFAULT NULL,
  `sku` varchar(255) DEFAULT NULL,
  `category_id` int(11) NOT NULL,
  `description` text,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_images`
--

INSERT INTO `product_images` (`id`, `user_id`, `name`, `created_at`) VALUES
(1, 0, 'bfa87f0ba19ea8ff908de167ffcb04c7.jpg', '2017-05-10 23:25:18'),
(2, 0, '2944a772898a17c63f39e99feb991d17.jpg', '2017-05-10 23:25:48'),
(3, 0, 'a677c5a72f2479e35a66736354fdf442.jpg', '2017-05-10 23:25:49'),
(4, 0, 'e2afd5065e5aca36e9a96f14b2c51b08.jpg', '2017-05-10 23:25:49'),
(5, 0, '6811d6b87da357108b3cdf7c036dd15e.jpg', '2017-05-10 23:26:13'),
(6, 0, '6cd137a9b47a5f325a27567a4b7c02dd.jpg', '2017-05-10 23:26:14'),
(7, 0, 'fa1ce6d18438468578b49a08bdfa5e52.png', '2017-05-10 23:26:14'),
(8, 0, 'ba429c1fc4b32c5b262871f1b56f7f70.jpg', '2017-05-10 23:26:14'),
(9, 0, 'a73b9d72c1c58b6c5204ae97aee83657.png', '2017-05-10 23:26:15'),
(10, 0, '73465c3906c9626ae7c1fc2e33802507.jpg', '2017-05-10 23:26:15'),
(11, 1, '99b3e31e52637eae6038793a3d03745c.jpg', '2017-05-10 23:47:19'),
(12, 1, '9b7fafe726f2f128061abbc8b84fd7bb.jpg', '2017-05-10 23:53:15'),
(13, 1, '1ddd58d9934ad72b5c720656ebd0613e.jpg', '2017-05-10 23:53:16'),
(14, 1, '4e77bd7170164edbafc471648b0d3f51.jpg', '2017-05-10 23:47:34');

-- --------------------------------------------------------

--
-- Table structure for table `subcategories`
--

CREATE TABLE `subcategories` (
  `id` int(11) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subcategories`
--

INSERT INTO `subcategories` (`id`, `parent_id`, `name`, `created_at`) VALUES
(1, 1, 'child 1', '2017-05-10 23:50:04'),
(2, 1, 'child 2', '2017-05-10 23:50:04'),
(3, 2, 'child 1', '2017-05-10 23:50:04'),
(4, 3, 'child 1', '2017-05-10 23:50:04'),
(5, 3, 'child 2', '2017-05-10 23:50:04'),
(6, 3, 'child 3', '2017-05-10 23:50:04'),
(7, 4, 'child 1', '2017-05-10 23:50:04'),
(8, 5, 'child 1', '2017-05-10 23:50:04'),
(9, 6, 'child 1', '2017-05-10 23:50:04'),
(10, 6, 'child 2', '2017-05-10 23:50:04');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(32) NOT NULL,
  `user_type` varchar(10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `phone`, `email`, `password`, `user_type`, `created_at`) VALUES
(1, 'superadmin', NULL, 'admin@shop.com', 'e6e061838856bf47e1de730719fb2609', 'superadmin', '2017-05-07 23:52:09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `parent_id` (`parent_id`);

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD PRIMARY KEY (`id`,`ip_address`),
  ADD KEY `ci_sessions_timestamp` (`timestamp`);

--
-- Indexes for table `order_product`
--
ALTER TABLE `order_product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `parent_id` (`parent_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `order_product`
--
ALTER TABLE `order_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
