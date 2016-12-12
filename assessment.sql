-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 12, 2016 at 01:15 PM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

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
-- Table structure for table `accounts`
--

CREATE TABLE IF NOT EXISTS `accounts` (
  `id` int(11) NOT NULL,
  `roles_id` int(11) NOT NULL,
  `username` varchar(45) DEFAULT NULL,
  `password` varchar(40) NOT NULL,
  `email` varchar(45) DEFAULT NULL,
  `name` varchar(40) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `roles_id`, `username`, `password`, `email`, `name`) VALUES
(2, 2, 'MKL', 'marieke', 'mkleinhesselink@glu.nl', 'Marieke klein-hesselink');

-- --------------------------------------------------------

--
-- Table structure for table `beoordeling`
--

CREATE TABLE IF NOT EXISTS `beoordeling` (
  `id` int(11) NOT NULL,
  `wp_id` int(11) NOT NULL,
  `accounts_id` int(11) NOT NULL,
  `beoordeling` tinyint(4) NOT NULL,
  `tijd` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `leerling_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `beoordeling`
--

INSERT INTO `beoordeling` (`id`, `wp_id`, `accounts_id`, `beoordeling`, `tijd`, `leerling_id`) VALUES
(1, 10, 2, 3, '2016-12-12 10:30:23', 4),
(3, 11, 2, 2, '2016-12-12 11:52:14', 4);

-- --------------------------------------------------------

--
-- Table structure for table `klas`
--

CREATE TABLE IF NOT EXISTS `klas` (
  `id` int(11) NOT NULL,
  `klas_name` varchar(45) DEFAULT NULL,
  `opleiding_id` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `klas`
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
-- Table structure for table `kt`
--

CREATE TABLE IF NOT EXISTS `kt` (
  `id` int(11) NOT NULL,
  `kt_name` varchar(45) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `kt`
--

INSERT INTO `kt` (`id`, `kt_name`) VALUES
(1, 'Kerntaak 1'),
(2, 'Kerntaak 2'),
(3, 'Kerntaak 3'),
(4, 'Kerntaak 4');

-- --------------------------------------------------------

--
-- Table structure for table `leerlingen`
--

CREATE TABLE IF NOT EXISTS `leerlingen` (
  `id` int(11) NOT NULL,
  `name` varchar(40) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `klas_id` int(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `leerlingen`
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
-- Table structure for table `opleidingen`
--

CREATE TABLE IF NOT EXISTS `opleidingen` (
  `id` int(11) NOT NULL,
  `opleiding_name` varchar(45) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `opleidingen`
--

INSERT INTO `opleidingen` (`id`, `opleiding_name`) VALUES
(2, 'Interactieve vormgeving'),
(1, 'Mediadevelopment');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(11) NOT NULL,
  `type` varchar(45) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `type`) VALUES
(1, 'admin'),
(2, 'docent'),
(3, 'student');

-- --------------------------------------------------------

--
-- Table structure for table `wp`
--

CREATE TABLE IF NOT EXISTS `wp` (
  `id` int(11) NOT NULL,
  `kt_id` int(11) NOT NULL,
  `wp_name` varchar(45) DEFAULT NULL,
  `wp_num` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `wp`
--

INSERT INTO `wp` (`id`, `kt_id`, `wp_name`, `wp_num`) VALUES
(1, 1, '1.1', 1),
(2, 1, '1.2', 2),
(3, 1, '1.3', 0),
(4, 1, '1.4', 0),
(5, 1, '1.5', 0),
(6, 2, '2.1', 0),
(7, 2, '2.2', 0),
(8, 2, '2.3', 0),
(9, 2, '2.4', 0),
(10, 2, 'Realiseer iets', 5),
(11, 2, '2.6', 0),
(12, 2, '2.7', 0),
(17, 3, '3.1', 0),
(18, 3, '3.2', 0),
(19, 3, '3.3', 0),
(20, 3, '3.4', 0),
(21, 4, '4.1', 0),
(22, 4, '4.2', 0),
(23, 4, '4.3', 0),
(24, 4, '4.4', 0),
(25, 4, '4.5', 0),
(26, 4, '4.6', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`,`roles_id`),
  ADD UNIQUE KEY `username_UNIQUE` (`username`),
  ADD UNIQUE KEY `email_UNIQUE` (`email`),
  ADD KEY `fk_accounts_roles1_idx` (`roles_id`);

--
-- Indexes for table `beoordeling`
--
ALTER TABLE `beoordeling`
  ADD PRIMARY KEY (`id`,`wp_id`,`accounts_id`),
  ADD KEY `fk_Beoordeling_WP1_idx` (`wp_id`),
  ADD KEY `fk_Beoordeling_accounts1_idx` (`accounts_id`);

--
-- Indexes for table `klas`
--
ALTER TABLE `klas`
  ADD UNIQUE KEY `klas_name_UNIQUE` (`klas_name`);

--
-- Indexes for table `kt`
--
ALTER TABLE `kt`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kt_name_UNIQUE` (`kt_name`);

--
-- Indexes for table `leerlingen`
--
ALTER TABLE `leerlingen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `opleidingen`
--
ALTER TABLE `opleidingen`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `opleiding_name` (`opleiding_name`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wp`
--
ALTER TABLE `wp`
  ADD PRIMARY KEY (`id`,`kt_id`),
  ADD UNIQUE KEY `wp_name_UNIQUE` (`wp_name`),
  ADD KEY `fk_WP_KT1_idx` (`kt_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `beoordeling`
--
ALTER TABLE `beoordeling`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `kt`
--
ALTER TABLE `kt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `leerlingen`
--
ALTER TABLE `leerlingen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `opleidingen`
--
ALTER TABLE `opleidingen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `wp`
--
ALTER TABLE `wp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=27;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `accounts`
--
ALTER TABLE `accounts`
  ADD CONSTRAINT `fk_accounts_roles1` FOREIGN KEY (`roles_id`) REFERENCES `roles` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `wp`
--
ALTER TABLE `wp`
  ADD CONSTRAINT `fk_WP_KT1` FOREIGN KEY (`kt_id`) REFERENCES `kt` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
