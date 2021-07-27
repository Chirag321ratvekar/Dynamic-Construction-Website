-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 25, 2021 at 08:14 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `constro`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `bid` int(7) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(77) NOT NULL,
  `image` text NOT NULL,
  `usertype` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`bid`, `email`, `password`, `image`, `usertype`) VALUES
(1, 'admin@gmail.com', 'cpadmin', '', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(7) NOT NULL,
  `imgblog` text NOT NULL,
  `title` varchar(25) NOT NULL,
  `content` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `idc` int(7) NOT NULL,
  `namec` varchar(25) NOT NULL,
  `emailc` varchar(25) NOT NULL,
  `subjectc` varchar(25) NOT NULL,
  `msgc` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`idc`, `namec`, `emailc`, `subjectc`, `msgc`) VALUES
(1, 'Chirag Deepak Ratvekar', 'chinmayratvekar77@gmail.c', 'about building', 'cascacewf'),
(2, 'ee', 'dd', 'dddddd', 'deedd'),
(3, 'Chirag Deepak Ratvekarxx', 'chinmayratvekar77@gmail.c', 'xsxxxs', 'xssxx'),
(4, 'Chirag Deepak Ratvekarxx', 'chinmayratvekar77@gmail.c', 'xsxxxs', 'xssxx'),
(5, 'Chirag Deepak Ratvekar', 'chinmayratvekar77@gmail.c', '', 'wqqqqqqqqqqqqqqqqqqq');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(7) NOT NULL,
  `imgp` text NOT NULL,
  `namep` varchar(25) NOT NULL,
  `des` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `imgp`, `namep`, `des`) VALUES
(3, 'blog-page-3.jpg', 'insta', 'photography'),
(6, 'work-4.jpg', 'aaaas', 'sssssa'),
(7, 'work-1.jpg', 'Building Construction', 'Buildings'),
(8, 'work-3.jpg', 'Bridge Construction', 'Government Bridges Construction'),
(9, 'work-8.jpg', 'High Tower Construction', 'High Private Offices Tower Buildings'),
(10, 'work-9.jpg', 'Skyscrappers Building', 'Skyscrappers Building Work in Mumbai.');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `id` int(7) NOT NULL,
  `img` text NOT NULL,
  `name` varchar(27) NOT NULL,
  `position` varchar(17) NOT NULL,
  `img2` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`id`, `img`, `name`, `position`, `img2`) VALUES
(32, 'sahil.jpeg', 'Sahil Kale', 'Civil Engineer', 'avatar2.jpg'),
(33, '1500x1591.jpeg', 'Chirag Ratvekar ', 'CEO Developer Com', 'avatar4.jpg'),
(35, 'staff-4.jpg', 'Saurabh Wani', 'Co-Supporter', 'avatar2.jpg'),
(36, 'staff-3.jpg', 'Rita Jain', 'Sales', 'avatar6.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `testmon`
--

CREATE TABLE `testmon` (
  `id` int(11) NOT NULL,
  `imgtest` text NOT NULL,
  `name` varchar(25) NOT NULL,
  `testmoni` longtext NOT NULL,
  `imgtest2` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `testmon`
--

INSERT INTO `testmon` (`id`, `imgtest`, `name`, `testmoni`, `imgtest2`) VALUES
(4, 'avatar2.jpg', 'ass', 'assaaa', 'avatar6.jpg'),
(5, 'person_1.jpg', 'Prince', 'Kya kr rhe ho prince babu... maja ma ho kya ?', 'avatar4.jpg'),
(6, 'person_2.jpg', 'Vaish', 'asdflkjhg', 'avatar2.jpg'),
(9, 'person_3.jpg', 'Bapu Patil', 'Demo Testimonial', 'avatar9.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`bid`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`idc`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testmon`
--
ALTER TABLE `testmon`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `bid` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `idc` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `testmon`
--
ALTER TABLE `testmon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
