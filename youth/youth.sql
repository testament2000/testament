-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2021 at 03:06 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `youth`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(200) NOT NULL,
  `firstname` varchar(200) NOT NULL,
  `middlename` varchar(200) NOT NULL,
  `lastname` varchar(200) NOT NULL,
  `state` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `gender` varchar(200) NOT NULL,
  `date_of_birth` varchar(200) NOT NULL,
  `time` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6),
  `email` varchar(200) NOT NULL,
  `phone` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `firstname`, `middlename`, `lastname`, `state`, `username`, `password`, `gender`, `date_of_birth`, `time`, `email`, `phone`) VALUES
(1, 'martial', 'uduak', 'abdul ', 'Kaduna ', 'matial222 ', ' vary ', ' male ', '2021-03-27', '2021-03-19 15:44:45.107623', 'ammy@gmail.com', 0),
(2, 'martial', 'uduak', 'abdul ', 'Kaduna ', 'matial222 ', ' vary ', ' male ', '2021-03-27', '2021-03-19 15:47:10.223676', 'ammy@gmail.com', 0),
(3, 'martial', 'uduak', 'abdul ', 'Kaduna ', 'matial222 ', ' vary ', ' male ', '2021-03-27', '2021-03-19 15:50:01.701024', 'ammy@gmail.com', 0),
(4, 'martial', 'uduak', 'abdul ', 'Kaduna ', 'matial222 ', ' vary ', ' male ', '2021-03-27', '2021-03-19 15:50:33.537193', 'ammy@gmail.com', 0),
(5, 'martial', 'uduak', 'abdul ', 'Kaduna ', 'matial222 ', ' vary ', ' male ', '2021-03-27', '2021-03-19 15:54:14.466080', 'ammy@gmail.com', 0),
(6, 'martial', 'uduak', 'abdul ', 'Kaduna ', 'matial222 ', ' vary ', ' male ', '2021-03-27', '2021-03-19 15:54:58.830264', 'ammy@gmail.com', 0),
(7, 'martial', 'uduak', 'abdul ', 'Kaduna ', 'matial222 ', ' vary ', ' male ', '2021-03-27', '2021-03-19 15:55:34.289614', 'ammy@gmail.com', 0),
(8, 'GOODNESS', 'RACHEAL', 'IHEANACHO ', 'Imo ', 'GOODNESS2000 ', ' GOODY ', ' female ', '2010-06-25', '2021-03-20 10:11:09.746174', 'goodness2000@gmail.com', 0),
(9, 'GOODNESS', 'RACHEAL', 'IHEANACHO ', 'Jigawa ', 'GOODNESS2000 ', ' goody ', ' female ', '2010-06-25', '2021-03-20 10:22:34.801770', 'obinnaiwu0@gmail.com', 2147483647),
(10, 'GOODNESS', 'RACHEAL', 'IHEANACHO ', 'Jigawa ', 'GOODNESS2000 ', ' fe7a490696d9ba6418f92014e4e08bfd ', ' female ', '2010-06-25', '2021-03-20 10:23:58.410535', 'obinnaiwu0@gmail.com', 2147483647),
(11, 'SHALOM', 'CHIAZAWOM', 'IHEANACHO ', 'Kaduna ', 'SHIZZY2000 ', ' 4d40af7df0dd0823075b335ea4646276 ', ' female ', '2007-06-22', '2021-03-20 10:25:59.727403', 'SHIZZY200@GMAIL.COM', 2147483647),
(12, 'SHALOM', 'CHIAZAWOM', 'IHEANACHO ', 'Kaduna ', 'SHIZZY2000 ', ' 4d40af7df0dd0823075b335ea4646276 ', ' female ', '2007-06-22', '2021-03-20 10:37:21.663284', 'SHIZZY200@GMAIL.COM', 2147483647),
(13, 'SHALOM', 'CHIAZAWOM', 'IHEANACHO ', 'Kaduna ', 'SHIZZY2000 ', ' 4d40af7df0dd0823075b335ea4646276 ', ' female ', '2007-06-22', '2021-03-20 10:40:20.272252', 'SHIZZY200@GMAIL.COM', 2147483647),
(14, 'SHALOM', 'CHIAZAWOM', 'IHEANACHO ', 'Kaduna ', 'SHIZZY2000 ', ' 4d40af7df0dd0823075b335ea4646276 ', ' female ', '2007-06-22', '2021-03-20 10:40:38.703702', 'SHIZZY200@GMAIL.COM', 2147483647),
(15, 'SHALOM', 'CHIAZAWOM', 'IHEANACHO ', 'Kaduna ', 'SHIZZY2000 ', ' 4d40af7df0dd0823075b335ea4646276 ', ' female ', '2007-06-22', '2021-03-20 10:41:36.726609', 'SHIZZY200@GMAIL.COM', 2147483647),
(16, 'SHALOM', 'CHIAZAWOM', 'IHEANACHO ', 'Kaduna ', 'SHIZZY2000 ', ' 4d40af7df0dd0823075b335ea4646276 ', ' female ', '2007-06-22', '2021-03-20 10:43:04.736918', 'SHIZZY200@GMAIL.COM', 2147483647),
(17, 'emmanuel', 'Christian', 'Nnanna ', 'Delta ', 'nnaify ', ' 05fb23e0d96692369c254c7f492d358c ', ' male ', '2021-03-23', '2021-03-22 09:54:23.550643', 'iniabel@gmail.com', 2147483647),
(18, 'GOODNESS', 'RACHEAL', 'akpan ', 'Kaduna ', 'testament ', ' b887e140e7f9a6fef83271ac952bc7b0 ', ' male ', '2021-03-27', '2021-03-22 10:28:55.352923', 'google@gmail.com', 2147483647);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
