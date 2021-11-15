-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 15 nov. 2021 à 15:34
-- Version du serveur :  8.0.21
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `photoforyou2`
--

-- --------------------------------------------------------

--
-- Structure de la table `photoavendre`
--

DROP TABLE IF EXISTS `photoavendre`;
CREATE TABLE IF NOT EXISTS `photoavendre` (
  `id` int NOT NULL AUTO_INCREMENT,
  `ventephoto` varchar(50) NOT NULL,
  `nomphoto` varchar(50) NOT NULL,
  `descriptionphoto` varchar(100) NOT NULL,
  `prixphoto` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `photoavendre`
--

INSERT INTO `photoavendre` (`id`, `ventephoto`, `nomphoto`, `descriptionphoto`, `prixphoto`) VALUES
(1, 'Moynard.png', 'Clement Moynard', 'Un magnifique spécimen', 3),
(4, 'Hamidat.png', 'FC HAMIDAT', 'Le maillot officiel du FC Hamidat', 10);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `Nom` varchar(50) NOT NULL,
  `Prenom` varchar(50) NOT NULL,
  `Type` varchar(50) NOT NULL,
  `Mail` varchar(50) NOT NULL,
  `Mdp` varchar(50) NOT NULL,
  `Credit` varchar(50) NOT NULL,
  `Photo` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `Nom`, `Prenom`, `Type`, `Mail`, `Mdp`, `Credit`, `Photo`) VALUES
(4, 'Evin', 'Baptiste', 'Client', 'baptiste.evin@gmail.com', 'ab4f63f9ac65152575886860dde480a1', '10', 'Hamidat.png'),
(5, 'Moynard', 'Clement', 'Photographe', 'clement@gmail.com', 'ab4f63f9ac65152575886860dde480a1', '0', 'Moynard.png'),
(6, 'Durand', 'Clement', 'Photographe', 'baptiste.evin@gmail.com', '04fa28f1f677681d3926ee07083c372d', '0', 'evenements.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
