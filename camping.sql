-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 08 avr. 2020 à 12:01
-- Version du serveur :  5.7.26
-- Version de PHP :  7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `camping`
--

-- --------------------------------------------------------

--
-- Structure de la table `emplacements`
--

DROP TABLE IF EXISTS `emplacements`;
CREATE TABLE IF NOT EXISTS `emplacements` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf16le;

--
-- Déchargement des données de la table `emplacements`
--

INSERT INTO `emplacements` (`id`, `Nom`) VALUES
(1, 'La Plage'),
(2, 'Les Pins'),
(3, 'Le Maquis');

-- --------------------------------------------------------

--
-- Structure de la table `reservations`
--

DROP TABLE IF EXISTS `reservations`;
CREATE TABLE IF NOT EXISTS `reservations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date_debut` date NOT NULL,
  `date_fin` date NOT NULL,
  `type` int(11) NOT NULL,
  `borne` tinyint(1) NOT NULL,
  `disco` tinyint(1) NOT NULL,
  `pack` tinyint(1) NOT NULL,
  `id_emplacement` int(11) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `utilisateur` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf16le;

--
-- Déchargement des données de la table `reservations`
--

INSERT INTO `reservations` (`id`, `date_debut`, `date_fin`, `type`, `borne`, `disco`, `pack`, `id_emplacement`, `nom`, `utilisateur`) VALUES
(1, '2020-04-07', '2020-04-14', 2, 1, 1, 1, 2, 'TEST', 'test');

-- --------------------------------------------------------

--
-- Structure de la table `tarifs`
--

DROP TABLE IF EXISTS `tarifs`;
CREATE TABLE IF NOT EXISTS `tarifs` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prix` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf16le;

--
-- Déchargement des données de la table `tarifs`
--

INSERT INTO `tarifs` (`id`, `nom`, `prix`) VALUES
(1, 'Bornes', 2),
(2, 'Disco', 10),
(3, 'Pack_Activites', 20);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

DROP TABLE IF EXISTS `utilisateurs`;
CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL DEFAULT 'utilisateur',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf16le;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `login`, `password`, `type`) VALUES
(1, 'test', '$2y$12$LXkTm1mCGiQDXI7BKSKBg.ZN.xv/QXxA93NeI7eMxtUCUYjm566aG', 'utilisateur'),
(3, 'admin', '$2y$12$6PXIEOzAwO/JaW.lfJsQyuXBsBTD5M0DvUyrCUEz9rerSSulImBT6', 'admin');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
