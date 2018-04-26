# Host: 127.0.0.1  (Version 5.5.45)
# Date: 2018-04-26 15:03:00
# Generator: MySQL-Front 6.0  (Build 1.57)


#
# Structure for table "admin_group"
#

DROP TABLE IF EXISTS `admin_group`;
CREATE TABLE `admin_group` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_enable` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

#
# Data for table "admin_group"
#

INSERT INTO `admin_group` VALUES (7,'财务',1,'2018-04-19 10:28:41','2018-04-20 02:18:03');

#
# Structure for table "admin_menu"
#

DROP TABLE IF EXISTS `admin_menu`;
CREATE TABLE `admin_menu` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `is_show` tinyint(1) NOT NULL DEFAULT '0',
  `is_parameter` tinyint(1) NOT NULL DEFAULT '0',
  `sort` int(11) NOT NULL DEFAULT '59',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `parameter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `font` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

#
# Data for table "admin_menu"
#

INSERT INTO `admin_menu` VALUES (1,'控制面板','Admin\\MenuController@index',NULL,1,0,59,'2018-04-18 03:02:42','2018-04-20 03:24:05',NULL,'fa-sitemap'),(2,'添加','Admin\\MenuController@create',1,0,0,59,'2018-04-18 03:08:03','2018-04-18 03:08:03',NULL,NULL),(3,'会员管理',NULL,NULL,1,0,59,'2018-04-18 03:35:28','2018-04-20 03:25:10',NULL,'fa-group'),(4,'编辑','Admin\\MenuController@edit',1,0,0,59,'2018-04-18 06:51:05','2018-04-18 06:51:05',NULL,NULL),(6,'系统设置','Admin\\ConfigController@edit',NULL,1,0,1,'2018-04-18 09:52:47','2018-04-20 03:22:10',NULL,'fa-gear'),(9,'用户列表',NULL,3,1,0,59,'2018-04-19 03:52:00','2018-04-19 03:52:00',NULL,NULL),(10,'管理员',NULL,NULL,1,0,59,'2018-04-19 07:48:03','2018-04-20 03:25:38',NULL,'fa-book'),(11,'管理员列表','Admin\\AdminController@index',10,1,0,59,'2018-04-19 07:54:52','2018-04-19 09:16:39',NULL,NULL),(12,'管理员分组','Admin\\AdminGroupController@index',10,1,0,59,'2018-04-19 09:15:54','2018-04-19 09:15:54',NULL,NULL),(13,'添加','Admin\\AdminController@create',11,0,0,59,'2018-04-19 09:17:13','2018-04-19 09:17:13',NULL,NULL),(14,'编辑','Admin\\AdminController@edit',11,0,0,59,'2018-04-19 09:20:46','2018-04-19 09:21:46',NULL,NULL),(15,'删除','Admin\\AdminController@dels',11,0,0,59,'2018-04-19 09:22:18','2018-04-19 09:22:18',NULL,NULL),(16,'添加','Admin\\AdminGroupController@create',12,0,0,59,'2018-04-19 09:23:06','2018-04-19 09:23:06',NULL,NULL),(17,'编辑','Admin\\AdminGroupController@edit',12,0,0,59,'2018-04-19 09:24:01','2018-04-19 09:24:01',NULL,NULL),(18,'删除','Admin\\AdminGroupController@dels',12,0,0,59,'2018-04-19 09:24:22','2018-04-19 09:24:22',NULL,NULL),(19,'首页','Admin\\IndexController@index',22,1,0,0,'2018-04-20 02:09:37','2018-04-20 02:16:16',NULL,NULL),(20,'管理员退出','Admin\\IndexController@quit',22,0,0,0,'2018-04-20 02:11:11','2018-04-20 02:17:45',NULL,NULL),(21,'修改密码','Admin\\IndexController@password',22,0,0,0,'2018-04-20 02:15:01','2018-04-20 02:17:36',NULL,NULL),(22,'个人中心',NULL,NULL,1,0,0,'2018-04-20 02:16:06','2018-04-20 03:21:58',NULL,'fa fa-home'),(23,'新闻资讯',NULL,NULL,1,0,60,'2018-04-20 15:47:09','2018-04-20 15:47:51',NULL,'fa-file-excel-o'),(24,'分类列表','Admin\\NewsClassController@index',23,1,0,1,'2018-04-20 16:41:13','2018-04-20 16:41:13',NULL,NULL),(25,'添加','Admin\\NewsClassController@create',24,0,0,1,'2018-04-20 16:41:56','2018-04-20 16:41:56',NULL,NULL),(26,'编辑','Admin\\NewsClassController@edit',24,0,0,2,'2018-04-20 16:42:26','2018-04-20 16:42:26',NULL,NULL),(27,'删除','Admin\\NewsClassController@dels',24,0,0,3,'2018-04-20 16:43:01','2018-04-20 16:43:22',NULL,NULL);

#
# Structure for table "admin_menu_node"
#

DROP TABLE IF EXISTS `admin_menu_node`;
CREATE TABLE `admin_menu_node` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `menu_id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

#
# Data for table "admin_menu_node"
#

INSERT INTO `admin_menu_node` VALUES (21,22,7),(22,19,7),(23,20,7),(24,21,7),(25,10,7),(26,11,7),(27,13,7);

#
# Structure for table "admins"
#

DROP TABLE IF EXISTS `admins`;
CREATE TABLE `admins` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `group_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

#
# Data for table "admins"
#

INSERT INTO `admins` VALUES (1,'admin@admin.com','eyJpdiI6InRxRUM4MU4ydE5pTm1Eb2M0RUVmWHc9PSIsInZhbHVlIjoiT1YySFZHcElHdU41UEVhSkU0dUxKZz09IiwibWFjIjoiN2Y0ZmI1NWUxNWMzZThkMDc1YjRjMjU2NzQwNzZhMTA3YThmNjNkOTA1OGY4MjdhNTJmZDhkNWY1YjUxNjFkMCJ9','15839928290','2018-03-14 02:49:57','2018-03-14 02:49:57',NULL),(3,'admin@test.com','eyJpdiI6IjQxVkptdEVSdUNqbmxKc1VTaTBXMGc9PSIsInZhbHVlIjoiM3ZLZmxvZ0F5OXkzXC9CKzE4SHpmanc9PSIsIm1hYyI6IjkwYjg5YTJjYWJjMzBjZmJjZTBhMjU1YTAwZmVkMzY4MDRiY2M4NDM1ZGY2ZmNiOWMyN2UwOWU2MTk0YjE3OGYifQ==','15839928290','2018-04-19 09:09:17','2018-04-19 10:45:02',7);

#
# Structure for table "coins"
#

DROP TABLE IF EXISTS `coins`;
CREATE TABLE `coins` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `en_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo_path` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_out` tinyint(1) NOT NULL DEFAULT '0',
  `is_in` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

#
# Data for table "coins"
#


#
# Structure for table "config"
#

DROP TABLE IF EXISTS `config`;
CREATE TABLE `config` (
  `field` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

#
# Data for table "config"
#

INSERT INTO `config` VALUES ('name','123'),('mobile','123');

#
# Structure for table "migrations"
#

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

#
# Data for table "migrations"
#

INSERT INTO `migrations` VALUES (1,'2018_03_14_022526_create_users_table',1),(2,'2018_03_14_022626_create_admins_table',1),(3,'2018_03_19_032401_create_site_tables',2),(4,'2018_04_17_081457_create_admin_menu_tables',2),(5,'2018_04_18_033805_add_field_to_admin_menus',3),(6,'2018_04_18_090041_create_users_tables',4),(7,'2018_04_18_094127_create_config_tables',5),(8,'2018_04_20_152854_create_news_tables',6);

#
# Structure for table "news"
#

DROP TABLE IF EXISTS `news`;
CREATE TABLE `news` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `class_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lang` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'zh',
  `sort` int(11) NOT NULL DEFAULT '99',
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `intro` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

#
# Data for table "news"
#


#
# Structure for table "news_class"
#

DROP TABLE IF EXISTS `news_class`;
CREATE TABLE `news_class` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sort` int(11) NOT NULL DEFAULT '99',
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `intro` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

#
# Data for table "news_class"
#

INSERT INTO `news_class` VALUES (1,NULL,'公告',1,'',NULL,'2018-04-20 18:10:10','2018-04-20 18:10:10'),(3,1,'资讯',1,'1',NULL,'2018-04-20 18:24:01','2018-04-20 18:26:27');

#
# Structure for table "reward_static"
#

DROP TABLE IF EXISTS `reward_static`;
CREATE TABLE `reward_static` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `rate` int(11) DEFAULT NULL,
  `num` decimal(20,8) NOT NULL,
  `num_u` decimal(20,8) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

#
# Data for table "reward_static"
#


#
# Structure for table "sites"
#

DROP TABLE IF EXISTS `sites`;
CREATE TABLE `sites` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo_path` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `people_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

#
# Data for table "sites"
#


#
# Structure for table "user_assets"
#

DROP TABLE IF EXISTS `user_assets`;
CREATE TABLE `user_assets` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `left_asset` decimal(20,8) NOT NULL DEFAULT '0.00000000',
  `total_left_asset` decimal(20,8) NOT NULL DEFAULT '0.00000000',
  `right_asset` decimal(20,8) NOT NULL DEFAULT '0.00000000',
  `total_right_asset` decimal(20,8) NOT NULL DEFAULT '0.00000000',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

#
# Data for table "user_assets"
#


#
# Structure for table "user_finance"
#

DROP TABLE IF EXISTS `user_finance`;
CREATE TABLE `user_finance` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `coin_id` int(11) NOT NULL,
  `num` decimal(20,8) NOT NULL,
  `lock_num` decimal(20,8) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `index` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_finance_index_unique` (`index`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

#
# Data for table "user_finance"
#


#
# Structure for table "user_tree"
#

DROP TABLE IF EXISTS `user_tree`;
CREATE TABLE `user_tree` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `tid` int(11) DEFAULT NULL,
  `aid` int(11) DEFAULT NULL,
  `left_id` int(11) DEFAULT NULL,
  `right_id` int(11) DEFAULT NULL,
  `layer` int(11) NOT NULL DEFAULT '1',
  `left_tree` text COLLATE utf8mb4_unicode_ci,
  `right_tree` text COLLATE utf8mb4_unicode_ci,
  `a_tree` text COLLATE utf8mb4_unicode_ci,
  `t_tree` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

#
# Data for table "user_tree"
#


#
# Structure for table "users"
#

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tpassword` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_lock` tinyint(1) NOT NULL DEFAULT '0',
  `sort` int(11) NOT NULL DEFAULT '59',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

#
# Data for table "users"
#

