-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 10, 2021 at 05:31 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(250) NOT NULL,
  `mobile` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `mobile`) VALUES
(1, 'admin', 'admin@gmail.com', 'admin@12', 1148458757);

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `book_id` int(11) NOT NULL,
  `book_name` varchar(250) NOT NULL,
  `book_author` varchar(12) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `book_no` int(11) NOT NULL,
  `book_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`book_id`, `book_name`, `book_author`, `cat_id`, `book_no`, `book_price`) VALUES
(1, 'Software engineering', 'rohit', 1, 4518, 270),
(2, 'Data structure', 'david', 2, 6541, 300),
(18, 'python', 'sss', 123, 123, 1234),
(19, 'python', 'sss', 123, 123, 1234);

-- --------------------------------------------------------

--
-- Table structure for table `books_issue`
--

CREATE TABLE `books_issue` (
  `sid` int(12) NOT NULL,
  `book_name` varchar(23) NOT NULL,
  `book_author` varchar(23) NOT NULL,
  `email` varchar(23) NOT NULL,
  `book_no` int(23) NOT NULL,
  `issuedate` date NOT NULL,
  `returndate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `books_issue`
--

INSERT INTO `books_issue` (`sid`, `book_name`, `book_author`, `email`, `book_no`, `issuedate`, `returndate`) VALUES
(2, 'Data structure', 'david', 'user@gmail.com', 13, '2021-09-21', '0000-00-00'),
(3, 'Data structure', 'david', 'user@gmail.com', 14, '2021-09-21', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(50) NOT NULL,
  `name` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `book` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `subject`, `book`) VALUES
(1, 'abc', 'abc@gmail.com', '123', '0'),
(2, 'ss', 'sssss@gmail.com', '123', '0'),
(4, 'ss', 'sssss@gmail.com', '123', '0'),
(12, 'devesh', 'de@gmail.com', 'dddff', '0'),
(13, 'aa', 'dd@gmail.com', '12', '0'),
(18, 'aaa', 'aaaa@gmail.com', '12er', 'data'),
(19, '', '', '', '2021-11-17'),
(20, '', '', '', '2021-11-18'),
(21, 'ddddddd', 'ddddd@gmail.com', '1234', '2021-11-26'),
(22, 'ddddddd', 'ddddd@gmail.com', '1234', '2021-11-26'),
(23, 'aa', 'dd@gmail.com', 'dd', '2021-11-10'),
(24, 'aa', 'dd@gmail.com', 'dd', ''),
(25, 'aa', 'dd@gmail.com', 'dd', ''),
(26, 'aa', 'dd@gmail.com', 'dd', ''),
(27, 'aa', 'dd@gmail.com', 'dd', ''),
(28, 'dd', 'devesh@gmail.com', '1234', '2021-12-03');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `id` int(30) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(15) NOT NULL,
  `book` varchar(12) NOT NULL,
  `date1` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`id`, `name`, `email`, `book`, `date1`) VALUES
(31, 'deveshlilhare', 'asb@gmail.com', '1234', '0000-00-00'),
(32, 'deveshlilhare', 'asb@gmail.com', '1234', '2021-11-11'),
(33, 'rahu', 'ead@gmail.com', '123', '2021-11-24');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `enroll` int(12) NOT NULL,
  `password` varchar(100) NOT NULL,
  `mobile` int(10) NOT NULL,
  `address` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `enroll`, `password`, `mobile`, `address`) VALUES
(2, 'hemant', 'hemant@gmail.com', 0, 'hemant@123', 2147483644, 'XYZ Coloney, PQR Nagar , Jaipur');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `books_issue`
--
ALTER TABLE `books_issue`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `books_issue`
--
ALTER TABLE `books_issue`
  MODIFY `sid` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
