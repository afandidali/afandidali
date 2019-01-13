-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Okt 2018 pada 11.38
-- Versi server: 10.1.35-MariaDB
-- Versi PHP: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kpups`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `username` varchar(25) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `calonkahim`
--

CREATE TABLE `calonkahim` (
  `idCalon` int(5) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jenisKelamin` varchar(10) NOT NULL,
  `nim` varchar(10) NOT NULL,
  `kelas` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `visi` varchar(1000) NOT NULL,
  `misi` varchar(1000) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `noUrut` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `peserta`
--

CREATE TABLE `peserta` (
  `idPeserta` varchar(25) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jenisKelamin` varchar(10) NOT NULL,
  `noTelpon` varchar(15) NOT NULL,
  `email` varchar(40) NOT NULL,
  `kelas` varchar(20) NOT NULL,
  `noInduk` varchar(30) NOT NULL,
  `status` varchar(25) NOT NULL,
  `tglInput` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `voting`
--

CREATE TABLE `voting` (
  `idVoting` int(5) NOT NULL,
  `idPeserta` varchar(25) NOT NULL,
  `idCalon` int(5) NOT NULL,
  `tglVote` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indeks untuk tabel `calonkahim`
--
ALTER TABLE `calonkahim`
  ADD PRIMARY KEY (`idCalon`);

--
-- Indeks untuk tabel `peserta`
--
ALTER TABLE `peserta`
  ADD PRIMARY KEY (`idPeserta`);

--
-- Indeks untuk tabel `voting`
--
ALTER TABLE `voting`
  ADD PRIMARY KEY (`idVoting`),
  ADD KEY `idPeserta` (`idPeserta`),
  ADD KEY `idCalon` (`idCalon`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `calonkahim`
--
ALTER TABLE `calonkahim`
  MODIFY `idCalon` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `voting`
--
ALTER TABLE `voting`
  MODIFY `idVoting` int(5) NOT NULL AUTO_INCREMENT;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `voting`
--
ALTER TABLE `voting`
  ADD CONSTRAINT `voting_ibfk_1` FOREIGN KEY (`idCalon`) REFERENCES `calonkahim` (`idCalon`),
  ADD CONSTRAINT `voting_ibfk_2` FOREIGN KEY (`idPeserta`) REFERENCES `peserta` (`idPeserta`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
