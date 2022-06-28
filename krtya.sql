-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 28, 2022 at 05:14 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `krtya`
--

-- --------------------------------------------------------

--
-- Table structure for table `cartdata`
--

CREATE TABLE `cartdata` (
  `c_id` bigint(20) UNSIGNED NOT NULL,
  `u_id` bigint(20) NOT NULL,
  `p_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cartdata`
--

INSERT INTO `cartdata` (`c_id`, `u_id`, `p_id`, `created_at`, `updated_at`) VALUES
(23, 100034, 1002, '2022-06-28 09:43:45', '2022-06-28 09:43:45'),
(24, 100034, 1003, '2022-06-28 09:43:48', '2022-06-28 09:43:48');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
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
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_06_26_102227_create_products_table', 2),
(6, '2022_06_27_074005_add_social_login_field', 3),
(7, '2022_06_27_093916_create_users_table', 4),
(8, '2022_06_28_095127_create_cartdata_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `p_id` bigint(20) UNSIGNED NOT NULL,
  `p_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Image_Path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `C_Price` decimal(8,2) NOT NULL,
  `S_Price` decimal(8,2) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`p_id`, `p_name`, `category`, `Image_Path`, `description`, `C_Price`, `S_Price`, `Quantity`, `created_at`, `updated_at`) VALUES
(1001, 'Dove Soap', 'Home Essentials', 'https://m.media-amazon.com/images/I/51I9JXYlrfL._SX522_PIbundle-3,TopRight,0,0_AA522SH20_.jpg', 'White soap with pleasant perfumes that makes your skin glow and nourished.', '20.00', '19.00', 20, NULL, NULL),
(1002, 'Kingston Pendirve', 'Mobile Computers', 'https://m.media-amazon.com/images/I/71NuyVVSy3L._SX522_.jpg', 'Kingston DataTraveler Exodia DTX/32 GB Pen Drive. Kingston’s DataTraveler Exodia features USB 3.2 Gen 1', '420.00', '510.00', 15, NULL, NULL),
(1003, 'Maggi', 'Food', 'https://m.media-amazon.com/images/I/711I3Io3SiL._SX522_PIbundle-2,TopRight,0,0_SX522SY237SH20_.jpg', 'Big Bazaar Combo - Maggi 2 Minute Noodles Masala, 420g (Buy 1 Get 1, 2 Pieces) Promo Pack', '198.00', '165.00', 10, NULL, NULL),
(1004, 'Rethinking Psychiatry', 'Book', 'https://images-na.ssl-images-amazon.com/images/I/517A8bystjL._SX322_BO1,204,203,200_.jpg', 'Rethinking Psychiatry: From Cultural Category to Personal Experience Paperback – 4 March 1991\r\nby Arthur Kleinman', '200.00', '160.00', 11, NULL, NULL),
(1005, 'Gym Gloves', 'Cloths', 'https://m.media-amazon.com/images/I/81iZzKTg3RL._SX425_.jpg', 'XTRIM Macho X Unisex Leather Gym Gloves for Professional Weightlifting, Fitness Training and Workout | with Half-Finger Length, Wrist Wrap for Protection', '198.00', '130.00', 0, NULL, NULL),
(1006, 'Men\'s Shoes', 'Wearing', 'https://m.media-amazon.com/images/I/51Km3sXirPL._UX695_.jpg', 'LEE GREEM Men\'s Comfortable & Smart Canvas Lace Up Running Walking Casual Canvas Shoes SneakersLEE GREEM Men\'s Comfortable & Smart Canvas Lace Up Running Walking Casual Canvas Shoes Sneakers', '2600.00', '1432.00', 20, NULL, NULL),
(1007, 'Bajaj Cooler', 'Electronics', 'https://m.media-amazon.com/images/I/51QaS96vdpL._SX466_.jpg', 'Bajaj PX 97 TORQUE (HC) 36L Personal Air Cooler with Honeycomb Pads, Turbo Fan Technology, Powerful Air Throw and 3-Speed Control, White', '6999.00', '5999.00', 20, NULL, NULL),
(1008, 'Bottel', 'Kitchen', 'https://m.media-amazon.com/images/I/51L0b7NLiBL._SL1280_.jpg', 'Cello Puro Steel-X Benz Stainless Steel Water Bottle with Inner Steel and Outer Plastic , 900 ml (Black)', '320.00', '223.00', 39, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `u_id` bigint(20) UNSIGNED NOT NULL,
  `u_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`u_id`, `u_name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(100033, 'a', 'a@gmail.com', NULL, 'e10adc3949ba59abbe56e057f20f883e', NULL, '2022-06-28 08:12:58', '2022-06-28 08:12:58'),
(100034, 'Anju', 'anju@gmail.com', NULL, 'e10adc3949ba59abbe56e057f20f883e', NULL, '2022-06-28 09:43:36', '2022-06-28 09:43:36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cartdata`
--
ALTER TABLE `cartdata`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`u_id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cartdata`
--
ALTER TABLE `cartdata`
  MODIFY `c_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `p_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1010;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `u_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100035;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
