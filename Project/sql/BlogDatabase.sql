-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2019 at 03:41 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blogdatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `Article_id` bigint(10) NOT NULL,
  `Author_id` bigint(12) NOT NULL,
  `Article_title` text NOT NULL,
  `Article_full_text` text NOT NULL,
  `Article_created_date` bigint(10) NOT NULL DEFAULT '0',
  `Article_last_update` bigint(10) NOT NULL DEFAULT '0',
  `Article_display` tinyint(1) NOT NULL DEFAULT '0',
  `Article_order` bigint(12) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `UserId` bigint(12) NOT NULL,
  `Full_Name` varchar(70) NOT NULL DEFAULT '',
  `Email` varchar(50) NOT NULL DEFAULT '',
  `Phone_Number` varchar(10) NOT NULL DEFAULT '',
  `Address` varchar(70) NOT NULL DEFAULT '',
  `Username` varchar(70) NOT NULL DEFAULT '',
  `User_Password` varchar(60) NOT NULL DEFAULT '',
  `UserType` varchar(30) NOT NULL DEFAULT '',
  `AccessTime` bigint(12) NOT NULL DEFAULT '0',
  `Profile_Image` varchar(50) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UserId`, `Full_Name`, `Email`, `Phone_Number`, `Address`, `Username`, `User_Password`, `UserType`, `AccessTime`, `Profile_Image`) VALUES
(3, 'Bancy Kariuki', 'bancykariuki@gmail.com', '0185369741', 'Nairobi', 'bancy', '$2y$10$VkLxNWtJPeY6GnTYwJToLe9owiPwrbkCRqnd3u7WqIL0QnJ0d11Am', 'SU', 1562845722, ''),
(4, 'Brian Baliach', 'brianbaly@gmail.com', '0703256987', 'Embakasi', 'baly', '$2y$10$IzzpF8bNZGhv8U4vR8vZP.Qo2U5FwmaOBwaLQHDFeOiOztfws6vG.', 'Admin', 1562849436, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`Article_id`),
  ADD KEY `Author_id` (`Author_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UserId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `Article_id` bigint(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `UserId` bigint(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `articles_ibfk_1` FOREIGN KEY (`Author_id`) REFERENCES `users` (`UserId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
