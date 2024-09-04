-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 04, 2024 at 07:35 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `college_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `apply_form`
--

CREATE TABLE `apply_form` (
  `name` varchar(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `mname` varchar(100) NOT NULL,
  `nation` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` int(50) NOT NULL,
  `category` varchar(50) NOT NULL,
  `course` varchar(100) NOT NULL,
  `program` varchar(100) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `dob` varchar(30) NOT NULL,
  `addres` varchar(100) NOT NULL,
  `degree` varchar(100) NOT NULL,
  `years` varchar(30) NOT NULL,
  `percent` varchar(30) NOT NULL,
  `stream` varchar(50) NOT NULL,
  `deg` varchar(30) NOT NULL,
  `yea` varchar(30) NOT NULL,
  `perc` varchar(30) NOT NULL,
  `str` varchar(50) NOT NULL,
  `gname` varchar(100) NOT NULL,
  `pdf_url` varchar(100) NOT NULL,
  `hname` varchar(100) NOT NULL,
  `pd_url` varchar(100) NOT NULL,
  `iname` varchar(100) NOT NULL,
  `p_url` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `apply_form`
--

INSERT INTO `apply_form` (`name`, `fname`, `mname`, `nation`, `email`, `phone`, `category`, `course`, `program`, `gender`, `dob`, `addres`, `degree`, `years`, `percent`, `stream`, `deg`, `yea`, `perc`, `str`, `gname`, `pdf_url`, `hname`, `pd_url`, `iname`, `p_url`) VALUES
('Priti', ' Ram', 'Sita', 'Indian', 'priti824@gmail.com', 2147483647, 'OBC', 'Btech', 'CSE', 'female', '2018-06-10', 'Hostel-03, MMDU, Mullana-133205', 'cbse', '2013', '60', 'pcm', 'cbse', '2015', '70', 'pcmb', 'Priti', 'http://localhost/project1/CAP/user/uploads/1 Algorithms 2.pdf', 'Priti', 'http://localhost/project1/CAP/user/uploads/..Name- Pooja Singh, Roll no - 11202677 , Section- C2.pdf', 'Priti', 'http://localhost/project1/CAP/user/uploads/8CSE Syllabi (Batch 2020-2024) (1).pdf'),
('Isha', ' Abc', 'ccd', 'Indian', 'ishagh94@gmail.com', 2147483647, 'SC/ST', 'Btech', 'ME', 'female', '2020-01-12', 'Madhubani,Bihar-837446', 'cbse', '2015', '45', 'pcm', 'cbse', '2017', '50', 'pcmb', 'Isha', 'http://localhost/project1/CAP/user/uploads/agile notes by pooja.pdf', 'Isha', 'http://localhost/project1/CAP/user/uploads/1 Algorithms 2.pdf', 'Isha', 'http://localhost/project1/CAP/user/uploads/..Name- Pooja Singh, Roll no - 11202677 , Section- C2.pdf'),
('Ari', ' Xyz', 'Xyzz', 'Indian', 'xyz22@gmail.com', 2147483647, 'General', 'Btech', 'CSE', 'female', '2024-07-29', 'Village  - Jamuna, PS - Madhubani', 'cbse', '2013', '60', 'pcm', 'cbse', '2017', '70', 'pcmb', 'Ari', 'http://localhost/project1/CAP/user/uploads/Jake_s_Resume.pdf', 'Ari', 'http://localhost/project1/CAP/user/uploads/Android SMS.pdf', 'Ari', 'http://localhost/project1/CAP/user/uploads/1 Algorithms 2.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `college`
--

CREATE TABLE `college` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `collegeid` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `college`
--

INSERT INTO `college` (`id`, `name`, `collegeid`, `password`) VALUES
(1, 'MMDU', 'MMU#124', 'password'),
(2, 'LPU', 'Lpu!@123', 'lpu123');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id` int(100) NOT NULL,
  `collegename` varchar(100) NOT NULL,
  `courseoffered` varchar(100) NOT NULL,
  `specoffered` varchar(100) NOT NULL,
  `feestr` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `collegename`, `courseoffered`, `specoffered`, `feestr`) VALUES
(2, 'MMDU', ' MCA', 'CSE', '1.3L/Yr'),
(8, 'IITM', ' B.Tech', 'Cyber Security', '2LPA/Yr');

-- --------------------------------------------------------

--
-- Table structure for table `regform`
--

CREATE TABLE `regform` (
  `collegecode` varchar(100) NOT NULL,
  `collegename` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `accred` varchar(50) NOT NULL,
  `placement` varchar(50) NOT NULL,
  `avpackage` varchar(50) NOT NULL,
  `hpackage` varchar(50) NOT NULL,
  `weburl` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `regform`
--

INSERT INTO `regform` (`collegecode`, `collegename`, `location`, `accred`, `placement`, `avpackage`, `hpackage`, `weburl`) VALUES
('1124cu09', ' Chandigarh University', 'Mohali,Punjab', 'NBA,NAAC', '90%', '6LPA', '50LPA', 'https://www.cuchd.in/'),
('1221Lpu06', ' LPU', 'Jalandhar, Punjab', 'NBA,NAAC', '75%', '5LPA', ' 50LPA', 'https://www.lpu.in/'),
('iit1@2', ' IITM', 'Madras', 'NBA,NAAC', '99%', '23LPA', '90LPA', 'https://www.iitm.in/'),
('SRM!089', ' SNU', 'Delhi', 'NBA,NAAC', '96%', '5LPA', '55LPA', 'https://www.snu.in/'),
('SRM189u', 'SRM', 'Hyderabad', 'NBA,NAAC', '86%', '5LPA', '45LPA', 'https://www.srmi.in/'),
('vit102s1', ' VIT', 'Vellore,India', 'NBA,NAAC', '80%', '6LPA', '85LPA', 'https://www.vit.in/');

-- --------------------------------------------------------

--
-- Table structure for table `scholarlist`
--

CREATE TABLE `scholarlist` (
  `collegecode` varchar(100) NOT NULL,
  `criteria` varchar(191) NOT NULL,
  `amount` varchar(30) NOT NULL,
  `feeremain` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `scholarlist`
--

INSERT INTO `scholarlist` (`collegecode`, `criteria`, `amount`, `feeremain`) VALUES
('1124@09U', '90%above in 12th/ 85%ile above in JEE', '50%', 'Rs.50000'),
('1124@09U', '80%-90% in 12th/ 70%ile-85%ile in JEE', '30%', 'Rs.70000'),
('SRM!089', '90%above in 12th/ 85%ile above in JEE', '60%', 'Rs.40000'),
('SRM!089', '80%-90% in 12th/ 70%ile-85%ile in JEE', '40%', 'Rs.60000'),
('SRM!089', '70%-80% in 12th/ 60%ile-70%ile in JEE', '20%', '80000'),
('1221Lpu06', '90%above in 12th/ 85%ile above in JEE', '30%', 'Rs.70000'),
('1221Lpu06', '80%-90% in 12th/ 70%ile-85%ile in JEE', '10%', 'Rs.90000'),
('MM@101', '90%above in 12th/ 85%ile above in JEE', '20%', 'Rs.80000'),
('MM@101', '80%-90% in 12th/ 70%ile-85%ile in JEE', '10%', 'Rs.90000'),
('1124cu09', '	90%above in 12th/ 85%ile above in JEE', '50%	', 'Rs.50000'),
('1124cu09', '80%-90% in 12th/ 70%ile-85%ile in JEE	', '40%	', 'Rs.60000');

-- --------------------------------------------------------

--
-- Table structure for table `studentlist`
--

CREATE TABLE `studentlist` (
  `id` int(100) NOT NULL,
  `studentname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `studentlist`
--

INSERT INTO `studentlist` (`id`, `studentname`, `email`, `contact`, `status`) VALUES
(1, 'Pooja', 'poojasingh894@gmail.com', '9193567349', 'applied'),
(2, 'Rimjhim', '  rimjhim12@gmail.com', '9193567634', ' not_applied'),
(3, 'Priti', '  priti321@gmail.com', '6298245634', ' applied');

-- --------------------------------------------------------

--
-- Table structure for table `suggested_data`
--

CREATE TABLE `suggested_data` (
  `collegecode` varchar(50) NOT NULL,
  `collegename` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `accred` varchar(100) NOT NULL,
  `placement` varchar(100) NOT NULL,
  `avpackage` varchar(50) NOT NULL,
  `hpackage` varchar(50) NOT NULL,
  `weburl` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `suggested_data`
--

INSERT INTO `suggested_data` (`collegecode`, `collegename`, `location`, `accred`, `placement`, `avpackage`, `hpackage`, `weburl`) VALUES
('1124cu09', 'Chandigarh University', 'Mohali,Punjab', 'NBA,NAAC', '90%', '6LPA', '55LPA', 'https://www.cuchd.in/'),
('1124cu09', 'Chandigarh University', 'Mohali,Punjab', 'NBA,NAAC', '90%', '6LPA', '55LPA', 'https://www.cuchd.in/'),
('1124cu09', 'Chandigarh University', 'Mohali,Punjab', 'NBA,NAAC', '90%', '6LPA', '55LPA', 'https://www.cuchd.in/'),
('1124cu09', 'Chandigarh University', 'Mohali,Punjab', 'NBA,NAAC', '90%', '6LPA', '55LPA', 'https://www.cuchd.in/'),
('SRM!089', 'SNU', 'Delhi', 'NBA,NAAC', '96%', '5LPA', '55LPA', 'https://www.snu.in/'),
('SRM!089', 'SNU', 'Delhi', 'NBA,NAAC', '96%', '5LPA', '55LPA', 'https://www.snu.in/'),
('SRM!089', 'SNU', 'Delhi', 'NBA,NAAC', '96%', '5LPA', '55LPA', 'https://www.snu.in/'),
('SRM!089', 'SNU', 'Delhi', 'NBA,NAAC', '96%', '5LPA', '55LPA', 'https://www.snu.in/'),
('SRM!089', 'SNU', 'Delhi', 'NBA,NAAC', '96%', '5LPA', '55LPA', 'https://www.snu.in/'),
('SRM!089', 'SNU', 'Delhi', 'NBA,NAAC', '96%', '5LPA', '55LPA', 'https://www.snu.in/'),
('SRM!089', 'SNU', 'Delhi', 'NBA,NAAC', '96%', '5LPA', '55LPA', 'https://www.snu.in/'),
('SRM!089', 'SNU', 'Delhi', 'NBA,NAAC', '96%', '5LPA', '55LPA', 'https://www.snu.in/'),
('SRM!089', 'SNU', 'Delhi', 'NBA,NAAC', '96%', '5LPA', '55LPA', 'https://www.snu.in/'),
('SRM!089', 'SNU', 'Delhi', 'NBA,NAAC', '96%', '5LPA', '55LPA', 'https://www.snu.in/'),
('SRM!089', 'SNU', 'Delhi', 'NBA,NAAC', '96%', '5LPA', '55LPA', 'https://www.snu.in/'),
('SRM!089', 'SNU', 'Delhi', 'NBA,NAAC', '96%', '5LPA', '55LPA', 'https://www.snu.in/'),
('SRM!089', 'SNU', 'Delhi', 'NBA,NAAC', '96%', '5LPA', '55LPA', 'https://www.snu.in/'),
('SRM!089', 'SNU', 'Delhi', 'NBA,NAAC', '96%', '5LPA', '55LPA', 'https://www.snu.in/'),
('SRM!089', 'SNU', 'Delhi', 'NBA,NAAC', '96%', '5LPA', '55LPA', 'https://www.snu.in/'),
('vit102s1', 'VIT', 'Vellore,India', 'NBA,NAAC', '80%', '6LPA', '85LPA', 'https://www.vit.in/'),
('vit102s1', 'VIT', 'Vellore,India', 'NBA,NAAC', '80%', '6LPA', '85LPA', 'https://www.vit.in/'),
('SRM189u', 'SRM', 'Hyderabad', 'NBA,NAAC', '86%', '5LPA', '45LPA', 'https://www.srmi.in/'),
('SRM189u', 'SRM', 'Hyderabad', 'NBA,NAAC', '86%', '5LPA', '45LPA', 'https://www.srmi.in/'),
('SRM189u', 'SRM', 'Hyderabad', 'NBA,NAAC', '86%', '5LPA', '45LPA', 'https://www.srmi.in/'),
('SRM189u', 'SRM', 'Hyderabad', 'NBA,NAAC', '86%', '5LPA', '45LPA', 'https://www.srmi.in/'),
('1221Lpu06', 'LPU', 'Jalandhar, Punjab', 'NBA,NAAC', '75%', '5LPA', '50LPA', 'https://www.lpu.in/'),
('1221Lpu06', 'LPU', 'Jalandhar, Punjab', 'NBA,NAAC', '75%', '5LPA', '50LPA', 'https://www.lpu.in/'),
('1221Lpu06', 'LPU', 'Jalandhar, Punjab', 'NBA,NAAC', '75%', '5LPA', '50LPA', 'https://www.lpu.in/'),
('1124cu09', 'Chandigarh University', 'Mohali,Punjab', 'NBA,NAAC', '90%', '6LPA', '55LPA', 'https://www.cuchd.in/'),
('1124cu09', 'Chandigarh University', 'Mohali,Punjab', 'NBA,NAAC', '90%', '6LPA', '55LPA', 'https://www.cuchd.in/'),
('SRM!089', 'SNU', 'Delhi', 'NBA,NAAC', '96%', '5LPA', '55LPA', 'https://www.snu.in/'),
('1124cu09', 'Chandigarh University', 'Mohali,Punjab', 'NBA,NAAC', '90%', '6LPA', '55LPA', 'https://www.cuchd.in/'),
('1124cu09', 'Chandigarh University', 'Mohali,Punjab', 'NBA,NAAC', '90%', '6LPA', '50LPA', 'https://www.cuchd.in/'),
('1221Lpu06', 'LPU', 'Jalandhar, Punjab', 'NBA,NAAC', '75%', '5LPA', '50LPA', 'https://www.lpu.in/'),
('1221Lpu06', 'LPU', 'Jalandhar, Punjab', 'NBA,NAAC', '75%', '5LPA', '50LPA', 'https://www.lpu.in/'),
('1221Lpu06', 'LPU', 'Jalandhar, Punjab', 'NBA,NAAC', '75%', '5LPA', '50LPA', 'https://www.lpu.in/');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `college`
--
ALTER TABLE `college`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `regform`
--
ALTER TABLE `regform`
  ADD PRIMARY KEY (`collegecode`);

--
-- Indexes for table `studentlist`
--
ALTER TABLE `studentlist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `college`
--
ALTER TABLE `college`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `studentlist`
--
ALTER TABLE `studentlist`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
