-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 05 Nov 2018 pada 03.18
-- Versi Server: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Struktur dari tabel `t_anggota`
--

CREATE TABLE IF NOT EXISTS `t_anggota` (
  `NIK` varchar(16) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan','','') NOT NULL,
  `tempat_lahir` varchar(15) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `agama` enum('Islam','Protestan','Katholik','Budha','Hindu','Lainnya') NOT NULL,
  `pendidikan` varchar(20) NOT NULL,
  `pekerjaan` varchar(20) NOT NULL,
  `status_perkawinan` enum('Belum Kawin','Kawin','Janda','Duda') NOT NULL,
  `status_keluarga` enum('Kepala Keluarga','Istri','Anak','') NOT NULL,
  `kewarganegaraan` enum('WNI','WNA','','') NOT NULL,
  `no_password` varchar(16) DEFAULT NULL,
  `no_kitap` varchar(16) DEFAULT NULL,
  `nama_ayah` varchar(100) NOT NULL,
  `nama_ibu` varchar(100) NOT NULL,
  `no_kk` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_anggota`
--

INSERT INTO `t_anggota` (`NIK`, `nama`, `jenis_kelamin`, `tempat_lahir`, `tgl_lahir`, `agama`, `pendidikan`, `pekerjaan`, `status_perkawinan`, `status_keluarga`, `kewarganegaraan`, `no_password`, `no_kitap`, `nama_ayah`, `nama_ibu`, `no_kk`) VALUES
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
-- Struktur dari tabel `t_dokumen`
--

CREATE TABLE IF NOT EXISTS `t_dokumen` (
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
-- Struktur dari tabel `t_keluarga`
--

CREATE TABLE IF NOT EXISTS `t_keluarga` (
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
-- Dumping data untuk tabel `t_keluarga`
--

INSERT INTO `t_keluarga` (`no_kk`, `tgl_kk`, `alamat`, `kode_pos`, `provinsi`, `kotamadya`, `kecamatan`, `kelurahan`, `rtrw`) VALUES
('3172010402094388', '2011-12-24', 'jl. kampung baru kubur koja', '14440', 'DKI Jakarta', 'Jakarta Utara', 'Penjaringan', 'Penjaringan', '011/015'),
('3172010402094469', '2014-11-06', 'jl. kampung baru kubur koja', '14440', 'DKI Jakarta', 'Jakarta Utara', 'Penjaringan', 'Penjaringan', '011/015'),
('3172010602093101', '2016-02-09', 'jl. kampung baru kubur koja', '14440', 'DKI Jakarta', 'Jakarta Utara', 'Penjaringan', 'Penjaringan', '011/015'),
('3172011412101007', '2011-09-21', 'jl. kampung baru kubur koja', '14440', 'DKI Jakarta', 'Jakarta Utara', 'Penjaringan', 'Penjaringan', '011/015'),
('3172012112110043', '2013-12-04', 'jl. kampung baru kubur koja', '14440', 'DKI Jakarta', 'Jakarta Utara', 'Penjaringan', 'Penjaringan', '011/015'),
('3173040708151022', '2017-03-30', 'Gg. Vanilli No.19f', '11210', 'DKI Jakarta', 'Jakarta Barat', 'Tambora', 'Tanah Sereal', '010/005'),
('3173041201095931', '2018-11-03', 'Gg. Vanilli No. 19f', '11210', 'DKI Jakarta', 'Jakarta Barat', 'Tambora', 'Tanah Sereal', '010/005'),
('3811895719759314', '2018-11-03', 'Gg. Vanilli no. 19f', '11210', 'DKI Jakarta', 'Jakarta Barat', 'Tambora', 'Tanah Sereal', '011/005');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_pelengkap`
--

CREATE TABLE IF NOT EXISTS `t_pelengkap` (
  `no_pengajuan` varchar(13) NOT NULL,
  `foto_dokumen` text NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_pelengkap`
--

INSERT INTO `t_pelengkap` (`no_pengajuan`, `foto_dokumen`, `keterangan`) VALUES
('PJ00000000003', 'dok_PJ00000000003.jpg', 'blabla');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_pengajuan`
--

CREATE TABLE IF NOT EXISTS `t_pengajuan` (
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
-- Dumping data untuk tabel `t_pengajuan`
--

INSERT INTO `t_pengajuan` (`no_pengajuan`, `no_kk`, `tgl_pengajuan`, `NIK`, `nama_pengajuan`, `jenis_kelamin`, `tgl_lahir`, `tempat_lahir`, `pekerjaan`, `kewarganegaraan`, `pendidikan`, `agama`, `alamat`, `keperluan`, `status_pengajuan`) VALUES
('PJ00000000003', '3173040708151022', '2018-11-03', '3301029919192000', 'yugi setiawan', 'Perempuan', '2019-01-14', 'Jakarta', 'nganggur', 'WNI', 'S!', 'Islam', 'Jakarta', 'Surat Kehilangan', 'Proses');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_user`
--

CREATE TABLE IF NOT EXISTS `t_user` (
  `no_kk` varchar(16) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_user`
--

INSERT INTO `t_user` (`no_kk`, `email`, `password`, `level`) VALUES
('3811895719759314', 'coba@gmail.com', '34f70892f40cd3b2a340769c070c4f1a02335d87', 'RW'),
('3173041201095931', 'hanafi@gmail.com', '0a289766851125be33aded636ba8c6bfeaa58848', 'RT'),
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
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `t_anggota`
--
ALTER TABLE `t_anggota`
  ADD CONSTRAINT `t_anggota_ibfk_1` FOREIGN KEY (`no_kk`) REFERENCES `t_keluarga` (`no_kk`);

--
-- Ketidakleluasaan untuk tabel `t_dokumen`
--
ALTER TABLE `t_dokumen`
  ADD CONSTRAINT `t_dokumen_ibfk_1` FOREIGN KEY (`no_pengajuan`) REFERENCES `t_pengajuan` (`no_pengajuan`);

--
-- Ketidakleluasaan untuk tabel `t_pelengkap`
--
ALTER TABLE `t_pelengkap`
  ADD CONSTRAINT `t_pelengkap_ibfk_1` FOREIGN KEY (`no_pengajuan`) REFERENCES `t_pengajuan` (`no_pengajuan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `t_pengajuan`
--
ALTER TABLE `t_pengajuan`
  ADD CONSTRAINT `t_pengajuan_ibfk_1` FOREIGN KEY (`no_kk`) REFERENCES `t_keluarga` (`no_kk`);

--
-- Ketidakleluasaan untuk tabel `t_user`
--
ALTER TABLE `t_user`
  ADD CONSTRAINT `t_user_ibfk_1` FOREIGN KEY (`no_kk`) REFERENCES `t_keluarga` (`no_kk`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
