-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 29, 2018 at 05:54 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `apotekberkah`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `idAdmin` varchar(6) NOT NULL,
  `unameAdmin` varchar(20) NOT NULL,
  `pwAdmin` varchar(25) NOT NULL,
  `namaAdmin` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`idAdmin`, `unameAdmin`, `pwAdmin`, `namaAdmin`) VALUES
('ADM001', 'admin', 'admin', 'burhan');

-- --------------------------------------------------------

--
-- Table structure for table `keranjang`
--

CREATE TABLE `keranjang` (
  `obat` varchar(150) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `harga` float NOT NULL,
  `total` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `keranjang`
--

INSERT INTO `keranjang` (`obat`, `jumlah`, `harga`, `total`) VALUES
('MDC001', 2, 30000, 120000),
('MDC005', 4, 30000, 120000),
('MDC008', 4, 3000, 12000);

-- --------------------------------------------------------

--
-- Table structure for table `konsumen`
--

CREATE TABLE `konsumen` (
  `idKonsumen` varchar(6) NOT NULL,
  `namaKonsumen` varchar(35) NOT NULL,
  `noHP` int(15) NOT NULL,
  `Alamat` varchar(100) NOT NULL,
  `no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `konsumen`
--

INSERT INTO `konsumen` (`idKonsumen`, `namaKonsumen`, `noHP`, `Alamat`, `no`) VALUES
('CSM001', 'fedy', 2147483647, 'bandung', 2),
('', 'asd', 0, 'asd', 12),
('', 'fedy', 987654, 'aswdca', 13),
('', 'fedy', 98765444, 'barelantan', 14),
('', 'fedy', 98765444, 'barelantan', 15),
('', 'fedy', 98765444, 'barelantan', 16),
('', 'fedy', 98765444, 'barelantan', 17),
('', 'fedy', 987654, 'werf', 18),
('', 'fedy', 987654, 'asdfgh', 19),
('', 'fedy', 987654, 'asdfgh', 20);

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

CREATE TABLE `manager` (
  `idManager` varchar(6) NOT NULL,
  `unameManager` varchar(20) NOT NULL,
  `pwManager` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manager`
--

INSERT INTO `manager` (`idManager`, `unameManager`, `pwManager`) VALUES
('MNG', 'manager', 'manager');

-- --------------------------------------------------------

--
-- Table structure for table `obat`
--

CREATE TABLE `obat` (
  `idObat` varchar(6) NOT NULL,
  `namaObat` varchar(35) NOT NULL,
  `stock` int(5) NOT NULL,
  `keteranganKhasiat` varchar(150) NOT NULL,
  `harga` double NOT NULL,
  `foto` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `obat`
--

INSERT INTO `obat` (`idObat`, `namaObat`, `stock`, `keteranganKhasiat`, `harga`, `foto`) VALUES
('MDC001', 'baygon', 100, 'menyembuhkan FLU', 30000, 'obat.PNG'),
('MDC002', 'asdas', 12, 'wdfsdfds', 2000, 'Capture.JPG'),
('MDC003', 'a', 100, 'abdbbdbdb', 30000, 'obat.PNG'),
('MDC004', 'a', 100, 'abdbbdbdb', 30000, 'obat.PNG'),
('MDC005', 'a', 100, 'abdbbdbdb', 30000, 'obat.PNG'),
('MDC006', 'a', 100, 'abdbbdbdb', 30000, 'Capture.JPG'),
('MDC008', 'vape', 433, 'enak', 3000, 'nomer_5_11.PNG');

-- --------------------------------------------------------

--
-- Table structure for table `pemasokan`
--

CREATE TABLE `pemasokan` (
  `idPemasokan` int(8) NOT NULL,
  `idObat` varchar(6) NOT NULL,
  `idSupplier` varchar(6) NOT NULL,
  `tglPemasokan` varchar(10) NOT NULL,
  `jumlahPemasokan` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pemasokan`
--

INSERT INTO `pemasokan` (`idPemasokan`, `idObat`, `idSupplier`, `tglPemasokan`, `jumlahPemasokan`) VALUES
(1, 'MDC001', 'SUP001', '24-09-1998', 100);

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `idSupplier` varchar(6) NOT NULL,
  `namSupplier` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`idSupplier`, `namSupplier`) VALUES
('sip02', 'assewe'),
('SUP001', 'PT. kimiafarma');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `idTransaksi` int(8) NOT NULL,
  `idKonsumen` varchar(6) NOT NULL,
  `idObat` varchar(6) NOT NULL,
  `statusPesanan` varchar(20) NOT NULL,
  `statusPembayaran` varchar(1) NOT NULL,
  `tglTransaksi` varchar(10) NOT NULL,
  `totalBiaya` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`idAdmin`);

--
-- Indexes for table `konsumen`
--
ALTER TABLE `konsumen`
  ADD PRIMARY KEY (`no`),
  ADD KEY `idKonsumen` (`idKonsumen`) USING BTREE;

--
-- Indexes for table `manager`
--
ALTER TABLE `manager`
  ADD PRIMARY KEY (`idManager`);

--
-- Indexes for table `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`idObat`);

--
-- Indexes for table `pemasokan`
--
ALTER TABLE `pemasokan`
  ADD PRIMARY KEY (`idPemasokan`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`idSupplier`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`idTransaksi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `konsumen`
--
ALTER TABLE `konsumen`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
