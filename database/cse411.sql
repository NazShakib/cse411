-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2018 at 06:06 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cse411`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(10) NOT NULL,
  `category_name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `pid` int(10) NOT NULL,
  `pname` varchar(255) NOT NULL,
  `price` int(10) NOT NULL,
  `quantity` int(10) NOT NULL,
  `detail` varchar(255) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `thumbnail` varchar(255) NOT NULL,
  `category` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`pid`, `pname`, `price`, `quantity`, `detail`, `description`, `thumbnail`, `category`) VALUES
(35, 'Lamp stand v1', 360, 15, 'To allow naming of a FOREIGN KEY constraint, and for defining a FOREIGN KEY constraint on multiple columns, use the following SQL syntax:', '<p>lumn in the &quot;<strong>Persons</strong>&quot; table is the <strong>PRIMARY KEY </strong>in the &quot;<em>Persons</em>&quot; table.</p>\r\n\r\n<p>The &quot;<em>PersonID</em>&quot; column in the &quot;Orders&quot; table is a FOREIGN KEY in the &quot;Order', 'product-1_2018-11-24_11_53_18.jpg', 'pant'),
(36, 'Wooden bed v3', 12000, 25, 'somehting', '<blockquote>something</blockquote>\r\n', 'ADJUSTABLE_BED59_2018-11-24_12_12_08.JPG', 't-shirt'),
(37, 'Wooden Table v1', 230, 5, 'something', '<p><a href=\"http://www.espncricinfo.com/bangladesh/content/player/401057.html\">Taijul Islam</a> led Bangladesh&#39;s charge with a six-wicket haul, using his arm ball with plenty of success as the hosts beat West Indies by 64 runs in the first Test in Chattogram. Taijul&#39;s performance went with <a href=\"http://www.espncricinfo.com/bangladesh/content/player/56143.html\">Shakib Al Hasan</a> taking the first two wickets - which also made him the first from his country to 200 Test wickets - and <a href=\"http://www.espncricinfo.com/bangladesh/content/player/629063.html\">Mehidy Hasan Miraz</a> also picking up two to round out a superb performance by the spinners.</p>\r\n\r\n<p>In July, the pace of the pitches in <a href=\"http://www.espncricinfo.com/series/18712/scorecard/1146717/west-indies-vs-bangladesh-1st-test-bangaldesh-in-wi-and-usa-2018\" target=\"_blank\">Antigua </a>and <a href=\"http://www.espncricinfo.com/series/18712/scorecard/1146718/west-indies-vs-bangladesh-2nd-test-bangaldesh-in-wi-', 'Amelia_BunkBed__45609.1529075931.600.759_2018-11-24_03_26_04.jpg', 'Table'),
(38, 'Wooden chair v3', 120, 20, 'ok then', '<ol>\r\n	<li>the hosts beat West Indies by 64 runs in the first Test in Chattogram. Taijul&#39;s performance went with <a href=\"http://www.espncricinfo.com/bangladesh/content/player/56143.html\">Shakib Al Hasan</a> taking the first two wickets - which also made him the first from his country to 200 Test wickets - and <a href=\"http://www.espncricinfo.com/bangladesh/content/player/629063.html\">Mehidy Hasan Miraz</a> also picking up two to round out a superb performance by the spinners.</li>\r\n</ol>\r\n\r\n<p>In July, the pace of the pitches in <a href=\"http://www.espncricinfo.com/series/18712/scorecard/1146717/west-indies-vs-bangladesh-1st-test-bangaldesh-in-wi-and-usa-2018\" target=\"_blank\">Antigua </a>and <a href=\"http://www.espncricinfo.com/series/18712/scorecard/1146718/west-indies-vs-bangladesh-2nd-test-bangaldesh-in-wi-and-usa-2018\" target=\"_blank\">Jamaica </a>had spooked Bangladesh&#39;s batsmen. On Saturday, Bangladesh&#39;s spinners returned the favour to West Indies.</p>\r\n', '1325_Andretti__87186.1422473618.600.759_2018-11-24_03_27_21.jpg', 'Chair'),
(39, 'Black chair v2', 120, 11, 'ok again', '<blockquote>\r\n<p><a href=\"http://www.espncricinfo.com/bangladesh/content/player/401057.html\">&nbsp;</a> also picking up two to round out a superb performance by the spinners.</p>\r\n</blockquote>\r\n\r\n<ol>\r\n	<li>In July, the pace of the pitches in <a href=\"http://www.espncricinfo.com/series/18712/scorecard/1146717/west-indies-vs-bangladesh-1st-test-bangaldesh-in-wi-and-usa-2018\" target=\"_blank\">Antigua </a>and <a href=\"http://www.espncricinfo.com/series/18712/scorecard/1146718/west-indies-vs-bangladesh-2nd-test-bangaldesh-in-wi-and-usa-2018\" target=\"_blank\">Jamaica </a>had spooked Bangladesh&#39;s batsmen. On Saturday, Bangladesh&#39;s spinners returned the favour to West Indies.</li>\r\n</ol>\r\n', 'ANGELICA__94925.1439369015.600.759_2018-11-24_03_29_23.jpg', 'Chair'),
(40, 'Black chair v5', 120, 11, 'ok again', '<blockquote>\r\n<p><a href=\"http://www.espncricinfo.com/bangladesh/content/player/401057.html\">&nbsp;</a> also picking up two to round out a superb performance by the spinners.</p>\r\n</blockquote>\r\n\r\n<ol>\r\n	<li>In July, the pace of the pitches in <a href=\"http://www.espncricinfo.com/series/18712/scorecard/1146717/west-indies-vs-bangladesh-1st-test-bangaldesh-in-wi-and-usa-2018\" target=\"_blank\">Antigua </a>and <a href=\"http://www.espncricinfo.com/series/18712/scorecard/1146718/west-indies-vs-bangladesh-2nd-test-bangaldesh-in-wi-and-usa-2018\" target=\"_blank\">Jamaica </a>had spooked Bangladesh&#39;s batsmen. On Saturday, Bangladesh&#39;s spinners returned the favour to West Indies.</li>\r\n</ol>\r\n', 'adriana_new_hi_res_picture__53048.1472069291.600.759_2018-11-24_03_30_23.jpg', 'Chair');

-- --------------------------------------------------------

--
-- Table structure for table `product_gallery`
--

CREATE TABLE `product_gallery` (
  `pid` int(11) DEFAULT NULL,
  `img` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_information`
--

CREATE TABLE `user_information` (
  `userid` int(20) NOT NULL,
  `username` varchar(255) NOT NULL,
  `useremail` varchar(255) NOT NULL,
  `userpassword` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_information`
--

INSERT INTO `user_information` (`userid`, `username`, `useremail`, `userpassword`) VALUES
(1, 'sakib', 'sakib@gmail.com', '123'),
(2, 'sakib', 'shakib@gmail.com', '123'),
(5, 'sakib', 'sakib1@gmail.com', '123'),
(6, 's', 's@s.com', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `product_gallery`
--
ALTER TABLE `product_gallery`
  ADD KEY `pid` (`pid`);

--
-- Indexes for table `user_information`
--
ALTER TABLE `user_information`
  ADD PRIMARY KEY (`userid`),
  ADD UNIQUE KEY `useremail` (`useremail`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `pid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `user_information`
--
ALTER TABLE `user_information`
  MODIFY `userid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `product_gallery`
--
ALTER TABLE `product_gallery`
  ADD CONSTRAINT `product_gallery_ibfk_1` FOREIGN KEY (`pid`) REFERENCES `products` (`pid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
