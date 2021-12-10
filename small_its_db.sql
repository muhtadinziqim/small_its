-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 10 Des 2021 pada 11.00
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `small_its_db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `laporan`
--

CREATE TABLE `laporan` (
  `id_laporan` int(11) NOT NULL,
  `nama` varchar(200) DEFAULT NULL,
  `tanggal_dan_waktu` timestamp NULL DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `no_identitas` varchar(80) DEFAULT NULL,
  `no_hp` varchar(20) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `permasalahan` text DEFAULT NULL,
  `solusi` text DEFAULT NULL,
  `berkas_pendukung` varchar(255) DEFAULT NULL,
  `bukti_solusi` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `laporan`
--

INSERT INTO `laporan` (`id_laporan`, `nama`, `tanggal_dan_waktu`, `alamat`, `no_identitas`, `no_hp`, `status`, `permasalahan`, `solusi`, `berkas_pendukung`, `bukti_solusi`) VALUES
(1, 'Sukirno', '2021-12-10 03:52:34', 'Surabaya', '809812312742', '097987666578', 'Sudah Ditindak Lanjut', 'Saya kehilangan gantungan kunci minion di sekitar kolam rektorat. Kejadiannya malam minggu tanggal 31 desember 2020.', 'Kemaren sudah saya cari bersama dengan pak rektor. Dan sudah ketemu dilahkan diambil', '211210105234_Berkas_Pendukung.pdf', '211210105528_screencapture-localhost-small-its-keamanan-laporan-2021-12-10-16_53_57.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `aktor` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `aktor`) VALUES
(1, 'biro keamanan', 'ab7cf826f0396cc3dba554d9e72b4ec6', 'Biro Keamanan'),
(2, 'user1', '24c9e15e52afc47c225b757e7bee1f9d', 'User');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`id_laporan`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `laporan`
--
ALTER TABLE `laporan`
  MODIFY `id_laporan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
