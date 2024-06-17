-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2024 at 11:15 AM
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
-- Table structure for table `eventlocationimage`
--

CREATE TABLE `eventlocationimage` (
  `id` int(11) NOT NULL,
  `eventID` int(11) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `location_img` varchar(255) DEFAULT NULL,
  `deletedStatus` tinyint(4) DEFAULT NULL,
  `CreatedAt` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `eventlocationimage`
--

INSERT INTO `eventlocationimage` (`id`, `eventID`, `location`, `location_img`, `deletedStatus`, `CreatedAt`) VALUES
(1, 25, '1', '1718604159-5531-DOC-Abhay_Kumar_Chhajed.jpg,1718604159-6168-DOC-amar-nath-sharma.jpg,1718604159-4716-DOC-Aniket_Sunil_Talati.jpg', 0, '2024-06-17 06:02:39'),
(2, 25, '2', '1718604159-5031-DOC-Dr.-P-V-S-M-Gouri.jpg,1718604159-5104-DOC-Gyan_Chandra_Misra.jpg,1718604159-2337-DOC-Jagadeeshwar.jpg,1718604159-7514-DOC-J-Kumar.jpg', 0, '2024-06-17 06:02:39');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `eventlocationimage`
--
ALTER TABLE `eventlocationimage`
  ADD PRIMARY KEY (`id`),
  ADD KEY `eventID` (`eventID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `eventlocationimage`
--
ALTER TABLE `eventlocationimage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `eventlocationimage`
--
ALTER TABLE `eventlocationimage`
  ADD CONSTRAINT `eventlocationimage_ibfk_1` FOREIGN KEY (`eventID`) REFERENCES `add_events` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
