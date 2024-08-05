-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 05, 2024 at 11:39 PM
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
-- Database: `bryantcontracting`
--

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
(1, 'About us', 'BRYANT CONTRACTING LTD was established in September 2006. Managing Director Nik Bryant is the driving force behind the business and is both an experienced machine operator as well as a respected operations manager. If there is a job on your farm that needs doing we have the gear and the knowledge to get the job done.', 'bryant_contracting_bgimage_1.JPG', 'Our services', 'Bryant Contracting are able to do a large range of earthworks and agricultural work—including farm drainage, contouring, races, spraying, seeding, hay/silage and fertilizer cartage and spreading.\r\n                    We also provide cartage services.', 'bryant_contracting_bgimage_2.JPG', 'Our equipment', 'Our up to date machines include Excavators, bulldozers, truck/trailer/transporter, grader, tractors with both trailers and a full compliment of agricultural attachments—boom sprayer, discs, rotor-tiller, power harrow, roller drill, direct drill, mower, rake, baler/wrapper and more.', 'bryant_contracting_bgimage_2.JPG');

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
