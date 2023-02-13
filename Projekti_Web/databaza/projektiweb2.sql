-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 27, 2022 at 04:42 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projektiweb2`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `ID` int(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`ID`, `title`, `description`) VALUES
(1, 'Bangkok', 'Thailand’s capital\nIs a large city known for ornate shrines and vibrant street life. The boat-filled Chao Phraya River feeds its network of canals, flowing past the Rattanakosin royal district, home to opulent Grand Palace and its sacred Wat Phra Kaew Te'),
(2, 'Paris, France\r\n', ''),
(3, 'London, England', ''),
(4, 'Dubai, UAE', 'The capital of the Emirate of Dubai\r\nLocated in the eastern part of the Arabian Peninsula on the coast of the Persian Gulf, Dubai aims to be the business hub of Western Asia.It is also a major global transport hub for passengers and cargo.'),
(5, 'Singapore, Malaysia', ''),
(6, 'Kuala Lumpur', ''),
(7, 'Travel History', 'The origin of the word \"travel\" is most likely lost to history. The term \"travel\" may\n                    originate\n                    from the Old\n                    French word travail, which means \'work\'. According to the Merriam Webster dictionary, the first\n                    known use\n                    of the word travel was in the 14th century. It also states that the word comes from Middle English\n                    travailen, travelen (which means to torment, labor, strive, journey) and earlier from Old French\n                    travailler\n                    (which means to work strenuously, toil). In English we still occasionally use the words \"travail\",\n                    which\n                    means struggle. According to Simon Winchester in his book The Best Travelers\' Tales (2004), the\n                    words\n                    \"travel\" and \"travail\" both share an even more ancient root: a Roman instrument of torture called\n                    the\n                    tripalium (in Latin it means \"three stakes\", as in to impale). This link may reflect the extreme\n                    difficulty\n                    of travel in ancient times. Travel in modern times may or may not be much easier depending upon the\n                    destination. Travel to Mount Everest, the Amazon rainforest, extreme tourism, and adventure travel\n                    are more\n                    difficult forms of travel. Travel can also be more difficult depending on the method of travel, such\n                    as by\n                    bus, cruise ship, or even by bullock cart.');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `ID` int(255) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`ID`, `username`, `email`, `message`) VALUES
(5, 'filanFisteku', 'filanfisteku@gmail.com', 'Pershendetje, jam i interesuar per pune praktike'),
(6, 'yllka', 'yllka.selimi@hotmail.com', 'Pershendetje, une jam yllka'),
(7, 'redonkasumi', 'redon.kasumi123@hotmail.com', 'Hello');

-- --------------------------------------------------------

--
-- Table structure for table `homepage`
--

CREATE TABLE `homepage` (
  `ID` int(200) NOT NULL,
  `title` varchar(200) NOT NULL,
  `description` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `homepage`
--

INSERT INTO `homepage` (`ID`, `title`, `description`) VALUES
(1, 'Tyler Cammack', 'Dr Cammack is a French trained General Practice Family Doctor. He graduated in 1991 from Toulouse Rangueil University.'),
(2, 'Brice Jeremiah', 'Brice Jeremiah is a German lover of travelling and a honorable student.He graduated in 1998 from Berlin University.'),
(3, 'Josefina Dobson', 'Josefina has a master degree and a whole lot of experiences into travelling.She graduated in 1999 from Berlin University.'),
(4, 'Nancy Brumfield', 'Mr.Brumfield is an American who has trained and studied hotelerism.She graduated in 2005 from Moscow University'),
(5, 'Jennie Barkley', 'Jennie Barkley is a web developer has bachelor and master degree on Computer Science, San Francisco University of Technology.'),
(31, 'Plan your travel', 'The most wonderful places you can visit are displayed in our website.By breaking the country into smaller, more manageable areas, the site aims to create a virtual travel experience that allows the user to explore.'),
(32, 'Blog', 'Activites and art works. See the rating of people who visited the places before you and their thoughts on different experiences. This straightforward navigation setup makes it easy for users to access the information they need.'),
(33, 'Reservation', 'Pick the best place to stay during your travel. Also find other activities, organizations and participate or voulenteer to help others as long as you stay in touch with the world, you learn more about cultures.'),
(37, '', ''),
(38, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `gender` char(1) NOT NULL,
  `usertype` varchar(50) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `name`, `email`, `password`, `gender`, `usertype`) VALUES
(32, 'redon  ', 'redon.kasumi123@hotmail.com      ', 'Redon123', 'M', 'admin'),
(34, 'redonkasumi', 'rk51262@ubt-uni.net', 'Redon123', 'M', 'user'),
(36, 'yllka', 'yllka.selimi@hotmail.com', 'Yllka123', 'F', 'admin'),
(37, 'support', 'support@gmail.com', 'Redon123', 'M', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `homepage`
--
ALTER TABLE `homepage`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `name` (`name`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `homepage`
--
ALTER TABLE `homepage`
  MODIFY `ID` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
