-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 17 okt 2024 om 10:02
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
-- Database: `les5_school`
--
CREATE DATABASE IF NOT EXISTS `les5_school` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `les5_school`;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `klassen`
--

CREATE TABLE `klassen` (
  `id` int(11) NOT NULL,
  `naam` varchar(255) NOT NULL,
  `mentor` varchar(555) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Gegevens worden geëxporteerd voor tabel `klassen`
--

INSERT INTO `klassen` (`id`, `naam`, `mentor`) VALUES
(1, 'T1A', 'dhr.de vries\r\n'),
(2, 'T1b', 'dhr.van TOL');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `leerlingen`
--

CREATE TABLE `leerlingen` (
  `id` int(11) NOT NULL,
  `voornaam` varchar(255) NOT NULL,
  `tussenvoegsel` varchar(255) DEFAULT NULL,
  `achternaam` varchar(255) NOT NULL,
  `klassen_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Gegevens worden geëxporteerd voor tabel `leerlingen`
--

INSERT INTO `leerlingen` (`id`, `voornaam`, `tussenvoegsel`, `achternaam`, `klassen_id`) VALUES
(1, 'ANNA', 'DE', 'JONG', 1),
(2, 'esmaa', NULL, 'jansen', 1),
(3, 'jack', 'de', 'vries', 1),
(5, 'senn', 'van de', 'berg', 1),
(6, 'brem', 'van', 'dijk', 2),
(8, 'elin', NULL, 'bakker', 2),
(9, 'janssen', NULL, 'visser', 2),
(10, 'david', NULL, 'smit', 2);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `review` text NOT NULL,
  `terms_accepted` tinyint(1) NOT NULL DEFAULT 0,
  `submitted_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Gegevens worden geëxporteerd voor tabel `reviews`
--

INSERT INTO `reviews` (`id`, `name`, `review`, `terms_accepted`, `submitted_at`) VALUES
(1, '123', '123', 1, '2024-10-17 06:41:51'),
(2, '123', '12', 1, '2024-10-17 06:41:53');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `review_les7`
--

CREATE TABLE `review_les7` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Gegevens worden geëxporteerd voor tabel `review_les7`
--

INSERT INTO `review_les7` (`id`, `name`, `content`, `time`) VALUES
(1, '123', '123', '2024-10-17 09:32:22'),
(2, '12312', '123', '2024-10-17 09:40:24'),
(3, '1231', '123', '2024-10-17 10:00:06'),
(4, '123', '123', '2024-10-17 10:00:27'),
(5, '123', '123', '2024-10-17 10:00:42'),
(6, '123', '123', '2024-10-17 10:00:59');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `klassen`
--
ALTER TABLE `klassen`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `leerlingen`
--
ALTER TABLE `leerlingen`
  ADD PRIMARY KEY (`id`),
  ADD KEY `klassen_id` (`klassen_id`);

--
-- Indexen voor tabel `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `review_les7`
--
ALTER TABLE `review_les7`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `klassen`
--
ALTER TABLE `klassen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT voor een tabel `leerlingen`
--
ALTER TABLE `leerlingen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT voor een tabel `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT voor een tabel `review_les7`
--
ALTER TABLE `review_les7`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Beperkingen voor geëxporteerde tabellen
--

--
-- Beperkingen voor tabel `leerlingen`
--
ALTER TABLE `leerlingen`
  ADD CONSTRAINT `leerlingen_ibfk_1` FOREIGN KEY (`klassen_id`) REFERENCES `klassen` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
