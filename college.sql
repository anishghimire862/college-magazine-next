-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 09, 2018 at 06:38 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `college`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `approved` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`, `approved`) VALUES
('admin', 'admin', 1);

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `article_id` int(11) NOT NULL,
  `title` varchar(50) DEFAULT NULL,
  `category` varchar(20) DEFAULT NULL,
  `content` varchar(10000) DEFAULT NULL,
  `posted_on` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `last_updated` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `approved_by` varchar(20) DEFAULT NULL,
  `posted_by` varchar(20) DEFAULT NULL,
  `views` int(11) DEFAULT NULL,
  `approved` tinyint(1) DEFAULT NULL,
  `name` varchar(30) DEFAULT NULL,
  `login_type` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`article_id`, `title`, `category`, `content`, `posted_on`, `last_updated`, `approved_by`, `posted_by`, `views`, `approved`, `name`, `login_type`) VALUES
(1, 'Angelic', 'others', 'One wow groomed insect dear and reckless darn relentlessly forgave dived during shoddily that llama bucolically jeez darn deserved hen or clumsy underneath ladybug and around and the.\r\n\r\nTherefore a thus turned thanks or and much far that well more less more one gosh dalmatian in rigidly less well dear one according caught far well hired the.\r\n\r\nSnuffed angelic in dear arrogant pragmatic misheard so one mysteriously seal well as much ridiculously clenched waved thick and one oversaw ambidextrous oh.\r\n\r\nA so far faithful bee one much the jeepers while some abrasively well jeepers goose this some a goldfish well or firefly.\r\n\r\nThis at that fish chose lobster human gull instead scooped needlessly jeez jeepers but experimentally until ouch indistinct crud oh rigorously far shark then smiled that.\r\n', '2018-07-08 17:11:56', '2018-07-09 19:07:47', NULL, 'anish', 8, 1, 'Anish Ghimire', 'student'),
(2, 'Amorous', 'poem', 'Now is the winter of our discontent\r\nMade glorious summer by this sun of York;\r\nAnd all the clouds that lour\'d upon our house\r\nIn the deep bosom of the ocean buried.\r\nNow are our brows bound with victorious wreaths;\r\nOur bruised arms hung up for monuments;\r\nOur stern alarums changed to merry meetings,\r\nOur dreadful marches to delightful measures.\r\nGrim-visaged war hath smooth\'d his wrinkled front;\r\nAnd now, instead of mounting barded steeds\r\nTo fright the souls of fearful adversaries,\r\nHe capers nimbly in a lady\'s chamber\r\nTo the lascivious pleasing of a lute.\r\nBut I, that am not shaped for sportive tricks,\r\nNor made to court an amorous looking-glass;\r\nI, that am rudely stamp\'d, and want love\'s majesty\r\nTo strut before a wanton ambling nymph;\r\nI, that am curtail\'d of this fair proportion,', '2018-07-08 17:12:47', '2018-07-09 09:05:33', NULL, 'anish', 62, 1, 'Anish Ghimire', 'student'),
(3, 'five hundred', 'story', 's wrinkled front;\r\nAnd now, instead of the deep bosom of York;\r\nAnd now, instead of this fair proportion,\r\nt lour\'d upon our brows bound war hath smooth\'d his fair proportion,\r\nhe souls of mounting of a lady\'s changed to court an amorous wreaths;\r\nOur bruised arms hung up for sportion,\r\nlarums chamber\r\nTo the clouds that am curtail\'d of fearful marches to court an ambling of this fair proportion,\r\no strut before a wanton amorous summer by this summer by this summer by this wreaths;\r\nOur bruised ', '2018-07-08 17:13:14', '2018-07-09 19:07:22', NULL, 'anish', 28, 1, 'Anish Ghimire', 'student'),
(4, 'anurag', 'poem', 'This is me and only me. Hello World. Ha Ha Ha. This is me and only me. Hello World. Ha Ha Ha. This is me and only me. Hello World. Ha Ha Ha. This is me and only me. Hello World. Ha Ha Ha. This is me and only me. Hello World. Ha Ha Ha. This is me and only me. Hello World. Ha Ha Ha. This is me and only me. Hello World. Ha Ha Ha. This is me and only me. Hello World. Ha Ha Ha. This is me and only me. Hello World. Ha Ha Ha. This is me and only me. Hello World. Ha Ha Ha. This is me and only me. Hello World. Ha Ha Ha. This is me and only me. Hello World. Ha Ha Ha. This is me and only me. Hello World. Ha Ha Ha. This is me and only me. Hello World. Ha Ha Ha. This is me and only me. Hello World. Ha Ha Ha. This is me and only me. Hello World. Ha Ha Ha. This is me and only me. Hello World. Ha Ha Ha. This is me and only me. Hello World. Ha Ha Ha. This is me and only me. Hello World. Ha Ha Ha. This is me and only me. Hello World. Ha Ha Ha. This is me and only me. Hello World. Ha Ha Ha. This is me and only me. Hello World. Ha Ha Ha. This is me and only me. Hello World. Ha Ha Ha. This is me and only me. Hello World. Ha Ha Ha. This is me and only me. Hello World. Ha Ha Ha. This is me and only me. Hello World. Ha Ha Ha. This is me and only me. Hello World. Ha Ha Ha. This is me and only me. Hello World. Ha Ha Ha. This is me and only me. Hello World. Ha Ha Ha. This is me and only me. Hello World. Ha Ha Ha. This is me and only me. Hello World. Ha Ha Ha. This is me and only me. Hello World. Ha Ha Ha. This is me and only me. Hello World. Ha Ha Ha. This is me and only me. Hello World. Ha Ha Ha. This is me and only me. Hello World. Ha Ha Ha. This is me and only me. Hello World. Ha Ha Ha. This is me and only me. Hello World. Ha Ha Ha. This is me and only me. Hello World. Ha Ha Ha. This is me and only me. Hello World. Ha Ha Ha. This is me and only me. Hello World. Ha Ha Ha. This is me and only me. Hello World. Ha Ha Ha. This is me and only me. Hello World. Ha Ha Ha. This is me and only me. Hello World. Ha Ha Ha. This is me and only me. Hello World. Ha Ha Ha. This is me and only me. Hello World. Ha Ha Ha. This is me and only me. Hello World. Ha Ha Ha. ', '2018-07-08 18:15:18', '2018-07-09 21:22:44', NULL, 'anish', 165, 1, 'Anish Ghimire', 'student'),
(6, 'Hello World ', 'poem', 'Hi', '2018-07-08 22:45:57', '2018-07-08 22:45:57', NULL, 'anish', 0, 0, 'Anish Ghimire', 'student'),
(7, 'Hello World ', 'poem', 'Hi', '2018-07-08 22:47:05', '2018-07-08 22:47:05', NULL, 'anish', 0, 0, 'Anish Ghimire', 'student'),
(8, 'Hello', 'poem', 'Hi', '2018-07-08 22:47:17', '2018-07-08 22:47:17', NULL, 'anish', 0, 0, 'Anish Ghimire', 'student'),
(9, 'xyzabc', 'story', 'sadsad', '2018-07-08 22:59:53', '2018-07-08 22:59:53', NULL, 'anish', 0, 0, 'Anish Ghimire', 'student'),
(10, 'Anurag lai ', 'poem', 'Taali', '2018-07-08 23:00:39', '2018-07-08 23:00:39', NULL, 'anish', 0, 0, 'Anish Ghimire', 'student');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `comment_id` int(11) NOT NULL,
  `content` varchar(500) NOT NULL,
  `commented_by` varchar(30) DEFAULT NULL,
  `article_id` int(11) DEFAULT NULL,
  `login_type` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`comment_id`, `content`, `commented_by`, `article_id`, `login_type`) VALUES
(3, 'lollll', 'commented_by', 4, NULL),
(4, 'hello', 'anish', 4, NULL),
(5, 'hello', 'anish', 4, NULL),
(6, 'jkshjgah', 'anish', 4, NULL),
(7, 'abshg', 'anish', 4, NULL),
(8, 'mnsbdhg', 'anish', 4, NULL),
(9, 'ahsghg', 'anish', 4, ''),
(10, 'anurag', 'anish', 4, 'student'),
(11, 'trying ', 'anish', 4, 'student'),
(12, 'this  comment is going to be some what longer for experiment purposethis  comment is going to be some what longer for experiment purpose', 'anish', 4, 'student'),
(13, 'hello', '', 4, ''),
(14, 'world', '', 4, ''),
(15, 'comment', 'admin', 3, 'admin'),
(16, 'asgdjg', '', 3, ''),
(17, 'kjashkjdh', '', 3, '');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `name` varchar(50) DEFAULT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(100) DEFAULT NULL,
  `photo` varchar(100) DEFAULT NULL,
  `approved` tinyint(1) DEFAULT NULL,
  `enrolled_on` year(4) DEFAULT NULL,
  `faculty` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`name`, `username`, `password`, `photo`, `approved`, `enrolled_on`, `faculty`) VALUES
('Anish Ghimire', 'anish', '00909ce6ddcf6a515fd005cd2fcf1a2d08081d56', 'link', 0, 2016, 'bim'),
('Anurag', 'anurag', '1495a6c76217f4c88be2376336da0a0d36cd880d', 'link', 0, 2003, 'bba');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `name` varchar(50) DEFAULT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `photo` varchar(100) DEFAULT NULL,
  `approved` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`name`, `username`, `password`, `photo`, `approved`) VALUES
('Anurag Regmi', 'anurag', '1495a6c76217f4c88be2376336da0a0d36cd880d', 'link', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`article_id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`comment_id`),
  ADD KEY `article_id` (`article_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `article_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`article_id`) REFERENCES `article` (`article_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
