/*
SQLyog Ultimate v11.11 (64 bit)
MySQL - 5.5.5-10.1.13-MariaDB : Database - db_profilejurusan
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_profilejurusan` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `db_profilejurusan`;

/*Table structure for table `admin` */

DROP TABLE IF EXISTS `admin`;

CREATE TABLE `admin` (
  `id_admin` int(10) NOT NULL,
  `nama_admin` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `admin` */

/*Table structure for table `agenda` */

DROP TABLE IF EXISTS `agenda`;

CREATE TABLE `agenda` (
  `id_agenda` int(10) NOT NULL,
  `judul_agenda` text NOT NULL,
  `tgl_agenda` date NOT NULL,
  `isi_agenda` text NOT NULL,
  PRIMARY KEY (`id_agenda`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `agenda` */

/*Table structure for table `berita` */

DROP TABLE IF EXISTS `berita`;

CREATE TABLE `berita` (
  `id_berita` int(10) NOT NULL,
  `judul_berita` text NOT NULL,
  `tgl_berita` date NOT NULL,
  `isi_berita` text NOT NULL,
  PRIMARY KEY (`id_berita`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `berita` */

/*Table structure for table `buku_tamu` */

DROP TABLE IF EXISTS `buku_tamu`;

CREATE TABLE `buku_tamu` (
  `id_tamu` int(10) NOT NULL,
  `nama_tamu` varchar(50) NOT NULL,
  `asal_sekolah` varchar(50) NOT NULL,
  `asal_kelas` varchar(50) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `tgl_keluar` date NOT NULL,
  PRIMARY KEY (`id_tamu`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `buku_tamu` */

/*Table structure for table `download_file` */

DROP TABLE IF EXISTS `download_file`;

CREATE TABLE `download_file` (
  `id_file` int(10) NOT NULL,
  `nama_file` varchar(50) NOT NULL,
  `deskripsi_file` text NOT NULL,
  PRIMARY KEY (`id_file`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `download_file` */

/*Table structure for table `guru` */

DROP TABLE IF EXISTS `guru`;

CREATE TABLE `guru` (
  `nip_guru` int(30) NOT NULL,
  `nama_guru` varchar(50) NOT NULL,
  `deskripsi_guru` text NOT NULL,
  `jabatan_guru` varchar(50) NOT NULL,
  PRIMARY KEY (`nip_guru`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `guru` */

/*Table structure for table `pengumuman` */

DROP TABLE IF EXISTS `pengumuman`;

CREATE TABLE `pengumuman` (
  `id_pengumuman` int(10) NOT NULL,
  `judul_pengumuman` text NOT NULL,
  `tgl_pengumuman` date NOT NULL,
  `jam_pengumuman` time NOT NULL,
  `isi_pengumuman` text NOT NULL,
  PRIMARY KEY (`id_pengumuman`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `pengumuman` */

/*Table structure for table `rpl` */

DROP TABLE IF EXISTS `rpl`;

CREATE TABLE `rpl` (
  `id` int(10) NOT NULL,
  `visi` text NOT NULL,
  `misi` text NOT NULL,
  `tentangrpl` text NOT NULL,
  `sejarah` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `rpl` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
