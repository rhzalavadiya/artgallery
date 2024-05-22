-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 22, 2024 at 12:02 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `artist_bucks`
--

-- --------------------------------------------------------

--
-- Table structure for table `art`
--

CREATE TABLE `art` (
  `art_id` int(11) NOT NULL,
  `cat_id` int(10) NOT NULL,
  `art_name` varchar(100) NOT NULL,
  `art_desc` varchar(500) NOT NULL,
  `art_photo` varchar(250) NOT NULL,
  `artist_name` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `art`
--

INSERT INTO `art` (`art_id`, `cat_id`, `art_name`, `art_desc`, `art_photo`, `artist_name`) VALUES
(1, 1, 'Couple Portrait ', 'charchol sketch', '../paintings/sp.png', 'Jayant Prakash'),
(2, 2, 'lady', 'canvas, color ', '../paintings/20jp.jpg', 'Amit Ambalal'),
(3, 3, 'Stone  Mandala', 'stone', '../paintings/a.png', 'haku shah'),
(4, 4, 'Flowers Painting', 'knife art with attraction color', '../paintings/m.png', 'Ruby Jagrut'),
(5, 3, 'Ganpat Mandala Art', 'Pencile Art', '../paintings/ganpati.png', 'Ruby Jagrut'),
(6, 3, 'Paper Mandala', 'color ', '../paintings/b.png', 'haku shah'),
(8, 4, 'Natural Painting', 'natural design', '../paintings/e.png', 'Ruby Jagrut'),
(10, 3, 'Stone  Mandala', 'febric color', '../paintings/bwm.png', 'Jayant Prakash'),
(11, 1, 'Charcol Portrait', 'Done using charchol and graphite pencil.', '../paintings/c.png', 'Jayant Prakash'),
(12, 1, 'Wedding Frame', 'Weadding photo', '../paintings/p2.jpg', 'Haku Shah');

-- --------------------------------------------------------

--
-- Table structure for table `artist`
--

CREATE TABLE `artist` (
  `id` int(11) NOT NULL,
  `profile` varchar(100) NOT NULL,
  `artist_name` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `mno` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `artist`
--

INSERT INTO `artist` (`id`, `profile`, `artist_name`, `email`, `mno`) VALUES
(1, '../upload/AA.png', 'Amit Ambala ', 'amitambala@gmail.com', '9624161824'),
(2, '../upload/HS.png', 'Haku Shah', 'hakushah22@gmail.com', '9737462610'),
(3, '../upload/RJ.png', 'Rubby Jagrut', 'rubbyj231@gmail.com', '9558421567');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(220) NOT NULL,
  `cat_name` varchar(220) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`) VALUES
(1, 'Sketch'),
(2, 'Canvas painting'),
(3, 'Mandala'),
(4, 'Knife Painting');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `eid` int(220) NOT NULL,
  `ename` varchar(220) NOT NULL,
  `edate` varchar(220) NOT NULL,
  `evenue` varchar(220) NOT NULL,
  `etime` varchar(220) NOT NULL,
  `ephoto` varchar(220) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`eid`, `ename`, `edate`, `evenue`, `etime`, `ephoto`) VALUES
(1, 'Kalakruti', '10th to 13th April', 'Shyamprasad Art Gallery,Rajkot.', '9:00 AM to 9:00 PM', '../upload/ar.png'),
(3, 'World of Art', '27 June to 30 June', 'Karma Art Gallary-Ahemdabad', '11:00 AM to 10:00 PM', '../upload/karna.png'),
(4, 'Akruti Art Exhibition', '15 May to 18 May', 'Shyamprasad Art Gallery,Rajkot.', '12:00 PM to 9:00 PM', '../upload/s.png');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `Uid` int(11) NOT NULL,
  `email` varchar(20) NOT NULL,
  `unm` varchar(10) NOT NULL,
  `pass` varchar(10) NOT NULL,
  `cpass` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`Uid`, `email`, `unm`, `pass`, `cpass`) VALUES
(1, 'rupalizalavadiya22@g', 'rhzalavadi', '12345', '12345'),
(2, 'krinasadariya@gmail.', 'krina', '0508', '0508'),
(3, 'rutvalalani@gmail.co', 'rutvapatel', '0417', '0417'),
(4, 'mahamad@gmail.com', 'mahamad', '123', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `art`
--
ALTER TABLE `art`
  ADD PRIMARY KEY (`art_id`);

--
-- Indexes for table `artist`
--
ALTER TABLE `artist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`eid`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`Uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `art`
--
ALTER TABLE `art`
  MODIFY `art_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `artist`
--
ALTER TABLE `artist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(220) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `eid` int(220) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `Uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
