-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Авг 27 2022 г., 12:50
-- Версия сервера: 10.4.24-MariaDB
-- Версия PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `projectbd`
--

-- --------------------------------------------------------

--
-- Структура таблицы `mytable`
--

CREATE TABLE `mytable` (
  `id_user` int(11) NOT NULL COMMENT 'идентификатор',
  `user` varchar(35) NOT NULL COMMENT 'имя клиента',
  `phone` varchar(12) NOT NULL COMMENT 'номер телефона',
  `comments` text NOT NULL COMMENT 'комментарии'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `mytable`
--

INSERT INTO `mytable` (`id_user`, `user`, `phone`, `comments`) VALUES
(1, 'Спасибо', '89111111111', 'позвонили'),
(2, 'Olia', '+79216666666', ''),
(3, 'Kate', '89995555555', 'не вышел на связь'),
(4, 'Cris', '+79119545454', ''),
(5, 'rim', '321', ''),
(6, 'rim', '321', ''),
(7, 'rim5656', '321кк', ''),
(8, 'fyz', '89116785432', 'встреча 04.09'),
(9, '45565577357', '8921', ''),
(10, 'Олька', '892145689998', 'дозвонились'),
(11, 'Олька', '892145689998', ''),
(12, 'Олькаryyryry', '892145689998', 'назначена съёмка'),
(13, 'yjrrj', '65878', ''),
(14, 'yjrrj', '65878', ''),
(15, 'yjrrj', '65878', ''),
(16, 'rimmmmmmmm', '999999999999', ''),
(17, 'Илья', '6784545', ''),
(18, 'Julia', '2020202020', '');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `mytable`
--
ALTER TABLE `mytable`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `mytable`
--
ALTER TABLE `mytable`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT COMMENT 'идентификатор', AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
