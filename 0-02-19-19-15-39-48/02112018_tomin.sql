-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Фев 19 2019 г., 00:03
-- Версия сервера: 10.1.37-MariaDB
-- Версия PHP: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `02112018_tomin`
--

-- --------------------------------------------------------

--
-- Структура таблицы `leads`
--

CREATE TABLE `leads` (
  `id` int(6) NOT NULL,
  `email` varchar(100) NOT NULL,
  `type_connect` varchar(50) NOT NULL,
  `office_city` varchar(50) NOT NULL,
  `connect_time` varchar(100) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `leads`
--

INSERT INTO `leads` (`id`, `email`, `type_connect`, `office_city`, `connect_time`, `message`) VALUES
(1, 'kiril@mail.ru', 'phone', 'Офис в Петербурге', '9:00 - 11:00,11:00 - 11:00', 'тестовое'),
(2, 'severov@mail.ru', 'phone', 'Офис в Москве', '9:00 - 11:00,11:00 - 11:00', 'письмо'),
(4, 'svetlov@gmail.ru', 'phone', 'Офис в Петербурге', '9:00 - 11:00,11:00 - 11:00,14:00 - 18:00,18:00 - 21:00', 'Просто письмо Просто письмо Просто письмо Просто письмо Просто письмо Просто письмо Просто письмо Просто письмо Просто письмо Просто письмо Просто письмо Просто письмо Просто письмо Просто письмо Просто письмо Просто письмо Просто письмо Просто письмо'),
(5, 'antonov@mail.ru', 'phone', 'Офис в Москве', '9:00 - 11:00,11:00 - 11:00,14:00 - 18:00,18:00 - 21:00', 'тестовое письмо');

-- --------------------------------------------------------

--
-- Структура таблицы `our_office`
--

CREATE TABLE `our_office` (
  `id` int(6) NOT NULL,
  `img_src` varchar(255) NOT NULL,
  `name` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `priority` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `our_office`
--

INSERT INTO `our_office` (`id`, `img_src`, `name`, `content`, `priority`) VALUES
(1, '/images/icons/map.png', 'необычные маршруты', 'Мы обязательно порадуем тебя необычными маршрутами Москвы, которые прокладывают наши опытные гиды. Ты увидишь и узнаешь о Москве то, что никогда не знал!', 10),
(2, '/images/icons/souvenir.png', 'классные сувениры', 'Отличная новость! У нас появился магазин сувениров! И самое примечательное, что все эти сувениры мы делаем сами! Заходи к нам в гости!', 20),
(3, '/images/icons/compass.png', 'интересные экскурсии', 'За время экскурсий, которых у нас больше 20, ты узнаешь и увидишь все основные достопримечательности: Кремль, Храм Христа Спасителя, так и пройдешься по пешеходным улицам Москвы, узнаешь их историю и сделаешь самые классные фотографии.', 30),
(4, '/images/icons/picture.png', 'фотосессии в Москве', 'Команда MyMoscow рада провести креативные фотосессии в любом уголке Москвы. Не важно,                           свадьба у Вас или просто захотелось добавить в альбом или инстаграм красивых фоток.', 40),
(5, '/images/icons/discussion.png', 'новые знакомства', 'MyMoscow - это целый клуб, где после московских проулок ты сможешь продолжить общение с теми, кому интересна Москва , знакомиться с новыми людьми и делиться впечатлениями.', 50),
(6, '/images/icons/sun.png', 'яркие впечатления', 'Самое важное - это яркие эмоции, которые останутся с тобой на долгое время! Поэтому в нашей команде мы ждем именно тебя!', 60);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(6) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `date`) VALUES
(3, 'Антон Томин', 'at1z@mail.ru', '89256442454', '0000-00-00'),
(4, 'Иванов Иван Иванович', 'ivanov@mail.ru', '88008008080', '0000-00-00'),
(5, 'Егор Егоров', 'egor@mail.ru', '89009009090', '0000-00-00'),
(6, 'Сергей Сергеев', 'sergey@gmail.com', '88009008090', '0000-00-00'),
(10, 'Китай Неонов', 'ketay@mail.ru', '88005558885', '0000-00-00'),
(11, 'Фил Колинз', 'phil@gmail.com', '88009998877', '0000-00-00'),
(17, 'Антон Томин', 'jo3diz@gmail.com', '89256442454', '0000-00-00'),
(20, 'Глеб Глебов', 'gleb@gmail.com', '88008008080', '0000-00-00'),
(21, 'Петр Петров', 'petro@mail.ru', '89067057876', '0000-00-00'),
(22, 'Евгений Онегин', 'evgeniy@mail.ru', '89256442454', '0000-00-00'),
(23, 'Кирилл Кириянов', 'kiril@mail.ru', '88008008080', '0000-00-00'),
(24, 'Юрий Юров', 'yuriy@mail.ru', '88008008080', '0000-00-00'),
(25, 'Сергей Северов', 'severov@mail.ru', '88008008080', '0000-00-00'),
(27, 'Петр Светлов', 'svetlov@gmail.ru', '88008008080', '0000-00-00'),
(28, 'Юрий Антонов', 'antonov@mail.ru', '88008008080', '0000-00-00');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `leads`
--
ALTER TABLE `leads`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `our_office`
--
ALTER TABLE `our_office`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `leads`
--
ALTER TABLE `leads`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `our_office`
--
ALTER TABLE `our_office`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
