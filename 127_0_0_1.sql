-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 12 mars 2022 à 09:32
-- Version du serveur : 10.6.5-MariaDB
-- Version de PHP : 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `eagri_database`
--
CREATE DATABASE IF NOT EXISTS `eagri_database` DEFAULT CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci;
USE `eagri_database`;

-- --------------------------------------------------------

--
-- Structure de la table `administrateur`
--

CREATE TABLE `administrateur` (
  `idadmin` int(7) NOT NULL,
  `nom` varchar(50) DEFAULT NULL,
  `prenom` varchar(70) NOT NULL,
  `email` varchar(60) NOT NULL,
  `mot_de_passe` varchar(250) NOT NULL,
  `numero_telephone` varchar(10) NOT NULL,
  `privilege` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `administrateur`
--

INSERT INTO `administrateur` (`idadmin`, `nom`, `prenom`, `email`, `mot_de_passe`, `numero_telephone`, `privilege`) VALUES
(6, 'sanogo', 'kassoum', 'kass@gamil.com', 'e420338473b8d9efb99091b65fb3310af05731b0', '0575656942', 2),
(9, 'diarrassouba', 'ib', 'ib@gmail.com', 'a5e3afec03b1ab7e0f1c391969d4803a7ca54819', '0505995846', 2),
(16, 'soumare', 'ashey', 'ashley@gmail.com', '86857d626d1bbaf9f6d92226c2102459b972d600', '0544116811', 1),
(36, 'meite', 'kounadi teguera', 'meit@gmail.com', '2266eab245124c4f10a7294be075bd2f3fd47a17', '0749942423', 2),
(37, 'sylla', 'ibrahim', 'lamenthe@gmail.com', '2c5cf4eb7c16732b9159859b16619d9e5963c9c4', '0163946264', 1),
(39, 'kamagate', 'aziz', 'aziz@gamial.com', '218665a73a0cf080bf98dc6673f6429a37f12f21', '0749942423', 2),
(40, 'konate', 'tianzon', 'tian@gmail.com', 'bd47ea0b721e0c21f8693b3fe4916a2727523296', '0749942423', 1);

-- --------------------------------------------------------

--
-- Structure de la table `agriculteur`
--

CREATE TABLE `agriculteur` (
  `idagri` int(7) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(80) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `genre` varchar(1) DEFAULT NULL,
  `date_naissance` date DEFAULT NULL,
  `lieu_naissance` varchar(60) DEFAULT NULL,
  `boite_postale` varchar(70) DEFAULT NULL,
  `telephone` varchar(10) DEFAULT NULL,
  `nombre_annee` int(2) DEFAULT NULL,
  `biographie` varchar(100) DEFAULT NULL,
  `iddep` int(11) NOT NULL,
  `idadmi` int(7) DEFAULT NULL,
  `idsous_pref` int(7) DEFAULT NULL,
  `idniv_alpha` int(7) DEFAULT NULL,
  `idniv_inst` int(7) DEFAULT NULL,
  `idnat` int(7) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `agriculteur`
--

INSERT INTO `agriculteur` (`idagri`, `nom`, `prenom`, `email`, `genre`, `date_naissance`, `lieu_naissance`, `boite_postale`, `telephone`, `nombre_annee`, `biographie`, `iddep`, `idadmi`, `idsous_pref`, `idniv_alpha`, `idniv_inst`, `idnat`) VALUES
(35, 'kamagate', 'aziz', 'ashe@gmail.com', 'M', '2010-10-18', 'Daloa', 'bp 255 Daloa', '0779889676', 3, 'nouveau dans le domaine', 2, NULL, NULL, NULL, NULL, NULL),
(56, 'sylla', 'ibrahim', 'mkasaleboss45@gmail.com', 'F', '2002-08-27', 'Daloa', 'bp 903 abidjan', '0708233328', 4, 'un agriculteur', 1, NULL, NULL, NULL, NULL, NULL),
(57, 'soumare', 'ashey', 'lamenthe@gamil.com', 'M', '2022-02-27', 'abidjan', 'bp 903 abidjan', '0708233328', 8, 'je texte', 3, NULL, NULL, NULL, NULL, NULL),
(58, 'meite', 'kounadi', 'aziz@gamial.com', 'F', '2009-06-28', 'Daloa', 'bp 279 bouake', '0768255240', 22, 'expert', 4, NULL, NULL, NULL, NULL, NULL),
(59, 'konate', 'tianzon', 'tian@gmail.com', 'M', '2001-05-28', 'korhogo', 'bp 250 boundiali', '0505987654', 16, 'ancien', 2, NULL, NULL, NULL, NULL, NULL),
(62, 'traore', 'abdoulaye', 'abdoul@gmail.com', 'M', '2006-06-04', 'bouake', 'bp 279 bouake', '0708233328', 18, 'un test des agriculteurs', 4, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `centre_intérêt`
--

CREATE TABLE `centre_intérêt` (
  `idcentr` int(7) NOT NULL,
  `type` int(30) NOT NULL,
  `idagri` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Structure de la table `compte`
--

CREATE TABLE `compte` (
  `idcompt` int(7) NOT NULL,
  `type` varchar(30) NOT NULL,
  `idagri` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Structure de la table `departement`
--

CREATE TABLE `departement` (
  `iddep` int(7) NOT NULL,
  `nomdep` varchar(70) NOT NULL,
  `superficie` varchar(8) NOT NULL,
  `idreg` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `departement`
--

INSERT INTO `departement` (`iddep`, `nomdep`, `superficie`, `idreg`) VALUES
(1, 'tiebissou', '1213', 0),
(2, 'toumodi', '2657', 0),
(3, 'Didiévi', '1300', 0),
(4, 'Djékanou', '1576', 0);

-- --------------------------------------------------------

--
-- Structure de la table `langue_locale`
--

CREATE TABLE `langue_locale` (
  `idlang` int(7) NOT NULL,
  `nom` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Structure de la table `nationalité`
--

CREATE TABLE `nationalité` (
  `idnat` int(7) NOT NULL,
  `nom` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Structure de la table `niveau_alphabetisation`
--

CREATE TABLE `niveau_alphabetisation` (
  `idniv_alpha` int(7) NOT NULL,
  `nom` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Structure de la table `niveau_instruction`
--

CREATE TABLE `niveau_instruction` (
  `idniv_inst` int(7) NOT NULL,
  `type` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Structure de la table `parler`
--

CREATE TABLE `parler` (
  `idagri` int(7) NOT NULL,
  `idlang` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Structure de la table `piece`
--

CREATE TABLE `piece` (
  `idpiece` int(7) NOT NULL,
  `type` varchar(30) NOT NULL,
  `idagri` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Structure de la table `plantation`
--

CREATE TABLE `plantation` (
  `idplant` int(7) NOT NULL,
  `culture` varchar(50) NOT NULL,
  `type_culture` varchar(60) NOT NULL,
  `superficie` varchar(20) NOT NULL,
  `latitude` varchar(40) NOT NULL,
  `longitude` varchar(40) NOT NULL,
  `idagri` int(7) NOT NULL,
  `iddep` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `plantation`
--

INSERT INTO `plantation` (`idplant`, `culture`, `type_culture`, `superficie`, `latitude`, `longitude`, `idagri`, `iddep`) VALUES
(60, 'manioc', 'T', '7', '23,4', '44,77', 34, 1),
(61, 'banane', 'M', '7', '23,4', '44,77', 34, 2),
(80, 'cacoa', 'T', '5', '23,4', '55,78', 34, 3),
(81, 'cacoa', 'T', '6', '33,45', '55,78', 34, 4),
(82, 'cacoa', 'T', '4', '23,4', '55,78', 34, 1),
(83, 'cacoa', 'T', '5', '23,4', '55,78', 53, 2),
(84, 'anacarde', 'M', '9', '6°35’ sud', '5°25’  ouest', 53, 3),
(85, 'hevea', 'T', '2', '6°35’ nord', '5°30’  est', 52, 4),
(86, 'riz', 'T', '55', '33,45', '77,9', 52, 4),
(87, 'cafe', 'M', '17', '34', '12', 52, 3),
(88, 'cacoa', 'T', '13', '76', '98', 35, 2),
(89, 'cacoa', 'M', '11', '90', '78', 35, 1),
(90, 'cacoa', 'M', '14', '87', '56', 51, 4),
(91, 'anacarde', 'T', '45', '67', '49', 51, 3),
(92, 'mais', 'T', '3', '6°25’ sud', '5°25’  ouest', 52, 2),
(93, 'cafe', 'T', '6', '23,4', '44,,77', 51, 1),
(95, 'mais', 'T', '55', '6°35’ nord', '5°30’  est', 55, 3),
(96, 'cacoa', 'T', '50', '6°25’ sud', '5°25’  ouest', 56, 2),
(97, 'manioc', 'T', '2', '23,4', '55,78', 57, 4),
(98, 'riz', 'T', '6', '33,455', '55,78', 56, 1),
(99, 'manioc', 'T', '5', '6°35’ sud', '5°30’  est', 56, 2),
(100, 'cacoa', 'M', '9', '6°35’ sud', '5°25’  ouest', 35, 2),
(101, 'hevea', 'M', '3', '6°35’ nord', '5°25’  est', 57, 4),
(102, 'riz', 'T', '9', '6°25’ nord', '5°25’  est', 57, 1),
(104, 'cacoa', 'T', '2', '23,4', '55,78', 61, 3),
(105, 'mais', 'T', '2', '6°25’ sud', '5°25’  ouest', 59, 1),
(106, 'manioc', 'T', '43', '6°35’ nord', '5°25’  ouest', 35, 2),
(107, 'banane', 'T', '43', '33,45', '55,78', 62, 3),
(108, 'manioc', 'M', '32', '6°35’ sud', '5°25’  ouest', 62, 4),
(109, 'manioc', 'T', '5', '23,4', '44,,77', 35, 2),
(110, 'mais', 'T', '43', '6°25’ sud', '5°25’  ouest', 35, 2),
(111, 'mais', 'T', '3', '23,4', '44,,77', 35, 2),
(112, 'riz', 'T', '43', '33,455', '55,78', 35, 4);

-- --------------------------------------------------------

--
-- Structure de la table `privilege`
--

CREATE TABLE `privilege` (
  `idprivi` int(7) NOT NULL,
  `libellet` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Structure de la table `région`
--

CREATE TABLE `région` (
  `idreg` int(7) NOT NULL,
  `nom` varchar(70) NOT NULL,
  `superficie` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Structure de la table `sous_prefecture`
--

CREATE TABLE `sous_prefecture` (
  `idsous_pref` int(7) NOT NULL,
  `nom` varchar(70) NOT NULL,
  `superficie` varchar(8) NOT NULL,
  `iddep` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Structure de la table `terminal`
--

CREATE TABLE `terminal` (
  `idter` int(7) NOT NULL,
  `type` varchar(4) NOT NULL,
  `idagri` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `administrateur`
--
ALTER TABLE `administrateur`
  ADD PRIMARY KEY (`idadmin`);

--
-- Index pour la table `agriculteur`
--
ALTER TABLE `agriculteur`
  ADD PRIMARY KEY (`idagri`);

--
-- Index pour la table `centre_intérêt`
--
ALTER TABLE `centre_intérêt`
  ADD PRIMARY KEY (`idcentr`);

--
-- Index pour la table `compte`
--
ALTER TABLE `compte`
  ADD PRIMARY KEY (`idcompt`);

--
-- Index pour la table `departement`
--
ALTER TABLE `departement`
  ADD PRIMARY KEY (`iddep`);

--
-- Index pour la table `langue_locale`
--
ALTER TABLE `langue_locale`
  ADD PRIMARY KEY (`idlang`);

--
-- Index pour la table `nationalité`
--
ALTER TABLE `nationalité`
  ADD PRIMARY KEY (`idnat`);

--
-- Index pour la table `niveau_alphabetisation`
--
ALTER TABLE `niveau_alphabetisation`
  ADD PRIMARY KEY (`idniv_alpha`);

--
-- Index pour la table `niveau_instruction`
--
ALTER TABLE `niveau_instruction`
  ADD PRIMARY KEY (`idniv_inst`);

--
-- Index pour la table `piece`
--
ALTER TABLE `piece`
  ADD PRIMARY KEY (`idpiece`);

--
-- Index pour la table `plantation`
--
ALTER TABLE `plantation`
  ADD PRIMARY KEY (`idplant`);

--
-- Index pour la table `privilege`
--
ALTER TABLE `privilege`
  ADD PRIMARY KEY (`idprivi`);

--
-- Index pour la table `région`
--
ALTER TABLE `région`
  ADD PRIMARY KEY (`idreg`);

--
-- Index pour la table `sous_prefecture`
--
ALTER TABLE `sous_prefecture`
  ADD PRIMARY KEY (`idsous_pref`);

--
-- Index pour la table `terminal`
--
ALTER TABLE `terminal`
  ADD PRIMARY KEY (`idter`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `administrateur`
--
ALTER TABLE `administrateur`
  MODIFY `idadmin` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT pour la table `agriculteur`
--
ALTER TABLE `agriculteur`
  MODIFY `idagri` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT pour la table `departement`
--
ALTER TABLE `departement`
  MODIFY `iddep` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `plantation`
--
ALTER TABLE `plantation`
  MODIFY `idplant` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;

--
-- AUTO_INCREMENT pour la table `privilege`
--
ALTER TABLE `privilege`
  MODIFY `idprivi` int(7) NOT NULL AUTO_INCREMENT;
--
-- Base de données : `test`
--
CREATE DATABASE IF NOT EXISTS `test` DEFAULT CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci;
USE `test`;

-- --------------------------------------------------------

--
-- Structure de la table `jeux_video`
--

CREATE TABLE `jeux_video` (
  `ID` int(10) UNSIGNED NOT NULL,
  `nom` varchar(255) NOT NULL,
  `possesseur` varchar(255) NOT NULL,
  `console` varchar(255) NOT NULL,
  `prix` double NOT NULL DEFAULT 0,
  `nbre_joueurs_max` int(11) NOT NULL DEFAULT 0,
  `commentaires` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `jeux_video`
--

INSERT INTO `jeux_video` (`ID`, `nom`, `possesseur`, `console`, `prix`, `nbre_joueurs_max`, `commentaires`) VALUES
(1, 'Super Mario Bros', 'Florent', 'NES', 4, 1, 'Un jeu d\'anthologie !'),
(2, 'Sonic', 'Patrick', 'Megadrive', 2, 1, 'Pour moi, le meilleur jeu du monde !'),
(3, 'Zelda : ocarina of time', 'Florent', 'Nintendo 64', 15, 1, 'Un jeu grand, beau et complet comme on en voit rarement de nos jours'),
(4, 'Mario Kart 64', 'Florent', 'Nintendo 64', 25, 4, 'Un excellent jeu de kart !'),
(5, 'Super Smash Bros Melee', 'Michel', 'GameCube', 55, 4, 'Un jeu de baston délirant !'),
(6, 'Dead or Alive', 'Patrick', 'Xbox', 60, 4, 'Le plus beau jeu de baston jamais créé'),
(7, 'Dead or Alive Xtreme Beach Volley Ball', 'Patrick', 'Xbox', 60, 4, 'Un jeu de beach volley de toute beauté o_O'),
(8, 'Enter the Matrix', 'Michel', 'PC', 45, 1, 'Plutôt bof comme jeu, mais ça complète bien le film'),
(9, 'Max Payne 2', 'Michel', 'PC', 50, 1, 'Très réaliste, une sorte de film noir sur fond d\'histoire d\'amour. A essayer !'),
(10, 'Yoshi\'s Island', 'Florent', 'SuperNES', 6, 1, 'Le paradis des Yoshis :o)'),
(11, 'Commandos 3', 'Florent', 'PC', 44, 12, 'Un bon jeu d\'action où on dirige un commando pendant la 2ème guerre mondiale !'),
(12, 'Final Fantasy X', 'Patrick', 'PS2', 40, 1, 'Encore un Final Fantasy mais celui la est encore plus beau !'),
(13, 'Pokemon Rubis', 'Florent', 'GBA', 44, 4, 'Pika-Pika-chu !!!'),
(14, 'Starcraft', 'Michel', 'PC', 19, 8, 'Le meilleur jeux pc de tout les temps !'),
(15, 'Grand Theft Auto 3', 'Michel', 'PS2', 30, 1, 'Comme dans les autres Gta on ecrase tout le monde :) .'),
(16, 'Homeworld 2', 'Michel', 'PC', 45, 6, 'Superbe ! o_O'),
(17, 'Aladin', 'Patrick', 'SuperNES', 10, 1, 'Comme le dessin Animé !'),
(18, 'Super Mario Bros 3', 'Michel', 'SuperNES', 10, 2, 'Le meilleur Mario selon moi.'),
(19, 'SSX 3', 'Florent', 'Xbox', 56, 2, 'Un très bon jeu de snow !'),
(20, 'Star Wars : Jedi outcast', 'Patrick', 'Xbox', 33, 1, 'Encore un jeu sur star-wars où on se prend pour Luke Skywalker !'),
(21, 'Actua Soccer 3', 'Patrick', 'PS', 30, 2, 'Un jeu de foot assez bof ...'),
(22, 'Time Crisis 3', 'Florent', 'PS2', 40, 1, 'Un troisième volet efficace mais pas vraiment surprenant'),
(23, 'X-FILES', 'Patrick', 'PS', 25, 1, 'Un jeu censé ressembler a la série mais assez raté ...'),
(24, 'Soul Calibur 2', 'Patrick', 'Xbox', 54, 1, 'Un jeu bien axé sur le combat'),
(25, 'Diablo', 'Florent', 'PS', 20, 1, 'Comme sur PC mais la c\'est sur un ecran de télé :) !'),
(26, 'Street Fighter 2', 'Patrick', 'Megadrive', 10, 2, 'Le célèbre jeu de combat !'),
(27, 'Gundam Battle Assault 2', 'Florent', 'PS', 29, 1, 'Jeu japonais dont le gameplay est un peu limité. Peu de robots malheureusement'),
(28, 'Spider-Man', 'Florent', 'Megadrive', 15, 1, 'Vivez l\'aventure de l\'homme araignée'),
(29, 'Midtown Madness 3', 'Michel', 'Xbox', 59, 6, 'Dans la suite des autres versions de Midtown Madness'),
(30, 'Tetris', 'Florent', 'Gameboy', 5, 1, 'Qui ne connait pas ? '),
(31, 'The Rocketeer', 'Michel', 'NES', 2, 1, 'Un super un film et un jeu de m*rde ...'),
(32, 'Pro Evolution Soccer 3', 'Patrick', 'PS2', 59, 2, 'Un petit jeu de foot sur PS2'),
(33, 'Ice Hockey', 'Michel', 'NES', 7, 2, 'Jamais joué mais a mon avis ca parle de hockey sur glace ... =)'),
(34, 'Sydney 2000', 'Florent', 'Dreamcast', 15, 2, 'Les JO de Sydney dans votre salon !'),
(35, 'NBA 2k', 'Patrick', 'Dreamcast', 12, 2, 'A votre avis :p ?'),
(36, 'Aliens Versus Predator : Extinction', 'Michel', 'PS2', 20, 2, 'Un shoot\'em up pour pc'),
(37, 'Crazy Taxi', 'Florent', 'Dreamcast', 11, 1, 'Conduite de taxi en folie !'),
(38, 'Le Maillon Faible', 'Mathieu', 'PS2', 10, 1, 'Le jeu de l\'émission'),
(39, 'FIFA 64', 'Michel', 'Nintendo 64', 25, 2, 'Le premier jeu de foot sur la N64 =) !'),
(40, 'Qui Veut Gagner Des Millions', 'Florent', 'PS2', 10, 1, 'Le jeu de l\'émission'),
(41, 'Monopoly', 'Sebastien', 'Nintendo 64', 21, 4, 'Bheuuu le monopoly sur N64 !'),
(42, 'Taxi 3', 'Corentin', 'PS2', 19, 4, 'Un jeu de voiture sur le film'),
(43, 'Indiana Jones Et Le Tombeau De L\'Empereur', 'Florent', 'PS2', 25, 1, 'Notre aventurier préféré est de retour !!!'),
(44, 'F-ZERO', 'Mathieu', 'GBA', 25, 4, 'Un super jeu de course futuriste !'),
(45, 'Harry Potter Et La Chambre Des Secrets', 'Mathieu', 'Xbox', 30, 1, 'Abracadabra !! Le célebre magicien est de retour !'),
(46, 'Half-Life', 'Corentin', 'PC', 15, 32, 'L\'autre meilleur jeu de tout les temps (surtout ses mods).'),
(47, 'Myst III Exile', 'Sébastien', 'Xbox', 49, 1, 'Un jeu de réflexion'),
(48, 'Wario World', 'Sebastien', 'Gamecube', 40, 4, 'Wario vs Mario ! Qui gagnera ! ?'),
(49, 'Rollercoaster Tycoon', 'Florent', 'Xbox', 29, 1, 'Jeu de gestion d\'un parc d\'attraction'),
(50, 'Splinter Cell', 'Patrick', 'Xbox', 53, 1, 'Jeu magnifique !');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `jeux_video`
--
ALTER TABLE `jeux_video`
  ADD KEY `ID` (`ID`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `jeux_video`
--
ALTER TABLE `jeux_video`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
