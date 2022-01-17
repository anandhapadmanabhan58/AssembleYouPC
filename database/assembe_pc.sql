-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 16, 2022 at 09:05 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `assembe_pc`
--

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `brandid` int(11) NOT NULL,
  `brand` varchar(44) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`brandid`, `brand`) VALUES
(2, 'Dell'),
(3, 'Lenovo'),
(4, 'Acer'),
(6, 'AOC'),
(7, 'Benq'),
(8, 'HP'),
(9, 'Samsung'),
(10, 'Asus');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cartid` int(11) NOT NULL,
  `uid` varchar(44) NOT NULL,
  `pid` varchar(44) NOT NULL,
  `type` varchar(44) NOT NULL,
  `total` varchar(44) NOT NULL,
  `status` varchar(44) NOT NULL DEFAULT 'Cart'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cartid`, `uid`, `pid`, `type`, `total`, `status`) VALUES
(1, '1', '1', 'Product', '84990', 'Delivered'),
(2, '1', '1', 'Product', '84990', 'Delivered'),
(3, '2', '2', 'Product', '14000', 'Delivered'),
(4, '2', '2', 'Product', '14000', 'Delivered'),
(5, '2', '2', 'Product', '14000', 'Delivered'),
(6, '2', '1', 'Product', '84990', 'Delivered'),
(7, '2', '2', 'Product', '14000', 'Delivered');

-- --------------------------------------------------------

--
-- Table structure for table `cproduct`
--

CREATE TABLE `cproduct` (
  `cpid` int(11) NOT NULL,
  `uid` varchar(44) NOT NULL DEFAULT '0',
  `dispid` varchar(44) NOT NULL DEFAULT '0',
  `brand` varchar(44) NOT NULL DEFAULT '0',
  `hddid` varchar(44) NOT NULL DEFAULT '0',
  `proid` varchar(44) NOT NULL DEFAULT '0',
  `ramid` varchar(44) NOT NULL DEFAULT '0',
  `total` varchar(44) NOT NULL DEFAULT '0',
  `status` varchar(44) NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cproduct`
--

INSERT INTO `cproduct` (`cpid`, `uid`, `dispid`, `brand`, `hddid`, `proid`, `ramid`, `total`, `status`) VALUES
(1, '1', '2', 'Samsung', '2', '2', '1', '45423', 'Pending'),
(2, '1', '3', 'Dell', '3', '3', '2', '22475', 'Delivered'),
(3, '2', '2', 'Samsung', '2', '2', '4', '50624', 'paid');

-- --------------------------------------------------------

--
-- Table structure for table `display`
--

CREATE TABLE `display` (
  `dispid` int(11) NOT NULL,
  `display` varchar(44) NOT NULL,
  `size` varchar(44) NOT NULL,
  `resolution` varchar(44) NOT NULL,
  `panel` varchar(44) NOT NULL,
  `speciality` varchar(44) NOT NULL,
  `rate` varchar(44) NOT NULL,
  `brand` varchar(44) NOT NULL,
  `img` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `display`
--

INSERT INTO `display` (`dispid`, `display`, `size`, `resolution`, `panel`, `speciality`, `rate`, `brand`, `img`) VALUES
(2, 'Backlit IPS Panel Monitor', '24 inch', '1920 x 1080 pixels', ' IPS Panel', 'SAMSUNG 24 inch Full HD LED Backlit IPS Pane', '13999', 'Samsung', 0x696d616765732f73616d73756e672e6a706567),
(3, 'Backlit TN Panel Monitor', '23 inch', '1920 X 1080 pixels', ' TN Panel', 'DELL 20 inch HD LED Backlit TN Panel Monitor', '9345', 'Dell', 0x696d616765732f64656c31312e6a706567),
(4, 'Moniterz', '32', '1080', 'OLED', 'Best', '20000', 'HP', 0x696d616765732f646f776e6c6f6164202833292e6a7067);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `fid` int(11) NOT NULL,
  `uid` varchar(44) NOT NULL,
  `feedback` varchar(44) NOT NULL,
  `dec` varchar(400) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`fid`, `uid`, `feedback`, `dec`, `date`) VALUES
(1, '1', 'Good', 'It was so good working with you guys', '2021-10-28'),
(2, '2', 'Nice', 'Aaah Kolaaam', '2021-12-30');

-- --------------------------------------------------------

--
-- Table structure for table `hdd`
--

CREATE TABLE `hdd` (
  `hddid` int(11) NOT NULL,
  `hdd` varchar(44) NOT NULL,
  `size` varchar(44) NOT NULL,
  `specilaity` varchar(44) NOT NULL,
  `rate` varchar(44) NOT NULL,
  `brand` varchar(44) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hdd`
--

INSERT INTO `hdd` (`hddid`, `hdd`, `size`, `specilaity`, `rate`, `brand`) VALUES
(2, 'Seagate OEM', '320 GB', 'Seagate OEM 320 GB Desktop Internal Hard Dis', '999', 'Samsung'),
(3, 'Surveillance Systems Internal Hard Disk Driv', '1 TB', 'WD Purple 1 TB Surveillance Systems Internal', '3950', 'Dell'),
(4, 'SSD', '500GB', 'High Speed', '5000', 'Dell');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `lid` int(11) NOT NULL,
  `uid` varchar(44) NOT NULL,
  `uname` varchar(44) NOT NULL,
  `psw` varchar(44) NOT NULL,
  `type` varchar(44) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`lid`, `uid`, `uname`, `psw`, `type`) VALUES
(1, '1', 'tom@gmail.com', 'tom123', 'User'),
(2, '0', 'admin@gmail.com', 'admin', 'Admin'),
(3, '2', 'ak@mail.com', '1234', 'User');

-- --------------------------------------------------------

--
-- Table structure for table `processor`
--

CREATE TABLE `processor` (
  `proid` int(11) NOT NULL,
  `processor` varchar(44) NOT NULL,
  `size` varchar(44) NOT NULL,
  `speed` varchar(44) NOT NULL,
  `speciality` varchar(400) NOT NULL,
  `rate` varchar(44) NOT NULL,
  `brand` varchar(44) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `processor`
--

INSERT INTO `processor` (`proid`, `processor`, `size`, `speed`, `speciality`, `rate`, `brand`) VALUES
(2, 'amd Ryzen 5', '128 GB', ' 4.4 GHz', 'amd Ryzen 5 5600G 3.9 GHz Upto 4.4 GHz AM4 Socket 6 Cores 12 Threads 3 kB L2 16 kB L3 Desktop Processor  (Grey)', '26626', 'Samsung'),
(4, 'AMD', '8Gb', '4.4 GHz', 'High Speed', '4000', 'Lenovo');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `pid` int(11) NOT NULL,
  `brand` varchar(44) NOT NULL,
  `model` varchar(44) NOT NULL,
  `partnumber` varchar(44) NOT NULL,
  `os` varchar(44) NOT NULL,
  `suitablefor` varchar(44) NOT NULL,
  `type` varchar(44) NOT NULL,
  `graphics` varchar(44) NOT NULL,
  `gmemory` varchar(44) NOT NULL,
  `color` varchar(44) NOT NULL,
  `processor` varchar(44) NOT NULL,
  `ram` varchar(44) NOT NULL,
  `hdd` varchar(44) NOT NULL,
  `price` varchar(44) NOT NULL,
  `img` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pid`, `brand`, `model`, `partnumber`, `os`, `suitablefor`, `type`, `graphics`, `gmemory`, `color`, `processor`, `ram`, `hdd`, `price`, `img`) VALUES
(1, 'Asus', ' ROG Strix (G15DH-IN006T)', '90PD02V1-M04200', ' Windows 10 (64-bit)', ' Processing & Multitasking, Gaming', 'Gaming Tower', ' NVIDIA GeForce GTX 1660', ' 6 GB', ' Star Black', ' AMD  Ryzen 5 (3600X)', ' 8 GB', ' 1 TB', '84990', 0x696d616765732f61737573312e6a706567);

-- --------------------------------------------------------

--
-- Table structure for table `ram`
--

CREATE TABLE `ram` (
  `ramid` int(11) NOT NULL,
  `ram` varchar(44) NOT NULL,
  `size` varchar(44) NOT NULL,
  `speed` varchar(44) NOT NULL,
  `speciality` varchar(44) NOT NULL,
  `rate` varchar(44) NOT NULL,
  `brand` varchar(44) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ram`
--

INSERT INTO `ram` (`ramid`, `ram`, `size`, `speed`, `speciality`, `rate`, `brand`) VALUES
(1, 'Crucial Works', '8 GB', '2133mhz', 'Crucial Works in 2133mhz also DDR4 8 GB Lapt', '3799', 'Samsung'),
(2, 'XPG GAMMIX D30', '8 GB', '3200MHZ', 'ADATA XPG GAMMIX D30 DDR4 8 GB (Single Chann', '3080', 'Dell'),
(4, 'DDR4', '8GB', '4', 'DDR4', '9000', 'Samsung');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `uid` int(11) NOT NULL,
  `name` varchar(44) NOT NULL,
  `gender` varchar(44) NOT NULL,
  `address` varchar(44) NOT NULL,
  `phone` varchar(44) NOT NULL,
  `email` varchar(44) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `name`, `gender`, `address`, `phone`, `email`) VALUES
(1, 'Tom Jose Antony', 'male', 'Kuttamachery East, Kerala 683105', '9562301478', 'tom@gmail.com'),
(2, 'Akhil', 'male', 'Ak\r\nAdrs', '9090909090', 'ak@mail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`brandid`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cartid`);

--
-- Indexes for table `cproduct`
--
ALTER TABLE `cproduct`
  ADD PRIMARY KEY (`cpid`);

--
-- Indexes for table `display`
--
ALTER TABLE `display`
  ADD PRIMARY KEY (`dispid`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`fid`);

--
-- Indexes for table `hdd`
--
ALTER TABLE `hdd`
  ADD PRIMARY KEY (`hddid`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`lid`);

--
-- Indexes for table `processor`
--
ALTER TABLE `processor`
  ADD PRIMARY KEY (`proid`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `ram`
--
ALTER TABLE `ram`
  ADD PRIMARY KEY (`ramid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `brandid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cartid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `cproduct`
--
ALTER TABLE `cproduct`
  MODIFY `cpid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `display`
--
ALTER TABLE `display`
  MODIFY `dispid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `fid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `hdd`
--
ALTER TABLE `hdd`
  MODIFY `hddid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `lid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `processor`
--
ALTER TABLE `processor`
  MODIFY `proid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ram`
--
ALTER TABLE `ram`
  MODIFY `ramid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
