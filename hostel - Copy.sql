-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 24, 2021 at 12:42 AM
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
-- Table structure for table `booked room`
--

CREATE TABLE `booked room` (
  `booking NO:` int(255) NOT NULL,
  `student_id` int(255) NOT NULL,
  `room_id` int(255) NOT NULL,
  `room type` varchar(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(3, 'Cambodge', 500),
(4, 'TITANI ', 5000),
(5, 'vukkkk', 9000);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `pay_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  `hostel_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `registration_form`
--

CREATE TABLE `registration_form` (
  `student_id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone_number` int(10) NOT NULL,
  `id_number` int(15) NOT NULL,
  `lever` int(1) NOT NULL,
  `nationality` varchar(25) NOT NULL,
  `sponsor` varchar(11) NOT NULL,
  `disabilit` varchar(11) NOT NULL,
  `college` varchar(255) NOT NULL,
  `gender` varchar(11) NOT NULL,
  `DOB` date NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `room_id` varchar(20) DEFAULT NULL,
  `decision` varchar(225) NOT NULL,
  `paid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration_form`
--

INSERT INTO `registration_form` (`student_id`, `first_name`, `last_name`, `email`, `phone_number`, `id_number`, `lever`, `nationality`, `sponsor`, `disabilit`, `college`, `gender`, `DOB`, `date`, `room_id`, `decision`, `paid`) VALUES
(5, 'uwineza', 'avilah', 'uwineza@avilah', 897655342, 2147483647, 3, 'burundian', 'government', 'no', 'College of Science and Technology (CST)', 'female', '2021-08-16', '2021-08-20 21:36:27', '45', 'not Allowed', 0),
(6, 'lavi', 'ad', 'lavi@aliuc', 1234567, 1234567, 1, 'burundian', 'government', 'no', 'College of Business and Economics (CBE)', 'female', '2021-08-16', '2021-08-20 18:42:32', '45', 'Allowed', 0),
(11, 'patric', 'ishimwe', 'ishimwe@part', 98765432, 9876543, 1, 'ugandan', 'gov', 'no', 'College of Education (CE)', 'male', '2021-08-17', '2021-08-20 21:16:30', '3', 'not Allowed', 0),
(16, 'ale', 'olivie', 'nziza@gentile', 76, 45, 5, 'burundian', 'government', 'no', 'College of Arts and Social Sciences (CASS))', 'male', '2021-08-04', '2021-08-20 20:29:34', NULL, 'not Allowed', 0),
(18, 'uwineza', 'olivie', 'munanira@erisa', 123456789, 123456789, 3, 'ugandan', 'government', 'yes', 'College of Agriculture and Veterinary Medicine (CAVM)', 'male', '2021-08-25', '2021-08-22 11:53:21', NULL, '', 0);

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
(2, 'uwineza', 'avilah', 'munanira@erisa', '23', 1, '2021-08-22 12:22:06');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `room_id` int(11) NOT NULL,
  `hostel_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `roomtype` varchar(255) NOT NULL,
  `price` int(255) NOT NULL,
  `seater` int(11) NOT NULL,
  `staying_time` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booked room`
--
ALTER TABLE `booked room`
  ADD PRIMARY KEY (`booking NO:`),
  ADD KEY `student_id` (`student_id`,`room_id`),
  ADD KEY `room_id` (`room_id`);

--
-- Indexes for table `hostel`
--
ALTER TABLE `hostel`
  ADD PRIMARY KEY (`hostel_id`),
  ADD KEY `hostel_id` (`hostel_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD KEY `pay_id` (`pay_id`),
  ADD KEY `student_id` (`student_id`,`room_id`,`hostel_id`),
  ADD KEY `room_id` (`room_id`),
  ADD KEY `hostel_id` (`hostel_id`);

--
-- Indexes for table `registration_form`
--
ALTER TABLE `registration_form`
  ADD PRIMARY KEY (`student_id`),
  ADD KEY `student_id` (`student_id`),
  ADD KEY `room_id` (`room_id`);

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
  ADD PRIMARY KEY (`room_id`),
  ADD KEY `room_id` (`room_id`,`hostel_id`),
  ADD KEY `hostel_id` (`hostel_id`),
  ADD KEY `student_id` (`student_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hostel`
--
ALTER TABLE `hostel`
  MODIFY `hostel_id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `registration_form`
--
ALTER TABLE `registration_form`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `regists`
--
ALTER TABLE `regists`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booked room`
--
ALTER TABLE `booked room`
  ADD CONSTRAINT `booked room_ibfk_1` FOREIGN KEY (`room_id`) REFERENCES `room` (`room_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `registration_form` (`student_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `payment_ibfk_2` FOREIGN KEY (`room_id`) REFERENCES `room` (`room_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `payment_ibfk_3` FOREIGN KEY (`hostel_id`) REFERENCES `hostel` (`hostel_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `room`
--
ALTER TABLE `room`
  ADD CONSTRAINT `room_ibfk_1` FOREIGN KEY (`hostel_id`) REFERENCES `hostel` (`hostel_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `room_ibfk_2` FOREIGN KEY (`student_id`) REFERENCES `registration_form` (`student_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
