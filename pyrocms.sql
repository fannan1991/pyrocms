/*
SQLyog Ultimate v11.24 (64 bit)
MySQL - 5.5.53 : Database - pyrocms
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`pyrocms` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `pyrocms`;

/*Table structure for table `applications` */

DROP TABLE IF EXISTS `applications`;

CREATE TABLE `applications` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `reference` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `domain` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `unique_application_references` (`reference`),
  UNIQUE KEY `unique_application_domains` (`domain`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `applications` */

insert  into `applications`(`id`,`name`,`reference`,`domain`,`enabled`) values (1,'Default','default','pyrocms.local',1);

/*Table structure for table `applications_domains` */

DROP TABLE IF EXISTS `applications_domains`;

CREATE TABLE `applications_domains` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `application_id` int(11) NOT NULL,
  `domain` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `locale` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `unique_application_aliases` (`domain`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `applications_domains` */

/*Table structure for table `default_addons_extensions` */

DROP TABLE IF EXISTS `default_addons_extensions`;

CREATE TABLE `default_addons_extensions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `namespace` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `installed` tinyint(1) NOT NULL DEFAULT '0',
  `enabled` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `unique_extensions` (`namespace`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `default_addons_extensions` */

insert  into `default_addons_extensions`(`id`,`namespace`,`installed`,`enabled`) values (1,'anomaly.extension.default_authenticator',1,1),(2,'anomaly.extension.default_page_handler',1,1),(3,'anomaly.extension.local_storage_adapter',1,1),(4,'anomaly.extension.page_link_type',1,1),(5,'anomaly.extension.robots',1,1),(6,'anomaly.extension.sitemap',1,1),(7,'anomaly.extension.throttle_security_check',1,1),(8,'anomaly.extension.url_link_type',1,1),(9,'anomaly.extension.user_security_check',1,1),(10,'anomaly.extension.xml_feed_widget',1,1);

/*Table structure for table `default_addons_modules` */

DROP TABLE IF EXISTS `default_addons_modules`;

CREATE TABLE `default_addons_modules` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `namespace` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `installed` tinyint(1) NOT NULL DEFAULT '0',
  `enabled` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `unique_modules` (`namespace`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `default_addons_modules` */

insert  into `default_addons_modules`(`id`,`namespace`,`installed`,`enabled`) values (1,'anomaly.module.addons',1,1),(2,'anomaly.module.configuration',1,1),(3,'anomaly.module.dashboard',1,1),(4,'anomaly.module.files',1,1),(5,'anomaly.module.navigation',1,1),(6,'anomaly.module.pages',1,1),(7,'anomaly.module.posts',1,1),(8,'anomaly.module.preferences',1,1),(9,'anomaly.module.redirects',1,1),(10,'anomaly.module.repeaters',1,1),(11,'anomaly.module.settings',1,1),(12,'anomaly.module.users',1,1),(13,'anomaly.module.variables',1,1),(14,'fannan.module.test',1,1),(15,'fannan.module.members',1,1);

/*Table structure for table `default_configuration_configuration` */

DROP TABLE IF EXISTS `default_configuration_configuration`;

CREATE TABLE `default_configuration_configuration` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `sort_order` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `created_by_id` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by_id` int(11) DEFAULT NULL,
  `scope` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `key` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `value` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `default_configuration_configuration` */

insert  into `default_configuration_configuration`(`id`,`sort_order`,`created_at`,`created_by_id`,`updated_at`,`updated_by_id`,`scope`,`key`,`value`) values (1,1,'2017-06-30 17:01:21',NULL,NULL,NULL,'1','anomaly.extension.xml_feed_widget::url','http://www.pyrocms.com/posts/rss.xml');

/*Table structure for table `default_dashboard_dashboards` */

DROP TABLE IF EXISTS `default_dashboard_dashboards`;

CREATE TABLE `default_dashboard_dashboards` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `sort_order` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `created_by_id` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by_id` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `layout` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `9e2c1f0b0af4a3796ef2922690d63a22` (`slug`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `default_dashboard_dashboards` */

insert  into `default_dashboard_dashboards`(`id`,`sort_order`,`created_at`,`created_by_id`,`updated_at`,`updated_by_id`,`deleted_at`,`slug`,`layout`) values (1,1,'2017-06-30 17:01:20',NULL,NULL,NULL,NULL,'welcome','24');

/*Table structure for table `default_dashboard_dashboards_allowed_roles` */

DROP TABLE IF EXISTS `default_dashboard_dashboards_allowed_roles`;

CREATE TABLE `default_dashboard_dashboards_allowed_roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `entry_id` int(11) NOT NULL,
  `related_id` int(11) NOT NULL,
  `sort_order` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `unique-relations` (`entry_id`,`related_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `default_dashboard_dashboards_allowed_roles` */

/*Table structure for table `default_dashboard_dashboards_translations` */

DROP TABLE IF EXISTS `default_dashboard_dashboards_translations`;

CREATE TABLE `default_dashboard_dashboards_translations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `entry_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `created_by_id` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by_id` int(11) DEFAULT NULL,
  `locale` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`),
  KEY `dashboard_dashboards_translations_locale_index` (`locale`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `default_dashboard_dashboards_translations` */

insert  into `default_dashboard_dashboards_translations`(`id`,`entry_id`,`created_at`,`created_by_id`,`updated_at`,`updated_by_id`,`locale`,`name`,`description`) values (1,1,'2017-06-30 17:01:20',NULL,'2017-06-30 17:01:20',NULL,'en','Welcome','This is the default dashboard for PyroCMS.');

/*Table structure for table `default_dashboard_widgets` */

DROP TABLE IF EXISTS `default_dashboard_widgets`;

CREATE TABLE `default_dashboard_widgets` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `sort_order` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `created_by_id` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by_id` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `extension` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `column` int(11) NOT NULL DEFAULT '1',
  `dashboard_id` int(11) NOT NULL,
  `pinned` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `default_dashboard_widgets` */

insert  into `default_dashboard_widgets`(`id`,`sort_order`,`created_at`,`created_by_id`,`updated_at`,`updated_by_id`,`deleted_at`,`extension`,`column`,`dashboard_id`,`pinned`) values (1,1,'2017-06-30 17:01:21',NULL,NULL,NULL,NULL,'anomaly.extension.xml_feed_widget',1,1,0);

/*Table structure for table `default_dashboard_widgets_allowed_roles` */

DROP TABLE IF EXISTS `default_dashboard_widgets_allowed_roles`;

CREATE TABLE `default_dashboard_widgets_allowed_roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `entry_id` int(11) NOT NULL,
  `related_id` int(11) NOT NULL,
  `sort_order` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `unique-relations` (`entry_id`,`related_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `default_dashboard_widgets_allowed_roles` */

/*Table structure for table `default_dashboard_widgets_translations` */

DROP TABLE IF EXISTS `default_dashboard_widgets_translations`;

CREATE TABLE `default_dashboard_widgets_translations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `entry_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `created_by_id` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by_id` int(11) DEFAULT NULL,
  `locale` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`),
  KEY `dashboard_widgets_translations_locale_index` (`locale`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `default_dashboard_widgets_translations` */

insert  into `default_dashboard_widgets_translations`(`id`,`entry_id`,`created_at`,`created_by_id`,`updated_at`,`updated_by_id`,`locale`,`title`,`description`) values (1,1,'2017-06-30 17:01:21',NULL,'2017-06-30 17:01:21',NULL,'en','Recent News','Recent news from http://pyrocms.com/');

/*Table structure for table `default_failed_jobs` */

DROP TABLE IF EXISTS `default_failed_jobs`;

CREATE TABLE `default_failed_jobs` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8_unicode_ci NOT NULL,
  `queue` text COLLATE utf8_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `default_failed_jobs` */

/*Table structure for table `default_files_disks` */

DROP TABLE IF EXISTS `default_files_disks`;

CREATE TABLE `default_files_disks` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `sort_order` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `created_by_id` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by_id` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `adapter` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `e45e39ecdef3a3c7a5535279b117d2a4` (`slug`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `default_files_disks` */

insert  into `default_files_disks`(`id`,`sort_order`,`created_at`,`created_by_id`,`updated_at`,`updated_by_id`,`deleted_at`,`slug`,`adapter`) values (1,1,'2017-06-30 17:01:24',NULL,NULL,NULL,NULL,'local','anomaly.extension.local_storage_adapter');

/*Table structure for table `default_files_disks_translations` */

DROP TABLE IF EXISTS `default_files_disks_translations`;

CREATE TABLE `default_files_disks_translations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `entry_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `created_by_id` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by_id` int(11) DEFAULT NULL,
  `locale` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`),
  KEY `files_disks_translations_locale_index` (`locale`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `default_files_disks_translations` */

insert  into `default_files_disks_translations`(`id`,`entry_id`,`created_at`,`created_by_id`,`updated_at`,`updated_by_id`,`locale`,`name`,`description`) values (1,1,'2017-06-30 17:01:24',NULL,'2017-06-30 17:01:24',NULL,'en','Local','A local (public) storage disk.');

/*Table structure for table `default_files_documents` */

DROP TABLE IF EXISTS `default_files_documents`;

CREATE TABLE `default_files_documents` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `sort_order` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `created_by_id` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by_id` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `default_files_documents` */

/*Table structure for table `default_files_documents_translations` */

DROP TABLE IF EXISTS `default_files_documents_translations`;

CREATE TABLE `default_files_documents_translations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `entry_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `created_by_id` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by_id` int(11) DEFAULT NULL,
  `locale` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `files_documents_translations_locale_index` (`locale`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `default_files_documents_translations` */

/*Table structure for table `default_files_files` */

DROP TABLE IF EXISTS `default_files_files`;

CREATE TABLE `default_files_files` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `sort_order` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `created_by_id` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by_id` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `disk_id` int(11) NOT NULL,
  `folder_id` int(11) NOT NULL,
  `extension` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `size` int(11) NOT NULL,
  `mime_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `entry_id` int(11) DEFAULT NULL,
  `entry_type` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `keywords` text COLLATE utf8_unicode_ci,
  `height` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `width` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `default_files_files` */

insert  into `default_files_files`(`id`,`sort_order`,`created_at`,`created_by_id`,`updated_at`,`updated_by_id`,`deleted_at`,`name`,`disk_id`,`folder_id`,`extension`,`size`,`mime_type`,`entry_id`,`entry_type`,`keywords`,`height`,`width`) values (1,1,'2017-07-03 03:23:42',1,'2017-07-03 03:23:47',1,NULL,'stock-photo-112736013.jpg',1,1,'jpg',104223,'image/jpeg',NULL,'Anomaly\\Streams\\Platform\\Model\\Files\\FilesImagesEntryModel',NULL,'600','900'),(2,2,'2017-07-03 03:41:07',1,'2017-07-03 03:41:08',1,NULL,'stock-photo-171506373.jpg',1,1,'jpg',137790,'image/jpeg',NULL,'Anomaly\\Streams\\Platform\\Model\\Files\\FilesImagesEntryModel',NULL,'600','900'),(3,3,'2017-07-03 03:41:13',1,'2017-07-03 03:41:14',1,NULL,'stock-photo-192034021.jpg',1,1,'jpg',105076,'image/jpeg',NULL,'Anomaly\\Streams\\Platform\\Model\\Files\\FilesImagesEntryModel',NULL,'601','900'),(4,4,'2017-07-03 03:41:19',1,'2017-07-03 03:41:20',1,NULL,'stock-photo-199475515.jpg',1,1,'jpg',72541,'image/jpeg',NULL,'Anomaly\\Streams\\Platform\\Model\\Files\\FilesImagesEntryModel',NULL,'570','900');

/*Table structure for table `default_files_folders` */

DROP TABLE IF EXISTS `default_files_folders`;

CREATE TABLE `default_files_folders` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `sort_order` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `created_by_id` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by_id` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `disk_id` int(11) NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `allowed_types` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`),
  UNIQUE KEY `eb1f1e9d6c256e3428a0c6606a721cc5` (`slug`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `default_files_folders` */

insert  into `default_files_folders`(`id`,`sort_order`,`created_at`,`created_by_id`,`updated_at`,`updated_by_id`,`deleted_at`,`disk_id`,`slug`,`allowed_types`) values (1,1,'2017-06-30 17:01:24',NULL,NULL,NULL,NULL,1,'images','a:3:{i:0;s:3:\"png\";i:1;s:4:\"jpeg\";i:2;s:3:\"jpg\";}'),(2,2,'2017-06-30 17:01:25',NULL,'2017-07-03 03:56:26',1,NULL,1,'documents','a:5:{i:0;s:3:\"pdf\";i:1;s:4:\"docx\";i:2;s:3:\"txt\";i:3;s:4:\"xlsx\";i:4;s:4:\"pptx\";}'),(3,3,'2017-07-03 04:04:34',1,NULL,NULL,NULL,1,'video','a:1:{i:0;s:3:\"mp4\";}'),(4,4,'2017-07-03 05:53:01',1,'2017-07-03 05:53:38',1,NULL,1,'voice','a:1:{i:0;s:3:\"mp3\";}');

/*Table structure for table `default_files_folders_translations` */

DROP TABLE IF EXISTS `default_files_folders_translations`;

CREATE TABLE `default_files_folders_translations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `entry_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `created_by_id` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by_id` int(11) DEFAULT NULL,
  `locale` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`),
  KEY `files_folders_translations_locale_index` (`locale`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `default_files_folders_translations` */

insert  into `default_files_folders_translations`(`id`,`entry_id`,`created_at`,`created_by_id`,`updated_at`,`updated_by_id`,`locale`,`name`,`description`) values (1,1,'2017-06-30 17:01:25',NULL,'2017-06-30 17:01:25',NULL,'en','Images','A folder for images.'),(2,2,'2017-06-30 17:01:25',NULL,'2017-06-30 17:01:25',NULL,'en','Documents','A folder for documents.'),(3,2,'2017-07-03 03:56:26',NULL,'2017-07-03 04:02:55',1,'zh-cn','Documents','文件存储目录'),(4,1,'2017-07-03 04:00:55',NULL,'2017-07-03 04:03:39',1,'zh-cn','Images','图片存储目录'),(5,3,'2017-07-03 04:04:37',NULL,'2017-07-03 04:04:37',1,'zh-cn','Video','视频存储目录'),(6,4,'2017-07-03 05:53:04',NULL,'2017-07-03 05:53:04',1,'zh-cn','Voice','音频存储目录');

/*Table structure for table `default_files_images` */

DROP TABLE IF EXISTS `default_files_images`;

CREATE TABLE `default_files_images` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `sort_order` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `created_by_id` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by_id` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `default_files_images` */

/*Table structure for table `default_files_images_translations` */

DROP TABLE IF EXISTS `default_files_images_translations`;

CREATE TABLE `default_files_images_translations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `entry_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `created_by_id` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by_id` int(11) DEFAULT NULL,
  `locale` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `files_images_translations_locale_index` (`locale`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `default_files_images_translations` */

/*Table structure for table `default_files_video` */

DROP TABLE IF EXISTS `default_files_video`;

CREATE TABLE `default_files_video` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `sort_order` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `created_by_id` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by_id` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `default_files_video` */

/*Table structure for table `default_files_video_translations` */

DROP TABLE IF EXISTS `default_files_video_translations`;

CREATE TABLE `default_files_video_translations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `entry_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `created_by_id` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by_id` int(11) DEFAULT NULL,
  `locale` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `files_video_translations_locale_index` (`locale`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `default_files_video_translations` */

/*Table structure for table `default_files_voice` */

DROP TABLE IF EXISTS `default_files_voice`;

CREATE TABLE `default_files_voice` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `sort_order` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `created_by_id` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by_id` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `default_files_voice` */

/*Table structure for table `default_files_voice_translations` */

DROP TABLE IF EXISTS `default_files_voice_translations`;

CREATE TABLE `default_files_voice_translations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `entry_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `created_by_id` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by_id` int(11) DEFAULT NULL,
  `locale` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `files_voice_translations_locale_index` (`locale`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `default_files_voice_translations` */

/*Table structure for table `default_jobs` */

DROP TABLE IF EXISTS `default_jobs`;

CREATE TABLE `default_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `queue` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8_unicode_ci NOT NULL,
  `attempts` tinyint(3) unsigned NOT NULL,
  `reserved_at` int(10) unsigned DEFAULT NULL,
  `available_at` int(10) unsigned NOT NULL,
  `created_at` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jobs_queue_reserved_at_index` (`queue`,`reserved_at`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `default_jobs` */

/*Table structure for table `default_members_members` */

DROP TABLE IF EXISTS `default_members_members`;

CREATE TABLE `default_members_members` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `mobile` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `created_by_id` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by_id` int(11) DEFAULT NULL,
  `password` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `openid` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `invitation_code` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `sort_order` int(11) DEFAULT NULL,
  `nickname` varchar(24) COLLATE utf8_unicode_ci DEFAULT NULL,
  `avatar_id` int(11) DEFAULT NULL,
  `is_verified` tinyint(1) DEFAULT '0',
  `grade` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `real_name` varchar(12) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_card` varchar(24) COLLATE utf8_unicode_ci DEFAULT NULL,
  `card_positive_pic_id` int(11) DEFAULT NULL,
  `card_negative_pic_id` int(11) DEFAULT NULL,
  `card_pic_id` int(11) DEFAULT NULL,
  `results` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `integral` int(11) DEFAULT '0',
  `gold` int(11) DEFAULT '0',
  `parent_id` int(11) DEFAULT '0',
  `grand_id` int(11) DEFAULT '0',
  `great_grand_id` int(11) DEFAULT '0',
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `38e5347a4fa351f94846c94ac827e0b5` (`mobile`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `default_members_members` */

insert  into `default_members_members`(`id`,`mobile`,`created_by_id`,`updated_at`,`updated_by_id`,`password`,`openid`,`invitation_code`,`sort_order`,`nickname`,`avatar_id`,`is_verified`,`grade`,`real_name`,`id_card`,`card_positive_pic_id`,`card_negative_pic_id`,`card_pic_id`,`results`,`integral`,`gold`,`parent_id`,`grand_id`,`great_grand_id`,`created_at`) values (1,'15002983802',1,NULL,NULL,'','123456','123456',1,'fannan',1,1,'1','樊楠','142345556666777766',2,3,4,'认证成功',0,0,0,0,0,'2017-07-10 09:23:06');

/*Table structure for table `default_migrations` */

DROP TABLE IF EXISTS `default_migrations`;

CREATE TABLE `default_migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=121 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `default_migrations` */

insert  into `default_migrations`(`id`,`migration`,`batch`) values (1,'2015_03_15_171506_create_jobs_table',1),(2,'2015_03_15_171507_create_failed_jobs_table',1),(3,'2015_03_15_171508_create_sessions_table',1),(4,'2015_03_15_171620_create_streams_tables',1),(5,'2015_03_15_171646_create_fields_tables',1),(6,'2015_03_15_171720_create_assignments_tables',1),(7,'2015_03_15_171838_create_modules_table',1),(8,'2015_03_15_171926_create_extensions_table',1),(9,'2016_08_30_185635_create_notifications_table',1),(10,'2016_09_02_164448_add_searchable_column_to_streams',1),(11,'2016_11_11_154228_append_id_to_user_meta_columns',1),(43,'2015_03_25_091755_anomaly.module.configuration__create_configuration_fields',11),(44,'2015_03_25_091845_anomaly.module.configuration__create_configuration_stream',11),(45,'2015_11_01_164326_anomaly.module.dashboard__create_dashboard_fields',12),(46,'2015_11_01_170645_anomaly.module.dashboard__create_dashboards_stream',12),(47,'2015_11_01_170650_anomaly.module.dashboard__create_widgets_stream',12),(48,'2015_03_05_021725_anomaly.module.files__create_files_fields',13),(49,'2015_03_05_022227_anomaly.module.files__create_disks_stream',13),(50,'2015_06_09_031343_anomaly.module.files__create_folders_stream',13),(51,'2015_06_09_031351_anomaly.module.files__create_files_stream',13),(52,'2016_08_29_151020_anomaly.module.files__remove_required_from_entry_assignment',13),(53,'2016_09_02_175659_anomaly.module.files__make_files_searchable',13),(55,'2015_05_21_061832_anomaly.module.navigation__create_navigation_fields',14),(56,'2015_05_21_062115_anomaly.module.navigation__create_menus_stream',14),(57,'2015_05_21_064952_anomaly.module.navigation__create_links_stream',14),(58,'2015_03_20_171947_anomaly.module.pages__create_pages_fields',15),(59,'2015_03_20_171955_anomaly.module.pages__create_pages_stream',15),(60,'2015_04_22_150211_anomaly.module.pages__create_types_stream',15),(92,'2015_03_20_184103_anomaly.module.posts__create_posts_fields',23),(93,'2015_03_20_184141_anomaly.module.posts__create_categories_stream',23),(94,'2015_03_20_184148_anomaly.module.posts__create_posts_stream',23),(95,'2015_05_16_050818_anomaly.module.posts__create_types_stream',23),(67,'2015_02_27_101227_anomaly.module.preferences__create_preferences_fields',17),(68,'2015_02_27_101300_anomaly.module.preferences__create_preferences_streams',17),(69,'2016_11_16_151654_anomaly.module.preferences__update_user_related_config',17),(70,'2015_03_21_153325_anomaly.module.redirects__create_redirects_fields',18),(71,'2015_03_21_153326_anomaly.module.redirects__create_redirects_stream',18),(41,'2015_03_15_171404_create_applications_table',10),(42,'2015_03_15_171506_create_applications_domains_table',10),(54,'2016_10_05_221741_anomaly.module.files__make_disks_sortable',13),(61,'2016_09_02_175135_anomaly.module.pages__make_pages_searchable',15),(96,'2016_09_02_175531_anomaly.module.posts__make_posts_searchable',23),(72,'2015_02_27_101410_anomaly.module.settings__create_settings_fields',19),(73,'2015_02_27_101510_anomaly.module.settings__create_settings_stream',19),(74,'2015_02_27_101816_anomaly.module.users__create_users_fields',20),(75,'2015_02_27_101851_anomaly.module.users__create_users_stream',20),(76,'2015_02_27_101940_anomaly.module.users__create_roles_stream',20),(77,'2016_09_02_175848_anomaly.module.users__make_users_searchable',20),(78,'2015_06_02_170526_anomaly.extension.page_link_type__create_page_link_type_fields',21),(79,'2015_06_02_170542_anomaly.extension.page_link_type__create_page_links_stream',21),(80,'2015_05_24_201105_anomaly.extension.url_link_type__create_url_link_type_fields',22),(81,'2015_05_24_201134_anomaly.extension.url_link_type__create_links_stream',22),(99,'2017_07_03_061102_fannan.module.test__create_test_fields',24),(100,'2017_07_03_061535_fannan.module.test__create_test_stream',24),(119,'2017_07_10_015653_fannan.module.members__create_members_fields',25),(120,'2017_07_10_032739_fannan.module.members__create_members_stream',25);

/*Table structure for table `default_navigation_links` */

DROP TABLE IF EXISTS `default_navigation_links`;

CREATE TABLE `default_navigation_links` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `sort_order` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `created_by_id` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by_id` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `menu_id` int(11) NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `entry_id` int(11) NOT NULL,
  `entry_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `target` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '_self',
  `class` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `default_navigation_links` */

insert  into `default_navigation_links`(`id`,`sort_order`,`created_at`,`created_by_id`,`updated_at`,`updated_by_id`,`deleted_at`,`menu_id`,`type`,`entry_id`,`entry_type`,`target`,`class`,`parent_id`) values (1,1,'2017-06-30 17:01:29',NULL,NULL,NULL,NULL,1,'anomaly.extension.url_link_type',1,'Anomaly\\UrlLinkTypeExtension\\UrlLinkTypeModel','_blank',NULL,NULL),(2,2,'2017-06-30 17:01:29',NULL,NULL,NULL,NULL,1,'anomaly.extension.url_link_type',2,'Anomaly\\UrlLinkTypeExtension\\UrlLinkTypeModel','_blank',NULL,NULL);

/*Table structure for table `default_navigation_links_allowed_roles` */

DROP TABLE IF EXISTS `default_navigation_links_allowed_roles`;

CREATE TABLE `default_navigation_links_allowed_roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `entry_id` int(11) NOT NULL,
  `related_id` int(11) NOT NULL,
  `sort_order` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `unique-relations` (`entry_id`,`related_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `default_navigation_links_allowed_roles` */

/*Table structure for table `default_navigation_menus` */

DROP TABLE IF EXISTS `default_navigation_menus`;

CREATE TABLE `default_navigation_menus` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `sort_order` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `created_by_id` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by_id` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `b971176b13cd6738cbb5a6905fe40e9b` (`slug`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `default_navigation_menus` */

insert  into `default_navigation_menus`(`id`,`sort_order`,`created_at`,`created_by_id`,`updated_at`,`updated_by_id`,`deleted_at`,`slug`) values (1,1,'2017-06-30 17:01:29',NULL,NULL,NULL,NULL,'footer');

/*Table structure for table `default_navigation_menus_translations` */

DROP TABLE IF EXISTS `default_navigation_menus_translations`;

CREATE TABLE `default_navigation_menus_translations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `entry_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `created_by_id` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by_id` int(11) DEFAULT NULL,
  `locale` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`),
  KEY `navigation_menus_translations_locale_index` (`locale`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `default_navigation_menus_translations` */

insert  into `default_navigation_menus_translations`(`id`,`entry_id`,`created_at`,`created_by_id`,`updated_at`,`updated_by_id`,`locale`,`name`,`description`) values (1,1,'2017-06-30 17:01:29',NULL,'2017-06-30 17:01:29',NULL,'en','Footer','This is the footer.');

/*Table structure for table `default_notifications` */

DROP TABLE IF EXISTS `default_notifications`;

CREATE TABLE `default_notifications` (
  `id` char(36) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `notifiable_id` int(10) unsigned NOT NULL,
  `notifiable_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `data` text COLLATE utf8_unicode_ci NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `notifications_notifiable_id_notifiable_type_index` (`notifiable_id`,`notifiable_type`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `default_notifications` */

/*Table structure for table `default_page_link_type_pages` */

DROP TABLE IF EXISTS `default_page_link_type_pages`;

CREATE TABLE `default_page_link_type_pages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `sort_order` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `created_by_id` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by_id` int(11) DEFAULT NULL,
  `page_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `default_page_link_type_pages` */

/*Table structure for table `default_page_link_type_pages_translations` */

DROP TABLE IF EXISTS `default_page_link_type_pages_translations`;

CREATE TABLE `default_page_link_type_pages_translations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `entry_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `created_by_id` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by_id` int(11) DEFAULT NULL,
  `locale` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`),
  KEY `page_link_type_pages_translations_locale_index` (`locale`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `default_page_link_type_pages_translations` */

/*Table structure for table `default_pages_default_pages` */

DROP TABLE IF EXISTS `default_pages_default_pages`;

CREATE TABLE `default_pages_default_pages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `sort_order` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `created_by_id` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by_id` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `default_pages_default_pages` */

insert  into `default_pages_default_pages`(`id`,`sort_order`,`created_at`,`created_by_id`,`updated_at`,`updated_by_id`,`deleted_at`) values (1,1,'2017-06-30 17:01:34',NULL,NULL,NULL,NULL),(2,2,'2017-06-30 17:01:36',NULL,NULL,NULL,NULL),(3,3,'2017-07-03 01:56:58',1,NULL,NULL,NULL),(4,4,'2017-07-03 02:04:36',1,NULL,NULL,NULL);

/*Table structure for table `default_pages_default_pages_translations` */

DROP TABLE IF EXISTS `default_pages_default_pages_translations`;

CREATE TABLE `default_pages_default_pages_translations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `entry_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `created_by_id` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by_id` int(11) DEFAULT NULL,
  `locale` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`),
  KEY `pages_default_pages_translations_locale_index` (`locale`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `default_pages_default_pages_translations` */

insert  into `default_pages_default_pages_translations`(`id`,`entry_id`,`created_at`,`created_by_id`,`updated_at`,`updated_by_id`,`locale`,`content`) values (1,1,'2017-06-30 17:01:34',NULL,'2017-06-30 17:01:34',NULL,'en','<p>Welcome to PyroCMS!</p>'),(2,2,'2017-06-30 17:01:36',NULL,'2017-06-30 17:01:36',NULL,'en','<p>Drop us a line! We\'d love to hear from you!</p><p><br></p>\n<p>{{ form(\'contact\').to(\'example@domain.com\')|raw }}</p>'),(3,3,'2017-07-03 01:56:58',NULL,'2017-07-03 01:56:58',1,'zh-cn','<p>fdfdfd</p>'),(4,4,'2017-07-03 02:04:36',NULL,'2017-07-03 02:04:36',1,'zh-cn','<p>ssss</p>');

/*Table structure for table `default_pages_pages` */

DROP TABLE IF EXISTS `default_pages_pages`;

CREATE TABLE `default_pages_pages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `sort_order` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `created_by_id` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by_id` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `str_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `path` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type_id` int(11) NOT NULL,
  `entry_id` int(11) DEFAULT NULL,
  `entry_type` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `visible` tinyint(1) DEFAULT '1',
  `enabled` tinyint(1) DEFAULT '1',
  `exact` tinyint(1) DEFAULT '1',
  `home` tinyint(1) DEFAULT '0',
  `theme_layout` varchar(255) COLLATE utf8_unicode_ci DEFAULT 'theme::layouts/default.twig',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `default_pages_pages` */

insert  into `default_pages_pages`(`id`,`sort_order`,`created_at`,`created_by_id`,`updated_at`,`updated_by_id`,`deleted_at`,`str_id`,`slug`,`path`,`type_id`,`entry_id`,`entry_type`,`parent_id`,`visible`,`enabled`,`exact`,`home`,`theme_layout`) values (1,1,'2017-06-30 17:01:34',NULL,NULL,NULL,NULL,'QDtk3lrtMbMkkpXmUhsa6DJv','welcome','/',1,1,'Anomaly\\Streams\\Platform\\Model\\Pages\\PagesDefaultPagesEntryModel',NULL,1,1,1,1,'theme::layouts/default.twig'),(2,1,'2017-06-30 17:01:36',NULL,'2017-07-03 01:57:18',1,NULL,'LkwaA1exPDHFGkS72R0XrX0m','contact','welcome/contact',1,2,'Anomaly\\Streams\\Platform\\Model\\Pages\\PagesDefaultPagesEntryModel',1,1,1,1,0,'theme::layouts/default.twig'),(3,1,'2017-07-03 01:56:58',1,'2017-07-03 01:57:19',1,NULL,'0hVdhphipKzgYq9lXt3bTL17','fffffff','welcome/contact/fffffff',1,3,'Anomaly\\Streams\\Platform\\Model\\Pages\\PagesDefaultPagesEntryModel',2,1,1,1,0,NULL),(4,4,'2017-07-03 02:04:37',1,NULL,NULL,NULL,'PcL55FZeT7X4CyoUnyS3dQuh','tesssss','welcome/contact/fffffff/tesssss',1,4,'Anomaly\\Streams\\Platform\\Model\\Pages\\PagesDefaultPagesEntryModel',3,1,1,1,0,NULL);

/*Table structure for table `default_pages_pages_allowed_roles` */

DROP TABLE IF EXISTS `default_pages_pages_allowed_roles`;

CREATE TABLE `default_pages_pages_allowed_roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `entry_id` int(11) NOT NULL,
  `related_id` int(11) NOT NULL,
  `sort_order` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `unique-relations` (`entry_id`,`related_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `default_pages_pages_allowed_roles` */

/*Table structure for table `default_pages_pages_translations` */

DROP TABLE IF EXISTS `default_pages_pages_translations`;

CREATE TABLE `default_pages_pages_translations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `entry_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `created_by_id` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by_id` int(11) DEFAULT NULL,
  `locale` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8_unicode_ci,
  `meta_keywords` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`),
  KEY `pages_pages_translations_locale_index` (`locale`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `default_pages_pages_translations` */

insert  into `default_pages_pages_translations`(`id`,`entry_id`,`created_at`,`created_by_id`,`updated_at`,`updated_by_id`,`locale`,`title`,`meta_title`,`meta_description`,`meta_keywords`) values (1,1,'2017-06-30 17:01:36',NULL,'2017-06-30 17:01:36',NULL,'en','Welcome',NULL,NULL,NULL),(2,2,'2017-06-30 17:01:36',NULL,'2017-06-30 17:01:36',NULL,'en','Contact',NULL,NULL,NULL),(3,3,'2017-07-03 01:56:59',NULL,'2017-07-03 01:56:59',1,'zh-cn','fffffff',NULL,NULL,'a:0:{}'),(4,4,'2017-07-03 02:04:37',NULL,'2017-07-03 02:04:37',1,'zh-cn','tesssss',NULL,NULL,'a:0:{}');

/*Table structure for table `default_pages_types` */

DROP TABLE IF EXISTS `default_pages_types`;

CREATE TABLE `default_pages_types` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `sort_order` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `created_by_id` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by_id` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `theme_layout` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'theme::layouts/default.twig',
  `layout` text COLLATE utf8_unicode_ci NOT NULL,
  `handler` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'anomaly.extension.default_page_handler',
  PRIMARY KEY (`id`),
  UNIQUE KEY `381176fc0d89ae8d97d99ce9b6109b9a` (`slug`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `default_pages_types` */

insert  into `default_pages_types`(`id`,`sort_order`,`created_at`,`created_by_id`,`updated_at`,`updated_by_id`,`deleted_at`,`slug`,`theme_layout`,`layout`,`handler`) values (1,1,'2017-06-30 17:01:33',NULL,NULL,NULL,NULL,'default','theme::layouts/default.twig','<h1>{{ page.title }}</h1>\n\n{{ page.content.render|raw }}','anomaly.extension.default_page_handler');

/*Table structure for table `default_pages_types_translations` */

DROP TABLE IF EXISTS `default_pages_types_translations`;

CREATE TABLE `default_pages_types_translations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `entry_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `created_by_id` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by_id` int(11) DEFAULT NULL,
  `locale` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`),
  KEY `pages_types_translations_locale_index` (`locale`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `default_pages_types_translations` */

insert  into `default_pages_types_translations`(`id`,`entry_id`,`created_at`,`created_by_id`,`updated_at`,`updated_by_id`,`locale`,`name`,`description`) values (1,1,'2017-06-30 17:01:34',NULL,'2017-06-30 17:01:34',NULL,'en','Default','A simple page type.');

/*Table structure for table `default_posts_atlas_posts` */

DROP TABLE IF EXISTS `default_posts_atlas_posts`;

CREATE TABLE `default_posts_atlas_posts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `sort_order` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `created_by_id` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by_id` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `image_id` int(11) DEFAULT NULL,
  `content` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `default_posts_atlas_posts` */

insert  into `default_posts_atlas_posts`(`id`,`sort_order`,`created_at`,`created_by_id`,`updated_at`,`updated_by_id`,`deleted_at`,`image_id`,`content`) values (1,1,'2017-07-03 03:43:20',1,NULL,NULL,NULL,1,'<p>fdsfds</p>');

/*Table structure for table `default_posts_atlas_posts_atlas` */

DROP TABLE IF EXISTS `default_posts_atlas_posts_atlas`;

CREATE TABLE `default_posts_atlas_posts_atlas` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `entry_id` int(11) NOT NULL,
  `file_id` int(11) NOT NULL,
  `sort_order` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `unique-files` (`entry_id`,`file_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `default_posts_atlas_posts_atlas` */

insert  into `default_posts_atlas_posts_atlas`(`id`,`entry_id`,`file_id`,`sort_order`) values (1,1,2,1),(2,1,3,2),(3,1,4,3),(4,1,1,4);

/*Table structure for table `default_posts_atlas_posts_translations` */

DROP TABLE IF EXISTS `default_posts_atlas_posts_translations`;

CREATE TABLE `default_posts_atlas_posts_translations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `entry_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `created_by_id` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by_id` int(11) DEFAULT NULL,
  `locale` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `posts_atlas_posts_translations_locale_index` (`locale`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `default_posts_atlas_posts_translations` */

insert  into `default_posts_atlas_posts_translations`(`id`,`entry_id`,`created_at`,`created_by_id`,`updated_at`,`updated_by_id`,`locale`) values (1,1,'2017-07-03 03:43:20',NULL,'2017-07-03 03:43:20',1,'zh-cn');

/*Table structure for table `default_posts_categories` */

DROP TABLE IF EXISTS `default_posts_categories`;

CREATE TABLE `default_posts_categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `sort_order` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `created_by_id` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by_id` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `9a8a0682d35f9b22c741cb0536aa691f` (`slug`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `default_posts_categories` */

insert  into `default_posts_categories`(`id`,`sort_order`,`created_at`,`created_by_id`,`updated_at`,`updated_by_id`,`deleted_at`,`slug`,`parent_id`) values (1,1,'2017-07-03 02:53:28',1,'2017-07-03 03:02:37',1,NULL,'test',3),(2,1,'2017-07-03 02:53:52',1,'2017-07-03 02:54:12',1,'2017-07-03 03:11:20','sss',1),(3,1,'2017-07-03 03:01:53',1,'2017-07-03 03:02:16',1,NULL,'fgads',NULL);

/*Table structure for table `default_posts_categories_translations` */

DROP TABLE IF EXISTS `default_posts_categories_translations`;

CREATE TABLE `default_posts_categories_translations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `entry_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `created_by_id` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by_id` int(11) DEFAULT NULL,
  `locale` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`),
  KEY `posts_categories_translations_locale_index` (`locale`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `default_posts_categories_translations` */

insert  into `default_posts_categories_translations`(`id`,`entry_id`,`created_at`,`created_by_id`,`updated_at`,`updated_by_id`,`locale`,`name`,`description`) values (1,1,'2017-07-03 02:53:28',NULL,'2017-07-03 02:53:28',1,'zh-cn','test',NULL),(2,2,'2017-07-03 02:53:52',NULL,'2017-07-03 02:53:52',1,'zh-cn','sss',NULL),(3,3,'2017-07-03 03:01:53',NULL,'2017-07-03 03:01:53',1,'zh-cn','fgads','dsa');

/*Table structure for table `default_posts_default_posts` */

DROP TABLE IF EXISTS `default_posts_default_posts`;

CREATE TABLE `default_posts_default_posts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `sort_order` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `created_by_id` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by_id` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `content` text COLLATE utf8_unicode_ci,
  `image_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `default_posts_default_posts` */

insert  into `default_posts_default_posts`(`id`,`sort_order`,`created_at`,`created_by_id`,`updated_at`,`updated_by_id`,`deleted_at`,`content`,`image_id`) values (1,1,'2017-06-30 17:01:41',NULL,NULL,NULL,NULL,NULL,NULL),(2,2,'2017-07-03 03:24:16',1,NULL,NULL,NULL,'<p>test</p>',1);

/*Table structure for table `default_posts_default_posts_translations` */

DROP TABLE IF EXISTS `default_posts_default_posts_translations`;

CREATE TABLE `default_posts_default_posts_translations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `entry_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `created_by_id` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by_id` int(11) DEFAULT NULL,
  `locale` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `posts_default_posts_translations_locale_index` (`locale`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `default_posts_default_posts_translations` */

insert  into `default_posts_default_posts_translations`(`id`,`entry_id`,`created_at`,`created_by_id`,`updated_at`,`updated_by_id`,`locale`) values (1,1,'2017-06-30 17:01:41',NULL,'2017-06-30 17:01:41',NULL,'en'),(2,2,'2017-07-03 03:24:16',NULL,'2017-07-03 03:24:16',1,'zh-cn');

/*Table structure for table `default_posts_posts` */

DROP TABLE IF EXISTS `default_posts_posts`;

CREATE TABLE `default_posts_posts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `sort_order` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `created_by_id` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by_id` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `str_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type_id` int(11) NOT NULL,
  `publish_at` datetime NOT NULL,
  `author_id` int(11) NOT NULL,
  `entry_id` int(11) NOT NULL,
  `entry_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `featured` tinyint(1) DEFAULT '0',
  `enabled` tinyint(1) DEFAULT '0',
  `tags` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`),
  UNIQUE KEY `a1128facbe9e8e6c2c59eddcfa495104` (`str_id`),
  UNIQUE KEY `0c47b5470543e28befe49a899387ccff` (`slug`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `default_posts_posts` */

insert  into `default_posts_posts`(`id`,`sort_order`,`created_at`,`created_by_id`,`updated_at`,`updated_by_id`,`deleted_at`,`str_id`,`slug`,`type_id`,`publish_at`,`author_id`,`entry_id`,`entry_type`,`category_id`,`featured`,`enabled`,`tags`) values (1,1,'2017-07-03 03:24:16',1,NULL,NULL,NULL,'aZGn5UHqyuwzd9vu','test',1,'2017-07-03 03:20:00',1,2,'Anomaly\\Streams\\Platform\\Model\\Posts\\PostsDefaultPostsEntryModel',NULL,0,0,'a:0:{}'),(2,2,'2017-07-03 03:43:20',1,NULL,NULL,NULL,'ITdF42TT4AZFN2k7','tes-t-dddd',2,'2017-07-03 03:39:00',1,1,'Anomaly\\Streams\\Platform\\Model\\Posts\\PostsAtlasPostsEntryModel',NULL,0,0,'a:0:{}');

/*Table structure for table `default_posts_posts_translations` */

DROP TABLE IF EXISTS `default_posts_posts_translations`;

CREATE TABLE `default_posts_posts_translations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `entry_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `created_by_id` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by_id` int(11) DEFAULT NULL,
  `locale` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `summary` text COLLATE utf8_unicode_ci,
  `meta_title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8_unicode_ci,
  `meta_keywords` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`),
  KEY `posts_posts_translations_locale_index` (`locale`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `default_posts_posts_translations` */

insert  into `default_posts_posts_translations`(`id`,`entry_id`,`created_at`,`created_by_id`,`updated_at`,`updated_by_id`,`locale`,`title`,`summary`,`meta_title`,`meta_description`,`meta_keywords`) values (1,1,'2017-07-03 03:24:21',NULL,'2017-07-03 03:24:21',1,'zh-cn','test','test',NULL,NULL,'a:0:{}'),(2,2,'2017-07-03 03:43:21',NULL,'2017-07-03 03:43:21',1,'zh-cn','图集test','dfs',NULL,NULL,'a:0:{}');

/*Table structure for table `default_posts_types` */

DROP TABLE IF EXISTS `default_posts_types`;

CREATE TABLE `default_posts_types` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `sort_order` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `created_by_id` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by_id` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `layout` text COLLATE utf8_unicode_ci NOT NULL,
  `theme_layout` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `1dc1b98be4181be266b483941a42b000` (`slug`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `default_posts_types` */

insert  into `default_posts_types`(`id`,`sort_order`,`created_at`,`created_by_id`,`updated_at`,`updated_by_id`,`deleted_at`,`slug`,`layout`,`theme_layout`) values (1,1,'2017-07-03 03:13:23',1,NULL,NULL,NULL,'default','{{ post.content|raw }}','theme::layouts.default'),(2,2,'2017-07-03 03:33:18',1,NULL,NULL,NULL,'atlas','{{ post.content|raw }}','theme::layouts.default'),(3,3,'2017-07-03 03:49:07',1,NULL,NULL,NULL,'video','{{ post.content|raw }}','theme::layouts.default'),(4,4,'2017-07-03 04:18:58',1,NULL,NULL,NULL,'voice','{{ post.content|raw }}','theme::layouts.default');

/*Table structure for table `default_posts_types_translations` */

DROP TABLE IF EXISTS `default_posts_types_translations`;

CREATE TABLE `default_posts_types_translations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `entry_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `created_by_id` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by_id` int(11) DEFAULT NULL,
  `locale` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`),
  KEY `posts_types_translations_locale_index` (`locale`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `default_posts_types_translations` */

insert  into `default_posts_types_translations`(`id`,`entry_id`,`created_at`,`created_by_id`,`updated_at`,`updated_by_id`,`locale`,`name`,`description`) values (1,1,'2017-07-03 03:14:10',NULL,'2017-07-03 03:31:14',1,'zh-cn','Default','默认文章模型，图文文章'),(2,2,'2017-07-03 03:33:21',NULL,'2017-07-03 03:33:21',1,'zh-cn','图集','图集文章模型'),(3,3,'2017-07-03 03:49:10',NULL,'2017-07-03 03:49:10',1,'zh-cn','视频','视频文章模型'),(4,4,'2017-07-03 04:19:01',NULL,'2017-07-03 05:51:13',1,'zh-cn','音频','音频文章模型');

/*Table structure for table `default_posts_video_posts` */

DROP TABLE IF EXISTS `default_posts_video_posts`;

CREATE TABLE `default_posts_video_posts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `sort_order` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `created_by_id` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by_id` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `image_id` int(11) DEFAULT NULL,
  `videourl` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `video_id` int(11) DEFAULT NULL,
  `content` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `default_posts_video_posts` */

/*Table structure for table `default_posts_video_posts_translations` */

DROP TABLE IF EXISTS `default_posts_video_posts_translations`;

CREATE TABLE `default_posts_video_posts_translations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `entry_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `created_by_id` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by_id` int(11) DEFAULT NULL,
  `locale` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `posts_video_posts_translations_locale_index` (`locale`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `default_posts_video_posts_translations` */

/*Table structure for table `default_posts_voice_posts` */

DROP TABLE IF EXISTS `default_posts_voice_posts`;

CREATE TABLE `default_posts_voice_posts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `sort_order` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `created_by_id` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by_id` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `image_id` int(11) DEFAULT NULL,
  `voice_id` int(11) DEFAULT NULL,
  `content` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `default_posts_voice_posts` */

/*Table structure for table `default_posts_voice_posts_translations` */

DROP TABLE IF EXISTS `default_posts_voice_posts_translations`;

CREATE TABLE `default_posts_voice_posts_translations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `entry_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `created_by_id` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by_id` int(11) DEFAULT NULL,
  `locale` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `posts_voice_posts_translations_locale_index` (`locale`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `default_posts_voice_posts_translations` */

/*Table structure for table `default_preferences_preferences` */

DROP TABLE IF EXISTS `default_preferences_preferences`;

CREATE TABLE `default_preferences_preferences` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `sort_order` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `created_by_id` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by_id` int(11) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `key` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `value` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `default_preferences_preferences` */

insert  into `default_preferences_preferences`(`id`,`sort_order`,`created_at`,`created_by_id`,`updated_at`,`updated_by_id`,`user_id`,`key`,`value`) values (1,1,'2017-06-30 09:14:22',1,'2017-06-30 09:14:40',1,1,'streams::per_page','15'),(2,2,'2017-06-30 09:14:22',1,'2017-06-30 09:14:40',1,1,'streams::timezone','Asia/Shanghai'),(3,3,'2017-06-30 09:14:22',1,'2017-06-30 09:14:40',1,1,'streams::date_format','Y-m-d'),(4,4,'2017-06-30 09:14:22',1,'2017-06-30 09:14:40',1,1,'streams::time_format','H:i');

/*Table structure for table `default_redirects_redirects` */

DROP TABLE IF EXISTS `default_redirects_redirects`;

CREATE TABLE `default_redirects_redirects` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `sort_order` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `created_by_id` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by_id` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `from` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `to` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '301',
  `secure` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `0cb4275c3992e35aae2a6b18f5f213c1` (`from`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `default_redirects_redirects` */

insert  into `default_redirects_redirects`(`id`,`sort_order`,`created_at`,`created_by_id`,`updated_at`,`updated_by_id`,`deleted_at`,`from`,`to`,`status`,`secure`) values (1,1,'2017-07-14 03:12:36',1,NULL,NULL,NULL,'/','/home','301',0);

/*Table structure for table `default_sessions` */

DROP TABLE IF EXISTS `default_sessions`;

CREATE TABLE `default_sessions` (
  `id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8_unicode_ci,
  `payload` text COLLATE utf8_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL,
  UNIQUE KEY `sessions_id_unique` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `default_sessions` */

/*Table structure for table `default_settings_settings` */

DROP TABLE IF EXISTS `default_settings_settings`;

CREATE TABLE `default_settings_settings` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `sort_order` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `created_by_id` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by_id` int(11) DEFAULT NULL,
  `key` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `value` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`),
  UNIQUE KEY `c51990785fa58fe7b8132ccb33d9b45f` (`key`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `default_settings_settings` */

insert  into `default_settings_settings`(`id`,`sort_order`,`created_at`,`created_by_id`,`updated_at`,`updated_by_id`,`key`,`value`) values (1,1,'2017-06-30 17:01:55',NULL,NULL,NULL,'streams::timezone','Asia/Shanghai'),(2,2,'2017-06-30 17:01:55',NULL,NULL,NULL,'streams::default_locale','zh-cn');

/*Table structure for table `default_streams_assignments` */

DROP TABLE IF EXISTS `default_streams_assignments`;

CREATE TABLE `default_streams_assignments` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `sort_order` int(11) NOT NULL,
  `stream_id` int(11) NOT NULL,
  `field_id` int(11) NOT NULL,
  `config` text COLLATE utf8_unicode_ci NOT NULL,
  `unique` tinyint(1) NOT NULL DEFAULT '0',
  `required` tinyint(1) NOT NULL DEFAULT '0',
  `translatable` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `unique_assignments` (`stream_id`,`field_id`)
) ENGINE=MyISAM AUTO_INCREMENT=474 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `default_streams_assignments` */

insert  into `default_streams_assignments`(`id`,`sort_order`,`stream_id`,`field_id`,`config`,`unique`,`required`,`translatable`) values (98,95,16,88,'a:0:{}',0,1,0),(97,94,16,87,'a:0:{}',0,1,0),(104,89,17,99,'a:0:{}',0,0,0),(103,88,17,93,'a:0:{}',0,1,0),(102,87,17,92,'a:0:{}',0,0,1),(101,86,17,91,'a:0:{}',1,1,0),(100,85,17,90,'a:0:{}',0,1,1),(109,94,18,98,'a:0:{}',0,1,0),(108,93,18,96,'a:0:{}',0,1,0),(107,92,18,95,'a:0:{}',0,1,0),(106,91,18,92,'a:0:{}',0,0,1),(105,90,18,94,'a:0:{}',0,1,1),(115,81,19,106,'a:0:{}',0,0,1),(114,80,19,102,'a:0:{}',0,1,0),(113,79,19,101,'a:0:{}',1,1,0),(112,78,19,100,'a:0:{}',1,1,1),(118,84,20,101,'a:1:{s:3:\"max\";i:50;}',1,1,0),(117,83,20,100,'a:1:{s:3:\"max\";i:50;}',0,1,1),(116,82,20,104,'a:0:{}',0,1,0),(125,91,21,113,'a:0:{}',0,1,0),(124,90,21,109,'a:0:{}',0,1,0),(123,89,21,103,'a:0:{}',0,1,0),(122,88,21,104,'a:0:{}',0,1,0),(121,87,21,100,'a:0:{}',0,1,0),(120,86,20,107,'a:0:{}',0,0,0),(119,85,20,106,'a:0:{}',0,0,1),(133,89,22,116,'a:0:{}',0,0,1),(132,88,22,118,'a:0:{}',1,1,0),(131,87,22,114,'a:0:{}',1,1,1),(137,93,23,123,'a:0:{}',0,1,0),(136,92,23,117,'a:0:{}',0,1,0),(135,91,23,122,'a:0:{}',0,1,0),(134,90,23,119,'a:0:{}',0,1,0),(158,92,25,126,'a:3:{s:7:\"slugify\";s:4:\"name\";s:4:\"type\";s:1:\"_\";s:3:\"max\";i:50;}',1,1,0),(157,91,25,143,'a:1:{s:3:\"max\";i:50;}',1,1,1),(156,90,24,135,'a:0:{}',0,0,0),(155,89,24,137,'a:0:{}',0,0,0),(154,88,24,133,'a:0:{}',0,0,1),(153,87,24,132,'a:0:{}',0,0,1),(152,86,24,131,'a:0:{}',0,0,1),(151,85,24,130,'a:0:{}',0,0,0),(150,84,24,141,'a:0:{}',0,0,0),(149,83,24,129,'a:0:{}',0,0,0),(148,82,24,140,'a:0:{}',0,0,0),(141,75,24,124,'a:0:{}',0,1,0),(142,76,24,125,'a:0:{}',0,1,1),(143,77,24,126,'a:0:{}',0,1,0),(144,78,24,128,'a:0:{}',0,1,0),(145,79,24,138,'a:0:{}',0,1,0),(146,80,24,142,'a:0:{}',0,0,0),(147,81,24,136,'a:0:{}',0,0,0),(276,107,47,245,'a:0:{}',1,1,0),(277,108,47,247,'a:0:{}',0,1,1),(278,109,47,252,'a:0:{}',0,0,1),(279,110,47,248,'a:0:{}',1,1,0),(280,111,47,250,'a:0:{}',0,1,0),(281,112,47,254,'a:0:{}',0,1,0),(282,113,47,256,'a:0:{}',0,1,0),(283,114,47,255,'a:0:{}',0,1,0),(284,115,47,261,'a:0:{}',0,0,1),(285,116,47,262,'a:0:{}',0,0,1),(286,117,47,263,'a:0:{}',0,0,1),(287,118,47,258,'a:0:{}',0,0,0),(288,119,47,260,'a:0:{}',0,0,0),(289,120,47,259,'a:0:{}',0,0,0),(290,121,47,251,'a:0:{}',0,0,0),(291,122,48,246,'a:1:{s:3:\"max\";i:50;}',1,1,1),(292,123,48,248,'a:3:{s:7:\"slugify\";s:4:\"name\";s:4:\"type\";s:1:\"_\";s:3:\"max\";i:50;}',1,1,0),(187,95,29,167,'a:0:{}',0,1,0),(186,94,29,166,'a:0:{}',0,1,0),(191,95,30,171,'a:0:{}',0,1,0),(190,94,30,170,'a:0:{}',0,1,0),(189,93,30,169,'a:0:{}',1,1,0),(99,96,16,89,'a:0:{}',0,0,0),(110,95,18,99,'a:0:{}',0,0,0),(111,96,18,97,'a:0:{}',0,0,0),(126,92,21,112,'a:0:{}',0,1,0),(127,93,21,105,'a:0:{}',0,0,0),(128,94,21,108,'a:0:{}',0,0,0),(129,95,21,111,'a:0:{}',0,0,0),(130,96,21,110,'a:0:{}',0,0,0),(138,94,23,115,'a:0:{}',0,0,0),(139,95,23,120,'a:0:{}',0,0,0),(140,96,23,121,'a:0:{}',0,0,0),(159,93,25,144,'a:0:{}',0,0,1),(160,94,25,137,'a:0:{}',0,1,0),(161,95,25,134,'a:0:{}',0,1,0),(162,96,25,139,'a:0:{}',0,1,0),(295,126,48,253,'a:0:{}',0,0,1),(296,127,39,249,'a:1:{i:0;s:6:\"a:0:{}\";}',0,0,0),(294,125,48,265,'a:0:{}',0,1,0),(293,124,48,257,'a:0:{}',0,1,0),(188,96,29,168,'a:0:{}',0,0,0),(192,96,30,172,'a:0:{}',0,0,0),(193,97,31,173,'a:0:{}',1,1,0),(194,98,31,174,'a:0:{}',0,0,0),(195,99,32,175,'a:0:{}',1,1,0),(196,100,32,176,'a:0:{}',1,1,0),(197,101,32,177,'a:0:{}',0,1,0),(198,102,32,195,'a:0:{}',0,1,0),(199,103,32,183,'a:0:{}',0,1,0),(200,104,32,184,'a:0:{}',0,0,0),(201,105,32,185,'a:0:{}',0,0,0),(202,106,32,192,'a:0:{}',0,0,0),(203,107,32,193,'a:0:{}',0,0,0),(204,108,32,182,'a:0:{}',0,0,0),(205,109,32,180,'a:0:{}',0,0,0),(206,110,32,178,'a:0:{}',0,0,0),(207,111,32,190,'a:0:{}',0,0,0),(208,112,32,188,'a:0:{}',0,0,0),(209,113,32,181,'a:0:{}',0,0,0),(210,114,32,179,'a:0:{}',0,0,0),(211,115,33,186,'a:0:{}',0,1,1),(212,116,33,194,'a:0:{}',1,1,0),(213,117,33,187,'a:0:{}',0,0,1),(214,118,33,182,'a:0:{}',0,0,0),(215,119,34,196,'a:0:{}',0,0,1),(216,120,34,197,'a:0:{}',0,1,0),(217,121,34,198,'a:0:{}',0,0,1),(218,122,35,199,'a:0:{}',0,1,1),(219,123,35,200,'a:0:{}',0,1,0),(220,124,35,201,'a:0:{}',0,0,1),(221,125,38,127,'a:0:{}',0,0,1),(272,103,46,246,'a:0:{}',1,1,1),(273,104,46,248,'a:1:{s:7:\"slugify\";s:4:\"name\";}',1,1,0),(274,105,46,253,'a:0:{}',0,0,1),(275,106,46,266,'a:0:{}',0,0,0),(297,128,39,267,'a:1:{i:0;s:6:\"a:0:{}\";}',0,0,0),(298,129,49,267,'a:1:{i:0;s:6:\"a:0:{}\";}',0,0,0),(299,130,49,249,'a:1:{i:0;s:6:\"a:0:{}\";}',0,0,0),(300,131,49,268,'a:1:{i:0;s:6:\"a:0:{}\";}',0,0,0),(301,132,50,267,'a:1:{i:0;s:6:\"a:0:{}\";}',0,0,0),(302,133,50,269,'a:1:{i:0;s:6:\"a:0:{}\";}',0,0,0),(303,134,50,270,'a:1:{i:0;s:6:\"a:0:{}\";}',0,0,0),(304,135,50,249,'a:1:{i:0;s:6:\"a:0:{}\";}',0,0,0),(305,136,52,267,'a:1:{i:0;s:6:\"a:0:{}\";}',0,0,0),(306,137,52,271,'a:1:{i:0;s:6:\"a:0:{}\";}',0,0,0),(307,138,52,249,'a:1:{i:0;s:6:\"a:0:{}\";}',0,0,0),(309,139,55,273,'a:0:{}',0,1,1),(310,140,55,274,'a:0:{}',0,0,0),(470,156,65,434,'a:0:{}',0,0,0),(469,155,65,433,'a:0:{}',0,0,0),(468,154,65,432,'a:0:{}',0,0,0),(467,153,65,431,'a:0:{}',0,0,0),(466,152,65,430,'a:0:{}',0,0,0),(465,151,65,429,'a:0:{}',0,0,0),(464,150,65,428,'a:0:{}',0,0,0),(463,149,65,427,'a:0:{}',0,0,0),(462,148,65,426,'a:0:{}',0,0,0),(461,147,65,425,'a:0:{}',0,0,0),(460,146,65,424,'a:0:{}',0,0,0),(459,145,65,423,'a:0:{}',0,0,0),(458,144,65,422,'a:0:{}',0,1,0),(457,143,65,421,'a:0:{}',0,0,0),(456,142,65,420,'a:0:{}',0,1,0),(455,141,65,419,'a:0:{}',1,1,0),(471,157,65,435,'a:0:{}',0,0,0),(472,158,65,436,'a:0:{}',0,0,0),(473,159,65,437,'a:0:{}',0,0,0);

/*Table structure for table `default_streams_assignments_translations` */

DROP TABLE IF EXISTS `default_streams_assignments_translations`;

CREATE TABLE `default_streams_assignments_translations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `assignment_id` int(11) NOT NULL,
  `locale` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `label` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `warning` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `placeholder` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `instructions` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`),
  KEY `streams_assignments_translations_locale_index` (`locale`)
) ENGINE=MyISAM AUTO_INCREMENT=474 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `default_streams_assignments_translations` */

insert  into `default_streams_assignments_translations`(`id`,`assignment_id`,`locale`,`label`,`warning`,`placeholder`,`instructions`) values (99,99,'en','anomaly.module.configuration::field.value.label.configuration','anomaly.module.configuration::field.value.warning.configuration','anomaly.module.configuration::field.value.placeholder.configuration','anomaly.module.configuration::field.value.instructions.configuration'),(98,98,'en','anomaly.module.configuration::field.key.label.configuration','anomaly.module.configuration::field.key.warning.configuration','anomaly.module.configuration::field.key.placeholder.configuration','anomaly.module.configuration::field.key.instructions.configuration'),(97,97,'en','anomaly.module.configuration::field.scope.label.configuration','anomaly.module.configuration::field.scope.warning.configuration','anomaly.module.configuration::field.scope.placeholder.configuration','anomaly.module.configuration::field.scope.instructions.configuration'),(110,110,'en','anomaly.module.dashboard::field.allowed_roles.label.widgets','anomaly.module.dashboard::field.allowed_roles.warning.widgets','anomaly.module.dashboard::field.allowed_roles.placeholder.widgets','anomaly.module.dashboard::field.allowed_roles.instructions.widgets'),(109,109,'en','anomaly.module.dashboard::field.dashboard.label.widgets','anomaly.module.dashboard::field.dashboard.warning.widgets','anomaly.module.dashboard::field.dashboard.placeholder.widgets','anomaly.module.dashboard::field.dashboard.instructions.widgets'),(108,108,'en','anomaly.module.dashboard::field.column.label.widgets','anomaly.module.dashboard::field.column.warning.widgets','anomaly.module.dashboard::field.column.placeholder.widgets','anomaly.module.dashboard::field.column.instructions.widgets'),(100,100,'en','anomaly.module.dashboard::field.name.label.dashboards','anomaly.module.dashboard::field.name.warning.dashboards','anomaly.module.dashboard::field.name.placeholder.dashboards','anomaly.module.dashboard::field.name.instructions.dashboards'),(101,101,'en','anomaly.module.dashboard::field.slug.label.dashboards','anomaly.module.dashboard::field.slug.warning.dashboards','anomaly.module.dashboard::field.slug.placeholder.dashboards','anomaly.module.dashboard::field.slug.instructions.dashboards'),(102,102,'en','anomaly.module.dashboard::field.description.label.dashboards','anomaly.module.dashboard::field.description.warning.dashboards','anomaly.module.dashboard::field.description.placeholder.dashboards','anomaly.module.dashboard::field.description.instructions.dashboards'),(103,103,'en','anomaly.module.dashboard::field.layout.label.dashboards','anomaly.module.dashboard::field.layout.warning.dashboards','anomaly.module.dashboard::field.layout.placeholder.dashboards','anomaly.module.dashboard::field.layout.instructions.dashboards'),(104,104,'en','anomaly.module.dashboard::field.allowed_roles.label.dashboards','anomaly.module.dashboard::field.allowed_roles.warning.dashboards','anomaly.module.dashboard::field.allowed_roles.placeholder.dashboards','anomaly.module.dashboard::field.allowed_roles.instructions.dashboards'),(105,105,'en','anomaly.module.dashboard::field.title.label.widgets','anomaly.module.dashboard::field.title.warning.widgets','anomaly.module.dashboard::field.title.placeholder.widgets','anomaly.module.dashboard::field.title.instructions.widgets'),(106,106,'en','anomaly.module.dashboard::field.description.label.widgets','anomaly.module.dashboard::field.description.warning.widgets','anomaly.module.dashboard::field.description.placeholder.widgets','anomaly.module.dashboard::field.description.instructions.widgets'),(107,107,'en','anomaly.module.dashboard::field.extension.label.widgets','anomaly.module.dashboard::field.extension.warning.widgets','anomaly.module.dashboard::field.extension.placeholder.widgets','anomaly.module.dashboard::field.extension.instructions.widgets'),(129,129,'en','anomaly.module.files::field.height.label.files','anomaly.module.files::field.height.warning.files','anomaly.module.files::field.height.placeholder.files','anomaly.module.files::field.height.instructions.files'),(128,128,'en','anomaly.module.files::field.keywords.label.files','anomaly.module.files::field.keywords.warning.files','anomaly.module.files::field.keywords.placeholder.files','anomaly.module.files::field.keywords.instructions.files'),(127,127,'en','anomaly.module.files::field.entry.label.files','anomaly.module.files::field.entry.warning.files','anomaly.module.files::field.entry.placeholder.files','anomaly.module.files::field.entry.instructions.files'),(112,112,'en','anomaly.module.files::field.name.label.disks','anomaly.module.files::field.name.warning.disks','anomaly.module.files::field.name.placeholder.disks','anomaly.module.files::field.name.instructions.disks'),(113,113,'en','anomaly.module.files::field.slug.label.disks','anomaly.module.files::field.slug.warning.disks','anomaly.module.files::field.slug.placeholder.disks','anomaly.module.files::field.slug.instructions.disks'),(114,114,'en','anomaly.module.files::field.adapter.label.disks','anomaly.module.files::field.adapter.warning.disks','anomaly.module.files::field.adapter.placeholder.disks','anomaly.module.files::field.adapter.instructions.disks'),(115,115,'en','anomaly.module.files::field.description.label.disks','anomaly.module.files::field.description.warning.disks','anomaly.module.files::field.description.placeholder.disks','anomaly.module.files::field.description.instructions.disks'),(116,116,'en','anomaly.module.files::field.disk.label.folders','anomaly.module.files::field.disk.warning.folders','anomaly.module.files::field.disk.placeholder.folders','anomaly.module.files::field.disk.instructions.folders'),(117,117,'en','anomaly.module.files::field.name.label.folders','anomaly.module.files::field.name.warning.folders','anomaly.module.files::field.name.placeholder.folders','anomaly.module.files::field.name.instructions.folders'),(118,118,'en','anomaly.module.files::field.slug.label.folders','anomaly.module.files::field.slug.warning.folders','anomaly.module.files::field.slug.placeholder.folders','anomaly.module.files::field.slug.instructions.folders'),(119,119,'en','anomaly.module.files::field.description.label.folders','anomaly.module.files::field.description.warning.folders','anomaly.module.files::field.description.placeholder.folders','anomaly.module.files::field.description.instructions.folders'),(120,120,'en','anomaly.module.files::field.allowed_types.label.folders','anomaly.module.files::field.allowed_types.warning.folders','anomaly.module.files::field.allowed_types.placeholder.folders','anomaly.module.files::field.allowed_types.instructions.folders'),(121,121,'en','anomaly.module.files::field.name.label.files','anomaly.module.files::field.name.warning.files','anomaly.module.files::field.name.placeholder.files','anomaly.module.files::field.name.instructions.files'),(122,122,'en','anomaly.module.files::field.disk.label.files','anomaly.module.files::field.disk.warning.files','anomaly.module.files::field.disk.placeholder.files','anomaly.module.files::field.disk.instructions.files'),(123,123,'en','anomaly.module.files::field.folder.label.files','anomaly.module.files::field.folder.warning.files','anomaly.module.files::field.folder.placeholder.files','anomaly.module.files::field.folder.instructions.files'),(124,124,'en','anomaly.module.files::field.extension.label.files','anomaly.module.files::field.extension.warning.files','anomaly.module.files::field.extension.placeholder.files','anomaly.module.files::field.extension.instructions.files'),(125,125,'en','anomaly.module.files::field.size.label.files','anomaly.module.files::field.size.warning.files','anomaly.module.files::field.size.placeholder.files','anomaly.module.files::field.size.instructions.files'),(126,126,'en','anomaly.module.files::field.mime_type.label.files','anomaly.module.files::field.mime_type.warning.files','anomaly.module.files::field.mime_type.placeholder.files','anomaly.module.files::field.mime_type.instructions.files'),(140,140,'en','anomaly.module.navigation::field.allowed_roles.label.links','anomaly.module.navigation::field.allowed_roles.warning.links','anomaly.module.navigation::field.allowed_roles.placeholder.links','anomaly.module.navigation::field.allowed_roles.instructions.links'),(139,139,'en','anomaly.module.navigation::field.parent.label.links','anomaly.module.navigation::field.parent.warning.links','anomaly.module.navigation::field.parent.placeholder.links','anomaly.module.navigation::field.parent.instructions.links'),(131,131,'en','anomaly.module.navigation::field.name.label.menus','anomaly.module.navigation::field.name.warning.menus','anomaly.module.navigation::field.name.placeholder.menus','anomaly.module.navigation::field.name.instructions.menus'),(132,132,'en','anomaly.module.navigation::field.slug.label.menus','anomaly.module.navigation::field.slug.warning.menus','anomaly.module.navigation::field.slug.placeholder.menus','anomaly.module.navigation::field.slug.instructions.menus'),(133,133,'en','anomaly.module.navigation::field.description.label.menus','anomaly.module.navigation::field.description.warning.menus','anomaly.module.navigation::field.description.placeholder.menus','anomaly.module.navigation::field.description.instructions.menus'),(134,134,'en','anomaly.module.navigation::field.menu.label.links','anomaly.module.navigation::field.menu.warning.links','anomaly.module.navigation::field.menu.placeholder.links','anomaly.module.navigation::field.menu.instructions.links'),(135,135,'en','anomaly.module.navigation::field.type.label.links','anomaly.module.navigation::field.type.warning.links','anomaly.module.navigation::field.type.placeholder.links','anomaly.module.navigation::field.type.instructions.links'),(136,136,'en','anomaly.module.navigation::field.entry.label.links','anomaly.module.navigation::field.entry.warning.links','anomaly.module.navigation::field.entry.placeholder.links','anomaly.module.navigation::field.entry.instructions.links'),(137,137,'en','anomaly.module.navigation::field.target.label.links','anomaly.module.navigation::field.target.warning.links','anomaly.module.navigation::field.target.placeholder.links','anomaly.module.navigation::field.target.instructions.links'),(138,138,'en','anomaly.module.navigation::field.class.label.links','anomaly.module.navigation::field.class.warning.links','anomaly.module.navigation::field.class.placeholder.links','anomaly.module.navigation::field.class.instructions.links'),(160,160,'en','anomaly.module.pages::field.theme_layout.label.types','anomaly.module.pages::field.theme_layout.warning.types','anomaly.module.pages::field.theme_layout.placeholder.types','anomaly.module.pages::field.theme_layout.instructions.types'),(159,159,'en','anomaly.module.pages::field.description.label.types','anomaly.module.pages::field.description.warning.types','anomaly.module.pages::field.description.placeholder.types','anomaly.module.pages::field.description.instructions.types'),(158,158,'en','anomaly.module.pages::field.slug.label.types','anomaly.module.pages::field.slug.warning.types','anomaly.module.pages::field.slug.placeholder.types','anomaly.module.pages::field.slug.instructions.types'),(157,157,'en','anomaly.module.pages::field.name.label.types','anomaly.module.pages::field.name.warning.types','anomaly.module.pages::field.name.placeholder.types','anomaly.module.pages::field.name.instructions.types'),(156,156,'en','anomaly.module.pages::field.allowed_roles.label.pages','anomaly.module.pages::field.allowed_roles.warning.pages','anomaly.module.pages::field.allowed_roles.placeholder.pages','anomaly.module.pages::field.allowed_roles.instructions.pages'),(155,155,'en','anomaly.module.pages::field.theme_layout.label.pages','anomaly.module.pages::field.theme_layout.warning.pages','anomaly.module.pages::field.theme_layout.placeholder.pages','anomaly.module.pages::field.theme_layout.instructions.pages'),(154,154,'en','anomaly.module.pages::field.meta_keywords.label.pages','anomaly.module.pages::field.meta_keywords.warning.pages','anomaly.module.pages::field.meta_keywords.placeholder.pages','anomaly.module.pages::field.meta_keywords.instructions.pages'),(153,153,'en','anomaly.module.pages::field.meta_description.label.pages','anomaly.module.pages::field.meta_description.warning.pages','anomaly.module.pages::field.meta_description.placeholder.pages','anomaly.module.pages::field.meta_description.instructions.pages'),(152,152,'en','anomaly.module.pages::field.meta_title.label.pages','anomaly.module.pages::field.meta_title.warning.pages','anomaly.module.pages::field.meta_title.placeholder.pages','anomaly.module.pages::field.meta_title.instructions.pages'),(151,151,'en','anomaly.module.pages::field.home.label.pages','anomaly.module.pages::field.home.warning.pages','anomaly.module.pages::field.home.placeholder.pages','anomaly.module.pages::field.home.instructions.pages'),(150,150,'en','anomaly.module.pages::field.exact.label.pages','anomaly.module.pages::field.exact.warning.pages','anomaly.module.pages::field.exact.placeholder.pages','anomaly.module.pages::field.exact.instructions.pages'),(149,149,'en','anomaly.module.pages::field.enabled.label.pages','anomaly.module.pages::field.enabled.warning.pages','anomaly.module.pages::field.enabled.placeholder.pages','anomaly.module.pages::field.enabled.instructions.pages'),(148,148,'en','anomaly.module.pages::field.visible.label.pages','anomaly.module.pages::field.visible.warning.pages','anomaly.module.pages::field.visible.placeholder.pages','anomaly.module.pages::field.visible.instructions.pages'),(141,141,'en','anomaly.module.pages::field.str_id.label.pages','anomaly.module.pages::field.str_id.warning.pages','anomaly.module.pages::field.str_id.placeholder.pages','anomaly.module.pages::field.str_id.instructions.pages'),(142,142,'en','anomaly.module.pages::field.title.label.pages','anomaly.module.pages::field.title.warning.pages','anomaly.module.pages::field.title.placeholder.pages','anomaly.module.pages::field.title.instructions.pages'),(143,143,'en','anomaly.module.pages::field.slug.label.pages','anomaly.module.pages::field.slug.warning.pages','anomaly.module.pages::field.slug.placeholder.pages','anomaly.module.pages::field.slug.instructions.pages'),(144,144,'en','anomaly.module.pages::field.path.label.pages','anomaly.module.pages::field.path.warning.pages','anomaly.module.pages::field.path.placeholder.pages','anomaly.module.pages::field.path.instructions.pages'),(145,145,'en','anomaly.module.pages::field.type.label.pages','anomaly.module.pages::field.type.warning.pages','anomaly.module.pages::field.type.placeholder.pages','anomaly.module.pages::field.type.instructions.pages'),(146,146,'en','anomaly.module.pages::field.entry.label.pages','anomaly.module.pages::field.entry.warning.pages','anomaly.module.pages::field.entry.placeholder.pages','anomaly.module.pages::field.entry.instructions.pages'),(147,147,'en','anomaly.module.pages::field.parent.label.pages','anomaly.module.pages::field.parent.warning.pages','anomaly.module.pages::field.parent.placeholder.pages','anomaly.module.pages::field.parent.instructions.pages'),(294,294,'en','anomaly.module.posts::field.theme_layout.label.types','anomaly.module.posts::field.theme_layout.warning.types','anomaly.module.posts::field.theme_layout.placeholder.types','anomaly.module.posts::field.theme_layout.instructions.types'),(295,295,'en','anomaly.module.posts::field.description.label.types','anomaly.module.posts::field.description.warning.types','anomaly.module.posts::field.description.placeholder.types','anomaly.module.posts::field.description.instructions.types'),(289,289,'en','anomaly.module.posts::field.enabled.label.posts','anomaly.module.posts::field.enabled.warning.posts','anomaly.module.posts::field.enabled.placeholder.posts','anomaly.module.posts::field.enabled.instructions.posts'),(290,290,'en','anomaly.module.posts::field.tags.label.posts','anomaly.module.posts::field.tags.warning.posts','anomaly.module.posts::field.tags.placeholder.posts','anomaly.module.posts::field.tags.instructions.posts'),(291,291,'en','anomaly.module.posts::field.name.label.types','anomaly.module.posts::field.name.warning.types','anomaly.module.posts::field.name.placeholder.types','anomaly.module.posts::field.name.instructions.types'),(287,287,'en','anomaly.module.posts::field.category.label.posts','anomaly.module.posts::field.category.warning.posts','anomaly.module.posts::field.category.placeholder.posts','anomaly.module.posts::field.category.instructions.posts'),(286,286,'en','anomaly.module.posts::field.meta_keywords.label.posts','anomaly.module.posts::field.meta_keywords.warning.posts','anomaly.module.posts::field.meta_keywords.placeholder.posts','anomaly.module.posts::field.meta_keywords.instructions.posts'),(285,285,'en','anomaly.module.posts::field.meta_description.label.posts','anomaly.module.posts::field.meta_description.warning.posts','anomaly.module.posts::field.meta_description.placeholder.posts','anomaly.module.posts::field.meta_description.instructions.posts'),(272,272,'en','anomaly.module.posts::field.name.label.categories','anomaly.module.posts::field.name.warning.categories','anomaly.module.posts::field.name.placeholder.categories','anomaly.module.posts::field.name.instructions.categories'),(273,273,'en','anomaly.module.posts::field.slug.label.categories','anomaly.module.posts::field.slug.warning.categories','anomaly.module.posts::field.slug.placeholder.categories','anomaly.module.posts::field.slug.instructions.categories'),(274,274,'en','anomaly.module.posts::field.description.label.categories','anomaly.module.posts::field.description.warning.categories','anomaly.module.posts::field.description.placeholder.categories','anomaly.module.posts::field.description.instructions.categories'),(275,275,'en','anomaly.module.posts::field.parent.label.categories','anomaly.module.posts::field.parent.warning.categories','anomaly.module.posts::field.parent.placeholder.categories','anomaly.module.posts::field.parent.instructions.categories'),(276,276,'en','anomaly.module.posts::field.str_id.label.posts','anomaly.module.posts::field.str_id.warning.posts','anomaly.module.posts::field.str_id.placeholder.posts','anomaly.module.posts::field.str_id.instructions.posts'),(277,277,'en','anomaly.module.posts::field.title.label.posts','anomaly.module.posts::field.title.warning.posts','anomaly.module.posts::field.title.placeholder.posts','anomaly.module.posts::field.title.instructions.posts'),(278,278,'en','anomaly.module.posts::field.summary.label.posts','anomaly.module.posts::field.summary.warning.posts','anomaly.module.posts::field.summary.placeholder.posts','anomaly.module.posts::field.summary.instructions.posts'),(279,279,'en','anomaly.module.posts::field.slug.label.posts','anomaly.module.posts::field.slug.warning.posts','anomaly.module.posts::field.slug.placeholder.posts','anomaly.module.posts::field.slug.instructions.posts'),(280,280,'en','anomaly.module.posts::field.type.label.posts','anomaly.module.posts::field.type.warning.posts','anomaly.module.posts::field.type.placeholder.posts','anomaly.module.posts::field.type.instructions.posts'),(281,281,'en','anomaly.module.posts::field.publish_at.label.posts','anomaly.module.posts::field.publish_at.warning.posts','anomaly.module.posts::field.publish_at.placeholder.posts','anomaly.module.posts::field.publish_at.instructions.posts'),(282,282,'en','anomaly.module.posts::field.author.label.posts','anomaly.module.posts::field.author.warning.posts','anomaly.module.posts::field.author.placeholder.posts','anomaly.module.posts::field.author.instructions.posts'),(283,283,'en','anomaly.module.posts::field.entry.label.posts','anomaly.module.posts::field.entry.warning.posts','anomaly.module.posts::field.entry.placeholder.posts','anomaly.module.posts::field.entry.instructions.posts'),(284,284,'en','anomaly.module.posts::field.meta_title.label.posts','anomaly.module.posts::field.meta_title.warning.posts','anomaly.module.posts::field.meta_title.placeholder.posts','anomaly.module.posts::field.meta_title.instructions.posts'),(188,188,'en','anomaly.module.preferences::field.value.label.preferences','anomaly.module.preferences::field.value.warning.preferences','anomaly.module.preferences::field.value.placeholder.preferences','anomaly.module.preferences::field.value.instructions.preferences'),(187,187,'en','anomaly.module.preferences::field.key.label.preferences','anomaly.module.preferences::field.key.warning.preferences','anomaly.module.preferences::field.key.placeholder.preferences','anomaly.module.preferences::field.key.instructions.preferences'),(186,186,'en','anomaly.module.preferences::field.user.label.preferences','anomaly.module.preferences::field.user.warning.preferences','anomaly.module.preferences::field.user.placeholder.preferences','anomaly.module.preferences::field.user.instructions.preferences'),(192,192,'en','anomaly.module.redirects::field.secure.label.redirects','anomaly.module.redirects::field.secure.warning.redirects','anomaly.module.redirects::field.secure.placeholder.redirects','anomaly.module.redirects::field.secure.instructions.redirects'),(191,191,'en','anomaly.module.redirects::field.status.label.redirects','anomaly.module.redirects::field.status.warning.redirects','anomaly.module.redirects::field.status.placeholder.redirects','anomaly.module.redirects::field.status.instructions.redirects'),(190,190,'en','anomaly.module.redirects::field.to.label.redirects','anomaly.module.redirects::field.to.warning.redirects','anomaly.module.redirects::field.to.placeholder.redirects','anomaly.module.redirects::field.to.instructions.redirects'),(189,189,'en','anomaly.module.redirects::field.from.label.redirects','anomaly.module.redirects::field.from.warning.redirects','anomaly.module.redirects::field.from.placeholder.redirects','anomaly.module.redirects::field.from.instructions.redirects'),(111,111,'en','anomaly.module.dashboard::field.pinned.label.widgets','anomaly.module.dashboard::field.pinned.warning.widgets','anomaly.module.dashboard::field.pinned.placeholder.widgets','anomaly.module.dashboard::field.pinned.instructions.widgets'),(130,130,'en','anomaly.module.files::field.width.label.files','anomaly.module.files::field.width.warning.files','anomaly.module.files::field.width.placeholder.files','anomaly.module.files::field.width.instructions.files'),(161,161,'en','anomaly.module.pages::field.layout.label.types','anomaly.module.pages::field.layout.warning.types','anomaly.module.pages::field.layout.placeholder.types','anomaly.module.pages::field.layout.instructions.types'),(162,162,'en','anomaly.module.pages::field.handler.label.types','anomaly.module.pages::field.handler.warning.types','anomaly.module.pages::field.handler.placeholder.types','anomaly.module.pages::field.handler.instructions.types'),(288,288,'en','anomaly.module.posts::field.featured.label.posts','anomaly.module.posts::field.featured.warning.posts','anomaly.module.posts::field.featured.placeholder.posts','anomaly.module.posts::field.featured.instructions.posts'),(193,193,'en','anomaly.module.settings::field.key.label.settings','anomaly.module.settings::field.key.warning.settings','anomaly.module.settings::field.key.placeholder.settings','anomaly.module.settings::field.key.instructions.settings'),(194,194,'en','anomaly.module.settings::field.value.label.settings','anomaly.module.settings::field.value.warning.settings','anomaly.module.settings::field.value.placeholder.settings','anomaly.module.settings::field.value.instructions.settings'),(195,195,'en','anomaly.module.users::field.email.label.users','anomaly.module.users::field.email.warning.users','anomaly.module.users::field.email.placeholder.users','anomaly.module.users::field.email.instructions.users'),(196,196,'en','anomaly.module.users::field.username.label.users','anomaly.module.users::field.username.warning.users','anomaly.module.users::field.username.placeholder.users','anomaly.module.users::field.username.instructions.users'),(197,197,'en','anomaly.module.users::field.password.label.users','anomaly.module.users::field.password.warning.users','anomaly.module.users::field.password.placeholder.users','anomaly.module.users::field.password.instructions.users'),(198,198,'en','anomaly.module.users::field.roles.label.users','anomaly.module.users::field.roles.warning.users','anomaly.module.users::field.roles.placeholder.users','anomaly.module.users::field.roles.instructions.users'),(199,199,'en','anomaly.module.users::field.display_name.label.users','anomaly.module.users::field.display_name.warning.users','anomaly.module.users::field.display_name.placeholder.users','anomaly.module.users::field.display_name.instructions.users'),(200,200,'en','anomaly.module.users::field.first_name.label.users','anomaly.module.users::field.first_name.warning.users','anomaly.module.users::field.first_name.placeholder.users','anomaly.module.users::field.first_name.instructions.users'),(201,201,'en','anomaly.module.users::field.last_name.label.users','anomaly.module.users::field.last_name.warning.users','anomaly.module.users::field.last_name.placeholder.users','anomaly.module.users::field.last_name.instructions.users'),(202,202,'en','anomaly.module.users::field.activated.label.users','anomaly.module.users::field.activated.warning.users','anomaly.module.users::field.activated.placeholder.users','anomaly.module.users::field.activated.instructions.users'),(203,203,'en','anomaly.module.users::field.enabled.label.users','anomaly.module.users::field.enabled.warning.users','anomaly.module.users::field.enabled.placeholder.users','anomaly.module.users::field.enabled.instructions.users'),(204,204,'en','anomaly.module.users::field.permissions.label.users','anomaly.module.users::field.permissions.warning.users','anomaly.module.users::field.permissions.placeholder.users','anomaly.module.users::field.permissions.instructions.users'),(205,205,'en','anomaly.module.users::field.last_login_at.label.users','anomaly.module.users::field.last_login_at.warning.users','anomaly.module.users::field.last_login_at.placeholder.users','anomaly.module.users::field.last_login_at.instructions.users'),(206,206,'en','anomaly.module.users::field.remember_token.label.users','anomaly.module.users::field.remember_token.warning.users','anomaly.module.users::field.remember_token.placeholder.users','anomaly.module.users::field.remember_token.instructions.users'),(207,207,'en','anomaly.module.users::field.activation_code.label.users','anomaly.module.users::field.activation_code.warning.users','anomaly.module.users::field.activation_code.placeholder.users','anomaly.module.users::field.activation_code.instructions.users'),(208,208,'en','anomaly.module.users::field.reset_code.label.users','anomaly.module.users::field.reset_code.warning.users','anomaly.module.users::field.reset_code.placeholder.users','anomaly.module.users::field.reset_code.instructions.users'),(209,209,'en','anomaly.module.users::field.last_activity_at.label.users','anomaly.module.users::field.last_activity_at.warning.users','anomaly.module.users::field.last_activity_at.placeholder.users','anomaly.module.users::field.last_activity_at.instructions.users'),(210,210,'en','anomaly.module.users::field.ip_address.label.users','anomaly.module.users::field.ip_address.warning.users','anomaly.module.users::field.ip_address.placeholder.users','anomaly.module.users::field.ip_address.instructions.users'),(211,211,'en','anomaly.module.users::field.name.label.roles','anomaly.module.users::field.name.warning.roles','anomaly.module.users::field.name.placeholder.roles','anomaly.module.users::field.name.instructions.roles'),(212,212,'en','anomaly.module.users::field.slug.label.roles','anomaly.module.users::field.slug.warning.roles','anomaly.module.users::field.slug.placeholder.roles','anomaly.module.users::field.slug.instructions.roles'),(213,213,'en','anomaly.module.users::field.description.label.roles','anomaly.module.users::field.description.warning.roles','anomaly.module.users::field.description.placeholder.roles','anomaly.module.users::field.description.instructions.roles'),(214,214,'en','anomaly.module.users::field.permissions.label.roles','anomaly.module.users::field.permissions.warning.roles','anomaly.module.users::field.permissions.placeholder.roles','anomaly.module.users::field.permissions.instructions.roles'),(215,215,'en','anomaly.extension.page_link_type::field.title.label.pages','anomaly.extension.page_link_type::field.title.warning.pages','anomaly.extension.page_link_type::field.title.placeholder.pages','anomaly.extension.page_link_type::field.title.instructions.pages'),(216,216,'en','anomaly.extension.page_link_type::field.page.label.pages','anomaly.extension.page_link_type::field.page.warning.pages','anomaly.extension.page_link_type::field.page.placeholder.pages','anomaly.extension.page_link_type::field.page.instructions.pages'),(217,217,'en','anomaly.extension.page_link_type::field.description.label.pages','anomaly.extension.page_link_type::field.description.warning.pages','anomaly.extension.page_link_type::field.description.placeholder.pages','anomaly.extension.page_link_type::field.description.instructions.pages'),(218,218,'en','anomaly.extension.url_link_type::field.title.label.urls','anomaly.extension.url_link_type::field.title.warning.urls','anomaly.extension.url_link_type::field.title.placeholder.urls','anomaly.extension.url_link_type::field.title.instructions.urls'),(219,219,'en','anomaly.extension.url_link_type::field.url.label.urls','anomaly.extension.url_link_type::field.url.warning.urls','anomaly.extension.url_link_type::field.url.placeholder.urls','anomaly.extension.url_link_type::field.url.instructions.urls'),(220,220,'en','anomaly.extension.url_link_type::field.description.label.urls','anomaly.extension.url_link_type::field.description.warning.urls','anomaly.extension.url_link_type::field.description.placeholder.urls','anomaly.extension.url_link_type::field.description.instructions.urls'),(221,221,'zh-cn',NULL,NULL,NULL,NULL),(292,292,'en','anomaly.module.posts::field.slug.label.types','anomaly.module.posts::field.slug.warning.types','anomaly.module.posts::field.slug.placeholder.types','anomaly.module.posts::field.slug.instructions.types'),(293,293,'en','anomaly.module.posts::field.layout.label.types','anomaly.module.posts::field.layout.warning.types','anomaly.module.posts::field.layout.placeholder.types','anomaly.module.posts::field.layout.instructions.types'),(296,296,'zh-cn',NULL,NULL,NULL,NULL),(297,297,'zh-cn',NULL,NULL,NULL,NULL),(298,298,'zh-cn',NULL,NULL,NULL,NULL),(299,299,'zh-cn',NULL,NULL,NULL,NULL),(300,300,'zh-cn',NULL,NULL,NULL,NULL),(301,301,'zh-cn',NULL,NULL,NULL,NULL),(302,302,'zh-cn',NULL,NULL,NULL,NULL),(303,303,'zh-cn',NULL,NULL,NULL,NULL),(304,304,'zh-cn',NULL,NULL,NULL,NULL),(305,305,'zh-cn',NULL,NULL,NULL,NULL),(306,306,'zh-cn',NULL,NULL,NULL,NULL),(307,307,'zh-cn',NULL,NULL,NULL,NULL),(309,309,'en','fannan.module.test::field.name.label.test','fannan.module.test::field.name.warning.test','fannan.module.test::field.name.placeholder.test','fannan.module.test::field.name.instructions.test'),(310,310,'en','fannan.module.test::field.num.label.test','fannan.module.test::field.num.warning.test','fannan.module.test::field.num.placeholder.test','fannan.module.test::field.num.instructions.test'),(470,470,'en','fannan.module.members::field.gold.label.members','fannan.module.members::field.gold.warning.members','fannan.module.members::field.gold.placeholder.members','fannan.module.members::field.gold.instructions.members'),(469,469,'en','fannan.module.members::field.integral.label.members','fannan.module.members::field.integral.warning.members','fannan.module.members::field.integral.placeholder.members','fannan.module.members::field.integral.instructions.members'),(468,468,'en','fannan.module.members::field.results.label.members','fannan.module.members::field.results.warning.members','fannan.module.members::field.results.placeholder.members','fannan.module.members::field.results.instructions.members'),(467,467,'en','fannan.module.members::field.card_pic.label.members','fannan.module.members::field.card_pic.warning.members','fannan.module.members::field.card_pic.placeholder.members','fannan.module.members::field.card_pic.instructions.members'),(466,466,'en','fannan.module.members::field.card_negative_pic.label.members','fannan.module.members::field.card_negative_pic.warning.members','fannan.module.members::field.card_negative_pic.placeholder.members','fannan.module.members::field.card_negative_pic.instructions.members'),(465,465,'en','fannan.module.members::field.card_positive_pic.label.members','fannan.module.members::field.card_positive_pic.warning.members','fannan.module.members::field.card_positive_pic.placeholder.members','fannan.module.members::field.card_positive_pic.instructions.members'),(464,464,'en','fannan.module.members::field.id_card.label.members','fannan.module.members::field.id_card.warning.members','fannan.module.members::field.id_card.placeholder.members','fannan.module.members::field.id_card.instructions.members'),(463,463,'en','fannan.module.members::field.real_name.label.members','fannan.module.members::field.real_name.warning.members','fannan.module.members::field.real_name.placeholder.members','fannan.module.members::field.real_name.instructions.members'),(462,462,'en','fannan.module.members::field.is_verified.label.members','fannan.module.members::field.is_verified.warning.members','fannan.module.members::field.is_verified.placeholder.members','fannan.module.members::field.is_verified.instructions.members'),(461,461,'en','fannan.module.members::field.grade.label.members','fannan.module.members::field.grade.warning.members','fannan.module.members::field.grade.placeholder.members','fannan.module.members::field.grade.instructions.members'),(459,459,'en','fannan.module.members::field.nickname.label.members','fannan.module.members::field.nickname.warning.members','fannan.module.members::field.nickname.placeholder.members','fannan.module.members::field.nickname.instructions.members'),(460,460,'en','fannan.module.members::field.avatar.label.members','fannan.module.members::field.avatar.warning.members','fannan.module.members::field.avatar.placeholder.members','fannan.module.members::field.avatar.instructions.members'),(458,458,'en','fannan.module.members::field.invitation_code.label.members','fannan.module.members::field.invitation_code.warning.members','fannan.module.members::field.invitation_code.placeholder.members','fannan.module.members::field.invitation_code.instructions.members'),(457,457,'en','fannan.module.members::field.openid.label.members','fannan.module.members::field.openid.warning.members','fannan.module.members::field.openid.placeholder.members','fannan.module.members::field.openid.instructions.members'),(455,455,'en','fannan.module.members::field.mobile.label.members','fannan.module.members::field.mobile.warning.members','fannan.module.members::field.mobile.placeholder.members','fannan.module.members::field.mobile.instructions.members'),(456,456,'en','fannan.module.members::field.password.label.members','fannan.module.members::field.password.warning.members','fannan.module.members::field.password.placeholder.members','fannan.module.members::field.password.instructions.members'),(471,471,'en','fannan.module.members::field.parent_id.label.members','fannan.module.members::field.parent_id.warning.members','fannan.module.members::field.parent_id.placeholder.members','fannan.module.members::field.parent_id.instructions.members'),(472,472,'en','fannan.module.members::field.grand_id.label.members','fannan.module.members::field.grand_id.warning.members','fannan.module.members::field.grand_id.placeholder.members','fannan.module.members::field.grand_id.instructions.members'),(473,473,'en','fannan.module.members::field.great_grand_id.label.members','fannan.module.members::field.great_grand_id.warning.members','fannan.module.members::field.great_grand_id.placeholder.members','fannan.module.members::field.great_grand_id.instructions.members');

/*Table structure for table `default_streams_fields` */

DROP TABLE IF EXISTS `default_streams_fields`;

CREATE TABLE `default_streams_fields` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `namespace` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `config` text COLLATE utf8_unicode_ci NOT NULL,
  `locked` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `unique_fields` (`namespace`,`slug`)
) ENGINE=MyISAM AUTO_INCREMENT=438 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `default_streams_fields` */

insert  into `default_streams_fields`(`id`,`namespace`,`slug`,`type`,`config`,`locked`) values (89,'configuration','value','anomaly.field_type.textarea','a:0:{}',1),(88,'configuration','key','anomaly.field_type.text','a:0:{}',1),(87,'configuration','scope','anomaly.field_type.text','a:0:{}',1),(98,'dashboard','dashboard','anomaly.field_type.relationship','a:1:{s:7:\"related\";s:48:\"Anomaly\\DashboardModule\\Dashboard\\DashboardModel\";}',1),(97,'dashboard','pinned','anomaly.field_type.boolean','a:0:{}',1),(94,'dashboard','title','anomaly.field_type.text','a:0:{}',1),(95,'dashboard','extension','anomaly.field_type.addon','a:2:{s:4:\"type\";s:9:\"extension\";s:6:\"search\";s:34:\"anomaly.module.dashboard::widget.*\";}',1),(96,'dashboard','column','anomaly.field_type.integer','a:2:{s:3:\"min\";i:1;s:13:\"default_value\";i:1;}',1),(93,'dashboard','layout','anomaly.field_type.select','a:1:{s:7:\"options\";a:9:{i:24;s:48:\"anomaly.module.dashboard::field.layout.option.24\";s:5:\"12-12\";s:51:\"anomaly.module.dashboard::field.layout.option.12-12\";s:4:\"16-8\";s:50:\"anomaly.module.dashboard::field.layout.option.16-8\";s:4:\"8-16\";s:50:\"anomaly.module.dashboard::field.layout.option.8-16\";s:5:\"8-8-8\";s:51:\"anomaly.module.dashboard::field.layout.option.8-8-8\";s:6:\"6-12-6\";s:52:\"anomaly.module.dashboard::field.layout.option.6-12-6\";s:6:\"12-6-6\";s:52:\"anomaly.module.dashboard::field.layout.option.12-6-6\";s:6:\"6-6-12\";s:52:\"anomaly.module.dashboard::field.layout.option.6-6-12\";s:7:\"6-6-6-6\";s:53:\"anomaly.module.dashboard::field.layout.option.6-6-6-6\";}}',1),(92,'dashboard','description','anomaly.field_type.textarea','a:0:{}',1),(90,'dashboard','name','anomaly.field_type.text','a:0:{}',1),(91,'dashboard','slug','anomaly.field_type.slug','a:1:{s:7:\"slugify\";s:4:\"name\";}',1),(109,'files','extension','anomaly.field_type.text','a:0:{}',1),(108,'files','keywords','anomaly.field_type.tags','a:0:{}',1),(107,'files','allowed_types','anomaly.field_type.tags','a:0:{}',1),(105,'files','entry','anomaly.field_type.polymorphic','a:0:{}',1),(106,'files','description','anomaly.field_type.textarea','a:0:{}',1),(104,'files','disk','anomaly.field_type.relationship','a:1:{s:7:\"related\";s:34:\"Anomaly\\FilesModule\\Disk\\DiskModel\";}',1),(103,'files','folder','anomaly.field_type.relationship','a:1:{s:7:\"related\";s:38:\"Anomaly\\FilesModule\\Folder\\FolderModel\";}',1),(102,'files','adapter','anomaly.field_type.addon','a:2:{s:4:\"type\";s:10:\"extensions\";s:6:\"search\";s:31:\"anomaly.module.files::adapter.*\";}',1),(101,'files','slug','anomaly.field_type.slug','a:1:{s:7:\"slugify\";s:4:\"name\";}',1),(100,'files','name','anomaly.field_type.text','a:0:{}',1),(123,'navigation','target','anomaly.field_type.select','a:2:{s:13:\"default_value\";s:5:\"_self\";s:7:\"options\";a:2:{s:5:\"_self\";s:51:\"anomaly.module.navigation::field.target.option.self\";s:6:\"_blank\";s:52:\"anomaly.module.navigation::field.target.option.blank\";}}',1),(122,'navigation','type','anomaly.field_type.addon','a:2:{s:4:\"type\";s:9:\"extension\";s:6:\"search\";s:38:\"anomaly.module.navigation::link_type.*\";}',1),(121,'navigation','allowed_roles','anomaly.field_type.multiple','a:1:{s:7:\"related\";s:34:\"Anomaly\\UsersModule\\Role\\RoleModel\";}',1),(120,'navigation','parent','anomaly.field_type.relationship','a:1:{s:7:\"related\";s:39:\"Anomaly\\NavigationModule\\Link\\LinkModel\";}',1),(119,'navigation','menu','anomaly.field_type.relationship','a:1:{s:7:\"related\";s:39:\"Anomaly\\NavigationModule\\Menu\\MenuModel\";}',1),(118,'navigation','slug','anomaly.field_type.slug','a:1:{s:7:\"slugify\";s:4:\"name\";}',1),(114,'navigation','name','anomaly.field_type.text','a:0:{}',1),(115,'navigation','class','anomaly.field_type.text','a:0:{}',1),(116,'navigation','description','anomaly.field_type.textarea','a:0:{}',1),(117,'navigation','entry','anomaly.field_type.polymorphic','a:0:{}',1),(139,'pages','handler','anomaly.field_type.addon','a:3:{s:4:\"type\";s:9:\"extension\";s:6:\"search\";s:31:\"anomaly.module.pages::handler.*\";s:13:\"default_value\";s:38:\"anomaly.extension.default_page_handler\";}',1),(138,'pages','type','anomaly.field_type.relationship','a:1:{s:7:\"related\";s:34:\"Anomaly\\PagesModule\\Type\\TypeModel\";}',1),(137,'pages','theme_layout','anomaly.field_type.select','a:2:{s:13:\"default_value\";s:27:\"theme::layouts/default.twig\";s:7:\"handler\";s:46:\"Anomaly\\SelectFieldType\\Handler\\Layouts@handle\";}',1),(136,'pages','parent','anomaly.field_type.relationship','a:1:{s:7:\"related\";s:34:\"Anomaly\\PagesModule\\Page\\PageModel\";}',1),(135,'pages','allowed_roles','anomaly.field_type.multiple','a:1:{s:7:\"related\";s:34:\"Anomaly\\UsersModule\\Role\\RoleModel\";}',1),(134,'pages','layout','anomaly.field_type.editor','a:2:{s:13:\"default_value\";s:25:\"<h1>{{ page.title }}</h1>\";s:4:\"mode\";s:4:\"twig\";}',1),(132,'pages','meta_description','anomaly.field_type.textarea','a:0:{}',1),(133,'pages','meta_keywords','anomaly.field_type.tags','a:0:{}',1),(131,'pages','meta_title','anomaly.field_type.text','a:0:{}',1),(128,'pages','path','anomaly.field_type.text','a:0:{}',1),(129,'pages','enabled','anomaly.field_type.boolean','a:1:{s:13:\"default_value\";b:1;}',1),(130,'pages','home','anomaly.field_type.boolean','a:1:{s:13:\"default_value\";b:0;}',1),(127,'pages','content','anomaly.field_type.wysiwyg','a:0:{}',0),(126,'pages','slug','anomaly.field_type.slug','a:2:{s:7:\"slugify\";s:5:\"title\";s:4:\"type\";s:1:\"-\";}',1),(125,'pages','title','anomaly.field_type.text','a:0:{}',1),(124,'pages','str_id','anomaly.field_type.text','a:0:{}',1),(252,'posts','summary','anomaly.field_type.textarea','a:0:{}',1),(253,'posts','description','anomaly.field_type.textarea','a:0:{}',1),(254,'posts','publish_at','anomaly.field_type.datetime','a:0:{}',1),(255,'posts','entry','anomaly.field_type.polymorphic','a:0:{}',1),(256,'posts','author','anomaly.field_type.relationship','a:2:{s:4:\"mode\";s:6:\"lookup\";s:7:\"related\";s:34:\"Anomaly\\UsersModule\\User\\UserModel\";}',1),(257,'posts','layout','anomaly.field_type.editor','a:2:{s:13:\"default_value\";s:22:\"{{ post.content|raw }}\";s:4:\"mode\";s:4:\"twig\";}',1),(258,'posts','category','anomaly.field_type.relationship','a:1:{s:7:\"related\";s:42:\"Anomaly\\PostsModule\\Category\\CategoryModel\";}',1),(259,'posts','enabled','anomaly.field_type.boolean','a:1:{s:13:\"default_value\";b:0;}',1),(260,'posts','featured','anomaly.field_type.boolean','a:1:{s:13:\"default_value\";b:0;}',1),(261,'posts','meta_title','anomaly.field_type.text','a:0:{}',1),(262,'posts','meta_description','anomaly.field_type.textarea','a:0:{}',1),(263,'posts','meta_keywords','anomaly.field_type.tags','a:0:{}',1),(264,'posts','ttl','anomaly.field_type.integer','a:3:{s:3:\"min\";i:0;s:4:\"step\";i:1;s:4:\"page\";i:5;}',1),(265,'posts','theme_layout','anomaly.field_type.select','a:1:{s:7:\"handler\";s:39:\"Anomaly\\SelectFieldType\\Handler\\Layouts\";}',1),(266,'posts','parent','anomaly.field_type.relationship','a:1:{s:7:\"related\";s:42:\"Anomaly\\PostsModule\\Category\\CategoryModel\";}',1),(267,'posts','image','anomaly.field_type.file','a:3:{s:7:\"folders\";a:1:{i:0;s:1:\"1\";}s:3:\"max\";N;s:4:\"mode\";s:7:\"default\";}',0),(167,'preferences','key','anomaly.field_type.text','a:0:{}',1),(166,'preferences','user','anomaly.field_type.relationship','a:2:{s:4:\"mode\";s:6:\"lookup\";s:7:\"related\";s:34:\"Anomaly\\UsersModule\\User\\UserModel\";}',1),(170,'redirects','to','anomaly.field_type.text','a:0:{}',1),(171,'redirects','status','anomaly.field_type.select','a:2:{s:13:\"default_value\";s:3:\"301\";s:7:\"options\";a:2:{i:301;s:49:\"anomaly.module.redirects::field.status.option.301\";i:302;s:49:\"anomaly.module.redirects::field.status.option.302\";}}',1),(169,'redirects','from','anomaly.field_type.text','a:0:{}',1),(99,'dashboard','allowed_roles','anomaly.field_type.multiple','a:1:{s:7:\"related\";s:34:\"Anomaly\\UsersModule\\Role\\RoleModel\";}',1),(110,'files','width','anomaly.field_type.text','a:0:{}',1),(111,'files','height','anomaly.field_type.text','a:0:{}',1),(112,'files','mime_type','anomaly.field_type.text','a:0:{}',1),(113,'files','size','anomaly.field_type.integer','a:0:{}',1),(140,'pages','visible','anomaly.field_type.boolean','a:1:{s:13:\"default_value\";b:1;}',1),(141,'pages','exact','anomaly.field_type.boolean','a:1:{s:13:\"default_value\";b:1;}',1),(142,'pages','entry','anomaly.field_type.polymorphic','a:0:{}',1),(143,'pages','name','anomaly.field_type.text','a:0:{}',1),(144,'pages','description','anomaly.field_type.textarea','a:0:{}',1),(251,'posts','tags','anomaly.field_type.tags','a:0:{}',1),(250,'posts','type','anomaly.field_type.relationship','a:1:{s:7:\"related\";s:34:\"Anomaly\\PostsModule\\Type\\TypeModel\";}',1),(249,'posts','content','anomaly.field_type.wysiwyg','a:0:{}',0),(248,'posts','slug','anomaly.field_type.slug','a:2:{s:7:\"slugify\";s:5:\"title\";s:4:\"type\";s:1:\"-\";}',1),(168,'preferences','value','anomaly.field_type.textarea','a:0:{}',1),(172,'redirects','secure','anomaly.field_type.boolean','a:0:{}',1),(173,'settings','key','anomaly.field_type.text','a:0:{}',1),(174,'settings','value','anomaly.field_type.textarea','a:0:{}',1),(175,'users','email','anomaly.field_type.email','a:0:{}',1),(176,'users','username','anomaly.field_type.slug','a:2:{s:4:\"type\";s:1:\"_\";s:9:\"lowercase\";b:0;}',1),(177,'users','password','anomaly.field_type.text','a:1:{s:4:\"type\";s:8:\"password\";}',1),(178,'users','remember_token','anomaly.field_type.text','a:0:{}',1),(179,'users','ip_address','anomaly.field_type.text','a:0:{}',1),(180,'users','last_login_at','anomaly.field_type.datetime','a:0:{}',1),(181,'users','last_activity_at','anomaly.field_type.datetime','a:0:{}',1),(182,'users','permissions','anomaly.field_type.checkboxes','a:0:{}',1),(183,'users','display_name','anomaly.field_type.text','a:0:{}',1),(184,'users','first_name','anomaly.field_type.text','a:0:{}',1),(185,'users','last_name','anomaly.field_type.text','a:0:{}',1),(186,'users','name','anomaly.field_type.text','a:0:{}',1),(187,'users','description','anomaly.field_type.textarea','a:0:{}',1),(188,'users','reset_code','anomaly.field_type.text','a:0:{}',1),(189,'users','reset_code_expires_at','anomaly.field_type.datetime','a:0:{}',1),(190,'users','activation_code','anomaly.field_type.text','a:0:{}',1),(191,'users','activation_code_expires_at','anomaly.field_type.datetime','a:0:{}',1),(192,'users','activated','anomaly.field_type.boolean','a:1:{s:13:\"default_value\";b:0;}',1),(193,'users','enabled','anomaly.field_type.boolean','a:1:{s:13:\"default_value\";b:1;}',1),(194,'users','slug','anomaly.field_type.slug','a:1:{s:7:\"slugify\";s:4:\"name\";}',1),(195,'users','roles','anomaly.field_type.multiple','a:1:{s:7:\"related\";s:34:\"Anomaly\\UsersModule\\Role\\RoleModel\";}',1),(196,'page_link_type','title','anomaly.field_type.text','a:0:{}',1),(197,'page_link_type','page','anomaly.field_type.relationship','a:2:{s:4:\"mode\";s:6:\"lookup\";s:7:\"related\";s:34:\"Anomaly\\PagesModule\\Page\\PageModel\";}',1),(198,'page_link_type','description','anomaly.field_type.textarea','a:0:{}',1),(199,'url_link_type','title','anomaly.field_type.text','a:0:{}',1),(200,'url_link_type','url','anomaly.field_type.text','a:0:{}',1),(201,'url_link_type','description','anomaly.field_type.textarea','a:0:{}',1),(247,'posts','title','anomaly.field_type.text','a:0:{}',1),(245,'posts','str_id','anomaly.field_type.text','a:0:{}',1),(246,'posts','name','anomaly.field_type.text','a:0:{}',1),(268,'posts','atlas','anomaly.field_type.files','a:4:{s:7:\"folders\";a:1:{i:0;s:1:\"1\";}s:3:\"min\";N;s:3:\"max\";N;s:4:\"mode\";s:7:\"default\";}',0),(269,'posts','videourl','anomaly.field_type.url','a:1:{s:13:\"default_value\";N;}',0),(270,'posts','video','anomaly.field_type.file','a:3:{s:7:\"folders\";a:1:{i:0;s:1:\"3\";}s:3:\"max\";N;s:4:\"mode\";s:7:\"default\";}',0),(271,'posts','voice','anomaly.field_type.file','a:3:{s:7:\"folders\";a:1:{i:0;s:1:\"4\";}s:3:\"max\";N;s:4:\"mode\";s:7:\"default\";}',0),(273,'test','name','anomaly.field_type.text','a:0:{}',1),(274,'test','num','anomaly.field_type.integer','a:5:{s:9:\"separator\";s:1:\",\";s:3:\"min\";i:0;s:3:\"max\";i:100;s:4:\"step\";i:5;s:13:\"default_value\";i:50;}',1),(434,'members','gold','anomaly.field_type.integer','a:5:{s:9:\"separator\";s:1:\",\";s:3:\"min\";i:0;s:3:\"max\";i:12;s:4:\"step\";i:1;s:13:\"default_value\";i:0;}',1),(433,'members','integral','anomaly.field_type.integer','a:5:{s:9:\"separator\";s:1:\",\";s:3:\"min\";i:0;s:3:\"max\";i:12;s:4:\"step\";i:1;s:13:\"default_value\";i:0;}',1),(432,'members','results','anomaly.field_type.text','a:3:{s:4:\"type\";s:4:\"text\";s:3:\"min\";i:2;s:3:\"max\";i:64;}',1),(430,'members','card_negative_pic','anomaly.field_type.file','a:0:{}',1),(431,'members','card_pic','anomaly.field_type.file','a:0:{}',1),(428,'members','id_card','anomaly.field_type.text','a:3:{s:4:\"type\";s:4:\"text\";s:3:\"min\";i:2;s:3:\"max\";i:24;}',1),(429,'members','card_positive_pic','anomaly.field_type.file','a:0:{}',1),(427,'members','real_name','anomaly.field_type.text','a:3:{s:4:\"type\";s:4:\"text\";s:3:\"min\";i:2;s:3:\"max\";i:12;}',1),(426,'members','is_verified','anomaly.field_type.boolean','a:6:{s:13:\"default_value\";b:0;s:8:\"on_color\";s:7:\"success\";s:9:\"off_color\";s:6:\"danger\";s:7:\"on_text\";s:3:\"YES\";s:8:\"off_text\";s:2:\"NO\";s:4:\"mode\";N;}',1),(425,'members','grade','anomaly.field_type.select','a:1:{s:7:\"options\";a:5:{i:1;s:12:\"普通会员\";i:2;s:12:\"铜牌会员\";i:3;s:12:\"银牌会员\";i:4;s:12:\"金牌会员\";i:5;s:12:\"钻石会员\";}}',1),(424,'members','avatar','anomaly.field_type.file','a:0:{}',1),(423,'members','nickname','anomaly.field_type.text','a:3:{s:4:\"type\";s:4:\"text\";s:3:\"min\";i:2;s:3:\"max\";i:24;}',1),(422,'members','invitation_code','anomaly.field_type.text','a:3:{s:4:\"type\";s:4:\"text\";s:3:\"min\";i:2;s:3:\"max\";i:12;}',1),(419,'members','mobile','anomaly.field_type.text','a:3:{s:4:\"type\";s:4:\"text\";s:3:\"min\";i:2;s:3:\"max\";i:64;}',1),(420,'members','password','anomaly.field_type.text','a:3:{s:4:\"type\";s:4:\"text\";s:3:\"min\";i:2;s:3:\"max\";i:64;}',1),(421,'members','openid','anomaly.field_type.text','a:3:{s:4:\"type\";s:4:\"text\";s:3:\"min\";i:2;s:3:\"max\";i:64;}',1),(435,'members','parent_id','anomaly.field_type.integer','a:5:{s:9:\"separator\";s:1:\",\";s:3:\"min\";i:0;s:3:\"max\";i:12;s:4:\"step\";i:1;s:13:\"default_value\";i:0;}',1),(436,'members','grand_id','anomaly.field_type.integer','a:5:{s:9:\"separator\";s:1:\",\";s:3:\"min\";i:0;s:3:\"max\";i:12;s:4:\"step\";i:1;s:13:\"default_value\";i:0;}',1),(437,'members','great_grand_id','anomaly.field_type.integer','a:5:{s:9:\"separator\";s:1:\",\";s:3:\"min\";i:0;s:3:\"max\";i:12;s:4:\"step\";i:1;s:13:\"default_value\";i:0;}',1);

/*Table structure for table `default_streams_fields_translations` */

DROP TABLE IF EXISTS `default_streams_fields_translations`;

CREATE TABLE `default_streams_fields_translations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `field_id` int(11) NOT NULL,
  `locale` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `placeholder` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `warning` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `instructions` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`),
  KEY `streams_fields_translations_locale_index` (`locale`)
) ENGINE=MyISAM AUTO_INCREMENT=438 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `default_streams_fields_translations` */

insert  into `default_streams_fields_translations`(`id`,`field_id`,`locale`,`name`,`placeholder`,`warning`,`instructions`) values (89,89,'en','anomaly.module.configuration::field.value.name','anomaly.module.configuration::field.value.placeholder','anomaly.module.configuration::field.value.warning','anomaly.module.configuration::field.value.instructions'),(88,88,'en','anomaly.module.configuration::field.key.name','anomaly.module.configuration::field.key.placeholder','anomaly.module.configuration::field.key.warning','anomaly.module.configuration::field.key.instructions'),(87,87,'en','anomaly.module.configuration::field.scope.name','anomaly.module.configuration::field.scope.placeholder','anomaly.module.configuration::field.scope.warning','anomaly.module.configuration::field.scope.instructions'),(98,98,'en','anomaly.module.dashboard::field.dashboard.name','anomaly.module.dashboard::field.dashboard.placeholder','anomaly.module.dashboard::field.dashboard.warning','anomaly.module.dashboard::field.dashboard.instructions'),(97,97,'en','anomaly.module.dashboard::field.pinned.name','anomaly.module.dashboard::field.pinned.placeholder','anomaly.module.dashboard::field.pinned.warning','anomaly.module.dashboard::field.pinned.instructions'),(96,96,'en','anomaly.module.dashboard::field.column.name','anomaly.module.dashboard::field.column.placeholder','anomaly.module.dashboard::field.column.warning','anomaly.module.dashboard::field.column.instructions'),(95,95,'en','anomaly.module.dashboard::field.extension.name','anomaly.module.dashboard::field.extension.placeholder','anomaly.module.dashboard::field.extension.warning','anomaly.module.dashboard::field.extension.instructions'),(94,94,'en','anomaly.module.dashboard::field.title.name','anomaly.module.dashboard::field.title.placeholder','anomaly.module.dashboard::field.title.warning','anomaly.module.dashboard::field.title.instructions'),(93,93,'en','anomaly.module.dashboard::field.layout.name','anomaly.module.dashboard::field.layout.placeholder','anomaly.module.dashboard::field.layout.warning','anomaly.module.dashboard::field.layout.instructions'),(92,92,'en','anomaly.module.dashboard::field.description.name','anomaly.module.dashboard::field.description.placeholder','anomaly.module.dashboard::field.description.warning','anomaly.module.dashboard::field.description.instructions'),(91,91,'en','anomaly.module.dashboard::field.slug.name','anomaly.module.dashboard::field.slug.placeholder','anomaly.module.dashboard::field.slug.warning','anomaly.module.dashboard::field.slug.instructions'),(90,90,'en','anomaly.module.dashboard::field.name.name','anomaly.module.dashboard::field.name.placeholder','anomaly.module.dashboard::field.name.warning','anomaly.module.dashboard::field.name.instructions'),(112,112,'en','anomaly.module.files::field.mime_type.name','anomaly.module.files::field.mime_type.placeholder','anomaly.module.files::field.mime_type.warning','anomaly.module.files::field.mime_type.instructions'),(111,111,'en','anomaly.module.files::field.height.name','anomaly.module.files::field.height.placeholder','anomaly.module.files::field.height.warning','anomaly.module.files::field.height.instructions'),(110,110,'en','anomaly.module.files::field.width.name','anomaly.module.files::field.width.placeholder','anomaly.module.files::field.width.warning','anomaly.module.files::field.width.instructions'),(109,109,'en','anomaly.module.files::field.extension.name','anomaly.module.files::field.extension.placeholder','anomaly.module.files::field.extension.warning','anomaly.module.files::field.extension.instructions'),(108,108,'en','anomaly.module.files::field.keywords.name','anomaly.module.files::field.keywords.placeholder','anomaly.module.files::field.keywords.warning','anomaly.module.files::field.keywords.instructions'),(107,107,'en','anomaly.module.files::field.allowed_types.name','anomaly.module.files::field.allowed_types.placeholder','anomaly.module.files::field.allowed_types.warning','anomaly.module.files::field.allowed_types.instructions'),(106,106,'en','anomaly.module.files::field.description.name','anomaly.module.files::field.description.placeholder','anomaly.module.files::field.description.warning','anomaly.module.files::field.description.instructions'),(105,105,'en','anomaly.module.files::field.entry.name','anomaly.module.files::field.entry.placeholder','anomaly.module.files::field.entry.warning','anomaly.module.files::field.entry.instructions'),(104,104,'en','anomaly.module.files::field.disk.name','anomaly.module.files::field.disk.placeholder','anomaly.module.files::field.disk.warning','anomaly.module.files::field.disk.instructions'),(103,103,'en','anomaly.module.files::field.folder.name','anomaly.module.files::field.folder.placeholder','anomaly.module.files::field.folder.warning','anomaly.module.files::field.folder.instructions'),(102,102,'en','anomaly.module.files::field.adapter.name','anomaly.module.files::field.adapter.placeholder','anomaly.module.files::field.adapter.warning','anomaly.module.files::field.adapter.instructions'),(101,101,'en','anomaly.module.files::field.slug.name','anomaly.module.files::field.slug.placeholder','anomaly.module.files::field.slug.warning','anomaly.module.files::field.slug.instructions'),(100,100,'en','anomaly.module.files::field.name.name','anomaly.module.files::field.name.placeholder','anomaly.module.files::field.name.warning','anomaly.module.files::field.name.instructions'),(122,122,'en','anomaly.module.navigation::field.type.name','anomaly.module.navigation::field.type.placeholder','anomaly.module.navigation::field.type.warning','anomaly.module.navigation::field.type.instructions'),(121,121,'en','anomaly.module.navigation::field.allowed_roles.name','anomaly.module.navigation::field.allowed_roles.placeholder','anomaly.module.navigation::field.allowed_roles.warning','anomaly.module.navigation::field.allowed_roles.instructions'),(120,120,'en','anomaly.module.navigation::field.parent.name','anomaly.module.navigation::field.parent.placeholder','anomaly.module.navigation::field.parent.warning','anomaly.module.navigation::field.parent.instructions'),(119,119,'en','anomaly.module.navigation::field.menu.name','anomaly.module.navigation::field.menu.placeholder','anomaly.module.navigation::field.menu.warning','anomaly.module.navigation::field.menu.instructions'),(118,118,'en','anomaly.module.navigation::field.slug.name','anomaly.module.navigation::field.slug.placeholder','anomaly.module.navigation::field.slug.warning','anomaly.module.navigation::field.slug.instructions'),(117,117,'en','anomaly.module.navigation::field.entry.name','anomaly.module.navigation::field.entry.placeholder','anomaly.module.navigation::field.entry.warning','anomaly.module.navigation::field.entry.instructions'),(116,116,'en','anomaly.module.navigation::field.description.name','anomaly.module.navigation::field.description.placeholder','anomaly.module.navigation::field.description.warning','anomaly.module.navigation::field.description.instructions'),(115,115,'en','anomaly.module.navigation::field.class.name','anomaly.module.navigation::field.class.placeholder','anomaly.module.navigation::field.class.warning','anomaly.module.navigation::field.class.instructions'),(114,114,'en','anomaly.module.navigation::field.name.name','anomaly.module.navigation::field.name.placeholder','anomaly.module.navigation::field.name.warning','anomaly.module.navigation::field.name.instructions'),(142,142,'en','anomaly.module.pages::field.entry.name','anomaly.module.pages::field.entry.placeholder','anomaly.module.pages::field.entry.warning','anomaly.module.pages::field.entry.instructions'),(141,141,'en','anomaly.module.pages::field.exact.name','anomaly.module.pages::field.exact.placeholder','anomaly.module.pages::field.exact.warning','anomaly.module.pages::field.exact.instructions'),(140,140,'en','anomaly.module.pages::field.visible.name','anomaly.module.pages::field.visible.placeholder','anomaly.module.pages::field.visible.warning','anomaly.module.pages::field.visible.instructions'),(139,139,'en','anomaly.module.pages::field.handler.name','anomaly.module.pages::field.handler.placeholder','anomaly.module.pages::field.handler.warning','anomaly.module.pages::field.handler.instructions'),(138,138,'en','anomaly.module.pages::field.type.name','anomaly.module.pages::field.type.placeholder','anomaly.module.pages::field.type.warning','anomaly.module.pages::field.type.instructions'),(137,137,'en','anomaly.module.pages::field.theme_layout.name','anomaly.module.pages::field.theme_layout.placeholder','anomaly.module.pages::field.theme_layout.warning','anomaly.module.pages::field.theme_layout.instructions'),(136,136,'en','anomaly.module.pages::field.parent.name','anomaly.module.pages::field.parent.placeholder','anomaly.module.pages::field.parent.warning','anomaly.module.pages::field.parent.instructions'),(135,135,'en','anomaly.module.pages::field.allowed_roles.name','anomaly.module.pages::field.allowed_roles.placeholder','anomaly.module.pages::field.allowed_roles.warning','anomaly.module.pages::field.allowed_roles.instructions'),(134,134,'en','anomaly.module.pages::field.layout.name','anomaly.module.pages::field.layout.placeholder','anomaly.module.pages::field.layout.warning','anomaly.module.pages::field.layout.instructions'),(133,133,'en','anomaly.module.pages::field.meta_keywords.name','anomaly.module.pages::field.meta_keywords.placeholder','anomaly.module.pages::field.meta_keywords.warning','anomaly.module.pages::field.meta_keywords.instructions'),(132,132,'en','anomaly.module.pages::field.meta_description.name','anomaly.module.pages::field.meta_description.placeholder','anomaly.module.pages::field.meta_description.warning','anomaly.module.pages::field.meta_description.instructions'),(131,131,'en','anomaly.module.pages::field.meta_title.name','anomaly.module.pages::field.meta_title.placeholder','anomaly.module.pages::field.meta_title.warning','anomaly.module.pages::field.meta_title.instructions'),(130,130,'en','anomaly.module.pages::field.home.name','anomaly.module.pages::field.home.placeholder','anomaly.module.pages::field.home.warning','anomaly.module.pages::field.home.instructions'),(129,129,'en','anomaly.module.pages::field.enabled.name','anomaly.module.pages::field.enabled.placeholder','anomaly.module.pages::field.enabled.warning','anomaly.module.pages::field.enabled.instructions'),(128,128,'en','anomaly.module.pages::field.path.name','anomaly.module.pages::field.path.placeholder','anomaly.module.pages::field.path.warning','anomaly.module.pages::field.path.instructions'),(127,127,'en','anomaly.module.pages::field.content.name','anomaly.module.pages::field.content.placeholder','anomaly.module.pages::field.content.warning','anomaly.module.pages::field.content.instructions'),(126,126,'en','anomaly.module.pages::field.slug.name','anomaly.module.pages::field.slug.placeholder','anomaly.module.pages::field.slug.warning','anomaly.module.pages::field.slug.instructions'),(125,125,'en','anomaly.module.pages::field.title.name','anomaly.module.pages::field.title.placeholder','anomaly.module.pages::field.title.warning','anomaly.module.pages::field.title.instructions'),(124,124,'en','anomaly.module.pages::field.str_id.name','anomaly.module.pages::field.str_id.placeholder','anomaly.module.pages::field.str_id.warning','anomaly.module.pages::field.str_id.instructions'),(269,269,'zh-cn','视频链接',NULL,NULL,'视频链接和上传视频请选择一个字段填写，如都填写则默认读取视频链接'),(249,249,'en','anomaly.module.posts::field.content.name','anomaly.module.posts::field.content.placeholder','anomaly.module.posts::field.content.warning','anomaly.module.posts::field.content.instructions'),(250,250,'en','anomaly.module.posts::field.type.name','anomaly.module.posts::field.type.placeholder','anomaly.module.posts::field.type.warning','anomaly.module.posts::field.type.instructions'),(251,251,'en','anomaly.module.posts::field.tags.name','anomaly.module.posts::field.tags.placeholder','anomaly.module.posts::field.tags.warning','anomaly.module.posts::field.tags.instructions'),(252,252,'en','anomaly.module.posts::field.summary.name','anomaly.module.posts::field.summary.placeholder','anomaly.module.posts::field.summary.warning','anomaly.module.posts::field.summary.instructions'),(253,253,'en','anomaly.module.posts::field.description.name','anomaly.module.posts::field.description.placeholder','anomaly.module.posts::field.description.warning','anomaly.module.posts::field.description.instructions'),(254,254,'en','anomaly.module.posts::field.publish_at.name','anomaly.module.posts::field.publish_at.placeholder','anomaly.module.posts::field.publish_at.warning','anomaly.module.posts::field.publish_at.instructions'),(255,255,'en','anomaly.module.posts::field.entry.name','anomaly.module.posts::field.entry.placeholder','anomaly.module.posts::field.entry.warning','anomaly.module.posts::field.entry.instructions'),(256,256,'en','anomaly.module.posts::field.author.name','anomaly.module.posts::field.author.placeholder','anomaly.module.posts::field.author.warning','anomaly.module.posts::field.author.instructions'),(257,257,'en','anomaly.module.posts::field.layout.name','anomaly.module.posts::field.layout.placeholder','anomaly.module.posts::field.layout.warning','anomaly.module.posts::field.layout.instructions'),(258,258,'en','anomaly.module.posts::field.category.name','anomaly.module.posts::field.category.placeholder','anomaly.module.posts::field.category.warning','anomaly.module.posts::field.category.instructions'),(259,259,'en','anomaly.module.posts::field.enabled.name','anomaly.module.posts::field.enabled.placeholder','anomaly.module.posts::field.enabled.warning','anomaly.module.posts::field.enabled.instructions'),(260,260,'en','anomaly.module.posts::field.featured.name','anomaly.module.posts::field.featured.placeholder','anomaly.module.posts::field.featured.warning','anomaly.module.posts::field.featured.instructions'),(261,261,'en','anomaly.module.posts::field.meta_title.name','anomaly.module.posts::field.meta_title.placeholder','anomaly.module.posts::field.meta_title.warning','anomaly.module.posts::field.meta_title.instructions'),(262,262,'en','anomaly.module.posts::field.meta_description.name','anomaly.module.posts::field.meta_description.placeholder','anomaly.module.posts::field.meta_description.warning','anomaly.module.posts::field.meta_description.instructions'),(263,263,'en','anomaly.module.posts::field.meta_keywords.name','anomaly.module.posts::field.meta_keywords.placeholder','anomaly.module.posts::field.meta_keywords.warning','anomaly.module.posts::field.meta_keywords.instructions'),(264,264,'en','anomaly.module.posts::field.ttl.name','anomaly.module.posts::field.ttl.placeholder','anomaly.module.posts::field.ttl.warning','anomaly.module.posts::field.ttl.instructions'),(265,265,'en','anomaly.module.posts::field.theme_layout.name','anomaly.module.posts::field.theme_layout.placeholder','anomaly.module.posts::field.theme_layout.warning','anomaly.module.posts::field.theme_layout.instructions'),(266,266,'en','anomaly.module.posts::field.parent.name','anomaly.module.posts::field.parent.placeholder','anomaly.module.posts::field.parent.warning','anomaly.module.posts::field.parent.instructions'),(267,267,'zh-cn','缩略图',NULL,NULL,NULL),(268,268,'zh-cn','图集',NULL,NULL,NULL),(168,168,'en','anomaly.module.preferences::field.value.name','anomaly.module.preferences::field.value.placeholder','anomaly.module.preferences::field.value.warning','anomaly.module.preferences::field.value.instructions'),(167,167,'en','anomaly.module.preferences::field.key.name','anomaly.module.preferences::field.key.placeholder','anomaly.module.preferences::field.key.warning','anomaly.module.preferences::field.key.instructions'),(166,166,'en','anomaly.module.preferences::field.user.name','anomaly.module.preferences::field.user.placeholder','anomaly.module.preferences::field.user.warning','anomaly.module.preferences::field.user.instructions'),(172,172,'en','anomaly.module.redirects::field.secure.name','anomaly.module.redirects::field.secure.placeholder','anomaly.module.redirects::field.secure.warning','anomaly.module.redirects::field.secure.instructions'),(171,171,'en','anomaly.module.redirects::field.status.name','anomaly.module.redirects::field.status.placeholder','anomaly.module.redirects::field.status.warning','anomaly.module.redirects::field.status.instructions'),(170,170,'en','anomaly.module.redirects::field.to.name','anomaly.module.redirects::field.to.placeholder','anomaly.module.redirects::field.to.warning','anomaly.module.redirects::field.to.instructions'),(169,169,'en','anomaly.module.redirects::field.from.name','anomaly.module.redirects::field.from.placeholder','anomaly.module.redirects::field.from.warning','anomaly.module.redirects::field.from.instructions'),(99,99,'en','anomaly.module.dashboard::field.allowed_roles.name','anomaly.module.dashboard::field.allowed_roles.placeholder','anomaly.module.dashboard::field.allowed_roles.warning','anomaly.module.dashboard::field.allowed_roles.instructions'),(113,113,'en','anomaly.module.files::field.size.name','anomaly.module.files::field.size.placeholder','anomaly.module.files::field.size.warning','anomaly.module.files::field.size.instructions'),(123,123,'en','anomaly.module.navigation::field.target.name','anomaly.module.navigation::field.target.placeholder','anomaly.module.navigation::field.target.warning','anomaly.module.navigation::field.target.instructions'),(143,143,'en','anomaly.module.pages::field.name.name','anomaly.module.pages::field.name.placeholder','anomaly.module.pages::field.name.warning','anomaly.module.pages::field.name.instructions'),(144,144,'en','anomaly.module.pages::field.description.name','anomaly.module.pages::field.description.placeholder','anomaly.module.pages::field.description.warning','anomaly.module.pages::field.description.instructions'),(248,248,'en','anomaly.module.posts::field.slug.name','anomaly.module.posts::field.slug.placeholder','anomaly.module.posts::field.slug.warning','anomaly.module.posts::field.slug.instructions'),(247,247,'en','anomaly.module.posts::field.title.name','anomaly.module.posts::field.title.placeholder','anomaly.module.posts::field.title.warning','anomaly.module.posts::field.title.instructions'),(173,173,'en','anomaly.module.settings::field.key.name','anomaly.module.settings::field.key.placeholder','anomaly.module.settings::field.key.warning','anomaly.module.settings::field.key.instructions'),(174,174,'en','anomaly.module.settings::field.value.name','anomaly.module.settings::field.value.placeholder','anomaly.module.settings::field.value.warning','anomaly.module.settings::field.value.instructions'),(175,175,'en','anomaly.module.users::field.email.name','anomaly.module.users::field.email.placeholder','anomaly.module.users::field.email.warning','anomaly.module.users::field.email.instructions'),(176,176,'en','anomaly.module.users::field.username.name','anomaly.module.users::field.username.placeholder','anomaly.module.users::field.username.warning','anomaly.module.users::field.username.instructions'),(177,177,'en','anomaly.module.users::field.password.name','anomaly.module.users::field.password.placeholder','anomaly.module.users::field.password.warning','anomaly.module.users::field.password.instructions'),(178,178,'en','anomaly.module.users::field.remember_token.name','anomaly.module.users::field.remember_token.placeholder','anomaly.module.users::field.remember_token.warning','anomaly.module.users::field.remember_token.instructions'),(179,179,'en','anomaly.module.users::field.ip_address.name','anomaly.module.users::field.ip_address.placeholder','anomaly.module.users::field.ip_address.warning','anomaly.module.users::field.ip_address.instructions'),(180,180,'en','anomaly.module.users::field.last_login_at.name','anomaly.module.users::field.last_login_at.placeholder','anomaly.module.users::field.last_login_at.warning','anomaly.module.users::field.last_login_at.instructions'),(181,181,'en','anomaly.module.users::field.last_activity_at.name','anomaly.module.users::field.last_activity_at.placeholder','anomaly.module.users::field.last_activity_at.warning','anomaly.module.users::field.last_activity_at.instructions'),(182,182,'en','anomaly.module.users::field.permissions.name','anomaly.module.users::field.permissions.placeholder','anomaly.module.users::field.permissions.warning','anomaly.module.users::field.permissions.instructions'),(183,183,'en','anomaly.module.users::field.display_name.name','anomaly.module.users::field.display_name.placeholder','anomaly.module.users::field.display_name.warning','anomaly.module.users::field.display_name.instructions'),(184,184,'en','anomaly.module.users::field.first_name.name','anomaly.module.users::field.first_name.placeholder','anomaly.module.users::field.first_name.warning','anomaly.module.users::field.first_name.instructions'),(185,185,'en','anomaly.module.users::field.last_name.name','anomaly.module.users::field.last_name.placeholder','anomaly.module.users::field.last_name.warning','anomaly.module.users::field.last_name.instructions'),(186,186,'en','anomaly.module.users::field.name.name','anomaly.module.users::field.name.placeholder','anomaly.module.users::field.name.warning','anomaly.module.users::field.name.instructions'),(187,187,'en','anomaly.module.users::field.description.name','anomaly.module.users::field.description.placeholder','anomaly.module.users::field.description.warning','anomaly.module.users::field.description.instructions'),(188,188,'en','anomaly.module.users::field.reset_code.name','anomaly.module.users::field.reset_code.placeholder','anomaly.module.users::field.reset_code.warning','anomaly.module.users::field.reset_code.instructions'),(189,189,'en','anomaly.module.users::field.reset_code_expires_at.name','anomaly.module.users::field.reset_code_expires_at.placeholder','anomaly.module.users::field.reset_code_expires_at.warning','anomaly.module.users::field.reset_code_expires_at.instructions'),(190,190,'en','anomaly.module.users::field.activation_code.name','anomaly.module.users::field.activation_code.placeholder','anomaly.module.users::field.activation_code.warning','anomaly.module.users::field.activation_code.instructions'),(191,191,'en','anomaly.module.users::field.activation_code_expires_at.name','anomaly.module.users::field.activation_code_expires_at.placeholder','anomaly.module.users::field.activation_code_expires_at.warning','anomaly.module.users::field.activation_code_expires_at.instructions'),(192,192,'en','anomaly.module.users::field.activated.name','anomaly.module.users::field.activated.placeholder','anomaly.module.users::field.activated.warning','anomaly.module.users::field.activated.instructions'),(193,193,'en','anomaly.module.users::field.enabled.name','anomaly.module.users::field.enabled.placeholder','anomaly.module.users::field.enabled.warning','anomaly.module.users::field.enabled.instructions'),(194,194,'en','anomaly.module.users::field.slug.name','anomaly.module.users::field.slug.placeholder','anomaly.module.users::field.slug.warning','anomaly.module.users::field.slug.instructions'),(195,195,'en','anomaly.module.users::field.roles.name','anomaly.module.users::field.roles.placeholder','anomaly.module.users::field.roles.warning','anomaly.module.users::field.roles.instructions'),(196,196,'en','anomaly.extension.page_link_type::field.title.name','anomaly.extension.page_link_type::field.title.placeholder','anomaly.extension.page_link_type::field.title.warning','anomaly.extension.page_link_type::field.title.instructions'),(197,197,'en','anomaly.extension.page_link_type::field.page.name','anomaly.extension.page_link_type::field.page.placeholder','anomaly.extension.page_link_type::field.page.warning','anomaly.extension.page_link_type::field.page.instructions'),(198,198,'en','anomaly.extension.page_link_type::field.description.name','anomaly.extension.page_link_type::field.description.placeholder','anomaly.extension.page_link_type::field.description.warning','anomaly.extension.page_link_type::field.description.instructions'),(199,199,'en','anomaly.extension.url_link_type::field.title.name','anomaly.extension.url_link_type::field.title.placeholder','anomaly.extension.url_link_type::field.title.warning','anomaly.extension.url_link_type::field.title.instructions'),(200,200,'en','anomaly.extension.url_link_type::field.url.name','anomaly.extension.url_link_type::field.url.placeholder','anomaly.extension.url_link_type::field.url.warning','anomaly.extension.url_link_type::field.url.instructions'),(201,201,'en','anomaly.extension.url_link_type::field.description.name','anomaly.extension.url_link_type::field.description.placeholder','anomaly.extension.url_link_type::field.description.warning','anomaly.extension.url_link_type::field.description.instructions'),(246,246,'en','anomaly.module.posts::field.name.name','anomaly.module.posts::field.name.placeholder','anomaly.module.posts::field.name.warning','anomaly.module.posts::field.name.instructions'),(245,245,'en','anomaly.module.posts::field.str_id.name','anomaly.module.posts::field.str_id.placeholder','anomaly.module.posts::field.str_id.warning','anomaly.module.posts::field.str_id.instructions'),(270,270,'zh-cn','上传视频',NULL,NULL,NULL),(271,271,'zh-cn','上传音频',NULL,NULL,NULL),(273,273,'en','fannan.module.test::field.name.name','fannan.module.test::field.name.placeholder','fannan.module.test::field.name.warning','fannan.module.test::field.name.instructions'),(274,274,'en','fannan.module.test::field.num.name','fannan.module.test::field.num.placeholder','fannan.module.test::field.num.warning','fannan.module.test::field.num.instructions'),(433,433,'en','fannan.module.members::field.integral.name','fannan.module.members::field.integral.placeholder','fannan.module.members::field.integral.warning','fannan.module.members::field.integral.instructions'),(432,432,'en','fannan.module.members::field.results.name','fannan.module.members::field.results.placeholder','fannan.module.members::field.results.warning','fannan.module.members::field.results.instructions'),(431,431,'en','fannan.module.members::field.card_pic.name','fannan.module.members::field.card_pic.placeholder','fannan.module.members::field.card_pic.warning','fannan.module.members::field.card_pic.instructions'),(430,430,'en','fannan.module.members::field.card_negative_pic.name','fannan.module.members::field.card_negative_pic.placeholder','fannan.module.members::field.card_negative_pic.warning','fannan.module.members::field.card_negative_pic.instructions'),(429,429,'en','fannan.module.members::field.card_positive_pic.name','fannan.module.members::field.card_positive_pic.placeholder','fannan.module.members::field.card_positive_pic.warning','fannan.module.members::field.card_positive_pic.instructions'),(428,428,'en','fannan.module.members::field.id_card.name','fannan.module.members::field.id_card.placeholder','fannan.module.members::field.id_card.warning','fannan.module.members::field.id_card.instructions'),(427,427,'en','fannan.module.members::field.real_name.name','fannan.module.members::field.real_name.placeholder','fannan.module.members::field.real_name.warning','fannan.module.members::field.real_name.instructions'),(426,426,'en','fannan.module.members::field.is_verified.name','fannan.module.members::field.is_verified.placeholder','fannan.module.members::field.is_verified.warning','fannan.module.members::field.is_verified.instructions'),(425,425,'en','fannan.module.members::field.grade.name','fannan.module.members::field.grade.placeholder','fannan.module.members::field.grade.warning','fannan.module.members::field.grade.instructions'),(424,424,'en','fannan.module.members::field.avatar.name','fannan.module.members::field.avatar.placeholder','fannan.module.members::field.avatar.warning','fannan.module.members::field.avatar.instructions'),(423,423,'en','fannan.module.members::field.nickname.name','fannan.module.members::field.nickname.placeholder','fannan.module.members::field.nickname.warning','fannan.module.members::field.nickname.instructions'),(422,422,'en','fannan.module.members::field.invitation_code.name','fannan.module.members::field.invitation_code.placeholder','fannan.module.members::field.invitation_code.warning','fannan.module.members::field.invitation_code.instructions'),(421,421,'en','fannan.module.members::field.openid.name','fannan.module.members::field.openid.placeholder','fannan.module.members::field.openid.warning','fannan.module.members::field.openid.instructions'),(419,419,'en','fannan.module.members::field.mobile.name','fannan.module.members::field.mobile.placeholder','fannan.module.members::field.mobile.warning','fannan.module.members::field.mobile.instructions'),(420,420,'en','fannan.module.members::field.password.name','fannan.module.members::field.password.placeholder','fannan.module.members::field.password.warning','fannan.module.members::field.password.instructions'),(434,434,'en','fannan.module.members::field.gold.name','fannan.module.members::field.gold.placeholder','fannan.module.members::field.gold.warning','fannan.module.members::field.gold.instructions'),(435,435,'en','fannan.module.members::field.parent_id.name','fannan.module.members::field.parent_id.placeholder','fannan.module.members::field.parent_id.warning','fannan.module.members::field.parent_id.instructions'),(436,436,'en','fannan.module.members::field.grand_id.name','fannan.module.members::field.grand_id.placeholder','fannan.module.members::field.grand_id.warning','fannan.module.members::field.grand_id.instructions'),(437,437,'en','fannan.module.members::field.great_grand_id.name','fannan.module.members::field.great_grand_id.placeholder','fannan.module.members::field.great_grand_id.warning','fannan.module.members::field.great_grand_id.instructions');

/*Table structure for table `default_streams_streams` */

DROP TABLE IF EXISTS `default_streams_streams`;

CREATE TABLE `default_streams_streams` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `namespace` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `prefix` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title_column` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'id',
  `order_by` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'id',
  `locked` tinyint(1) NOT NULL DEFAULT '0',
  `hidden` tinyint(1) NOT NULL DEFAULT '0',
  `sortable` tinyint(1) NOT NULL DEFAULT '0',
  `searchable` tinyint(1) NOT NULL DEFAULT '0',
  `trashable` tinyint(1) NOT NULL DEFAULT '0',
  `translatable` tinyint(1) NOT NULL DEFAULT '0',
  `config` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `unique_streams` (`namespace`,`slug`)
) ENGINE=MyISAM AUTO_INCREMENT=66 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `default_streams_streams` */

insert  into `default_streams_streams`(`id`,`namespace`,`slug`,`prefix`,`title_column`,`order_by`,`locked`,`hidden`,`sortable`,`searchable`,`trashable`,`translatable`,`config`) values (16,'configuration','configuration','configuration_','id','id',1,0,0,0,0,0,'a:0:{}'),(17,'dashboard','dashboards','dashboard_','name','id',0,0,1,0,1,1,'a:0:{}'),(18,'dashboard','widgets','dashboard_','title','id',0,0,1,0,1,1,'a:0:{}'),(19,'files','disks','files_','name','id',0,0,1,0,1,1,'a:0:{}'),(20,'files','folders','files_','name','id',0,0,1,0,1,1,'a:0:{}'),(22,'navigation','menus','navigation_','name','id',0,0,0,0,1,1,'a:0:{}'),(23,'navigation','links','navigation_','id','id',0,0,1,0,1,0,'a:0:{}'),(24,'pages','pages','pages_','title','id',0,0,1,1,1,1,'a:0:{}'),(25,'pages','types','pages_','name','id',0,0,1,0,1,1,'a:0:{}'),(46,'posts','categories','posts_','name','id',0,0,1,0,1,1,'a:0:{}'),(47,'posts','posts','posts_','title','id',0,0,0,1,1,1,'a:0:{}'),(29,'preferences','preferences','preferences_','id','id',0,0,0,0,0,0,'a:0:{}'),(30,'redirects','redirects','redirects_','from','id',0,0,1,0,1,0,'a:0:{}'),(21,'files','files','files_','name','id',0,0,0,1,1,0,'a:0:{}'),(48,'posts','types','posts_','name','id',0,0,1,0,1,1,'a:0:{}'),(31,'settings','settings','settings_','id','id',0,0,0,0,0,0,'a:0:{}'),(32,'users','users','users_','display_name','id',0,0,0,1,1,0,'a:0:{}'),(33,'users','roles','users_','name','id',0,0,0,0,1,1,'a:0:{}'),(34,'page_link_type','pages','page_link_type_','title','id',0,0,0,0,0,1,'a:0:{}'),(35,'url_link_type','urls','url_link_type_','title','id',0,0,0,0,0,1,'a:0:{}'),(36,'files','images','files_','id','id',0,0,0,0,1,1,'a:0:{}'),(37,'files','documents','files_','id','id',0,0,0,0,1,1,'a:0:{}'),(38,'pages','default_pages','pages_','id','id',0,1,0,0,1,1,'a:0:{}'),(39,'posts','default_posts','posts_','id','id',0,1,0,0,1,1,'a:0:{}'),(49,'posts','atlas_posts','posts_','id','id',0,1,0,0,1,1,'a:0:{}'),(50,'posts','video_posts','posts_','id','id',0,1,0,0,1,1,'a:0:{}'),(51,'files','video','files_','id','id',0,0,0,0,1,1,'a:0:{}'),(52,'posts','voice_posts','posts_','id','id',0,1,0,0,1,1,'a:0:{}'),(53,'files','voice','files_','id','id',0,0,0,0,1,1,'a:0:{}'),(55,'test','test','test_','name','id',0,0,0,0,0,1,'a:0:{}'),(65,'members','members','members_','id','id',0,0,0,0,0,0,'a:0:{}');

/*Table structure for table `default_streams_streams_translations` */

DROP TABLE IF EXISTS `default_streams_streams_translations`;

CREATE TABLE `default_streams_streams_translations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `stream_id` int(11) NOT NULL,
  `locale` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `streams_streams_translations_locale_index` (`locale`)
) ENGINE=MyISAM AUTO_INCREMENT=66 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `default_streams_streams_translations` */

insert  into `default_streams_streams_translations`(`id`,`stream_id`,`locale`,`name`,`description`) values (16,16,'en','anomaly.module.configuration::stream.configuration.name','anomaly.module.configuration::stream.configuration.description'),(17,17,'en','anomaly.module.dashboard::stream.dashboards.name','anomaly.module.dashboard::stream.dashboards.description'),(18,18,'en','anomaly.module.dashboard::stream.widgets.name','anomaly.module.dashboard::stream.widgets.description'),(19,19,'en','anomaly.module.files::stream.disks.name','anomaly.module.files::stream.disks.description'),(20,20,'en','anomaly.module.files::stream.folders.name','anomaly.module.files::stream.folders.description'),(21,21,'en','anomaly.module.files::stream.files.name','anomaly.module.files::stream.files.description'),(22,22,'en','anomaly.module.navigation::stream.menus.name','anomaly.module.navigation::stream.menus.description'),(23,23,'en','anomaly.module.navigation::stream.links.name','anomaly.module.navigation::stream.links.description'),(24,24,'en','anomaly.module.pages::stream.pages.name','anomaly.module.pages::stream.pages.description'),(25,25,'en','anomaly.module.pages::stream.types.name','anomaly.module.pages::stream.types.description'),(46,46,'en','anomaly.module.posts::stream.categories.name','anomaly.module.posts::stream.categories.description'),(47,47,'en','anomaly.module.posts::stream.posts.name','anomaly.module.posts::stream.posts.description'),(48,48,'en','anomaly.module.posts::stream.types.name','anomaly.module.posts::stream.types.description'),(29,29,'en','anomaly.module.preferences::stream.preferences.name','anomaly.module.preferences::stream.preferences.description'),(30,30,'en','anomaly.module.redirects::stream.redirects.name','anomaly.module.redirects::stream.redirects.description'),(31,31,'en','anomaly.module.settings::stream.settings.name','anomaly.module.settings::stream.settings.description'),(32,32,'en','anomaly.module.users::stream.users.name','anomaly.module.users::stream.users.description'),(33,33,'en','anomaly.module.users::stream.roles.name','anomaly.module.users::stream.roles.description'),(34,34,'en','anomaly.extension.page_link_type::stream.pages.name','anomaly.extension.page_link_type::stream.pages.description'),(35,35,'en','anomaly.extension.url_link_type::stream.urls.name','anomaly.extension.url_link_type::stream.urls.description'),(36,36,'en','Images','A folder for images.'),(37,37,'en','Documents','A folder for documents.'),(38,38,'en','Default','A simple page type.'),(39,39,'en','Default',NULL),(49,49,'en','图集',NULL),(50,50,'en','视频',NULL),(51,51,'en','Video','视频存储目录'),(52,52,'en','语音',NULL),(53,53,'en','Voice','音频存储目录'),(55,55,'en','fannan.module.test::stream.test.name','fannan.module.test::stream.test.description'),(65,65,'en','fannan.module.members::stream.members.name','fannan.module.members::stream.members.description');

/*Table structure for table `default_test_test` */

DROP TABLE IF EXISTS `default_test_test`;

CREATE TABLE `default_test_test` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `sort_order` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `created_by_id` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by_id` int(11) DEFAULT NULL,
  `num` int(11) DEFAULT '50',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `default_test_test` */

/*Table structure for table `default_test_test_translations` */

DROP TABLE IF EXISTS `default_test_test_translations`;

CREATE TABLE `default_test_test_translations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `entry_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `created_by_id` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by_id` int(11) DEFAULT NULL,
  `locale` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `test_test_translations_locale_index` (`locale`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `default_test_test_translations` */

/*Table structure for table `default_url_link_type_urls` */

DROP TABLE IF EXISTS `default_url_link_type_urls`;

CREATE TABLE `default_url_link_type_urls` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `sort_order` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `created_by_id` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by_id` int(11) DEFAULT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `default_url_link_type_urls` */

insert  into `default_url_link_type_urls`(`id`,`sort_order`,`created_at`,`created_by_id`,`updated_at`,`updated_by_id`,`url`) values (1,1,'2017-06-30 17:01:29',NULL,NULL,NULL,'http://pyrocms.com/'),(2,2,'2017-06-30 17:01:29',NULL,NULL,NULL,'http://pyrocms.com/documentation');

/*Table structure for table `default_url_link_type_urls_translations` */

DROP TABLE IF EXISTS `default_url_link_type_urls_translations`;

CREATE TABLE `default_url_link_type_urls_translations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `entry_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `created_by_id` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by_id` int(11) DEFAULT NULL,
  `locale` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`),
  KEY `url_link_type_urls_translations_locale_index` (`locale`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `default_url_link_type_urls_translations` */

insert  into `default_url_link_type_urls_translations`(`id`,`entry_id`,`created_at`,`created_by_id`,`updated_at`,`updated_by_id`,`locale`,`title`,`description`) values (1,1,'2017-06-30 17:01:29',NULL,'2017-06-30 17:01:29',NULL,'en','PyroCMS.com',NULL),(2,2,'2017-06-30 17:01:29',NULL,'2017-06-30 17:01:29',NULL,'en','Documentation',NULL);

/*Table structure for table `default_users_roles` */

DROP TABLE IF EXISTS `default_users_roles`;

CREATE TABLE `default_users_roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `sort_order` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `created_by_id` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by_id` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `permissions` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`),
  UNIQUE KEY `c8501689d10e8645dd553604c773dca2` (`slug`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `default_users_roles` */

insert  into `default_users_roles`(`id`,`sort_order`,`created_at`,`created_by_id`,`updated_at`,`updated_by_id`,`deleted_at`,`slug`,`permissions`) values (1,1,'2017-06-30 09:01:58',NULL,NULL,NULL,NULL,'admin',NULL),(2,2,'2017-06-30 09:01:58',NULL,NULL,NULL,NULL,'user',NULL),(3,3,'2017-06-30 09:01:58',NULL,NULL,NULL,NULL,'guest',NULL);

/*Table structure for table `default_users_roles_translations` */

DROP TABLE IF EXISTS `default_users_roles_translations`;

CREATE TABLE `default_users_roles_translations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `entry_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `created_by_id` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by_id` int(11) DEFAULT NULL,
  `locale` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`),
  KEY `users_roles_translations_locale_index` (`locale`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `default_users_roles_translations` */

insert  into `default_users_roles_translations`(`id`,`entry_id`,`created_at`,`created_by_id`,`updated_at`,`updated_by_id`,`locale`,`name`,`description`) values (1,1,'2017-06-30 09:01:58',NULL,'2017-06-30 09:01:58',NULL,'en','Admin','The super admin role.'),(2,2,'2017-06-30 09:01:58',NULL,'2017-06-30 09:01:58',NULL,'en','User','The default user role.'),(3,3,'2017-06-30 09:01:58',NULL,'2017-06-30 09:01:58',NULL,'en','Guest','The fallback role for non-users.');

/*Table structure for table `default_users_users` */

DROP TABLE IF EXISTS `default_users_users`;

CREATE TABLE `default_users_users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `sort_order` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `created_by_id` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by_id` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `first_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `activated` tinyint(1) DEFAULT '0',
  `enabled` tinyint(1) DEFAULT '1',
  `permissions` text COLLATE utf8_unicode_ci,
  `last_login_at` datetime DEFAULT NULL,
  `remember_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `activation_code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `reset_code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_activity_at` datetime DEFAULT NULL,
  `ip_address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `f432e8a18875d82efd589bf0d89fc033` (`email`),
  UNIQUE KEY `729e247f9366c049a3e2924a0a51b756` (`username`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `default_users_users` */

insert  into `default_users_users`(`id`,`sort_order`,`created_at`,`created_by_id`,`updated_at`,`updated_by_id`,`deleted_at`,`email`,`username`,`password`,`display_name`,`first_name`,`last_name`,`activated`,`enabled`,`permissions`,`last_login_at`,`remember_token`,`activation_code`,`reset_code`,`last_activity_at`,`ip_address`) values (1,1,'2017-06-30 09:01:58',NULL,'2017-07-14 03:09:53',1,NULL,'admin@gmail.com','admin','$2y$10$CxjvmFkXfatkEhK84bMIveyuFEo.dvDKDpw9uXY26I8bDDa8DRHEm','Administrator',NULL,NULL,1,1,NULL,'2017-07-14 03:09:53','NG5XOfzwtvUDe1lTSE5XdiTJrx4TXWjmUqUdrGy5oevS8geIfK0bQvbQ0tQS',NULL,NULL,'2017-07-11 09:20:17','127.0.0.1'),(2,2,'2017-06-30 09:01:59',NULL,'2017-06-30 09:02:00',NULL,NULL,'demo@pyrocms.com','demo','$2y$10$gnct/npz32FQkWcu93M5ee.Kkv35GNv9uUXB0nd4gssGt9G8l/tKa','Demo User',NULL,NULL,1,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL);

/*Table structure for table `default_users_users_roles` */

DROP TABLE IF EXISTS `default_users_users_roles`;

CREATE TABLE `default_users_users_roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `entry_id` int(11) NOT NULL,
  `related_id` int(11) NOT NULL,
  `sort_order` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `unique-relations` (`entry_id`,`related_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `default_users_users_roles` */

insert  into `default_users_users_roles`(`id`,`entry_id`,`related_id`,`sort_order`) values (1,2,2,NULL),(2,1,1,NULL);

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values (1,'2015_03_15_171404_create_applications_table',1),(2,'2015_03_15_171506_create_applications_domains_table',1);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
