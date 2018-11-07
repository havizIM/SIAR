-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 07, 2018 at 12:14 PM
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
  `nama` varchar(50) NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan','','') NOT NULL,
  `tempat_lahir` varchar(15) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `agama` enum('Islam','Protestan','Katholik','Budha','Hindu','Lainnya') NOT NULL,
  `pendidikan` varchar(20) NOT NULL,
  `pekerjaan` varchar(20) NOT NULL,
  `status_perkawinan` enum('Belum Kawin','Kawin','Janda','Duda') NOT NULL,
  `status_keluarga` enum('Kepala Keluarga','Istri','Anak','') NOT NULL,
  `kewarganegaraan` enum('WNI','WNA','','') NOT NULL,
  `no_paspor` varchar(16) DEFAULT NULL,
  `no_kitap` varchar(16) DEFAULT NULL,
  `nama_ayah` varchar(100) NOT NULL,
  `nama_ibu` varchar(100) NOT NULL,
  `no_kk` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_anggota`
--

INSERT INTO `t_anggota` (`NIK`, `nama`, `jenis_kelamin`, `tempat_lahir`, `tgl_lahir`, `agama`, `pendidikan`, `pekerjaan`, `status_perkawinan`, `status_keluarga`, `kewarganegaraan`, `no_paspor`, `no_kitap`, `nama_ayah`, `nama_ibu`, `no_kk`) VALUES
('3172010104051006', 'Dhimas Agung Priam Bodo', 'Laki-laki', 'Jakarta', '2005-04-01', 'Islam', 'SLTP/Sederajat', 'Pelajar', 'Belum Kawin', 'Anak', 'WNI', NULL, NULL, 'Juhendi', 'Siti Aisyah', '3172010602093101'),
('3172010308670005', 'Zainudin', 'Laki-laki', 'U.Pandang', '1967-08-03', 'Islam', 'SLTP/Sederajat', 'Nelayan', 'Kawin', 'Kepala Keluarga', 'WNI', NULL, NULL, 'Daeng Paga', 'Daeng Juwa', '3172010402094469'),
('3172010406590007', 'Narsita', 'Laki-laki', 'Jakarta', '1959-06-04', 'Islam', 'SLTP/Sederajat', 'Buruh Harian Lepas', 'Kawin', 'Kepala Keluarga', 'WNI', NULL, NULL, 'Darijah', 'Binti Fulan', '3172012112110043'),
('3172010506720006', 'Sanusi', 'Laki-laki', 'Ujung Pandang', '1972-06-05', 'Islam', 'SLTP/Sederajat', 'Karyawan Swasta', 'Kawin', 'Kepala Keluarga', 'WNI', NULL, NULL, 'Daeng Aco', 'Suri', '3172010402094388'),
('3172010602001002', 'Riki Dianto', 'Laki-laki', 'Jakarta', '2000-02-06', 'Islam', 'SLTP/Sederajat', 'Pelajar', 'Belum Kawin', 'Anak', 'WNI', NULL, NULL, 'Rejo Sunaryo', 'Yati Setiawati', '3172011412101007'),
('3172010612900008', 'Riki Dianto', 'Laki-laki', 'Jakarta', '1990-12-08', 'Islam', 'SLTP/Sederajat', 'Karyawan Swasta', 'Belum Kawin', 'Anak', 'WNI', NULL, NULL, 'Rejo Sunaryo', 'Yati Setiawati', '3172011412101007'),
('3172010808911001', 'Agus Alamsah', 'Laki-laki', 'Jakarta', '1991-08-08', 'Islam', 'SLTA/Sederajat', 'Wiraswasta', 'Kawin', 'Anak', 'WNI', NULL, NULL, 'Narsita', 'Siti Maesaroh', '3172012112110043'),
('3172011004041001', 'M.Kerisna Saputra', 'Laki-laki', 'Jakarta', '2004-04-10', 'Islam', 'SD/Sederajat', 'Pelajar', 'Belum Kawin', 'Anak', 'WNI', NULL, NULL, 'Narsita', 'Siti Maesaroh', '3172012112110043'),
('3172011103981004', 'Risky Mardian Pirmansyah', 'Laki-laki', 'Jakarta', '1998-03-11', 'Islam', 'SLTP/Sederajat', 'Pelajar', 'Belum Kawin', 'Anak', 'WNI', NULL, NULL, 'Juhendi', 'Siti Aisyah', '3172010602093101'),
('3172011406580004', 'Santi', 'Perempuan', 'Jakarta', '1958-06-14', 'Islam', 'SLTP/sederajat', 'Ibu Rumah Tangga', 'Kawin', 'Istri', 'WNI', NULL, NULL, 'Daeng Situju', 'Daeng Cowa', '3172010402094469'),
('3172011506000011', 'M. Risal', 'Laki-laki', 'Jakarta', '2000-06-15', 'Islam', 'SLTP/Sederajat', 'Pelajar', 'Belum Kawin', 'Anak', 'WNI', NULL, NULL, 'Narsita', 'Siti Maesaroh', '3172012112110043'),
('3172011608090005', 'Syahrul Ramdan', 'Laki-laki', 'Jakarta', '2009-08-16', 'Islam', 'SD/Sederajat', 'Pelajar', 'Belum Kawin', 'Anak', 'WNI', NULL, NULL, 'Zainudin', 'Santi', '3172010402094469'),
('3172011708730014', 'Juhendi', 'Laki-laki', 'Jakarta', '1973-08-17', 'Islam', 'SLTP/Sederajat', 'Karyawan Swasta', 'Kawin', 'Kepala Keluarga', 'WNI', NULL, NULL, 'Yana', 'Sulinah', '3172010602093101'),
('3172012003121007', 'M. Ripal Hidayat', 'Laki-laki', 'Jakarta', '2012-03-20', 'Islam', 'Belum Sekolah', 'Belum Kerja', 'Belum Kawin', 'Anak', 'WNI', NULL, NULL, 'Juhendi', 'Siti Aisyah', '3172010602093101'),
('3172012509021002', 'Ega Septian Pamungkas', 'Laki-laki', 'Jakarta', '2002-09-25', 'Islam', 'SLTP/Sederajat', 'Pelajar', 'Belum Kawin', 'Anak', 'WNI', NULL, NULL, 'Juhendi', 'Siti Aisyah', '3172010602093101'),
('3172014903050011', 'Nazwa Jahroh Saraha', 'Perempuan', 'Jakarta', '2005-03-09', 'Islam', 'SD/Sederajat', 'Pelajar', 'Belum Kawin', 'Anak', 'WNI', NULL, NULL, 'Narsita', 'Siti Maesaroh', '3172012112110043'),
('3172014910091007', 'Monica Okta Piani', 'Perempuan', 'Jakarta', '2009-10-09', 'Islam', 'SD/Sederajat', 'Pelajar', 'Belum Kawin', 'Anak', 'WNI', NULL, NULL, 'Juhendi', 'Siti Aisyah', '3172010602093101'),
('3172015212751001', 'Siti Aisyah', 'Perempuan', 'Jakarta', '1975-12-12', 'Islam', 'SLTA/Sederajat', 'Ibu Rumah Tangga', 'Kawin', 'Istri', 'WNI', NULL, NULL, 'M. Ali', 'Maeriyah', '3172010602093101'),
('3172016006700006', 'Siti Maesaroh', 'Perempuan', 'Jakarta', '1970-06-10', 'Islam', 'SD/Sederajat', 'Ibu Rumah Tangga', 'Kawin', 'Istri', 'WNI', NULL, NULL, 'Idris', 'Hawa Binti Fulan', '3172012112110043'),
('3172016406981001', 'Desi Rosita', 'Perempuan', 'Jakarta', '1998-06-24', 'Islam', 'SLTP/Sederajat', 'Pelajar', 'Belum Kawin', 'Anak', 'WNI', NULL, NULL, 'Rejo Sunaryo', 'Yati Setiawati', '3172011412101007'),
('3172016505641002', 'Yati Setiawati', 'Perempuan', 'Jakarta', '1964-05-25', 'Islam', 'SLTP/Sederajat', 'Karyawan Swasta', 'Janda', 'Kepala Keluarga', 'WNI', NULL, NULL, 'Ridwan Budiyadi', 'Siti Aisahtun', '3172011412101007'),
('3172016903740002', 'Sanipah', 'Perempuan', 'Semarang', '1974-03-29', 'Islam', 'SD/Sederajat', 'Ibu Rumah Tangga', 'Kawin', 'Istri', 'WNI', NULL, NULL, 'Sarno', 'Sulikah', '3172010402094388'),
('3172017007001001', 'Sisca Julian Panges Tuti', 'Perempuan', 'Jakarta', '2000-07-30', 'Islam', 'SLTP/Sederajat', 'Pelajar', 'Belum Kawin', 'Anak', 'WNI', NULL, NULL, 'Juhendi', 'Siti Aisyah', '3172010602093101'),
('3173041010920016', 'Haviz Indra Maulana', 'Laki-laki', 'Jakarta', '1992-10-10', 'Islam', 'SLTA', 'Karyawan Swasta', 'Kawin', 'Kepala Keluarga', 'WNI', NULL, NULL, 'Muhammad Hanafi', 'Indrawati', '3173040708151022'),
('3173041706151005', 'Devan Dirgantara Putra', 'Laki-laki', 'Jakarta', '2015-06-17', 'Islam', 'Belum Sekolah', 'Belum Bekerja', 'Belum Kawin', 'Anak', 'WNI', NULL, NULL, 'Haviz Indra Maulana', 'Dian Ratna Sari', '3173040708151022'),
('3173042301700008', 'Muhammad Hanafi', 'Laki-laki', 'Jakarta', '1970-01-23', 'Islam', 'SLTA/Sederajat', 'Wiraswasta', '', 'Kepala Keluarga', 'WNI', NULL, NULL, 'H. Ilyas Arsadi', 'Hj. Suharsih', '3173041201095931'),
('3173044712160004', 'Kalyssa Innara Putri', 'Perempuan', 'Jakarta', '2016-12-07', 'Islam', 'Belum Sekolah', 'Belum Bekerja', 'Belum Kawin', 'Anak', 'WNI', NULL, NULL, 'Haviz Indra Maulana', 'Dian Ratna Sari', '3173040708151022'),
('3173046711950003', 'Dian Ratna Sari', 'Perempuan', 'Jakarta', '1995-11-27', 'Islam', 'SLTA', 'Karyawan Swasta', 'Kawin', 'Istri', 'WNI', NULL, NULL, 'Sudji', 'Sri Jueni', '3173040708151022');

-- --------------------------------------------------------

--
-- Table structure for table `t_dokumen`
--

CREATE TABLE `t_dokumen` (
  `no_dokumen` varchar(24) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `no_pengajuan` varchar(13) NOT NULL,
  `diambil_oleh` varchar(50) NOT NULL,
  `tgl_pengambilan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_dokumen`
--

INSERT INTO `t_dokumen` (`no_dokumen`, `keterangan`, `no_pengajuan`, `diambil_oleh`, `tgl_pengambilan`) VALUES
('SP-010-015-05112018-0001', '1369136913', 'PJ00000000003', 'Haviz', '2018-11-05'),
('SP-010-015-07112018-0002', 'Anak Bapak Sanusi', 'PJ00000000005', 'Yogi', '2018-11-07');

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
  `rtrw` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_keluarga`
--

INSERT INTO `t_keluarga` (`no_kk`, `tgl_kk`, `alamat`, `kode_pos`, `provinsi`, `kotamadya`, `kecamatan`, `kelurahan`, `rtrw`) VALUES
('3172010402094388', '2011-12-24', 'jl. kampung baru kubur koja', '14440', 'DKI Jakarta', 'Jakarta Utara', 'Penjaringan', 'Penjaringan', '011/015'),
('3172010402094469', '2014-11-06', 'jl. kampung baru kubur koja', '14440', 'DKI Jakarta', 'Jakarta Utara', 'Penjaringan', 'Penjaringan', '011/015'),
('3172010602093101', '2016-02-09', 'jl. kampung baru kubur koja', '14440', 'DKI Jakarta', 'Jakarta Utara', 'Penjaringan', 'Penjaringan', '011/015'),
('3172011412101007', '2011-09-21', 'jl. kampung baru kubur koja', '14440', 'DKI Jakarta', 'Jakarta Utara', 'Penjaringan', 'Penjaringan', '011/015'),
('3172012112110043', '2013-12-04', 'jl. kampung baru kubur koja', '14440', 'DKI Jakarta', 'Jakarta Utara', 'Penjaringan', 'Penjaringan', '011/015'),
('3173040708151022', '2017-03-30', 'Gg. Vanilli No.19f', '14440', 'DKI Jakarta', 'Jakarta Utara', 'Penjaringan', 'Penjaringan', '010/015'),
('3173041201095931', '2018-11-03', 'Gg. Vanilli No. 19f', '14440', 'DKI Jakarta', 'Jakarta Utara', 'Penjaringan', 'Penjaringan', '010/015');

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
('PJ00000000003', 'dok_PJ00000000003.jpg', 'blabla'),
('PJ00000000005', 'dok_PJ00000000005.jpeg', 'Foto KK');

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
('PJ00000000003', '3173040708151022', '2018-11-03', '3301029919192000', 'yugi setiawan', 'Perempuan', '2019-01-14', 'Jakarta', 'nganggur', 'WNI', 'S!', 'Islam', 'Jakarta', 'Pembuatan KTP', 'Selesai'),
('PJ00000000004', '3173040708151022', '2018-11-05', '3173044712160004', 'Kalyssa Innara Putri', 'Perempuan', '2016-12-07', 'Jakarta', 'Belum Bekerja', 'WNI', 'Belum Sekolah', 'Islam', 'Gg. Vanilli No.19f RT/RW. 010/015 Kel. Penjaringan Kec. Penjaringan, Jakarta Utara, DKI Jakarta', 'Surat Kematian', 'Proses'),
('PJ00000000005', '3172010402094388', '2018-11-07', '3172010506720006', 'Sanusi', 'Laki-laki', '1972-06-05', 'Ujung Pandang', 'Karyawan Swasta', 'WNI', 'SLTP/Sederajat', 'Islam', 'jl. kampung baru kubur koja RT/RW. 011/015 Kel. Penjaringan Kec. Penjaringan, Jakarta Utara, DKI Jak', 'Pembuatan KTP', 'Selesai');

-- --------------------------------------------------------

--
-- Table structure for table `t_user`
--

CREATE TABLE `t_user` (
  `email` varchar(30) NOT NULL,
  `password` varchar(15) NOT NULL,
  `no_kk` varchar(16) NOT NULL,
  `level` enum('Warga','RT','RW','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_user`
--

INSERT INTO `t_user` (`email`, `password`, `no_kk`, `level`) VALUES
('haviz_im@outlook.com', 'haviz6142', '3173040708151022', 'RW'),
('irsanariep@gmail.com', 'RT', '3173041201095931', 'RT'),
('si.ubk16@gmail.com', 'RT', '3172010402094469', 'RT'),
('yogiyonanta@gmail.com', 'Warga', '3172010402094388', 'Warga');

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
  ADD PRIMARY KEY (`email`),
  ADD KEY `no_kk` (`no_kk`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `t_anggota`
--
ALTER TABLE `t_anggota`
  ADD CONSTRAINT `t_anggota_ibfk_1` FOREIGN KEY (`no_kk`) REFERENCES `t_keluarga` (`no_kk`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `t_dokumen`
--
ALTER TABLE `t_dokumen`
  ADD CONSTRAINT `t_dokumen_ibfk_1` FOREIGN KEY (`no_pengajuan`) REFERENCES `t_pengajuan` (`no_pengajuan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `t_pelengkap`
--
ALTER TABLE `t_pelengkap`
  ADD CONSTRAINT `t_pelengkap_ibfk_1` FOREIGN KEY (`no_pengajuan`) REFERENCES `t_pengajuan` (`no_pengajuan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `t_pengajuan`
--
ALTER TABLE `t_pengajuan`
  ADD CONSTRAINT `t_pengajuan_ibfk_1` FOREIGN KEY (`no_kk`) REFERENCES `t_keluarga` (`no_kk`);

--
-- Constraints for table `t_user`
--
ALTER TABLE `t_user`
  ADD CONSTRAINT `t_user_ibfk_1` FOREIGN KEY (`no_kk`) REFERENCES `t_keluarga` (`no_kk`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
