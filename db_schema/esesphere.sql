-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 01, 2025 at 11:13 PM
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
-- Database: `esesphere`
--

-- --------------------------------------------------------

--
-- Table structure for table `client_requests`
--

CREATE TABLE `client_requests` (
  `id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `company_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `service_type` varchar(50) NOT NULL,
  `project_type` varchar(100) DEFAULT NULL,
  `technology` varchar(100) DEFAULT NULL,
  `business_description` text DEFAULT NULL,
  `project_purpose` text DEFAULT NULL,
  `features` text DEFAULT NULL,
  `competitors` text DEFAULT NULL,
  `style_preference` varchar(50) DEFAULT NULL,
  `marketing_focus` text DEFAULT NULL,
  `ad_budget` varchar(50) DEFAULT NULL,
  `marketing_goals` text DEFAULT NULL,
  `current_presence` text DEFAULT NULL,
  `target_audience` text DEFAULT NULL,
  `kpis` varchar(255) DEFAULT NULL,
  `budget` varchar(50) DEFAULT NULL,
  `deadline` date DEFAULT NULL,
  `attachments` text DEFAULT NULL,
  `communication` varchar(50) DEFAULT NULL,
  `nda_agreement` varchar(10) DEFAULT NULL,
  `submitted_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `client_requests`
--

INSERT INTO `client_requests` (`id`, `full_name`, `company_name`, `email`, `phone`, `service_type`, `project_type`, `technology`, `business_description`, `project_purpose`, `features`, `competitors`, `style_preference`, `marketing_focus`, `ad_budget`, `marketing_goals`, `current_presence`, `target_audience`, `kpis`, `budget`, `deadline`, `attachments`, `communication`, `nda_agreement`, `submitted_at`) VALUES
(1, 'Karyn Johns', 'Holden Donaldson LLC', 'qemo@mailinator.com', '+1 (477) 611-2675', 'Both', 'Mobile Application', 'Other', 'Voluptatem mollit do', 'Ullamco et in ut qui', 'Admin Dashboard,Live Chat,Analytics,Other', 'Qui animi consequat', 'Luxury / Premium Feel', 'Content Creation', '£3000 - £5000', 'Cillum et odio ullam', 'Sit quia numquam ven', 'Et amet vitae solut', 'Rerum soluta volupta', '£500 - £1000', '2025-10-28', 'uploads/1761650515_Screenshot 2025-07-19 100952.png', 'Email', 'Yes', '2025-10-28 11:21:55');

-- --------------------------------------------------------

--
-- Table structure for table `course_enrollments`
--

CREATE TABLE `course_enrollments` (
  `id` int(11) UNSIGNED NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `dob` date DEFAULT NULL,
  `gender` enum('Male','Female','Other') DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `state` varchar(100) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `education` varchar(255) DEFAULT NULL,
  `experience` varchar(255) DEFAULT NULL,
  `course` varchar(100) NOT NULL,
  `schedule` enum('Morning','Afternoon','Evening','Weekend') DEFAULT NULL,
  `message` text DEFAULT NULL,
  `payment_method` enum('Credit Card','PayPal','Bank Transfer') DEFAULT NULL,
  `agreement` tinyint(1) NOT NULL DEFAULT 0,
  `enrollment_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` enum('Pending','Confirmed','Cancelled') DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `course_enrollments`
--

INSERT INTO `course_enrollments` (`id`, `full_name`, `email`, `phone`, `dob`, `gender`, `city`, `state`, `address`, `education`, `experience`, `course`, `schedule`, `message`, `payment_method`, `agreement`, `enrollment_date`, `status`) VALUES
(1, 'Mary Thomas', 'jessica.williams353@demo.com', '(950) 541-1826', '1988-04-23', 'Male', 'Chicago', 'Texas', '828 Church St', 'Sample Text', 'Sample Text', 'HTML & CSS Basics', 'Morning', '26', 'Credit Card', 1, '2025-11-01 22:04:51', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `nda_signatures`
--

CREATE TABLE `nda_signatures` (
  `id` int(11) NOT NULL,
  `full_name` varchar(255) DEFAULT NULL,
  `company_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `signature_path` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `website_visitors`
--

CREATE TABLE `website_visitors` (
  `id` int(10) UNSIGNED NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `country` varchar(100) DEFAULT NULL,
  `region` varchar(100) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `zip` varchar(20) DEFAULT NULL,
  `latitude` double DEFAULT NULL,
  `longitude` double DEFAULT NULL,
  `isp` varchar(100) DEFAULT NULL,
  `org` varchar(100) DEFAULT NULL,
  `visit_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `website_visitors`
--

INSERT INTO `website_visitors` (`id`, `ip_address`, `user_agent`, `country`, `region`, `city`, `zip`, `latitude`, `longitude`, `isp`, `org`, `visit_time`) VALUES
(1, '::1', 'Mozilla/5.0 (iPhone; CPU iPhone OS 18_5 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/18.5 Mobile/15E148 Safari/604.1', 'UNKNOWN', 'UNKNOWN', 'UNKNOWN', 'UNKNOWN', 0, 0, 'UNKNOWN', 'UNKNOWN', '2025-09-21 22:02:24'),
(2, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36 Edg/140.0.0.0', 'UNKNOWN', 'UNKNOWN', 'UNKNOWN', 'UNKNOWN', 0, 0, 'UNKNOWN', 'UNKNOWN', '2025-09-27 12:47:29'),
(3, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/141.0.0.0 Safari/537.36', 'UNKNOWN', 'UNKNOWN', 'UNKNOWN', 'UNKNOWN', 0, 0, 'UNKNOWN', 'UNKNOWN', '2025-10-27 21:10:48'),
(4, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/141.0.0.0 Safari/537.36', 'UNKNOWN', 'UNKNOWN', 'UNKNOWN', 'UNKNOWN', 0, 0, 'UNKNOWN', 'UNKNOWN', '2025-10-28 10:08:21'),
(5, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/141.0.0.0 Safari/537.36', 'UNKNOWN', 'UNKNOWN', 'UNKNOWN', 'UNKNOWN', 0, 0, 'UNKNOWN', 'UNKNOWN', '2025-11-01 19:44:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `client_requests`
--
ALTER TABLE `client_requests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_enrollments`
--
ALTER TABLE `course_enrollments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nda_signatures`
--
ALTER TABLE `nda_signatures`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `website_visitors`
--
ALTER TABLE `website_visitors`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `client_requests`
--
ALTER TABLE `client_requests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `course_enrollments`
--
ALTER TABLE `course_enrollments`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `nda_signatures`
--
ALTER TABLE `nda_signatures`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `website_visitors`
--
ALTER TABLE `website_visitors`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
