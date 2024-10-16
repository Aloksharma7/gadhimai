-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 16, 2024 at 08:58 AM
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
-- Database: `gadhimai`
--

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `post_title`, `post_content`, `category`, `author_id`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(2, 'moern', 'morem\r\n', 'new', NULL, 'moern', 'draft', '2024-10-16 06:41:32', '2024-10-16 08:56:18'),
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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
