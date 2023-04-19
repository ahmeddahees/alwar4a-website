-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 21 أبريل 2022 الساعة 21:09
-- إصدار الخادم: 10.4.21-MariaDB
-- PHP Version: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `elwr4a`
--

-- --------------------------------------------------------

--
-- بنية الجدول `5amat`
--

CREATE TABLE `5amat` (
  `id` int(11) NOT NULL,
  `fullname` varchar(600) NOT NULL,
  `email` varchar(300) NOT NULL,
  `phone` int(40) NOT NULL,
  `flocation` varchar(400) NOT NULL,
  `nameghaz` varchar(900) NOT NULL,
  `ghazname` varchar(500) NOT NULL,
  `photo` varchar(1000) NOT NULL,
  `fdate` date NOT NULL,
  `wsfml4kla` varchar(9999) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `5amat`
--

INSERT INTO `5amat` (`id`, `fullname`, `email`, `phone`, `flocation`, `nameghaz`, `ghazname`, `photo`, `fdate`, `wsfml4kla`) VALUES
(4, 'أحمد دهيس', 'ahmeddahees7@gmail.com', 1150732543, 'سوهاج - جرجا - برديس', 'كمبيوتر', '', 'bigzack.png', '2022-04-22', 'شششششششششششششششششششششششش '),
(5, 'أحمد دهيس', 'ahmeddahees6@gmail.com', 1150732543, 'سوهاج - جرجا - برديس', 'شسبشسب', '', '2.png', '2022-04-16', 'خخخخخخخخخخخخخخخخخخخخخخخخخخخخخخخخخخخخ '),
(6, 'asfasf', 'ahmeddahees7@gmail.com', 1150732543, 'asfasfas', 'asfasfasf', 'مواد بناء وتشطيبات', '1.png', '2022-04-12', 'fsasfasf ');

-- --------------------------------------------------------

--
-- بنية الجدول `al23mal`
--

CREATE TABLE `al23mal` (
  `id` int(11) NOT NULL,
  `fname` varchar(1000) NOT NULL,
  `email` varchar(300) NOT NULL,
  `phone` int(40) NOT NULL,
  `flocation` varchar(1000) NOT NULL,
  `5dma` varchar(200) NOT NULL,
  `wsf` varchar(1000) NOT NULL,
  `ftime` date NOT NULL,
  `photo` varchar(9999) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `al23mal`
--

INSERT INTO `al23mal` (`id`, `fname`, `email`, `phone`, `flocation`, `5dma`, `wsf`, `ftime`, `photo`) VALUES
(5, 'أحمد محمد دهيس', 'ahmeddahees7@gmail.com', 1150732543, 'سوهاج - جرجا - برديس', 'طلب شركة تركيب مصاعد كهربائية', 'سشبشسبشسبشسبشسبشسبشسبشسبشسبشسبسشبسشبشسبشسبشسبشسسشلسلشسل ', '2022-04-05', 'pngegg (15).png'),
(6, 'طاهر رشيد', 'ahmeddahees6@gmail.com', 1150732543, 'سوهاج - جرجا - برديس', 'طلب خدمات التصميم الجرافيك و الويب والموبايل ابليكشن', 'شسبشسبشسبشسسسسسسسسسسسسسسسسس ', '2022-04-10', 'تدريبات نحوية نظام حديث بعد التعديل.pdf'),
(7, 'طاهر رشيد', 'ahmeddahees6@gmail.com', 2412412, 'سوهاج - جرجا - برديس', 'طلب خدمات التصميم الجرافيك و الويب والموبايل ابليكشن', 'ششششششششششششششش', '2022-04-10', 'تدريبات نحوية نظام حديث بعد التعديل.pdf');

-- --------------------------------------------------------

--
-- بنية الجدول `bepart`
--

CREATE TABLE `bepart` (
  `id` int(11) NOT NULL,
  `fullname` varchar(200) NOT NULL,
  `email` varchar(300) NOT NULL,
  `phone` int(40) NOT NULL,
  `flocation` varchar(1000) NOT NULL,
  `mgalwork` varchar(500) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `wsf` varchar(400) NOT NULL,
  `ftime` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `bepart`
--

INSERT INTO `bepart` (`id`, `fullname`, `email`, `phone`, `flocation`, `mgalwork`, `photo`, `wsf`, `ftime`) VALUES
(1, 'dasdasd', 'ahmeddahees7@gmail.com', 1150732543, 'asfasffs', 'asfasf', 'بورسلين-مموج-للأرضيات.jpg', 'asfasf ', '2022-04-06'),
(2, 'أحمد دهيس', 'ahmeddahees7@gmail.com', 2147483647, 'يحي الستي', 'مجال العمل ', 'تدريبات نحوية نظام حديث بعد التعديل.pdf', 'بشسبشسبشسبشسبشبشسبشسب ', '2022-04-10');

-- --------------------------------------------------------

--
-- بنية الجدول `elctronic`
--

CREATE TABLE `elctronic` (
  `id` int(11) NOT NULL,
  `fullname` varchar(600) NOT NULL,
  `email` varchar(1000) NOT NULL,
  `phone` int(40) NOT NULL,
  `flocation` varchar(1000) NOT NULL,
  `5dma` varchar(200) NOT NULL,
  `photo` varchar(2000) NOT NULL,
  `wsf` varchar(9999) NOT NULL,
  `ftime` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `elctronic`
--

INSERT INTO `elctronic` (`id`, `fullname`, `email`, `phone`, `flocation`, `5dma`, `photo`, `wsf`, `ftime`) VALUES
(6, 'ahmed dahhes', 'ahmeddahees7@gmail.com', 1150732543, 'sfasf', 'ورشة صيانة اللابتوب', '205425227_323769199251703_6432652879997531430_n.png', 'asssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss ', '2022-04-03'),
(7, 'شسشسبسشب', 'ahmeddahees7@gmail.com', 1150732543, 'شسبشسبشسبشسب', 'ورشة كاميرات مراقبة واجهزه امنيه', 'fire-png-44280.png', 'شسسسسسسسسسس ', '2022-04-28'),
(8, 'يحي', 'ahmeddahees7@gmail.com', 1150732543, 'سوهاج - جرجا - برديس', 'ورشة كاميرات مراقبة واجهزه امنيه', 'bigzack.png', 'ششششششششششششششششششششششششششششششششششششششششششششششش ', '2022-04-17'),
(9, 'ahmed dahhes', 'ahmeddahees7@gmail.com', 1150732543, 'سوهاج - جرجا - برديس', 'ورشة صيانة الموبايل', '3b2630c933a038a7d493219c508258d7.jpg', 'aaaaaaaaaaaaaaaaaa ', '2022-04-02');

-- --------------------------------------------------------

--
-- بنية الجدول `mlnzlya`
--

CREATE TABLE `mlnzlya` (
  `id` int(11) NOT NULL,
  `fullname` varchar(600) NOT NULL,
  `phone` int(40) NOT NULL,
  `flocation` varchar(600) NOT NULL,
  `email` varchar(400) NOT NULL,
  `5dma` varchar(900) NOT NULL,
  `photo` varchar(1000) NOT NULL,
  `wsf` varchar(1000) NOT NULL,
  `nameghaz` varchar(1000) NOT NULL,
  `fdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `mlnzlya`
--

INSERT INTO `mlnzlya` (`id`, `fullname`, `phone`, `flocation`, `email`, `5dma`, `photo`, `wsf`, `nameghaz`, `fdate`) VALUES
(1, 'asfasf', 1150732543, 'asfasf', 'ahmeddahees7@gmail.com', 'التليفزيون والريسيفر والدش', 'burger-Recovered.png', 'safasf ', 'asfasf', '0000-00-00'),
(2, 'أحمد دهيس', 1150732543, 'سوهاج - جرجا - برديس', 'ahmeddahees7@gmail.com', 'الدفيات', 'تدريبات نحوية نظام حديث بعد التعديل.pdf', 'بببببببببببببببببببببشسبشسب ', 'شسبشسب', '2022-04-11');

-- --------------------------------------------------------

--
-- بنية الجدول `mozf`
--

CREATE TABLE `mozf` (
  `id` int(11) NOT NULL,
  `companyname` varchar(1000) NOT NULL,
  `mgalcompany` varchar(1000) NOT NULL,
  `complocation` varchar(2000) NOT NULL,
  `compemail` varchar(1000) NOT NULL,
  `elmharatneed` varchar(500) NOT NULL,
  `cnumber` int(40) NOT NULL,
  `wsfelwzyfa` varchar(999) NOT NULL,
  `elmortp` int(10) NOT NULL,
  `elmo2halneed` varchar(500) NOT NULL,
  `mozfsent` varchar(999) NOT NULL,
  `anymore` varchar(3000) NOT NULL,
  `cdate` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `mozf`
--

INSERT INTO `mozf` (`id`, `companyname`, `mgalcompany`, `complocation`, `compemail`, `elmharatneed`, `cnumber`, `wsfelwzyfa`, `elmortp`, `elmo2halneed`, `mozfsent`, `anymore`, `cdate`) VALUES
(1, 'aaaaaaa', 'asfasf', 'asfasf', 'ahmeddahees7@gmail.com', 'asfasf', 24124, 'asfasf ', 24124, 'asfasf', '', 'afassaf', '2022-05-04'),
(2, 'دهيس', 'البرمجة', 'ملكش دعوة', 'ahmeddahees7@gmail.com', 'يكون فاهم شغله', 1101083878, 'هيشتغل 8 ساعات في اليوم وهطلع ميتينه ', 1500, 'يكون عبد', '', 'يكون اهبل', '2022-04-13'),
(3, 'دهيس', 'البرمجة', 'سوهاج - جرجا - برديس', 'ahmeddahees7@gmail.com', 'يكون فاهم شغله', 1150732543, 'شششششششبببب ', 4124214, 'يكون عبد', '', ' هههههههه يكون اهبل', '2022-04-19'),
(4, 'asfasf', 'asfasf', 'asfasfasf', 'ahmeddahees7@gmail.com', 'يكون فاهم شغله', 1150732543, 'asdsadasd ', 2147483647, 'safasf', ' dahees', 'fasfasfasfasf', '2022-04-18');

-- --------------------------------------------------------

--
-- بنية الجدول `sny3ya`
--

CREATE TABLE `sny3ya` (
  `id` int(11) NOT NULL,
  `fname` varchar(1000) NOT NULL,
  `email` varchar(1000) NOT NULL,
  `phone` int(40) NOT NULL,
  `flocation` varchar(1000) NOT NULL,
  `5dma` varchar(200) NOT NULL,
  `photo` varchar(2000) NOT NULL,
  `wsf` varchar(10000) NOT NULL,
  `ftime` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `sny3ya`
--

INSERT INTO `sny3ya` (`id`, `fname`, `email`, `phone`, `flocation`, `5dma`, `photo`, `wsf`, `ftime`) VALUES
(3, 'dasdasd', 'ahmeddahees7@gmail.com', 1150732543, 'sfasf', 'ورش الخياطة والمشغولات اليدوية', '240768041_314355773781068_2128968969481762687_n.jpg', 'asfasfasfsaf ', '2022-04-02'),
(4, 'أحمد دهيس', 'mahmodedahees1@gmail.com', 1150732543, 'سوهاج - جرجا - برديس', 'المصاعد الكهربائية', '3b2630c933a038a7d493219c508258d7.jpg', 'قققققققققققققققققققققققققققققققققققققققق ', '2022-04-03'),
(5, 'asfasf', 'asfasf@gmail.com', 1150732543, 'سوهاج - جرجا - برديس', 'تركيب ابواب و شبابيك', '', 'لللللشششششششششششششششش اي كلام ', '2022-04-26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `5amat`
--
ALTER TABLE `5amat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `al23mal`
--
ALTER TABLE `al23mal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bepart`
--
ALTER TABLE `bepart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `elctronic`
--
ALTER TABLE `elctronic`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mlnzlya`
--
ALTER TABLE `mlnzlya`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mozf`
--
ALTER TABLE `mozf`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sny3ya`
--
ALTER TABLE `sny3ya`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `5amat`
--
ALTER TABLE `5amat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `al23mal`
--
ALTER TABLE `al23mal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `bepart`
--
ALTER TABLE `bepart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `elctronic`
--
ALTER TABLE `elctronic`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `mlnzlya`
--
ALTER TABLE `mlnzlya`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `mozf`
--
ALTER TABLE `mozf`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sny3ya`
--
ALTER TABLE `sny3ya`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
