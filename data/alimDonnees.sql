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
-- Contenu de la table `admin`
--

INSERT INTO `admin` (`admin_idadmin`, `admin_clearancelevel`, `admin_connectionid`, `admin_password`, `admin_firstname`, `admin_lastname`) VALUES
('822456392446873','admin', 'evansuau', 'evansuaupass', 'Evan', 'Suau'),
('861950338236232', 'operator', 'alexbenoit', 'alexbenoitpass', 'Alex', 'Benoit');

-- --------------------------------------------------------

--
-- Contenu de la table `booking`
--

INSERT INTO `booking` (`booking_idbooking`, `booking_idroom`, `booking_idclient`, `booking_idpayment`, `booking_datestart`, `booking_dateend`, `booking_nbnights`, `booking_price`, `booking_canceled`) VALUES
  ('053486066036814', '351121263345080', '283791560284425', '010676039744280', '2015-09-21', '2015-09-28', 7, 350, 0),
  ('106655764889758', '899138560777141', '909045727040064', '711628009521170', '2015-07-08', '2015-07-22', 14, 720, 0),
  ('109717999367007', '416150266523157', '811427430581563', '667621298949090', '2016-02-13', '2016-02-20', 7, 280, 0),
  ('116209544503021', '327476087102722', '221555694418456', '490534052675015', '2016-01-06', '2016-01-08', 2, 40, 1),
  ('156368688111489', '295931517461477', '080982148937646', '229385541253565', '2016-01-01', '2016-04-15', 14, 420, 1),
  ('219064338136745', '899138560777141', '710993230597843', '965587294581444', '2016-02-03', '2016-02-04', 2, 90, 0),
  ('250032969873267', '697525904599998', '547973475026363', '096957435434728', '2015-10-01', '2015-10-02', 1, 45, 0),
  ('268831104860215', '359980084806378', '524246277730405', '243898195833828', '2016-01-16', '2016-01-30', 14, 560, 1),
  ('547548960464819', '351121263345080', '483515114342363', '015655602874901', '2016-01-21', '2016-01-28', 7, 350, 0),
  ('570849879610452', '363068395727716', '769848677015631', '757505102746391', '2015-08-15', '2015-08-29', 14, 1050, 0),
  ('634896724603988', '729078067450345', '570989037607457', '415404748906350', '2016-04-28', '2016-04-29', 2, 120, 0),
  ('674766211553117', '284670491116657', '321175600175094', '874105267486296', '2015-03-11', '2015-03-25', 14, 280, 0),
  ('682937542235186', '133736476874872', '759341617103113', '468159171102942', '2015-07-01', '2015-07-08', 7, 280, 0),
  ('684100734059023', '295931517461477', '056675492090332', '785389699301768', '2016-01-03', '2016-04-15', 12, 480, 1),
  ('685482943806137', '729078067450345', '616592489513199', '105655703505521', '2015-08-15', '2015-08-22', 7, 560, 0),
  ('686604975627700', '534938849246982', '128337331996824', '490285460542367', '2015-09-10', '2015-09-11', 1, 60, 0),
  ('731058976370435', '133736476874872', '002575809122241', '706498103662680', '2015-09-01', '2015-09-07', 7, 210, 0),
  ('738158940885836', '327476087102722', '798954631549334', '872563634024260', '2015-08-01', '2015-08-15', 14, 420, 1),
  ('846167606388504', '899138560777141', '070664366577056', '801712608410498', '2016-02-16', '2016-02-19', 3, 135, 0),
  ('873029225069454', '327476087102722', '955474215314800', '318429907657090', '2016-02-10', '2016-04-24', 14, 280, 0);

-- --------------------------------------------------------

--
-- Contenu de la table `client`
--

INSERT INTO `client` (`client_idclient`, `client_firstname`, `client_lastname`, `client_cellphone`, `client_fbaccount`, `client_mail`, `client_gender`, `client_age`, `client_clientid`, `client_clientpass`, `client_country`, `client_city`, `client_zipcode`, `client_street`, `client_streetnumber`) VALUES
  ('002575809122241', 'Bruce', 'Lee', '0681467320', '296588003496600', 'brucelee@gmail.com', 'Mr', 57, 'bruceleeid', 'bruceleepass', 'France', 'Trébeuden', 22560, 'Chemin de Kerglet', '8'),
  ('056675492090332', 'Harvey', 'Keitel', '0658267391', '565296307602995', 'harveykeitel@gmail.com', 'Mr', 46, 'harveykeitelid', 'harveykeitelpass', 'France', 'Montargis', 45200, 'Rue Dorée', '6'),
  ('069959128031004', 'Gary', 'Daniels', '0621803794', '911551207783870', 'Gary.daniels@gmail.com', 'Mr', 52, 'garydanielsid', 'garydanielspass', 'France', 'Paris', 75010, 'Place Franz List', '12'),
  ('070664366577056', 'Antonio', 'Banderas', '0632067984', '731086030942969', 'AntonioBanderas@gmail.com', 'Mr', 49, 'antoniobanderasid', 'antoniobanderaspass', 'France', 'Paris', 75010, 'Rue de Maubeuge', '7'),
  ('080982148937646', 'Kelsey', 'Grammer', '0624751389', '0646759832116983', 'Kelseygrammer@hotmail.fr', 'Mr', 48, 'kelseygrammerid', 'kelseygrammepass', 'France', 'Meulin', 75000, 'Rue du Méjou', '6'),
  ('128337331996824', 'Jason', 'Statham', '0607428659', '539356055332969', 'JAsonstatham@gmail.com', 'Mr', 63, 'jasonstathamid', 'jasonstathampass', 'France', 'Plougasnou', 29630, 'Avenue de Corbeil', '46'),
  ('193218678256004', 'Chuck', 'Norris', '0672913850', '420059607638169', 'Chucknorris@gmail.com', 'Mr', 58, 'chucknorrisid', 'chucknorrispass', 'France', 'Paris', 75010, 'Rue des petites écuries', '3 Bis'),
  ('221555694418456', 'Silvester', 'Stalone', '0661730952', '540825896536158', 'Silvesterstalone@gmail.com', 'Mr', 30, 'silvesterstaloneid', 'sivesterstalonepass', 'France', 'Paris', 75010, 'Rue des Messageries', '15'),
  ('225930639501410', 'Danny', 'Trejo', '0630164798', '735120261447556', 'Danytrejo@gmail.com', 'Mr', 0, 'dannytreajoid', 'dannytrejopass', 'France', 'Paris', 75010, 'Rue de Chantilly', '8'),
  ('263675434720337', 'Glenn', 'Powell', '0648726519', '766423285006838', 'glennpwell@gmail.com', 'Mr', 50, 'glennpowellid', 'glenpowellpass', 'France', 'Brest', 29200, 'Rue Frégate de la Boussolle', '87'),
  ('272220468028796', 'Eric', 'Roberts', '0682365097', '260155646564611', 'ericroberts@gmail.com', 'Mr', 48, 'ericrobertsid', 'ericrobertpass', 'France', 'Paris', 75010, 'Bd de Strassebourg', '45'),
  ('283791560284425', 'Scott', 'Adkins', '0676215840', '586834409970449', 'scottadkins@gmail.com', 'Mr', 67, 'scottadkinsid', 'scottadkinspass', 'France', 'Dunkerke', 59240, 'Rue Victor Hugo', '12'),
  ('313020643710768', 'Harrison', 'Ford', '0642983510', '862965144098101', 'harrissonford@gmail.com', 'Mr', 67, 'harrissonfordid', 'harrissonfordpass', 'France', 'Ploulec''h', 22300, 'Route de Kerjean', '63'),
  ('321175600175094', 'Randy', 'Couture', '0683725019', '700224729731519', 'randycouture@gmail.Com', 'Mr', 39, 'randycoutureid', 'randycouturepass', 'France', 'Paris', 75006, 'Rue de Rendez-Vous', '15'),
  ('474950637810686', 'David', 'Zayas', '0605623819', '978437230192585', 'Davidzayas@gmail.com', 'Mr', 58, 'davidzayasid', 'davidzayaspass', 'France', 'Concarneau', 29900, 'Rue de Kernéac''h', '26'),
  ('483515114342363', 'Willem', 'Dafoe', '0678943250', '300155151184955', 'willemdafoe@gmail.com', 'Mr', 64, 'willemdafoeid', 'willemdafoepass', 'France', 'Paris', 75010, 'Rue de l''Aqueduc', '16'),
  ('484689839128899', 'Victor', 'Ortiz', '0654807629', '975734163814290', 'victorornitz@gmail.com', 'Mr', 57, 'victorortizid', 'victorortizpass', 'France', 'Paris', 75009, 'Rue de Paradis', '12'),
  ('524246277730405', 'Yu', 'Nan', '0620168543', '458669858876989', 'yunan@gmail.com', 'Mr', 52, 'yunanid', 'yunanpass', 'France', 'Kerdoualen', 29350, 'Rue Kreiz Ker', '13'),
  ('547973475026363', 'Arnold', 'Schwarzenegger', '0676015324', '613388592555260', 'arnoldschwarzenegger@gmail.com', 'Mr', 69, 'arnoldschwarzenneger', 'arnoldschwarzenneger', 'France', 'Ploubazlanec', 22620, 'Rue du Kergadou', '7'),
  ('568837043354025', 'Ronda', 'Rousey', '0705863942', '890137817406411', 'rondarousey@gmail.com', 'Mrs', 36, 'rondarouseyid', 'rondarouseypass', 'France', 'Paris', 75010, 'Rue de Chabrol', '45'),
  ('570989037607457', 'Kellan', 'Lutz', '0689024716', '091737144461597', 'kellanlutz@gmail.com', 'Mr', 58, 'kellanlutzid', 'kellanlutzpass', 'France', 'Lannion', 22304, 'Rue du Muguet', '14'),
  ('578591030154579', 'Mel', 'Gibson', '0657130284', '993452233555887', 'melgibson@gmail.com', 'Mr', 66, 'melgibsonid', 'melgibsonpass', 'France', 'Trévou-Tréguinec', 22660, 'Rue de Kerguanton', '46'),
  ('616592489513199', 'Charisma', 'Carpenter', '0630792685', '164738615490816', 'charismacarpenter@gmail.com', 'Mrs', 55, 'charismacarpenterid', 'charismacarpenterpas', 'France', 'Kerguillaouët', 22660, 'Rue Hent Sabi', '6'),
  ('633283314208448', 'Mickey', 'Rourke', '0607192483', '372663597260927', 'mickeyrourke@gmail.com', 'Mr', 59, 'mickeyrourkeid', 'mickeyrourkepass', 'France', 'Plouguerneau', 29880, 'Route de Kerveogan', '6'),
  ('710993230597843', 'Liam', 'Hemsworth', '0695826034', '698648268483524', 'liamhemsworth@gmail.com', 'Mr', 38, 'liamhemsworthid', 'liamhemsworthpass', 'France', 'Paris', 75012, 'Rue du Château-Lanndon', '5'),
  ('745634011624345', 'Jet', 'Li', '0693247850', '426348933397011', 'jetli@gmail.com', 'Mr', 62, 'jetliid', 'jetlipass', 'France', 'Paris', 75010, 'Rue La Fayette', '12'),
  ('759341617103113', 'Bruce', 'Willis', '0613490625', '368722331783690', 'brucewillis@gmail.com', 'Mr', 64, 'brucewillisid', 'brucewillispass', 'France', 'Perros-Guirec', 22700, 'Route du Kern', '15'),
  ('769848677015631', 'Giselle', 'Itié', '0658976302', '522520410546248', 'giselleitié@gmail.com', 'Mrs', 43, 'giselleitiéid', 'giselleitié', 'France', 'Paris', 75010, 'Bd de Magenat', '14'),
  ('798954631549334', 'Olga', 'Kurylenko', '0646059823', '475160082689625', 'olgakurylenko@gmail.com', 'Mrs', 47, 'olgakurylenkoid', 'olgakurylenkopass', 'France', 'Reims', 51120, 'Rue Charlier', '49'),
  ('811427430581563', 'Terry', 'Crews', '0732587610', '677275666469484', 'terrycrews@gmail.com', 'Mr', 67, 'terrycrewsid', 'terrycrewspass', 'France', 'Ploudalmézeau', 29830, 'Avenue de Kerlech', '23'),
  ('909045727040064', 'Wesley', 'Snipes', '0659417682', '933970678408051', 'wesleysnipes@gmail.com', 'Mr', 36, 'wesleyspinesid', 'wesleyspinespass', 'France', 'Grenoble', 38100, 'Rue du Vercors', '26'),
  ('955474215314800', 'Jean-Claude', 'Van Damme', '0656897421', '709610890984187', 'jeanclaude@gmail.com', 'Mr', 64, 'jeanclaudeid', 'jeanclaudepass', 'France', 'Paris', 75010, 'Bd Soult', '20');

-- --------------------------------------------------------

--
-- Contenu de la table `payment`
--

INSERT INTO `payment` (`payment_idpayment`, `payment_idclient`, `payment_cardtype`, `payment_cardnb`, `payment_crypto`, `payment_expiration`) VALUES
  ('010676039744280', '283791560284425', 'American Express', 5290768951103632, 789, '2017-04-01'),
  ('015655602874901', '483515114342363', 'American Express', 6846816165261045, 754, '2017-06-01'),
  ('066597297425347', '578591030154579', 'CB', 1195906062936684, 456, '2017-08-01'),
  ('096957435434728', '547973475026363', 'CB', 969574354347282, 451, '2017-07-01'),
  ('105655703505521', '616592489513199', 'Visa', 7406873412249754, 578, '2018-01-01'),
  ('124017411102640', '474950637810686', 'CB', 4347896767544580, 864, '2017-07-01'),
  ('153968738374330', '313020643710768', 'Visa', 8976040155882012, 896, '2017-04-01'),
  ('202616621639366', '633283314208448', '564', 2621587568844704, 587, '2017-05-01'),
  ('219950278224041', '272220468028796', 'CB', 5240164770714545, 122, '2017-04-01'),
  ('229385541253565', '080982148937646', 'American Express', 7435576354981609, 889, '2018-02-01'),
  ('235617494812194', '484689839128899', 'CB', 5501623172780834, 448, '2017-09-01'),
  ('243898195833828', '524246277730405', 'CB', 1596230912857055, 484, '2017-04-01'),
  ('258954712001948', '568837043354025', 'Visa', 126976986070549, 598, '2016-07-01'),
  ('270868830063153', '069959128031004', 'Visa', 9183699179111089, 147, '2017-05-01'),
  ('318429907657090', '193218678256004', 'CB', 9682834284275724, 449, '2017-04-01'),
  ('340961590906465', '225930639501410', 'CB', 3334169294340934, 332, '2017-01-01'),
  ('396608767257425', '263675434720337', 'CB', 6880247177670167, 788, '2016-12-14'),
  ('415404748906350', '570989037607457', 'CB', 4154047485906350, 575, '2017-09-01'),
  ('468159171102942', '759341617103113', 'CB', 5609821171831614, 457, '2017-05-01'),
  ('490285460542367', '128337331996824', 'Visa', 7082836487241934, 897, '2016-10-01'),
  ('490534052675015', '221555694418456', 'American Express', 1157627999062619, 778, '2017-07-01'),
  ('667621298949090', '811427430581563', 'CB', 5179517085276154, 579, '2018-01-01'),
  ('672517619924025', '745634011624345', 'CB', 249207915700855, 458, '2017-04-01'),
  ('706498103662680', '002575809122241', 'CB', 7445423013721788, 486, '2018-01-01'),
  ('711628009521170', '909045727040064', 'CB', 9853727015487387, 487, '2017-04-01'),
  ('757505102746391', '769848677015631', 'Visa', 1812740347765515, 886, '2017-06-01'),
  ('785389699301768', '056675492090332', 'CB', 8509596760168877, 789, '2017-02-01'),
  ('801712608410498', '070664366577056', 'Visa', 4506835252369230, 486, '2017-07-01'),
  ('872563634024260', '798954631549334', 'CB', 7384944723005114, 578, '2017-06-01'),
  ('874105267486296', '321175600175094', 'Visa', 1674711374426608, 112, '2017-02-01'),
  ('965587294581444', '710993230597843', 'CB', 8046681982982475, 871, '2017-05-01');

-- --------------------------------------------------------

--
-- Contenu de la table `room`
--

INSERT INTO `room` (`room_idroom`, `room_roomnbr`, `room_floornbr`, `room_bathroom`, `room_type`, `room_view`, `room_capacity`, `room_superficy`, `room_lowpricing`, `room_highpricing`, `room_avaible`) VALUES
  ('133736476874872', 1, '1', 1, 'simple', 'A86', '1', 20, 30, 40, 1),
  ('284670491116657', 7, '2', 1, 'double', '', '2', 25, 50, 65, 1),
  ('295931517461477', 5, '1', 1, 'double', 'A86', '2', 25, 50, 75, 1),
  ('327476087102722', 11, '2', 1, 'twin', '', '2', 25, 60, 80, 1),
  ('351121263345080', 4, '1', 0, 'simple', '', '1', 15, 20, 30, 1),
  ('359980084806378', 12, '2', 0, 'twin', '', '2', 20, 45, 60, 1),
  ('363068395727716', 10, '2', 0, 'twin', 'A86', '2', 20, 45, 60, 1),
  ('416150266523157', 8, '2', 0, 'double', '', '2', 20, 40, 50, 1),
  ('534938849246982', 9, '2', 1, 'twin', 'A86', '2', 25, 60, 80, 1),
  ('697525904599998', 3, '1', 1, 'simple', '', '1', 20, 30, 40, 1),
  ('729078067450345', 2, '1', 0, 'simple', 'A86', '1', 15, 20, 30, 1),
  ('899138560777141', 6, '1', 0, 'double', 'A86', '2', 20, 40, 50, 1);