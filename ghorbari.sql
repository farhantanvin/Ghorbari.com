-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2019 at 04:41 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ghorbari`
--

-- --------------------------------------------------------

--
-- Table structure for table `homes`
--

CREATE TABLE `homes` (
  `id` int(10) NOT NULL,
  `post_email` varchar(50) NOT NULL,
  `post_type` varchar(25) NOT NULL,
  `catagory` varchar(20) NOT NULL,
  `price` int(20) NOT NULL,
  `size` int(20) NOT NULL,
  `bed` int(10) NOT NULL,
  `bath` int(10) NOT NULL,
  `balcony` int(11) NOT NULL,
  `flat` varchar(30) NOT NULL,
  `house` varchar(30) NOT NULL,
  `road` varchar(30) NOT NULL,
  `sector` varchar(30) NOT NULL,
  `area` varchar(30) NOT NULL,
  `image` varchar(50) NOT NULL,
  `post_time` varchar(30) NOT NULL,
  `status` int(10) NOT NULL,
  `count` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `homes`
--

INSERT INTO `homes` (`id`, `post_email`, `post_type`, `catagory`, `price`, `size`, `bed`, `bath`, `balcony`, `flat`, `house`, `road`, `sector`, `area`, `image`, `post_time`, `status`, `count`) VALUES
(6, 'xyz@gmail.com', 'rent', 'residential', 12000, 1400, 3, 1, 4, 'c/3', '40', '2', '5', 'Dhanmondi', 'dhanmondi1.png', '10-12-19', 1, 1),
(8, 'yyy.com', 'buy', 'uttara', 1000, 1200, 2, 2, 3, 'U/4', '35', '5', '3', 'uttra', 'filepict-1367930266.jpg', '10-12-19', 1, 1),
(9, 'fff.com', 'buy', 'rent', 1000, 1200, 2, 2, 3, 'R/4', '35', '5', '3', 'banani', 'mirpur1.png', '10-12-19', 1, 1),
(10, 'vvv@gmail.com', 'buy', 'residential', 1000, 1200, 2, 2, 3, 'B/4', '35', '5', '3', 'Bosundhara', 'bashundhara1.png', '10-12-19', 1, 1),
(22, 'farhantanvin@gmail.com', 'buy', 'Commercial', 1200, 1200, 1, 3, 5, 'd', '1', 'a', 's', 'Dhanmondi', '', '04/29/2019', 1, 0),
(24, 'farhantanvin@gmail.com', 'rent', 'Residential', 1200, 1200, 4, 1, 2, 'd', '1', 'a', 's', 'Gulshan', 'asphalt-beetle-car-144171.jpg', '04/29/2019', 1, 0),
(25, 'farhantanvin@gmail.com', 'rent', 'Commercial', 1200, 1200, 2, 2, 2, 'd', '1', '5', 's', 'Banani', 'rsz_1rsinneture.jpg', '04/29/2019', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `id` int(11) NOT NULL,
  `post_email` varchar(50) NOT NULL,
  `req_name` varchar(50) NOT NULL,
  `req_email` varchar(50) NOT NULL,
  `req_phone` int(11) NOT NULL,
  `post_id` int(10) NOT NULL,
  `status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`id`, `post_email`, `req_name`, `req_email`, `req_phone`, `post_id`, `status`) VALUES
(14, 'farhantanvin@gmail.com', 'farhan tanvin', 'ftrakin@gmail.com', 1676518531, 5, 1),
(15, 'farhantanvin@gmail.com', 'farhan tanvin', 'farhantanvin@gmail.com', 1676518531, 5, 1),
(32, 'xyz@gmail.com', 'farhan tanvin', 'farhantanvin@gmail.com', 1676518531, 6, 1),
(33, 'vvv@gmail.com', 'farhan tanvin', 'rakin@gmail.com', 1676518531, 10, 1);

-- --------------------------------------------------------

--
-- Table structure for table `saved`
--

CREATE TABLE `saved` (
  `id` int(10) NOT NULL,
  `post_id` int(10) NOT NULL,
  `post_email` varchar(50) NOT NULL,
  `whosaved_email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `saved`
--

INSERT INTO `saved` (`id`, `post_id`, `post_email`, `whosaved_email`) VALUES
(1, 5, 'farhantanvin@gmail.com', 'farhantanvin@gmail.com'),
(3, 6, 'xyz@gmail.com', 'farhantanvin@gmail.com'),
(4, 8, 'yyy.com', 'farhantanvin@gmail.com'),
(5, 9, 'fff.com', 'farhantanvin@gmail.com'),
(6, 10, 'vvv@gmail.com', 'farhantanvin@gmail.com'),
(7, 5, 'farhantanvin@gmail.com', 'ftrakin@gmail.com'),
(8, 5, 'farhantanvin@gmail.com', 'ftrakin@gmail.com'),
(9, 6, 'xyz@gmail.com', 'ftrakin@gmail.com'),
(14, 5, 'farhantanvin@gmail.com', 'farhantanvin@gmail.com'),
(15, 5, 'farhantanvin@gmail.com', 'farhantanvin@gmail.com'),
(16, 5, 'farhantanvin@gmail.com', 'farhantanvin@gmail.com'),
(18, 9, 'fff.com', 'farhantanvin@gmail.com'),
(19, 9, 'fff.com', 'farhantanvin@gmail.com'),
(20, 6, 'xyz@gmail.com', 'farhantanvin@gmail.com'),
(21, 6, 'xyz@gmail.com', 'farhantanvin@gmail.com'),
(22, 6, 'xyz@gmail.com', 'farhantanvin@gmail.com'),
(23, 8, 'yyy.com', 'farhantanvin@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(25) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `mobile` int(11) NOT NULL,
  `image` varchar(50) NOT NULL,
  `user_type` varchar(20) NOT NULL,
  `status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `password`, `gender`, `mobile`, `image`, `user_type`, `status`) VALUES
(7, 'Rakin Farhan', 'rakin123', 'ftrakin@gmail.com', '12345678#', 'Male', 1751077452, '', 'user', 1),
(9, 'farhan tanvin', 'farhan123', 'farhantanvin@gmail.com', '12345678@', 'Male', 1751077452, '', 'user', 1),
(10, 'admin', 'superadmin', 'admin@gmail.com', 'admin', 'm', 1234567890, 'AA.jpg', 'admin', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `homes`
--
ALTER TABLE `homes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `saved`
--
ALTER TABLE `saved`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`,`username`,`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `homes`
--
ALTER TABLE `homes`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `saved`
--
ALTER TABLE `saved`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
