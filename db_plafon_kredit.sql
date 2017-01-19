-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2017 at 02:05 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_plafon_kredit`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_agama`
--

CREATE TABLE `tbl_agama` (
  `id_agama` int(11) NOT NULL,
  `agama` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_agama`
--

INSERT INTO `tbl_agama` (`id_agama`, `agama`) VALUES
(1, 'Islam'),
(2, 'Kristen'),
(3, 'Katholik'),
(4, 'Hindu'),
(5, 'Budha'),
(6, 'Khonghucu');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bobot`
--

CREATE TABLE `tbl_bobot` (
  `id_bobot` int(2) NOT NULL,
  `k1` double NOT NULL,
  `k2` double NOT NULL,
  `k3` double NOT NULL,
  `k4` double NOT NULL,
  `k5` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_bobot`
--

INSERT INTO `tbl_bobot` (`id_bobot`, `k1`, `k2`, `k3`, `k4`, `k5`) VALUES
(1, 7, 4, 5, 1, 5);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ekonomi`
--

CREATE TABLE `tbl_ekonomi` (
  `id_ekonomi` int(11) NOT NULL,
  `ekonomi` varchar(100) NOT NULL,
  `value` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_ekonomi`
--

INSERT INTO `tbl_ekonomi` (`id_ekonomi`, `ekonomi`, `value`) VALUES
(1, 'Baik', 10),
(2, 'Cukup Baik', 5),
(3, 'Kurang', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_hasil`
--

CREATE TABLE `tbl_hasil` (
  `nik` varchar(18) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `k1` double NOT NULL,
  `k2` double NOT NULL,
  `k3` double NOT NULL,
  `k4` double NOT NULL,
  `k5` double NOT NULL,
  `value` double NOT NULL,
  `plafon` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_hasil`
--

INSERT INTO `tbl_hasil` (`nik`, `nama`, `k1`, `k2`, `k3`, `k4`, `k5`, `value`, `plafon`) VALUES
('3309030709110002', 'Ani', 5, 1, 8, 5, 5, 0, ''),
('3309031210810000', 'Budi', 10, 10, 4, 5, 10, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jaminan`
--

CREATE TABLE `tbl_jaminan` (
  `id_jaminan` int(11) NOT NULL,
  `jaminan` varchar(50) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `value` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_jaminan`
--

INSERT INTO `tbl_jaminan` (`id_jaminan`, `jaminan`, `keterangan`, `value`) VALUES
(1, 'Sertifikat 1', 'Taksiran Sertifikat > Pinjaman', 10),
(2, 'Sertifikat 2', 'Taksiran Sertifikat < Pinjaman', 8),
(3, 'BPKB 1', 'Taksiran BPKB > Pinjaman', 7),
(4, 'BPKB 2', 'Taksiran BPKB < Pinjaman', 5),
(5, 'Slip Gaji 1', 'Gaji Diatas Pinjaman', 4),
(6, 'Slip Gaji 2', 'Gaji Dibawah Pinjaman', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_karakter`
--

CREATE TABLE `tbl_karakter` (
  `id_karakter` int(11) NOT NULL,
  `karakter` varchar(100) NOT NULL,
  `value` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_karakter`
--

INSERT INTO `tbl_karakter` (`id_karakter`, `karakter`, `value`) VALUES
(1, 'Baik', 10),
(2, 'Cukup Baik', 5);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kemampuan`
--

CREATE TABLE `tbl_kemampuan` (
  `id_kemampuan` int(11) NOT NULL,
  `kemampuan` varchar(100) NOT NULL,
  `value` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_kemampuan`
--

INSERT INTO `tbl_kemampuan` (`id_kemampuan`, `kemampuan`, `value`) VALUES
(1, 'Mampu', 10),
(2, 'Tidak Mampu', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_modal`
--

CREATE TABLE `tbl_modal` (
  `id_modal` int(11) NOT NULL,
  `modal` varchar(100) NOT NULL,
  `value` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_modal`
--

INSERT INTO `tbl_modal` (`id_modal`, `modal`, `value`) VALUES
(1, 'Banyak', 10),
(5, 'Cukup', 5),
(6, 'Kurang', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pekerjaan`
--

CREATE TABLE `tbl_pekerjaan` (
  `id_pekerjaan` int(2) NOT NULL,
  `pekerjaan` varchar(50) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `tbl_pekerjaan`
--

INSERT INTO `tbl_pekerjaan` (`id_pekerjaan`, `pekerjaan`) VALUES
(1, 'Belum/Tidak Bekerja'),
(2, 'Mengurus Rumah Tangga'),
(3, 'Pelajar/Mahasiswa'),
(4, 'Pensiunan'),
(5, 'Pegawai Negeri Sipil (PNS)'),
(6, 'Tentara Nasional Indonesia (TNI)'),
(7, 'Kepolisian RI (POLRI)'),
(8, 'Perdagangan'),
(9, 'Petani/Pekebun'),
(10, 'Peternak'),
(11, 'Nelayan/Perikanan'),
(12, 'Industri'),
(13, 'Konstruksi'),
(14, 'Transportasi'),
(15, 'Karyawan Swasta'),
(16, 'Karyawan BUMN'),
(17, 'Karyawan BUMD'),
(18, 'Karyawan Honorer'),
(19, 'Buruh Harian Lepas'),
(20, 'Buruh Tani/Perkebunan'),
(21, 'Buruh Nelayan/Perikanan'),
(23, 'Pembantu Rumah Tangga'),
(24, 'Tukang Cukur'),
(22, 'Buruh Peternakan'),
(25, 'Tukang Listrik'),
(26, 'Tukang Batu'),
(27, 'Tukang Kayu'),
(28, 'Tukang Sol Sepatu'),
(29, 'Tukang Las/Pandai Besi'),
(30, 'Tukang Jahit'),
(31, 'Tukang Gigi'),
(32, 'Penata Rias'),
(33, 'Penata Busana'),
(34, 'Penata Rambut'),
(35, 'Mekanik'),
(36, 'Seniman'),
(37, 'Tabib'),
(38, 'Perajin'),
(39, 'Perancang Busana'),
(40, 'Penterjemah'),
(41, 'Imam Masjid'),
(42, 'Pendeta'),
(43, 'Pastor'),
(44, 'Wartawan'),
(45, 'Ustadz/Mubaligh'),
(46, 'Juru Masak'),
(47, 'Promotor Acara'),
(48, 'Anggota DPR-RI'),
(49, 'Anggota DPD'),
(50, 'Anggota BPK'),
(51, 'Presiden'),
(52, 'Wakil Presiden'),
(53, 'Anggota Mahkamah Konstitusi'),
(54, 'Anggota Kabinet Kementerian'),
(55, 'Duta Besar'),
(56, 'Gubernur'),
(57, 'Wakil Gubernur'),
(58, 'Bupati'),
(59, 'Wakil Bupati'),
(60, 'Walikota'),
(61, 'Wakil Walikota'),
(62, 'Anggota DPRD Prop'),
(63, 'Anggota DPRD Kab. Kota'),
(64, 'Dosen'),
(65, 'Guru'),
(66, 'Pilot'),
(67, 'Pengacara'),
(68, 'Notaris'),
(69, 'Arsitek'),
(70, 'Akuntan'),
(71, 'Konsultan'),
(72, 'Dokter'),
(73, 'Bidan'),
(74, 'Perawat'),
(75, 'Apoteker'),
(76, 'Psikiater/Psikolog'),
(77, 'Penyiar Televisi'),
(78, 'Penyiar Radio'),
(79, 'Pelaut'),
(80, 'Peneliti'),
(81, 'Sopir'),
(82, 'Pialang'),
(83, 'Paranormal'),
(84, 'Pedagang'),
(85, 'Perangkat Desa'),
(86, 'Kepala Desa'),
(87, 'Biarawan'),
(88, 'Wiraswasta');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pemohon`
--

CREATE TABLE `tbl_pemohon` (
  `nomor_kk` varchar(18) COLLATE latin1_general_ci NOT NULL,
  `nik` varchar(18) COLLATE latin1_general_ci NOT NULL,
  `nama` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `tempat_lahir` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` enum('L','P') COLLATE latin1_general_ci NOT NULL,
  `alamat` text COLLATE latin1_general_ci NOT NULL,
  `id_agama` int(1) NOT NULL,
  `id_perkawinan` int(1) NOT NULL,
  `id_pendidikan` int(2) DEFAULT NULL,
  `id_pekerjaan` int(2) DEFAULT NULL,
  `nama_ibu` varchar(50) COLLATE latin1_general_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `tbl_pemohon`
--

INSERT INTO `tbl_pemohon` (`nomor_kk`, `nik`, `nama`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `alamat`, `id_agama`, `id_perkawinan`, `id_pendidikan`, `id_pekerjaan`, `nama_ibu`) VALUES
('3309031805110009', '3309030709110002', 'Ani', 'Boyolali', '1990-12-12', 'P', 'Cepogo', 2, 1, 5, 8, 'Aini'),
('3309031210810005', '3309031210810000', 'Budi', 'Boyolali', '1994-03-31', 'L', 'Cepogo', 1, 2, 1, 88, 'Aini');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pendidikan`
--

CREATE TABLE `tbl_pendidikan` (
  `id_pendidikan` int(2) NOT NULL,
  `pendidikan` varchar(50) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `tbl_pendidikan`
--

INSERT INTO `tbl_pendidikan` (`id_pendidikan`, `pendidikan`) VALUES
(1, 'Tidak/Belum Sekolah'),
(2, 'Belum Tamat SD/Sederajat'),
(3, 'Tamat SD/Sederajat'),
(4, 'SLTP/Sederajat'),
(5, 'SLTA/Sederajat'),
(6, 'Diploma I/II'),
(7, 'Akademi/Diploma III Sarjana Muda'),
(8, 'Diploma IV/Strata I'),
(9, 'Strata II'),
(10, 'Strata III');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_perkawinan`
--

CREATE TABLE `tbl_perkawinan` (
  `id_perkawinan` int(11) NOT NULL,
  `status_perkawinan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_perkawinan`
--

INSERT INTO `tbl_perkawinan` (`id_perkawinan`, `status_perkawinan`) VALUES
(1, 'Belum Kawin'),
(2, 'Kawin'),
(3, 'Cerai Hidup'),
(4, 'Cerai Mati');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(2) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama_pengguna` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `username`, `password`, `nama_pengguna`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Syarif Hidayatulloh');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_agama`
--
ALTER TABLE `tbl_agama`
  ADD PRIMARY KEY (`id_agama`);

--
-- Indexes for table `tbl_bobot`
--
ALTER TABLE `tbl_bobot`
  ADD PRIMARY KEY (`id_bobot`);

--
-- Indexes for table `tbl_ekonomi`
--
ALTER TABLE `tbl_ekonomi`
  ADD PRIMARY KEY (`id_ekonomi`);

--
-- Indexes for table `tbl_hasil`
--
ALTER TABLE `tbl_hasil`
  ADD PRIMARY KEY (`nik`);

--
-- Indexes for table `tbl_jaminan`
--
ALTER TABLE `tbl_jaminan`
  ADD PRIMARY KEY (`id_jaminan`);

--
-- Indexes for table `tbl_karakter`
--
ALTER TABLE `tbl_karakter`
  ADD PRIMARY KEY (`id_karakter`);

--
-- Indexes for table `tbl_kemampuan`
--
ALTER TABLE `tbl_kemampuan`
  ADD PRIMARY KEY (`id_kemampuan`);

--
-- Indexes for table `tbl_modal`
--
ALTER TABLE `tbl_modal`
  ADD PRIMARY KEY (`id_modal`);

--
-- Indexes for table `tbl_pekerjaan`
--
ALTER TABLE `tbl_pekerjaan`
  ADD PRIMARY KEY (`id_pekerjaan`);

--
-- Indexes for table `tbl_pemohon`
--
ALTER TABLE `tbl_pemohon`
  ADD PRIMARY KEY (`nik`);

--
-- Indexes for table `tbl_pendidikan`
--
ALTER TABLE `tbl_pendidikan`
  ADD PRIMARY KEY (`id_pendidikan`);

--
-- Indexes for table `tbl_perkawinan`
--
ALTER TABLE `tbl_perkawinan`
  ADD PRIMARY KEY (`id_perkawinan`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_agama`
--
ALTER TABLE `tbl_agama`
  MODIFY `id_agama` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbl_bobot`
--
ALTER TABLE `tbl_bobot`
  MODIFY `id_bobot` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_ekonomi`
--
ALTER TABLE `tbl_ekonomi`
  MODIFY `id_ekonomi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_jaminan`
--
ALTER TABLE `tbl_jaminan`
  MODIFY `id_jaminan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbl_karakter`
--
ALTER TABLE `tbl_karakter`
  MODIFY `id_karakter` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_kemampuan`
--
ALTER TABLE `tbl_kemampuan`
  MODIFY `id_kemampuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_modal`
--
ALTER TABLE `tbl_modal`
  MODIFY `id_modal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbl_pekerjaan`
--
ALTER TABLE `tbl_pekerjaan`
  MODIFY `id_pekerjaan` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;
--
-- AUTO_INCREMENT for table `tbl_perkawinan`
--
ALTER TABLE `tbl_perkawinan`
  MODIFY `id_perkawinan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
