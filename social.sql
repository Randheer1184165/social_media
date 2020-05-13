-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2016 at 09:31 PM
-- Server version: 5.6.14
-- PHP Version: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `social`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `description`) VALUES
(1, 'admin', 'hey,you are with admin!!!'),
(2, 'user', 'hello dear,its me ....user!!!'),
(3, 'new comers', 'hey,its newly!!!');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `update_id` int(11) NOT NULL,
  `comment` text NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `user_id`, `update_id`, `comment`, `date`) VALUES
(1, 30, 1, 'asasas', '2016-04-20'),
(2, 30, 1, '	prabhas cjhhcx nxncbxcxcxc  sdsd ', '2016-04-20'),
(3, 30, 2, '	sdsdd sds dd', '2016-04-20');

-- --------------------------------------------------------

--
-- Table structure for table `district`
--

CREATE TABLE IF NOT EXISTS `district` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `state_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `district`
--

INSERT INTO `district` (`id`, `name`, `state_id`) VALUES
(3, 'ranchi', 4),
(6, 'balasore', 6),
(8, 'vizag', 2),
(9, 'Bhubaneswar', 2),
(11, 'sdfdg', 14),
(12, 'thiruvanthapuram', 17);

-- --------------------------------------------------------

--
-- Table structure for table `friend`
--

CREATE TABLE IF NOT EXISTS `friend` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `to_id` int(11) NOT NULL,
  `from_id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `date` date NOT NULL,
  `accept_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `friend`
--

INSERT INTO `friend` (`id`, `to_id`, `from_id`, `status`, `date`, `accept_date`) VALUES
(3, 31, 30, 0, '2016-04-27', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `like`
--

CREATE TABLE IF NOT EXISTS `like` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `update_id` int(11) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `like`
--

INSERT INTO `like` (`id`, `user_id`, `update_id`, `date`) VALUES
(1, 30, 1, '2016-04-27'),
(2, 30, 3, '2016-04-27');

-- --------------------------------------------------------

--
-- Table structure for table `online_user`
--

CREATE TABLE IF NOT EXISTS `online_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `type` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `online_user`
--

INSERT INTO `online_user` (`id`, `name`, `email`, `password`, `type`) VALUES
(1, 'Bhubaneswar', 'prabhas.chandra5@gmail.com', 'omg', 2),
(2, 'wewewewewewe', 'wewe', 'we', 2);

-- --------------------------------------------------------

--
-- Table structure for table `place`
--

CREATE TABLE IF NOT EXISTS `place` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `district_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `place`
--

INSERT INTO `place` (`id`, `name`, `district_id`) VALUES
(2, 'chindwara', 0),
(7, 'zfdsf', 9),
(9, 'dgdfgdf', 12),
(10, 'eyuh', 8),
(11, 'goa', 11);

-- --------------------------------------------------------

--
-- Table structure for table `retailer`
--

CREATE TABLE IF NOT EXISTS `retailer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(300) NOT NULL,
  `url` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `retailer`
--

INSERT INTO `retailer` (`id`, `name`, `url`) VALUES
(1, 'AMAZON', 'AMAZON.COM'),
(2, 'AMAZON', 'AMAZON.COM');

-- --------------------------------------------------------

--
-- Table structure for table `reward`
--

CREATE TABLE IF NOT EXISTS `reward` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `reward` varchar(200) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `reward`
--

INSERT INTO `reward` (`id`, `user_id`, `reward`, `date`) VALUES
(1, 30, '10', '2016-04-20');

-- --------------------------------------------------------

--
-- Table structure for table `share`
--

CREATE TABLE IF NOT EXISTS `share` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `update_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `new_description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `share`
--

INSERT INTO `share` (`id`, `user_id`, `update_id`, `date`, `new_description`) VALUES
(1, 30, 3, '2016-04-20', 'wewemnwe');

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE IF NOT EXISTS `state` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`id`, `name`) VALUES
(2, 'andrapradesh'),
(4, 'jharkhand'),
(6, 'orissa12324'),
(11, 'Punjab'),
(13, 'jammu'),
(14, 'samd,samd'),
(16, 'Assam'),
(17, 'kerala');

-- --------------------------------------------------------

--
-- Table structure for table `updates`
--

CREATE TABLE IF NOT EXISTS `updates` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL,
  `retailer_id` int(11) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `image` text NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `updates`
--

INSERT INTO `updates` (`id`, `category_id`, `retailer_id`, `title`, `description`, `image`, `user_id`) VALUES
(1, 2, 1, 'Aboutus', '', 'upload/1461159411_.12041865_425889137613938_1558821948_n.jpg', 30),
(2, 2, 1, 'erer', '', 'upload/1461159586_.10256547_10152278166119667_1675167995848281413_n7.jpg', 30),
(3, 1, 2, 'sds', '', 'upload/1461159599_.chinutanu.png', 30);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `address` text NOT NULL,
  `contact_no` varchar(15) NOT NULL,
  `state_id` int(11) NOT NULL,
  `district_id` int(11) NOT NULL,
  `place_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `type` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `address`, `contact_no`, `state_id`, `district_id`, `place_id`, `date`, `type`) VALUES
(1, 'fgfd', 'dgdfg', 'dgdfg', 'dfgdfg', '12324', 6, 0, 0, '0000-00-00', 0),
(3, 'fggggh', 'Zxcvbn', 'zxcbnm', 'zxvbnm', '7984653', 2, 0, 0, '0000-00-00', 0),
(8, 'riya', 'riya@gmail.com', 'riya', 'riya', '123345', 6, 0, 0, '0000-00-00', 0),
(10, 'asdsad', 'asdsad@', 'asddddddddddd', 'asdf', '9874653211', 4, 0, 0, '0000-00-00', 0),
(11, 'saina', 'asdfgh', 'asdfghj', 'bbs', '8746532', 2, 0, 0, '0000-00-00', 0),
(30, 'amit', 'omg@gmail.com', 'omg', 'jaipur qqwqw  qwqw', '1236548798', 6, 0, 0, '2015-07-23', 0),
(31, 'wwwwwwwwwwww', 'wwww', 'wwww', '', '', 0, 0, 0, '0000-00-00', 2);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
