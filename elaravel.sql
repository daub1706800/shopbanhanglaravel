-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 03, 2021 lúc 08:39 AM
-- Phiên bản máy phục vụ: 10.4.17-MariaDB
-- Phiên bản PHP: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `elaravel`
--
CREATE DATABASE IF NOT EXISTS `elaravel` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `elaravel`;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin_roles`
--

CREATE TABLE `admin_roles` (
  `id_admin_roles` int(11) NOT NULL,
  `admin_admin_id` int(11) UNSIGNED NOT NULL,
  `roles_id_roles` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `admin_roles`
--

INSERT INTO `admin_roles` (`id_admin_roles`, `admin_admin_id`, `roles_id_roles`) VALUES
(1, 1, 1),
(2, 2, 2),
(8, 5, 3),
(32, 7, 3),
(33, 4, 1),
(34, 3, 3),
(35, 6, 3),
(36, 6, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_01_30_111832_create_tbl_admin_table', 1),
(5, '2021_01_31_080343_create_tbl_category_product', 1),
(6, '2021_01_31_104550_create_tbl_brand_product', 1),
(7, '2021_01_31_124000_create_tbl_brand_product', 2),
(8, '2021_01_31_134138_create_tbl_product', 3),
(9, '2021_02_20_051049_tbl_customer', 4),
(10, '2021_02_20_060233_tbl_shipping', 5),
(11, '2021_02_21_111106_tbl_payment', 6),
(12, '2021_02_21_111301_tbl_order', 6),
(13, '2021_02_21_111350_tbl_order_details', 6);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_address`
--

CREATE TABLE `tbl_address` (
  `customer_id` int(11) NOT NULL,
  `customer_address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_address`
--

INSERT INTO `tbl_address` (`customer_id`, `customer_address`) VALUES
(7, 'Ctu 234');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int(10) UNSIGNED NOT NULL,
  `admin_email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `admin_email`, `admin_password`, `admin_name`, `admin_phone`, `created_at`, `updated_at`) VALUES
(1, 'dauadmin@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'dauadmin', '123423', NULL, NULL),
(2, 'dauauthor@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'dauauthor', '123423', NULL, NULL),
(3, 'dauuser@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'dauuser', '123423', NULL, NULL),
(4, 'admin@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Đẩu', '0869184538', NULL, NULL),
(6, 'thaob1706800@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Thao', '08691845233', NULL, NULL),
(7, 'Tamb1706869@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Tam', '13124123', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_brand`
--

CREATE TABLE `tbl_brand` (
  `brand_id` int(10) UNSIGNED NOT NULL,
  `brand_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_status` int(11) NOT NULL,
  `brand_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_brand`
--

INSERT INTO `tbl_brand` (`brand_id`, `brand_name`, `brand_status`, `brand_desc`, `created_at`, `updated_at`) VALUES
(2, 'Samsung', 0, '.', NULL, NULL),
(4, 'Apple', 0, 'apple', NULL, NULL),
(10, 'Xiaomi', 1, 'China', NULL, NULL),
(11, 'Huawei', 1, 'TQ', NULL, NULL),
(12, 'Oppo', 1, 'oppo', NULL, NULL),
(13, 'Vivo', 1, 'vivo', NULL, NULL),
(14, 'Realme', 1, 'realme', NULL, NULL),
(15, 'Macbook', 0, ',', NULL, NULL),
(16, 'Asus', 1, 'pc', NULL, NULL),
(17, 'Hp', 1, ',', NULL, NULL),
(18, 'Lenovo', 1, '.', NULL, NULL),
(19, 'Acer', 1, '.', NULL, NULL),
(20, 'Dell', 0, 'Dell', NULL, NULL),
(23, 'OEM', 1, '<p>Chảo chống d&iacute;nh</p>', NULL, NULL),
(24, 'Sony', 0, '<p>Sony</p>', NULL, NULL),
(25, 'Rapoo', 0, '<p>Chuột</p>', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_category_product`
--

CREATE TABLE `tbl_category_product` (
  `category_id` int(10) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_status` int(11) NOT NULL,
  `category_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_category_product`
--

INSERT INTO `tbl_category_product` (`category_id`, `category_name`, `category_status`, `category_desc`, `created_at`, `updated_at`) VALUES
(8, 'SmartPhone', 0, 'Dien thoai', NULL, NULL),
(10, 'Máy tính bảng', 0, 'PC', NULL, NULL),
(11, 'Laptop', 0, 'laptop', NULL, NULL),
(14, 'Phụ kiện', 0, '<p>s</p>', NULL, NULL),
(16, 'Đồ dùng', 1, '<p>Nội trợ</p>', NULL, NULL),
(17, 'TiVi', 0, '<p>Tivi truyền h&igrave;nh</p>', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_coupon`
--

CREATE TABLE `tbl_coupon` (
  `coupon_id` int(11) NOT NULL,
  `coupon_name` varchar(150) NOT NULL,
  `coupon_code` varchar(50) NOT NULL,
  `coupon_time` int(50) NOT NULL,
  `coupon_number` int(11) NOT NULL,
  `coupon_condition` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_coupon`
--

INSERT INTO `tbl_coupon` (`coupon_id`, `coupon_name`, `coupon_code`, `coupon_time`, `coupon_number`, `coupon_condition`) VALUES
(1, '8thang3', '8/3', 50, 20, 1),
(2, 'covid19', 'covid19', 50, 200000, 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_customers`
--

CREATE TABLE `tbl_customers` (
  `customer_id` int(10) UNSIGNED NOT NULL,
  `customer_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_customers`
--

INSERT INTO `tbl_customers` (`customer_id`, `customer_name`, `customer_email`, `customer_password`, `customer_address`, `customer_phone`, `created_at`, `updated_at`) VALUES
(7, 'Đẩu', 'admin@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '346,Cay Lậy,Tiền Giang', '0869184538', NULL, NULL),
(8, 'Tâm', 'tam@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Vĩnh long', '0869184539', NULL, NULL),
(9, 'Thảo La', 'thao@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Caan tho', '1234534234', NULL, NULL),
(10, 'Hải', 'hai@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'An Giang', '0869184541', NULL, NULL),
(11, 'đạt', 'dat@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '346,Bình Trị,Bình Phú,Cai Lậy,Tiền Giang', '0869184538', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_order`
--

CREATE TABLE `tbl_order` (
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` int(11) NOT NULL,
  `shipping_id` int(11) NOT NULL,
  `payment_id` int(11) NOT NULL,
  `order_total` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_status` tinyint(1) NOT NULL,
  `order_destroy` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_order`
--

INSERT INTO `tbl_order` (`order_id`, `customer_id`, `shipping_id`, `payment_id`, `order_total`, `order_status`, `order_destroy`, `created_at`, `updated_at`) VALUES
(32, 8, 21, 32, '10,890,000.00', 1, NULL, '2021-04-07 08:44:03', '2021-04-08 08:44:07'),
(42, 8, 27, 42, '54,413,700.00', 2, 'Thích thì hủy thôi', '2021-04-04 08:57:06', NULL),
(43, 8, 28, 43, '56,107,700.00', 1, 'Thich hủy đó', '2021-12-14 08:50:32', NULL),
(44, 8, 29, 44, '45,229,800.00', 3, 'Ko thich mua nua hii:))', '2021-12-20 08:50:28', NULL),
(45, 9, 30, 45, '22,614,900.00', 2, 'Thích thì hủy thôi', '2021-12-01 08:50:17', NULL),
(46, 9, 31, 46, '11,858,000.00', 1, 'Không muốn mua nữa', '2021-12-07 08:50:12', NULL),
(47, 9, 32, 47, '71,390,000.00', 1, 'ko', '2021-12-04 08:50:09', NULL),
(50, 9, 33, 50, '22,614,900.00', 1, NULL, '2021-12-03 08:50:05', NULL),
(51, 9, 34, 51, '21,767,900.00', 3, 'ss', '2021-12-28 08:50:01', NULL),
(52, 9, 35, 52, '10,890,000.00', 1, 'ss', '2021-12-22 08:49:54', NULL),
(53, 9, 37, 55, '22,614,900.00', 2, NULL, '2021-12-20 08:49:44', NULL),
(54, 9, 38, 56, '225,035,800.00', 2, 'sadas', '2021-12-24 08:49:39', NULL),
(55, 9, 39, 57, '45,229,800.00', 3, 'asdsa', '2021-12-22 08:49:36', NULL),
(56, 9, 40, 58, '45,229,800.00', 3, 'xssa', '2021-12-14 08:50:21', NULL),
(57, 9, 41, 59, '22,614,900.00', 3, 'sdasd', '2021-12-21 08:49:31', NULL),
(58, 8, 42, 60, '43,535,800.00', 3, 'Ko thích mua', '2021-12-21 08:50:25', NULL),
(59, 10, 43, 61, '10,890,000.00', 2, 'Ko muon mua nua', '2021-12-16 08:49:26', NULL),
(60, 7, 44, 62, '20,207,000.00', 1, NULL, '2021-12-01 09:00:00', NULL),
(61, 7, 45, 63, '20,207,000.00', 1, NULL, '2021-12-28 09:00:28', NULL),
(62, 7, 46, 64, '21,659,000.00', 2, NULL, '2021-12-09 09:00:25', NULL),
(63, 7, 48, 65, '60,500,000.00', 2, NULL, '2021-12-13 09:00:22', NULL),
(64, 7, 49, 66, '166,362,900.00', 1, NULL, '2021-12-31 08:50:47', NULL),
(65, 7, 50, 67, '90,725,800.00', 2, NULL, '2021-12-23 08:50:43', NULL),
(66, 7, 51, 68, '0.00', 1, NULL, '2021-12-21 08:50:40', NULL),
(67, 7, 52, 69, '5,929,000.00', 1, NULL, '2021-12-20 08:50:37', NULL),
(68, 7, 52, 70, '5,929,000.00', 1, NULL, '2021-12-20 09:00:17', NULL),
(69, 7, 52, 71, '5,929,000.00', 1, NULL, '2021-12-14 09:00:11', NULL),
(70, 7, 53, 72, '5,929,000.00', 2, NULL, '2021-12-21 09:00:14', NULL),
(71, 7, 54, 73, '22,614,900.00', 1, NULL, '2021-12-22 09:00:08', NULL),
(72, 7, 59, 74, '435,600.00', 1, NULL, '2021-12-07 09:00:57', NULL),
(73, 7, 61, 75, '20,207,000.00', 2, NULL, '2021-12-08 08:59:56', NULL),
(74, 7, 62, 76, '45,362,900.00', 3, 'ko thich mua nua', NULL, NULL),
(75, 11, 63, 77, '544,500.00', 2, NULL, '2021-12-09 08:49:18', NULL),
(76, 11, 64, 78, '21,659,000.00', 1, NULL, '2021-12-01 07:32:21', NULL),
(77, 7, 65, 79, '907,500.00', 1, NULL, '2021-12-14 09:00:04', NULL),
(78, 11, 66, 80, '21,767,900.00', 1, NULL, '2021-12-01 07:32:13', NULL),
(79, 11, 67, 81, '43,535,800.00', 2, NULL, '2021-12-01 07:31:54', '2021-12-02 07:32:02');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_order_details`
--

CREATE TABLE `tbl_order_details` (
  `order_details_id` bigint(20) UNSIGNED NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_sales_quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_order_details`
--

INSERT INTO `tbl_order_details` (`order_details_id`, `order_id`, `product_id`, `product_name`, `product_price`, `product_sales_quantity`, `created_at`, `updated_at`) VALUES
(1, 1, 31, 'Samsung Galaxy Z Fold2 5G', '50000000', 2, NULL, NULL),
(2, 2, 31, 'Samsung Galaxy Z Fold2 5G', '50000000', 2, NULL, NULL),
(3, 7, 31, 'Samsung Galaxy Z Fold2 5G', '50000000', 1, NULL, NULL),
(4, 9, 34, 'Laptop Dell Vostro 5402 i5 1135G7/8GB/256GB/Win10 (V4I5003W)', '18690000', 1, NULL, NULL),
(5, 10, 38, 'Iphone 12', '30000000', 1, NULL, NULL),
(6, 11, 34, 'Laptop Dell Vostro 5402 i5 1135G7/8GB/256GB/Win10 (V4I5003W)', '18690000', 1, NULL, NULL),
(7, 12, 34, 'Laptop Dell Vostro 5402 i5 1135G7/8GB/256GB/Win10 (V4I5003W)', '18690000', 1, NULL, NULL),
(8, 16, 39, 'Iphone 12', '100', 1, NULL, NULL),
(9, 17, 34, 'Laptop Dell Vostro 5402 i5 1135G7/8GB/256GB/Win10 (V4I5003W)', '18690000', 1, NULL, NULL),
(10, 17, 37, 'Ip8', '9000000', 1, NULL, NULL),
(11, 18, 34, 'Laptop Dell Vostro 5402 i5 1135G7/8GB/256GB/Win10 (V4I5003W)', '18690000', 1, NULL, NULL),
(12, 18, 37, 'Ip8', '9000000', 1, NULL, NULL),
(13, 19, 34, 'Laptop Dell Vostro 5402 i5 1135G7/8GB/256GB/Win10 (V4I5003W)', '18690000', 1, NULL, NULL),
(14, 19, 37, 'Ip8', '9000000', 1, NULL, NULL),
(15, 20, 35, 'Laptop Apple MacBook Air 2017 i5 1.8GHz/8GB/128GB (MQD32SA/A)', '17990000', 1, NULL, NULL),
(16, 20, 31, 'Samsung Galaxy Z Fold2 5G', '50000000', 2, NULL, NULL),
(17, 21, 32, 'Samsung Galaxy M51', '8990000', 1, NULL, NULL),
(18, 21, 31, 'Samsung Galaxy Z Fold2 5G', '50000000', 1, NULL, NULL),
(19, 22, 31, 'Samsung Galaxy Z Fold2 5G', '50000000', 1, NULL, NULL),
(20, 22, 37, 'Ip8', '9000000', 1, NULL, NULL),
(21, 23, 34, 'Laptop Dell Vostro 5402 i5 1135G7/8GB/256GB/Win10 (V4I5003W)', '18690000', 1, NULL, NULL),
(22, 23, 31, 'Samsung Galaxy Z Fold2 5G', '50000000', 1, NULL, NULL),
(23, 24, 36, 'Samsung Galaxy Tab A8 8\" T295 (2019)', '4900000', 12, NULL, NULL),
(24, 24, 32, 'Samsung Galaxy M51', '8990000', 1, NULL, NULL),
(25, 25, 37, 'Ip8', '9000000', 4, NULL, NULL),
(26, 25, 35, 'Laptop Apple MacBook Air 2017 i5 1.8GHz/8GB/128GB (MQD32SA/A)', '17990000', 1, NULL, NULL),
(27, 26, 37, 'Ip8', '9000000', 1, NULL, NULL),
(28, 27, 32, 'Samsung Galaxy M51', '8990000', 1, NULL, NULL),
(29, 28, 36, 'Samsung Galaxy Tab A8 8\" T295 (2019)', '4900000', 2, NULL, NULL),
(30, 28, 31, 'Samsung Galaxy Z Fold2 5G', '50000000', 4, NULL, NULL),
(31, 28, 34, 'Laptop Dell Vostro 5402 i5 1135G7/8GB/256GB/Win10 (V4I5003W)', '18690000', 4, NULL, NULL),
(32, 29, 36, 'Samsung Galaxy Tab A8 8\" T295 (2019)', '4900000', 4, NULL, NULL),
(33, 29, 37, 'Ip8', '9000000', 3, NULL, NULL),
(34, 32, 37, 'Ip8', '9000000', 1, NULL, NULL),
(35, 33, 35, 'Laptop Apple MacBook Air 2017 i5 1.8GHz/8GB/128GB (MQD32SA/A)', '17990000', 1, NULL, NULL),
(36, 33, 37, 'Ip8', '9000000', 2, NULL, NULL),
(37, 39, 37, 'Ip8', '9000000', 12, NULL, NULL),
(38, 40, 32, 'Samsung Galaxy M51', '8990000', 1, NULL, NULL),
(39, 40, 37, 'Ip8', '9000000', 3, NULL, NULL),
(40, 40, 31, 'Samsung Galaxy Z Fold2 5G', '50000000', 6, NULL, NULL),
(41, 41, 37, 'Ip8', '9000000', 100, NULL, NULL),
(42, 42, 37, 'Ip8', '9000000', 1, NULL, NULL),
(43, 42, 35, 'Laptop Apple MacBook Air 2017 i5 1.8GHz/8GB/128GB (MQD32SA/A)', '17990000', 1, NULL, NULL),
(44, 42, 32, 'Samsung Galaxy M51', '8990000', 2, NULL, NULL),
(45, 43, 34, 'Laptop Dell Vostro 5402 i5 1135G7/8GB/256GB/Win10 (V4I5003W)', '18690000', 2, NULL, NULL),
(46, 43, 32, 'Samsung Galaxy M51', '8990000', 1, NULL, NULL),
(47, 44, 34, 'Laptop Dell Vostro 5402 i5 1135G7/8GB/256GB/Win10 (V4I5003W)', '18690000', 2, NULL, NULL),
(48, 45, 34, 'Laptop Dell Vostro 5402 i5 1135G7/8GB/256GB/Win10 (V4I5003W)', '18690000', 1, NULL, NULL),
(49, 46, 36, 'Samsung Galaxy Tab A8 8\" T295 (2019)', '4900000', 2, NULL, NULL),
(50, 47, 31, 'Samsung Galaxy Z Fold2 5G', '50000000', 1, NULL, NULL),
(51, 47, 37, 'Ip8', '9000000', 1, NULL, NULL),
(52, 50, 34, 'Laptop Dell Vostro 5402 i5 1135G7/8GB/256GB/Win10 (V4I5003W)', '18690000', 1, NULL, NULL),
(53, 51, 35, 'Laptop Apple MacBook Air 2017 i5 1.8GHz/8GB/128GB (MQD32SA/A)', '17990000', 1, NULL, NULL),
(54, 52, 37, 'Ip8', '9000000', 1, NULL, NULL),
(55, 53, 34, 'Laptop Dell Vostro 5402 i5 1135G7/8GB/256GB/Win10 (V4I5003W)', '18690000', 1, NULL, NULL),
(56, 54, 35, 'Laptop Apple MacBook Air 2017 i5 1.8GHz/8GB/128GB (MQD32SA/A)', '17990000', 2, NULL, NULL),
(57, 54, 31, 'Samsung Galaxy Z Fold2 5G', '50000000', 3, NULL, NULL),
(58, 55, 34, 'Laptop Dell Vostro 5402 i5 1135G7/8GB/256GB/Win10 (V4I5003W)', '18690000', 2, NULL, NULL),
(59, 56, 34, 'Laptop Dell Vostro 5402 i5 1135G7/8GB/256GB/Win10 (V4I5003W)', '18690000', 2, NULL, NULL),
(60, 57, 34, 'Laptop Dell Vostro 5402 i5 1135G7/8GB/256GB/Win10 (V4I5003W)', '18690000', 1, NULL, NULL),
(61, 58, 35, 'Laptop Apple MacBook Air 2017 i5 1.8GHz/8GB/128GB (MQD32SA/A)', '17990000', 2, NULL, NULL),
(62, 59, 37, 'Iphone  8 plus', '9000000', 1, NULL, NULL),
(63, 60, 41, 'Tivi Sony 4K 55 inch KD-55X8050H', '16700000', 1, NULL, NULL),
(64, 61, 41, 'Tivi Sony 4K 55 inch KD-55X8050H', '16700000', 1, NULL, NULL),
(65, 62, 33, 'iPhone Xs 64GB', '17900000', 1, NULL, NULL),
(66, 63, 31, 'Samsung Galaxy Z Fold2 5G', '50000000', 1, NULL, NULL),
(67, 64, 42, 'Điện Thoại iPhone 13 Pro Max 256GB - Hàng Chính Hãng', '37490000', 1, NULL, NULL),
(68, 64, 31, 'Samsung Galaxy Z Fold2 5G', '50000000', 2, NULL, NULL),
(69, 65, 42, 'Điện Thoại iPhone 13 Pro Max 256GB - Hàng Chính Hãng', '37490000', 2, NULL, NULL),
(70, 67, 36, 'Samsung Galaxy Tab A8 8\" T295 (2019)', '4900000', 1, NULL, NULL),
(71, 68, 36, 'Samsung Galaxy Tab A8 8\" T295 (2019)', '4900000', 1, NULL, NULL),
(72, 69, 36, 'Samsung Galaxy Tab A8 8\" T295 (2019)', '4900000', 1, NULL, NULL),
(73, 70, 36, 'Samsung Galaxy Tab A8 8\" T295 (2019)', '4900000', 1, NULL, NULL),
(74, 71, 34, 'Laptop Dell Vostro 5402 i5 1135G7/8GB/256GB/Win10 (V4I5003W)', '18690000', 1, NULL, NULL),
(75, 72, 40, 'Chảo đúc bằng đá ceramic cạn (dùng được tất cả các loại bếp)', '360000', 1, NULL, NULL),
(76, 73, 41, 'Tivi Sony 4K 55 inch KD-55X8050H', '16700000', 1, NULL, NULL),
(77, 74, 42, 'Điện Thoại iPhone 13 Pro Max 256GB - Hàng Chính Hãng', '37490000', 1, NULL, NULL),
(78, 75, 44, 'Chuột Không Dây Rapoo M216 Đen', '200000', 1, NULL, NULL),
(79, 75, 45, 'Túi chống sốc Laptop 14 inch có ngăn phụ eValu LMP-T004D', '250000', 1, NULL, NULL),
(80, 76, 33, 'iPhone Xs 64GB', '17900000', 1, NULL, NULL),
(81, 77, 45, 'Túi chống sốc Laptop 14 inch có ngăn phụ eValu LMP-T004D', '250000', 3, NULL, NULL),
(82, 78, 35, 'Laptop Apple MacBook Air 2017 i5 1.8GHz/8GB/128GB (MQD32SA/A)', '17990000', 1, NULL, NULL),
(83, 79, 35, 'Laptop Apple MacBook Air 2017 i5 1.8GHz/8GB/128GB (MQD32SA/A)', '17990000', 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_payment`
--

CREATE TABLE `tbl_payment` (
  `payment_id` bigint(20) UNSIGNED NOT NULL,
  `payment_method` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_status` varchar(50) CHARACTER SET utf8 NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_payment`
--

INSERT INTO `tbl_payment` (`payment_id`, `payment_method`, `payment_status`, `created_at`, `updated_at`) VALUES
(1, '1', 'Đang chờ xử lý', NULL, NULL),
(2, '2', 'Đang chờ xử lý', NULL, NULL),
(3, '3', 'Đang chờ xử lý', NULL, NULL),
(4, '3', 'Đang chờ xử lý', NULL, NULL),
(5, '2', 'Đang chờ xử lý', NULL, NULL),
(6, '2', 'Đang chờ xử lý', NULL, NULL),
(7, '2', 'Đang chờ xử lý', NULL, NULL),
(8, '2', 'Đang chờ xử lý', NULL, NULL),
(9, '2', 'Đang chờ xử lý', NULL, NULL),
(10, '2', 'Đang chờ xử lý', NULL, NULL),
(11, '2', 'Đang chờ xử lý', NULL, NULL),
(12, '2', 'Đang chờ xử lý', NULL, NULL),
(13, '2', 'Đang chờ xử lý', NULL, NULL),
(14, '2', 'Đang chờ xử lý', NULL, NULL),
(15, '2', 'Đang chờ xử lý', NULL, NULL),
(16, '2', 'Đang chờ xử lý', NULL, NULL),
(17, '1', 'Đang chờ xử lý', NULL, NULL),
(18, '3', 'Đang chờ xử lý', NULL, NULL),
(19, '2', 'Đang chờ xử lý', NULL, NULL),
(20, '2', 'Đang chờ xử lý', NULL, NULL),
(21, '2', 'Đang chờ xử lý', NULL, NULL),
(22, '2', 'Đang chờ xử lý', NULL, NULL),
(23, '2', 'Đang chờ xử lý', NULL, NULL),
(24, '2', 'Đang chờ xử lý', NULL, NULL),
(25, '2', 'Đang chờ xử lý', NULL, NULL),
(26, '2', 'Đang chờ xử lý', NULL, NULL),
(27, '2', 'Đang chờ xử lý', NULL, NULL),
(28, '2', 'Đang chờ xử lý', NULL, NULL),
(29, '2', 'Đang chờ xử lý', NULL, NULL),
(30, '2', 'Đang chờ xử lý', NULL, NULL),
(31, '2', 'Đang chờ xử lý', NULL, NULL),
(32, '2', 'Đang chờ xử lý', NULL, NULL),
(33, '2', 'Đang chờ xử lý', NULL, NULL),
(34, '2', 'Đang chờ xử lý', NULL, NULL),
(35, '2', 'Đang chờ xử lý', NULL, NULL),
(36, '2', 'Đang chờ xử lý', NULL, NULL),
(37, '2', 'Đang chờ xử lý', NULL, NULL),
(38, '2', 'Đang chờ xử lý', NULL, NULL),
(39, '2', 'Đang chờ xử lý', NULL, NULL),
(40, '2', 'Đang chờ xử lý', NULL, NULL),
(41, '2', 'Đang chờ xử lý', NULL, NULL),
(42, '2', 'Đang chờ xử lý', NULL, NULL),
(43, '2', 'Đang chờ xử lý', NULL, NULL),
(44, '2', 'Đang chờ xử lý', NULL, NULL),
(45, '2', 'Đang chờ xử lý', NULL, NULL),
(46, '2', 'Đang chờ xử lý', NULL, NULL),
(47, '2', 'Đang chờ xử lý', NULL, NULL),
(48, '3', 'Đang chờ xử lý', NULL, NULL),
(49, '1', 'Đang chờ xử lý', NULL, NULL),
(50, '2', 'Đang chờ xử lý', NULL, NULL),
(51, '2', 'Đang chờ xử lý', NULL, NULL),
(52, '2', 'Đang chờ xử lý', NULL, NULL),
(53, '2', 'Đang chờ xử lý', NULL, NULL),
(54, '2', 'Đang chờ xử lý', NULL, NULL),
(55, '2', 'Đang chờ xử lý', NULL, NULL),
(56, '2', 'Đang chờ xử lý', NULL, NULL),
(57, '2', 'Đang chờ xử lý', NULL, NULL),
(58, '2', 'Đang chờ xử lý', NULL, NULL),
(59, '2', 'Đang chờ xử lý', NULL, NULL),
(60, '2', 'Đang chờ xử lý', NULL, NULL),
(61, '2', 'Đang chờ xử lý', NULL, NULL),
(62, '2', 'Đang chờ xử lý', NULL, NULL),
(63, '2', 'Đang chờ xử lý', NULL, NULL),
(64, '2', 'Đang chờ xử lý', NULL, NULL),
(65, '2', 'Đang chờ xử lý', NULL, NULL),
(66, '2', 'Đang chờ xử lý', NULL, NULL),
(67, '2', 'Đang chờ xử lý', NULL, NULL),
(68, '1', 'Đang chờ xử lý', NULL, NULL),
(69, '1', 'Đang chờ xử lý', NULL, NULL),
(70, '1', 'Đang chờ xử lý', NULL, NULL),
(71, '1', 'Đang chờ xử lý', NULL, NULL),
(72, '1', 'Đang chờ xử lý', NULL, NULL),
(73, '2', 'Đang chờ xử lý', NULL, NULL),
(74, '1', 'Đang chờ xử lý', NULL, NULL),
(75, '1', 'Đang chờ xử lý', NULL, NULL),
(76, '2', 'Đang chờ xử lý', NULL, NULL),
(77, '1', 'Đang chờ xử lý', NULL, NULL),
(78, '2', 'Đang chờ xử lý', NULL, NULL),
(79, '2', 'Đang chờ xử lý', NULL, NULL),
(80, '2', 'Đang chờ xử lý', NULL, NULL),
(81, '1', 'Đang chờ xử lý', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_product`
--

CREATE TABLE `tbl_product` (
  `product_id` int(10) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `product_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` float NOT NULL,
  `product_content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_images` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_quantity` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_sold` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_product`
--

INSERT INTO `tbl_product` (`product_id`, `category_id`, `brand_id`, `product_desc`, `product_price`, `product_content`, `product_images`, `product_status`, `created_at`, `updated_at`, `product_name`, `product_quantity`, `product_sold`) VALUES
(31, 8, 2, 'Giảm giá 100,000đ\r\nGói bảo hành mở rộng Samsung Care+ Xem chi tiết\r\nƯu đãi phòng chờ thương gia Xem chi tiết\r\nTrả góp 0% thẻ tín dụng Xem chi tiết\r\nMua Đồng hồ Samsung Fit 2 giảm 40% (Không áp dụng đồng thời khuyến mãi khác)', 50000000, 'Giảm giá 100,000đ\r\nGói bảo hành mở rộng Samsung Care+ Xem chi tiết\r\nƯu đãi phòng chờ thương gia Xem chi tiết\r\nTrả góp 0% thẻ tín dụng Xem chi tiết\r\nMua Đồng hồ Samsung Fit 2 giảm 40% (Không áp dụng đồng thời khuyến mãi khác)', 'samsung143.jpg', 0, '2021-02-17 05:37:19', NULL, 'Samsung Galaxy Z Fold2 5G', '86', 95),
(32, 8, 2, '<iframe width=\"100%\" height=\"300\" src=\"https://www.youtube.com/embed/XrBEMAkP1Jw\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 8990000, 'Giao ngay từ cửa hàng gần bạn nhất\r\nChuyển danh bạ, dữ liệu qua máy mới\r\nMang nhiều màu để bạn lựa chọn\r\nMang thêm điện thoại khác để bạn xem', 'samsung249.jpg', 0, '2021-02-17 05:39:08', NULL, 'Samsung Galaxy M51', '83', -3),
(33, 8, 4, '(*) Giá hoặc khuyến mãi không áp dụng đối với 1 số gói trả góp', 17900000, 'Giao ngay từ cửa hàng gần bạn nhất\r\nChuyển danh bạ, dữ liệu qua máy mới\r\nMang thêm điện thoại khác để bạn xem', 'iphone192.jpg', 1, '2021-02-17 05:42:34', NULL, 'iPhone Xs 64GB', '69', 1),
(34, 11, 20, 'Chuột không dây\r\nBalo Laptop Dell\r\nMua kèm Microsoft 365 Personal 1 năm chỉ còn 790,000đ\r\nMua Đồng hồ thời trang giảm 40% (không kèm khuyến mãi khác)', 18690000, 'Chuột không dây\r\nBalo Laptop Dell\r\nMua kèm Microsoft 365 Personal 1 năm chỉ còn 790,000đ\r\nMua Đồng hồ thời trang giảm 40% (không kèm khuyến mãi khác)', 'dell127.jpg', 1, '2021-02-17 05:46:48', NULL, 'Laptop Dell Vostro 5402 i5 1135G7/8GB/256GB/Win10 (V4I5003W)', '69', -9),
(35, 11, 15, '<p>T&uacute;i chống sốc Laptop 14&quot; eValu Mua k&egrave;m Microsoft 365 Personal 1 năm chỉ c&ograve;n 790,000đ Mua Đồng hồ thời trang giảm 40% (kh&ocirc;ng k&egrave;m khuyến m&atilde;i kh&aacute;c)</p>\r\n\r\n<p>MacBook Air 2017 i5 128GB l&agrave; mẫu laptop văn ph&ograve;ng, c&oacute; thiết kế si&ecirc;u mỏng v&agrave; nhẹ, vỏ nh&ocirc;m nguy&ecirc;n khối sang trọng. M&aacute;y c&oacute; hiệu năng ổn định, thời lượng pin cực l&acirc;u 12 giờ, ph&ugrave; hợp cho hầu hết c&aacute;c nhu cầu l&agrave;m việc v&agrave; giải tr&iacute;. Thiết kế si&ecirc;u mỏng v&agrave; nhẹ Macbook Air 2017 mang những đặc trưng thiết kế của d&ograve;ng MacBook Air với trọng lượng v&agrave; độ d&agrave;y của laptop lần lượt l&agrave; 1.7 cm v&agrave; 1.35 kg rất tiện lợi v&agrave; dễ d&agrave;ng gi&uacute;p người d&ugrave;ng kh&ocirc;ng cảm thấy bất tiện khi mang tr&ecirc;n vai thường xuy&ecirc;n khi đi học hay đi l&agrave;m. Đ&acirc;y cũng l&agrave; chiếc MacBook ch&iacute;nh h&atilde;ng c&oacute; gi&aacute; rẻ nhất hiện tại, ph&ugrave; hợp với mọi người ti&ecirc;u d&ugrave;ng.<iframe frameborder=\"0\" height=\"300\" src=\"https://www.youtube.com/embed/5SK5fBBE09Y\" title=\"YouTube video player\" width=\"80%\"></iframe></p>', 17990000, 'Túi chống sốc Laptop 14\" eValu\r\nMua kèm Microsoft 365 Personal 1 năm chỉ còn 790,000đ\r\nMua Đồng hồ thời trang giảm 40% (không kèm khuyến mãi khác)', 'apple162.jpg', 0, '2021-02-17 05:48:43', NULL, 'Laptop Apple MacBook Air 2017 i5 1.8GHz/8GB/128GB (MQD32SA/A)', '43', 7),
(36, 10, 2, 'Giao ngay từ cửa hàng gần bạn nhất\r\nHướng dẫn sử dụng, giải đáp thắc mắc sản phẩm\r\nMang nhiều màu để bạn lựa chọn\r\nMang thêm máy tính bảng khác để bạn xem', 4900000, 'Giao ngay từ cửa hàng gần bạn nhất\r\nHướng dẫn sử dụng, giải đáp thắc mắc sản phẩm\r\nMang nhiều màu để bạn lựa chọn\r\nMang thêm máy tính bảng khác để bạn xem', 'samsungbang36.jpg', 1, '2021-02-17 05:50:29', NULL, 'Samsung Galaxy Tab A8 8\" T295 (2019)', '25', 5),
(37, 8, 4, 'Tư vấn điện thoại iPhone 8 Plus bây giờ không đáng mua nữa?\r\n<iframe width=\"100%\" height=\"300\" src=\"https://www.youtube.com/embed/EYJ2SJqA7CU\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 9000000, 'Tư vấn điện thoại iPhone 8 Plus bây giờ không đáng mua nữa?', 'ipad820.jpg', 0, '2021-02-19 02:03:05', NULL, 'Iphone  8 plus', '153', 965),
(40, 16, 23, '<h1>Chảo đ&uacute;c bằng đá ceramic cạn (dùng được t&acirc;́t cả các loại b&ecirc;́p).</h1>\r\n\r\n<p><iframe frameborder=\"0\" height=\"315\" src=\"https://www.youtube.com/embed/1EXNQWi2h9w\" title=\"YouTube video player\" width=\"100%\"></iframe></p>', 360000, '<h1>Chảo đ&uacute;c bằng đá ceramic cạn (dùng được t&acirc;́t cả các loại b&ecirc;́p)</h1>\r\n\r\n<p>&nbsp;</p>', 'ac quy45.jfif', 0, '2021-04-24 12:05:50', NULL, 'Chảo đúc bằng đá ceramic cạn (dùng được tất cả các loại bếp)', '200', NULL),
(41, 17, 24, '<p>Loại Tivi: Tivi Android, 55 inch Độ ph&acirc;n giải 4K Bộ xử l&yacute; h&igrave;nh ảnh X1 4K HDR Processor Sử dụng c&ocirc;ng nghệ đ&egrave;n nền Direct LED C&ocirc;ng nghệ 4K X-Reality Pro cho h&igrave;nh ảnh tự động n&acirc;ng cấp l&ecirc;n gần chuẩn 4K LED với c&ocirc;ng nghệ kiểm so&aacute;t đ&egrave;n nền theo khung (Frame Dimming) C&ocirc;ng nghệ qu&eacute;t h&igrave;nh Motionflow XR200 (Native 50Hz)</p>\r\n\r\n<h5>H&igrave;nh ảnh r&otilde; n&eacute;t, độ tương phản tốt, m&agrave;u sắc sống động</h5>\r\n\r\n<p>Bộ xử l&yacute; mạnh mẽ của ch&uacute;ng t&ocirc;i sử dụng c&aacute;c thuật to&aacute;n ti&ecirc;n tiến để giảm nhiễu v&agrave; tăng chi tiết. Với t&iacute;n hiệu 4K r&otilde; hơn bao giờ hết, mọi thứ bạn xem đều sẽ gần đạt độ ph&acirc;n giải 4K, với đầy đủ m&agrave;u sắc v&agrave; độ tương phản sống động.</p>\r\n\r\n<p><img alt=\"Android Tivi Sony 4K 43 inch KD-43X8050H\" height=\"393px\" src=\"https://salt.tikicdn.com/ts/tmp/d2/e2/a8/68635b9ef5aab8d6384a8f3d66fb45d2.jpg\" width=\"750px\" /></p>\r\n\r\n<h5>Độ ph&acirc;n giải si&ecirc;u cao cho mọi nội dung bạn xem</h5>\r\n\r\n<p>Thưởng thức h&igrave;nh ảnh 4K sắc n&eacute;t, phong ph&uacute; chi tiết v&agrave; kết cấu đậm t&iacute;nh ch&acirc;n thực, với sự hỗ trợ độc quyền từ bộ xử l&yacute; 4K HDR X1&trade; của ch&uacute;ng t&ocirc;i. H&igrave;nh ảnh quay 2K v&agrave; cả Full HD được n&acirc;ng cấp l&ecirc;n gần với độ ph&acirc;n giải 4K bằng 4K X-Reality&trade; PRO nhờ sử dụng cơ sở dữ liệu 4K ri&ecirc;ng biệt.</p>\r\n\r\n<p><img alt=\"Android Tivi Sony 4K 43 inch KD-43X8050H\" height=\"391px\" src=\"https://salt.tikicdn.com/ts/tmp/3c/55/2e/fcfdf24bd86333b073632ad55b6854cd.jpg\" width=\"750px\" /></p>\r\n\r\n<h5>T&aacute;i tạo dải m&agrave;u rộng hơn, ch&iacute;nh x&aacute;c hơn</h5>\r\n\r\n<p>Bằng c&aacute;ch mở rộng phổ m&agrave;u, TRILUMINOS được hỗ trợ sức mạnh bởi bộ xử l&yacute; X1 gi&uacute;p t&aacute;i tạo nhiều m&agrave;u sắc hơn so với TV th&ocirc;ng thường. C&ocirc;ng nghệ n&agrave;y ph&acirc;n t&iacute;ch v&agrave; xử l&yacute; dữ liệu trong mỗi h&igrave;nh ảnh gi&uacute;p m&agrave;u sắc trở n&ecirc;n tự nhi&ecirc;n v&agrave; ch&iacute;nh x&aacute;c hơn, nhờ đ&oacute; mang lại h&igrave;nh ảnh cuối c&ugrave;ng tr&ocirc;ng ch&acirc;n thực hơn bao giờ hết.</p>\r\n\r\n<p><img alt=\"Android Tivi Sony 4K 43 inch KD-43X8050H\" height=\"228px\" src=\"https://salt.tikicdn.com/ts/tmp/08/6b/18/e0ea461650cace5da8ef9f918e939a4a.jpg\" width=\"750px\" /></p>\r\n\r\n<h5>Giảm mờ ngay cả trong cảnh chuyển động nhanh</h5>\r\n\r\n<p>Tr&ecirc;n một số m&agrave;n h&igrave;nh, c&aacute;c cảnh thể thao v&agrave; h&agrave;nh động nhanh c&oacute; thể bị mờ. C&ocirc;ng nghệ Motionflow của ch&uacute;ng t&ocirc;i giữ cho chuyển động mượt m&agrave; v&agrave; r&otilde; n&eacute;t bằng c&aacute;ch tạo th&ecirc;m h&igrave;nh ảnh giữa c&aacute;c h&igrave;nh ảnh v&agrave; th&ecirc;m ph&acirc;n cảnh m&agrave;u đen giữa c&aacute;c cảnh. Kết quả đạt được? &Iacute;t mờ v&agrave; dư ảnh hơn, chuyển động mượt m&agrave; hơn.</p>\r\n\r\n<p><img alt=\"Android Tivi Sony 4K 43 inch KD-43X8050H\" height=\"234px\" src=\"https://salt.tikicdn.com/ts/tmp/d7/ad/01/0640c70c6dd65c4f42e4064a480cc11c.jpg\" width=\"750px\" /></p>\r\n\r\n<h5>Truyền tải trọn vẹn trải nghiệm xem với Dolby Vision&trade;</h5>\r\n\r\n<p>Thổi b&ugrave;ng sức sống cho từng khung h&igrave;nh với những v&ugrave;ng s&aacute;ng nổi bật, khoảng tối s&acirc;u hơn v&agrave; m&agrave;u sắc rực rỡ. Dolby Vision&trade; l&agrave; một giải ph&aacute;p HDR tạo n&ecirc;n trải nghiệm rạp chiếu phim l&ocirc;i cuốn, hấp dẫn ngay tại nh&agrave; bạn.</p>\r\n\r\n<p><img alt=\"Android Tivi Sony 4K 43 inch KD-43X8050H\" height=\"239px\" src=\"https://salt.tikicdn.com/ts/tmp/bd/68/21/48b1fdf78168f20b25b9f81ed17c91c5.jpg\" width=\"750px\" /></p>\r\n\r\n<h5>M&agrave;u sắc sống động kết hợp với &acirc;m thanh v&ograve;m r&otilde; n&eacute;t</h5>\r\n\r\n<p>Thưởng thức m&agrave;u sắc ch&acirc;n thực, sống động, độ tương phản tinh tế v&agrave; độ r&otilde; n&eacute;t ấn tượng c&ugrave;ng &acirc;m thanh &ocirc;m trọn lấy bạn trong một thiết kế trang nh&atilde;.</p>\r\n\r\n<h5>&Acirc;m thanh đa chiều&nbsp;</h5>\r\n\r\n<p>Đắm ch&igrave;m trong thế giới &acirc;m thanh r&otilde; n&eacute;t, chất lượng cao đa chiều, cho bạn h&ograve;a m&igrave;nh v&agrave;o trong từng khung cảnh.</p>\r\n\r\n<p><img alt=\"Android Tivi Sony 4K 43 inch KD-43X8050H\" height=\"382px\" src=\"https://salt.tikicdn.com/ts/tmp/73/1b/2a/b33b0b0357afae6cd229efa24ab56d58.jpg\" width=\"750px\" /></p>\r\n\r\n<h5>Đắm m&igrave;nh trong &acirc;m thanh với Dolby Atmos&trade;</h5>\r\n\r\n<p>Bạn sẽ được đắm ch&igrave;m trong &acirc;m thanh v&agrave; h&ograve;a m&igrave;nh v&agrave;o khung cảnh. Với Dolby Atmos, &acirc;m thanh ph&aacute;t ra từ ph&iacute;a tr&ecirc;n cũng như từ c&aacute;c b&ecirc;n để bạn c&oacute; thể nghe thấy c&aacute;c vật thể di chuyển tr&ecirc;n cao với độ ch&acirc;n thực tốt hơn, cho trải nghiệm thực sự đa chiều.</p>\r\n\r\n<p><img alt=\"Android Tivi Sony 4K 43 inch KD-43X8050H\" height=\"235px\" src=\"https://salt.tikicdn.com/ts/tmp/d8/8d/80/0891933e11cefe98943e7ee10ead4ba9.jpg\" width=\"750px\" /></p>\r\n\r\n<h5>Thưởng thức &acirc;m thanh chất lượng cao</h5>\r\n\r\n<p>Với thiết kế mang h&igrave;nh d&aacute;ng mới độc đ&aacute;o để bổ sung cho chất lượng &acirc;m thanh v&agrave; độ mỏng của TV, loa c&acirc;n bằng X-Balanced Speaker của ch&uacute;ng t&ocirc;i gi&uacute;p mang đến những thước phim v&agrave; nhạc với &acirc;m thanh r&otilde; n&eacute;t.</p>\r\n\r\n<h5>Thiết kế tinh tế h&ograve;a v&agrave;o kh&ocirc;ng gian</h5>\r\n\r\n<p>Viền mỏng mang đến cho TV một vẻ ngo&agrave;i tinh tế, h&ograve;a quyện trong bất kỳ c&aacute;ch bố tr&iacute; đương đại n&agrave;o.</p>\r\n\r\n<p>Với thiết kế viền mỏng, sản phẩm TV n&agrave;y mang n&eacute;t sang trọng v&agrave; tinh tế. Trước mắt bạn sẽ chỉ c&ograve;n l&agrave; h&igrave;nh ảnh chiếm trọn t&acirc;m tr&iacute; chứ kh&ocirc;ng phải l&agrave; chiếc TV nữa.</p>\r\n\r\n<p><img alt=\"Android Tivi Sony 4K 43 inch KD-43X8050H\" height=\"389px\" src=\"https://salt.tikicdn.com/ts/tmp/8e/f3/6b/3a0504a4aadb615fbf64e025649a9cd0.jpg\" width=\"750px\" /></p>\r\n\r\n<h5>Truy cập dễ d&agrave;ng, thao t&aacute;c đơn giản</h5>\r\n\r\n<p>Điều khiển bằng giọng n&oacute;i, tải th&ecirc;m ứng dụng với thao t&aacute;c đơn giản tr&ecirc;n Sony Android TV&trade; 4K. Mọi nhu cầu xem phim hay truyền h&igrave;nh đều được đ&aacute;p ứng tức thời.</p>\r\n\r\n<p><img alt=\"Android Tivi Sony 4K 43 inch KD-43X8050H\" height=\"350px\" src=\"https://salt.tikicdn.com/ts/tmp/85/d9/31/91dc85d264e8d62a00b79ec6ff0037b4.jpg\" width=\"750px\" /></p>\r\n\r\n<h5>Chỉ cần n&oacute;i để kh&aacute;m ph&aacute; thế giới mới</h5>\r\n\r\n<p>Chỉ cần n&oacute;i để t&igrave;m tất cả nội dung giải tr&iacute; bạn muốn. Với t&iacute;nh năng điều khiển bằng giọng n&oacute;i ti&ecirc;n tiến, chiếc smart TV Android n&agrave;y cho bạn tận hưởng ngay c&aacute;c bộ phim v&agrave; chương tr&igrave;nh TV từ c&aacute;c ứng dụng hoặc chương tr&igrave;nh ph&aacute;t s&oacute;ng.</p>\r\n\r\n<h5>Hơn 5000 ứng dụng, nhiều hơn bất kỳ smart TV n&agrave;o kh&aacute;c</h5>\r\n\r\n<p>Smart TV Android của Sony c&oacute; số lượng ứng dụng vượt trội. H&atilde;y chọn những ứng dụng gi&uacute;p cuộc sống của bạn trở n&ecirc;n th&uacute; vị v&agrave; giải tr&iacute; hơn.</p>\r\n\r\n<h5>Kh&ocirc;ng chờ đợi th&ecirc;m nữa</h5>\r\n\r\n<p>C&aacute;c ứng dụng khởi động nhanh v&agrave; kh&ocirc;ng c&ograve;n phải chờ đợi khi chuyển ứng dụng nữa &ndash; Netflix khởi động nhanh gấp 3 lần so với trước đ&acirc;y.</p>\r\n\r\n<h5>Bắt đầu sử dụng chỉ bằng một n&uacute;t</h5>\r\n\r\n<p>TV Sony t&iacute;ch hợp n&uacute;t Netflix ngay tr&ecirc;n Remote, cho bạn dễ d&agrave;ng thưởng thức nhanh bằng một thao t&aacute;c.</p>\r\n\r\n<p><img alt=\"Android Tivi Sony 4K 43 inch KD-43X8050H\" height=\"250px\" src=\"https://salt.tikicdn.com/ts/tmp/4a/ff/95/7b0a7f680d6d0bec34397ac2abc7224a.jpg\" width=\"750px\" /></p>\r\n\r\n<h5>Dễ d&agrave;ng kết nối với c&aacute;c thiết bị tương th&iacute;ch bạn y&ecirc;u th&iacute;ch</h5>\r\n\r\n<p>Tương th&iacute;ch với Apple AirPlay / Apple HomeKit 11: Với Apple AirPlay, bạn c&oacute; thể ph&aacute;t trực tiếp video v&agrave; &acirc;m thanh đến ti-vi ngay tr&ecirc;n iPhone, iPad hoặc m&aacute;y Mac. Xem phim v&agrave; c&aacute;c chương tr&igrave;nh ph&aacute;t từ ứng dụng Apple TV, ứng dụng bạn y&ecirc;u th&iacute;ch hay cả Safari. Bạn cũng c&oacute; thể chiếu ảnh cho mọi người trong ph&ograve;ng c&ugrave;ng xem.</p>\r\n\r\n<h5>Cuộc sống th&ocirc;ng minh mới của bạn - Truyền đến m&agrave;n h&igrave;nh lớn hơn, tốt hơn bằng Chromecast</h5>\r\n\r\n<p>Chromecast cho ph&eacute;p bạn truyền video, game v&agrave; ứng dụng từ thiết bị di động sang TV c&oacute; Chromecast built-in với chất lượng ho&agrave;n hảo. Chỉ cần chạm v&agrave;o n&uacute;t Cast (Ph&aacute;t) tr&ecirc;n m&agrave;n h&igrave;nh thiết bị Android hoặc iOS để ph&aacute;t l&ecirc;n m&agrave;n h&igrave;nh lớn. Vừa truyền nội dung, bạn vẫn vừa duyệt được tiếp tr&ecirc;n điện thoại hoặc m&aacute;y t&iacute;nh bảng.</p>\r\n\r\n<h5>Điều khiển dễ d&agrave;ng bằng điều khiển từ xa th&ocirc;ng minh</h5>\r\n\r\n<p>Kết nối bộ chuyển t&iacute;n hiệu, thiết bị kh&aacute;c qua HDMI với TV để điều khiển tất cả bằng một bộ điều khiển th&ocirc;ng minh c&oacute; thiết kế mỏng hơn, bo tr&ograve;n tinh tế hơn với micro t&iacute;ch hợp điều khiển bằng giọng n&oacute;i v&agrave; c&aacute;ch bố tr&iacute; n&uacute;t cải tiến dễ sử dụng.</p>\r\n\r\n<p><img alt=\"Android Tivi Sony 4K 43 inch KD-43X8050H\" height=\"241px\" src=\"https://salt.tikicdn.com/ts/tmp/db/b8/9f/e5a9f724bde960f228d652ba335b030f.jpg\" width=\"750px\" /></p>\r\n\r\n<p>Gi&aacute; sản phẩm tr&ecirc;n Tiki đ&atilde; bao gồm thuế theo luật hiện h&agrave;nh. Tuy nhi&ecirc;n tuỳ v&agrave;o từng loại sản phẩm hoặc phương thức, địa chỉ giao h&agrave;ng m&agrave; c&oacute; thể ph&aacute;t sinh th&ecirc;m chi ph&iacute; kh&aacute;c như ph&iacute; vận chuyển, phụ ph&iacute; h&agrave;ng cồng kềnh, .....</p>', 16700000, '<p>Loại Tivi: Tivi Android, 55 inch Độ ph&acirc;n giải 4K Bộ xử l&yacute; h&igrave;nh ảnh X1 4K HDR Processor Sử dụng c&ocirc;ng nghệ đ&egrave;n nền Direct LED C&ocirc;ng nghệ 4K X-Reality Pro cho h&igrave;nh ảnh tự động n&acirc;ng cấp l&ecirc;n gần chuẩn 4K LED với c&ocirc;ng nghệ kiểm so&aacute;t đ&egrave;n nền theo khung (Frame Dimming) C&ocirc;ng nghệ qu&eacute;t h&igrave;nh Motionflow XR200 (Native 50Hz)</p>\r\n\r\n<h5>H&igrave;nh ảnh r&otilde; n&eacute;t, độ tương phản tốt, m&agrave;u sắc sống động</h5>\r\n\r\n<p>Bộ xử l&yacute; mạnh mẽ của ch&uacute;ng t&ocirc;i sử dụng c&aacute;c thuật to&aacute;n ti&ecirc;n tiến để giảm nhiễu v&agrave; tăng chi tiết. Với t&iacute;n hiệu 4K r&otilde; hơn bao giờ hết, mọi thứ bạn xem đều sẽ gần đạt độ ph&acirc;n giải 4K, với đầy đủ m&agrave;u sắc v&agrave; độ tương phản sống động.</p>\r\n\r\n<p><img alt=\"Android Tivi Sony 4K 43 inch KD-43X8050H\" height=\"393px\" src=\"https://salt.tikicdn.com/ts/tmp/d2/e2/a8/68635b9ef5aab8d6384a8f3d66fb45d2.jpg\" width=\"750px\" /></p>\r\n\r\n<h5>Độ ph&acirc;n giải si&ecirc;u cao cho mọi nội dung bạn xem</h5>\r\n\r\n<p>Thưởng thức h&igrave;nh ảnh 4K sắc n&eacute;t, phong ph&uacute; chi tiết v&agrave; kết cấu đậm t&iacute;nh ch&acirc;n thực, với sự hỗ trợ độc quyền từ bộ xử l&yacute; 4K HDR X1&trade; của ch&uacute;ng t&ocirc;i. H&igrave;nh ảnh quay 2K v&agrave; cả Full HD được n&acirc;ng cấp l&ecirc;n gần với độ ph&acirc;n giải 4K bằng 4K X-Reality&trade; PRO nhờ sử dụng cơ sở dữ liệu 4K ri&ecirc;ng biệt.</p>\r\n\r\n<p><img alt=\"Android Tivi Sony 4K 43 inch KD-43X8050H\" height=\"391px\" src=\"https://salt.tikicdn.com/ts/tmp/3c/55/2e/fcfdf24bd86333b073632ad55b6854cd.jpg\" width=\"750px\" /></p>\r\n\r\n<h5>T&aacute;i tạo dải m&agrave;u rộng hơn, ch&iacute;nh x&aacute;c hơn</h5>\r\n\r\n<p>Bằng c&aacute;ch mở rộng phổ m&agrave;u, TRILUMINOS được hỗ trợ sức mạnh bởi bộ xử l&yacute; X1 gi&uacute;p t&aacute;i tạo nhiều m&agrave;u sắc hơn so với TV th&ocirc;ng thường. C&ocirc;ng nghệ n&agrave;y ph&acirc;n t&iacute;ch v&agrave; xử l&yacute; dữ liệu trong mỗi h&igrave;nh ảnh gi&uacute;p m&agrave;u sắc trở n&ecirc;n tự nhi&ecirc;n v&agrave; ch&iacute;nh x&aacute;c hơn, nhờ đ&oacute; mang lại h&igrave;nh ảnh cuối c&ugrave;ng tr&ocirc;ng ch&acirc;n thực hơn bao giờ hết.</p>\r\n\r\n<p><img alt=\"Android Tivi Sony 4K 43 inch KD-43X8050H\" height=\"228px\" src=\"https://salt.tikicdn.com/ts/tmp/08/6b/18/e0ea461650cace5da8ef9f918e939a4a.jpg\" width=\"750px\" /></p>\r\n\r\n<h5>Giảm mờ ngay cả trong cảnh chuyển động nhanh</h5>\r\n\r\n<p>Tr&ecirc;n một số m&agrave;n h&igrave;nh, c&aacute;c cảnh thể thao v&agrave; h&agrave;nh động nhanh c&oacute; thể bị mờ. C&ocirc;ng nghệ Motionflow của ch&uacute;ng t&ocirc;i giữ cho chuyển động mượt m&agrave; v&agrave; r&otilde; n&eacute;t bằng c&aacute;ch tạo th&ecirc;m h&igrave;nh ảnh giữa c&aacute;c h&igrave;nh ảnh v&agrave; th&ecirc;m ph&acirc;n cảnh m&agrave;u đen giữa c&aacute;c cảnh. Kết quả đạt được? &Iacute;t mờ v&agrave; dư ảnh hơn, chuyển động mượt m&agrave; hơn.</p>\r\n\r\n<p><img alt=\"Android Tivi Sony 4K 43 inch KD-43X8050H\" height=\"234px\" src=\"https://salt.tikicdn.com/ts/tmp/d7/ad/01/0640c70c6dd65c4f42e4064a480cc11c.jpg\" width=\"750px\" /></p>\r\n\r\n<h5>Truyền tải trọn vẹn trải nghiệm xem với Dolby Vision&trade;</h5>\r\n\r\n<p>Thổi b&ugrave;ng sức sống cho từng khung h&igrave;nh với những v&ugrave;ng s&aacute;ng nổi bật, khoảng tối s&acirc;u hơn v&agrave; m&agrave;u sắc rực rỡ. Dolby Vision&trade; l&agrave; một giải ph&aacute;p HDR tạo n&ecirc;n trải nghiệm rạp chiếu phim l&ocirc;i cuốn, hấp dẫn ngay tại nh&agrave; bạn.</p>\r\n\r\n<p><img alt=\"Android Tivi Sony 4K 43 inch KD-43X8050H\" height=\"239px\" src=\"https://salt.tikicdn.com/ts/tmp/bd/68/21/48b1fdf78168f20b25b9f81ed17c91c5.jpg\" width=\"750px\" /></p>\r\n\r\n<h5>M&agrave;u sắc sống động kết hợp với &acirc;m thanh v&ograve;m r&otilde; n&eacute;t</h5>\r\n\r\n<p>Thưởng thức m&agrave;u sắc ch&acirc;n thực, sống động, độ tương phản tinh tế v&agrave; độ r&otilde; n&eacute;t ấn tượng c&ugrave;ng &acirc;m thanh &ocirc;m trọn lấy bạn trong một thiết kế trang nh&atilde;.</p>\r\n\r\n<h5>&Acirc;m thanh đa chiều&nbsp;</h5>\r\n\r\n<p>Đắm ch&igrave;m trong thế giới &acirc;m thanh r&otilde; n&eacute;t, chất lượng cao đa chiều, cho bạn h&ograve;a m&igrave;nh v&agrave;o trong từng khung cảnh.</p>\r\n\r\n<p><img alt=\"Android Tivi Sony 4K 43 inch KD-43X8050H\" height=\"382px\" src=\"https://salt.tikicdn.com/ts/tmp/73/1b/2a/b33b0b0357afae6cd229efa24ab56d58.jpg\" width=\"750px\" /></p>\r\n\r\n<h5>Đắm m&igrave;nh trong &acirc;m thanh với Dolby Atmos&trade;</h5>\r\n\r\n<p>Bạn sẽ được đắm ch&igrave;m trong &acirc;m thanh v&agrave; h&ograve;a m&igrave;nh v&agrave;o khung cảnh. Với Dolby Atmos, &acirc;m thanh ph&aacute;t ra từ ph&iacute;a tr&ecirc;n cũng như từ c&aacute;c b&ecirc;n để bạn c&oacute; thể nghe thấy c&aacute;c vật thể di chuyển tr&ecirc;n cao với độ ch&acirc;n thực tốt hơn, cho trải nghiệm thực sự đa chiều.</p>\r\n\r\n<p><img alt=\"Android Tivi Sony 4K 43 inch KD-43X8050H\" height=\"235px\" src=\"https://salt.tikicdn.com/ts/tmp/d8/8d/80/0891933e11cefe98943e7ee10ead4ba9.jpg\" width=\"750px\" /></p>\r\n\r\n<h5>Thưởng thức &acirc;m thanh chất lượng cao</h5>\r\n\r\n<p>Với thiết kế mang h&igrave;nh d&aacute;ng mới độc đ&aacute;o để bổ sung cho chất lượng &acirc;m thanh v&agrave; độ mỏng của TV, loa c&acirc;n bằng X-Balanced Speaker của ch&uacute;ng t&ocirc;i gi&uacute;p mang đến những thước phim v&agrave; nhạc với &acirc;m thanh r&otilde; n&eacute;t.</p>\r\n\r\n<h5>Thiết kế tinh tế h&ograve;a v&agrave;o kh&ocirc;ng gian</h5>\r\n\r\n<p>Viền mỏng mang đến cho TV một vẻ ngo&agrave;i tinh tế, h&ograve;a quyện trong bất kỳ c&aacute;ch bố tr&iacute; đương đại n&agrave;o.</p>\r\n\r\n<p>Với thiết kế viền mỏng, sản phẩm TV n&agrave;y mang n&eacute;t sang trọng v&agrave; tinh tế. Trước mắt bạn sẽ chỉ c&ograve;n l&agrave; h&igrave;nh ảnh chiếm trọn t&acirc;m tr&iacute; chứ kh&ocirc;ng phải l&agrave; chiếc TV nữa.</p>\r\n\r\n<p><img alt=\"Android Tivi Sony 4K 43 inch KD-43X8050H\" height=\"389px\" src=\"https://salt.tikicdn.com/ts/tmp/8e/f3/6b/3a0504a4aadb615fbf64e025649a9cd0.jpg\" width=\"750px\" /></p>\r\n\r\n<h5>Truy cập dễ d&agrave;ng, thao t&aacute;c đơn giản</h5>\r\n\r\n<p>Điều khiển bằng giọng n&oacute;i, tải th&ecirc;m ứng dụng với thao t&aacute;c đơn giản tr&ecirc;n Sony Android TV&trade; 4K. Mọi nhu cầu xem phim hay truyền h&igrave;nh đều được đ&aacute;p ứng tức thời.</p>\r\n\r\n<p><img alt=\"Android Tivi Sony 4K 43 inch KD-43X8050H\" height=\"350px\" src=\"https://salt.tikicdn.com/ts/tmp/85/d9/31/91dc85d264e8d62a00b79ec6ff0037b4.jpg\" width=\"750px\" /></p>\r\n\r\n<h5>Chỉ cần n&oacute;i để kh&aacute;m ph&aacute; thế giới mới</h5>\r\n\r\n<p>Chỉ cần n&oacute;i để t&igrave;m tất cả nội dung giải tr&iacute; bạn muốn. Với t&iacute;nh năng điều khiển bằng giọng n&oacute;i ti&ecirc;n tiến, chiếc smart TV Android n&agrave;y cho bạn tận hưởng ngay c&aacute;c bộ phim v&agrave; chương tr&igrave;nh TV từ c&aacute;c ứng dụng hoặc chương tr&igrave;nh ph&aacute;t s&oacute;ng.</p>\r\n\r\n<h5>Hơn 5000 ứng dụng, nhiều hơn bất kỳ smart TV n&agrave;o kh&aacute;c</h5>\r\n\r\n<p>Smart TV Android của Sony c&oacute; số lượng ứng dụng vượt trội. H&atilde;y chọn những ứng dụng gi&uacute;p cuộc sống của bạn trở n&ecirc;n th&uacute; vị v&agrave; giải tr&iacute; hơn.</p>\r\n\r\n<h5>Kh&ocirc;ng chờ đợi th&ecirc;m nữa</h5>\r\n\r\n<p>C&aacute;c ứng dụng khởi động nhanh v&agrave; kh&ocirc;ng c&ograve;n phải chờ đợi khi chuyển ứng dụng nữa &ndash; Netflix khởi động nhanh gấp 3 lần so với trước đ&acirc;y.</p>\r\n\r\n<h5>Bắt đầu sử dụng chỉ bằng một n&uacute;t</h5>\r\n\r\n<p>TV Sony t&iacute;ch hợp n&uacute;t Netflix ngay tr&ecirc;n Remote, cho bạn dễ d&agrave;ng thưởng thức nhanh bằng một thao t&aacute;c.</p>\r\n\r\n<p><img alt=\"Android Tivi Sony 4K 43 inch KD-43X8050H\" height=\"250px\" src=\"https://salt.tikicdn.com/ts/tmp/4a/ff/95/7b0a7f680d6d0bec34397ac2abc7224a.jpg\" width=\"750px\" /></p>\r\n\r\n<h5>Dễ d&agrave;ng kết nối với c&aacute;c thiết bị tương th&iacute;ch bạn y&ecirc;u th&iacute;ch</h5>\r\n\r\n<p>Tương th&iacute;ch với Apple AirPlay / Apple HomeKit 11: Với Apple AirPlay, bạn c&oacute; thể ph&aacute;t trực tiếp video v&agrave; &acirc;m thanh đến ti-vi ngay tr&ecirc;n iPhone, iPad hoặc m&aacute;y Mac. Xem phim v&agrave; c&aacute;c chương tr&igrave;nh ph&aacute;t từ ứng dụng Apple TV, ứng dụng bạn y&ecirc;u th&iacute;ch hay cả Safari. Bạn cũng c&oacute; thể chiếu ảnh cho mọi người trong ph&ograve;ng c&ugrave;ng xem.</p>\r\n\r\n<h5>Cuộc sống th&ocirc;ng minh mới của bạn - Truyền đến m&agrave;n h&igrave;nh lớn hơn, tốt hơn bằng Chromecast</h5>\r\n\r\n<p>Chromecast cho ph&eacute;p bạn truyền video, game v&agrave; ứng dụng từ thiết bị di động sang TV c&oacute; Chromecast built-in với chất lượng ho&agrave;n hảo. Chỉ cần chạm v&agrave;o n&uacute;t Cast (Ph&aacute;t) tr&ecirc;n m&agrave;n h&igrave;nh thiết bị Android hoặc iOS để ph&aacute;t l&ecirc;n m&agrave;n h&igrave;nh lớn. Vừa truyền nội dung, bạn vẫn vừa duyệt được tiếp tr&ecirc;n điện thoại hoặc m&aacute;y t&iacute;nh bảng.</p>\r\n\r\n<h5>Điều khiển dễ d&agrave;ng bằng điều khiển từ xa th&ocirc;ng minh</h5>\r\n\r\n<p>Kết nối bộ chuyển t&iacute;n hiệu, thiết bị kh&aacute;c qua HDMI với TV để điều khiển tất cả bằng một bộ điều khiển th&ocirc;ng minh c&oacute; thiết kế mỏng hơn, bo tr&ograve;n tinh tế hơn với micro t&iacute;ch hợp điều khiển bằng giọng n&oacute;i v&agrave; c&aacute;ch bố tr&iacute; n&uacute;t cải tiến dễ sử dụng.</p>\r\n\r\n<p><img alt=\"Android Tivi Sony 4K 43 inch KD-43X8050H\" height=\"241px\" src=\"https://salt.tikicdn.com/ts/tmp/db/b8/9f/e5a9f724bde960f228d652ba335b030f.jpg\" width=\"750px\" /></p>\r\n\r\n<p>Gi&aacute; sản phẩm tr&ecirc;n Tiki đ&atilde; bao gồm thuế theo luật hiện h&agrave;nh. Tuy nhi&ecirc;n tuỳ v&agrave;o từng loại sản phẩm hoặc phương thức, địa chỉ giao h&agrave;ng m&agrave; c&oacute; thể ph&aacute;t sinh th&ecirc;m chi ph&iacute; kh&aacute;c như ph&iacute; vận chuyển, phụ ph&iacute; h&agrave;ng cồng kềnh, .....</p>', 'tv56.jpg', 0, '2021-06-28 09:38:32', NULL, 'Tivi Sony 4K 55 inch KD-55X8050H', '199', 1),
(42, 8, 4, '<h5>Nội dung về t&iacute;nh năng</h5>\r\n\r\n<p>iPhone 13 Pro Max g&oacute;i gọn nhiều t&iacute;nh năng cực đỉnh trong một thiết kế 6.7 inch.<sup>2</sup>&nbsp;Mạng 5G gi&uacute;p tải xuống c&aacute;c bộ phim một c&aacute;ch nhanh ch&oacute;ng v&agrave; xem trực tuyến video chất lượng cao.<sup>1</sup>&nbsp;M&agrave;n h&igrave;nh OLED nhỏ gọn v&agrave; s&aacute;ng đẹp ấn tượng. Ceramic Shield với khả năng chịu va đập khi rơi tốt hơn gấp 4 lần.<sup>3</sup>&nbsp;Ảnh chụp tuyệt đẹp trong điều kiện &aacute;nh s&aacute;ng yếu với chế độ Ban Đ&ecirc;m ở tất cả c&aacute;c camera. Quay phim, bi&ecirc;n tập v&agrave; ph&aacute;t video Dolby Vision đẳng cấp điện ảnh. Chip A15 Bionic mạnh mẽ.</p>\r\n\r\n<h5>T&iacute;nh năng nổi bật</h5>\r\n\r\n<ul>\r\n	<li>M&agrave;n h&igrave;nh OLED 6.7 inch<sup>2</sup></li>\r\n	<li>Ceramic Shield, chất liệu k&iacute;nh bền chắc nhất từng c&oacute; tr&ecirc;n điện thoại th&ocirc;ng minh</li>\r\n	<li>Mạng 5G cho tốc độ tải xuống si&ecirc;u nhanh, xem video v&agrave; nghe nhạc trực tuyến chất lượng cao<sup>1</sup></li>\r\n	<li>A15 Bionic cho hiệu năng mạnh hơn 20% so với thế hệ iPhone 12.</li>\r\n	<li>Hệ thống 3 camera 12 MP hiện đại trang bị cảm biến n&acirc;ng cao, c&aacute;c camera Ultra Wide v&agrave; Wide; chế độ Ban Đ&ecirc;m, Deep Fusion, Si&ecirc;u cận (Macro)...</li>\r\n	<li>HDR th&ocirc;ng minh thế hệ mới, khả năng quay video HDR Dolby Vision 4K, 4K 2160p@60fps...</li>\r\n	<li>Camera trước TrueDepth 12MP với chế độ X&oacute;a ph&ocirc;ng v&agrave; khả năng quay video&nbsp; 4K, Nhận diện khu&ocirc;n mặt th&ocirc;ng minh</li>\r\n	<li>Khả năng chống nước đạt chuẩn IP68 đứng đầu thị trường<sup>4</sup></li>\r\n	<li>iOS 15 với c&aacute;c tiện &iacute;ch được thiết kế lại tr&ecirc;n M&agrave;n H&igrave;nh Ch&iacute;nh, Thư Viện Ứng Dụng ho&agrave;n to&agrave;n mới, App Clips c&ugrave;ng nhiều t&iacute;nh năng kh&aacute;c</li>\r\n</ul>\r\n\r\n<h5>Ph&aacute;p l&yacute;</h5>\r\n\r\n<p><sup>1</sup>Cần c&oacute; g&oacute;i cước dữ liệu. Mạng 5G chỉ khả dụng ở một số thị trường v&agrave; được cung cấp qua một số nh&agrave; mạng.&nbsp;Tốc độ c&oacute; thể thay đổi t&ugrave;y địa điểm v&agrave; nh&agrave; mạng.&nbsp;.</p>\r\n\r\n<p><sup>2</sup>M&agrave;n h&igrave;nh c&oacute; c&aacute;c g&oacute;c bo tr&ograve;n. Khi t&iacute;nh theo h&igrave;nh chữ nhật, k&iacute;ch thước m&agrave;n h&igrave;nh l&agrave; 6.7 inch theo đường ch&eacute;o. Diện t&iacute;ch hiển thị thực tế nhỏ hơn.</p>\r\n\r\n<p><sup>3</sup>X&aacute;c nhận dựa v&agrave;o mặt trước c&oacute; Ceramic Shield của iPhone 13 Pro Max so với iPhone thế hệ trước.</p>\r\n\r\n<p><sup>4</sup>iPhone 13 Pro Max c&oacute; khả năng chống tia nước, chống nước v&agrave; chống bụi. Sản phẩm đ&atilde; qua kiểm nghiệm trong điều kiện ph&ograve;ng th&iacute; nghiệm c&oacute; kiểm so&aacute;t đạt mức IP68 theo ti&ecirc;u chuẩn IEC 60529 (chống nước ở độ s&acirc;u tối đa 6 m&eacute;t trong v&ograve;ng tối đa 30 ph&uacute;t). Khả năng chống tia nước, chống nước v&agrave; chống bụi kh&ocirc;ng phải l&agrave; c&aacute;c điều kiện vĩnh viễn. Khả năng n&agrave;y c&oacute; thể giảm do hao m&ograve;n th&ocirc;ng thường. Kh&ocirc;ng sạc pin khi iPhone đang bị ướt. Vui l&ograve;ng tham khảo hướng dẫn sử dụng để biết c&aacute;ch lau sạch v&agrave; l&agrave;m kh&ocirc; m&aacute;y. Kh&ocirc;ng bảo h&agrave;nh sản phẩm bị hỏng do thấm chất lỏng.</p>\r\n\r\n<p>Gi&aacute; sản phẩm tr&ecirc;n Tiki đ&atilde; bao gồm thuế theo luật hiện h&agrave;nh. B&ecirc;n cạnh đ&oacute;, tuỳ v&agrave;o loại sản phẩm, h&igrave;nh thức v&agrave; địa chỉ giao h&agrave;ng m&agrave; c&oacute; thể ph&aacute;t sinh th&ecirc;m chi ph&iacute; kh&aacute;c như ph&iacute; vận chuyển, phụ ph&iacute; h&agrave;ng cồng kềnh, thuế nhập khẩu (đối với đơn h&agrave;ng giao từ nước ngo&agrave;i c&oacute; gi&aacute; trị tr&ecirc;n 1 triệu đồng).....</p>', 37490000, '<h5>Nội dung về t&iacute;nh năng</h5>\r\n\r\n<p>iPhone 13 Pro Max g&oacute;i gọn nhiều t&iacute;nh năng cực đỉnh trong một thiết kế 6.7 inch.<sup>2</sup>&nbsp;Mạng 5G gi&uacute;p tải xuống c&aacute;c bộ phim một c&aacute;ch nhanh ch&oacute;ng v&agrave; xem trực tuyến video chất lượng cao.<sup>1</sup>&nbsp;M&agrave;n h&igrave;nh OLED nhỏ gọn v&agrave; s&aacute;ng đẹp ấn tượng. Ceramic Shield với khả năng chịu va đập khi rơi tốt hơn gấp 4 lần.<sup>3</sup>&nbsp;Ảnh chụp tuyệt đẹp trong điều kiện &aacute;nh s&aacute;ng yếu với chế độ Ban Đ&ecirc;m ở tất cả c&aacute;c camera. Quay phim, bi&ecirc;n tập v&agrave; ph&aacute;t video Dolby Vision đẳng cấp điện ảnh. Chip A15 Bionic mạnh mẽ.</p>\r\n\r\n<h5>T&iacute;nh năng nổi bật</h5>\r\n\r\n<ul>\r\n	<li>M&agrave;n h&igrave;nh OLED 6.7 inch<sup>2</sup></li>\r\n	<li>Ceramic Shield, chất liệu k&iacute;nh bền chắc nhất từng c&oacute; tr&ecirc;n điện thoại th&ocirc;ng minh</li>\r\n	<li>Mạng 5G cho tốc độ tải xuống si&ecirc;u nhanh, xem video v&agrave; nghe nhạc trực tuyến chất lượng cao<sup>1</sup></li>\r\n	<li>A15 Bionic cho hiệu năng mạnh hơn 20% so với thế hệ iPhone 12.</li>\r\n	<li>Hệ thống 3 camera 12 MP hiện đại trang bị cảm biến n&acirc;ng cao, c&aacute;c camera Ultra Wide v&agrave; Wide; chế độ Ban Đ&ecirc;m, Deep Fusion, Si&ecirc;u cận (Macro)...</li>\r\n	<li>HDR th&ocirc;ng minh thế hệ mới, khả năng quay video HDR Dolby Vision 4K, 4K 2160p@60fps...</li>\r\n	<li>Camera trước TrueDepth 12MP với chế độ X&oacute;a ph&ocirc;ng v&agrave; khả năng quay video&nbsp; 4K, Nhận diện khu&ocirc;n mặt th&ocirc;ng minh</li>\r\n	<li>Khả năng chống nước đạt chuẩn IP68 đứng đầu thị trường<sup>4</sup></li>\r\n	<li>iOS 15 với c&aacute;c tiện &iacute;ch được thiết kế lại tr&ecirc;n M&agrave;n H&igrave;nh Ch&iacute;nh, Thư Viện Ứng Dụng ho&agrave;n to&agrave;n mới, App Clips c&ugrave;ng nhiều t&iacute;nh năng kh&aacute;c</li>\r\n</ul>\r\n\r\n<h5>Ph&aacute;p l&yacute;</h5>\r\n\r\n<p><sup>1</sup>Cần c&oacute; g&oacute;i cước dữ liệu. Mạng 5G chỉ khả dụng ở một số thị trường v&agrave; được cung cấp qua một số nh&agrave; mạng.&nbsp;Tốc độ c&oacute; thể thay đổi t&ugrave;y địa điểm v&agrave; nh&agrave; mạng.&nbsp;.</p>\r\n\r\n<p><sup>2</sup>M&agrave;n h&igrave;nh c&oacute; c&aacute;c g&oacute;c bo tr&ograve;n. Khi t&iacute;nh theo h&igrave;nh chữ nhật, k&iacute;ch thước m&agrave;n h&igrave;nh l&agrave; 6.7 inch theo đường ch&eacute;o. Diện t&iacute;ch hiển thị thực tế nhỏ hơn.</p>\r\n\r\n<p><sup>3</sup>X&aacute;c nhận dựa v&agrave;o mặt trước c&oacute; Ceramic Shield của iPhone 13 Pro Max so với iPhone thế hệ trước.</p>\r\n\r\n<p><sup>4</sup>iPhone 13 Pro Max c&oacute; khả năng chống tia nước, chống nước v&agrave; chống bụi. Sản phẩm đ&atilde; qua kiểm nghiệm trong điều kiện ph&ograve;ng th&iacute; nghiệm c&oacute; kiểm so&aacute;t đạt mức IP68 theo ti&ecirc;u chuẩn IEC 60529 (chống nước ở độ s&acirc;u tối đa 6 m&eacute;t trong v&ograve;ng tối đa 30 ph&uacute;t). Khả năng chống tia nước, chống nước v&agrave; chống bụi kh&ocirc;ng phải l&agrave; c&aacute;c điều kiện vĩnh viễn. Khả năng n&agrave;y c&oacute; thể giảm do hao m&ograve;n th&ocirc;ng thường. Kh&ocirc;ng sạc pin khi iPhone đang bị ướt. Vui l&ograve;ng tham khảo hướng dẫn sử dụng để biết c&aacute;ch lau sạch v&agrave; l&agrave;m kh&ocirc; m&aacute;y. Kh&ocirc;ng bảo h&agrave;nh sản phẩm bị hỏng do thấm chất lỏng.</p>\r\n\r\n<p>Gi&aacute; sản phẩm tr&ecirc;n Tiki đ&atilde; bao gồm thuế theo luật hiện h&agrave;nh. B&ecirc;n cạnh đ&oacute;, tuỳ v&agrave;o loại sản phẩm, h&igrave;nh thức v&agrave; địa chỉ giao h&agrave;ng m&agrave; c&oacute; thể ph&aacute;t sinh th&ecirc;m chi ph&iacute; kh&aacute;c như ph&iacute; vận chuyển, phụ ph&iacute; h&agrave;ng cồng kềnh, thuế nhập khẩu (đối với đơn h&agrave;ng giao từ nước ngo&agrave;i c&oacute; gi&aacute; trị tr&ecirc;n 1 triệu đồng).....</p>', '47392b6ec552680cd7fa90a5b5f920bb5.jpg', 0, '2021-10-24 06:57:42', NULL, 'Điện Thoại iPhone 13 Pro Max 256GB - Hàng Chính Hãng', '998', 2),
(43, 8, 14, '<h3>C&aacute;c d&ograve;ng&nbsp;<a href=\"https://www.thegioididong.com/dtdd\" target=\"_blank\" title=\"Tham khảo các sản phẩm điện thoại tại Thế Giới Di Động\">smartphone gi&aacute; rẻ</a>&nbsp;ng&agrave;y c&agrave;ng được ưa chuộng tr&ecirc;n thị trường di động, nắm bắt được nhu cầu đ&oacute;&nbsp;<a href=\"https://www.thegioididong.com/dtdd-realme\" target=\"_blank\" title=\"Tham khảo các sản phẩm điện thoại Realme tại Thế Giới Di Động\">Realme</a>&nbsp;cũng đ&atilde; cho ra mắt chiếc điện thoại&nbsp;<a href=\"https://www.thegioididong.com/dtdd/realme-c11-2021\" target=\"_blank\" title=\"Tham khảo sản phẩm Realme C11 (2021) tại Thế Giới Di Động\">Realme C11 (2021)</a>&nbsp;l&agrave; một phi&ecirc;n bản đồng t&ecirc;n gọi với&nbsp;<a href=\"https://www.thegioididong.com/dtdd/realme-c11\" target=\"_blank\" title=\"Tham khảo điện thoại Realme C11 tại Thegioididong.com\">Realme C11</a>&nbsp;ra mắt trước đ&oacute;.</h3>', 2500000, '<h3>Ngắm nh&igrave;n mọi thứ qua m&agrave;n h&igrave;nh rộng lớn</h3>\r\n\r\n<p>Realme C11 (2021) xuất hiện với thiết kế c&aacute;c cạnh viền cong tr&ograve;n, &ocirc;m gọn th&acirc;n m&aacute;y quen thuộc. Mặt trước trang bị c&ocirc;ng nghệ m&agrave;n h&igrave;nh&nbsp;<a href=\"https://www.thegioididong.com/hoi-dap/man-hinh-ips-lcd-la-gi-905752\" target=\"_blank\" title=\"Màn hình IPS LCD là gì?\">IPS LCD</a>&nbsp;k&iacute;ch thước 6.5 inch, tỷ lệ khung h&igrave;nh 20:9 v&agrave; khả năng mở rộng g&oacute;c nh&igrave;n gi&uacute;p m&aacute;y hiển thị mọi thứ sắc n&eacute;t, r&otilde; r&agrave;ng.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/236257/realme-c11-2021-001.jpg\" onclick=\"return false;\"><img alt=\"Realme C11 (2021) | Trang bị công nghệ màn hình IPS LCD kích thước 6.5 inch\" src=\"https://cdn.tgdd.vn/Products/Images/42/236257/realme-c11-2021-001.jpg\" title=\"Realme C11 (2021) | Trang bị công nghệ màn hình IPS LCD kích thước 6.5 inch\" /></a></p>\r\n\r\n<p>Điện thoại cung cấp độ s&aacute;ng tối đa 400 nits, hỗ trợ gam m&agrave;u đa dạng cho c&aacute;c h&igrave;nh ảnh hiện diện tr&ecirc;n m&aacute;y th&ecirc;m phần rực rỡ, tăng cảm hứng giải tr&iacute; cho người d&ugrave;ng.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/236257/realme-c11-2021x12.jpg\" onclick=\"return false;\"><img alt=\"Realme C11 (2021) | Điện thoại cung cấp độ sáng tối đa 400 nits\" src=\"https://cdn.tgdd.vn/Products/Images/42/236257/realme-c11-2021x12.jpg\" title=\"Realme C11 (2021) | Điện thoại cung cấp độ sáng tối đa 400 nits\" /></a></p>\r\n\r\n<p>M&agrave;n h&igrave;nh của Realme C11 (2021) c&ograve;n được bảo vệ chắc chắn bởi mặt k&iacute;nh cường lực, chống chịu đ&aacute;ng kể c&aacute;c lực va đập, trầy xước từ m&ocirc;i trường b&ecirc;n ngo&agrave;i.&nbsp;</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/236257/realme-c11-2021-007.jpg\" onclick=\"return false;\"><img alt=\"Realme C11 (2021) | Màn hình trang bị mặt kính cường lực, chống chịu đáng kể các lực va đập, trầy xước\" src=\"https://cdn.tgdd.vn/Products/Images/42/236257/realme-c11-2021-007.jpg\" title=\"Realme C11 (2021) | Màn hình trang bị mặt kính cường lực, chống chịu đáng kể các lực va đập, trầy xước\" /></a></p>\r\n\r\n<h3>Hiệu năng đủ d&ugrave;ng ở mức cơ bản</h3>\r\n\r\n<p>So với mức gi&aacute; của Realme C11 (2021) th&igrave; con chip Spreadtrum SC9863A m&agrave; m&aacute;y trang bị c&oacute; hiệu năng ở mức đủ d&ugrave;ng, c&aacute;c thao t&aacute;c như lướt web, xem Youtube,... m&aacute;y đều đ&aacute;p ứng tốt.</p>', 'realme-c11-2021-xanh-duong-5-org88.jpg', 0, '2021-11-29 05:24:34', NULL, 'Điện thoại Realme C11 (2021)', '250', NULL),
(44, 14, 25, '<h3>Thiết kế nhỏ gọn, c&acirc;n đối</h3>\r\n\r\n<p><a href=\"https://www.thegioididong.com/chuot-may-tinh/chuot-khong-day-rapoo-m216-den\" target=\"_blank\" title=\"Chuột Không Dây Rapoo M216 Đen\">Chuột Kh&ocirc;ng D&acirc;y Rapoo M216 Đen</a>&nbsp;c&oacute; tone m&agrave;u đen kh&aacute; sang trọng, trọng lượng chỉ&nbsp;<strong>55 g</strong>&nbsp;rất nhỏ gọn &ocirc;m s&aacute;t v&agrave;o l&ograve;ng b&agrave;n tay, đảm bảo cho người dễ d&agrave;ng sử dụng m&agrave; kh&ocirc;ng bị mỏi tay.</p>\r\n\r\n<p>B&ecirc;n cạnh đ&oacute; chuột c&ograve;n tạo cảm gi&aacute;c &ecirc;m &aacute;i khi sử dụng do c&oacute; những đường viền cao su xung quanh, ph&ugrave; hợp cho những ai đi học, đi l&agrave;m,...</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/86/252625/chuot-khong-day-rapoo-m216-den-141021-121748.jpg\" onclick=\"return false;\"><img alt=\"Thiết kế nhỏ gọn - Chuột Không Dây Rapoo M216 Đen\" src=\"https://cdn.tgdd.vn/Products/Images/86/252625/chuot-khong-day-rapoo-m216-den-141021-121748.jpg\" title=\"Thiết kế 252625\" /></a></p>\r\n\r\n<h3>Thao t&aacute;c nhanh với độ ph&acirc;n giải quang học 1000&nbsp;<a href=\"https://www.thegioididong.com/hoi-dap/do-phan-giai-dpi-chuot-may-tinh-la-gi-980986\" target=\"_blank\" title=\"DPI\">DPI</a></h3>\r\n\r\n<p>Người d&ugrave;ng c&oacute; thể sử dụng&nbsp;<a href=\"https://www.thegioididong.com/chuot-may-tinh-khong-day\" target=\"_blank\" title=\"chuột không dây\">chuột kh&ocirc;ng d&acirc;y</a>&nbsp;tr&ecirc;n nhiều bề mặt kh&aacute;c nhau.&nbsp;<strong>1000 DPI</strong>&nbsp;gi&uacute;p di chuyển chuột nhanh nhạy, xử l&yacute; c&aacute;c t&agrave;i liệu văn ph&ograve;ng, chỉnh sửa h&igrave;nh ảnh cơ bản hay trải nghiệm c&aacute;c game th&ocirc;ng thường kh&aacute; tốt.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/86/252625/chuot-khong-day-rapoo-m216-den-141021-124158.jpg\" onclick=\"return false;\"><img alt=\"DPI 1000 - Chuột Không Dây Rapoo M216 Đen\" src=\"https://cdn.tgdd.vn/Products/Images/86/252625/chuot-khong-day-rapoo-m216-den-141021-124158.jpg\" title=\"DPI 252625\" /></a></p>\r\n\r\n<h3>Khoảng c&aacute;ch kết nối kh&ocirc;ng d&acirc;y xa đến 10 m với USB Receiver (đầu thu USB)</h3>\r\n\r\n<p>USB Receiver của&nbsp;<a href=\"https://www.thegioididong.com/chuot-may-tinh-rapoo\" target=\"_blank\" title=\"chuột Rapoo\">chuột Rapoo</a>&nbsp;M216 cho sự tiện lợi khi kết nối do tương th&iacute;ch từ&nbsp;<a href=\"https://www.thegioididong.com/laptop\" target=\"_blank\" title=\"laptop\">laptop</a>, PC đến c&aacute;c thiết bị di động, mang lại t&iacute;nh hiệu ổn định trong v&ograve;ng&nbsp;<strong>10 m</strong>&nbsp;với băng tần&nbsp;<strong>2.4 GHz</strong>.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/86/252625/chuot-khong-day-rapoo-m216-den-141021-124949.jpg\" onclick=\"return false;\"><img alt=\"Kết nối USB mượt mà - Chuột Không Dây Rapoo M216 Đen\" src=\"https://cdn.tgdd.vn/Products/Images/86/252625/chuot-khong-day-rapoo-m216-den-141021-124949.jpg\" title=\"Kết nối USB 252625\" /></a></p>\r\n\r\n<h3>Thao t&aacute;c mượt m&agrave; với con lăn chuột, hai n&uacute;t bấm phản hồi tốt</h3>\r\n\r\n<p>Chuột tr&aacute;i - phải của Rapoo M216 phản hồi tốt khi sử dụng, kh&ocirc;ng bị kẹt. Con lăn cuộn mượt m&agrave; qua c&aacute;c trang t&agrave;i liệu, lướt web nhanh ch&oacute;ng. B&ecirc;n dưới th&acirc;n chuột Rapoo c&ograve;n c&oacute; 1 n&uacute;t nhấn l&agrave; n&uacute;t nguồn bật/tắt.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/86/252625/chuot-khong-day-rapoo-m216-den-141021-011110.jpg\" onclick=\"return false;\"><img alt=\"Con lăn, nút bấm mượt mà, nhạy - Chuột Không Dây Rapoo M216 Đen\" src=\"https://cdn.tgdd.vn/Products/Images/86/252625/chuot-khong-day-rapoo-m216-den-141021-011110.jpg\" title=\"Nút bấm nhạy 252625\" /></a></p>', 200000, '<h3>Hoạt động dễ d&agrave;ng nhờ pin AA phổ biến</h3>\r\n\r\n<p>Hỗ trợ c&ocirc;ng nghệ tiết kiệm pin kết hợp với chế độ ngủ tự động gi&uacute;p cho pin của Rapoo M216 được tối ưu hơn, chỉ với 1 vi&ecirc;n pin AA cho thời gian d&ugrave;ng k&eacute;o d&agrave;i đến&nbsp;<strong>9 - 12 th&aacute;ng</strong>&nbsp;tuỳ v&agrave;o tần suất sử dụng của bạn.</p>\r\n\r\n<p>Nhấn tắt chuột qua n&uacute;t nguồn b&ecirc;n dưới th&acirc;n chuột khi kh&ocirc;ng cần sử dụng để tr&aacute;nh l&atilde;ng ph&iacute; pin.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/86/252625/chuot-khong-day-rapoo-m216-den-141021-012041.jpg\" onclick=\"return false;\"><img alt=\"Pin AA cho thời gian sử dụng lâu - Chuột Không Dây Rapoo M216 Đen\" src=\"https://cdn.tgdd.vn/Products/Images/86/252625/chuot-khong-day-rapoo-m216-den-141021-012041.jpg\" title=\"Pin 252625\" /></a></p>\r\n\r\n<h3>Hỗ trợ hệ điều h&agrave;nh MacOS (MacBook, iMac), Windows</h3>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/86/252625/chuot-khong-day-rapoo-m216-den-141021-012701.jpg\" onclick=\"return false;\"><img alt=\"Hỗ trợ Windows và MacOS - Chuột Không Dây Rapoo M216 Đen\" src=\"https://cdn.tgdd.vn/Products/Images/86/252625/chuot-khong-day-rapoo-m216-den-141021-012701.jpg\" title=\"Hệ điều hành 252625\" /></a></p>\r\n\r\n<p>Với những ưu điểm thiết kế c&acirc;n đối, nhỏ gọn, độ ph&acirc;n giải quang học 1000 DPI, tương th&iacute;ch nhiều thiết bị với USB Receiver, nhấp chuột nhạy v&agrave; tiết kiệm năng lượng,&nbsp;Chuột Kh&ocirc;ng D&acirc;y Rapoo M216 Đen rất th&iacute;ch hợp cho những người c&ograve;n đang đi học hay đang l&agrave;m c&aacute;c c&ocirc;ng việc văn ph&ograve;ng.</p>', 'chuot-khong-day-rapoo-m216-den-1-187.jpg', 0, '2021-11-29 05:29:10', NULL, 'Chuột Không Dây Rapoo M216 Đen', '299', 1),
(45, 14, 25, '<ul>\r\n	<li>Thiết kế hiện đại, tiện dụng.</li>\r\n	<li>K&iacute;ch thước thực tế 37 x 3.8 x 27 cm, vừa vặn cho macbook/laptop 14 inch.</li>\r\n	<li>Chất liệu vải tốt d&agrave;y dặn, chống sốc tốt.</li>\r\n	<li>4 g&oacute;c bo tr&ograve;n tr&aacute;nh trầy xước, va đập g&oacute;c m&aacute;y.</li>\r\n	<li>D&acirc;y k&eacute;o linh hoạt, dễ sử dụng.</li>\r\n</ul>', 250000, '<h3>Thiết kế đơn giản, năng động, dễ d&agrave;ng di chuyển&nbsp;bằng 1 tay</h3>\r\n\r\n<p><a href=\"https://www.thegioididong.com/tui-chong-soc/tui-chong-soc-laptop-14-inch-co-ngan-phu-evalu-lmp\" target=\"_blank\" title=\"Túi chống sốc Laptop 14 inch có ngăn phụ eValu LMP-T004D\">T&uacute;i chống sốc Laptop 14 inch c&oacute; ngăn phụ eValu LMP-T004D</a>&nbsp;được may tỉ mỉ, kh&ocirc;ng lộ bất kỳ đường chỉ &agrave;o ra ngo&agrave;i, cho kết cấu ho&agrave;n thiện, tinh xảo, c&oacute; t&iacute;nh thẩm mỹ cao v&agrave; gi&uacute;p n&acirc;ng cao tuổi thọ cho t&uacute;i hiệu quả. Sản phẩm được chế t&aacute;c với 2 phi&ecirc;n bản xanh lam v&agrave; xanh l&aacute; đậm mạnh mẽ, thanh lịch, ph&ugrave; hợp cho mọi lứa tuổi, giới t&iacute;nh.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/7923/232796/tui-chong-soc-laptop-14-inch-co-ngan-phu-evalu-lmp-301320-031317.jpg\" onclick=\"return false;\"><img alt=\"Túi chống sốc Laptop 14 inch có ngăn phụ eValu LMP-T004D - Thiết kế đơn giản, năng động\" src=\"https://cdn.tgdd.vn/Products/Images/7923/232796/tui-chong-soc-laptop-14-inch-co-ngan-phu-evalu-lmp-301320-031317.jpg\" title=\"Túi chống sốc Laptop 14 inch có ngăn phụ eValu LMP-T004D - Thiết kế đơn giản, năng động\" /></a></p>', 'tui-chong-soc-laptop-14-inch-co-ngan-phu-evalu-lmp-xanh-dam-1-1-org27.jpg', 0, '2021-11-29 05:32:10', NULL, 'Túi chống sốc Laptop 14 inch có ngăn phụ eValu LMP-T004D', '208', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_raiting`
--

CREATE TABLE `tbl_raiting` (
  `raiting_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `raiting` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_raiting`
--

INSERT INTO `tbl_raiting` (`raiting_id`, `product_id`, `raiting`) VALUES
(25, 37, 4),
(26, 37, 5),
(27, 37, 3),
(28, 37, 2),
(29, 37, 2),
(30, 37, 3),
(31, 37, 2),
(35, 37, 1),
(36, 37, 1),
(37, 37, 1),
(38, 37, 1),
(39, 37, 1),
(40, 37, 5),
(41, 37, 5),
(42, 37, 5),
(43, 37, 5),
(44, 34, 4),
(45, 34, 3),
(46, 36, 4),
(47, 31, 5),
(48, 31, 4),
(49, 31, 3),
(50, 35, 5),
(51, 35, 3),
(52, 37, 5),
(53, 40, 5),
(54, 40, 5),
(55, 41, 5),
(56, 31, 5),
(57, 42, 5),
(58, 42, 5),
(59, 45, 5),
(60, 45, 5),
(61, 45, 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_roles`
--

CREATE TABLE `tbl_roles` (
  `id_roles` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_roles`
--

INSERT INTO `tbl_roles` (`id_roles`, `name`) VALUES
(1, 'admin'),
(2, 'author'),
(3, 'user'),
(4, 'Khach hang');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_shipping`
--

CREATE TABLE `tbl_shipping` (
  `shipping_id` int(10) UNSIGNED NOT NULL,
  `shipping_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_notes` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_shipping`
--

INSERT INTO `tbl_shipping` (`shipping_id`, `shipping_name`, `shipping_notes`, `shipping_address`, `shipping_phone`, `shipping_email`, `created_at`, `updated_at`) VALUES
(4, 'Tâm Minh Trần', 'ship nhanh', 'hẻm 51 cần thơ', '0869184540', 'tam12a3@gmail.com', NULL, NULL),
(7, 'Tâm Minh Trần', '20/3/2021 2:17 pm', '38/27,Mậu Thân ,An Hòa,Ninh Kiều,cần Thơ', '0869184540', 'tam12a3@gmail.com', NULL, NULL),
(8, 'Tâm Minh Trần', 'sa', '27/38 Cần Thơ', '0869184538', 'tam12a3@gmail.com', NULL, NULL),
(9, 'Võ Văn Đẩu', 'Hàng mới', '38/27,Mậu Thân ,An Hòa,Ninh Kiều,cần Thơ', '0869184538', 'dauvo12a3@gmail.com', NULL, NULL),
(10, 'La Chí Thảo', 'Hàng khuyến mãi', 'Cần Thơ', '17068693030', 'thao@gamil.com', NULL, NULL),
(11, 'Thảo', 'l', 'Cần Thơ', '17068693030', 'thao@gamil.com', NULL, NULL),
(12, 'Thảo', 'v', 'Cần Thơ', '113', 'thao@gamil.com', NULL, NULL),
(13, 'Thảo', 'j', '38/27,Mậu Thân ,An Hòa,Ninh Kiều,cần Thơ', '0869184540', 'thao@gamil.com', NULL, NULL),
(14, 'Thảo', 'm', '38/27,Mậu Thân ,An Hòa,Ninh Kiều,cần Thơ', '0869184538', 'thao@gamil.com', NULL, NULL),
(15, 'Thảo', 'r4', 'Cần Thơ', '0869184540', 'thao@gamil.com', NULL, NULL),
(16, 'Võ Văn Đẩu', '..', '27/38 Cần Thơ', '0869184538', 'thao@gamil.com', NULL, NULL),
(17, 'Võ Văn Đẩu', 'm', '38/27,Mậu Thân ,An Hòa,Ninh Kiều,cần Thơ', '0869184538', 'thao@gamil.com', NULL, NULL),
(18, 'Thảo', 'Hàng ngon', 'Cần Thơ', '0869184538', 'thao@gamil.com', NULL, NULL),
(19, 'Tâm Minh Trần', 'Hàng nhập khẩu từ Cai Lậy', '38/27,Mậu Thân ,An Hòa,Ninh Kiều,cần Thơ', '0869184540', 'tam12a3@gmail.com', NULL, NULL),
(20, 'Tâm Minh Trần', 's', '38/27,Mậu Thân ,An Hòa,Ninh Kiều,cần Thơ', '0869184537', 'tam12a3@gmail.com', NULL, NULL),
(21, 'Tâm Minh Trần', 's', '27/38 Cần Thơ', '0869184540', 'tam12a3@gmail.com', NULL, NULL),
(22, 'Võ Văn Đẩu', 'Điện thoại', '38/27,Mậu Thân ,An Hòa,Ninh Kiều,cần Thơ', '0869184538', 'dauvo12a3@gmail.com', NULL, NULL),
(23, 'Võ Văn Đẩu', 'ok', '38/27,Mậu Thân ,An Hòa,Ninh Kiều,cần Thơ', '0869184538', 'dauvo12a3@gmail.com', NULL, NULL),
(24, 'Võ Văn Đẩu', 'xd', '38/27,Mậu Thân ,An Hòa,Ninh Kiều,cần Thơ', '0869184538', 'dauvo12a3@gmail.com', NULL, NULL),
(25, 'Thảo', 's', 'hẻm 51 cần thơ', '0869184538', 'thao@gamil.com', NULL, NULL),
(26, 'Thảo', 's', '38/27,Mậu Thân ,An Hòa,Ninh Kiều,cần Thơ', '0869184538', 'thao@gamil.com', NULL, NULL),
(27, 'Tâm Minh Trần', 's', 's', '17068693030', 'tam12a3@gmail.com', NULL, NULL),
(28, 'La Chí Thảo', 'Mua chơi thôi', '38/27,Mậu Thân ,An Hòa,Ninh Kiều,cần Thơ', '0869184538', 'thao@gamil.com', NULL, NULL),
(29, 'La Chí Thảo', 's', 'Cần Thơ', '0869184538', 'dauvo12a3@gmail.com', NULL, NULL),
(30, 'La Chí Thảo', 'f', '27/38 Cần Thơ', '0869184537', 'dauvo12a3@gmail.com', NULL, NULL),
(31, 'La Chí Thảo', 's', '27/38 Cần Thơ', '0869184540', 'thao@gamil.com', NULL, NULL),
(32, 'La Chí Thảo', '.', '27/38 Cần Thơ', '0869184540', 'thao@gamil.com', NULL, NULL),
(33, 'Võ Văn Đẩu', 'd', '38/27,Mậu Thân ,An Hòa,Ninh Kiều,cần Thơ', '0869184538', 'dauvo12a3@gmail.com', NULL, NULL),
(34, 'La Chí Thảo', 's', '40/2 Cần Thơ', '0869184539', 'thao@gamil.com', NULL, NULL),
(35, 'La Chí Thảo', 's', 'hẻm 51 cần thơ', '0869184537', 'thao@gamil.com', NULL, NULL),
(36, 'Võ Văn Đẩu', 's', '38/27,Mậu Thân ,An Hòa,Ninh Kiều,cần Thơ', '0869184538', 'dauvo12a3@gmail.com', NULL, NULL),
(37, 'Võ Văn Đẩu', 's', '38/27,Mậu Thân ,An Hòa,Ninh Kiều,cần Thơ', '0869184538', 'dauvo12a3@gmail.com', NULL, NULL),
(38, 'Võ Văn Đẩu', 's', '38/27,Mậu Thân ,An Hòa,Ninh Kiều,cần Thơ', '0869184538', 'dauvo12a3@gmail.com', NULL, NULL),
(39, 'Võ Văn Đẩu', 's', '38/27,Mậu Thân ,An Hòa,Ninh Kiều,cần Thơ', '0869184538', 'dauvo12a3@gmail.com', NULL, NULL),
(40, 'Võ Văn Đẩu', 'ss', '38/27,Mậu Thân ,An Hòa,Ninh Kiều,cần Thơ', '0869184538', 'dauvo12a3@gmail.com', NULL, NULL),
(41, 'Võ Văn Đẩu', 'ss', '38/27,Mậu Thân ,An Hòa,Ninh Kiều,cần Thơ', '0869184538', 'dauvo12a3@gmail.com', NULL, NULL),
(42, 'Tâm Minh Trần', 'Hang  giao gap', '38/27,Mậu Thân ,An Hòa,Ninh Kiều,cần Thơ', '0869184538', 'tam12a3@gmail.com', NULL, NULL),
(43, 'Hai', '5', 'Vinh Long', '879646555', 'hai@gmail.com', NULL, NULL),
(44, 'đẩu võ', 'hi', 'Cẩn Thơ', '0869184538', 'dauvo12a3@gmail.com.vn', NULL, NULL),
(45, 'đẩu võ', 'fd', 'Cẩn Thơ', '0869184538', 'dauvo12a3@gmail.com.vn', NULL, NULL),
(46, 'đẩu võ', 'll', 'Cẩn Thơ', '0869184538', 'dauvo12a3@gmail.com', NULL, NULL),
(47, 'đẩu võ', 'k', 'Cẩn Thơ', '0869184538', 'dauvo12a3@gmail.com', NULL, NULL),
(48, 'đẩu võ', 'hi', 'Cẩn Thơ', '0869184538', 'dauvo12a3@gmail.com', NULL, NULL),
(49, 'đẩu võ', 'hi', 'ctu', '0869184538', 'dauvo12a3@gmail.com', NULL, NULL),
(50, 'Đẩu', 'ok', '346,Cay Lậy,Tiền Giang', '0869184538', 'admin@gmail.com', NULL, NULL),
(51, 'Đẩu', 'ok', '346,Cay Lậy,Tiền Giang', '0869184538', 'admin@gmail.com', NULL, NULL),
(52, 'Đẩu', 'ok', '346,Cay Lậy,Tiền Giang', '0869184538', 'admin@gmail.com', NULL, NULL),
(53, 'Đẩu', 'ok', '346,Cay Lậy,Tiền Giang', '0869184538', 'admin@gmail.com', NULL, NULL),
(54, 'Đẩu', 'okk', '346,Cay Lậy,Tiền Giang', '0869184538', 'admin@gmail.com', NULL, NULL),
(55, 'Đẩu', 'ok', '346,Cay Lậy,Tiền Giang', '0869184538', 'admin@gmail.com', NULL, NULL),
(56, 'Đẩu', 'ok', '346,Cay Lậy,Tiền Giang', '0869184538', 'admin@gmail.com', NULL, NULL),
(57, 'Đẩu', 'ok', '346,Cay Lậy,Tiền Giang', '0869184538', 'admin@gmail.com', NULL, NULL),
(58, 'Đẩu', 'ok', '346,Cay Lậy,Tiền Giang', '0869184538', 'admin@gmail.com', NULL, NULL),
(59, 'Đẩu', 'ok', '346,Cay Lậy,Tiền Giang', '0869184538', 'admin@gmail.com', NULL, NULL),
(60, 'Đẩu', 'ok', '346,Cay Lậy,Tiền Giang', '0869184538', 'admin@gmail.com', NULL, NULL),
(61, 'Đẩu', 'ok', '346,Cay Lậy,Tiền Giang', '0869184538', 'admin@gmail.com', NULL, NULL),
(62, 'Đẩu', 'ok', '346,Cay Lậy,Tiền Giang', '0869184538', 'admin@gmail.com', NULL, NULL),
(63, 'đạt', 'ok', '346,Bình Trị,Bình Phú,Cai Lậy,Tiền Giang', '0869184538', 'dat@gmail.com', NULL, NULL),
(64, 'đạt', 'ok', '346,Bình Trị,Bình Phú,Cai Lậy,Tiền Giang', '0869184538', 'dat@gmail.com', NULL, NULL),
(65, 'Đẩu', 'ok', '346,Cay Lậy,Tiền Giang', '0869184538', 'admin@gmail.com', NULL, NULL),
(66, 'đạt', 'ok', '346,Bình Trị,Bình Phú,Cai Lậy,Tiền Giang', '0869184538', 'dat@gmail.com', NULL, NULL),
(67, 'đạt', 'ok', '346,Bình Trị,Bình Phú,Cai Lậy,Tiền Giang', '0869184538', 'dat@gmail.com', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_slider`
--

CREATE TABLE `tbl_slider` (
  `slider_id` int(11) NOT NULL,
  `slider_name` varchar(255) NOT NULL,
  `slider_desc` varchar(100) NOT NULL,
  `slider_image` varchar(100) NOT NULL,
  `slider_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_slider`
--

INSERT INTO `tbl_slider` (`slider_id`, `slider_name`, `slider_desc`, `slider_image`, `slider_status`) VALUES
(6, 'Điện thoại iphone 12', 'Iphone 12 hot', 'iphone191.jpg', '0'),
(9, 'Điện thoại iphone 12', '3', 'samsungbang66.jpg', '0');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_social`
--

CREATE TABLE `tbl_social` (
  `user_id` int(11) NOT NULL,
  `provider_user_id` varchar(100) NOT NULL,
  `provider` varchar(100) NOT NULL,
  `user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_videos`
--

CREATE TABLE `tbl_videos` (
  `video_id` int(11) NOT NULL,
  `video_title` varchar(250) NOT NULL,
  `video_link` varchar(100) NOT NULL,
  `video_desc` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_videos`
--

INSERT INTO `tbl_videos` (`video_id`, `video_title`, `video_link`, `video_desc`) VALUES
(1, 'Jack | LAYLALAY | Official Music Video', 'bTFoZBIIu4E', '#JackJ97​ #LAYLALAY​ #J97​ #Jack​ #PhuongTuan​ #VieNetwork​ #YingYangMedia​\r\nJack | LAYLALAY | Official Music Video\r\n\r\nĐồng hành cùng nhãn hàng bia LARUE\r\n---\r\nCOMPOSER: JACK (J97) \r\nSINGER: JACK (J97)\r\nMUSIC PRODUCER:  DTAP\r\nARRANGER: TÙNG CEDRUS - W/n \r\nMIX AND MASTER:  MINH MAXIMUM\r\nRECORD: KHẢI ĐĂNG - TÙNG CEDRUS - HƯNG THỊNH\r\nGUITARIST: NGUYỄN DUY ANH'),
(5, 'Đom Đóm (Jack) Hương Ly - MR.C Remix..', '678XvkviqzI', '► Đom Đóm (Jack) Hương Ly - MR.C Remix\n\nTrong Video này, @Tâm Sự Vinahouse​ tặng anh chị em yêu quý mình bạn 1 track nhạc remix hay hót (2021).'),
(10, 'NHẠC TRẺ REMIX 2021 HAY NHẤT HIỆN NAY - EDM Tik Tok ORINN REMIX - Lk Nhạc Trẻ Remix Gây Nghiện Nhất', 'mqQl0yRj2ro', 'ORINN REMIX: NHẠC TRẺ REMIX 2021 HAY NHẤT HIỆN NAY - EDM Tik Tok ORINN REMIX - Lk Nhạc Trẻ Remix Gây Nghiện Nhất'),
(11, 'Chỉ Là Không Cùng Nhau Remix - Tăng Phúc ft. Trương Thảo Nhi | THỜI KHÔNG SAI LỆCH', 'jQx1PyPAbtg', 'Từng Cho Nhau Từng Là Của Nhau Thật Lâu... Chỉ Là Không Cùng Nhau'),
(12, 'NHỚ NGƯỜI HAY NHỚ - MEE MUSIC REMIX - NHỚ NGƯỜI HAY NHỚ REMIX HOT TIKTOK 2021 - ĐẮM THUYỀN DJ', 'Xd0uMcyT86Y', '#nonstop2020​ #vietmix​ #nhacremix​\n\n\nLink MV: https://youtu.be/QDJgzJVVE2Y​​​​\nLink MP3: https://www.nhaccuatui.com/bai-hat/nh​...'),
(14, 'Khi Yêu Là Thương Lắm Xa Nhau Như Cứa Lòng | Nhạc Hot Tik Tok', '3bv06ZZ2GxU', 'Khi Yêu Là Thương Lắm Xa Nhau Như Cứa Lòng | Nhạc Hot Tik Tok.');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin_roles`
--
ALTER TABLE `admin_roles`
  ADD PRIMARY KEY (`id_admin_roles`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_address`
--
ALTER TABLE `tbl_address`
  ADD PRIMARY KEY (`customer_id`);

--
-- Chỉ mục cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Chỉ mục cho bảng `tbl_brand`
--
ALTER TABLE `tbl_brand`
  ADD PRIMARY KEY (`brand_id`);

--
-- Chỉ mục cho bảng `tbl_category_product`
--
ALTER TABLE `tbl_category_product`
  ADD PRIMARY KEY (`category_id`);

--
-- Chỉ mục cho bảng `tbl_coupon`
--
ALTER TABLE `tbl_coupon`
  ADD PRIMARY KEY (`coupon_id`);

--
-- Chỉ mục cho bảng `tbl_customers`
--
ALTER TABLE `tbl_customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Chỉ mục cho bảng `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`order_id`);

--
-- Chỉ mục cho bảng `tbl_order_details`
--
ALTER TABLE `tbl_order_details`
  ADD PRIMARY KEY (`order_details_id`);

--
-- Chỉ mục cho bảng `tbl_payment`
--
ALTER TABLE `tbl_payment`
  ADD PRIMARY KEY (`payment_id`);

--
-- Chỉ mục cho bảng `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`product_id`);

--
-- Chỉ mục cho bảng `tbl_raiting`
--
ALTER TABLE `tbl_raiting`
  ADD PRIMARY KEY (`raiting_id`);

--
-- Chỉ mục cho bảng `tbl_roles`
--
ALTER TABLE `tbl_roles`
  ADD PRIMARY KEY (`id_roles`);

--
-- Chỉ mục cho bảng `tbl_shipping`
--
ALTER TABLE `tbl_shipping`
  ADD PRIMARY KEY (`shipping_id`);

--
-- Chỉ mục cho bảng `tbl_slider`
--
ALTER TABLE `tbl_slider`
  ADD PRIMARY KEY (`slider_id`);

--
-- Chỉ mục cho bảng `tbl_social`
--
ALTER TABLE `tbl_social`
  ADD PRIMARY KEY (`user_id`);

--
-- Chỉ mục cho bảng `tbl_videos`
--
ALTER TABLE `tbl_videos`
  ADD PRIMARY KEY (`video_id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin_roles`
--
ALTER TABLE `admin_roles`
  MODIFY `id_admin_roles` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `tbl_brand`
--
ALTER TABLE `tbl_brand`
  MODIFY `brand_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT cho bảng `tbl_category_product`
--
ALTER TABLE `tbl_category_product`
  MODIFY `category_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT cho bảng `tbl_coupon`
--
ALTER TABLE `tbl_coupon`
  MODIFY `coupon_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `tbl_customers`
--
ALTER TABLE `tbl_customers`
  MODIFY `customer_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `order_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT cho bảng `tbl_order_details`
--
ALTER TABLE `tbl_order_details`
  MODIFY `order_details_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT cho bảng `tbl_payment`
--
ALTER TABLE `tbl_payment`
  MODIFY `payment_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT cho bảng `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `product_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT cho bảng `tbl_raiting`
--
ALTER TABLE `tbl_raiting`
  MODIFY `raiting_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT cho bảng `tbl_roles`
--
ALTER TABLE `tbl_roles`
  MODIFY `id_roles` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `tbl_shipping`
--
ALTER TABLE `tbl_shipping`
  MODIFY `shipping_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT cho bảng `tbl_slider`
--
ALTER TABLE `tbl_slider`
  MODIFY `slider_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `tbl_social`
--
ALTER TABLE `tbl_social`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tbl_videos`
--
ALTER TABLE `tbl_videos`
  MODIFY `video_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
