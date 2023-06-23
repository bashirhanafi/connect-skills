-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2023 at 04:14 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `connectskill`
--

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id` int(50) NOT NULL,
  `company` varchar(50) NOT NULL,
  `photo` varchar(50) NOT NULL,
  `course_name` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `instructor` varchar(100) NOT NULL,
  `price` int(50) NOT NULL,
  `total_clicked` int(100) NOT NULL,
  `user_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `company`, `photo`, `course_name`, `category`, `description`, `instructor`, `price`, `total_clicked`, `user_id`) VALUES
(40629, 'GoTo', 'download.png', 'Introduction to GoTo Company', 'Development', 'lorem', 'Nida Muallimah, Rini Hafizah', 199000, 1, 46),
(40810, 'microsoft', 'ms-copilot-hero-800x489.jpeg', 'Introduction to Microsoft Copilot 2023', 'IT & Software', 'Microsoft Copilot is an innovative software tool designed to assist developers in writing code more efficiently and effectively. Powered by artificial intelligence and machine learning, Copilot serves as a coding companion that offers intelligent code suggestions and auto-completion capabilities, making the development process faster and more intuitive.\r\n\r\nWith Copilot, developers can experience a significant boost in productivity. The tool analyzes vast amounts of publicly available code and learns from the collective knowledge of the coding community to provide real-time suggestions and snippets while coding. It understands the context of the code being written and generates relevant code snippets, eliminating the need for developers to start from scratch or spend excessive time searching for code examples.', 'Selena Gomez, Indra', 299000, 1, 32),
(43474, 'meta', 'facebook-ads-2.png', 'Optimize your Market with Facebook Ads', 'Marketing', 'Supercharge your digital marketing efforts with Facebook Ads! Reach your target audience, drive website traffic, and increase brand visibility.', 'Ozzo Zulfigers', 399000, 1, 33),
(44047, 'microsoft', 'excel.png', 'Introduction to Microsoft Excel', 'Finance & Accounting', 'microsoft excel', 'Tomi Edward', 299000, 1, 32),
(44111, 'meta', 'download.jpeg', 'Introduction to React Developer 2023', 'IT & Software', 'Introducing React.js Developer 2023: Unleash your coding skills and embark on an exciting journey into the world of React.js. Dive into the fundamentals of this powerful JavaScript library.', 'Tomi Edward', 599000, 4, 33),
(48729, 'skillsup', 'public-speaker.jpg', 'Build Your Confident Public Speaking', 'Development', 'Never gonna late to up your skill with public speaking in this era.', 'Selena Moaizer', 199000, 7, 34);

-- --------------------------------------------------------

--
-- Table structure for table `detail_transaction`
--

CREATE TABLE `detail_transaction` (
  `id_transaction` int(100) NOT NULL,
  `id_header_transaction` varchar(100) NOT NULL,
  `course_id` int(50) NOT NULL,
  `customer` varchar(100) NOT NULL,
  `company` varchar(100) NOT NULL,
  `quantity` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `detail_transaction`
--

INSERT INTO `detail_transaction` (`id_transaction`, `id_header_transaction`, `course_id`, `customer`, `company`, `quantity`) VALUES
(59, '#96b8ab', 40810, 'alifonej', 'Microsoft Corporation', 1),
(60, '#cc1844', 40810, 'fardib', 'Microsoft Corporation', 1),
(61, '#bd7543', 40810, 'bashirhanafi', 'Microsoft Corporation', 1),
(62, '#b2bf75', 44111, 'bashirhanafi', 'Meta Corporation', 1),
(63, '#c15eac', 43474, 'shahnazpaxia', 'Meta Corporation', 1),
(64, '#26bc48', 40810, 'shahnazpaxia', 'Microsoft Corporation', 1),
(65, '#40dc5b', 44111, 'Agustina', 'Meta Corporation', 1),
(66, '#40dc5b', 40810, 'Agustina', 'Microsoft Corporation', 1),
(67, '#38fb0c', 40629, 'Agustina', 'Gojek-Tokopedia', 1),
(68, '#38fb0c', 48729, 'aqil', 'Skills Up', 1),
(69, '#310782', 44047, 'aqil', 'Microsoft Corporation', 1);

-- --------------------------------------------------------

--
-- Table structure for table `header_transaction`
--

CREATE TABLE `header_transaction` (
  `id_header_transaction` varchar(100) NOT NULL,
  `date` varchar(50) NOT NULL,
  `time` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `header_transaction`
--

INSERT INTO `header_transaction` (`id_header_transaction`, `date`, `time`) VALUES
('#02cb7f', '2023/06/05', '18:22:15'),
('#0e95ca', '2023/06/05', '16:53:55'),
('#1a739a', '2023/06/06', '08:56:26'),
('#1d0982', '2023/06/05', '13:19:54'),
('#1d450a', '2023/06/05', '18:01:14'),
('#1eea6a', '2023/06/05', '18:12:21'),
('#26bc48', '2023/06/12', '22:44:18'),
('#272638', '2023/06/05', '19:51:22'),
('#310782', '2023/06/13', '08:50:29'),
('#326992', '2023/06/06', '08:25:50'),
('#358c9d', '2023/06/06', '09:13:53'),
('#360ef9', '2023/06/06', '08:22:51'),
('#38fb0c', '2023/06/13', '08:48:08'),
('#3e90a8', '2023/06/05', '18:04:08'),
('#3f6feb', '2023/06/04', '19:51:22'),
('#40dc5b', '2023/06/13', '08:12:16'),
('#5391b8', '2023/06/06', '08:25:05'),
('#542f7b', '2023/06/06', '11:29:24'),
('#597095', '2023/06/06', '16:28:33'),
('#6d5a6c', '2023/06/05', '17:01:04'),
('#787ead', '2023/06/05', '18:21:56'),
('#822fe3', '2023/06/05', '17:23:51'),
('#88d841', '2023/06/06', '16:51:27'),
('#8c3d47', '2023/06/06', '12:02:56'),
('#96b8ab', '2023/06/06', '16:53:03'),
('#9ba743', '2023/06/06', '08:32:37'),
('#b2bf75', '2023/06/12', '20:25:44'),
('#b77184', '2023/06/05', '17:26:04'),
('#b8e76c', '2023/06/05', '18:38:48'),
('#bd7543', '2023/06/12', '19:05:23'),
('#c0b319', '2023/06/05', '16:28:23'),
('#c15eac', '2023/06/12', '22:22:50'),
('#cc0b29', '2023/06/04', '01:46:12'),
('#cc1844', '2023/06/12', '19:04:04'),
('#cc70f3', '2023/06/06', '08:41:36'),
('#ce58bb', '2023/06/05', '18:07:10'),
('#ce7c0d', '2023/06/05', '18:03:21'),
('#d0a1a6', '2023/06/06', '11:47:13'),
('#d52102', '2023/06/05', '17:30:39'),
('#d9d9e7', '2023/06/05', '18:09:49'),
('#ddccc9', '2023/06/06', '11:32:12'),
('#dfb4cd', '2023/06/05', '18:07:40'),
('#e12e3b', '2023/06/06', '11:35:26'),
('#e71fa1', '2023/06/05', '18:15:49'),
('#ef8e9b', '2023/06/06', '08:35:07'),
('#f20605', '2023/06/06', '08:54:34'),
('#f7fd9e', '2023/06/06', '08:33:17'),
('#f9bec6', '2023/06/05', '17:00:08'),
('#fd7eb9', '2023/06/06', '12:00:51');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(100) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` varchar(10) NOT NULL,
  `saldo` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fullname`, `username`, `email`, `password`, `role`, `saldo`) VALUES
(28, 'Muhammad Bashir Hanafi', 'bashirhanafi', 'bashirhanafii02220@gmail.com', '7c4a8f71cf7930cf4ff368e6b98b3594a96a50f8', 'user', 102000),
(32, 'Microsoft Corporation', 'microsoft', 'microsoft@outlook.com', '7c4a8f71cf7930cf4ff368e6b98b3594a96a50f8', 'company', 1794000),
(33, 'Meta Corporation', 'meta', 'meta@gmail.com', '7c4a8f71cf7930cf4ff368e6b98b3594a96a50f8', 'company', 1597000),
(34, 'Skills Up', 'skillsup', 'skillsup@gmail.com', '7c4a8f71cf7930cf4ff368e6b98b3594a96a50f8', 'company', 1000000),
(35, 'Nida Muallimah', 'nidamuallimah', 'nidamuallimah@gmail.com', '7c4a8f71cf7930cf4ff368e6b98b3594a96a50f8', 'user', 302000),
(37, 'Tasyalia Fajrina', 'tasyaliaf', 'tasyaliafajrina22@gmail.com', '7c4a8f71cf7930cf4ff368e6b98b3594a96a50f8', 'user', 501000),
(40, 'Alifone Jabbar', 'alifonej', 'alifonejabbar@gmail.com', '7c4a8f71cf7930cf4ff368e6b98b3594a96a50f8', 'user', 701000),
(43, 'Farah Diba', 'fardib', 'fardib00@gmail.com', '7c4a8f71cf7930cf4ff368e6b98b3594a96a50f8', 'user', 701000),
(44, 'Shahnaz Paxia', 'shahnazpaxia', 'paxia21@gmail.com', '7c4a8f71cf7930cf4ff368e6b98b3594a96a50f8', 'user', 302000),
(45, 'Winda', 'Agustina', 'winda@gmail.com', 'f5dcb567d7341e9f0df30d0964c5bec6a5373175', 'user', 102000),
(46, 'Gojek-Tokopedia', 'GoTo', 'goto123@gmail.com', '7c4a8f71cf7930cf4ff368e6b98b3594a96a50f8', 'company', 0),
(47, 'Muhammad Aqil', 'aqil', 'aqil21@gmail.com', '7c4a8f71cf7930cf4ff368e6b98b3594a96a50f8', 'user', 303000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `company_name` (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `detail_transaction`
--
ALTER TABLE `detail_transaction`
  ADD PRIMARY KEY (`id_transaction`),
  ADD KEY `customer_id` (`customer`),
  ADD KEY `detail_transaction_ibfk_3` (`id_header_transaction`),
  ADD KEY `detail_transaction_ibfk_2` (`course_id`);

--
-- Indexes for table `header_transaction`
--
ALTER TABLE `header_transaction`
  ADD PRIMARY KEY (`id_header_transaction`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`,`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail_transaction`
--
ALTER TABLE `detail_transaction`
  MODIFY `id_transaction` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `course`
--
ALTER TABLE `course`
  ADD CONSTRAINT `course_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `detail_transaction`
--
ALTER TABLE `detail_transaction`
  ADD CONSTRAINT `detail_transaction_ibfk_2` FOREIGN KEY (`course_id`) REFERENCES `course` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detail_transaction_ibfk_3` FOREIGN KEY (`id_header_transaction`) REFERENCES `header_transaction` (`id_header_transaction`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
