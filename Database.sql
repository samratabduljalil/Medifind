-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2022 at 08:43 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `paracetamol`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `a_name` varchar(50) DEFAULT NULL,
  `a_email` varchar(50) DEFAULT NULL,
  `a_password` varchar(50) DEFAULT NULL,
  `a_phone` varchar(50) DEFAULT NULL,
  `a_image` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `a_name`, `a_email`, `a_password`, `a_phone`, `a_image`) VALUES
(100001, 'samrat', 'S@gmail.com', '12345', '01712563256', 'images/samrat'),
(100002, 'samrat', 'S@gmail.com', '12345', '01712563256', 'images/samrat'),
(100003, 'ff', 'tt@g', 'tt', 'tt', 'images/profile.png'),
(100006, 'samrat', 'sam@gmail.com', '01772095564', '12345', NULL),
(100007, 'fff', 'F@gmail.com', '01772095564', 'we23', NULL),
(100008, 'fghhhff', 'ft@gmail.com', 'we23', '01772095564', NULL),
(100009, 'fghhh', 'tt@g', '12345', '01772095564', NULL),
(100010, 'A_Admin', 'aa@gmail.com', '1234', '0177777777778', 'images/sincerely-media-nGrfKmtwv24-unsplash.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `admin_company`
--

CREATE TABLE `admin_company` (
  `admin_id` int(11) DEFAULT NULL,
  `company_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `admin_doctor`
--

CREATE TABLE `admin_doctor` (
  `admin_id` int(11) DEFAULT NULL,
  `doctor_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `admin_shop`
--

CREATE TABLE `admin_shop` (
  `admin_id` int(11) DEFAULT NULL,
  `shop_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `admin_user`
--

CREATE TABLE `admin_user` (
  `admin_id` int(11) DEFAULT NULL,
  `g_user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `advertisement`
--

CREATE TABLE `advertisement` (
  `add_id` int(11) NOT NULL,
  `company_id` int(11) DEFAULT NULL,
  `M_name` varchar(50) DEFAULT NULL,
  `M_generic` varchar(50) DEFAULT NULL,
  `M_image` varchar(50) DEFAULT NULL,
  `M_privious_price` float(6,2) DEFAULT NULL,
  `M_price` float(6,2) DEFAULT NULL,
  `add_Date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `advertisement`
--

INSERT INTO `advertisement` (`add_id`, `company_id`, `M_name`, `M_generic`, `M_image`, `M_privious_price`, `M_price`, `add_Date`) VALUES
(17, 100003, 'y_Medicine', 'A_generic', 'images/pexels-pixabay-161688.jpg', 20.00, 15.00, '2022-01-24');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `company_id` int(11) NOT NULL,
  `C_name` varchar(50) DEFAULT NULL,
  `C_email` varchar(50) DEFAULT NULL,
  `C_password` varchar(50) DEFAULT NULL,
  `C_image` varchar(50) DEFAULT NULL,
  `C_district` varchar(50) DEFAULT NULL,
  `C_street` varchar(70) DEFAULT NULL,
  `C_phone` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`company_id`, `C_name`, `C_email`, `C_password`, `C_image`, `C_district`, `C_street`, `C_phone`) VALUES
(100001, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]', '[value-7]', '[value-8]'),
(100002, 'fghhh', ' sam@gmail.com', 'tyty', 'images/profile.png', ' Dhaka', 'tyty', '01772095564'),
(100003, 'A_Pharma', ' A@gmail.com', '1234', 'images/profile.png', ' Narail', '3/4 kanpur', '0177777777777'),
(100004, 'B_Pharma', ' b@gmail.com', '1234', 'images/profile.png', ' Dhaka', '3/4 kapashia', '01777777778'),
(100005, 'C_Pharma', 'c@gmail.com', '1234', '[value-5]', 'Narail', 'kanpur', '01734325625'),
(100006, 'D_Pharma', 'd@gmail.com', '1234', '[value-5]', 'Narail', 'kanpur', '01734325626'),
(100007, 'E_Pharma', 'e@gmail.com', '1234', '[value-5]', 'Narail', 'kalia', '01734325627'),
(100008, 'F_Pharma', 'f@gmail.com', '1234', '[value-5]', 'Dhaka', 'satarkul', '01734325637'),
(100009, 'G_Pharma', 'g@gmail.com', '1234', '[value-5]', 'Dhaka', 'satarkul', '01734325631'),
(100010, 'ukyk', ' tt@g', 'ghh', 'images/Shop1 (4).jpg', ' gg', 'gg', '01772095564');

-- --------------------------------------------------------

--
-- Table structure for table `company_shop`
--

CREATE TABLE `company_shop` (
  `shop_id` int(11) DEFAULT NULL,
  `company_id` int(11) DEFAULT NULL,
  `sell` int(11) DEFAULT NULL,
  `Sell_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `doctor_id` int(11) NOT NULL,
  `d_name` varchar(50) DEFAULT NULL,
  `d_email` varchar(50) DEFAULT NULL,
  `d_password` varchar(50) DEFAULT NULL,
  `d_phone` varchar(50) DEFAULT NULL,
  `d_image` varchar(50) DEFAULT NULL,
  `d_hospital` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `doctor_company`
--

CREATE TABLE `doctor_company` (
  `doctor_id` int(11) DEFAULT NULL,
  `company_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `doctor_education`
--

CREATE TABLE `doctor_education` (
  `doctor_id` int(11) DEFAULT NULL,
  `d_education` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `doctor_experience`
--

CREATE TABLE `doctor_experience` (
  `doctor_id` int(11) DEFAULT NULL,
  `d_experience` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `general_user`
--

CREATE TABLE `general_user` (
  `g_user_id` int(11) NOT NULL,
  `g_name` varchar(50) DEFAULT NULL,
  `g_email` varchar(50) DEFAULT NULL,
  `g_password` varchar(50) DEFAULT NULL,
  `g_phone` varchar(50) DEFAULT NULL,
  `g_image` varchar(50) DEFAULT NULL,
  `g_district` varchar(50) DEFAULT NULL,
  `g_upazila` varchar(70) DEFAULT NULL,
  `g_union` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `general_user`
--

INSERT INTO `general_user` (`g_user_id`, `g_name`, `g_email`, `g_password`, `g_phone`, `g_image`, `g_district`, `g_upazila`, `g_union`) VALUES
(1, 'ff', 'tt@g', 'tt', 'tt', 'images/profile.png', 'tytyty', 'ff', 'ff'),
(2, 'A_User', 'au@gmail.com', '1234', '01777777777', 'images/logo.png', 'Narail', 'Kalia', 'Babra');

-- --------------------------------------------------------

--
-- Table structure for table `medical_shop`
--

CREATE TABLE `medical_shop` (
  `shop_id` int(11) NOT NULL,
  `S_name` varchar(50) DEFAULT NULL,
  `S_email` varchar(50) DEFAULT NULL,
  `S_password` varchar(50) DEFAULT NULL,
  `S_phone` varchar(50) DEFAULT NULL,
  `S_image` varchar(50) DEFAULT NULL,
  `S_division` varchar(50) DEFAULT NULL,
  `S_district` varchar(50) DEFAULT NULL,
  `S_upazila` varchar(70) DEFAULT NULL,
  `S_union` varchar(50) DEFAULT NULL,
  `S_place` varchar(50) DEFAULT NULL,
  `Set_reminder` varchar(20) DEFAULT NULL,
  `set_close` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `medical_shop`
--

INSERT INTO `medical_shop` (`shop_id`, `S_name`, `S_email`, `S_password`, `S_phone`, `S_image`, `S_division`, `S_district`, `S_upazila`, `S_union`, `S_place`, `Set_reminder`, `set_close`) VALUES
(1, 'A_Shop', 'a@gmail.com', '1234', '01733333333', 'images/Shop1 (1).jpg', 'Khulna', 'Narail', 'Kalia', 'Babra', 'Babra Hat', '10pm', '11am'),
(2, 'B_Shop', 'b@gmail.com', '1234', '01733333334', 'images/Shop1 (2).jpg', 'Khulna', 'Narail', 'Kalia', 'Babra', 'Babra More', '12 pm', '9am'),
(3, 'C_Shop', 'c@gmail.com', '1234', '01733333335', 'images/Shop1 (3).jpg', 'Dhaka', 'Dhaka', 'Vatara', 'Satarkul', 'Satarkul bazzar', '10pm', '6 am'),
(4, 'D_Shop', 'd@gmail.com', '1234', '01733333336', 'images/Shop1 (4).jpg', 'Dhaka', 'Dhaka', 'Vatara', 'Satarkul', 'Satarkul bazzar', '12pm', '8am'),
(5, 'E_Shop', 'e@gmail.com', '1234', '01733333337', 'images/shop2.jpg', 'Khulna', 'Narail', 'Kalia', 'Babra', 'Babra hat', '9pm', '6 am');

-- --------------------------------------------------------

--
-- Table structure for table `medicine`
--

CREATE TABLE `medicine` (
  `M_id` int(11) NOT NULL,
  `M_name` varchar(50) DEFAULT NULL,
  `M_price` varchar(50) DEFAULT NULL,
  `M_generic` varchar(50) DEFAULT NULL,
  `M_image` varchar(50) DEFAULT NULL,
  `company_id` int(11) DEFAULT NULL,
  `Shop_price` float(6,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `medicine`
--

INSERT INTO `medicine` (`M_id`, `M_name`, `M_price`, `M_generic`, `M_image`, `company_id`, `Shop_price`) VALUES
(11, 'mmm', '0.00', 'tt', 'images/', 100002, 12.00),
(13, 'pera', '6', 'ggg', 'images/', 100001, 4.50),
(15, 'pto', '[value-3]', 'hh', '[value-5]', 100001, 1255.00),
(16, 'perak', '20', 'jk', 'images/', 100002, 4.50),
(20, 'Bizoran 5/40', '20', 'Amlodipine', 'images/Bizo.jpg', 100002, 15.00),
(21, 'comet', '50', 'Metformin Hydrochloride', 'images/Comet-850.jpg', 100003, 40.00),
(22, 'panadol', '20', 'gg', 'images/final.jpg', 100002, 40.00),
(23, 'peracetamol', '20.00', 'paracetamol', 'images/pexels-suzy-hazelwood-3652097.jpg', 100004, 18.00),
(28, 'Bizoran 50mg', '564.00', 'hh', 'images/fu.png', 100002, 0.00),
(29, 'A_Medicine', '20', 'A_Generic', 'images/pexels-suzy-hazelwood-3652097.jpg', 100003, 18.00),
(30, 'B_Medicine', '50', 'A_Generic', 'images/pexels-anna-shvets-3683088.jpg', 100003, 40.00),
(31, 'C_Medicine', '24', 'B_Generic', 'images/pexels-dear-w-2919591.jpg', 100003, 20.00),
(32, 'W_Medicine', '25', 'A_Generic', 'images/pexels-pixabay-159211.jpg', 100004, 20.00),
(33, 'F_Medicine', '20', 'A_Generic', 'images/pexels-dear-w-2919591.jpg', 100003, 18.00),
(34, 'G_Medicine', '20', 'Y _Generic', 'images/pexels-pixabay-159211.jpg', 100003, 18.00),
(35, 'y_Medicine', '20.00', 'T_generic', 'images/pill.jpg', 100003, 10.00),
(36, 'yyyy', '20', 'yyy', 'images/button.png', 100002, 0.00);

-- --------------------------------------------------------

--
-- Table structure for table `medicine_shop`
--

CREATE TABLE `medicine_shop` (
  `M_id` int(11) DEFAULT NULL,
  `shop_id` int(11) DEFAULT NULL,
  `stocks` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `medicine_shop`
--

INSERT INTO `medicine_shop` (`M_id`, `shop_id`, `stocks`) VALUES
(13, 1, 526),
(11, 2, 40),
(15, 1, 10586),
(NULL, 1, 10),
(20, 1, 10),
(23, 1, 40),
(30, 2, 45),
(29, 2, 78);

-- --------------------------------------------------------

--
-- Table structure for table `medicine_shop_buy`
--

CREATE TABLE `medicine_shop_buy` (
  `M_id` int(11) DEFAULT NULL,
  `shop_id` int(11) DEFAULT NULL,
  `Shop_Buy` int(11) DEFAULT NULL,
  `Buy_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `medicine_shop_buy`
--

INSERT INTO `medicine_shop_buy` (`M_id`, `shop_id`, `Shop_Buy`, `Buy_date`) VALUES
(13, 3, 50, '0000-00-00'),
(13, 4, 50, '0000-00-00'),
(13, 1, 50, '0000-00-00'),
(13, 1, 50, '0000-00-00'),
(13, 1, 50, '0000-00-00'),
(13, 1, 54, '2022-01-23'),
(13, 1, 586, '2022-01-23'),
(11, 1, 50, '0000-00-00'),
(13, 1, 54, '2022-01-23'),
(13, 1, 54, '2022-01-23'),
(13, 1, 54, '2022-01-23'),
(13, 1, 54, '2022-01-23'),
(13, 1, 54, '2022-01-23'),
(13, 1, 54, '2022-01-23'),
(13, 1, 54, '2022-01-23'),
(13, 1, 54, '2022-01-23'),
(13, 1, 586, '2022-01-23'),
(13, 1, 54, '2022-01-23'),
(13, 1, 10000, '2022-01-23'),
(13, 1, 10000, '2022-01-23'),
(13, 1, 10000, '2022-01-23'),
(15, 1, 586, '2022-01-23'),
(15, 1, 10000, '2022-01-23'),
(15, 1, 10000, '2022-01-23'),
(13, 1, 560, '2022-01-24'),
(NULL, 1, 10, '2022-01-24'),
(20, 1, 10, '2022-01-24'),
(23, 1, 50, '2022-01-24'),
(30, 2, 50, '2022-01-24'),
(29, 2, 40, '2022-01-24'),
(29, 1, 51, '2022-01-24'),
(29, 2, 58, '2022-01-24');

-- --------------------------------------------------------

--
-- Table structure for table `medicine_shop_sell`
--

CREATE TABLE `medicine_shop_sell` (
  `M_id` int(11) DEFAULT NULL,
  `shop_id` int(11) DEFAULT NULL,
  `Shop_sell` int(11) DEFAULT NULL,
  `sell_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `medicine_shop_sell`
--

INSERT INTO `medicine_shop_sell` (`M_id`, `shop_id`, `Shop_sell`, `sell_date`) VALUES
(13, 1, 54, '2022-01-23'),
(13, 1, 586, '2022-01-23'),
(13, 1, 10, '2022-01-23'),
(13, 1, 10, '2022-01-23'),
(13, 1, 10, '2022-01-23'),
(13, 1, 54, '2022-01-24'),
(23, 1, 10, '2022-01-24'),
(29, 2, 10, '2022-01-24'),
(30, 2, 5, '2022-01-24'),
(29, 2, 10, '2022-01-24');

-- --------------------------------------------------------

--
-- Table structure for table `most_search_medicine`
--

CREATE TABLE `most_search_medicine` (
  `M_name` varchar(50) NOT NULL,
  `M_generic` varchar(50) DEFAULT NULL,
  `M_image` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `most_search_medicine`
--

INSERT INTO `most_search_medicine` (`M_name`, `M_generic`, `M_image`) VALUES
('Bizoran', 'Amlodipine', 'images/Bizoran.jpg'),
('Comet', 'Flucloxacillin Sodium', 'images/Comet-850.jpg'),
('Fluclo x', 'Metformin Hydrochloride', 'images/f.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pateint`
--

CREATE TABLE `pateint` (
  `patient_id` int(11) NOT NULL,
  `p_name` varchar(50) DEFAULT NULL,
  `p_phone` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `patient_doctor`
--

CREATE TABLE `patient_doctor` (
  `patient_id` int(11) DEFAULT NULL,
  `doctor_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `patient_shop`
--

CREATE TABLE `patient_shop` (
  `patient_id` int(11) DEFAULT NULL,
  `shop_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `patient_user`
--

CREATE TABLE `patient_user` (
  `patient_id` int(11) DEFAULT NULL,
  `g_user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `request_advertisement`
--

CREATE TABLE `request_advertisement` (
  `add_id` int(11) NOT NULL,
  `company_id` int(11) DEFAULT NULL,
  `M_name` varchar(50) DEFAULT NULL,
  `M_generic` varchar(50) DEFAULT NULL,
  `M_image` varchar(50) DEFAULT NULL,
  `M_privious_price` float(6,2) DEFAULT NULL,
  `M_price` float(6,2) DEFAULT NULL,
  `add_Date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `request_medicine`
--

CREATE TABLE `request_medicine` (
  `request_id` int(11) NOT NULL,
  `M_name` varchar(50) DEFAULT NULL,
  `company_id` int(11) DEFAULT NULL,
  `M_generic` varchar(50) DEFAULT NULL,
  `C_image` varchar(50) DEFAULT NULL,
  `M_price_shop` float(6,2) DEFAULT NULL,
  `M_price_customers` float(6,2) DEFAULT NULL,
  `request_Date` date DEFAULT NULL,
  `R_certificate` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user_shop`
--

CREATE TABLE `user_shop` (
  `shop_id` int(11) DEFAULT NULL,
  `g_user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `admin_company`
--
ALTER TABLE `admin_company`
  ADD KEY `fK_frommadminIN_admin_company` (`admin_id`),
  ADD KEY `fK_fromcompanyIN_admin_company` (`company_id`);

--
-- Indexes for table `admin_doctor`
--
ALTER TABLE `admin_doctor`
  ADD KEY `fK_frommadminIN_admin_doctor` (`admin_id`),
  ADD KEY `fK_fromdoctorIN_admin_doctor` (`doctor_id`);

--
-- Indexes for table `admin_shop`
--
ALTER TABLE `admin_shop`
  ADD KEY `fK_frommadminIN_admin_shop` (`admin_id`),
  ADD KEY `fK_fromshopIN_admin_shop` (`shop_id`);

--
-- Indexes for table `admin_user`
--
ALTER TABLE `admin_user`
  ADD KEY `fK_frommadminIN_admin_user` (`admin_id`),
  ADD KEY `fK_fromuserIN_admin_user` (`g_user_id`);

--
-- Indexes for table `advertisement`
--
ALTER TABLE `advertisement`
  ADD PRIMARY KEY (`add_id`),
  ADD KEY `fK_medicine_medicine_pp` (`company_id`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`company_id`);

--
-- Indexes for table `company_shop`
--
ALTER TABLE `company_shop`
  ADD KEY `fK_fromcompanyIN_company_shop` (`company_id`),
  ADD KEY `fK_fromshopIN_company_shop` (`shop_id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`doctor_id`);

--
-- Indexes for table `doctor_company`
--
ALTER TABLE `doctor_company`
  ADD KEY `fK_company_doctor_company` (`doctor_id`);

--
-- Indexes for table `doctor_education`
--
ALTER TABLE `doctor_education`
  ADD KEY `fK_doctor_education` (`doctor_id`);

--
-- Indexes for table `doctor_experience`
--
ALTER TABLE `doctor_experience`
  ADD KEY `fK_doctor_experience` (`doctor_id`);

--
-- Indexes for table `general_user`
--
ALTER TABLE `general_user`
  ADD PRIMARY KEY (`g_user_id`);

--
-- Indexes for table `medical_shop`
--
ALTER TABLE `medical_shop`
  ADD PRIMARY KEY (`shop_id`);

--
-- Indexes for table `medicine`
--
ALTER TABLE `medicine`
  ADD PRIMARY KEY (`M_id`),
  ADD UNIQUE KEY `M_name` (`M_name`),
  ADD KEY `medicine_ibfk_1` (`company_id`);

--
-- Indexes for table `medicine_shop`
--
ALTER TABLE `medicine_shop`
  ADD KEY `fK_frompat` (`M_id`),
  ADD KEY `fK_from` (`shop_id`);

--
-- Indexes for table `medicine_shop_buy`
--
ALTER TABLE `medicine_shop_buy`
  ADD KEY `fK_buy` (`M_id`),
  ADD KEY `fK_buy_` (`shop_id`);

--
-- Indexes for table `medicine_shop_sell`
--
ALTER TABLE `medicine_shop_sell`
  ADD KEY `fK_p` (`M_id`),
  ADD KEY `fK_` (`shop_id`);

--
-- Indexes for table `most_search_medicine`
--
ALTER TABLE `most_search_medicine`
  ADD PRIMARY KEY (`M_name`);

--
-- Indexes for table `pateint`
--
ALTER TABLE `pateint`
  ADD PRIMARY KEY (`patient_id`);

--
-- Indexes for table `patient_doctor`
--
ALTER TABLE `patient_doctor`
  ADD KEY `fK_frompatientIN_patient_doctor` (`patient_id`),
  ADD KEY `fK_fromdoctorIN_patient_doctor` (`doctor_id`);

--
-- Indexes for table `patient_shop`
--
ALTER TABLE `patient_shop`
  ADD KEY `fK_frompatientIN_patient_shop` (`patient_id`),
  ADD KEY `fK_fromshopIN_patient_shop` (`shop_id`);

--
-- Indexes for table `patient_user`
--
ALTER TABLE `patient_user`
  ADD KEY `fK_frompatientIN_patient_user` (`patient_id`),
  ADD KEY `fK_fromuserIN_patient_user` (`g_user_id`);

--
-- Indexes for table `request_advertisement`
--
ALTER TABLE `request_advertisement`
  ADD PRIMARY KEY (`add_id`),
  ADD KEY `fK_add` (`company_id`);

--
-- Indexes for table `request_medicine`
--
ALTER TABLE `request_medicine`
  ADD PRIMARY KEY (`request_id`),
  ADD KEY `fK_Request_Medicinep` (`company_id`);

--
-- Indexes for table `user_shop`
--
ALTER TABLE `user_shop`
  ADD KEY `fK_fromshopIN_user_shop` (`shop_id`),
  ADD KEY `fK_fromuseryIN_user_shop` (`g_user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100011;

--
-- AUTO_INCREMENT for table `advertisement`
--
ALTER TABLE `advertisement`
  MODIFY `add_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `company_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100011;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `doctor_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `general_user`
--
ALTER TABLE `general_user`
  MODIFY `g_user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `medical_shop`
--
ALTER TABLE `medical_shop`
  MODIFY `shop_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `medicine`
--
ALTER TABLE `medicine`
  MODIFY `M_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `pateint`
--
ALTER TABLE `pateint`
  MODIFY `patient_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `request_advertisement`
--
ALTER TABLE `request_advertisement`
  MODIFY `add_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `request_medicine`
--
ALTER TABLE `request_medicine`
  MODIFY `request_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin_company`
--
ALTER TABLE `admin_company`
  ADD CONSTRAINT `fK_fromcompanyIN_admin_company` FOREIGN KEY (`company_id`) REFERENCES `company` (`company_id`),
  ADD CONSTRAINT `fK_frommadminIN_admin_company` FOREIGN KEY (`admin_id`) REFERENCES `admin` (`admin_id`);

--
-- Constraints for table `admin_doctor`
--
ALTER TABLE `admin_doctor`
  ADD CONSTRAINT `fK_fromdoctorIN_admin_doctor` FOREIGN KEY (`doctor_id`) REFERENCES `doctor` (`doctor_id`),
  ADD CONSTRAINT `fK_frommadminIN_admin_doctor` FOREIGN KEY (`admin_id`) REFERENCES `admin` (`admin_id`);

--
-- Constraints for table `admin_shop`
--
ALTER TABLE `admin_shop`
  ADD CONSTRAINT `fK_frommadminIN_admin_shop` FOREIGN KEY (`admin_id`) REFERENCES `admin` (`admin_id`),
  ADD CONSTRAINT `fK_fromshopIN_admin_shop` FOREIGN KEY (`shop_id`) REFERENCES `medical_shop` (`shop_id`);

--
-- Constraints for table `admin_user`
--
ALTER TABLE `admin_user`
  ADD CONSTRAINT `fK_frommadminIN_admin_user` FOREIGN KEY (`admin_id`) REFERENCES `admin` (`admin_id`),
  ADD CONSTRAINT `fK_fromuserIN_admin_user` FOREIGN KEY (`g_user_id`) REFERENCES `general_user` (`g_user_id`);

--
-- Constraints for table `advertisement`
--
ALTER TABLE `advertisement`
  ADD CONSTRAINT `fK_medicine_medicine_pp` FOREIGN KEY (`company_id`) REFERENCES `company` (`company_id`);

--
-- Constraints for table `company_shop`
--
ALTER TABLE `company_shop`
  ADD CONSTRAINT `fK_fromcompanyIN_company_shop` FOREIGN KEY (`company_id`) REFERENCES `company` (`company_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fK_fromshopIN_company_shop` FOREIGN KEY (`shop_id`) REFERENCES `medical_shop` (`shop_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `doctor_company`
--
ALTER TABLE `doctor_company`
  ADD CONSTRAINT `fK_company_doctor_company` FOREIGN KEY (`doctor_id`) REFERENCES `doctor` (`doctor_id`),
  ADD CONSTRAINT `fK_doctor_doctor_company` FOREIGN KEY (`doctor_id`) REFERENCES `doctor` (`doctor_id`);

--
-- Constraints for table `doctor_education`
--
ALTER TABLE `doctor_education`
  ADD CONSTRAINT `fK_doctor_education` FOREIGN KEY (`doctor_id`) REFERENCES `doctor` (`doctor_id`);

--
-- Constraints for table `doctor_experience`
--
ALTER TABLE `doctor_experience`
  ADD CONSTRAINT `fK_doctor_experience` FOREIGN KEY (`doctor_id`) REFERENCES `doctor` (`doctor_id`);

--
-- Constraints for table `medicine`
--
ALTER TABLE `medicine`
  ADD CONSTRAINT `medicine_ibfk_1` FOREIGN KEY (`company_id`) REFERENCES `company` (`company_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `medicine_shop`
--
ALTER TABLE `medicine_shop`
  ADD CONSTRAINT `fK_from` FOREIGN KEY (`shop_id`) REFERENCES `medical_shop` (`shop_id`),
  ADD CONSTRAINT `fK_frompat` FOREIGN KEY (`M_id`) REFERENCES `medicine` (`M_id`);

--
-- Constraints for table `medicine_shop_buy`
--
ALTER TABLE `medicine_shop_buy`
  ADD CONSTRAINT `fK_buy` FOREIGN KEY (`M_id`) REFERENCES `medicine` (`M_id`),
  ADD CONSTRAINT `fK_buy_` FOREIGN KEY (`shop_id`) REFERENCES `medical_shop` (`shop_id`);

--
-- Constraints for table `medicine_shop_sell`
--
ALTER TABLE `medicine_shop_sell`
  ADD CONSTRAINT `fK_` FOREIGN KEY (`shop_id`) REFERENCES `medical_shop` (`shop_id`),
  ADD CONSTRAINT `fK_p` FOREIGN KEY (`M_id`) REFERENCES `medicine` (`M_id`);

--
-- Constraints for table `patient_doctor`
--
ALTER TABLE `patient_doctor`
  ADD CONSTRAINT `fK_fromdoctorIN_patient_doctor` FOREIGN KEY (`doctor_id`) REFERENCES `doctor` (`doctor_id`),
  ADD CONSTRAINT `fK_frompatientIN_patient_doctor` FOREIGN KEY (`patient_id`) REFERENCES `pateint` (`patient_id`);

--
-- Constraints for table `patient_shop`
--
ALTER TABLE `patient_shop`
  ADD CONSTRAINT `fK_frompatientIN_patient_shop` FOREIGN KEY (`patient_id`) REFERENCES `pateint` (`patient_id`),
  ADD CONSTRAINT `fK_fromshopIN_patient_shop` FOREIGN KEY (`shop_id`) REFERENCES `medical_shop` (`shop_id`);

--
-- Constraints for table `patient_user`
--
ALTER TABLE `patient_user`
  ADD CONSTRAINT `fK_frompatientIN_patient_user` FOREIGN KEY (`patient_id`) REFERENCES `pateint` (`patient_id`),
  ADD CONSTRAINT `fK_fromuserIN_patient_user` FOREIGN KEY (`g_user_id`) REFERENCES `general_user` (`g_user_id`);

--
-- Constraints for table `request_advertisement`
--
ALTER TABLE `request_advertisement`
  ADD CONSTRAINT `fK_add` FOREIGN KEY (`company_id`) REFERENCES `company` (`company_id`);

--
-- Constraints for table `request_medicine`
--
ALTER TABLE `request_medicine`
  ADD CONSTRAINT `fK_Request_Medicinep` FOREIGN KEY (`company_id`) REFERENCES `company` (`company_id`);

--
-- Constraints for table `user_shop`
--
ALTER TABLE `user_shop`
  ADD CONSTRAINT `fK_fromshopIN_user_shop` FOREIGN KEY (`shop_id`) REFERENCES `medical_shop` (`shop_id`),
  ADD CONSTRAINT `fK_fromuseryIN_user_shop` FOREIGN KEY (`g_user_id`) REFERENCES `general_user` (`g_user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
