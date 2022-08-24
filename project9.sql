-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : mer. 24 août 2022 à 15:03
-- Version du serveur : 5.7.34
-- Version de PHP : 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `project9`
--

-- --------------------------------------------------------

--
-- Structure de la table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'aaaa'),
(2, 'Boulangerie'),
(3, 'Patisserie'),
(4, 'Crêperie');

-- --------------------------------------------------------

--
-- Structure de la table `city`
--

CREATE TABLE `city` (
  `id` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `lat` decimal(10,8) DEFAULT NULL,
  `lng` decimal(11,8) DEFAULT NULL,
  `district` varchar(255) DEFAULT NULL,
  `city_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `city`
--

INSERT INTO `city` (`id`, `name`, `lat`, `lng`, `district`, `city_id`) VALUES
(1, 'Paris', '48.85349510', '2.34839150', '', 1);

-- --------------------------------------------------------

--
-- Structure de la table `favorites`
--

CREATE TABLE `favorites` (
  `id` int(11) NOT NULL,
  `fk_place_id` int(11) DEFAULT NULL,
  `fk_user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `place`
--

CREATE TABLE `place` (
  `id` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `adress` varchar(255) DEFAULT NULL,
  `lat` decimal(10,8) DEFAULT NULL,
  `lng` decimal(11,8) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `city_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `place`
--

INSERT INTO `place` (`id`, `name`, `adress`, `lat`, `lng`, `img`, `city_id`, `category_id`) VALUES
(4, 'UUUU', 'ssdfsdgsdgsdg', '51.52671700', '-0.08754700', 'sqd', 1, 1),
(5, 'Jacques Genin', '133 rue de Turenne 75003 Paris', '48.86446910', '2.36461600', 'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ffrancetravelblog.com%2Fwp-content%2Fuploads%2F2020%2F04%2FJacques-Genin-in-Paris.jpg&f=1&nofb=1', 1, 3),
(6, 'Angelina ', '226 Rue de Rivoli, 75008 Paris, France', '48.86504420', '2.32838920', 'https://img0.etsystatic.com/051/0/6470801/il_fullxfull.727279020_iexu.jpg', 1, 3),
(7, 'Carette', '25 Place des Vosges, Paris, FR 75003', '48.85630230', '2.36546460', 'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Felopeinparis.com%2Fwp-content%2Fuploads%2F2014%2F06%2Fcarrette.jpg&f=1&nofb=1', 1, 3),
(8, 'La pâtisserie Cyril Lignac', '2 Rue de Chaillot, 75116 Paris, France', '48.86654930', '2.29679110', 'https://sortir.telerama.fr/sites/tr_master/files/styles/m_plus_640x360/public/assets/images/place/80/16/3/originale.jpg?itok=m-5yaTqF', 1, 3),
(9, 'Pain Pain', '88, rue des Martyrs – 75018 Paris', '48.88349040', '2.33984180', 'http://www.pain-pain.fr/pain-contenu/uploads/2014/05/painpain-1-00059.jpg', 1, 2),
(10, 'Le petit grain', '7 Rue Dénoyez, 75020 Paris, France ', '48.87139360', '2.37861030', 'https://www.davidlebovitz.com/wp-content/uploads/2018/09/Le-petit-grain-paris-bakery-boulangerie-patisserie-pastry-shop-7-640x427.jpg', 1, 2),
(11, 'Pane Vivo', '49 Rue de la Chine, 75020 Paris, France', '48.86925590', '2.39661800', 'https://cdn.shopify.com/s/files/1/0262/5509/7902/files/pane_vivo_pain_logo_1200x1200.png?v=1588536615', 1, 2),
(12, 'Boulangerie Chambelland', '14 Rue Ternaux, 75011 Paris', '48.86439230', '2.37330210', 'https://www.chambelland.com/wp-content/uploads/2021/11/corner-bien-epicerie.jpg', 1, 2),
(13, 'La creme de Paris ', '4 Rue du Faubourg Montmartre, 75009 Paris, France', '48.87443542', '2.34184694', 'https://d2ghx89bmumb3r.cloudfront.net/news-upload/2340/6-la-creme-de-paris-resto-gluten-free-paris-crepe-gaufre-glace-creditphoto-fannyb-parisbouge.jpg', 1, 4),
(14, 'Patakrep', 'Patakrep, 89 Rue Duhesme, 75018 Paris, France', '48.89454570', '2.34417160', 'https://worldinparis.com/wp-content/uploads/2019/04/Lucette-Fait-des-Crepes-Paris.jpg', 1, 4),
(15, 'Brocéliandre', '15 Rue des Trois Frères, 75018 Paris, France', '48.88505936', '2.34016013', 'https://le-de.cdn-website.com/72c924c171af43408160d480c77f3411/dms3rep/multi/opt/db396cdb04274e28820678a6c172e670-0a22a17a-384w.jpg', 1, 4),
(16, 'La crêperie mon ami', '7 Rue Joseph de Maistre, 75018 Paris, France', '48.88931274', '2.33161950', 'https://www.creperie-coubert.fr/ressources/images/e7b63955122d.jpg', 1, 4);

-- --------------------------------------------------------

--
-- Structure de la table `review`
--

CREATE TABLE `review` (
  `id` int(11) NOT NULL,
  `content` text,
  `publish_at` datetime DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `place_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `user_name` varchar(45) DEFAULT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `role` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_city_city1_idx` (`city_id`);

--
-- Index pour la table `favorites`
--
ALTER TABLE `favorites`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_place_id` (`fk_place_id`),
  ADD KEY `fk_user_id` (`fk_user_id`);

--
-- Index pour la table `place`
--
ALTER TABLE `place`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_place_city1_idx` (`city_id`),
  ADD KEY `fk_place_category1_idx` (`category_id`);

--
-- Index pour la table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_review_user_idx` (`user_id`),
  ADD KEY `fk_review_place1_idx` (`place_id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email_UNIQUE` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `city`
--
ALTER TABLE `city`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `place`
--
ALTER TABLE `place`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT pour la table `review`
--
ALTER TABLE `review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `city`
--
ALTER TABLE `city`
  ADD CONSTRAINT `fk_city_city1` FOREIGN KEY (`city_id`) REFERENCES `city` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `favorites`
--
ALTER TABLE `favorites`
  ADD CONSTRAINT `favorites_ibfk_1` FOREIGN KEY (`fk_place_id`) REFERENCES `place` (`id`),
  ADD CONSTRAINT `favorites_ibfk_2` FOREIGN KEY (`fk_user_id`) REFERENCES `user` (`id`);

--
-- Contraintes pour la table `place`
--
ALTER TABLE `place`
  ADD CONSTRAINT `fk_place_category1` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_place_city1` FOREIGN KEY (`city_id`) REFERENCES `city` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `fk_review_place1` FOREIGN KEY (`place_id`) REFERENCES `place` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_review_user` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
