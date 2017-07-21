-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Июл 21 2017 г., 16:09
-- Версия сервера: 10.1.24-MariaDB
-- Версия PHP: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `fortuna`
--

-- --------------------------------------------------------

--
-- Структура таблицы `machines`
--

CREATE TABLE `machines` (
  `id` int(4) NOT NULL,
  `coiling way` varchar(10) NOT NULL DEFAULT 'cold',
  `spring type` varchar(20) NOT NULL,
  `model` varchar(30) NOT NULL,
  `wire 800 min` int(10) NOT NULL,
  `wire 800 max` int(10) NOT NULL,
  `wire 1300 min` int(10) NOT NULL,
  `wire 1300 max` int(10) NOT NULL,
  `wire 1900 min` int(10) NOT NULL,
  `wire 1900 max` int(10) NOT NULL,
  `spring od min` int(10) NOT NULL,
  `spring od max` int(10) NOT NULL,
  `productivity` int(10) NOT NULL,
  `trimming machine` varchar(20) NOT NULL,
  `looping machine` varchar(20) NOT NULL,
  `power reel` varchar(20) NOT NULL,
  `mode` varchar(20) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `machines`
--

INSERT INTO `machines` (`id`, `coiling way`, `spring type`, `model`, `wire 800 min`, `wire 800 max`, `wire 1300 min`, `wire 1300 max`, `wire 1900 min`, `wire 1900 max`, `spring od min`, `spring od max`, `productivity`, `trimming machine`, `looping machine`, `power reel`, `mode`, `description`) VALUES
(1, 'cold', 'tension', 'WIM-4', 0, 36, 0, 55, 2, 55, 44, 66, 77, 'aha80', 'bh44', 'ssd14', 'auto', 'some sort of description goes here');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `machines`
--
ALTER TABLE `machines`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `machines`
--
ALTER TABLE `machines`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
