-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 04, 2020 at 01:32 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_rry`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

DROP TABLE IF EXISTS `about`;
CREATE TABLE IF NOT EXISTS `about` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `title` varchar(15) DEFAULT NULL,
  `text` varchar(400) DEFAULT NULL,
  `video` varchar(35) DEFAULT NULL,
  `background` varchar(35) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `title`, `text`, `video`, `background`) VALUES
(1, 'about us', 'The stigma is a result of misconceptions and it needs to end. Red Ribbon Youth is dedicated to combat the HIV discrimination through raising awareness and understanding among teenagers.', NULL, 'about_background.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `downtown`
--

DROP TABLE IF EXISTS `downtown`;
CREATE TABLE IF NOT EXISTS `downtown` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `location` text NOT NULL,
  `info` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `east_london`
--

DROP TABLE IF EXISTS `east_london`;
CREATE TABLE IF NOT EXISTS `east_london` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `location` text NOT NULL,
  `info` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

DROP TABLE IF EXISTS `events`;
CREATE TABLE IF NOT EXISTS `events` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `start` varchar(10) NOT NULL,
  `end` varchar(10) NOT NULL,
  `month` text NOT NULL,
  `day` tinyint(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `facts`
--

DROP TABLE IF EXISTS `facts`;
CREATE TABLE IF NOT EXISTS `facts` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `title` varchar(30) NOT NULL,
  `icon` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `facts`
--

INSERT INTO `facts` (`id`, `title`, `icon`) VALUES
(1, 'Unprotected sex', ''),
(2, 'Sharing needles', ''),
(3, 'Sharing needles', ''),
(4, 'Pregnancy', ''),
(5, 'Through food', ''),
(6, 'With a kiss', ''),
(7, 'Touching', ''),
(8, 'In the pool', '');

-- --------------------------------------------------------

--
-- Table structure for table `footer`
--

DROP TABLE IF EXISTS `footer`;
CREATE TABLE IF NOT EXISTS `footer` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `disclaimer` text NOT NULL,
  `copy` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `footer`
--

INSERT INTO `footer` (`id`, `disclaimer`, `copy`) VALUES
(1, 'Red Ribbon Youth is dedicated to combat the HIV discrimination through raising awareness and understanding among teenagers. Information on this site is not to be used for diagnosis, treatment or referral services. Individuals should contact their personal physician, and/or their local addiction or mental health agency for further information. If you are in crisis, please go to your local hospital or call 911 immediately', 'Red Ribbon Youth, 2020. All rights reserved.');

-- --------------------------------------------------------

--
-- Table structure for table `header`
--

DROP TABLE IF EXISTS `header`;
CREATE TABLE IF NOT EXISTS `header` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `logo` varchar(35) DEFAULT NULL,
  `link1` varchar(13) DEFAULT NULL,
  `link2` varchar(13) DEFAULT NULL,
  `link3` varchar(13) DEFAULT NULL,
  `link4` varchar(13) DEFAULT NULL,
  `link5` varchar(13) DEFAULT NULL,
  `link6` varchar(13) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `header`
--

INSERT INTO `header` (`id`, `logo`, `link1`, `link2`, `link3`, `link4`, `link5`, `link6`) VALUES
(1, 'LOGO.svg', 'about', 'workshop', 'why', 'how', 'where', 'get involved');

-- --------------------------------------------------------

--
-- Table structure for table `hero`
--

DROP TABLE IF EXISTS `hero`;
CREATE TABLE IF NOT EXISTS `hero` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `image` varchar(35) NOT NULL,
  `mobile-image` varchar(35) NOT NULL,
  `text` varchar(35) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hero`
--

INSERT INTO `hero` (`id`, `image`, `mobile-image`, `text`) VALUES
(1, 'Banner.jpg', 'Banner-mobile.jpg', 'courage makes change');

-- --------------------------------------------------------

--
-- Table structure for table `join_us`
--

DROP TABLE IF EXISTS `join_us`;
CREATE TABLE IF NOT EXISTS `join_us` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `text` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `join_us`
--

INSERT INTO `join_us` (`id`, `title`, `text`) VALUES
(1, 'JOIN US ON INSTAGRAM', 'Pass along your courage with #redribbonyouth.\r\nBe brave enough to say no to unprotected sex, to say yes to get tested.\r\nAnd inspired others with your story.');

-- --------------------------------------------------------

--
-- Table structure for table `masonville`
--

DROP TABLE IF EXISTS `masonville`;
CREATE TABLE IF NOT EXISTS `masonville` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `location` text NOT NULL,
  `info` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `near_south`
--

DROP TABLE IF EXISTS `near_south`;
CREATE TABLE IF NOT EXISTS `near_south` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `location` text NOT NULL,
  `info` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `near_west`
--

DROP TABLE IF EXISTS `near_west`;
CREATE TABLE IF NOT EXISTS `near_west` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `location` text NOT NULL,
  `info` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

DROP TABLE IF EXISTS `newsletter`;
CREATE TABLE IF NOT EXISTS `newsletter` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `text` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `newsletter`
--

INSERT INTO `newsletter` (`id`, `title`, `text`) VALUES
(1, 'sing up for our newsletter', 'We will keep you posted with our latest workshop schedule and testing information.\r\n\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `northeast_london`
--

DROP TABLE IF EXISTS `northeast_london`;
CREATE TABLE IF NOT EXISTS `northeast_london` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `location` text NOT NULL,
  `info` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `north_london`
--

DROP TABLE IF EXISTS `north_london`;
CREATE TABLE IF NOT EXISTS `north_london` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `location` text NOT NULL,
  `info` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `old_south`
--

DROP TABLE IF EXISTS `old_south`;
CREATE TABLE IF NOT EXISTS `old_south` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `location` text NOT NULL,
  `info` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `southeast_london`
--

DROP TABLE IF EXISTS `southeast_london`;
CREATE TABLE IF NOT EXISTS `southeast_london` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `location` text NOT NULL,
  `info` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `southwest_london`
--

DROP TABLE IF EXISTS `southwest_london`;
CREATE TABLE IF NOT EXISTS `southwest_london` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `location` text NOT NULL,
  `info` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

DROP TABLE IF EXISTS `tbl_users`;
CREATE TABLE IF NOT EXISTS `tbl_users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(41) NOT NULL,
  `user_pass` varchar(100) NOT NULL,
  `user_email` varchar(40) NOT NULL,
  `user_fname` varchar(20) NOT NULL,
  `user_lname` varchar(20) NOT NULL,
  `this_login` datetime DEFAULT NULL,
  `last_login` datetime DEFAULT NULL,
  `reg_date` datetime NOT NULL DEFAULT current_timestamp(),
  `user_ip` varchar(50) DEFAULT NULL,
  `last_ip` varchar(50) DEFAULT NULL,
  `admin_rights` tinyint(1) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COMMENT='Admin User Information. ';

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`user_id`, `user_name`, `user_pass`, `user_email`, `user_fname`, `user_lname`, `this_login`, `last_login`, `reg_date`, `user_ip`, `last_ip`, `admin_rights`) VALUES
(1, 'admin', '$2y$10$QNZcSlceTwLsI0fu/SoPKe6A43Vh5PUA1a3pJdLsKtjN0Jd1jBc/y', 'admin@rry.com', 'admin', 'admin', '2020-04-02 19:53:24', '2020-03-15 11:54:42', '0001-01-01 01:01:01', '::1', '::1', 1),
(2, 'JeffreyHelder', '$2y$10$Bn3mXtiA/yVJXtvSLQZJDeDH1h0iaNaLXZd9o1.4tC83WdZEHCdZi', 'jeffrey.d.helder@gmail.com', 'Jeffrey', 'Helder', '2020-03-15 11:48:36', '2020-03-14 20:31:32', '2020-03-14 12:23:22', '::1', '::1', 2);

-- --------------------------------------------------------

--
-- Table structure for table `testing`
--

DROP TABLE IF EXISTS `testing`;
CREATE TABLE IF NOT EXISTS `testing` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `text` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `testing`
--

INSERT INTO `testing` (`id`, `title`, `text`) VALUES
(1, 'Anonymous\r\nTesting', 'An anonymous test doesn\'t require your name or health card. The test is ordered using a six digit code instead of your name. Typically, anonymous tests are also rapid tests, which are done on-site by sampling blood from a quick finger prick. You receive the results in about 20 minutes.'),
(2, 'Confidential\r\nTesting', 'A confidential test, like the one you would get at a heath unit or doctor\'s office, uses your name and usually involves a standard blood draw. The results take longer to come back than rapid test results because they are sent to a lab.');

-- --------------------------------------------------------

--
-- Table structure for table `west_london`
--

DROP TABLE IF EXISTS `west_london`;
CREATE TABLE IF NOT EXISTS `west_london` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `location` text NOT NULL,
  `info` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `whitehills`
--

DROP TABLE IF EXISTS `whitehills`;
CREATE TABLE IF NOT EXISTS `whitehills` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `location` text NOT NULL,
  `info` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `why`
--

DROP TABLE IF EXISTS `why`;
CREATE TABLE IF NOT EXISTS `why` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `title` varchar(10) NOT NULL,
  `istitle` text NOT NULL,
  `isnottitle` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `why`
--

INSERT INTO `why` (`id`, `title`, `istitle`, `isnottitle`) VALUES
(1, 'why', 'HIV/AIDS IS TRANSMITTED', 'HIV/AIDS IS NOT TRANSMITTED');

-- --------------------------------------------------------

--
-- Table structure for table `workshop`
--

DROP TABLE IF EXISTS `workshop`;
CREATE TABLE IF NOT EXISTS `workshop` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `background` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `workshop`
--

INSERT INTO `workshop` (`id`, `background`) VALUES
(1, 'workshop_background.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
