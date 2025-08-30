/*
SQLyog Ultimate v12.5.1 (64 bit)
MySQL - 10.4.32-MariaDB : Database - web_sekolah
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`web_sekolah` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;

USE `web_sekolah`;

/*Table structure for table `news` */

DROP TABLE IF EXISTS `news`;

CREATE TABLE `news` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `published_at` date DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `news` */

insert  into `news`(`id`,`title`,`content`,`image`,`published_at`,`created_at`,`updated_at`) values 
(1,'Upacara 17 Agustus','Dalam rangka memperingati hari kemerdekaan tanggal 17 Agustus, \r\nSMAN 1 mengadakan kegiatan upacara bendera.\r\n','upacara.jpg','2025-08-29','2025-08-29 20:35:40','2025-08-29 20:35:40'),
(2,'Tim Paskibra SMAN 1 Meraih Prestasi Ditingkat Provinsi','Tim Paskibra SMAN 1 meraih prestasi dalam perlombaan tingkat provinsi yang dilaksanakan\r\npada Sabtu, 5 Juli 2025','dokumentasi.jpg','2025-08-07','2025-08-29 20:49:20','2025-08-29 20:49:20'),
(3,'Pelaksanaa MPLS Tahun Ajaran 2025/2026','SMAN 1 mengadakan MPLS (Masa Pengenalan Lingkungan Sekolah) \r\nbagi siswa baru tahun ajaran 2025/2026','mpls.jpg','2025-07-17','2025-08-29 20:49:37','2025-08-29 20:49:37');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
