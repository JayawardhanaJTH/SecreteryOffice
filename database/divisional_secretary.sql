-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 10, 2021 at 05:14 PM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `divisional_secretary`
--

-- --------------------------------------------------------

--
-- Table structure for table `applications`
--

CREATE TABLE `applications` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(500) NOT NULL,
  `upload_Name` varchar(100) NOT NULL,
  `downloads` int(11) NOT NULL,
  `upload_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `applications`
--

INSERT INTO `applications` (`id`, `name`, `description`, `upload_Name`, `downloads`, `upload_date`) VALUES
(1, 'Test', 'This is test file', 'Using Student Support Portal.pdf', 13, '2021-03-02 21:35:06'),
(5, 'Test2', 'This is test2 file', 'simple-array-sum-English.pdf', 0, '2021-03-03 21:47:23');

-- --------------------------------------------------------

--
-- Table structure for table `business_registration`
--

CREATE TABLE `business_registration` (
  `f_id` int(11) NOT NULL,
  `b_name` varchar(200) NOT NULL,
  `b_form` varchar(300) NOT NULL,
  `b_address` varchar(200) NOT NULL,
  `b_date` date NOT NULL,
  `b_emp_count` int(11) NOT NULL,
  `b_sub_name` varchar(200) NOT NULL DEFAULT 'No',
  `b_owner_address` varchar(300) NOT NULL,
  `b_contact` varchar(15) NOT NULL,
  `b_citizenship` varchar(200) NOT NULL,
  `b_email` varchar(200) NOT NULL,
  `b_ownership` varchar(200) NOT NULL,
  `b_grama_division` varchar(200) NOT NULL,
  `grama_niladhari_approval` int(11) DEFAULT '0',
  `secretary_approval` int(11) DEFAULT '0',
  `submitted_by` int(11) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `business_registration`
--

INSERT INTO `business_registration` (`f_id`, `b_name`, `b_form`, `b_address`, `b_date`, `b_emp_count`, `b_sub_name`, `b_owner_address`, `b_contact`, `b_citizenship`, `b_email`, `b_ownership`, `b_grama_division`, `grama_niladhari_approval`, `secretary_approval`, `submitted_by`, `date`) VALUES
(19, 'Abhiru', 'Software company', '0', '2021-03-27', 5, 'aaa', 'Deepthi', '2147483647', 'Sri lankan', 'tiranharsha2323@gmail.com', 'Own business', '165 Bopitiya', 0, 0, 1, '2021-03-10 21:01:45'),
(20, 'aaa', 'aaa', '0', '2021-03-27', 5, '', 'Deepthi', '2147483647', 'Sri lankan', 'tiranharsha2323@gmail.com', 'aaa', '168 Palliyawatta', 0, 0, 1, '2021-03-10 21:01:45'),
(31, 'aaa', 'aaa', 'Deepthi', '2021-03-18', 5, 'aaa', 'Deepthi', '+10769036197', 'Sri lankan', 'tiranharsha2323@gmail.com', 'aaa', '164/A Maha Pamunugama', 0, 0, 1, '2021-03-10 21:01:45');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `e_id` int(11) NOT NULL,
  `e_name` varchar(50) NOT NULL,
  `e_date` date NOT NULL,
  `e_image` varchar(500) NOT NULL,
  `e_description` varchar(500) NOT NULL,
  `e_postDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`e_id`, `e_name`, `e_date`, `e_image`, `e_description`, `e_postDate`) VALUES
(1, 'Event', '2021-03-12', 'Screenshot 2021-02-26 195933.png', ' Event', '2021-03-02 20:48:27'),
(2, 'Event2', '2021-03-19', '1.jpg', ' Event2', '2021-03-03 20:24:38');

-- --------------------------------------------------------

--
-- Table structure for table `people`
--

CREATE TABLE `people` (
  `pid` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `grama_niladhari_division` varchar(200) NOT NULL,
  `gender` varchar(15) NOT NULL,
  `contact_number` int(11) NOT NULL,
  `address` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `people`
--

INSERT INTO `people` (`pid`, `first_name`, `last_name`, `email`, `grama_niladhari_division`, `gender`, `contact_number`, `address`, `password`) VALUES
(1, 'Janage Tiran', 'Jayawardana', 'it18216974@my.sliit.lk', '', '', 2147483647, '12379', 'Chcoohho'),
(6, 'Tiran', 'Harsha', 'tiranharsha2323@gmail.com', '164/A Maha Pamunugama', 'male', 2147483647, 'Deepthi', '9FJ_kF<*2j');

-- --------------------------------------------------------

--
-- Table structure for table `requirement_application`
--

CREATE TABLE `requirement_application` (
  `f_id` int(11) NOT NULL,
  `full_name` varchar(200) NOT NULL,
  `division` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `email` varchar(200) NOT NULL,
  `requirement` varchar(500) NOT NULL,
  `nic` varchar(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `grama_approval` int(11) NOT NULL DEFAULT '0',
  `submitted_by` int(11) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `requirement_application`
--

INSERT INTO `requirement_application` (`f_id`, `full_name`, `division`, `address`, `contact`, `email`, `requirement`, `nic`, `gender`, `grama_approval`, `submitted_by`, `date`) VALUES
(1, '0', '165/A Bopitiya', 'Deepthi', '2147483647', 'tiranharsha2323@gmail.com', 'To register company', '962841180v', 'Male', 0, 1, '2021-03-09 20:21:44'),
(2, 'Tiran Harsha', '166 Nugape', 'Deepthi', '2147483647', 'tiranharsha2323@gmail.com', 'To register company', '962841180v', 'Male', 0, 1, '2021-03-09 20:21:44'),
(3, 'Tiran Harsha', '166 Nugape', 'Deepthi', '+10769036197', 'tiranharsha2323@gmail.com', 'To register company', '962841180v', 'Male', 0, 1, '2021-03-09 20:21:44');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` varchar(11) NOT NULL,
  `password` varchar(50) NOT NULL,
  `type` int(11) NOT NULL,
  `division` varchar(200) NOT NULL,
  `approved` int(11) NOT NULL DEFAULT '0',
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `firstname`, `lastname`, `username`, `email`, `contact`, `password`, `type`, `division`, `approved`, `date`) VALUES
(1, 'Samantha', 'Perera', 'samantha', 'samantha@gmail.com', '761234567', 'samantha123@gmail.com', 2, '', 1, '2021-03-10 21:21:01'),
(2, 'Janage Tiran', 'Jayawardana', 'IT18216974', 'samantha@gmail.com', '2147483647', 'samantha123@', 2, '', 0, '2021-03-10 21:21:01'),
(3, 'Janage Tiran', 'Jayawardana', 'IT18208672', 'samantha@gmail.com', '2147483647', 'samantha123@', 2, '', 0, '2021-03-10 21:21:01'),
(4, 'Janage Tiran', 'Jayawardana', 'Tiran Harsha', 'samantha@gmail.com', '2147483647', 'CC', 2, '164 Pamunugama', 0, '2021-03-10 21:21:01'),
(5, 'Tiran', 'Harsha', 'IT18216974', 'samantha@gmail.com', '+1076903619', 'AA', 2, '167 Uswetakriyyawa', 0, '2021-03-10 21:21:01'),
(6, 'Aruna', 'Harsha', 'IT18208672', 'samantha@gmail.com', '+1076903619', 'gg', 2, '165/A Bopitiya', 0, '2021-03-10 21:21:01');

-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

CREATE TABLE `user_login` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_login`
--

INSERT INTO `user_login` (`id`, `username`, `email`, `password`, `type`) VALUES
(1, 'Samantha', 'samantha@gmail.com', 'samantha123@', 1),
(6, 'IT18208672', 'samantha@gmail.com', 'gg', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applications`
--
ALTER TABLE `applications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `business_registration`
--
ALTER TABLE `business_registration`
  ADD PRIMARY KEY (`f_id`),
  ADD KEY `fk_user` (`submitted_by`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`e_id`);

--
-- Indexes for table `people`
--
ALTER TABLE `people`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `requirement_application`
--
ALTER TABLE `requirement_application`
  ADD PRIMARY KEY (`f_id`),
  ADD KEY `fk_user2` (`submitted_by`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_login`
--
ALTER TABLE `user_login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `applications`
--
ALTER TABLE `applications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `business_registration`
--
ALTER TABLE `business_registration`
  MODIFY `f_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `e_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `people`
--
ALTER TABLE `people`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `requirement_application`
--
ALTER TABLE `requirement_application`
  MODIFY `f_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user_login`
--
ALTER TABLE `user_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `business_registration`
--
ALTER TABLE `business_registration`
  ADD CONSTRAINT `fk_user` FOREIGN KEY (`submitted_by`) REFERENCES `people` (`pid`);

--
-- Constraints for table `requirement_application`
--
ALTER TABLE `requirement_application`
  ADD CONSTRAINT `fk_user2` FOREIGN KEY (`submitted_by`) REFERENCES `people` (`pid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
