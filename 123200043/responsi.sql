-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Nov 2021 pada 08.14
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `responsi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `inventaris`
--

CREATE TABLE `inventaris` (
  `kode_barang` varchar(30) NOT NULL,
  `nama_barang` varchar(30) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `satuan` varchar(15) NOT NULL,
  `tgl_datang` date NOT NULL,
  `kategori` varchar(20) NOT NULL,
  `status_barang` varchar(20) NOT NULL,
  `harga` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `inventaris`
--

INSERT INTO `inventaris` (`kode_barang`, `nama_barang`, `jumlah`, `satuan`, `tgl_datang`, `kategori`, `status_barang`, `harga`) VALUES
('1234', 'Buku', 100, 'Unit', '2021-11-01', 'Alat Tulis Kantor', 'baik', 3000),
('12345', 'Pena', 10, 'Unit', '2021-11-05', 'Alat Tulis Kantor', 'baik', 1500),
('12334', 'Spido', 23, 'Unit', '2021-11-03', 'Alat Tulis Kantor', 'baik', 5000),
('23456', 'Supra ', 3, 'Unit', '2021-08-12', 'Kendaraan', 'perawatan', 7000000),
('23465', 'Honda Brio', 1, 'Unit', '2021-11-03', 'Kendaraan', 'baik', 98000000),
('34567', 'ASUS A412DA ', 10, 'Unit', '2021-06-17', 'Elektronik', 'baik', 8000000),
('345674', 'HP ASUS ROG 5', 10, 'Unit', '2021-07-08', 'Elektronik', 'baik', 20000000),
('45678', 'Semen Padang', 300, 'Sak', '2021-07-22', 'Bangunan', 'baik', 59000),
('45656', 'Cat Hijau', 24, 'Kaleng', '2021-11-23', 'Bangunan', 'baik', 50000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `petugas`
--

CREATE TABLE `petugas` (
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `no_tlp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `petugas`
--

INSERT INTO `petugas` (`username`, `password`, `nama_lengkap`, `email`, `no_tlp`) VALUES
('admin', 'admin', 'admin', 'user@gmail.com', '23456'),
('Jeremy', 'jeremy', 'Jeremy Sitorus', 'jeremykevin967@gmail.com', '0812111111111'),
('user', 'user', 'user nih ', 'bingungbro325@gmail.com', '081111123244');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
