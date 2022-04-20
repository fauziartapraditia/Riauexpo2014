-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Inang: 127.0.0.1
-- Waktu pembuatan: 20 Feb 2017 pada 23.57
-- Versi Server: 5.5.27
-- Versi PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `monitoring-gudang-inventaris-ujik`
--
CREATE DATABASE `monitoring-gudang-inventaris-ujik` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `monitoring-gudang-inventaris-ujik`;

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE IF NOT EXISTS `barang` (
  `id_barang` varchar(10) NOT NULL,
  `nama_barang` varchar(35) DEFAULT NULL,
  `jumlah_barang` int(5) DEFAULT NULL,
  PRIMARY KEY (`id_barang`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`id_barang`, `nama_barang`, `jumlah_barang`) VALUES
('BR144', 'Slempang Wisuda 1', 93),
('BR515', 'TONGKAT SAPU', 39),
('BR601', 'Camera', 12);

-- --------------------------------------------------------

--
-- Struktur dari tabel `peminjaman`
--

CREATE TABLE IF NOT EXISTS `peminjaman` (
  `id_peminjaman` int(11) NOT NULL AUTO_INCREMENT,
  `id_barang` varchar(20) DEFAULT NULL,
  `no_faktur` varchar(20) DEFAULT NULL,
  `nama_peminjam` char(60) DEFAULT NULL,
  `jumlah_pinjam` int(11) DEFAULT NULL,
  `keperluan` varchar(65) DEFAULT NULL,
  `tanggal_pinjam` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `tanggal_kembali` datetime DEFAULT NULL,
  PRIMARY KEY (`id_peminjaman`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data untuk tabel `peminjaman`
--

INSERT INTO `peminjaman` (`id_peminjaman`, `id_barang`, `no_faktur`, `nama_peminjam`, `jumlah_pinjam`, `keperluan`, `tanggal_pinjam`, `tanggal_kembali`) VALUES
(9, 'BR515', 'FK232', 'ERIANTO', 3, 'PINJAM AJA', '2017-02-19 10:50:01', '2017-02-19 19:42:58'),
(10, 'BR601', 'FK232', 'ERIANTO', 9, 'PINJAM AJA', '2017-02-19 10:50:32', '2017-02-19 19:41:55'),
(11, 'BR144', 'FK431', 'TOYING', 20, 'Untuk Wisuda la lay', '2017-02-19 12:48:51', '2017-02-19 20:46:32'),
(12, 'BR144', 'FK182', 'UJIK', 7, 'WISUDA', '2017-02-19 12:53:56', NULL),
(13, 'BR515', 'FK182', 'UJIK', 4, 'NYAPU', '2017-02-19 12:54:14', NULL),
(14, 'BR601', 'FK182', 'UJIK', 2, 'MOTO', '2017-02-19 12:54:32', NULL),
(15, 'BR601', 'FK723', 'kkk', 1, 'tt', '2017-02-19 14:09:14', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengguna`
--

CREATE TABLE IF NOT EXISTS `pengguna` (
  `username` char(20) NOT NULL,
  `nama` varchar(60) DEFAULT NULL,
  `level` enum('admin','karyawan') DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengguna`
--

INSERT INTO `pengguna` (`username`, `nama`, `level`, `password`) VALUES
('admin', 'ERIANTO', 'admin', 'admin'),
('ujik', 'FAUZI 1', 'karyawan', 'ujik');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
