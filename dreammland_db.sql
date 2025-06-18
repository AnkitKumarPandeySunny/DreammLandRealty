-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2025 at 06:27 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dreammland_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `carousel_image`
--

CREATE TABLE `carousel_image` (
  `id` int(11) NOT NULL,
  `attribute` varchar(20) NOT NULL DEFAULT 'carousel image',
  `page_type` varchar(30) NOT NULL DEFAULT 'home',
  `image_url` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `carousel_image`
--

INSERT INTO `carousel_image` (`id`, `attribute`, `page_type`, `image_url`) VALUES
(28, '11111', 'home', 'home/1749977020_car.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `supporting_partners`
--

CREATE TABLE `supporting_partners` (
  `id` int(11) NOT NULL,
  `person_image` varchar(100) NOT NULL,
  `name` text NOT NULL,
  `position` varchar(50) NOT NULL,
  `mobile_no` varchar(20) NOT NULL,
  `facebook_url` varchar(265) NOT NULL,
  `insta_url` varchar(265) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `supporting_partners`
--

INSERT INTO `supporting_partners` (`id`, `person_image`, `name`, `position`, `mobile_no`, `facebook_url`, `insta_url`) VALUES
(5, 'bg2.jpg', 'Rupesh', 'wdqwqwd', '23232323', 'https://web.whatsapp.com/', 'https://web.whatsapp.com/test');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('admin','user') NOT NULL DEFAULT 'user',
  `profile_picture` varchar(255) DEFAULT 'https://plus.unsplash.com/premium_vector-1683141132250-12daa3bd85cf?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8bWFufGVufDB8fDB8fHww',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `username`, `password`, `role`, `profile_picture`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin', 'admin@gmail.com', 'admin', '52be5ff91284c65bac56f280df55f797a5c505f7ef66317ff358e34791507027', 'admin', 'https://plus.unsplash.com/premium_vector-1683141132250-12daa3bd85cf?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8bWFufGVufDB8fDB8fHww', '2025-06-06 19:59:24', '2025-06-06 19:59:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carousel_image`
--
ALTER TABLE `carousel_image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supporting_partners`
--
ALTER TABLE `supporting_partners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carousel_image`
--
ALTER TABLE `carousel_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `supporting_partners`
--
ALTER TABLE `supporting_partners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
