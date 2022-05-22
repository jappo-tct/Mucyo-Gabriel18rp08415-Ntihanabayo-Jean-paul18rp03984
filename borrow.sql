-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2022 at 01:58 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `borrow`
--

-- --------------------------------------------------------

--
-- Table structure for table `accomodated_students`
--

CREATE TABLE `accomodated_students` (
  `id` int(11) NOT NULL,
  `names` varchar(54) NOT NULL,
  `regnumber` varchar(9) NOT NULL,
  `room` varchar(65) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `accomodated_students`
--

INSERT INTO `accomodated_students` (`id`, `names`, `regnumber`, `room`) VALUES
(1, 'ntihanabayo Jean pal', '18rp03984', 'NB10'),
(2, 'mucyo gabriel', '18rp03988', 'NB15');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(23) NOT NULL,
  `password` varchar(23) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin'),
(2, 'gaby', '123');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `phone` int(10) NOT NULL,
  `regno` varchar(9) NOT NULL,
  `room` varchar(4) NOT NULL,
  `approve` varchar(6) NOT NULL DEFAULT 'no'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `lname`, `phone`, `regno`, `room`, `approve`) VALUES
(1, 'ntihanabayo', 'Jean pal', 782260765, '18rp03984', 'NB10', 'yes'),
(2, 'mucyo', 'gabriel', 882223459, '18rp03988', 'NB15', 'no'),
(3, 'ingabire', 'muto', 882223459, '18rp03988', 'NB17', 'no'),
(4, 'djibril', 'hhhh', 788888888, '18rp03777', 'NB2', 'no'),
(5, 'djibril', 'hhhh', 788888888, '18rp03777', 'NB2', 'no');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accomodated_students`
--
ALTER TABLE `accomodated_students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accomodated_students`
--
ALTER TABLE `accomodated_students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
