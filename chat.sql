-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Фев 19 2020 г., 09:25
-- Версия сервера: 10.4.11-MariaDB
-- Версия PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `chat`
--

-- --------------------------------------------------------

--
-- Структура таблицы `friends`
--

CREATE TABLE `friends` (
  `user_1` int(11) NOT NULL,
  `user_2` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `friends`
--

INSERT INTO `friends` (`user_1`, `user_2`) VALUES
(2, 2),
(2, 3),
(333, 1),
(333, 2),
(333, 3),
(333, 4);

-- --------------------------------------------------------

--
-- Структура таблицы `messages`
--

CREATE TABLE `messages` (
  `message_id` int(11) NOT NULL,
  `userID_fromWhom` int(11) NOT NULL,
  `userID_toWhom` int(11) NOT NULL,
  `date_and_time` datetime NOT NULL DEFAULT current_timestamp(),
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `messages`
--

INSERT INTO `messages` (`message_id`, `userID_fromWhom`, `userID_toWhom`, `date_and_time`, `message`) VALUES
(1, 333, 3, '2020-02-14 03:16:11', 'Привет'),
(2, 3, 333, '2020-02-14 03:16:11', 'Приветики!'),
(3, 333, 3, '2020-02-14 03:19:34', 'Как дела?'),
(4, 3, 333, '2020-02-14 03:22:57', 'Пока не родила ))))'),
(5, 333, 3, '2020-02-14 03:23:52', '\"Птьху ты, дура ты. Пойди ударься головой...\"'),
(6, 3, 333, '2020-02-14 03:28:44', 'Вот и поговорили...уже и пошутить нельзя... (((('),
(7, 333, 3, '2020-02-14 03:30:13', 'Насть... извини!!!'),
(8, 3, 333, '2020-02-14 03:31:20', 'Сам дурак.... )))'),
(9, 2, 4, '2020-02-14 03:32:47', 'Привет Мой свет ;-)'),
(10, 4, 2, '2020-02-14 03:33:33', 'Хай.. гг LOL'),
(11, 2, 4, '2020-02-14 03:34:06', 'Вика ты шо пьяная?'),
(12, 4, 2, '2020-02-14 03:34:55', 'Сам дурак.... )))'),
(13, 7, 3, '2020-02-14 03:36:03', 'Привет!'),
(14, 8, 3, '2020-02-14 03:36:42', 'Привет!'),
(15, 10, 3, '2020-02-14 03:37:02', 'Привет!'),
(16, 9, 3, '2020-02-14 03:37:12', 'Привет!'),
(17, 333, 5, '2020-02-15 21:32:29', 'Привет Костян!'),
(18, 5, 333, '2020-02-15 21:34:09', 'дарова Саня'),
(19, 333, 1, '2020-02-15 21:35:52', 'Hi Piter!'),
(20, 1, 333, '2020-02-15 21:37:14', 'Сань!!!\r\nТишо п\'яний? Я ж Українець - Петро.\r\nНу привіт друже :-)'),
(21, 7, 333, '2020-02-15 21:48:00', 'Думай об универсальности'),
(22, 333, 7, '2020-02-15 21:48:41', 'вот как базу получу буду пилить'),
(23, 333, 7, '2020-02-15 21:49:01', 'у меня маловато знаний что бы заглядывать в перёд!'),
(24, 7, 333, '2020-02-15 21:49:46', ':)\r\nЯ тоже так думал'),
(25, 333, 7, '2020-02-15 21:50:34', 'я заглядывал вперёд а потом бах и новые знаний упрощающие жизнь и давай с самого начала'),
(28, 333, 1, '2020-02-16 03:30:10', 'Привет Петро Америкосович!'),
(29, 333, 1, '2020-02-16 03:35:01', 'ау не молчи'),
(31, 333, 0, '2020-02-16 05:30:24', 'frdsf\r\n'),
(32, 342, 3, '2020-02-16 06:20:34', 'Привет!'),
(41, 333, 3, '2020-02-16 15:57:24', 'Настенька мордастенька привет!'),
(42, 333, 3, '2020-02-16 15:59:56', 'Ты что обиделась?'),
(47, 333, 3, '2020-02-16 16:13:52', 'Ответь зараза ты этакая!'),
(48, 333, 3, '2020-02-16 16:16:16', 'ну и ладно'),
(49, 333, 7, '2020-02-16 16:16:34', 'Ты там как?'),
(50, 333, 2, '2020-02-17 22:41:45', 'Вань привет'),
(58, 333, 3, '2020-02-18 02:32:02', 'Снова тишина и мертвые с косами стоят!'),
(94, 333, 1, '2020-02-19 00:46:38', 'test'),
(95, 333, 1, '2020-02-19 00:46:57', 'wewqe'),
(96, 333, 1, '2020-02-19 00:51:55', 'eruuk'),
(97, 333, 1, '2020-02-19 00:52:14', 'eruuk'),
(98, 333, 1, '2020-02-19 00:54:02', 'fdf'),
(99, 333, 1, '2020-02-19 00:59:57', 'retreyruu'),
(100, 333, 1, '2020-02-19 01:02:41', '545'),
(101, 333, 1, '2020-02-19 01:02:47', '545'),
(102, 333, 1, '2020-02-19 01:05:44', 'huyuyu'),
(103, 333, 1, '2020-02-19 01:05:54', 'huyuyu'),
(104, 333, 1, '2020-02-19 01:06:52', 'ewrerre'),
(105, 333, 1, '2020-02-19 01:08:08', 'weeqew'),
(106, 333, 1, '2020-02-19 01:08:14', '2131233'),
(107, 333, 1, '2020-02-19 01:08:31', '123456789');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `photo`, `phone`, `email`, `password`) VALUES
(1, 'Piter', 'img/user.png', '255-255-255', 'piter@piter.com', '123'),
(2, 'Иван', 'img/user.png', '221-215-250', 'ivan@ivan.com', ''),
(3, 'Настя', 'img/user2.png', '265-255-285', 'nastia@nastia.com', ''),
(4, 'Вика', 'img/user2.png', '245-255-21', 'vika@vika.com', ''),
(5, 'Костя', 'img/user.png', '225-245-250', 'kostiakKostia.com', ''),
(6, 'Вася', 'img/user.png', '295-255-253', 'vasia@vasia.com', ''),
(7, 'Женя', 'img/user.png', '225-252-205', 'zenia@zenia.com', ''),
(8, 'Коля', 'img/user.png', '205-215-205', 'kolia@kolia.com', ''),
(9, 'Лёша', 'img/user.png', '235-215-275', 'liosha@liosha.com', ''),
(10, 'Аня', 'img/user2.png', '202-233-265', 'ania@ania.com', ''),
(11, 'Вика', 'img/user2.png', '200-205-201', 'vikusia@vika.com', ''),
(333, 'Alex Mo', 'img/user.png', '000-000-000', 'AlexMo@mo.com', '123');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `friends`
--
ALTER TABLE `friends`
  ADD UNIQUE KEY `user_1` (`user_1`,`user_2`);

--
-- Индексы таблицы `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`message_id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `messages`
--
ALTER TABLE `messages`
  MODIFY `message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=350;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
