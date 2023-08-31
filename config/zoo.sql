-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : jeu. 31 août 2023 à 18:41
-- Version du serveur : 5.7.39
-- Version de PHP : 8.2.0

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

CREATE TABLE `animale` (
  `animale-id` int(11) NOT NULL,
  `getType` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `poids` varchar(255) NOT NULL,
  `age` varchar(255) NOT NULL,
  `faim` tinyint(1) NOT NULL,
  `dormir` tinyint(1) NOT NULL,
  `malade` tinyint(1) NOT NULL,
  `enclos_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `animale`
--

INSERT INTO `animale` (`animale-id`, `getType`, `nom`, `poids`, `age`, `faim`, `dormir`, `malade`, `enclos_id`) VALUES
(1, 'ours', 'bob', '200', '3', 1, 1, 1, 1),
(2, 'tigre', 'bob', '200', '3', 1, 1, 1, 2),
(3, 'tigre', 'bob', '200', '3', 1, 1, 1, 2),
(4, 'tigre', 'bob', '200', '3', 1, 1, 1, 2),
(5, 'poisson', 'bubul', '2', '1', 1, 1, 1, 3);

-- --------------------------------------------------------

--
-- Structure de la table `enclos`
--

CREATE TABLE `enclos` (
  `id` int(11) NOT NULL,
  `getType` varchar(255) NOT NULL,
  `largeur` varchar(255) NOT NULL,
  `longueur` varchar(255) NOT NULL,
  `images` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `enclos`
--

INSERT INTO `enclos` (`id`, `getType`, `largeur`, `longueur`, `images`) VALUES
(1, 'Ourse', '50', '50', 'uploads/Capture-d’écran-2023-08-20-à-14.01.42.jpg'),
(2, 'Tigres', '50', '50', 'uploads/paysage1.jpg');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `animale`
--
ALTER TABLE `animale`
  ADD PRIMARY KEY (`animale-id`);

--
-- Index pour la table `enclos`
--
ALTER TABLE `enclos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `animale`
--
ALTER TABLE `animale`
  MODIFY `animale-id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `enclos`
--
ALTER TABLE `enclos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
