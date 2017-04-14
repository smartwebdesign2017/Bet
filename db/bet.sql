-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2017 at 09:12 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bet`
--
CREATE DATABASE `bet`;
USE `bet`;

-- --------------------------------------------------------

--
-- Table structure for table `bet_leagues`
--

CREATE TABLE `bet_leagues` (
  `id` int(11) NOT NULL,
  `league_name` varchar(255) NOT NULL,
  `league_teams` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bet_members`
--

CREATE TABLE `bet_members` (
  `phone` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pin` int(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bet_members`
--

INSERT INTO `bet_members` (`phone`, `name`, `username`, `email`, `pin`) VALUES
('0789562312', 'Felix', 'felix', 'felix@gmail.com', 8956),
('0712423121', 'Felix Watilah', 'fwatilah', 'fwatilah@gmail.com', 4878),
('0741852963', 'WIllis Okoth', 'okoth', 'okoth@gmail.com', 4512),
('0727132274', 'Joshua Ongaga', 'ongaga', 'ongaga@gmail.com', 6014),
('0987567434', 'Kirui Shaddy', 'kirui', 'kirui@gmail.com', 5241),
('0785296341', 'alex', 'alex', 'alex@gmail.com', 6352);

-- --------------------------------------------------------

--
-- Table structure for table `bet_results`
--

CREATE TABLE `bet_results` (
  `id` int(5) NOT NULL,
  `team` varchar(255) NOT NULL,
  `p` int(5) NOT NULL,
  `w` int(5) NOT NULL,
  `d` int(5) NOT NULL,
  `l` int(5) NOT NULL,
  `gd` varchar(5) NOT NULL,
  `pts` int(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bet_results`
--

INSERT INTO `bet_results` (`id`, `team`, `p`, `w`, `d`, `l`, `gd`, `pts`) VALUES
(1, 'Chelsea', 28, 22, 3, 3, '+38', 69),
(2, 'Tottenham', 25, 17, 8, 3, '+34', 59);

-- --------------------------------------------------------

--
-- Table structure for table `bet_teams`
--

CREATE TABLE `bet_teams` (
  `id` int(11) NOT NULL,
  `team_name` varchar(255) NOT NULL,
  `team_logo` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bet_tips`
--

CREATE TABLE `bet_tips` (
  `id` int(15) NOT NULL,
  `kick_off` varchar(255) NOT NULL,
  `home_team` varchar(255) NOT NULL,
  `away_team` varchar(255) NOT NULL,
  `home` decimal(4,0) NOT NULL,
  `draw` decimal(4,0) NOT NULL,
  `away` decimal(4,0) NOT NULL,
  `pick` varchar(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bet_tips`
--

INSERT INTO `bet_tips` (`id`, `kick_off`, `home_team`, `away_team`, `home`, `draw`, `away`, `pick`) VALUES
(1, '23/04/2017 12:00am', 'Chelsea', 'Arsenal', '2', '2', '3', '1'),
(2, '23/04/2017 12:00am', 'Man United', 'Liverpool', '3', '2', '3', '2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bet_members`
--
ALTER TABLE `bet_members`
  ADD PRIMARY KEY (`phone`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `bet_results`
--
ALTER TABLE `bet_results`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bet_teams`
--
ALTER TABLE `bet_teams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bet_tips`
--
ALTER TABLE `bet_tips`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bet_results`
--
ALTER TABLE `bet_results`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `bet_teams`
--
ALTER TABLE `bet_teams`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `bet_tips`
--
ALTER TABLE `bet_tips`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
