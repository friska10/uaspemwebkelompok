# Host: 127.0.0.1  (Version 5.5.5-10.4.22-MariaDB)
# Date: 2022-08-02 15:42:25
# Generator: MySQL-Front 6.0  (Build 2.20)


#
# Structure for table "acara"
#

DROP TABLE IF EXISTS `acara`;
CREATE TABLE `acara` (
  `acara_id` int(100) NOT NULL AUTO_INCREMENT,
  `nama_acara` varchar(255) NOT NULL,
  `desc_acara` varchar(255) NOT NULL,
  `tgl_mulai` date NOT NULL,
  `tgl_akhir` date NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  PRIMARY KEY (`acara_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

#
# Data for table "acara"
#

INSERT INTO `acara` VALUES (1,'Webinar 1 - Big Data','Webinar dengan pembahasan mengenai perkembangan Big Data','2022-05-12','2022-05-12','0000-00-00','0000-00-00'),(2,'Wbience','Workshop dengan tema Business Intelligence','2022-09-15','2022-09-15','0000-00-00','0000-00-00'),(3,'Webinar 2 - ERP','Implementasi ERP Untuk Pelaku UMKM','2022-07-13','2022-07-13','0000-00-00','0000-00-00'),(4,'Pengabdian Masyarakat ','','2022-08-15','2022-08-15','0000-00-00','0000-00-00'),(5,'Studi Banding','akan dilakukan di UBL','2022-08-10','2022-08-10','0000-00-00','0000-00-00'),(6,'Company Visit','akan dilakukan di PT Solusi Dua Empat ','2022-09-07','2022-09-07','0000-00-00','0000-00-00');

#
# Structure for table "jabatan"
#

DROP TABLE IF EXISTS `jabatan`;
CREATE TABLE `jabatan` (
  `jabatan_id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_jabatan` varchar(255) NOT NULL,
  PRIMARY KEY (`jabatan_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;

#
# Data for table "jabatan"
#

INSERT INTO `jabatan` VALUES (1,'Ketua'),(2,'Wakil Ketua'),(3,'Sekretaris 1'),(4,'Sekretaris 2'),(5,'Bendahara 1'),(6,'Bendahara 2'),(7,'Koordinator'),(8,'Staff');

#
# Structure for table "kas_masuk"
#

DROP TABLE IF EXISTS `kas_masuk`;
CREATE TABLE `kas_masuk` (
  `kas_id` int(11) NOT NULL AUTO_INCREMENT,
  `mhs_id` int(11) NOT NULL,
  `bulan_ke` varchar(16) NOT NULL,
  `jumlah_bayar` int(11) NOT NULL,
  `tanggal_pembayaran` date NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`kas_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;

#
# Data for table "kas_masuk"
#

INSERT INTO `kas_masuk` VALUES (1,1,'6',5000,'2022-07-04','2022-07-04 12:17:39','2022-07-04 12:17:39'),(2,18,'1',5000,'2022-07-04','2022-07-04 12:35:42','2022-07-04 12:35:42'),(3,18,'2',5000,'2022-07-04','2022-07-04 12:35:42','2022-07-04 12:35:42'),(4,2,'1',5000,'2022-07-04','2022-07-04 12:35:42','2022-07-04 12:35:42'),(5,2,'2',5000,'2022-07-04','2022-07-04 12:35:42','2022-07-04 12:35:42'),(6,5,'1',5000,'2022-07-04','2022-07-04 12:35:42','2022-07-04 12:35:42'),(7,5,'2',5000,'2022-07-04','2022-07-04 12:35:42','2022-07-04 12:35:42'),(8,7,'4',50000,'2022-07-06','2022-07-04 21:37:15','2022-07-04 21:37:15'),(9,5,'4',50000,'2022-07-06','2022-07-04 21:37:15','2022-07-04 21:37:15'),(10,5,'5',50000,'2022-05-05','2022-07-07 22:25:37','2022-07-07 22:25:37');

#
# Structure for table "presensi_mhs"
#

DROP TABLE IF EXISTS `presensi_mhs`;
CREATE TABLE `presensi_mhs` (
  `presensi_id` int(100) NOT NULL AUTO_INCREMENT,
  `rapat_id` int(11) DEFAULT NULL,
  `mhs_id` int(100) DEFAULT NULL,
  `status` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`presensi_id`)
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=utf8mb4;

#
# Data for table "presensi_mhs"
#

INSERT INTO `presensi_mhs` VALUES (40,1,5,'Hadir','2022-07-03 15:38:10','2022-07-03 15:38:10'),(41,1,1,'Hadir','2022-07-03 15:38:10','2022-07-03 15:38:10'),(42,1,6,'Izin','2022-07-03 15:38:37','2022-07-03 15:38:37'),(43,1,16,'Tidak Hadir','2022-07-03 15:38:37','2022-07-03 15:38:37'),(44,1,20,'Tidak Hadir','2022-07-03 15:38:37','2022-07-03 15:38:37'),(45,1,2,'Tidak Hadir','2022-07-03 15:38:37','2022-07-03 15:38:37'),(47,1,10,'Hadir','2022-07-04 20:52:43','2022-07-04 20:52:43'),(49,2,18,'Hadir','2022-07-04 21:43:38','2022-07-04 21:43:38'),(50,2,6,'Hadir','2022-07-12 09:43:20','2022-07-12 09:43:20');

#
# Structure for table "rapat"
#

DROP TABLE IF EXISTS `rapat`;
CREATE TABLE `rapat` (
  `rapat_id` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(255) NOT NULL,
  `keterangan` text DEFAULT NULL,
  `rapat_ke` varchar(12) NOT NULL,
  `tanggal` date NOT NULL,
  `kesimpulan` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`rapat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

#
# Data for table "rapat"
#

INSERT INTO `rapat` VALUES (1,'Rapat Perencanaan Proker',NULL,'1','2022-07-02',NULL,'2022-07-02 12:25:53','2022-07-02 12:25:53'),(2,'Rapat Bulanan',NULL,'2','2022-07-20',NULL,'2022-07-02 13:22:49','2022-07-02 13:22:49');

#
# Structure for table "tbl_mhs"
#

DROP TABLE IF EXISTS `tbl_mhs`;
CREATE TABLE `tbl_mhs` (
  `mhs_id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_mhs` varchar(100) NOT NULL,
  `nim_mhs` varchar(100) NOT NULL,
  `jabatan_id` int(11) NOT NULL,
  `ttl_mhs` varchar(100) NOT NULL,
  `divisi` varchar(100) NOT NULL,
  `pw_mhs` varchar(100) NOT NULL,
  PRIMARY KEY (`mhs_id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4;

#
# Data for table "tbl_mhs"
#

INSERT INTO `tbl_mhs` VALUES (1,'Jerison','20200803058',1,'Medan, 27 Juni 2001','BPH','jerisonhumanis'),(2,'Fisabilia Adipati Ruslan','20200803062',2,'Manado, 29 Agustus 2002','BPH','fisahumanis'),(3,'Khalid Fadlilah','20200803037',3,'Samarinda, 14 Febuari 2002','BPH','khalidhumanis'),(4,'Dinda Oktaviani Waruwu','20200803085',4,'Gunung Sitoli, 20 Oktober 2002','BPH','dindahumanis'),(5,'Friska Imania','20200803094',5,'Bekasi, 10 Oktober 2001','BPH','friskahumanis'),(6,'Arya Bintang Setiawan','20200803041',6,'Jakarta, 30 Juni 2002','BPH','bintanghumanis'),(7,'Derliana','20200803040',8,'Jakarta, 22 Oktober 2001','Hubungan Masyarakat','delahumanis'),(8,'Selvi Jenifer Ezenwune','20200803051',8,'Tegal, 11 Juni 2001','Hubungan Masyarakat','selvihumanis'),(9,'Fyrsty Ashra Nisa','20200803096',7,'Jakarta, 15 April 2002','Hubungan Masyarakat','fyrstyhumanis'),(10,'Agung Dwi Sahputra','202008030125',7,'Jakarta, 19 November 2002','PSDM','agunghumanis'),(11,'Yanuar Anggito Raharjo','20200803037',8,'Jakarta, 17 Januari 2001','PSDM','yanuarhumanis'),(12,'Antonius Arsnovenjo Tibo','20200803086',8,'Maumere, 14 Juni 2000','PSDM','arshumanis'),(13,'Siti Nur Kholifah','20200803047',7,'Jakarta, 10 September 2002','Sarana & Informasi','lilihumanis'),(14,'Wiranata Sutoyo','20200803066',8,'Jakarta, 12 April 2002','Sarana & Informasi','wirahumanis'),(15,'Naditra Santosa','20200803001',7,'Jakarta, 24 Juli 2002','Luar Kampus','nadithumanis'),(16,'Axel Restu Permana','20200803043',8,'Tangerang, 7 Juli 2002','Luar Kampus','axelhumanis'),(17,'Muhammad Dede Soffiyullah','20200803002',8,'','Luar Kampus','jayhumanis'),(18,'Adriel Savero','20200803069',7,'Padang, 4 April 2002','Intelent','adrielhumanis'),(19,'Junico','20200803031',8,'Toboali, 26 Juni 2002','Intelent','junicohumanis'),(20,'Aymaan Abdullah Abdat','20200803044',8,'Jakarta, 4 Maret 2002','Intelent','aymaanhumanis');

#
# Structure for table "user"
#

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(16) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4;

#
# Data for table "user"
#

INSERT INTO `user` VALUES (3,'admin','$2y$10$0sV9LXujhL40iF.vzrCn3u9RkOGb8F00vmSdu/aBiUVwciOlnzkwu'),(4,'chika','$2y$10$2VcXQ9tQfQfOtFolo/YQd.dUVW1q1MAQPKuf1h7POuuY/LKrc1kQa'),(5,'','$2y$10$jsNN4dBuLCTCWH0tpnCPmOJ0zspH95Tat7tzTtgE5Ux2h4FLkLJL6'),(6,'junico','$2y$10$fkJyuKUBlSdjSQm1tJ5C2O66BAvlj5567qHf81mf5hq8Ooyb0c5Ua'),(7,'nico','$2y$10$QWJ49UqeKLE79JP/p2w7C.GKnpxSHDt3Xv9IsSIPgDjnHqLZrtSvW'),(8,'saya','$2y$10$HRw.LPVc1fuAMSIhPKpnTuM7pE4te/lUt/jkjzGsWx7Mc6tBtPp2C'),(9,'sayaa','$2y$10$Lm4ozsIce2w8DxDBgz9Go.ehUD3AHRcbKE0uA0VlBTIZmzGIgcVuW'),(10,'juleha','$2y$10$sPUo3e3UZ/hxGmI.RnwtiuKe.w/mEpbRCtUDJf1UTSTjSVHherZya'),(11,'gaga','$2y$10$RVXhG9kHwZI0RQlisA4C0egbj8jX0/t8ovhEHXU6CDnwW8WNdlqfS');
