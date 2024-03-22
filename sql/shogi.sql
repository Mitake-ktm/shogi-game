-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : ven. 22 mars 2024 à 13:35
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
-- Base de données : `shogi`
--

-- --------------------------------------------------------

--
-- Structure de la table `caseplateau`
--

DROP TABLE IF EXISTS `caseplateau`;
CREATE TABLE IF NOT EXISTS `caseplateau` (
  `idCase` int NOT NULL AUTO_INCREMENT,
  `idGame` int NOT NULL,
  `piece` varchar(32) NOT NULL,
  `proprio` int NOT NULL,
  PRIMARY KEY (`idCase`),
  KEY `idGame` (`idGame`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `game`
--

DROP TABLE IF EXISTS `game`;
CREATE TABLE IF NOT EXISTS `game` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `idJoueur1` int NOT NULL,
  `idJoueur2` int NOT NULL,
  `codeGame` int NOT NULL,
  `aqui` int NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `idJoueur1` (`idJoueur1`,`idJoueur2`),
  KEY `idJoueur2` (`idJoueur2`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `parachute`
--

DROP TABLE IF EXISTS `parachute`;
CREATE TABLE IF NOT EXISTS `parachute` (
  `idParachute` int NOT NULL AUTO_INCREMENT,
  `idJoueurProprio` int NOT NULL,
  `idGame` int NOT NULL,
  `piece` varchar(32) NOT NULL,
  PRIMARY KEY (`idParachute`),
  KEY `idJoueurProprio` (`idJoueurProprio`,`idGame`),
  KEY `idGame` (`idGame`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(64) NOT NULL,
  `mdp` varchar(64) NOT NULL,
  `score` int NOT NULL,
  `mail` varchar(128) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `caseplateau`
--
ALTER TABLE `caseplateau`
  ADD CONSTRAINT `caseplateau_ibfk_1` FOREIGN KEY (`idGame`) REFERENCES `game` (`ID`) ON DELETE CASCADE;

--
-- Contraintes pour la table `game`
--
ALTER TABLE `game`
  ADD CONSTRAINT `game_ibfk_1` FOREIGN KEY (`idJoueur1`) REFERENCES `user` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `game_ibfk_2` FOREIGN KEY (`idJoueur2`) REFERENCES `user` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `parachute`
--
ALTER TABLE `parachute`
  ADD CONSTRAINT `parachute_ibfk_1` FOREIGN KEY (`idGame`) REFERENCES `game` (`ID`) ON DELETE CASCADE;

--
-- Contraintes pour la table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`id`) REFERENCES `parachute` (`idJoueurProprio`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
