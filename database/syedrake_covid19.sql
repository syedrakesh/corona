-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 19, 2020 at 06:37 AM
-- Server version: 5.7.29-cll-lve
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `covid19`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(100) NOT NULL,
  `token` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `token`) VALUES
(1, 'object', '$2y$10$6YLysV6kpJBjJpQtK3Dlpu3DpugElVqMQcBLixWGgpsRbWBQNVR7m', '0'),
(2, 'god', '$2y$10$pGPAU37zxPG1nWXTtlwzX.yzAaoo4e99F/6g9LbXg4MxxumkO1hWG', '');

-- --------------------------------------------------------

--
-- Table structure for table `age`
--

CREATE TABLE `age` (
  `id` int(1) NOT NULL,
  `age` varchar(6) CHARACTER SET utf8 NOT NULL,
  `patient` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `age`
--

INSERT INTO `age` (`id`, `age`, `patient`) VALUES
(1, '0-10', 17),
(2, '11-20', 46),
(3, '21-30', 122),
(4, '31-40', 143),
(5, '41-50', 115),
(6, '51-60', 95),
(7, '60-70', 83);

-- --------------------------------------------------------

--
-- Table structure for table `chart`
--

CREATE TABLE `chart` (
  `id` int(1) NOT NULL,
  `date` varchar(10) CHARACTER SET utf8 NOT NULL,
  `per_day_confirmed` int(10) NOT NULL,
  `per_day_deaths` int(10) NOT NULL,
  `per_day_recovered` int(10) NOT NULL,
  `per_day_active` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chart`
--

INSERT INTO `chart` (`id`, `date`, `per_day_confirmed`, `per_day_deaths`, `per_day_recovered`, `per_day_active`) VALUES
(1, '08-03-2020', 3, 0, 0, 0),
(2, '09-03-2020', 0, 0, 0, 0),
(3, '10-03-2020', 0, 0, 0, 0),
(4, '11-03-2020', 0, 0, 0, 0),
(5, '12-03-2020', 0, 0, 0, 0),
(6, '13-03-2020', 0, 0, 0, 0),
(7, '14-03-2020', 0, 0, 0, 0),
(8, '15-03-2020', 2, 0, 0, 0),
(9, '16-03-2020', 3, 0, 0, 0),
(10, '17-03-2020', 2, 0, 0, 0),
(11, '18-03-2020', 4, 0, 0, 0),
(12, '19-03-2020', 3, 0, 0, 0),
(13, '20-03-2020', 3, 0, 0, 0),
(14, '21-03-2020', 4, 1, 0, 0),
(15, '22-03-2020', 3, 0, 0, 0),
(16, '23-03-2020', 6, 1, 0, 0),
(17, '24-03-2020', 6, 1, 0, 0),
(18, '25-03-2020', 0, 1, 0, 0),
(19, '26-03-2020', 5, 0, 0, 0),
(20, '27-03-2020', 4, 0, 0, 0),
(21, '28-03-2020', 0, 0, 0, 0),
(22, '29-03-2020', 0, 0, 0, 0),
(23, '30-03-2020', 1, 0, 0, 0),
(24, '31-03-2020', 2, 0, 0, 0),
(25, '01-04-2020', 3, 1, 0, 0),
(26, '02-04-2020', 2, 0, 0, 0),
(27, '03-04-2020', 5, 0, 0, 0),
(28, '04-04-2020', 9, 2, 0, 0),
(29, '05-04-2020', 18, 1, 0, 0),
(30, '06-04-2020', 35, 3, 0, 0),
(31, '07-04-2020', 41, 5, 0, 0),
(32, '08-04-2020', 54, 3, 0, 0),
(33, '09-04-2020', 112, 1, 0, 0),
(34, '10-04-2020', 94, 7, 33, 0),
(35, '11-04-2020', 58, 3, 3, 0),
(36, '12-04-2020', 139, 3, 3, 0),
(37, '13-04-2020', 182, 5, 3, 0),
(38, '14-04-2020', 209, 7, 0, 0),
(39, '15-04-2020', 219, 4, 0, 0),
(40, '16-04-2020', 341, 10, 0, 0),
(41, '17-04-2020', 266, 15, 0, 0),
(42, '18-04-2020', 309, 9, 8, 0);

-- --------------------------------------------------------

--
-- Table structure for table `district`
--

CREATE TABLE `district` (
  `id` int(5) NOT NULL,
  `district_name` text NOT NULL,
  `confirmed` int(10) NOT NULL,
  `deaths` int(10) NOT NULL,
  `recovered` int(10) NOT NULL,
  `active` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `district`
--

INSERT INTO `district` (`id`, `district_name`, `confirmed`, `deaths`, `recovered`, `active`) VALUES
(1, 'বরগুনা', 9, 0, 0, 0),
(2, 'বরিশাল', 18, 0, 0, 0),
(3, 'ভোলা', 0, 0, 0, 0),
(4, 'ঝালকাঠি', 3, 0, 0, 0),
(5, 'পটুয়াখালী', 2, 1, 0, 0),
(6, 'পিরোজপুর', 4, 0, 0, 0),
(7, 'বান্দরবান', 1, 0, 0, 0),
(8, 'ব্রাহ্মণবাড়িয়া', 10, 0, 0, 0),
(9, 'চাঁদপুর', 8, 0, 0, 2),
(10, 'চট্টগ্রাম', 38, 0, 0, 2),
(11, 'কুমিল্লা', 17, 0, 0, 0),
(12, 'কক্সবাজার', 1, 0, 0, 0),
(13, 'ফেনী', 1, 0, 0, 0),
(14, 'খাগড়াছড়ি', 0, 0, 0, 0),
(15, 'লক্ষ্মীপুর', 18, 0, 0, 0),
(16, 'নোয়াখালী', 3, 0, 0, 0),
(17, 'রাঙ্গামাটি', 0, 0, 0, 0),
(18, 'ঢাকা', 879, 10, 3, 97),
(19, 'ফরিদপুর', 4, 0, 0, 0),
(20, 'গাজীপুর', 159, 0, 0, 0),
(21, 'গোপালগঞ্জ', 21, 0, 0, 0),
(22, 'কিশোরগঞ্জ', 54, 0, 0, 0),
(23, 'মাদারীপুর', 25, 0, 0, 0),
(24, 'মানিকগঞ্জ', 6, 0, 0, 0),
(25, 'মুন্সিগঞ্জ', 33, 0, 0, 0),
(26, 'নারায়ণগঞ্জ', 309, 2, 0, 0),
(27, 'নরসিংদী', 93, 0, 0, 0),
(28, 'রাজবাড়ী', 7, 0, 0, 0),
(29, 'শরীয়তপুর', 7, 0, 0, 0),
(30, 'টাঙ্গাইল', 9, 0, 0, 0),
(31, 'বাগেরহাট', 1, 0, 0, 0),
(32, 'চুয়াডাঙ্গা', 1, 0, 0, 0),
(33, 'যশোর', 1, 0, 0, 0),
(34, 'ঝিনাইদহ', 0, 0, 0, 0),
(35, 'খুলনা', 1, 0, 0, 0),
(36, 'কুষ্টিয়া', 0, 0, 0, 0),
(37, 'মাগুরা', 0, 0, 0, 0),
(38, 'মেহেরপুর', 0, 0, 0, 0),
(39, 'নড়াইল', 2, 0, 0, 0),
(40, 'সাতক্ষীরা', 0, 0, 0, 0),
(41, 'জামালপুর', 17, 0, 0, 0),
(42, 'ময়মনসিংহ', 19, 0, 0, 0),
(43, 'নেত্রকোণা', 12, 0, 0, 0),
(44, 'শেরপুর', 11, 0, 0, 0),
(45, 'বগুড়া', 1, 0, 0, 0),
(46, 'জয়পুরহাট', 2, 0, 0, 0),
(47, 'নওগাঁ', 0, 0, 0, 0),
(48, 'নাটোর', 0, 0, 0, 0),
(49, 'চাঁপাইনবাবগঞ্জ', 0, 0, 0, 0),
(50, 'পাবনা', 1, 0, 0, 0),
(51, 'রাজশাহী', 4, 0, 0, 0),
(52, 'সিরাজগঞ্জ', 0, 0, 0, 0),
(53, 'দিনাজপুর', 9, 0, 0, 0),
(54, 'গাইবান্ধা', 12, 0, 0, 0),
(55, 'কুড়িগ্রাম', 2, 0, 0, 0),
(56, 'লালমনিরহাট', 2, 0, 0, 0),
(57, 'নীলফামারী', 9, 0, 0, 0),
(58, 'পঞ্চগড়', 1, 0, 0, 0),
(59, 'রংপুর', 1, 0, 0, 0),
(60, 'ঠাকুরগাঁও', 5, 0, 0, 0),
(61, 'হবিগঞ্জ', 1, 0, 0, 0),
(62, 'মৌলভীবাজার', 2, 0, 0, 0),
(63, 'সুনামগঞ্জ', 1, 0, 0, 0),
(64, 'সিলেট', 3, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `division`
--

CREATE TABLE `division` (
  `id` int(1) NOT NULL,
  `division_name` varchar(100) CHARACTER SET utf8 NOT NULL,
  `division_confirmed` int(10) NOT NULL,
  `division_deaths` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `division`
--

INSERT INTO `division` (`id`, `division_name`, `division_confirmed`, `division_deaths`) VALUES
(1, 'বরিশাল', 36, 0),
(2, 'চট্টগ্রাম', 97, 0),
(3, 'ঢাকা', 1606, 0),
(4, 'খুলনা', 6, 0),
(5, 'ময়মনসিংহ', 59, 0),
(6, 'রাজশাহী', 4, 0),
(7, 'রংপুর', 44, 0),
(8, 'সিলেট', 7, 0);

-- --------------------------------------------------------

--
-- Table structure for table `gender`
--

CREATE TABLE `gender` (
  `id` int(1) NOT NULL,
  `gender_label` varchar(10) NOT NULL,
  `gender_number` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gender`
--

INSERT INTO `gender` (`id`, `gender_label`, `gender_number`) VALUES
(1, 'পুরুষ', 434),
(2, 'নারী', 187);

-- --------------------------------------------------------

--
-- Table structure for table `outcome`
--

CREATE TABLE `outcome` (
  `id` int(1) NOT NULL,
  `outcome_label` varchar(15) CHARACTER SET utf8 NOT NULL,
  `outcome_number` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `outcome`
--

INSERT INTO `outcome` (`id`, `outcome_label`, `outcome_number`) VALUES
(1, 'চিকিৎসাধীন', 1994),
(2, 'সুস্থ্য', 66),
(3, 'মৃত', 84);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `age`
--
ALTER TABLE `age`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chart`
--
ALTER TABLE `chart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `district`
--
ALTER TABLE `district`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `division`
--
ALTER TABLE `division`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gender`
--
ALTER TABLE `gender`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `outcome`
--
ALTER TABLE `outcome`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `age`
--
ALTER TABLE `age`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `chart`
--
ALTER TABLE `chart`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `district`
--
ALTER TABLE `district`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `division`
--
ALTER TABLE `division`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `gender`
--
ALTER TABLE `gender`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `outcome`
--
ALTER TABLE `outcome`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
