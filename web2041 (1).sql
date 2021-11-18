-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 18, 2021 lúc 06:53 PM
-- Phiên bản máy phục vụ: 10.4.19-MariaDB
-- Phiên bản PHP: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `web2041`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binh_luan`
--

CREATE TABLE `binh_luan` (
  `ma_bl` int(11) NOT NULL,
  `noi_dung` varchar(255) NOT NULL,
  `ma_kh` varchar(25) NOT NULL,
  `ma_hh` int(11) NOT NULL,
  `ngay_tao` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `binh_luan`
--

INSERT INTO `binh_luan` (`ma_bl`, `noi_dung`, `ma_kh`, `ma_hh`, `ngay_tao`) VALUES
(14, 'sp rất đẹp admin', 'admin', 2, '2021-10-13'),
(15, 'giày đẹp vãi', 'vanhnam042', 2, '2021-10-13'),
(22, 'helo', 'admin', 2, '2021-10-14'),
(23, 'còn sản phẩm này kh ạ', 'admin', 2, '2021-10-17'),
(24, 'còn sản phẩm này kh ạ', 'admin', 2, '2021-10-17'),
(25, 'còn sản phẩm này kh ạ', 'admin', 2, '2021-10-17'),
(26, 'còn sản phẩm này kh ạ', 'admin', 7, '2021-10-17'),
(35, 'sản phảm xịn xò quá', 'nam04022002', 12, '2021-10-20'),
(36, 'sp rất đẹp', 'nam04022002', 2, '2021-10-22'),
(37, 'còn sản phẩm này kh ạ', 'nam04022002', 2, '2021-11-18');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cau_hinh`
--

CREATE TABLE `cau_hinh` (
  `ma_ch` int(11) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `dia_chi` varchar(150) NOT NULL,
  `sdt` varchar(255) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `youtube` varchar(255) NOT NULL,
  `tiktok` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hang_hoa`
--

CREATE TABLE `hang_hoa` (
  `ma_hh` int(11) NOT NULL,
  `ten_hh` varchar(255) NOT NULL,
  `gia` int(255) NOT NULL,
  `giam_gia` int(255) NOT NULL,
  `hinh` varchar(255) NOT NULL,
  `mo_ta` mediumtext NOT NULL,
  `dac_biet` bit(1) NOT NULL,
  `ma_loai` int(11) NOT NULL,
  `luot_xem` int(11) NOT NULL,
  `ngay_tao` datetime NOT NULL,
  `ngay_sua` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `hang_hoa`
--

INSERT INTO `hang_hoa` (`ma_hh`, `ten_hh`, `gia`, `giam_gia`, `hinh`, `mo_ta`, `dac_biet`, `ma_loai`, `luot_xem`, `ngay_tao`, `ngay_sua`) VALUES
(1, 'NIKE AIR FORCE 1 WHITE \'07\'', 5000000, 0, 'sp2.jpg', '', b'0', 6, 46, '2021-10-02 00:00:00', '2021-10-06 00:00:00'),
(2, 'CONVERSE CHUCK TAYLOR ', 10000000, 0, 'sp7.jpg', '', b'1', 2, 132, '0000-00-00 00:00:00', '2021-10-04 00:00:00'),
(7, 'VANS VAULT OLD SKOOL ', 1900000, 0, 'sp14.jpg', '', b'1', 3, 39, '2021-10-04 00:00:00', '2021-10-04 00:00:00'),
(9, 'AIR JORDAN 1 RETRO', 15000000, 0, 'sp1.jpg', '', b'1', 1, 30, '2021-10-04 00:00:00', '2021-10-04 00:00:00'),
(10, 'CONVERSE CHUCK 70 \'', 1200000, 0, '5db9517feb3a9.jpg', '', b'1', 2, 17, '2021-10-04 00:00:00', '2021-10-04 00:00:00'),
(11, 'CONVERSE JAPAN  HI PINK', 3900000, 0, '5dd7bf7f0bc95.jpg', '', b'0', 2, 13, '2021-10-04 00:00:00', '2021-10-04 00:00:00'),
(12, 'AIR JORDAN 1 MID GS \'PASTEL\'', 3800000, 0, 'sp9.jpg', '', b'1', 1, 22, '2021-10-04 00:00:00', '2021-10-04 00:00:00'),
(13, 'VANS FLAME  BLACK GREEN', 2200000, 0, '5ee37f3b368f9.jpg', '', b'1', 3, 9, '2021-10-04 00:00:00', '2021-10-04 00:00:00'),
(14, 'VANS  LX WHITE GREEN', 2900000, 0, '5ff82df0d2e86.jpg', '', b'0', 3, 10, '2021-10-04 00:00:00', '2021-10-04 00:00:00'),
(15, 'ADIDAS YEEZY BOOST 700', 10000000, 0, 'sp3.jpg', 'Đôi nét về đôi giày yeezy 700 static\r\nYeezy 700 static là một trong những sản phẩm nổi bật thuộc dòng Yeezy của thương hiệu thời trang nổi tiếng Adidas. Kể từ khi được ra mắt thị trường, yeezy 700 đã nhanh chóng chiếm trọn được trái tim của người tiêu dùng. Bởi lẽ nó không chỉ giúp bảo vệ đôi chân mà còn tôn lên vẻ đẹp thời trang cho người sử dụng.\r\n\r\ngiay-adidas-yeezy-700-v2-static-trang-bac (2)\r\nGiày Adidas Yeezy 700 V2 Static Trắng Bạc Rep 1 1™ Đẹp & Chất\r\nMặc dù yz 700 static được thiết kế theo kiểu dáng Chunky truyền thống nhưng vẫn nổi bật với nhiều cải tiến độc đáo. Do đó, mẫu giày yeezy 700 rep 1:1 này vẫn được người tiêu dùng đánh giá cao.\r\n\r\ngiay-adidas-yeezy-700-v2-static-trang-bac (6)\r\nGiày Adidas Yeezy 700 V2 Static Trắng Bạc Rep 1 1™ Đẹp & Chất\r\ngiay-adidas-yeezy-700-v2-static-trang-bac (5)\r\nGiày Adidas Yeezy 700 V2 Static Trắng Bạc Rep 1 1™ Đẹp & Chất\r\nVì sao không nên bỏ lỡ đôi giày yz 700 static của DQ Shop\r\nĐôi giày yz 700 static hiện đang làm mưa làm gió trong hội những người yêu giày vì những ưu điểm vượt trội sau đây:\r\n\r\ngiay-adidas-yeezy-700-v2-static-trang-bac (4)\r\nGiày Adidas Yeezy 700 V2 Static Trắng Bạc Rep 1 1™ Đẹp & Chất\r\nThiết kế đôi giày yeezy 700 phản quang trông vô cùng cá tính\r\nKhi nhìn tổng thể đôi giày yeezy 700 static, bạn sẽ thấy rằng nó toát lên được vẻ cá tính trong từng đường kim mũi chỉ. Bên cạnh đó, tất cả các chi tiết của đôi giày yeezy 700 phản quang này được thiết kế vô cùng tỉ mỉ và cẩn thận. Mặc dù trông có phần đơn giản nhưng lại khá bắt mắt và nổi bật.\r\n\r\ngiay-adidas-yeezy-700-v2-static-trang-bac (8)\r\nGiày Adidas Yeezy 700 V2 Static Trắng Bạc Rep 1 1™ Đẹp & Chất\r\nThân giày yz 700 phản quang trông vô cùng bắt mắt\r\nVề ngoại hình, đôi giày yeezy 700 static nổi bật với kiểu dáng hầm hố đặc trưng và kết cấu cầu kỳ. Ngoài ra, đôi giày yz 700 này còn thu hút hơn với yếu tố phản quang ở 2 bên hông. Những chi tiết đặc biệt này sẽ giúp người sử dụng thu hút được sự chú ý nhiều hơn dù là đi vào ban ngày hay ban đêm.\r\n\r\ngiay-adidas-yeezy-700-v2-static-trang-bac (7)\r\nGiày Adidas Yeezy 700 V2 Static Trắng Bạc Rep 1 1™ Đẹp & Chất\r\nMàu sắc giày yeezy 700 static tinh tế, dễ kết hợp\r\nĐôi giày yeezy 700 static này được thiết kế với gam màu trắng bạc đặc trưng nên rất dễ phối đồ. Không chỉ vậy, yz 700 static còn kết hợp với chi tiết phản quang nên trông vô cùng nổi bật dưới ánh đèn. Đây chính là sự lựa chọn hoàn hảo dành cho những ai không thích màu sắc cầu kỳ và sặc sỡ.', b'1', 4, 11, '2021-10-04 00:00:00', '2021-10-04 00:00:00'),
(16, 'ADIDAS YEEZY BOOST 350 ', 5000000, 0, 'sp10.jpg', 'Đánh giá siêu phẩm Adidas Yeezy Boost 350\r\nYeezy 350 Boost Lundmark có hai phiên bản cho giới trẻ lựa chọn, đó là phản quang full (còn gọi là Reflective hay 3m) và phản quang dây (còn gọi là Non-Reflective). Nhìn chung thì mẫu giày này được kế thừa những giá trị nét đẹp và điểm thu hút của những mẫu giày adidas yeezy 350 trước.\r\n\r\nAdidas Yeezy Lundmark Reflective - Full phản quang tại Tuloshop\r\nAdidas Yeezy Lundmark Reflective - Full phản quang tại Tuloshop\r\nPhần upper của giày sử dụng chất liệu vải Primeknit mang lại sự thoáng khí tuyệt vời, không những vậy còn hỗ trợ sự co giãn, giúp người dùng cảm thấy thoải mái trong suốt quá trình sử dụng, hạn chế tối đa những tổn thương khi dùng.\r\n\r\nĐiểm thú vị của mẫu giày Yeezy 350 Lundmark chính là phần phối màu của sản phẩm. Sự pha trộn giữa gam màu trắng và màu vàng tạo nên sự nhẹ nhàng mà vô cùng cuốn hút của mẫu giày. Những tưởng gam màu vàng sẽ lấn át hết sắc màu trắng tinh khôi, nhưng với sự khéo léo và tài tình, hai gam màu hỗ trợ cho nhau, tạo nên một bản màu sắc cực độc đáo mà chưa có hãng giày nào mang đến.\r\nGiày yeezy 350 lundmark có màu sắc nhẹ nhàng, bắt mắt phù hợp cho cả nam & nữ\r\nGiày yeezy 350 lundmark có màu sắc nhẹ nhàng, bắt mắt phù hợp cho cả nam & nữ\r\nỞ mẫu Adidas Yeezy 350 Lundmark, thay vì sử dụng dải sọc màu chạy từ mũi giày đến gót giày đã được thay bằng sợi \"Monofilament\" dạng sợi đơn xuyên thấu, từ đó làm lộ rõ toàn bộ thiết kế, kết cấu bên trong giày, nâng tầm của sản phẩm trở nên cao cấp, đặc biệt hơn.\r\n\r\nVẫn trung thành với thiết kế lưỡi gà và cổ giày kéo cao, nở nang và rộng rãi, với Yeezy Boost Lundmark người dùng sẽ cảm thấy thoải mái trong quá trình mang và tháo giày, mọi thao tác đều được thực hiện một cách đơn giản. Bên cạnh đó, với thiết kế phần lưỡi gà cao tăng chức năng bảo vệ cổ chân của người dùng, nhất là khi tham gia các hoạt động mạnh, di chuyển nhiều.\r\n\r\nPhần lưỡi gà của Yeezy Lundmark được thiết kế chuẩn co dãn, giúp bạn tháo gỡ dễ dàng\r\nPhần lưỡi gà của Yeezy Lundmark được thiết kế chuẩn co dãn, giúp bạn tháo gỡ dễ dàng\r\nĐối lập với phần mũi giày nhỏ nhắn, ôm sát chân, tạo nên những đường nét uyển chuyển sang chảnh thì phần đế giày lại phình to ra, tạo cảm giác như những bệ phóng của tàu lửa giúp nâng đỡ con tàu sẵn sàng vươn lên bầu trời vậy. Với phần đế giày độc đáo này, người dùng sẽ cảm nhận trọn vẹn lực ở để giày khi tác động một lực xuống sản phẩm.\r\n\r\nTuy nhiên có một điểm khác trong phần thiết kế ở đế giày đó là được kết hợp thêm chất liệu cao su màu Beige nhạt và miếng vải lót ở phần cá chân, tăng chất lượng và độ bền của sản phẩm lên tối đa, giúp người dùng cảm nhận sự êm ái và linh hoạt trong từng bước chân.\r\n\r\nYeezy 350 V2 Lundmark - Tích hợp công nghệ tiên tiến, hiện đại\r\nBắt kịp xu hướng nên mẫu giày Yeezy 350 V2 Lundmark được tích hợp công nghệ boost hiện đại, góp phần tạo nên sức hút lớn khó mà cưỡng lại của dòng sản phẩm này.\r\n\r\nNhìn từ bên ngoài có thể thấy rõ bộ đế của đôi giày sử dụng chất liệu cao su cao cấp, tăng sự ma sát và độ bền trong quá trình di chuyển. Nhưng không chỉ có thế, bên trong phần đế giày là hàng ngàn hạt boost li ti được nén lại, tăng sự êm ái cho đôi giày, giúp sản phẩm trở lên linh hoạt và nhạy bén hơn.\r\n\r\nNhững đường may trên sản phẩm đều được gia công tỉ mỉ trong từng đường nét, nhìn thì có vẻ khá lộn xộn nhưng lại có sự đồng nhất, chuẩn xác đến tuyệt đối.\r\n\r\nPhần boost của Yeezy Lundmark được cấu tạo bằng công nghệ nén hiện đại\r\nPhần boost của Yeezy Lundmark được cấu tạo bằng công nghệ nén hiện đại\r\nNhư đã nói ở trên, Yeezy Boost 350 V2 Lundmark có hai dòng cơ bản gồm loại phản quang \"Reflective\" và \"Non-Reflective\". Với những bạn trẻ thích sự nổi bật, muốn thể hiện đẳng cấp và cá tính của bản thân nên chọn loại giày phản quang. Ban đêm khi có ánh đèn chiếu vào thì toàn thân giày sẽ tỏa sáng rực rỡ & phần dây sẽ sáng nổi bật hơn so với phần thân.\r\n\r\nYeezy 350 v2 Lundmark phản quang trong tối khi chụp đèn Flash\r\nYeezy 350 v2 Lundmark phản quang trong tối khi chụp đèn Flash', b'0', 1, 0, '2021-10-04 00:00:00', '2021-10-04 00:00:00'),
(17, 'ADIDAS YEEZY BOOST 380 MIST', 4500000, 0, 'tt3.jpg', '', b'1', 1, 0, '2021-10-04 00:00:00', '2021-10-04 00:00:00'),
(18, 'PUMA DISC BLAZE BAPE CAMO GREEN', 6800000, 0, 'sp16.jpg', '', b'1', 1, 2, '0000-00-00 00:00:00', '2021-10-04 00:00:00'),
(19, 'AIR JORDAN SHATTERED', 5800000, 0, 'sp4.jpg', '', b'1', 6, 2, '2021-10-04 00:00:00', '2021-10-04 00:00:00'),
(20, 'NIKE AIR VALENTINE\'S DAY', 10000000, 0, 'sp13.jpg', '', b'1', 6, 1, '2021-10-04 00:00:00', '2021-10-04 00:00:00'),
(21, 'NIKE WMNS AF1 SHADOW', 4500000, 0, 'sp6.jpg', '', b'0', 1, 0, '2021-10-04 00:00:00', '2021-10-04 00:00:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khach_hang`
--

CREATE TABLE `khach_hang` (
  `ma_kh` varchar(25) NOT NULL,
  `ten_kh` varchar(50) NOT NULL,
  `mat_khau` varchar(25) NOT NULL,
  `hinh` varchar(70) NOT NULL,
  `email` varchar(50) NOT NULL,
  `vai_tro` varchar(25) NOT NULL,
  `kich_hoat` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `khach_hang`
--

INSERT INTO `khach_hang` (`ma_kh`, `ten_kh`, `mat_khau`, `hinh`, `email`, `vai_tro`, `kich_hoat`) VALUES
('admin', 'admin', 'admin123', '226163119_536882137364994_8806986300201056448_n.jpg', 'namnvph16599@fpt.edu.vn', 'Admin', 'Đã kích hoạt'),
('nam04022002', 'Vanh Nam', 'Vanhnam042', '187955300_3070969206512790_2493826587862216734_n.jpg', 'namnvph16599@fpt.edu.vn', 'Admin', 'Đã kích hoạt'),
('vanhnam042', 'Ngô Vanh Nam', 'Vanhnam042', '226163119_536882137364994_8806986300201056448_n.jpg', 'anh02284@gmail.com', 'Khách hàng', 'Đã kích hoạt');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loai_hang`
--

CREATE TABLE `loai_hang` (
  `ma_loai` int(11) NOT NULL,
  `ten_loai` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `loai_hang`
--

INSERT INTO `loai_hang` (`ma_loai`, `ten_loai`) VALUES
(1, 'Giày JORDAN'),
(2, 'Giày Converse '),
(3, 'Giày Vans'),
(4, 'Giày Adidas'),
(5, 'Giày Puma'),
(6, 'Giày NIKE');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `slider`
--

CREATE TABLE `slider` (
  `ma_slide` int(11) NOT NULL,
  `ten_slide` varchar(255) NOT NULL,
  `hinh` varchar(150) NOT NULL,
  `url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `slider`
--

INSERT INTO `slider` (`ma_slide`, `ten_slide`, `hinh`, `url`) VALUES
(0, 'slider 1 ', 'banner2.jpg', ''),
(12, 'slider 2', 'banner3.jpg', ''),
(13, 'slidee 5', 'banner4.jpg', ''),
(14, 'slider 3', 'banner5.jpg', ''),
(15, 'slider 4', 'banner6.jpg', '');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  ADD PRIMARY KEY (`ma_bl`);

--
-- Chỉ mục cho bảng `cau_hinh`
--
ALTER TABLE `cau_hinh`
  ADD PRIMARY KEY (`ma_ch`);

--
-- Chỉ mục cho bảng `hang_hoa`
--
ALTER TABLE `hang_hoa`
  ADD PRIMARY KEY (`ma_hh`);

--
-- Chỉ mục cho bảng `khach_hang`
--
ALTER TABLE `khach_hang`
  ADD PRIMARY KEY (`ma_kh`);

--
-- Chỉ mục cho bảng `loai_hang`
--
ALTER TABLE `loai_hang`
  ADD PRIMARY KEY (`ma_loai`);

--
-- Chỉ mục cho bảng `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`ma_slide`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  MODIFY `ma_bl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT cho bảng `cau_hinh`
--
ALTER TABLE `cau_hinh`
  MODIFY `ma_ch` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `hang_hoa`
--
ALTER TABLE `hang_hoa`
  MODIFY `ma_hh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT cho bảng `loai_hang`
--
ALTER TABLE `loai_hang`
  MODIFY `ma_loai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT cho bảng `slider`
--
ALTER TABLE `slider`
  MODIFY `ma_slide` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
