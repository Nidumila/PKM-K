-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Des 2019 pada 08.52
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bongsang`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` varchar(15) NOT NULL,
  `nama_admin` varchar(40) NOT NULL,
  `jenis_kelamin` enum('L','P','','') NOT NULL,
  `nomor_ponsel` varchar(13) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `alamat` varchar(128) NOT NULL,
  `gambar` varchar(128) NOT NULL,
  `tanggal_daftar` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `role_admin` int(1) NOT NULL,
  `admin_validasi` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_admin`, `jenis_kelamin`, `nomor_ponsel`, `email`, `password`, `alamat`, `gambar`, `tanggal_daftar`, `role_admin`, `admin_validasi`) VALUES
('LA0120191108', 'Muhammad Hifni Alimudin', 'L', '087828626806', 'Hifni11alimudin@gmail.com', 'Capung11', 'Karangampel', 'default.jpg', '2019-11-26 03:21:34', 0, 1),
('PA0120191108', 'Alhayuni', 'P', '087828626806', 'yunialhayuni@gmail.com', 'alhayuni', 'Sliyeg', 'default.jpg', '2019-11-27 00:55:29', 1, 1),
('PA0220191108', 'Ersonia', 'P', '087828626806', 'ersoniaerson@gmail.com', 'ersoniaerson', 'Kedokan Bunder', 'default.jpg', '2019-11-26 03:21:48', 1, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `akses_menu`
--

CREATE TABLE `akses_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `akses_menu`
--

INSERT INTO `akses_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 0, 1),
(2, 0, 2),
(3, 0, 3),
(4, 0, 4),
(5, 1, 2),
(6, 1, 3),
(7, 1, 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `akses_sub`
--

CREATE TABLE `akses_sub` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `sub_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `akses_sub`
--

INSERT INTO `akses_sub` (`id`, `role_id`, `menu_id`, `sub_id`) VALUES
(1, 0, 1, 1),
(2, 0, 2, 2),
(3, 0, 2, 3),
(4, 0, 2, 4),
(5, 1, 2, 2),
(8, 0, 3, 5),
(9, 1, 3, 5),
(10, 0, 3, 6),
(11, 1, 3, 6),
(12, 0, 4, 7),
(13, 1, 4, 7);

-- --------------------------------------------------------

--
-- Struktur dari tabel `member`
--

CREATE TABLE `member` (
  `id_member` varchar(15) NOT NULL,
  `nama_member` varchar(50) NOT NULL,
  `jenis_kelamin` enum('L','P','','') NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nomor_ponsel` varchar(13) NOT NULL,
  `tanggal_daftar` date NOT NULL,
  `gambar` varchar(128) NOT NULL,
  `member_validasi` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `member`
--

INSERT INTO `member` (`id_member`, `nama_member`, `jenis_kelamin`, `email`, `password`, `nomor_ponsel`, `tanggal_daftar`, `gambar`, `member_validasi`) VALUES
('L124054', 'Fajar Ikhsan Maulana', 'L', 'san.project@gdrive.biz.id', '12345678910', '087718690800', '2019-11-01', 'default.jpg', 1),
('L160136', 'Rizky Angga Haristia', 'L', 'angga@gdrive.biz.id', 'angga123', '087720407113', '2019-11-02', 'default.jpg', 1),
('L165636', 'dion', 'L', 'dionapriliyadi123@gmail.com', '1234567t', '08111111111', '2019-11-15', 'default.jpg', 1),
('L233517', 'Muhammad Hifni Alimudin', 'L', 'Hifni11alimudin@gmail.com', 'Capung11', '087828626806', '2019-10-31', 'default.jpg', 1),
('P112802', 'Alhayuni', 'P', 'yunialhayun@gmail.com', 'yuni123', '087838465321', '2019-11-15', 'default.jpg', 1),
('P233822', 'Nada Qonita Amalia', 'P', 'nadaqonita01@gmail.com', 'nadaqonita', '083824120644', '2019-10-31', 'produk1.jpg', 1),
('P234026', 'Nurul Miftahul Zannah', 'P', 'nurulmiftahulzanah@gmail.com', 'Nurul123', '087727933012', '2019-10-31', 'default.jpg', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `menu`
--

CREATE TABLE `menu` (
  `id_menu` int(11) NOT NULL,
  `nama_menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `menu`
--

INSERT INTO `menu` (`id_menu`, `nama_menu`) VALUES
(1, 'Dasboard'),
(2, 'Member & Admin'),
(3, 'Produk'),
(4, 'Transaksi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id_barang` varchar(5) NOT NULL,
  `nama_barang` varchar(30) NOT NULL,
  `kategori` enum('Makanan','Alat Kebersihan','Bahan Olah','') NOT NULL,
  `sub_pilihan` enum('Original','Pedas','Jagung Bakar','Barbeque','Balado','Sabun','Facial Foam','Masker','Tepung') NOT NULL,
  `harga` int(10) NOT NULL,
  `stok` int(5) NOT NULL,
  `gambar` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id_barang`, `nama_barang`, `kategori`, `sub_pilihan`, `harga`, `stok`, `gambar`) VALUES
('BB01', 'Bongsang', 'Makanan', 'Barbeque', 15000, 20, 'produk1.jpg'),
('BB02', 'Bongsang', 'Makanan', 'Balado', 15000, 15, 'bongsang.jpg'),
('BJ01', 'Bongsang', 'Makanan', 'Jagung Bakar', 15000, 40, 'bongsang.jpg'),
('BO01', 'Bongsang', 'Makanan', 'Original', 15000, 25, 'produk.jpg'),
('BP01', 'Bongsang', 'Makanan', 'Pedas', 15000, 30, 'bongsang.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `role_admin`
--

CREATE TABLE `role_admin` (
  `role_admin` int(1) NOT NULL,
  `Jabatan` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `role_admin`
--

INSERT INTO `role_admin` (`role_admin`, `Jabatan`) VALUES
(0, 'Super Admin'),
(1, 'Admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sub_menu`
--

CREATE TABLE `sub_menu` (
  `id_sub` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `sub_menu`
--

INSERT INTO `sub_menu` (`id_sub`, `menu_id`, `title`, `url`, `icon`, `active`) VALUES
(1, 1, 'Dasboard', 'control', 'fa fa-laptop', 1),
(2, 2, 'Daftar Member', 'control/memberlist/', 'fa fa-group', 1),
(3, 2, 'Daftar Admin', 'control/adminlist/', 'ti-user', 1),
(4, 2, 'Tambah Admin', 'control/daftaradmin/', 'fa fa-user-plus', 1),
(5, 3, 'Daftar Produk', 'control/produklist/', 'fa fa-tasks', 1),
(6, 3, 'Tambah Produk', 'control/tambahproduk/', 'ti-email', 1),
(7, 4, 'Daftar Transaksi', '', 'fa fa-tasks', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` varchar(15) NOT NULL,
  `tanggal` date NOT NULL,
  `id_member` varchar(15) NOT NULL,
  `id_barang` varchar(5) NOT NULL,
  `jumlah` int(20) NOT NULL,
  `total_bayar` int(100) NOT NULL,
  `bukti` varchar(128) NOT NULL,
  `valid` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`),
  ADD KEY `role_admin` (`role_admin`);

--
-- Indeks untuk tabel `akses_menu`
--
ALTER TABLE `akses_menu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_id` (`role_id`),
  ADD KEY `menu_id` (`menu_id`);

--
-- Indeks untuk tabel `akses_sub`
--
ALTER TABLE `akses_sub`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_id` (`role_id`),
  ADD KEY `sub_id` (`sub_id`),
  ADD KEY `menu_id` (`menu_id`);

--
-- Indeks untuk tabel `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id_member`);

--
-- Indeks untuk tabel `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indeks untuk tabel `role_admin`
--
ALTER TABLE `role_admin`
  ADD PRIMARY KEY (`role_admin`);

--
-- Indeks untuk tabel `sub_menu`
--
ALTER TABLE `sub_menu`
  ADD PRIMARY KEY (`id_sub`),
  ADD KEY `menu_id` (`menu_id`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id_member` (`id_member`),
  ADD KEY `id_barang` (`id_barang`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `akses_menu`
--
ALTER TABLE `akses_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=129;

--
-- AUTO_INCREMENT untuk tabel `akses_sub`
--
ALTER TABLE `akses_sub`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `menu`
--
ALTER TABLE `menu`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `sub_menu`
--
ALTER TABLE `sub_menu`
  MODIFY `id_sub` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_ibfk_1` FOREIGN KEY (`role_admin`) REFERENCES `role_admin` (`role_admin`);

--
-- Ketidakleluasaan untuk tabel `akses_menu`
--
ALTER TABLE `akses_menu`
  ADD CONSTRAINT `akses_menu_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `role_admin` (`role_admin`),
  ADD CONSTRAINT `akses_menu_ibfk_2` FOREIGN KEY (`menu_id`) REFERENCES `menu` (`id_menu`);

--
-- Ketidakleluasaan untuk tabel `akses_sub`
--
ALTER TABLE `akses_sub`
  ADD CONSTRAINT `akses_sub_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `role_admin` (`role_admin`),
  ADD CONSTRAINT `akses_sub_ibfk_2` FOREIGN KEY (`sub_id`) REFERENCES `sub_menu` (`id_sub`),
  ADD CONSTRAINT `akses_sub_ibfk_3` FOREIGN KEY (`menu_id`) REFERENCES `menu` (`id_menu`);

--
-- Ketidakleluasaan untuk tabel `sub_menu`
--
ALTER TABLE `sub_menu`
  ADD CONSTRAINT `sub_menu_ibfk_1` FOREIGN KEY (`menu_id`) REFERENCES `menu` (`id_menu`);

--
-- Ketidakleluasaan untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`id_member`) REFERENCES `member` (`id_member`),
  ADD CONSTRAINT `transaksi_ibfk_2` FOREIGN KEY (`id_barang`) REFERENCES `produk` (`id_barang`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
