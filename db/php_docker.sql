-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: db:3306
-- Generation Time: Jun 22, 2023 at 02:17 PM
-- Server version: 8.0.33
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php_docker`
--

-- --------------------------------------------------------

--
-- Table structure for table `php_docker_table`
--

CREATE TABLE `php_docker_table` (
  `id` int NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `date_created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `php_docker_table`
--

INSERT INTO `php_docker_table` (`id`, `title`, `body`, `date_created`) VALUES
(6, 'my-blog-post', 'I love capybaras', '2023-06-22'),
(7, 'linux-is-cool', 'linux is cool cause yes', '2023-06-01'),
(9, 'Cats-are-cute', 'Cats are cute cause they are cute', '2023-06-30'),
(10, 'why-I-want-to-get-capybaras', ' Hi guys we released a new orcus rat into the new version of the front end\r\n\r\n\r\n-- The Fajurions Developers\r\n', '2013-06-01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `php_docker_table`
--
ALTER TABLE `php_docker_table`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `php_docker_table`
--
ALTER TABLE `php_docker_table`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
