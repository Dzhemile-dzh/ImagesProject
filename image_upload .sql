-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Време на генериране:  8 дек 2022 в 13:02
-- Версия на сървъра: 10.4.17-MariaDB
-- Версия на PHP: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данни: `image_upload`
--

-- --------------------------------------------------------

--
-- Структура на таблица `coments`
--

CREATE TABLE `coments` (
  `id` int(11) NOT NULL,
  `comment` blob NOT NULL,
  `userId` int(11) NOT NULL,
  `imageId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Схема на данните от таблица `coments`
--

INSERT INTO `coments` (`id`, `comment`, `userId`, `imageId`) VALUES
(1, 0x436f6d6d656e74207465787420736f6d657468696e672e, 6, 9),
(2, 0x536f6d65206c6f6e67207465787421, 7, 10);

-- --------------------------------------------------------

--
-- Структура на таблица `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `fileName` varchar(255) NOT NULL,
  `uploaded` datetime NOT NULL,
  `userId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Схема на данните от таблица `images`
--

INSERT INTO `images` (`id`, `fileName`, `uploaded`, `userId`) VALUES
(8, '5.png', '2022-12-08 03:16:11', 0),
(9, '3.png', '2022-12-08 03:16:17', 0),
(10, '1.png', '2022-12-08 03:16:22', 0),
(11, '2.png', '2022-12-08 03:16:28', 0),
(12, '4,5.png', '2022-12-08 03:16:35', 0),
(13, 'spring-featured-image.png', '2022-12-08 03:16:44', 0);

-- --------------------------------------------------------

--
-- Структура на таблица `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Схема на данните от таблица `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `username`, `password`) VALUES
(5, 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(6, 'dzhemile', '5c58cf11bfb03bcab532f7c8163a24a8'),
(7, 'admin2', '21232f297a57a5a743894a0e4a801fc3');

--
-- Indexes for dumped tables
--

--
-- Индекси за таблица `coments`
--
ALTER TABLE `coments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userId` (`userId`,`imageId`),
  ADD KEY `imageId` (`imageId`);

--
-- Индекси за таблица `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userId` (`userId`);

--
-- Индекси за таблица `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `coments`
--
ALTER TABLE `coments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
