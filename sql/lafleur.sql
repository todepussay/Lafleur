-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : ven. 05 mai 2023 à 08:57
-- Version du serveur : 8.0.31
-- Version de PHP : 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `lafleur`
--

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

DROP TABLE IF EXISTS `categorie`;
CREATE TABLE IF NOT EXISTS `categorie` (
  `cat_code` char(3) NOT NULL DEFAULT '',
  `cat_libelle` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`cat_code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`cat_code`, `cat_libelle`) VALUES
('bul', 'Bulbes'),
('mas', 'Plantes à massif'),
('ros', 'Rosiers');

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

DROP TABLE IF EXISTS `produit`;
CREATE TABLE IF NOT EXISTS `produit` (
  `pdt_ref` char(3) NOT NULL DEFAULT '',
  `pdt_designation` varchar(50) NOT NULL DEFAULT '',
  `pdt_prix` decimal(5,2) NOT NULL DEFAULT '0.00',
  `pdt_image` varchar(50) NOT NULL DEFAULT '',
  `pdt_categorie` char(3) NOT NULL DEFAULT '',
  PRIMARY KEY (`pdt_ref`),
  KEY `FK_categorie` (`pdt_categorie`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`pdt_ref`, `pdt_designation`, `pdt_prix`, `pdt_image`, `pdt_categorie`) VALUES
('b01', '3 bulbes de bégonias', '5.00', 'bulbes_begonia', 'bul'),
('b02', '10 bulbes de dahlias', '12.00', 'bulbes_dahlia', 'bul'),
('b03', '50 glaïeuls', '9.00', 'bulbes_glaieul', 'bul'),
('m01', 'Lot de 3 marguerites', '5.00', 'massif_marguerite', 'mas'),
('m02', 'Pour un bouquet de 6 pensées', '6.00', 'massif_pensee', 'mas'),
('m03', 'Mélange varié de 10 plantes à massif', '15.00', 'massif_melange', 'mas'),
('r01', '1 pied spécial grandes fleurs', '20.00', 'rosiers_gdefleur', 'ros'),
('r02', 'Une variété sélectionnée pour son parfum', '9.00', 'rosiers_parfum', 'ros'),
('r03', 'Rosier arbuste', '8.00', 'rosiers_arbuste', 'ros');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `email` varchar(1000) NOT NULL,
  `password` varchar(1000) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `prenom` varchar(60) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `telephone` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `nom`, `prenom`, `adresse`, `telephone`) VALUES
(1, 'tom@mail.com', '1234', '', '', '', ''),
(2, 'beaujoin@mail.com', '1324', '', '', '', '');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `produit`
--
ALTER TABLE `produit`
  ADD CONSTRAINT `FK_categorie` FOREIGN KEY (`pdt_categorie`) REFERENCES `categorie` (`cat_code`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
