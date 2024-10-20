-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.8.0.6908
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for prakweb_2024_d_223040106
CREATE DATABASE IF NOT EXISTS `prakweb_2024_d_223040106` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `prakweb_2024_d_223040106`;

-- Dumping structure for table prakweb_2024_d_223040106.data_buku
CREATE TABLE IF NOT EXISTS `data_buku` (
  `id` int NOT NULL AUTO_INCREMENT,
  `judul` varchar(255) NOT NULL,
  `pengarang` varchar(255) NOT NULL,
  `tahun_terbit` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table prakweb_2024_d_223040106.data_buku: ~10 rows (approximately)
INSERT INTO `data_buku` (`id`, `judul`, `pengarang`, `tahun_terbit`) VALUES
	(1, 'Laskar Pelangi', 'Andrea Hirata', 2005),
	(2, 'Harry Potter dan Batu Bertuah', 'J.K. Rowling', 1997),
	(3, 'Pulang', 'Tere Liye', 2016),
	(4, 'The Alchemist', 'Paulo Coelho', 1988),
	(5, 'Bumi', 'Tere Liye', 2015),
	(6, 'Dilan: Dia adalah Dilanku Tahun 1990', 'Pidi Baiq', 2014),
	(7, 'Cinta di Ujung Sinar', 'Rizky J. Soediro', 2021),
	(8, 'Sang Pemimpi', 'Andrea Hirata', 2006),
	(9, 'The Fault in Our Stars', 'John Green', 2012),
	(10, 'Laut Bercerita', 'Leila S. Chudori', 2015),
	(12, 'Indonesia Merdeka', 'Soekarno', 1995);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
