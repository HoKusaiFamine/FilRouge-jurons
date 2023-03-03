-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 03 mars 2023 à 15:47
-- Version du serveur : 10.4.27-MariaDB
-- Version de PHP : 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `boîte_a_jurons`
--

-- --------------------------------------------------------

--
-- Structure de la table `balance_injure`
--

CREATE TABLE `balance_injure` (
  `id_bi` int(11) NOT NULL,
  `id_penalite` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `id_user_balance` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `balance_injure`
--

INSERT INTO `balance_injure` (`id_bi`, `id_penalite`, `id_user`, `date`, `id_user_balance`) VALUES
(120, 1, 100, '2023-03-03 01:58:29', '96'),
(121, 1, 100, '2023-03-03 01:58:29', '96'),
(122, 1, 100, '2023-03-03 01:58:29', '96'),
(123, 1, 100, '2023-03-03 01:58:29', '96'),
(124, 1, 100, '2023-03-03 01:58:29', '96'),
(125, 1, 100, '2023-03-03 01:58:29', '96'),
(126, 1, 100, '2023-03-03 01:58:29', '96'),
(127, 1, 100, '2023-03-03 01:58:29', '96'),
(128, 4, 100, '2023-03-03 01:59:01', '96'),
(129, 4, 100, '2023-03-03 01:59:01', '96'),
(130, 5, 102, '2023-03-03 01:59:19', '96'),
(131, 1, 103, '2023-03-03 01:59:26', '96'),
(132, 1, 105, '2023-03-03 01:59:53', '96'),
(133, 1, 105, '2023-03-03 01:59:53', '96'),
(134, 1, 105, '2023-03-03 01:59:53', '96'),
(135, 1, 105, '2023-03-03 01:59:53', '96'),
(136, 1, 105, '2023-03-03 01:59:53', '96'),
(137, 1, 105, '2023-03-03 01:59:53', '96'),
(138, 1, 106, '2023-03-03 02:00:11', '96'),
(139, 1, 106, '2023-03-03 02:00:11', '96'),
(140, 1, 106, '2023-03-03 02:00:11', '96'),
(141, 1, 99, '2023-03-03 02:00:31', '96'),
(142, 1, 99, '2023-03-03 02:00:31', '96'),
(143, 1, 99, '2023-03-03 02:00:31', '96'),
(144, 1, 99, '2023-03-03 02:00:31', '96'),
(145, 1, 99, '2023-03-03 02:00:31', '96'),
(146, 1, 99, '2023-03-03 02:00:31', '96'),
(147, 5, 108, '2023-03-03 02:00:52', '96'),
(148, 5, 108, '2023-03-03 02:00:52', '96'),
(149, 1, 109, '2023-03-03 02:01:16', '96'),
(150, 1, 109, '2023-03-03 02:01:16', '96'),
(151, 1, 109, '2023-03-03 02:01:16', '96'),
(152, 1, 109, '2023-03-03 02:01:16', '96'),
(153, 4, 109, '2023-03-03 02:01:23', '96'),
(154, 5, 109, '2023-03-03 02:01:28', '96'),
(155, 1, 101, '2023-03-03 02:01:49', '96'),
(156, 1, 101, '2023-03-03 02:01:49', '96'),
(157, 1, 101, '2023-03-03 02:01:49', '96'),
(158, 1, 101, '2023-03-03 02:01:49', '96'),
(159, 1, 101, '2023-03-03 02:01:49', '96'),
(160, 1, 101, '2023-03-03 02:01:49', '96'),
(161, 2, 101, '2023-03-03 02:01:56', '96'),
(162, 2, 101, '2023-03-03 02:01:56', '96'),
(163, 4, 101, '2023-03-03 02:02:08', '96'),
(164, 1, 111, '2023-03-03 02:02:31', '96'),
(165, 1, 111, '2023-03-03 02:02:31', '96'),
(166, 1, 111, '2023-03-03 02:02:31', '96'),
(167, 1, 111, '2023-03-03 02:02:31', '96'),
(168, 1, 111, '2023-03-03 02:02:31', '96'),
(169, 1, 111, '2023-03-03 02:02:31', '96'),
(170, 1, 111, '2023-03-03 02:02:31', '96'),
(171, 1, 111, '2023-03-03 02:02:31', '96'),
(172, 1, 112, '2023-03-03 02:02:49', '96'),
(173, 1, 112, '2023-03-03 02:02:49', '96'),
(174, 1, 112, '2023-03-03 02:02:49', '96'),
(175, 1, 112, '2023-03-03 02:02:49', '96'),
(176, 1, 112, '2023-03-03 02:02:49', '96'),
(177, 1, 112, '2023-03-03 02:02:49', '96'),
(178, 1, 112, '2023-03-03 02:02:49', '96'),
(179, 3, 112, '2023-03-03 02:03:06', '96'),
(180, 5, 112, '2023-03-03 02:03:11', '96'),
(181, 5, 113, '2023-03-03 02:03:24', '96'),
(182, 5, 113, '2023-03-03 02:03:24', '96'),
(183, 5, 113, '2023-03-03 02:03:24', '96'),
(184, 1, 107, '2023-03-03 02:03:49', '96'),
(185, 5, 107, '2023-03-03 02:03:53', '96'),
(206, 2, 98, '2023-03-03 03:04:01', '96'),
(207, 2, 98, '2023-03-03 03:04:01', '96'),
(208, 2, 98, '2023-03-03 03:04:01', '96'),
(209, 2, 98, '2023-03-03 03:04:01', '96'),
(210, 2, 98, '2023-03-03 03:04:01', '96'),
(211, 2, 98, '2023-03-03 03:04:01', '96'),
(212, 2, 98, '2023-03-03 03:04:01', '96'),
(213, 2, 98, '2023-03-03 03:04:01', '96'),
(214, 2, 98, '2023-03-03 03:04:01', '96'),
(215, 2, 98, '2023-03-03 03:04:01', '96'),
(216, 5, 104, '2023-03-03 03:13:30', '96'),
(217, 5, 104, '2023-03-03 03:13:30', '96'),
(218, 5, 104, '2023-03-03 03:13:30', '96');

-- --------------------------------------------------------

--
-- Structure de la table `historique`
--

CREATE TABLE `historique` (
  `id_historique` int(11) NOT NULL,
  `id_penalite` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `id_user_balance` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `historique`
--

INSERT INTO `historique` (`id_historique`, `id_penalite`, `id_user`, `date`, `id_user_balance`) VALUES
(1, 2, 98, '2023-03-03 03:04:01', '96'),
(2, 2, 98, '2023-03-03 03:04:01', '96'),
(3, 2, 98, '2023-03-03 03:04:01', '96'),
(4, 2, 98, '2023-03-03 03:04:01', '96'),
(5, 2, 98, '2023-03-03 03:04:01', '96'),
(6, 2, 98, '2023-03-03 03:04:01', '96'),
(7, 2, 98, '2023-03-03 03:04:01', '96'),
(8, 2, 98, '2023-03-03 03:04:01', '96'),
(9, 2, 98, '2023-03-03 03:04:01', '96'),
(10, 2, 98, '2023-03-03 03:04:01', '96'),
(11, 5, 104, '2023-03-03 03:13:30', '96'),
(12, 5, 104, '2023-03-03 03:13:30', '96'),
(13, 5, 104, '2023-03-03 03:13:30', '96');

-- --------------------------------------------------------

--
-- Structure de la table `penalite`
--

CREATE TABLE `penalite` (
  `id_penalite` int(11) NOT NULL,
  `prix` float NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `penalite`
--

INSERT INTO `penalite` (`id_penalite`, `prix`, `type`) VALUES
(1, 0.1, 'petit'),
(2, 0.3, 'grosse'),
(3, 0.5, 'rot'),
(4, 0.7, 'geste de malandrin'),
(5, 0.1, 'retard'),
(6, 1.5, 'flatulance');

-- --------------------------------------------------------

--
-- Structure de la table `profil`
--

CREATE TABLE `profil` (
  `id_profil` int(11) NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `profil`
--

INSERT INTO `profil` (`id_profil`, `type`) VALUES
(1, 'admin'),
(2, 'user');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `login` varchar(50) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `mail` text NOT NULL,
  `mdp` varchar(50) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_profil` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`login`, `nom`, `prenom`, `mail`, `mdp`, `id_user`, `id_profil`) VALUES
('admin', 'admin', 'admin', 'admin@gmail.com', '5e9795e3f3ab55e7790a6283507c085db0d764fc', 96, 1),
('thomas', 'Rachinas', 'Thomas', 'thomas.rachinas@hotmail.fr', '9adcb29710e807607b683f62e555c22dc5659713', 98, 2),
('jb', 'flipo', 'jb', 'lbclbc59000@gmail.com', '9adcb29710e807607b683f62e555c22dc5659713', 99, 2),
('gregory', 'fontaine', 'greg', 'gre.fontaine@gmail.com', '9adcb29710e807607b683f62e555c22dc5659713', 100, 2),
('maksen', 'Ichallalen', 'Maksen', 'maksen@gmail.com', '9adcb29710e807607b683f62e555c22dc5659713', 101, 2),
('kaouthar', 'Lamri', 'Kaouthar', 'kaouthar@gmail.com', '9adcb29710e807607b683f62e555c22dc5659713', 102, 2),
('lucas', 'Vankesbeulque', 'Lucas', 'Lucas@gmail.com', '9adcb29710e807607b683f62e555c22dc5659713', 103, 2),
('jakub', 'Landowski', 'Jakub', 'jakub@gmail.com', '9adcb29710e807607b683f62e555c22dc5659713', 104, 2),
('sebastien', 'Legand', 'Sebastien', 'sebastien@gmail.com', '9adcb29710e807607b683f62e555c22dc5659713', 105, 2),
('anthony', 'Canipel', 'Anthony', 'anthony@gmail.com', '9adcb29710e807607b683f62e555c22dc5659713', 106, 2),
('alexandre', 'Messuve', 'Alexandre', 'alexandre@gmail.com', '9adcb29710e807607b683f62e555c22dc5659713', 107, 2),
('julien', 'Marchand', 'Julien', 'julien@gmail.com', '9adcb29710e807607b683f62e555c22dc5659713', 108, 2),
('thibaut', 'Saudemont', 'Thibaut', 'thibaut@gmail.com', '9adcb29710e807607b683f62e555c22dc5659713', 109, 2),
('florian', 'Delafosse', 'Florian', 'florian@gmail.com', '9adcb29710e807607b683f62e555c22dc5659713', 110, 2),
('paul', 'Dorme', 'Paul', 'paul@gmail.com', '9adcb29710e807607b683f62e555c22dc5659713', 111, 2),
('baptiste', 'Carron', 'Baptiste', 'baptiste@gmail.com', '9adcb29710e807607b683f62e555c22dc5659713', 112, 2),
('mounir', 'Maadour', 'Mounir', 'mounir@gmail.com', '9adcb29710e807607b683f62e555c22dc5659713', 113, 2);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `balance_injure`
--
ALTER TABLE `balance_injure`
  ADD PRIMARY KEY (`id_bi`),
  ADD UNIQUE KEY `id_bi_3` (`id_bi`),
  ADD KEY `balance_injure_user0_FK` (`id_user`),
  ADD KEY `id_penalite` (`id_penalite`,`id_user`),
  ADD KEY `id_penalite_2` (`id_penalite`,`id_user`),
  ADD KEY `id_bi` (`id_bi`),
  ADD KEY `id_bi_2` (`id_bi`,`id_penalite`,`id_user`);

--
-- Index pour la table `historique`
--
ALTER TABLE `historique`
  ADD PRIMARY KEY (`id_historique`),
  ADD KEY `id_historique` (`id_historique`,`id_penalite`,`id_user`);

--
-- Index pour la table `penalite`
--
ALTER TABLE `penalite`
  ADD PRIMARY KEY (`id_penalite`);

--
-- Index pour la table `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`id_profil`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `user_profil_FK` (`id_profil`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `balance_injure`
--
ALTER TABLE `balance_injure`
  MODIFY `id_bi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=219;

--
-- AUTO_INCREMENT pour la table `historique`
--
ALTER TABLE `historique`
  MODIFY `id_historique` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pour la table `penalite`
--
ALTER TABLE `penalite`
  MODIFY `id_penalite` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `profil`
--
ALTER TABLE `profil`
  MODIFY `id_profil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `balance_injure`
--
ALTER TABLE `balance_injure`
  ADD CONSTRAINT `balance_injure_penalite_FK` FOREIGN KEY (`id_penalite`) REFERENCES `penalite` (`id_penalite`),
  ADD CONSTRAINT `balance_injure_user0_FK` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Contraintes pour la table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_profil_FK` FOREIGN KEY (`id_profil`) REFERENCES `profil` (`id_profil`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
