-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2024 at 04:12 PM
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
-- Database: `sms`
--

-- --------------------------------------------------------

--
-- Table structure for table `account_fee_categories`
--

CREATE TABLE `account_fee_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `account_fee_categories`
--

INSERT INTO `account_fee_categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Registration Fee', '2021-06-19 06:28:50', '2021-06-19 06:38:29'),
(2, 'Monthly Fee', '2021-06-19 06:30:22', '2021-06-19 06:30:22'),
(3, 'Exam Fee', '2021-06-19 06:41:01', '2021-06-19 06:41:01'),
(6, 'Yearly Fee', '2021-06-26 01:27:45', '2021-06-26 01:27:45');

-- --------------------------------------------------------

--
-- Table structure for table `assign_subjects`
--

CREATE TABLE `assign_subjects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `class_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `full_mark` double NOT NULL,
  `pass_mark` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `assign_subjects`
--

INSERT INTO `assign_subjects` (`id`, `class_id`, `subject_id`, `full_mark`, `pass_mark`, `created_at`, `updated_at`) VALUES
(3, 2, 1, 100, 32, '2021-06-20 07:59:31', '2021-06-20 07:59:31'),
(4, 2, 4, 100, 32, '2021-06-20 07:59:31', '2021-06-20 07:59:31'),
(11, 4, 4, 100, 32, '2021-06-20 09:03:47', '2021-06-20 09:03:47'),
(12, 4, 4, 100, 32, '2021-06-20 09:03:47', '2021-06-20 09:03:47'),
(32, 7, 1, 100, 40, '2023-03-27 01:11:15', '2023-03-27 01:11:15'),
(33, 7, 4, 100, 40, '2023-03-27 01:11:15', '2023-03-27 01:11:15'),
(34, 7, 5, 100, 40, '2023-03-27 01:11:15', '2023-03-27 01:11:15'),
(35, 7, 7, 100, 40, '2023-03-27 01:11:15', '2023-03-27 01:11:15'),
(36, 7, 8, 100, 40, '2023-03-27 01:11:15', '2023-03-27 01:11:15'),
(37, 5, 1, 100, 32, '2023-03-27 01:11:43', '2023-03-27 01:11:43'),
(38, 5, 4, 100, 32, '2023-03-27 01:11:43', '2023-03-27 01:11:43'),
(39, 5, 5, 100, 32, '2023-03-27 01:11:43', '2023-03-27 01:11:43'),
(40, 5, 7, 100, 32, '2023-03-27 01:11:43', '2023-03-27 01:11:43'),
(41, 5, 8, 100, 32, '2023-03-27 01:11:43', '2023-03-27 01:11:43'),
(42, 1, 1, 100, 32, '2023-03-27 01:22:31', '2023-03-27 01:22:31'),
(43, 1, 4, 100, 32, '2023-03-27 01:22:31', '2023-03-27 01:22:31'),
(44, 1, 5, 100, 32, '2023-03-27 01:22:31', '2023-03-27 01:22:31'),
(45, 1, 7, 100, 32, '2023-03-27 01:22:31', '2023-03-27 01:22:31'),
(46, 1, 8, 100, 32, '2023-03-27 01:22:31', '2023-03-27 01:22:31'),
(47, 1, 9, 100, 32, '2023-03-27 01:22:31', '2023-03-27 01:22:31'),
(48, 7, 9, 100, 40, '2023-03-27 01:22:46', '2023-03-27 01:22:46');

-- --------------------------------------------------------

--
-- Table structure for table `ch_favorites`
--

CREATE TABLE `ch_favorites` (
  `id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `favorite_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ch_favorites`
--

INSERT INTO `ch_favorites` (`id`, `user_id`, `favorite_id`, `created_at`, `updated_at`) VALUES
(17252610, 1, 17, '2021-07-13 01:01:48', '2021-07-13 01:01:48');

-- --------------------------------------------------------

--
-- Table structure for table `ch_messages`
--

CREATE TABLE `ch_messages` (
  `id` bigint(20) NOT NULL,
  `type` varchar(255) NOT NULL,
  `from_id` bigint(20) NOT NULL,
  `to_id` bigint(20) NOT NULL,
  `body` varchar(5000) DEFAULT NULL,
  `attachment` varchar(255) DEFAULT NULL,
  `seen` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `designations`
--

CREATE TABLE `designations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `designations`
--

INSERT INTO `designations` (`id`, `name`, `created_at`, `updated_at`) VALUES
(2, 'Principal', '2021-06-27 01:49:37', '2023-03-27 01:24:25'),
(3, 'Vice-Principal', '2021-06-28 07:25:48', '2023-03-27 01:24:43'),
(4, 'Class Teacher', '2023-03-27 01:27:24', '2023-03-27 01:27:24');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `employee_id` int(11) NOT NULL COMMENT 'user_id=employee_id',
  `join_date` date DEFAULT NULL,
  `designation_id` int(11) NOT NULL,
  `word` longtext DEFAULT NULL,
  `id_no` varchar(255) DEFAULT NULL,
  `account_name` varchar(255) DEFAULT NULL,
  `account_no` varchar(255) DEFAULT NULL,
  `bank_name` varchar(255) DEFAULT NULL,
  `bank_branch` varchar(255) DEFAULT NULL,
  `pre_school` varchar(255) DEFAULT NULL,
  `pre_school_address` varchar(255) DEFAULT NULL,
  `reason` varchar(255) DEFAULT NULL,
  `pre_designation` varchar(255) DEFAULT NULL,
  `pre_join_date` date DEFAULT NULL,
  `pre_leave_date` date DEFAULT NULL,
  `cti_dri_image` varchar(255) DEFAULT NULL,
  `cv` varchar(255) DEFAULT NULL,
  `pre_letter` varchar(255) DEFAULT NULL,
  `health` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `employee_id`, `join_date`, `designation_id`, `word`, `id_no`, `account_name`, `account_no`, `bank_name`, `bank_branch`, `pre_school`, `pre_school_address`, `reason`, `pre_designation`, `pre_join_date`, `pre_leave_date`, `cti_dri_image`, `cv`, `pre_letter`, `health`, `created_at`, `updated_at`) VALUES
(1, 33, '2023-03-09', 2, 'hello', '3', 'Poonam Karki', '110011001100', 'nmb', 'biratnagar', NULL, NULL, NULL, NULL, '1970-01-01', '1970-01-01', NULL, NULL, NULL, 'none', '2023-04-09 15:37:15', '2024-01-08 03:24:13'),
(2, 29, '2023-03-21', 2, 'We provide best education.', '1', 'Poonam Karki', '110011001100', 'nmb', 'biratnagar', 'Hptal', 'Hptal', 'Hptal', 'Hptal', '2023-03-20', '2023-03-21', '202303211239received_1445140335965046.jpeg', '202303211239Poonam Karki.pdf', '202303211239Ingress Prime.jpg', 'none', '2023-03-21 12:39:52', '2023-04-08 12:37:00'),
(8, 34, '2010-01-20', 4, NULL, '3', 'Barji Mandal', '255669784565589', 'Rbb', 'Itahari', NULL, NULL, NULL, NULL, '1970-01-01', '1970-01-01', NULL, NULL, NULL, 'None', '2023-04-10 02:17:19', '2023-04-10 02:17:19'),
(9, 35, '2017-05-12', 4, NULL, '9', 'Rita Giri Puri', '255669784565589', 'Rbb', 'Itahari', NULL, NULL, NULL, NULL, '1970-01-01', '1970-01-01', NULL, NULL, NULL, 'None', '2023-04-10 02:19:11', '2023-04-10 02:19:11'),
(12, 38, '2023-04-10', 4, NULL, '12', 'Barji Mandal', '255669784565589', 'Rbb', 'Itahari', NULL, NULL, NULL, NULL, '1970-01-01', '1970-01-01', NULL, NULL, NULL, 'None', '2023-04-10 02:22:35', '2023-04-10 02:22:35'),
(13, 39, '2023-04-10', 4, NULL, '13', 'Rita Giri Puri', '255669784565589', 'Rbb', 'Itahari', NULL, NULL, NULL, NULL, '1970-01-01', '1970-01-01', NULL, NULL, NULL, 'None', '2023-04-10 02:23:34', '2023-04-10 02:23:34'),
(14, 40, '2023-04-10', 4, NULL, '14', 'Barji Mandal', '255669784565589', 'Rbb', 'Itahari', NULL, NULL, NULL, NULL, '1970-01-01', '1970-01-01', NULL, NULL, NULL, 'None', '2023-04-10 02:24:34', '2023-04-10 02:24:34');

-- --------------------------------------------------------

--
-- Table structure for table `employee_attends`
--

CREATE TABLE `employee_attends` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `employee_id` int(11) NOT NULL COMMENT 'student_id=user_id',
  `id_no` varchar(255) NOT NULL,
  `designation_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `attend_status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employee_attends`
--

INSERT INTO `employee_attends` (`id`, `employee_id`, `id_no`, `designation_id`, `date`, `attend_status`, `created_at`, `updated_at`) VALUES
(13, 20, '1', 2, '2021-06-27', 'Halfday', '2021-06-28 12:25:31', '2021-06-28 12:25:31'),
(14, 21, '2', 3, '2021-06-27', 'Absent', '2021-06-28 12:25:31', '2021-06-28 12:25:31'),
(15, 22, '3', 3, '2021-06-27', 'Present', '2021-06-28 12:25:31', '2021-06-28 12:25:31'),
(16, 20, '1', 2, '2021-06-29', 'Present', '2021-06-28 12:25:43', '2021-06-28 12:25:43'),
(17, 21, '2', 3, '2021-06-29', 'Halfday', '2021-06-28 12:25:43', '2021-06-28 12:25:43'),
(18, 22, '3', 3, '2021-06-29', 'Present', '2021-06-28 12:25:43', '2021-06-28 12:25:43'),
(19, 20, '1', 2, '2021-06-30', 'Leave', '2021-07-01 03:26:24', '2021-07-01 03:26:24'),
(20, 21, '2', 3, '2021-06-30', 'Absent', '2021-07-01 03:26:24', '2021-07-01 03:26:24'),
(21, 22, '3', 3, '2021-06-30', 'Present', '2021-07-01 03:26:24', '2021-07-01 03:26:24'),
(22, 29, '1', 3, '2023-03-26', 'Present', '2023-03-26 07:17:15', '2023-03-26 07:17:15');

-- --------------------------------------------------------

--
-- Table structure for table `employee_leaves`
--

CREATE TABLE `employee_leaves` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `employee_id` int(11) NOT NULL COMMENT 'student_id=user_id',
  `id_no` varchar(255) NOT NULL,
  `designation_id` int(11) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `reason` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `employee_loans`
--

CREATE TABLE `employee_loans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `loan_no` varchar(255) DEFAULT NULL,
  `id_no` varchar(255) DEFAULT NULL,
  `employee_id` int(11) NOT NULL COMMENT 'user_id=employee_id',
  `designation_id` int(11) DEFAULT NULL,
  `monthly_loan_paid` double DEFAULT NULL,
  `loan_amount` double DEFAULT NULL,
  `loan_date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `employee_promotions`
--

CREATE TABLE `employee_promotions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_no` varchar(255) DEFAULT NULL,
  `employee_id` int(11) NOT NULL COMMENT 'user_id=employee_id',
  `designation_id` int(11) DEFAULT NULL,
  `pre_designation_id` int(11) DEFAULT NULL,
  `salary` double DEFAULT NULL,
  `increase_salary` double DEFAULT NULL,
  `total_salary` double DEFAULT NULL,
  `promotion_date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employee_promotions`
--

INSERT INTO `employee_promotions` (`id`, `id_no`, `employee_id`, `designation_id`, `pre_designation_id`, `salary`, `increase_salary`, `total_salary`, `promotion_date`, `created_at`, `updated_at`) VALUES
(3, '5', 31, 2, 2, 80000, NULL, 80000, '2023-04-08', '2023-04-08 12:39:23', '2023-04-08 12:39:23');

-- --------------------------------------------------------

--
-- Table structure for table `employee_salaries`
--

CREATE TABLE `employee_salaries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `employee_id` int(11) NOT NULL COMMENT 'employee_id=user_id',
  `id_no` varchar(255) NOT NULL,
  `designation_id` int(11) NOT NULL,
  `month` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `salary` double NOT NULL,
  `paid_salary` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `start` datetime NOT NULL,
  `end` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `exam_types`
--

CREATE TABLE `exam_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `exam_types`
--

INSERT INTO `exam_types` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, '1st Terminal Exam', '2021-06-23 11:30:26', '2021-06-23 11:30:26'),
(2, '2nd Terminal Exam', '2021-06-23 11:36:45', '2021-06-23 11:39:16'),
(3, '3rd Terminal Exam', '2021-06-23 11:39:27', '2021-06-23 11:39:27'),
(4, 'Final Exam', '2021-06-23 11:39:35', '2021-06-23 11:39:35');

-- --------------------------------------------------------

--
-- Table structure for table `extra_costs`
--

CREATE TABLE `extra_costs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cost_id` varchar(255) DEFAULT NULL,
  `bill_no` varchar(255) DEFAULT NULL,
  `vendor_name` varchar(255) DEFAULT NULL,
  `pan_vat_no` varchar(255) DEFAULT NULL,
  `item_name` varchar(255) DEFAULT NULL,
  `quantity` varchar(255) DEFAULT NULL,
  `bill_date` date DEFAULT NULL,
  `price` double DEFAULT NULL,
  `total_price` double DEFAULT NULL,
  `discount` double DEFAULT NULL,
  `total_amount` double DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `extra_costs`
--

INSERT INTO `extra_costs` (`id`, `cost_id`, `bill_no`, `vendor_name`, `pan_vat_no`, `item_name`, `quantity`, `bill_date`, `price`, `total_price`, `discount`, `total_amount`, `description`, `image`, `created_at`, `updated_at`) VALUES
(27, '1', '123', 'Prince', '000999000', 'old desk', '12', '2023-03-27', 1000, 3000, 0, 3000, 'old desk', NULL, '2023-03-27 02:14:29', '2023-03-27 02:14:29'),
(28, '1', '123', 'Prince', '000999000', 'old desk', '2', '2023-03-27', 2000, 3000, 0, 3000, 'old desk', NULL, '2023-03-27 02:14:29', '2023-03-27 02:14:29');

-- --------------------------------------------------------

--
-- Table structure for table `extra_incomes`
--

CREATE TABLE `extra_incomes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `bill_no` varchar(255) NOT NULL,
  `date` varchar(255) DEFAULT NULL,
  `item_name` varchar(255) DEFAULT NULL,
  `quantity` varchar(255) DEFAULT NULL,
  `price` double DEFAULT NULL,
  `amount` double DEFAULT NULL,
  `discount` double DEFAULT NULL,
  `total_amount` double DEFAULT NULL,
  `remarks` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fee_category_amounts`
--

CREATE TABLE `fee_category_amounts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fee_category_id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `amount` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fee_category_amounts`
--

INSERT INTO `fee_category_amounts` (`id`, `fee_category_id`, `class_id`, `amount`, `created_at`, `updated_at`) VALUES
(5, 2, 1, 1500, '2021-06-19 10:07:17', '2021-06-19 10:07:17'),
(6, 2, 2, 1700, '2021-06-19 10:07:17', '2021-06-19 10:07:17'),
(7, 2, 4, 1800, '2021-06-19 10:07:17', '2021-06-19 10:07:17'),
(8, 2, 5, 2000, '2021-06-19 10:07:17', '2021-06-19 10:07:17'),
(9, 3, 1, 500, '2021-06-19 10:19:52', '2021-06-19 10:19:52'),
(10, 3, 2, 700, '2021-06-19 10:19:52', '2021-06-19 10:19:52'),
(11, 3, 4, 900, '2021-06-19 10:19:52', '2021-06-19 10:19:52'),
(12, 3, 5, 1100, '2021-06-19 10:19:52', '2021-06-19 10:19:52'),
(29, 1, 1, 2500, '2021-06-20 09:41:30', '2021-06-20 09:41:30'),
(30, 1, 2, 3000, '2021-06-20 09:41:30', '2021-06-20 09:41:30'),
(31, 1, 4, 3500, '2021-06-20 09:41:30', '2021-06-20 09:41:30'),
(32, 1, 5, 4000, '2021-06-20 09:41:30', '2021-06-20 09:41:30'),
(35, 6, 1, 45000, '2021-06-26 01:28:38', '2021-06-26 01:28:38'),
(36, 6, 2, 50000, '2021-06-26 01:28:38', '2021-06-26 01:28:38');

-- --------------------------------------------------------

--
-- Table structure for table `fee_remarks`
--

CREATE TABLE `fee_remarks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `bill_no` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `loan_pays`
--

CREATE TABLE `loan_pays` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `loan_no` varchar(255) DEFAULT NULL,
  `id_no` varchar(255) DEFAULT NULL,
  `employee_id` int(11) NOT NULL COMMENT 'user_id=employee_id',
  `designation_id` int(11) DEFAULT NULL,
  `monthly_loan_paid` double DEFAULT NULL,
  `remain_amount` double DEFAULT NULL,
  `paid_date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `loan_pays`
--

INSERT INTO `loan_pays` (`id`, `loan_no`, `id_no`, `employee_id`, `designation_id`, `monthly_loan_paid`, `remain_amount`, `paid_date`, `created_at`, `updated_at`) VALUES
(16, '1', '3', 22, 3, 2500, 7500, '2021-06-30', '2021-06-30 08:06:01', '2021-06-30 08:06:01'),
(18, '1', '3', 22, 3, 5000, 2500, '2021-06-30', '2021-06-30 08:07:55', '2021-06-30 08:07:55'),
(19, '1', '3', 22, 3, 2500, 0, '2021-06-30', '2021-06-30 08:08:25', '2021-06-30 08:08:25'),
(20, '2', '2', 21, 3, 500, 1500, '2021-06-30', '2021-06-30 08:55:52', '2021-06-30 08:55:52'),
(21, '3', '3', 22, 3, 25000, 0, '2021-06-30', '2021-06-30 08:57:26', '2021-06-30 08:57:26');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(13, '2014_10_12_000000_create_users_table', 1),
(14, '2014_10_12_100000_create_password_resets_table', 1),
(15, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(16, '2019_08_19_000000_create_failed_jobs_table', 1),
(18, '2021_06_16_044018_create_sessions_table', 1),
(19, '2021_06_18_063619_create_student_years_table', 2),
(20, '2021_06_18_114414_create_student_classes_table', 3),
(21, '2021_06_18_131009_create_student_sections_table', 4),
(22, '2021_06_19_032834_create_student_groups_table', 5),
(23, '2021_06_19_115903_create_account_fee_categories_table', 6),
(24, '2021_06_19_123919_create_fee_category_amounts_table', 7),
(25, '2021_06_19_172458_create_systems_table', 8),
(26, '2021_06_20_102330_create_student_shifts_table', 9),
(27, '2021_06_20_110347_create_school_subjects_table', 10),
(28, '2021_06_20_123058_create_assign_subjects_table', 11),
(29, '2021_06_20_154837_create_student_regs_table', 12),
(30, '2021_06_22_173309_create_student_attends_table', 13),
(31, '2021_06_23_165952_create_student_marks_table', 14),
(32, '2021_06_23_170640_create_exam_types_table', 15),
(33, '2021_06_24_091224_create_student_grades_table', 16),
(34, '2021_06_24_132305_create_student_fees_table', 17),
(35, '2021_06_24_133335_create_fee_remarks_table', 18),
(36, '2021_06_26_164524_create_designations_table', 19),
(37, '2021_06_27_113105_create_employees_table', 20),
(38, '2021_06_28_123144_create_employee_promotions_table', 21),
(39, '2021_06_28_164821_create_employee_attends_table', 22),
(40, '2021_06_29_091749_create_employee_loans_table', 23),
(41, '2021_06_30_103843_create_loan_pays_table', 24),
(42, '2021_06_30_155925_create_employee_leaves_table', 25),
(43, '2021_07_01_093529_create_employee_salaries_table', 26),
(44, '2021_07_01_160022_create_student_promotions_table', 27),
(45, '2021_07_02_054449_create_extra_incomes_table', 28),
(46, '2021_07_02_075604_create_extra_costs_table', 29),
(47, '2019_09_22_192348_create_messages_table', 30),
(48, '2019_10_16_211433_create_favorites_table', 30),
(49, '2019_10_18_223259_add_avatar_to_users', 30),
(50, '2019_10_20_211056_add_messenger_color_to_users', 30),
(51, '2019_10_22_000539_add_dark_mode_to_users', 30),
(52, '2019_10_25_214038_add_active_status_to_users', 30),
(53, '2021_07_13_152841_create_events_table', 31),
(55, '2019_12_14_000001_create_personal_access_tokens_table', 32),
(56, '2023_04_06_081058_create_portfolios_table', 33),
(57, '2023_04_06_081106_create_teacher_says_table', 33),
(58, '2024_01_08_094952_add_school_detail_to_systems', 34);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `portfolios`
--

CREATE TABLE `portfolios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `bg` varchar(255) DEFAULT NULL,
  `bgp` varchar(255) DEFAULT NULL,
  `photos` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `portfolios`
--

INSERT INTO `portfolios` (`id`, `image`, `photo`, `bg`, `bgp`, `photos`, `created_at`, `updated_at`) VALUES
(1, '202304060819IMG-7591.jpg', 'IMG-7597.jpg', NULL, NULL, NULL, NULL, '2023-04-06 07:30:46');

-- --------------------------------------------------------

--
-- Table structure for table `school_subjects`
--

CREATE TABLE `school_subjects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `school_subjects`
--

INSERT INTO `school_subjects` (`id`, `name`, `description`, `photo`, `created_at`, `updated_at`) VALUES
(1, 'Maths', 'Public By Prince Minali', '202106201143maths-chalkboard_23-2148177094.jpg', '2021-06-20 05:58:48', '2021-06-20 05:58:48'),
(4, 'Science', 'Public By Prince Minali', '202106201226school.jpg', '2021-06-20 06:41:28', '2021-06-20 06:41:28'),
(5, 'Nepali', 'Public By Prince Minali', NULL, '2021-07-04 07:13:20', '2021-07-04 07:13:20'),
(7, 'English', 'Public By Prince Minali', NULL, '2021-07-05 06:55:06', '2021-07-05 06:55:06'),
(8, 'Social Studies', 'Public By Prince Minali', NULL, '2021-07-05 07:28:54', '2021-07-05 07:28:54'),
(9, 'Health & Population', 'BIbek', '202303270221mission-set1-03.png', '2023-03-27 01:21:39', '2023-03-27 01:21:39');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` text NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('EmyQqfoLd2EIz80GVQLT5d1mpbbINejvY2RREIfe', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiaVJUTWUxMDZkQkkwdGdWejBnSWRxRmlCckFIRDRJazAwTXZuY1RmMSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzM6Imh0dHA6Ly9sb2NhbGhvc3Qvc21zL3B1YmxpYy9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1704723897),
('GiSY5QkCpJiQy5AXEz8YHco19XV3y9Q3PbTkofdk', 42, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36 Edg/120.0.0.0', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoib1RlNWRBWm95d3lJR01JdzBIU29LUmZONmZJSWxaWERBNmRqWW43WSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzc6Imh0dHA6Ly9sb2NhbGhvc3Qvc21zL3B1YmxpYy9kYXNoYm9hcmQiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjE3OiJwYXNzd29yZF9oYXNoX3dlYiI7czo2MDoiJDJ5JDEwJEJDY2RCdmdRTmZLL2t1Z1lHWEo0cC4ycjlEcEIuSE5qeVgua2RoU2liaWtTcEVLT3BKMlNxIjtzOjIxOiJwYXNzd29yZF9oYXNoX3NhbmN0dW0iO3M6NjA6IiQyeSQxMCRCQ2NkQnZnUU5mSy9rdWdZR1hKNHAuMnI5RHBCLkhOanlYLmtkaFNpYmlrU3BFS09wSjJTcSI7czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6NDI7fQ==', 1704726674),
('wTFW3pvA5wkeYfnUW7qRoiMhxfaCFXxnqaVgVCSU', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoienZIVDRGYnRRSk9SU0JjaDBQYzMweFlpQXVBYkJSOFpjaVBlc2lHTyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzM6Imh0dHA6Ly9sb2NhbGhvc3Qvc21zL3B1YmxpYy9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1704725718);

-- --------------------------------------------------------

--
-- Table structure for table `student_attends`
--

CREATE TABLE `student_attends` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` int(11) NOT NULL COMMENT 'student_id=user_id',
  `year_id` varchar(255) NOT NULL,
  `class_id` varchar(255) NOT NULL,
  `section_id` varchar(255) NOT NULL,
  `id_no` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `attend_status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `student_attends`
--

INSERT INTO `student_attends` (`id`, `student_id`, `year_id`, `class_id`, `section_id`, `id_no`, `date`, `attend_status`, `created_at`, `updated_at`) VALUES
(40, 1, '3', '1', '2', '20210008', '2021-07-11', 'Present', '2021-07-04 14:21:43', '2021-07-04 14:21:43'),
(41, 5, '3', '1', '2', '20200016', '2021-07-11', 'Present', '2021-07-04 14:21:43', '2021-07-04 14:21:43'),
(42, 1, '3', '1', '2', '20210008', '2021-07-12', 'Present', '2021-07-04 14:21:50', '2021-07-04 14:21:50'),
(43, 5, '3', '1', '2', '20200016', '2021-07-12', 'Present', '2021-07-04 14:21:50', '2021-07-04 14:21:50'),
(44, 1, '3', '1', '2', '20210008', '2021-07-13', 'Present', '2021-07-04 14:21:55', '2021-07-04 14:21:55'),
(45, 5, '3', '1', '2', '20200016', '2021-07-13', 'Present', '2021-07-04 14:21:55', '2021-07-04 14:21:55'),
(46, 1, '3', '1', '2', '20210008', '2021-07-14', 'Present', '2021-07-04 14:22:00', '2021-07-04 14:22:00'),
(47, 5, '3', '1', '2', '20200016', '2021-07-14', 'Present', '2021-07-04 14:22:00', '2021-07-04 14:22:00'),
(48, 1, '3', '1', '2', '20210008', '2021-07-15', 'Present', '2021-07-04 14:22:04', '2021-07-04 14:22:04'),
(49, 5, '3', '1', '2', '20200016', '2021-07-15', 'Present', '2021-07-04 14:22:04', '2021-07-04 14:22:04'),
(50, 1, '3', '1', '2', '20210008', '2021-07-16', 'Present', '2021-07-04 14:22:08', '2021-07-04 14:22:08'),
(51, 5, '3', '1', '2', '20200016', '2021-07-16', 'Present', '2021-07-04 14:22:08', '2021-07-04 14:22:08'),
(52, 1, '3', '1', '2', '20210008', '2021-07-17', 'Present', '2021-07-04 14:22:14', '2021-07-04 14:22:14'),
(53, 5, '3', '1', '2', '20200016', '2021-07-17', 'Present', '2021-07-04 14:22:14', '2021-07-04 14:22:14'),
(54, 1, '3', '1', '2', '20210008', '2021-07-18', 'Present', '2021-07-04 14:22:33', '2021-07-04 14:22:33'),
(55, 5, '3', '1', '2', '20200016', '2021-07-18', 'Present', '2021-07-04 14:22:33', '2021-07-04 14:22:33'),
(56, 1, '3', '1', '2', '20210008', '2021-07-19', 'Present', '2021-07-04 14:22:38', '2021-07-04 14:22:38'),
(57, 5, '3', '1', '2', '20200016', '2021-07-19', 'Present', '2021-07-04 14:22:38', '2021-07-04 14:22:38'),
(58, 1, '3', '1', '2', '20210008', '2021-07-20', 'Present', '2021-07-04 14:22:44', '2021-07-04 14:22:44'),
(59, 5, '3', '1', '2', '20200016', '2021-07-20', 'Present', '2021-07-04 14:22:44', '2021-07-04 14:22:44'),
(60, 1, '3', '1', '2', '20210008', '2021-07-21', 'Present', '2021-07-04 14:22:49', '2021-07-04 14:22:49'),
(61, 5, '3', '1', '2', '20200016', '2021-07-21', 'Present', '2021-07-04 14:22:49', '2021-07-04 14:22:49'),
(62, 1, '3', '1', '2', '20210008', '2021-07-22', 'Present', '2021-07-04 14:22:53', '2021-07-04 14:22:53'),
(63, 5, '3', '1', '2', '20200016', '2021-07-22', 'Present', '2021-07-04 14:22:53', '2021-07-04 14:22:53'),
(64, 1, '3', '1', '2', '20210008', '2021-07-23', 'Present', '2021-07-04 14:22:58', '2021-07-04 14:22:58'),
(65, 5, '3', '1', '2', '20200016', '2021-07-23', 'Present', '2021-07-04 14:22:58', '2021-07-04 14:22:58'),
(66, 1, '3', '1', '2', '20210008', '2021-07-24', 'Present', '2021-07-04 14:23:21', '2021-07-04 14:23:21'),
(67, 5, '3', '1', '2', '20200016', '2021-07-24', 'Present', '2021-07-04 14:23:21', '2021-07-04 14:23:21'),
(68, 1, '3', '1', '2', '20210008', '2021-07-25', 'Present', '2021-07-04 14:23:26', '2021-07-04 14:23:26'),
(69, 5, '3', '1', '2', '20200016', '2021-07-25', 'Present', '2021-07-04 14:23:26', '2021-07-04 14:23:26'),
(70, 1, '3', '1', '2', '20210008', '2021-07-26', 'Present', '2021-07-04 14:23:31', '2021-07-04 14:23:31'),
(71, 5, '3', '1', '2', '20200016', '2021-07-26', 'Present', '2021-07-04 14:23:31', '2021-07-04 14:23:31'),
(72, 1, '3', '1', '2', '20210008', '2021-07-27', 'Present', '2021-07-04 14:23:35', '2021-07-04 14:23:35'),
(73, 5, '3', '1', '2', '20200016', '2021-07-27', 'Present', '2021-07-04 14:23:35', '2021-07-04 14:23:35'),
(74, 1, '3', '1', '2', '20210008', '2021-07-28', 'Present', '2021-07-04 14:23:40', '2021-07-04 14:23:40'),
(75, 5, '3', '1', '2', '20200016', '2021-07-28', 'Present', '2021-07-04 14:23:40', '2021-07-04 14:23:40'),
(76, 1, '3', '1', '2', '20210008', '2021-07-29', 'Present', '2021-07-04 14:24:46', '2021-07-04 14:24:46'),
(77, 5, '3', '1', '2', '20200016', '2021-07-29', 'Present', '2021-07-04 14:24:46', '2021-07-04 14:24:46'),
(78, 1, '3', '1', '2', '20210008', '2021-07-30', 'Halfday', '2021-07-04 14:24:54', '2021-07-04 14:24:54'),
(79, 5, '3', '1', '2', '20200016', '2021-07-30', 'Present', '2021-07-04 14:24:54', '2021-07-04 14:24:54'),
(94, 1, '3', '1', '2', '20210008', '2021-07-31', 'Halfday', '2021-07-08 02:44:52', '2021-07-08 02:44:52'),
(95, 5, '3', '1', '2', '20200016', '2021-07-31', 'Late', '2021-07-08 02:44:52', '2021-07-08 02:44:52');

-- --------------------------------------------------------

--
-- Table structure for table `student_classes`
--

CREATE TABLE `student_classes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `student_classes`
--

INSERT INTO `student_classes` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Class One', '2021-06-18 06:18:13', '2021-06-18 07:44:05'),
(2, 'Class Two', '2021-06-18 06:18:35', '2021-06-18 06:28:33'),
(4, 'Class Three', '2021-06-18 07:20:37', '2021-06-18 07:20:37'),
(5, 'Class Four', '2021-06-18 08:29:52', '2021-06-18 08:29:52'),
(6, 'Class Five', '2021-06-24 07:23:10', '2021-06-24 07:23:10'),
(7, 'Class Six', '2021-06-24 07:23:47', '2021-06-24 07:23:47');

-- --------------------------------------------------------

--
-- Table structure for table `student_fees`
--

CREATE TABLE `student_fees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `bill_no` varchar(255) NOT NULL,
  `year_id` int(11) DEFAULT NULL,
  `class_id` int(11) DEFAULT NULL,
  `section_id` int(11) DEFAULT NULL,
  `student_id` int(11) DEFAULT NULL,
  `fee_category_id` int(11) DEFAULT NULL,
  `month` varchar(255) DEFAULT NULL,
  `exam_type_id` int(11) DEFAULT NULL,
  `date` varchar(255) DEFAULT NULL,
  `amount` double DEFAULT NULL,
  `discount` double DEFAULT NULL,
  `total_amount` double DEFAULT NULL,
  `remarks` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `student_grades`
--

CREATE TABLE `student_grades` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `grade_name` varchar(255) NOT NULL,
  `grade_point` varchar(255) NOT NULL,
  `start_marks` varchar(255) NOT NULL,
  `end_marks` varchar(255) NOT NULL,
  `start_point` varchar(255) NOT NULL,
  `end_point` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `student_grades`
--

INSERT INTO `student_grades` (`id`, `grade_name`, `grade_point`, `start_marks`, `end_marks`, `start_point`, `end_point`, `remarks`, `created_at`, `updated_at`) VALUES
(2, 'A+', '5', '90', '100', '4.60', '5', 'Excellent', '2021-06-26 01:22:33', '2021-07-05 07:42:39'),
(5, 'A', '4', '70', '89', '4', '4.5', 'Very Good', '2021-07-05 07:12:15', '2021-07-05 07:42:26'),
(6, 'B+', '3', '50', '69', '3', '3.9', 'Good', '2021-07-05 07:12:53', '2021-07-05 07:13:47'),
(7, 'B', '2', '32', '49', '2', '2.9', 'Bad', '2021-07-05 07:14:24', '2021-07-05 07:14:24'),
(8, 'C', '1', '1', '31', '1', '1.9', 'Very Bad', '2021-07-05 07:15:09', '2021-07-05 07:15:09');

-- --------------------------------------------------------

--
-- Table structure for table `student_groups`
--

CREATE TABLE `student_groups` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `student_groups`
--

INSERT INTO `student_groups` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Red', '2021-06-18 21:55:09', '2021-06-18 22:01:50'),
(2, 'Green', '2021-06-18 21:55:19', '2021-06-18 21:55:19'),
(3, 'Blue', '2021-06-18 21:55:27', '2021-06-18 21:55:27'),
(4, 'Yellow', '2021-06-18 21:55:35', '2021-06-18 21:55:35');

-- --------------------------------------------------------

--
-- Table structure for table `student_marks`
--

CREATE TABLE `student_marks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` int(11) NOT NULL COMMENT 'student_id=student_id',
  `id_no` varchar(255) DEFAULT NULL,
  `year_id` int(11) DEFAULT NULL,
  `class_id` int(11) DEFAULT NULL,
  `section_id` int(11) DEFAULT NULL,
  `assign_subject_id` int(11) DEFAULT NULL,
  `exam_type_id` int(11) DEFAULT NULL,
  `marks` double DEFAULT NULL,
  `practical_marks` double DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `student_marks`
--

INSERT INTO `student_marks` (`id`, `student_id`, `id_no`, `year_id`, `class_id`, `section_id`, `assign_subject_id`, `exam_type_id`, `marks`, `practical_marks`, `created_at`, `updated_at`) VALUES
(47, 30, '20790029', 5, 7, 3, 32, 4, 99, NULL, '2023-03-27 01:27:31', '2023-03-27 01:27:31'),
(48, 30, '20790029', 5, 7, 3, 33, 4, 69, 24, '2023-03-27 01:32:58', '2023-03-27 01:32:58');

-- --------------------------------------------------------

--
-- Table structure for table `student_promotions`
--

CREATE TABLE `student_promotions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` int(11) NOT NULL COMMENT 'user_id=student_id',
  `id_no` int(11) NOT NULL,
  `promotion_date` date DEFAULT NULL,
  `roll` int(11) DEFAULT NULL,
  `pre_roll` int(11) DEFAULT NULL,
  `class_id` int(11) NOT NULL,
  `pre_class_id` int(11) NOT NULL,
  `section_id` int(11) DEFAULT NULL,
  `pre_section_id` int(11) DEFAULT NULL,
  `year_id` int(11) NOT NULL,
  `pre_year_id` int(11) NOT NULL,
  `group_id` int(11) DEFAULT NULL,
  `pre_group_id` int(11) DEFAULT NULL,
  `shift_id` int(11) DEFAULT NULL,
  `pre_shift_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `student_regs`
--

CREATE TABLE `student_regs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` int(11) NOT NULL COMMENT 'user_id=student_id',
  `reg_date` date DEFAULT NULL,
  `roll` int(11) DEFAULT NULL,
  `class_id` int(11) NOT NULL,
  `section_id` int(11) DEFAULT NULL,
  `year_id` int(11) NOT NULL,
  `group_id` int(11) DEFAULT NULL,
  `shift_id` int(11) DEFAULT NULL,
  `id_no` varchar(255) DEFAULT NULL,
  `pre_school` varchar(255) DEFAULT NULL,
  `pre_school_address` varchar(255) DEFAULT NULL,
  `reason` varchar(255) DEFAULT NULL,
  `pre_class` varchar(255) DEFAULT NULL,
  `pre_leaving` date DEFAULT NULL,
  `pre_admission` date DEFAULT NULL,
  `birth_certificate` varchar(255) DEFAULT NULL,
  `pre_marksheet` varchar(255) DEFAULT NULL,
  `health` varchar(255) DEFAULT NULL,
  `transport` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `student_sections`
--

CREATE TABLE `student_sections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `student_sections`
--

INSERT INTO `student_sections` (`id`, `name`, `created_at`, `updated_at`) VALUES
(2, 'A', '2021-06-18 07:47:27', '2021-06-18 07:47:27'),
(3, 'B', '2021-06-18 07:58:39', '2021-06-18 07:58:39'),
(4, 'C', '2021-06-18 07:58:48', '2021-06-18 07:58:48'),
(5, 'D', '2021-06-18 08:29:16', '2021-06-18 08:29:16');

-- --------------------------------------------------------

--
-- Table structure for table `student_shifts`
--

CREATE TABLE `student_shifts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `student_shifts`
--

INSERT INTO `student_shifts` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Morning', '2021-06-20 04:48:48', '2021-06-20 04:48:48'),
(4, 'Day', '2021-06-20 23:08:24', '2021-06-20 23:08:24');

-- --------------------------------------------------------

--
-- Table structure for table `student_years`
--

CREATE TABLE `student_years` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `student_years`
--

INSERT INTO `student_years` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, '2076', '2021-06-18 05:26:05', '2021-06-22 07:41:20'),
(2, '2077', '2021-06-18 05:28:16', '2021-06-22 07:41:11'),
(3, '2078', '2021-06-18 05:28:29', '2021-06-22 07:16:14'),
(5, '2079', '2021-06-18 06:14:16', '2021-06-22 07:41:29'),
(6, '2080', '2021-06-18 08:29:35', '2021-06-22 07:41:50');

-- --------------------------------------------------------

--
-- Table structure for table `systems`
--

CREATE TABLE `systems` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `image` longtext DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `currency` varchar(255) DEFAULT NULL,
  `session` varchar(255) DEFAULT NULL,
  `footer` varchar(255) DEFAULT NULL,
  `body_color` varchar(255) DEFAULT NULL,
  `theme` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `school_detail` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `systems`
--

INSERT INTO `systems` (`id`, `name`, `title`, `address`, `phone`, `logo`, `image`, `email`, `currency`, `session`, `footer`, `body_color`, `theme`, `created_at`, `updated_at`, `school_detail`) VALUES
(1, 'techiegurkhas', 'techiegurkhas', 'techiegurkhas', '9862133755', 'Dapper.jpg', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d529.8163117970761!2d87.2599826042119!3d26.707172129007223!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ef6bb85fba9dfb%3A0x20ac3941772cbbff!2sShree%20panchyat%20Rajat%20Jayanti%20Adharbhut%20Bidhyalaya!5e0!3m2!1sen!2snp!4v1680960078861!5m2!1sen!2snp\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade', 'info@techiegurkhas.edu.np', 'Nrp', '2021 - 2022', 'Techiegurkhas.com', '#33a1e6', '#3d85d1', NULL, '2024-01-08 09:14:44', 'techiegurkhas\r\nIn addition to its history of academic excellence in the national level, The school strongly encourages students to participate in various co-curricular activities and is devoted to helping students achieve their dreams.\r\n\r\nThe school\'s mission is to provide students with the opportunity to serve, lead, and fulfill their potential in all spheres so that they can take their place in the global village.\r\n\r\nsprjbs is located at the heart of Itahari 19, a breathtaking panoramic city gifted with stunning sights, and is linked to the city with fine tarred motorable roads. The school environment is suitable for pleasing and creative learning.\r\n\r\nOverall, Shree Panchayat Rajat Jayanti Basic School is a well-established educational institution that provides quality education to its students while encouraging them to pursue their dreams and participate in co-curricular activities. Its location in Pokhara also provides students with a beautiful and conducive environment for learning.');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_says`
--

CREATE TABLE `teacher_says` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `usertype` varchar(255) DEFAULT NULL COMMENT 'Student,Employee,Admin',
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `two_factor_secret` text DEFAULT NULL,
  `two_factor_recovery_codes` text DEFAULT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `qualification` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `marital_status` varchar(255) DEFAULT NULL,
  `blood_group` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `fname` varchar(255) DEFAULT NULL,
  `mname` varchar(255) DEFAULT NULL,
  `religion` varchar(255) DEFAULT NULL,
  `id_no` varchar(255) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `code` varchar(255) DEFAULT NULL,
  `role` varchar(255) DEFAULT NULL COMMENT 'admin=head of software,operator=computer operator,user=employee',
  `join_date` date DEFAULT NULL,
  `designation_id` int(11) DEFAULT NULL,
  `salary` double DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '0=inactive,1=active',
  `remember_token` varchar(100) DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `avatar` varchar(255) NOT NULL,
  `messenger_color` varchar(255) NOT NULL DEFAULT '#2180f3',
  `dark_mode` tinyint(1) NOT NULL DEFAULT 0,
  `active_status` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `usertype`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `mobile`, `address`, `qualification`, `gender`, `marital_status`, `blood_group`, `image`, `fname`, `mname`, `religion`, `id_no`, `dob`, `code`, `role`, `join_date`, `designation_id`, `salary`, `status`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`, `avatar`, `messenger_color`, `dark_mode`, `active_status`) VALUES
(33, 'Admin', 'Laxmi KC', 'Laxmipoudel.kc@gmail.com', NULL, '$2y$10$xlz33c18hKexoMDL2jIF9.mF4t68isEI1M9AYiq0GaqhxE/myVocK', NULL, NULL, '9862133755', 'nepal', 'Principal', 'Female', 'Married', '0-', NULL, 'padam bahadur khadka', 'mmm', 'Hinduism', '3', '1989-12-23', '6470', NULL, '2023-03-09', 2, 65000, 1, NULL, NULL, NULL, '2023-04-09 15:37:15', '2023-04-09 15:37:15', '0', '#2180f3', 0, 0),
(41, 'Admin', 'mebibek06', 'mebibek06@gmail.com', NULL, '$2y$10$kBvdubR6CmpMFBIBs5qI4OIxZuaHv0.4vME7YtiXpS8YY7QN1rCzi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '2024-01-05 15:21:50', '2024-01-05 15:21:50', '0', '#2180f3', 0, 0),
(42, 'Admin', 'pchiranjivi2050', 'email@chiranjivipoudel.com.np', NULL, '$2y$10$BCcdBvgQNfK/kugYGXJ4p.2r9DpB.HNjyX.kdhSibikSpEKOpJ2Sq', NULL, NULL, '9862133755', 'itahari 20', 'Engineer', 'Male', 'Married', 'B-', '202401080533left hAND.jpg', 'hira mani', 'laxmi', 'Hinduism', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '2024-01-05 15:22:26', '2024-01-07 23:48:33', '0', '#2180f3', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account_fee_categories`
--
ALTER TABLE `account_fee_categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `account_fee_categories_name_unique` (`name`);

--
-- Indexes for table `assign_subjects`
--
ALTER TABLE `assign_subjects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ch_favorites`
--
ALTER TABLE `ch_favorites`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ch_messages`
--
ALTER TABLE `ch_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `designations`
--
ALTER TABLE `designations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `designations_name_unique` (`name`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee_attends`
--
ALTER TABLE `employee_attends`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee_leaves`
--
ALTER TABLE `employee_leaves`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee_loans`
--
ALTER TABLE `employee_loans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee_promotions`
--
ALTER TABLE `employee_promotions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee_salaries`
--
ALTER TABLE `employee_salaries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exam_types`
--
ALTER TABLE `exam_types`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `exam_types_name_unique` (`name`);

--
-- Indexes for table `extra_costs`
--
ALTER TABLE `extra_costs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `extra_incomes`
--
ALTER TABLE `extra_incomes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `fee_category_amounts`
--
ALTER TABLE `fee_category_amounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fee_remarks`
--
ALTER TABLE `fee_remarks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loan_pays`
--
ALTER TABLE `loan_pays`
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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `portfolios`
--
ALTER TABLE `portfolios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `school_subjects`
--
ALTER TABLE `school_subjects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `student_attends`
--
ALTER TABLE `student_attends`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_classes`
--
ALTER TABLE `student_classes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `student_classes_name_unique` (`name`);

--
-- Indexes for table `student_fees`
--
ALTER TABLE `student_fees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_grades`
--
ALTER TABLE `student_grades`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_groups`
--
ALTER TABLE `student_groups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `student_groups_name_unique` (`name`);

--
-- Indexes for table `student_marks`
--
ALTER TABLE `student_marks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_promotions`
--
ALTER TABLE `student_promotions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_regs`
--
ALTER TABLE `student_regs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_sections`
--
ALTER TABLE `student_sections`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `student_sections_name_unique` (`name`);

--
-- Indexes for table `student_shifts`
--
ALTER TABLE `student_shifts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `student_shifts_name_unique` (`name`);

--
-- Indexes for table `student_years`
--
ALTER TABLE `student_years`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `student_years_name_unique` (`name`);

--
-- Indexes for table `systems`
--
ALTER TABLE `systems`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher_says`
--
ALTER TABLE `teacher_says`
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
-- AUTO_INCREMENT for table `account_fee_categories`
--
ALTER TABLE `account_fee_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `assign_subjects`
--
ALTER TABLE `assign_subjects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `designations`
--
ALTER TABLE `designations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `employee_attends`
--
ALTER TABLE `employee_attends`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `employee_leaves`
--
ALTER TABLE `employee_leaves`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `employee_loans`
--
ALTER TABLE `employee_loans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `employee_promotions`
--
ALTER TABLE `employee_promotions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `employee_salaries`
--
ALTER TABLE `employee_salaries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `exam_types`
--
ALTER TABLE `exam_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `extra_costs`
--
ALTER TABLE `extra_costs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `extra_incomes`
--
ALTER TABLE `extra_incomes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fee_category_amounts`
--
ALTER TABLE `fee_category_amounts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `fee_remarks`
--
ALTER TABLE `fee_remarks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `loan_pays`
--
ALTER TABLE `loan_pays`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `portfolios`
--
ALTER TABLE `portfolios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `school_subjects`
--
ALTER TABLE `school_subjects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `student_attends`
--
ALTER TABLE `student_attends`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT for table `student_classes`
--
ALTER TABLE `student_classes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `student_fees`
--
ALTER TABLE `student_fees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `student_grades`
--
ALTER TABLE `student_grades`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `student_groups`
--
ALTER TABLE `student_groups`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `student_marks`
--
ALTER TABLE `student_marks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `student_promotions`
--
ALTER TABLE `student_promotions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student_regs`
--
ALTER TABLE `student_regs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `student_sections`
--
ALTER TABLE `student_sections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `student_shifts`
--
ALTER TABLE `student_shifts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `student_years`
--
ALTER TABLE `student_years`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `systems`
--
ALTER TABLE `systems`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `teacher_says`
--
ALTER TABLE `teacher_says`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
