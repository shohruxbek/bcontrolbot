-- phpMyAdmin SQL Dump
-- version 4.4.15.10
-- https://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Мар 14 2020 г., 21:21
-- Версия сервера: 5.5.64-MariaDB-cll-lve
-- Версия PHP: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `milliykr_control`
--

-- --------------------------------------------------------

--
-- Структура таблицы `baze`
--

CREATE TABLE IF NOT EXISTS `baze` (
  `id` int(9) NOT NULL,
  `foyid` int(9) NOT NULL,
  `fin` varchar(255) NOT NULL,
  `kim` varchar(255) NOT NULL,
  `parol` int(11) NOT NULL,
  `aktiv` varchar(255) NOT NULL,
  `papka` varchar(9000) NOT NULL,
  `qadam` varchar(255) NOT NULL,
  `xatolik` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=171 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `baze`
--

INSERT INTO `baze` (`id`, `foyid`, `fin`, `kim`, `parol`, `aktiv`, `papka`, `qadam`, `xatolik`) VALUES
(35, 599773625, 'Taxmina', 'admin', 0, '1', '', 'glm', 0),
(37, 619611724, 'Bobur aka ikrom', 'foydalanuvchi', 3453, '1', '', 'glm', 0),
(41, 35723750, 'Sanjar aka', 'foydalanuvchi', 3419, '1', '', 'glm', 0),
(42, 211652931, 'Jaga aka 1etaj', 'foydalanuvchi', 8642, '1', '', 'glm', 0),
(43, 190049188, 'Jenya', 'foydalanuvchi', 7121, '1', '', 'glm', 0),
(44, 47846389, 'Behruz aka', 'foydalanuvchi', 6689, '1', '', 'glm', 0),
(46, 867323124, 'Sanat aka amir', 'foydalanuvchi', 2834, '1', '', 'glm', 0),
(47, 507018264, 'Sanat aka', 'foydalanuvchi', 3548, '1', '', 'glm', 0),
(49, 394645836, 'Aka zafar', 'foydalanuvchi', 8364, '1', '', 'glm', 0),
(51, 795183550, 'Anvar elek', 'foydalanuvchi', 7051, '1', '', 'glm', 0),
(52, 187451567, 'Amri aka', 'foydalanuvchi', 6762, '1', '', 'glm', 0),
(53, 57162514, 'borka aka amri', 'foydalanuvchi', 7933, '1', '', 'glm', 0),
(54, 939336898, 'Elektraset anvar', 'foydalanuvchi', 4816, '1', '', 'glm', 0),
(55, 331901699, 'Ikrom aka sum', 'foydalanuvchi', 2662, '1', '', 'glm', 0),
(57, 35726504, 'Jamol Gum', 'foydalanuvchi', 9442, '1', '', 'glm', 0),
(58, 771275404, 'Sherzod Elektrasvet', 'foydalanuvchi', 5989, '1', '', 'boshm', 0),
(59, 277291536, 'Амир Электросеть', 'foydalanuvchi', 7855, '1', '', 'glm', 0),
(60, 110475753, 'Mexroj artel', 'foydalanuvchi', 3399, '1', '', 'glm', 1),
(61, 343859193, 'Sanat gum', 'foydalanuvchi', 3487, '1', '', 'glm', 0),
(62, 215333459, 'Boxa elektra sivet', 'foydalanuvchi', 6455, '1', '', 'glm', 0),
(66, 212314149, 'Jafar', 'foydalanuvchi', 6585, '1', '', 'glm', 0),
(69, 70124252, 'Shuhrat aka sum farxod', 'foydalanuvchi', 7374, '1', '', 'glm', 0),
(70, 352665578, 'Ozoda oyti', 'foydalanuvchi', 9980, '1', '', 'glm', 0),
(73, 110995010, 'Nurik', 'admin', 5147, '1', '', 'glm', 1),
(74, 576965177, 'Jamel elektraset', 'foydalanuvchi', 7583, '1', '', 'glm', 0),
(78, 545867006, 'shaxram', 'foydalanuvchi', 3266, '1', '', 'glm', 0),
(79, 375331026, '2etaj firuz aka', 'foydalanuvchi', 3198, '1', '', 'glm', 0),
(82, 5065451, 'Dilya oyti', 'foydalanuvchi', 1033, '1', '', 'glm', 0),
(86, 342349344, 'Sum shuhrat aka', 'foydalanuvchi', 7860, '1', '', 'glm', 1),
(87, 345997720, 'Murod aka tayloq', 'foydalanuvchi', 6458, '1', '', 'glm', 0),
(88, 2024385, 'Jahongir 2etaj', 'foydalanuvchi', 9004, '1', '', 'glm', 0),
(89, 61429750, 'Mexribon', 'admin', 0, '1', '', 'ay', 0),
(90, 116857112, 'Madina', 'admin', 0, '1', '', 'glm', 0),
(97, 289008300, 'Alisher aka dom', 'foydalanuvchi', 3061, '0', '', 'glm', 0),
(98, 891241663, 'Alisher dom azi', 'foydalanuvchi', 5979, '1', '', 'glm', 0),
(99, 1851355, 'Aka sherzod urgut', 'foydalanuvchi', 7848, '1', '', 'glm', 1),
(102, 33774342, 'PAYARIQ ibrokhim', 'foydalanuvchi', 6153, '1', '', 'glm', 0),
(107, 718503329, 'firuz siyob', 'foydalanuvchi', 3979, '1', '', 'glm', 0),
(108, 1029390089, 'Tillo', 'foydalanuvchi', 5524, '1', '', 'glm', 0),
(110, 12343965, 'Karzinka', 'foydalanuvchi', 3306, '1', '', 'boshm', 0),
(111, 531293135, 'Jahongir 2etaj olim aka', 'foydalanuvchi', 8799, '1', '', 'glm', 1),
(115, 567774390, 'Zafar', 'foydalanuvchi', 6658, '1', '', 'glm', 0),
(120, 3082932, 'Sherzod aka bul', 'foydalanuvchi', 9362, '1', '', 'glm', 0),
(124, 285171727, 'Ishtxon oybek aka', 'foydalanuvchi', 8150, '1', '', 'glm', 0),
(127, 484632029, 'Farxod bul', 'foydalanuvchi', 7794, '1', '', 'glm', 0),
(131, 141365967, 'Oqmachit tohir', 'foydalanuvchi', 9293, '1', '', 'glm', 0),
(135, 275807095, 'Jenya oyti', 'foydalanuvchi', 4350, '1', '', 'glm', 0),
(136, 985132089, 'Jenya firuz aka', 'foydalanuvchi', 5604, '1', '', 'glm', 0),
(141, 521308415, 'Abdug‘ofur loyish', 'foydalanuvchi', 8286, '1', '', 'glm', 0),
(142, 862379682, 'abdurahmon katta', 'foydalanuvchi', 6468, '1', '', 'glm', 0),
(146, 631592388, 'Olim aka', 'admin', 1961, '1', '', 'ay', 0),
(147, 922735267, 'sayohat laziZ', 'foydalanuvchi', 1892, '1', '', 'glm', 0),
(148, 407993117, 'Leader navruz', 'foydalanuvchi', 1382, '1', '', 'glm', 0),
(149, 649345358, 'Suxrob aka kal', 'foydalanuvchi', 6659, '1', '', 'glm', 0),
(154, 106195171, 'Payariq murod aka', 'foydalanuvchi', 9039, '1', '', 'glm', 0),
(155, 865963156, 'Leader shahzod', 'foydalanuvchi', 6345, '1', '', 'glm', 0),
(157, 499816482, 'shoxa', 'admin', 0, '1', '', 'ay', 0),
(159, 1030434914, 'Jo''rabek', 'admin', 0, '1', '', 'ay', 0),
(160, 436619084, 'Rustam ishtxon', 'foydalanuvchi', 1222, '1', '', 'glm', 0),
(162, 4433513, 'dilshod aka leniskiy', 'foydalanuvchi', 3785, '1', '', 'glm', 0),
(163, 1027510026, 'Jaga aka ozod', 'foydalanuvchi', 8131, '1', '', 'glm', 0),
(164, 6178426, 'Hojiakbar', 'foydalanuvchi', 6982, '1', '', 'glm', 0),
(165, 675545645, 'UmS faridun', 'foydalanuvchi', 7052, '1', '', 'glm', 0),
(166, 516186299, 'shorux 1etaj', 'foydalanuvchi', 7948, '1', '', 'glm', 0),
(167, 1142854974, 'Ilhom bul', 'foydalanuvchi', 6751, '1', '', 'glm', 0),
(168, 56234479, 'Anvar elek farrux', 'foydalanuvchi', 7954, '1', '', 'glm', 0),
(169, 1096154076, 'ortga', '', 7388, '4', '', 'foypa', 1),
(170, 74250183, '', '', 0, '4', '', 'foy', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `qadam`
--

CREATE TABLE IF NOT EXISTS `qadam` (
  `id` int(11) NOT NULL,
  `foyid` varchar(160) NOT NULL,
  `joy` varchar(160) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `qadam`
--

INSERT INTO `qadam` (`id`, `foyid`, `joy`) VALUES
(4, '499816482', '30'),
(5, '1030434914', '30'),
(6, '631592388', '60'),
(7, '437610776', '30');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `baze`
--
ALTER TABLE `baze`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `qadam`
--
ALTER TABLE `qadam`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `baze`
--
ALTER TABLE `baze`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=171;
--
-- AUTO_INCREMENT для таблицы `qadam`
--
ALTER TABLE `qadam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
