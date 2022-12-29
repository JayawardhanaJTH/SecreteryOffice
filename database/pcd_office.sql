-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 29, 2022 at 05:47 PM
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
-- Database: `pcd_office`
--

-- --------------------------------------------------------

--
-- Table structure for table `application`
--

CREATE TABLE `application` (
  `f_id` int(11) NOT NULL,
  `b_name` varchar(200) NOT NULL,
  `b_form` varchar(300) NOT NULL,
  `b_address` varchar(200) NOT NULL,
  `b_date` date NOT NULL,
  `b_emp_count` int(11) NOT NULL,
  `b_sub_name` varchar(200) NOT NULL DEFAULT 'No',
  `b_owner_address` varchar(300) NOT NULL,
  `b_contact` varchar(15) CHARACTER SET latin1 NOT NULL,
  `b_citizenship` varchar(200) NOT NULL,
  `b_email` varchar(200) CHARACTER SET latin1 NOT NULL,
  `b_ownership` varchar(200) NOT NULL,
  `b_grama_division` varchar(200) CHARACTER SET latin1 NOT NULL,
  `grama_niladhari_approval` int(11) DEFAULT 0,
  `secretary_approval` int(11) DEFAULT 0,
  `submitted_by` int(11) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `approved_date` datetime DEFAULT NULL,
  `grama_niladhari_sign` varchar(200) CHARACTER SET latin1 DEFAULT NULL,
  `secretary_sign` varchar(200) CHARACTER SET latin1 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `application`
--

INSERT INTO `application` (`f_id`, `b_name`, `b_form`, `b_address`, `b_date`, `b_emp_count`, `b_sub_name`, `b_owner_address`, `b_contact`, `b_citizenship`, `b_email`, `b_ownership`, `b_grama_division`, `grama_niladhari_approval`, `secretary_approval`, `submitted_by`, `date`, `approved_date`, `grama_niladhari_sign`, `secretary_sign`) VALUES
(19, 'Abhiru', 'Software company', '0', '2021-03-27', 5, 'aaa', 'Deepthi', '2147483647', 'Sri lankan', 'tiranharsha2323@gmail.com', 'Own business', '165 Bopitiya', 1, 1, 1, '2021-03-10 21:01:45', '2021-03-11 07:16:12', 'IT18208672', 'Samantha'),
(23, 'Abhiru', 'Software development', 'Deepthi Adhikarigoda Kalutara Sri Lanka', '2021-03-15', 10, 'no', 'Deepthi Adhikarigoda Kalutara Sri Lanka', '+94769036197', 'Sri Lankan', 'tiran2323@gmail.com', 'Own', '166 Nugape', 0, 0, 1, '2021-03-17 15:39:44', NULL, NULL, NULL),
(24, '', '2', '', '0000-00-00', 0, '', '0', '', '', '', ' ', '', 0, 0, 1, '2022-12-26 01:04:16', NULL, NULL, NULL),
(25, '', '', '', '0000-00-00', 0, '', '', '', '', '', ' ', '', 0, 0, 1, '2022-12-26 01:16:24', NULL, NULL, NULL),
(26, '', '', '', '0000-00-00', 0, '', '', '', '', '', ' ', '', 0, 0, 1, '2022-12-26 01:17:12', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `application_category`
--

CREATE TABLE `application_category` (
  `applicationCategoryId` int(11) NOT NULL,
  `categoryName` varchar(100) NOT NULL,
  `categoryCode` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `application_category`
--

INSERT INTO `application_category` (`applicationCategoryId`, `categoryName`, `categoryCode`) VALUES
(1, 'School Problem', 'SC'),
(2, 'Religous', 'RL'),
(3, 'Personal', 'PL'),
(4, 'Organization', 'SO'),
(5, 'Job', 'JO');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `e_id` int(11) NOT NULL,
  `e_name` varchar(50) NOT NULL,
  `e_date` date NOT NULL,
  `e_image` varchar(500) CHARACTER SET latin1 NOT NULL,
  `e_description` varchar(500) NOT NULL,
  `e_postDate` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`e_id`, `e_name`, `e_date`, `e_image`, `e_description`, `e_postDate`) VALUES
(2, 'සමෘද්ධි සහනාධාර', '2021-04-03', 'samurdi.jpg', 'සමෘද්ධි සහනාධාර ලබා දෙන දිනය 2021.4.3\r\n ', '2021-03-03 20:24:38'),
(3, 'අධ්‍යයාපන ආධාර ලබා දීම ', '2021-04-25', 'donation.jpg', 'අඩු ආදායම් ලාභී පවුල් වල ළමුන්ට අධ්‍යයාපන ආධාර ලබා දෙන දිනය 2021.4.25\r\n', '2021-03-17 15:11:48');

-- --------------------------------------------------------

--
-- Table structure for table `people`
--

CREATE TABLE `people` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` varchar(11) NOT NULL,
  `nic` varchar(200) NOT NULL,
  `password` varchar(50) NOT NULL,
  `electoralseat` varchar(200) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `people`
--

INSERT INTO `people` (`id`, `firstname`, `lastname`, `username`, `email`, `contact`, `nic`, `password`, `electoralseat`, `date`) VALUES
(1, 'Samantha', 'Perera', 'samantha', 'tiran2323@gmail.com', '761234567', '962841180V', 'samantha123@gmail.com', '', '2021-03-10 21:21:01'),
(2, 'Janage Tiran', 'Jayawardana', 'IT18216974', 'tiranharsha2323@gmail.com', '2147483647', '962841180V', 'samantha123@', 'ASAS', '2021-03-10 21:21:01'),
(3, 'Janage Tiran', 'Jayawardana', 'IT18208672', 'samantha@gmail.com', '2147483647', '', 'samantha123@', '', '2021-03-10 21:21:01'),
(4, 'Janage Tiran', 'Jayawardana', 'Tiran Harsha', 'samantha@gmail.com', '2147483647', '', 'CC', '164 Pamunugama', '2021-03-10 21:21:01'),
(5, 'Tiran', 'Harsha', 'IT18216974', 'samantha@gmail.com', '+1076903619', '', 'AA', '167 Uswetakriyyawa', '2021-03-10 21:21:01'),
(6, 'Aruna', 'Harsha', 'IT18208672', 'samantha@gmail.com', '+1076903619', '', 'gg', '165/A Bopitiya', '2021-03-10 21:21:01'),
(13, 'test', 'test', 'test', 'test@test.com', '2222222222', '222222222G', 'ASDasd@123', 'HO', '2022-12-26 23:54:44'),
(14, 'dd', 'dd', 'dd', 'samantha@gmail.com', '6666666666', '666666666R', 'c8dae2ac93bd33ff6dfaeeda8eda2bff', 'DE', '2022-12-26 23:56:54'),
(15, 'teset', 'test', 'test', 'tiran2323@gmail.com', '1111111111', '222222222D', '6bd6fe5c118823a652f3da79238ab277', 'CN', '2022-12-27 00:15:10');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
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
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`pid`, `first_name`, `last_name`, `email`, `grama_niladhari_division`, `gender`, `contact_number`, `address`, `password`) VALUES
(1, 'Janage Tiran', 'Jayawardana', 'tiran2323@gmail.com', '164/A Maha Pamunugama', 'male', 2147483647, '12379', 'tiran123'),
(6, 'Tiran', 'Harsha', 'tiranharsha2323@gmail.com', '164/A Maha Pamunugama', 'male', 2147483647, 'Deepthi', 'WWwv1b4@'),
(7, 'Tiran', 'Harsha', 'tiranharsha2323@gmail.com', '164 Pamunugama', 'male', 2147483647, 'Deepthi', 'A^:AA<bf2^'),
(8, 'test', 'test', 'tiran2323@gmail.com', '164 Pamunugama', 'male', 0, 'ddd', '*A1F#aFA^j'),
(9, 'test', 'test', 'tiran2323@gmail.com', '164 Pamunugama', 'male', 0, 'ddd', '*A1F#aFA^j');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `application`
--
ALTER TABLE `application`
  ADD PRIMARY KEY (`f_id`),
  ADD KEY `fk_user` (`submitted_by`);

--
-- Indexes for table `application_category`
--
ALTER TABLE `application_category`
  ADD PRIMARY KEY (`applicationCategoryId`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`e_id`);

--
-- Indexes for table `people`
--
ALTER TABLE `people`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`pid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `application`
--
ALTER TABLE `application`
  MODIFY `f_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `application_category`
--
ALTER TABLE `application_category`
  MODIFY `applicationCategoryId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `e_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `people`
--
ALTER TABLE `people`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `application`
--
ALTER TABLE `application`
  ADD CONSTRAINT `fk_user` FOREIGN KEY (`submitted_by`) REFERENCES `staff` (`pid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
