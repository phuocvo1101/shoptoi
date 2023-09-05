/*
SQLyog Ultimate v11.11 (64 bit)
MySQL - 5.1.73 : Database - lar_phuocvo
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`lar_phuocvo` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci */;

USE `lar_phuocvo`;

/*Table structure for table `cate_news` */

DROP TABLE IF EXISTS `cate_news`;

CREATE TABLE `cate_news` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alias` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `parent_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `cate_news` */

insert  into `cate_news`(`id`,`name`,`alias`,`description`,`parent_id`) values (1,'Tin Tức','tin-tuc','',0),(2,'Khuyến Mãi','khuyen-mai','',0),(3,'Giới Thiệu','gioi-thieu','',0);

/*Table structure for table `cates` */

DROP TABLE IF EXISTS `cates`;

CREATE TABLE `cates` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alias` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `order` int(11) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `keywords` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `cates_name_unique` (`name`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `cates` */

insert  into `cates`(`id`,`name`,`alias`,`order`,`parent_id`,`keywords`,`description`,`created_at`,`updated_at`) values (1,'quan','quan',1,0,'1245tet','tryrtut','2016-03-28 11:02:52','2016-03-28 11:02:52'),(2,'ao','ao',3,0,'ao ','ao thoi trang','2016-03-28 16:22:45','2016-03-28 16:22:45'),(3,'ao thun','ao-thun',4,2,'ao thun','ao thun','2016-03-28 16:23:23','2016-03-28 16:23:23'),(4,'quan jean','quan-jean',5,1,'quan jean','quan jean','2016-03-28 16:24:10','2016-03-28 16:24:10'),(5,'quan tay','quan-tay',6,1,'quan tay','quan tay','2016-03-28 16:24:46','2016-03-28 16:24:46');

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`migration`,`batch`) values ('2014_10_12_000000_create_users_table',1),('2014_10_12_100000_create_password_resets_table',1),('2016_03_23_064335_create_cates_table',1),('2016_03_23_065534_create_products_table',1),('2016_03_23_070752_create_product_images_table',1),('2016_03_31_085102_create_cate_news_table',2),('2016_03_31_085133_create_news_table',2);

/*Table structure for table `news` */

DROP TABLE IF EXISTS `news`;

CREATE TABLE `news` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alias` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `intro` text COLLATE utf8_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `keywords` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cate_news_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `news` */

insert  into `news`(`id`,`name`,`alias`,`intro`,`content`,`image`,`keywords`,`cate_news_id`,`user_id`,`description`,`created_at`,`updated_at`) values (1,'Sieu Xe2','sieu-xe2','<p>fsdf2</p>\r\n','<p>fsdfsfsdfsdf2</p>\r\n','OJ8bq5rmHIty7FWz5yd71.png','fdsfs2',2,2,'dfsdfsfsf2','2016-03-31 10:59:05','2016-03-31 16:03:08'),(3,'Tin Tuc Siêu xe','tin-tuc-sieu-xe','<p>Giới thieu sieu xe</p>\r\n','<p>Body sieu xe&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n','XLGbq9RuyflrfstUNfMLpost-img.png','xe hoi',1,2,'xe nhap khau','2016-03-31 16:07:16','2016-03-31 16:07:16'),(4,'Gioi thieu xe','gioi-thieu-xe','','<p>trang gioi thieu</p>\r\n','r9z5AiFnmp0gKjAnVrkNwelcome.png','gioi thieu',3,2,'','2016-03-31 16:09:28','2016-03-31 16:09:28');

/*Table structure for table `password_resets` */

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `password_resets` */

/*Table structure for table `product_images` */

DROP TABLE IF EXISTS `product_images`;

CREATE TABLE `product_images` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `product_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `product_images_product_id_foreign` (`product_id`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `product_images` */

insert  into `product_images`(`id`,`image`,`created_at`,`updated_at`,`product_id`) values (24,'OXKBxwAIYerJ9izcExOGnoidung1.png',NULL,NULL,12),(25,'8aYDD5w5V8fYb08U2pWHpost-img-3.png',NULL,NULL,12),(23,'',NULL,NULL,0);

/*Table structure for table `products` */

DROP TABLE IF EXISTS `products`;

CREATE TABLE `products` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alias` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `intro` text COLLATE utf8_unicode_ci NOT NULL,
  `content1` longtext COLLATE utf8_unicode_ci NOT NULL,
  `content2` longtext COLLATE utf8_unicode_ci,
  `content3` longtext COLLATE utf8_unicode_ci,
  `content4` longtext COLLATE utf8_unicode_ci,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `keywords` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `cate_id` int(10) unsigned NOT NULL,
  `new_product` tinyint(4) DEFAULT '0',
  `old_product` tinyint(4) DEFAULT '0',
  `promotion_product` tinyint(4) DEFAULT '0',
  `import_product` tinyint(4) DEFAULT '0',
  `cate_news_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `products_name_unique` (`name`),
  KEY `products_user_id_foreign` (`user_id`),
  KEY `products_cate_id_foreign` (`cate_id`),
  KEY `products_cate_news_id_foreign` (`cate_news_id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `products` */

insert  into `products`(`id`,`name`,`alias`,`price`,`intro`,`content1`,`content2`,`content3`,`content4`,`image`,`keywords`,`description`,`created_at`,`updated_at`,`user_id`,`cate_id`,`new_product`,`old_product`,`promotion_product`,`import_product`,`cate_news_id`) values (7,'ao thun nu','120000',120000,'<p>ao thun nu mua he</p>\r\n','<p>ban co the mua ao thun nu o shop chung toi</p>\r\n',NULL,NULL,NULL,'12801504_259425814388681_7422531831212638404_n.jpg','ao thun cao cap','ao thun cao cap','2016-03-29 06:53:28','2016-03-29 06:53:28',1,3,0,0,0,0,0),(5,'quan jean','300000',300000,'<p>thisis intro</p>\r\n','<p>this is body</p>\r\n',NULL,NULL,NULL,'china_stationery_reports_2013_decline_27022014_1030.jpg','quan jean','quan jean','2016-03-29 03:42:03','2016-03-29 03:42:03',1,1,0,0,0,0,0),(6,'ao so mi nam 1','ao-so-mi-nam-1',3000001,'<p>this is intro1</p>\r\n','<p>this is content1</p>\r\n',NULL,NULL,NULL,'m.jpg','1111','111111','2016-03-29 04:29:04','2016-03-29 16:27:01',1,2,0,0,0,0,0),(8,'quan tay thoi trang','4000000',4000000,'<p>quan tay dep lam</p>\r\n','<p>hay mua quan tay di</p>\r\n',NULL,NULL,NULL,'china_stationery_reports_2013_decline_27022014_1030.jpg','','','2016-03-29 07:47:53','2016-03-29 07:47:53',1,5,0,0,0,0,0),(9,'gfgfd1','gfgfd1',66655677,'','',NULL,NULL,NULL,'J4Hh1MWQ297ErZz1MuciDesert.jpg','rgfdgd','gfdgdfgdf','2016-03-29 10:47:58','2016-03-29 17:02:43',1,1,0,0,0,0,0),(10,'quan tay han quoc','quan-tay-han-quoc',900000,'<p>quan tay han quoc tuyet dep</p>\r\n','<p>ban hay nhanh tay lua chon cho minh quan tay han quoc tuyet dep</p>\r\n',NULL,NULL,NULL,'zwplUBbhfBOo5sDKndconoidung4.png','quan tay','quan tay','2016-03-30 06:29:37','2016-03-30 06:40:24',1,5,0,0,0,1,0),(11,'ao so mi nu','600000',600000,'<p>intro</p>\r\n','<p>san pham hang hieu Duc</p>\r\n','<p>thong so ky thuat</p>\r\n','<p>mau noi that</p>\r\n','<p>mau ngoai that</p>\r\n','9rHC8JxyZa3Jqhfmwxf51.png','ao so mi thoi trang','ao so mi cao cap','2016-03-30 09:38:54','2016-03-30 09:38:54',1,2,1,0,1,0,0),(12,'ao so mi nu11','ao-so-mi-nu11',600000,'<p>intro</p>\r\n','<p>11111</p>\r\n','<p>222222</p>\r\n','<p>333333</p>\r\n','<p>44444444</p>\r\n','VlUyDB2f0Nh9wJWqg0oEnoidung4.png','ao so mi thoi trang','sfsfsdfsdf','2016-03-30 09:40:00','2016-03-31 15:52:13',2,2,1,0,1,0,0);

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `level` tinyint(4) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_username_unique` (`username`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`username`,`password`,`email`,`level`,`remember_token`,`created_at`,`updated_at`) values (1,'phuocvo','$2y$10$CZ5FQlqaMsm.JfIavLtjnOjp29GooZzbV0O7DXVH.vUsRlIkySQU.','phuocvo@gmail.com',1,'q3pFSBNBVIEzw6NOHGxHtRCfTQgsbCauk6F4W6uUBruB3N6FB61X1MTadHoM','2016-03-30 08:22:46','2016-03-31 08:12:49'),(2,'admin','$2y$10$w0xpl8D12pJau0OrQNX6..tjV2tOc0BEl0uft0GdpJErKXi48CA02','admin1111@gmail.com',1,'t8HpgsH5RxO2sIrA3HlXEXoqLH6o2onJrXTN16gIpyV9dm6wQISXSU8EolH2','2016-03-30 08:28:34','2016-03-31 16:10:50'),(3,'Huan_nguyen','$2y$10$XLGKTPcCwIeomQTsyF9xiu5Vc5p9sB8Gvi7ige5HCMC3.4rmQnrx2','huan2324@gmail.com',1,'fsI6pFXJTID0KkyfkXDJq2fgewXNfu5A1QYqS6GL','2016-03-30 08:35:34','2016-03-31 08:13:40');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
