-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 10, 2021 at 12:49 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database`
--

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

DROP TABLE IF EXISTS `videos`;
CREATE TABLE IF NOT EXISTS `videos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `video_id` varchar(100) NOT NULL,
  `likes` int(11) NOT NULL,
  `comments` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `video_id`, `likes`, `comments`) VALUES
(1, 'Pzv_lUp3iOQ', 2, 'testing kend'),
(2, 'Pzv_lUp3iOQ', 3, 'ok ok'),
(3, 'Pzv_lUp3iOQ', 3, 'ok ok'),
(4, 'Pzv_lUp3iOQ', 4, 'test'),
(5, 'Pzv_lUp3iOQ', 5, 'dsd'),
(6, 'Pzv_lUp3iOQ', 5, 'very good'),
(7, 'Pzv_lUp3iOQ', 4, '4 stars not bad'),
(8, 'zRtU8dpTEXg', 5, 'test 5 stars'),
(9, 'EfSfLyeREMc', 3, 'test 3 star'),
(10, 'C-nypyy4pLg', 1, 'test 1 star'),
(11, 'C-nypyy4pLg', 5, 'rate 5 stars'),
(12, 'OJpMT3odXtQ', 4, '4 star rating 4 this video'),
(13, 'OJpMT3odXtQ', 5, 'sdssd');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
