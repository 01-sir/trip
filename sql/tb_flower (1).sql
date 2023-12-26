-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- 主机： 127.0.0.1
-- 生成日期： 2023-11-22 15:13:08
-- 服务器版本： 10.4.24-MariaDB
-- PHP 版本： 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 数据库： `flower`
--

-- --------------------------------------------------------

--
-- 表的结构 `tb_flower`
--

CREATE TABLE `tb_flower`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `N_title` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `N_author` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `N_type` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `N_photo` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `N_content` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `N_date` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 10 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

--
-- 转存表中的数据 `tb_flower`
--

INSERT INTO `tb_flower` (`id`, `N_title`, `N_author`, `N_type`, `N_photo`, `N_content`, `N_date`, `N_click`) VALUES
(13, '郁金香', '嫁接', '鸟媒花', 'photo/1700489519.jpeg', '郁金香的颜色很鲜艳，有热情奔放的红，红得似火；有活泼美丽的黄，黄得赛金', '2023-11-21 23:14:31', 0),
(14, '牡丹花', '嫁接', '虫媒花', 'photo/1700489570.jpeg', '风格和符号', '2023-11-22 00:13:58', 0),
(15, '向日葵', '环节', '鸟媒花', 'photo/1700564302.jpeg', '向日葵的花语是信念、光辉、高傲、忠诚、爱慕，向日葵的寓意是沉默的爱，向日葵代表着勇敢地去追求自己想要的幸福。', '2023-11-22 00:14:29', 0),
(16, '花木兰', '唐', ' 风媒花', 'photo/1700564733.jpeg', '“紫室阳光胭脂除，素风吹腻粉。很奇怪，木兰以前是个女孩子。”这是唐代诗人白居易对白玉兰的赞美。这里花木兰借用了古代传说中的女主角花木兰。木兰花代表着勇敢、优雅和慷慨的高贵品质。', '0000-00-00 00:00:00', 0),
(19, '杜鹃花', '嫁接', ' 风媒花', 'photo/1700565269.jpeg', '杜鹃花（学名：Rhododendron simsii Planch.）为杜鹃花科杜鹃属植物。别称：杜鹃、山踯躅、山石榴、映山红、照山红、唐杜鹃。', '2023-11-22 00:15:02', 0),
(20, '杜鹃花', '环节', '鸟媒花', 'photo/1700637577.jpeg', '杜鹃（Rhododendron simsii Planch.），是杜鹃花科杜鹃花属的落叶灌木，高2-5米，分枝多而纤细。', '0000-00-00 00:00:00', 0),
(21, '玫瑰花', '嫁接', ' 风媒花', 'photo/1700637617.jpeg', '玫瑰（学名：Rosa spp. 英文名称：Rosa）：是蔷薇科、蔷薇属多种植物和培育花卉的通称名字。', '2023-11-22 00:16:20', 0),
(22, '白玫瑰', '嫁接', '鸟媒花', 'photo/1700640538.jpeg', '白玫瑰最早的花语是真爱（但现在红玫瑰更能代表这一含义）。白玫瑰也被称为 …<br />\r\n今天，白玫瑰更普遍的含义是纯洁、年轻和天真，因为白色玫瑰花蕾是年轻女孩 …<br />', '2023-11-22 00:15:52', 0),
(23, '茶花', '唐', ' 风媒花', 'photo/1700662301.jpeg', '茶花原产于中国东部，南诏时期广为栽培，唐光化二年（899年）的《南诏图》画卷中的云南山茶古树是中国绘画中最早出现的山茶形象。', NULL, 0);

--
-- 转储表的索引
--

--
-- 表的索引 `tb_flower`
--
ALTER TABLE `tb_flower`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `tb_flower`
--
ALTER TABLE `tb_flower`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
