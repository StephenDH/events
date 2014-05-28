-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2014 at 06:04 PM
-- Server version: 5.6.14
-- PHP Version: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `events`
--

-- --------------------------------------------------------

--
-- Table structure for table `evenementen`
--

CREATE TABLE IF NOT EXISTS `evenementen` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(45) NOT NULL,
  `picture` varchar(100) NOT NULL,
  `details` varchar(5000) NOT NULL,
  `datum` date NOT NULL,
  `tijd` time NOT NULL,
  `website` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `evenementen`
--

INSERT INTO `evenementen` (`id`, `title`, `picture`, `details`, `datum`, `tijd`, `website`, `email`) VALUES
(1, 'test', 'http://www.ce-credits.ca/wp-content/uploads/2013/09/event_icon.png', 'test', '2014-05-16', '06:54:00', 'http://www.ce-credits.ca', 'test@test.be'),
(2, 'test 2', 'http://www.ce-credits.ca/wp-content/uploads/2013/09/event_icon.png', 'test 2', '2014-05-27', '12:00:00', 'http://www.ce-credits.ca', 'test@test.be'),
(3, 'LAN Party', 'http://www.lanparty.be/images/stories/lanparty.png', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse sed porttitor diam. Duis ac volutpat odio. Vestibulum mi leo, tincidunt sit amet mi sit amet, porttitor aliquet elit. Morbi aliquam dui dui, eget tempus enim rhoncus ut. Vestibulum eget elit sed arcu mollis consectetur non vel ipsum. Etiam consequat dui nec nisi pretium sagittis. Proin magna mi, lacinia sed massa vel, sollicitudin consequat erat. Phasellus cursus dapibus tortor quis pharetra. Nullam justo libero, accumsan quis augue molestie, ultrices posuere mauris. Praesent vehicula pellentesque augue, nec commodo velit.\r\n\r\nNam egestas iaculis pharetra. Etiam bibendum viverra ligula sed aliquam. Pellentesque tincidunt ornare velit, ac condimentum libero ultricies in. Maecenas faucibus congue nisl sed condimentum. Integer tristique eros vel lorem auctor, quis ultrices justo commodo. Maecenas leo augue, molestie eget rutrum in, feugiat nec est. Sed vulputate, urna sit amet elementum porta, sapien mauris interdum sem, eu scelerisque sem turpis vel libero. Nam adipiscing consequat ligula sed vehicula.\r\n\r\nInterdum et malesuada fames ac ante ipsum primis in faucibus. Phasellus leo velit, placerat et quam at, porttitor facilisis erat. Maecenas non leo odio. Nulla viverra dignissim est sit amet egestas. Donec condimentum arcu tempus turpis tempus, at tincidunt dui faucibus. Maecenas tincidunt ullamcorper mauris. In dictum massa vitae sagittis posuere. Ut orci lectus, aliquam sit amet est quis, blandit ultricies sem. Duis ultrices tincidunt elit, eget cursus tortor varius in. Quisque id velit consequat, varius dolor ac, mollis lectus. Integer sed justo venenatis, facilisis lectus id, tempor nisi. Nam a dui eget tortor ullamcorper bibendum in a justo. Proin convallis ligula justo. Etiam vitae purus vel eros tincidunt tincidunt. Nunc quis metus eros.', '2014-06-30', '12:00:00', 'http://www.lanparty.be/', 'test@test.be'),
(4, 'LAN Party', 'http://www.lanparty.be/images/stories/lanparty.png', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse sed porttitor diam. Duis ac volutpat odio. Vestibulum mi leo, tincidunt sit amet mi sit amet, porttitor aliquet elit. Morbi aliquam dui dui, eget tempus enim rhoncus ut. Vestibulum eget elit sed arcu mollis consectetur non vel ipsum. Etiam consequat dui nec nisi pretium sagittis. Proin magna mi, lacinia sed massa vel, sollicitudin consequat erat. Phasellus cursus dapibus tortor quis pharetra. Nullam justo libero, accumsan quis augue molestie, ultrices posuere mauris. Praesent vehicula pellentesque augue, nec commodo velit.\r\n\r\nNam egestas iaculis pharetra. Etiam bibendum viverra ligula sed aliquam. Pellentesque tincidunt ornare velit, ac condimentum libero ultricies in. Maecenas faucibus congue nisl sed condimentum. Integer tristique eros vel lorem auctor, quis ultrices justo commodo. Maecenas leo augue, molestie eget rutrum in, feugiat nec est. Sed vulputate, urna sit amet elementum porta, sapien mauris interdum sem, eu scelerisque sem turpis vel libero. Nam adipiscing consequat ligula sed vehicula.\r\n\r\nInterdum et malesuada fames ac ante ipsum primis in faucibus. Phasellus leo velit, placerat et quam at, porttitor facilisis erat. Maecenas non leo odio. Nulla viverra dignissim est sit amet egestas. Donec condimentum arcu tempus turpis tempus, at tincidunt dui faucibus. Maecenas tincidunt ullamcorper mauris. In dictum massa vitae sagittis posuere. Ut orci lectus, aliquam sit amet est quis, blandit ultricies sem. Duis ultrices tincidunt elit, eget cursus tortor varius in. Quisque id velit consequat, varius dolor ac, mollis lectus. Integer sed justo venenatis, facilisis lectus id, tempor nisi. Nam a dui eget tortor ullamcorper bibendum in a justo. Proin convallis ligula justo. Etiam vitae purus vel eros tincidunt tincidunt. Nunc quis metus eros.', '2014-06-30', '12:00:00', 'http://www.lanparty.be/', 'test@test.be');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
