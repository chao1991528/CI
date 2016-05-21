-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2016 年 05 月 21 日 16:56
-- 服务器版本: 5.6.24-0ubuntu2
-- PHP 版本: 5.6.4-4ubuntu6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `ci`
--

-- --------------------------------------------------------

--
-- 表的结构 `ci_article`
--

CREATE TABLE IF NOT EXISTS `ci_article` (
  `aid` int(11) NOT NULL AUTO_INCREMENT COMMENT '文章id',
  `article_title` varchar(64) NOT NULL COMMENT '文章标题',
  `atype` int(11) NOT NULL COMMENT '文章类型',
  `cid` int(11) NOT NULL COMMENT '栏目分类',
  `thumb` varchar(64) DEFAULT NULL COMMENT '缩略图',
  `introduce` text NOT NULL COMMENT '文章简介',
  `content` text NOT NULL COMMENT '文章内容',
  `add_time` date NOT NULL COMMENT '发表时间',
  PRIMARY KEY (`aid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- 转存表中的数据 `ci_article`
--

INSERT INTO `ci_article` (`aid`, `article_title`, `atype`, `cid`, `thumb`, `introduce`, `content`, `add_time`) VALUES
(2, 'fefef', 1, 2, '1463367470362.jpg', 'fdfdf', '空荡荡的海宁2路公交车上，一个农民工大姐一路站着不坐。有人上前询问，她回答说：“我这衣裤太脏了，怕把座椅弄脏，影响他人乘车。”', '2016-05-16'),
(3, 'hfgfgf0000', 1, 2, '1463811208300.gif', 'fdfaf', '昨天下午1点，钱报记者在海宁西山公园边的一个建筑工地上见到了汪大姐。她正在搭脚手架，和男人一样爬上爬下。', '2016-05-16'),
(4, '热门文章1', 2, 2, '1463367470362.jpg', 'fdfaf', '记者找到他们的小包工头刘佐承，听了大姐的“事迹”后，他果断说，“要表扬的，衣服脏有什么啊，劳动人民都这样。”', '2016-05-16'),
(5, 'hfgfgf85', 1, 2, '1463811173348.jpg', 'fdfaf', '<p>dgdgafad<br></p>', '2016-05-16'),
(6, 'hfgfgf8584', 1, 2, '1463367470362.jpg', 'fdfaf', '<p>dgdgafad<br></p>', '2016-05-16'),
(7, '热门文章2', 2, 2, '1463367470362.jpg', 'fdfaf', '<p>dgdgafad<br></p>', '2016-05-16'),
(8, 'hfgfgf858400888', 1, 2, '1463369021520.jpg', 'fdfaf', '汪大姐是贵州人。2007年出来打工，一直在建筑工地干苦力，之前在广东，2014年来浙江，辗转宁波、杭州、东阳，5月1日到了海宁这个工地，建地下停车库。', '2016-05-16'),
(9, 'hfgfgf858400888', 1, 2, '1463369021520.jpg', 'fdfaf', '<p>dgdgafad<br></p>', '2016-05-16'),
(10, 'hfgfgf858400888', 2, 2, '1463369021520.jpg', 'fdfaf', '<p>dgdgafad<br></p>', '2016-05-16'),
(11, 'hfgfgf858400888', 1, 2, '1463369021520.jpg', 'fdfaf', '<p>dgdgafad<br></p>', '2016-05-16'),
(12, 'yyyyy', 1, 2, '1463811234470.jpg', 'fdfaf', '她的手，指节宽大，都是茧子，右手手指有划伤的口子，左手臂上一块大乌青，“干粗活难免的，有时割到，有时砸到。”', '2016-05-16'),
(13, '测试而已00', 1, 2, '1463811244887.jpg', 'fdfaf', '<p>dgdgafad<br></p>', '2016-05-16'),
(14, '热门文章3', 2, 2, '1463367470362.jpg', 'fdfaf', '<p>dgdgafad<br></p>', '2016-05-16');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
