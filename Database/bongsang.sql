-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 07, 2020 at 09:09 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

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
-- Table structure for table `admin`
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
  `tanggal_daftar` date NOT NULL,
  `role_admin` int(1) NOT NULL,
  `admin_validasi` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_admin`, `jenis_kelamin`, `nomor_ponsel`, `email`, `password`, `alamat`, `gambar`, `tanggal_daftar`, `role_admin`, `admin_validasi`) VALUES
('AD20191126000', 'Abopink', 'L', '08979242524', 'abopinksocio@gmail.com', 'abopink123456', 'Jl. Budiraja Rt. 02 Rw. 01, Desa Pringgacala, Kec. Karangampel, Kab.                Indramayu, Jawa Barat.\r\n', 'LogoBongsang.png', '2019-12-29', 0, '1'),
('AD20191126001', 'Muhammad Hifni Alimudin', 'L', '087828626806', 'Hifni11alimudin@gmail.com', 'Capung11', 'Blok Desa Rt 09 Rw 05, Desa Mundu, Kec. Karangampel-Indramayu', 'Elfosfor1.jpg', '2019-12-29', 0, '1'),
('AD20191127001', 'Alhayuni', 'P', '08985735617', 'yunialhayuni@gmail.com', 'alhayuni', 'Sliyeg', 'default.jpg', '2019-12-29', 1, '1'),
('AD20191127002', 'Ersonia', 'P', '082121551921', 'ersoniaerson@gmail.com', 'ersoniaerson', 'Kedokan Bunder', 'default.jpg', '2019-12-29', 1, '1'),
('AD20191229003', 'Shafa Failusufa', '', '083824120644', 'failusufashafa11@gmail.com', 'failusufashafa11', 'Lohbener', 'default.jpg', '2019-12-29', 1, '1'),
('AL20191230004', 'Rivaldi Leonardo Jordan', 'L', '08991965826', 'rivaldi.l.j@gmail.com', 'Bongsang17', 'Komplek Bhakti Persada Indah (BPI) Blok.I no.17 Semarang', 'default.jpg', '0000-00-00', 1, '1');

-- --------------------------------------------------------

--
-- Table structure for table `akses_menu`
--

CREATE TABLE `akses_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `akses_menu`
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
-- Table structure for table `akses_sub`
--

CREATE TABLE `akses_sub` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `sub_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `akses_sub`
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
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id_member` varchar(15) NOT NULL,
  `nama_member` varchar(50) NOT NULL,
  `jenis_kelamin` enum('L','P','','') NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nomor_ponsel` varchar(13) NOT NULL,
  `alamat` varchar(20) NOT NULL,
  `tanggal_daftar` date NOT NULL,
  `gambar` varchar(128) NOT NULL,
  `member_validasi` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id_member`, `nama_member`, `jenis_kelamin`, `email`, `password`, `nomor_ponsel`, `alamat`, `tanggal_daftar`, `gambar`, `member_validasi`) VALUES
('ML20191031001', 'Muhammad Hifni Alimudin', 'L', 'Hifni11alimudin@gmail.com', 'Capung11', '087828626806', '', '2019-10-31', 'default.jpg', 1),
('ML20191101001', 'Fajar Ikhsan Maulana', 'L', 'san.project@gdrive.biz.id', '12345678910', '087718690800', '', '2019-11-01', 'default.jpg', 1),
('ML20200105004', 'Rivaldi Leonardo Jordan', 'L', 'rivaldi.l.j@gmail.com', 'mhamhank11', '08991965826', '', '2020-01-05', 'default.jpg', 1),
('MP20191031002', 'Nada Qonita Amalia', 'P', 'nadaqonita01@gmail.com', 'nadaqonita', '083824120644', '', '2019-10-31', 'default.jpg', 0),
('MP20191031003', 'Nurul Miftahul Zannah', 'P', 'nurulmiftahulzanah@gmail.com', 'Nurul123', '087727933012', '', '2019-10-31', 'default.jpg', 1),
('MP20191115002', 'Alhayuni', 'P', 'yunialhayun@gmail.com', 'yuni123', '087838465321', '', '2019-11-15', 'default.jpg', 1),
('MP20191226003', 'Shafa Failusufa', 'P', 'failusufashafa11@gmail.com', 'failusufashafa11', '087831701323', '', '2019-12-26', 'default.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id_menu` int(11) NOT NULL,
  `nama_menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id_menu`, `nama_menu`) VALUES
(1, 'Dasboard'),
(2, 'Member & Admin'),
(3, 'Produk'),
(4, 'Transaksi');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_barang` varchar(7) NOT NULL,
  `nama_barang` varchar(30) NOT NULL,
  `kategori` enum('Makanan','Alat Kebersihan','Bahan Olah','') NOT NULL,
  `sub_pilihan` enum('Original','Pedas','Jagung Bakar','Barbeque','Balado','Sabun','Facial Foam','Masker','Tepung') NOT NULL,
  `harga` int(10) NOT NULL,
  `stok` int(5) NOT NULL,
  `gambar` varchar(40) NOT NULL,
  `deskripsi` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_barang`, `nama_barang`, `kategori`, `sub_pilihan`, `harga`, `stok`, `gambar`, `deskripsi`) VALUES
('PRD0002', 'Bongsang', 'Makanan', 'Balado', 15000, 15, 'bongsang.jpg', '<p>[GOOD NEWS] 	<br>. 	<br>. 	<br>. 	<br>. 	<br>Wazzup guys! ✋ 	<br> 	<br>Tau bonggol pisang belum? Kalau belum mimin kasih tau yah. 	<br>Bonggol pisang adalah bagian dari pohon pisang bagian bawah akar yang biasa dibuang oleh Petani Pisang atau Masyrakat. Dannnn ternyata kandungan dari Bonggol Pisang banyak manfaatnya lohh. Kepo kan?</p>  <p style=\"line-height: 1;\">Dengan rasa Balado yang enak loh guys!<span class=\"fr-emoticon fr-deletable fr-emoticon-img\" style=\"background: url(https://cdnjs.cloudflare.com/ajax/libs/emojione/2.0.1/assets/svg/1f60a.svg);\">&nbsp;</span> </p>  <p style=\"line-height: 1;\"> 	<br>Banyak manfaat yang terkandung dalam Bongsang ini, seperti: Kalori, Protein, Lemak, Karbohidrat, Kalsium, Fosfor, Zat Besi, Vitamin A, Vitamin B1, Vitamin C, Air, 😊 . 	<br> 	<br>Untuk peremajaan kulit, antioksidan, pelembapan kulit, serat untuk anak2 memperlancar BAB</p>'),
('PRD0003', 'Bongsang', 'Makanan', 'Jagung Bakar', 15000, 22, 'produk.jpg', '<p>[GOOD NEWS] 	<br>. 	<br>. 	<br>. 	<br>. 	<br>Wazzup guys! ✋ 	<br> 	<br>Tau bonggol pisang belum? Kalau belum mimin kasih tau yah. 	<br>Bonggol pisang adalah bagian dari pohon pisang bagian bawah akar yang biasa dibuang oleh Petani Pisang atau Masyrakat. Dannnn ternyata kandungan dari Bonggol Pisang banyak manfaatnya lohh. Kepo kan?</p>  <p style=\"line-height: 1;\">Dengan rasa Jagung Bakar yang enak loh guys!<span class=\"fr-emoticon fr-deletable fr-emoticon-img\" style=\"background: url(https://cdnjs.cloudflare.com/ajax/libs/emojione/2.0.1/assets/svg/1f60a.svg);\">&nbsp;</span> </p>  <p style=\"line-height: 1;\"> 	<br>Banyak manfaat yang terkandung dalam Bongsang ini, seperti: Kalori, Protein, Lemak, Karbohidrat, Kalsium, Fosfor, Zat Besi, Vitamin A, Vitamin B1, Vitamin C, Air, 😊 . 	<br> 	<br>Untuk peremajaan kulit, antioksidan, pelembapan kulit, serat untuk anak2 memperlancar BAB</p>'),
('PRD0004', 'Bongsang', 'Makanan', 'Original', 15000, 25, 'produk.jpg', '<p>[GOOD NEWS] 	<br>. 	<br>. 	<br>. 	<br>. 	<br>Wazzup guys! ✋ 	<br> 	<br>Tau bonggol pisang belum? Kalau belum mimin kasih tau yah. 	<br>Bonggol pisang adalah bagian dari pohon pisang bagian bawah akar yang biasa dibuang oleh Petani Pisang atau Masyrakat. Dannnn ternyata kandungan dari Bonggol Pisang banyak manfaatnya lohh. Kepo kan?</p>  <p style=\"line-height: 1;\">Dengan rasa Original yang renyah loh guys!<span class=\"fr-emoticon fr-deletable fr-emoticon-img\" style=\"background: url(https://cdnjs.cloudflare.com/ajax/libs/emojione/2.0.1/assets/svg/1f60a.svg);\">&nbsp;</span> </p>  <p style=\"line-height: 1;\"> 	<br>Banyak manfaat yang terkandung dalam Bongsang ini, seperti: Kalori, Protein, Lemak, Karbohidrat, Kalsium, Fosfor, Zat Besi, Vitamin A, Vitamin B1, Vitamin C, Air, 😊 . 	<br> 	<br>Untuk peremajaan kulit, antioksidan, pelembapan kulit, serat untuk anak2 memperlancar BAB</p>'),
('PRD0005', 'Bongsang', 'Makanan', 'Pedas', 12000, 35, 'DSCF2834.JPG', '<p>[GOOD NEWS]Wazzup guys! ✋<br><br>Tau bonggol pisang belum? Kalau belum mimin kasih tau yah.<br>Bonggol pisang adalah bagian dari pohon pisang bagian bawah akar yang biasa dibuang oleh Petani Pisang atau Masyrakat. Dannnn ternyata kandungan dari Bonggol Pisang banyak manfaatnya lohh. Kepo kan?</p><p>Dengan rasa Pedas yang bikin ketagihan loh guys!&nbsp;</p>');

-- --------------------------------------------------------

--
-- Table structure for table `role_admin`
--

CREATE TABLE `role_admin` (
  `role_admin` int(1) NOT NULL,
  `Jabatan` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `role_admin`
--

INSERT INTO `role_admin` (`role_admin`, `Jabatan`) VALUES
(0, 'Super Admin'),
(1, 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `sub_menu`
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
-- Dumping data for table `sub_menu`
--

INSERT INTO `sub_menu` (`id_sub`, `menu_id`, `title`, `url`, `icon`, `active`) VALUES
(1, 1, 'Dasboard', 'control', 'fas fa-laptop', 1),
(2, 2, 'Daftar Member', 'control/memberlist/', 'fas fa-users', 1),
(3, 2, 'Daftar Admin', 'control/adminlist/', 'fas fa-cogs', 1),
(4, 2, 'Tambah Admin', 'control/daftaradmin/', 'fas fa-user-plus', 1),
(5, 3, 'Daftar Produk', 'control/produklist/', 'fas fa-boxes', 1),
(6, 3, 'Tambah Produk', 'control/tambahproduk/', 'fa fa-archive', 1),
(7, 4, 'Transaksi Berhasil', 'control/berhasil/', 'fas fa-tasks', 1);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` varchar(15) NOT NULL,
  `tanggal` date NOT NULL,
  `id_member` varchar(15) NOT NULL,
  `total_bayar` int(100) NOT NULL,
  `bukti` varchar(128) NOT NULL,
  `valid` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `tanggal`, `id_member`, `total_bayar`, `bukti`, `valid`) VALUES
('TRA20200106001', '2020-01-06', 'ML20191031001', 45000, 'pp2.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi_detail`
--

CREATE TABLE `transaksi_detail` (
  `id_transaksi` varchar(15) NOT NULL,
  `produk` varchar(30) NOT NULL,
  `harga` int(11) NOT NULL,
  `jumlah` int(5) NOT NULL,
  `total` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksi_detail`
--

INSERT INTO `transaksi_detail` (`id_transaksi`, `produk`, `harga`, `jumlah`, `total`) VALUES
('TRA20200106001', 'PRD0004', 15000, 1, 15000),
('TRA20200106001', 'PRD0004', 15000, 1, 15000),
('TRA20200106001', 'PRD0003', 15000, 1, 15000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`),
  ADD KEY `role_admin` (`role_admin`);

--
-- Indexes for table `akses_menu`
--
ALTER TABLE `akses_menu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_id` (`role_id`),
  ADD KEY `menu_id` (`menu_id`);

--
-- Indexes for table `akses_sub`
--
ALTER TABLE `akses_sub`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_id` (`role_id`),
  ADD KEY `sub_id` (`sub_id`),
  ADD KEY `menu_id` (`menu_id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id_member`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `role_admin`
--
ALTER TABLE `role_admin`
  ADD PRIMARY KEY (`role_admin`);

--
-- Indexes for table `sub_menu`
--
ALTER TABLE `sub_menu`
  ADD PRIMARY KEY (`id_sub`),
  ADD KEY `menu_id` (`menu_id`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id_member` (`id_member`);

--
-- Indexes for table `transaksi_detail`
--
ALTER TABLE `transaksi_detail`
  ADD KEY `id_transaksi` (`id_transaksi`),
  ADD KEY `produk` (`produk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akses_menu`
--
ALTER TABLE `akses_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=129;

--
-- AUTO_INCREMENT for table `akses_sub`
--
ALTER TABLE `akses_sub`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sub_menu`
--
ALTER TABLE `sub_menu`
  MODIFY `id_sub` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_ibfk_1` FOREIGN KEY (`role_admin`) REFERENCES `role_admin` (`role_admin`);

--
-- Constraints for table `akses_menu`
--
ALTER TABLE `akses_menu`
  ADD CONSTRAINT `akses_menu_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `role_admin` (`role_admin`),
  ADD CONSTRAINT `akses_menu_ibfk_2` FOREIGN KEY (`menu_id`) REFERENCES `menu` (`id_menu`);

--
-- Constraints for table `akses_sub`
--
ALTER TABLE `akses_sub`
  ADD CONSTRAINT `akses_sub_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `role_admin` (`role_admin`),
  ADD CONSTRAINT `akses_sub_ibfk_2` FOREIGN KEY (`sub_id`) REFERENCES `sub_menu` (`id_sub`),
  ADD CONSTRAINT `akses_sub_ibfk_3` FOREIGN KEY (`menu_id`) REFERENCES `menu` (`id_menu`);

--
-- Constraints for table `sub_menu`
--
ALTER TABLE `sub_menu`
  ADD CONSTRAINT `sub_menu_ibfk_1` FOREIGN KEY (`menu_id`) REFERENCES `menu` (`id_menu`);

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`id_member`) REFERENCES `member` (`id_member`);

--
-- Constraints for table `transaksi_detail`
--
ALTER TABLE `transaksi_detail`
  ADD CONSTRAINT `transaksi_detail_ibfk_1` FOREIGN KEY (`id_transaksi`) REFERENCES `transaksi` (`id_transaksi`),
  ADD CONSTRAINT `transaksi_detail_ibfk_2` FOREIGN KEY (`produk`) REFERENCES `produk` (`id_barang`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
