-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: mysql
-- Erstellungszeit: 13. Feb 2023 um 07:13
-- Server-Version: 8.0.31
-- PHP-Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `quiz`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `content`
--

CREATE TABLE `content` (
  `id` int NOT NULL,
  `tag` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `englisch` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Daten für Tabelle `content`
--

INSERT INTO `content` (`id`, `tag`, `englisch`) VALUES
(1, 'topic', 'Quiz topic - please select!'),
(2, 'questionNum', 'Number of questions:'),
(3, 'timerQuestion', 'Time per question:'),
(4, 'ch-norris', 'Chuck Norris'),
(5, 'animals', 'Animals'),
(6, 'movies', 'Movies'),
(7, 'd-n-d', 'Dungeons & Dragons'),
(8, 'astronautics', 'Astronautics'),
(9, 'geography', 'Geography'),
(10, 'science', 'Science'),
(11, 'informatics', 'Informatics'),
(12, 'gen-knowledge', 'General Knowledge'),
(13, 'basketball', 'Basketball'),
(14, 'points', 'Congratulations you have achieved $points out of $totPoints points.'),
(15, 'correct30', 'You have them general knowledge of a sunflower!'),
(16, 'correct60', 'You have plenty of room for improvement. Our advice: Take another quiz!'),
(17, 'correct80', 'That\'s pretty good. Now try to get it perfect by training with another quiz!'),
(18, 'correct95', 'You are quite the Einstein! Do you shine like this in every topic? Take another quiz to see!');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `content`
--
ALTER TABLE `content`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
