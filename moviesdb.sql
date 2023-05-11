-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2023 at 01:57 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `moviesdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `Id` int(255) NOT NULL,
  `userName` varchar(300) NOT NULL,
  `userEmail` varchar(300) NOT NULL,
  `userphone` varchar(20) NOT NULL,
  `Enquiry` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`Id`, `userName`, `userEmail`, `userphone`, `Enquiry`) VALUES
(1, 'Sahil KArnekar', 'sahilkarnekar1@gmail.com', '7875632522', 'we want to work with you'),
(3, 'hgfdjbg', 'dfgdfmhndgvbj', '635455', 'dfgvdnfbmfv'),
(9, 'sfsdfs', 'sdfsdf', 'fsdfsdf', 'sdfsdfsdf'),
(10, 'dfsdfsdf', 'sdfsdfsdf', 'dfsdfsdf', 'sdfsdfsdf'),
(11, 'dfsdfsdf', 'sdfsdfsd', 'sdfsdfs', 'sdfsdfs'),
(12, 'fsdfsdf', 'sdfasdfasd', 'dasdafds', 'fsdfsdf'),
(15, 'yuttyut', 'tyutyut', 'yutuyty', 'tyutyut'),
(16, 'tyuty', 'tyutyut', 'yutyut', 'tyutyut'),
(17, 'tyutyut', 'tyutyu', 'tutyut', 'tyutyut'),
(18, 'tyutyu', 'tyutyu', 'tuytyu', 'tyutyut'),
(20, 'yytyuty', 'tyutyut', 'ytuty', 'tyutyu'),
(21, 'yuttyut', 'tyutyut', 'yutuyty', 'tyutyut'),
(22, 'tyuty', 'tyutyut', 'yutyut', 'tyutyut'),
(23, 'tyutyut', 'tyutyu', 'tutyut', 'tyutyut'),
(24, 'tyutyu', 'tyutyu', 'tuytyu', 'tyutyut'),
(25, 'utyutyu', 'yutyut', 'tyutyu', 'yutyut'),
(26, 'yytyuty', 'tyutyut', 'ytuty', 'tyutyu'),
(27, 'yuttyut', 'tyutyut', 'yutuyty', 'tyutyut'),
(28, 'tyuty', 'tyutyut', 'yutyut', 'tyutyut'),
(29, 'tyutyut', 'tyutyu', 'tutyut', 'tyutyut'),
(30, 'tyutyu', 'tyutyu', 'tuytyu', 'tyutyut'),
(31, 'utyutyu', 'yutyut', 'tyutyu', 'yutyut'),
(32, 'yytyuty', 'tyutyut', 'ytuty', 'tyutyu'),
(33, 'yuttyut', 'tyutyut', 'yutuyty', 'tyutyut'),
(34, 'tyuty', 'tyutyut', 'yutyut', 'tyutyut'),
(35, 'tyutyut', 'tyutyu', 'tutyut', 'tyutyut'),
(37, 'utyutyu', 'yutyut', 'tyutyu', 'yutyut'),
(38, 'yytyuty', 'tyutyut', 'ytuty', 'tyutyu'),
(39, 'yuttyut', 'tyutyut', 'yutuyty', 'tyutyut'),
(40, 'tyuty', 'tyutyut', 'yutyut', 'tyutyut'),
(41, 'tyutyut', 'tyutyu', 'tutyut', 'tyutyut'),
(42, 'tyutyu', 'tyutyu', 'tuytyu', 'tyutyut'),
(43, 'utyutyu', 'yutyut', 'tyutyu', 'yutyut'),
(44, 'yytyuty', 'tyutyut', 'ytuty', 'tyutyu'),
(45, 'yuttyut', 'tyutyut', 'yutuyty', 'tyutyut'),
(46, 'tyuty', 'tyutyut', 'yutyut', 'tyutyut'),
(47, 'tyutyut', 'tyutyu', 'tutyut', 'tyutyut'),
(48, 'tyutyu', 'tyutyu', 'tuytyu', 'tyutyut'),
(49, 'utyutyu', 'yutyut', 'tyutyu', 'yutyut'),
(50, 'yytyuty', 'tyutyut', 'ytuty', 'tyutyu'),
(51, 'yuttyut', 'tyutyut', 'yutuyty', 'tyutyut'),
(52, 'tyuty', 'tyutyut', 'yutyut', 'tyutyut'),
(53, 'tyutyut', 'tyutyu', 'tutyut', 'tyutyut'),
(54, 'tyutyu', 'tyutyu', 'tuytyu', 'tyutyut'),
(55, 'utyutyu', 'yutyut', 'tyutyu', 'yutyut'),
(56, 'yytyuty', 'tyutyut', 'ytuty', 'tyutyu'),
(57, 'yuttyut', 'tyutyut', 'yutuyty', 'tyutyut'),
(58, 'tyuty', 'tyutyut', 'yutyut', 'tyutyut'),
(59, 'tyutyut', 'tyutyu', 'tutyut', 'tyutyut'),
(60, 'tyutyu', 'tyutyu', 'tuytyu', 'tyutyut'),
(61, 'utyutyu', 'yutyut', 'tyutyu', 'yutyut'),
(62, 'yytyuty', 'tyutyut', 'ytuty', 'tyutyu'),
(63, 'yuttyut', 'tyutyut', 'yutuyty', 'tyutyut'),
(64, 'tyuty', 'tyutyut', 'yutyut', 'tyutyut'),
(65, 'tyutyut', 'tyutyu', 'tutyut', 'tyutyut'),
(66, 'tyutyu', 'tyutyu', 'tuytyu', 'tyutyut'),
(67, 'utyutyu', 'yutyut', 'tyutyu', 'yutyut'),
(68, 'yytyuty', 'tyutyut', 'ytuty', 'tyutyu'),
(69, 'yuttyut', 'tyutyut', 'yutuyty', 'tyutyut'),
(70, 'tyuty', 'tyutyut', 'yutyut', 'tyutyut'),
(71, 'tyutyut', 'tyutyu', 'tutyut', 'tyutyut'),
(72, 'tyutyu', 'tyutyu', 'tuytyu', 'tyutyut'),
(73, 'utyutyu', 'yutyut', 'tyutyu', 'yutyut'),
(74, 'yytyuty', 'tyutyut', 'ytuty', 'tyutyu'),
(75, 'yuttyut', 'tyutyut', 'yutuyty', 'tyutyut'),
(78, 'tyutyu', 'tyutyu', 'tuytyu', 'tyutyut'),
(79, 'utyutyu', 'yutyut', 'tyutyu', 'yutyut'),
(80, 'fgfg', 'fgbfgb', 'gbfgbf', 'fgbfg'),
(81, 'gfgvdf', 'fgvdfgvdfd', 'fgdfdfd', 'fvdfvd'),
(82, 'gfgvdf', 'fgvdfgvdfd', 'fgdfdfd', 'fvdfvd'),
(83, 'gfgvdf', 'fgvdfgvdfd', 'fgdfdfd', 'fvdfvd'),
(84, 'gfgvdf', 'fgvdfgvdfd', 'fgdfdfd', 'fvdfvd'),
(85, 'gfgvdf', 'fgvdfgvdfd', 'fgdfdfd', 'fvdfvd'),
(86, 'gfgvdf', 'fgvdfgvdfd', 'fgdfdfd', 'fvdfvd'),
(87, 'sdsdfs', 'dfcsdsd', 'dsdfcsd', 'dfsdfsd'),
(88, 'sdsdfsbfgbf', 'dfcsdsdbfgbf', 'dsdfcsdgbfgbf', 'dfsdfsdgbfgb'),
(89, 'vdvf', 'vdfvd', 'vdsfvd', 'fvcdsfv'),
(90, 'gfhfghfghfgh', 'ghfghfgh', 'fghfghfgh', 'ghfghfgh'),
(91, 'sahil', 'dfdfg', 'fdgdfg', 'fdgdfgd'),
(92, 'dasdasd', 'sadasdadfghfhg@gmail.com', 'sdasdasdad', 'dasdasdasd');

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `Id` int(255) NOT NULL,
  `Name` mediumtext NOT NULL,
  `Description` longtext NOT NULL,
  `Link480` longtext NOT NULL,
  `Link720` longtext NOT NULL,
  `Link1080` longtext NOT NULL,
  `Bannerimage` longtext NOT NULL,
  `Screenshot1` longtext NOT NULL,
  `Screenshot2` longtext NOT NULL,
  `Screenshot3` longtext NOT NULL,
  `Categories` varchar(255) NOT NULL,
  `Popular` varchar(255) NOT NULL,
  `WebEp` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`Id`, `Name`, `Description`, `Link480`, `Link720`, `Link1080`, `Bannerimage`, `Screenshot1`, `Screenshot2`, `Screenshot3`, `Categories`, `Popular`, `WebEp`) VALUES
(8, 'asas', 'sxdasas', 'xasxas', 'xasasx', '', 'uploadImage/IMG-20230205-WA0011.jpg', 'screenshots/', 'screenshots/', 'screenshots/', '', '', ''),
(9, 'sxasxa', 'sdxasxas', 'xa', '', 'RTYRTYehgrygefgdsfgdse', 'uploadImage/IMG-20230205-WA0015.jpg', 'screenshots/', 'screenshots/', 'screenshots/', '', '', ''),
(10, 'xasxa', 'sxcas', 'asxasx', '', '', 'uploadImage/india.jpg', 'screenshots/', 'screenshots/', 'screenshots/', '', '', ''),
(11, 'dfgdfg', 'cvb cvb', 'fgdfg', '', '', 'uploadImage/', 'screenshots/', 'screenshots/', 'screenshots/', '', '', ''),
(12, 'dfgdfg', 'dfgvdf', 'dfgdfg', 'dfgdf', '', 'uploadImage/', 'screenshots/', 'screenshots/', 'screenshots/', '', '', ''),
(13, 'gdfgd', 'fdgdf', '', '', '', 'uploadImage/', 'screenshots/', 'screenshots/', 'screenshots/', '', '', ''),
(14, 'sahil karnekar', '', '', '', '', 'uploadImage/', 'screenshots/', 'screenshots/', 'screenshots/', '', '', ''),
(15, 'shadow', 'dfgdfgdfgd dfgdfgdfgd dfgdsfgd fedgdsfgdfgsdfgsdfgsdgsd sdfgsdfgsdfgsdfgsdfgsdfgd dfgsdfgsdfgsdfgsdfgsdfgsdfgsdfgsdgsdgfsdfgsdgsdfgsdg sdfgsdfg sdfgsdfg sdfgsdfg dfgdfgdfgd dfgdsfgd fedgdsfgdfgsdfgsdfgsdgsd sdfgsdfgsdfgsdfgsdfgsdfgd dfgsdfgsdfgsdfgsdfgsdfgsdfgsdfgsdgsdgfsdfgsdgsdfgsdg sdfgsdfg sdfgsdfg sdfgsdfg dfgdfgdfgd dfgdsfgd fedgdsfgdfgsdfgsdfgsdgsd sdfgsdfgsdfgsdfgsdfgsdfgd dfgsdfgsdfgsdfgsdfgsdfgsdfgsdfgsdgsdgfsdfgsdgsdfgsdg sdfgsdfg sdfgsdfg sdfgsdfg dfgdfgdfgd dfgdsfgd fedgdsfgdfgsdfgsdfgsdgsd sdfgsdfgsdfgsdfgsdfgsdfgd dfgsdfgsdfgsdfgsdfgsdfgsdfgsdfgsdgsdgfsdfgsdgsdfgsdg sdfgsdfg sdfgsdfg sdfgsdfg dfgdfgdfgd dfgdsfgd fedgdsfgdfgsdfgsdfgsdgsd sdfgsdfgsdfgsdfgsdfgsdfgd dfgsdfgsdfgsdfgsdfgsdfgsdfgsdfgsdgsdgfsdfgsdgsdfgsdg sdfgsdfg sdfgsdfg sdfgsdfg dfgdfgdfgd dfgdsfgd fedgdsfgdfgsdfgsdfgsdgsd sdfgsdfgsdfgsdfgsdfgsdfgd dfgsdfgsdfgsdfgsdfgsdfgsdfgsdfgsdgsdgfsdfgsdgsdfgsdg sdfgsdfg sdfgsdfg sdfgsdfg dfgdfgdfgd dfgdsfgd fedgdsfgdfgsdfgsdfgsdgsd sdfgsdfgsdfgsdfgsdfgsdfgd dfgsdfgsdfgsdfgsdfgsdfgsdfgsdfgsdgsdgfsdfgsdgsdfgsdg sdfgsdfg sdfgsdfg sdfgsdfg dfgdfgdfgd dfgdsfgd fedgdsfgdfgsdfgsdfgsdgsd sdfgsdfgsdfgsdfgsdfgsdfgd dfgsdfgsdfgsdfgsdfgsdfgsdfgsdfgsdgsdgfsdfgsdgsdfgsdg sdfgsdfg sdfgsdfg sdfgsdfg dfgdfgdfgd dfgdsfgd fedgdsfgdfgsdfgsdfgsdgsd sdfgsdfgsdfgsdfgsdfgsdfgd dfgsdfgsdfgsdfgsdfgsdfgsdfgsdfgsdgsdgfsdfgsdgsdfgsdg sdfgsdfg sdfgsdfg sdfgsdfg dfgdsfgd fedgdsfgdfgsdfgsdfgsdgsd sdfgsdfgsdfgsdfgsdfgsdfgd dfgsdfgsdfgsdfgsdfgsdfgsdfgsdfgsdgsdgfsdfgsdgsdfgsdg sdfgsdfg sdfgsdfg sdfgsdfg', 'dfgdfgdfgd dfgdsfgd fedgdsfgdfgsdfgsdfgsdgsd sdfgsdfgsdfgsdfgsdfgsdfgd dfgsdfgsdfgsdfgsdfgsdfgsdfgsdfgsdgsdgfsdfgsdgsdfgsdg sdfgsdfg sdfgsdfg sdfgsdfg', 'dfgdfgdfgd dfgdsfgd fedgdsfgdfgsdfgsdfgsdgsd sdfgsdfgsdfgsdfgsdfgsdfgd dfgsdfgsdfgsdfgsdfgsdfgsdfgsdfgsdgsdgfsdfgsdgsdfgsdg sdfgsdfg sdfgsdfg sdfgsdfg', 'dfgdfgdfgd dfgdsfgd fedgdsfgdfgsdfgsdfgsdgsd sdfgsdfgsdfgsdfgsdfgsdfgd dfgsdfgsdfgsdfgsdfgsdfgsdfgsdfgsdgsdgfsdfgsdgsdfgsdg sdfgsdfg sdfgsdfg sdfgsdfg', 'uploadImage/shadow.jpg', 'screenshots/bg.jpg', 'screenshots/ben10.png', 'screenshots/india.jpg', '', '', ''),
(16, 'kjhh', '', '', 'jkhg', '', 'uploadImage/india.jpg', 'screenshots/', 'screenshots/', 'screenshots/', '', '', ''),
(17, 'oiuyoiu', '', '', '', '', 'uploadImage/ben10.png', 'screenshots/', 'screenshots/', 'screenshots/', '', '', ''),
(18, 'yhtjtyhj', '', '', '', '', 'uploadImage/bg.jpg', 'screenshots/', 'screenshots/', 'screenshots/', '', '', ''),
(19, 'ghfdhgx', '', '', '', '', 'uploadImage/', 'screenshots/', 'screenshots/', 'screenshots/', '', '', ''),
(20, 'fghbfdgh', '', '', '', '', 'uploadImage/IMG-20230203-WA0007.jpg', 'screenshots/', 'screenshots/', 'screenshots/', '', '', ''),
(21, 'jhgjhg', '', '', '', '', 'uploadImage/IMG-20230205-WA0003.jpg', 'screenshots/', 'screenshots/', 'screenshots/', '', '', ''),
(22, 'jkhgh', '', '', '', '', 'uploadImage/IMG-20230205-WA0011.jpg', 'screenshots/', 'screenshots/', 'screenshots/', '', '', ''),
(23, 'jhvhv', '', '', '', '', 'uploadImage/IMG-20230205-WA0012.jpg', 'screenshots/', 'screenshots/', 'screenshots/', '', '', ''),
(24, 'kjhbkjb', '', '', '', '', 'uploadImage/IMG-20230205-WA0014.jpg', 'screenshots/', 'screenshots/', 'screenshots/', '', '', ''),
(25, 'FHRFGHRRTRT', '', '', '', '', 'uploadImage/IMG-20230205-WA0014.jpg', 'screenshots/', 'screenshots/', 'screenshots/', '', '', ''),
(26, 'FHRFGHRRTRT', '', '', '', '', 'uploadImage/IMG-20230205-WA0014.jpg', 'screenshots/', 'screenshots/', 'screenshots/', '', '', ''),
(27, '', 'RTHGRTHGR', '', '', '', '../uploadImage/IMG-20230205-WA0016.jpg', 'screenshots/', 'screenshots/', 'screenshots/', '', '', ''),
(28, '', '', '', '', '', '../uploadImage/IMG-20230205-WA0011.jpg', 'screenshots/', 'screenshots/', 'screenshots/', '', '', ''),
(30, 'dfvgd', 'dfvd', 'vfdfv', 'dfvdf', 'vdfvd', '../uploadImage/bg.jpg', '../screenshots/bg.jpg', '../screenshots/india.jpg', '../screenshots/ben10.png', '', '', ''),
(31, 'text', 'desc', 'dvjdhbvfjsdh', 'fvbdfv', 'dvfdfv', '../uploadImage/IMG-20230203-WA0007.jpg', '../screenshots/Screenshot (1).png', '../screenshots/Screenshot (2).png', '../screenshots/whatsappkodular.jfif', '', '', ''),
(32, 'csdcs', '', '', '', '', '../uploadImage/bg.jpg', '../screenshots/', '../screenshots/', '../screenshots/', '', '', ''),
(33, 'gdfgdg', '', '', '', '', '../uploadImage/icons8-trash-24.png', '../screenshots/', '../screenshots/', '../screenshots/', '', '', ''),
(34, 'testing', 'dcsdcsdcsdcsdc', 'google.com', 'github.com', 'amazon.com', '../uploadImage/ben10.png', '../screenshots/ben10.png', '../screenshots/pubg_m416.jpg', '../screenshots/bg.jpg', '', '', ''),
(35, 'pathan thdhdgdhgd djddjkdj dkdkdkdkd djdjdjdj chdjdjd kskskksks', 'RTHGRTHGRRTHRTHYdfrgedrfgeRfvdfvdfvd  gdfgd dfgdfg dfgdfg dfgd dfgd dfgd dfgd ', 'https://gplinks.co/fEtlk2', 'https://gplinks.co/fEtlk2', 'https://gplinks.co/fEtlk2', '../uploadImage/bg.jpg', '../screenshots/ben10.png', '../screenshots/bg.jpg', '../screenshots/whatsapp.png', '', '', ''),
(36, 'BEN 10 OMNIVERSE hindi english 480p 720 1080 ', 'RTHGRTHGRRTHRTHYR', 'TRHRTHRertgerge', 'csdcsdc', 'csdcsdcsdcs', '../uploadImage/ben10.png', '../screenshots/pubg_m416.jpg', '../screenshots/bg.jpg', '../screenshots/IMG-20230205-WA0015.jpg', '', '', ''),
(37, 'India', 'sdncfhsvbdcn sdcjhsbdcjkns sdcjnsbdkcjnsb sdcnbsd,mcns dsdjchbsdc ', 'sdfgbsdfbvd', 'bdfbvdfvbd', 'dbdfvbdfb', '../uploadImage/india.jpg', '../screenshots/bg.jpg', '../screenshots/IMG-20230205-WA0015.jpg', '../screenshots/IMG-20230203-WA0005.jpg', 'action', '', ''),
(38, 'bdfbdfb', 'dfbvdfbd', 'dfbvdfbvd', 'dfbdsfb', 'bdsfb', '../uploadImage/IMG-20230203-WA0005.jpg', '../screenshots/IMG-20230203-WA0007.jpg', '../screenshots/IMG-20230203-WA0005.jpg', '../screenshots/IMG-20230205-WA0013.jpg', 'romance', '', ''),
(39, 'bge', 'fvdfv', 'fvgdfvdfd', 'dvdf', 'vddfdf', '../uploadImage/pubg_m416_27022023141448.jpg', '../screenshots/bgmain_27022023141448.jpg', '../screenshots/bg_27022023141448.jpg', '../screenshots/whatsapp_27022023141448.png', 'adult', '', ''),
(40, 'bgd', 'dsfsd', 'dsfsdfdsf', 'sdfsdfs', 'dfsdfsf', '../uploadImage/bg_27022023140113.jpg', '../screenshots/bgmain_27022023140113.jpg', '../screenshots/whatsapp_27022023140113.png', '../screenshots/bg_27022023140113.jpg', 'adventure', '', ''),
(41, 'bgd', 'dcsdcsd', 'csdcsd', 'dcsdc', 'sdcsdc', '../uploadImage/bg_27022023140248.jpg', '../screenshots/IMG-20230203-WA0007_27022023140248.jpg', '../screenshots/IMG-20230205-WA0012_27022023140248.jpg', '../screenshots/IMG-20230205-WA0012_27022023140248.jpg', 'bollywood', '', ''),
(42, 'Cricket', 'Hdjdjdjd', 'Hdhd', 'Hdhd', 'Hdhd', '../uploadImage/IMG_20230225_112630_27022023190512.jpg', '../screenshots/IMG_20230215_113224_27022023190512.jpg', '../screenshots/IMG_20230215_173607_27022023190512.jpg', '../screenshots/IMG_20221225_003012_27022023190512.jpg', 'fantasy', '', ''),
(43, 'check description', 'story - A man named Kalidas gets stranded due to the pandemic lock-down when he travels from Coimbatore to Kerala.  IMDB Rating: 4.6/10 Director: Shaji Kailas Writers: Rajesh Jayaraman Stars: Mohanlal, Annie, Baiju', 'yrtghyr', 'thrthr', 'rthrthr', '../uploadImage/ben_28022023110938.png', '../screenshots/IMG-20230203-WA0005_28022023110938.jpg', '../screenshots/IMG-20230205-WA0016_28022023110938.jpg', '../screenshots/IMG-20230205-WA0015_28022023110938.jpg', 'action', '', ''),
(44, 'The Last of Us (2023) (Hindi) [WebSeries | Episode 7 Added 🎯]', 'The Last of Us (2023) (in Hindi)   story -  The Last of Us – Joel and Ellie, a pair connected through the harshness of the world they live in, are forced to endure brutal circumstances and ruthless killers on a trek across post-pandemic America.  IMDb Rating:- 9.4/10 Creators - Neil Druckmann(based on the PlayStation Studios videogame written by) , Craig Mazin(created for television by) Stars - Pedro Pascal , Bella Ramsey , Gabriel Luna  Series Name: The Last of Us Season: 1  Episode: 01 Added Language: Dual Audio {Hindi} Released Year: 2023', 'nvnvfn', 'fgbnfbfgbf', 'fdgbfgbfg', '../uploadImage/whatsapp_28022023111443.png', '../screenshots/IMG-20230203-WA0007_28022023111443.jpg', '../screenshots/IMG-20230205-WA0015_28022023111443.jpg', '../screenshots/IMG-20230205-WA0002_28022023111443.jpg', 'hollywood', '', ''),
(48, 'hbfdg', 'gbfghbf', 'fvdf', 'dfvdf', 'dfvdf', '../uploadImage/1080_17032023140409.jpg', '../screenshots/2Tcz7W4_17032023140409.jpeg', '../screenshots/_17032023140409.', '../screenshots/_17032023140409.', 'action', '', ''),
(49, 'hgfghbfg', 'ggbfgbf', 'gfhbfgbh', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', '', ''),
(50, 'hgfghbfg', 'ggbfgbf', 'gfhbfgbh', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', '', ''),
(51, 'hgfghbfg', 'ggbfgbf', 'gfhbfgbh', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', '', ''),
(52, 'hgfghbfg', 'ggbfgbf', 'gfhbfgbh', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', '', ''),
(53, 'hgfghbfg', 'ggbfgbf', 'gfhbfgbh', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', '', ''),
(54, 'hgfghbfg', 'ggbfgbf', 'gfhbfgbh', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', '', ''),
(55, 'hgfghbfg', 'ggbfgbf', 'gfhbfgbh', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', '', ''),
(56, 'hgfghbfg', 'ggbfgbf', 'gfhbfgbh', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', '', ''),
(57, 'hgfghbfg', 'ggbfgbf', 'gfhbfgbh', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', '', ''),
(58, 'hgfghbfg', 'ggbfgbf', 'gfhbfgbh', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', '', ''),
(59, 'hgfghbfg', 'ggbfgbf', 'gfhbfgbh', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', '', ''),
(60, 'hgfghbfg', 'ggbfgbf', 'gfhbfgbh', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', '', ''),
(61, 'hgfghbfg', 'ggbfgbf', 'gfhbfgbh', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', '', ''),
(62, 'hgfghbfg', 'ggbfgbf', 'gfhbfgbh', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', '', ''),
(63, 'hgfghbfg', 'ggbfgbf', 'gfhbfgbh', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', '', ''),
(64, 'hgfghbfg', 'ggbfgbf', 'gfhbfgbh', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', '', ''),
(65, 'hgfghbfg', 'ggbfgbf', 'gfhbfgbh', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', '', ''),
(66, 'hgfghbfg', 'ggbfgbf', 'gfhbfgbh', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', '', ''),
(67, 'hgfghbfg', 'ggbfgbf', 'gfhbfgbh', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', '', ''),
(68, 'hgfghbfg', 'ggbfgbf', 'gfhbfgbh', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', '', ''),
(69, 'hgfghbfg', 'ggbfgbf', 'gfhbfgbh', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', '', ''),
(70, 'hgfghbfg', 'ggbfgbf', 'gfhbfgbh', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', '', ''),
(71, 'hgfghbfg', 'ggbfgbf', 'gfhbfgbh', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', '', ''),
(72, 'hgfghbfg', 'ggbfgbf', 'gfhbfgbh', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', '', ''),
(73, 'hgfghbfg', 'ggbfgbf', 'gfhbfgbh', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', '', ''),
(74, 'hgfghbfg', 'ggbfgbf', 'gfhbfgbh', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', '', ''),
(75, 'hgfghbfg', 'ggbfgbf', 'gfhbfgbh', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', '', ''),
(76, 'hgfghbfg', 'ggbfgbf', 'gfhbfgbh', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', '', ''),
(77, 'hgfghbfg', 'ggbfgbf', 'gfhbfgbh', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', '', ''),
(78, 'hgfghbfg', 'ggbfgbf', 'gfhbfgbh', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', '', ''),
(79, 'hgfghbfg', 'ggbfgbf', 'gfhbfgbh', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', '', ''),
(80, 'hgfghbfg', 'ggbfgbf', 'gfhbfgbh', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', '', ''),
(81, 'hgfghbfg', 'ggbfgbf', 'gfhbfgbh', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', '', ''),
(82, 'hgfghbfg', 'ggbfgbf', 'gfhbfgbh', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', '', ''),
(83, 'hgfghbfg', 'ggbfgbf', 'gfhbfgbh', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', '', ''),
(84, 'hgfghbfg', 'ggbfgbf', 'gfhbfgbh', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', '', ''),
(85, 'hgfghbfg', 'ggbfgbf', 'gfhbfgbh', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', '', ''),
(86, 'hgfghbfg', 'ggbfgbf', 'gfhbfgbh', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', '', ''),
(87, 'hgfghbfg', 'ggbfgbf', 'gfhbfgbh', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', '', ''),
(88, 'hgfghbfg', 'ggbfgbf', 'gfhbfgbh', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', '', ''),
(89, 'hgfghbfg', 'ggbfgbf', 'gfhbfgbh', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', '', ''),
(90, 'hgfghbfg', 'ggbfgbf', 'gfhbfgbh', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', '', ''),
(91, 'hgfghbfg', 'ggbfgbf', 'gfhbfgbh', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', '', ''),
(92, 'hgfghbfg', 'ggbfgbf', 'gfhbfgbh', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', '', ''),
(93, 'hgfghbfg', 'ggbfgbf', 'gfhbfgbh', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', '', ''),
(94, 'hgfghbfg', 'ggbfgbf', 'gfhbfgbh', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', '', ''),
(95, 'hgfghbfg', 'ggbfgbf', 'gfhbfgbh', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', '', ''),
(96, 'hgfghbfg', 'ggbfgbf', 'gfhbfgbh', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', '', ''),
(97, 'hgfghbfg', 'ggbfgbf', 'gfhbfgbh', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', '', ''),
(98, 'hgfghbfg', 'ggbfgbf', 'gfhbfgbh', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', '', ''),
(99, 'hgfghbfg', 'ggbfgbf', 'gfhbfgbh', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', '', ''),
(100, 'hgfghbfg', 'ggbfgbf', 'gfhbfgbh', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', '', ''),
(101, 'hgfghbfg', 'ggbfgbf', 'gfhbfgbh', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', '', ''),
(102, 'hgfghbfg', 'ggbfgbf', 'gfhbfgbh', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', '', ''),
(103, 'hgfghbfg', 'ggbfgbf', 'gfhbfgbh', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', '', ''),
(104, 'hgfghbfg', 'ggbfgbf', 'gfhbfgbh', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', '', ''),
(105, 'hgfghbfg', 'ggbfgbf', 'gfhbfgbh', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', '', ''),
(106, 'hgfghbfg', 'ggbfgbf', 'gfhbfgbh', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', '', ''),
(107, 'hgfghbfg', 'ggbfgbf', 'gfhbfgbh', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', '', ''),
(108, 'hgfghbfg', 'ggbfgbf', 'gfhbfgbh', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', '', ''),
(109, 'hgfghbfg', 'ggbfgbf', 'gfhbfgbh', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', '', ''),
(110, 'hgfghbfg', 'ggbfgbf', 'gfhbfgbh', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', '', ''),
(111, 'hgfghbfg', 'ggbfgbf', 'gfhbfgbh', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', '', ''),
(112, 'hgfghbfg', 'ggbfgbf', 'gfhbfgbh', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', '', ''),
(113, 'hgfghbfg', 'ggbfgbf', 'gfhbfgbh', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', '', ''),
(114, 'hgfghbfg', 'ggbfgbf', 'gfhbfgbh', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', '', ''),
(115, 'hgfghbfg', 'ggbfgbf', 'gfhbfgbh', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', '', ''),
(116, 'hgfghbfg', 'ggbfgbf', 'gfhbfgbh', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', '', ''),
(117, 'hgfghbfg', 'ggbfgbf', 'gfhbfgbh', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', '', ''),
(118, 'hgfghbfg', 'ggbfgbf', 'gfhbfgbh', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', '', ''),
(119, 'hgfghbfg', 'ggbfgbf', 'gfhbfgbh', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', '', ''),
(120, 'hgfghbfg', 'ggbfgbf', 'gfhbfgbh', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', '', ''),
(121, 'hgfghbfg', 'ggbfgbf', 'gfhbfgbh', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', '', ''),
(122, 'hgfghbfg', 'ggbfgbf', 'gfhbfgbh', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', '', ''),
(123, 'hgfghbfg', 'ggbfgbf', 'gfhbfgbh', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', '', ''),
(124, 'hgfghbfg', 'ggbfgbf', 'gfhbfgbh', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', '', ''),
(125, 'hgfghbfg', 'ggbfgbf', 'gfhbfgbh', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', '', ''),
(126, 'hgfghbfg', 'ggbfgbf', 'gfhbfgbh', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', '', ''),
(127, 'hgfghbfg', 'ggbfgbf', 'gfhbfgbh', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', '', ''),
(128, 'hgfghbfg', 'ggbfgbf', 'gfhbfgbh', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', '', ''),
(129, 'hgfghbfg', 'ggbfgbf', 'gfhbfgbh', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', '', ''),
(130, 'hgfghbfg', 'ggbfgbf', 'gfhbfgbh', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', '', ''),
(131, 'hgfghbfg', 'ggbfgbf', 'gfhbfgbh', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', '', ''),
(132, 'hgfghbfg', 'ggbfgbf', 'gfhbfgbh', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', '', ''),
(133, 'hgfghbfg', 'ggbfgbf', 'gfhbfgbh', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', '', ''),
(134, 'hgfghbfg', 'ggbfgbf', 'gfhbfgbh', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', '', ''),
(135, 'hgfghbfg', 'ggbfgbf', 'gfhbfgbh', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', '', ''),
(136, 'hgfghbfg', 'ggbfgbf', 'gfhbfgbh', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', '', ''),
(137, 'hgfghbfg', 'ggbfgbf', 'gfhbfgbh', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', '', ''),
(138, 'hgfghbfg', 'ggbfgbf', 'gfhbfgbh', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', '', ''),
(139, 'hgfghbfg', 'ggbfgbf', 'gfhbfgbh', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', '', ''),
(140, 'hgfghbfg', 'ggbfgbf', 'gfhbfgbh', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', '', ''),
(141, 'hgfghbfg', 'ggbfgbf', 'gfhbfgbh', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', '', ''),
(142, 'hgfghbfg', 'ggbfgbf', 'gfhbfgbh', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', '', ''),
(143, 'hgfghbfg', 'ggbfgbf', 'gfhbfgbh', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', '', ''),
(144, 'hgfghbfg', 'ggbfgbf', 'gfhbfgbh', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', '', ''),
(145, 'hgfghbfg', 'ggbfgbf', 'gfhbfgbh', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', '', ''),
(146, 'hgfghbfg', 'ggbfgbf', 'gfhbfgbh', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', '', ''),
(147, 'hgfghbfg', 'ggbfgbf', 'gfhbfgbh', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', '', ''),
(148, 'hgfghbfg', 'ggbfgbf', 'gfhbfgbh', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', '', ''),
(149, 'hgfghbfg', 'ggbfgbf', 'gfhbfgbh', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', '', ''),
(150, 'hgfghbfg', 'ggbfgbf', 'gfhbfgbh', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', '', ''),
(151, 'hgfghbfg', 'ggbfgbf', 'gfhbfgbh', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', '', ''),
(152, 'hgfghbfg', 'ggbfgbf', 'gfhbfgbh', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', '', ''),
(153, 'hgfghbfg', 'ggbfgbf', 'gfhbfgbh', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', '', ''),
(154, 'hgfghbfg', 'ggbfgbf', 'gfhbfgbh', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', '', ''),
(155, 'hgfghbfg', 'ggbfgbf', 'gfhbfgbh', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', '', ''),
(156, 'hgfghbfg', 'ggbfgbf', 'gfhbfgbh', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', '', ''),
(157, 'hgfghbfg', 'ggbfgbf', 'gfhbfgbh', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', '', ''),
(158, 'hgfghbfg', 'ggbfgbf', 'gfhbfgbh', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', '', ''),
(159, 'hgfghbfg', 'ggbfgbf', 'gfhbfgbh', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', '', ''),
(160, 'hgfghbfg', 'ggbfgbf', 'gfhbfgbh', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', '', ''),
(161, 'hgfghbfg', 'ggbfgbf', 'gfhbfgbh', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', '', ''),
(162, 'hgfghbfg', 'ggbfgbf', 'gfhbfgbh', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', '', ''),
(163, 'hgfghbfg', 'ggbfgbf', 'gfhbfgbh', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', '', ''),
(164, 'hgfghbfg', 'ggbfgbf', 'gfhbfgbh', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', '', ''),
(165, 'hgfghbfg', 'ggbfgbf', 'gfhbfgbh', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', '', ''),
(166, 'hgfghbfg', 'ggbfgbf', 'gfhbfgbh', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', '', ''),
(167, 'hgfghbfg', 'ggbfgbf', 'gfhbfgbh', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', '', ''),
(168, 'hgfghbfg', 'ggbfgbf', 'gfhbfgbh', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', '', ''),
(169, 'hgfghbfg', 'ggbfgbf', 'gfhbfgbh', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', '', ''),
(170, 'hgfghbfg', 'ggbfgbf', 'gfhbfgbh', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', '', ''),
(171, 'hgfghbfg', 'ggbfgbf', 'gfhbfgbh', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', '', ''),
(172, 'hgfghbfg', 'ggbfgbf', 'gfhbfgbh', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', '', ''),
(173, 'hgfghbfg', 'ggbfgbf', 'gfhbfgbh', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', '', ''),
(174, 'hgfghbfg', 'ggbfgbf', 'gfhbfgbh', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', '', ''),
(175, 'hgfghbfg', 'ggbfgbf', 'gfhbfgbh', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', '', ''),
(176, 'hgfghbfg', 'ggbfgbf', 'gfhbfgbh', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', '', ''),
(177, 'hgfghbfg', 'ggbfgbf', 'gfhbfgbh', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', '', ''),
(178, 'hgfghbfg', 'ggbfgbf', 'gfhbfgbh', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', '', ''),
(179, 'hgfghbfg', 'ggbfgbf', 'gfhbfgbh', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', '', ''),
(180, 'hgfghbfg', 'ggbfgbf', 'gfhbfgbh', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', '', ''),
(181, 'hgfghbfg', 'ggbfgbf', 'gfhbfgbh', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', '', ''),
(182, 'hgfghbfg', 'ggbfgbf', 'gfhbfgbh', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', 'gfbfgbf', '', ''),
(183, 'sahil', 'xcascxasxc', 'cxascxa', 'acxascxa', 'acxsascxa', '../uploadImage/whatsapp.png', '../screenshots/', '../screenshots/', '../screenshots/', '', '', ''),
(184, 'hgrtghyr', 'gthrtgyr', 'rtghrthgrt', 'rthgrtghy', 'thgrthgr', '../uploadImage/hgfnhfgnbf_23032023172416.jpg', '../screenshots/nvbnvn_23032023172416.jpg', '../screenshots/hnfgnbfgnb_23032023172416.jpg', '../screenshots/ghfhhfr_23032023172416.jpg', 'hollywood', '', ''),
(185, 'fbfgbf', 'fgbfgbf', 'bgfgbfg', 'fgbfgbf', 'fgbfgbf', '../uploadImage/tyjtgyjgh_24032023071144.jpg', '../screenshots/hnfgnbfgnb_24032023071144.jpg', '../screenshots/_24032023071144.', '../screenshots/_24032023071144.', 'action', '', ''),
(187, 'Ant-Man and the Wasp: Quantumania (2023) (Hindi | English) [Full HD]', 'story - Scott Lang and Hope Van Dyne, along with Hank Pym and Janet Van Dyne, explore the Quantum Realm, where they', 'gnbfgnbfgnb', 'fgnbfgnbfgnf', 'fgnbfgnfgnf', 'fdvdfdfdfd_24042023175842.jpg', 'fbfdbfdb_24042023175842.jpg', 'gfhfghfgh_24042023175842.jpg', 'unnamed_24042023175842.jpg', 'romance', 'pop', ''),
(189, 'Bharat (2019) (in Hindi)', 'story - Life for former United Nations investigator Gerry Lane and his family seems content. Suddenly, the world is plagued by a mysterious infection turning whole human populations into rampaging mindless zombies. After barely escaping the chaos, Lane is persuaded to go on a mission to investigate this disease. What follows is a perilous trek around the world where Lane must brave horrific dangers and long odds to find answers before human civilization falls.  When former U.N. investigator Gerry Lane and his family get stuck in urban gridlock, he senses that it’s no ordinary traffic jam. His suspicions are confirmed when, suddenly, the city erupts into chaos. A lethal virus, spread through a single bite, is turning healthy people into something vicious, unthinking and feral. As the pandemic threatens to consume humanity, Gerry leads a worldwide search to find the source of the infection and, with luck, a halt to it’s spread. Director: Marc Forster Writer: Matthew Michael Carnahan, Drew Goddard Stars: Brad Pi', '', '', '', 'bfdgbfdgbfgb_25042023142645.jpg', 'fbfbgfgbfgb_25042023142645.jfif', '_25042023142645.', '_25042023142645.', 'action', '', ''),
(190, 'ghfgh', 'fghfghf', 'gbfgbfg', 'fgbfgbf', 'gbfgb', 'fgnbfghf_24032023094956.jpg', 'ghfhhfr_24032023094956.jpg', '_24032023094956.', '_24032023094956.', 'action', '', ''),
(191, 'hgfhgf jkygjhg hjgkjhgjk kjhgkjhg ,jkhgkjhgjk kjhgjhgjk  jmhgjhg mjhgjkhg mjhghjg mjhgjhg hjghjg mjhghjg  jhgjhghj', 'story - Scott Lang and Hope Van Dyne, along with Hank Pym and Janet Van Dyne, explore the Quantum Realm, where they', 'fngbfgnbfg', 'gbfgbfg', 'fgbfgbfggbg', 'u0sO1m_24042023181413.jpg', '1MIDERaEUMw1rYDM99tGZPY80Ap_24042023181413.jpg', '_24042023181413.', '_24042023181413.', 'bollywood', '', ''),
(193, 'khj,mhj', 'hj,mhjm,', 'khjkhjk', '', '', 'hfghfg_25042023184616.jpg', 'FFPnV7F_25042023184616.jpg', '_25042023184616.', '_25042023184616.', 'mystry', '', ''),
(194, 'ghnghnghnghn fghnghngh', 'nghng fghnghng ghnghnmg', 'n bn ', 'gh gh', 'hg ghng', '1MIDERaEUMw1rYDM99tGZPY80Ap_03052023133624.jpg', 'bvbvcbvcb_03052023133624.jfif', '_03052023133624.', '_03052023133624.', 'hollywood', '', ''),
(195, 'gfnbfgnf', 'fngfgnfg', 'fgnbfgnb', 'fgnbfgn', 'fghbfgnbf', 'unnamed_09052023122627.jpg', 'mvlJLnK_09052023122628.jpg', 'vseyEOz_09052023122628.jpg', 'FFPnV7F_09052023122628.jpg', 'webseries', '', ''),
(196, 'nghnghn', 'nghng', 'ghnghng', 'ghnghng', 'ghnghn', 'unnamed_09052023123011.jpg', 'mvlJLnK_09052023123011.jpg', 'FFPnV7F_09052023123011.jpg', 'vseyEOz_09052023123011.jpg', 'webseries', '', 'a:7:{i:0;s:6:\"bfgbng\";i:1;s:9:\"nhgnmhgnm\";i:2;s:9:\"ghnghnghn\";i:3;s:8:\"hnghnghn\";i:4;s:7:\"nghnghn\";i:5;s:9:\"ngfhngfhn\";i:6;s:8:\"hgnhgnhg\";}'),
(197, 'mbnmbnm', 'mhgm', '', 'hnjmhm', 'mnnbm', 'bfdgbfdgbfgb_09052023132453.jpg', 'fgbfgbfbfgbf_09052023132453.jpg', 'u0saBZ_09052023132453.jpg', '_09052023132453.', 'comedy', '', ''),
(198, 'liol', 'kl.k;k', '', '', '', 'pCqUcxfxIAalYyaoDqMli8xtb1d_09052023140508.jpg', 'fbfbgfgbfgb_09052023140508.jfif', '_09052023140508.', '_09052023140508.', 'horror', '', ''),
(199, 'bfcvbfcb xfndfgn fgnfn fghnfgnfg fgnfgn \'\'ghnfgdn \'fdhbfgcx bx', 'fgbfgb', 'ghjghjg', 'hjghjghj', '', 'TwcaSwEm_10052023112336.jpg', 'mvlJLnK_10052023112336.jpg', 'FFPnV7F_10052023112336.jpg', '_10052023112336.', 'webseries', '', 'a:7:{i:0;s:2:\"x1\";i:1;s:2:\"x2\";i:2;s:2:\"x3\";i:3;s:2:\"x4\";i:4;s:2:\"x5\";i:5;s:2:\"x6\";i:6;s:2:\"x7\";}'),
(200, 'hgjgj', 'hjnghjg', 'google.com', 'https://www.webcodzing.com/php-how-to-print-array/', 'https://stackoverflow.com/questions/11125785/how-to-print-or-echo-the-array-index-of-in-php', '1MIDERaEUMw1rYDM99tGZPY80Ap_10052023132813.jpg', 'bvfdbfdgb_10052023132813.jpg', '_10052023132813.', '_10052023132813.', 'webseries', '', 'a:7:{i:0;s:91:\"https://stackoverflow.com/questions/11125785/how-to-print-or-echo-the-array-index-of-in-php\";i:1;s:50:\"https://www.webcodzing.com/php-how-to-print-array/\";i:2;s:50:\"https://www.webcodzing.com/php-how-to-print-array/\";i:3;s:10:\"google.com\";i:4;s:22:\"spotmymovies.epizy.com\";i:5;s:50:\"https://www.webcodzing.com/php-how-to-print-array/\";i:6;s:50:\"https://www.webcodzing.com/php-how-to-print-array/\";}'),
(201, 'fvdfvbdf', 'fdgbfgbf', 'google.com', 'https://www.webcodzing.com/php-how-to-print-array/', 'https://www.webcodzing.com/php-how-to-print-array/', 'hfghfg_10052023133106.jpg', 'u0sO1m_10052023133106.jpg', '_10052023133106.', '_10052023133106.', 'webseries', '', 'a:5:{i:0;s:10:\"google.com\";i:1;s:22:\"spotmymovies.epizy.com\";i:2;s:50:\"https://www.webcodzing.com/php-how-to-print-array/\";i:3;s:10:\"google.com\";i:4;s:10:\"google.com\";}'),
(203, 'gfhfg', 'hjghj', 'hjghj', 'hjghj', 'hjghjg', '1MIDERaEUMw1rYDM99tGZPY80Ap_10052023141702.jpg', 'FFPnV7F_10052023141702.jpg', '_10052023141702.', '_10052023141702.', 'webseries', '', 'a:19:{i:0;s:4:\"fdbf\";i:1;s:8:\"fgbfgbfg\";i:2;s:4:\"gfgg\";i:3;s:6:\"fgfgbf\";i:4;s:5:\"bfgbf\";i:5;s:8:\"bfgbfgbf\";i:6;s:7:\"fgbfgbf\";i:7;s:6:\"gbfbfg\";i:8;s:5:\"bfgbf\";i:9;s:7:\"gbfgbfg\";i:10;s:5:\"bfgbf\";i:11;s:6:\"gbfgbf\";i:12;s:5:\"bfgbf\";i:13;s:4:\"gbfb\";i:14;s:5:\"fgbfg\";i:15;s:6:\"bfbgfg\";i:16;s:6:\"bfgbfg\";i:17;s:4:\"bfgb\";i:18;s:6:\"fgbfgb\";}');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `Id` int(40) NOT NULL,
  `Name` varchar(1000) NOT NULL,
  `Description` varchar(300) NOT NULL,
  `Image` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`Id`, `Name`, `Description`, `Image`) VALUES
(0, 'sahil', '', ''),
(3, '', 'RTHGRTHGRRTHRTHYR', 'Array');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `username` mediumtext NOT NULL,
  `password` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'mobileexpress@gmail.com', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `Id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `Id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=204;

--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `Id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
