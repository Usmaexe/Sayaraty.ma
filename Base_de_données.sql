-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2023 at 01:47 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pfe1`
--
CREATE DATABASE IF NOT EXISTS `pfe1` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `pfe1`;

-- --------------------------------------------------------

--
-- Table structure for table `admine`
--

CREATE TABLE `admine` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admine`
--

INSERT INTO `admine` (`id`, `email`, `password`) VALUES
(1, 'chenabdsmd01@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `man1`
--

CREATE TABLE `man1` (
  `description` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  `titre` varchar(50) NOT NULL,
  `file` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `man1`
--

INSERT INTO `man1` (`description`, `date`, `titre`, `file`) VALUES
(';oiuphyds', '2023-04-06', 'iucgyu', 0x576861747341707020496d61676520323032332d30332d31322061742032302e33382e31342e6a7067),
('bjvfsluihfou;svh', '2023-04-07', 'chnouf', 0x576861747341707020496d61676520323032332d30332d31322061742032302e33382e31342e6a7067);

-- --------------------------------------------------------

--
-- Table structure for table `table1`
--

CREATE TABLE `table1` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `table2`
--

CREATE TABLE `table2` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `table2`
--

INSERT INTO `table2` (`id`, `email`, `password`) VALUES
(7, 'chenabdsmd01@gmail.com', 'Mohamed932');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admine`
--
ALTER TABLE `admine`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table1`
--
ALTER TABLE `table1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table2`
--
ALTER TABLE `table2`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admine`
--
ALTER TABLE `admine`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `table1`
--
ALTER TABLE `table1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `table2`
--
ALTER TABLE `table2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- Database: `phpmyadmin`
--
CREATE DATABASE IF NOT EXISTS `phpmyadmin` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `phpmyadmin`;

-- --------------------------------------------------------

--
-- Table structure for table `pma__bookmark`
--

CREATE TABLE `pma__bookmark` (
  `id` int(10) UNSIGNED NOT NULL,
  `dbase` varchar(255) NOT NULL DEFAULT '',
  `user` varchar(255) NOT NULL DEFAULT '',
  `label` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `query` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Bookmarks';

-- --------------------------------------------------------

--
-- Table structure for table `pma__central_columns`
--

CREATE TABLE `pma__central_columns` (
  `db_name` varchar(64) NOT NULL,
  `col_name` varchar(64) NOT NULL,
  `col_type` varchar(64) NOT NULL,
  `col_length` text DEFAULT NULL,
  `col_collation` varchar(64) NOT NULL,
  `col_isNull` tinyint(1) NOT NULL,
  `col_extra` varchar(255) DEFAULT '',
  `col_default` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Central list of columns';

-- --------------------------------------------------------

--
-- Table structure for table `pma__column_info`
--

CREATE TABLE `pma__column_info` (
  `id` int(5) UNSIGNED NOT NULL,
  `db_name` varchar(64) NOT NULL DEFAULT '',
  `table_name` varchar(64) NOT NULL DEFAULT '',
  `column_name` varchar(64) NOT NULL DEFAULT '',
  `comment` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `mimetype` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `transformation` varchar(255) NOT NULL DEFAULT '',
  `transformation_options` varchar(255) NOT NULL DEFAULT '',
  `input_transformation` varchar(255) NOT NULL DEFAULT '',
  `input_transformation_options` varchar(255) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Column information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__designer_settings`
--

CREATE TABLE `pma__designer_settings` (
  `username` varchar(64) NOT NULL,
  `settings_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Settings related to Designer';

--
-- Dumping data for table `pma__designer_settings`
--

INSERT INTO `pma__designer_settings` (`username`, `settings_data`) VALUES
('root', '{\"angular_direct\":\"direct\",\"snap_to_grid\":\"off\",\"relation_lines\":\"true\"}');

-- --------------------------------------------------------

--
-- Table structure for table `pma__export_templates`
--

CREATE TABLE `pma__export_templates` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) NOT NULL,
  `export_type` varchar(10) NOT NULL,
  `template_name` varchar(64) NOT NULL,
  `template_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved export templates';

-- --------------------------------------------------------

--
-- Table structure for table `pma__favorite`
--

CREATE TABLE `pma__favorite` (
  `username` varchar(64) NOT NULL,
  `tables` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Favorite tables';

--
-- Dumping data for table `pma__favorite`
--

INSERT INTO `pma__favorite` (`username`, `tables`) VALUES
('root', '[]');

-- --------------------------------------------------------

--
-- Table structure for table `pma__history`
--

CREATE TABLE `pma__history` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(64) NOT NULL DEFAULT '',
  `db` varchar(64) NOT NULL DEFAULT '',
  `table` varchar(64) NOT NULL DEFAULT '',
  `timevalue` timestamp NOT NULL DEFAULT current_timestamp(),
  `sqlquery` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='SQL history for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__navigationhiding`
--

CREATE TABLE `pma__navigationhiding` (
  `username` varchar(64) NOT NULL,
  `item_name` varchar(64) NOT NULL,
  `item_type` varchar(64) NOT NULL,
  `db_name` varchar(64) NOT NULL,
  `table_name` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Hidden items of navigation tree';

-- --------------------------------------------------------

--
-- Table structure for table `pma__pdf_pages`
--

CREATE TABLE `pma__pdf_pages` (
  `db_name` varchar(64) NOT NULL DEFAULT '',
  `page_nr` int(10) UNSIGNED NOT NULL,
  `page_descr` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='PDF relation pages for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__recent`
--

CREATE TABLE `pma__recent` (
  `username` varchar(64) NOT NULL,
  `tables` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Recently accessed tables';

--
-- Dumping data for table `pma__recent`
--

INSERT INTO `pma__recent` (`username`, `tables`) VALUES
('root', '[{\"db\":\"sayaraty\",\"table\":\"moniteur\"},{\"db\":\"sayaraty\",\"table\":\"document\"},{\"db\":\"sayaraty\",\"table\":\"candidat\"},{\"db\":\"sayaraty\",\"table\":\"avis\"},{\"db\":\"sayaraty\",\"table\":\"administrateur\"},{\"db\":\"sayaraty\",\"table\":\"examen\"},{\"db\":\"sayaraty\",\"table\":\"message\"},{\"db\":\"sayaraty\",\"table\":\"seance\"},{\"db\":\"sayaraty\",\"table\":\"offre\"},{\"db\":\"sayaraty\",\"table\":\"cours\"}]');

-- --------------------------------------------------------

--
-- Table structure for table `pma__relation`
--

CREATE TABLE `pma__relation` (
  `master_db` varchar(64) NOT NULL DEFAULT '',
  `master_table` varchar(64) NOT NULL DEFAULT '',
  `master_field` varchar(64) NOT NULL DEFAULT '',
  `foreign_db` varchar(64) NOT NULL DEFAULT '',
  `foreign_table` varchar(64) NOT NULL DEFAULT '',
  `foreign_field` varchar(64) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Relation table';

-- --------------------------------------------------------

--
-- Table structure for table `pma__savedsearches`
--

CREATE TABLE `pma__savedsearches` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) NOT NULL DEFAULT '',
  `db_name` varchar(64) NOT NULL DEFAULT '',
  `search_name` varchar(64) NOT NULL DEFAULT '',
  `search_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved searches';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_coords`
--

CREATE TABLE `pma__table_coords` (
  `db_name` varchar(64) NOT NULL DEFAULT '',
  `table_name` varchar(64) NOT NULL DEFAULT '',
  `pdf_page_number` int(11) NOT NULL DEFAULT 0,
  `x` float UNSIGNED NOT NULL DEFAULT 0,
  `y` float UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table coordinates for phpMyAdmin PDF output';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_info`
--

CREATE TABLE `pma__table_info` (
  `db_name` varchar(64) NOT NULL DEFAULT '',
  `table_name` varchar(64) NOT NULL DEFAULT '',
  `display_field` varchar(64) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_uiprefs`
--

CREATE TABLE `pma__table_uiprefs` (
  `username` varchar(64) NOT NULL,
  `db_name` varchar(64) NOT NULL,
  `table_name` varchar(64) NOT NULL,
  `prefs` text NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Tables'' UI preferences';

-- --------------------------------------------------------

--
-- Table structure for table `pma__tracking`
--

CREATE TABLE `pma__tracking` (
  `db_name` varchar(64) NOT NULL,
  `table_name` varchar(64) NOT NULL,
  `version` int(10) UNSIGNED NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `schema_snapshot` text NOT NULL,
  `schema_sql` text DEFAULT NULL,
  `data_sql` longtext DEFAULT NULL,
  `tracking` set('UPDATE','REPLACE','INSERT','DELETE','TRUNCATE','CREATE DATABASE','ALTER DATABASE','DROP DATABASE','CREATE TABLE','ALTER TABLE','RENAME TABLE','DROP TABLE','CREATE INDEX','DROP INDEX','CREATE VIEW','ALTER VIEW','DROP VIEW') DEFAULT NULL,
  `tracking_active` int(1) UNSIGNED NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Database changes tracking for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__userconfig`
--

CREATE TABLE `pma__userconfig` (
  `username` varchar(64) NOT NULL,
  `timevalue` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `config_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User preferences storage for phpMyAdmin';

--
-- Dumping data for table `pma__userconfig`
--

INSERT INTO `pma__userconfig` (`username`, `timevalue`, `config_data`) VALUES
('root', '2023-04-18 11:47:27', '{\"NavigationWidth\":270,\"Console\\/Mode\":\"show\",\"Console\\/Height\":36.00003000000001,\"Server\\/hide_db\":\"\",\"Server\\/only_db\":\"\",\"ThemeDefault\":\"bootstrap\"}');

-- --------------------------------------------------------

--
-- Table structure for table `pma__usergroups`
--

CREATE TABLE `pma__usergroups` (
  `usergroup` varchar(64) NOT NULL,
  `tab` varchar(64) NOT NULL,
  `allowed` enum('Y','N') NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User groups with configured menu items';

-- --------------------------------------------------------

--
-- Table structure for table `pma__users`
--

CREATE TABLE `pma__users` (
  `username` varchar(64) NOT NULL,
  `usergroup` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Users and their assignments to user groups';

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pma__central_columns`
--
ALTER TABLE `pma__central_columns`
  ADD PRIMARY KEY (`db_name`,`col_name`);

--
-- Indexes for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `db_name` (`db_name`,`table_name`,`column_name`);

--
-- Indexes for table `pma__designer_settings`
--
ALTER TABLE `pma__designer_settings`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_user_type_template` (`username`,`export_type`,`template_name`);

--
-- Indexes for table `pma__favorite`
--
ALTER TABLE `pma__favorite`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__history`
--
ALTER TABLE `pma__history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`,`db`,`table`,`timevalue`);

--
-- Indexes for table `pma__navigationhiding`
--
ALTER TABLE `pma__navigationhiding`
  ADD PRIMARY KEY (`username`,`item_name`,`item_type`,`db_name`,`table_name`);

--
-- Indexes for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  ADD PRIMARY KEY (`page_nr`),
  ADD KEY `db_name` (`db_name`);

--
-- Indexes for table `pma__recent`
--
ALTER TABLE `pma__recent`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__relation`
--
ALTER TABLE `pma__relation`
  ADD PRIMARY KEY (`master_db`,`master_table`,`master_field`),
  ADD KEY `foreign_field` (`foreign_db`,`foreign_table`);

--
-- Indexes for table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_savedsearches_username_dbname` (`username`,`db_name`,`search_name`);

--
-- Indexes for table `pma__table_coords`
--
ALTER TABLE `pma__table_coords`
  ADD PRIMARY KEY (`db_name`,`table_name`,`pdf_page_number`);

--
-- Indexes for table `pma__table_info`
--
ALTER TABLE `pma__table_info`
  ADD PRIMARY KEY (`db_name`,`table_name`);

--
-- Indexes for table `pma__table_uiprefs`
--
ALTER TABLE `pma__table_uiprefs`
  ADD PRIMARY KEY (`username`,`db_name`,`table_name`);

--
-- Indexes for table `pma__tracking`
--
ALTER TABLE `pma__tracking`
  ADD PRIMARY KEY (`db_name`,`table_name`,`version`);

--
-- Indexes for table `pma__userconfig`
--
ALTER TABLE `pma__userconfig`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__usergroups`
--
ALTER TABLE `pma__usergroups`
  ADD PRIMARY KEY (`usergroup`,`tab`,`allowed`);

--
-- Indexes for table `pma__users`
--
ALTER TABLE `pma__users`
  ADD PRIMARY KEY (`username`,`usergroup`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__history`
--
ALTER TABLE `pma__history`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  MODIFY `page_nr` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Database: `sayaraty`
--
CREATE DATABASE IF NOT EXISTS `sayaraty` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `sayaraty`;

-- --------------------------------------------------------

--
-- Table structure for table `administrateur`
--

CREATE TABLE `administrateur` (
  `Login_admin` varchar(20) NOT NULL,
  `Nom` varchar(30) DEFAULT NULL,
  `Password` varchar(200) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `Num_Telephone_admin` varchar(15) DEFAULT NULL,
  `Adresse` varchar(100) DEFAULT NULL,
  `Photo_admin` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `administrateur`
--

INSERT INTO `administrateur` (`Login_admin`, `Nom`, `Password`, `Email`, `Num_Telephone_admin`, `Adresse`, `Photo_admin`) VALUES
('Oussama', 'Anou Ousama', '$2y$10$YcsXOFbiFfupfX.nSp39AuDLUX07LBGRzT7eAF06J1NyKkU19zjDS', 'AutoEcol99@gmail.com', '06 24 67 82 90', '30 Bv lkhatabi, Hay Salam, Ouj', '../../IMG/oussama.png');

-- --------------------------------------------------------

--
-- Table structure for table `avis`
--

CREATE TABLE `avis` (
  `id_avis` int(11) NOT NULL,
  `contenu` text DEFAULT NULL,
  `Note` int(11) DEFAULT NULL,
  `Statut` tinyint(1) DEFAULT NULL,
  `id_candidat` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `avis`
--

INSERT INTO `avis` (`id_avis`, `contenu`, `Note`, `Statut`, `id_candidat`) VALUES
(1, 'Au début j\'appréhendais et au final je ne regrette pas du tout de m\'y inscrite. Les cours du code y sont très bien expliqués,les entraînements par thème facilitent l\'apprentissage et ce qui était top c\'était d\'avoir pu commencer la conduite, tout en révisant mon code', 4, 1, 'Mohamed_Erramach'),
(2, '\'Des tarifs attractifs\' Les tarifs attractifs et la flexibilité des auto-écoles en ligne comme Ornikar présentent de nombreux avantages. Notamment pour les 18-25 dont l\'activité s\'accommode parfois mal avec les horaires d\'ouverture d\'une auto-école classique.', 4, 1, 'AdilTl'),
(3, '\'Je recommande à 100% !\' Assurance beaucoup moins élevée en termes de tarifs, communication au top avec Sophie, vraiment je recommande à 100% pour les jeunes conducteurs Très satisfaite de la rapidité et de l\'efficacité', 5, 1, 'Oumniah_El'),
(4, 'hello,world!', 3, 0, 'AdilTl'),
(5, 'C\'est un test  \r\nCordialement', 1, 0, 'AdilTl'),
(6, 'karim mcha \r\nlswi9a \r\nyalaaaah', 1, 0, 'AdilTl'),
(7, 'karim mcha \r\nlswi9a \r\nyalaaaah', 1, 0, 'AdilTl'),
(8, 'karim mcha \r\nlswi9a \r\nyalaaaah', 1, 0, 'AdilTl'),
(9, 'karim mcha \r\nlswi9a \r\nyalaaaah', 1, 0, 'AdilTl'),
(10, 'karim mcha \r\nlswi9a \r\nyalaaaah', 1, 0, 'AdilTl'),
(11, 'karim mcha \r\nlswi9a \r\nyalaaaah', 1, 0, 'AdilTl'),
(12, 'karim mcha \r\nlswi9a \r\nyalaaaah', 1, 0, 'AdilTl'),
(13, 'karim mcha \r\nlswi9a \r\nyalaaaah', 1, 0, 'AdilTl'),
(14, 'karim mcha \r\nlswi9a \r\nyalaaaah', 1, 0, 'AdilTl'),
(15, 'karim mcha \r\nlswi9a \r\nyalaaaah', 1, 0, 'AdilTl'),
(16, 'karim mcha \r\nlswi9a \r\nyalaaaah', 1, 0, 'AdilTl'),
(17, 'karim mcha \r\nlswi9a \r\nyalaaaah', 1, 0, 'AdilTl'),
(18, 'karim mcha \r\nlswi9a \r\nyalaaaah', 1, 0, 'AdilTl'),
(20, 'karim mcha \r\nlswi9a \r\nyalaaaah', 1, 0, 'AdilTl'),
(21, 'karim mcha \r\nlswi9a \r\nyalaaaah', 1, 0, 'AdilTl'),
(22, 'karim mcha \r\nlswi9a \r\nyalaaaah', 1, 0, 'AdilTl'),
(23, 'karim mcha \r\nlswi9a \r\nyalaaaah', 1, 0, 'AdilTl'),
(24, 'karim mcha \r\nlswi9a \r\nyalaaaah', 1, 0, 'AdilTl'),
(25, 'karim mcha \r\nlswi9a \r\nyalaaaah', 1, 0, 'AdilTl'),
(26, 'karim mcha \r\nlswi9a \r\nyalaaaah', 1, 0, 'AdilTl'),
(27, 'Bonjour!', 3, 0, 'am'),
(28, 'Hello world!\r\nHow are you', 4, 0, 'am'),
(29, 'Hello world!\r\nHow are you', 4, 0, 'am'),
(30, 'Hello\r\nbye', 4, 0, 'am'),
(31, 'Bonjour,\r\nJ\'ai qlq chose a dire', 4, 0, 'am'),
(32, 'Bonjour,\r\nJ\'ai qlq chose a dire', 4, 0, 'am'),
(33, 'Bonjour,\r\nJ\'ai qlq chose a dire', 4, 0, 'am'),
(34, 'ceci\r\nn\'est pas un commentaire', 3, 0, 'am'),
(35, 'ceci\r\nn\'est pas un commentaire', 3, 0, 'am'),
(36, 'ceci\r\nn\'est pas un commentaire', 3, 0, 'am'),
(37, 'Bonjour', 4, 0, 'am'),
(38, 'Ceci n\'est pas un commentaire\r\n2 AVRIL\r\n2023', 5, 0, 'am'),
(39, 'Ceci n\'est pas un commentaire\r\n2 AVRIL\r\n2023', 5, 0, 'am'),
(40, 'Ceci n\'est pas un commentaire\r\n2 AVRIL\r\n2023', 5, 0, 'am'),
(41, 'Ceci n\'est pas un commentaire\r\n2 AVRIL\r\n2023', 5, 0, 'am'),
(42, 'aaaa\r\nbbb\r\ncc', 3, 0, 'Purpose'),
(43, 'ASCV', 1, 0, 'AZ'),
(45, 'azerty', 0, 0, 'Mohamed_Erramach'),
(46, 'azerty', 0, 0, 'Mohamed_Erramach'),
(47, 'kamal', 0, 0, 'Mohamed_Erramach'),
(48, 'azerty', 0, 0, 'Amixou'),
(49, 'azerty', 0, 0, 'Amixou'),
(54, 'hello world', 1, 0, 'AdilTl'),
(55, 'hello world', 1, 0, 'AdilTl'),
(56, 'hello world', 1, 0, 'AdilTl'),
(57, 'azer', 1, 0, 'Amixou'),
(58, 'azer', 1, 0, 'Amixou'),
(59, 'azhtzegzrgerz', 1, 0, 'Amixou'),
(60, 'azhtzegzrgerz', 1, 0, 'Amixou'),
(61, 'azhtzegzrgerz', 1, 0, 'Amixou'),
(62, 'azeraqsds', 3, 0, 'Amixou'),
(63, 'comment', 2, 0, 'AdilTl');

-- --------------------------------------------------------

--
-- Table structure for table `candidat`
--

CREATE TABLE `candidat` (
  `Login_candidat` varchar(30) NOT NULL,
  `Password` varchar(200) DEFAULT NULL,
  `Nom` varchar(30) DEFAULT NULL,
  `Email_candidat` varchar(30) DEFAULT NULL,
  `Sexe_candidat` varchar(6) DEFAULT NULL,
  `Num_telephone` varchar(15) DEFAULT NULL,
  `Num_CIN_candidat` varchar(10) DEFAULT NULL,
  `Date_de_naissance` date DEFAULT NULL,
  `Date_d_inscription` date DEFAULT NULL,
  `Prix_payer` double DEFAULT NULL,
  `Nb_heures` int(11) DEFAULT NULL,
  `Statut` tinyint(1) DEFAULT NULL,
  `PHOTO` varchar(100) DEFAULT NULL,
  `Adresse` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `candidat`
--

INSERT INTO `candidat` (`Login_candidat`, `Password`, `Nom`, `Email_candidat`, `Sexe_candidat`, `Num_telephone`, `Num_CIN_candidat`, `Date_de_naissance`, `Date_d_inscription`, `Prix_payer`, `Nb_heures`, `Statut`, `PHOTO`, `Adresse`) VALUES
('AdilTl', '$2y$10$dUWVJwEXLR4KjfhP4ct9iOPPmMLZGCIZM0QHmImrebWcPmiOWgUaO', 'Adil', 'AdilTl_@gmail.com', 'Homme', '+212-678341778', 'S891234', '2002-04-11', '2023-02-10', 3600, 12, 0, '../IMG/Taouil.jpg', 'Hay el qods'),
('am', '$2y$10$5Gjxu6iGkR.jDLD69RnSgeEGhQFeNTpf14Lf9IxIF0T/DUyYuinlW', 'Amin El yousoufi', 'oussanou23@gmail.com', 'Homme', '0603455077', 'AA91211', '2003-04-11', '2023-03-27', 1500, 5, 1, '../IMG/png-clipart-stranger-things-stickers-01-stranger-things-logo-thumbnail.png', 'Hay Elinssane'),
('Amixou', '$2y$10$7mOK8KUSGPiHfaF/fRVSDO8h./qp4SEjxZehGo2HwasGbwZV.4HP2', 'Mohamed', 'oussama.anou21@ump.ac.ma', 'Homme', '0624768295', 'B0124', '2000-12-20', '2023-03-07', 0, 10, 1, '../IMG/Erramach.jpeg', 'AZERRTY'),
('AZ', '$2y$10$AnZInHRVlg87LQdXmvSCL.vD2XGpt73y989lW8FyNow/1zC8jhgDa', 'AAAA', 'WXCV@gmail.com', 'Homme', '0976224455', 'SR5555', '2000-03-04', '2023-04-10', 0, 0, 0, '../IMG/image.png', 'esto, Oujda'),
('Bouik', '$2y$10$TcKcexEvb0JJoW741hat8OmMXTT7YIWXEU4AeVtwDf8z.iMMwyWRm', 'Waim bouie', 'Yassine9@gmail.com', 'Homme', '0677889922', 'P4155', '2000-04-04', '2023-03-25', 0, 0, 0, '../IMG/image.png', 'Hay Alqods, Oujda'),
('ESTO', '$2y$10$RBO9jBW81gC1MtSlFRexCeD9dquwf.KSFCD/LcIEtFOvm6R21h8/C', 'Est Oujda', 'PFE2023@gmail.com', 'Homme', '0723123456', 'OU9213', '2000-12-03', '2023-04-10', 0, 0, 0, '../IMG/image.png', 'EST, UMP, Oujda'),
('Feer', '$2y$10$rWvQW8H.MBBXDpVez2VlyOF27Zvn6IFgUkeUTNq0vsG9en7Yptgpm', 'Oussama', 'LOUIS99@gmail.com', 'Homme', '0708121314', 'S4323', '2000-09-10', '2023-03-20', 0, 0, 0, '../IMG/image.png', ' '),
('ilsCH', '$2y$10$loE/m08Aa3K7EJ5WKSOL/O5RgBkvz74vx8GXV6TD4n2SqLyJC9rI.', 'Ilias', 'iLIAScHair.1@ump.ac.ma', 'Homme', '0624768295', 'A2314', '2000-09-29', '2023-04-01', 0, 0, 0, '../IMG/image.png', 'Bv mohamedi HAY LJAMIAE'),
('logos', '$2y$10$68nNp51hcZC9qsW0aJhwDO2.rn660gsfcEpDNNx9zOwK4BH4paA4m', 'karim', 'oussama.anou21@ump.ac.ma', 'Homme', '0624768295', 'E01241', '2003-09-12', '2023-03-07', 0, 5, 0, '../IMG/image.png', NULL),
('Mohamed_Erramach', '$2y$10$92RLDDfUi84Gpmn2vOqYPeB8b4fUv4DLsInyp4q/rj/C.gry1cCq.', 'Mohamed Erramach', 'MohaErr9@gmail.com', 'Homme', '+212-789125376', 'H91244', '1986-02-15', '2023-02-20', 3000, 4, 1, '../IMG/Erramach.jpeg', 'Yahala bilhabayb, Nador'),
('Os09', '$2y$10$uVfFcg9AfYNPLNFiJFXdbOK0s.IWcxweSYONbOhNO3JLaWjZSbEuK', 'Oussama', 'Oussama99@gmail.com', 'Homme', '0762355900', 'SB8912', '2000-02-12', '2023-04-14', 0, 0, 0, '../IMG/image.png', 'Douar Oulad Ali, Nador'),
('Oumniah_El', '$2y$10$wHt8Zbd30cDjjkzsJsnzp.LTyO/CFuZvny/aV/PKJw51VKDf5VP/W', 'Oumniah Elkaabi', 'OumniaH3l@gmail.com', 'Femme', '+212-679209405', 'F87332', '1992-05-01', '2023-01-31', 2900, 10, 0, '../IMG/Oumniah.jpg', NULL),
('Purpose', '$2y$10$ohsTgASwrStvZLRrRFtw1usEnckqxjsTab5/NoS.TZv8MeOXXno3K', 'Yassine Kadi', 'oussama.anou21@ump.ac.ma', 'Homme', '0624768295', 'A4236', '1988-03-01', '2023-03-29', 0, 0, 1, '../IMG/Facing the Pain_ Let It Be Your Guide.jfif', 'DR Oulad Ali Beni Bou Ifrour');

-- --------------------------------------------------------

--
-- Table structure for table `document`
--

CREATE TABLE `document` (
  `id_document` int(11) NOT NULL,
  `url_document` varchar(200) DEFAULT NULL,
  `nom_document` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `document`
--

INSERT INTO `document` (`id_document`, `url_document`, `nom_document`) VALUES
(1, '../Document/chapitre1.pdf', 'Chapitre1_Panneaux'),
(2, '../Document/chapitre2.pdf', 'Chapitre2_Panonceaux'),
(3, '../Document/chapitre3.pdf', 'Chapitre3_Dangers'),
(4, '../Document/chapitre4.pdf', 'Chapitre4_Interdiction'),
(5, '../Document/chapitre5.pdf', 'Chapitre5_Obligation'),
(6, '../Document/chapitre6.pdf', 'Chapitre6_Indication'),
(7, '../Document/chapitre7.pdf', 'Chapitre7_Direction'),
(8, '../Document/chapitre8.pdf', 'Chapitre8_Localisation'),
(9, '../Document/Questionnaire1-Signalisation.mp4', 'Questionnaire1'),
(10, '../Document/Questionnaire2-Droit de priorité.mp4', 'Questionnaire2'),
(11, '../Document/Questionnaire3-Droit de priorité2.mp4', 'Questionnaire3');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id_message` int(11) NOT NULL,
  `Nom` varchar(30) DEFAULT NULL,
  `Contenu` text DEFAULT NULL,
  `Email` varchar(30) DEFAULT NULL,
  `Objet` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id_message`, `Nom`, `Contenu`, `Email`, `Objet`) VALUES
(2, 'Oussama Anou', 'aaaa', 'oussama.anou21@ump.ac.ma', 'P_contact'),
(3, 'Oussama Anou', 'AAAAAZZ', 'oussama.anou21@ump.ac.ma', 'P_contact'),
(4, 'Oussama Anou', 'Bonjour \r\nJ\'ai un problème \r\nCordialement', 'oussama.anou21@ump.ac.ma', 'Problème de contact'),
(7, 'karim', 'HAM\r\nKKKLAL?\r\nJAKLJNRZZJ', 'karim21@ump.ac.ma', 'Autre problème'),
(9, 'Oussama Anou', 'hello my friend', 'oussama.anou21@ump.ac.ma', 'Autre problème'),
(10, 'after Jour', 'it\'s just a test', 'Hmitoo03@gmail.com', 'Problème de contact'),
(11, 'Oussama', 'HHHHH', 'oussama.anou21@ump.ac.ma', 'Problème de contact'),
(12, 'amin', 'aaa\r\nbbb\r\nccc', 'oussanou23@gmail.com', 'Autre problème'),
(13, 'karim l2ostora', 'AZER\r\nAZERRR', 'karim@hotmail.com', 'Problème de contact'),
(14, 'karim l2ostora', 'ZAZAZ', 'karim@hotmail.com', 'Problème technique'),
(16, 'OUSSAMA', 'azer', 'ouqama@gmail.com', 'Problème technique'),
(17, 'AZER', 'Bonjour\r\n10 avril', 'WXCV@gmail.com', 'Problème de contact'),
(18, 'amin', 'azer\r\nbe', 'aminka40@mail.com', 'Autre problème'),
(19, 'amin', 'aaaaaaaz', 'Oussma@gmail.com', 'Autre problème'),
(20, 'az', 'az', 'PFE2023@gmail.com', 'Problème de contact'),
(21, 'aaaaaaz', 'aze', 'PFE2023@gmail.com', 'Autre problème'),
(22, 'Amin', 'az', 'aminka40@gmail.com', 'Problème technique'),
(23, 'Amin', 'QSDFGHHHH', 'oussama.anou21@ump.ac.ma', 'Autre problème'),
(24, 'Amin', 'QSDWXC', 'oussama.anou21@ump.ac.ma', 'Problème technique'),
(25, 'AQSD', 'VBN', 'oussama.anou21@ump.ac.ma', 'Problème technique'),
(26, 'AQS', 'MLK', 'ouqama@gmail.com', 'Autre problème'),
(27, 'Mohamed Erramach', 'AZERY', 'MohaErr9@gmail.com', 'Autre problème'),
(28, 'Mohammed', 'Amixou says hi!\r\nhmitou says bye!', 'oussama.anou21@ump.ac.ma', 'Autre problème');

-- --------------------------------------------------------

--
-- Table structure for table `moniteur`
--

CREATE TABLE `moniteur` (
  `Login_moniteur` varchar(30) NOT NULL,
  `Password` varchar(200) DEFAULT NULL,
  `Nom` varchar(30) DEFAULT NULL,
  `Email_moniteur` varchar(30) DEFAULT NULL,
  `Sexe_moniteur` varchar(6) DEFAULT NULL,
  `Num_telephone_moniteur` varchar(15) DEFAULT NULL,
  `Num_CIN_moniteur` varchar(10) DEFAULT NULL,
  `num_permis` varchar(20) DEFAULT NULL,
  `Photo_moniteur` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `moniteur`
--

INSERT INTO `moniteur` (`Login_moniteur`, `Password`, `Nom`, `Email_moniteur`, `Sexe_moniteur`, `Num_telephone_moniteur`, `Num_CIN_moniteur`, `num_permis`, `Photo_moniteur`) VALUES
('BrahimBihi', '$2y$10$MFWCx7E/z8BCOjqZzorVSueEF.s4eGvRBxHADuafp/9G.J/wE2lHO', 'Brahim Bass', 'Brahimb_89@gmail.com', 'Homme', '0679121314', 'P7812', 'Ou1298455', '../IMG/bassor.jpg'),
('KarimGH', '$2y$10$E9uIxFhdQHg/snhx3uVFxurVZEv.b341TEpVeNbn6S4t8Zn12GNde', 'Karim elgharbi1', 'Karim_GH@gmail.com', 'Homme', '0678129804', 'H23112', 'P918123', '../IMG/KARIM.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `offre`
--

CREATE TABLE `offre` (
  `ID_OFFRE` int(11) NOT NULL,
  `Titre` varchar(600) DEFAULT NULL,
  `Prix` double DEFAULT NULL,
  `Statut` tinyint(1) DEFAULT NULL,
  `Commentaire` varchar(200) DEFAULT NULL,
  `TYPE` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `offre`
--

INSERT INTO `offre` (`ID_OFFRE`, `Titre`, `Prix`, `Statut`, `Commentaire`, `TYPE`) VALUES
(1, 'Pack Code de la route', 500, 1, 'Pour ceux qui veulent réviser le code de la conduite', 'PermisB'),
(2, 'Pack permis B Plus - Code + 20h de conduite', 2800, 1, 'Le grand classique de ceux qui souhaitent réussir le permis. Le dossier, le controle des yeux et la TVA inclus', 'PermisB'),
(3, 'Pack Permis B Plus - Code + 20h De conduite + Examen de permis', 3400, 1, 'Un offre convenable pour assister trés bien a la conduite. Le dossier, le controle des yeux et la TVA inclus', 'PermisB'),
(4, 'Pack Code de la route', 400, 0, 'Pour ceux qui veulent réviser le code de la conduite pour une moto', 'PermisA'),
(5, 'Pack permis A Standard - Code + 10h de conduite', 2400, 1, 'Le grand classique de ceux qui souhaitent réussir le permis de moto. le dossier, le controle des yeux et la TVA inclus', 'PermisA'),
(6, 'Pack permis A Plus - Code + 20h de conduite', 3000, 1, 'Un offre convenable pour assister trés bien a la conduite. Le dossier, le controle des yeux et la TVA inclus', 'PermisA');

-- --------------------------------------------------------

--
-- Table structure for table `seance`
--

CREATE TABLE `seance` (
  `ID_SEANCE` int(11) NOT NULL,
  `Jour` varchar(10) DEFAULT NULL,
  `Date` varchar(100) NOT NULL,
  `Heure` varchar(20) DEFAULT NULL,
  `Valide` tinyint(1) NOT NULL,
  `id_candidat` varchar(30) DEFAULT NULL,
  `id_moniteur` varchar(30) DEFAULT NULL,
  `id_vehicule` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `seance`
--

INSERT INTO `seance` (`ID_SEANCE`, `Jour`, `Date`, `Heure`, `Valide`, `id_candidat`, `id_moniteur`, `id_vehicule`) VALUES
(2, 'Mardi', '2023-04-19', '10:00-11:00', 1, 'Amixou', 'KarimGH', '89123'),
(3, 'Mardi', '2023-05-17', '11:00-12:00', 0, 'Amixou', 'BrahimBihi', '89123'),
(4, 'Jeudi', '2023-05-24', '9:00-10:00', 0, 'Amixou', 'BrahimBihi', '89123'),
(9, 'Samedi', '2023-05-22', '10:00-11:00', 0, 'Amixou', 'BrahimBihi', '89123'),
(10, 'Lundi', '2023-05-24', '9:00-10:00', 0, 'Amixou', 'KarimGH', 'A44'),
(79, 'Jeudi', '2023-04-13', '11:00-12:00', 0, 'am', NULL, NULL),
(80, 'Vendredi', '2023-04-14', '9:00-10:00', 0, 'am', NULL, NULL),
(100, 'Samedi', '2023-04-15', '10:00-11:00', 1, 'Mohamed_Erramach', NULL, NULL),
(101, 'Mardi', '2023-04-18', '9:00-10:00', 0, 'Mohamed_Erramach', NULL, NULL),
(102, 'Vendredi', '2023-04-21', '11:00-12:00', 0, 'Mohamed_Erramach', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `vehicule`
--

CREATE TABLE `vehicule` (
  `Num_matricule` varchar(20) NOT NULL,
  `Marque` varchar(10) DEFAULT NULL,
  `Modele` varchar(50) DEFAULT NULL,
  `Disponibilite` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vehicule`
--

INSERT INTO `vehicule` (`Num_matricule`, `Marque`, `Modele`, `Disponibilite`) VALUES
('89123', 'Mercedes', 'AMG 2018', 1),
('A44', 'AUDI', 'AUDI Q7 2022', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrateur`
--
ALTER TABLE `administrateur`
  ADD PRIMARY KEY (`Login_admin`);

--
-- Indexes for table `avis`
--
ALTER TABLE `avis`
  ADD PRIMARY KEY (`id_avis`),
  ADD KEY `fk_idcandidat` (`id_candidat`);

--
-- Indexes for table `candidat`
--
ALTER TABLE `candidat`
  ADD PRIMARY KEY (`Login_candidat`);

--
-- Indexes for table `document`
--
ALTER TABLE `document`
  ADD PRIMARY KEY (`id_document`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id_message`);

--
-- Indexes for table `moniteur`
--
ALTER TABLE `moniteur`
  ADD PRIMARY KEY (`Login_moniteur`);

--
-- Indexes for table `offre`
--
ALTER TABLE `offre`
  ADD PRIMARY KEY (`ID_OFFRE`);

--
-- Indexes for table `seance`
--
ALTER TABLE `seance`
  ADD PRIMARY KEY (`ID_SEANCE`),
  ADD KEY `fk_candidat` (`id_candidat`),
  ADD KEY `fk_moniteur` (`id_moniteur`),
  ADD KEY `fk_vehicule` (`id_vehicule`);

--
-- Indexes for table `vehicule`
--
ALTER TABLE `vehicule`
  ADD PRIMARY KEY (`Num_matricule`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `avis`
--
ALTER TABLE `avis`
  MODIFY `id_avis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `document`
--
ALTER TABLE `document`
  MODIFY `id_document` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id_message` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `offre`
--
ALTER TABLE `offre`
  MODIFY `ID_OFFRE` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `seance`
--
ALTER TABLE `seance`
  MODIFY `ID_SEANCE` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `avis`
--
ALTER TABLE `avis`
  ADD CONSTRAINT `fk_idcandidat` FOREIGN KEY (`id_candidat`) REFERENCES `candidat` (`Login_candidat`) ON DELETE CASCADE;

--
-- Constraints for table `seance`
--
ALTER TABLE `seance`
  ADD CONSTRAINT `fk_candidat` FOREIGN KEY (`id_candidat`) REFERENCES `candidat` (`Login_candidat`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_moniteur` FOREIGN KEY (`id_moniteur`) REFERENCES `moniteur` (`Login_moniteur`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_vehicule` FOREIGN KEY (`id_vehicule`) REFERENCES `vehicule` (`Num_matricule`) ON DELETE CASCADE;
--
-- Database: `supermarche`
--
CREATE DATABASE IF NOT EXISTS `supermarche` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `supermarche`;

-- --------------------------------------------------------

--
-- Table structure for table `achats`
--

CREATE TABLE `achats` (
  `ID_achat` int(11) NOT NULL,
  `ID_acheteur` int(11) DEFAULT NULL,
  `ID_produit` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `achats`
--

INSERT INTO `achats` (`ID_achat`, `ID_acheteur`, `ID_produit`) VALUES
(1, 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `acheteurs`
--

CREATE TABLE `acheteurs` (
  `ID_acheteur` int(11) NOT NULL,
  `Nom` varchar(40) NOT NULL,
  `Compte` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `acheteurs`
--

INSERT INTO `acheteurs` (`ID_acheteur`, `Nom`, `Compte`) VALUES
(1, 'Taybi', 9966),
(2, 'Kissi', 6844),
(3, 'Zahir', 5789),
(4, 'Boularcha', 3467),
(5, 'Oussama', 9200),
(6, 'Salah', 3469);

-- --------------------------------------------------------

--
-- Table structure for table `produits`
--

CREATE TABLE `produits` (
  `ID_produit` int(11) NOT NULL,
  `Libelle` varchar(40) NOT NULL,
  `Prix` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `produits`
--

INSERT INTO `produits` (`ID_produit`, `Libelle`, `Prix`) VALUES
(1, 'Souris', 60),
(2, 'Ordi', 7000),
(3, 'Livre', 200);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `achats`
--
ALTER TABLE `achats`
  ADD PRIMARY KEY (`ID_achat`),
  ADD KEY `ID_acheteur` (`ID_acheteur`),
  ADD KEY `ID_produit` (`ID_produit`);

--
-- Indexes for table `acheteurs`
--
ALTER TABLE `acheteurs`
  ADD PRIMARY KEY (`ID_acheteur`);

--
-- Indexes for table `produits`
--
ALTER TABLE `produits`
  ADD PRIMARY KEY (`ID_produit`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `achats`
--
ALTER TABLE `achats`
  MODIFY `ID_achat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `acheteurs`
--
ALTER TABLE `acheteurs`
  MODIFY `ID_acheteur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `produits`
--
ALTER TABLE `produits`
  MODIFY `ID_produit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `achats`
--
ALTER TABLE `achats`
  ADD CONSTRAINT `achats_ibfk_1` FOREIGN KEY (`ID_acheteur`) REFERENCES `acheteurs` (`ID_acheteur`) ON DELETE CASCADE,
  ADD CONSTRAINT `achats_ibfk_2` FOREIGN KEY (`ID_produit`) REFERENCES `produits` (`ID_produit`) ON DELETE CASCADE;
--
-- Database: `test`
--
CREATE DATABASE IF NOT EXISTS `test` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `test`;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
