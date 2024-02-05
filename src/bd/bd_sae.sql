-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 05 fév. 2024 à 17:32
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
('::1', '15-01-24 02:20:32', 'tech', 'adf');

-- --------------------------------------------------------

--
-- Structure de la table `ticket`
--

CREATE TABLE `ticket` (
  `id` int(5) NOT NULL,
  `login` varchar(48) NOT NULL,
  `libellé` varchar(510) NOT NULL,
  `urgence` int(4) NOT NULL,
  `demandeur` varchar(48) NOT NULL,
  `état` varchar(35) NOT NULL DEFAULT 'ouvert',
  `tech` varchar(48) NOT NULL DEFAULT 'aucun',
  `date` varchar(50) NOT NULL,
  `ip` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `ticket`
--

INSERT INTO `ticket` (`id`, `login`, `libellé`, `urgence`, `demandeur`, `état`, `tech`, `date`, `ip`) VALUES
(1, 'moi', 'ff', 3, 'moi', 'en cours de traitement', 'tech', '14-01-24 09:33:43', '::1'),
(2, 'moi', '2', 2, 'lui', 'en cours de traitement', 'tech', '14-01-24 09:33:50', '::1'),
(3, 'moi', '3', 3, 'nous', 'fermer', 'tech', '14-01-24 09:33:58', '::1'),
(4, 'moi', '4', 4, 'vous', 'fermer', 'tech', '14-01-24 09:34:16', '::1'),
(5, 'moi', 'je suis gay', 1, 'mon papa', 'ouvert', 'aucun', '14-01-24 09:34:53', '::1');

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
('moi', '4e4275', 0, 'rezerez'),
('res', '4249711957', 1, ''),
('tech', '46497a', 3, ''),
('tech1', '46497a', 3, '');

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
