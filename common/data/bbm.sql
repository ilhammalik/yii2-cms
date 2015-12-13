-- phpMyAdmin SQL Dump
-- version 4.4.13.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 09, 2015 at 07:50 PM
-- Server version: 5.6.25-0ubuntu1
-- PHP Version: 5.6.11-1ubuntu3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bbm`
--

-- --------------------------------------------------------

--
-- Table structure for table `auth_assignment`
--

CREATE TABLE IF NOT EXISTS `auth_assignment` (
  `item_name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `auth_assignment`
--

INSERT INTO `auth_assignment` (`item_name`, `user_id`, `created_at`) VALUES
('admin', '1', 1445875761),
('admin', '2', 1446451347),
('hrd', '2', 1446451363);

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
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `auth_item`
--

INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`) VALUES
('/category/*', 2, NULL, NULL, NULL, 1446303451, 1446303451),
('/category/create', 2, NULL, NULL, NULL, 1446303448, 1446303448),
('/category/delete', 2, NULL, NULL, NULL, 1446303449, 1446303449),
('/category/index', 2, NULL, NULL, NULL, 1445987538, 1445987538),
('/category/update', 2, NULL, NULL, NULL, 1446303450, 1446303450),
('/category/view', 2, NULL, NULL, NULL, 1445987541, 1445987541),
('/debug/*', 2, NULL, NULL, NULL, 1445875361, 1445875361),
('/debug/default/*', 2, NULL, NULL, NULL, 1445875313, 1445875313),
('/debug/default/db-explain', 2, NULL, NULL, NULL, 1445875294, 1445875294),
('/debug/default/download-mail', 2, NULL, NULL, NULL, 1445875303, 1445875303),
('/debug/default/toolbar', 2, NULL, NULL, NULL, 1445875309, 1445875309),
('/gii/*', 2, NULL, NULL, NULL, 1445875314, 1445875314),
('/gii/default/*', 2, NULL, NULL, NULL, 1445875315, 1445875315),
('/gii/default/action', 2, NULL, NULL, NULL, 1445875347, 1445875347),
('/gii/default/diff', 2, NULL, NULL, NULL, 1445875345, 1445875345),
('/gii/default/index', 2, NULL, NULL, NULL, 1445875329, 1445875329),
('/gii/default/preview', 2, NULL, NULL, NULL, 1445875330, 1445875330),
('/gii/default/view', 2, NULL, NULL, NULL, 1445875332, 1445875332),
('/mimin/user/delete', 2, NULL, NULL, NULL, 1446451330, 1446451330),
('/mimin/user/update', 2, NULL, NULL, NULL, 1446466872, 1446466872),
('/mimin/user/view', 2, NULL, NULL, NULL, 1446451332, 1446451332),
('/post/*', 2, NULL, NULL, NULL, 1446303501, 1446303501),
('/post/update', 2, NULL, NULL, NULL, 1446303506, 1446303506),
('/post/view', 2, NULL, NULL, NULL, 1446303507, 1446303507),
('/site/*', 2, NULL, NULL, NULL, 1446303509, 1446303509),
('/site/logout', 2, NULL, NULL, NULL, 1445875326, 1445875326),
('admin', 1, NULL, NULL, NULL, 1445874353, 1445875300),
('hrd', 1, NULL, NULL, NULL, 1446302430, 1446302430);

-- --------------------------------------------------------

--
-- Table structure for table `auth_item_child`
--

CREATE TABLE IF NOT EXISTS `auth_item_child` (
  `parent` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `child` varchar(64) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `auth_item_child`
--

INSERT INTO `auth_item_child` (`parent`, `child`) VALUES
('hrd', '/category/*'),
('hrd', '/category/create'),
('hrd', '/category/delete'),
('admin', '/category/index'),
('hrd', '/category/update'),
('admin', '/category/view'),
('admin', '/debug/*'),
('admin', '/debug/default/*'),
('admin', '/debug/default/db-explain'),
('admin', '/debug/default/download-mail'),
('admin', '/debug/default/toolbar'),
('admin', '/gii/*'),
('admin', '/gii/default/*'),
('admin', '/gii/default/action'),
('admin', '/gii/default/diff'),
('admin', '/gii/default/index'),
('admin', '/gii/default/preview'),
('admin', '/gii/default/view'),
('admin', '/mimin/user/delete'),
('admin', '/mimin/user/update'),
('admin', '/mimin/user/view'),
('hrd', '/post/*'),
('hrd', '/post/update'),
('hrd', '/post/view'),
('hrd', '/site/*'),
('admin', '/site/logout');

-- --------------------------------------------------------

--
-- Table structure for table `auth_rule`
--

CREATE TABLE IF NOT EXISTS `auth_rule` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `data` text COLLATE utf8_unicode_ci,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `create_time` int(11) DEFAULT NULL,
  `update_time` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
  `id` int(11) NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `create_time` int(11) DEFAULT NULL,
  `author` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(128) COLLATE utf8_unicode_ci DEFAULT NULL,
  `post_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
  `apply_time` int(11) DEFAULT NULL
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
  `id` int(11) NOT NULL,
  `title` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `create_time` int(11) DEFAULT NULL,
  `update_time` int(11) DEFAULT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
  `status` int(11) NOT NULL DEFAULT '1'
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
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'q9vPvOMvXsSn1z5nf8yfQO_xivjswA-H', '$2y$13$HfvZiTcfD8YJ6tLcHNCDiuetMViJYEMFSU8KBRU/z7s/ISMJ2wtLm', NULL, 'admin@mail.com', 10, 1445874227, 1445875506),
(2, 'ilham', 'tkT4_BK4aDr65H3D8vMNv-8Wlc0Ien7w', '$2y$13$HfvZiTcfD8YJ6tLcHNCDiuetMViJYEMFSU8KBRU/z7s/ISMJ2wtLm', NULL, 'ilham@mail.com', 10, 1445957268, 1445957268),
(3, 'jojon', '', '$2y$13$S17zmQAS2vK8KuA5o4XNZ.j9FN.z5FDFkbrIly//tUT1n7cCbKRFK', NULL, 'jojon@mail.com', 10, 1446302393, 1446302393);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auth_assignment`
--
ALTER TABLE `auth_assignment`
  ADD PRIMARY KEY (`item_name`,`user_id`);

--
-- Indexes for table `auth_item`
--
ALTER TABLE `auth_item`
  ADD PRIMARY KEY (`name`),
  ADD KEY `rule_name` (`rule_name`),
  ADD KEY `idx-auth_item-type` (`type`);

--
-- Indexes for table `auth_item_child`
--
ALTER TABLE `auth_item_child`
  ADD PRIMARY KEY (`parent`,`child`),
  ADD KEY `child` (`child`);

--
-- Indexes for table `auth_rule`
--
ALTER TABLE `auth_rule`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_comment_post` (`post_id`);

--
-- Indexes for table `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_post_category` (`category_id`),
  ADD KEY `FK_post_user` (`user_id`);

--
-- Indexes for table `route`
--
ALTER TABLE `route`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
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
