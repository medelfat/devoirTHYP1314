-- phpMyAdmin SQL Dump
-- version 3.5.3
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Mar 17 Décembre 2013 à 14:39
-- Version du serveur: 5.5.25
-- Version de PHP: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `etunote`
--

-- --------------------------------------------------------

--
-- Structure de la table `ETUDIANTS`
--

CREATE TABLE IF NOT EXISTS `ETUDIANTS` (
  `IDETUDIANT` mediumint(9) NOT NULL AUTO_INCREMENT,
  `NOM` char(50) DEFAULT NULL,
  `PRENOM` char(50) DEFAULT NULL,
  PRIMARY KEY (`IDETUDIANT`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `ETUDIANTS`
--

INSERT INTO `ETUDIANTS` (`IDETUDIANT`, `NOM`, `PRENOM`) VALUES
(1, 'MOHAMED-KATIBOU', 'Mohamed'),
(2, 'ATHOUMANI', 'Mohamed');

-- --------------------------------------------------------

--
-- Structure de la table `EXERCICES`
--

CREATE TABLE IF NOT EXISTS `EXERCICES` (
  `IDEXERCICE` mediumint(9) NOT NULL AUTO_INCREMENT,
  `INTITULE` char(50) DEFAULT NULL,
  PRIMARY KEY (`IDEXERCICE`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `EXERCICES`
--

INSERT INTO `EXERCICES` (`IDEXERCICE`, `INTITULE`) VALUES
(1, 'Base de donnee'),
(2, 'Web design');

-- --------------------------------------------------------

--
-- Structure de la table `NOTES`
--

CREATE TABLE IF NOT EXISTS `NOTES` (
  `IDEXERCICE` int(11) NOT NULL,
  `IDETUDIANT` int(11) NOT NULL,
  `NOTE` int(11) NOT NULL DEFAULT '0',
  KEY `IDETUDIANT` (`IDETUDIANT`),
  KEY `IDEXERCICE` (`IDEXERCICE`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
