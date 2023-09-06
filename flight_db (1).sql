-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 06, 2023 at 08:13 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `flight_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `airlines_list`
--

CREATE TABLE `airlines_list` (
  `airline_id` int(255) NOT NULL,
  `airlines` varchar(255) NOT NULL,
  `logo_path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `airport_list`
--

CREATE TABLE `airport_list` (
  `airport_id` int(255) NOT NULL,
  `airport` varchar(255) NOT NULL,
  `logo_path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `booked_flight`
--

CREATE TABLE `booked_flight` (
  `booked_flight_id` int(255) NOT NULL,
  `flight_id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `passport` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `department_id` int(255) NOT NULL,
  `department_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`department_id`, `department_name`) VALUES
(100, 'admin'),
(101, 'staff');

-- --------------------------------------------------------

--
-- Table structure for table `flight_list`
--

CREATE TABLE `flight_list` (
  `flight_id` int(255) NOT NULL,
  `airline_id` int(255) NOT NULL,
  `plane_no` varchar(255) NOT NULL,
  `departure_airport_id` int(255) NOT NULL,
  `arrival_airport_id` int(255) NOT NULL,
  `departure_datetime` datetime NOT NULL,
  `arrival_datetime` datetime NOT NULL,
  `seats` int(255) NOT NULL,
  `price` int(255) NOT NULL,
  `created_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `department_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `address`, `contact`, `email`, `password`, `department_id`) VALUES
(1, 'Administration', '', '', 'admin@gmail.com', 'admin123', 100);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `airlines_list`
--
ALTER TABLE `airlines_list`
  ADD PRIMARY KEY (`airline_id`);

--
-- Indexes for table `airport_list`
--
ALTER TABLE `airport_list`
  ADD PRIMARY KEY (`airport_id`);

--
-- Indexes for table `booked_flight`
--
ALTER TABLE `booked_flight`
  ADD PRIMARY KEY (`booked_flight_id`),
  ADD KEY `flight_id` (`flight_id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`department_id`);

--
-- Indexes for table `flight_list`
--
ALTER TABLE `flight_list`
  ADD PRIMARY KEY (`flight_id`),
  ADD KEY `airline_id` (`airline_id`),
  ADD KEY `departure_airport_id` (`departure_airport_id`),
  ADD KEY `arrival_airport_id` (`arrival_airport_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `department_id` (`department_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `airlines_list`
--
ALTER TABLE `airlines_list`
  MODIFY `airline_id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `airport_list`
--
ALTER TABLE `airport_list`
  MODIFY `airport_id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `booked_flight`
--
ALTER TABLE `booked_flight`
  MODIFY `booked_flight_id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `flight_list`
--
ALTER TABLE `flight_list`
  MODIFY `flight_id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booked_flight`
--
ALTER TABLE `booked_flight`
  ADD CONSTRAINT `booked_flight_ibfk_1` FOREIGN KEY (`flight_id`) REFERENCES `flight_list` (`flight_id`);

--
-- Constraints for table `flight_list`
--
ALTER TABLE `flight_list`
  ADD CONSTRAINT `flight_list_ibfk_1` FOREIGN KEY (`airline_id`) REFERENCES `airlines_list` (`airline_id`),
  ADD CONSTRAINT `flight_list_ibfk_2` FOREIGN KEY (`departure_airport_id`) REFERENCES `airport_list` (`airport_id`),
  ADD CONSTRAINT `flight_list_ibfk_3` FOREIGN KEY (`arrival_airport_id`) REFERENCES `airport_list` (`airport_id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`department_id`) REFERENCES `department` (`department_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
