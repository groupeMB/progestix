-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Dim 01 Janvier 2017 à 21:14
-- Version du serveur: 5.5.53-0ubuntu0.14.04.1
-- Version de PHP: 5.5.9-1ubuntu4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `mb_progestix`
--

-- --------------------------------------------------------

--
-- Structure de la table `achete`
--

CREATE TABLE IF NOT EXISTS `achete` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idproduit_id` int(11) DEFAULT NULL,
  `idclient_id` int(11) DEFAULT NULL,
  `date` datetime NOT NULL,
  `montant` decimal(10,0) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_6AFD8FC3C29D63C1` (`idproduit_id`),
  KEY `IDX_6AFD8FC367F0C0D4` (`idclient_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `acl_classes`
--

CREATE TABLE IF NOT EXISTS `acl_classes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `class_type` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_69DD750638A36066` (`class_type`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `acl_entries`
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
-- Structure de la table `acl_object_identities`
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
-- Structure de la table `acl_object_identity_ancestors`
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
-- Structure de la table `acl_security_identities`
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
-- Structure de la table `categorie`
--

CREATE TABLE IF NOT EXISTS `categorie` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=14 ;

--
-- Contenu de la table `categorie`
--

INSERT INTO `categorie` (`id`, `libelle`, `description`) VALUES
(1, 'Anti-inflammatoire', 'Médicament destiné à combattre une inflammation'),
(2, 'Anti-bactérien', 'Médicaments contre les bactéries, agents et maladies infectieuses'),
(4, 'Analgésique', 'Médicaments pour le traitement de la douleur (antalgie ou analgésie).'),
(5, 'Antimycosiques', 'Médicament utilisé pour traiter les mycoses.'),
(6, 'Dermocorticoïdes', 'Médicaments pour les affections dermatologiques'),
(7, 'Antiviraux', 'Médicament permettant de ralentir une infection virale'),
(8, 'Diététique', 'Éléments de diététique et nutrition'),
(9, 'gastro-entérologie', 'Médicaments contre les maladies gastriques'),
(10, 'Ophtalmologie', 'Médicament pour les maladies de l''oeil'),
(11, 'Parasitologie', 'Médicaments contre les parasites'),
(12, 'Pneumologie', 'Médicaments contre les pathologies respiratoires'),
(13, 'Antibiotiques', 'Médicaments contre les douleurs');

-- --------------------------------------------------------

--
-- Structure de la table `champ_dynamique`
--

CREATE TABLE IF NOT EXISTS `champ_dynamique` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `typeChamp` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `valeur` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `champ_produit`
--

CREATE TABLE IF NOT EXISTS `champ_produit` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `produit` int(11) DEFAULT NULL,
  `typeChamp` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `valeur` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_EF3C3D3A29A5EC27` (`produit`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=14 ;

--
-- Contenu de la table `champ_produit`
--

INSERT INTO `champ_produit` (`id`, `produit`, `typeChamp`, `nom`, `valeur`) VALUES
(1, 15, 'string', 'laye', 'kams'),
(2, 16, 'string', 'age', 'compliq'),
(3, 17, 'string', 'age', '19'),
(4, 17, 'string', 'mariee', 'oui'),
(5, 18, 'string', 'age', '17'),
(6, 18, 'string', 'mariee', 'non'),
(7, 19, 'string', 'ages', '1889'),
(8, 20, 'string', 'age', '19'),
(9, 21, 'string', 'type', 'machine'),
(10, 22, 'string', 'age', '17'),
(11, 22, 'string', 'datte', 'mardi'),
(12, 23, 'string', 'age', '18'),
(13, 23, 'string', 'temps', 'matinee');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Contenu de la table `client`
--

INSERT INTO `client` (`id`, `nom`, `prenom`, `cin`, `tel`, `mail`) VALUES
(1, 'KAMA', 'Abdoulaye', '123456789', '773675372', 'akama@gmail.com'),
(2, 'NGOM', 'Bassirou', '987654321', '7741236589', 'bngom@gmail.com');

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE IF NOT EXISTS `commande` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idproduit_id` int(11) DEFAULT NULL,
  `quantite` int(11) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_6EEAA67DC29D63C1` (`idproduit_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `fos_user_group`
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
-- Structure de la table `fos_user_user`
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Contenu de la table `fos_user_user`
--

INSERT INTO `fos_user_user` (`id`, `username`, `username_canonical`, `email`, `email_canonical`, `enabled`, `salt`, `password`, `last_login`, `locked`, `expired`, `expires_at`, `confirmation_token`, `password_requested_at`, `roles`, `credentials_expired`, `credentials_expire_at`, `created_at`, `updated_at`, `date_of_birth`, `firstname`, `lastname`, `website`, `biography`, `gender`, `locale`, `timezone`, `phone`, `facebook_uid`, `facebook_name`, `facebook_data`, `twitter_uid`, `twitter_name`, `twitter_data`, `gplus_uid`, `gplus_name`, `gplus_data`, `token`, `two_step_code`) VALUES
(1, 'admin', 'admin', 'admin@progestix.sn', 'admin@progestix.sn', 1, 'ojv9mw5jwcg0w44s0cgsswg4s8gwcog', 'ft29DJZECGpsHbWyjVzbD3RznmxeJbtQ4f//w1zkImcX7DWOWjDyMq/7tbE0pXohLAWhQoVGJWqUPgs2txxX+g==', '2017-01-01 20:40:00', 0, 0, NULL, NULL, NULL, 'a:1:{i:0;s:16:"ROLE_SUPER_ADMIN";}', 0, NULL, '2016-10-10 17:08:13', '2017-01-01 20:40:00', NULL, NULL, NULL, NULL, NULL, 'u', NULL, NULL, NULL, NULL, NULL, 'null', NULL, NULL, 'null', NULL, NULL, 'null', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `fos_user_user_group`
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
-- Structure de la table `image`
--

CREATE TABLE IF NOT EXISTS `image` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `extension` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `inventaire`
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
-- Contenu de la table `inventaire`
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
-- Structure de la table `keyword`
--

CREATE TABLE IF NOT EXISTS `keyword` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `valeur` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `produit` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_5A93713B29A5EC27` (`produit`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=34 ;

--
-- Contenu de la table `keyword`
--

INSERT INTO `keyword` (`id`, `valeur`, `produit`) VALUES
(7, 'ventre', 9),
(8, 'tete', 9),
(9, 'tete', 10),
(10, 'ventre', 10),
(11, 'yeux', 10),
(12, 'rhume', 10),
(13, 'yeux', 11),
(14, 'tete', 11),
(15, 'tete', 12),
(16, 'langue', 12),
(17, 'fievre', 12),
(18, 'ventre', 13),
(19, 'tete', 13),
(20, 'fievre', 13),
(22, 'tete', 15),
(23, 'homme', 16),
(24, 'homme', 17),
(25, 'fatigue', 18),
(26, 'lllllllllllllllllllll', 19),
(27, 'tete', 20),
(28, 'ordi', 21),
(29, 'informatique', 21),
(30, 'aaaaaaaa', 22),
(31, 'mmmmmmmmmm', 22),
(32, 'aka', 23),
(33, 'laka', 23);

-- --------------------------------------------------------

--
-- Structure de la table `pharmacie`
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
  `stock` int(11) DEFAULT NULL,
  `codeBarre` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `prixUnitaire` decimal(10,2) NOT NULL,
  `datePeremption` date NOT NULL,
  `champ1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `champ2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `champ3` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `champ4` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `champ5` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_29A5EC274B365660` (`stock`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=32 ;

--
-- Contenu de la table `produit`
--

INSERT INTO `produit` (`id`, `stock`, `codeBarre`, `prixUnitaire`, `datePeremption`, `champ1`, `champ2`, `champ3`, `champ4`, `champ5`) VALUES
(9, 3, '10009', 2000.00, '2017-11-12', NULL, NULL, NULL, NULL, NULL),
(10, 3, '192881', 1000.00, '2017-01-01', NULL, NULL, NULL, NULL, NULL),
(11, 2, '10091', 5000.00, '2019-01-01', NULL, NULL, NULL, NULL, NULL),
(12, 3, '7181772', 2000.00, '2017-01-01', NULL, NULL, NULL, NULL, NULL),
(13, 4, '11323', 12000.00, '2017-01-01', NULL, NULL, NULL, NULL, NULL),
(14, 2, '17lll', 18.00, '2017-01-01', NULL, NULL, NULL, NULL, NULL),
(15, 2, 'lllsll', 192.00, '2017-01-01', NULL, NULL, NULL, NULL, NULL),
(16, 2, '77162', 190.00, '2017-01-01', NULL, NULL, NULL, NULL, NULL),
(17, 2, '77162', 190.00, '2018-01-04', NULL, NULL, NULL, NULL, NULL),
(18, 2, '1872', 190.00, '2018-03-04', NULL, NULL, NULL, NULL, NULL),
(19, 2, '14555GM', 126.00, '2017-01-16', NULL, NULL, NULL, NULL, NULL),
(20, 2, '1DF2', 213.00, '2017-01-01', NULL, NULL, NULL, NULL, NULL),
(21, 2, '10009', 1929.00, '2017-01-01', NULL, NULL, NULL, NULL, NULL),
(22, 2, '10010', 199.00, '2017-07-01', NULL, NULL, NULL, NULL, NULL),
(23, 2, '10010', 2.00, '2017-07-01', NULL, NULL, NULL, NULL, NULL),
(24, 2, '11009', 19.00, '2017-01-01', NULL, NULL, NULL, NULL, NULL),
(25, 2, '10009', 193.00, '2017-01-01', NULL, NULL, NULL, NULL, NULL),
(26, 2, '200111', 2190.42, '2017-01-01', NULL, NULL, NULL, NULL, NULL),
(27, 2, '200111', 20189.67, '2017-01-01', NULL, NULL, NULL, NULL, NULL),
(28, 2, '10091', 1987.98, '2017-01-01', NULL, NULL, NULL, NULL, NULL),
(29, 2, '1L1OQ2', 2019.68, '2017-01-01', NULL, NULL, NULL, NULL, NULL),
(30, 18, '190001', 2009.65, '2018-01-01', NULL, NULL, NULL, NULL, NULL),
(31, 22, '14526', 1524.00, '2019-01-01', NULL, NULL, NULL, NULL, NULL);

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
-- Structure de la table `produit_vendu`
--

CREATE TABLE IF NOT EXISTS `produit_vendu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idproduit_id` int(11) DEFAULT NULL,
  `quantite` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_EF634FEDC29D63C1` (`idproduit_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `rapport`
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
-- Structure de la table `stock`
--

CREATE TABLE IF NOT EXISTS `stock` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `categorie` int(11) DEFAULT NULL,
  `quantite` int(11) DEFAULT NULL,
  `seuilMin` int(11) NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `posologie` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `libelle` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `reference` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `image` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_4B365660497DD634` (`categorie`),
  KEY `IDX_4B365660C53D045F` (`image`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=24 ;

--
-- Contenu de la table `stock`
--

INSERT INTO `stock` (`id`, `categorie`, `quantite`, `seuilMin`, `description`, `posologie`, `libelle`, `reference`, `image`) VALUES
(2, 11, 17, 1982, 'aspegic', 'aspegic', 'aspegic', '177269', NULL),
(3, 4, 3, 19, 'actifed llslls', 'actifed llslls', 'actifed', '1728', NULL),
(4, 4, 1, 20, 'glycineiiii', 'glyciiiiiiiii', 'glycine', '111222', NULL),
(5, 1, 0, 1982, 'pomme de moi', 'aaaaaaaaaaaaaa', 'produit', '17726778', NULL),
(6, 1, 0, 1982, 'pomme de moi', 'aaaaaaaaaaaaaa', 'produit_2', '1782', NULL),
(7, 1, 0, 1982, 'pomme de moi', 'aaaaaaaaaaaaaa', 'produit_2', '1782', NULL),
(8, 1, 0, 1982, 'pomme de moi', 'aaaaaaaaaaaaaa', 'produit_3', '7888888', NULL),
(9, 1, 0, 900, 'ppppppppppppp', 'ppppppppppppp', 'produit_4', '222111', NULL),
(10, 1, 0, 190, 'kammmmmmmmmm', 'kammmmmmmmm', 'kams', '9999911', NULL),
(11, 1, 0, 1220, 'layessssss', 'layesssssss', 'layes', '99991111', NULL),
(12, 1, 0, 1922, 'llllllllllllllllll', 'lllllllllllllllllllllll', 'kamssss', '22222', NULL),
(13, 1, 0, 124, 'lllllllllllllllllllllllll', 'llllllllllllllllllllllllllllll', 'produitsssss', '17726990', NULL),
(15, 1, 0, 1220, 'pomme de moi', 'kammmmmmmmm', 'fruit', '2223232', NULL),
(16, 1, 0, 1222, 'medicament pour homme', 'prendre avec précaution', 'ngor keng', '112121212', NULL),
(17, 1, 0, 1222, 'medicament pour homme', 'prendre avec précaution', 'ngor keng', '112121212', NULL),
(18, 1, 1, 29, 'du frotté pour se frotter', 'le mettre sur le corpe', 'frotté', '11121111', NULL),
(19, 1, 0, -16, 'manguellllllla', 'lllllllllllllllllllll', 'fruit', '177269', NULL),
(20, 1, 0, 9, 'lallllllllllllllllllllllll', 'llllllllllllllllllllllllllll', 'moutarde', '17726912', NULL),
(21, 1, 0, 18, 'ordikslkkkkkkkkkkkkkk', 'laaaaaaaaaaaaaaaaaaaaaaaaa', 'ordi', '61762VV', NULL),
(22, 1, 1, 5, 'aaaaaaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaa', 'newproduit', '12111', NULL),
(23, 1, 0, 17, 'aaaaaaaaaaaaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaa', 'AKAKAKA', 'A11111', NULL);

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

-- --------------------------------------------------------

--
-- Structure de la table `type_inventaire`
--

CREATE TABLE IF NOT EXISTS `type_inventaire` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Contenu de la table `type_inventaire`
--

INSERT INTO `type_inventaire` (`id`, `libelle`, `description`) VALUES
(1, 'annuel', 'l''inventaire annuel consiste à recenser tous les produit vendus et l''etat de la comptabilité de l''établissement'),
(2, 'peremption', 'cet inventaire permet de lister tous les médocaments qui sont sur le point d''etre périmés ou il reste quelques jours avant la peremption'),
(3, 'stock', 'inventaire du stock suivant l''année et la valeur du comptoire'),
(4, 'tournant', 'inventaire effectué à chaque baisse de la quantité du stock');

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
-- Contraintes pour la table `acl_entries`
--
ALTER TABLE `acl_entries`
  ADD CONSTRAINT `FK_46C8B8063D9AB4A6` FOREIGN KEY (`object_identity_id`) REFERENCES `acl_object_identities` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_46C8B806DF9183C9` FOREIGN KEY (`security_identity_id`) REFERENCES `acl_security_identities` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_46C8B806EA000B10` FOREIGN KEY (`class_id`) REFERENCES `acl_classes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `acl_object_identities`
--
ALTER TABLE `acl_object_identities`
  ADD CONSTRAINT `FK_9407E54977FA751A` FOREIGN KEY (`parent_object_identity_id`) REFERENCES `acl_object_identities` (`id`);

--
-- Contraintes pour la table `acl_object_identity_ancestors`
--
ALTER TABLE `acl_object_identity_ancestors`
  ADD CONSTRAINT `FK_825DE2993D9AB4A6` FOREIGN KEY (`object_identity_id`) REFERENCES `acl_object_identities` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_825DE299C671CEA1` FOREIGN KEY (`ancestor_id`) REFERENCES `acl_object_identities` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `champ_produit`
--
ALTER TABLE `champ_produit`
  ADD CONSTRAINT `FK_EF3C3D3A29A5EC27` FOREIGN KEY (`produit`) REFERENCES `stock` (`id`);

--
-- Contraintes pour la table `commande`
--
ALTER TABLE `commande`
  ADD CONSTRAINT `FK_6EEAA67DC29D63C1` FOREIGN KEY (`idproduit_id`) REFERENCES `produit` (`id`);

--
-- Contraintes pour la table `fos_user_user_group`
--
ALTER TABLE `fos_user_user_group`
  ADD CONSTRAINT `FK_B3C77447A76ED395` FOREIGN KEY (`user_id`) REFERENCES `fos_user_user` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_B3C77447FE54D947` FOREIGN KEY (`group_id`) REFERENCES `fos_user_group` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `inventaire`
--
ALTER TABLE `inventaire`
  ADD CONSTRAINT `FK_338920E055357FFC` FOREIGN KEY (`tyep_inventaire_id`) REFERENCES `type_inventaire` (`id`);

--
-- Contraintes pour la table `keyword`
--
ALTER TABLE `keyword`
  ADD CONSTRAINT `FK_5A93713B29A5EC27` FOREIGN KEY (`produit`) REFERENCES `stock` (`id`);

--
-- Contraintes pour la table `produit`
--
ALTER TABLE `produit`
  ADD CONSTRAINT `FK_29A5EC274B365660` FOREIGN KEY (`stock`) REFERENCES `stock` (`id`);

--
-- Contraintes pour la table `produitvendu`
--
ALTER TABLE `produitvendu`
  ADD CONSTRAINT `FK_6A830A89C29D63C1` FOREIGN KEY (`idproduit_id`) REFERENCES `produit` (`id`);

--
-- Contraintes pour la table `produit_vendu`
--
ALTER TABLE `produit_vendu`
  ADD CONSTRAINT `FK_EF634FEDC29D63C1` FOREIGN KEY (`idproduit_id`) REFERENCES `produit` (`id`);

--
-- Contraintes pour la table `rapport`
--
ALTER TABLE `rapport`
  ADD CONSTRAINT `FK_BE34A09CCE430A85` FOREIGN KEY (`inventaire_id`) REFERENCES `inventaire` (`id`),
  ADD CONSTRAINT `FK_BE34A09CF347EFB` FOREIGN KEY (`produit_id`) REFERENCES `produit` (`id`);

--
-- Contraintes pour la table `stock`
--
ALTER TABLE `stock`
  ADD CONSTRAINT `FK_4B365660497DD634` FOREIGN KEY (`categorie`) REFERENCES `categorie` (`id`),
  ADD CONSTRAINT `FK_4B365660C53D045F` FOREIGN KEY (`image`) REFERENCES `image` (`id`);

--
-- Contraintes pour la table `typevente`
--
ALTER TABLE `typevente`
  ADD CONSTRAINT `FK_2A09F5FF4A44E93` FOREIGN KEY (`idachete_id`) REFERENCES `achete` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;