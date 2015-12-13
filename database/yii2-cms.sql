
-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 31, 2015 at 09:53 AM
-- Server version: 10.0.20-MariaDB
-- PHP Version: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `u192462195_cmsyi`
--

-- --------------------------------------------------------

--
-- Table structure for table `auth_assignment`
--

CREATE TABLE IF NOT EXISTS `auth_assignment` (
  `item_name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`item_name`,`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `auth_assignment`
--

INSERT INTO `auth_assignment` (`item_name`, `user_id`, `created_at`) VALUES
('admin', '1', 1445875761);

-- --------------------------------------------------------

--
-- Table structure for table `auth_item`
--

CREATE TABLE IF NOT EXISTS `auth_item` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `type` int(11) NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `rule_name` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `data` text COLLATE utf8_unicode_ci,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`name`),
  KEY `rule_name` (`rule_name`),
  KEY `idx-auth_item-type` (`type`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `auth_item`
--

INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`) VALUES
('/category/index', 2, NULL, NULL, NULL, 1445987538, 1445987538),
('/category/view', 2, NULL, NULL, NULL, 1445987541, 1445987541),
('/comment/index', 2, NULL, NULL, NULL, 1445987540, 1445987540),
('/debug/*', 2, NULL, NULL, NULL, 1445875361, 1445875361),
('/debug/default/*', 2, NULL, NULL, NULL, 1445875313, 1445875313),
('/debug/default/db-explain', 2, NULL, NULL, NULL, 1445875294, 1445875294),
('/debug/default/download-mail', 2, NULL, NULL, NULL, 1445875303, 1445875303),
('/debug/default/index', 2, NULL, NULL, NULL, 1445875304, 1445875304),
('/debug/default/toolbar', 2, NULL, NULL, NULL, 1445875309, 1445875309),
('/gii/*', 2, NULL, NULL, NULL, 1445875314, 1445875314),
('/gii/default/*', 2, NULL, NULL, NULL, 1445875315, 1445875315),
('/gii/default/action', 2, NULL, NULL, NULL, 1445875347, 1445875347),
('/gii/default/diff', 2, NULL, NULL, NULL, 1445875345, 1445875345),
('/gii/default/index', 2, NULL, NULL, NULL, 1445875329, 1445875329),
('/gii/default/preview', 2, NULL, NULL, NULL, 1445875330, 1445875330),
('/gii/default/view', 2, NULL, NULL, NULL, 1445875332, 1445875332),
('/mimin/role/create', 2, NULL, NULL, NULL, 1445875336, 1445875336),
('/mimin/role/delete', 2, NULL, NULL, NULL, 1445875344, 1445875344),
('/mimin/role/index', 2, NULL, NULL, NULL, 1445875348, 1445875348),
('/mimin/role/permission', 2, NULL, NULL, NULL, 1445875354, 1445875354),
('/mimin/role/update', 2, NULL, NULL, NULL, 1445875356, 1445875356),
('/mimin/role/view', 2, NULL, NULL, NULL, 1445875334, 1445875334),
('/mimin/route/create', 2, NULL, NULL, NULL, 1445875337, 1445875337),
('/mimin/route/delete', 2, NULL, NULL, NULL, 1445875342, 1445875342),
('/mimin/route/generate', 2, NULL, NULL, NULL, 1445875349, 1445875349),
('/mimin/route/index', 2, NULL, NULL, NULL, 1445875353, 1445875353),
('/mimin/route/update', 2, NULL, NULL, NULL, 1445875357, 1445875357),
('/mimin/route/view', 2, NULL, NULL, NULL, 1445875360, 1445875360),
('/mimin/user/delete', 2, NULL, NULL, NULL, 1445989514, 1445989514),
('/mimin/user/index', 2, NULL, NULL, NULL, 1445876514, 1445876514),
('/mimin/user/view', 2, NULL, NULL, NULL, 1445877821, 1445877821),
('/post/create', 2, NULL, NULL, NULL, 1445988580, 1445988580),
('/post/delete', 2, NULL, NULL, NULL, 1445989473, 1445989473),
('/post/index', 2, NULL, NULL, NULL, 1445987546, 1445987546),
('/site/error', 2, NULL, NULL, NULL, 1445875323, 1445875323),
('/site/index', 2, NULL, NULL, NULL, 1445875324, 1445875324),
('/site/login', 2, NULL, NULL, NULL, 1445875325, 1445875325),
('/site/logout', 2, NULL, NULL, NULL, 1445875326, 1445875326),
('admin', 1, NULL, NULL, NULL, 1445874353, 1445875300);

-- --------------------------------------------------------

--
-- Table structure for table `auth_item_child`
--

CREATE TABLE IF NOT EXISTS `auth_item_child` (
  `parent` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `child` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`parent`,`child`),
  KEY `child` (`child`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `auth_item_child`
--

INSERT INTO `auth_item_child` (`parent`, `child`) VALUES
('admin', '/category/index'),
('admin', '/category/view'),
('admin', '/comment/index'),
('admin', '/debug/*'),
('admin', '/debug/default/*'),
('admin', '/debug/default/db-explain'),
('admin', '/debug/default/download-mail'),
('admin', '/debug/default/index'),
('admin', '/debug/default/toolbar'),
('admin', '/gii/*'),
('admin', '/gii/default/*'),
('admin', '/gii/default/action'),
('admin', '/gii/default/diff'),
('admin', '/gii/default/index'),
('admin', '/gii/default/preview'),
('admin', '/gii/default/view'),
('admin', '/mimin/role/create'),
('admin', '/mimin/role/delete'),
('admin', '/mimin/role/index'),
('admin', '/mimin/role/permission'),
('admin', '/mimin/role/update'),
('admin', '/mimin/role/view'),
('admin', '/mimin/route/create'),
('admin', '/mimin/route/delete'),
('admin', '/mimin/route/generate'),
('admin', '/mimin/route/index'),
('admin', '/mimin/route/update'),
('admin', '/mimin/route/view'),
('admin', '/mimin/user/delete'),
('admin', '/mimin/user/index'),
('admin', '/mimin/user/view'),
('admin', '/post/create'),
('admin', '/post/delete'),
('admin', '/post/index'),
('admin', '/site/error'),
('admin', '/site/index'),
('admin', '/site/login'),
('admin', '/site/logout');

-- --------------------------------------------------------

--
-- Table structure for table `auth_rule`
--

CREATE TABLE IF NOT EXISTS `auth_rule` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `data` text COLLATE utf8_unicode_ci,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `create_time` int(11) DEFAULT NULL,
  `update_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `create_time`, `update_time`) VALUES
(1, 'Uncategory', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `create_time` int(11) DEFAULT NULL,
  `author` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(128) COLLATE utf8_unicode_ci DEFAULT NULL,
  `post_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_comment_post` (`post_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=14 ;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `content`, `status`, `create_time`, `author`, `email`, `url`, `post_id`) VALUES
(1, 'This is a test comment.', 1, 1230952187, 'Tester', 'tester@example.com', NULL, 1),
(2, 'adsadada', 0, 1404180609, 'Hafid', 'milis@gmail.com', 'http://www.', 1),
(3, 'adsadada', 0, NULL, 'Hafid', 'milis@gmail.com', 'http://www.', 1),
(4, 'adsadada', 0, NULL, 'Hafid', 'milis@gmail.com', 'http://www.', 1),
(5, 'adsadada', 0, NULL, 'Hafid', 'milis@gmail.com', 'http://www.', 1),
(6, 'adsadada', 0, NULL, 'Hafid', 'milis@gmail.com', 'http://www.', 2),
(7, 'adsadada', 1, 1404181345, 'Hafid', 'milis@gmail.com', 'http://www.', 2),
(8, 'adsadada', 1, 1404181345, 'Hafid', 'milis@gmail.com', 'http://www.', 2),
(9, 'ha', 0, 1404187174, 'Hafid', 'milis@gmail.com', '', 2),
(10, 'ha', 0, 1404187284, 'Hafid', 'milis@gmail.com', '', 2),
(11, 'test lagi', 0, 1404188017, 'admin', 'milisstudio@gmail.com', NULL, 2),
(12, 'test lagi', 1, 1404188034, 'admin', 'milisstudio@gmail.com', NULL, 2),
(13, 'test lagi', 1, 1404188037, 'admin', 'milisstudio@gmail.com', NULL, 2);

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--

CREATE TABLE IF NOT EXISTS `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1445873533),
('m130524_201442_init', 1445873534),
('m140506_102106_rbac_init', 1445873959);

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE IF NOT EXISTS `post` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `create_time` int(11) DEFAULT NULL,
  `update_time` int(11) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_post_category` (`category_id`),
  KEY `FK_post_user` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `title`, `content`, `category_id`, `status`, `create_time`, `update_time`, `user_id`) VALUES
(1, 'Welcome!', 'This blog system is developed using Yii. It is meant to demonstrate how to use Yii to build a complete real-world application. Complete source code may be found in the Yii releases.\r\nFeel free to try this system by writing new posts and posting comments.', 1, 1, 1230952187, 1230952187, 1),
(2, 'A Test Post', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 1, 1, 1230952187, 1230952187, 1);

-- --------------------------------------------------------

--
-- Table structure for table `route`
--

CREATE TABLE IF NOT EXISTS `route` (
  `name` varchar(64) NOT NULL,
  `alias` varchar(64) NOT NULL,
  `type` varchar(64) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `route`
--

INSERT INTO `route` (`name`, `alias`, `type`, `status`) VALUES
('/*', '*', '', 1),
('/category/*', '*', 'category', 1),
('/category/create', 'create', 'category', 1),
('/category/delete', 'delete', 'category', 1),
('/category/index', 'index', 'category', 1),
('/category/update', 'update', 'category', 1),
('/category/view', 'view', 'category', 1),
('/comment/*', '*', 'comment', 1),
('/comment/create', 'create', 'comment', 1),
('/comment/delete', 'delete', 'comment', 1),
('/comment/index', 'index', 'comment', 1),
('/comment/update', 'update', 'comment', 1),
('/comment/view', 'view', 'comment', 1),
('/debug/*', '*', 'debug', 1),
('/debug/default/*', '*', 'debug/default', 1),
('/debug/default/db-explain', 'db-explain', 'debug/default', 1),
('/debug/default/download-mail', 'download-mail', 'debug/default', 1),
('/debug/default/index', 'index', 'debug/default', 1),
('/debug/default/toolbar', 'toolbar', 'debug/default', 1),
('/debug/default/view', 'view', 'debug/default', 1),
('/gii/*', '*', 'gii', 1),
('/gii/default/*', '*', 'gii/default', 1),
('/gii/default/action', 'action', 'gii/default', 1),
('/gii/default/diff', 'diff', 'gii/default', 1),
('/gii/default/index', 'index', 'gii/default', 1),
('/gii/default/preview', 'preview', 'gii/default', 1),
('/gii/default/view', 'view', 'gii/default', 1),
('/mimin/*', '*', 'mimin', 1),
('/mimin/role/*', '*', 'mimin/role', 1),
('/mimin/role/create', 'create', 'mimin/role', 1),
('/mimin/role/delete', 'delete', 'mimin/role', 1),
('/mimin/role/index', 'index', 'mimin/role', 1),
('/mimin/role/permission', 'permission', 'mimin/role', 1),
('/mimin/role/update', 'update', 'mimin/role', 1),
('/mimin/role/view', 'view', 'mimin/role', 1),
('/mimin/route/*', '*', 'mimin/route', 1),
('/mimin/route/create', 'create', 'mimin/route', 1),
('/mimin/route/delete', 'delete', 'mimin/route', 1),
('/mimin/route/generate', 'generate', 'mimin/route', 1),
('/mimin/route/index', 'index', 'mimin/route', 1),
('/mimin/route/update', 'update', 'mimin/route', 1),
('/mimin/route/view', 'view', 'mimin/route', 1),
('/mimin/user/*', '*', 'mimin/user', 1),
('/mimin/user/create', 'create', 'mimin/user', 1),
('/mimin/user/delete', 'delete', 'mimin/user', 1),
('/mimin/user/index', 'index', 'mimin/user', 1),
('/mimin/user/update', 'update', 'mimin/user', 1),
('/mimin/user/view', 'view', 'mimin/user', 1),
('/post/*', '*', 'post', 1),
('/post/create', 'create', 'post', 1),
('/post/delete', 'delete', 'post', 1),
('/post/index', 'index', 'post', 1),
('/post/update', 'update', 'post', 1),
('/post/view', 'view', 'post', 1),
('/site/*', '*', 'site', 1),
('/site/error', 'error', 'site', 1),
('/site/index', 'index', 'site', 1),
('/site/login', 'login', 'site', 1),
('/site/logout', 'logout', 'site', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `password_reset_token` (`password_reset_token`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'q9vPvOMvXsSn1z5nf8yfQO_xivjswA-H', '$2y$13$HfvZiTcfD8YJ6tLcHNCDiuetMViJYEMFSU8KBRU/z7s/ISMJ2wtLm', NULL, 'admin@mail.com', 10, 1445874227, 1445875506),
(2, 'ilham', 'tkT4_BK4aDr65H3D8vMNv-8Wlc0Ien7w', '$2y$13$HfvZiTcfD8YJ6tLcHNCDiuetMViJYEMFSU8KBRU/z7s/ISMJ2wtLm', NULL, 'ilham@mail.com', 10, 1445957268, 1445957268);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `auth_assignment`
--
ALTER TABLE `auth_assignment`
  ADD CONSTRAINT `auth_assignment_ibfk_1` FOREIGN KEY (`item_name`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `auth_item`
--
ALTER TABLE `auth_item`
  ADD CONSTRAINT `auth_item_ibfk_1` FOREIGN KEY (`rule_name`) REFERENCES `auth_rule` (`name`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `auth_item_child`
--
ALTER TABLE `auth_item_child`
  ADD CONSTRAINT `auth_item_child_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `auth_item_child_ibfk_2` FOREIGN KEY (`child`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
