-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 06. Mrz 2023 um 16:11
-- Server-Version: 10.4.24-MariaDB
-- PHP-Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `second_handportal`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `artikel`
--

CREATE TABLE `artikel` (
  `id` int(11) NOT NULL,
  `bezeichnung` varchar(45) DEFAULT NULL,
  `beschreibung` varchar(45) DEFAULT NULL,
  `preis` double DEFAULT NULL,
  `einstelldatum` timestamp NULL DEFAULT NULL,
  `Person_Personid` int(11) NOT NULL,
  `Zustand_Zustandid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `artikel`
--

INSERT INTO `artikel` (`id`, `bezeichnung`, `beschreibung`, `preis`, `einstelldatum`, `Person_Personid`, `Zustand_Zustandid`) VALUES
(1, 'fahrrad', 'brauche ich nicht mehr', 10, '2023-03-06 14:08:51', 1, 1),
(2, 'pc', 'ist alt', 200, '2023-03-01 14:52:20', 1, 2),
(3, 'uhr', 'nagellll neeeu', 4000, '2023-03-02 14:53:11', 1, 1),
(4, 'auto', 'unfall', 50, '2023-03-09 15:07:23', 1, 3);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `person`
--

CREATE TABLE `person` (
  `id` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `passwort` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `telefonnummer` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `person`
--

INSERT INTO `person` (`id`, `name`, `passwort`, `email`, `telefonnummer`) VALUES
(1, 'benjamin', '123', 'benny@email.com', '3476747635');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `zustand`
--

CREATE TABLE `zustand` (
  `id` int(11) NOT NULL,
  `zustand` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `zustand`
--

INSERT INTO `zustand` (`id`, `zustand`) VALUES
(1, 'gut'),
(2, 'schlecht'),
(3, 'kaputt');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_Artikel_Person_idx` (`Person_Personid`),
  ADD KEY `fk_Artikel_Zustand1_idx` (`Zustand_Zustandid`);

--
-- Indizes für die Tabelle `person`
--
ALTER TABLE `person`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `zustand`
--
ALTER TABLE `zustand`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT für Tabelle `person`
--
ALTER TABLE `person`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT für Tabelle `zustand`
--
ALTER TABLE `zustand`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints der exportierten Tabellen
--

--
-- Constraints der Tabelle `artikel`
--
ALTER TABLE `artikel`
  ADD CONSTRAINT `fk_Artikel_Person` FOREIGN KEY (`Person_Personid`) REFERENCES `person` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Artikel_Zustand1` FOREIGN KEY (`Zustand_Zustandid`) REFERENCES `zustand` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
