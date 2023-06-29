-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- ホスト: localhost
-- 生成日時: 2023 年 6 月 29 日 16:42
-- サーバのバージョン： 10.4.28-MariaDB
-- PHP のバージョン: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `gs_kadai_php02`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `php02_table`
--

CREATE TABLE `php02_table` (
  `id` int(11) NOT NULL,
  `place` varchar(100) NOT NULL,
  `food` varchar(100) NOT NULL,
  `comment` text NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `php02_table`
--

INSERT INTO `php02_table` (`id`, `place`, `food`, `comment`, `date`) VALUES
(1, '', '', '', '2023-06-29 16:09:33'),
(2, '', '', '', '2023-06-29 16:09:34'),
(3, 'お', 'い', 'う', '2023-06-29 16:09:42'),
(4, 'テスト', 'てすと', 'test', '2023-06-29 16:11:56'),
(5, 'お', 'い', 'い', '2023-06-29 16:17:19'),
(6, '', '', '', '2023-06-29 16:24:41'),
(7, '', '', '', '2023-06-29 17:11:03'),
(8, '', '', '', '2023-06-29 17:12:41'),
(9, '', '', '', '2023-06-29 17:56:17'),
(10, '', '', '', '2023-06-29 18:34:52'),
(11, '', '', '', '2023-06-29 19:51:26'),
(12, 'だみ', 'ダミー', 'test', '2023-06-29 20:23:10'),
(13, 'こい', 'いいいいい', 'ううううううううう', '2023-06-29 20:31:36'),
(14, '', '', '', '2023-06-29 20:44:16'),
(15, '', '', '', '2023-06-29 21:20:52'),
(16, '', '', '', '2023-06-29 21:20:53'),
(17, '', '', '', '2023-06-29 21:21:27'),
(18, '', '', '', '2023-06-29 21:21:28'),
(19, '', '', '', '2023-06-29 21:21:30'),
(20, '', '', '', '2023-06-29 21:23:59'),
(21, '', '', '', '2023-06-29 21:24:11'),
(22, '', '', '', '2023-06-29 21:44:41'),
(23, '', '', '', '2023-06-29 21:44:42'),
(24, '', '', '', '2023-06-29 21:44:43'),
(25, '', '', '', '2023-06-29 21:44:44'),
(26, '', '', 'おおおお', '2023-06-29 21:44:53'),
(27, 'あああ', 'ききき', 'おおおおいおいお', '2023-06-29 21:45:19'),
(28, '', 'ここ', '', '2023-06-29 21:46:34'),
(29, '', '', '', '2023-06-29 21:59:52'),
(30, '', '', 'テストです', '2023-06-29 22:03:33'),
(31, 'おい', '', '', '2023-06-29 22:49:01'),
(32, 'テスト', '', '', '2023-06-29 23:26:29'),
(33, '', '', 'だみー', '2023-06-29 23:40:42'),
(34, 'お', 'どうだろう', 'ここここ', '2023-06-29 23:41:04');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `php02_table`
--
ALTER TABLE `php02_table`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `php02_table`
--
ALTER TABLE `php02_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
