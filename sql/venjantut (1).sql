-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2020 at 10:52 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `venjantut`
--

-- --------------------------------------------------------

--
-- Table structure for table `applyhindi_form`
--

CREATE TABLE `applyhindi_form` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `highest_qual` varchar(255) NOT NULL,
  `teaching_exp` varchar(255) NOT NULL,
  `board_type` varchar(255) NOT NULL,
  `timings` varchar(255) NOT NULL,
  `occupation` varchar(255) NOT NULL,
  `phoneno` varchar(255) NOT NULL,
  `resume` varchar(255) NOT NULL,
  `know` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `applyhindi_form`
--

INSERT INTO `applyhindi_form` (`id`, `name`, `gender`, `address`, `email`, `highest_qual`, `teaching_exp`, `board_type`, `timings`, `occupation`, `phoneno`, `resume`, `know`) VALUES
(1, 'Aaryan Raina', 'male', '165/2 RoopNagar Enclave Block-A', '2018.aaryan.raina@ves.ac.in', 'M.E', 'Less Two years', 'J & K Board', '4-5 AM ', 'Other', '09682141248', 'https://docs.google.com/document/d/1zrmLS-4mqu0iVeUJlZEmrSFbjbWVPMpaE-FgnHBMXYM/edit?usp=sharing', ' qweqwe');

-- --------------------------------------------------------

--
-- Table structure for table `applysst_form`
--

CREATE TABLE `applysst_form` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `highest_qual` varchar(255) NOT NULL,
  `teaching_exp` varchar(255) NOT NULL,
  `board_type` varchar(255) NOT NULL,
  `timings` varchar(255) NOT NULL,
  `occupation` varchar(255) NOT NULL,
  `phoneno` varchar(255) NOT NULL,
  `resume` varchar(255) NOT NULL,
  `know` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `applysst_form`
--

INSERT INTO `applysst_form` (`id`, `name`, `gender`, `address`, `email`, `highest_qual`, `teaching_exp`, `board_type`, `timings`, `occupation`, `phoneno`, `resume`, `know`) VALUES
(1, 'Aaryan Raina', 'male', '165/2 RoopNagar Enclave Block-A', '2018.aaryan.raina@ves.ac.in', 'B.E', 'Less Two years', 'on', 'on', 'female', '09682141248', 'https://docs.google.com/document/d/1zrmLS-4mqu0iVeUJlZEmrSFbjbWVPMpaE-FgnHBMXYM/edit?usp=sharing', ' qweqweqw'),
(2, 'Aaryan Raina', 'female', '165/2 RoopNagar Enclave Block-A', '2018.aaryan.raina@ves.ac.in', 'MBBS', 'More than 5 years', 'on', 'on', 'Full-Time Teacher', '09682141248', 'https://docs.google.com/document/d/1zrmLS-4mqu0iVeUJlZEmrSFbjbWVPMpaE-FgnHBMXYM/edit?usp=sharing', ' asdasd'),
(3, 'jai shree ram', 'male', 'ayodhya', '2018.aaryan.raina@ves.ac.in', 'M.Tech', 'Less Two years', 'on', '12-1 AM', 'Full-Time Teacher', '09682141248', 'https://docs.google.com/document/d/1zrmLS-4mqu0iVeUJlZEmrSFbjbWVPMpaE-FgnHBMXYM/edit?usp=sharing', ' asdasdasd'),
(4, 'Ganpati Bappa', 'male', 'siddhivinayak, mumbai', '2018.aaryan.raina@ves.ac.in', 'M.E', 'Less than a year', 'J & K Board', '3-4 AM', 'Full-Time Teacher', '09682141248', 'https://docs.google.com/document/d/1zrmLS-4mqu0iVeUJlZEmrSFbjbWVPMpaE-FgnHBMXYM/edit?usp=sharing', ' om namah shivaaaye'),
(5, 'Aaryan Raina', 'male', '165/2 RoopNagar Enclave Block-A', '2018.aaryan.raina@ves.ac.in', 'MBBS', 'More than 5 years', 'CBSE Board', 'Full Time ', 'College Student', '09682141248', 'https://docs.google.com/document/d/1zrmLS-4mqu0iVeUJlZEmrSFbjbWVPMpaE-FgnHBMXYM/edit?usp=sharing', ' hello'),
(6, 'Hemkesh Raina', 'male', 'T-1,Shradha Villa,Plot No 44, Sector-5,Rajender Nagar, GHAZIABAD,', 'hemkeshraina@gmail.com', 'B.Tech', 'Less than a year', 'CBSE Board', '3-4 AM', 'College Student', '852704968', 'https://docs.google.com/document/d/1D_QCM0HDpnXWtIPvRtGTwq13N-yZtLxBH2gHXji5QEQ/edit', ' online');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `email`, `message`) VALUES
(1, '2018.aaryan.raina@ves.ac.in', 'i did it again !!!!!'),
(2, 'ar@rrrrr.com', ' Message... wererwer');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `email`, `password`) VALUES
(1, 'pooja.shetty@ves.ac.in', 'pooja@shetty');

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE `notes` (
  `id` int(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notes`
--

INSERT INTO `notes` (`id`, `class`, `subject`, `link`) VALUES
(1, '9', 'maths', 'www.google.com'),
(4, '9', 'english', 'https://drive.google.com/file/d/13r5YlVOGovQkohpbhwEOor7pfXYRz6rh/view?usp=sharing'),
(6, '9', 'science', 'https://drive.google.com/file/d/1TMLlhBc-cZ0UH4t3HJi-a1wMhb3BMBsd/view?usp=sharing'),
(7, '10', 'maths', 'https://drive.google.com/file/d/1_9uiZuK-p__bYdR0FGMzpqU6TPUoKuc3/view?usp=sharing'),
(10, '10', 'english', 'https://drive.google.com/file/d/1L2BhKhVDmhQn93LFYBELgF2Up91TgzCM/view?usp=sharing'),
(11, '10', 'science', 'https://drive.google.com/file/d/12ILwtk_wtBRc1OVFR8lXcLQ-2F34ZZCT/view?usp=sharing');

-- --------------------------------------------------------

--
-- Table structure for table `privacy_form`
--

CREATE TABLE `privacy_form` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `choose` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `privacy_form`
--

INSERT INTO `privacy_form` (`id`, `name`, `email`, `choose`) VALUES
(1, 'Aaryan Raina', '2018.aaryan.raina@ves.ac.in', 'Show me data'),
(2, 'vineet Raina', '2018.aaryan.raina@ves.ac.in', 'Delete data'),
(4, 'ramu', 'wera@ves.ac.in', 'Delete data'),
(5, 'Shubhra', 'Shubhrajena@gmail.com', 'Delete data');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `user_type` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phoneno` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `school` varchar(255) NOT NULL,
  `payement` varchar(255) NOT NULL,
  `queries` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `username`, `user_type`, `address`, `email`, `password`, `phoneno`, `class`, `school`, `payement`, `queries`) VALUES
(8, 'hemkesh', 1, 'qwerrer', 'aaryan.raina2000@gmail.com', '54321', '478643', '', '', 'yes', 'iujfv'),
(9, 'Hemkesh', 1, 'fussi nagar', '2018.hemkesh@ves.ac.in', 'fussi', '7894561233', '', '', 'yes', 'why so fussi'),
(11, 'shubhra', 1, 'thane', 'shubhra@yahoo.com', 'shubhra@jena', '9969371927', '', '', 'yes', 'join'),
(12, 'Pooja Shetty', 2, 'thane,mumbai', 'pooja.shetty@ves.ac.in', 'pooja@shetty', '9971153246', '9th & 10th (CBSE)', 'VES College', 'yes', 'join'),
(13, 'shilpa', 1, 'T-1,Shradha Villa,Plot No 44', 'shilpa@gmail.com', 'shilpa', '99726533', '', '', 'yes', '');

-- --------------------------------------------------------

--
-- Table structure for table `response`
--

CREATE TABLE `response` (
  `PHONENO` varchar(255) NOT NULL,
  `MID` varchar(255) NOT NULL,
  `TXNID` varchar(255) NOT NULL,
  `TXNAMOUNT` varchar(255) NOT NULL,
  `PAYMENTMODE` varchar(255) NOT NULL,
  `CURRENCY` varchar(255) NOT NULL,
  `TXNDATE` varchar(255) NOT NULL,
  `STATUS` varchar(255) NOT NULL,
  `RESPCODE` varchar(255) NOT NULL,
  `RESPMSG` varchar(255) NOT NULL,
  `GATEWAYNAME` varchar(255) NOT NULL,
  `BANKTXNID` varchar(255) NOT NULL,
  `BANKNAME` varchar(255) NOT NULL,
  `CHECKSUMHASH` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `response`
--

INSERT INTO `response` (`PHONENO`, `MID`, `TXNID`, `TXNAMOUNT`, `PAYMENTMODE`, `CURRENCY`, `TXNDATE`, `STATUS`, `RESPCODE`, `RESPMSG`, `GATEWAYNAME`, `BANKTXNID`, `BANKNAME`, `CHECKSUMHASH`) VALUES
('9969371927', 'XUVNjh06520049404348', '20201207111212800110168460602155918', '1088.00', 'PPI', 'INR', '2020-12-07 01:25:49.0', 'TXN_SUCCESS', '01', 'Txn Success', 'WALLET', '63718090', 'WALLET', 'EFVGkwW4VfMlY3RWSpUxP+LSO+04RcgjnumWqL89GjKSB3WQsMyAbl84cs2QEkad6jLEQhaMcCzqCOCiskXrB5kVanV4Kf1UUymLZ0riukE='),
('99726534', 'XUVNjh06520049404348', '20201207111212800110168698402139754', '1088.00', 'PPI', 'INR', '2020-12-07 01:32:43.0', 'TXN_SUCCESS', '01', 'Txn Success', 'WALLET', '63718095', 'WALLET', 'Ad7btPlIM0wLPw5rUVtFGBpV+bJ1038VElxIJkw0Pq918p7+71cgnMo8hRs4UsVGZj/csTMfKUEES0lvHnQwyhYxxXKZ6dqG1haANKhXNUM='),
('99726533', 'XUVNjh06520049404348', '20201207111212800110168686902132643', '1088.00', 'PPI', 'INR', '2020-12-07 01:37:11.0', 'TXN_SUCCESS', '01', 'Txn Success', 'WALLET', '63718100', 'WALLET', 'zh7K70vgGaimv8g0ws9TKGUExsyQWfk92QTPuxdZX90qkiEDgmtAuOwusG3wdXKyx5J0OrRHc/GDWHbQaSePwesN76Jehh8q0fPZLn2ZgP8=');

-- --------------------------------------------------------

--
-- Table structure for table `student_info_classroom_batches`
--

CREATE TABLE `student_info_classroom_batches` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `query` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_info_classroom_batches`
--

INSERT INTO `student_info_classroom_batches` (`id`, `name`, `email`, `class`, `query`) VALUES
(1, 'Aaryan Raina', '2018.aaryan.raina@ves.ac.in', '10th CBSE', 'I did it!!!!'),
(2, 'sknfks', '2018.shubhra.jena@ves.ac.in', '9th CBSE', ''),
(3, 'Tapesh', 'tapesh@ves.in', '10th CBSE', 'i want to join classroom'),
(4, 'Shubhra Jena', 'shubhrajena@gmail.com', '9th State Board', 'i want to join classroom batch');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applyhindi_form`
--
ALTER TABLE `applyhindi_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `applysst_form`
--
ALTER TABLE `applysst_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `privacy_form`
--
ALTER TABLE `privacy_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_info_classroom_batches`
--
ALTER TABLE `student_info_classroom_batches`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `applyhindi_form`
--
ALTER TABLE `applyhindi_form`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `applysst_form`
--
ALTER TABLE `applysst_form`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `notes`
--
ALTER TABLE `notes`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `privacy_form`
--
ALTER TABLE `privacy_form`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `student_info_classroom_batches`
--
ALTER TABLE `student_info_classroom_batches`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
