/*
SQLyog Enterprise v10.42 
MySQL - 5.5.5-10.1.13-MariaDB : Database - web-sekolah
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`web-sekolah` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `web-sekolah`;

/*Table structure for table `agenda` */

DROP TABLE IF EXISTS `agenda`;

CREATE TABLE `agenda` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul_agenda` varchar(100) NOT NULL,
  `tanggal_agenda` date NOT NULL,
  `isi_agenda` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `agenda` */

insert  into `agenda`(`id`,`judul_agenda`,`tanggal_agenda`,`isi_agenda`) values (1,'Pemantapan Reguler','2018-01-01','Pemantapan Reguler akan diadakan sesuai jam mata pelajaran tersebut\r\nJadwal Reguler tidak dipungut biaya'),(2,'Ujian Sertifikasi Keahlian','2018-04-12','Ujian Sertifikasi Keahlian akan diadakan di kelas Bengkel TI pada tanggal 12-13 April 2018\r\n\r\nKet : Pengawasan dan Pengujian Eksternal\r\n'),(3,'UNBK','2018-04-02','Ujian Nasional Berbasis Komputer akan diadakan pada tanggal 2-5 April 2018 di kelas yang sudah ditentukan\r\n'),(4,'Pengumuman Kelulusan','2018-05-02','Hasil kelulusan akan dikirim Via POS'),(5,'Perpisahan','2018-05-03','Silahkan ditentukan sendiri gimana perpisahannya :v'),(6,'Wendy','2018-02-08','Naks Jajang');

/*Table structure for table `berita` */

DROP TABLE IF EXISTS `berita`;

CREATE TABLE `berita` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul_berita` varchar(100) NOT NULL,
  `tanggal_berita` date NOT NULL,
  `isi_berita` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `berita` */

insert  into `berita`(`id`,`judul_berita`,`tanggal_berita`,`isi_berita`) values (1,'Penyampaian Materi PIK dan Kesehatan Reproduksi dari Dinas Pengendalian Produk dan Keluarga','2017-11-07','Kesehatan reproduksi menurut hasil ICPD 1994 di Kairo adalah keadaan sempurna fisik, mental dan kesejahteraan sosial dan tidak semata-mata ketiadaan penyakit atau kelemahan, dalam segala hal yang berkaitan dengan sistem reproduksi dan fungsi dan proses. \r\nBerdasarkan studi di 3 kota Jawa Barat (2009), perempuan remaja lebih takut pada resiko sosial (antara lain: takut kehilangan keperawanan/ virginitas, takut hamil di luar nikah karena jadi bahan gunjingan masyarakat) dibanding resiko seksual, khususnya menyangkut kesehatan reproduksi dan kesehatan seksualnya.\r\nPadahal kelompok usia remaja merupakan usia yang paling rentan terinfeksi HIV/AIDs dan Penyakit Menular Seksual (PMS) lainnya. Bahkan, dalam jangka waktu tertentu, ketika perempuan remaja menjadi ibu hamil, maka kehamilannya dapat mengancam kelangsungan hidup janin/bayinya. \r\nPada hari rabu tanggal 3 November 2017, Dinas Pengendalian Produk dan Keluarga mengunjungi SMKN 11 Bandung untuk penyampaian materi tentang PIK dan Kesehatan Reproduksi. Penyampaian materi ini juga membahas tentang bagaimana agar menjaga kesehatan reproduksi yang di mulai dari remaja agar tercegah dari penyakit reproduksi di kemudian hari.'),(2,'Kegiatan penjaringan kesehatan siswa kelas x pemeriksaan kadar hemoglobin','2017-01-01','Hemoglobin adalah metaloprotein (protein yang mengandung zat besi) di dalam sel darah merah yang berfungsi sebagai pengangkut oksigen dari paru-paru ke seluruh tubuh, pada mamalia dan hewan lainnya. Hemoglobin juga pengusung karbon dioksida kembali menuju paru-paru untuk dihembuskan keluar tubuh. Molekul hemoglobin terdiri dari globin, apoprotein, dan empat gugus heme, suatu molekul organik dengan satu atom besi.\r\nKegiatan ini bertujuan untuk mengukur bagaimana daya tahan tubuh siswa yang juga termasuk dalam program Sekolah Sehat SMKN 11 Bandung.');

/*Table structure for table `buku_tamu` */

DROP TABLE IF EXISTS `buku_tamu`;

CREATE TABLE `buku_tamu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_tamu` varchar(100) NOT NULL,
  `asal_sekolah` varchar(100) DEFAULT NULL,
  `asal_kelas` varchar(100) DEFAULT NULL,
  `tanggal_masuk` date DEFAULT NULL,
  `tanggal_keluar` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `buku_tamu` */

insert  into `buku_tamu`(`id`,`nama_tamu`,`asal_sekolah`,`asal_kelas`,`tanggal_masuk`,`tanggal_keluar`) values (1,'James','New York University','Middleclass','2018-02-06','2018-02-08'),(2,'Johnson','DC University','Highclass','2018-02-07','2018-02-08');

/*Table structure for table `file_download` */

DROP TABLE IF EXISTS `file_download`;

CREATE TABLE `file_download` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_file` varchar(100) NOT NULL,
  `deskripsi_file` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `file_download` */

insert  into `file_download`(`id`,`nama_file`,`deskripsi_file`) values (1,'Soal UKK 2017','Soal-Soal\r\n'),(2,'Soal UAS 2018','Soal');

/*Table structure for table `guru` */

DROP TABLE IF EXISTS `guru`;

CREATE TABLE `guru` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nip` varchar(25) DEFAULT NULL,
  `nama_guru` varchar(100) NOT NULL,
  `deskripsi_guru` text,
  `jabatan_guru` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `guru` */

insert  into `guru`(`id`,`nip`,`nama_guru`,`deskripsi_guru`,`jabatan_guru`) values (1,'198012272014102002','Ani Nuraeni,S.Kom','Guru Mata Pelajaran Prod. Rekayasa Perangkat Lunak','Ketua Kompetensi Keahlian TIK'),(2,NULL,'Himatul Munawaroh,ST','Guru Mata Pelajaran Prod. Rekayasa Perangkat Lunak','Guru Tetap'),(3,NULL,'Rini Melati, S.Kom','Guru Mata Pelajaran Prod. Rekayasa Perangkat Lunak','Guru Tetap'),(4,NULL,'Abdullah Afif Anwari,S.Kom','Guru Mata Pelajaran Prod. Rekayasa Perangkat Lunak','Guru Tetap'),(5,'196202201989031007','Drs.Asep Eka Setia Priatna,M.Si','Guru Mata Pelajaran Prod. Rekayasa Perangkat Lunak','UPT ICT');

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1);

/*Table structure for table `password_resets` */

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `password_resets` */

/*Table structure for table `pengumuman` */

DROP TABLE IF EXISTS `pengumuman`;

CREATE TABLE `pengumuman` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul_pengumuman` varchar(100) NOT NULL,
  `tanggal_pengumuman` date NOT NULL,
  `jam_pengumuman` time DEFAULT NULL,
  `isi_pengumuman` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `pengumuman` */

insert  into `pengumuman`(`id`,`judul_pengumuman`,`tanggal_pengumuman`,`jam_pengumuman`,`isi_pengumuman`) values (1,'Info Kelulusan Tahun Ajaran 2017/2018','2018-02-06','19:00:00','Hasil kelulusan akan dibagikan ke tempat tinggal masing-masing melalui POS pada tanggal 2 Mei 2018\r\nTerima Kasih'),(2,'Pendaftaran Wifi/Mac Address Siswa','2017-08-02','08:00:00','Silahkan klik link dibawah ini untuk mengisi mac address laptop:\r\n\r\n<a href=\"https://tinyurl.com/daftar-wifisiswa\">Link Daftar Wifi Siswa</a>'),(3,'Info PPDB 2016 SMKN 11 Bandung','2016-05-10','08:00:00','Penerimaan Peserta Didik Baru 2016 SMKN 11 Akan dilaksanakan:\r\n\r\na)     Jalur Non Akademik (Prestasi dan Affirmasi)\r\n\r\nPendaftaran dilakukan secara kolektif oleh sekolah asal\r\n\r\nTanggal   : 15 s.d. 18 Juni 2016\r\n\r\nPukul       : 08.00 – 14.00 WIB\r\n\r\nTempat    : Ruang RAP Bawah\r\n\r\n                SMK Negeri 11 Bandung\r\n\r\n \r\n\r\nb)    Jalur Akademik\r\n\r\nPendaftaran dilakukan oleh peserta didik didampingi orang tua yang bersangkutan.\r\n\r\nTanggal   : 27 Juni s.d. 30 Juni 2016\r\n\r\nPukul       : 08.00 – 14.00 WIB\r\n\r\nTempat    : Ruang RAP Bawah\r\n\r\n                SMK Negeri 11 Bandung'),(4,'Format EVADIR Untuk Guru','2016-09-05','08:00:00','Berikut Link untuk format EVADIR:\r\n\r\nFormat Evadir'),(5,'Kejuaraan Lomba Catur','2018-02-15','09:00:00','Harap Disimak\r\n');

/*Table structure for table `tentang_rpl` */

DROP TABLE IF EXISTS `tentang_rpl`;

CREATE TABLE `tentang_rpl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `visi` text NOT NULL,
  `misi` text NOT NULL,
  `deskripsi` text NOT NULL,
  `sejarah` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `tentang_rpl` */

insert  into `tentang_rpl`(`id`,`visi`,`misi`,`deskripsi`,`sejarah`) values (1,'Visi SMKN Negeri 11 Bandung yaitu \r\n\"Menjadi SMK mandiri yang berbudaya lingkungan dengan berbasis ICT\"','Misi SMK Negeri 11 Bandung disingkat SMK:\r\n1. Siap memberikan layanan pendidikan yang berkualitas tinggi dan menciptakan lingkungan yang sehat dan baik.\r\n2. Mewujudkan proses pembelajaran bagi peserta didik dengaqn memberi keteladanan, memotivasi, mengilhami, memberdayakan, dan membudayakan.\r\n3. Komitmen tinggi dan kreatif untuk menghasilkan tamatan yang cerdas, mandiri dan kompetitif dengan kebutuhan masyarakat global.\r\n','Apa itu Rekayasa Perangkat Lunak?\r\nSelama 50 tahun terakhir telah terjadi kemajuan revolusioner di bidang teknologi, yang mengarah pada perbaikan kinerja perangkat keras dan perubahan besar dalam arsitektur komputasi. Kemajuan ini telah menyebabkan produksi sistem berbasis komputer yang kompleks yang mampu memberikan informasi dalam berbagai format. Meningkatnya daya komputer telah membuat aplikasi komputer yang tidak realistis menjadi proposisi yang layak, menandai asal mula era di mana produk perangkat lunak jauh lebih kompleks dibandingkan sebelumnya. Dengan mempelajari dan mempraktikan ilmu rekayasa perangkat lunak (software engineering), sistem kompleks ini dapat dikembangkan secara sistematis dan efisien.\r\n\r\n\r\nMenurut IEEE, rekayasa perangkat lunak didefinisikan sebagai penerapan pendekatan sistematis, disiplin, dapat diukur terhadap pengembangan, operasi, dan pemeliharaan perangkat lunak; Artinya, penerapan teknik yang dilakukan untuk perangkat lunak. Rekayasa perangkat lunak dapat didefinisikan sebagai pendekatan sistematis untuk mengembangkan perangkat lunak dalam waktu dan anggaran yang ditentukan.\r\n \r\nRekayasa perangkat lunak adalah disiplin teknologi yang menggabungkan konsep ilmu komputer, ekonomi, kemampuan komunikasi, dan ilmu manajemen dengan pendekatan pemecahan masalah dari teknik. Ini juga melibatkan pendekatan terstandar untuk pengembangan program, baik dalam aspek manajerial maupun teknisnya.\r\n \r\nPengetahuan mendalam tentang ilmu komputer baik teoritis maupun praktis merupakan dasar rekayasa perangkat lunak. Pengetahuan teoritis memberikan pemahaman tentang masalah mana yang dapat diatasi, struktur data dan algoritma apa yang sesuai, kapan dan bagaimana penggunaannya, dan lain sebagainya. Di sisi lain, pengetahuan praktis memberikan pemahaman tentang bagaimana fungsi perangkat keras, bagaimana memanfaatkan kekuatan bahasa pemrogramanan dan tools terkait saat mengembangkan perangkat lunak, dan lain-lain.\r\n \r\nSalah satu tujuan utama rekayasa perangkat lunak adalah membantu pengembang mendapatkan perangkat lunak berkualitas tinggi. Kualitas ini dicapai melalui penggunaan Total Quality Management (TQM), yang memungkinkan proses perbaikan secara terus-menerus yang mengarah pada pendekatan pengembangan yang lebih mapan terhadap rekayasa perangkat lunak.\r\n \r\nRekayasa perangkat lunak adalah pendekatan yang sistematis terhadap pengembangan, pengoperasian, pemeliharaan dan pengakhiran (retirement) perangkat lunak. Rekayasa Perangkat Lunak merupakan penerapan sains dan matematika dimana kemampuan peralatan komputer berguna bagi manusia melalui program komputer, prosedur, dan dokumentasi terkait.\r\n \r\nTujuan dasar rekayasa perangkat lunak adalah untuk mengembangkan metode dan prosedur pengembangan perangkat lunak yang dapat meningkatkan sistem yang besar dan dapat digunakan secara konsisten untuk menghasilkan perangkat lunak berkualitas tinggi dengan biaya rendah dan dengan siklus waktu yang kecil.','Sejarah Perkembangan Rekayasa Perangkat Lunak\r\n                                                   \r\n\r\n                                                 SEJARAH PERKEMBANGAN PERANGKAT LUNAK\r\n\r\n1. PENGERTIAN\r\n\r\nRPL secara umum disepakati dari terjemahan Software Engineering yang mulai populer tahun 1968 pada Software Engineering Conference oleh NATO. pengertian RPL sendiri yaitu disiplin ilmu yang membahas seluruh aspek produksi perangkat lunak dari tahap analisa kebutuhan user, menentukan spesifikasi kebutuhan user, disain pengkodean, pengujian, hingga kepemeliharaan sistem setelah dipakai. jadi jelas RPL bukan hanya pembuatan tapi juga semua aspek dalam pembuatan suatu software.\r\n\r\n2. TUJUAN REKAYASA PERANGKAT LUNAK\r\n\r\n– Memperoleh biaya produksi software yang rendah\r\n– menghasilkan software berkinerja tinggi, handal dan tepat waktu\r\n– menghasilkan software yang dapat bekerja pada berbagai platform\r\n– menghasilkan software dengan biaya perawatan rendah\r\n\r\n3. RUANG LINGKUP REKAYASA PERANGKAT LUNAK\r\n\r\n– Software requirements berhubungan dengan spesifikasi kebutuhan dan persyaratan perangkat lunak.\r\n– Software design mencakup proses penentuan arsitektur, komponen, antarmuka, dan karakteristik lain dari perangkat lunak.\r\n– Software construction berhubungan dengan detil pengembangan perangkat lunak, termasuk algoritma, pengkodean, pengujian, dan pencarian kesalahan.\r\n– Software testing meliputi pengujian pada keseluruhan perilaku perangkat lunak.\r\n– Software maintenance mencakup upaya-upaya perawatan ketika perangkat lunak telah dioperasikan.\r\n– Software configuration management berhubungan dengan usaha perubahan konfigurasi perangkat lunak untuk memenuhi kebutuhan tertentu.\r\n– Software engineering management berkaitan dengan pengelolaan dan pengukuran RPL, termasuk perencanaan proyek perangkat lunak.\r\n– Software engineering tools and methods mencakup kajian teoritis tentang alat bantu dan metode RPL.\r\n– Software engineering process berhubungan dengan definisi, implementasi, pengukuran, pengelolaan, perubahan dan perbaikan proses RPL.\r\n– Software quality menitikberatkan pada kualitas dan daur hidup perangkat lunak.\r\n\r\n4. RPL dan DISIPLIN ILMU KOMPUTER\r\n\r\nDisiplin ilmu komputer lahir awal tahun 1940 yang merupakan integrasi teori algoritma, logika matematika, dan ditemukannya penyimpanan program secara elektronik pada komputer.\r\n\r\n5. RPL DISIPLIN ILMU LAIN\r\n\r\n– Bidang ilmu manajemen meliputi akutansi, finansial, pemasaran, manajemen operasi, ekonomi, analisis kuantitatif, manajemen sumber daya manusia, kebijakan dan strategi bisnis.\r\n– Bidang ilmu matematika meliputi aljabar linier, kalkulus, peluang, statistik, analisis numerik dan matematika diskrit.\r\n– Bidang ilmu manajemen proyek meliputi semua hal yang berkaitan dengan proyek, seperti ruang lingkup proyek, anggaran, tenaga kerja, kualitas, manajemen resiko, dan penjadwalan proyek.\r\n– Bidang ilmu manajemen kualitas meliputi pengembangan sistem kualitas, manajemen resiko dan keandalan, perbaikan kualitas, dan metode-metode kuantitatif.\r\n– Bidang ilmu ergonomika menyangkut hubungan (interaksi) antara manusia dengan komponen-komponen lain dalam sistem komputer.\r\n– Bidang ilmu rekayasa sistem meliputi teori sistem, analisis biaya-keuntungan, pemodelan, simulasi, proses dan operasi bisnis.\r\n\r\n6. PERKEMBANGAN REKAYASA PERANGKAT LUNAK (RPL)\r\n\r\n– 1940an\r\nKomputer pertama yang membolehkan pengguna menulis kode program langsung\r\n– 1950an\r\nGenerasi awal interpreter dan bahasa macro\r\nGenerasi pertama compiler\r\nGenerasi kedua compiler\r\n– 1960an\r\nKomputer mainframe mulai dikomersialkan\r\nPengembangan perangkat lunak pesanan\r\nKonsep Software Engineering mulai digunakan\r\n– 1970an\r\nPerangkat pengembang perangkat lunak\r\nPerangkat minicomputer komersial\r\n– 1980an\r\nPerangkat Komputer Personal (PC) komersial\r\nPeningkatan permintaan perangkat lunak\r\n– 1990an\r\nPemrograman berorientasi obyek (OOP)\r\nAgile Process dan Extreme Programming\r\nPeningkatan drastis kapasitas memori\r\nPeningkatan penggunaan internet\r\n– 2000an\r\nPlatform interpreter modern (Java, .Net, PHP, dll)\r\nOutsourcing\r\n\r\n7. PROFESI DAN SERTIFIKASI\r\n\r\nProfesi sebagai software engineer mungkin asing ditelinga anda termasuk anda karena kerancuan istilah RPL tadi. sertifikasi kompetensi RPL sampai sekarang masih menjadi perdebatan dalam industri software karena menuntut hal yang spesifik untuk software tertentu. ACM (association for computing machinery) pernah membuat sertifikasi untuk program software engineer tahun 1980an tapi dihentikan karena kurang peminat. IEEE sudah mengeluarkan lebih dari 500 sertifikat profesi RPL. di Canada telah keluar sertifikat legal untuk RPL yang disebut ISP (Information System Professional)\r\n\r\nSaat ini, sertifikasi untuk RPL di Indonesia juga belum tersedia, namun telah disusun Standar Kompetensi Kerja Nasional Indonesia untuk Bidang Programmer Komputer. Meskipun belum memenuhi cakupan bidang RPL secara keseluruhan, namun paling tidak dapat digunakan sebagai pendekatan sertifikasi bidang RPL.');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`name`,`email`,`password`,`remember_token`,`created_at`,`updated_at`) values (1,'Jangwen','jangwen@gmail.com','$2y$10$VkTxb/FyPkIwG6Wn.myIeenY3QcAGXFA8MEHVPCRyyRIgh0eI5ItW','bl9qtlXe8xcVvpxrTMc3z1dIz1aOfxfA5rZJFqmMmbwnuUcRyGQx4C9tpvxk','2018-02-05 06:09:22','2018-02-05 06:09:22');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
