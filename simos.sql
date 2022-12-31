-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 31 Des 2022 pada 11.21
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simos`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `customer`
--

CREATE TABLE `customer` (
  `id_customer` int(11) NOT NULL,
  `nama_customer` varchar(50) NOT NULL,
  `alamat_customer` varchar(50) NOT NULL,
  `no_hp_customer` varchar(50) NOT NULL,
  `pemilik_customer` varchar(50) NOT NULL,
  `id_sales` int(11) NOT NULL,
  `kunjungan_terakhir` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `customer`
--

INSERT INTO `customer` (`id_customer`, `nama_customer`, `alamat_customer`, `no_hp_customer`, `pemilik_customer`, `id_sales`, `kunjungan_terakhir`) VALUES
(1, 'Arif Jaya', 'Jati Wetan', '234823423', 'Arif Affandi', 4, '0000-00-00 00:00:00'),
(2, 'Leto Shop', 'Tanjung Karang', '8877121', 'Anik Budiartika', 4, '2022-12-29 23:17:21'),
(3, 'Muhdi Market', 'Pasuruhan Kidul', '67867867', 'Ali Mahmudi', 4, '0000-00-00 00:00:00'),
(4, 'Harsanto Jaya', 'Pasuruhan Kidul', '1221212', 'Amanda Sulistiyati', 4, '2023-01-01 20:02:10'),
(5, 'Didik Shop', 'Jati Kulon', '239409234', 'Ahmad Hamdan', 4, '2023-01-01 20:01:36'),
(6, 'Susi Market', 'Tanjung Karang', '6786786', 'Zulfa Nur Susianti', 4, '2022-12-29 06:19:11'),
(7, 'Heru Jaya', 'Karangmalang', '45096485694', 'Miftahul Ulum', 5, '2023-01-01 20:03:30'),
(8, 'Roda Lima Shop', 'Klumpit', '876786768', 'Arif Ahmad Jaelani', 5, '0000-00-00 00:00:00'),
(9, 'Ahmad Jaya Abadi', 'Besito', '879789', 'Ahmad Ilham Adji', 5, '0000-00-00 00:00:00'),
(10, 'Prambatan Mart', 'Prambatan Lor', '9238434', 'Nafisa Faradilla', 5, '0000-00-00 00:00:00'),
(11, 'Al Kaesy Mart', 'Terban', '4673624', 'Nada Syaikaila', 5, '2022-12-29 16:54:49'),
(12, 'Bagas Shop', 'Klaling', '234234', 'Bagaskara Dimastrata', 5, '2022-12-29 17:01:06'),
(13, 'Nawa Shop', 'Jurang', '7767567', 'Ilham Syaqib', 3, '0000-00-00 00:00:00'),
(14, 'Tiga Saudara Market', 'Jurang', '123107', 'M Wurul Tri Rahman', 3, '0000-00-00 00:00:00'),
(15, 'Kajar Market', 'Kajar', '868578', 'Novita Dwi Salsa', 3, '2022-12-29 06:17:30'),
(16, 'Arifin Jaya', 'Menawan', '878678678', 'Arifin Mahmudi', 3, '2022-12-25 19:43:59'),
(17, 'Garuda Market', 'Piji', '8872112', 'Sofiatun ', 3, '2022-12-25 19:44:39'),
(18, 'Zakiman Mart', 'Cendono', '7855534', 'M Agus Zaki', 3, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal`
--

CREATE TABLE `jadwal` (
  `id_customer` int(11) NOT NULL,
  `hari_jadwal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `jadwal`
--

INSERT INTO `jadwal` (`id_customer`, `hari_jadwal`) VALUES
(1, 1),
(2, 4),
(3, 6),
(4, 7),
(5, 7),
(6, 4),
(7, 7),
(8, 3),
(9, 3),
(10, 7),
(11, 4),
(12, 4),
(13, 1),
(14, 1),
(15, 4),
(16, 7),
(17, 7),
(18, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kegiatan`
--

CREATE TABLE `kegiatan` (
  `id_kegiatan` int(11) NOT NULL,
  `id_customer` int(11) NOT NULL,
  `waktu_kegiatan` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `bukti_kegiatan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `kegiatan`
--

INSERT INTO `kegiatan` (`id_kegiatan`, `id_customer`, `waktu_kegiatan`, `bukti_kegiatan`) VALUES
(1, 7, '2022-12-25 12:21:14', ''),
(2, 16, '2022-12-25 12:43:59', ''),
(3, 17, '2022-12-25 12:44:39', ''),
(4, 4, '2022-12-25 12:45:24', ''),
(5, 5, '2023-01-01 13:01:36', ''),
(6, 4, '2023-01-01 13:02:10', ''),
(7, 7, '2023-01-01 13:03:30', ''),
(8, 2, '2022-12-29 16:17:21', ''),
(10, 15, '2022-12-28 23:17:30', '20221229061730.jpg'),
(11, 6, '2022-12-28 23:19:11', '20221229061911.jpg'),
(12, 11, '2022-12-29 09:54:49', '20221229165449.jpg'),
(13, 12, '2022-12-29 10:01:06', '20221229170106.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `orderan`
--

CREATE TABLE `orderan` (
  `id_order` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `jml_order` int(50) NOT NULL,
  `id_customer` int(11) NOT NULL,
  `tgl_order` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `orderan`
--

INSERT INTO `orderan` (`id_order`, `id_produk`, `jml_order`, `id_customer`, `tgl_order`) VALUES
(1, 1, 17, 7, '2022-12-25'),
(2, 2, 50, 7, '2022-12-25'),
(3, 5, 121, 16, '2022-12-25'),
(4, 6, 29, 16, '2022-12-25'),
(5, 4, 56, 16, '2022-12-25'),
(6, 7, 307, 17, '2022-12-25'),
(7, 8, 25, 4, '2022-12-25'),
(8, 9, 12, 4, '2022-12-25'),
(9, 9, 32, 4, '2022-12-25'),
(10, 10, 19, 4, '2022-12-25'),
(11, 1, 10, 5, '2023-01-01'),
(12, 3, 40, 5, '2023-01-01'),
(13, 5, 29, 4, '2023-01-01'),
(14, 7, 34, 7, '2023-01-01'),
(15, 9, 45, 7, '2023-01-01');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `nama_produk` varchar(50) NOT NULL,
  `harga_produk` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `harga_produk`) VALUES
(1, 'Makaroni pedas', 120000),
(2, 'Makaroni Pedas Rumput Laut', 145000),
(3, 'Roti Aoka Keju', 205000),
(4, 'Roti Aoka Vanilla', 230000),
(5, 'Tango Chocolate', 260000),
(6, 'Tango Strawberry', 258000),
(7, 'Indomie Goreng', 165000),
(8, 'Indomie Soto Mie', 140000),
(9, 'Indomie Kebab Rendang', 180500),
(10, 'Indomie Seblak Hot Jeletot', 165000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `sales`
--

CREATE TABLE `sales` (
  `id_sales` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_hp` varchar(50) NOT NULL,
  `jam_mulai` time NOT NULL,
  `jam_berakhir` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `sales`
--

INSERT INTO `sales` (`id_sales`, `nama`, `nik`, `tempat_lahir`, `tgl_lahir`, `alamat`, `no_hp`, `jam_mulai`, `jam_berakhir`) VALUES
(3, 'Zaini Suciadi', '4678654323987654', 'Kudus', '2000-12-21', 'Kedungsari', '1121312123', '07:00:00', '15:00:00'),
(4, 'Rindho Aji', '9876787412002178', 'Kudus', '2000-04-27', 'Pasuruhan Lor', '234234234', '07:00:00', '15:00:00'),
(5, 'Agung Rahmawan', '7100812909871237', 'Kudus', '2000-03-09', 'Karangmalang', '12312423452', '11:00:00', '19:00:00'),
(6, 'Haikal Kanafi', '12313', 'Pati', '2000-02-15', 'Panjunan', '234234234234', '12:00:00', '20:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `jabatan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `jabatan`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
(2, 'super', '1b3231655cebb7a1f783eddf27d254ca', 'supervisor'),
(3, 'zaini', '202cb962ac59075b964b07152d234b70', 'sales'),
(4, 'rindho', '202cb962ac59075b964b07152d234b70', 'sales'),
(5, 'agung', '202cb962ac59075b964b07152d234b70', 'sales'),
(6, 'haka', '202cb962ac59075b964b07152d234b70', 'sales');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_customer`),
  ADD KEY `id_sales` (`id_sales`);

--
-- Indeks untuk tabel `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id_customer`);

--
-- Indeks untuk tabel `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD PRIMARY KEY (`id_kegiatan`),
  ADD KEY `id_sales` (`id_customer`),
  ADD KEY `id_customer` (`id_customer`);

--
-- Indeks untuk tabel `orderan`
--
ALTER TABLE `orderan`
  ADD PRIMARY KEY (`id_order`),
  ADD KEY `id_produk` (`id_produk`,`id_customer`),
  ADD KEY `id_customer` (`id_customer`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indeks untuk tabel `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`id_sales`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `customer`
--
ALTER TABLE `customer`
  MODIFY `id_customer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id_customer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `kegiatan`
--
ALTER TABLE `kegiatan`
  MODIFY `id_kegiatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `orderan`
--
ALTER TABLE `orderan`
  MODIFY `id_order` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `sales`
--
ALTER TABLE `sales`
  MODIFY `id_sales` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
