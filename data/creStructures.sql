-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 07 Avril 2016 à 15:37
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `lesziagsdb`
--

-- --------------------------------------------------------

--
-- Structure de la table `address`
--

CREATE TABLE IF NOT EXISTS `address` (
  `address_idadress` varchar(15) NOT NULL,
  `address_country` varchar(20) NOT NULL,
  `address_zipcode` int(10) NOT NULL,
  `address_street` varchar(50) NOT NULL,
  `address_streetnumber` int(4) NOT NULL,
  PRIMARY KEY (`address_idadress`),
  UNIQUE KEY `address_idadress` (`address_idadress`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `admin_idadmin` varchar(15) NOT NULL,
  `admin_password` varchar(20) NOT NULL,
  `admin_firstname` varchar(50) NOT NULL,
  `admin_lastname` varchar(20) NOT NULL,
  PRIMARY KEY (`admin_idadmin`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `booking`
--

CREATE TABLE IF NOT EXISTS `booking` (
  `booking_idbooking` varchar(15) NOT NULL,
  `booking_idroom` varchar(15) NOT NULL,
  `booking_idclient` varchar(15) NOT NULL,
  `booking_idpayment` varchar(15) NOT NULL,
  `booking_datestart` date NOT NULL,
  `booking_dateend` date NOT NULL,
  `booking_price` int(5) NOT NULL,
  PRIMARY KEY (`booking_idbooking`),
  UNIQUE KEY `booking_idclient` (`booking_idclient`),
  UNIQUE KEY `booking_idpayment` (`booking_idpayment`),
  KEY `booking_idroom` (`booking_idroom`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE IF NOT EXISTS `client` (
  `client_idclient` varchar(15) NOT NULL,
  `client_firstname` varchar(50) NOT NULL,
  `client_lastname` varchar(50) NOT NULL,
  `client_idadress` varchar(15) NOT NULL,
  `client_cellphone` int(10) NOT NULL,
  `client_fbaccount` varchar(50) NOT NULL,
  `client_gender` varchar(3) NOT NULL,
  PRIMARY KEY (`client_idclient`),
  UNIQUE KEY `client_idclient` (`client_idclient`),
  UNIQUE KEY `client_cellphone` (`client_cellphone`),
  UNIQUE KEY `client_fbaccount` (`client_fbaccount`),
  UNIQUE KEY `client_idadress_2` (`client_idadress`),
  KEY `client_idadress` (`client_idadress`),
  KEY `client_firstname` (`client_firstname`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `contact_idcontact` varchar(15) NOT NULL,
  `contact_name` varchar(50) NOT NULL,
  `contact_mail` varchar(50) NOT NULL,
  `contact_subject` varchar(100) NOT NULL,
  `contact_message` text NOT NULL,
  PRIMARY KEY (`contact_idcontact`),
  KEY `contact_mail` (`contact_mail`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `payment`
--

CREATE TABLE IF NOT EXISTS `payment` (
  `payment_idpayment` varchar(15) NOT NULL,
  `payment_idclient` varchar(15) NOT NULL,
  `payment_idaddress` varchar(15) NOT NULL,
  `payment_cardtype` varchar(20) NOT NULL,
  `payment_cardnb` int(16) NOT NULL,
  `payment_crypto` int(3) NOT NULL,
  `payment_expiration` date NOT NULL,
  PRIMARY KEY (`payment_idpayment`),
  UNIQUE KEY `payment_idaddress` (`payment_idaddress`),
  UNIQUE KEY `payment_idclient_2` (`payment_idclient`),
  KEY `payment_idclient` (`payment_idclient`),
  KEY `payment_idaddress_2` (`payment_idaddress`),
  KEY `payment_cardtype` (`payment_cardtype`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `room`
--

CREATE TABLE IF NOT EXISTS `room` (
  `room_idroom` varchar(15) NOT NULL,
  `room_type` varchar(5) NOT NULL,
  `room_vue` varchar(5) NOT NULL,
  `room_capacity` int(1) NOT NULL,
  `room_highpricing` int(11) NOT NULL,
  `room_lowpricing` int(11) NOT NULL,
  PRIMARY KEY (`room_idroom`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_ibfk_3` FOREIGN KEY (`booking_idpayment`) REFERENCES `payment` (`payment_idpayment`),
  ADD CONSTRAINT `booking_ibfk_1` FOREIGN KEY (`booking_idroom`) REFERENCES `room` (`room_idroom`),
  ADD CONSTRAINT `booking_ibfk_2` FOREIGN KEY (`booking_idclient`) REFERENCES `client` (`client_idclient`);

--
-- Contraintes pour la table `client`
--
ALTER TABLE `client`
  ADD CONSTRAINT `client_ibfk_1` FOREIGN KEY (`client_idadress`) REFERENCES `address` (`address_idadress`);

--
-- Contraintes pour la table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `payment_ibfk_2` FOREIGN KEY (`payment_idaddress`) REFERENCES `address` (`address_idadress`),
  ADD CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`payment_idclient`) REFERENCES `client` (`client_idclient`);