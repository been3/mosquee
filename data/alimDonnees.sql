--
-- Contenu de la table `address`
--

INSERT INTO `address` (`address_idadress`, `address_country`, `address_zipcode`, `address_street`, `address_streetnumber`) VALUES
('032264298582877', 'France', 75010, 'Place Franz Liszt', 9),
('038260105957743', 'France', 75010, 'Rue de Maubeuge', 15),
('121833146454724', 'France', 75010, 'Rue des petites écuries', 63),
('145103856490457', 'France', 75010, 'Rue de Chantilly', 36),
('146763780528467', 'France', 75010, 'Rue des Messageries', 3),
('192669318536124', 'France', 75012, 'Bd Soult', 20),
('269587528770834', 'France', 75010, 'Bd de Strasbourg', 49),
('295716028850471', 'France', 75010, 'Rue des petits hotels', 16),
('360317530472427', 'France', 75006, 'Rue du rendez vous', 15),
('435645159724179', 'France', 75009, 'Rue de paradis', 17),
('585751812538144', 'France', 75010, 'Rue de Chabrol', 13),
('829703239777510', 'France', 75010, 'Rue La Fayette', 167),
('955080830101260', 'France', 75010, 'Bd de magenta', 160);

-- --------------------------------------------------------

--
-- Contenu de la table `client`
--

INSERT INTO `client` (`client_idclient`, `client_firstname`, `client_lastname`, `client_idadress`, `client_cellphone`, `client_fbaccount`, `client_gender`) VALUES
('002575809122241', 'Bruce', 'Lee', '360317530472427', 681467320, '296588003496600', 'Mr'),
('070664366577056', 'Antonio', 'Banderas', '269587528770834', 632067984, '731086030942969', 'Mr'),
('128337331996824', 'Jason', 'Statham', '435645159724179', 607428659, '539356055332969', 'Mr'),
('193218678256004', 'Chuck', 'Norris', '829703239777510', 672913850, '420059607638169', 'Mr'),
('221555694418456', 'Silvester', 'Stalone', '295716028850471', 661730952, '540825896536158', 'Mr'),
('263675434720337', 'Glenn', 'Powell', '145103856490457', 648726519, '766423285006838', 'Mr'),
('313020643710768', 'Harrison', 'Ford', '955080830101260', 642983510, '862965144098101', 'Mr'),
('483515114342363', 'Willem', 'Dafoe', '585751812538144', 678943250, '300155151184955', 'Mr'),
('547973475026363', 'Arnold', 'Schwarzenegger', '121833146454724', 676015324, '613388592555260', 'Mr'),
('648678037313015', 'Alex', 'Benoit', '192669318536124', 622716923, '912725173013478', 'Mr'),
('745634011624345', 'Jet', 'Li', '032264298582877', 693247850, '426348933397011', 'Mr'),
('955474215314800', 'Jean-Claude', 'Van Damme', '038260105957743', 656897421, '709610890984187', 'Mr');

-- --------------------------------------------------------

