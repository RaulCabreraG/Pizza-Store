-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.1.9-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win32
-- HeidiSQL Versión:             9.4.0.5174
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Volcando estructura de base de datos para txpizza
CREATE DATABASE IF NOT EXISTS `txpizza` /*!40100 DEFAULT CHARACTER SET latin1 COLLATE latin1_spanish_ci */;
USE `txpizza`;

-- Volcando estructura para tabla txpizza.admin
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `pass` varchar(200) COLLATE latin1_spanish_ci NOT NULL,
  `name` varchar(200) COLLATE latin1_spanish_ci NOT NULL,
  `active` enum('Y','N') COLLATE latin1_spanish_ci NOT NULL DEFAULT 'Y',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- Volcando datos para la tabla txpizza.admin: ~1 rows (aproximadamente)
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` (`id`, `user`, `pass`, `name`, `active`) VALUES
	(1, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'Raul Cabrera', 'Y');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;

-- Volcando estructura para tabla txpizza.cheese
CREATE TABLE IF NOT EXISTS `cheese` (
  `cheeseId` int(11) NOT NULL,
  `cheeseName` tinytext COLLATE latin1_spanish_ci NOT NULL,
  PRIMARY KEY (`cheeseId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- Volcando datos para la tabla txpizza.cheese: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `cheese` DISABLE KEYS */;
INSERT INTO `cheese` (`cheeseId`, `cheeseName`) VALUES
	(1, 'Mozzarella'),
	(2, 'Cheddar'),
	(3, 'Colby');
/*!40000 ALTER TABLE `cheese` ENABLE KEYS */;

-- Volcando estructura para tabla txpizza.crust
CREATE TABLE IF NOT EXISTS `crust` (
  `crustId` int(11) NOT NULL,
  `crustName` tinytext COLLATE latin1_spanish_ci NOT NULL,
  PRIMARY KEY (`crustId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- Volcando datos para la tabla txpizza.crust: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `crust` DISABLE KEYS */;
INSERT INTO `crust` (`crustId`, `crustName`) VALUES
	(1, 'Thin'),
	(2, 'Thick'),
	(3, 'Filled with cheese');
/*!40000 ALTER TABLE `crust` ENABLE KEYS */;

-- Volcando estructura para tabla txpizza.ingredient
CREATE TABLE IF NOT EXISTS `ingredient` (
  `ingredientName` varchar(150) COLLATE latin1_spanish_ci NOT NULL,
  `pizzaId` int(11) NOT NULL,
  PRIMARY KEY (`ingredientName`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- Volcando datos para la tabla txpizza.ingredient: ~6 rows (aproximadamente)
/*!40000 ALTER TABLE `ingredient` DISABLE KEYS */;
INSERT INTO `ingredient` (`ingredientName`, `pizzaId`) VALUES
	('Bacon', 0),
	('Cherry', 1),
	('Mushroms', 0),
	('Pineapple', 1),
	('Roast Beef', 0),
	('Tapioca', 0),
	('Tomatoes', 0);
/*!40000 ALTER TABLE `ingredient` ENABLE KEYS */;

-- Volcando estructura para tabla txpizza.pizza
CREATE TABLE IF NOT EXISTS `pizza` (
  `pizzaId` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE latin1_spanish_ci NOT NULL DEFAULT '0',
  PRIMARY KEY (`pizzaId`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- Volcando datos para la tabla txpizza.pizza: ~1 rows (aproximadamente)
/*!40000 ALTER TABLE `pizza` DISABLE KEYS */;
INSERT INTO `pizza` (`pizzaId`, `name`) VALUES
	(1, 'Hawaiian');
/*!40000 ALTER TABLE `pizza` ENABLE KEYS */;

-- Volcando estructura para tabla txpizza.salad
CREATE TABLE IF NOT EXISTS `salad` (
  `saladName` varchar(150) COLLATE latin1_spanish_ci NOT NULL,
  PRIMARY KEY (`saladName`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- Volcando datos para la tabla txpizza.salad: ~5 rows (aproximadamente)
/*!40000 ALTER TABLE `salad` DISABLE KEYS */;
INSERT INTO `salad` (`saladName`) VALUES
	('Ensalada Caprese'),
	('Ensalada Mixta'),
	('Ensalada Rusa'),
	('Ensalada Waldorf'),
	('Kartoffelsalat');
/*!40000 ALTER TABLE `salad` ENABLE KEYS */;

-- Volcando estructura para tabla txpizza.sauce
CREATE TABLE IF NOT EXISTS `sauce` (
  `sauceId` int(11) NOT NULL,
  `sauceName` tinytext COLLATE latin1_spanish_ci NOT NULL,
  PRIMARY KEY (`sauceId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- Volcando datos para la tabla txpizza.sauce: ~4 rows (aproximadamente)
/*!40000 ALTER TABLE `sauce` DISABLE KEYS */;
INSERT INTO `sauce` (`sauceId`, `sauceName`) VALUES
	(1, 'Pesto'),
	(2, 'Bechamel'),
	(3, 'BBQ'),
	(4, 'Hummus');
/*!40000 ALTER TABLE `sauce` ENABLE KEYS */;

-- Volcando estructura para tabla txpizza.size
CREATE TABLE IF NOT EXISTS `size` (
  `sizeName` varchar(60) COLLATE latin1_spanish_ci NOT NULL,
  `numberOfSlices` int(2) NOT NULL,
  PRIMARY KEY (`sizeName`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- Volcando datos para la tabla txpizza.size: ~4 rows (aproximadamente)
/*!40000 ALTER TABLE `size` DISABLE KEYS */;
INSERT INTO `size` (`sizeName`, `numberOfSlices`) VALUES
	('Large', 6),
	('Medium', 5),
	('Personal', 3),
	('Small', 4);
/*!40000 ALTER TABLE `size` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
