-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Окт 23 2023 г., 13:05
-- Версия сервера: 5.6.47
-- Версия PHP: 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `kirill`
--

-- --------------------------------------------------------

--
-- Структура таблицы `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `id_category` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `country` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `model` varchar(255) NOT NULL,
  `count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `is_admin` bit(1) NOT NULL DEFAULT b'0',
  `name` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `patronymic` varchar(255) DEFAULT NULL,
  `login` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `is_admin`, `name`, `surname`, `patronymic`, `login`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, b'0', 'Kirill', 'Klimov', NULL, 'kkirll', 'kirill@mail.com', '$2y$10$izatBFCGWMWfvToOUGGliOVwBtqpiBc30zx.fxNh8cX05.c4I8So6', '2023-10-09 02:20:57', '2023-10-09 02:20:57'),
(2, b'0', 'авпва', 'пвап', 'впвап', 'dfgdfgfg', 'fdgdfgd@gdfsg', '$2y$10$.iz1wrXNifdg9y7ey/t5N.dnsvnZTdrgJK44ACreFD8f1rVXji1WC', '2023-10-09 02:47:40', '2023-10-09 02:47:40'),
(3, b'0', 'ыап', 'авпва', NULL, 'fgfd', 'nikitous05@mail.ru', '$2y$10$9cbEZF2h2FPM/LiYOolTC.aqEVIlw3B/HfKriVppPbbUKhl699Xgq', '2023-10-09 03:03:21', '2023-10-09 03:03:21'),
(4, b'0', 'аыпав-авпва', 'апававпва', NULL, 'dsfsdf', 'karak4eev.danya@yandex.ru', '$2y$10$sXlyhFfI8XY.LNuacdOIJuVGWknAn8ED5UsN9kSD59IzK61a1whKe', '2023-10-09 03:05:54', '2023-10-09 03:05:54'),
(5, b'0', 'авпва', 'вапва', 'впва авп', 'sdfgds', 'qwe@qe', '$2y$10$kMEjoz45mEF/NkdJhPx8J.H.d7fyRasCNOrRJ4hf3PMnPEX4CdN5m', '2023-10-09 03:06:46', '2023-10-09 03:06:46');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_category` (`id_category`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`id_category`) REFERENCES `category` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
