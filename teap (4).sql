-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 05, 2023 at 03:45 AM
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
-- Database: `teap`
--

-- --------------------------------------------------------

--
-- Table structure for table `citizen`
--

CREATE TABLE `citizen` (
  `id` int(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phonenumber` varchar(255) NOT NULL,
  `date_of_birth` varchar(255) NOT NULL,
  `place_of_birth` varchar(255) NOT NULL,
  `cilstatus` varchar(255) NOT NULL,
  `religion` varchar(255) NOT NULL,
  `sex` varchar(255) NOT NULL,
  `citizenship` varchar(255) NOT NULL,
  `spouse` varchar(255) NOT NULL,
  `spouseoccup` varchar(255) NOT NULL,
  `noc1` varchar(255) NOT NULL,
  `noc2` varchar(255) NOT NULL,
  `noc3` varchar(255) NOT NULL,
  `fathersname` varchar(255) NOT NULL,
  `fatheroccup` varchar(255) NOT NULL,
  `mothersname` varchar(255) NOT NULL,
  `mothersoccup` varchar(255) NOT NULL,
  `guardian` varchar(255) NOT NULL,
  `guardnum` varchar(255) NOT NULL,
  `elementary` varchar(255) NOT NULL,
  `elementaryyg` varchar(255) NOT NULL,
  `highschool` varchar(255) NOT NULL,
  `highschoolyg` varchar(255) NOT NULL,
  `college` varchar(255) NOT NULL,
  `collegeyg` varchar(255) NOT NULL,
  `degree_received` varchar(255) NOT NULL,
  `specialskills` varchar(255) NOT NULL,
  `workstatus` varchar(255) NOT NULL,
  `workspecify` varchar(255) NOT NULL,
  `validid` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `citizen`
--

INSERT INTO `citizen` (`id`, `image`, `name`, `email`, `address`, `phonenumber`, `date_of_birth`, `place_of_birth`, `cilstatus`, `religion`, `sex`, `citizenship`, `spouse`, `spouseoccup`, `noc1`, `noc2`, `noc3`, `fathersname`, `fatheroccup`, `mothersname`, `mothersoccup`, `guardian`, `guardnum`, `elementary`, `elementaryyg`, `highschool`, `highschoolyg`, `college`, `collegeyg`, `degree_received`, `specialskills`, `workstatus`, `workspecify`, `validid`, `password`) VALUES
(16, 'Francine Diaz.jpg', 'Francine Diaz', 'chin@gmail.com', 'Cavite, Philippines', '097228821', '2004-01-27', 'Cavite, Philippines', 'Single', 'Catholic', '', 'Filipino', 'spouse', 'N/A', 'N/A', 'N/A', 'N/A', 'Jesus Michael Diaz', 'OFW', 'Merdick Saenz-Diaz', 'house wife', 'Merdick Saenz-Diaz', '09773333224', 'St. Matthew Academy of Cavite', '2010', 'Southville International School Affiliated with Foreign Universities (SISFU)', '2024', 'N/A', 'N/A', 'N/A', 'Acting', 'Employed', 'Actress', 'chin@gmail.com', 'chin123K'),
(17, 'IMG_8923.JPG', 'denmark becite', 'denmark@gmail.com', 'calumpang', '09401399131', '0001-05-24', 'western visayas', 'Single', 'Catholic', '', 'Filipino', 'spouse', 'None', 'None', 'None', 'None', 'jose', 'deceased', 'cherryl ', 'gabaligya', 'Mercy Junsan', '091687336698', 'rizal', '2010', 'UI', '2012', 'PHINMA- University Of Iloilo', 'continuing', 'none', 'IT fields', 'Unemployed', 'none', 'denmark@gmail.com', 'capstonesmamamoK13'),
(19, 'Picsart_23-02-06_22-22-38-296.jpg', 'krislyn Mae', 'krislynsinoy@gmail.com', 'Buntatala Jaro Iloilo City', '09168733698', '2001-08-14', 'Dumarao Capiz', 'Single', 'Catholic', '', 'Filipino', 'spouse', 'N/A', 'N/A', 'N/A', 'N/A', 'Jimmy Sinoy', 'Farming', 'Amna Sinoy', 'house wife', 'Mercy Junsan', '091687336698', 'Lawaan Elentary School', '2012', 'Bungsuan National High School', '2020', 'PHINMA- University Of Iloilo', 'continuing', 'N/A', 'IT fields', 'Employed', 'n/a', 'krislynm@yahoo.com', 'krislyn123K'),
(20, 'IMG_7282.JPG', 'maeGail', 'abemae@gmail.com', 'Bolilao', '0948477483', '2020-07-01', 'Bolilao', 'Single', 'Catholic', '', 'Filipino', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'PHINMA- University of Iloilo', '2012', 'PHINMA- University of Iloilo', '2020', 'PHINMA- University Of Iloilo', 'continuing', 'N/A', 'IT fields', 'Employed', '', 'maeby@gmail.com', 'maeGail123K'),
(21, 'IMG_9105.JPG', 'June Michael Columbres', 'junemichaelcolumbres@gmail.com', 'Brgy. Maraguit, Cabatuan, Iloilo', '09369944594', '2000-01-22', 'Marikina City', 'Single', 'Roman Catholic', '', 'Filipino', '', '', '', '', '', 'June Dela Rosa', 'Carpenter', 'Maylen B. Columbres', 'house wife', 'Maria Myrna V. Colombres', '09217940841', 'Maraguit Elementary School', '2012', 'Cabatuan National Comprehensive High School', '2016', 'PHINMA- University Of Iloilo', '2024', 'none', 'IT fields', 'Unemployed', '', 'junemichaelcolumbres@yahoo.com', '32uj9qqG_'),
(22, 'IMG_9106.JPG', 'Angelika Cabisado', 'angelikacabisado@gmail.com', 'Barosong, Tigbauan, Iloilo', '09103921226', '2002-02-12', 'Lying-in, Lower Bicutan, Taguig City', 'Single', 'Roman Catholic', '', 'Filipino', '', '', '', '', '', 'Amado Cabisado Jr.', 'Modern Bus Driver', 'Jenelyn Patosa', 'Domestic Helper', 'Amado Cabisado Jr.', '09103921226', 'Olo-Barroc Elementary School', '2014', 'Cordova National High School', '2019', 'PHINMA- University Of Iloilo', 'continuing', '', '', 'Unemployed', '', 'angelikacabisado@gmail.com', 'SUJUMOMIJOOYEON96');

-- --------------------------------------------------------

--
-- Table structure for table `complain_report`
--

CREATE TABLE `complain_report` (
  `id` int(11) NOT NULL,
  `complain_title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `complain_report`
--

INSERT INTO `complain_report` (`id`, `complain_title`) VALUES
(2, 'noise'),
(3, 'Alarm Scandal'),
(5, 'Child abuse'),
(6, 'Pollution'),
(7, 'bullying'),
(8, 'drug use'),
(9, 'pet waste'),
(10, 'litter on the streets'),
(11, 'Gang Riot'),
(12, 'Spousal Violence');

-- --------------------------------------------------------

--
-- Table structure for table `officials`
--

CREATE TABLE `officials` (
  `id` int(11) NOT NULL,
  `fn` varchar(255) NOT NULL,
  `ln` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `cn` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `officials`
--

INSERT INTO `officials` (`id`, `fn`, `ln`, `email`, `cn`, `address`, `position`, `password`) VALUES
(1, 'Krissy', 'Sinoy', 'krissy@gmail.com', '09168733698', 'Bolilao', 'Kapitan', 'admin123K');

-- --------------------------------------------------------

--
-- Table structure for table `resident_complain`
--

CREATE TABLE `resident_complain` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `complain_title` varchar(255) NOT NULL,
  `complain_report` varchar(255) NOT NULL,
  `Date` varchar(255) NOT NULL,
  `Time` varchar(255) NOT NULL,
  `Year` varchar(255) NOT NULL,
  `Status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `resident_complain`
--

INSERT INTO `resident_complain` (`id`, `name`, `complain_title`, `complain_report`, `Date`, `Time`, `Year`, `Status`) VALUES
(26, 'krislynm@yahoo.com', 'drug use', 'selling of drugs', '2023-02-28', '01:57:04', '2023', 'Pending'),
(27, 'krislynm@yahoo.com', 'noise', 'I cant sleep at night', '2023-02-28', '01:57:42', '2023', 'Acknowledged'),
(28, 'krislynm@yahoo.com', 'Alarm Scandal', 'aihbgHgv\r\n', '2023-02-28', '04:14:36', '2023', 'Pending'),
(29, 'chin@gmail.com', 'Child abuse', 'I was abuse by my own parents', '2023-03-01', '11:01:08', '2023', 'Pending'),
(30, 'chin@gmail.com', 'Gang Riot', 'alarming', '2023-03-01', '11:01:42', '2023', 'Pending'),
(31, 'junemichaelcolumbres@gmail.com', 'Pollution', 'noise pollution', '2023-03-01', '02:44:22', '2023', 'Acknowledged'),
(32, 'junemichaelcolumbres@gmail.com', 'drug use', 'My neighbor using drugs ', '2023-03-01', '02:51:35', '2023', 'Pending'),
(33, 'maeby@gmail.com', 'Spousal Violence', 'I was a victim of spousal violence', '2023-03-01', '06:39:16', '2023', 'Pending'),
(34, 'maeby@gmail.com', 'litter on the streets', 'It is disturbing and disgusting ', '2023-03-02', '12:11:55', '2023', 'Pending');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `citizen`
--
ALTER TABLE `citizen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `complain_report`
--
ALTER TABLE `complain_report`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `officials`
--
ALTER TABLE `officials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resident_complain`
--
ALTER TABLE `resident_complain`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `citizen`
--
ALTER TABLE `citizen`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `complain_report`
--
ALTER TABLE `complain_report`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `officials`
--
ALTER TABLE `officials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `resident_complain`
--
ALTER TABLE `resident_complain`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
