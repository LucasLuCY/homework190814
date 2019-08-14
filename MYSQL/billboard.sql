-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 
-- 伺服器版本： 10.3.16-MariaDB
-- PHP 版本： 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `billboard`
--

-- --------------------------------------------------------

--
-- 資料表結構 `billboard`
--

CREATE TABLE `billboard` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` char(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` char(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `userId` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `billboard`
--

INSERT INTO `billboard` (`id`, `title`, `content`, `userId`, `created_at`, `updated_at`) VALUES
(1, '哲人無憂', '哲人無憂，智者常樂。並不是因為所愛的一切他都擁有了，而是所擁有的一切他都愛。', 1, NULL, '2019-08-13 23:00:17'),
(2, '過去', '過去的一頁，能不翻就不翻，翻落了灰塵會迷了雙眼。', 1, NULL, '2019-08-13 23:00:31'),
(3, '稻穗', '越是成熟的稻穗，越懂得彎腰。', 3, NULL, NULL),
(4, '潛在的能量', '每個人都有潛在的能量，只是很容易：被習慣所掩蓋，被時間所迷離，被惰性所消磨。', 2, NULL, NULL),
(5, '複雜', '人是可以快樂地生活的，只是我們自己選擇了複雜，選擇了嘆息！', 1, NULL, '2019-08-13 23:00:58'),
(6, '後悔', '後悔是一種耗費精神的情緒。後悔是比損失更大的損失，比錯誤更大的錯誤，所以請不要後悔。', 3, NULL, NULL),
(7, '人生', '人生有幾件絕對不能失去的東西：自製的力量，冷靜的頭腦，希望和信心。', 4, NULL, NULL),
(9, '自己', '自己要先看得起自己，別人才會看得起你。', 4, NULL, NULL),
(10, '銘記', '要銘記在心：每天都是一年中最美好的日子。', 2, NULL, NULL),
(11, '反省', '要糾正別人之前，先反省自己有沒有犯錯。　', 1, '2019-08-13 22:57:48', '2019-08-13 22:57:48'),
(12, '人若', '人若軟弱就是自己最大的敵人；人若勇敢就是自己最好的朋友。', 2, '2019-08-13 22:58:42', '2019-08-13 22:58:42');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `billboard`
--
ALTER TABLE `billboard`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `billboard`
--
ALTER TABLE `billboard`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
