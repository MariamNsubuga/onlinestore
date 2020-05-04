-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 17, 2020 at 06:51 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
-- Table structure for table `cart_items`
--

CREATE TABLE `cart_items` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` decimal(10,2) NOT NULL,
  `tt_price` float NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp(),
  `modified` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart_items`
--

INSERT INTO `cart_items` (`id`, `user_id`, `product_id`, `quantity`, `tt_price`, `created`, `modified`) VALUES
(17, 1, 2, '1.00', 0, '2020-03-16 15:34:42', '2020-03-16 15:34:42'),
(18, 1, 7, '1.00', 10000, '2020-03-16 15:35:59', '2020-03-16 15:35:59'),
(19, 1, 3, '1.00', 10000, '2020-03-16 15:37:19', '2020-03-16 15:37:19');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(512) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `created` datetime NOT NULL,
  `modified` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`, `created`, `modified`) VALUES
(1, 'Farm', 'This is our farm', '200.00', '2020-03-02 19:38:49', '2020-03-02 17:40:30'),
(2, 'Turkey', 'healthy Turkeys', '5000.00', '2020-03-06 01:07:49', '2020-03-08 11:58:15'),
(3, 'Turkey', 'sample Turkey', '10000.00', '2020-03-06 01:39:44', '2020-03-08 11:58:31'),
(4, 'Turkey', 'Local Turkey', '10000.00', '2020-03-02 19:38:49', '2020-03-08 11:58:52'),
(5, 'More Turkey', 'nice feed turkey', '10000.00', '2020-03-02 19:38:49', '2020-03-08 11:59:07'),
(6, 'Turkeys', 'more of our Turkeys', '20000.00', '2020-03-02 19:38:49', '2020-03-06 03:28:55'),
(7, 'Turkeys', 'for sale ', '10000.00', '2020-03-06 06:28:55', '2020-03-08 11:59:22'),
(8, 'Turkey', 'Turkey on farm', '10000.00', '2020-03-06 06:31:12', '2020-03-08 11:59:58'),
(9, 'Turkey', 'more of Turkeys', '10000.00', '2020-03-06 06:31:12', '2020-03-08 12:00:12'),
(10, 'Hens', 'Local breed hens', '5000.00', '2020-03-02 19:38:49', '2020-03-08 12:00:33'),
(11, 'card', 'cards of all types', '6000.00', '2020-03-06 06:33:14', '2020-03-08 12:01:01'),
(12, 'Eggs', 'local eggs', '20000.00', '2020-03-06 06:38:51', '2020-03-06 03:38:51'),
(13, 'cards', 'all types of cards are available', '6000.00', '2020-03-06 06:38:51', '2020-03-08 12:01:47'),
(14, 'card', 'sample card', '3000.00', '2020-03-06 06:40:55', '2020-03-08 12:02:08'),
(15, 'cards', 'get well soon', '3000.00', '2020-03-06 06:40:55', '2020-03-08 12:02:27'),
(16, 'cards', 'welcome back', '3000.00', '2020-03-06 06:43:32', '2020-03-08 12:02:45'),
(17, 'cards', 'Thank you', '3000.00', '2020-03-06 06:43:32', '2020-03-08 12:02:59'),
(18, 'cards', 'All the best', '3000.00', '2020-03-06 06:46:08', '2020-03-08 12:03:13'),
(19, 'cards', 'You are the best', '3000.00', '2020-03-06 06:46:08', '2020-03-08 12:03:27'),
(20, 'cards', 'Thank you', '3000.00', '2020-03-06 06:47:23', '2020-03-08 12:03:42'),
(21, 'cards', 'Welcome back', '3000.00', '2020-03-06 06:47:23', '2020-03-08 12:03:56'),
(22, 'cards', 'Get well soon', '3000.00', '2020-03-18 06:48:33', '2020-03-08 12:04:17'),
(23, 'cards', 'Quick recovery', '3000.00', '2020-03-07 06:48:33', '2020-03-08 12:04:31'),
(24, 'cards', 'weldone', '3000.00', '2020-03-06 06:51:16', '2020-03-08 12:04:45'),
(25, 'cards', 'Get well soon', '3000.00', '2020-03-06 06:51:16', '2020-03-08 12:04:59'),
(26, 'card', 'I love you', '3000.00', '2020-03-06 06:52:36', '2020-03-08 12:05:26'),
(27, 'card', 'safe journey', '3000.00', '2020-03-06 06:52:36', '2020-03-08 12:05:38'),
(28, 'card', 'Thank you', '3000.00', '2020-03-05 06:54:08', '2020-03-08 12:05:50'),
(29, 'card', 'Thank you', '3000.00', '2020-03-06 06:54:08', '2020-03-08 12:06:02'),
(30, 'card', 'made from African material', '6000.00', '2020-03-06 06:56:04', '2020-03-08 12:06:16'),
(31, 'cards', 'African cards', '6000.00', '2020-03-06 06:56:04', '2020-03-08 12:06:28'),
(32, 'card', 'congratulations', '6000.00', '2020-03-06 06:58:36', '2020-03-08 12:06:45'),
(33, 'card', 'Bye', '6000.00', '2020-03-06 06:58:36', '2020-03-08 12:06:59'),
(34, 'Flower vase', 'vase', '10000.00', '2020-03-06 07:00:32', '2020-03-08 12:07:17'),
(35, 'Flower vase', 'flower vase', '10000.00', '2020-03-06 07:00:32', '2020-03-08 12:07:35'),
(36, 'Flower vase', 'Flower vase made from fabric ', '10000.00', '2020-03-06 07:02:39', '2020-03-08 12:08:03'),
(37, 'Flower vase', 'Flower vase', '10000.00', '2020-03-06 07:02:39', '2020-03-08 12:08:19'),
(38, 'Flower vase', 'African flower vase', '10000.00', '2020-03-02 19:38:49', '2020-03-08 12:08:38'),
(39, 'Flower vase', 'Blue flower vase', '10000.00', '2020-03-06 07:04:57', '2020-03-08 12:08:52'),
(40, 'Flower vase', 'flower vase', '10000.00', '2020-03-06 07:06:37', '2020-03-08 12:09:08'),
(41, ' Flower vase', 'Flower vase', '10000.00', '2020-03-06 07:06:37', '2020-03-08 12:09:26'),
(42, 'African craft', 'African craft', '20000.00', '2020-03-06 07:08:41', '2020-03-06 04:08:41'),
(43, 'African craft', 'African craft', '20000.00', '2020-03-06 07:08:41', '2020-03-06 04:08:41'),
(44, 'African craft', 'African craft', '20000.00', '2020-03-06 07:10:04', '2020-03-06 04:10:04'),
(45, 'African craft', 'African craft', '20000.00', '2020-03-06 07:10:04', '2020-03-06 04:10:04'),
(46, 'African craft', 'African craft', '20000.00', '2020-03-06 07:11:20', '2020-03-06 04:11:20'),
(47, 'African craft', 'African craft', '20000.00', '2020-03-06 07:11:20', '2020-03-06 04:11:20'),
(48, 'African crafts', 'African craft', '20000.00', '2020-03-06 07:13:01', '2020-03-06 04:13:01'),
(49, 'African craft', 'African craft', '20000.00', '2020-03-06 07:13:01', '2020-03-06 04:13:01'),
(50, 'African Bags', 'African Bag', '20000.00', '2020-03-06 07:14:23', '2020-03-06 04:14:23'),
(51, 'African bag', 'African Bag made from fiber', '20000.00', '2020-03-06 07:14:23', '2020-03-06 04:14:23'),
(52, 'African bag', 'African bag', '20000.00', '2020-03-06 07:16:11', '2020-03-06 04:16:11'),
(53, 'African bag', 'African bag', '20000.00', '2020-03-06 07:16:11', '2020-03-06 04:16:11'),
(54, 'African bag', 'African bag', '20000.00', '2020-03-06 07:17:22', '2020-03-06 04:17:22'),
(55, 'Flower Vase', 'Flower Vase', '30000.00', '2020-03-16 15:05:09', '2020-03-16 12:05:09'),
(56, 'African Bag', 'African Bag', '56000.00', '2020-03-16 15:21:07', '2020-03-16 12:21:07');

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `name` varchar(512) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `Category` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_images`
--

INSERT INTO `product_images` (`id`, `product_id`, `name`, `created`, `modified`, `Category`) VALUES
(3, 1, 'farm.jpg', '2020-03-02 19:38:49', '2020-03-02 19:43:14', 'Farm'),
(4, 2, 'Turkey.jpg', '2020-03-02 19:38:49', '2020-03-02 19:43:54', 'Animal'),
(5, 3, 'Turkey1.jpg', '2020-03-02 19:43:54', '2020-03-02 19:43:54', 'Animal'),
(6, 4, 'turkey2.jpg', '2020-03-02 19:38:49', '2020-03-02 19:45:56', 'Animal'),
(7, 5, 'turkey3.jpg', '2020-03-02 19:38:49', '2020-03-02 19:45:56', 'Animal'),
(8, 6, 'turkey4.jpg', '2020-03-02 19:38:49', '2020-03-02 19:45:56', 'Animal'),
(9, 7, 'turkey5.jpg', '2020-03-02 19:47:37', '2020-03-02 19:43:54', 'Animal'),
(10, 8, 'turkey6.jpg', '2020-03-02 19:38:49', '2020-03-02 19:45:56', 'Animal'),
(11, 9, 'turkey7.jpg', '2020-03-02 19:49:39', '2020-03-02 19:43:54', 'Animal'),
(12, 10, 'hens.jpg', '2020-03-02 19:38:49', '2020-03-02 19:45:56', 'Animal'),
(14, 12, 'eggs.jpg', '2020-03-02 19:51:17', '2020-03-02 19:43:54', 'Animal'),
(15, 13, 'cards.jpg', '2020-03-02 19:38:49', '2020-03-02 19:45:56', 'Cards'),
(16, 14, 'card1.jpg', '2020-03-02 19:52:46', '2020-03-02 19:43:54', 'Cards'),
(17, 15, 'card2.jpg', '2020-03-02 19:38:49', '2020-03-02 19:45:56', 'Cards'),
(18, 16, 'card3.jpg', '2020-03-02 19:53:52', '2020-03-02 19:43:54', 'Cards'),
(19, 17, 'card4.jpg', '2020-03-02 19:38:49', '2020-03-02 19:45:56', 'Cards'),
(20, 18, 'card5.jpg', '2020-03-02 19:55:31', '2020-03-02 19:43:54', 'Cards'),
(21, 19, 'card6.jpg', '2020-03-02 19:38:49', '2020-03-02 19:45:56', 'Cards'),
(31, 20, 'card7.jpg', '2020-03-02 19:38:49', '2020-03-02 19:45:56', 'Cards'),
(32, 21, 'card8.jpg', '2020-03-02 20:07:45', '2020-03-02 19:43:54', 'Cards'),
(33, 22, 'card9.jpg', '2020-03-02 19:38:49', '2020-03-02 19:45:56', 'Cards'),
(34, 23, 'card10.jpg', '2020-03-02 20:08:54', '2020-03-02 19:43:54', 'Cards'),
(35, 24, 'card11.jpg', '2020-03-02 19:38:49', '2020-03-02 19:45:56', 'Cards'),
(36, 25, 'card12.jpg', '2020-03-02 20:09:47', '2020-03-02 20:09:47', 'Cards'),
(37, 26, 'card13.jpg', '2020-03-02 19:38:49', '2020-03-02 19:45:56', ''),
(38, 27, 'card14.jpg', '2020-03-02 20:11:30', '2020-03-02 19:43:54', ''),
(39, 28, 'card15.jpg', '2020-03-02 19:38:49', '2020-03-02 19:45:56', ''),
(40, 29, 'card16.jpg', '2020-03-02 20:13:13', '2020-03-02 19:43:54', ''),
(41, 30, 'card17.jpg', '2020-03-02 19:38:49', '2020-03-02 19:45:56', ''),
(42, 31, 'card18.jpg', '2020-03-02 20:14:22', '2020-03-02 19:43:54', ''),
(43, 32, 'card19.jpg', '2020-03-02 19:38:49', '2020-03-02 19:45:56', ''),
(44, 33, 'card20.jpg', '2020-03-02 20:15:32', '2020-03-02 19:43:54', ''),
(45, 34, 'vases.jpg', '2020-03-02 19:38:49', '2020-03-02 19:45:56', ''),
(46, 35, 'vase1.jpg', '2020-03-02 20:16:23', '2020-03-02 19:43:54', ''),
(47, 36, 'vase2.jpg', '2020-03-02 19:38:49', '2020-03-02 19:45:56', ''),
(48, 37, 'vase3.jpg', '2020-03-02 20:17:33', '2020-03-02 19:43:54', ''),
(49, 38, 'vase4.jpg', '2020-03-02 19:38:49', '2020-03-02 19:45:56', ''),
(50, 39, 'vase5.jpg', '2020-03-02 20:19:01', '2020-03-02 19:43:54', ''),
(51, 40, 'vase6.jpg', '2020-03-02 19:38:49', '2020-03-02 19:45:56', ''),
(52, 41, 'vase7.jpg', '2020-03-02 20:20:23', '2020-03-02 19:43:54', ''),
(53, 42, 'crafts.jpg', '2020-03-02 19:38:49', '2020-03-02 19:45:56', ''),
(54, 43, 'craft1.jpg', '2020-03-02 20:21:23', '2020-03-02 19:43:54', ''),
(55, 44, 'craft2.jpg', '2020-03-02 19:58:33', '2020-03-02 19:45:56', ''),
(56, 45, 'craft3.jpg', '2020-03-02 20:22:22', '2020-03-02 19:43:54', ''),
(57, 46, 'craft4.jpg', '2020-03-02 19:38:49', '2020-03-02 19:45:56', ''),
(58, 47, 'craft5.jpg', '2020-03-02 20:23:49', '2020-03-02 19:43:54', ''),
(59, 48, 'craft6.jpg', '2020-03-02 19:38:49', '2020-03-02 19:45:56', ''),
(60, 49, 'craft7.jpg', '2020-03-02 20:24:45', '2020-03-02 19:43:54', ''),
(61, 50, 'bags.jpg', '2020-03-02 19:38:49', '2020-03-02 19:45:56', ''),
(62, 51, 'bag1.jpg', '2020-03-02 20:25:47', '2020-03-02 19:43:54', ''),
(63, 52, 'bag2.jpg', '2020-03-02 19:38:49', '2020-03-02 19:45:56', ''),
(64, 53, 'bag3.jpg', '2020-03-02 20:26:35', '2020-03-02 19:43:54', ''),
(65, 54, 'bag4.jpg', '2020-03-02 19:38:49', '2020-03-02 19:45:56', ''),
(66, 50, 'bag1.jpg', '2020-03-16 14:12:04', '2020-03-16 14:12:04', 'Bags'),
(67, 51, 'bag2.jpg', '2020-03-16 02:14:35', '2020-03-16 14:12:04', 'Bags'),
(68, 52, 'bag1.jpg', '2020-03-16 14:12:04', '2020-03-16 14:12:04', 'Bags'),
(69, 53, 'bag2.jpg', '2020-03-16 02:14:35', '2020-03-16 14:12:04', 'Bags'),
(70, 54, 'bag3.jpg', '2020-03-16 14:13:24', '2020-03-16 14:13:24', 'Bags'),
(71, 56, 'bag4.jpg', '2020-03-16 14:13:24', '2020-03-16 14:13:24', 'Bags'),
(72, 3, 'bag3.jpg', '2020-03-16 14:13:24', '2020-03-16 14:13:24', 'Bags'),
(73, 4, 'bag4.jpg', '2020-03-16 14:13:24', '2020-03-16 14:13:24', 'Bags'),
(74, 55, 'flower.jpg', '2020-03-16 14:44:57', '2020-03-16 14:44:57', 'Flower'),
(78, 34, 'flower2.jpg', '2020-03-16 14:45:57', '2020-03-16 14:45:57', 'Flower'),
(84, 36, 'flower4.jpg', '2020-03-16 14:51:21', '2020-03-16 14:51:21', 'Flower'),
(85, 37, 'flower5.jpg', '2020-03-16 14:52:21', '2020-03-16 14:52:21', 'Flower'),
(87, 38, 'flower6.jpg', '2020-03-16 14:53:10', '2020-03-16 14:53:10', 'Flower'),
(88, 39, 'flower7.jpg', '2020-03-16 14:55:07', '2020-03-16 14:55:07', 'Flower'),
(89, 40, 'flower1.jpg', '2020-03-16 15:26:56', '2020-03-16 15:26:56', 'Flower');

-- --------------------------------------------------------

--
-- Table structure for table `Users`
--

CREATE TABLE `Users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `location` varchar(20) NOT NULL,
  `contact` varchar(12) NOT NULL,
  `password` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Users`
--

INSERT INTO `Users` (`user_id`, `username`, `email`, `location`, `contact`, `password`) VALUES
(1, 'Eric Peter', 'ericpeter@gmail.com', 'Kampala Uganda', '0702560814', 'wepson@55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart_items`
--
ALTER TABLE `cart_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Users`
--
ALTER TABLE `Users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart_items`
--
ALTER TABLE `cart_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT for table `Users`
--
ALTER TABLE `Users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
