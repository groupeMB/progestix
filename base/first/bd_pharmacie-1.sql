-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Lun 26 Septembre 2016 à 20:27
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `bd_pharmacie`
--

-- --------------------------------------------------------

--
-- Structure de la table `achete`
--

CREATE TABLE IF NOT EXISTS `achete` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idproduit_id` int(11) DEFAULT NULL,
  `idclient_id` int(11) DEFAULT NULL,
  `date` date NOT NULL,
  `heure` int(11) NOT NULL,
  `montant` decimal(10,0) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_6AFD8FC3C29D63C1` (`idproduit_id`),
  KEY `IDX_6AFD8FC367F0C0D4` (`idclient_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE IF NOT EXISTS `categorie` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE IF NOT EXISTS `client` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `prenom` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `cin` varchar(90) COLLATE utf8_unicode_ci NOT NULL,
  `tel` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `mail` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE IF NOT EXISTS `commande` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idproduit_id` int(11) DEFAULT NULL,
  `idpharmacien_id` int(11) DEFAULT NULL,
  `idfournisseur_id` int(11) DEFAULT NULL,
  `quantite` int(11) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_6EEAA67DC29D63C1` (`idproduit_id`),
  KEY `IDX_6EEAA67DB6418165` (`idpharmacien_id`),
  KEY `IDX_6EEAA67D7674E434` (`idfournisseur_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `fournisseur`
--

CREATE TABLE IF NOT EXISTS `fournisseur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `prenom` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `adresse` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `tel` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `mail` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `pharmacien`
--

CREATE TABLE IF NOT EXISTS `pharmacien` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `prenom` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `statut` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `tel` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `mail` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE IF NOT EXISTS `produit` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `categorie_id` int(11) DEFAULT NULL,
  `libelle` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `codeBarre` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `prixUnitaire` decimal(10,0) NOT NULL,
  `datePeremption` date NOT NULL,
  `reference` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_E618D5BBBCF5E72D` (`categorie_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `produitvendu`
--

CREATE TABLE IF NOT EXISTS `produitvendu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idproduit_id` int(11) DEFAULT NULL,
  `quantite` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_6A830A89C29D63C1` (`idproduit_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `stock`
--

CREATE TABLE IF NOT EXISTS `stock` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `produit_id` int(11) DEFAULT NULL,
  `quantite` int(11) NOT NULL,
  `seuilMin` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_4B365660F347EFB` (`produit_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `typevente`
--

CREATE TABLE IF NOT EXISTS `typevente` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idachete_id` int(11) DEFAULT NULL,
  `typevente` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `pourcentage` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_2A09F5FF4A44E93` (`idachete_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `achete`
--
ALTER TABLE `achete`
  ADD CONSTRAINT `FK_6AFD8FC367F0C0D4` FOREIGN KEY (`idclient_id`) REFERENCES `client` (`id`),
  ADD CONSTRAINT `FK_6AFD8FC3C29D63C1` FOREIGN KEY (`idproduit_id`) REFERENCES `produit` (`id`);

--
-- Contraintes pour la table `commande`
--
ALTER TABLE `commande`
  ADD CONSTRAINT `FK_6EEAA67D7674E434` FOREIGN KEY (`idfournisseur_id`) REFERENCES `fournisseur` (`id`),
  ADD CONSTRAINT `FK_6EEAA67DB6418165` FOREIGN KEY (`idpharmacien_id`) REFERENCES `pharmacien` (`id`),
  ADD CONSTRAINT `FK_6EEAA67DC29D63C1` FOREIGN KEY (`idproduit_id`) REFERENCES `produit` (`id`);

--
-- Contraintes pour la table `produit`
--
ALTER TABLE `produit`
  ADD CONSTRAINT `FK_E618D5BBBCF5E72D` FOREIGN KEY (`categorie_id`) REFERENCES `categorie` (`id`);

--
-- Contraintes pour la table `produitvendu`
--
ALTER TABLE `produitvendu`
  ADD CONSTRAINT `FK_6A830A89C29D63C1` FOREIGN KEY (`idproduit_id`) REFERENCES `produit` (`id`);

--
-- Contraintes pour la table `stock`
--
ALTER TABLE `stock`
  ADD CONSTRAINT `FK_4B365660F347EFB` FOREIGN KEY (`produit_id`) REFERENCES `produit` (`id`);

--
-- Contraintes pour la table `typevente`
--
ALTER TABLE `typevente`
  ADD CONSTRAINT `FK_2A09F5FF4A44E93` FOREIGN KEY (`idachete_id`) REFERENCES `achete` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
