-- phpMyAdmin SQL Dump
-- version 4.3.8
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 26, 2016 at 04:59 PM
-- Server version: 5.6.32-78.1
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `luxuryfo_cars`
--

-- --------------------------------------------------------

--
-- Table structure for table `contents`
--

CREATE TABLE IF NOT EXISTS `contents` (
  `page` varchar(255) COLLATE utf8_bin NOT NULL,
  `content` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `contents`
--

INSERT INTO `contents` (`page`, `content`) VALUES
('aboutus', '<h1 style="text-align: center;">Luxury4Travel aaaaa</h1>\r\n<blockquote>\r\n<blockquote>\r\n<blockquote>\r\n<blockquote>\r\n<blockquote>\r\n<blockquote>\r\n<ul>\r\n<li><strong>our location in : hurghada -&nbsp;</strong>Makadi Bay\r\n<div id="tw-target-text-container" class="tw-ta-container tw-nfl" style="position: relative; padding-top: 20px; color: #212121; font-family: arial, sans-serif; font-size: 0px; text-align: right;">&nbsp;</div>\r\n</li>\r\n<li>we have merciedes S500 +S400</li>\r\n<li>merciedes &nbsp;E250&nbsp;</li>\r\n<li>merciedes C180</li>\r\n<li>ALL BUS&nbsp;</li>\r\n<li>KIA SERATO&nbsp;</li>\r\n</ul>\r\n</blockquote>\r\n</blockquote>\r\n</blockquote>\r\n</blockquote>\r\n</blockquote>\r\n</blockquote>'),
('contactus', '<p style="text-align: center;"><strong>our phone numbers:&nbsp;</strong><strong style="text-align: center;">00201229704466</strong></p>\r\n<p style="text-align: center;"><strong style="text-align: center;">00201016340022</strong></p>\r\n<p>&nbsp;</p>'),
('policy', '<p>ffffffffffffffffffffffffffffffbkklnvcxzdgvdsarjjl</p>'),
('title', 'luxury4travel'),
('aboutus_ar', '<h1 style="text-align: center;">Luxury4Travel aaaaa</h1>\r\n<blockquote>\r\n<blockquote>\r\n<blockquote>\r\n<blockquote>\r\n<blockquote>\r\n<blockquote>\r\n<ul>\r\n<li><strong>يتواجد مقر الشركه :الغردقة -فى خليج مكادى</strong></li>\r\n<li><strong>يتواجد سيارات مرسيدس E250&nbsp;</strong></li>\r\n<li><strong>مرسيدس c180</strong></li>\r\n<li><strong>مرسيدس فيانو&nbsp;</strong></li>\r\n<li><strong>مرسيدس اس 500</strong></li>\r\n<li><strong>جميع الباصات&nbsp;</strong></li>\r\n<li><strong>وسيارات الكيا سيراتوا&nbsp;</strong></li>\r\n<li></li>\r\n<li></li>\r\n</ul>\r\n</blockquote>\r\n</blockquote>\r\n</blockquote>\r\n</blockquote>\r\n</blockquote>\r\n</blockquote>'),
('contactus_ar', '<p style="text-align: center;"><strong>للتواصل معنا :00201229704466</strong></p>\r\n<p style="text-align: center;"><strong>00201016340022</strong></p>\r\n<p><strong>&nbsp;</strong></p>'),
('policy_ar', '<p>iladfnoadinfgiodfnoidfidfgndfndfkjnنيبمنيمبلميب</p>'),
('title_ar', 'لوكسري فور ترافل');

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE IF NOT EXISTS `notifications` (
  `id` int(11) NOT NULL,
  `status` int(2) NOT NULL,
  `type` varchar(255) COLLATE utf8_bin NOT NULL,
  `post_id` varchar(11) COLLATE utf8_bin NOT NULL,
  `username` varchar(55) COLLATE utf8_bin NOT NULL,
  `notes` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `status`, `type`, `post_id`, `username`, `notes`) VALUES
(1, 1, 'alert', ' ', 'muhammed', 'hiiiiiiiiiiiiiiiiii'),
(2, 1, 'alert', ' ', 'muhammed', 'ddddddddddddddddddddddddddddddddddd'),
(3, 1, 'refused', '1', 'muhammed', 'لقد رفضنا العرض لانك نصاب'),
(4, 1, 'accepted', '1', 'muhammed', 'مبروك '),
(5, 1, 'refused', '4', 'muhammed', 'لانك وحش'),
(6, 1, 'refused', '6', 'muhammed', 'نمن'),
(7, 1, 'accepted', '3', 'muhammed', 'good'),
(8, 1, 'refused', '8', 'muhammed', 'ةت '),
(9, 1, 'alert', ' ', 'muhammed', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa'),
(10, 1, 'alert', ' ', 'islamm', 'aaaaaaaaaaaaaaaaaaaaa'),
(11, 1, 'accepted', '8', 'islamm', 'تمت الموافقة'),
(12, 1, 'refused', '6', 'islamm', 'تم الرفض'),
(13, 1, 'accepted', '8', 'muhammed', 'rb'),
(14, 1, 'accepted', '6', 'muhammed', 'df'),
(15, 1, 'accepted', '8', 'muhammed', 'ىلغتفيغف'),
(16, 1, 'refused', '10', 'yasser', 'انا رفضت علشان سعرك مش كويس '),
(17, 1, 'accepted', '1', 'ahmed', 'انا موافق'),
(18, 1, 'alert', ' ', 'ahmed', 'ازيك يا احمد عامل ايه '),
(19, 1, 'refused', '1', 'ahmed', 'علشان مش بطلع عربية من غير سواق '),
(20, 1, 'alert', ' ', 'ahmed', 'انا عاوز اكل '),
(21, 1, 'accepted', '8', 'ahmed', 'تمام بس انا هاخد فلوس زيادة ');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(11) NOT NULL,
  `title` text COLLATE utf8_bin NOT NULL,
  `img` varchar(550) COLLATE utf8_bin NOT NULL,
  `description` text COLLATE utf8_bin NOT NULL,
  `car_brand` varchar(55) COLLATE utf8_bin NOT NULL,
  `car_model` varchar(55) COLLATE utf8_bin NOT NULL,
  `car_color` varchar(55) COLLATE utf8_bin NOT NULL,
  `car_price` text COLLATE utf8_bin NOT NULL,
  `car_status` varchar(55) COLLATE utf8_bin NOT NULL,
  `car_year` varchar(11) CHARACTER SET latin1 NOT NULL,
  `keywords` text COLLATE utf8_bin NOT NULL,
  `related_posts` text COLLATE utf8_bin NOT NULL,
  `title_ar` text COLLATE utf8_bin NOT NULL,
  `description_ar` text COLLATE utf8_bin NOT NULL,
  `car_brand_ar` varchar(55) COLLATE utf8_bin NOT NULL,
  `car_model_ar` varchar(55) COLLATE utf8_bin NOT NULL,
  `car_color_ar` varchar(55) COLLATE utf8_bin NOT NULL,
  `car_status_ar` varchar(55) COLLATE utf8_bin NOT NULL,
  `car_price_ar` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `img`, `description`, `car_brand`, `car_model`, `car_color`, `car_price`, `car_status`, `car_year`, `keywords`, `related_posts`, `title_ar`, `description_ar`, `car_brand_ar`, `car_model_ar`, `car_color_ar`, `car_status_ar`, `car_price_ar`) VALUES
(5, 'mercedes b180', 'http://luxury4travel.com/imgs/x/13619854_1755356641376377_8223421477001680107_n.jpg', 'sssssss', 'mercedes ', 'b180', 'silver', 'dd::rr::10::10---', 'unavailable', '2015', 'mercedes ,mercedes,b180,سيارة,مرسيدسc180,,silver,2015', '8,6,', 'سيارة مرسيدسc180', 'سسسس', 'مرسيدس', 'c180', 'فضي', 'غير متاحة', 'سس::سس::10::10---'),
(6, 'kia', 'http://luxury4travel.com/imgs/x/13615060_1755362501375791_2466701061027357833_n.jpg', 'excellent', 'kia', '2016', 'silver', 'Hurghada::El Gouna::30::25---Hurghada::EL-Marriott   -  Arabaia ::20::15---Hurghada::Albatros-sunRise -Golden5::25::20---Hurghada::Sahl Hasheesh Hotels ::30::25---Hurghada::somabay Hotels::50::40---Hurghada::Magic Life::80::60---Hurghada::Kaiser Hotels::100::75---Hurghada::Marsa Alam ::150::100---Hurghada::(Luxor (just going::175::150---Hurghada::(Aswan (just going::300::275---Hurghada::(cairo (just going::300::275---Hurghada::(Luxor(going &return::200::180---Hurghada::(Aswan (going & return::400::375---Hurghada::(Cairo(going & return ::400::375---', 'available', '2016', 'kia,kia,كيا,,,silver,2016', '8,5,', 'كيا ', 'ف حالة ممتازة ', 'كيا ', '2016', 'فضى ', 'متاحة', 'الغردقة ::الجونة ::30::25---الغردقة ::الماريوت - عرابيه - هيلتون بلازا ::20::15---الغردقة ::الباتروس- صن رايز - جولدن 5::25::20---الغردقة ::سهل حشيش::30::25---الغردقة ::فنادق سوماباى ::50::40---الغردقة ::ماجيك لايف::80::60---الغردقة ::القيصر ::100::75---الغردقة ::مرسى علم ::150::100---الغردقة ::الاقصر (ذهاب فقط)::175::150---الغردقة ::أسوان (ذهاب فقط)::300::275---الغردقة ::القاهرة (ذهاب فقط)::300::275---الغردقة ::الاقصر (ذهاب وعودة )::200::180---الغردقة ::أسوان (ذهاب وعوده)::400::375---الغردقة ::القاهرة (ذهاب وعوده )::400::375---'),
(8, 'Mercedes ', 'http://luxury4travel.com/imgs/x/14647214_1473641972652104_1617253997_o.jpg', 'gooood car', 'E250 Mercedes ', 'E250 , 2016', 'red', 'Hurghada::El Gouna::60::50---Hurghada::EL-Marriott   -  Arabaia ::35::30---Hurghada::Albatros-sunRise -Golden5::40::35---Hurghada::Sahl Hasheesh Hotels ::45::40---Hurghada::somabay Hotels::70::60---Hurghada::Magic Life::110::90---Hurghada::Kaiser Hotels::150::110---Hurghada::Marsa Alam ::200::150---Hurghada::(Luxor (just going::220::175---Hurghada::(Aswan (just going::375::350---Hurghada::(cairo (just going::375::350---Hurghada::(Luxor(going &return::300::250---Hurghada::(Aswan (going & return::500::450---Hurghada::(Cairo(going & return ::500::450---', 'available', '2016', 'E250 Mercedes ,Mercedes,,مرسيدس,E250,,red,2016', '6,5,', 'مرسيدس E250', 'سيارة رياضية ف حالة ممتازة ', 'مرسيدس', '2016', 'فضى ', 'متاحة', 'الغردقة ::الجونة ::60::50---الغردقة ::الماريوت - عرابيه - هيلتون بلازا ::35::30---الغردقة ::الباتروس- صن رايز - جولدن 5::40::35---الغردقة ::سهل حشيش::45::40---الغردقة ::فنادق سوماباى ::70::60---الغردقة ::ماجيك لايف::110::90---الغردقة ::القيصر ::150::110---الغردقة ::مرسى علم ::200::150---الغردقة ::الاقصر (ذهاب فقط)::220::175---الغردقة ::أسوان (ذهاب فقط)::375::350---الغردقة ::القاهرة (ذهاب فقط)::375::350---الغردقة ::الاقصر (ذهاب وعودة )::300::250---الغردقة ::أسوان (ذهاب وعوده)::500::450---الغردقة ::القاهرة (ذهاب وعوده )::500::450---');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `username` varchar(55) COLLATE utf8_bin NOT NULL,
  `password` varchar(55) COLLATE utf8_bin NOT NULL,
  `fullname` varchar(255) COLLATE utf8_bin NOT NULL,
  `email` varchar(300) COLLATE utf8_bin NOT NULL,
  `phone` varchar(25) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `fullname`, `email`, `phone`) VALUES
(5, 'ahmed', '1234567', 'ahmed mostafa', 'muhammed.rashad844@gmail.com', '010069666878'),
(6, 'xxxxxx', 'islam', 'islam xxx xzx', 'xxxxxislam@yahoo.com', '01023568979');

-- --------------------------------------------------------

--
-- Table structure for table `users_requests`
--

CREATE TABLE IF NOT EXISTS `users_requests` (
  `id` int(11) NOT NULL,
  `post_id` varchar(11) COLLATE utf8_bin NOT NULL,
  `username` varchar(255) COLLATE utf8_bin NOT NULL,
  `price` varchar(255) COLLATE utf8_bin NOT NULL,
  `notes` text COLLATE utf8_bin NOT NULL,
  `response` int(2) NOT NULL,
  `status` int(2) NOT NULL,
  `date` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `users_requests`
--

INSERT INTO `users_requests` (`id`, `post_id`, `username`, `price`, `notes`, `response`, `status`, `date`) VALUES
(1, '1', 'muhammed', 'من القاهرة إلى الاسكندرية', 'KRGNG', 1, 1, '2 October 2016'),
(2, '1', 'muhammed', 'من القاهرة إلى بنها', '', 1, 1, '2 October 2016'),
(3, '2', 'muhammed', 'من سس إلى يي', '', 0, 1, '2 October 2016'),
(4, '4', 'muhammed', 'From ss To ss = 10 = 10', '', 1, 1, '2 October 2016'),
(5, '1', 'muhammed', 'من الغردقة إلى سهل حشيش', '', 0, 1, '3 October 2016'),
(6, '1', 'muhammed', 'من الغردقة إلى فندق الماريوت', '', 0, 1, '3 October 2016'),
(7, '1', 'muhammed', 'من الغردقة إلى أسوان (ذهابا فقط)', '', 0, 1, '3 October 2016'),
(8, '1', 'muhammed', 'From Hurghada To El Gouna = 50 = 40', 'hgtfjyt', 0, 1, '3 October 2016'),
(9, '1', 'muhammed', 'From Hurghada To El Gouna = 50 = 40', 'منبليتبرىيسبنترىسيبخلا', 0, 1, '3 October 2016'),
(10, '6', 'muhammed', 'From Hurghada To El Gouna = 30 = 25', '', 0, 1, '3 October 2016'),
(11, '6', 'muhammed', 'From Hurghada To El Gouna = 30 = 25', '', 1, 1, '3 October 2016'),
(12, '4', 'muhammed', 'From ss To ss = 10 = 10', '', 0, 1, '3 October 2016'),
(13, '2', 'muhammed', 'From xx To xx = aa = aa', 'مشلخيلصخهلصخقهلفهخسبلىلاىلاglksdfbsfg', 0, 1, '3 October 2016'),
(14, '5', 'muhammed', 'من سس إلى سس', 'ldkgs', 0, 1, '3 October 2016'),
(15, '4', 'islamm', 'من سس إلى يي', 'ffffffffffffffffffff', 0, 1, '3 October 2016'),
(16, '3', 'muhammed', 'From ddd To zz = 10 = 10', 'ghjkl', 1, 1, '4 October 2016'),
(17, '8', 'muhammed', 'من الغردقة إلى الجونة', '', 1, 1, '4 October 2016'),
(18, '8', 'islamm', 'From Hurghada To EL-Marriott   -  Arabaia  = 35 = 30', 'i want this car', 1, 1, '5 October 2016'),
(19, '6', 'islamm', 'من الغردقة إلى الجونة', 'اريد هذه السيارة', 1, 1, '5 October 2016'),
(20, '8', 'muhammed', 'From Hurghada To Sahl Hasheesh Hotels  = 45 = 40', 'wef', 1, 1, '5 October 2016'),
(21, '6', 'muhammed', 'From Hurghada To El Gouna = 30 = 25', '', 1, 1, '5 October 2016'),
(22, '1', 'muhammed', 'من الغردقة إلى فندق الماريوت', '', 0, 1, '5 October 2016'),
(23, '1', 'muhammed', 'من الغردقة إلى فندق الماريوت', '', 0, 1, '5 October 2016'),
(24, '8', 'muhammed', 'من الغردقة إلى الباتروس- صن رايز - جولدن 5', '', 1, 1, '5 October 2016'),
(25, '1', 'yasser', 'من الغردقة إلى سوماباى', 'انا عايزها من غير سواق', 0, 1, '6 October 2016'),
(26, '10', 'yasser', 'من إلى الباتروس- صن رايز - جولدن 5', 'انا عاوز عربيه حلوة ', 1, 1, '6 October 2016'),
(27, '6', 'muhammed', 'From Hurghada To Sahl Hasheesh Hotels  = 30 = 25', '', 0, 1, '20 October 2016'),
(28, '1', 'ahmed', 'From Hurghada To Albatros-sunRise -Golden5 = 30 = 25', 'انا عاوزها من غير سواق ', 1, 1, '27 October 2016'),
(29, '1', 'ahmed', 'من الغردقة إلى فندق الماريوت', 'عاوزها من غير سواق', 1, 1, '27 October 2016'),
(30, '8', 'ahmed', 'From Hurghada To EL-Marriott   -  Arabaia  = 35 = 30', 'انا عاوزها من غير سواق ', 1, 1, '27 October 2016');

-- --------------------------------------------------------

--
-- Table structure for table `visitors_requests`
--

CREATE TABLE IF NOT EXISTS `visitors_requests` (
  `id` int(11) NOT NULL,
  `status` int(2) NOT NULL,
  `post_id` varchar(10) COLLATE utf8_bin NOT NULL,
  `fullname` varchar(300) COLLATE utf8_bin NOT NULL,
  `phone` varchar(25) COLLATE utf8_bin NOT NULL,
  `price` text COLLATE utf8_bin NOT NULL,
  `date` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `visitors_requests`
--

INSERT INTO `visitors_requests` (`id`, `status`, `post_id`, `fullname`, `phone`, `price`, `date`) VALUES
(1, 1, '4', 'jfuyft', '32145657', 'From سس To يي = 20 dollar', '2 October 2016'),
(2, 1, '5', 'شش', 'ششش', 'From سس To سس = 10 dollar', '3 October 2016'),
(3, 1, '8', 'aaaa', 'aaaaa', 'From الغردقة  To مرسى علم  = 200 dollar', '5 October 2016'),
(4, 1, '2', 'محمد رشاد', '01023536789', 'From القاهرة To اسكندرية = 20 dollar', '5 October 2016'),
(5, 1, '8', 'zzzzzzzzzz', 'zzzzzzzzzz', 'From الغردقة  To الجونة  = 60 dollar', '5 October 2016'),
(6, 1, '1', 'arga', 'lgiard', 'From Hurghada To Albatros-sunRise -Golden5 = 30 dollar', '5 October 2016'),
(7, 1, '8', 'بيلا', 'يلايب', 'From Hurghada To El Gouna = 60 dollar', '5 October 2016'),
(8, 1, '8', 'jfd', '294829o5348', 'From Hurghada To Albatros-sunRise -Golden5 = 40 dollar', '5 October 2016'),
(9, 1, '6', 'yaseer', '1563728', 'From Hurghada To El Gouna = 30 dollar', '6 October 2016'),
(10, 1, '1', 'sally', '5678965', 'From Hurghada To El Gouna = 50 dollar', '8 October 2016'),
(11, 1, '1', 'fgdjh', 'ryfjjj', 'From Hurghada To EL-Marriott   -  Arabaia  = 25 dollar', '12 October 2016'),
(12, 1, '1', 'Muhammed Rashad', '010069666878', 'From الغردقة To فندق الماريوت  = 25 dollar', '27 October 2016'),
(13, 1, '1', 'Muhammed Rashad', '010069666878', 'From Hurghada To El Gouna = 50 dollar', '27 October 2016'),
(14, 1, '1', 'mohamed Rashad', '0109666878', 'From Hurghada To El Gouna = 50 dollar', '6 November 2016'),
(15, 0, '8', 'Dr w', 'gsgv', 'From Hurghada To (Luxor (just going = 220 dollar', '18 November 2016');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_requests`
--
ALTER TABLE `users_requests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visitors_requests`
--
ALTER TABLE `visitors_requests`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `users_requests`
--
ALTER TABLE `users_requests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `visitors_requests`
--
ALTER TABLE `visitors_requests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
