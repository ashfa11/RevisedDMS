-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Oct 21, 2022 at 07:03 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `A_ID` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Age` int(11) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Gender` varchar(50) NOT NULL,
  `Mobile_Num` int(11) NOT NULL,
  `Email_ID` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`A_ID`, `Name`, `Age`, `Address`, `Gender`, `Mobile_Num`, `Email_ID`) VALUES
(1, 'Nimnas', 24, 'ODD', 'Female', 779765203, 'nimnas@gmail.com'),
(2, 'Vithasiny', 26, 'Kiran', 'Female', 759859399, 'vithasiny@gmail.com'),
(3, 'Kumar', 31, 'VCH', 'Male', 772305434, 'kumar@gmail.com'),
(4, 'Rakavi', 27, 'VCH', 'Female', 773890123, 'rakavi@gmail.com'),
(5, 'Ashfa', 24, 'VCH', 'Female', 752640972, 'agfashfa@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `appoinment`
--

CREATE TABLE `appoinment` (
  `P_ID` int(11) NOT NULL,
  `DATE` date NOT NULL,
  `D_ID` int(11) NOT NULL,
  `Consultant_Fee` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `Bill_No` int(11) NOT NULL,
  `P_ID` int(11) NOT NULL,
  `Date` date NOT NULL,
  `Amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `D_ID` int(11) NOT NULL,
  `D_Name` varchar(50) NOT NULL,
  `Experience` int(11) NOT NULL,
  `Specialisation` varchar(100) NOT NULL,
  `Gender` varchar(50) NOT NULL,
  `Schedule` varchar(100) NOT NULL,
  `Language` varchar(50) NOT NULL,
  `Email_ID` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`D_ID`, `D_Name`, `Experience`, `Specialisation`, `Gender`, `Schedule`, `Language`, `Email_ID`) VALUES
(1000, 'Dr.Fahim', 2, 'VOG', 'Male', 'Thursday(4.00pm)', 'Tamil', 'fahim@gmail.com'),
(1001, 'Dr.Saravanan', 15, 'VOG', 'Male', 'Tuesday(4.00pm)', 'Tamil', 'saravanan@gmail.com'),
(1002, 'Dr.Thirukumar', 14, 'VOG', 'Male', 'Wednesday(5.00pm)', 'Tamil', 'thirukumar@gmail.com'),
(1100, 'Dr.Charaga', 23, 'Nephrologist', 'Male', 'Wednesday(3.30pm)', 'Sinhala', 'charaga@gmail.com'),
(1200, 'Dr.Surashini', 12, 'Radiologist', 'Female', 'Monday(11.00am)', 'Tamil', 'surashini@gmail.com'),
(1201, 'Dr.Dilakkumar', 13, 'Radiologist', 'Male', 'Friday(5.00pm)', 'Tamil', 'dilakkumar@gmail.com'),
(1300, 'Dr.Judy', 5, 'Psychiatrist', 'Male', 'Tuesday(9.00am)', 'Tamil', 'judy@gmail.com'),
(1301, 'Dr.Dan', 8, 'Psychiatrist', 'Male', 'Saturday(4.00pm)', 'Sinhala', 'dan@gmail.com'),
(1400, 'Dr.Ragavan', 10, 'Neuro Surgeon', 'Male', 'Monday(4.00pm)', 'Tamil', 'ragavan@gmail.com'),
(1500, 'Dr.Uditha', 6, 'Gastrologist', 'Male', 'Wednesday(5.00pm)', 'Tamil', 'uditha@gmail.com'),
(1600, 'Dr.Varnasooriya', 9, 'ENT Surgeon', 'Male', 'Friday(11.00am)', 'Tamil', 'varnasooriya@gmail.com'),
(1700, 'Dr.Yosatha', 6, 'Eye Surgeon', 'Female', 'Wednesday', 'Tamil', 'yosatha@gmail.com'),
(1800, 'Dr.Nalaga', 7, 'Respiratory Physician', 'Male', 'Sunday(9.00am)', 'Tamil', 'nalaga@gmail.com'),
(1900, 'Dr.Sasi', 15, 'Physiotherapy', 'Male', 'Saturday(9.00am)', 'Tamil', 'sasi@gmail.com'),
(2000, 'Dr.Vishnu', 6, 'V.PEAD', 'Male', 'Saturday(6.00pm)', 'Tamil', 'vishnu@gmail.com'),
(2001, 'Dr.Sivakanthan', 3, 'V.PEAD', 'Male', 'Wednesday(9.00am)', 'Tamil', 'sivakanthan@gmail.com'),
(2002, 'Dr.Viji', 15, 'V.PEAD', 'Female', 'Monday(3.30pm)', 'Tamil', 'viji@gmail.com'),
(2003, 'Dr.Pratheepa', 8, 'V.PEAD', 'Female', 'Sunday(5.00pm)', 'Tamil', 'pratheepa@gmail.com'),
(3000, 'Dr.Branavan', 7, 'VS', 'Male', 'Monday(10.00am)', 'Tamil', 'branavan@gmail.com'),
(3001, 'Dr.Jeepara', 20, 'VS', 'Male', 'Saturday(10.00am)', 'Tamil', 'jeepara@gmail.com'),
(3002, 'Dr.Rubeka', 9, 'VS', 'Female', 'Friday(6.00pm)', 'Tamil', 'rubeka@gmail.com'),
(4000, 'Dr.Sundaresan', 11, 'VP', 'Male', 'Tuesday(4.30pm)', 'Tamil', 'sundaresan@gmail.com'),
(4001, 'Dr.Murugamoorthy', 19, 'VP', 'Male', 'Monday(5.00pm)', 'Tamil', 'murugamoorthy@gmail.com'),
(4002, 'Prof.Umakanth', 24, 'VP', 'Male', 'Thursday(5.00pm)', 'Tamil', 'umakanth@gmail.com'),
(5000, 'Dr.Aasiri', 13, 'Orthopedic Surgeon', 'Male', 'Saturday(9.00am)', 'Sinhala', 'aasiri@gmail.com'),
(5001, 'Dr.Sutharsan', 9, 'Orthopedic Surgeon', 'Male', 'Wednesday(5.00pm)', 'Tamil', ''),
(6000, 'Dr.Tamilvanan', 17, 'Dermatologist', 'Male', 'Tuesday(2.00pm)', 'Tamil', ''),
(6001, 'Dr.Thanushah', 7, 'Dermatologist', 'Female', 'Friday(6.00pm)', 'Tamil', ''),
(7000, 'Dr.Appushamy', 21, 'Rheumatologist', 'Male', 'Thursday(5.00pm)', 'Tamil', ''),
(8000, 'Dr.Vinoth', 16, 'Cardiologist', 'Male', 'Tuesday(10.00pm)', 'Tamil', ''),
(9000, 'Dr.Prapath', 7, 'G.U Surgeon', 'Male', 'Sunday(5.00pm)', 'Tamil', ''),
(9001, 'Dr.Anomilan', 9, 'G.U Surgeon', 'Male', 'Saturday', 'Sinhala', '');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `P_ID` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Age` int(11) NOT NULL,
  `Sex` varchar(50) NOT NULL,
  `Blood_Group` varchar(50) NOT NULL,
  `Mobile_Num` int(11) NOT NULL,
  `Category` varchar(100) NOT NULL,
  `Email_ID` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`P_ID`, `Name`, `Address`, `Age`, `Sex`, `Blood_Group`, `Mobile_Num`, `Category`, `Email_ID`) VALUES
(1, 'Ashfa', 'VCH', 24, 'Female', 'O+', 752640972, 'VOG', 'agfashfa@gmail.com'),
(12, 'Kaviya', 'Navakulam', 26, 'Female', 'O-', 771234567, 'VS', 'kaviya@gmail.com'),
(13, 'Ashfa', 'VCH', 24, 'Female', 'O+', 752640972, 'VS', 'agfashfa@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `prescription`
--

CREATE TABLE `prescription` (
  `P_ID` int(11) NOT NULL,
  `D_ID` int(11) NOT NULL,
  `Remark` varchar(500) NOT NULL,
  `Medicine` varchar(1000) NOT NULL,
  `Advice` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user_form`
--

CREATE TABLE `user_form` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` varchar(255) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`A_ID`);

--
-- Indexes for table `appoinment`
--
ALTER TABLE `appoinment`
  ADD PRIMARY KEY (`P_ID`),
  ADD KEY `FK` (`P_ID`,`D_ID`);

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`Bill_No`),
  ADD KEY `P_ID_FK1` (`P_ID`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`D_ID`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`P_ID`);

--
-- Indexes for table `prescription`
--
ALTER TABLE `prescription`
  ADD PRIMARY KEY (`P_ID`),
  ADD KEY `FK` (`P_ID`,`D_ID`);

--
-- Indexes for table `user_form`
--
ALTER TABLE `user_form`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `A_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `appoinment`
--
ALTER TABLE `appoinment`
  MODIFY `P_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `Bill_No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23068;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `D_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9002;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `P_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `prescription`
--
ALTER TABLE `prescription`
  MODIFY `P_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_form`
--
ALTER TABLE `user_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
