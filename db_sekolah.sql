-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for sekolah
DROP DATABASE IF EXISTS `sekolah`;
CREATE DATABASE IF NOT EXISTS `sekolah` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `sekolah`;

-- Dumping structure for table sekolah.alamat
DROP TABLE IF EXISTS `alamat`;
CREATE TABLE IF NOT EXISTS `alamat` (
  `id` int NOT NULL AUTO_INCREMENT,
  `alamat` varchar(256) NOT NULL DEFAULT '0',
  `kode_pos` varchar(256) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table sekolah.alamat: ~4 rows (approximately)
DELETE FROM `alamat`;
INSERT INTO `alamat` (`id`, `alamat`, `kode_pos`) VALUES
	(1, 'batang', '51252'),
	(2, 'pekalongan', '51118'),
	(3, 'pemalang', '51223'),
	(4, 'tegal', '51234');

-- Dumping structure for table sekolah.siswa
DROP TABLE IF EXISTS `siswa`;
CREATE TABLE IF NOT EXISTS `siswa` (
  `nis` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) DEFAULT NULL,
  `id_alamat` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `no_telp` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`nis`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table sekolah.siswa: ~1 rows (approximately)
DELETE FROM `siswa`;
INSERT INTO `siswa` (`nis`, `nama`, `id_alamat`, `no_telp`) VALUES
	(1, 'iin', 'mdn', '1234');

-- Dumping structure for table sekolah.user
DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(128) DEFAULT NULL,
  `password` varchar(128) DEFAULT NULL,
  `nama` varchar(128) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table sekolah.user: ~0 rows (approximately)
DELETE FROM `user`;
INSERT INTO `user` (`id`, `username`, `password`, `nama`) VALUES
	(1, '1', '123', 'indri');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
