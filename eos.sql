-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Jan 2020 pada 03.20
-- Versi server: 10.1.36-MariaDB
-- Versi PHP: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eos`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kecamatan`
--

CREATE TABLE `kecamatan` (
  `idkecamatan` int(11) NOT NULL,
  `kecamatan` varchar(30) NOT NULL,
  `sesi` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kecamatan`
--

INSERT INTO `kecamatan` (`idkecamatan`, `kecamatan`, `sesi`) VALUES
(1, 'Banyuwangi', '1'),
(2, 'Glagah', '1'),
(3, 'Giri', '1'),
(4, 'Licin', '1'),
(5, 'Kalipuro', '1'),
(6, 'Kabat', '1'),
(7, 'Muncar', '2'),
(8, 'Rogojampi', '1'),
(9, 'Songgon', '2'),
(10, 'Srono', '2'),
(11, 'Singojuruh', '2'),
(12, 'Blimbingsari', '2'),
(13, 'Bangorejo', '2'),
(14, 'Cluring', '2'),
(15, 'Pesanggaran', '2'),
(16, 'Purwoharjo', '2'),
(17, 'Tegaldlimo', '2'),
(18, 'Gambiran', '2'),
(19, 'Genteng', '2'),
(20, 'Glenmore', '2'),
(21, 'Kalibaru', '2'),
(22, 'Siliragung', '2'),
(23, 'Tegalsari', '2'),
(24, 'Wongsorejo', '2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `peserta`
--

CREATE TABLE `peserta` (
  `idpeserta` int(11) NOT NULL,
  `nopeserta` char(10) NOT NULL,
  `nama` varchar(60) NOT NULL,
  `email` varchar(80) NOT NULL,
  `jeniskelamin` enum('L','P') NOT NULL,
  `tplahir` varchar(30) NOT NULL,
  `tglahir` varchar(30) NOT NULL,
  `alamat` varchar(150) NOT NULL,
  `idkecamatan` int(11) NOT NULL,
  `telp` varchar(15) NOT NULL,
  `sekolah` varchar(50) NOT NULL,
  `kelas` enum('VII','VIII','IX') NOT NULL,
  `pendamping` varchar(60) NOT NULL,
  `telppendamping` varchar(15) NOT NULL,
  `tgldaftar` datetime NOT NULL,
  `tf` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `iduser` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`iduser`, `nama`, `username`, `password`) VALUES
(2, 'admin1', 'admin', '21232f297a57a5a743894a0e4a801fc3');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kecamatan`
--
ALTER TABLE `kecamatan`
  ADD PRIMARY KEY (`idkecamatan`);

--
-- Indeks untuk tabel `peserta`
--
ALTER TABLE `peserta`
  ADD PRIMARY KEY (`idpeserta`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`iduser`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `peserta`
--
ALTER TABLE `peserta`
  MODIFY `idpeserta` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
