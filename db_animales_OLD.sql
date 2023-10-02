-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.31 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.3.0.6589
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for animales
DROP DATABASE IF EXISTS `animales`;
CREATE DATABASE IF NOT EXISTS `animales` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `animales`;

-- Dumping structure for table animales.animales
DROP TABLE IF EXISTS `animales`;
CREATE TABLE IF NOT EXISTS `animales` (
  `id` int NOT NULL AUTO_INCREMENT,
  `apodo` varchar(50) COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'lucas',
  `patas` tinyint NOT NULL,
  `color` varchar(50) COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'Wheat',
  `sonido` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `img_url` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table animales.animales: ~17 rows (approximately)
INSERT INTO `animales` (`id`, `apodo`, `patas`, `color`, `sonido`, `img_url`) VALUES
	(1, 'Buff Doge', 2, 'Wheat', 'Arrr', 'buff_doge.png'),
	(2, 'Moritz', 2, 'Wheat', 'Meow', 'moritz.png'),
	(3, 'Cangurino', 2, 'Orange', 'Plata o plomo wachín', 'cangurino.png'),
	(8, 'Small Doge', 4, 'Brown', 'Aruuuu', 'small_doge.png'),
	(9, 'Moritz', 2, 'Wheat', 'Meow', 'moritz.png'),
	(10, 'Cangurino', 2, 'Orange', 'Plata o plomo wachín', 'cangurino.png'),
	(11, 'Buff Doge', 2, 'Wheat', 'Arrr', 'buff_doge.png'),
	(12, 'Beluga', 4, 'White', 'BOOP', 'beluga.png'),
	(13, 'Small Doge', 4, 'Brown', 'Aruuuu', 'small_doge.png'),
	(14, 'Small Doge', 4, 'Brown', 'Aruuuu', 'small_doge.png'),
	(15, 'Small Doge', 4, 'Brown', 'Aruuuu', 'small_doge.png'),
	(19, 'Small Doge', 4, 'Brown', 'Aruuuu', 'small_doge.png'),
	(20, 'Small Doge', 4, 'Brown', 'Aruuuu', 'small_doge.png'),
	(21, 'Small Doge', 4, 'Brown', 'Aruuuu', 'small_doge.png'),
	(22, 'Small Doge', 4, 'Brown', 'Aruuuu', 'small_doge.png'),
	(23, 'Small Doge', 4, 'Brown', 'Aruuuu', 'small_doge.png'),
	(24, 'Small Doge', 4, 'Brown', 'Aruuuu', 'small_doge.png');

-- Dumping structure for table animales.usuarios
DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int NOT NULL,
  `nombre` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `pass` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `nombre` (`nombre`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table animales.usuarios: ~3 rows (approximately)
INSERT INTO `usuarios` (`id`, `nombre`, `pass`) VALUES
	(1, 'rivo', 'rivo'),
	(2, 'mikel', 'z'),
	(3, 'mikel', 'mikel');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
