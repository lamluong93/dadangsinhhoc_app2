-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 12, 2021 lúc 06:57 AM
-- Phiên bản máy phục vụ: 10.4.20-MariaDB
-- Phiên bản PHP: 7.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `dadangsinhhoc_app`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bao_cao_ap_luc_len_ddsh`
--

CREATE TABLE `bao_cao_ap_luc_len_ddsh` (
  `id` int(10) UNSIGNED NOT NULL,
  `thongso_id` int(10) UNSIGNED NOT NULL,
  `soluong` double DEFAULT NULL,
  `donvitinhsoluong` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `khoiluong` double DEFAULT NULL,
  `donvitinhkhoiluong` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dientich` double DEFAULT NULL,
  `mota` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phancap` smallint(5) UNSIGNED NOT NULL,
  `tendonvi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kybaocao` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thoigianbatdau` datetime DEFAULT NULL,
  `thoigianketthuc` datetime DEFAULT NULL,
  `ghichu` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nguondulieu` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `bao_cao_ap_luc_len_ddsh`
--

INSERT INTO `bao_cao_ap_luc_len_ddsh` (`id`, `thongso_id`, `soluong`, `donvitinhsoluong`, `khoiluong`, `donvitinhkhoiluong`, `dientich`, `mota`, `phancap`, `tendonvi`, `kybaocao`, `thoigianbatdau`, `thoigianketthuc`, `ghichu`, `nguondulieu`, `created_at`, `updated_at`) VALUES
(1, 2, 8.89, 'Cái', 3.4, 'g', 5, 'g4t45235', 13, 'đơn vị 1', 'báo cáo 1', '2021-08-12 00:00:00', '2021-09-01 00:00:00', 'gv\r<br>ch', 'nguồn dữ liệu', '2021-08-20 08:38:58', '2021-08-20 08:38:58'),
(2, 2, NULL, NULL, NULL, NULL, NULL, NULL, 13, NULL, NULL, NULL, NULL, '', NULL, '2021-08-20 08:40:12', '2021-08-20 08:40:12'),
(3, 1, NULL, NULL, NULL, NULL, NULL, NULL, 16, NULL, NULL, '2021-08-19 00:00:00', '2021-09-10 00:00:00', '', NULL, '2021-08-20 08:40:46', '2021-08-20 08:40:46');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bo`
--

CREATE TABLE `bo` (
  `id` int(10) UNSIGNED NOT NULL,
  `tenkhoahoc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tentiengviet` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lop_id` int(10) UNSIGNED NOT NULL,
  `ghichu` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `chuanphanloai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trangthai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dongdanh_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `bo`
--

INSERT INTO `bo` (`id`, `tenkhoahoc`, `tentiengviet`, `lop_id`, `ghichu`, `chuanphanloai`, `trangthai`, `dongdanh_id`, `created_at`, `updated_at`) VALUES
(1, 'bo01', 'Bộ 1', 2, 'ghi chú', 'chuẩn phân loại bộ', 'trạng thái bộ', 1, '2021-10-04 03:23:23', '2021-10-04 03:23:23'),
(2, 'Tên khoa học1', 'gggg', 1, 'jk', 'chuẩn phân loại', 'Trạng thái bộ dữ liệu', NULL, '2021-10-04 03:27:33', '2021-10-04 03:27:33');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bo_du_lieu`
--

CREATE TABLE `bo_du_lieu` (
  `id` int(10) UNSIGNED NOT NULL,
  `tieude` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngaycongbo` datetime NOT NULL,
  `ngonngu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `series` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tomtat` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thongtinbosung` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quyensohuutritue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phanloai` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dophu` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `websitelink` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trichdan` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `motadialy` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tukhoa` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tukhoadongnghia` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ngaybatdau` datetime NOT NULL,
  `ngayketthuc` datetime DEFAULT NULL,
  `dophuphanloai` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `toadotay` double DEFAULT NULL,
  `toadodong` double DEFAULT NULL,
  `toadobac` double DEFAULT NULL,
  `toadonam` double DEFAULT NULL,
  `tenfilegoc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tenfile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tochuc_id` int(10) UNSIGNED NOT NULL,
  `diadiem` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `loaibodulieu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trangthai` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `chuanphanloai` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `bo_du_lieu`
--

INSERT INTO `bo_du_lieu` (`id`, `tieude`, `ngaycongbo`, `ngonngu`, `series`, `tomtat`, `thongtinbosung`, `quyensohuutritue`, `phanloai`, `dophu`, `websitelink`, `logo_url`, `trichdan`, `motadialy`, `tukhoa`, `tukhoadongnghia`, `ngaybatdau`, `ngayketthuc`, `dophuphanloai`, `toadotay`, `toadodong`, `toadobac`, `toadonam`, `tenfilegoc`, `tenfile`, `tochuc_id`, `diadiem`, `loaibodulieu`, `trangthai`, `chuanphanloai`, `created_at`, `updated_at`) VALUES
(1, 'Tiêu đề', '2021-09-14 00:00:00', 'Tiêng Việt', '1231241234', 'tt', 'bs', 'shtt', 'pl', 'dp', 'website', 'logo', 'td', 'dl', 'từ khóa', 'đồng nghĩa', '2021-09-17 00:00:00', '2021-09-18 00:00:00', 'độ phủ phân loại', 1.2, 9.8, 23.41550264, 8.54462476, 'CV1828645078.doc', '7jYbkGqYFMC2Vf2F11jIksWPIexNns1631594937.doc', 4, 'Đặc điêmr', 'Các dạng kiểu bộ dữ liệu', 'Trạng thái bộ dữ liệu', 'Chuẩn phân loại', '2021-09-14 04:48:57', '2021-09-14 04:48:57'),
(2, 'Tiêu đề', '2021-09-14 00:00:00', 'Tiêng Việt', '1231241234', 'tt', 'bs', 'shtt', 'pl', 'dp', 'website', 'logo', 'td', 'dl', 'từ khóa', 'đồng nghĩa', '2021-09-17 00:00:00', '2021-09-18 00:00:00', 'độ phủ phân loại', 1.2, 9.8, 23.41550264, 8.54462476, 'CV1828645078.doc', 'CVVywzSDtU35Yh17nl01xm1jkaFG1B1631594975.doc', 4, 'Đặc điêmr', 'Các dạng kiểu bộ dữ liệu', 'Trạng thái bộ dữ liệu', 'Chuẩn phân loại', '2021-09-14 04:49:35', '2021-09-14 04:49:35'),
(3, 'Tiêu đề', '2021-09-22 00:00:00', 'Tiêng Việt', '1231241234', 'nhtrhrth\r<br>evwegwg', 'nẻgerg\r<br>thrth', 'ưefwegweg\r<br>rthrth', 'ywey\r<br>oyo\r<br>ơiup\'ơ\'/', 'Độ phủ', 'website', 'logo', 'qwff\';,\'\r<br>\'v\r<br>;v\r<br>\'', '\'\'\r<br>\'\'\r<br>\'', '#$#', 'đồng nghĩa\'', '2021-10-08 00:00:00', '2021-10-09 00:00:00', 'độ phủ phân loại\'', 34, 32, 5.89745456, 8.09, 'Quản lý hệ thống - Quyền AdminĐiểm thi (4).xlsx', 'QifpCgfPZSJXniALxycfMZk7MYBhkQ1631595094.xlsx', 2, 'Đặc điểm 1 \' \' \'', 'Các dạng kiểu bộ dữ liệu', 'Trạng thái bộ dữ liệu', 'Chuẩn phân loại', '2021-09-14 04:51:34', '2021-09-14 04:51:34'),
(4, 'Các loài quý hiếm, đặc hữu, bị đe dọa ở Việt Nam (Lớp chim)', '2019-11-21 00:00:00', 'Tiếng Việt', 'Số series', 'Bộ dữ liệu cung cấp thông tin về các loài chim nguy cấp, quý hiếm và đặc hữu ở Việt Nam. Bộ dữ liệu bao gồm các thông tin về loài và vị trí bắt gặp loài cùng hình ảnh.', 'Thông tin bổ sung\r<br>Thông tin bổ sung\r<br>Thông tin bổ sung', 'Trường Đại học Lâm nghiệp và Cục Bảo tồn thiên nhiên và Đa dạng sinh học', 'Các loài chim nguy cấp, đặc hữu, quý hiếm phân bố ở Việt Nam', 'Độ phủ', 'https://icons.getbootstrap.com/icons/book-half/', 'http://dangky.tnue.edu.vn/themes/default/img/logo.png', 'Trường Đại học Lâm nghiệp và Cục Bảo tồn thiên nhiên và ĐDSH, 2020. Nghiên cứu cơ sở khoa học và thực tiễn nhằm đề xuất các giải pháp bảo tồn tại chỗ, chuyển chỗ một số loài nguy cấp, quý, hiếm, đặc hữu ở Việt Nam ứng phó biến đổi khí hậu. Đề tài cấp nhà nước.', 'Việt Nam', 'Chim, Aves, Việt Nam', 'Từ đồng nghĩa 1', '2018-11-21 00:00:00', '2019-11-20 00:00:00', 'Lớp chim (Aves)', 102.1427027, 109.4617876, 23.41550264, 8.54462476, NULL, NULL, 3, 'Đặc điểm địa lý 1', 'Dạng kiểu bộ dữ liệu 1', 'Trạng thái bộ dữ liệu 1', 'Chuẩn phân loại 1', '2021-09-14 08:46:58', '2021-09-14 08:46:58');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chi`
--

CREATE TABLE `chi` (
  `id` int(10) UNSIGNED NOT NULL,
  `tenkhoahoc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tentiengviet` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ho_id` int(10) UNSIGNED DEFAULT NULL,
  `ghichu` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `chuanphanloai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trangthai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dongdanh_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `chi`
--

INSERT INTO `chi` (`id`, `tenkhoahoc`, `tentiengviet`, `ho_id`, `ghichu`, `chuanphanloai`, `trangthai`, `dongdanh_id`, `created_at`, `updated_at`) VALUES
(1, 'tên khoa học', 'gggg', 1, 'vc', 'phân loại', 'th', 1, '2021-10-04 04:06:59', '2021-10-04 04:06:59'),
(2, 'tên khoa học', NULL, NULL, '', 'Chuẩn phân loại', 'Trạng thái bộ dữ liệu', NULL, '2021-10-04 04:11:04', '2021-10-04 04:11:04');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chuong_trinh_de_tai_du_an_kiem_soat_svnlxh`
--

CREATE TABLE `chuong_trinh_de_tai_du_an_kiem_soat_svnlxh` (
  `id` int(10) UNSIGNED NOT NULL,
  `ten` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `noidung` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thoigianbatdau` datetime DEFAULT NULL,
  `thoigianketthuc` datetime DEFAULT NULL,
  `donvithuchien` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `spchinh` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ghichu` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `chuong_trinh_de_tai_du_an_kiem_soat_svnlxh`
--

INSERT INTO `chuong_trinh_de_tai_du_an_kiem_soat_svnlxh` (`id`, `ten`, `noidung`, `thoigianbatdau`, `thoigianketthuc`, `donvithuchien`, `spchinh`, `ghichu`, `created_at`, `updated_at`) VALUES
(1, 'Dự án 1', 'nội dung\r<br>nội dung\r<br>nội dung\r<br>nội dung', '2021-08-19 00:00:00', '2022-08-27 00:00:00', 'đơn vị thực hiện\'\'\'sac\\a]sc\\ác\\\\\\//??>><<', '*)@)($_(@_($_!>>R@_@O$\"\"\'', 'ghi chú\r<br>ghic', '2021-08-19 10:14:33', '2021-08-19 10:14:33'),
(2, 'Dự án 2', 'nd\r<br>nd', '1993-02-02 00:00:00', '2023-02-02 00:00:00', 'dv1', 'sp1', 'gc\r<br>c\r<br>c\r<br>c\r<br>c\r<br>c\r<br>c', '2021-08-19 10:18:09', '2021-08-19 10:18:09');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chuyen_doi_muc_dich_su_dung_dat`
--

CREATE TABLE `chuyen_doi_muc_dich_su_dung_dat` (
  `id` int(10) UNSIGNED NOT NULL,
  `tenduan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mucdichchuyendoi` smallint(5) UNSIGNED DEFAULT NULL,
  `loaidatchuyendoi` smallint(5) UNSIGNED NOT NULL,
  `dientich` double DEFAULT NULL,
  `diadiem_id` int(10) UNSIGNED DEFAULT NULL,
  `thoigian` smallint(5) UNSIGNED DEFAULT NULL,
  `huyen` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `xa` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nguondulieu` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ghichu` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `chuyen_doi_muc_dich_su_dung_dat`
--

INSERT INTO `chuyen_doi_muc_dich_su_dung_dat` (`id`, `tenduan`, `mucdichchuyendoi`, `loaidatchuyendoi`, `dientich`, `diadiem_id`, `thoigian`, `huyen`, `xa`, `nguondulieu`, `ghichu`, `created_at`, `updated_at`) VALUES
(1, 'Dự án 1', 31, 32, 43392.4, 1, 2020, 'quận 1;\r<br>quận 2', 'xã 1;\r<br>xã 2', 'nguồn dl 1\r<br>n2', 'ghi chú 1\r<br>ghi chú 2', '2021-09-09 05:12:25', '2021-09-09 05:12:25'),
(2, 'Dự án 2', NULL, 33, NULL, NULL, 2022, '', '', '', '', '2021-09-09 05:15:50', '2021-09-09 05:15:50'),
(3, 'Dự án 22', 30, 32, NULL, NULL, NULL, '', '', '', '', '2021-09-09 08:24:56', '2021-09-09 08:24:56');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `co_so_bao_ton_nguon_gens`
--

CREATE TABLE `co_so_bao_ton_nguon_gens` (
  `id` int(10) UNSIGNED NOT NULL,
  `ten` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `diachi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mota` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `diagioi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `khonggian` geometry DEFAULT NULL,
  `loaihinh` tinyint(3) UNSIGNED NOT NULL,
  `dientich` double DEFAULT NULL,
  `loaihinhtochuc` tinyint(3) UNSIGNED NOT NULL,
  `giayphep` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ngaycap` datetime DEFAULT NULL,
  `donvicap` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `capquanly` tinyint(3) UNSIGNED DEFAULT NULL,
  `chucnang` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cosovatchat` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quytrinhkythuat` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nhanluc` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `taichinh` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hinhthucluutru` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dienthichluutru` double DEFAULT NULL,
  `diadiem_id` int(10) UNSIGNED NOT NULL,
  `huyen` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `xa` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ghichu` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danh_muc_chi_thi`
--

CREATE TABLE `danh_muc_chi_thi` (
  `id` int(10) UNSIGNED NOT NULL,
  `nhomct_id` smallint(5) UNSIGNED NOT NULL,
  `ten` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ghichu` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `danh_muc_chi_thi`
--

INSERT INTO `danh_muc_chi_thi` (`id`, `nhomct_id`, `ten`, `ghichu`, `created_at`, `updated_at`) VALUES
(1, 10, 'c', 'v', '2021-08-19 11:01:32', '2021-08-19 11:01:32'),
(2, 11, 'Chỉ thị 1', 'ghi chú chí chúac\n<br>asv[q;]fq;ư)__)_$)_$)\n<br>\"\"ướ]cá\n<br>}ƠC|S|||//\\\\\\\\ơc[c', '2021-08-19 11:05:57', '2021-08-19 11:05:57');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danh_muc_nhom_chi_thi`
--

CREATE TABLE `danh_muc_nhom_chi_thi` (
  `id` int(10) UNSIGNED NOT NULL,
  `ten` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ghichu` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danh_muc_thong_so`
--

CREATE TABLE `danh_muc_thong_so` (
  `id` int(10) UNSIGNED NOT NULL,
  `chithi_id` int(10) UNSIGNED NOT NULL,
  `ten` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ghichu` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `danh_muc_thong_so`
--

INSERT INTO `danh_muc_thong_so` (`id`, `chithi_id`, `ten`, `ghichu`, `created_at`, `updated_at`) VALUES
(1, 2, NULL, '', '2021-08-20 04:00:48', '2021-08-20 04:00:48'),
(2, 1, 'thông số 1', 'ghi chú\r<br>gc', '2021-08-20 04:01:05', '2021-08-20 04:01:05');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `def_values`
--

CREATE TABLE `def_values` (
  `id` smallint(5) UNSIGNED NOT NULL,
  `giatri` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tudien_id` tinyint(3) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `def_values`
--

INSERT INTO `def_values` (`id`, `giatri`, `tudien_id`, `created_at`, `updated_at`) VALUES
(1, 'n1', 1, '2021-08-18 04:30:34', '2021-08-18 04:30:34'),
(2, 'n2', 1, '2021-08-18 04:30:34', '2021-08-18 04:30:34'),
(3, 'Hoạt động', 2, '2021-08-18 04:53:21', '2021-08-18 04:53:21'),
(4, 'Ngừng hoạt động', 2, '2021-08-18 04:53:21', '2021-08-18 04:53:21'),
(5, 'Khác', 2, '2021-08-18 04:53:21', '2021-08-18 04:53:21'),
(6, 'Thực hiện chính sách', 3, '2021-08-19 03:12:49', '2021-08-19 03:12:49'),
(7, 'Hợp tác quốc tế', 3, '2021-08-19 03:12:49', '2021-08-19 03:12:49'),
(8, 'Hoạt động tình nguyện', 3, '2021-08-19 03:12:49', '2021-08-19 03:12:49'),
(9, 'Khác', 3, '2021-08-19 03:12:49', '2021-08-19 03:12:49'),
(10, 'Hiện trạng', 4, '2021-08-19 10:41:49', '2021-08-19 10:41:49'),
(11, 'Áp lực', 4, '2021-08-19 10:41:49', '2021-08-19 10:41:49'),
(12, 'Đáp ứng', 4, '2021-08-19 10:41:49', '2021-08-19 10:41:49'),
(13, 'Cấp Tỉnh', 5, '2021-08-20 08:00:48', '2021-08-20 08:00:48'),
(14, 'Cấp Huyện', 5, '2021-08-20 08:00:48', '2021-08-20 08:00:48'),
(15, 'Cấp Xã', 5, '2021-08-20 08:00:48', '2021-08-20 08:00:48'),
(16, 'Cấp cơ sở', 5, '2021-08-20 08:00:48', '2021-08-20 08:00:48'),
(17, 'Cây trồng nông nghiệp', 6, '2021-08-23 03:09:44', '2021-08-23 03:09:44'),
(18, 'Cây lâm nghiệp', 6, '2021-08-23 03:09:44', '2021-08-23 03:09:44'),
(19, 'Cây thuốc', 6, '2021-08-23 03:09:44', '2021-08-23 03:09:44'),
(20, 'Động vật hoang dã', 6, '2021-08-23 03:09:44', '2021-08-23 03:09:44'),
(21, 'Thủy sản', 6, '2021-08-23 03:09:44', '2021-08-23 03:09:44'),
(22, 'Vật nuôi', 6, '2021-08-23 03:09:44', '2021-08-23 03:09:44'),
(23, 'Nấm', 6, '2021-08-23 03:09:44', '2021-08-23 03:09:44'),
(24, 'Vi sinh vật', 6, '2021-08-23 03:09:44', '2021-08-23 03:09:44'),
(25, 'Nguồn gen được thu thập, lưu giữ', 7, '2021-08-23 07:58:58', '2021-08-23 07:58:58'),
(26, 'Chưa được lưu giữ', 7, '2021-08-23 07:58:58', '2021-08-23 07:58:58'),
(27, 'Gen đã được đánh giá', 8, '2021-08-23 08:00:51', '2021-08-23 08:00:51'),
(28, 'Đánh giá chi tiết', 8, '2021-08-23 08:00:51', '2021-08-23 08:00:51'),
(29, 'Đánh giá đặc điểm di truyền', 8, '2021-08-23 08:00:51', '2021-08-23 08:00:51'),
(30, 'Làm thủy điện', 9, '2021-09-09 04:48:14', '2021-09-09 04:48:14'),
(31, 'Làm đường cao tốc', 9, '2021-09-09 04:48:14', '2021-09-09 04:48:14'),
(32, 'Đất rừng', 10, '2021-09-09 04:48:56', '2021-09-09 04:48:56'),
(33, 'Đất ngập nước', 10, '2021-09-09 04:48:56', '2021-09-09 04:48:56');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dich_vu_he_sinh_thai`
--

CREATE TABLE `dich_vu_he_sinh_thai` (
  `id` int(10) UNSIGNED NOT NULL,
  `ten` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mota` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phanloai` tinyint(3) UNSIGNED NOT NULL,
  `giatriluonggia` double DEFAULT NULL,
  `hesinhthai_id` int(10) UNSIGNED DEFAULT NULL,
  `diadiem_id` int(10) UNSIGNED DEFAULT NULL,
  `huyen` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `xa` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ghichu` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `diem_quan_trac`
--

CREATE TABLE `diem_quan_trac` (
  `id` int(10) UNSIGNED NOT NULL,
  `kyhieumau` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `motavitri` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kinhdo` double NOT NULL,
  `vido` double NOT NULL,
  `thoigian` datetime NOT NULL,
  `diadiem_id` int(10) UNSIGNED DEFAULT NULL,
  `loaihinhqt_id` int(10) UNSIGNED NOT NULL,
  `donviquantrac` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ghichu` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dong_danh`
--

CREATE TABLE `dong_danh` (
  `id` int(10) UNSIGNED NOT NULL,
  `ten` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nguondulieu` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mota` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phanloaihoc_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `dong_danh`
--

INSERT INTO `dong_danh` (`id`, `ten`, `nguondulieu`, `mota`, `phanloaihoc_id`, `created_at`, `updated_at`) VALUES
(1, 'dd1', 'ndl1', 'mota1', 1, '2021-09-30 09:30:12', '2021-09-30 09:30:12'),
(2, 'đồng danh', 'nguồn dữ liệu \'', 'mô tả', 1, '2021-10-04 04:40:02', '2021-10-04 04:40:02'),
(3, 'đồng danh1', 'nguồn dữ liệu \'1', 'mô tả1', 1, '2021-10-04 04:42:35', '2021-10-04 04:42:35'),
(4, 'đồng danh13', 'nguồn dữ liệu \'3', 'mô tả22', 1, '2021-10-04 04:48:02', '2021-10-04 04:48:02');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `duoi_loai`
--

CREATE TABLE `duoi_loai` (
  `id` int(10) UNSIGNED NOT NULL,
  `tenkhoahoc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tentiengviet` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bacphanloai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ghichu` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `chuanphanloai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `loai_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `duoi_loai`
--

INSERT INTO `duoi_loai` (`id`, `tenkhoahoc`, `tentiengviet`, `bacphanloai`, `ghichu`, `chuanphanloai`, `loai_id`, `created_at`, `updated_at`) VALUES
(1, 'tên khoa học', 'gggg', 'bậc phân loại', 'ghi chú', 'Chuẩn phân loại', 1, '2021-10-04 04:31:23', '2021-10-04 04:31:23');

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
-- Cấu trúc bảng cho bảng `gioi`
--

CREATE TABLE `gioi` (
  `id` int(10) UNSIGNED NOT NULL,
  `tenkhoahoc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tentiengviet` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ghichu` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trangthai` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dongdanh_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `gioi`
--

INSERT INTO `gioi` (`id`, `tenkhoahoc`, `tentiengviet`, `ghichu`, `trangthai`, `dongdanh_id`, `created_at`, `updated_at`) VALUES
(1, '\'tên khoa học', '\'teeng tiếng việt', 'ghi chú\r<br>ghi chú\'\r<br>ghic chú\'', 'Trạng thái\' \' \' \' &@()()!@#_+ p;\'/,..', 1, '2021-10-01 07:30:15', '2021-10-01 07:30:15'),
(2, 'Tên khoa học1', NULL, '', 'Trạng thái bộ dữ liệu1', NULL, '2021-10-01 07:47:18', '2021-10-01 07:47:18'),
(3, 'fff', NULL, '', 'th1', NULL, '2021-10-04 02:25:03', '2021-10-04 02:25:03'),
(4, 'tên khoa học', 'vbbbb', 'vsvsdv', 'tg', 1, '2021-10-04 02:33:02', '2021-10-04 02:33:02'),
(5, 'tên khoa học', 'gggg', '', 'Trạng thái bộ dữ liệu', 1, '2021-10-04 02:34:37', '2021-10-04 02:34:37'),
(6, 'tên khoa học', 'gggg', '', 'Trạng thái bộ dữ liệu', NULL, '2021-10-04 02:35:42', '2021-10-04 02:35:42'),
(7, 'Tên khoa học13', '\'teeng tiếng việt]', 'gc\r<br>gc', 'tt', 1, '2021-10-04 02:36:41', '2021-10-04 02:36:41'),
(8, 'tên khoa học3', 'gggg', '', 'Trạng thái bộ dữ liệu2', NULL, '2021-10-04 02:39:05', '2021-10-04 02:39:05'),
(9, 'tên khoa học12', '\'teeng tiếng việt33', '', 'y', NULL, '2021-10-04 02:40:17', '2021-10-04 02:40:17');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `he_sinh_thais`
--

CREATE TABLE `he_sinh_thais` (
  `id` int(10) UNSIGNED NOT NULL,
  `ten` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mota` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `khonggian` geometry DEFAULT NULL,
  `dientich` double DEFAULT NULL,
  `nguongoc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phanloaihesinhthai_id` int(10) UNSIGNED NOT NULL,
  `huyen` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `xa` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nguontailieu` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `he_sinh_thai_co_trang_cay_bui`
--

CREATE TABLE `he_sinh_thai_co_trang_cay_bui` (
  `hesinhthai_id` int(10) UNSIGNED NOT NULL,
  `dophu` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `he_sinh_thai_dan_cu_nong_nghiep`
--

CREATE TABLE `he_sinh_thai_dan_cu_nong_nghiep` (
  `hesinhthai_id` int(10) UNSIGNED NOT NULL,
  `phanloai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `huyen_id` int(10) UNSIGNED DEFAULT NULL,
  `xa_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `he_sinh_thai_dat_ngap_nuoc`
--

CREATE TABLE `he_sinh_thai_dat_ngap_nuoc` (
  `hesinhthai_id` int(10) UNSIGNED NOT NULL,
  `phanloai` tinyint(3) UNSIGNED DEFAULT NULL,
  `mucdich_cd` double DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `he_sinh_thai_rung_tren_can`
--

CREATE TABLE `he_sinh_thai_rung_tren_can` (
  `hesinhthai_id` int(10) UNSIGNED NOT NULL,
  `phanloairung` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phanloaihesinhthai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dophu` varchar(80) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `truluong` double DEFAULT NULL,
  `donvitinh` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dientichrung_cd` double DEFAULT NULL,
  `dientichmoichet` double DEFAULT NULL,
  `dientichrungphongho` double DEFAULT NULL,
  `dientich_fsc` double DEFAULT NULL,
  `dientich_dvmtr` double DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hinh_anh_loai`
--

CREATE TABLE `hinh_anh_loai` (
  `id` int(10) UNSIGNED NOT NULL,
  `dinhdanh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thamkhao` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tieude` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mota` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `khonggian` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vido` double DEFAULT NULL,
  `kinhdo` double DEFAULT NULL,
  `dinhdang` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thoigiantao` datetime DEFAULT NULL,
  `tacgia` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nguoidonggop` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nguoixuatban` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `docgialienquan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `giayphep` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `chusohuu` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `loaidulieu` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dulieu` tinyint(4) DEFAULT NULL,
  `phathienloai_id` int(10) UNSIGNED DEFAULT NULL,
  `phanloaihoc_id` int(10) UNSIGNED DEFAULT NULL,
  `khac` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tinhtrangcongbo` smallint(5) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ho`
--

CREATE TABLE `ho` (
  `id` int(10) UNSIGNED NOT NULL,
  `tenkhoahoc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tentiengviet` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bo_id` int(10) UNSIGNED DEFAULT NULL,
  `ghichu` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `chuanphanloai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trangthai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dongdanh_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `ho`
--

INSERT INTO `ho` (`id`, `tenkhoahoc`, `tentiengviet`, `bo_id`, `ghichu`, `chuanphanloai`, `trangthai`, `dongdanh_id`, `created_at`, `updated_at`) VALUES
(1, 'họ', 'họ họ', 1, 'gc\r<br>gv', 'chuẩn phân loại', 'trạng thái', 1, '2021-10-04 03:54:22', '2021-10-04 03:54:22'),
(2, 'tên khoa học', NULL, NULL, '', 'Chuẩn phân loại', 'Trạng thái bộ dữ liệu', NULL, '2021-10-04 03:57:12', '2021-10-04 03:57:12');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoat_dong_du_lich`
--

CREATE TABLE `hoat_dong_du_lich` (
  `id` int(10) UNSIGNED NOT NULL,
  `diadiem_id` int(10) UNSIGNED DEFAULT NULL,
  `khachdulich` int(10) UNSIGNED DEFAULT NULL,
  `doanhthu` double DEFAULT NULL,
  `thoigian` smallint(5) UNSIGNED DEFAULT NULL,
  `nguondulieu` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ghichu` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hop_tac_quoc_te`
--

CREATE TABLE `hop_tac_quoc_te` (
  `id` int(10) UNSIGNED NOT NULL,
  `ten` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tinhchat` smallint(5) UNSIGNED DEFAULT NULL,
  `ngaybanhanh` datetime DEFAULT NULL,
  `ngayhieuluc` datetime DEFAULT NULL,
  `thoihanhieuluc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tendoitacnn` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phancap` smallint(5) UNSIGNED DEFAULT NULL,
  `danhnghia` smallint(5) UNSIGNED DEFAULT NULL,
  `coquanchutri` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nguoiki` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thoigianketthuc` datetime DEFAULT NULL,
  `tinhtrang` smallint(5) UNSIGNED DEFAULT NULL,
  `noidungchinh` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ghichu` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `file_dinhkem` varchar(70) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_tengoc` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hop_tac_quoc_te`
--

INSERT INTO `hop_tac_quoc_te` (`id`, `ten`, `tinhchat`, `ngaybanhanh`, `ngayhieuluc`, `thoihanhieuluc`, `tendoitacnn`, `phancap`, `danhnghia`, `coquanchutri`, `nguoiki`, `thoigianketthuc`, `tinhtrang`, `noidungchinh`, `ghichu`, `created_at`, `updated_at`, `file_dinhkem`, `file_tengoc`) VALUES
(1, 'Dự án 1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2021-08-18 04:25:25', '2021-08-18 04:25:25', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ket_qua_quan_trac`
--

CREATE TABLE `ket_qua_quan_trac` (
  `id` int(10) UNSIGNED NOT NULL,
  `diadiemqt_id` int(10) UNSIGNED DEFAULT NULL,
  `thongso_id` int(10) UNSIGNED DEFAULT NULL,
  `ketqua` double DEFAULT NULL,
  `donvido` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qcvn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ghichu` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khai_thac_qua_muc_cho_phep`
--

CREATE TABLE `khai_thac_qua_muc_cho_phep` (
  `id` int(10) UNSIGNED NOT NULL,
  `phanloai` smallint(5) UNSIGNED NOT NULL,
  `sinhvatkhaithac` smallint(5) UNSIGNED DEFAULT NULL,
  `bienphapkhaithac` smallint(5) UNSIGNED DEFAULT NULL,
  `lopphukt` smallint(5) UNSIGNED DEFAULT NULL,
  `dientichkt` double DEFAULT NULL,
  `soluongsv` int(10) UNSIGNED DEFAULT NULL,
  `donvitinhsoluong` varchar(80) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `khoiluongsv` double DEFAULT NULL,
  `donvitinhkhoiluong` varchar(80) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `iucn` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cites` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sachdovietnam` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nghidinh64` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nghidinh06` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `diadiem_id` int(10) UNSIGNED DEFAULT NULL,
  `thoigian` timestamp NULL DEFAULT NULL,
  `huyen_id` int(10) UNSIGNED DEFAULT NULL,
  `xa_id` int(10) UNSIGNED DEFAULT NULL,
  `nguondulieu` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ghichu` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khu_bao_ton`
--

CREATE TABLE `khu_bao_ton` (
  `id` int(10) UNSIGNED NOT NULL,
  `ten` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tentienganh` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tengoc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vung` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `huyen` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `xa` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phanloai` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `iucn` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dientich` double NOT NULL,
  `congnhan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `namcongnhan` int(11) NOT NULL,
  `phancap` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `danhhieuquocte` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tyle` double DEFAULT NULL,
  `cancuphaply` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mota` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `khonggian` geometry DEFAULT NULL,
  `mucdodadangsinhhoc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `loaimoitruongsong` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hethucvatdocdao` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hedongvatdocdao` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hoatdong` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dadangsinhhoc` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khu_bao_ton`
--

INSERT INTO `khu_bao_ton` (`id`, `ten`, `tentienganh`, `tengoc`, `vung`, `huyen`, `xa`, `phanloai`, `iucn`, `dientich`, `congnhan`, `namcongnhan`, `phancap`, `danhhieuquocte`, `tyle`, `cancuphaply`, `mota`, `khonggian`, `mucdodadangsinhhoc`, `loaimoitruongsong`, `hethucvatdocdao`, `hedongvatdocdao`, `hoatdong`, `dadangsinhhoc`, `created_at`, `updated_at`) VALUES
(1, 'Khu bảo tồn', 'Ba Vi', 'Ba Vì', 'Đồng Bằng Sông Hồng', 'Ba Vì', NULL, 'Vườn Quốc Gia', 'II', 10749.7, 'Đã có quyết định', 1977, 'Trung ương', 'Không có', NULL, NULL, 'In 1991 investment plan was prepared and proposed upgrading site to a National Park. Fully approved on 18/12/1991 by Chairman of the Council of Ministers.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-09-08 08:30:35', '2021-09-08 08:30:35'),
(2, 'Chùa Thầy', 'Chua Thay', 'Chùa Thầy', 'Đồng Bằng Sông Hồng', 'Quốc Oai', NULL, 'Khu bảo vệ cảnh quan', NULL, 17, 'Đã có quyết định', 2015, 'Ủy ban nhân dân tỉnh', 'Không có', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-12 02:52:54', '2021-10-12 02:52:54'),
(3, 'Đồng Mô - Ngải Sơn', 'Dong Mo - Ngai Son', 'Đồng Mô - Ngải Sơn', 'Đồng Bằng Sông Hồng', 'Thị xã Sơn Tây; Ba Vì', NULL, 'Khu bảo vệ cảnh quan', NULL, 900, 'Đang đề xuất', 2015, 'Ủy ban nhân dân tỉnh', 'Không có', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-12 03:00:01', '2021-10-12 03:00:01'),
(4, 'Hồ Suối Hai', 'Ho Suoi Hai', 'Hồ Suối Hai', 'Đồng Bằng Sông Hồng', 'Ba Vì', NULL, 'Khu bảo vệ cảnh quan', NULL, 1200, 'Đang đề xuất', 2015, 'Ủy ban nhân dân tỉnh', 'Không có', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-12 03:06:00', '2021-10-12 03:06:00'),
(5, 'Hương Sơn', 'Huong Son', NULL, 'Đồng Bằng Sông Hồng', 'Mỹ Đức', NULL, 'Khu bảo vệ cảnh quan', 'V', 3760, 'Đã có quyết định', 1986, 'Ủy ban nhân dân tỉnh', 'Không có', NULL, NULL, 'In 1992 investment plan prepared by FIPI, that proposed revising the site to 4354 ha. Approved by MARD and Ha Tay Provincial People\'s Comm. in May 1993. Management board est. in 1994 under Ha Tay Provincial DARD. Buffer zone is 780 ha.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-12 03:12:56', '2021-10-12 03:12:56'),
(6, 'K9 - Lăng Hồ Chí Minh', 'K9 - Lang Ho Chi Minh', NULL, 'Đồng Bằng Sông Hồng', NULL, NULL, 'Khu bảo vệ cảnh quan', NULL, 234, 'Đã có quyết định', 2012, 'Ủy ban nhân dân tỉnh', 'Không có', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-12 03:16:53', '2021-10-12 03:16:53'),
(7, 'Sóc Sơn', 'Soc Son', NULL, 'Đồng Bằng Sông Hồng', 'Sóc Sơn', NULL, 'Khu bảo vệ cảnh quan', NULL, 12, 'Đang đề xuất', 2015, 'Ủy ban nhân dân tỉnh', 'Không có', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-12 03:18:42', '2021-10-12 03:18:42'),
(8, 'Vật Lại', 'Vat Lai', NULL, 'Đồng Bằng Sông Hồng', 'Ba Vì', NULL, 'Khu bảo vệ cảnh quan', NULL, 10, 'Đã có quyết định', 2014, 'Ủy ban nhân dân tỉnh', 'Không có', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-12 03:24:03', '2021-10-12 03:24:03');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `kinh_phi`
--

CREATE TABLE `kinh_phi` (
  `id` int(10) UNSIGNED NOT NULL,
  `nguonkinhphi` smallint(5) UNSIGNED NOT NULL,
  `mucdichsudung` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tyle` double DEFAULT NULL,
  `thoigian` smallint(6) NOT NULL,
  `ghichu` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `kinh_phi`
--

INSERT INTO `kinh_phi` (`id`, `nguonkinhphi`, `mucdichsudung`, `tyle`, `thoigian`, `ghichu`, `created_at`, `updated_at`) VALUES
(1, 2, 'n\r<br>b', 4.3, 3, 'vb\r<br>d', '2021-08-18 04:31:00', '2021-08-18 04:31:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loai`
--

CREATE TABLE `loai` (
  `id` int(10) UNSIGNED NOT NULL,
  `tenkhoahoc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tentiengviet` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `maloai` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `chi_id` int(10) UNSIGNED DEFAULT NULL,
  `ghichu` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `chuanphanloai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trangthai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dongdanh_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `loai`
--

INSERT INTO `loai` (`id`, `tenkhoahoc`, `tentiengviet`, `maloai`, `chi_id`, `ghichu`, `chuanphanloai`, `trangthai`, `dongdanh_id`, `created_at`, `updated_at`) VALUES
(1, 'loai', 'loài', 'xmallcMXLl0201', 1, 'ghi chú\r<br>ghi chú', 'chuẩn 1', 'trạng thái 1', 1, '2021-10-04 04:20:50', '2021-10-04 04:20:50');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loai_hinh_quan_trac`
--

CREATE TABLE `loai_hinh_quan_trac` (
  `id` int(10) UNSIGNED NOT NULL,
  `ten` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ghichu` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loai_nguon_gen`
--

CREATE TABLE `loai_nguon_gen` (
  `id` int(10) UNSIGNED NOT NULL,
  `nhomnguongen_id` int(10) UNSIGNED NOT NULL,
  `ten` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mota` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ghichu` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `loai_nguon_gen`
--

INSERT INTO `loai_nguon_gen` (`id`, `nhomnguongen_id`, `ten`, `mota`, `ghichu`, `created_at`, `updated_at`) VALUES
(1, 2, 'ppp', '', '', '2021-08-23 04:07:32', '2021-08-23 04:07:32'),
(2, 1, 'loại 1', 'mô tả\r<br>mt', 'gc\r<br>gc\r<br>gv\r<br>c', '2021-08-23 04:07:59', '2021-08-23 04:07:59'),
(3, 2, 'vabadsv', 'vv', 'v', '2021-08-23 04:09:05', '2021-08-23 04:09:05');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lop`
--

CREATE TABLE `lop` (
  `id` int(10) UNSIGNED NOT NULL,
  `tenkhoahoc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tentiengviet` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nganh_id` int(10) UNSIGNED NOT NULL,
  `ghichu` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `chuanphanloai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trangthai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dongdanh_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `lop`
--

INSERT INTO `lop` (`id`, `tenkhoahoc`, `tentiengviet`, `nganh_id`, `ghichu`, `chuanphanloai`, `trangthai`, `dongdanh_id`, `created_at`, `updated_at`) VALUES
(1, 'tên khoa học', 'v', 1, '', 'Chuẩn phân loại', 'Trạng thái bộ dữ liệu 1', NULL, '2021-10-04 03:07:10', '2021-10-04 03:07:10'),
(2, 'lớp', 'lớp tv', 1, 'gc\r<br>gc\r<br>gc', 'phân loại', 'trạng tahs lớp', 1, '2021-10-04 03:12:24', '2021-10-04 03:12:24');

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
(5, '2021_07_30_135012_create_def_fields_table', 3),
(9, '2021_07_30_151525_create_nhat_kies_table', 7),
(12, '2021_07_30_153543_create_kinh_phis_table', 9),
(13, '2021_07_30_155644_create_hop_tac_quoc_tes_table', 10),
(14, '2021_07_30_165838_create_chuong_trinh_de_tai_du_an_kiem_soat_s_v_n_l_x_h_s_table', 11),
(17, '2021_07_30_171324_create_danh_muc_nhom_chi_this_table', 12),
(18, '2021_07_30_172540_create_danh_muc_chi_this_table', 13),
(19, '2021_07_30_173813_create_danh_muc_thong_sos_table', 14),
(20, '2021_07_30_174554_create_bao_cao_ap_luc_len_d_d_s_h_s_table', 15),
(23, '2021_07_30_225847_create_loai_hinh_quan_tracs_table', 16),
(26, '2021_07_30_230525_create_thong_so_quan_tracs_table', 17),
(27, '2021_07_30_232209_create_khu_bao_tons_table', 18),
(29, '2021_07_30_235602_create_o_tieu_chuans_table', 19),
(30, '2021_07_31_001053_create_co_so_bao_ton_nguon_gens_table', 20),
(31, '2021_07_31_004003_create_phan_loai_he_sinh_thais_table', 21),
(32, '2021_07_31_004536_create_he_sinh_thais_table', 22),
(44, '2021_07_31_141448_create_giois_table', 32),
(45, '2021_07_31_142122_create_nganhs_table', 33),
(46, '2021_07_31_142956_create_lops_table', 34),
(47, '2021_07_31_143647_create_bos_table', 35),
(48, '2021_07_31_144002_create_hos_table', 36),
(49, '2021_07_31_144944_create_chis_table', 37),
(50, '2021_07_31_150356_create_loais_table', 38),
(51, '2021_07_31_151853_create_duoi_loais_table', 39),
(55, '2021_07_31_154503_create_phan_loai_hocs_table', 41),
(56, '2021_07_31_153251_create_dong_danhs_table', 42),
(57, '2021_07_31_165621_add_foreign_to_gioi_table', 43),
(58, '2021_07_31_171700_add_foreign_to_nganh_table', 44),
(59, '2021_07_31_172340_add_foreign_to_lop_table', 45),
(60, '2021_07_31_173032_add_foreign_to_bo_table', 46),
(61, '2021_07_31_173220_add_foreign_to_ho_table', 47),
(62, '2021_07_31_173439_add_foreign_to_chi_table', 48),
(63, '2021_07_31_173656_add_foreign_to_loai_table', 49),
(64, '2021_08_03_105225_create_mo_hinh_sang_kiens_table', 50),
(67, '2021_08_03_112523_create_chuyen_doi_muc_dich_su_dung_dats_table', 52),
(68, '2021_08_03_150452_create_khai_thac_qua_muc_cho_pheps_table', 53),
(69, '2021_08_03_154135_create_o_nhiem_moi_truong_chay_rung_bien_doi_khi_haus_table', 54),
(70, '2021_08_03_155215_create_sinh_vat_ngoai_lai_xam_hais_table', 55),
(72, '2021_08_03_160648_create_vi_pham_xu_phat_hanh_chinh_va_hinh_sus_table', 56),
(73, '2021_08_03_161720_create_hoat_dong_du_liches_table', 57),
(74, '2021_08_03_162758_create_diem_quan_tracs_table', 58),
(75, '2021_08_03_164744_create_ket_qua_quan_tracs_table', 59),
(76, '2021_08_03_212305_create_bo_du_lieus_table', 60),
(77, '2021_08_03_222419_create_tai_lieu_tham_khao_bo_du_lieus_table', 61),
(78, '2021_08_03_225206_create_thong_tin_bo_sung_phan_loai_hocs_table', 62),
(79, '2021_08_04_094119_create_hinh_anh_loais_table', 63),
(85, '2021_08_04_102353_create_phat_hien_loais_table', 64),
(86, '2021_08_04_145118_create_tinh_trang_de_doa_theo_danh_luc_i_u_c_n_s_table', 65),
(87, '2021_08_04_150118_create_tinh_trang_de_doa_theo_phu_luc_cong_uoc_cites_table', 66),
(88, '2021_08_04_150844_create_tinh_trang_de_doa_theo_sach_do_viet_nams_table', 67),
(89, '2021_08_04_151930_create_tinh_trang_de_doa_theo_nghi_dinhs_table', 68),
(90, '2021_08_04_153850_create_nhom_nguon_gens_table', 69),
(91, '2021_08_04_154240_create_loai_nguon_gens_table', 70),
(92, '2021_08_04_154922_create_nguon_gens_table', 71),
(93, '2021_08_04_165616_create_thong_tin_luu_tru_nguon_gens_table', 72),
(94, '2021_08_04_170348_create_tri_thuc_truyen_thongs_table', 73),
(95, '2021_08_04_171421_create_tri_thuc_truyen_thong_nguon_gens_table', 74),
(97, '2021_08_05_101216_create_quan_huyens_table', 75),
(98, '2021_08_05_102340_create_xas_table', 76),
(99, '2021_08_05_110445_create_to_chucs_table', 77),
(100, '2021_08_08_144305_add_foreign_to_mohinhsangkien_table', 78),
(101, '2021_08_03_110225_create_tang_dan_so_vung_dems_table', 79),
(102, '2021_08_08_152705_add_foreign_to_tangdansovungdem_table', 80),
(103, '2021_08_08_154752_add_foreign_to_khaithacquamucchophep_table', 81),
(104, '2021_08_08_155456_add_foreign_to_onhiemmoitruong_table', 82),
(105, '2021_08_08_155941_add_foreign_to_sinhvatngoailaixamhai_table', 83),
(106, '2021_08_08_160730_add_foreign_to_viphamxuphathanhchinh_table', 84),
(107, '2021_08_08_161433_add_foreign_to_phanloaihoc_table', 85),
(108, '2021_08_08_162332_add_foreign_to_bodulieu_table', 86),
(109, '2021_08_08_163123_add_foreign_to_hinhanhloai_table', 87),
(110, '2021_08_08_163913_add_foreign_to_phathienloai_table', 88),
(113, '2021_08_09_113231_add_more_fields_to_users_table', 89),
(114, '2021_07_31_010415_create_he_sinh_thai_rung_tren_cans_table', 90),
(115, '2021_08_11_151828_create_he_sinh_thai_co_trang_cay_buis_table', 91),
(116, '2021_08_11_152457_create_he_sinh_thai_dat_ngap_nuocs_table', 92),
(117, '2021_08_11_153029_create_he_sinh_thai_dan_cu_nong_nghieps_table', 93),
(118, '2021_08_11_153532_create_dich_vu_he_sinh_thais_table', 94),
(120, '2021_08_11_160808_drop_foreignkey_chithi_table', 95),
(121, '2021_08_11_164718_change_column_viphamxuphathcvahinhsu_table', 96),
(122, '2021_08_11_171440_change_column_diemquantrac_table', 97),
(123, '2021_08_11_172736_change_column_cosobaotonnguongen_table', 98),
(124, '2021_08_11_223802_create_phat_hien_loai_bo_sungs_table', 99),
(125, '2021_07_30_042203_create_tu_diens_table', 100),
(126, '2021_07_30_040132_create_def_values_table', 101),
(127, '2021_08_14_174623_del_def_field_table', 102),
(128, '2021_08_17_102908_change_column_kinhphi_table', 103),
(129, '2021_08_17_151513_change_column_hoptacquocte_table', 103),
(130, '2021_08_19_100319_change_column_mohinhsangkien_table', 104),
(131, '2021_08_19_172303_change_column_chithi_table', 105),
(132, '2021_08_20_115912_change_column_baocaoapluc_table', 106),
(133, '2021_08_20_182428_change_column_quanhuyen_table', 107),
(134, '2021_08_23_094823_change_column_nhonnguongen_table', 108),
(135, '2021_08_23_170220_change_column_nguongen_table', 109),
(136, '2021_09_06_144928_change_hoptacquocte_table', 110),
(137, '2021_09_06_153432_add_column_hoptacquocte_table', 111),
(140, '2021_09_06_154931_add_column_cosobaoton_table', 112),
(141, '2021_09_08_112415_add_column_bosungphanloaihoc_table', 113),
(142, '2021_09_09_105543_change_column_chuyendoimdsddat_table', 114),
(143, '2021_09_09_153709_change_column_khaithacquamuc_table', 115);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `mo_hinh_sang_kien`
--

CREATE TABLE `mo_hinh_sang_kien` (
  `id` int(10) UNSIGNED NOT NULL,
  `ten` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hinhthuc` smallint(5) UNSIGNED NOT NULL,
  `noidung` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `coquan_id` int(10) UNSIGNED DEFAULT NULL,
  `diadiemtochuc` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgbatdau` datetime DEFAULT NULL,
  `tgketthuc` datetime DEFAULT NULL,
  `ketquaapdung` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ghichu` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `mo_hinh_sang_kien`
--

INSERT INTO `mo_hinh_sang_kien` (`id`, `ten`, `hinhthuc`, `noidung`, `coquan_id`, `diadiemtochuc`, `tgbatdau`, `tgketthuc`, `ketquaapdung`, `ghichu`, `created_at`, `updated_at`) VALUES
(1, 'Mô hình 1', 8, 'nd\r<br>nd\r<br>nd', 2, 'dd\r<br>đ\r<br>dd', '2021-08-19 00:00:00', '2022-08-19 00:00:00', 'kq\r<br>kq\r<br>kq', 'gc\r<br>gc\r<br>gc', '2021-08-19 03:27:30', '2021-08-19 03:27:30'),
(2, 'Mô hình 1', 8, 'nd\r<br>nd\r<br>nd', 2, 'dd\r<br>đ\r<br>dd', '2021-08-19 00:00:00', '2022-08-19 00:00:00', 'kq\r<br>kq\r<br>kq', 'gc\r<br>gc\r<br>gc', '2021-08-19 03:27:55', '2021-08-19 03:27:55'),
(3, 'Mô hình 2', 7, 'nscasc\r<br>âsgqwf', 4, '\'a=sc=2r;12r\r<br>;ư==12;r-1204124e', '1993-02-02 00:00:00', '2022-02-02 00:00:00', 'kasckoascqwf\r<br>qừqwpfpqwf\r<br>d=12-12[d\r<br>12dấccasc', 'ácoascpasc\r<br>pưqkf0129r12pe\r<br>19410249\r<br>**$)#\"\"\'\'//', '2021-08-19 03:56:34', '2021-08-19 03:56:34');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nganh`
--

CREATE TABLE `nganh` (
  `id` int(10) UNSIGNED NOT NULL,
  `tenkhoahoc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tentiengviet` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gioi_id` int(10) UNSIGNED NOT NULL,
  `ghichu` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `chuanphanloai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trangthai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dongdanh_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nganh`
--

INSERT INTO `nganh` (`id`, `tenkhoahoc`, `tentiengviet`, `gioi_id`, `ghichu`, `chuanphanloai`, `trangthai`, `dongdanh_id`, `created_at`, `updated_at`) VALUES
(1, 'ngành s', 'ten tieng viet', 9, 'ghi chú\r<br>ghi chú', 'chuẩn phân loại', 'trạng thái', 1, '2021-10-04 02:47:09', '2021-10-04 02:47:09');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nguon_gen`
--

CREATE TABLE `nguon_gen` (
  `id` int(10) UNSIGNED NOT NULL,
  `loainguongen_id` int(10) UNSIGNED NOT NULL,
  `ten` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tenthongthuong` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tendantoc` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tenkhoahoc` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dacdiem` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `maso_qg` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `masotinh` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tinhtrangluugiu` smallint(5) UNSIGNED NOT NULL,
  `tinhtrangnghiencuu` smallint(5) UNSIGNED NOT NULL,
  `tinhtrangsudung` smallint(5) UNSIGNED DEFAULT NULL,
  `nguongoc` smallint(5) UNSIGNED DEFAULT NULL,
  `xuatxu` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phuongthucluutru` smallint(5) UNSIGNED DEFAULT NULL,
  `dientichluutru` double DEFAULT NULL,
  `vatlieuditruyenluutru` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slvatlieuditruyen` int(10) UNSIGNED DEFAULT NULL,
  `thoigianbatdauluugiu` smallint(5) UNSIGNED DEFAULT NULL,
  `hinhthucbaoquan` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `genquyhiem` smallint(5) UNSIGNED DEFAULT NULL,
  `banchatditruyen` smallint(5) UNSIGNED DEFAULT NULL,
  `tinhtrang` smallint(5) UNSIGNED DEFAULT NULL,
  `bienphapbaoton` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `khanangtiepcan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quytrinhtiepcan` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `genco_dk` smallint(5) UNSIGNED DEFAULT NULL,
  `ghichu` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nguon_gen`
--

INSERT INTO `nguon_gen` (`id`, `loainguongen_id`, `ten`, `tenthongthuong`, `tendantoc`, `tenkhoahoc`, `dacdiem`, `maso_qg`, `masotinh`, `tinhtrangluugiu`, `tinhtrangnghiencuu`, `tinhtrangsudung`, `nguongoc`, `xuatxu`, `phuongthucluutru`, `dientichluutru`, `vatlieuditruyenluutru`, `slvatlieuditruyen`, `thoigianbatdauluugiu`, `hinhthucbaoquan`, `genquyhiem`, `banchatditruyen`, `tinhtrang`, `bienphapbaoton`, `khanangtiepcan`, `quytrinhtiepcan`, `genco_dk`, `ghichu`, `created_at`, `updated_at`) VALUES
(1, 1, 'Lâm', NULL, NULL, NULL, NULL, NULL, NULL, 26, 29, 4, 5, NULL, 25, 8.9, NULL, NULL, 2000, NULL, 6, 8, 25, NULL, NULL, '', 14, '', '2021-08-23 10:35:12', '2021-08-23 10:35:12'),
(2, 2, 'tên nguồn gen', 't thông thường', 'tên dân tộc', 'tên khoa học', 'đặc điểm', '1122', '112233', 17, 15, 16, 8, 'Mars', 4, 124.3, 'Vật liệu di truyền lt', 1, 2010, 'HÌnh thức bảo quản', 6, 27, 27, 'Biện pháp bảo tồn', 'Khả năng tiếp cận', 'Quy trình tiếp cận\r<br>Quy trình tiếp cận\r<br>Quy trình tiếp cận\r<br>Quy trình tiếp cận', 25, 'Ghi chú\r<br>Ghi chú\r<br>Ghi chú', '2021-08-23 10:42:41', '2021-08-23 10:42:41');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhat_ky`
--

CREATE TABLE `nhat_ky` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tennguoidung` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thoigianhoatdong` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `hoatdong` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `noidung` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhom_nguon_gen`
--

CREATE TABLE `nhom_nguon_gen` (
  `id` int(10) UNSIGNED NOT NULL,
  `phanloai` smallint(5) UNSIGNED NOT NULL,
  `nhomnguongen` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mota` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ghichu` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nhom_nguon_gen`
--

INSERT INTO `nhom_nguon_gen` (`id`, `phanloai`, `nhomnguongen`, `mota`, `ghichu`, `created_at`, `updated_at`) VALUES
(1, 18, 'nhóm 1', 'mô tả\r<br>mô tả', 'ghi chú\r<br>ghi chú', '2021-08-23 03:21:03', '2021-08-23 03:21:03'),
(2, 23, 'Nhóm 2', 'Mô tả\r<br>Mô tả\r<br>Mô tả\r<br>Mô tả', 'Ghi chú ghi chú\r<br>Ghi chú ghi chú\r<br>Ghi chú ghi chú\r<br>Ghi chú ghi chú', '2021-08-23 03:26:31', '2021-08-23 03:26:31');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `o_nhiem_moi_truong_chay_rung_bien_doi_khi_hau`
--

CREATE TABLE `o_nhiem_moi_truong_chay_rung_bien_doi_khi_hau` (
  `id` int(10) UNSIGNED NOT NULL,
  `loaihinh` tinyint(3) UNSIGNED NOT NULL,
  `doituongbitacdong` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tansuat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hauqua` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dientich` double DEFAULT NULL,
  `diadiem_id` int(10) UNSIGNED DEFAULT NULL,
  `thoigian` smallint(5) UNSIGNED DEFAULT NULL,
  `huyen_id` int(10) UNSIGNED DEFAULT NULL,
  `xa_id` int(10) UNSIGNED DEFAULT NULL,
  `nguondulieu` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ghichu` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `o_tieu_chuan`
--

CREATE TABLE `o_tieu_chuan` (
  `id` int(10) UNSIGNED NOT NULL,
  `ten` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kichthuoc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hinhdang` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vitri` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `khonggian` geometry DEFAULT NULL,
  `docao` double DEFAULT NULL,
  `dosau` double DEFAULT NULL,
  `diadiem_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `hesinhthai` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `o_tieu_chuan`
--

INSERT INTO `o_tieu_chuan` (`id`, `ten`, `kichthuoc`, `hinhdang`, `vitri`, `khonggian`, `docao`, `dosau`, `diadiem_id`, `created_at`, `updated_at`, `hesinhthai`) VALUES
(1, 'ô tiêu chuẩn\'', 'kích thước \'', 'Hình dạng', 'bsdvbsdvsdv', NULL, 3.4, 8.0009, 1, '2021-09-17 10:22:09', '2021-09-17 10:22:09', NULL),
(2, 'A', 'kích thước \'', 'Hình dạng', 'vị trí', NULL, 3.4, 5.888, 1, '2021-09-17 10:23:11', '2021-09-17 10:23:11', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('sptinlam@gmail.com', '$2y$10$PnuMSQOgMaC2M8XwtxlCievNJaCqd9ZbjV385y4SCJH65OOYp2sPC', '2021-08-09 08:54:03');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phan_loai_he_sinh_thais`
--

CREATE TABLE `phan_loai_he_sinh_thais` (
  `id` int(10) UNSIGNED NOT NULL,
  `ten` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mota` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thuocloaihesinhthai` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phan_loai_hoc`
--

CREATE TABLE `phan_loai_hoc` (
  `id` int(10) UNSIGNED NOT NULL,
  `idtenkhoahoc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tenkhoahoc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kieuten_kh` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tenchapnhan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tencapbacgannhat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tengoc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nameAccordingTo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tenxuatban` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tennamxb` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `capbaccaohon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `specific_epithet` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `infraspecific_epithet` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `capbacphanloai` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bacphanloainguyenvan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tentacgiakh` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tenbanngu` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tenbanngu_ta` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tenbanngu_khac` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `madanhphap` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tinhtrangphanloai` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tinhtrangdanhphap` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nhanxet` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sohuu` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `chusohuu` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quyentruycap` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trichdan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thamchieu` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gioi_id` int(10) UNSIGNED DEFAULT NULL,
  `nganh_id` int(10) UNSIGNED DEFAULT NULL,
  `lop_id` int(10) UNSIGNED DEFAULT NULL,
  `bo_id` int(10) UNSIGNED DEFAULT NULL,
  `ho_id` int(10) UNSIGNED DEFAULT NULL,
  `chi_id` int(10) UNSIGNED DEFAULT NULL,
  `loai_id` int(10) UNSIGNED DEFAULT NULL,
  `duoiloai_id` int(10) UNSIGNED DEFAULT NULL,
  `chuanphanloai` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bodulieu_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `phan_loai_hoc`
--

INSERT INTO `phan_loai_hoc` (`id`, `idtenkhoahoc`, `tenkhoahoc`, `kieuten_kh`, `tenchapnhan`, `tencapbacgannhat`, `tengoc`, `nameAccordingTo`, `tenxuatban`, `tennamxb`, `capbaccaohon`, `specific_epithet`, `infraspecific_epithet`, `capbacphanloai`, `bacphanloainguyenvan`, `tentacgiakh`, `tenbanngu`, `tenbanngu_ta`, `tenbanngu_khac`, `madanhphap`, `tinhtrangphanloai`, `tinhtrangdanhphap`, `nhanxet`, `sohuu`, `chusohuu`, `quyentruycap`, `trichdan`, `thamchieu`, `gioi_id`, `nganh_id`, `lop_id`, `bo_id`, `ho_id`, `chi_id`, `loai_id`, `duoiloai_id`, `chuanphanloai`, `bodulieu_id`, `created_at`, `updated_at`) VALUES
(1, 'AA###4', 'Phân loại học', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-09-30 09:27:34', '2021-09-30 09:27:34');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phat_hien_loai`
--

CREATE TABLE `phat_hien_loai` (
  `id` int(10) UNSIGNED NOT NULL,
  `kieu` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ngaycapnhat` datetime DEFAULT NULL,
  `ngonngu` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quyen` varchar(80) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nguoigiuquyen` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quyentruycap` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trichdantm` varchar(120) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thamkhao` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dinhdanhtruso` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dinhdanhbosuutap` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bodulieu_id` int(10) UNSIGNED DEFAULT NULL,
  `matruso` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mabosuutap` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `matruso_sh` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cancubanghi` varchar(80) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thongtintuchoi` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tongquat` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tinhdong` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dinhdanhhientruong` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sodanhmuc` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `luu_y` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sobanghi` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nguoithuthap` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dinhdanhcanhan` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `socanhan` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gioitinh` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `giaidoansong` varchar(80) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dieukiensinhsan` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hanhvi` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ynghiathanhlap` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trangthaihientruong` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `chuanbi` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sapdat` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sodanhmuckhac` varchar(120) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dinhdanhtruoc` varchar(80) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `truyenthongphoihop` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tailieuthamkhaophoihop` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dulieuhientruongphoihop` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `chuoilienket` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phanloailienquan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sukien_id` int(10) UNSIGNED DEFAULT NULL,
  `quychuanlaymau` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `noluclaymau` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ngaysukien` datetime DEFAULT NULL,
  `giosukien` varchar(80) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ngaybatdaunam` smallint(5) UNSIGNED DEFAULT NULL,
  `ngaycuoidungnam` smallint(5) UNSIGNED DEFAULT NULL,
  `nam` smallint(5) UNSIGNED DEFAULT NULL,
  `thang` tinyint(3) UNSIGNED DEFAULT NULL,
  `ngay` tinyint(3) UNSIGNED DEFAULT NULL,
  `ngaynguyenvan` varchar(80) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `moitruong` varchar(80) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sotruong` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ghichutruong` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `luuysukien` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `diachatnangcao_id` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `diachatnangcao` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nguonnuoc` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quan` varchar(70) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dothi` varchar(70) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vung` varchar(70) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vungnguyenvan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `docaonguyenvan` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `docaotoithieu` double DEFAULT NULL,
  `docaotoida` double DEFAULT NULL,
  `dosaunguyengoc` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dosautoithieu` double DEFAULT NULL,
  `dosautoida` double DEFAULT NULL,
  `kc_toithieu_bm` double DEFAULT NULL,
  `kc_toida_bm` double DEFAULT NULL,
  `chuandiadiem` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `luuydiadiem` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `toadonguyengoc` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vidonguyengoc` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kinhdonguyengoc` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hetoadogoc` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `srs_nguyengoc` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vido` double DEFAULT NULL,
  `kinhdo` double DEFAULT NULL,
  `toadovuonggoc` double DEFAULT NULL,
  `dochinhxactoado` double DEFAULT NULL,
  `dochongkhop` double DEFAULT NULL,
  `mophong_wkt` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mophong_srs` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dochongkhopmophong` double DEFAULT NULL,
  `nguoilaptoado` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ngaythietlaptoado` datetime DEFAULT NULL,
  `dinhchuanthietlap` varchar(80) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nguontllaptoado` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trangthaikiemdinh` varchar(80) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `luuythietlap` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `boicanhdiachat_id` varchar(70) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `diatangthapnhat` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `diatangcaonhat` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kynguyensom` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kynguyenmuon` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thoikysom` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thoikymuon` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thoidaisom` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thoidaimuon` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tuoisom` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tuoimuon` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sinhdiatangthap` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sinhdiatangcao` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thachdiatang` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nhom` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `loai` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phantu` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `day` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nhandang_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nguoinhandang` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thamchieu` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phanloaihoc_id` int(10) UNSIGNED NOT NULL,
  `otieuchuan_id` int(10) UNSIGNED DEFAULT NULL,
  `diadiem_id` int(10) UNSIGNED DEFAULT NULL,
  `tochuc_id` int(10) UNSIGNED DEFAULT NULL,
  `public` smallint(5) UNSIGNED DEFAULT NULL,
  `hesinhthai_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phat_hien_loai_bo_sung`
--

CREATE TABLE `phat_hien_loai_bo_sung` (
  `bosung_id` int(10) UNSIGNED NOT NULL,
  `ngaynhandang` datetime DEFAULT NULL,
  `thamkhaonhandang` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tinhtrangkiemdinh` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `luuynhandang` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dinhtinhnhandang` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `loaitrangthai` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_tenkhoahoc` varchar(80) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tenkhoahoc` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kieutenkhoahoc` varchar(120) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tenchapnhan` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tencapbacgannhat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tengoc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_according_to` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tenxuatban` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tennamxuatban` varchar(12) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `capbaccaohon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `specific_epithet` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `infraspecific_epithet` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `capbacphanloai` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bacphanloainguyenvan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tentacgia_kh` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tenbanngu` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tenbanngu_ta` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tenbanngukhac` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `madanhphap` varchar(120) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tinhtrangphanloai` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tinhtrangdanhphap` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nhanxet` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sohuu` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `chusohuu` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trichdan` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `quan_huyen`
--

CREATE TABLE `quan_huyen` (
  `id` int(10) UNSIGNED NOT NULL,
  `ten` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `khonggian` polygon NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sinh_vat_ngoai_lai_xam_hai`
--

CREATE TABLE `sinh_vat_ngoai_lai_xam_hai` (
  `id` int(10) UNSIGNED NOT NULL,
  `ten` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phanloaihoc_id` int(10) UNSIGNED DEFAULT NULL,
  `tenkhoahoc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phanloai` tinyint(3) UNSIGNED NOT NULL,
  `nguycoxamhai` tinyint(3) UNSIGNED DEFAULT NULL,
  `nguongoc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dientich` double DEFAULT NULL,
  `noiphanbo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `diadiem_id` int(10) UNSIGNED DEFAULT NULL,
  `thoigian` smallint(5) UNSIGNED DEFAULT NULL,
  `huyen_id` int(10) UNSIGNED DEFAULT NULL,
  `xa_id` int(10) UNSIGNED DEFAULT NULL,
  `nguondulieu` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ghichu` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tai_lieu_tham_khao_bo_du_lieu`
--

CREATE TABLE `tai_lieu_tham_khao_bo_du_lieu` (
  `id` int(10) UNSIGNED NOT NULL,
  `ten` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bodulieu_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tai_lieu_tham_khao_bo_du_lieu`
--

INSERT INTO `tai_lieu_tham_khao_bo_du_lieu` (`id`, `ten`, `bodulieu_id`, `created_at`, `updated_at`) VALUES
(1, 'tl1', 1, '2021-09-14 04:48:57', '2021-09-14 04:48:57'),
(2, 'tl3', 1, '2021-09-14 04:48:57', '2021-09-14 04:48:57'),
(3, 'tl1', 2, '2021-09-14 04:49:35', '2021-09-14 04:49:35'),
(4, 'tl3', 2, '2021-09-14 04:49:35', '2021-09-14 04:49:35'),
(5, 'tl34', 3, '2021-09-14 04:51:34', '2021-09-14 04:51:34'),
(6, 'tài liệu 2', 3, '2021-09-14 04:51:34', '2021-09-14 04:51:34'),
(7, 'Tài liệu tham khảo 1', 4, '2021-09-14 08:46:58', '2021-09-14 08:46:58'),
(8, 'Tài liệu tham khảo 2', 4, '2021-09-14 08:46:58', '2021-09-14 08:46:58');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tang_dan_so_vung_dem`
--

CREATE TABLE `tang_dan_so_vung_dem` (
  `id` int(10) UNSIGNED NOT NULL,
  `danso` int(10) UNSIGNED NOT NULL,
  `tyletang` double NOT NULL,
  `diadiem_id` int(10) UNSIGNED DEFAULT NULL,
  `thoigiankhaosat` datetime DEFAULT NULL,
  `kybaocao` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgbatdau` datetime DEFAULT NULL,
  `tgketthuc` datetime DEFAULT NULL,
  `huyen_id` int(10) UNSIGNED DEFAULT NULL,
  `xa_id` int(10) UNSIGNED DEFAULT NULL,
  `nguondulieu` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ghichu` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tang_dan_so_vung_dem`
--

INSERT INTO `tang_dan_so_vung_dem` (`id`, `danso`, `tyletang`, `diadiem_id`, `thoigiankhaosat`, `kybaocao`, `tgbatdau`, `tgketthuc`, `huyen_id`, `xa_id`, `nguondulieu`, `ghichu`, `created_at`, `updated_at`) VALUES
(1, 55, 8.9, NULL, '0005-12-22 00:00:00', NULL, NULL, NULL, NULL, NULL, '', '', '2021-09-08 09:20:32', '2021-09-08 09:20:32'),
(2, 434323, 0.34, 1, '2021-09-08 00:00:00', 'kỳ báo cáo kỳ báo cáo kỳ báo cáo kỳ báo cáo', '2021-09-10 00:00:00', NULL, NULL, NULL, 'nguồn dữ liệu\r<br>nguồn dữ liệu', 'gc\r<br>gc\r<br>gc', '2021-09-08 09:22:02', '2021-09-08 09:22:02'),
(3, 1212, 1.2, 1, '2021-09-08 00:00:00', 'báo cáo 1', '2021-09-16 00:00:00', '2021-10-01 00:00:00', NULL, NULL, 'ngb\r<br>n\r<br>h', 'c\r<br>v\r<br>d\r<br>áda', '2021-09-08 10:22:22', '2021-09-08 10:22:22');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thong_so_quan_trac`
--

CREATE TABLE `thong_so_quan_trac` (
  `id` int(10) UNSIGNED NOT NULL,
  `tentiengviet` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tentienganh` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kyhieu` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thong_tin_bo_sung_phan_loai_hoc`
--

CREATE TABLE `thong_tin_bo_sung_phan_loai_hoc` (
  `id` int(10) UNSIGNED NOT NULL,
  `luatvebvloai` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cites` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nguongocvn` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tinhtrangxamhai` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sudung` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `motahinhthai` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dactinhhanhvi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phanbo_vn` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phanbo_tg` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phuongphapbv` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thoigiansinhsan` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hinhthucsinhsan` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dieukiensinhsan` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thoigiansinhtruong` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thucan` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dactinhsinhhoc` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `noisinhsong` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dactinhsinhthai` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thongtinkhac` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tunhien` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nhaycam` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hiem` int(10) UNSIGNED DEFAULT NULL,
  `tinhtrangphanbo_vn` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `loaidachuu` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phanloaihoc_id` int(10) UNSIGNED DEFAULT NULL,
  `rungngapman` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dangsong` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nhaycammoitruong` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phongphuvahiem` smallint(5) UNSIGNED DEFAULT NULL,
  `ghichu` smallint(5) UNSIGNED DEFAULT NULL,
  `nguongoccoso` tinyint(3) UNSIGNED DEFAULT NULL,
  `mucdichnuoitrong` tinyint(3) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `phanbodiaphuong` smallint(5) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thong_tin_luu_tru_nguon_gen`
--

CREATE TABLE `thong_tin_luu_tru_nguon_gen` (
  `id` int(10) UNSIGNED NOT NULL,
  `nguongen_id` int(10) UNSIGNED NOT NULL,
  `huyen` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `xa` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thon` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nguoisohuu` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thongtinlienhe` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `khonggian` geometry DEFAULT NULL,
  `ghichu` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tinh_trang_de_doa_theo_danh_luc_iucn`
--

CREATE TABLE `tinh_trang_de_doa_theo_danh_luc_iucn` (
  `id` int(10) UNSIGNED NOT NULL,
  `phanloaihoc_id` int(10) UNSIGNED NOT NULL,
  `phanhang` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nam` smallint(5) UNSIGNED DEFAULT NULL,
  `ghichu` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tinh_trang_de_doa_theo_nghi_dinh`
--

CREATE TABLE `tinh_trang_de_doa_theo_nghi_dinh` (
  `id` int(10) UNSIGNED NOT NULL,
  `phanloaihoc_id` int(10) UNSIGNED NOT NULL,
  `nghidinh` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ghichu` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tinh_trang_de_doa_theo_phu_luc_cong_uoc_cites`
--

CREATE TABLE `tinh_trang_de_doa_theo_phu_luc_cong_uoc_cites` (
  `id` int(10) UNSIGNED NOT NULL,
  `phanloaihoc_id` int(10) UNSIGNED NOT NULL,
  `phuluc` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ghichu` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tinh_trang_de_doa_theo_sach_do_viet_nam`
--

CREATE TABLE `tinh_trang_de_doa_theo_sach_do_viet_nam` (
  `id` int(10) UNSIGNED NOT NULL,
  `phanloaihoc_id` int(10) UNSIGNED NOT NULL,
  `phanhang` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nam` smallint(5) UNSIGNED DEFAULT NULL,
  `ghichu` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `to_chuc`
--

CREATE TABLE `to_chuc` (
  `id` int(10) UNSIGNED NOT NULL,
  `ten` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `loai` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `diachi` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lienhe` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dienthoai` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mota` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trangthai` varchar(80) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `to_chuc`
--

INSERT INTO `to_chuc` (`id`, `ten`, `loai`, `diachi`, `lienhe`, `email`, `dienthoai`, `mota`, `trangthai`, `created_at`, `updated_at`) VALUES
(1, 'bTổ chức 1', 'Loại 1', 'Hà Nội\r<br>Hà Nội', 'Liên hệ 1\r<br>Liên hệ 2', 'sptinlam@bidv.com.vn', '0967802107', 'mo ta\r<br>mo ta', '3', '2021-08-18 08:16:23', '2021-08-18 08:16:23'),
(2, 'Tổ chức 2', 'Loại 2', 'HN\r<br>HN\r<br>__!+@\"\"\'\'\'\r<br>;c á[c', 'lscasc\r<br>\'á\'cl\'ác\r<br>-c0=21=0-12&&$(%(#\r<br>c', 'sptinlam@gmail.com', '0383669106', 'Mô tả\r<br>Mô tả', '3', '2021-08-18 08:17:44', '2021-08-18 08:17:44'),
(3, 'Tổ chức 3', 'Loại 3', '', '', 'sptinlam@gmail.com', '0383669106', '', '4', '2021-08-18 08:22:23', '2021-08-18 08:22:23'),
(4, 'bTổ chức 4', 'Loại 2', 'dc\r<br>dc', 'lh1\r<br>lh2', 'opdoas@lkl.com', '0383669106', 'mo ta\r<br>mo ta\r<br>sql\r<br>insert into (\'cccc\') values (\'c;sơcas[clac\'\'ơ=sc;ác\');', '5', '2021-08-18 08:40:49', '2021-08-18 08:40:49');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tri_thuc_truyen_thong`
--

CREATE TABLE `tri_thuc_truyen_thong` (
  `id` int(10) UNSIGNED NOT NULL,
  `nhom` tinyint(3) UNSIGNED NOT NULL,
  `ten` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nguoiluutru` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `noiluugiu_id` int(10) UNSIGNED DEFAULT NULL,
  `mota` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `soluonggen` smallint(5) UNSIGNED DEFAULT NULL,
  `capchungnhan` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ghichu` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tri_thuc_truyen_thong_nguon_gen`
--

CREATE TABLE `tri_thuc_truyen_thong_nguon_gen` (
  `id` int(10) UNSIGNED NOT NULL,
  `nguongen_id` int(10) UNSIGNED DEFAULT NULL,
  `trithuctruyenthong_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tu_dien`
--

CREATE TABLE `tu_dien` (
  `id` tinyint(3) UNSIGNED NOT NULL,
  `value` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tu_dien`
--

INSERT INTO `tu_dien` (`id`, `value`, `description`, `type`, `created_at`, `updated_at`) VALUES
(1, 'NguonKinhPhi', '', 'NguonKinhPhi', '2021-08-18 04:30:34', '2021-08-18 04:30:34'),
(2, 'TrangThaiToChuc', 'Thông tin tổ chức', 'TrangThaiToChuc', '2021-08-18 04:53:21', '2021-08-18 04:53:21'),
(3, 'HinhThucSangKien', 'Mô hình sáng kiến', 'HinhThucSangKien', '2021-08-19 03:12:49', '2021-08-19 03:12:49'),
(4, 'NhomChiThi', 'Danh mục chỉ thị', 'NhomChiThi', '2021-08-19 10:41:49', '2021-08-19 10:41:49'),
(5, 'PhanCapBaoCao', 'báo cáo áp lực lên đa dạng sinh học', 'PhanCapBaoCao', '2021-08-20 08:00:48', '2021-08-20 08:00:48'),
(6, 'PhanLoaiNhomNguonGen', 'nhóm nguồn gen', 'PhanLoaiNhomNguonGen', '2021-08-23 03:09:44', '2021-08-23 03:09:44'),
(7, 'TInhTrangLuuGiu', 'Nguồn gen', 'TInhTrangLuuGiu', '2021-08-23 07:58:58', '2021-08-23 07:58:58'),
(8, 'TinhTrangNguonGen', '', 'TinhTrangNguonGen', '2021-08-23 08:00:51', '2021-08-23 08:00:51'),
(9, 'MucDichChuyenDoi', 'Chuyển đổi mục đích sử dụng đất', 'MucDichChuyenDoi', '2021-09-09 04:48:14', '2021-09-09 04:48:14'),
(10, 'LoaiDatChuyenDoi', 'Chuyển đổi mục đích sử dụng đất', 'LoaiDatChuyenDoi', '2021-09-09 04:48:56', '2021-09-09 04:48:56');

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
  `updated_at` timestamp NULL DEFAULT NULL,
  `dienthoai` varchar(12) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tinhtrang` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kichhoat` tinyint(1) NOT NULL,
  `vaitro` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lancuoidangnhap` datetime DEFAULT NULL,
  `landangnhap` smallint(5) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `dienthoai`, `tinhtrang`, `kichhoat`, `vaitro`, `lancuoidangnhap`, `landangnhap`) VALUES
(1, 'admin', 'sptinlam@gmail.com', NULL, '$2y$10$u6WCIUUKDkrvdETGvcmq1.s/MHCuhQ9iu1DPJ8vwImUOhcEVk692K', 'CLK5oISo1NmVn3jyjuA0IStz8nIBxEbbQWH7mdstmnZmisEIXt6dMDio3hEF', '2021-08-09 04:49:18', '2021-10-11 03:39:47', '0383669106', NULL, 0, '', '2021-10-11 10:39:47', 21),
(2, 'nguyen van a', 'abc@gmail.com', NULL, '$2y$10$YAt0il/AgeORcWPM6rcE5ezDczEDVQXkfWO69F1hXFVSVM4rrQv6C', NULL, '2021-08-23 16:00:42', '2021-08-23 16:00:42', '0123456789', NULL, 0, 'Quản trị', NULL, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `vi_pham_xu_phat_hanh_chinh_va_hinh_su`
--

CREATE TABLE `vi_pham_xu_phat_hanh_chinh_va_hinh_su` (
  `id` int(10) UNSIGNED NOT NULL,
  `doituongvipham` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hinhvivipham` tinyint(3) UNSIGNED NOT NULL,
  `noidungvipham` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hinhthucxuly` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `soluongloaitichthu` int(10) UNSIGNED DEFAULT NULL,
  `soluongcathtichthu` int(10) UNSIGNED DEFAULT NULL,
  `khoiluongcathetichthu` int(10) UNSIGNED DEFAULT NULL,
  `thoigian` smallint(5) UNSIGNED DEFAULT NULL,
  `huyen_id` int(10) UNSIGNED DEFAULT NULL,
  `xa_id` int(10) UNSIGNED DEFAULT NULL,
  `nguondulieu` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `xa`
--

CREATE TABLE `xa` (
  `id` int(10) UNSIGNED NOT NULL,
  `ten` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `khonggian` geometry NOT NULL,
  `huyen_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `bao_cao_ap_luc_len_ddsh`
--
ALTER TABLE `bao_cao_ap_luc_len_ddsh`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bao_cao_ap_luc_len_ddsh_thongso_id_foreign` (`thongso_id`);

--
-- Chỉ mục cho bảng `bo`
--
ALTER TABLE `bo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bo_lop_id_foreign` (`lop_id`),
  ADD KEY `bo_dongdanh_id_foreign` (`dongdanh_id`);

--
-- Chỉ mục cho bảng `bo_du_lieu`
--
ALTER TABLE `bo_du_lieu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bo_du_lieu_tochuc_id_foreign` (`tochuc_id`);

--
-- Chỉ mục cho bảng `chi`
--
ALTER TABLE `chi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `chi_ho_id_foreign` (`ho_id`),
  ADD KEY `chi_dongdanh_id_foreign` (`dongdanh_id`);

--
-- Chỉ mục cho bảng `chuong_trinh_de_tai_du_an_kiem_soat_svnlxh`
--
ALTER TABLE `chuong_trinh_de_tai_du_an_kiem_soat_svnlxh`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `chuyen_doi_muc_dich_su_dung_dat`
--
ALTER TABLE `chuyen_doi_muc_dich_su_dung_dat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `chuyen_doi_muc_dich_su_dung_dat_diadiem_id_foreign` (`diadiem_id`);

--
-- Chỉ mục cho bảng `co_so_bao_ton_nguon_gens`
--
ALTER TABLE `co_so_bao_ton_nguon_gens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `co_so_bao_ton_nguon_gens_diadiem_id_foreign` (`diadiem_id`);

--
-- Chỉ mục cho bảng `danh_muc_chi_thi`
--
ALTER TABLE `danh_muc_chi_thi`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `danh_muc_nhom_chi_thi`
--
ALTER TABLE `danh_muc_nhom_chi_thi`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `danh_muc_thong_so`
--
ALTER TABLE `danh_muc_thong_so`
  ADD PRIMARY KEY (`id`),
  ADD KEY `danh_muc_thong_so_chithi_id_foreign` (`chithi_id`);

--
-- Chỉ mục cho bảng `def_values`
--
ALTER TABLE `def_values`
  ADD PRIMARY KEY (`id`),
  ADD KEY `def_values_tudien_id_foreign` (`tudien_id`);

--
-- Chỉ mục cho bảng `dich_vu_he_sinh_thai`
--
ALTER TABLE `dich_vu_he_sinh_thai`
  ADD PRIMARY KEY (`id`),
  ADD KEY `dich_vu_he_sinh_thai_hesinhthai_id_foreign` (`hesinhthai_id`),
  ADD KEY `dich_vu_he_sinh_thai_diadiem_id_foreign` (`diadiem_id`);

--
-- Chỉ mục cho bảng `diem_quan_trac`
--
ALTER TABLE `diem_quan_trac`
  ADD PRIMARY KEY (`id`),
  ADD KEY `diem_quan_trac_diadiem_id_foreign` (`diadiem_id`),
  ADD KEY `diem_quan_trac_loaihinhqt_id_foreign` (`loaihinhqt_id`);

--
-- Chỉ mục cho bảng `dong_danh`
--
ALTER TABLE `dong_danh`
  ADD PRIMARY KEY (`id`),
  ADD KEY `dong_danh_phanloaihoc_id_foreign` (`phanloaihoc_id`);

--
-- Chỉ mục cho bảng `duoi_loai`
--
ALTER TABLE `duoi_loai`
  ADD PRIMARY KEY (`id`),
  ADD KEY `duoi_loai_loai_id_foreign` (`loai_id`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Chỉ mục cho bảng `gioi`
--
ALTER TABLE `gioi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `gioi_dongdanh_id_foreign` (`dongdanh_id`);

--
-- Chỉ mục cho bảng `he_sinh_thais`
--
ALTER TABLE `he_sinh_thais`
  ADD PRIMARY KEY (`id`),
  ADD KEY `he_sinh_thais_phanloaihesinhthai_id_foreign` (`phanloaihesinhthai_id`);

--
-- Chỉ mục cho bảng `he_sinh_thai_co_trang_cay_bui`
--
ALTER TABLE `he_sinh_thai_co_trang_cay_bui`
  ADD PRIMARY KEY (`hesinhthai_id`);

--
-- Chỉ mục cho bảng `he_sinh_thai_dan_cu_nong_nghiep`
--
ALTER TABLE `he_sinh_thai_dan_cu_nong_nghiep`
  ADD PRIMARY KEY (`hesinhthai_id`),
  ADD KEY `he_sinh_thai_dan_cu_nong_nghiep_huyen_id_foreign` (`huyen_id`),
  ADD KEY `he_sinh_thai_dan_cu_nong_nghiep_xa_id_foreign` (`xa_id`);

--
-- Chỉ mục cho bảng `he_sinh_thai_dat_ngap_nuoc`
--
ALTER TABLE `he_sinh_thai_dat_ngap_nuoc`
  ADD PRIMARY KEY (`hesinhthai_id`);

--
-- Chỉ mục cho bảng `he_sinh_thai_rung_tren_can`
--
ALTER TABLE `he_sinh_thai_rung_tren_can`
  ADD PRIMARY KEY (`hesinhthai_id`);

--
-- Chỉ mục cho bảng `hinh_anh_loai`
--
ALTER TABLE `hinh_anh_loai`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hinh_anh_loai_phanloaihoc_id_foreign` (`phanloaihoc_id`),
  ADD KEY `hinh_anh_loai_phathienloai_id_foreign` (`phathienloai_id`);

--
-- Chỉ mục cho bảng `ho`
--
ALTER TABLE `ho`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ho_bo_id_foreign` (`bo_id`),
  ADD KEY `ho_dongdanh_id_foreign` (`dongdanh_id`);

--
-- Chỉ mục cho bảng `hoat_dong_du_lich`
--
ALTER TABLE `hoat_dong_du_lich`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hoat_dong_du_lich_diadiem_id_foreign` (`diadiem_id`);

--
-- Chỉ mục cho bảng `hop_tac_quoc_te`
--
ALTER TABLE `hop_tac_quoc_te`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `ket_qua_quan_trac`
--
ALTER TABLE `ket_qua_quan_trac`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ket_qua_quan_trac_diadiemqt_id_foreign` (`diadiemqt_id`),
  ADD KEY `ket_qua_quan_trac_thongso_id_foreign` (`thongso_id`);

--
-- Chỉ mục cho bảng `khai_thac_qua_muc_cho_phep`
--
ALTER TABLE `khai_thac_qua_muc_cho_phep`
  ADD PRIMARY KEY (`id`),
  ADD KEY `khai_thac_qua_muc_cho_phep_diadiem_id_foreign` (`diadiem_id`),
  ADD KEY `khai_thac_qua_muc_cho_phep_huyen_id_foreign` (`huyen_id`),
  ADD KEY `khai_thac_qua_muc_cho_phep_xa_id_foreign` (`xa_id`);

--
-- Chỉ mục cho bảng `khu_bao_ton`
--
ALTER TABLE `khu_bao_ton`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `kinh_phi`
--
ALTER TABLE `kinh_phi`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `loai`
--
ALTER TABLE `loai`
  ADD PRIMARY KEY (`id`),
  ADD KEY `loai_chi_id_foreign` (`chi_id`),
  ADD KEY `loai_dongdanh_id_foreign` (`dongdanh_id`);

--
-- Chỉ mục cho bảng `loai_hinh_quan_trac`
--
ALTER TABLE `loai_hinh_quan_trac`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `loai_nguon_gen`
--
ALTER TABLE `loai_nguon_gen`
  ADD PRIMARY KEY (`id`),
  ADD KEY `loai_nguon_gen_nhomnguongen_id_foreign` (`nhomnguongen_id`);

--
-- Chỉ mục cho bảng `lop`
--
ALTER TABLE `lop`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lop_nganh_id_foreign` (`nganh_id`),
  ADD KEY `lop_dongdanh_id_foreign` (`dongdanh_id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `mo_hinh_sang_kien`
--
ALTER TABLE `mo_hinh_sang_kien`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mo_hinh_sang_kien_coquan_id_foreign` (`coquan_id`);

--
-- Chỉ mục cho bảng `nganh`
--
ALTER TABLE `nganh`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nganh_gioi_id_foreign` (`gioi_id`),
  ADD KEY `nganh_dongdanh_id_foreign` (`dongdanh_id`);

--
-- Chỉ mục cho bảng `nguon_gen`
--
ALTER TABLE `nguon_gen`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nguon_gen_loainguongen_id_foreign` (`loainguongen_id`);

--
-- Chỉ mục cho bảng `nhat_ky`
--
ALTER TABLE `nhat_ky`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `nhom_nguon_gen`
--
ALTER TABLE `nhom_nguon_gen`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `o_nhiem_moi_truong_chay_rung_bien_doi_khi_hau`
--
ALTER TABLE `o_nhiem_moi_truong_chay_rung_bien_doi_khi_hau`
  ADD PRIMARY KEY (`id`),
  ADD KEY `o_nhiem_moi_truong_chay_rung_bien_doi_khi_hau_diadiem_id_foreign` (`diadiem_id`),
  ADD KEY `o_nhiem_moi_truong_chay_rung_bien_doi_khi_hau_huyen_id_foreign` (`huyen_id`),
  ADD KEY `o_nhiem_moi_truong_chay_rung_bien_doi_khi_hau_xa_id_foreign` (`xa_id`);

--
-- Chỉ mục cho bảng `o_tieu_chuan`
--
ALTER TABLE `o_tieu_chuan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `o_tieu_chuan_diadiem_id_foreign` (`diadiem_id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `phan_loai_he_sinh_thais`
--
ALTER TABLE `phan_loai_he_sinh_thais`
  ADD PRIMARY KEY (`id`),
  ADD KEY `phan_loai_he_sinh_thais_thuocloaihesinhthai_foreign` (`thuocloaihesinhthai`);

--
-- Chỉ mục cho bảng `phan_loai_hoc`
--
ALTER TABLE `phan_loai_hoc`
  ADD PRIMARY KEY (`id`),
  ADD KEY `phan_loai_hoc_gioi_id_foreign` (`gioi_id`),
  ADD KEY `phan_loai_hoc_nganh_id_foreign` (`nganh_id`),
  ADD KEY `phan_loai_hoc_lop_id_foreign` (`lop_id`),
  ADD KEY `phan_loai_hoc_bo_id_foreign` (`bo_id`),
  ADD KEY `phan_loai_hoc_ho_id_foreign` (`ho_id`),
  ADD KEY `phan_loai_hoc_chi_id_foreign` (`chi_id`),
  ADD KEY `phan_loai_hoc_loai_id_foreign` (`loai_id`),
  ADD KEY `phan_loai_hoc_duoiloai_id_foreign` (`duoiloai_id`),
  ADD KEY `phan_loai_hoc_bodulieu_id_foreign` (`bodulieu_id`);

--
-- Chỉ mục cho bảng `phat_hien_loai`
--
ALTER TABLE `phat_hien_loai`
  ADD PRIMARY KEY (`id`),
  ADD KEY `phat_hien_loai_bodulieu_id_foreign` (`bodulieu_id`),
  ADD KEY `phat_hien_loai_phanloaihoc_id_foreign` (`phanloaihoc_id`),
  ADD KEY `phat_hien_loai_otieuchuan_id_foreign` (`otieuchuan_id`),
  ADD KEY `phat_hien_loai_diadiem_id_foreign` (`diadiem_id`),
  ADD KEY `phat_hien_loai_hesinhthai_id_foreign` (`hesinhthai_id`),
  ADD KEY `phat_hien_loai_tochuc_id_foreign` (`tochuc_id`);

--
-- Chỉ mục cho bảng `phat_hien_loai_bo_sung`
--
ALTER TABLE `phat_hien_loai_bo_sung`
  ADD PRIMARY KEY (`bosung_id`);

--
-- Chỉ mục cho bảng `quan_huyen`
--
ALTER TABLE `quan_huyen`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `sinh_vat_ngoai_lai_xam_hai`
--
ALTER TABLE `sinh_vat_ngoai_lai_xam_hai`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sinh_vat_ngoai_lai_xam_hai_phanloaihoc_id_foreign` (`phanloaihoc_id`),
  ADD KEY `sinh_vat_ngoai_lai_xam_hai_diadiem_id_foreign` (`diadiem_id`),
  ADD KEY `sinh_vat_ngoai_lai_xam_hai_huyen_id_foreign` (`huyen_id`),
  ADD KEY `sinh_vat_ngoai_lai_xam_hai_xa_id_foreign` (`xa_id`);

--
-- Chỉ mục cho bảng `tai_lieu_tham_khao_bo_du_lieu`
--
ALTER TABLE `tai_lieu_tham_khao_bo_du_lieu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tai_lieu_tham_khao_bo_du_lieu_bodulieu_id_foreign` (`bodulieu_id`);

--
-- Chỉ mục cho bảng `tang_dan_so_vung_dem`
--
ALTER TABLE `tang_dan_so_vung_dem`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tang_dan_so_vung_dem_diadiem_id_foreign` (`diadiem_id`),
  ADD KEY `tang_dan_so_vung_dem_huyen_id_foreign` (`huyen_id`),
  ADD KEY `tang_dan_so_vung_dem_xa_id_foreign` (`xa_id`);

--
-- Chỉ mục cho bảng `thong_so_quan_trac`
--
ALTER TABLE `thong_so_quan_trac`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `thong_tin_bo_sung_phan_loai_hoc`
--
ALTER TABLE `thong_tin_bo_sung_phan_loai_hoc`
  ADD PRIMARY KEY (`id`),
  ADD KEY `thong_tin_bo_sung_phan_loai_hoc_phanloaihoc_id_foreign` (`phanloaihoc_id`);

--
-- Chỉ mục cho bảng `thong_tin_luu_tru_nguon_gen`
--
ALTER TABLE `thong_tin_luu_tru_nguon_gen`
  ADD PRIMARY KEY (`id`),
  ADD KEY `thong_tin_luu_tru_nguon_gen_nguongen_id_foreign` (`nguongen_id`);

--
-- Chỉ mục cho bảng `tinh_trang_de_doa_theo_danh_luc_iucn`
--
ALTER TABLE `tinh_trang_de_doa_theo_danh_luc_iucn`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tinh_trang_de_doa_theo_danh_luc_iucn_phanloaihoc_id_foreign` (`phanloaihoc_id`);

--
-- Chỉ mục cho bảng `tinh_trang_de_doa_theo_nghi_dinh`
--
ALTER TABLE `tinh_trang_de_doa_theo_nghi_dinh`
  ADD PRIMARY KEY (`id`),
  ADD KEY `dedoatheonghidinh_phanloaihoc_id_foreign` (`phanloaihoc_id`);

--
-- Chỉ mục cho bảng `tinh_trang_de_doa_theo_phu_luc_cong_uoc_cites`
--
ALTER TABLE `tinh_trang_de_doa_theo_phu_luc_cong_uoc_cites`
  ADD PRIMARY KEY (`id`),
  ADD KEY `conguoc_cites_phanloaihoc_id_foreign` (`phanloaihoc_id`);

--
-- Chỉ mục cho bảng `tinh_trang_de_doa_theo_sach_do_viet_nam`
--
ALTER TABLE `tinh_trang_de_doa_theo_sach_do_viet_nam`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sach_do_vn_phanloaihoc_id_foreign` (`phanloaihoc_id`);

--
-- Chỉ mục cho bảng `to_chuc`
--
ALTER TABLE `to_chuc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tri_thuc_truyen_thong`
--
ALTER TABLE `tri_thuc_truyen_thong`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tri_thuc_truyen_thong_noiluugiu_id_foreign` (`noiluugiu_id`);

--
-- Chỉ mục cho bảng `tri_thuc_truyen_thong_nguon_gen`
--
ALTER TABLE `tri_thuc_truyen_thong_nguon_gen`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tri_thuc_truyen_thong_nguon_gen_nguongen_id_foreign` (`nguongen_id`),
  ADD KEY `tri_thuc_truyen_thong_nguon_gen_trithuctruyenthong_id_foreign` (`trithuctruyenthong_id`);

--
-- Chỉ mục cho bảng `tu_dien`
--
ALTER TABLE `tu_dien`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Chỉ mục cho bảng `vi_pham_xu_phat_hanh_chinh_va_hinh_su`
--
ALTER TABLE `vi_pham_xu_phat_hanh_chinh_va_hinh_su`
  ADD PRIMARY KEY (`id`),
  ADD KEY `vi_pham_xu_phat_hanh_chinh_va_hinh_su_huyen_id_foreign` (`huyen_id`),
  ADD KEY `vi_pham_xu_phat_hanh_chinh_va_hinh_su_xa_id_foreign` (`xa_id`);

--
-- Chỉ mục cho bảng `xa`
--
ALTER TABLE `xa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `xa_huyen_id_foreign` (`huyen_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `bao_cao_ap_luc_len_ddsh`
--
ALTER TABLE `bao_cao_ap_luc_len_ddsh`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `bo`
--
ALTER TABLE `bo`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `bo_du_lieu`
--
ALTER TABLE `bo_du_lieu`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `chi`
--
ALTER TABLE `chi`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `chuong_trinh_de_tai_du_an_kiem_soat_svnlxh`
--
ALTER TABLE `chuong_trinh_de_tai_du_an_kiem_soat_svnlxh`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `chuyen_doi_muc_dich_su_dung_dat`
--
ALTER TABLE `chuyen_doi_muc_dich_su_dung_dat`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `co_so_bao_ton_nguon_gens`
--
ALTER TABLE `co_so_bao_ton_nguon_gens`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `danh_muc_chi_thi`
--
ALTER TABLE `danh_muc_chi_thi`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `danh_muc_nhom_chi_thi`
--
ALTER TABLE `danh_muc_nhom_chi_thi`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `danh_muc_thong_so`
--
ALTER TABLE `danh_muc_thong_so`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `def_values`
--
ALTER TABLE `def_values`
  MODIFY `id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT cho bảng `dich_vu_he_sinh_thai`
--
ALTER TABLE `dich_vu_he_sinh_thai`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `diem_quan_trac`
--
ALTER TABLE `diem_quan_trac`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `dong_danh`
--
ALTER TABLE `dong_danh`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `duoi_loai`
--
ALTER TABLE `duoi_loai`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `gioi`
--
ALTER TABLE `gioi`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `he_sinh_thais`
--
ALTER TABLE `he_sinh_thais`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `hinh_anh_loai`
--
ALTER TABLE `hinh_anh_loai`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `ho`
--
ALTER TABLE `ho`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `hoat_dong_du_lich`
--
ALTER TABLE `hoat_dong_du_lich`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `hop_tac_quoc_te`
--
ALTER TABLE `hop_tac_quoc_te`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `ket_qua_quan_trac`
--
ALTER TABLE `ket_qua_quan_trac`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `khai_thac_qua_muc_cho_phep`
--
ALTER TABLE `khai_thac_qua_muc_cho_phep`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `khu_bao_ton`
--
ALTER TABLE `khu_bao_ton`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `kinh_phi`
--
ALTER TABLE `kinh_phi`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `loai`
--
ALTER TABLE `loai`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `loai_hinh_quan_trac`
--
ALTER TABLE `loai_hinh_quan_trac`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `loai_nguon_gen`
--
ALTER TABLE `loai_nguon_gen`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `lop`
--
ALTER TABLE `lop`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=144;

--
-- AUTO_INCREMENT cho bảng `mo_hinh_sang_kien`
--
ALTER TABLE `mo_hinh_sang_kien`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `nganh`
--
ALTER TABLE `nganh`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `nguon_gen`
--
ALTER TABLE `nguon_gen`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `nhat_ky`
--
ALTER TABLE `nhat_ky`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `nhom_nguon_gen`
--
ALTER TABLE `nhom_nguon_gen`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `o_nhiem_moi_truong_chay_rung_bien_doi_khi_hau`
--
ALTER TABLE `o_nhiem_moi_truong_chay_rung_bien_doi_khi_hau`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `o_tieu_chuan`
--
ALTER TABLE `o_tieu_chuan`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `phan_loai_he_sinh_thais`
--
ALTER TABLE `phan_loai_he_sinh_thais`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `phan_loai_hoc`
--
ALTER TABLE `phan_loai_hoc`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `phat_hien_loai`
--
ALTER TABLE `phat_hien_loai`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `quan_huyen`
--
ALTER TABLE `quan_huyen`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `sinh_vat_ngoai_lai_xam_hai`
--
ALTER TABLE `sinh_vat_ngoai_lai_xam_hai`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tai_lieu_tham_khao_bo_du_lieu`
--
ALTER TABLE `tai_lieu_tham_khao_bo_du_lieu`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `tang_dan_so_vung_dem`
--
ALTER TABLE `tang_dan_so_vung_dem`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `thong_so_quan_trac`
--
ALTER TABLE `thong_so_quan_trac`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `thong_tin_bo_sung_phan_loai_hoc`
--
ALTER TABLE `thong_tin_bo_sung_phan_loai_hoc`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `thong_tin_luu_tru_nguon_gen`
--
ALTER TABLE `thong_tin_luu_tru_nguon_gen`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tinh_trang_de_doa_theo_danh_luc_iucn`
--
ALTER TABLE `tinh_trang_de_doa_theo_danh_luc_iucn`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tinh_trang_de_doa_theo_nghi_dinh`
--
ALTER TABLE `tinh_trang_de_doa_theo_nghi_dinh`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tinh_trang_de_doa_theo_phu_luc_cong_uoc_cites`
--
ALTER TABLE `tinh_trang_de_doa_theo_phu_luc_cong_uoc_cites`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tinh_trang_de_doa_theo_sach_do_viet_nam`
--
ALTER TABLE `tinh_trang_de_doa_theo_sach_do_viet_nam`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `to_chuc`
--
ALTER TABLE `to_chuc`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `tri_thuc_truyen_thong`
--
ALTER TABLE `tri_thuc_truyen_thong`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tri_thuc_truyen_thong_nguon_gen`
--
ALTER TABLE `tri_thuc_truyen_thong_nguon_gen`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tu_dien`
--
ALTER TABLE `tu_dien`
  MODIFY `id` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `vi_pham_xu_phat_hanh_chinh_va_hinh_su`
--
ALTER TABLE `vi_pham_xu_phat_hanh_chinh_va_hinh_su`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `xa`
--
ALTER TABLE `xa`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `bao_cao_ap_luc_len_ddsh`
--
ALTER TABLE `bao_cao_ap_luc_len_ddsh`
  ADD CONSTRAINT `bao_cao_ap_luc_len_ddsh_thongso_id_foreign` FOREIGN KEY (`thongso_id`) REFERENCES `danh_muc_thong_so` (`id`) ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `bo`
--
ALTER TABLE `bo`
  ADD CONSTRAINT `bo_dongdanh_id_foreign` FOREIGN KEY (`dongdanh_id`) REFERENCES `dong_danh` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `bo_lop_id_foreign` FOREIGN KEY (`lop_id`) REFERENCES `lop` (`id`) ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `bo_du_lieu`
--
ALTER TABLE `bo_du_lieu`
  ADD CONSTRAINT `bo_du_lieu_tochuc_id_foreign` FOREIGN KEY (`tochuc_id`) REFERENCES `to_chuc` (`id`) ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `chi`
--
ALTER TABLE `chi`
  ADD CONSTRAINT `chi_dongdanh_id_foreign` FOREIGN KEY (`dongdanh_id`) REFERENCES `dong_danh` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `chi_ho_id_foreign` FOREIGN KEY (`ho_id`) REFERENCES `ho` (`id`) ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `chuyen_doi_muc_dich_su_dung_dat`
--
ALTER TABLE `chuyen_doi_muc_dich_su_dung_dat`
  ADD CONSTRAINT `chuyen_doi_muc_dich_su_dung_dat_diadiem_id_foreign` FOREIGN KEY (`diadiem_id`) REFERENCES `khu_bao_ton` (`id`) ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `co_so_bao_ton_nguon_gens`
--
ALTER TABLE `co_so_bao_ton_nguon_gens`
  ADD CONSTRAINT `co_so_bao_ton_nguon_gens_diadiem_id_foreign` FOREIGN KEY (`diadiem_id`) REFERENCES `khu_bao_ton` (`id`) ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `danh_muc_thong_so`
--
ALTER TABLE `danh_muc_thong_so`
  ADD CONSTRAINT `danh_muc_thong_so_chithi_id_foreign` FOREIGN KEY (`chithi_id`) REFERENCES `danh_muc_chi_thi` (`id`) ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `def_values`
--
ALTER TABLE `def_values`
  ADD CONSTRAINT `def_values_tudien_id_foreign` FOREIGN KEY (`tudien_id`) REFERENCES `tu_dien` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `dich_vu_he_sinh_thai`
--
ALTER TABLE `dich_vu_he_sinh_thai`
  ADD CONSTRAINT `dich_vu_he_sinh_thai_diadiem_id_foreign` FOREIGN KEY (`diadiem_id`) REFERENCES `khu_bao_ton` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `dich_vu_he_sinh_thai_hesinhthai_id_foreign` FOREIGN KEY (`hesinhthai_id`) REFERENCES `he_sinh_thais` (`id`) ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `diem_quan_trac`
--
ALTER TABLE `diem_quan_trac`
  ADD CONSTRAINT `diem_quan_trac_diadiem_id_foreign` FOREIGN KEY (`diadiem_id`) REFERENCES `khu_bao_ton` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `diem_quan_trac_loaihinhqt_id_foreign` FOREIGN KEY (`loaihinhqt_id`) REFERENCES `loai_hinh_quan_trac` (`id`) ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `dong_danh`
--
ALTER TABLE `dong_danh`
  ADD CONSTRAINT `dong_danh_phanloaihoc_id_foreign` FOREIGN KEY (`phanloaihoc_id`) REFERENCES `phan_loai_hoc` (`id`) ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `duoi_loai`
--
ALTER TABLE `duoi_loai`
  ADD CONSTRAINT `duoi_loai_loai_id_foreign` FOREIGN KEY (`loai_id`) REFERENCES `loai` (`id`) ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `gioi`
--
ALTER TABLE `gioi`
  ADD CONSTRAINT `gioi_dongdanh_id_foreign` FOREIGN KEY (`dongdanh_id`) REFERENCES `dong_danh` (`id`) ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `he_sinh_thais`
--
ALTER TABLE `he_sinh_thais`
  ADD CONSTRAINT `he_sinh_thais_phanloaihesinhthai_id_foreign` FOREIGN KEY (`phanloaihesinhthai_id`) REFERENCES `phan_loai_he_sinh_thais` (`id`) ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `he_sinh_thai_co_trang_cay_bui`
--
ALTER TABLE `he_sinh_thai_co_trang_cay_bui`
  ADD CONSTRAINT `he_sinh_thai_co_trang_cay_bui_hesinhthai_id_foreign` FOREIGN KEY (`hesinhthai_id`) REFERENCES `he_sinh_thais` (`id`) ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `he_sinh_thai_dan_cu_nong_nghiep`
--
ALTER TABLE `he_sinh_thai_dan_cu_nong_nghiep`
  ADD CONSTRAINT `he_sinh_thai_dan_cu_nong_nghiep_hesinhthai_id_foreign` FOREIGN KEY (`hesinhthai_id`) REFERENCES `he_sinh_thais` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `he_sinh_thai_dan_cu_nong_nghiep_huyen_id_foreign` FOREIGN KEY (`huyen_id`) REFERENCES `quan_huyen` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `he_sinh_thai_dan_cu_nong_nghiep_xa_id_foreign` FOREIGN KEY (`xa_id`) REFERENCES `xa` (`id`) ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `he_sinh_thai_dat_ngap_nuoc`
--
ALTER TABLE `he_sinh_thai_dat_ngap_nuoc`
  ADD CONSTRAINT `he_sinh_thai_dat_ngap_nuoc_hesinhthai_id_foreign` FOREIGN KEY (`hesinhthai_id`) REFERENCES `he_sinh_thais` (`id`) ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `he_sinh_thai_rung_tren_can`
--
ALTER TABLE `he_sinh_thai_rung_tren_can`
  ADD CONSTRAINT `he_sinh_thai_rung_tren_can_hesinhthai_id_foreign` FOREIGN KEY (`hesinhthai_id`) REFERENCES `he_sinh_thais` (`id`) ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `hinh_anh_loai`
--
ALTER TABLE `hinh_anh_loai`
  ADD CONSTRAINT `hinh_anh_loai_phanloaihoc_id_foreign` FOREIGN KEY (`phanloaihoc_id`) REFERENCES `phan_loai_hoc` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `hinh_anh_loai_phathienloai_id_foreign` FOREIGN KEY (`phathienloai_id`) REFERENCES `phat_hien_loai` (`id`) ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `ho`
--
ALTER TABLE `ho`
  ADD CONSTRAINT `ho_bo_id_foreign` FOREIGN KEY (`bo_id`) REFERENCES `bo` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `ho_dongdanh_id_foreign` FOREIGN KEY (`dongdanh_id`) REFERENCES `dong_danh` (`id`) ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `hoat_dong_du_lich`
--
ALTER TABLE `hoat_dong_du_lich`
  ADD CONSTRAINT `hoat_dong_du_lich_diadiem_id_foreign` FOREIGN KEY (`diadiem_id`) REFERENCES `khu_bao_ton` (`id`) ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `ket_qua_quan_trac`
--
ALTER TABLE `ket_qua_quan_trac`
  ADD CONSTRAINT `ket_qua_quan_trac_diadiemqt_id_foreign` FOREIGN KEY (`diadiemqt_id`) REFERENCES `diem_quan_trac` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `ket_qua_quan_trac_thongso_id_foreign` FOREIGN KEY (`thongso_id`) REFERENCES `thong_so_quan_trac` (`id`) ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `khai_thac_qua_muc_cho_phep`
--
ALTER TABLE `khai_thac_qua_muc_cho_phep`
  ADD CONSTRAINT `khai_thac_qua_muc_cho_phep_diadiem_id_foreign` FOREIGN KEY (`diadiem_id`) REFERENCES `khu_bao_ton` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `khai_thac_qua_muc_cho_phep_huyen_id_foreign` FOREIGN KEY (`huyen_id`) REFERENCES `quan_huyen` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `khai_thac_qua_muc_cho_phep_xa_id_foreign` FOREIGN KEY (`xa_id`) REFERENCES `xa` (`id`) ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `loai`
--
ALTER TABLE `loai`
  ADD CONSTRAINT `loai_chi_id_foreign` FOREIGN KEY (`chi_id`) REFERENCES `chi` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `loai_dongdanh_id_foreign` FOREIGN KEY (`dongdanh_id`) REFERENCES `dong_danh` (`id`) ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `loai_nguon_gen`
--
ALTER TABLE `loai_nguon_gen`
  ADD CONSTRAINT `loai_nguon_gen_nhomnguongen_id_foreign` FOREIGN KEY (`nhomnguongen_id`) REFERENCES `nhom_nguon_gen` (`id`) ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `lop`
--
ALTER TABLE `lop`
  ADD CONSTRAINT `lop_dongdanh_id_foreign` FOREIGN KEY (`dongdanh_id`) REFERENCES `dong_danh` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `lop_nganh_id_foreign` FOREIGN KEY (`nganh_id`) REFERENCES `nganh` (`id`) ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `mo_hinh_sang_kien`
--
ALTER TABLE `mo_hinh_sang_kien`
  ADD CONSTRAINT `mo_hinh_sang_kien_coquan_id_foreign` FOREIGN KEY (`coquan_id`) REFERENCES `to_chuc` (`id`) ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `nganh`
--
ALTER TABLE `nganh`
  ADD CONSTRAINT `nganh_dongdanh_id_foreign` FOREIGN KEY (`dongdanh_id`) REFERENCES `dong_danh` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `nganh_gioi_id_foreign` FOREIGN KEY (`gioi_id`) REFERENCES `gioi` (`id`) ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `nguon_gen`
--
ALTER TABLE `nguon_gen`
  ADD CONSTRAINT `nguon_gen_loainguongen_id_foreign` FOREIGN KEY (`loainguongen_id`) REFERENCES `loai_nguon_gen` (`id`) ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `o_nhiem_moi_truong_chay_rung_bien_doi_khi_hau`
--
ALTER TABLE `o_nhiem_moi_truong_chay_rung_bien_doi_khi_hau`
  ADD CONSTRAINT `o_nhiem_moi_truong_chay_rung_bien_doi_khi_hau_diadiem_id_foreign` FOREIGN KEY (`diadiem_id`) REFERENCES `khu_bao_ton` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `o_nhiem_moi_truong_chay_rung_bien_doi_khi_hau_huyen_id_foreign` FOREIGN KEY (`huyen_id`) REFERENCES `quan_huyen` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `o_nhiem_moi_truong_chay_rung_bien_doi_khi_hau_xa_id_foreign` FOREIGN KEY (`xa_id`) REFERENCES `xa` (`id`) ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `o_tieu_chuan`
--
ALTER TABLE `o_tieu_chuan`
  ADD CONSTRAINT `o_tieu_chuan_diadiem_id_foreign` FOREIGN KEY (`diadiem_id`) REFERENCES `khu_bao_ton` (`id`) ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `phan_loai_he_sinh_thais`
--
ALTER TABLE `phan_loai_he_sinh_thais`
  ADD CONSTRAINT `phan_loai_he_sinh_thais_thuocloaihesinhthai_foreign` FOREIGN KEY (`thuocloaihesinhthai`) REFERENCES `phan_loai_he_sinh_thais` (`id`) ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `phan_loai_hoc`
--
ALTER TABLE `phan_loai_hoc`
  ADD CONSTRAINT `phan_loai_hoc_bo_id_foreign` FOREIGN KEY (`bo_id`) REFERENCES `bo` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `phan_loai_hoc_bodulieu_id_foreign` FOREIGN KEY (`bodulieu_id`) REFERENCES `bo_du_lieu` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `phan_loai_hoc_chi_id_foreign` FOREIGN KEY (`chi_id`) REFERENCES `chi` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `phan_loai_hoc_duoiloai_id_foreign` FOREIGN KEY (`duoiloai_id`) REFERENCES `duoi_loai` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `phan_loai_hoc_gioi_id_foreign` FOREIGN KEY (`gioi_id`) REFERENCES `gioi` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `phan_loai_hoc_ho_id_foreign` FOREIGN KEY (`ho_id`) REFERENCES `ho` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `phan_loai_hoc_loai_id_foreign` FOREIGN KEY (`loai_id`) REFERENCES `loai` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `phan_loai_hoc_lop_id_foreign` FOREIGN KEY (`lop_id`) REFERENCES `lop` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `phan_loai_hoc_nganh_id_foreign` FOREIGN KEY (`nganh_id`) REFERENCES `nganh` (`id`) ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `phat_hien_loai`
--
ALTER TABLE `phat_hien_loai`
  ADD CONSTRAINT `phat_hien_loai_bodulieu_id_foreign` FOREIGN KEY (`bodulieu_id`) REFERENCES `bo_du_lieu` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `phat_hien_loai_diadiem_id_foreign` FOREIGN KEY (`diadiem_id`) REFERENCES `khu_bao_ton` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `phat_hien_loai_hesinhthai_id_foreign` FOREIGN KEY (`hesinhthai_id`) REFERENCES `he_sinh_thais` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `phat_hien_loai_otieuchuan_id_foreign` FOREIGN KEY (`otieuchuan_id`) REFERENCES `o_tieu_chuan` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `phat_hien_loai_phanloaihoc_id_foreign` FOREIGN KEY (`phanloaihoc_id`) REFERENCES `phan_loai_hoc` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `phat_hien_loai_tochuc_id_foreign` FOREIGN KEY (`tochuc_id`) REFERENCES `to_chuc` (`id`) ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `phat_hien_loai_bo_sung`
--
ALTER TABLE `phat_hien_loai_bo_sung`
  ADD CONSTRAINT `phat_hien_loai_bo_sung_bosung_id_foreign` FOREIGN KEY (`bosung_id`) REFERENCES `phat_hien_loai` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `sinh_vat_ngoai_lai_xam_hai`
--
ALTER TABLE `sinh_vat_ngoai_lai_xam_hai`
  ADD CONSTRAINT `sinh_vat_ngoai_lai_xam_hai_diadiem_id_foreign` FOREIGN KEY (`diadiem_id`) REFERENCES `khu_bao_ton` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `sinh_vat_ngoai_lai_xam_hai_huyen_id_foreign` FOREIGN KEY (`huyen_id`) REFERENCES `quan_huyen` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `sinh_vat_ngoai_lai_xam_hai_phanloaihoc_id_foreign` FOREIGN KEY (`phanloaihoc_id`) REFERENCES `phan_loai_hoc` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `sinh_vat_ngoai_lai_xam_hai_xa_id_foreign` FOREIGN KEY (`xa_id`) REFERENCES `xa` (`id`) ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `tai_lieu_tham_khao_bo_du_lieu`
--
ALTER TABLE `tai_lieu_tham_khao_bo_du_lieu`
  ADD CONSTRAINT `tai_lieu_tham_khao_bo_du_lieu_bodulieu_id_foreign` FOREIGN KEY (`bodulieu_id`) REFERENCES `bo_du_lieu` (`id`) ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `tang_dan_so_vung_dem`
--
ALTER TABLE `tang_dan_so_vung_dem`
  ADD CONSTRAINT `tang_dan_so_vung_dem_diadiem_id_foreign` FOREIGN KEY (`diadiem_id`) REFERENCES `khu_bao_ton` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tang_dan_so_vung_dem_huyen_id_foreign` FOREIGN KEY (`huyen_id`) REFERENCES `quan_huyen` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tang_dan_so_vung_dem_xa_id_foreign` FOREIGN KEY (`xa_id`) REFERENCES `xa` (`id`) ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `thong_tin_bo_sung_phan_loai_hoc`
--
ALTER TABLE `thong_tin_bo_sung_phan_loai_hoc`
  ADD CONSTRAINT `thong_tin_bo_sung_phan_loai_hoc_phanloaihoc_id_foreign` FOREIGN KEY (`phanloaihoc_id`) REFERENCES `phan_loai_hoc` (`id`) ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `thong_tin_luu_tru_nguon_gen`
--
ALTER TABLE `thong_tin_luu_tru_nguon_gen`
  ADD CONSTRAINT `thong_tin_luu_tru_nguon_gen_nguongen_id_foreign` FOREIGN KEY (`nguongen_id`) REFERENCES `nguon_gen` (`id`) ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `tinh_trang_de_doa_theo_danh_luc_iucn`
--
ALTER TABLE `tinh_trang_de_doa_theo_danh_luc_iucn`
  ADD CONSTRAINT `tinh_trang_de_doa_theo_danh_luc_iucn_phanloaihoc_id_foreign` FOREIGN KEY (`phanloaihoc_id`) REFERENCES `phan_loai_hoc` (`id`) ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `tinh_trang_de_doa_theo_nghi_dinh`
--
ALTER TABLE `tinh_trang_de_doa_theo_nghi_dinh`
  ADD CONSTRAINT `dedoatheonghidinh_phanloaihoc_id_foreign` FOREIGN KEY (`phanloaihoc_id`) REFERENCES `phan_loai_hoc` (`id`) ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `tinh_trang_de_doa_theo_phu_luc_cong_uoc_cites`
--
ALTER TABLE `tinh_trang_de_doa_theo_phu_luc_cong_uoc_cites`
  ADD CONSTRAINT `conguoc_cites_phanloaihoc_id_foreign` FOREIGN KEY (`phanloaihoc_id`) REFERENCES `phan_loai_hoc` (`id`) ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `tinh_trang_de_doa_theo_sach_do_viet_nam`
--
ALTER TABLE `tinh_trang_de_doa_theo_sach_do_viet_nam`
  ADD CONSTRAINT `sach_do_vn_phanloaihoc_id_foreign` FOREIGN KEY (`phanloaihoc_id`) REFERENCES `phan_loai_hoc` (`id`) ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `tri_thuc_truyen_thong`
--
ALTER TABLE `tri_thuc_truyen_thong`
  ADD CONSTRAINT `tri_thuc_truyen_thong_noiluugiu_id_foreign` FOREIGN KEY (`noiluugiu_id`) REFERENCES `thong_tin_luu_tru_nguon_gen` (`id`) ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `tri_thuc_truyen_thong_nguon_gen`
--
ALTER TABLE `tri_thuc_truyen_thong_nguon_gen`
  ADD CONSTRAINT `tri_thuc_truyen_thong_nguon_gen_nguongen_id_foreign` FOREIGN KEY (`nguongen_id`) REFERENCES `nguon_gen` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tri_thuc_truyen_thong_nguon_gen_trithuctruyenthong_id_foreign` FOREIGN KEY (`trithuctruyenthong_id`) REFERENCES `tri_thuc_truyen_thong` (`id`) ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `vi_pham_xu_phat_hanh_chinh_va_hinh_su`
--
ALTER TABLE `vi_pham_xu_phat_hanh_chinh_va_hinh_su`
  ADD CONSTRAINT `vi_pham_xu_phat_hanh_chinh_va_hinh_su_huyen_id_foreign` FOREIGN KEY (`huyen_id`) REFERENCES `quan_huyen` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `vi_pham_xu_phat_hanh_chinh_va_hinh_su_xa_id_foreign` FOREIGN KEY (`xa_id`) REFERENCES `xa` (`id`) ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `xa`
--
ALTER TABLE `xa`
  ADD CONSTRAINT `xa_huyen_id_foreign` FOREIGN KEY (`huyen_id`) REFERENCES `quan_huyen` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
