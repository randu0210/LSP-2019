-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Des 2019 pada 16.13
-- Versi server: 10.1.31-MariaDB
-- Versi PHP: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpus_randu`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `daftar_buku`
--

CREATE TABLE `daftar_buku` (
  `kode_buku` varchar(100) NOT NULL,
  `judul_buku` varchar(100) NOT NULL,
  `pengarang` varchar(100) NOT NULL,
  `kategori` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `daftar_buku`
--

INSERT INTO `daftar_buku` (`kode_buku`, `judul_buku`, `pengarang`, `kategori`) VALUES
('BK_001', 'Sherlock holmes', 'J.S stephard', 'Fiksi'),
('BK_002', 'Kimia XII', 'ayu bramantio', 'Pelajaran'),
('BK_003', 'tertawa lah', 'randu ganteng', 'fiksi'),
('BK_004', 'matematika', 'hawkins', 'Pelajaran');

-- --------------------------------------------------------

--
-- Struktur dari tabel `stok_buku`
--

CREATE TABLE `stok_buku` (
  `judul_buku` varchar(100) NOT NULL,
  `no_rak` varchar(100) NOT NULL,
  `jumlah` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `stok_buku`
--

INSERT INTO `stok_buku` (`judul_buku`, `no_rak`, `jumlah`) VALUES
('Kimia XII', 'B-003', '30'),
('matematika', 'B-010', '30'),
('Sherlock holmes', 'B-001', '45');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_peminjaman`
--

CREATE TABLE `tabel_peminjaman` (
  `id_peminjam` varchar(100) NOT NULL,
  `nama_peminjam` varchar(100) NOT NULL,
  `alamat_peminjam` varchar(100) NOT NULL,
  `judul_buku` varchar(100) NOT NULL,
  `tanggal_pinjam` varchar(100) NOT NULL,
  `tanggal_kembali` varchar(100) NOT NULL,
  `denda` varchar(100) NOT NULL,
  `status_peminjaman` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tabel_peminjaman`
--

INSERT INTO `tabel_peminjaman` (`id_peminjam`, `nama_peminjam`, `alamat_peminjam`, `judul_buku`, `tanggal_pinjam`, `tanggal_kembali`, `denda`, `status_peminjaman`) VALUES
('08030215', 'adut', 'bekasi', 'Sherlock holmes', '03-oktober-2019', '', '', 'Dipinjamkan'),
('08044165', 'adut', 'kebon jeruk', 'Sherlock holmes', '04-juli-2013', '10-juli-2013', '0', 'Dikembalikan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_user`
--

CREATE TABLE `tabel_user` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tabel_user`
--

INSERT INTO `tabel_user` (`username`, `password`, `status`) VALUES
('admin', 'admin', 'administrator'),
('adutt', 'adute', 'pustakawan'),
('pustakawan', 'pusta', 'pustakawan'),
('randuu', 'randuu', 'administrator');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `daftar_buku`
--
ALTER TABLE `daftar_buku`
  ADD PRIMARY KEY (`kode_buku`);

--
-- Indeks untuk tabel `stok_buku`
--
ALTER TABLE `stok_buku`
  ADD PRIMARY KEY (`judul_buku`);

--
-- Indeks untuk tabel `tabel_peminjaman`
--
ALTER TABLE `tabel_peminjaman`
  ADD PRIMARY KEY (`id_peminjam`);

--
-- Indeks untuk tabel `tabel_user`
--
ALTER TABLE `tabel_user`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
