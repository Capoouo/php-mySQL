-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2021-03-12 09:00:47
-- 伺服器版本： 10.4.17-MariaDB
-- PHP 版本： 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `register`
--

-- --------------------------------------------------------

--
-- 資料表結構 `game`
--

CREATE TABLE `game` (
  `No` int(11) NOT NULL,
  `selectgame` text CHARACTER SET utf8mb4 NOT NULL,
  `othergame` text CHARACTER SET utf8mb4 NOT NULL,
  `gamename` text CHARACTER SET utf8mb4 NOT NULL,
  `gameyear` text CHARACTER SET utf8mb4 NOT NULL,
  `gamemonth` text CHARACTER SET utf8mb4 NOT NULL,
  `gameday` text CHARACTER SET utf8mb4 NOT NULL,
  `starttimehour` text CHARACTER SET utf8mb4 NOT NULL,
  `starttimemin` text CHARACTER SET utf8mb4 NOT NULL,
  `Discord` text CHARACTER SET utf8mb4 NOT NULL,
  `FaceBook` text CHARACTER SET utf8mb4 NOT NULL,
  `email` text CHARACTER SET utf8mb4 NOT NULL,
  `contacat` text CHARACTER SET utf8mb4 NOT NULL,
  `rule` text CHARACTER SET utf8mb4 NOT NULL,
  `reward` text CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 傾印資料表的資料 `game`
--

INSERT INTO `game` (`No`, `selectgame`, `othergame`, `gamename`, `gameyear`, `gamemonth`, `gameday`, `starttimehour`, `starttimemin`, `Discord`, `FaceBook`, `email`, `contacat`, `rule`, `reward`) VALUES
(0, '', '', '', '', '', '', '', '', 'oiu', '', '', 'joui', 'ui', 'ui'),
(1, 'Counter-Strike: Global Offensive', '', 'tryu', '2020', '2', '2', '2', '15', '', '', '', '', '', ''),
(2, '傳說對決', '', 'hgfj', '2021', '1', '2', '1', '00', '', '', '', '', '', ''),
(3, '聯盟戰棋', '', '789', '2021', '1', '1', '2', '15', '', '', '', '', '', '');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `game`
--
ALTER TABLE `game`
  ADD PRIMARY KEY (`No`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
