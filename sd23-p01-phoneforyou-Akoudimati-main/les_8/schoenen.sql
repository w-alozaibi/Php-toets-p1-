-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 24 okt 2024 om 10:08
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
-- Database: `schoenen`
--
CREATE DATABASE IF NOT EXISTS `schoenen` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `schoenen`;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `merk`
--

CREATE TABLE `merk` (
  `id` int(5) NOT NULL,
  `naam` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Gegevens worden geëxporteerd voor tabel `merk`
--

INSERT INTO `merk` (`id`, `naam`) VALUES
(1, 'Nike'),
(2, 'Adidas'),
(3, 'Dr. Martens'),
(4, 'Puma'),
(5, 'Clarks'),
(6, 'Vans');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `merk`
--
ALTER TABLE `merk`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `merk`
--
ALTER TABLE `merk`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
