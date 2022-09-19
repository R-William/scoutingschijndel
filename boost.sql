-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 19, 2022 at 09:29 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `scouting-schijndel`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `age-min` int(11) NOT NULL,
  `age-max` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`, `age-min`, `age-max`) VALUES
(1, 'Bevers', 'Kinderen van 5 tot en met 7 jaar worden bij Scouting Bevers genoemd. Bij de Bevers ligt de nadruk op het samen spelen in de natuur. Zo leren ze spelenderwijs samen te werken onder leiding van vrijwilligers. De Bevers spelen in het dorp Hotsjietonia, samen met themafiguren zoals Keet Kleur, Sterre Stroom, Steven Stroom, Rebbel, Stanley Stekker, Noa, Rozemarijn, Professor Plof. \nDe Bevers gaan 2x per jaar een nachtje weg van zaterdagochtend t/m zondagmiddag. Ze overnachten dan in het scoutinggebouw in Schijndel. De Bevers hebben ook ieder jaar één zomerkamp van zaterdagochtend t/m maandagmiddag.', 5, 7),
(2, 'Welpen', 'De Welpen is een speltak voor jongens en meisjes (niet gemengd) van 7 tot 10 jaar die wekelijks bij elkaar komen om er weer een vermakelijke tijd van te maken. De programma’s zetten de kinderen aan tot creativiteit, activiteit, bewustzijn van milieu & natuur, socialiteit & gezelligheid en tot slot ook groei van zelfstandigheid. De Welpen gaan eenmaal per jaar (in de zomervakantie) op zomerkamp. Dit zomerkamp duurt 5 dagen en als accommodatie wordt gebruik gemaakt van een blokhut met voorzieningen. Om niet het hele jaar op het zomerkamp te hoeven wachten, gaan de Welpen twee keer per jaar op weekend!', 7, 11),
(3, 'Scouts', 'Scouts zijn jongens of meisjes van 10 tot 14 jaar. Zij werken vaak in vaste groepen (patrouilles) en gaan dieper in op activiteiten en onderwerpen. Samenwerken en het ontdekken van eigen interesses zijn erg belangrijk. Het activiteitenprogramma is aangepast aan de stijgende zelfstandigheid en het ontdekken van de eigen mogelijkheden. Een beperkt aantal programma’s wordt door de jongeren zelf bedacht, voorbereid en uitgevoerd. Echter onder toezicht en hulp van de leiding. De scouts gaan eenmaal per jaar (in de zomervakantie) op zomerkamp. Dit zomerkamp duurt 7 dagen en er wordt in tenten geslapen. Eens per drie jaar wordt een kampeerlocatie in het buitenland gezocht (Benelux of Duitsland). Het pionieren van een keuken en zelf koken hoort hier natuurlijk bij. Ook gaan de Scouts in principe minimaal twee keer per jaar op weekend.', 11, 15),
(4, 'Explorers', 'Explorers zijn jongens (Rowans) en meisjes (Sherpa\'s) van 14 - 18 jaar en zijn actief in een groep van ongeveer 15 personen. Dit is een van de voorwaarden om intensief op een onderwerp in te kunnen gaan en ieders persoonlijke interesse aan bod te laten komen. Zelf denken, beslissen, organiseren en uitvoeren, daar draait het om. De begeleiding stimuleert en helpt daar waar nodig en overziet de consequenties van de activiteiten. De Rovers hebben gedurende het seizoen een aantal activiteiten om hun financiële middelen aan te vullen zoals Paaspop, Worstenbroodjes verkopen ,beheer toiletten en fietsenstalling bij de kermis, parkeren bij de Wit,en Motorcross.', 15, 18),
(5, 'Pivos', 'Pivo’s zijn jongeren van 18 t/m 23 jaar die, in principe, geheel zelfstandig hun programma\'s draaien. Wel wordt deze jeugdgroep bijgestaan door een adviseur.', 18, 23),
(6, 'PlusScouts', 'De PlusScouts zijn allemaal 23+ en veelal oud-scouts of oud-leiding die op deze manier betrokken kunnen blijven bij Scouting Schijndel. De PlusScouts bijeenkomsten zijn maandelijks en meestal op donderdag. Onze doelstelling is: behoud van scouting ervaring, gezelligheid voor de deelnemers, ontplooien van initiatieven en ondersteuning van Scouting Schijndel Nieuwste foto\'s ', 23, 99);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2021_06_06_175124_groups', 1),
(4, '2021_06_07_172744_sliders', 1),
(5, '2022_05_04_084757_add_title_to_slider', 1);

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slider_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_list` int(11) NOT NULL,
  `display_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `slider_name`, `image_location`, `order_list`, `display_title`) VALUES
(1, 'scouts', 'images/groups/scouts/gidsen-groep.jpeg', 1, 'Gidsen 2022'),
(2, 'scouts', 'images/groups/scouts/verkenners-groep.jpeg', 2, 'Verkenners 2'),
(3, 'scouts', 'images/groups/scouts/verkenners-kamp.jpeg', 3, 'Verkenners op kamp'),
(4, 'scouts', 'images/groups/scouts/verkenners-ridder.jpeg', 3, 'Verkenners 3 op kamp'),
(5, 'bevers', 'images/groups/bevers/stokbroodbakken.jpg', 0, ''),
(6, 'explorers', 'images/groups/explorers/rowans-groepsfoto.jpeg', 0, ''),
(7, 'explorers', 'images/groups/explorers/rowans-kampvuur.jpeg', 0, ''),
(8, 'sherpas', 'images/groups/explorers/sherpas-groep.jpeg', 0, ''),
(9, 'explorers', 'images/groups/explorers/sherpas-strand.jpeg', 0, ''),
(10, 'bevers', 'images/groups/bevers/Zomerkamp Bevers 2017 (13).JPG', 0, ''),
(11, 'pivos', 'images/groups/pivos/pivos-curling.jpeg', 0, ''),
(12, 'pivos', 'images/groups/pivos/pivos-sump.jpeg', 0, ''),
(13, 'plusscouts', 'images/groups/plusscouts/plusscouts.jpeg', 0, ''),
(14, 'plusscouts', 'images/groups/plusscouts/plusscouts-tent.jpeg', 0, ''),
(15, 'welpen', 'images/groups/welpen/welpen1-opschoondag.jpeg', 0, ''),
(16, 'welpen', 'images/groups/welpen/welpenmeiden-groep.jpeg', 0, ''),
(17, 'welpen', 'images/groups/welpen/welpenmeiden-hike.jpeg', 0, ''),
(18, 'welpen', 'images/groups/welpen/welpenmeiden-trouwen.jpeg', 0, ''),
(19, 'general_organisation', 'images/groups/scouts/gidsen-groep.jpeg', 0, ''),
(20, 'general_organisation', 'images/groups/explorers/rowans-kampvuur.jpeg', 0, ''),
(21, 'general_organisation', 'images/pages/organisation/scoutoma_2015.jpeg', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `sub-groups`
--

CREATE TABLE `sub-groups` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `group_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `end_time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` int(11) NOT NULL,
  `contact_persoon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub-groups`
--

INSERT INTO `sub-groups` (`id`, `group_id`, `name`, `date`, `start_time`, `end_time`, `gender`, `contact_persoon`, `email`) VALUES
(1, 1, 'Bevers', 'zaterdag', '09:30', '11:30', 1, 'lisette', 'bevers@scoutingschijndel.nl'),
(2, 2, 'Welpen 1', 'vrijdag', '18:30', '20:30', 3, 'william', 'welpen1@scoutingschijndel.nl'),
(3, 2, 'Welpen 2', 'zaterdag', '09:30', '11:30', 3, 'dennis', ''),
(4, 2, 'Welpen meiden', 'zaterdag', '09:30', '11:30', 2, 'femke', 'welpen-meiden@scoutingschijndel.nl\r\n'),
(5, 3, 'Verkenners 2', 'woensdag', '18:45', '20:45', 3, '?', 'verkenners2@scoutingschijndel.nl\r\n'),
(6, 3, 'Verkenners 3', 'zaterdag', '09:30', '11:30', 3, 'cas', 'verkenneres3@scoutingschijndel.nl'),
(7, 3, 'Gidsen', 'vrijdag', '19:30', '21:30', 2, 'bente', 'gidsen@scoutingschijndel.nl');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub-groups`
--
ALTER TABLE `sub-groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `sub-groups`
--
ALTER TABLE `sub-groups`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
