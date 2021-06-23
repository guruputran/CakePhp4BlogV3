-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 24, 2021 at 01:21 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `devpng`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(191) DEFAULT NULL,
  `body` text DEFAULT NULL,
  `image` varchar(191) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `published` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `body`, `image`, `created`, `modified`, `published`) VALUES
(2, 'A Good day', 'The Lion is back in one piece', '60d3252e318d1_gats.jpg', '2008-06-19 18:26:11', '2021-06-23 22:45:02', 1),
(10, 'Instructor introduction', 'Yoga sadanam one', '60d322486e702_gats.jpg', '2021-06-22 10:04:48', '2021-06-23 08:43:10', 1),
(11, 'Another day Still Looking?', 'My Lion Ran off', '', '2021-06-23 12:03:23', '2021-06-23 08:41:06', 1),
(12, 'Some tips about SSH and installing Apache on Ubuntu VPS', 'Body massagements', '60d32d0694407_ft.png', '2021-06-23 06:28:09', '2021-06-23 20:45:58', 1),
(18, 'Thank God', 'All belongs to father day', '60d31dc7825a1_notification.png', '2021-06-23 07:36:25', '2021-06-23 07:51:03', 1),
(19, 'Test Page', 'This is a test page?', '60d3458c881e9_girl-3033718.jpg', '2021-06-23 10:30:00', '2021-06-23 22:30:36', 1),
(20, 'Instructor introduction', 'best ones', '60d34a63b5683_', '2021-06-23 10:51:15', '2021-06-23 10:51:15', 1),
(21, 'Thank God', 'Young ones', '60d34a7229099_', '2021-06-23 10:51:30', '2021-06-23 10:51:30', 1),
(22, 'Instructor introduction', 'Best body', '60d34a7f6439a_', '2021-06-23 10:51:43', '2021-06-23 10:51:43', 1),
(23, 'Thank God', 'Mine is ok', '60d34a922714a_', '2021-06-23 10:52:02', '2021-06-23 10:52:02', 1),
(24, 'Introduction and warm up', 'Post 11', '60d35ad7e2249_', '2021-06-24 12:01:27', '2021-06-24 12:01:27', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`) VALUES
(5, 'rajppd@gmail.com', '$2y$10$q2fBKrpGp3BFlwqJqTiz3ue97n.3vgaAdc29ipYIO/k9I65AQMi3y'),
(6, 'thumbi@gmail.com', '$2y$10$Uyv0KDclusDKLj5OnVhcw.3lcwtmJyf1mcrPIOt4f4JPwCBJV/oSW');

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
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
