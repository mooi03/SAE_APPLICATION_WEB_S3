-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 27 mars 2024 à 10:25
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `bd_sae`
--

-- --------------------------------------------------------

--
-- Structure de la table `erreur_co`
--

CREATE TABLE `erreur_co` (
                             `ip` varchar(50) NOT NULL,
                             `date` varchar(50) NOT NULL,
                             `login` varchar(50) NOT NULL,
                             `mdp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `erreur_co`
--

INSERT INTO `erreur_co` (`ip`, `date`, `login`, `mdp`) VALUES
                                                           ('::1', '14-01-24 09:53:33', 'eeeeee', 'ttttt'),
                                                           ('::1', '14-01-24 10:07:07', 'eee', 'rzerze'),
                                                           ('::1', '14-01-24 10:07:11', 'rezrez', 'rtzetr'),
                                                           ('::1', '14-01-24 10:07:14', 'erzefze', 'erztrz'),
                                                           ('::1', '14-01-24 10:07:21', 'res', 'edf'),
                                                           ('::1', '15-01-24 02:20:32', 'tech', 'adf'),
                                                           ('127.0.0.1', '25-03-24 09:30:24', 'admin', 'admin'),
                                                           ('127.0.0.1', '25-03-24 09:37:53', 'admin', 'admin'),
                                                           ('127.0.0.1', '25-03-24 09:38:30', 'mooi', 'mooi'),
                                                           ('127.0.0.1', '25-03-24 09:58:54', 'admin1', 'admin1'),
                                                           ('127.0.0.1', '25-03-24 10:18:04', 'res', 'res'),
                                                           ('127.0.0.1', '25-03-24 10:18:14', 'res', 'edf'),
                                                           ('127.0.0.1', '25-03-24 10:18:22', 'res', 'efd'),
                                                           ('127.0.0.1', '26-03-24 11:38:43', 'moi', 'trtr'),
                                                           ('127.0.0.1', '26-03-24 11:38:59', 'mooi', 'mooi'),
                                                           ('127.0.0.1', '26-03-24 02:58:29', 'tech', 'efd'),
                                                           ('127.0.0.1', '26-03-24 06:54:58', 'admin1', 'admi'),
                                                           ('127.0.0.1', '26-03-24 06:55:10', 'admin1', 'admin1');

-- --------------------------------------------------------

--
-- Structure de la table `libelle`
--

CREATE TABLE `libelle` (
                           `id` int(4) NOT NULL,
                           `texte` varchar(2048) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `libelle`
--

INSERT INTO `libelle` (`id`, `texte`) VALUES
                                          (2, 'lllllll'),
                                          (1, 'fff'),
                                          (3, 'fjfjfjfrijjeoieoieo');

-- --------------------------------------------------------

--
-- Structure de la table `ticket`
--

CREATE TABLE `ticket` (
                          `id` int(5) NOT NULL,
                          `login` varchar(48) NOT NULL,
                          `libellé` varchar(510) NOT NULL,
                          `urgence` int(4) NOT NULL DEFAULT 1,
                          `Salle` varchar(10) NOT NULL,
                          `état` varchar(35) NOT NULL DEFAULT 'ouvert',
                          `tech` varchar(48) NOT NULL DEFAULT 'aucun',
                          `date` varchar(50) NOT NULL,
                          `ip` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
                               `login` varchar(48) NOT NULL,
                               `mdp` varchar(255) NOT NULL,
                               `perm` int(3) NOT NULL,
                               `mail` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='login et mdp';

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`login`, `mdp`, `perm`, `mail`) VALUES
                                                               ('admin1', '4249711957', 2, ''),
                                                               ('e', '4f48', 0, 'fff'),
                                                               ('res', '4249711957', 1, ''),
                                                               ('tech', '46497a', 3, ''),
                                                               ('tech2', '4e4275', 3, '');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `ticket`
--
ALTER TABLE `ticket`
    ADD PRIMARY KEY (`id`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
    ADD PRIMARY KEY (`login`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
