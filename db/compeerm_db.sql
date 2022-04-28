-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2022 at 11:01 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Database: `compeerm_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_tab`
--

CREATE TABLE `admin_tab` (
  `sn` int(11) NOT NULL,
  `staff_id` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `middlename` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `dob` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phonenumber` varchar(15) NOT NULL,
  `country` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `address` varchar(255) NOT NULL,
  `role_id` varchar(100) NOT NULL,
  `status_id` varchar(50) NOT NULL,
  `passport` varchar(500) NOT NULL,
  `otp` varchar(20) NOT NULL,
  `last_login` datetime NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_tab`
--

INSERT INTO `admin_tab` (`sn`, `staff_id`, `firstname`, `middlename`, `lastname`, `password`, `dob`, `gender`, `email`, `phonenumber`, `country`, `city`, `address`, `role_id`, `status_id`, `passport`, `otp`, `last_login`, `date`) VALUES
(1, 'CMI-STF-00', 'Dr', '', 'Ogunmodede', '12', '2022-03-09', 'MALE', 'basit@gmail.com', '09055066744', 'NIGERIA', 'LAGOS', '12, KOTCO', 'ADMIN', 'ACT', 'IMG-20210724-WA0013.jpg', '', '0000-00-00 00:00:00', '2022-04-21 22:50:27');

-- --------------------------------------------------------

--
-- Table structure for table `counter_tab`
--

CREATE TABLE `counter_tab` (
  `sn` int(11) NOT NULL,
  `counter_id` varchar(500) NOT NULL,
  `counter_description` varchar(500) NOT NULL,
  `counter_value` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `counter_tab`
--

INSERT INTO `counter_tab` (`sn`, `counter_id`, `counter_description`, `counter_value`) VALUES
(1, 'STF', 'count number of admin', '0'),
(2, 'STD', 'count number of students', '1'),
(3, 'STD-ADMS-', 'count number of student admission', '0');

-- --------------------------------------------------------

--
-- Table structure for table `student_registration_tab`
--

CREATE TABLE `student_registration_tab` (
  `sn` int(11) NOT NULL,
  `student_id` varchar(50) NOT NULL,
  `reg_pin` varchar(100) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `middlename` varchar(225) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(225) NOT NULL,
  `phonenumber` varchar(50) NOT NULL,
  `status_id` varchar(5) NOT NULL,
  `gender` text NOT NULL,
  `dob` varchar(100) NOT NULL,
  `country` varchar(225) NOT NULL,
  `address` varchar(225) NOT NULL,
  `state` varchar(225) NOT NULL,
  `lga` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `passport` varchar(225) NOT NULL,
  `last_login` datetime NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_registration_tab`
--

INSERT INTO `student_registration_tab` (`sn`, `student_id`, `reg_pin`, `firstname`, `middlename`, `lastname`, `email`, `phonenumber`, `status_id`, `gender`, `dob`, `country`, `address`, `state`, `lga`, `password`, `passport`, `last_login`, `date`) VALUES
(2, 'STD1', '', 'KIM', '', 'JANDI', 'afolabitaiwoabayomi112@gmail.com', '09021947874', 'A', '', '', '', '12, KOTCO ROAD', 'ONDO', '', '123', '', '0000-00-00 00:00:00', '2022-04-25 21:47:13');

-- --------------------------------------------------------

--
-- Table structure for table `s_admission_tab`
--

CREATE TABLE `s_admission_tab` (
  `sn` int(11) NOT NULL,
  `student_id` varchar(100) NOT NULL,
  `admission_id` varchar(100) NOT NULL,
  `admission_status` varchar(50) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `middlename` varchar(225) NOT NULL,
  `lastname` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `phonenumber` varchar(50) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `dob` varchar(100) NOT NULL,
  `year_program` varchar(50) NOT NULL,
  `result` varchar(255) NOT NULL,
  `essay` varchar(255) NOT NULL,
  `letter_one` varchar(255) NOT NULL,
  `letter_two` varchar(255) NOT NULL,
  `sat_or_act_score` int(11) NOT NULL,
  `country` varchar(225) NOT NULL,
  `address` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `passport` varchar(255) NOT NULL,
  `religious` varchar(100) NOT NULL,
  `lga` varchar(255) NOT NULL,
  `last_update` datetime NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_tab`
--
ALTER TABLE `admin_tab`
  ADD PRIMARY KEY (`sn`);

--
-- Indexes for table `counter_tab`
--
ALTER TABLE `counter_tab`
  ADD PRIMARY KEY (`sn`);

--
-- Indexes for table `student_registration_tab`
--
ALTER TABLE `student_registration_tab`
  ADD PRIMARY KEY (`sn`);

--
-- Indexes for table `s_admission_tab`
--
ALTER TABLE `s_admission_tab`
  ADD PRIMARY KEY (`sn`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_tab`
--
ALTER TABLE `admin_tab`
  MODIFY `sn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `counter_tab`
--
ALTER TABLE `counter_tab`
  MODIFY `sn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `student_registration_tab`
--
ALTER TABLE `student_registration_tab`
  MODIFY `sn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `s_admission_tab`
--
ALTER TABLE `s_admission_tab`
  MODIFY `sn` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;
