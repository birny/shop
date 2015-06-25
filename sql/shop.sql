-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 11 Juin 2015 à 17:31
-- Version du serveur :  5.6.21
-- Version de PHP :  5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `shop`
--

-- --------------------------------------------------------

--
-- Structure de la table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
`id` int(20) NOT NULL,
  `category` int(3) NOT NULL,
  `name` varchar(20) CHARACTER SET utf8 NOT NULL,
  `description` text CHARACTER SET utf8 NOT NULL,
  `price` decimal(11,2) NOT NULL,
  `picture` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `rating` decimal(2,1) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `products`
--

INSERT INTO `products` (`id`, `category`, `name`, `description`, `price`, `picture`, `rating`, `date`) VALUES
(1, 0, 'Iphone 5c', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In consectetur congue turpis, et sollicitudin turpis hendrerit a. Fusce a dignissim felis. Fusce tincidunt et eros id scelerisque. Donec pellentesque magna eget sodales vehicula. Sed id felis aliquet, sollicitudin nisl et, fringilla ipsum', '120.00', '', '0.9', '2015-01-11 00:00:00'),
(2, 3, 'Machine a laver', 'Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum\r\n\r\nProduct features :\r\n\r\nLorem ipsum dolor sit amet\r\nUt enim ad minim veniam\r\nConsectetur adipisicing elit\r\nSed do eiusmod tempor incididunt\r\nSunt in culpa qui officia deserunt\r\nSee more product infos at http://www.brand.com/product/.', '80.00', '', '0.4', '2015-02-11 00:00:00'),
(3, 2, 'HTC sence', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In consectetur congue turpis, et sollicitudin turpis hendrerit a. Fusce a dignissim felis. Fusce tincidunt et eros id scelerisque. Donec pellentesque magna eget sodales vehicula. Sed id felis aliquet, sollicitudin nisl et, fringilla ipsum', '170.00', '', '9.9', '2014-06-11 00:00:00'),
(4, 4, 'MicroOnde Bosh', 'BUt enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum\r\n\r\nProduct features :\r\n\r\nLorem ipsum dolor sit amet\r\nUt enim ad minim veniam\r\nConsectetur adipisicing elit\r\nSed do eiusmod tempor incididunt\r\nSunt in culpa qui officia deserunt\r\nSee more product infos at http://www.brand.com/product/.', '70.00', '', '0.4', '2015-04-11 00:00:00'),
(5, 5, 'Ecouteur Monster', 'Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum\r\n\r\nProduct features :\r\n\r\nLorem ipsum dolor sit amet\r\nUt enim ad minim veniam\r\nConsectetur adipisicing elit\r\nSed do eiusmod tempor incididunt\r\nSunt in culpa qui officia deserunt\r\nSee more product infos at http://www.brand.com/product/.', '30.00', '', '9.9', '2015-06-11 00:00:00'),
(6, 6, 'Lave Vaisselles', 'Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum\r\n\r\nProduct features :\r\n\r\nLorem ipsum dolor sit amet\r\nUt enim ad minim veniam\r\nConsectetur adipisicing elit\r\nSed do eiusmod tempor incididunt\r\nSunt in culpa qui officia deserunt\r\nSee more product infos at http://www.brand.com/product/.', '99.00', '', '0.9', '2013-06-11 00:00:00'),
(7, 3, 'MacBook', 'Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum\r\n\r\nProduct features :\r\n\r\nLorem ipsum dolor sit amet\r\nUt enim ad minim veniam\r\nConsectetur adipisicing elit\r\nSed do eiusmod tempor incididunt\r\nSunt in culpa qui officia deserunt\r\nSee more product infos at http://www.brand.com/product/.', '80.00', '', '9.9', '2013-06-11 00:00:00'),
(8, 1, 'Samsung Grand', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In consectetur congue turpis, et sollicitudin turpis hendrerit a. Fusce a dignissim felis. Fusce tincidunt et eros id scelerisque. Donec pellentesque magna eget sodales vehicula. Sed id felis aliquet, sollicitudin nisl et, fringilla ipsum', '120.00', '', '9.9', '2010-06-11 00:00:00'),
(9, 6, 'Ecouteur sans fil', 'Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum\r\n\r\nProduct features :\r\n\r\nLorem ipsum dolor sit amet\r\nUt enim ad minim veniam\r\nConsectetur adipisicing elit\r\nSed do eiusmod tempor incididunt\r\nSunt in culpa qui officia deserunt\r\nSee more product infos at http://www.brand.com/product/.', '99.00', '', '0.7', '2015-06-11 00:00:00');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `products`
--
ALTER TABLE `products`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `products`
--
ALTER TABLE `products`
MODIFY `id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
