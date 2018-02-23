-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 21, 2018 at 09:08 AM
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
(2, 'Soal UAS 2018', '<p>lorem ipsum dolor sit amet. lorem ipsum dolor sit amet.lorem ipsum dolor sit amet.lorem ipsum dolor sit amet.lorem ipsum dolor sit amet.lorem ipsum dolor sit amet.lorem ipsum dolor sit amet.lorem ipsum dolor sit amet.lorem ipsum dolor sit amet.lorem ipsum dolor sit amet.lorem ipsum dolor sit amet.lorem ipsum dolor sit amet.lorem ipsum dolor sit amet.lorem ipsum dolor sit amet.lorem ipsum dolor sit amet.lorem ipsum dolor sit amet.lorem ipsum dolor sit amet.lorem ipsum dolor sit amet.lorem ipsum dolor sit amet.lorem ipsum dolor sit amet.lorem ipsum dolor sit amet.lorem ipsum dolor sit amet.lorem ipsum dolor sit amet.lorem ipsum dolor sit amet.lorem ipsum dolor sit amet.lorem ipsum dolor sit amet.lorem ipsum dolor sit amet.lorem ipsum dolor sit amet.lorem ipsum dolor sit amet.lorem ipsum dolor sit amet.lorem ipsum dolor sit amet.lorem ipsum dolor sit amet.lorem ipsum dolor sit amet.lorem ipsum dolor sit amet.lorem ipsum dolor sit amet.lorem ipsum dolor sit amet.lorem ipsum dolor sit amet.lorem ipsum dolor sit amet.lorem ipsum dolor sit amet.lorem ipsum dolor sit amet.lorem ipsum dolor sit amet.lorem ipsum dolor sit amet.lorem ipsum dolor sit amet.lorem ipsum dolor sit amet.lorem ipsum dolor sit amet.lorem ipsum dolor sit amet.lorem ipsum dolor sit amet.lorem ipsum dolor sit amet.lorem ipsum dolor sit amet.</p>\r\n', 'https://drive.google.com/file/d/1UJMm3ZdguG1EktnO1bHFqWW8rOyCdRCg/view');

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `id_guru` int(11) NOT NULL,
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

INSERT INTO `guru` (`id_guru`, `nip`, `nama_guru`, `deskripsi_guru`, `jabatan_guru`, `email`, `no_hp`, `gambar`) VALUES
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
  `id_kolom` int(11) NOT NULL,
  `dibuat_pada` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `karya` int(11) NOT NULL,
  `judul` varchar(256) NOT NULL,
  `isi` text NOT NULL,
  `link` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kolom_guru`
--

INSERT INTO `kolom_guru` (`id_kolom`, `dibuat_pada`, `karya`, `judul`, `isi`, `link`) VALUES
(6, '2018-02-20 13:54:00', 16, 'Judul ke 221x k k k ', 'Testing broh.', 'judul-ke-221x-k-k-k-'),
(7, '2018-02-20 14:39:56', 17, 'akdawjdkaj', 'adawda\r\n', 'akdawjdkaj');

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
(1, '<p>&ldquo;Mencetak lulusan yang unggul, berbudaya dan berwawasan lingkungan serta memiliki komptensi di bidang teknologi informasi dan komunikasi khususnya rekayasa perangkat lunak &ldquo;</p>\r\n', '<ol>\r\n	<li>Membekali peserta didik dengan pengetahuan, sikap dan keterampilan dalam bidang teknologi informasi agar kompeten dibidangnya.</li>\r\n	<li>Menghasilkan lulusan yang berkualitas dan mampu bersaing di dunia kerja maupun indrustri di bidang teknologi informasi khususnya Rekayasa Perangkat Lunak.</li>\r\n	<li>Membekali siswa agar berprestasi dibidangnya baik ditingkat lokal, nasional maupun regional</li>\r\n	<li>Membekali siswa agar mampu berwirausaha dibidangnya khususnya dan umumnya dibidang lain.</li>\r\n</ol>\r\n', '<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\"><span style=\"font-size:11pt\"><span style=\"background-color:white\">Program Keahlian Rekayasa Perangkat Lunak (RPL) didirikan sejak tahun 2003&nbsp;<strong>Rekayasa Perangkat Lunak</strong>&nbsp;adalah salah satu kompetensi keahlian dalam bidang Teknologi Komputer dan Informatika yang secara khusus mempelajari tentang pemrograman komputer. Lulusan RPL dewasa ini sangat dibutuhkan untuk menjawab banyaknya kebutuhan industri bagi ketersediaan tenaga Teknisi dalam bidang Rekayasa Perangkat Lunak.</span></span></p>\r\n\r\n<p><span style=\"font-size:11.0pt\">Secara Khusus tujuan Program Keahlian Rekayasa Perangkat Lunak adalah membekali peserta didik dengan keterampilan, pengetahuan dan sikap agar kompeten untuk:</span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\"><span style=\"font-size:11pt\"><span style=\"background-color:white\">Program Keahlian Rekayasa Perangkat Lunak (RPL) didirikan sejak tahun 2003&nbsp;<strong>Rekayasa Perangkat Lunak</strong>&nbsp;adalah salah satu kompetensi keahlian dalam bidang Teknologi Komputer dan Informatika yang secara khusus mempelajari tentang pemrograman komputer. Lulusan RPL dewasa ini sangat dibutuhkan untuk menjawab banyaknya kebutuhan industri bagi ketersediaan tenaga Teknisi dalam bidang Rekayasa Perangkat Lunak.</span></span></p>\r\n\r\n<p><span style=\"font-size:11.0pt\">Secara Khusus tujuan Program Keahlian Rekayasa Perangkat Lunak adalah membekali peserta didik dengan keterampilan, pengetahuan dan sikap agar kompeten untuk:</span></p>\r\n\r\n<ul>\r\n	<li>Menginstalasi Perangkat Komputer Personal dan Menginstall Sistem Operasi dan Aplikasi</li>\r\n	<li>Mengerti tentang Konsep Algoritma Pemrograman dan Konsep Perangkat Lunak</li>\r\n	<li>Merancang Sistem Informasi / Business Process untuk membangun suatu Software / Aplikasi</li>\r\n	<li>Membangun Software Aplikasi Database Berbasis Desktop, Web dan Mobile</li>\r\n</ul>\r\n', '<ol>\r\n	<li><strong>PENGERTIAN RPL</strong><br />\r\n	&nbsp; Secara umum disepakati dari terjemahan Software Engineering yang mulai populer tahun 1968 pada Software Engineering Conference oleh NATO. pengertian RPL sendiri yaitu disiplin ilmu yang membahas seluruh aspek produksi perangkat lunak dari tahap analisa kebutuhan user, menentukan spesifikasi kebutuhan user, disain pengkodean, pengujian, hingga kepemeliharaan sistem setelah dipakai. jadi jelas RPL bukan hanya pembuatan tapi juga semua aspek dalam pembuatan suatu software.</li>\r\n	<li><strong>TUJUAN REKAYASA PERANGKAT LUNAK</strong><br />\r\n	&nbsp; Memperoleh biaya produksi software yang rendah &ndash; menghasilkan software berkinerja tinggi, handal dan tepat waktu &ndash; menghasilkan software yang dapat bekerja pada berbagai platform &ndash; menghasilkan software dengan biaya perawatan rendah.</li>\r\n	<li><strong>RUANG LINGKUP REKAYASA PERANGKAT LUNAK</strong><br />\r\n	&nbsp; Software requirements berhubungan dengan spesifikasi kebutuhan dan persyaratan perangkat lunak. &ndash; Software design mencakup proses penentuan arsitektur, komponen, antarmuka, dan karakteristik lain dari perangkat lunak. &ndash; Software construction berhubungan dengan detil pengembangan perangkat lunak, termasuk algoritma, pengkodean, pengujian, dan pencarian kesalahan. &ndash; Software testing meliputi pengujian pada keseluruhan perilaku perangkat lunak. &ndash; Software maintenance mencakup upaya-upaya perawatan ketika perangkat lunak telah dioperasikan. &ndash; Software configuration management berhubungan dengan usaha perubahan konfigurasi perangkat lunak untuk memenuhi kebutuhan tertentu. &ndash; Software engineering management berkaitan dengan pengelolaan dan pengukuran RPL, termasuk perencanaan proyek perangkat lunak. &ndash; Software engineering tools and methods mencakup kajian teoritis tentang alat bantu dan metode RPL. &ndash; Software engineering process berhubungan dengan definisi, implementasi, pengukuran, pengelolaan, perubahan dan perbaikan proses RPL. &ndash; Software quality menitikberatkan pada kualitas dan daur hidup perangkat lunak.</li>\r\n	<li><strong>RPL dan DISIPLIN ILMU KOMPUTER</strong><br />\r\n	&nbsp; Disiplin ilmu komputer lahir awal tahun 1940 yang merupakan integrasi teori algoritma, logika matematika, dan ditemukannya penyimpanan program secara elektronik pada komputer.</li>\r\n	<li><strong>RPL DISIPLIN ILMU LAIN</strong><br />\r\n	&nbsp; Bidang ilmu manajemen meliputi akutansi, finansial, pemasaran, manajemen operasi, ekonomi, analisis kuantitatif, manajemen sumber daya manusia, kebijakan dan strategi bisnis. &ndash; Bidang ilmu matematika meliputi aljabar linier, kalkulus, peluang, statistik, analisis numerik dan matematika diskrit. &ndash; Bidang ilmu manajemen proyek meliputi semua hal yang berkaitan dengan proyek, seperti ruang lingkup proyek, anggaran, tenaga kerja, kualitas, manajemen resiko, dan penjadwalan proyek. &ndash; Bidang ilmu manajemen kualitas meliputi pengembangan sistem kualitas, manajemen resiko dan keandalan, perbaikan kualitas, dan metode-metode kuantitatif. &ndash; Bidang ilmu ergonomika menyangkut hubungan (interaksi) antara manusia dengan komponen-komponen lain dalam sistem komputer. &ndash; Bidang ilmu rekayasa sistem meliputi teori sistem, analisis biaya-keuntungan, pemodelan, simulasi, proses dan operasi bisnis.</li>\r\n	<li><strong>PERKEMBANGAN REKAYASA PERANGKAT LUNAK (RPL)</strong><br />\r\n	&nbsp; 1940an Komputer pertama yang membolehkan pengguna menulis kode program langsung &ndash; 1950an Generasi awal interpreter dan bahasa macro Generasi pertama compiler Generasi kedua compiler &ndash; 1960an Komputer mainframe mulai dikomersialkan Pengembangan perangkat lunak pesanan Konsep Software Engineering mulai digunakan &ndash; 1970an Perangkat pengembang perangkat lunak Perangkat minicomputer komersial &ndash; 1980an Perangkat Komputer Personal (PC) komersial Peningkatan permintaan perangkat lunak &ndash; 1990an Pemrograman berorientasi obyek (OOP) Agile Process dan Extreme Programming Peningkatan drastis kapasitas memori Peningkatan penggunaan internet &ndash; 2000an Platform interpreter modern (Java, .Net, PHP, dll) Outsourcing</li>\r\n	<li><strong>PROFESI DAN SERTIFIKASI</strong><br />\r\n	&nbsp; Profesi sebagai software engineer mungkin asing ditelinga anda termasuk anda karena kerancuan istilah RPL tadi. sertifikasi kompetensi RPL sampai sekarang masih menjadi perdebatan dalam industri software karena menuntut hal yang spesifik untuk software tertentu. ACM (association for computing machinery) pernah membuat sertifikasi untuk program software engineer tahun 1980an tapi dihentikan karena kurang peminat. IEEE sudah mengeluarkan lebih dari 500 sertifikat profesi RPL. di Canada telah keluar sertifikat legal untuk RPL yang disebut ISP (Information System Professional) Saat ini, sertifikasi untuk RPL di Indonesia juga belum tersedia, namun telah disusun Standar Kompetensi Kerja Nasional Indonesia untuk Bidang Programmer Komputer. Meskipun belum memenuhi cakupan bidang RPL secara keseluruhan, namun paling tidak dapat digunakan sebagai pendekatan sertifikasi bidang RPL.</li>\r\n</ol>\r\n', 'https://drive.google.com/file/d/0BxuiQ-cxi2TYY2FYNjl0TE44dmM/preview', '<p>Dengan memanfaatkan kemampuan, kompetensi, pengalaman dan berbagai peluang yang ada, lulusan Program Keahlian Rekayasa Perangkat Lunak diharapkan akan bisa menjadi :</p>\r\n\r\n<ul>\r\n	<li>Web Application Programmer</li>\r\n	<li>Database Programmer</li>\r\n	<li>Interfacing Programmer</li>\r\n	<li>Mobile Application Programmer (Java dan Android)</li>\r\n	<li>Desktop Application Programmer</li>\r\n	<li>C and C++ Programmer</li>\r\n	<li>Game Programmer</li>\r\n	<li>Hardware and Software Technicians</li>\r\n	<li>IT Support and IT Staff</li>\r\n	<li>Pekerjaan-pekerjaan lainnya yang berbasis komputer.</li>\r\n</ul>\r\n');

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
  ADD PRIMARY KEY (`id_guru`);

--
-- Indexes for table `kolom_guru`
--
ALTER TABLE `kolom_guru`
  ADD PRIMARY KEY (`id_kolom`),
  ADD KEY `id_guru` (`karya`);

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
  MODIFY `id_guru` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `kolom_guru`
--
ALTER TABLE `kolom_guru`
  MODIFY `id_kolom` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kolom_guru`
--
ALTER TABLE `kolom_guru`
  ADD CONSTRAINT `kolom_guru_ibfk_1` FOREIGN KEY (`karya`) REFERENCES `guru` (`id_guru`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
