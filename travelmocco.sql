-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2021 at 04:29 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travelmocco`
--

-- --------------------------------------------------------

--
-- Table structure for table `dangkitin`
--

CREATE TABLE `dangkitin` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(350) NOT NULL,
  `dateline` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dangkitin`
--

INSERT INTO `dangkitin` (`id`, `email`, `dateline`) VALUES
(4, 'minhtu@hubt.com', '2021-05-29 19:40:47');

-- --------------------------------------------------------

--
-- Table structure for table `phanhoi`
--

CREATE TABLE `phanhoi` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(350) NOT NULL,
  `email` varchar(350) NOT NULL,
  `phonenumber` varchar(350) NOT NULL,
  `noidung` text NOT NULL,
  `dateline` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `phanhoi`
--

INSERT INTO `phanhoi` (`id`, `username`, `email`, `phonenumber`, `noidung`, `dateline`) VALUES
(7, 'Minh Tú', 'minhtu@hubt.com', '0123456789', 'Dịch vụ tốt', '2021-05-29 19:40:28');

-- --------------------------------------------------------

--
-- Table structure for table `posttour`
--

CREATE TABLE `posttour` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(350) NOT NULL,
  `chauluc` varchar(350) NOT NULL,
  `price` varchar(350) NOT NULL,
  `dateline` datetime NOT NULL,
  `tinhtrang` varchar(350) NOT NULL,
  `noidung` text NOT NULL,
  `avata` varchar(350) NOT NULL,
  `thoigian` varchar(350) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `posttour`
--

INSERT INTO `posttour` (`id`, `title`, `chauluc`, `price`, `dateline`, `tinhtrang`, `noidung`, `avata`, `thoigian`) VALUES
(4, 'Tour Du Lịch Myanmar - Yangon - Golden Rock Khám ', 'Châu Á', '300', '2019-05-24 14:52:13', 'Còn tour', '<p>Myanmar l&agrave; đất nước cổ k&iacute;nh với những di t&iacute;ch t&ocirc;n gi&aacute;o mang t&iacute;nh chất vĩ đại về quy m&ocirc; v&agrave; tinh tế về kiến tr&uacute;c. Ti&ecirc;u biểu l&agrave; ch&ugrave;a v&agrave;ng Shwedagon ở Yangon, ch&ugrave;a N&uacute;i V&agrave;ng Kyaikhtiyo k&igrave; diệu ở cố đ&ocirc; Bago, hay quần thể 1000 đền ch&ugrave;a ho&agrave;nh tr&aacute;ng ở Bagan. Ngo&agrave;i ra, du lịch Myanmar c&ograve;n thu h&uacute;t kh&aacute;ch nước ngo&agrave;i bởi cảnh thi&ecirc;n nhi&ecirc;n hoang sơ, b&igrave;nh y&ecirc;n của hồ Inle, b&atilde;i biển Ngapali hay những tập tục độc đ&aacute;o như bộ tộc người cao cổ Pa-O hay tục b&ocirc;i kem Thanaka. Với c&aacute;c thuận lợi n&agrave;y, tuy chỉ mới mở cửa nhưng nền du lịch Myanmar đang ph&aacute;t triển với tốc độ nhanh ch&oacute;ng.</p>\r\n\r\n<p>Những điểm nổi bật trong chương tr&igrave;nh:</p>\r\n\r\n<ul>\r\n	<li>Trải nghiệm c&aacute;c điểm đến hấp dẫn nhất Myanmar</li>\r\n	<li>Tham quan chi&ecirc;m b&aacute;i c&aacute;c ng&ocirc;i c h&ugrave;a linh thi&ecirc;ng nổi tiếng: Ch&ugrave;a H&ograve;n Đ&aacute; V&agrave;ng, Ch&ugrave;a V&agrave;ng Shwedagon, Bảo t&agrave;ng x&aacute; lợi Phật Thone Wain...</li>\r\n	<li>Tham quan &amp; mua sắm tại Chợ Đ&aacute; Qu&yacute; Bogyoke Aung San</li>\r\n	<li>Thưởng thức c&aacute;c m&oacute;n ăn đặc sản của Myanmar</li>\r\n	<li>Hướng d&atilde;n vi&ecirc;n nhiệt t&igrave;nh v&agrave; xuy&ecirc;n suốt</li>\r\n</ul>\r\n', 'Myanmar2.jpg', '3 ngày 2 đêm'),
(5, 'Tour Du Lịch Thái Lan - Xứ Sở Của Những Nụ Cười', 'Châu Á', '350', '2019-05-27 15:57:22', 'Còn tour', '<p><a href="https://vietcenter.vn/du-lich-thai-lan" target="_blank"><strong>Th&aacute;i Lan</strong></a>, đất nước xinh đẹp của nụ cười, thi&ecirc;n đ&agrave;ng du lịch, thi&ecirc;n đ&agrave;ng mua sắm&hellip; những sologan v&agrave; lời khen tặng của c&aacute;c nh&agrave; tổ chức&nbsp;tour du lịch Th&aacute;i lan&nbsp;l&agrave;m mọi người cũng muốn thử một lần để biết. Vi vu đến xứ ch&ugrave;a V&agrave;ng, bạn h&atilde;y thử cảm gi&aacute;c th&uacute; vị khi thư gi&atilde;n ở thị trấn xinh đẹp Pai, vui vầy c&ugrave;ng s&oacute;ng biển trong vắt tại b&atilde;i biển hoang sơ Koh Li Pe&hellip;Bangkok Th&agrave;nh phố th&acirc;n thiện với d&acirc;n đồng t&iacute;nh, c&aacute;c ng&ocirc;i ch&ugrave;a Phật gi&aacute;o v&agrave; Đại cung điện l&agrave; ba l&yacute; do khiến bạn muốn dừng ch&acirc;n kh&aacute;m ph&aacute; thủ đ&ocirc; của Th&aacute;i Lan.&nbsp;</p>\r\n\r\n<p><img alt="" src="https://vietcenter.vn/Uploads/images/tour/Th%C3%A1i%20Lan/du-lich-thai-lan-chua-vang.png" style="height:367px; width:550px" /></p>\r\n\r\n<p><strong>Những điểm tham quan nổi bật của chương tr&igrave;nh:</strong></p>\r\n\r\n<ul>\r\n	<li>Chợ nổi 4 miền</li>\r\n	<li>Đảo San H&ocirc; ( Coral Island )</li>\r\n	<li>Tr&acirc;n Bảo Phật Sơn.</li>\r\n	<li>Suan Thai truyền thống Th&aacute;i (tặng v&eacute; cưỡi voi)</li>\r\n	<li>Hoặc L&acirc;u Đài Tỷ Ph&uacute; - Baan Sukhawadee.</li>\r\n	<li>Colossuem Show hoặc Alcazar Show.</li>\r\n	<li>Vườn Bướm Shaithip</li>\r\n	<li>Vườn chim Hải &Acirc;u</li>\r\n	<li>Quần thể Muang Boran đẹp m&ecirc; hồn mới nhất</li>\r\n	<li>Tham quan chùa thuy&ecirc;̀n - Wat Yannawa</li>\r\n	<li>7 Bữa chính đ&acirc;̣m đà hương vị Thái.</li>\r\n	<li>Bay h&atilde;ng h&agrave;ng kh&ocirc;ng Th&aacute;i Lan AirAsia (FD)</li>\r\n	<li>Bay giờ đẹp bay s&aacute;ng về tối</li>\r\n</ul>\r\n', 'thai-lan2.jpg', '5 ngày 4 đêm'),
(6, 'Tour du Lịch Bờ Tây Nước Mỹ - Los Angeles - Las Vegas 7 ', 'Châu Âu', '999', '2019-05-24 14:54:17', 'Còn tour', '<p><strong>Du lịch Mỹ - Du lịch Hoa Kỳ</strong>&nbsp;- một quốc gia rộng lớn bao gồm 50 tiểu bang v&agrave; một quận li&ecirc;n bang. Thủ đ&ocirc; Hoa Kỳ ch&iacute;nh l&agrave; Washington DC nằm giữa Bắc Mỹ v&agrave; th&agrave;nh phố lớn nhất Hoa Kỳ ch&iacute;nh l&agrave; New York. Quốc gia rộng lớn n&agrave;y c&oacute; rất nhiều phong cảnh xinh đẹp v&agrave; n&ecirc;n thơ, c&ugrave;ng rất nhiều điều b&iacute; ẩn th&uacute; vị bạn n&ecirc;n h&aacute;m ph&aacute;.</p>\r\n\r\n<p>Kh&ocirc;ng chỉ thu h&uacute;t bởi c&aacute;c khung cảnh thi&ecirc;n nhi&ecirc;n xinh đẹp một thế giới thu nhỏ, Hoa Kỳ c&ograve;n l&agrave; nơi hội tụ những vẻ đẹp bản sắc văn h&oacute;a đa dạng, l&agrave; trung t&acirc;m lớn của cả thế giới, ch&iacute;nh v&igrave; thế Hoa Kỳ c&ograve;n được mệnh l&agrave; &ldquo;V&ugrave;ng đất thi&ecirc;n đường&rdquo;, nơi mọi người tr&ecirc;n thế giới đều khao kh&aacute;t được đặt ch&acirc;n đến một lần trong đời.</p>\r\n', 'du-lich-chau-my-vietcenter.png', '7 ngày 6 đêm'),
(7, 'Tour Du Lịch Khám Phá Bờ Đông - Bờ Tây Nước Mỹ 10 ', 'Châu Âu', '999', '2019-05-24 15:02:19', 'Còn tour', '<p><strong>Du lịch Mỹ - Du lịch Hoa Kỳ</strong>&nbsp;- một quốc gia rộng lớn bao gồm 50 tiểu bang v&agrave; một quận li&ecirc;n bang. Thủ đ&ocirc; Hoa Kỳ ch&iacute;nh l&agrave; Washington DC nằm giữa Bắc Mỹ v&agrave; th&agrave;nh phố lớn nhất Hoa Kỳ ch&iacute;nh l&agrave; New York. Quốc gia rộng lớn n&agrave;y c&oacute; rất nhiều phong cảnh xinh đẹp v&agrave; n&ecirc;n thơ, c&ugrave;ng rất nhiều điều b&iacute; ẩn th&uacute; vị bạn n&ecirc;n h&aacute;m ph&aacute;.</p>\r\n\r\n<p>Kh&ocirc;ng chỉ thu h&uacute;t bởi c&aacute;c khung cảnh thi&ecirc;n nhi&ecirc;n xinh đẹp một thế giới thu nhỏ, Hoa Kỳ c&ograve;n l&agrave; nơi hội tụ những vẻ đẹp bản sắc văn h&oacute;a đa dạng, l&agrave; trung t&acirc;m lớn của cả thế giới, ch&iacute;nh v&igrave; thế Hoa Kỳ c&ograve;n được mệnh l&agrave; &ldquo;V&ugrave;ng đất thi&ecirc;n đường&rdquo;, nơi mọi người tr&ecirc;n thế giới đều khao kh&aacute;t được đặt ch&acirc;n đến một lần trong đời.</p>\r\n', 'du-lich-losangeles-vietcenter.png', '10 ngày 9 đêm'),
(8, 'Khám Phá Vẻ Đẹp Hoang Sơ Của Nam Phi 8 Ngày 7 Đêm', 'Châu Phi', '800', '2019-05-24 15:05:08', 'Còn tour', '<p><a href="https://vietcenter.vn/du-lich-nam-phi" target="_blank"><strong>Du lịch nam phi</strong></a>&nbsp;với kh&iacute; hậu dễ chịu v&agrave; nhiều điểm hấp dẫn th&uacute; vị thu h&uacute;t rất nhiều du kh&aacute;ch đến tham quan v&agrave;o tất cả c&aacute;c m&ugrave;a trong năm. Được mệnh danh l&agrave; đất nước kim cương, đặt ch&acirc;n đến Nam Phi, bạn sẽ thực sự bị cho&aacute;ng ngợp với v&ocirc; số vi&ecirc;n kim cương lộng lẫy.</p>\r\n\r\n<p><img alt="du-lich-nam-phi-vietcenter" src="https://vietcenter.vn/Uploads/images/tour/chauphi/du-lich-nam-phi-vietcenter.png" /></p>\r\n\r\n<p>Hơn nữa, khung cảnh thi&ecirc;n nhi&ecirc;n hoang sơ, nghệ thuật ẩm thực đặc sắc, những ly rượu vang nồng n&agrave;n&hellip;sẽ l&agrave; những điều l&ocirc;i cuốn bạn tr&ecirc;n mảnh đất n&agrave;y.</p>\r\n\r\n<p>Nằm ở khu vực ph&iacute;a nam Ch&acirc;u Phi, nằm ở Nam b&aacute;n cầu, kh&iacute; hậu Nam Phi quanh năm kh&aacute; dễ chịu. Nam Phi được bao quanh bởi 3 ph&iacute;a l&agrave; biển, độ cao tăng dần về ph&iacute;a bắc, Nam Phi c&oacute; nhiều khu vực kh&iacute; hậu nhưng kh&aacute; &ocirc;n h&ograve;a.</p>\r\n\r\n<p><strong>M&ugrave;a đ&ocirc;ng ở Nam Phi (bắt đầu từ th&aacute;ng 6 v&agrave; kết th&uacute;c th&aacute;ng 8):</strong>&nbsp;kh&ocirc;ng lạnh buốt, kh&ocirc;ng c&oacute; tuyết rơi. Bạn c&oacute; thể đến Nam Phi v&agrave;o bất k&igrave; khoảng thời gian n&agrave;o bạn muốn. Tuy c&oacute; thể&nbsp;<strong>du lịch Nam Phi</strong>&nbsp;v&agrave;o bất cứ khoảng thời gian n&agrave;o trong năm nhưng bạn cũng n&ecirc;n chủ động chuẩn bị cho m&igrave;nh &aacute;o ấm, bao tay, khăn qu&agrave;ng, mũ&hellip;bởi kh&iacute; hậu nơi đ&acirc;y &ocirc;n h&ograve;a nhưng nhiệt độ dao động l&ecirc;n cao xuống thấp trong ng&agrave;y n&ecirc;n người Việt Nam cần phải c&oacute; thời gian mới th&iacute;ch nghi được.</p>\r\n\r\n<p>Nhiều &yacute; kiến cho rằng,&nbsp;<strong>m&ugrave;a xu&acirc;n ở Nam Phi (từ th&aacute;ng 9 đến th&aacute;ng 11):&nbsp;</strong>l&agrave; khoảng thời gian du lịch đẹp nhất. Bởi l&uacute;c n&agrave;y thời tiết Nam Phi kh&aacute; dễ chịu, nhiệt độ từ 12 đến 16 độ C, c&oacute; mưa xu&acirc;n nhưng kh&ocirc;ng hề r&eacute;t buốt. Nếu bạn th&iacute;ch ngắm nh&igrave;n những khung cảnh l&atilde;ng mạn th&igrave;&nbsp;<em>m&ugrave;a xu&acirc;n Nam Phi</em>&nbsp;sẽ l&agrave; một lựa chọn tuyệt vời cho bạn.</p>\r\n', 'du-lich-nam-phi-vietcenter.png', '8 ngày 7 đêm'),
(9, 'Tour Du Lịch Pháp - Thụy Sĩ - Ý 10 Ngày 9 Đêm', 'Châu Âu', '999', '2019-05-24 15:05:40', 'Còn tour', '<p><strong>Du lịch Ch&acirc;u: Ph&aacute;p - Thụy Sĩ - &Yacute;&nbsp;</strong></p>\r\n\r\n<p>Một chuyến du lịch đến ch&acirc;u &Acirc;u, bạn sẽ rung động trước vẻ đẹp huyền b&iacute;, đa dạng của c&aacute;c c&ocirc;ng tr&igrave;nh vừa cổ k&iacute;nh vừa hiện đại v&agrave; th&ecirc;m phần ngưỡng mộ về những con người t&agrave;i ba đ&atilde; tạo dựng n&ecirc;n ch&uacute;ng.</p>\r\n\r\n<p>Một h&agrave;nh tr&igrave;nh - Ba điểm đến: Ph&aacute;p - Thụy Sỹ - &Yacute; (10 ng&agrave;y/09 đ&ecirc;m) sẽ đưa du kh&aacute;ch tham quan những điểm đến nổi tiếng nhất ở Ch&acirc;u &Acirc;u. Đến với kinh đ&ocirc; &aacute;nh s&aacute;ng Paris, tr&aacute;i tim của Ch&acirc;u &Acirc;u - Th&aacute;nh địa của du lịch Geneve,&nbsp; th&agrave;nh phố l&atilde;ng mạn nhất thế giới Florence với v&ograve;i rồng phun nước cao nhất thế giới, t&ograve;a th&aacute;nh Vatican&hellip;.</p>\r\n\r\n<p><strong>Đặc điểm nổi bật:</strong></p>\r\n\r\n<ul>\r\n	<li>Hỗ trợ thủ tục l&agrave;m Visa cho kh&aacute;ch h&agrave;ng chuy&ecirc;n nghiệp v&agrave; tận t&igrave;nh</li>\r\n	<li>Hệ thống kh&aacute;ch sạn 4 sao ti&ecirc;u chuẩn quốc tế tại c&aacute;c quốc gia Ch&acirc;u &Acirc;u</li>\r\n	<li>C&aacute;c bữa ăn đa dạng theo chương tr&igrave;nh tại nh&agrave; h&agrave;ng cao cấp Việt, &Aacute; v&agrave; Ch&acirc;u &Acirc;u</li>\r\n	<li>Trải nghiệm h&atilde;ng h&agrave;ng kh&ocirc;ng quốc tế&nbsp; 5 sao &nbsp;tốt nhất thế giới: Turkey Airway (H&agrave; Nội Paris// Rome &nbsp; H&agrave; Nội)</li>\r\n	<li>Chương tr&igrave;nh tham quan đầy đủ c&aacute;c di sản văn h&oacute;a vật thể, phi vật thể v&agrave; thi&ecirc;n nhi&ecirc;n Ch&acirc;u &Acirc;u</li>\r\n	<li>Kh&aacute;m ph&aacute; s&acirc;n bay Rome, Italia với &nbsp;nhiều h&agrave;ng h&oacute;a v&agrave; điểm mua sắm h&agrave;ng miễn thuế nhất thế giới</li>\r\n	<li>Hướng dẫn vi&ecirc;n chuy&ecirc;n nghiệp, suốt tuyến từ Việt Nam hướng dẫn kh&aacute;ch tham quan suốt qu&aacute; tr&igrave;nh tại Ch&acirc;u &Acirc;u</li>\r\n	<li>Bảo hiểm du lịch Quốc tế to&agrave;n cầu (Tập đo&agrave;n bảo hiểm Mỹ AIG) mức tr&aacute;ch nhiệm cao nhất: 50.000 USD</li>\r\n	<li>Qu&agrave; tặng hấp dẫn nhất: Ph&iacute;ch cắm điện, Mũ du lịch</li>\r\n</ul>\r\n', 'du-lich-phap-vietcenter.png', '10 ngày 9 đêm'),
(10, 'Tour du Lịch Pháp - Thụy Sĩ - Ý - Vantican', 'Châu Âu', '899', '2019-05-24 15:06:23', 'Còn tour', '<p>Những trải nghiệm tuyệt vời trong chuyến đi:</p>\r\n\r\n<ul>\r\n	<li>H&ograve;a m&igrave;nh c&ugrave;ng nhịp sống thanh lịch v&agrave; l&atilde;ng mạn, giữa kh&ocirc;ng gian đẹp cổ k&iacute;nh, tr&aacute;ng lệ đầy nghệ thuật tại kinh đ&ocirc; &aacute;nh s&aacute;ng của thế giới &ndash; Paris.</li>\r\n	<li>Kh&aacute;m ph&aacute; Cung điện Versailles &ndash; cung điện lộng lẫy nhất, tinh hoa nhất, đồ sộ nhất, v&agrave; xa hoa nhất thế giới, l&agrave; biểu tượng cho quyền lực tối thượng của vị vua mặt trời Louis.</li>\r\n	<li>H&iacute;t h&agrave; bầu kh&ocirc;ng kh&iacute; trong l&agrave;nh, ngắm nh&igrave;n cảnh sắc thi&ecirc;n nhi&ecirc;n hữu t&igrave;nh xanh m&aacute;t mắt v&agrave; kh&ocirc;ng gian sống &ecirc;m đềm của d&atilde;y Alps tr&ecirc;n c&aacute;c con đường của Thụy Sỹ v&agrave; thị trấn Annecy.</li>\r\n	<li>Thăm quan những th&agrave;nh phố đẹp nhất &Yacute;, phải đến &iacute;t nhất 1 lần trong đời: th&agrave;nh phố thời trang Milan, th&agrave;nh phố t&igrave;nh y&ecirc;u Venice, th&agrave;nh phố Phục Hưng ng&agrave;n năm tuổi Florence v&agrave; th&agrave;nh phố của sự vĩnh hằng Roma.</li>\r\n	<li>Sống trong kh&ocirc;ng gian thi&ecirc;ng li&ecirc;ng c&ugrave;ng những t&iacute;n đồ Thi&ecirc;n Ch&uacute;a gi&aacute;o th&agrave;nh t&iacute;n nhất ngay giữa t&ograve;a th&aacute;nh Vatican, một trong những trung t&acirc;m t&ocirc;n gi&aacute;o quyền lực nhất thế giới.</li>\r\n	<li>Thỏa sức mua sắm h&agrave;ng hiệu được giảm gi&aacute; tại trung t&acirc;m mua sắm cực lớn, với tr&ecirc;n 150 cửa h&agrave;ng thời trang cao cấp tại Rome, kinh đ&ocirc; thời trang Milan, c&aacute;c sản phẩm thủy tinh lung linh của Venice, c&aacute;c sản phẩm đồ da thuộc độc đ&aacute;o tại Florence.</li>\r\n</ul>\r\n', 'gm_151211_3Y.jpg', '10 ngày 9 đêm'),
(11, 'Tour Du Lịch Hồng Kông - Disneyland 4 Ngày 3 Đêm', 'Châu Á', '800', '2019-05-24 15:06:55', 'Còn tour', '<p><strong>Du lịch Kh&aacute;m Ph&aacute; Hồng K&ocirc;ng - Disneyland</strong></p>\r\n', 'du-lich-hong-kong.png', '4 ngày 3 đêm');

-- --------------------------------------------------------

--
-- Table structure for table `userorder`
--

CREATE TABLE `userorder` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(350) NOT NULL,
  `phonenumber` varchar(350) NOT NULL,
  `email` varchar(350) NOT NULL,
  `soluong` varchar(350) NOT NULL,
  `loinhan` text NOT NULL,
  `thanhtoan` varchar(350) NOT NULL,
  `datetime` datetime NOT NULL,
  `titletour2` varchar(350) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `userorder`
--

INSERT INTO `userorder` (`id`, `username`, `phonenumber`, `email`, `soluong`, `loinhan`, `thanhtoan`, `datetime`, `titletour2`) VALUES
(4, 'Minh Tú', '0123456789', 'minhtu@gmail.com', '1', 'Đặt vé', 'Thanh toán chuyển khoản', '2021-05-29 19:39:50', 'Tour Du Lịch Hồng Kông - Disneyland 4 Ngày 3 Đêm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dangkitin`
--
ALTER TABLE `dangkitin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `phanhoi`
--
ALTER TABLE `phanhoi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posttour`
--
ALTER TABLE `posttour`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userorder`
--
ALTER TABLE `userorder`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dangkitin`
--
ALTER TABLE `dangkitin`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `phanhoi`
--
ALTER TABLE `phanhoi`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `posttour`
--
ALTER TABLE `posttour`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `userorder`
--
ALTER TABLE `userorder`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
