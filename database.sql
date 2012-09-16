-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 16, 2012 at 10:53 AM
-- Server version: 5.5.20
-- PHP Version: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `nota`
--
CREATE DATABASE `nota` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `nota`;

-- --------------------------------------------------------

--
-- Table structure for table `entries`
--

CREATE TABLE `entries` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uname` varchar(30) NOT NULL,
  `title` varchar(100) NOT NULL,
  `post` longtext NOT NULL,
  `journal` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `share` int(1) NOT NULL,
  KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `entries`
--

INSERT INTO `entries` (`id`, `uname`, `title`, `post`, `journal`, `date`, `share`) VALUES
(1, 'mkarthik91', 'hi', 'first post', 'hi', '2012-04-30 18:27:54', 0),
(5, 'hello', 'hello', 'hello', 'hello', '2012-04-30 18:30:54', 0),
(6, 'vmantri', 'the test', 'tets                         ', 'test', '2012-04-30 18:38:06', 0),
(9, 'mkarthik91', 'hello', 'fist post                        ', 'post', '2012-04-30 21:30:39', 1),
(10, 'mkarthik91', 'The First Valuable Post', 'Hello. my name is karthik Muralidharan. I am a b.tech student from vit university.                        ', 'post', '2012-04-30 21:28:11', 0),
(11, 'mkarthik91', 'WiMAX Research and Implementation', 'WiMAX broadband access as a solution to the "last mile" problem, enables network operators can gradually investment and flexible deployment, network planning can be exempted from the restrictions topography, 70 Mbit / s rate for the MAN can access the cable as a way to wireless extension, or as an alternative to cable way. WiMAX in full swing will be have a profound impact to the development of the entire wireless communications industry.', 'Data Communications', '2012-05-01 13:18:45', 0),
(12, 'mkarthik91', 'Letter For Passport', 'To\r\nAdministrative Officer\r\nVIT Administrative Office\r\nVIT University\r\nVellore, Tamil Nadu\r\n\r\nSUBJECT: Procurement Of Bonafide Certificate For Passport Application\r\n\r\nDear Sir or Madam,\r\n\r\nI am a third year student studying B.Tech computer Science Engineering in your university. I require bonafide certificate from the University as well as the University Hostel office for submitting my passport application. Please provide me with the same.\r\n\r\nKarthik Muralidharan\r\n09BCE222\r\n', 'Letters', '2012-05-02 15:09:51', 0),
(13, 'mkarthik91', 'hi', 'hello world                        ', 'hi', '2012-05-02 23:13:29', 0),
(14, 'mkarthik91', 'hi', 'This is a test post                        ', 'post', '2012-05-03 03:17:14', 1),
(15, 'mkarthik91', 'hello', 'hi                        ', 'vidish', '2012-05-03 05:09:42', 1),
(16, 'tmehta', 'hello', 'this is a test blog page.                        ', 'tushar''s blog', '2012-05-05 00:40:22', 1),
(17, 'mkarthik91', 'Mudit', 'this is mudit''s first post.                        ', 'hi', '2012-05-20 13:18:33', 1),
(18, 'mkarthik91', 'Driving School No.', ' NEW shine star driving college phone no. is 25005089. Call ASAP.', 'Personal', '2012-05-25 11:25:52', 1),
(19, 'mkarthik91', 'Tip # : Enable Dashboard Widgets on the desktopTip # : Enable Dashboard Widgets on the desktop', 'Dashboard is a cool way to check upon the widgets that you want to follow such as notes, time, weather etc. But sometimes I want to use some widgets on the desktop such as the notes widget so that I don''t have to constantly remind me to go to dashboard just to view my notes and reminders. But by enabling the developer mode of dashboard, you can keep some widgets from the dashboard onto your desktop. \r\n\r\nThis trick requires you to use the terminal to enable the feature.\r\n\r\n  1. Open terminal\r\n  2. Type defaults write com.apple.dashboard devmode -bool true\r\n  3. Press enter and close the terminal\r\nThat''s it!! You have successfully enabled the developer mode in the dashboard.\r\n', 'tips', '2012-05-27 18:18:03', 0),
(20, 'smurali', 'first post', 'hello this is a test post.                        ', 'data communication', '2012-05-31 17:01:48', 1),
(21, 'smurali', 'hi', 'Nirmal''s test page.                        ', 'nirmal', '2012-05-31 17:02:27', 0),
(22, 'mkarthik91', 'mTHA', 'test1                         ', 'DISCRETE MATHS', '2012-07-04 13:16:30', 1);

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `name` varchar(30) NOT NULL,
  `uname` varchar(30) NOT NULL,
  `pwd` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  PRIMARY KEY (`uname`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`name`, `uname`, `pwd`, `email`) VALUES
('Kushagra Sharma', 'ksharma', '12345', 'kushagra@gmail.com'),
('Karthik Muralidharan', 'mkarthik91', '1806912005', 'mkarthik91@gmail.com'),
('Nirmal Muralidharan', 'nirmal', 'nirmal', 'home.muralidharan@gmail.com'),
('S Muralidharan', 'smurali', 'smurali', 'home.muralidharan@gmail.com'),
('Tushar Mehta', 'tmehta', '12345', 'tmehta@gmail.com'),
('Vidish Mantri', 'vmantri', '12345', 'vidishmantri@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `mkarthik91`
--

CREATE TABLE `mkarthik91` (
  `sno` int(11) NOT NULL AUTO_INCREMENT,
  `journal` varchar(100) NOT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `mkarthik91`
--

INSERT INTO `mkarthik91` (`sno`, `journal`) VALUES
(1, 'hi'),
(2, 'post'),
(3, 'Data Communications'),
(4, 'Letters'),
(5, 'vidish'),
(6, 'Personal'),
(7, 'tips'),
(8, 'DISCRETE MATHS');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
