-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : mar. 06 juil. 2021 à 09:40
-- Version du serveur :  5.7.24
-- Version de PHP : 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `back_office`
--

-- --------------------------------------------------------

--
-- Structure de la table `projects`
--

CREATE TABLE `projects` (
  `project_favicon` varchar(255) DEFAULT NULL,
  `project_id` int(11) NOT NULL,
  `project_title` varchar(255) NOT NULL,
  `project_picture` varchar(255) DEFAULT NULL,
  `project_begin` date NOT NULL,
  `project_end` date NOT NULL,
  `project_context` text NOT NULL,
  `project_specs` text NOT NULL,
  `project_coworkers` varchar(255) DEFAULT NULL,
  `project_technologies` varchar(255) NOT NULL,
  `project_design_file` varchar(255) DEFAULT NULL,
  `project_link_website` text NOT NULL,
  `project_link_github` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `projects`
--

INSERT INTO `projects` (`project_favicon`, `project_id`, `project_title`, `project_picture`, `project_begin`, `project_end`, `project_context`, `project_specs`, `project_coworkers`, `project_technologies`, `project_design_file`, `project_link_website`, `project_link_github`) VALUES
('favicon_nm.gif', 1, 'nicolasmaes .fr', 'wavy.gif', '2020-11-16', '2020-11-27', 'Mon premier site codÃ© tout seul. Assez simple mais j\'en suis plutÃ´t fier pour mon niveau de l\'Ã©poque. Il m\'a Ã©tÃ© bien utile pour intÃ©grer l\'Access Code School !', 'utilisation de Mailchimp pour la gestion de la newsletter, Pouvoir passer du franÃ§ais Ã  l\'anglais, Ecrire un e-mail depuis le site, avoir un CV tÃ©lÃ©chargeable depuis le site.', 'aucun', 'HTML, CSS, JavaScript, Mailchimp', '', 'https://www.nicolasmaes.fr/', 'https://github.com/Nicolasmaes/my-first-website'),
(NULL, 2, 'Zozor', 'zozor.png', '2021-02-15', '2021-02-17', 'IntÃ©gration d\'une maquette durant un cours OpenClassrooms. Exercice trÃ¨s intÃ©ressant pour mon niveau de l\'Ã©poque', 'aucune', 'aucun', 'HTML et CSS', 'zozor.png', 'https://nicolasm.promo-68.codeur.online/unseen', 'https://github.com/Nicolasmaes/unseen'),
('pizza_favicon.png', 3, 'Pizzeria landing page', 'pizzeria.png', '2021-03-22', '2021-06-30', 'IntÃ©gration d\'une maquette tÃ©lÃ©chargÃ©e sur Figma, premier projet Ã  l\'Access Code School', 'Prise en compte du responsive\r\nIntÃ©gration d\'un menu hamburger et choix de la disposition en version mobile', 'aucun', 'HTML, CSS, Figma et Photoshop', '', '', 'https://github.com/Nicolasmaes/zoning_wireframe_pizza'),
('favicon_unseen.png', 4, 'Unseen', 'unseen.png', '2021-04-05', '2021-04-28', 'Premier gros projet Ã  l\'Access Code School. Il nous est demandÃ© de concevoir et dâ€™intÃ©grer un site web qui regroupe les articles rÃ©digÃ©s par tous les stagiaires de notre formation. Ces articles concernent les mÃ©tiers du web en gÃ©nÃ©ral.', 'Un bouton qui affiche un article de manière aléatoire', 'Luc Leneuf', 'HTML, CSS, JavaScript, Figma, Photoshop, Illustrator, Powerpoint', 'design_brief_unseen.pdf', 'https://nicolasm.promo-68.codeur.online/unseen', 'https://github.com/Nicolasmaes/unseen'),
('favicon_a11e.png', 5, 'a11Ã©', 'a11e.png', '2021-05-06', '2021-06-20', 'Nous avons conÃ§u un site qui explique le rapport qu\'entretiennent les sourds avec le web.', 'Concevoir et intÃ©grer un traducteur pour Ã©peler un mot en langue des signes franÃ§aise, filmer et sous-titrer la vidÃ©o d\'introduction', 'Tiavina Ralandison\r\nSonia Rolland\r\nLuc Leneuf\r\nHervÃ© Richard\r\nAdam Bederiat\r\nAdrien Raymond\r\nRomain Poissonnier\r\n', 'HTML, CSS, JavaScript, PHP, Photoshop, Illustrator, Figma, Powerpoint', 'design_brief_a11e.pdf', 'https://nicolasm.promo-68.codeur.online/a11e', 'https://github.com/Nicolasmaes/a11e'),
('favicon_nowher.png', 6, 'Nowher', 'nowher.png', '2021-05-25', '2021-06-09', 'Nous avons intÃ©grÃ© un site conÃ§u par d\'autres stagiaires, un site qui parle des diffÃ©rentes dÃ©ficiences mentales.', 'IntÃ©grer un bouton qui permet de diffÃ©rencier les lettres pour aider les dyslexiques, un bouton qui gorssit automatiquement la taille des polices, rendre le site complÃ©tement navigables sans souris et sans la vue', 'Karina El Yacoubi\r\nEtienne Zastko\r\nNathan Boutaud\r\nJean-Baptiste Druet\r\nHervÃ© Richard\r\nAdam Bederiat\r\nAdrien Raymond', 'HTML, CSS, JavaScript, PHP, Figma, Powerpoint, Photoshop, Illustrator, Git et Github', 'design_brief_nowher.pdf', 'https://nicolasm.promo-68.codeur.online/nowher', 'https://github.com/Nicolasmaes/nowher');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(11, 'nicolas', 'n.maes@codeur.online', '$2y$10$P5I6GRsDQvn9dWKbMcbEPOzJqF4f5Y64rgEIvAgqJtK4yuQtYkINK');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`project_id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `projects`
--
ALTER TABLE `projects`
  MODIFY `project_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
