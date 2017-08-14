-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 12, 2017 at 02:50 PM
-- Server version: 5.7.19-0ubuntu0.16.04.1
-- PHP Version: 7.0.18-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `namnhcv`
--

-- --------------------------------------------------------

--
-- Table structure for table `education_experiences`
--

CREATE TABLE `education_experiences` (
  `id` int(10) UNSIGNED NOT NULL,
  `start` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `end` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `certificate` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `school` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `education_experiences`
--

INSERT INTO `education_experiences` (`id`, `start`, `end`, `certificate`, `school`, `position`, `created_at`, `updated_at`) VALUES
(1, '01/2016', '09/2018', 'Bachelor of Technology Degree - <i>Studying</i>', 'Duy Tan University', 0, '2017-08-10 20:52:20', '2017-08-10 20:52:20'),
(2, '11/2016', '06/2017', 'PHP & MYSQL', 'Softech Aptech International Training Center', 1, '2017-08-10 20:54:17', '2017-08-10 20:54:17'),
(3, '10/2016', NULL, 'Sales A to Z', 'Viet Nam Price Joint Stock Company', 0, '2017-08-10 20:58:51', '2017-08-10 20:58:51'),
(4, '08/2011', '08/2015', 'Bachelor of Business Administration Degree', 'Da Nang University Of Economics', 1, '2017-08-10 21:00:17', '2017-08-10 21:00:17'),
(5, '2013', NULL, 'Technician Of Economics', 'Da Nang City Department of Education and Training', 0, '2017-08-10 21:11:34', '2017-08-10 21:11:34'),
(6, '2011', NULL, 'Computer Installation and Repair Certificate', 'Da Nang City Department of Education and Training', 1, '2017-08-10 21:12:41', '2017-08-10 21:12:41');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_08_09_212544_create_resumes_table', 2),
(4, '2017_08_10_224756_create_work_experiences_table', 3),
(5, '2017_08_11_024014_create_education_experiences_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `resumes`
--

CREATE TABLE `resumes` (
  `id` int(10) UNSIGNED NOT NULL,
  `mime` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `original_file_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `resumes`
--

INSERT INTO `resumes` (`id`, `mime`, `original_file_name`, `created_at`, `updated_at`) VALUES
(1, 'application/pdf', 'NAM_NGUYENHAI_CV.pdf', '2017-08-09 19:45:48', '2017-08-09 19:45:48'),
(2, 'application/pdf', 'PHP_NAM_NH_FRAMGIA_CV.pdf', '2017-08-10 05:14:54', '2017-08-10 05:14:54'),
(3, 'application/pdf', 'CV_NAMNH_ENG_VN.pdf', '2017-08-11 19:12:05', '2017-08-11 19:12:05');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Nam Nguyen Hai', 'namnh.website@gmail.com', '$2y$10$EwFRWwLnkgrmrO2Zd9yWXuH8JZgeSmkFUb0HrTWKSNmeOfhRSN5vu', NULL, '2017-08-09 19:45:06', '2017-08-09 19:45:06');

-- --------------------------------------------------------

--
-- Table structure for table `work_experiences`
--

CREATE TABLE `work_experiences` (
  `id` int(10) UNSIGNED NOT NULL,
  `start` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `end` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `reference` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `work_experiences`
--

INSERT INTO `work_experiences` (`id`, `start`, `end`, `company`, `job_title`, `description`, `reference`, `phone`, `position`, `created_at`, `updated_at`) VALUES
(1, '05/2016', '08/2017', 'Nhan Hoa Software Company Limited', 'Head Of Representative Office', '- Phát triển thị trường Đà Nẵng tất cả dịch vụ : Domain, Website, VPS, Server, Reseller, Website.<br>\n- Tuyển dụng, đào tạo đội ngũ nhân viên.<br>\n- Chịu trách nhiệm chung về hoạt động kinh doanh tại VP Đại Diện Đà Nẵng.<br>\n- Trực tiếp cài đặt, thiết kế Website.<br>', 'Mr Nguyễn Văn Hoàn', '0985 566 672', 0, '2017-08-10 17:44:36', '2017-08-10 17:44:36'),
(2, '03/2016', '05/2016', 'VNG Corporation', 'Team Leader', '- Tìm kiếm, khảo sát, lên kế hoạch cho Dự án Khảo Sát Thị Trường OTT 2016 tại Đà Nẵng.<br>\r\n- Tuyển dụng, điều phối, hướng dẫn, đào tạo kỹ năng cho CTV.<br>\r\n- Lên kế hoạch nhân sự, công việc, chịu trách nhiệm cao nhất cho nhóm làm việc.<br>', 'Mr Nguyễn Tiến Hữu', '0902 718 450', 1, '2017-08-10 17:46:08', '2017-08-10 17:46:08'),
(3, '12/2015', '02/2016', 'Autogrill VFS F&B Company', 'Food Service Crew', '- Bartender quầy đồ uống.<br>\r\n- Hướng dẫn, giới thiệu thực phẩm và đồ uống đến cho khách hàng.<br>\r\n- Kiểm kê hàng hóa, hỗ trợ khu vực kho, văn phòng.<br>', 'Mrs Nguyễn Thị Thu Thủy', '0905 650 815', 0, '2017-08-10 17:49:45', '2017-08-10 17:49:45'),
(4, '07/2015', '10/2015', 'Bien Binh Joint Stock Company', 'Content Leader', '- Lên kế hoạch, quản lý nội dung, hình ảnh, sự kiện trên Fanpage.<br>\r\n- Đưa ra ý tưởng, duyệt nội dung, hình ảnh từ bộ phận thiết kế.<br>\r\n- Lập báo cáo, thống kê, cung cấp đầy đủ số liệu thực tế về Fanpage.<br>', 'Mr Phan Thanh Bình', '0988 551 345', 1, '2017-08-10 17:55:18', '2017-08-10 17:55:18'),
(5, '04/2015', '05/2012', 'VNG Corporation', 'Forum Moderator', '- Quản lý, duyệt, chỉnh sửa, chấp thuận nội dung từ người dùng.<br>\r\n- Lên kế hoạch công việc, viết bài hướng dẫn, chia sẻ, tạo chủ đề thảo luận.<br>', 'Mr Nguyễn Hữu Trí', '0961 964 018', 0, '2017-08-10 18:01:36', '2017-08-10 18:01:36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `education_experiences`
--
ALTER TABLE `education_experiences`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `resumes`
--
ALTER TABLE `resumes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `work_experiences`
--
ALTER TABLE `work_experiences`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `education_experiences`
--
ALTER TABLE `education_experiences`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `resumes`
--
ALTER TABLE `resumes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `work_experiences`
--
ALTER TABLE `work_experiences`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
