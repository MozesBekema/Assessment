-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Gegenereerd op: 09 dec 2016 om 11:50
-- Serverversie: 10.1.19-MariaDB
-- PHP-versie: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `assessment`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `accounts`
--

CREATE TABLE `accounts` (
  `id` int(11) NOT NULL,
  `roles_id` int(11) NOT NULL,
  `username` varchar(45) DEFAULT NULL,
  `password` varchar(40) NOT NULL,
  `email` varchar(45) DEFAULT NULL,
  `name` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `accounts`
--

INSERT INTO `accounts` (`id`, `roles_id`, `username`, `password`, `email`, `name`) VALUES
(2, 2, 'MKL', 'marieke', 'mkleinhesselink@glu.nl', 'Marieke klein-hesselink');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `beoordeling`
--

CREATE TABLE `beoordeling` (
  `id` int(11) NOT NULL,
  `wp_id` int(11) NOT NULL,
  `wp_kt_id` int(11) NOT NULL,
  `accounts_id` int(11) NOT NULL,
  `accounts_roles_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `klas`
--

CREATE TABLE `klas` (
  `id` int(11) NOT NULL,
  `klas_name` varchar(45) DEFAULT NULL,
  `opleiding_id` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `klas`
--

INSERT INTO `klas` (`id`, `klas_name`, `opleiding_id`) VALUES
(1, '2md1', 1),
(3, '2IV1', 2),
(4, '2IV1V', 2),
(5, '2IV2', 2),
(6, '2IV2V', 2),
(2, '2md2', 1);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `kt`
--

CREATE TABLE `kt` (
  `id` int(11) NOT NULL,
  `kt_name` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `kt`
--

INSERT INTO `kt` (`id`, `kt_name`) VALUES
(1, 'Kerntaak 1'),
(2, 'Kerntaak 2'),
(3, 'Kerntaak 3'),
(4, 'Kerntaak 4');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `leerlingen`
--

CREATE TABLE `leerlingen` (
  `id` int(11) NOT NULL,
  `name` varchar(40) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `klas_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `leerlingen`
--

INSERT INTO `leerlingen` (`id`, `name`, `email`, `klas_id`) VALUES
(1, 'Charif Cherkaoui', '519097@student.glu.nl', 2),
(2, 'Daen Rebel', '517056@student.glu.nl', 2),
(3, 'Jelmer Egels', '517739@student.glu.nl', 2),
(4, 'Joost de Lange', '515547@student.glu.nl', 2),
(5, 'Kenny Gabriels', '510720@student.glu.nl', 2),
(6, 'Luke Peeks', '518860@student.glu.nl', 2),
(7, 'Mickey Schipper', '519027@student.glu.nl', 2),
(8, 'Nick Vooren', '515857@student.glu.nl', 2),
(9, 'Quinn Stadens', '517705@student.glu.nl', 2),
(10, 'Stefan van den Eijkel', '516556@student.glu.nl', 2),
(11, 'Stefan van Echtelt', '515851@student.glu.nl', 2),
(12, 'Terry Zhou', '518900@student.glu.nl', 2),
(13, 'Thomas Bekema', '515731@student.glu.nl', 2),
(14, 'Akram Tarioui', '517379@student.glu.nl', 1),
(15, 'Brendan Groot', '120497@student.glu.nl', 1),
(16, 'Bryant van den Berg', '516399@student.glu.nl', 1),
(17, 'Daan de Vos', '517852@student.glu.nl', 1),
(18, 'Faan Veldhuijsen', '516614@student.glu.nl', 1),
(19, 'Hugo Hulsebosch', '517357@student.glu.nl', 1),
(20, 'Kevin Mulder', '515829@student.glu.nl', 1),
(21, 'Marc Dufrasnes', '518433@student.glu.nl', 1),
(22, 'Marco van de Lindt', '517570@student.glu.nl', 1),
(23, 'Miriam Kant', '515871@student.glu.nl', 1),
(24, 'Myron Keurntjes', '517726@student.glu.nl', 1),
(25, 'Nadhr Braam', '511177@student.glu.nl', 1),
(26, 'Nino de Jong', '517068@student.glu.nl', 1),
(27, 'Roan Roodenburg', '516850@student.glu.nl', 1),
(28, 'Roeland Bosch', '516589@student.glu.nl', 1),
(29, 'Rune Daanen', '517266@student.glu.nl', 1),
(30, 'Steve Pronk', '518967@student.glu.nl', 1),
(31, 'Thom van Oort', '511095@student.glu.nl', 1);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `opleidingen`
--

CREATE TABLE `opleidingen` (
  `id` int(11) NOT NULL,
  `opleiding_name` varchar(45) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `opleidingen`
--

INSERT INTO `opleidingen` (`id`, `opleiding_name`) VALUES
(2, 'Interactieve vormgeving'),
(1, 'Mediadevelopment');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `type` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `roles`
--

INSERT INTO `roles` (`id`, `type`) VALUES
(1, 'admin'),
(2, 'docent'),
(3, 'student');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `wp`
--

CREATE TABLE `wp` (
  `id` int(11) NOT NULL,
  `kt_id` int(11) NOT NULL,
  `wp_name` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `wp`
--

INSERT INTO `wp` (`id`, `kt_id`, `wp_name`) VALUES
(1, 1, '1.1'),
(2, 1, '1.2'),
(3, 1, '1.3'),
(4, 1, '1.4'),
(5, 1, '1.5'),
(6, 2, '2.1'),
(7, 2, '2.2'),
(8, 2, '2.3'),
(9, 2, '2.4'),
(10, 2, '2.5'),
(11, 2, '2.6'),
(12, 2, '2.7'),
(17, 3, '3.1'),
(18, 3, '3.2'),
(19, 3, '3.3'),
(20, 3, '3.4'),
(21, 4, '4.1'),
(22, 4, '4.2'),
(23, 4, '4.3'),
(24, 4, '4.4'),
(25, 4, '4.5'),
(26, 4, '4.6');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`,`roles_id`),
  ADD UNIQUE KEY `username_UNIQUE` (`username`),
  ADD UNIQUE KEY `email_UNIQUE` (`email`),
  ADD KEY `fk_accounts_roles1_idx` (`roles_id`);

--
-- Indexen voor tabel `beoordeling`
--
ALTER TABLE `beoordeling`
  ADD PRIMARY KEY (`id`,`wp_id`,`wp_kt_id`,`accounts_id`,`accounts_roles_id`),
  ADD KEY `fk_Beoordeling_WP1_idx` (`wp_id`,`wp_kt_id`),
  ADD KEY `fk_Beoordeling_accounts1_idx` (`accounts_id`,`accounts_roles_id`);

--
-- Indexen voor tabel `klas`
--
ALTER TABLE `klas`
  ADD UNIQUE KEY `klas_name_UNIQUE` (`klas_name`);

--
-- Indexen voor tabel `kt`
--
ALTER TABLE `kt`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kt_name_UNIQUE` (`kt_name`);

--
-- Indexen voor tabel `leerlingen`
--
ALTER TABLE `leerlingen`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `opleidingen`
--
ALTER TABLE `opleidingen`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `opleiding_name` (`opleiding_name`);

--
-- Indexen voor tabel `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `wp`
--
ALTER TABLE `wp`
  ADD PRIMARY KEY (`id`,`kt_id`),
  ADD UNIQUE KEY `wp_name_UNIQUE` (`wp_name`),
  ADD KEY `fk_WP_KT1_idx` (`kt_id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT voor een tabel `beoordeling`
--
ALTER TABLE `beoordeling`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT voor een tabel `kt`
--
ALTER TABLE `kt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT voor een tabel `leerlingen`
--
ALTER TABLE `leerlingen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT voor een tabel `opleidingen`
--
ALTER TABLE `opleidingen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT voor een tabel `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT voor een tabel `wp`
--
ALTER TABLE `wp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- Beperkingen voor geëxporteerde tabellen
--

--
-- Beperkingen voor tabel `accounts`
--
ALTER TABLE `accounts`
  ADD CONSTRAINT `fk_accounts_roles1` FOREIGN KEY (`roles_id`) REFERENCES `roles` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Beperkingen voor tabel `beoordeling`
--
ALTER TABLE `beoordeling`
  ADD CONSTRAINT `fk_Beoordeling_WP1` FOREIGN KEY (`wp_id`,`wp_kt_id`) REFERENCES `wp` (`id`, `kt_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Beoordeling_accounts1` FOREIGN KEY (`accounts_id`,`accounts_roles_id`) REFERENCES `accounts` (`id`, `roles_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Beperkingen voor tabel `wp`
--
ALTER TABLE `wp`
  ADD CONSTRAINT `fk_WP_KT1` FOREIGN KEY (`kt_id`) REFERENCES `kt` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
