-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : mar. 14 juin 2022 à 13:56
-- Version du serveur :  5.7.34
-- Version de PHP : 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `arbitres`
--

-- --------------------------------------------------------

--
-- Structure de la table `arbitre`
--

CREATE TABLE `arbitre` (
  `num_arbitre` int(11) NOT NULL,
  `nom_arbitre` varchar(255) NOT NULL,
  `prenom_arbitre` varchar(255) NOT NULL,
  `adresse_arbitre` varchar(255) NOT NULL,
  `cp_arbitre` int(5) NOT NULL,
  `ville_arbitre` varchar(255) NOT NULL,
  `date_naiss_arbitre` date NOT NULL,
  `tel_fixe_arbitre` varchar(255) NOT NULL,
  `tel_port_arbitre` varchar(255) NOT NULL,
  `mail_arbitre` varchar(255) NOT NULL,
  `num_club` int(11) NOT NULL,
  `num_equipe` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `arbitre`
--

INSERT INTO `arbitre` (`num_arbitre`, `nom_arbitre`, `prenom_arbitre`, `adresse_arbitre`, `cp_arbitre`, `ville_arbitre`, `date_naiss_arbitre`, `tel_fixe_arbitre`, `tel_port_arbitre`, `mail_arbitre`, `num_club`, `num_equipe`) VALUES
(1, 'Rodrigues', 'Anthony', '8 cité de l\'amphitéatre', 87000, 'Limoges', '0000-00-00', '0473589851', '0651896652', 'Anthonyoutub@gmail.com', 1, 1),
(2, 'Rousselot', 'Sandra', '15 cité de l\'amphithéâtre', 87000, 'Limoges', '2001-04-10', '0473896220', '0652415699', 'sandra.rousselot@gmail.com', 1, 2),
(3, 'Bourgeois', 'Agnes', '12 rue des requêtes SQL', 87000, 'Limoges', '2021-04-01', '0473525541', '0651896652', 'agnes.bourgeois@gmail.com', 2, 3),
(4, 'Bogusz', 'Thierry', '18 rue de l\'orienté objet', 87000, 'Limoges', '2021-04-06', '0473526585', '0652748963', 'thierry.boguse@gmail.com', 2, 4),
(5, 'Hippolyte', 'Banneret ', '78 rue des chandiots', 63100, 'Clermont-Ferrand', '2021-02-09', '0473698541', '0651225241', 'bertrand.didier@gmail.com', 3, 5),
(6, 'Aphrodite', 'Stanley', '48 rue des chandiots', 63000, 'Clermont-Ferrand', '2021-04-13', '0473698541', '0687452214', 'aphrodite.stanley@gmail.com', 3, 6);

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `num_categorie` int(11) NOT NULL,
  `nom_categorie` varchar(255) NOT NULL,
  `montant_indemnite` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`num_categorie`, `nom_categorie`, `montant_indemnite`) VALUES
(1, 'Minime', 15),
(2, 'Cadet', 20),
(3, 'Senior', 20);

-- --------------------------------------------------------

--
-- Structure de la table `championnat`
--

CREATE TABLE `championnat` (
  `num_championnat` int(11) NOT NULL,
  `nom_championnat` varchar(255) NOT NULL,
  `num_categorie` int(11) NOT NULL,
  `num_division` int(11) NOT NULL,
  `num_type_championnat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `championnat`
--

INSERT INTO `championnat` (`num_championnat`, `nom_championnat`, `num_categorie`, `num_division`, `num_type_championnat`) VALUES
(1, 'WeekEndClash', 1, 1, 1),
(4, 'The Championnat', 2, 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `club`
--

CREATE TABLE `club` (
  `num_club` int(11) NOT NULL,
  `nom_club` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `club`
--

INSERT INTO `club` (`num_club`, `nom_club`) VALUES
(1, 'Club Etudiants'),
(2, 'Club des Professeurs'),
(3, 'Clermontois');

-- --------------------------------------------------------

--
-- Structure de la table `deplacement`
--

CREATE TABLE `deplacement` (
  `num_arbitre` int(11) NOT NULL,
  `num_salle` int(11) NOT NULL,
  `distance` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `deplacement`
--

INSERT INTO `deplacement` (`num_arbitre`, `num_salle`, `distance`) VALUES
(5, 1, 200),
(6, 1, 300);

-- --------------------------------------------------------

--
-- Structure de la table `division`
--

CREATE TABLE `division` (
  `num_division` int(11) NOT NULL,
  `nom_division` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `division`
--

INSERT INTO `division` (`num_division`, `nom_division`) VALUES
(1, 'Masculin'),
(2, 'Féminin');

-- --------------------------------------------------------

--
-- Structure de la table `equipe`
--

CREATE TABLE `equipe` (
  `num_equipe` int(11) NOT NULL,
  `num_club` int(11) NOT NULL,
  `nom_equipe` varchar(255) NOT NULL,
  `num_championnat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `equipe`
--

INSERT INTO `equipe` (`num_equipe`, `num_club`, `nom_equipe`, `num_championnat`) VALUES
(1, 1, 'les Martins-Pêcheurs Argentés', 1),
(2, 1, 'les Dindons', 1),
(3, 2, 'les Coureurs Hantés\r\n', 1),
(4, 2, 'les Remarquables', 1),
(5, 3, 'les Zombis Fâchés\r\n', 1),
(6, 3, 'les Rouges\r\n', 1);

-- --------------------------------------------------------

--
-- Structure de la table `indisponibilite`
--

CREATE TABLE `indisponibilite` (
  `num_arbitre` int(11) NOT NULL,
  `date_jour` date NOT NULL,
  `code_demi_jour` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `match`
--

CREATE TABLE `match` (
  `num_match` int(11) NOT NULL,
  `num_salle` int(11) NOT NULL,
  `date_match` date NOT NULL,
  `heure_match` time NOT NULL,
  `num_equipe_1` int(11) NOT NULL,
  `num_equipe_2` int(11) NOT NULL,
  `num_arbitre_p` int(11) NOT NULL,
  `num_arbitre_s` int(11) NOT NULL,
  `montant_deplt_p` int(11) NOT NULL,
  `montant_deplt_s` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `parametre`
--

CREATE TABLE `parametre` (
  `num_param` int(11) NOT NULL,
  `montant_km` int(11) NOT NULL,
  `mail_responsable` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `salle`
--

CREATE TABLE `salle` (
  `num_salle` int(11) NOT NULL,
  `adresse_salle` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `salle`
--

INSERT INTO `salle` (`num_salle`, `adresse_salle`) VALUES
(1, '99, rue des Dunes'),
(2, '33, rue Sadi Carnot\r\n'),
(3, '7, Rue du Limas\r\n');

-- --------------------------------------------------------

--
-- Structure de la table `type_championnat`
--

CREATE TABLE `type_championnat` (
  `num_type_championnat` int(11) NOT NULL,
  `nom_type_championnat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `type_championnat`
--

INSERT INTO `type_championnat` (`num_type_championnat`, `nom_type_championnat`) VALUES
(1, 'Excellence Régionale'),
(2, 'Honneur'),
(3, 'Promotion d\'Excellence Régionale');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `mot_de_passe` varchar(255) NOT NULL,
  `role` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `pseudo`, `mot_de_passe`, `role`) VALUES
(1, 'admin', 'admin', 2),
(2, 'joueur', '123', 1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `arbitre`
--
ALTER TABLE `arbitre`
  ADD PRIMARY KEY (`num_arbitre`,`num_club`,`num_equipe`) USING BTREE;

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`num_categorie`);

--
-- Index pour la table `championnat`
--
ALTER TABLE `championnat`
  ADD PRIMARY KEY (`num_championnat`);

--
-- Index pour la table `club`
--
ALTER TABLE `club`
  ADD PRIMARY KEY (`num_club`);

--
-- Index pour la table `deplacement`
--
ALTER TABLE `deplacement`
  ADD PRIMARY KEY (`num_arbitre`,`num_salle`);

--
-- Index pour la table `division`
--
ALTER TABLE `division`
  ADD PRIMARY KEY (`num_division`);

--
-- Index pour la table `equipe`
--
ALTER TABLE `equipe`
  ADD PRIMARY KEY (`num_equipe`);

--
-- Index pour la table `indisponibilite`
--
ALTER TABLE `indisponibilite`
  ADD PRIMARY KEY (`num_arbitre`);

--
-- Index pour la table `match`
--
ALTER TABLE `match`
  ADD PRIMARY KEY (`num_match`);

--
-- Index pour la table `parametre`
--
ALTER TABLE `parametre`
  ADD PRIMARY KEY (`num_param`);

--
-- Index pour la table `salle`
--
ALTER TABLE `salle`
  ADD PRIMARY KEY (`num_salle`);

--
-- Index pour la table `type_championnat`
--
ALTER TABLE `type_championnat`
  ADD PRIMARY KEY (`num_type_championnat`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `arbitre`
--
ALTER TABLE `arbitre`
  MODIFY `num_arbitre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `num_categorie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `championnat`
--
ALTER TABLE `championnat`
  MODIFY `num_championnat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `club`
--
ALTER TABLE `club`
  MODIFY `num_club` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `division`
--
ALTER TABLE `division`
  MODIFY `num_division` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `equipe`
--
ALTER TABLE `equipe`
  MODIFY `num_equipe` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `indisponibilite`
--
ALTER TABLE `indisponibilite`
  MODIFY `num_arbitre` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `match`
--
ALTER TABLE `match`
  MODIFY `num_match` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `parametre`
--
ALTER TABLE `parametre`
  MODIFY `num_param` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `salle`
--
ALTER TABLE `salle`
  MODIFY `num_salle` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `type_championnat`
--
ALTER TABLE `type_championnat`
  MODIFY `num_type_championnat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
