-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Bulan Mei 2023 pada 08.02
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restoran_aromasteak`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(10) NOT NULL,
  `nama_admin` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_hp` bigint(15) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_admin`, `alamat`, `no_hp`, `Username`, `Password`) VALUES
(34, 'esti', 'fajar', 819099988, 'est2021', '2021est'),
(35, 'kepin', 'asabri 3', 81310063673, 'kepin11', '11kepin'),
(36, 'arvin', 'fajar', 12123, 'fre', 'fre3'),
(37, 'RIKO', 'ZZ', 819191917364, 'RIK', '12345');

-- --------------------------------------------------------

--
-- Struktur dari tabel `galeri_ruangan`
--

CREATE TABLE `galeri_ruangan` (
  `id_galeri` int(5) NOT NULL,
  `nama_ruangan` varchar(50) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jam_reservasi`
--

CREATE TABLE `jam_reservasi` (
  `id_jam` int(10) NOT NULL,
  `waktu` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jam_reservasi`
--

INSERT INTO `jam_reservasi` (`id_jam`, `waktu`) VALUES
(1, '11.00-17.20'),
(8, '13.10-19.00'),
(11, '07.00-08.00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `meja`
--

CREATE TABLE `meja` (
  `id_meja` int(10) NOT NULL,
  `no_meja` int(10) NOT NULL,
  `kapasitas_meja` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `meja`
--

INSERT INTO `meja` (`id_meja`, `no_meja`, `kapasitas_meja`) VALUES
(2, 3, 4),
(3, 3, 4),
(5, 14, 6),
(6, 10, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `menu`
--

CREATE TABLE `menu` (
  `id_menu` int(10) NOT NULL,
  `harga` int(10) NOT NULL,
  `keterangan` text NOT NULL,
  `status` enum('Tersedia','Habis') NOT NULL,
  `nama_menu` varchar(50) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `menu`
--

INSERT INTO `menu` (`id_menu`, `harga`, `keterangan`, `status`, `nama_menu`, `gambar`) VALUES
(1, 120000, 'BBQ', 'Tersedia', 'Steak Sapi', 'steak sapi 2.jpeg'),
(30, 110000, 'Black Paper', 'Tersedia', 'steak ayam', 'steak ayam.jpeg'),
(34, 20000, 'Mushroom', 'Tersedia', 'manuk', 'cookies and cream.jpeg'),
(36, 1222, 'Mushroom', 'Tersedia', 'babi', 'steak sapi 2.jpeg'),
(39, 12000, 'krispiiii', 'Tersedia', 'kulit ', 'kulit ayan.jpeg'),
(40, 15000, 'bbq', 'Tersedia', 'steak 1', 'steak sapi.jpeg'),
(41, 12000, 'normal ice ', 'Tersedia', 'stroberi', 'strowberrrrri.jpeg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` int(10) NOT NULL,
  `username` varchar(10) NOT NULL,
  `Password` varchar(10) NOT NULL,
  `nama_pelanggan` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_hp` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `username`, `Password`, `nama_pelanggan`, `alamat`, `no_hp`) VALUES
(1, 'ecyxxyy', 'sti11', 'Lesti', 'fajar permai2', 2147483647),
(9893, 'les2021', '2021les', 'lesti', 'y', 819910077),
(9894, 'les2003', '2003ti', 'Lesti', 'Fajar Permai I', 2147483647);

-- --------------------------------------------------------

--
-- Struktur dari tabel `reservasi`
--

CREATE TABLE `reservasi` (
  `id_reservasi` int(10) NOT NULL,
  `id_pelanggan` int(10) NOT NULL,
  `id_meja` int(10) NOT NULL,
  `id_menu` int(10) NOT NULL,
  `id_jam` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `reservasi`
--

INSERT INTO `reservasi` (`id_reservasi`, `id_pelanggan`, `id_meja`, `id_menu`, `id_jam`) VALUES
(1, 1, 1, 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `galeri_ruangan`
--
ALTER TABLE `galeri_ruangan`
  ADD PRIMARY KEY (`id_galeri`);

--
-- Indeks untuk tabel `jam_reservasi`
--
ALTER TABLE `jam_reservasi`
  ADD PRIMARY KEY (`id_jam`);

--
-- Indeks untuk tabel `meja`
--
ALTER TABLE `meja`
  ADD PRIMARY KEY (`id_meja`);

--
-- Indeks untuk tabel `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indeks untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indeks untuk tabel `reservasi`
--
ALTER TABLE `reservasi`
  ADD PRIMARY KEY (`id_reservasi`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT untuk tabel `galeri_ruangan`
--
ALTER TABLE `galeri_ruangan`
  MODIFY `id_galeri` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `jam_reservasi`
--
ALTER TABLE `jam_reservasi`
  MODIFY `id_jam` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `meja`
--
ALTER TABLE `meja`
  MODIFY `id_meja` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `menu`
--
ALTER TABLE `menu`
  MODIFY `id_menu` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id_pelanggan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9895;

--
-- AUTO_INCREMENT untuk tabel `reservasi`
--
ALTER TABLE `reservasi`
  MODIFY `id_reservasi` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
