-- phpMyAdmin SQL Dump
-- version 5.2.1deb3
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : lun. 15 sep. 2025 à 11:08
-- Version du serveur : 8.0.43-0ubuntu0.24.04.1
-- Version de PHP : 8.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `quotes`
--

-- --------------------------------------------------------

--
-- Structure de la table `author`
--

CREATE TABLE `author` (
  `id` int NOT NULL,
  `name` varchar(63) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `biography` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `birthday` date DEFAULT NULL,
  `deathday` date DEFAULT NULL,
  `image_src` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `author`
--

INSERT INTO `author` (`id`, `name`, `biography`, `birthday`, `deathday`, `image_src`, `created_at`, `updated_at`) VALUES
(1, 'Albert Einstein', 'Albert Einstein (1879–1955) fut l’un des physiciens les plus influents du XXe siècle. Né à Ulm en Allemagne, il manifesta dès son enfance une curiosité intense pour les phénomènes naturels et les mathématiques. Après ses études, il travailla à l’office des brevets de Berne, période durant laquelle il publia en 1905 ses célèbres articles de l’« année miraculeuse ».  \r\nSon approche novatrice bouleversa la compréhension de l’espace, du temps et de la matière. La théorie de la relativité restreinte, puis générale, transforma la physique moderne. Einstein fut aussi un vulgarisateur, cherchant à rendre ses idées accessibles au grand public.  \r\nIl reçut le prix Nobel de physique en 1921 pour ses travaux sur l’effet photoélectrique, qui ouvrit la voie à la mécanique quantique. Contraint à l’exil par le nazisme, il s’installa aux États-Unis et enseigna à Princeton.  \r\nParallèlement à son travail scientifique, il s’engagea pour la paix, les droits civiques et le sionisme. Sa personnalité chaleureuse et son apparence reconnaissable en firent une icône mondiale.  \r\nSon héritage perdure, tant dans les sciences que dans la culture populaire. Son nom est devenu synonyme de génie et de curiosité intellectuelle universelle.', '1879-03-14', '1955-04-18', 'https://upload.wikimedia.org/wikipedia/commons/d/d3/Albert_Einstein_Head.jpg', '2025-08-26 11:54:25', NULL),
(2, 'Simone de Beauvoir', 'Simone de Beauvoir (1908–1986) fut une philosophe, romancière et intellectuelle française majeure du XXe siècle. Née à Paris dans une famille bourgeoise, elle s’illustra très tôt par son goût pour la lecture et la réflexion critique. Agrégée de philosophie, elle entretint une relation intellectuelle et personnelle profonde avec Jean-Paul Sartre.  \r\nFigure essentielle de l’existentialisme, elle s’interrogea sur la liberté, la condition humaine et les choix individuels. Mais c’est surtout son œuvre féministe, notamment « Le Deuxième Sexe » (1949), qui marqua durablement l’histoire des idées.  \r\nDans cet essai, elle analysa les mécanismes sociaux, culturels et historiques qui maintiennent les femmes dans une position subalterne. La formule « On ne naît pas femme : on le devient » devint un slogan mondial.  \r\nSimone de Beauvoir s’engagea dans les luttes pour l’égalité, le droit à la contraception et à l’avortement. Son influence fut déterminante pour le mouvement féministe contemporain.  \r\nOutre la philosophie, elle écrivit de nombreux romans, mémoires et essais, retraçant à la fois son parcours personnel et son époque. Elle demeure une figure incontournable de la pensée critique, de la liberté individuelle et de l’émancipation des femmes.', '1908-01-09', '1986-04-14', NULL, '2025-08-26 11:54:25', NULL),
(3, 'Mark Twain', 'Mark Twain (1835–1910), de son vrai nom Samuel Langhorne Clemens, est considéré comme l’un des plus grands écrivains américains. Né dans le Missouri, il connut une enfance marquée par la vie au bord du Mississippi, fleuve qui inspira profondément son imaginaire littéraire.  \r\nIl exerça divers métiers, dont celui de pilote de bateaux à vapeur, avant de se tourner vers l’écriture. Ses récits, empreints d’humour et de critique sociale, dépeignent avec vivacité la société américaine du XIXe siècle.  \r\nParmi ses œuvres les plus célèbres figurent « Les Aventures de Tom Sawyer » (1876) et « Les Aventures de Huckleberry Finn » (1884), souvent considérées comme des classiques fondateurs de la littérature américaine moderne.  \r\nTwain se distingua par son style ironique, sa capacité à saisir le parler populaire et sa dénonciation de l’hypocrisie et du racisme. Sa plume, à la fois drôle et acérée, séduisit des générations de lecteurs à travers le monde.  \r\nAu-delà de la littérature, il mena une vie marquée par le succès mais aussi par les difficultés financières et les drames personnels. Son esprit libre et satirique lui valut une notoriété internationale. Aujourd’hui, Mark Twain est reconnu comme une voix intemporelle de l’Amérique, un observateur lucide et un maître du récit.', '1835-11-30', '1910-04-21', 'https://upload.wikimedia.org/wikipedia/commons/0/0c/Mark_Twain_by_AF_Bradley.jpg', '2025-08-26 11:54:25', NULL),
(4, 'Confucius', 'Confucius (551–479 av. J.-C.) fut un philosophe et penseur chinois dont l’influence s’étend encore aujourd’hui. Né dans l’État de Lu, il connut une jeunesse modeste mais fit preuve très tôt d’un intérêt profond pour l’étude et l’enseignement.  \r\nSes réflexions portaient sur l’éthique, la politique et les relations humaines. Il prônait la vertu, la piété filiale, le respect des aînés et l’importance de l’éducation. Ses enseignements furent compilés par ses disciples dans les « Entretiens de Confucius » (Lunyu).  \r\nIl développa une pensée centrée sur l’harmonie sociale, fondée sur la bienveillance, la justice et le respect des rites. Pour lui, le bon gouvernement devait reposer sur la moralité des dirigeants plus que sur la force des lois.  \r\nBien que n’ayant pas toujours occupé de hautes fonctions politiques, il parcourut divers royaumes pour conseiller les souverains. Sa vision marqua durablement la culture chinoise et inspira un système de valeurs connu sous le nom de confucianisme.  \r\nPendant plus de deux millénaires, ses idées guidèrent l’organisation sociale et politique en Chine et influencèrent toute l’Asie de l’Est. Aujourd’hui encore, Confucius reste une figure universelle de sagesse, de modération et de recherche du bien commun.', '0551-09-28', '0479-04-11', NULL, '2025-08-26 11:54:25', NULL),
(5, 'Maya Angelou', 'Maya Angelou (1928–2014) fut une poétesse, chanteuse, danseuse, actrice et militante des droits civiques américaine. Née Marguerite Annie Johnson, elle grandit dans un contexte difficile marqué par la ségrégation raciale. Malgré une enfance douloureuse, elle développa une voix unique, à la fois artistique et engagée.  \r\nElle se fit connaître par son autobiographie « Je sais pourquoi chante l’oiseau en cage » (1969), qui connut un immense succès. Ce récit poignant décrivait son enfance, ses luttes et sa résilience.  \r\nAu cours de sa vie, Maya Angelou publia plusieurs recueils de poésie et livres autobiographiques, explorant des thèmes comme l’identité, la famille, la liberté et la dignité humaine. Sa plume fut saluée pour sa force poétique et son authenticité.  \r\nElle s’engagea également dans les luttes pour les droits civiques, travaillant aux côtés de Martin Luther King Jr. et Malcolm X.  \r\nArtiste complète, elle participa à de nombreux films et spectacles, tout en poursuivant son œuvre littéraire. Sa voix puissante, son charisme et son message d’espoir ont marqué des générations. Aujourd’hui, elle est célébrée comme une icône de la littérature afro-américaine et un symbole universel de courage et d’émancipation.', '1928-04-04', '2014-05-28', 'https://upload.wikimedia.org/wikipedia/commons/b/b4/Angelou_at_Clinton_inauguration.jpg', '2025-08-26 11:54:25', NULL),
(6, 'Friedrich Nietzsche', 'Friedrich Nietzsche (1844–1900) fut un philosophe allemand dont les écrits révolutionnèrent la pensée occidentale. Né à Röcken, il manifesta très tôt un talent pour la philologie classique avant de devenir professeur à l’université de Bâle.  \r\nIl abandonna rapidement sa carrière académique pour se consacrer à la philosophie. Son style littéraire, poétique et provocateur, marqua ses lecteurs. Ses ouvrages, tels que « Ainsi parlait Zarathoustra », « Par-delà bien et mal » ou « La généalogie de la morale », interrogent la vérité, la morale et les valeurs de la civilisation occidentale.  \r\nNietzsche critiqua les religions établies et la métaphysique traditionnelle, proclamant la « mort de Dieu » et appelant à la création de nouvelles valeurs. Il développa les concepts de surhomme, de volonté de puissance et d’éternel retour.  \r\nSes idées furent souvent mal comprises ou détournées, mais elles influencèrent profondément la philosophie, la littérature et la psychanalyse.  \r\nLa fin de sa vie fut assombrie par la maladie mentale. Toutefois, son héritage reste immense : Nietzsche est aujourd’hui reconnu comme un penseur radical, lucide et visionnaire, qui incite à la remise en question et à la liberté intellectuelle.', '1844-10-15', '1900-08-25', 'https://upload.wikimedia.org/wikipedia/commons/1/1b/Nietzsche187a.jpg', '2025-08-26 11:54:25', NULL),
(7, 'Oscar Wilde', 'Oscar Wilde (1854–1900) fut un écrivain, dramaturge et poète irlandais, célèbre pour son esprit brillant et son humour mordant. Né à Dublin dans une famille cultivée, il fit des études brillantes à Oxford, où il développa son goût pour l’esthétique et la littérature.  \r\nDans le Londres victorien, il se fit connaître pour ses pièces de théâtre, telles que « L’Importance d’être Constant » ou « Un mari idéal », qui mêlaient comédie, satire sociale et dialogues étincelants.  \r\nIl publia également le roman « Le Portrait de Dorian Gray » (1890), qui scandalisa par son audace et son esthétique décadente.  \r\nOscar Wilde était aussi un maître du bon mot et des aphorismes, qui firent de lui une figure incontournable de la vie mondaine.  \r\nCependant, sa carrière fut brisée lorsqu’il fut condamné pour homosexualité, considérée alors comme un crime. Il passa deux ans en prison, expérience qui inspira son poignant « De Profundis ».  \r\nAprès sa libération, il vécut en exil en France, dans la pauvreté, et mourut prématurément. Aujourd’hui, Wilde est célébré comme un génie littéraire, une victime de l’intolérance de son temps, et une icône de liberté et de créativité.', '1854-10-16', '1900-11-30', NULL, '2025-08-26 11:54:25', NULL),
(8, 'Virginia Woolf', 'Virginia Woolf (1882–1941) fut une romancière, essayiste et critique britannique, figure majeure du modernisme littéraire. Née à Londres dans une famille intellectuelle, elle grandit dans un environnement marqué par les lettres et les arts.  \r\nAvec son mari Leonard, elle fonda la Hogarth Press, maison d’édition indépendante qui publia aussi bien ses œuvres que celles d’auteurs novateurs.  \r\nVirginia Woolf est connue pour ses romans expérimentaux tels que « Mrs Dalloway » (1925), « Vers le phare » (1927) ou « Les Vagues » (1931). Son écriture se distingue par l’usage du courant de conscience, explorant les pensées intimes et la subjectivité de ses personnages.  \r\nElle fut également une essayiste influente, défendant la place des femmes dans la littérature et la société. Son texte « Une chambre à soi » (1929) reste un manifeste féministe incontournable.  \r\nLa vie de Woolf fut marquée par des épisodes de dépression et des drames familiaux. En 1941, elle mit fin à ses jours, laissant une œuvre d’une intensité rare.  \r\nAujourd’hui, Virginia Woolf est reconnue comme une pionnière du roman moderne et une voix essentielle de la littérature mondiale, inspirant écrivains, artistes et féministes.', '1882-01-25', '1941-03-28', NULL, '2025-08-26 11:54:25', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `page`
--

CREATE TABLE `page` (
  `id` int NOT NULL,
  `title` varchar(63) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `meta` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `og_title` varchar(63) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `og_image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `page`
--

INSERT INTO `page` (`id`, `title`, `content`, `meta`, `og_title`, `og_image`, `created_at`, `updated_at`) VALUES
(4, 'a-propos', '<h1>À propos</h1>\r\n   <p>Bienvenue sur notre site&nbsp;! Cette page vous présente notre mission, notre vision et nos valeurs.</p>\r\n   <h2>Notre mission</h2>\r\n   <p>Nous formons des développeurs web et web mobile en mettant l’accent sur la pratique, l’autonomie et la collaboration.</p>\r\n   <h2>Notre vision</h2>\r\n   <p>Le numérique doit être accessible à tous. Nous croyons en une pédagogie inclusive et ouverte, adaptée aux besoins de chacun.</p>\r\n   <h2>Nos valeurs</h2>\r\n   <ul>\r\n     <li><strong>Apprentissage actif :</strong> apprendre en faisant, en expérimentant et en partageant.</li>\r\n     <li><strong>Accessibilité :</strong> rendre le savoir et les outils disponibles au plus grand nombre.</li>\r\n     <li><strong>Esprit collectif :</strong> progresser ensemble grâce à l’entraide et au respect mutuel.</li>\r\n   </ul>\r\n   <p>Merci de votre confiance et bonne visite sur notre site&nbsp;!</p>', 'Découvrez notre mission, vision et valeurs sur la page À propos.', 'À propos', 'https://example.com/images/apropos.jpg', '2025-09-15 13:02:57', NULL),
(5, 'mentions-legales', '<h1>Mentions légales</h1>\r\n   <h2>Éditeur du site</h2>\r\n   <p>Ce site est édité dans le cadre d’un projet pédagogique. Les informations publiées sont fournies à titre informatif.</p>\r\n\r\n   <h2>Responsabilité</h2>\r\n   <p>Nous nous efforçons d’assurer la fiabilité et la mise à jour des contenus. Toutefois, nous ne saurions être tenus responsables d’erreurs ou d’omissions, ni des conséquences de leur utilisation.</p>\r\n\r\n   <h2>Propriété intellectuelle</h2>\r\n   <p>L’ensemble des contenus (textes, images, codes sources) sont protégés par le droit d’auteur. Toute reproduction non autorisée est interdite.</p>', 'Mentions légales du site', 'Mentions légales', 'https://example.com/images/mentions.jpg', '2025-09-15 13:06:59', NULL),
(6, 'rgpd', '<h1>Politique de confidentialité (RGPD)</h1>\r\n   <h2>Données collectées</h2>\r\n   <ul>\r\n     <li><strong>Formulaire de contact :</strong> nom, prénom, email et message sont collectés uniquement pour répondre à vos demandes. Ces informations ne sont pas partagées avec des tiers et sont supprimées après traitement.</li>\r\n     <li><strong>Utilisateurs enregistrés :</strong> nous stockons l’adresse email et un mot de passe hashé. Ces données sont nécessaires pour la gestion du compte et sont conservées tant que l’utilisateur reste inscrit.</li>\r\n   </ul>\r\n   <h2>Finalités</h2>\r\n   <p>Les données sont utilisées exclusivement pour la communication avec les visiteurs et la gestion des comptes utilisateurs.</p>\r\n   <h2>Durée de conservation</h2>\r\n   <p>Les données issues du formulaire de contact sont supprimées une fois la demande traitée. Les données des comptes utilisateurs sont conservées jusqu’à la suppression volontaire du compte.</p>\r\n   <h2>Vos droits</h2>\r\n   <p>Conformément au RGPD, vous disposez d’un droit d’accès, de rectification et de suppression de vos données. Vous pouvez exercer ces droits en nous contactant via le <a href=\"contact.html\">formulaire de contact</a>.</p>', 'Politique de confidentialité et RGPD', 'RGPD', 'https://example.com/images/rgpd.jpg', '2025-09-15 13:08:35', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `quote`
--

CREATE TABLE `quote` (
  `id` int NOT NULL,
  `quote` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `explanation` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `author_id` int DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `quote`
--

INSERT INTO `quote` (`id`, `quote`, `explanation`, `author_id`, `created_at`, `updated_at`) VALUES
(61, 'La vie, c\'est comme une bicyclette, il faut avancer pour ne pas perdre l\'équilibre.', 'Einstein utilise une métaphore simple pour exprimer que l\'existence est mouvement et progression. Rester immobile conduit à la chute, tandis qu\'avancer, même lentement, permet de garder la stabilité.', 1, '2025-09-15 12:44:44', NULL),
(62, 'L\'imagination est plus importante que le savoir.', 'Einstein insiste sur le pouvoir créatif de l\'imagination, qui ouvre de nouvelles perspectives, là où la simple accumulation de connaissances ne suffit pas.', 1, '2025-09-15 12:44:44', NULL),
(63, 'Deux choses sont infinies : l\'univers et la bêtise humaine. Mais en ce qui concerne l\'univers, je n\'en ai pas encore acquis la certitude absolue.', 'Cette formule ironique illustre le scepticisme d\'Einstein : il souligne la propension humaine à l\'erreur, tout en restant prudent sur les vérités scientifiques.', 1, '2025-09-15 12:44:44', NULL),
(64, 'On ne naît pas femme : on le devient.', 'Phrase clé du \"Deuxième Sexe\", elle exprime que la féminité est une construction sociale et non une donnée biologique immuable.', 2, '2025-09-15 12:44:44', NULL),
(65, 'Le présent n’est pas un passé en puissance, il est le moment du choix et de l’action.', 'De Beauvoir rappelle que chaque instant est porteur de liberté : l\'avenir dépend des décisions prises dans le présent.', 2, '2025-09-15 12:44:44', NULL),
(66, 'Changer sa vie, c’est changer le monde.', 'Cette citation illustre sa conviction que la transformation individuelle est inséparable de la transformation collective.', 2, '2025-09-15 12:44:44', NULL),
(67, 'Ils ne savaient pas que c\'était impossible, alors ils l\'ont fait.', 'Twain valorise l\'audace et la naïveté créative : ignorer les limites supposées permet parfois d\'accomplir l\'inimaginable.', 3, '2025-09-15 12:44:44', NULL),
(68, 'Le courage, c\'est la résistance à la peur, la maîtrise de la peur, et non son absence.', 'Twain met en avant une conception réaliste du courage : il ne s\'agit pas de ne pas avoir peur, mais de savoir la surmonter.', 3, '2025-09-15 12:44:44', NULL),
(69, 'Une femme doit avoir de l\'argent et une chambre à soi pour écrire de la fiction.', 'Dans \"Une chambre à soi\", Woolf affirme que l\'indépendance matérielle et un espace personnel sont indispensables à la création artistique des femmes.', 8, '2025-09-15 12:44:44', NULL),
(70, 'Je me hâte vers la mort afin d\'échapper à la folie.', 'Phrase tragique tirée de ses écrits intimes, elle reflète la souffrance psychologique de Woolf et la lucidité sur sa propre fragilité mentale.', 8, '2025-09-15 12:44:44', NULL),
(71, 'Qui sème le vent récolte la tempête.', NULL, NULL, '2025-09-15 12:46:49', NULL),
(72, 'Petit à petit, l’oiseau fait son nid.', NULL, NULL, '2025-09-15 12:46:49', NULL),
(73, 'Un voyage de mille lieues commence toujours par un premier pas.', 'Cette maxime rappelle que toute grande entreprise débute par une petite action concrète. Elle encourage à se lancer sans attendre la perfection.', NULL, '2025-09-15 12:46:49', NULL),
(74, 'La connaissance parle, mais la sagesse écoute.', 'Cette citation oppose le savoir théorique à l\'attitude sage, qui repose d\'abord sur l\'écoute et la compréhension des autres.', NULL, '2025-09-15 12:46:49', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `role`
--

CREATE TABLE `role` (
  `id` int NOT NULL,
  `name` varchar(320) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `role`
--

INSERT INTO `role` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'administrateur', '2025-09-15 12:51:26', NULL),
(2, 'editeur', '2025-09-15 12:51:26', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `role_user`
--

CREATE TABLE `role_user` (
  `role_id` int NOT NULL,
  `user_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `role_user`
--

INSERT INTO `role_user` (`role_id`, `user_id`) VALUES
(1, 16),
(2, 17),
(1, 19),
(2, 19);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `email` varchar(320) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `email`, `password`, `token`, `created_at`, `updated_at`) VALUES
(16, 'alice@example.com', '$2b$12$QyoQr4MGHzAcPLA5WL9cAu4mFTUs7WJZ/so5LPxM2f46EKe7jSNI.', NULL, '2025-09-15 12:50:58', NULL),
(17, 'bob@example.com', '$2b$12$B24MdqXgvb/GirSFo9eB4.m01O22lXyplzeFfa8Z2wZkWpYAEHnRK', NULL, '2025-09-15 12:50:58', NULL),
(18, 'carol@example.com', '$2b$12$ZCodaaWDomJ.bs6Oi6QYYOVFLWaStWYF52i2tQKrgfzqfECUpBGdy', NULL, '2025-09-15 12:50:58', NULL),
(19, 'tyran@gmail.com', '$2b$12$ZCodaaWDomJ.bs6Oi6QYYOVFLWaStWYF52i2tQKrgfzqfECUpBGdy', NULL, '2025-09-15 12:56:39', NULL);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `author`
--
ALTER TABLE `author`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Index pour la table `page`
--
ALTER TABLE `page`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `title` (`title`);

--
-- Index pour la table `quote`
--
ALTER TABLE `quote`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `quote` (`quote`),
  ADD KEY `fk_quotes_author` (`author_id`);

--
-- Index pour la table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Index pour la table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`role_id`,`user_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `author`
--
ALTER TABLE `author`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `page`
--
ALTER TABLE `page`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `quote`
--
ALTER TABLE `quote`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT pour la table `role`
--
ALTER TABLE `role`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `quote`
--
ALTER TABLE `quote`
  ADD CONSTRAINT `quote_ibfk_1` FOREIGN KEY (`author_id`) REFERENCES `author` (`id`) ON DELETE SET NULL ON UPDATE RESTRICT;

--
-- Contraintes pour la table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `role` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT,
  ADD CONSTRAINT `role_user_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
