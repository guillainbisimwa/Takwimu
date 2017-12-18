-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  ven. 01 déc. 2017 à 09:59
-- Version du serveur :  10.1.25-MariaDB
-- Version de PHP :  5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `coordination`
--
drop database if exists `coordination`;
CREATE DATABASE IF NOT EXISTS `coordination` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `coordination`;

-- --------------------------------------------------------

--
-- Structure de la table `abandon`
--

CREATE TABLE `abandon` (
  `id` int(11) NOT NULL,
  `effectif_F` int(11) NOT NULL,
  `effectif_G` int(11) NOT NULL,
  `belongs_to` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `age_eleves`
--

CREATE TABLE `age_eleves` (
  `id` int(11) NOT NULL,
  `5ans` int(11) NOT NULL,
  `6ans` int(11) NOT NULL,
  `7ans` int(11) NOT NULL,
  `8ans` int(11) NOT NULL,
  `9ans` int(11) NOT NULL,
  `10ans` int(11) NOT NULL,
  `11ans` int(11) NOT NULL,
  `12ans` int(11) NOT NULL,
  `13ans` int(11) NOT NULL,
  `14ans` int(11) NOT NULL,
  `15ans` int(11) NOT NULL,
  `16ans` int(11) NOT NULL,
  `17ans` int(11) NOT NULL,
  `18ans` int(11) NOT NULL,
  `19ans` int(11) NOT NULL,
  `20ans` int(11) NOT NULL,
  `20plusans` int(11) NOT NULL,
  `belongs_to` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `certifie_diplome`
--

CREATE TABLE `certifie_diplome` (
  `id` int(11) NOT NULL,
  `effectif_F` int(11) NOT NULL,
  `effectif_G` int(11) NOT NULL,
  `belongs_to` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `classe_maternelle`
--

CREATE TABLE `classe_maternelle` (
  `id` int(11) NOT NULL,
  `nom_class` varchar(200) NOT NULL,
  `id_ecole` int(11) NOT NULL,
  `age_6ansF` int(11) NOT NULL,
  `age_6ansG` int(11) NOT NULL,
  `age_6F` int(11) NOT NULL,
  `age_6G` int(11) NOT NULL,
  `age_7a10ansF` int(11) NOT NULL,
  `age_7a10ansG` int(11) NOT NULL,
  `age_11ansF` int(11) NOT NULL DEFAULT '0',
  `age_11ansG` int(11) NOT NULL DEFAULT '0',
  `age_plus11ansF` int(11) NOT NULL DEFAULT '0',
  `age_plus11ansG` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `classe_primaire`
--

CREATE TABLE `classe_primaire` (
  `id` int(11) NOT NULL,
  `nom_class` varchar(200) NOT NULL,
  `id_ecole` int(11) NOT NULL,
  `age_6ansF` int(11) NOT NULL,
  `age_6ansG` int(11) NOT NULL,
  `age_6F` int(11) NOT NULL,
  `age_6G` int(11) NOT NULL,
  `age_7a10ansF` int(11) NOT NULL,
  `age_7a10ansG` int(11) NOT NULL,
  `age_11ansF` int(11) NOT NULL,
  `age_11ansG` int(11) NOT NULL,
  `age_plus11ansF` int(11) NOT NULL,
  `age_plus11ansG` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `classe_secondaire_cl`
--

CREATE TABLE `classe_secondaire_cl` (
  `id` int(11) NOT NULL,
  `nom_class` varchar(200) NOT NULL,
  `id_ecole` int(11) NOT NULL,
  `effectif_F` int(11) NOT NULL,
  `effectif_G` int(11) NOT NULL,
  `option` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `classe_secondaire_cl`
--

INSERT INTO `classe_secondaire_cl` (`id`, `nom_class`, `id_ecole`, `effectif_F`, `effectif_G`, `option`) VALUES
(1, '3 ', 32, 0, 0, 2),
(2, '3 ', 32, 6, 5, 20),
(3, '3 ', 32, 6, 6, 22),
(4, '4 ', 32, 8, 8, 2),
(5, '4 ', 32, 56, 6, 20),
(6, '4 ', 32, 6, 3, 22),
(7, '5 ', 32, 8, 9, 2),
(8, '5 ', 32, 3, 3, 20),
(9, '5 ', 32, 2, 5, 22),
(10, '6 ', 32, 6, 0, 2),
(11, '6 ', 32, 23, 0, 20),
(12, '6 ', 32, 9, 9, 22),
(13, '3 ', 34, 46, 6, 1),
(14, '3 ', 34, 9, 8, 2),
(15, '3 ', 34, 23, 2, 4),
(16, '4 ', 34, 6, 66, 1),
(17, '4 ', 34, 5, 0, 2),
(18, '4 ', 34, 4, 2, 4),
(19, '5 ', 34, 62, 62, 1),
(20, '5 ', 34, 2, 22, 2),
(21, '5 ', 34, 6, 6, 4),
(22, '6 ', 34, 62, 62, 1),
(23, '6 ', 34, 1, 0, 2),
(24, '6 ', 34, 9, 8, 4);

-- --------------------------------------------------------

--
-- Structure de la table `classe_secondaire_co`
--

CREATE TABLE `classe_secondaire_co` (
  `id` int(11) NOT NULL,
  `nom_class` varchar(200) NOT NULL,
  `id_ecole` int(11) NOT NULL,
  `effectif_F` int(11) NOT NULL,
  `effectif_G` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `classe_secondaire_co`
--

INSERT INTO `classe_secondaire_co` (`id`, `nom_class`, `id_ecole`, `effectif_F`, `effectif_G`) VALUES
(1, '1', 32, 4, 5),
(2, '2', 32, 6, 6),
(3, '1', 34, 4, 5),
(4, '2', 34, 6, 5);

-- --------------------------------------------------------

--
-- Structure de la table `coordination_sp`
--

CREATE TABLE `coordination_sp` (
  `id` int(11) NOT NULL,
  `nom_coord_sp` varchar(200) NOT NULL,
  `belongs_to` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `coordination_sp`
--

INSERT INTO `coordination_sp` (`id`, `nom_coord_sp`, `belongs_to`) VALUES
(3, 'gomq1', 2),
(4, 'GOMA', 2);

-- --------------------------------------------------------

--
-- Structure de la table `diocese`
--

CREATE TABLE `diocese` (
  `id` int(11) NOT NULL,
  `nom_diocese` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `diocese`
--

INSERT INTO `diocese` (`id`, `nom_diocese`) VALUES
(2, 'goma');

-- --------------------------------------------------------

--
-- Structure de la table `ecole`
--

CREATE TABLE `ecole` (
  `id` int(11) NOT NULL,
  `nom_ecole` varchar(200) NOT NULL,
  `matricule` varchar(200) NOT NULL,
  `compte_bancaire` varchar(200) NOT NULL,
  `liste_class` varchar(200) NOT NULL,
  `liste_option` varchar(200) NOT NULL,
  `id_niveau` int(11) NOT NULL,
  `id_paroisse` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `ecole`
--

INSERT INTO `ecole` (`id`, `nom_ecole`, `matricule`, `compte_bancaire`, `liste_class`, `liste_option`, `id_niveau`, `id_paroisse`) VALUES
(14, 'EP MM', '1234', '-', '**1**2**3**4**5**6', '', 2, 5);

-- --------------------------------------------------------

--
-- Structure de la table `ecole2`
--

CREATE TABLE `ecole2` (
  `id` int(11) NOT NULL,
  `nom_ecole` varchar(200) NOT NULL,
  `matricule` varchar(200) NOT NULL,
  `compte_bancaire` varchar(200) NOT NULL,
  `id_niveau` varchar(200) NOT NULL,
  `belongs_to` int(11) NOT NULL,
  `liste_option` varchar(200) NOT NULL,
  `liste_class` varchar(200) NOT NULL,
  `arrete_agr` varchar(200) NOT NULL,
  `adress_exact` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `ecole2`
--

INSERT INTO `ecole2` (`id`, `nom_ecole`, `matricule`, `compte_bancaire`, `id_niveau`, `belongs_to`, `liste_option`, `liste_class`, `arrete_agr`, `adress_exact`) VALUES
(15, 'ep m', '12345', '-', 'Primaire', 6, '', '**1**2**3**4**5**6', '-', '-'),
(16, 'ema m', '98765', '-', 'Maternelle', 6, '', '**1**2**3', '-', '-'),
(17, 'inst m', '98765', '-', 'Secondaire', 6, '**Sociale**Construction**Latin-philo **Prescolaire ', '**1**2**3**4**5**6', '-', '-'),
(18, 'EP. UBANI', '1', '-', 'Primaire', 6, '', '**1**2**3**4**5**6', '-', '-'),
(19, 'EP. MUSENGE', '2', '-', 'Primaire', 6, '', '**1**2**3**4**5**6', '-', '-'),
(20, 'EP. BILOBILO', '3', '-', 'Primaire', 6, '', '**1**2**3**4**5**6', '-', '-'),
(21, 'EP. MERA', '4', '-', 'Primaire', 6, '', '**1**2**3**4**5**6', '-', '-'),
(22, 'EP. OSOKARI', '5', '-', 'Primaire', 6, '', '**1**2**3**4**5**6', '-', '-'),
(23, 'EP. MUTIKU', '6', '-', 'Primaire', 6, '', '**1**2**3**4**5**6', '-', '-'),
(24, 'E.P. POBILINGA', '7', '-', 'Primaire', 6, '', '**1**2**3**4**5**6', '-', '-'),
(25, 'EP. BONGOBONGO', '8', '-', 'Primaire', 6, '', '**1**2**3**4**5**6', '-', '-'),
(26, 'EP. KITIKA', '9', '-', 'Primaire', 6, '', '**1**2**3**4**5**6', '-', '-'),
(27, 'EP. LURABA', '10', '-', 'Primaire', 6, '', '**1**2**3**4**5**6', '-', '-'),
(28, 'EP. MUTANDALA', '11', '-', 'Primaire', 6, '', '**1**2**3**4**5**6', '-', '-'),
(29, 'EP. MUMBA', '12', '-', 'Primaire', 6, '', '**1**2**3**4**5**6', '-', '-'),
(30, 'EMA SAINT PAUL', '-', '-', 'Maternelle', 7, '', '**1**2**3', '-', '-'),
(31, 'EP MAMA MULEZI', '-', '-', 'Primaire', 10, '', '**1**2**3**4**5**6', '-', '-'),
(32, 'INST. MWANGA', '-', '-', 'Secondaire', 10, '**Commerciale & admin**Bio-chimie **Latin-philo ', '**1**2**3**4**5**6', '-', '-'),
(33, 'INST. MAMA MULEZI', '-', '-', 'Secondaire', 10, '**Sociale**Commerciale & admin**Bio-chimie ', '**1**2**3**4**5**6', '-', '-'),
(34, 'INST. HERI', '-', '-', 'Secondaire', 14, '**Sociale**Commerciale & admin**Secretariat & info', '**1**2**3**4**5**6', '-', '-'),
(35, 'LYCEE AMANI', '-', '-', 'Secondaire', 7, '**Commerciale & admin**Bio-chimie ', '**1**2**3**4**5**6', '-', '-'),
(36, 'INST. SAINTE URSULE', '-', '-', 'Secondaire', 9, '**Sociale**Coupe & couture**Nutrition', '**1**2**3**4**5**6', '-', '-'),
(37, 'EMA THERESA MIRA', '-', '-', 'Maternelle', 8, '', '**1**2**3', '-', '-');

-- --------------------------------------------------------

--
-- Structure de la table `institution`
--

CREATE TABLE `institution` (
  `id` int(11) NOT NULL,
  `nom_institution` varchar(200) NOT NULL,
  `bp_institution` varchar(200) NOT NULL,
  `sigle_institution` varchar(200) NOT NULL,
  `adress_institution` varchar(200) NOT NULL,
  `phone_institution` varchar(200) NOT NULL,
  `annee_sc` varchar(200) NOT NULL,
  `logo_institution` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `institution`
--

INSERT INTO `institution` (`id`, `nom_institution`, `bp_institution`, `sigle_institution`, `adress_institution`, `phone_institution`, `annee_sc`, `logo_institution`) VALUES
(1, 'COORDINATION DES ECOLES DIOCESAINES CATHOLIQUE', '50 goma', 'COED/ Bureau statistique', 'katindo; avenue de la mission numero 12', '12345555', '2016-2017', 'logo1.png');

-- --------------------------------------------------------

--
-- Structure de la table `niveau`
--

CREATE TABLE `niveau` (
  `id` int(11) NOT NULL,
  `nom_niveau` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `niveau`
--

INSERT INTO `niveau` (`id`, `nom_niveau`) VALUES
(1, 'Maternelle'),
(2, 'Primaire'),
(3, 'Secondaire');

-- --------------------------------------------------------

--
-- Structure de la table `nouveau_inscrit`
--

CREATE TABLE `nouveau_inscrit` (
  `id` int(11) NOT NULL,
  `effectif_F` int(11) NOT NULL,
  `effectif_G` int(11) NOT NULL,
  `belongs_to` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `option`
--

CREATE TABLE `option` (
  `id` int(11) NOT NULL,
  `nom_option` varchar(200) NOT NULL,
  `belongs_to` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `option`
--

INSERT INTO `option` (`id`, `nom_option`, `belongs_to`) VALUES
(1, 'Sociale', 1),
(2, 'Commerciale & admin', 1),
(3, 'Commerciale & info', 1),
(4, 'Secretariat & info', 1),
(5, 'Ajustage et souderie', 1),
(6, 'Agricole', 1),
(7, 'Veterinere', 1),
(8, 'Coupe & couture', 1),
(9, 'Construction', 1),
(10, 'Electricite', 1),
(11, 'Electronique', 1),
(12, 'Maconnerie', 1),
(13, 'Menuiserie', 1),
(14, 'Nutrition', 1),
(15, 'Hotesse d\'accueil ', 1),
(16, 'Aviation-civile ', 1),
(17, 'Peche ', 1),
(18, 'Generale ', 2),
(19, 'AUTOMOBILE ', 2),
(20, 'Bio-chimie ', 3),
(21, 'Math-physique ', 3),
(22, 'Latin-philo ', 4),
(23, 'Prescolaire ', 5),
(24, 'Normale ', 5),
(25, 'Peda-generale ', 5);

-- --------------------------------------------------------

--
-- Structure de la table `paroisse`
--

CREATE TABLE `paroisse` (
  `id` int(11) NOT NULL,
  `nom_paroisse` varchar(200) NOT NULL,
  `nom_coord_sp` varchar(200) NOT NULL,
  `diocese_paroisse` varchar(200) NOT NULL,
  `province_paroisse` varchar(200) NOT NULL DEFAULT 'NORD-KIVU',
  `sous_div_paroisse` varchar(200) NOT NULL,
  `territoire_paroisse` varchar(200) NOT NULL,
  `bp_paroisse` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `paroisse`
--

INSERT INTO `paroisse` (`id`, `nom_paroisse`, `nom_coord_sp`, `diocese_paroisse`, `province_paroisse`, `sous_div_paroisse`, `territoire_paroisse`, `bp_paroisse`) VALUES
(5, 'CAT', '', 'GOMA', 'NORD-KIVU', 'GOMA1', 'MAS', '');

-- --------------------------------------------------------

--
-- Structure de la table `paroisse2`
--

CREATE TABLE `paroisse2` (
  `id` int(11) NOT NULL,
  `nom_paroisse` varchar(200) NOT NULL,
  `belongs_to` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `paroisse2`
--

INSERT INTO `paroisse2` (`id`, `nom_paroisse`, `belongs_to`) VALUES
(5, 'bienheruse', 3),
(6, 'SOUS DIVISIO DE GOMA', 4),
(7, 'SOUS DIVISION DE KARISIMBI', 4),
(8, 'SOUS DIVISION DE NYIRAGONGO', 4);

-- --------------------------------------------------------

--
-- Structure de la table `personnel`
--

CREATE TABLE `personnel` (
  `id` int(11) NOT NULL,
  `matricule_p` varchar(200) NOT NULL,
  `nom_p` varchar(200) NOT NULL,
  `date_nais_p` date NOT NULL,
  `sex_p` varchar(10) NOT NULL,
  `date_eng_p` date DEFAULT NULL,
  `nat_p` varchar(200) NOT NULL,
  `sifa_p` varchar(200) NOT NULL,
  `conf_p` varchar(200) NOT NULL,
  `date_dip` date DEFAULT NULL,
  `qualdip_p` varchar(200) NOT NULL,
  `date_pro_p` date DEFAULT NULL,
  `grade_anc_p` varchar(200) NOT NULL,
  `grade_act_p` varchar(200) NOT NULL,
  `annee_pre_p` varchar(200) NOT NULL,
  `fonct_p` varchar(200) NOT NULL,
  `ecole_affect` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `personnel`
--

INSERT INTO `personnel` (`id`, `matricule_p`, `nom_p`, `date_nais_p`, `sex_p`, `date_eng_p`, `nat_p`, `sifa_p`, `conf_p`, `date_dip`, `qualdip_p`, `date_pro_p`, `grade_anc_p`, `grade_act_p`, `annee_pre_p`, `fonct_p`, `ecole_affect`) VALUES
(29, '0121335454', 'DIEDO MUHEKZA', '1989-02-13', '01', '2014-01-07', '01', '01', 'CATH', '2013-04-17', 'SFS', '2016-02-04', '359', '356', '3', 'ENS', 17),
(30, '101430', 'BABINGWA MANGAIKO', '0000-00-00', '01', '0000-00-00', '01', '207', 'CATH.', '0000-00-00', 'D6A', '0000-00-00', '147', '146', '41', 'ADIR', 18),
(31, '198672', 'TABU KATENDA', '0000-00-00', '01', '0000-00-00', '01', '204', 'CATH.', '0000-00-00', 'D6A', '0000-00-00', '219', '149', '40', 'AADJ', 18),
(32, '23201', 'BAYEBATE RASHIDI', '0000-00-00', '01', '0000-00-00', '01', '200', 'CATH.', '0000-00-00', 'D6N', NULL, '310', '310', '3', 'ENS.', 18),
(33, '567204', 'DJUMA KOMPANYI', '0000-00-00', '01', '0000-00-00', '01', '200', 'CATH.', '0000-00-00', 'D6N', NULL, '312', '310', '9', 'ENS.', 18),
(34, '1084843', 'KAMZEE MUNYIHIRO', '0000-00-00', '01', '0000-00-00', '01', '201', 'CATH.', '0000-00-00', 'D6N', NULL, '310', '310', '3', 'ENS.', 18),
(35, '23301', 'KITUMAINI MANGALA', '0000-00-00', '01', '0000-00-00', '01', '202', 'CATH.', '0000-00-00', 'D6N', NULL, '310', '310', '4', 'ENS.', 18),
(36, '744874', 'LUTITI WANDURU', '0000-00-00', '01', '0000-00-00', '01', '205', 'CATH.', '0000-00-00', 'D6N', NULL, '311', '310', '6', 'ENS.', 18),
(37, '1084840', 'MONGO NCHIMI', '0000-00-00', '01', '0000-00-00', '02', '100', 'CATH.', '0000-00-00', 'D6N', NULL, '310', '310', '3', 'ENS.', 18),
(38, '0567184', 'MBULA SHEMULELE', '0000-00-00', '01', '0000-00-00', '01', '205', 'CATH.', '0000-00-00', 'D6N', NULL, '312', '311', '8', 'ENS.', 18),
(39, '32272', 'MBUZU MULAMBA', '0000-00-00', '01', '0000-00-00', '02', '100', 'CATH.', '0000-00-00', 'EMP', NULL, '312', '310', '26', 'ENS.', 18),
(40, '483847', 'MBURASHU MUNGO', '0000-00-00', '01', '0000-00-00', '02', '205', 'CATH.', '0000-00-00', 'D6N', NULL, '310', '310', '9', 'ENS.', 18),
(41, '744869', 'SEBASTIEN UKUTO', '0000-00-00', '01', '0000-00-00', '01', '205', 'CATH.', '0000-00-00', 'D6N', NULL, '310', '310', '4', 'ENS.', 18),
(42, '043601', 'VUMILIA MARIE', '0000-00-00', '01', '0000-00-00', '02', '100', 'CATH.', '0000-00-00', 'D6N', NULL, '312', '310', '9', 'ENS.', 18),
(43, '022801', 'ZAINA AMULI', '0000-00-00', '01', '0000-00-00', '02', '202', 'CATH.', '0000-00-00', 'D6N', NULL, '310', '310', '5', 'ENS.', 18),
(44, 'N.U', 'ALBERTINE BUTA', '0000-00-00', '01', '0000-00-00', '02', '201', 'CATH.', '0000-00-00', 'D6N', NULL, '310', '310', '1', 'ENS.', 18),
(45, 'N.U', 'BAMWISHO SANGALA', '0000-00-00', '01', '0000-00-00', '01', '100', 'CATH.', '0000-00-00', 'D6N', NULL, '310', '310', '1', 'ENS.', 18),
(46, 'N.U', 'FELIX KAHARI', '0000-00-00', '01', '0000-00-00', '01', '100', 'CATH.', '0000-00-00', 'D6N', NULL, '310', '310', '1', 'ENS.', 18),
(47, '138549', 'KAMALA LUSEKE', '0000-00-00', '01', '0000-00-00', '01', '206', 'CATH.', '0000-00-00', 'D6N', '0000-00-00', '147', '146', '49', 'ADIR.', 19),
(48, '378373', 'BALIKONGO MAYABO', '0000-00-00', '01', '0000-00-00', '01', '206', 'PROT', '0000-00-00', 'D6N', NULL, '311', '310', '4', 'ENS.', 19),
(49, '138548', 'CHALEMALILWA LUNANGA', '0000-00-00', '01', '0000-00-00', '01', '206', 'CATH.', '0000-00-00', 'D4N PEDA', NULL, '329', '329', '39', 'ENS.', 19),
(50, 'NU', 'CHONGO CLAUDINE', '0000-00-00', '01', '0000-00-00', '02', '100', 'CATH.', '0000-00-00', 'D6N', NULL, '310', '310', '2', 'ENS.', 19),
(51, '138559', 'DJUMA KABUNGULU', '0000-00-00', '01', '0000-00-00', '01', '206', 'CATH.', '0000-00-00', 'D4N PEDA', NULL, '329', '329', '35', 'ENS.', 19),
(52, 'NU', 'KASONGO TANGANIKA', '0000-00-00', '01', '0000-00-00', '01', '200', 'CATH.', '0000-00-00', 'PP5', NULL, '311', '310', '3', 'ENS.', 19),
(53, '589305', 'KIMPEMBA LUBULA', '0000-00-00', '01', '0000-00-00', '01', '200', 'CATH.', '0000-00-00', 'D6N', NULL, '311', '311', '5', 'ENS.', 19),
(54, '138552', 'WEMA KABUNGULU', '0000-00-00', '01', '0000-00-00', '01', '200', 'CATH.', '0000-00-00', 'D4N PEDA', NULL, '329', '329', '50', 'ENS.', 19),
(55, '483851', 'KANGITSI PILIPILI', '0000-00-00', '01', '0000-00-00', '01', '202', 'CATH.', '0000-00-00', 'D6N', '0000-00-00', '141', '140', '16', 'ADIR', 20),
(56, '605918', 'WIMBAMBA MUKULUMANYA', '0000-00-00', '01', '0000-00-00', '02', '200', 'CATH.', '0000-00-00', 'D6N', '0000-00-00', '211', '210', '15', 'AADJ', 20),
(57, '487462', 'ATUNGULAMI TULINABO', '0000-00-00', '01', '0000-00-00', '01', '202', 'CATH.', '0000-00-00', 'D6N', NULL, '311', '310', '15', 'ENS.', 20),
(58, '589384', 'DIEUDONNE BAGULA', '0000-00-00', '01', '0000-00-00', '01', '100', 'CATH.', '0000-00-00', 'D6N', NULL, '310', '310', '5', 'ENS.', 20),
(59, '965905', 'DIEUDONNE KATUNGA', '0000-00-00', '01', '0000-00-00', '01', '100', 'CATH.', '0000-00-00', 'D6N', NULL, '310', '310', '3', 'ENS.', 20),
(60, '589331', 'BYAMUNGU KARAKADOY', '0000-00-00', '01', '0000-00-00', '01', '200', 'CATH.', '0000-00-00', 'D6N', NULL, '311', '310', '5', 'ENS.', 20),
(61, '277601', 'FREDERIC ANGALIKIJANA', '0000-00-00', '01', '0000-00-00', '01', '100', 'CATH.', '0000-00-00', 'D6N', NULL, '310', '310', '3', 'ENS.', 20),
(62, '589333', 'KITO MUDERWA', '0000-00-00', '01', '0000-00-00', '01', '100', 'CATH.', '0000-00-00', 'D6N', NULL, '310', '310', '5', 'ENS.', 20),
(63, '567207', 'MAFAYANO KASEREKA', '0000-00-00', '01', '0000-00-00', '01', '202', 'CATH.', '0000-00-00', 'D6N', NULL, '311', '310', '9', 'ENS.', 20),
(64, '277201', 'MUZIRHU TSHIBANVUNYA', '0000-00-00', '01', '0000-00-00', '01', '207', 'CATH.', '0000-00-00', 'D6N', NULL, '317', '316', '25', 'ENS.', 20),
(65, '277901', 'N\'TAKWINJA BISIMWA', '0000-00-00', '01', '0000-00-00', '01', '100', 'CATH.', '0000-00-00', 'D6N', NULL, '329', '328', '8', 'ENS.', 20),
(66, '211485', 'ISIYA KUBUYA', '0000-00-00', '01', '0000-00-00', '01', '100', 'CATH.', '0000-00-00', 'D4N', NULL, '329', '328', '35', 'ENS.', 20),
(67, '277401', 'OMBENI MUSOMBWA', '0000-00-00', '01', '0000-00-00', '01', '100', 'CATH.', '0000-00-00', 'D6N', NULL, '310', '310', '4', 'ENS.', 20),
(68, '277301', 'SEELI BAMBULA', '0000-00-00', '01', '0000-00-00', '01', '205', 'CATH.', '0000-00-00', 'D6N', NULL, '310', '310', '6', 'ENS.', 20),
(69, '0202801', 'ALUTA SALUMA', '0000-00-00', '01', '0000-00-00', '01', '202', 'CATH.', '0000-00-00', 'D6N', NULL, '310', '310', '4', 'ENS', 21),
(70, 'N.U', 'BAENI BUSHU', '0000-00-00', '01', '0000-00-00', '01', '201', 'CATH.', '0000-00-00', 'D6N', NULL, '310', '310', '1', 'ENS', 21),
(71, '0621566', 'BAYOMBA MULIRO', '0000-00-00', '01', '0000-00-00', '01', '204', 'PROT.', '0000-00-00', 'D6N', NULL, '310', '310', '5', 'ENS', 21),
(72, '0621557', 'BUSHENGERE TANGANIKA', '0000-00-00', '01', '0000-00-00', '01', '205', 'CATH.', '0000-00-00', 'D6N', '0000-00-00', '140', '310', '14', 'ADIR', 21),
(73, '1149736', 'IMOA MUNGAZI', '0000-00-00', '01', '0000-00-00', '02', '202', 'PROT.', '0000-00-00', 'D6N', NULL, '310', '310', '2', 'ENS', 21),
(74, '1149735', 'KISSA NKANGO', '0000-00-00', '01', '0000-00-00', '01', '202', 'CATH.', '0000-00-00', 'D6N', NULL, '310', '310', '4', 'ENS', 21),
(75, '0202901', 'NKUBA MUKISA', '0000-00-00', '01', '0000-00-00', '01', '207', 'PROT.', '0000-00-00', 'D6N', NULL, '310', '310', '1', 'ENS', 21),
(76, '1121779', 'SHIBANYA BUINGO', '0000-00-00', '01', '0000-00-00', '01', '202', 'PROT.', '0000-00-00', 'D6N', NULL, '310', '310', '4', 'ENS', 21),
(77, '427410', 'BYAKOMBE MWANGILWA', '0000-00-00', '01', '0000-00-00', '02', '200', 'CATH.', '0000-00-00', 'D6N', NULL, '140', '140', '13', 'ADIR', 22),
(78, '395264', 'BAHATI BIRIBINDI', '0000-00-00', '01', '0000-00-00', '01', '204', 'CATH.', '0000-00-00', 'D6N', NULL, '314', '313', '13', 'ENS.', 22),
(79, '1032578', 'JACQUES MWEZE', '0000-00-00', '01', '0000-00-00', '01', '100', 'CATH.', '0000-00-00', 'D6N', NULL, '311', '310', '3', 'ENS.', 22),
(80, '222742', 'KABUMBA PILIPILI', '0000-00-00', '01', '0000-00-00', '01', '202', 'CATH.', '0000-00-00', 'D6N', NULL, '326', '326', '25', 'ENS.', 22),
(81, '193673', 'MUSOMBWA MWANGILWA', '0000-00-00', '01', '0000-00-00', '01', '204', 'CATH.', '0000-00-00', 'D6A', NULL, '316', '316', '26', 'ENS.', 22),
(82, 'N.U', 'OMBENI GIKOMBE', '0000-00-00', '01', '0000-00-00', '01', '100', 'CATH.', '0000-00-00', 'D6N', NULL, '310', '310', '1', 'ENS.', 22),
(83, '1149454', 'PASCAL KASIWA', '0000-00-00', '01', '0000-00-00', '01', '100', 'CATH.', '0000-00-00', 'D6N', NULL, '310', '310', '1', 'ENS.', 22),
(84, '583420', 'SIKUJUWA MAFULUKO', '0000-00-00', '01', '0000-00-00', '02', '100', 'PROT.', '0000-00-00', 'D4N', NULL, '326', '326', '26', 'ENS.', 22),
(85, '527833', 'LIPANDA NYANDWI', '0000-00-00', '01', '0000-00-00', '01', '209', 'CATH.', '0000-00-00', 'D6N', '0000-00-00', '143', '142', '10', 'ADIR.', 23),
(86, '1190969', 'CLAUDE KIPOKOLO', '0000-00-00', '01', '0000-00-00', '01', '100', 'CATH.', '0000-00-00', 'D6N', NULL, '311', '310', '4', 'ENS.', 23),
(87, '1190992', 'KATOBOLOLO KIBANDA', '0000-00-00', '01', '0000-00-00', '01', '207', 'CATH.', '0000-00-00', 'D6N', NULL, '321', '320', '3', 'ENS.', 23),
(88, 'N.U', 'LIPANDA CHRISTELLE', '0000-00-00', '01', '0000-00-00', '02', '100', 'CATH.', '0000-00-00', 'D6N', NULL, '310', '310', '1', 'ENS.', 23),
(89, '1121742', 'MAKALA ALIMASI', '0000-00-00', '01', '0000-00-00', '01', '100', 'CATH.', '0000-00-00', 'D6N', NULL, '311', '310', '4', 'ENS.', 23),
(90, '1031212', 'RIZIKI NYAKALIMA', '0000-00-00', '01', '0000-00-00', '02', '206', 'CATH.', '0000-00-00', 'D6N', NULL, '312', '310', '7', 'ENS.', 23),
(91, '1190995', 'WASSO MUHIMA', '0000-00-00', '01', '0000-00-00', '01', '202', 'CATH.', '0000-00-00', 'D6N', NULL, '311', '310', '3', 'ENS.', 23),
(92, '424004', 'BIRINGANINE MASTAKI', '0000-00-00', '01', '0000-00-00', '01', '207', 'CATH.', '0000-00-00', 'D6N', '0000-00-00', '143', '142', '15', 'ADIR', 24),
(93, '0123601', 'BASABI SAMAMBA', '0000-00-00', '01', '0000-00-00', '01', '302', 'PROT.', '0000-00-00', 'D6N', NULL, '312', '312', '6', 'ENS', 24),
(94, '424002', 'BASHILWANGO KYALONDA', '0000-00-00', '01', '0000-00-00', '01', '209', 'PROT.', '0000-00-00', 'D4P', NULL, '324', '324', '13', 'ENS', 24),
(95, '424000', 'BASHIZI BUHENDWA', '0000-00-00', '01', '0000-00-00', '01', '208', 'PROT.', '0000-00-00', 'D6N', NULL, '312', '312', '6', 'ENS', 24),
(96, '424010', 'MUDERWA CHRISTIAN', '0000-00-00', '01', '0000-00-00', '01', '201', 'CATH.', '0000-00-00', 'D6N', NULL, '312', '312', '6', 'ENS', 24),
(97, '0744654', 'MUKUMBILWA HABINAMWISHO', '0000-00-00', '01', '0000-00-00', '01', '100', 'PROT.', '0000-00-00', 'D6N', NULL, '312', '312', '6', 'ENS', 24),
(98, '0123701', 'MWEZE MASUMBUKO', '0000-00-00', '01', '0000-00-00', '01', '206', 'PROT.', '0000-00-00', 'D6N', NULL, '312', '312', '6', 'ENS', 24),
(99, '1034068', 'BASUBI WATANGA', '0000-00-00', '01', '0000-00-00', '01', '100', 'CATH.', '0000-00-00', 'PP5', NULL, '320', '320', '2', 'ENS.', 25),
(100, '1013727', 'DJUMA KABANSHI', '0000-00-00', '01', '0000-00-00', '01', '100', 'CATH.', '0000-00-00', 'D4N', NULL, '320', '320', '', 'ENS.', 25),
(101, '1032578', 'JACQUES MWEZE', '0000-00-00', '01', '0000-00-00', '01', '100', 'CATH.', '0000-00-00', 'D6N', NULL, '310', '310', '', 'ENS.', 25),
(102, '1026260', 'KATANA BANGUJE', '0000-00-00', '01', '0000-00-00', '01', '100', 'CATH.', '0000-00-00', 'PP5', NULL, '320', '320', '2', 'ENS.', 25),
(103, '1034072', 'KATINDI BAMWISHO', '0000-00-00', '01', '0000-00-00', '01', '100', 'CATH.', '0000-00-00', 'D6A', NULL, '310', '310', '4', 'ENS.', 25),
(104, '427449', 'MANDO DHENO R.', '0000-00-00', '01', '0000-00-00', '01', '105', 'CATH.', '0000-00-00', 'D6N', '0000-00-00', '141', '141', '6', 'ADIR', 25),
(105, 'NU', 'MARTINE SANGO', '0000-00-00', '01', '0000-00-00', '02', '100', 'CATH.', '0000-00-00', 'D6N', NULL, '310', '310', '', 'ENS.', 25),
(106, '121968', 'LUKONGE BAKUNGU', '0000-00-00', '01', '0000-00-00', '01', '210', 'CATH', '0000-00-00', 'D6N', '0000-00-00', '146', '145', '29', 'ADIR', 26),
(107, '0402901', 'AKILIMALI MULUBA', '0000-00-00', '01', '0000-00-00', '01', '100', 'CATH', '0000-00-00', 'D6N', NULL, '311', '310', '3', 'ENS.', 26),
(108, '355054', 'BITASHIMWA MASEKE', '0000-00-00', '01', '0000-00-00', '01', '203', 'CATH', '0000-00-00', 'D6N', NULL, '314', '313', '13', 'ENS.', 26),
(109, '1149539', 'DJUMA SHAKO ALAIN', '0000-00-00', '01', '0000-00-00', '01', '100', 'CATH', '0000-00-00', 'D6N', NULL, '310', '310', '2', 'ENS.', 26),
(110, '388284', 'KALUNGA OMBENI', '0000-00-00', '01', '0000-00-00', '01', '107', 'CATH', '0000-00-00', 'D4P', NULL, '329', '329', '33', 'ENS.', 26),
(111, '247241', 'MASUMBUKO KAMOSHO', '0000-00-00', '01', '0000-00-00', '01', '208', 'CATH', '0000-00-00', 'D6N', NULL, '317', '316', '23', 'ENS.', 26),
(112, '388287', 'SINAOFU NYAMBULA', '0000-00-00', '01', '0000-00-00', '02', '200', 'MUSIL', '0000-00-00', 'D6N', NULL, '313', '312', '11', 'ENS.', 26),
(113, 'N.U', 'SOKOLA MOÏSE', '0000-00-00', '01', '0000-00-00', '01', '100', 'PROT', '0000-00-00', 'D6N', NULL, '310', '310', '1', 'ENS.', 26),
(114, 'NU', 'KAHINDO MASINDA', '0000-00-00', '01', '0000-00-00', '01', '204', 'CATH', '0000-00-00', 'D6N', '0000-00-00', '140', '314', '16', 'ADIR', 27),
(115, 'NU', 'BAYOMBA AMUPASI', '0000-00-00', '01', '0000-00-00', '01', '201', 'CATH', NULL, 'PP5', NULL, '320', '320', '3', 'ENS.', 27),
(116, 'NU', 'BURONGU YALI', '0000-00-00', '01', '0000-00-00', '01', '203', 'PROT', '0000-00-00', 'D6N', NULL, '311', '310', '3', 'ENS.', 27),
(117, 'NU', 'CECILE ZAWADI', '0000-00-00', '01', '0000-00-00', '02', '200', 'CATH', NULL, 'PP5', NULL, '320', '320', '1', 'ENS.', 27),
(118, 'NU', 'MISONA KALINDA', '0000-00-00', '01', '0000-00-00', '01', '200', 'PROT', '0000-00-00', 'D6N', NULL, '310', '310', '2', 'ENS.', 27),
(119, 'NU', 'RUPIA SHEKILONFU', '0000-00-00', '01', '0000-00-00', '01', '202', 'PROT', '0000-00-00', 'D4P', NULL, '321', '320', '4', 'ENS.', 27),
(120, 'NU', 'YALU FAZILI', '0000-00-00', '01', '0000-00-00', '01', '200', 'PROT', '0000-00-00', 'D6N', NULL, '310', '310', '3', 'ENS.', 27),
(121, '379900', 'AMULI SABATO', '0000-00-00', '01', '0000-00-00', '01', '203', 'CATH.', '0000-00-00', 'D6N', '0000-00-00', '141', '140', '16', 'ADIR', 28),
(122, '0353401', 'RAMAZANI KATINDI', '0000-00-00', '01', '0000-00-00', '01', '202', 'CATH.', '0000-00-00', 'D6N', NULL, '311', '310', '5', 'ENS.', 28),
(123, '424567', 'MBEKU MUTALABILWA', '0000-00-00', '01', '0000-00-00', '01', '202', 'CATH.', '0000-00-00', 'D4N', NULL, '323', '322', '10', 'ENS.', 28),
(124, '0353701', 'KISEKELWA KABENGA', '0000-00-00', '01', '0000-00-00', '01', '206', 'CATH.', '0000-00-00', 'D6N', NULL, '311', '310', '5', 'ENS.', 28),
(125, '0353601', 'ELISHA CHENDA', '0000-00-00', '01', '0000-00-00', '01', '202', 'CATH.', '0000-00-00', 'D6N', NULL, '311', '310', '5', 'ENS.', 28),
(126, '1143023', 'MODESTE SELEMANI', '0000-00-00', '01', '0000-00-00', '01', '203', 'CATH.', '0000-00-00', 'D6N', NULL, '311', '310', '3', 'ENS.', 28),
(127, 'N.U', 'MBULA MESHE RICHARD', '0000-00-00', '01', '0000-00-00', '01', '202', 'CATH.', '0000-00-00', 'D6N', NULL, '311', '310', '5', 'ENS.', 28),
(128, '0353701', 'KATANGILO FITINA', '0000-00-00', '01', '0000-00-00', '01', '203', 'CATH.', '0000-00-00', 'D6A', NULL, '311', '310', '5', 'ENS.', 28),
(129, 'N.U', 'NYAMUKURU BISIMWA', '0000-00-00', '01', '0000-00-00', '02', '100', 'CATH.', '0000-00-00', 'D6N', '0000-00-00', '141', '140', '1', 'ADIR.', 29),
(130, 'N.U', 'DEBORA BAGULA', '0000-00-00', '01', '0000-00-00', '02', '100', 'CATH.', '0000-00-00', 'D6N', NULL, '310', '310', '1', 'ENS.', 29),
(131, 'N.U', 'KASHABA MAKELELE', '0000-00-00', '01', '0000-00-00', '01', '200', 'CATH.', '0000-00-00', 'D4N', NULL, '320', '320', '5', 'ENS.', 29),
(132, 'N.U', 'VENAS MAKAYABO', '0000-00-00', '01', '0000-00-00', '01', '100', 'CATH.', '0000-00-00', 'D6N', NULL, '310', '310', '1', 'ENS.', 29),
(133, 'N.U', 'BATABIKWA KAFUPI', '0000-00-00', '01', '0000-00-00', '01', '206', 'CATH.', '0000-00-00', 'D6N', NULL, '310', '310', '1', 'ENS.', 29),
(134, 'N.U', 'BAGULA TCHIBASHIMBA', '0000-00-00', '01', '0000-00-00', '01', '206', 'CATH.', '0000-00-00', 'D6N', NULL, '310', '310', '5', 'ENS.', 29),
(135, 'N.U', 'AMANI MWISHA', '0000-00-00', '01', '0000-00-00', '01', '100', 'CATH.', '0000-00-00', 'D6N', NULL, '212', '310', '1', 'ENS.', 29),
(136, '23232', 'HUGUES ILUNGA', '1993-01-01', '01', '2017-01-01', '01', '100', 'CATH', '2017-01-01', 'L2/LA', '2017-11-27', '212', '310', '0', 'ENS', 15),
(137, '255562161', 'VALERIE NQMQ', '1988-03-14', '01', '2011-01-03', '02', '200', 'CATH', '1997-06-25', 'D6N', '2017-11-03', '346', '348', '6', 'OUV', 26),
(138, 'NU', 'LINDA NAMA NKONE', '1983-01-01', '01', '2003-01-01', '01', '100', 'CATH', '2017-12-01', 'A1', '2017-12-01', '131', '131', '14', 'ENSEIGNANT', 34),
(139, 'NU', 'MWALIMU BISIMWA', '1992-01-01', '01', '2016-01-01', '01', '203', 'CATH', '2011-01-01', 'D6N', '2015-01-01', '133', '141', '1', 'ENS', 37);

-- --------------------------------------------------------

--
-- Structure de la table `promus`
--

CREATE TABLE `promus` (
  `id` int(11) NOT NULL,
  `effectif_F` int(11) NOT NULL,
  `effectif_G` int(11) NOT NULL,
  `belongs_to` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `qualification`
--

CREATE TABLE `qualification` (
  `id` int(11) NOT NULL,
  `nom_qualification` varchar(200) NOT NULL,
  `cigle_qualification` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `redoublants`
--

CREATE TABLE `redoublants` (
  `id` int(11) NOT NULL,
  `nom_class` varchar(200) NOT NULL,
  `effectif_F` int(11) NOT NULL,
  `effectif_G` int(11) NOT NULL,
  `belongs_to` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `section`
--

CREATE TABLE `section` (
  `id` int(11) NOT NULL,
  `nom_section` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `section`
--

INSERT INTO `section` (`id`, `nom_section`) VALUES
(1, 'Technique'),
(2, 'Mecanique'),
(3, 'Scientifique'),
(4, 'Litteraire'),
(5, 'Pedagogie');

-- --------------------------------------------------------

--
-- Structure de la table `sheet1`
--

CREATE TABLE `sheet1` (
  `A` varchar(14) DEFAULT NULL,
  `B` int(2) DEFAULT NULL,
  `C` varchar(1) DEFAULT NULL,
  `D` varchar(8) DEFAULT NULL,
  `E` int(1) DEFAULT NULL,
  `F` varchar(10) DEFAULT NULL,
  `G` varchar(18) DEFAULT NULL,
  `H` varchar(1) DEFAULT NULL,
  `I` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `sheet1`
--

INSERT INTO `sheet1` (`A`, `B`, `C`, `D`, `E`, `F`, `G`, `H`, `I`) VALUES
('EP. UBANI', 1, '-', 'Primaire', 6, '', '**1**2**3**4**5**6', '-', '-'),
('EP. MUSENGE', 2, '-', 'Primaire', 6, '', '**1**2**3**4**5**6', '-', '-'),
('EP. BILOBILO', 3, '-', 'Primaire', 6, '', '**1**2**3**4**5**6', '-', '-'),
('EP. MERA', 4, '-', 'Primaire', 6, '', '**1**2**3**4**5**6', '-', '-'),
('EP. OSOKARI', 5, '-', 'Primaire', 6, '', '**1**2**3**4**5**6', '-', '-'),
('EP. MUTIKU', 6, '-', 'Primaire', 6, '', '**1**2**3**4**5**6', '-', '-'),
('E.P. POBILINGA', 7, '-', 'Primaire', 6, '', '**1**2**3**4**5**6', '-', '-'),
('EP. BONGOBONGO', 8, '-', 'Primaire', 6, '', '**1**2**3**4**5**6', '-', '-'),
('EP. KITIKA', 9, '-', 'Primaire', 6, '', '**1**2**3**4**5**6', '-', '-'),
('EP. LURABA', 10, '-', 'Primaire', 6, '', '**1**2**3**4**5**6', '-', '-'),
('EP. MUTANDALA', 11, '-', 'Primaire', 6, '', '**1**2**3**4**5**6', '-', '-'),
('EP. MUMBA', 12, '-', 'Primaire', 6, '', '**1**2**3**4**5**6', '-', '-'),
('EP. UBANI', 1, '-', 'Primaire', 6, '', '**1**2**3**4**5**6', '-', '-'),
('EP. MUSENGE', 2, '-', 'Primaire', 6, '', '**1**2**3**4**5**6', '-', '-'),
('EP. BILOBILO', 3, '-', 'Primaire', 6, '', '**1**2**3**4**5**6', '-', '-'),
('EP. MERA', 4, '-', 'Primaire', 6, '', '**1**2**3**4**5**6', '-', '-'),
('EP. OSOKARI', 5, '-', 'Primaire', 6, '', '**1**2**3**4**5**6', '-', '-'),
('EP. MUTIKU', 6, '-', 'Primaire', 6, '', '**1**2**3**4**5**6', '-', '-'),
('E.P. POBILINGA', 7, '-', 'Primaire', 6, '', '**1**2**3**4**5**6', '-', '-'),
('EP. BONGOBONGO', 8, '-', 'Primaire', 6, '', '**1**2**3**4**5**6', '-', '-'),
('EP. KITIKA', 9, '-', 'Primaire', 6, '', '**1**2**3**4**5**6', '-', '-'),
('EP. LURABA', 10, '-', 'Primaire', 6, '', '**1**2**3**4**5**6', '-', '-'),
('EP. MUTANDALA', 11, '-', 'Primaire', 6, '', '**1**2**3**4**5**6', '-', '-'),
('EP. MUMBA', 12, '-', 'Primaire', 6, '', '**1**2**3**4**5**6', '-', '-');

-- --------------------------------------------------------

--
-- Structure de la table `sous_div`
--

CREATE TABLE `sous_div` (
  `id` int(11) NOT NULL,
  `nom_sous_div` varchar(200) NOT NULL,
  `belongs_to` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `sous_div`
--

INSERT INTO `sous_div` (`id`, `nom_sous_div`, `belongs_to`) VALUES
(6, 'centre', 5),
(7, 'PAROISSE SAINT ESPRIT', 6),
(8, 'PAROISSE MONT CARMEL', 6),
(9, 'PAROISSE BIENHEUREUSE ANUARITE', 6),
(10, 'PAROISSE CATHEDRALE', 7),
(11, 'PAROISSE NOTRE DAME DAFRIQUE', 7),
(12, 'PAROISSE DE LEMMANUEL', 7),
(13, 'PAROISSE SAINT FRANCOIS XAVIER', 7),
(14, 'PAROISSE CATHEDRALE NY', 8),
(15, 'PAROISSE NOTRE DAME DAFRIQUE NYIR', 8);

-- --------------------------------------------------------

--
-- Structure de la table `structure_autorisee`
--

CREATE TABLE `structure_autorisee` (
  `id` int(11) NOT NULL,
  `nom_class` varchar(200) NOT NULL,
  `id_ecole` int(11) NOT NULL,
  `nbr_structure` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `structure_organisee`
--

CREATE TABLE `structure_organisee` (
  `id` int(11) NOT NULL,
  `nom_class` varchar(200) NOT NULL,
  `id_ecole` int(11) NOT NULL,
  `nbr_structure` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `transfere`
--

CREATE TABLE `transfere` (
  `id` int(11) NOT NULL,
  `effectif_F` int(11) NOT NULL,
  `effectif_G` int(11) NOT NULL,
  `belongs_to` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nom` varchar(200) NOT NULL,
  `prenom` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `type_user` varchar(200) DEFAULT NULL,
  `phone` varchar(255) NOT NULL,
  `adress` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `belongs_to` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `nom`, `prenom`, `password`, `type_user`, `phone`, `adress`, `photo`, `belongs_to`) VALUES
(1, 'naledi', 'services', 'naokOZDGLuQ7E', 'admin', '', '', 'admin.jpg', 0),
(2, 'guy', 'bios', 'naokOZDGLuQ7E', 'Conseiller d\'enseignement', '1234566', 'goma', 'bar-pie-blue-charts-white-background-business-finance-success-concept-d-tender-illustration-39890812.jpg', 1),
(3, 'FABRICE', 'LUGH', 'naokOZDGLuQ7E', 'Analyste', '234567890', 'goma Q KQTINDO GAUCHE AVENU DU LAC', '2.jpg', 4),
(4, 'medine', 'med', 'naokOZDGLuQ7E', 'Conseiller d\'enseignement', '234567890', 'goma', '6.jpg', 3),
(5, 'daphne', 'dada', 'naokOZDGLuQ7E', 'Conseiller d\'enseignement', '9876543', 'cale', '2.jpg', 4);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `abandon`
--
ALTER TABLE `abandon`
  ADD PRIMARY KEY (`id`),
  ADD KEY `belongs_to` (`belongs_to`);

--
-- Index pour la table `age_eleves`
--
ALTER TABLE `age_eleves`
  ADD PRIMARY KEY (`id`),
  ADD KEY `belongs_to` (`belongs_to`);

--
-- Index pour la table `certifie_diplome`
--
ALTER TABLE `certifie_diplome`
  ADD PRIMARY KEY (`id`),
  ADD KEY `belongs_to` (`belongs_to`);

--
-- Index pour la table `classe_maternelle`
--
ALTER TABLE `classe_maternelle`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_ecole` (`id_ecole`);

--
-- Index pour la table `classe_primaire`
--
ALTER TABLE `classe_primaire`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_ecole` (`id_ecole`);

--
-- Index pour la table `classe_secondaire_cl`
--
ALTER TABLE `classe_secondaire_cl`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_ecole` (`id_ecole`),
  ADD KEY `option` (`option`);

--
-- Index pour la table `classe_secondaire_co`
--
ALTER TABLE `classe_secondaire_co`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_ecole` (`id_ecole`);

--
-- Index pour la table `coordination_sp`
--
ALTER TABLE `coordination_sp`
  ADD PRIMARY KEY (`id`),
  ADD KEY `belongs_to` (`belongs_to`);

--
-- Index pour la table `diocese`
--
ALTER TABLE `diocese`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `ecole`
--
ALTER TABLE `ecole`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_paroisse` (`id_paroisse`),
  ADD KEY `id_niveau` (`id_niveau`);

--
-- Index pour la table `ecole2`
--
ALTER TABLE `ecole2`
  ADD PRIMARY KEY (`id`),
  ADD KEY `belongs_to` (`belongs_to`);

--
-- Index pour la table `institution`
--
ALTER TABLE `institution`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `niveau`
--
ALTER TABLE `niveau`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `nouveau_inscrit`
--
ALTER TABLE `nouveau_inscrit`
  ADD PRIMARY KEY (`id`),
  ADD KEY `belongs_to` (`belongs_to`);

--
-- Index pour la table `option`
--
ALTER TABLE `option`
  ADD PRIMARY KEY (`id`),
  ADD KEY `belongs_to` (`belongs_to`);

--
-- Index pour la table `paroisse`
--
ALTER TABLE `paroisse`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `paroisse2`
--
ALTER TABLE `paroisse2`
  ADD PRIMARY KEY (`id`),
  ADD KEY `belongs_to` (`belongs_to`);

--
-- Index pour la table `personnel`
--
ALTER TABLE `personnel`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ecole_affect` (`ecole_affect`);

--
-- Index pour la table `promus`
--
ALTER TABLE `promus`
  ADD PRIMARY KEY (`id`),
  ADD KEY `belongs_to` (`belongs_to`);

--
-- Index pour la table `qualification`
--
ALTER TABLE `qualification`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `redoublants`
--
ALTER TABLE `redoublants`
  ADD PRIMARY KEY (`id`),
  ADD KEY `belongs_to` (`belongs_to`);

--
-- Index pour la table `section`
--
ALTER TABLE `section`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `sous_div`
--
ALTER TABLE `sous_div`
  ADD PRIMARY KEY (`id`),
  ADD KEY `belongs_to` (`belongs_to`);

--
-- Index pour la table `structure_autorisee`
--
ALTER TABLE `structure_autorisee`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_ecole` (`id_ecole`);

--
-- Index pour la table `structure_organisee`
--
ALTER TABLE `structure_organisee`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_ecole` (`id_ecole`);

--
-- Index pour la table `transfere`
--
ALTER TABLE `transfere`
  ADD PRIMARY KEY (`id`),
  ADD KEY `belongs_to` (`belongs_to`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `abandon`
--
ALTER TABLE `abandon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `age_eleves`
--
ALTER TABLE `age_eleves`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `certifie_diplome`
--
ALTER TABLE `certifie_diplome`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `classe_maternelle`
--
ALTER TABLE `classe_maternelle`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `classe_primaire`
--
ALTER TABLE `classe_primaire`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `classe_secondaire_cl`
--
ALTER TABLE `classe_secondaire_cl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT pour la table `classe_secondaire_co`
--
ALTER TABLE `classe_secondaire_co`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `coordination_sp`
--
ALTER TABLE `coordination_sp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `diocese`
--
ALTER TABLE `diocese`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `ecole`
--
ALTER TABLE `ecole`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT pour la table `ecole2`
--
ALTER TABLE `ecole2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT pour la table `institution`
--
ALTER TABLE `institution`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `niveau`
--
ALTER TABLE `niveau`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `nouveau_inscrit`
--
ALTER TABLE `nouveau_inscrit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `option`
--
ALTER TABLE `option`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT pour la table `paroisse`
--
ALTER TABLE `paroisse`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `paroisse2`
--
ALTER TABLE `paroisse2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT pour la table `personnel`
--
ALTER TABLE `personnel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=140;
--
-- AUTO_INCREMENT pour la table `promus`
--
ALTER TABLE `promus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `qualification`
--
ALTER TABLE `qualification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `redoublants`
--
ALTER TABLE `redoublants`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `section`
--
ALTER TABLE `section`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `sous_div`
--
ALTER TABLE `sous_div`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT pour la table `structure_autorisee`
--
ALTER TABLE `structure_autorisee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `structure_organisee`
--
ALTER TABLE `structure_organisee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `transfere`
--
ALTER TABLE `transfere`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `abandon`
--
ALTER TABLE `abandon`
  ADD CONSTRAINT `abandon_ibfk_1` FOREIGN KEY (`belongs_to`) REFERENCES `ecole2` (`id`);

--
-- Contraintes pour la table `age_eleves`
--
ALTER TABLE `age_eleves`
  ADD CONSTRAINT `age_eleves_ibfk_1` FOREIGN KEY (`belongs_to`) REFERENCES `ecole2` (`id`);

--
-- Contraintes pour la table `certifie_diplome`
--
ALTER TABLE `certifie_diplome`
  ADD CONSTRAINT `certifie_diplome_ibfk_1` FOREIGN KEY (`belongs_to`) REFERENCES `ecole2` (`id`);

--
-- Contraintes pour la table `classe_maternelle`
--
ALTER TABLE `classe_maternelle`
  ADD CONSTRAINT `classe_maternelle_ibfk_1` FOREIGN KEY (`id_ecole`) REFERENCES `ecole2` (`id`);

--
-- Contraintes pour la table `classe_primaire`
--
ALTER TABLE `classe_primaire`
  ADD CONSTRAINT `classe_primaire_ibfk_1` FOREIGN KEY (`id_ecole`) REFERENCES `ecole2` (`id`);

--
-- Contraintes pour la table `classe_secondaire_cl`
--
ALTER TABLE `classe_secondaire_cl`
  ADD CONSTRAINT `classe_secondaire_cl_ibfk_1` FOREIGN KEY (`id_ecole`) REFERENCES `ecole2` (`id`),
  ADD CONSTRAINT `classe_secondaire_cl_ibfk_2` FOREIGN KEY (`option`) REFERENCES `option` (`id`);

--
-- Contraintes pour la table `classe_secondaire_co`
--
ALTER TABLE `classe_secondaire_co`
  ADD CONSTRAINT `classe_secondaire_co_ibfk_1` FOREIGN KEY (`id_ecole`) REFERENCES `ecole2` (`id`);

--
-- Contraintes pour la table `coordination_sp`
--
ALTER TABLE `coordination_sp`
  ADD CONSTRAINT `coordination_sp_ibfk_1` FOREIGN KEY (`belongs_to`) REFERENCES `diocese` (`id`);

--
-- Contraintes pour la table `ecole`
--
ALTER TABLE `ecole`
  ADD CONSTRAINT `ecole_ibfk_1` FOREIGN KEY (`id_paroisse`) REFERENCES `paroisse` (`id`),
  ADD CONSTRAINT `ecole_ibfk_2` FOREIGN KEY (`id_niveau`) REFERENCES `niveau` (`id`);

--
-- Contraintes pour la table `ecole2`
--
ALTER TABLE `ecole2`
  ADD CONSTRAINT `ecole2_ibfk_1` FOREIGN KEY (`belongs_to`) REFERENCES `sous_div` (`id`);

--
-- Contraintes pour la table `nouveau_inscrit`
--
ALTER TABLE `nouveau_inscrit`
  ADD CONSTRAINT `nouveau_inscrit_ibfk_1` FOREIGN KEY (`belongs_to`) REFERENCES `ecole2` (`id`);

--
-- Contraintes pour la table `option`
--
ALTER TABLE `option`
  ADD CONSTRAINT `option_ibfk_1` FOREIGN KEY (`belongs_to`) REFERENCES `section` (`id`);

--
-- Contraintes pour la table `paroisse2`
--
ALTER TABLE `paroisse2`
  ADD CONSTRAINT `paroisse2_ibfk_1` FOREIGN KEY (`belongs_to`) REFERENCES `coordination_sp` (`id`);

--
-- Contraintes pour la table `personnel`
--
ALTER TABLE `personnel`
  ADD CONSTRAINT `personnel_ibfk_1` FOREIGN KEY (`ecole_affect`) REFERENCES `ecole2` (`id`);

--
-- Contraintes pour la table `promus`
--
ALTER TABLE `promus`
  ADD CONSTRAINT `promus_ibfk_1` FOREIGN KEY (`belongs_to`) REFERENCES `ecole2` (`id`);

--
-- Contraintes pour la table `redoublants`
--
ALTER TABLE `redoublants`
  ADD CONSTRAINT `redoublants_ibfk_1` FOREIGN KEY (`belongs_to`) REFERENCES `ecole2` (`id`);

--
-- Contraintes pour la table `sous_div`
--
ALTER TABLE `sous_div`
  ADD CONSTRAINT `sous_div_ibfk_1` FOREIGN KEY (`belongs_to`) REFERENCES `paroisse2` (`id`);

--
-- Contraintes pour la table `structure_autorisee`
--
ALTER TABLE `structure_autorisee`
  ADD CONSTRAINT `structure_autorisee_ibfk_1` FOREIGN KEY (`id_ecole`) REFERENCES `ecole2` (`id`);

--
-- Contraintes pour la table `structure_organisee`
--
ALTER TABLE `structure_organisee`
  ADD CONSTRAINT `structure_organisee_ibfk_1` FOREIGN KEY (`id_ecole`) REFERENCES `ecole2` (`id`);

--
-- Contraintes pour la table `transfere`
--
ALTER TABLE `transfere`
  ADD CONSTRAINT `transfere_ibfk_1` FOREIGN KEY (`belongs_to`) REFERENCES `ecole2` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
