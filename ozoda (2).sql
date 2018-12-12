-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Дек 09 2018 г., 16:11
-- Версия сервера: 5.5.25
-- Версия PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `ozoda`
--

-- --------------------------------------------------------

--
-- Структура таблицы `clients`
--

CREATE TABLE IF NOT EXISTS `clients` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `fathername` varchar(255) NOT NULL,
  `birthday` date NOT NULL,
  `adress` varchar(255) NOT NULL,
  `document` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `date_keep` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=22 ;

--
-- Дамп данных таблицы `clients`
--

INSERT INTO `clients` (`id`, `name`, `surname`, `fathername`, `birthday`, `adress`, `document`, `phone`, `date_keep`) VALUES
(12, 'Kevin', 'Sistrow', 'Micheal', '1970-01-01', 'Miami', '133988749', '+77759844796', '2018-12-28'),
(13, 'Озода', 'Исакова', 'Закиржанкызы', '1970-01-01', 'Пушкина, 168. г. Костанай', '3265911166', '+77079821893', '2018-12-23'),
(17, 'Dean', 'Winshester', 'Djon', '1970-01-01', 'State Oclohoma, st. Eshline, 23', '6546849165', '3889789165', '2018-12-28'),
(18, 'Dean', 'Winshester', 'Djon', '1970-01-01', 'State Oclohoma, st. Eshline, 23', '6546849165', '3889789165', '2018-12-28'),
(20, 'Dean', 'Winshester', 'Djon', '1970-01-01', 'State Oclohoma, st. Eshline, 23', '6546849165', '3889789165', '2018-12-28'),
(21, 'Иванов', 'Дмитрий', 'Борисович', '1970-01-01', 'Россия', '989569845', '989849561849', '2018-12-21');

-- --------------------------------------------------------

--
-- Структура таблицы `contracts`
--

CREATE TABLE IF NOT EXISTS `contracts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `min_srok` varchar(255) NOT NULL,
  `max_srok` varchar(255) NOT NULL,
  `percent_day` varchar(255) NOT NULL,
  `grant_srok` date NOT NULL,
  `fact_date` date NOT NULL,
  `fact_summa` varchar(255) NOT NULL,
  `back_date` date NOT NULL,
  `client_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- Дамп данных таблицы `contracts`
--

INSERT INTO `contracts` (`id`, `min_srok`, `max_srok`, `percent_day`, `grant_srok`, `fact_date`, `fact_summa`, `back_date`, `client_id`) VALUES
(6, '20', '30', '11', '2018-12-25', '2018-12-26', '55000', '2018-12-26', 13),
(8, '25', '31', '7', '2018-12-19', '2018-12-13', '115500', '2018-12-28', 15),
(9, '25', '31', '7', '2018-12-19', '2018-12-13', '115500', '2018-12-28', 16),
(10, '25', '31', '7', '2018-12-19', '2018-12-13', '115500', '2018-12-28', 17),
(11, '25', '31', '7', '2018-12-19', '2018-12-13', '115500', '2018-12-28', 18),
(12, '25', '31', '7', '2018-12-19', '2018-12-13', '115500', '2018-12-28', 19),
(13, '25', '31', '7', '2018-12-19', '2018-12-13', '115500', '2018-12-28', 20),
(14, '30', '45', '5', '2018-12-31', '2018-12-20', '190000', '0000-00-00', 21);

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `number` varchar(255) NOT NULL,
  `ed` varchar(255) NOT NULL,
  `summa` varchar(255) NOT NULL,
  `status` varchar(10000) NOT NULL,
  `comment` text,
  `back` int(11) NOT NULL DEFAULT '0',
  `contract_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `name`, `category`, `number`, `ed`, `summa`, `status`, `comment`, `back`, `contract_id`) VALUES
(2, 'iPhone 6', 'Техники(смартфон, ноутбук, ТВ и т.д.)', '1', 'Штук', '68000', 'Принят (на склад)', '', 1, 5),
(3, 'Кольцо', 'Ювелирные украшения', '100', 'Грамм', '51000', 'Принят (на склад)', '', 1, 6),
(4, 'Laptop Acer', 'Техники(смартфон, ноутбук, ТВ и т.д.)', '1', 'Штук', '125000', 'Принят (на склад)', '', 0, 7),
(7, 'Laptop Acer', 'Техники(смартфон, ноутбук, ТВ и т.д.)', '1', 'Штук', '125000', 'Принят (на склад)', '', 0, 10),
(9, 'Laptop Acer', 'Техники(смартфон, ноутбук, ТВ и т.д.)', '1', 'Штук', '125000', 'Принят (на склад)', '', 0, 12),
(10, 'Laptop Acer', 'Техники(смартфон, ноутбук, ТВ и т.д.)', '1', 'Штук', '125000', 'Принят (на склад)', '', 0, 13),
(11, 'Часы Rolex', 'Ювелирные украшения', '1', 'Штук', '175000', 'Принят (на склад)', '', 1, 14);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
