-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2025 at 01:09 PM
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
-- Database: `ecommerce_data`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_logs`
--

CREATE TABLE `admin_logs` (
  `id` int(11) NOT NULL,
  `admin_id` int(11) NOT NULL,
  `action` text NOT NULL,
  `ip_address` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_logs`
--

INSERT INTO `admin_logs` (`id`, `admin_id`, `action`, `ip_address`, `created_at`) VALUES
(1, 1, 'phone number', 1, '2025-04-30 18:10:46'),
(2, 4, 'Create product ID : 12', 4, '2025-05-09 18:20:48'),
(3, 4, 'Create product ID : 1', 127, '2025-05-09 18:27:33'),
(4, 2, 'Edit product ID : 0', 127, '2025-05-09 18:38:27'),
(5, 1, 'Edit product ID : 1', 127, '2025-05-09 18:39:46'),
(6, 1, 'Delete product ID : ', 127, '2025-05-09 18:43:41'),
(7, 1, 'Delete product ID : ', 127, '2025-05-09 18:43:48'),
(8, 1, 'Delete product ID : ', 127, '2025-05-09 18:44:05'),
(9, 18, 'Delete product ID : ', 127, '2025-05-09 18:44:54'),
(10, 1, 'Delete product ID : ', 127, '2025-05-09 18:46:32'),
(11, 1, 'Delete product ID : ', 127, '2025-05-09 18:46:38'),
(12, 1, 'Delete product ID : ', 127, '2025-05-09 18:47:10'),
(13, 1, 'Delete product ID : ', 127, '2025-05-09 18:47:28'),
(14, 1, 'Delete product ID : ', 127, '2025-05-09 18:47:56'),
(15, 1, 'Delete product ID : ', 127, '2025-05-09 18:48:41'),
(16, 1, 'Delete product ID : ', 127, '2025-05-09 18:50:22'),
(17, 1, 'Delete product ID : ', 127, '2025-05-09 18:51:21'),
(18, 1, 'Delete product ID : ', 127, '2025-05-09 18:52:07'),
(19, 1, 'Delete product ID : ', 127, '2025-05-09 18:53:01'),
(20, 1, 'Delete product ID : ', 127, '2025-05-09 18:53:56'),
(21, 1, 'Delete product ID : ', 127, '2025-05-09 18:54:04'),
(22, 1, 'Delete product ID : ', 127, '2025-05-09 18:55:16'),
(23, 1, 'Delete product ID : ', 127, '2025-05-09 18:58:12'),
(24, 4, 'Create product ID : 2', 127, '2025-05-09 19:00:04'),
(25, 2, 'Delete product ID : ', 127, '2025-05-09 19:00:08'),
(26, 2, 'Delete product ID : ', 127, '2025-05-09 19:04:16'),
(27, 1, 'Delete product ID : ', 127, '2025-05-09 19:04:21'),
(28, 1, 'Delete product ID : ', 127, '2025-05-09 19:05:18'),
(29, 2, 'Delete product ID : ', 127, '2025-05-09 19:05:44'),
(30, 1, 'Delete product ID : ', 127, '2025-05-09 19:06:32'),
(31, 19, 'Create brand ID : 19', 127, '2025-05-09 19:09:36'),
(32, 20, 'Create brand ID : 20', 127, '2025-05-09 19:10:46'),
(33, 4, 'Edit brand ID : 19', 127, '2025-05-09 19:21:29'),
(34, 4, 'Delete product ID : ', 127, '2025-05-09 19:25:53'),
(35, 4, 'Delete product ID : 20', 127, '2025-05-09 19:26:39'),
(36, 4, 'Create brand ID : 21', 127, '2025-05-09 19:29:27'),
(37, 4, 'Create category ID : 27', 127, '2025-05-09 19:30:15'),
(38, 4, 'Edit Category ID : 27', 127, '2025-05-09 19:32:35'),
(39, 4, 'Create category ID : 28', 127, '2025-05-09 19:41:26'),
(40, 4, 'Delete Category ID : 28', NULL, '2025-05-09 19:41:39'),
(41, 4, 'Create category ID : 29', 127, '2025-05-09 19:44:17'),
(42, 4, 'Delete Category ID : 29', NULL, '2025-05-09 19:44:24'),
(43, 4, 'Create category ID : 30', 127, '2025-05-09 19:45:25'),
(44, 4, 'Delete Category ID : 30', NULL, '2025-05-09 19:45:30'),
(45, 4, 'Create category ID : 31', 127, '2025-05-09 19:46:13'),
(46, 4, 'Delete Category ID : 31', NULL, '2025-05-09 19:46:17'),
(47, 4, 'Create category ID : 32', 127, '2025-05-09 19:47:30'),
(48, 4, 'Delete Category ID : 32', NULL, '2025-05-09 19:47:33'),
(49, 4, 'Create category ID : 33', 127, '2025-05-09 19:54:30'),
(50, 4, 'Delete Category ID : 33', NULL, '2025-05-09 19:54:36'),
(51, 4, 'Create category ID : 34', 127, '2025-05-09 19:56:28'),
(52, 4, 'Delete Category ID : 34', NULL, '2025-05-09 19:56:33'),
(53, 4, 'Update information Admin ID : 4', 127, '2025-05-09 20:00:29'),
(54, 4, 'Create Admin ID : 5', 127, '2025-05-09 20:11:41'),
(55, 4, 'Create Admin ID : 6', 0, '2025-05-09 20:45:24'),
(56, 4, 'Create category ID : 35', 0, '2025-05-09 20:47:03'),
(57, 4, 'Delete Category ID : 35', NULL, '2025-05-09 20:47:12'),
(58, 4, 'Create category ID : 36', 0, '2025-05-09 20:52:23'),
(59, 4, 'Delete Category ID : 36', NULL, '2025-05-09 20:52:32'),
(60, 4, 'Create category ID : 37', 0, '2025-05-09 20:56:34'),
(61, 4, 'Delete Category ID : 37', NULL, '2025-05-09 21:01:56'),
(62, 4, 'Create category ID : 38', 0, '2025-05-09 21:03:03'),
(63, 4, 'Delete Category ID : 38', 0, '2025-05-09 21:12:28'),
(64, 4, 'Update information web', 0, '2025-05-10 08:09:00'),
(65, 4, 'Update information web', 0, '2025-05-10 08:09:55'),
(66, 4, 'Update information web', 0, '2025-05-10 08:10:14'),
(67, 4, 'Update information web', 0, '2025-05-10 08:12:46'),
(68, 4, 'Update information web', 0, '2025-05-10 08:13:14'),
(69, 4, 'Update information web', 0, '2025-05-10 08:16:06'),
(70, 4, 'Update information web', 0, '2025-05-10 08:16:07'),
(71, 4, 'Update information web', 0, '2025-05-10 08:16:19'),
(72, 4, 'Update information web', 0, '2025-05-10 08:16:35'),
(73, 4, 'Update information web', 0, '2025-05-10 08:17:20'),
(74, 4, 'Update information web', 0, '2025-05-10 08:17:30'),
(75, 4, 'Update information web', 0, '2025-05-10 08:19:07'),
(76, 4, 'Update information web', 0, '2025-05-10 08:19:21'),
(77, 4, 'Update information web', 0, '2025-05-10 08:21:39'),
(78, 4, 'Update information web', 0, '2025-05-10 08:21:41'),
(79, 4, 'Update information web', 0, '2025-05-10 08:21:42'),
(80, 4, 'Update information web', 0, '2025-05-10 08:21:55'),
(81, 4, 'Update information web', 0, '2025-05-10 08:21:58'),
(82, 4, 'Update information web', 127, '2025-05-10 08:22:54'),
(83, 4, 'Update information web', 127, '2025-05-10 08:23:03'),
(84, 4, 'Update information web', 127, '2025-05-10 08:24:50'),
(85, 4, 'Update information web', 127, '2025-05-10 08:25:02'),
(86, 4, 'Update information web', 127, '2025-05-10 08:27:05'),
(87, 4, 'Update information web', 127, '2025-05-10 08:27:39'),
(88, 4, 'Update information web', 127, '2025-05-10 08:30:53'),
(89, 4, 'Update information web', 127, '2025-05-10 08:30:56'),
(90, 4, 'Update information web', 0, '2025-05-10 08:33:28'),
(91, 4, 'Update information web', 0, '2025-05-10 08:33:52'),
(92, 4, 'Update information web', 0, '2025-05-10 08:37:43'),
(93, 4, 'Update information web', 0, '2025-05-10 08:38:00'),
(94, 4, 'Update information web', 0, '2025-05-10 08:38:09'),
(95, 4, 'Update information web', 0, '2025-05-10 08:38:30'),
(96, 4, 'Update information web', 0, '2025-05-10 08:44:27'),
(97, 4, 'Update information web', 0, '2025-05-10 08:45:42'),
(98, 4, 'Update information web', 0, '2025-05-10 08:46:03'),
(99, 4, 'Update information web', 0, '2025-05-10 08:48:20'),
(100, 4, 'Update information web', 0, '2025-05-10 08:48:29'),
(101, 4, 'Update information web', 0, '2025-05-10 08:48:36'),
(102, 4, 'Update information web', 0, '2025-05-10 08:48:51'),
(103, 4, 'Update information web', 0, '2025-05-10 08:49:03'),
(104, 4, 'Update information web', 0, '2025-05-10 08:49:10'),
(105, 4, 'Update information web', 0, '2025-05-10 08:57:20'),
(106, 4, 'Update information web', 0, '2025-05-10 09:02:26'),
(107, 4, 'Update information web', 0, '2025-05-10 09:06:10'),
(108, 4, 'Update information web', 0, '2025-05-10 09:06:13'),
(109, 4, 'Update information web', 0, '2025-05-10 09:19:41'),
(110, 4, 'Update information web', 0, '2025-05-10 11:00:02'),
(111, 4, 'Update information web', 0, '2025-05-10 11:00:12'),
(112, 4, 'Update information web', 0, '2025-05-10 11:02:38'),
(113, 4, 'Update information web', 127, '2025-05-10 11:08:44'),
(114, 4, 'Update information web', 0, '2025-05-10 11:09:23'),
(115, 4, 'Update information web', 127, '2025-05-10 11:10:23'),
(116, 4, 'Update information web', 127, '2025-05-10 11:12:20'),
(117, 4, 'Update information web', 127, '2025-05-10 11:13:08'),
(118, 4, 'Update information web', 127, '2025-05-10 11:14:57'),
(119, 4, 'Update information web', 127, '2025-05-10 11:21:13'),
(120, 4, 'Update information web', 127, '2025-05-10 11:21:17'),
(121, 4, 'Update information web', 127, '2025-05-10 11:21:31'),
(122, 4, 'Update information web', 127, '2025-05-10 11:22:27'),
(123, 4, 'Update information web', 127, '2025-05-10 11:22:44'),
(124, 4, 'Update information web', 127, '2025-05-10 11:25:34'),
(125, 4, 'Update information web', 127, '2025-05-10 11:27:14'),
(126, 4, 'Update information web', 127, '2025-05-10 11:27:32'),
(127, 4, 'Update information web', 127, '2025-05-10 11:29:25'),
(128, 4, 'Update information web', 127, '2025-05-10 11:38:44'),
(129, 4, 'Update information web', 127, '2025-05-10 11:40:14'),
(130, 4, 'Update information web', 127, '2025-05-10 11:57:24'),
(131, 4, 'Update information web', 127, '2025-05-10 11:57:27'),
(132, 4, 'Update information web', 127, '2025-05-10 11:57:51'),
(133, 4, 'Update information web', 127, '2025-05-10 11:57:59'),
(134, 4, 'Update information web', 127, '2025-05-10 11:58:02'),
(135, 4, 'Update information web', 127, '2025-05-10 11:58:35'),
(136, 4, 'Update information web', 127, '2025-05-10 11:59:07'),
(137, 4, 'Update information web', 127, '2025-05-10 12:02:32'),
(138, 4, 'Update information web', 127, '2025-05-10 12:05:47'),
(139, 4, 'Update information web', 127, '2025-05-10 12:05:50'),
(140, 4, 'Update information web', 127, '2025-05-10 12:06:01'),
(141, 4, 'Update information web', 127, '2025-05-10 12:06:46'),
(142, 4, 'Update information web', 127, '2025-05-10 12:11:13'),
(143, 4, 'Update information web', 127, '2025-05-10 12:15:20'),
(144, 4, 'Update information web', 127, '2025-05-10 12:15:26'),
(145, 4, 'Update information web', 127, '2025-05-10 12:18:55'),
(146, 4, 'Update information web', 127, '2025-05-10 12:19:03'),
(147, 4, 'Update information web', 127, '2025-05-10 12:19:15'),
(148, 4, 'Update information web', 127, '2025-05-10 12:19:23'),
(149, 4, 'Update information web', 127, '2025-05-10 12:19:50'),
(150, 4, 'Update information web', 127, '2025-05-10 12:19:56'),
(151, 4, 'Update information web', 127, '2025-05-10 12:27:13'),
(152, 4, 'Update information web', 127, '2025-05-10 12:27:26'),
(153, 4, 'Update information web', 127, '2025-05-10 12:28:15'),
(154, 4, 'Update information web', 127, '2025-05-10 12:28:22'),
(155, 4, 'Update information web', 127, '2025-05-10 12:28:23'),
(156, 4, 'Update information web', 127, '2025-05-10 12:28:25'),
(157, 4, 'Update information web', 127, '2025-05-10 12:28:55'),
(158, 4, 'Update information web', 127, '2025-05-10 12:28:56'),
(159, 4, 'Update information web', 127, '2025-05-10 12:29:02'),
(160, 4, 'Update information web', 127, '2025-05-10 12:29:20'),
(161, 4, 'Update information web', 127, '2025-05-10 12:31:46'),
(162, 4, 'Update information web', 127, '2025-05-10 12:31:48'),
(163, 4, 'Update information web', 127, '2025-05-10 12:33:52'),
(164, 4, 'Update information web', 127, '2025-05-10 12:34:28'),
(165, 4, 'Update information web', 127, '2025-05-10 12:36:23'),
(166, 4, 'Update information web', 127, '2025-05-10 12:37:35'),
(167, 4, 'Update information web', 127, '2025-05-10 12:38:06'),
(168, 4, 'Update information web', 127, '2025-05-10 12:42:02'),
(169, 4, 'Update information web', 127, '2025-05-10 12:42:09'),
(170, 4, 'Update information web', 127, '2025-05-10 12:42:50'),
(171, 4, 'Update information web', 127, '2025-05-10 12:42:52'),
(172, 4, 'Update information web', 127, '2025-05-10 12:43:09'),
(173, 4, 'Update information web', 127, '2025-05-10 12:43:22'),
(174, 4, 'Update information web', 127, '2025-05-10 12:43:36'),
(175, 4, 'Update information web', 127, '2025-05-10 12:45:22'),
(176, 4, 'Update information web', 127, '2025-05-10 12:45:24'),
(177, 4, 'Update information web', 127, '2025-05-10 12:46:55'),
(178, 4, 'Update information web', 127, '2025-05-10 12:46:57'),
(179, 4, 'Update information web', 0, '2025-05-10 12:47:25'),
(180, 4, 'Update information web', 0, '2025-05-10 12:47:30'),
(181, 4, 'Update information web', 0, '2025-05-10 12:47:39'),
(182, 4, 'Update information web', 0, '2025-05-10 12:47:47'),
(183, 4, 'Update information web', 0, '2025-05-10 12:48:37'),
(184, 4, 'Update information web', 0, '2025-05-10 12:48:41'),
(185, 4, 'Update information web', 0, '2025-05-10 12:49:07'),
(186, 4, 'Update information web', 0, '2025-05-10 12:49:21'),
(187, 4, 'Update information web', 0, '2025-05-10 12:54:01'),
(188, 4, 'Update information web', 0, '2025-05-10 12:54:04'),
(189, 4, 'Update information web', 0, '2025-05-10 12:54:07'),
(190, 4, 'Update information web', 0, '2025-05-10 12:54:20'),
(191, 4, 'Update information web', 0, '2025-05-10 12:54:26'),
(192, 4, 'Update information web', 0, '2025-05-10 12:54:29'),
(193, 4, 'Update information web', 0, '2025-05-10 12:55:44'),
(194, 4, 'Update information web', 0, '2025-05-10 13:08:48'),
(195, 4, 'Update information web', 0, '2025-05-10 13:09:39'),
(196, 4, 'Update information web', 0, '2025-05-10 13:13:01'),
(197, 4, 'Update information web', 0, '2025-05-10 13:13:20'),
(198, 4, 'Update information web', 0, '2025-05-10 13:25:47'),
(199, 4, 'Update information web', 0, '2025-05-10 13:26:02'),
(200, 4, 'Update information web', 0, '2025-05-10 13:26:11'),
(201, 4, 'Update information web', 0, '2025-05-10 13:28:11'),
(202, 4, 'Delete product ID : 6', 127, '2025-05-10 22:05:47'),
(203, 4, ' ID : 6', 127, '2025-05-10 22:11:52'),
(204, 4, 'Active User ID : 6', 127, '2025-05-10 22:12:26'),
(205, 4, 'Delete product ID : 6', 127, '2025-05-10 22:12:30'),
(206, 4, 'Delete product ID : 6', 127, '2025-05-10 22:13:13'),
(207, 4, 'Delete product ID : 6', 127, '2025-05-10 22:15:00'),
(208, 4, 'Disable User ID : 5', 0, '2025-05-11 07:36:20'),
(209, 4, 'Active User ID : 5', 0, '2025-05-11 07:36:23'),
(210, 4, 'Create category ID : 39', 127, '2025-05-11 12:02:40'),
(211, 4, 'Create category ID : 40', 127, '2025-05-11 13:30:02'),
(212, 4, 'Create category ID : 41', 127, '2025-05-11 13:30:23'),
(213, 4, 'Create category ID : 42', 127, '2025-05-11 13:31:11'),
(214, 4, 'Delete Category ID : 39', 127, '2025-05-11 13:31:22'),
(215, 4, 'Delete Category ID : 40', 127, '2025-05-11 13:33:24'),
(216, 4, 'Delete Category ID : 41', 127, '2025-05-11 13:33:27'),
(217, 4, 'Delete Category ID : 42', 127, '2025-05-11 13:33:30'),
(218, 4, 'Create category ID : 43', 127, '2025-05-11 13:34:03'),
(219, 4, 'Create category ID : 44', 127, '2025-05-11 13:34:36'),
(220, 4, 'Delete Category ID : 43', 127, '2025-05-11 13:34:45'),
(221, 4, 'Delete Category ID : 44', 127, '2025-05-11 13:34:49'),
(222, 4, 'Create category ID : 45', 127, '2025-05-11 13:35:11'),
(223, 4, 'Edit Category ID : 45', 127, '2025-05-11 14:08:06'),
(224, 4, 'Edit Category ID : 45', 127, '2025-05-11 14:08:47'),
(225, 4, 'Edit Category ID : 45', 127, '2025-05-11 14:09:20'),
(226, 4, 'Edit Category ID : 45', 127, '2025-05-11 14:09:39'),
(227, 4, 'Edit Category ID : 45', 127, '2025-05-11 14:09:56'),
(228, 4, 'Edit Category ID : 45', 127, '2025-05-11 14:10:07'),
(229, 4, 'Edit Category ID : 45', 127, '2025-05-11 14:10:26'),
(230, 4, 'Delete Category ID : 45', 0, '2025-05-13 08:29:59'),
(231, 4, 'Create category ID : 46', 0, '2025-05-13 08:31:45'),
(232, 4, 'Edit Category ID : 46', 0, '2025-05-13 08:32:01'),
(233, 4, 'Create category ID : 47', 0, '2025-05-14 08:06:59'),
(234, 4, 'Disable User ID : 3', 0, '2025-05-14 08:09:47'),
(235, 4, 'Edit Category ID : 47', 0, '2025-05-14 08:32:44'),
(236, 4, 'Delete Category ID : 47', 0, '2025-05-19 04:12:43'),
(237, 8, 'Create category ID : 48', 127, '2025-06-07 15:16:17'),
(238, 8, 'Delete Category ID : 48', 127, '2025-06-07 15:18:00'),
(239, 8, 'Create category ID : 49', 127, '2025-06-07 15:34:27'),
(240, 8, 'Delete Category ID : 49', 127, '2025-06-07 15:35:59'),
(241, 8, 'Create category ID : 50', 127, '2025-06-07 15:36:33'),
(242, 8, 'Create category ID : 51', 127, '2025-06-07 15:38:33'),
(243, 8, 'Delete Category ID : 51', 127, '2025-06-07 15:42:19'),
(244, 8, 'Delete Category ID : 50', 127, '2025-06-07 15:42:21'),
(245, 8, 'Create brand ID : 22', 127, '2025-06-07 15:45:21'),
(246, 8, 'Delete product ID : 2', 127, '2025-06-07 15:45:52'),
(247, 8, 'Delete product ID : 1', 127, '2025-06-07 15:45:55'),
(248, 8, 'Create product ID : 3', 127, '2025-06-07 15:46:09'),
(249, 8, 'Create product ID : 4', 127, '2025-06-07 15:46:24'),
(250, 8, 'Delete product ID : 22', 127, '2025-06-07 15:46:33'),
(251, 8, 'Create brand ID : 23', 127, '2025-06-07 15:47:55'),
(252, 8, 'Create brand ID : 24', 127, '2025-06-07 15:50:58'),
(253, 8, 'Create category ID : 52', 127, '2025-06-07 15:54:51'),
(254, 8, 'Delete Category ID : 52', 127, '2025-06-07 16:04:35'),
(255, 8, 'Edit brand ID : 23', 127, '2025-06-07 16:17:43'),
(256, 8, 'Edit brand ID : 24', 127, '2025-06-07 16:17:54'),
(257, 8, 'Delete product ID : 24', 127, '2025-06-07 16:28:00'),
(258, 8, 'Delete product ID : 23', 127, '2025-06-07 16:28:01'),
(259, 8, 'Delete product ID : 21', 127, '2025-06-07 16:28:02'),
(260, 8, 'Delete product ID : 4', 127, '2025-06-07 16:28:14'),
(261, 8, 'Delete product ID : 3', 127, '2025-06-07 16:28:15'),
(262, 8, 'Create product ID : 5', 127, '2025-06-07 16:28:37'),
(263, 8, 'Create product ID : 6', 127, '2025-06-07 16:28:54'),
(264, 8, 'Create product ID : 7', 127, '2025-06-07 16:29:16'),
(265, 8, 'Delete product ID : 7', 127, '2025-06-07 16:29:43'),
(266, 8, 'Delete product ID : 6', 127, '2025-06-07 16:29:44'),
(267, 8, 'Delete product ID : 5', 127, '2025-06-07 16:29:45'),
(268, 8, 'Create product ID : 8', 127, '2025-06-07 16:30:03'),
(269, 8, 'Create product ID : 9', 127, '2025-06-07 16:30:20'),
(270, 8, 'Create product ID : 10', 127, '2025-06-07 16:30:35'),
(271, 8, 'Create brand ID : 25', 127, '2025-06-07 16:31:32'),
(272, 8, 'Create brand ID : 26', 127, '2025-06-07 16:32:01'),
(273, 8, 'Delete product ID : 26', 127, '2025-06-07 16:32:25'),
(274, 8, 'Delete product ID : 25', 127, '2025-06-07 16:32:27'),
(275, 8, 'Create brand ID : 27', 127, '2025-06-07 16:33:32'),
(276, 8, 'Create brand ID : 28', 127, '2025-06-07 16:33:56'),
(277, 8, 'Create brand ID : 29', 127, '2025-06-07 16:34:23'),
(278, 8, 'Create brand ID : 30', 127, '2025-06-07 16:34:51'),
(279, 8, 'Create brand ID : 31', 127, '2025-06-07 16:35:12'),
(280, 8, 'Create brand ID : 32', 127, '2025-06-07 16:35:57'),
(281, 8, 'Create brand ID : 33', 127, '2025-06-07 16:36:13'),
(282, 8, 'Create brand ID : 34', 127, '2025-06-07 16:36:40'),
(283, 8, 'Create brand ID : 35', 127, '2025-06-07 16:37:18'),
(284, 8, 'Create brand ID : 36', 127, '2025-06-07 16:38:18'),
(285, 8, 'Create brand ID : 37', 127, '2025-06-07 16:38:57'),
(286, 8, 'Create brand ID : 38', 127, '2025-06-07 16:39:13'),
(287, 8, 'Create brand ID : 39', 127, '2025-06-07 16:39:31'),
(288, 8, 'Create brand ID : 40', 127, '2025-06-07 16:40:19'),
(289, 8, 'Create brand ID : 41', 127, '2025-06-07 16:41:13'),
(290, 8, 'Create brand ID : 42', 127, '2025-06-07 16:41:39'),
(291, 8, 'Create brand ID : 43', 127, '2025-06-07 16:42:02'),
(292, 8, 'Create brand ID : 44', 127, '2025-06-07 16:42:15'),
(293, 8, 'Create product ID : 11', 127, '2025-06-07 16:43:36'),
(294, 8, 'Delete product ID : 9', 127, '2025-06-07 16:46:01'),
(295, 8, 'Delete product ID : 11', 127, '2025-06-07 16:46:31'),
(296, 8, 'Delete product ID : 10', 127, '2025-06-07 16:46:32'),
(297, 8, 'Delete product ID : 8', 127, '2025-06-07 16:46:33'),
(298, 8, 'Create product ID : 12', 127, '2025-06-07 16:47:16'),
(299, 8, 'Create product ID : 13', 127, '2025-06-07 16:48:00'),
(300, 8, 'Create product ID : 14', 127, '2025-06-07 16:48:22'),
(301, 8, 'Create product ID : 15', 127, '2025-06-07 16:48:46'),
(302, 8, 'Create product ID : 16', 127, '2025-06-07 16:49:06'),
(303, 8, 'Create product ID : 17', 127, '2025-06-07 16:49:26'),
(304, 8, 'Edit brand ID : 27', 127, '2025-06-07 16:51:24'),
(305, 8, 'Delete product ID : 27', 127, '2025-06-07 17:00:22'),
(306, 8, 'Delete product ID : 28', 127, '2025-06-07 17:00:23'),
(307, 8, 'Delete product ID : 29', 127, '2025-06-07 17:00:23'),
(308, 8, 'Delete product ID : 30', 127, '2025-06-07 17:00:24'),
(309, 8, 'Delete product ID : 31', 127, '2025-06-07 17:00:24'),
(310, 8, 'Delete product ID : 32', 127, '2025-06-07 17:00:25'),
(311, 8, 'Delete product ID : 33', 127, '2025-06-07 17:00:26'),
(312, 8, 'Delete product ID : 34', 127, '2025-06-07 17:00:26'),
(313, 8, 'Delete product ID : 35', 127, '2025-06-07 17:00:27'),
(314, 8, 'Delete product ID : 36', 127, '2025-06-07 17:00:28'),
(315, 8, 'Delete product ID : 37', 127, '2025-06-07 17:00:29'),
(316, 8, 'Delete product ID : 38', 127, '2025-06-07 17:00:30'),
(317, 8, 'Delete product ID : 39', 127, '2025-06-07 17:00:31'),
(318, 8, 'Delete product ID : 40', 127, '2025-06-07 17:00:31'),
(319, 8, 'Delete product ID : 41', 127, '2025-06-07 17:00:32'),
(320, 8, 'Delete product ID : 42', 127, '2025-06-07 17:00:33'),
(321, 8, 'Delete product ID : 43', 127, '2025-06-07 17:00:34'),
(322, 8, 'Delete product ID : 44', 127, '2025-06-07 17:00:34'),
(323, 8, 'Create brand ID : 45', 127, '2025-06-08 03:32:36'),
(324, 8, 'Delete product ID : 45', 127, '2025-06-08 03:38:06'),
(325, 8, 'Create brand ID : 46', 127, '2025-06-08 03:38:30'),
(326, 8, 'Create brand ID : 47', 127, '2025-06-08 03:39:46'),
(327, 8, 'Create brand ID : 48', 127, '2025-06-08 03:40:13'),
(328, 8, 'Create brand ID : 49', 127, '2025-06-08 03:41:07'),
(329, 8, 'Create brand ID : 50', 127, '2025-06-08 03:41:50'),
(330, 8, 'Create brand ID : 51', 127, '2025-06-08 03:42:14'),
(331, 8, 'Create brand ID : 52', 127, '2025-06-08 03:42:47'),
(332, 8, 'Create brand ID : 53', 127, '2025-06-08 03:43:10'),
(333, 8, 'Create brand ID : 54', 127, '2025-06-08 03:43:26'),
(334, 8, 'Create brand ID : 55', 127, '2025-06-08 03:43:54'),
(335, 8, 'Create product ID : 18', 127, '2025-06-08 03:44:29'),
(336, 8, 'Create brand ID : 56', 127, '2025-06-08 03:46:36'),
(337, 8, 'Create brand ID : 57', 127, '2025-06-08 03:46:51'),
(338, 8, 'Create brand ID : 58', 127, '2025-06-08 03:47:20'),
(339, 8, 'Create brand ID : 59', 127, '2025-06-08 03:47:35'),
(340, 8, 'Create brand ID : 60', 127, '2025-06-08 03:48:12'),
(341, 8, 'Create brand ID : 61', 127, '2025-06-08 03:48:28'),
(342, 8, 'Create brand ID : 62', 127, '2025-06-08 03:48:43'),
(343, 8, 'Create brand ID : 63', 127, '2025-06-08 03:49:11'),
(344, 8, 'Create brand ID : 64', 127, '2025-06-08 03:49:26'),
(345, 8, 'Create brand ID : 65', 127, '2025-06-08 03:49:52'),
(346, 8, 'Create brand ID : 66', 127, '2025-06-08 03:50:24'),
(347, 8, 'Create brand ID : 67', 127, '2025-06-08 03:50:59'),
(348, 8, 'Create brand ID : 68', 127, '2025-06-08 03:51:18'),
(349, 8, 'Create brand ID : 69', 127, '2025-06-08 03:51:33'),
(350, 8, 'Create category ID : 53', 127, '2025-06-08 05:09:44'),
(351, 8, 'Create category ID : 54', 127, '2025-06-08 05:39:03'),
(352, 8, 'Edit Category ID : 54', 127, '2025-06-08 07:47:19'),
(353, 8, 'Edit Category ID : 54', 127, '2025-06-08 07:47:56'),
(354, 8, 'Edit Category ID : 54', 127, '2025-06-08 07:48:40'),
(355, 8, 'Edit Category ID : 54', 127, '2025-06-08 07:49:21'),
(356, 8, 'Edit Category ID : 54', 127, '2025-06-08 07:50:04'),
(357, 8, 'Edit Category ID : 54', 127, '2025-06-08 07:51:05'),
(358, 8, 'Create category ID : 55', 127, '2025-06-08 08:03:06'),
(359, 8, 'Create category ID : 56', 127, '2025-06-08 08:09:30'),
(360, 8, 'Edit Category ID : 56', 127, '2025-06-08 08:13:11'),
(361, 8, 'Edit Category ID : 56', 127, '2025-06-08 08:17:24'),
(362, 8, 'Edit Category ID : 56', 127, '2025-06-08 08:19:23'),
(363, 8, 'Create category ID : 57', 127, '2025-06-08 08:24:13'),
(364, 8, 'Create category ID : 58', 127, '2025-06-08 08:29:41'),
(365, 8, 'Create category ID : 59', 127, '2025-06-08 08:33:51'),
(366, 8, 'Create category ID : 60', 127, '2025-06-08 08:37:43'),
(367, 8, 'Create category ID : 61', 127, '2025-06-08 08:41:55'),
(368, 8, 'Create category ID : 62', 127, '2025-06-08 08:47:18'),
(369, 8, 'Create category ID : 63', 127, '2025-06-08 08:54:03'),
(370, 8, 'Create category ID : 64', 127, '2025-06-08 09:06:30'),
(371, 8, 'Create category ID : 65', 127, '2025-06-08 09:21:03'),
(372, 8, 'Create category ID : 66', 127, '2025-06-08 09:24:38'),
(373, 8, 'Create category ID : 67', 127, '2025-06-08 09:27:19'),
(374, 8, 'Create category ID : 68', 127, '2025-06-08 09:30:38'),
(375, 8, 'Create category ID : 69', 127, '2025-06-08 09:38:10'),
(376, 8, 'Create category ID : 70', 127, '2025-06-08 09:41:03'),
(377, 8, 'Create category ID : 71', 127, '2025-06-08 09:44:42'),
(378, 8, 'Create category ID : 72', 127, '2025-06-08 09:47:10'),
(379, 8, 'Create category ID : 73', 127, '2025-06-08 09:50:12'),
(380, 8, 'Create category ID : 74', 127, '2025-06-08 09:54:09'),
(381, 8, 'Create category ID : 75', 127, '2025-06-08 09:59:12'),
(382, 8, 'Create category ID : 76', 127, '2025-06-08 10:04:15'),
(383, 8, 'Create category ID : 77', 127, '2025-06-08 10:07:19'),
(384, 8, 'Create category ID : 78', 127, '2025-06-08 10:10:32'),
(385, 8, 'Create category ID : 79', 127, '2025-06-08 10:15:05'),
(386, 8, 'Create category ID : 80', 127, '2025-06-08 10:18:09'),
(387, 8, 'Create category ID : 81', 127, '2025-06-08 10:23:51'),
(388, 8, 'Create category ID : 82', 127, '2025-06-08 10:28:50'),
(389, 8, 'Create brand ID : 70', 127, '2025-06-08 16:56:50'),
(390, 4, 'Edit Category ID : 53', 0, '2025-05-28 19:55:35'),
(391, 4, 'Edit Category ID : 54', 0, '2025-05-29 18:23:22'),
(392, 4, 'Edit Category ID : 53', 0, '2025-05-29 19:04:54'),
(393, 4, 'Edit Category ID : 53', 0, '2025-05-29 19:09:59'),
(394, 4, 'Edit Category ID : 53', 0, '2025-05-29 19:21:27'),
(395, 4, 'Edit Category ID : 53', 0, '2025-05-29 22:06:38'),
(396, 4, 'Edit Category ID : 56', 0, '2025-05-29 22:07:23'),
(397, 4, 'Edit Category ID : 58', 0, '2025-05-29 22:19:49'),
(398, 8, 'Edit Category ID : 55', 127, '2025-06-12 15:41:31'),
(399, 8, 'Edit Category ID : 62', 127, '2025-06-12 15:43:32'),
(400, 8, 'Edit Category ID : 53', 127, '2025-06-12 15:45:27'),
(401, 8, 'Edit Category ID : 55', 127, '2025-06-12 15:45:46'),
(402, 8, 'Edit Category ID : 56', 127, '2025-06-12 15:46:00'),
(403, 8, 'Edit Category ID : 57', 127, '2025-06-12 15:46:15'),
(404, 8, 'Edit Category ID : 59', 127, '2025-06-12 15:47:34'),
(405, 8, 'Edit Category ID : 60', 127, '2025-06-12 15:47:46'),
(406, 8, 'Edit Category ID : 54', 127, '2025-06-12 15:50:58'),
(407, 8, 'Active User ID : 3', 127, '2025-06-13 05:52:32'),
(408, 10, 'Update information Admin ID : 10', 127, '2025-06-14 08:56:41'),
(409, 12, 'Edit Category ID : 59', 127, '2025-06-14 11:00:12'),
(410, 12, 'Edit Category ID : 60', 127, '2025-06-14 11:00:27'),
(411, 12, 'Edit Category ID : 59', 127, '2025-06-15 02:55:58'),
(412, 12, 'Edit Category ID : 82', 127, '2025-06-15 02:58:09'),
(413, 12, 'Update information web', 127, '2025-06-15 04:05:52'),
(414, 12, 'Edit Category ID : 53', 127, '2025-06-15 10:13:21'),
(415, 12, 'Delete Category ID : 54', 127, '2025-06-15 10:13:30'),
(416, 12, 'Edit Category ID : 55', 127, '2025-06-15 10:13:41'),
(417, 12, 'Edit Category ID : 56', 127, '2025-06-15 10:13:50'),
(418, 12, 'Edit Category ID : 57', 127, '2025-06-15 10:13:59'),
(419, 12, 'Edit Category ID : 58', 127, '2025-06-15 10:14:09'),
(420, 12, 'Edit Category ID : 59', 127, '2025-06-15 10:14:21'),
(421, 12, 'Edit Category ID : 60', 127, '2025-06-15 10:14:30'),
(422, 12, 'Edit Category ID : 61', 127, '2025-06-15 10:14:49'),
(423, 12, 'Edit Category ID : 62', 127, '2025-06-15 10:15:02'),
(424, 12, 'Edit Category ID : 63', 127, '2025-06-15 10:15:15'),
(425, 12, 'Edit Category ID : 64', 127, '2025-06-15 10:15:41'),
(426, 12, 'Edit Category ID : 65', 127, '2025-06-15 10:16:00'),
(427, 12, 'Edit Category ID : 66', 127, '2025-06-15 10:16:14'),
(428, 12, 'Edit Category ID : 67', 127, '2025-06-15 10:16:28'),
(429, 12, 'Edit Category ID : 68', 127, '2025-06-15 10:16:45'),
(430, 12, 'Edit Category ID : 69', 127, '2025-06-15 10:17:02'),
(431, 12, 'Edit Category ID : 70', 127, '2025-06-15 10:17:15'),
(432, 12, 'Edit Category ID : 71', 127, '2025-06-15 10:17:33'),
(433, 12, 'Edit Category ID : 72', 127, '2025-06-15 10:17:49'),
(434, 12, 'Edit Category ID : 73', 127, '2025-06-15 10:18:05'),
(435, 12, 'Edit Category ID : 74', 127, '2025-06-15 10:18:27'),
(436, 12, 'Edit Category ID : 75', 127, '2025-06-15 10:18:47'),
(437, 12, 'Edit Category ID : 76', 127, '2025-06-15 10:19:01'),
(438, 12, 'Edit Category ID : 77', 127, '2025-06-15 10:19:21'),
(439, 12, 'Edit Category ID : 78', 127, '2025-06-15 10:19:38'),
(440, 12, 'Edit Category ID : 79', 127, '2025-06-15 10:19:51'),
(441, 12, 'Edit Category ID : 80', 127, '2025-06-15 10:20:09'),
(442, 12, 'Edit Category ID : 81', 127, '2025-06-15 10:20:25'),
(443, 12, 'Edit Category ID : 82', 127, '2025-06-15 10:20:41'),
(444, 12, 'Create category ID : 83', 127, '2025-06-15 10:32:55'),
(445, 12, 'Edit Category ID : 83', 127, '2025-06-15 10:37:44'),
(446, 12, 'Create category ID : 84', 127, '2025-06-15 10:41:44'),
(447, 12, 'Create category ID : 85', 127, '2025-06-15 10:44:03'),
(448, 12, 'Edit Category ID : 85', 127, '2025-06-15 10:45:49'),
(449, 12, 'Create category ID : 86', 127, '2025-06-15 10:52:31'),
(450, 12, 'Create category ID : 87', 127, '2025-06-15 10:55:04'),
(451, 12, 'Edit Category ID : 84', 127, '2025-06-15 10:56:16'),
(452, 12, 'Edit Category ID : 86', 127, '2025-06-15 10:56:31'),
(453, 12, 'Edit Category ID : 87', 127, '2025-06-15 10:56:47'),
(454, 12, 'Create category ID : 88', 127, '2025-06-15 11:05:07'),
(455, 12, 'Edit Category ID : 88', 127, '2025-06-15 11:05:46');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `image` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `updated_at` int(11) DEFAULT NULL,
  `delete_user` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `user_id`, `product_id`, `name`, `image`, `status`, `updated_at`, `delete_user`, `created_at`) VALUES
(46, 8, 13, 'Beats', '1749353910.jpg', 1, NULL, NULL, '2025-06-08 03:38:30'),
(47, 8, 13, 'Hikvision', '1749353986.png', 1, NULL, NULL, '2025-06-08 03:39:46'),
(48, 8, 13, 'JBL', '1749354013.jpg', 1, NULL, NULL, '2025-06-08 03:40:13'),
(49, 8, 13, 'Monster', '1749354067.jpg', 1, NULL, NULL, '2025-06-08 03:41:07'),
(50, 8, 17, 'Lenovo', '1749354110.jpg', 1, NULL, NULL, '2025-06-08 03:41:50'),
(51, 8, 17, 'Microsoft', '1749354134.jpg', 1, NULL, NULL, '2025-06-08 03:42:14'),
(52, 8, 16, 'Vivo', '1749354167.jpg', 1, NULL, NULL, '2025-06-08 03:42:47'),
(53, 8, 16, 'Honnor', '1749354190.jpg', 1, NULL, NULL, '2025-06-08 03:43:10'),
(54, 8, 16, 'Nokia', '1749354206.jpg', 1, NULL, NULL, '2025-06-08 03:43:26'),
(55, 8, 16, 'ZTE', '1749354234.jpg', 1, NULL, NULL, '2025-06-08 03:43:54'),
(56, 8, 18, 'Nothing', '1749354396.jpg', 1, NULL, NULL, '2025-06-08 03:46:36'),
(57, 8, 16, 'Techno', '1749354411.jpg', 1, NULL, NULL, '2025-06-08 03:46:51'),
(58, 8, 16, 'Infinix', '1749354440.png', 1, NULL, NULL, '2025-06-08 03:47:20'),
(59, 8, 16, 'HMD', '1749354455.png', 1, NULL, NULL, '2025-06-08 03:47:35'),
(60, 8, 17, 'Asus ', '1749354492.jpg', 1, NULL, NULL, '2025-06-08 03:48:12'),
(61, 8, 16, 'Oneplus', '1749354508.jpg', 1, NULL, NULL, '2025-06-08 03:48:28'),
(62, 8, 16, 'Google', '1749354523.jpg', 1, NULL, NULL, '2025-06-08 03:48:43'),
(63, 8, 16, 'Oppo', '1749354551.jpg', 1, NULL, NULL, '2025-06-08 03:49:11'),
(64, 8, 16, 'Huawei', '1749354566.jpg', 1, NULL, NULL, '2025-06-08 03:49:26'),
(65, 8, 16, 'Xiaomi', '1749354592.jpg', 1, NULL, NULL, '2025-06-08 03:49:52'),
(66, 8, 16, 'Sony', '1749354624.jpg', 1, NULL, NULL, '2025-06-08 03:50:24'),
(67, 8, 16, 'Samsung', '1749354659.jpg', 1, NULL, NULL, '2025-06-08 03:50:59'),
(68, 8, 16, 'Apple', '1749354678.jpg', 1, NULL, NULL, '2025-06-08 03:51:18');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `category_id` int(11) UNSIGNED DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `shipping_id` int(11) NOT NULL,
  `barcode` int(11) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `product_price` int(20) NOT NULL,
  `specification` text NOT NULL,
  `product_image` text NOT NULL,
  `product_qty` int(10) NOT NULL,
  `total_price` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `category_id`, `user_id`, `shipping_id`, `barcode`, `product_name`, `product_price`, `specification`, `product_image`, `product_qty`, `total_price`, `status`, `created_at`) VALUES
(3, 53, 8, 0, 1, 'iPhone 16e', 720, '', '1749359384.png', 1, NULL, 1, '2025-06-08 05:17:10'),
(5, 61, 8, 0, 9, 'Galaxy A35 5G 128GB|8GB ធានា១ឆ្នាំ', 349, '', '1749372115.jpg', 3, NULL, 1, '2025-06-08 08:42:24'),
(11, 57, 8, 0, 5, '15 Pro Max ZA/A SIM2', 1039, '', '1749371053.jpg', 1, NULL, 1, '2025-06-08 11:58:56'),
(16, 53, 4, 1, 1, 'iPhone 16e', 30, '', '1749359384.png', 1, NULL, 0, '2025-05-28 19:57:46'),
(19, 61, 11, 0, 9, 'Galaxy A35 5G 128GB|8GB ធានា១ឆ្នាំ', 349, '', '1749372115.jpg', 4, NULL, 1, '2025-06-14 13:43:34'),
(20, 63, 11, 0, 11, 'Galaxy A14 5G 128GB+12G ធានា១ឆ្នាំ', 219, '', '1749372843.jpg', 5, NULL, 1, '2025-06-14 13:46:26'),
(21, 72, 11, 0, 20, 'Huawei Pura70 256GB|12GB', 659, '', '1749376030.jpg', 1, NULL, 1, '2025-06-14 13:49:03'),
(23, 57, 11, 0, 5, '15 Pro Max ZA/A SIM2', 1039, '', '1749371053.jpg', 10, NULL, 1, '2025-06-14 14:32:05'),
(25, 76, 11, 3, 24, 'Huawei Y6s 2019 32G|3G', 109, '', '1749377055.jpg', 1, NULL, 1, '2025-06-15 03:52:39');

-- --------------------------------------------------------

--
-- Table structure for table `information_website`
--

CREATE TABLE `information_website` (
  `id` int(11) NOT NULL,
  `phone_number` int(11) NOT NULL,
  `telegram_number` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `logo` text NOT NULL,
  `slide_image` text NOT NULL,
  `address` text NOT NULL,
  `updated_by` int(10) DEFAULT NULL,
  `created_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `information_website`
--

INSERT INTO `information_website` (`id`, `phone_number`, `telegram_number`, `email`, `logo`, `slide_image`, `address`, `updated_by`, `created_at`) VALUES
(1, 963904112, 963904112, 'mrounit83@gmail.com', '1746866931.jpg', '1746883691_0.jpg', 'Svay Rieng', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `cart_id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `province` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone_number` int(11) NOT NULL,
  `total_price` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `cart_id`, `first_name`, `last_name`, `city`, `province`, `email`, `phone_number`, `total_price`, `status`, `created_at`) VALUES
(1, 4, 1, 'morn', 'vathana', 'Svay Rieng', '', 'mornsovathana@gmail.com', 10456518, 4, 1, '2025-05-23 09:36:07'),
(2, 4, 1, 'morn', 'vathana', 'Svay Rieng', '', 'mornsovathana@gmail.com', 10456518, 4, 1, '2025-05-23 09:36:07'),
(3, 4, 16, 'morn', 'vathana', 'Svay Rieng', '', 'mornsovathana@gmail.com', 10456518, 31, 1, '2025-05-28 20:15:57');

-- --------------------------------------------------------

--
-- Table structure for table `permission`
--

CREATE TABLE `permission` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `dashboard` int(10) DEFAULT NULL,
  `web_info` int(11) DEFAULT 0,
  `total_product` int(10) DEFAULT NULL,
  `product` int(10) DEFAULT NULL,
  `brands` int(10) DEFAULT NULL,
  `category` int(10) DEFAULT NULL,
  `orders` int(10) DEFAULT NULL,
  `user` varchar(10) DEFAULT NULL,
  `inventory` int(10) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `permission`
--

INSERT INTO `permission` (`id`, `user_id`, `dashboard`, `web_info`, `total_product`, `product`, `brands`, `category`, `orders`, `user`, `inventory`, `updated_by`) VALUES
(1, 12, 1, 1, 1, 1, 1, 1, 1, '1', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `user_id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `image` text DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `user_id`, `name`, `image`, `status`, `created_at`) VALUES
(12, 8, '2nd Hand', '1749314836.jpg', 1, '2025-06-07 16:47:16'),
(13, 8, 'Accessories', '1749314880.jpg', 1, '2025-06-07 16:48:00'),
(14, 8, 'Watch', '1749314902.jpg', 1, '2025-06-07 16:48:22'),
(15, 8, 'Tablet', '1749314926.jpg', 1, '2025-06-07 16:48:46'),
(16, 8, 'Smartphone', '1749314946.jpg', 1, '2025-06-07 16:49:06'),
(17, 8, 'Computer', '1749314966.jpg', 1, '2025-06-07 16:49:26'),
(18, 8, 'Nothing', '1749354269.jpg', 1, '2025-06-08 03:44:29');

-- --------------------------------------------------------

--
-- Table structure for table `product_detail`
--

CREATE TABLE `product_detail` (
  `id` int(11) NOT NULL,
  `brand_id` int(10) UNSIGNED NOT NULL,
  `slug` varchar(20) NOT NULL,
  `barcode` int(50) NOT NULL,
  `name` varchar(191) NOT NULL,
  `original_price` int(50) NOT NULL,
  `sell_price` int(50) NOT NULL,
  `created_by` int(50) NOT NULL,
  `updated_by` int(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product_detail`
--

INSERT INTO `product_detail` (`id`, `brand_id`, `slug`, `barcode`, `name`, `original_price`, `sell_price`, `created_by`, `updated_by`, `created_at`) VALUES
(53, 68, 'Smartphone', 1, 'iPhone 16e', 30, 30, 0, 0, '2025-06-08 05:09:44'),
(55, 68, 'Smartphone', 3, 'iPhone 16 Pro', 1070, 1070, 0, 0, '2025-06-08 08:03:06'),
(56, 68, 'Smartphone', 4, 'iPhone 13 (SIM1+E-SIM)', 519, 519, 0, 0, '2025-06-08 08:09:30'),
(57, 68, 'Smartphone', 5, '15 Pro Max ZA/A SIM2', 1039, 1039, 0, 0, '2025-06-08 08:24:13'),
(58, 68, 'Smartphone', 6, 'iPhone 13 Pro Max USA LL/A', 689, 689, 0, 0, '2025-06-08 08:29:41'),
(59, 67, 'Smartphone', 7, 'Galaxy A55 5G 128GB|8GB ធានា១ឆ្នាំ', 389, 389, 0, 0, '2025-06-08 08:33:51'),
(60, 67, 'Smartphone', 8, 'Galaxy A05 128GB|4GB ធានា១ឆ្នាំ', 124, 124, 0, 0, '2025-06-08 08:37:43'),
(61, 67, 'Smartphone', 9, 'Galaxy A35 5G 128GB|8GB ធានា១ឆ្នាំ', 349, 349, 0, 0, '2025-06-08 08:41:55'),
(62, 67, 'Smartphone', 10, 'Galaxy A25 256G|8G ធានា១ឆ្នាំ', 359, 359, 0, 0, '2025-06-08 08:47:18'),
(63, 67, 'Smartphone', 11, 'Galaxy A14 5G 128GB+12G ធានា១ឆ្នាំ', 219, 219, 0, 0, '2025-06-08 08:54:03'),
(64, 67, 'Smartphone', 12, 'Galaxy S24 256G|8G (Global OFF: $90)', 699, 699, 0, 0, '2025-06-08 09:06:30'),
(65, 64, 'Smartphone', 13, 'Xiaomi Mi 15 Ultra 512GB|16GB (Global)', 1089, 1089, 0, 0, '2025-06-08 09:21:03'),
(66, 65, 'Smartphone', 14, 'Redmi Turbo4 Pro 5G China Version', 369, 369, 0, 0, '2025-06-08 09:24:38'),
(67, 65, 'Smartphone', 15, 'Poco F7 Ultra 5G (Global: In Stock)', 659, 659, 0, 0, '2025-06-08 09:27:19'),
(68, 65, 'Smartphone', 16, 'Redmi A5 (New Arrival)', 69, 69, 0, 0, '2025-06-08 09:30:38'),
(69, 65, 'Smartphone', 17, 'Redmi Note 14 Pro+ 5G (In Stock)', 429, 429, 0, 0, '2025-06-08 09:38:10'),
(70, 65, 'Smartphone', 18, 'Xiaomi Redmi 14C ', 99, 99, 0, 0, '2025-06-08 09:41:03'),
(71, 64, 'Smartphone', 19, 'Huasei Nova 12s 256G+8G (In Stock)', 349, 349, 0, 0, '2025-06-08 09:44:42'),
(72, 64, 'Smartphone', 20, 'Huawei Pura70 256GB|12GB', 659, 659, 0, 0, '2025-06-08 09:47:10'),
(73, 64, 'Smartphone', 21, 'Huawei Nova Y72 128GB|8GB', 179, 179, 0, 0, '2025-06-08 09:50:12'),
(74, 64, 'Smartphone', 22, 'Huawei Nova 10 Pro ធានា១ឆ្នាំ (Oct Special)', 599, 599, 0, 0, '2025-06-08 09:54:09'),
(75, 64, 'Smartphone', 23, 'Huawei Y7A ធានា1ឆ្នាំ', 189, 189, 0, 0, '2025-06-08 09:59:12'),
(76, 64, 'Smartphone', 24, 'Huawei Y6s 2019 32G|3G', 109, 109, 0, 0, '2025-06-08 10:04:15'),
(77, 63, 'Smartphone', 25, 'Oppo A5 2025 128G+12G (In Stock)', 159, 159, 0, 0, '2025-06-08 10:07:19'),
(78, 63, 'Smartphone', 26, 'Oppo A5X 128G+8G (In Stock)', 129, 129, 0, 0, '2025-06-08 10:10:32'),
(79, 63, 'Smartphone', 27, 'OPPO Reno13 Pro 5G 512G|12+12G', 699, 699, 0, 0, '2025-06-08 10:15:05'),
(80, 63, 'Smartphone', 28, 'Oppo Find X8 Pro 5G 512G+16G (Cash Back: 100$)', 1099, 1099, 0, 0, '2025-06-08 10:18:09'),
(81, 63, 'Smartphone', 29, 'Oppo A3 128GB6+6GB ធាន១ឆ្នាំ (In Stock)', 159, 159, 0, 0, '2025-06-08 10:23:51'),
(82, 63, 'Smartphone', 30, 'Oppo Reno7 Pro 5G 256G|12G', 389, 389, 0, 0, '2025-06-08 10:28:50'),
(83, 68, 'Smartphone', 31, 'iPhone 16 SIM2 ( New Offer)', 759, 759, 0, 0, '2025-06-15 10:32:55'),
(84, 68, 'Smartphone', 32, 'iPhone 13 Pro Max USA LL/A (White Box)', 689, 689, 0, 0, '2025-06-15 10:41:44'),
(85, 68, 'Tablet', 33, 'iPad 10th (Best Offer)', 349, 349, 0, 0, '2025-06-15 10:44:03'),
(86, 68, 'Smartphone', 34, 'iPhone 14 Plus ZP/A (New Offer )', 689, 689, 0, 0, '2025-06-15 10:52:31'),
(87, 68, 'Smartphone', 35, 'iPhone 13 (SIM1+E-SIM)', 519, 519, 0, 0, '2025-06-15 10:55:04'),
(88, 64, 'Smartphone', 36, 'Huawei Nova 13 Pro 512GB|12GB (In Stock)', 499, 499, 0, 0, '2025-06-15 11:05:07');

-- --------------------------------------------------------

--
-- Table structure for table `product_image`
--

CREATE TABLE `product_image` (
  `id` int(11) UNSIGNED NOT NULL,
  `product_id` int(10) NOT NULL,
  `specification` text NOT NULL,
  `description` text NOT NULL,
  `image` text NOT NULL,
  `demo_image` text NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product_image`
--

INSERT INTO `product_image` (`id`, `product_id`, `specification`, `description`, `image`, `demo_image`, `created_by`, `updated_by`, `created_at`) VALUES
(53, 53, '<h3><a href=\"https://soklyphone.com/product/i-phone-16-e#collapse-network\">NETWORK </a></h3>\r\n\r\n<p>Technology : GSM / HSPA / LTE / 5G</p>\r\n\r\n<p>2GBands:GSM 850 / 900 / 1800 / 1900</p>\r\n\r\n<p>3GBands:HSDPA 850 / 900 / 1700(AWS) / 1900 / 2100</p>\r\n\r\n<p>Speed:HSPA, LTE (CA), 5G</p>\r\n\r\n<h3><a href=\"https://soklyphone.com/product/i-phone-16-e#collapse-launch\">LAUNCH </a></h3>\r\n\r\n<p>Announced:2025, February 19</p>\r\n\r\n<p>Status:Coming soon...</p>\r\n\r\n<h3><a href=\"https://soklyphone.com/product/i-phone-16-e#collapse-body\">BODY </a></h3>\r\n\r\n<p>Dimensions:146.7 x 71.5 x 7.8 mm (5.78 x 2.81 x 0.31 in)</p>\r\n\r\n<p>Weight:167 g (5.89 oz)</p>\r\n\r\n<p>Build:Glass front, glass back, aluminum frame</p>\r\n\r\n<p>SIM:Nano-SIM + eSIM + eSIM (max 2 at a time; International)</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :IP68 dust tight and water resistant (immersible up to 6m for 30 min)</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :Apple Pay (Visa, MasterCard, AMEX certified)</p>\r\n\r\n<h3><a href=\"https://soklyphone.com/product/i-phone-16-e#collapse-display\">DISPLAY </a></h3>\r\n\r\n<p>Type:Super Retina XDR OLED, HDR10, 800 nits (HBM), 1200 nits (peak)</p>\r\n\r\n<p>Size:6.1 inches, 91.4 cm2 (~87.1% screen-to-body ratio)</p>\r\n\r\n<p>Resolution:1170 x 2532 pixels, 19.5:9 ratio (~457 ppi density)</p>\r\n\r\n<p>Protection:Ceramic Shield glass</p>\r\n\r\n<h3><a href=\"https://soklyphone.com/product/i-phone-16-e#collapse-camera\">CAMERA </a></h3>\r\n\r\n<p>Primary:48 MP, f/1.6, 26mm (wide), PDAF, OIS</p>\r\n\r\n<p>Features:Dual-LED dual-tone flash, HDR, panorama, 3D (spatial) audio</p>\r\n\r\n<p>Video:4K@24/25/30/60fps, 1080p@25/30/60/120/240fps, HDR, OIS, stereo sound rec.</p>\r\n\r\n<p>Secondary:Modules : 12 MP, f/1.9, (wide), AFSL 3D, (depth/biometrics sensor)</p>\r\n\r\n<p>Features : HDR, Dolby Vision HDR, 3D (spatial) audio, stereo sound rec.</p>\r\n\r\n<p>Video : 4K@24/25/30/60fps, 1080p@25/30/60/120fps, HDR</p>\r\n\r\n<p>Sensors:Face ID, accelerometer, gyro, proximity, compass, barometer</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :Emergency SOS, Messages and Find My via satellite</p>\r\n\r\n<p>Battery:Li-Ion</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :Wired, 50% in 30 min</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :7.5W wireless (Qi)</p>\r\n', '<p>We can not guarantee that the information on this page is 100% correct.</p>\r\n\r\n<p><strong>Source:</strong> GSMArena</p>\r\n', '1749359384.png', '1749982401_0.', 0, 0, '2025-06-08 05:09:44'),
(55, 55, '<h3><a href=\"https://soklyphone.com/product/i-phone-16-pro#collapse-network\">NETWORK </a></h3>\r\n\r\n<p>Technology : GSM / CDMA / HSPA / EVDO / LTE / 5G</p>\r\n\r\n<p>2GBands : GSM 850 / 900 / 1800 / 1900 - SIM 1 &amp; SIM 2 (dual-SIM)</p>\r\n\r\n<p>: CDMA 800 / 1900</p>\r\n\r\n<p>3GBands : HSDPA 850 / 900 / 1700(AWS) / 1900 / 2100</p>\r\n\r\n<p>: CDMA2000 1xEV-DO</p>\r\n\r\n<p>4GBands : 1, 2, 3, 4, 5, 7, 8, 12, 13, 17, 18, 19, 20, 25, 26, 28, 30, 32, 34, 38, 39, 40, 41, 42, 48, 53, 66 - A3293</p>\r\n\r\n<p>: 1, 2, 3, 4, 5, 7, 8, 12, 13, 14, 17, 18, 19, 20, 25, 26, 28, 29, 30, 32, 34, 38, 39, 40, 41, 42, 48, 53, 66, 71 - A3083</p>\r\n\r\n<p>: 1, 2, 3, 4, 5, 7, 8, 11, 12, 13, 14, 17, 18, 19, 20, 21, 25, 26, 28, 29, 30, 32,&nbsp; 34, 38, 39, 40, 41, 42, 48, 53, 66, 71 - A3292</p>\r\n\r\n<p>: 1, 2, 3, 4, 5, 7, 8, 12, 13, 17, 18, 19, 20, 25, 26, 28, 30, 32, 34, 38, 39, 40, 41, 42, 48, 66 - A3294</p>\r\n\r\n<p>5GBands : 1, 2, 3, 5, 7, 8, 12, 20, 25, 26, 28, 30, 38, 40, 41, 48, 53, 66, 70, 75, 76, 77, 78, 79 SA/NSA/Sub6 - A3293</p>\r\n\r\n<p>: 1, 2, 3, 5, 7, 8, 12, 14, 20, 25, 26, 28, 29, 30, 38, 40, 41, 48, 53, 66, 70, 71, 75, 76, 77, 78, 79, 258, 260, 261 SA/NSA/Sub6/mmWave - A3083</p>\r\n\r\n<p>: 1, 2, 3, 5, 7, 8, 12, 14, 20, 25, 26, 28, 29, 30, 38, 40, 41, 48, 53, 66, 70, 71, 75, 76, 77, 78, 79 SA/NSA/Sub6 - A3292</p>\r\n\r\n<p>: 1, 2, 3, 5, 7, 8, 12, 20, 25, 26, 28, 30, 38, 40, 41, 48, 66, 70, 75, 76, 77, 78, 79 SA/NSA/Sub6 - A3294</p>\r\n\r\n<p>Speed : HSPA, LTE, 5G, EV-DO Rev.A 3.1 Mbps</p>\r\n\r\n<h3><a href=\"https://soklyphone.com/product/i-phone-16-pro#collapse-launch\">LAUNCH </a></h3>\r\n\r\n<p>Announced : 2024, September 09</p>\r\n\r\n<p>Status : Available. Released 2024, September 27</p>\r\n\r\n<h3><a href=\"https://soklyphone.com/product/i-phone-16-pro#collapse-body\">BODY </a></h3>\r\n\r\n<p>Dimensions : 149.6 x 71.5 x 8.3 mm (5.89 x 2.81 x 0.33 in)</p>\r\n\r\n<p>Weight : 199 g (7.02 oz)</p>\r\n\r\n<p>Build : Glass front (Corning-made glass), glass back (Corning-made glass), titanium frame (grade 5)</p>\r\n\r\n<p>SIM : Nano-SIM and eSIM - International</p>\r\n\r\n<h3><a href=\"https://soklyphone.com/product/i-phone-16-pro#collapse-display\">DISPLAY </a></h3>\r\n\r\n<p>Type : LTPO Super Retina XDR OLED, 120Hz, HDR10, Dolby Vision, 1000 nits (typ), 2000 nits (HBM)</p>\r\n\r\n<p>Size : 6.3 inches, 96.4 cm2 (~90.1% screen-to-body ratio)</p>\r\n\r\n<p>Resolution : 1206 x 2622 pixels, 19.5:9 ratio (~460 ppi density)</p>\r\n\r\n<p>Protection : Ceramic Shield glass (2024 gen)</p>\r\n\r\n<p>: Always-On display</p>\r\n\r\n<h3><a href=\"https://soklyphone.com/product/i-phone-16-pro#collapse-platform\">PLATFORM </a></h3>\r\n\r\n<p>OS : iOS 18</p>\r\n\r\n<p>Chipset : Apple A18 Pro (3 nm)</p>\r\n\r\n<p>CPU : Hexa-core (2x4.04 GHz + 4x2.X GHz)</p>\r\n\r\n<p>GPU : Apple GPU (6-core graphics)</p>\r\n\r\n<h3><a href=\"https://soklyphone.com/product/i-phone-16-pro#collapse-memory\">MEMORY </a></h3>\r\n\r\n<p>CardSlot : No</p>\r\n\r\n<p>Internal : 128GB 8GB RAM, 256GB 8GB RAM, 512GB 8GB RAM, 1TB 8GB RAM</p>\r\n\r\n<p>: NVMe</p>\r\n\r\n<h3><a href=\"https://soklyphone.com/product/i-phone-16-pro#collapse-camera\">CAMERA </a></h3>\r\n\r\n<p>Primary : 48 MP, f/1.8, 24mm (wide), 1/1.28&quot;, 1.22&micro;m, dual pixel PDAF, sensor-shift OIS</p>\r\n\r\n<p>: 12 MP, f/2.8, 120mm (periscope telephoto), 1/3.06&quot;, 1.12&micro;m, dual pixel PDAF, 3D sensor - shift OIS, 5x optical zoom</p>\r\n\r\n<p>: 48 MP, f/2.2, 13mm (ultrawide), 0.7&micro;m, PDAF</p>\r\n\r\n<p>: TOF 3D LiDAR scanner (depth)</p>\r\n\r\n<p>Features : Dual-LED dual-tone flash, HDR (photo/panorama)</p>\r\n\r\n<p>Video : 4K@24/25/30/60/100/120fps, 1080p@25/30/60/120/240fps, 10-bit HDR, Dolby Vision HDR (up to 60fps), ProRes, 3D (spatial) video/audio, stereo sound rec.</p>\r\n\r\n<p>Secondary : Modules : 12 MP, f/1.9, 23mm (wide), 1/3.6&quot;, PDAF, OIS SL 3D, (depth/biometrics sensor)</p>\r\n\r\n<p>Features : HDR, Dolby Vision HDR, 3D (spatial) audio, stereo sound rec.</p>\r\n\r\n<p>Video : 4K@24/25/30/60fps, 1080p@25/30/60/120fps, gyro-EIS</p>\r\n\r\n<h3><a href=\"https://soklyphone.com/product/i-phone-16-pro#collapse-sound\">SOUND </a></h3>\r\n\r\n<p>Loudspeaker : Yes, with stereo speakers</p>\r\n\r\n<p>3.5mmjack : No</p>\r\n\r\n<h3><a href=\"https://soklyphone.com/product/i-phone-16-pro#collapse-features\">FEATURES </a></h3>\r\n\r\n<p>Sensors : Face ID, accelerometer, gyro, proximity, compass, barometer</p>\r\n\r\n<p>: Ultra Wideband (UWB) support (gen2 chip)</p>\r\n\r\n<p>: Emergency SOS, Messages and Find My via satellite</p>\r\n\r\n<h3><a href=\"https://soklyphone.com/product/i-phone-16-pro#collapse-battery\">BATTERY </a></h3>\r\n\r\n<p>Battery : Li-Ion 3582 mAh, non-removable</p>\r\n\r\n<p>Charging : Wired, PD2.0, 50% in 30 min (advertised)</p>\r\n\r\n<p>: 25W wireless (MagSafe)</p>\r\n', '<p>We can not guarantee that the information on this page is 100% correct.</p>\r\n\r\n<p><strong>Source:</strong> GSMArena</p>\r\n', '1749369786.png', '1749982421_0.', 0, 0, '2025-06-08 08:03:06'),
(56, 56, '<p><strong>NETWORK</strong></p>\r\n\r\n<p>Technology GSM / CDMA / HSPA / EVDO / LTE / 5G</p>\r\n\r\n<p><strong>LAUNCH</strong></p>\r\n\r\n<p>Announced 2021, September 14</p>\r\n\r\n<p>Status Coming soon. Exp. release 2021, September 24</p>\r\n\r\n<p><strong>BODY</strong></p>\r\n\r\n<p>Dimensions 146.7 x 71.5 x 7.7 mm (5.78 x 2.81 x 0.30 in)</p>\r\n\r\n<p>Weight 174 g (6.14 oz)</p>\r\n\r\n<p>Build Glass front (Gorilla Glass), glass back (Gorilla Glass), aluminum frame</p>\r\n\r\n<p>SIM Single SIM (Nano-SIM and/or eSIM) or Dual SIM (Nano-SIM, dual stand-by)</p>\r\n\r\n<p>IP68 dust/water resistant (up to 6m for 30 mins)</p>\r\n\r\n<p>Apple Pay (Visa, MasterCard, AMEX certified)</p>\r\n\r\n<p><strong>DISPLAY</strong></p>\r\n\r\n<p>Type Super Retina XDR OLED, HDR10, Dolby Vision, 800 nits (typ), 1200 nits (peak)</p>\r\n\r\n<p>Size 6.1 inches, 90.2 cm2 (~86.0% screen-to-body ratio)</p>\r\n\r\n<p>Resolution 1170 x 2532 pixels, 19.5:9 ratio (~460 ppi density)</p>\r\n\r\n<p>Protection Scratch-resistant ceramic glass, oleophobic coating</p>\r\n\r\n<p>Wide color gamut</p>\r\n\r\n<p>True-tone</p>\r\n\r\n<p><strong>PLATFORM</strong></p>\r\n\r\n<p>OS iOS 15</p>\r\n\r\n<p>Chipset Apple A15 Bionic (5 nm)</p>\r\n\r\n<p>CPU Hexa-core (2&times;3.22 GHz + 4xX.X GHz)</p>\r\n\r\n<p>GPU Apple GPU (4-core graphics)</p>\r\n\r\n<p><strong>MEMORY</strong></p>\r\n\r\n<p>Card slot No</p>\r\n\r\n<p>Internal 128GB 4GB RAM, 256GB 4GB RAM, 512GB 4GB RAM</p>\r\n\r\n<p>NVMe</p>\r\n\r\n<p><strong>MAIN CAMERA</strong></p>\r\n\r\n<p>Dual 12 MP, f/1.6, 26mm (wide), 1.7&micro;m, dual pixel PDAF, sensor-shift OIS</p>\r\n\r\n<p>12 MP, f/2.4, 120˚, 13mm (ultrawide)</p>\r\n\r\n<p>Features Dual-LED dual-tone flash, HDR (photo/panorama)</p>\r\n\r\n<p>Video 4K@24/30/60fps, 1080p@30/60/120/240fps, HDR, Dolby Vision HDR (up to XXfps), stereo sound rec.</p>\r\n\r\n<p><strong>SELFIE CAMERA</strong></p>\r\n\r\n<p>Dual 12 MP, f/2.2, 23mm (wide), 1/3.6&Prime;</p>\r\n\r\n<p>SL 3D, (depth/biometrics sensor)</p>\r\n\r\n<p><strong>Features HDR</strong></p>\r\n\r\n<p>Video 4K@24/25/30/60fps, 1080p@30/60/120fps, gyro-EIS</p>\r\n\r\n<p><strong>SOUND</strong></p>\r\n\r\n<p>Loudspeaker Yes, with stereo speakers</p>\r\n\r\n<p>3.5mm jack No</p>\r\n\r\n<p><strong>COMMS</strong></p>\r\n\r\n<p>WLAN Wi-Fi 802.11 a/b/g/n/ac/6, dual-band, hotspot</p>\r\n\r\n<p>Bluetooth 5.0, A2DP, LE</p>\r\n\r\n<p>GPS Yes, with A-GPS, GLONASS, GALILEO, BDS, QZSS</p>\r\n\r\n<p>NFC Yes</p>\r\n\r\n<p>Radio No</p>\r\n\r\n<p>USB Lightning, USB 2.0</p>\r\n\r\n<p><strong>FEATURES</strong></p>\r\n\r\n<p>Sensors Face ID, accelerometer, gyro, proximity, compass, barometer</p>\r\n\r\n<p>Siri natural language commands and dictation</p>\r\n\r\n<p>Ultra Wideband (UWB) support</p>\r\n\r\n<p><strong>BATTERY</strong></p>\r\n\r\n<p>Type Li-Ion, non-removable</p>\r\n\r\n<p>Charging Fast charging 20W, 50% in 30 min (advertised)</p>\r\n\r\n<p>USB Power Delivery 2.0</p>\r\n\r\n<p>MagSafe wireless charging 15W</p>\r\n\r\n<p>Qi magnetic fast wireless charging 7.5W</p>\r\n\r\n<p>Stand-by Up to 19 h (multimedia)</p>\r\n\r\n<p>Music play Up to 75 h</p>\r\n\r\n<p><strong>MISC</strong></p>\r\n\r\n<p>Colors Starlight, Midnight, Blue, Pink, Red</p>\r\n\r\n<p>Models A2633, A2482, A2631, A2634, A2635</p>\r\n\r\n<p>Price $&thinsp;829.00 / &euro;&thinsp;899.00 / &pound;&thinsp;779.00 / ₹&thinsp;89,900</p>\r\n', '<p>We can not guarantee that the information on this page is 100% correct.</p>\r\n\r\n<p><strong>Source:</strong> GSMArena</p>\r\n', '1749370170.jpg', '1749982430_0.', 0, 0, '2025-06-08 08:09:30'),
(57, 57, '<p>.</p>\r\n', '<p>We can not guarantee that the information on this page is 100% correct.</p>\r\n\r\n<p><strong>Source:</strong> GSMArena</p>\r\n', '1749371053.jpg', '1749982439_0.', 0, 0, '2025-06-08 08:24:13'),
(58, 58, '<p>Network</p>\r\n\r\n<p>Technology GSM / CDMA / HSPA / EVDO / LTE / 5G</p>\r\n\r\n<p>Launch</p>\r\n\r\n<p>Announced 2021, September 14</p>\r\n\r\n<p>Status Available. Released 2021, September 24</p>\r\n\r\n<p>Body</p>\r\n\r\n<p>Dimensions 160.8 x 78.1 x 7.7 mm (6.33 x 3.07 x 0.30 in)</p>\r\n\r\n<p>Weight 240 g (8.47 oz)</p>\r\n\r\n<p>Build Glass front (Corning-made glass), glass back (Corning-made glass), stainless steel frame</p>\r\n\r\n<p>SIM Nano-SIM + eSIM</p>\r\n\r\n<p>Nano-SIM + Nano-SIM</p>\r\n\r\n<p>IP68 dust tight and water resistant (immersible up to 6m for 30 min)</p>\r\n\r\n<p>Apple Pay (Visa, MasterCard, AMEX certified)</p>\r\n\r\n<p>Display</p>\r\n\r\n<p>Type Super Retina XDR OLED, 120Hz, HDR10, Dolby Vision, 1000 nits (HBM), 1200 nits (peak)</p>\r\n\r\n<p>Size 6.7 inches, 109.8 cm2 (~87.4% screen-to-body ratio)</p>\r\n\r\n<p>Resolution 1284 x 2778 pixels, 19.5:9 ratio (~458 ppi density)</p>\r\n\r\n<p>Protection Ceramic Shield glass</p>\r\n\r\n<p>Platform</p>\r\n\r\n<p>OS iOS 15, upgradable to iOS 18.3.1</p>\r\n\r\n<p>Chipset Apple A15 Bionic (5 nm)</p>\r\n\r\n<p>CPU Hexa-core (2&times;3.23 GHz Avalanche + 4&times;1.82 GHz Blizzard)</p>\r\n\r\n<p>GPU Apple GPU (5-core graphics)</p>\r\n\r\n<p>Memory</p>\r\n\r\n<p>Card slot No</p>\r\n\r\n<p>Internal 128GB 6GB RAM, 256GB 6GB RAM, 512GB 6GB RAM, 1TB 6GB RAM</p>\r\n\r\n<p>NVMe</p>\r\n\r\n<p>Main Camera</p>\r\n\r\n<p>Triple 12 MP, f/1.5, 26mm (wide), 1/1.7&Prime;, 1.9&micro;m, dual pixel PDAF, sensor-shift OIS</p>\r\n\r\n<p>12 MP, f/2.8, 77mm (telephoto), PDAF, 1/3.4&Prime;, 1.0&micro;m, OIS, 3x optical zoom</p>\r\n\r\n<p>12 MP, f/1.8, 13mm, 120˚ (ultrawide), 1/3.4&Prime;, 1.0&micro;m, PDAF</p>\r\n\r\n<p>TOF 3D LiDAR scanner (depth)</p>\r\n\r\n<p>Features Dual-LED dual-tone flash, HDR (photo/panorama)</p>\r\n\r\n<p>Video 4K@24/30/60fps, 1080p@30/60/120/240fps, 10-bit HDR, Dolby Vision HDR (up to 60fps), ProRes, stereo sound rec.</p>\r\n\r\n<p>Selfie camera</p>\r\n\r\n<p>Single 12 MP, f/2.2, 23mm (wide), 1/3.6&Prime;, 1.0&micro;m</p>\r\n\r\n<p>SL 3D, (depth/biometrics sensor)</p>\r\n\r\n<p>Features HDR</p>\r\n\r\n<p>Video 4K@24/25/30/60fps, 1080p@30/60/120fps, gyro-EIS</p>\r\n\r\n<p>Sound</p>\r\n\r\n<p>Loudspeaker Yes, with stereo speakers</p>\r\n\r\n<p>3.5mm jack No</p>\r\n\r\n<p>Comms</p>\r\n\r\n<p>WLAN Wi-Fi 802.11 a/b/g/n/ac/6, dual-band, hotspot</p>\r\n\r\n<p>Bluetooth 5.0, A2DP, LE</p>\r\n\r\n<p>Positioning GPS, GLONASS, GALILEO, BDS, QZSS</p>\r\n\r\n<p>NFC Yes</p>\r\n\r\n<p>Radio No</p>\r\n\r\n<p>USB Lightning, USB 2.0</p>\r\n\r\n<p>Features</p>\r\n\r\n<p>Sensors Face ID, accelerometer, gyro, proximity, compass, barometer</p>\r\n\r\n<p>Ultra Wideband (UWB) support</p>\r\n\r\n<p>Battery</p>\r\n\r\n<p>Type Li-Ion 4352 mAh (16.75 Wh)</p>\r\n\r\n<p>Charging Wired, PD2.0, 50% in 30 min</p>\r\n\r\n<p>15W wireless (MagSafe)</p>\r\n\r\n<p>15W wireless (Qi2) &ndash; requires iOS 17.2 update</p>\r\n\r\n<p>Misc</p>\r\n\r\n<p>Colors Graphite, Gold, Silver, Sierra Blue, Alpine Green</p>\r\n\r\n<p>Models A2643, A2484, A2641, A2644, A2645, iphone14,3</p>\r\n\r\n<p>SAR 1.18 W/kg (head) 1.20 W/kg (body)</p>\r\n\r\n<p>SAR EU 0.99 W/kg (head) 0.98 W/kg (body)</p>\r\n\r\n<p>Price $&thinsp;378.95 / &euro;&thinsp;545.00 / &pound;&thinsp;409.44 / ₹&thinsp;117,899</p>\r\n\r\n<p>Tests</p>\r\n\r\n<p>Performance AnTuTu: 801691 (v9)</p>\r\n\r\n<p>GeekBench: 4706 (v5.1)</p>\r\n\r\n<p>GFXBench: 60fps (ES 3.1 onscreen)</p>\r\n\r\n<p>Display 1050 nits max brightness (measured)</p>\r\n\r\n<p>Camera Photo / Video</p>\r\n\r\n<p>Loudspeaker -24.0 LUFS (Very good)</p>\r\n\r\n<p>Battery (old)</p>\r\n\r\n<p>Endurance rating 121h</p>\r\n', '<p>We can not guarantee that the information on this page is 100% correct.</p>\r\n\r\n<p><strong>Source:</strong> GSMArena</p>\r\n', '1749371381.jpg', '1749982449_0.', 0, 0, '2025-06-08 08:29:41'),
(59, 59, '<p>NETWORK</p>\r\n\r\n<p>Technology GSM / HSPA / LTE / 5G</p>\r\n\r\n<p>2G bands GSM 850 / 900 / 1800 / 1900 &ndash; SIM 1 &amp; SIM 2 (dual-SIM model only)</p>\r\n\r\n<p>3G bands HSDPA 850 / 900 / 1700(AWS) / 1900 / 2100</p>\r\n\r\n<p>4G bands 1, 2, 3, 4, 5, 7, 8, 12, 17, 20, 25, 26, 28, 32, 38, 40, 41, 66</p>\r\n\r\n<p>5G bands 1, 3, 5, 7, 8, 20, 28, 38, 40, 41, 66, 77, 78 SA/NSA/Sub6</p>\r\n\r\n<p>Speed HSPA, LTE, 5G</p>\r\n\r\n<p>LAUNCH</p>\r\n\r\n<p>Announced 2024, March 11</p>\r\n\r\n<p>Status Coming soon. Exp. release 2024, March</p>\r\n\r\n<p>BODY</p>\r\n\r\n<p>Dimensions 161.1 x 77.4 x 8.2 mm (6.34 x 3.05 x 0.32 in)</p>\r\n\r\n<p>Weight 213 g (7.51 oz)</p>\r\n\r\n<p>Build Glass front (Gorilla Glass Victus+), glass back (Gorilla Glass), aluminum frame</p>\r\n\r\n<p>SIM Single SIM (Nano-SIM, eSIM) or Hybrid Dual SIM (Nano-SIM, dual stand-by)</p>\r\n\r\n<p>IP67 dust/water resistant (up to 1m for 30 min)</p>\r\n\r\n<p>DISPLAY</p>\r\n\r\n<p>Type Super AMOLED, 120Hz, HDR10+, 1000 nits (HBM)</p>\r\n\r\n<p>Size 6.6 inches, 106.9 cm2 (~85.8% screen-to-body ratio)</p>\r\n\r\n<p>Resolution 1080 x 2340 pixels, 19.5:9 ratio (~390 ppi density)</p>\r\n\r\n<p>Protection Corning Gorilla Glass Victus+</p>\r\n\r\n<p>Always-on display</p>\r\n\r\n<p>PLATFORM</p>\r\n\r\n<p>OS Android 14, One UI 6.1</p>\r\n\r\n<p>Chipset Exynos 1480</p>\r\n\r\n<p>CPU Octa-core (4&times;2.75 GHz Cortex-A78 &amp; 4&times;2.0 GHz Cortex-A55)</p>\r\n\r\n<p>MEMORY</p>\r\n\r\n<p>Card slot microSDXC (uses shared SIM slot)</p>\r\n\r\n<p>Internal 128GB 8GB RAM, 256GB 8GB RAM, 256GB 12GB RAM</p>\r\n\r\n<p>MAIN CAMERA</p>\r\n\r\n<p>Triple 50 MP, f/1.8, (wide), 1/1.56&Prime;, 1.0&micro;m, PDAF, OIS</p>\r\n\r\n<p>12 MP, f/2.2, 123˚ (ultrawide), 1/3.06&Prime;, 1.12&micro;m</p>\r\n\r\n<p>5 MP, f/2.4, (macro)</p>\r\n\r\n<p>Features LED flash, panorama, HDR</p>\r\n\r\n<p>Video 4K@30fps, 1080p@30/60fps, gyro-EIS</p>\r\n\r\n<p>SELFIE CAMERA</p>\r\n\r\n<p>Single 32 MP, f/2.2, 26mm (wide), 1/2.74&Prime;, 0.8&micro;m</p>\r\n\r\n<p>Video 4K@30fps, 1080p@30/60fps</p>\r\n\r\n<p>SOUND</p>\r\n\r\n<p>Loudspeaker Yes, with stereo speakers</p>\r\n\r\n<p>3.5mm jack No</p>\r\n\r\n<p>COMMS</p>\r\n\r\n<p>WLAN Wi-Fi 802.11 a/b/g/n/ac/6, dual-band, Wi-Fi Direct</p>\r\n\r\n<p>Bluetooth 5.3, A2DP, LE</p>\r\n\r\n<p>Positioning GPS, GALILEO, GLONASS, BDS, QZSS</p>\r\n\r\n<p>NFC Yes (market/region dependent)</p>\r\n\r\n<p>Radio No</p>\r\n\r\n<p>USB USB Type-C 2.0, OTG</p>\r\n\r\n<p>FEATURES</p>\r\n\r\n<p>Sensors Fingerprint (under display, optical), accelerometer, gyro, compass, barometer (USA only)</p>\r\n\r\n<p>Virtual proximity sensing</p>\r\n\r\n<p>BATTERY</p>\r\n\r\n<p>Type 5000 mAh, non-removable</p>\r\n\r\n<p>Charging 25W wired</p>\r\n\r\n<p>MISC</p>\r\n\r\n<p>Colors Iceblue, Lilac, Navy, Lemon</p>\r\n\r\n<p>Models SM-A556V, SM-A556U, SM-A556U1, SM-A556B, SM-A556B/DS, SM-A556E, SM-A556E/DS, SM-A5560</p>\r\n\r\n<p>SAR EU 0.68 W/kg (head) 1.04 W/kg (body)</p>\r\n', '<p>We can not guarantee that the information on this page is 100% correct.</p>\r\n\r\n<p><strong>Source:</strong> GSMArena</p>\r\n', '1749371631.jpg', '1749982461_0.', 0, 0, '2025-06-08 08:33:51'),
(60, 60, '<p>NETWORK</p>\r\n\r\n<p>Technology GSM / HSPA / LTE</p>\r\n\r\n<p>LAUNCH</p>\r\n\r\n<p>Announced 2023, September 25</p>\r\n\r\n<p>Status Available. Released 2023, October 15</p>\r\n\r\n<p>BODY</p>\r\n\r\n<p>Dimensions 168.8 x 78.2 x 8.8 mm (6.65 x 3.08 x 0.35 in)</p>\r\n\r\n<p>Weight 195 g (6.88 oz)</p>\r\n\r\n<p>Build Glass front, plastic back, plastic frame</p>\r\n\r\n<p>SIM Single SIM (Nano-SIM) or Dual SIM (Nano-SIM, dual stand-by)</p>\r\n\r\n<p>DISPLAY</p>\r\n\r\n<p>Type PLS LCD</p>\r\n\r\n<p>Size 6.7 inches, 108.4 cm2 (~82.1% screen-to-body ratio)</p>\r\n\r\n<p>Resolution 720 x 1600 pixels, 20:9 ratio (~262 ppi density)</p>\r\n\r\n<p>PLATFORM</p>\r\n\r\n<p>OS Android 13</p>\r\n\r\n<p>Chipset Mediatek MT6769V/CZ Helio G85 (12nm)</p>\r\n\r\n<p>CPU Octa-core (2&times;2.0 GHz Cortex-A75 &amp; 6&times;1.8 GHz Cortex-A55)</p>\r\n\r\n<p>GPU Mali-G52 MC2</p>\r\n\r\n<p>MEMORY</p>\r\n\r\n<p>Card slot microSDXC</p>\r\n\r\n<p>Internal 64GB 4GB RAM,</p>\r\n\r\n<p>eMMC 5.1</p>\r\n\r\n<p>MAIN CAMERA</p>\r\n\r\n<p>Dual 50 MP, f/1.8, (wide), AF</p>\r\n\r\n<p>2 MP, f/2.4, (depth)</p>\r\n\r\n<p>Features LED flash</p>\r\n\r\n<p>Video 1080p@30/60fps</p>\r\n\r\n<p>SELFIE CAMERA</p>\r\n\r\n<p>Single 8 MP, f/2.0</p>\r\n\r\n<p>Video Yes</p>\r\n\r\n<p>SOUND</p>\r\n\r\n<p>Loudspeaker Yes</p>\r\n\r\n<p>3.5mm jack Yes</p>\r\n\r\n<p>COMMS</p>\r\n\r\n<p>WLAN Wi-Fi 802.11 a/b/g/n/ac, dual-band, Wi-Fi Direct</p>\r\n\r\n<p>Bluetooth 5.3, A2DP, LE</p>\r\n\r\n<p>Positioning GPS, GLONASS, GALILEO, BDS</p>\r\n\r\n<p>NFC No</p>\r\n\r\n<p>Radio Unspecified</p>\r\n\r\n<p>USB USB Type-C 2.0</p>\r\n\r\n<p>FEATURES</p>\r\n\r\n<p>Sensors Accelerometer, proximity</p>\r\n\r\n<p>BATTERY</p>\r\n\r\n<p>Type Li-Po 5000 mAh, non-removable</p>\r\n\r\n<p>Charging 25W wired</p>\r\n\r\n<p>MISC</p>\r\n\r\n<p>Colors Black, Silver, Light Green</p>\r\n\r\n<p>Models SM-A055F, SM-A055F/DS, SM-A055M, SM-A055M/DS</p>\r\n\r\n<p>SAR EU 0.41 W/kg (head) 1.19 W/kg (body)</p>\r\n\r\n<p>Price About 130 EUR</p>\r\n', '<p>We can not guarantee that the information on this page is 100% correct.</p>\r\n\r\n<p><strong>Source:</strong> GSMArena</p>\r\n', '1749371863.jpg', '1749982470_0.', 0, 0, '2025-06-08 08:37:43'),
(61, 61, '<p>NETWORK</p>\r\n\r\n<p>Technology GSM / HSPA / LTE / 5G</p>\r\n\r\n<p>2G bands GSM 850 / 900 / 1800 / 1900 &ndash; SIM 1 &amp; SIM 2 (dual-SIM model only)</p>\r\n\r\n<p>3G bands HSDPA 850 / 900 / 1700(AWS) / 1900 / 2100</p>\r\n\r\n<p>4G bands 1, 2, 3, 4, 5, 7, 8, 12, 13, 17, 20, 25, 26, 28, 32, 38, 40, 41, 66</p>\r\n\r\n<p>5G bands 1, 3, 5, 7, 8, 26, 28, 40, 41, 66, 77, 78 SA/NSA/Sub6</p>\r\n\r\n<p>Speed HSPA, LTE, 5G</p>\r\n\r\n<p>LAUNCH</p>\r\n\r\n<p>Announced 2024, March 11</p>\r\n\r\n<p>Status Coming soon. Exp. release 2024, March</p>\r\n\r\n<p>BODY</p>\r\n\r\n<p>Dimensions 161.7 x 78 x 8.2 mm (6.37 x 3.07 x 0.32 in)</p>\r\n\r\n<p>Weight 209 g (7.37 oz)</p>\r\n\r\n<p>Build Glass front (Gorilla Glass Victus+), plastic frame, glass back</p>\r\n\r\n<p>SIM Single SIM (Nano-SIM) or Hybrid Dual SIM (Nano-SIM, dual stand-by)</p>\r\n\r\n<p>IP67 dust/water resistant (up to 1m for 30 min)</p>\r\n\r\n<p>DISPLAY</p>\r\n\r\n<p>Type Super AMOLED, 120Hz, 1000 nits (HBM)</p>\r\n\r\n<p>Size 6.6 inches, 106.9 cm2 (~84.8% screen-to-body ratio)</p>\r\n\r\n<p>Resolution 1080 x 2340 pixels, 19.5:9 ratio (~390 ppi density)</p>\r\n\r\n<p>Protection Corning Gorilla Glass Victus+</p>\r\n\r\n<p>Always-on display</p>\r\n\r\n<p>PLATFORM</p>\r\n\r\n<p>OS Android 14, One UI 6.1</p>\r\n\r\n<p>Chipset Exynos 1380 (5 nm)</p>\r\n\r\n<p>CPU Octa-core (4&times;2.4 GHz Cortex-A78 &amp; 4&times;2.0 GHz Cortex-A55)</p>\r\n\r\n<p>GPU Mali-G68 MP5</p>\r\n\r\n<p>MEMORY</p>\r\n\r\n<p>Card slot microSDXC (uses shared SIM slot)</p>\r\n\r\n<p>Internal 128GB 6GB RAM, 128GB 8GB RAM, 256GB 8GB RAM</p>\r\n\r\n<p>MAIN CAMERA</p>\r\n\r\n<p>Triple 50 MP, f/1.8, (wide), 1/1.96&Prime;, PDAF, OIS</p>\r\n\r\n<p>8 MP, f/2.2, 123˚, (ultrawide), 1/4.0&Prime;, 1.12&micro;m</p>\r\n\r\n<p>5 MP, f/2.4, (macro)</p>\r\n\r\n<p>Features LED flash, panorama, HDR</p>\r\n\r\n<p>Video 4K@30fps, 1080p@30/60fps, gyro-EIS</p>\r\n\r\n<p>SELFIE CAMERA</p>\r\n\r\n<p>Single 13 MP, f/2.2, (wide), 1/3.06&Prime;, 1.12&micro;m</p>\r\n\r\n<p>Video 4K@30fps, 1080p@30fps</p>\r\n\r\n<p>SOUND</p>\r\n\r\n<p>Loudspeaker Yes, with stereo speakers</p>\r\n\r\n<p>3.5mm jack No</p>\r\n\r\n<p>COMMS</p>\r\n\r\n<p>WLAN Wi-Fi 802.11 a/b/g/n/ac/6, dual-band, Wi-Fi Direct</p>\r\n\r\n<p>Bluetooth 5.3, A2DP, LE</p>\r\n\r\n<p>Positioning GPS, GALILEO, GLONASS, BDS, QZSS</p>\r\n\r\n<p>NFC Yes (market/region dependent)</p>\r\n\r\n<p>Radio No</p>\r\n\r\n<p>USB USB Type-C 2.0, OTG</p>\r\n\r\n<p>FEATURES</p>\r\n\r\n<p>Sensors Fingerprint (under display, optical), accelerometer, gyro, compass</p>\r\n\r\n<p>Virtual proximity sensing</p>\r\n\r\n<p>BATTERY</p>\r\n\r\n<p>Type 5000 mAh, non-removable</p>\r\n\r\n<p>Charging 25W wired</p>\r\n\r\n<p>MISC</p>\r\n\r\n<p>Colors Iceblue, Lilac, Navy</p>\r\n\r\n<p>Models SM-A356E, SM-A356E/DS, SM-A356B, SM-A356B/DS</p>\r\n\r\n<p>SAR 0.81 W/kg (head)</p>\r\n\r\n<p>SAR EU 0.44 W/kg (head) 0.92 W/kg (body)</p>\r\n', '<p>We can not guarantee that the information on this page is 100% correct.</p>\r\n\r\n<p><strong>Source:</strong> GSMArena</p>\r\n', '1749372115.jpg', '1749982489_0.', 0, 0, '2025-06-08 08:41:55'),
(62, 62, '<p>NETWORK</p>\r\n\r\n<p>Technology GSM / HSPA / LTE / 5G</p>\r\n\r\n<p>LAUNCH</p>\r\n\r\n<p>Announced 2023, December 11</p>\r\n\r\n<p>Status Available. Released 2023, December 16</p>\r\n\r\n<p>BODY</p>\r\n\r\n<p>Dimensions 161 x 76.5 x 8.3 mm (6.34 x 3.01 x 0.33 in)</p>\r\n\r\n<p>Weight 197 g (6.95 oz)</p>\r\n\r\n<p>SIM Single SIM (Nano-SIM) or Hybrid Dual SIM (Nano-SIM, dual stand-by)</p>\r\n\r\n<p>DISPLAY</p>\r\n\r\n<p>Type Super AMOLED, 120Hz, 1000 nits (HBM)</p>\r\n\r\n<p>Size 6.5 inches, 103.7 cm2 (~84.2% screen-to-body ratio)</p>\r\n\r\n<p>Resolution 1080 x 2340 pixels, 19.5:9 ratio (~396 ppi density)</p>\r\n\r\n<p>PLATFORM</p>\r\n\r\n<p>OS Android 14, One UI 6</p>\r\n\r\n<p>Chipset Exynos 1280 (5 nm)</p>\r\n\r\n<p>CPU Octa-core (2&times;2.4 GHz Cortex-A78 &amp; 6&times;2.0 GHz Cortex-A55)</p>\r\n\r\n<p>GPU Mali-G68</p>\r\n\r\n<p>MEMORY</p>\r\n\r\n<p>Card slot microSDXC (uses shared SIM slot)</p>\r\n\r\n<p>Internal 256GB 8GB RAM</p>\r\n\r\n<p>MAIN CAMERA</p>\r\n\r\n<p>Triple 50 MP, f/1.8, (wide), PDAF, OIS</p>\r\n\r\n<p>8 MP, f/2.2, 120˚ (ultrawide)</p>\r\n\r\n<p>2 MP, f/2.4, (macro)</p>\r\n\r\n<p>Features LED flash, panorama, HDR</p>\r\n\r\n<p>Video 4K@30fps, 1080p@30fps, gyro-EIS</p>\r\n\r\n<p>SELFIE CAMERA</p>\r\n\r\n<p>Single 13 MP, f/2.2, (wide)</p>\r\n\r\n<p>Video 1080p@30fps</p>\r\n\r\n<p>SOUND</p>\r\n\r\n<p>Loudspeaker Yes, with stereo speakers</p>\r\n\r\n<p>3.5mm jack Yes</p>\r\n\r\n<p>COMMS</p>\r\n\r\n<p>WLAN Wi-Fi 802.11 a/b/g/n/ac, dual-band, Wi-Fi Direct</p>\r\n\r\n<p>Bluetooth 5.3, A2DP, LE</p>\r\n\r\n<p>Positioning GPS, GLONASS, GALILEO, BDS, QZSS</p>\r\n\r\n<p>NFC Yes (market/region dependent)</p>\r\n\r\n<p>Radio Unspecified</p>\r\n\r\n<p>USB USB Type-C 2.0</p>\r\n\r\n<p>FEATURES</p>\r\n\r\n<p>Sensors Fingerprint (side-mounted), accelerometer, gyro, compass</p>\r\n\r\n<p>Virtual proximity sensing</p>\r\n\r\n<p>BATTERY</p>\r\n\r\n<p>Type 5000 mAh, non-removable</p>\r\n\r\n<p>Charging 25W wired</p>\r\n\r\n<p>MISC</p>\r\n\r\n<p>Colors Brave Black, Personality Yellow, Fantasy Blue, Optimistic Blue</p>\r\n\r\n<p>SAR EU 0.46 W/kg (head) 1.19 W/kg (body)</p>\r\n\r\n<p>Price $&thinsp;224.50</p>\r\n', '<p>We can not guarantee that the information on this page is 100% correct.</p>\r\n\r\n<p><strong>Source:</strong> GSMArena</p>\r\n', '1749372438.jpg', '1749982502_0.', 0, 0, '2025-06-08 08:47:18'),
(63, 63, '<p>NETWORK</p>\r\n\r\n<p>Technology GSM / HSPA / LTE-5G</p>\r\n\r\n<p>LAUNCH</p>\r\n\r\n<p>Announced 2023, February 28</p>\r\n\r\n<p>Status Coming soon. Exp. release 2023, March</p>\r\n\r\n<p>BODY</p>\r\n\r\n<p>Dimensions 167.7 x 78 x 9.1 mm (6.60 x 3.07 x 0.36 in)</p>\r\n\r\n<p>Weight 201 g (7.09 oz)</p>\r\n\r\n<p>Build Glass front, plastic back, plastic frame</p>\r\n\r\n<p>SIM Single SIM (Nano-SIM) or Dual SIM (Nano-SIM, dual stand-by)</p>\r\n\r\n<p>DISPLAY</p>\r\n\r\n<p>Type PLS LCD</p>\r\n\r\n<p>Size 6.6 inches, 104.9 cm2 (~80.2% screen-to-body ratio)</p>\r\n\r\n<p>Resolution 1080 x 2408 pixels, 20:9 ratio (~400 ppi density)</p>\r\n\r\n<p>PLATFORM</p>\r\n\r\n<p>OS Android 13, One UI Core 5</p>\r\n\r\n<p>Chipset Mediatek MT6769 Helio G80 (12 nm)</p>\r\n\r\n<p>CPU Octa-core (2&times;2.0 GHz Cortex-A75 &amp; 6&times;1.8 GHz Cortex-A55)</p>\r\n\r\n<p>GPU Mali-G52 MC2</p>\r\n\r\n<p>MEMORY</p>\r\n\r\n<p>Card slot microSDXC (dedicated slot)</p>\r\n\r\n<p>Internal 128GB 6GB RAM</p>\r\n\r\n<p>MAIN CAMERA</p>\r\n\r\n<p>Triple 50 MP, f/1.8, (wide), PDAF</p>\r\n\r\n<p>5 MP, f/2.2, (ultrawide)</p>\r\n\r\n<p>2 MP, f/2.4, (macro)</p>\r\n\r\n<p>Features LED flash, panorama, HDR</p>\r\n\r\n<p>Video 1080p@30fps</p>\r\n\r\n<p>SELFIE CAMERA</p>\r\n\r\n<p>Single 13 MP, f/2.0, (wide)</p>\r\n\r\n<p>Video 1080p@30fps</p>\r\n\r\n<p>SOUND</p>\r\n\r\n<p>Loudspeaker Yes</p>\r\n\r\n<p>3.5mm jack Yes</p>\r\n\r\n<p>COMMS</p>\r\n\r\n<p>WLAN Wi-Fi 802.11 a/b/g/n/ac, dual-band, Wi-Fi Direct</p>\r\n\r\n<p>Bluetooth 5.1, A2DP, LE</p>\r\n\r\n<p>Positioning GPS, GALILEO, GLONASS, BDS, QZSS</p>\r\n\r\n<p>NFC Yes</p>\r\n\r\n<p>Radio Unspecified</p>\r\n\r\n<p>USB USB Type-C 2.0</p>\r\n\r\n<p>FEATURES</p>\r\n\r\n<p>Sensors Fingerprint (side-mounted), accelerometer, proximity, compass</p>\r\n\r\n<p>BATTERY</p>\r\n\r\n<p>Type Li-Po 5000 mAh, non-removable</p>\r\n\r\n<p>Charging 15W wired</p>\r\n\r\n<p>MISC</p>\r\n\r\n<p>Colors Black, Dark Red, Silver, Green</p>\r\n\r\n<p>Models SM-A145F, SM-A145F/DSN</p>\r\n\r\n<p>SAR EU 0.46 W/kg (head) 1.37 W/kg (body)</p>\r\n', '<p>We can not guarantee that the information on this page is 100% correct.</p>\r\n\r\n<p><strong>Source:</strong> GSMArena</p>\r\n', '1749372843.jpg', '1749982515_0.', 0, 0, '2025-06-08 08:54:03'),
(64, 64, '<p>NETWORK</p>\r\n\r\n<p>Technology GSM / CDMA / HSPA / EVDO / LTE / 5G</p>\r\n\r\n<p>2G bands GSM 850 / 900 / 1800 / 1900 &ndash; SIM 1 &amp; SIM 2 (Dual SIM model only)</p>\r\n\r\n<p>CDMA 800 / 1900 &amp; TD-SCDMA</p>\r\n\r\n<p>3G bands HSDPA 850 / 900 / 1700(AWS) / 1900 / 2100</p>\r\n\r\n<p>CDMA2000 1xEV-DO</p>\r\n\r\n<p>4G bands LTE</p>\r\n\r\n<p>5G bands SA/NSA/Sub6 &ndash; International</p>\r\n\r\n<p>SA/NSA/Sub6/mmWave &ndash; USA</p>\r\n\r\n<p>Speed HSPA, LTE-A (up to 7CA), 5G</p>\r\n\r\n<p>LAUNCH</p>\r\n\r\n<p>Announced Not announced yet</p>\r\n\r\n<p>Status Rumored</p>\r\n\r\n<p>BODY</p>\r\n\r\n<p>Dimensions &ndash;</p>\r\n\r\n<p>Weight &ndash;</p>\r\n\r\n<p>Build Glass front (Gorilla Glass Victus 3), glass back (Gorilla Glass Victus 3), aluminum frame</p>\r\n\r\n<p>SIM Nano-SIM and eSIM or Dual SIM (2 Nano-SIMs and eSIM, dual stand-by)</p>\r\n\r\n<p>IP68 dust/water resistant (up to 1.5m for 30 min)</p>\r\n\r\n<p>Armor aluminum 2 frame with tougher drop and scratch resistance (advertised)</p>\r\n\r\n<p>DISPLAY</p>\r\n\r\n<p>Type Dynamic LTPO AMOLED 2X, 120Hz, HDR10+, 2600 nits (peak)</p>\r\n\r\n<p>Size 6.2 inches, 94.4 cm2</p>\r\n\r\n<p>Resolution 1080 x 2340 pixels, 19.5:9 ratio (~416 ppi density)</p>\r\n\r\n<p>Protection Corning Gorilla Glass Victus 3</p>\r\n\r\n<p>Always-on display</p>\r\n\r\n<p>PLATFORM</p>\r\n\r\n<p>OS Android 14, One UI 6.1</p>\r\n\r\n<p>Chipset Qualcomm SM8650-AB Snapdragon 8 Gen 3 (4 nm) &ndash; US/Canada</p>\r\n\r\n<p>Exynos 2400 &ndash; International</p>\r\n\r\n<p>CPU Octa-core (1&times;3.3 GHz Cortex-X4 &amp; 5&times;3.2 GHz Cortex-A720 &amp; 2&times;2.3 GHz Cortex-A520) &ndash; US/Canada</p>\r\n\r\n<p>GPU Adreno 750 &ndash; US/Canada</p>\r\n\r\n<p>MEMORY</p>\r\n\r\n<p>Card slot No</p>\r\n\r\n<p>Internal 128GB 8GB RAM, 256GB 8GB RAM, 512GB 8GB RAM</p>\r\n\r\n<p>UFS 3.1 &ndash; 128GB only</p>\r\n\r\n<p>UFS 4.0</p>\r\n\r\n<p>MAIN CAMERA</p>\r\n\r\n<p>Triple 50 MP, f/1.8, 24mm (wide), 1/1.56&Prime;, 1.0&micro;m, Dual Pixel PDAF, OIS</p>\r\n\r\n<p>10 MP, f/2.4, 70mm (telephoto), 1/3.94&Prime;, 1.0&micro;m, PDAF, OIS, 3x optical zoom</p>\r\n\r\n<p>12 MP, f/2.2, 13mm, 120˚ (ultrawide), 1/2.55&Prime; 1.4&micro;m, Super Steady video</p>\r\n\r\n<p>Features LED flash, auto-HDR, panorama</p>\r\n\r\n<p>Video 8K@24/30fps, 4K@30/60fps, 1080p@30/60/240fps, 1080p@960fps, HDR10+, stereo sound rec., gyro-EIS</p>\r\n\r\n<p>SELFIE CAMERA</p>\r\n\r\n<p>Single 12 MP, f/2.2, 26mm (wide), Dual Pixel PDAF</p>\r\n\r\n<p>Features Dual video call, Auto-HDR, HDR10+</p>\r\n\r\n<p>Video 4K@30/60fps, 1080p@30fps</p>\r\n\r\n<p>SOUND</p>\r\n\r\n<p>Loudspeaker Yes, with stereo speakers</p>\r\n\r\n<p>3.5mm jack No</p>\r\n\r\n<p>32-bit/384kHz audio</p>\r\n\r\n<p>Tuned by AKG</p>\r\n\r\n<p>COMMS</p>\r\n\r\n<p>WLAN Wi-Fi 802.11 a/b/g/n/ac/6e, tri-band, Wi-Fi Direct</p>\r\n\r\n<p>Bluetooth 5.3, A2DP, LE</p>\r\n\r\n<p>Positioning GPS, GLONASS, BDS, GALILEO</p>\r\n\r\n<p>NFC Yes</p>\r\n\r\n<p>Radio No</p>\r\n\r\n<p>USB USB Type-C 3.2, OTG</p>\r\n\r\n<p>FEATURES</p>\r\n\r\n<p>Sensors Fingerprint (under display, ultrasonic), accelerometer, gyro, proximity, compass, barometer</p>\r\n\r\n<p>Samsung DeX, Samsung Wireless DeX (desktop experience support)</p>\r\n\r\n<p>BATTERY</p>\r\n\r\n<p>Type Li-Ion 4000 mAh, non-removable</p>\r\n\r\n<p>Charging 25W wired, PD3.0, 50% in 30 min (advertised)</p>\r\n\r\n<p>15W wireless (Qi/PMA)</p>\r\n\r\n<p>4.5W reverse wireless</p>\r\n\r\n<p>MISC</p>\r\n\r\n<p>Colors Onyx Black, Marble Grey, Cobalt Violet, Amber Yellow</p>\r\n', '<p>We can not guarantee that the information on this page is 100% correct.</p>\r\n\r\n<p><strong>Source:</strong> GSMArena</p>\r\n', '1749373590.jpg', '1749982541_0.', 0, 0, '2025-06-08 09:06:30'),
(65, 65, '<p>Network</p>\r\n\r\n<p>Technology GSM / HSPA / LTE / 5G</p>\r\n\r\n<p>Launch</p>\r\n\r\n<p>Announced 2025, February 27</p>\r\n\r\n<p>Status Available. Released 2025, February 27</p>\r\n\r\n<p>Body</p>\r\n\r\n<p>Dimensions 161.3 x 75.3 x 9.4 mm (6.35 x 2.96 x 0.37 in)</p>\r\n\r\n<p>Weight 226 g or 229 g (7.97 oz)</p>\r\n\r\n<p>Build Glass front, glass-fiber back or silicone polymer back (eco leather), aluminum frame</p>\r\n\r\n<p>SIM Nano-SIM + Nano-SIM</p>\r\n\r\n<p>Nano-SIM + Nano-SIM + eSIM + eSIM (max 2 at a time)</p>\r\n\r\n<p>IP68 dust tight and water resistant (immersible up to 1.5m for 30 min)</p>\r\n\r\n<p>Aerospace-grade glass fiber</p>\r\n\r\n<p>Display</p>\r\n\r\n<p>Type LTPO AMOLED, 68B colors, 120Hz, Dolby Vision, HDR10+, HDR Vivid, 3200 nits (peak)</p>\r\n\r\n<p>Size 6.73 inches, 108.9 cm2 (~89.7% screen-to-body ratio)</p>\r\n\r\n<p>Resolution 1440 x 3200 pixels, 20:9 ratio (~522 ppi density)</p>\r\n\r\n<p>Protection Xiaomi Shield Glass 2.0</p>\r\n\r\n<p>Platform</p>\r\n\r\n<p>OS Android 15, up to 4 major Android upgrades, HyperOS 2</p>\r\n\r\n<p>Chipset Qualcomm SM8750-AB Snapdragon 8 Elite (3 nm)</p>\r\n\r\n<p>CPU Octa-core (2&times;4.32 GHz Oryon V2 Phoenix L + 6&times;3.53 GHz Oryon V2 Phoenix M)</p>\r\n\r\n<p>GPU Adreno 830</p>\r\n\r\n<p>Memory</p>\r\n\r\n<p>Card slot No</p>\r\n\r\n<p>Internal 256GB 12GB RAM, 512GB 16GB RAM, 1TB 16GB RAM</p>\r\n\r\n<p>UFS 4.1</p>\r\n\r\n<p>Main Camera</p>\r\n\r\n<p>Quad 50 MP, f/1.6, 23mm (wide), 1.0&Prime;-type, 1.6&micro;m, dual pixel PDAF, OIS</p>\r\n\r\n<p>50 MP, f/1.8, 70mm (telephoto), 1/2.51&Prime;, 0.7&micro;m, dual pixel PDAF (10cm &ndash; &infin;), OIS, 3x optical zoom</p>\r\n\r\n<p>200 MP, f/2.6, 100mm (periscope telephoto), 1/1.4&Prime;, 0.56&micro;m, multi-directional PDAF, OIS, 4.3x optical zoom</p>\r\n\r\n<p>50 MP, f/2.2, 14mm, 115˚ (ultrawide), 1/2.76&Prime;, 0.64&micro;m, dual pixel PDAF</p>\r\n\r\n<p>TOF 3D, (depth)</p>\r\n\r\n<p>Features Laser AF, color spectrum sensor, Leica lenses, Dual-LED flash, HDR, panorama, 67mm filter ring holder (optional)</p>\r\n\r\n<p>Video 8K@30fps, 4K@30/60/120fps, 1080p@30/60/120/240/480/960/1920fps, gyro-EIS, Dolby Vision HDR 10-bit rec. (4K@60fps, 1080p)</p>\r\n\r\n<p>Selfie camera</p>\r\n\r\n<p>Single 32 MP, f/2.0, 21mm (wide), 1/3.14&Prime;, 0.7&micro;m</p>\r\n\r\n<p>Features HDR, panorama</p>\r\n\r\n<p>Video 4K@30/60fps, 1080p@30/60fps, gyro-EIS</p>\r\n\r\n<p>Sound</p>\r\n\r\n<p>Loudspeaker Yes, with stereo speakers</p>\r\n\r\n<p>3.5mm jack No</p>\r\n\r\n<p>24-bit/192kHz Hi-Res &amp; Hi-Res Wireless audio</p>\r\n\r\n<p>Qualcomm XPAN (24-bit/96kHz audio)</p>\r\n\r\n<p>Comms</p>\r\n\r\n<p>WLAN Wi-Fi 802.11 a/b/g/n/ac/6e/7, dual-band or tri-band, Wi-Fi Direct</p>\r\n\r\n<p>Bluetooth 6.0, A2DP, LE, aptX HD, aptX Adaptive, LHDC 5</p>\r\n\r\n<p>Positioning GPS (L1+L5), BDS (B1I+B1c+B2a), GALILEO (E1+E5a), QZSS (L1+L5), NavIC (L5), GLONASS</p>\r\n\r\n<p>NFC Yes</p>\r\n\r\n<p>Infrared port Yes</p>\r\n\r\n<p>Radio No</p>\r\n\r\n<p>USB USB Type-C 3.2 Gen 2, DisplayPort, OTG</p>\r\n\r\n<p>Features</p>\r\n\r\n<p>Sensors Fingerprint (under display, ultrasonic), accelerometer, proximity, gyro, compass, barometer</p>\r\n\r\n<p>Two-way satellite communication</p>\r\n\r\n<p>Battery</p>\r\n\r\n<p>Type Si/C Li-Ion 5410 mAh &ndash; Global</p>\r\n\r\n<p>Si/C Li-Ion 6000 mAh &ndash; China</p>\r\n\r\n<p>Charging 90W wired, PD3.0, QC3+</p>\r\n\r\n<p>80W wireless</p>\r\n\r\n<p>10W reverse wireless</p>\r\n\r\n<p>Misc</p>\r\n\r\n<p>Colors Black, White, Silver Chrome, Green</p>\r\n\r\n<p>Price &euro;&thinsp;1,499.90 / &pound;&thinsp;1,271.90</p>\r\n\r\n<p>Tests</p>\r\n\r\n<p>Loudspeaker -23.9 LUFS (Very good)</p>\r\n\r\n<p>Battery (new)</p>\r\n\r\n<p>Active use score 16:13h</p>\r\n', '<p>We can not guarantee that the information on this page is 100% correct.</p>\r\n\r\n<p><strong>Source:</strong> GSMArena</p>\r\n', '1749374463.jpg', '1749982560_0.', 0, 0, '2025-06-08 09:21:03'),
(66, 66, '<p>Network</p>\r\n\r\n<p>Technology GSM / CDMA / HSPA / CDMA2000 / LTE / 5G</p>\r\n\r\n<p>Launch</p>\r\n\r\n<p>Announced 2025, January 02</p>\r\n\r\n<p>Status Available. Released 2025, January 02</p>\r\n\r\n<p>Body</p>\r\n\r\n<p>Dimensions 161 x 75.2 x 8.1 mm (6.34 x 2.96 x 0.32 in)</p>\r\n\r\n<p>Weight 203.5 g (7.20 oz)</p>\r\n\r\n<p>SIM Nano-SIM + Nano-SIM</p>\r\n\r\n<p>IP68 dust tight and water resistant (immersible up to 2m for 30 min)</p>\r\n\r\n<p>Display</p>\r\n\r\n<p>Type AMOLED, 68B colors, 120Hz, Dolby Vision, HDR10+, HDR Vivid, 1400 nits (HBM), 3200 nits (peak)</p>\r\n\r\n<p>Size 6.67 inches, 107.4 cm2 (~88.7% screen-to-body ratio)</p>\r\n\r\n<p>Resolution 1220 x 2712 pixels, 20:9 ratio (~446 ppi density)</p>\r\n\r\n<p>Platform</p>\r\n\r\n<p>OS Android 15, HyperOS 2</p>\r\n\r\n<p>Chipset Mediatek Dimensity 8400 Ultra (4 nm)</p>\r\n\r\n<p>CPU Octa-core (1&times;3.25 GHz Cortex-A725 &amp; 3&times;3.0 GHz Cortex-A725 &amp; 4&times;2.1 GHz Cortex-A725)</p>\r\n\r\n<p>GPU G720 MC7</p>\r\n\r\n<p>Memory</p>\r\n\r\n<p>Card slot No</p>\r\n\r\n<p>Internal 256GB 12GB RAM, 256GB 16GB RAM, 512GB 12GB RAM, 512GB 16GB RAM</p>\r\n\r\n<p>UFS 4.0</p>\r\n\r\n<p>Main Camera</p>\r\n\r\n<p>Dual 50 MP, f/1.5, 26mm (wide), 1/1.95&Prime;, 0.8&micro;m, PDAF, OIS</p>\r\n\r\n<p>8 MP, f/2.2, 15mm (ultrawide), 1/4.0&Prime;, 1.12&micro;m</p>\r\n\r\n<p>Features LED flash, HDR, panorama</p>\r\n\r\n<p>Video 4K@24/30/60fps, 1080p@30/60/120/240/960fps, gyro-EIS</p>\r\n\r\n<p>Selfie camera</p>\r\n\r\n<p>Single 20 MP, f/2.2, (wide), 1/4&Prime;</p>\r\n\r\n<p>Video 1080p@30fps</p>\r\n\r\n<p>Sound</p>\r\n\r\n<p>Loudspeaker Yes, with stereo speakers</p>\r\n\r\n<p>3.5mm jack No</p>\r\n\r\n<p>24-bit/192kHz Hi-Res &amp; Hi-Res Wireless audio</p>\r\n\r\n<p>Comms</p>\r\n\r\n<p>WLAN Wi-Fi 802.11 a/b/g/n/ac/6, dual-band, Wi-Fi Direct</p>\r\n\r\n<p>Bluetooth 6.0, A2DP, LE, aptX, LHDC 5</p>\r\n\r\n<p>Positioning GPS (L1+L5), GLONASS (G1), BDS (B1I+B1c+B2a), GALILEO (E1+E5a), QZSS (L1+L5), NavIC (L5)</p>\r\n\r\n<p>NFC Yes</p>\r\n\r\n<p>Infrared port Yes</p>\r\n\r\n<p>Radio No</p>\r\n\r\n<p>USB USB Type-C 2.0, OTG</p>\r\n\r\n<p>Features</p>\r\n\r\n<p>Sensors Fingerprint (under display, optical), accelerometer, gyro, proximity, compass</p>\r\n\r\n<p>Battery</p>\r\n\r\n<p>Type Si/C Li-Ion 6550 mAh</p>\r\n\r\n<p>Charging 90W wired, PD3.0, QC3+, 100% in 45 min</p>\r\n\r\n<p>Misc</p>\r\n\r\n<p>Colors Black, White, Blue</p>\r\n\r\n<p>Price About 270 EUR</p>\r\n', '<p>We can not guarantee that the information on this page is 100% correct.</p>\r\n\r\n<p><strong>Source:</strong> GSMArena</p>\r\n', '1749374678.jpg', '1749982574_0.', 0, 0, '2025-06-08 09:24:38'),
(67, 67, '<p>Network</p>\r\n\r\n<p>Technology GSM / HSPA / LTE / 5G</p>\r\n\r\n<p>Launch</p>\r\n\r\n<p>Announced 2025, March 27</p>\r\n\r\n<p>Status Available. Released 2025, March 27</p>\r\n\r\n<p>Body</p>\r\n\r\n<p>Dimensions 160.3 x 75 x 8.4 mm (6.31 x 2.95 x 0.33 in)</p>\r\n\r\n<p>Weight 212 g (7.48 oz)</p>\r\n\r\n<p>Build Glass front (Shield Glass), glass back, aluminum frame</p>\r\n\r\n<p>SIM Nano-SIM + Nano-SIM</p>\r\n\r\n<p>IP68 dust tight and water resistant (immersible up to 2.5m for 30 min)</p>\r\n\r\n<p>Display</p>\r\n\r\n<p>Type AMOLED, 68B colors, 120Hz, Dolby Vision, HDR10+, 1800 nits (HBM), 3200 nits (peak)</p>\r\n\r\n<p>Size 6.67 inches, 107.4 cm2 (~89.3% screen-to-body ratio)</p>\r\n\r\n<p>Resolution 1440 x 3200 pixels, 20:9 ratio (~526 ppi density)</p>\r\n\r\n<p>Protection Poco Shield Glass</p>\r\n\r\n<p>Platform</p>\r\n\r\n<p>OS Android 15, HyperOS 2</p>\r\n\r\n<p>Chipset Qualcomm SM8750-AB Snapdragon 8 Elite (3 nm)</p>\r\n\r\n<p>CPU Octa-core (2&times;4.32 GHz Oryon V2 Phoenix L + 6&times;3.53 GHz Oryon V2 Phoenix M)</p>\r\n\r\n<p>GPU Adreno 830</p>\r\n\r\n<p>Memory</p>\r\n\r\n<p>Card slot No</p>\r\n\r\n<p>Internal 256GB 12GB RAM, 512GB 16GB RAM</p>\r\n\r\n<p>UFS 4.1</p>\r\n\r\n<p>Main Camera</p>\r\n\r\n<p>Triple 50 MP, f/1.6, 24mm (wide), 1/1.55&Prime;, 1.0&micro;m, multi-directional PDAF, OIS</p>\r\n\r\n<p>50 MP, f/2.0, 60mm (telephoto), 1/2.76&Prime;, 0.64&micro;m, multi-directional PDAF (10cm &ndash; &infin;), OIS, 2.5x optical zoom</p>\r\n\r\n<p>32 MP, f/2.2, 15mm, 120˚ (ultrawide), 1/3.42&Prime;, 0.64&micro;m</p>\r\n\r\n<p>Features Color spectrum sensor, LED flash, HDR, panorama</p>\r\n\r\n<p>Video 8K@24fps, 4K@24/30/60fps, 1080p@30/60/120/240/960fps, 720p@1920fps, gyro-EIS</p>\r\n\r\n<p>Selfie camera</p>\r\n\r\n<p>Single 32 MP, f/2.0, 24mm, (wide), 1/3.42&Prime;, 0.64&micro;m</p>\r\n\r\n<p>Features HDR</p>\r\n\r\n<p>Video 1080p@30/60fps, gyro-EIS</p>\r\n\r\n<p>Sound</p>\r\n\r\n<p>Loudspeaker Yes, with stereo speakers</p>\r\n\r\n<p>3.5mm jack No</p>\r\n\r\n<p>24-bit/192kHz Hi-Res &amp; Hi-Res Wireless audio</p>\r\n\r\n<p>Snapdragon Sound</p>\r\n\r\n<p>Comms</p>\r\n\r\n<p>WLAN Wi-Fi 802.11 a/b/g/n/ac/6e/7, dual-band, Wi-Fi Direct</p>\r\n\r\n<p>Bluetooth 6.0, A2DP, LE, aptX HD, aptX Adaptive, aptX Lossless, LHDC 5</p>\r\n\r\n<p>Positioning GPS (L1+L5), GLONASS (G1), BDS (B1I+B1c+B2a), GALILEO (E1+E5a), QZSS (L1+L5), NavIC (L5)</p>\r\n\r\n<p>NFC Yes</p>\r\n\r\n<p>Infrared port Yes</p>\r\n\r\n<p>Radio No</p>\r\n\r\n<p>USB USB Type-C, OTG</p>\r\n\r\n<p>Features</p>\r\n\r\n<p>Sensors Fingerprint (under display, ultrasonic), accelerometer, proximity, gyro, compass</p>\r\n\r\n<p>Battery</p>\r\n\r\n<p>Type 5300 mAh</p>\r\n\r\n<p>Charging 120W wired, PD3.0, QC3+, 100% in 34 min</p>\r\n\r\n<p>50W wireless</p>\r\n\r\n<p>Misc</p>\r\n\r\n<p>Colors Black, Yellow</p>\r\n\r\n<p>Models 24122RKC7G</p>\r\n\r\n<p>Price &euro;&thinsp;749.90</p>\r\n\r\n<p>Tests</p>\r\n\r\n<p>Performance AnTuTu: 2580520 (v10)</p>\r\n\r\n<p>GeekBench: 8887 (v6)</p>\r\n\r\n<p>3DMark: 6204 (Wild Life Extreme)</p>\r\n\r\n<p>Display 1506 nits max brightness (measured)</p>\r\n\r\n<p>Loudspeaker -24.7 LUFS (Very good)</p>\r\n\r\n<p>Battery (new)</p>\r\n\r\n<p>Active use score 13:32h</p>\r\n', '<p>We can not guarantee that the information on this page is 100% correct.</p>\r\n\r\n<p><strong>Source:</strong> GSMArena</p>\r\n', '1749374839.jpg', '1749982588_0.', 0, 0, '2025-06-08 09:27:19'),
(68, 68, '<p>Network</p>\r\n\r\n<p>Technology GSM / HSPA / LTE</p>\r\n\r\n<p>Launch</p>\r\n\r\n<p>Announced 2025, March 21</p>\r\n\r\n<p>Status Available. Released 2025, March 21</p>\r\n\r\n<p>Body</p>\r\n\r\n<p>Dimensions 171.7 x 77.8 x 8.3 mm (6.76 x 3.06 x 0.33 in)</p>\r\n\r\n<p>Weight 193 g (6.81 oz)</p>\r\n\r\n<p>SIM Nano-SIM + Nano-SIM</p>\r\n\r\n<p>Dust and splash resistant</p>\r\n\r\n<p>Display</p>\r\n\r\n<p>Type IPS LCD, 120Hz, 1500 nits (HBM)</p>\r\n\r\n<p>Size 6.88 inches, 112.4 cm2 (~84.1% screen-to-body ratio)</p>\r\n\r\n<p>Resolution 720 x 1640 pixels (~260 ppi density)</p>\r\n\r\n<p>Platform</p>\r\n\r\n<p>OS Android 15 (Go edition), up to 2 major Android upgrades, HyperOS</p>\r\n\r\n<p>Chipset Unisoc T7250 (12 nm)</p>\r\n\r\n<p>CPU Octa-core (2&times;1.8 GHz Cortex-A75 &amp; 6&times;1.6 GHz Cortex-A55)</p>\r\n\r\n<p>GPU Mali-G57 MP1</p>\r\n\r\n<p>Memory</p>\r\n\r\n<p>Card slot microSDXC (dedicated slot)</p>\r\n\r\n<p>Internal 64GB 3GB RAM, 64GB 4GB RAM, 128GB 4GB RAM, 128GB 6GB RAM</p>\r\n\r\n<p>eMMC 5.1</p>\r\n\r\n<p>Main Camera</p>\r\n\r\n<p>Single 32 MP, f/1.8, (wide)</p>\r\n\r\n<p>Auxiliary lens</p>\r\n\r\n<p>Features LED flash, HDR</p>\r\n\r\n<p>Video 1080p@30fps</p>\r\n\r\n<p>Selfie camera</p>\r\n\r\n<p>Single 8 MP, f/2.0, (wide)</p>\r\n\r\n<p>Video 1080p@30fps</p>\r\n\r\n<p>Sound</p>\r\n\r\n<p>Loudspeaker Yes</p>\r\n\r\n<p>3.5mm jack Yes</p>\r\n\r\n<p>Comms</p>\r\n\r\n<p>WLAN Wi-Fi 802.11 a/b/g/n/ac, dual-band</p>\r\n\r\n<p>Bluetooth 5.2, A2DP, LE</p>\r\n\r\n<p>Positioning GPS</p>\r\n\r\n<p>NFC No</p>\r\n\r\n<p>Radio Unspecified</p>\r\n\r\n<p>USB USB Type-C 2.0</p>\r\n\r\n<p>Features</p>\r\n\r\n<p>Sensors Fingerprint (side-mounted), accelerometer, proximity, compass</p>\r\n\r\n<p>Battery</p>\r\n\r\n<p>Type 5200 mAh</p>\r\n\r\n<p>Charging 18W wired</p>\r\n\r\n<p>Misc</p>\r\n\r\n<p>Colors Black, Blue, Green, Silver</p>\r\n\r\n<p>Models 25028PC03G</p>\r\n\r\n<p>Price $&thinsp;129.99 / &euro;&thinsp;99.99</p>\r\n', '<p>We can not guarantee that the information on this page is 100% correct.</p>\r\n\r\n<p><strong>Source:</strong> GSMArena</p>\r\n', '1749375038.jpg', '1749982605_0.', 0, 0, '2025-06-08 09:30:38'),
(69, 69, '<p>Network</p>\r\n\r\n<p>Technology GSM / HSPA / LTE / 5G</p>\r\n\r\n<p>2G bands GSM 850 / 900 / 1800 / 1900</p>\r\n\r\n<p>3G bands HSDPA 800 / 850 / 900 / 1700(AWS) / 1900 / 2100</p>\r\n\r\n<p>4G bands 1, 2, 3, 4, 5, 7, 8, 12, 13, 17, 18, 19, 20, 26, 28, 32, 38, 40, 41, 42, 48, 66</p>\r\n\r\n<p>5G bands 1, 2, 3, 5, 7, 8, 12, 20, 26, 28, 38, 40, 41, 48, 66, 77, 78 SA/NSA</p>\r\n\r\n<p>Speed HSPA, LTE, 5G</p>\r\n\r\n<p>Launch</p>\r\n\r\n<p>Announced 2025, January 10</p>\r\n\r\n<p>Status Available. Released 2025, January 15</p>\r\n\r\n<p>Body</p>\r\n\r\n<p>Dimensions 162.5 x 74.7 x 8.8 mm (6.40 x 2.94 x 0.35 in)</p>\r\n\r\n<p>Weight 205 g or 210 g (7.23 oz)</p>\r\n\r\n<p>Build Glass front (Gorilla Glass Victus 2), glass back (Gorrila Glass 7i) or silicone polymer back (eco leather), aluminum frame</p>\r\n\r\n<p>SIM Nano-SIM + eSIM</p>\r\n\r\n<p>Nano-SIM + Nano-SIM</p>\r\n\r\n<p>IP68 dust/water resistant (up to 1.5m for 30 min)</p>\r\n\r\n<p>Display</p>\r\n\r\n<p>Type AMOLED, 68B colors, 120Hz, HDR10+, Dolby Vision, 3000 nits (peak)</p>\r\n\r\n<p>Size 6.67 inches, 107.4 cm2 (~88.5% screen-to-body ratio)</p>\r\n\r\n<p>Resolution 1220 x 2712 pixels, 20:9 ratio (~446 ppi density)</p>\r\n\r\n<p>Protection Corning Gorilla Glass Victus 2</p>\r\n\r\n<p>Always-on display</p>\r\n\r\n<p>Platform</p>\r\n\r\n<p>OS Android 14, up to 3 major Android upgrades, HyperOS</p>\r\n\r\n<p>Chipset Qualcomm SM7635 Snapdragon 7s Gen 3 (4 nm)</p>\r\n\r\n<p>CPU Octa-core (1&times;2.5 GHz Cortex-A720 &amp; 3&times;2.4 GHz Cortex-A720 &amp; 4&times;1.8 GHz Cortex-A520)</p>\r\n\r\n<p>GPU Adreno 710 (940 MHz)</p>\r\n\r\n<p>Memory</p>\r\n\r\n<p>Card slot No</p>\r\n\r\n<p>Internal 256GB 8GB RAM, 256GB 12GB RAM, 512GB 12GB RAM</p>\r\n\r\n<p>UFS 2.2</p>\r\n\r\n<p>Main Camera</p>\r\n\r\n<p>Triple 200 MP, f/1.7, 23mm (wide), 1/1.4&Prime;, 0.56&micro;m, multi-directional PDAF, OIS</p>\r\n\r\n<p>8 MP, f/2.2, 15mm, 120˚ (ultrawide), 1/4.0&Prime;, 1.12&micro;m</p>\r\n\r\n<p>2 MP, f/2.4, (macro)</p>\r\n\r\n<p>Features LED flash, HDR, panorama</p>\r\n\r\n<p>Video 4K@24/30fps, 1080p@30/60/120fps, gyro-EIS, OIS</p>\r\n\r\n<p>Selfie camera</p>\r\n\r\n<p>Single 20 MP, f/2.2, 21mm (wide), 1/4.0&Prime;, 0.7&micro;m</p>\r\n\r\n<p>Features HDR, panorama</p>\r\n\r\n<p>Video 1080p@30/60fps</p>\r\n\r\n<p>Sound</p>\r\n\r\n<p>Loudspeaker Yes, with stereo speakers (with Dolby Atmos)</p>\r\n\r\n<p>3.5mm jack No</p>\r\n\r\n<p>24-bit/192kHz Hi-Res &amp; Hi-Res wireless audio</p>\r\n\r\n<p>Comms</p>\r\n\r\n<p>WLAN Wi-Fi 802.11 a/b/g/n/ac/6/6e, dual-band, Wi-Fi Direct (/6e is market/region dependent)</p>\r\n\r\n<p>Bluetooth 5.4, A2DP, LE</p>\r\n\r\n<p>Positioning GPS (L1+L5), GALILEO, GLONASS, QZSS, BDS</p>\r\n\r\n<p>NFC Yes (market/region dependent)</p>\r\n\r\n<p>Infrared port Yes</p>\r\n\r\n<p>Radio Unspecified</p>\r\n\r\n<p>USB USB Type-C 2.0, OTG</p>\r\n\r\n<p>Features</p>\r\n\r\n<p>Sensors Fingerprint (under display, optical), accelerometer, gyro, compass, proximity</p>\r\n\r\n<p>Circle to Search</p>\r\n\r\n<p>Battery</p>\r\n\r\n<p>Type 5110 mAh</p>\r\n\r\n<p>Charging 120W wired</p>\r\n\r\n<p>Misc</p>\r\n\r\n<p>Colors Lavender Purple, Frost Blue, Midnight Black</p>\r\n\r\n<p>Models 24094RAD4G</p>\r\n\r\n<p>SAR EU 0.99 W/kg (head) 1.00 W/kg (body)</p>\r\n\r\n<p>Price $&thinsp;412.51 / &euro;&thinsp;419.00 / &pound;&thinsp;349.00</p>\r\n\r\n<p>Tests</p>\r\n\r\n<p>Performance AnTuTu: 750292 (v10)</p>\r\n\r\n<p>GeekBench: 3234 (v6)</p>\r\n\r\n<p>3DMark: 1049 (Wild Life Extreme)</p>\r\n\r\n<p>Display 1200 nits max brightness (measured)</p>\r\n\r\n<p>Loudspeaker -26.5 LUFS (Good)</p>\r\n\r\n<p>Battery (new)</p>\r\n\r\n<p>Active use score 10:40h</p>\r\n', '<p>We can not guarantee that the information on this page is 100% correct.</p>\r\n\r\n<p><strong>Source:</strong> GSMArena</p>\r\n', '1749375490.jpg', '1749982622_0.', 0, 0, '2025-06-08 09:38:10');
INSERT INTO `product_image` (`id`, `product_id`, `specification`, `description`, `image`, `demo_image`, `created_by`, `updated_by`, `created_at`) VALUES
(70, 70, '<p>Network</p>\r\n\r\n<p>Technology GSM / HSPA / LTE</p>\r\n\r\n<p>Launch</p>\r\n\r\n<p>Announced 2024, August 30</p>\r\n\r\n<p>Status Available. Released 2024, August 30</p>\r\n\r\n<p>Body</p>\r\n\r\n<p>Dimensions 171.9 x 77.8 x 8.2 mm (6.77 x 3.06 x 0.32 in)</p>\r\n\r\n<p>Weight 204 / 207 / 211 g (7.20 oz)</p>\r\n\r\n<p>Build Glass front, plastic frame, glass back or silicone polymer (eco leather) back</p>\r\n\r\n<p>SIM Dual SIM (Nano-SIM, dual stand-by)</p>\r\n\r\n<p>Display</p>\r\n\r\n<p>Type IPS LCD, 120Hz, 450 nits (typ), 600 nits (HBM)</p>\r\n\r\n<p>Size 6.88 inches, 112.4 cm2 (~84.0% screen-to-body ratio)</p>\r\n\r\n<p>Resolution 720 x 1640 pixels (~260 ppi density)</p>\r\n\r\n<p>Platform</p>\r\n\r\n<p>OS Android 14, HyperOS</p>\r\n\r\n<p>Chipset Mediatek Helio G81 Ultra</p>\r\n\r\n<p>CPU Octa-core (2&times;2.0 GHz Cortex-A75 &amp; 6&times;1.8 GHz Cortex-A55)</p>\r\n\r\n<p>GPU Mali-G52 MC2</p>\r\n\r\n<p>Memory</p>\r\n\r\n<p>Card slot microSDXC (dedicated slot)</p>\r\n\r\n<p>Internal 128GB 4GB RAM, 128GB 6GB RAM, 128GB 8GB RAM, 256GB 4GB RAM, 256GB 8GB RAM</p>\r\n\r\n<p>eMMC 5.1</p>\r\n\r\n<p>Main Camera</p>\r\n\r\n<p>Dual 50 MP, f/1.8, 28mm (wide), PDAF</p>\r\n\r\n<p>2 MP, f/2.4, (depth)</p>\r\n\r\n<p>0.08 MP (auxiliary lens)</p>\r\n\r\n<p>Features LED flash, HDR</p>\r\n\r\n<p>Video 1080p@30fps</p>\r\n\r\n<p>Selfie camera</p>\r\n\r\n<p>Single 13 MP, f/2.0</p>\r\n\r\n<p>Features HDR</p>\r\n\r\n<p>Video 1080p@30fps</p>\r\n\r\n<p>Sound</p>\r\n\r\n<p>Loudspeaker Yes</p>\r\n\r\n<p>3.5mm jack Yes</p>\r\n\r\n<p>Comms</p>\r\n\r\n<p>WLAN Wi-Fi 802.11 a/b/g/n/ac, dual-band</p>\r\n\r\n<p>Bluetooth 5.4, A2DP, LE</p>\r\n\r\n<p>Positioning GPS, GLONASS, GALILEO, BDS</p>\r\n\r\n<p>NFC Yes (market/region dependent)</p>\r\n\r\n<p>Radio FM radio</p>\r\n\r\n<p>USB USB Type-C 2.0</p>\r\n\r\n<p>Features</p>\r\n\r\n<p>Sensors Fingerprint (side-mounted), accelerometer, compass</p>\r\n\r\n<p>Virtual proximity sensing</p>\r\n\r\n<p>Battery</p>\r\n\r\n<p>Type 5160 mAh, non-removable</p>\r\n\r\n<p>Charging 18W wired, PD</p>\r\n\r\n<p>Misc</p>\r\n\r\n<p>Colors Midnight Black, Sage Green, Dreamy Purple, Starry Blue</p>\r\n\r\n<p>Models 2411DRN47C</p>\r\n\r\n<p>Price $&thinsp;131.97 / &euro;&thinsp;135.50 / &pound;&thinsp;176.38</p>\r\n', '<p>We can not guarantee that the information on this page is 100% correct.</p>\r\n\r\n<p><strong>Source:</strong> GSMArena</p>\r\n', '1749375663.jpg', '1749982635_0.', 0, 0, '2025-06-08 09:41:03'),
(71, 71, '<p>NETWORK</p>\r\n\r\n<p>Technology GSM / HSPA / LTE</p>\r\n\r\n<p>LAUNCH</p>\r\n\r\n<p>Announced 2024, March 19</p>\r\n\r\n<p>Status Available. Released 2024, April 13</p>\r\n\r\n<p>BODY</p>\r\n\r\n<p>Dimensions 161.3 x 75 x 6.9 mm (6.35 x 2.95 x 0.27 in)</p>\r\n\r\n<p>Weight 168 g (5.93 oz)</p>\r\n\r\n<p>SIM Single SIM (Nano-SIM) or Dual SIM (Nano-SIM, dual stand-by)</p>\r\n\r\n<p>DISPLAY</p>\r\n\r\n<p>Type OLED, 1B colors, HDR, 120Hz</p>\r\n\r\n<p>Size 6.7 inches, 108.3 cm2 (~89.5% screen-to-body ratio)</p>\r\n\r\n<p>Resolution 1084 x 2412 pixels, 20:9 ratio (~395 ppi density)</p>\r\n\r\n<p>PLATFORM</p>\r\n\r\n<p>OS EMUI 14, no Google Play Services</p>\r\n\r\n<p>Chipset Qualcomm SM7325 Snapdragon 778G 4G (6 nm)</p>\r\n\r\n<p>CPU Octa-core (4&times;2.4 GHz Kryo 670 &amp; 4&times;1.8 GHz Kryo 670)</p>\r\n\r\n<p>GPU Adreno 642L</p>\r\n\r\n<p>MEMORY</p>\r\n\r\n<p>Card slot No</p>\r\n\r\n<p>Internal 256GB 8GB RAM</p>\r\n\r\n<p>MAIN CAMERA</p>\r\n\r\n<p>Dual 50 MP, f/1.9, (wide), Laser AF, PDAF</p>\r\n\r\n<p>8 MP, f/2.2, 112˚ (ultrawide)</p>\r\n\r\n<p>Features LED flash, panorama, HDR</p>\r\n\r\n<p>Video 4K@30fps, 1080p@30fps, gyro-EIS</p>\r\n\r\n<p>SELFIE CAMERA</p>\r\n\r\n<p>Dual 60 MP, f/2.4, 100˚ (ultrawide)</p>\r\n\r\n<p>Features HDR</p>\r\n\r\n<p>Video 4K@30fps, 1080p@30fps, gyro-EIS</p>\r\n\r\n<p>SOUND</p>\r\n\r\n<p>Loudspeaker Yes, with stereo speakers</p>\r\n\r\n<p>3.5mm jack No</p>\r\n\r\n<p>COMMS</p>\r\n\r\n<p>WLAN Wi-Fi 802.11 a/b/g/n/ac/6, dual-band, Wi-Fi Direct</p>\r\n\r\n<p>Bluetooth 5.2, A2DP, LE</p>\r\n\r\n<p>Positioning GPS (L1+L5), GLONASS, BDS (B1I+B1c+B2a), GALILEO (E1+E5a), QZSS (L1+L5), NavIC</p>\r\n\r\n<p>NFC Yes; NFC-SIM, HCE</p>\r\n\r\n<p>Radio No</p>\r\n\r\n<p>USB USB Type-C 2.0, OTG</p>\r\n\r\n<p>FEATURES</p>\r\n\r\n<p>Sensors Fingerprint (under display, optical), accelerometer, gyro, compass, color spectrum</p>\r\n\r\n<p>Virtual proximity sensing</p>\r\n\r\n<p>BATTERY</p>\r\n\r\n<p>Type 4500 mAh, non-removable</p>\r\n\r\n<p>Charging 66W wired, 3-62% in 15 min, 3-100% in 30 min (advertised)</p>\r\n\r\n<p>Reverse wired</p>\r\n\r\n<p>MISC</p>\r\n\r\n<p>Colors Black, Green, White, Gold</p>\r\n\r\n<p>Models FOA-LX9</p>\r\n\r\n<p>Price &euro;&thinsp;499.00 / &pound;&thinsp;529.46</p>\r\n', '<p>We can not guarantee that the information on this page is 100% correct.</p>\r\n\r\n<p><strong>Source:</strong> GSMArena</p>\r\n', '1749375882.jpg', '1749982653_0.', 0, 0, '2025-06-08 09:44:42'),
(72, 72, '<p>NETWORK</p>\r\n\r\n<p>Technology GSM / CDMA / HSPA / CDMA2000 / LTE / 5G</p>\r\n\r\n<p>2G bands GSM 850 / 900 / 1800 / 1900 &ndash; SIM 1 &amp; SIM 2</p>\r\n\r\n<p>CDMA 800</p>\r\n\r\n<p>3G bands HSDPA 800 / 850 / 900 / 1700(AWS) / 1900 / 2100</p>\r\n\r\n<p>CDMA2000 1x</p>\r\n\r\n<p>4G bands 1, 2, 3, 4, 5, 6, 7, 8, 9, 12, 17, 18, 19, 20, 26, 28, 34, 38, 39, 40, 41, 42</p>\r\n\r\n<p>5G bands SA/NSA &ndash; China only</p>\r\n\r\n<p>Speed HSPA, LTE, 5G</p>\r\n\r\n<p>LAUNCH</p>\r\n\r\n<p>Announced 2024, April 18</p>\r\n\r\n<p>Status Available. Released 2024, May 06</p>\r\n\r\n<p>BODY</p>\r\n\r\n<p>Dimensions 157.6 x 74.3 x 8 mm (6.20 x 2.93 x 0.31 in)</p>\r\n\r\n<p>Weight 207 g (7.30 oz)</p>\r\n\r\n<p>Build Glass front, aluminum frame</p>\r\n\r\n<p>SIM Dual SIM (Nano-SIM, dual stand-by)</p>\r\n\r\n<p>IP68 dust/water resistant (up to 1.5m for 30 min)</p>\r\n\r\n<p>DISPLAY</p>\r\n\r\n<p>Type LTPO OLED, 1B colors, HDR, 120Hz, 2500 nits (peak)</p>\r\n\r\n<p>Size 6.6 inches, 105.5 cm2 (~90.1% screen-to-body ratio)</p>\r\n\r\n<p>Resolution 1256 x 2760 pixels (~460 ppi density)</p>\r\n\r\n<p>Protection Kunlun Glass 2</p>\r\n\r\n<p>PLATFORM</p>\r\n\r\n<p>OS EMUI 14.2 (International), HarmonyOS 4.2 (China)</p>\r\n\r\n<p>Chipset Kirin 9010 (7 nm)</p>\r\n\r\n<p>CPU Octa-core (1&times;2.3 GHz Taishan Big &amp; 3&times;2.18 GHz Taishan Mid &amp; 4&times;1.55 GHz Cortex-A510)</p>\r\n\r\n<p>MEMORY</p>\r\n\r\n<p>Card slot No</p>\r\n\r\n<p>Internal 256GB 12GB RAM, 512GB 12GB RAM, 1TB 12GB RAM</p>\r\n\r\n<p>MAIN CAMERA</p>\r\n\r\n<p>Triple 50 MP, f/1.4-4.0, 25mm (wide), 1/1.3&Prime;, PDAF, Laser AF, OIS</p>\r\n\r\n<p>12 MP, f/3.4, 125mm (periscope telephoto), PDAF, OIS, 5x optical zoom</p>\r\n\r\n<p>13 MP, f/2.2, 13mm (ultrawide)</p>\r\n\r\n<p>Features LED flash, panorama, HDR</p>\r\n\r\n<p>Video 4K, 1080p, HDR, gyro-EIS, OIS</p>\r\n\r\n<p>SELFIE CAMERA</p>\r\n\r\n<p>Single 13 MP, f/2.4, (ultrawide)</p>\r\n\r\n<p>Features HDR, panorama</p>\r\n\r\n<p>Video Yes, HDR</p>\r\n\r\n<p>SOUND</p>\r\n\r\n<p>Loudspeaker Yes, with stereo speakers</p>\r\n\r\n<p>3.5mm jack No</p>\r\n\r\n<p>COMMS</p>\r\n\r\n<p>WLAN Wi-Fi 802.11 a/b/g/n/ac/6, dual-band, Wi-Fi Direct</p>\r\n\r\n<p>Bluetooth 5.2, A2DP, LE, L2HC</p>\r\n\r\n<p>Positioning GPS (L1+L5), GLONASS (L1), BDS (B1I+B1c+B2a+B2b), GALILEO (E1+E5a+E5b), QZSS (L1+L5), NavIC</p>\r\n\r\n<p>NFC Yes; NFC-SIM, HCE</p>\r\n\r\n<p>Radio No</p>\r\n\r\n<p>USB USB Type-C 3.1, OTG, DisplayPort 1.2</p>\r\n\r\n<p>FEATURES</p>\r\n\r\n<p>Sensors Fingerprint (under display, optical), accelerometer, proximity, gyro, compass, color spectrum</p>\r\n\r\n<p>BATTERY</p>\r\n\r\n<p>Type Li-Po 4900 mAh, non-removable</p>\r\n\r\n<p>Charging 66W wired</p>\r\n\r\n<p>50W wireless</p>\r\n\r\n<p>7.5W reverse wireless</p>\r\n\r\n<p>5W reverse wired</p>\r\n', '<p>We can not guarantee that the information on this page is 100% correct.</p>\r\n\r\n<p><strong>Source:</strong> GSMArena</p>\r\n', '1749376030.jpg', '1749982669_0.', 0, 0, '2025-06-08 09:47:10'),
(73, 73, '<p>NETWORK</p>\r\n\r\n<p>Technology GSM / HSPA / LTE</p>\r\n\r\n<p>2G bands GSM 850 / 900 / 1800 / 1900 &ndash; SIM 1 &amp; SIM 2</p>\r\n\r\n<p>3G bands HSDPA 850 / 900 / 2100</p>\r\n\r\n<p>4G bands LTE</p>\r\n\r\n<p>Speed HSPA, LTE</p>\r\n\r\n<p>LAUNCH</p>\r\n\r\n<p>Announced 2024, January 26</p>\r\n\r\n<p>Status Available. Released 2024, February</p>\r\n\r\n<p>BODY</p>\r\n\r\n<p>Dimensions 168.3 x 77.7 x 8.9 mm (6.63 x 3.06 x 0.35 in)</p>\r\n\r\n<p>Weight 207 g (7.30 oz)</p>\r\n\r\n<p>SIM Dual SIM (Nano-SIM, dual stand-by)</p>\r\n\r\n<p>DISPLAY</p>\r\n\r\n<p>Type TFT LCD</p>\r\n\r\n<p>Size 6.75 inches, 110.0 cm2 (~84.1% screen-to-body ratio)</p>\r\n\r\n<p>Resolution 720 x 1600 pixels, 20:9 ratio (~260 ppi density)</p>\r\n\r\n<p>Always-on display</p>\r\n\r\n<p>PLATFORM</p>\r\n\r\n<p>OS HarmonyOS 4.0</p>\r\n\r\n<p>Chipset Kirin 710A (14 nm)</p>\r\n\r\n<p>CPU Octa-core (4&times;2.0 GHz Cortex-A73 &amp; 4&times;1.7 GHz Cortex-A53)</p>\r\n\r\n<p>GPU Mali-G51 MP4</p>\r\n\r\n<p>MEMORY</p>\r\n\r\n<p>Card slot NM (Nano Memory), up to 256GB (uses shared SIM slot)</p>\r\n\r\n<p>Internal 128GB 8GB RAM</p>\r\n\r\n<p>MAIN CAMERA</p>\r\n\r\n<p>Dual 50 MP, f/1.8, (wide), AF</p>\r\n\r\n<p>2 MP, f/2.4, (macro)</p>\r\n\r\n<p>Features LED flash, HDR, panorama</p>\r\n\r\n<p>Video 1080p@30fps</p>\r\n\r\n<p>SELFIE CAMERA</p>\r\n\r\n<p>Single 8 MP, f/2.0, (wide)</p>\r\n\r\n<p>Video 1080p@30fps</p>\r\n\r\n<p>SOUND</p>\r\n\r\n<p>Loudspeaker Yes</p>\r\n\r\n<p>3.5mm jack No</p>\r\n\r\n<p>COMMS</p>\r\n\r\n<p>WLAN Wi-Fi 802.11 a/b/g/n/ac, dual-band</p>\r\n\r\n<p>Bluetooth 5.1, A2DP, LE</p>\r\n\r\n<p>Positioning GPS, GLONASS, GALILEO, BDS, QZSS</p>\r\n\r\n<p>NFC No</p>\r\n\r\n<p>Radio No</p>\r\n\r\n<p>USB USB Type-C 2.0, OTG</p>\r\n\r\n<p>FEATURES</p>\r\n\r\n<p>Sensors Fingerprint (side-mounted), accelerometer, proximity, compass</p>\r\n\r\n<p>BATTERY</p>\r\n\r\n<p>Type 6000 mAh, non-removable</p>\r\n\r\n<p>Charging 22.5W wired</p>\r\n\r\n<p>MISC</p>\r\n\r\n<p>Colors Black, Green</p>\r\n', '<p>We can not guarantee that the information on this page is 100% correct.</p>\r\n\r\n<p><strong>Source:</strong> GSMArena</p>\r\n', '1749376212.jpg', '1749982685_0.', 0, 0, '2025-06-08 09:50:12'),
(74, 74, '<p>NETWORK</p>\r\n\r\n<p>Technology GSM / CDMA / HSPA / LTE</p>\r\n\r\n<p>LAUNCH</p>\r\n\r\n<p>Announced 2022, July 04</p>\r\n\r\n<p>Status Available. Released 2022, July 10</p>\r\n\r\n<p>BODY</p>\r\n\r\n<p>Dimensions 164.2 x 74.5 x 7.9 mm (6.46 x 2.93 x 0.31 in)</p>\r\n\r\n<p>Weight 191 g (6.74 oz)</p>\r\n\r\n<p>SIM Dual SIM (Nano-SIM, dual stand-by)</p>\r\n\r\n<p>DISPLAY</p>\r\n\r\n<p>Type OLED, 1B colors, HDR10, 120Hz</p>\r\n\r\n<p>Size 6.78 inches, 111.4 cm2 (~91.1% screen-to-body ratio)</p>\r\n\r\n<p>Resolution 1200 x 2652 pixels (~429 ppi density)</p>\r\n\r\n<p>PLATFORM</p>\r\n\r\n<p>OS HarmonyOS 2.0</p>\r\n\r\n<p>Chipset Qualcomm SM7325 Snapdragon 778G 4G (6 nm)</p>\r\n\r\n<p>CPU Octa-core (4&times;2.4 GHz Kryo 670 &amp; 4&times;1.8 GHz Kryo 670)</p>\r\n\r\n<p>GPU Adreno 642L</p>\r\n\r\n<p>MEMORY</p>\r\n\r\n<p>Card slot No</p>\r\n\r\n<p>Internal 128GB 8GB RAM, 256GB 8GB RAM</p>\r\n\r\n<p>MAIN CAMERA</p>\r\n\r\n<p>Triple 50 MP, f/1.8, 27mm (wide), PDAF</p>\r\n\r\n<p>8 MP, f/2.2, 112˚ (ultrawide), AF</p>\r\n\r\n<p>2 MP, f/2.4, (depth)</p>\r\n\r\n<p>Features LED flash, panorama, HDR</p>\r\n\r\n<p>Video 4K, 1080p, 720p@960fps, gyro-EIS</p>\r\n\r\n<p>SELFIE CAMERA</p>\r\n\r\n<p>Dual 8 MP, f/2.2, 52mm (portrait), AF</p>\r\n\r\n<p>60 MP, f/2.4, 17mm, 100˚ (ultrawide), AF</p>\r\n\r\n<p>Features HDR</p>\r\n\r\n<p>Video 4K@30fps, 1080p@30fps, gyro-EIS</p>\r\n\r\n<p>SOUND</p>\r\n\r\n<p>Loudspeaker Yes, with stereo speakers</p>\r\n\r\n<p>3.5mm jack No</p>\r\n\r\n<p>COMMS</p>\r\n\r\n<p>WLAN Wi-Fi 802.11 a/b/g/n/a/6, dual-band, Wi-Fi Direct, hotspot</p>\r\n\r\n<p>Bluetooth 5.2, A2DP, LE</p>\r\n\r\n<p>Positioning Yes, with A-GPS. Up to tri-band: GLONASS (3), BDS (3), GALILEO (2), QZSS (2), NavIC</p>\r\n\r\n<p>NFC Yes</p>\r\n\r\n<p>Radio No</p>\r\n\r\n<p>USB USB Type-C 2.0, USB On-The-Go</p>\r\n\r\n<p>FEATURES</p>\r\n\r\n<p>Sensors Fingerprint (under display, optical), accelerometer, gyro, compass</p>\r\n\r\n<p>Virtual proximity sensing</p>\r\n\r\n<p>BATTERY</p>\r\n\r\n<p>Type Li-Po 4500 mAh, non-removable</p>\r\n\r\n<p>Charging Fast charging 100W, 20-80% in 10 min (advertised)</p>\r\n\r\n<p>Reverse charging</p>\r\n\r\n<p>MISC</p>\r\n\r\n<p>Colors Black, Silver, Green, Violet</p>\r\n\r\n<p>Models GLA-AL00</p>\r\n\r\n<p>Price About 730 EUR</p>\r\n\r\n<p>TESTS</p>\r\n\r\n<p>Display Contrast ratio: Infinite (nominal)</p>\r\n\r\n<p>Camera Photo / Video</p>\r\n\r\n<p>Loudspeaker -27.7 LUFS (Good)</p>\r\n\r\n<p>Battery life</p>\r\n\r\n<p>Endurance rating 89h</p>\r\n', '<p>We can not guarantee that the information on this page is 100% correct.</p>\r\n\r\n<p><strong>Source:</strong> GSMArena</p>\r\n', '1749376449.jpg', '1749982707_0.', 0, 0, '2025-06-08 09:54:09'),
(75, 75, '<p>NETWORK</p>\r\n\r\n<p>Technology GSM / HSPA / LTE</p>\r\n\r\n<p>LAUNCH</p>\r\n\r\n<p>Announced 2020, October 21</p>\r\n\r\n<p>Status Available. Released 2020, October 30</p>\r\n\r\n<p>BODY</p>\r\n\r\n<p>Dimensions 165.7 x 76.9 x 9.3 mm (6.52 x 3.03 x 0.37 in)</p>\r\n\r\n<p>Weight 206 g (7.27 oz)</p>\r\n\r\n<p>SIM Dual SIM (Nano-SIM, dual stand-by)</p>\r\n\r\n<p>DISPLAY</p>\r\n\r\n<p>Type IPS LCD</p>\r\n\r\n<p>Size 6.67 inches, 107.4 cm2 (~84.3% screen-to-body ratio)</p>\r\n\r\n<p>Resolution 1080 x 2400 pixels, 20:9 ratio (~395 ppi density)</p>\r\n\r\n<p>PLATFORM</p>\r\n\r\n<p>OS Android 10, EMUI 10.1, no Google Play Services</p>\r\n\r\n<p>Chipset Kirin 710A (14 nm)</p>\r\n\r\n<p>CPU Octa-core (4&times;2.0 GHz Cortex-A73 &amp; 4&times;1.7 GHz Cortex-A53)</p>\r\n\r\n<p>GPU Mali-G51 MP4</p>\r\n\r\n<p>MEMORY</p>\r\n\r\n<p>Card slot microSDXC (dedicated slot)</p>\r\n\r\n<p>Internal 64GB 4GB RAM, 128GB 4GB RAM</p>\r\n\r\n<p>MAIN CAMERA</p>\r\n\r\n<p>Quad 48 MP, f/1.8, 26mm (wide), 1/2.0&Prime;, 0.8&micro;m, PDAF</p>\r\n\r\n<p>8 MP, f/2.4, 120˚ (ultrawide), 1/4.0&Prime;, 1.12&micro;m</p>\r\n\r\n<p>2 MP, f/2.4, (macro)</p>\r\n\r\n<p>2 MP, f/2.4, (depth)</p>\r\n\r\n<p>Features LED flash, HDR, panorama</p>\r\n\r\n<p>Video 1080p@30/60fps</p>\r\n\r\n<p>SELFIE CAMERA</p>\r\n\r\n<p>Single 8 MP, f/2.0, (wide)</p>\r\n\r\n<p>Features HDR</p>\r\n\r\n<p>Video 1080p@30fps</p>\r\n\r\n<p>SOUND</p>\r\n\r\n<p>Loudspeaker Yes</p>\r\n\r\n<p>3.5mm jack Yes</p>\r\n\r\n<p>COMMS</p>\r\n\r\n<p>WLAN Wi-Fi 802.11 b/g/n, Wi-Fi Direct, hotspot</p>\r\n\r\n<p>Bluetooth 5.1, A2DP, LE</p>\r\n\r\n<p>GPS Yes, with A-GPS, GLONASS, BDS</p>\r\n\r\n<p>NFC No</p>\r\n\r\n<p>Radio FM radio</p>\r\n\r\n<p>USB USB Type-C 2.0, USB On-The-Go</p>\r\n\r\n<p>FEATURES</p>\r\n\r\n<p>Sensors Fingerprint (side-mounted), accelerometer, proximity</p>\r\n\r\n<p>BATTERY</p>\r\n\r\n<p>Type Li-Po 5000 mAh, non-removable</p>\r\n\r\n<p>Charging Fast charging 22.5W, 46% in 30 min (advertised)</p>\r\n\r\n<p>MISC</p>\r\n\r\n<p>Colors Crush Green, Blush Gold, Midnight Black</p>\r\n\r\n<p>Price About 160 EUR</p>\r\n', '<p>We can not guarantee that the information on this page is 100% correct.</p>\r\n\r\n<p><strong>Source:</strong> GSMArena</p>\r\n', '1749376752.jpg', '1749982727_0.', 0, 0, '2025-06-08 09:59:12'),
(76, 76, '<p>NETWORK</p>\r\n\r\n<p>Technology GSM / HSPA / LTE</p>\r\n\r\n<p>LAUNCH</p>\r\n\r\n<p>Announced 2020, January</p>\r\n\r\n<p>Status Available. Released 2020, January</p>\r\n\r\n<p>BODY</p>\r\n\r\n<p>Dimensions 156.3 x 73.5 x 8 mm (6.15 x 2.89 x 0.31 in)</p>\r\n\r\n<p>Weight 150 g (5.29 oz)</p>\r\n\r\n<p>Build Glass front, plastic back, plastic frame</p>\r\n\r\n<p>SIM Dual SIM (Nano-SIM, dual stand-by)</p>\r\n\r\n<p>DISPLAY</p>\r\n\r\n<p>Type IPS LCD capacitive touchscreen, 16M colors</p>\r\n\r\n<p>Size 6.09 inches, 91.0 cm2 (~79.2% screen-to-body ratio)</p>\r\n\r\n<p>Resolution 720 x 1560 pixels, 19.5:9 ratio (~282 ppi density)</p>\r\n\r\n<p>PLATFORM</p>\r\n\r\n<p>OS Android 9.0 (Pie); EMUI 9.1</p>\r\n\r\n<p>Chipset Mediatek MT6765 Helio P35 (12nm)</p>\r\n\r\n<p>CPU Octa-core (4&times;2.3 GHz Cortex-A53 &amp; 4&times;1.8 GHz Cortex-A53)</p>\r\n\r\n<p>GPU PowerVR GE8320</p>\r\n\r\n<p>MEMORY</p>\r\n\r\n<p>Card slot microSD, up to 512 GB (dedicated slot)</p>\r\n\r\n<p>Internal 32GB 3GB RAM</p>\r\n\r\n<p>MAIN CAMERA</p>\r\n\r\n<p>Single 13 MP, f/1.8, PDAF</p>\r\n\r\n<p>Features LED flash, HDR, panorama</p>\r\n\r\n<p>Video 1080p@30fps</p>\r\n\r\n<p>SELFIE CAMERA</p>\r\n\r\n<p>Single 8 MP, f/2.0</p>\r\n\r\n<p>Features LED flash</p>\r\n\r\n<p>Video 1080p@30fps</p>\r\n\r\n<p>SOUND</p>\r\n\r\n<p>Loudspeaker Yes</p>\r\n\r\n<p>3.5mm jack Yes</p>\r\n\r\n<p>Active noise cancellation with dedicated mic</p>\r\n\r\n<p>COMMS</p>\r\n\r\n<p>WLAN Wi-Fi 802.11 b/g/n, Wi-Fi Direct, hotspot</p>\r\n\r\n<p>Bluetooth 4.2, A2DP, LE</p>\r\n\r\n<p>GPS Yes, with A-GPS, GLONASS, BDS</p>\r\n\r\n<p>NFC Yes (JAT-LX1 NFC only)</p>\r\n\r\n<p>Radio FM Radio, built-in antenna</p>\r\n\r\n<p>USB microUSB 2.0</p>\r\n\r\n<p>FEATURES</p>\r\n\r\n<p>Sensors Fingerprint (rear-mounted), accelerometer, proximity</p>\r\n\r\n<p>BATTERY</p>\r\n\r\n<p>Non-removable Li-Po 3020 mAh battery</p>\r\n\r\n<p>MISC</p>\r\n\r\n<p>Colors Orchid Blue, Starry Black</p>\r\n\r\n<p>Models JAT-LX3, JAT-L29, JAT-LX1, JAT-L41</p>\r\n\r\n<p>Price About 120 EUR</p>\r\n', '<p>We can not guarantee that the information on this page is 100% correct.</p>\r\n\r\n<p><strong>Source:</strong> GSMArena</p>\r\n', '1749377055.jpg', '1749982741_0.', 0, 0, '2025-06-08 10:04:15'),
(77, 77, '<p>Network</p>\r\n\r\n<p>Technology GSM / HSPA / LTE / 5G</p>\r\n\r\n<p>Launch</p>\r\n\r\n<p>Announced 2025, May 15</p>\r\n\r\n<p>Status Available. Released 2025, May 15</p>\r\n\r\n<p>Body</p>\r\n\r\n<p>Dimensions 165.7 x 76.2 x 8 mm (6.52 x 3.00 x 0.31 in)</p>\r\n\r\n<p>Weight 194 g (6.84 oz)</p>\r\n\r\n<p>SIM Nano-SIM + Nano-SIM</p>\r\n\r\n<p>IP65 dust tight and water resistant (low pressure water jets)</p>\r\n\r\n<p>MIL-STD-810H compliant*</p>\r\n\r\n<p>* does not guarantee ruggedness or use in extreme conditions</p>\r\n\r\n<p>Display</p>\r\n\r\n<p>Type IPS LCD, 120Hz, 1000 nits (HBM)</p>\r\n\r\n<p>Size 6.67 inches, 107.2 cm2 (~84.9% screen-to-body ratio)</p>\r\n\r\n<p>Resolution 720 x 1604 pixels, 20:9 ratio (~264 ppi density)</p>\r\n\r\n<p>Protection Corning Gorilla Glass 7i</p>\r\n\r\n<p>Platform</p>\r\n\r\n<p>OS Android 15, ColorOS 15</p>\r\n\r\n<p>Chipset Mediatek Dimensity 6300 (6 nm)</p>\r\n\r\n<p>CPU Octa-core (2&times;2.4 GHz Cortex-A76 &amp; 6&times;2.0 GHz Cortex-A55)</p>\r\n\r\n<p>GPU Mali-G57 MC2</p>\r\n\r\n<p>Memory</p>\r\n\r\n<p>Card slot microSDXC</p>\r\n\r\n<p>Internal 128GB 4GB RAM, 128GB 6GB RAM, 256GB 8GB RAM</p>\r\n\r\n<p>UFS 2.2</p>\r\n\r\n<p>Main Camera</p>\r\n\r\n<p>Dual 50 MP, f/1.8, (wide), PDAF</p>\r\n\r\n<p>2 MP, f/2.4, (wide)</p>\r\n\r\n<p>Features LED flash, HDR, panorama</p>\r\n\r\n<p>Video 1080p@30fps (6/8GB RAM models only)</p>\r\n\r\n<p>Selfie camera</p>\r\n\r\n<p>Single 8 MP, f/2.0, (wide)</p>\r\n\r\n<p>Features Panorama</p>\r\n\r\n<p>Video 1080p@30fps</p>\r\n\r\n<p>Sound</p>\r\n\r\n<p>Loudspeaker Yes</p>\r\n\r\n<p>3.5mm jack Yes</p>\r\n\r\n<p>Comms</p>\r\n\r\n<p>WLAN Wi-Fi 802.11 a/b/g/n/ac, dual-band</p>\r\n\r\n<p>Bluetooth 5.4, A2DP, LE, aptX HD</p>\r\n\r\n<p>Positioning GPS, GALILEO, GLONASS, BDS, QZSS</p>\r\n\r\n<p>NFC Yes, (market/region dependent)</p>\r\n\r\n<p>Radio Unspecified</p>\r\n\r\n<p>USB USB Type-C 2.0, OTG</p>\r\n\r\n<p>Features</p>\r\n\r\n<p>Sensors Fingerprint (side-mounted), accelerometer, proximity, compass</p>\r\n\r\n<p>Battery</p>\r\n\r\n<p>Type 6000 mAh</p>\r\n\r\n<p>Charging 45W wired, 33W PPS, 13.5W PD, 50% in 37 min</p>\r\n\r\n<p>Misc</p>\r\n\r\n<p>Colors Aurora Green, Mist White</p>\r\n\r\n<p>Models CPH2735</p>\r\n\r\n<p>Price About 200 EUR</p>\r\n', '<p>We can not guarantee that the information on this page is 100% correct.</p>\r\n\r\n<p><strong>Source:</strong> GSMArena</p>\r\n', '1749377239.jpg', '1749982761_0.', 0, 0, '2025-06-08 10:07:19'),
(78, 78, '<p>Network</p>\r\n\r\n<p>Technology GSM / HSPA / LTE</p>\r\n\r\n<p>Launch</p>\r\n\r\n<p>Announced 2025, May 15</p>\r\n\r\n<p>Status Available. Released 2025, May 15</p>\r\n\r\n<p>Body</p>\r\n\r\n<p>Dimensions 165.7 x 76.2 x 8 mm (6.52 x 3.00 x 0.31 in)</p>\r\n\r\n<p>Weight 193 g (6.81 oz)</p>\r\n\r\n<p>SIM Nano-SIM + Nano-SIM</p>\r\n\r\n<p>IP65 dust tight and water resistant (low pressure water jets)</p>\r\n\r\n<p>MIL-STD-810H compliant*</p>\r\n\r\n<p>* does not guarantee ruggedness or use in extreme conditions</p>\r\n\r\n<p>Display</p>\r\n\r\n<p>Type IPS LCD, 90Hz, 1000 nits (HBM)</p>\r\n\r\n<p>Size 6.67 inches, 107.2 cm2 (~84.9% screen-to-body ratio)</p>\r\n\r\n<p>Resolution 720 x 1604 pixels, 20:9 ratio (~264 ppi density)</p>\r\n\r\n<p>Protection Corning Gorilla Glass 7i, AGC DT-Star D+</p>\r\n\r\n<p>Platform</p>\r\n\r\n<p>OS Android 15, ColorOS 15</p>\r\n\r\n<p>Chipset Qualcomm SM-6115 Snapdragon 6s 4G Gen1 (11 nm)</p>\r\n\r\n<p>CPU Octa-core (4&times;2.1 GHz Cortex-A73 &amp; 4&times;1.8 GHz Cortex-A53)</p>\r\n\r\n<p>GPU Adreno 610</p>\r\n\r\n<p>Memory</p>\r\n\r\n<p>Card slot microSDXC</p>\r\n\r\n<p>Internal 64GB 4GB RAM, 128GB 4GB RAM, 128GB 6GB RAM, 128GB 8GB RAM</p>\r\n\r\n<p>UFS 2.1</p>\r\n\r\n<p>Main Camera</p>\r\n\r\n<p>Single 32 MP, f/1.8, (wide), AF</p>\r\n\r\n<p>Features LED flash, HDR, panorama</p>\r\n\r\n<p>Video 1080p@30fps</p>\r\n\r\n<p>Selfie camera</p>\r\n\r\n<p>Single 5 MP, f/2.2, (wide)</p>\r\n\r\n<p>Features Panorama</p>\r\n\r\n<p>Video 1080p@30fps</p>\r\n\r\n<p>Sound</p>\r\n\r\n<p>Loudspeaker Yes</p>\r\n\r\n<p>3.5mm jack Yes</p>\r\n\r\n<p>Comms</p>\r\n\r\n<p>WLAN Wi-Fi 802.11 a/b/g/n/ac, dual-band</p>\r\n\r\n<p>Bluetooth 5.0, A2DP, LE, aptX</p>\r\n\r\n<p>Positioning GPS, GALILEO, GLONASS, BDS, QZSS</p>\r\n\r\n<p>NFC No</p>\r\n\r\n<p>Infrared port Yes</p>\r\n\r\n<p>Radio Unspecified</p>\r\n\r\n<p>USB USB Type-C 2.0, OTG</p>\r\n\r\n<p>Features</p>\r\n\r\n<p>Sensors Fingerprint (side-mounted), accelerometer, proximity, compass</p>\r\n\r\n<p>Battery</p>\r\n\r\n<p>Type 6000 mAh</p>\r\n\r\n<p>Charging 45W wired, 33W PPS, 13.5W PD, 50% in 36 min</p>\r\n\r\n<p>Misc</p>\r\n\r\n<p>Colors Midnight Blue, Laser White</p>\r\n\r\n<p>Models CPH2725</p>\r\n\r\n<p>Price About 90 EUR</p>\r\n', '<p>We can not guarantee that the information on this page is 100% correct.</p>\r\n\r\n<p><strong>Source:</strong> GSMArena</p>\r\n', '1749377432.jpg', '1749982778_0.', 0, 0, '2025-06-08 10:10:32'),
(79, 79, '<p>Network</p>\r\n\r\n<p>Technology GSM / CDMA / HSPA / LTE / 5G</p>\r\n\r\n<p>2G bands GSM 850 / 900 / 1800 / 1900</p>\r\n\r\n<p>CDMA 800</p>\r\n\r\n<p>3G bands HSDPA 800 / 850 / 900 / 1700(AWS) / 1900 / 2100 &ndash; International</p>\r\n\r\n<p>HSDPA 850 / 1700(AWS) / 2100 &ndash; China</p>\r\n\r\n<p>4G bands 1, 2, 3, 4, 5, 7, 8, 12, 13, 17, 18, 19, 20, 26, 28, 32, 34, 38, 39, 40, 41, 66 &ndash; International</p>\r\n\r\n<p>1, 3, 4, 5, 8, 18, 19, 26, 28, 34, 38, 39, 40, 41 &ndash; China</p>\r\n\r\n<p>5G bands 1, 2, 3, 5, 7, 8, 12, 20, 26, 28, 66, 38, 40, 41, 77, 78 SA/NSA &ndash; International</p>\r\n\r\n<p>1, 3, 5, 8, 28, 41, 77, 78 SA/NSA &ndash; China</p>\r\n\r\n<p>Speed HSPA, LTE, 5G</p>\r\n\r\n<p>Launch</p>\r\n\r\n<p>Announced 2024, November 25</p>\r\n\r\n<p>Status Available. Released 2024, November 29</p>\r\n\r\n<p>Body</p>\r\n\r\n<p>Dimensions 162.8 x 76.6 x 7.6 mm (6.41 x 3.02 x 0.30 in)</p>\r\n\r\n<p>Weight 195 g or 197 g (6.88 oz)</p>\r\n\r\n<p>Build Glass front (Gorilla Glass 7i), aluminum alloy frame, glass back</p>\r\n\r\n<p>SIM Nano-SIM + Nano-SIM</p>\r\n\r\n<p>IP68/IP69 dust tight and water resistant (high pressure water jets; immersible up to 1.5m for 30 min)</p>\r\n\r\n<p>Display</p>\r\n\r\n<p>Type AMOLED, 1B colors, 120Hz, HDR10+, 1200 nits (peak)</p>\r\n\r\n<p>Size 6.83 inches, 113.3 cm2 (~90.9% screen-to-body ratio)</p>\r\n\r\n<p>Resolution 1272 x 2800 pixels (~450 ppi density)</p>\r\n\r\n<p>Protection Corning Gorilla Glass 7i</p>\r\n\r\n<p>Platform</p>\r\n\r\n<p>OS Android 15, ColorOS 15</p>\r\n\r\n<p>Chipset Mediatek Dimensity 8350 (4 nm)</p>\r\n\r\n<p>CPU Octa-core (1&times;3.35 GHz Cortex-A715 &amp; 3&times;3.20 GHz Cortex-A715 &amp; 4&times;2.20 GHz Cortex-A510)</p>\r\n\r\n<p>GPU Mali G615-MC6</p>\r\n\r\n<p>Memory</p>\r\n\r\n<p>Card slot No</p>\r\n\r\n<p>Internal 256GB 12GB RAM, 512GB 12GB RAM, 512GB 16GB RAM, 1TB 16GB RAM</p>\r\n\r\n<p>UFS 3.1</p>\r\n\r\n<p>Main Camera</p>\r\n\r\n<p>Triple 50 MP, f/1.8, 24mm (wide), 1/1.56&Prime;, 1.0&micro;m, multi-directional PDAF, OIS</p>\r\n\r\n<p>50 MP, f/2.8, 85mm (telephoto), PDAF, OIS, 3.5x optical zoom</p>\r\n\r\n<p>8 MP, f/2.2, 15mm, 116˚ (ultrawide), 1/4.0&Prime;, 1.12&micro;m</p>\r\n\r\n<p>Features Color spectrum sensor, LED flash, HDR, panorama</p>\r\n\r\n<p>Video 4K@30/60fps, 1080p@30/60/120fps, gyro-EIS</p>\r\n\r\n<p>Selfie camera</p>\r\n\r\n<p>Single 50 MP, f/2.0, 21mm (wide), AF</p>\r\n\r\n<p>Features Panorama, HDR</p>\r\n\r\n<p>Video 4K@30/60fps, 1080p@30/60fps, gyro-EIS</p>\r\n\r\n<p>Sound</p>\r\n\r\n<p>Loudspeaker Yes</p>\r\n\r\n<p>3.5mm jack No</p>\r\n\r\n<p>Comms</p>\r\n\r\n<p>WLAN Wi-Fi 802.11 a/b/g/n/ac/6e, dual-band</p>\r\n\r\n<p>Bluetooth 5.4, A2DP, LE, aptX HD, LHDC 5</p>\r\n\r\n<p>Positioning GPS, GLONASS, GALILEO, BDS, QZSS</p>\r\n\r\n<p>NFC Yes, eSE, HCE, NFC-SIM, eID</p>\r\n\r\n<p>Infrared port Yes</p>\r\n\r\n<p>Radio No</p>\r\n\r\n<p>USB USB Type-C 2.0, OTG</p>\r\n\r\n<p>Features</p>\r\n\r\n<p>Sensors Fingerprint (under display, optical), accelerometer, gyro, proximity, compass</p>\r\n\r\n<p>Battery</p>\r\n\r\n<p>Type 5800 mAh</p>\r\n\r\n<p>Charging 80W wired, PD 13.5W, UFCS 33W, PPS 33W</p>\r\n\r\n<p>50W wireless</p>\r\n\r\n<p>Reverse wired</p>\r\n\r\n<p>Misc</p>\r\n\r\n<p>Colors Graphite Grey, Plume Purple, Pink</p>\r\n\r\n<p>Models CPH2697, PKK110</p>\r\n\r\n<p>Price About 440 EUR</p>\r\n', '<p><strong>Disclaimer.</strong>&nbsp;We can not guarantee that the information on this page is 100% correct.</p>\r\n', '1749377705.jpg', '1749982791_0.', 0, 0, '2025-06-08 10:15:05'),
(80, 80, '<p>Network</p>\r\n\r\n<p>Technology GSM / HSPA / LTE / 5G</p>\r\n\r\n<p>Launch</p>\r\n\r\n<p>Announced 2024, October 24</p>\r\n\r\n<p>Status Available. Released 2024, October 30</p>\r\n\r\n<p>Body</p>\r\n\r\n<p>Dimensions 162.3 x 76.7 x 8.2 mm (6.39 x 3.02 x 0.32 in)</p>\r\n\r\n<p>Weight 215 g (7.58 oz)</p>\r\n\r\n<p>Build Glass front (Gorilla Glass 7i), glass back (Gorilla Glass 7i), aluminum frame</p>\r\n\r\n<p>SIM Nano-SIM, eSIM or Dual SIM (Nano-SIM, dual stand-by)</p>\r\n\r\n<p>IP68/IP69 dust/water resistant (up to 1.5m for 30 min)</p>\r\n\r\n<p>Display</p>\r\n\r\n<p>Type LTPO AMOLED, 1B colors, 120Hz, Dolby Vision, HDR10+, 800 nits (typ), 1600 nits (HBM), 4500 nits (peak)</p>\r\n\r\n<p>Size 6.78 inches, 111.7 cm2 (~89.8% screen-to-body ratio)</p>\r\n\r\n<p>Resolution 1264 x 2780 pixels (~450 ppi density)</p>\r\n\r\n<p>Protection Corning Gorilla Glass 7i</p>\r\n\r\n<p>Ultra HDR image support</p>\r\n\r\n<p>Platform</p>\r\n\r\n<p>OS Android 15, up to 5 major Android upgrades, ColorOS 15</p>\r\n\r\n<p>Chipset Mediatek Dimensity 9400 (3 nm)</p>\r\n\r\n<p>CPU Octa-core (1&times;3.63 GHz Cortex-X925 &amp; 3&times;3.3 GHz Cortex-X4 &amp; 4&times;2.4 GHz Cortex-A720)</p>\r\n\r\n<p>GPU Immortalis-G925</p>\r\n\r\n<p>Memory</p>\r\n\r\n<p>Card slot No</p>\r\n\r\n<p>Internal 256GB 12GB RAM, 512GB 12GB RAM, 512GB 16GB RAM, 1TB 16GB RAM</p>\r\n\r\n<p>UFS 4.0</p>\r\n\r\n<p>Main Camera</p>\r\n\r\n<p>Quad 50 MP, f/1.6, 23mm (wide), 1/1.4&Prime;, 1.12&micro;m, PDAF, OIS</p>\r\n\r\n<p>50 MP, f/2.6, 73mm (periscope telephoto), 1/1.95&Prime;, 0.61&micro;m, 3x optical zoom, PDAF, OIS</p>\r\n\r\n<p>50 MP, f/4.3, 135mm (periscope telephoto), 1/2.51&Prime;, 0.7&micro;m, 6x optical zoom, dual pixel PDAF (35cm &ndash; &infin;), OIS</p>\r\n\r\n<p>50 MP, f/2.0, 15mm, 120˚ (ultrawide), 1/2.75&Prime;, 0.64&micro;m, PDAF</p>\r\n\r\n<p>Features Laser AF, Hasselblad Color Calibration, LED flash, HDR, panorama</p>\r\n\r\n<p>Video 4K@30/60fps, 1080p@30/60/240fps; gyro-EIS; HDR, 10‑bit video, Dolby Vision</p>\r\n\r\n<p>Selfie camera</p>\r\n\r\n<p>Single 32 MP, f/2.4, 21mm (wide), 1/2.74&Prime;, 0.8&micro;m</p>\r\n\r\n<p>Features Panorama</p>\r\n\r\n<p>Video 4K@30/60fps, 1080p@30/60fps, gyro-EIS</p>\r\n\r\n<p>Sound</p>\r\n\r\n<p>Loudspeaker Yes, with stereo speakers</p>\r\n\r\n<p>3.5mm jack No</p>\r\n\r\n<p>Comms</p>\r\n\r\n<p>WLAN Wi-Fi 802.11 a/b/g/n/ac/6/7, dual-band or tri-band, Wi-Fi Direct</p>\r\n\r\n<p>Bluetooth 5.4, A2DP, LE, aptX HD, LHDC 5</p>\r\n\r\n<p>Positioning GPS (L1+L5), BDS (B1I+B1c+B2a+B2b), GALILEO (E1+E5a+E5b), QZSS (L1+L5), GLONASS, NavIC (L5)</p>\r\n\r\n<p>NFC Yes; NFC-SIM, HCE, eSE, eID</p>\r\n\r\n<p>Infrared port Yes</p>\r\n\r\n<p>Radio No</p>\r\n\r\n<p>USB USB Type-C 3.2, OTG</p>\r\n\r\n<p>Features</p>\r\n\r\n<p>Sensors Fingerprint (under display, optical), accelerometer, gyro, proximity, compass, color spectrum</p>\r\n\r\n<p>Satellite connectivity support (PKC130, 1TB 16GB RAM model only)</p>\r\n\r\n<p>Circle to Search</p>\r\n\r\n<p>Battery</p>\r\n\r\n<p>Type Si/C 5910 mAh, non-removable</p>\r\n\r\n<p>Charging 80W wired, PD 55W, PPS, UFCS</p>\r\n\r\n<p>50W wireless</p>\r\n\r\n<p>10W reverse wireless</p>\r\n\r\n<p>Misc</p>\r\n\r\n<p>Colors Space Black, Pearl White, Blue</p>\r\n\r\n<p>Models CPH2659, PKC110, PKC130</p>\r\n\r\n<p>Price &pound;&thinsp;1,099.00</p>\r\n\r\n<p>Tests</p>\r\n\r\n<p>Performance AnTuTu: 2701287 (v10)</p>\r\n\r\n<p>GeekBench: 8819 (v6)</p>\r\n\r\n<p>3DMark: 6479 (Wild Life Extreme)</p>\r\n\r\n<p>Display 1333 nits max brightness (measured)</p>\r\n\r\n<p>Loudspeaker -24.9 LUFS (Very good)</p>\r\n\r\n<p>Battery (new)</p>\r\n\r\n<p>Active use score 15:18h</p>\r\n', '<p>We can not guarantee that the information on this page is 100% correct.</p>\r\n\r\n<p><strong>Source:</strong> GSMArena</p>\r\n', '1749377889.jpg', '1749982809_0.', 0, 0, '2025-06-08 10:18:09'),
(81, 81, '<p>Network</p>\r\n\r\n<p>Technology GSM / HSPA / LTE / 5G</p>\r\n\r\n<p>2G bands GSM 850 / 900 / 1800 / 1900 &ndash; SIM 1 &amp; SIM 2</p>\r\n\r\n<p>3G bands HSDPA 900 / 2100</p>\r\n\r\n<p>4G bands 1, 3, 5, 8, 28, 40, 41</p>\r\n\r\n<p>5G bands 1, 3, 5, 8, 28, 41, 77, 78 SA/NSA</p>\r\n\r\n<p>Speed HSPA, LTE, 5G</p>\r\n\r\n<p>Launch</p>\r\n\r\n<p>Announced 2024, August 20</p>\r\n\r\n<p>Status Available. Released 2024, August 20</p>\r\n\r\n<p>Body</p>\r\n\r\n<p>Dimensions 165.7 x 76 x 7.7 mm (6.52 x 2.99 x 0.30 in)</p>\r\n\r\n<p>Weight 187 g (6.60 oz)</p>\r\n\r\n<p>SIM Dual SIM (Nano-SIM, dual stand-by)</p>\r\n\r\n<p>IP54, dust and splash resistant</p>\r\n\r\n<p>MIL-STD-810H compliant*</p>\r\n\r\n<p>* does not guarantee ruggedness or use in extreme conditions</p>\r\n\r\n<p>Display</p>\r\n\r\n<p>Type IPS LCD, 120Hz, 1000 nits (HBM)</p>\r\n\r\n<p>Size 6.67 inches, 107.2 cm2 (~85.2% screen-to-body ratio)</p>\r\n\r\n<p>Resolution 720 x 1604 pixels, 20:9 ratio (~264 ppi density)</p>\r\n\r\n<p>Protection Panda glass</p>\r\n\r\n<p>Platform</p>\r\n\r\n<p>OS Android 14, ColorOS 14</p>\r\n\r\n<p>Chipset Mediatek Dimensity 6300 (6 nm)</p>\r\n\r\n<p>CPU Octa-core (2&times;2.4 GHz Cortex-A76 &amp; 6&times;2.0 GHz Cortex-A55)</p>\r\n\r\n<p>GPU Mali-G57 MC2</p>\r\n\r\n<p>Memory</p>\r\n\r\n<p>Card slot microSDXC</p>\r\n\r\n<p>Internal 128GB 6GB RAM</p>\r\n\r\n<p>eMMC 5.1</p>\r\n\r\n<p>Main Camera</p>\r\n\r\n<p>Dual 50 MP, f/1.8, (wide), PDAF</p>\r\n\r\n<p>Auxiliary lens</p>\r\n\r\n<p>Features LED flash, HDR, panorama</p>\r\n\r\n<p>Video 1080p@30/60fps</p>\r\n\r\n<p>Selfie camera</p>\r\n\r\n<p>Single 5 MP, f/2.2, (wide)</p>\r\n\r\n<p>Video 1080p@30fps</p>\r\n\r\n<p>Sound</p>\r\n\r\n<p>Loudspeaker Yes</p>\r\n\r\n<p>3.5mm jack Yes</p>\r\n\r\n<p>Comms</p>\r\n\r\n<p>WLAN Wi-Fi 802.11 a/b/g/n/ac, dual-band</p>\r\n\r\n<p>Bluetooth 5.3, A2DP, LE</p>\r\n\r\n<p>Positioning GPS, GALILEO, GLONASS, BDS, QZSS</p>\r\n\r\n<p>NFC No</p>\r\n\r\n<p>Radio No</p>\r\n\r\n<p>USB USB Type-C 2.0, OTG</p>\r\n\r\n<p>Features</p>\r\n\r\n<p>Sensors Fingerprint (side-mounted), accelerometer, proximity, compass</p>\r\n\r\n<p>Battery</p>\r\n\r\n<p>Type 5100 mAh, non-removable</p>\r\n\r\n<p>Charging 45W wired, PD2.0, 50% in 30 min (advertised)</p>\r\n', '<p>We can not guarantee that the information on this page is 100% correct.</p>\r\n\r\n<p><strong>Source:</strong> GSMArena</p>\r\n', '1749378231.jpg', '1749982825_0.', 0, 0, '2025-06-08 10:23:51'),
(82, 82, '<p>NETWORK</p>\r\n\r\n<p>Technology GSM / CDMA / HSPA / EVDO / LTE / 5G</p>\r\n\r\n<p>LAUNCH</p>\r\n\r\n<p>Announced 2021, November 25</p>\r\n\r\n<p>Status Available. Released 2021, December 03</p>\r\n\r\n<p>BODY</p>\r\n\r\n<p>Dimensions 158.2 x 73.2 x 7.5 mm (6.23 x 2.88 x 0.30 in)</p>\r\n\r\n<p>Weight 180 g (6.35 oz)</p>\r\n\r\n<p>Build Glass front (Gorilla Glass 5), glass back (Panda Glass)</p>\r\n\r\n<p>SIM Dual SIM (Nano-SIM, dual stand-by)</p>\r\n\r\n<p>DISPLAY</p>\r\n\r\n<p>Type AMOLED, 90Hz, HDR10+, 500 nits (typ), 800 nits (HBM), 920 nits (peak)</p>\r\n\r\n<p>Size 6.55 inches, 103.6 cm2 (~89.4% screen-to-body ratio)</p>\r\n\r\n<p>Resolution 1080 x 2400 pixels, 20:9 ratio (~402 ppi density)</p>\r\n\r\n<p>Protection Corning Gorilla Glass 5</p>\r\n\r\n<p>PLATFORM</p>\r\n\r\n<p>OS Android 11, ColorOS 12</p>\r\n\r\n<p>Chipset MediaTek Dimensity 1200 Max 5G</p>\r\n\r\n<p>CPU Octa-core 3.0 GHz</p>\r\n\r\n<p>GPU ARM G77 MC9</p>\r\n\r\n<p>MEMORY</p>\r\n\r\n<p>Card slot No</p>\r\n\r\n<p>Internal 256GB 8GB RAM, 256GB 12GB RAM</p>\r\n\r\n<p>UFS 3.1</p>\r\n\r\n<p>MAIN CAMERA</p>\r\n\r\n<p>Triple 50 MP, f/1.8, 24mm (wide), 1/1.56&Prime;, 1.0&micro;m, PDAF</p>\r\n\r\n<p>8 MP, f/2.2, 119˚ (ultrawide)</p>\r\n\r\n<p>2 MP, f/2.4, (macro)</p>\r\n\r\n<p>Features LED flash, HDR, panorama</p>\r\n\r\n<p>Video 4K@30fps, 1080p@30/60/120fps, gyro-EIS</p>\r\n\r\n<p>SELFIE CAMERA</p>\r\n\r\n<p>Single 32 MP, f/2.4, 22mm (wide)</p>\r\n\r\n<p>Features Panorama, HDR</p>\r\n\r\n<p>Video 1080p@30fps, gyro-EIS</p>\r\n\r\n<p>SOUND</p>\r\n\r\n<p>Loudspeaker Yes, with stereo speakers</p>\r\n\r\n<p>3.5mm jack No</p>\r\n\r\n<p>COMMS</p>\r\n\r\n<p>WLAN Wi-Fi 802.11 a/b/g/n/ac/6, dual-band, Wi-Fi Direct, hotspot</p>\r\n\r\n<p>Bluetooth 5.2, A2DP, LE, aptX HD</p>\r\n\r\n<p>GPS Yes, with A-GPS. Up to dual-band: GLONASS (1), BDS (2), GALILEO (2), QZSS (2), NavIC</p>\r\n\r\n<p>NFC Yes</p>\r\n\r\n<p>Radio No</p>\r\n\r\n<p>USB USB Type-C 2.0, USB On-The-Go</p>\r\n\r\n<p>FEATURES</p>\r\n\r\n<p>Sensors Fingerprint (under display, optical), accelerometer, gyro, proximity, compass, color spectrum</p>\r\n\r\n<p>BATTERY</p>\r\n\r\n<p>Type Li-Po 4500 mAh, non-removable</p>\r\n\r\n<p>Charging Fast charging 65W, 100% in 31 min (advertised)</p>\r\n\r\n<p>Reverse charging</p>\r\n\r\n<p>MISC</p>\r\n\r\n<p>Colors Starlight Black, Startrails Blue, Gold, League of Legends</p>\r\n\r\n<p>Models PFDM00, CPH2293</p>\r\n\r\n<p>Price About 470 EUR</p>\r\n', '<p>We can not guarantee that the information on this page is 100% correct.</p>\r\n\r\n<p><strong>Source:</strong> GSMArena</p>\r\n', '1749378530.jpg', '1749982841_0.', 0, 0, '2025-06-08 10:28:50'),
(83, 83, '<p><strong>Network</strong></p>\r\n\r\n<p>Technology GSM / CDMA / HSPA / EVDO / LTE / 5G</p>\r\n\r\n<p><strong>Launch</strong></p>\r\n\r\n<p>Announced 2024, September 09</p>\r\n\r\n<p>Status Available. Released 2024, September 20</p>\r\n\r\n<p><strong>Body</strong></p>\r\n\r\n<p>Dimensions 147.6 x 71.6 x 7.8 mm (5.81 x 2.82 x 0.31 in)</p>\r\n\r\n<p>Weight 170 g (6.00 oz)</p>\r\n\r\n<p>Build Glass front (Corning-made glass), glass back (Corning-made glass), aluminum frame</p>\r\n\r\n<p>SIM Nano-SIM + eSIM + eSIM (max 2 at a time; International)</p>\r\n\r\n<p>eSIM + eSIM (8 or more, max 2 at a time; USA)</p>\r\n\r\n<p>Nano-SIM + Nano-SIM (China)</p>\r\n\r\n<p>IP68 dust/water resistant (up to 6m for 30 min)</p>\r\n\r\n<p>Apple Pay (Visa, MasterCard, AMEX certified)</p>\r\n\r\n<p><strong>Display</strong></p>\r\n\r\n<p>Type Super Retina XDR OLED, HDR10, Dolby Vision, 1000 nits (typ), 2000 nits (HBM)</p>\r\n\r\n<p>Size 6.1 inches, 91.7 cm2 (~86.8% screen-to-body ratio)</p>\r\n\r\n<p>Resolution 1179 x 2556 pixels, 19.5:9 ratio (~460 ppi density)</p>\r\n\r\n<p>Protection Ceramic Shield glass (2024 gen)</p>\r\n\r\n<p><strong>Platform</strong></p>\r\n\r\n<p>OS iOS 18, upgradable to iOS 18.2</p>\r\n\r\n<p>Chipset Apple A18 (3 nm)</p>\r\n\r\n<p>CPU Hexa-core (2&times;4.04 GHz + 4&times;2.20 GHz)</p>\r\n\r\n<p>GPU Apple GPU (5-core graphics)</p>\r\n\r\n<p><strong>Memory</strong></p>\r\n\r\n<p>Card slot No</p>\r\n\r\n<p>Internal 128GB 8GB RAM, 256GB 8GB RAM, 512GB 8GB RAM</p>\r\n\r\n<p>NVMe</p>\r\n\r\n<p><strong>Main Camera</strong></p>\r\n\r\n<p>Dual 48 MP, f/1.6, 26mm (wide), 1/1.56&Prime;, 1.0&micro;m, dual pixel PDAF, sensor-shift OIS</p>\r\n\r\n<p>12 MP, f/2.2, 13mm, 120˚ (ultrawide), 0.7&micro;m, dual pixel PDAF</p>\r\n\r\n<p>Features Dual-LED dual-tone flash, HDR (photo/panorama)</p>\r\n\r\n<p>Video 4K@24/25/30/60fps, 1080p@25/30/60/120/240fps, HDR, Dolby Vision HDR (up to 60fps), stereo sound rec.</p>\r\n\r\n<p><strong>Selfie camera</strong></p>\r\n\r\n<p>Single 12 MP, f/1.9, 23mm (wide), 1/3.6&Prime;, PDAF</p>\r\n\r\n<p>SL 3D, (depth/biometrics sensor)</p>\r\n\r\n<p>Features HDR, Dolby Vision HDR, 3D (spatial) audio, stereo sound rec.</p>\r\n\r\n<p>Video 4K@24/25/30/60fps, 1080p@25/30/60/120fps, gyro-EIS</p>\r\n\r\n<p><strong>Sound</strong></p>\r\n\r\n<p>Loudspeaker Yes, with stereo speakers</p>\r\n\r\n<p>3.5mm jack No</p>\r\n\r\n<p><strong>Comms</strong></p>\r\n\r\n<p>WLAN Wi-Fi 802.11 a/b/g/n/ac/6/7, tri-band, hotspot</p>\r\n\r\n<p>Bluetooth 5.3, A2DP, LE</p>\r\n\r\n<p>Positioning GPS, GLONASS, GALILEO, BDS, QZSS</p>\r\n\r\n<p>NFC Yes</p>\r\n\r\n<p>Radio No</p>\r\n\r\n<p>USB USB Type-C 2.0, DisplayPort</p>\r\n\r\n<p><strong>Features</strong></p>\r\n\r\n<p>Sensors Face ID, accelerometer, gyro, proximity, compass, barometer</p>\r\n\r\n<p>Ultra Wideband (UWB) support (gen2 chip)</p>\r\n\r\n<p>Emergency SOS, Messages and Find My via satellite</p>\r\n\r\n<p><strong>Battery</strong></p>\r\n\r\n<p>Type Li-Ion 3561 mAh</p>\r\n\r\n<p>Charging Wired, PD2.0, 50% in 30 min (advertised)</p>\r\n\r\n<p>25W wireless (MagSafe), 15W wireless (China only)</p>\r\n\r\n<p>15W wireless (Qi2)</p>\r\n\r\n<p>4.5W reverse wired</p>\r\n\r\n<p><strong>Misc</strong></p>\r\n\r\n<p>Colors Black, White, Pink, Teal, Ultramarine</p>\r\n\r\n<p>Models A3287, A3081, A3286, A3288, iPhone17,3</p>\r\n\r\n<p>SAR 1.08 W/kg (head) 1.17 W/kg (body)</p>\r\n\r\n<p>SAR EU 1.24 W/kg (head) 1.41 W/kg (body)</p>\r\n\r\n<p>Price $&thinsp;733.00 / &euro;&thinsp;856.85 / &pound;&thinsp;799.00</p>\r\n\r\n<p>Tests</p>\r\n\r\n<p>Performance AnTuTu: 1721149 (v10)</p>\r\n\r\n<p>GeekBench: 7929 (v6)</p>\r\n\r\n<p>3DMark: 4295 (Wild Life Extreme)</p>\r\n\r\n<p>Display 1708 nits max brightness (measured)</p>\r\n\r\n<p>Loudspeaker -25.5 LUFS (Very good)</p>\r\n\r\n<p>Battery (new)</p>\r\n\r\n<p>Active use score 15:42h</p>\r\n', '<p><strong>Disclaimer.</strong>&nbsp;We can not guarantee that the information on this page is 100% correct.</p>\r\n', '1749983575.jpg', '1749983864_0.', 0, 0, '2025-06-15 10:32:55'),
(84, 84, '<p>Network</p>\r\n\r\n<p>Technology GSM / CDMA / HSPA / EVDO / LTE / 5G</p>\r\n\r\n<p>Launch</p>\r\n\r\n<p>Announced 2021, September 14</p>\r\n\r\n<p>Status Available. Released 2021, September 24</p>\r\n\r\n<p>Body</p>\r\n\r\n<p>Dimensions 160.8 x 78.1 x 7.7 mm (6.33 x 3.07 x 0.30 in)</p>\r\n\r\n<p>Weight 240 g (8.47 oz)</p>\r\n\r\n<p>Build Glass front (Corning-made glass), glass back (Corning-made glass), stainless steel frame</p>\r\n\r\n<p>SIM Nano-SIM + eSIM</p>\r\n\r\n<p>Nano-SIM + Nano-SIM</p>\r\n\r\n<p>IP68 dust tight and water resistant (immersible up to 6m for 30 min)</p>\r\n\r\n<p>Apple Pay (Visa, MasterCard, AMEX certified)</p>\r\n\r\n<p>Display</p>\r\n\r\n<p>Type Super Retina XDR OLED, 120Hz, HDR10, Dolby Vision, 1000 nits (HBM), 1200 nits (peak)</p>\r\n\r\n<p>Size 6.7 inches, 109.8 cm2 (~87.4% screen-to-body ratio)</p>\r\n\r\n<p>Resolution 1284 x 2778 pixels, 19.5:9 ratio (~458 ppi density)</p>\r\n\r\n<p>Protection Ceramic Shield glass</p>\r\n\r\n<p>Platform</p>\r\n\r\n<p>OS iOS 15, upgradable to iOS 18.3.1</p>\r\n\r\n<p>Chipset Apple A15 Bionic (5 nm)</p>\r\n\r\n<p>CPU Hexa-core (2&times;3.23 GHz Avalanche + 4&times;1.82 GHz Blizzard)</p>\r\n\r\n<p>GPU Apple GPU (5-core graphics)</p>\r\n\r\n<p>Memory</p>\r\n\r\n<p>Card slot No</p>\r\n\r\n<p>Internal 128GB 6GB RAM, 256GB 6GB RAM, 512GB 6GB RAM, 1TB 6GB RAM</p>\r\n\r\n<p>NVMe</p>\r\n\r\n<p>Main Camera</p>\r\n\r\n<p>Triple 12 MP, f/1.5, 26mm (wide), 1/1.7&Prime;, 1.9&micro;m, dual pixel PDAF, sensor-shift OIS</p>\r\n\r\n<p>12 MP, f/2.8, 77mm (telephoto), PDAF, 1/3.4&Prime;, 1.0&micro;m, OIS, 3x optical zoom</p>\r\n\r\n<p>12 MP, f/1.8, 13mm, 120˚ (ultrawide), 1/3.4&Prime;, 1.0&micro;m, PDAF</p>\r\n\r\n<p>TOF 3D LiDAR scanner (depth)</p>\r\n\r\n<p>Features Dual-LED dual-tone flash, HDR (photo/panorama)</p>\r\n\r\n<p>Video 4K@24/30/60fps, 1080p@30/60/120/240fps, 10-bit HDR, Dolby Vision HDR (up to 60fps), ProRes, stereo sound rec.</p>\r\n\r\n<p>Selfie camera</p>\r\n\r\n<p>Single 12 MP, f/2.2, 23mm (wide), 1/3.6&Prime;, 1.0&micro;m</p>\r\n\r\n<p>SL 3D, (depth/biometrics sensor)</p>\r\n\r\n<p>Features HDR</p>\r\n\r\n<p>Video 4K@24/25/30/60fps, 1080p@30/60/120fps, gyro-EIS</p>\r\n\r\n<p>Sound</p>\r\n\r\n<p>Loudspeaker Yes, with stereo speakers</p>\r\n\r\n<p>3.5mm jack No</p>\r\n\r\n<p>Comms</p>\r\n\r\n<p>WLAN Wi-Fi 802.11 a/b/g/n/ac/6, dual-band, hotspot</p>\r\n\r\n<p>Bluetooth 5.0, A2DP, LE</p>\r\n\r\n<p>Positioning GPS, GLONASS, GALILEO, BDS, QZSS</p>\r\n\r\n<p>NFC Yes</p>\r\n\r\n<p>Radio No</p>\r\n\r\n<p>USB Lightning, USB 2.0</p>\r\n\r\n<p>Features</p>\r\n\r\n<p>Sensors Face ID, accelerometer, gyro, proximity, compass, barometer</p>\r\n\r\n<p>Ultra Wideband (UWB) support</p>\r\n\r\n<p>Battery</p>\r\n\r\n<p>Type Li-Ion 4352 mAh (16.75 Wh)</p>\r\n\r\n<p>Charging Wired, PD2.0, 50% in 30 min</p>\r\n\r\n<p>15W wireless (MagSafe)</p>\r\n\r\n<p>15W wireless (Qi2) &ndash; requires iOS 17.2 update</p>\r\n\r\n<p>Misc</p>\r\n\r\n<p>Colors Graphite, Gold, Silver, Sierra Blue, Alpine Green</p>\r\n\r\n<p>Models A2643, A2484, A2641, A2644, A2645, iphone14,3</p>\r\n\r\n<p>SAR 1.18 W/kg (head) 1.20 W/kg (body)</p>\r\n\r\n<p>SAR EU 0.99 W/kg (head) 0.98 W/kg (body)</p>\r\n\r\n<p>Price $&thinsp;378.95 / &euro;&thinsp;545.00 / &pound;&thinsp;409.44 / ₹&thinsp;117,899</p>\r\n\r\n<p>Tests</p>\r\n\r\n<p>Performance AnTuTu: 801691 (v9)</p>\r\n\r\n<p>GeekBench: 4706 (v5.1)</p>\r\n\r\n<p>GFXBench: 60fps (ES 3.1 onscreen)</p>\r\n\r\n<p>Display 1050 nits max brightness (measured)</p>\r\n\r\n<p>Camera Photo / Video</p>\r\n\r\n<p>Loudspeaker -24.0 LUFS (Very good)</p>\r\n\r\n<p>Battery (old)</p>\r\n\r\n<p>Endurance rating 121h</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n', '<p>Disclaimer. We can not guarantee that the information on this page is 100% correct.</p>\r\n', '1749984104.jpg', '1749984976_0.', 0, 0, '2025-06-15 10:41:44'),
(85, 85, '<p>NETWORK</p>\r\n\r\n<p>Technology GSM / HSPA / LTE / 5G</p>\r\n\r\n<p>LAUNCH</p>\r\n\r\n<p>Announced 2022, October 18</p>\r\n\r\n<p>Status Available. Released 2022, October 26</p>\r\n\r\n<p>BODY</p>\r\n\r\n<p>Dimensions 248.6 x 179.5 x 7 mm (9.79 x 7.07 x 0.28 in)</p>\r\n\r\n<p>Weight 477 g (Wi-Fi) / 481 g (LTE) (1.05 lb)</p>\r\n\r\n<p>Build Glass front, aluminum back, aluminum frame</p>\r\n\r\n<p>SIM Nano-SIM, eSIM</p>\r\n\r\n<p>Stylus support (1st gen only)</p>\r\n\r\n<p>DISPLAY</p>\r\n\r\n<p>Type Liquid Retina IPS LCD, 500 nits (typ)</p>\r\n\r\n<p>Size 10.9 inches, 359.2 cm2 (~80.5% screen-to-body ratio)</p>\r\n\r\n<p>Resolution 1640 x 2360 pixels (~264 ppi density)</p>\r\n\r\n<p>Protection Scratch-resistant glass, oleophobic coating</p>\r\n\r\n<p>PLATFORM</p>\r\n\r\n<p>OS iPadOS 16.1</p>\r\n\r\n<p>Chipset Apple A14 Bionic (5 nm)</p>\r\n\r\n<p>CPU Hexa-core (2&times;3.0 GHz Firestorm + 4&times;1.8 GHz Icestorm)</p>\r\n\r\n<p>GPU Apple GPU (4-core graphics)</p>\r\n\r\n<p>MEMORY</p>\r\n\r\n<p>Card slot No</p>\r\n\r\n<p>Internal 64GB, 256GB</p>\r\n\r\n<p>MAIN CAMERA</p>\r\n\r\n<p>Single 12 MP, f/1.8, (wide), PDAF</p>\r\n\r\n<p>Features HDR, panorama</p>\r\n\r\n<p>Video 4K@24/25/30/60fps, 1080p@25/30/60/120/240fps</p>\r\n\r\n<p>SELFIE CAMERA</p>\r\n\r\n<p>Single 12 MP, f/2.4, 122˚ (ultrawide)</p>\r\n\r\n<p>Features HDR</p>\r\n\r\n<p>Video 1080p@25/30/60fps, gyro-EIS</p>\r\n\r\n<p>SOUND</p>\r\n\r\n<p>Loudspeaker Yes, with stereo speakers</p>\r\n\r\n<p>3.5mm jack No</p>\r\n\r\n<p>COMMS</p>\r\n\r\n<p>WLAN Wi-Fi 802.11 a/b/g/n/ac/6, dual-band, hotspot</p>\r\n\r\n<p>Bluetooth 5.2, A2DP, EDR, LE</p>\r\n\r\n<p>Positioning GPS, GLONASS (Wi‑Fi + Cellular model only)</p>\r\n\r\n<p>NFC No</p>\r\n\r\n<p>Radio No</p>\r\n\r\n<p>USB USB Type-C 2.0, DisplayPort; magnetic connector</p>\r\n\r\n<p>FEATURES</p>\r\n\r\n<p>Sensors Fingerprint (top-mounted), accelerometer, gyro, compass, barometer</p>\r\n\r\n<p>BATTERY</p>\r\n\r\n<p>Type Li-Ion, non-removable (28.6 Wh)</p>\r\n\r\n<p>MISC</p>\r\n\r\n<p>Colors Silver, Blue, Pink, Yellow</p>\r\n\r\n<p>Models A2757, A2777</p>\r\n\r\n<p>Price About 580 EUR</p>\r\n', '<p><strong>Disclaimer.</strong>&nbsp;We can not guarantee that the information on this page is 100% correct.</p>\r\n', '1749984243.jpg', '1749984349_0.', 0, 0, '2025-06-15 10:44:03'),
(86, 86, '<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>-14 Screen Size 6.1 inches, Chip A15</p>\r\n\r\n<p>-14 Plus Screen Size 6.7 inches, Chip A15</p>\r\n\r\n<p>-14 Pro Screen Size 6.1 inches, Chip A16</p>\r\n\r\n<p>-14 Pro Max Screen Size 6.7 inches, Chip A16</p>\r\n\r\n<p>&nbsp;</p>\r\n', '<p><strong>Disclaimer.</strong> We can not guarantee that the information on this page is 100% correct.<br />\r\n<strong>Source</strong>: GSMArena</p>\r\n', '1749984751.jpg', '1749984991_0.', 0, 0, '2025-06-15 10:52:31'),
(87, 87, '<p>NETWORK</p>\r\n\r\n<p>Technology GSM / CDMA / HSPA / EVDO / LTE / 5G</p>\r\n\r\n<p>LAUNCH</p>\r\n\r\n<p>Announced 2021, September 14</p>\r\n\r\n<p>Status Coming soon. Exp. release 2021, September 24</p>\r\n\r\n<p>BODY</p>\r\n\r\n<p>Dimensions 146.7 x 71.5 x 7.7 mm (5.78 x 2.81 x 0.30 in)</p>\r\n\r\n<p>Weight 174 g (6.14 oz)</p>\r\n\r\n<p>Build Glass front (Gorilla Glass), glass back (Gorilla Glass), aluminum frame</p>\r\n\r\n<p>SIM Single SIM (Nano-SIM and/or eSIM) or Dual SIM (Nano-SIM, dual stand-by)</p>\r\n\r\n<p>IP68 dust/water resistant (up to 6m for 30 mins)</p>\r\n\r\n<p>Apple Pay (Visa, MasterCard, AMEX certified)</p>\r\n\r\n<p>DISPLAY</p>\r\n\r\n<p>Type Super Retina XDR OLED, HDR10, Dolby Vision, 800 nits (typ), 1200 nits (peak)</p>\r\n\r\n<p>Size 6.1 inches, 90.2 cm2 (~86.0% screen-to-body ratio)</p>\r\n\r\n<p>Resolution 1170 x 2532 pixels, 19.5:9 ratio (~460 ppi density)</p>\r\n\r\n<p>Protection Scratch-resistant ceramic glass, oleophobic coating</p>\r\n\r\n<p>Wide color gamut</p>\r\n\r\n<p>True-tone</p>\r\n\r\n<p>PLATFORM</p>\r\n\r\n<p>OS iOS 15</p>\r\n\r\n<p>Chipset Apple A15 Bionic (5 nm)</p>\r\n\r\n<p>CPU Hexa-core (2&times;3.22 GHz + 4xX.X GHz)</p>\r\n\r\n<p>GPU Apple GPU (4-core graphics)</p>\r\n\r\n<p>MEMORY</p>\r\n\r\n<p>Card slot No</p>\r\n\r\n<p>Internal 128GB 4GB RAM, 256GB 4GB RAM, 512GB 4GB RAM</p>\r\n\r\n<p>NVMe</p>\r\n\r\n<p>MAIN CAMERA</p>\r\n\r\n<p>Dual 12 MP, f/1.6, 26mm (wide), 1.7&micro;m, dual pixel PDAF, sensor-shift OIS</p>\r\n\r\n<p>12 MP, f/2.4, 120˚, 13mm (ultrawide)</p>\r\n\r\n<p>Features Dual-LED dual-tone flash, HDR (photo/panorama)</p>\r\n\r\n<p>Video 4K@24/30/60fps, 1080p@30/60/120/240fps, HDR, Dolby Vision HDR (up to XXfps), stereo sound rec.</p>\r\n\r\n<p>SELFIE CAMERA</p>\r\n\r\n<p>Dual 12 MP, f/2.2, 23mm (wide), 1/3.6&Prime;</p>\r\n\r\n<p>SL 3D, (depth/biometrics sensor)</p>\r\n\r\n<p>Features HDR</p>\r\n\r\n<p>Video 4K@24/25/30/60fps, 1080p@30/60/120fps, gyro-EIS</p>\r\n\r\n<p>SOUND</p>\r\n\r\n<p>Loudspeaker Yes, with stereo speakers</p>\r\n\r\n<p>3.5mm jack No</p>\r\n\r\n<p>COMMS</p>\r\n\r\n<p>WLAN Wi-Fi 802.11 a/b/g/n/ac/6, dual-band, hotspot</p>\r\n\r\n<p>Bluetooth 5.0, A2DP, LE</p>\r\n\r\n<p>GPS Yes, with A-GPS, GLONASS, GALILEO, BDS, QZSS</p>\r\n\r\n<p>NFC Yes</p>\r\n\r\n<p>Radio No</p>\r\n\r\n<p>USB Lightning, USB 2.0</p>\r\n\r\n<p>FEATURES</p>\r\n\r\n<p>Sensors Face ID, accelerometer, gyro, proximity, compass, barometer</p>\r\n\r\n<p>Siri natural language commands and dictation</p>\r\n\r\n<p>Ultra Wideband (UWB) support</p>\r\n\r\n<p>BATTERY</p>\r\n\r\n<p>Type Li-Ion, non-removable</p>\r\n\r\n<p>Charging Fast charging 20W, 50% in 30 min (advertised)</p>\r\n\r\n<p>USB Power Delivery 2.0</p>\r\n\r\n<p>MagSafe wireless charging 15W</p>\r\n\r\n<p>Qi magnetic fast wireless charging 7.5W</p>\r\n\r\n<p>Stand-by Up to 19 h (multimedia)</p>\r\n\r\n<p>Music play Up to 75 h</p>\r\n\r\n<p>MISC</p>\r\n\r\n<p>Colors Starlight, Midnight, Blue, Pink, Red</p>\r\n\r\n<p>Models A2633, A2482, A2631, A2634, A2635</p>\r\n\r\n<p>Price $&thinsp;829.00 / &euro;&thinsp;899.00 / &pound;&thinsp;779.00 / ₹&thinsp;89,900</p>\r\n', '<p><strong>Disclaimer.</strong> We can not guarantee that the information on this page is 100% correct.<br />\r\n<strong>Source</strong>: GSMArena</p>\r\n', '1749984904.jpg', '1749985007_0.', 0, 0, '2025-06-15 10:55:04');
INSERT INTO `product_image` (`id`, `product_id`, `specification`, `description`, `image`, `demo_image`, `created_by`, `updated_by`, `created_at`) VALUES
(88, 88, '<p>Network</p>\r\n\r\n<p>Technology GSM / CDMA / HSPA / CDMA2000 / LTE / 5G</p>\r\n\r\n<p>2G bands GSM 850 / 900 / 1800 / 1900</p>\r\n\r\n<p>CDMA 800</p>\r\n\r\n<p>3G bands HSDPA 800 / 850 / 900 / 1700(AWS) / 1900 / 2100</p>\r\n\r\n<p>CDMA2000 1x</p>\r\n\r\n<p>4G bands LTE</p>\r\n\r\n<p>5G bands SA/NSA</p>\r\n\r\n<p>Speed HSPA, LTE, 5G</p>\r\n\r\n<p>Launch</p>\r\n\r\n<p>Announced 2024, October 22</p>\r\n\r\n<p>Status Available. Released 2024, October 25</p>\r\n\r\n<p>Body</p>\r\n\r\n<p>Dimensions 163.4 x 74.9 x 7.8 mm (6.43 x 2.95 x 0.31 in)</p>\r\n\r\n<p>Weight 209 g (7.37 oz)</p>\r\n\r\n<p>SIM Nano-SIM + Nano-SIM</p>\r\n\r\n<p>IP65 dust tight and water resistant (low pressure water jets)</p>\r\n\r\n<p>Display</p>\r\n\r\n<p>Type LTPO OLED, 1B colors, HDR, 120Hz</p>\r\n\r\n<p>Size 6.76 inches, 108.8 cm2 (~88.9% screen-to-body ratio)</p>\r\n\r\n<p>Resolution 1224 x 2776 pixels (~449 ppi density)</p>\r\n\r\n<p>Protection Aluminosilicate glass</p>\r\n\r\n<p>Platform</p>\r\n\r\n<p>OS HarmonyOS 4.2</p>\r\n\r\n<p>Memory</p>\r\n\r\n<p>Card slot No</p>\r\n\r\n<p>Internal 256GB 12GB RAM, 512GB 12GB RAM, 1TB 12GB RAM</p>\r\n\r\n<p>Main Camera</p>\r\n\r\n<p>Triple 50 MP, f/1.4-4.0, 23mm (wide), PDAF, OIS</p>\r\n\r\n<p>12 MP, f/2.4, 69mm (telephoto), PDAF, OIS</p>\r\n\r\n<p>8 MP, f/2.2, 16mm, 112˚ (ultrawide), AF</p>\r\n\r\n<p>Features Laser AF, color spectrum sensor, LED flash, panorama, HDR</p>\r\n\r\n<p>Video 4K, 1080p, gyro-EIS</p>\r\n\r\n<p>Selfie camera</p>\r\n\r\n<p>Dual 8 MP, f/2.2, 52mm (telephoto), AF, 2x optical zoom</p>\r\n\r\n<p>60 MP, f/2.4, 17mm, 100˚ (ultrawide), AF</p>\r\n\r\n<p>Features HDR, panorama</p>\r\n\r\n<p>Video 4K@30fps, 1080p@30fps, gyro-EIS</p>\r\n\r\n<p>Sound</p>\r\n\r\n<p>Loudspeaker Yes, with stereo speakers</p>\r\n\r\n<p>3.5mm jack No</p>\r\n\r\n<p>Comms</p>\r\n\r\n<p>WLAN Wi-Fi 802.11 a/b/g/n/ac/6, dual-band, Wi-Fi Direct</p>\r\n\r\n<p>Bluetooth 5.2, A2DP, LE, L2HC (320-960 kbps HD audio)</p>\r\n\r\n<p>Positioning GPS (L1+L5), GLONASS (L1), BDS (B1I+B1c+B2a+B2b), GALILEO (E1+E5a+E5b), QZSS (L1+L5), NavIC</p>\r\n\r\n<p>NFC Yes; NFC-SIM, HCE</p>\r\n\r\n<p>Infrared port Yes</p>\r\n\r\n<p>Radio No</p>\r\n\r\n<p>USB USB Type-C 2.0, OTG</p>\r\n\r\n<p>Features</p>\r\n\r\n<p>Sensors Fingerprint (under display, optical), accelerometer, gyro, compass</p>\r\n\r\n<p>BDS Satellite Calling and Messaging &ndash; China only</p>\r\n\r\n<p>Virtual proximity sensing</p>\r\n\r\n<p>Battery</p>\r\n\r\n<p>Type 5000 mAh</p>\r\n\r\n<p>Charging 100W wired, 3-50% in 9 min</p>\r\n', '<p><strong>Disclaimer.</strong> We can not guarantee that the information on this page is 100% correct.<br />\r\n<strong>Source</strong>: GSMArena</p>\r\n', '1749985507.jpg', '1749985546_0.', 0, 0, '2025-06-15 11:05:07');

-- --------------------------------------------------------

--
-- Table structure for table `product_option`
--

CREATE TABLE `product_option` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `popular_pd` int(11) DEFAULT NULL,
  `used_pd` int(11) DEFAULT NULL,
  `new_pd` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product_option`
--

INSERT INTO `product_option` (`id`, `product_id`, `popular_pd`, `used_pd`, `new_pd`, `updated_by`, `created_at`) VALUES
(11, 53, 1, 1, 1, 8, '2025-06-08 05:09:44'),
(13, 55, 1, 1, 1, 8, '2025-06-08 08:03:06'),
(14, 56, 1, 1, 1, 8, '2025-06-08 08:09:30'),
(15, 57, 1, 1, 1, 8, '2025-06-08 08:24:13'),
(16, 58, 1, 1, 1, 8, '2025-06-08 08:29:41'),
(17, 59, 1, 1, 1, 8, '2025-06-08 08:33:51'),
(18, 60, 1, 1, 1, 8, '2025-06-08 08:37:43'),
(19, 61, 1, 1, 1, 8, '2025-06-08 08:41:55'),
(20, 62, 1, 1, 1, 8, '2025-06-08 08:47:18'),
(21, 63, 1, 1, 1, 8, '2025-06-08 08:54:03'),
(22, 64, 1, 1, 1, 8, '2025-06-08 09:06:30'),
(23, 65, 1, 1, 1, 8, '2025-06-08 09:21:03'),
(24, 66, 1, 1, 1, 8, '2025-06-08 09:24:38'),
(25, 67, 1, 1, 1, 8, '2025-06-08 09:27:19'),
(26, 68, 1, 1, 1, 8, '2025-06-08 09:30:38'),
(27, 69, 1, 1, 1, 8, '2025-06-08 09:38:10'),
(28, 70, 1, 1, 1, 8, '2025-06-08 09:41:03'),
(29, 71, 1, 1, 1, 8, '2025-06-08 09:44:42'),
(30, 72, 1, 1, 1, 8, '2025-06-08 09:47:10'),
(31, 73, 1, 1, 1, 8, '2025-06-08 09:50:12'),
(32, 74, 1, 1, 1, 8, '2025-06-08 09:54:09'),
(33, 75, 1, 1, 1, 8, '2025-06-08 09:59:12'),
(34, 76, 1, 1, 1, 8, '2025-06-08 10:04:15'),
(35, 77, 1, 1, 1, 8, '2025-06-08 10:07:19'),
(36, 78, 1, 1, 1, 8, '2025-06-08 10:10:32'),
(37, 79, 1, 1, 1, 8, '2025-06-08 10:15:05'),
(38, 80, 1, 1, 1, 8, '2025-06-08 10:18:09'),
(39, 81, 1, 1, 1, 8, '2025-06-08 10:23:51'),
(40, 82, 1, 1, 1, 8, '2025-06-08 10:28:50'),
(41, 83, 1, 1, 1, 12, '2025-06-15 10:32:55'),
(42, 84, 1, 1, 1, 12, '2025-06-15 10:41:44'),
(43, 85, 1, 1, 1, 12, '2025-06-15 10:44:03'),
(44, 86, 1, 1, 1, 12, '2025-06-15 10:52:31'),
(45, 87, 1, 1, 1, 12, '2025-06-15 10:55:04'),
(46, 88, 1, 1, 1, 12, '2025-06-15 11:05:07');

-- --------------------------------------------------------

--
-- Table structure for table `shipping`
--

CREATE TABLE `shipping` (
  `id` int(11) NOT NULL,
  `shipping_option` varchar(50) NOT NULL,
  `shipping_price` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `shipping`
--

INSERT INTO `shipping` (`id`, `shipping_option`, `shipping_price`, `created_at`) VALUES
(1, 'Local Delivery 1$', 1, '2025-04-05 00:42:18'),
(2, 'Sihanoukville,Poipet: $ 10', 10, '2025-04-05 00:42:38'),
(3, 'Order province 3$', 3, '2025-04-05 00:43:55');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `image` text DEFAULT NULL,
  `password` varchar(250) NOT NULL,
  `otp` int(100) NOT NULL,
  `role_as` int(11) NOT NULL DEFAULT 0,
  `status` int(11) NOT NULL DEFAULT 1,
  `email_verify` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `image`, `password`, `otp`, `role_as`, `status`, `email_verify`, `updated_by`, `created_at`) VALUES
(2, 'vathana1', 'vathana1@gmail.com', '1746080737', '$2y$10$e/xGLRrxGIF5VNfLXkYmue8LJdUqIHTixRohmbvAxwYxfd/B7ujbO', 0, 1, 1, NULL, NULL, '2025-05-01 06:25:37'),
(3, 'vathana2', 'vathana2@gmail.com', '1746080786', '$2y$10$o.ahAN5q2TtHVnc8fE9rbO1yfB3.CnQCfBfq/W9S2BTYusqBPQsi2', 0, 1, 1, NULL, NULL, '2025-05-01 06:26:26'),
(4, 'vathana3', 'vathana3@gmail.com', '1746820829.jpg', '$2y$10$EwVHHq8U.cRQtty0wh7WPuf0nyLG/Z/huLN1wjJ9qW7AqmhYwptSm', 0, 1, 1, NULL, NULL, '2025-05-01 06:27:27'),
(5, 'test', 'test@gmail.comm', '1746821500', '$2y$10$e8K5riCTtUXLCOXxmBVOeujX.3II9Gm72ha9Dy8OZqvsNrl0APe32', 0, 0, 1, NULL, NULL, '2025-05-09 20:11:41'),
(8, 'heaoun', 'heaoun@gmail.com', NULL, '$2y$10$DNVne8kCBUbra00QgnfEoevyXXq7Lymh6hSz4AeHHTvzUQnCAlUmq', 0, 1, 1, NULL, NULL, '2025-06-07 15:02:11'),
(11, 'steelheart', 'steelheart639@gmail.com', NULL, '$2y$10$fwcPJg3zu1JNZb6/ebwxEOfPoW4xZ4Zj9wSJRfXJbrV/BszIJRKeO', 0, 0, 1, 2147483647, NULL, '2025-06-14 09:10:09'),
(12, 'mroun', 'mrounit83@gmail.com', NULL, '$2y$10$mQWaXzVplWJl.FwEMGeUz.RsJ8Mk8zezKiPKtpzP3824B7l22UjWe', 0, 1, 1, 2147483647, NULL, '2025-06-14 09:51:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_logs`
--
ALTER TABLE `admin_logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `cart with product_image` (`category_id`);

--
-- Indexes for table `information_website`
--
ALTER TABLE `information_website`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permission`
--
ALTER TABLE `permission`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_Id to id in users table` (`user_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_detail`
--
ALTER TABLE `product_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `test` (`brand_id`);

--
-- Indexes for table `product_image`
--
ALTER TABLE `product_image`
  ADD PRIMARY KEY (`id`),
  ADD KEY `database` (`product_id`);

--
-- Indexes for table `product_option`
--
ALTER TABLE `product_option`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id to id` (`product_id`);

--
-- Indexes for table `shipping`
--
ALTER TABLE `shipping`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_logs`
--
ALTER TABLE `admin_logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=456;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `information_website`
--
ALTER TABLE `information_website`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `permission`
--
ALTER TABLE `permission`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `product_detail`
--
ALTER TABLE `product_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT for table `product_image`
--
ALTER TABLE `product_image`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT for table `product_option`
--
ALTER TABLE `product_option`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `shipping`
--
ALTER TABLE `shipping`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart with product_image` FOREIGN KEY (`category_id`) REFERENCES `product_image` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `product_detail`
--
ALTER TABLE `product_detail`
  ADD CONSTRAINT `test` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `product_image`
--
ALTER TABLE `product_image`
  ADD CONSTRAINT `database` FOREIGN KEY (`product_id`) REFERENCES `product_detail` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `product_option`
--
ALTER TABLE `product_option`
  ADD CONSTRAINT `product_id to id` FOREIGN KEY (`product_id`) REFERENCES `product_detail` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
