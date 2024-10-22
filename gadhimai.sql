-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 21, 2024 at 02:28 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tcssoftt_test`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog_posts`
--

CREATE TABLE `blog_posts` (
  `id` int UNSIGNED NOT NULL,
  `post_title` varchar(255) NOT NULL,
  `post_title_nepali` varchar(255) NOT NULL,
  `post_content` text NOT NULL,
  `post_content_nepali` text NOT NULL,
  `post_category` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `status` enum('draft','published') NOT NULL DEFAULT 'draft',
  `img_url` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ;

--
-- Dumping data for table `blog_posts`
--

INSERT INTO `blog_posts` (`id`, `post_title`, `post_title_nepali`, `post_content`, `post_content_nepali`, `post_category`, `slug`, `status`, `img_url`, `created_at`, `updated_at`) VALUES
(8, 'This is first post', 'Yo pahilo post ho', 'This is first content', 'Yo pailo content ho', 'cat1', 'this-is-first-post', 'draft', 'http://gadhimai.test/uploads/1729349935_23c5e0a2c97a14b31881.jpg', '2024-10-19 14:58:07', '2024-10-19 14:58:55'),
(9, 'Lorem', 'naya post', 'sda', 'asd', 'new', 'lorem', 'published', 'http://gadhimai.test/uploads/1729352614_4e7246bd26f076bbe56a.jpg', '2024-10-19 15:42:59', '2024-10-19 15:43:34');

-- --------------------------------------------------------

--
-- Table structure for table `carousel`
--

CREATE TABLE `carousel` (
  `id` int NOT NULL,
  `image_url` varchar(255) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ;

--
-- Dumping data for table `carousel`
--

INSERT INTO `carousel` (`id`, `image_url`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'http://gadhimai.test/uploads/carousel/1729503896_7f1fd4e6224c86e01979.png', 'New', 'new\r\n', '2024-10-21 09:24:30', '2024-10-21 09:44:56'),
(2, 'http://gadhimai.test/uploads/carousel/1729503905_59a664d17cfa714417c6.webp', 'sadf', 'sdaf', '2024-10-21 09:30:47', '2024-10-21 09:45:05'),
(3, 'http://gadhimai.test/uploads/carousel/1729503917_d4b7060c8b0ddd164057.jpg', 'sadf', 'sdaf', '2024-10-21 09:31:32', '2024-10-21 09:45:17'),
(4, 'http://gadhimai.test/uploads/carousel/1729503928_4384b1599b5c4dccf1f3.jpg', 'sadf', 'sdaf', '2024-10-21 09:33:30', '2024-10-21 09:45:28'),
(5, 'http://gadhimai.test/uploads/carousel/1729503812_377f3994a18653be6233.webp', 'sadf', 'sdaf', '2024-10-21 09:34:23', '2024-10-21 09:43:32');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int NOT NULL,
  `event_title` varchar(255) NOT NULL,
  `event_description` text NOT NULL,
  `event_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `event_title`, `event_description`, `event_date`, `created_at`) VALUES
(1, 'New event', 'nw event', '2024-10-24', '2024-10-21 08:33:30'),
(2, 'hello', 'new', '2024-10-14', '2024-10-21 08:54:18'),
(3, 'naya event', 'naya', '2024-10-18', '2024-10-21 09:06:00');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint UNSIGNED NOT NULL,
  `version` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `class` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `group` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `namespace` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `time` int NOT NULL,
  `batch` int UNSIGNED NOT NULL
) ;

-- --------------------------------------------------------

--
-- Table structure for table `news_notices`
--

CREATE TABLE `news_notices` (
  `id` int UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `title_nepali` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `content_nepali` text NOT NULL,
  `category` varchar(100) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `status` enum('published','draft') NOT NULL DEFAULT 'draft',
  `img_url` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ;

--
-- Dumping data for table `news_notices`
--

INSERT INTO `news_notices` (`id`, `title`, `title_nepali`, `content`, `content_nepali`, `category`, `slug`, `status`, `img_url`, `created_at`, `updated_at`) VALUES
(3, 'new ', '', 'new ', '', 'ksdfj', 'new', 'draft', 'http://gadhimai.test/uploads/newsnotice/1729491591_c4d3dfd7fbdcee04e66f.png', '2024-10-21 06:19:51', '2024-10-21 06:19:51'),
(4, 'dsf', '', 'sdaf', '', 'dsf', 'dsf', 'published', 'http://gadhimai.test/uploads/newsnotice/1729493502_4bc4c72f6613afd88450.png', '2024-10-21 06:51:42', '2024-10-21 06:51:42'),
(5, 'dsf', '', 'sdf', '', 'sdf', 'dsf', 'published', 'http://gadhimai.test/uploads/newsnotice/1729493635_578c29b40b17b9e90f50.png', '2024-10-21 06:53:55', '2024-10-21 06:53:55'),
(6, 'sdf', 'sdf', '', 'sdf', 'sdf', 'sdf', 'draft', 'http://gadhimai.test/uploads/newsnotice/1729493775_cf393d7b7738ab0fa176.png', '2024-10-21 06:56:15', '2024-10-21 06:56:15'),
(7, 'sdfdsfds dsfsd', 'sdf', 'sdfsdfdsdsdsfds', 'sdf', 'sdf', 'sdfdsfds-dsfsd', 'draft', 'http://gadhimai.test/uploads/newsnotice/1729493843_68484a6295133cf0249a.png', '2024-10-21 06:57:23', '2024-10-21 06:57:33');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int NOT NULL,
  `post_title` varchar(255) NOT NULL,
  `post_content` text NOT NULL,
  `category` varchar(100) DEFAULT NULL,
  `author_id` int DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `status` enum('published','draft') DEFAULT 'draft',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `post_title`, `post_content`, `category`, `author_id`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(2, 'lorem', 'morem\r\n', 'new', NULL, 'lorem', 'published', '2024-10-16 06:41:32', '2024-10-19 09:25:51'),
(3, 'Lorem', 'dsvsd', 'dsf', NULL, 'lorem', 'draft', '2024-10-16 06:43:02', '2024-10-16 06:43:02'),
(4, 'Hello World', 'hello world', 'new', NULL, 'hello-world', 'published', '2024-10-16 06:49:35', '2024-10-16 06:49:35'),
(5, 'Hello World 2', 'hello world2', 'new2', NULL, 'hello-world-2', 'published', '2024-10-16 06:50:20', '2024-10-16 06:50:20');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `email`, `password`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'test', 'test@test.com', '$2y$10$LFe8oeH2yu35EBlicUasEeAOgOw1nj3JHx6SchcoyhE1itV5.gudu', '2024-10-15 10:04:06', '2024-10-15 10:04:06', '2024-10-15 16:06:18'),
(2, 'test', 'test@test.com', '$2y$10$jKqwht2mY4KgoyqLIqh0hulFjvmSxNRBJOVQqzC6vRg83yofim95m', '2024-10-15 10:06:07', '2024-10-15 10:06:07', '2024-10-15 16:06:18'),
(3, 'new', 'new@new.new', '$2y$10$.t3uwU7CgtgBiUnI9tnKWOhtbMgeohumP9dNwn0SGtBa0k2CtZW9i', '2024-10-15 10:11:06', '2024-10-15 10:11:06', '2024-10-15 16:06:18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog_posts`
--
ALTER TABLE `blog_posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`);

--
-- Indexes for table `carousel`
--
ALTER TABLE `carousel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news_notices`
--
ALTER TABLE `news_notices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog_posts`
--
ALTER TABLE `blog_posts`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `carousel`
--
ALTER TABLE `carousel`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `news_notices`
--
ALTER TABLE `news_notices`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
