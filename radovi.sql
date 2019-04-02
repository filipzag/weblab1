-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2019 at 08:51 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `radovi`
--

-- --------------------------------------------------------

--
-- Table structure for table `diplomski_radovi`
--

CREATE TABLE `diplomski_radovi` (
  `ID_rada` int(11) NOT NULL,
  `naziv_rada` text NOT NULL,
  `tekst_rada` text NOT NULL,
  `link_rada` text NOT NULL,
  `oib_tvrtke` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `diplomski_radovi`
--

INSERT INTO `diplomski_radovi` (`ID_rada`, `naziv_rada`, `tekst_rada`, `link_rada`, `oib_tvrtke`) VALUES
(3, 'Diplomski radovi â€“ FPGA (2 teme)', 'Tema 1: Implementacija JPEG kodera i dekodera zasnovanog na FPGA (FPGA implementation of JPEG coder and decoder) JPEG (Joint Photographic Expert Group) je jedna od najÄeÅ¡Ä‡e koriÅ¡tenih normi za kompresiju digitalne slike. U sklopu diplomskog [...]', 'http://stup.ferit.hr/2018/01/31/diplomski-radovi-fpga-2-teme/', '87006187287');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `diplomski_radovi`
--
ALTER TABLE `diplomski_radovi`
  ADD PRIMARY KEY (`ID_rada`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `diplomski_radovi`
--
ALTER TABLE `diplomski_radovi`
  MODIFY `ID_rada` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
