-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.22-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             11.3.0.6295
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for db_aes
CREATE DATABASE IF NOT EXISTS `db_aes` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `db_aes`;

-- Dumping structure for table db_aes.ref_kategori_dokumen
CREATE TABLE IF NOT EXISTS `ref_kategori_dokumen` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) DEFAULT NULL,
  `kategori` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table db_aes.ref_kategori_dokumen: ~0 rows (approximately)
/*!40000 ALTER TABLE `ref_kategori_dokumen` DISABLE KEYS */;
INSERT INTO `ref_kategori_dokumen` (`id`, `id_user`, `kategori`) VALUES
	(3, 1, 'Ijazah');
/*!40000 ALTER TABLE `ref_kategori_dokumen` ENABLE KEYS */;

-- Dumping structure for table db_aes.tb_dokumen
CREATE TABLE IF NOT EXISTS `tb_dokumen` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) DEFAULT NULL,
  `id_kategori` int(11) DEFAULT NULL,
  `nama_file` varchar(50) DEFAULT NULL,
  `dokumen` text DEFAULT NULL,
  `password` text DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table db_aes.tb_dokumen: ~0 rows (approximately)
/*!40000 ALTER TABLE `tb_dokumen` DISABLE KEYS */;
INSERT INTO `tb_dokumen` (`id`, `id_user`, `id_kategori`, `nama_file`, `dokumen`, `password`) VALUES
	(20, 1, 3, 'Ijazah SD', '39555-modul-3', '21232f297a57a5a7');
/*!40000 ALTER TABLE `tb_dokumen` ENABLE KEYS */;

-- Dumping structure for table db_aes.tb_users
CREATE TABLE IF NOT EXISTS `tb_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_lengkap` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `status` int(11) DEFAULT 0 COMMENT '1 Admin/ 2 COO/ 3 CEO/ 4 surveor',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COMMENT='Tabel untuk users dan hak akses';

-- Dumping data for table db_aes.tb_users: ~2 rows (approximately)
/*!40000 ALTER TABLE `tb_users` DISABLE KEYS */;
INSERT INTO `tb_users` (`id`, `nama_lengkap`, `email`, `username`, `password`, `status`) VALUES
	(1, 'Admin', 'admin@gmail.com', 'admin', '21232f297a57a5a743894a0e4a801fc3', 1),
	(2, 'user', 'sardi@gmail.com', 'user', 'ee11cbb19052e40b07aac0ca060c23ee', 2);
/*!40000 ALTER TABLE `tb_users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
