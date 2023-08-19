-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 16, 2021 at 11:56 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hostel`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminn`
--

CREATE TABLE `adminn` (
  `adminname` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminn`
--

INSERT INTO `adminn` (`adminname`, `password`) VALUES
('123', '123'),
('honore', 'kimenyi');

-- --------------------------------------------------------

--
-- Table structure for table `hostel`
--

CREATE TABLE `hostel` (
  `hostel_id` int(25) NOT NULL,
  `hostel_name` varchar(100) NOT NULL,
  `capacity` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hostel`
--

INSERT INTO `hostel` (`hostel_id`, `hostel_name`, `capacity`) VALUES
(1, 'VUBA', 1000),
(2, 'misereore', 2000),
(3, 'Cambodge', 500);

-- --------------------------------------------------------

--
-- Table structure for table `registration_form`
--

CREATE TABLE `registration_form` (
  `regnumber` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `hostelname` varchar(255) NOT NULL,
  `roomnumber` int(255) NOT NULL,
  `phone_number` int(30) NOT NULL,
  `id_number` int(30) NOT NULL,
  `lever` int(255) NOT NULL,
  `nationality` varchar(255) NOT NULL,
  `sponsor` varchar(11) NOT NULL,
  `disabilit` varchar(11) NOT NULL,
  `college` varchar(255) NOT NULL,
  `gender` varchar(11) NOT NULL,
  `DOB` date NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration_form`
--

INSERT INTO `registration_form` (`regnumber`, `first_name`, `last_name`, `email`, `hostelname`, `roomnumber`, `phone_number`, `id_number`, `lever`, `nationality`, `sponsor`, `disabilit`, `college`, `gender`, `DOB`, `date`) VALUES
(1, 'KIMENYI', 'honore', 'honore.kimenyi@gmail.com', 'misereore', 12, 7823456, 12234455, 3, 'rwandan', 'go', 'no', 'College of Science and Technology (CST)', 'male', '2021-08-16', '2021-08-15 09:45:19'),
(2, '', '', '', '', 0, 0, 0, 0, '', '', 'yes', '', '', '0000-00-00', '2021-08-15 09:46:18'),
(3, '', '', '', '', 0, 0, 0, 0, '', '', 'yes', '', '', '0000-00-00', '2021-08-15 09:46:29'),
(4, '', '', '', '', 0, 0, 0, 0, '', '', 'yes', '', '', '0000-00-00', '2021-08-15 09:47:06'),
(5, '', '', '', '', 0, 0, 0, 0, '', '', 'yes', '', '', '0000-00-00', '2021-08-15 09:52:51'),
(6, 'KIMENYI', 'MUCYO', 'nibishaka1@gmail.com', 'misereore', 1, 12334455, 765432, 0, 'rwandan', 'gfd', 'yes', 'College of Agriculture and Veterinary Medicine (CAVM)', 'male', '2021-08-08', '2021-08-15 09:54:56');

-- --------------------------------------------------------

--
-- Table structure for table `regists`
--

CREATE TABLE `regists` (
  `student_id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(30) NOT NULL,
  `passwords` varchar(20) NOT NULL,
  `level` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `regists`
--

INSERT INTO `regists` (`student_id`, `firstname`, `lastname`, `email`, `passwords`, `level`, `created_at`) VALUES
(14, 'kabandi', 'edwin', 'nibishaka1@gmail.com', '1344', 1, '2021-08-16 08:19:03'),
(27, 'munanira', 'erisa', 'afdg@dghy', '1234', 4, '2021-08-16 08:18:18'),
(28, 'uwimana', 'teck', 'teck@gmail.com', 'uwa', 3, '2021-08-16 08:22:44'),
(29, 'KIMENYI', 'honore', 'honore.kimenyi@gmail.com', 'kimenyi', 3, '2021-08-16 11:39:52');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `room_id` int(11) NOT NULL,
  `hostel_id` int(11) NOT NULL,
  `roomtype` varchar(255) NOT NULL,
  `price` int(255) NOT NULL,
  `seater` int(11) NOT NULL,
  `staying_time` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hostel`
--
ALTER TABLE `hostel`
  ADD PRIMARY KEY (`hostel_id`);

--
-- Indexes for table `registration_form`
--
ALTER TABLE `registration_form`
  ADD PRIMARY KEY (`regnumber`);

--
-- Indexes for table `regists`
--
ALTER TABLE `regists`
  ADD PRIMARY KEY (`student_id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `email_2` (`email`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`room_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hostel`
--
ALTER TABLE `hostel`
  MODIFY `hostel_id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `registration_form`
--
ALTER TABLE `registration_form`
  MODIFY `regnumber` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `regists`
--
ALTER TABLE `regists`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
