-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Jun 2018 pada 08.45
-- Versi server: 10.1.31-MariaDB
-- Versi PHP: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ligabola`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `team`
--

CREATE TABLE `team` (
  `kd_team` int(22) NOT NULL,
  `nama_team` varchar(40) NOT NULL,
  `nama_kapten` varchar(40) NOT NULL,
  `anggota1` varchar(40) NOT NULL,
  `anggota2` varchar(40) NOT NULL,
  `anggota3` varchar(40) NOT NULL,
  `anggota4` varchar(40) NOT NULL,
  `anggota5` varchar(40) NOT NULL,
  `anggota6` varchar(40) NOT NULL,
  `anggota7` varchar(40) NOT NULL,
  `anggota8` varchar(40) NOT NULL,
  `anggota9` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `team`
--

INSERT INTO `team` (`kd_team`, `nama_team`, `nama_kapten`, `anggota1`, `anggota2`, `anggota3`, `anggota4`, `anggota5`, `anggota6`, `anggota7`, `anggota8`, `anggota9`) VALUES
(26, 'Jagorawi', 'Ahmad Dahlan', 'Bopek situa', 'Sagad mandarin', 'Ucok Monar', 'Grilliad Katuros', 'Ahmad Bustomi', 'Denny Askar', 'mamat sudir', 'sudiman said', 'Romli Keuch'),
(27, 'Jagorawi', 'Kevin Hutapea', 'Bopek situa', 'Raditya morina', 'Ucok Monar', 'Grilliad Katuros', 'Ahmad Bustomi', 'Denny Askar', 'mamat sudir', 'sudiman said', 'Romli Keuch'),
(28, 'kotak kotak', 'Ahmad Romli', 'Romdon Gumelar', 'pasundatu', 'keropi adura', 'brain', 'Romdon Gurinda', 'mamat robi', 'Fauzan Widodo', 'Gamang Gorida', 'Kedoy Danur'),
(29, 'guroba', 'Kevin aduyi', 'paulus', 'Raditya morina', 'keropi adura', 'Grilliad Katuros', 'Romdon Gurinda', 'Denny Askar', 'Fauzan Widodo', 'sudiman said', 'Kedoy Danur'),
(30, 'ojo lali', 'Ahmad Romli', 'Romdon Gumelar', 'Sagad mandarin', 'Ucok Monar', 'ramud duramo', 'Romdon Gurinda', 'Denny Askar', 'Fauzan Widodo', 'Gamang Gorida', 'Kedoy Danur'),
(31, 'kotak kotak', 'Kevin Hutapea', 'Romdon Gumelar', 'pasundatu', 'brian', 'ramud duramo', 'Ahmad Bustomi', 'mamat robi', 'mamat sudir', 'Gamang Gorida', 'Kedoy Danur'),
(32, 'Robinhuud', 'Ahmad Romli', 'Romdon Gumelar', 'Raditya morina', 'keropi adura', 'ramud duramo', 'Romdon Gurinda', 'Denny Askar', 'Fauzan Widodo', 'Gamang Gorida', 'Romli Keuch'),
(33, 'Supermaan', 'Ahmad Dahlan', 'sudirman', 'Sagad mandarin', 'brian', 'Grilliad Katuros', 'Ahmad Bustomi', 'Denny Askar', 'Fauzan Widodo', 'Gamang Gorida', 'Kedoy Danur'),
(34, 'Daminda', 'Kevin Hutapea', 'Bopek situa', 'Raditya morina', 'brian', 'ramud duramo', 'Ahmad Bustomi', 'mamat robi', 'Fauzan Widodo', 'sudiman said', 'iwan romli'),
(35, 'Rojolali', 'Ahmad Romli', 'rumidal samud', 'Sagad mandarin', 'Ucok Monar', 'ramud duramo', 'Romdon Gurinda', 'Denny Askar', 'Fauzan Widodo', 'Gamang Gorida', 'Romli Keuch'),
(36, 'Jargon', 'Agung Gumelar', 'paulus', 'Raditya morina', 'brian', 'ramud duramo', 'Romdon Gurinda', 'mamat robi', 'Fauzan Widodo', 'Gamang Gorida', 'Kedoy Danur'),
(37, 'Jagorawi', 'Kevin Hutapea', 'Romdon Gumelar', 'Sagad mandarin', 'Ucok Monar', 'Grilliad Katuros', 'sumirna', 'Periat Maharaja', 'mamat sudir', 'Gamang Gorida', 'Romli Keuch'),
(38, 'guroba', 'Ahmad Romli', 'Bopek situa', 'Sagad mandarin', 'keropi adura', 'Grilliad Katuros', 'Romdon Gurinda', 'Denny Askar', 'Fauzan Widodo', 'sudiman said', 'Kedoy Danur'),
(39, 'Prooss', 'Kevin Hutapea', 'Bopek situa', 'Raditya morina', 'brian', 'ramud duramo', 'sumirna', 'Denny Askar', 'Fauzan Widodo', 'Gamang Gorida', 'Romli Keuch'),
(41, 'guroba', 'Ahmad Romli', 'Romdon Gumelar', 'Sagad mandarin', 'brian', 'Grilliad Katuros', 'Ahmad Bustomi', 'Denny Askar', 'Fauzan Widodo', 'Gamang Gorida', 'Romli Keuch'),
(43, 'Jagorawi', 'Ahmad Romli', 'Bopek situa', 'Raditya morina', 'brian', 'Grilliad Katuros', 'Ahmad Bustomi', 'mamat robi', 'Fauzan Widodo', 'Gamang Gorida', 'Romli Keuch');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`kd_team`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `team`
--
ALTER TABLE `team`
  MODIFY `kd_team` int(22) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
