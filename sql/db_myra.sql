-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 10, 2018 at 04:56 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

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
-- Table structure for table `citical_mass`
--

CREATE TABLE `citical_mass` (
  `id` int(11) NOT NULL,
  `project_id` varchar(255) NOT NULL,
  `staff_id` varchar(255) NOT NULL,
  `staff_name` varchar(255) NOT NULL,
  `fac` varchar(255) NOT NULL,
  `st_nonst` varchar(255) NOT NULL,
  `research_titlle` varchar(255) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `yr_duration` int(11) NOT NULL,
  `sponsor` varchar(255) NOT NULL,
  `sponsor_categry` varchar(255) NOT NULL,
  `grant_name` varchar(255) NOT NULL,
  `amnt_pldg` varchar(255) NOT NULL,
  `amnt_recvd` varchar(255) NOT NULL,
  `amnt_spend` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pg_student`
--

CREATE TABLE `pg_student` (
  `id` int(11) NOT NULL,
  `matric_num` int(11) NOT NULL,
  `stud_name` varchar(255) NOT NULL,
  `cgpa_bach_level` int(11) NOT NULL,
  `uni_bachelor` varchar(255) NOT NULL,
  `uni_master` varchar(255) NOT NULL,
  `degree_reg` varchar(255) NOT NULL,
  `status_mode` varchar(255) NOT NULL,
  `stud_mode` varchar(255) NOT NULL,
  `st_nonst` varchar(255) NOT NULL,
  `fac` varchar(255) NOT NULL,
  `area_stud` varchar(255) NOT NULL,
  `sponsorship` varchar(255) NOT NULL,
  `prestigious` varchar(255) NOT NULL,
  `yr_enroll` int(11) NOT NULL,
  `academic_yr` int(11) NOT NULL,
  `no_sem` int(11) NOT NULL,
  `citizenship` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `entry_date` date NOT NULL,
  `senate_date` date NOT NULL,
  `duration_stud` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `staff_sec_a`
--

CREATE TABLE `staff_sec_a` (
  `id` int(11) NOT NULL,
  `staff_id` varchar(255) NOT NULL,
  `staff_name` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `grade` varchar(255) NOT NULL,
  `first_app_date` date NOT NULL,
  `app_date_current` date NOT NULL,
  `service_end_date` date NOT NULL,
  `dob` date NOT NULL,
  `age` int(11) NOT NULL,
  `cohort` varchar(255) NOT NULL,
  `academic_quali` varchar(255) NOT NULL,
  `proff_quali` varchar(255) NOT NULL,
  `reg_num` varchar(255) NOT NULL,
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
-- Dumping data for table `staff_sec_a`
--

INSERT INTO `staff_sec_a` (`id`, `staff_id`, `staff_name`, `position`, `grade`, `first_app_date`, `app_date_current`, `service_end_date`, `dob`, `age`, `cohort`, `academic_quali`, `proff_quali`, `reg_num`, `department`, `st_nonst`, `status_1`, `status_2`, `status_3`, `citizenship`, `country`, `remarks`) VALUES
(1, 'sdf3445', 'Salmah bt Khalid', 'CEO', 'der3432', '2018-10-12', '2018-10-12', '2018-10-12', '2018-10-16', 57, '3', 'PHD', 'wedderfrfed', '', 'bursar', 'nonst', 'active', 'permanent', 'full_time', 'foreign', 'AM', 'eewr'),
(2, 'werefrwe23', 'fdfsggfs', 'CEO', 'wef', '2018-10-17', '2018-11-15', '2018-11-22', '2018-11-30', 41, '3', 'PHD', 'wedderfrfed', '', 'grad_stu', 'st', 'stud_lev', 'contract', 'full_time', 'local', 'AZ', 's');

-- --------------------------------------------------------

--
-- Table structure for table `ug_student`
--

CREATE TABLE `ug_student` (
  `id` int(11) NOT NULL,
  `matric_num` int(11) NOT NULL,
  `stud_name` varchar(255) NOT NULL,
  `fac` varchar(255) NOT NULL,
  `yr_enroll` int(11) NOT NULL,
  `academic_yr` int(11) NOT NULL,
  `citizenship` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(6, 'ain', 'ain@edu.my', '1234', 'fcvac', 'hst384920'),
(7, 'suzana', 'cril@edu.my', '1111', 'fcvac', 'fegdvdj3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `citical_mass`
--
ALTER TABLE `citical_mass`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pg_student`
--
ALTER TABLE `pg_student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff_sec_a`
--
ALTER TABLE `staff_sec_a`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ug_student`
--
ALTER TABLE `ug_student`
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
-- AUTO_INCREMENT for table `citical_mass`
--
ALTER TABLE `citical_mass`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pg_student`
--
ALTER TABLE `pg_student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `staff_sec_a`
--
ALTER TABLE `staff_sec_a`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ug_student`
--
ALTER TABLE `ug_student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
