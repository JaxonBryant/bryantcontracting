-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 19, 2024 at 04:19 AM
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
-- Database: `bryantcontracting`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `admin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `username`, `password`, `email`, `admin`) VALUES
(1, 'test', '$2y$10$SfhYIDtn.iOuCW7zfoFLuuZHX6lja4lF4XA4JqNmpiH/.P3zB8JCa', 'test@test.com', 1),
(2, 'Jaxon', '$2y$10$ZJD/Usoqi53A2Kpcmte10uqF7o5m.djxWSE8DTjPc4o9aT6Od3rdO', 'jbryant18@piopio.school.nz', 0);

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `service_id` int(11) NOT NULL,
  `date_booking` date NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `customer_id`, `service_id`, `date_booking`, `created_at`) VALUES
(1, 2, 1, '2024-09-14', '2024-09-12 23:16:55'),
(2, 2, 4, '2024-09-20', '2024-09-12 23:18:45');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `first_name`, `last_name`, `email`, `message`, `created_at`) VALUES
(1, 'Jaxon', 'Bryant', 'jaxon@test.nz', 'test1', '2024-06-25 01:26:54.000000'),
(2, 'John', 'Doe', 'JohnDoe@test.nz', 'Hello world', '2024-06-27 00:45:33.000000'),
(3, 'John', 'Doe', 'JohnDoe@test.nz', 'Hello world again', '2024-06-27 00:45:42.000000'),
(4, '', '', '', 'I am testing to see how long messages respond to the view_contacts page. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', '2024-06-27 00:48:43.000000');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(11) NOT NULL,
  `title1` varchar(255) DEFAULT NULL,
  `text1` text DEFAULT NULL,
  `image1` varchar(255) DEFAULT NULL,
  `title2` varchar(255) DEFAULT NULL,
  `text2` text DEFAULT NULL,
  `image2` varchar(255) DEFAULT NULL,
  `title3` varchar(255) DEFAULT NULL,
  `text3` text DEFAULT NULL,
  `image3` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `title1`, `text1`, `image1`, `title2`, `text2`, `image2`, `title3`, `text3`, `image3`) VALUES
(1, 'About us', 'BRYANT CONTRACTING LTD was established in September 2006. Managing Director Nik Bryant is the driving force behind the business and is both an experienced machine operator as well as a respected operations manager. If there is a job on your farm that needs doing we have the gear and the knowledge to get the job done.', 'bryant_contracting_bgimage_1.JPG', 'Our services', 'Bryant Contracting are able to do a large range of earthworks and agricultural work—including farm drainage, contouring, races, spraying, seeding, hay/silage and fertilizer cartage and spreading.\r\n                    We also provide cartage services.', 'bryant_contracting_bgimage_2.JPG', 'Our equipment', 'Our up to date machines include Excavators, bulldozers, truck/trailer/transporter, grader, tractors with both trailers and a full compliment of agricultural attachments—boom sprayer, discs, rotor-tiller, power harrow, roller drill, direct drill, mower, rake, baler/wrapper and more.', 'bryant_contracting_bgimage_2.JPG'),
(2, 'Agriculture', 'Silage- Grass\r\nRound bales\r\nloader wagons\r\nForage harvesting\r\n\r\nSilage- Maize\r\nPlanting\r\nHarvesting \r\n\r\nCultivation and planting\r\nPower harrow\r\nRotter tilling\r\nDirect drilling - seed- fert- slug bait\r\nRoller drill\r\nDisc\r\n\r\nSpraying\r\nBoom spraying\r\n', 'bryant_contracting_bgimage_1.JPG', NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'Earthworks', '12 T Digger\r\n20 T Digger\r\nD5 Bulldozer\r\nD6 Bulldozer\r\nScoop\r\nRoller\r\nGrader', 'bryant_contracting_bgimage_1.JPG', NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'Cartage', 'Bulk trucks and trailers\r\nTransporter\r\nTractors and trailers', 'bryant_contracting_bgimage_2.JPG', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id` int(11) NOT NULL,
  `service_name` varchar(40) NOT NULL,
  `items` text NOT NULL,
  `type` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id`, `service_name`, `items`, `type`) VALUES
(1, 'Silage- Grass', 'Round bales\r\nloader wagons\r\nForage harvesting\r\n', 'Agriculture'),
(2, 'Silage- Maize', 'Planting\r\nHarvesting ', 'Agriculture'),
(3, 'Cultivation and planting', 'Power harrow\r\nRotter tilling\r\nDirect drilling - seed- fert- slug bait\r\nRoller drill\r\nDisc', 'Agriculture'),
(4, 'Spraying', 'Boom spraying', 'Agriculture'),
(5, '12 T Digger', '12 T Digger', 'EarthWorks');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customerID` (`customer_id`),
  ADD KEY `serviceID` (`service_id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bookings`
--
ALTER TABLE `bookings`
  ADD CONSTRAINT `bookings_ibfk_1` FOREIGN KEY (`service_id`) REFERENCES `service` (`id`),
  ADD CONSTRAINT `bookings_ibfk_2` FOREIGN KEY (`customer_id`) REFERENCES `accounts` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
