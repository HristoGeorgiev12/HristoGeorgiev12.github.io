-- --------------------------------------------------------
-- Хост:                         127.0.0.1
-- Server version:               5.6.17 - MySQL Community Server (GPL)
-- Server OS:                    Win32
-- HeidiSQL Версия:              9.3.0.4984
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping structure for table zarra_trade.admin
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- Dumping data for table zarra_trade.admin: 4 rows
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` (`id`, `username`, `password`) VALUES
	(1, 'stefan', '2e970e822e1a8834203d06abb60f59ec'),
	(2, 'stefan', '2e970e822e1a8834203d06abb60f59ec'),
	(3, 'stefan', '2e970e822e1a8834203d06abb60f59ec'),
	(4, 'stefan', '2e970e822e1a8834203d06abb60f59ec');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;


-- Dumping structure for table zarra_trade.images
CREATE TABLE IF NOT EXISTS `images` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_project` int(11) unsigned NOT NULL,
  `is_title` int(1) DEFAULT '0',
  `on_header` int(1) NOT NULL DEFAULT '0',
  `to_arc` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=utf8;

-- Dumping data for table zarra_trade.images: ~60 rows (approximately)
/*!40000 ALTER TABLE `images` DISABLE KEYS */;
INSERT INTO `images` (`id`, `id_project`, `is_title`, `on_header`, `to_arc`) VALUES
	(1, 4, 0, 0, 0),
	(2, 4, 1, 0, 0),
	(3, 4, 0, 0, 0),
	(4, 1, 0, 1, 1),
	(5, 5, 1, 0, 0),
	(6, 1, 0, 0, 1),
	(7, 3, 0, 0, 1),
	(8, 2, 0, 0, 0),
	(9, 2, 0, 0, 0),
	(10, 2, 1, 0, 0),
	(11, 5, 0, 0, 1),
	(12, 7, 0, 1, 0),
	(13, 2, 0, 0, 0),
	(14, 2, 0, 0, 0),
	(15, 2, 0, 0, 0),
	(16, 2, 0, 0, 0),
	(17, 2, 0, 1, 0),
	(18, 1, 1, 0, 0),
	(19, 1, 0, 0, 0),
	(20, 1, 0, 0, 0),
	(21, 1, 0, 0, 1),
	(22, 3, 0, 1, 0),
	(23, 3, 1, 0, 0),
	(24, 3, 0, 0, 0),
	(25, 3, 0, 0, 0),
	(26, 3, 0, 0, 0),
	(27, 3, 0, 0, 0),
	(28, 3, 0, 0, 0),
	(29, 3, 0, 0, 0),
	(30, 3, 0, 0, 0),
	(31, 3, 0, 0, 0),
	(32, 3, 0, 0, 0),
	(33, 6, 1, 0, 0),
	(34, 6, 0, 0, 0),
	(35, 6, 0, 1, 0),
	(36, 6, 0, 0, 0),
	(37, 6, 0, 0, 0),
	(38, 6, 0, 0, 0),
	(39, 7, 1, 0, 0),
	(40, 7, 0, 0, 0),
	(41, 7, 0, 0, 0),
	(42, 7, 0, 0, 0),
	(43, 7, 0, 0, 0),
	(44, 7, 0, 0, 0),
	(45, 7, 0, 0, 1),
	(46, 7, 0, 0, 0),
	(47, 7, 0, 0, 0),
	(48, 7, 0, 0, 0),
	(49, 7, 0, 0, 0),
	(50, 7, 0, 0, 0),
	(51, 8, 1, 0, 0),
	(52, 8, 0, 0, 0),
	(53, 8, 0, 0, 0),
	(54, 8, 0, 0, 0),
	(55, 8, 0, 0, 0),
	(56, 8, 0, 0, 0),
	(57, 9, 1, 0, 0),
	(58, 9, 0, 0, 0),
	(59, 9, 0, 0, 0),
	(60, 9, 0, 0, 0);
/*!40000 ALTER TABLE `images` ENABLE KEYS */;


-- Dumping structure for table zarra_trade.project
CREATE TABLE IF NOT EXISTS `project` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `is_project` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'po default proekt 1 za prodajba',
  `price` double(10,2) NOT NULL DEFAULT '0.00',
  `currency` enum('USD','EUR','BGN') NOT NULL DEFAULT 'BGN',
  `to_arc` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- Dumping data for table zarra_trade.project: ~9 rows (approximately)
/*!40000 ALTER TABLE `project` DISABLE KEYS */;
INSERT INTO `project` (`id`, `name`, `description`, `is_project`, `price`, `currency`, `to_arc`) VALUES
	(1, 'Еднофамилна жилищна сграда ', 'Еднофамилна жилищна сграда с разгъната площ от 210м<sup>2</sup>.  Разположена е на остров Карпатос - Гърция. Ограда - ковано желязо. Остров Карпатос е на Егейско море известно с кристално чистата си вода. Минимални зимни температури 8 градуса.', 1, 0.00, 'BGN', 1),
	(2, 'Къщи в Гърция', 'Три къщи на площ от 6000м<sup>2</sup>, всяка по 180м<sup>2</sup> със собствена плажна ивица на брега на Егейско море - остров Карпатос , Гърция. Минимални зимни температури 8 градуса.Продадени.', 2, 0.00, 'BGN', 1),
	(3, 'Къща село Дибич', 'Площ 360м<sup>2</sup>. Къщата се състои от 4 спални , хол , трапезария , кухня , 3 бани , 3 тоалетни. Построена е за година и шест месеца. Цялостно обжавеждане , вертикални щори , ламинат. ', 1, 0.00, 'BGN', 1),
	(4, 'Тестова 1', 'Тестова 1 тестТестова 1 тестТестова 1 тестТестова 1 тестТестова 1 тестТестова 1 тестТестова 1 тестТестова 1 тестТестова 1 тестТестова 1 тестТестова 1 тестТестова 1 тестТестова 1 тест', 1, 0.00, 'BGN', 1),
	(5, 'ka6ta za 500 000', 'Къщите са разположени на терен от 3600кв.м, граничещ с морето.Имат собствена плажна ивица, обградена от живописни скални масиви, гарантиращи спокойствие и приятни изживявания. Цените са за напълно завършени къщи с оборудвани кухни. ', 2, 50000.00, 'EUR', 1),
	(6, 'Къща АРКАСА', 'Еднофамилна жилищна сграда с площ от 170м<sup>2</sup>, с изглед към морето на 10 минути от плажа. Дворно място с площ 300м<sup>2</sup> с проект за още една къща от 180м<sup>2</sup>. Намира се в живописното село Аркаса на остров Карпатос , Гърция. С изглед към Егейско море, което е с кристално чиста вода.Минимални зимни температури 8 градуса.', 2, 240000.00, 'EUR', 1),
	(7, 'Къща село Лозево', 'Площ на къщата 400м<sup>2</sup>. Къщата се състои от 5 спални, хол с трапезария, кухня, гараж, бани, тоалетни, мази.\r\nОбоновени стари площи - надстройка.Ограда - декоративен камък , покривна констукция. Завършена през 2009 година.Построена е за период от 1 година.  Инвеститор Николай Марков', 1, 0.00, 'BGN', 1),
	(8, 'Oro Crema', 'Създадено от най-доброто качество на Бразилската арабика, Индийска и Африканска робуста.', 1, 0.00, 'BGN', 0),
	(9, 'Arabica Gold', 'Най-изтънченият от смесите на ZARRA coffee, създаден да задоволи вкуса на познавачите. Плътният и леко кисел аромат на арабика от Централна и Южна Америка е съчетан с аромата на натурална Африканска арабика, към тях е прибавена плътността на Индийска робуста за кадифен каймак.', 1, 0.00, 'BGN', 0);
/*!40000 ALTER TABLE `project` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
