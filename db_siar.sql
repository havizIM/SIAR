-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 08, 2018 at 09:46 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_siar`
--

-- --------------------------------------------------------

--
-- Table structure for table `t_admin`
--

CREATE TABLE `t_admin` (
  `id_admin` varchar(5) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(20) NOT NULL,
  `keterangan` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_admin`
--

INSERT INTO `t_admin` (`id_admin`, `username`, `password`, `level`, `keterangan`) VALUES
('AD001', 'admin', '40dc6c3b5c6595384395164908da32c18ae9dfc9', 'Admin', ''),
('AD002', 'Yogi', 'd8ca2cd2609740765c3c01ffb55b4411a8330bad', 'Ketua RW', '005'),
('AD003', 'Hanafi', '0a289766851125be33aded636ba8c6bfeaa58848', 'Ketua RT', '010/005'),
('AD004', 'Zacky', 'c63f31e6ac0091b1aba38f5fa8ec7bedc7586bc1', 'Ketua RT', '001/005');

-- --------------------------------------------------------

--
-- Table structure for table `t_anggota`
--

CREATE TABLE `t_anggota` (
  `NIK` varchar(16) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan','','') NOT NULL,
  `tempat_lahir` varchar(15) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `agama` enum('Islam','Protestan','Katholik','Budha','Hindu','Lainnya') NOT NULL,
  `pendidikan` varchar(20) NOT NULL,
  `pekerjaan` varchar(20) NOT NULL,
  `status_perkawinan` varchar(20) NOT NULL,
  `status_keluarga` enum('Kepala Keluarga','Istri','Anak','') NOT NULL,
  `kewarganegaraan` enum('WNI','WNA','','') NOT NULL,
  `no_password` varchar(16) DEFAULT NULL,
  `no_kitap` varchar(16) DEFAULT NULL,
  `nama_ayah` varchar(100) NOT NULL,
  `nama_ibu` varchar(100) NOT NULL,
  `no_kk` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_anggota`
--

INSERT INTO `t_anggota` (`NIK`, `nama`, `jenis_kelamin`, `tempat_lahir`, `tgl_lahir`, `agama`, `pendidikan`, `pekerjaan`, `status_perkawinan`, `status_keluarga`, `kewarganegaraan`, `no_password`, `no_kitap`, `nama_ayah`, `nama_ibu`, `no_kk`) VALUES
('3173041010920016', 'Haviz Indra Maulana', 'Laki-laki', 'Jakarta', '1992-10-10', 'Islam', 'SLTA', 'Karyawan Swasta', 'Kawin', 'Kepala Keluarga', 'WNI', NULL, NULL, 'Muhammad Hanafi', 'Indrawati', '3173040708151022'),
('3173041706151005', 'Devan Dirgantara Putra', 'Laki-laki', 'Jakarta', '2015-06-17', 'Islam', 'Belum Sekolah', 'Belum Bekerja', 'Belum Kawin', 'Anak', 'WNI', NULL, NULL, 'Haviz Indra Maulana', 'Dian Ratna Sari', '3173040708151022'),
('3173044712160004', 'Kalyssa Innara Putri', 'Perempuan', 'Jakarta', '2016-12-07', 'Islam', 'Belum Sekolah', 'Belum Bekerja', 'Belum Kawin', 'Anak', 'WNI', NULL, NULL, 'Haviz Indra Maulana', 'Dian Ratna Sari', '3173040708151022'),
('3173046711950003', 'Dian Ratna Sari', 'Perempuan', 'Jakarta', '1995-11-27', 'Islam', 'SLTA', 'Karyawan Swasta', 'Kawin', 'Istri', 'WNI', NULL, NULL, 'Sudji', 'Sri Jueni', '3173040708151022');

-- --------------------------------------------------------

--
-- Table structure for table `t_dokumen`
--

CREATE TABLE `t_dokumen` (
  `no_dokumen` varchar(20) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `foto_dokumen` text NOT NULL,
  `no_pengajuan` varchar(13) NOT NULL,
  `tgl_upload` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_keluarga`
--

CREATE TABLE `t_keluarga` (
  `no_kk` varchar(16) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `rt/rw` varchar(10) NOT NULL,
  `tgl_kk` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_keluarga`
--

INSERT INTO `t_keluarga` (`no_kk`, `alamat`, `rt/rw`, `tgl_kk`) VALUES
('3173040708151022', 'Gg. Vanilli No.19f', '010/005', '2017-03-30');

-- --------------------------------------------------------

--
-- Table structure for table `t_pelengkap`
--

CREATE TABLE `t_pelengkap` (
  `no_pengajuan` varchar(13) NOT NULL,
  `foto_dokumen` text NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_pengajuan`
--

CREATE TABLE `t_pengajuan` (
  `no_pengajuan` varchar(13) NOT NULL,
  `tgl_pengajuan` date NOT NULL,
  `no_kk` varchar(16) NOT NULL,
  `keperluan` varchar(30) NOT NULL,
  `status_pengajuan` enum('Proses','Menunggu','Selesai','') NOT NULL,
  `NIK` varchar(16) NOT NULL,
  `nama_pengajuan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_user`
--

CREATE TABLE `t_user` (
  `no_kk` varchar(16) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_user`
--

INSERT INTO `t_user` (`no_kk`, `email`, `password`) VALUES
('3173040708151022', 'viz.ndinq@gmail.com', '9cb559c8b811362e7657090091052e8542176009');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_admin`
--
ALTER TABLE `t_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `t_anggota`
--
ALTER TABLE `t_anggota`
  ADD PRIMARY KEY (`NIK`),
  ADD KEY `no_kk` (`no_kk`);

--
-- Indexes for table `t_dokumen`
--
ALTER TABLE `t_dokumen`
  ADD PRIMARY KEY (`no_dokumen`),
  ADD KEY `no_pengajuan` (`no_pengajuan`);

--
-- Indexes for table `t_keluarga`
--
ALTER TABLE `t_keluarga`
  ADD PRIMARY KEY (`no_kk`);

--
-- Indexes for table `t_pelengkap`
--
ALTER TABLE `t_pelengkap`
  ADD KEY `no_pengajuan` (`no_pengajuan`);

--
-- Indexes for table `t_pengajuan`
--
ALTER TABLE `t_pengajuan`
  ADD PRIMARY KEY (`no_pengajuan`),
  ADD KEY `no_kk` (`no_kk`);

--
-- Indexes for table `t_user`
--
ALTER TABLE `t_user`
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `no_kk` (`no_kk`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `t_anggota`
--
ALTER TABLE `t_anggota`
  ADD CONSTRAINT `t_anggota_ibfk_1` FOREIGN KEY (`no_kk`) REFERENCES `t_keluarga` (`no_kk`);

--
-- Constraints for table `t_dokumen`
--
ALTER TABLE `t_dokumen`
  ADD CONSTRAINT `t_dokumen_ibfk_1` FOREIGN KEY (`no_pengajuan`) REFERENCES `t_pengajuan` (`no_pengajuan`);

--
-- Constraints for table `t_pelengkap`
--
ALTER TABLE `t_pelengkap`
  ADD CONSTRAINT `t_pelengkap_ibfk_1` FOREIGN KEY (`no_pengajuan`) REFERENCES `t_pengajuan` (`no_pengajuan`);

--
-- Constraints for table `t_pengajuan`
--
ALTER TABLE `t_pengajuan`
  ADD CONSTRAINT `t_pengajuan_ibfk_1` FOREIGN KEY (`no_kk`) REFERENCES `t_keluarga` (`no_kk`);

--
-- Constraints for table `t_user`
--
ALTER TABLE `t_user`
  ADD CONSTRAINT `t_user_ibfk_1` FOREIGN KEY (`no_kk`) REFERENCES `t_keluarga` (`no_kk`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
