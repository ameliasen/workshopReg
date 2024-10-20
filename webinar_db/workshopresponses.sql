-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 19, 2024 at 05:07 PM
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
-- Database: `webinar_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `workshopresponses`
--

CREATE TABLE `workshopresponses` (
  `id` int(11) NOT NULL,
  `name` char(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone_number` varchar(20) DEFAULT NULL,
  `website_or_social_handle` varchar(255) NOT NULL,
  `product_or_service` varchar(255) NOT NULL,
  `marketing_startergy` varchar(50) NOT NULL,
  `challenges` text NOT NULL,
  `expection` text NOT NULL,
  `business_duration` varchar(50) NOT NULL,
  `explore_service` char(10) NOT NULL,
  `provide_feedback` char(10) DEFAULT NULL,
  `submission_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `workshopresponses`
--

INSERT INTO `workshopresponses` (`id`, `name`, `email`, `phone_number`, `website_or_social_handle`, `product_or_service`, `marketing_startergy`, `challenges`, `expection`, `business_duration`, `explore_service`, `provide_feedback`, `submission_date`) VALUES
(1, 'Anu', 'anu887@gmail.com', NULL, 'https//google.com', 'clinik plus ', 'word of mouth', 'no customer', 'zero', '2 - 5 year', 'yes', 'no', '2024-10-18 11:27:31'),
(2, 'anya', 'amk@223gmial.com', '3254678691', 'an', 'an', 'Organic Social Media Marketing', 'an', 'an', 'an', 'Yes', 'Yes', '2024-10-18 14:46:33'),
(3, 'anya', 'amk@223gmial.com', '3254678691', 'an', 'an', 'Organic Social Media Marketing', 'an', 'an', 'an', 'Yes', 'Yes', '2024-10-18 14:46:36'),
(4, 'anya', 'amk@223gmial.com', '3254678691', 'an', 'an', 'Organic Social Media Marketing', 'an', 'an', 'an', 'Yes', 'Yes', '2024-10-18 14:46:36'),
(5, 'anya', 'amk@223gmial.com', '3254678691', 'an', 'an', 'Organic Social Media Marketing', 'an', 'an', 'an', 'Yes', 'Yes', '2024-10-18 14:46:36'),
(6, 'anya', 'amk@223gmial.com', '3254678691', 'an', 'an', 'Organic Social Media Marketing', 'an', 'an', 'an', 'Yes', 'Yes', '2024-10-18 14:46:36'),
(7, 'anya', 'amk@223gmial.com', '3254678691', 'an', 'an', 'Organic Social Media Marketing', 'an', 'an', 'an', 'Yes', 'Yes', '2024-10-18 14:46:36'),
(8, 'anya', 'amk@223gmial.com', '3254678691', 'an', 'an', 'Organic Social Media Marketing', 'an', 'an', 'an', 'Yes', 'Yes', '2024-10-18 14:46:37'),
(9, 'anya', 'amk@223gmial.com', '3254678691', 'an', 'an', 'Organic Social Media Marketing', 'an', 'an', 'an', 'Yes', 'Yes', '2024-10-18 14:46:37'),
(10, 'anya', 'amk@223gmial.com', '3254678691', 'an', 'an', 'Organic Social Media Marketing', 'an', 'an', 'an', 'Yes', 'Yes', '2024-10-18 14:46:37'),
(11, 'anya', 'amk@223gmial.com', '3254678691', 'an', 'an', 'Organic Social Media Marketing', 'an', 'an', 'an', 'Yes', 'Yes', '2024-10-18 14:46:37'),
(12, 'anya', 'amk@223gmial.com', '3254678691', 'an', 'an', 'Organic Social Media Marketing', 'an', 'an', 'an', 'Yes', 'Yes', '2024-10-18 14:47:40'),
(13, 'anya', 'amk@223gmial.com', '3254678691', 'ddd', 'rrr', 'Word of Mouth', 'ww', 'ss', 'www', 'No', 'Maybe', '2024-10-18 14:59:24'),
(14, 'annh', 'an@gmail.com', '', 'www.', 'teer', 'Paid Ads (Google, Facebook, Instagram)', 'ddd', 'uuuu', 'ggg', 'Maybe', 'Maybe', '2024-10-18 15:08:46'),
(15, 'anya', 'amk@223gmial.com', '3254678691', 'an', 'an', 'paid', 'hdduj', 'yyyhn', '5to10Years', 'yes', 'maybe', '2024-10-19 14:52:27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `workshopresponses`
--
ALTER TABLE `workshopresponses`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `workshopresponses`
--
ALTER TABLE `workshopresponses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
