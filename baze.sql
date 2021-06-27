-- phpMyAdmin SQL Dump
-- version 4.2.12deb2+deb8u6
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Фев 10 2020 г., 13:48
-- Версия сервера: 5.5.62-0+deb8u1
-- Версия PHP: 5.6.40-0+deb8u7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

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
) ENGINE=InnoDB AUTO_INCREMENT=155 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `baze`
--

INSERT INTO `baze` (`id`, `foyid`, `fin`, `kim`, `parol`, `aktiv`, `papka`, `qadam`, `xatolik`) VALUES
(1, 99, 'admin', '', 1515, '2', '[{"callback_data":"*619611724","text":"Ikrom aka bobur++"}],[{"callback_data":"*516186299","text":"Shorux aka bobur++"}],[{"callback_data":"*6178426","text":"Hojiakbar++"}],[{"callback_data":"*35723750","text":"Sanjar aka++"}],[{"callback_data":"*211652931","text":"Jaga aka--"}],[{"callback_data":"*190049188","text":"Jenya oyti++"}],[{"callback_data":"*47846389","text":"Behruz++"}],[{"callback_data":"*117000577","text":"Ozod aka 2etaj++"}],[{"callback_data":"*867323124","text":"Sanat aka amir--"}],[{"callback_data":"*507018264","text":"Sanat aka 2etaj--"}],[{"callback_data":"*458791872","text":"Ums--"}],[{"callback_data":"*394645836","text":"Ozoda oyti--"}],[{"callback_data":"*56234479","text":"Anvar elektraset--"}],[{"callback_data":"*795183550","text":"Anvar elektraset--"}],[{"callback_data":"*57162514","text":"borka aka do’koni amri--"}],[{"callback_data":"*939336898","text":"Anvar elektraset--"}],[{"callback_data":"*331901699","text":"Ikrom aka sum--"}],[{"callback_data":"*35726504","text":"Jamol Gum++"}],[{"callback_data":"*771275404","text":"Sherzod Elektrasvet++"}],[{"callback_data":"*277291536","text":"Амир Электросеть--"}],[{"callback_data":"*110475753","text":"Mexroj artel--"}],[{"callback_data":"*343859193","text":"Sanat gum++"}],[{"callback_data":"*215333459","text":"Boxa elektra sivet--"}],[{"callback_data":"*355115239","text":"Zarrux--"}],[{"callback_data":"*236159879","text":"Domot--"}],[{"callback_data":"*212314149","text":"Jafar amakash--"}],[{"callback_data":"*769368725","text":"Hoji akbar++"}],[{"callback_data":"*676811711","text":"Uchqun aka--"}],[{"callback_data":"*560787077","text":"farrux leader++"}],[{"callback_data":"*70124252","text":"Shuhrat sum--"}],[{"callback_data":"*352665578","text":"Ozoda++"}],[{"callback_data":"*76950792","text":"Odil kredit--"}],[{"callback_data":"*110995010","text":"Nuri aka++"}],[{"callback_data":"*576965177","text":"Jamel elektraset--"}],[{"callback_data":"*429330943","text":"Bahodur--"}],[{"callback_data":"*12792484","text":"nuri aka elektraset--"}],[{"callback_data":"*106548604","text":"Ashraf milliy kredit--"}],[{"callback_data":"*545867006","text":"Shaxram aka++"}],[{"callback_data":"*375331026","text":"ozod 2etaj++"}],[{"callback_data":"*703509997","text":"Tada milliy kredit--"}],[{"callback_data":"*7068304","text":"Joni padval--"}],[{"callback_data":"*5065451","text":"Dilfuza oyti--"}],[{"callback_data":"*317934611","text":"Баходур--"}],[{"callback_data":"*342349344","text":"Shuhrat aka sum++"}],[{"callback_data":"*345997720","text":"Murod aka tayloq--"}],[{"callback_data":"*2024385","text":"Jahongir++"}],[{"callback_data":"*2689180","text":"Fayoz--"}],[{"callback_data":"*187451567","text":"Amri 2etaj++"}],[{"callback_data":"*289008300","text":"Alisher aka dom--"}],[{"callback_data":"*891241663","text":"Alisher aka... dom++"}],[{"callback_data":"*1851355","text":"Sherzod urgut--"}],[{"callback_data":"*68636235","text":"Max kampitur--"}],[{"callback_data":"*132699809","text":"Olim aka shodiyona--"}],[{"callback_data":"*33774342","text":"Ibrohim urgut++"}],[{"callback_data":"*300361309","text":"Zapchast bozor kredit--"}],[{"callback_data":"*216390523","text":"Sheroz shodiyona--"}],[{"callback_data":"*718503329","text":"Firuz++"}],[{"callback_data":"*1029390089","text":"Tillo++"}],[{"callback_data":"*851450683","text":"Laziz sayohat--"}],[{"callback_data":"*12343965","text":"Karzinka--"}],[{"callback_data":"*531293135","text":"Jahongir 2etaj olim aka--"}],[{"callback_data":"*675545645","text":"Ums--"}],[{"callback_data":"*973993064","text":"Jaga aka ozod--"}],[{"callback_data":"*78269249","text":"Navruz--"}],[{"callback_data":"*33774342","text":"Ibrokhim payariq--"}],[{"callback_data":"*342349344","text":"Shuhrat sum--"}],[{"callback_data":"*46325917","text":"Sobir dvores--"}],[{"callback_data":"*57938591","text":"Aziz--"}],[{"callback_data":"*739252379","text":"Ums--"}],[{"callback_data":"*3082932","text":"Sherzod bul--"}],[{"callback_data":"*603699296","text":"Farzod urgut--"}],[{"callback_data":"*285171727","text":"oybek isht--"}],[{"callback_data":"*227856720","text":"Jovlon jomboy--"}],[{"callback_data":"*484632029","text":"Farxod bul++"}],[{"callback_data":"*1027510026","text":"Ozod jaga aka--"}],[{"callback_data":"*78749865","text":"Abdug‘ofur loyish--"}],[{"callback_data":"*141365967","text":"Tohir oqmachit--"}],[{"callback_data":"*117000577","text":"Ozod 2etaj bahodir--"}],[{"callback_data":"*891241663","text":"Alisher dom azi++"}],[{"callback_data":"*619611724","text":"Bobur aka ikrom++"}],[{"callback_data":"*516186299","text":"Shorux aka++"}],[{"callback_data":"*545867006","text":"shaxram++"}],[{"callback_data":"*47846389","text":"Behruz aka++"}],[{"callback_data":"*6178426","text":"Hojiakbar++"}],[{"callback_data":"*769368725","text":"Akobir aja++"}],[{"callback_data":"*795183550","text":"Anvar elek++"}],[{"callback_data":"*343859193","text":"Sanat gum++"}],[{"callback_data":"*275807095","text":"Jenya oyti++"}],[{"callback_data":"*985132089","text":"Jenya firuz aka++"}],[{"callback_data":"*187451567","text":"Amri aka++"}],[{"callback_data":"*30384069","text":"ulug’bek aka abdullo--"}],[{"callback_data":"*1027901","text":"Ulugbek--"}],[{"callback_data":"*12792484","text":"Nuri aka++"}],[{"callback_data":"*190049188","text":"Jenya++"}],[{"callback_data":"*212314149","text":"Jafar++"}],[{"callback_data":"*867323124","text":"Sanat aka amir++"}],[{"callback_data":"*507018264","text":"Sanat aka++"}],[{"callback_data":"*2024385","text":"Jahongir 2etaj++"}],[{"callback_data":"*531293135","text":"Jahongir 2etaj olim aka++"}],[{"callback_data":"*521308415","text":"Abdug‘ofur loyish++"}],[{"callback_data":"*862379682","text":"abdurahmon katta++"}],[{"callback_data":"*783466822","text":"Davlat mikrarayon++"}],[{"callback_data":"*718503329","text":"firuz siyob++"}],[{"callback_data":"*57162514","text":"borka aka amri++"}],[{"callback_data":"*3082932","text":"Sherzod aka bul++"}],[{"callback_data":"*33774342","text":"PAYARIQ ibrokhim++"}],[{"callback_data":"*394645836","text":"Aka zafar++"}],[{"callback_data":"*675545645","text":"Faridun UMS++"}],[{"callback_data":"*1851355","text":"Aka sherzod urgut++"}],[{"callback_data":"*407993117","text":"Leader navruz++"}],[{"callback_data":"*649345358","text":"Suxrob aka kal++"}],[{"callback_data":"*602494977","text":"Selskiy doniyor++"}],[{"callback_data":"*375331026","text":"2etaj firuz aka++"}],[{"callback_data":"*394365112","text":"Shukur aka loyish++"}],[{"callback_data":"*106195171","text":"Payariq murod aka++"}]', '', 0),
(33, 1030434914, 'admin', 'admin', 0, '1', '', 'ay', 0),
(35, 599773625, 'Taxmina', 'admin', 0, '1', '', 'glm', 0),
(36, 443058910, 'Davlat', 'admin', 0, '1', '', 'adm', 0),
(37, 619611724, 'Bobur aka ikrom', 'foydalanuvchi', 3453, '1', '', 'glm', 0),
(38, 516186299, 'Shorux aka', 'foydalanuvchi', 1562, '0', '', 'glm', 1),
(39, 6178426, 'Hojiakbar', 'foydalanuvchi', 8439, '0', '', 'glm', 0),
(40, 769368725, 'Akobir aja', 'foydalanuvchi', 7199, '1', '', 'glm', 1),
(41, 35723750, 'Sanjar aka', 'foydalanuvchi', 3419, '0', '', 'glm', 0),
(42, 211652931, 'Jaga aka', 'foydalanuvchi', 3333, '0', '', 'glm', 0),
(43, 190049188, 'Jenya', 'foydalanuvchi', 7121, '1', '', 'glm', 0),
(44, 47846389, 'Behruz aka', 'foydalanuvchi', 6689, '0', '', 'glm', 0),
(45, 117000577, 'Ozod 2etaj bahodir', 'foydalanuvchi', 8664, '0', '', 'glm', 0),
(46, 867323124, 'Sanat aka amir', 'foydalanuvchi', 2834, '1', '', 'glm', 0),
(47, 507018264, 'Sanat aka', 'foydalanuvchi', 3548, '1', '', 'glm', 0),
(48, 458791872, 'Ums', 'foydalanuvchi', 4760, '0', '', 'glm', 0),
(49, 394645836, 'Aka zafar', 'foydalanuvchi', 8364, '1', '', 'glm', 0),
(50, 56234479, 'Sum Farrux', 'foydalanuvchi', 2028, '1', '', 'glm', 0),
(51, 795183550, 'Anvar elek', 'foydalanuvchi', 7051, '1', '', 'glm', 0),
(52, 187451567, 'Amri aka', 'foydalanuvchi', 6762, '1', '', 'glm', 0),
(53, 57162514, 'borka aka amri', 'foydalanuvchi', 7933, '1', '', 'glm', 0),
(54, 939336898, 'Anvar elektraset', 'foydalanuvchi', 8092, '0', '', 'glm', 0),
(55, 331901699, 'Ikrom aka sum', 'foydalanuvchi', 2662, '0', '', 'glm', 0),
(56, 78269249, 'Navruz', 'foydalanuvchi', 9287, '0', '', 'glm', 0),
(57, 35726504, 'Jamol Gum', 'foydalanuvchi', 9442, '1', '', 'glm', 0),
(58, 771275404, 'Sherzod Elektrasvet', 'foydalanuvchi', 5989, '0', '', 'glm', 0),
(59, 277291536, 'Амир Электросеть', 'foydalanuvchi', 9086, '0', '', 'glm', 0),
(60, 110475753, 'Mexroj artel', 'foydalanuvchi', 3399, '0', '', 'glm', 1),
(61, 343859193, 'Sanat gum', 'foydalanuvchi', 3487, '1', '', 'glm', 0),
(62, 215333459, 'Boxa elektra sivet', 'foydalanuvchi', 6455, '0', '', 'glm', 0),
(63, 355115239, 'Zarrux', 'foydalanuvchi', 5034, '0', '', 'glm', 0),
(64, 74250183, '', '', 0, '4', '', 'foy', 0),
(65, 236159879, 'Domot', 'foydalanuvchi', 1174, '0', '', 'glm', 0),
(66, 212314149, 'Jafar', 'foydalanuvchi', 6585, '1', '', 'glm', 0),
(67, 676811711, 'Uchqun aka', 'foydalanuvchi', 3289, '0', '', 'glm', 0),
(68, 560787077, 'farrux leader', 'foydalanuvchi', 6216, '0', '', 'glm', 0),
(69, 70124252, 'Shuhrat aka sum farxod', 'foydalanuvchi', 7374, '1', '', 'glm', 0),
(70, 352665578, 'Ozoda', 'foydalanuvchi', 8565, '0', '', 'glm', 0),
(71, 76950792, 'Odil kredit', 'foydalanuvchi', 9758, '0', '', 'glm', 1),
(72, 437610776, 'ortga', 'admin', 0, '1', '', 'ay', 0),
(73, 110995010, 'Nurik', 'admin', 5147, '1', '', 'glm', 1),
(74, 576965177, 'Jamel elektraset', 'foydalanuvchi', 7583, '0', '', 'glm', 0),
(75, 429330943, 'Bahodur', 'foydalanuvchi', 5508, '0', '', 'glm', 2),
(76, 12792484, 'Nuri aka', 'foydalanuvchi', 1741, '1', '', 'glm', 0),
(77, 106548604, 'Ashraf milliy kredit', 'foydalanuvchi', 3793, '0', '', 'glm', 0),
(78, 545867006, 'shaxram', 'foydalanuvchi', 3266, '0', '', 'glm', 0),
(79, 375331026, '2etaj firuz aka', 'foydalanuvchi', 3198, '1', '', 'glm', 0),
(80, 703509997, 'Tada milliy kredit', 'foydalanuvchi', 8526, '0', '', 'glm', 0),
(81, 7068304, 'Joni padval', 'foydalanuvchi', 1475, '0', '', 'glm', 0),
(82, 5065451, 'Dilfuza oyti', 'foydalanuvchi', 9353, '0', '', 'glm', 0),
(84, 806267184, 'navruz sum', '', 9467, '4', '', 'foypa', 2),
(85, 317934611, 'Баходур', 'foydalanuvchi', 9209, '0', '', 'glm', 1),
(86, 342349344, 'Sum shuhrat aka', 'foydalanuvchi', 7860, '1', '', 'glm', 1),
(87, 345997720, 'Murod aka tayloq', 'foydalanuvchi', 6458, '0', '', 'glm', 0),
(88, 2024385, 'Jahongir 2etaj', 'foydalanuvchi', 9004, '1', '', 'glm', 0),
(89, 61429750, 'Mexribon', 'admin', 0, '1', '', 'ay', 0),
(90, 116857112, 'Madina', 'admin', 0, '1', '', 'glm', 0),
(91, 236056958, 'B', '', 2371, '4', '', 'foypa', 0),
(92, 2689180, 'Fayoz', 'foydalanuvchi', 5859, '0', '', 'glm', 0),
(93, 101996256, '', '', 0, '4', '', 'adm', 0),
(94, 127051026, '', '', 0, '4', '', 'adm', 0),
(96, 499816482, 'jhgfd', 'admin', 0, '1', '1', 'ay', 1),
(97, 289008300, 'Alisher aka dom', 'foydalanuvchi', 3061, '0', '', 'glm', 0),
(98, 891241663, 'Alisher dom azi', 'foydalanuvchi', 5979, '1', '', 'glm', 0),
(99, 1851355, 'Aka sherzod urgut', 'foydalanuvchi', 7848, '1', '', 'glm', 1),
(100, 68636235, 'Max kampitur', 'foydalanuvchi', 9370, '0', '', 'glm', 0),
(101, 132699809, 'Olim aka shodiyona', 'foydalanuvchi', 4562, '0', '', 'glm', 0),
(102, 33774342, 'PAYARIQ ibrokhim', 'foydalanuvchi', 6153, '1', '', 'glm', 0),
(103, 180942968, '', '', 0, '4', '', 'foy', 0),
(104, 300361309, 'Zapchast bozor kredit', 'foydalanuvchi', 3295, '0', '', 'glm', 0),
(105, 216390523, 'Sheroz shodiyona', 'foydalanuvchi', 1068, '0', '', 'glm', 0),
(106, 282168911, '/start', '', 7410, '4', '', 'foypa', 0),
(107, 718503329, 'firuz siyob', 'foydalanuvchi', 3979, '1', '', 'glm', 0),
(108, 1029390089, 'Tillo', 'foydalanuvchi', 5524, '1', '', 'glm', 0),
(109, 851450683, 'Laziz sayohat', 'foydalanuvchi', 1438, '0', '', 'glm', 1),
(110, 12343965, 'Karzinka', 'foydalanuvchi', 3306, '0', '', 'glm', 0),
(111, 531293135, 'Jahongir 2etaj olim aka', 'foydalanuvchi', 8799, '1', '', 'glm', 1),
(112, 675545645, 'Faridun UMS', 'foydalanuvchi', 1769, '1', '', 'glm', 0),
(113, 973993064, 'Jaga aka ozod', 'foydalanuvchi', 9435, '0', '', 'glm', 0),
(114, 33158997, 'Muxi', '', 2324, '4', '', 'foypa', 1),
(115, 567774390, 'zafar', 'foydalanuvchi', 0, '1', '', 'boshm', 0),
(116, 750234043, 'Mardon', '', 2497, '4', '', 'boshm', 1),
(117, 46325917, 'Sobir dvores', 'foydalanuvchi', 3963, '0', '', 'glm', 0),
(118, 57938591, 'Aziz', 'foydalanuvchi', 3155, '0', '', 'glm', 0),
(119, 739252379, 'Ums', 'foydalanuvchi', 3660, '0', '', 'glm', 0),
(120, 3082932, 'Sherzod aka bul', 'foydalanuvchi', 9362, '1', '', 'glm', 0),
(121, 777685037, 'Marcelo', '', 3163, '4', '', 'adm', 0),
(122, 917390894, 'Muhammadbotirxon', '', 6237, '4', '', 'foypa', 0),
(123, 603699296, 'Farzod urgut', 'foydalanuvchi', 3062, '0', '', 'glm', 0),
(124, 285171727, 'Ishtxon oybek aka', 'foydalanuvchi', 8150, '1', '', 'glm', 0),
(125, 227856720, 'Jovlon jomboy', 'foydalanuvchi', 8393, '0', '', 'glm', 0),
(126, 950999867, 'Sheroz', 'admin', 0, '1', '', 'glm', 0),
(127, 484632029, 'Farxod bul', 'foydalanuvchi', 7794, '1', '', 'glm', 0),
(128, 787717269, '', '', 0, '4', '', 'foy', 0),
(129, 1027510026, 'Ozod jaga aka', 'foydalanuvchi', 7625, '0', '', 'glm', 0),
(130, 78749865, 'Abdug‘ofur loyish', 'foydalanuvchi', 6586, '0', '', 'glm', 0),
(131, 141365967, 'Oqmachit tohir', 'foydalanuvchi', 9293, '1', '', 'glm', 0),
(132, 1030434914, '', 'admin', 0, '1', '', 'ay', 0),
(133, 397449790, 'Sardor aka', '', 3962, '4', '', 'foypa', 2),
(134, 56839125, 'Komil tayloq', '', 3248, '4', '', 'foypa', 1),
(135, 275807095, 'Jenya oyti', 'foydalanuvchi', 4350, '1', '', 'glm', 0),
(136, 985132089, 'Jenya firuz aka', 'foydalanuvchi', 5604, '1', '', 'glm', 0),
(137, 30384069, 'ulug’bek aka abdullo', 'foydalanuvchi', 6052, '0', '', 'glm', 0),
(138, 1027901, 'Ulugbek', 'foydalanuvchi', 1894, '0', '', 'glm', 0),
(139, 1040982686, 'ortga', 'admin', 0, '1', '', 'ay', 0),
(140, 973252700, 'Sheroz', 'admin', 0, '1', '', 'ay', 0),
(141, 521308415, 'Abdug‘ofur loyish', 'foydalanuvchi', 8286, '1', '', 'glm', 0),
(142, 862379682, 'abdurahmon katta', 'foydalanuvchi', 6468, '1', '', 'glm', 0),
(143, 783466822, 'Davlat mikrarayon', 'foydalanuvchi', 1114, '1', '', 'glm', 0),
(144, 160941676, 'Davlat Mirorrayon', '', 5565, '4', '', 'boshm', 0),
(145, 132893959, '/stop', '', 2435, '4', '', 'foypa', 0),
(146, 631592388, 'Olim aka', 'admin', 1961, '1', '', 'ay', 0),
(147, 922735267, 'sayohat laziZ', 'foydalanuvchi', 1892, '1', '', 'glm', 0),
(148, 407993117, 'Leader navruz', 'foydalanuvchi', 1382, '1', '', 'glm', 0),
(149, 649345358, 'Suxrob aka kal', 'foydalanuvchi', 6659, '1', '', 'glm', 0),
(150, 602494977, 'Selskiy doniyor', 'foydalanuvchi', 2782, '1', '', 'glm', 0),
(151, 1063139395, 'Ахрор', '', 1556, '4', '', 'boshm', 0),
(152, 884784349, 'Jaloliddin', '', 2017, '4', '', 'foypa', 1),
(153, 394365112, 'Shukur aka loyish', 'foydalanuvchi', 9991, '1', '', 'glm', 0),
(154, 106195171, 'Payariq murod aka', 'foydalanuvchi', 9039, '1', '', 'glm', 0);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `baze`
--
ALTER TABLE `baze`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `baze`
--
ALTER TABLE `baze`
MODIFY `id` int(9) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=155;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
