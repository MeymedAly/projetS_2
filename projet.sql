-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 05 juil. 2021 à 14:17
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `projet`
--

-- --------------------------------------------------------

--
-- Structure de la table `batiment`
--

DROP TABLE IF EXISTS `batiment`;
CREATE TABLE IF NOT EXISTS `batiment` (
  `numeroBati` int(30) NOT NULL,
  PRIMARY KEY (`numeroBati`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `batiment`
--

INSERT INTO `batiment` (`numeroBati`) VALUES
(1),
(2),
(3),
(4),
(5);

-- --------------------------------------------------------

--
-- Structure de la table `docteur`
--

DROP TABLE IF EXISTS `docteur`;
CREATE TABLE IF NOT EXISTS `docteur` (
  `numeroD` varchar(40) NOT NULL,
  `nom` varchar(40) NOT NULL,
  `prenom` varchar(40) NOT NULL,
  `adresse` varchar(40) NOT NULL,
  `NumeroTele` int(10) NOT NULL,
  `specialite` varchar(40) NOT NULL,
  PRIMARY KEY (`numeroD`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `docteur`
--

INSERT INTO `docteur` (`numeroD`, `nom`, `prenom`, `adresse`, `NumeroTele`, `specialite`) VALUES
('10030', 'ali', 'sidi', 'nktt', 46578970, 'dii'),
('10609', 'mahmoud', 'med', 'nktt', 22125678, 'Dr.spp'),
('23909', 'maryem', 'ali', 'nktt', 36789065, 'Dr. Generale'),
('456890', 'niang', 'Saw', 'Kiffa', 37457890, 'Dr. Generale'),
('4567', 'meymed', 'sidi', '', 3456789, 'Dr. Generale'),
('256809', 'abdllahi', 'med', 'nema', 34567890, 'Dr. Generale'),
('4567889', 'mhamed', 'abdellahi', 'nktt', 34213456, 'Dr. Generale'),
('456', 'rahim', 'medrahim', 'nktt', 34342112, 'Dr. Generale');

-- --------------------------------------------------------

--
-- Structure de la table `hospitaliser`
--

DROP TABLE IF EXISTS `hospitaliser`;
CREATE TABLE IF NOT EXISTS `hospitaliser` (
  `numeroS` int(11) NOT NULL,
  `numeroM` int(11) NOT NULL,
  `numeroLit` int(11) NOT NULL,
  KEY `numeroM` (`numeroM`),
  KEY `numeroS` (`numeroS`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `infirmier`
--

DROP TABLE IF EXISTS `infirmier`;
CREATE TABLE IF NOT EXISTS `infirmier` (
  `numeroI` varchar(30) NOT NULL,
  `nom` varchar(40) NOT NULL,
  `prenom` varchar(40) NOT NULL,
  `adresse` varchar(40) NOT NULL,
  `numeroTele` int(10) NOT NULL,
  `rotation` varchar(40) NOT NULL,
  `salaire` double NOT NULL,
  `service` varchar(40) NOT NULL,
  PRIMARY KEY (`numeroI`),
  KEY `service` (`service`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `malade`
--

DROP TABLE IF EXISTS `malade`;
CREATE TABLE IF NOT EXISTS `malade` (
  `numeroM` varchar(40) NOT NULL,
  `nom` varchar(40) NOT NULL,
  `prenom` varchar(40) NOT NULL,
  `adresse` varchar(40) NOT NULL,
  `numeroTele` int(10) NOT NULL,
  `diagnostic` varchar(200) NOT NULL,
  PRIMARY KEY (`numeroM`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `salle`
--

DROP TABLE IF EXISTS `salle`;
CREATE TABLE IF NOT EXISTS `salle` (
  `numeroS` int(10) NOT NULL,
  `nombreLits` int(10) NOT NULL,
  `service` varchar(40) NOT NULL,
  PRIMARY KEY (`numeroS`),
  KEY `service` (`service`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `salle`
--

INSERT INTO `salle` (`numeroS`, `nombreLits`, `service`) VALUES
(23, 5, 'urgence'),
(3, 5, 'maternitaire');

-- --------------------------------------------------------

--
-- Structure de la table `service`
--

DROP TABLE IF EXISTS `service`;
CREATE TABLE IF NOT EXISTS `service` (
  `code` varchar(30) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `batiment` varchar(30) NOT NULL,
  `directeur` varchar(40) NOT NULL,
  PRIMARY KEY (`code`),
  KEY `directeur` (`directeur`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `service`
--

INSERT INTO `service` (`code`, `nom`, `batiment`, `directeur`) VALUES
('3456', 'maternitaire', '3', 'maryem'),
('34556', 'urgence', '3', 'ali'),
('4567', 'urins', '4', 'niang');

-- --------------------------------------------------------

--
-- Structure de la table `soigner`
--

DROP TABLE IF EXISTS `soigner`;
CREATE TABLE IF NOT EXISTS `soigner` (
  `numeroD` varchar(40) NOT NULL,
  `numeroM` varchar(40) NOT NULL,
  KEY `numeroM` (`numeroM`),
  KEY `numeroD` (`numeroD`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `surveiller`
--

DROP TABLE IF EXISTS `surveiller`;
CREATE TABLE IF NOT EXISTS `surveiller` (
  `numeroI` varchar(40) NOT NULL,
  `numeroS` varchar(30) NOT NULL,
  KEY `numeroI` (`numeroI`),
  KEY `numeroS` (`numeroS`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `nom`, `email`, `password`) VALUES
(9, 'mds', 'mds@gmail.com', '1234567890'),
(8, 'sid', 'meymedinfo@gmail.com', '1234567890'),
(10, 'med', 'smdd@gmail.com', '1234567890');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
