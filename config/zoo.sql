-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 31 août 2023 à 13:52
-- Version du serveur : 8.0.31
-- Version de PHP : 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `zoo`
--

-- --------------------------------------------------------

--
-- Structure de la table `animale`
--

DROP TABLE IF EXISTS `animale`;
CREATE TABLE IF NOT EXISTS `animale` (
  `animale_id` int NOT NULL AUTO_INCREMENT,
  `getType` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `poids` varchar(255) NOT NULL,
  `age` varchar(255) NOT NULL,
  `faim` tinyint(1) NOT NULL,
  `dormir` tinyint(1) NOT NULL,
  `malade` tinyint(1) NOT NULL,
  `enclos_id` int NOT NULL,
  PRIMARY KEY (`animale_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `animale`
--

INSERT INTO `animale` (`animale_id`, `getType`, `nom`, `poids`, `age`, `faim`, `dormir`, `malade`, `enclos_id`) VALUES
(1, 'ours', 'roger', '150', '2', 0, 0, 0, 1),
(2, 'tigre', 'bernard', '200', '3', 0, 0, 0, 2),
(3, 'poisson', 'bob', '1', '2', 0, 0, 0, 3);

-- --------------------------------------------------------

--
-- Structure de la table `enclos`
--

DROP TABLE IF EXISTS `enclos`;
CREATE TABLE IF NOT EXISTS `enclos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `getType` varchar(255) NOT NULL,
  `largeur` varchar(255) NOT NULL,
  `longueur` varchar(255) NOT NULL,
  `images` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `enclos`
--

INSERT INTO `enclos` (`id`, `getType`, `largeur`, `longueur`, `images`) VALUES
(1, 'Ours', '50', '50', 'uploads/ours.jpg'),
(2, 'Tigres', '50', '50', 'uploads/tigre.jpg'),
(3, 'Aquarium', '50', '100', 'uploads/aquarium.jpg'),
(4, 'Volière', '50', '50', 'uploads/voliere.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
