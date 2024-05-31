-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 04, 2024 at 01:00 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `events`
--

-- --------------------------------------------------------

--
-- Table structure for table `Contact`
--

CREATE TABLE `Contact` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(120) NOT NULL,
  `message` text NOT NULL,
  `acceptance` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovak_ci;

--
-- Dumping data for table `Contact`
--

INSERT INTO `Contact` (`id`, `name`, `email`, `message`, `acceptance`) VALUES
(1, 'Test', 'test@test.sk', 'Toto je testovacia správa', 1),
(2, 'Test 2', 'test2@test.sk', 'Toto je druhá testovacia správa', 1);

-- --------------------------------------------------------

--
-- Table structure for table `Reviews`
--
CREATE TABLE `Reviews` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `event` varchar(255) NOT NULL,
  `review` text NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovak_ci;

--
-- Dumping data for table `Reviews`
--

INSERT INTO `Reviews` (`id`, `name`, `event`, `review`, `image`) VALUES
(1, 'Juraj Kováč', 'večera', 'Vďaka vašej skvelej práci bola naša večera veľkým úspechom. Všetko bolo perfektne zorganizované, personál bol úžasný a jedlo vynikajúce. Ďakujeme za skvelý zážitok!', '../img/p6.jpg'),
(2, 'Kristína Nováková', 'svadba', 'Naša svadba bola úplne úžasná vďaka vašej skvelej práci! Všetko bolo dokonale zorganizované, každý detail bol premyslený a atmosféra bola nezabudnuteľná. Ďakujeme vám za vytvorenie nášho najkrajšieho dňa', '../img/p13.jpeg'),
(3, 'Martin Varga', 'narodeniny', 'Vďaka vám bola moja oslava narodenín neuveriteľná! Vaša profesionalita a pozornosť k detailom boli obdivuhodné. Ďakujem vám za krásne zorganizovanú udalosť plnú prekvapení a radosti.', '../img/p8.jpeg'),
(4, 'Veronika Horváthová', 'promo event', 'Vaša promo udalosť bola fantastická! Organizácia bola skvelá a atmosféra nabitá energiou. Bola to skvelá príležitosť spoznať nové produkty a zažiť inovatívne koncepty. Ďakujeme za inšpiratívny večer plný nových myšlienok', '../img/p9.jpeg'),
(5, 'Tomáš Šimko', 'vianočná večera', 'Udalosti bez obáv! Zdroj plný tipov a trikov na skvelé podujatia. Stránka pre dokonalé a bezproblémové plánovanie každej udalosti.', '../img/p10.jpeg'),
(6, 'Jana Dubová', 'narodeniny', 'Vaša práca pri plánovaní mojich narodenín prekročila moje očakávania. Bolo to skvelé, ako ste zohľadnili moje záujmy a dotiahli všetko k dokonalosti. Ďakujem za úžasnú noc plnú radosti a smiechu!', '../img/p11.jpeg'),
(7, 'Peter Michalčík', 'večera', 'Naša večera bola úplne úžasná vďaka vašej skvelej organizácii! Jedlo bolo vynikajúce a celková atmosféra bola veľmi príjemná. Ďakujeme vám za krásny večer plný chutí a zážitkov!', '../img/p4.jpeg'),
(8, 'Lucia Poláková', 'svadba', 'Sme neuveriteľne vďační za vašu obrovskú pomoc pri prípravách na našu svadbu. Vaša profesionalita a starostlivosť o každý aspekt podujatia nám umožnili len si užívať ten špeciálny deň. Bol to sen, vďaka vám!', '../img/p12.jpeg'),
(9, 'Andrej Hruška', 'narodeniny', 'Nemohol som si želať lepšiu oslavu! Organizácia bola úžasná, každý detail bol premyslený a atmosféra bola skvelá. Ďakujem vám za nezabudnuteľný zážitok!', '../img/p7.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `event_type`
--

CREATE TABLE `event_type` (
  `id` int(11) NOT NULL,
  `event_type` varchar(255) NOT NULL,
  `participants_min` int(11) NOT NULL,
  `participants_max` int(11) NOT NULL,
  `duration` varchar(255) NOT NULL,
  `price_min` int(11) NOT NULL,
  `price_max` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovak_ci;

--
-- Dumping data for table `event_type`
--

INSERT INTO `event_type` (`id`, `event_type`, `participants_min`, `participants_max`, `duration`, `price_min`, `price_max`) VALUES
(1, 'Svadba', 50, 100, '6 hodín', 500, 800),
(2, 'Svadba', 100, 200, '6 hodín', 650, 1250),
(3, 'Svadba', 200, 999, '6 hodín', 850, 3000),
(4, 'Vianočná večera', 10, 20, '3 hodiny', 50, 150),
(5, 'Vianočná večera', 20, 50, '3 hodiny', 85, 200),
(6, 'Online udalosti', 50, 100, 'Za reláciu', 10, 30),
(7, 'Online udalosti', 100, 300, 'Za reláciu', 8, 20),
(8, 'Konferencie', 100, 200, 'Za deň', 150, 450),
(9, 'Konferencie', 200, 500, 'Za deň', 250, 800),
(10, 'Školenia', 10, 20, 'Za triedu', 20, 30),
(11, 'Školenia', 20, 50, 'Za triedu', 30, 50);

-- --------------------------------------------------------

--
-- Table structure for table `User`
--

CREATE TABLE `User` (
  `id` int(11) NOT NULL,
  `email` varchar(120) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_slovak_ci;

--
-- Dumping data for table `User`
--

INSERT INTO `User` (`id`, `email`, `password`, `role`) VALUES
(1, 'admin@admin.sk', 'admin', 1),
(2, 'user@user.sk', 'user', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Contact`
--
ALTER TABLE `Contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Reviews`
--
ALTER TABLE `Reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event_type`
--
ALTER TABLE `event_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `User`
--
ALTER TABLE `User`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Contact`
--
ALTER TABLE `Contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `Reviews`
--
ALTER TABLE `Reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `event_type`
--
ALTER TABLE `event_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `User`
--
ALTER TABLE `User`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

-- --------------------------------------------------------


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;