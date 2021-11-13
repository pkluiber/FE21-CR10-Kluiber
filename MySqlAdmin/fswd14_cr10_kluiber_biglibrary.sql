-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 13. Nov 2021 um 13:16
-- Server-Version: 10.4.21-MariaDB
-- PHP-Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `fswd14_cr10_kluiber_biglibrary`
--
CREATE DATABASE IF NOT EXISTS `fswd14_cr10_kluiber_biglibrary` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `fswd14_cr10_kluiber_biglibrary`;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `biglibrary`
--

CREATE TABLE `biglibrary` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `isbn` varchar(20) NOT NULL,
  `short_des` varchar(300) NOT NULL,
  `type` varchar(10) NOT NULL,
  `aut_fName` varchar(40) NOT NULL,
  `aut_lName` varchar(40) NOT NULL,
  `pub_name` varchar(40) NOT NULL,
  `pub_address` varchar(50) NOT NULL,
  `pub_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `biglibrary`
--

INSERT INTO `biglibrary` (`id`, `title`, `picture`, `isbn`, `short_des`, `type`, `aut_fName`, `aut_lName`, `pub_name`, `pub_address`, `pub_date`) VALUES
(34, 'test', '618fa81e4f5c4.jpeg', '1234', 'test', 'Book', 'test', 'test', 'test', 'test', '2020-12-11'),
(35, 'testtest', '618fa8581b8fc.jpeg', '23456789', 'testtest', 'Book', 'testtest', 'testtest', 'testtest', 'testtest', '2015-11-15'),
(36, 'The Crown - Die komplette vierte Season', '618fa93b5cb93.jpeg', '4030521758728', 'Die 70er Jahre nähern sich dem Ende und Königin Elisabeth und ihre Familie sind damit beschäftigt, die Thronfolge zu schützen, indem sie eine geeignete Braut für Prinz Charles suchen, der im Alter von 30 Jahren immer noch unverheiratet ist.', 'DVD', '', '', '', '', '2021-11-18'),
(37, 'Tom & Jerry', '618fa9cf8a018.jpeg', '5051890326638', 'Beste Feinde - schlimmste Freunde - Tom und Jerrys neues Abenteuer auf der großen Leinwand ist eine atemberaubende Mischung aus klassischem Animations- und Realfilm. \"Tom & Jerry\" von Regisseur Tim Story entfacht eine der herzlichsten Feindschaften der Filmgeschichte aufs Neue. ', 'DVD', '', '', '', '', '2021-11-11'),
(38, 'ABBA: Voyage', '618faa3a3483a.jpeg', '0602438614820', '40 Jahre haben die Fans auf die Rückkehr der schwedischen Pop-Visionäre gewartet - jetzt ist es soweit: ABBA sind zurück - nach vier Jahrzehnten! Mit \"Voyage\" präsentieren Agnetha, Björn, Benny und Anni-Frid ihr erstes neues Album seit \"The Visitors\" aus dem Jahr 1981. Angekündigt in einem globalen ', 'CD', '', '', '', '', '2021-11-05'),
(40, '=', '618faaab0156e.jpeg', '0190296549625', 'ED Sheeran', 'CD', '', '', '', '', '2021-10-29'),
(41, 'Parade', '618fab319c4b8.jpeg', '0075992539517', 'Prince', 'CD', '', '', '', '', '2016-09-02'),
(42, 'Peter Hase 2 ', '618faba871413.jpeg', '4030521756595', 'Der liebenswerte Schurke ist zurück. Bea, Thomas und die Kaninchen haben als Familie Frieden geschlossen, doch trotz seiner besten Bemühungen kann Peter seinen schelmischen Ruf nicht abschütteln. Auf seinen Abenteuern außerhalb des Gartens findet Peter sich auf den dunklen Straßen der Stadt wieder, ', 'DVD', '', '', '', '', '2021-10-14');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `biglibrary`
--
ALTER TABLE `biglibrary`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `biglibrary`
--
ALTER TABLE `biglibrary`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
