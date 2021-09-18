-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 18, 2021 at 05:56 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `diksha`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  `number` bigint(20) NOT NULL,
  `pass` varchar(50) COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `number`, `pass`) VALUES
(1, 'faruki@faruki.faruki', 8240464092, 'faruki');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  `is_active` enum('y','n') COLLATE utf8mb4_bin NOT NULL DEFAULT 'y'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `is_active`) VALUES
(4, 'pants', 'y'),
(5, 'ladies', 'y'),
(6, 'shirt', 'y'),
(7, 'jewelry', 'y'),
(8, 'others', 'y'),
(9, 'Women', 'y'),
(10, 'Men', 'y'),
(11, 'Sleepwear', 'y'),
(12, 'Salwar Suit', 'y'),
(13, 'Sarees', 'y'),
(14, 'Shorts', 'y'),
(15, 'Casual tees', 'y'),
(16, 'Skirts', 'y'),
(17, 'Jump Suits', 'y'),
(18, 'Joggers for mens', 'y'),
(19, 'jjkjjfdkgj', 'y'),
(20, 'yty for girls', 'y'),
(21, 'kjk', 'y'),
(22, 'jgk', 'y'),
(24, 'hgj', 'y'),
(25, 'hello', 'y'),
(26, 'hgj', 'y'),
(27, 'hgj', 'y');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  `pass` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  `phone` bigint(20) NOT NULL,
  `gender` enum('m','f') COLLATE utf8mb4_bin NOT NULL DEFAULT 'm',
  `user_pic` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  `about` text COLLATE utf8mb4_bin NOT NULL,
  `addess` text COLLATE utf8mb4_bin NOT NULL,
  `is_active` enum('y','n') COLLATE utf8mb4_bin NOT NULL DEFAULT 'y'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`id`, `name`, `email`, `pass`, `phone`, `gender`, `user_pic`, `about`, `addess`, `is_active`) VALUES
(19, 'rrrr', 'f@s.com', 'Pass', 56, 'f', '19-aaa.jpg', 'hg', 'ghj', 'y'),
(30, 'trtrt', 'admin@test.com', 'admin', 0, 'm', '', '', '', 'y'),
(31, '', 'test@test.com', 'Hellott', 0, 'm', '', '', '', 'y'),
(32, 'hello neo', 'hello@y.k', 'Hello', 0, 'm', '32-251322.jpg', '', '', 'y'),
(33, '', 'hello@hey.com', 'hello', 0, 'm', '', '', '', 'y');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  `p_name` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  `price` int(11) NOT NULL,
  `size` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  `description` text COLLATE utf8mb4_bin NOT NULL,
  `color` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  `image` text COLLATE utf8mb4_bin NOT NULL,
  `post_date` date NOT NULL,
  `is_active` enum('y','n') COLLATE utf8mb4_bin NOT NULL DEFAULT 'y'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `cat_id`, `cat_name`, `p_name`, `price`, `size`, `description`, `color`, `image`, `post_date`, `is_active`) VALUES
(30, 4, 'pants', 'qq', 22, '23', 'sad', 'we', '30-mk.jpg', '2021-09-06', 'y'),
(31, 4, 'pants', 'gg', 44, '456', 'fg', 'fg', '31-uiui.jpg', '2021-09-06', 'y'),
(33, 4, 'pants', 'srtr', 44, '456', '2w', 'w2', '33-fgv.jpg', '2021-09-06', 'y'),
(34, 4, 'pants', 'w2', 2, '46', 'w2', '2w', '34-gvb.jpg', '2021-09-06', 'y'),
(35, 4, 'pants', 'w2', 2, '2', 'w2', 'w2', '35-kj.jpg', '2021-09-06', 'y'),
(36, 4, 'pants', 'w2', 2, '3', 'x3', 'w2x3', '36-mnk.jpg', '2021-09-06', 'y'),
(37, 4, 'pants', 'x3', 3, '3', 'x3', '3x', '37-vtg.jpg', '2021-09-06', 'y'),
(38, 5, 'ladies', '3x', 3, '567', '3x', 'x3', '38-hjhj.jpg', '2021-09-06', 'y'),
(39, 5, 'ladies', '9o', 9, '567', '9o', '9o', '39-jhk.jpg', '2021-09-06', 'y'),
(40, 5, 'ladies', 'o9', 9, '5764', 'o9', '9o', '40-jkh.jpg', '2021-09-06', 'y'),
(41, 5, 'ladies', '8i', 8, '845', 'i8', 'i8', '41-jkh.jpg', '2021-09-06', 'y'),
(42, 5, 'ladies', '7u', 7, '34', 'u7', 'u7', '42-jkjkjk.jpg', '2021-09-06', 'y'),
(43, 5, 'ladies', '6y', 6, '34', 'y6', 'y6', '43-lk.jpg', '2021-09-06', 'y'),
(44, 5, 'ladies', '5t', 5, '34', 't5', 't5', '44-op.jpg', '2021-09-06', 'y'),
(45, 5, 'ladies', 't5e', 34, '36', 'e4', 'e4', '45-po.jpg', '2021-09-06', 'y'),
(46, 6, 'shirt', 'ftggh', 7, '7', '77m', '7u', '46-mm.jpg', '2021-09-06', 'y'),
(47, 6, 'shirt', 'm7', 7, '76', 'm7', 'm7', '47-d.jpg', '2021-09-06', 'y'),
(48, 6, 'shirt', 'm7', 7, '678', 'm7', '7m', '48-dfgdfg.jpg', '2021-09-06', 'y'),
(49, 6, 'shirt', 'rf54545fgdfg', 54545, '678', 'rf54545fgdfg', 'rf54545fgdfg', '49-fdg.jpg', '2021-09-06', 'y'),
(50, 6, 'shirt', 'rf54545fgdfg', 54545, '6756', 'rf54545fgdfg', 'rf54545fgdfg', '50-p.jpg', '2021-09-06', 'y'),
(51, 6, 'shirt', 'rf54545fgdfg', 54545, '345', 'rf54545fgdfg', 'rf54545fgdfg', '51-op.jpg', '2021-09-06', 'y'),
(52, 6, 'shirt', 'rf54545fgdfg', 54545, '345', 'rf54545fgdfg', 'rf54545fgdfg', '52-uu.jpg', '2021-09-06', 'y'),
(53, 7, 'jewelry', 'uioio455556', 455556, '67', 'esrte455556', 'esrte455556', '53-989898.jpg', '2021-09-06', 'y'),
(54, 7, 'jewelry', 'uioio455556', 455556, '65', 'uioio455556', 'uioio455556', '54-654456.jpg', '2021-09-06', 'y'),
(55, 7, 'jewelry', 'uioio455556', 455556, '34', 'uioio455556', 'uioio455556', '55-87878.jpg', '2021-09-06', 'y'),
(56, 7, 'jewelry', 'uioio455556', 455556, '342', 'uioio455556', 'uioio455556', '56-231231.jpg', '2021-09-06', 'y'),
(57, 7, 'jewelry', 'uioio455556', 455556, '23', 'uioio455556', 'uioio455556', '57-548748.jpg', '2021-09-06', 'y'),
(58, 7, 'jewelry', 'uioio455556', 455556, '547', 'uioio455556', 'uioio455556', '58-45.jpg', '2021-09-06', 'y'),
(59, 8, 'others', 'assasa567', 567, '456', 'assasa567', 'assasa567', '59-iuuu.jpg', '2021-09-06', 'y'),
(60, 8, 'others', 'vassasa567', 567, '456', 'assasa567', 'assasa567', '60-yyyy.jpg', '2021-09-06', 'y'),
(61, 8, 'others', 'assasa567', 567, '465', 'assasa567', 'assasa567', '61-yyyu.jpg', '2021-09-06', 'y'),
(62, 8, 'others', 'assasa567', 567, '456', 'assasa567', 'assasa567', '62-yyyh.jpg', '2021-09-06', 'y'),
(63, 8, 'others', 'assasa567', 567, '456', 'assasa567', 'assasa567', '63-yy.jpg', '2021-09-06', 'y'),
(65, 19, 'jjkjjfdkgj', 'jh', 67, '67', '67', '67', '65-251322.jpg', '2021-09-07', 'y');

-- --------------------------------------------------------

--
-- Table structure for table `proof`
--

CREATE TABLE `proof` (
  `proof_id` int(11) NOT NULL,
  `image` text COLLATE utf8mb4_bin NOT NULL,
  `post_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `proof`
--

INSERT INTO `proof` (`proof_id`, `image`, `post_date`) VALUES
(11, '11-kl.jpg', '2021-09-07'),
(12, '12-klkl.jpg', '2021-09-07'),
(13, '13-ljk.jpg', '2021-09-07'),
(14, '14-lk.jpg', '2021-09-07'),
(15, '15-lklk.jpg', '2021-09-07'),
(16, '16-lklkkl.jpg', '2021-09-07'),
(17, '17-lklkkl.jpg', '2021-09-07'),
(18, '18-lkp.jpg', '2021-09-07'),
(19, '19-op.jpg', '2021-09-07'),
(20, '20-opop.jpg', '2021-09-07'),
(21, '21-opopop.jpg', '2021-09-07'),
(22, '22-opop.jpg', '2021-09-07'),
(23, '23-p.jpg', '2021-09-07'),
(24, '24-po.jpg', '2021-09-07'),
(25, '25-po.jpg', '2021-09-07'),
(26, '26-poo.jpg', '2021-09-07'),
(27, '27-poo.jpg', '2021-09-07'),
(28, '28-popo.jpg', '2021-09-07'),
(29, '29-pp.jpg', '2021-09-07'),
(30, '30-ppp.jpg', '2021-09-07'),
(31, '31-ppppp.jpg', '2021-09-07'),
(32, '32-pppppp.jpg', '2021-09-07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`,`number`,`email`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `proof`
--
ALTER TABLE `proof`
  ADD PRIMARY KEY (`proof_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `proof`
--
ALTER TABLE `proof`
  MODIFY `proof_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
