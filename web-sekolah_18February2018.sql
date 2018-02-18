-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 18, 2018 at 09:51 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web-sekolah`
--

-- --------------------------------------------------------

--
-- Table structure for table `agenda`
--

CREATE TABLE `agenda` (
  `id` int(11) NOT NULL,
  `judul_agenda` varchar(100) NOT NULL,
  `tanggal_agenda` date NOT NULL,
  `isi_agenda` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `agenda`
--

INSERT INTO `agenda` (`id`, `judul_agenda`, `tanggal_agenda`, `isi_agenda`) VALUES
(1, 'Pemantapan Reguler', '2018-01-01', 'Pemantapan Reguler akan diadakan sesuai jam mata pelajaran tersebut\r\nJadwal Reguler tidak dipungut biaya'),
(2, 'Ujian Sertifikasi Keahlian', '2018-04-12', 'Ujian Sertifikasi Keahlian akan diadakan di kelas Bengkel TI pada tanggal 12-13 April 2018\r\n\r\nKet : Pengawasan dan Pengujian Eksternal\r\n'),
(3, 'UNBK', '2018-04-02', 'Ujian Nasional Berbasis Komputer akan diadakan pada tanggal 2-5 April 2018 di kelas yang sudah ditentukan\r\n'),
(4, 'Pengumuman Kelulusan', '2018-05-02', 'Hasil kelulusan akan dikirim Via POS'),
(5, ' Perpisahan Sekolah', '2018-05-10', '<p>Silahkan ditentukan sendiri gimana perpisahannya :v</p><p>Tapi upit ahahhahaha</p>');

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id` int(11) NOT NULL,
  `judul_berita` varchar(50) NOT NULL,
  `tanggal_berita` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `isi_berita` text NOT NULL,
  `link` varchar(256) NOT NULL,
  `gambar` varchar(256) NOT NULL DEFAULT 'no-image.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id`, `judul_berita`, `tanggal_berita`, `isi_berita`, `link`, `gambar`) VALUES
(32, 'Ini Judul Berita ke-1', '2018-02-13 01:55:15', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin nec volutpat sapien. Praesent vitae efficitur turpis. Morbi placerat quis est eu iaculis. Phasellus vitae dignissim massa. Curabitur ultrices pharetra neque, sit amet sagittis lacus efficitur ut. Fusce cursus lacinia urna, ut aliquam lorem facilisis non. Sed vitae tellus ullamcorper, blandit lacus sed, aliquam nibh. Morbi tempus sodales justo, at accumsan orci mollis in. Nullam consectetur eros sapien, euismod finibus nibh fermentum ut. Curabitur quis rutrum ante. Etiam sit amet nunc condimentum, laoreet orci non, consequat lectus. Sed et dolor egestas, eleifend est at, vestibulum lorem. Sed elit neque, porta quis posuere id, sollicitudin sed dolor. Pellentesque luctus mi nisi, vitae condimentum mauris ornare quis. Quisque velit ligula, tincidunt eget quam at, commodo tincidunt lorem. Ut at enim a sapien porta cursus.</p><p>Suspendisse ullamcorper ligula tellus, eu cursus justo venenatis dignissim. In euismod commodo tortor, id blandit diam condimentum a. Phasellus vitae tellus bibendum, condimentum lectus et, eleifend orci. Proin condimentum lorem eget laoreet porttitor. Nullam laoreet lobortis ullamcorper. Suspendisse fermentum, sapien vestibulum dapibus iaculis, sapien sem tempus ex, eget pharetra nisi erat eu tortor. Phasellus tincidunt, tortor vel cursus pharetra, est elit tincidunt mauris, ac auctor augue dolor cursus ex. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse potenti. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aliquam finibus ullamcorper rutrum. Phasellus nec venenatis magna, accumsan cursus nisi. Integer viverra accumsan metus ut mollis. Vestibulum sagittis, dui sed dignissim ultrices, lacus justo fringilla ipsum, eu finibus urna eros at felis. Nulla placerat lacus ac mauris dictum, pretium mollis orci mollis. Nullam at vehicula dolor. Fusce elementum, justo eget imperdiet volutpat, metus metus tempus arcu, at feugiat metus orci nec quam. Suspendisse tincidunt nec erat at mattis. Duis at feugiat massa, sed rutrum lectus. Mauris felis mauris, suscipit ut ultrices ut, faucibus quis dolor.</p><p>Nullam et odio vel erat fringilla suscipit at a lectus. Pellentesque vitae sem vitae felis tincidunt mollis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Cras quam augue, iaculis sit amet fringilla eu, euismod a nibh. Morbi auctor magna eu felis fermentum ultricies. Etiam neque ex, sollicitudin in dolor sit amet, eleifend eleifend lorem. Maecenas dapibus magna eu dui pellentesque imperdiet. Nam condimentum mattis molestie. Cras ante quam, placerat eget mi sit amet, tempus tempor metus. In nec elit sed tortor convallis dictum. Etiam est leo, faucibus eu bibendum vel, dignissim ut lorem. Cras dignissim eros nec arcu molestie semper. Nunc sollicitudin porta rutrum. Etiam et consequat metus, vitae maximus lacus. Mauris iaculis purus id enim aliquet luctus.</p><p>Nulla vitae imperdiet augue, id tincidunt turpis. Cras sodales sodales mauris, id mattis ipsum tempus non. Fusce dictum dapibus libero ac posuere. Aenean vel quam ut neque feugiat pulvinar. Vestibulum porta tincidunt eleifend. Duis eleifend nunc semper, pulvinar orci eu, efficitur ante. Vestibulum dapibus ante sed mauris tincidunt efficitur.</p>', 'ini-judul-berita-ke-1', '1518487005_68.jpg'),
(33, 'Bagaimana cara menumpas kutu yang ada pada sepatu', '2018-02-13 13:15:21', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin nec volutpat sapien. Praesent vitae efficitur turpis. Morbi placerat quis est eu iaculis. Phasellus vitae dignissim massa. Curabitur ultrices pharetra neque, sit amet sagittis lacus efficitur ut. Fusce cursus lacinia urna, ut aliquam lorem facilisis non. Sed vitae tellus ullamcorper, blandit lacus sed, aliquam nibh. Morbi tempus sodales justo, at accumsan orci mollis in. Nullam consectetur eros sapien, euismod finibus nibh fermentum ut. Curabitur quis rutrum ante. Etiam sit amet nunc condimentum, laoreet orci non, consequat lectus. Sed et dolor egestas, eleifend est at, vestibulum lorem. Sed elit neque, porta quis posuere id, sollicitudin sed dolor. Pellentesque luctus mi nisi, vitae condimentum mauris ornare quis. Quisque velit ligula, tincidunt eget quam at, commodo tincidunt lorem. Ut at enim a sapien porta cursus.</p><p>Suspendisse ullamcorper ligula tellus, eu cursus justo venenatis dignissim. In euismod commodo tortor, id blandit diam condimentum a. Phasellus vitae tellus bibendum, condimentum lectus et, eleifend orci. Proin condimentum lorem eget laoreet porttitor. Nullam laoreet lobortis ullamcorper. Suspendisse fermentum, sapien vestibulum dapibus iaculis, sapien sem tempus ex, eget pharetra nisi erat eu tortor. Phasellus tincidunt, tortor vel cursus pharetra, est elit tincidunt mauris, ac auctor augue dolor cursus ex. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse potenti. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aliquam finibus ullamcorper rutrum. Phasellus nec venenatis magna, accumsan cursus nisi. Integer viverra accumsan metus ut mollis. Vestibulum sagittis, dui sed dignissim ultrices, lacus justo fringilla ipsum, eu finibus urna eros at felis. Nulla placerat lacus ac mauris dictum, pretium mollis orci mollis. Nullam at vehicula dolor. Fusce elementum, justo eget imperdiet volutpat, metus metus tempus arcu, at feugiat metus orci nec quam. Suspendisse tincidunt nec erat at mattis. Duis at feugiat massa, sed rutrum lectus. Mauris felis mauris, suscipit ut ultrices ut, faucibus quis dolor.</p><p>Nullam et odio vel erat fringilla suscipit at a lectus. Pellentesque vitae sem vitae felis tincidunt mollis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Cras quam augue, iaculis sit amet fringilla eu, euismod a nibh. Morbi auctor magna eu felis fermentum ultricies. Etiam neque ex, sollicitudin in dolor sit amet, eleifend eleifend lorem. Maecenas dapibus magna eu dui pellentesque imperdiet. Nam condimentum mattis molestie. Cras ante quam, placerat eget mi sit amet, tempus tempor metus. In nec elit sed tortor convallis dictum. Etiam est leo, faucibus eu bibendum vel, dignissim ut lorem. Cras dignissim eros nec arcu molestie semper. Nunc sollicitudin porta rutrum. Etiam et consequat metus, vitae maximus lacus. Mauris iaculis purus id enim aliquet luctus.</p><p>Nulla vitae imperdiet augue, id tincidunt turpis. Cras sodales sodales mauris, id mattis ipsum tempus non. Fusce dictum dapibus libero ac posuere. Aenean vel quam ut neque feugiat pulvinar. Vestibulum porta tincidunt eleifend. Duis eleifend nunc semper, pulvinar orci eu, efficitur ante. Vestibulum dapibus ante sed mauris tincidunt efficitur.</p>', 'bagaimana-cara-menumpas-kutu-yang-ada-pada-sepatu', '1518527721_hewan-terkecil-9a-428x360.jpeg'),
(34, 'Judul Itu Gak Usah Panjang Yang Penting Bermakna D', '2018-02-13 13:16:51', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin nec volutpat sapien. Praesent vitae efficitur turpis. Morbi placerat quis est eu iaculis. Phasellus vitae dignissim massa. Curabitur ultrices pharetra neque, sit amet sagittis lacus efficitur ut. Fusce cursus lacinia urna, ut aliquam lorem facilisis non. Sed vitae tellus ullamcorper, blandit lacus sed, aliquam nibh. Morbi tempus sodales justo, at accumsan orci mollis in. Nullam consectetur eros sapien, euismod finibus nibh fermentum ut. Curabitur quis rutrum ante. Etiam sit amet nunc condimentum, laoreet orci non, consequat lectus. Sed et dolor egestas, eleifend est at, vestibulum lorem. Sed elit neque, porta quis posuere id, sollicitudin sed dolor. Pellentesque luctus mi nisi, vitae condimentum mauris ornare quis. Quisque velit ligula, tincidunt eget quam at, commodo tincidunt lorem. Ut at enim a sapien porta cursus.</p><p>Suspendisse ullamcorper ligula tellus, eu cursus justo venenatis dignissim. In euismod commodo tortor, id blandit diam condimentum a. Phasellus vitae tellus bibendum, condimentum lectus et, eleifend orci. Proin condimentum lorem eget laoreet porttitor. Nullam laoreet lobortis ullamcorper. Suspendisse fermentum, sapien vestibulum dapibus iaculis, sapien sem tempus ex, eget pharetra nisi erat eu tortor. Phasellus tincidunt, tortor vel cursus pharetra, est elit tincidunt mauris, ac auctor augue dolor cursus ex. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse potenti. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aliquam finibus ullamcorper rutrum. Phasellus nec venenatis magna, accumsan cursus nisi. Integer viverra accumsan metus ut mollis. Vestibulum sagittis, dui sed dignissim ultrices, lacus justo fringilla ipsum, eu finibus urna eros at felis. Nulla placerat lacus ac mauris dictum, pretium mollis orci mollis. Nullam at vehicula dolor. Fusce elementum, justo eget imperdiet volutpat, metus metus tempus arcu, at feugiat metus orci nec quam. Suspendisse tincidunt nec erat at mattis. Duis at feugiat massa, sed rutrum lectus. Mauris felis mauris, suscipit ut ultrices ut, faucibus quis dolor.</p><p>Nullam et odio vel erat fringilla suscipit at a lectus. Pellentesque vitae sem vitae felis tincidunt mollis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Cras quam augue, iaculis sit amet fringilla eu, euismod a nibh. Morbi auctor magna eu felis fermentum ultricies. Etiam neque ex, sollicitudin in dolor sit amet, eleifend eleifend lorem. Maecenas dapibus magna eu dui pellentesque imperdiet. Nam condimentum mattis molestie. Cras ante quam, placerat eget mi sit amet, tempus tempor metus. In nec elit sed tortor convallis dictum. Etiam est leo, faucibus eu bibendum vel, dignissim ut lorem. Cras dignissim eros nec arcu molestie semper. Nunc sollicitudin porta rutrum. Etiam et consequat metus, vitae maximus lacus. Mauris iaculis purus id enim aliquet luctus.</p><p>Nulla vitae imperdiet augue, id tincidunt turpis. Cras sodales sodales mauris, id mattis ipsum tempus non. Fusce dictum dapibus libero ac posuere. Aenean vel quam ut neque feugiat pulvinar. Vestibulum porta tincidunt eleifend. Duis eleifend nunc semper, pulvinar orci eu, efficitur ante. Vestibulum dapibus ante sed mauris tincidunt efficitur.</p>', 'judul-itu-gak-usah-panjang-yang-penting-bermakna-dan-sesuai-dengan-isinya', '1518527811_794873-engineering-wallpaper.jpg'),
(35, 'Ternyata Begitu Caranya', '2018-02-13 13:17:40', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin nec volutpat sapien. Praesent vitae efficitur turpis. Morbi placerat quis est eu iaculis. Phasellus vitae dignissim massa. Curabitur ultrices pharetra neque, sit amet sagittis lacus efficitur ut. Fusce cursus lacinia urna, ut aliquam lorem facilisis non. Sed vitae tellus ullamcorper, blandit lacus sed, aliquam nibh. Morbi tempus sodales justo, at accumsan orci mollis in. Nullam consectetur eros sapien, euismod finibus nibh fermentum ut. Curabitur quis rutrum ante. Etiam sit amet nunc condimentum, laoreet orci non, consequat lectus. Sed et dolor egestas, eleifend est at, vestibulum lorem. Sed elit neque, porta quis posuere id, sollicitudin sed dolor. Pellentesque luctus mi nisi, vitae condimentum mauris ornare quis. Quisque velit ligula, tincidunt eget quam at, commodo tincidunt lorem. Ut at enim a sapien porta cursus.</p><p>Suspendisse ullamcorper ligula tellus, eu cursus justo venenatis dignissim. In euismod commodo tortor, id blandit diam condimentum a. Phasellus vitae tellus bibendum, condimentum lectus et, eleifend orci. Proin condimentum lorem eget laoreet porttitor. Nullam laoreet lobortis ullamcorper. Suspendisse fermentum, sapien vestibulum dapibus iaculis, sapien sem tempus ex, eget pharetra nisi erat eu tortor. Phasellus tincidunt, tortor vel cursus pharetra, est elit tincidunt mauris, ac auctor augue dolor cursus ex. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse potenti. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aliquam finibus ullamcorper rutrum. Phasellus nec venenatis magna, accumsan cursus nisi. Integer viverra accumsan metus ut mollis. Vestibulum sagittis, dui sed dignissim ultrices, lacus justo fringilla ipsum, eu finibus urna eros at felis. Nulla placerat lacus ac mauris dictum, pretium mollis orci mollis. Nullam at vehicula dolor. Fusce elementum, justo eget imperdiet volutpat, metus metus tempus arcu, at feugiat metus orci nec quam. Suspendisse tincidunt nec erat at mattis. Duis at feugiat massa, sed rutrum lectus. Mauris felis mauris, suscipit ut ultrices ut, faucibus quis dolor.</p><p>Nullam et odio vel erat fringilla suscipit at a lectus. Pellentesque vitae sem vitae felis tincidunt mollis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Cras quam augue, iaculis sit amet fringilla eu, euismod a nibh. Morbi auctor magna eu felis fermentum ultricies. Etiam neque ex, sollicitudin in dolor sit amet, eleifend eleifend lorem. Maecenas dapibus magna eu dui pellentesque imperdiet. Nam condimentum mattis molestie. Cras ante quam, placerat eget mi sit amet, tempus tempor metus. In nec elit sed tortor convallis dictum. Etiam est leo, faucibus eu bibendum vel, dignissim ut lorem. Cras dignissim eros nec arcu molestie semper. Nunc sollicitudin porta rutrum. Etiam et consequat metus, vitae maximus lacus. Mauris iaculis purus id enim aliquet luctus.</p><p>Nulla vitae imperdiet augue, id tincidunt turpis. Cras sodales sodales mauris, id mattis ipsum tempus non. Fusce dictum dapibus libero ac posuere. Aenean vel quam ut neque feugiat pulvinar. Vestibulum porta tincidunt eleifend. Duis eleifend nunc semper, pulvinar orci eu, efficitur ante. Vestibulum dapibus ante sed mauris tincidunt efficitur.</p>', 'ternyata-begitu-caranya', '1518709783_SmallBanner_2.png'),
(36, 'Judul 3', '2018-02-18 12:04:10', 'BACED\r\n', 'judul-3', '1518955450_164769230-software-wallpapers.jpg'),
(37, 'Judul ke-5', '2018-02-18 12:04:27', 'asdasdas', 'judul-ke-5', '1518955467_8a84f6081395d2337e77552ae2998041.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `buku_tamu`
--

CREATE TABLE `buku_tamu` (
  `id` int(11) NOT NULL,
  `nama` varchar(256) NOT NULL,
  `asal` varchar(256) NOT NULL,
  `isi` text NOT NULL,
  `email` varchar(256) NOT NULL,
  `dibuat_pada` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buku_tamu`
--

INSERT INTO `buku_tamu` (`id`, `nama`, `asal`, `isi`, `email`, `dibuat_pada`) VALUES
(1, 'James', 'New York University', '', '', '2018-02-05 17:00:00'),
(2, 'Johnson', 'DC University', '', '', '2018-02-06 17:00:00'),
(3, 'Yanuar Wanda Putra', 'SMKN 11 Bandung', 'adnakdna\r\n', 'yanuar@gmail.com', '2018-02-18 13:43:48'),
(6, 'YanuarWanda', 'SMKN 11 Bandung', 'Bagus yah webnya.', 'yanuar.wanda3@gmail.co', '2018-02-18 14:07:13'),
(8, 'YanuarWanda', 'SMKN 11 Bandung', 'Ketemua akhirnya\r\n', 'yanuar.wanda2@gmail.com', '2018-02-18 14:12:09');

-- --------------------------------------------------------

--
-- Table structure for table `file_download`
--

CREATE TABLE `file_download` (
  `id` int(11) NOT NULL,
  `nama_file` varchar(100) NOT NULL,
  `deskripsi_file` text,
  `link_file` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `file_download`
--

INSERT INTO `file_download` (`id`, `nama_file`, `deskripsi_file`, `link_file`) VALUES
(1, 'Soal UKK 2017', 'Soal-Soal\r\n', ''),
(2, 'Soal UAS 2018', '<p>lorem ipsum dolor sit amet. lorem ipsum dolor sit amet.lorem ipsum dolor sit amet.lorem ipsum dolor sit amet.lorem ipsum dolor sit amet.lorem ipsum dolor sit amet.lorem ipsum dolor sit amet.lorem ipsum dolor sit amet.lorem ipsum dolor sit amet.lorem ipsum dolor sit amet.lorem ipsum dolor sit amet.lorem ipsum dolor sit amet.lorem ipsum dolor sit amet.lorem ipsum dolor sit amet.lorem ipsum dolor sit amet.lorem ipsum dolor sit amet.lorem ipsum dolor sit amet.lorem ipsum dolor sit amet.lorem ipsum dolor sit amet.lorem ipsum dolor sit amet.lorem ipsum dolor sit amet.lorem ipsum dolor sit amet.lorem ipsum dolor sit amet.lorem ipsum dolor sit amet.lorem ipsum dolor sit amet.lorem ipsum dolor sit amet.lorem ipsum dolor sit amet.lorem ipsum dolor sit amet.lorem ipsum dolor sit amet.lorem ipsum dolor sit amet.lorem ipsum dolor sit amet.lorem ipsum dolor sit amet.lorem ipsum dolor sit amet.lorem ipsum dolor sit amet.lorem ipsum dolor sit amet.lorem ipsum dolor sit amet.lorem ipsum dolor sit amet.lorem ipsum dolor sit amet.lorem ipsum dolor sit amet.lorem ipsum dolor sit amet.lorem ipsum dolor sit amet.lorem ipsum dolor sit amet.lorem ipsum dolor sit amet.lorem ipsum dolor sit amet.lorem ipsum dolor sit amet.lorem ipsum dolor sit amet.lorem ipsum dolor sit amet.lorem ipsum dolor sit amet.lorem ipsum dolor sit amet.</p>', 'asd');

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `id` int(11) NOT NULL,
  `nip` varchar(25) DEFAULT NULL,
  `nama_guru` varchar(100) NOT NULL,
  `deskripsi_guru` text,
  `jabatan_guru` varchar(200) NOT NULL DEFAULT 'Guru Tetap',
  `email` varchar(256) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `gambar` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`id`, `nip`, `nama_guru`, `deskripsi_guru`, `jabatan_guru`, `email`, `no_hp`, `gambar`) VALUES
(1, '198012272014102002', 'Ani Nuraeni,S.Kom', 'Guru Mata Pelajaran Prod. Rekayasa Perangkat Lunak', 'Ketua Kompetensi Keahlian TIK', '', '', '1518699659_nophoto.jpg'),
(2, '', 'Himatul Munawaroh,ST', 'Guru Mata Pelajaran Prod. Rekayasa Perangkat Lunak', 'Guru Tetap', '', '', '1518700668_no-image.jpg'),
(3, '', 'Rini Melati, S.Kom', 'Guru Mata Pelajaran Prod. Rekayasa Perangkat Lunak', 'Guru Tetap', '', '', '1518700679_no-image.jpg'),
(4, '', 'Abdullah Afif Anwari,S.Kom', 'Guru Mata Pelajaran Prod. Rekayasa Perangkat Lunak', 'Guru Tetap', '', '', '1518700481_nophoto.png'),
(5, '196202201989031007', 'Drs.Asep Eka Setia Priatna,M.Si', 'Guru Mata Pelajaran Prod. Rekayasa Perangkat Lunak', 'UPT ICT', '', '', '1518700490_nophoto.png'),
(10, '1502011462', 'Yanuar Wanda Putra', 'Pemrograman Web Statis dan', 'Guru Tetap', 'yanuar.wanda2@gmail.com', '087825418390', '1518532511_794873-engineering-wallpaper.jpg'),
(11, '1502011462', 'Yanuar Wanda Putra', 'Pemrograman Belakang Akhir', 'Ketua Caraka Divisi 2', 'yanuar.wanda2@gmail.com', '087825418390', '1518712619_85.jpg'),
(12, '1502011333', 'Yanuar Wanda Putra', 'adjkawdjkawdj', '', '', '', 'no-image.jpg'),
(13, '1502011000', 'Yanuar Wnada Putra', 'IPA', '', '', '', 'no-image.jpg'),
(14, '431231123', 'Yanuar', 'aksas', '', '', '', 'no-image.jpg'),
(15, '120341204', 'Yanuar Wanda', 'kaksdoawkdo', '', '', '', 'no-image.jpg'),
(16, '01230123', 'Yanuar', 'ksdadk', '', '', '', 'no-image.jpg'),
(17, '195222839289123', 'Yudi Subekti, S.Kom', 'Pemrograman Web Dinamis ', 'Ketua Kompetensi Keahlian RPL', '', '', 'no-image.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `kolom_guru`
--

CREATE TABLE `kolom_guru` (
  `id` int(11) NOT NULL,
  `dibuat_pada` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `judul` varchar(256) NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kolom_guru`
--

INSERT INTO `kolom_guru` (`id`, `dibuat_pada`, `judul`, `isi`) VALUES
(2, '2018-02-17 14:11:12', 'Judul 1', '<p>In ultrices ipsum ut leo viverra vulputate. Vestibulum sapien nisi, viverra non justo non, venenatis ullamcorper nisl. Vestibulum cursus massa id dignissim condimentum. Phasellus in aliquet justo, eget cursus ex. Fusce elementum, elit nec lobortis porttitor, sapien orci consectetur enim, ac faucibus lacus libero nec mauris. Nullam vitae commodo tortor. Duis risus massa, vehicula et ante ut, pharetra scelerisque ligula. Sed tristique erat eu turpis porta lacinia. Vivamus luctus purus id ex molestie elementum. Sed at massa congue, hendrerit enim sed, posuere nunc. Nunc imperdiet, arcu non congue volutpat, ligula dui iaculis nibh, ut sodales mauris ante non augue.</p>\r\n\r\n<p>Morbi id nisl vitae lacus imperdiet rutrum in quis nisl. Curabitur maximus dolor at iaculis aliquet. Quisque porttitor sem sed dignissim efficitur. Cras eget iaculis nunc. Suspendisse ante nisi, euismod vitae mi eget, consequat pulvinar purus. Praesent gravida erat aliquam, ultrices ipsum vestibulum, aliquam magna. Suspendisse potenti. Donec est velit, placerat sit amet sagittis ut, egestas ac odio. Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec ullamcorper sem quis lacus viverra feugiat. Vestibulum hendrerit enim id cursus lacinia. Cras nec hendrerit nibh. Duis egestas arcu vitae libero commodo, non aliquam augue consequat. Nulla elementum interdum sapien id molestie.</p>\r\n'),
(3, '2018-02-17 14:11:25', 'Judul 2', '<p>Proin elementum sed risus non varius. Nullam eget justo venenatis, blandit sapien sit amet, efficitur lectus. Vivamus lobortis libero elit, non rhoncus libero lobortis eu. Sed nec orci nec ligula sodales accumsan. In feugiat lobortis massa at ultricies. Nulla facilisi. Quisque laoreet tincidunt lorem, eget auctor eros. Vivamus ac sollicitudin nibh. Phasellus a sollicitudin quam. Cras posuere odio nec nunc porttitor, cursus facilisis urna efficitur. Praesent eget elit vitae ligula semper pharetra.</p>\r\n\r\n<p>Aliquam non egestas purus. Mauris sagittis augue nec nisi cursus ultrices. Proin ac risus sed lectus malesuada pellentesque. Vivamus quis nisi egestas, efficitur massa quis, egestas urna. Pellentesque a enim maximus est volutpat tempus at at quam. Cras ut purus maximus, ultrices nibh id, rutrum tellus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Duis eu ultricies dui, nec cursus odio. Sed at dictum nisi, nec gravida sem.</p>\r\n'),
(4, '2018-02-17 14:11:41', 'Judul 3', '<p>Etiam laoreet lacinia urna eu dignissim. Proin imperdiet fringilla velit eget commodo. Duis vel laoreet ligula, a dignissim mi. Morbi vulputate nibh eget massa finibus, non faucibus ex maximus. Nulla in purus maximus, ullamcorper odio in, viverra tortor. Praesent ultricies enim nunc. Nullam lobortis, nunc id pharetra rhoncus, purus nisl malesuada lectus, eu iaculis ex enim ut tortor. Suspendisse nec enim semper, varius lectus eget, venenatis lacus. Mauris luctus arcu sed dignissim efficitur. Curabitur ut egestas nisi. Nullam sed turpis pellentesque nibh molestie viverra. Proin rutrum sem lacinia, tincidunt lorem eget, pellentesque nulla. Etiam venenatis tellus lectus, sit amet maximus nibh imperdiet ut. Sed sodales tristique nibh id feugiat. Fusce fermentum tempor tincidunt. Donec non nisi sed justo laoreet convallis sed sed sem.</p>\r\n'),
(5, '2018-02-17 14:11:59', 'Judul 4', '<p>Sed imperdiet erat ut ex dapibus suscipit. Aliquam et molestie nulla. Pellentesque vulputate nibh at dui mollis, non pharetra lacus molestie. Phasellus sed lacus lobortis magna hendrerit volutpat. Proin non elit ullamcorper, sodales tellus eu, vulputate velit. Etiam vel ullamcorper lacus, sed pharetra arcu. Suspendisse potenti. Aenean tempus posuere augue quis posuere. Cras vitae euismod nulla. Nam sapien massa, sodales vitae rutrum et, commodo vel enim. Ut ut tortor pretium, egestas ante et, faucibus dui. Donec tristique erat sit amet nisi scelerisque, venenatis ornare sem facilisis. In nec mauris turpis. Donec nec massa sit amet quam iaculis fringilla. Integer auctor facilisis diam, vel molestie magna feugiat tincidunt. Curabitur malesuada nibh ut sem feugiat, a dapibus neque rutrum.</p>\r\n\r\n<p>Aliquam porttitor tempor aliquam. Phasellus pharetra finibus nisi ac maximus. Nulla vitae ultrices turpis. Nunc nisl nunc, sodales et ligula sed, interdum laoreet lacus. Nulla porta feugiat tincidunt. Etiam non tellus scelerisque, pretium est vitae, accumsan dolor. In bibendum, ipsum ac mattis egestas, nunc sem malesuada arcu, non interdum risus purus at purus. Etiam at sapien vitae eros faucibus interdum in quis erat. Pellentesque malesuada malesuada imperdiet. Sed eget laoreet leo. Praesent posuere, nisi aliquet aliquam tincidunt, neque lorem posuere odio, a mattis sapien nulla a arcu. Aenean lacinia, neque tempus vulputate porta, orci quam gravida sapien, a pretium libero tellus scelerisque nibh.</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `pengumuman`
--

CREATE TABLE `pengumuman` (
  `id` int(11) NOT NULL,
  `judul_pengumuman` varchar(100) NOT NULL,
  `tanggal_pengumuman` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `isi_pengumuman` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengumuman`
--

INSERT INTO `pengumuman` (`id`, `judul_pengumuman`, `tanggal_pengumuman`, `isi_pengumuman`) VALUES
(1, 'Info Kelulusan Tahun Ajaran 2017/2018', '2018-02-05 17:00:00', 'Hasil kelulusan akan dibagikan ke tempat tinggal masing-masing melalui POS pada tanggal 2 Mei 2018\r\nTerima Kasih'),
(2, 'Pendaftaran Wifi/Mac Address Siswa', '2017-08-01 17:00:00', 'Silahkan klik link dibawah ini untuk mengisi mac address laptop:\r\n\r\n<a href=\"https://tinyurl.com/daftar-wifisiswa\">Link Daftar Wifi Siswa</a>'),
(3, 'Info PPDB 2016 SMKN 11 Bandung', '2016-05-09 17:00:00', 'Penerimaan Peserta Didik Baru 2016 SMKN 11 Akan dilaksanakan:\r\n\r\na)     Jalur Non Akademik (Prestasi dan Affirmasi)\r\n\r\nPendaftaran dilakukan secara kolektif oleh sekolah asal\r\n\r\nTanggal   : 15 s.d. 18 Juni 2016\r\n\r\nPukul       : 08.00 – 14.00 WIB\r\n\r\nTempat    : Ruang RAP Bawah\r\n\r\n                SMK Negeri 11 Bandung\r\n\r\n \r\n\r\nb)    Jalur Akademik\r\n\r\nPendaftaran dilakukan oleh peserta didik didampingi orang tua yang bersangkutan.\r\n\r\nTanggal   : 27 Juni s.d. 30 Juni 2016\r\n\r\nPukul       : 08.00 – 14.00 WIB\r\n\r\nTempat    : Ruang RAP Bawah\r\n\r\n                SMK Negeri 11 Bandung'),
(4, 'Format EVADIR Untuk Guru', '2016-09-04 17:00:00', 'Berikut Link untuk format EVADIR:\r\n\r\nFormat Evadir'),
(5, 'Kejuaraan Lomba Catur', '2018-02-14 17:00:00', '<p>Harap Disimak</p>');

-- --------------------------------------------------------

--
-- Table structure for table `tentang_rpl`
--

CREATE TABLE `tentang_rpl` (
  `id` int(11) NOT NULL,
  `visi` text NOT NULL,
  `misi` text NOT NULL,
  `deskripsi` text NOT NULL,
  `sejarah` text NOT NULL,
  `kurikulum` text NOT NULL,
  `peluang_kerja` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tentang_rpl`
--

INSERT INTO `tentang_rpl` (`id`, `visi`, `misi`, `deskripsi`, `sejarah`, `kurikulum`, `peluang_kerja`) VALUES
(1, '<p>Mencetak lulusan berkualitas dengan kompetensi di bidang rekayasa perangkatlunak, pemrograman dan web.</p>', '<ol><li>Mendidik siswa mengidentifikasi dan melakukan reparasi software untuk kebutuhan didunia usaha dan industri.</li><li>Mendidik siswa mengimplementasikan aplikasi-aplikasi pemrograman, dan pengembangan web.</li><li>Mendidik siswa mengimplementasikan pemrograman berbasis client server dan desktop.</li></ol>', '<p>Apa itu Rekayasa Perangkat Lunak? Selama 50 tahun terakhir telah terjadi kemajuan revolusioner di bidang teknologi, yang mengarah pada perbaikan kinerja perangkat keras dan perubahan besar dalam arsitektur komputasi. Kemajuan ini telah menyebabkan produksi sistem berbasis komputer yang kompleks yang mampu memberikan informasi dalam berbagai format. Meningkatnya daya komputer telah membuat aplikasi komputer yang tidak realistis menjadi proposisi yang layak, menandai asal mula era di mana produk perangkat lunak jauh lebih kompleks dibandingkan sebelumnya. Dengan mempelajari dan mempraktikan ilmu rekayasa perangkat lunak (software engineering), sistem kompleks ini dapat dikembangkan secara sistematis dan efisien. Menurut IEEE, rekayasa perangkat lunak didefinisikan sebagai penerapan pendekatan sistematis, disiplin, dapat diukur terhadap pengembangan, operasi, dan pemeliharaan perangkat lunak; Artinya, penerapan teknik yang dilakukan untuk perangkat lunak. Rekayasa perangkat lunak dapat didefinisikan sebagai pendekatan sistematis untuk mengembangkan perangkat lunak dalam waktu dan anggaran yang ditentukan. Rekayasa perangkat lunak adalah disiplin teknologi yang menggabungkan konsep ilmu komputer, ekonomi, kemampuan komunikasi, dan ilmu manajemen dengan pendekatan pemecahan masalah dari teknik. Ini juga melibatkan pendekatan terstandar untuk pengembangan program, baik dalam aspek manajerial maupun teknisnya. Pengetahuan mendalam tentang ilmu komputer baik teoritis maupun praktis merupakan dasar rekayasa perangkat lunak. Pengetahuan teoritis memberikan pemahaman tentang masalah mana yang dapat diatasi, struktur data dan algoritma apa yang sesuai, kapan dan bagaimana penggunaannya, dan lain sebagainya. Di sisi lain, pengetahuan praktis memberikan pemahaman tentang bagaimana fungsi perangkat keras, bagaimana memanfaatkan kekuatan bahasa pemrogramanan dan tools terkait saat mengembangkan perangkat lunak, dan lain-lain. Salah satu tujuan utama rekayasa perangkat lunak adalah membantu pengembang mendapatkan perangkat lunak berkualitas tinggi. Kualitas ini dicapai melalui penggunaan Total Quality Management (TQM), yang memungkinkan proses perbaikan secara terus-menerus yang mengarah pada pendekatan pengembangan yang lebih mapan terhadap rekayasa perangkat lunak. Rekayasa perangkat lunak adalah pendekatan yang sistematis terhadap pengembangan, pengoperasian, pemeliharaan dan pengakhiran (retirement) perangkat lunak. Rekayasa Perangkat Lunak merupakan penerapan sains dan matematika dimana kemampuan peralatan komputer berguna bagi manusia melalui program komputer, prosedur, dan dokumentasi terkait. Tujuan dasar rekayasa perangkat lunak adalah untuk mengembangkan metode dan prosedur pengembangan perangkat lunak yang dapat meningkatkan sistem yang besar dan dapat digunakan secara konsisten untuk menghasilkan perangkat lunak berkualitas tinggi dengan biaya rendah dan dengan siklus waktu yang kecil.</p>', '<ol><li><strong>PENGERTIAN RPL</strong><br />  Secara umum disepakati dari terjemahan Software Engineering yang mulai populer tahun 1968 pada Software Engineering Conference oleh NATO. pengertian RPL sendiri yaitu disiplin ilmu yang membahas seluruh aspek produksi perangkat lunak dari tahap analisa kebutuhan user, menentukan spesifikasi kebutuhan user, disain pengkodean, pengujian, hingga kepemeliharaan sistem setelah dipakai. jadi jelas RPL bukan hanya pembuatan tapi juga semua aspek dalam pembuatan suatu software.</li><li><strong>TUJUAN REKAYASA PERANGKAT LUNAK</strong><br />  Memperoleh biaya produksi software yang rendah – menghasilkan software berkinerja tinggi, handal dan tepat waktu – menghasilkan software yang dapat bekerja pada berbagai platform – menghasilkan software dengan biaya perawatan rendah.</li><li><strong>RUANG LINGKUP REKAYASA PERANGKAT LUNAK</strong><br />  Software requirements berhubungan dengan spesifikasi kebutuhan dan persyaratan perangkat lunak. – Software design mencakup proses penentuan arsitektur, komponen, antarmuka, dan karakteristik lain dari perangkat lunak. – Software construction berhubungan dengan detil pengembangan perangkat lunak, termasuk algoritma, pengkodean, pengujian, dan pencarian kesalahan. – Software testing meliputi pengujian pada keseluruhan perilaku perangkat lunak. – Software maintenance mencakup upaya-upaya perawatan ketika perangkat lunak telah dioperasikan. – Software configuration management berhubungan dengan usaha perubahan konfigurasi perangkat lunak untuk memenuhi kebutuhan tertentu. – Software engineering management berkaitan dengan pengelolaan dan pengukuran RPL, termasuk perencanaan proyek perangkat lunak. – Software engineering tools and methods mencakup kajian teoritis tentang alat bantu dan metode RPL. – Software engineering process berhubungan dengan definisi, implementasi, pengukuran, pengelolaan, perubahan dan perbaikan proses RPL. – Software quality menitikberatkan pada kualitas dan daur hidup perangkat lunak.</li><li><strong>RPL dan DISIPLIN ILMU KOMPUTER</strong><br />  Disiplin ilmu komputer lahir awal tahun 1940 yang merupakan integrasi teori algoritma, logika matematika, dan ditemukannya penyimpanan program secara elektronik pada komputer.</li><li><strong>RPL DISIPLIN ILMU LAIN</strong><br />  Bidang ilmu manajemen meliputi akutansi, finansial, pemasaran, manajemen operasi, ekonomi, analisis kuantitatif, manajemen sumber daya manusia, kebijakan dan strategi bisnis. – Bidang ilmu matematika meliputi aljabar linier, kalkulus, peluang, statistik, analisis numerik dan matematika diskrit. – Bidang ilmu manajemen proyek meliputi semua hal yang berkaitan dengan proyek, seperti ruang lingkup proyek, anggaran, tenaga kerja, kualitas, manajemen resiko, dan penjadwalan proyek. – Bidang ilmu manajemen kualitas meliputi pengembangan sistem kualitas, manajemen resiko dan keandalan, perbaikan kualitas, dan metode-metode kuantitatif. – Bidang ilmu ergonomika menyangkut hubungan (interaksi) antara manusia dengan komponen-komponen lain dalam sistem komputer. – Bidang ilmu rekayasa sistem meliputi teori sistem, analisis biaya-keuntungan, pemodelan, simulasi, proses dan operasi bisnis.</li><li><strong>PERKEMBANGAN REKAYASA PERANGKAT LUNAK (RPL)</strong><br />  1940an Komputer pertama yang membolehkan pengguna menulis kode program langsung – 1950an Generasi awal interpreter dan bahasa macro Generasi pertama compiler Generasi kedua compiler – 1960an Komputer mainframe mulai dikomersialkan Pengembangan perangkat lunak pesanan Konsep Software Engineering mulai digunakan – 1970an Perangkat pengembang perangkat lunak Perangkat minicomputer komersial – 1980an Perangkat Komputer Personal (PC) komersial Peningkatan permintaan perangkat lunak – 1990an Pemrograman berorientasi obyek (OOP) Agile Process dan Extreme Programming Peningkatan drastis kapasitas memori Peningkatan penggunaan internet – 2000an Platform interpreter modern (Java, .Net, PHP, dll) Outsourcing</li><li><strong>PROFESI DAN SERTIFIKASI</strong><br />  Profesi sebagai software engineer mungkin asing ditelinga anda termasuk anda karena kerancuan istilah RPL tadi. sertifikasi kompetensi RPL sampai sekarang masih menjadi perdebatan dalam industri software karena menuntut hal yang spesifik untuk software tertentu. ACM (association for computing machinery) pernah membuat sertifikasi untuk program software engineer tahun 1980an tapi dihentikan karena kurang peminat. IEEE sudah mengeluarkan lebih dari 500 sertifikat profesi RPL. di Canada telah keluar sertifikat legal untuk RPL yang disebut ISP (Information System Professional) Saat ini, sertifikasi untuk RPL di Indonesia juga belum tersedia, namun telah disusun Standar Kompetensi Kerja Nasional Indonesia untuk Bidang Programmer Komputer. Meskipun belum memenuhi cakupan bidang RPL secara keseluruhan, namun paling tidak dapat digunakan sebagai pendekatan sertifikasi bidang RPL.</li></ol>', 'https://drive.google.com/file/d/0BxuiQ-cxi2TYY2FYNjl0TE44dmM/preview', '<ol><li><strong>Konfersi PSD ke WordPress</strong> – Merupakan pekerjaan yang berperan untuk anda agar mampu memenuhi kebutuhan klien salah satunya mengubah hasil photoshop menjadi file wordpress.</li><li><strong>Software Engineer</strong> – Merupakan pekerjaan yang mengaharuskan anda dapat mengembangkan perangkat lunak dengan memenuhi kebutuhan klein. Seperti perangkat lunak untuk pendidikan, bisnis, hiburan games, telekomunikasi dll.</li><li><strong>Programmer </strong>– Membuat program sebagau perangkat lunak dari komputeer untuk memudahkan fungsi tertentu. Programmer dapat bekerja di segala bidang baik industri, pertelevisan, perbankan, media. Jadi peluangan kerja juruan rpl sangat banyak.</li><li><strong>IT Colsultant</strong> – Anda bisa bekerja sebagai IT consultant yang beperan dalam perencanaan dan pengevaluasian penerapan IT pada sebuah organisasi. Jadi lowongan kerja smk jurusan rpl banyak, tinggal anda mencari informasinya.</li><li><strong>System Analyst dan System Integrator</strong> – Yang nantinya anda harus berperan dalam melakukan analisis terhadapat sistem atau program yang berbasis teknologi dan informasi dalam suatu perusahaan dan membuat solusi yang integratif dan memanfaatkan perangkat lunak. Ini menjadi salah satu peluang kerja lulusan smk jurusan rpl.</li><li><strong>Database Engineer / Database Administrator</strong> – Berperan dalam perencanaan pemeliharaan basis data (termasuk data warehouse).</li><li><strong>Web Engineer</strong> – Bertugas merancang dan membangun website beserta layanan dan fasilitas berjalan di atasnya dan bertanggung jawab dalam pemeliharaan website dan mengembangkanya.</li><li><strong>Computer Network / Data Communication Engineer</strong> – Bertugas untuk merancang arsitektur jaringan komputer dan melakukan perawatan, pengelolaan jaringan dalam instansi atau perusahaan.</li><li><strong>Game Developer</strong> – Anda diharuskan dapat mengembangkan perangkat lunak game.</li><li><strong>Intellegent System Developer</strong> – Mengembangkan perangkat lunak yang intelegen seperti sistem pakar, image recognizer dll.</li><li><strong>Software Tester</strong> – Anda diharuskan dapat berperan khusus sebagai penguji perangkat lunakan dan bertanggung jawab atas kebenaran fungsi dari perangkat lunak maupun dari system.</li></ol>');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Jangwen', 'jangwen@gmail.com', '$2y$10$VkTxb/FyPkIwG6Wn.myIeenY3QcAGXFA8MEHVPCRyyRIgh0eI5ItW', 'bl9qtlXe8xcVvpxrTMc3z1dIz1aOfxfA5rZJFqmMmbwnuUcRyGQx4C9tpvxk', '2018-02-04 23:09:22', '2018-02-04 23:09:22'),
(2, 'Yanuar Wanda Putra', 'yanuar.wanda2@gmail.com', 'yanuar123', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agenda`
--
ALTER TABLE `agenda`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `buku_tamu`
--
ALTER TABLE `buku_tamu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `file_download`
--
ALTER TABLE `file_download`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kolom_guru`
--
ALTER TABLE `kolom_guru`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengumuman`
--
ALTER TABLE `pengumuman`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tentang_rpl`
--
ALTER TABLE `tentang_rpl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agenda`
--
ALTER TABLE `agenda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `buku_tamu`
--
ALTER TABLE `buku_tamu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `file_download`
--
ALTER TABLE `file_download`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `guru`
--
ALTER TABLE `guru`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `kolom_guru`
--
ALTER TABLE `kolom_guru`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pengumuman`
--
ALTER TABLE `pengumuman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tentang_rpl`
--
ALTER TABLE `tentang_rpl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
