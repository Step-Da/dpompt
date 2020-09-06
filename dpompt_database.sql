-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Июл 02 2020 г., 12:17
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
-- База данных: `dpompt_database`
--

-- --------------------------------------------------------

--
-- Дублирующая структура для представления `catalog`
-- (См. Ниже фактическое представление)
--
CREATE TABLE `catalog` (
`id_Courses` int(11)
,`name_courses` varchar(50)
,`start_date` date
,`end_date` date
,`description` varchar(50)
,`id_teacher_c` int(11)
,`id_range_courses` int(11)
,`id_Teacher` int(11)
,`surname` varchar(50)
,`name` varchar(50)
,`patronymic` varchar(50)
,`email` varchar(50)
);

-- --------------------------------------------------------

--
-- Структура таблицы `courses`
--

CREATE TABLE `courses` (
  `id_Courses` int(11) NOT NULL,
  `name_courses` varchar(50) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `description` varchar(50) NOT NULL,
  `id_teacher_c` int(11) NOT NULL,
  `id_range_courses` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `courses`
--

INSERT INTO `courses` (`id_Courses`, `name_courses`, `start_date`, `end_date`, `description`, `id_teacher_c`, `id_range_courses`) VALUES
(1, 'FrontEnd разработка и дизайн', '2020-06-28', '2020-07-17', 'Разработка веб-ресурсов', 1, 1),
(2, 'Разработка мобильных приложений', '2020-07-09', '2020-07-31', 'Обучающий курс для разработки на Android', 2, 1),
(3, 'Программирование на платформе .NET', '2020-06-27', '2020-07-26', 'Разработка настольных приложений на C#', 3, 1),
(4, 'Алгебра и Геометрия', '2020-07-01', '2020-07-31', 'Подготовка к экзамену по математике', 4, 2),
(5, 'Изучение Русского языка', '2020-07-01', '2020-07-31', 'Подготовка к экзамену по Русскому языку', 5, 2),
(6, 'Изучение Английского языка', '2020-07-01', '2020-07-31', 'Подготовка к экзамену по Английскому языку', 6, 2),
(7, 'Оператор ЭВМ', '2020-07-01', '2020-07-31', 'Подготовка оператора ЭВМ 3-го разряда', 7, 3),
(8, 'Изучение технической документации', '2020-07-01', '2020-07-31', 'Изучение ЕСПД. Составление документации', 8, 3);

-- --------------------------------------------------------

--
-- Структура таблицы `courses_and_stages`
--

CREATE TABLE `courses_and_stages` (
  `id_courses` int(11) NOT NULL,
  `id_stages` int(11) NOT NULL,
  `id_string` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `courses_and_stages`
--

INSERT INTO `courses_and_stages` (`id_courses`, `id_stages`, `id_string`) VALUES
(1, 1, 1),
(1, 2, 2),
(1, 3, 3);

-- --------------------------------------------------------

--
-- Структура таблицы `document`
--

CREATE TABLE `document` (
  `id_Document` int(11) NOT NULL,
  `series` int(4) NOT NULL,
  `number` int(7) NOT NULL,
  `date_issue` date NOT NULL,
  `issuing_address` varchar(50) NOT NULL,
  `type` varchar(20) NOT NULL,
  `target` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `document`
--

INSERT INTO `document` (`id_Document`, `series`, `number`, `date_issue`, `issuing_address`, `type`, `target`) VALUES
(12, 8575, 8, '2020-06-12', '', 'Слушатель', NULL),
(17, 5998, 479, '2010-05-12', 'УФМС г.Москвы район Новокосино', 'Слушатель', NULL),
(21, 934, 580, '2009-02-11', 'УФМС г.Реутов', 'Слушатель', NULL),
(22, 9012, 324, '2009-07-15', 'УФМС г.Москвы район Перово', 'Слушатель', NULL),
(23, 4890, 932, '2011-02-02', 'УФМС', 'Слушатель', NULL),
(24, 5803, 473, '2011-10-19', 'ККККК', 'Слушатель', NULL),
(25, 7893, 432, '2001-06-06', 'УФМС г.Москвы района Южное Бутово ', 'Слушатель', NULL),
(26, 5993, 901, '2020-06-04', 'УФМС', 'Слушатель', NULL),
(27, 5993, 901, '2020-06-04', 'УФМС', 'Слушатель', NULL),
(35, 3281, 123, '2020-06-11', 'УФМС', 'Слушатель', NULL),
(37, 1234, 734, '2020-06-12', 'УФМС', 'Слушатель', NULL),
(38, 4358, 347, '2020-06-12', 'УФМС', 'Слушатель', NULL),
(39, 1239, 494, '2020-06-10', 'УФМС', 'Слушатель', NULL),
(40, 3920, 321, '2020-06-18', 'УФМС', 'Слушатель', NULL),
(41, 1284, 345, '2020-06-19', 'УФМС', 'Слушатель', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `education`
--

CREATE TABLE `education` (
  `id_Education` int(11) NOT NULL,
  `type_education` varchar(50) NOT NULL,
  `name_education` varchar(50) NOT NULL,
  `establishment` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `education`
--

INSERT INTO `education` (`id_Education`, `type_education`, `name_education`, `establishment`) VALUES
(1, 'Вышие', '32494', 'МПТ'),
(2, 'Среднее', '98347894732', 'МПТ'),
(3, 'Среднее', '98347894732', 'МПТ'),
(4, 'Среднее', '98347894732', 'МПТ'),
(5, 'Среднее', '', ''),
(6, 'Среднее', '', ''),
(7, 'Среднее', '', ''),
(8, 'Среднее', '', ''),
(9, 'Вышие', '98347894732', 'МПТ'),
(10, 'Среднее', '98347894732', 'МПТ'),
(11, 'Вышие', '98347894732', 'МПТ'),
(12, 'Среднее', '78979979779', 'МПТ'),
(13, 'Среднее', '98347894732', 'МПТ'),
(14, 'Среднее', '98347894732', 'МПТ'),
(15, 'Среднее', '98347894732', 'МПТ'),
(16, 'Среднее', '98347894732', 'МПТ');

-- --------------------------------------------------------

--
-- Дублирующая структура для представления `item_catalog`
-- (См. Ниже фактическое представление)
--
CREATE TABLE `item_catalog` (
`name_courses` varchar(50)
,`start_date` date
,`end_date` date
,`description` varchar(50)
,`range` int(11)
,`teacher` varchar(152)
,`email` varchar(50)
);

-- --------------------------------------------------------

--
-- Структура таблицы `listener`
--

CREATE TABLE `listener` (
  `id_Listener` int(11) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `patronymic` varchar(50) DEFAULT NULL,
  `date_birth` date NOT NULL,
  `id_phone` int(11) NOT NULL,
  `id_document` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `listener`
--

INSERT INTO `listener` (`id_Listener`, `surname`, `name`, `patronymic`, `date_birth`, `id_phone`, `id_document`, `email`, `password`) VALUES
(36, 'Степанов', 'Дмитрий', 'Алексеевич', '2002-05-15', 11, 12, 'p_d.a.stepanov@mail.ru', 'dima'),
(40, 'Иванов', 'Иван', 'Иванович', '2001-05-08', 18, 17, 'ivanov@mail.ru', 'ivanpass'),
(46, 'Олегов', 'Мефодий', 'Алексеевич', '2002-02-14', 41, 21, 'mefodi@gmail.com', 'mefodPass'),
(47, 'Петров', 'Петр', 'Олегович', '2002-11-13', 42, 22, 'petrov@gmail.com', 'petrovvv'),
(48, 'Иванушкин', 'Алексей', 'Александрович', '2002-05-17', 43, 23, 'ivanPost@mail.ru', 'passwordfail'),
(49, 'Лазарев', 'Илья', 'Ильиич', '2013-02-24', 44, 24, 'stepanov-dima-050@mail.ru', 'iliin'),
(50, 'Земсков', 'Виталий', 'Витальевич', '2001-03-15', 45, 25, 'p_v.v.zemskov@mpt.ru', 'zemscovPass'),
(51, 'Метрофанов', 'Егор', 'Егорович', '2001-05-09', 46, 26, 'mevodi@mail.ru', 'egorich'),
(52, 'Метрофанов', 'Егор', 'Егорович', '2001-05-09', 47, 27, 'metrofan@gamil.com', 'metro'),
(59, 'Олегов', 'Олег', 'Олегович', '2002-05-07', 54, 35, 'olegov@mpt.ru', 'password'),
(65, 'Степанов', 'Дмитрий', 'Алексеевич', '2002-05-15', 60, 41, 'p_d.a.stepanov@mpt.ru', 'password');

-- --------------------------------------------------------

--
-- Структура таблицы `listener_and_courses`
--

CREATE TABLE `listener_and_courses` (
  `id_listener_courses` int(11) NOT NULL,
  `id_courses` int(11) NOT NULL,
  `id_string` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `listener_and_courses`
--

INSERT INTO `listener_and_courses` (`id_listener_courses`, `id_courses`, `id_string`) VALUES
(36, 1, 1),
(65, 1, 15);

-- --------------------------------------------------------

--
-- Структура таблицы `listener_and_education`
--

CREATE TABLE `listener_and_education` (
  `id_listener` int(11) NOT NULL,
  `id_education` int(11) NOT NULL,
  `id_string` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `listener_and_education`
--

INSERT INTO `listener_and_education` (`id_listener`, `id_education`, `id_string`) VALUES
(47, 1, 1),
(48, 1, 2),
(49, 1, 3),
(50, 2, 4),
(51, 3, 5),
(52, 4, 6),
(59, 10, 12),
(65, 16, 18);

-- --------------------------------------------------------

--
-- Дублирующая структура для представления `mailcatalog`
-- (См. Ниже фактическое представление)
--
CREATE TABLE `mailcatalog` (
`id_Listener` int(11)
,`surname` varchar(50)
,`name` varchar(50)
,`patronymic` varchar(50)
,`date_birth` date
,`id_phone` int(11)
,`id_document` int(11)
,`email` varchar(50)
,`password` varchar(20)
,`id_listener_courses` int(11)
,`id_courses` int(11)
,`id_string` int(11)
);

-- --------------------------------------------------------

--
-- Структура таблицы `phone`
--

CREATE TABLE `phone` (
  `Id_Phone` int(11) NOT NULL,
  `phone_number` varchar(18) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `phone`
--

INSERT INTO `phone` (`Id_Phone`, `phone_number`) VALUES
(11, '+7(890) 318-47-01'),
(18, '+7(444) 444-44-44'),
(41, '+7(953) 247-56-43'),
(42, '+7(094) 892-38-75'),
(43, '+7(794) 982-73-94'),
(44, '+7(982) 174-83-29'),
(45, '+7(432) 890-48-03'),
(46, '+7(992) 340-99-32'),
(47, '+7(992) 340-99-32'),
(54, '+7(949) 324-30-23'),
(56, '+7(903) 184-70-10'),
(57, '+7(903) 184-70-10'),
(58, '+7(940) 329-44-93'),
(59, '+7(903) 184-70-10'),
(60, '+7(903) 184-70-10');

-- --------------------------------------------------------

--
-- Структура таблицы `range`
--

CREATE TABLE `range` (
  `id_Range` int(11) NOT NULL,
  `name` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `range`
--

INSERT INTO `range` (`id_Range`, `name`) VALUES
(1, 'IT-Курсы'),
(2, 'Подготовка к ЭГЕ'),
(3, 'Прочие образовательные курсы');

-- --------------------------------------------------------

--
-- Структура таблицы `stages`
--

CREATE TABLE `stages` (
  `id_Stages` int(11) NOT NULL,
  `name_stage` varchar(50) NOT NULL,
  `price` int(11) NOT NULL,
  `ratio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `stages`
--

INSERT INTO `stages` (`id_Stages`, `name_stage`, `price`, `ratio`) VALUES
(1, 'Изучение html и css', 2500, 1),
(2, 'Изучение php', 3000, 1),
(3, 'Изучение JavaScript', 4000, 1);

-- --------------------------------------------------------

--
-- Дублирующая структура для представления `stages_catalog`
-- (См. Ниже фактическое представление)
--
CREATE TABLE `stages_catalog` (
`id_Stages` int(11)
,`name_stage` varchar(50)
,`price` int(11)
,`ratio` int(11)
,`id_Courses` int(11)
,`name_courses` varchar(50)
,`start_date` date
,`end_date` date
,`description` varchar(50)
,`id_teacher_c` int(11)
,`id_range_courses` int(11)
,`id_Teacher` int(11)
,`surname` varchar(50)
,`name` varchar(50)
,`patronymic` varchar(50)
,`email` varchar(50)
);

-- --------------------------------------------------------

--
-- Структура таблицы `teacher`
--

CREATE TABLE `teacher` (
  `id_Teacher` int(11) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `patronymic` varchar(50) DEFAULT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `teacher`
--

INSERT INTO `teacher` (`id_Teacher`, `surname`, `name`, `patronymic`, `email`) VALUES
(1, 'Лихачёв', 'Лазарь', 'Богданович', 'lihac@gmail.com'),
(2, 'Панов', 'Мартын', 'Германнович', 'aibarra@gmail.com'),
(3, 'Лазарев', 'Мстислав', 'Григорьевич', 'ladinah399@gmail.com'),
(4, 'Круглова', 'Анастасия', 'Казимировна', 'grugova@gmail.com'),
(5, 'Фотина', 'Лилия', 'Елизаровна', 'fotina@gmail.com'),
(6, 'Сутулина', 'Полина', 'Мироновна', 'sutulina@gamil.com'),
(7, 'Коровин', 'Аркадий', 'Пахомович', 'covrin@gmail.com'),
(8, 'Эсце', 'Василиса', 'Потаповна', 'esce@gmail.com');

-- --------------------------------------------------------

--
-- Структура для представления `catalog`
--
DROP TABLE IF EXISTS `catalog`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `catalog`  AS  select `courses`.`id_Courses` AS `id_Courses`,`courses`.`name_courses` AS `name_courses`,`courses`.`start_date` AS `start_date`,`courses`.`end_date` AS `end_date`,`courses`.`description` AS `description`,`courses`.`id_teacher_c` AS `id_teacher_c`,`courses`.`id_range_courses` AS `id_range_courses`,`teacher`.`id_Teacher` AS `id_Teacher`,`teacher`.`surname` AS `surname`,`teacher`.`name` AS `name`,`teacher`.`patronymic` AS `patronymic`,`teacher`.`email` AS `email` from (`courses` join `teacher` on(`courses`.`id_Courses` = `teacher`.`id_Teacher`)) ;

-- --------------------------------------------------------

--
-- Структура для представления `item_catalog`
--
DROP TABLE IF EXISTS `item_catalog`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `item_catalog`  AS  select `catalog`.`name_courses` AS `name_courses`,`catalog`.`start_date` AS `start_date`,`catalog`.`end_date` AS `end_date`,`catalog`.`description` AS `description`,`catalog`.`id_range_courses` AS `range`,concat(`catalog`.`surname`,' ',`catalog`.`name`,' ',`catalog`.`patronymic`) AS `teacher`,`catalog`.`email` AS `email` from `catalog` ;

-- --------------------------------------------------------

--
-- Структура для представления `mailcatalog`
--
DROP TABLE IF EXISTS `mailcatalog`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `mailcatalog`  AS  select `listener`.`id_Listener` AS `id_Listener`,`listener`.`surname` AS `surname`,`listener`.`name` AS `name`,`listener`.`patronymic` AS `patronymic`,`listener`.`date_birth` AS `date_birth`,`listener`.`id_phone` AS `id_phone`,`listener`.`id_document` AS `id_document`,`listener`.`email` AS `email`,`listener`.`password` AS `password`,`listener_and_courses`.`id_listener_courses` AS `id_listener_courses`,`listener_and_courses`.`id_courses` AS `id_courses`,`listener_and_courses`.`id_string` AS `id_string` from (`listener` join `listener_and_courses` on(`listener`.`id_Listener` = `listener_and_courses`.`id_listener_courses`)) ;

-- --------------------------------------------------------

--
-- Структура для представления `stages_catalog`
--
DROP TABLE IF EXISTS `stages_catalog`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `stages_catalog`  AS  select `stages`.`id_Stages` AS `id_Stages`,`stages`.`name_stage` AS `name_stage`,`stages`.`price` AS `price`,`stages`.`ratio` AS `ratio`,`catalog`.`id_Courses` AS `id_Courses`,`catalog`.`name_courses` AS `name_courses`,`catalog`.`start_date` AS `start_date`,`catalog`.`end_date` AS `end_date`,`catalog`.`description` AS `description`,`catalog`.`id_teacher_c` AS `id_teacher_c`,`catalog`.`id_range_courses` AS `id_range_courses`,`catalog`.`id_Teacher` AS `id_Teacher`,`catalog`.`surname` AS `surname`,`catalog`.`name` AS `name`,`catalog`.`patronymic` AS `patronymic`,`catalog`.`email` AS `email` from (`stages` join `catalog` on(`stages`.`ratio` = `catalog`.`id_Courses`)) ;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id_Courses`),
  ADD KEY `id_teacher_c` (`id_teacher_c`),
  ADD KEY `id_range_courses` (`id_range_courses`);

--
-- Индексы таблицы `courses_and_stages`
--
ALTER TABLE `courses_and_stages`
  ADD PRIMARY KEY (`id_string`),
  ADD KEY `id_courses` (`id_courses`),
  ADD KEY `id_stages` (`id_stages`);

--
-- Индексы таблицы `document`
--
ALTER TABLE `document`
  ADD PRIMARY KEY (`id_Document`);

--
-- Индексы таблицы `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`id_Education`);

--
-- Индексы таблицы `listener`
--
ALTER TABLE `listener`
  ADD PRIMARY KEY (`id_Listener`),
  ADD KEY `id_phone` (`id_phone`),
  ADD KEY `id_document` (`id_document`);

--
-- Индексы таблицы `listener_and_courses`
--
ALTER TABLE `listener_and_courses`
  ADD PRIMARY KEY (`id_string`),
  ADD KEY `id_courses` (`id_courses`),
  ADD KEY `id_listener` (`id_listener_courses`);

--
-- Индексы таблицы `listener_and_education`
--
ALTER TABLE `listener_and_education`
  ADD PRIMARY KEY (`id_string`),
  ADD KEY `id_listener` (`id_listener`),
  ADD KEY `id_education` (`id_education`);

--
-- Индексы таблицы `phone`
--
ALTER TABLE `phone`
  ADD PRIMARY KEY (`Id_Phone`);

--
-- Индексы таблицы `range`
--
ALTER TABLE `range`
  ADD PRIMARY KEY (`id_Range`);

--
-- Индексы таблицы `stages`
--
ALTER TABLE `stages`
  ADD PRIMARY KEY (`id_Stages`);

--
-- Индексы таблицы `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`id_Teacher`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `courses`
--
ALTER TABLE `courses`
  MODIFY `id_Courses` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `courses_and_stages`
--
ALTER TABLE `courses_and_stages`
  MODIFY `id_string` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `document`
--
ALTER TABLE `document`
  MODIFY `id_Document` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT для таблицы `education`
--
ALTER TABLE `education`
  MODIFY `id_Education` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT для таблицы `listener`
--
ALTER TABLE `listener`
  MODIFY `id_Listener` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT для таблицы `listener_and_courses`
--
ALTER TABLE `listener_and_courses`
  MODIFY `id_string` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT для таблицы `listener_and_education`
--
ALTER TABLE `listener_and_education`
  MODIFY `id_string` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT для таблицы `phone`
--
ALTER TABLE `phone`
  MODIFY `Id_Phone` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT для таблицы `range`
--
ALTER TABLE `range`
  MODIFY `id_Range` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `stages`
--
ALTER TABLE `stages`
  MODIFY `id_Stages` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `teacher`
--
ALTER TABLE `teacher`
  MODIFY `id_Teacher` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `courses`
--
ALTER TABLE `courses`
  ADD CONSTRAINT `courses_ibfk_1` FOREIGN KEY (`id_teacher_c`) REFERENCES `teacher` (`id_Teacher`),
  ADD CONSTRAINT `courses_ibfk_2` FOREIGN KEY (`id_range_courses`) REFERENCES `range` (`id_Range`);

--
-- Ограничения внешнего ключа таблицы `courses_and_stages`
--
ALTER TABLE `courses_and_stages`
  ADD CONSTRAINT `courses_and_stages_ibfk_1` FOREIGN KEY (`id_courses`) REFERENCES `courses` (`id_Courses`),
  ADD CONSTRAINT `courses_and_stages_ibfk_2` FOREIGN KEY (`id_stages`) REFERENCES `stages` (`id_Stages`);

--
-- Ограничения внешнего ключа таблицы `listener`
--
ALTER TABLE `listener`
  ADD CONSTRAINT `listener_ibfk_1` FOREIGN KEY (`id_phone`) REFERENCES `phone` (`Id_Phone`),
  ADD CONSTRAINT `listener_ibfk_2` FOREIGN KEY (`id_document`) REFERENCES `document` (`id_document`);

--
-- Ограничения внешнего ключа таблицы `listener_and_courses`
--
ALTER TABLE `listener_and_courses`
  ADD CONSTRAINT `listener_and_courses_ibfk_1` FOREIGN KEY (`id_courses`) REFERENCES `courses` (`id_Courses`),
  ADD CONSTRAINT `listener_and_courses_ibfk_2` FOREIGN KEY (`id_listener_courses`) REFERENCES `listener` (`id_Listener`);

--
-- Ограничения внешнего ключа таблицы `listener_and_education`
--
ALTER TABLE `listener_and_education`
  ADD CONSTRAINT `listener_and_education_ibfk_1` FOREIGN KEY (`id_listener`) REFERENCES `listener` (`id_Listener`),
  ADD CONSTRAINT `listener_and_education_ibfk_2` FOREIGN KEY (`id_education`) REFERENCES `education` (`id_Education`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
