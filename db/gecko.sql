-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 28, 2011 at 02:15 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `gecko`
--

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL,
  `elem_id` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `name`, `elem_id`) VALUES
(4, 'main menu', 'p7PMnav');

-- --------------------------------------------------------

--
-- Table structure for table `menu_item`
--

CREATE TABLE IF NOT EXISTS `menu_item` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL,
  `url` varchar(250) NOT NULL,
  `base` int(11) NOT NULL,
  `menu` int(12) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=38 ;

--
-- Dumping data for table `menu_item`
--

INSERT INTO `menu_item` (`id`, `name`, `url`, `base`, `menu`) VALUES
(28, 'Home', '', -1, 4),
(29, 'Why Use Us', '', -1, 4),
(30, 'How It Works', '', -1, 4),
(31, 'Our Services', '', -1, 4),
(32, 'FAQ''s', '', -1, 4),
(33, 'Sell / Trade', '', -1, 4),
(34, 'Vehicle Accessories', '', -1, 4),
(35, 'Our Community', '', -1, 4),
(36, 'News/Media', '', -1, 4),
(37, 'Contact Us', '', -1, 4);

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(250) NOT NULL,
  `address` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `name`, `age`, `gender`, `address`, `email`) VALUES
(1, 'Bogart', 25, 'female', 'hell', 'bogart@bigaon.com'),
(2, 'jc', 25, 'female', 'hell', 'jc@test.com');

-- --------------------------------------------------------

--
-- Table structure for table `template`
--

CREATE TABLE IF NOT EXISTS `template` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL,
  `content` text NOT NULL,
  `gdefault` int(12) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `template`
--

INSERT INTO `template` (`id`, `name`, `content`, `gdefault`) VALUES
(4, 'Main', '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">\r\n<html xmlns="http://www.w3.org/1999/xhtml">\r\n<head>\r\n<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />\r\n<title>Change Site Title!!</title>\r\n<link href="/css/global.css" type="text/css" rel="stylesheet" media="screen" />\r\n<link href="/css/print.css" type="text/css" rel="stylesheet" media="print" />\r\n<script type="text/javascript" src="/js/jquery-1.3.2.min.js"></script>\r\n<!--[if lte IE 6]><script src="/js/png.js" type="text/javascript" language="javascript"></script><![endif]-->\r\n<script type="text/javascript" src="/js/jquery.selectbox.js"></script>\r\n<script type="text/javascript" src="/p7pm/p7popmenu.js"></script>\r\n<script type="text/javascript">\r\n\r\njQuery(function() {\r\n    jQuery(".category").selCust();\r\n});\r\n</script>\r\n<script type="text/javascript">\r\njQuery(document).ready(function(){\r\n\r\n	jQuery("#p7PMnav li").eq(0).addClass("noBG");\r\n\r\n});\r\n</script>\r\n<style type="text/css" media="screen">\r\n<!--\r\n@import url("/p7pm/p7pmh0.css");\r\n-->\r\n</style>\r\n</head>\r\n<body onload="P7_initPM(1,0,1,-20,10)">\r\n<div id="bg"></div>\r\n<div id="wrapper">\r\n	<div id="header">\r\n    	<a href="#" class="logo left">\r\n        	<img src="/images/logo.gif" alt="" width="398" height="112" />\r\n        </a>\r\n        \r\n        <div class="box right">\r\n        	<div class="fb-icon right">\r\n            	<img src="/images/fb.gif" alt="" width="144" height="44" />\r\n            </div>\r\n            <div class="contact-num">\r\n            		<img src="/images/contact-num.png" alt="" width="296" height="92" />\r\n            </div>\r\n        </div>\r\n        <div class="clearB"></div>\r\n        <div id="menu">\r\n     {gecko_menu_2015}\r\n        </div>\r\n  </div>\r\n    <div id="body">\r\n  		<div class="banner">\r\n        	<img src="/images/banner-img.jpg" alt="" width="955" height="235" />\r\n        </div>\r\n        <div class="feature">\r\n        	<div class="feature-box left">\r\n            		<div class="feature-title">Buying Cars</div>  \r\n                    <div class="feat-img">\r\n                    	<img src="/images/feat-img1.jpg" alt="" width="225" height="150" />\r\n                    </div>\r\n            </div>\r\n            <div class="feature-box left">\r\n            		<div class="feature-title">Car Finance</div>  \r\n                    <div class="feat-img">\r\n                    	<img src="/images/feat-img2.jpg" alt="" width="225" height="150" />\r\n                    </div>\r\n            </div>\r\n            <div class="feature-box left">\r\n            		<div class="feature-title">Car Insurance</div>  \r\n                    <div class="feat-img">\r\n                    	<img src="/images/feat-img3.jpg" alt="" width="225" height="150" />\r\n                    </div>\r\n            </div>\r\n            <div class="feature-box left">\r\n            		<div class="feature-title">Contact Us</div>  \r\n                    <div class="feat-img">\r\n                    	<img src="/images/feat-img4.jpg" alt="" width="225" height="150" />\r\n                    </div>\r\n            </div>\r\n        	<div class="clearB"></div>\r\n        </div>\r\n        <div class="content">\r\n        	<div class="cont-leftpannel">\r\n            	{gecko_content}\r\n            </div>\r\n            <div class="cont-rightpannel">\r\n            	<div class="boxA">\r\n                	<div class="boxA-head">\r\n                    	Request a Call Back\r\n                    </div>\r\n                    <div class="boxA-body">\r\n                    	<p>Please fill out the form below to<br /> \r\n						request a call back from one of our <br />\r\n						friendly customer service assistants</p>\r\n                        <table cellpadding="0" cellspacing="0">\r\n                        	<tr>\r\n                            	<td>\r\n                                	<div class="txtinput"><input type="text" value="Name" /></div>\r\n                                </td>\r\n                            </tr>\r\n                            <tr>\r\n                            	<td>\r\n                                	<div class="txtinput"><input type="text" value="Phone" /></div>\r\n                                </td>\r\n                            </tr>\r\n                            <tr>\r\n                            	<td>\r\n                                	<div class="txtinput"><input type="text" value="Preferred Day" /></div>\r\n                                </td>\r\n                            </tr>\r\n                            <tr>\r\n                            	<td>\r\n                                	<div class="txtinput"><input type="text" value="Preferred Time" /></div>\r\n                                </td>\r\n                            </tr>\r\n                            <tr>\r\n                            	<td>\r\n                                	<div class="left">\r\n                                    <select name="category" class="category">\r\n                                                      <option value="cat1">State</option>\r\n                                                      <option value="cat2">Category2</option>\r\n                                                      <option value="cat3">1</option>\r\n                                                      <option value="cat4">Category4</option>\r\n                                                      <option value="cat5">Category5</option>\r\n                                                      <option value="cat6">Category6</option>\r\n                                                      <option value="cat7">Category7</option>\r\n                                                      <option value="cat5">Category5</option>\r\n                                                      <option value="cat6">Category6</option>\r\n                                                      <option value="cat7">Category7</option>\r\n                                                    </select>\r\n                                   </div>\r\n                                	<div class="btnsubmit right"><input type="image" src="/images/btnsubmit.gif" /></div>\r\n                                   \r\n                                </td>\r\n                            </tr>\r\n                        </table>\r\n                         <div class="clearB"></div>\r\n                    </div>\r\n                </div>\r\n                <div class="boxA">\r\n                	<div class="boxA-head">\r\n                    	Testimonials\r\n                    </div>\r\n                    <div class="boxA-body textimonials">\r\n                    	<div class="testimonial-box"><p>\r\n                        	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.\r\n                        </p>\r\n                        <span class="right">- Joe Smith</span>\r\n                        <div class="clearB"></div>\r\n                        </div>\r\n                        <div class="testimonial-box"><p>\r\n                        \r\nex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit.\r\n                        </p>\r\n                        <span class="right"> - Ron Jones</span></div>\r\n                        <div class="clearB"></div>\r\n                    </div>\r\n                    <br />\r\n                    <br />\r\n                    <br />\r\n                </div>\r\n            </div>\r\n            <div class="clearB"></div>\r\n        </div>\r\n  \r\n    </div>\r\n    <div class="clearB"></div>\r\n</div>\r\n<div id="wrap-footer">\r\n	<div id="footer">\r\n    	<div class="foot-boxA left">\r\n        	<img src="/images/icon1.jpg" alt="" width="125" height="77" />\r\n        </div>\r\n        <div class="foot-boxB left">\r\n        	<h1>Contac Us</h1>\r\n           <p> Telephone:  1300 880 686 <br />\r\n			Email: info@findmycar.com.au</p>\r\n        </div>\r\n        <div class="foot-boxC left">\r\n        	<h1 class="xB">Links</h1>\r\n            	<ul class="left">\r\n				<li><a href="#">Home</a></li>\r\n                <li><a href="#">Why Use Us</a></li>\r\n                <li><a href="#">How It Works</a></li>\r\n                <li><a href="#">Our Services</a></li>\r\n                <li><a href="#">FAQ''s</a></li>\r\n                <li><a href="#">Sell / Trade</a></li>\r\n                <li><a href="#">Vehicle Accessories</a></li>\r\n				</ul>\r\n            	<ul class="left">\r\n                <li><a href="#">Buying New / Used Cars</a></li>\r\n                <li><a href="#">Car Finance</a></li>\r\n                <li><a href="#">Car Insurance</a></li>\r\n                <li><a href="#">Customer Service</a></li>\r\n                <li><a href="#">Our Community</a></li>\r\n               <li><a href="#"> News / Media</a></li>\r\n               <li><a href="#"> Contact Us</a></li>\r\n				</ul>\r\n        </div>\r\n        <div class="clearB"></div>\r\n        <div class="copyright">All Rights Reserved ? 2011   |  <a href="#"> Privacy Policy and Disclaimer</a></div>\r\n    </div>\r\n</div>\r\n<script type="text/javascript" src="/js/cufon-yui.js"></script>\r\n<script type="text/javascript" src="/js/Verdana_italic_700.font.js"></script>\r\n<script type="text/javascript" src="/js/customscript.js"></script>\r\n</body>\r\n</html>\r\n', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `name` varchar(250) NOT NULL,
  `lastname` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `user_type` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `name`, `lastname`, `email`, `user_type`, `status`) VALUES
(1, 'admin', 'admin', 'Jc', 'Mulit', 'vaultdweller123@gmail.com', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_type`
--

CREATE TABLE IF NOT EXISTS `user_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_type` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `user_type`
--

INSERT INTO `user_type` (`id`, `user_type`) VALUES
(1, 'admin'),
(2, 'developer');

-- --------------------------------------------------------

--
-- Table structure for table `webpage`
--

CREATE TABLE IF NOT EXISTS `webpage` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL,
  `content` text NOT NULL,
  `temp_id` int(11) NOT NULL,
  `homepage` int(12) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `webpage`
--

INSERT INTO `webpage` (`id`, `name`, `content`, `temp_id`, `homepage`) VALUES
(16, 'Home', '<h1><span>Car Location Perth</span><br />\r\n				Helping You to Find Your Next Car</h1>\r\n                <div class="xIMG right">\r\n                	<img src="/images/image1.jpg" alt="" width="341" height="180" />\r\n                </div>\r\n                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>\r\n<p>quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident. </p>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip </p>\r\n<p>ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>\r\n				<h1>Services</h1>\r\n                	<ul class="cont-ul">\r\n					<li>Exercitation ullamco</li> \r\n                    <li>Roluptate velit esse</li> \r\n                    <li>Eaboris nisi ut aliquip</li> \r\n                    <li>Cillum dolore eu </li>\r\n                    <li>Ex ea commodo consequat.</li> \r\n                    <li>Fugiat nulla pariatur</li>\r\n                    <li>Duis aute irure dolor </li>\r\n                    <li>Excepteur sint occaecat </li>\r\n                    <li>Reprehenderit in</li> \r\n					<li>Cupidatat non proident</li>\r\n					</ul>\r\n            \r\n               <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip </p>\r\n\r\n<p>ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>\r\n			<p>» <a href="#" class="clickA">Click here to contact us today to help you find your next car</a>  </p>', 4, 1);
