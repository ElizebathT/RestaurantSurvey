-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2022 at 10:26 AM
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
-- Database: `restaurant`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`) VALUES
('ELAN');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `username`, `password`) VALUES
(1, 'Alan', 'Alan@123'),
(2, 'Elen', 'Elen$2'),
(4, 'Yash', 'Ya$h123'),
(5, 'Tessa', 'Tess@123'),
(6, 'Eliza', 'Eli@1'),
(12, 'JOHN', 'John@1234'),
(13, 'ELAN', 'Elan@123'),
(15, 'Reeba', 'Reeba#1');

-- --------------------------------------------------------

--
-- Table structure for table `survey`
--

CREATE TABLE `survey` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `age` int(11) NOT NULL,
  `city` varchar(20) NOT NULL,
  `taste` varchar(50) NOT NULL,
  `chef` varchar(20) NOT NULL,
  `dish` varchar(20) NOT NULL,
  `restaurant` varchar(20) NOT NULL,
  `recommend` varchar(10) NOT NULL,
  `comment` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `survey`
--

INSERT INTO `survey` (`id`, `name`, `email`, `age`, `city`, `taste`, `chef`, `dish`, `restaurant`, `recommend`, `comment`) VALUES
(2, '                JOHN', 'john@gmail.com', 21, 'ekm', 'Chinese', 'Kaimal', 'Noodles', 'Wok Sticks', 'Yes', 'Nil'),
(3, 'Alan', 'alan@gmail.com', 15, 'ktm', 'Snacks', 'Edward', 'Chicken Rolls', 'Road Valley', 'Maybe', 'Nope    '),
(5, 'ELAN            ', 'elan@gmail.com', 20, 'ekm', 'Veg', 'Bonny', 'Sandwich', 'Road Valley', 'Maybe', 'No'),
(6, 'TEENA', 'teena@gmail.com', 22, 'tsr', 'Desserts', 'Jasmine', 'Cupcake', 'Misty Cakes', 'Yes', 'no '),
(11, 'Swathy', 'swathy@reddif.com', 21, 'ekm', 'Chinese', 'Wu-chi', 'Ramen', 'Wok Sticks', 'No', ' Chef not good'),
(12, 'Hari', 'hari@gmail.com', 21, 'ekm', 'Non-veg', 'Edward', 'Chicken Sandwich', 'Road Valley', 'Yes', 'no'),
(13, 'Diya', 'diya@gmail.com', 18, 'ktm', 'Desserts', 'Reeba', 'Cupcake', 'Misty Cakes', 'No', 'Owner bakes better    ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `survey`
--
ALTER TABLE `survey`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `survey`
--
ALTER TABLE `survey`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
