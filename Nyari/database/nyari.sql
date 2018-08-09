-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Jun 2018 pada 02.54
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
-- Database: `nyari`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `no_berita` int(25) NOT NULL,
  `no_usr` int(12) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `judul` varchar(25) NOT NULL,
  `kota` varchar(30) NOT NULL,
  `jkel` varchar(15) NOT NULL,
  `umur` varchar(25) NOT NULL,
  `ciri-ciri` varchar(30) NOT NULL,
  `deskripsi` varchar(100) NOT NULL,
  `hubungi` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`no_berita`, `no_usr`, `foto`, `nama`, `judul`, `kota`, `jkel`, `umur`, `ciri-ciri`, `deskripsi`, `hubungi`) VALUES
(1, 1, '1.jpg', 'Suyatno', 'Hilang', 'bekasi', 'Laki-laki', '70 thn', 'Rambut beruban', 'tinggi 170 cm, terakhir di bekasi', '0841623712'),
(2, 2, '2.jpg', 'Indah dwi oktavia', 'Menghilang', 'bekasi', 'perempuan', '20thn', 'memakai kerudung', 'tinggi badan 150cm', '08127123712'),
(3, 2, '3.jpg', 'Anggitya jaya pranat', 'Menghilang', 'bekasi', 'perempuan', '23thn', 'rambut sampai punggung', 'murah senyum', '0812371624'),
(4, 1, '4.jpg', 'Sulasno Dwi', 'Hilang', 'bekasi', 'Laki-laki', '24', 'Rambut pendek cepak', 'terakhir memakai kemeja biru', '08326462334'),
(5, 1, '5.jpg', 'Salwa kamila', 'Hilang', 'bekasi', 'perempuan', '14thn', 'rambut sampai pundak', 'jika menemukan akan mendapat uang 30Jt.', '08123612311'),
(6, 2, '6.jpg', 'Dian novita sari', 'Menghilang', 'bekasi', 'Laki-laki', '17thn', '165cm berat 60kg', 'terakhir bilang ke orang tua pergi mengerjakan tugas di rumah temen', '08123712318'),
(7, 1, '7.jpg', 'Th. Sudarto', 'Hilang', 'bekasi', 'Laki-laki', '68thn', 'kumis panjang sampai mulut', 'terakhir menggunakan baju berwarna merah', '08123612731'),
(8, 1, '8.jpg', 'Gumilang a.w', 'Hilang', 'depok', 'Laki-laki', '3thn', 'rambut pendek 1 cm', 'baju terakhir yang di gunakan abu-abu', '0812381238'),
(9, 1, '9.jpg', 'Suci mesayu anisa pu', 'Hilang', 'bekasi', 'perempuan', '19thn', 'menggunakan kerudung', 'warna kerudung terakhir yang di pakai navy', '08312631723'),
(10, 1, '10.jpg', 'Arman nugraha saputr', 'Hilang', 'bekasi', 'Laki-laki', '20thn', 'rambut hitam, tinggi 160cm', 'baju terakhir yang di gunakan warna biru levis', '081239123123'),
(11, 1, '11.jpg', 'Verlin anggela', 'Hilang', 'bekasi', 'perempuan', '15thn', 'panjang rambut sampai pundak', 'juka menemukan akan mendapat reward 100jt', '0812361241'),
(12, 2, '12.jpg', 'Kusianto', 'Menghilang', 'jakarta', 'Laki-laki', '73thn', 'rambut sedikit dan beruban', 'terakhir menggunakan baju koko', '08123612412'),
(13, 1, 'ajijah.png', 'Kakek aluman', 'Hilang', 'bekasi', 'Laki-laki', '73thn', 'rambut beruban ', 'terakhir menggunakan baju koko dan peci', '0812361232'),
(14, 1, '13.jpg', 'Johan saputra', 'Hilang', 'bekasi', 'Laki-laki', '9thn', 'rambut tidak panjang', 'terakhir menggunakan seragam sekolah smp', '08174123812');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `no_usr` int(12) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(25) NOT NULL,
  `no_telp` varchar(25) NOT NULL,
  `kota` varchar(20) NOT NULL,
  `alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`no_usr`, `username`, `password`, `nama`, `email`, `no_telp`, `kota`, `alamat`) VALUES
(1, 'rifky', 'asdzxcqwe', 'Muhammad Rifky Fadillah', 'rifkyqw@gmail.com', '08312316223', 'bekasi', 'Jlwibawa mukti 4 rt 1 rw12'),
(2, 'superadmin', 'asdzxcqwe', 'Muhammad Azhari Fauzan', 'rifkyX@gmail.com', '023812312312', 'jakarta', 'Jl kranggan, Rt 01/09, perum dua raya, jakarta'),
(3, 'Ardi', '123456', 'Ardi Rahmat', 'ardidogy@gmail.com', '08654545678', 'bekasi', 'jl wibawa mukti 4');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`no_berita`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`no_usr`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `berita`
--
ALTER TABLE `berita`
  MODIFY `no_berita` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `no_usr` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
