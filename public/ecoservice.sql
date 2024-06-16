-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  Dim 16 juin 2024 à 11:50
-- Version du serveur :  5.7.23
-- Version de PHP :  7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `ecoservice`
--

-- --------------------------------------------------------

--
-- Structure de la table `admins`
--

DROP TABLE IF EXISTS `admins`;
CREATE TABLE IF NOT EXISTS `admins` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(128) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `admins`
--

INSERT INTO `admins` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin23');

-- --------------------------------------------------------

--
-- Structure de la table `demande_devis`
--

DROP TABLE IF EXISTS `demande_devis`;
CREATE TABLE IF NOT EXISTS `demande_devis` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `entreprise` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telephone` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` mediumtext COLLATE utf8mb4_unicode_ci,
  `etat` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_demande` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `demande_devis`
--

INSERT INTO `demande_devis` (`id`, `nom`, `entreprise`, `email`, `telephone`, `service`, `description`, `etat`, `date_demande`) VALUES
(1, 'tagouyem tamboula', 'softcare', 'arthurotamboula10@gmail.com', '+237654141681', 'collecte-recyclage-dechets', 'yugfyifyuaeuafeuiavdfuoadvfausdfsudfasdfsd', 'traitement encours', '2024-06-14 11:07:37'),
(2, 'Koko', 'fitnessfusion', 'arthurotamboula10@gmail.com', '654141681', 'collecte-recyclage-dechets', 'jagrfforauirgfaruifgajsdbfjsdvjhsvjhsvdjhsdfsadfasd', 'traitement encours', '2024-06-14 12:25:47'),
(3, 'kiko demon', 'arsreb', 'asasasas@gmail.com', '+23793137534', 'gestion-dechets-industriels', 'dasdasdgfgsdfgdfgdfgfgdgdfgdfgfdsdfsddsd', 'en attente', '2024-06-15 14:54:01'),
(4, 'KABREL', 'Négociateur', 'arthurotamboula10@gmail.com', '+237 0654141681', 'collecte-recyclage-dechets', 'uiiuelibjksbd,fbsdj,kfsbdlffjdf,sjhjre\r\ngfjshldkjhslkjshlkjshdksjhfgkjsfgfg.', 'demande traitee', '2024-06-15 16:13:30'),
(5, 'tagouyem tamboula', 'softcare', 'arthurotamboula10@gmail.com', '+237654141681', 'collecte-recyclage-dechets', 'yugfyifyuaeuafeuiavdfuoadvfausdfsudfasdfsd', 'en attente', '2024-06-15 17:04:20'),
(6, 'tagouyem tamboula', 'softcare', 'arthurotamboula10@gmail.com', '+237654141681', 'collecte-recyclage-dechets', 'yugfyifyuaeuafeuiavdfuoadvfausdfsudfasdfsd', 'en attente', '2024-06-15 17:08:35'),
(7, 'Arthuro', 'Careforyou', 'shopifyshopnow10@gmail.com', '654141681', 'destruction-securisee-documents', 'bonjour nous avons des documents top secretes', 'en attente', '2024-06-16 07:03:36'),
(8, 'Tagouyem Tamboula', 'fusion pro', 'kabreltagouyem@gmail.com', '+237 654141681', 'gestion-dechets-industriels', 'Voici un message de description d\'une entreprise sollicitant les services d\'EcoService pour la gestion des déchets industriels :\r\n\r\nDemande de Devis pour la Gestion des Déchets Industriels\r\n\r\nChère équipe d\'EcoService,\r\n\r\nNous sommes une entreprise spécialisée dans [nom de l\'industrie] et nous recherchons des solutions efficaces et durables pour la gestion de nos déchets industriels. Nous avons pris connaissance de votre expertise en la matière et souhaiterions obtenir un devis pour les services suivants :\r\n\r\nCollecte sur site : Nous avons besoin de services de collecte régulière ou ponctuelle de nos déchets industriels, comprenant des métaux, plastiques, bois et déchets dangereux.\r\nTraitement et valorisation : Nous souhaitons que nos déchets soient traités et valorisés de manière conforme aux réglementations environnementales. Nous recherchons des solutions pour maximiser le recyclage et la réutilisation des matériaux', 'en attente', '2024-06-16 11:45:41');

-- --------------------------------------------------------

--
-- Structure de la table `inscription`
--

DROP TABLE IF EXISTS `inscription`;
CREATE TABLE IF NOT EXISTS `inscription` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_inscription` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `inscription`
--

INSERT INTO `inscription` (`id`, `nom`, `email`, `password`, `user_type`, `date_inscription`) VALUES
(1, 'toto', 'kabreltagouyem@gmail.com', 'Toto2001$#', 'particulier', '2024-06-14 12:42:58'),
(2, 'armando', 'kabreltagouyem@gmail.com', 'Toto2001#', 'professionnel', '2024-06-16 06:59:55');

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

DROP TABLE IF EXISTS `produit`;
CREATE TABLE IF NOT EXISTS `produit` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` float NOT NULL,
  `stock` int(11) NOT NULL,
  `category` varchar(255) NOT NULL,
  `etat` varchar(255) NOT NULL,
  `image_path` longblob NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`id`, `name`, `description`, `price`, `stock`, `category`, `etat`, `image_path`) VALUES
(3, 'detergent naturel', 'Detergents ecologiques pour un nettoyage respectueux de\r\nl\'environnement.', 12, 1212, 'Produits pour la Maison', 'disponible', 0x363636653662323564636538615f363636633737313431303435355f646574657267656e742e6a7067),
(4, 'Bocaux en verre', 'Bocaux reutilisables pour stockage alimentaire durable.\r\n', 9, 36, 'Produits pour le Quotidien', 'disponible', 0x363636643461336663646538325f626f636175782d6465636f726174696f6e2d63756973696e652d73746f636b65722d616c696d656e74732d736563732e77656270),
(5, 'Vinaigre blanc multi-usages', 'Vinaigre naturel pour le nettoyage et la desinfection.', 29, 300, 'Produits pour le Quotidien', 'disponible', 0x363636646139623831346434315f76696e61696772652e6a7067),
(6, 'Bicarbonate de soude', 'Poudre polyvalente pour nettoyer, desodoriser et plus', 12, 150, 'Produits pour la Maison', 'disponible', 0x363636656131636332613732365f70726f647569742d6e6574746f79616e742d61752d6269636172626f6e6174652d64652d736f7564652d6e61747572656c2d6d756c74692d7573616765732d6272696f6368696e2e6a7067),
(7, 'Films alimentaires reutilisables (cire d\'abeille)', 'Films en cire d\'abeille pour\r\nemballer et conserver.', 5, 23, 'Produits pour la Maison', 'disponible', 0x363636656132616263386366375f7365742d64652d322d656d62616c6c616765732dc3a02d6c612d636972652d642d616265696c6c652d6d6f746966732d70c3a274697373657269652d732d65742d6d2d72657573652d6d652e6a7067),
(8, 'Serviettes en tissu', 'Serviettes reutilisables pour une cuisine zero dechet', 5, 40, 'Produits pour le Quotidien', 'disponible', 0x363636656133353539323639395f5336356661353766306463393434386161613137396661386564356464613331344c2e6a70675f363430783634305139302e6a70675f2e77656270),
(9, 'Eponges compostables :', ' Eponges biodegradables pour un nettoyage ecologique', 2, 120, 'Produits pour la Maison', 'disponible', 0x363636656133633535336230645f706f6e67652d522d63757265722d656e2d436f746f6e2d322d46616365732d4162736f7262616e742d6c2d4561752d416e74692d4164682d7369662d706f75722d6c612e6a7067),
(10, 'Pailles en acier inoxydable', 'Pailles durables et reutilisables en acier.\r\n', 2, 150, 'Produits pour le Quotidien', 'disponible', 0x363636656134346337386530655f36616430393862652d393464392d343264652d393030622d3363376464396666363834612e63326639336166346363343031373966313136343832383065343761616632382e6a706567),
(11, 'Brosses a dents en bambou ', 'Brosses biodegradables pour une hygiene buccodentaire ecologique.', 1, 130, 'Produits pour le Quotidien', 'disponible', 0x363636656135646664343562325f363636656134626638323439335f42616d626f6f2d3037335f313032345f636f6d70726573732e6a7067),
(12, 'Rasoirs reutilisables', 'Rasoirs durables pour reduire les dechets.', 10, 47, 'Produits pour le Quotidien', 'disponible', 0x363636656135326463303063375f7261736f69722d7a65726f2d6465636865742e6a7067),
(15, 'Lingettes demaquillantes lavables ', ' Lingettes reutilisables pour un demaquillage\r\necologique.', 5, 234, 'Produits pour le Quotidien', 'disponible', 0x363636656137643035336334395f6c696e67657474652d62626965732d767261632e6a7067),
(16, 'Cotons-tiges biodegradables', ' Cotons-tiges compostables en materiaux naturels.', 10, 235, 'Produits pour le Quotidien', 'disponible', 0x363636656138646533383537385f636f746f6e2d746967652d62616d626f752e6a7067),
(17, 'Shampoing et savon solides', ' Produits solides pour reduire les emballages plastiques.', 12, 19, 'Produits pour le Quotidien', 'disponible', 0x363636656139653631643932325f3434382d7361766f6e2d7368616d706f6f696e672d352e706e67),
(18, 'Boites a repas en acier inoxydable', ' Boites a lunch durables pour emporter vos repas', 7, 20, 'Produits pour le Quotidien', 'disponible', 0x363636656161613065316363375f363636656161366436393363335f62656e746f2d626f782d656e2d6d6574616c2d626f6974652d72657061732d706f75722d6164756c7465732d6c756e63682e6a7067),
(19, 'Vetements en coton bio', 'Vetements fabriques en coton biologique respectueux de la\r\npeau.', 2, 34, 'Produits pour les Bebes et Enfants', 'disponible', 0x363636656163623462613035325f3535343933303146312e6a7067),
(20, 'Lit pour animaux en fibres naturelles', ' Lits ecologiques pour le confort de vos\r\nanimaux.\r\n', 5, 140, 'Produits pour les Animaux', 'disponible', 0x363636656164373639633764345f696c5f353730784e2e333732393632323330375f69666f352e6a7067),
(21, 'Laisses et colliers en chanvre ', 'Accessoires durables et naturels pour animaux.', 25, 150, 'Produits pour les Animaux', 'disponible', 0x363636656164643035663032625f696c5f353730784e2e333135303336333731315f623469662e6a7067),
(22, 'Sacs a vrac en coton', 'Sacs reutilisables pour achats en vrac.\r\n', 3, 200, 'Emballages Réutilisables', 'disponible', 0x363636656165326330336337615f313031302d3030332e6a7067),
(23, 'Couches lavables', 'Couches reutilisables pour reduire les dechets.', 4, 200, 'Produits pour les Bébés et Enfants', 'disponible', 0x363636656165666362663238345f436f756368652d4c617661626c652d5072656d696572732d4d6f6d656e74732d436f756368652d65742d496e736572742e6a7067);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
