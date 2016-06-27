-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Ven 24 Juin 2016 à 13:44
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `stagetest`
--

-- --------------------------------------------------------

--
-- Structure de la table `eleve`
--

CREATE TABLE IF NOT EXISTS `eleve` (
  `IdEleve` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` text NOT NULL,
  `Prenom` text NOT NULL,
  `Adresse-mail` text NOT NULL,
  `Classe` text NOT NULL,
  `Login` text NOT NULL,
  `Mdp` text NOT NULL,
  PRIMARY KEY (`IdEleve`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=46 ;

--
-- Contenu de la table `eleve`
--

INSERT INTO `eleve` (`IdEleve`, `Nom`, `Prenom`, `Adresse-mail`, `Classe`, `Login`, `Mdp`) VALUES
(1, 'Baert', 'Annabelle', 'annabaert.isa@gmail.com', 'Annee spéciale', 'Annabaert', '1234'),
(2, 'Marolle', 'Emilie', 'marolleemilie@gmail.com', 'Licence pro alternant', 'emiliemarolle', '1234567'),
(45, 'annabelle', 'annabelle', 'isabelle.baert0920@orange.fr', 'LPA', 'isabelle.baert0920@orange.fr', '123456');

-- --------------------------------------------------------

--
-- Structure de la table `forum_reponses`
--

CREATE TABLE IF NOT EXISTS `forum_reponses` (
  `IdForRep` int(11) NOT NULL AUTO_INCREMENT COMMENT 'forum reponses',
  `Auteur` varchar(30) DEFAULT NULL,
  `Message` text,
  `Date_rep` date DEFAULT NULL,
  `Correspondance_sujet` int(11) DEFAULT NULL,
  PRIMARY KEY (`IdForRep`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `forum_sujet`
--

CREATE TABLE IF NOT EXISTS `forum_sujet` (
  `IdForSuj` int(11) NOT NULL AUTO_INCREMENT COMMENT 'forum sujet',
  `Auteur` varchar(30) DEFAULT NULL,
  `Titre` text,
  `Date_der_rep` date NOT NULL COMMENT 'date_derniere_reponse',
  PRIMARY KEY (`IdForSuj`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `prof`
--

CREATE TABLE IF NOT EXISTS `prof` (
  `IdProf` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` text NOT NULL,
  `Prenom` text NOT NULL,
  `Adresse-mail` text NOT NULL,
  `Login` text NOT NULL,
  `MDP` text NOT NULL,
  PRIMARY KEY (`IdProf`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Contenu de la table `prof`
--

INSERT INTO `prof` (`IdProf`, `Nom`, `Prenom`, `Adresse-mail`, `Login`, `MDP`) VALUES
(4, 'Fari', 'Franck', 'franck.fari@gmail.com', 'f.fari', '1234'),
(5, 'annabelle', 'annabelle', 'isabelle.baert0920@orange.fr', 'isabelle.baert0920@orange.fr', '1234'),
(6, 'Gallet', 'Alban', 'Gallet.Alban@gmail.com', 'Gallet.Alban', '123456');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
