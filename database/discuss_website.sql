-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 06, 2025 at 07:17 AM
-- Server version: 8.3.0
-- PHP Version: 8.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `discuss_website`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

DROP TABLE IF EXISTS `answers`;
CREATE TABLE IF NOT EXISTS `answers` (
  `id` int NOT NULL AUTO_INCREMENT,
  `answer` varchar(300) NOT NULL,
  `question_id` int NOT NULL,
  `user_id` int NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`id`, `answer`, `question_id`, `user_id`, `created_at`) VALUES
(1, 'yes', 1, 8, '2025-03-06 12:15:49'),
(2, 'yes, you can', 3, 8, '2025-03-06 12:16:50'),
(3, 'it is a very good language', 2, 8, '2025-03-06 12:17:18'),
(4, 'no', 3, 8, '2025-03-06 12:18:06'),
(5, 'yes', 2, 8, '2025-03-06 12:18:20'),
(6, 'its depending on your need', 3, 0, '2025-03-06 12:32:15'),
(7, 'yes, java is evergreen language', 2, 0, '2025-03-06 12:32:51'),
(8, 'Yes, I can', 9, 5, '2025-03-06 13:32:27'),
(9, 'no', 11, 0, '2025-03-06 16:26:58'),
(10, 'all', 10, 8, '2025-03-07 15:46:42'),
(11, 'no, it is not complusory ', 12, 9, '2025-03-07 15:53:39'),
(12, 'yes, but in limited form', 5, 8, '2025-03-18 09:33:58');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `created_at`) VALUES
(1, 'mobile', '2025-03-04 15:10:28'),
(2, 'laptop', '2025-03-04 15:10:44'),
(3, 'food', '2025-03-04 15:10:52'),
(4, 'coding', '2025-03-04 15:11:05'),
(5, 'general', '2025-03-04 15:17:31');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

DROP TABLE IF EXISTS `questions`;
CREATE TABLE IF NOT EXISTS `questions` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `description` varchar(300) NOT NULL,
  `category_id` int NOT NULL,
  `user_id` int NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `title`, `description`, `category_id`, `user_id`, `created_at`) VALUES
(1, 'Php', 'Is php is a good language', 4, 8, '2025-03-04 16:13:00'),
(2, 'Java', 'Is Java is a good language', 4, 8, '2025-03-04 16:14:20'),
(3, '1+ Mobile Phone', 'Should i buy latest 1+ phone or not?', 1, 3, '2025-03-04 16:17:13'),
(4, 'what is full form of OK', 'what is ok', 5, 8, '2025-03-06 13:03:16'),
(5, 'Is AI good for humans', 'Is AI good for humans or not?', 4, 8, '2025-03-06 13:03:49'),
(6, 'Which phone is best under 20k', 'specifications matter', 1, 1, '2025-03-06 13:04:52'),
(7, 'Apple is a good fruit?', 'what type of nutrients are present in apple?', 3, 1, '2025-03-06 13:30:00'),
(8, 'Best Laptop under 50k', 'specifications matter', 2, 1, '2025-03-06 13:30:29'),
(9, 'How to Learn React Js', 'can anyone help me to help latest version', 4, 5, '2025-03-06 13:31:59'),
(10, 'Which fruit is best for us?', 'i want to know which fruit is best for humans', 3, 5, '2025-03-06 15:25:01'),
(11, 'Should i buy macbook?', 'is macbook worth it or not?', 2, 7, '2025-03-06 16:19:16'),
(12, 'should i buy expensive clothes for personality?', 'just for improvement', 5, 7, '2025-03-06 16:20:05');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `address`, `created_at`) VALUES
(1, 'text', 'text@text', 'text', 'text', '2025-03-03 22:57:46'),
(8, 'rahul', 'rahul@rahul', 'rahul', 'rahul', '2025-03-04 15:53:35'),
(3, 'ram', 'ram@text', 'text', 'text', '2025-03-03 23:07:09'),
(4, 'sham', 'sham@text', 'text', 'text', '2025-03-03 23:07:46'),
(5, 'Test New', 'joshiraghav@yopmail.com', '123456', 'Test', '2025-03-04 11:51:51'),
(6, 'dgd', 'reg@TEST.COM', '123456', 'FDX', '2025-03-04 12:02:44'),
(7, 'sahil', 'sahil@text', '1234', '1234', '2025-03-04 12:40:37'),
(9, 'raju', 'raju@text', 'raju', 'canada', '2025-03-07 11:34:45');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
