-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2022 at 05:03 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bansos`
--

-- --------------------------------------------------------

--
-- Table structure for table `alamat`
--

CREATE TABLE `alamat` (
  `id_alamat` int(11) NOT NULL,
  `id_provinsi` int(11) NOT NULL,
  `id_kabkota` int(11) NOT NULL,
  `id_kecamatan` int(11) NOT NULL,
  `id_kelurahan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `alamat`
--

INSERT INTO `alamat` (`id_alamat`, `id_provinsi`, `id_kabkota`, `id_kecamatan`, `id_kelurahan`) VALUES
(1, 13, 1, 1, 1),
(2, 13, 1, 2, 4),
(3, 13, 2, 4, 10),
(4, 13, 2, 5, 13),
(5, 13, 3, 9, 27),
(6, 13, 2, 6, 16),
(7, 13, 2, 4, 22),
(8, 13, 2, 6, 18),
(9, 13, 2, 5, 14);

-- --------------------------------------------------------

--
-- Table structure for table `bantuan`
--

CREATE TABLE `bantuan` (
  `id_bantuan` int(11) NOT NULL,
  `id_penduduk` int(11) NOT NULL,
  `id_pbi` int(11) NOT NULL,
  `id_pkh` int(11) NOT NULL,
  `id_bpnt` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bantuan`
--

INSERT INTO `bantuan` (`id_bantuan`, `id_penduduk`, `id_pbi`, `id_pkh`, `id_bpnt`) VALUES
(1, 1, 2, 2, 1),
(2, 2, 1, 1, 2),
(3, 5, 1, 2, 1),
(4, 6, 1, 1, 2),
(5, 7, 1, 2, 1),
(6, 8, 2, 2, 1),
(7, 9, 1, 2, 2),
(8, 13, 1, 1, 2),
(9, 14, 1, 2, 1),
(10, 15, 2, 1, 1),
(11, 16, 1, 1, 2),
(12, 17, 2, 2, 1),
(13, 18, 1, 2, 2),
(14, 19, 1, 1, 2),
(15, 20, 1, 2, 1),
(16, 21, 2, 1, 2),
(17, 22, 1, 2, 2),
(18, 23, 2, 1, 1),
(19, 24, 2, 1, 1),
(20, 25, 1, 1, 2),
(21, 26, 2, 1, 1),
(22, 27, 2, 1, 2),
(23, 28, 1, 2, 2),
(24, 29, 2, 1, 1),
(25, 30, 2, 1, 1),
(26, 31, 1, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `bpnt`
--

CREATE TABLE `bpnt` (
  `id_bpnt` int(11) NOT NULL,
  `status_bpnt` varchar(255) NOT NULL,
  `periode_bpnt` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bpnt`
--

INSERT INTO `bpnt` (`id_bpnt`, `status_bpnt`, `periode_bpnt`) VALUES
(1, 'YA', 'DESEMBER 2021'),
(2, 'TIDAK', '-');

-- --------------------------------------------------------

--
-- Table structure for table `cek_input`
--

CREATE TABLE `cek_input` (
  `id_cek` int(11) NOT NULL,
  `nik_diinput` decimal(16,0) NOT NULL,
  `nama_diinput` varchar(255) NOT NULL,
  `jenis_bantuan` varchar(255) NOT NULL,
  `penghasilan` decimal(15,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `kabkota`
--

CREATE TABLE `kabkota` (
  `id_kabkota` int(11) NOT NULL,
  `nama_kabkota` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kabkota`
--

INSERT INTO `kabkota` (`id_kabkota`, `nama_kabkota`) VALUES
(1, 'Sleman'),
(2, 'Bantul'),
(3, 'Gunung Kidul'),
(4, 'Kulonprogo'),
(5, 'Kota Yogyakarta');

-- --------------------------------------------------------

--
-- Table structure for table `kartu_keluarga`
--

CREATE TABLE `kartu_keluarga` (
  `id_kk` int(11) NOT NULL,
  `no_kk` decimal(16,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kartu_keluarga`
--

INSERT INTO `kartu_keluarga` (`id_kk`, `no_kk`) VALUES
(1, '2120205118313653'),
(2, '2132018223625111'),
(3, '3210927432112411'),
(4, '3230002124057121'),
(5, '3345330186641242'),
(6, '3341235200405012'),
(7, '3531400234205017'),
(8, '3523452501042123'),
(9, '2517170403100134'),
(10, '2414502010608911'),
(11, '3890492013219244'),
(12, '4392102841911238'),
(13, '4527917470804031'),
(14, '3982421010132341'),
(15, '5482790194277161'),
(16, '4826819462819010'),
(17, '4247210118392143'),
(18, '4810482137274983');

-- --------------------------------------------------------

--
-- Table structure for table `kecamatan`
--

CREATE TABLE `kecamatan` (
  `id_kecamatan` int(11) NOT NULL,
  `nama_kecamatan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kecamatan`
--

INSERT INTO `kecamatan` (`id_kecamatan`, `nama_kecamatan`) VALUES
(1, 'Kapanewon Berbah'),
(2, 'Kapanewon Gamping'),
(3, 'Kapanewon Godean'),
(4, 'Kapanewon Banguntapan'),
(5, 'Kapanewon Bantul'),
(6, 'Kapanewon Dlingo'),
(7, 'Kapanewon Gedangsari'),
(8, 'Kapanewon Girisubo'),
(9, 'Kapanewon Karangmojo'),
(10, 'Kapanewon Moyudan'),
(11, 'Kapanewon Minggir'),
(12, 'Kapanewon Seyegan');

-- --------------------------------------------------------

--
-- Table structure for table `kelurahan`
--

CREATE TABLE `kelurahan` (
  `id_kelurahan` int(11) NOT NULL,
  `nama_kelurahan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kelurahan`
--

INSERT INTO `kelurahan` (`id_kelurahan`, `nama_kelurahan`) VALUES
(1, 'Jogo Tirto'),
(2, 'Kali Tirto'),
(3, 'Sendang tirto'),
(4, 'Ambarketawang'),
(5, 'Balecatur'),
(6, 'Banyuraden'),
(7, 'Sidoagung'),
(8, 'Sidoarum'),
(9, 'Sidokarto'),
(10, 'Banguntapan'),
(11, 'Baturetno'),
(12, 'Jagalan'),
(13, 'Bantul'),
(14, 'Palbapang'),
(15, 'Ringin Harjo'),
(16, 'Dlingo'),
(17, 'Jatimulyo'),
(18, 'Mangunan'),
(19, 'Mertelu'),
(20, 'Ngalang'),
(21, 'Tegalrejo'),
(22, 'Balong'),
(23, 'Jepitu'),
(24, 'Jerukwudel'),
(25, 'Bejiharjo'),
(26, 'Bendungan'),
(27, 'Karangmojo');

-- --------------------------------------------------------

--
-- Table structure for table `pbi`
--

CREATE TABLE `pbi` (
  `id_pbi` int(11) NOT NULL,
  `status_pbi` varchar(255) NOT NULL,
  `periode_pbi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pbi`
--

INSERT INTO `pbi` (`id_pbi`, `status_pbi`, `periode_pbi`) VALUES
(1, 'YA ', 'NOVEMBER 2021'),
(2, 'TIDAK', '-');

-- --------------------------------------------------------

--
-- Table structure for table `penduduk`
--

CREATE TABLE `penduduk` (
  `id_penduduk` int(11) NOT NULL,
  `nik` decimal(16,0) NOT NULL,
  `id_kk` int(16) NOT NULL,
  `nama_penduduk` varchar(255) NOT NULL,
  `ttl` varchar(255) NOT NULL,
  `umur` int(3) NOT NULL,
  `agama` varchar(255) NOT NULL,
  `status_kawin` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(255) NOT NULL,
  `pekerjaan` varchar(255) NOT NULL,
  `penghasilan` decimal(15,0) NOT NULL,
  `id_alamat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penduduk`
--

INSERT INTO `penduduk` (`id_penduduk`, `nik`, `id_kk`, `nama_penduduk`, `ttl`, `umur`, `agama`, `status_kawin`, `jenis_kelamin`, `pekerjaan`, `penghasilan`, `id_alamat`) VALUES
(1, '4023612019613111', 1, 'Sarianti', 'Sleman, 12 Januari 1996', 25, 'Islam', 'Menikah', 'P', 'Swasta', '2500000', 1),
(2, '4632423109100121', 1, 'Pradipto', 'Bandung, 23 Oktober 1991', 30, 'Islam', 'Menikah', 'L', 'Swasta', '3000000', 1),
(5, '3471041804910001', 1, 'FITRA ISSANTOSA', 'YOGYAKARTA, 18 APRIL 1991', 27, 'ISLAM', 'KAWIN', 'P', 'IBU RUMAH TANGGA', '0', 1),
(6, '3471052007690002', 2, 'SURAJI\r\n', 'YOGYAKARTA, 20 JULI 1969', 53, 'ISLAM', 'KAWIN', 'L', 'BURUH', '500000', 7),
(7, '3402124612510001', 2, 'A RUBIYEM', 'Bantul, 26 Desember 1951', 71, 'Islam', 'Cerai Mati', 'P', 'Ibu Rumah Tangga', '0', 7),
(8, '3402120705760005', 3, 'ANIK SETYANINGRUM', 'Kulon progo, 07 Mei 1976', 46, 'Islam', 'Cerai Mati', 'P', 'Mengurus Rumah Tangga', '0', 8),
(9, '3402124906670001', 3, 'KARSI', 'Bantul, 19 Juni 1967', 55, 'Islam', 'Cerai Mati', 'L', 'Petani', '350000', 8),
(13, '3402121503840002', 4, 'MUJIATI', 'Sleman, 20 Maret 1984', 36, 'Islam', 'Kawin', 'P', 'Buruh Harian Lepas', '850000', 9),
(14, '3402120107600001', 4, 'SRI MARKINI', 'Sleman, 01 Juli 1960', 63, 'Islam', 'Belum Kawin', 'P', 'Buruh', '800000', 9),
(15, '3402121002820002', 4, 'SULIMAH', 'Bantul, 10 Februari 1982', 40, 'Islam', 'Kawin', 'P', 'Buruh', '500000', 9),
(16, '3174041208800001', 5, 'Santoso', 'YOGYAKARTA, 12 Agustus 1980', 41, 'Islam', 'KAWIN', 'L', 'Petani', '4000000', 5),
(17, '3174042504900002', 5, 'Ari Ilham', 'YOGYAKARTA, 25 April 1990', 31, 'Islam', 'KAWIN', 'L', 'Swasta', '1800000', 5),
(18, '3274042901900001', 6, 'Riska', 'YOGYAKARTA, 29 Januari 1991', 30, 'Islam', 'KAWIN', 'P', 'Swasta', '2000000', 6),
(19, '3274042205810004', 6, 'jannah', 'YOGYAKARTA, 22 Mei 1981', 40, 'Islam', 'KAWIN', 'P', 'Ibu rumah tangga', '0', 6),
(20, '3374042106950001', 7, 'Danar kurniawan', 'Sleman, 21 Juni 1995', 26, 'Islam', 'Belum kawin', 'L', 'Swasta', '2300000', 2),
(21, '3374042205810004', 7, 'Joni wes', 'Sleman, 10 Juni 1980', 41, 'Islam', 'KAWIN', 'L', 'Buruh', '900000', 2),
(22, '3474041111990002', 8, 'Fajar harto', 'YOGYAKARTA, 11 November 1999', 22, 'Islam', 'Belum kawin', 'L', 'Swasta', '2200000', 3),
(23, '3374041212800002', 8, 'Sri', 'YOGYAKARTA, 12 Desember 1980', 41, 'Islam', 'KAWIN', 'P', 'Ibu rumah tangga', '0', 3),
(24, '3574042607980010', 9, 'Gaga', 'YOGYAKARTA, 26 Juli 1998', 23, 'Islam', 'Belum kawin', 'L', 'Petani', '3000000', 4),
(25, '3574042001850011', 9, 'Beni', 'YOGYAKARTA, 20 Januari 1985', 36, 'Islam', 'KAWIN', 'L', 'Petani', '3000000', 4),
(26, '3674042502900012', 10, 'Yanti nur', 'YOGYAKARTA, 25 Februari 1990', 31, 'Islam', 'KAWIN', 'P', 'Swasta', '2000000', 1),
(27, '3674042808870015', 10, 'Hana', 'YOGYAKARTA, 28 Agustus 1987', 34, 'Islam', 'KAWIN', 'P', 'Swasta', '2000000', 1),
(28, '2274042310880001', 11, 'Ingga rahma', 'YOGYAKARTA, 23 Oktober 1988', 33, 'Islam', 'KAWIN', 'P', 'Swasta', '21000000', 2),
(29, '2274042809860003', 11, 'Danang', 'YOGYAKARTA, 28 September 1986', 35, 'Islam', 'KAWIN', 'L', 'Buruh', '900000', 2),
(30, '2374042203790001', 12, 'Surti', 'Bantul, 22 Maret 1979', 42, 'Islam', 'KAWIN', 'P', 'Ibu rumah tangga', '0', 3),
(31, '2374042808870015', 12, 'Yayan', 'Bantul, 13 September 1990', 31, 'Islam', 'KAWIN', 'L', 'Petani', '3000000', 3);

-- --------------------------------------------------------

--
-- Table structure for table `pkh`
--

CREATE TABLE `pkh` (
  `id_pkh` int(11) NOT NULL,
  `status_pkh` varchar(255) NOT NULL,
  `periode_pkh` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pkh`
--

INSERT INTO `pkh` (`id_pkh`, `status_pkh`, `periode_pkh`) VALUES
(1, 'YA', 'NOVEMBER 2021'),
(2, 'TIDAK', '-');

-- --------------------------------------------------------

--
-- Table structure for table `provinsi`
--

CREATE TABLE `provinsi` (
  `id_provinsi` int(11) NOT NULL,
  `nama_provinsi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `provinsi`
--

INSERT INTO `provinsi` (`id_provinsi`, `nama_provinsi`) VALUES
(1, 'NANGGROE ACEH DARUSSALAM'),
(2, 'SUMATERA BAG UTARA'),
(3, 'SUMATERA BARAT'),
(4, 'RIAU'),
(5, 'JAMBI'),
(6, 'SUMATERA BAG. SELATAN'),
(7, 'BENGKULU'),
(8, 'LAMPUNG'),
(9, 'KEP. BANGKA BELITUNG'),
(10, 'DKI JAKARTA'),
(11, 'JAWA BARAT'),
(12, 'JAWA TENGAH'),
(13, 'DI JOGJAKARTA'),
(14, 'JAWA TIMUR'),
(15, 'BANTEN'),
(16, 'BALI'),
(17, 'NUSA TENGGARA BARAT'),
(18, 'NUSA TENGGARA TIMUR'),
(19, 'KALIMANTAN BARAT'),
(20, 'KALIMANTAN TENGAH'),
(21, 'KALIMANTAN SELATAN'),
(22, 'KALIMANTAN TIMUR'),
(23, 'SULAWESI UTARA'),
(24, 'SULAWESI TENGAH'),
(25, 'SULAWESI SELATAN');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `role` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `password`, `role`) VALUES
(1, 'cek@gmail.com', '81DC9BDB52D04DC20036DBD8313ED055', 1),
(2, 'cekcek@gmail.com', '81DC9BDB52D04DC20036DBD8313ED055', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alamat`
--
ALTER TABLE `alamat`
  ADD PRIMARY KEY (`id_alamat`),
  ADD KEY `fk_provinsi` (`id_provinsi`),
  ADD KEY `fk_kabkota` (`id_kabkota`),
  ADD KEY `fk_kecamatan` (`id_kecamatan`),
  ADD KEY `fk_kelurahan` (`id_kelurahan`);

--
-- Indexes for table `bantuan`
--
ALTER TABLE `bantuan`
  ADD PRIMARY KEY (`id_bantuan`),
  ADD KEY `fk_pbi` (`id_pbi`),
  ADD KEY `fk_pkh` (`id_pkh`),
  ADD KEY `fk_bpnt` (`id_bpnt`),
  ADD KEY `fk_penduduk` (`id_penduduk`);

--
-- Indexes for table `bpnt`
--
ALTER TABLE `bpnt`
  ADD PRIMARY KEY (`id_bpnt`);

--
-- Indexes for table `cek_input`
--
ALTER TABLE `cek_input`
  ADD PRIMARY KEY (`id_cek`);

--
-- Indexes for table `kabkota`
--
ALTER TABLE `kabkota`
  ADD PRIMARY KEY (`id_kabkota`);

--
-- Indexes for table `kartu_keluarga`
--
ALTER TABLE `kartu_keluarga`
  ADD PRIMARY KEY (`id_kk`);

--
-- Indexes for table `kecamatan`
--
ALTER TABLE `kecamatan`
  ADD PRIMARY KEY (`id_kecamatan`);

--
-- Indexes for table `kelurahan`
--
ALTER TABLE `kelurahan`
  ADD PRIMARY KEY (`id_kelurahan`);

--
-- Indexes for table `pbi`
--
ALTER TABLE `pbi`
  ADD PRIMARY KEY (`id_pbi`);

--
-- Indexes for table `penduduk`
--
ALTER TABLE `penduduk`
  ADD PRIMARY KEY (`id_penduduk`),
  ADD KEY `fk_kk` (`id_kk`),
  ADD KEY `fk_alamat` (`id_alamat`);

--
-- Indexes for table `pkh`
--
ALTER TABLE `pkh`
  ADD PRIMARY KEY (`id_pkh`);

--
-- Indexes for table `provinsi`
--
ALTER TABLE `provinsi`
  ADD PRIMARY KEY (`id_provinsi`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alamat`
--
ALTER TABLE `alamat`
  MODIFY `id_alamat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `bantuan`
--
ALTER TABLE `bantuan`
  MODIFY `id_bantuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `bpnt`
--
ALTER TABLE `bpnt`
  MODIFY `id_bpnt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cek_input`
--
ALTER TABLE `cek_input`
  MODIFY `id_cek` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kabkota`
--
ALTER TABLE `kabkota`
  MODIFY `id_kabkota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `kartu_keluarga`
--
ALTER TABLE `kartu_keluarga`
  MODIFY `id_kk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `kecamatan`
--
ALTER TABLE `kecamatan`
  MODIFY `id_kecamatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `kelurahan`
--
ALTER TABLE `kelurahan`
  MODIFY `id_kelurahan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `pbi`
--
ALTER TABLE `pbi`
  MODIFY `id_pbi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `penduduk`
--
ALTER TABLE `penduduk`
  MODIFY `id_penduduk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `pkh`
--
ALTER TABLE `pkh`
  MODIFY `id_pkh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `provinsi`
--
ALTER TABLE `provinsi`
  MODIFY `id_provinsi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `alamat`
--
ALTER TABLE `alamat`
  ADD CONSTRAINT `fk_kabkota` FOREIGN KEY (`id_kabkota`) REFERENCES `kabkota` (`id_kabkota`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_kecamatan` FOREIGN KEY (`id_kecamatan`) REFERENCES `kecamatan` (`id_kecamatan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_kelurahan` FOREIGN KEY (`id_kelurahan`) REFERENCES `kelurahan` (`id_kelurahan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_provinsi` FOREIGN KEY (`id_provinsi`) REFERENCES `provinsi` (`id_provinsi`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `bantuan`
--
ALTER TABLE `bantuan`
  ADD CONSTRAINT `fk_bpnt` FOREIGN KEY (`id_bpnt`) REFERENCES `bpnt` (`id_bpnt`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_pbi` FOREIGN KEY (`id_pbi`) REFERENCES `pbi` (`id_pbi`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_penduduk` FOREIGN KEY (`id_penduduk`) REFERENCES `penduduk` (`id_penduduk`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_pkh` FOREIGN KEY (`id_pkh`) REFERENCES `pkh` (`id_pkh`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `penduduk`
--
ALTER TABLE `penduduk`
  ADD CONSTRAINT `fk_alamat` FOREIGN KEY (`id_alamat`) REFERENCES `alamat` (`id_alamat`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_kk` FOREIGN KEY (`id_kk`) REFERENCES `kartu_keluarga` (`id_kk`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
