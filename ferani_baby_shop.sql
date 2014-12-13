-- phpMyAdmin SQL Dump
-- version 4.2.13
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 13, 2014 at 03:16 PM
-- Server version: 5.5.40-0ubuntu1
-- PHP Version: 5.5.19-1+deb.sury.org~utopic+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ferani_baby_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
`id_admin` int(15) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama` varchar(25) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `nama`) VALUES
(1, 'admin', 'password', 'Admin Ganteng'),
(3, 'enung8', 'enung', 'Nuraeni');

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE IF NOT EXISTS `barang` (
  `id_barang` varchar(255) NOT NULL,
  `id_kategori` int(5) NOT NULL,
  `nama_barang` varchar(25) NOT NULL,
  `keterangan` text NOT NULL,
  `stok` int(5) NOT NULL,
  `harga` double NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_barang`, `id_kategori`, `nama_barang`, `keterangan`, `stok`, `harga`, `gambar`) VALUES
('SAP2134', 5, 'Baju Bayi', 'Ini tidak dijual', 30, 20000, 'Jellyfish.jpg'),
('MAI3213', 2, 'Mainan Bayi', 'ini juga ga dijual', 19, 10000, 'Lighthouse.jpg'),
('dfdaf', 4, 'dfadf', 'dfg', 43, 2323, '5e314d4cbf3be7f42c724d85ff3f65a1.jpg'),
('dfdg', 1, 'dfdfv', 'dsfsdf', 232, 4334, 'sepatu.jpg'),
('ferfer', 1, 'dsfgdsf', 'ewfwef', 23423, 324234, 'cnqy4fkdrymitqaif8hw.jpg'),
('dfgrg', 5, 'ergf', 'dfgs', 546, 46546, '1297307145_165392947_1-Pictures-of--baju-muslimah-trendyBrooch-Baby-headband.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE IF NOT EXISTS `kategori` (
`id_kategori` int(5) NOT NULL,
  `nama_kategori` varchar(25) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Mainan Anak'),
(2, 'Perlengkapan Tidur Bayi'),
(3, 'Perlengkapan Ibu'),
(4, 'Perlengkapan Makan'),
(5, 'Pakaian Bayi');

-- --------------------------------------------------------

--
-- Table structure for table `keranjang`
--

CREATE TABLE IF NOT EXISTS `keranjang` (
`id_keranjang` int(11) NOT NULL,
  `id_product` varchar(25) NOT NULL,
  `id_session` varchar(255) NOT NULL,
  `tgl_keranjang` datetime NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `konfirmasi`
--

CREATE TABLE IF NOT EXISTS `konfirmasi` (
`id_konfirmasi` int(5) NOT NULL,
  `id_pesan` varchar(25) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `bank_pemilik` varchar(25) NOT NULL,
  `pemilik` varchar(25) NOT NULL,
  `norekening` varchar(25) NOT NULL,
  `bank_tujuan` varchar(25) NOT NULL,
  `jumlah_transfer` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `email` varchar(25) NOT NULL,
  `alamat` text NOT NULL,
  `telepon` varchar(25) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `konfirmasi`
--

INSERT INTO `konfirmasi` (`id_konfirmasi`, `id_pesan`, `nama`, `bank_pemilik`, `pemilik`, `norekening`, `bank_tujuan`, `jumlah_transfer`, `tanggal`, `email`, `alamat`, `telepon`) VALUES
(1, '141213112547', 'Wahyu', 'BCA', 'Wahyu Taufik', '09877677', 'BCA', '', '2014-12-12', 'wahyutaufik37@gmail.com', 'X', '00000666'),
(2, '141213021656', 'samson', 'Mandiri', 'Samsons', '08777610', 'Mandiri', '', '2014-12-13', 'sacktiawan@gmail.com', 'Jalan gunuk', '098827272828'),
(3, '141213022404', 'susi', 'BCA', 'Susi', '9873782', 'BCA', '30000', '2014-12-13', 'susi@gmail.com', 'Jalan gunuk', '087363663'),
(4, '141213023116', 'Mandiri', 'Mandiri', 'Manidir', '09737378', 'Mandiri', '32323', '1970-01-01', 'mokydihagy@hotmail.com', 'mansdnin', '923948738'),
(5, '1', 'Wahyu', 'BCA', 'Wahyu Taufik', '09877677', 'BCA', '32122', '2014-12-13', 'wahyutaufik37@gmail.com', 'X', '00000666');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE IF NOT EXISTS `pelanggan` (
  `id_pelanggan` int(8) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `alamat` text NOT NULL,
  `email` varchar(25) NOT NULL,
  `telepon` varchar(20) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE IF NOT EXISTS `pesan` (
  `id_pesan` varchar(6) NOT NULL,
  `id_pelanggan` int(5) NOT NULL,
  `status_pesan` varchar(10) NOT NULL,
  `total_harga` double NOT NULL,
  `tgl_pesan` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE IF NOT EXISTS `pesanan` (
`id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `id_product` varchar(25) NOT NULL,
  `jumlah` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `id_pemesan` varchar(255) NOT NULL,
  `invoice_no` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'New'
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pesanan`
--

INSERT INTO `pesanan` (`id`, `name`, `email`, `phone`, `address`, `id_product`, `jumlah`, `tanggal`, `id_pemesan`, `invoice_no`, `status`) VALUES
(1, 'Wahyu Taufik', 'wahyutaufik37@gmail.com', '085777160010', 'Jalan Kedamaian', 'SAP2134', '1', '2014-12-13', '89f7hum6amn2qd3mb6umjij9h0', '141213112547', 'Lunas'),
(2, 'Wahyu Taufik', 'wahyutaufik37@gmail.com', '085777160010', 'Jalan Kedamaian', 'MAI3213', '1', '2014-12-13', '89f7hum6amn2qd3mb6umjij9h0', '141213112547', 'Lunas'),
(3, 'Mala', 'mala@gmail.com', '800383993', 'Malaa', 'ferfer', '1', '2014-12-13', '89f7hum6amn2qd3mb6umjij9h0', '141213020603', 'New'),
(4, 'Mala', 'mala@gmail.com', '800383993', 'Malaa', 'SAP2134', '2', '2014-12-13', '89f7hum6amn2qd3mb6umjij9h0', '141213020603', 'New'),
(5, 'Arif', 'arif@gmail.com', '08677665768', 'Jalan jalan', 'MAI3213', '1', '2014-12-13', '89f7hum6amn2qd3mb6umjij9h0', '141213021347', 'New'),
(6, 'Arif', 'arif@gmail.com', '08677665768', 'Jalan jalan', 'SAP2134', '1', '2014-12-13', '89f7hum6amn2qd3mb6umjij9h0', '141213021347', 'New'),
(7, 'samson', 'wahyutaufik37@gmail.com', '08878788272', 'samson', 'SAP2134', '1', '2014-12-13', 'eiosl5p5hi3h0s8o27gbtvbq02', '141213021656', 'Lunas'),
(8, 'samson', 'wahyutaufik37@gmail.com', '08878788272', 'samson', 'MAI3213', '1', '2014-12-13', 'eiosl5p5hi3h0s8o27gbtvbq02', '141213021656', 'Lunas'),
(9, 'susi', 'susi@gmail.com', '073663', 'Jalan kaget', 'SAP2134', '1', '2014-12-13', 'ojattikc6mdesh2f9mmvt23ai4', '141213022404', 'Lunas'),
(10, 'susi', 'susi@gmail.com', '073663', 'Jalan kaget', 'MAI3213', '1', '2014-12-13', 'ojattikc6mdesh2f9mmvt23ai4', '141213022404', 'Lunas'),
(11, 'Mandiri', 'mala@gmail.com', '085777160010', 'Jalan madiri', 'SAP2134', '1', '2014-12-13', '0ts47pm2fj8s4aoh96hg0856e1', '141213023116', 'Lunas'),
(12, 'Mandiri', 'mala@gmail.com', '085777160010', 'Jalan madiri', 'MAI3213', '1', '2014-12-13', '0ts47pm2fj8s4aoh96hg0856e1', '141213023116', 'Lunas'),
(13, 'Mandiri', 'mala@gmail.com', '085777160010', 'Jalan madiri', 'dfdaf', '1', '2014-12-13', '0ts47pm2fj8s4aoh96hg0856e1', '141213023116', 'Lunas');

-- --------------------------------------------------------

--
-- Table structure for table `pesan_detail`
--

CREATE TABLE IF NOT EXISTS `pesan_detail` (
  `id_pesan` varchar(6) NOT NULL,
  `id_barang` int(5) NOT NULL,
  `jumlah` int(10) NOT NULL,
  `harga` double NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
 ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
 ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `keranjang`
--
ALTER TABLE `keranjang`
 ADD PRIMARY KEY (`id_keranjang`);

--
-- Indexes for table `konfirmasi`
--
ALTER TABLE `konfirmasi`
 ADD PRIMARY KEY (`id_konfirmasi`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
 ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
 ADD PRIMARY KEY (`id_pesan`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
MODIFY `id_admin` int(15) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
MODIFY `id_kategori` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `keranjang`
--
ALTER TABLE `keranjang`
MODIFY `id_keranjang` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `konfirmasi`
--
ALTER TABLE `konfirmasi`
MODIFY `id_konfirmasi` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
