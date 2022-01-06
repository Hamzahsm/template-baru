-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 06, 2022 at 05:41 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ssve`  
--

-- --------------------------------------------------------

--
-- Table structure for table `test_pilot`
--

CREATE TABLE `test_pilot` (
  `id` int(11) NOT NULL,
  `title` varchar(500) NOT NULL,
  `genre` varchar(500) NOT NULL,
  `discount` varchar(500) NOT NULL,
  `harga` varchar(500) NOT NULL,
  `sale` varchar(500) NOT NULL,
  `image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `test_pilot`
--

INSERT INTO `test_pilot` (`id`, `title`, `genre`, `discount`, `harga`, `sale`, `image`) VALUES
(1, 'satu', 'NEW WORLD, MMORPG', '30%', '$14', '$7', ''),
(2, 'dua', 'GUILD WARS 2, MMORPG', '50%', '$20', '$10', ''),
(3, 'Leveling 1-20', 'NEW WORLD, MMORPG', '10%', '$100', '$90', ''),
(4, 'Leveling 21-30', 'NEW WORLD, MMORPG', '20%', '$80', '$60', ''),
(5, 'Leveling 31-40', 'NEW WORLD, MMORPG', '50%', '$150', '$75', ''),
(6, 'Aurora Package ', 'packages ', '30%', '$350', '$280', ''),
(7, 'Veteran Packages ', 'packages', '20%', '$600', '$500', ''),
(8, 'Aurora Package ', 'packages ', '30%', '$350', '$280', ''),
(9, 'Veteran Packages ', 'packages', '20%', '$600', '$500', ''),
(10, 'Legendary Accessories \"Aurora\"', 'Guild Wars 2', '10%', '$180', '$165', ''),
(11, 'Legendary Accessories \"Vision\"', 'Guild Wars 2', '$15', '$250', '$220', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `test_pilot`
--
ALTER TABLE `test_pilot`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `test_pilot`
--
ALTER TABLE `test_pilot`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
