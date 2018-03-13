-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Mar 13 Mars 2018 à 10:04
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `m2l`
--

-- --------------------------------------------------------

--
-- Structure de la table `adresse`
--

CREATE TABLE `adresse` (
  `id_a` int(11) NOT NULL,
  `adresse` varchar(255) DEFAULT NULL,
  `commune` varchar(255) DEFAULT NULL,
  `cp` varchar(250) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `adresse`
--

INSERT INTO `adresse` (`id_a`, `adresse`, `commune`, `cp`) VALUES
(2, '11 av honore de balzac', 'montesson', '78360'),
(6, 'fzcbl', 'lebvlj', 'lvelebv'),
(5, '11 av honore de balzac', 'montesson', '78360');

-- --------------------------------------------------------

--
-- Structure de la table `estchefde`
--

CREATE TABLE `estchefde` (
  `id_c` int(11) NOT NULL,
  `id_s` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `estchefde`
--

INSERT INTO `estchefde` (`id_c`, `id_s`) VALUES
(1, 3),
(1, 8),
(1, 10),
(1, 11);

-- --------------------------------------------------------

--
-- Structure de la table `formation`
--

CREATE TABLE `formation` (
  `id_f` int(11) NOT NULL,
  `Titre` varchar(255) NOT NULL,
  `contenu` text,
  `prerequis` varchar(255) DEFAULT NULL,
  `date_deb` datetime DEFAULT NULL,
  `nbr_jour` int(11) DEFAULT NULL,
  `cout_credit` int(11) NOT NULL,
  `id_t` int(11) DEFAULT NULL,
  `id_a` int(11) DEFAULT NULL,
  `id_p` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `formation`
--

INSERT INTO `formation` (`id_f`, `Titre`, `contenu`, `prerequis`, `date_deb`, `nbr_jour`, `cout_credit`, `id_t`, `id_a`, `id_p`) VALUES
(1, 'f1', 'AAaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'maitrise sql', '2018-04-17 00:00:00', 31, 0, 1, 1, 0),
(2, 'f2', 'BBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBB', 'anglais courant', '2018-02-08 00:00:00', 62, 0, 1, 1, 0),
(3, 'f3', 'CCCCCCCCCCCCCCCCCc', 'spanish', '2017-12-21 00:00:00', 81, 0, 1, 1, 0),
(4, 'f4', 'FFFFFFFFFFFFFFFF', 'spanish', '2017-12-21 00:00:00', 81, 0, 1, 1, 0),
(5, 'f5', 'DDDDDDDDDDDDDDDDDDDDDDDDDD', 'spanish', '2017-12-21 00:00:00', 81, 0, 1, 1, 0),
(6, 'f6', 'EEEEEEEEEEEEEEEE', 'spanish', '2017-12-21 00:00:00', 81, 0, 1, 1, 0);

-- --------------------------------------------------------

--
-- Structure de la table `participer`
--

CREATE TABLE `participer` (
  `id_s` int(11) NOT NULL,
  `id_f` int(11) NOT NULL,
  `etat` int(11) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `prestataire`
--

CREATE TABLE `prestataire` (
  `id_p` int(11) NOT NULL,
  `nom_p` varchar(50) DEFAULT NULL,
  `prenom_p` varchar(50) DEFAULT NULL,
  `id_a` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `salarié`
--

CREATE TABLE `salarié` (
  `id_s` int(11) NOT NULL,
  `nom_s` varchar(50) DEFAULT NULL,
  `prenom_s` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `mdp` varchar(255) DEFAULT NULL,
  `estchef` int(11) DEFAULT '0',
  `credit` int(11) DEFAULT '5000',
  `nbj` int(11) DEFAULT '15',
  `id_a` int(11) DEFAULT NULL,
  `id_c` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `salarié`
--

INSERT INTO `salarié` (`id_s`, `nom_s`, `prenom_s`, `email`, `mdp`, `estchef`, `credit`, `nbj`, `id_a`, `id_c`) VALUES
(15, 'admin', 'admin', 'admin@gmail.com', '7581f9f7cb4e2c129cf3994be96f620fca5eb4c0', 2, 5000, 15, NULL, NULL),
(14, 'bvezoueb', 'lvsjvb', 'luc.leveque78@gmail.com', '7581f9f7cb4e2c129cf3994be96f620fca5eb4c0', 0, 5000, 15, 6, 12),
(13, 'quentin', 'leveque', 'quetn@gmail.com', '7581f9f7cb4e2c129cf3994be96f620fca5eb4c0', 0, 5000, 15, 5, 12),
(12, 'luc', 'leveque', 'admin@gamail.com', '7581f9f7cb4e2c129cf3994be96f620fca5eb4c0', 1, 5000, 15, 2, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `type_formation`
--

CREATE TABLE `type_formation` (
  `id_t` int(11) NOT NULL,
  `libelle` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `type_formation`
--

INSERT INTO `type_formation` (`id_t`, `libelle`) VALUES
(1, 'Bigdata');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `adresse`
--
ALTER TABLE `adresse`
  ADD PRIMARY KEY (`id_a`);

--
-- Index pour la table `estchefde`
--
ALTER TABLE `estchefde`
  ADD PRIMARY KEY (`id_c`,`id_s`);

--
-- Index pour la table `formation`
--
ALTER TABLE `formation`
  ADD PRIMARY KEY (`id_f`),
  ADD KEY `id_t` (`id_t`),
  ADD KEY `id_a` (`id_a`),
  ADD KEY `id_p` (`id_p`);

--
-- Index pour la table `participer`
--
ALTER TABLE `participer`
  ADD PRIMARY KEY (`id_s`,`id_f`),
  ADD KEY `id_f` (`id_f`);

--
-- Index pour la table `prestataire`
--
ALTER TABLE `prestataire`
  ADD PRIMARY KEY (`id_p`),
  ADD KEY `id_a` (`id_a`);

--
-- Index pour la table `salarié`
--
ALTER TABLE `salarié`
  ADD PRIMARY KEY (`id_s`),
  ADD KEY `id_a` (`id_a`),
  ADD KEY `id_c` (`id_c`);

--
-- Index pour la table `type_formation`
--
ALTER TABLE `type_formation`
  ADD PRIMARY KEY (`id_t`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `adresse`
--
ALTER TABLE `adresse`
  MODIFY `id_a` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT pour la table `formation`
--
ALTER TABLE `formation`
  MODIFY `id_f` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT pour la table `prestataire`
--
ALTER TABLE `prestataire`
  MODIFY `id_p` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `salarié`
--
ALTER TABLE `salarié`
  MODIFY `id_s` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT pour la table `type_formation`
--
ALTER TABLE `type_formation`
  MODIFY `id_t` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
