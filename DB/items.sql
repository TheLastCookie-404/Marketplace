-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 02 2024 г., 09:05
-- Версия сервера: 8.0.30
-- Версия PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `marketplace`
--

-- --------------------------------------------------------

--
-- Структура таблицы `items`
--

CREATE TABLE `items` (
  `id` int NOT NULL,
  `picture` varchar(65) NOT NULL,
  `cornermsg` varchar(4) NOT NULL,
  `name` varchar(120) NOT NULL,
  `price` int NOT NULL,
  `discount` int NOT NULL,
  `category` varchar(15) NOT NULL,
  `article` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `items`
--

INSERT INTO `items` (`id`, `picture`, `cornermsg`, `name`, `price`, `discount`, `category`, `article`) VALUES
(1, 'image1.jpg', 'new', 'ПАРКА ЗИМНЯЯ ЖЕНСКАЯ «МАРИИНКА» ФУКСИЯ', 45000, 22, 'women', 1),
(2, 'image2.jpg', 'new', 'КУРТКА КОРОТКАЯ ЗИМНЯЯ ЖЕНСКАЯ «ФОНТАНКА» СЕРАЯ', 42000, 28, 'women', 2),
(3, 'image3.jpg', 'new', 'ПАРКА ЗИМНЯЯ ЖЕНСКАЯ «МАРИИНКА» ПЕРЛАМУТР', 43000, 11, 'women', 3),
(4, 'image4.jpg', 'new', 'КУРТКА КОРОТКАЯ ЗИМНЯЯ ЖЕНСКАЯ «ФОНТАНКА» БЕЖЕВАЯ', 48000, 20, 'women', 4),
(5, 'image5.jpg', 'new', 'ПАРКА ЗИМНЯЯ МУЖСКАЯ «АДМИРАЛТЕЙСТВО» ЧЁРНАЯ', 38000, 10, 'men', 5),
(6, 'image6.jpg', '-20%', 'КУРТКА КОРОТКАЯ МУЖСКАЯ «ВЕРФЬ» БЕЖЕВАЯ', 42000, 20, 'men', 6),
(7, 'image7.jpg', 'new', 'ВЕТРОВКА МУЖСКАЯ ЧЁРНАЯ \"УРАГАН ЗАСТЁЖКА\"', 43000, 10, 'men', 7),
(8, 'image8.jpg', '-20%', 'ПЛАЩ МУЖСКОЙ СИНИЙ \"BLUE GARMONY\"', 25000, 20, 'men', 8),
(9, 'image9.jpg', '-30%', 'ПАЛЬТО ТЁПЛОЕ ЖЕНСКОЕ «ЭРМИТАЖ» МЯТНОЕ', 25000, 30, 'sale', 9),
(10, 'image10.jpg', '-30%', 'ПАЛЬТО ТЁПЛОЕ ЖЕНСКОЕ «ЭРМИТАЖ» ОРХИДЕЯ', 20000, 30, 'sale', 10),
(11, 'image12.jpg', '-30%', 'ПАЛЬТО ТЁПЛОЕ ЖЕНСКОЕ ПЫЛЬНО-ГОЛУБОЕ', 25000, 30, 'sale', 11),
(12, 'image11.jpg', '-30%', 'ПАЛЬТО ТЁПЛОЕ ЖЕНСКОЕ «ЭРМИТАЖ» ЧЁРНОЕ', 28000, 30, 'sale', 12),
(13, 'image13.jpg', 'new', 'ВЕТРОВКА ANTEATER WINDJACKET-96', 42000, 10, 'hot', 13),
(14, 'image14.jpg', 'new', 'КУРТКА ANTEATER WGARAGE-BAGE', 48000, 19, 'hot', 14),
(15, 'image15.jpg', 'new', 'ХУДИ ANTEATER HOODIE-BLACK-ANTEATER', 31, 10, 'hot', 15),
(16, 'image16.jpg', 'new', 'БОМБЕР \"ЭКО ЧУДО ОГОНЁК\" ГОЛУБОЙ', 55000, 10, 'hot', 16);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `items`
--
ALTER TABLE `items`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
