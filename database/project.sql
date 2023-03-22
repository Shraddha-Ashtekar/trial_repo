-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2023 at 04:07 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.5.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updation_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `email`, `password`, `reg_date`, `updation_date`) VALUES
(1, 'admin', 'code.lpu1@gmail.com', 'Test@1234', '2016-04-04 20:31:45', '2016-04-17');

-- --------------------------------------------------------

--
-- Table structure for table `adminlog`
--

CREATE TABLE `adminlog` (
  `id` int(11) NOT NULL,
  `adminid` int(11) NOT NULL,
  `ip` varbinary(16) NOT NULL,
  `logintime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `booking_id` int(10) NOT NULL,
  `room_id` int(10) NOT NULL,
  `booking_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `check_in` varchar(100) DEFAULT NULL,
  `check_out` varchar(100) NOT NULL,
  `total_price` int(10) NOT NULL,
  `remaining_price` int(10) NOT NULL,
  `payment_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id` int(11) NOT NULL,
  `coursename` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `coursename`) VALUES
(1, 'Bachelor of Accounting and Finance (BAF)'),
(2, 'Bachelor of Commerce (B.COM)'),
(3, 'Bachelor of Commerce Honours (B.COMH)'),
(4, 'Bachelor of Management Studies (BMS)'),
(5, 'Bachelor of Financial Markets (BFM)'),
(6, 'Bachelor of Commerce in Banking & Insurance (BBI)'),
(7, 'Bachelor of Arts in Multimedia and Mass Communication (BAMMC)'),
(8, 'Bachelor of Science in Information Technology (B.Sc. IT)'),
(9, 'Bachelor of Science in Computer Science (B.Sc. CS)'),
(10, 'Bachelor of Arts (BA)'),
(11, 'BA FTNMP (Films, Television & New Media Production)'),
(12, 'Master of Commerce (MCom)'),
(13, 'Master of Science in Information Technology (M.Sc.IT)'),
(14, 'Master of Science in Computer Science (MSc.CS)'),
(15, 'Master of Arts (MA)');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `course_code` varchar(255) NOT NULL,
  `course_sn` varchar(255) NOT NULL,
  `course_fn` varchar(255) NOT NULL,
  `posting_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `course_code`, `course_sn`, `course_fn`, `posting_date`) VALUES
(1, 'B10992', 'B.Tech', 'Bachelor  of Technology', '2016-04-11 19:31:42'),
(2, 'BCOM1453', 'B.Com', 'Bachelor Of commerce ', '2016-04-11 19:32:46'),
(3, 'BSC12', 'BSC', 'Bachelor  of Science', '2016-04-11 19:33:23'),
(4, 'BC36356', 'BCA', 'Bachelor Of Computer Application', '2016-04-11 19:34:18'),
(5, 'MCA565', 'MCA', 'Master of Computer Application', '2016-04-11 19:34:40'),
(6, 'MBA75', 'MBA', 'Master of Business Administration', '2016-04-11 19:34:59'),
(7, 'BE765', 'BE', 'Bachelor of Engineering', '2016-04-11 19:35:19'),
(8, '021', 'BScIT', 'TYBScIT', '2023-03-03 06:26:15'),
(9, '021', 'BScIT', 'TYBScIT', '2023-03-03 06:37:02'),
(10, '1', 'wndw', 'wjd', '2023-03-03 07:52:07'),
(11, 'X', 'D', 'S', '2023-03-03 08:17:33'),
(12, 'X', 'D', 'S', '2023-03-03 08:25:18'),
(13, 'X', 'D', 'S', '2023-03-03 08:46:52');

-- --------------------------------------------------------

--
-- Table structure for table `messdetails`
--

CREATE TABLE `messdetails` (
  `id` int(11) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `supplier_name` varchar(50) NOT NULL,
  `quantity` varchar(50) NOT NULL,
  `order_date` date NOT NULL,
  `cost` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messdetails`
--

INSERT INTO `messdetails` (`id`, `product_name`, `supplier_name`, `quantity`, `order_date`, `cost`) VALUES
(200, 'Wheat', 'Janta Store', '10kg', '2023-02-28', 3000),
(201, 'Rice', 'Janta Store', '10kg', '2023-03-01', 3000),
(205, 'Milk', 'Amul Dairy ', '20', '0000-00-00', 4000),
(206, 'Milk', 'Gowardhan', '10', '0000-00-00', 2000);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) UNSIGNED NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `price` decimal(25,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `price`) VALUES
(1, 'Wheat', '1500.00');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `image` mediumblob NOT NULL,
  `sapid` int(12) NOT NULL,
  `roomno` int(11) NOT NULL,
  `seater` int(11) NOT NULL,
  `feespm` int(11) NOT NULL,
  `foodstatus` int(11) NOT NULL,
  `stayfrom` date NOT NULL,
  `duration` int(11) NOT NULL,
  `course` varchar(500) NOT NULL,
  `firstName` varchar(500) NOT NULL,
  `middleName` varchar(500) NOT NULL,
  `lastName` varchar(500) NOT NULL,
  `gender` varchar(250) NOT NULL,
  `dob` date NOT NULL,
  `contactno` bigint(11) NOT NULL,
  `emailid` varchar(500) NOT NULL,
  `clgname` varchar(50) NOT NULL,
  `aadharno` bigint(12) NOT NULL,
  `egycontactno` bigint(11) NOT NULL,
  `guardianName` varchar(500) NOT NULL,
  `guardianRelation` varchar(500) NOT NULL,
  `guardianContactno` bigint(11) NOT NULL,
  `corresAddress` varchar(500) NOT NULL,
  `corresCIty` varchar(500) NOT NULL,
  `corresState` varchar(500) NOT NULL,
  `corresPincode` int(11) NOT NULL,
  `pmntAddress` varchar(500) NOT NULL,
  `pmntCity` varchar(500) NOT NULL,
  `pmnatetState` varchar(500) NOT NULL,
  `pmntPincode` int(11) NOT NULL,
  `postingDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updationDate` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `image`, `sapid`, `roomno`, `seater`, `feespm`, `foodstatus`, `stayfrom`, `duration`, `course`, `firstName`, `middleName`, `lastName`, `gender`, `dob`, `contactno`, `emailid`, `clgname`, `aadharno`, `egycontactno`, `guardianName`, `guardianRelation`, `guardianContactno`, `corresAddress`, `corresCIty`, `corresState`, `corresPincode`, `pmntAddress`, `pmntCity`, `pmnatetState`, `pmntPincode`, `postingDate`, `updationDate`) VALUES
(6, '', 0, 201, 3, 8000, 0, '2016-04-22', 5, 'Bachelor  of Technology', 'code', '', 'projects', 'male', '0000-00-00', 8285703354, 'code.lpu1@gmail.com', '', 0, 0, 'XYZ', 'Mother', 8285703354, 'H n0 18/1 Bihari Puram Phase-1 Melrose Bye Pass', 'Aligarh', 'EPE', 202001, 'H n0 18/1 Bihari Puram Phase-1 Melrose Bye Pass', 'Aligarh', 'EPE', 202001, '2016-04-16 08:24:09', ''),
(7, '', 0, 200, 5, 8000, 1, '2016-06-17', 4, 'Bachelor of Engineering', 'code', 'test', 'projects', 'male', '0000-00-00', 8467067344, 'test@gmail.com', '', 0, 8285703354, 'test', 'test', 9999857868, 'H no- 18/1 Bihari puram phase-1 melrose bye pass', 'Aligarh', 'EPE', 202001, 'H no- 18/1 Bihari puram phase-1 melrose bye pass', 'Aligarh', 'EPE', 202001, '2016-06-23 11:54:35', ''),
(8, '', 0, 200, 3, 4000, 0, '2016-06-27', 5, 'Bachelor  of Science', 'Harry', 'projects', 'Singh', 'male', '0000-00-00', 6786786786, 'Harry@gmail.com', '', 0, 789632587, 'demo', 'demo', 1234567890, 'New Delhi', 'Delhi', 'Delhi (NCT)', 110001, 'New Delhi', 'Delhi', 'Delhi (NCT)', 110001, '2016-06-26 16:31:08', ''),
(9, '', 0, 132, 5, 2000, 1, '2016-06-28', 6, 'Bachelor of Engineering', 'Benjamin', '', 'projects', 'male', '0000-00-00', 8596185625, 'Benjamin@gmail.com', '', 0, 8285703354, 'demo', 'demo', 8285703354, 'H no- 18/1 Bihari puram phase-1 melrose bye pass', 'Aligarh', 'EPE', 202001, 'H no- 18/1 Bihari puram phase-1 melrose bye pass', 'Aligarh', 'EPE', 202001, '2016-06-26 16:40:07', ''),
(10, '', 5300, 203, 3, 4000, 0, '2023-03-11', 9, '0', 'Aditi', 'Anil', 'Bavaliya', 'female', '0000-00-00', 9082410767, 'aditibavaliya@gmail.com', '', 0, 8348927232, 'shraddha', 'sister', 839837021, 'fwgfiuwqiuri', 'wmfjfjhwe', 'Lakshadweep (UT)', 82374, 'fwgfiuwqiuri', 'wmfjfjhwe', 'Lakshadweep (UT)', 82374, '2023-03-10 09:33:23', ''),
(11, '', 5300, 200, 2, 6000, 0, '2023-03-21', 0, '0', 'Aditi', 'Anil', 'Bavaliya', 'female', '0000-00-00', 9082410767, 'aditibavaliya@gmail.com', '', 0, 248, 'jfk', 'jf', 24124, 'jbqwkbr', 'ekjfjew', 'Kerala', 2232, 'jbqwkbr', 'ekjfjew', 'Kerala', 2232, '2023-03-10 09:35:15', ''),
(12, 0x74732d6176617461722e6a7067, 1, 0, 0, 0, 0, '0000-00-00', 0, '', 'ab', 'ab', 'ab', 'female', '0000-00-00', 20329533533, 'o@gg.c', '', 94848383983, 28470927, 'as', 'd', 0, 'wgkwjhfhwqodklwj', '2313', 'Arunachal Pradesh', 8328, 'wgkwjhfhwqodklwj', '2313', 'Arunachal Pradesh', 8328, '2023-03-17 10:37:48', ''),
(13, 0x74732d6176617461722e6a7067, 1, 0, 0, 0, 0, '0000-00-00', 0, '', 'ab', 'ab', 'ab', 'female', '0000-00-00', 20329533533, 'b@gg.c', '', 94848383983, 28470927, 'as', 'd', 0, 'wgkwjhfhwqodklwj', '2313', 'Arunachal Pradesh', 8328, 'wgkwjhfhwqodklwj', '2313', 'Arunachal Pradesh', 8328, '2023-03-17 10:58:38', ''),
(14, 0x74732d6176617461722e6a7067, 1, 0, 0, 0, 0, '0000-00-00', 0, '', 'd', 'f', 'g', 'female', '0000-00-00', 3, 'e@e.c', '', 23, 1, 'd', 'd', 2, 'dddddddddddddd', 'e', 'Andaman and Nicobar Island (UT)', 342, 'dddddddddddddd', 'e', 'Andaman and Nicobar Island (UT)', 342, '2023-03-18 06:08:24', ''),
(15, '', 2, 132, 3, 2000, 0, '2023-04-06', 0, 'Bachelor  of Technology', 'c', 's', 's', 'others', '0000-00-00', 12, 'hd@g.c', '', 0, 2, 'w', 'w', 2, 'sssssssssss', 'w', 'Madhya Pradesh', 1, 'sssssssssss', 'w', 'Madhya Pradesh', 1, '2023-03-18 06:11:50', ''),
(16, 0x74732d6176617461722e6a7067, 123, 0, 0, 0, 0, '0000-00-00', 0, '', 'er', 'fe', 'we', 'female', '0000-00-00', 135, 'a@gmail.com', '', 4566, 134, 'gh', 'd', 123, 'fghgngn', 'er', 'Goa', 54, 'fghgngn', 'er', 'Goa', 54, '2023-03-18 06:15:53', ''),
(17, 0x74732d6176617461722e6a7067, 2, 0, 0, 0, 0, '0000-00-00', 0, '', 'd', 'd', 'd', 'male', '2023-03-24', 2, 'w@d.c', '', 2, 3, 'dd', 'SD', 323, 'QQQQQQQQQQQQQ', 'SSSSSSSS', 'Lakshadweep (UT)', 2, 'QQQQQQQQQQQQQ', 'SSSSSSSS', 'Lakshadweep (UT)', 2, '2023-03-18 06:22:51', '');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `room_id` int(10) NOT NULL,
  `room_type_id` int(10) NOT NULL,
  `room_no` varchar(10) NOT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `check_in_status` tinyint(1) NOT NULL,
  `check_out_status` tinyint(1) NOT NULL,
  `deleteStatus` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`room_id`, `room_type_id`, `room_no`, `status`, `check_in_status`, `check_out_status`, `deleteStatus`) VALUES
(1, 1, 'B1-201', NULL, 0, 0, 0),
(2, 1, 'B2-201', NULL, 0, 0, 0),
(3, 1, 'B3-201', NULL, 0, 0, 0),
(4, 1, 'B1-202', NULL, 0, 0, 0),
(5, 1, 'B2-202', NULL, 0, 0, 0),
(6, 1, 'B3-202', NULL, 0, 0, 0),
(7, 1, 'B1-203', NULL, 0, 0, 0),
(8, 1, 'B2-203', NULL, 0, 0, 0),
(9, 1, 'B3-203', NULL, 0, 0, 0),
(10, 1, 'B1-204', NULL, 0, 0, 0),
(11, 1, 'B2-204', NULL, 0, 0, 0),
(12, 1, 'B3-204', NULL, 0, 0, 0),
(13, 1, 'B1-205', NULL, 0, 0, 0),
(14, 1, 'B2-205', NULL, 0, 0, 0),
(15, 1, 'B3-205', NULL, 0, 0, 0),
(16, 2, 'G1-401', NULL, 0, 0, 0),
(17, 2, 'G2-401', NULL, 0, 0, 0),
(18, 2, 'G3-401', NULL, 0, 0, 0),
(19, 2, 'G1-402', NULL, 0, 0, 0),
(20, 2, 'G2-402', NULL, 0, 0, 0),
(21, 2, 'G3-402', NULL, 0, 0, 0),
(22, 2, 'G1-403', NULL, 0, 0, 0),
(23, 2, 'G2-403', NULL, 0, 0, 0),
(24, 2, 'G3-403', NULL, 0, 0, 0),
(25, 2, 'G1-404', NULL, 0, 0, 0),
(26, 2, 'G2-404', NULL, 0, 0, 0),
(27, 2, 'G3-404', NULL, 0, 0, 0),
(28, 2, 'G1-405', NULL, 0, 0, 0),
(29, 2, 'G2-405', NULL, 0, 0, 0),
(30, 2, 'G3-405', NULL, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` int(11) NOT NULL,
  `seater` int(11) NOT NULL DEFAULT '3',
  `room_no` int(11) NOT NULL,
  `fees` int(11) NOT NULL DEFAULT '45000',
  `posting_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `occupancy` int(11) NOT NULL DEFAULT '3'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `seater`, `room_no`, `fees`, `posting_date`, `occupancy`) VALUES
(2, 2, 200, 6000, '2016-04-12 01:30:47', 3),
(3, 2, 200, 6000, '2016-04-12 01:30:58', 3),
(4, 3, 112, 4000, '2016-04-12 01:31:07', 3),
(5, 3, 132, 2000, '2016-04-12 01:31:15', 3);

-- --------------------------------------------------------

--
-- Table structure for table `room_type`
--

CREATE TABLE `room_type` (
  `room_type_id` int(10) NOT NULL,
  `gender` varchar(11) NOT NULL,
  `price` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room_type`
--

INSERT INTO `room_type` (`room_type_id`, `gender`, `price`) VALUES
(1, 'Male', 500),
(2, 'Female', 500);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `staff_id` int(11) UNSIGNED NOT NULL,
  `staff_name` varchar(50) NOT NULL,
  `designation` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staff_id`, `staff_name`, `designation`) VALUES
(101, 'Tom', 'Sweeper'),
(201, 'Alex', 'Chef'),
(301, 'Rick', 'Warden');

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `id` int(11) NOT NULL,
  `State` varchar(150) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`id`, `State`) VALUES
(1, 'Andaman and Nicobar Island (UT)'),
(2, 'Andhra Pradesh'),
(3, 'Arunachal Pradesh'),
(4, 'Assam'),
(5, 'Bihar'),
(6, 'Chandigarh (UT)'),
(7, 'Chhattisgarh'),
(8, 'Dadra and Nagar Haveli (UT)'),
(9, 'Daman and Diu (UT)'),
(10, 'Delhi (NCT)'),
(11, 'Goa'),
(12, 'Gujarat'),
(13, 'Haryana'),
(14, 'Himachal Pradesh'),
(15, 'Jammu and Kashmir'),
(16, 'Jharkhand'),
(17, 'Karnataka'),
(18, 'Kerala'),
(19, 'Lakshadweep (UT)'),
(20, 'Madhya Pradesh'),
(21, 'Maharashtra'),
(22, 'Manipur'),
(23, 'Meghalaya'),
(24, 'Mizoram'),
(25, 'Nagaland'),
(26, 'Odisha'),
(27, 'Puducherry (UT)'),
(28, 'Punjab'),
(29, 'Rajastha'),
(30, 'Sikkim'),
(31, 'Tamil Nadu'),
(32, 'Telangana'),
(33, 'Tripura'),
(34, 'Uttarakhand'),
(35, 'EPE'),
(36, 'West Bengal');

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE `stock` (
  `stock_id` int(11) UNSIGNED NOT NULL,
  `sup_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`stock_id`, `sup_id`, `product_id`, `quantity`) VALUES
(1, 1, 1, 5);

-- --------------------------------------------------------

--
-- Table structure for table `studentlogin`
--

CREATE TABLE `studentlogin` (
  `id` int(11) NOT NULL,
  `sapid` bigint(12) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studentlogin`
--

INSERT INTO `studentlogin` (`id`, `sapid`, `email`, `password`) VALUES
(1, 5400320501, 'abc@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `studentpay`
--

CREATE TABLE `studentpay` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` int(12) NOT NULL,
  `fees` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `sup_id` int(11) UNSIGNED NOT NULL,
  `sup_name` varchar(50) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `order_date` date NOT NULL,
  `arrive_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`sup_id`, `sup_name`, `product_id`, `product_name`, `order_date`, `arrive_date`) VALUES
(1, 'Janta Store', 1, 'Wheat', '2023-03-01', '2023-03-03');

-- --------------------------------------------------------

--
-- Table structure for table `userlog`
--

CREATE TABLE `userlog` (
  `id` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `userEmail` varchar(255) NOT NULL,
  `userIp` varbinary(16) NOT NULL,
  `city` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `loginTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userlog`
--

INSERT INTO `userlog` (`id`, `userId`, `userEmail`, `userIp`, `city`, `country`, `loginTime`) VALUES
(1, 10, 'test@gmail.com', '', '', '', '2016-06-22 06:16:42'),
(2, 10, 'test@gmail.com', '', '', '', '2016-06-24 11:20:28'),
(4, 10, 'test@gmail.com', 0x3a3a31, '', '', '2016-06-24 11:22:47'),
(5, 10, 'test@gmail.com', 0x3a3a31, '', '', '2016-06-26 15:37:40'),
(6, 20, 'Benjamin@gmail.com', 0x3a3a31, '', '', '2016-06-26 16:40:57'),
(7, 10, 'test@gmail.com', 0x3a3a31, '', '', '2023-03-10 04:51:53'),
(8, 10, 'test@gmail.com', 0x3a3a31, '', '', '2023-03-10 06:56:50'),
(9, 21, 'aditibavaliya@gmail.com', 0x3a3a31, '', '', '2023-03-10 09:15:10'),
(10, 21, 'aditibavaliya@gmail.com', 0x3a3a31, '', '', '2023-03-10 10:41:54'),
(11, 10, 'test@gmail.com', 0x3a3a31, '', '', '2023-03-10 11:12:54'),
(12, 10, 'test@gmail.com', 0x3a3a31, '', '', '2023-03-13 04:11:40'),
(13, 10, 'test@gmail.com', 0x3a3a31, '', '', '2023-03-13 17:36:31'),
(14, 10, 'test@gmail.com', 0x3a3a31, '', '', '2023-03-14 03:31:58'),
(15, 10, 'test@gmail.com', 0x3a3a31, '', '', '2023-03-14 04:25:46'),
(16, 10, 'test@gmail.com', 0x3a3a31, '', '', '2023-03-14 06:27:13'),
(17, 10, 'test@gmail.com', 0x3a3a31, '', '', '2023-03-16 04:42:40'),
(18, 10, 'test@gmail.com', 0x3a3a31, '', '', '2023-03-16 05:21:54'),
(19, 10, 'test@gmail.com', 0x3a3a31, '', '', '2023-03-16 05:31:07'),
(20, 10, 'test@gmail.com', 0x3a3a31, '', '', '2023-03-16 06:35:06'),
(21, 38, 'tarun@gmail.com', 0x3a3a31, '', '', '2023-03-16 06:37:56'),
(22, 10, 'test@gmail.com', 0x3a3a31, '', '', '2023-03-16 10:25:15'),
(23, 10, 'test@gmail.com', 0x3a3a31, '', '', '2023-03-16 10:28:19'),
(24, 10, 'test@gmail.com', 0x3a3a31, '', '', '2023-03-17 05:44:23'),
(25, 10, 'test@gmail.com', 0x3a3a31, '', '', '2023-03-17 05:58:36'),
(26, 10, 'test@gmail.com', 0x3a3a31, '', '', '2023-03-17 10:00:31'),
(27, 10, 'test@gmail.com', 0x3a3a31, '', '', '2023-03-17 11:25:41'),
(28, 10, 'test@gmail.com', 0x3a3a31, '', '', '2023-03-17 11:52:47'),
(29, 10, 'test@gmail.com', 0x3a3a31, '', '', '2023-03-18 05:54:29'),
(30, 10, 'test@gmail.com', 0x3a3a31, '', '', '2023-03-18 06:14:19'),
(31, 10, 'test@gmail.com', 0x3a3a31, '', '', '2023-03-19 12:02:05'),
(32, 10, 'test@gmail.com', 0x3a3a31, '', '', '2023-03-19 14:24:23'),
(33, 10, 'test@gmail.com', 0x3a3a31, '', '', '2023-03-19 14:40:57'),
(34, 10, 'test@gmail.com', 0x3a3a31, '', '', '2023-03-19 14:41:35');

-- --------------------------------------------------------

--
-- Table structure for table `userregistration`
--

CREATE TABLE `userregistration` (
  `id` int(11) NOT NULL,
  `sapid` bigint(12) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `contactNo` bigint(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `aadharno` bigint(12) NOT NULL,
  `password` varchar(255) NOT NULL,
  `regDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updationDate` varchar(45) NOT NULL,
  `passUdateDate` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userregistration`
--

INSERT INTO `userregistration` (`id`, `sapid`, `gender`, `contactNo`, `email`, `aadharno`, `password`, `regDate`, `updationDate`, `passUdateDate`) VALUES
(10, 0, 'male', 8467067344, 'test@gmail.com', 0, 'test_123', '2016-06-22 04:21:33', '23-06-2016 11:04:15', '16-03-2023 10:53:23'),
(19, 0, 'male', 6786786786, 'Harry@gmail.com', 0, '6786786786', '2016-06-26 16:33:36', '', ''),
(20, 0, 'male', 8596185625, 'Benjamin@gmail.com', 0, '8596185625', '2016-06-26 16:40:07', '', ''),
(21, 5300, 'female', 9082410767, 'aditibavaliya@gmail.com', 0, 'shraddha', '2023-03-10 09:14:43', '', '10-03-2023 02:49:00'),
(22, 2147483647, 'female', 9082017358, 'shraddha.ashtekar39@svkmmumbai.onmicrosoft.com', 0, 'shraddha', '2023-03-10 09:42:47', '', ''),
(34, 832, 'male', 726362187301, 'abc@gmail.com', 0, '111', '2023-03-10 10:59:27', '', ''),
(37, 1223, 'male', 1242, 'vvv@gmail.com', 0, '111', '2023-03-10 11:07:44', '', ''),
(38, 511, 'male', 8359622562, 'tarun@gmail.com', 0, 'tarun', '2023-03-16 06:37:44', '', ''),
(39, 2147483647, '', 0, 'xyz@gmail.com', 0, '1290', '2023-03-16 10:35:50', '', ''),
(40, 53003205001, '', 0, 'xy@g.com', 0, '1234', '2023-03-16 10:36:13', '', ''),
(41, 53003205037, '', 0, 'yy@f.com', 0, '0000', '2023-03-16 10:38:32', '', ''),
(43, 53003205022, '', 0, 'd@s.com', 0, '222', '2023-03-16 10:41:06', '', ''),
(44, 12, '', 0, 's@s.com', 0, '111', '2023-03-16 10:45:18', '', ''),
(46, 533, '', 0, 'q@w.m', 0, '111', '2023-03-16 17:30:57', '', ''),
(47, 1, '', 0, 'a@g.com', 0, '200', '2023-03-17 03:21:38', '', ''),
(48, 33, '', 0, 'ad@g.c', 0, '11', '2023-03-17 03:25:44', '', ''),
(50, 0, '', 0, 'b@g.co', 0, '2', '2023-03-17 03:33:28', '', ''),
(57, 3, '', 0, '5@g.c', 0, '11', '2023-03-17 03:43:52', '', ''),
(62, 12, '', 0, 's@e.com', 0, '1', '2023-03-17 03:55:26', '', ''),
(64, 1, '', 0, '5@f.c', 0, '1', '2023-03-17 03:57:33', '', ''),
(67, 3, '', 0, 's@f.c', 0, '1', '2023-03-17 05:14:24', '', ''),
(68, 2, 'others', 12, 'hd@g.c', 0, '12', '2023-03-18 06:11:50', '', ''),
(69, 5222121, '', 0, 'dsdwa@gjsj.com', 0, 'gfd', '2023-03-19 12:43:48', '', ''),
(71, 42321, '', 0, 'as@hjd.com', 0, '123', '2023-03-19 14:27:44', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`booking_id`),
  ADD KEY `room_id` (`room_id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messdetails`
--
ALTER TABLE `messdetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`room_id`),
  ADD KEY `room_type_id` (`room_type_id`) USING BTREE;

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room_type`
--
ALTER TABLE `room_type`
  ADD PRIMARY KEY (`room_type_id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`staff_id`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`stock_id`);

--
-- Indexes for table `studentlogin`
--
ALTER TABLE `studentlogin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sapid` (`sapid`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `studentpay`
--
ALTER TABLE `studentpay`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`sup_id`);

--
-- Indexes for table `userlog`
--
ALTER TABLE `userlog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userregistration`
--
ALTER TABLE `userregistration`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `booking_id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `messdetails`
--
ALTER TABLE `messdetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=207;
--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `room_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `room_type`
--
ALTER TABLE `room_type`
  MODIFY `room_type_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `studentlogin`
--
ALTER TABLE `studentlogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `studentpay`
--
ALTER TABLE `studentpay`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `userlog`
--
ALTER TABLE `userlog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `userregistration`
--
ALTER TABLE `userregistration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `supplier`
--
ALTER TABLE `supplier`
  ADD CONSTRAINT `ForeignKey` FOREIGN KEY (`sup_id`) REFERENCES `products` (`product_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
