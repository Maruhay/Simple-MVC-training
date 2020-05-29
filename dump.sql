-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: localhost:3306
-- Версия сервера: 5.7.25
-- Версия PHP: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- База данных: `simple_mvc`
--

-- --------------------------------------------------------

--
-- Структура таблицы `smvc_posts`
--

CREATE TABLE `smvc_posts` (
  `id` int(3) UNSIGNED NOT NULL,
  `author` varchar(35) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `title` varchar(35) NOT NULL,
  `text` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `smvc_posts`
--

INSERT INTO `smvc_posts` (`id`, `author`, `date`, `title`, `text`) VALUES
(1, 'Denys Marushevskyi', '2020-05-28 10:05:20', 'Lorem ipsum dolor sit ame', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.'),
(2, 'Mr X', '2020-05-28 10:06:16', 'Lorem ipsum dolor sit ame', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),
(3, 'Mr X', '2020-05-28 10:06:16', 'Lorem ipsum dolor sit ame', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.');

-- --------------------------------------------------------

--
-- Структура таблицы `smvc_users`
--

CREATE TABLE `smvc_users` (
  `id` int(3) UNSIGNED NOT NULL,
  `email` varchar(35) NOT NULL,
  `password` varchar(35) NOT NULL,
  `name` varchar(35) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `smvc_users`
--

INSERT INTO `smvc_users` (`id`, `email`, `password`, `name`) VALUES
(1, 'admin@admin.admin', 'admin', NULL);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `smvc_posts`
--
ALTER TABLE `smvc_posts`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `smvc_users`
--
ALTER TABLE `smvc_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `smvc_posts`
--
ALTER TABLE `smvc_posts`
  MODIFY `id` int(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `smvc_users`
--
ALTER TABLE `smvc_users`
  MODIFY `id` int(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;