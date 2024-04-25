-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2024 at 05:33 PM
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
-- Database: `blood_donation`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Contact_Number` int(11) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `Name`, `Email`, `Contact_Number`, `Password`) VALUES
(1, 'Saima Sobahan', 'saima@gmail.com', 1783918516, 'saima1234'),
(2, 'Ahmad Anis', 'anis@gmail.com', 1842121167, 'anis1234'),
(3, 'Nafisha Tabassum Anika', 'nafisha@gmail.com', 1810800279, 'nafisha1234'),
(4, 'Maisha Tarannum Srizee', 'srizee@gmail.com', 1715214570, 'srizee1234'),
(5, 'Saba Tahsin', 'saba@gmail.com', 1710700168, 'saba1234');

-- --------------------------------------------------------

--
-- Table structure for table `blood bank`
--

CREATE TABLE `blood bank` (
  `TYPE_ID` int(11) NOT NULL,
  `Blood_Type` varchar(255) NOT NULL,
  `Availability` varchar(255) NOT NULL,
  `Location` varchar(255) NOT NULL,
  `Contact_No` varchar(20) NOT NULL,
  `Expiry_Date` date NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blood bank`
--

INSERT INTO `blood bank` (`TYPE_ID`, `Blood_Type`, `Availability`, `Location`, `Contact_No`, `Expiry_Date`, `Email`, `Password`) VALUES
(8, 'A+ve', 'YES (12 bags)', 'DHAKA', '+8801716213579', '0000-00-00', 'bloodbank@gmail.com', 'bloodbank1234'),
(9, 'A-ve', 'YES (2 bags)', 'DHAKA', '+8801716213575', '2024-05-15', 'bloodbank@gmail.com', 'bloodbank1234'),
(10, 'B+ve', 'NO', 'KHULNA', '+8801910800176', '2024-04-30', 'bloodbank@gmail.com', 'bloodbank1234'),
(11, 'B-ve', 'YES (8 bags)', 'MYMENSINGH', '+8801810900178', '2024-05-25', 'bloodbank@gmail.com', 'bloodbank1234'),
(12, 'AB+ve', 'YES (3 bags)', 'DHAKA', '+8801643143223', '2024-04-10', 'bloodbank@gmail.com', 'bloodbank1234'),
(13, 'AB-ve', 'NO', 'DHAKA', '+8801753943223', '2024-06-30', 'bloodbank@gmail.com', 'bloodbank1234'),
(14, 'O+ve', 'YES (15 bags)', 'DHAKA', '+8801714215678', '2024-06-15', 'bloodbank@gmail.com', 'bloodbank1234'),
(15, 'O-ve', 'YES (1 bag)', 'FARIDPUR', '+8801716217570', '2024-05-30', 'bloodbank@gmail.com', 'bloodbank1234');

-- --------------------------------------------------------

--
-- Table structure for table `donor_info`
--

CREATE TABLE `donor_info` (
  `id` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Blood_Group` varchar(255) NOT NULL,
  `Contact_Number` int(11) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Area` varchar(255) NOT NULL,
  `City` varchar(255) NOT NULL,
  `Last_Donated_Date` date NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `donor_info`
--

INSERT INTO `donor_info` (`id`, `Name`, `Blood_Group`, `Contact_Number`, `Email`, `Area`, `City`, `Last_Donated_Date`, `Password`) VALUES
(2, 'Shakira Khan', 'B+ve', 1910800169, 'shakira@gmail.com', 'Banani', 'Dhaka', '2024-03-01', 'shakira1234'),
(6, 'Samin Haque', 'A+ve', 1615738464, 'samin@gmail.com', 'Dhanmondi', 'Dhaka', '2024-02-10', 'samin1234'),
(7, 'Sabbir Rahman', 'A-ve', 1612345678, 'sabbir@gmail.com', 'Banani', 'Dhaka', '2024-01-27', 'sabbir1234'),
(8, 'Elina Islam', 'AB+ve', 1918346523, 'elina@gmail.com', 'Mirpur', 'Dhaka', '2023-11-16', 'elina1234'),
(9, 'Lovely Sultana', 'A+ve', 1817364527, 'lovely@gmail.com', 'Malibagh', 'Dhaka', '2024-02-13', 'lovely1234'),
(10, 'Ayaz Arefin', 'A-ve', 1973475735, 'ayaz@gmail.com', 'Gopibag', 'Khulna', '2024-05-02', 'ayaz1234'),
(11, 'Dihan Bin Rafik', 'O+ve', 1316785933, 'dihan@gmail.com', 'Kamrangichor', 'Chittagong', '2024-01-24', 'dihan1234'),
(12, 'Hamim Rahman', 'O-ve', 1964723754, 'hamim@gmail.com', 'Dhanmondi', 'Dhaka', '2023-06-21', 'hamim1234'),
(13, 'Rahima Akter', 'O+ve', 151474875, 'rahima@gmail.com', 'Kaliganj', 'Barishal', '2023-12-28', 'rahima1234'),
(14, 'Samiha Haque', 'B-ve', 1827634845, 'samiha@gmail.com', 'Khilgaon', 'Dhaka', '2023-03-31', 'samiha1234'),
(15, 'Arman Chowdhury', 'AB-ve', 1910800543, 'arman@gmail.com', 'Mohammadpur', 'Sylhet', '2024-02-01', 'arman1234');

-- --------------------------------------------------------

--
-- Table structure for table `receiver`
--

CREATE TABLE `receiver` (
  `ID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Blood_Group` varchar(255) NOT NULL,
  `Area` varchar(255) NOT NULL,
  `City` varchar(255) NOT NULL,
  `Need_At` date NOT NULL,
  `Contact_Number` int(11) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `receiver`
--

INSERT INTO `receiver` (`ID`, `Name`, `Email`, `Blood_Group`, `Area`, `City`, `Need_At`, `Contact_Number`, `Password`) VALUES
(7, 'Abdullah Ashik', 'abdullah@gmail.com', 'A+ve', 'MIRPUR', 'DHAKA', '2024-04-30', 1743943224, 'abdullah1234'),
(9, 'Zarin Sadia', 'zarin@gmail.com', 'A+ve', 'Malibagh', 'Dhaka', '2024-07-10', 1715328467, 'zarin1234'),
(10, 'Keya Rahman', 'keya@gmail.com', 'B+ve', 'Mirpur', 'Dhaka', '2024-05-10', 1625484596, 'keya1234'),
(11, 'Mehedi Hasan', 'mehedi@gmail.com', 'B-ve', 'Hobiganj', 'Sylhet', '2024-06-05', 2147483647, 'mehedi1234'),
(12, 'Jahin Ahmed', 'jahin@gmail.com', 'AB+ve', 'Tekerhat', 'Madaripur', '2024-09-04', 1319748556, 'jahin1234'),
(13, 'Hasibul Haque', 'hasibul@gmail.com', 'A-ve', 'Banani', 'Dhaka', '2024-05-29', 1819364584, 'hasibul1234'),
(14, 'Sabit Rahman', 'sabit@gmail.com', 'AB-ve', 'Mohammadpur', 'Sylhet', '2024-09-25', 1316438566, 'sabit1234'),
(15, 'Arpita Saha', 'arpita@gmail.com', 'B-ve', 'Kalshi', 'Khulna', '2024-10-03', 1873459564, 'arpita1234'),
(16, 'Arjun Ghosh', 'arjun@gmail.com', 'O+ve', 'Badda', 'Rangpur', '2024-05-09', 1918767437, 'arjun1234'),
(17, 'Akib Zuhayer', 'akib@gmail.com', 'O-ve', 'Joypurhat', 'Bogura', '2024-05-01', 1718397546, 'akib1234'),
(19, 'Abdus Sobahan', 'abdus@gmail.com', 'O-ve', 'Banasree', 'Chittagong', '2024-06-18', 1743952553, 'abdus1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blood bank`
--
ALTER TABLE `blood bank`
  ADD PRIMARY KEY (`TYPE_ID`);

--
-- Indexes for table `donor_info`
--
ALTER TABLE `donor_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `receiver`
--
ALTER TABLE `receiver`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `blood bank`
--
ALTER TABLE `blood bank`
  MODIFY `TYPE_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `donor_info`
--
ALTER TABLE `donor_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `receiver`
--
ALTER TABLE `receiver`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
