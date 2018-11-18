-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 17 2018 г., 20:59
-- Версия сервера: 5.6.37
-- Версия PHP: 7.0.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `rezume`
--

-- --------------------------------------------------------

--
-- Структура таблицы `rezume`
--

CREATE TABLE `rezume` (
  `id` int(11) NOT NULL,
  `file_name` text NOT NULL,
  `path` text NOT NULL,
  `surname` text NOT NULL,
  `users_name` text NOT NULL,
  `email` text NOT NULL,
  `phone` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `rezume`
--

INSERT INTO `rezume` (`id`, `file_name`, `path`, `surname`, `users_name`, `email`, `phone`) VALUES
(1, 'изучить.txt', 'uploads/изучить.txt', 'Проничкин', 'Илья', 'illiia@yandex.ru', 6767677),
(2, 'README.txt', 'uploads/README.txt', 'Иванов', 'Иван', 'ivanov@yandex.ru', 2147483647);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `rezume`
--
ALTER TABLE `rezume`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `rezume`
--
ALTER TABLE `rezume`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
