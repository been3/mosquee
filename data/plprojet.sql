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
-- Procédures MySQL
--

--
-- Procédure P_RESERVATION
--

DELIMITER $$

CREATE PROCEDURE p_reservation(`chambre` VARCHAR(15), `date` DATE, `duree` INT, client VARCHAR(15), `nb_personnes` INT)
BEGIN
	IF duree < 8
		AND TIMESTAMPDIFF(MONTH, CURDATE(), date) < 6
        AND (SELECT COUNT(*) FROM `booking` WHERE `booking_datestart` = `date`) = 0
        AND (SELECT COUNT(*) FROM `booking` WHERE `booking_idclient` = `client` AND `booking_canceled` = 0) < 2 THEN
		INSERT INTO `booking` (`booking_idbooking`, `booking_idroom`, `booking_idclient`, `booking_idpayment`, `booking_datestart`, `booking_dateend`, `booking_nbnights`, `booking_price`, `booking_canceled`) VALUES
		('684100734059023', `chambre`, `client`, CONVERT(FLOOR( 111111111111111 + RAND( ) * 999999999999999 ), CHAR(15)) , `date`, DATE_ADD(`date` , INTERVAL `duree` DAY), TIMESTAMPDIFF(DAY, `date`, DATE_ADD(`date` , INTERVAL `duree` DAY)), 120, 0);
    END IF;
END $$

--
-- Procédure P_ANNULE_RESERVATION
--

CREATE PROCEDURE p_annule_reservation(`reservation` VARCHAR(15))
BEGIN
	UPDATE `booking` SET `booking_canceled`=1 WHERE `booking_idbooking`=`reservation`;
END $$

DELIMITER ;