-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 15, 2018 at 05:44 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 5.6.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_myra`
--

-- --------------------------------------------------------

--
-- Table structure for table `staffs`
--

CREATE TABLE `staffs` (
  `id` int(11) NOT NULL,
  `staff_id` varchar(255) NOT NULL,
  `staff_name` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `grade` varchar(255) NOT NULL,
  `first_app_date` varchar(255) NOT NULL,
  `app_date_current` varchar(255) NOT NULL,
  `service_end_date` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `cohort` varchar(255) NOT NULL,
  `academic_quali` varchar(255) NOT NULL,
  `proff_quali` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `st_nonst` varchar(255) NOT NULL,
  `status_1` varchar(255) NOT NULL,
  `status_2` varchar(255) NOT NULL,
  `status_3` varchar(255) NOT NULL,
  `citizenship` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staffs`
--

INSERT INTO `staffs` (`id`, `staff_id`, `staff_name`, `position`, `grade`, `first_app_date`, `app_date_current`, `service_end_date`, `dob`, `age`, `cohort`, `academic_quali`, `proff_quali`, `department`, `st_nonst`, `status_1`, `status_2`, `status_3`, `citizenship`, `country`, `remarks`) VALUES
(1, '2222', 'test', 'executive', 'er', '2018-10-23', '2018-10-16', '2018-10-10', '2018-10-16', 12, '34', 'Degree', 'eer', 'fcvac', 'st', 'active', 'contract', 'full_time', 'local', 'MY', '3244'),
(2, '2332', 'ain', 'lecturer', 'a', '2018-10-17', '2018-10-08', '2018-10-02', '2018-10-16', 22, '4', 'Degree', 'fdfsd', 'fcvac', 'st', 'trainning', 'contract', 'full_time', 'local', 'MY', 'werew');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `staffid` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `department`, `staffid`) VALUES
(1, 'ain', 'ain@123', '123', '', ''),
(3, 'deen', 'mirul@gmail.com', '222', '', ''),
(4, 'user1', 'user1@gmail.com', '000', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `staffs`
--
ALTER TABLE `staffs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `staffs`
--
ALTER TABLE `staffs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
