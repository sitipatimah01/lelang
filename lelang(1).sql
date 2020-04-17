-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2020 at 11:37 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.1.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lelang`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id_barang` int(11) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `tgl` date NOT NULL,
  `harga_awal` bigint(15) NOT NULL,
  `deskripsi_barang` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_barang`, `nama_barang`, `tgl`, `harga_awal`, `deskripsi_barang`) VALUES
(101, 'televisi', '2020-02-25', 200000, 'TV antik bukan kaleng kaleng.'),
(102, 'kulkas', '2020-02-26', 500000, 'kulkas anti panas'),
(106, 'laptop', '2020-03-14', 500000, 'no minus'),
(107, 'komputer', '2020-03-29', 1000000, 'join join lah'),
(108, 'laptop', '2020-04-08', 500000, 'laptop'),
(110, 'televisi jadoel', '2020-04-17', 3000000, 'televisi jaman dulu antik');

-- --------------------------------------------------------

--
-- Table structure for table `contoh`
--

CREATE TABLE `contoh` (
  `id_transaksi` int(11) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `harga_awal` bigint(15) NOT NULL,
  `harga_tawar` bigint(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contoh`
--

INSERT INTO `contoh` (`id_transaksi`, `nama_lengkap`, `nama_barang`, `harga_awal`, `harga_tawar`) VALUES
(1, '', 'televisi antik', 500000, 0),
(2, '', 'komputer jadoel', 700000, 0),
(3, '', 'radio antik', 200000, 0),
(4, '', 'Gramophone (pemutar piringan hitam)', 300000, 0),
(5, '', 'Guci antik', 500000, 0),
(6, '', 'kamera jadoel', 800000, 0),
(14, 'ahsjdg', 'televisi antik', 500000, 4000000),
(15, 'ahsjdg', 'televisi antik', 500000, 4000000),
(18, 'irsan', 'komputer jadoel', 700000, 1300000),
(19, 'irsan', 'radio antik', 200000, 1200000);

-- --------------------------------------------------------

--
-- Table structure for table `history_lelang`
--

CREATE TABLE `history_lelang` (
  `id_history_lelang` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_lelang` int(11) NOT NULL,
  `penawaran_harga` bigint(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `history_lelang`
--

INSERT INTO `history_lelang` (`id_history_lelang`, `id_user`, `id_lelang`, `penawaran_harga`) VALUES
(4002, 1, 3001, 1300000),
(4005, 4, 3001, 500000),
(4006, 8, 3008, 3000000);

-- --------------------------------------------------------

--
-- Table structure for table `lelang`
--

CREATE TABLE `lelang` (
  `id_lelang` int(11) NOT NULL,
  `id_petugas` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `tgl_lelang` date NOT NULL,
  `harga_akhir` bigint(15) NOT NULL,
  `status` enum('dibuka','ditutup') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lelang`
--

INSERT INTO `lelang` (`id_lelang`, `id_petugas`, `id_barang`, `tgl_lelang`, `harga_akhir`, `status`) VALUES
(3001, 2001, 101, '2020-02-25', 1000000, 'dibuka'),
(3002, 2002, 102, '2020-02-26', 1500000, 'dibuka'),
(3006, 2001, 101, '2020-03-27', 1500000, 'dibuka'),
(3008, 2001, 106, '2020-03-28', 2000000, 'ditutup');

-- --------------------------------------------------------

--
-- Table structure for table `level`
--

CREATE TABLE `level` (
  `id_level` int(11) NOT NULL,
  `level` enum('administrator','petugas') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `level`
--

INSERT INTO `level` (`id_level`, `level`) VALUES
(1002, 'administrator'),
(1015, 'petugas'),
(1021, 'administrator');

-- --------------------------------------------------------

--
-- Table structure for table `masyarakat`
--

CREATE TABLE `masyarakat` (
  `id_user` int(11) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(60) NOT NULL,
  `telp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `masyarakat`
--

INSERT INTO `masyarakat` (`id_user`, `nama_lengkap`, `username`, `password`, `telp`) VALUES
(1, 'steven cau', 'steven123', '1234', '089619331607'),
(2, 'ucok baba', 'ucok5678', '5678', '089678921023'),
(4, 'Dwi lestari', 'dewi01', 'dewi01', '083872520822'),
(5, 'Dwi lestari', 'dewi01', 'dewi01', '083872520822'),
(8, 'irsan', 'abahgote2', '12', '087643457'),
(9, 'verra', 'della', '123', '083872520833');

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `id_petugas` int(11) NOT NULL,
  `id_level` int(11) NOT NULL,
  `nama_petugas` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`id_petugas`, `id_level`, `nama_petugas`, `username`, `password`) VALUES
(2001, 1002, 'siti patimah', 'docil001', 'abc1234'),
(2002, 1002, 'siti amelia', 'amelia09', 'amelia09'),
(2003, 1002, 'verra della sari', 'verra28', '1234'),
(2004, 1002, 'irsan maulana', 'irsan29', '5678'),
(2005, 1002, 'tesa safitri', 'tesasftri15', '151202'),
(2006, 1002, 'mukhlis abdul rahman', 'mukhlis001', '123456'),
(2007, 1002, 'm brany oka saputra', 'okasaputra01', 'abcd');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_pelelang` int(11) NOT NULL,
  `nama_pelelang` varchar(50) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `harga_tawar` bigint(15) NOT NULL,
  `jumlah_barang` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_pelelang`, `nama_pelelang`, `nama_barang`, `harga_tawar`, `jumlah_barang`) VALUES
(1001, 'tati', 'laptop', 2000000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_pengguna` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(60) NOT NULL,
  `email` varchar(50) NOT NULL,
  `level` enum('administrator','petugas') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_pengguna`, `nama`, `username`, `password`, `email`, `level`) VALUES
(18, 'verra', 'verrads', '123', 'verrads@gmail.com', 'administrator'),
(19, 'dea', 'dea01', '456', 'dea@gmail.com', 'petugas'),
(20, 'Refi Muhammad Rizki', 'refi14', 'refimr14', 'refimrizki77@gmail.com', 'petugas'),
(21, 'verra della sari', 'verra28', '123456789', 'verrads@gmail.com', 'administrator'),
(22, 'verra della sari', 'verra01', '123456789', 'verrads@gmail.com', 'administrator'),
(23, 'dea', 'dea02', '4567', 'dea@gmail.com', 'petugas'),
(24, 'verra della sari', 'verra28', 'maret', 'verrads@gmail.com', 'petugas'),
(25, 'petugas', 'petugas02', '123456', 'petugas@gmail.com', 'administrator'),
(26, 'verra della sari', 'verra03', 'maret', 'verrads@gmail.com', 'administrator'),
(27, 'sarah melany', 'melany07', '12345678', 'sarahmelany@gmail.com', 'petugas'),
(28, 'irsan', 'maulana', '123', 'irsanmaulana 123@gmail.com', 'administrator'),
(29, 'irsan', 'maulana', '123', 'irsanmaulana123gmail.com', 'administrator'),
(30, 'irsan', 'maulana', '123', 'irsan123@gmail.com', 'administrator'),
(31, 'irsan', 'maulana', '123', 'irsan123@gmail.com', 'administrator'),
(32, 'irsan', 'maulana', '123', 'irsan123@gmail.com', 'administrator'),
(33, 'juded', 'oded', '123', 'oded123@gmail.com', 'petugas'),
(34, 'verra della sari', 'verra28', '123456', 'verrads@gmail.com', 'administrator');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `contoh`
--
ALTER TABLE `contoh`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indexes for table `history_lelang`
--
ALTER TABLE `history_lelang`
  ADD PRIMARY KEY (`id_history_lelang`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_lelang` (`id_lelang`);

--
-- Indexes for table `lelang`
--
ALTER TABLE `lelang`
  ADD PRIMARY KEY (`id_lelang`),
  ADD KEY `id_petugas` (`id_petugas`),
  ADD KEY `id_barang` (`id_barang`);

--
-- Indexes for table `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`id_level`);

--
-- Indexes for table `masyarakat`
--
ALTER TABLE `masyarakat`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id_petugas`),
  ADD KEY `id_level` (`id_level`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_pelelang`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;

--
-- AUTO_INCREMENT for table `contoh`
--
ALTER TABLE `contoh`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `history_lelang`
--
ALTER TABLE `history_lelang`
  MODIFY `id_history_lelang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4008;

--
-- AUTO_INCREMENT for table `lelang`
--
ALTER TABLE `lelang`
  MODIFY `id_lelang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3009;

--
-- AUTO_INCREMENT for table `level`
--
ALTER TABLE `level`
  MODIFY `id_level` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1022;

--
-- AUTO_INCREMENT for table `masyarakat`
--
ALTER TABLE `masyarakat`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id_petugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2008;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_pelelang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1002;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `history_lelang`
--
ALTER TABLE `history_lelang`
  ADD CONSTRAINT `history_lelang_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `masyarakat` (`id_user`),
  ADD CONSTRAINT `history_lelang_ibfk_2` FOREIGN KEY (`id_lelang`) REFERENCES `lelang` (`id_lelang`);

--
-- Constraints for table `lelang`
--
ALTER TABLE `lelang`
  ADD CONSTRAINT `lelang_ibfk_1` FOREIGN KEY (`id_barang`) REFERENCES `barang` (`id_barang`),
  ADD CONSTRAINT `lelang_ibfk_2` FOREIGN KEY (`id_petugas`) REFERENCES `petugas` (`id_petugas`);

--
-- Constraints for table `petugas`
--
ALTER TABLE `petugas`
  ADD CONSTRAINT `petugas_ibfk_1` FOREIGN KEY (`id_level`) REFERENCES `level` (`id_level`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
