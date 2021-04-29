-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 29, 2021 at 11:59 AM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e_book_reader`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

DROP TABLE IF EXISTS `books`;
CREATE TABLE IF NOT EXISTS `books` (
  `ISBN_no` int(30) NOT NULL AUTO_INCREMENT,
  `book_name` varchar(50) NOT NULL,
  `author` varchar(80) NOT NULL,
  `edition` int(11) DEFAULT NULL,
  `publisher_name` varchar(80) NOT NULL,
  `year_of_publication` int(4) NOT NULL,
  `description` longtext NOT NULL,
  `category` varchar(40) NOT NULL,
  `image` varchar(80) NOT NULL,
  `pdf_name` varchar(150) NOT NULL,
  PRIMARY KEY (`ISBN_no`)
) ENGINE=InnoDB AUTO_INCREMENT=1000730 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`ISBN_no`, `book_name`, `author`, `edition`, `publisher_name`, `year_of_publication`, `description`, `category`, `image`, `pdf_name`) VALUES
(1000001, '21 days of effective communication_ everyday habit', 'IAN TUHOVSKY', 1, 'Createspace Independent Publishing Platform', 2018, 'Discover how unlocking the hidden secrets to successful communication can create powerful, changes across all areas of your life.', 'Self development books', 'communication_ everyday.jpg', '21 days of effective communication_ everyday habits.pdf'),
(1000002, 'Stop Procrastinating', 'NILS SALZGEBER', 1, 'Createspace Independent Publishing Platform', 2018, ' A Simple Guide to Hacking Laziness, Building Self Discipline, and Overcoming Procrastination', 'Self development books', 'Stop Procrastinating.jpg', 'Stop Procrastinating.pdf'),
(1000003, 'The now habit', 'NEIL FIORE', NULL, 'Penguin USA', 2007, 'A Strategic Program for Overcoming Procrastination and Enjoying Guilt-Free Play', 'Self development books', 'The now habit.jpg', 'The now habit_ a strategic program for overcoming procrastination.pdf'),
(1000004, 'Daily Self-Discipline', 'Martin Meadows', NULL, 'Meadows Publishing', 2015, 'Everyday Habits and Exercises to Build Self-Discipline and Achieve Your Goals', 'Self development books', 'Daily Self-Discipline.jpg', 'Daily Self-Discipline_ Everyday Habits and Exercises to Build Self-Discipline and Achieve Your Goals.pdf'),
(1000005, 'Eat That Frog!', 'Brian Tracy', 3, 'Berrett Koehler Publishers', 2018, '21 Great Ways to Stop Procrastinating and Get More Done in Less Time ', 'Self development books', 'Eat That Frog!.jpg', 'Eat That Frog! 21 Great Ways to Stop Procrastinating.pdf'),
(1000101, 'Boundaries', 'Dr. Henry Cloud and Dr. John Townsend', NULL, 'Zondervan', 2018, 'When to Say Yes, How to Say No, to Take Control of Your Life', 'Motivational', 'Boundaries.jpg', 'Boundaries_ When to Say Yes.pdf'),
(1000102, 'The 5 Second Rule', 'Mel Robbins', NULL, 'Savio Republic', 2017, 'Transform your Life, Work, and Confidence with Everyday Courage', 'Motivational', 'The 5 Second Rule.jpg', 'The 5 Second Rule_ Transform your Life, Work,.pdf'),
(1000103, 'The Gifts of Imperfection', 'Brene Brown', NULL, 'Hazelden Publishing', 2010, 'Let Go of Who You Think You\'re Supposed to Be and Embrace Who You Are', 'Motivational', 'The Gifts of Imperfection.jpg', 'The Gifts of Imperfection_ Embrace Who You Are.pdf'),
(1000104, 'The Purpose-Driven Life', 'Rick Warren', NULL, 'Zondervan', 2004, 'What on Earth Am I Here For', 'Motivational', 'The Purpose-Driven Life.jpg', 'The Purpose-Driven Life.pdf'),
(1000105, 'Living in the Light', 'Shakti Gawain', NULL, 'Bantam', 1993, 'A Guide To Personal And Planetary Transformation', 'Motivational', 'Living in the Light.jpg', 'Living in the Light_ A guide to personal transformation.pdf'),
(1000201, 'Essentials of Medical Microbiology ', 'Rajesh Bhatia and Rattan Lal ichhpujani', 4, 'JAYPEE BROTHERS MEDICAL PUBLISHERS (P) LTD', 2008, 'Medical microbiology is the science which deals with the study of\r\norganisms that cause infectious diseases.', 'Educational books', 'Essentials of Medical Microbiology.jpg', 'Essentials of Medical Microbiology.pdf'),
(1000202, 'Encyclopedia of Biology', 'Don Rittner , Timothy L. McCabe ', NULL, 'Facts On File Inc', 2004, 'The Encyclopedia of Biology pulls together the specialized terminology that has found its way into the language of the biologist', 'Educational books', 'Encyclopedia of Biology.jpg', 'Encyclopedia of Biology.pdf'),
(1000203, 'Encyclopedia of Mathematics Education', 'Stephen Lerman', NULL, 'Springer Reference', 2014, 'The encyclopedia is intended to be a comprehensive reference text, covering\r\nevery topic in the field of mathematics education research with entries\r\nranging from short descriptions to much longer ones where the topic warrants\r\nmore elaboration.', 'Educational books', 'Encyclopedia of Mathematics.jpg', 'Encyclopedia of Mathematics Education.pdf'),
(1000301, 'Grimms’ Fairy Tales', 'Jacob and ‎Wilhelm Grimm', 1, 'Maple Press', 2014, 'Popularly known as the \'Grimm Brothers\', Jacob and Wilhelm are well-received for their contribution in reviving the oral tradition of German folklore. In their attempt to preserve the Germanic literary tradition, they collected stories from the countryside, appealingly rewrote and published them as *Grimms’ Fairy Tales.*', 'Fantasy books', 'Grimms Fairy Tales.jpg', 'grimms-fairy-tales.pdf'),
(1000302, 'alices-adventures-in-wonderland', 'Lewis Carroll', NULL, 'Puffin', 1865, 'On an ordinary summer\'s afternoon, Alice tumbles down a hole and an extraordinary adventure begins. In a strange world with even stranger characters, she meets a rabbit with a pocket watch, joins a Mad Hatter\'s Tea Party, and plays croquet with the Queen! Lost in this fantasy land, Alice finds herself growing more and more curious by the minute.....', 'Fantasy books', 'alices-adventures-in-wonderland.jpg', 'alices-adventures-in-wonderland.pdf'),
(1000402, 'heart-of-darkness', 'Joseph Conrad', NULL, 'Green Integer ', 2003, 'Heart of Darkness, a novel by Joseph Conrad, was originally a three-part series in Blackwood\'s Magazine in 1899. It is a story within a story, following a character named Charlie Marlow, who recounts his adventure to a group of men onboard an anchored ship. ', 'Fantasy books', 'heart-of-darkness.jpg', 'heart-of-darkness.pdf'),
(1000501, 'The Rebel Doctor\'s Bride ', 'Sarah Morgan', NULL, 'Harlequin ', 2008, 'Bad boy surgeon Connor MacNeil is greeted with a less-than-sparkling welcome when he returns to his hometown as the local doctor and must put to rest his past demons when he and nurse Flora Harris discover a fiery attraction to each other.', 'Romance', 'rebbel_doctors_wife.jpg', 'The Rebel Doctor\'s Bride (Harlequin Medical Romance).pdf'),
(1000502, 'Accidental Wife', 'Leclaire', NULL, 'Harlequin', 1996, 'Fairytale Weddings Trilogy', 'Romance', 'accidental_wife.jpg', 'Accidental Wife.pdf'),
(1000503, 'The Bride\'s Baby', 'Liz Fielding', NULL, 'Harlequin', 2008, 'For 60 years, Harlequin has been\r\nproviding millions of women with\r\npure reading pleasure.\r\nWe hope you enjoy this great story!', 'Romance', 'the_brides_baby.jpg', 'The Bride\'s Baby (Harlequin Romance).pdf'),
(1000601, 'The Classic Horror Stories', 'H. P. Lovecraft', NULL, 'OUP Oxford', 2016, 'This book is a testament to Lovecraft\'s enduring ability to thrill us while simultaneously scaring us stupid', 'Horror', 'classic horror stories.jpg', 'The Classic Horror Stories - H. P. Lovecraft.pdf'),
(1000602, 'Year\'s Best Horror Stories XVIII ', 'Karl Edward Wagner, Les Edwards', 1, 'Karl Edward Wagner', 1990, 'Imagination can be a terrible revenge when a storybook\r\ncharacter takes on a life of his own....\r\nThese are just a few of the twenty-six dwelling places\r\nof terror you\'ll visit in', 'Horror', 'the_years_best _horror.jpg', 'Karl Edward Wagner - Year\'s Best Horror Stories.pdf'),
(1000603, '51 Sleepless Nights', 'Tobias Wade', 2, 'Createspace Independent Publishing Platform', 2017, 'Thriller short story collection about Demons, Undead, Paranormal, Psychopaths, Ghosts, Aliens, and Mystery', 'Horror', '51_sleepless_nights.jpg', 'Horror Stories_ 51 Sleepless Nights_ Thriller.pdf'),
(1000701, 'Art of Drawing The Human Body', 'Edgar Loy Fankbonner', NULL, 'Sterling', 2008, 'This sequel to Art of Drawing offers a large format, vibrant illustrations, and instruction.', 'Science Fiction', 'art of draing the humn body.jpg', 'small-size-drawing-the-human-body.pdf'),
(1000702, 'Knits for Nerds', 'Joan of Dark a.k.a Toni Carr', NULL, 'Andrews McMeel Publishing', 2012, '30 Projects_ Science Fiction, Comic Books, Fantasy', 'Science Fiction', 'knit for nerds.jpg', 'Knits for Nerds_ 30 Projects_ Science Fiction, Comic Books, Fantasy.pdf'),
(1000703, 'Time Machine Tales', 'Paul J. Nahin', 1, 'Springer', 2016, 'The Science Fiction Adventures and Philosophical Puzzles of Time Travel', 'Science Fiction', 'the timemachine tales.jpg', 'Time Machine Tales.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `reader`
--

DROP TABLE IF EXISTS `reader`;
CREATE TABLE IF NOT EXISTS `reader` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(30) NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reader`
--

INSERT INTO `reader` (`id`, `email`, `name`, `password`) VALUES
(26, 'te@gmail.com', 'te', '$2y$10$VveontkEVtE1TiSldON70u89gUuVQKCqQsdCadtz0FxksmElcZ0pu'),
(27, 'mca.1905@unigoa.ac.in', 'Riddhi', '$2y$10$HnICgFO7Lj3P1z.i6iWkuuyD6Ir0TJ6m3wWAKrtqlPGzDj5m4tPw2'),
(28, 'sam@gmail.com', 'sam', '$2y$10$gVGWpwmdIOOEmaV.XavGCuNUvlqFdY8qsHF5Myn6gGw1eKtBX6R7K'),
(29, 'rii@gm.com', 'riya', '$2y$10$yaSDWSa1kzLWrNuxY9LkmO.rMp5HWjI4U.YRMxq5NvF7n.4hgU876'),
(30, 'rideg@gmail.com', 'rid', '$2y$10$Un0MZAIO2HgEedRtlF0emeK2zxXyE4RlCMiRysxmzM.7wxX5VYEk6'),
(31, 'rinky@gmail.com', 'rinky', '$2y$10$U4Rk1eTxLs.ICQZpJvElseO5imq6YGF4bySksrdItKGb72/2aBRaC'),
(32, 're@gmail.com', 'Riddhi', '$2y$10$6aTpxUwCNx1KlcBJvGcz2uKPRg.bk3Wn6.CJ6XwetLBqBqSm8k45O'),
(33, 'raj@gmail.com', 'raj', '$2y$10$Ri2jP9gwpyt3bTHLofE6QupmvphKCHHpBLT2SynpZzaihA25p6jZK'),
(34, 'd@gmail.com', 'doisy', '$2y$10$PRD7jk3wT3Qti7j.uPmueOacp8F69hyK49gDRIWFgQS3YwTa7OjmC'),
(35, 'tanvi@gmail.com', 'tanvi', '$2y$10$wTF5oLoXDJEG5akuhEYA4.5fF.FC68HCQnb7DXsij5PRG2mhAG5Hy'),
(36, 'priya@gmail.com', 'Priya', '$2y$10$lJSTOcyIw1YTVFt8vrqfre9iG4TNgDfKFRZu3L2Wsvfp5YKOjrnIi'),
(37, 'srushti@gmail.com', 'Srushti', '$2y$10$frdV.LRdDNjIARGh8o3slOG8z7RtoY6veepWlZLx4MjD2C9EqOt2i'),
(39, 'priyamajalikar@gmail.com', 'Priya Majalikar', '$2y$10$oVAEwRPDsqq9..MX2wlLGemF25LGsNAOr.NmLBmXZz5e5uDIaHRu.'),
(40, 'doisydias@gmail.com', 'doisy dias', '$2y$10$yzDYIAIMZ4oXJLr4a7I9p.m.ONc7g2ILPdkiw1v70GgUmkLC52OMy'),
(41, 'melvin@gmail.com', 'melvin', '$2y$10$BPGkzL3u30.T8jkMZV9Yu.bIwVDwH4uJtfX2.DdQ0uvfReL/jF/yS');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

DROP TABLE IF EXISTS `reviews`;
CREATE TABLE IF NOT EXISTS `reviews` (
  `id` int(11) NOT NULL,
  `ISBN_no` int(11) NOT NULL,
  `review` varchar(200) NOT NULL,
  PRIMARY KEY (`id`,`ISBN_no`),
  KEY `ISBN_no` (`ISBN_no`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `ISBN_no`, `review`) VALUES
(36, 1000002, 'good'),
(36, 1000101, 'Nice book'),
(36, 1000102, 'nice.'),
(36, 1000202, 'nice book'),
(36, 1000203, 'nice book'),
(36, 1000301, 'good book'),
(36, 1000601, 'nice'),
(37, 1000101, 'Nice');

-- --------------------------------------------------------

--
-- Table structure for table `user_queries`
--

DROP TABLE IF EXISTS `user_queries`;
CREATE TABLE IF NOT EXISTS `user_queries` (
  `q_id` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `subject` text NOT NULL,
  `msg` longtext NOT NULL,
  PRIMARY KEY (`q_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_queries`
--

INSERT INTO `user_queries` (`q_id`, `name`, `email`, `subject`, `msg`) VALUES
(1, 'mel', 'melvin@gmail.com', 'sugesstion', 'kjh'),
(2, 'dd', 'p@gmail.com', 'sugesstion1', 'the website is good'),
(3, 'tanvi', 'tanvi@gma.com', 'feedback', 'the overall websiite is good'),
(4, 'ridhi', 'ridhi05@gmail.com', 'complain', 'some of the books in romance section do not get displayed properly'),
(5, 'tanvita', 'tanvi@gma.com', 'complain', 'your overall website is good but there are some bugs which need to fix');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_ibfk_1` FOREIGN KEY (`id`) REFERENCES `reader` (`id`),
  ADD CONSTRAINT `reviews_ibfk_2` FOREIGN KEY (`ISBN_no`) REFERENCES `books` (`ISBN_no`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
