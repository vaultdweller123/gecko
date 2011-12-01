-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 01, 2011 at 03:22 AM
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
  `elem_class` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `name`, `elem_id`, `elem_class`) VALUES
(4, 'main menu', 'p7PMnav', '0');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=40 ;

--
-- Dumping data for table `menu_item`
--

INSERT INTO `menu_item` (`id`, `name`, `url`, `base`, `menu`) VALUES
(28, 'Home', 'index.php?page=16', -1, 4),
(29, 'Why Use Us', 'index.php?page=19', -1, 4),
(30, 'How It Works', 'index.php?page=20', -1, 4),
(31, 'Our Services', 'index.php?page=21', -1, 4),
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `template`
--

INSERT INTO `template` (`id`, `name`, `content`, `gdefault`) VALUES
(4, 'main', '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">\n<html xmlns="http://www.w3.org/1999/xhtml">\n	<head>\n		<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />\n		<title>Change Site Title!!</title>\n		<link href="/css/global.css" media="screen" rel="stylesheet" type="text/css" />\n		<link href="/css/print.css" media="print" rel="stylesheet" type="text/css" />\n		<script type="text/javascript" src="/js/jquery-1.3.2.min.js"></script><!--[if lte IE 6]><script src="/js/png.js" type="text/javascript" language="javascript"></script><![endif]--><script type="text/javascript" src="/js/jquery.selectbox.js"></script><script type="text/javascript" src="/p7pm/p7popmenu.js"></script><script type="text/javascript">\n\njQuery(function() {\n    jQuery(".category").selCust();\n});\n</script><script type="text/javascript">\njQuery(document).ready(function(){\n\n	jQuery("#p7PMnav li").eq(0).addClass("noBG");\n\n});\n</script>\n		<style media="screen" type="text/css">\n<!--\n@import url("/p7pm/p7pmh0.css");\n-->		</style>\n	</head>\n	<body onload="P7_initPM(1,0,1,-20,10)">\n		<div id="bg">\n			&nbsp;</div>\n		<div id="wrapper">\n			<div id="header">\n				<a class="logo left" href="#"><img alt="" height="112" src="/images/logo.gif" width="398" /> </a>\n				<div class="box right">\n					<div class="fb-icon right">\n						<img alt="" height="44" src="/images/fb.gif" width="144" /></div>\n					<div class="contact-num">\n						<img alt="" height="92" src="/images/contact-num.png" width="296" /></div>\n				</div>\n				<div class="clearB">\n					&nbsp;</div>\n				<div id="menu">\n					{gecko_menu_2015}</div>\n			</div>\n			<div id="body">\n				<div class="banner">\n					<img alt="" height="235" src="/images/banner-img.jpg" width="955" /></div>\n				<div class="feature">\n					<div class="feature-box left">\n						<div class="feature-title">\n							Buying Cars</div>\n						<div class="feat-img">\n							<img alt="" height="150" src="/images/feat-img1.jpg" width="225" /></div>\n					</div>\n					<div class="feature-box left">\n						<div class="feature-title">\n							Car Finance</div>\n						<div class="feat-img">\n							<img alt="" height="150" src="/images/feat-img2.jpg" width="225" /></div>\n					</div>\n					<div class="feature-box left">\n						<div class="feature-title">\n							Car Insurance</div>\n						<div class="feat-img">\n							<img alt="" height="150" src="/images/feat-img3.jpg" width="225" /></div>\n					</div>\n					<div class="feature-box left">\n						<div class="feature-title">\n							Contact Us</div>\n						<div class="feat-img">\n							<img alt="" height="150" src="/images/feat-img4.jpg" width="225" /></div>\n					</div>\n					<div class="clearB">\n						&nbsp;</div>\n				</div>\n				<div class="content">\n					<div class="cont-leftpannel">\n						{gecko_content}</div>\n					<div class="cont-rightpannel">\n						<div class="boxA">\n							<div class="boxA-head">\n								Request a Call Back</div>\n							<div class="boxA-body">\n								<p>\n									Please fill out the form below to<br />\n									request a call back from one of our<br />\n									friendly customer service assistants</p>\n								<table cellpadding="0" cellspacing="0">\n									<tbody>\n										<tr>\n											<td>\n												<div class="txtinput">\n													<input type="text" value="Name" /></div>\n											</td>\n										</tr>\n										<tr>\n											<td>\n												<div class="txtinput">\n													<input type="text" value="Phone" /></div>\n											</td>\n										</tr>\n										<tr>\n											<td>\n												<div class="txtinput">\n													<input type="text" value="Preferred Day" /></div>\n											</td>\n										</tr>\n										<tr>\n											<td>\n												<div class="txtinput">\n													<input type="text" value="Preferred Time" /></div>\n											</td>\n										</tr>\n										<tr>\n											<td>\n												<div class="left">\n													<select class="category" name="category"><option value="cat1">State</option><option value="cat2">Category2</option><option value="cat3">1</option><option value="cat4">Category4</option><option value="cat5">Category5</option><option value="cat6">Category6</option><option value="cat7">Category7</option><option value="cat5">Category5</option><option value="cat6">Category6</option><option value="cat7">Category7</option></select></div>\n												<div class="btnsubmit right">\n													<input src="/images/btnsubmit.gif" type="image" /></div>\n											</td>\n										</tr>\n									</tbody>\n								</table>\n								<div class="clearB">\n									&nbsp;</div>\n							</div>\n						</div>\n						<div class="boxA">\n							<div class="boxA-head">\n								Testimonials</div>\n							<div class="boxA-body textimonials">\n								<div class="testimonial-box">\n									<p>\n										Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>\n									<span class="right">- Joe Smith</span>\n									<div class="clearB">\n										&nbsp;</div>\n								</div>\n								<div class="testimonial-box">\n									<p>\n										ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit.</p>\n									<span class="right">- Ron Jones</span></div>\n								<div class="clearB">\n									&nbsp;</div>\n							</div>\n							<br />\n							<br />\n							&nbsp;</div>\n					</div>\n					<div class="clearB">\n						&nbsp;</div>\n				</div>\n			</div>\n			<div class="clearB">\n				&nbsp;</div>\n		</div>\n		<div id="wrap-footer">\n			<div id="footer">\n				<div class="foot-boxA left">\n					<img alt="" height="77" src="/images/icon1.jpg" width="125" /></div>\n				<div class="foot-boxB left">\n					<h1>\n						Contac Us</h1>\n					<p>\n						Telephone: 1300 880 686<br />\n						Email: info@findmycar.com.au</p>\n				</div>\n				<div class="foot-boxC left">\n					<h1 class="xB">\n						Links</h1>\n					<ul class="left">\n						<li>\n							<a href="#">Home</a></li>\n						<li>\n							<a href="#">Why Use Us</a></li>\n						<li>\n							<a href="#">How It Works</a></li>\n						<li>\n							<a href="#">Our Services</a></li>\n						<li>\n							<a href="#">FAQ&#39;s</a></li>\n						<li>\n							<a href="#">Sell / Trade</a></li>\n						<li>\n							<a href="#">Vehicle Accessories</a></li>\n					</ul>\n					<ul class="left">\n						<li>\n							<a href="#">Buying New / Used Cars</a></li>\n						<li>\n							<a href="#">Car Finance</a></li>\n						<li>\n							<a href="#">Car Insurance</a></li>\n						<li>\n							<a href="#">Customer Service</a></li>\n						<li>\n							<a href="#">Our Community</a></li>\n						<li>\n							<a href="#">News / Media</a></li>\n						<li>\n							<a href="#">Contact Us</a></li>\n					</ul>\n				</div>\n				<div class="clearB">\n					&nbsp;</div>\n				<div class="copyright">\n					All Rights Reserved ? 2011 | <a href="#"> Privacy Policy and Disclaimer</a></div>\n			</div>\n		</div>\n		<script type="text/javascript" src="/js/cufon-yui.js"></script><script type="text/javascript" src="/js/Verdana_italic_700.font.js"></script><script type="text/javascript" src="/js/customscript.js"></script></body>\n</html>\n', 0),
(8, 'test default template', '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">\n<html xmlns="http://www.w3.org/1999/xhtml">\n	<head>\n		<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />\n		<title>Change Site Title!!</title>\n		<link href="/css/global.css" media="screen" rel="stylesheet" type="text/css" />\n		<link href="/css/print.css" media="print" rel="stylesheet" type="text/css" />\n		<script type="text/javascript" src="/js/jquery-1.3.2.min.js"></script><!--[if lte IE 6]><script src="/js/png.js" type="text/javascript" language="javascript"></script><![endif]--><script type="text/javascript" src="/js/jquery.selectbox.js"></script><script type="text/javascript" src="/p7pm/p7popmenu.js"></script><script type="text/javascript">\n\njQuery(function() {\n    jQuery(".category").selCust();\n});\n</script><script type="text/javascript">\njQuery(document).ready(function(){\n\n	jQuery("#p7PMnav li").eq(0).addClass("noBG");\n\n});\n</script>\n		<style media="screen" type="text/css">\n<!--\n@import url("/p7pm/p7pmh0.css");\n-->		</style>\n	</head>\n	<body onload="P7_initPM(1,0,1,-20,10)">\n		<div id="bg">\n			&nbsp;</div>\n		<div id="wrapper">\n			<div id="header">\n				<a class="logo left" href="#"><img alt="" height="112" src="/images/logo.gif" width="398" /> </a>\n				<div class="box right">\n					<div class="fb-icon right">\n						<img alt="" height="44" src="/images/fb.gif" width="144" /></div>\n					<div class="contact-num">\n						<img alt="" height="92" src="/images/contact-num.png" width="296" /></div>\n				</div>\n				<div class="clearB">\n					&nbsp;</div>\n				<div id="menu">\n					{gecko_menu_2015}</div>\n			</div>\n			<div id="body">\n				<div class="banner">\n					<img alt="" height="235" src="/images/banner-img.jpg" width="955" /></div>\n				<div class="feature">\n					<div class="feature-box left">\n						<div class="feature-title">\n							Buying Cars</div>\n						<div class="feat-img">\n							<img alt="" height="150" src="/images/feat-img1.jpg" width="225" /></div>\n					</div>\n					<div class="feature-box left">\n						<div class="feature-title">\n							Car Finance</div>\n						<div class="feat-img">\n							<img alt="" height="150" src="/images/feat-img2.jpg" width="225" /></div>\n					</div>\n					<div class="feature-box left">\n						<div class="feature-title">\n							Car Insurance</div>\n						<div class="feat-img">\n							<img alt="" height="150" src="/images/feat-img3.jpg" width="225" /></div>\n					</div>\n					<div class="feature-box left">\n						<div class="feature-title">\n							Contact Us</div>\n						<div class="feat-img">\n							<img alt="" height="150" src="/images/feat-img4.jpg" width="225" /></div>\n					</div>\n					<div class="clearB">\n						&nbsp;</div>\n				</div>\n				<div class="content">\n					<div class="cont-leftpannel">\n						{gecko_content}</div>\n					<div class="clearB">\n						&nbsp;</div>\n				</div>\n			</div>\n			<div class="clearB">\n				&nbsp;</div>\n		</div>\n		<div id="wrap-footer">\n			<div id="footer">\n				<div class="foot-boxA left">\n					<img alt="" height="77" src="/images/icon1.jpg" width="125" /></div>\n				<div class="foot-boxB left">\n					<h1>\n						Contac Us</h1>\n					<p>\n						Telephone: 1300 880 686<br />\n						Email: info@findmycar.com.au</p>\n				</div>\n				<div class="foot-boxC left">\n					<h1 class="xB">\n						Links</h1>\n					<ul class="left">\n						<li>\n							<a href="#">Home</a></li>\n						<li>\n							<a href="#">Why Use Us</a></li>\n						<li>\n							<a href="#">How It Works</a></li>\n						<li>\n							<a href="#">Our Services</a></li>\n						<li>\n							<a href="#">FAQ&#39;s</a></li>\n						<li>\n							<a href="#">Sell / Trade</a></li>\n						<li>\n							<a href="#">Vehicle Accessories</a></li>\n					</ul>\n					<ul class="left">\n						<li>\n							<a href="#">Buying New / Used Cars</a></li>\n						<li>\n							<a href="#">Car Finance</a></li>\n						<li>\n							<a href="#">Car Insurance</a></li>\n						<li>\n							<a href="#">Customer Service</a></li>\n						<li>\n							<a href="#">Our Community</a></li>\n						<li>\n							<a href="#">News / Media</a></li>\n						<li>\n							<a href="#">Contact Us</a></li>\n					</ul>\n				</div>\n				<div class="clearB">\n					&nbsp;</div>\n				<div class="copyright">\n					All Rights Reserved ? 2011 | <a href="#"> Privacy Policy and Disclaimer</a></div>\n			</div>\n		</div>\n		<script type="text/javascript" src="/js/cufon-yui.js"></script><script type="text/javascript" src="/js/Verdana_italic_700.font.js"></script><script type="text/javascript" src="/js/customscript.js"></script></body>\n</html>\n', 1);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `webpage`
--

INSERT INTO `webpage` (`id`, `name`, `content`, `temp_id`, `homepage`) VALUES
(16, 'Home', '<h1><span>Car Location Perth</span><br />\r\n				Helping You to Find Your Next Car</h1>\r\n                <div class="xIMG right">\r\n                	<img src="/images/image1.jpg" alt="" width="341" height="180" />\r\n                </div>\r\n                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>\r\n<p>quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident. </p>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip </p>\r\n<p>ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>\r\n				<h1>Services</h1>\r\n                	<ul class="cont-ul">\r\n					<li>Exercitation ullamco</li> \r\n                    <li>Roluptate velit esse</li> \r\n                    <li>Eaboris nisi ut aliquip</li> \r\n                    <li>Cillum dolore eu </li>\r\n                    <li>Ex ea commodo consequat.</li> \r\n                    <li>Fugiat nulla pariatur</li>\r\n                    <li>Duis aute irure dolor </li>\r\n                    <li>Excepteur sint occaecat </li>\r\n                    <li>Reprehenderit in</li> \r\n					<li>Cupidatat non proident</li>\r\n					</ul>\r\n            \r\n               <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip </p>\r\n\r\n<p>ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>\r\n			<p>» <a href="#" class="clickA">Click here to contact us today to help you find your next car</a>  </p>', 4, 1),
(19, 'no template', '<p>\n	no template</p>\n', 0, 0),
(20, 'with template ', '<p>\n	with template but not default</p>\n', 4, 0),
(21, 'set as default template', '<p>\n	set as default template</p>\n', -1, 0);
