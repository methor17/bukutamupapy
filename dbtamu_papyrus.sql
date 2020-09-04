-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 12 Sep 2018 pada 09.53
-- Versi Server: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbtamu_papyrus`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_buku`
--

CREATE TABLE IF NOT EXISTS `tb_buku` (
  `nota` varchar(10) NOT NULL,
  `nm_tamu` varchar(30) NOT NULL,
  `alm_tamu` varchar(50) NOT NULL,
  `instansi` varchar(30) NOT NULL,
  `bagian` varchar(25) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `alasan` varchar(50) NOT NULL,
  `nopol` varchar(15) NOT NULL,
  `sifat` enum('Kantor','Lapangan','Kasir') NOT NULL,
  `janji` enum('Ya','Tidak') NOT NULL,
  `Jin` time DEFAULT NULL,
  `Jout` time DEFAULT NULL,
  `tgl` date DEFAULT NULL,
  `hapus` enum('Y','T') DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_buku`
--

INSERT INTO `tb_buku` (`nota`, `nm_tamu`, `alm_tamu`, `instansi`, `bagian`, `nama`, `alasan`, `nopol`, `sifat`, `janji`, `Jin`, `Jout`, `tgl`, `hapus`) VALUES
('1809001', 'fathan', 'ereasa', '3easa', 'ewr', 'e', 'dsff', 'e', 'Kantor', 'Ya', '09:42:59', '09:43:05', '2018-09-04', 'Y'),
('1809002', 'fattt', 'tasik', 'sdada', 'haha', 'bu nina', 'sadasda', 'asdad', 'Kantor', 'Ya', '10:52:11', '10:52:27', '2018-09-04', 'T'),
('1809003', 'ary', 'banjaran', 'unik', 'wer', 'wer', 'wr', 'd wqeq12', 'Kantor', 'Ya', '11:21:59', '11:22:06', '2018-09-04', 'Y'),
('1809004', 'cad', 'as', 'ad', 'asd', 'asd', 'asd\r\nasd\r\nasd\r\nad\r\nsd\r\nsdf\r\nsdf\r\nsdf\r\nsdf\r\nsd\r\n\r\n', 'ad', 'Kantor', 'Ya', '16:06:07', '16:06:16', '2018-09-07', 'T'),
('1809005', 'fathan', 'ereasa', '3easa', 'haha', 'bu nina', 'dsfs', 'd 1312 qe', 'Kantor', 'Ya', '08:23:20', '08:51:38', '2018-09-10', 'Y'),
('1809006', 'Sona', 'Setrasari', 'Transnet', 'Edp', 'Nina', 'Kunjungan Bulanan', 'D 1234 ED', 'Kantor', 'Ya', '08:26:06', '09:21:47', '2018-09-10', 'Y'),
('1809007', 'Sona', 'Setrasari', 'Transnet', 'Edp', 'HENDRA', 'CEK INTERNET', 'D 1234 ED', 'Kantor', 'Ya', '08:42:21', '09:21:48', '2018-09-10', 'Y'),
('1809008', 'fathan', 'ereasa', '3easa', 'hihi', 'bu nina', 'ddd', 'D 1234 ED', 'Kantor', 'Ya', '09:21:10', '09:21:46', '2018-09-10', 'Y'),
('1809009', 'thoriq', 'baleendah', 'ceres', 'Edp', 'HENDRA', 'magang', 'D 1234 ED', 'Kasir', 'Tidak', '09:28:10', '09:28:22', '2018-09-10', 'Y'),
('1809010', 'Adi', 'Majalengka', 'UNIKOM', 'Boss', 'Fathan', 'Futsal', 'E 1234 QE', 'Kantor', 'Ya', '21:30:00', '21:31:06', '2018-09-10', 'Y');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_login`
--

CREATE TABLE IF NOT EXISTS `tb_login` (
`id` int(11) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `nama` varchar(40) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_login`
--

INSERT INTO `tb_login` (`id`, `username`, `password`, `nama`) VALUES
(1, 'A', '66235b9f8858587e1cf4951e340634a0', 'Dadang S.'),
(2, 'B', '7caa8347c094a7dd5f00888158997cb8', 'Agus S.'),
(3, 'C', '5882e484ad6aff2b0582ef2c1a9cc67c', 'Cuncun C.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_buku`
--
ALTER TABLE `tb_buku`
 ADD PRIMARY KEY (`nota`), ADD UNIQUE KEY `nota` (`nota`);

--
-- Indexes for table `tb_login`
--
ALTER TABLE `tb_login`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_login`
--
ALTER TABLE `tb_login`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
