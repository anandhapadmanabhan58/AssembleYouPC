/*
SQLyog Ultimate v13.1.1 (64 bit)
MySQL - 5.6.12-log : Database - assembe_pc
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`assembe_pc` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `assembe_pc`;

/*Table structure for table `brand` */

DROP TABLE IF EXISTS `brand`;

CREATE TABLE `brand` (
  `brandid` int(11) NOT NULL AUTO_INCREMENT,
  `brand` varchar(44) NOT NULL,
  PRIMARY KEY (`brandid`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

/*Data for the table `brand` */

insert  into `brand`(`brandid`,`brand`) values 
(2,'Dell'),
(3,'Lenovo'),
(4,'Acer'),
(6,'AOC'),
(7,'Benq'),
(8,'HP'),
(9,'Samsung'),
(10,'Asus');

/*Table structure for table `cart` */

DROP TABLE IF EXISTS `cart`;

CREATE TABLE `cart` (
  `cartid` int(11) NOT NULL AUTO_INCREMENT,
  `uid` varchar(44) NOT NULL,
  `pid` varchar(44) NOT NULL,
  `type` varchar(44) NOT NULL,
  `total` varchar(44) NOT NULL,
  `status` varchar(44) NOT NULL DEFAULT 'Cart',
  PRIMARY KEY (`cartid`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `cart` */

insert  into `cart`(`cartid`,`uid`,`pid`,`type`,`total`,`status`) values 
(1,'1','1','Product','84990','Delivered'),
(2,'1','1','Product','84990','Delivered');

/*Table structure for table `cproduct` */

DROP TABLE IF EXISTS `cproduct`;

CREATE TABLE `cproduct` (
  `cpid` int(11) NOT NULL AUTO_INCREMENT,
  `uid` varchar(44) NOT NULL DEFAULT '0',
  `dispid` varchar(44) NOT NULL DEFAULT '0',
  `brand` varchar(44) NOT NULL DEFAULT '0',
  `hddid` varchar(44) NOT NULL DEFAULT '0',
  `proid` varchar(44) NOT NULL DEFAULT '0',
  `ramid` varchar(44) NOT NULL DEFAULT '0',
  `total` varchar(44) NOT NULL DEFAULT '0',
  `status` varchar(44) NOT NULL DEFAULT 'Pending',
  PRIMARY KEY (`cpid`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `cproduct` */

insert  into `cproduct`(`cpid`,`uid`,`dispid`,`brand`,`hddid`,`proid`,`ramid`,`total`,`status`) values 
(1,'1','2','Samsung','2','2','1','45423','Pending'),
(2,'1','3','Dell','3','3','2','22475','Delivered');

/*Table structure for table `display` */

DROP TABLE IF EXISTS `display`;

CREATE TABLE `display` (
  `dispid` int(11) NOT NULL AUTO_INCREMENT,
  `display` varchar(44) NOT NULL,
  `size` varchar(44) NOT NULL,
  `resolution` varchar(44) NOT NULL,
  `panel` varchar(44) NOT NULL,
  `speciality` varchar(44) NOT NULL,
  `rate` varchar(44) NOT NULL,
  `brand` varchar(44) NOT NULL,
  `img` longblob NOT NULL,
  PRIMARY KEY (`dispid`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `display` */

insert  into `display`(`dispid`,`display`,`size`,`resolution`,`panel`,`speciality`,`rate`,`brand`,`img`) values 
(2,'Backlit IPS Panel Monitor','24 inch','1920 x 1080 pixels',' IPS Panel','SAMSUNG 24 inch Full HD LED Backlit IPS Pane','13999','Samsung','images/samsung.jpeg'),
(3,'Backlit TN Panel Monitor','23 inch','1920 X 1080 pixels',' TN Panel','DELL 20 inch HD LED Backlit TN Panel Monitor','9345','Dell','images/del11.jpeg');

/*Table structure for table `feedback` */

DROP TABLE IF EXISTS `feedback`;

CREATE TABLE `feedback` (
  `fid` int(11) NOT NULL AUTO_INCREMENT,
  `uid` varchar(44) NOT NULL,
  `feedback` varchar(44) NOT NULL,
  `dec` varchar(400) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`fid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `feedback` */

insert  into `feedback`(`fid`,`uid`,`feedback`,`dec`,`date`) values 
(1,'1','Good','It was so good working with you guys','2021-10-28');

/*Table structure for table `hdd` */

DROP TABLE IF EXISTS `hdd`;

CREATE TABLE `hdd` (
  `hddid` int(11) NOT NULL AUTO_INCREMENT,
  `hdd` varchar(44) NOT NULL,
  `size` varchar(44) NOT NULL,
  `specilaity` varchar(44) NOT NULL,
  `rate` varchar(44) NOT NULL,
  `brand` varchar(44) NOT NULL,
  PRIMARY KEY (`hddid`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `hdd` */

insert  into `hdd`(`hddid`,`hdd`,`size`,`specilaity`,`rate`,`brand`) values 
(2,'Seagate OEM','320 GB','Seagate OEM 320 GB Desktop Internal Hard Dis','999','Samsung'),
(3,'Surveillance Systems Internal Hard Disk Driv','1 TB','WD Purple 1 TB Surveillance Systems Internal','3950','Dell');

/*Table structure for table `login` */

DROP TABLE IF EXISTS `login`;

CREATE TABLE `login` (
  `lid` int(11) NOT NULL AUTO_INCREMENT,
  `uid` varchar(44) NOT NULL,
  `uname` varchar(44) NOT NULL,
  `psw` varchar(44) NOT NULL,
  `type` varchar(44) NOT NULL,
  PRIMARY KEY (`lid`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `login` */

insert  into `login`(`lid`,`uid`,`uname`,`psw`,`type`) values 
(1,'1','tom@gmail.com','tom123','User'),
(2,'0','admin@gmail.com','admin','Admin');

/*Table structure for table `processor` */

DROP TABLE IF EXISTS `processor`;

CREATE TABLE `processor` (
  `proid` int(11) NOT NULL AUTO_INCREMENT,
  `processor` varchar(44) NOT NULL,
  `size` varchar(44) NOT NULL,
  `speed` varchar(44) NOT NULL,
  `speciality` varchar(400) NOT NULL,
  `rate` varchar(44) NOT NULL,
  `brand` varchar(44) NOT NULL,
  PRIMARY KEY (`proid`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `processor` */

insert  into `processor`(`proid`,`processor`,`size`,`speed`,`speciality`,`rate`,`brand`) values 
(2,'amd Ryzen 5','128 GB',' 4.4 GHz','amd Ryzen 5 5600G 3.9 GHz Upto 4.4 GHz AM4 Socket 6 Cores 12 Threads 3 kB L2 16 kB L3 Desktop Processor  (Grey)','26626','Samsung'),
(3,'amd Athlon 3000G',' 4 MB','3200MHZ','amd Athlon 3000G with Radeon Vega 3 3.5 GHz AM4 Socket 2 Cores 4 Threads 1 MB L2 4 MB L3 Desktop Processor  (Silver)','6100','Dell');

/*Table structure for table `product` */

DROP TABLE IF EXISTS `product`;

CREATE TABLE `product` (
  `pid` int(11) NOT NULL AUTO_INCREMENT,
  `brand` varchar(44) NOT NULL,
  `model` varchar(44) NOT NULL,
  `partnumber` varchar(44) NOT NULL,
  `os` varchar(44) NOT NULL,
  `suitablefor` varchar(44) NOT NULL,
  `type` varchar(44) NOT NULL,
  `graphics` varchar(44) NOT NULL,
  `gmemory` varchar(44) NOT NULL,
  `color` varchar(44) NOT NULL,
  `processor` varchar(44) NOT NULL,
  `ram` varchar(44) NOT NULL,
  `hdd` varchar(44) NOT NULL,
  `price` varchar(44) NOT NULL,
  `img` longblob NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `product` */

insert  into `product`(`pid`,`brand`,`model`,`partnumber`,`os`,`suitablefor`,`type`,`graphics`,`gmemory`,`color`,`processor`,`ram`,`hdd`,`price`,`img`) values 
(1,'Asus',' ROG Strix (G15DH-IN006T)','90PD02V1-M04200',' Windows 10 (64-bit)',' Processing & Multitasking, Gaming','Gaming Tower',' NVIDIA GeForce GTX 1660',' 6 GB',' Star Black',' AMD  Ryzen 5 (3600X)',' 8 GB',' 1 TB','84990','images/asus1.jpeg');

/*Table structure for table `ram` */

DROP TABLE IF EXISTS `ram`;

CREATE TABLE `ram` (
  `ramid` int(11) NOT NULL AUTO_INCREMENT,
  `ram` varchar(44) NOT NULL,
  `size` varchar(44) NOT NULL,
  `speed` varchar(44) NOT NULL,
  `speciality` varchar(44) NOT NULL,
  `rate` varchar(44) NOT NULL,
  `brand` varchar(44) NOT NULL,
  PRIMARY KEY (`ramid`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `ram` */

insert  into `ram`(`ramid`,`ram`,`size`,`speed`,`speciality`,`rate`,`brand`) values 
(1,'Crucial Works','8 GB','2133mhz','Crucial Works in 2133mhz also DDR4 8 GB Lapt','3799','Samsung'),
(2,'XPG GAMMIX D30','8 GB','3200MHZ','ADATA XPG GAMMIX D30 DDR4 8 GB (Single Chann','3080','Dell'),
(3,'Hynix ','4 GB','1600MHZ','Hynix 1600/12800 DDR3 4 GB (Dual Channel) PC','1299','HP');

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(44) NOT NULL,
  `gender` varchar(44) NOT NULL,
  `address` varchar(44) NOT NULL,
  `phone` varchar(44) NOT NULL,
  `email` varchar(44) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `user` */

insert  into `user`(`uid`,`name`,`gender`,`address`,`phone`,`email`) values 
(1,'Tom Jose Antony','male','Kuttamachery East, Kerala 683105','9562301478','tom@gmail.com');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
