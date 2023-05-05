-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2023 at 08:40 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `studybuddy`
--

-- --------------------------------------------------------

--
-- Table structure for table `announcement`
--

CREATE TABLE `announcement` (
  `Ann_no` int(11) NOT NULL,
  `Semester` int(11) NOT NULL,
  `Ann_doer` varchar(30) NOT NULL,
  `Post` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `announcement`
--

INSERT INTO `announcement` (`Ann_no`, `Semester`, `Ann_doer`, `Post`) VALUES
(1, 4, 'Venkatesh', 'DBMS Quiz tomorrow'),
(4, 9, 'Venkatesh', 'Suspend all academic activities from 16.04.23'),
(5, 4, 'Venkatesh', 'announcement 1'),
(6, 4, 'Venkatesh', 'annoucement 2'),
(7, 4, 'Venkatesh', 'dafadsd'),
(8, 4, 'Venkatesh', 'sdaasdasd'),
(9, 4, 'Venkatesh', 'asdasdad');

-- --------------------------------------------------------

--
-- Table structure for table `doubt`
--

CREATE TABLE `doubt` (
  `D_Id` int(11) NOT NULL,
  `Poster_id` varchar(10) NOT NULL,
  `Subject` varchar(5) NOT NULL,
  `Semester` int(11) NOT NULL,
  `Doubt` varchar(100) NOT NULL,
  `D_Name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `doubt`
--

INSERT INTO `doubt` (`D_Id`, `Poster_id`, `Subject`, `Semester`, `Doubt`, `D_Name`) VALUES
(1, 'IIT2021168', 'DBMS', 4, 'What is 3NF?', '3NF'),
(2, 'IIT2021168', 'SE', 4, 'Why is software engineering necessary?', 'SE Question 1');

-- --------------------------------------------------------

--
-- Table structure for table `mentor`
--

CREATE TABLE `mentor` (
  `Id` varchar(8) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Type` varchar(1) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `Email` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mentor`
--

INSERT INTO `mentor` (`Id`, `Name`, `Type`, `Password`, `Email`) VALUES
('ADMIN001', 'Abdullah', 'A', 'ADMIN001', ''),
('PROIT001', 'Venkatesh', 'P', 'PROIT001', ''),
('PROIT002', 'Aman Kumar', 'T', 'aman', 'iit2021170@iiita.ac.in');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `msg_id` int(11) NOT NULL,
  `incoming_msg_id` varchar(10) NOT NULL,
  `outgoing_msg_id` varchar(10) NOT NULL,
  `msg` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`msg_id`, `incoming_msg_id`, `outgoing_msg_id`, `msg`) VALUES
(1, 'IIT2021168', 'IIT2021168', 'hello'),
(2, 'IIT2021170', 'IIT2021168', 'hi'),
(3, 'IIT2021168', 'IIT2021170', 'kaise ho'),
(4, 'IIT2021170', 'IIT2021168', 'mast ekdum'),
(5, 'IIT2021168', 'IIT2021170', 'aur btao'),
(6, 'IIT2021170', 'IIT2021168', 'kya..'),
(7, 'IIT2021168', 'IIT2021170', 'kal raat ko kya kiya 😘😘'),
(8, 'IIT2021170', 'IIT2021168', 'bohot kuch 😉'),
(9, 'IIT2021170', 'IIT2021168', 'aaa'),
(10, 'IIT2021170', 'IIT2021168', 'sun zara mere paas aa'),
(11, 'IIT2021168', 'IIT2021170', 'ab baithe hai hum bhi yaha'),
(12, 'IIT2021170', 'IIT2021168', 'dik ke darmiyaan'),
(13, 'IIT2021168', 'IIT2021170', 'baarishein hai baarishein'),
(14, 'IIT2021170', 'IIT2021168', 'teri hi baaton pe maine'),
(15, 'IIT2021170', 'IIT2021168', 'sajali hai duniya yaha'),
(16, 'IIT2021168', 'IIT2021170', 'dil ke darmiyan .'),
(17, 'IIT2021168', 'IIT2021170', 'baarishein hai baarishein'),
(18, 'IIT2021170', 'IIT2021168', 'madarchod'),
(19, 'IIT2021172', 'IIT2021168', 'hum nhi jaante'),
(20, 'ADMIN001', 'IIT2021168', 'bol bhai kaisa hai'),
(21, 'PROIT001', 'IIT2021168', 'are venky bhai'),
(22, 'PROIT002', 'IIT2021168', 'tu kaise mentor ban gya be'),
(23, 'ADMIN001', 'IIT2021168', 'are bta na bhai'),
(24, 'ADMIN001', 'IIT2021168', 'mast hai ki nhi'),
(25, 'ADMIN001', 'IIT2021168', 'aaaj kal tera dhanda pani kaisa chal rha hai suna hai iss saal ekdum 100 baccho ki back lagai hai ... kya ye sach hai.... baccho ke maa baap gaali de rhe h '),
(26, 'IIT2021168', 'PROIT001', 'bol bhai'),
(27, 'IIT2021170', 'PROIT001', 'you are expelled'),
(28, 'PROIT001', 'IIT2021168', 'are bas sutta phookna thaa'),
(29, 'PROIT001', 'IIT2021168', 'chalega??'),
(30, 'IIT2021170', 'IIT2021168', 'hhhhhh'),
(31, 'ADMIN001', 'IIT2021168', 'dfdfdf'),
(32, 'IIT2021170', 'IIT2021168', 'hello mc');

-- --------------------------------------------------------

--
-- Table structure for table `solution`
--

CREATE TABLE `solution` (
  `Q_Id` varchar(10) NOT NULL,
  `Ans_no` int(11) NOT NULL,
  `Q_no` int(11) NOT NULL,
  `Answerer_id` varchar(10) NOT NULL,
  `Answerer` varchar(30) NOT NULL,
  `Answer` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `solution`
--

INSERT INTO `solution` (`Q_Id`, `Ans_no`, `Q_no`, `Answerer_id`, `Answerer`, `Answer`) VALUES
('1_1', 1, 1, 'IIT2021168', 'Kaushik', 'Please answer @sir'),
('1_2', 2, 1, 'IIT2021168', 'Kaushik', '3nf is another form of decomposition'),
('1_3', 3, 1, '', '', '3nf is something'),
('2_1', 1, 2, '', '', 'hello world'),
('2_2', 2, 2, 'IIT2021168', 'Kaushik Mullick', 'ha ye krlo pahle'),
('2_3', 3, 2, 'IIT2021168', 'Kaushik Mullick', 'zxczxcz');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `Rollno` varchar(10) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Semester` int(11) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `Email` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`Rollno`, `Name`, `Semester`, `Password`, `Email`) VALUES
('IIT2021168', 'Kaushik Mullick', 4, 'IIT2021168', 'iit2021168@iiita.ac.in'),
('IIT2021170', 'Viraj Jagtap', 4, 'viraj', 'IIT2021170@iiita.ac.in'),
('IIT2021172', 'Shruti', 3, 'IIT2021172', 'iit2021172@iiita.ac.in');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `announcement`
--
ALTER TABLE `announcement`
  ADD PRIMARY KEY (`Ann_no`);

--
-- Indexes for table `doubt`
--
ALTER TABLE `doubt`
  ADD PRIMARY KEY (`D_Id`);

--
-- Indexes for table `mentor`
--
ALTER TABLE `mentor`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`msg_id`);

--
-- Indexes for table `solution`
--
ALTER TABLE `solution`
  ADD PRIMARY KEY (`Q_Id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`Rollno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `announcement`
--
ALTER TABLE `announcement`
  MODIFY `Ann_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
