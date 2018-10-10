/*
SQLyog Ultimate v12.5.1 (64 bit)
MySQL - 10.1.32-MariaDB : Database - db_kitabantu
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_kitabantu` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `db_kitabantu`;

/*Table structure for table `tb_customer` */

DROP TABLE IF EXISTS `tb_customer`;

CREATE TABLE `tb_customer` (
  `id_customer` int(11) NOT NULL AUTO_INCREMENT,
  `nik` varchar(255) DEFAULT NULL,
  `nama_customer` varchar(255) DEFAULT NULL,
  `tempat_lahir` varchar(255) DEFAULT NULL,
  `tgl_lahir` varchar(255) DEFAULT NULL,
  `jenis_kelamin` varchar(255) DEFAULT NULL,
  `no_hp` varchar(255) DEFAULT NULL,
  `alamat` text,
  `email` varchar(255) DEFAULT NULL,
  `agama` varchar(255) DEFAULT NULL,
  KEY `id_customer` (`id_customer`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `tb_customer` */

insert  into `tb_customer`(`id_customer`,`nik`,`nama_customer`,`tempat_lahir`,`tgl_lahir`,`jenis_kelamin`,`no_hp`,`alamat`,`email`,`agama`) values 
(1,'1871051004980003','Retno Aljum`ah Tarihoran','Bandar Lampung','2018-09-06','laki-laki','085768551713','JL. P. Antasari Sukarame\r\nJL. P. Antasari Sukarame','okta.pilopa@staff.itera.ac.id',NULL);

/*Table structure for table `tb_file` */

DROP TABLE IF EXISTS `tb_file`;

CREATE TABLE `tb_file` (
  `id_file` int(11) NOT NULL AUTO_INCREMENT,
  `nama_file` varchar(255) DEFAULT NULL,
  `type_file` varchar(255) DEFAULT NULL,
  `tgl_upload` varchar(255) DEFAULT NULL,
  `verifikator` varchar(255) DEFAULT NULL,
  `status_verifikasi` varchar(255) DEFAULT NULL,
  `tgl_verifikasi` varchar(255) DEFAULT NULL,
  `catatan_verifikasi` varchar(255) DEFAULT NULL,
  `id_customer` int(11) DEFAULT NULL,
  KEY `id_file` (`id_file`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tb_file` */

/*Table structure for table `tb_pinjaman` */

DROP TABLE IF EXISTS `tb_pinjaman`;

CREATE TABLE `tb_pinjaman` (
  `id_pinjaman` int(11) NOT NULL AUTO_INCREMENT,
  `id_customer` int(11) DEFAULT NULL,
  `jml_pengajuan` varchar(255) DEFAULT NULL,
  `jml_acc` varchar(255) DEFAULT NULL,
  `catatan` varchar(255) DEFAULT NULL,
  `status_pinjaman` varchar(255) DEFAULT NULL,
  `lama_angsuran` varchar(255) DEFAULT NULL,
  KEY `id_pinjaman` (`id_pinjaman`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tb_pinjaman` */

/*Table structure for table `tb_user` */

DROP TABLE IF EXISTS `tb_user`;

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `level` varchar(255) DEFAULT NULL,
  KEY `id_user` (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `tb_user` */

insert  into `tb_user`(`id_user`,`username`,`password`,`level`) values 
(1,'1871051004980003','$2y$10$tTB/wcitNk07LB2Yh5GsKOpdagzRcOvrIZjUU9tWKD7HszDOD3q5K','customer');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
