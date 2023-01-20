-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 20 jan. 2023 à 21:48
-- Version du serveur : 10.4.25-MariaDB
-- Version de PHP : 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `wecare`
--

-- --------------------------------------------------------

--
-- Structure de la table `medicine`
--

CREATE TABLE `medicine` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `contenance` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `medicine`
--

INSERT INTO `medicine` (`id`, `name`, `category`, `price`, `contenance`, `image`) VALUES
(1, 'Arkorelax Sommeil Fort 8h Comprimés B/15', 'Bétaïne citrate', 40, 'tube(s) polypropylène polyéthylène de 20 comprimé(s)', 'arkorelax.jpg'),
(2, 'Biotin & Multivitamin for hair growth', 'Vitamines', 90, 'Vitamine C - acide ascorbique', 'govital.png'),
(3, 'Acerol C Vitamine C Naturelle Comprimés Pot/60', 'Vitamines', 45, 'tube(s) polypropylène polyéthylène de 20 comprimé(s)', 'acerol.jpg'),
(4, 'Berocca Energie Comprimés Effervescents Orange B/30', 'Vetamines', 60, '2 tube(s) polypropylène de 30 comprimé(s)', 'berocca.jpg');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `medicine`
--
ALTER TABLE `medicine`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `medicine`
--
ALTER TABLE `medicine`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
