-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : ven. 24 juin 2022 à 10:16
-- Version du serveur : 5.7.33
-- Version de PHP : 8.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `laravel`
--

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Accessoires de contention'),
(2, 'Accessoires de maintien de l\'ordre'),
(3, 'Vetements');

-- --------------------------------------------------------

--
-- Structure de la table `customers`
--

CREATE TABLE `customers` (
  `id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(80) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `postal_code` varchar(10) NOT NULL,
  `city` varchar(190) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `customers`
--

INSERT INTO `customers` (`id`, `first_name`, `last_name`, `email`, `address`, `postal_code`, `city`) VALUES
(1, 'Chuck', 'Norris', 'kfermoy0@google.com.hk', '01897 Di Loreto Court', '18190-000', 'Araçoiaba da Serra'),
(2, 'Charlize', 'Theron', 'gskipsea1@usatoday.com', '11 Bay Avenue', '6680', 'Bera'),
(3, 'Ryan', 'Gosling', 'oions2@sitemeter.com', '5 Acker Way', 'V3B', 'Coquitlam');

-- --------------------------------------------------------

--
-- Structure de la table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `customer_id` int(10) UNSIGNED NOT NULL,
  `number` char(10) NOT NULL,
  `date` datetime NOT NULL,
  `shipping` int(10) UNSIGNED NOT NULL,
  `total` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `orders`
--

INSERT INTO `orders` (`id`, `customer_id`, `number`, `date`, `shipping`, `total`) VALUES
(3, 1, '1231324', '2022-05-19 16:18:39', 50, NULL),
(4, 1, '1343733', '2022-05-13 16:20:28', 76, NULL),
(5, 2, '4343798', '2022-05-12 16:21:29', 52, NULL),
(6, 2, '7345234', '2022-05-17 16:21:34', 8, NULL),
(7, 2, '4867878', '2022-05-19 16:21:35', 7, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `order_product`
--

CREATE TABLE `order_product` (
  `order_id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `quantity` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `order_product`
--

INSERT INTO `order_product` (`order_id`, `product_id`, `quantity`) VALUES
(3, 1, 1),
(3, 2, 2),
(4, 6, 1),
(4, 5, 2),
(5, 1, 1),
(5, 5, 1),
(6, 2, 2),
(6, 6, 1),
(7, 1, 1),
(7, 6, 1);

-- --------------------------------------------------------

--
-- Structure de la table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `reference` varchar(100) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` int(50) UNSIGNED NOT NULL,
  `weight` int(100) UNSIGNED NOT NULL,
  `img_url` varchar(255) NOT NULL,
  `quantity_stock` int(10) UNSIGNED NOT NULL,
  `available` tinyint(4) NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `discount` tinyint(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `products`
--

INSERT INTO `products` (`id`, `reference`, `name`, `description`, `price`, `weight`, `img_url`, `quantity_stock`, `available`, `category_id`, `discount`) VALUES
(1, '1', 'Ginger - Ground', 'Brassicaceae', 100, 1000, 'https://picsum.photos/id/1/200/300', 10, 1, 1, 57),
(2, '2', 'Bag Clear 10 Lb', 'Fabaceae', 100, 1000, 'https://picsum.photos/id/1/200/300', 10, 1, 1, 44),
(3, '3', 'Ice Cream Bar - Hagen Daz', 'Cyperaceae', 10, 500, 'https://picsum.photos/id/1/200/300', 1, 1, 1, 59),
(4, '4', 'Cocoa Powder - Dutched', 'Araceae', 10, 500, 'https://picsum.photos/id/1/200/300', 1, 1, 1, 0),
(5, '5', 'Oranges', 'Fontinalaceae', 10, 500, 'https://picsum.photos/id/1/200/300', 1, 0, 1, 0),
(6, '6', 'Nantucket Orange Juice', 'Asteraceae', 10, 500, 'https://picsum.photos/id/1/200/300', 1, 0, 1, 82),
(7, '7', 'Coffee - Hazelnut Cream', 'Flacourtiaceae', 13, 500, 'https://picsum.photos/id/1/200/300', 0, 1, 2, 28),
(8, '8', 'Puree - Mocha', 'Caryophyllaceae', 13, 500, 'https://picsum.photos/id/1/200/300', 0, 1, 2, 0),
(9, '9', 'Salt - Rock, Course', 'Gleicheniaceae', 50, 1200, 'https://picsum.photos/id/1/200/300', 2, 1, 2, 71),
(10, '10', 'Bread Base - Goodhearth', 'Fabaceae', 50, 1200, 'https://picsum.photos/id/1/200/300', 2, 1, 2, 98),
(11, '11', 'Oil - Coconut', 'Euphorbiaceae', 500, 1200, 'https://picsum.photos/id/1/200/300', 5, 1, 3, 97),
(12, '12', 'Sauce - Balsamic Viniagrette', 'Asteraceae', 500, 1200, 'https://picsum.photos/id/1/200/300', 5, 1, 3, 76),
(13, '13', 'Wine - Sake', 'Scrophulariaceae', 500, 1200, 'https://picsum.photos/id/1/200/300', 5, 1, 3, 55),
(15, '12', 'fghs', 'jfsjsjs', 45, 412853, 'http://laravel.test/img/Monkeys_and_Bananas.png', 7, 1, 2, 56);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_fk0` (`customer_id`);

--
-- Index pour la table `order_product`
--
ALTER TABLE `order_product`
  ADD KEY `order_product_fk0` (`order_id`),
  ADD KEY `order_product_fk1` (`product_id`);

--
-- Index pour la table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_fk0` (`category_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_fk0` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`);

--
-- Contraintes pour la table `order_product`
--
ALTER TABLE `order_product`
  ADD CONSTRAINT `order_product_fk0` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`),
  ADD CONSTRAINT `order_product_fk1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Contraintes pour la table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_fk0` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
