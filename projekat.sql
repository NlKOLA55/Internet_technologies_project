-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 16, 2024 at 01:07 PM
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
-- Database: `projekat`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `Admin_Id` int(11) NOT NULL,
  `E_Mail` varchar(100) NOT NULL,
  `Pwd` varchar(255) NOT NULL,
  `Last_Login` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`Admin_Id`, `E_Mail`, `Pwd`, `Last_Login`) VALUES
(1, 'nikolamarjanusic@gmail.com', '$2y$10$J1ufhYHkWqgQcINkyOQZmuL7bpusGZXEsX3wEFB0Oaudp.Zpy6vBa', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `complaints`
--

CREATE TABLE `complaints` (
  `Complaint_Id` int(11) NOT NULL,
  `FullName` varchar(100) NOT NULL,
  `E_mail` varchar(100) NOT NULL,
  `Date_Created` datetime NOT NULL DEFAULT curtime(),
  `Tipe_Of` varchar(15) NOT NULL DEFAULT 'General',
  `Msg` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `complaints`
--

INSERT INTO `complaints` (`Complaint_Id`, `FullName`, `E_mail`, `Date_Created`, `Tipe_Of`, `Msg`) VALUES
(2, 'nikola Marjanusic', 'nikolamarjanusic@gmail.com', '2024-05-30 19:00:42', 'AboutUs', 'who are you'),
(3, 'nikola', 'Marjanusic@gmail', '2024-05-30 19:16:17', 'Reservation', 'aaaaaaaaaaaaaaaaaa'),
(8, 'nikola Marjanusic', 'n@gmail.com', '2024-06-10 17:37:32', 'Complaint', '123asdasdaweada'),
(15, 'nikola Marjanusic', 'nikolamarjanusic@gmail.com', '2024-06-10 22:15:12', 'General', '1'),
(16, 'nikola Marjanusic', 'nikolamarjanusic@gmail.com', '2024-06-10 22:15:17', 'General', '2'),
(17, 'nikola Marjanusic', 'nikolamarjanusic@gmail.com', '2024-06-10 22:15:20', 'General', '3'),
(19, 'nikola Marjanusic', 'nikolamarjanusic@gmail.com', '2024-06-11 12:50:32', 'General', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `previususers`
--

CREATE TABLE `previususers` (
  `Users_id` int(11) NOT NULL,
  `E_Mail` varchar(100) NOT NULL,
  `FullName` varchar(100) NOT NULL,
  `Banned` varchar(1) DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

CREATE TABLE `reservations` (
  `Reservation_Id` int(11) NOT NULL,
  `FullName` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `Date_set` datetime NOT NULL,
  `NumberOfSeats` tinyint(4) NOT NULL DEFAULT 1,
  `Date_Created` datetime NOT NULL DEFAULT curtime()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`Reservation_Id`, `FullName`, `email`, `Date_set`, `NumberOfSeats`, `Date_Created`) VALUES
(1, 'nikola Marjanusic', 'nikolamarjanusic@gmail.com', '2024-06-28 00:00:00', 3, '2024-05-30 21:45:28'),
(2, 'nikola Marjanusic', 'nikolamarjanusic@gmail.com', '2024-06-28 00:00:00', 3, '2024-05-30 21:53:00'),
(7, 'nikola Marjanusic', 'nikolamarjanusic@gmail.com', '2024-06-26 00:00:00', 1, '2024-06-11 16:35:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`Admin_Id`);

--
-- Indexes for table `complaints`
--
ALTER TABLE `complaints`
  ADD PRIMARY KEY (`Complaint_Id`);

--
-- Indexes for table `previususers`
--
ALTER TABLE `previususers`
  ADD PRIMARY KEY (`Users_id`);

--
-- Indexes for table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`Reservation_Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `Admin_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `complaints`
--
ALTER TABLE `complaints`
  MODIFY `Complaint_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `previususers`
--
ALTER TABLE `previususers`
  MODIFY `Users_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `Reservation_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
