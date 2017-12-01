-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 12, 2017 at 04:14 AM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `findlaundry`
--

-- --------------------------------------------------------

--
-- Table structure for table `jasa`
--

CREATE TABLE `jasa` (
  `idKategori` varchar(11) NOT NULL,
  `namaKategori` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jasa`
--

INSERT INTO `jasa` (`idKategori`, `namaKategori`) VALUES
('K001', 'Laundry Kilo'),
('K002', 'Laundry Satuan'),
('K003', 'Dry Cleaning');

-- --------------------------------------------------------

--
-- Table structure for table `kodejasa`
--

CREATE TABLE `kodejasa` (
  `idKodeJasa` int(11) NOT NULL,
  `idLaundry` varchar(11) NOT NULL,
  `idKategori` varchar(11) NOT NULL,
  `namaLayanan` varchar(25) NOT NULL,
  `minimalOrder` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `satuan` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kodejasa`
--

INSERT INTO `kodejasa` (`idKodeJasa`, `idLaundry`, `idKategori`, `namaLayanan`, `minimalOrder`, `harga`, `satuan`) VALUES
(1, '1', 'K001', 'Cuci Kering Lipat', 2, 5000, 'kg'),
(2, '1', 'K002', 'Kebayak', 3, 45000, 'pcs'),
(3, '4', 'K003', 'karpet', 1, 100000, 'pcs'),
(6, '2', 'K003', 'blazer', 1, 45000, 'pcs'),
(7, '6', 'K002', 'Kebayak', 1, 90000, 'pcs'),
(9, '3', 'K001', 'cuci setrika', 3, 6000, 'kg'),
(10, '1', 'K001', 'cuci kering setrika', 2, 7000, 'kg'),
(11, '5', 'K001', 'hanya cuci', 1, 4000, 'kg'),
(12, '4', 'K002', 'Kebayak', 1, 45000, 'pcs'),
(13, '', 'K001', 'Cuci Kering Setrika', 2, 4000, 'kg'),
(17, '', 'K001', 'Satrika', 2, 5000, 'kg'),
(18, '', 'K001', 'Cuci cucian', 2, 7000, 'kg'),
(19, '', 'K002', 'bed cover', 1, 120000, 'pcs');

-- --------------------------------------------------------

--
-- Table structure for table `laundry`
--

CREATE TABLE `laundry` (
  `idLaundry` int(11) NOT NULL,
  `idUser` int(11) NOT NULL,
  `namaLaundry` varchar(35) NOT NULL,
  `email` varchar(35) NOT NULL,
  `noTelpon` varchar(14) NOT NULL,
  `surat` varchar(45) NOT NULL,
  `alamat` text NOT NULL,
  `provinsi` varchar(30) NOT NULL,
  `kota` varchar(30) NOT NULL,
  `kecamatan` varchar(30) NOT NULL,
  `kelurahan` varchar(30) NOT NULL,
  `kodePos` varchar(15) NOT NULL,
  `gambar` varchar(60) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `laundry`
--

INSERT INTO `laundry` (`idLaundry`, `idUser`, `namaLaundry`, `email`, `noTelpon`, `surat`, `alamat`, `provinsi`, `kota`, `kecamatan`, `kelurahan`, `kodePos`, `gambar`, `deskripsi`) VALUES
(1, 1, 'Happy Laundry', 'happylaundry@gmail.com', '0211875678', '09021181520023', 'jalan kolonel sulaiman amin', 'Sumatera Selatan', 'Palembang', 'Alang - Alang Lebar', 'Karya Baru', '30152', 'laundry4.jpg', 'Dengan senang hati melayani'),
(2, 2, 'Neo Laundry', 'neolaundry@gmail.com', '0711-899999', '09021181520023', 'jalan suka maju lorong mundur', 'Sumatera Selatan', 'Palembang', 'Sukarami', 'maskarebet', '30153', 'laundry3.jpg', 'Terpercaya dan aman'),
(3, 3, 'Laundry Bersahaja', 'bersahaja@gmail.com', '012567890', '09021181520045', 'Jalan kebahagian no 10', 'Sumatera Selatan', 'Palembang', 'Sako', 'Kenten', '30187', 'laundry2.jpg', 'Anda senang kami senang'),
(4, 1, 'KlinKlin', 'klinklin@gmail.com', '08127986754', '090211815345', 'Jalan kelapa indah nusantara blok d', 'Sumatera Selatan', 'Muara Enim', 'Bua Bua', 'Kolala', '3456', 'laundry.jpg', 'Siapa yang kesini akan mendapatkan hasil memuaskan '),
(5, 1, 'Buntalan Laundry', 'buntalanlaundry@gmail.com', '0897887878', '09021181520034', 'Jalan kemaren sore lorong merpati', '', '', '', '', '301977', '5.jpg', 'Layanan kami yang nomor satu'),
(6, 5, 'Clean Laundry', 'cleanlaundry@gmail.com', '0211875678', '09876543311', 'jalan kolonel haji burlian', '', '', '', '', '34677', '3.jpg', 'Bersih bersama kami'),
(11, 0, 'Laundry Sejahtera', 'laundrysejahtera@gmail.com', '0897887878', '09021181520034', 'Jalan sejahtera insya Allah', '', '', '', '', '30152', 'laundry4.jpg', 'Laundry kami sangat lengkap');

-- --------------------------------------------------------

--
-- Table structure for table `pewangi`
--

CREATE TABLE `pewangi` (
  `idPewangi` int(11) NOT NULL,
  `namaPewangi` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tipelama`
--

CREATE TABLE `tipelama` (
  `idTipeLama` varchar(11) NOT NULL,
  `namaTipe` varchar(25) NOT NULL,
  `jangka` time NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tipepengiriman`
--

CREATE TABLE `tipepengiriman` (
  `namaPengiriman` varchar(10) NOT NULL,
  `jangka` varchar(7) NOT NULL,
  `hargaTambahan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tipepengiriman`
--

INSERT INTO `tipepengiriman` (`namaPengiriman`, `jangka`, `hargaTambahan`) VALUES
('Express', '2-3', 5000),
('Fast', '1', 10000),
('Reguler', '4-5', 0);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `idTransaksi` varchar(11) NOT NULL,
  `idLaundry` varchar(11) NOT NULL,
  `idUser` varchar(11) NOT NULL,
  `idTipe` varchar(11) NOT NULL,
  `tanggalOrder` date NOT NULL,
  `tglPenjemputan` date NOT NULL,
  `tglPengembalian` date NOT NULL,
  `alamatPenjemputan` text NOT NULL,
  `alamatPengembalian` text NOT NULL,
  `totalPesanan` int(11) NOT NULL,
  `statusPesanan` enum('pickup','processing','packing','delivery') NOT NULL,
  `konfirmasiPesanan` enum('in progress','completed') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`idTransaksi`, `idLaundry`, `idUser`, `idTipe`, `tanggalOrder`, `tglPenjemputan`, `tglPengembalian`, `alamatPenjemputan`, `alamatPengembalian`, `totalPesanan`, `statusPesanan`, `konfirmasiPesanan`) VALUES
('TR001', 'L001', '1', '', '0000-00-00', '2017-07-07', '2017-07-11', '', '', 100000, 'pickup', 'in progress');

-- --------------------------------------------------------

--
-- Table structure for table `upload`
--

CREATE TABLE `upload` (
  `id` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `idUser` int(11) NOT NULL,
  `namaLengkap` varchar(25) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(36) NOT NULL,
  `email` varchar(25) NOT NULL,
  `level` enum('admin','member','owner') DEFAULT NULL,
  `noHp` varchar(14) NOT NULL,
  `alamat` text NOT NULL,
  `provinsi` varchar(15) NOT NULL,
  `kota` varchar(15) NOT NULL,
  `kecamatan` varchar(15) NOT NULL,
  `kelurahan` varchar(15) NOT NULL,
  `kodePos` varchar(7) NOT NULL,
  `gambar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`idUser`, `namaLengkap`, `username`, `password`, `email`, `level`, `noHp`, `alamat`, `provinsi`, `kota`, `kecamatan`, `kelurahan`, `kodePos`, `gambar`) VALUES
(1, 'Achi Aprilia A', 'apriliaaachi', '89486881ff40c7ac9930f73811091fda', 'achiaprilia.aa@gmail.com', 'member', '089666878989', 'jalan kolonel sulaiman amin komplek pepabri blok i no 11 rt 39 rw 07', 'Sumatera Selata', 'Palembang', 'Alang - Alang L', 'Karya Baru', '30152', 'achi.jpg'),
(2, 'Chilia Chiliata', 'chilia', 'e10adc3949ba59abbe56e057f20f883e', 'achi@gmail.com', 'admin', '081958167682', 'jalan kolonel sulaiman amin komplek pepabri blok i no 11 rt 39 rw 07', '', '', '', '', '', 'user.png'),
(3, 'Aprilia Achi Hulala', 'achiaprilia', 'e10adc3949ba59abbe56e057f20f883e', 'aprilia_achi@ymail.com', 'member', '081279861165', 'jalan kolonel sulaiman amin komplek pepabri blok i no 11 rt 39 rw 07', '', '', '', '', '', 'user.png'),
(4, 'elangkus', 'kuskus', '89486881ff40c7ac9930f73811091fda', 'elangkus@gmail.com', 'member', '098345666666', 'jalan kolonel sulaiman amin komplek pepabri blok i no 11 rt 39 rw 07', '', '', '', '', '', 'user.png'),
(5, 'Angga Wijaya', 'apriliaaachi', '89486881ff40c7ac9930f73811091fda', 'angga.wijaya@gmail.com', 'member', '08766666666', 'jalan kolonel sulaiman amin komplek pepabri blok i no 11 rt 39 rw 07', '', '', '', '', '', 'user.png'),
(7, 'Sulaiman', 'sulsualman', '89486881ff40c7ac9930f73811091fda', 'sulaiman@gmail.com', 'member', '089666666', 'jalan kolonel sulaiman amin komplek pepabri blok i no 11 rt 39 rw 07', '', '', '', '', '', 'user.png'),
(10, 'lifya fitriani', 'fitrianilifya', '89486881ff40c7ac9930f73811091fda', 'fitrianilifya@gmail.com', 'member', '', '', '', '', '', '', '', 'user.png'),
(13, 'Suparjo', 'suparjojojo', '89486881ff40c7ac9930f73811091fda', 'suparjo@gmail.com', 'member', '08766666666', '', '', '', '', '', '', 'user.png'),
(15, 'Sari Rahman', 'sarirahman', '89486881ff40c7ac9930f73811091fda', 'sarirahman@gmail.com', 'owner', '08766666666', '', '', '', '', '', '', 'user.png'),
(19, 'Mumble', 'mumble', '89486881ff40c7ac9930f73811091fda', 'mumble@gmail.com', 'member', '', '', '', '', '', '', '', 'user.png'),
(20, 'Milo si Kucing', 'milounyuk', '89486881ff40c7ac9930f73811091fda', 'milomilo@gmail.com', 'member', '089666878989', '', '', '', '', '', '', 'user.png'),
(21, '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', 'owner', '', '', '', '', '', '', '', 'user.png');

-- --------------------------------------------------------

--
-- Table structure for table `wilayahkecamatan`
--

CREATE TABLE `wilayahkecamatan` (
  `idKecamatan` int(11) NOT NULL,
  `idKota` int(11) NOT NULL,
  `namaKecamatan` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wilayahkecamatan`
--

INSERT INTO `wilayahkecamatan` (`idKecamatan`, `idKota`, `namaKecamatan`) VALUES
(1, 1, 'Alang - Alang Lebar'),
(2, 1, 'Sukarami');

-- --------------------------------------------------------

--
-- Table structure for table `wilayahkota`
--

CREATE TABLE `wilayahkota` (
  `idKota` int(11) NOT NULL,
  `idProvinsi` int(11) NOT NULL,
  `namaKota` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wilayahkota`
--

INSERT INTO `wilayahkota` (`idKota`, `idProvinsi`, `namaKota`) VALUES
(1, 1, 'Palembang'),
(2, 1, 'Lahat');

-- --------------------------------------------------------

--
-- Table structure for table `wilayahprovinsi`
--

CREATE TABLE `wilayahprovinsi` (
  `idProvinsi` int(11) NOT NULL,
  `namaProvinsi` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wilayahprovinsi`
--

INSERT INTO `wilayahprovinsi` (`idProvinsi`, `namaProvinsi`) VALUES
(1, 'Sumatera Selatan'),
(2, 'Sumatera Barat');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jasa`
--
ALTER TABLE `jasa`
  ADD PRIMARY KEY (`idKategori`);

--
-- Indexes for table `kodejasa`
--
ALTER TABLE `kodejasa`
  ADD PRIMARY KEY (`idKodeJasa`),
  ADD KEY `idLaundry` (`idLaundry`),
  ADD KEY `idKategori` (`idKategori`);

--
-- Indexes for table `laundry`
--
ALTER TABLE `laundry`
  ADD PRIMARY KEY (`idLaundry`),
  ADD KEY `idUser` (`idUser`);

--
-- Indexes for table `pewangi`
--
ALTER TABLE `pewangi`
  ADD PRIMARY KEY (`idPewangi`);

--
-- Indexes for table `tipelama`
--
ALTER TABLE `tipelama`
  ADD PRIMARY KEY (`idTipeLama`);

--
-- Indexes for table `tipepengiriman`
--
ALTER TABLE `tipepengiriman`
  ADD PRIMARY KEY (`namaPengiriman`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`idTransaksi`),
  ADD KEY `idLaundry` (`idLaundry`),
  ADD KEY `idUser` (`idUser`),
  ADD KEY `idTipe` (`idTipe`);

--
-- Indexes for table `upload`
--
ALTER TABLE `upload`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`idUser`);

--
-- Indexes for table `wilayahkecamatan`
--
ALTER TABLE `wilayahkecamatan`
  ADD PRIMARY KEY (`idKecamatan`),
  ADD KEY `idKota` (`idKota`);

--
-- Indexes for table `wilayahkota`
--
ALTER TABLE `wilayahkota`
  ADD PRIMARY KEY (`idKota`),
  ADD KEY `idProvinsi` (`idProvinsi`);

--
-- Indexes for table `wilayahprovinsi`
--
ALTER TABLE `wilayahprovinsi`
  ADD PRIMARY KEY (`idProvinsi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kodejasa`
--
ALTER TABLE `kodejasa`
  MODIFY `idKodeJasa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `laundry`
--
ALTER TABLE `laundry`
  MODIFY `idLaundry` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `pewangi`
--
ALTER TABLE `pewangi`
  MODIFY `idPewangi` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `upload`
--
ALTER TABLE `upload`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `wilayahkecamatan`
--
ALTER TABLE `wilayahkecamatan`
  MODIFY `idKecamatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `wilayahkota`
--
ALTER TABLE `wilayahkota`
  MODIFY `idKota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `wilayahprovinsi`
--
ALTER TABLE `wilayahprovinsi`
  MODIFY `idProvinsi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
