-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 21, 2021 at 08:08 AM
-- Server version: 5.7.17-log
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `weddingplanner`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`email`, `password`, `name`) VALUES
('randomar@admin.com', 'f865b53623b121fd34ee5426c792e5c33af8c227', 'Rand Omar\r\n'),
('mohammad@admin.com', 'f865b53623b121fd34ee5426c792e5c33af8c227', ' Mohammad Issam'),
('dana@admin.com', 'f865b53623b121fd34ee5426c792e5c33af8c227', 'Dana Laith');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `productID` int(11) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `productID`, `email`) VALUES
(11, 79, 'eliequpti5@gmail.com'),
(15, 79, 'fadiq123@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `address` varchar(100) NOT NULL,
  `workField` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `confirmpassword` varchar(50) NOT NULL,
  `fax` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `name`, `phone`, `address`, `workField`, `email`, `password`, `status`, `confirmpassword`, `fax`) VALUES
(1, 'Rawan Cake', '0786662244', 'Amman - Abdali', 'Cake', 'info@rawancake.com', '7fe82d2b29abc75c3e7a5f58ed2f3f64347ba9d8', 1, '', 0),
(2, 'Zara', '0799112020', 'Jordan-Zarqa', 'Costumes', 'info@zara.com', '7fe82d2b29abc75c3e7a5f58ed2f3f64347ba9d8', 1, '', 0),
(3, 'Royal Hotel', '0790000000', 'Amman - second circle', 'Hotels or Wedding Halls', 'info@royal-hotel.jo', '7fe82d2b29abc75c3e7a5f58ed2f3f64347ba9d8', 1, '', 0),
(4, 'Halwanji sweets', '064888660', 'Jordan - Marka', 'Cake', 'info@halwanji.jo', '7fe82d2b29abc75c3e7a5f58ed2f3f64347ba9d8', 1, '', 0),
(6, 'The Cakery', '0777161717', 'Complex No 36, Hasan Al-Barqawi St. 36, Amman', 'Cake', 'info@thecakery.jo', '7fe82d2b29abc75c3e7a5f58ed2f3f64347ba9d8', 1, '', 0),
(7, 'Friends Cake', '065865457', 'C199, Complex No C199 Mecca Al Mukarramah St، Amman', 'Cake', 'info@friendscake.jo', '7fe82d2b29abc75c3e7a5f58ed2f3f64347ba9d8', 1, '', 0),
(8, 'Rotana Hotel', '065208888', 'Al Sawosana Al Sawoda Street - Abdali, P.O. Box 926111, Amman 11190, Amman Jordan', 'Hotels or Wedding Halls', 'info@rotanahotel.jo', '7fe82d2b29abc75c3e7a5f58ed2f3f64347ba9d8', 1, '', 0),
(9, 'Mayar Flowers', '065352847', ' al swaifyah , ali nasouh altaher streetو cross with alwekalat street Amman, Jordan 11925', 'Flower Decorations', 'info@mayarflower.com', 'cda0b2bcb80c020a01f9464a01e45b9083df53bc', 1, '', 0),
(14, 'White Angle', '0779594665', 'Amman, Jordan', 'Costumes', 'info@whiteangle.com', '7fe82d2b29abc75c3e7a5f58ed2f3f64347ba9d8', 1, '', 0),
(15, 'Mia Lora Bridal Shop', ' 079655109', 'Swaifeyeh Hamra Street Amman, Jordan 11821', 'Costumes', 'noor.mohtaseb@live.com', '7fe82d2b29abc75c3e7a5f58ed2f3f64347ba9d8', 1, '', 0),
(16, 'Al kharouf', '065681683', 'Gardinz Street Amman, Jordan 11953', 'Costumes', 'info@alkharouf.com', '7fe82d2b29abc75c3e7a5f58ed2f3f64347ba9d8', 1, '', 0),
(17, 'The Floral Studio Jo', '0777796709', 'Amman, Jordan', 'Flower Decorations', 'thefloralstudiojo@gmail.com', '7fe82d2b29abc75c3e7a5f58ed2f3f64347ba9d8', 1, '', 0),
(18, 'RoseLine Flowers', ' 079523502', 'Amman, Jordan, Gardens street', 'Flower Decorations', 'roselineflowersgifts@hotmail.com', '7fe82d2b29abc75c3e7a5f58ed2f3f64347ba9d8', 1, '', 0),
(19, 'Ward Express', '0795990064', 'Al Rabieh AlSalam st Amman, Jordan', 'Flower Decorations', 'contact@wardexpress.com', '7fe82d2b29abc75c3e7a5f58ed2f3f64347ba9d8', 1, '', 0),
(20, 'Paradise Halls', '0795049546', 'Al Rabia - Behind Arab Bank', 'Hotels or Wedding Halls', 'info@paradisehall.com', '7fe82d2b29abc75c3e7a5f58ed2f3f64347ba9d8', 1, '', 0),
(21, 'Jabry Halls', '065681700', 'Amman, Jordan, Gardens street', 'Hotels or Wedding Halls', 'info@jabryhalls.com', '7fe82d2b29abc75c3e7a5f58ed2f3f64347ba9d8', 1, '', 0),
(22, 'Beirut Catering Services', '0797133360', 'Amman , Jordan , Bayader Wadi Seer', 'Restaurants', 'info@beirutcatering.com', '7fe82d2b29abc75c3e7a5f58ed2f3f64347ba9d8', 1, '', 0),
(23, 'VenYou Hospitality ', '0795717101', 'Amman, Jordan,', 'Restaurants', 'info@venyou.com', '7fe82d2b29abc75c3e7a5f58ed2f3f64347ba9d8', 1, '', 0),
(24, 'Al Quds Restaurant', '064630168', 'Downtown - Amman', 'Restaurants', 'info@alquds.com', '7fe82d2b29abc75c3e7a5f58ed2f3f64347ba9d8', 1, '', 0),
(25, 'Tannoureen Restaurant', '065515987', 'Um Uthaynah , Amman , Jordan', 'Restaurants', 'info@tannoureen.com', '7fe82d2b29abc75c3e7a5f58ed2f3f64347ba9d8', 1, '', 0),
(26, 'Amman Center', '065524762', 'Amman, Jordan', 'Photoshoot', 'info@ammancenter.com', '7fe82d2b29abc75c3e7a5f58ed2f3f64347ba9d8', 1, '', 0),
(27, 'Robina Studio', '065853304', '7th Circle - Amman', 'Photoshoot', 'info@robinastudio.com', '7fe82d2b29abc75c3e7a5f58ed2f3f64347ba9d8', 1, '', 0),
(28, 'Babel Studio', '065523606', '6th Circle, Amman , Jordan', 'Photoshoot', 'info@babelstudio.com', '7fe82d2b29abc75c3e7a5f58ed2f3f64347ba9d8', 1, '', 0),
(29, 'Laval Studio & Labs', '065822000', '7th Circle - Amman', 'Photoshoot', 'info@lavalstudio.com', '7fe82d2b29abc75c3e7a5f58ed2f3f64347ba9d8', 1, '', 0),
(30, 'Avis Rent a Car', '065699420', 'Amman, Jordan', 'Wedding Cars', 'info@avis.jo', '7fe82d2b29abc75c3e7a5f58ed2f3f64347ba9d8', 1, '', 0),
(31, 'Europcar ', '065504031', 'Sport City - Amman', 'Wedding Cars', 'info@europcar.jo', '7fe82d2b29abc75c3e7a5f58ed2f3f64347ba9d8', 1, '', 0),
(32, 'Baron Car Trading', '065903334', 'Abdullah Ghosheh St. - Amman', 'Wedding Cars', 'info@baroncartrading.com', '7fe82d2b29abc75c3e7a5f58ed2f3f64347ba9d8', 1, '', 0),
(33, 'Atlas Classic Limousine', '0795303665', 'Abdul Hameed Sharaf Street', 'Wedding Cars', 'info@atlasclassiclimousine', '7fe82d2b29abc75c3e7a5f58ed2f3f64347ba9d8', 1, '', 0),
(34, '0791234567', '0791234567', 'no', 'Cake', 'info@farawla.jo', 'f9b6ab577d7e6b0136fcb9ba250382f9b524b049', 1, '7fe82d2b29abc75c3e7a5f58ed2f3f64347ba9d8', 0);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `message`) VALUES
(1, 'Fadi', 'fadiqupti4@gmail.com', 'Hello');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `confirmpassword` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `phone`, `email`, `address`, `password`, `status`, `confirmpassword`) VALUES
(5, 'Carver Morten', '0798888888', 'carver@customer.com', '', '94ac0ce281af3b58160234122b68bb79a36674ee', 1, ''),
(6, 'Dismas Lee', '0796565656', 'dismas@customer.com', '', '94ac0ce281af3b58160234122b68bb79a36674ee', 1, ''),
(7, 'Antonia Daveth', '0791234567', 'antonia@customer.com', '', '94ac0ce281af3b58160234122b68bb79a36674ee', 1, ''),
(9, 'ELIE', '0879754877', 'eliequpti5@gmail.com', '', '7295896b0844cee1065fac00232eab7e5d8464d7', 1, ''),
(10, 'Dain', '0795585585', 'dani@gmail.com', '', '0d3d2621c3bfdb73b2b0b3b71886085302db1c8c', 1, ''),
(11, 'fadiq`', '1234567890', 'fadiq123@gmail.com', '', 'c8d967ab3f7c4df3fdaa38d0b7136cd7b1fc5842', 1, ''),
(12, 'Fadi Qupti', '1234567890', 'fadiqupti4@gmail.com', '', 'de90b89bf264bac2b24c458634f28dbb1d337029', 1, ''),
(13, 'FadiQupti123', '1234567890', 'fadiqupti6@gmail.com', '', 'de90b89bf264bac2b24c458634f28dbb1d337029', 1, ''),
(14, 'anas', 'no', 'anas@gmail.com', '', 'b0cdc4628dd711168418f5458423b9a5213cfa0e', 1, ''),
(15, 'fadifadi', 'no', 'fadifadi@gmail.com', '', 'de90b89bf264bac2b24c458634f28dbb1d337029', 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `workField` varchar(30) NOT NULL,
  `price` int(11) NOT NULL,
  `pricePackage` int(11) NOT NULL,
  `description` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `photo`, `workField`, `price`, `pricePackage`, `description`, `email`, `name`) VALUES
(4, 'product-image-1.jpg', 'Costumes', 250, 175, 'A royal white dress with all its accessories', 'info@zara.com', 'Zara'),
(5, 'product-image-3.jpg', 'Costumes', 120, 80, 'Royal tuxedo suit with all her accessories', 'info@zara.com', 'Zara'),
(7, 'event-image-three-370x302.jpg', 'Hotels or Wedding Halls', 3200, 2500, 'This offer includes 300 pieces of cake and kinds of natural juice, the duration of the party is two.', 'info@royal-hotel.jo', 'Royal Hotel'),
(9, 'Red Roses.jpg', 'Flower Decorations', 35, 25, 'Red Roses arranged with care and exclusive taste by our florists! Red Roses means I LOVE YOU!', 'contact@wardexpress.com', 'Ward Express'),
(10, 'rawancake.jpg', 'Cake', 120, 100, 'An anniversary cake was done for a lovely couple .\r\nA lot of effort for a lovely couple All edible', 'info@friendscake.jo', 'Friends Cake'),
(16, '6.jpg', 'Cake', 50, 46, 'Arabic sweets with nuts mix 2 kilos with 1 kilo free for 40-50 people for weddings and occasions', 'info@halwanji.jo', 'Halwanji sweets'),
(21, '11.jpg', 'Cake', 309, 300, 'Wedding Cake Purple Theme servers up to 60 people ', 'info@thecakery.jo', 'The Cakery'),
(22, 'feature3-385x268.png', 'Cake', 350, 325, 'A Lovely 3 layer wedding cake for the lovely couple servers up to 50 people.', 'info@friendscake.jo', 'Friends Cake'),
(23, '12.jpg', 'Cake', 281, 275, '3 layered White Wedding Cake serves up to 40 people.', 'info@friendscake.jo', 'Friends Cake'),
(24, '13.jpg', 'Cake', 351, 345, 'Square Wedding Pink Cake serves up to 70 people.\r\n', 'info@friendscake.jo', 'Friends Cake'),
(25, '1.jpg', 'Costumes', 180, 165, 'Beautiful White Tuxedo with all the accessories ', 'info@zara.com', 'Zara'),
(26, '2.2.jpg', 'Costumes', 300, 280, 'Couture Wedding Dresses & Luxury Apparel with all accessories ', 'info@zara.com', 'Zara'),
(27, '3.3.jpg', 'Costumes', 250, 235, 'Beautiful white wedding dress for a beautiful bride ', 'info@whiteangle.com', 'White Angle'),
(28, '4.4.jpg', 'Costumes', 350, 335, 'long sleeved white wedding dress with all the accessories ', 'info@whiteangle.com', 'White Angle'),
(29, '5.5.jpg', 'Costumes', 400, 385, 'Classic white off-shoulder wedding dress ', 'info@whiteangle.com', 'White Angle'),
(30, 'F166-Valentina-F-Wilderly-Bride-Wedding-Dress.jpg', 'Costumes', 200, 185, 'White wedding dress with all the accessories.', 'info@whiteangle.com', 'White Angle'),
(31, '7.7.jpg', 'Costumes', 200, 190, 'Classic Black and white tuxedo with all the accessories ', 'info@alkharouf.com', 'Al kharouf'),
(32, '8.8.jpg', 'Costumes', 170, 165, 'Dark Blue wedding tuxedo with all the accessories ', 'info@alkharouf.com', 'Al kharouf'),
(33, '9.9.jpg', 'Costumes', 180, 175, 'Gray wedding tuxedo with all the accessories \r\n', 'info@alkharouf.com', 'Al kharouf'),
(34, '10.01.jpg', 'Costumes', 150, 145, 'Ivory wedding tuxedo with all the accessories ', 'info@alkharouf.com', 'Al kharouf'),
(35, '2.jpg', 'Cake', 200, 180, 'Chocolate WEDDING CAKE for the lovely couple . enough for 70 people', 'info@rawancake.com', 'Rawan Cake'),
(36, 'c1.jpg', 'Cake', 400, 360, 'Four floored WEDDING CAKE , red velvet flavored for a lovely couple , enough for 70 people.', 'info@rawancake.com', 'Rawan Cake'),
(37, 'c2.jpg', 'Cake', 281, 275, 'A Cake of Elegance for the lovely couples servers up to 50 people', 'info@thecakery.jo', 'The Cakery'),
(38, 'macs.jpg', 'Cake', 30, 28, '30 from our delicious and colorful macaroons ', 'info@thecakery.jo', 'The Cakery'),
(39, 'c3.jpg', 'Cake', 105, 100, 'Floral Cake Minimum Serving 30 Persons', 'info@thecakery.jo', 'The Cakery'),
(40, 'c5.jpg', 'Cake', 80, 75, '4kg A\'sh Al boulboul sweets with nuts enough for 20-30 people', 'info@halwanji.jo', 'Halwanji sweets'),
(41, 'c4.jpg', 'Cake', 26, 21, 'Sidr Kunafa size 6 kg (enough for 36 people) + plates and spoons + fine + water cups carton', 'info@halwanji.jo', 'Halwanji sweets'),
(42, 'springweddingbouquet1-82a7e79ac4a546b192883f7a88d5d49e.jpg', 'Flower Decorations', 40, 35, 'Natural White Flower Bouquet for the lovely bride ', 'info@mayarflower.com', 'Mayar Flowers'),
(43, 'Purple-Rose-Wedding-Bouquet-1.jpg', 'Flower Decorations', 35, 32, 'Purple Rose Wedding Bouquet made from natural flowers ', 'info@mayarflower.com', 'Mayar Flowers'),
(44, 'belle_romantica_bridal_wedding_bouquet.jpg', 'Flower Decorations', 33, 28, 'Small Natural Pink Bridal Wedding Bouquet for the beautiful bride.', 'info@mayarflower.com', 'Mayar Flowers'),
(46, 'Beautiful Flower arrangement bouquet made with different kind of flowers..jpg', 'Flower Decorations', 55, 50, 'Beautiful Flower arrangement bouquet made with different kind of flowers.', 'info@mayarflower.com', 'Mayar Flowers'),
(47, 'Screenshot_1.jpg', 'Flower Decorations', 75, 70, 'Flower arrangement on tables for weddings with all the accessories .', 'thefloralstudiojo@gmail.com', 'The Floral Studio Jo'),
(48, 'Screenshot_2.jpg', 'Flower Decorations', 120, 110, 'Olive leaves, eucalyptus and white flowers.', 'thefloralstudiojo@gmail.com', 'The Floral Studio Jo'),
(49, 'Screenshot_3.jpg', 'Flower Decorations', 50, 45, 'Table set made from natural Flowers , lights and candles', 'thefloralstudiojo@gmail.com', 'The Floral Studio Jo'),
(50, 'Screenshot_4.jpg', 'Flower Decorations', 10, 8, 'Small white flower pot for table decorations', 'thefloralstudiojo@gmail.com', 'The Floral Studio Jo'),
(51, '201152395_1157063331370826_3647762044695136929_n.jpg', 'Flower Decorations', 30, 28, 'All White Flower Bouquet ', 'roselineflowersgifts@hotmail.com', 'RoseLine Flowers'),
(52, '202436330_1160078514402641_3353807365499312220_n.jpg', 'Flower Decorations', 45, 42, 'Red Rose Bouquet with a glass vase', 'roselineflowersgifts@hotmail.com', 'RoseLine Flowers'),
(53, 'Screenshot_5.jpg', 'Flower Decorations', 50, 48, 'Wedding car decorations with deferent color flowers.', 'roselineflowersgifts@hotmail.com', 'RoseLine Flowers'),
(54, '100-red-roses-in-a-vase-1.jpg', 'Flower Decorations', 199, 180, '100 for our special collected red flowers ', 'contact@wardexpress.com', 'Ward Express'),
(55, '100white.jpg', 'Flower Decorations', 180, 175, '100 for our special white roses for a beautiful bride', 'contact@wardexpress.com', 'Ward Express'),
(56, 'redandwhiteroses100.jpg', 'Flower Decorations', 180, 175, '100 for our special red and white roses.', 'contact@wardexpress.com', 'Ward Express'),
(57, '185537146_3854522351269204_4523072944983608476_n.jpg', 'Wedding Cars', 120, 115, 'Mercedes Benz G-Class 2017 Silver colored for weddings.', 'info@avis.jo', 'Avis Rent a Car'),
(58, '131319994_3441406865914090_6445349120021728947_n.jpg', 'Wedding Cars', 100, 95, 'Mercedes Benz E-Class Model E250 2018 Black for weddings.', 'info@avis.jo', 'Avis Rent a Car'),
(59, '131073716_3441408032580640_1113317946848577782_n.jpg', 'Wedding Cars', 60, 57, 'Mercedes Benz E-Class E250 2016 deferent colors (black/white/silver).', 'info@avis.jo', 'Avis Rent a Car'),
(60, '131226468_3441407785913998_9138291629899903150_n.jpg', 'Wedding Cars', 130, 125, 'Mercedes Benz CLS 2020 black for weddings.', 'info@avis.jo', 'Avis Rent a Car'),
(61, '178862687_4140470065998876_3702227602016466946_n.jpg', 'Wedding Cars', 400, 380, 'Rolls Royce 2016 White for wedding days.', 'info@europcar.jo', 'Europcar '),
(62, '179835862_4140470645998818_3554833407708128575_n.jpg', 'Wedding Cars', 300, 280, 'Rent a Bentley for your special day (White/Black) ', 'info@europcar.jo', 'Europcar '),
(63, '179964649_4140471425998740_4137001695455964583_n.jpg', 'Wedding Cars', 200, 180, 'Range Rover 2018 Sport for wedding days (White/Black)', 'info@europcar.jo', 'Europcar '),
(64, '179504385_4140473922665157_5000299280668054979_n.jpg', 'Wedding Cars', 100, 80, 'BMW 520i 2018 Silver for wedding days.', 'info@europcar.jo', 'Europcar '),
(65, '174280776_4388243827867107_4546358110191749453_n.jpg', 'Wedding Cars', 180, 160, 'Fancy Limousine For Weddings ', 'info@atlasclassiclimousine', 'Atlas Classic Limousine'),
(66, '174298134_4388243751200448_5721366256016934365_n.jpg', 'Wedding Cars', 200, 180, 'Fancy Chevrolet Camaro Limousine 2017 for a Beautiful Rent.', 'info@atlasclassiclimousine', 'Atlas Classic Limousine'),
(67, '175070812_4388244697867020_6230864525287103480_n.jpg', 'Wedding Cars', 170, 160, 'Fancy Long Door Limousine For Weddings', 'info@atlasclassiclimousine', 'Atlas Classic Limousine'),
(68, '175329969_4388243604533796_166551135566014744_n.jpg', 'Wedding Cars', 150, 140, 'Fancy Chrysler Limousine 2018 For Weddings\r\n', 'info@atlasclassiclimousine', 'Atlas Classic Limousine'),
(69, 'blog31-370x280.png', 'Photoshoot', 50, 45, 'Wedding Photoshoot with editing.', 'info@ammancenter.com', 'Amman Center'),
(70, 'blog-image-2-370x280.jpg', 'Photoshoot', 100, 90, 'Outdoor Wedding Photoshoot with editing and video ', 'info@robinastudio.com', 'Robina Studio'),
(71, 'gallery-image-8-446x367.jpg', 'Photoshoot', 150, 120, 'Wedding Photoshoot with videos.', 'info@babelstudio.com', 'Babel Studio'),
(72, 'gallery-image29-1.png', 'Photoshoot', 70, 60, 'Bride wedding photoshoot with editing.', 'info@lavalstudio.com', 'Laval Studio & Labs'),
(73, '216902610_2162566067375266_126038462265337156_n.png', 'Restaurants', 400, 380, 'Full Open Bofeh for wedding ceremonies. Contact Us to chose the menu ', 'info@beirutcatering.com', 'Beirut Catering Services'),
(74, '68836874_650828622077484_6185238636976406528_n.jpg', 'Restaurants', 600, 550, 'Wedding Catering Team with all the supplies Contact us to chose the items', 'info@venyou.com', 'VenYou Hospitality '),
(75, 'jordanian-mansaf.jpg', 'Restaurants', 110, 100, 'Seder Mansaf Enough For 7 People with 3KG local meat and Karaki Jameed.', 'info@alquds.com', 'Al Quds Restaurant'),
(76, 'sunday-s-open-lunch-buffet.jpg', 'Restaurants', 500, 450, 'Lebanese Open Buffet with Sea food menu for wedding.\r\nContact us to chose the menu.', 'info@tannoureen.com', 'Tannoureen Restaurant'),
(77, 'download.jpg', 'Hotels or Wedding Halls', 4000, 3800, 'Wedding Hall at the Luxuries Rotana Hotel. enough for 150 person. ', 'info@rotanahotel.jo', 'Rotana Hotel'),
(78, '197175320_2449038171899171_3546916451685488811_n.jpg', 'Hotels or Wedding Halls', 3000, 2800, 'Wedding Hall enough for 80 person with lights and a DJ.', 'info@paradisehall.com', 'Paradise Halls'),
(79, 'Hashemite Hall 2+3 (Medium).jpg', 'Hotels or Wedding Halls', 1800, 1600, 'Jabry Wedding Hall enough for 100 person , comes with a trained catering team.', 'info@jabryhalls.com', 'Jabry Halls');

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE `requests` (
  `id` int(11) NOT NULL,
  `productID` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL,
  `weddingDate` datetime NOT NULL,
  `ownerEmail` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `requests`
--

INSERT INTO `requests` (`id`, `productID`, `email`, `status`, `weddingDate`, `ownerEmail`) VALUES
(16, 79, 'fadiqupti4@gmail.com', 'Acceptable', '2021-08-20 11:00:00', 'info@jabryhalls.com'),
(17, 78, 'fadiqupti4@gmail.com', 'Pending', '2021-08-20 21:09:00', 'info@paradisehall.com');

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

CREATE TABLE `reservations` (
  `id` int(11) NOT NULL,
  `productID` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `weddingDate` datetime NOT NULL,
  `ownerEmail` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`id`, `productID`, `email`, `weddingDate`, `ownerEmail`) VALUES
(14, 79, 'fadiqupti4@gmail.com', '2021-08-20 11:00:00', 'info@jabryhalls.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;
--
-- AUTO_INCREMENT for table `requests`
--
ALTER TABLE `requests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
