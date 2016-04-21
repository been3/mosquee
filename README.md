# Sujet du Projet L2

## Gestion des réservations hôtelières

L'hôtel familial "Les Ziags" à Créteil vous demande de réaliser une application lui permettant de gérer ses réservations.

Actuellement, les réservations se font uniquement par téléphone et totalemnet manuellement. Il vous appartient de concevoir, développer et déployer une solution répondant aux besoins de l'organisation.

## Cahier des charges

L'hôtel se compose d'une douzaine de chambres sur deux étages. Chaque chambre possède un numéro, un étage, une superficie et un certain nombre de lits. Un lit est de type simple, double ou simple superposé. La capacité de la chambre est liée aux nombre de lits déployés. Une chambre peut contenir des toilettes/douche ou dans le cas contraire, ceux-ci sont communs à un étage donné. Une chambre est située soit côté cour, soit coté A86. Le tarif d’une chambre est variable selon la saison de 80 euros pour une chambre double avec 2 lits enfants supplémentaires en haute saison à 20 euros pour une chambre simple sans toilettes en basse saison.

Une réservation est effectuée pour une chambre donnée, une période donnée, un client donné et un nombre de personnes donné. On souhaite ici connaitre un certain nombre d’informations sur la clientèle rejoignant ainsi certains aspects légaux obligatoires. (Nom, prénom, adresse, âge, nationalité, motif hébergement, etc...). Il appartient au client de choisir une chambre avec la configuration lui proposant le nombre de places disponibles de son choix.

Les usagers de ce système seront organisés en plusieurs catégories :

* Public (sans authentification) pour la consultation des disponibilités des chambres
* client (consultation des chambres disponibles, réservations, modifications et annulation de ses réservations)
* opérateur (consultation des chambres, réservations, mise à jour des informations de chambre, modification et annulations des réservations)
* administrateur (tout type de manipulation, suppression client et informations associées par exemple, …)

Pour des raisons de simplification, la partie paiement n’est pas à implémenter. Il vous appartient de compléter/préciser les informations dont sous aurez besoin pour la réalisation de votre application.

## Première partie, Partie IHM statique

Le choix de la mise en page est parfaitement libre.

L’application devra comporter à minima un certain nombre de pages et fonctionnalités :

* Descriptif de l’hôtel, son environnement, ses caractéristiques
* Descriptif des chambres, caractéristiques, photos.
* Identification des différents profils. La gestion la plus simple possible est souhaitable.
* Recherche de chambre. Cette page permet de prendre en compte un certain nombre de critères permettant d’accéder aux données ensuite en fonction de ces critères.
* Affichage des résultats. On souhaite afficher les chambres qui peuvent être réservables pour un client donné. Les éléments d’affichage suivants sont obligatoires pour un séjour : date, durée, nombre de personnes, configuration de(s) lit(s).
* Réservation (booking) proprement dite d’une chambre. Le client doit pouvoir saisir d’éventuels commentaires à l’hôtelier.
* Création/Modification informations chambres: nouvelle chambre, modification configuration lits, fermeture chambre pour travaux.
* Création/Modification client. Création d’un nouveau client, modification de certaines de ses caractéristiques.
* Annulation de réservation. Dans cette page on pourra annuler une réservation donnée sélectionnée et identifiée au préalable graphiquement.

Dans cette première partie il convient de réaliser ces pages et la navigation de
l’application en html.
Pour certaines il convient de rajouter « en dur » des données qui seront plus tard
générées dynamiquement (partie PHP/BD) afin d’observer un résultat exhaustif
proche du résultat final.
Il vous est demandé ici d’implémenter des contrôles de validation sur les saisies
effectuées par les utilisateurs.
Vous devez fournir un fichier zip `partie1.zip` par email contenant tous les fichiers
nécessaires à la partie Web statique ainsi que leur arborescence.

## Deuxième partie, partie base de données

1. Modéliser les informations ci-dessus dans un schéma conceptuel ou relationnel.

    > Fichier `schema.pdf` à fournir.
2. Fournissez un script de création de l’ensemble des éléments de structures générées par
cette modélisation. Les éléments de clés primaires, étrangères et autres contraintes sont à
votre appréciation.
    > Fichier `creStructures.sql` à fournir.
3. Fournissez un script de suppression de l’ensemble de ces structures.
    > Fichier `supStructures.sql` à fournir.
4. Alimenter les différentes informations nécessaires dans les tables. Un niveau de jeu de
données minimum doit être fourni, à partir des éléments du texte et doit permettre par
exemple de retourner des valeurs à vos requêtes SQL. Des données « pertinentes » sont
attendues pour une période donnée définie afin de permettre un fonctionnement vraisemblable
de l’application.
    > Fichier `alimDonnees.sql` à fournir.
5. Fournissez un script de suppression de l’ensemble des données.
    > Fichier `supDonnees.sql` à fournir.

6. Formulez dans le langage SQL les demandes ci-dessous :
    * Quels sont les clients ayant annulé leurs réservations sur le premier trimestre 2016 ?
    * Quel est le client ayant réservé le plus de nuitées en 2015 ?
    * Quels sont les clients ayant réservé plus de 3 nuits (en une ou plusieurs fois) en 2015 ?
    * Quelle est la capacité totale de l’hôtel à ce jour ?
    * Quel est le chiffre d’affaire réalisé en janvier 2016 ?
    * Quel est le taux d’occupation moyen du mois de janvier 2016 ?
    > Fichier `requetes.sql` à fournir.

7. Réalisez les procédures suivantes en langage procédural.
    > Fichier `plprojet.sql` à fournir.

    `P_RESERVATION (chambre, date, durée, client, nb_personnes)` qui réserve une chambre à
    un client donné pour une date donnée. D’autres paramètres sont à déterminer en option.
    Cette procédure doit tenir compte des règles métier suivantes :

    * la réservation ne peut excéder une semaine pour une réservation effectuée par le client
    lui-même.
    * Une réservation n’est possible que jusque 6 mois à l’avance.
    * Un client ne peut réserver plus de 2 chambres pour la même période lorsque la
    réservation est effectuée directement par ses soins.

    `P_ANNULE_RESERVATION()`. Cette procédure annule une réservation prévue. Il vous appartient d’en définir la signature. On
    souhaite conserver l’historique des annulations.

    Vous devez fournir un fichier zip `partie2.zip` par email contenant les fichiers
    suivants:
    `creStructures.sql`, `supStructures.sql`, `alimDonnees.sql`, `supDonnees.sql`, `requetes.sql`,
    `plprojet.sql` + `schema.pdf`.

## Troisième partie, synthèse

Dans cette dernière partie, on souhaitera rendre notre application dynamique au sens où les
résultats générés et affichés sont construits par l’utilisation d’une base de données et du
langage PHP.

Vous devez ici :

* faire le lien entre les différents composants applicatifs.
* Gérer les droits des différents profils applicatifs
* Implémenter les fonctionnalités attendues
* Réaliser un certain nombre de contrôle de saisies. (L’utilisation de javascript pour la validation des formulaires de données est aussi possible mais optionnelle)
* Respecter le cadre technique applicatif.

Il vous est demandé de rendre un rapport détaillé de votre application. Ce rapport contient les scénarios de navigation de votre application : copies d’écran et les actions/données saisies nécessaires à la navigation pour chaque profil possible.

Vous devez fournir un fichier zip `synthese.zip` par email contenant tous les fichiers nécessaires à la partie Web et à la partie BD ainsi que le rapport final au format PDF.

## Cadre technique

Il vous et imposé d’utiliser la base de données MySQL, un serveur web Apache et le langage de script PHP.
À ce titre il vous est fortement recommandé d’utiliser la suite logicielle [WAMP](http://www.wampserver.com/). En fonction de votre système d’exploitation des versions Linux ou mac existent par ailleurs. (LAMP, MAMP)

* Vous devez réaliser vos design/pages en HTML et CSS.
* Il vous est interdit d’utiliser des Frameworks. (Symfony, Zend, CakePHP...), pas de générateur de codes HTML WYSIWYG ou autres (Dreamweaver, Expression,..), pas d’utilisation de CMS (Joomla!, Drupal, Spip, …), pas d’utilisation de flash.
* Le choix des pages physiques de votre site internet est laissé à votre appréciation néanmoins il vous est imposé de respecter un certain type de structuration. En effet il faut appliquer ici un [modèle MVC](http://fr.wikipedia.org/wiki/Mod%C3%A8le-vue-contr%C3%B4leur) dans votre architecture de pages. Ce modèle « cloisonne » plusieurs partie d’une application : le Modèle, le Vue, le Contrôleur.

Il vous est permis bien entendu de rajouter des fonctionnalités plutôt techniques (auto complétion, gestion affichage sophistiquée, images, vidéo….) qui seront prises en compte dans votre évaluation.


## Travail attendu

Le projet est à réaliser en binôme. (Exceptionnellement un trinôme si besoin). Merci de préciser dans chacun de vos emails, le nom du binôme associé. Il vous appartient d'utiliser pertinemment les notions que vous avez vues en cours. (Par exemple en base de données : contraintes d'intégrités : PK, FK, check,not null, etc...). Tous les documents sont à rendre dans un format électronique. Il est vous est demandé ici une totale autonomie par rapport aux informations dont vous disposez d’une part et les choix que vous serez amenés à prendre en l’absence de précisions. Si certains aspects vous semblent flous ou ambigus, c’est à vous de choisir une interprétation ou de les préciser. Cela va sans dire mais le travail est à effectuer en binôme. Tout travail identifié comme non « authentique » se verra attribué la note 0. Ceci sera appliqué à l’ensemble des projets identifiés. Protéger votre travail.

### Remarque soutenance

Il vous sera demandé de réaliser une démonstration de votre travail lors de la soutenance de ce projet. Une partie questions est aussi prévue. Tout type de questions sera possible (organisation du travail, choix de conception, utilisation de tel type de balise, ..) La note de soutenance sera individuelle.

### Barème à titre indicatif
* Projet 15 points (partie 1 : 5 points, partie 2 : 5 points, partie 3 : 5 points)
* Soutenance : 5 points

### Dates à retenir
* le 12 janvier 2016 : liste des binômes, envoyez moi avant cette date vos binômes, coordonnées mails.
* le 07 mars 2016 : remise de la première partie du projet, `partie1.zip` par mail.
* le 09 avril 2016 : remise de la deuxième partie du projet, `partie2.zip` par mail.
* le 16 mai 2016 : remise de la dernière partie du projet, `synthese.zip` par mail.
* le 26 mai 2016 (à confirmer): soutenance du projet.

Adresse mail : [david.marinho@u-pec.fr](mailto:david.marinho@u-pec.fr)

### Il sera considérablement sanctionné
* **Tout non-respect du cadre technique imposé**
* **Toute impossibilité d'exécution séquentielle d'un des scripts de la base de donnée (problème de contraintes, de dépendances, autres)**
* **Toute impossibilité de fonctionnement nominal des pages web.**