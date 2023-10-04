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
  `apodo` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'Nyan Cat',
  `patas` tinyint NOT NULL DEFAULT '4',
  `color` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'Pink',
  `sonido` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'Nyaa',
  `img_url` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'nyan_cat.gif',
  `activo` tinyint NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table animales.animales: ~17 rows (approximately)
INSERT INTO `animales` (`id`, `apodo`, `patas`, `color`, `sonido`, `img_url`, `activo`) VALUES
	(1, 'Eduardo el boxeador', 4, '#000000', 'Bajá wacho, bajá cagón', 'eduardo_boxeador.gif', 1),
	(2, 'Moritzito', 2, 'Wheat', 'Meow', 'moritz.png', 1),
	(3, 'Cangurino', 2, '#000000', 'Plata o plomo wachín', 'cangurino.png', 1),
	(4, 'Small Doge', 4, '#000000', 'Aruuuu', 'sad_doge.gif', 1),
	(5, 'Doge OG', 4, '#000000', 'The OG of OGs', 'doge_original.gif', 1),
	(6, 'Harvey', 2, 'Brown', 'Euuu', 'harvey.png', 1),
	(7, 'Emo llama', 4, '#000000', 'I should focus on my art', 'emo_llama.png', 1),
	(8, 'Nyan Cat', 4, 'Pink', 'Nyaaa', 'nyan_cat.gif', 1),
	(9, 'Bartolomeo & Martha', 8, 'Black', 'Sáquese alv', 'harvey_martha.gif', 1),
	(10, 'Firulais', 2, 'Black', 'Ají', 'firulais.gif', 1),
	(11, 'Buff Doge', 2, 'Wheat', 'Arrr', 'buff_doge.gif', 1),
	(12, 'Cry doggo', 4, 'Orange', 'i cri evrytiem', 'cry_chihuahua.gif', 1),
	(15, 'Cucaracha Amenazante', 6, 'Green', 'Menacing', 'cucaracha_amenazante.gif', 1),
	(17, 'Beluga', 4, 'White', 'BOOP', 'beluga.png', 1),
	(18, 'lucas', 4, 'Black', 'Auuu', 'default.png', 1),
	(19, 'lucas', 4, '#000000', 'Auuu', 'default.png', 1),
	(20, 'Cangurzzzz', 2, '#ff0a0a', 'Auuu', 'cangurino.png', 1);

-- Dumping structure for table animales.options
DROP TABLE IF EXISTS `options`;
CREATE TABLE IF NOT EXISTS `options` (
  `id` int NOT NULL AUTO_INCREMENT,
  `img_url` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `option_name` (`img_url`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table animales.options: ~14 rows (approximately)
INSERT INTO `options` (`id`, `img_url`) VALUES
	(14, 'beluga.png'),
	(11, 'buff_doge.gif'),
	(3, 'cangurino.png'),
	(12, 'cry_chihuahua.gif'),
	(13, 'cucaracha_amenazante.gif'),
	(5, 'doge_original.gif'),
	(1, 'eduardo_boxeador.gif'),
	(7, 'emo_llama.png'),
	(10, 'firulais.gif'),
	(6, 'harvey.png'),
	(9, 'harvey_martha.gif'),
	(2, 'moritz.png'),
	(8, 'nyan_cat.gif'),
	(4, 'sad_doge.gif');

-- Dumping structure for table animales.usuarios
DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int NOT NULL,
  `nombre` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `pass` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
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
