-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2017 at 08:07 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `orange`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('nam', '123456'),
('nhân', '456789'),
('Li', '567890'),
('Tien', '234567');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id_cart` int(10) NOT NULL,
  `id_cumtomer` int(10) NOT NULL,
  `namecustomer` varchar(65) NOT NULL,
  `productname` varchar(65) NOT NULL,
  `numbers` varchar(13) NOT NULL,
  `date_book` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id_cart`, `id_cumtomer`, `namecustomer`, `productname`, `numbers`, `date_book`) VALUES
(31, 8, 'Ngo Thi Tien', 'Oppo R3', '3', '2017-12-07'),
(6, 0, 'gthrtht', 'Wooden chairs', '1', '2017-12-07'),
(33, 9, 'Ngo Thi Tien', 'iPhone 8', '1', '2017-12-07'),
(8, 0, 'htrfbfgbf', 'iPhone 8', '1', '2017-12-07'),
(11, 0, 'htrfbfgbf', 'Sport Combo ', '1', '2017-12-07'),
(32, 9, 'Ngo Thi Tien', 'Galaxy S8', '3', '2017-12-07'),
(13, 0, 'htrfbfgbf', 'Wooden chairs', '1', '2017-12-07'),
(14, 0, 'htrfbfgbf', 'caro shirts', '1', '2017-12-07'),
(35, 10, 'Ngo Thi Tien', 'iPhone 8', '1', '2017-12-07'),
(34, 9, 'Ngo Thi Tien', 'Caro dress', '1', '2017-12-07'),
(25, 5, 'ngotien', 'Oppo R3', '1', '2017-12-07'),
(26, 5, 'ngotien', 'iPhone 8', '3', '2017-12-07'),
(27, 6, 'Ngo Thi Tien', 'Caro dress', '10', '2017-12-07'),
(28, 6, 'Ngo Thi Tien', 'Galaxy S8', '10', '2017-12-07'),
(29, 6, 'Ngo Thi Tien', 'iPhone 8', '9', '2017-12-07'),
(30, 7, 'Ngo Thi Tien', 'Galaxy S8', '10', '2017-12-07');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` varchar(65) NOT NULL DEFAULT '',
  `category_name` varchar(65) NOT NULL DEFAULT '',
  `category_symbol` varchar(65) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `category_symbol`) VALUES
('SKM', 'Siêu khuyến mãi', 'fa-fire'),
('ĐT', 'Điện tử', 'fa-laptop'),
('TT', 'Thời trang', 'fa-globe'),
('ĐH', 'Đồng hồ', 'fa-clock-o'),
('ĐGD', 'Đồ gia dụng', 'fa-plug'),
('MP', 'Mỹ phẩm và làm đẹp', 'fa-gift'),
('SK', 'Sức khỏe', 'fa-laptop'),
('NT', 'Nội thất', 'fa-bed'),
('AT', 'Ẩm thực và nhà hàng', 'fa-cutlery'),
('GT', 'Giải trí', 'fa-film'),
('S', 'Sách', 'fa-book'),
('DL', 'Du lịch', 'fa-plane'),
('BH', 'Bách hóa gia đình', 'fa-home'),
('K', 'Khác', 'fa-users');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(4) NOT NULL,
  `name` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `chude` varchar(256) NOT NULL,
  `loinhan` varchar(256) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `chude`, `loinhan`) VALUES
(5, 'greg', 'nhan@gmail.com', 'grgre', 'fewfef'),
(6, 'ngngn', 'ffeef@gmail.com', 'fefe', 'fefeff');

-- --------------------------------------------------------

--
-- Table structure for table `cumtomer`
--

CREATE TABLE `cumtomer` (
  `id_cumtomer` int(10) NOT NULL,
  `namecustomer` varchar(65) NOT NULL,
  `phone` int(15) NOT NULL,
  `email` varchar(65) NOT NULL,
  `city` varchar(65) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cumtomer`
--

INSERT INTO `cumtomer` (`id_cumtomer`, `namecustomer`, `phone`, `email`, `city`, `address`) VALUES
(1, 'gthrtht', 1214143, 'cdscsd@gmail.com', '279', '0'),
(2, 'htrfbfgbf', 21321432, 'ccdssd@gmail.com', '316', '0'),
(3, 'fewfwefewf', 3213213, 'dsdsd@gmail.com', '295', '0'),
(4, 'ngng', 2141243532, 'bg@gm.com', '293', '0'),
(5, 'ngotien', 12345678, 'nhan@gmail.com', '289', '123'),
(6, 'Ngo Thi Tien', 968132263, 'ngothitien123@gmail.com', '286', '123'),
(7, 'Ngo Thi Tien', 968132263, 'ngothitien123@gmail.com', '285', '123 Nguyến Văn A  Quận 1 Tp HCM'),
(8, 'Ngo Thi Tien', 968132263, 'ngothitien123@gmail.com', '280', '1234 Nguyến Văn A  Quận 1 Tp HCM '),
(9, 'Ngo Thi Tien', 123231, 'ngothitien123@gmail.com', '290', '123 Nguyến Văn A  Quận 1 Tp HCM'),
(10, 'Ngo Thi Tien', 113212313, 'ngothitien123@gmail.com', '288', '123 Nguyến Văn A  Quận 1 Tp HCM');

-- --------------------------------------------------------

--
-- Table structure for table `detail_product`
--

CREATE TABLE `detail_product` (
  `id_detail_product` int(10) NOT NULL,
  `id_product` varchar(65) NOT NULL,
  `highlights` varchar(1000) NOT NULL,
  `condition_of_use` varchar(1000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `detail_product`
--

INSERT INTO `detail_product` (`id_detail_product`, `id_product`, `highlights`, `condition_of_use`) VALUES
(1, '1', '<p style=\'text-align:justify\'>- Ốp lưng cho iPhone 6 Plus thiết kế hình chiếc máy ảnh độc, đẹp, lạ là phụ kiện tạo phong cách riêng cho dế yêu của bạn.</p>\r\n      <div class =\'descriptionauto123\' hidden>\r\n          <p style=\'text-align:justify\'>- Thiết kế mô phỏng chiếc máy ảnh với ống kính, các thông số, nút bấm giống đến từng chi tiết khiến điện thoại của bạn giống như máy ảnh thật.</p>\r\n\r\n          <p style=\'text-align:justify\'>- Chất liệu nhôm phối nhựa bảo vệ dế yêu tránh bị trầy xước, hạn chế hư hỏng khi va chạm, rơi rớt.</p>\r\n\r\n          <p style=\'text-align:justify\'>- Màu sắc đa dạng, tươi tắn.</p>\r\n      </div> \r\n      ', '\r\n      <p style=\'text-align:justify\'>+ Đối với khu vực nội thành TP.HCM, nội thành Hà Nội: Miễn phí giao hàng cho đơn hàng từ 150.000vnđ</p>\r\n      <div class=\'descriptionauto123\' hidden>\r\n         <p style=\'text-align:justify\'>+ Đối với khu vực ngoại thành TP.HCM: Miễn phí giao hàng cho đơn hàng từ 300.000vnđ</p>\r\n\r\n         <p style=\'text-align:justify\'>+ Đối với các ngoại thành Hà Nội và tỉnh thành khác: Miễn phí giao hàng cho đơn hàng từ 500.000vnđ.</p>\r\n\r\n         <p style=\'text-align:justify\'><strong>- Áp dụng cho Ốp lưng máy ảnh cho iPhone 6 Plus đẹp độc.</strong></p>\r\n\r\n         <p style=\'text-align:justify\'><strong>- Màu sắc: đa dạng.</strong></p>\r\n\r\n         <p style=\'text-align:justify\'><strong>- Kích thước: 16x18x1.5 cm.</strong></p>\r\n\r\n         <p style=\'text-align:justify\'>- Hotdeal không giao sản phẩm ngày chủ nhật.</p>\r\n\r\n         <p style=\'text-align:justify\'>- Khách hàng không bù thêm tiền khi nhận sản phẩm.</p>\r\n\r\n         <p style=\'text-align:justify\'>- Khách hàng '),
(2, 'ĐT-phone-01', '<p style=\'text-align:justify\'>- Điện Thoại Galaxy S8 thiết kế hình chiếc máy ảnh độc, đẹp, lạ là phụ kiện tạo phong cách riêng cho dế yêu của bạn.</p>\r\n      <div class =\'descriptionauto123\' hidden>\r\n          <p style=\'text-align:justify\'>- Thiết kế mô phỏng chiếc máy ảnh với ống kính, các thông số, nút bấm giống đến từng chi tiết khiến điện thoại của bạn giống như máy ảnh thật.</p>\r\n\r\n          <p style=\'text-align:justify\'>- Chất liệu nhôm phối nhựa bảo vệ dế yêu tránh bị trầy xước, hạn chế hư hỏng khi va chạm, rơi rớt.</p>\r\n\r\n          <p style=\'text-align:justify\'>- Màu sắc đa dạng, tươi tắn.</p>\r\n      </div> \r\n      ', '\r\n      <p style=\'text-align:justify\'>+ Đối với khu vực nội thành TP.HCM, nội thành Hà Nội: Miễn phí giao hàng cho đơn hàng từ 150.000vnđ</p>\r\n      <div class=\'descriptionauto123\' hidden>\r\n         <p style=\'text-align:justify\'>+ Đối với khu vực ngoại thành TP.HCM: Miễn phí giao hàng cho đơn hàng từ 300.000vnđ</p>\r\n\r\n         <p style=\'text-align:justify\'>+ Đối với các ngoại thành Hà Nội và tỉnh thành khác: Miễn phí giao hàng cho đơn hàng từ 500.000vnđ.</p>\r\n\r\n         <p style=\'text-align:justify\'><strong>- Áp dụng cho Điện Thoại Galaxy S8.</strong></p>\r\n\r\n         <p style=\'text-align:justify\'><strong>- Màu sắc: đa dạng.</strong></p>\r\n\r\n         <p style=\'text-align:justify\'><strong>- Kích thước: 16x18x1.5 cm.</strong></p>\r\n\r\n         <p style=\'text-align:justify\'>- Hotdeal không giao sản phẩm ngày chủ nhật.</p>\r\n\r\n         <p style=\'text-align:justify\'>- Khách hàng không bù thêm tiền khi nhận sản phẩm.</p>\r\n\r\n         <p style=\'text-align:justify\'>- Khách hàng vui lòng kiểm tra sản'),
(3, 'ĐT-phone-02', '<p style=\'text-align:justify\'>- Điện Thoại Oppo R3 thiết kế hình chiếc máy ảnh độc, đẹp, lạ là phụ kiện tạo phong cách riêng cho dế yêu của bạn.</p>\r\n      <div class =\'descriptionauto123\' hidden>\r\n          <p style=\'text-align:justify\'>- Thiết kế mô phỏng chiếc máy ảnh với ống kính, các thông số, nút bấm giống đến từng chi tiết khiến điện thoại của bạn giống như máy ảnh thật.</p>\r\n\r\n          <p style=\'text-align:justify\'>- Chất liệu nhôm phối nhựa bảo vệ dế yêu tránh bị trầy xước, hạn chế hư hỏng khi va chạm, rơi rớt.</p>\r\n\r\n          <p style=\'text-align:justify\'>- Màu sắc đa dạng, tươi tắn.</p>\r\n      </div> \r\n      ', '\r\n      <p style=\'text-align:justify\'>+ Đối với khu vực nội thành TP.HCM, nội thành Hà Nội: Miễn phí giao hàng cho đơn hàng từ 150.000vnđ</p>\r\n      <div class=\'descriptionauto123\' hidden>\r\n         <p style=\'text-align:justify\'>+ Đối với khu vực ngoại thành TP.HCM: Miễn phí giao hàng cho đơn hàng từ 300.000vnđ</p>\r\n\r\n         <p style=\'text-align:justify\'>+ Đối với các ngoại thành Hà Nội và tỉnh thành khác: Miễn phí giao hàng cho đơn hàng từ 500.000vnđ.</p>\r\n\r\n         <p style=\'text-align:justify\'><strong>- Áp dụng cho Điện Thoại Oppo R3.</strong></p>\r\n\r\n         <p style=\'text-align:justify\'><strong>- Màu sắc: đa dạng.</strong></p>\r\n\r\n         <p style=\'text-align:justify\'><strong>- Kích thước: 16x18x1.5 cm.</strong></p>\r\n\r\n         <p style=\'text-align:justify\'>- Hotdeal không giao sản phẩm ngày chủ nhật.</p>\r\n\r\n         <p style=\'text-align:justify\'>- Khách hàng không bù thêm tiền khi nhận sản phẩm.</p>\r\n\r\n         <p style=\'text-align:justify\'>- Khách hàng vui lòng kiểm tra sản p');

-- --------------------------------------------------------

--
-- Table structure for table `introduce_product`
--

CREATE TABLE `introduce_product` (
  `id_introduce_product` int(10) NOT NULL,
  `id_detail_product` varchar(65) NOT NULL,
  `name_introduce` varchar(1000) NOT NULL,
  `type_id` varchar(10) NOT NULL,
  `name_introduce_detail` varchar(1000) NOT NULL,
  `salerate` int(10) NOT NULL,
  `normalprice` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `introduce_product`
--

INSERT INTO `introduce_product` (`id_introduce_product`, `id_detail_product`, `name_introduce`, `type_id`, `name_introduce_detail`, `salerate`, `normalprice`) VALUES
(1, '1', 'Ốp Lưng Máy Ảnh Cho iPhone 6 Plus Đẹp Độc', 'ĐT-phone', 'Điện Thoại Galaxy S8 Đẹp Độc – Cho Dế Yêu Của Bạn Thêm Nổi Bật, Cá Tính – Chất Liệu Bền Đẹp, Chắc Chắn. Chỉ Có Tại Orange once!', 45, 174000),
(2, 'ĐT-phone-01', 'Điện Thoại Galaxy S8 Đẹp Độc', 'ĐT-phone', 'Điện Thoại Galaxy S8 Đẹp Độc – Cho Bạn Thêm Nổi Bật, Cá Tính – Chất Liệu Bền Đẹp, Chắc Chắn. Chỉ Có Tại Orange once!', 20, 200),
(3, 'ĐT-phone-02', 'Điện Thoại Oppo R3 Đẹp Độc', 'ĐT-phone', 'Điện Thoại Oppo R3 Đẹp Độc – Cho Bạn Thêm Nổi Bật, Cá Tính – Chất Liệu Bền Đẹp, Chắc Chắn. Chỉ Có Tại Orange once!', 10, 180);

-- --------------------------------------------------------

--
-- Table structure for table `introduce_product_image`
--

CREATE TABLE `introduce_product_image` (
  `id_product` varchar(65) NOT NULL,
  `product_image` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `introduce_product_image`
--

INSERT INTO `introduce_product_image` (`id_product`, `product_image`) VALUES
('1', 'products/308765_1_iPhone6sPlusCases.jpg'),
('1', 'products/308765_2_iPhone6sPlusCases.jpg'),
('1', 'products/308765_3_iPhone6sPlusCases.jpg'),
('1', 'products/308765_4_iPhone6sPlusCases.jpg'),
('1', 'products/308765_5_iPhone6sPlusCases.jpg'),
('1', 'products/308765_6_iPhone6sPlusCases.jpg'),
('ĐT-phone-01', 'samsung-galaxy-s8.jpg'),
('ĐT-phone-01', 'samsung-galaxy-s8_1.jpg'),
('ĐT-phone-01', 'samsung-galaxy-s8_2.jpg'),
('ĐT-phone-01', 'samsung-galaxy-s8_3.jpg'),
('ĐT-phone-01', 'samsung-galaxy-s8.jpg'),
('ĐT-phone-02', 'products/308765_6_iPhone6sPlusCases.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(4) NOT NULL,
  `username` varchar(65) NOT NULL DEFAULT '',
  `password` varchar(65) NOT NULL DEFAULT '',
  `sdt` int(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pin` int(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `username`, `password`, `sdt`, `email`, `pin`) VALUES
(10, 'nhan1', 'fefefe78 ', 1235686213, 'nh@gma.com', 1),
(2, 'nhan', '123456789', 2132132, 'nhan@gmail.com', 0),
(3, 'nam', '123456789', 989222602, 'nam@gmail.com', 123),
(4, 'Thị Tiến', '123456789', 123456791, 'rgr@gmai.com', 1),
(5, 'dádaada', '12345678', 123456789, 'frfr@gmail.com', 2),
(6, 'cc', '12345678', 3123452, 'nh@gma.com', 1),
(8, 'fffffff', '12345678', 31231253, 'nh@gma.com', 1),
(9, 'gergrr', '123456789', 32123121, 'bg@gm.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `ID` int(11) NOT NULL,
  `type_id` varchar(10) NOT NULL,
  `productcode` varchar(65) NOT NULL DEFAULT '',
  `productname` varchar(65) NOT NULL DEFAULT '',
  `productimage` varchar(255) NOT NULL,
  `best` tinyint(1) NOT NULL,
  `new` tinyint(1) NOT NULL,
  `hot` tinyint(1) NOT NULL,
  `salerate` int(10) NOT NULL,
  `normalprice` int(10) NOT NULL,
  `category_id` varchar(65) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`ID`, `type_id`, `productcode`, `productname`, `productimage`, `best`, `new`, `hot`, `salerate`, `normalprice`, `category_id`) VALUES
(1, 'ĐT-phone', 'ĐT-phone-01', 'Galaxy S8', 'samsung-galaxy-s8.jpg', 1, 1, 0, 20, 200, 'ĐT'),
(2, 'ĐT-phone', 'ĐT-phone-02', 'Oppo R3', 'oppo-r3.jpg', 0, 1, 0, 10, 180, 'ĐT'),
(3, 'ĐT-phone', 'ĐT-phone-03', 'iPhone 8', 'iPhone-8.jpg', 1, 1, 0, 20, 210, 'ĐT'),
(4, 'ĐT-lap', 'ĐT-lap-01', 'Asus Champion', 'Asus-laptop.jpg', 1, 0, 1, 20, 250, 'ĐT'),
(5, 'ĐT-lap', 'ĐT-lap-02', 'Laptop Dell', 'dell-latop-2.jpg', 0, 0, 1, 20, 170, 'ĐT'),
(6, 'TT-female', 'TT-female-01', 'women jacket\r\n', 'fashion.jpg', 1, 0, 1, 10, 90, 'TT'),
(7, 'TT-female', 'TT-female-02', 'Caro dress', 'vay-nu.jpg', 1, 1, 1, 10, 100, 'TT'),
(8, 'TT-male', 'TT-male-01', 'Sport Jacket', 'ao-khoac-nam.jpg', 1, 0, 1, 10, 120, 'TT'),
(9, 'TT-male', 'TT-male-02', 'T-shirt', 'ao-thun-Paw.jpg', 1, 0, 1, 10, 50, 'TT'),
(10, 'TT-male', 'TT-male-03', 'caro shirts', 'so-mi.jpg', 1, 1, 0, 20, 70, 'TT'),
(11, 'TT-male', 'TT-male-04', 'Sport Combo ', 'sport2.jpg', 1, 1, 0, 20, 90, 'TT'),
(12, 'NT', 'NT-01', 'Long Sofa', 'sofa-long.jpeg', 1, 1, 0, 20, 160, 'NT'),
(13, 'NT', 'NT-02', 'Wooden chairs', 'bar-stools2.jpg', 1, 1, 1, 20, 150, 'NT'),
(14, 'SKM', 'SKM-01', 'Picnic Backpack', 'bag.jpg', 1, 1, 1, 50, 50, 'SKM'),
(15, 'ĐH-male', 'ĐH-male-01', 'Casio Watch', 'dong-ho-casio.jpg', 1, 0, 0, 20, 100, 'ĐH'),
(16, 'ĐH-male', 'ĐH-male-02', 'Watch', 'dong-ho.jpg', 0, 1, 0, 20, 140, 'ĐH'),
(17, 'ĐT-photo', 'ĐT-photo-01', 'Nikon Kodak', 'may-anh-nikon.jpg', 0, 1, 1, 10, 140, 'ĐT'),
(18, 'ĐT-photo', 'ĐT-photo-02', 'CGO4 Kodak', 'may-anh-cgo4.png', 0, 1, 1, 10, 180, 'ĐT'),
(19, 'S', 'S-01', 'Combo Toeic', 'toeic.jpg', 0, 1, 1, 30, 100, 'S'),
(20, 'S', 'S-02', 'Economy Book', 'economy-book.jpg', 0, 0, 1, 20, 50, 'S'),
(21, 'ĐT-Phone', 'ĐT-phone-04 ', 'Lumia  ', 'Lumia.jpg', 1, 1, 1, 30, 200, 'ĐT'),
(22, 'ĐH-male', 'ĐH-male-04 ', 'đồng hồ 1 ', 'dong-ho-1.jpg', 1, 0, 1, 50, 300, 'ĐH');

-- --------------------------------------------------------

--
-- Table structure for table `product_type`
--

CREATE TABLE `product_type` (
  `category_id` varchar(65) NOT NULL DEFAULT '',
  `type_id` varchar(65) NOT NULL DEFAULT '',
  `type_name` varchar(65) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product_type`
--

INSERT INTO `product_type` (`category_id`, `type_id`, `type_name`) VALUES
('SKM', 'SKM', 'Siêu KM'),
('ĐT', 'ĐT-lap', 'Laptop và Máy vi tính'),
('ĐT', 'ĐT-phone', 'Điện thoại'),
('ĐT', 'ĐT-tablet', 'Máy tính bảng'),
('ĐT', 'ĐT-photo', 'Máy ảnh'),
('ĐT', 'ĐT-cam', 'Camera'),
('ĐT', 'ĐT-tivi', 'Tivi'),
('ĐT', 'ĐT-Game', 'Game'),
('ĐT', 'ĐT-other', 'Phụ kiện'),
('TT', 'TT-male', 'Thời trang nam'),
('TT', 'TT-female', 'Thời trang nữ'),
('ĐH', 'ĐH-male', 'Đồng hồ nam'),
('ĐH', 'ĐH-female', 'Đồng hồ nữ'),
('ĐH', 'ĐH-DD', 'Đồng hồ dây da'),
('ĐH', 'ĐH-CN', 'Đồng hồ chống nước'),
('ĐH', 'ĐH-TE', 'Đồng hồ trẻ em'),
('ĐGD', 'ĐGD-TL', 'Tủ lạnh'),
('ĐGD', 'ĐGD-BN', 'Bếp nấu'),
('ĐGD', 'ĐGD-LVS', 'Lò vi sóng'),
('ĐGD', 'ĐGD-DC', 'Dụng cụ làm bếp'),
('ĐGD', 'ĐGD-DD', 'Dọn dẹp và vệ sinh'),
('MP', 'MP-MH', 'Nước hoa'),
('MP', 'MP-MTKT', 'Máy tạo kiểu tóc'),
('MP', 'MP-DCTĐ', 'Dụng cụ trang điểm'),
('MP', 'MP-CSD', 'Chăm sóc da'),
('MP', 'MP-CSTT', 'Chăm sóc toàn thân'),
('MP', 'MP-CSDM', 'Chăm sóc da mặt'),
('MP', 'MP-male', 'Chăm sóc cho nam'),
('SK', 'SK-CN', 'Thực phẩm chức năng'),
('SK', 'SK-NL', 'Dinh dưỡng cho người lớn'),
('SK', 'SK-TE', 'Dinh dưỡng cho trẻ em'),
('SK', 'SK-BS', 'Thực phẩm bổ sung'),
('NT', 'NT', 'Nội thất'),
('AT', 'AT', 'Ẩm thực và Nhà hàng'),
('GT', 'GT', 'Giải trí'),
('S', 'S', 'Sách'),
('DL', 'DL', 'Du lịch'),
('BH', 'BH', 'Bách hóa gia đình'),
('K', 'K', 'Khác');

-- --------------------------------------------------------

--
-- Table structure for table `promotion`
--

CREATE TABLE `promotion` (
  `id_promotion` int(10) NOT NULL,
  `code_promotion` varchar(65) NOT NULL,
  `promotionname` varchar(65) NOT NULL,
  `promotionpercent` int(6) NOT NULL,
  `date_start` date NOT NULL,
  `date_end` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `promotion`
--

INSERT INTO `promotion` (`id_promotion`, `code_promotion`, `promotionname`, `promotionpercent`, `date_start`, `date_end`) VALUES
(1, 'ERTYSDFGH45678DFGHJ', 'Khai trương', 10, '2017-12-05', '2018-12-23'),
(2, 'SDFGH23456GHJK', 'TẾT', 10, '2017-12-05', '2018-12-23'),
(3, '78DFGHJ', 'Khai trương', 30, '2017-12-05', '2018-12-23'),
(4, 'ERTYSDFG8DFGHJ', 'TẾT', 10, '2017-12-05', '2018-12-23'),
(5, 'ERTYSDFG8DFGHJ', 'KHUYẾN MÃI', 20, '2017-12-05', '2018-12-23'),
(6, 'ERTGH45678VFBJ', 'Khai trương', 10, '2017-12-05', '2018-12-23'),
(7, 'QRTY23OMEDFGHJ', 'noen', 10, '2017-12-05', '2018-12-23'),
(8, 'QRFWTRE436HJ', 'NOEN', 20, '2017-12-05', '2018-12-23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id_cart`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cumtomer`
--
ALTER TABLE `cumtomer`
  ADD PRIMARY KEY (`id_cumtomer`);

--
-- Indexes for table `detail_product`
--
ALTER TABLE `detail_product`
  ADD PRIMARY KEY (`id_detail_product`);

--
-- Indexes for table `introduce_product`
--
ALTER TABLE `introduce_product`
  ADD PRIMARY KEY (`id_introduce_product`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`productcode`),
  ADD UNIQUE KEY `ID` (`ID`),
  ADD KEY `type_id` (`type_id`);

--
-- Indexes for table `product_type`
--
ALTER TABLE `product_type`
  ADD PRIMARY KEY (`type_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `promotion`
--
ALTER TABLE `promotion`
  ADD PRIMARY KEY (`id_promotion`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id_cart` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `cumtomer`
--
ALTER TABLE `cumtomer`
  MODIFY `id_cumtomer` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `detail_product`
--
ALTER TABLE `detail_product`
  MODIFY `id_detail_product` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `introduce_product`
--
ALTER TABLE `introduce_product`
  MODIFY `id_introduce_product` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `promotion`
--
ALTER TABLE `promotion`
  MODIFY `id_promotion` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
