-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2023 at 10:14 AM
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
(12, 'Spousal Violence'),
(14, 'Illegal Parking'),
(15, 'Violation of Curfew'),
(16, 'Gambling'),
(17, 'Illegal Street Parking'),
(18, 'Electric issues'),
(19, 'Vandalism');

-- --------------------------------------------------------

--
-- Table structure for table `emergency`
--

CREATE TABLE `emergency` (
  `id` int(255) NOT NULL,
  `resident_name` varchar(255) NOT NULL,
  `agency` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `mylat` varchar(255) NOT NULL,
  `mylong` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `emergency`
--

INSERT INTO `emergency` (`id`, `resident_name`, `agency`, `message`, `mylat`, `mylong`, `date`, `time`) VALUES
(75, 'Denmark Becite', 'BFP', 'Hi, Ako po si Denmark Becite humihingi ng tulong dahil merong Sunog malapit sa aming area, ito po ang exact location Latitude: 10.6918787 Longitude: 122.5699911', '10.6918787', '122.5699911', '2023-03-29', '07:15:47'),
(76, 'Denmark Becite', 'BFP', 'Hi, Ako po si Denmark Becite humihingi ng tulong dahil merong Sunog malapit sa aming area, ito po ang exact location Latitude: 10.6961516 Longitude: 122.5711991', '10.6961516', '122.5711991', '2023-03-29', '08:41:02'),
(77, 'Denmark Becite', 'BFP', 'Hi, Ako po si Denmark Becite humihingi ng tulong dahil merong Sunog malapit sa aming area, ito po ang exact location Latitude: 10.6961516 Longitude: 122.5711991', '10.6961516', '122.5711991', '2023-03-29', '08:41:03'),
(78, 'Denmark Becite', 'BFP', 'Hi, Ako po si Denmark Becite humihingi ng tulong dahil merong Sunog malapit sa aming area, ito po ang exact location Latitude: 10.6919836 Longitude: 122.5699581', '10.6919836', '122.5699581', '2023-03-29', '08:43:08'),
(82, 'Denmark Becite', 'ICER', 'Hi, Ako po si Denmark Becite humihingi kami ng tulong sa rescue team dahil sa naganap na lindol malapit sa aming area, ito po ang exact location Latitude: 10.768105 Longitude: 122.5858057', '10.768105', '122.5858057', '2023-03-29', '09:59:52');

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
(1, 'admin', 'Sinoy', 'krissy@gmail.com', '09168733698', 'Bolilao', 'Kapitan', 'admin123K');

-- --------------------------------------------------------

--
-- Table structure for table `residents`
--

CREATE TABLE `residents` (
  `id` int(255) NOT NULL,
  `fn` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `birthdate` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `cn` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `valid_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `residents`
--

INSERT INTO `residents` (`id`, `fn`, `email`, `gender`, `birthdate`, `address`, `cn`, `password`, `valid_id`) VALUES
(2, 'Abby', 'abby@gmail.com', 'Female', '', 'Bolilao', '+639518537818', 'Password123', 'ABBY.jpg'),
(3, 'Krislyn Mae Sinoy', 'krislynsinoy@gmail.com', 'Female', '2023-03-16', 'Buntatala Jaro Iloilo City', '+639818098637', 'Password123', '336763301_601061171630533_3637774528028573308_n.jpg'),
(5, 'June Michael Columbres', 'junemichaelcolumbres@gmail.com', 'Male', '2000-01-22', 'Brgy. Maraguit, Cabatuan, Iloilo', '09369944594', 'Password123!', 'validjune.jpg'),
(6, 'Angelika Cabisado', 'angelikacabisado@gmail.com', 'Female', '2002-02-11', 'Brgy. Barosong, Tigbauan, Iloilo', '09103921226', 'Password123!', 'angelika.jpg'),
(7, 'Rio Cris Corios', 'corriosriocris@gmail.com', 'Male', '1999-06-05', 'lapuz norte', '09309530472', 'Paasword123!', '9.jpg'),
(8, 'Denmark Becite', 'mark@gmail.com', 'Male', '2000-05-24', 'calumpang', '09626338362', 'Password123K', 'national-ID.jpg'),
(9, 'Krissy', 'sy@gmail.com', 'Female', '2000-09-14', 'Lapaz', '09758433245', 'Password123K', 'national-ID.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `resident_complain`
--

CREATE TABLE `resident_complain` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `complain_title` varchar(255) NOT NULL,
  `complain_report` varchar(255) NOT NULL,
  `cn` varchar(255) NOT NULL,
  `Date` varchar(255) NOT NULL,
  `Time` varchar(255) NOT NULL,
  `Year` varchar(255) NOT NULL,
  `Status` varchar(255) NOT NULL,
  `mylat` varchar(255) NOT NULL,
  `mylong` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `resident_complain`
--

INSERT INTO `resident_complain` (`id`, `email`, `complain_title`, `complain_report`, `cn`, `Date`, `Time`, `Year`, `Status`, `mylat`, `mylong`, `image`) VALUES
(73, 'mark@gmail.com', 'Child abuse', 'I\'m sending this message because I would like to report about our neighbor  Analisa. We had overheard shouting and crying, and aside from that we also heard loud noises that seems like things hitting the wall. I need a response for this matter as a concer', '09626338362', '2023-03-29', '07:42:58', '2023', 'Pending', '10.6961516', '122.5711991', 'Screenshot (73).png'),
(74, 'mark@gmail.com', 'drug use', 'I\'m denmark  sending ......', '09626338362', '2023-03-29', '09:53:40', '2023', 'Pending', '10.768141', '122.5857871', '333055245_159451673639847_2994231278199782123_n.png'),
(75, 'sy@gmail.com', 'Child abuse', 'djhd', '09758433245', '2023-03-30', '07:04:11', '2023', 'Pending', '10.7201501', '122.5621063', 'child abuse.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `complain_report`
--
ALTER TABLE `complain_report`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `emergency`
--
ALTER TABLE `emergency`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `officials`
--
ALTER TABLE `officials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `residents`
--
ALTER TABLE `residents`
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
-- AUTO_INCREMENT for table `complain_report`
--
ALTER TABLE `complain_report`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `emergency`
--
ALTER TABLE `emergency`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `officials`
--
ALTER TABLE `officials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `residents`
--
ALTER TABLE `residents`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `resident_complain`
--
ALTER TABLE `resident_complain`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
