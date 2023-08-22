-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Agu 2023 pada 17.47
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qtasnim`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `ingridients`
--

CREATE TABLE `ingridients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `no` int(11) NOT NULL,
  `nama_barang` varchar(255) NOT NULL,
  `stok` int(11) NOT NULL,
  `jumlah_terjual` int(11) NOT NULL,
  `tanggal_transaksi` date NOT NULL,
  `jenis_barang` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `ingridients`
--

INSERT INTO `ingridients` (`id`, `no`, `nama_barang`, `stok`, `jumlah_terjual`, `tanggal_transaksi`, `jenis_barang`, `created_at`, `updated_at`) VALUES
(3, 1, 'Kopi', 100, 10, '2021-05-01', 'Konsumsi', '2023-08-21 23:05:32', '2023-08-22 03:14:37'),
(5, 2, 'Teh', 100, 19, '2021-05-05', 'Konsumsi', '2023-08-22 03:15:14', '2023-08-22 03:15:14'),
(6, 3, 'Kopi', 90, 15, '2021-05-10', 'Konsumsi', '2023-08-22 03:15:47', '2023-08-22 03:15:47'),
(7, 4, 'Pasta Gigi', 100, 20, '2021-05-11', 'Pembersih', '2023-08-22 03:16:20', '2023-08-22 03:16:20'),
(8, 5, 'Sabun Mandi', 100, 30, '2021-05-11', 'Pembersih', '2023-08-22 03:16:47', '2023-08-22 03:16:47'),
(9, 6, 'Sampo', 100, 25, '2021-05-12', 'Pembersih', '2023-08-22 03:17:14', '2023-08-22 03:17:14'),
(13, 7, 'Teh', 81, 5, '2021-05-12', 'Konsumsi', '2023-08-22 08:41:12', '2023-08-22 08:41:12');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `ingridients`
--
ALTER TABLE `ingridients`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `ingridients`
--
ALTER TABLE `ingridients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
