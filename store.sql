-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Jul 04, 2019 at 12:01 PM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `store`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_info`
--

DROP TABLE IF EXISTS `contact_info`;
CREATE TABLE IF NOT EXISTS `contact_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_info`
--

INSERT INTO `contact_info` (`id`, `name`, `email`, `address`) VALUES
(1, '', '', ''),
(2, 'asd', 'dasd@gmail.com', 'asdas');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

DROP TABLE IF EXISTS `items`;
CREATE TABLE IF NOT EXISTS `items` (
  `pid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(256) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `image_addr` longtext,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`pid`, `name`, `price`, `image_addr`) VALUES
(1, 'Canon EOS', 36000, 'https://s01.sgp1.cdn.digitaloceanspaces.com/article/110301-zklxapdcqo-1547127551.jpg'),
(2, 'Nikon DSLR', 40000, 'https://thewirecutter.com/wp-content/uploads/2017/01/entry-level-dslr-nikon-d3400-lowres-4553.jpg'),
(3, 'Sony DSLR', 45000, 'https://i.kinja-img.com/gawker-media/image/upload/s--hidV8bLt--/c_scale,f_auto,fl_progressive,q_80,w_800/17jwf1r29vjc4jpg.jpg'),
(4, 'Olympus DSLR', 50000, 'https://upload.wikimedia.org/wikipedia/commons/thumb/9/98/Olympus_E410_img_1028.jpg/300px-Olympus_E410_img_1028.jpg'),
(5, 'Titan Model #301', 13000, 'https://uploads.tapatalk-cdn.com/20170306/6ab683e8213c020d40345523f8266511.jpg'),
(6, 'Titan Model #201', 3000, 'http://w4.host22.com/img/19.jpg'),
(7, 'HMT Milan', 8000, 'http://w4.host22.com/img/20.jpg'),
(8, 'Faber Luba #111', 18000, 'https://www.guidajewelers.com/wp-content/uploads/2016/12/wristwatch-407096_1920.jpg'),
(9, 'H&W', 800, 'https://3.imimg.com/data3/WP/DM/MY-11605566/shirts-cotton-500x500.jpg'),
(10, 'Luis Phil', 1000, 'https://images.shop101.com/images/4463390347/7967409423/6356092762.jpeg'),
(11, 'John Zok', 1500, 'http://w4.host22.com/img/22.jpg'),
(12, 'Jhalsani', 1300, 'http://w4.host22.com/img/24.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `order_history`
--

DROP TABLE IF EXISTS `order_history`;
CREATE TABLE IF NOT EXISTS `order_history` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_email` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `item` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT '1',
  `date_of_purchase` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_history`
--

INSERT INTO `order_history` (`id`, `user_email`, `user_id`, `item_id`, `item`, `price`, `quantity`, `date_of_purchase`) VALUES
(1, 'test@gmail.com', 3, 1, 'Canon EOS', 36000, 1, '2019-07-04 09:42:53'),
(2, 'test@gmail.com', 3, 2, 'Nikon DSLR', 40000, 1, '2019-07-04 09:42:53'),
(3, 'test@gmail.com', 3, 1, 'Canon EOS', 36000, 5, '2019-07-04 09:43:16'),
(4, 'test@gmail.com', 3, 5, 'Titan Model #301', 13000, 3, '2019-07-04 09:43:16'),
(5, 'test@gmail.com', 3, 3, 'Sony DSLR', 45000, 2, '2019-07-04 11:56:52'),
(6, 'test@gmail.com', 3, 9, 'H&W', 800, 20, '2019-07-04 11:57:30'),
(7, 'test@gmail.com', 3, 12, 'Jhalsani', 1300, 50, '2019-07-04 11:57:30'),
(8, 'test@gmail.com', 3, 8, 'Faber Luba #111', 18000, 2, '2019-07-04 12:00:19');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `contact`, `address`) VALUES
(3, 'test', 'test@gmail.com', 'c06db68e819be6ec3d26c6038d8e8d1f', '9090909090', 'testaddress'),
(4, 'test2', 'test2@gmail.com', '3cbb95e5db93ae410004282cccb1f338', '9090990090', 'test2address'),
(5, 'Abhi', 'abhi@gmail.com', 'a67616452496d736bb37e8a1c0a61fab', '9090909090', 'Gandhi Nagar'),
(6, 'test3', 'test3@gmail.com', '0d88a4e5f17c6eadf5fb83f29e5aff5c', '9090990090', 'asd'),
(7, 'asdf', 'asdf@asdf.com', '6a204bd89f3c8348afd5c77c717a097a', '1234567890', 'asdf');

-- --------------------------------------------------------

--
-- Table structure for table `user_items`
--

DROP TABLE IF EXISTS `user_items`;
CREATE TABLE IF NOT EXISTS `user_items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `item_id` int(11) DEFAULT NULL,
  `status` enum('Added to cart','Confirmed') DEFAULT NULL,
  `quantity` int(11) DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`,`item_id`),
  KEY `item_id` (`item_id`)
) ENGINE=InnoDB AUTO_INCREMENT=94 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `vouchers`
--

DROP TABLE IF EXISTS `vouchers`;
CREATE TABLE IF NOT EXISTS `vouchers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `discount` float DEFAULT NULL,
  `min_price` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vouchers`
--

INSERT INTO `vouchers` (`id`, `discount`, `min_price`, `name`) VALUES
(1, 0.3, 50000, 'CRYCRY'),
(2, 0.5, 1000000, 'BOSS'),
(3, 0.2, 30000, 'QUICK');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `user_items`
--
ALTER TABLE `user_items`
  ADD CONSTRAINT `user_items_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `user_items_ibfk_2` FOREIGN KEY (`item_id`) REFERENCES `items` (`pid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
