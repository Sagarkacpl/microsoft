-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2024 at 06:40 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `microsoft_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_events`
--

CREATE TABLE `add_events` (
  `id` int(11) NOT NULL,
  `sports_name` varchar(255) DEFAULT NULL,
  `banner_img` varchar(255) DEFAULT NULL,
  `slot_duration` varchar(255) DEFAULT NULL,
  `location` text DEFAULT NULL,
  `location_img` text DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `start_time` time DEFAULT NULL,
  `end_time` time DEFAULT NULL,
  `capacity` varchar(255) DEFAULT NULL,
  `one_day_slot` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `terms_condition` text DEFAULT NULL,
  `deleted_status` int(11) NOT NULL DEFAULT 0,
  `updated_at` date DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_events`
--

INSERT INTO `add_events` (`id`, `sports_name`, `banner_img`, `slot_duration`, `location`, `location_img`, `start_date`, `end_date`, `start_time`, `end_time`, `capacity`, `one_day_slot`, `description`, `terms_condition`, `deleted_status`, `updated_at`, `created_at`) VALUES
(1, '4', '1718369257-7387-DOC-badminton.jpg', '120', '1,2', '1718369257-6557-DOC-Jagadeeshwar.jpg', '2024-06-15', '2024-06-30', '08:00:00', '18:00:00', '5', '1', '', '', 0, NULL, '2024-06-14 12:47:37');

-- --------------------------------------------------------

--
-- Table structure for table `master_location`
--

CREATE TABLE `master_location` (
  `id` int(11) NOT NULL,
  `location_name` varchar(255) NOT NULL,
  `deletedstatus` int(11) NOT NULL DEFAULT 0,
  `updated_at` datetime DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `master_location`
--

INSERT INTO `master_location` (`id`, `location_name`, `deletedstatus`, `updated_at`, `created_at`) VALUES
(1, 'Wing A', 0, NULL, '2024-06-14 05:55:56'),
(2, 'Wing B', 0, NULL, '2024-06-14 06:00:15'),
(3, 'Wing C', 0, NULL, '2024-06-14 06:00:21'),
(4, 'Wing D', 0, NULL, '2024-06-14 06:00:27'),
(5, 'Wing E', 0, NULL, '2024-06-14 10:40:59');

-- --------------------------------------------------------

--
-- Table structure for table `master_sports`
--

CREATE TABLE `master_sports` (
  `id` int(11) NOT NULL,
  `sports_name` varchar(255) NOT NULL,
  `deletedstatus` int(11) NOT NULL DEFAULT 0,
  `updated_at` datetime DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `master_sports`
--

INSERT INTO `master_sports` (`id`, `sports_name`, `deletedstatus`, `updated_at`, `created_at`) VALUES
(1, 'Cricket', 0, '2024-06-14 07:03:43', '2024-06-13 12:45:11'),
(2, 'Table Tannis', 0, '2024-06-14 06:50:20', '2024-06-13 12:45:58'),
(3, 'Lawn Tennis', 0, NULL, '2024-06-14 05:05:55'),
(4, 'Badminton', 0, NULL, '2024-06-14 05:06:04');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(255) NOT NULL,
  `deletedstatus` int(11) NOT NULL DEFAULT 0,
  `update_at` datetime DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `deletedstatus`, `update_at`, `created_at`) VALUES
(1, 'Admin', 'ms-admin@gmail.com', '202CB962AC59075B964B07152D234B70', 0, '2024-06-15 06:11:04', '2024-06-13 10:13:18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_events`
--
ALTER TABLE `add_events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_location`
--
ALTER TABLE `master_location`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_sports`
--
ALTER TABLE `master_sports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_events`
--
ALTER TABLE `add_events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `master_location`
--
ALTER TABLE `master_location`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `master_sports`
--
ALTER TABLE `master_sports`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
