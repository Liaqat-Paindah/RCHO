-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2025 at 06:45 PM
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
-- Database: `rcho`
--

-- --------------------------------------------------------

--
-- Table structure for table `applicants`
--

CREATE TABLE `applicants` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fullname` text NOT NULL,
  `dob` date NOT NULL,
  `gender` text NOT NULL,
  `nid` text NOT NULL,
  `email` text NOT NULL,
  `phone` text NOT NULL,
  `province` text NOT NULL,
  `city` text NOT NULL,
  `district` text NOT NULL,
  `degree` text NOT NULL,
  `major` text NOT NULL,
  `graduation` text NOT NULL,
  `grade` text NOT NULL,
  `experience` text NOT NULL,
  `cv` text NOT NULL,
  `letters` text NOT NULL,
  `diploma` text NOT NULL,
  `transcript` text NOT NULL,
  `tazkira` text NOT NULL,
  `job_id` int(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `applicants`
--

INSERT INTO `applicants` (`id`, `fullname`, `dob`, `gender`, `nid`, `email`, `phone`, `province`, `city`, `district`, `degree`, `major`, `graduation`, `grade`, `experience`, `cv`, `letters`, `diploma`, `transcript`, `tazkira`, `job_id`, `created_at`, `updated_at`) VALUES
(10000, 'Liaqat', '2024-12-30', 'Male', '1400-0404-76954', 'ict@ardho.org', '2', 'Kabul', 'Kabul', '22', 'High School Degree', '2', '2022', '2', 'Yes', 'public/assets/img/applications/H5xdCB0Cke40Nj3tqOwj0luLOFbWjWSdhseMwWBB.pdf', 'public/assets/img/applications/EylxZ8pZCCk6Wa5FkPyT7Fj2MDZu2V9QeOeea5Dj.docx', 'public/assets/img/applications/suTc2ZaQYKNLjiIsgNacbungICO2SFAsjE2kG55s.pdf', 'public/assets/img/applications/mPuSKZ5asYI6eGZmxYCEJOITzlSsZq906c6Vveg0.pdf', 'public/assets/img/applications/5dV3KdMfT2IZKMOYpdWWz62tzoj6arj7AOGGM558.pdf', 1, '2025-01-03 11:37:39', '2025-01-03 11:37:39');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `candidate_references`
--

CREATE TABLE `candidate_references` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `job_id` bigint(20) UNSIGNED NOT NULL,
  `reference_name` varchar(255) NOT NULL,
  `reference_type` varchar(255) NOT NULL,
  `relationship` varchar(255) NOT NULL,
  `organization` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `association_start` varchar(255) NOT NULL,
  `association_end` varchar(255) NOT NULL,
  `perspective` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `careers`
--

CREATE TABLE `careers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `job_title` varchar(255) NOT NULL,
  `job_description` text NOT NULL,
  `qualifications` text NOT NULL,
  `salary` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `vacancy` varchar(255) NOT NULL,
  `application_deadline` date DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `careers`
--

INSERT INTO `careers` (`id`, `job_title`, `job_description`, `qualifications`, `salary`, `location`, `type`, `vacancy`, `application_deadline`, `created_at`, `updated_at`) VALUES
(1, 'Health Supervisor', 'Reaching Community & Healthcare Organization (RCHO) is an independent registered non-government and nonprofit civil society organization based at Kabul Province. RCHO prime motto is community Development and health services delivery to the deprived and marginalized people of the society across the country. In 2022 a group of educated, dynamic and like-minded youth working in the development sector, got together to establish an organization, for addressing the most urgent and pressing needs of the people of Afghanistan. True to this spirit, the organization was named Reaching Community & Healthcare Organization (RCHO). Considering their association with the development sector the group was cognizant of the plethora of problems plaguing the province. Consequently, the organization’s focus was not kept limited either in terms of geography or sector. Whilst operating in different districts of the province, RCHO has been carrying a range of interventions in the areas of education, health & hygiene, youth empowerment, emergency response & preparedness, governance, free legal aid, human rights, etc.', 'Reaching Community & Healthcare Organization (RCHO) is an independent registered non-government and nonprofit civil society organization based at Kabul Province. RCHO prime motto is community Development and health services delivery to the deprived and marginalized people of the society across the country. In 2022 a group of educated, dynamic and like-minded youth working in the development sector, got together to establish an organization, for addressing the most urgent and pressing needs of the people of Afghanistan. True to this spirit, the organization was named Reaching Community & Healthcare Organization (RCHO). Considering their association with the development sector the group was cognizant of the plethora of problems plaguing the province. Consequently, the organization’s focus was not kept limited either in terms of geography or sector. Whilst operating in different districts of the province, RCHO has been carrying a range of interventions in the areas of education, health & hygiene, youth empowerment, emergency response & preparedness, governance, free legal aid, human rights, etc.', 'As per organization salary scale', 'Kabul, Afghanistan', 'Full Time', 'PM-2024', '2024-02-12', '2024-06-10', '2024-06-12 16:48:34'),
(6, 'Finance Manager', 'Reaching Community & Healthcare Organization (RCHO) is an independent registered non-government and nonprofit civil society organization based at Kabul Province. RCHO prime motto is community Development and health services delivery to the deprived and marginalized people of the society across the country. In 2022 a group of educated, dynamic and like-minded youth working in the development sector, got together to establish an organization, for addressing the most urgent and pressing needs of the people of Afghanistan. True to this spirit, the organization was named Reaching Community & Healthcare Organization (RCHO). Considering their association with the development sector the group was cognizant of the plethora of problems plaguing the province.', 'Reaching Community & Healthcare Organization (RCHO) is an independent registered non-government and nonprofit civil society organization based at Kabul Province. RCHO prime motto is community Development and health services delivery to the deprived and marginalized people of the society across the country. In 2022 a group of educated, dynamic and like-minded youth working in the development sector, got together to establish an organization, for addressing the most urgent and pressing needs of the people of Afghanistan. True to this spirit, the organization was named Reaching Community & Healthcare Organization (RCHO). Considering their association with the development sector the group was cognizant of the plethora of problems plaguing the province.', '34000', 'Kabul', 'Full Time', 'PM-2024', '2025-01-22', '2025-01-03', '2025-01-03 06:58:27');

-- --------------------------------------------------------

--
-- Table structure for table `documents`
--

CREATE TABLE `documents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `document_title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `date_created` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `donations`
--

CREATE TABLE `donations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `donation_amount` decimal(10,2) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
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
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1);

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
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_reset_tokens`
--

INSERT INTO `password_reset_tokens` (`email`, `token`, `created_at`) VALUES
('ict@ardho.org', '$2y$12$nQK0CIff0PKpkG5hnOE8QeMlFMGjEtu1nN7Tgu/TnYGddikskNXc2', '2024-12-24 11:15:41'),
('liaqat.paindah@gmail.com', '$2y$12$mBCEncpitFpWngpiK2.KfegPn8cMT.EHKTPionmGeTeoZAwnCUZ.S', '2024-12-24 11:16:03');

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
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `project_name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `client` text NOT NULL,
  `location` text NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `status` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `project_name`, `description`, `client`, `location`, `start_date`, `end_date`, `status`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Health & Nutrition (SMART Survey)', 'Documents that can demonstrate the track records of five years of experience in implementation of the humanitarian projects in Afghanistan has annexed to this file.', 'Action Against Hunger', 'Helmand Province', '2019-01-08', '2019-11-30', 'Completed', 'assets/img/projects/services-1.jpg', '2024-06-30 18:09:54', '2024-06-23 18:09:54'),
(2, 'Health & Nutrition (SMART & Rapid Surveys)', 'Documents that can demonstrate the track records of five years of experience in implementation of the humanitarian projects in Afghanistan has annexed to this file.', 'Action Against Hunger', 'Parwan, Nimroz, and Takhar Provinces', '2020-01-15', '2020-05-15', 'Completed', 'assets/img/projects/services-2.jpg', '2024-06-30 18:09:54', '2024-06-23 18:09:54'),
(3, 'Health & Nutrition (SMART & SQUAC Surveys)', 'Documents that can demonstrate the track records of five years of experience in implementation of the humanitarian projects in Afghanistan has annexed to this file.', 'Action Against Hunger', 'Nangrahar and Paktia Provinces', '2020-03-15', '2020-05-15', 'Completed', 'assets/img/projects/services-1.jpg', '2024-06-30 18:09:54', '2024-06-23 18:09:54'),
(4, 'Health & Nutrition (SMART Survey)', 'Documents that can demonstrate the track records of five years of experience in implementation of the humanitarian projects in Afghanistan has annexed to this file.', 'Action Against Hunger', 'Parwan and Bamyan Provinces', '2021-03-05', '2021-05-03', 'Completed', 'assets/img/projects/services-2.jpg', '2024-06-30 18:09:54', '2024-06-23 18:09:54'),
(5, 'Health & Nutrition (MHNT)', 'Documents that can demonstrate the track records of five years of experience in implementation of the humanitarian projects in Afghanistan has annexed to this file.', 'UNICEF', 'Wardak Province', '2022-09-21', '2023-07-15', 'Completed', 'assets/img/projects/services-1.jpg', '2024-06-30 18:09:54', '2024-06-23 18:09:54'),
(6, 'Nutrition (TSFP)', 'Documents that can demonstrate the track records of five years of experience in implementation of the humanitarian projects in Afghanistan has annexed to this file.', 'WFP ', 'Wardak', '2023-01-01', '2023-05-21', 'Completed', 'assets/img/projects/services-2.jpg', '2024-06-30 18:09:54', '2024-06-23 18:09:54'),
(7, 'Nutrition (TSFP)', 'Documents that can demonstrate the track records of five years of experience in implementation of the humanitarian projects in Afghanistan has annexed to this file.', 'WFP ', 'Panjshir Province', '2023-01-01', '0000-00-00', 'Ongoing', 'assets/img/projects/services-1.jpg', '2024-06-30 18:09:54', '2024-06-23 18:09:54'),
(8, 'Education', 'Documents that can demonstrate the track records of five years of experience in implementation of the humanitarian projects in Afghanistan has annexed to this file.', 'UNICEF', 'Paktika Province', '2024-04-01', '0000-00-00', 'Ongoing', 'assets/img/projects/services-2.jpg', '2024-06-30 18:09:54', '2024-06-23 18:09:54');

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `report_title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `submitted` text NOT NULL,
  `profile` text NOT NULL,
  `pdf` text NOT NULL,
  `date_published` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `service_name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `service_name`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Humanitarian', 'The primary focus of the RCHO is to reach out to the hard-to-reach population in all provinces of Afghanistan, often under very difficult circumstances, to offer a wide range of services to various marginalized groups in the different sections of society in terms of productive and sustainable livelihood programs, disaster risk management, emergency response and humanitarian assistance. RCHO works for internally displaced population, poor families, unemployed and uneducated, in need of any sort of emergency and healthcare services. RCHO aims to tackle the humanitarian crisis including droughts and disaster prevention, develop community basic social services needs and create employment and income generation opportunities for the youth, women, IDPs and poor rural communities to reduce the level of poverty and contribute to the socio-economic development of the communities.', '..\\assets\\img\\services\\1.jpg\n', '2024-06-26 18:36:07', '2024-06-04 18:36:07'),
(2, 'Development', 'The primary focus of the RCHO is to reach out to the hard-to-reach population in all provinces of Afghanistan, often under very difficult circumstances, to offer a wide range of services to various marginalized groups in the different sections of society in terms of productive and sustainable livelihood programs, disaster risk management, emergency response and humanitarian assistance. RCHO works for internally displaced population, poor families, unemployed and uneducated, in need of any sort of emergency and healthcare services. RCHO aims to tackle the humanitarian crisis including droughts and disaster prevention, develop community basic social services needs and create employment and income generation opportunities for the youth, women, IDPs and poor rural communities to reduce the level of poverty and contribute to the socio-economic development of the communities.', '..\\assets\\img\\services\\1.jpg\n', '2024-06-26 18:36:07', '2024-06-04 18:36:07'),
(3, 'Research', 'The primary focus of the RCHO is to reach out to the hard-to-reach population in all provinces of Afghanistan, often under very difficult circumstances, to offer a wide range of services to various marginalized groups in the different sections of society in terms of productive and sustainable livelihood programs, disaster risk management, emergency response and humanitarian assistance. RCHO works for internally displaced population, poor families, unemployed and uneducated, in need of any sort of emergency and healthcare services. RCHO aims to tackle the humanitarian crisis including droughts and disaster prevention, develop community basic social services needs and create employment and income generation opportunities for the youth, women, IDPs and poor rural communities to reduce the level of poverty and contribute to the socio-economic development of the communities.', '..\\assets\\img\\services\\1.jpg\n', '2024-06-26 18:36:07', '2024-06-04 18:36:07'),
(4, 'Education', 'The primary focus of the RCHO is to reach out to the hard-to-reach population in all provinces of Afghanistan, often under very difficult circumstances, to offer a wide range of services to various marginalized groups in the different sections of society in terms of productive and sustainable livelihood programs, disaster risk management, emergency response and humanitarian assistance. RCHO works for internally displaced population, poor families, unemployed and uneducated, in need of any sort of emergency and healthcare services. RCHO aims to tackle the humanitarian crisis including droughts and disaster prevention, develop community basic social services needs and create employment and income generation opportunities for the youth, women, IDPs and poor rural communities to reduce the level of poverty and contribute to the socio-economic development of the communities.', '..\\assets\\img\\services\\1.jpg\n', '2024-06-26 18:36:07', '2024-06-04 18:36:07'),
(5, 'Health', 'The primary focus of the RCHO is to reach out to the hard-to-reach population in all provinces of Afghanistan, often under very difficult circumstances, to offer a wide range of services to various marginalized groups in the different sections of society in terms of productive and sustainable livelihood programs, disaster risk management, emergency response and humanitarian assistance. RCHO works for internally displaced population, poor families, unemployed and uneducated, in need of any sort of emergency and healthcare services. RCHO aims to tackle the humanitarian crisis including droughts and disaster prevention, develop community basic social services needs and create employment and income generation opportunities for the youth, women, IDPs and poor rural communities to reduce the level of poverty and contribute to the socio-economic development of the communities.', '..\\assets\\img\\services\\1.jpg\n', '2024-06-26 18:36:07', '2024-06-04 18:36:07'),
(6, 'Nutrition', 'The primary focus of the RCHO is to reach out to the hard-to-reach population in all provinces of Afghanistan, often under very difficult circumstances, to offer a wide range of services to various marginalized groups in the different sections of society in terms of productive and sustainable livelihood programs, disaster risk management, emergency response and humanitarian assistance. RCHO works for internally displaced population, poor families, unemployed and uneducated, in need of any sort of emergency and healthcare services. RCHO aims to tackle the humanitarian crisis including droughts and disaster prevention, develop community basic social services needs and create employment and income generation opportunities for the youth, women, IDPs and poor rural communities to reduce the level of poverty and contribute to the socio-economic development of the communities.', '..\\assets\\img\\services\\1.jpg\n', '2024-06-26 18:36:07', '2024-06-04 18:36:07'),
(7, 'Agriculture', 'The primary focus of the RCHO is to reach out to the hard-to-reach population in all provinces of Afghanistan, often under very difficult circumstances, to offer a wide range of services to various marginalized groups in the different sections of society in terms of productive and sustainable livelihood programs, disaster risk management, emergency response and humanitarian assistance. RCHO works for internally displaced population, poor families, unemployed and uneducated, in need of any sort of emergency and healthcare services. RCHO aims to tackle the humanitarian crisis including droughts and disaster prevention, develop community basic social services needs and create employment and income generation opportunities for the youth, women, IDPs and poor rural communities to reduce the level of poverty and contribute to the socio-economic development of the communities.', '..\\assets\\img\\services\\1.jpg\n', '2024-06-26 18:36:07', '2024-06-04 18:36:07');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('NZazCebjkT1eQ6cqghfyTVU9IB0XpYOtcBYXcH3X', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiNmtDcXNNYzNhbjRXdG9va0c0bXVHdlBoNE5pMEt6N2tZd21aUjZ1cyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjk6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9wcm9maWxlIjt9czozOiJ1cmwiO2E6MDp7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7fQ==', 1735922298);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `contact_phone` varchar(255) DEFAULT NULL,
  `contact_email` varchar(255) DEFAULT NULL,
  `degree` varchar(255) DEFAULT NULL,
  `profile` varchar(255) DEFAULT NULL,
  `expertise` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `success_stories`
--

CREATE TABLE `success_stories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `story_title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `author` text NOT NULL,
  `image` text NOT NULL,
  `author_profile` text NOT NULL,
  `date_published` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `success_stories`
--

INSERT INTO `success_stories` (`id`, `story_title`, `description`, `author`, `image`, `author_profile`, `date_published`, `created_at`, `updated_at`) VALUES
(1, 'Building Healthy Communities', 'ARDHO as institution demonstrates reasonable and professional operational capacity to effectively implement projects, including human resources, logistical capabilities, and administrative structures. ARDHO has a five-member Board of Directors, the BoDs are responsible for setting up and approving policies and strategies, in line with the agreed purposes, principles, and scope of ARDHO.', 'Dr. Nasratullah Safari', 'assets/img/stories/blog-1.jpg', 'assets/img/stories/profile/1.jpg', '2024-06-10', '2024-06-10 10:51:38', '2024-06-10 10:51:38'),
(2, 'Empowering Wellness', 'ARDHO as institution demonstrates reasonable and professional operational capacity to effectively implement projects, including human resources, logistical capabilities, and administrative structures. ARDHO has a five-member Board of Directors, the BoDs are responsible for setting up and approving policies and strategies, in line with the agreed purposes, principles, and scope of ARDHO.', 'Dr. Nasratullah Safari', 'assets/img/stories/blog-1.jpg', 'assets/img/stories/profile/1.jpg', '2024-06-10', '2024-06-10 10:51:38', '2024-06-10 10:51:38'),
(3, 'Brighter Tomorrows', 'ARDHO as institution demonstrates reasonable and professional operational capacity to effectively implement projects, including human resources, logistical capabilities, and administrative structures. ARDHO has a five-member Board of Directors, the BoDs are responsible for setting up and approving policies and strategies, in line with the agreed purposes, principles, and scope of ARDHO.', 'Dr. Nasratullah Safari', 'assets/img/stories/blog-1.jpg', 'assets/img/stories/profile/1.jpg', '2024-06-10', '2024-06-10 10:51:38', '2024-06-10 10:51:38'),
(4, 'Building Healthy Communities', 'ARDHO as institution demonstrates reasonable and professional operational capacity to effectively implement projects, including human resources, logistical capabilities, and administrative structures. ARDHO has a five-member Board of Directors, the BoDs are responsible for setting up and approving policies and strategies, in line with the agreed purposes, principles, and scope of ARDHO.', 'Dr. Nasratullah Safari', 'assets/img/stories/blog-1.jpg', 'assets/img/stories/profile/1.jpg', '2024-06-10', '2024-06-10 10:51:38', '2024-06-10 10:51:38'),
(5, 'Building Healthy Communities', 'ARDHO as institution demonstrates reasonable and professional operational capacity to effectively implement projects, including human resources, logistical capabilities, and administrative structures. ARDHO has a five-member Board of Directors, the BoDs are responsible for setting up and approving policies and strategies, in line with the agreed purposes, principles, and scope of ARDHO.', 'Dr. Nasratullah Safari', 'assets/img/stories/blog-1.jpg', 'assets/img/stories/profile/1.jpg', '2024-06-10', '2024-06-10 10:51:38', '2024-06-10 10:51:38'),
(6, 'Building Healthy Communities', 'ARDHO as institution demonstrates reasonable and professional operational capacity to effectively implement projects, including human resources, logistical capabilities, and administrative structures. ARDHO has a five-member Board of Directors, the BoDs are responsible for setting up and approving policies and strategies, in line with the agreed purposes, principles, and scope of ARDHO.', 'Dr. Nasratullah Safari', 'assets/img/stories/blog-1.jpg', 'assets/img/stories/profile/1.jpg', '2024-06-10', '2024-06-10 10:51:38', '2024-06-10 10:51:38');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Liaqat Paindah2', 'ict@ardho.org', NULL, '$2y$12$JYY0Vu8bynROWh9bDkH8NOyqoFb6SGIC7iKy4iFNTFTXQi0ghc/vS', 'jn3cXnxPCtEuzwd8eN3CpnHQv2xi3oc5Y0xNoNJB0HyF1LeAHkYvgkbrkNaT', '2024-12-22 17:00:11', '2024-12-29 15:29:21'),
(2, 'kabul', 'ict2@ardho.org', NULL, '$2y$12$UrhX2VnXTq0y8ioDhtPzVOa8WlOW2NxU7.KetOiE5Tjmxs0qM.IkG', NULL, '2024-12-22 17:01:21', '2024-12-22 17:01:21'),
(3, 'Liaqat', 'liaqat.paindah@gmail.com', NULL, '$2y$12$xJDy.HjeSw2Hz150g9tNbuEZ8G3H.qh/CpPILfhTYHt0LYot/fLdi', NULL, '2024-12-24 10:59:08', '2024-12-24 10:59:08');

-- --------------------------------------------------------

--
-- Table structure for table `work_experiences`
--

CREATE TABLE `work_experiences` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `job_id` bigint(20) UNSIGNED DEFAULT NULL,
  `job_title` varchar(255) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date DEFAULT NULL,
  `job_description` text DEFAULT NULL,
  `applicant_id` int(244) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `work_experiences`
--

INSERT INTO `work_experiences` (`id`, `job_id`, `job_title`, `company_name`, `start_date`, `end_date`, `job_description`, `applicant_id`, `created_at`, `updated_at`) VALUES
(25, 1, 'jdgsh', 'gshdj', '2025-12-31', '2023-12-29', 'gnjhsfdj', 10000, '2025-01-03 11:37:39', '2025-01-03 11:37:39'),
(26, NULL, 'djgshdn', 'ghsdfd', '2025-12-31', '2024-12-31', 'dnfsgjd', 10000, '2025-01-03 11:37:39', '2025-01-03 11:37:39');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applicants`
--
ALTER TABLE `applicants`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `candidate_references`
--
ALTER TABLE `candidate_references`
  ADD PRIMARY KEY (`id`),
  ADD KEY `candidate_references_job_id_foreign` (`job_id`);

--
-- Indexes for table `careers`
--
ALTER TABLE `careers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `documents`
--
ALTER TABLE `documents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donations`
--
ALTER TABLE `donations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
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
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `success_stories`
--
ALTER TABLE `success_stories`
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
-- AUTO_INCREMENT for table `applicants`
--
ALTER TABLE `applicants`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10011;

--
-- AUTO_INCREMENT for table `candidate_references`
--
ALTER TABLE `candidate_references`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `careers`
--
ALTER TABLE `careers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `documents`
--
ALTER TABLE `documents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `donations`
--
ALTER TABLE `donations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `success_stories`
--
ALTER TABLE `success_stories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `work_experiences`
--
ALTER TABLE `work_experiences`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
