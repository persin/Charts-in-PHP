-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 25, 2020 at 12:54 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `charts_data`
--

-- --------------------------------------------------------

--
-- Table structure for table `morris_chart_data`
--

CREATE TABLE `morris_chart_data` (
  `id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `year` varchar(50) DEFAULT NULL,
  `income` varchar(50) DEFAULT NULL,
  `expense` varchar(50) DEFAULT NULL,
  `profit` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `morris_chart_data`
--

INSERT INTO `morris_chart_data` (`id`, `name`, `year`, `income`, `expense`, `profit`) VALUES
(1, 'France', '1998', '13096.38', '12377.29', '8993.30'),
(2, 'China', '1993', '7926.90', '10752.11', '5023.86'),
(3, 'Indonesia', '1997', '11020.05', '13442.92', '4731.34'),
(4, 'Poland', '1993', '11210.36', '9927.59', '1083.18'),
(5, 'Greece', '2008', '12701.13', '8550.99', '2155.17'),
(6, 'Czech Republic', '1996', '13411.79', '11761.20', '4225.49'),
(7, 'Namibia', '1998', '14659.80', '8670.84', '2134.35'),
(8, 'Sweden', '1992', '7333.43', '13336.84', '956.15'),
(9, 'Brazil', '1999', '13478.66', '13619.55', '5462.83'),
(10, 'Chile', '2005', '5574.79', '14398.94', '2226.29'),
(11, 'Cambodia', '1998', '11240.45', '9489.21', '6115.07'),
(12, 'Peru', '2002', '10114.59', '9198.77', '2369.50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `morris_chart_data`
--
ALTER TABLE `morris_chart_data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `morris_chart_data`
--
ALTER TABLE `morris_chart_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
