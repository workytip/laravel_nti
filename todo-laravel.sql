-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Jun 30, 2022 at 08:05 PM
-- Server version: 8.0.18
-- PHP Version: 7.4.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `todo-laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

DROP TABLE IF EXISTS `tasks`;
CREATE TABLE IF NOT EXISTS `tasks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `content` varchar(500) COLLATE utf8mb4_general_ci NOT NULL,
  `image` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `start_date` int(11) NOT NULL,
  `end_date` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`id`, `title`, `content`, `image`, `start_date`, `end_date`, `created_at`, `updated_at`, `user_id`) VALUES
(6, 'Jasmine Reyes', 'Quisquam accusamus Sit hic maiores quiSit hic maiores quiSit hic maiores quiSit hic maiores quiSit hic maiores quiSit hic maiores quiSit hic maiores quiSit hic maiores quiSit hic maiores quiSit hic maiores quiSit hic maiores quiSit hic maiores quiSit hic maiores quiSit hic maiores qui', '165661614362bdf4cf50e3b.jpg', 486604800, 1600992000, '2022-06-30 19:09:03', '2022-06-30 19:09:03', 3),
(7, 'Jessamine Curry', 'Qui iste maiores aspSit hic maiores quiSit hic maiores quiSit hic maiores quiSit hic maiores quiSit hic maiores quiSit hic maiores quiSit hic maiores quiSit hic maiores quiSit hic maiores quiSit hic maiores quiSit hic maiores quiSit hic maiores quiSit hic maiores qui', '165661616262bdf4e21b150.jpg', 1213833600, 958176000, '2022-06-30 19:09:22', '2022-06-30 19:09:22', 3),
(8, 'Celeste Hawkins', 'Veniam ea natus maiSit hic maiores quiSit hic maiores quiSit hic maiores quiSit hic maiores quiSit hic maiores quiSit hic maiores quiSit hic maiores quiSit hic maiores quiSit hic maiores quiSit hic maiores quiSit hic maiores quiSit hic maiores quiSit hic maiores quiSit hic maiores quiSit hic maiores qui', '165661617962bdf4f3492b3.jpg', 371347200, 1449187200, '2022-06-30 19:09:39', '2022-06-30 19:09:39', 3),
(9, 'Fulton Velazquez', 'Velit non nemo sit aSit hic maiores quiSit hic maiores quiSit hic maiores quiSit hic maiores quiSit hic maiores quiSit hic maiores quiSit hic maiores quiSit hic maiores quiSit hic maiores quiSit hic maiores quiSit hic maiores qui', '165661621262bdf51480f76.jpg', 557798400, 1212019200, '2022-06-30 19:10:12', '2022-06-30 19:10:12', 3),
(11, 'Burton Maxwell', 'Aut voluptas ad ea vadmin@admin.comadmin@admin.comadmin@admin.comadmin@admin.comadmin@admin.comadmin@admin.comadmin@admin.comadmin@admin.comadmin@admin.com', '165661633862bdf59262f69.jpg', 1325808000, 870393600, '2022-06-30 19:12:18', '2022-06-30 19:12:18', 3),
(12, 'Tashya Dotson', 'Id deserunt id ut coId deserunt id ut coId deserunt id ut coId deserunt id ut coId deserunt id ut coId deserunt id ut coId deserunt id ut coId deserunt id ut coId deserunt id ut coId deserunt id ut coId deserunt id ut coId deserunt id ut coId deserunt id ut coId deserunt id ut co', '165661638362bdf5bf05de1.png', 628387200, 1562544000, '2022-06-30 19:13:03', '2022-06-30 19:13:03', 4),
(13, 'Cherokee Ferguson', 'In dicta dolore doloId deserunt id ut coId deserunt id ut coId deserunt id ut coId deserunt id ut coId deserunt id ut coId deserunt id ut coId deserunt id ut coId deserunt id ut coId deserunt id ut coId deserunt id ut coId deserunt id ut coId deserunt id ut coId deserunt id ut co', '165661639762bdf5cd1e571.png', 241574400, 143251200, '2022-06-30 19:13:17', '2022-06-30 19:13:17', 4),
(14, 'Odysseus Harding', 'Aut sapiente doloremId deserunt id ut coId deserunt id ut coId deserunt id ut coId deserunt id ut coId deserunt id ut coId deserunt id ut coId deserunt id ut coId deserunt id ut coId deserunt id ut coId deserunt id ut coId deserunt id ut coId deserunt id ut coId deserunt id ut co', '165661641062bdf5dabbf3e.png', 1417132800, 575251200, '2022-06-30 19:13:30', '2022-06-30 19:13:30', 4),
(16, 'old task ttttt', 'Molestiae cupiditateMolestiae cupiditateMolestiae cupiditateMolestiae cupiditateMolestiae cupiditateMolestiae cupiditateMolestiae cupiditate', '165661734562bdf981d367f.jpg', 1655337600, 1656288000, '2022-06-30 19:29:05', '2022-06-30 19:29:05', 3);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` char(50) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'April Barrett', 'wijyl@mailinator.com', 'Pa$$w0rd!', '2022-06-30 16:27:41', '2022-06-30 16:27:41'),
(2, 'Travis Shepherd', 'jonupo@mailinator.com', '$2y$10$h7e9rEz827lQe8.L5Artouzo2do61dBwQgpDni/QVIKrlQ1gB/dKy', '2022-06-30 18:24:56', '2022-06-30 18:24:56'),
(3, 'admin', 'admin@admin.com', '$2y$10$BGivRxqpATHuuyUMkQpn3efyqPqYuaWB95e8Sm0xdB6mY81cnSv46', '2022-06-30 18:25:50', '2022-06-30 18:25:50'),
(4, 'user', 'user@user.com', '$2y$10$o1hTMOkdpTC.u4NDkIlcsOXu/NSaSapL3/v48DT8CpIS8XUb8HcWK', '2022-06-30 18:35:30', '2022-06-30 18:35:30');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tasks`
--
ALTER TABLE `tasks`
  ADD CONSTRAINT `task_user_relation` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
