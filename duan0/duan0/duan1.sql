-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 04, 2023 lúc 03:54 AM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `duan1`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bill`
--

CREATE TABLE `bill` (
  `id_bill` int(11) NOT NULL,
  `ho_ten` varchar(50) NOT NULL,
  `dia_chi` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `ngay_dat_hang` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `total` float NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `sdt` varchar(11) NOT NULL,
  `pttt` varchar(50) NOT NULL,
  `id` int(11) NOT NULL DEFAULT 0,
  `tiensauthue` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `bill`
--

INSERT INTO `bill` (`id_bill`, `ho_ten`, `dia_chi`, `email`, `ngay_dat_hang`, `total`, `status`, `sdt`, `pttt`, `id`, `tiensauthue`) VALUES
(170, 'leduykhoa1b', 'nhan biều 12', 'leduy.khoa671@gmail.com', '2023-12-02 13:55:33', 130013000, 0, '0823010234', 'Thanh toán khi nhận hàng', 22, 0),
(171, 'leduykhoa1b', 'nhan biều 12', 'leduy.khoa671@gmail.com', '2023-12-02 13:57:59', 130013000, 0, '0823010234', 'Thanh toán khi nhận hàng', 22, 0),
(172, 'leduykhoa1b', 'nhan biều 12', 'leduy.khoa671@gmail.com', '2023-12-02 13:58:04', 195020000, 0, '0823010234', 'Thanh toán khi nhận hàng', 22, 0),
(173, 'leduykhoa1b', 'nhan biều 12', 'leduy.khoa671@gmail.com', '2023-12-02 13:58:24', 195020000, 0, '0823010234', 'Thanh toán khi nhận hàng', 22, 0),
(174, 'leduykhoa1b', 'nhan biều 12', 'leduy.khoa671@gmail.com', '2023-12-02 13:58:25', 195020000, 0, '0823010234', 'Thanh toán khi nhận hàng', 22, 0),
(175, 'leduykhoa1b', 'nhan biều 12', 'leduy.khoa671@gmail.com', '2023-12-02 13:58:36', 195020000, 0, '0823010234', 'Thanh toán khi nhận hàng', 22, 0),
(176, 'leduykhoa1b', 'nhan biều 12', 'leduy.khoa671@gmail.com', '2023-12-02 13:58:53', 195020000, 0, '0823010234', 'Thanh toán khi nhận hàng', 22, 0),
(177, 'leduykhoa1b', 'nhan biều 12', 'leduy.khoa671@gmail.com', '2023-12-02 13:59:09', 260026000, 0, '0823010234', 'Thanh toán khi nhận hàng', 22, 0),
(178, 'leduykhoa1b', 'nhan biều 12', 'leduy.khoa671@gmail.com', '2023-12-02 13:59:37', 260026000, 0, '0823010234', 'Thanh toán khi nhận hàng', 22, 0),
(179, 'leduykhoa1b', 'nhan biều 12', 'leduy.khoa671@gmail.com', '2023-12-02 14:02:00', 260026000, 0, '0823010234', 'Thanh toán khi nhận hàng', 22, 0),
(180, 'leduykhoa1b', 'nhan biều 12', 'leduy.khoa671@gmail.com', '2023-12-02 14:02:06', 325033000, 0, '0823010234', 'Thanh toán khi nhận hàng', 22, 0),
(181, 'leduykhoa1b', 'nhan biều 12', 'leduy.khoa671@gmail.com', '2023-12-02 14:02:51', 325033000, 0, '0823010234', 'Thanh toán khi nhận hàng', 22, 0),
(182, 'leduykhoa1b', 'nhan biều 12', 'leduy.khoa671@gmail.com', '2023-12-02 14:02:58', 390039000, 0, '0823010234', 'Thanh toán khi nhận hàng', 22, 0),
(183, 'leduykhoa1b', 'nhan biều 12', 'leduy.khoa671@gmail.com', '2023-12-02 14:03:36', 390039000, 0, '0823010234', 'Thanh toán khi nhận hàng', 22, 0),
(184, 'leduykhoa1b', 'nhan biều 12', 'leduy.khoa671@gmail.com', '2023-12-02 14:03:42', 455046000, 0, '0823010234', 'Thanh toán khi nhận hàng', 22, 0),
(185, 'leduykhoa1b', 'nhan biều 12', 'leduy.khoa671@gmail.com', '2023-12-02 14:04:45', 455046000, 0, '0823010234', 'Thanh toán khi nhận hàng', 22, 0),
(186, 'leduykhoa1b', 'nhan biều 12', 'leduy.khoa671@gmail.com', '2023-12-02 14:04:51', 520052000, 0, '0823010234', 'Thanh toán khi nhận hàng', 22, 0),
(187, 'leduykhoa1b', 'nhan biều 12', 'leduy.khoa671@gmail.com', '2023-12-03 16:11:27', 520052000, 1, '0823010234', 'Thanh toán khi nhận hàng', 22, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binh_luan`
--

CREATE TABLE `binh_luan` (
  `ma_bl` int(11) NOT NULL,
  `noi_dung` varchar(255) NOT NULL,
  `ma_hh` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `ngay_bl` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart`
--

CREATE TABLE `cart` (
  `id_cart` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `ma_hanghoa` int(11) NOT NULL,
  `hinh` varchar(200) NOT NULL,
  `ten_hanghoa` varchar(50) NOT NULL,
  `don_gia` float NOT NULL,
  `so_luong` int(11) NOT NULL,
  `thanh_tien` float NOT NULL,
  `ngay_khoihang` date NOT NULL,
  `dia_diem` varchar(55) NOT NULL,
  `id_bill` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `cart`
--

INSERT INTO `cart` (`id_cart`, `id`, `ma_hanghoa`, `hinh`, `ten_hanghoa`, `don_gia`, `so_luong`, `thanh_tien`, `ngay_khoihang`, `dia_diem`, `id_bill`) VALUES
(166, 22, 141, 'img/5c0e94370cd51.jpg', 'DU LỊCH MÙA XUÂN NƯỚC ANH: VƯƠNG QUỐC ANH - XỨ WAL', 65000000, 1, 65000000, '2023-11-29', ' Hồ Chí Minh', 187),
(167, 22, 141, 'img/5c0e94370cd51.jpg', 'DU LỊCH MÙA XUÂN NƯỚC ANH: VƯƠNG QUỐC ANH - XỨ WAL', 65000000, 1, 65000000, '2023-11-29', ' Hồ Chí Minh', 187),
(168, 22, 141, 'img/5c0e94370cd51.jpg', 'DU LỊCH MÙA XUÂN NƯỚC ANH: VƯƠNG QUỐC ANH - XỨ WAL', 65000000, 1, 65000000, '2023-11-29', ' Hồ Chí Minh', 187),
(169, 22, 141, 'img/5c0e94370cd51.jpg', 'DU LỊCH MÙA XUÂN NƯỚC ANH: VƯƠNG QUỐC ANH - XỨ WAL', 65000000, 1, 65000000, '2023-11-29', ' Hồ Chí Minh', 187),
(170, 22, 141, 'img/5c0e94370cd51.jpg', 'DU LỊCH MÙA XUÂN NƯỚC ANH: VƯƠNG QUỐC ANH - XỨ WAL', 65000000, 1, 65000000, '2023-11-29', ' Hồ Chí Minh', 187),
(171, 22, 141, 'img/5c0e94370cd51.jpg', 'DU LỊCH MÙA XUÂN NƯỚC ANH: VƯƠNG QUỐC ANH - XỨ WAL', 65000000, 1, 65000000, '2023-11-29', ' Hồ Chí Minh', 187),
(172, 22, 141, 'img/5c0e94370cd51.jpg', 'DU LỊCH MÙA XUÂN NƯỚC ANH: VƯƠNG QUỐC ANH - XỨ WAL', 65000000, 1, 65000000, '2023-11-29', ' Hồ Chí Minh', 187),
(173, 22, 141, 'img/5c0e94370cd51.jpg', 'DU LỊCH MÙA XUÂN NƯỚC ANH: VƯƠNG QUỐC ANH - XỨ WAL', 65000000, 1, 65000000, '2023-11-29', ' Hồ Chí Minh', 187);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `creatory`
--

CREATE TABLE `creatory` (
  `ma_loai` int(11) NOT NULL,
  `ten_loai` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `creatory`
--

INSERT INTO `creatory` (`ma_loai`, `ten_loai`) VALUES
(59, 'Du Lịch Miền Bắc'),
(60, 'Du Lịch Miền Trung');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khach_hang`
--

CREATE TABLE `khach_hang` (
  `mat_khau` varchar(50) NOT NULL,
  `ho_ten` varchar(50) NOT NULL,
  `kich_hoat` tinyint(4) NOT NULL,
  `hinh` varchar(200) NOT NULL,
  `email` varchar(50) NOT NULL,
  `vai_tro` tinyint(2) NOT NULL,
  `dia_chi` varchar(200) NOT NULL,
  `id` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `sdt` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `khach_hang`
--

INSERT INTO `khach_hang` (`mat_khau`, `ho_ten`, `kich_hoat`, `hinh`, `email`, `vai_tro`, `dia_chi`, `id`, `user`, `sdt`) VALUES
('18022004aa', 'KIM RI DO', 0, 'logo.jpg', 'leduykhoa100a@gmail.com', 1, 'nhan biều 1a', 19, 'leduykhoa1', '0823010234'),
('18022004a', '', 1, '', 'leduykhoa1@gmail.com', 0, '', 20, 'leduykhoa1a', ''),
('18022004a', '', 1, '', 'leduy.khoa456789@gmail.com', 0, '', 21, 'leduykhoa10', ''),
('18022004a', 'LE DUY KHOA', 0, '0dcfb548989afdf22afff75e2a46a508.jpg', 'leduy.khoa671@gmail.com\n', 0, 'nhan biều 12', 22, 'leduykhoa1b', '0823010234'),
('18022004a', '', 0, '', 'leduykhoa1b@gmail.com', 0, '', 23, 'leduykhoa1bb', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `ma_hanghoa` int(11) NOT NULL,
  `ten_hanghoa` varchar(50) DEFAULT NULL,
  `don_gia` float NOT NULL,
  `hinh` varchar(50) NOT NULL,
  `ngay_khoihang` date NOT NULL,
  `so_luot_xem` int(11) NOT NULL,
  `mo_ta` varchar(7000) NOT NULL,
  `dia_diem` varchar(55) NOT NULL,
  `iddm` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`ma_hanghoa`, `ten_hanghoa`, `don_gia`, `hinh`, `ngay_khoihang`, `so_luot_xem`, `mo_ta`, `dia_diem`, `iddm`) VALUES
(141, 'DU LỊCH MÙA XUÂN NƯỚC ANH: VƯƠNG QUỐC ANH - XỨ WAL', 65000000, '5c0e94370cd51.jpg', '2023-11-29', 100, 'Phương tiện: Máy bay - Xe ô tô\r\n Thời gian: 7 ngày 6 đêm\r\n Ngày khởi hành: 05/03/2024\r\nNgày 1. TP. HCM LONDON\r\n16:00 Đoàn tập trung tại sân bay Tân Sơn Nhất làm thủ tục khởi hành đi London - –  thủ đô nổi tiếng của vương quốc Anh được xem là một trong những thành phố du lịch hấp dẫn nhất trên Thế Giới,  trên chuyến bay QR971 lúc 19:55 (Quá cảnh tại Doha).\r\n\r\nĐoàn nghỉ đêm trên máy bay.\r\n\r\nNgày 2. LONDON - AMESBURY – BATHS - BRISTOLThu gọn \r\nĂn trưaĂn tối\r\n06:25 Đoàn tới sân bay London Heathrow. Xe đưa đoàn tham quan thị trấn Amesbury. Qúy khách tham quan :\r\n\r\nBãi đá cổ Stonehenge Site - được tạo hình vòng tròn có thể như đây là 1 trạm quan sát thiên văn hoặc phục vụ cho một nghi thức liên quan đến mặt trời và trái đất và ước tính có từ 5000 năm trước. Đây cũng là một trong những nơi bí ẩn nhất trên hành tinh. Cho tới nay vẫn chưa có thể nói được ai đã tạo ra những tảng đá lớn đó và để làm gì.\r\nSau đó, quý khách di chuyển đến thành phố Bath, tham quan :\r\n\r\nTu viện Bath và Nhà tắm La Mã cổ với nguồn nước khoáng nóng được phát hiện từ cách đây hơn 2000 năm.\r\nQuý khách chiêm ngưỡng Vòng cung Hoàng gia Royal Crescent từng là nơi cư trú của tầng lớp thượng lưu và chiếc cầu Pulteney với kiến trúc cầu phố độc đáo bắc qua dòng sông Avon.\r\n', ' Hồ Chí Minh', 60),
(143, 'DU LỊCH : DU XUÂN KHÁM PHÁ AI CẬP HUYỀN BÍ (M2 TẾT', 79990000, 'dulich2.jpg', '2023-11-29', 10, 'Ngày 1. TP HCM - DOHA\r\n06:00 Đoàn tập trung tại Sân bay Quốc tế Tân Sơn Nhất. Hướng dẫn viên đón và hướng dẫn Quý khách làm thủ tục check-in. Đón chuyến bay QR975 cất cánh lúc 08:55 đi Cairo (quá cảnh tại Doha)\r\n\r\n17:50 Đoàn đến sân bay Cairo – Ai Cập, Làm thủ tục nhập cảnh. Xe đón đoàn đến nhà hàng, dùng bữa tối.', ' Hồ Chí Minh', 60),
(144, 'DU LỊCH HOA KỲ - LIÊN TUYẾN ĐÔNG TÂY: NEW YORK – P', 111990000, 'dulich3.jpg', '2023-11-29', 70, 'Ngày 1. TP. HCM - HÀN QUỐC\r\n21:00 Đoàn tập trung tại Sân bay Quốc tế Tân Sơn Nhất, Hướng dẫn viên BenThanh Tourist đón và hướng dẫn Quý khách làm thủ tục đón chuyến bay OZ 736 đi Incheon (Hàn Quốc) khởi hành lúc 00:10 (ngày hôm sau).', ' Hồ Chí Minh', 60),
(145, 'TOUR OF THE YEAR 2024: PHẦN LAN - THỤY ĐIỂN - NA U', 99900000, 'dulich4.jpg', '2023-11-29', 50, 'Ngày 1. TP.HCM – ISTANBUL\r\n18:30 Quý khách tập trung tại sân bay Tân Sơn Nhất. HDV BenThanh Tourist đón và cùng Quý khách làm thủ tục đáp chuyến bay TK163 của hãng hàng không Turkish Airlines đi Istanbul cất cánh lúc 21:25.\r\n\r\nQúy khách nghỉ đêm trên máy bay.', ' Hồ Chí Minh', 60),
(147, 'DU LỊCH MÙA XUÂN NƯỚC ANH: VƯƠNG QUỐC ANH - XỨ WAL', 65000000, '5c0e94370cd51.jpg', '2023-11-29', 10, 'Phương tiện: Máy bay - Xe ô tô\r\n Thời gian: 7 ngày 6 đêm\r\n Ngày khởi hành: 05/03/2024\r\nNgày 1. TP. HCM LONDON\r\n16:00 Đoàn tập trung tại sân bay Tân Sơn Nhất làm thủ tục khởi hành đi London - –  thủ đô nổi tiếng của vương quốc Anh được xem là một trong những thành phố du lịch hấp dẫn nhất trên Thế Giới,  trên chuyến bay QR971 lúc 19:55 (Quá cảnh tại Doha).\r\n\r\nĐoàn nghỉ đêm trên máy bay.\r\n\r\n', ' Hồ Chí Minh', 60),
(148, 'DU LỊCH : DU XUÂN KHÁM PHÁ AI CẬP HUYỀN BÍ (M2 TẾT', 79990000, 'dulich2.jpg', '2023-11-29', 2, 'Ngày 1. TP HCM - DOHA\r\n06:00 Đoàn tập trung tại Sân bay Quốc tế Tân Sơn Nhất. Hướng dẫn viên đón và hướng dẫn Quý khách làm thủ tục check-in. Đón chuyến bay QR975 cất cánh lúc 08:55 đi Cairo (quá cảnh tại Doha)\r\n\r\n17:50 Đoàn đến sân bay Cairo – Ai Cập, Làm thủ tục nhập cảnh. Xe đón đoàn đến nhà hàng, dùng bữa tối.', ' Hồ Chí Minh', 60),
(149, 'TOUR OF THE YEAR 2024: PHẦN LAN - THỤY ĐIỂN - NA U', 99900000, 'dulich4.jpg', '2023-11-29', 4, 'Ngày 1. TP.HCM – ISTANBUL\r\n18:30 Quý khách tập trung tại sân bay Tân Sơn Nhất. HDV BenThanh Tourist đón và cùng Quý khách làm thủ tục đáp chuyến bay TK163 của hãng hàng không Turkish Airlines đi Istanbul cất cánh lúc 21:25.\r\n\r\nQúy khách nghỉ đêm trên máy bay.', ' Hồ Chí Minh', 60),
(150, 'TOUR OF THE YEAR 2024: PHẦN LAN - THỤY ĐIỂN - NA U', 99900000, 'dulich4.jpg', '2023-11-29', 2, 'Ngày 1. TP.HCM – ISTANBUL\r\n18:30 Quý khách tập trung tại sân bay Tân Sơn Nhất. HDV BenThanh Tourist đón và cùng Quý khách làm thủ tục đáp chuyến bay TK163 của hãng hàng không Turkish Airlines đi Istanbul cất cánh lúc 21:25.\r\n\r\nQúy khách nghỉ đêm trên máy bay.', ' Hồ Chí Minh', 60),
(151, 'DU LỊCH ĐÀ NẴNG: HỘI AN - BÀ NÀ - HUẾ - QUẢNG BÌNH', 8390000, 'dulich5.jpg', '2023-11-29', 10, 'Ngày 1. TPHCM - ĐÀ NẴNG - BÁN ĐẢO SƠN TRÀ - NGŨ HÀNH SƠN - HỘI AN\r\nĂn sángĂn trưaĂn tối\r\nSáng: HDV BenThanh Tourist đón quý khách tại ga đi trong nước sân bay Tân Sơn Nhất làm thủ tục chuyến bay Vietjet lúc 08:50 khởi hành đi Đà Nẵng. \r\n\r\n10:10 Đến sân bay Đà Nẵng, HDV BenThanh Tourist sẽ đón Quý khách tham quan:\r\n\r\nBán Đảo Sơn Trà – Rừng già giữa lòng phố trẻ. Viếng Linh Ứng Tự - nơi có tượng Phật Bà 67m hướng ra biển Đông. ', ' Hồ Chí Minh', 59),
(152, 'DU LỊCH ĐÔNG BẮC (TẾT ÂM LỊCH 2024): HÀ GIANG - ĐỒ', 12990000, 'dulich6.jpg', '2023-11-29', 0, 'Ngày 1. TP.HCM - HÀ NỘI - HÀ GIANG\r\nĂn sángĂn trưaĂn chiều\r\nSáng: Quý khách tập trung tại ga đi trong nước sân bay Tân Sơn Nhất. HDV BenThanh Tourist đón Quý khách làm thủ tục khởi hành đi Hà Nội\r\n\r\n(Giờ bay dự Vietjet kiến khởi hành lúc 06h00 Sài Gòn – 08h00 Hà Nội)\r\n\r\nQuý khách dùng bữa sáng trước khi bay \r\n\r\nĐến sân bay Nội Bài. Xe đón Quý khách khởi hành đi Hà Giang', 'Hồ Chí Minh', 59),
(153, 'DU LỊCH ĐÔNG BẮC (TẾT ÂM LỊCH 2024): HÀ GIANG - ĐỒ', 13790000, 'dulich7.jpg', '2023-11-29', 0, 'Ngày 1. TP.HCM - HÀ NỘI - HÀ GIANG\r\nĂn sángĂn trưa\r\nSáng: Quý khách tập trung tại ga đi trong nước sân bay Tân Sơn Nhất. HDV BenThanh Tourist đón Quý khách làm thủ tục khởi hành đi Hà Nội\r\n\r\n(Giờ bay dự Vietjet kiến khởi hành lúc 06:00 Sài Gòn – 08:00 Hà Nội)\r\n\r\nQuý khách dùng bữa sáng trước khi bay \r\n\r\nĐến sân bay Nội Bài. Xe đón Quý khách khởi hành đi Hà Giang\r\n\r\nTrưa: Quý khách dừng chân ăn trưa tại nhà hàng', ' Hồ Chí Minh', 59),
(154, 'DU LỊCH MIỀN BẮC (TẾT ÂM LỊCH 2024): HÀ NỘI - TUYỆ', 16590000, 'dulich8.jpg', '2023-11-29', 0, 'Ngày 1. TP.HCM - HÀ NỘI - NINH BÌNH\r\nĂn sángĂn trưaĂn chiều\r\nSáng: Quý khách tập trung tại ga đi trong nước sân bay Tân Sơn Nhất. HDV BenThanh Tourist đón Quý khách làm thủ tục khởi hành đi Hà Nội \r\n\r\n(Giờ bay Vietjet dự kiến khởi hành lúc 07:00 Sài Gòn – 09:10 Hà Nội)\r\n\r\nĐoàn ăn sáng tại sân bay\r\n\r\nĐến sân bay Nội Bài, xe đưa Quý khách khởi hành đi Ninh Bình  \r\n\r\n Trưa: Đoàn dùng bữa trưa tại nhà hàng\r\n\r\n Chiều: Đoàn đi tham quan:', 'Hồ Chí Minh', 59);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id_bill`);

--
-- Chỉ mục cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  ADD PRIMARY KEY (`ma_bl`),
  ADD KEY `lk_sanpham_danhmuc` (`id`);

--
-- Chỉ mục cho bảng `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id_cart`);

--
-- Chỉ mục cho bảng `creatory`
--
ALTER TABLE `creatory`
  ADD PRIMARY KEY (`ma_loai`);

--
-- Chỉ mục cho bảng `khach_hang`
--
ALTER TABLE `khach_hang`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`ma_hanghoa`),
  ADD KEY `lk_sanpham_danhmuc` (`iddm`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `bill`
--
ALTER TABLE `bill`
  MODIFY `id_bill` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=188;

--
-- AUTO_INCREMENT cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  MODIFY `ma_bl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT cho bảng `cart`
--
ALTER TABLE `cart`
  MODIFY `id_cart` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=174;

--
-- AUTO_INCREMENT cho bảng `creatory`
--
ALTER TABLE `creatory`
  MODIFY `ma_loai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT cho bảng `khach_hang`
--
ALTER TABLE `khach_hang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `ma_hanghoa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=155;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
