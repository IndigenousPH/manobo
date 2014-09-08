-- MySQL dump 10.13  Distrib 5.5.38, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: MANOBO
-- ------------------------------------------------------
-- Server version	5.5.38-0ubuntu0.14.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `cms_group_followers`
--

DROP TABLE IF EXISTS `cms_group_followers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cms_group_followers` (
  `uuid` char(80) NOT NULL,
  `group_uuid` char(80) NOT NULL,
  `user_uuid_follower` char(80) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`uuid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `cms_group_members`
--

DROP TABLE IF EXISTS `cms_group_members`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cms_group_members` (
  `uuid` char(80) NOT NULL,
  `group_uuid` char(80) NOT NULL,
  `user_uuid` char(80) NOT NULL,
  `username` char(80) NOT NULL,
  `member_type` char(40) NOT NULL DEFAULT '',
  PRIMARY KEY (`uuid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `cms_group_pledges`
--

DROP TABLE IF EXISTS `cms_group_pledges`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cms_group_pledges` (
  `uuid` char(80) NOT NULL,
  `group_uuid` char(80) NOT NULL,
  `user_uuid` char(80) NOT NULL,
  `type` char(20) NOT NULL,
  `pledge_name` char(40) NOT NULL,
  `quantity` int(20) NOT NULL DEFAULT '0',
  `unit` char(20) NOT NULL DEFAULT '',
  `value` float(20,8) NOT NULL DEFAULT '0.00000000',
  `status` char(20) NOT NULL DEFAULT '',
  `datetime_created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `datetime_recieved` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`uuid`),
  KEY `group_uuid` (`group_uuid`),
  KEY `user_uuid` (`user_uuid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `cms_groups`
--

DROP TABLE IF EXISTS `cms_groups`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cms_groups` (
  `uuid` char(80) NOT NULL,
  `name` char(80) NOT NULL,
  `user_uuid` char(80) NOT NULL,
  `member_count` int(11) NOT NULL DEFAULT '0',
  `datetime_created` datetime NOT NULL DEFAULT '2014-01-01 00:00:00',
  PRIMARY KEY (`uuid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `cms_namespace`
--

DROP TABLE IF EXISTS `cms_namespace`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cms_namespace` (
  `uuid` char(80) NOT NULL,
  `name` char(80) NOT NULL,
  `type` char(40) NOT NULL DEFAULT 'user' COMMENT 'user,app,event',
  `privacy` char(40) NOT NULL DEFAULT 'private',
  `reference_uuid` char(80) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  UNIQUE KEY `name` (`name`),
  KEY `uuid` (`uuid`),
  KEY `type` (`type`,`reference_uuid`,`name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `cms_pages`
--

DROP TABLE IF EXISTS `cms_pages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cms_pages` (
  `uuid` char(80) NOT NULL,
  `username_uuid` char(80) NOT NULL,
  `username` char(80) NOT NULL,
  `author_name` char(80) NOT NULL,
  `page_name` char(80) NOT NULL,
  `title` char(255) NOT NULL,
  `teaser` char(255) NOT NULL,
  `body` text NOT NULL,
  `tags` char(255) NOT NULL,
  `views` int(20) NOT NULL DEFAULT '0',
  `datetime_published` datetime NOT NULL,
  PRIMARY KEY (`uuid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `cms_project_followers`
--

DROP TABLE IF EXISTS `cms_project_followers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cms_project_followers` (
  `uuid` char(80) NOT NULL,
  `project_uuid` char(80) NOT NULL,
  `user_uuid_follower` char(80) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`uuid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `cms_project_members`
--

DROP TABLE IF EXISTS `cms_project_members`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cms_project_members` (
  `uuid` char(80) NOT NULL,
  `project_uuid` char(80) NOT NULL,
  `user_uuid` char(80) NOT NULL,
  `username` char(80) NOT NULL,
  PRIMARY KEY (`uuid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `cms_project_pledges`
--

DROP TABLE IF EXISTS `cms_project_pledges`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cms_project_pledges` (
  `uuid` char(80) NOT NULL,
  `project_uuid` char(80) NOT NULL,
  `user_uuid` char(80) NOT NULL,
  `type` char(20) NOT NULL,
  `pledge_name` char(40) NOT NULL,
  `quantity` int(20) NOT NULL DEFAULT '0',
  `unit` char(20) NOT NULL DEFAULT '',
  `value` float(20,8) NOT NULL DEFAULT '0.00000000',
  `status` char(20) NOT NULL DEFAULT '',
  `datetime_created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `datetime_recieved` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`uuid`),
  KEY `project_uuid` (`project_uuid`),
  KEY `user_uuid` (`user_uuid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `cms_projects`
--

DROP TABLE IF EXISTS `cms_projects`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cms_projects` (
  `uuid` char(80) NOT NULL,
  `name` char(80) NOT NULL,
  `user_uuid` char(80) NOT NULL DEFAULT '',
  `group_uuid` char(80) NOT NULL DEFAULT '',
  `follower_count` int(11) NOT NULL DEFAULT '0',
  `member_count` int(11) NOT NULL DEFAULT '0',
  `pledge_count` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`uuid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `cms_provinces`
--

DROP TABLE IF EXISTS `cms_provinces`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cms_provinces` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(300) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `user_count` int(20) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `sys_apps`
--

DROP TABLE IF EXISTS `sys_apps`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sys_apps` (
  `uuid` char(80) NOT NULL,
  `mode` char(20) NOT NULL DEFAULT 'developer' COMMENT 'developer,private,public',
  `type` char(40) NOT NULL,
  `is_featured` int(1) NOT NULL DEFAULT '0',
  `name` char(40) NOT NULL,
  `make_major` int(11) NOT NULL DEFAULT '0',
  `make_minor` int(11) NOT NULL DEFAULT '0',
  `make_revision` int(11) NOT NULL DEFAULT '0',
  `base_url` char(255) NOT NULL,
  `caption` char(80) NOT NULL,
  `intro` char(160) NOT NULL,
  `company` char(80) NOT NULL,
  `contact_email` char(80) NOT NULL,
  `contact_number` char(40) NOT NULL,
  `keywords` text NOT NULL,
  `description` text NOT NULL,
  `datetime_created` datetime NOT NULL,
  UNIQUE KEY `uuid` (`uuid`),
  KEY `app_name` (`name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `sys_mailer_outbox`
--

DROP TABLE IF EXISTS `sys_mailer_outbox`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sys_mailer_outbox` (
  `uuid` char(40) NOT NULL,
  `type` char(20) NOT NULL DEFAULT '',
  `status` char(40) NOT NULL DEFAULT '',
  `sender` char(80) NOT NULL,
  `recipient` char(80) NOT NULL,
  `subject` char(160) NOT NULL,
  `message` text NOT NULL,
  `datetime_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`uuid`),
  KEY `status` (`status`),
  KEY `datetime_created` (`datetime_created`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `ums_user_followers`
--

DROP TABLE IF EXISTS `ums_user_followers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ums_user_followers` (
  `uuid` char(80) NOT NULL,
  `user_uuid` char(80) NOT NULL,
  `user_uuid_follower` char(80) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`uuid`),
  KEY `user_uuid` (`user_uuid`),
  KEY `user_uuid_follower` (`user_uuid_follower`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `ums_user_profiles`
--

DROP TABLE IF EXISTS `ums_user_profiles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ums_user_profiles` (
  `uuid` char(40) NOT NULL,
  `fullname` char(120) NOT NULL,
  `city_id` int(11) NOT NULL DEFAULT '0',
  `province_id` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`uuid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `ums_users`
--

DROP TABLE IF EXISTS `ums_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ums_users` (
  `uuid` char(40) NOT NULL,
  `username` char(40) NOT NULL,
  `password` char(80) NOT NULL,
  `email_address` char(80) NOT NULL,
  `project_counter` int(11) NOT NULL DEFAULT '0',
  `group_counter` int(11) NOT NULL DEFAULT '0',
  `follower_counter` int(11) NOT NULL DEFAULT '0',
  `datetime_registered` datetime NOT NULL DEFAULT '2014-01-01 00:00:00',
  `datetime_change` datetime NOT NULL DEFAULT '2014-01-01 00:00:00',
  PRIMARY KEY (`uuid`),
  KEY `email_address` (`email_address`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-09-08 10:10:29
