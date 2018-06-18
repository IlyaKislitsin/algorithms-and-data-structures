-- --------------------------------------------------------
-- Хост:                         127.0.0.1
-- Версия сервера:               5.6.38 - MySQL Community Server (GPL)
-- Операционная система:         Win64
-- HeidiSQL Версия:              9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Дамп структуры базы данных algorithms
DROP DATABASE IF EXISTS `algorithms`;
CREATE DATABASE IF NOT EXISTS `algorithms` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `algorithms`;

-- Дамп структуры для таблица algorithms.categories
DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'id категории',
  `name` varchar(64) NOT NULL DEFAULT '0' COMMENT 'название категории',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8 COMMENT='Список категорий для меню';

-- Дамп данных таблицы algorithms.categories: ~26 rows (приблизительно)
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` (`id`, `name`) VALUES
	(1, 'Все разделы'),
	(2, 'О компании'),
	(3, 'Помощь'),
	(4, 'Книги'),
	(5, 'Электроника'),
	(6, 'Акции'),
	(7, 'Пресс-центр'),
	(8, 'Вакансии'),
	(9, 'Реквизиты'),
	(10, 'О компании'),
	(11, 'Как сделать заказ'),
	(12, 'Доставка'),
	(13, 'Оплата'),
	(14, 'Контакты'),
	(15, 'Учебная литература'),
	(16, 'Художественная литература'),
	(17, 'Детям и родителям'),
	(18, 'Телефоны'),
	(19, 'Компьютеры'),
	(20, 'ТВ и видеотехника'),
	(21, 'Школьникам'),
	(22, 'Студентам'),
	(23, 'Педагогам'),
	(24, 'Детективы'),
	(25, 'Поэзия'),
	(26, 'Фантастика');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;

-- Дамп структуры для таблица algorithms.category_links
DROP TABLE IF EXISTS `category_links`;
CREATE TABLE IF NOT EXISTS `category_links` (
  `parent_id` int(11) NOT NULL COMMENT 'id родителя',
  `child_id` int(11) NOT NULL COMMENT 'id наследника',
  `level` tinyint(4) NOT NULL COMMENT 'уровень вложенности'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Ссылки на категории (иерархия категорий)';

-- Дамп данных таблицы algorithms.category_links: ~67 rows (приблизительно)
/*!40000 ALTER TABLE `category_links` DISABLE KEYS */;
INSERT INTO `category_links` (`parent_id`, `child_id`, `level`) VALUES
	(1, 1, 0),
	(2, 2, 0),
	(3, 3, 0),
	(1, 4, 1),
	(1, 5, 1),
	(1, 6, 1),
	(2, 7, 1),
	(2, 8, 1),
	(2, 9, 1),
	(2, 10, 1),
	(3, 11, 1),
	(3, 12, 1),
	(3, 13, 1),
	(3, 14, 1),
	(1, 15, 2),
	(1, 16, 2),
	(1, 17, 2),
	(1, 18, 2),
	(1, 19, 2),
	(1, 20, 2),
	(1, 21, 3),
	(1, 22, 3),
	(1, 23, 3),
	(1, 24, 3),
	(1, 25, 3),
	(1, 26, 3),
	(4, 4, 1),
	(4, 15, 2),
	(4, 16, 2),
	(4, 17, 2),
	(4, 21, 3),
	(4, 22, 3),
	(4, 23, 3),
	(5, 5, 1),
	(5, 18, 2),
	(5, 19, 2),
	(5, 20, 2),
	(5, 24, 3),
	(5, 25, 3),
	(5, 26, 3),
	(6, 6, 1),
	(7, 7, 1),
	(8, 8, 1),
	(9, 9, 1),
	(10, 10, 1),
	(11, 11, 1),
	(12, 12, 1),
	(13, 13, 1),
	(14, 14, 1),
	(15, 15, 2),
	(15, 21, 3),
	(15, 22, 3),
	(15, 23, 3),
	(16, 16, 2),
	(16, 24, 3),
	(16, 25, 3),
	(16, 26, 3),
	(17, 17, 2),
	(18, 18, 2),
	(19, 19, 2),
	(20, 20, 2),
	(21, 21, 3),
	(22, 22, 3),
	(23, 23, 3),
	(24, 24, 3),
	(25, 25, 3),
	(26, 26, 3);
/*!40000 ALTER TABLE `category_links` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
