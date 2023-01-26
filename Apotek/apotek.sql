-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Jan 2023 pada 09.15
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `apotek`
--
CREATE DATABASE IF NOT EXISTS `apotek` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `apotek`;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbobat`
--

CREATE TABLE `tbobat` (
  `kd_barang` varchar(5) NOT NULL,
  `nm_barang` varchar(50) NOT NULL,
  `kd_satuan` varchar(10) NOT NULL,
  `kd_kategori` varchar(10) NOT NULL,
  `hrg_jual` int(11) NOT NULL,
  `hrg_beli` int(11) NOT NULL,
  `active` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbobat`
--

INSERT INTO `tbobat` (`kd_barang`, `nm_barang`, `kd_satuan`, `kd_kategori`, `hrg_jual`, `hrg_beli`, `active`) VALUES
('1', 'Paramex', 'pcs', 'Pusing', 3000, 2500, 'y'),
('2', 'Oskadond', 'pcs', 'pusing', 3000, 2500, 'y'),
('3', 'ultraflu', 'pcs', 'flu', 3500, 3000, 'y'),
('4', 'Oskadon', 'pcs', 'pusing', 3000, 2500, 'y');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbobat`
--
ALTER TABLE `tbobat`
  ADD PRIMARY KEY (`kd_barang`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
