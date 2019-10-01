-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Lun 27 Mai 2019 à 09:53
-- Version du serveur: 5.5.38-0ubuntu0.14.04.1-log
-- Version de PHP: 5.5.9-1ubuntu4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `SlamQuiz`
--
#-------------------------------------------------------------------------------
#  Effacer la BD (si elle existait déjà)
#
DROP DATABASE IF EXISTS SlamQuiz ;

#-------------------------------------------------------------------------------
#  Créer la BD
#

CREATE DATABASE SlamQuiz ;

#-------------------------------------------------------------------------------
#  Utiliser la BD
#

USE SlamQuiz ;
-- --------------------------------------------------------

--
-- Structure de la table `Question`
--

CREATE TABLE IF NOT EXISTS `Question` (
  `Id_Question` int(11) NOT NULL AUTO_INCREMENT,
  `shortname` varchar(50) NOT NULL,
  `longname` varchar(255) NOT NULL,
  PRIMARY KEY (`Id_Question`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `Question`
--

INSERT INTO `Question` (`Id_Question`, `shortname` , `longname`) VALUES
(1, 'Les QCM' , 'Aimez vous les QCM ?'),
(2, 'les math' , '1 + 1 ?'),
(3, 'Les QCM' , 'zalut ?'),
(4, 'Les QCM' , 'pas mal ?'),
(5, 'Les QCM' , 'sympa ?'),
(6, 'Les QCM' , 'nice ?'),
(7, 'Les QCM' , 'GJ ?'),
(8, 'Les QCM' , 'hello world ?'),
(9, 'Les QCM' , 'coucou ?'),
(10, 'Les QCM' , 'I AM THE ONE ?'),
(11, 'Le SLAM' , 'Tu aime ta section ?');



-- --------------------------------------------------------

--
-- Structure de la table `eleve`
--

CREATE TABLE IF NOT EXISTS `eleve` (
  `id_eleve` int(11) NOT NULL AUTO_INCREMENT,
  `nom_eleve` varchar(30) NOT NULL DEFAULT '',
  `prenom_eleve` varchar(30) NOT NULL DEFAULT '',
  PRIMARY KEY (`id_eleve`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `eleve`
--

INSERT INTO `eleve` (`id_eleve`, `nom_eleve`, `prenom_eleve`) VALUES
(0, 'Gondet', 'Loïc'),
(1, 'Rozel', 'Thibault'),
(2, 'Dos-santos', 'Goncalves'),
(3, 'Boutleux', 'Florent');