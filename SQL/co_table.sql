-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- ホスト: localhost
-- 生成日時: 2023 年 7 月 20 日 16:48
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
-- データベース: `kadai11`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `co_table`
--

CREATE TABLE `co_table` (
  `id` int(12) NOT NULL,
  `user_id` varchar(64) NOT NULL,
  `title` text NOT NULL,
  `content` text NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- テーブルのデータのダンプ `co_table`
--

INSERT INTO `co_table` (`id`, `user_id`, `title`, `content`, `created_at`) VALUES
(1, 'test1', 'TEST1', 'てすとてすとてすとてすとてすとてすとてすとてすとてすとてすとてすとてすとてすとてすとてすとてすとてすとてすとてすとてすとてすと', '2023-07-20 14:26:24'),
(2, 'test2', 'TEST2', 'てすとてすとてすとてすとてすとてすとてすとてすとてすとてすとてすとてすとてすとてすとてすとてすとてすとてすとてすとてすとてすとテステステト', '2023-07-20 15:26:24'),
(3, 'test1', 'test1の今日の日記', 'きょうはうどんを食べました', '2023-07-20 22:28:07'),
(4, 'test1', 'test1の今日の日記２', 'きょうはパスタを食べました', '2023-07-20 22:29:11'),
(6, 'test2', '行ったり来たり', '今日は迷子になってあっちこっち行ったり来たりしました。地図を見れば早いのに。', '2023-07-20 23:17:06'),
(7, 'test2', '明日の予定', '明日の予定を考えるだけで今日が終わってしまう', '2023-07-20 23:17:55'),
(8, 'test3', '今日って', 'もしかして木曜日？！', '2023-07-20 23:17:58'),
(10, 'test2', '歩き疲れて', '明日も歩くのに足が痛い。', '2023-07-20 23:22:52'),
(11, 'test1', '自転車', '暑くて自転車を漕ぐのは大変。自転車もそう言ってる', '2023-07-20 23:24:15'),
(12, 'test3', 'ホラー', '最近夏だからホラーな番組がやっていてドキッとする。ちゃんと見ると怖くないんだけども。', '2023-07-20 23:25:38'),
(13, 'test3', '実践', '一晩寝かせて発酵させるパンの焼き方を教わったので、実践してみました。一晩寝かせず焼いて食べてしまいました。', '2023-07-20 23:27:02'),
(14, 'test2', 'ドライヤー', '勢いが良くてすばらしい。', '2023-07-20 23:43:38'),
(15, 'test2', 'あれもこれも', 'どこにでもあるお店すごい。でもよくよく見ると違うのかも。', '2023-07-20 23:44:29'),
(16, 'test3', '2023/7/20', '今日は電車に乗って一駅先の街まで出かけました。ぎりぎり歩けない距離の一駅', '2023-07-20 23:45:42'),
(17, 'test3', '映画', '明日はミッションインポッシブルの新作公開日だ！！！！！たのしみ！！！', '2023-07-20 23:46:22');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `co_table`
--
ALTER TABLE `co_table`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `co_table`
--
ALTER TABLE `co_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
