-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 05, 2021 at 06:25 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `putriangkasa`
--

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `ID` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `harga` int(11) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`ID`, `nama`, `harga`, `deskripsi`, `gambar`) VALUES
(8, 'Ayam Krispi Spesial', 25000, 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Natus corrupti debitis mollitia unde minus dignissimos!\r\nVoluptatem praesentium molestias porro! Dolore veniam consequatur cupiditate cum officia!\r\n', 'Food1.jpg'),
(9, 'Salad Avocado', 30000, 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Natus corrupti debitis mollitia unde minus dignissimos! Voluptatem praesentium molestias porro!\r\nDolore veniam consequatur cupiditate cum officia!\r\n', 'Food2.jpg'),
(10, 'Pizza Pitza', 25000, 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Natus corrupti debitis mollitia unde minus dignissimos! Voluptatem praesentium molestias porro! Dolore veniam consequatur cupiditate cum officia!\r\n', 'Food3.jpg'),
(11, 'Sea Food Laut', 40500, 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Natus corrupti debitis mollitia unde minus dignissimos! Voluptatem praesentium molestias porro! Dolore veniam consequatur cupiditate cum officia!', 'Food4.jpg'),
(12, 'Beefstick Daging', 80000, 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Natus corrupti debitis mollitia unde minus dignissimos! Voluptatem praesentium molestias porro! Dolore veniam consequatur cupiditate cum officia!', 'Food5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `ID_pesanan` int(11) NOT NULL,
  `nama_pelanggan` varchar(255) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `alamat` text NOT NULL,
  `deskripsi` text NOT NULL,
  `total_harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `level`) VALUES
('admin', 'admin', 'admin'),
('user', 'user', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`ID_pesanan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `ID_pesanan` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
