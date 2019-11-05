-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le :  mar. 05 nov. 2019 à 09:04
-- Version du serveur :  10.3.16-MariaDB
-- Version de PHP :  7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `id11454614_concoursblackfriday`
--

-- --------------------------------------------------------

--
-- Structure de la table `BlackFriday2019`
--

CREATE TABLE `BlackFriday2019` (
  `Id` int(11) NOT NULL,
  `Nom` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Prenom` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `NumTelephone` int(10) DEFAULT NULL,
  `NumeroRue` int(10) DEFAULT NULL,
  `Adresse` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `CodePostal` int(5) DEFAULT NULL,
  `Ville` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Civilite` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Proprietaire` tinyint(1) DEFAULT NULL,
  `Newsletter` tinyint(1) DEFAULT NULL,
  `OffrePartenaire` tinyint(1) DEFAULT NULL,
  `AccepteCG` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `BlackFriday2019`
--

INSERT INTO `BlackFriday2019` (`Id`, `Nom`, `Prenom`, `Email`, `NumTelephone`, `NumeroRue`, `Adresse`, `CodePostal`, `Ville`, `Civilite`, `Proprietaire`, `Newsletter`, `OffrePartenaire`, `AccepteCG`) VALUES
(1, 'fff', 'fff', 'fffff@ffff', NULL, NULL, NULL, NULL, NULL, 'Monsieur', NULL, NULL, NULL, NULL),
(2, 'landes', 'tom', 't.landes84@gmail.com', NULL, NULL, NULL, NULL, NULL, 'Monsieur', NULL, NULL, NULL, NULL),
(3, 'sdfsf', 'fs', 'sdfsdfd@gjgjg', 10000, 112, 'fghgfhfgh', 84753, 'fghdfghggfhgh', 'Monsieur', 1, 0, 1, 0),
(4, 'sdfsf', 'fs', 'sdfsdfd@gjgjg', 10000, 112, 'fghgfhfgh', 84753, 'fghdfghggfhgh', 'Monsieur', 1, 0, 1, 0),
(5, 'sdfsf', 'fs', 'sdfsdfd@gjgjg', 10000, 112, 'fghgfhfgh', 84753, 'fghdfghggfhgh', 'Monsieur', 1, 0, 1, 0),
(6, 'sdfsdf', 'dsfsdfsd', 'sdfsdfsds@jhkjhk', 101010000, 14, '141', 41, '411', 'Monsieur', 1, 1, 1, 1),
(7, 'az', 'az', 't.landes84@gmail.com', 11414, 10100, '101', 10101, 'veotoux', 'Monsieur', 1, 1, 1, 1),
(8, '', '', 't.landes84@gmail.com', 11414, 10100, '101', 10101, 'veotoux', 'Monsieur', 1, 1, 1, 1),
(9, 'Bullich', 'Laurie', 'laurie.bullich@gmail.com', 761423203, 13, 'rue Jean Jaurès', 11100, 'Narbonne', 'Madame', 1, 1, 0, 1),
(10, 'Bullich', 'Laurie', 'laurie.bullich@gmail.com', 761423203, 13, 'rue Jean Jaurès', 11100, 'Narbonne', 'Madame', 1, 1, 0, 1),
(11, 'Bullich', 'Laurie', 'laurie.bullich@gmail.com', 761423203, 13, 'rue Jean jaurès', 11100, 'Narbonne', 'Madame', 1, 0, 1, 1),
(12, 'Je', 'Tom', 'tffff@ddjdj', 9988, 4, 'Nfjjddk', 988, 'Cfff', 'Monsieur', 0, 0, 0, 1),
(13, 'Azer', 'Tom', 'f@f', 0, 12, 'Fkfkfk', 98888, 'Ffff', 'Monsieur', 1, 0, 0, 1),
(14, 'erzr', 'zerzer', 'rezre@dsff', 1010100000, 10, 'gfhfghgfh', 1111, 'hgjhgjhg', 'Monsieur', 0, 0, 0, 1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `BlackFriday2019`
--
ALTER TABLE `BlackFriday2019`
  ADD KEY `Id` (`Id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `BlackFriday2019`
--
ALTER TABLE `BlackFriday2019`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
