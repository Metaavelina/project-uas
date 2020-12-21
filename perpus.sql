-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2020 at 07:03 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpus`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(5) NOT NULL,
  `nama_admin` varchar(25) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_admin`, `username`, `password`) VALUES
(1, 'Meta', 'admin', 'admin'),
(2, 'meta', 'meta', '21232f297a57a5a743894a0e4a801fc3'),
(3, 'Bambang Pamungkas', 'bambang', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE `anggota` (
  `id_anggota` int(5) NOT NULL,
  `nama_anggota` varchar(45) NOT NULL,
  `gender` enum('Laki-Laki','Perempuan') NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(35) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`id_anggota`, `nama_anggota`, `gender`, `no_telp`, `alamat`, `email`, `password`, `gambar`) VALUES
(2, 'Nicholas', 'Laki-Laki', '0896345215678', 'Jl. Kesana Kemari', 'nicholas@gmail.com', '123456', 'gambar1607368137.jpg'),
(3, 'James', 'Laki-Laki', '089798700986', 'Au Ah Gelap', 'james@gmail.com', '202cb962ac59075b964b07152d234b70', 'gambar1607368152.jpg'),
(4, 'Jamet', 'Laki-Laki', '0888187656876', 'Kepo lu', 'jamet@gmail.com', '202cb962ac59075b964b07152d234b70', 'gambar1607368171.jpg'),
(5, 'Meta Avelina', 'Perempuan', '089786547643', 'Telaga Pesona, Cikarang, Jawa Barat', 'metaav@gmail.com', '202cb962ac59075b964b07152d234b70', 'gambar1606573671.jpg'),
(6, 'Daniel Eka', 'Laki-Laki', '08987890009', 'Pesona Laguna 2', 'danielyubals@gmail.com', '202cb962ac59075b964b07152d234b70', 'gambar1607369306.jpg'),
(8, 'Bambang', 'Laki-Laki', '08978909789', 'Dimana-mana hatiku senang', 'bambang@gmail.com', '', 'gambar1607886841.jpg'),
(10, 'Surawati', 'Perempuan', '089709875643', 'Pesona Laguna 1', 'surawati@gmail.com', '', 'gambar1607967659.jpg'),
(11, 'Sutisno', 'Laki-Laki', '08978390467', 'Jl. Dr Sumarno no.47 Cakung Jakarta Timur', 'sutisno@gmail.com', '123', 'gambar1607967437.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id_buku` int(5) NOT NULL,
  `id_kategori` int(5) NOT NULL,
  `judul_buku` varchar(200) NOT NULL,
  `pengarang` varchar(100) NOT NULL,
  `thn_terbit` date NOT NULL,
  `penerbit` varchar(100) NOT NULL,
  `isbn` varchar(100) NOT NULL,
  `jumlah_buku` int(3) NOT NULL,
  `lokasi` enum('Rak 1','Rak 2','Rak 3') NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `tgl_input` date NOT NULL,
  `status_buku` enum('1','0') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id_buku`, `id_kategori`, `judul_buku`, `pengarang`, `thn_terbit`, `penerbit`, `isbn`, `jumlah_buku`, `lokasi`, `gambar`, `tgl_input`, `status_buku`) VALUES
(1, 1, 'Ds Program', 'Meta', '2012-12-12', 'Erlangga', '123456789', 3, 'Rak 1', 'gambar1607961129.jpeg', '2020-10-19', '1'),
(2, 1, 'Programming', 'Meta', '2006-06-06', 'Jack', '22032001', 3, 'Rak 1', 'gambar1603120673.jpg', '2020-12-14', '1'),
(3, 3, 'The book of knowledge', 'Udin', '2000-06-06', 'Ucok', '1557678794978', 5, 'Rak 1', 'gambar1607349184.jpg', '2020-12-01', '1'),
(4, 1, 'Danur', 'Thomas', '2000-12-12', 'Bang Bang Tut', '837415287491', 10, 'Rak 3', 'gambar1606808147.jpg', '2020-12-01', '1'),
(5, 4, 'Cinta Kecoa Terbang', 'Meta Avelina', '2020-12-09', 'Siapa bae dah', '978-3-16-148410-0', 100, 'Rak 1', 'gambar1607335700.jpg', '2020-12-15', '1'),
(9, 3, 'Nina Bobo', 'Meta Avelina', '2020-12-13', 'PT. Gunung Sehari', '9783161484100', 10, 'Rak 1', 'gambar1607964715.jpg', '2020-12-14', '1'),
(10, 3, 'Kancil Dan Kura - Kura', 'Marisi', '2020-12-08', 'PT. Bambang Perkasa', '9783161484100', 10, 'Rak 2', 'gambar1607965170.jpg', '2020-12-14', '1'),
(12, 2, 'Belajar Google Maps di Android Studio', 'Marisi', '2020-12-07', 'PT. Gunung Sehari', '9783161484100', 10, 'Rak 1', 'gambar1607965207.jpeg', '2020-12-15', '1'),
(14, 4, 'Kuntilanak Budek', 'Meta Avelina', '2020-12-14', 'PT. Gunung Sehari', '9783161484100', 2, 'Rak 2', 'gambar1607967253.jpg', '2020-12-15', '1');

-- --------------------------------------------------------

--
-- Table structure for table `detail_pinjam`
--

CREATE TABLE `detail_pinjam` (
  `id_pinjam` int(5) NOT NULL,
  `id_buku` int(5) NOT NULL,
  `tgl_pengembalian` date NOT NULL,
  `denda` double NOT NULL,
  `status_kembali` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_pinjam`
--

INSERT INTO `detail_pinjam` (`id_pinjam`, `id_buku`, `tgl_pengembalian`, `denda`, `status_kembali`) VALUES
(1, 3, '0000-00-00', 0, '0');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(5) NOT NULL,
  `nama_kategori` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Buku Horror'),
(2, 'Buku Pemrograman'),
(3, 'Buku Dongeng'),
(4, 'Buku Komedi');

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman`
--

CREATE TABLE `peminjaman` (
  `id_pinjam` int(5) NOT NULL,
  `tanggal` datetime NOT NULL,
  `id_anggota` int(5) NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `tgl_kembali` date NOT NULL,
  `total_denda` double NOT NULL,
  `status_pinjam` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `peminjaman`
--

INSERT INTO `peminjaman` (`id_pinjam`, `tanggal`, `id_anggota`, `tgl_pinjam`, `tgl_kembali`, `total_denda`, `status_pinjam`) VALUES
(1, '0000-00-00 00:00:00', 1, '2000-12-12', '2020-12-25', 0, '1');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_pinjam` int(11) NOT NULL,
  `tgl_pencatatan` datetime NOT NULL,
  `id_anggota` int(4) NOT NULL,
  `id_buku` int(4) NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `tgl_kembali` date NOT NULL,
  `denda` double NOT NULL,
  `tgl_pengembalian` date NOT NULL,
  `total_denda` double NOT NULL,
  `status_pengembalian` varchar(15) NOT NULL,
  `status_peminjaman` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_pinjam`, `tgl_pencatatan`, `id_anggota`, `id_buku`, `tgl_pinjam`, `tgl_kembali`, `denda`, `tgl_pengembalian`, `total_denda`, `status_pengembalian`, `status_peminjaman`) VALUES
(3, '2020-12-01 14:42:01', 2, 4, '2000-12-12', '2001-01-23', 10000, '2020-12-25', 72760000, '1', '1'),
(6, '2020-12-15 00:42:05', 11, 12, '2020-12-16', '2020-12-19', 10000, '2020-12-23', 40000, '1', '1'),
(7, '2020-12-15 00:43:28', 6, 5, '2020-12-15', '2020-12-19', 10000, '2020-12-31', 120000, '1', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id_anggota`);

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indexes for table `detail_pinjam`
--
ALTER TABLE `detail_pinjam`
  ADD PRIMARY KEY (`id_pinjam`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id_pinjam`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_pinjam`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `anggota`
--
ALTER TABLE `anggota`
  MODIFY `id_anggota` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `id_buku` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `detail_pinjam`
--
ALTER TABLE `detail_pinjam`
  MODIFY `id_pinjam` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `id_pinjam` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_pinjam` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
