-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Nov 16, 2022 at 02:04 PM
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

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `admin_readrow` (IN `rid` INT(5))   BEGIN 
SELECT*FROM admin where A_ID=rid;
End$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `admin_update` (IN `name` VARCHAR(50), IN `age` INT(11), IN `address` VARCHAR(100), IN `gender` VARCHAR(50), IN `mobilenum` INT(11), IN `emailid` VARCHAR(100), IN `rid` INT(5))   BEGIN
update admin set
Name=name,Age=age,Address=address,Gender=gender,Mobile_Num=mobilenum,Email_ID=emailid where A_ID=rid;
End$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `bill_readrow` (IN `rid` INT(11))   BEGIN
select * from bill where Bill_No=rid;
End$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `doctor_delete` (IN `rid` INT(11))   BEGIN 
DELETE FROM doctor where D_ID=rid;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `doctor_readrow` (IN `rid` INT(11))   BEGIN
SELECT * FROM doctor WHERE D_ID=rid;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `doctor_update` (IN `dname` VARCHAR(50), IN `experience` INT(11), IN `spcl` VARCHAR(100), IN `gender` VARCHAR(50), IN `schedule` VARCHAR(100), IN `language` VARCHAR(50), IN `emailid` VARCHAR(100), IN `rid` INT(5))   BEGIN
update doctor set
D_Name=dname,Experience=experience,Specialisation=spcl,Gender=gender,Schedule=schedule,Language=language,Email_ID=emailid where D_ID=rid;
End$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `patient_readrow` (IN `rid` INT(11))   BEGIN 
SELECT*FROM patient where P_ID=rid;
End$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `patient_update` (`name` VARCHAR(50), `address` VARCHAR(100), `age` INT(11), `sex` VARCHAR(50), `bloodgroup` VARCHAR(50), `mobilenum` INT(11), `category` VARCHAR(100), `emailid` VARCHAR(100), `rid` INT(5))   BEGIN
update patient set
Name=name,Address=address,Age=age,Sex=sex,Blood_Group=bloodgroup,Mobile_Num=mobilenum,Category=category,Email_ID=emailid where P_ID=rid;
End$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `prescription_readrow` (IN `rid` INT(11))   BEGIN
SELECT * FROM prescription WHERE P_ID=rid;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `prescription_update` (IN `rid` INT(11), IN `did` INT(11), IN `remark` VARCHAR(500), IN `medicine` VARCHAR(1000), IN `advice` VARCHAR(1000))   BEGIN
UPDATE prescription SET
D_ID=did, Remark=remark, Medicine=medicine, Advice=advice WHERE P_ID=rid;
END$$

DELIMITER ;

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
(4, 'Rakavi', 27, 'Odd', 'Female', 773890124, 'rakavi@gmail.com');

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

--
-- Dumping data for table `appoinment`
--

INSERT INTO `appoinment` (`P_ID`, `DATE`, `D_ID`, `Consultant_Fee`) VALUES
(1, '2022-11-12', 1002, 1900),
(1, '2022-11-16', 1200, 1900),
(12, '2022-11-16', 1000, 1900),
(12, '2022-11-16', 1000, 1900),
(15, '2022-11-16', 1000, 1900),
(15, '2022-11-16', 1002, 1900);

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

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`Bill_No`, `P_ID`, `Date`, `Amount`) VALUES
(19284, 1, '2022-10-05', 1900),
(19304, 12, '2022-10-05', 1900),
(19488, 13, '2022-10-09', 2500);

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
(1002, 'Dr.Thirukumar', 14, 'VOG', 'Male', 'Wednesday(5.00pm)', 'Tamil', 'thirukumar@gmail.com'),
(1100, 'Dr.Charaga', 23, 'Nephrologist', 'Male', 'Wednesday(3.30pm)', 'Sinhala', 'charaga@gmail.com'),
(1201, 'Dr.Dilakkumar', 13, 'Radiologist', 'Male', 'Friday(5.00pm)', 'Tamil', 'dilakkumar@gmail.com'),
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
(5001, 'Dr.Sutharsan', 9, 'Orthopedic Surgeon', 'Male', 'Wednesday(5.00pm)', 'Tamil', 'sutharsan@gmail.com'),
(6000, 'Dr.Tamilvanan', 17, 'Dermatologist', 'Male', 'Tuesday(2.00pm)', 'Tamil', 'tamilvanan@gmail.com'),
(6001, 'Dr.Thanushah', 7, 'Dermatologist', 'Female', 'Friday(6.00pm)', 'Tamil', 'thanushah@gmail.com'),
(7000, 'Dr.Appushamy', 21, 'Rheumatologist', 'Male', 'Thursday(5.00pm)', 'Tamil', 'appushamy@gmail.com'),
(8000, 'Dr.Vinoth', 16, 'Cardiologist', 'Male', 'Tuesday(10.00pm)', 'Tamil', 'vinoth@gmail.com'),
(9000, 'Dr.Prapath', 7, 'G.U Surgeon', 'Male', 'Sunday(5.00pm)', 'Tamil', 'prapath@gmail.com'),
(9001, 'Dr.Anomilan', 9, 'G.U Surgeon', 'Male', 'Saturday', 'Sinhala', 'anomilan@gmail.com');

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
(13, 'Ashfa', 'VCH', 24, 'Female', 'O+', 752640972, 'VS', 'agfashfa@gmail.com'),
(14, 'Karthik', 'Jaffna', 23, 'male', 'A-', 778934567, 'VS', 'karthik@gmail.com'),
(15, 'sanji', 'vch', 24, 'Female', 'O+', 778245124, 'VOG', 'sanji@gmail.com');

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

--
-- Dumping data for table `prescription`
--

INSERT INTO `prescription` (`P_ID`, `D_ID`, `Remark`, `Medicine`, `Advice`) VALUES
(1, 1002, 'Shortness of breath&Asthmatic condition', 'Desloratadine 5mg nocte,Priton 4mg nocte,Cr.Hydrocortisone L.A', 'Take desloratadine 1 tablet at night after meal\r\n Take priton 1 tablet at night after meal\r\n Apply hydrocortisone cream itching area twice a day');

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
-- Dumping data for table `user_form`
--

INSERT INTO `user_form` (`id`, `name`, `email`, `password`, `user_type`) VALUES
(5, 'Ashfa', 'agfashfa@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'admin'),
(7, 'Ashfa', 'ashfa@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'admin'),
(8, 'Afra', 'afra@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'patient'),
(10, 'Dr.Fahim', 'fahim@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'doctor'),
(11, 'karthik', 'karthik@gmail.com', '202cb962ac59075b964b07152d234b70', 'patient'),
(12, 'Kumar', 'kumar@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'admin');

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
  ADD KEY `FK` (`P_ID`,`D_ID`),
  ADD KEY `D_ID` (`D_ID`);

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
  ADD KEY `FK` (`P_ID`,`D_ID`),
  ADD KEY `D_ID` (`D_ID`);

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
-- AUTO_INCREMENT for table `prescription`
--
ALTER TABLE `prescription`
  MODIFY `P_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user_form`
--
ALTER TABLE `user_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appoinment`
--
ALTER TABLE `appoinment`
  ADD CONSTRAINT `appoinment_ibfk_1` FOREIGN KEY (`D_ID`) REFERENCES `doctor` (`D_ID`),
  ADD CONSTRAINT `appoinment_ibfk_2` FOREIGN KEY (`P_ID`) REFERENCES `patient` (`P_ID`);

--
-- Constraints for table `bill`
--
ALTER TABLE `bill`
  ADD CONSTRAINT `bill_ibfk_1` FOREIGN KEY (`P_ID`) REFERENCES `patient` (`P_ID`);

--
-- Constraints for table `prescription`
--
ALTER TABLE `prescription`
  ADD CONSTRAINT `prescription_ibfk_1` FOREIGN KEY (`D_ID`) REFERENCES `doctor` (`D_ID`),
  ADD CONSTRAINT `prescription_ibfk_2` FOREIGN KEY (`P_ID`) REFERENCES `patient` (`P_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
