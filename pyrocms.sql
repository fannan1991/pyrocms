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
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `default_addons_modules` */

insert  into `default_addons_modules`(`id`,`namespace`,`installed`,`enabled`) values (1,'anomaly.module.addons',1,1),(2,'anomaly.module.configuration',1,1),(3,'anomaly.module.dashboard',1,1),(4,'anomaly.module.files',1,1),(5,'anomaly.module.navigation',1,1),(6,'anomaly.module.pages',1,1),(7,'anomaly.module.posts',1,1),(8,'anomaly.module.preferences',1,1),(9,'anomaly.module.redirects',1,1),(10,'anomaly.module.repeaters',1,1),(11,'anomaly.module.settings',1,1),(12,'anomaly.module.users',1,1),(13,'anomaly.module.variables',1,1),(14,'fannan.module.test',1,1),(15,'fannan.module.members',1,1),(16,'fannan.module.lottery',1,1),(17,'fannan.module.envelopes',1,1),(18,'fannan.module.advertising',1,1),(19,'fannan.module.transaction',1,1);

/*Table structure for table `default_advertising_advertising` */

DROP TABLE IF EXISTS `default_advertising_advertising`;

CREATE TABLE `default_advertising_advertising` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `sort_order` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `created_by_id` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by_id` int(11) DEFAULT NULL,
  `ad_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ad_slot_id` int(11) DEFAULT NULL,
  `ad_image_id` int(11) NOT NULL,
  `ad_url` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ad_description` text COLLATE utf8_unicode_ci,
  `ad_sorting` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `default_advertising_advertising` */

insert  into `default_advertising_advertising`(`id`,`sort_order`,`created_at`,`created_by_id`,`updated_at`,`updated_by_id`,`ad_title`,`ad_slot_id`,`ad_image_id`,`ad_url`,`ad_description`,`ad_sorting`) values (1,1,'2017-08-21 09:39:43',1,NULL,NULL,'banner1',1,1,NULL,NULL,1),(2,2,'2017-08-21 10:29:49',1,'2017-08-21 10:30:23',1,'红包',2,33,NULL,NULL,0),(3,3,'2017-08-21 10:36:06',1,NULL,NULL,'抽奖',2,35,NULL,NULL,1),(4,4,'2017-08-21 10:37:00',1,NULL,NULL,'贷款',2,34,NULL,NULL,2),(5,5,'2017-08-21 10:57:41',1,'2017-08-21 11:01:31',1,' 横幅广告',3,36,NULL,NULL,0);

/*Table structure for table `default_advertising_advertising_translations` */

DROP TABLE IF EXISTS `default_advertising_advertising_translations`;

CREATE TABLE `default_advertising_advertising_translations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `entry_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `created_by_id` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by_id` int(11) DEFAULT NULL,
  `locale` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `advertising_advertising_translations_locale_index` (`locale`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `default_advertising_advertising_translations` */

insert  into `default_advertising_advertising_translations`(`id`,`entry_id`,`created_at`,`created_by_id`,`updated_at`,`updated_by_id`,`locale`) values (1,1,'2017-08-21 09:39:43',NULL,'2017-08-21 09:39:43',1,'zh-cn'),(2,2,'2017-08-21 10:29:49',NULL,'2017-08-21 10:29:49',1,'zh-cn'),(3,3,'2017-08-21 10:36:06',NULL,'2017-08-21 10:36:06',1,'zh-cn'),(4,4,'2017-08-21 10:37:00',NULL,'2017-08-21 10:37:00',1,'zh-cn'),(5,5,'2017-08-21 10:57:41',NULL,'2017-08-21 10:57:41',1,'zh-cn');

/*Table structure for table `default_advertising_slot` */

DROP TABLE IF EXISTS `default_advertising_slot`;

CREATE TABLE `default_advertising_slot` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `sort_order` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `created_by_id` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by_id` int(11) DEFAULT NULL,
  `slot_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slot_description` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `default_advertising_slot` */

insert  into `default_advertising_slot`(`id`,`sort_order`,`created_at`,`created_by_id`,`updated_at`,`updated_by_id`,`slot_name`,`slot_description`) values (1,1,'2017-08-21 09:37:46',1,NULL,NULL,'首页Banner',NULL),(2,2,'2017-08-21 10:15:18',1,NULL,NULL,'活动版位',NULL),(3,3,'2017-08-21 10:56:14',1,NULL,NULL,'首页横幅广告',NULL);

/*Table structure for table `default_advertising_slot_translations` */

DROP TABLE IF EXISTS `default_advertising_slot_translations`;

CREATE TABLE `default_advertising_slot_translations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `entry_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `created_by_id` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by_id` int(11) DEFAULT NULL,
  `locale` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `advertising_slot_translations_locale_index` (`locale`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `default_advertising_slot_translations` */

insert  into `default_advertising_slot_translations`(`id`,`entry_id`,`created_at`,`created_by_id`,`updated_at`,`updated_by_id`,`locale`) values (1,1,'2017-08-21 09:37:46',NULL,'2017-08-21 09:37:46',1,'zh-cn'),(2,2,'2017-08-21 10:15:18',NULL,'2017-08-21 10:15:18',1,'zh-cn'),(3,3,'2017-08-21 10:56:14',NULL,'2017-08-21 10:56:14',1,'zh-cn');

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

/*Table structure for table `default_envelopes_envelopes` */

DROP TABLE IF EXISTS `default_envelopes_envelopes`;

CREATE TABLE `default_envelopes_envelopes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `sort_order` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `created_by_id` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by_id` int(11) DEFAULT NULL,
  `envelopes_amount_min` int(11) NOT NULL DEFAULT '1',
  `envelopes_amount_max` int(11) NOT NULL DEFAULT '1',
  `envelopes_visitor_times` int(11) NOT NULL DEFAULT '0',
  `envelopes_ordinary_times` int(11) NOT NULL DEFAULT '0',
  `envelopes_bronze_times` int(11) NOT NULL DEFAULT '0',
  `envelopes_silver_times` int(11) NOT NULL DEFAULT '0',
  `envelopes_gold_times` int(11) NOT NULL DEFAULT '0',
  `envelopes_diamond_times` int(11) NOT NULL DEFAULT '0',
  `envelopes_is_open` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `default_envelopes_envelopes` */

insert  into `default_envelopes_envelopes`(`id`,`sort_order`,`created_at`,`created_by_id`,`updated_at`,`updated_by_id`,`envelopes_amount_min`,`envelopes_amount_max`,`envelopes_visitor_times`,`envelopes_ordinary_times`,`envelopes_bronze_times`,`envelopes_silver_times`,`envelopes_gold_times`,`envelopes_diamond_times`,`envelopes_is_open`) values (1,1,'2017-08-21 16:43:43',1,'2017-09-07 10:55:21',1,1,10,10,3,3,3,3,3,1);

/*Table structure for table `default_envelopes_envelopes_translations` */

DROP TABLE IF EXISTS `default_envelopes_envelopes_translations`;

CREATE TABLE `default_envelopes_envelopes_translations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `entry_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `created_by_id` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by_id` int(11) DEFAULT NULL,
  `locale` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `envelopes_envelopes_translations_locale_index` (`locale`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `default_envelopes_envelopes_translations` */

insert  into `default_envelopes_envelopes_translations`(`id`,`entry_id`,`created_at`,`created_by_id`,`updated_at`,`updated_by_id`,`locale`) values (1,1,'2017-08-21 16:43:43',NULL,'2017-08-21 16:43:43',1,'zh-cn');

/*Table structure for table `default_envelopes_log` */

DROP TABLE IF EXISTS `default_envelopes_log`;

CREATE TABLE `default_envelopes_log` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `sort_order` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `created_by_id` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by_id` int(11) DEFAULT NULL,
  `log_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `log_mobile` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `log_amount` int(11) NOT NULL,
  `log_member_id_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `default_envelopes_log` */

insert  into `default_envelopes_log`(`id`,`sort_order`,`created_at`,`created_by_id`,`updated_at`,`updated_by_id`,`log_name`,`log_mobile`,`log_amount`,`log_member_id_id`) values (6,3,'2017-08-21 22:17:55',NULL,NULL,NULL,'樊楠','15002983802',9,1),(5,2,'2017-08-21 17:55:57',NULL,NULL,NULL,'樊楠','15002983802',6,1),(4,1,'2017-08-21 17:54:34',NULL,NULL,NULL,'樊楠','15002983802',1,1),(7,4,'2017-08-22 22:50:12',NULL,NULL,NULL,'樊楠','15002983802',5,1),(8,5,'2017-08-22 22:58:30',NULL,NULL,NULL,'樊楠','15002983802',10,1),(9,6,'2017-08-22 22:58:50',NULL,NULL,NULL,'樊楠','15002983802',7,1),(10,7,'2017-08-27 21:48:48',NULL,NULL,NULL,'xushi','15002983802',10,1),(11,8,'2017-08-27 21:58:01',NULL,NULL,NULL,'xushi','15002983802',9,1),(12,9,'2017-08-27 22:00:23',NULL,NULL,NULL,'xushi','15002983802',1,1),(13,10,'2017-09-07 10:33:27',NULL,NULL,NULL,'樊楠','15002983802',5,1),(14,11,'2017-09-07 10:49:10',NULL,NULL,NULL,'樊楠','15002983802',2,1),(15,12,'2017-09-07 10:49:17',NULL,NULL,NULL,'樊楠','15002983802',1,1),(16,13,'2017-09-07 11:06:24',NULL,NULL,NULL,'樊楠','15002983802',4,1),(17,14,'2017-09-07 11:08:48',NULL,NULL,NULL,'樊楠','15002983802',7,1),(18,15,'2017-09-07 11:14:40',NULL,NULL,NULL,'樊楠','15002983802',2,1),(19,16,'2017-09-08 12:13:46',NULL,NULL,NULL,'樊楠','15002983802',8,1),(20,17,'2017-09-13 14:51:33',NULL,NULL,NULL,'FanNan','15002983802',2,1),(21,18,'2017-09-18 12:18:06',NULL,NULL,NULL,'FanNan','15002983802',8,1);

/*Table structure for table `default_envelopes_log_translations` */

DROP TABLE IF EXISTS `default_envelopes_log_translations`;

CREATE TABLE `default_envelopes_log_translations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `entry_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `created_by_id` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by_id` int(11) DEFAULT NULL,
  `locale` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `envelopes_log_translations_locale_index` (`locale`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `default_envelopes_log_translations` */

insert  into `default_envelopes_log_translations`(`id`,`entry_id`,`created_at`,`created_by_id`,`updated_at`,`updated_by_id`,`locale`) values (1,1,'2017-08-21 17:18:36',NULL,'2017-08-21 17:18:36',NULL,'zh-cn'),(2,2,'2017-08-21 17:22:20',NULL,'2017-08-21 17:22:20',NULL,'zh-cn'),(3,3,'2017-08-21 17:29:26',NULL,'2017-08-21 17:29:26',NULL,'zh-cn'),(4,4,'2017-08-21 17:54:34',NULL,'2017-08-21 17:54:34',NULL,'zh-cn'),(5,5,'2017-08-21 17:55:57',NULL,'2017-08-21 17:55:57',NULL,'zh-cn'),(6,6,'2017-08-21 22:17:55',NULL,'2017-08-21 22:17:55',NULL,'zh-cn'),(7,7,'2017-08-22 22:50:12',NULL,'2017-08-22 22:50:12',NULL,'zh-cn'),(8,8,'2017-08-22 22:58:30',NULL,'2017-08-22 22:58:30',NULL,'zh-cn'),(9,9,'2017-08-22 22:58:50',NULL,'2017-08-22 22:58:50',NULL,'zh-cn'),(10,10,'2017-08-27 21:48:48',NULL,'2017-08-27 21:48:48',NULL,'zh-cn'),(11,11,'2017-08-27 21:58:01',NULL,'2017-08-27 21:58:01',NULL,'zh-cn'),(12,12,'2017-08-27 22:00:23',NULL,'2017-08-27 22:00:23',NULL,'zh-cn'),(13,13,'2017-09-07 10:33:27',NULL,'2017-09-07 10:33:27',NULL,'zh-cn'),(14,14,'2017-09-07 10:49:10',NULL,'2017-09-07 10:49:10',NULL,'zh-cn'),(15,15,'2017-09-07 10:49:17',NULL,'2017-09-07 10:49:17',NULL,'zh-cn'),(16,16,'2017-09-07 11:06:24',NULL,'2017-09-07 11:06:24',NULL,'zh-cn'),(17,17,'2017-09-07 11:08:48',NULL,'2017-09-07 11:08:48',NULL,'zh-cn'),(18,18,'2017-09-07 11:14:40',NULL,'2017-09-07 11:14:40',NULL,'zh-cn'),(19,19,'2017-09-08 12:13:47',NULL,'2017-09-08 12:13:47',NULL,'zh-cn'),(20,20,'2017-09-13 14:51:33',NULL,'2017-09-13 14:51:33',NULL,'zh-cn'),(21,21,'2017-09-18 12:18:06',NULL,'2017-09-18 12:18:06',NULL,'zh-cn');

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
) ENGINE=MyISAM AUTO_INCREMENT=58 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `default_files_files` */

insert  into `default_files_files`(`id`,`sort_order`,`created_at`,`created_by_id`,`updated_at`,`updated_by_id`,`deleted_at`,`name`,`disk_id`,`folder_id`,`extension`,`size`,`mime_type`,`entry_id`,`entry_type`,`keywords`,`height`,`width`) values (1,1,'2017-07-03 03:23:42',1,'2017-07-03 03:23:47',1,NULL,'stock-photo-112736013.jpg',1,1,'jpg',104223,'image/jpeg',NULL,'Anomaly\\Streams\\Platform\\Model\\Files\\FilesImagesEntryModel',NULL,'600','900'),(2,2,'2017-07-03 03:41:07',1,'2017-07-03 03:41:08',1,NULL,'stock-photo-171506373.jpg',1,1,'jpg',137790,'image/jpeg',NULL,'Anomaly\\Streams\\Platform\\Model\\Files\\FilesImagesEntryModel',NULL,'600','900'),(3,3,'2017-07-03 03:41:13',1,'2017-07-03 03:41:14',1,NULL,'stock-photo-192034021.jpg',1,1,'jpg',105076,'image/jpeg',NULL,'Anomaly\\Streams\\Platform\\Model\\Files\\FilesImagesEntryModel',NULL,'601','900'),(4,4,'2017-07-03 03:41:19',1,'2017-07-03 03:41:20',1,NULL,'stock-photo-199475515.jpg',1,1,'jpg',72541,'image/jpeg',NULL,'Anomaly\\Streams\\Platform\\Model\\Files\\FilesImagesEntryModel',NULL,'570','900'),(5,5,'2017-08-04 03:55:46',1,NULL,NULL,NULL,'da0ace0863a6c5950d3fe8a8d2dd10b7.jpg',1,1,'',0,'image/jpeg',NULL,'Anomaly\\Streams\\Platform\\Model\\Files\\FilesImagesEntryModel',NULL,NULL,NULL),(6,6,'2017-08-04 04:05:46',NULL,NULL,NULL,NULL,'d8a63af9ae6da79f9d1633ba131791c4.jpg',1,1,'',0,'image/jpeg',NULL,'Anomaly\\Streams\\Platform\\Model\\Files\\FilesImagesEntryModel',NULL,NULL,NULL),(7,7,'2017-08-04 04:06:44',NULL,NULL,NULL,NULL,'d645242c7506f15c83c0a3d66ed9de63.jpg',1,1,'',0,'image/jpeg',NULL,'Anomaly\\Streams\\Platform\\Model\\Files\\FilesImagesEntryModel',NULL,NULL,NULL),(8,8,'2017-08-04 04:08:32',NULL,NULL,NULL,NULL,'f76f9b92af7d54698876686a53cd22b7.jpg',1,1,'',0,'image/jpeg',NULL,'Anomaly\\Streams\\Platform\\Model\\Files\\FilesImagesEntryModel',NULL,NULL,NULL),(9,9,'2017-08-04 04:08:53',NULL,NULL,NULL,NULL,'5f671873f36cf79ff6bcd2aeaddab6f0.jpg',1,1,'',0,'image/jpeg',NULL,'Anomaly\\Streams\\Platform\\Model\\Files\\FilesImagesEntryModel',NULL,NULL,NULL),(10,10,'2017-08-04 04:10:02',NULL,NULL,NULL,NULL,'7953149deb5f5f9cd124f00b3aba41ad.jpg',1,1,'',0,'image/jpeg',NULL,'Anomaly\\Streams\\Platform\\Model\\Files\\FilesImagesEntryModel',NULL,NULL,NULL),(11,11,'2017-08-04 04:17:11',NULL,NULL,NULL,NULL,'c7c7b0ae559ed69fa49c9f76bba95b70.jpg',1,1,'',0,'image/jpeg',NULL,'Anomaly\\Streams\\Platform\\Model\\Files\\FilesImagesEntryModel',NULL,NULL,NULL),(12,12,'2017-08-04 06:30:38',1,NULL,NULL,NULL,'de9ff0a6c7dfc0e9228dc16b206af5dd.jpg',1,1,'',0,'image/jpeg',NULL,'Anomaly\\Streams\\Platform\\Model\\Files\\FilesImagesEntryModel',NULL,NULL,NULL),(13,13,'2017-08-04 06:31:36',1,NULL,NULL,NULL,'5167474166db8925735a4ee06ed01040.jpg',1,1,'',0,'image/jpeg',NULL,'Anomaly\\Streams\\Platform\\Model\\Files\\FilesImagesEntryModel',NULL,NULL,NULL),(14,14,'2017-08-04 06:39:32',1,NULL,NULL,NULL,'19665ef262029a618a76f231e7b553c4.jpg',1,1,'',0,'image/jpeg',NULL,'Anomaly\\Streams\\Platform\\Model\\Files\\FilesImagesEntryModel',NULL,NULL,NULL),(15,15,'2017-08-04 06:47:59',1,NULL,NULL,NULL,'27c6a7ddacc27a0061e27ed36a6fe1c0.jpg',1,1,'',0,'image/jpeg',NULL,'Anomaly\\Streams\\Platform\\Model\\Files\\FilesImagesEntryModel',NULL,NULL,NULL),(16,16,'2017-08-04 06:50:28',1,NULL,NULL,NULL,'741e164150fd72ec2dd52a56fca7b07b.jpg',1,1,'',0,'image/jpeg',NULL,'Anomaly\\Streams\\Platform\\Model\\Files\\FilesImagesEntryModel',NULL,NULL,NULL),(17,17,'2017-08-04 06:50:28',1,NULL,NULL,NULL,'d46e837d250a6c69bbe59e9d8c5beae8.jpg',1,1,'',0,'image/jpeg',NULL,'Anomaly\\Streams\\Platform\\Model\\Files\\FilesImagesEntryModel',NULL,NULL,NULL),(18,18,'2017-08-04 08:42:10',1,NULL,NULL,NULL,'703e4acbc7ba038220fc74915a24de73.jpg',1,1,'',0,'image/jpeg',NULL,'Anomaly\\Streams\\Platform\\Model\\Files\\FilesImagesEntryModel',NULL,NULL,NULL),(19,19,'2017-08-04 08:45:34',1,NULL,NULL,NULL,'4c6e7e5e3bdb6b0fe9420ab85ff24324.jpg',1,1,'',0,'image/jpeg',NULL,'Anomaly\\Streams\\Platform\\Model\\Files\\FilesImagesEntryModel',NULL,NULL,NULL),(20,20,'2017-08-04 08:45:35',1,NULL,NULL,NULL,'36482a5d5b1b68efa2cd8b7a5679efc7.jpg',1,1,'',0,'image/jpeg',NULL,'Anomaly\\Streams\\Platform\\Model\\Files\\FilesImagesEntryModel',NULL,NULL,NULL),(21,21,'2017-08-04 08:50:14',1,NULL,NULL,NULL,'2caab1f46d0171991fa66ea629658924.jpg',1,1,'',0,'image/jpeg',NULL,'Anomaly\\Streams\\Platform\\Model\\Files\\FilesImagesEntryModel',NULL,NULL,NULL),(22,22,'2017-08-04 08:50:14',1,NULL,NULL,NULL,'9dd788303cece885084acdb2e3adc969.jpg',1,1,'',0,'image/jpeg',NULL,'Anomaly\\Streams\\Platform\\Model\\Files\\FilesImagesEntryModel',NULL,NULL,NULL),(23,23,'2017-08-04 08:51:31',1,NULL,NULL,NULL,'62fcc197bb0f3a22d5e78c667fdb3a9e.jpg',1,1,'',0,'image/jpeg',NULL,'Anomaly\\Streams\\Platform\\Model\\Files\\FilesImagesEntryModel',NULL,NULL,NULL),(24,24,'2017-08-04 08:51:31',1,NULL,NULL,NULL,'0d8f6c799e28ef527eeba678a3ea3e56.jpg',1,1,'',0,'image/jpeg',NULL,'Anomaly\\Streams\\Platform\\Model\\Files\\FilesImagesEntryModel',NULL,NULL,NULL),(25,25,'2017-08-10 03:19:14',1,NULL,NULL,NULL,'23d4dbe0bd4d774d243fd8d363c82443.jpg',1,1,'',0,'image/jpeg',NULL,'Anomaly\\Streams\\Platform\\Model\\Files\\FilesImagesEntryModel',NULL,NULL,NULL),(26,26,'2017-08-10 03:20:09',1,NULL,NULL,NULL,'2d052d292bc3c34dbc626c94ee6af4a2.jpg',1,1,'',0,'image/jpeg',NULL,'Anomaly\\Streams\\Platform\\Model\\Files\\FilesImagesEntryModel',NULL,NULL,NULL),(27,27,'2017-08-10 03:23:44',1,NULL,NULL,NULL,'d3df70306313a537f14ae88f6f056584.jpg',1,1,'',0,'image/jpeg',NULL,'Anomaly\\Streams\\Platform\\Model\\Files\\FilesImagesEntryModel',NULL,NULL,NULL),(28,28,'2017-08-10 03:23:45',1,NULL,NULL,NULL,'171fa5b09c8690704ff97a67fd54f2a1.jpg',1,1,'',0,'image/jpeg',NULL,'Anomaly\\Streams\\Platform\\Model\\Files\\FilesImagesEntryModel',NULL,NULL,NULL),(29,29,'2017-08-20 16:57:50',NULL,NULL,NULL,NULL,'4ed9b7b552ff0e00b53577095d1d47c4.jpg',1,1,'',0,'image/jpeg',NULL,'Anomaly\\Streams\\Platform\\Model\\Files\\FilesImagesEntryModel',NULL,NULL,NULL),(30,30,'2017-08-20 16:58:00',NULL,NULL,NULL,NULL,'ab59b836e4dfa798bdedc5b9d79597c7.jpg',1,1,'',0,'image/jpeg',NULL,'Anomaly\\Streams\\Platform\\Model\\Files\\FilesImagesEntryModel',NULL,NULL,NULL),(31,31,'2017-08-20 16:58:10',NULL,NULL,NULL,NULL,'bc26796d8205e115b21ee6d63e6fc3c7.jpg',1,1,'',0,'image/jpeg',NULL,'Anomaly\\Streams\\Platform\\Model\\Files\\FilesImagesEntryModel',NULL,NULL,NULL),(32,32,'2017-08-20 17:28:45',NULL,NULL,NULL,NULL,'6e46ce2060148f46119bb2540f35998f.jpg',1,1,'',0,'image/jpeg',NULL,'Anomaly\\Streams\\Platform\\Model\\Files\\FilesImagesEntryModel',NULL,NULL,NULL),(33,33,'2017-08-21 10:29:14',1,'2017-08-21 10:29:17',1,NULL,'hongbao.png',1,1,'png',11027,'image/png',NULL,'Anomaly\\Streams\\Platform\\Model\\Files\\FilesImagesEntryModel',NULL,'76','152'),(34,34,'2017-08-21 10:29:14',1,'2017-08-21 10:29:16',1,NULL,'daikuan.png',1,1,'png',11723,'image/png',NULL,'Anomaly\\Streams\\Platform\\Model\\Files\\FilesImagesEntryModel',NULL,'76','149'),(35,35,'2017-08-21 10:29:14',1,NULL,NULL,NULL,'choujiang.png',1,1,'png',11040,'image/png',NULL,'Anomaly\\Streams\\Platform\\Model\\Files\\FilesImagesEntryModel',NULL,'72','150'),(36,36,'2017-08-21 10:57:23',1,'2017-08-21 10:57:23',1,NULL,'advertising_index.png',1,1,'png',88986,'image/png',NULL,'Anomaly\\Streams\\Platform\\Model\\Files\\FilesImagesEntryModel',NULL,'138','477'),(37,37,'2017-08-21 14:26:29',1,'2017-08-21 14:27:00',1,NULL,'detault_avatar.png',1,1,'png',2785,'image/png',1,'Anomaly\\Streams\\Platform\\Model\\Files\\FilesImagesEntryModel','a:1:{i:0;s:12:\"默认头像\";}','244','244'),(38,38,'2017-08-27 02:02:36',NULL,NULL,NULL,NULL,'e48d25faec79c1b2140ec761406f55ff.',1,1,'',0,'image/jpeg',NULL,'Anomaly\\Streams\\Platform\\Model\\Files\\FilesImagesEntryModel',NULL,NULL,NULL),(39,39,'2017-08-27 02:02:37',NULL,NULL,NULL,NULL,'f0f89acaa91769cb15a72543dc37a824.',1,1,'',0,'image/jpeg',NULL,'Anomaly\\Streams\\Platform\\Model\\Files\\FilesImagesEntryModel',NULL,NULL,NULL),(40,40,'2017-08-27 02:10:47',NULL,NULL,NULL,NULL,'1111d45601559c50c2698e945b3c27b3.',1,1,'',0,'image/jpeg',NULL,'Anomaly\\Streams\\Platform\\Model\\Files\\FilesImagesEntryModel',NULL,NULL,NULL),(41,41,'2017-08-27 02:10:47',NULL,NULL,NULL,NULL,'1111d45601559c50c2698e945b3c27b3.',1,1,'',0,'image/jpeg',NULL,'Anomaly\\Streams\\Platform\\Model\\Files\\FilesImagesEntryModel',NULL,NULL,NULL),(42,42,'2017-08-27 02:12:22',NULL,NULL,NULL,NULL,'ab6a42d9b0b20b65fc8ed3167ff829d2.',1,1,'',0,'image/jpeg',NULL,'Anomaly\\Streams\\Platform\\Model\\Files\\FilesImagesEntryModel',NULL,NULL,NULL),(43,43,'2017-08-27 02:12:22',NULL,NULL,NULL,NULL,'ab6a42d9b0b20b65fc8ed3167ff829d2.',1,1,'',0,'image/jpeg',NULL,'Anomaly\\Streams\\Platform\\Model\\Files\\FilesImagesEntryModel',NULL,NULL,NULL),(44,44,'2017-08-27 02:20:54',NULL,NULL,NULL,NULL,'8243308e4da7a32fae07d904cba3bd53.',1,1,'',0,'image/jpeg',NULL,'Anomaly\\Streams\\Platform\\Model\\Files\\FilesImagesEntryModel',NULL,NULL,NULL),(45,45,'2017-08-27 02:20:55',NULL,NULL,NULL,NULL,'4295a439ea2f2b15975e59b8a57f54bf.',1,1,'',0,'image/jpeg',NULL,'Anomaly\\Streams\\Platform\\Model\\Files\\FilesImagesEntryModel',NULL,NULL,NULL),(46,46,'2017-08-27 02:37:54',NULL,NULL,NULL,NULL,'09d705acd2f8148a46641af2f6a950fa.',1,1,'',0,'image/jpeg',NULL,'Anomaly\\Streams\\Platform\\Model\\Files\\FilesImagesEntryModel',NULL,NULL,NULL),(47,47,'2017-08-27 02:38:07',NULL,NULL,NULL,NULL,'7fdcf5ccc28713c20da9d09ed14b1455.',1,1,'',0,'image/jpeg',NULL,'Anomaly\\Streams\\Platform\\Model\\Files\\FilesImagesEntryModel',NULL,NULL,NULL),(48,48,'2017-08-27 02:41:22',NULL,NULL,NULL,NULL,'adea7385c864e7574b263c92659a48b9.',1,1,'',0,'image/jpeg',NULL,'Anomaly\\Streams\\Platform\\Model\\Files\\FilesImagesEntryModel',NULL,NULL,NULL),(49,49,'2017-08-27 02:42:36',NULL,NULL,NULL,NULL,'7aac159b5dce808c22c902fc0326178d.',1,1,'',0,'image/jpeg',NULL,'Anomaly\\Streams\\Platform\\Model\\Files\\FilesImagesEntryModel',NULL,NULL,NULL),(50,50,'2017-08-27 02:47:01',NULL,NULL,NULL,NULL,'ba4285e470f93869eb7bf3a7f3d4ca8a.',1,1,'',0,'image/jpeg',NULL,'Anomaly\\Streams\\Platform\\Model\\Files\\FilesImagesEntryModel',NULL,NULL,NULL),(51,51,'2017-08-27 02:47:18',NULL,NULL,NULL,NULL,'10dbfe989271fe92426b89f9f30da5f4.',1,1,'',0,'image/jpeg',NULL,'Anomaly\\Streams\\Platform\\Model\\Files\\FilesImagesEntryModel',NULL,NULL,NULL),(52,52,'2017-08-30 00:05:34',NULL,NULL,NULL,NULL,'4d1b993e96026b0a46025429ad0cf5bc.png',1,1,'',0,'image/jpeg',NULL,'Anomaly\\Streams\\Platform\\Model\\Files\\FilesImagesEntryModel',NULL,NULL,NULL),(53,53,'2017-08-30 00:05:46',NULL,NULL,NULL,NULL,'099536106aae4ef88189c050d47a9e7b.png',1,1,'',0,'image/jpeg',NULL,'Anomaly\\Streams\\Platform\\Model\\Files\\FilesImagesEntryModel',NULL,NULL,NULL),(54,54,'2017-08-30 00:05:57',NULL,NULL,NULL,NULL,'9bfc34811d329d83fa5d0cfd002ea60f.png',1,1,'',0,'image/jpeg',NULL,'Anomaly\\Streams\\Platform\\Model\\Files\\FilesImagesEntryModel',NULL,NULL,NULL),(55,55,'2017-09-07 10:53:45',NULL,NULL,NULL,NULL,'fdd2361cf21ce4312f9c089fcb44d32e.jpg',1,1,'',0,'image/jpeg',NULL,'Anomaly\\Streams\\Platform\\Model\\Files\\FilesImagesEntryModel',NULL,NULL,NULL),(56,56,'2017-09-14 11:48:38',1,'2017-09-14 11:48:47',1,NULL,'stock-photo-205211881.jpg',1,1,'jpg',187884,'image/jpeg',NULL,'Anomaly\\Streams\\Platform\\Model\\Files\\FilesImagesEntryModel',NULL,'900','900'),(57,57,'2017-09-20 14:41:15',1,NULL,NULL,NULL,'bc242b33c554531704c907a1441ba1b2.jpg',1,1,'',0,'image/jpeg',NULL,'Anomaly\\Streams\\Platform\\Model\\Files\\FilesImagesEntryModel',NULL,NULL,NULL);

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
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `default_files_images` */

insert  into `default_files_images`(`id`,`sort_order`,`created_at`,`created_by_id`,`updated_at`,`updated_by_id`,`deleted_at`) values (1,1,'2017-08-21 14:27:00',1,NULL,NULL,NULL);

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
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `default_files_images_translations` */

insert  into `default_files_images_translations`(`id`,`entry_id`,`created_at`,`created_by_id`,`updated_at`,`updated_by_id`,`locale`) values (1,1,'2017-08-21 14:27:00',NULL,'2017-08-21 14:27:00',1,'zh-cn');

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

/*Table structure for table `default_lottery_grant` */

DROP TABLE IF EXISTS `default_lottery_grant`;

CREATE TABLE `default_lottery_grant` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `sort_order` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `created_by_id` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by_id` int(11) DEFAULT NULL,
  `grant_ticket_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `grant_grade` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '1',
  `grant_valid_period` datetime NOT NULL,
  `grant_num` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `default_lottery_grant` */

insert  into `default_lottery_grant`(`id`,`sort_order`,`created_at`,`created_by_id`,`updated_at`,`updated_by_id`,`grant_ticket_name`,`grant_grade`,`grant_valid_period`,`grant_num`) values (1,1,'2017-08-31 17:59:24',1,'2017-08-31 18:00:07',1,'抽奖券','1','2017-09-30 12:00:00',5),(2,2,'2017-09-15 11:30:06',1,NULL,NULL,'抽奖券','1','2017-10-31 12:00:00',1);

/*Table structure for table `default_lottery_grant_translations` */

DROP TABLE IF EXISTS `default_lottery_grant_translations`;

CREATE TABLE `default_lottery_grant_translations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `entry_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `created_by_id` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by_id` int(11) DEFAULT NULL,
  `locale` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `lottery_grant_translations_locale_index` (`locale`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `default_lottery_grant_translations` */

insert  into `default_lottery_grant_translations`(`id`,`entry_id`,`created_at`,`created_by_id`,`updated_at`,`updated_by_id`,`locale`) values (1,1,'2017-08-31 17:59:24',NULL,'2017-08-31 17:59:24',1,'zh-cn'),(2,2,'2017-09-15 11:30:06',NULL,'2017-09-15 11:30:06',1,'zh-cn');

/*Table structure for table `default_lottery_log` */

DROP TABLE IF EXISTS `default_lottery_log`;

CREATE TABLE `default_lottery_log` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `member_id` int(10) DEFAULT NULL,
  `lottery_id` int(10) DEFAULT NULL,
  `num` int(10) DEFAULT '1',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

/*Data for the table `default_lottery_log` */

insert  into `default_lottery_log`(`id`,`member_id`,`lottery_id`,`num`,`created_at`,`updated_at`) values (1,1,1,3,'2017-08-25 12:00:18','2017-08-25 17:17:42'),(2,1,1,2,'2017-08-30 16:18:29','2017-08-30 16:21:30'),(3,1,1,3,'2017-08-31 09:26:39','2017-08-31 19:04:21'),(4,1,1,2,'2017-09-01 09:15:16','2017-09-01 10:01:17'),(5,1,1,2,'2017-09-14 10:52:55','2017-09-14 15:30:13'),(6,1,1,3,'2017-09-15 12:08:07','2017-09-15 18:14:42'),(7,1,1,2,'2017-09-22 12:04:17','2017-09-22 12:04:41');

/*Table structure for table `default_lottery_lottery` */

DROP TABLE IF EXISTS `default_lottery_lottery`;

CREATE TABLE `default_lottery_lottery` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `sort_order` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `created_by_id` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by_id` int(11) DEFAULT NULL,
  `lottery_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lottery_start` datetime NOT NULL,
  `lottery_end` datetime NOT NULL,
  `lottery_times` int(11) NOT NULL DEFAULT '0',
  `lottery_is_ticket` tinyint(1) DEFAULT '1',
  `lottery_is_open` tinyint(1) DEFAULT '1',
  `lottery_description` text COLLATE utf8_unicode_ci,
  `lottery_rule` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `default_lottery_lottery` */

insert  into `default_lottery_lottery`(`id`,`sort_order`,`created_at`,`created_by_id`,`updated_at`,`updated_by_id`,`lottery_title`,`lottery_start`,`lottery_end`,`lottery_times`,`lottery_is_ticket`,`lottery_is_open`,`lottery_description`,`lottery_rule`) values (1,1,'2017-08-31 16:42:05',1,'2017-09-20 14:15:10',1,'抽奖','2017-09-13 12:00:00','2017-10-31 12:00:00',3,1,1,NULL,NULL);

/*Table structure for table `default_lottery_lottery_translations` */

DROP TABLE IF EXISTS `default_lottery_lottery_translations`;

CREATE TABLE `default_lottery_lottery_translations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `entry_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `created_by_id` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by_id` int(11) DEFAULT NULL,
  `locale` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `lottery_lottery_translations_locale_index` (`locale`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `default_lottery_lottery_translations` */

insert  into `default_lottery_lottery_translations`(`id`,`entry_id`,`created_at`,`created_by_id`,`updated_at`,`updated_by_id`,`locale`) values (1,1,'2017-08-31 16:42:05',NULL,'2017-08-31 16:42:05',1,'zh-cn');

/*Table structure for table `default_lottery_prize` */

DROP TABLE IF EXISTS `default_lottery_prize`;

CREATE TABLE `default_lottery_prize` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `sort_order` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `created_by_id` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by_id` int(11) DEFAULT NULL,
  `prize_grade` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prize_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prize_probability` double(11,2) NOT NULL,
  `prize_num` int(11) NOT NULL DEFAULT '1',
  `prize_lottery_id_id` int(11) DEFAULT NULL,
  `prize_winning_mobile` text COLLATE utf8_unicode_ci,
  `prize_description` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `default_lottery_prize` */

insert  into `default_lottery_prize`(`id`,`sort_order`,`created_at`,`created_by_id`,`updated_at`,`updated_by_id`,`prize_grade`,`prize_name`,`prize_probability`,`prize_num`,`prize_lottery_id_id`,`prize_winning_mobile`,`prize_description`) values (1,1,'2017-08-31 16:43:05',1,'2017-09-01 10:01:17',1,'特等奖','特等奖奖品',1.00,4,1,'a:1:{i:1;s:11:\"15666666666\";}',NULL),(2,2,'2017-08-31 16:50:54',1,'2017-08-31 17:40:15',1,'一等奖','奖品名称1',10.00,10,1,'a:0:{}',NULL),(3,3,'2017-08-31 16:51:41',1,'2017-09-22 12:04:19',NULL,'二等奖','奖品名称2',20.00,17,1,'a:0:{}',NULL),(4,4,'2017-08-31 16:52:27',1,'2017-09-15 18:14:42',1,'三等奖','奖品名称3',30.00,25,1,'a:0:{}',NULL);

/*Table structure for table `default_lottery_prize_translations` */

DROP TABLE IF EXISTS `default_lottery_prize_translations`;

CREATE TABLE `default_lottery_prize_translations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `entry_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `created_by_id` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by_id` int(11) DEFAULT NULL,
  `locale` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `lottery_prize_translations_locale_index` (`locale`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `default_lottery_prize_translations` */

insert  into `default_lottery_prize_translations`(`id`,`entry_id`,`created_at`,`created_by_id`,`updated_at`,`updated_by_id`,`locale`) values (1,1,'2017-08-31 16:43:05',NULL,'2017-08-31 16:43:05',1,'zh-cn'),(2,2,'2017-08-31 16:50:54',NULL,'2017-08-31 16:50:54',1,'zh-cn'),(3,3,'2017-08-31 16:51:41',NULL,'2017-08-31 16:51:41',1,'zh-cn'),(4,4,'2017-08-31 16:52:27',NULL,'2017-08-31 16:52:27',1,'zh-cn');

/*Table structure for table `default_lottery_ticket` */

DROP TABLE IF EXISTS `default_lottery_ticket`;

CREATE TABLE `default_lottery_ticket` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `sort_order` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `created_by_id` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by_id` int(11) DEFAULT NULL,
  `ticket_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ticket_valid_period` datetime NOT NULL,
  `ticket_is_use` tinyint(1) DEFAULT '0',
  `ticket_member_id_id` int(11) DEFAULT NULL,
  `ticket_mobile` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=59 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `default_lottery_ticket` */

insert  into `default_lottery_ticket`(`id`,`sort_order`,`created_at`,`created_by_id`,`updated_at`,`updated_by_id`,`ticket_name`,`ticket_valid_period`,`ticket_is_use`,`ticket_member_id_id`,`ticket_mobile`) values (1,1,'2017-08-31 18:00:06',1,'2017-09-15 12:13:27',1,'抽奖券','2017-09-30 12:00:00',1,1,'15002983802'),(2,2,'2017-08-31 18:00:06',1,'2017-09-15 18:14:42',1,'抽奖券','2017-09-30 12:00:00',1,1,'15002983802'),(3,3,'2017-08-31 18:00:06',1,'2017-09-22 12:04:17',NULL,'抽奖券','2017-09-30 12:00:00',1,1,'15002983802'),(4,4,'2017-08-31 18:00:06',1,'2017-09-22 12:04:41',NULL,'抽奖券','2017-09-30 12:00:00',1,1,'15002983802'),(5,5,'2017-08-31 18:00:06',1,'2017-09-14 15:30:13',NULL,'抽奖券','2017-09-30 12:00:00',0,1,'15002983802'),(6,6,'2017-08-31 18:00:06',1,NULL,NULL,'抽奖券','2017-09-30 12:00:00',0,2,'15002983803'),(7,7,'2017-08-31 18:00:06',1,NULL,NULL,'抽奖券','2017-09-30 12:00:00',0,2,'15002983803'),(8,8,'2017-08-31 18:00:06',1,NULL,NULL,'抽奖券','2017-09-30 12:00:00',0,2,'15002983803'),(9,9,'2017-08-31 18:00:06',1,NULL,NULL,'抽奖券','2017-09-30 12:00:00',0,2,'15002983803'),(10,10,'2017-08-31 18:00:06',1,NULL,NULL,'抽奖券','2017-09-30 12:00:00',0,2,'15002983803'),(11,11,'2017-08-31 18:00:06',1,NULL,NULL,'抽奖券','2017-09-30 12:00:00',0,3,'15002983804'),(12,12,'2017-08-31 18:00:06',1,NULL,NULL,'抽奖券','2017-09-30 12:00:00',0,3,'15002983804'),(13,13,'2017-08-31 18:00:06',1,NULL,NULL,'抽奖券','2017-09-30 12:00:00',0,3,'15002983804'),(14,14,'2017-08-31 18:00:06',1,NULL,NULL,'抽奖券','2017-09-30 12:00:00',0,3,'15002983804'),(15,15,'2017-08-31 18:00:06',1,NULL,NULL,'抽奖券','2017-09-30 12:00:00',0,3,'15002983804'),(16,16,'2017-08-31 18:00:06',1,NULL,NULL,'抽奖券','2017-09-30 12:00:00',0,4,'15002983805'),(17,17,'2017-08-31 18:00:06',1,NULL,NULL,'抽奖券','2017-09-30 12:00:00',0,4,'15002983805'),(18,18,'2017-08-31 18:00:06',1,NULL,NULL,'抽奖券','2017-09-30 12:00:00',0,4,'15002983805'),(19,19,'2017-08-31 18:00:06',1,NULL,NULL,'抽奖券','2017-09-30 12:00:00',0,4,'15002983805'),(20,20,'2017-08-31 18:00:06',1,NULL,NULL,'抽奖券','2017-09-30 12:00:00',0,4,'15002983805'),(21,21,'2017-08-31 18:00:06',1,NULL,NULL,'抽奖券','2017-09-30 12:00:00',0,5,'15002983806'),(22,22,'2017-08-31 18:00:06',1,NULL,NULL,'抽奖券','2017-09-30 12:00:00',0,5,'15002983806'),(23,23,'2017-08-31 18:00:06',1,NULL,NULL,'抽奖券','2017-09-30 12:00:00',0,5,'15002983806'),(24,24,'2017-08-31 18:00:06',1,NULL,NULL,'抽奖券','2017-09-30 12:00:00',0,5,'15002983806'),(25,25,'2017-08-31 18:00:06',1,NULL,NULL,'抽奖券','2017-09-30 12:00:00',0,5,'15002983806'),(26,26,'2017-08-31 18:00:06',1,NULL,NULL,'抽奖券','2017-09-30 12:00:00',0,6,'15002983807'),(27,27,'2017-08-31 18:00:06',1,NULL,NULL,'抽奖券','2017-09-30 12:00:00',0,6,'15002983807'),(28,28,'2017-08-31 18:00:06',1,NULL,NULL,'抽奖券','2017-09-30 12:00:00',0,6,'15002983807'),(29,29,'2017-08-31 18:00:06',1,NULL,NULL,'抽奖券','2017-09-30 12:00:00',0,6,'15002983807'),(30,30,'2017-08-31 18:00:06',1,NULL,NULL,'抽奖券','2017-09-30 12:00:00',0,6,'15002983807'),(31,31,'2017-08-31 18:00:06',1,NULL,NULL,'抽奖券','2017-09-30 12:00:00',0,7,'15002983808'),(32,32,'2017-08-31 18:00:06',1,NULL,NULL,'抽奖券','2017-09-30 12:00:00',0,7,'15002983808'),(33,33,'2017-08-31 18:00:06',1,NULL,NULL,'抽奖券','2017-09-30 12:00:00',0,7,'15002983808'),(34,34,'2017-08-31 18:00:06',1,NULL,NULL,'抽奖券','2017-09-30 12:00:00',0,7,'15002983808'),(35,35,'2017-08-31 18:00:06',1,NULL,NULL,'抽奖券','2017-09-30 12:00:00',0,7,'15002983808'),(36,36,'2017-08-31 18:00:06',1,NULL,NULL,'抽奖券','2017-09-30 12:00:00',0,8,'15002983809'),(37,37,'2017-08-31 18:00:06',1,NULL,NULL,'抽奖券','2017-09-30 12:00:00',0,8,'15002983809'),(38,38,'2017-08-31 18:00:06',1,NULL,NULL,'抽奖券','2017-09-30 12:00:00',0,8,'15002983809'),(39,39,'2017-08-31 18:00:06',1,NULL,NULL,'抽奖券','2017-09-30 12:00:00',0,8,'15002983809'),(40,40,'2017-08-31 18:00:06',1,NULL,NULL,'抽奖券','2017-09-30 12:00:00',0,8,'15002983809'),(41,41,'2017-08-31 18:00:07',1,NULL,NULL,'抽奖券','2017-09-30 12:00:00',0,9,'15002983866'),(42,42,'2017-08-31 18:00:07',1,NULL,NULL,'抽奖券','2017-09-30 12:00:00',0,9,'15002983866'),(43,43,'2017-08-31 18:00:07',1,NULL,NULL,'抽奖券','2017-09-30 12:00:00',0,9,'15002983866'),(44,44,'2017-08-31 18:00:07',1,NULL,NULL,'抽奖券','2017-09-30 12:00:00',0,9,'15002983866'),(45,45,'2017-08-31 18:00:07',1,NULL,NULL,'抽奖券','2017-09-30 12:00:00',0,9,'15002983866'),(46,46,'2017-08-31 18:00:07',1,NULL,NULL,'抽奖券','2017-09-30 12:00:00',0,10,'13621230701'),(47,47,'2017-08-31 18:00:07',1,NULL,NULL,'抽奖券','2017-09-30 12:00:00',0,10,'13621230701'),(48,48,'2017-08-31 18:00:07',1,NULL,NULL,'抽奖券','2017-09-30 12:00:00',0,10,'13621230701'),(49,49,'2017-08-31 18:00:07',1,NULL,NULL,'抽奖券','2017-09-30 12:00:00',0,10,'13621230701'),(50,50,'2017-08-31 18:00:07',1,NULL,NULL,'抽奖券','2017-09-30 12:00:00',0,10,'13621230701'),(51,NULL,'0000-00-00 00:00:00',NULL,NULL,NULL,'','0000-00-00 00:00:00',0,NULL,NULL),(52,52,'2017-09-15 11:30:05',1,'2017-09-15 12:08:07',1,'抽奖券','2017-10-31 12:00:00',0,1,'15002983802'),(53,53,'2017-09-15 11:30:05',1,NULL,NULL,'抽奖券','2017-10-31 12:00:00',0,2,'15002983803'),(54,54,'2017-09-15 11:30:05',1,NULL,NULL,'抽奖券','2017-10-31 12:00:00',0,3,'15002983804'),(55,55,'2017-09-15 11:30:05',1,NULL,NULL,'抽奖券','2017-10-31 12:00:00',0,4,'15002983805'),(56,56,'2017-09-15 11:30:05',1,NULL,NULL,'抽奖券','2017-10-31 12:00:00',0,5,'15002983806'),(57,57,'2017-09-15 11:30:05',1,NULL,NULL,'抽奖券','2017-10-31 12:00:00',0,6,'15002983807'),(58,58,'2017-09-15 11:30:05',1,NULL,NULL,'抽奖券','2017-10-31 12:00:00',0,8,'15249282327');

/*Table structure for table `default_lottery_ticket_translations` */

DROP TABLE IF EXISTS `default_lottery_ticket_translations`;

CREATE TABLE `default_lottery_ticket_translations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `entry_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `created_by_id` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by_id` int(11) DEFAULT NULL,
  `locale` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `lottery_ticket_translations_locale_index` (`locale`)
) ENGINE=MyISAM AUTO_INCREMENT=58 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `default_lottery_ticket_translations` */

insert  into `default_lottery_ticket_translations`(`id`,`entry_id`,`created_at`,`created_by_id`,`updated_at`,`updated_by_id`,`locale`) values (1,1,'2017-08-31 18:00:06',NULL,'2017-08-31 18:00:06',1,'zh-cn'),(2,2,'2017-08-31 18:00:06',NULL,'2017-08-31 18:00:06',1,'zh-cn'),(3,3,'2017-08-31 18:00:06',NULL,'2017-08-31 18:00:06',1,'zh-cn'),(4,4,'2017-08-31 18:00:06',NULL,'2017-08-31 18:00:06',1,'zh-cn'),(5,5,'2017-08-31 18:00:06',NULL,'2017-08-31 18:00:06',1,'zh-cn'),(6,6,'2017-08-31 18:00:06',NULL,'2017-08-31 18:00:06',1,'zh-cn'),(7,7,'2017-08-31 18:00:06',NULL,'2017-08-31 18:00:06',1,'zh-cn'),(8,8,'2017-08-31 18:00:06',NULL,'2017-08-31 18:00:06',1,'zh-cn'),(9,9,'2017-08-31 18:00:06',NULL,'2017-08-31 18:00:06',1,'zh-cn'),(10,10,'2017-08-31 18:00:06',NULL,'2017-08-31 18:00:06',1,'zh-cn'),(11,11,'2017-08-31 18:00:06',NULL,'2017-08-31 18:00:06',1,'zh-cn'),(12,12,'2017-08-31 18:00:06',NULL,'2017-08-31 18:00:06',1,'zh-cn'),(13,13,'2017-08-31 18:00:06',NULL,'2017-08-31 18:00:06',1,'zh-cn'),(14,14,'2017-08-31 18:00:06',NULL,'2017-08-31 18:00:06',1,'zh-cn'),(15,15,'2017-08-31 18:00:06',NULL,'2017-08-31 18:00:06',1,'zh-cn'),(16,16,'2017-08-31 18:00:06',NULL,'2017-08-31 18:00:06',1,'zh-cn'),(17,17,'2017-08-31 18:00:06',NULL,'2017-08-31 18:00:06',1,'zh-cn'),(18,18,'2017-08-31 18:00:06',NULL,'2017-08-31 18:00:06',1,'zh-cn'),(19,19,'2017-08-31 18:00:06',NULL,'2017-08-31 18:00:06',1,'zh-cn'),(20,20,'2017-08-31 18:00:06',NULL,'2017-08-31 18:00:06',1,'zh-cn'),(21,21,'2017-08-31 18:00:06',NULL,'2017-08-31 18:00:06',1,'zh-cn'),(22,22,'2017-08-31 18:00:06',NULL,'2017-08-31 18:00:06',1,'zh-cn'),(23,23,'2017-08-31 18:00:06',NULL,'2017-08-31 18:00:06',1,'zh-cn'),(24,24,'2017-08-31 18:00:06',NULL,'2017-08-31 18:00:06',1,'zh-cn'),(25,25,'2017-08-31 18:00:06',NULL,'2017-08-31 18:00:06',1,'zh-cn'),(26,26,'2017-08-31 18:00:06',NULL,'2017-08-31 18:00:06',1,'zh-cn'),(27,27,'2017-08-31 18:00:06',NULL,'2017-08-31 18:00:06',1,'zh-cn'),(28,28,'2017-08-31 18:00:06',NULL,'2017-08-31 18:00:06',1,'zh-cn'),(29,29,'2017-08-31 18:00:06',NULL,'2017-08-31 18:00:06',1,'zh-cn'),(30,30,'2017-08-31 18:00:06',NULL,'2017-08-31 18:00:06',1,'zh-cn'),(31,31,'2017-08-31 18:00:06',NULL,'2017-08-31 18:00:06',1,'zh-cn'),(32,32,'2017-08-31 18:00:06',NULL,'2017-08-31 18:00:06',1,'zh-cn'),(33,33,'2017-08-31 18:00:06',NULL,'2017-08-31 18:00:06',1,'zh-cn'),(34,34,'2017-08-31 18:00:06',NULL,'2017-08-31 18:00:06',1,'zh-cn'),(35,35,'2017-08-31 18:00:06',NULL,'2017-08-31 18:00:06',1,'zh-cn'),(36,36,'2017-08-31 18:00:06',NULL,'2017-08-31 18:00:06',1,'zh-cn'),(37,37,'2017-08-31 18:00:06',NULL,'2017-08-31 18:00:06',1,'zh-cn'),(38,38,'2017-08-31 18:00:06',NULL,'2017-08-31 18:00:06',1,'zh-cn'),(39,39,'2017-08-31 18:00:06',NULL,'2017-08-31 18:00:06',1,'zh-cn'),(40,40,'2017-08-31 18:00:06',NULL,'2017-08-31 18:00:06',1,'zh-cn'),(41,41,'2017-08-31 18:00:07',NULL,'2017-08-31 18:00:07',1,'zh-cn'),(42,42,'2017-08-31 18:00:07',NULL,'2017-08-31 18:00:07',1,'zh-cn'),(43,43,'2017-08-31 18:00:07',NULL,'2017-08-31 18:00:07',1,'zh-cn'),(44,44,'2017-08-31 18:00:07',NULL,'2017-08-31 18:00:07',1,'zh-cn'),(45,45,'2017-08-31 18:00:07',NULL,'2017-08-31 18:00:07',1,'zh-cn'),(46,46,'2017-08-31 18:00:07',NULL,'2017-08-31 18:00:07',1,'zh-cn'),(47,47,'2017-08-31 18:00:07',NULL,'2017-08-31 18:00:07',1,'zh-cn'),(48,48,'2017-08-31 18:00:07',NULL,'2017-08-31 18:00:07',1,'zh-cn'),(49,49,'2017-08-31 18:00:07',NULL,'2017-08-31 18:00:07',1,'zh-cn'),(50,50,'2017-08-31 18:00:07',NULL,'2017-08-31 18:00:07',1,'zh-cn'),(51,52,'2017-09-15 11:30:05',NULL,'2017-09-15 11:30:05',1,'zh-cn'),(52,53,'2017-09-15 11:30:05',NULL,'2017-09-15 11:30:05',1,'zh-cn'),(53,54,'2017-09-15 11:30:05',NULL,'2017-09-15 11:30:05',1,'zh-cn'),(54,55,'2017-09-15 11:30:05',NULL,'2017-09-15 11:30:05',1,'zh-cn'),(55,56,'2017-09-15 11:30:05',NULL,'2017-09-15 11:30:05',1,'zh-cn'),(56,57,'2017-09-15 11:30:05',NULL,'2017-09-15 11:30:05',1,'zh-cn'),(57,58,'2017-09-15 11:30:05',NULL,'2017-09-15 11:30:05',1,'zh-cn');

/*Table structure for table `default_lottery_winning` */

DROP TABLE IF EXISTS `default_lottery_winning`;

CREATE TABLE `default_lottery_winning` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `sort_order` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `created_by_id` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by_id` int(11) DEFAULT NULL,
  `winning_lottery_id_id` int(11) DEFAULT NULL,
  `winning_prize_id_id` int(11) DEFAULT NULL,
  `winning_member_id_id` int(11) DEFAULT NULL,
  `winning_mobile` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `winning_member_real_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `winning_prize_grade` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `winning_prize_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `winning_status` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `default_lottery_winning` */

insert  into `default_lottery_winning`(`id`,`sort_order`,`created_at`,`created_by_id`,`updated_at`,`updated_by_id`,`winning_lottery_id_id`,`winning_prize_id_id`,`winning_member_id_id`,`winning_mobile`,`winning_member_real_name`,`winning_prize_grade`,`winning_prize_name`,`winning_status`) values (1,1,'2017-08-31 18:02:55',1,NULL,NULL,1,1,1,'15002983802','樊楠','特等奖','特等奖奖品',0),(2,2,'2017-08-31 19:03:51',1,NULL,NULL,1,1,1,'15002983802','樊楠','特等奖','特等奖奖品',0),(3,3,'2017-09-01 09:15:16',1,NULL,NULL,1,1,1,'15002983802','樊楠','特等奖','特等奖奖品',0),(4,4,'2017-09-01 09:18:45',1,NULL,NULL,1,1,1,'15002983802','樊楠','特等奖','特等奖奖品',0),(5,5,'2017-09-01 09:32:08',1,NULL,NULL,1,1,1,'15002983802','樊楠','特等奖','特等奖奖品',0),(6,6,'2017-09-01 09:38:22',NULL,NULL,NULL,1,3,1,'15002983802','樊楠','二等奖','奖品名称2',0),(7,7,'2017-09-01 10:01:17',1,NULL,NULL,1,1,1,'15002983802','樊楠','特等奖','特等奖奖品',0),(8,8,'2017-09-14 11:09:26',NULL,NULL,NULL,1,4,1,'15002983802','FanNan','三等奖','奖品名称3',0),(9,9,'2017-09-14 15:16:09',NULL,NULL,NULL,1,4,1,'15002983802','FanNan','三等奖','奖品名称3',0),(10,10,'2017-09-14 15:22:06',NULL,NULL,NULL,1,4,1,'15002983802','FanNan','三等奖','奖品名称3',0),(11,11,'2017-09-14 15:29:10',NULL,NULL,NULL,1,3,1,'15002983802','FanNan','二等奖','奖品名称2',0),(12,12,'2017-09-15 12:08:12',1,NULL,NULL,1,4,1,'15002983802','FanNan','三等奖','奖品名称3',0),(13,13,'2017-09-15 18:14:43',1,NULL,NULL,1,4,1,'15002983802','FanNan','三等奖','奖品名称3',0),(14,14,'2017-09-22 12:04:19',NULL,NULL,NULL,1,3,1,'15002983802',NULL,'二等奖','奖品名称2',0);

/*Table structure for table `default_lottery_winning_translations` */

DROP TABLE IF EXISTS `default_lottery_winning_translations`;

CREATE TABLE `default_lottery_winning_translations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `entry_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `created_by_id` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by_id` int(11) DEFAULT NULL,
  `locale` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `lottery_winning_translations_locale_index` (`locale`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `default_lottery_winning_translations` */

insert  into `default_lottery_winning_translations`(`id`,`entry_id`,`created_at`,`created_by_id`,`updated_at`,`updated_by_id`,`locale`) values (1,1,'2017-08-31 18:02:55',NULL,'2017-08-31 18:02:55',1,'zh-cn'),(2,2,'2017-08-31 19:03:51',NULL,'2017-08-31 19:03:51',1,'zh-cn'),(3,3,'2017-09-01 09:15:16',NULL,'2017-09-01 09:15:16',1,'zh-cn'),(4,4,'2017-09-01 09:18:45',NULL,'2017-09-01 09:18:45',1,'zh-cn'),(5,5,'2017-09-01 09:32:08',NULL,'2017-09-01 09:32:08',1,'zh-cn'),(6,6,'2017-09-01 09:38:22',NULL,'2017-09-01 09:38:22',NULL,'zh-cn'),(7,7,'2017-09-01 10:01:17',NULL,'2017-09-01 10:01:17',1,'zh-cn'),(8,8,'2017-09-14 11:09:26',NULL,'2017-09-14 11:09:26',NULL,'zh-cn'),(9,9,'2017-09-14 15:16:09',NULL,'2017-09-14 15:16:09',NULL,'zh-cn'),(10,10,'2017-09-14 15:22:06',NULL,'2017-09-14 15:22:06',NULL,'zh-cn'),(11,11,'2017-09-14 15:29:10',NULL,'2017-09-14 15:29:10',NULL,'zh-cn'),(12,12,'2017-09-15 12:08:12',NULL,'2017-09-15 12:08:12',1,'zh-cn'),(13,13,'2017-09-15 18:14:43',NULL,'2017-09-15 18:14:43',1,'zh-cn'),(14,14,'2017-09-22 12:04:20',NULL,'2017-09-22 12:04:20',NULL,'zh-cn');

/*Table structure for table `default_members_gold` */

DROP TABLE IF EXISTS `default_members_gold`;

CREATE TABLE `default_members_gold` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `sort_order` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `created_by_id` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by_id` int(11) DEFAULT NULL,
  `gold_num` int(11) NOT NULL DEFAULT '0',
  `gold_summary` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gold_mobile` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `gold_member_id_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `default_members_gold` */

/*Table structure for table `default_members_gold_translations` */

DROP TABLE IF EXISTS `default_members_gold_translations`;

CREATE TABLE `default_members_gold_translations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `entry_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `created_by_id` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by_id` int(11) DEFAULT NULL,
  `locale` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `members_gold_translations_locale_index` (`locale`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `default_members_gold_translations` */

/*Table structure for table `default_members_integral` */

DROP TABLE IF EXISTS `default_members_integral`;

CREATE TABLE `default_members_integral` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `sort_order` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `created_by_id` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by_id` int(11) DEFAULT NULL,
  `integral_num` int(11) NOT NULL DEFAULT '0',
  `integral_summary` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `integral_mobile` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `integral_member_id_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `default_members_integral` */

/*Table structure for table `default_members_integral_translations` */

DROP TABLE IF EXISTS `default_members_integral_translations`;

CREATE TABLE `default_members_integral_translations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `entry_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `created_by_id` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by_id` int(11) DEFAULT NULL,
  `locale` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `members_integral_translations_locale_index` (`locale`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `default_members_integral_translations` */

/*Table structure for table `default_members_loan` */

DROP TABLE IF EXISTS `default_members_loan`;

CREATE TABLE `default_members_loan` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `sort_order` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `created_by_id` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by_id` int(11) DEFAULT NULL,
  `loan_name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `loan_id_card` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `loan_amount` double(11,2) NOT NULL,
  `loan_order_sn` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `loan_status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `loan_date` datetime DEFAULT NULL,
  `loan_repayment_date` int(11) DEFAULT NULL,
  `loan_term_date` int(11) DEFAULT NULL,
  `loan_bz` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `loan_mobile` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `loan_member_id_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `default_members_loan` */

/*Table structure for table `default_members_loan_translations` */

DROP TABLE IF EXISTS `default_members_loan_translations`;

CREATE TABLE `default_members_loan_translations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `entry_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `created_by_id` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by_id` int(11) DEFAULT NULL,
  `locale` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `members_loan_translations_locale_index` (`locale`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `default_members_loan_translations` */

/*Table structure for table `default_members_members` */

DROP TABLE IF EXISTS `default_members_members`;

CREATE TABLE `default_members_members` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `sort_order` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `created_by_id` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by_id` int(11) DEFAULT NULL,
  `mobile` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(64) COLLATE utf8_unicode_ci NOT NULL DEFAULT '$2y$10$8C/nkq7CqXPiFsZ1kescaugP5siF.UjrYQcUuyS1p593etHY5Lfmm',
  `openid` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `invitation_code` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `nickname` varchar(24) COLLATE utf8_unicode_ci DEFAULT NULL,
  `avatar_id` int(11) DEFAULT NULL,
  `grade` varchar(255) COLLATE utf8_unicode_ci DEFAULT '1',
  `verified_status` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `real_name` varchar(12) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_card` varchar(24) COLLATE utf8_unicode_ci DEFAULT NULL,
  `card_positive_pic_id` int(11) DEFAULT NULL,
  `card_negative_pic_id` int(11) DEFAULT NULL,
  `card_pic_id` int(11) DEFAULT NULL,
  `results` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `integral` int(11) DEFAULT '0',
  `gold` int(11) DEFAULT '0',
  `parent_id_id` int(11) DEFAULT NULL,
  `grand_id_id` int(11) DEFAULT NULL,
  `great_grand_id_id` int(11) DEFAULT NULL,
  `qrcode` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `38e5347a4fa351f94846c94ac827e0b5` (`mobile`),
  UNIQUE KEY `586d4329e25bfb86ebb26192c4039327` (`invitation_code`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `default_members_members` */

insert  into `default_members_members`(`id`,`sort_order`,`created_at`,`created_by_id`,`updated_at`,`updated_by_id`,`mobile`,`password`,`openid`,`invitation_code`,`nickname`,`avatar_id`,`grade`,`verified_status`,`real_name`,`id_card`,`card_positive_pic_id`,`card_negative_pic_id`,`card_pic_id`,`results`,`integral`,`gold`,`parent_id_id`,`grand_id_id`,`great_grand_id_id`,`qrcode`) values (1,1,'2017-09-20 13:59:45',1,'2017-09-21 17:26:50',NULL,'15002983802','$2y$10$8C/nkq7CqXPiFsZ1kescaugP5siF.UjrYQcUuyS1p593etHY5Lfmm',NULL,'12345678','fannan',57,'1','1',NULL,NULL,NULL,NULL,NULL,NULL,0,0,NULL,NULL,NULL,'qrcodes/fb0ada8c00433880430709108ae1afab.png');

/*Table structure for table `default_members_message` */

DROP TABLE IF EXISTS `default_members_message`;

CREATE TABLE `default_members_message` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `sort_order` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `created_by_id` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by_id` int(11) DEFAULT NULL,
  `message_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `message_content` text COLLATE utf8_unicode_ci NOT NULL,
  `message_member_id_id` int(11) DEFAULT NULL,
  `message_mobile` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `default_members_message` */

/*Table structure for table `default_members_message_translations` */

DROP TABLE IF EXISTS `default_members_message_translations`;

CREATE TABLE `default_members_message_translations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `entry_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `created_by_id` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by_id` int(11) DEFAULT NULL,
  `locale` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `members_message_translations_locale_index` (`locale`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `default_members_message_translations` */

/*Table structure for table `default_members_repayment` */

DROP TABLE IF EXISTS `default_members_repayment`;

CREATE TABLE `default_members_repayment` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `sort_order` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `created_by_id` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by_id` int(11) DEFAULT NULL,
  `repayment_amount` double(11,2) NOT NULL,
  `repayment_date` datetime NOT NULL,
  `repayment_status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `repayment_loan_id` int(11) NOT NULL,
  `repayment_member_id_id` int(11) DEFAULT NULL,
  `repayment_sn` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `repayment_loan_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `repayment_loan_card` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `repayment_mobile` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `default_members_repayment` */

/*Table structure for table `default_members_repayment_translations` */

DROP TABLE IF EXISTS `default_members_repayment_translations`;

CREATE TABLE `default_members_repayment_translations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `entry_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `created_by_id` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by_id` int(11) DEFAULT NULL,
  `locale` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `members_repayment_translations_locale_index` (`locale`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `default_members_repayment_translations` */

/*Table structure for table `default_members_withdraw` */

DROP TABLE IF EXISTS `default_members_withdraw`;

CREATE TABLE `default_members_withdraw` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `sort_order` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `created_by_id` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by_id` int(11) DEFAULT NULL,
  `withdraw_amount` double(11,2) NOT NULL,
  `withdraw_bank` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `withdraw_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `withdraw_card` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `withdraw_bank_card` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `withdraw_mobile` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `withdraw_member_id_id` int(11) DEFAULT NULL,
  `withdraw_status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `default_members_withdraw` */

/*Table structure for table `default_members_withdraw_translations` */

DROP TABLE IF EXISTS `default_members_withdraw_translations`;

CREATE TABLE `default_members_withdraw_translations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `entry_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `created_by_id` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by_id` int(11) DEFAULT NULL,
  `locale` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `members_withdraw_translations_locale_index` (`locale`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `default_members_withdraw_translations` */

/*Table structure for table `default_migrations` */

DROP TABLE IF EXISTS `default_migrations`;

CREATE TABLE `default_migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=459 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `default_migrations` */

insert  into `default_migrations`(`id`,`migration`,`batch`) values (1,'2015_03_15_171506_create_jobs_table',1),(2,'2015_03_15_171507_create_failed_jobs_table',1),(3,'2015_03_15_171508_create_sessions_table',1),(4,'2015_03_15_171620_create_streams_tables',1),(5,'2015_03_15_171646_create_fields_tables',1),(6,'2015_03_15_171720_create_assignments_tables',1),(7,'2015_03_15_171838_create_modules_table',1),(8,'2015_03_15_171926_create_extensions_table',1),(9,'2016_08_30_185635_create_notifications_table',1),(10,'2016_09_02_164448_add_searchable_column_to_streams',1),(11,'2016_11_11_154228_append_id_to_user_meta_columns',1),(43,'2015_03_25_091755_anomaly.module.configuration__create_configuration_fields',11),(44,'2015_03_25_091845_anomaly.module.configuration__create_configuration_stream',11),(45,'2015_11_01_164326_anomaly.module.dashboard__create_dashboard_fields',12),(46,'2015_11_01_170645_anomaly.module.dashboard__create_dashboards_stream',12),(47,'2015_11_01_170650_anomaly.module.dashboard__create_widgets_stream',12),(48,'2015_03_05_021725_anomaly.module.files__create_files_fields',13),(49,'2015_03_05_022227_anomaly.module.files__create_disks_stream',13),(50,'2015_06_09_031343_anomaly.module.files__create_folders_stream',13),(51,'2015_06_09_031351_anomaly.module.files__create_files_stream',13),(52,'2016_08_29_151020_anomaly.module.files__remove_required_from_entry_assignment',13),(53,'2016_09_02_175659_anomaly.module.files__make_files_searchable',13),(55,'2015_05_21_061832_anomaly.module.navigation__create_navigation_fields',14),(56,'2015_05_21_062115_anomaly.module.navigation__create_menus_stream',14),(57,'2015_05_21_064952_anomaly.module.navigation__create_links_stream',14),(58,'2015_03_20_171947_anomaly.module.pages__create_pages_fields',15),(59,'2015_03_20_171955_anomaly.module.pages__create_pages_stream',15),(60,'2015_04_22_150211_anomaly.module.pages__create_types_stream',15),(92,'2015_03_20_184103_anomaly.module.posts__create_posts_fields',23),(93,'2015_03_20_184141_anomaly.module.posts__create_categories_stream',23),(94,'2015_03_20_184148_anomaly.module.posts__create_posts_stream',23),(95,'2015_05_16_050818_anomaly.module.posts__create_types_stream',23),(67,'2015_02_27_101227_anomaly.module.preferences__create_preferences_fields',17),(68,'2015_02_27_101300_anomaly.module.preferences__create_preferences_streams',17),(69,'2016_11_16_151654_anomaly.module.preferences__update_user_related_config',17),(70,'2015_03_21_153325_anomaly.module.redirects__create_redirects_fields',18),(71,'2015_03_21_153326_anomaly.module.redirects__create_redirects_stream',18),(41,'2015_03_15_171404_create_applications_table',10),(42,'2015_03_15_171506_create_applications_domains_table',10),(54,'2016_10_05_221741_anomaly.module.files__make_disks_sortable',13),(61,'2016_09_02_175135_anomaly.module.pages__make_pages_searchable',15),(96,'2016_09_02_175531_anomaly.module.posts__make_posts_searchable',23),(72,'2015_02_27_101410_anomaly.module.settings__create_settings_fields',19),(73,'2015_02_27_101510_anomaly.module.settings__create_settings_stream',19),(74,'2015_02_27_101816_anomaly.module.users__create_users_fields',20),(75,'2015_02_27_101851_anomaly.module.users__create_users_stream',20),(76,'2015_02_27_101940_anomaly.module.users__create_roles_stream',20),(77,'2016_09_02_175848_anomaly.module.users__make_users_searchable',20),(78,'2015_06_02_170526_anomaly.extension.page_link_type__create_page_link_type_fields',21),(79,'2015_06_02_170542_anomaly.extension.page_link_type__create_page_links_stream',21),(80,'2015_05_24_201105_anomaly.extension.url_link_type__create_url_link_type_fields',22),(81,'2015_05_24_201134_anomaly.extension.url_link_type__create_links_stream',22),(99,'2017_07_03_061102_fannan.module.test__create_test_fields',24),(100,'2017_07_03_061535_fannan.module.test__create_test_stream',24),(451,'2017_07_10_015653_fannan.module.members__create_members_fields',35),(452,'2017_07_10_032739_fannan.module.members__create_members_stream',35),(453,'2017_07_24_023728_fannan.module.members__create_integral_stream',35),(454,'2017_07_24_065556_fannan.module.members__create_gold_stream',35),(455,'2017_07_25_081234_fannan.module.members__create_loan_stream',35),(456,'2017_07_26_033448_fannan.module.members__create_repayment_stream',35),(457,'2017_07_26_080916_fannan.module.members__create_withdraw_stream',35),(429,'2017_08_14_112426_fannan.module.lottery__create_lottery_fields',34),(430,'2017_08_14_143749_fannan.module.lottery__create_lottery_stream',34),(431,'2017_08_14_161327_fannan.module.lottery__create_prize_stream',34),(432,'2017_08_15_105314_fannan.module.lottery__create_winning_stream',34),(360,'2017_08_15_164410_fannan.module.envelopes__create_envelopes_fields',30),(361,'2017_08_15_175041_fannan.module.envelopes__create_envelopes_stream',30),(362,'2017_08_16_101318_fannan.module.envelopes__create_log_stream',30),(458,'2017_07_27_012006_fannan.module.members__create_message_stream',35),(357,'2017_08_18_183352_fannan.module.advertising__create_advertising_fields',29),(358,'2017_08_18_183629_fannan.module.advertising__create_advertising_stream',29),(359,'2017_08_18_184443_fannan.module.advertising__create_slot_stream',29),(386,'2017_08_23_094213_fannan.module.transaction__create_transaction_stream',33),(385,'2017_08_23_091956_fannan.module.transaction__create_transaction_fields',33),(433,'2017_08_15_142609_fannan.module.lottery__create_ticket_stream',34),(434,'2017_08_29_164314_fannan.module.lottery__create_grant_stream',34);

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

/*Table structure for table `default_oauth_access_tokens` */

DROP TABLE IF EXISTS `default_oauth_access_tokens`;

CREATE TABLE `default_oauth_access_tokens` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `member_id` int(11) DEFAULT NULL,
  `client_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `access_token` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `default_oauth_access_tokens` */

insert  into `default_oauth_access_tokens`(`id`,`member_id`,`client_id`,`created_at`,`updated_at`,`access_token`) values (1,1,1,'2017-09-13 14:44:26','2017-09-13 14:44:26','$2y$10$IxkUvoC1P6Znz3Wzh6QEOOieOpdXrjPqf2U86ebZOYre7p/IafFPy');

/*Table structure for table `default_oauth_clients` */

DROP TABLE IF EXISTS `default_oauth_clients`;

CREATE TABLE `default_oauth_clients` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `member_id` int(11) DEFAULT NULL,
  `imsi` varchar(200) DEFAULT NULL,
  `secret` varchar(128) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `default_oauth_clients` */

insert  into `default_oauth_clients`(`id`,`member_id`,`imsi`,`secret`,`created_at`,`updated_at`) values (1,1,'123456789','$2y$10$38A6vfOo9uPvRgA4a.TE1O1JoZMleJZRfyK8cMF0N79YP0M/33tM2','2017-09-13 14:43:36','2017-09-13 14:43:36');

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

insert  into `default_posts_atlas_posts`(`id`,`sort_order`,`created_at`,`created_by_id`,`updated_at`,`updated_by_id`,`deleted_at`,`image_id`,`content`) values (1,1,'2017-07-03 03:43:20',1,NULL,NULL,'2017-08-07 06:33:19',1,'<p>fdsfds</p>');

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

insert  into `default_posts_categories`(`id`,`sort_order`,`created_at`,`created_by_id`,`updated_at`,`updated_by_id`,`deleted_at`,`slug`,`parent_id`) values (1,1,'2017-07-03 02:53:28',1,'2017-07-03 03:02:37',1,'2017-08-11 16:04:14','test',3),(2,1,'2017-07-03 02:53:52',1,'2017-07-03 02:54:12',1,'2017-07-03 03:11:20','sss',1),(3,1,'2017-07-03 03:01:53',1,'2017-08-11 16:04:59',1,NULL,'news',NULL);

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

insert  into `default_posts_categories_translations`(`id`,`entry_id`,`created_at`,`created_by_id`,`updated_at`,`updated_by_id`,`locale`,`name`,`description`) values (1,1,'2017-07-03 02:53:28',NULL,'2017-07-03 02:53:28',1,'zh-cn','test',NULL),(2,2,'2017-07-03 02:53:52',NULL,'2017-07-03 02:53:52',1,'zh-cn','sss',NULL),(3,3,'2017-07-03 03:01:53',NULL,'2017-08-11 16:04:59',1,'zh-cn','资讯',NULL);

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
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `default_posts_default_posts` */

insert  into `default_posts_default_posts`(`id`,`sort_order`,`created_at`,`created_by_id`,`updated_at`,`updated_by_id`,`deleted_at`,`content`,`image_id`) values (1,1,'2017-06-30 17:01:41',NULL,NULL,NULL,NULL,NULL,NULL),(2,2,'2017-07-03 03:24:16',1,'2017-08-07 02:38:02',1,NULL,'<p>这里是关于我们。。。。。</p>',1),(3,3,'2017-07-26 01:49:09',1,'2017-08-07 06:36:04',1,NULL,'<p>贷款须知</p>',NULL),(4,4,'2017-08-11 16:07:04',1,NULL,NULL,NULL,'<p>这是资讯内容</p>',1),(5,5,'2017-08-11 16:41:21',1,'2017-08-14 10:25:07',1,NULL,'<p>fdsfdf</p>',2),(6,6,'2017-09-01 10:09:34',1,'2017-09-13 10:52:54',1,NULL,'<p>1、2016年1月11日-2016年1月24日期间，每位客户限抽1次。</p>\r\n<p>2、实物奖品抽中后，我们将为您免费配送至所选体验馆；到货后请凭中奖手机号（带手机）到店自提。在接到领奖通知次日起，7天内未领取的，直接取消领奖资格，实物奖品不退换、不补件。</p>\r\n<p>3、红包奖品发放：抽中红包后，红包序列号将以短信形式发送至手机，请注意查收。</p>\r\n<p>4、红包使用方法：凭序列号短信到对应体验馆在体验馆人员帮助下下单使用。</p>\r\n<p>5、红包使用条件：红包不能抵扣快递、物流或服务费；体验馆特卖、团购、拍卖、秒杀产品及第三方配送产品除外。每个订单只能使用一个红包，本红包不能与其他红包/预约券/抵扣券/优惠码同时使用。</p>\r\n<p>6、红包使用时间：使用本抽奖红包的订单不再享受活动满减优惠。</p>\r\n<p>7、红包注意事项：此红包仅限抽奖获得，不找零、不折现，限一次性使用完；如使用后发生退款，红包金额不作为退款款项。</p>\r\n<p>8、其他：抽中“精美到店礼品”的客户，直接到所选体验馆领取即可，数量有限，先到先得。</p>',NULL),(7,7,'2017-09-13 09:45:29',1,'2017-09-13 09:55:50',1,NULL,'<p>1、2016年1月11日-2016年1月24日期间，每位客户限抽1次。</p>\r\n<p>2、实物奖品抽中后，我们将为您免费配送至所选体验馆；到货后请凭中奖手机号（带手机）到店自提。在接到领奖通知次日起，7天内未领取的，直接取消领奖资格，实物奖品不退换、不补件。</p>\r\n<p>3、红包奖品发放：抽中红包后，红包序列号将以短信形式发送至手机，请注意查收。</p>\r\n<p>4、红包使用方法：凭序列号短信到对应体验馆在体验馆人员帮助下下单使用。</p>\r\n<p>5、红包使用条件：红包不能抵扣快递、物流或服务费；体验馆特卖、团购、拍卖、秒杀产品及第三方配送产品除外。每个订单只能使用一个红包，本红包不能与其他红包/预约券/抵扣券/优惠码同时使用。</p>\r\n<p>6、红包使用时间：使用本抽奖红包的订单不再享受活动满减优惠。</p>\r\n<p>7、红包注意事项：此红包仅限抽奖获得，不找零、不折现，限一次性使用完；如使用后发生退款，红包金额不作为退款款项。</p>\r\n<p>8、其他：抽中“精美到店礼品”的客户，直接到所选体验馆领取即可，数量有限，先到先得。</p>',NULL),(8,8,'2017-09-13 10:19:47',1,'2017-09-13 10:20:10',1,NULL,'<p>请务必认真阅读和理解本《用户服务协议》（以下简称《协议》）中规定的所有权利和限制。除非您接受本《协议》条款，否则您无权注册、登录或使用本协议所涉及的相关服务。您一旦注册、登录、使用或以任何方式使用本《协议》所涉及的相关服务的行为将视为对本《协议》的接受，即表示您同意接受本《协议》各项条款的约束。如果您不同意本《协议》中的条款，请不要注册、登录或使用本《协议》相关服务。</p>\r\n<p><strong>一、服务内容</strong></p>\r\n<p>1.2345影视为2345影视网站（网址:kan.2345.com,以下简称“2345影视”）的所有者及经营者，完全按照其发布的服务条款和操作规则提供基于互联网以及移动互联网的相关服务（以下简称“网络服务”）。2345影视网站网络服务的具体内容由2345影视根据实际情况提供。</p>\r\n<p>2.您一旦注册成功成为用户您将得到一个密码和账号您需要对自己在账户中的所有活动和事件负全责。如果由于您的过失导致您的账号和密码脱离您的控制，则由此导致的针对您、2345影视或任何第三方造成的损害，您将承担全部责任</p>\r\n<p><strong>二、用户使用规则</strong></p>\r\n<p>1. 用户在申请使用2345影视网站网络服务时，必须向2345影视提供准确的个人资料，如个人资料有任何变动，必须及时更新。因用户提供个人资料不准确、不真实而引发的一切后果由用户承担</p>',NULL);

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
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `default_posts_default_posts_translations` */

insert  into `default_posts_default_posts_translations`(`id`,`entry_id`,`created_at`,`created_by_id`,`updated_at`,`updated_by_id`,`locale`) values (1,1,'2017-06-30 17:01:41',NULL,'2017-06-30 17:01:41',NULL,'en'),(2,2,'2017-07-03 03:24:16',NULL,'2017-07-03 03:24:16',1,'zh-cn'),(3,3,'2017-07-26 01:49:09',NULL,'2017-07-26 01:49:09',1,'zh-cn'),(4,4,'2017-08-11 16:07:04',NULL,'2017-08-11 16:07:04',1,'zh-cn'),(5,5,'2017-08-11 16:41:21',NULL,'2017-08-11 16:41:21',1,'zh-cn'),(6,6,'2017-09-01 10:09:34',NULL,'2017-09-01 10:09:34',1,'zh-cn'),(7,7,'2017-09-13 09:45:30',NULL,'2017-09-13 09:45:30',1,'zh-cn'),(8,8,'2017-09-13 10:19:47',NULL,'2017-09-13 10:19:47',1,'zh-cn');

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
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `default_posts_posts` */

insert  into `default_posts_posts`(`id`,`sort_order`,`created_at`,`created_by_id`,`updated_at`,`updated_by_id`,`deleted_at`,`str_id`,`slug`,`type_id`,`publish_at`,`author_id`,`entry_id`,`entry_type`,`category_id`,`featured`,`enabled`,`tags`) values (1,1,'2017-07-03 03:24:16',1,'2017-08-07 02:43:58',1,NULL,'aZGn5UHqyuwzd9vu','about-us',1,'2017-07-03 03:20:00',1,2,'Anomaly\\Streams\\Platform\\Model\\Posts\\PostsDefaultPostsEntryModel',NULL,0,1,'a:0:{}'),(2,2,'2017-07-03 03:43:20',1,NULL,NULL,'2017-08-07 06:33:19','ITdF42TT4AZFN2k7','tes-t-dddd',2,'2017-07-03 03:39:00',1,1,'Anomaly\\Streams\\Platform\\Model\\Posts\\PostsAtlasPostsEntryModel',NULL,0,0,'a:0:{}'),(3,3,'2017-07-26 01:49:09',1,'2017-08-07 06:46:21',1,NULL,'Tb0KPBkCgexzysmb','loan',1,'2017-07-26 01:48:00',1,3,'Anomaly\\Streams\\Platform\\Model\\Posts\\PostsDefaultPostsEntryModel',NULL,0,1,'a:0:{}'),(4,3,'2017-08-11 16:07:04',1,NULL,NULL,NULL,'7HWMwOiwm6UWpumg','zixunbiaopti1',1,'2017-08-11 16:05:00',1,4,'Anomaly\\Streams\\Platform\\Model\\Posts\\PostsDefaultPostsEntryModel',3,0,1,'a:0:{}'),(5,4,'2017-08-11 16:41:21',1,'2017-08-31 16:24:30',1,NULL,'M77IggHHWxcWarO1','zixun2',1,'2017-08-11 16:40:00',1,5,'Anomaly\\Streams\\Platform\\Model\\Posts\\PostsDefaultPostsEntryModel',3,0,1,'a:3:{i:0;s:11:\"15002983802\";i:1;s:11:\"15566673384\";i:2;s:12:\"167488237628\";}'),(6,5,'2017-09-01 10:09:34',1,'2017-09-13 10:52:54',1,NULL,'xXEXaF6kyfIEQ4Yx','choujiangguize',1,'2017-09-01 10:06:00',1,6,'Anomaly\\Streams\\Platform\\Model\\Posts\\PostsDefaultPostsEntryModel',NULL,0,1,'a:0:{}'),(7,6,'2017-09-13 09:45:30',1,'2017-09-13 09:55:50',1,NULL,'6XstpYLy2Eip528W','hongbaohuodongguize',1,'2017-09-13 09:44:00',1,7,'Anomaly\\Streams\\Platform\\Model\\Posts\\PostsDefaultPostsEntryModel',NULL,0,1,'a:0:{}'),(8,7,'2017-09-13 10:19:47',1,'2017-09-13 10:20:10',1,NULL,'wKnsvvsPCMCkrCre','zhucexieyi',1,'2017-09-13 10:18:00',1,8,'Anomaly\\Streams\\Platform\\Model\\Posts\\PostsDefaultPostsEntryModel',NULL,0,1,'a:0:{}');

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
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `default_posts_posts_translations` */

insert  into `default_posts_posts_translations`(`id`,`entry_id`,`created_at`,`created_by_id`,`updated_at`,`updated_by_id`,`locale`,`title`,`summary`,`meta_title`,`meta_description`,`meta_keywords`) values (1,1,'2017-07-03 03:24:21',NULL,'2017-08-07 02:38:04',1,'zh-cn','关于我们',NULL,NULL,NULL,'a:0:{}'),(2,2,'2017-07-03 03:43:21',NULL,'2017-07-03 03:43:21',1,'zh-cn','图集test','dfs',NULL,NULL,'a:0:{}'),(3,3,'2017-07-26 01:49:09',NULL,'2017-08-07 06:46:21',1,'zh-cn','贷款须知','dddddd',NULL,NULL,'a:0:{}'),(4,4,'2017-08-11 16:07:05',NULL,'2017-08-11 16:07:05',1,'zh-cn','资讯标题1',NULL,NULL,NULL,'a:0:{}'),(5,5,'2017-08-11 16:41:22',NULL,'2017-08-11 16:41:22',1,'zh-cn','资讯标题2',NULL,NULL,NULL,'a:0:{}'),(6,6,'2017-09-01 10:09:34',NULL,'2017-09-13 10:50:56',1,'zh-cn','抽奖活动规则',NULL,NULL,NULL,'a:0:{}'),(7,7,'2017-09-13 09:45:30',NULL,'2017-09-13 09:45:30',1,'zh-cn','红包活动规则',NULL,NULL,NULL,'a:0:{}'),(8,8,'2017-09-13 10:19:48',NULL,'2017-09-13 10:19:48',1,'zh-cn','注册协议',NULL,NULL,NULL,'a:0:{}');

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
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `default_settings_settings` */

insert  into `default_settings_settings`(`id`,`sort_order`,`created_at`,`created_by_id`,`updated_at`,`updated_by_id`,`key`,`value`) values (1,1,'2017-06-30 17:01:55',NULL,'2017-08-10 07:17:04',1,'streams::timezone','Asia/Shanghai'),(2,2,'2017-06-30 17:01:55',NULL,'2017-08-10 07:17:04',1,'streams::default_locale','zh-cn'),(3,3,'2017-07-25 09:58:56',1,'2017-08-10 07:17:03',1,'streams::name','PyroCMS'),(4,4,'2017-07-25 09:58:56',1,'2017-08-10 07:17:03',1,'streams::description','Build better Laravel websites and applications faster with Pyro.'),(5,5,'2017-07-25 09:58:56',1,'2017-08-10 07:17:03',1,'streams::business',NULL),(6,6,'2017-07-25 09:58:56',1,'2017-08-10 07:17:03',1,'streams::phone',NULL),(7,7,'2017-07-25 09:58:56',1,'2017-08-10 07:17:03',1,'streams::address',NULL),(8,8,'2017-07-25 09:58:56',1,'2017-08-10 07:17:03',1,'streams::address2',NULL),(9,9,'2017-07-25 09:58:56',1,'2017-08-10 07:17:03',1,'streams::city',NULL),(10,10,'2017-07-25 09:58:56',1,'2017-08-10 07:17:04',1,'streams::state',''),(11,11,'2017-07-25 09:58:56',1,'2017-08-10 07:17:04',1,'streams::postal_code',NULL),(12,12,'2017-07-25 09:58:56',1,'2017-08-10 07:17:04',1,'streams::country',''),(13,13,'2017-07-25 09:58:56',1,'2017-08-10 07:17:04',1,'streams::date_format','Y-m-d'),(14,14,'2017-07-25 09:58:56',1,'2017-08-10 07:17:04',1,'streams::time_format','H:i'),(15,15,'2017-07-25 09:58:56',1,'2017-08-10 07:17:04',1,'streams::unit_system','metric'),(16,16,'2017-07-25 09:58:56',1,'2017-08-10 07:17:04',1,'streams::currency','USD'),(17,17,'2017-07-25 09:58:56',1,'2017-08-10 07:17:04',1,'streams::standard_theme','pyrocms.theme.starter'),(18,18,'2017-07-25 09:58:56',1,'2017-08-10 07:17:04',1,'streams::admin_theme','pyrocms.theme.accelerant'),(19,19,'2017-07-25 09:58:56',1,'2017-08-10 07:17:04',1,'streams::per_page','15'),(20,20,'2017-07-25 09:58:56',1,'2017-08-10 07:17:04',1,'streams::enabled_locales','a:1:{i:0;s:5:\"zh-cn\";}'),(21,21,'2017-07-25 09:58:56',1,'2017-08-10 07:17:04',1,'streams::debug','1'),(22,22,'2017-07-25 09:58:57',1,'2017-08-10 07:17:04',1,'streams::maintenance','0'),(23,23,'2017-07-25 09:58:57',1,'2017-08-10 07:17:05',1,'streams::basic_auth','0'),(24,24,'2017-07-25 09:58:57',1,'2017-08-10 07:17:05',1,'streams::ip_whitelist','a:0:{}'),(25,25,'2017-07-25 09:58:57',1,'2017-08-10 07:17:05',1,'streams::email','noreply@pyrocms.local'),(26,26,'2017-07-25 09:58:57',1,'2017-08-10 07:17:05',1,'streams::sender','PyroCMS');

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
) ENGINE=MyISAM AUTO_INCREMENT=2529 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `default_streams_assignments` */

insert  into `default_streams_assignments`(`id`,`sort_order`,`stream_id`,`field_id`,`config`,`unique`,`required`,`translatable`) values (98,95,16,88,'a:0:{}',0,1,0),(97,94,16,87,'a:0:{}',0,1,0),(104,89,17,99,'a:0:{}',0,0,0),(103,88,17,93,'a:0:{}',0,1,0),(102,87,17,92,'a:0:{}',0,0,1),(101,86,17,91,'a:0:{}',1,1,0),(100,85,17,90,'a:0:{}',0,1,1),(109,94,18,98,'a:0:{}',0,1,0),(108,93,18,96,'a:0:{}',0,1,0),(107,92,18,95,'a:0:{}',0,1,0),(106,91,18,92,'a:0:{}',0,0,1),(105,90,18,94,'a:0:{}',0,1,1),(115,81,19,106,'a:0:{}',0,0,1),(114,80,19,102,'a:0:{}',0,1,0),(113,79,19,101,'a:0:{}',1,1,0),(112,78,19,100,'a:0:{}',1,1,1),(118,84,20,101,'a:1:{s:3:\"max\";i:50;}',1,1,0),(117,83,20,100,'a:1:{s:3:\"max\";i:50;}',0,1,1),(116,82,20,104,'a:0:{}',0,1,0),(125,91,21,113,'a:0:{}',0,1,0),(124,90,21,109,'a:0:{}',0,1,0),(123,89,21,103,'a:0:{}',0,1,0),(122,88,21,104,'a:0:{}',0,1,0),(121,87,21,100,'a:0:{}',0,1,0),(120,86,20,107,'a:0:{}',0,0,0),(119,85,20,106,'a:0:{}',0,0,1),(133,89,22,116,'a:0:{}',0,0,1),(132,88,22,118,'a:0:{}',1,1,0),(131,87,22,114,'a:0:{}',1,1,1),(137,93,23,123,'a:0:{}',0,1,0),(136,92,23,117,'a:0:{}',0,1,0),(135,91,23,122,'a:0:{}',0,1,0),(134,90,23,119,'a:0:{}',0,1,0),(158,92,25,126,'a:3:{s:7:\"slugify\";s:4:\"name\";s:4:\"type\";s:1:\"_\";s:3:\"max\";i:50;}',1,1,0),(157,91,25,143,'a:1:{s:3:\"max\";i:50;}',1,1,1),(156,90,24,135,'a:0:{}',0,0,0),(155,89,24,137,'a:0:{}',0,0,0),(154,88,24,133,'a:0:{}',0,0,1),(153,87,24,132,'a:0:{}',0,0,1),(152,86,24,131,'a:0:{}',0,0,1),(151,85,24,130,'a:0:{}',0,0,0),(150,84,24,141,'a:0:{}',0,0,0),(149,83,24,129,'a:0:{}',0,0,0),(148,82,24,140,'a:0:{}',0,0,0),(141,75,24,124,'a:0:{}',0,1,0),(142,76,24,125,'a:0:{}',0,1,1),(143,77,24,126,'a:0:{}',0,1,0),(144,78,24,128,'a:0:{}',0,1,0),(145,79,24,138,'a:0:{}',0,1,0),(146,80,24,142,'a:0:{}',0,0,0),(147,81,24,136,'a:0:{}',0,0,0),(276,107,47,245,'a:0:{}',1,1,0),(277,108,47,247,'a:0:{}',0,1,1),(278,109,47,252,'a:0:{}',0,0,1),(279,110,47,248,'a:0:{}',1,1,0),(280,111,47,250,'a:0:{}',0,1,0),(281,112,47,254,'a:0:{}',0,1,0),(282,113,47,256,'a:0:{}',0,1,0),(283,114,47,255,'a:0:{}',0,1,0),(284,115,47,261,'a:0:{}',0,0,1),(285,116,47,262,'a:0:{}',0,0,1),(286,117,47,263,'a:0:{}',0,0,1),(287,118,47,258,'a:0:{}',0,0,0),(288,119,47,260,'a:0:{}',0,0,0),(289,120,47,259,'a:0:{}',0,0,0),(290,121,47,251,'a:0:{}',0,0,0),(291,122,48,246,'a:1:{s:3:\"max\";i:50;}',1,1,1),(292,123,48,248,'a:3:{s:7:\"slugify\";s:4:\"name\";s:4:\"type\";s:1:\"_\";s:3:\"max\";i:50;}',1,1,0),(187,95,29,167,'a:0:{}',0,1,0),(186,94,29,166,'a:0:{}',0,1,0),(191,95,30,171,'a:0:{}',0,1,0),(190,94,30,170,'a:0:{}',0,1,0),(189,93,30,169,'a:0:{}',1,1,0),(99,96,16,89,'a:0:{}',0,0,0),(110,95,18,99,'a:0:{}',0,0,0),(111,96,18,97,'a:0:{}',0,0,0),(126,92,21,112,'a:0:{}',0,1,0),(127,93,21,105,'a:0:{}',0,0,0),(128,94,21,108,'a:0:{}',0,0,0),(129,95,21,111,'a:0:{}',0,0,0),(130,96,21,110,'a:0:{}',0,0,0),(138,94,23,115,'a:0:{}',0,0,0),(139,95,23,120,'a:0:{}',0,0,0),(140,96,23,121,'a:0:{}',0,0,0),(159,93,25,144,'a:0:{}',0,0,1),(160,94,25,137,'a:0:{}',0,1,0),(161,95,25,134,'a:0:{}',0,1,0),(162,96,25,139,'a:0:{}',0,1,0),(295,126,48,253,'a:0:{}',0,0,1),(296,127,39,249,'a:1:{i:0;s:6:\"a:0:{}\";}',0,0,0),(294,125,48,265,'a:0:{}',0,1,0),(293,124,48,257,'a:0:{}',0,1,0),(188,96,29,168,'a:0:{}',0,0,0),(192,96,30,172,'a:0:{}',0,0,0),(193,97,31,173,'a:0:{}',1,1,0),(194,98,31,174,'a:0:{}',0,0,0),(195,99,32,175,'a:0:{}',1,1,0),(196,100,32,176,'a:0:{}',1,1,0),(197,101,32,177,'a:0:{}',0,1,0),(198,102,32,195,'a:0:{}',0,1,0),(199,103,32,183,'a:0:{}',0,1,0),(200,104,32,184,'a:0:{}',0,0,0),(201,105,32,185,'a:0:{}',0,0,0),(202,106,32,192,'a:0:{}',0,0,0),(203,107,32,193,'a:0:{}',0,0,0),(204,108,32,182,'a:0:{}',0,0,0),(205,109,32,180,'a:0:{}',0,0,0),(206,110,32,178,'a:0:{}',0,0,0),(207,111,32,190,'a:0:{}',0,0,0),(208,112,32,188,'a:0:{}',0,0,0),(209,113,32,181,'a:0:{}',0,0,0),(210,114,32,179,'a:0:{}',0,0,0),(211,115,33,186,'a:0:{}',0,1,1),(212,116,33,194,'a:0:{}',1,1,0),(213,117,33,187,'a:0:{}',0,0,1),(214,118,33,182,'a:0:{}',0,0,0),(215,119,34,196,'a:0:{}',0,0,1),(216,120,34,197,'a:0:{}',0,1,0),(217,121,34,198,'a:0:{}',0,0,1),(218,122,35,199,'a:0:{}',0,1,1),(219,123,35,200,'a:0:{}',0,1,0),(220,124,35,201,'a:0:{}',0,0,1),(221,125,38,127,'a:0:{}',0,0,1),(272,103,46,246,'a:0:{}',1,1,1),(273,104,46,248,'a:1:{s:7:\"slugify\";s:4:\"name\";}',1,1,0),(274,105,46,253,'a:0:{}',0,0,1),(275,106,46,266,'a:0:{}',0,0,0),(297,128,39,267,'a:1:{i:0;s:6:\"a:0:{}\";}',0,0,0),(298,129,49,267,'a:1:{i:0;s:6:\"a:0:{}\";}',0,0,0),(299,130,49,249,'a:1:{i:0;s:6:\"a:0:{}\";}',0,0,0),(300,131,49,268,'a:1:{i:0;s:6:\"a:0:{}\";}',0,0,0),(301,132,50,267,'a:1:{i:0;s:6:\"a:0:{}\";}',0,0,0),(302,133,50,269,'a:1:{i:0;s:6:\"a:0:{}\";}',0,0,0),(303,134,50,270,'a:1:{i:0;s:6:\"a:0:{}\";}',0,0,0),(304,135,50,249,'a:1:{i:0;s:6:\"a:0:{}\";}',0,0,0),(305,136,52,267,'a:1:{i:0;s:6:\"a:0:{}\";}',0,0,0),(306,137,52,271,'a:1:{i:0;s:6:\"a:0:{}\";}',0,0,0),(307,138,52,249,'a:1:{i:0;s:6:\"a:0:{}\";}',0,0,0),(309,139,55,273,'a:0:{}',0,1,1),(310,140,55,274,'a:0:{}',0,0,0),(2509,243,325,2511,'a:0:{}',0,1,0),(2508,242,325,2510,'a:0:{}',0,1,0),(2507,241,324,2509,'a:0:{}',0,0,0),(2506,240,324,2508,'a:0:{}',0,0,0),(2505,239,324,2507,'a:0:{}',0,0,0),(2504,238,324,2506,'a:0:{}',0,0,0),(2499,233,324,2501,'a:0:{}',0,1,0),(2500,234,324,2502,'a:0:{}',0,1,0),(2501,235,324,2503,'a:0:{}',0,1,0),(2502,236,324,2504,'a:0:{}',0,0,0),(2503,237,324,2505,'a:0:{}',0,0,0),(2498,232,324,2500,'a:0:{}',0,1,0),(2497,231,324,2499,'a:0:{}',0,1,0),(2493,227,323,2495,'a:0:{}',0,1,0),(2494,228,323,2496,'a:0:{}',0,1,0),(2495,229,323,2497,'a:0:{}',0,1,0),(2496,230,323,2498,'a:0:{}',0,0,0),(2492,226,322,2494,'a:0:{}',0,0,0),(2491,225,322,2493,'a:0:{}',0,1,0),(2490,224,322,2492,'a:0:{}',0,1,0),(2489,223,322,2491,'a:0:{}',0,1,0),(2488,222,321,2490,'a:0:{}',0,0,0),(2487,221,321,2489,'a:0:{}',0,0,0),(2486,220,321,2488,'a:0:{}',0,0,0),(2485,219,321,2487,'a:0:{}',0,0,0),(2484,218,321,2486,'a:0:{}',0,0,0),(2483,217,321,2485,'a:0:{}',0,0,0),(2482,216,321,2484,'a:0:{}',0,0,0),(2481,215,321,2483,'a:0:{}',0,0,0),(2480,214,321,2482,'a:0:{}',0,0,0),(2479,213,321,2481,'a:0:{}',0,0,0),(2478,212,321,2480,'a:0:{}',0,0,0),(2477,211,321,2479,'a:0:{}',0,0,0),(2476,210,321,2478,'a:0:{}',0,0,0),(2475,209,321,2477,'a:0:{}',0,0,0),(2474,208,321,2476,'a:0:{}',0,0,0),(2469,203,321,2471,'a:0:{}',1,1,0),(2470,204,321,2472,'a:0:{}',0,1,0),(2471,205,321,2473,'a:0:{}',0,0,0),(2472,206,321,2474,'a:0:{}',1,1,0),(2473,207,321,2475,'a:0:{}',0,0,0),(2334,246,304,2335,'a:0:{}',0,0,0),(2332,244,303,2333,'a:0:{}',0,0,0),(2333,245,304,2334,'a:0:{}',0,0,0),(2331,243,303,2332,'a:0:{}',0,0,0),(2330,242,303,2331,'a:0:{}',0,0,0),(2329,241,303,2330,'a:0:{}',0,1,0),(2328,240,303,2329,'a:0:{}',0,1,0),(2327,239,303,2328,'a:0:{}',0,1,0),(2326,238,303,2327,'a:0:{}',0,1,0),(2325,237,302,2326,'a:0:{}',0,0,0),(2324,236,302,2325,'a:0:{}',0,0,0),(2323,235,302,2324,'a:0:{}',0,0,0),(2322,234,302,2323,'a:0:{}',0,0,0),(2321,233,302,2322,'a:0:{}',0,1,0),(2320,232,302,2321,'a:0:{}',0,1,0),(2319,231,302,2320,'a:0:{}',0,1,0),(2318,230,302,2319,'a:0:{}',0,1,0),(1998,240,252,1992,'a:0:{}',0,1,0),(1997,239,252,1991,'a:0:{}',0,1,0),(1996,238,252,1990,'a:0:{}',0,1,0),(1995,237,252,1989,'a:0:{}',0,1,0),(1994,236,252,1988,'a:0:{}',0,1,0),(1993,235,252,1987,'a:0:{}',0,1,0),(1992,234,252,1986,'a:0:{}',0,1,0),(2000,242,252,1994,'a:0:{}',0,0,0),(1999,241,252,1993,'a:0:{}',0,1,0),(2510,244,325,2512,'a:0:{}',0,1,0),(2511,245,325,2513,'a:0:{}',0,1,0),(2512,246,325,2514,'a:0:{}',0,0,0),(2513,247,325,2516,'a:0:{}',0,1,0),(2514,248,325,2517,'a:0:{}',0,1,0),(2515,249,325,2518,'a:0:{}',0,1,0),(2516,250,325,2515,'a:0:{}',0,1,0),(2517,251,326,2519,'a:0:{}',0,1,0),(2518,252,326,2520,'a:0:{}',0,1,0),(2519,253,326,2521,'a:0:{}',0,1,0),(2520,254,326,2522,'a:0:{}',0,1,0),(1990,244,251,1984,'a:0:{}',0,1,0),(1989,243,250,1983,'a:0:{}',0,0,0),(1988,242,250,1982,'a:0:{}',0,0,0),(1987,241,250,1981,'a:0:{}',0,0,0),(1984,238,250,1978,'a:0:{}',0,1,0),(1985,239,250,1979,'a:0:{}',0,0,0),(1986,240,250,1980,'a:0:{}',0,1,0),(1991,245,251,1985,'a:0:{}',0,0,0),(2001,243,253,1996,'a:0:{}',0,1,0),(2002,244,253,1997,'a:0:{}',0,1,0),(2003,245,253,1998,'a:0:{}',0,1,0),(2004,246,253,1995,'a:0:{}',0,0,0),(2097,247,266,2098,'a:0:{}',0,0,0),(2098,248,266,2099,'a:0:{}',0,0,0),(2099,249,266,2100,'a:0:{}',0,0,0),(2100,250,266,2101,'a:0:{}',0,0,0),(2101,251,266,2102,'a:0:{}',0,0,0),(2102,252,266,2103,'a:0:{}',0,0,0),(2103,253,266,2104,'a:0:{}',0,0,0),(2104,254,266,2105,'a:0:{}',0,0,0),(2335,247,304,2336,'a:0:{}',0,0,0),(2336,248,304,2337,'a:0:{}',0,0,0),(2337,249,304,2338,'a:0:{}',0,0,0),(2338,250,304,2339,'a:0:{}',0,0,0),(2339,251,304,2340,'a:0:{}',0,0,0),(2340,252,304,2341,'a:0:{}',0,0,0),(2105,255,266,2106,'a:0:{}',0,0,0),(2348,260,306,2348,'a:0:{}',0,1,0),(2347,259,306,2347,'a:0:{}',0,1,0),(2346,258,306,2350,'a:0:{}',0,0,0),(2345,257,305,2346,'a:0:{}',0,0,0),(2344,256,305,2345,'a:0:{}',0,0,0),(2343,255,305,2344,'a:0:{}',0,0,0),(2342,254,305,2343,'a:0:{}',0,1,0),(2341,253,305,2342,'a:0:{}',0,1,0),(2349,261,306,2349,'a:0:{}',0,1,0),(2526,260,327,2528,'a:0:{}',0,1,0),(2527,261,327,2529,'a:0:{}',0,0,0),(2528,262,327,2530,'a:0:{}',0,1,0),(2521,255,326,2523,'a:0:{}',0,1,0),(2522,256,326,2524,'a:0:{}',0,1,0),(2523,257,326,2525,'a:0:{}',0,0,0),(2524,258,326,2526,'a:0:{}',0,1,0),(2525,259,327,2527,'a:0:{}',0,1,0);

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
) ENGINE=MyISAM AUTO_INCREMENT=2528 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `default_streams_assignments_translations` */

insert  into `default_streams_assignments_translations`(`id`,`assignment_id`,`locale`,`label`,`warning`,`placeholder`,`instructions`) values (99,99,'en','anomaly.module.configuration::field.value.label.configuration','anomaly.module.configuration::field.value.warning.configuration','anomaly.module.configuration::field.value.placeholder.configuration','anomaly.module.configuration::field.value.instructions.configuration'),(98,98,'en','anomaly.module.configuration::field.key.label.configuration','anomaly.module.configuration::field.key.warning.configuration','anomaly.module.configuration::field.key.placeholder.configuration','anomaly.module.configuration::field.key.instructions.configuration'),(97,97,'en','anomaly.module.configuration::field.scope.label.configuration','anomaly.module.configuration::field.scope.warning.configuration','anomaly.module.configuration::field.scope.placeholder.configuration','anomaly.module.configuration::field.scope.instructions.configuration'),(110,110,'en','anomaly.module.dashboard::field.allowed_roles.label.widgets','anomaly.module.dashboard::field.allowed_roles.warning.widgets','anomaly.module.dashboard::field.allowed_roles.placeholder.widgets','anomaly.module.dashboard::field.allowed_roles.instructions.widgets'),(109,109,'en','anomaly.module.dashboard::field.dashboard.label.widgets','anomaly.module.dashboard::field.dashboard.warning.widgets','anomaly.module.dashboard::field.dashboard.placeholder.widgets','anomaly.module.dashboard::field.dashboard.instructions.widgets'),(108,108,'en','anomaly.module.dashboard::field.column.label.widgets','anomaly.module.dashboard::field.column.warning.widgets','anomaly.module.dashboard::field.column.placeholder.widgets','anomaly.module.dashboard::field.column.instructions.widgets'),(100,100,'en','anomaly.module.dashboard::field.name.label.dashboards','anomaly.module.dashboard::field.name.warning.dashboards','anomaly.module.dashboard::field.name.placeholder.dashboards','anomaly.module.dashboard::field.name.instructions.dashboards'),(101,101,'en','anomaly.module.dashboard::field.slug.label.dashboards','anomaly.module.dashboard::field.slug.warning.dashboards','anomaly.module.dashboard::field.slug.placeholder.dashboards','anomaly.module.dashboard::field.slug.instructions.dashboards'),(102,102,'en','anomaly.module.dashboard::field.description.label.dashboards','anomaly.module.dashboard::field.description.warning.dashboards','anomaly.module.dashboard::field.description.placeholder.dashboards','anomaly.module.dashboard::field.description.instructions.dashboards'),(103,103,'en','anomaly.module.dashboard::field.layout.label.dashboards','anomaly.module.dashboard::field.layout.warning.dashboards','anomaly.module.dashboard::field.layout.placeholder.dashboards','anomaly.module.dashboard::field.layout.instructions.dashboards'),(104,104,'en','anomaly.module.dashboard::field.allowed_roles.label.dashboards','anomaly.module.dashboard::field.allowed_roles.warning.dashboards','anomaly.module.dashboard::field.allowed_roles.placeholder.dashboards','anomaly.module.dashboard::field.allowed_roles.instructions.dashboards'),(105,105,'en','anomaly.module.dashboard::field.title.label.widgets','anomaly.module.dashboard::field.title.warning.widgets','anomaly.module.dashboard::field.title.placeholder.widgets','anomaly.module.dashboard::field.title.instructions.widgets'),(106,106,'en','anomaly.module.dashboard::field.description.label.widgets','anomaly.module.dashboard::field.description.warning.widgets','anomaly.module.dashboard::field.description.placeholder.widgets','anomaly.module.dashboard::field.description.instructions.widgets'),(107,107,'en','anomaly.module.dashboard::field.extension.label.widgets','anomaly.module.dashboard::field.extension.warning.widgets','anomaly.module.dashboard::field.extension.placeholder.widgets','anomaly.module.dashboard::field.extension.instructions.widgets'),(129,129,'en','anomaly.module.files::field.height.label.files','anomaly.module.files::field.height.warning.files','anomaly.module.files::field.height.placeholder.files','anomaly.module.files::field.height.instructions.files'),(128,128,'en','anomaly.module.files::field.keywords.label.files','anomaly.module.files::field.keywords.warning.files','anomaly.module.files::field.keywords.placeholder.files','anomaly.module.files::field.keywords.instructions.files'),(127,127,'en','anomaly.module.files::field.entry.label.files','anomaly.module.files::field.entry.warning.files','anomaly.module.files::field.entry.placeholder.files','anomaly.module.files::field.entry.instructions.files'),(112,112,'en','anomaly.module.files::field.name.label.disks','anomaly.module.files::field.name.warning.disks','anomaly.module.files::field.name.placeholder.disks','anomaly.module.files::field.name.instructions.disks'),(113,113,'en','anomaly.module.files::field.slug.label.disks','anomaly.module.files::field.slug.warning.disks','anomaly.module.files::field.slug.placeholder.disks','anomaly.module.files::field.slug.instructions.disks'),(114,114,'en','anomaly.module.files::field.adapter.label.disks','anomaly.module.files::field.adapter.warning.disks','anomaly.module.files::field.adapter.placeholder.disks','anomaly.module.files::field.adapter.instructions.disks'),(115,115,'en','anomaly.module.files::field.description.label.disks','anomaly.module.files::field.description.warning.disks','anomaly.module.files::field.description.placeholder.disks','anomaly.module.files::field.description.instructions.disks'),(116,116,'en','anomaly.module.files::field.disk.label.folders','anomaly.module.files::field.disk.warning.folders','anomaly.module.files::field.disk.placeholder.folders','anomaly.module.files::field.disk.instructions.folders'),(117,117,'en','anomaly.module.files::field.name.label.folders','anomaly.module.files::field.name.warning.folders','anomaly.module.files::field.name.placeholder.folders','anomaly.module.files::field.name.instructions.folders'),(118,118,'en','anomaly.module.files::field.slug.label.folders','anomaly.module.files::field.slug.warning.folders','anomaly.module.files::field.slug.placeholder.folders','anomaly.module.files::field.slug.instructions.folders'),(119,119,'en','anomaly.module.files::field.description.label.folders','anomaly.module.files::field.description.warning.folders','anomaly.module.files::field.description.placeholder.folders','anomaly.module.files::field.description.instructions.folders'),(120,120,'en','anomaly.module.files::field.allowed_types.label.folders','anomaly.module.files::field.allowed_types.warning.folders','anomaly.module.files::field.allowed_types.placeholder.folders','anomaly.module.files::field.allowed_types.instructions.folders'),(121,121,'en','anomaly.module.files::field.name.label.files','anomaly.module.files::field.name.warning.files','anomaly.module.files::field.name.placeholder.files','anomaly.module.files::field.name.instructions.files'),(122,122,'en','anomaly.module.files::field.disk.label.files','anomaly.module.files::field.disk.warning.files','anomaly.module.files::field.disk.placeholder.files','anomaly.module.files::field.disk.instructions.files'),(123,123,'en','anomaly.module.files::field.folder.label.files','anomaly.module.files::field.folder.warning.files','anomaly.module.files::field.folder.placeholder.files','anomaly.module.files::field.folder.instructions.files'),(124,124,'en','anomaly.module.files::field.extension.label.files','anomaly.module.files::field.extension.warning.files','anomaly.module.files::field.extension.placeholder.files','anomaly.module.files::field.extension.instructions.files'),(125,125,'en','anomaly.module.files::field.size.label.files','anomaly.module.files::field.size.warning.files','anomaly.module.files::field.size.placeholder.files','anomaly.module.files::field.size.instructions.files'),(126,126,'en','anomaly.module.files::field.mime_type.label.files','anomaly.module.files::field.mime_type.warning.files','anomaly.module.files::field.mime_type.placeholder.files','anomaly.module.files::field.mime_type.instructions.files'),(140,140,'en','anomaly.module.navigation::field.allowed_roles.label.links','anomaly.module.navigation::field.allowed_roles.warning.links','anomaly.module.navigation::field.allowed_roles.placeholder.links','anomaly.module.navigation::field.allowed_roles.instructions.links'),(139,139,'en','anomaly.module.navigation::field.parent.label.links','anomaly.module.navigation::field.parent.warning.links','anomaly.module.navigation::field.parent.placeholder.links','anomaly.module.navigation::field.parent.instructions.links'),(131,131,'en','anomaly.module.navigation::field.name.label.menus','anomaly.module.navigation::field.name.warning.menus','anomaly.module.navigation::field.name.placeholder.menus','anomaly.module.navigation::field.name.instructions.menus'),(132,132,'en','anomaly.module.navigation::field.slug.label.menus','anomaly.module.navigation::field.slug.warning.menus','anomaly.module.navigation::field.slug.placeholder.menus','anomaly.module.navigation::field.slug.instructions.menus'),(133,133,'en','anomaly.module.navigation::field.description.label.menus','anomaly.module.navigation::field.description.warning.menus','anomaly.module.navigation::field.description.placeholder.menus','anomaly.module.navigation::field.description.instructions.menus'),(134,134,'en','anomaly.module.navigation::field.menu.label.links','anomaly.module.navigation::field.menu.warning.links','anomaly.module.navigation::field.menu.placeholder.links','anomaly.module.navigation::field.menu.instructions.links'),(135,135,'en','anomaly.module.navigation::field.type.label.links','anomaly.module.navigation::field.type.warning.links','anomaly.module.navigation::field.type.placeholder.links','anomaly.module.navigation::field.type.instructions.links'),(136,136,'en','anomaly.module.navigation::field.entry.label.links','anomaly.module.navigation::field.entry.warning.links','anomaly.module.navigation::field.entry.placeholder.links','anomaly.module.navigation::field.entry.instructions.links'),(137,137,'en','anomaly.module.navigation::field.target.label.links','anomaly.module.navigation::field.target.warning.links','anomaly.module.navigation::field.target.placeholder.links','anomaly.module.navigation::field.target.instructions.links'),(138,138,'en','anomaly.module.navigation::field.class.label.links','anomaly.module.navigation::field.class.warning.links','anomaly.module.navigation::field.class.placeholder.links','anomaly.module.navigation::field.class.instructions.links'),(160,160,'en','anomaly.module.pages::field.theme_layout.label.types','anomaly.module.pages::field.theme_layout.warning.types','anomaly.module.pages::field.theme_layout.placeholder.types','anomaly.module.pages::field.theme_layout.instructions.types'),(159,159,'en','anomaly.module.pages::field.description.label.types','anomaly.module.pages::field.description.warning.types','anomaly.module.pages::field.description.placeholder.types','anomaly.module.pages::field.description.instructions.types'),(158,158,'en','anomaly.module.pages::field.slug.label.types','anomaly.module.pages::field.slug.warning.types','anomaly.module.pages::field.slug.placeholder.types','anomaly.module.pages::field.slug.instructions.types'),(157,157,'en','anomaly.module.pages::field.name.label.types','anomaly.module.pages::field.name.warning.types','anomaly.module.pages::field.name.placeholder.types','anomaly.module.pages::field.name.instructions.types'),(156,156,'en','anomaly.module.pages::field.allowed_roles.label.pages','anomaly.module.pages::field.allowed_roles.warning.pages','anomaly.module.pages::field.allowed_roles.placeholder.pages','anomaly.module.pages::field.allowed_roles.instructions.pages'),(155,155,'en','anomaly.module.pages::field.theme_layout.label.pages','anomaly.module.pages::field.theme_layout.warning.pages','anomaly.module.pages::field.theme_layout.placeholder.pages','anomaly.module.pages::field.theme_layout.instructions.pages'),(154,154,'en','anomaly.module.pages::field.meta_keywords.label.pages','anomaly.module.pages::field.meta_keywords.warning.pages','anomaly.module.pages::field.meta_keywords.placeholder.pages','anomaly.module.pages::field.meta_keywords.instructions.pages'),(153,153,'en','anomaly.module.pages::field.meta_description.label.pages','anomaly.module.pages::field.meta_description.warning.pages','anomaly.module.pages::field.meta_description.placeholder.pages','anomaly.module.pages::field.meta_description.instructions.pages'),(152,152,'en','anomaly.module.pages::field.meta_title.label.pages','anomaly.module.pages::field.meta_title.warning.pages','anomaly.module.pages::field.meta_title.placeholder.pages','anomaly.module.pages::field.meta_title.instructions.pages'),(151,151,'en','anomaly.module.pages::field.home.label.pages','anomaly.module.pages::field.home.warning.pages','anomaly.module.pages::field.home.placeholder.pages','anomaly.module.pages::field.home.instructions.pages'),(150,150,'en','anomaly.module.pages::field.exact.label.pages','anomaly.module.pages::field.exact.warning.pages','anomaly.module.pages::field.exact.placeholder.pages','anomaly.module.pages::field.exact.instructions.pages'),(149,149,'en','anomaly.module.pages::field.enabled.label.pages','anomaly.module.pages::field.enabled.warning.pages','anomaly.module.pages::field.enabled.placeholder.pages','anomaly.module.pages::field.enabled.instructions.pages'),(148,148,'en','anomaly.module.pages::field.visible.label.pages','anomaly.module.pages::field.visible.warning.pages','anomaly.module.pages::field.visible.placeholder.pages','anomaly.module.pages::field.visible.instructions.pages'),(141,141,'en','anomaly.module.pages::field.str_id.label.pages','anomaly.module.pages::field.str_id.warning.pages','anomaly.module.pages::field.str_id.placeholder.pages','anomaly.module.pages::field.str_id.instructions.pages'),(142,142,'en','anomaly.module.pages::field.title.label.pages','anomaly.module.pages::field.title.warning.pages','anomaly.module.pages::field.title.placeholder.pages','anomaly.module.pages::field.title.instructions.pages'),(143,143,'en','anomaly.module.pages::field.slug.label.pages','anomaly.module.pages::field.slug.warning.pages','anomaly.module.pages::field.slug.placeholder.pages','anomaly.module.pages::field.slug.instructions.pages'),(144,144,'en','anomaly.module.pages::field.path.label.pages','anomaly.module.pages::field.path.warning.pages','anomaly.module.pages::field.path.placeholder.pages','anomaly.module.pages::field.path.instructions.pages'),(145,145,'en','anomaly.module.pages::field.type.label.pages','anomaly.module.pages::field.type.warning.pages','anomaly.module.pages::field.type.placeholder.pages','anomaly.module.pages::field.type.instructions.pages'),(146,146,'en','anomaly.module.pages::field.entry.label.pages','anomaly.module.pages::field.entry.warning.pages','anomaly.module.pages::field.entry.placeholder.pages','anomaly.module.pages::field.entry.instructions.pages'),(147,147,'en','anomaly.module.pages::field.parent.label.pages','anomaly.module.pages::field.parent.warning.pages','anomaly.module.pages::field.parent.placeholder.pages','anomaly.module.pages::field.parent.instructions.pages'),(294,294,'en','anomaly.module.posts::field.theme_layout.label.types','anomaly.module.posts::field.theme_layout.warning.types','anomaly.module.posts::field.theme_layout.placeholder.types','anomaly.module.posts::field.theme_layout.instructions.types'),(295,295,'en','anomaly.module.posts::field.description.label.types','anomaly.module.posts::field.description.warning.types','anomaly.module.posts::field.description.placeholder.types','anomaly.module.posts::field.description.instructions.types'),(289,289,'en','anomaly.module.posts::field.enabled.label.posts','anomaly.module.posts::field.enabled.warning.posts','anomaly.module.posts::field.enabled.placeholder.posts','anomaly.module.posts::field.enabled.instructions.posts'),(290,290,'en','anomaly.module.posts::field.tags.label.posts','anomaly.module.posts::field.tags.warning.posts','anomaly.module.posts::field.tags.placeholder.posts','anomaly.module.posts::field.tags.instructions.posts'),(291,291,'en','anomaly.module.posts::field.name.label.types','anomaly.module.posts::field.name.warning.types','anomaly.module.posts::field.name.placeholder.types','anomaly.module.posts::field.name.instructions.types'),(287,287,'en','anomaly.module.posts::field.category.label.posts','anomaly.module.posts::field.category.warning.posts','anomaly.module.posts::field.category.placeholder.posts','anomaly.module.posts::field.category.instructions.posts'),(286,286,'en','anomaly.module.posts::field.meta_keywords.label.posts','anomaly.module.posts::field.meta_keywords.warning.posts','anomaly.module.posts::field.meta_keywords.placeholder.posts','anomaly.module.posts::field.meta_keywords.instructions.posts'),(285,285,'en','anomaly.module.posts::field.meta_description.label.posts','anomaly.module.posts::field.meta_description.warning.posts','anomaly.module.posts::field.meta_description.placeholder.posts','anomaly.module.posts::field.meta_description.instructions.posts'),(272,272,'en','anomaly.module.posts::field.name.label.categories','anomaly.module.posts::field.name.warning.categories','anomaly.module.posts::field.name.placeholder.categories','anomaly.module.posts::field.name.instructions.categories'),(273,273,'en','anomaly.module.posts::field.slug.label.categories','anomaly.module.posts::field.slug.warning.categories','anomaly.module.posts::field.slug.placeholder.categories','anomaly.module.posts::field.slug.instructions.categories'),(274,274,'en','anomaly.module.posts::field.description.label.categories','anomaly.module.posts::field.description.warning.categories','anomaly.module.posts::field.description.placeholder.categories','anomaly.module.posts::field.description.instructions.categories'),(275,275,'en','anomaly.module.posts::field.parent.label.categories','anomaly.module.posts::field.parent.warning.categories','anomaly.module.posts::field.parent.placeholder.categories','anomaly.module.posts::field.parent.instructions.categories'),(276,276,'en','anomaly.module.posts::field.str_id.label.posts','anomaly.module.posts::field.str_id.warning.posts','anomaly.module.posts::field.str_id.placeholder.posts','anomaly.module.posts::field.str_id.instructions.posts'),(277,277,'en','anomaly.module.posts::field.title.label.posts','anomaly.module.posts::field.title.warning.posts','anomaly.module.posts::field.title.placeholder.posts','anomaly.module.posts::field.title.instructions.posts'),(278,278,'en','anomaly.module.posts::field.summary.label.posts','anomaly.module.posts::field.summary.warning.posts','anomaly.module.posts::field.summary.placeholder.posts','anomaly.module.posts::field.summary.instructions.posts'),(279,279,'en','anomaly.module.posts::field.slug.label.posts','anomaly.module.posts::field.slug.warning.posts','anomaly.module.posts::field.slug.placeholder.posts','anomaly.module.posts::field.slug.instructions.posts'),(280,280,'en','anomaly.module.posts::field.type.label.posts','anomaly.module.posts::field.type.warning.posts','anomaly.module.posts::field.type.placeholder.posts','anomaly.module.posts::field.type.instructions.posts'),(281,281,'en','anomaly.module.posts::field.publish_at.label.posts','anomaly.module.posts::field.publish_at.warning.posts','anomaly.module.posts::field.publish_at.placeholder.posts','anomaly.module.posts::field.publish_at.instructions.posts'),(282,282,'en','anomaly.module.posts::field.author.label.posts','anomaly.module.posts::field.author.warning.posts','anomaly.module.posts::field.author.placeholder.posts','anomaly.module.posts::field.author.instructions.posts'),(283,283,'en','anomaly.module.posts::field.entry.label.posts','anomaly.module.posts::field.entry.warning.posts','anomaly.module.posts::field.entry.placeholder.posts','anomaly.module.posts::field.entry.instructions.posts'),(284,284,'en','anomaly.module.posts::field.meta_title.label.posts','anomaly.module.posts::field.meta_title.warning.posts','anomaly.module.posts::field.meta_title.placeholder.posts','anomaly.module.posts::field.meta_title.instructions.posts'),(188,188,'en','anomaly.module.preferences::field.value.label.preferences','anomaly.module.preferences::field.value.warning.preferences','anomaly.module.preferences::field.value.placeholder.preferences','anomaly.module.preferences::field.value.instructions.preferences'),(187,187,'en','anomaly.module.preferences::field.key.label.preferences','anomaly.module.preferences::field.key.warning.preferences','anomaly.module.preferences::field.key.placeholder.preferences','anomaly.module.preferences::field.key.instructions.preferences'),(186,186,'en','anomaly.module.preferences::field.user.label.preferences','anomaly.module.preferences::field.user.warning.preferences','anomaly.module.preferences::field.user.placeholder.preferences','anomaly.module.preferences::field.user.instructions.preferences'),(192,192,'en','anomaly.module.redirects::field.secure.label.redirects','anomaly.module.redirects::field.secure.warning.redirects','anomaly.module.redirects::field.secure.placeholder.redirects','anomaly.module.redirects::field.secure.instructions.redirects'),(191,191,'en','anomaly.module.redirects::field.status.label.redirects','anomaly.module.redirects::field.status.warning.redirects','anomaly.module.redirects::field.status.placeholder.redirects','anomaly.module.redirects::field.status.instructions.redirects'),(190,190,'en','anomaly.module.redirects::field.to.label.redirects','anomaly.module.redirects::field.to.warning.redirects','anomaly.module.redirects::field.to.placeholder.redirects','anomaly.module.redirects::field.to.instructions.redirects'),(189,189,'en','anomaly.module.redirects::field.from.label.redirects','anomaly.module.redirects::field.from.warning.redirects','anomaly.module.redirects::field.from.placeholder.redirects','anomaly.module.redirects::field.from.instructions.redirects'),(111,111,'en','anomaly.module.dashboard::field.pinned.label.widgets','anomaly.module.dashboard::field.pinned.warning.widgets','anomaly.module.dashboard::field.pinned.placeholder.widgets','anomaly.module.dashboard::field.pinned.instructions.widgets'),(130,130,'en','anomaly.module.files::field.width.label.files','anomaly.module.files::field.width.warning.files','anomaly.module.files::field.width.placeholder.files','anomaly.module.files::field.width.instructions.files'),(161,161,'en','anomaly.module.pages::field.layout.label.types','anomaly.module.pages::field.layout.warning.types','anomaly.module.pages::field.layout.placeholder.types','anomaly.module.pages::field.layout.instructions.types'),(162,162,'en','anomaly.module.pages::field.handler.label.types','anomaly.module.pages::field.handler.warning.types','anomaly.module.pages::field.handler.placeholder.types','anomaly.module.pages::field.handler.instructions.types'),(288,288,'en','anomaly.module.posts::field.featured.label.posts','anomaly.module.posts::field.featured.warning.posts','anomaly.module.posts::field.featured.placeholder.posts','anomaly.module.posts::field.featured.instructions.posts'),(193,193,'en','anomaly.module.settings::field.key.label.settings','anomaly.module.settings::field.key.warning.settings','anomaly.module.settings::field.key.placeholder.settings','anomaly.module.settings::field.key.instructions.settings'),(194,194,'en','anomaly.module.settings::field.value.label.settings','anomaly.module.settings::field.value.warning.settings','anomaly.module.settings::field.value.placeholder.settings','anomaly.module.settings::field.value.instructions.settings'),(195,195,'en','anomaly.module.users::field.email.label.users','anomaly.module.users::field.email.warning.users','anomaly.module.users::field.email.placeholder.users','anomaly.module.users::field.email.instructions.users'),(196,196,'en','anomaly.module.users::field.username.label.users','anomaly.module.users::field.username.warning.users','anomaly.module.users::field.username.placeholder.users','anomaly.module.users::field.username.instructions.users'),(197,197,'en','anomaly.module.users::field.password.label.users','anomaly.module.users::field.password.warning.users','anomaly.module.users::field.password.placeholder.users','anomaly.module.users::field.password.instructions.users'),(198,198,'en','anomaly.module.users::field.roles.label.users','anomaly.module.users::field.roles.warning.users','anomaly.module.users::field.roles.placeholder.users','anomaly.module.users::field.roles.instructions.users'),(199,199,'en','anomaly.module.users::field.display_name.label.users','anomaly.module.users::field.display_name.warning.users','anomaly.module.users::field.display_name.placeholder.users','anomaly.module.users::field.display_name.instructions.users'),(200,200,'en','anomaly.module.users::field.first_name.label.users','anomaly.module.users::field.first_name.warning.users','anomaly.module.users::field.first_name.placeholder.users','anomaly.module.users::field.first_name.instructions.users'),(201,201,'en','anomaly.module.users::field.last_name.label.users','anomaly.module.users::field.last_name.warning.users','anomaly.module.users::field.last_name.placeholder.users','anomaly.module.users::field.last_name.instructions.users'),(202,202,'en','anomaly.module.users::field.activated.label.users','anomaly.module.users::field.activated.warning.users','anomaly.module.users::field.activated.placeholder.users','anomaly.module.users::field.activated.instructions.users'),(203,203,'en','anomaly.module.users::field.enabled.label.users','anomaly.module.users::field.enabled.warning.users','anomaly.module.users::field.enabled.placeholder.users','anomaly.module.users::field.enabled.instructions.users'),(204,204,'en','anomaly.module.users::field.permissions.label.users','anomaly.module.users::field.permissions.warning.users','anomaly.module.users::field.permissions.placeholder.users','anomaly.module.users::field.permissions.instructions.users'),(205,205,'en','anomaly.module.users::field.last_login_at.label.users','anomaly.module.users::field.last_login_at.warning.users','anomaly.module.users::field.last_login_at.placeholder.users','anomaly.module.users::field.last_login_at.instructions.users'),(206,206,'en','anomaly.module.users::field.remember_token.label.users','anomaly.module.users::field.remember_token.warning.users','anomaly.module.users::field.remember_token.placeholder.users','anomaly.module.users::field.remember_token.instructions.users'),(207,207,'en','anomaly.module.users::field.activation_code.label.users','anomaly.module.users::field.activation_code.warning.users','anomaly.module.users::field.activation_code.placeholder.users','anomaly.module.users::field.activation_code.instructions.users'),(208,208,'en','anomaly.module.users::field.reset_code.label.users','anomaly.module.users::field.reset_code.warning.users','anomaly.module.users::field.reset_code.placeholder.users','anomaly.module.users::field.reset_code.instructions.users'),(209,209,'en','anomaly.module.users::field.last_activity_at.label.users','anomaly.module.users::field.last_activity_at.warning.users','anomaly.module.users::field.last_activity_at.placeholder.users','anomaly.module.users::field.last_activity_at.instructions.users'),(210,210,'en','anomaly.module.users::field.ip_address.label.users','anomaly.module.users::field.ip_address.warning.users','anomaly.module.users::field.ip_address.placeholder.users','anomaly.module.users::field.ip_address.instructions.users'),(211,211,'en','anomaly.module.users::field.name.label.roles','anomaly.module.users::field.name.warning.roles','anomaly.module.users::field.name.placeholder.roles','anomaly.module.users::field.name.instructions.roles'),(212,212,'en','anomaly.module.users::field.slug.label.roles','anomaly.module.users::field.slug.warning.roles','anomaly.module.users::field.slug.placeholder.roles','anomaly.module.users::field.slug.instructions.roles'),(213,213,'en','anomaly.module.users::field.description.label.roles','anomaly.module.users::field.description.warning.roles','anomaly.module.users::field.description.placeholder.roles','anomaly.module.users::field.description.instructions.roles'),(214,214,'en','anomaly.module.users::field.permissions.label.roles','anomaly.module.users::field.permissions.warning.roles','anomaly.module.users::field.permissions.placeholder.roles','anomaly.module.users::field.permissions.instructions.roles'),(215,215,'en','anomaly.extension.page_link_type::field.title.label.pages','anomaly.extension.page_link_type::field.title.warning.pages','anomaly.extension.page_link_type::field.title.placeholder.pages','anomaly.extension.page_link_type::field.title.instructions.pages'),(216,216,'en','anomaly.extension.page_link_type::field.page.label.pages','anomaly.extension.page_link_type::field.page.warning.pages','anomaly.extension.page_link_type::field.page.placeholder.pages','anomaly.extension.page_link_type::field.page.instructions.pages'),(217,217,'en','anomaly.extension.page_link_type::field.description.label.pages','anomaly.extension.page_link_type::field.description.warning.pages','anomaly.extension.page_link_type::field.description.placeholder.pages','anomaly.extension.page_link_type::field.description.instructions.pages'),(218,218,'en','anomaly.extension.url_link_type::field.title.label.urls','anomaly.extension.url_link_type::field.title.warning.urls','anomaly.extension.url_link_type::field.title.placeholder.urls','anomaly.extension.url_link_type::field.title.instructions.urls'),(219,219,'en','anomaly.extension.url_link_type::field.url.label.urls','anomaly.extension.url_link_type::field.url.warning.urls','anomaly.extension.url_link_type::field.url.placeholder.urls','anomaly.extension.url_link_type::field.url.instructions.urls'),(220,220,'en','anomaly.extension.url_link_type::field.description.label.urls','anomaly.extension.url_link_type::field.description.warning.urls','anomaly.extension.url_link_type::field.description.placeholder.urls','anomaly.extension.url_link_type::field.description.instructions.urls'),(221,221,'zh-cn',NULL,NULL,NULL,NULL),(292,292,'en','anomaly.module.posts::field.slug.label.types','anomaly.module.posts::field.slug.warning.types','anomaly.module.posts::field.slug.placeholder.types','anomaly.module.posts::field.slug.instructions.types'),(293,293,'en','anomaly.module.posts::field.layout.label.types','anomaly.module.posts::field.layout.warning.types','anomaly.module.posts::field.layout.placeholder.types','anomaly.module.posts::field.layout.instructions.types'),(296,296,'zh-cn',NULL,NULL,NULL,NULL),(297,297,'zh-cn',NULL,NULL,NULL,NULL),(298,298,'zh-cn',NULL,NULL,NULL,NULL),(299,299,'zh-cn',NULL,NULL,NULL,NULL),(300,300,'zh-cn',NULL,NULL,NULL,NULL),(301,301,'zh-cn',NULL,NULL,NULL,NULL),(302,302,'zh-cn',NULL,NULL,NULL,NULL),(303,303,'zh-cn',NULL,NULL,NULL,NULL),(304,304,'zh-cn',NULL,NULL,NULL,NULL),(305,305,'zh-cn',NULL,NULL,NULL,NULL),(306,306,'zh-cn',NULL,NULL,NULL,NULL),(307,307,'zh-cn',NULL,NULL,NULL,NULL),(309,309,'en','fannan.module.test::field.name.label.test','fannan.module.test::field.name.warning.test','fannan.module.test::field.name.placeholder.test','fannan.module.test::field.name.instructions.test'),(310,310,'en','fannan.module.test::field.num.label.test','fannan.module.test::field.num.warning.test','fannan.module.test::field.num.placeholder.test','fannan.module.test::field.num.instructions.test'),(2516,2517,'en','fannan.module.members::field.withdraw_amount.label.withdraw','fannan.module.members::field.withdraw_amount.warning.withdraw','fannan.module.members::field.withdraw_amount.placeholder.withdraw','fannan.module.members::field.withdraw_amount.instructions.withdraw'),(2508,2509,'en','fannan.module.members::field.repayment_date.label.repayment','fannan.module.members::field.repayment_date.warning.repayment','fannan.module.members::field.repayment_date.placeholder.repayment','fannan.module.members::field.repayment_date.instructions.repayment'),(2509,2510,'en','fannan.module.members::field.repayment_status.label.repayment','fannan.module.members::field.repayment_status.warning.repayment','fannan.module.members::field.repayment_status.placeholder.repayment','fannan.module.members::field.repayment_status.instructions.repayment'),(2510,2511,'en','fannan.module.members::field.repayment_loan.label.repayment','fannan.module.members::field.repayment_loan.warning.repayment','fannan.module.members::field.repayment_loan.placeholder.repayment','fannan.module.members::field.repayment_loan.instructions.repayment'),(2511,2512,'en','fannan.module.members::field.repayment_member_id.label.repayment','fannan.module.members::field.repayment_member_id.warning.repayment','fannan.module.members::field.repayment_member_id.placeholder.repayment','fannan.module.members::field.repayment_member_id.instructions.repayment'),(2512,2513,'en','fannan.module.members::field.repayment_sn.label.repayment','fannan.module.members::field.repayment_sn.warning.repayment','fannan.module.members::field.repayment_sn.placeholder.repayment','fannan.module.members::field.repayment_sn.instructions.repayment'),(2513,2514,'en','fannan.module.members::field.repayment_loan_name.label.repayment','fannan.module.members::field.repayment_loan_name.warning.repayment','fannan.module.members::field.repayment_loan_name.placeholder.repayment','fannan.module.members::field.repayment_loan_name.instructions.repayment'),(2514,2515,'en','fannan.module.members::field.repayment_loan_card.label.repayment','fannan.module.members::field.repayment_loan_card.warning.repayment','fannan.module.members::field.repayment_loan_card.placeholder.repayment','fannan.module.members::field.repayment_loan_card.instructions.repayment'),(2515,2516,'en','fannan.module.members::field.repayment_mobile.label.repayment','fannan.module.members::field.repayment_mobile.warning.repayment','fannan.module.members::field.repayment_mobile.placeholder.repayment','fannan.module.members::field.repayment_mobile.instructions.repayment'),(2517,2518,'en','fannan.module.members::field.withdraw_bank.label.withdraw','fannan.module.members::field.withdraw_bank.warning.withdraw','fannan.module.members::field.withdraw_bank.placeholder.withdraw','fannan.module.members::field.withdraw_bank.instructions.withdraw'),(2518,2519,'en','fannan.module.members::field.withdraw_name.label.withdraw','fannan.module.members::field.withdraw_name.warning.withdraw','fannan.module.members::field.withdraw_name.placeholder.withdraw','fannan.module.members::field.withdraw_name.instructions.withdraw'),(2519,2520,'en','fannan.module.members::field.withdraw_card.label.withdraw','fannan.module.members::field.withdraw_card.warning.withdraw','fannan.module.members::field.withdraw_card.placeholder.withdraw','fannan.module.members::field.withdraw_card.instructions.withdraw'),(2520,2521,'en','fannan.module.members::field.withdraw_bank_card.label.withdraw','fannan.module.members::field.withdraw_bank_card.warning.withdraw','fannan.module.members::field.withdraw_bank_card.placeholder.withdraw','fannan.module.members::field.withdraw_bank_card.instructions.withdraw'),(2521,2522,'en','fannan.module.members::field.withdraw_mobile.label.withdraw','fannan.module.members::field.withdraw_mobile.warning.withdraw','fannan.module.members::field.withdraw_mobile.placeholder.withdraw','fannan.module.members::field.withdraw_mobile.instructions.withdraw'),(2522,2523,'en','fannan.module.members::field.withdraw_member_id.label.withdraw','fannan.module.members::field.withdraw_member_id.warning.withdraw','fannan.module.members::field.withdraw_member_id.placeholder.withdraw','fannan.module.members::field.withdraw_member_id.instructions.withdraw'),(2523,2524,'en','fannan.module.members::field.withdraw_status.label.withdraw','fannan.module.members::field.withdraw_status.warning.withdraw','fannan.module.members::field.withdraw_status.placeholder.withdraw','fannan.module.members::field.withdraw_status.instructions.withdraw'),(2507,2508,'en','fannan.module.members::field.repayment_amount.label.repayment','fannan.module.members::field.repayment_amount.warning.repayment','fannan.module.members::field.repayment_amount.placeholder.repayment','fannan.module.members::field.repayment_amount.instructions.repayment'),(2506,2507,'en','fannan.module.members::field.loan_member_id.label.loan','fannan.module.members::field.loan_member_id.warning.loan','fannan.module.members::field.loan_member_id.placeholder.loan','fannan.module.members::field.loan_member_id.instructions.loan'),(2505,2506,'en','fannan.module.members::field.loan_mobile.label.loan','fannan.module.members::field.loan_mobile.warning.loan','fannan.module.members::field.loan_mobile.placeholder.loan','fannan.module.members::field.loan_mobile.instructions.loan'),(2504,2505,'en','fannan.module.members::field.loan_bz.label.loan','fannan.module.members::field.loan_bz.warning.loan','fannan.module.members::field.loan_bz.placeholder.loan','fannan.module.members::field.loan_bz.instructions.loan'),(2503,2504,'en','fannan.module.members::field.loan_term_date.label.loan','fannan.module.members::field.loan_term_date.warning.loan','fannan.module.members::field.loan_term_date.placeholder.loan','fannan.module.members::field.loan_term_date.instructions.loan'),(2502,2503,'en','fannan.module.members::field.loan_repayment_date.label.loan','fannan.module.members::field.loan_repayment_date.warning.loan','fannan.module.members::field.loan_repayment_date.placeholder.loan','fannan.module.members::field.loan_repayment_date.instructions.loan'),(2501,2502,'en','fannan.module.members::field.loan_date.label.loan','fannan.module.members::field.loan_date.warning.loan','fannan.module.members::field.loan_date.placeholder.loan','fannan.module.members::field.loan_date.instructions.loan'),(2494,2495,'en','fannan.module.members::field.gold_mobile.label.gold','fannan.module.members::field.gold_mobile.warning.gold','fannan.module.members::field.gold_mobile.placeholder.gold','fannan.module.members::field.gold_mobile.instructions.gold'),(2495,2496,'en','fannan.module.members::field.gold_member_id.label.gold','fannan.module.members::field.gold_member_id.warning.gold','fannan.module.members::field.gold_member_id.placeholder.gold','fannan.module.members::field.gold_member_id.instructions.gold'),(2496,2497,'en','fannan.module.members::field.loan_name.label.loan','fannan.module.members::field.loan_name.warning.loan','fannan.module.members::field.loan_name.placeholder.loan','fannan.module.members::field.loan_name.instructions.loan'),(2497,2498,'en','fannan.module.members::field.loan_id_card.label.loan','fannan.module.members::field.loan_id_card.warning.loan','fannan.module.members::field.loan_id_card.placeholder.loan','fannan.module.members::field.loan_id_card.instructions.loan'),(2498,2499,'en','fannan.module.members::field.loan_amount.label.loan','fannan.module.members::field.loan_amount.warning.loan','fannan.module.members::field.loan_amount.placeholder.loan','fannan.module.members::field.loan_amount.instructions.loan'),(2499,2500,'en','fannan.module.members::field.loan_order_sn.label.loan','fannan.module.members::field.loan_order_sn.warning.loan','fannan.module.members::field.loan_order_sn.placeholder.loan','fannan.module.members::field.loan_order_sn.instructions.loan'),(2500,2501,'en','fannan.module.members::field.loan_status.label.loan','fannan.module.members::field.loan_status.warning.loan','fannan.module.members::field.loan_status.placeholder.loan','fannan.module.members::field.loan_status.instructions.loan'),(2489,2490,'en','fannan.module.members::field.integral_summary.label.integral','fannan.module.members::field.integral_summary.warning.integral','fannan.module.members::field.integral_summary.placeholder.integral','fannan.module.members::field.integral_summary.instructions.integral'),(2490,2491,'en','fannan.module.members::field.integral_mobile.label.integral','fannan.module.members::field.integral_mobile.warning.integral','fannan.module.members::field.integral_mobile.placeholder.integral','fannan.module.members::field.integral_mobile.instructions.integral'),(2491,2492,'en','fannan.module.members::field.integral_member_id.label.integral','fannan.module.members::field.integral_member_id.warning.integral','fannan.module.members::field.integral_member_id.placeholder.integral','fannan.module.members::field.integral_member_id.instructions.integral'),(2492,2493,'en','fannan.module.members::field.gold_num.label.gold','fannan.module.members::field.gold_num.warning.gold','fannan.module.members::field.gold_num.placeholder.gold','fannan.module.members::field.gold_num.instructions.gold'),(2493,2494,'en','fannan.module.members::field.gold_summary.label.gold','fannan.module.members::field.gold_summary.warning.gold','fannan.module.members::field.gold_summary.placeholder.gold','fannan.module.members::field.gold_summary.instructions.gold'),(2468,2469,'en','fannan.module.members::field.mobile.label.members','fannan.module.members::field.mobile.warning.members','fannan.module.members::field.mobile.placeholder.members','fannan.module.members::field.mobile.instructions.members'),(2470,2471,'en','fannan.module.members::field.openid.label.members','fannan.module.members::field.openid.warning.members','fannan.module.members::field.openid.placeholder.members','fannan.module.members::field.openid.instructions.members'),(2469,2470,'en','fannan.module.members::field.password.label.members','fannan.module.members::field.password.warning.members','fannan.module.members::field.password.placeholder.members','fannan.module.members::field.password.instructions.members'),(2471,2472,'en','fannan.module.members::field.invitation_code.label.members','fannan.module.members::field.invitation_code.warning.members','fannan.module.members::field.invitation_code.placeholder.members','fannan.module.members::field.invitation_code.instructions.members'),(2472,2473,'en','fannan.module.members::field.nickname.label.members','fannan.module.members::field.nickname.warning.members','fannan.module.members::field.nickname.placeholder.members','fannan.module.members::field.nickname.instructions.members'),(2473,2474,'en','fannan.module.members::field.avatar.label.members','fannan.module.members::field.avatar.warning.members','fannan.module.members::field.avatar.placeholder.members','fannan.module.members::field.avatar.instructions.members'),(2474,2475,'en','fannan.module.members::field.grade.label.members','fannan.module.members::field.grade.warning.members','fannan.module.members::field.grade.placeholder.members','fannan.module.members::field.grade.instructions.members'),(2475,2476,'en','fannan.module.members::field.verified_status.label.members','fannan.module.members::field.verified_status.warning.members','fannan.module.members::field.verified_status.placeholder.members','fannan.module.members::field.verified_status.instructions.members'),(2476,2477,'en','fannan.module.members::field.real_name.label.members','fannan.module.members::field.real_name.warning.members','fannan.module.members::field.real_name.placeholder.members','fannan.module.members::field.real_name.instructions.members'),(2477,2478,'en','fannan.module.members::field.id_card.label.members','fannan.module.members::field.id_card.warning.members','fannan.module.members::field.id_card.placeholder.members','fannan.module.members::field.id_card.instructions.members'),(2478,2479,'en','fannan.module.members::field.card_positive_pic.label.members','fannan.module.members::field.card_positive_pic.warning.members','fannan.module.members::field.card_positive_pic.placeholder.members','fannan.module.members::field.card_positive_pic.instructions.members'),(2479,2480,'en','fannan.module.members::field.card_negative_pic.label.members','fannan.module.members::field.card_negative_pic.warning.members','fannan.module.members::field.card_negative_pic.placeholder.members','fannan.module.members::field.card_negative_pic.instructions.members'),(2480,2481,'en','fannan.module.members::field.card_pic.label.members','fannan.module.members::field.card_pic.warning.members','fannan.module.members::field.card_pic.placeholder.members','fannan.module.members::field.card_pic.instructions.members'),(2481,2482,'en','fannan.module.members::field.results.label.members','fannan.module.members::field.results.warning.members','fannan.module.members::field.results.placeholder.members','fannan.module.members::field.results.instructions.members'),(2482,2483,'en','fannan.module.members::field.integral.label.members','fannan.module.members::field.integral.warning.members','fannan.module.members::field.integral.placeholder.members','fannan.module.members::field.integral.instructions.members'),(2483,2484,'en','fannan.module.members::field.gold.label.members','fannan.module.members::field.gold.warning.members','fannan.module.members::field.gold.placeholder.members','fannan.module.members::field.gold.instructions.members'),(2484,2485,'en','fannan.module.members::field.parent_id.label.members','fannan.module.members::field.parent_id.warning.members','fannan.module.members::field.parent_id.placeholder.members','fannan.module.members::field.parent_id.instructions.members'),(2485,2486,'en','fannan.module.members::field.grand_id.label.members','fannan.module.members::field.grand_id.warning.members','fannan.module.members::field.grand_id.placeholder.members','fannan.module.members::field.grand_id.instructions.members'),(2486,2487,'en','fannan.module.members::field.great_grand_id.label.members','fannan.module.members::field.great_grand_id.warning.members','fannan.module.members::field.great_grand_id.placeholder.members','fannan.module.members::field.great_grand_id.instructions.members'),(2487,2488,'en','fannan.module.members::field.qrcode.label.members','fannan.module.members::field.qrcode.warning.members','fannan.module.members::field.qrcode.placeholder.members','fannan.module.members::field.qrcode.instructions.members'),(2488,2489,'en','fannan.module.members::field.integral_num.label.integral','fannan.module.members::field.integral_num.warning.integral','fannan.module.members::field.integral_num.placeholder.integral','fannan.module.members::field.integral_num.instructions.integral'),(2345,2346,'en','fannan.module.lottery::field.grant_ticket_name.label.grant','fannan.module.lottery::field.grant_ticket_name.warning.grant','fannan.module.lottery::field.grant_ticket_name.placeholder.grant','fannan.module.lottery::field.grant_ticket_name.instructions.grant'),(2346,2347,'en','fannan.module.lottery::field.grant_grade.label.grant','fannan.module.lottery::field.grant_grade.warning.grant','fannan.module.lottery::field.grant_grade.placeholder.grant','fannan.module.lottery::field.grant_grade.instructions.grant'),(2337,2338,'en','fannan.module.lottery::field.winning_prize_grade.label.winning','fannan.module.lottery::field.winning_prize_grade.warning.winning','fannan.module.lottery::field.winning_prize_grade.placeholder.winning','fannan.module.lottery::field.winning_prize_grade.instructions.winning'),(2336,2337,'en','fannan.module.lottery::field.winning_member_real_name.label.winning','fannan.module.lottery::field.winning_member_real_name.warning.winning','fannan.module.lottery::field.winning_member_real_name.placeholder.winning','fannan.module.lottery::field.winning_member_real_name.instructions.winning'),(2335,2336,'en','fannan.module.lottery::field.winning_mobile.label.winning','fannan.module.lottery::field.winning_mobile.warning.winning','fannan.module.lottery::field.winning_mobile.placeholder.winning','fannan.module.lottery::field.winning_mobile.instructions.winning'),(2334,2335,'en','fannan.module.lottery::field.winning_member_id.label.winning','fannan.module.lottery::field.winning_member_id.warning.winning','fannan.module.lottery::field.winning_member_id.placeholder.winning','fannan.module.lottery::field.winning_member_id.instructions.winning'),(2333,2334,'en','fannan.module.lottery::field.winning_prize_id.label.winning','fannan.module.lottery::field.winning_prize_id.warning.winning','fannan.module.lottery::field.winning_prize_id.placeholder.winning','fannan.module.lottery::field.winning_prize_id.instructions.winning'),(2326,2327,'en','fannan.module.lottery::field.prize_name.label.prize','fannan.module.lottery::field.prize_name.warning.prize','fannan.module.lottery::field.prize_name.placeholder.prize','fannan.module.lottery::field.prize_name.instructions.prize'),(2327,2328,'en','fannan.module.lottery::field.prize_probability.label.prize','fannan.module.lottery::field.prize_probability.warning.prize','fannan.module.lottery::field.prize_probability.placeholder.prize','fannan.module.lottery::field.prize_probability.instructions.prize'),(2328,2329,'en','fannan.module.lottery::field.prize_num.label.prize','fannan.module.lottery::field.prize_num.warning.prize','fannan.module.lottery::field.prize_num.placeholder.prize','fannan.module.lottery::field.prize_num.instructions.prize'),(2329,2330,'en','fannan.module.lottery::field.prize_lottery_id.label.prize','fannan.module.lottery::field.prize_lottery_id.warning.prize','fannan.module.lottery::field.prize_lottery_id.placeholder.prize','fannan.module.lottery::field.prize_lottery_id.instructions.prize'),(2330,2331,'en','fannan.module.lottery::field.prize_winning_mobile.label.prize','fannan.module.lottery::field.prize_winning_mobile.warning.prize','fannan.module.lottery::field.prize_winning_mobile.placeholder.prize','fannan.module.lottery::field.prize_winning_mobile.instructions.prize'),(2331,2332,'en','fannan.module.lottery::field.prize_description.label.prize','fannan.module.lottery::field.prize_description.warning.prize','fannan.module.lottery::field.prize_description.placeholder.prize','fannan.module.lottery::field.prize_description.instructions.prize'),(2332,2333,'en','fannan.module.lottery::field.winning_lottery_id.label.winning','fannan.module.lottery::field.winning_lottery_id.warning.winning','fannan.module.lottery::field.winning_lottery_id.placeholder.winning','fannan.module.lottery::field.winning_lottery_id.instructions.winning'),(2325,2326,'en','fannan.module.lottery::field.prize_grade.label.prize','fannan.module.lottery::field.prize_grade.warning.prize','fannan.module.lottery::field.prize_grade.placeholder.prize','fannan.module.lottery::field.prize_grade.instructions.prize'),(2324,2325,'en','fannan.module.lottery::field.lottery_rule.label.lottery','fannan.module.lottery::field.lottery_rule.warning.lottery','fannan.module.lottery::field.lottery_rule.placeholder.lottery','fannan.module.lottery::field.lottery_rule.instructions.lottery'),(2323,2324,'en','fannan.module.lottery::field.lottery_description.label.lottery','fannan.module.lottery::field.lottery_description.warning.lottery','fannan.module.lottery::field.lottery_description.placeholder.lottery','fannan.module.lottery::field.lottery_description.instructions.lottery'),(2322,2323,'en','fannan.module.lottery::field.lottery_is_open.label.lottery','fannan.module.lottery::field.lottery_is_open.warning.lottery','fannan.module.lottery::field.lottery_is_open.placeholder.lottery','fannan.module.lottery::field.lottery_is_open.instructions.lottery'),(2321,2322,'en','fannan.module.lottery::field.lottery_is_ticket.label.lottery','fannan.module.lottery::field.lottery_is_ticket.warning.lottery','fannan.module.lottery::field.lottery_is_ticket.placeholder.lottery','fannan.module.lottery::field.lottery_is_ticket.instructions.lottery'),(2320,2321,'en','fannan.module.lottery::field.lottery_times.label.lottery','fannan.module.lottery::field.lottery_times.warning.lottery','fannan.module.lottery::field.lottery_times.placeholder.lottery','fannan.module.lottery::field.lottery_times.instructions.lottery'),(2319,2320,'en','fannan.module.lottery::field.lottery_end.label.lottery','fannan.module.lottery::field.lottery_end.warning.lottery','fannan.module.lottery::field.lottery_end.placeholder.lottery','fannan.module.lottery::field.lottery_end.instructions.lottery'),(2317,2318,'en','fannan.module.lottery::field.lottery_title.label.lottery','fannan.module.lottery::field.lottery_title.warning.lottery','fannan.module.lottery::field.lottery_title.placeholder.lottery','fannan.module.lottery::field.lottery_title.instructions.lottery'),(2318,2319,'en','fannan.module.lottery::field.lottery_start.label.lottery','fannan.module.lottery::field.lottery_start.warning.lottery','fannan.module.lottery::field.lottery_start.placeholder.lottery','fannan.module.lottery::field.lottery_start.instructions.lottery'),(1997,1998,'en','fannan.module.envelopes::field.envelopes_gold_times.label.envelopes','fannan.module.envelopes::field.envelopes_gold_times.warning.envelopes','fannan.module.envelopes::field.envelopes_gold_times.placeholder.envelopes','fannan.module.envelopes::field.envelopes_gold_times.instructions.envelopes'),(1998,1999,'en','fannan.module.envelopes::field.envelopes_diamond_times.label.envelopes','fannan.module.envelopes::field.envelopes_diamond_times.warning.envelopes','fannan.module.envelopes::field.envelopes_diamond_times.placeholder.envelopes','fannan.module.envelopes::field.envelopes_diamond_times.instructions.envelopes'),(1999,2000,'en','fannan.module.envelopes::field.envelopes_is_open.label.envelopes','fannan.module.envelopes::field.envelopes_is_open.warning.envelopes','fannan.module.envelopes::field.envelopes_is_open.placeholder.envelopes','fannan.module.envelopes::field.envelopes_is_open.instructions.envelopes'),(2000,2001,'en','fannan.module.envelopes::field.log_name.label.log','fannan.module.envelopes::field.log_name.warning.log','fannan.module.envelopes::field.log_name.placeholder.log','fannan.module.envelopes::field.log_name.instructions.log'),(2001,2002,'en','fannan.module.envelopes::field.log_mobile.label.log','fannan.module.envelopes::field.log_mobile.warning.log','fannan.module.envelopes::field.log_mobile.placeholder.log','fannan.module.envelopes::field.log_mobile.instructions.log'),(1996,1997,'en','fannan.module.envelopes::field.envelopes_silver_times.label.envelopes','fannan.module.envelopes::field.envelopes_silver_times.warning.envelopes','fannan.module.envelopes::field.envelopes_silver_times.placeholder.envelopes','fannan.module.envelopes::field.envelopes_silver_times.instructions.envelopes'),(1991,1992,'en','fannan.module.envelopes::field.envelopes_amount_min.label.envelopes','fannan.module.envelopes::field.envelopes_amount_min.warning.envelopes','fannan.module.envelopes::field.envelopes_amount_min.placeholder.envelopes','fannan.module.envelopes::field.envelopes_amount_min.instructions.envelopes'),(1992,1993,'en','fannan.module.envelopes::field.envelopes_amount_max.label.envelopes','fannan.module.envelopes::field.envelopes_amount_max.warning.envelopes','fannan.module.envelopes::field.envelopes_amount_max.placeholder.envelopes','fannan.module.envelopes::field.envelopes_amount_max.instructions.envelopes'),(1993,1994,'en','fannan.module.envelopes::field.envelopes_visitor_times.label.envelopes','fannan.module.envelopes::field.envelopes_visitor_times.warning.envelopes','fannan.module.envelopes::field.envelopes_visitor_times.placeholder.envelopes','fannan.module.envelopes::field.envelopes_visitor_times.instructions.envelopes'),(1994,1995,'en','fannan.module.envelopes::field.envelopes_ordinary_times.label.envelopes','fannan.module.envelopes::field.envelopes_ordinary_times.warning.envelopes','fannan.module.envelopes::field.envelopes_ordinary_times.placeholder.envelopes','fannan.module.envelopes::field.envelopes_ordinary_times.instructions.envelopes'),(1995,1996,'en','fannan.module.envelopes::field.envelopes_bronze_times.label.envelopes','fannan.module.envelopes::field.envelopes_bronze_times.warning.envelopes','fannan.module.envelopes::field.envelopes_bronze_times.placeholder.envelopes','fannan.module.envelopes::field.envelopes_bronze_times.instructions.envelopes'),(2524,2525,'en','fannan.module.members::field.message_title.label.message','fannan.module.members::field.message_title.warning.message','fannan.module.members::field.message_title.placeholder.message','fannan.module.members::field.message_title.instructions.message'),(2525,2526,'en','fannan.module.members::field.message_content.label.message','fannan.module.members::field.message_content.warning.message','fannan.module.members::field.message_content.placeholder.message','fannan.module.members::field.message_content.instructions.message'),(2526,2527,'en','fannan.module.members::field.message_member_id.label.message','fannan.module.members::field.message_member_id.warning.message','fannan.module.members::field.message_member_id.placeholder.message','fannan.module.members::field.message_member_id.instructions.message'),(1989,1990,'en','fannan.module.advertising::field.slot_name.label.slot','fannan.module.advertising::field.slot_name.warning.slot','fannan.module.advertising::field.slot_name.placeholder.slot','fannan.module.advertising::field.slot_name.instructions.slot'),(1988,1989,'en','fannan.module.advertising::field.ad_sorting.label.advertising','fannan.module.advertising::field.ad_sorting.warning.advertising','fannan.module.advertising::field.ad_sorting.placeholder.advertising','fannan.module.advertising::field.ad_sorting.instructions.advertising'),(1987,1988,'en','fannan.module.advertising::field.ad_description.label.advertising','fannan.module.advertising::field.ad_description.warning.advertising','fannan.module.advertising::field.ad_description.placeholder.advertising','fannan.module.advertising::field.ad_description.instructions.advertising'),(1986,1987,'en','fannan.module.advertising::field.ad_url.label.advertising','fannan.module.advertising::field.ad_url.warning.advertising','fannan.module.advertising::field.ad_url.placeholder.advertising','fannan.module.advertising::field.ad_url.instructions.advertising'),(1983,1984,'en','fannan.module.advertising::field.ad_title.label.advertising','fannan.module.advertising::field.ad_title.warning.advertising','fannan.module.advertising::field.ad_title.placeholder.advertising','fannan.module.advertising::field.ad_title.instructions.advertising'),(1984,1985,'en','fannan.module.advertising::field.ad_slot.label.advertising','fannan.module.advertising::field.ad_slot.warning.advertising','fannan.module.advertising::field.ad_slot.placeholder.advertising','fannan.module.advertising::field.ad_slot.instructions.advertising'),(1985,1986,'en','fannan.module.advertising::field.ad_image.label.advertising','fannan.module.advertising::field.ad_image.warning.advertising','fannan.module.advertising::field.ad_image.placeholder.advertising','fannan.module.advertising::field.ad_image.instructions.advertising'),(1990,1991,'en','fannan.module.advertising::field.slot_description.label.slot','fannan.module.advertising::field.slot_description.warning.slot','fannan.module.advertising::field.slot_description.placeholder.slot','fannan.module.advertising::field.slot_description.instructions.slot'),(2002,2003,'en','fannan.module.envelopes::field.log_amount.label.log','fannan.module.envelopes::field.log_amount.warning.log','fannan.module.envelopes::field.log_amount.placeholder.log','fannan.module.envelopes::field.log_amount.instructions.log'),(2003,2004,'en','fannan.module.envelopes::field.log_member_id.label.log','fannan.module.envelopes::field.log_member_id.warning.log','fannan.module.envelopes::field.log_member_id.placeholder.log','fannan.module.envelopes::field.log_member_id.instructions.log'),(2104,2105,'en','fannan.module.transaction::field.trade_payment_time.label.transaction','fannan.module.transaction::field.trade_payment_time.warning.transaction','fannan.module.transaction::field.trade_payment_time.placeholder.transaction','fannan.module.transaction::field.trade_payment_time.instructions.transaction'),(2102,2103,'en','fannan.module.transaction::field.trade_mobile.label.transaction','fannan.module.transaction::field.trade_mobile.warning.transaction','fannan.module.transaction::field.trade_mobile.placeholder.transaction','fannan.module.transaction::field.trade_mobile.instructions.transaction'),(2103,2104,'en','fannan.module.transaction::field.trade_status.label.transaction','fannan.module.transaction::field.trade_status.warning.transaction','fannan.module.transaction::field.trade_status.placeholder.transaction','fannan.module.transaction::field.trade_status.instructions.transaction'),(2101,2102,'en','fannan.module.transaction::field.trade_member.label.transaction','fannan.module.transaction::field.trade_member.warning.transaction','fannan.module.transaction::field.trade_member.placeholder.transaction','fannan.module.transaction::field.trade_member.instructions.transaction'),(2100,2101,'en','fannan.module.transaction::field.trade_project.label.transaction','fannan.module.transaction::field.trade_project.warning.transaction','fannan.module.transaction::field.trade_project.placeholder.transaction','fannan.module.transaction::field.trade_project.instructions.transaction'),(2099,2100,'en','fannan.module.transaction::field.trade_no.label.transaction','fannan.module.transaction::field.trade_no.warning.transaction','fannan.module.transaction::field.trade_no.placeholder.transaction','fannan.module.transaction::field.trade_no.instructions.transaction'),(2098,2099,'en','fannan.module.transaction::field.trade_payment_method.label.transaction','fannan.module.transaction::field.trade_payment_method.warning.transaction','fannan.module.transaction::field.trade_payment_method.placeholder.transaction','fannan.module.transaction::field.trade_payment_method.instructions.transaction'),(2096,2097,'en','fannan.module.transaction::field.trade_out_no.label.transaction','fannan.module.transaction::field.trade_out_no.warning.transaction','fannan.module.transaction::field.trade_out_no.placeholder.transaction','fannan.module.transaction::field.trade_out_no.instructions.transaction'),(2097,2098,'en','fannan.module.transaction::field.trade_amount.label.transaction','fannan.module.transaction::field.trade_amount.warning.transaction','fannan.module.transaction::field.trade_amount.placeholder.transaction','fannan.module.transaction::field.trade_amount.instructions.transaction'),(2347,2348,'en','fannan.module.lottery::field.grant_valid_period.label.grant','fannan.module.lottery::field.grant_valid_period.warning.grant','fannan.module.lottery::field.grant_valid_period.placeholder.grant','fannan.module.lottery::field.grant_valid_period.instructions.grant'),(2338,2339,'en','fannan.module.lottery::field.winning_prize_name.label.winning','fannan.module.lottery::field.winning_prize_name.warning.winning','fannan.module.lottery::field.winning_prize_name.placeholder.winning','fannan.module.lottery::field.winning_prize_name.instructions.winning'),(2343,2344,'en','fannan.module.lottery::field.ticket_member_id.label.ticket','fannan.module.lottery::field.ticket_member_id.warning.ticket','fannan.module.lottery::field.ticket_member_id.placeholder.ticket','fannan.module.lottery::field.ticket_member_id.instructions.ticket'),(2344,2345,'en','fannan.module.lottery::field.ticket_mobile.label.ticket','fannan.module.lottery::field.ticket_mobile.warning.ticket','fannan.module.lottery::field.ticket_mobile.placeholder.ticket','fannan.module.lottery::field.ticket_mobile.instructions.ticket'),(2342,2343,'en','fannan.module.lottery::field.ticket_is_use.label.ticket','fannan.module.lottery::field.ticket_is_use.warning.ticket','fannan.module.lottery::field.ticket_is_use.placeholder.ticket','fannan.module.lottery::field.ticket_is_use.instructions.ticket'),(2339,2340,'en','fannan.module.lottery::field.winning_status.label.winning','fannan.module.lottery::field.winning_status.warning.winning','fannan.module.lottery::field.winning_status.placeholder.winning','fannan.module.lottery::field.winning_status.instructions.winning'),(2340,2341,'en','fannan.module.lottery::field.ticket_name.label.ticket','fannan.module.lottery::field.ticket_name.warning.ticket','fannan.module.lottery::field.ticket_name.placeholder.ticket','fannan.module.lottery::field.ticket_name.instructions.ticket'),(2341,2342,'en','fannan.module.lottery::field.ticket_valid_period.label.ticket','fannan.module.lottery::field.ticket_valid_period.warning.ticket','fannan.module.lottery::field.ticket_valid_period.placeholder.ticket','fannan.module.lottery::field.ticket_valid_period.instructions.ticket'),(2348,2349,'en','fannan.module.lottery::field.grant_num.label.grant','fannan.module.lottery::field.grant_num.warning.grant','fannan.module.lottery::field.grant_num.placeholder.grant','fannan.module.lottery::field.grant_num.instructions.grant'),(2527,2528,'en','fannan.module.members::field.message_mobile.label.message','fannan.module.members::field.message_mobile.warning.message','fannan.module.members::field.message_mobile.placeholder.message','fannan.module.members::field.message_mobile.instructions.message');

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
) ENGINE=MyISAM AUTO_INCREMENT=2531 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `default_streams_fields` */

insert  into `default_streams_fields`(`id`,`namespace`,`slug`,`type`,`config`,`locked`) values (89,'configuration','value','anomaly.field_type.textarea','a:0:{}',1),(88,'configuration','key','anomaly.field_type.text','a:0:{}',1),(87,'configuration','scope','anomaly.field_type.text','a:0:{}',1),(98,'dashboard','dashboard','anomaly.field_type.relationship','a:1:{s:7:\"related\";s:48:\"Anomaly\\DashboardModule\\Dashboard\\DashboardModel\";}',1),(97,'dashboard','pinned','anomaly.field_type.boolean','a:0:{}',1),(94,'dashboard','title','anomaly.field_type.text','a:0:{}',1),(95,'dashboard','extension','anomaly.field_type.addon','a:2:{s:4:\"type\";s:9:\"extension\";s:6:\"search\";s:34:\"anomaly.module.dashboard::widget.*\";}',1),(96,'dashboard','column','anomaly.field_type.integer','a:2:{s:3:\"min\";i:1;s:13:\"default_value\";i:1;}',1),(93,'dashboard','layout','anomaly.field_type.select','a:1:{s:7:\"options\";a:9:{i:24;s:48:\"anomaly.module.dashboard::field.layout.option.24\";s:5:\"12-12\";s:51:\"anomaly.module.dashboard::field.layout.option.12-12\";s:4:\"16-8\";s:50:\"anomaly.module.dashboard::field.layout.option.16-8\";s:4:\"8-16\";s:50:\"anomaly.module.dashboard::field.layout.option.8-16\";s:5:\"8-8-8\";s:51:\"anomaly.module.dashboard::field.layout.option.8-8-8\";s:6:\"6-12-6\";s:52:\"anomaly.module.dashboard::field.layout.option.6-12-6\";s:6:\"12-6-6\";s:52:\"anomaly.module.dashboard::field.layout.option.12-6-6\";s:6:\"6-6-12\";s:52:\"anomaly.module.dashboard::field.layout.option.6-6-12\";s:7:\"6-6-6-6\";s:53:\"anomaly.module.dashboard::field.layout.option.6-6-6-6\";}}',1),(92,'dashboard','description','anomaly.field_type.textarea','a:0:{}',1),(90,'dashboard','name','anomaly.field_type.text','a:0:{}',1),(91,'dashboard','slug','anomaly.field_type.slug','a:1:{s:7:\"slugify\";s:4:\"name\";}',1),(109,'files','extension','anomaly.field_type.text','a:0:{}',1),(108,'files','keywords','anomaly.field_type.tags','a:0:{}',1),(107,'files','allowed_types','anomaly.field_type.tags','a:0:{}',1),(105,'files','entry','anomaly.field_type.polymorphic','a:0:{}',1),(106,'files','description','anomaly.field_type.textarea','a:0:{}',1),(104,'files','disk','anomaly.field_type.relationship','a:1:{s:7:\"related\";s:34:\"Anomaly\\FilesModule\\Disk\\DiskModel\";}',1),(103,'files','folder','anomaly.field_type.relationship','a:1:{s:7:\"related\";s:38:\"Anomaly\\FilesModule\\Folder\\FolderModel\";}',1),(102,'files','adapter','anomaly.field_type.addon','a:2:{s:4:\"type\";s:10:\"extensions\";s:6:\"search\";s:31:\"anomaly.module.files::adapter.*\";}',1),(101,'files','slug','anomaly.field_type.slug','a:1:{s:7:\"slugify\";s:4:\"name\";}',1),(100,'files','name','anomaly.field_type.text','a:0:{}',1),(123,'navigation','target','anomaly.field_type.select','a:2:{s:13:\"default_value\";s:5:\"_self\";s:7:\"options\";a:2:{s:5:\"_self\";s:51:\"anomaly.module.navigation::field.target.option.self\";s:6:\"_blank\";s:52:\"anomaly.module.navigation::field.target.option.blank\";}}',1),(122,'navigation','type','anomaly.field_type.addon','a:2:{s:4:\"type\";s:9:\"extension\";s:6:\"search\";s:38:\"anomaly.module.navigation::link_type.*\";}',1),(121,'navigation','allowed_roles','anomaly.field_type.multiple','a:1:{s:7:\"related\";s:34:\"Anomaly\\UsersModule\\Role\\RoleModel\";}',1),(120,'navigation','parent','anomaly.field_type.relationship','a:1:{s:7:\"related\";s:39:\"Anomaly\\NavigationModule\\Link\\LinkModel\";}',1),(119,'navigation','menu','anomaly.field_type.relationship','a:1:{s:7:\"related\";s:39:\"Anomaly\\NavigationModule\\Menu\\MenuModel\";}',1),(118,'navigation','slug','anomaly.field_type.slug','a:1:{s:7:\"slugify\";s:4:\"name\";}',1),(114,'navigation','name','anomaly.field_type.text','a:0:{}',1),(115,'navigation','class','anomaly.field_type.text','a:0:{}',1),(116,'navigation','description','anomaly.field_type.textarea','a:0:{}',1),(117,'navigation','entry','anomaly.field_type.polymorphic','a:0:{}',1),(139,'pages','handler','anomaly.field_type.addon','a:3:{s:4:\"type\";s:9:\"extension\";s:6:\"search\";s:31:\"anomaly.module.pages::handler.*\";s:13:\"default_value\";s:38:\"anomaly.extension.default_page_handler\";}',1),(138,'pages','type','anomaly.field_type.relationship','a:1:{s:7:\"related\";s:34:\"Anomaly\\PagesModule\\Type\\TypeModel\";}',1),(137,'pages','theme_layout','anomaly.field_type.select','a:2:{s:13:\"default_value\";s:27:\"theme::layouts/default.twig\";s:7:\"handler\";s:46:\"Anomaly\\SelectFieldType\\Handler\\Layouts@handle\";}',1),(136,'pages','parent','anomaly.field_type.relationship','a:1:{s:7:\"related\";s:34:\"Anomaly\\PagesModule\\Page\\PageModel\";}',1),(135,'pages','allowed_roles','anomaly.field_type.multiple','a:1:{s:7:\"related\";s:34:\"Anomaly\\UsersModule\\Role\\RoleModel\";}',1),(134,'pages','layout','anomaly.field_type.editor','a:2:{s:13:\"default_value\";s:25:\"<h1>{{ page.title }}</h1>\";s:4:\"mode\";s:4:\"twig\";}',1),(132,'pages','meta_description','anomaly.field_type.textarea','a:0:{}',1),(133,'pages','meta_keywords','anomaly.field_type.tags','a:0:{}',1),(131,'pages','meta_title','anomaly.field_type.text','a:0:{}',1),(128,'pages','path','anomaly.field_type.text','a:0:{}',1),(129,'pages','enabled','anomaly.field_type.boolean','a:1:{s:13:\"default_value\";b:1;}',1),(130,'pages','home','anomaly.field_type.boolean','a:1:{s:13:\"default_value\";b:0;}',1),(127,'pages','content','anomaly.field_type.wysiwyg','a:0:{}',0),(126,'pages','slug','anomaly.field_type.slug','a:2:{s:7:\"slugify\";s:5:\"title\";s:4:\"type\";s:1:\"-\";}',1),(125,'pages','title','anomaly.field_type.text','a:0:{}',1),(124,'pages','str_id','anomaly.field_type.text','a:0:{}',1),(252,'posts','summary','anomaly.field_type.textarea','a:0:{}',1),(253,'posts','description','anomaly.field_type.textarea','a:0:{}',1),(254,'posts','publish_at','anomaly.field_type.datetime','a:0:{}',1),(255,'posts','entry','anomaly.field_type.polymorphic','a:0:{}',1),(256,'posts','author','anomaly.field_type.relationship','a:2:{s:4:\"mode\";s:6:\"lookup\";s:7:\"related\";s:34:\"Anomaly\\UsersModule\\User\\UserModel\";}',1),(257,'posts','layout','anomaly.field_type.editor','a:2:{s:13:\"default_value\";s:22:\"{{ post.content|raw }}\";s:4:\"mode\";s:4:\"twig\";}',1),(258,'posts','category','anomaly.field_type.relationship','a:1:{s:7:\"related\";s:42:\"Anomaly\\PostsModule\\Category\\CategoryModel\";}',1),(259,'posts','enabled','anomaly.field_type.boolean','a:1:{s:13:\"default_value\";b:0;}',1),(260,'posts','featured','anomaly.field_type.boolean','a:1:{s:13:\"default_value\";b:0;}',1),(261,'posts','meta_title','anomaly.field_type.text','a:0:{}',1),(262,'posts','meta_description','anomaly.field_type.textarea','a:0:{}',1),(263,'posts','meta_keywords','anomaly.field_type.tags','a:0:{}',1),(264,'posts','ttl','anomaly.field_type.integer','a:3:{s:3:\"min\";i:0;s:4:\"step\";i:1;s:4:\"page\";i:5;}',1),(265,'posts','theme_layout','anomaly.field_type.select','a:1:{s:7:\"handler\";s:39:\"Anomaly\\SelectFieldType\\Handler\\Layouts\";}',1),(266,'posts','parent','anomaly.field_type.relationship','a:1:{s:7:\"related\";s:42:\"Anomaly\\PostsModule\\Category\\CategoryModel\";}',1),(267,'posts','image','anomaly.field_type.file','a:3:{s:7:\"folders\";a:1:{i:0;s:1:\"1\";}s:3:\"max\";N;s:4:\"mode\";s:7:\"default\";}',0),(167,'preferences','key','anomaly.field_type.text','a:0:{}',1),(166,'preferences','user','anomaly.field_type.relationship','a:2:{s:4:\"mode\";s:6:\"lookup\";s:7:\"related\";s:34:\"Anomaly\\UsersModule\\User\\UserModel\";}',1),(170,'redirects','to','anomaly.field_type.text','a:0:{}',1),(171,'redirects','status','anomaly.field_type.select','a:2:{s:13:\"default_value\";s:3:\"301\";s:7:\"options\";a:2:{i:301;s:49:\"anomaly.module.redirects::field.status.option.301\";i:302;s:49:\"anomaly.module.redirects::field.status.option.302\";}}',1),(169,'redirects','from','anomaly.field_type.text','a:0:{}',1),(99,'dashboard','allowed_roles','anomaly.field_type.multiple','a:1:{s:7:\"related\";s:34:\"Anomaly\\UsersModule\\Role\\RoleModel\";}',1),(110,'files','width','anomaly.field_type.text','a:0:{}',1),(111,'files','height','anomaly.field_type.text','a:0:{}',1),(112,'files','mime_type','anomaly.field_type.text','a:0:{}',1),(113,'files','size','anomaly.field_type.integer','a:0:{}',1),(140,'pages','visible','anomaly.field_type.boolean','a:1:{s:13:\"default_value\";b:1;}',1),(141,'pages','exact','anomaly.field_type.boolean','a:1:{s:13:\"default_value\";b:1;}',1),(142,'pages','entry','anomaly.field_type.polymorphic','a:0:{}',1),(143,'pages','name','anomaly.field_type.text','a:0:{}',1),(144,'pages','description','anomaly.field_type.textarea','a:0:{}',1),(251,'posts','tags','anomaly.field_type.tags','a:0:{}',1),(250,'posts','type','anomaly.field_type.relationship','a:1:{s:7:\"related\";s:34:\"Anomaly\\PostsModule\\Type\\TypeModel\";}',1),(249,'posts','content','anomaly.field_type.wysiwyg','a:0:{}',0),(248,'posts','slug','anomaly.field_type.slug','a:2:{s:7:\"slugify\";s:5:\"title\";s:4:\"type\";s:1:\"-\";}',1),(168,'preferences','value','anomaly.field_type.textarea','a:0:{}',1),(172,'redirects','secure','anomaly.field_type.boolean','a:0:{}',1),(173,'settings','key','anomaly.field_type.text','a:0:{}',1),(174,'settings','value','anomaly.field_type.textarea','a:0:{}',1),(175,'users','email','anomaly.field_type.email','a:0:{}',1),(176,'users','username','anomaly.field_type.slug','a:2:{s:4:\"type\";s:1:\"_\";s:9:\"lowercase\";b:0;}',1),(177,'users','password','anomaly.field_type.text','a:1:{s:4:\"type\";s:8:\"password\";}',1),(178,'users','remember_token','anomaly.field_type.text','a:0:{}',1),(179,'users','ip_address','anomaly.field_type.text','a:0:{}',1),(180,'users','last_login_at','anomaly.field_type.datetime','a:0:{}',1),(181,'users','last_activity_at','anomaly.field_type.datetime','a:0:{}',1),(182,'users','permissions','anomaly.field_type.checkboxes','a:0:{}',1),(183,'users','display_name','anomaly.field_type.text','a:0:{}',1),(184,'users','first_name','anomaly.field_type.text','a:0:{}',1),(185,'users','last_name','anomaly.field_type.text','a:0:{}',1),(186,'users','name','anomaly.field_type.text','a:0:{}',1),(187,'users','description','anomaly.field_type.textarea','a:0:{}',1),(188,'users','reset_code','anomaly.field_type.text','a:0:{}',1),(189,'users','reset_code_expires_at','anomaly.field_type.datetime','a:0:{}',1),(190,'users','activation_code','anomaly.field_type.text','a:0:{}',1),(191,'users','activation_code_expires_at','anomaly.field_type.datetime','a:0:{}',1),(192,'users','activated','anomaly.field_type.boolean','a:1:{s:13:\"default_value\";b:0;}',1),(193,'users','enabled','anomaly.field_type.boolean','a:1:{s:13:\"default_value\";b:1;}',1),(194,'users','slug','anomaly.field_type.slug','a:1:{s:7:\"slugify\";s:4:\"name\";}',1),(195,'users','roles','anomaly.field_type.multiple','a:1:{s:7:\"related\";s:34:\"Anomaly\\UsersModule\\Role\\RoleModel\";}',1),(196,'page_link_type','title','anomaly.field_type.text','a:0:{}',1),(197,'page_link_type','page','anomaly.field_type.relationship','a:2:{s:4:\"mode\";s:6:\"lookup\";s:7:\"related\";s:34:\"Anomaly\\PagesModule\\Page\\PageModel\";}',1),(198,'page_link_type','description','anomaly.field_type.textarea','a:0:{}',1),(199,'url_link_type','title','anomaly.field_type.text','a:0:{}',1),(200,'url_link_type','url','anomaly.field_type.text','a:0:{}',1),(201,'url_link_type','description','anomaly.field_type.textarea','a:0:{}',1),(247,'posts','title','anomaly.field_type.text','a:0:{}',1),(245,'posts','str_id','anomaly.field_type.text','a:0:{}',1),(246,'posts','name','anomaly.field_type.text','a:0:{}',1),(268,'posts','atlas','anomaly.field_type.files','a:4:{s:7:\"folders\";a:1:{i:0;s:1:\"1\";}s:3:\"min\";N;s:3:\"max\";N;s:4:\"mode\";s:7:\"default\";}',0),(269,'posts','videourl','anomaly.field_type.url','a:1:{s:13:\"default_value\";N;}',0),(270,'posts','video','anomaly.field_type.file','a:3:{s:7:\"folders\";a:1:{i:0;s:1:\"3\";}s:3:\"max\";N;s:4:\"mode\";s:7:\"default\";}',0),(271,'posts','voice','anomaly.field_type.file','a:3:{s:7:\"folders\";a:1:{i:0;s:1:\"4\";}s:3:\"max\";N;s:4:\"mode\";s:7:\"default\";}',0),(273,'test','name','anomaly.field_type.text','a:0:{}',1),(274,'test','num','anomaly.field_type.integer','a:5:{s:9:\"separator\";s:1:\",\";s:3:\"min\";i:0;s:3:\"max\";i:100;s:4:\"step\";i:5;s:13:\"default_value\";i:50;}',1),(2524,'members','withdraw_mobile','anomaly.field_type.text','a:2:{s:4:\"type\";s:4:\"text\";s:3:\"min\";i:2;}',1),(2522,'members','withdraw_card','anomaly.field_type.text','a:2:{s:4:\"type\";s:4:\"text\";s:3:\"min\";i:2;}',1),(2523,'members','withdraw_bank_card','anomaly.field_type.text','a:2:{s:4:\"type\";s:4:\"text\";s:3:\"min\";i:2;}',1),(2521,'members','withdraw_name','anomaly.field_type.text','a:2:{s:4:\"type\";s:4:\"text\";s:3:\"min\";i:2;}',1),(2520,'members','withdraw_bank','anomaly.field_type.text','a:2:{s:4:\"type\";s:4:\"text\";s:3:\"min\";i:2;}',1),(2519,'members','withdraw_amount','anomaly.field_type.decimal','a:6:{s:13:\"default_value\";N;s:9:\"separator\";s:1:\",\";s:5:\"point\";s:1:\".\";s:8:\"decimals\";i:2;s:3:\"min\";i:0;s:3:\"max\";N;}',1),(2518,'members','repayment_loan_card','anomaly.field_type.text','a:2:{s:4:\"type\";s:4:\"text\";s:3:\"min\";i:2;}',1),(1896,'members','is_verified','anomaly.field_type.boolean','a:6:{s:13:\"default_value\";b:0;s:8:\"on_color\";s:7:\"success\";s:9:\"off_color\";s:6:\"danger\";s:7:\"on_text\";s:3:\"YES\";s:8:\"off_text\";s:2:\"NO\";s:4:\"mode\";N;}',1),(2517,'members','repayment_loan_name','anomaly.field_type.text','a:2:{s:4:\"type\";s:4:\"text\";s:3:\"min\";i:2;}',1),(2515,'members','repayment_mobile','anomaly.field_type.text','a:2:{s:4:\"type\";s:4:\"text\";s:3:\"min\";i:2;}',1),(2516,'members','repayment_sn','anomaly.field_type.text','a:2:{s:4:\"type\";s:4:\"text\";s:3:\"min\";i:2;}',1),(2514,'members','repayment_member_id','anomaly.field_type.relationship','a:1:{s:7:\"related\";s:39:\"Fannan\\MembersModule\\Member\\MemberModel\";}',1),(2513,'members','repayment_loan','anomaly.field_type.relationship','a:1:{s:7:\"related\";s:35:\"Fannan\\MembersModule\\Loan\\LoanModel\";}',1),(2512,'members','repayment_status','anomaly.field_type.select','a:1:{s:7:\"options\";a:2:{i:0;s:9:\"未还款\";i:1;s:9:\"已还款\";}}',1),(2511,'members','repayment_date','anomaly.field_type.datetime','a:9:{s:13:\"default_value\";N;s:4:\"mode\";s:8:\"datetime\";s:11:\"date_format\";s:6:\"j F, Y\";s:10:\"year_range\";s:7:\"-50:+50\";s:11:\"time_format\";s:5:\"g:i A\";s:8:\"timezone\";N;s:4:\"step\";i:1;s:3:\"min\";N;s:3:\"max\";N;}',1),(2510,'members','repayment_amount','anomaly.field_type.decimal','a:6:{s:13:\"default_value\";N;s:9:\"separator\";s:1:\",\";s:5:\"point\";s:1:\".\";s:8:\"decimals\";i:2;s:3:\"min\";N;s:3:\"max\";N;}',1),(2508,'members','loan_mobile','anomaly.field_type.text','a:2:{s:4:\"type\";s:4:\"text\";s:3:\"min\";i:2;}',1),(2509,'members','loan_member_id','anomaly.field_type.relationship','a:1:{s:7:\"related\";s:39:\"Fannan\\MembersModule\\Member\\MemberModel\";}',1),(2507,'members','loan_bz','anomaly.field_type.text','a:2:{s:4:\"type\";s:4:\"text\";s:3:\"min\";i:2;}',1),(2506,'members','loan_term_date','anomaly.field_type.integer','a:5:{s:9:\"separator\";s:1:\",\";s:3:\"min\";i:1;s:3:\"max\";i:1000;s:4:\"step\";i:1;s:13:\"default_value\";N;}',1),(2505,'members','loan_repayment_date','anomaly.field_type.integer','a:5:{s:9:\"separator\";s:1:\",\";s:3:\"min\";i:1;s:3:\"max\";i:28;s:4:\"step\";i:1;s:13:\"default_value\";N;}',1),(2504,'members','loan_date','anomaly.field_type.datetime','a:9:{s:13:\"default_value\";N;s:4:\"mode\";s:8:\"datetime\";s:11:\"date_format\";s:6:\"j F, Y\";s:10:\"year_range\";s:7:\"-50:+50\";s:11:\"time_format\";s:5:\"g:i A\";s:8:\"timezone\";N;s:4:\"step\";i:1;s:3:\"min\";N;s:3:\"max\";N;}',1),(2503,'members','loan_status','anomaly.field_type.select','a:1:{s:7:\"options\";a:4:{i:0;s:9:\"待审核\";i:1;s:12:\"审核通过\";i:2;s:12:\"审核拒绝\";i:3;s:9:\"已完成\";}}',1),(2502,'members','loan_order_sn','anomaly.field_type.text','a:3:{s:4:\"type\";s:4:\"text\";s:3:\"min\";i:2;s:3:\"max\";i:64;}',1),(2501,'members','loan_amount','anomaly.field_type.decimal','a:6:{s:13:\"default_value\";N;s:9:\"separator\";s:1:\",\";s:5:\"point\";s:1:\".\";s:8:\"decimals\";i:2;s:3:\"min\";N;s:3:\"max\";N;}',1),(2499,'members','loan_name','anomaly.field_type.text','a:3:{s:4:\"type\";s:4:\"text\";s:3:\"min\";i:2;s:3:\"max\";i:64;}',1),(2500,'members','loan_id_card','anomaly.field_type.text','a:3:{s:4:\"type\";s:4:\"text\";s:3:\"min\";i:2;s:3:\"max\";i:64;}',1),(2498,'members','gold_member_id','anomaly.field_type.relationship','a:1:{s:7:\"related\";s:39:\"Fannan\\MembersModule\\Member\\MemberModel\";}',1),(2497,'members','gold_mobile','anomaly.field_type.text','a:3:{s:4:\"type\";s:4:\"text\";s:3:\"min\";i:2;s:3:\"max\";i:64;}',1),(2496,'members','gold_summary','anomaly.field_type.text','a:1:{s:4:\"type\";s:4:\"text\";}',1),(1576,'members','access_token','anomaly.field_type.text','a:3:{s:4:\"type\";s:4:\"text\";s:3:\"min\";i:2;s:3:\"max\";i:255;}',1),(2495,'members','gold_num','anomaly.field_type.integer','a:5:{s:9:\"separator\";s:1:\",\";s:3:\"min\";i:-500000;s:3:\"max\";i:1200000;s:4:\"step\";i:1;s:13:\"default_value\";i:0;}',1),(2494,'members','integral_member_id','anomaly.field_type.relationship','a:1:{s:7:\"related\";s:39:\"Fannan\\MembersModule\\Member\\MemberModel\";}',1),(2493,'members','integral_mobile','anomaly.field_type.text','a:3:{s:4:\"type\";s:4:\"text\";s:3:\"min\";i:2;s:3:\"max\";i:64;}',1),(2491,'members','integral_num','anomaly.field_type.integer','a:5:{s:9:\"separator\";s:1:\",\";s:3:\"min\";i:-500;s:3:\"max\";i:1200;s:4:\"step\";i:1;s:13:\"default_value\";i:0;}',1),(2492,'members','integral_summary','anomaly.field_type.text','a:1:{s:4:\"type\";s:4:\"text\";}',1),(2490,'members','qrcode','anomaly.field_type.text','a:0:{}',1),(2489,'members','great_grand_id','anomaly.field_type.relationship','a:1:{s:7:\"related\";s:39:\"Fannan\\MembersModule\\Member\\MemberModel\";}',1),(2488,'members','grand_id','anomaly.field_type.relationship','a:1:{s:7:\"related\";s:39:\"Fannan\\MembersModule\\Member\\MemberModel\";}',1),(2487,'members','parent_id','anomaly.field_type.relationship','a:1:{s:7:\"related\";s:39:\"Fannan\\MembersModule\\Member\\MemberModel\";}',1),(2486,'members','gold','anomaly.field_type.integer','a:4:{s:9:\"separator\";s:1:\",\";s:3:\"min\";i:0;s:4:\"step\";i:1;s:13:\"default_value\";i:0;}',1),(2485,'members','integral','anomaly.field_type.integer','a:4:{s:9:\"separator\";s:1:\",\";s:3:\"min\";i:0;s:4:\"step\";i:1;s:13:\"default_value\";i:0;}',1),(2483,'members','card_pic','anomaly.field_type.file','a:0:{}',1),(2484,'members','results','anomaly.field_type.text','a:3:{s:4:\"type\";s:4:\"text\";s:3:\"min\";i:2;s:3:\"max\";i:64;}',1),(2481,'members','card_positive_pic','anomaly.field_type.file','a:0:{}',1),(2482,'members','card_negative_pic','anomaly.field_type.file','a:0:{}',1),(2480,'members','id_card','anomaly.field_type.text','a:3:{s:4:\"type\";s:4:\"text\";s:3:\"min\";i:2;s:3:\"max\";i:24;}',1),(2479,'members','real_name','anomaly.field_type.text','a:3:{s:4:\"type\";s:4:\"text\";s:3:\"min\";i:2;s:3:\"max\";i:12;}',1),(2478,'members','verified_status','anomaly.field_type.select','a:1:{s:7:\"options\";a:4:{i:0;s:9:\"未认证\";i:1;s:12:\"认证通过\";i:2;s:9:\"审核中\";i:3;s:12:\"认证失败\";}}',1),(2477,'members','grade','anomaly.field_type.select','a:2:{s:7:\"options\";a:6:{i:1;s:6:\"游客\";i:2;s:12:\"普通会员\";i:3;s:12:\"铜牌会员\";i:4;s:12:\"银牌会员\";i:5;s:12:\"金牌会员\";i:6;s:12:\"钻石会员\";}s:13:\"default_value\";s:1:\"1\";}',1),(2340,'lottery','winning_prize_name','anomaly.field_type.text','a:0:{}',1),(2341,'lottery','winning_status','anomaly.field_type.boolean','a:6:{s:13:\"default_value\";b:0;s:8:\"on_color\";s:7:\"success\";s:9:\"off_color\";s:6:\"danger\";s:7:\"on_text\";s:3:\"YES\";s:8:\"off_text\";s:2:\"NO\";s:4:\"mode\";N;}',1),(2342,'lottery','ticket_name','anomaly.field_type.text','a:0:{}',1),(2343,'lottery','ticket_valid_period','anomaly.field_type.datetime','a:9:{s:13:\"default_value\";N;s:4:\"mode\";s:8:\"datetime\";s:11:\"date_format\";s:6:\"j F, Y\";s:10:\"year_range\";s:7:\"-50:+50\";s:11:\"time_format\";s:5:\"g:i A\";s:8:\"timezone\";N;s:4:\"step\";i:1;s:3:\"min\";N;s:3:\"max\";N;}',1),(2344,'lottery','ticket_is_use','anomaly.field_type.boolean','a:6:{s:13:\"default_value\";b:0;s:8:\"on_color\";s:7:\"success\";s:9:\"off_color\";s:6:\"danger\";s:7:\"on_text\";s:3:\"YES\";s:8:\"off_text\";s:2:\"NO\";s:4:\"mode\";N;}',1),(2345,'lottery','ticket_member_id','anomaly.field_type.relationship','a:1:{s:7:\"related\";s:39:\"Fannan\\MembersModule\\Member\\MemberModel\";}',1),(2346,'lottery','ticket_mobile','anomaly.field_type.text','a:0:{}',1),(1645,'lottery','prize_title','anomaly.field_type.text','a:0:{}',1),(2324,'lottery','lottery_is_open','anomaly.field_type.boolean','a:6:{s:13:\"default_value\";b:1;s:8:\"on_color\";s:7:\"success\";s:9:\"off_color\";s:6:\"danger\";s:7:\"on_text\";s:3:\"YES\";s:8:\"off_text\";s:2:\"NO\";s:4:\"mode\";N;}',1),(2325,'lottery','lottery_description','anomaly.field_type.textarea','a:3:{s:4:\"rows\";i:5;s:3:\"min\";i:10;s:3:\"max\";i:1000;}',1),(2326,'lottery','lottery_rule','anomaly.field_type.wysiwyg','a:0:{}',1),(2327,'lottery','prize_grade','anomaly.field_type.text','a:0:{}',1),(2328,'lottery','prize_name','anomaly.field_type.text','a:0:{}',1),(2329,'lottery','prize_probability','anomaly.field_type.decimal','a:6:{s:13:\"default_value\";N;s:9:\"separator\";s:1:\",\";s:5:\"point\";s:1:\".\";s:8:\"decimals\";i:2;s:3:\"min\";d:0.01;s:3:\"max\";i:100;}',1),(2330,'lottery','prize_num','anomaly.field_type.integer','a:4:{s:9:\"separator\";s:1:\",\";s:3:\"min\";i:1;s:4:\"step\";i:1;s:13:\"default_value\";i:1;}',1),(2331,'lottery','prize_lottery_id','anomaly.field_type.relationship','a:1:{s:7:\"related\";s:41:\"Fannan\\LotteryModule\\Lottery\\LotteryModel\";}',1),(2332,'lottery','prize_winning_mobile','anomaly.field_type.tags','a:6:{s:3:\"min\";N;s:3:\"max\";N;s:7:\"options\";a:0:{}s:10:\"free_input\";b:1;s:6:\"filter\";N;s:13:\"default_value\";N;}',1),(2333,'lottery','prize_description','anomaly.field_type.textarea','a:3:{s:4:\"rows\";i:5;s:3:\"min\";i:0;s:3:\"max\";i:500;}',1),(2334,'lottery','winning_lottery_id','anomaly.field_type.relationship','a:1:{s:7:\"related\";s:41:\"Fannan\\LotteryModule\\Lottery\\LotteryModel\";}',1),(2335,'lottery','winning_prize_id','anomaly.field_type.relationship','a:1:{s:7:\"related\";s:37:\"Fannan\\LotteryModule\\Prize\\PrizeModel\";}',1),(2336,'lottery','winning_member_id','anomaly.field_type.relationship','a:1:{s:7:\"related\";s:39:\"Fannan\\MembersModule\\Member\\MemberModel\";}',1),(2337,'lottery','winning_mobile','anomaly.field_type.text','a:0:{}',1),(2338,'lottery','winning_member_real_name','anomaly.field_type.text','a:0:{}',1),(2339,'lottery','winning_prize_grade','anomaly.field_type.text','a:0:{}',1),(1994,'envelopes','envelopes_is_open','anomaly.field_type.boolean','a:6:{s:13:\"default_value\";b:0;s:8:\"on_color\";s:7:\"success\";s:9:\"off_color\";s:6:\"danger\";s:7:\"on_text\";s:3:\"YES\";s:8:\"off_text\";s:2:\"NO\";s:4:\"mode\";N;}',1),(2347,'lottery','grant_grade','anomaly.field_type.select','a:2:{s:7:\"options\";a:7:{i:0;s:6:\"全部\";i:1;s:6:\"游客\";i:2;s:12:\"普通会员\";i:3;s:12:\"铜牌会员\";i:4;s:12:\"银牌会员\";i:5;s:12:\"金牌会员\";i:6;s:12:\"钻石会员\";}s:13:\"default_value\";s:1:\"1\";}',1),(2348,'lottery','grant_valid_period','anomaly.field_type.datetime','a:9:{s:13:\"default_value\";N;s:4:\"mode\";s:8:\"datetime\";s:11:\"date_format\";s:6:\"j F, Y\";s:10:\"year_range\";s:7:\"-50:+50\";s:11:\"time_format\";s:5:\"g:i A\";s:8:\"timezone\";N;s:4:\"step\";i:1;s:3:\"min\";N;s:3:\"max\";N;}',1),(1993,'envelopes','envelopes_diamond_times','anomaly.field_type.integer','a:4:{s:9:\"separator\";s:1:\",\";s:3:\"min\";i:0;s:4:\"step\";i:1;s:13:\"default_value\";i:0;}',1),(1992,'envelopes','envelopes_gold_times','anomaly.field_type.integer','a:4:{s:9:\"separator\";s:1:\",\";s:3:\"min\";i:0;s:4:\"step\";i:1;s:13:\"default_value\";i:0;}',1),(1991,'envelopes','envelopes_silver_times','anomaly.field_type.integer','a:4:{s:9:\"separator\";s:1:\",\";s:3:\"min\";i:0;s:4:\"step\";i:1;s:13:\"default_value\";i:0;}',1),(1990,'envelopes','envelopes_bronze_times','anomaly.field_type.integer','a:4:{s:9:\"separator\";s:1:\",\";s:3:\"min\";i:0;s:4:\"step\";i:1;s:13:\"default_value\";i:0;}',1),(1988,'envelopes','envelopes_visitor_times','anomaly.field_type.integer','a:4:{s:9:\"separator\";s:1:\",\";s:3:\"min\";i:0;s:4:\"step\";i:1;s:13:\"default_value\";i:0;}',1),(1989,'envelopes','envelopes_ordinary_times','anomaly.field_type.integer','a:4:{s:9:\"separator\";s:1:\",\";s:3:\"min\";i:0;s:4:\"step\";i:1;s:13:\"default_value\";i:0;}',1),(1866,'envelopes','lottery_is_open','anomaly.field_type.boolean','a:6:{s:13:\"default_value\";b:0;s:8:\"on_color\";s:7:\"success\";s:9:\"off_color\";s:6:\"danger\";s:7:\"on_text\";s:3:\"YES\";s:8:\"off_text\";s:2:\"NO\";s:4:\"mode\";N;}',1),(1996,'envelopes','log_name','anomaly.field_type.text','a:0:{}',1),(1995,'envelopes','log_member_id','anomaly.field_type.relationship','a:1:{s:7:\"related\";s:39:\"Fannan\\MembersModule\\Member\\MemberModel\";}',1),(1987,'envelopes','envelopes_amount_max','anomaly.field_type.integer','a:4:{s:9:\"separator\";s:1:\",\";s:3:\"min\";i:1;s:4:\"step\";i:1;s:13:\"default_value\";i:1;}',1),(1986,'envelopes','envelopes_amount_min','anomaly.field_type.integer','a:4:{s:9:\"separator\";s:1:\",\";s:3:\"min\";i:1;s:4:\"step\";i:1;s:13:\"default_value\";i:1;}',1),(2476,'members','avatar','anomaly.field_type.file','a:0:{}',1),(2475,'members','nickname','anomaly.field_type.text','a:3:{s:4:\"type\";s:4:\"text\";s:3:\"min\";i:2;s:3:\"max\";i:24;}',1),(2474,'members','invitation_code','anomaly.field_type.text','a:3:{s:4:\"type\";s:4:\"text\";s:3:\"min\";i:8;s:3:\"max\";i:8;}',1),(2473,'members','openid','anomaly.field_type.text','a:3:{s:4:\"type\";s:4:\"text\";s:3:\"min\";i:2;s:3:\"max\";i:64;}',1),(2471,'members','mobile','anomaly.field_type.text','a:3:{s:4:\"type\";s:4:\"text\";s:3:\"min\";i:2;s:3:\"max\";i:64;}',1),(2472,'members','password','anomaly.field_type.text','a:4:{s:4:\"type\";s:4:\"text\";s:3:\"min\";i:2;s:3:\"max\";i:64;s:13:\"default_value\";s:60:\"$2y$10$8C/nkq7CqXPiFsZ1kescaugP5siF.UjrYQcUuyS1p593etHY5Lfmm\";}',1),(1983,'advertising','ad_sorting','anomaly.field_type.integer','a:3:{s:9:\"separator\";s:1:\",\";s:3:\"min\";i:0;s:4:\"step\";i:1;}',1),(1984,'advertising','slot_name','anomaly.field_type.text','a:0:{}',1),(1985,'advertising','slot_description','anomaly.field_type.textarea','a:3:{s:4:\"rows\";i:5;s:3:\"min\";i:0;s:3:\"max\";i:250;}',1),(1978,'advertising','ad_title','anomaly.field_type.text','a:0:{}',1),(1979,'advertising','ad_slot','anomaly.field_type.relationship','a:1:{s:7:\"related\";s:39:\"Fannan\\AdvertisingModule\\Slot\\SlotModel\";}',1),(1980,'advertising','ad_image','anomaly.field_type.file','a:0:{}',1),(1981,'advertising','ad_url','anomaly.field_type.url','a:0:{}',1),(1982,'advertising','ad_description','anomaly.field_type.textarea','a:3:{s:4:\"rows\";i:5;s:3:\"min\";i:0;s:3:\"max\";i:250;}',1),(1997,'envelopes','log_mobile','anomaly.field_type.text','a:0:{}',1),(1998,'envelopes','log_amount','anomaly.field_type.integer','a:3:{s:9:\"separator\";s:1:\",\";s:3:\"min\";i:0;s:4:\"step\";i:1;}',1),(2106,'transaction','trade_payment_time','anomaly.field_type.datetime','a:9:{s:13:\"default_value\";N;s:4:\"mode\";s:8:\"datetime\";s:11:\"date_format\";s:6:\"j F, Y\";s:10:\"year_range\";s:7:\"-50:+50\";s:11:\"time_format\";s:5:\"g:i A\";s:8:\"timezone\";N;s:4:\"step\";i:1;s:3:\"min\";N;s:3:\"max\";N;}',1),(2041,'transaction','trade_member_id','anomaly.field_type.integer','a:0:{}',1),(2105,'transaction','trade_status','anomaly.field_type.select','a:1:{s:7:\"options\";a:2:{i:1;s:9:\"未支付\";i:2;s:9:\"已支付\";}}',1),(2104,'transaction','trade_mobile','anomaly.field_type.integer','a:0:{}',1),(2103,'transaction','trade_member','anomaly.field_type.relationship','a:1:{s:7:\"related\";s:39:\"Fannan\\MembersModule\\Member\\MemberModel\";}',1),(2102,'transaction','trade_project','anomaly.field_type.text','a:0:{}',1),(2100,'transaction','trade_payment_method','anomaly.field_type.text','a:0:{}',1),(2101,'transaction','trade_no','anomaly.field_type.text','a:0:{}',1),(2349,'lottery','grant_num','anomaly.field_type.integer','a:4:{s:9:\"separator\";s:1:\",\";s:3:\"min\";i:1;s:4:\"step\";i:1;s:13:\"default_value\";i:1;}',1),(2350,'lottery','grant_ticket_name','anomaly.field_type.text','a:0:{}',1),(2099,'transaction','trade_amount','anomaly.field_type.decimal','a:6:{s:13:\"default_value\";N;s:9:\"separator\";s:1:\",\";s:5:\"point\";s:1:\".\";s:8:\"decimals\";i:2;s:3:\"min\";i:0;s:3:\"max\";d:9999999999999;}',1),(2098,'transaction','trade_out_no','anomaly.field_type.text','a:0:{}',1),(2323,'lottery','lottery_is_ticket','anomaly.field_type.boolean','a:6:{s:13:\"default_value\";b:1;s:8:\"on_color\";s:7:\"success\";s:9:\"off_color\";s:6:\"danger\";s:7:\"on_text\";s:3:\"YES\";s:8:\"off_text\";s:2:\"NO\";s:4:\"mode\";N;}',1),(2322,'lottery','lottery_times','anomaly.field_type.integer','a:4:{s:9:\"separator\";s:1:\",\";s:3:\"min\";i:0;s:4:\"step\";i:1;s:13:\"default_value\";i:0;}',1),(2321,'lottery','lottery_end','anomaly.field_type.datetime','a:9:{s:13:\"default_value\";N;s:4:\"mode\";s:8:\"datetime\";s:11:\"date_format\";s:6:\"j F, Y\";s:10:\"year_range\";s:7:\"-50:+50\";s:11:\"time_format\";s:5:\"g:i A\";s:8:\"timezone\";N;s:4:\"step\";i:1;s:3:\"min\";N;s:3:\"max\";N;}',1),(2320,'lottery','lottery_start','anomaly.field_type.datetime','a:9:{s:13:\"default_value\";N;s:4:\"mode\";s:8:\"datetime\";s:11:\"date_format\";s:6:\"j F, Y\";s:10:\"year_range\";s:7:\"-50:+50\";s:11:\"time_format\";s:5:\"g:i A\";s:8:\"timezone\";N;s:4:\"step\";i:1;s:3:\"min\";N;s:3:\"max\";N;}',1),(2319,'lottery','lottery_title','anomaly.field_type.text','a:0:{}',1),(2525,'members','withdraw_member_id','anomaly.field_type.relationship','a:1:{s:7:\"related\";s:39:\"Fannan\\MembersModule\\Member\\MemberModel\";}',1),(2526,'members','withdraw_status','anomaly.field_type.select','a:1:{s:7:\"options\";a:4:{i:0;s:9:\"待审核\";i:1;s:9:\"提现中\";i:2;s:6:\"拒绝\";i:3;s:9:\"已成功\";}}',1),(2527,'members','message_title','anomaly.field_type.text','a:2:{s:4:\"type\";s:4:\"text\";s:3:\"min\";i:2;}',1),(2528,'members','message_content','anomaly.field_type.textarea','a:3:{s:4:\"rows\";i:5;s:3:\"min\";i:10;s:3:\"max\";i:1000;}',1),(2529,'members','message_member_id','anomaly.field_type.relationship','a:1:{s:7:\"related\";s:39:\"Fannan\\MembersModule\\Member\\MemberModel\";}',1),(2530,'members','message_mobile','anomaly.field_type.text','a:2:{s:4:\"type\";s:4:\"text\";s:3:\"min\";i:2;}',1);

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
) ENGINE=MyISAM AUTO_INCREMENT=2531 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `default_streams_fields_translations` */

insert  into `default_streams_fields_translations`(`id`,`field_id`,`locale`,`name`,`placeholder`,`warning`,`instructions`) values (89,89,'en','anomaly.module.configuration::field.value.name','anomaly.module.configuration::field.value.placeholder','anomaly.module.configuration::field.value.warning','anomaly.module.configuration::field.value.instructions'),(88,88,'en','anomaly.module.configuration::field.key.name','anomaly.module.configuration::field.key.placeholder','anomaly.module.configuration::field.key.warning','anomaly.module.configuration::field.key.instructions'),(87,87,'en','anomaly.module.configuration::field.scope.name','anomaly.module.configuration::field.scope.placeholder','anomaly.module.configuration::field.scope.warning','anomaly.module.configuration::field.scope.instructions'),(98,98,'en','anomaly.module.dashboard::field.dashboard.name','anomaly.module.dashboard::field.dashboard.placeholder','anomaly.module.dashboard::field.dashboard.warning','anomaly.module.dashboard::field.dashboard.instructions'),(97,97,'en','anomaly.module.dashboard::field.pinned.name','anomaly.module.dashboard::field.pinned.placeholder','anomaly.module.dashboard::field.pinned.warning','anomaly.module.dashboard::field.pinned.instructions'),(96,96,'en','anomaly.module.dashboard::field.column.name','anomaly.module.dashboard::field.column.placeholder','anomaly.module.dashboard::field.column.warning','anomaly.module.dashboard::field.column.instructions'),(95,95,'en','anomaly.module.dashboard::field.extension.name','anomaly.module.dashboard::field.extension.placeholder','anomaly.module.dashboard::field.extension.warning','anomaly.module.dashboard::field.extension.instructions'),(94,94,'en','anomaly.module.dashboard::field.title.name','anomaly.module.dashboard::field.title.placeholder','anomaly.module.dashboard::field.title.warning','anomaly.module.dashboard::field.title.instructions'),(93,93,'en','anomaly.module.dashboard::field.layout.name','anomaly.module.dashboard::field.layout.placeholder','anomaly.module.dashboard::field.layout.warning','anomaly.module.dashboard::field.layout.instructions'),(92,92,'en','anomaly.module.dashboard::field.description.name','anomaly.module.dashboard::field.description.placeholder','anomaly.module.dashboard::field.description.warning','anomaly.module.dashboard::field.description.instructions'),(91,91,'en','anomaly.module.dashboard::field.slug.name','anomaly.module.dashboard::field.slug.placeholder','anomaly.module.dashboard::field.slug.warning','anomaly.module.dashboard::field.slug.instructions'),(90,90,'en','anomaly.module.dashboard::field.name.name','anomaly.module.dashboard::field.name.placeholder','anomaly.module.dashboard::field.name.warning','anomaly.module.dashboard::field.name.instructions'),(112,112,'en','anomaly.module.files::field.mime_type.name','anomaly.module.files::field.mime_type.placeholder','anomaly.module.files::field.mime_type.warning','anomaly.module.files::field.mime_type.instructions'),(111,111,'en','anomaly.module.files::field.height.name','anomaly.module.files::field.height.placeholder','anomaly.module.files::field.height.warning','anomaly.module.files::field.height.instructions'),(110,110,'en','anomaly.module.files::field.width.name','anomaly.module.files::field.width.placeholder','anomaly.module.files::field.width.warning','anomaly.module.files::field.width.instructions'),(109,109,'en','anomaly.module.files::field.extension.name','anomaly.module.files::field.extension.placeholder','anomaly.module.files::field.extension.warning','anomaly.module.files::field.extension.instructions'),(108,108,'en','anomaly.module.files::field.keywords.name','anomaly.module.files::field.keywords.placeholder','anomaly.module.files::field.keywords.warning','anomaly.module.files::field.keywords.instructions'),(107,107,'en','anomaly.module.files::field.allowed_types.name','anomaly.module.files::field.allowed_types.placeholder','anomaly.module.files::field.allowed_types.warning','anomaly.module.files::field.allowed_types.instructions'),(106,106,'en','anomaly.module.files::field.description.name','anomaly.module.files::field.description.placeholder','anomaly.module.files::field.description.warning','anomaly.module.files::field.description.instructions'),(105,105,'en','anomaly.module.files::field.entry.name','anomaly.module.files::field.entry.placeholder','anomaly.module.files::field.entry.warning','anomaly.module.files::field.entry.instructions'),(104,104,'en','anomaly.module.files::field.disk.name','anomaly.module.files::field.disk.placeholder','anomaly.module.files::field.disk.warning','anomaly.module.files::field.disk.instructions'),(103,103,'en','anomaly.module.files::field.folder.name','anomaly.module.files::field.folder.placeholder','anomaly.module.files::field.folder.warning','anomaly.module.files::field.folder.instructions'),(102,102,'en','anomaly.module.files::field.adapter.name','anomaly.module.files::field.adapter.placeholder','anomaly.module.files::field.adapter.warning','anomaly.module.files::field.adapter.instructions'),(101,101,'en','anomaly.module.files::field.slug.name','anomaly.module.files::field.slug.placeholder','anomaly.module.files::field.slug.warning','anomaly.module.files::field.slug.instructions'),(100,100,'en','anomaly.module.files::field.name.name','anomaly.module.files::field.name.placeholder','anomaly.module.files::field.name.warning','anomaly.module.files::field.name.instructions'),(122,122,'en','anomaly.module.navigation::field.type.name','anomaly.module.navigation::field.type.placeholder','anomaly.module.navigation::field.type.warning','anomaly.module.navigation::field.type.instructions'),(121,121,'en','anomaly.module.navigation::field.allowed_roles.name','anomaly.module.navigation::field.allowed_roles.placeholder','anomaly.module.navigation::field.allowed_roles.warning','anomaly.module.navigation::field.allowed_roles.instructions'),(120,120,'en','anomaly.module.navigation::field.parent.name','anomaly.module.navigation::field.parent.placeholder','anomaly.module.navigation::field.parent.warning','anomaly.module.navigation::field.parent.instructions'),(119,119,'en','anomaly.module.navigation::field.menu.name','anomaly.module.navigation::field.menu.placeholder','anomaly.module.navigation::field.menu.warning','anomaly.module.navigation::field.menu.instructions'),(118,118,'en','anomaly.module.navigation::field.slug.name','anomaly.module.navigation::field.slug.placeholder','anomaly.module.navigation::field.slug.warning','anomaly.module.navigation::field.slug.instructions'),(117,117,'en','anomaly.module.navigation::field.entry.name','anomaly.module.navigation::field.entry.placeholder','anomaly.module.navigation::field.entry.warning','anomaly.module.navigation::field.entry.instructions'),(116,116,'en','anomaly.module.navigation::field.description.name','anomaly.module.navigation::field.description.placeholder','anomaly.module.navigation::field.description.warning','anomaly.module.navigation::field.description.instructions'),(115,115,'en','anomaly.module.navigation::field.class.name','anomaly.module.navigation::field.class.placeholder','anomaly.module.navigation::field.class.warning','anomaly.module.navigation::field.class.instructions'),(114,114,'en','anomaly.module.navigation::field.name.name','anomaly.module.navigation::field.name.placeholder','anomaly.module.navigation::field.name.warning','anomaly.module.navigation::field.name.instructions'),(142,142,'en','anomaly.module.pages::field.entry.name','anomaly.module.pages::field.entry.placeholder','anomaly.module.pages::field.entry.warning','anomaly.module.pages::field.entry.instructions'),(141,141,'en','anomaly.module.pages::field.exact.name','anomaly.module.pages::field.exact.placeholder','anomaly.module.pages::field.exact.warning','anomaly.module.pages::field.exact.instructions'),(140,140,'en','anomaly.module.pages::field.visible.name','anomaly.module.pages::field.visible.placeholder','anomaly.module.pages::field.visible.warning','anomaly.module.pages::field.visible.instructions'),(139,139,'en','anomaly.module.pages::field.handler.name','anomaly.module.pages::field.handler.placeholder','anomaly.module.pages::field.handler.warning','anomaly.module.pages::field.handler.instructions'),(138,138,'en','anomaly.module.pages::field.type.name','anomaly.module.pages::field.type.placeholder','anomaly.module.pages::field.type.warning','anomaly.module.pages::field.type.instructions'),(137,137,'en','anomaly.module.pages::field.theme_layout.name','anomaly.module.pages::field.theme_layout.placeholder','anomaly.module.pages::field.theme_layout.warning','anomaly.module.pages::field.theme_layout.instructions'),(136,136,'en','anomaly.module.pages::field.parent.name','anomaly.module.pages::field.parent.placeholder','anomaly.module.pages::field.parent.warning','anomaly.module.pages::field.parent.instructions'),(135,135,'en','anomaly.module.pages::field.allowed_roles.name','anomaly.module.pages::field.allowed_roles.placeholder','anomaly.module.pages::field.allowed_roles.warning','anomaly.module.pages::field.allowed_roles.instructions'),(134,134,'en','anomaly.module.pages::field.layout.name','anomaly.module.pages::field.layout.placeholder','anomaly.module.pages::field.layout.warning','anomaly.module.pages::field.layout.instructions'),(133,133,'en','anomaly.module.pages::field.meta_keywords.name','anomaly.module.pages::field.meta_keywords.placeholder','anomaly.module.pages::field.meta_keywords.warning','anomaly.module.pages::field.meta_keywords.instructions'),(132,132,'en','anomaly.module.pages::field.meta_description.name','anomaly.module.pages::field.meta_description.placeholder','anomaly.module.pages::field.meta_description.warning','anomaly.module.pages::field.meta_description.instructions'),(131,131,'en','anomaly.module.pages::field.meta_title.name','anomaly.module.pages::field.meta_title.placeholder','anomaly.module.pages::field.meta_title.warning','anomaly.module.pages::field.meta_title.instructions'),(130,130,'en','anomaly.module.pages::field.home.name','anomaly.module.pages::field.home.placeholder','anomaly.module.pages::field.home.warning','anomaly.module.pages::field.home.instructions'),(129,129,'en','anomaly.module.pages::field.enabled.name','anomaly.module.pages::field.enabled.placeholder','anomaly.module.pages::field.enabled.warning','anomaly.module.pages::field.enabled.instructions'),(128,128,'en','anomaly.module.pages::field.path.name','anomaly.module.pages::field.path.placeholder','anomaly.module.pages::field.path.warning','anomaly.module.pages::field.path.instructions'),(127,127,'en','anomaly.module.pages::field.content.name','anomaly.module.pages::field.content.placeholder','anomaly.module.pages::field.content.warning','anomaly.module.pages::field.content.instructions'),(126,126,'en','anomaly.module.pages::field.slug.name','anomaly.module.pages::field.slug.placeholder','anomaly.module.pages::field.slug.warning','anomaly.module.pages::field.slug.instructions'),(125,125,'en','anomaly.module.pages::field.title.name','anomaly.module.pages::field.title.placeholder','anomaly.module.pages::field.title.warning','anomaly.module.pages::field.title.instructions'),(124,124,'en','anomaly.module.pages::field.str_id.name','anomaly.module.pages::field.str_id.placeholder','anomaly.module.pages::field.str_id.warning','anomaly.module.pages::field.str_id.instructions'),(269,269,'zh-cn','视频链接',NULL,NULL,'视频链接和上传视频请选择一个字段填写，如都填写则默认读取视频链接'),(249,249,'en','anomaly.module.posts::field.content.name','anomaly.module.posts::field.content.placeholder','anomaly.module.posts::field.content.warning','anomaly.module.posts::field.content.instructions'),(250,250,'en','anomaly.module.posts::field.type.name','anomaly.module.posts::field.type.placeholder','anomaly.module.posts::field.type.warning','anomaly.module.posts::field.type.instructions'),(251,251,'en','anomaly.module.posts::field.tags.name','anomaly.module.posts::field.tags.placeholder','anomaly.module.posts::field.tags.warning','anomaly.module.posts::field.tags.instructions'),(252,252,'en','anomaly.module.posts::field.summary.name','anomaly.module.posts::field.summary.placeholder','anomaly.module.posts::field.summary.warning','anomaly.module.posts::field.summary.instructions'),(253,253,'en','anomaly.module.posts::field.description.name','anomaly.module.posts::field.description.placeholder','anomaly.module.posts::field.description.warning','anomaly.module.posts::field.description.instructions'),(254,254,'en','anomaly.module.posts::field.publish_at.name','anomaly.module.posts::field.publish_at.placeholder','anomaly.module.posts::field.publish_at.warning','anomaly.module.posts::field.publish_at.instructions'),(255,255,'en','anomaly.module.posts::field.entry.name','anomaly.module.posts::field.entry.placeholder','anomaly.module.posts::field.entry.warning','anomaly.module.posts::field.entry.instructions'),(256,256,'en','anomaly.module.posts::field.author.name','anomaly.module.posts::field.author.placeholder','anomaly.module.posts::field.author.warning','anomaly.module.posts::field.author.instructions'),(257,257,'en','anomaly.module.posts::field.layout.name','anomaly.module.posts::field.layout.placeholder','anomaly.module.posts::field.layout.warning','anomaly.module.posts::field.layout.instructions'),(258,258,'en','anomaly.module.posts::field.category.name','anomaly.module.posts::field.category.placeholder','anomaly.module.posts::field.category.warning','anomaly.module.posts::field.category.instructions'),(259,259,'en','anomaly.module.posts::field.enabled.name','anomaly.module.posts::field.enabled.placeholder','anomaly.module.posts::field.enabled.warning','anomaly.module.posts::field.enabled.instructions'),(260,260,'en','anomaly.module.posts::field.featured.name','anomaly.module.posts::field.featured.placeholder','anomaly.module.posts::field.featured.warning','anomaly.module.posts::field.featured.instructions'),(261,261,'en','anomaly.module.posts::field.meta_title.name','anomaly.module.posts::field.meta_title.placeholder','anomaly.module.posts::field.meta_title.warning','anomaly.module.posts::field.meta_title.instructions'),(262,262,'en','anomaly.module.posts::field.meta_description.name','anomaly.module.posts::field.meta_description.placeholder','anomaly.module.posts::field.meta_description.warning','anomaly.module.posts::field.meta_description.instructions'),(263,263,'en','anomaly.module.posts::field.meta_keywords.name','anomaly.module.posts::field.meta_keywords.placeholder','anomaly.module.posts::field.meta_keywords.warning','anomaly.module.posts::field.meta_keywords.instructions'),(264,264,'en','anomaly.module.posts::field.ttl.name','anomaly.module.posts::field.ttl.placeholder','anomaly.module.posts::field.ttl.warning','anomaly.module.posts::field.ttl.instructions'),(265,265,'en','anomaly.module.posts::field.theme_layout.name','anomaly.module.posts::field.theme_layout.placeholder','anomaly.module.posts::field.theme_layout.warning','anomaly.module.posts::field.theme_layout.instructions'),(266,266,'en','anomaly.module.posts::field.parent.name','anomaly.module.posts::field.parent.placeholder','anomaly.module.posts::field.parent.warning','anomaly.module.posts::field.parent.instructions'),(267,267,'zh-cn','缩略图',NULL,NULL,NULL),(268,268,'zh-cn','图集',NULL,NULL,NULL),(168,168,'en','anomaly.module.preferences::field.value.name','anomaly.module.preferences::field.value.placeholder','anomaly.module.preferences::field.value.warning','anomaly.module.preferences::field.value.instructions'),(167,167,'en','anomaly.module.preferences::field.key.name','anomaly.module.preferences::field.key.placeholder','anomaly.module.preferences::field.key.warning','anomaly.module.preferences::field.key.instructions'),(166,166,'en','anomaly.module.preferences::field.user.name','anomaly.module.preferences::field.user.placeholder','anomaly.module.preferences::field.user.warning','anomaly.module.preferences::field.user.instructions'),(172,172,'en','anomaly.module.redirects::field.secure.name','anomaly.module.redirects::field.secure.placeholder','anomaly.module.redirects::field.secure.warning','anomaly.module.redirects::field.secure.instructions'),(171,171,'en','anomaly.module.redirects::field.status.name','anomaly.module.redirects::field.status.placeholder','anomaly.module.redirects::field.status.warning','anomaly.module.redirects::field.status.instructions'),(170,170,'en','anomaly.module.redirects::field.to.name','anomaly.module.redirects::field.to.placeholder','anomaly.module.redirects::field.to.warning','anomaly.module.redirects::field.to.instructions'),(169,169,'en','anomaly.module.redirects::field.from.name','anomaly.module.redirects::field.from.placeholder','anomaly.module.redirects::field.from.warning','anomaly.module.redirects::field.from.instructions'),(99,99,'en','anomaly.module.dashboard::field.allowed_roles.name','anomaly.module.dashboard::field.allowed_roles.placeholder','anomaly.module.dashboard::field.allowed_roles.warning','anomaly.module.dashboard::field.allowed_roles.instructions'),(113,113,'en','anomaly.module.files::field.size.name','anomaly.module.files::field.size.placeholder','anomaly.module.files::field.size.warning','anomaly.module.files::field.size.instructions'),(123,123,'en','anomaly.module.navigation::field.target.name','anomaly.module.navigation::field.target.placeholder','anomaly.module.navigation::field.target.warning','anomaly.module.navigation::field.target.instructions'),(143,143,'en','anomaly.module.pages::field.name.name','anomaly.module.pages::field.name.placeholder','anomaly.module.pages::field.name.warning','anomaly.module.pages::field.name.instructions'),(144,144,'en','anomaly.module.pages::field.description.name','anomaly.module.pages::field.description.placeholder','anomaly.module.pages::field.description.warning','anomaly.module.pages::field.description.instructions'),(248,248,'en','anomaly.module.posts::field.slug.name','anomaly.module.posts::field.slug.placeholder','anomaly.module.posts::field.slug.warning','anomaly.module.posts::field.slug.instructions'),(247,247,'en','anomaly.module.posts::field.title.name','anomaly.module.posts::field.title.placeholder','anomaly.module.posts::field.title.warning','anomaly.module.posts::field.title.instructions'),(173,173,'en','anomaly.module.settings::field.key.name','anomaly.module.settings::field.key.placeholder','anomaly.module.settings::field.key.warning','anomaly.module.settings::field.key.instructions'),(174,174,'en','anomaly.module.settings::field.value.name','anomaly.module.settings::field.value.placeholder','anomaly.module.settings::field.value.warning','anomaly.module.settings::field.value.instructions'),(175,175,'en','anomaly.module.users::field.email.name','anomaly.module.users::field.email.placeholder','anomaly.module.users::field.email.warning','anomaly.module.users::field.email.instructions'),(176,176,'en','anomaly.module.users::field.username.name','anomaly.module.users::field.username.placeholder','anomaly.module.users::field.username.warning','anomaly.module.users::field.username.instructions'),(177,177,'en','anomaly.module.users::field.password.name','anomaly.module.users::field.password.placeholder','anomaly.module.users::field.password.warning','anomaly.module.users::field.password.instructions'),(178,178,'en','anomaly.module.users::field.remember_token.name','anomaly.module.users::field.remember_token.placeholder','anomaly.module.users::field.remember_token.warning','anomaly.module.users::field.remember_token.instructions'),(179,179,'en','anomaly.module.users::field.ip_address.name','anomaly.module.users::field.ip_address.placeholder','anomaly.module.users::field.ip_address.warning','anomaly.module.users::field.ip_address.instructions'),(180,180,'en','anomaly.module.users::field.last_login_at.name','anomaly.module.users::field.last_login_at.placeholder','anomaly.module.users::field.last_login_at.warning','anomaly.module.users::field.last_login_at.instructions'),(181,181,'en','anomaly.module.users::field.last_activity_at.name','anomaly.module.users::field.last_activity_at.placeholder','anomaly.module.users::field.last_activity_at.warning','anomaly.module.users::field.last_activity_at.instructions'),(182,182,'en','anomaly.module.users::field.permissions.name','anomaly.module.users::field.permissions.placeholder','anomaly.module.users::field.permissions.warning','anomaly.module.users::field.permissions.instructions'),(183,183,'en','anomaly.module.users::field.display_name.name','anomaly.module.users::field.display_name.placeholder','anomaly.module.users::field.display_name.warning','anomaly.module.users::field.display_name.instructions'),(184,184,'en','anomaly.module.users::field.first_name.name','anomaly.module.users::field.first_name.placeholder','anomaly.module.users::field.first_name.warning','anomaly.module.users::field.first_name.instructions'),(185,185,'en','anomaly.module.users::field.last_name.name','anomaly.module.users::field.last_name.placeholder','anomaly.module.users::field.last_name.warning','anomaly.module.users::field.last_name.instructions'),(186,186,'en','anomaly.module.users::field.name.name','anomaly.module.users::field.name.placeholder','anomaly.module.users::field.name.warning','anomaly.module.users::field.name.instructions'),(187,187,'en','anomaly.module.users::field.description.name','anomaly.module.users::field.description.placeholder','anomaly.module.users::field.description.warning','anomaly.module.users::field.description.instructions'),(188,188,'en','anomaly.module.users::field.reset_code.name','anomaly.module.users::field.reset_code.placeholder','anomaly.module.users::field.reset_code.warning','anomaly.module.users::field.reset_code.instructions'),(189,189,'en','anomaly.module.users::field.reset_code_expires_at.name','anomaly.module.users::field.reset_code_expires_at.placeholder','anomaly.module.users::field.reset_code_expires_at.warning','anomaly.module.users::field.reset_code_expires_at.instructions'),(190,190,'en','anomaly.module.users::field.activation_code.name','anomaly.module.users::field.activation_code.placeholder','anomaly.module.users::field.activation_code.warning','anomaly.module.users::field.activation_code.instructions'),(191,191,'en','anomaly.module.users::field.activation_code_expires_at.name','anomaly.module.users::field.activation_code_expires_at.placeholder','anomaly.module.users::field.activation_code_expires_at.warning','anomaly.module.users::field.activation_code_expires_at.instructions'),(192,192,'en','anomaly.module.users::field.activated.name','anomaly.module.users::field.activated.placeholder','anomaly.module.users::field.activated.warning','anomaly.module.users::field.activated.instructions'),(193,193,'en','anomaly.module.users::field.enabled.name','anomaly.module.users::field.enabled.placeholder','anomaly.module.users::field.enabled.warning','anomaly.module.users::field.enabled.instructions'),(194,194,'en','anomaly.module.users::field.slug.name','anomaly.module.users::field.slug.placeholder','anomaly.module.users::field.slug.warning','anomaly.module.users::field.slug.instructions'),(195,195,'en','anomaly.module.users::field.roles.name','anomaly.module.users::field.roles.placeholder','anomaly.module.users::field.roles.warning','anomaly.module.users::field.roles.instructions'),(196,196,'en','anomaly.extension.page_link_type::field.title.name','anomaly.extension.page_link_type::field.title.placeholder','anomaly.extension.page_link_type::field.title.warning','anomaly.extension.page_link_type::field.title.instructions'),(197,197,'en','anomaly.extension.page_link_type::field.page.name','anomaly.extension.page_link_type::field.page.placeholder','anomaly.extension.page_link_type::field.page.warning','anomaly.extension.page_link_type::field.page.instructions'),(198,198,'en','anomaly.extension.page_link_type::field.description.name','anomaly.extension.page_link_type::field.description.placeholder','anomaly.extension.page_link_type::field.description.warning','anomaly.extension.page_link_type::field.description.instructions'),(199,199,'en','anomaly.extension.url_link_type::field.title.name','anomaly.extension.url_link_type::field.title.placeholder','anomaly.extension.url_link_type::field.title.warning','anomaly.extension.url_link_type::field.title.instructions'),(200,200,'en','anomaly.extension.url_link_type::field.url.name','anomaly.extension.url_link_type::field.url.placeholder','anomaly.extension.url_link_type::field.url.warning','anomaly.extension.url_link_type::field.url.instructions'),(201,201,'en','anomaly.extension.url_link_type::field.description.name','anomaly.extension.url_link_type::field.description.placeholder','anomaly.extension.url_link_type::field.description.warning','anomaly.extension.url_link_type::field.description.instructions'),(246,246,'en','anomaly.module.posts::field.name.name','anomaly.module.posts::field.name.placeholder','anomaly.module.posts::field.name.warning','anomaly.module.posts::field.name.instructions'),(245,245,'en','anomaly.module.posts::field.str_id.name','anomaly.module.posts::field.str_id.placeholder','anomaly.module.posts::field.str_id.warning','anomaly.module.posts::field.str_id.instructions'),(270,270,'zh-cn','上传视频',NULL,NULL,NULL),(271,271,'zh-cn','上传音频',NULL,NULL,NULL),(273,273,'en','fannan.module.test::field.name.name','fannan.module.test::field.name.placeholder','fannan.module.test::field.name.warning','fannan.module.test::field.name.instructions'),(274,274,'en','fannan.module.test::field.num.name','fannan.module.test::field.num.placeholder','fannan.module.test::field.num.warning','fannan.module.test::field.num.instructions'),(2500,2500,'en','fannan.module.members::field.loan_id_card.name','fannan.module.members::field.loan_id_card.placeholder','fannan.module.members::field.loan_id_card.warning','fannan.module.members::field.loan_id_card.instructions'),(2481,2481,'en','fannan.module.members::field.card_positive_pic.name','fannan.module.members::field.card_positive_pic.placeholder','fannan.module.members::field.card_positive_pic.warning','fannan.module.members::field.card_positive_pic.instructions'),(2482,2482,'en','fannan.module.members::field.card_negative_pic.name','fannan.module.members::field.card_negative_pic.placeholder','fannan.module.members::field.card_negative_pic.warning','fannan.module.members::field.card_negative_pic.instructions'),(2483,2483,'en','fannan.module.members::field.card_pic.name','fannan.module.members::field.card_pic.placeholder','fannan.module.members::field.card_pic.warning','fannan.module.members::field.card_pic.instructions'),(2484,2484,'en','fannan.module.members::field.results.name','fannan.module.members::field.results.placeholder','fannan.module.members::field.results.warning','fannan.module.members::field.results.instructions'),(2485,2485,'en','fannan.module.members::field.integral.name','fannan.module.members::field.integral.placeholder','fannan.module.members::field.integral.warning','fannan.module.members::field.integral.instructions'),(2486,2486,'en','fannan.module.members::field.gold.name','fannan.module.members::field.gold.placeholder','fannan.module.members::field.gold.warning','fannan.module.members::field.gold.instructions'),(2487,2487,'en','fannan.module.members::field.parent_id.name','fannan.module.members::field.parent_id.placeholder','fannan.module.members::field.parent_id.warning','fannan.module.members::field.parent_id.instructions'),(2488,2488,'en','fannan.module.members::field.grand_id.name','fannan.module.members::field.grand_id.placeholder','fannan.module.members::field.grand_id.warning','fannan.module.members::field.grand_id.instructions'),(2489,2489,'en','fannan.module.members::field.great_grand_id.name','fannan.module.members::field.great_grand_id.placeholder','fannan.module.members::field.great_grand_id.warning','fannan.module.members::field.great_grand_id.instructions'),(2490,2490,'en','fannan.module.members::field.qrcode.name','fannan.module.members::field.qrcode.placeholder','fannan.module.members::field.qrcode.warning','fannan.module.members::field.qrcode.instructions'),(2491,2491,'en','fannan.module.members::field.integral_num.name','fannan.module.members::field.integral_num.placeholder','fannan.module.members::field.integral_num.warning','fannan.module.members::field.integral_num.instructions'),(2492,2492,'en','fannan.module.members::field.integral_summary.name','fannan.module.members::field.integral_summary.placeholder','fannan.module.members::field.integral_summary.warning','fannan.module.members::field.integral_summary.instructions'),(2493,2493,'en','fannan.module.members::field.integral_mobile.name','fannan.module.members::field.integral_mobile.placeholder','fannan.module.members::field.integral_mobile.warning','fannan.module.members::field.integral_mobile.instructions'),(2494,2494,'en','fannan.module.members::field.integral_member_id.name','fannan.module.members::field.integral_member_id.placeholder','fannan.module.members::field.integral_member_id.warning','fannan.module.members::field.integral_member_id.instructions'),(2495,2495,'en','fannan.module.members::field.gold_num.name','fannan.module.members::field.gold_num.placeholder','fannan.module.members::field.gold_num.warning','fannan.module.members::field.gold_num.instructions'),(2496,2496,'en','fannan.module.members::field.gold_summary.name','fannan.module.members::field.gold_summary.placeholder','fannan.module.members::field.gold_summary.warning','fannan.module.members::field.gold_summary.instructions'),(2497,2497,'en','fannan.module.members::field.gold_mobile.name','fannan.module.members::field.gold_mobile.placeholder','fannan.module.members::field.gold_mobile.warning','fannan.module.members::field.gold_mobile.instructions'),(2498,2498,'en','fannan.module.members::field.gold_member_id.name','fannan.module.members::field.gold_member_id.placeholder','fannan.module.members::field.gold_member_id.warning','fannan.module.members::field.gold_member_id.instructions'),(2499,2499,'en','fannan.module.members::field.loan_name.name','fannan.module.members::field.loan_name.placeholder','fannan.module.members::field.loan_name.warning','fannan.module.members::field.loan_name.instructions'),(1576,1576,'en','fannan.module.members::field.access_token.name','fannan.module.members::field.access_token.placeholder','fannan.module.members::field.access_token.warning','fannan.module.members::field.access_token.instructions'),(2501,2501,'en','fannan.module.members::field.loan_amount.name','fannan.module.members::field.loan_amount.placeholder','fannan.module.members::field.loan_amount.warning','fannan.module.members::field.loan_amount.instructions'),(2502,2502,'en','fannan.module.members::field.loan_order_sn.name','fannan.module.members::field.loan_order_sn.placeholder','fannan.module.members::field.loan_order_sn.warning','fannan.module.members::field.loan_order_sn.instructions'),(2503,2503,'en','fannan.module.members::field.loan_status.name','fannan.module.members::field.loan_status.placeholder','fannan.module.members::field.loan_status.warning','fannan.module.members::field.loan_status.instructions'),(2504,2504,'en','fannan.module.members::field.loan_date.name','fannan.module.members::field.loan_date.placeholder','fannan.module.members::field.loan_date.warning','fannan.module.members::field.loan_date.instructions'),(2505,2505,'en','fannan.module.members::field.loan_repayment_date.name','fannan.module.members::field.loan_repayment_date.placeholder','fannan.module.members::field.loan_repayment_date.warning','fannan.module.members::field.loan_repayment_date.instructions'),(2506,2506,'en','fannan.module.members::field.loan_term_date.name','fannan.module.members::field.loan_term_date.placeholder','fannan.module.members::field.loan_term_date.warning','fannan.module.members::field.loan_term_date.instructions'),(2507,2507,'en','fannan.module.members::field.loan_bz.name','fannan.module.members::field.loan_bz.placeholder','fannan.module.members::field.loan_bz.warning','fannan.module.members::field.loan_bz.instructions'),(2508,2508,'en','fannan.module.members::field.loan_mobile.name','fannan.module.members::field.loan_mobile.placeholder','fannan.module.members::field.loan_mobile.warning','fannan.module.members::field.loan_mobile.instructions'),(2509,2509,'en','fannan.module.members::field.loan_member_id.name','fannan.module.members::field.loan_member_id.placeholder','fannan.module.members::field.loan_member_id.warning','fannan.module.members::field.loan_member_id.instructions'),(2510,2510,'en','fannan.module.members::field.repayment_amount.name','fannan.module.members::field.repayment_amount.placeholder','fannan.module.members::field.repayment_amount.warning','fannan.module.members::field.repayment_amount.instructions'),(2511,2511,'en','fannan.module.members::field.repayment_date.name','fannan.module.members::field.repayment_date.placeholder','fannan.module.members::field.repayment_date.warning','fannan.module.members::field.repayment_date.instructions'),(2512,2512,'en','fannan.module.members::field.repayment_status.name','fannan.module.members::field.repayment_status.placeholder','fannan.module.members::field.repayment_status.warning','fannan.module.members::field.repayment_status.instructions'),(2513,2513,'en','fannan.module.members::field.repayment_loan.name','fannan.module.members::field.repayment_loan.placeholder','fannan.module.members::field.repayment_loan.warning','fannan.module.members::field.repayment_loan.instructions'),(2514,2514,'en','fannan.module.members::field.repayment_member_id.name','fannan.module.members::field.repayment_member_id.placeholder','fannan.module.members::field.repayment_member_id.warning','fannan.module.members::field.repayment_member_id.instructions'),(2515,2515,'en','fannan.module.members::field.repayment_mobile.name','fannan.module.members::field.repayment_mobile.placeholder','fannan.module.members::field.repayment_mobile.warning','fannan.module.members::field.repayment_mobile.instructions'),(2516,2516,'en','fannan.module.members::field.repayment_sn.name','fannan.module.members::field.repayment_sn.placeholder','fannan.module.members::field.repayment_sn.warning','fannan.module.members::field.repayment_sn.instructions'),(2517,2517,'en','fannan.module.members::field.repayment_loan_name.name','fannan.module.members::field.repayment_loan_name.placeholder','fannan.module.members::field.repayment_loan_name.warning','fannan.module.members::field.repayment_loan_name.instructions'),(2518,2518,'en','fannan.module.members::field.repayment_loan_card.name','fannan.module.members::field.repayment_loan_card.placeholder','fannan.module.members::field.repayment_loan_card.warning','fannan.module.members::field.repayment_loan_card.instructions'),(2519,2519,'en','fannan.module.members::field.withdraw_amount.name','fannan.module.members::field.withdraw_amount.placeholder','fannan.module.members::field.withdraw_amount.warning','fannan.module.members::field.withdraw_amount.instructions'),(2520,2520,'en','fannan.module.members::field.withdraw_bank.name','fannan.module.members::field.withdraw_bank.placeholder','fannan.module.members::field.withdraw_bank.warning','fannan.module.members::field.withdraw_bank.instructions'),(2521,2521,'en','fannan.module.members::field.withdraw_name.name','fannan.module.members::field.withdraw_name.placeholder','fannan.module.members::field.withdraw_name.warning','fannan.module.members::field.withdraw_name.instructions'),(2522,2522,'en','fannan.module.members::field.withdraw_card.name','fannan.module.members::field.withdraw_card.placeholder','fannan.module.members::field.withdraw_card.warning','fannan.module.members::field.withdraw_card.instructions'),(2523,2523,'en','fannan.module.members::field.withdraw_bank_card.name','fannan.module.members::field.withdraw_bank_card.placeholder','fannan.module.members::field.withdraw_bank_card.warning','fannan.module.members::field.withdraw_bank_card.instructions'),(2524,2524,'en','fannan.module.members::field.withdraw_mobile.name','fannan.module.members::field.withdraw_mobile.placeholder','fannan.module.members::field.withdraw_mobile.warning','fannan.module.members::field.withdraw_mobile.instructions'),(2525,2525,'en','fannan.module.members::field.withdraw_member_id.name','fannan.module.members::field.withdraw_member_id.placeholder','fannan.module.members::field.withdraw_member_id.warning','fannan.module.members::field.withdraw_member_id.instructions'),(1896,1896,'en','fannan.module.members::field.is_verified.name','fannan.module.members::field.is_verified.placeholder','fannan.module.members::field.is_verified.warning','fannan.module.members::field.is_verified.instructions'),(2526,2526,'en','fannan.module.members::field.withdraw_status.name','fannan.module.members::field.withdraw_status.placeholder','fannan.module.members::field.withdraw_status.warning','fannan.module.members::field.withdraw_status.instructions'),(2527,2527,'en','fannan.module.members::field.message_title.name','fannan.module.members::field.message_title.placeholder','fannan.module.members::field.message_title.warning','fannan.module.members::field.message_title.instructions'),(2528,2528,'en','fannan.module.members::field.message_content.name','fannan.module.members::field.message_content.placeholder','fannan.module.members::field.message_content.warning','fannan.module.members::field.message_content.instructions'),(2529,2529,'en','fannan.module.members::field.message_member_id.name','fannan.module.members::field.message_member_id.placeholder','fannan.module.members::field.message_member_id.warning','fannan.module.members::field.message_member_id.instructions'),(2530,2530,'en','fannan.module.members::field.message_mobile.name','fannan.module.members::field.message_mobile.placeholder','fannan.module.members::field.message_mobile.warning','fannan.module.members::field.message_mobile.instructions'),(1645,1645,'en','fannan.module.lottery::field.prize_title.name','fannan.module.lottery::field.prize_title.placeholder','fannan.module.lottery::field.prize_title.warning','fannan.module.lottery::field.prize_title.instructions'),(2327,2327,'en','fannan.module.lottery::field.prize_grade.name','fannan.module.lottery::field.prize_grade.placeholder','fannan.module.lottery::field.prize_grade.warning','fannan.module.lottery::field.prize_grade.instructions'),(2480,2480,'en','fannan.module.members::field.id_card.name','fannan.module.members::field.id_card.placeholder','fannan.module.members::field.id_card.warning','fannan.module.members::field.id_card.instructions'),(2348,2348,'en','fannan.module.lottery::field.grant_valid_period.name','fannan.module.lottery::field.grant_valid_period.placeholder','fannan.module.lottery::field.grant_valid_period.warning','fannan.module.lottery::field.grant_valid_period.instructions'),(2347,2347,'en','fannan.module.lottery::field.grant_grade.name','fannan.module.lottery::field.grant_grade.placeholder','fannan.module.lottery::field.grant_grade.warning','fannan.module.lottery::field.grant_grade.instructions'),(2346,2346,'en','fannan.module.lottery::field.ticket_mobile.name','fannan.module.lottery::field.ticket_mobile.placeholder','fannan.module.lottery::field.ticket_mobile.warning','fannan.module.lottery::field.ticket_mobile.instructions'),(2345,2345,'en','fannan.module.lottery::field.ticket_member_id.name','fannan.module.lottery::field.ticket_member_id.placeholder','fannan.module.lottery::field.ticket_member_id.warning','fannan.module.lottery::field.ticket_member_id.instructions'),(2344,2344,'en','fannan.module.lottery::field.ticket_is_use.name','fannan.module.lottery::field.ticket_is_use.placeholder','fannan.module.lottery::field.ticket_is_use.warning','fannan.module.lottery::field.ticket_is_use.instructions'),(2343,2343,'en','fannan.module.lottery::field.ticket_valid_period.name','fannan.module.lottery::field.ticket_valid_period.placeholder','fannan.module.lottery::field.ticket_valid_period.warning','fannan.module.lottery::field.ticket_valid_period.instructions'),(2342,2342,'en','fannan.module.lottery::field.ticket_name.name','fannan.module.lottery::field.ticket_name.placeholder','fannan.module.lottery::field.ticket_name.warning','fannan.module.lottery::field.ticket_name.instructions'),(2341,2341,'en','fannan.module.lottery::field.winning_status.name','fannan.module.lottery::field.winning_status.placeholder','fannan.module.lottery::field.winning_status.warning','fannan.module.lottery::field.winning_status.instructions'),(2340,2340,'en','fannan.module.lottery::field.winning_prize_name.name','fannan.module.lottery::field.winning_prize_name.placeholder','fannan.module.lottery::field.winning_prize_name.warning','fannan.module.lottery::field.winning_prize_name.instructions'),(2339,2339,'en','fannan.module.lottery::field.winning_prize_grade.name','fannan.module.lottery::field.winning_prize_grade.placeholder','fannan.module.lottery::field.winning_prize_grade.warning','fannan.module.lottery::field.winning_prize_grade.instructions'),(2338,2338,'en','fannan.module.lottery::field.winning_member_real_name.name','fannan.module.lottery::field.winning_member_real_name.placeholder','fannan.module.lottery::field.winning_member_real_name.warning','fannan.module.lottery::field.winning_member_real_name.instructions'),(2337,2337,'en','fannan.module.lottery::field.winning_mobile.name','fannan.module.lottery::field.winning_mobile.placeholder','fannan.module.lottery::field.winning_mobile.warning','fannan.module.lottery::field.winning_mobile.instructions'),(2336,2336,'en','fannan.module.lottery::field.winning_member_id.name','fannan.module.lottery::field.winning_member_id.placeholder','fannan.module.lottery::field.winning_member_id.warning','fannan.module.lottery::field.winning_member_id.instructions'),(2335,2335,'en','fannan.module.lottery::field.winning_prize_id.name','fannan.module.lottery::field.winning_prize_id.placeholder','fannan.module.lottery::field.winning_prize_id.warning','fannan.module.lottery::field.winning_prize_id.instructions'),(2334,2334,'en','fannan.module.lottery::field.winning_lottery_id.name','fannan.module.lottery::field.winning_lottery_id.placeholder','fannan.module.lottery::field.winning_lottery_id.warning','fannan.module.lottery::field.winning_lottery_id.instructions'),(2333,2333,'en','fannan.module.lottery::field.prize_description.name','fannan.module.lottery::field.prize_description.placeholder','fannan.module.lottery::field.prize_description.warning','fannan.module.lottery::field.prize_description.instructions'),(2332,2332,'en','fannan.module.lottery::field.prize_winning_mobile.name','fannan.module.lottery::field.prize_winning_mobile.placeholder','fannan.module.lottery::field.prize_winning_mobile.warning','fannan.module.lottery::field.prize_winning_mobile.instructions'),(2331,2331,'en','fannan.module.lottery::field.prize_lottery_id.name','fannan.module.lottery::field.prize_lottery_id.placeholder','fannan.module.lottery::field.prize_lottery_id.warning','fannan.module.lottery::field.prize_lottery_id.instructions'),(2330,2330,'en','fannan.module.lottery::field.prize_num.name','fannan.module.lottery::field.prize_num.placeholder','fannan.module.lottery::field.prize_num.warning','fannan.module.lottery::field.prize_num.instructions'),(2329,2329,'en','fannan.module.lottery::field.prize_probability.name','fannan.module.lottery::field.prize_probability.placeholder','fannan.module.lottery::field.prize_probability.warning','fannan.module.lottery::field.prize_probability.instructions'),(2328,2328,'en','fannan.module.lottery::field.prize_name.name','fannan.module.lottery::field.prize_name.placeholder','fannan.module.lottery::field.prize_name.warning','fannan.module.lottery::field.prize_name.instructions'),(1995,1995,'en','fannan.module.envelopes::field.log_member_id.name','fannan.module.envelopes::field.log_member_id.placeholder','fannan.module.envelopes::field.log_member_id.warning','fannan.module.envelopes::field.log_member_id.instructions'),(2349,2349,'en','fannan.module.lottery::field.grant_num.name','fannan.module.lottery::field.grant_num.placeholder','fannan.module.lottery::field.grant_num.warning','fannan.module.lottery::field.grant_num.instructions'),(2350,2350,'en','fannan.module.lottery::field.grant_ticket_name.name','fannan.module.lottery::field.grant_ticket_name.placeholder','fannan.module.lottery::field.grant_ticket_name.warning','fannan.module.lottery::field.grant_ticket_name.instructions'),(1994,1994,'en','fannan.module.envelopes::field.envelopes_is_open.name','fannan.module.envelopes::field.envelopes_is_open.placeholder','fannan.module.envelopes::field.envelopes_is_open.warning','fannan.module.envelopes::field.envelopes_is_open.instructions'),(1993,1993,'en','fannan.module.envelopes::field.envelopes_diamond_times.name','fannan.module.envelopes::field.envelopes_diamond_times.placeholder','fannan.module.envelopes::field.envelopes_diamond_times.warning','fannan.module.envelopes::field.envelopes_diamond_times.instructions'),(1992,1992,'en','fannan.module.envelopes::field.envelopes_gold_times.name','fannan.module.envelopes::field.envelopes_gold_times.placeholder','fannan.module.envelopes::field.envelopes_gold_times.warning','fannan.module.envelopes::field.envelopes_gold_times.instructions'),(1991,1991,'en','fannan.module.envelopes::field.envelopes_silver_times.name','fannan.module.envelopes::field.envelopes_silver_times.placeholder','fannan.module.envelopes::field.envelopes_silver_times.warning','fannan.module.envelopes::field.envelopes_silver_times.instructions'),(1990,1990,'en','fannan.module.envelopes::field.envelopes_bronze_times.name','fannan.module.envelopes::field.envelopes_bronze_times.placeholder','fannan.module.envelopes::field.envelopes_bronze_times.warning','fannan.module.envelopes::field.envelopes_bronze_times.instructions'),(1989,1989,'en','fannan.module.envelopes::field.envelopes_ordinary_times.name','fannan.module.envelopes::field.envelopes_ordinary_times.placeholder','fannan.module.envelopes::field.envelopes_ordinary_times.warning','fannan.module.envelopes::field.envelopes_ordinary_times.instructions'),(1866,1866,'en','fannan.module.envelopes::field.lottery_is_open.name','fannan.module.envelopes::field.lottery_is_open.placeholder','fannan.module.envelopes::field.lottery_is_open.warning','fannan.module.envelopes::field.lottery_is_open.instructions'),(1996,1996,'en','fannan.module.envelopes::field.log_name.name','fannan.module.envelopes::field.log_name.placeholder','fannan.module.envelopes::field.log_name.warning','fannan.module.envelopes::field.log_name.instructions'),(1997,1997,'en','fannan.module.envelopes::field.log_mobile.name','fannan.module.envelopes::field.log_mobile.placeholder','fannan.module.envelopes::field.log_mobile.warning','fannan.module.envelopes::field.log_mobile.instructions'),(1988,1988,'en','fannan.module.envelopes::field.envelopes_visitor_times.name','fannan.module.envelopes::field.envelopes_visitor_times.placeholder','fannan.module.envelopes::field.envelopes_visitor_times.warning','fannan.module.envelopes::field.envelopes_visitor_times.instructions'),(1987,1987,'en','fannan.module.envelopes::field.envelopes_amount_max.name','fannan.module.envelopes::field.envelopes_amount_max.placeholder','fannan.module.envelopes::field.envelopes_amount_max.warning','fannan.module.envelopes::field.envelopes_amount_max.instructions'),(1986,1986,'en','fannan.module.envelopes::field.envelopes_amount_min.name','fannan.module.envelopes::field.envelopes_amount_min.placeholder','fannan.module.envelopes::field.envelopes_amount_min.warning','fannan.module.envelopes::field.envelopes_amount_min.instructions'),(2479,2479,'en','fannan.module.members::field.real_name.name','fannan.module.members::field.real_name.placeholder','fannan.module.members::field.real_name.warning','fannan.module.members::field.real_name.instructions'),(2478,2478,'en','fannan.module.members::field.verified_status.name','fannan.module.members::field.verified_status.placeholder','fannan.module.members::field.verified_status.warning','fannan.module.members::field.verified_status.instructions'),(2476,2476,'en','fannan.module.members::field.avatar.name','fannan.module.members::field.avatar.placeholder','fannan.module.members::field.avatar.warning','fannan.module.members::field.avatar.instructions'),(2477,2477,'en','fannan.module.members::field.grade.name','fannan.module.members::field.grade.placeholder','fannan.module.members::field.grade.warning','fannan.module.members::field.grade.instructions'),(2475,2475,'en','fannan.module.members::field.nickname.name','fannan.module.members::field.nickname.placeholder','fannan.module.members::field.nickname.warning','fannan.module.members::field.nickname.instructions'),(2473,2473,'en','fannan.module.members::field.openid.name','fannan.module.members::field.openid.placeholder','fannan.module.members::field.openid.warning','fannan.module.members::field.openid.instructions'),(2474,2474,'en','fannan.module.members::field.invitation_code.name','fannan.module.members::field.invitation_code.placeholder','fannan.module.members::field.invitation_code.warning','fannan.module.members::field.invitation_code.instructions'),(1978,1978,'en','fannan.module.advertising::field.ad_title.name','fannan.module.advertising::field.ad_title.placeholder','fannan.module.advertising::field.ad_title.warning','fannan.module.advertising::field.ad_title.instructions'),(1979,1979,'en','fannan.module.advertising::field.ad_slot.name','fannan.module.advertising::field.ad_slot.placeholder','fannan.module.advertising::field.ad_slot.warning','fannan.module.advertising::field.ad_slot.instructions'),(1980,1980,'en','fannan.module.advertising::field.ad_image.name','fannan.module.advertising::field.ad_image.placeholder','fannan.module.advertising::field.ad_image.warning','fannan.module.advertising::field.ad_image.instructions'),(1981,1981,'en','fannan.module.advertising::field.ad_url.name','fannan.module.advertising::field.ad_url.placeholder','fannan.module.advertising::field.ad_url.warning','fannan.module.advertising::field.ad_url.instructions'),(1982,1982,'en','fannan.module.advertising::field.ad_description.name','fannan.module.advertising::field.ad_description.placeholder','fannan.module.advertising::field.ad_description.warning','fannan.module.advertising::field.ad_description.instructions'),(1983,1983,'en','fannan.module.advertising::field.ad_sorting.name','fannan.module.advertising::field.ad_sorting.placeholder','fannan.module.advertising::field.ad_sorting.warning','fannan.module.advertising::field.ad_sorting.instructions'),(1984,1984,'en','fannan.module.advertising::field.slot_name.name','fannan.module.advertising::field.slot_name.placeholder','fannan.module.advertising::field.slot_name.warning','fannan.module.advertising::field.slot_name.instructions'),(1985,1985,'en','fannan.module.advertising::field.slot_description.name','fannan.module.advertising::field.slot_description.placeholder','fannan.module.advertising::field.slot_description.warning','fannan.module.advertising::field.slot_description.instructions'),(1998,1998,'en','fannan.module.envelopes::field.log_amount.name','fannan.module.envelopes::field.log_amount.placeholder','fannan.module.envelopes::field.log_amount.warning','fannan.module.envelopes::field.log_amount.instructions'),(2100,2100,'en','fannan.module.transaction::field.trade_payment_method.name','fannan.module.transaction::field.trade_payment_method.placeholder','fannan.module.transaction::field.trade_payment_method.warning','fannan.module.transaction::field.trade_payment_method.instructions'),(2101,2101,'en','fannan.module.transaction::field.trade_no.name','fannan.module.transaction::field.trade_no.placeholder','fannan.module.transaction::field.trade_no.warning','fannan.module.transaction::field.trade_no.instructions'),(2102,2102,'en','fannan.module.transaction::field.trade_project.name','fannan.module.transaction::field.trade_project.placeholder','fannan.module.transaction::field.trade_project.warning','fannan.module.transaction::field.trade_project.instructions'),(2103,2103,'en','fannan.module.transaction::field.trade_member.name','fannan.module.transaction::field.trade_member.placeholder','fannan.module.transaction::field.trade_member.warning','fannan.module.transaction::field.trade_member.instructions'),(2104,2104,'en','fannan.module.transaction::field.trade_mobile.name','fannan.module.transaction::field.trade_mobile.placeholder','fannan.module.transaction::field.trade_mobile.warning','fannan.module.transaction::field.trade_mobile.instructions'),(2041,2041,'en','fannan.module.transaction::field.trade_member_id.name','fannan.module.transaction::field.trade_member_id.placeholder','fannan.module.transaction::field.trade_member_id.warning','fannan.module.transaction::field.trade_member_id.instructions'),(2105,2105,'en','fannan.module.transaction::field.trade_status.name','fannan.module.transaction::field.trade_status.placeholder','fannan.module.transaction::field.trade_status.warning','fannan.module.transaction::field.trade_status.instructions'),(2106,2106,'en','fannan.module.transaction::field.trade_payment_time.name','fannan.module.transaction::field.trade_payment_time.placeholder','fannan.module.transaction::field.trade_payment_time.warning','fannan.module.transaction::field.trade_payment_time.instructions'),(2326,2326,'en','fannan.module.lottery::field.lottery_rule.name','fannan.module.lottery::field.lottery_rule.placeholder','fannan.module.lottery::field.lottery_rule.warning','fannan.module.lottery::field.lottery_rule.instructions'),(2325,2325,'en','fannan.module.lottery::field.lottery_description.name','fannan.module.lottery::field.lottery_description.placeholder','fannan.module.lottery::field.lottery_description.warning','fannan.module.lottery::field.lottery_description.instructions'),(2098,2098,'en','fannan.module.transaction::field.trade_out_no.name','fannan.module.transaction::field.trade_out_no.placeholder','fannan.module.transaction::field.trade_out_no.warning','fannan.module.transaction::field.trade_out_no.instructions'),(2099,2099,'en','fannan.module.transaction::field.trade_amount.name','fannan.module.transaction::field.trade_amount.placeholder','fannan.module.transaction::field.trade_amount.warning','fannan.module.transaction::field.trade_amount.instructions'),(2324,2324,'en','fannan.module.lottery::field.lottery_is_open.name','fannan.module.lottery::field.lottery_is_open.placeholder','fannan.module.lottery::field.lottery_is_open.warning','fannan.module.lottery::field.lottery_is_open.instructions'),(2323,2323,'en','fannan.module.lottery::field.lottery_is_ticket.name','fannan.module.lottery::field.lottery_is_ticket.placeholder','fannan.module.lottery::field.lottery_is_ticket.warning','fannan.module.lottery::field.lottery_is_ticket.instructions'),(2319,2319,'en','fannan.module.lottery::field.lottery_title.name','fannan.module.lottery::field.lottery_title.placeholder','fannan.module.lottery::field.lottery_title.warning','fannan.module.lottery::field.lottery_title.instructions'),(2320,2320,'en','fannan.module.lottery::field.lottery_start.name','fannan.module.lottery::field.lottery_start.placeholder','fannan.module.lottery::field.lottery_start.warning','fannan.module.lottery::field.lottery_start.instructions'),(2321,2321,'en','fannan.module.lottery::field.lottery_end.name','fannan.module.lottery::field.lottery_end.placeholder','fannan.module.lottery::field.lottery_end.warning','fannan.module.lottery::field.lottery_end.instructions'),(2322,2322,'en','fannan.module.lottery::field.lottery_times.name','fannan.module.lottery::field.lottery_times.placeholder','fannan.module.lottery::field.lottery_times.warning','fannan.module.lottery::field.lottery_times.instructions'),(2472,2472,'en','fannan.module.members::field.password.name','fannan.module.members::field.password.placeholder','fannan.module.members::field.password.warning','fannan.module.members::field.password.instructions'),(2471,2471,'en','fannan.module.members::field.mobile.name','fannan.module.members::field.mobile.placeholder','fannan.module.members::field.mobile.warning','fannan.module.members::field.mobile.instructions');

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
) ENGINE=MyISAM AUTO_INCREMENT=328 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `default_streams_streams` */

insert  into `default_streams_streams`(`id`,`namespace`,`slug`,`prefix`,`title_column`,`order_by`,`locked`,`hidden`,`sortable`,`searchable`,`trashable`,`translatable`,`config`) values (16,'configuration','configuration','configuration_','id','id',1,0,0,0,0,0,'a:0:{}'),(17,'dashboard','dashboards','dashboard_','name','id',0,0,1,0,1,1,'a:0:{}'),(18,'dashboard','widgets','dashboard_','title','id',0,0,1,0,1,1,'a:0:{}'),(19,'files','disks','files_','name','id',0,0,1,0,1,1,'a:0:{}'),(20,'files','folders','files_','name','id',0,0,1,0,1,1,'a:0:{}'),(22,'navigation','menus','navigation_','name','id',0,0,0,0,1,1,'a:0:{}'),(23,'navigation','links','navigation_','id','id',0,0,1,0,1,0,'a:0:{}'),(24,'pages','pages','pages_','title','id',0,0,1,1,1,1,'a:0:{}'),(25,'pages','types','pages_','name','id',0,0,1,0,1,1,'a:0:{}'),(46,'posts','categories','posts_','name','id',0,0,1,0,1,1,'a:0:{}'),(47,'posts','posts','posts_','title','id',0,0,0,1,1,1,'a:0:{}'),(29,'preferences','preferences','preferences_','id','id',0,0,0,0,0,0,'a:0:{}'),(30,'redirects','redirects','redirects_','from','id',0,0,1,0,1,0,'a:0:{}'),(21,'files','files','files_','name','id',0,0,0,1,1,0,'a:0:{}'),(48,'posts','types','posts_','name','id',0,0,1,0,1,1,'a:0:{}'),(31,'settings','settings','settings_','id','id',0,0,0,0,0,0,'a:0:{}'),(32,'users','users','users_','display_name','id',0,0,0,1,1,0,'a:0:{}'),(33,'users','roles','users_','name','id',0,0,0,0,1,1,'a:0:{}'),(34,'page_link_type','pages','page_link_type_','title','id',0,0,0,0,0,1,'a:0:{}'),(35,'url_link_type','urls','url_link_type_','title','id',0,0,0,0,0,1,'a:0:{}'),(36,'files','images','files_','id','id',0,0,0,0,1,1,'a:0:{}'),(37,'files','documents','files_','id','id',0,0,0,0,1,1,'a:0:{}'),(38,'pages','default_pages','pages_','id','id',0,1,0,0,1,1,'a:0:{}'),(39,'posts','default_posts','posts_','id','id',0,1,0,0,1,1,'a:0:{}'),(49,'posts','atlas_posts','posts_','id','id',0,1,0,0,1,1,'a:0:{}'),(50,'posts','video_posts','posts_','id','id',0,1,0,0,1,1,'a:0:{}'),(51,'files','video','files_','id','id',0,0,0,0,1,1,'a:0:{}'),(52,'posts','voice_posts','posts_','id','id',0,1,0,0,1,1,'a:0:{}'),(53,'files','voice','files_','id','id',0,0,0,0,1,1,'a:0:{}'),(55,'test','test','test_','name','id',0,0,0,0,0,1,'a:0:{}'),(321,'members','members','members_','mobile','id',0,0,0,0,0,0,'a:0:{}'),(322,'members','integral','members_','id','id',0,0,0,0,0,1,'a:0:{}'),(323,'members','gold','members_','id','id',0,0,0,0,0,1,'a:0:{}'),(324,'members','loan','members_','id','id',0,0,0,0,0,1,'a:0:{}'),(325,'members','repayment','members_','id','id',0,0,0,0,0,1,'a:0:{}'),(326,'members','withdraw','members_','id','id',0,0,0,0,0,1,'a:0:{}'),(302,'lottery','lottery','lottery_','lottery_title','id',0,0,0,0,0,1,'a:0:{}'),(303,'lottery','prize','lottery_','prize_name','id',0,0,0,0,0,1,'a:0:{}'),(304,'lottery','winning','lottery_','id','id',0,0,0,0,0,1,'a:0:{}'),(252,'envelopes','envelopes','envelopes_','id','id',0,0,0,0,0,1,'a:0:{}'),(253,'envelopes','log','envelopes_','id','id',0,0,0,0,0,1,'a:0:{}'),(327,'members','message','members_','id','id',0,0,0,0,0,1,'a:0:{}'),(250,'advertising','advertising','advertising_','ad_title','id',0,0,0,0,0,1,'a:0:{}'),(251,'advertising','slot','advertising_','slot_name','id',0,0,0,0,0,1,'a:0:{}'),(266,'transaction','transaction','transaction_','trade_out_no','id',0,0,0,0,0,1,'a:0:{}'),(305,'lottery','ticket','lottery_','id','id',0,0,0,0,0,1,'a:0:{}'),(306,'lottery','grant','lottery_','id','id',0,0,0,0,0,1,'a:0:{}');

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
) ENGINE=MyISAM AUTO_INCREMENT=328 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `default_streams_streams_translations` */

insert  into `default_streams_streams_translations`(`id`,`stream_id`,`locale`,`name`,`description`) values (16,16,'en','anomaly.module.configuration::stream.configuration.name','anomaly.module.configuration::stream.configuration.description'),(17,17,'en','anomaly.module.dashboard::stream.dashboards.name','anomaly.module.dashboard::stream.dashboards.description'),(18,18,'en','anomaly.module.dashboard::stream.widgets.name','anomaly.module.dashboard::stream.widgets.description'),(19,19,'en','anomaly.module.files::stream.disks.name','anomaly.module.files::stream.disks.description'),(20,20,'en','anomaly.module.files::stream.folders.name','anomaly.module.files::stream.folders.description'),(21,21,'en','anomaly.module.files::stream.files.name','anomaly.module.files::stream.files.description'),(22,22,'en','anomaly.module.navigation::stream.menus.name','anomaly.module.navigation::stream.menus.description'),(23,23,'en','anomaly.module.navigation::stream.links.name','anomaly.module.navigation::stream.links.description'),(24,24,'en','anomaly.module.pages::stream.pages.name','anomaly.module.pages::stream.pages.description'),(25,25,'en','anomaly.module.pages::stream.types.name','anomaly.module.pages::stream.types.description'),(46,46,'en','anomaly.module.posts::stream.categories.name','anomaly.module.posts::stream.categories.description'),(47,47,'en','anomaly.module.posts::stream.posts.name','anomaly.module.posts::stream.posts.description'),(48,48,'en','anomaly.module.posts::stream.types.name','anomaly.module.posts::stream.types.description'),(29,29,'en','anomaly.module.preferences::stream.preferences.name','anomaly.module.preferences::stream.preferences.description'),(30,30,'en','anomaly.module.redirects::stream.redirects.name','anomaly.module.redirects::stream.redirects.description'),(31,31,'en','anomaly.module.settings::stream.settings.name','anomaly.module.settings::stream.settings.description'),(32,32,'en','anomaly.module.users::stream.users.name','anomaly.module.users::stream.users.description'),(33,33,'en','anomaly.module.users::stream.roles.name','anomaly.module.users::stream.roles.description'),(34,34,'en','anomaly.extension.page_link_type::stream.pages.name','anomaly.extension.page_link_type::stream.pages.description'),(35,35,'en','anomaly.extension.url_link_type::stream.urls.name','anomaly.extension.url_link_type::stream.urls.description'),(36,36,'en','Images','A folder for images.'),(37,37,'en','Documents','A folder for documents.'),(38,38,'en','Default','A simple page type.'),(39,39,'en','Default',NULL),(49,49,'en','图集',NULL),(50,50,'en','视频',NULL),(51,51,'en','Video','视频存储目录'),(52,52,'en','语音',NULL),(53,53,'en','Voice','音频存储目录'),(55,55,'en','fannan.module.test::stream.test.name','fannan.module.test::stream.test.description'),(321,321,'en','fannan.module.members::stream.members.name','fannan.module.members::stream.members.description'),(322,322,'en','fannan.module.members::stream.integral.name','fannan.module.members::stream.integral.description'),(323,323,'en','fannan.module.members::stream.gold.name','fannan.module.members::stream.gold.description'),(324,324,'en','fannan.module.members::stream.loan.name','fannan.module.members::stream.loan.description'),(325,325,'en','fannan.module.members::stream.repayment.name','fannan.module.members::stream.repayment.description'),(326,326,'en','fannan.module.members::stream.withdraw.name','fannan.module.members::stream.withdraw.description'),(302,302,'en','fannan.module.lottery::stream.lottery.name','fannan.module.lottery::stream.lottery.description'),(303,303,'en','fannan.module.lottery::stream.prize.name','fannan.module.lottery::stream.prize.description'),(304,304,'en','fannan.module.lottery::stream.winning.name','fannan.module.lottery::stream.winning.description'),(305,305,'en','fannan.module.lottery::stream.ticket.name','fannan.module.lottery::stream.ticket.description'),(252,252,'en','fannan.module.envelopes::stream.envelopes.name','fannan.module.envelopes::stream.envelopes.description'),(253,253,'en','fannan.module.envelopes::stream.log.name','fannan.module.envelopes::stream.log.description'),(327,327,'en','fannan.module.members::stream.message.name','fannan.module.members::stream.message.description'),(250,250,'en','fannan.module.advertising::stream.advertising.name','fannan.module.advertising::stream.advertising.description'),(251,251,'en','fannan.module.advertising::stream.slot.name','fannan.module.advertising::stream.slot.description'),(266,266,'en','fannan.module.transaction::stream.transaction.name','fannan.module.transaction::stream.transaction.description'),(306,306,'en','fannan.module.lottery::stream.grant.name','fannan.module.lottery::stream.grant.description');

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

/*Table structure for table `default_transaction_transaction` */

DROP TABLE IF EXISTS `default_transaction_transaction`;

CREATE TABLE `default_transaction_transaction` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `sort_order` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `created_by_id` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by_id` int(11) DEFAULT NULL,
  `trade_out_no` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `trade_amount` double(11,2) DEFAULT NULL,
  `trade_payment_method` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `trade_no` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `trade_project` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `trade_member_id` int(11) DEFAULT NULL,
  `trade_mobile` int(11) DEFAULT NULL,
  `trade_status` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `trade_payment_time` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `default_transaction_transaction` */

insert  into `default_transaction_transaction`(`id`,`sort_order`,`created_at`,`created_by_id`,`updated_at`,`updated_by_id`,`trade_out_no`,`trade_amount`,`trade_payment_method`,`trade_no`,`trade_project`,`trade_member_id`,`trade_mobile`,`trade_status`,`trade_payment_time`) values (1,1,'2017-08-28 16:55:11',NULL,NULL,NULL,'828105113938500',0.01,NULL,NULL,'购买会员',1,2147483647,'1',NULL),(2,2,'2017-08-28 18:13:36',NULL,NULL,NULL,'828152160884879',0.01,NULL,NULL,'购买会员',1,2147483647,'1',NULL),(3,3,'2017-08-29 09:08:30',NULL,NULL,NULL,'829689104272300',0.01,NULL,NULL,'购买会员',1,2147483647,'1',NULL),(4,4,'2017-08-29 14:52:28',NULL,NULL,NULL,'829895482368307',0.01,NULL,NULL,'购买会员',1,2147483647,'1',NULL),(5,5,'2017-08-29 15:19:24',NULL,'2017-08-29 15:19:36',NULL,'829911641406798',0.01,NULL,NULL,'购买会员',1,2147483647,'2','2017-08-29 15:19:47'),(6,6,'2017-08-29 22:41:39',NULL,NULL,NULL,'829176991004619',0.01,NULL,NULL,'购买会员',1,2147483647,'1',NULL),(7,7,'2017-08-29 22:42:38',NULL,'2017-08-29 22:42:52',NULL,'829177583153521',0.01,'支付宝','2017082921001004510215752971','购买会员',1,2147483647,'2','2017-08-29 22:43:05'),(8,8,'2017-08-29 22:43:43',NULL,'2017-08-29 22:43:54',NULL,'829178235369814',0.01,'支付宝','2017082921001004510215763271','购买会员',1,2147483647,'2','2017-08-29 22:44:07'),(9,9,'2017-08-29 22:49:55',NULL,'2017-08-29 22:50:03',NULL,'829181954078777',0.01,'支付宝','2017082921001004510215515381','购买会员',1,2147483647,'2','2017-08-29 22:50:16'),(10,10,'2017-08-30 00:13:47',NULL,'2017-08-30 00:13:55',NULL,'830232272623327',0.01,'支付宝','2017083021001004510215849372','购买会员',10,2147483647,'2','2017-08-30 00:14:08'),(11,11,'2017-08-30 00:20:40',NULL,'2017-08-30 00:20:52',NULL,'830236406299635',0.01,'支付宝','2017083021001004510215832333','购买会员',10,2147483647,'2','2017-08-30 00:21:05'),(12,12,'2017-09-13 14:52:01',NULL,NULL,NULL,'913855213508198',0.01,NULL,NULL,'购买会员',1,2147483647,'1',NULL),(13,13,'2017-09-19 16:50:36',NULL,NULL,NULL,'919110360622289',0.01,NULL,NULL,'购买会员',1,2147483647,'1',NULL);

/*Table structure for table `default_transaction_transaction_translations` */

DROP TABLE IF EXISTS `default_transaction_transaction_translations`;

CREATE TABLE `default_transaction_transaction_translations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `entry_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `created_by_id` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by_id` int(11) DEFAULT NULL,
  `locale` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `transaction_transaction_translations_locale_index` (`locale`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `default_transaction_transaction_translations` */

insert  into `default_transaction_transaction_translations`(`id`,`entry_id`,`created_at`,`created_by_id`,`updated_at`,`updated_by_id`,`locale`) values (1,1,'2017-08-28 16:55:11',NULL,'2017-08-28 16:55:11',NULL,'zh-cn'),(2,2,'2017-08-28 18:13:36',NULL,'2017-08-28 18:13:36',NULL,'zh-cn'),(3,3,'2017-08-29 09:08:30',NULL,'2017-08-29 09:08:30',NULL,'zh-cn'),(4,4,'2017-08-29 14:52:28',NULL,'2017-08-29 14:52:28',NULL,'zh-cn'),(5,5,'2017-08-29 15:19:24',NULL,'2017-08-29 15:19:24',NULL,'zh-cn'),(6,6,'2017-08-29 22:41:39',NULL,'2017-08-29 22:41:39',NULL,'zh-cn'),(7,7,'2017-08-29 22:42:38',NULL,'2017-08-29 22:42:38',NULL,'zh-cn'),(8,8,'2017-08-29 22:43:43',NULL,'2017-08-29 22:43:43',NULL,'zh-cn'),(9,9,'2017-08-29 22:49:55',NULL,'2017-08-29 22:49:55',NULL,'zh-cn'),(10,10,'2017-08-30 00:13:47',NULL,'2017-08-30 00:13:47',NULL,'zh-cn'),(11,11,'2017-08-30 00:20:40',NULL,'2017-08-30 00:20:40',NULL,'zh-cn'),(12,12,'2017-09-13 14:52:01',NULL,'2017-09-13 14:52:01',NULL,'zh-cn'),(13,13,'2017-09-19 16:50:36',NULL,'2017-09-19 16:50:36',NULL,'zh-cn');

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

insert  into `default_users_roles`(`id`,`sort_order`,`created_at`,`created_by_id`,`updated_at`,`updated_by_id`,`deleted_at`,`slug`,`permissions`) values (1,1,'2017-06-30 09:01:58',NULL,NULL,NULL,NULL,'admin',NULL),(2,2,'2017-06-30 09:01:58',NULL,'2017-08-28 15:30:02',1,NULL,'user','a:1:{i:1;s:29:\"streams::control_panel.access\";}'),(3,3,'2017-06-30 09:01:58',NULL,NULL,NULL,NULL,'guest',NULL);

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

insert  into `default_users_users`(`id`,`sort_order`,`created_at`,`created_by_id`,`updated_at`,`updated_by_id`,`deleted_at`,`email`,`username`,`password`,`display_name`,`first_name`,`last_name`,`activated`,`enabled`,`permissions`,`last_login_at`,`remember_token`,`activation_code`,`reset_code`,`last_activity_at`,`ip_address`) values (1,1,'2017-06-30 09:01:58',NULL,'2017-09-21 17:23:21',1,NULL,'admin@gmail.com','admin','$2y$10$CxjvmFkXfatkEhK84bMIveyuFEo.dvDKDpw9uXY26I8bDDa8DRHEm','Administrator',NULL,NULL,1,1,NULL,'2017-09-21 17:23:21','S66sVq12dYTzeATDo3qZd5sVyH8T1qUWe8t0AhRPdlNz96yhafN4hU2lqSsx',NULL,NULL,'2017-08-28 15:31:14','127.0.0.1'),(2,2,'2017-06-30 09:01:59',NULL,'2017-08-28 15:31:50',2,NULL,'demo@pyrocms.com','demo','$2y$10$RcK0reR6omb2bGtvv06rNukBq3CiR3wMDM0cDiVlLSwxuKRnzs/7y','Demo User',NULL,NULL,1,1,'a:3:{i:30;s:43:\"fannan.module.advertising::advertising.read\";i:31;s:44:\"fannan.module.advertising::advertising.write\";i:32;s:45:\"fannan.module.advertising::advertising.delete\";}','2017-08-28 15:31:26','53covznBsn9MHY4v9ei0KrwLL8eIXKeKaVBYmYO9W6Ok2N46vKLZnbe3pSaT',NULL,NULL,'2017-08-28 15:31:50','127.0.0.1');

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

insert  into `default_users_users_roles`(`id`,`entry_id`,`related_id`,`sort_order`) values (1,2,2,0),(2,1,1,NULL);

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
