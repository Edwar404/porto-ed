-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 30, 2024 at 01:48 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portofolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `general_setting`
--

CREATE TABLE `general_setting` (
  `id` int(11) NOT NULL,
  `website_name` varchar(50) NOT NULL,
  `website_link` varchar(50) NOT NULL,
  `website_phone` varchar(16) NOT NULL,
  `website_email` varchar(50) NOT NULL,
  `website_addres` text NOT NULL,
  `fb_link` varchar(100) NOT NULL,
  `ig_link` varchar(100) NOT NULL,
  `linkedin_link` varchar(100) NOT NULL,
  `yt_link` varchar(100) NOT NULL,
  `logo` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `interest`
--

CREATE TABLE `interest` (
  `id` int(11) NOT NULL,
  `nama_interest` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `interest`
--

INSERT INTO `interest` (`id`, `nama_interest`, `created_at`, `updated_at`) VALUES
(2, 'PHP', '2024-10-30 07:16:46', '2024-10-30 07:16:46'),
(3, 'Java Script', '2024-10-30 07:16:53', '2024-10-30 07:16:53'),
(4, 'Web Development', '2024-10-30 07:17:02', '2024-10-30 07:17:02'),
(5, 'Full Stack Development', '2024-10-30 07:17:17', '2024-10-30 07:17:17'),
(6, 'Front-End Development', '2024-10-30 07:17:36', '2024-10-30 07:17:36'),
(7, 'Back-End Development', '2024-10-30 07:17:54', '2024-10-30 07:17:54'),
(8, 'PostgreSQL', '2024-10-30 07:18:55', '2024-10-30 07:18:55'),
(9, 'Python', '2024-10-30 07:53:33', '2024-10-30 07:53:33'),
(10, 'tes', '2024-10-30 07:55:47', '2024-10-30 07:55:47');

-- --------------------------------------------------------

--
-- Table structure for table `logo`
--

CREATE TABLE `logo` (
  `id` int(11) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `logo`
--

INSERT INTO `logo` (`id`, `foto`, `created_at`, `updated_at`) VALUES
(1, 'akatsuki.jpg', '2024-10-30 09:41:26', '2024-10-30 09:41:26');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `id` int(11) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`id`, `keterangan`, `foto`, `updated_at`, `created_at`) VALUES
(2, 'Website yang Kami kembangkan untuk sektor pertamba', 'contoh-website-company-profile.jpg', '2024-10-29 09:40:03', '2024-10-30 08:55:57'),
(4, 'Website yang kami kembangan untuk sektor perbankan', 'web-perusahaan.png', '2024-10-30 08:55:18', '2024-10-30 08:55:18'),
(7, 'Website yang kami kembangkan untuk sektor pertamba', 'web-perusahaan.png', '2024-10-30 08:59:53', '2024-10-30 08:59:53'),
(8, 'Website yang kami kembangkan untuk sektor pertamba', 'contoh-website-company-profile.jpg', '2024-10-30 09:00:06', '2024-10-30 12:38:51');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` int(11) NOT NULL,
  `nama_skill` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `nama_skill`, `created_at`, `update_at`) VALUES
(1, 'Front-End Development', '2024-10-29 12:13:28', '2024-10-29 12:13:28'),
(2, 'Back-End Development', '2024-10-30 11:54:23', '2024-10-30 11:54:23'),
(3, 'Full Stack Development', '2024-10-30 11:54:44', '2024-10-30 11:54:44'),
(4, 'Android Development', '2024-10-30 11:58:10', '2024-10-30 11:58:10'),
(6, 'Cyber Security', '2024-10-30 12:30:16', '2024-10-30 12:30:16');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `password`, `foto`, `created_at`, `updated_at`) VALUES
(1, 'edwar', 'edwar@gmail.com', '12345678', 'hajime.jpg', '2024-10-28 15:32:26', '2024-10-29 07:22:24'),
(3, 'ibrahim', 'ibrahim@gmail.com', '12345678', 'gogeta.jpg', '2024-10-29 07:13:00', '2024-10-29 07:50:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `general_setting`
--
ALTER TABLE `general_setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `interest`
--
ALTER TABLE `interest`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logo`
--
ALTER TABLE `logo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `general_setting`
--
ALTER TABLE `general_setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `interest`
--
ALTER TABLE `interest`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `logo`
--
ALTER TABLE `logo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
