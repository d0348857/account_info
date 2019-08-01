-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- 主機: 127.0.0.1
-- 產生時間： 2019-08-01 00:40:45
-- 伺服器版本: 10.1.37-MariaDB
-- PHP 版本： 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `account_info`
--

-- --------------------------------------------------------

--
-- 資料表結構 `account_info`
--

CREATE TABLE `account_info` (
  `id` int(10) UNSIGNED NOT NULL,
  `account` varchar(20) NOT NULL,
  `name` varchar(10) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `birth` date NOT NULL,
  `mail` varchar(100) NOT NULL,
  `remark` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 資料表的匯出資料 `account_info`
--

INSERT INTO `account_info` (`id`, `account`, `name`, `gender`, `birth`, `mail`, `remark`) VALUES
(1, 'account1', 'user', 'ç”·', '2019-07-31', 'usermail@gmail.com', 'æ–°å¢žæˆåŠŸ'),
(2, 'account2', 'user2', 'ç”·', '2019-07-31', 'user2mail@gmail.com', 'æ–°å¢žæˆåŠŸ'),
(4, 'account3', 'user3', 'å¥³', '2019-07-30', 'user3mail@gmail.com', ''),
(5, 'account4', 'user4', 'ç”·', '2019-07-30', 'user4mail@gmail.com', ''),
(6, 'account5', 'user5', 'ç”·', '2019-07-31', 'user5mail@gmail.com', ''),
(7, 'account6', 'user6', 'å¥³', '2019-07-30', 'user6@gmail.com', ''),
(8, 'account7', 'user7', 'ç”·', '2019-07-29', 'user7@gmail.com', 'ç„¡'),
(11, 'account10', 'user10', 'ç”·', '2019-07-29', 'user10@gmail.com', 'ç„¡'),
(12, 'account11', 'user11', 'ç”·', '2019-07-29', 'user11@gmail.com', 'ç„¡'),
(13, 'account12', 'user12', 'ç”·', '2019-07-29', 'user12@gmail.com', 'ç„¡'),
(14, 'account13', 'user13', 'ç”·', '2019-07-29', 'user13@gmail.com', 'ç„¡'),
(15, 'account14', 'user14', 'ç”·', '2019-07-29', 'user14@gmail.com', 'ç„¡'),
(16, 'account15', 'user15', 'ç”·', '2019-07-29', 'user15@gmail.com', 'ç„¡'),
(17, 'account16', 'user16', 'å¥³', '2019-07-28', 'user16@gmail.com', 'ç„¡'),
(20, 'account19', 'user19', 'ç”·', '2019-07-27', 'user19@gmail.com', 'ç„¡'),
(21, 'account20', 'user20', 'å¥³', '2019-07-28', 'user20@gmail.com', 'ç„¡'),
(22, 'account21', 'user21', 'ç”·', '2019-07-27', 'user21@gmail.com', 'ç„¡'),
(23, 'account22', 'user22', 'å¥³', '2019-07-28', 'user22@gmail.com', 'ç„¡'),
(24, 'account23', 'user23', 'ç”·', '2019-07-27', 'user23@gmail.com', 'ç„¡'),
(25, 'account24', 'user24', 'å¥³', '2019-07-28', 'user24@gmail.com', 'ç„¡'),
(26, 'account25', 'user25', 'ç”·', '2019-07-27', 'user25@gmail.com', 'ç„¡'),
(27, 'account26', 'user26', 'å¥³', '2019-07-28', 'user26@gmail.com', 'ç„¡'),
(28, 'account27', 'user27', 'ç”·', '2019-07-27', 'user27@gmail.com', 'ç„¡'),
(29, 'account28', 'user28', 'å¥³', '2019-07-28', 'user28@gmail.com', 'ç„¡'),
(30, 'account29', 'user29', 'ç”·', '2019-07-27', 'user29@gmail.com', 'ç„¡'),
(31, 'account30', 'user30', 'å¥³', '2019-07-28', 'user30@gmail.com', 'ç„¡'),
(32, 'account31', 'user31', 'ç”·', '2019-07-27', 'user31@gmail.com', 'ç„¡'),
(33, 'account32', 'user32', 'å¥³', '2019-07-28', 'user32@gmail.com', 'ç„¡');

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `account_info`
--
ALTER TABLE `account_info`
  ADD PRIMARY KEY (`id`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `account_info`
--
ALTER TABLE `account_info`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
