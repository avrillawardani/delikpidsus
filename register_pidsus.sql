-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 10 Nov 2021 pada 10.13
-- Versi Server: 10.1.10-MariaDB
-- PHP Version: 7.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `register_pidsus`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `rp1`
--

CREATE TABLE `rp1` (
  `id` int(10) NOT NULL,
  `sumber_penerima` varchar(50) NOT NULL,
  `isi_ringkas` varchar(100) NOT NULL,
  `identitas_terlapor` varchar(50) NOT NULL,
  `pilihan` varchar(50) NOT NULL,
  `ket` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `rp1`
--

INSERT INTO `rp1` (`id`, `sumber_penerima`, `isi_ringkas`, `identitas_terlapor`, `pilihan`, `ket`) VALUES
(21, 'Avrilla Eta', 'Pencurian sepeda motor', 'Indah Septiani', 'Diteruskan', '-'),
(22, 'Avrilla Eta Cahya Wardani', 'Dua hari lalu ada kejadian pencurian di dekat Alfamart Cuwik.', 'Orang Ketiga', 'Diarsipkan', 'Sampai sini saja, takutnya salah orang, atau salah lihat, atau salah paham');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rp2`
--

CREATE TABLE `rp2` (
  `id` int(10) NOT NULL,
  `tanggal` date NOT NULL,
  `kasus` varchar(100) NOT NULL,
  `jaksa` varchar(50) NOT NULL,
  `pelapor` varchar(100) NOT NULL,
  `terlapor` varchar(100) NOT NULL,
  `penyelesaian` varchar(40) NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `rp2`
--

INSERT INTO `rp2` (`id`, `tanggal`, `kasus`, `jaksa`, `pelapor`, `terlapor`, `penyelesaian`, `keterangan`) VALUES
(1, '2021-10-15', 'Kasus jaman dulu', 'Choirul', 'Indah Kalalo', 'Jupe', 'Kekluargaan', 'Wis lah pasrah wae');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `rp1`
--
ALTER TABLE `rp1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rp2`
--
ALTER TABLE `rp2`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `rp1`
--
ALTER TABLE `rp1`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `rp2`
--
ALTER TABLE `rp2`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
