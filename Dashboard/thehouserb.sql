-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2024 at 12:20 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `thehouserb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `numadmin` int(11) NOT NULL,
  `login` varchar(20) NOT NULL,
  `keypass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`numadmin`, `login`, `keypass`) VALUES
(1, 'RB_Julien', 'N3wStr0ngP@ssw0rd!'),
(2, 'RB_Sophie', 'S3cur3P@ssw0rd2!'),
(3, 'RB_Marie', 'Adm!nP@ssw0rd3#'),
(4, 'RB_Philippe', 'P@ssw0rd4S3cur3!'),
(5, 'RB_Emilie', 'T0ughP@ssw0rd5!'),
(6, 'RB_Thomas', 'Unbr3ak@ble6!'),
(7, 'RB_Lucie', 'Sup3rS3cur37!'),
(8, 'RB_Henri', 'Imp3netr@ble8!'),
(9, 'pexa', 'pexa');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `numclt` int(11) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `tlf` int(11) NOT NULL,
  `password` varchar(20) NOT NULL,
  `age` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`numclt`, `nom`, `prenom`, `email`, `tlf`, `password`, `age`) VALUES
(1, 'Dupont', 'Jean', 'jean.dupont@gmail.com', 2147483647, 'p@ssw0rd123', 25),
(2, 'Martin', 'Sophie', 'sophie.martin@outlook.fr', 2147483647, 'S0ph!3Mart!n', 30),
(3, 'Bernard', 'Marie', 'marie.bernard@protonmail.com', 2147483647, 'M@rieB3rnard', 28),
(4, 'Robert', 'Philippe', 'philippe.robert@yahoo.com', 2147483647, 'Phil!ppeR0b', 35),
(5, 'Richard', 'Emilie', 'emilie.richard@live.com', 2147483647, '3m!lieR1ch', 22),
(6, 'Petit', 'Julien', 'julien.petit@gmail.com', 2147483647, 'Juli3nP3tit', 40),
(7, 'Durand', 'Laura', 'laura.durand@outlook.com', 2147483647, 'L@ur@Durand', 32),
(8, 'Leroy', 'Thomas', 'thomas.leroy@protonmail.com', 2147483647, 'Th0masLeroy', 27),
(9, 'Moreau', 'Julie', 'julie.moreau@yahoo.com', 2147483647, 'Jul!eM0reau', 29),
(10, 'Simon', 'Antoine', 'antoine.simon@live.com', 2147483647, 'AntoineS1m0n', 45),
(11, 'Laurent', 'Claire', 'claire.laurent@gmail.com', 2147483647, 'Cl@ireL4urent', 33),
(12, 'Lefevre', 'Louis', 'louis.lefevre@outloot.fr', 2147483647, 'LouisL3f3vre', 37),
(13, 'Michel', 'Lucie', 'lucie.michel@protonmail.com', 2147483647, 'Luc!eM1chel', 23),
(14, 'Garcia', 'Henri', 'henri.garcia@yahoo.fr', 2147483647, 'Henr!G4rcia', 26),
(15, 'David', 'Manon', 'manon.david@live.com', 2147483647, 'Man0nDav!d', 48),
(19, 'pexa', 'pexaui', 'pexabouter3a@gmail.com', 33333333, 'PexaPexa', 22);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `nummessage` int(11) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`nummessage`, `nom`, `email`, `message`) VALUES
(1, 'Jean', 'jean.dupont@gmail.com', 'Bonjour, je voudrais avoir plus d\'informations sur vos produits. Pouvez-vous me fournir un catalogue'),
(2, 'Sophie', 'sophie.martin@outlook.com', 'Bonjour, je suis intéressée par vos services. Pouvez-vous me donner plus de détails sur les options '),
(3, 'Marie', 'marie.bernard@protonmail.com', 'Bonjour, je rencontre un problème avec ma commande. Pouvez-vous m\'aider à résoudre cet incident rapi'),
(4, 'Philippe', 'philippe.robert@yahoo.com', 'Bonjour, j\'aimerais réserver une robe pour un événement. Est-ce possible de connaître les disponibil'),
(5, 'Emilie', 'emilie.richard@live.com', 'Bonjour, j\'ai une question concernant les tailles disponibles. Pouvez-vous m\'informer sur les dimens'),
(6, 'Julien', 'julien.petit@gmail.com', 'Bonjour, je suis très satisfait de ma dernière commande. Merci beaucoup pour votre excellent service'),
(7, 'Laura', 'laura.durand@outlook.com', 'Bonjour, j\'ai reçu mon colis aujourd\'hui mais il manque un article. Pouvez-vous m\'aider à obtenir l\''),
(8, 'Thomas', 'thomas.leroy@yahoo.com', 'Bonjour, je voulais juste vous dire que votre service client est excellent. Merci pour votre aide et');

-- --------------------------------------------------------

--
-- Table structure for table `rendezvous`
--

CREATE TABLE `rendezvous` (
  `numrdv` int(11) NOT NULL,
  `numrobe` int(11) NOT NULL,
  `nomclient` varchar(40) NOT NULL,
  `daterdv` date NOT NULL,
  `telephone` int(8) NOT NULL,
  `taille` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rendezvous`
--

INSERT INTO `rendezvous` (`numrdv`, `numrobe`, `nomclient`, `daterdv`, `telephone`, `taille`) VALUES
(1, 1, 'Jean Dupont', '2024-06-01', 12345678, 36),
(2, 2, 'Sophie Martin', '2024-06-02', 23456789, 38),
(3, 3, 'Marie Bernard', '2024-06-03', 34567890, 34),
(4, 4, 'Philippe Robert', '2024-06-04', 45678901, 40),
(5, 5, 'Emilie Richard', '2024-06-05', 56789012, 42),
(6, 6, 'Julien Petit', '2024-06-06', 67890123, 38),
(7, 7, 'Laura Durand', '2024-06-07', 78901234, 36),
(8, 8, 'Thomas Leroy', '2024-06-08', 89012345, 40),
(9, 9, 'Julie Moreau', '2024-06-09', 90123456, 38),
(10, 1, 'Antoine Simon', '2024-06-10', 12345678, 42);

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `numclt` int(11) NOT NULL,
  `numrobe` int(11) NOT NULL,
  `datedeb` date NOT NULL,
  `datefin` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`numclt`, `numrobe`, `datedeb`, `datefin`) VALUES
(4, 6, '2024-06-01', '2024-06-05'),
(6, 3, '2024-06-02', '2024-06-06'),
(2, 3, '2024-06-03', '2024-06-07'),
(14, 6, '2024-06-04', '2024-06-08'),
(5, 3, '2024-06-05', '2024-06-09'),
(2, 6, '2024-06-06', '2024-06-10'),
(9, 8, '2024-06-07', '2024-06-11'),
(3, 3, '2024-06-08', '2024-06-12'),
(3, 2, '2024-05-09', '2024-05-31'),
(2, 5, '2024-05-01', '2024-05-24');

-- --------------------------------------------------------

--
-- Table structure for table `robe`
--

CREATE TABLE `robe` (
  `numrobe` int(11) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `couleur` varchar(20) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `robe`
--

INSERT INTO `robe` (`numrobe`, `nom`, `couleur`, `status`) VALUES
(1, 'SORIANA', 'Blanc', 1),
(2, 'ALMAS', 'Ivoire', 1),
(3, 'SERI', 'Champagne', 1),
(4, 'NUBIA', 'Crème', 1),
(5, 'EWA', 'Perle', 1),
(6, 'JOANE', 'Rose pâle', 0),
(7, 'NAVIKA', 'Argent', 0),
(8, 'LEYLE', 'Or pâle', 1),
(9, 'HAYAH', 'Bleu ciel', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`numadmin`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`numclt`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`nummessage`);

--
-- Indexes for table `rendezvous`
--
ALTER TABLE `rendezvous`
  ADD PRIMARY KEY (`numrdv`),
  ADD KEY `numrobe` (`numrobe`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD KEY `numclt` (`numclt`,`numrobe`),
  ADD KEY `numrobe` (`numrobe`);

--
-- Indexes for table `robe`
--
ALTER TABLE `robe`
  ADD PRIMARY KEY (`numrobe`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `numadmin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `numclt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `nummessage` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `rendezvous`
--
ALTER TABLE `rendezvous`
  MODIFY `numrdv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `robe`
--
ALTER TABLE `robe`
  MODIFY `numrobe` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `rendezvous`
--
ALTER TABLE `rendezvous`
  ADD CONSTRAINT `rendezvous_ibfk_1` FOREIGN KEY (`numrobe`) REFERENCES `robe` (`numrobe`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `reservation_ibfk_1` FOREIGN KEY (`numclt`) REFERENCES `client` (`numclt`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reservation_ibfk_2` FOREIGN KEY (`numrobe`) REFERENCES `robe` (`numrobe`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
