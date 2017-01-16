-- phpMyAdmin SQL Dump
-- version 4.2.12deb2+deb8u1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Jeu 12 Janvier 2017 à 00:58
-- Version du serveur :  5.5.47-0+deb8u1
-- Version de PHP :  5.6.19-0+deb8u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `mb_progestix`
--

-- --------------------------------------------------------

--
-- Structure de la table `achete`
--

CREATE TABLE IF NOT EXISTS `achete` (
`id` int(11) NOT NULL,
  `idproduit_id` int(11) DEFAULT NULL,
  `idclient_id` int(11) DEFAULT NULL,
  `date` datetime NOT NULL,
  `montant` decimal(10,0) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `achete`
--

INSERT INTO `achete` (`id`, `idproduit_id`, `idclient_id`, `date`, `montant`) VALUES
(1, 14, 1, '2017-01-02 02:54:49', 54),
(2, 14, 1, '2017-01-02 03:02:15', 54),
(3, 10, 1, '2017-01-02 03:05:24', 4408),
(4, 14, 1, '2017-01-02 03:05:24', 4408),
(5, 16, 1, '2017-01-02 03:05:24', 4408),
(6, 30, 1, '2017-01-02 03:05:24', 4408);

-- --------------------------------------------------------

--
-- Structure de la table `acl_classes`
--

CREATE TABLE IF NOT EXISTS `acl_classes` (
`id` int(10) unsigned NOT NULL,
  `class_type` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `acl_entries`
--

CREATE TABLE IF NOT EXISTS `acl_entries` (
`id` int(10) unsigned NOT NULL,
  `class_id` int(10) unsigned NOT NULL,
  `object_identity_id` int(10) unsigned DEFAULT NULL,
  `security_identity_id` int(10) unsigned NOT NULL,
  `field_name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ace_order` smallint(5) unsigned NOT NULL,
  `mask` int(11) NOT NULL,
  `granting` tinyint(1) NOT NULL,
  `granting_strategy` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `audit_success` tinyint(1) NOT NULL,
  `audit_failure` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `acl_object_identities`
--

CREATE TABLE IF NOT EXISTS `acl_object_identities` (
`id` int(10) unsigned NOT NULL,
  `parent_object_identity_id` int(10) unsigned DEFAULT NULL,
  `class_id` int(10) unsigned NOT NULL,
  `object_identifier` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `entries_inheriting` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `acl_object_identity_ancestors`
--

CREATE TABLE IF NOT EXISTS `acl_object_identity_ancestors` (
  `object_identity_id` int(10) unsigned NOT NULL,
  `ancestor_id` int(10) unsigned NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `acl_security_identities`
--

CREATE TABLE IF NOT EXISTS `acl_security_identities` (
`id` int(10) unsigned NOT NULL,
  `identifier` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `username` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE IF NOT EXISTS `categorie` (
`id` int(11) NOT NULL,
  `libelle` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
`id` int(11) NOT NULL,
  `typeChamp` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `valeur` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `champ_produit`
--

CREATE TABLE IF NOT EXISTS `champ_produit` (
`id` int(11) NOT NULL,
  `produit` int(11) DEFAULT NULL,
  `typeChamp` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `valeur` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
(13, 23, 'string', 'temps', 'matinee'),
(14, 24, 'string', 'age', '18'),
(15, 25, 'string', 'age', '17');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE IF NOT EXISTS `client` (
`id` int(11) NOT NULL,
  `nom` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `prenom` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `cin` varchar(90) COLLATE utf8_unicode_ci NOT NULL,
  `tel` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `mail` varchar(80) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
`id` int(11) NOT NULL,
  `idproduit_id` int(11) DEFAULT NULL,
  `quantite` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `fos_user_group`
--

CREATE TABLE IF NOT EXISTS `fos_user_group` (
`id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `roles` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `fos_user_user`
--

CREATE TABLE IF NOT EXISTS `fos_user_user` (
`id` int(11) NOT NULL,
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
  `two_step_code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `fos_user_user`
--

INSERT INTO `fos_user_user` (`id`, `username`, `username_canonical`, `email`, `email_canonical`, `enabled`, `salt`, `password`, `last_login`, `locked`, `expired`, `expires_at`, `confirmation_token`, `password_requested_at`, `roles`, `credentials_expired`, `credentials_expire_at`, `created_at`, `updated_at`, `date_of_birth`, `firstname`, `lastname`, `website`, `biography`, `gender`, `locale`, `timezone`, `phone`, `facebook_uid`, `facebook_name`, `facebook_data`, `twitter_uid`, `twitter_name`, `twitter_data`, `gplus_uid`, `gplus_name`, `gplus_data`, `token`, `two_step_code`) VALUES
(1, 'admin', 'admin', 'admin@progestix.sn', 'admin@progestix.sn', 1, 'ojv9mw5jwcg0w44s0cgsswg4s8gwcog', 'ft29DJZECGpsHbWyjVzbD3RznmxeJbtQ4f//w1zkImcX7DWOWjDyMq/7tbE0pXohLAWhQoVGJWqUPgs2txxX+g==', '2017-01-02 02:24:40', 0, 0, NULL, NULL, NULL, 'a:1:{i:0;s:16:"ROLE_SUPER_ADMIN";}', 0, NULL, '2016-10-10 17:08:13', '2017-01-02 02:24:40', NULL, NULL, NULL, NULL, NULL, 'u', NULL, NULL, NULL, NULL, NULL, 'null', NULL, NULL, 'null', NULL, NULL, 'null', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `fos_user_user_group`
--

CREATE TABLE IF NOT EXISTS `fos_user_user_group` (
  `user_id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `fournisseur`
--

CREATE TABLE IF NOT EXISTS `fournisseur` (
`id` int(11) NOT NULL,
  `nom` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `prenom` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `adresse` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `tel` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `mail` varchar(70) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `image`
--

CREATE TABLE IF NOT EXISTS `image` (
`id` int(11) NOT NULL,
  `libelle` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `extension` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `inventaire`
--

CREATE TABLE IF NOT EXISTS `inventaire` (
`id` int(11) NOT NULL,
  `dateInventaire` datetime NOT NULL,
  `dateDebut` date NOT NULL,
  `dateFin` date NOT NULL,
  `rapport` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `modele_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `keyword`
--

CREATE TABLE IF NOT EXISTS `keyword` (
`id` int(11) NOT NULL,
  `valeur` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `produit` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
(33, 'laka', 23),
(34, '10', 24),
(35, 'medoc', 25);

-- --------------------------------------------------------

--
-- Structure de la table `modele_inventaire`
--

CREATE TABLE IF NOT EXISTS `modele_inventaire` (
`id` int(11) NOT NULL,
  `libelle` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `modele_inventaire`
--

INSERT INTO `modele_inventaire` (`id`, `libelle`, `description`) VALUES
(2, 'inventaire de peremption', 'on a  ici l''inventaire de la peremption2'),
(3, 'inventaire de stock', 'inventaire pour le staock');

-- --------------------------------------------------------

--
-- Structure de la table `pharmacie`
--

CREATE TABLE IF NOT EXISTS `pharmacie` (
`id` int(11) NOT NULL,
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
  `site_web` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `pharmacien`
--

CREATE TABLE IF NOT EXISTS `pharmacien` (
`id` int(11) NOT NULL,
  `nom` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `prenom` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `statut` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `tel` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `mail` varchar(80) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE IF NOT EXISTS `produit` (
`id` int(11) NOT NULL,
  `stock` int(11) DEFAULT NULL,
  `codeBarre` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `prixUnitaire` decimal(10,2) NOT NULL,
  `datePeremption` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `produit`
--

INSERT INTO `produit` (`id`, `stock`, `codeBarre`, `prixUnitaire`, `datePeremption`) VALUES
(9, 3, '10009', 2000.00, '2017-11-12'),
(10, 3, '192881', 1000.00, '2017-01-01'),
(11, 2, '10091', 5000.00, '2019-01-01'),
(12, 3, '7181772', 2000.00, '2017-01-01'),
(13, 4, '11323', 12000.00, '2017-01-01'),
(14, 2, '17lll', 18.00, '2017-01-01'),
(15, 2, 'lllsll', 192.00, '2017-01-01'),
(16, 2, '77162', 190.00, '2017-01-01'),
(17, 2, '77162', 190.00, '2018-01-04'),
(18, 2, '1872', 190.00, '2018-03-04'),
(19, 2, '14555GM', 126.00, '2017-01-16'),
(20, 2, '1DF2', 213.00, '2017-01-01'),
(21, 2, '10009', 1929.00, '2017-01-01'),
(22, 2, '10010', 199.00, '2017-07-01'),
(23, 2, '10010', 2.00, '2017-07-01'),
(24, 2, '11009', 19.00, '2017-01-01'),
(25, 2, '10009', 193.00, '2017-01-01'),
(26, 2, '200111', 2190.42, '2017-01-01'),
(27, 2, '200111', 20189.67, '2017-01-01'),
(28, 2, '10091', 1987.98, '2017-01-01'),
(29, 2, '1L1OQ2', 2019.68, '2017-01-01'),
(30, 18, '190001', 2009.65, '2018-01-01'),
(31, 22, '14526', 1524.00, '2019-01-01');

-- --------------------------------------------------------

--
-- Structure de la table `produitvendu`
--

CREATE TABLE IF NOT EXISTS `produitvendu` (
`id` int(11) NOT NULL,
  `idproduit_id` int(11) DEFAULT NULL,
  `quantite` varchar(60) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `produit_vendu`
--

CREATE TABLE IF NOT EXISTS `produit_vendu` (
`id` int(11) NOT NULL,
  `quantite` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `nomproduit` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prixunitaire` int(11) NOT NULL,
  `idvente` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `produit_vendu`
--

INSERT INTO `produit_vendu` (`id`, `quantite`, `nomproduit`, `prixunitaire`, `idvente`) VALUES
(1, '3', 'aspegic', 18, 2),
(2, '2', 'actifed', 1000, 3),
(3, '1', 'aspegic', 18, 3),
(4, '2', 'aspegic', 190, 3),
(5, '1', 'frotté', 2010, 3);

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
  `produit_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `sous_categorie`
--

CREATE TABLE IF NOT EXISTS `sous_categorie` (
`id` int(11) NOT NULL,
  `categorie` int(11) NOT NULL,
  `libelle` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `stock`
--

CREATE TABLE IF NOT EXISTS `stock` (
`id` int(11) NOT NULL,
  `categorie` int(11) DEFAULT NULL,
  `quantite` int(11) DEFAULT NULL,
  `seuilMin` int(11) NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `posologie` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `libelle` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `reference` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `image_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `stock`
--

INSERT INTO `stock` (`id`, `categorie`, `quantite`, `seuilMin`, `description`, `posologie`, `libelle`, `reference`, `image_name`, `updated_at`) VALUES
(2, 11, 2, 1982, 'aspegic', 'aspegic', 'aspegic', '177269', '', '0000-00-00 00:00:00'),
(3, 4, -1, 19, 'actifed llslls', 'actifed llslls', 'actifed', '1728', '', '0000-00-00 00:00:00'),
(4, 4, 1, 20, 'glycineiiii', 'glyciiiiiiiii', 'glycine', '111222', '', '0000-00-00 00:00:00'),
(5, 1, 0, 1982, 'pomme de moi', 'aaaaaaaaaaaaaa', 'produit', '17726778', '', '0000-00-00 00:00:00'),
(6, 1, 0, 1982, 'pomme de moi', 'aaaaaaaaaaaaaa', 'produit_2', '1782', '', '0000-00-00 00:00:00'),
(7, 1, 0, 1982, 'pomme de moi', 'aaaaaaaaaaaaaa', 'produit_2', '1782', '', '0000-00-00 00:00:00'),
(8, 1, 0, 1982, 'pomme de moi', 'aaaaaaaaaaaaaa', 'produit_3', '7888888', '', '0000-00-00 00:00:00'),
(9, 1, 0, 900, 'ppppppppppppp', 'ppppppppppppp', 'produit_4', '222111', '', '0000-00-00 00:00:00'),
(10, 1, 0, 190, 'kammmmmmmmmm', 'kammmmmmmmm', 'kams', '9999911', '', '0000-00-00 00:00:00'),
(11, 1, 0, 1220, 'layessssss', 'layesssssss', 'layes', '99991111', '', '0000-00-00 00:00:00'),
(12, 1, 0, 1922, 'llllllllllllllllll', 'lllllllllllllllllllllll', 'kamssss', '22222', '', '0000-00-00 00:00:00'),
(13, 1, 0, 124, 'lllllllllllllllllllllllll', 'llllllllllllllllllllllllllllll', 'produitsssss', '17726990', '', '0000-00-00 00:00:00'),
(15, 1, 0, 1220, 'pomme de moi', 'kammmmmmmmm', 'fruit', '2223232', '', '0000-00-00 00:00:00'),
(16, 1, 0, 1222, 'medicament pour homme', 'prendre avec précaution', 'ngor keng', '112121212', '', '0000-00-00 00:00:00'),
(17, 1, 0, 1222, 'medicament pour homme', 'prendre avec précaution', 'ngor keng', '112121212', '', '0000-00-00 00:00:00'),
(18, 1, -1, 29, 'du frotté pour se frotter', 'le mettre sur le corpe', 'frotté', '11121111', '', '0000-00-00 00:00:00'),
(19, 1, 0, -16, 'manguellllllla', 'lllllllllllllllllllll', 'fruit', '177269', '', '0000-00-00 00:00:00'),
(20, 1, 0, 9, 'lallllllllllllllllllllllll', 'llllllllllllllllllllllllllll', 'moutarde', '17726912', '', '0000-00-00 00:00:00'),
(21, 1, 0, 18, 'ordikslkkkkkkkkkkkkkk', 'laaaaaaaaaaaaaaaaaaaaaaaaa', 'ordi', '61762VV', '', '0000-00-00 00:00:00'),
(22, 1, 1, 5, 'aaaaaaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaa', 'newproduit', '12111', '', '0000-00-00 00:00:00'),
(23, 1, 0, 17, 'aaaaaaaaaaaaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaa', 'AKAKAKA', 'A11111', '', '0000-00-00 00:00:00'),
(24, 1, 0, 10, 'aaaaaaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaa', 'B111111111', 'B111111', 'log ucad.png', '2017-01-01 23:02:27'),
(25, 1, 0, 15, 'c''est la description', 'c''est la posologie', 'actifed', '1A1A1A', 'med120.jpg', '2017-01-02 03:22:29');

-- --------------------------------------------------------

--
-- Structure de la table `typevente`
--

CREATE TABLE IF NOT EXISTS `typevente` (
`id` int(11) NOT NULL,
  `idachete_id` int(11) DEFAULT NULL,
  `typevente` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `pourcentage` varchar(60) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `vente`
--

CREATE TABLE IF NOT EXISTS `vente` (
`id` int(11) NOT NULL,
  `montant` int(11) NOT NULL,
  `agent` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dateVente` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `vente`
--

INSERT INTO `vente` (`id`, `montant`, `agent`, `dateVente`) VALUES
(1, 54, 'admin', '2017-01-02 02:54:49'),
(2, 54, 'admin', '2017-01-02 03:02:16'),
(3, 4408, 'admin', '2017-01-02 03:05:24'),
(4, 0, 'admin', '2017-01-02 03:06:02');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `achete`
--
ALTER TABLE `achete`
 ADD PRIMARY KEY (`id`), ADD KEY `IDX_6AFD8FC3C29D63C1` (`idproduit_id`), ADD KEY `IDX_6AFD8FC367F0C0D4` (`idclient_id`);

--
-- Index pour la table `acl_classes`
--
ALTER TABLE `acl_classes`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `UNIQ_69DD750638A36066` (`class_type`);

--
-- Index pour la table `acl_entries`
--
ALTER TABLE `acl_entries`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `UNIQ_46C8B806EA000B103D9AB4A64DEF17BCE4289BF4` (`class_id`,`object_identity_id`,`field_name`,`ace_order`), ADD KEY `IDX_46C8B806EA000B103D9AB4A6DF9183C9` (`class_id`,`object_identity_id`,`security_identity_id`), ADD KEY `IDX_46C8B806EA000B10` (`class_id`), ADD KEY `IDX_46C8B8063D9AB4A6` (`object_identity_id`), ADD KEY `IDX_46C8B806DF9183C9` (`security_identity_id`);

--
-- Index pour la table `acl_object_identities`
--
ALTER TABLE `acl_object_identities`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `UNIQ_9407E5494B12AD6EA000B10` (`object_identifier`,`class_id`), ADD KEY `IDX_9407E54977FA751A` (`parent_object_identity_id`);

--
-- Index pour la table `acl_object_identity_ancestors`
--
ALTER TABLE `acl_object_identity_ancestors`
 ADD PRIMARY KEY (`object_identity_id`,`ancestor_id`), ADD KEY `IDX_825DE2993D9AB4A6` (`object_identity_id`), ADD KEY `IDX_825DE299C671CEA1` (`ancestor_id`);

--
-- Index pour la table `acl_security_identities`
--
ALTER TABLE `acl_security_identities`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `UNIQ_8835EE78772E836AF85E0677` (`identifier`,`username`);

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `champ_dynamique`
--
ALTER TABLE `champ_dynamique`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `champ_produit`
--
ALTER TABLE `champ_produit`
 ADD PRIMARY KEY (`id`), ADD KEY `IDX_EF3C3D3A29A5EC27` (`produit`);

--
-- Index pour la table `client`
--
ALTER TABLE `client`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `commande`
--
ALTER TABLE `commande`
 ADD PRIMARY KEY (`id`), ADD KEY `IDX_6EEAA67DC29D63C1` (`idproduit_id`);

--
-- Index pour la table `fos_user_group`
--
ALTER TABLE `fos_user_group`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `UNIQ_583D1F3E5E237E06` (`name`);

--
-- Index pour la table `fos_user_user`
--
ALTER TABLE `fos_user_user`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `UNIQ_C560D76192FC23A8` (`username_canonical`), ADD UNIQUE KEY `UNIQ_C560D761A0D96FBF` (`email_canonical`);

--
-- Index pour la table `fos_user_user_group`
--
ALTER TABLE `fos_user_user_group`
 ADD PRIMARY KEY (`user_id`,`group_id`), ADD KEY `IDX_B3C77447A76ED395` (`user_id`), ADD KEY `IDX_B3C77447FE54D947` (`group_id`);

--
-- Index pour la table `fournisseur`
--
ALTER TABLE `fournisseur`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `image`
--
ALTER TABLE `image`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `inventaire`
--
ALTER TABLE `inventaire`
 ADD PRIMARY KEY (`id`), ADD KEY `IDX_338920E0AC14B70A` (`modele_id`);

--
-- Index pour la table `keyword`
--
ALTER TABLE `keyword`
 ADD PRIMARY KEY (`id`), ADD KEY `IDX_5A93713B29A5EC27` (`produit`);

--
-- Index pour la table `modele_inventaire`
--
ALTER TABLE `modele_inventaire`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `libelle` (`libelle`);

--
-- Index pour la table `pharmacie`
--
ALTER TABLE `pharmacie`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `UNIQ_5FC1943477153098` (`code`), ADD UNIQUE KEY `UNIQ_5FC19434450FF010` (`telephone`), ADD UNIQUE KEY `UNIQ_5FC19434E7927C74` (`email`);

--
-- Index pour la table `pharmacien`
--
ALTER TABLE `pharmacien`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `produit`
--
ALTER TABLE `produit`
 ADD PRIMARY KEY (`id`), ADD KEY `IDX_29A5EC274B365660` (`stock`);

--
-- Index pour la table `produitvendu`
--
ALTER TABLE `produitvendu`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `UNIQ_6A830A89C29D63C1` (`idproduit_id`);

--
-- Index pour la table `produit_vendu`
--
ALTER TABLE `produit_vendu`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `rapport`
--
ALTER TABLE `rapport`
 ADD PRIMARY KEY (`inventaire_id`,`produit_id`), ADD UNIQUE KEY `UNIQ_BE34A09C6044248D` (`src`), ADD KEY `IDX_BE34A09CF347EFB` (`produit_id`), ADD KEY `IDX_BE34A09CCE430A85` (`inventaire_id`);

--
-- Index pour la table `sous_categorie`
--
ALTER TABLE `sous_categorie`
 ADD PRIMARY KEY (`id`), ADD KEY `IDX_52743D7B497DD634` (`categorie`);

--
-- Index pour la table `stock`
--
ALTER TABLE `stock`
 ADD PRIMARY KEY (`id`), ADD KEY `IDX_4B365660497DD634` (`categorie`);

--
-- Index pour la table `typevente`
--
ALTER TABLE `typevente`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `UNIQ_2A09F5FF4A44E93` (`idachete_id`);

--
-- Index pour la table `vente`
--
ALTER TABLE `vente`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `achete`
--
ALTER TABLE `achete`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT pour la table `acl_classes`
--
ALTER TABLE `acl_classes`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `acl_entries`
--
ALTER TABLE `acl_entries`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `acl_object_identities`
--
ALTER TABLE `acl_object_identities`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `acl_security_identities`
--
ALTER TABLE `acl_security_identities`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `categorie`
--
ALTER TABLE `categorie`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT pour la table `champ_dynamique`
--
ALTER TABLE `champ_dynamique`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `champ_produit`
--
ALTER TABLE `champ_produit`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `commande`
--
ALTER TABLE `commande`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `fos_user_group`
--
ALTER TABLE `fos_user_group`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `fos_user_user`
--
ALTER TABLE `fos_user_user`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `fournisseur`
--
ALTER TABLE `fournisseur`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `image`
--
ALTER TABLE `image`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `inventaire`
--
ALTER TABLE `inventaire`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `keyword`
--
ALTER TABLE `keyword`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT pour la table `modele_inventaire`
--
ALTER TABLE `modele_inventaire`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `pharmacie`
--
ALTER TABLE `pharmacie`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `pharmacien`
--
ALTER TABLE `pharmacien`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `produit`
--
ALTER TABLE `produit`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT pour la table `produitvendu`
--
ALTER TABLE `produitvendu`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `produit_vendu`
--
ALTER TABLE `produit_vendu`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `sous_categorie`
--
ALTER TABLE `sous_categorie`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `stock`
--
ALTER TABLE `stock`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT pour la table `typevente`
--
ALTER TABLE `typevente`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `vente`
--
ALTER TABLE `vente`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
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
ADD CONSTRAINT `FK_338920E0AC14B70A` FOREIGN KEY (`modele_id`) REFERENCES `modele_inventaire` (`id`);

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
-- Contraintes pour la table `rapport`
--
ALTER TABLE `rapport`
ADD CONSTRAINT `FK_BE34A09CCE430A85` FOREIGN KEY (`inventaire_id`) REFERENCES `inventaire` (`id`),
ADD CONSTRAINT `FK_BE34A09CF347EFB` FOREIGN KEY (`produit_id`) REFERENCES `produit` (`id`);

--
-- Contraintes pour la table `sous_categorie`
--
ALTER TABLE `sous_categorie`
ADD CONSTRAINT `FK_52743D7B497DD634` FOREIGN KEY (`categorie`) REFERENCES `categorie` (`id`);

--
-- Contraintes pour la table `stock`
--
ALTER TABLE `stock`
ADD CONSTRAINT `FK_4B365660497DD634` FOREIGN KEY (`categorie`) REFERENCES `categorie` (`id`);

--
-- Contraintes pour la table `typevente`
--
ALTER TABLE `typevente`
ADD CONSTRAINT `FK_2A09F5FF4A44E93` FOREIGN KEY (`idachete_id`) REFERENCES `achete` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;