-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 01, 2018 at 01:27 AM
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
  `tgl_upload` date NOT NULL,
  `diambil_oleh` varchar(50) NOT NULL,
  `tgl_pengambilan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_keluarga`
--

CREATE TABLE `t_keluarga` (
  `no_kk` varchar(16) NOT NULL,
  `tgl_kk` date NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `kode_pos` varchar(10) NOT NULL,
  `provinsi` varchar(30) NOT NULL,
  `kotamadya` varchar(30) NOT NULL,
  `kecamatan` varchar(30) NOT NULL,
  `kelurahan` varchar(30) NOT NULL,
  `rtrw` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_keluarga`
--

INSERT INTO `t_keluarga` (`no_kk`, `tgl_kk`, `alamat`, `kode_pos`, `provinsi`, `kotamadya`, `kecamatan`, `kelurahan`, `rtrw`) VALUES
('3173040708151022', '2017-03-30', 'Gg. Vanilli No.19f', '11210', 'DKI Jakarta', 'Jakarta Barat', 'Tambora', 'Tanah Sereal', '010/005');

-- --------------------------------------------------------

--
-- Table structure for table `t_pelengkap`
--

CREATE TABLE `t_pelengkap` (
  `no_pengajuan` varchar(13) NOT NULL,
  `foto_dokumen` text NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_pelengkap`
--

INSERT INTO `t_pelengkap` (`no_pengajuan`, `foto_dokumen`, `keterangan`) VALUES
('PJ00000000001', 'test.jpg', 'KTP');

-- --------------------------------------------------------

--
-- Table structure for table `t_pengajuan`
--

CREATE TABLE `t_pengajuan` (
  `no_pengajuan` varchar(13) NOT NULL,
  `no_kk` varchar(16) NOT NULL,
  `tgl_pengajuan` date NOT NULL,
  `NIK` varchar(16) NOT NULL,
  `nama_pengajuan` varchar(100) NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan','','') NOT NULL,
  `tgl_lahir` date NOT NULL,
  `tempat_lahir` varchar(15) NOT NULL,
  `pekerjaan` varchar(20) NOT NULL,
  `kewarganegaraan` enum('WNI','WNA','','') NOT NULL,
  `pendidikan` varchar(20) NOT NULL,
  `agama` enum('Islam','Kristen','Katholik','Budha','Hindu','Lainnya') NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `keperluan` varchar(30) NOT NULL,
  `status_pengajuan` enum('Proses','Menunggu','Selesai','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_pengajuan`
--

INSERT INTO `t_pengajuan` (`no_pengajuan`, `no_kk`, `tgl_pengajuan`, `NIK`, `nama_pengajuan`, `jenis_kelamin`, `tgl_lahir`, `tempat_lahir`, `pekerjaan`, `kewarganegaraan`, `pendidikan`, `agama`, `alamat`, `keperluan`, `status_pengajuan`) VALUES
('PJ00000000001', '3173040708151022', '2018-11-01', '312413135139571', 'Fauzi Abdillah', 'Laki-laki', '1993-12-07', 'Jakarta', 'Karyawan Swasta', 'WNI', 'SLTA/Sederajat', 'Islam', 'Jl. Kp Cilame Bogor', 'Surat Domisili', 'Proses'),
('PJ00000000002', '3173040708151022', '2018-11-01', '3173046711950003', 'Dian Ratna Sari', 'Perempuan', '1995-11-27', 'Jakarta', 'Karyawan Swasta', 'WNI', 'SLTA/Sederajat', 'Islam', 'Jl. Gg Vanilli no 19f Jakarta', 'Membuat KTP', 'Proses');

-- --------------------------------------------------------

--
-- Table structure for table `t_user`
--

CREATE TABLE `t_user` (
  `no_kk` varchar(16) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_user`
--

INSERT INTO `t_user` (`no_kk`, `email`, `password`, `level`) VALUES
('3173040708151022', 'viz.ndinq@gmail.com', '9cb559c8b811362e7657090091052e8542176009', 'Warga');

--
-- Indexes for dumped tables
--

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
