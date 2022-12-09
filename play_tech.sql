-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 06 déc. 2022 à 12:16
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
-- Base de données : `play_tech`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`, `username`) VALUES
(1, 'mhkif@gmail.com', 'azertyuio', 'Abdelmalek'),
(3, 'fadwa@gmail.com', 'aqwzsxedc', 'Fadwa');

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `id_cat` int(4) NOT NULL,
  `categorie` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id_cat`, `categorie`) VALUES
(1, 'Accessories'),
(2, 'Consoles'),
(3, 'Laptops'),
(4, 'Desktops');

-- --------------------------------------------------------

--
-- Structure de la table `produits`
--

CREATE TABLE `produits` (
  `id_prod` int(4) NOT NULL,
  `title` varchar(20) NOT NULL,
  `image` varchar(300) NOT NULL,
  `prix` float NOT NULL,
  `quantite` int(4) NOT NULL,
  `id_cat` int(4) NOT NULL,
  `img_hover` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `produits`
--

INSERT INTO `produits` (`id_prod`, `title`, `image`, `prix`, `quantite`, `id_cat`, `img_hover`) VALUES
(14, 'Razer', 'atlas-gaming-asus-rog-strix-g17-a-removebg-preview.png', 12345, 34, 2, ''),
(16, 'Marvo scorpion ', '9.png', 400, 18, 1, ''),
(17, 'Logitech Hero', '2.png', 570, 40, 1, ''),
(19, 'Ducky Channel ', '10.png', 1590, 14, 1, ''),
(20, 'Nari essential ', '7.png', 1190, 30, 1, ''),
(21, 'Razer Kraken', '5.png', 990, 45, 1, ''),
(23, 'Acer Nitro 5 ', 'easy-gaming-acer-nitro-5-1-removebg-preview.png', 21900, 14, 1, ''),
(24, 'MSI GF65-10SDR ', 'atlas-gaming-msi-gf65-a-1-removebg-preview.png', 12900, 25, 3, ''),
(25, 'Asus ROG STRIX ', 'atlas-gaming-asus-rog-strix-g17-b-removebg-preview.png', 26900, 14, 3, ''),
(26, 'MSI GP76 Leopard ', 'atlas-gaming-msi-gp76-leopard-a-removebg-preview.png', 28500, 12, 3, ''),
(27, 'Sony Playstation ', '8.png', 7970, 34, 2, ''),
(29, 'Nintendo Wireless', '10.png', 299, 50, 2, '');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id_cat`);

--
-- Index pour la table `produits`
--
ALTER TABLE `produits`
  ADD PRIMARY KEY (`id_prod`),
  ADD KEY `id_cat` (`id_cat`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `id_cat` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `produits`
--
ALTER TABLE `produits`
  MODIFY `id_prod` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
