-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2017 at 08:18 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bogor_community`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id_admin` int(11) NOT NULL,
  `username_admin` text NOT NULL,
  `password_admin` varchar(255) NOT NULL,
  `active` int(11) NOT NULL,
  `picture_admin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id_admin`, `username_admin`, `password_admin`, `active`, `picture_admin`) VALUES
(1, 'super_admin', 'c93ccd78b2076528346216b3b2f701e6', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `agendas`
--

CREATE TABLE `agendas` (
  `id_agenda` int(11) NOT NULL,
  `name_agenda` text NOT NULL,
  `date_agenda` date NOT NULL,
  `time_start` time NOT NULL,
  `time_end` time NOT NULL,
  `agenda_location` text NOT NULL,
  `content_agenda` text NOT NULL,
  `id_community` int(11) NOT NULL,
  `agenda_notes` text NOT NULL,
  `active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `agendas`
--

INSERT INTO `agendas` (`id_agenda`, `name_agenda`, `date_agenda`, `time_start`, `time_end`, `agenda_location`, `content_agenda`, `id_community`, `agenda_notes`, `active`) VALUES
(1, 'sdsds', '2017-05-11', '00:00:00', '00:00:00', '', 'ddwadwsdw', 0, 'asas', 2),
(3, 'jjjhjhkhk', '2017-05-17', '00:00:00', '00:00:00', '', 'ljljlkk;k', 0, 'nkljlk;', 2),
(5, 'jkjljklk;kl;', '2017-05-09', '00:00:00', '00:00:00', '', 'lklk;', 0, 'lklklkl', 2),
(6, 'Pengurus Komunitas', '2017-05-10', '00:00:00', '00:00:00', '', 'pemilihan pengurus komunitas', 0, '20 hadir', 1),
(7, 'agenda', '1122-02-12', '12:02:00', '22:22:00', '', 'bbbbbbbbbbbbb ', 0, '', 1),
(8, 'wjqiojwoqjw', '2121-02-12', '21:22:00', '21:29:00', 'adjadj ', 'DAKJHDKAJHDKAHD ', 0, '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `communities`
--

CREATE TABLE `communities` (
  `id_community` int(11) NOT NULL,
  `name_community` text NOT NULL,
  `date_create_community` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `active` int(11) NOT NULL,
  `category` text NOT NULL,
  `address_community` text NOT NULL,
  `about` text NOT NULL,
  `reason` text NOT NULL,
  `id_master` int(11) NOT NULL,
  `picture_community` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `communities`
--

INSERT INTO `communities` (`id_community`, `name_community`, `date_create_community`, `active`, `category`, `address_community`, `about`, `reason`, `id_master`, `picture_community`) VALUES
(1, 'Bvoly', '2017-05-08 17:00:00', 2, '0', '', '', '', 0, ''),
(2, 'jkjkjjkl', '2017-05-16 17:00:00', 2, 'hhkjl', '', '', '', 0, ''),
(3, '', '0000-00-00 00:00:00', 2, '', '', '', '', 0, ''),
(4, 'Bogor-Care', '2017-05-03 17:00:00', 1, 'lifestyle', '', '', '', 0, ''),
(5, 'cibinong ', '0000-00-00 00:00:00', 1, 'hiburan', '', '', '', 0, ''),
(6, 'komunitas web apps', '2017-05-11 17:00:00', 1, 'hiburan', '', '', '', 0, ''),
(7, 'B-swim', '2017-05-24 17:00:00', 1, 'S', 'bogor', 'lets join', ' lakakakakakaka', 0, ''),
(8, 'swim', '0000-00-00 00:00:00', 1, '', '', 'kcxkkkddk', 'djdjdjdjdjdjd', 0, ''),
(9, '$name_community', '0000-00-00 00:00:00', 1, '$category', '$address_community', '$about', '$reason', 0, ''),
(10, 'Oyon', '1996-12-31 17:00:00', 1, 'lifestyle', '', 'aku', ' bodo', 0, ''),
(11, 'Mobile Apps Bubulak', '2017-05-26 09:03:43', 2, 'education', 'sm. ', 'K. N', '.lm d ', 0, ''),
(12, 'aslmkd', '2017-05-26 09:02:01', 1, 'lifestyle', 's;almd', 'as;lmd', ';lddfm ', 0, ''),
(13, 'Dota 2', '2017-05-26 09:03:17', 1, 'sports\"', 'Dimana mana', 'asodpjsad', 'sddpcmadpc ', 47, ''),
(14, 'Mobile Apps Bubulak', '2017-05-26 09:03:50', 1, '', 'Bubulak', 'Ini komunitas Mobile Apps', 'Buat Asyik2 aja', 47, ''),
(15, 'Phantom Thieves ', '2017-05-26 09:18:40', 1, 'arts', 'Jl Komplek Dramaga', 'Nyuri hati orang bersama nakama', 'Justiceeeeeeee', 48, ''),
(16, 'Phantom Thieves ', '2017-05-26 09:19:09', 1, 'arts', 'Jl Komplek Dramaga', 'Nyuri hati orang bersama nakama', 'Justiceeeeeeee', 48, ''),
(17, 'Phantom Thieves ', '2017-05-26 09:19:21', 1, 'arts', 'Jl Komplek Dramaga', 'Nyuri hati orang bersama nakama', 'Justiceeeeeeee', 48, ''),
(18, 'kom', '2017-05-27 08:11:38', 1, 'lifestyle', 'add', 'ab', 'rea', 48, ''),
(19, 'kommuq', '2017-05-27 08:15:27', 1, 'lifestyle', 'hahahaha', 'hahahahahahah', 'hahahahahahahahahahah', 48, '');

-- --------------------------------------------------------

--
-- Table structure for table `members_community`
--

CREATE TABLE `members_community` (
  `id_community` int(11) NOT NULL,
  `date_join` date NOT NULL,
  `id_user` int(11) NOT NULL,
  `active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members_community`
--

INSERT INTO `members_community` (`id_community`, `date_join`, `id_user`, `active`) VALUES
(1, '2017-05-17', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id_post` int(11) NOT NULL,
  `content` text NOT NULL,
  `date_create_post` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `active` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_thread` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id_post`, `content`, `date_create_post`, `active`, `id_user`, `id_thread`) VALUES
(2, ' aaaaaaaaaaaaa', '2017-05-27 18:59:57', 1, 48, 0),
(3, 'adkjsakdaslkdasd', '2017-05-27 19:11:13', 1, 48, 0),
(4, 'henlo my fren', '2017-05-27 19:12:27', 1, 48, 0),
(5, 'haiaihaihaiha', '2017-05-27 19:26:40', 1, 48, 0),
(6, 'DJKSANDKSJADNKA', '2017-05-27 19:52:19', 1, 48, 0),
(7, 'huuuuuuuuuuueeeeeee', '2017-05-27 19:56:30', 1, 48, 0),
(8, 'i wanna sleep', '2017-05-27 19:59:09', 1, 48, 0),
(9, 'jlakjslajskasd', '2017-05-27 21:05:32', 1, 48, 0),
(10, 'ndlasndladld', '2017-05-27 21:06:25', 1, 48, 0),
(11, 'dasdnsansakd', '2017-05-27 21:07:35', 1, 48, 0);

-- --------------------------------------------------------

--
-- Table structure for table `threads`
--

CREATE TABLE `threads` (
  `title_thread` text NOT NULL,
  `date_thread` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id_thread` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_community` int(11) NOT NULL,
  `active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `threads`
--

INSERT INTO `threads` (`title_thread`, `date_thread`, `id_thread`, `id_user`, `id_community`, `active`) VALUES
('a', '2017-05-28 00:06:50', 6, 48, 0, 1),
('aaaaaaaaaaaaaaaaaaaaaaaaaa', '2017-05-28 00:28:10', 7, 48, 0, 1),
('aaaaaaaaaaaaaaaaaaaaaaaaaa', '2017-05-28 00:29:17', 8, 48, 0, 1),
('ssssssssssssssssss', '2017-05-28 00:29:27', 9, 48, 0, 1),
('wwwwwww', '2017-05-28 00:29:44', 10, 48, 0, 1),
('aaaaaaaaaaassssssssssss', '2017-05-28 02:35:29', 11, 48, 0, 1),
('hyahyahya', '2017-05-28 02:35:51', 12, 48, 0, 1),
('SMASMLAKMS', '2017-05-28 02:52:19', 13, 48, 0, 1),
('yaaaaaaah', '2017-05-28 02:56:30', 14, 48, 0, 1),
('last', '2017-05-28 02:59:09', 15, 48, 0, 1),
('asjasjalsj', '2017-05-28 04:05:32', 16, 48, 0, 1),
('akdlsadnla', '2017-05-28 04:06:25', 17, 48, 0, 1),
('dsakdsakdjkadn', '2017-05-28 04:07:35', 18, 48, 0, 1),
('hhhhhhhhhhhhh', '2017-05-28 04:09:05', 19, 48, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `contact` bigint(12) NOT NULL,
  `email` text NOT NULL,
  `password` varchar(255) NOT NULL,
  `master_access` tinyint(4) NOT NULL,
  `gender` text NOT NULL,
  `date_birth` date NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `username`, `address`, `contact`, `email`, `password`, `master_access`, `gender`, `date_birth`, `name`) VALUES
(30, 'ardan3', 'bogor', 98765432123, 'ardan@gmail.com', 'ff3737', 0, 'L', '2017-05-03', 'ardan maulana'),
(31, 'm', 'lampung', 81456765456, 'm@gmail.com', 'f7e93b', 0, 'P', '2017-05-16', 'malika'),
(32, 'n', 'bogor', 87654567876, 'nino@gmail.cpm', 'f8910f', 0, 'L', '2017-05-07', 'nino'),
(33, 'a', 'bogor', 89765435566, 'a1@gmail.com', '85187a2519ddf98a032f4d356ff800c2', 0, 'L', '2017-05-17', 'aa'),
(34, 'b', 'bogor', 897678988, 'b@gmail.com', '26cd39c4a08c4f13670133bb94a8a4b4', 0, 'L', '2017-05-17', ''),
(35, 'c', 'bogor', 89766782344, 'c@gmail.com', 'a6e51c569767764c879e49a494070a1c', 0, 'L', '2017-05-17', ''),
(36, 'Velia', 'Banjarnegara', 89768765456, 'velia@gmail.com', '3efac8bd27c467f6d99a81702ec769f2', 0, 'P', '2017-05-23', ''),
(37, 'malika_saum', 'Bekasi', 89765456536, 'saumnuarim@gmail.com', '091218ec606862444b518e4751cae44f', 0, 'Female', '2017-05-23', 'Malika Saumnuari'),
(40, 'malika_s', 'b', 98987876876, 'm@gmail.com', '254ebcce9be04d5423e45dc60bfa6eb6', 0, 'L', '2017-05-05', 'Malika Saumnuari'),
(41, 'debi_d', 'Bali', 89765456536, 'debi@gmail.com', '119ea93d3c80bd649d9ec6ed5595a7e5', 0, 'P', '2017-05-24', 'Debi Debora'),
(43, 'debi d', 'Bali', 89765456536, 'debi@gmail.com', '86858c9030a73445159618685e11d624', 0, 'P', '2017-05-24', 'Debi Debora'),
(44, 'bean', 'Bali', 98765432123, 'beni1@gmail.com', '035c38b95750ab68cc7544f3f821e7f1', 0, 'P', '2017-05-24', 'bean beni'),
(45, 'malika_ss', 'Tanimulya', 89765456789, 'mal@gmail.com', 'd4a9d8ce5096302b415cbd4c4efba9ac', 0, 'Female', '1997-01-14', 'Malika'),
(46, 'andhijes', 'banten', 87678987678, 'dhijes@gmail.com', '47b2b62c5351f3f286d4328025f7325b', 0, 'Female', '2017-06-01', 'andika kartika rahayu'),
(47, 'susi_p', 'cimahi', 81395290346, 'susi@gmail.com', 'a50c29a717bfce7d38d737e90b36e529', 0, 'female', '1967-08-30', 'susi prasidawati'),
(48, 'haha', 'hahahahahahahah', 82828282828, 'haha@ahah.com', '4e4d6c332b6fe62a63afe56171fd3725', 0, 'female', '1888-12-12', 'hahahahaha'),
(49, 'username', 'address', 21212, 'user@user.user', 'ee11cbb19052e40b07aac0ca060c23ee', 0, 'male', '2000-02-22', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `agendas`
--
ALTER TABLE `agendas`
  ADD PRIMARY KEY (`id_agenda`);

--
-- Indexes for table `communities`
--
ALTER TABLE `communities`
  ADD PRIMARY KEY (`id_community`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id_post`);

--
-- Indexes for table `threads`
--
ALTER TABLE `threads`
  ADD PRIMARY KEY (`id_thread`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `agendas`
--
ALTER TABLE `agendas`
  MODIFY `id_agenda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `communities`
--
ALTER TABLE `communities`
  MODIFY `id_community` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id_post` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `threads`
--
ALTER TABLE `threads`
  MODIFY `id_thread` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
