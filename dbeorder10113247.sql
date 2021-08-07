/*
SQLyog Ultimate - MySQL GUI v8.2 
MySQL - 5.5.5-10.4.19-MariaDB : Database - dbeorder10113247
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*Table structure for table `admin` */

DROP TABLE IF EXISTS `admin`;

CREATE TABLE `admin` (
  `username` varchar(8) NOT NULL,
  `userpass` varchar(41) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `level` enum('ADMIN','SUPERADMIN') NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `admin` */

/*Table structure for table `kategori` */

DROP TABLE IF EXISTS `kategori`;

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(30) NOT NULL,
  `dihapus` char(1) NOT NULL DEFAULT 'T',
  PRIMARY KEY (`id_kategori`),
  UNIQUE KEY `nama` (`nama`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

/*Data for the table `kategori` */

/*Table structure for table `member` */

DROP TABLE IF EXISTS `member`;

CREATE TABLE `member` (
  `id_member` varchar(50) NOT NULL COMMENT 'Untuk id_member akan menggunakan email',
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(250) NOT NULL,
  `katasandi` varchar(50) NOT NULL,
  `loginterakhir` datetime NOT NULL,
  PRIMARY KEY (`id_member`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `member` */

/*Table structure for table `merk` */

DROP TABLE IF EXISTS `merk`;

CREATE TABLE `merk` (
  `id_merk` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `dihapus` char(1) NOT NULL DEFAULT 'T',
  PRIMARY KEY (`id_merk`),
  UNIQUE KEY `nama` (`nama`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `merk` */

/*Table structure for table `pesanan` */

DROP TABLE IF EXISTS `pesanan`;

CREATE TABLE `pesanan` (
  `id_pesanan` int(11) NOT NULL AUTO_INCREMENT,
  `id_member` varchar(50) NOT NULL,
  `waktu` datetime NOT NULL,
  `dicheckout` char(1) NOT NULL DEFAULT 'T',
  `diarsipkan` char(1) NOT NULL DEFAULT 'T',
  PRIMARY KEY (`id_pesanan`),
  KEY `id_member` (`id_member`),
  CONSTRAINT `pesanan_ibfk_1` FOREIGN KEY (`id_member`) REFERENCES `member` (`id_member`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `pesanan` */

/*Table structure for table `pesanan_items` */

DROP TABLE IF EXISTS `pesanan_items`;

CREATE TABLE `pesanan_items` (
  `id_pesanan` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `qty` int(11) NOT NULL DEFAULT 1,
  `harga` decimal(10,0) NOT NULL DEFAULT 0,
  `diskon` float NOT NULL DEFAULT 0,
  PRIMARY KEY (`id_pesanan`,`id_produk`),
  KEY `id_produk` (`id_produk`),
  CONSTRAINT `pesanan_items_ibfk_1` FOREIGN KEY (`id_pesanan`) REFERENCES `pesanan` (`id_pesanan`),
  CONSTRAINT `pesanan_items_ibfk_2` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id_produk`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `pesanan_items` */

/*Table structure for table `produk` */

DROP TABLE IF EXISTS `produk`;

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL AUTO_INCREMENT,
  `id_kategori` int(11) NOT NULL,
  `id_merk` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `harga` decimal(10,0) NOT NULL,
  `berat` int(11) NOT NULL DEFAULT 0 COMMENT 'Dalam KG',
  `diskon` float NOT NULL,
  `stok` int(11) NOT NULL DEFAULT 0,
  `dijual` char(1) NOT NULL DEFAULT 'Y',
  `deskripsi` text NOT NULL,
  `filegambar` varchar(100) DEFAULT NULL,
  `dihapus` char(1) NOT NULL DEFAULT 'T',
  PRIMARY KEY (`id_produk`),
  KEY `id_kategori` (`id_kategori`),
  KEY `id_merk` (`id_merk`),
  CONSTRAINT `produk_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`),
  CONSTRAINT `produk_ibfk_2` FOREIGN KEY (`id_merk`) REFERENCES `merk` (`id_merk`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `produk` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
