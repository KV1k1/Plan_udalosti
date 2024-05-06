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
(1, 'Juraj Kováč', 'večera', 'Vďaka vašej skvelej práci bola naša večera veľkým úspechom. Všetko bolo perfektne zorganizované, personál bol úžasný a jedlo vynikajúce. Ďakujeme za skvelý zážitok!', 'img/p6.jpg'),
(2, 'Kristína Nováková', 'svadba', 'Naša svadba bola úplne úžasná vďaka vašej skvelej práci! Všetko bolo dokonale zorganizované, každý detail bol premyslený a atmosféra bola nezabudnuteľná. Ďakujeme vám za vytvorenie nášho najkrajšieho dňa', 'img/p13.jpeg'),
(3, 'Martin Varga', 'narodeniny', 'Vďaka vám bola moja oslava narodenín neuveriteľná! Vaša profesionalita a pozornosť k detailom boli obdivuhodné. Ďakujem vám za krásne zorganizovanú udalosť plnú prekvapení a radosti.', 'img/p8.jpeg'),
(4, 'Veronika Horváthová', 'promo event', 'Vaša promo udalosť bola fantastická! Organizácia bola skvelá a atmosféra nabitá energiou. Bola to skvelá príležitosť spoznať nové produkty a zažiť inovatívne koncepty. Ďakujeme za inšpiratívny večer plný nových myšlienok', 'img/p9.jpeg'),
(5, 'Tomáš Šimko', 'vianočná večera', 'Udalosti bez obáv! Zdroj plný tipov a trikov na skvelé podujatia. Stránka pre dokonalé a bezproblémové plánovanie každej udalosti.', 'img/p10.jpeg'),
(6, 'Jana Dubová', 'narodeniny', 'Vaša práca pri plánovaní mojich narodenín prekročila moje očakávania. Bolo to skvelé, ako ste zohľadnili moje záujmy a dotiahli všetko k dokonalosti. Ďakujem za úžasnú noc plnú radosti a smiechu!', 'img/p11.jpeg'),
(7, 'Peter Michalčík', 'večera', 'Naša večera bola úplne úžasná vďaka vašej skvelej organizácii! Jedlo bolo vynikajúce a celková atmosféra bola veľmi príjemná. Ďakujeme vám za krásny večer plný chutí a zážitkov!', 'img/p4.jpeg'),
(8, 'Lucia Poláková', 'svadba', 'Sme neuveriteľne vďační za vašu obrovskú pomoc pri prípravách na našu svadbu. Vaša profesionalita a starostlivosť o každý aspekt podujatia nám umožnili len si užívať ten špeciálny deň. Bol to sen, vďaka vám!', 'img/p12.jpeg'),
(9, 'Andrej Hruška', 'narodeniny', 'Nemohol som si želať lepšiu oslavu! Organizácia bola úžasná, každý detail bol premyslený a atmosféra bola skvelá. Ďakujem vám za nezabudnuteľný zážitok!', 'img/p7.jpeg');


-- --------------------------------------------------------

--
-- Table structure for table `Services`
--

CREATE TABLE `Services` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `content` text NOT NULL,
  `bgColor` varchar(7) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovak_ci;

--
-- Dumping data for table `Services`
--

INSERT INTO `Services` (`id`, `title`, `description`, `image`, `content`, `bgColor`) VALUES
(1, 'Konferencie a kongresy', 'Konferencie a kongresy nie sú len stretnutiami. Sú to udalosti, ktoré odzrkadľujú vašu víziu a hodnoty. Nechajte na nás všetko, od výberu vhodnej lokality a programu až po drobnosti, ktoré doladia vašu konferenciu či kongres tak, aby sa z biznis stretnutia stal zážitok.', 'img/conf.jpeg', 'Nechajte na nás všetko, od výberu vhodnej lokality a programu až po drobnosti, ktoré doladia vašu konferenciu či kongres tak, aby sa z biznis stretnutia stal zážitok. Dôsledné plánovanie, kreativita a precízna realizácia – to je to, čo vám prinášame. Vložte vaše podujatie do našich rúk a sledujte, ako sa vaše vízie stávajú skutočnosťou.', '#a89897'),
(2, 'Školenia', 'Školenia nemusia byť iba o zdieľaní informácií a hodinách sedenia v tmavých a dusných školiacich miestnostiach. Dá sa to aj inak. Od školení vo virtuálnom prostredí cez aktivity v prírode až po interaktívne hry, upravíme ponuku presne podľa vašich požiadaviek. Zorganizujeme pre vás program, ktorý vám umožní objavovať nové možnosti pri rozvoji vašich zamestnancov.', 'img/schooling.jpeg', 'Od školení vo virtuálnom prostredí cez aktivity v prírode až po interaktívne hry, upravíme ponuku presne podľa vašich požiadaviek. Zorganizujeme pre vás program, ktorý vám umožní objavovať nové možnosti pri rozvoji vašich zamestnancov.', '#f5e3e2'),
(3, 'Promo eventy', 'Radi pre vás zorganizujeme propagačné podujatia, ktoré dokážu reflektovať vaše jedinečné hodnoty a vízie. Prinášame inovatívne koncepty a nápady, ktoré oslovujú vašu cieľovú skupinu. Od interaktívnych prezentácií produktov až po zábavné spoločenské udalosti - naše promo akcie prebúdzajú zvedavosť a prilákajú nových klientov.', 'img/promo.jpeg', 'Radi pre vás zorganizujeme propagačné podujatia, ktoré dokážu reflektovať vaše jedinečné hodnoty a vízie. Prinášame inovatívne koncepty a nápady, ktoré oslovujú vašu cieľovú skupinu. Od interaktívnych prezentácií produktov až po zábavné spoločenské udalosti - naše promo akcie prebúdzajú zvedavosť a prilákajú nových klientov.', '#a89897'),
(4, 'Online eventy', 'Ak potrebujete zaujať online publikum, sme tu pre vás! Sme pripravení zorganizovať digitálny event, ktorý vás spojí so svetom, bez ohľadu na vzdialenosť. Nech plánujete virtuálnu konferenciu, interaktívny seminár alebo virtuálny teambuilding, my vám radi pomôžeme!', 'img/online.jpeg', 'Ak potrebujete zaujať online publikum, sme tu pre vás! Sme pripravení zorganizovať digitálny event, ktorý vás spojí so svetom, bez ohľadu na vzdialenosť. Nech plánujete virtuálnu konferenciu, interaktívny seminár alebo virtuálny teambuilding, my vám radi pomôžeme!', '#f5e3e2'),
(5, 'Vianočné večierky', 'Naše vianočné večierky vám prinášajú teplo a radostné okamihy. S precíznym plánovaním, úchvatnou atmosférou a jedinečnými dekoráciami vytvoríme pre vás a vašich hostí nezabudnuteľný zážitok. Nechajte stres z organizácie na nás a užívajte si tento vianočný čas v plnej nádhere.', 'img/xmas.jpeg', 'Naše vianočné večierky vám prinášajú teplo a radostné okamihy. S precíznym plánovaním, úchvatnou atmosférou a jedinečnými dekoráciami vytvoríme pre vás a vašich hostí nezabudnuteľný zážitok. Nechajte stres z organizácie na nás a užívajte si tento vianočný čas v plnej nádhere.', '#a89897'),
(6, 'Svadby', 'Plánovanie svadby je našou vášňou. S precíznym detailom a jedinečnými konceptmi vytvárame nezabudnuteľné svadobné dni, odohrávajúce sa v duchu vašej lásky. Od výberu miesta až po dekorácie, každý detail je starostlivo zorganizovaný, aby bol váš deň dokonalý. Nechajte nás starať sa o všetko a užívajte si túto špeciálnu chvíľu naplno.', 'img/wed.jpeg', 'Plánovanie svadby je našou vášňou. S precíznym detailom a jedinečnými konceptmi vytvárame nezabudnuteľné svadobné dni, odohrávajúce sa v duchu vašej lásky. Od výberu miesta až po dekorácie, každý detail je starostlivo zorganizovaný, aby bol váš deň dokonalý. Nechajte nás starať sa o všetko a užívajte si túto špeciálnu chvíľu naplno.', '#f5e3e2');

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
-- Indexes for table `Services`
--
ALTER TABLE `Services`
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
-- AUTO_INCREMENT for table `Services`
--
ALTER TABLE `Services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `User`
--
ALTER TABLE `User`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;