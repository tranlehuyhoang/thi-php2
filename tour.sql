-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3309
-- Thời gian đã tạo: Th2 28, 2024 lúc 03:58 AM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `tour`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tour`
--

CREATE TABLE `tour` (
  `MaTour` int(11) NOT NULL,
  `DiaDiem` varchar(100) DEFAULT NULL,
  `NgayKhoiHanh` date DEFAULT NULL,
  `SoLuongKhach` int(11) DEFAULT NULL,
  `PhuongTien` varchar(50) DEFAULT NULL,
  `GiaBan` int(11) DEFAULT NULL,
  `dat` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tour`
--

INSERT INTO `tour` (`MaTour`, `DiaDiem`, `NgayKhoiHanh`, `SoLuongKhach`, `PhuongTien`, `GiaBan`, `dat`) VALUES
(1, 'Đà Nẵng', '2024-03-01', 20, 'xe-khach', 200000, 0),
(2, 'Hội An', '2027-02-03', 15, 'may-bay', 300000, 0),
(3, 'Nha Trang', '2022-03-01', 10, 'xe-khach', 150000, 0),
(4, 'Phú Quốc', '2022-04-01', 25, 'may-bay', 400000, 0),
(5, 'Hạ Long', '2022-05-01', 30, 'xe-khach', 250000, 0),
(6, 'Sapa', '2022-06-01', 12, 'may-bay', 350000, 0),
(7, 'Đà Lạt', '2022-07-01', 18, 'xe-khach', 180000, 0),
(8, 'Vũng Tàu', '2022-08-01', 22, 'may-bay', 320000, 0),
(9, 'Cần Thơ', '2022-09-01', 8, 'xe-khach', 120000, 0),
(10, 'Buôn Ma Thuột', '2022-10-01', 14, 'may-bay', 280000, 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tour`
--
ALTER TABLE `tour`
  ADD PRIMARY KEY (`MaTour`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
