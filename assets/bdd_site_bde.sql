-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 18 nov. 2019 à 23:06
-- Version du serveur :  5.7.24
-- Version de PHP :  7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `bdd_site_bde`
--
CREATE DATABASE IF NOT EXISTS `bdd_site_bde` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `bdd_site_bde`;

-- --------------------------------------------------------

--
-- Structure de la table `carousel`
--

DROP TABLE IF EXISTS `carousel`;
CREATE TABLE IF NOT EXISTS `carousel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom_produit` varchar(200) COLLATE utf8_bin DEFAULT NULL,
  `image_url` varchar(200) COLLATE utf8_bin DEFAULT 'assets/images/top1.png',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=991 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `carousel`
--

INSERT INTO `carousel` (`id`, `nom_produit`, `image_url`) VALUES
(988, 'Tasse REIMS ESPORT', 'assets/images/tasse.png'),
(989, 'Sweat CESI REIMS', 'assets/images/sweat.png'),
(990, 'USB CESI REIMS', 'assets/images/usb.png');

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

DROP TABLE IF EXISTS `commande`;
CREATE TABLE IF NOT EXISTS `commande` (
  `Id` int(255) NOT NULL AUTO_INCREMENT,
  `Id_goodie_vetements` int(255) DEFAULT NULL,
  `Id_evenement` int(255) DEFAULT NULL,
  `Id_user` int(255) DEFAULT NULL,
  `Quantite` int(255) DEFAULT NULL,
  `Designation` varchar(500) COLLATE utf8_bin DEFAULT NULL,
  `Link` varchar(500) COLLATE utf8_bin DEFAULT NULL,
  `nom` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `prenom` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `email` varchar(200) COLLATE utf8_bin DEFAULT NULL,
  `prix` int(250) DEFAULT NULL,
  `Ville` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`Id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `commande`
--

INSERT INTO `commande` (`Id`, `Id_goodie_vetements`, `Id_evenement`, `Id_user`, `Quantite`, `Designation`, `Link`, `nom`, `prenom`, `email`, `prix`, `Ville`) VALUES
(1, 1, NULL, 7, 3, 'Sweat CESI REIMS', 'assets/images/sweat.png', NULL, NULL, NULL, NULL, 'Reims'),
(15, 3, NULL, 7, 6, 'Tasse REIMS ESPORT', 'assets/images/tasse.png', NULL, NULL, NULL, NULL, 'Reims'),
(3, 4, NULL, 7, 1, 'USB CESI REIMS', 'assets/images/usb.png', NULL, NULL, NULL, NULL, 'Reims'),
(4, 4, NULL, 7, 1, 'USB CESI REIMS', 'assets/images/usb.png', NULL, NULL, NULL, NULL, 'Reims'),
(6, 1, NULL, 7, 1, 'Sweat CESI REIMS', 'assets/images/sweat.png', NULL, NULL, NULL, NULL, 'Reims'),
(8, 1, NULL, 7, 1, 'Sweat CESI REIMS', 'assets/images/sweat.png', NULL, NULL, NULL, NULL, 'Reims'),
(10, 5, NULL, 16, 1, 'Sweat PARIS', 'assets/images/sweatgris.png', NULL, NULL, NULL, NULL, 'Paris'),
(11, 6, NULL, 16, 1, 'Tasse PSG', 'assets/images/tassepsg.png', NULL, NULL, NULL, NULL, 'Paris'),
(12, 11, NULL, 16, 1, 'Polo PARIS', 'assets/images/polobleu.png', NULL, NULL, NULL, NULL, 'Paris');

-- --------------------------------------------------------

--
-- Structure de la table `commentaires`
--

DROP TABLE IF EXISTS `commentaires`;
CREATE TABLE IF NOT EXISTS `commentaires` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_post` int(11) NOT NULL,
  `nom` varchar(200) COLLATE utf8_bin DEFAULT NULL,
  `prenom` varchar(200) COLLATE utf8_bin DEFAULT NULL,
  `commentaire` text COLLATE utf8_bin,
  `flag` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `commentaires`
--

INSERT INTO `commentaires` (`id`, `id_post`, `nom`, `prenom`, `commentaire`, `flag`) VALUES
(1, 10, 'OUBAYA', 'Amine', 'oui on est fort', 0),
(2, 10, 'OUBAYA', 'Amine', 'salut', 1),
(3, 10, 'OUBAYA', 'Amine', 'heeeey', 1);

-- --------------------------------------------------------

--
-- Structure de la table `evenement`
--

DROP TABLE IF EXISTS `evenement`;
CREATE TABLE IF NOT EXISTS `evenement` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Designation` varchar(250) COLLATE utf8_bin DEFAULT NULL,
  `Date_prv` date NOT NULL,
  `Images` varchar(50) COLLATE utf8_bin NOT NULL,
  `Ville` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `Prix` int(10) DEFAULT NULL,
  `flag` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `evenement`
--

INSERT INTO `evenement` (`ID`, `Designation`, `Date_prv`, `Images`, `Ville`, `Prix`, `flag`) VALUES
(1, 'Bowling', '2019-11-01', 'assets/images/bowling.png', 'Reims', 11, 0),
(3, 'Laser game', '2019-12-12', 'assets/images/lasergame.png', 'Reims', 10, 1),
(5, 'Lancer de Haches', '2019-12-04', 'assets/images/lancer_haches.jpg', 'Reims', 14, 0),
(6, 'Paint Ball', '2020-01-01', 'assets/images/paintball.jpg', 'Reims', 18, 0),
(7, 'Bowling', '2019-11-01', 'assets/images/bowling.png', 'Paris', 11, 0),
(8, 'Laser game', '2019-12-12', 'assets/images/lasergame.png', 'Paris', 10, 0),
(9, 'Lancer de Haches', '2019-12-04', 'assets/images/lancer_haches.jpg', 'Paris', 14, 0),
(10, 'Paint Ball', '2020-01-01', 'assets/images/paintball.jpg', 'Paris', 18, 0),
(11, 'Bowling', '2019-11-01', 'assets/images/bowling.png', 'Strasbourg', 11, 0),
(12, 'Laser game', '2019-12-12', 'assets/images/lasergame.png', 'Strasbourg', 10, 0),
(13, 'Lancer de Haches', '2019-12-04', 'assets/images/lancer_haches.jpg', 'Strasbourg', 14, 0),
(14, 'Paint Ball', '2020-01-01', 'assets/images/paintball.jpg', 'Strasbourg', 18, 0),
(15, 'Soirée LAN', '2019-10-02', 'assets/images/gaming.jpg', 'Reims', 1, 0),
(16, 'Soirée LAN', '2019-10-02', 'assets/images/gaming.jpg', 'Paris', 1, 0),
(17, 'Soirée LAN', '2019-10-02', 'assets/images/gaming.jpg', 'Strasbourg', 1, 0);

-- --------------------------------------------------------

--
-- Structure de la table `goodie_vetements`
--

DROP TABLE IF EXISTS `goodie_vetements`;
CREATE TABLE IF NOT EXISTS `goodie_vetements` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Designation` varchar(250) COLLATE utf8_bin DEFAULT NULL,
  `Prix` int(50) DEFAULT NULL,
  `Taille` char(5) COLLATE utf8_bin DEFAULT NULL,
  `Ville` varchar(500) COLLATE utf8_bin DEFAULT NULL,
  `Link` varchar(500) COLLATE utf8_bin DEFAULT NULL,
  `Categorie` varchar(500) COLLATE utf8_bin DEFAULT NULL,
  `Quantite` int(100) NOT NULL DEFAULT '1',
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `goodie_vetements`
--

INSERT INTO `goodie_vetements` (`Id`, `Designation`, `Prix`, `Taille`, `Ville`, `Link`, `Categorie`, `Quantite`) VALUES
(1, 'Sweat CESI REIMS', 50, 'S', 'Reims', 'assets/images/sweat.png', 'Sweat', 1),
(3, 'Tasse REIMS ESPORT', 50, 'S', 'Reims', 'assets/images/tasse.png', 'Tasse', 1),
(4, 'USB CESI REIMS', 40, 'M', 'Reims', 'assets/images/usb.png', 'USB', 1),
(5, 'Sweat PARIS', 50, 'S', 'Paris', 'assets/images/sweatgris.png', 'Sweat', 1),
(6, 'Tasse PSG', 50, 'S', 'Paris', 'assets/images/tassepsg.png', 'Tasse', 1),
(7, 'USB CESI PARIS', 40, 'M', 'Paris', 'assets/images/usb.png', 'USB', 1),
(8, 'Sweat CESI STRASBOURG', 50, 'S', 'Strasbourg', 'assets/images/sweatgris.png', 'Sweat', 1),
(9, 'Tasse CESI ', 50, 'S', 'Strasbourg', 'assets/images/tassestr.png', 'Tasse', 1),
(10, 'USB CESI STRASBOURG', 40, 'M', 'Strasbourg', 'assets/images/usb.png', 'USB', 1),
(11, 'Polo PARIS', 30, 'S', 'Paris', 'assets/images/polobleu.png', 'Polo', 1),
(12, 'Polo CESI REIMS', 30, 'S', 'Reims', 'assets/images/poloviolet.png', 'Polo', 1);

-- --------------------------------------------------------

--
-- Structure de la table `inscritevent`
--

DROP TABLE IF EXISTS `inscritevent`;
CREATE TABLE IF NOT EXISTS `inscritevent` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) DEFAULT NULL,
  `nom` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `prenom` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `email` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `id_evenement` int(11) DEFAULT NULL,
  `designation` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `prix` int(11) DEFAULT NULL,
  `Images` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `inscritevent`
--

INSERT INTO `inscritevent` (`id`, `id_user`, `nom`, `prenom`, `email`, `id_evenement`, `designation`, `prix`, `Images`) VALUES
(11, 7, 'Doe', 'Jane', 'salut@toto.fr', 1, 'Bowling', 13, 'assets/images/bowling.png'),
(3, 7, 'toto', 'toto', 'salut@toto.fr', 3, 'Laser game', 50, 'assets/images/lasergame.png'),
(13, 7, 'Doe', 'Jane', 'salut@toto.fr', 6, 'Paint Ball', 18, 'assets/images/paintball.jpg'),
(14, 7, 'Doe', 'Jane', 'salut@toto.fr', 6, 'Paint Ball', 18, 'assets/images/paintball.jpg'),
(15, 7, 'Doe', 'Jane', 'salut@toto.fr', 6, 'Paint Ball', 18, 'assets/images/paintball.jpg'),
(21, 7, 'Doe', 'Jane', 'salut@toto.fr', 6, 'Paint Ball', 18, 'assets/images/paintball.jpg'),
(17, 19, 'BDE', 'Mik', 'bdestras@toto.fr', 13, 'Lancer de Haches', 14, 'assets/images/lancer_haches.jpg'),
(20, 7, 'Doe', 'Jane', 'salut@toto.fr', 3, 'Laser game', 10, 'assets/images/lasergame.png'),
(19, 19, 'BDE', 'Mik', 'bdestras@toto.fr', 13, 'Lancer de Haches', 14, 'assets/images/lancer_haches.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `likes`
--

DROP TABLE IF EXISTS `likes`;
CREATE TABLE IF NOT EXISTS `likes` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `id_post` int(255) NOT NULL,
  `id_user` int(255) NOT NULL,
  `likes` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `likes`
--

INSERT INTO `likes` (`id`, `id_post`, `id_user`, `likes`) VALUES
(4, 9, 9, 1),
(3, 1, 9, 0),
(5, 9, 7, 1),
(6, 5, 7, 1),
(7, 7, 7, 1),
(8, 8, 7, 1),
(9, 6, 7, 0),
(10, 8, 9, 1),
(11, 10, 7, 1);

-- --------------------------------------------------------

--
-- Structure de la table `panier`
--

DROP TABLE IF EXISTS `panier`;
CREATE TABLE IF NOT EXISTS `panier` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Designation` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `Prix` int(100) DEFAULT NULL,
  `Link` varchar(500) COLLATE utf8_bin DEFAULT NULL,
  `Id_user` int(100) DEFAULT NULL,
  `Quantite` int(100) DEFAULT NULL,
  `Id_prod` int(100) DEFAULT NULL,
  `Taille` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `Id_evnt` int(100) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=260 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `post`
--

DROP TABLE IF EXISTS `post`;
CREATE TABLE IF NOT EXISTS `post` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_users` int(100) DEFAULT NULL,
  `nom` varchar(200) COLLATE utf8_bin DEFAULT NULL,
  `prenom` varchar(200) COLLATE utf8_bin DEFAULT NULL,
  `Ville` varchar(200) COLLATE utf8_bin DEFAULT NULL,
  `nom_evenement` varchar(200) COLLATE utf8_bin DEFAULT NULL,
  `message` varchar(200) COLLATE utf8_bin DEFAULT NULL,
  `images` varchar(200) COLLATE utf8_bin DEFAULT NULL,
  `nb_likes` int(255) DEFAULT '0',
  `flag` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `publication_media`
--

DROP TABLE IF EXISTS `publication_media`;
CREATE TABLE IF NOT EXISTS `publication_media` (
  `ID_Evenement_archive` int(11) NOT NULL,
  `Id` int(11) NOT NULL,
  `Likes` int(11) NOT NULL,
  `Commentaires` varchar(2) COLLATE utf8_bin NOT NULL,
  `Designation` varchar(5) COLLATE utf8_bin NOT NULL,
  `Id_PersonnelCESI` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID_Evenement_archive`,`Id`),
  UNIQUE KEY `Publication_Media_PersonnelCESI0_AK` (`Id_PersonnelCESI`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `quantites`
--

DROP TABLE IF EXISTS `quantites`;
CREATE TABLE IF NOT EXISTS `quantites` (
  `Id_goodie_vetements` int(255) DEFAULT NULL,
  `Quantite` int(255) DEFAULT NULL,
  `Designation` varchar(500) COLLATE utf8_bin DEFAULT NULL,
  `Link` varchar(500) COLLATE utf8_bin DEFAULT NULL,
  `Ville` varchar(100) COLLATE utf8_bin DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `quantites`
--

INSERT INTO `quantites` (`Id_goodie_vetements`, `Quantite`, `Designation`, `Link`, `Ville`) VALUES
(3, 6, 'Tasse REIMS ESPORT', 'assets/images/tasse.png', 'Reims'),
(1, 5, 'Sweat CESI REIMS', 'assets/images/sweat.png', 'Reims'),
(4, 2, 'USB CESI REIMS', 'assets/images/usb.png', 'Reims'),
(5, 1, 'Sweat PARIS', 'assets/images/sweatgris.png', 'Paris'),
(6, 1, 'Tasse PSG', 'assets/images/tassepsg.png', 'Paris'),
(11, 1, 'Polo PARIS', 'assets/images/polobleu.png', 'Paris');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Email` varchar(150) COLLATE utf8_bin DEFAULT NULL,
  `Mdp` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `Status` int(10) NOT NULL DEFAULT '1',
  `Nom` char(255) COLLATE utf8_bin DEFAULT NULL,
  `Prenom` char(255) COLLATE utf8_bin DEFAULT NULL,
  `Ville` char(200) COLLATE utf8_bin DEFAULT NULL,
  `Sexe` text COLLATE utf8_bin,
  `Telephone` varchar(10) COLLATE utf8_bin DEFAULT NULL,
  `online` varchar(10) COLLATE utf8_bin DEFAULT '0',
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`Id`, `Email`, `Mdp`, `Status`, `Nom`, `Prenom`, `Ville`, `Sexe`, `Telephone`, `online`) VALUES
(7, 'salut@toto.fr', 'salut123', 1, 'Doe', 'Jane', 'Reims', 'Male', '0659365842', '1'),
(9, 'perso@toto.fr', 'perso', 3, 'Personnel', 'Mik', 'Reims', 'Male', '0635268457', '0'),
(10, 'bde@toto.fr', 'bde', 2, 'BDE', 'Mik', 'Reims', 'Male', '0635268457', '0'),
(14, 'salutparis@toto.fr', 'salut123', 1, 'Doe', 'Jane', 'Paris', 'Male', '0659365842', '0'),
(15, 'persoparis@toto.fr', 'perso', 3, 'Personnel', 'Mik', 'Paris', 'Male', '0635268457', '0'),
(16, 'bdeparis@toto.fr', 'bde', 2, 'BDE', 'Mik', 'Paris', 'Male', '0635268457', '0'),
(17, 'salutstras@toto.fr', 'salut123', 1, 'Doe', 'Jane', 'Strasbourg', 'Male', '0659365842', '0'),
(18, 'persostras@toto.fr', 'perso', 3, 'Personnel', 'Mik', 'Strasbourg', 'Male', '0635268457', '0'),
(19, 'bdestras@toto.fr', 'bde', 2, 'BDE', 'Mik', 'Strasbourg', 'Male', '0635268457', '0');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `publication_media`
--
ALTER TABLE `publication_media`
  ADD CONSTRAINT `Publication_Media_Evenement_archive0_FK` FOREIGN KEY (`ID_Evenement_archive`) REFERENCES `evenement_archive` (`ID`),
  ADD CONSTRAINT `Publication_Media_PersonnelCESI1_FK` FOREIGN KEY (`Id_PersonnelCESI`) REFERENCES `personnelcesi` (`Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
