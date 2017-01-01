-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 09, 2016 at 06:22 PM
-- Server version: 5.6.30-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pharmages`
--

-- --------------------------------------------------------

--
-- Table structure for table `achete`
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
-- Table structure for table `acl_classes`
--

CREATE TABLE IF NOT EXISTS `acl_classes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `class_type` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_69DD750638A36066` (`class_type`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `acl_entries`
--

CREATE TABLE IF NOT EXISTS `acl_entries` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `class_id` int(10) unsigned NOT NULL,
  `object_identity_id` int(10) unsigned DEFAULT NULL,
  `security_identity_id` int(10) unsigned NOT NULL,
  `field_name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ace_order` smallint(5) unsigned NOT NULL,
  `mask` int(11) NOT NULL,
  `granting` tinyint(1) NOT NULL,
  `granting_strategy` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `audit_success` tinyint(1) NOT NULL,
  `audit_failure` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_46C8B806EA000B103D9AB4A64DEF17BCE4289BF4` (`class_id`,`object_identity_id`,`field_name`,`ace_order`),
  KEY `IDX_46C8B806EA000B103D9AB4A6DF9183C9` (`class_id`,`object_identity_id`,`security_identity_id`),
  KEY `IDX_46C8B806EA000B10` (`class_id`),
  KEY `IDX_46C8B8063D9AB4A6` (`object_identity_id`),
  KEY `IDX_46C8B806DF9183C9` (`security_identity_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `acl_object_identities`
--

CREATE TABLE IF NOT EXISTS `acl_object_identities` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `parent_object_identity_id` int(10) unsigned DEFAULT NULL,
  `class_id` int(10) unsigned NOT NULL,
  `object_identifier` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `entries_inheriting` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_9407E5494B12AD6EA000B10` (`object_identifier`,`class_id`),
  KEY `IDX_9407E54977FA751A` (`parent_object_identity_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `acl_object_identity_ancestors`
--

CREATE TABLE IF NOT EXISTS `acl_object_identity_ancestors` (
  `object_identity_id` int(10) unsigned NOT NULL,
  `ancestor_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`object_identity_id`,`ancestor_id`),
  KEY `IDX_825DE2993D9AB4A6` (`object_identity_id`),
  KEY `IDX_825DE299C671CEA1` (`ancestor_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `acl_security_identities`
--

CREATE TABLE IF NOT EXISTS `acl_security_identities` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `identifier` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `username` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_8835EE78772E836AF85E0677` (`identifier`,`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `categorie`
--

CREATE TABLE IF NOT EXISTS `categorie` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `categorie`
--

INSERT INTO `categorie` (`id`, `libelle`) VALUES
(1, 'comprime'),
(2, 'sirop');

-- --------------------------------------------------------

--
-- Table structure for table `client`
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
-- Table structure for table `commande`
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
-- Table structure for table `fos_user_group`
--

CREATE TABLE IF NOT EXISTS `fos_user_group` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `roles` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_583D1F3E5E237E06` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `fos_user_user`
--

CREATE TABLE IF NOT EXISTS `fos_user_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username_canonical` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_canonical` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `salt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `locked` tinyint(1) NOT NULL,
  `expired` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  `confirmation_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password_requested_at` datetime DEFAULT NULL,
  `roles` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  `credentials_expired` tinyint(1) NOT NULL,
  `credentials_expire_at` datetime DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `date_of_birth` datetime DEFAULT NULL,
  `firstname` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lastname` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `website` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `biography` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gender` varchar(1) COLLATE utf8_unicode_ci DEFAULT NULL,
  `locale` varchar(8) COLLATE utf8_unicode_ci DEFAULT NULL,
  `timezone` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `facebook_uid` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `facebook_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `facebook_data` longtext COLLATE utf8_unicode_ci COMMENT '(DC2Type:json)',
  `twitter_uid` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `twitter_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `twitter_data` longtext COLLATE utf8_unicode_ci COMMENT '(DC2Type:json)',
  `gplus_uid` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gplus_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gplus_data` longtext COLLATE utf8_unicode_ci COMMENT '(DC2Type:json)',
  `token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `two_step_code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_C560D76192FC23A8` (`username_canonical`),
  UNIQUE KEY `UNIQ_C560D761A0D96FBF` (`email_canonical`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `fos_user_user_group`
--

CREATE TABLE IF NOT EXISTS `fos_user_user_group` (
  `user_id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL,
  PRIMARY KEY (`user_id`,`group_id`),
  KEY `IDX_B3C77447A76ED395` (`user_id`),
  KEY `IDX_B3C77447FE54D947` (`group_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fournisseur`
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
-- Table structure for table `inventaire`
--

CREATE TABLE IF NOT EXISTS `inventaire` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dateInventaire` datetime NOT NULL,
  `tyep_inventaire_id` int(11) DEFAULT NULL,
  `dateDebut` date NOT NULL,
  `dateDateFin` date NOT NULL,
  `rapport` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_338920E055357FFC` (`tyep_inventaire_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=32 ;

--
-- Dumping data for table `inventaire`
--

INSERT INTO `inventaire` (`id`, `dateInventaire`, `tyep_inventaire_id`, `dateDebut`, `dateDateFin`, `rapport`) VALUES
(2, '2016-10-08 17:00:00', 1, '0000-00-00', '0000-00-00', ''),
(5, '2016-10-08 00:00:00', 1, '0000-00-00', '0000-00-00', ''),
(6, '2016-10-08 00:00:00', 4, '0000-00-00', '0000-00-00', ''),
(7, '2016-10-08 22:21:20', 2, '2011-01-01', '2021-01-01', ''),
(8, '2016-10-08 22:21:58', 2, '2011-01-01', '2011-01-01', ''),
(9, '2016-10-08 22:22:33', 3, '2011-01-01', '2021-01-01', ''),
(10, '2016-10-08 22:25:44', 3, '2011-01-01', '2018-01-01', ''),
(11, '2016-10-08 22:34:38', 2, '2011-01-01', '2019-01-01', ''),
(12, '2016-10-08 22:35:29', 2, '2011-01-01', '2020-01-01', ''),
(13, '2016-10-08 22:56:12', 4, '2011-01-01', '2021-01-01', ''),
(14, '2016-10-08 22:56:51', 2, '2011-01-01', '2016-01-01', ''),
(15, '2016-10-08 23:51:24', 2, '2011-01-01', '2016-01-01', ''),
(16, '2016-10-08 23:56:56', 2, '2011-01-01', '2019-01-01', ''),
(17, '2016-10-08 23:57:39', 3, '2011-01-01', '2015-01-01', ''),
(18, '2016-10-09 00:00:29', 3, '2012-01-01', '2012-05-01', ''),
(19, '2016-10-09 00:01:52', 2, '2012-01-01', '2015-01-01', ''),
(20, '2016-10-09 00:15:21', 2, '2013-01-01', '2013-01-01', ''),
(21, '2016-10-09 00:17:46', 2, '2012-01-01', '2013-01-01', ''),
(22, '2016-10-09 00:53:39', 2, '2012-01-01', '2013-01-01', ''),
(23, '2016-10-09 00:56:29', 3, '2011-01-01', '2012-01-01', ''),
(24, '2016-10-09 00:59:26', 3, '2011-01-01', '2012-01-01', ''),
(25, '2016-10-09 01:03:48', 2, '2011-01-01', '2011-01-01', ''),
(26, '2016-10-09 15:39:04', 4, '2012-01-01', '2015-01-01', ''),
(27, '2016-10-09 15:42:43', 4, '2012-01-01', '2015-01-01', ''),
(28, '2016-10-09 15:45:02', 4, '2012-01-01', '2015-01-01', ''),
(29, '2016-10-09 16:10:55', 2, '2012-02-01', '2016-08-09', 'test-2016-10-09_04:55.pdf'),
(30, '2016-10-09 18:02:15', 2, '2011-01-01', '2021-01-01', 'test-2016-10-09_06:15.pdf'),
(31, '2016-10-09 18:04:55', NULL, '2013-03-01', '2021-12-01', 'test-2016-10-09_06:55.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `pharmacie`
--

CREATE TABLE IF NOT EXISTS `pharmacie` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `adresse` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `arrondissement` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ville` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `departement` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `region` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `latitude` double DEFAULT NULL,
  `longitude` double DEFAULT NULL,
  `dateCreation` date NOT NULL,
  `telephone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `site_web` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_5FC1943477153098` (`code`),
  UNIQUE KEY `UNIQ_5FC19434450FF010` (`telephone`),
  UNIQUE KEY `UNIQ_5FC19434E7927C74` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `pharmacien`
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
-- Table structure for table `produit`
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `produit`
--

INSERT INTO `produit` (`id`, `categorie_id`, `libelle`, `codeBarre`, `prixUnitaire`, `datePeremption`, `reference`) VALUES
(1, 1, 'paracétamol', '124524134', 500, '2018-03-16', '0234'),
(2, 2, 'advil', '1324541', 1040, '2021-02-10', '0234'),
(3, 1, 'menthelaton', '12245', 1300, '2015-01-01', '0235');

-- --------------------------------------------------------

--
-- Table structure for table `produitvendu`
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
-- Table structure for table `rapport`
--

CREATE TABLE IF NOT EXISTS `rapport` (
  `quantiteDepart` int(11) NOT NULL,
  `quantiteRestante` int(11) NOT NULL,
  `coutGlobal` int(11) NOT NULL,
  `src` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `inventaire_id` int(11) NOT NULL,
  `produit_id` int(11) NOT NULL,
  PRIMARY KEY (`inventaire_id`,`produit_id`),
  UNIQUE KEY `UNIQ_BE34A09C6044248D` (`src`),
  KEY `IDX_BE34A09CF347EFB` (`produit_id`),
  KEY `IDX_BE34A09CCE430A85` (`inventaire_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `stock`
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
-- Table structure for table `typevente`
--

CREATE TABLE IF NOT EXISTS `typevente` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idachete_id` int(11) DEFAULT NULL,
  `typevente` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `pourcentage` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_2A09F5FF4A44E93` (`idachete_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `type_inventaire`
--

CREATE TABLE IF NOT EXISTS `type_inventaire` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `type_inventaire`
--

INSERT INTO `type_inventaire` (`id`, `libelle`, `description`) VALUES
(1, 'annuel', 'l''inventaire annuel consiste à recenser tous les produit vendus et l''etat de la comptabilité de l''établissement'),
(2, 'peremption', 'cet inventaire permet de lister tous les médocaments qui sont sur le point d''etre périmés ou il reste quelques jours avant la peremption'),
(3, 'stock', 'inventaire du stock suivant l''année et la valeur du comptoire'),
(4, 'tournant', 'inventaire effectué à chaque baisse de la quantité du stock');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `achete`
--
ALTER TABLE `achete`
  ADD CONSTRAINT `FK_6AFD8FC367F0C0D4` FOREIGN KEY (`idclient_id`) REFERENCES `client` (`id`),
  ADD CONSTRAINT `FK_6AFD8FC3C29D63C1` FOREIGN KEY (`idproduit_id`) REFERENCES `produit` (`id`);

--
-- Constraints for table `acl_entries`
--
ALTER TABLE `acl_entries`
  ADD CONSTRAINT `FK_46C8B8063D9AB4A6` FOREIGN KEY (`object_identity_id`) REFERENCES `acl_object_identities` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_46C8B806DF9183C9` FOREIGN KEY (`security_identity_id`) REFERENCES `acl_security_identities` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_46C8B806EA000B10` FOREIGN KEY (`class_id`) REFERENCES `acl_classes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `acl_object_identities`
--
ALTER TABLE `acl_object_identities`
  ADD CONSTRAINT `FK_9407E54977FA751A` FOREIGN KEY (`parent_object_identity_id`) REFERENCES `acl_object_identities` (`id`);

--
-- Constraints for table `acl_object_identity_ancestors`
--
ALTER TABLE `acl_object_identity_ancestors`
  ADD CONSTRAINT `FK_825DE2993D9AB4A6` FOREIGN KEY (`object_identity_id`) REFERENCES `acl_object_identities` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_825DE299C671CEA1` FOREIGN KEY (`ancestor_id`) REFERENCES `acl_object_identities` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `commande`
--
ALTER TABLE `commande`
  ADD CONSTRAINT `FK_6EEAA67D7674E434` FOREIGN KEY (`idfournisseur_id`) REFERENCES `fournisseur` (`id`),
  ADD CONSTRAINT `FK_6EEAA67DB6418165` FOREIGN KEY (`idpharmacien_id`) REFERENCES `pharmacien` (`id`),
  ADD CONSTRAINT `FK_6EEAA67DC29D63C1` FOREIGN KEY (`idproduit_id`) REFERENCES `produit` (`id`);

--
-- Constraints for table `fos_user_user_group`
--
ALTER TABLE `fos_user_user_group`
  ADD CONSTRAINT `FK_B3C77447A76ED395` FOREIGN KEY (`user_id`) REFERENCES `fos_user_user` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_B3C77447FE54D947` FOREIGN KEY (`group_id`) REFERENCES `fos_user_group` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `inventaire`
--
ALTER TABLE `inventaire`
  ADD CONSTRAINT `FK_338920E055357FFC` FOREIGN KEY (`tyep_inventaire_id`) REFERENCES `type_inventaire` (`id`);

--
-- Constraints for table `produit`
--
ALTER TABLE `produit`
  ADD CONSTRAINT `FK_E618D5BBBCF5E72D` FOREIGN KEY (`categorie_id`) REFERENCES `categorie` (`id`);

--
-- Constraints for table `produitvendu`
--
ALTER TABLE `produitvendu`
  ADD CONSTRAINT `FK_6A830A89C29D63C1` FOREIGN KEY (`idproduit_id`) REFERENCES `produit` (`id`);

--
-- Constraints for table `rapport`
--
ALTER TABLE `rapport`
  ADD CONSTRAINT `FK_BE34A09CCE430A85` FOREIGN KEY (`inventaire_id`) REFERENCES `inventaire` (`id`),
  ADD CONSTRAINT `FK_BE34A09CF347EFB` FOREIGN KEY (`produit_id`) REFERENCES `produit` (`id`);

--
-- Constraints for table `stock`
--
ALTER TABLE `stock`
  ADD CONSTRAINT `FK_4B365660F347EFB` FOREIGN KEY (`produit_id`) REFERENCES `produit` (`id`);

--
-- Constraints for table `typevente`
--
ALTER TABLE `typevente`
  ADD CONSTRAINT `FK_2A09F5FF4A44E93` FOREIGN KEY (`idachete_id`) REFERENCES `achete` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;