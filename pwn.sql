-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 2017-09-15 02:54:54
-- 服务器版本： 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user`
--

-- --------------------------------------------------------

--
-- 表的结构 `pwn`
--

CREATE TABLE `pwn` (
  `id` int(11) NOT NULL,
  `time` time(4) DEFAULT NULL,
  `banci` text CHARACTER SET utf8 NOT NULL,
  `fazhan` text CHARACTER SET utf8 NOT NULL,
  `daozhan` text CHARACTER SET utf8 NOT NULL,
  `shijian` varchar(255) CHARACTER SET utf8 NOT NULL,
  `eding` varchar(255) NOT NULL,
  `yupiao` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `pwn`
--

INSERT INTO `pwn` (`id`, `time`, `banci`, `fazhan`, `daozhan`, `shijian`, `eding`, `yupiao`) VALUES
(1, '08:00:00.0000', 'mu2344', '禄口机场', '白云机场', '2：30', '168', '80'),
(2, '06:30:00.0000', 'KU2112', '禄口机场', '双流机场', '2：45', '258', '41'),
(3, '07:00:00.0000', 'HU2552', '禄口机场', '首都机场', '1：30', '258', '20'),
(4, '10:00:00.0000', 'CA1503', '首都机场', '禄口机场', '2：00', '168', '2'),
(5, '07:00:00.0000', 'HU2552', '禄口机场', '首都机场', '1：30', '258', '20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pwn`
--
ALTER TABLE `pwn`
  ADD PRIMARY KEY (`id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `pwn`
--
ALTER TABLE `pwn`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
