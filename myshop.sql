-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2016 at 10:10 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `myshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
  `p_id` int(10) NOT NULL,
  `ip_add` varchar(255) NOT NULL,
  `qty` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
`cat_id` int(10) NOT NULL,
  `cat_title` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(1, 'Anarkali'),
(2, 'Kurti'),
(3, 'Lehenga'),
(4, 'Suits'),
(5, 'Sarees');

-- --------------------------------------------------------

--
-- Table structure for table `price`
--

CREATE TABLE IF NOT EXISTS `price` (
`price_id` int(10) NOT NULL,
  `price_title` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `price`
--

INSERT INTO `price` (`price_id`, `price_title`) VALUES
(1, 'Below 500'),
(2, '500-1000'),
(3, '1000-1500'),
(4, '1500-2000'),
(5, 'above 2000');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
`product_id` int(10) NOT NULL,
  `cat_id` int(10) NOT NULL,
  `price_id` int(10) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `product_title` text NOT NULL,
  `product_img1` text NOT NULL,
  `product_img2` text NOT NULL,
  `product_cost` int(10) NOT NULL,
  `product_desc` text NOT NULL,
  `product_keywords` text NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=40 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `cat_id`, `price_id`, `date`, `product_title`, `product_img1`, `product_img2`, `product_cost`, `product_desc`, `product_keywords`, `status`) VALUES
(1, 2, 1, '2016-04-20 06:15:23', 'Solid Black Kurti', 'PicsArt_04-18-08.24.36.jpg', 'PicsArt_04-18-08.25.04.jpg', 299, 'A pretty long kurti with pink border on sleaves and in front with a kurta neck.', 'kurti, black, long', 'on'),
(2, 2, 1, '2016-04-20 06:15:42', 'Yellow Kurti', 'PicsArt_04-18-08.27.58.jpg', 'PicsArt_04-18-08.28.18.jpg', 399, 'A long yellow kurti with criss cross design in front with a plain black back with short sleaves.', 'kurti, long, yellow', 'on'),
(3, 2, 1, '2016-04-20 06:15:56', 'Pink Jaipuri Kurti', 'PicsArt_04-18-08.27.08.jpg', 'PicsArt_04-18-08.27.31.jpg', 499, 'A pink jaipuri kurti with jaipuri embroidery in the upper front, sleaves and on the border.', 'jaipuri, kurti, pink', 'on'),
(4, 2, 2, '2016-04-24 05:40:00', 'Printed kurti', 'PicsArt_04-18-08.28.52.jpg', 'PicsArt_04-18-08.28.37.jpg', 699, 'A V-neck kurti with printed pattern having 3/4 sleeve.', 'kurti, printed', 'on'),
(5, 2, 2, '2016-04-24 05:40:14', 'Boat Neck Kurti', 'PicsArt_04-18-08.26.14.jpg', 'PicsArt_04-18-08.26.48.jpg', 699, 'A long Blue Boat Neck kurti with plain blue back with a printed front with short sleeves.', 'kurti, boat neck', 'on'),
(6, 2, 2, '2016-04-20 06:16:39', 'Gorgette Kurti', 'PicsArt_04-18-08.25.56.jpg', 'PicsArt_04-18-08.25.37.jpg', 599, 'A long gorgette black kurti with llong sleeves and having a green gorgette border on sleeves and on the border and on the sides as well.', 'kurti, georgette', 'on'),
(7, 3, 1, '2016-04-23 10:57:58', 'Velvet Ghagra Choli', 'PicsArt_04-19-12.09.27.jpg', 'PicsArt_04-19-12.09.27.jpg', 499, 'A party wear velvet embroidered lehenga CHOLI.', 'ghagra, choli, lehenga, velvet', 'on'),
(8, 3, 1, '2016-04-23 10:58:11', 'Lehenga Choli', 'PicsArt_04-19-12.12.13.jpg', 'PicsArt_04-19-12.12.13.jpg', 499, 'A cotton lehenga, choli and dupatta set with embroidered choli.', 'lehenga, choli, ghagra', 'on'),
(9, 3, 1, '2016-04-20 06:17:30', 'Long Ghagra Choli', 'PicsArt_04-19-12.09.44.jpg', 'PicsArt_04-19-12.10.14.jpg', 499, 'A long net ghagra choli and dupatta set with embridered choli.', 'ghagra, choli, long', 'on'),
(10, 3, 1, '2016-04-23 10:58:20', 'Net Lehenga Set', 'PicsArt_04-19-12.11.14.jpg', 'PicsArt_04-19-12.11.14.jpg', 499, 'A party wear net ghagra and dupatta and an embridered choli.', 'lehenga, choli, net', 'on'),
(11, 3, 1, '2016-04-23 10:58:30', 'Full sleeve Ghagra Choli', 'PicsArt_04-19-12.11.38.jpg', 'PicsArt_04-19-12.11.38.jpg', 499, 'A party wear full sleeve embroidered choli with georgette lehenga.', 'ghagra, choli, sleeve', 'on'),
(12, 3, 1, '2016-04-20 06:18:12', 'Ghagra Choli', 'PicsArt_04-19-12.10.43.jpg', 'PicsArt_04-19-12.10.29.jpg', 499, 'A party wear georgette lehenga choli with embroidery.', 'ghagra, choli, lehenga', 'on'),
(13, 2, 3, '2016-04-24 05:50:10', 'Georgette Kurti', 'PicsArt_04-20-02.41.07.jpg', 'PicsArt_04-20-02.41.29.jpg', 1299, 'A pure georgette blue kurti with one side open and closed neck with a chain in front side.', 'kurti, long, blue, georgette', 'on'),
(14, 2, 3, '2016-04-24 05:50:21', 'Net Kurti', 'PicsArt_04-20-02.39.39.jpg', 'PicsArt_04-20-02.39.53.jpg', 1199, 'A short black net kurti with maroon inner with full sleeves.', 'kurti, net, black, maroon', 'on'),
(15, 2, 3, '2016-04-24 05:50:53', 'Choli Kurti', 'PicsArt_04-20-02.40.41.jpg', 'PicsArt_04-20-02.40.17.jpg', 1099, 'A kurti with short choli attached with multicoloured bottom.', 'kurti, choli, multicoloured', 'on'),
(16, 4, 2, '2016-04-24 05:54:50', 'Pajami Suit', 'PicsArt_04-23-08.49.22.jpg', 'PicsArt_04-23-08.49.50.jpg', 799, 'A designer suit with printed pattern on kameez border with a straight white pajami.', 'suit, kameez, pajami, pajama, yellow, blue, white', 'on'),
(17, 4, 2, '2016-04-24 05:56:55', 'Cotton Suit', 'PicsArt_04-23-08.50.20.jpg', 'PicsArt_04-23-08.50.06.jpg', 899, 'A designer suit with grey cut sleeves kameez and a pink pajami.', 'suit, kameez, pajami, pajama, cotton, grey, pink', 'on'),
(18, 4, 3, '2016-04-24 06:03:24', 'Embroided Suit', 'PicsArt_04-23-08.49.09.jpg', 'PicsArt_04-23-08.48.57.jpg', 1199, 'A party wear designer embroided suit with embroidery on front as well as back.', 'suit, kameez, pajami, pajama, yellow, blue, white, embroided', 'on'),
(19, 4, 1, '2016-04-24 06:05:27', 'BLACK & WHITE SUIT', 'PicsArt_04-23-08.48.42.jpg', 'PicsArt_04-23-08.48.42.jpg', 399, 'A black and white cotton suit with printed pattern on front of kameez and a printed dupatta.', 'suit, kameez, pajami, pajama, black, green, white', 'on'),
(20, 4, 2, '2016-04-24 06:07:42', 'Patiala Suit', 'PicsArt_04-23-08.33.12.jpg', 'PicsArt_04-23-08.32.48.jpg', 999, 'A patiala suit with short printed kameez and a patiala salwar.', 'suit, kameez, salwar, patiala, red, cream, printed', 'on'),
(21, 4, 1, '2016-04-24 06:10:15', 'Black Suit', 'PicsArt_04-23-08.48.19.jpg', 'PicsArt_04-23-08.48.19.jpg', 499, 'A party wear full length georgette kameez with embroidery and a black pajami.', 'suit, kameez, pajami, pajama, black, white, embroided', 'on'),
(22, 4, 3, '2016-04-24 06:13:11', 'Cotton Embroided Suit', 'PicsArt_04-23-08.36.01.jpg', 'PicsArt_04-23-08.36.01.jpg', 1399, 'A party wear cotton embroided suit with white embroided kameez and a printed blue pajama and dupatta.', 'suit, kameez, pajami, pajama, green, blue, white, embroided', 'on'),
(23, 4, 5, '2016-04-24 06:16:11', 'Designer Suit', 'PicsArt_04-23-08.33.55.jpg', 'PicsArt_04-23-08.33.34.jpg', 2599, 'A full designer suit wit a long blue cut sleeve open kameez with embroidery on the kameez as well as on pajami.', 'suit, kameez, pajami, pajama, blue, white, embroided', 'on'),
(24, 4, 4, '2016-04-24 06:18:28', 'Kurta Suit', 'PicsArt_04-23-08.34.39.jpg', 'PicsArt_04-23-08.34.39.jpg', 1699, 'A kurta neck textured cream kameez suit with a green pajami and a bordered dupatta', 'suit, kameez, pajami, pajama, green', 'on'),
(25, 4, 4, '2016-04-24 06:23:34', 'Dupatta Suit', 'PicsArt_04-23-08.35.18.jpg', 'PicsArt_04-23-08.35.18.jpg', 1599, 'A designer suit with a heavy dupatta and a printed kameez and pajami ', 'suit, kameez, pajami, pajama, brown, cream', 'on'),
(26, 4, 4, '2016-04-24 06:26:11', 'Orange Suit', 'PicsArt_04-23-08.35.34.jpg', 'PicsArt_04-23-08.35.34.jpg', 1899, 'An orange designer suit with with heavy border on the kameez neck ans well as in the bottom.', 'suit, kameez, pajami, pajama, black, orange', 'on'),
(27, 4, 5, '2016-04-24 06:29:16', 'Banarsi Suit', 'PicsArt_04-23-08.35.00.jpg', 'PicsArt_04-23-08.35.00.jpg', 2999, 'A designer party wear banarsi suit with an open kameez with net sleeves.', 'suit, kameez, pajami, pajama, banarsi, maroon', 'on'),
(28, 4, 5, '2016-04-24 06:29:51', 'Banarsi Suit', 'PicsArt_04-23-08.35.46.jpg', 'PicsArt_04-23-08.35.46.jpg', 2999, 'A designer party wear banarsi suit with an open kameez with net sleeves.', 'suit, kameez, pajami, pajama, banarsi, black, golden', 'on'),
(29, 2, 4, '2016-04-25 06:44:04', 'Black Long Kurti', 'PicsArt_04-24-02.54.40.jpg', 'PicsArt_04-24-02.54.21.jpg', 1599, '<p>A designer black long kurti with textured print and a broad border on the anarkali frill and on the sleeves with a white pajami.</p>', 'kurti, black, long, texture, pajami', 'on'),
(30, 2, 5, '2016-04-25 06:45:41', 'Set Of 5 kurtis', 'PicsArt_04-24-02.55.13.jpg', 'PicsArt_04-24-02.55.01.jpg', 2499, '<p>Set of 5 cotton kurtis with different printed pattern on all 5 of them.</p>', 'kurti, set, printed', 'on'),
(31, 2, 5, '2016-04-25 06:46:51', 'Set of 5 kurtis', 'PicsArt_04-24-02.55.58.jpg', 'PicsArt_04-24-02.55.31.jpg', 2499, '<p>A set of 5 cotton short kurtis with multicoloured pattern.</p>', 'kurti, multicoloured, pattern, short', 'on'),
(32, 2, 4, '2016-04-25 06:48:08', 'Set of 3 kurtis', 'PicsArt_04-24-02.56.32.jpg', 'PicsArt_04-24-02.56.17.jpg', 1799, '<p>A set of 3 designer kurti with multicolour printed pattern.</p>', 'kurti, printed, multicolour, pattern, set', 'on'),
(33, 2, 4, '2016-04-25 06:50:16', 'Black Designer Kurti', 'PicsArt_04-24-02.57.07.jpg', 'PicsArt_04-24-02.56.50.jpg', 1599, '<p>A designer black kurti with net choli with open front kurti attached with pink pajami.</p>', 'kurti, black, net, pink, pajami', 'on'),
(34, 5, 5, '2016-04-28 18:59:57', 'Golden Saree', 'PicsArt_04-25-12.05.05.jpg', 'PicsArt_04-25-12.09.30.jpg', 4999, 'A designer wear golden chiffon saree and blue embroided blouse.', 'saree, sari, chiffon, embroidery, golden, blue, yellow', 'on'),
(35, 5, 3, '2016-04-28 19:02:18', 'Net Saree', 'PicsArt_04-25-12.07.26.jpg', 'PicsArt_04-25-12.07.26.jpg', 1499, 'A designer wear golden and maroon net saree. ', 'saree, sari, chiffon, embroidery, net, golden, maroon, yellow', 'on'),
(36, 5, 5, '2016-04-28 19:11:58', 'Banarsi Saree', 'PicsArt_04-25-12.08.44.jpg', 'PicsArt_04-25-12.08.12.jpg', 4999, 'A pink original kanchiwaram saree.', 'saree, sari, kanchiwaram, banarsi, embroidery, golden,', 'on'),
(37, 5, 5, '2016-04-28 19:06:16', 'Eligent Saree', 'PicsArt_04-25-12.09.16.jpg', 'PicsArt_04-25-12.08.58.jpg', 4599, 'A designer wear saree with close neck embroided blouse.', 'saree, sari, chiffon, embroidery, golden, blue,', 'on'),
(38, 5, 5, '2016-04-28 19:07:51', 'Net Saree', 'PicsArt_04-25-12.10.10.jpg', 'PicsArt_04-25-12.09.58.jpg', 5999, 'A heavy bridal embroided net saree with golden saree and sky blue embroided blouse', 'saree, sari, chiffon, embroidery, golden, blue, net', 'on'),
(39, 5, 4, '2016-04-28 19:09:54', 'Georgette Saree', 'PicsArt_04-25-12.12.15.jpg', 'PicsArt_04-25-12.12.28.jpg', 1999, 'A blue georgette saree with white net blouse.', 'saree, sari, chiffon, embroidery, white, blue, net', 'on');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`user_id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` int(13) NOT NULL,
  `address` longtext NOT NULL,
  `ip_add` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
 ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
 ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `price`
--
ALTER TABLE `price`
 ADD PRIMARY KEY (`price_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
 ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
MODIFY `cat_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `price`
--
ALTER TABLE `price`
MODIFY `price_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
MODIFY `product_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
