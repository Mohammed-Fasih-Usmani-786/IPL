-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2024 at 04:01 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ipl`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_auction`
--

CREATE TABLE `add_auction` (
  `id` int(10) NOT NULL,
  `row_id` varchar(255) NOT NULL,
  `player_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `add_auction`
--

INSERT INTO `add_auction` (`id`, `row_id`, `player_id`) VALUES
(1, '202405yOdrMmkjuA1714917493', '202403t9SFcbvf3f1711157857');

-- --------------------------------------------------------

--
-- Table structure for table `add_player`
--

CREATE TABLE `add_player` (
  `id` int(10) NOT NULL,
  `row_id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `amt` varchar(255) NOT NULL,
  `p_img` varchar(255) NOT NULL,
  `t_player` varchar(255) NOT NULL,
  `t_code` varchar(255) NOT NULL,
  `_time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `add_player`
--

INSERT INTO `add_player` (`id`, `row_id`, `name`, `amt`, `p_img`, `t_player`, `t_code`, `_time`) VALUES
(23, '202403u8bDUMRnrM1710919390', 'Rohit Sharma', '500006', '../image/add_player/65fa8edec7157.jpg', 'India', '55555India', '120'),
(24, '202403mlXyCa85Qr1710919429', 'Virat Kohli', '10000000', '../image/add_player/65fa8f04f4213.jpg', 'India', '55555India', '120'),
(25, '202403v81z6YmCiD1710919951', 'Dwayne Bravo', '500006', '../image/add_player/65fa910f62aeb.jpg', 'Westindies', '77777Westindies', '120'),
(26, '202403pKAYwHyoNs1710920011', 'Chris Gayle', '800000', '../image/add_player/65fa914b4ae5c.jpg', 'Westindies', '77777Westindies', '120'),
(27, '202403tAu1YlEXxv1710920141', 'AB De Villiers', '890000', '../image/add_player/65fa91cd1c8e2.jpg', 'SouthAfrica', '88888SouthAfrica', '120'),
(28, '202403jaI6ZW4ClW1711156679', 'Moin Ali', '786000', '../image/add_player/65fe2dc7aa928.png', 'England', '44444England', '120'),
(36, '202403AaYbf0BdeY1711157701', 'Imran Tahir', '787878', '../image/add_player/65fe31c5b1313.jpg', 'SouthAfrica', '88888SouthAfrica', '120'),
(37, '202403t9SFcbvf3f1711157857', 'Kane Williamson', '10000000', '../image/add_player/65fe3261089e2.jpg', 'Newzeland', '66666Newzeland', '120'),
(38, '202403WupVYuknjF1711158001', 'Trent Boult', '678954', '../image/add_player/65fe32f17ed5a.jpg', 'Newzeland', '66666Newzeland', '120'),
(39, '202403FLv3oDIbZu1711158049', 'Steve Smith', '6767676', '../image/add_player/65fe33212a371.jpg', 'Australia', '22222Australia', '120'),
(40, '2024031WYLgJbaYS1711158086', 'David Warner', '900000', '../image/add_player/65fe3346b4389.jpg', 'Australia', '22222Australia', '120');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `row_id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `row_id`, `name`, `email`, `pass`) VALUES
(1, '123abc123', 'admin', 'admin@gmail.com', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `auction`
--

CREATE TABLE `auction` (
  `id` int(10) NOT NULL,
  `row_id` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `auction`
--

INSERT INTO `auction` (`id`, `row_id`, `status`) VALUES
(1, '123123123bn123123', 'True');

-- --------------------------------------------------------

--
-- Table structure for table `bid`
--

CREATE TABLE `bid` (
  `id` int(10) NOT NULL,
  `row_id` varchar(255) NOT NULL,
  `ow_id` varchar(255) NOT NULL,
  `p_id` varchar(255) NOT NULL,
  `amt` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bid`
--

INSERT INTO `bid` (`id`, `row_id`, `ow_id`, `p_id`, `amt`) VALUES
(1, '202405KTGRwVhc201714912510', '202403cB3lizyRCL1711286189', '202403v81z6YmCiD1710919951', '500006'),
(2, '2024051O4h9MfbpN1714912582', '202403cB3lizyRCL1711286189', '202403u8bDUMRnrM1710919390', '500006'),
(3, '202405qZGh7EZdqn1714917521', '202404d9OCbBt3eQ1712374950', '202403t9SFcbvf3f1711157857', '10000000');

-- --------------------------------------------------------

--
-- Table structure for table `owners`
--

CREATE TABLE `owners` (
  `id` int(10) NOT NULL,
  `row_id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `budget` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `owners`
--

INSERT INTO `owners` (`id`, `row_id`, `name`, `email`, `password`, `logo`, `budget`) VALUES
(20, '202403cB3lizyRCL1711286189', 'Sharukh Khan', 'sharukh@gmail.com', '1234', 'image/logo/660027ad95c58.jpg', '200000000'),
(21, '202404d9OCbBt3eQ1712374950', 'Shilpa Shetty', 'shilpashetty@gmail.com', '1234', 'image/logo/6610c4a6e27d9.jpg', '340000');

-- --------------------------------------------------------

--
-- Table structure for table `player_country`
--

CREATE TABLE `player_country` (
  `id` int(10) NOT NULL,
  `row_id` varchar(255) NOT NULL,
  `country_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `player_country`
--

INSERT INTO `player_country` (`id`, `row_id`, `country_name`) VALUES
(1, '11111Afganistan', 'Afganistan'),
(2, '22222Australia', 'Australia'),
(3, '33333Bangladesh', 'Bangladesh'),
(4, '44444England', 'England'),
(5, '55555India', 'India'),
(6, '66666Newzeland', 'Newzeland'),
(7, '77777Westindies', 'Westindies'),
(12, '88888SouthAfrica', 'SouthAfrica');

-- --------------------------------------------------------

--
-- Table structure for table `sold_out`
--

CREATE TABLE `sold_out` (
  `id` int(10) NOT NULL,
  `row_id` varchar(255) NOT NULL,
  `ow_id` varchar(255) NOT NULL,
  `p_id` varchar(255) NOT NULL,
  `amt` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_auction`
--
ALTER TABLE `add_auction`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `add_player`
--
ALTER TABLE `add_player`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auction`
--
ALTER TABLE `auction`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bid`
--
ALTER TABLE `bid`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `owners`
--
ALTER TABLE `owners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `player_country`
--
ALTER TABLE `player_country`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sold_out`
--
ALTER TABLE `sold_out`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_auction`
--
ALTER TABLE `add_auction`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `add_player`
--
ALTER TABLE `add_player`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `auction`
--
ALTER TABLE `auction`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `bid`
--
ALTER TABLE `bid`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `owners`
--
ALTER TABLE `owners`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `player_country`
--
ALTER TABLE `player_country`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `sold_out`
--
ALTER TABLE `sold_out`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
