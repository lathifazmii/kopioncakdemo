-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 01 Sep 2021 pada 20.45
-- Versi server: 10.4.20-MariaDB
-- Versi PHP: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kopionca_kopioncak`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
(1, 'kopioncak', 'kopioncakofficial');

-- --------------------------------------------------------

--
-- Struktur dari tabel `forum`
--

CREATE TABLE `forum` (
  `id_forum` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `isi_forum` text NOT NULL,
  `isi_balasan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `forum`
--

INSERT INTO `forum` (`id_forum`, `email`, `isi_forum`, `isi_balasan`) VALUES
(2, 'lathifazmii@gmail.com', 'Pelayanannya ramah, kopinya enak banget, terimakasih kopi oncak sukses terus ya!', 'Terimakasih atas kepercayaan anda terhadap pelayanan kami silahkan order kembali'),
(3, 'fildaangellia@gmail.com', 'Aromanya kopi oncak bikin mood gue jadi menyenangkan, harganya terjangkau jadi mau order lagi nih hehehe....', 'Terimakasih atas kepercayaan anda terhadap pelayanan kami silahkan order kembali'),
(5, 'indramaulana@gmail.com', 'Dikala senja datang aku selalu ditemani dengan secangkir kopi oncak yang aromanya membangkitkan suasana sepi, jadi lebih bermakna, thanks kopi oncak ....', 'Terimakasih atas kepercayaan anda terhadap pelayanan kami silahkan order kembali'),
(6, 'eninuraini@gmail.com', 'Asli kopinya berasa bangeettt, cobain deh yang belum pernah coba di jamin wuenak tenan, thankyou kopi oncak.... ', 'Terimakasih atas kepercayaan anda terhadap pelayanan kami silahkan order kembali');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `foto_produk` varchar(100) NOT NULL,
  `harga_produk` varchar(50) NOT NULL,
  `deskripsi_produk` text NOT NULL,
  `nomor_whatsapp` varchar(15) NOT NULL,
  `pesan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `foto_produk`, `harga_produk`, `deskripsi_produk`, `nomor_whatsapp`, `pesan`) VALUES
(2, 'KOPI ONCAK NETTO : 50 GRAM', 'kopi16.jpeg', '5000', 'Citarasa, Aroma Kopi Khas Sumatera yang menggugah selera anda dan membangkitkan semangat anda', '6287881836314', '*Hallo*%0A%0A*KOPI*%20*ONCAK*%20*OFFICIAL*%0A%0A*Saya*%20*Mau*%20*Order*%20*Kopinya*%0A%0A*Nama*%20*:*%0A%0A*Alamat*%20*Lengkap*%20*:*%0A%0A*Kode*%20*Pos*%20*:*%0A%0A*Jumlah*%20*Gram*%20*:*%20*50gram*%0A%0A*Harga*%20*:*%20*Rp.5K*%0A%0A*Jumlah*%20*Pembelian*%20*:*%0A%0A*No*%20*Hp*%20*/*%20*Whatsapp*%20*:*%20'),
(3, 'KOPI ONCAK NETTO : 100 GRAM', 'kopi16.jpeg', '10000', 'Citarasa, Aroma Kopi Khas Sumatera yang menggugah selera anda dan membangkitkan semangat anda', '6287881836314', '*Hallo*%0A%0A*KOPI*%20*ONCAK*%20*OFFICIAL*%0A%0A*Saya*%20*Mau*%20*Order*%20*Kopinya*%0A%0A*Nama*%20*:*%0A%0A*Alamat*%20*Lengkap*%20*:*%0A%0A*Kode*%20*Pos*%20*:*%0A%0A*Jumlah*%20*Gram*%20*:*%20*100gram*%0A%0A*Harga*%20*:*%20*Rp.10K*%0A%0A*Jumlah*%20*Pembelian*%20*:*%0A%0A*No*%20*Hp*%20*/*%20*Whatsapp*%20*:*%20'),
(4, 'KOPI ONCAK NETTO : 250 GRAM', 'kopi16.jpeg', '20000', 'Citarasa, Aroma Kopi Khas Sumatera yang menggugah selera anda dan membangkitkan semangat anda', '6287881836314', '*Hallo*%0A%0A*KOPI*%20*ONCAK*%20*OFFICIAL*%0A%0A*Saya*%20*Mau*%20*Order*%20*Kopinya*%0A%0A*Nama*%20*:*%0A%0A*Alamat*%20*Lengkap*%20*:*%0A%0A*Kode*%20*Pos*%20*:*%0A%0A*Jumlah*%20*Gram*%20*:*%20*250gram*%0A%0A*Harga*%20*:*%20*Rp.20k*%0A%0A*Jumlah*%20*Pembelian*%20*:*%0A%0A*No*%20*Hp*%20*/*%20*Whatsapp*%20*:*%20'),
(5, 'KOPI ONCAK KEMASAN OLEH - OLEH NETTO : 225 GRAM', 'kopi40.jpeg', '35000', 'Citarasa, Aroma Kopi Khas Sumatera yang menggugah selera anda dan membangkitkan semangat anda', '6287881836314', '*Hallo*%0A%0A*KOPI*%20*ONCAK*%20*OFFICIAL*%0A%0A*Saya*%20*Mau*%20*Order*%20*Kopinya*%0A%0A*Kemasan*%20*Oleh*%20*-*%20*oleh*%0A%0A*Nama*%20*:*%0A%0A*Alamat*%20*Lengkap*%20*:*%0A%0A*Kode*%20*Pos*%20*:*%0A%0A*Jumlah*%20*Gram*%20*:*%20*255gram*%0A%0A*Harga*%20*:*%20*Rp.35K*%0A%0A*Jumlah*%20*Pembelian*%20*:*%0A%0A*No*%20*Hp*%20*/*%20*Whatsapp*%20*:*%20');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `forum`
--
ALTER TABLE `forum`
  ADD PRIMARY KEY (`id_forum`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `forum`
--
ALTER TABLE `forum`
  MODIFY `id_forum` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
