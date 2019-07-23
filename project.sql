-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2019 at 09:07 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
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
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Password` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `username`, `Email`, `Password`) VALUES
(1, 'farshid997', 'arnob123@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(2, 'arnob009', 'arnobahsan2016@gmail.com', 'f6e89ee94c7577788181ba054183f659'),
(3, 'ahsan', 'arnob.farshid66@gmail.com', '81b073de9370ea873f548e31b8adc081'),
(4, 'farshidahsan', 'arnob12345@gmail.com', 'd79c8788088c2193f0244d8f1f36d2db'),
(5, 'Mahi', 'arnob123456@gmail.com', '99941a8015cd830b498cd9f0ddf4a500'),
(6, 'admin', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_comment`
--

CREATE TABLE `tbl_comment` (
  `comment_id` int(11) NOT NULL,
  `parent_comment_id` int(11) NOT NULL,
  `comment` varchar(200) NOT NULL,
  `comment_sender_name` varchar(40) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_comment`
--

INSERT INTO `tbl_comment` (`comment_id`, `parent_comment_id`, `comment`, `comment_sender_name`, `date`) VALUES
(1, 0, 'hi', 'farshid ahsan', '2019-03-29 20:52:10'),
(2, 1, 'i want to know about AiUB', 'anik sarker', '2019-03-29 21:00:03'),
(3, 0, 'Tell me something about brac University', 'Mahi', '2019-03-29 21:14:27'),
(4, 2, 'it is good', 'farshid ahsan', '2019-03-29 21:15:40'),
(5, 0, 'hhhhh', 'hira', '2019-03-30 20:38:07'),
(6, 2, 'hi', 'farshid', '2019-03-30 20:38:49'),
(7, 0, '391 kobe submission?', 'mahi', '2019-03-31 02:33:10'),
(8, 2, 'tuesday', 'nazmul', '2019-03-31 02:33:50'),
(9, 0, 'xiaminote7 kemon?', 'shipa', '2019-03-31 09:31:41'),
(10, 2, 'valo', 'farshid', '2019-03-31 09:32:51');

-- --------------------------------------------------------

--
-- Table structure for table `university`
--

CREATE TABLE `university` (
  `ID` int(10) NOT NULL,
  `subject` text NOT NULL,
  `university` text NOT NULL,
  `url` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `university`
--

INSERT INTO `university` (`ID`, `subject`, `university`, `url`) VALUES
(10, 'CSE', 'Brac University', 'https://www.bracu.ac.bd/academics/departments'),
(11, 'EEE', 'Brac University', 'https://www.bracu.ac.bd/academics/departments/electrical-and-electronic-engineering'),
(12, 'BBS', 'Brac University', 'https://www.bracu.ac.bd/academics/institutes-and-schools/brac-business-school'),
(13, 'CSE', 'North South University', 'http://ece.northsouth.edu/'),
(14, 'EEE', 'North South University', 'http://ece.northsouth.edu/'),
(15, 'BBA', 'North South University', 'http://www.northsouth.edu/academic/sbe/'),
(16, 'CSE', 'AIUB', 'https://engg.aiub.edu/bsc-in-coe'),
(17, 'EEE', 'AIUB', 'https://engg.aiub.edu/bsc-in-eee'),
(18, 'BBA', 'AIUB', 'http://www.aiub.edu/academics/courses-tuition-fees/bba/');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_comment`
--
ALTER TABLE `tbl_comment`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `university`
--
ALTER TABLE `university`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_comment`
--
ALTER TABLE `tbl_comment`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `university`
--
ALTER TABLE `university`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
