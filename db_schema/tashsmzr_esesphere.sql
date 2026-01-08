-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 08, 2026 at 05:50 AM
-- Server version: 11.4.9-MariaDB-cll-lve-log
-- PHP Version: 8.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tashsmzr_esesphere`
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
(1, 'Sylvester Bruce', 'May and Estes Plc', 'samsonosaretin@yahoo.com', '+1 (923) 569-8069', 'Development & Marketing', 'Web Application', 'Other', 'Totam voluptatum dic', 'Quia iusto vero ex d', 'Payment Gateway,Booking System,Blog or News,Analytics,Other', 'In minim libero debi', 'Luxury / Premium Feel', 'Google Ads / PPC', '£500 - £1000', 'Et error commodi mai', 'Est laboriosam ut c', 'Ipsum qui numquam e', 'Adipisci ex suscipit', '£1000 - £3000', '1998-04-15', 'uploads/1761660848_Screenshot 2025-07-19 102226.png', 'Zoom / Google Meet', 'Yes', '2025-10-28 14:14:08'),
(2, 'Saheed Savage', 'Savvyloft Care Services Limited', 'admin@savvyloft.co.uk', '07835096071', 'Web Development', 'Website', 'WordPress', 'Social Health care provider', 'Google optimization and to create visibility for the brand', 'Blog or News,Live Chat', '', 'Modern & Minimal', 'SEO (Search Engine Optimization)', '£150 - £200', 'generate leads, create brand awareness, and drive traffic', 'Facebook', 'people that needs social care, mostly elderly citizens', 'clicks, conversion, and ROI', '£1000 - £3000', '2025-11-28', '', 'Phone Call', 'Yes', '2025-10-29 17:19:34'),
(3, 'Hayes Cobb', 'Davenport Moon Trading', 'niragapoce@mailinator.com', '+1 (889) 913-7639', 'Web Development', 'Mobile Application', 'Laravel', 'Veniam sint numquam', 'Veritatis expedita t', 'Admin Dashboard,Booking System,Other', 'In consequatur tene', 'Dark Mode / Sleek', 'Email Marketing', '£1000 - £3000', 'In cum veniam quia', 'Nulla tempora quibus', 'Enim odit sit et lo', 'Occaecat consequuntu', '£10,000+', '2017-02-08', '', 'Email', 'Yes', '2025-11-24 21:04:33');

-- --------------------------------------------------------

--
-- Table structure for table `contributor_agreements`
--

CREATE TABLE `contributor_agreements` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `signature_path` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contributor_agreements`
--

INSERT INTO `contributor_agreements` (`id`, `name`, `role`, `date`, `signature_path`, `created_at`) VALUES
(1, 'Samson Gift Osaretin', 'Full Stack Developer', '2025-12-24', 'signatures/signature_1766606378.jpg', '2025-12-24 19:59:38'),
(2, 'Samson Gift Osaretin', 'Full Stack Developer', '2025-12-24', 'signatures/signature_1766606553.jpg', '2025-12-24 20:02:33'),
(3, 'Samson Gift Osaretin', 'Full Stack Developer', '2025-12-24', 'signatures/signature_1766606606.jpg', '2025-12-24 20:03:26'),
(4, 'Osemeigah Igbafe', 'Data/Software engineer', '2025-12-24', 'signatures/signature_1766615996.jpg', '2025-12-24 22:39:56'),
(5, 'Osemeigah Igbafe', 'Data/Software engineer', '2025-12-24', 'signatures/signature_1766616002.jpg', '2025-12-24 22:40:02'),
(6, 'Osemeigah Igbafe', 'Data/Software engineer', '2025-12-24', 'signatures/signature_1766616060.jpg', '2025-12-24 22:41:00'),
(7, 'Erhabor Stanley ', 'Front End developer ', '2025-12-26', 'signatures/signature_1766777773.jpg', '2025-12-26 19:36:13'),
(8, 'Erhabor Stanley ', 'Front End developer ', '2025-12-26', 'signatures/signature_1766777874.jpg', '2025-12-26 19:37:54'),
(9, 'Erhabor Stanley ', 'Front End Developer ', '2025-12-26', 'signatures/signature_1766778311.jpg', '2025-12-26 19:45:11');

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
  `enrollment_date` timestamp NULL DEFAULT current_timestamp(),
  `status` enum('Pending','Confirmed','Cancelled') DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
(1, '74.7.243.240', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; GPTBot/1.3; +https://openai.com/gptbot)', 'United States', 'Georgia', 'Atlanta', '30301', 33, -84.3871, 'Microsoft Corporation', 'Cloud', '2026-01-08 05:50:12'),
(2, '52.167.144.211', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm) Chrome/116.0.1938.76 Safari/537.36', 'United States', 'Virginia', 'Boydton', '23917', 36, -78.37471, 'Microsoft Corporation', 'Microsoft Azure Cloud (eastus2)', '2026-01-08 05:50:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `client_requests`
--
ALTER TABLE `client_requests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contributor_agreements`
--
ALTER TABLE `contributor_agreements`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contributor_agreements`
--
ALTER TABLE `contributor_agreements`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `course_enrollments`
--
ALTER TABLE `course_enrollments`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `nda_signatures`
--
ALTER TABLE `nda_signatures`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `website_visitors`
--
ALTER TABLE `website_visitors`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
