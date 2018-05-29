-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Mar 29 Mai 2018 à 07:18
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
(14, '21 rue Georges M&eacute;li&egrave;s', 'Cormeilles en Parisis', '95240'),
(12, '10 avdeve', 'paris', '78360'),
(13, '11 av honore de balzac', 'montesson', '78360'),
(15, '11 av honor&eacute; de balzac', 'montesson', '78360'),
(16, '11 av honor&eacute; de balzac', 'montesson', '78360'),
(17, '11 av honor&eacute; de balzac', 'montesson', '78360'),
(18, '11 av honor&eacute; de balzac', 'montesson', '78360'),
(19, '11 av honor&eacute; de balzac', 'montesson', '78360'),
(20, '11 av honor&eacute; de balzac', 'montesson', '78360'),
(21, '11 av honor&eacute; de balzac', 'montesson', '78360'),
(22, '11 av honor&eacute; de balzac', 'montesson', '78360'),
(23, '11 av honor&eacute; de balzac', 'montesson', '78360'),
(24, '11 av honor&eacute; de balzac', 'Montesson', '78360'),
(25, '11 av honor&eacute; de balzac', 'Montesson', '78360'),
(26, '11 av honor&eacute; de balzac', 'Montesson', '78360'),
(27, '11 av honor&eacute; de balzac', 'Montesson', '78360'),
(28, '11 av honor&eacute; de balzac', 'Montesson', '78360'),
(29, '11 av honor&eacute; de balzac', 'Montesson', '78360');

-- --------------------------------------------------------

--
-- Structure de la table `formation`
--

CREATE TABLE `formation` (
  `id_f` int(11) NOT NULL,
  `Titre` varchar(255) NOT NULL,
  `contenu` text,
  `prerequis` varchar(255) DEFAULT NULL,
  `date_deb` varchar(50) DEFAULT NULL,
  `nbr_jour` int(11) DEFAULT NULL,
  `cout_credit` int(11) NOT NULL,
  `id_t` int(11) DEFAULT NULL,
  `id_a` int(11) DEFAULT NULL,
  `id_p` int(11) NOT NULL,
  `etat` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `formation`
--

INSERT INTO `formation` (`id_f`, `Titre`, `contenu`, `prerequis`, `date_deb`, `nbr_jour`, `cout_credit`, `id_t`, `id_a`, `id_p`, `etat`) VALUES
(9, 'test', 'fzvzjv', '	pnvpnevpm', '2018-03-12', 15, 15, 2, 14, 1, 1),
(10, 'titre', 'aaaaaaaaaaaaaaaaaaaaaa', 'bbbbbbbbbbbbbbbbbbbbbbbbbbbb', '2018-04-19', 15, 15, 2, 17, 2, 1),
(11, 'Form2', 'INSERT INTO formation(Titre,contenu,prerequis,date_deb,nbr_jour,cout_credit,id_t,id_a,id_p)  Values(:Titre ,:contenu , :prerequis , :date_deb,:nbr_jour,:cout_credit,:id_t,:id_a,:id_p) ', 'INSERT INTO formation(Titre,contenu,prerequis,date_deb,nbr_jour,cout_credit,id_t,id_a,id_p)  Values(:Titre ,:contenu , :prerequis , :date_deb,:nbr_jour,:cout_credit,:id_t,:id_a,:id_p) ', '2018-04-19', 16, 100, 2, 22, 1, 1),
(12, 'Form3', 'INSERT INTO formation(Titre,contenu,prerequis,date_deb,nbr_jour,cout_credit,id_t,id_a,id_p)  Values(:Titre ,:contenu , :prerequis , :date_deb,:nbr_jour,:cout_credit,:id_t,:id_a,:id_p) ', 'INSERT INTO formation(Titre,contenu,prerequis,date_deb,nbr_jour,cout_credit,id_t,id_a,id_p)  Values(:Titre ,:contenu , :prerequis , :date_deb,:nbr_jour,:cout_credit,:id_t,:id_a,:id_p) ', '2018-01-03', 15, 200, 2, 23, 1, 1),
(13, 'T1', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam id ipsa est repellat porro, et hic accusantium consequatur pariatur optio in tempora eaque repudiandae earum aut recusandae, officiis, saepe sapiente.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam id ipsa est repellat porro, et hic accusantium consequatur pariatur optio in tempora eaque repudiandae earum aut recusandae, officiis, saepe sapiente.', '2018-07-18', 3, 1000, 2, 25, 1, 0),
(14, 'T2', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam id ipsa est repellat porro, et hic accusantium consequatur pariatur optio in tempora eaque repudiandae earum aut recusandae, officiis, saepe sapiente.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam id ipsa est repellat porro, et hic accusantium consequatur pariatur optio in tempora eaque repudiandae earum aut recusandae, officiis, saepe sapiente.', '2018-07-18', 4, 1500, 2, 26, 1, 0),
(15, 'T3', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam id ipsa est repellat porro, et hic accusantium consequatur pariatur optio in tempora eaque repudiandae earum aut recusandae, officiis, saepe sapiente.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam id ipsa est repellat porro, et hic accusantium consequatur pariatur optio in tempora eaque repudiandae earum aut recusandae, officiis, saepe sapiente.', '2018-07-18', 5, 5500, 2, 27, 1, 0);

-- --------------------------------------------------------

--
-- Structure de la table `participer`
--

CREATE TABLE `participer` (
  `id_s` int(11) NOT NULL,
  `id_f` int(11) NOT NULL,
  `etat` int(11) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `participer`
--

INSERT INTO `participer` (`id_s`, `id_f`, `etat`) VALUES
(21, 10, 3),
(20, 9, 3),
(20, 10, 3),
(21, 12, 3),
(21, 11, 3),
(20, 12, 3),
(20, 11, 3),
(24, 14, 2),
(24, 13, 1),
(23, 9, 3),
(22, 14, 1),
(22, 13, 1),
(20, 13, 1);

-- --------------------------------------------------------

--
-- Structure de la table `prestataire`
--

CREATE TABLE `prestataire` (
  `id_p` int(11) NOT NULL,
  `nom_p` varchar(50) DEFAULT NULL,
  `id_a` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `prestataire`
--

INSERT INTO `prestataire` (`id_p`, `nom_p`, `id_a`) VALUES
(1, 'Orange', 11),
(2, 'Apic', 18),
(3, 'Apic', 20);

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
(24, 'popy', 'popy', 'popy@gmail.com', '7581f9f7cb4e2c129cf3994be96f620fca5eb4c0', 0, 4000, 12, 29, 22),
(20, 'Luc', 'Leveque', 'luc.leveque@gmail.com', '7581f9f7cb4e2c129cf3994be96f620fca5eb4c0', 1, 4000, 12, 15, NULL),
(21, 'Toto', 'Toto', 'Toto@gmail.com', '7581f9f7cb4e2c129cf3994be96f620fca5eb4c0', 0, 5000, 15, 16, 20),
(22, 'popo', 'pipi', 'popo@gmail.com', '7581f9f7cb4e2c129cf3994be96f620fca5eb4c0', 1, 2500, 8, 24, NULL),
(23, 'Teemo', 'Champi', 'teemo@gmail.com', '7581f9f7cb4e2c129cf3994be96f620fca5eb4c0', 0, 4985, 0, 28, 22);

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
(2, 'Présentiel '),
(3, 'Distenciel'),
(4, 'Les deux');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `adresse`
--
ALTER TABLE `adresse`
  ADD PRIMARY KEY (`id_a`);

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
  MODIFY `id_a` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT pour la table `formation`
--
ALTER TABLE `formation`
  MODIFY `id_f` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT pour la table `prestataire`
--
ALTER TABLE `prestataire`
  MODIFY `id_p` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `salarié`
--
ALTER TABLE `salarié`
  MODIFY `id_s` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT pour la table `type_formation`
--
ALTER TABLE `type_formation`
  MODIFY `id_t` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
