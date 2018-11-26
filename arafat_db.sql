-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 10, 2018 at 05:20 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `arafat_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_me`
--

CREATE TABLE `about_me` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `image` varchar(255) NOT NULL,
  `position` varchar(100) NOT NULL,
  `institute` varchar(255) NOT NULL,
  `dept` varchar(255) NOT NULL,
  `dob` varchar(50) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `about` text NOT NULL,
  `fb_link` varchar(255) NOT NULL,
  `yt_link` varchar(255) NOT NULL,
  `git_link` varchar(255) NOT NULL,
  `tw_link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about_me`
--

INSERT INTO `about_me` (`id`, `name`, `image`, `position`, `institute`, `dept`, `dob`, `phone`, `email`, `address`, `about`, `fb_link`, `yt_link`, `git_link`, `tw_link`) VALUES
(1, 'Md Arafat Hossain', 'upload/b0a2912634.jpg', 'Assistant professore', 'Jessore University of Science and Technology', 'Dept. of Computer Sceince and Engineering', '12-02-1990', '+8801743754783', 'arafat.cse.just@gmail.com', 'Room No: 218, Bangabandhu Sheikh Mujib Academic Building, JUST', ' Lorem ipsum dolor sit amet, consectetur adipisci ngelit. In euismod faucibus quam, a sodales er osplacerat vitae. Sed pretium fermentum luctus. Nunc at lectus ut ex blandit egestas. Pellent esque sed erat at diam lacinia accumsan. \r\nLorem ipsum dolor sit amet, consectetur adipisci ngelit. In euismod faucibus quam, a sodales er osplacerat vitae. Sed pretium fermentum luctus. Nunc at lectus ut ex blandit egestas. Pellent esque sed erat at diam lacinia accumsan.                                                                                         ', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `id` int(11) NOT NULL,
  `degree_name` varchar(255) NOT NULL,
  `pass_year` varchar(16) NOT NULL,
  `institution` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`id`, `degree_name`, `pass_year`, `institution`, `description`) VALUES
(1, 'B.Sc in CSE', '2015-16', 'Jessore University of Science and Technology', '                                This is the description. This is the description.  This is the description.  This is the description.  This is the description.  This is the description.  This is the description.                                                '),
(2, 'Higher Secondary School Certificate', '2009-2010', 'Rajjak Collage, jessore ', 'This is the description. This is the description. This is the description. This is the description. This is the description. This is the description. This is the description. This is the description. This is the description. '),
(3, 'Secondary School Certificate', '2007-2008', 'Jessore Zilla School', 'This is the description. This is the description. This is the description. This is the description. This is the description. This is the description. This is the description. This is the description. ');

-- --------------------------------------------------------

--
-- Table structure for table `experience`
--

CREATE TABLE `experience` (
  `id` int(11) NOT NULL,
  `position` varchar(255) NOT NULL,
  `institution` varchar(255) NOT NULL,
  `from_to` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `experience`
--

INSERT INTO `experience` (`id`, `position`, `institution`, `from_to`, `description`) VALUES
(1, '1Senior software engineer', '1Brainstation 23, Bangladesh', '21/07/2016 - 01/04/2017', '1 This is the description. This is the description.This is the description.This is the description.This is the description.This is the description.This is the description.                            '),
(2, 'Junior Software Engineer', 'Luminex soft tech', '20/07/2016 - 01/04/2017', 'This is the description. This is the description. This is the description. This is the description. This is the description. '),
(3, 'Trainee engineer', 'Soft tech bd', '21/07/2016 - 01/04/2017', 'This is the description. This is the description. This is the description. This is the description. ');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `contributors` varchar(255) NOT NULL,
  `dat` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`id`, `title`, `image`, `description`, `contributors`, `dat`) VALUES
(1, 'This is the project title1', 'upload/dbc32e75e3.jpg', ' 1This is the project description. This is the project description. This is the project description. This is the project description. This is the project description. This is the project description. This is the project description. This is the project description. This is the project description. This is the project description.                             ', '1contributors name,contributors name,contributors name,', '2018-11-11');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `username`, `password`) VALUES
(1, 'arafat', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `thesis`
--

CREATE TABLE `thesis` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `contributors` varchar(500) NOT NULL,
  `dat` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `thesis`
--

INSERT INTO `thesis` (`id`, `title`, `image`, `description`, `contributors`, `dat`) VALUES
(1, 'This is the thesis title1', 'upload/4aa4344682.jpg', '                                                                                                                                                                     This is the description.         This is the description.      This is the description.      This is the description.      This is the description.      This is the description.      This is the description.      This is the description.      This is the description.                                                                                                                                                                                                 ', 'contributors name,contributors name,contributors name,', '2018-11-10'),
(2, 'This is the thesis title2', 'upload/894b826c9a.jpg', '                                This is the details. This is the details. This is the details. This is the details. This is the details. This is the details. This is the details. This is the details. This is the details. This is the details. This is the details. This is the details.                             ', 'contributors name,contributors name,contributors name,', '2018-11-10'),
(3, 'This is the thesis title3', 'upload/339de62370.jpg', '                                                                This is the description. This is the description. This is the description. This is the description. This is the description. This is the description. This is the description. This is the description. This is the description. This is the description. This is the description. This is the description. This is the description. This is the description. This is the description. This is the description. This is the description. This is the description. This is the description. This is the description. This is the description. This is the description.                                                         ', 'contributors name,contributors name,contributors name,', '2018-11-10'),
(4, 'This is the thesis title', 'upload/60135a6bfb.jpg', 'Thesis description. Thesis description. Thesis description. Thesis description. Thesis description. Thesis description. Thesis description. Thesis description. Thesis description. Thesis description. Thesis description. Thesis description. Thesis description. Thesis description. Thesis description. Thesis description. Thesis description. Thesis description. Thesis description. Thesis description. v', 'contributors name,contributors name,contributors name,', '2018-11-10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_me`
--
ALTER TABLE `about_me`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `experience`
--
ALTER TABLE `experience`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `thesis`
--
ALTER TABLE `thesis`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_me`
--
ALTER TABLE `about_me`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `experience`
--
ALTER TABLE `experience`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `thesis`
--
ALTER TABLE `thesis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
