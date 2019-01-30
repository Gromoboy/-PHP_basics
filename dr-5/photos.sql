-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Янв 29 2019 г., 15:33
-- Версия сервера: 5.6.41
-- Версия PHP: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `gbphp`
--

-- --------------------------------------------------------

--
-- Структура таблицы `photos`
--

CREATE TABLE `photos` (
  `id` int(10) NOT NULL,
  `preview_src` varchar(50) NOT NULL,
  `photo_src` varchar(50) NOT NULL,
  `size` int(30) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `show_count` int(30) NOT NULL DEFAULT '0' COMMENT 'количество просмотров',
  `added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `photos`
--

INSERT INTO `photos` (`id`, `preview_src`, `photo_src`, `size`, `name`, `show_count`, `added`) VALUES
(1, './img/min/1.jpg', './img/max/1.jpg', 661462, 'planet js', 0, '2019-01-29 12:31:00'),
(2, './img/min/2.jpg', './img/max/2.jpg', 25499, NULL, 0, '2019-01-29 12:31:00'),
(3, './img/min/3.jpg', './img/max/3.jpg', 57637, 'js class', 0, '2019-01-29 12:33:05'),
(4, './img/min/4.jpg', './img/max/4.jpg', 20832, 'объява ', 0, '2019-01-29 12:33:05');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `photos`
--
ALTER TABLE `photos`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
