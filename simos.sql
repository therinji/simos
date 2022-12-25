-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Des 2022 pada 06.16
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
(1, 'Zaini Marketplace', 'Kedungsari', '085640053090', 'Zainali Suciadi', 5, '2022-12-22 06:50:03'),
(4, 'Barokah Shop', 'Gondangmanis', '45645645645', 'Sulikan Mahmudi', 7, '2022-12-25 07:21:38'),
(5, 'Mubarok Mart', 'Kedungdowo', '234234234', 'M Daniel Mubarok', 7, '0000-00-00 00:00:00'),
(6, 'Peganjaran Jaya', 'Peganjaran', '45345456456', 'Arini Zulfa', 7, '0000-00-00 00:00:00'),
(7, 'Khalisyah Market', 'Getas Pejaten', '546457568', 'Khalisyah Dini', 7, '2022-12-25 09:21:48'),
(8, 'Al Laila Shop', 'Bae', '435345634', 'Ummi Handayani', 4, '0000-00-00 00:00:00'),
(9, 'Tamara Berkah', 'Karangmalang', '5645645', 'Ihsan Nur Kholis', 4, '0000-00-00 00:00:00'),
(10, 'Ori Snack', 'Gondosari', '5456456', 'Aldi Wicaksono', 4, '2022-12-25 07:25:42'),
(11, 'Alfahri Shop', 'Blimbing Kidul', '7676767', 'Haikal Alfahri', 5, '0000-00-00 00:00:00'),
(12, 'Putra Panca Shop', 'Jurang', '999938438', 'Lutfian Zainal Al Furqan', 5, '0000-00-00 00:00:00');

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
(1, 3),
(4, 6),
(5, 6),
(6, 7),
(7, 4),
(8, 7),
(9, 1),
(10, 2),
(11, 4),
(12, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kegiatan`
--

CREATE TABLE `kegiatan` (
  `id_kegiatan` int(11) NOT NULL,
  `id_customer` int(11) NOT NULL,
  `waktu_kegiatan` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `kegiatan`
--

INSERT INTO `kegiatan` (`id_kegiatan`, `id_customer`, `waktu_kegiatan`) VALUES
(1, 4, '2022-12-25 00:21:38'),
(2, 10, '2022-12-25 00:25:42'),
(3, 7, '2022-12-25 02:21:48');

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
(2, 3, 68, 7, '2022-12-25'),
(3, 3, 50, 4, '2022-12-25'),
(4, 9, 45, 7, '2022-12-25'),
(5, 12, 21, 4, '2022-12-25');

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
(2, 'Tango Vanillaz', 809900),
(3, 'Roti Boy', 45009),
(6, 'Tango Latte', 809900),
(7, 'Tango Chocolate', 709900),
(8, 'Tango Yogurt', 619100),
(9, 'Tango Bubble Gum', 599910),
(10, 'Tango Coffee', 919890),
(11, 'Tango Sandwich', 930000),
(12, 'Tango Chees', 694600),
(13, 'Tango Mocha', 740090);

-- --------------------------------------------------------

--
-- Struktur dari tabel `sales`
--

CREATE TABLE `sales` (
  `id_sales` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_hp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `sales`
--

INSERT INTO `sales` (`id_sales`, `nama`, `alamat`, `no_hp`) VALUES
(4, 'M Agung Rahmawan', 'Karangmalang', '121212'),
(5, 'Zaini Suciadi', 'Kedungsari', '2323'),
(7, 'Rindho Aji', 'Pasuruhan Lor', '1234234235');

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
(4, 'agung', '202cb962ac59075b964b07152d234b70', 'sales'),
(5, 'zaini', '202cb962ac59075b964b07152d234b70', 'sales'),
(7, 'rindho', '202cb962ac59075b964b07152d234b70', 'sales'),
(8, 'super', '1b3231655cebb7a1f783eddf27d254ca', 'supervisor');

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
  MODIFY `id_customer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id_customer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `kegiatan`
--
ALTER TABLE `kegiatan`
  MODIFY `id_kegiatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `orderan`
--
ALTER TABLE `orderan`
  MODIFY `id_order` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `sales`
--
ALTER TABLE `sales`
  MODIFY `id_sales` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
