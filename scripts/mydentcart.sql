-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 19, 2014 at 08:20 PM
-- Server version: 5.6.14
-- PHP Version: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mydentcart`
--

-- --------------------------------------------------------

--
-- Table structure for table `t_cart`
--

CREATE TABLE IF NOT EXISTS `t_cart` (
  `ID` int(5) NOT NULL AUTO_INCREMENT,
  `USER_ID` int(5) NOT NULL,
  `PRODUCT_ID` int(5) NOT NULL,
  `DATE_ADDED` datetime DEFAULT NULL,
  `LAST_UPTO_DATE` datetime DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `PRODUCT_ID` (`PRODUCT_ID`),
  KEY `USER_ID` (`USER_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `t_coupons`
--

CREATE TABLE IF NOT EXISTS `t_coupons` (
  `ID` int(5) NOT NULL AUTO_INCREMENT,
  `COUPON_CODE` varchar(200) DEFAULT NULL,
  `COUPON_DESC` text,
  `PRODUCT_ID` int(5) NOT NULL,
  `COUPON_ACTIVATION_DATE` datetime DEFAULT NULL,
  `COUPON_EXPIRY_DATE` datetime DEFAULT NULL,
  `COUPON_CASH_VALUE` decimal(2,2) DEFAULT NULL,
  `DATE_ADDED` datetime DEFAULT NULL,
  `LAST_UPTO_DATE` datetime DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `PRODUCT_ID` (`PRODUCT_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `t_invoice`
--

CREATE TABLE IF NOT EXISTS `t_invoice` (
  `ID` int(5) NOT NULL AUTO_INCREMENT,
  `INVOICE_CREATED_DATE` datetime DEFAULT NULL,
  `ORDER_ID` int(5) NOT NULL,
  `NOTES` text,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `t_login`
--

CREATE TABLE IF NOT EXISTS `t_login` (
  `ID` int(5) NOT NULL AUTO_INCREMENT,
  `USER_ID` int(5) NOT NULL,
  `LOGIN_TIME` datetime DEFAULT NULL,
  `IS_SUCCESS_LOGIN` enum('Y','N') DEFAULT NULL,
  `IP` varchar(50) DEFAULT NULL,
  `COOKIE` enum('Y','N') DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `USER_ID` (`USER_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `t_order_status`
--

CREATE TABLE IF NOT EXISTS `t_order_status` (
  `ORDER_STATUS` varchar(20) NOT NULL,
  PRIMARY KEY (`ORDER_STATUS`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_order_status`
--

INSERT INTO `t_order_status` (`ORDER_STATUS`) VALUES
('CREATED'),
('FULFILLED'),
('PACKED');

-- --------------------------------------------------------

--
-- Table structure for table `t_payment_status`
--

CREATE TABLE IF NOT EXISTS `t_payment_status` (
  `PAYMENT_STATUS` varchar(20) NOT NULL,
  PRIMARY KEY (`PAYMENT_STATUS`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_payment_status`
--

INSERT INTO `t_payment_status` (`PAYMENT_STATUS`) VALUES
('COD'),
('NOT PAID'),
('PAID');

-- --------------------------------------------------------

--
-- Table structure for table `t_pin`
--

CREATE TABLE IF NOT EXISTS `t_pin` (
  `ID` int(5) NOT NULL AUTO_INCREMENT,
  `PINCODE` int(5) NOT NULL,
  `AREA` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `t_product`
--

CREATE TABLE IF NOT EXISTS `t_product` (
  `ID` int(5) NOT NULL AUTO_INCREMENT,
  `CATEGORY_ID` int(5) NOT NULL,
  `SUBCATEGORY_ID` int(5) NOT NULL,
  `PRODUCT_TITLE` text,
  `PRODUCT_DESC` text,
  `PRODUCT_KEYWORDS` text,
  `PRODUCT_THUMBNAIL_URL` varchar(100) DEFAULT NULL,
  `PRODUCT_ZOOM_URL1` varchar(100) DEFAULT NULL,
  `PRODUCT_ZOOM_URL2` varchar(100) DEFAULT NULL,
  `PRODUCT_ZOOM_URL3` varchar(100) DEFAULT NULL,
  `PRODUCT_SELLING_PRICE` decimal(6,2) DEFAULT NULL,
  `DATE_ADDED` datetime DEFAULT NULL,
  `LAST_UPTO_DATE` datetime DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `SUBCATEGORY_ID` (`SUBCATEGORY_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `t_product_category`
--

CREATE TABLE IF NOT EXISTS `t_product_category` (
  `ID` int(5) NOT NULL AUTO_INCREMENT,
  `CATEGORRY_TITLE` text,
  `CATEGORY_DESC` text,
  `CATEGORY_KEYWORDS` text,
  `DATE_ADDED` datetime DEFAULT NULL,
  `LAST_UPTO_DATE` datetime DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `t_product_subcategory`
--

CREATE TABLE IF NOT EXISTS `t_product_subcategory` (
  `ID` int(5) NOT NULL AUTO_INCREMENT,
  `CATEGORY_ID` int(5) NOT NULL,
  `SUBCATEGORY_TITLE` text,
  `SUBCATEGORY_DESC` text,
  `SUBCATEGORY_KEYWORDS` text,
  `DATE_ADDED` datetime DEFAULT NULL,
  `LAST_UPTO_DATE` datetime DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `CATEGORY_ID` (`CATEGORY_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `t_registration`
--

CREATE TABLE IF NOT EXISTS `t_registration` (
  `ID` int(5) NOT NULL AUTO_INCREMENT,
  `FIRST_NAME` varchar(100) NOT NULL,
  `MIDDLE_NAME` varchar(100) DEFAULT NULL,
  `LAST_NAME` varchar(100) DEFAULT NULL,
  `PRIMARY_EMAIL` varchar(100) DEFAULT NULL,
  `SECONDARY_EMAIL` varchar(100) DEFAULT NULL,
  `MOBILE` varchar(15) DEFAULT NULL,
  `DATE_ACCOUNT_CREATED` datetime DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `t_registration`
--

INSERT INTO `t_registration` (`ID`, `FIRST_NAME`, `MIDDLE_NAME`, `LAST_NAME`, `PRIMARY_EMAIL`, `SECONDARY_EMAIL`, `MOBILE`, `DATE_ACCOUNT_CREATED`) VALUES
(1, 'John', 'M', 'Doe', 'nandkunal@gmail.com', NULL, NULL, '2014-10-22 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `t_shipment_status`
--

CREATE TABLE IF NOT EXISTS `t_shipment_status` (
  `SHIPMENT_STATUS` varchar(20) NOT NULL,
  PRIMARY KEY (`SHIPMENT_STATUS`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_shipment_status`
--

INSERT INTO `t_shipment_status` (`SHIPMENT_STATUS`) VALUES
('IN TRANSITION'),
('NOT SHIPPED'),
('SHIPPED');

-- --------------------------------------------------------

--
-- Table structure for table `t_users`
--

CREATE TABLE IF NOT EXISTS `t_users` (
  `ID` int(5) NOT NULL AUTO_INCREMENT,
  `USERNAME` varchar(100) NOT NULL,
  `PASSWORD` varchar(64) DEFAULT NULL,
  `REGISTRATION_ID` int(5) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `REGISTRATION_ID` (`REGISTRATION_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `t_users`
--

INSERT INTO `t_users` (`ID`, `USERNAME`, `PASSWORD`, `REGISTRATION_ID`) VALUES
(1, 'nandkunal', '21232f297a57a5a743894a0e4a801fc3', 1);

-- --------------------------------------------------------

--
-- Table structure for table `t_user_address`
--

CREATE TABLE IF NOT EXISTS `t_user_address` (
  `ID` int(5) NOT NULL AUTO_INCREMENT,
  `USER_ID` int(5) NOT NULL,
  `ADDRESS_TYPE` varchar(20) NOT NULL,
  `ADDRESS_LINE1` varchar(500) DEFAULT NULL,
  `ADDRESS_LINE2` varchar(500) DEFAULT NULL,
  `LANDMARK` text,
  `CITY` text,
  `DISTRICT` text,
  `STATE` tinytext,
  `COUNTRY` tinytext,
  `PIN` int(5) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `USER_ID` (`USER_ID`),
  KEY `PIN` (`PIN`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `t_user_address_type`
--

CREATE TABLE IF NOT EXISTS `t_user_address_type` (
  `ADDRESS_TYPE` varchar(20) NOT NULL,
  PRIMARY KEY (`ADDRESS_TYPE`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_user_address_type`
--

INSERT INTO `t_user_address_type` (`ADDRESS_TYPE`) VALUES
('BILLING'),
('SHIPPING');

-- --------------------------------------------------------

--
-- Table structure for table `t_user_order`
--

CREATE TABLE IF NOT EXISTS `t_user_order` (
  `ID` int(5) NOT NULL AUTO_INCREMENT,
  `USER_ID` int(5) NOT NULL,
  `ORDER_DATE` datetime DEFAULT NULL,
  `CART_ID` int(5) NOT NULL,
  `ORDER_STATUS` varchar(20) NOT NULL,
  `TOTAL_AMOUNT` decimal(6,2) DEFAULT NULL,
  `SHIPMENT_STATUS` varchar(20) NOT NULL,
  `PAYMENT_STATUS` varchar(20) NOT NULL,
  `SHIPPING_ADDRESS_ID` int(5) NOT NULL,
  `BILLING_ADDRESS_ID` int(5) NOT NULL,
  `INVOICE_ID` int(5) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `ORDER_STATUS` (`ORDER_STATUS`),
  KEY `SHIPMENT_STATUS` (`SHIPMENT_STATUS`),
  KEY `PAYMENT_STATUS` (`PAYMENT_STATUS`),
  KEY `SHIPPING_ADDRESS_ID` (`SHIPPING_ADDRESS_ID`),
  KEY `BILLING_ADDRESS_ID` (`BILLING_ADDRESS_ID`),
  KEY `INVOICE_ID` (`INVOICE_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `t_cart`
--
ALTER TABLE `t_cart`
  ADD CONSTRAINT `t_cart_ibfk_1` FOREIGN KEY (`PRODUCT_ID`) REFERENCES `t_product` (`ID`) ON DELETE CASCADE,
  ADD CONSTRAINT `t_cart_ibfk_2` FOREIGN KEY (`USER_ID`) REFERENCES `t_users` (`ID`) ON DELETE CASCADE;

--
-- Constraints for table `t_coupons`
--
ALTER TABLE `t_coupons`
  ADD CONSTRAINT `t_coupons_ibfk_1` FOREIGN KEY (`PRODUCT_ID`) REFERENCES `t_product` (`ID`) ON DELETE CASCADE;

--
-- Constraints for table `t_login`
--
ALTER TABLE `t_login`
  ADD CONSTRAINT `t_login_ibfk_1` FOREIGN KEY (`USER_ID`) REFERENCES `t_users` (`ID`) ON DELETE CASCADE;

--
-- Constraints for table `t_product`
--
ALTER TABLE `t_product`
  ADD CONSTRAINT `t_product_ibfk_1` FOREIGN KEY (`SUBCATEGORY_ID`) REFERENCES `t_product_subcategory` (`ID`) ON DELETE CASCADE;

--
-- Constraints for table `t_product_subcategory`
--
ALTER TABLE `t_product_subcategory`
  ADD CONSTRAINT `t_product_subcategory_ibfk_1` FOREIGN KEY (`CATEGORY_ID`) REFERENCES `t_product_category` (`ID`) ON DELETE CASCADE;

--
-- Constraints for table `t_users`
--
ALTER TABLE `t_users`
  ADD CONSTRAINT `t_users_ibfk_1` FOREIGN KEY (`REGISTRATION_ID`) REFERENCES `t_registration` (`ID`) ON DELETE CASCADE;

--
-- Constraints for table `t_user_address`
--
ALTER TABLE `t_user_address`
  ADD CONSTRAINT `t_user_address_ibfk_1` FOREIGN KEY (`USER_ID`) REFERENCES `t_users` (`ID`) ON DELETE CASCADE,
  ADD CONSTRAINT `t_user_address_ibfk_2` FOREIGN KEY (`PIN`) REFERENCES `t_pin` (`ID`) ON DELETE CASCADE;

--
-- Constraints for table `t_user_order`
--
ALTER TABLE `t_user_order`
  ADD CONSTRAINT `t_user_order_ibfk_1` FOREIGN KEY (`ORDER_STATUS`) REFERENCES `t_order_status` (`ORDER_STATUS`) ON DELETE CASCADE,
  ADD CONSTRAINT `t_user_order_ibfk_2` FOREIGN KEY (`SHIPMENT_STATUS`) REFERENCES `t_shipment_status` (`SHIPMENT_STATUS`) ON DELETE CASCADE,
  ADD CONSTRAINT `t_user_order_ibfk_3` FOREIGN KEY (`PAYMENT_STATUS`) REFERENCES `t_payment_status` (`PAYMENT_STATUS`) ON DELETE CASCADE,
  ADD CONSTRAINT `t_user_order_ibfk_4` FOREIGN KEY (`SHIPPING_ADDRESS_ID`) REFERENCES `t_user_address` (`ID`) ON DELETE CASCADE,
  ADD CONSTRAINT `t_user_order_ibfk_5` FOREIGN KEY (`BILLING_ADDRESS_ID`) REFERENCES `t_user_address` (`ID`) ON DELETE CASCADE,
  ADD CONSTRAINT `t_user_order_ibfk_6` FOREIGN KEY (`INVOICE_ID`) REFERENCES `t_invoice` (`ID`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
