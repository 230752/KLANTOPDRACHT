-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2024 at 01:50 PM
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
-- Database: `tuinman_hendrik`
--

-- --------------------------------------------------------

--
-- Table structure for table `opdrachten`
--

CREATE TABLE `opdrachten` (
  `id` int(11) NOT NULL,
  `datum` datetime NOT NULL,
  `voornaam` varchar(255) NOT NULL,
  `achternaam` varchar(255) NOT NULL,
  `adres` varchar(255) NOT NULL,
  `telefoonnummer` int(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `opmerking` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `recensies`
--

CREATE TABLE `recensies` (
  `id` int(11) NOT NULL,
  `datum` datetime NOT NULL,
  `naam` varchar(255) NOT NULL,
  `bericht` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `recensies`
--

INSERT INTO `recensies` (`id`, `datum`, `naam`, `bericht`) VALUES
(4, '2023-04-01 23:00:00', 'Hella Hoes', 'Heel erg bedankt voor de efficiënte service, je was heel snel klaar en ik zal je nummer zeker behouden om je weer te gebruiken.'),
(5, '2022-04-02 12:23:44', 'Henk Haak', 'Ga alsjeblieft door met de bezoeken aan het huis van mijn vader, want je doet geweldig werk!'),
(6, '2020-04-03 09:11:00', 'Hans Hogendijk', 'Zoals u weet ben ik altijd tevreden geweest met de service die u de afgelopen jaren heeft verleend. Vertel me alstublieft wanneer u klaar bent om volgend jaar weer te beginnen met het maaien van mijn gazons, aangezien ik graag uw diensten wil blijven ontv'),
(7, '2022-04-04 17:28:22', 'Hugo van Heren', 'Bedankt voor de grondige opruimbeurt die u aan mijn tuin heeft uitgevoerd. De tuin is er enorm van opgeknapt en weer bruikbaar gemaakt. Nogmaals bedankt.'),
(8, '2021-04-05 15:33:54', 'Helga Hagel', 'Mijn tuin was een mijn jungle voor en achter. Ik ben zo blij met het resultaat; u heeft zo hard gewerkt en alles mooi en netjes achtergelaten. Aarzel niet om mijn opmerkingen te gebruiken in toekomstige advertenties. Nogmaals bedankt voor al je harde werk'),
(9, '2023-04-06 10:32:31', 'Hopke Havermout-Hoeksteen', 'We zijn erg blij met ons nieuwe dak van de schuur en het andere werk dat tot een zeer hoge standaard is voltooid. Heel erg bedankt voor uw medewerking!');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `opdrachten`
--
ALTER TABLE `opdrachten`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `recensies`
--
ALTER TABLE `recensies`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `opdrachten`
--
ALTER TABLE `opdrachten`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `recensies`
--
ALTER TABLE `recensies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
