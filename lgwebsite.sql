-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2023 at 12:08 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lgwebsite`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_gela`
--

CREATE TABLE `admin_gela` (
  `sr_no` int(11) NOT NULL,
  `admin_name` varchar(75) NOT NULL,
  `admin_pass` varchar(75) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_gela`
--

INSERT INTO `admin_gela` (`sr_no`, `admin_name`, `admin_pass`) VALUES
(1, 'gela', '123456'),
(4, 'blessa', '789456'),
(5, 'jay', 'jay777'),
(6, 'admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `booking_details`
--

CREATE TABLE `booking_details` (
  `sr_no` int(11) NOT NULL,
  `First_Name` varchar(300) NOT NULL,
  `Middle_Name` varchar(150) NOT NULL,
  `Last_Name` varchar(150) NOT NULL,
  `Phone` int(30) NOT NULL,
  `Email` varchar(150) NOT NULL,
  `date` date NOT NULL,
  `room` varchar(50) NOT NULL,
  `persons` varchar(50) NOT NULL,
  `Nights` int(10) NOT NULL,
  `ID_Number` varchar(100) NOT NULL,
  `Autonum` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking_details`
--

INSERT INTO `booking_details` (`sr_no`, `First_Name`, `Middle_Name`, `Last_Name`, `Phone`, `Email`, `date`, `room`, `persons`, `Nights`, `ID_Number`, `Autonum`) VALUES
(47, 'Jay', 'Dua', 'Martinez', 2147483647, 'jaymarkmartinez77@gmail.com', '2023-12-15', '1', '2', 7, 'YFST-N6H8-H9AV-58Q6', 'TRAC505251257611'),
(48, 'Angela', 'Dela Cruz', 'Oren', 954794231, 'angelaoren@gmail.com', '2024-01-03', '8', '5', 7, 'RY8S-N5CB-VFLT-RAV3', 'TRAC898377679853'),
(49, 'Erwin', 'Gomez', 'Logmao', 2147483647, 'erglogmao@gmail.com', '2023-12-21', '4', '2', 5, 'Y8KG-47UQ-N7FQ-C5GP', 'TRAC355006535751');

-- --------------------------------------------------------

--
-- Table structure for table `carousel`
--

CREATE TABLE `carousel` (
  `sr_no` int(11) NOT NULL,
  `image` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contact_details`
--

CREATE TABLE `contact_details` (
  `sr_no` int(11) NOT NULL,
  `address` varchar(50) NOT NULL,
  `gmap` varchar(100) NOT NULL,
  `pn1` bigint(11) NOT NULL,
  `pn2` bigint(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `iframe` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_details`
--

INSERT INTO `contact_details` (`sr_no`, `address`, `gmap`, `pn1`, `pn2`, `email`, `iframe`) VALUES
(1, ' X7QH+WGJ, San Marcelino, Zambales', 'https://maps.app.goo.gl/PZKRCi76jcRQETg79', 63908784056565, 639082323232, 'ask_lghotel@gmail.com', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d246659.31576809983!2d120.278765!3d14.989829!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33967dbc498de38b%3A0x8449cb4ca9ab5006!2sRodriguez%20Ranch%20-%20New%20Zealand%20of%20San%20Marcelino!5e0!3m2!1sen!2sph!4v1701625034819!5m2!1sen!2sph');

-- --------------------------------------------------------

--
-- Table structure for table `rating_room1`
--

CREATE TABLE `rating_room1` (
  `sr_no` int(11) NOT NULL,
  `user_name` varchar(200) NOT NULL,
  `user_rating` int(1) NOT NULL,
  `user_review` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rating_room1`
--

INSERT INTO `rating_room1` (`sr_no`, `user_name`, `user_rating`, `user_review`) VALUES
(18, 'Rhain', 5, 'The room quality is great!'),
(19, 'Karen', 1, 'I didn\'t like my experience here.'),
(20, 'Ken', 1, 'It\'s bad.'),
(21, 'Angela', 5, 'Service was great!'),
(22, 'Angelo', 4, 'Having the TV and Wi-Fi is nice.'),
(23, 'Erwin', 4, 'It\'s good for its price.');

-- --------------------------------------------------------

--
-- Table structure for table `rating_room2`
--

CREATE TABLE `rating_room2` (
  `sr_no` int(11) NOT NULL,
  `user_name` varchar(200) NOT NULL,
  `user_rating` int(1) NOT NULL,
  `user_review` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rating_room2`
--

INSERT INTO `rating_room2` (`sr_no`, `user_name`, `user_rating`, `user_review`) VALUES
(11, 'Jay', 5, 'The room quality is great!'),
(12, 'Karen', 1, 'My stay was bad quality.'),
(13, 'Ken', 1, 'I didn\'t like my experience here.'),
(14, 'Angela', 4, 'Service was great!'),
(15, 'Erwin', 5, 'Having the TV and Wi-Fi is nice.'),
(16, 'Angelo', 3, 'It\'s good for its price.');

-- --------------------------------------------------------

--
-- Table structure for table `rating_room3`
--

CREATE TABLE `rating_room3` (
  `sr_no` int(11) NOT NULL,
  `user_name` varchar(150) NOT NULL,
  `user_rating` int(1) NOT NULL,
  `user_review` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rating_room3`
--

INSERT INTO `rating_room3` (`sr_no`, `user_name`, `user_rating`, `user_review`) VALUES
(3, 'Jei', 3, 'The room quality is good!'),
(4, 'Jay', 5, 'The room quality is great!'),
(5, 'Rhain', 5, 'The room quality is great!'),
(6, 'Rose', 5, 'I enjoyed this room!'),
(7, 'Angelo', 4, 'It\'s a good room.'),
(8, 'Angela', 4, 'The inclusions are very nice!'),
(9, 'Erwin', 5, 'A five star experience for sure.');

-- --------------------------------------------------------

--
-- Table structure for table `rating_room4`
--

CREATE TABLE `rating_room4` (
  `sr_no` int(11) NOT NULL,
  `user_name` varchar(150) NOT NULL,
  `user_rating` int(1) NOT NULL,
  `user_review` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rating_room4`
--

INSERT INTO `rating_room4` (`sr_no`, `user_name`, `user_rating`, `user_review`) VALUES
(2, 'Angela', 5, 'The room quality is great!'),
(3, 'Erwin', 5, 'The room quality is great!'),
(4, 'Rhain', 5, 'I enjoyed this room!'),
(5, 'Jay', 5, 'The inclusions are nice!'),
(6, 'Jei', 4, 'It\'s good.'),
(7, 'Angelo', 3, 'The room is okay.');

-- --------------------------------------------------------

--
-- Table structure for table `rating_room5`
--

CREATE TABLE `rating_room5` (
  `sr_no` int(11) NOT NULL,
  `user_name` varchar(150) NOT NULL,
  `user_rating` int(1) NOT NULL,
  `user_review` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rating_room5`
--

INSERT INTO `rating_room5` (`sr_no`, `user_name`, `user_rating`, `user_review`) VALUES
(3, 'Angela', 5, 'The inclusions are very nice!'),
(4, 'Angelo', 5, 'The facilities are very nice!'),
(5, 'Rhain', 5, 'The room quality is great!'),
(6, 'Jay', 4, 'The interior is aesthetically pleasing.'),
(7, 'Erwin', 5, 'I enjoyed this room!'),
(8, 'Jei', 3, 'It was okay.');

-- --------------------------------------------------------

--
-- Table structure for table `rating_room6`
--

CREATE TABLE `rating_room6` (
  `sr_no` int(11) NOT NULL,
  `user_name` varchar(150) NOT NULL,
  `user_rating` int(1) NOT NULL,
  `user_review` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rating_room6`
--

INSERT INTO `rating_room6` (`sr_no`, `user_name`, `user_rating`, `user_review`) VALUES
(2, 'Jay', 5, 'The room quality is great!'),
(3, 'Erwin', 5, 'I enjoyed this room!'),
(4, 'Angela', 5, 'A five star experience for sure.'),
(5, 'Angelo', 4, 'It\'s good!');

-- --------------------------------------------------------

--
-- Table structure for table `rating_room7`
--

CREATE TABLE `rating_room7` (
  `sr_no` int(11) NOT NULL,
  `user_name` varchar(150) NOT NULL,
  `user_rating` int(1) NOT NULL,
  `user_review` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rating_room7`
--

INSERT INTO `rating_room7` (`sr_no`, `user_name`, `user_rating`, `user_review`) VALUES
(2, 'Jay', 5, 'The room quality is great!'),
(3, 'Angela', 5, 'I enjoyed this room!'),
(4, 'Al', 5, 'A five star experience for sure.');

-- --------------------------------------------------------

--
-- Table structure for table `rating_room8`
--

CREATE TABLE `rating_room8` (
  `sr_no` int(11) NOT NULL,
  `user_name` varchar(150) NOT NULL,
  `user_rating` int(1) NOT NULL,
  `user_review` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rating_room8`
--

INSERT INTO `rating_room8` (`sr_no`, `user_name`, `user_rating`, `user_review`) VALUES
(2, 'Angela', 5, 'A five star experience for sure!'),
(3, 'Jay', 5, 'The inclusions are very nice!');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `sr_no` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `pn` int(11) NOT NULL,
  `address` varchar(200) NOT NULL,
  `dob` date NOT NULL,
  `pass` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`sr_no`, `name`, `email`, `pn`, `address`, `dob`, `pass`) VALUES
(34, 'angela', 'wah@gmail.com', 123456789, 'address 1234', '2002-12-07', '123456'),
(35, 'al', 'al@gmail.com', 9876655, 'Address 222222', '2002-03-03', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `sr_no` int(11) NOT NULL,
  `site_title` varchar(50) NOT NULL,
  `site_about` varchar(300) NOT NULL,
  `shutdown` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`sr_no`, `site_title`, `site_about`, `shutdown`) VALUES
(1, 'LodgeGo Hotel', 'Discover serenity at LodgeGo Hotel, situated by a tranquil lake. Our upscale accommodations offer a perfect blend of luxury and nature\'s beauty. Enjoy breathtaking views, upscale amenities, and the soothing ambiance for an unforgettable retreat.', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_cred`
--

CREATE TABLE `user_cred` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `address` varchar(120) NOT NULL,
  `phonenum` varchar(100) NOT NULL,
  `pincode` int(11) NOT NULL,
  `dob` date NOT NULL,
  `password` varchar(200) NOT NULL,
  `is_verified` int(11) NOT NULL DEFAULT 0,
  `token` varchar(200) DEFAULT NULL,
  `t_expire` date DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `datentime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_queries`
--

CREATE TABLE `user_queries` (
  `sr_no` int(11) NOT NULL,
  `name` varchar(70) NOT NULL,
  `email` varchar(75) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` varchar(500) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `seen` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_queries`
--

INSERT INTO `user_queries` (`sr_no`, `name`, `email`, `subject`, `message`, `date`, `seen`) VALUES
(17, 'Angela Dela Cruz Oren', 'angelaoren@gmail.com', 'Sink Fixing', 'The sink is broken. Please send someone to fix it. Thanks.', '2023-12-15', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_gela`
--
ALTER TABLE `admin_gela`
  ADD PRIMARY KEY (`sr_no`);

--
-- Indexes for table `booking_details`
--
ALTER TABLE `booking_details`
  ADD PRIMARY KEY (`sr_no`);

--
-- Indexes for table `carousel`
--
ALTER TABLE `carousel`
  ADD PRIMARY KEY (`sr_no`);

--
-- Indexes for table `contact_details`
--
ALTER TABLE `contact_details`
  ADD PRIMARY KEY (`sr_no`);

--
-- Indexes for table `rating_room1`
--
ALTER TABLE `rating_room1`
  ADD PRIMARY KEY (`sr_no`);

--
-- Indexes for table `rating_room2`
--
ALTER TABLE `rating_room2`
  ADD PRIMARY KEY (`sr_no`);

--
-- Indexes for table `rating_room3`
--
ALTER TABLE `rating_room3`
  ADD PRIMARY KEY (`sr_no`);

--
-- Indexes for table `rating_room4`
--
ALTER TABLE `rating_room4`
  ADD PRIMARY KEY (`sr_no`);

--
-- Indexes for table `rating_room5`
--
ALTER TABLE `rating_room5`
  ADD PRIMARY KEY (`sr_no`);

--
-- Indexes for table `rating_room6`
--
ALTER TABLE `rating_room6`
  ADD PRIMARY KEY (`sr_no`);

--
-- Indexes for table `rating_room7`
--
ALTER TABLE `rating_room7`
  ADD PRIMARY KEY (`sr_no`);

--
-- Indexes for table `rating_room8`
--
ALTER TABLE `rating_room8`
  ADD PRIMARY KEY (`sr_no`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`sr_no`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`sr_no`);

--
-- Indexes for table `user_cred`
--
ALTER TABLE `user_cred`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_queries`
--
ALTER TABLE `user_queries`
  ADD PRIMARY KEY (`sr_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_gela`
--
ALTER TABLE `admin_gela`
  MODIFY `sr_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `booking_details`
--
ALTER TABLE `booking_details`
  MODIFY `sr_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `carousel`
--
ALTER TABLE `carousel`
  MODIFY `sr_no` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contact_details`
--
ALTER TABLE `contact_details`
  MODIFY `sr_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `rating_room1`
--
ALTER TABLE `rating_room1`
  MODIFY `sr_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `rating_room2`
--
ALTER TABLE `rating_room2`
  MODIFY `sr_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `rating_room3`
--
ALTER TABLE `rating_room3`
  MODIFY `sr_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `rating_room4`
--
ALTER TABLE `rating_room4`
  MODIFY `sr_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `rating_room5`
--
ALTER TABLE `rating_room5`
  MODIFY `sr_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `rating_room6`
--
ALTER TABLE `rating_room6`
  MODIFY `sr_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `rating_room7`
--
ALTER TABLE `rating_room7`
  MODIFY `sr_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `rating_room8`
--
ALTER TABLE `rating_room8`
  MODIFY `sr_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `sr_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `sr_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_cred`
--
ALTER TABLE `user_cred`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_queries`
--
ALTER TABLE `user_queries`
  MODIFY `sr_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
