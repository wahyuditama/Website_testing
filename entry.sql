-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2024 at 07:44 AM
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
-- Database: `entry`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) DEFAULT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(NULL, 'testuser', '$2y$10$wHjX.oTPXNOX0X.WzTif6ehroLbPpgQglFrQs5TI3.WJTSXXH1Eq6'),
(NULL, 'tono', '123'),
(NULL, 'tono', '123'),
(NULL, 'qwwwee', '123'),
(NULL, 'indra', '$2y$10$nusZlut3iaV6487UaVXh2eD7gfEFxL1k/o335HUpqwiFTsAfeupWO'),
(NULL, 'indra', '$2y$10$RWR3JrVD8k.31tNKLdSiwOntlRmNQ/AY2m93ft8wM8gERpJLTUhru'),
(NULL, 'luso', '$2y$10$.FLaoE./QG2Cg6nlgFcwG.ewrnCMHfwcRpIFAVjxsbR6lME5MlZue'),
(NULL, 'luso', '$2y$10$wxCp6BmJARxir96Q497GQu0u0FMgvZwXCdb2QxL29cUPBtjuQ17SW');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
