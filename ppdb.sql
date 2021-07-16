-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 16, 2021 at 07:35 PM
-- Server version: 10.3.29-MariaDB-0+deb10u1
-- PHP Version: 7.3.27-1~deb10u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ppdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `ppdb_id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nisn` varchar(15) CHARACTER SET latin1 DEFAULT NULL,
  `nama_lengkap` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `tmp_lahir` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `jenkel` varchar(15) CHARACTER SET latin1 DEFAULT NULL,
  `asal_sekolah` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `nama_ayah` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `nama_ibu` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `alamat` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `no_telp` varchar(15) CHARACTER SET latin1 DEFAULT NULL,
  `jurusan` varchar(25) DEFAULT NULL,
  `tgl_daftar` date DEFAULT NULL,
  `agama` varchar(25) DEFAULT NULL,
  `jenis_tinggal` varchar(25) DEFAULT NULL,
  `transportasi` varchar(10) DEFAULT NULL,
  `status` int(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pendaftaran`
--

INSERT INTO `pendaftaran` (`ppdb_id`, `id_user`, `nisn`, `nama_lengkap`, `tgl_lahir`, `tmp_lahir`, `jenkel`, `asal_sekolah`, `nama_ayah`, `nama_ibu`, `alamat`, `no_telp`, `jurusan`, `tgl_daftar`, `agama`, `jenis_tinggal`, `transportasi`, `status`) VALUES
(2, 2, '1817051074', 'Aulia Ahmad Nabil', '2021-05-10', 'Bandar Lampung', 'Laki-Laki', 'MTs 2 Bandar Lampung', 'Mujiyono', 'Ani Pujiastuti', 'PRM Nusantara Permai, Sukabumi, Bandar Lampung', '081278317778', 'IPA', '2021-06-27', 'Islam', 'Bersama Orangtua', 'Motor', 1),
(3, 4, '1817051010', 'Thorin Satria Ramadhan', '2021-06-09', 'Hartono', 'Laki-Laki', 'SMP 1 Kalianda', 'Sugianto', 'Sumi', 'Hartono', '08123793451', 'IPA', '2021-06-28', 'Islam', 'Bersama Orangtua', 'Jalan Kaki', -1);

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `id_status` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id_status`, `status`, `keterangan`) VALUES
(1, -1, 'Gagal'),
(2, 0, 'Dalam Proses Peninjauan'),
(3, 1, 'Lulus');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(255) NOT NULL,
  `foto_user` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role_id` int(11) NOT NULL,
  `last_login` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `foto_user`, `username`, `email`, `password`, `role_id`, `last_login`) VALUES
(1, 'Aulia Ahmad Nabil', 'default.png', 'admin', 'admin@ppdb.com', '$2y$10$1wX0tvZ0ReShlmAbmR1c1Or5QhcK2ZOcLoTeBzzlnRPJE3lFQAlv.', 1, '2021-06-29 05:55:30'),
(2, 'Intania Rahmadila', 'default.png', 'intaniarr', 'intaniar@gmail.com', '$2y$10$PzNC9GHZ7yZKz24ciVmyH.t4YKKric6QYnzFfgMVWwtuFztuEiZiG', 2, '2021-06-29 05:54:58'),
(4, 'Thorin Satria Ramadhans', 'default.png', 'thorinsrs', 'thorinsatria12@gmail.com', '$2y$10$w3ZIEWGTPE.r2Ci36QD36e8vusnFJlgFiVLBR3VsNYE/WxkNGMUpO', 2, '2021-06-28 20:56:53'),
(5, 'Angga Pratama', 'default.png', 'anggaprtm', 'angga.zul12@gmail.com', '$2y$10$TVOQ3f4jTMvDoVR.qWN2P.h1kL7T8VVtCltnPqVxIx1y7OwVTW2Pu', 2, '2021-06-29 05:54:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`ppdb_id`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id_status`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  MODIFY `ppdb_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `id_status` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
