-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 30, 2015 at 01:41 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE IF NOT EXISTS `employee` (
`id` int(11) NOT NULL COMMENT 'primary key',
  `employee_name` varchar(255) NOT NULL COMMENT 'employee name',
    `employee_email` varchar(255) NOT NULL COMMENT 'employee email',
  `employee_salary` double NOT NULL COMMENT 'employee salary',
  `employee_age` int(11) NOT NULL COMMENT 'employee age'
) ENGINE=InnoDB AUTO_INCREMENT=58 DEFAULT CHARSET=latin1 COMMENT='datatable demo table';

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`,`employee_name`,`employee_email`, `employee_salary`,`employee_age`) VALUES
(1, 'Tiger Nixon','Tiger@gmail.com', 320800, 61),
(2, 'Garrett Winters','Garrett@gmail.com', 170750, 63),
(3, 'Ashton Cox','Ashton@gmail.com',86000, 66),
(4, 'Cedric Kelly','Cedric@gmail.com',433060, 22),
(5, 'Airi Satou','Airi@gmail.com',162700, 33),
(6, 'Brielle Williamson','Brielle@gmail.com', 372000, 61),
(7, 'Herrod Chandler','Herrod@gmail.com', 137500, 59),
(8, 'Rhona Davidson','Rhona@gmail.com', 327900, 55),
(9, 'Colleen Hurst','Colleen@gmail.com', 205500, 39),
(10, 'Sonya Frost','Sonya@gmail.com', 103600, 23),

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'primary key',AUTO_INCREMENT=58;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
