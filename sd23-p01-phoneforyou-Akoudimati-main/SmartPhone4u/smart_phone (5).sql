-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 17 okt 2024 om 12:43
-- Serverversie: 10.4.32-MariaDB
-- PHP-versie: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smart_phone`
--
CREATE DATABASE IF NOT EXISTS `smart_phone` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `smart_phone`;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `homepage`
--

CREATE TABLE `homepage` (
  `id` int(11) NOT NULL,
  `tittel` varchar(555) NOT NULL,
  `description` varchar(555) DEFAULT NULL,
  `boutton` varchar(555) NOT NULL,
  `img` varchar(555) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Gegevens worden geëxporteerd voor tabel `homepage`
--

INSERT INTO `homepage` (`id`, `tittel`, `description`, `boutton`, `img`) VALUES
(1, 'iphone', 'Bestel bij ons je nieuwe smartphone', 'SmartPhone4u/Homepagina.php', '');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `iphones`
--

CREATE TABLE `iphones` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(6,2) NOT NULL,
  `vendor_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Gegevens worden geëxporteerd voor tabel `iphones`
--

INSERT INTO `iphones` (`id`, `name`, `picture`, `description`, `price`, `vendor_id`) VALUES
(1, 'Samsung Galaxy 524 256GB Zwart 5G', '../../SmartPhone4u/img/phones/galaxy24_black.png', 'Samsung Galaxy 524 256GB Zwart 5G', 200.00, 1);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `samsung`
--

CREATE TABLE `samsung` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(6,2) NOT NULL,
  `vendor_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Gegevens worden geëxporteerd voor tabel `samsung`
--

INSERT INTO `samsung` (`id`, `name`, `picture`, `description`, `price`, `vendor_id`) VALUES
(0, 'Samsung Galaxy 524 256GB Zwart 5G', '../SmartPhone4u/img/phones/galaxy24_black.png', 'samsung galaxy 524', 0.00, 0),
(0, 'Samsung Galaxy A35 128GB\r\nDonkerblauw 5g', '../SmartPhone4u/img/phones/galaxy35_black.png', 'Samsung  phone ', 0.00, 0);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `vendor`
--

CREATE TABLE `vendor` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `btn` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Gegevens worden geëxporteerd voor tabel `vendor`
--

INSERT INTO `vendor` (`id`, `name`, `picture`, `description`, `btn`) VALUES
(1, 'Apple', '../../SmartPhone4u/img/vendors/Apple.png', 'smartphones van Apple met iOS', '../../SmartPhone4u/iphone/iphone.php'),
(2, 'Samsung', '../../SmartPhone4u/img/vendors/samsung.png', 'smartphones van Samsung met Android', '../../SmartPhone4u/samsung/samsung.php');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `vendor`
--
ALTER TABLE `vendor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `vendor`
--
ALTER TABLE `vendor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
