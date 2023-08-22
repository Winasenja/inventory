-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 22, 2023 at 07:15 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stockbarang`
--

-- --------------------------------------------------------

--
-- Table structure for table `keluar`
--

CREATE TABLE `keluar` (
  `idkeluar` int(11) NOT NULL,
  `idbarang` int(11) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp(),
  `no_issue` int(11) NOT NULL,
  `customer_code` varchar(11) NOT NULL,
  `cusstomer_name` varchar(20) NOT NULL,
  `item_code` varchar(11) NOT NULL,
  `description` varchar(20) NOT NULL,
  `UOM` varchar(11) NOT NULL,
  `stock_room` varchar(11) NOT NULL,
  `detail` varchar(15) NOT NULL,
  `qty` int(11) NOT NULL,
  `price` float NOT NULL,
  `attended_price` float NOT NULL,
  `ket` varchar(15) NOT NULL,
  `key_master` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `keluar`
--

INSERT INTO `keluar` (`idkeluar`, `idbarang`, `tanggal`, `no_issue`, `customer_code`, `cusstomer_name`, `item_code`, `description`, `UOM`, `stock_room`, `detail`, `qty`, `price`, `attended_price`, `ket`, `key_master`) VALUES
(3, 3, '2023-05-29 15:40:31', 0, '', 'ctm', '', '', '', '', '', 40, 0, 0, '', ''),
(4, 5, '2023-06-02 10:11:18', 0, '', 'MAHMUD', '', '', '', '', '', 80, 0, 0, '', ''),
(5, 4, '2023-06-02 10:22:27', 0, '', 'Nurdin', '', '', '', '', '', 180, 0, 0, '', ''),
(6, 4, '2023-06-02 10:52:55', 0, '', 'kk', '', '', '', '', '', 1, 0, 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `iduser` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`iduser`, `email`, `password`) VALUES
(1, 'admin1@gmail.com', 'admin1'),
(2, 'admin2@gmail.com', 'admin'),
(3, '1@gmail.com', 'pasword'),
(5, 'min@gmail.com', 'password'),
(6, 'kosong@gmail.com', 'password');

-- --------------------------------------------------------

--
-- Table structure for table `masuk`
--

CREATE TABLE `masuk` (
  `idmasuk` int(11) NOT NULL,
  `idbarang` int(11) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp(),
  `no_grn` int(11) NOT NULL,
  `supplier_code` varchar(15) NOT NULL,
  `supplier_name` varchar(30) NOT NULL,
  `item_code` varchar(15) NOT NULL,
  `keterangan` varchar(20) NOT NULL,
  `UOM` varchar(11) DEFAULT NULL,
  `stock_room` varchar(11) DEFAULT NULL,
  `detail` int(11) DEFAULT NULL,
  `qty` int(11) NOT NULL,
  `price` float NOT NULL,
  `attended_price` float NOT NULL,
  `key_master` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `masuk`
--

INSERT INTO `masuk` (`idmasuk`, `idbarang`, `tanggal`, `no_grn`, `supplier_code`, `supplier_name`, `item_code`, `keterangan`, `UOM`, `stock_room`, `detail`, `qty`, `price`, `attended_price`, `key_master`) VALUES
(1, 1, '2023-08-22 05:12:09', 57678, 'S768G', 'mimin', 'PPCSHLDMN2SGL', 'MODIFIKASI PRINTER', 'UN', 'U1', 1, 2, 17, 17, 'ISPM'),
(13, 4, '2023-05-31 09:13:36', 0, '', '', '', 'Nurdin', NULL, NULL, NULL, 10, 0, 0, ''),
(14, 4, '2023-06-03 05:46:13', 0, '', '', '', 'Nurdin', NULL, NULL, NULL, 50, 0, 0, ''),
(15, 5, '2023-06-03 05:46:23', 0, '', '', '', 'Nurdin', NULL, NULL, NULL, 40, 0, 0, ''),
(16, 6, '2023-08-18 16:52:39', 0, '', '', '', 'KL', NULL, NULL, NULL, 9, 0, 0, ''),
(17, 6, '2023-08-18 16:52:57', 0, '', '', '', 'NM', NULL, NULL, NULL, 8, 0, 0, ''),
(18, 6, '2023-08-18 16:53:23', 0, '', '', '', 'KJ', NULL, NULL, NULL, 9, 0, 0, ''),
(19, 6, '2023-08-18 16:53:41', 0, '', '', '', 'G', NULL, NULL, NULL, 6, 0, 0, ''),
(20, 6, '2023-08-18 16:53:51', 0, '', '', '', '90', NULL, NULL, NULL, 7, 0, 0, ''),
(21, 6, '2023-08-18 16:54:02', 0, '', '', '', 'D', NULL, NULL, NULL, 1, 0, 0, ''),
(22, 6, '2023-08-18 16:54:10', 0, '', '', '', 'S', NULL, NULL, NULL, 22, 0, 0, ''),
(23, 6, '2023-08-18 16:54:18', 0, '', '', '', 'DF', NULL, NULL, NULL, 4, 0, 0, ''),
(24, 6, '2023-08-18 16:54:26', 0, '', '', '', 'F', NULL, NULL, NULL, 4, 0, 0, ''),
(25, 6, '2023-08-18 16:54:37', 0, '', '', '', 'HB', NULL, NULL, NULL, 6, 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE `stock` (
  `idbarang` int(11) NOT NULL,
  `nama_barang` varchar(30) NOT NULL,
  `Date` date NOT NULL DEFAULT current_timestamp(),
  `no_grn` int(11) NOT NULL,
  `supplier_code` varchar(15) NOT NULL,
  `supplier_name` varchar(30) NOT NULL,
  `item_code` varchar(15) NOT NULL,
  `description` varchar(30) NOT NULL,
  `UOM` varchar(11) NOT NULL,
  `stock_room` varchar(11) NOT NULL,
  `detail` int(11) NOT NULL,
  `stock` int(11) NOT NULL,
  `price` float NOT NULL,
  `attended_price` float NOT NULL,
  `ket` varchar(30) NOT NULL,
  `key_master` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`idbarang`, `nama_barang`, `Date`, `no_grn`, `supplier_code`, `supplier_name`, `item_code`, `description`, `UOM`, `stock_room`, `detail`, `stock`, `price`, `attended_price`, `ket`, `key_master`) VALUES
(4, '', '2023-08-19', 0, '', '', '', '', '', '', 0, 0, 0, 0, '', ''),
(5, '', '2023-08-19', 0, '', '', '', '', '', '', 0, 0, 0, 0, '', ''),
(6, '', '2023-08-19', 0, '', '', '', '', '', '', 0, 0, 0, 0, '', ''),
(8, '', '2023-08-19', 0, '', '', '', '', '', '', 0, 0, 0, 0, '', ''),
(9, '', '2023-08-21', 0, '', '', '', '', '', '', 0, 0, 0, 0, '', ''),
(10, '', '2023-08-21', 0, '', '', '', '', '', '', 0, 0, 0, 0, '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `keluar`
--
ALTER TABLE `keluar`
  ADD PRIMARY KEY (`idkeluar`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`iduser`);

--
-- Indexes for table `masuk`
--
ALTER TABLE `masuk`
  ADD PRIMARY KEY (`idmasuk`);

--
-- Indexes for table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`idbarang`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `keluar`
--
ALTER TABLE `keluar`
  MODIFY `idkeluar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `masuk`
--
ALTER TABLE `masuk`
  MODIFY `idmasuk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `stock`
--
ALTER TABLE `stock`
  MODIFY `idbarang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
