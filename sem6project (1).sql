-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2018 at 03:42 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sem6project`
--

-- --------------------------------------------------------

--
-- Table structure for table `alumni`
--

CREATE TABLE `alumni` (
  `pid` int(10) NOT NULL,
  `bid` int(10) DEFAULT NULL,
  `city` varchar(20) NOT NULL DEFAULT 'Mumbai',
  `grad_yr` int(11) NOT NULL,
  `avg_grade` float NOT NULL,
  `kt_number` int(11) NOT NULL,
  `live_kt` int(11) NOT NULL,
  `extra_curr` int(11) NOT NULL,
  `co_curr` int(11) NOT NULL,
  `placed` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alumni`
--

INSERT INTO `alumni` (`pid`, `bid`, `city`, `grad_yr`, `avg_grade`, `kt_number`, `live_kt`, `extra_curr`, `co_curr`, `placed`) VALUES
(131032, 2, 'Mumbai', 2017, 8, 0, 0, 1, 2, 1),
(132000, 1, 'Mumbai', 2017, 7, 0, 0, 1, 2, 1),
(132001, 1, 'Mumbai', 2017, 8, 0, 1, 1, 2, 1),
(132002, 1, 'Mumbai', 2017, 6, 0, 0, 2, 3, 0),
(132003, 1, 'Mumbai', 2017, 8, 0, 3, 1, 2, 1),
(132004, 1, 'Mumbai', 2017, 9, 0, 0, 0, 3, 1),
(132005, 1, 'Mumbai', 2017, 10, 0, 1, 0, 2, 0),
(132006, 1, 'Mumbai', 2017, 10, 0, 0, 1, 2, 1),
(132007, 1, 'Mumbai', 2017, 7, 0, 2, 3, 2, 0),
(132008, 1, 'Mumbai', 2017, 6, 1, 1, 1, 3, 0),
(132009, 1, 'Mumbai', 2017, 7, 0, 0, 1, 2, 1),
(132010, 1, 'Mumbai', 2017, 7, 1, 0, 2, 1, 0),
(132011, 1, 'Mumbai', 2017, 8, 0, 0, 2, 2, 1),
(132012, 1, 'Mumbai', 2017, 7, 1, 0, 1, 0, 0),
(132013, 1, 'Mumbai', 2017, 7, 0, 3, 3, 2, 1),
(132014, 1, 'Mumbai', 2017, 7, 0, 0, 1, 2, 1),
(133000, 2, 'Mumbai', 2017, 7, 0, 0, 1, 2, 1),
(133001, 2, 'Mumbai', 2017, 8, 0, 1, 1, 2, 1),
(133002, 2, 'Mumbai', 2017, 6, 0, 0, 2, 3, 0),
(133003, 2, 'Mumbai', 2017, 8, 0, 3, 1, 2, 1),
(133004, 2, 'Mumbai', 2017, 9, 0, 0, 0, 3, 1),
(133005, 2, 'Mumbai', 2017, 10, 0, 1, 0, 2, 0),
(133006, 2, 'Mumbai', 2017, 10, 0, 0, 1, 2, 1),
(133007, 2, 'Mumbai', 2017, 7, 0, 2, 3, 2, 0),
(133008, 2, 'Mumbai', 2017, 6, 1, 1, 1, 3, 0),
(133009, 2, 'Mumbai', 2017, 7, 0, 0, 1, 2, 1),
(133010, 2, 'Mumbai', 2017, 7, 1, 0, 2, 1, 0),
(133011, 2, 'Mumbai', 2017, 8, 0, 0, 2, 2, 1),
(133012, 2, 'Mumbai', 2017, 7, 1, 0, 1, 0, 0),
(133013, 2, 'Mumbai', 2017, 7, 0, 3, 3, 2, 1),
(133014, 2, 'Mumbai', 2017, 7, 0, 0, 1, 2, 1),
(134000, 3, 'Mumbai', 2017, 7, 0, 0, 1, 2, 1),
(134001, 3, 'Mumbai', 2017, 8, 0, 1, 1, 2, 1),
(134002, 3, 'Mumbai', 2017, 6, 0, 0, 2, 3, 0),
(134003, 3, 'Mumbai', 2017, 8, 2, 0, 1, 2, 1),
(134004, 3, 'Mumbai', 2017, 9, 0, 0, 0, 3, 1),
(134005, 3, 'Mumbai', 2017, 10, 0, 1, 0, 2, 0),
(134006, 3, 'Mumbai', 2017, 10, 0, 0, 1, 2, 1),
(134007, 3, 'Mumbai', 2017, 7, 4, 2, 3, 2, 0),
(134008, 3, 'Mumbai', 2017, 6, 1, 1, 1, 3, 0),
(134009, 3, 'Mumbai', 2017, 7, 0, 0, 1, 2, 1),
(134010, 3, 'Mumbai', 2017, 7, 1, 0, 2, 1, 0),
(134011, 3, 'Mumbai', 2017, 8, 0, 0, 2, 2, 1),
(134012, 3, 'Mumbai', 2017, 7, 1, 0, 1, 0, 0),
(134013, 3, 'Mumbai', 2017, 7, 1, 0, 3, 2, 1),
(134014, 3, 'Mumbai', 2017, 7, 0, 0, 1, 2, 1),
(142004, 1, 'Mumbai', 2018, 8, 0, 0, 1, 2, 0),
(142014, 1, 'Mumbai', 2018, 5.5, 0, 0, 1, 2, 1),
(142015, 1, 'Mumbai', 2018, 7, 0, 0, 1, 2, 1),
(142016, 1, 'Mumbai', 2018, 7, 0, 0, 1, 2, 1),
(142017, 1, 'Mumbai', 2018, 6, 0, 0, 1, 2, 1),
(142018, 1, 'Mumbai', 2018, 8, 0, 2, 1, 2, 0),
(142019, 1, 'Mumbai', 2018, 9, 0, 0, 1, 2, 1),
(142020, 1, 'Mumbai', 2018, 8, 0, 0, 1, 2, 1),
(142044, 1, 'Mumbai', 2018, 8, 0, 0, 1, 2, 1),
(143001, 2, 'Mumbai', 2018, 7, 0, 0, 1, 2, 1),
(143002, 2, 'Mumbai', 2018, 7, 0, 0, 0, 1, 1),
(143003, 2, 'Mumbai', 2018, 7, 0, 0, 3, 2, 1),
(143004, 2, 'Mumbai', 2018, 6, 0, 0, 1, 2, 1),
(143005, 2, 'Mumbai', 2018, 8, 0, 2, 2, 2, 0),
(143006, 2, 'Mumbai', 2018, 9, 0, 0, 3, 2, 1),
(143007, 2, 'Mumbai', 2018, 8, 0, 0, 1, 3, 1),
(143008, 2, 'Mumbai', 2018, 8, 0, 0, 1, 2, 0),
(143009, 2, 'Mumbai', 2018, 8, 0, 0, 1, 0, 1),
(144001, 3, 'Mumbai', 2018, 7, 0, 0, 1, 2, 1),
(144002, 3, 'Mumbai', 2018, 7, 0, 0, 3, 3, 0),
(144003, 3, 'Mumbai', 2018, 7, 0, 0, 1, 2, 1),
(144004, 3, 'Mumbai', 2018, 6, 0, 0, 3, 2, 1),
(144005, 3, 'Mumbai', 2018, 8, 0, 2, 1, 2, 0),
(144006, 3, 'Mumbai', 2018, 9, 0, 0, 1, 3, 1),
(144007, 3, 'Mumbai', 2018, 8, 0, 0, 2, 2, 1),
(144008, 3, 'Mumbai', 2018, 8, 0, 0, 1, 2, 0),
(144009, 3, 'Mumbai', 2018, 8, 0, 0, 1, 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE `branch` (
  `bid` int(10) NOT NULL,
  `bname` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`bid`, `bname`) VALUES
(1, 'Computer'),
(2, 'Information Technology'),
(3, 'Electronics');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `cid` int(10) NOT NULL,
  `cname` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`cid`, `cname`, `city`) VALUES
(100, 'Infosys', 'Mumbai'),
(101, 'TCS', 'Mumbai'),
(102, 'LnT', 'Mumbai'),
(103, 'Directi', 'Bangalore'),
(104, 'WebDevs', 'Pune'),
(105, 'Microsoft', 'Mumbai'),
(106, 'Google', 'California'),
(107, 'Ubisoft', 'Bangalore'),
(108, 'Dunder Mifflin', 'Scranton'),
(109, 'ConCat', 'Mumbai');

-- --------------------------------------------------------

--
-- Table structure for table `placements`
--

CREATE TABLE `placements` (
  `pid` int(10) NOT NULL,
  `cid` int(10) NOT NULL,
  `post` varchar(20) NOT NULL,
  `salary` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `placements`
--

INSERT INTO `placements` (`pid`, `cid`, `post`, `salary`) VALUES
(131032, 100, 'tester', 30000),
(132000, 100, 'network manager', 45000),
(132001, 105, 'security', 30000),
(132003, 104, 'security', 19000),
(132004, 103, 'Database Analysts', 30000),
(132006, 105, 'Applications Develop', 30000),
(132009, 107, 'network manager', 32000),
(132011, 106, 'Database Analysts', 37000),
(132013, 102, 'web developer', 37000),
(132014, 101, 'web developer', 25000),
(133000, 100, 'network manager', 45000),
(133001, 105, 'security', 30000),
(133003, 104, 'security', 19000),
(133004, 103, 'Database Analysts', 30000),
(133006, 105, 'Applications Develop', 30000),
(133009, 107, 'network manager', 32000),
(133011, 106, 'Database Analysts', 37000),
(133013, 102, 'web developer', 37000),
(133014, 101, 'web developer', 25000),
(134000, 100, 'network manager', 45000),
(134001, 105, 'security', 30000),
(134003, 104, 'security', 19000),
(134004, 103, 'Database Analysts', 30000),
(134006, 105, 'Applications Develop', 30000),
(134009, 107, 'network manager', 32000),
(134011, 106, 'Database Analysts', 37000),
(134013, 102, 'web developer', 37000),
(134014, 101, 'web developer', 25000),
(142014, 102, 'Applications Develop', 20000),
(142015, 100, 'Database Analysts', 40000),
(142016, 100, 'web developer', 20000),
(142017, 109, 'web developer', 23000),
(142019, 108, 'data scientist', 45000),
(142020, 107, 'game developer', 43000),
(142044, 106, 'web developer', 30000),
(143001, 102, 'Applications Develop', 20000),
(143002, 100, 'Database Analysts', 40000),
(143003, 100, 'web developer', 20000),
(143004, 109, 'web developer', 23000),
(143006, 108, 'data scientist', 45000),
(143007, 107, 'game developer', 43000),
(143009, 106, 'web developer', 30000),
(144001, 102, 'Applications Develop', 20000),
(144003, 100, 'web developer', 20000),
(144004, 109, 'web developer', 23000),
(144006, 108, 'data scientist', 45000),
(144007, 107, 'game developer', 43000);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `pid` int(10) NOT NULL,
  `bid` int(10) DEFAULT NULL,
  `grad_yr` int(11) DEFAULT NULL,
  `avg_grade` float DEFAULT NULL,
  `kt_number` int(11) DEFAULT NULL,
  `live_kt` int(11) DEFAULT NULL,
  `extra_curr` int(11) DEFAULT NULL,
  `co_curr` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`pid`, `bid`, `grad_yr`, `avg_grade`, `kt_number`, `live_kt`, `extra_curr`, `co_curr`) VALUES
(152001, 1, 2019, 6.5, 0, 0, 3, 3),
(152002, 1, 2019, 7.5, 0, 0, 2, 2),
(152003, 1, 2019, 5.5, 0, 0, 1, 2),
(152004, 1, 2019, 8.5, 0, 0, 3, 3),
(152005, 1, 2019, 3.5, 1, 3, 0, 1),
(152006, 1, 2019, 4.5, 0, 0, 2, 3),
(152007, 1, 2019, 7.5, 0, 0, 3, 1),
(152008, 1, 2019, 8.5, 0, 0, 1, 2),
(152009, 1, 2019, 9.2, 0, 0, 1, 3),
(152010, 1, 2019, 6.8, 0, 0, 2, 1),
(152011, 1, 2019, 7.7, 0, 0, 2, 3),
(152012, 1, 2019, 7.3, 0, 3, 3, 1),
(152013, 1, 2019, 7.22, 0, 0, 1, 3),
(152014, 1, 2019, 6.34, 0, 0, 2, 2),
(152015, 1, 2019, 5.1, 0, 0, 0, 3),
(153023, 2, 2019, 7.1, 0, 1, 2, 3),
(153024, 2, 2019, 7.7, 0, 0, 1, 1),
(153025, 2, 2019, 6.8, 0, 2, 0, 2),
(153026, 2, 2019, 8.5, 0, 0, 3, 3),
(154001, 3, 2019, 8.5, 0, 0, 2, 3),
(154002, 3, 2019, 6.5, 0, 0, 2, 3),
(154003, 3, 2019, 5.7, 1, 3, 3, 2),
(154004, 3, 2019, 7.25, 1, 1, 2, 3),
(154005, 3, 2019, 7.62, 0, 0, 1, 3),
(154006, 3, 2019, 8.35, 0, 0, 2, 3),
(154007, 3, 2019, 9.7, 0, 2, 0, 3),
(154008, 3, 2019, 8.02, 0, 0, 2, 2),
(154009, 3, 2019, 7.12, 0, 0, 1, 0),
(154010, 3, 2019, 6.63, 0, 0, 2, 3),
(154011, 3, 2019, 7.65, 0, 0, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `pid` int(10) NOT NULL,
  `name` varchar(25) NOT NULL,
  `password` varchar(15) NOT NULL DEFAULT '123'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`pid`, `name`, `password`) VALUES
(152001, 'Jetso Analin', '123'),
(152002, 'Oshin Arahna', '123'),
(152003, 'Millind', '123'),
(152004, 'Gavin Dsouza', '123'),
(152005, 'Marica Dsouza', '123'),
(152006, 'Shweta Dsa', '123'),
(152007, 'Ankita Fernandes', '123'),
(152008, 'Praveen Fernandes', '123'),
(152009, 'Renita Fernandes', '123'),
(152010, 'Odion Ferrao', '123'),
(152011, 'Saniya Fernandes', '123'),
(152012, 'Kishan ', '123'),
(152013, 'Swapnil Hoskatti', '123'),
(152014, 'Jessica Dsouza', '123'),
(152015, 'Priyam Thakkar', '123'),
(152016, 'Vanisha', '123'),
(152017, 'Dhruvil', '123'),
(152018, 'Sanford Mascarenhas', '123'),
(152019, 'Ashley Mascarenhas', '123'),
(152020, 'Glen Vegas', '123'),
(152021, 'Parth', '123'),
(152022, 'Naomi Perrira', '123'),
(153023, 'Ryan Ferrao', '123'),
(153024, 'Kingslee', '123'),
(153025, 'Vennito', '123'),
(153026, 'Kimberly', '123'),
(154001, 'Karthik', '123'),
(154002, 'Glen', '123'),
(154003, 'Jack', '123'),
(154004, 'Jill', '123'),
(154005, 'Bill', '123'),
(154006, 'Random', '123'),
(154007, 'Polly', '123'),
(154008, 'Molly', '123'),
(154009, 'Katniss', '123'),
(154010, 'Mack', '123'),
(154011, 'Mick', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alumni`
--
ALTER TABLE `alumni`
  ADD PRIMARY KEY (`pid`),
  ADD KEY `bid` (`bid`);

--
-- Indexes for table `branch`
--
ALTER TABLE `branch`
  ADD PRIMARY KEY (`bid`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `placements`
--
ALTER TABLE `placements`
  ADD PRIMARY KEY (`pid`,`cid`),
  ADD KEY `cid` (`cid`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`pid`),
  ADD KEY `bid` (`bid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`pid`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `alumni`
--
ALTER TABLE `alumni`
  ADD CONSTRAINT `alumni_ibfk_1` FOREIGN KEY (`bid`) REFERENCES `branch` (`bid`);

--
-- Constraints for table `placements`
--
ALTER TABLE `placements`
  ADD CONSTRAINT `placements_ibfk_1` FOREIGN KEY (`cid`) REFERENCES `company` (`cid`),
  ADD CONSTRAINT `placements_ibfk_2` FOREIGN KEY (`pid`) REFERENCES `alumni` (`pid`);

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `student_ibfk_1` FOREIGN KEY (`bid`) REFERENCES `branch` (`bid`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
