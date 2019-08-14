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
-- 資料表結構 `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'lucas', 'jking@fakemail.com', NULL, '$2y$10$mSGdjpb9a0s3nBW66uucFOcT2OUFjJzsBJ8YaONWby9/fSgnzFpyW', 'yYHC4RnFP7ev0qaG4e9edZwQRPYI3uoe7pBeaT5zPqHDnQhgJqA0h7SATNh0', '2019-08-13 17:55:50', '2019-08-13 17:55:50'),
(2, 'James', 'jking@fakemail.com1', NULL, '$2y$10$NwugP9PAi6.Dst3DVjcfXuoKqun9wSvLRCEI.FSkxUkP5qnZZyrG6', 'WxTVYVoo1NBHI9mMp5dgKNqtSFgr1pvyQFcjHQavTTan3lnOd6qBur0aaTaj', '2019-08-13 18:42:37', '2019-08-13 18:42:37'),
(3, 'Maho', 'jking@fakemail.com2', NULL, '$2y$10$0f.IgO0g8UlqDn9n9yKweeuWkc82HYIif5tXUOaLr75eU.jkVIrx.', NULL, '2019-08-13 18:43:34', '2019-08-13 18:43:34'),
(4, 'Tang', 'jking@fakemail.com3', NULL, '$2y$10$0iJrenCpKi4ClP84j.M./uY4WXPolULqcJFPvpsYkmABIZsujqmD6', NULL, '2019-08-13 18:44:02', '2019-08-13 18:44:02');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
