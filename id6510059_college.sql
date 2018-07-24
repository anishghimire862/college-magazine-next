-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 22, 2018 at 01:24 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id6510059_college`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `approved` tinyint(1) NOT NULL DEFAULT '1',
  `name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`, `approved`, `name`) VALUES
('admin', 'f070d1cfcfb687ee722f18b4941a9ad1910576dc', 1, 'Admin Bahadur');

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
(28, 'She, an Angel', 'poem', 'untold stories, hidden scars,\r\npain behind her smile.\r\ntried to kill herself,\r\nstill alive,\r\nmaybe god has something more to give.\r\n\r\nshe, an angel.\r\nprincess of her dad.\r\nunfortunately, \r\nhe thought her a bitch.\r\nused her body,\r\nditched her and she is now a slut.\r\n\r\ntwinkling stars,\r\nshe stares at,\r\ntears fall from her eyes. \r\nnobody to hold her hand, \r\nhe is at the bar.\r\n\r\nperplexed you, \r\nstill in remorse.\r\nhow can i make you understand, \r\nunrequited love kills?\r\n\r\nsmile suits you, \r\nbetter than those tears.\r\nnow, hide your pain.\r\nconceal your scars. \r\nshow him your real worth.\r\n\r\ndon\'t feel so cold, be bold. \r\nits time to move on \r\na lot more is yet to come.\r\n', '2018-07-18 12:53:36', '2018-07-22 09:45:34', NULL, 'anishghimire', 59, 1, 'Anish Ghimire', 'student'),
(29, 'I believe...', 'poem', 'I can see the sun\'s ray have \r\nagain fallen in the rain \r\nand I believe \r\nthere\'s always an angel \r\nwho show the reflection of rainbow. \r\nIt\'s a harsh world full of fake smile \r\nand amusement, temperament \r\nthey make and I believe \r\nthere\'s always an angel \r\nwho got a duty, \r\ngrow a blossom to depict \r\nthem the real beauty \r\nThey say after every down\'s \r\nthere\'s an up who goes down \r\nalso reaches the top \r\nAfter every murk there\'s a light \r\nAfter every wrong there\'s a right \r\nAnd i believe there\'s always an angel \r\nwho does this miracle \r\nentire world is on war \r\neverybody\'s disgrace here \r\nto create a hate to create a gap, \r\nmake people far Instead of \r\na pleasant talk it takes form \r\nof a debate and I believe \r\nthere\'s always an angel \r\nwho appears as dove, \r\nteaches the people \r\nhow to love \r\nThere\'s always an angel, \r\nthe symbol of decency \r\nwho know the ways \r\nto accomplish the problem \r\nwith efficiency. \r\nShe is the queen \r\nof optimistic fancy \r\nthe mountains, \r\noceans, \r\nisland and all the nature’s beauty \r\nwho drew, who assists \r\nevery time to form a friendly crew. \r\nthe alcohol of love,\r\nbeauty,\r\nperfection, \r\nvirtue, \r\ngrace and courteousness \r\nwho brew, \r\nI strongly believe \r\nthat this angel is YOU\r\n\r\n--Article by: Riyasha Dahal', '2018-07-18 12:58:11', '2018-07-22 09:45:26', NULL, 'anishghimire', 5, 1, 'Anish Ghimire', 'student'),
(32, 'The Essance of Sanatan Dharma ', 'others', 'Mostly, considered as the most oldest, predominant and indigenous religion, of the indian subcontinent, Hinduism is known to its followers as Sanatan Dharma. Hinduism has no single founder and is formed of diverse traditions including wide spectrum of locus and prescriptions of daily morality based on the notion of karma, drama and societal norms. The basic, features include diversity, lack of compulsion and the richness of the various ways it makes its followers practice its beliefs and tradition. Taking about the real meaning of Hinduism. Hinduism never compels anyone to go through any hard and fast rules and regulations. It is very open about following the beliefs and ways of thinking mentioned in the sared books. There are many weaknesses in the belief of Hinduism, mostly witchcraft, sati, and taboos on love marriage. Unfortunately these are practised by fake god men but Hinduism describes God in a very different way. Hinduism is like a river and its followers are the water molecules. The moment these molecules leave the source, the river gives them their purpose to always progress towards the destination, the vast infinite ocean. The molecules stumble, crumble and tumble, but the river shows them the right path. Molecules pass through the beautiful mountains and cities, sometimes through rocky mountains but the river tells them the value of happiness and sadness on the path of the journey. The molecules of mountain show their true identity, it tells molecules that the inner self is all that matters while the external is temporary and in significant. The molecules may deviate and go through many difficulties but the natural cycle always brings them back to the river and the river readily leads them to the ocean. This is the essence of Hinduism; it gives a path, a guiding light to an individual, so that he/she can merge with the infinite one. It only expresses the identity of the inner self which is untouched by the external world. It teaches us that every part of life like success, failure, sadness and happiness are an integral part of one\'s journey and one shouldn\'t get influenced, discouraged or distracted by these forces. There is no definite way to reach the infinite, Hinduism is open and dynamic. It has received invaluable contribution from great saints, but unfortunately at some time, it has also become corrupted from fake god men and selfish saints who misinterpret and misguide other primarily for their own benefits. In a nutshell, the essence of Hinduism is freedom. The teachings of Hinduism can be summarized as \"be morally perfect, experience truth and be free.\" \r\n\r\n--Article by: Narayan Koirala', '2018-07-18 13:01:14', '2018-07-22 09:45:47', NULL, 'anishghimire', 14, 1, 'Anish Ghimire', 'student'),
(36, 'a long time', 'others', 'a long time has passed by since we both choosed two different paths. time has played a trick and changed both of us but I still remember the taste of your lips, I can still feel the sweet smell of perfume coming from your body. sometimes when I am all alone, I ponder. ponder about every possibilities which made us apart. but every time I end up with a smile, it was not your fault, neither it was mine. it was the unwanted ego and attitude that came in between. ', '2018-07-22 09:50:33', '2018-07-22 09:50:33', NULL, 'anishghimire', 0, 0, 'Anish Ghimire', 'student'),
(37, 'Everyday', 'others', 'Everyday I wake up with a hope to start a new day, a new chapter. No matter how hard I try, I fail. I still stuck in reverse. I am still living in the past. The broken promises of being together haunts me time and again.\r\n\r\nI guess these bitter experiences provided me the will to live my life to the fullest. Your promises made me believe the world is full of liars and realized at least I need to be true. Maybe, that painful separation without a final goodbye made me who I am today.', '2018-07-22 09:51:51', '2018-07-22 09:51:51', NULL, 'anishghimire', 0, 0, 'Anish Ghimire', 'student'),
(38, 'World I live in', 'poem', 'The world I live in,\r\nfull of anger and hate.\r\nNothing that reminds of humanity left.\r\nDeath is the ultimate prize,\r\neven after knowing this,\r\nwe are in a race.\r\nWe run to be better than the others,\r\nwe run to be on the top.\r\nBut at the highest peak,\r\nthere is nothing,\r\nbut a lake of fire.', '2018-07-22 09:52:23', '2018-07-22 09:54:01', NULL, 'anishghimire', 2, 1, 'Anish Ghimire', 'student');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `comment_id` int(11) NOT NULL,
  `content` varchar(500) NOT NULL,
  `commented_by` varchar(30) DEFAULT NULL,
  `article_id` int(11) DEFAULT NULL,
  `login_type` varchar(20) DEFAULT NULL,
  `photo` varchar(100) DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`comment_id`, `content`, `commented_by`, `article_id`, `login_type`, `photo`) VALUES
(1, 'nice poem.', 'sarojkafle', 28, 'student', '../profile-picture/IMG_20171123_165926.jpg'),
(2, 'nice.', 'krrishghimire', 28, 'teacher', '../../profile-picture/user-image.jpg'),
(3, 'Good Article', 'anuragregmi', 32, 'teacher', '../profile-picture/IMG_0662.HEIC'),
(7, 'Nice article bro', 'dipak', 28, 'student', '../profile-picture/IMG_20170124_212537.jpg'),
(8, 'sahi ho ', 'krrishghimire', 28, 'teacher', '../../profile-picture/user-image.jpg'),
(9, 'sahi ho ', 'krrishghimire', 28, 'teacher', '../../profile-picture/user-image.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `name` varchar(50) DEFAULT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(100) DEFAULT NULL,
  `photo` varchar(100) DEFAULT '../profile-picture/user-image.jpg',
  `approved` tinyint(1) DEFAULT NULL,
  `enrolled_on` year(4) DEFAULT NULL,
  `faculty` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`name`, `username`, `password`, `photo`, `approved`, `enrolled_on`, `faculty`) VALUES
('Anish Ghimire', 'anishghimire', 'b8957b00b36644115e23761b858607e3d9684237', '../profile-picture/IMG-0355a97b4f529f92f9bf6738b8b8bd20-V.jpg', 1, 2016, 'bim'),
('Dipak Raj badu', 'dipak', '1b28365038032e6acfb0797300d0f8aad5c462ed', '../profile-picture/IMG_20170124_212537.jpg', 1, 2016, 'bim'),
('Saroj Kafle', 'sarojkafle', '8d80df36f59b5cf96f77a0a6cf9b984fe8139662', '../profile-picture/IMG_20171123_165926.jpg', 1, 2016, 'bim'),
('Student Student', 'student', 'c932b46f5721df6d3b911079eaeb71763c76ff57', '../profile-picture/user-image.jpg', 1, 2016, 'bim');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `name` varchar(50) DEFAULT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `photo` varchar(100) DEFAULT '../../profile-picture/user-image.jpg',
  `approved` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`name`, `username`, `password`, `photo`, `approved`) VALUES
('Anurag Regmi', 'anuragregmi', '9a9bdb7c972ed35f9d052c791617656cb69b6d7b', '../profile-picture/IMG_0662.HEIC', 1),
('Krrish Ghimire', 'krrishghimire', '4b953afddeae3359b1776befb109099c28b727e6', '../../profile-picture/user-image.jpg', 1),
('student', 'student', 'c932b46f5721df6d3b911079eaeb71763c76ff57', '../../profile-picture/user-image.jpg', 1),
('Teacher Teacher', 'teacher', '495e6da7bbb160484f88dbe8a030773e47494a23', '../../profile-picture/user-image.jpg', 1),
('Teacher Teacher', 'teachher', '495e6da7bbb160484f88dbe8a030773e47494a23', '../../profile-picture/user-image.jpg', 1);

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
  MODIFY `article_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

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
