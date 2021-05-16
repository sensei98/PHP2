-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: May 16, 2021 at 07:27 PM
-- Server version: 5.7.30
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `UsersDB`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` longtext NOT NULL,
  `email` longtext NOT NULL,
  `password` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `name`, `username`, `email`, `password`) VALUES
(6, 'Elias', 'Elias', 'elias@gmail.com', '8a2d05866d8aee732dbce3f59ec20b80;;;'),
(7, 'Samuel', 'samuel1', 'samuel@gmail.com', '6dff94fc66a249e99abecca24b9996c0;;;'),
(18, 'Elias', 'Elias', 'elias@gmail.com', '8a2d05866d8aee732dbce3f59ec20b80;;;'),
(19, 'Samuel', 'samuel1', 'samuel@gmail.com', '6dff94fc66a249e99abecca24b9996c0;;;'),
(22, 'Elias', 'Elias', 'elias@gmail.com', '8a2d05866d8aee732dbce3f59ec20b80;;;'),
(23, 'Samuel', 'samuel1', 'samuel@gmail.com', '6dff94fc66a249e99abecca24b9996c0;;;'),
(24, 'newTest', 'newtest', 'newtest@gmail.com', '825405c6bb4d5db6122fed11a28fb8ba');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;



--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `file_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `uploaded_on` datetime NOT NULL,
  `status` enum('1','0') COLLATE utf8_unicode_ci NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `file_name`, `uploaded_on`, `status`) VALUES
(1, 'fish.jpg', '2021-04-21 22:24:02', '1'),
(3, 'example.jpg', '2021-04-21 22:24:45', '1'),
(4, 'pexels-david-underland-3312275.jpg', '2021-04-21 22:25:55', '1'),
(5, 'fish.jpg', '2021-04-21 22:37:09', '1'),
(6, 'fish.jpg', '2021-04-21 22:37:09', '1'),
(7, 'pexels-david-underland-6569318.jpg', '2021-04-21 22:52:46', '1'),
(9, 'nicole-baster-vfozfpEfr50-unsplash.jpg', '2021-04-21 22:53:25', '1'),
(10, 'nicole-baster-vfozfpEfr50-unsplash.jpg', '2021-04-21 22:53:25', '1'),
(11, 'pexels-lisa-fotios-7173820.jpg', '2021-04-21 22:53:59', '1'),
(12, 'danny-howe-bn-D2bCvpik-unsplash.jpg', '2021-05-16 21:08:47', '1'),
(13, 'danny-howe-bn-D2bCvpik-unsplash.jpg', '2021-05-16 21:08:47', '1'),
(14, 'example.jpg', '2021-05-16 21:16:49', '1'),
(15, 'example.jpg', '2021-05-16 21:16:49', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
