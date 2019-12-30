-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Lun 30 Décembre 2019 à 17:21
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `moduleconnexion`
--
CREATE DATABASE IF NOT EXISTS `moduleconnexion` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `moduleconnexion`;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=45 ;

--
-- Contenu de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`Id`, `login`, `prenom`, `nom`, `password`) VALUES
(1, 'admin', 'admin', 'admin', '$2y$12$tPnw2GzDlaikoqxdxGenGe1EnIhF19adW7JMwzKohojTGfGvvmj4W'),
(36, 'lol1234', 'lol1234', 'lol1234', '$2y$10$MPtfSf4zlwCo6MAU9Rzk0eBCnr3mwJB.TRrDdztTaYW1N0n7PRVd6'),
(37, 'PO123', 'b', 'john', '$2y$10$nDLrgTg0mNICAvZdDJ7s2eZ/ch82xXVFB8EiGeLsQcIKAX6gjOzS2'),
(38, 'hugo', 'hugo', 'hugo', '$2y$10$ZMaupJOjYse86KFauDqZO.CCiSYHxJlPk3thbsaDc6wTv4.rq906i'),
(39, 'dre', 'azes', 'john', '$2y$10$uHxyvX/EGnE9MZnE6vhDOe5f1JkQRoJtvMKdTSEsjmftbbMFej6SO'),
(40, 'azert', 'azert', 'azert', 'azert'),
(41, 'azerty', 'azerty', 'azerty', '$2y$12$l7FXJbRu32vYr1Ex1vQxJuaHE/TJ3HnW.9qld1rXVtD5hH8wsOXI.'),
(42, 'test', 'test', 'test', '$2y$12$ZgfIaObbsglIacKwednZX.WVNdx26C7TRFLuBCWBm3MJYaBcJLbbu');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
