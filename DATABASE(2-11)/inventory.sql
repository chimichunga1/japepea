/*
SQLyog Community v13.1.2 (32 bit)
MySQL - 8.0.13 : Database - inventory
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`inventory` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `inventory`;

/*Table structure for table `admin_accounts` */

DROP TABLE IF EXISTS `admin_accounts`;

CREATE TABLE `admin_accounts` (
  `user_id` int(255) NOT NULL AUTO_INCREMENT,
  `user_firstname` varchar(255) NOT NULL,
  `user_middlename` varchar(255) DEFAULT NULL,
  `user_lastname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `accessright` varchar(255) NOT NULL,
  `isDeleted` varchar(255) NOT NULL DEFAULT '0',
  `isBlocked` varchar(255) DEFAULT '0',
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

/*Data for the table `admin_accounts` */

insert  into `admin_accounts`(`user_id`,`user_firstname`,`user_middlename`,`user_lastname`,`username`,`password`,`accessright`,`isDeleted`,`isBlocked`) values 
(1,'2','3','4','5','1','1','0','0'),
(2,'admin',NULL,'admin','admin','admin','1','0','0'),
(12,'Juan MIguel','','Ponce','miguel','123','1','0','0'),
(13,'user','user','user','user','user','2','0','0');

/*Table structure for table `admin_cashier` */

DROP TABLE IF EXISTS `admin_cashier`;

CREATE TABLE `admin_cashier` (
  `cashier_id` int(255) NOT NULL AUTO_INCREMENT,
  `cashier_name` varchar(255) NOT NULL,
  `isDeleted` varchar(255) NOT NULL DEFAULT '0',
  PRIMARY KEY (`cashier_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `admin_cashier` */

/*Table structure for table `admin_categories` */

DROP TABLE IF EXISTS `admin_categories`;

CREATE TABLE `admin_categories` (
  `category_id` int(255) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(255) NOT NULL,
  `isDeleted` varchar(255) NOT NULL DEFAULT '0',
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

/*Data for the table `admin_categories` */

insert  into `admin_categories`(`category_id`,`category_name`,`isDeleted`) values 
(1,'a','1'),
(2,'BISCUIT','0'),
(3,'BEVERAGE','0');

/*Table structure for table `admin_employee` */

DROP TABLE IF EXISTS `admin_employee`;

CREATE TABLE `admin_employee` (
  `employee_id` int(255) NOT NULL AUTO_INCREMENT,
  `employee_name` varchar(255) DEFAULT NULL,
  `employee_age` varchar(255) DEFAULT NULL,
  `employee_birthday` varchar(255) DEFAULT NULL,
  `employee_gender` varchar(255) DEFAULT NULL,
  `employee_contact_number` varchar(255) DEFAULT NULL,
  `employee_sss_number` varchar(255) DEFAULT NULL,
  `employee_philhealth` varchar(255) DEFAULT NULL,
  `employee_contact_person` varchar(255) DEFAULT NULL,
  `employee_no_contact_person` varchar(255) DEFAULT NULL,
  `employee_address` varchar(255) DEFAULT NULL,
  `isDeleted` varchar(255) DEFAULT '0',
  PRIMARY KEY (`employee_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

/*Data for the table `admin_employee` */

insert  into `admin_employee`(`employee_id`,`employee_name`,`employee_age`,`employee_birthday`,`employee_gender`,`employee_contact_number`,`employee_sss_number`,`employee_philhealth`,`employee_contact_person`,`employee_no_contact_person`,`employee_address`,`isDeleted`) values 
(7,'A','22','1996-08-28','1','2','2','1','2','1','B','0');

/*Table structure for table `admin_invoice` */

DROP TABLE IF EXISTS `admin_invoice`;

CREATE TABLE `admin_invoice` (
  `invoice_id` int(255) NOT NULL AUTO_INCREMENT,
  `invoice_serial` varchar(255) NOT NULL,
  `invoice_cashierid` varchar(255) DEFAULT NULL,
  `invoice_date` varchar(255) NOT NULL,
  `isDeleted` varchar(255) NOT NULL DEFAULT '0',
  PRIMARY KEY (`invoice_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `admin_invoice` */

insert  into `admin_invoice`(`invoice_id`,`invoice_serial`,`invoice_cashierid`,`invoice_date`,`isDeleted`) values 
(1,'INVOICE 1',NULL,'2019-02-10','0');

/*Table structure for table `admin_itemsordered` */

DROP TABLE IF EXISTS `admin_itemsordered`;

CREATE TABLE `admin_itemsordered` (
  `itemsordered_id` int(255) NOT NULL AUTO_INCREMENT,
  `invoice_id` varchar(255) NOT NULL,
  `stocks_id` varchar(255) NOT NULL,
  `order_quantity` varchar(255) NOT NULL,
  `isDeleted` varchar(255) NOT NULL DEFAULT '0',
  PRIMARY KEY (`itemsordered_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

/*Data for the table `admin_itemsordered` */

insert  into `admin_itemsordered`(`itemsordered_id`,`invoice_id`,`stocks_id`,`order_quantity`,`isDeleted`) values 
(1,'1','1','2','0'),
(2,'1','9','33','0'),
(3,'1','9','4','0'),
(4,'1','1','10','0'),
(5,'1','9','5','0');

/*Table structure for table `admin_logs` */

DROP TABLE IF EXISTS `admin_logs`;

CREATE TABLE `admin_logs` (
  `logs_id` int(255) NOT NULL AUTO_INCREMENT,
  `logs_username` varchar(255) NOT NULL,
  `logs_remarks` varchar(255) NOT NULL,
  `logs_date` varchar(255) NOT NULL,
  PRIMARY KEY (`logs_id`)
) ENGINE=InnoDB AUTO_INCREMENT=54 DEFAULT CHARSET=utf8;

/*Data for the table `admin_logs` */

insert  into `admin_logs`(`logs_id`,`logs_username`,`logs_remarks`,`logs_date`) values 
(1,'admin','USER HAS ADDED INVOICEINVOICE 1','February 10, 2019 11:21:am  '),
(2,'eaf','USER HAS CREATED eaf','February 10, 2019 11:26:am  '),
(3,'asdasdasd','USER HAS CREATED asdasdasd','February 10, 2019 11:40:am  '),
(4,'D','USER HAS CREATED D','February 10, 2019 11:41:am  '),
(5,'e','USER HAS CREATED e','February 10, 2019 11:43:am  '),
(6,'c','USER HAS CREATED c','February 10, 2019 11:44:am  '),
(7,'a','USER HAS CREATED a','February 10, 2019 11:46:am  '),
(8,'miguel','USER HAS CREATED miguel','February 10, 2019 11:46:am  '),
(9,'admin','USER HAS ADDED SUPPLIER NAMEasd','February 10, 2019 2:18:pm  '),
(10,'admin','USER HAS UPDATED SUPPLIER NAMED ','February 10, 2019 2:41:pm  '),
(11,'admin','USER HAS UPDATED SUPPLIER NAMED ','February 10, 2019 2:41:pm  '),
(12,'admin','USER HAS UPDATED SUPPLIER NAMED asd','February 10, 2019 2:41:pm  '),
(13,'admin','USER HAS UPDATED SUPPLIER NAMED asd','February 10, 2019 2:41:pm  '),
(14,'admin','USER HAS UPDATED SUPPLIER NAMED asd','February 10, 2019 2:41:pm  '),
(15,'admin','USER HAS UPDATED SUPPLIER NAMED asd','February 10, 2019 2:42:pm  '),
(16,'admin','USER HAS CREATED CATEGORY a','February 10, 2019 2:42:pm  '),
(17,'admin','USER HAS CREATED admin','February 10, 2019 2:43:pm  '),
(18,'admin','USER HAS CREATED admin','February 10, 2019 3:15:pm  '),
(19,'admin','USER HAS CREATED admin','February 10, 2019 3:34:pm  '),
(20,'admin','USER HAS CREATED EMPLOYEE A','February 10, 2019 3:36:pm  '),
(21,'admin','USER HAS REMOVED CATEGORY ID 1','February 10, 2019 4:47:pm  '),
(22,'admin','USER HAS CREATED CATEGORY BISCUIT','February 10, 2019 4:47:pm  '),
(23,'admin','USER HAS CREATED CATEGORY BEVERAGE','February 10, 2019 4:47:pm  '),
(24,'admin','USER HAS REMOVED SUPPLIER ID ','February 10, 2019 4:48:pm  '),
(25,'admin','USER HAS ADDED SUPPLIER NAMEa','February 10, 2019 4:48:pm  '),
(26,'admin','USER HAS ADDED SUPPLIER NAMEa','February 10, 2019 4:48:pm  '),
(27,'admin','USER HAS REMOVED SUPPLIER ID ','February 10, 2019 4:49:pm  '),
(28,'admin','USER HAS REMOVED SUPPLIER ID ','February 10, 2019 4:49:pm  '),
(29,'admin','USER HAS ADDED SUPPLIER NAMEa','February 10, 2019 4:49:pm  '),
(30,'admin','USER HAS REMOVED SUPPLIER ID ','February 10, 2019 4:49:pm  '),
(31,'admin','USER HAS REMOVED SUPPLIER ID 4','February 10, 2019 4:49:pm  '),
(32,'admin','USER HAS ADDED SUPPLIER NAMERomago','February 10, 2019 4:50:pm  '),
(33,'admin','USER HAS ADDED STOCK ID 1TO INVOICE ID1','February 10, 2019 4:51:pm  '),
(34,'admin','USER HAS ADDED STOCK ID 9TO INVOICE ID1','February 10, 2019 5:14:pm  '),
(35,'admin','USER HAS LOGGED OUT','February 10, 2019 8:34:pm  '),
(36,'admin','USER HAS LOGGED IN','February 10, 2019 8:36:pm  '),
(37,'admin','USER HAS LOGGED IN','February 10, 2019 8:38:pm  '),
(38,'admin','USER HAS LOGGED IN','February 13, 2019 8:44:pm  '),
(39,'admin','USER HAS LOGGED IN','February 13, 2019 10:18:pm  '),
(40,'admin','USER HAS LOGGED IN','February 14, 2019 8:43:pm  '),
(41,'user','USER HAS CREATED user','February 14, 2019 9:00:pm  '),
(42,'admin','USER HAS LOGGED OUT','February 14, 2019 9:00:pm  '),
(43,'user','USER HAS LOGGED IN','February 14, 2019 9:00:pm  '),
(44,'admin','USER HAS LOGGED IN','February 14, 2019 9:10:pm  '),
(45,'admin','USER HAS LOGGED OUT','February 14, 2019 9:14:pm  '),
(46,'user','USER HAS LOGGED IN','February 14, 2019 9:14:pm  '),
(47,'user','USER HAS LOGGED IN','February 14, 2019 9:14:pm  '),
(48,'user','USER HAS LOGGED OUT','February 14, 2019 9:18:pm  '),
(49,'admin','USER HAS LOGGED IN','February 14, 2019 9:18:pm  '),
(50,'admin','USER HAS ADDED STOCK ID 9TO INVOICE ID1','February 14, 2019 10:07:pm  '),
(51,'admin','USER HAS ADDED STOCK ID 9TO INVOICE ID1','February 14, 2019 10:18:pm  '),
(52,'admin','USER HAS LOGGED IN','February 15, 2019 10:23:pm  '),
(53,'admin','USER HAS LOGGED IN','February 15, 2019 11:08:pm  ');

/*Table structure for table `admin_pullout` */

DROP TABLE IF EXISTS `admin_pullout`;

CREATE TABLE `admin_pullout` (
  `pullout_id` int(255) NOT NULL AUTO_INCREMENT,
  `stocks_code` varchar(255) DEFAULT NULL,
  `stocks_itemname` varchar(255) DEFAULT NULL,
  `stocks_quantity` varchar(255) DEFAULT NULL,
  `stocks_priceperunit` varchar(255) DEFAULT NULL,
  `supplier_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `category_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `isDeleted` varchar(255) DEFAULT '0',
  `day` varchar(255) DEFAULT NULL,
  `week` varchar(255) DEFAULT NULL,
  `month` varchar(255) DEFAULT NULL,
  `year` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`pullout_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

/*Data for the table `admin_pullout` */

insert  into `admin_pullout`(`pullout_id`,`stocks_code`,`stocks_itemname`,`stocks_quantity`,`stocks_priceperunit`,`supplier_name`,`category_name`,`isDeleted`,`day`,`week`,`month`,`year`) values 
(1,'12036143','Summit','4','33','Romago','BEVERAGE','0',NULL,NULL,NULL,NULL),
(2,'56895944','Cream-o','10','200','Romago','BISCUIT','0',NULL,NULL,NULL,NULL),
(3,'12036143','Summit','5','33','Romago','BEVERAGE','0','14','07','February','2019');

/*Table structure for table `admin_reports` */

DROP TABLE IF EXISTS `admin_reports`;

CREATE TABLE `admin_reports` (
  `reports_id` int(255) NOT NULL AUTO_INCREMENT,
  `invoice_id` varchar(255) NOT NULL,
  `date_saved` varchar(255) NOT NULL,
  `total_amount` varchar(255) NOT NULL,
  `isDeleted` varchar(255) NOT NULL DEFAULT '0',
  PRIMARY KEY (`reports_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `admin_reports` */

/*Table structure for table `admin_sales` */

DROP TABLE IF EXISTS `admin_sales`;

CREATE TABLE `admin_sales` (
  `sales_id` int(255) NOT NULL AUTO_INCREMENT,
  `sales_date` varchar(255) DEFAULT NULL,
  `sales_posno` varchar(255) DEFAULT NULL,
  `sales_vatmerchsales` varchar(255) DEFAULT NULL,
  `sales_vatcomtrans` varchar(255) DEFAULT NULL,
  `sales_vatsales` varchar(255) DEFAULT NULL,
  `sales_nonvatsales` varchar(255) DEFAULT NULL,
  `sales_vatexscsales` varchar(255) DEFAULT NULL,
  `sales_vatexsales` varchar(255) DEFAULT NULL,
  `day` varchar(255) DEFAULT NULL,
  `week` varchar(255) DEFAULT NULL,
  `month` varchar(255) DEFAULT NULL,
  `year` varchar(255) DEFAULT NULL,
  `isDeleted` varchar(255) DEFAULT '0',
  `posid` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`sales_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

/*Data for the table `admin_sales` */

insert  into `admin_sales`(`sales_id`,`sales_date`,`sales_posno`,`sales_vatmerchsales`,`sales_vatcomtrans`,`sales_vatsales`,`sales_nonvatsales`,`sales_vatexscsales`,`sales_vatexsales`,`day`,`week`,`month`,`year`,`isDeleted`,`posid`) values 
(1,'2019-12-08','POS 1','2500','1000','2000','3000','1400','200','13','07','February','2019','0','1'),
(2,'February 15 2019','POS 1','1','2','3','4','1','1','15','07','February','2019','0','1'),
(3,'February 15 2019','POS 2','1','2','13','4','5','6','15','07','February','2019','0','2'),
(4,'February 15 2019','POS 2','1','5','4','1','3','6','15','07','February','2019','0','2'),
(5,'February 15 2019','POS 2','5','4','5','1','3','7','15','07','February','2019','0','2');

/*Table structure for table `admin_stocks` */

DROP TABLE IF EXISTS `admin_stocks`;

CREATE TABLE `admin_stocks` (
  `stocks_id` int(255) NOT NULL AUTO_INCREMENT,
  `stocks_code` varchar(255) NOT NULL,
  `stocks_itemname` varchar(255) NOT NULL,
  `stocks_quantity` varchar(255) NOT NULL,
  `stocks_priceperunit` varchar(255) NOT NULL,
  `stocks_supplierid` varchar(255) NOT NULL,
  `stocks_categoriesid` varchar(255) NOT NULL,
  `isDeleted` varchar(255) NOT NULL DEFAULT '0',
  `day` varchar(255) DEFAULT NULL,
  `week` varchar(255) DEFAULT NULL,
  `month` varchar(255) DEFAULT NULL,
  `year` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`stocks_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

/*Data for the table `admin_stocks` */

insert  into `admin_stocks`(`stocks_id`,`stocks_code`,`stocks_itemname`,`stocks_quantity`,`stocks_priceperunit`,`stocks_supplierid`,`stocks_categoriesid`,`isDeleted`,`day`,`week`,`month`,`year`) values 
(1,'56895944','Cream-o','13','200','5','2','0','12','07','February','2019'),
(9,'12036143','Summit','5','33','5','3','0','12','07','February','2019');

/*Table structure for table `admin_suppliers` */

DROP TABLE IF EXISTS `admin_suppliers`;

CREATE TABLE `admin_suppliers` (
  `supplier_id` int(255) NOT NULL AUTO_INCREMENT,
  `supplier_name` varchar(255) NOT NULL,
  `contact_person` varchar(255) NOT NULL,
  `supplier_address` varchar(255) NOT NULL,
  `isDeleted` varchar(255) NOT NULL DEFAULT '0',
  PRIMARY KEY (`supplier_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

/*Data for the table `admin_suppliers` */

insert  into `admin_suppliers`(`supplier_id`,`supplier_name`,`contact_person`,`supplier_address`,`isDeleted`) values 
(1,'A','B','C','1'),
(2,'a','a','a','1'),
(3,'a','b','C','1'),
(4,'a','b','c','1'),
(5,'Romago','Goku','Makati','0');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
