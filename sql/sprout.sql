-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Июн 06 2021 г., 21:59
-- Версия сервера: 10.4.19-MariaDB
-- Версия PHP: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `sprout`
--

-- --------------------------------------------------------

--
-- Структура таблицы `greenhouse`
--

CREATE TABLE `greenhouse` (
  `ID` int(11) NOT NULL,
  `size` int(11) NOT NULL,
  `kd_time` int(11) NOT NULL,
  `plant` int(11) NOT NULL,
  `time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Структура таблицы `plant`
--

CREATE TABLE `plant` (
  `ID` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `size` int(11) NOT NULL,
  `description` text NOT NULL,
  `time_seed` int(11) NOT NULL,
  `time_sprout` int(11) NOT NULL,
  `time_grow` int(11) NOT NULL,
  `time_flower` int(11) NOT NULL,
  `img_seed` varchar(100) NOT NULL,
  `img_sprout` varchar(100) NOT NULL,
  `img_grow` varchar(100) NOT NULL,
  `img_flower` varchar(100) NOT NULL,
  `img_fruit` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `plant`
--

INSERT INTO `plant` (`ID`, `name`, `size`, `description`, `time_seed`, `time_sprout`, `time_grow`, `time_flower`, `img_seed`, `img_sprout`, `img_grow`, `img_flower`, `img_fruit`) VALUES
(1, 'Дуриан', 2, 'Он растет, так что не трогайте его!', 5, 7, 3, 6, 'Нет', 'Нет', 'Нет', 'Нет', 'Нет');

-- --------------------------------------------------------

--
-- Структура таблицы `sizes`
--

CREATE TABLE `sizes` (
  `ID` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `sizes`
--

INSERT INTO `sizes` (`ID`, `name`, `number`) VALUES
(1, 'Маленький', 1),
(2, 'Средний', 2),
(3, 'Большой', 3);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `greenhouse`
--
ALTER TABLE `greenhouse`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `plant` (`plant`),
  ADD KEY `size` (`size`);

--
-- Индексы таблицы `plant`
--
ALTER TABLE `plant`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `size` (`size`);

--
-- Индексы таблицы `sizes`
--
ALTER TABLE `sizes`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `greenhouse`
--
ALTER TABLE `greenhouse`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `plant`
--
ALTER TABLE `plant`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `sizes`
--
ALTER TABLE `sizes`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `greenhouse`
--
ALTER TABLE `greenhouse`
  ADD CONSTRAINT `greenhouse_ibfk_1` FOREIGN KEY (`plant`) REFERENCES `plant` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `greenhouse_ibfk_2` FOREIGN KEY (`size`) REFERENCES `sizes` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `plant`
--
ALTER TABLE `plant`
  ADD CONSTRAINT `plant_ibfk_1` FOREIGN KEY (`size`) REFERENCES `sizes` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
