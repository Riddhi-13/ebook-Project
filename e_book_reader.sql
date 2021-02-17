-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 13, 2021 at 04:09 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `ISBN_no` varchar(30) NOT NULL,
  `book_name` varchar(50) NOT NULL,
  `author` varchar(80) NOT NULL,
  `edition` int(11) DEFAULT NULL,
  `publisher_name` varchar(80) NOT NULL,
  `year_of_publication` int(4) NOT NULL,
  `description` longtext NOT NULL,
  `category` varchar(40) NOT NULL,
  `image` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`ISBN_no`, `book_name`, `author`, `edition`, `publisher_name`, `year_of_publication`, `description`, `category`, `image`) VALUES
('1000001', '21 days of effective communication_ everyday habit', 'IAN TUHOVSKY', 1, 'Createspace Independent Publishing Platform', 2018, 'Discover how unlocking the hidden secrets to successful communication can create powerful, changes across all areas of your life.', 'Self development books', ''),
('1000002', 'Stop Procrastinating', 'NILS SALZGEBER', 1, 'Createspace Independent Publishing Platform', 2018, ' A Simple Guide to Hacking Laziness, Building Self Discipline, and Overcoming Procrastination', 'Self development books', ''),
('1000003', 'The now habit', 'NEIL FIORE', NULL, 'Penguin USA', 2007, 'A Strategic Program for Overcoming Procrastination and Enjoying Guilt-Free Play', 'Self development books', ''),
('1000004', 'Daily Self-Discipline', 'Martin Meadows', NULL, 'Meadows Publishing', 2015, 'Everyday Habits and Exercises to Build Self-Discipline and Achieve Your Goals', 'Self development books', ''),
('1000005', 'Eat That Frog!', 'Brian Tracy', 3, 'Berrett Koehler Publishers', 2018, '21 Great Ways to Stop Procrastinating and Get More Done in Less Time ', 'Self development books', ''),
('1000101', 'Boundaries', 'Dr. Henry Cloud and Dr. John Townsend', NULL, 'Zondervan', 2018, 'When to Say Yes, How to Say No, to Take Control of Your Life', 'Motivational', ''),
('1000102', 'The 5 Second Rule', 'Mel Robbins', NULL, 'Savio Republic', 2017, 'Transform your Life, Work, and Confidence with Everyday Courage', 'Motivational', ''),
('1000103', 'The Gifts of Imperfection', 'Brene Brown', NULL, 'Hazelden Publishing', 2010, 'Let Go of Who You Think You\'re Supposed to Be and Embrace Who You Are', 'Motivational', ''),
('1000104', 'The Purpose-Driven Life', 'Rick Warren', NULL, 'Zondervan', 2004, 'What on Earth Am I Here For', 'Motivational', ''),
('1000105', 'Living in the Light', 'Shakti Gawain', NULL, 'Bantam', 1993, 'A Guide To Personal And Planetary Transformation', 'Motivational', ''),
('1000201', 'Essentials of Medical Microbiology ', 'Rajesh Bhatia and Rattan Lal ichhpujani', 4, 'JAYPEE BROTHERS MEDICAL PUBLISHERS (P) LTD', 2008, 'Medical microbiology is the science which deals with the study of\r\norganisms that cause infectious diseases.', 'Educational books', ''),
('1000202', 'Encyclopedia of Biology', 'Don Rittner , Timothy L. McCabe ', NULL, 'Facts On File Inc', 2004, 'The Encyclopedia of Biology pulls together the specialized terminology that has found its way into the language of the biologist', 'Educational books', ''),
('1000203', 'Encyclopedia of Mathematics Education', 'Stephen Lerman', NULL, 'Springer Reference', 2014, 'The encyclopedia is intended to be a comprehensive reference text, covering\r\nevery topic in the field of mathematics education research with entries\r\nranging from short descriptions to much longer ones where the topic warrants\r\nmore elaboration.', 'Educational books', ''),
('1000301', 'Grimms’ Fairy Tales', 'Jacob and ‎Wilhelm Grimm', 1, 'Maple Press', 2014, 'Popularly known as the \'Grimm Brothers\', Jacob and Wilhelm are well-received for their contribution in reviving the oral tradition of German folklore. In their attempt to preserve the Germanic literary tradition, they collected stories from the countryside, appealingly rewrote and published them as *Grimms’ Fairy Tales.*', 'Fantasy books', ''),
('1000302', 'alices-adventures-in-wonderland', 'Lewis Carroll', NULL, 'Puffin', 1865, 'On an ordinary summer\'s afternoon, Alice tumbles down a hole and an extraordinary adventure begins. In a strange world with even stranger characters, she meets a rabbit with a pocket watch, joins a Mad Hatter\'s Tea Party, and plays croquet with the Queen! Lost in this fantasy land, Alice finds herself growing more and more curious by the minute.....', 'Fantasy books', ''),
('1000402', 'heart-of-darkness', 'Joseph Conrad', NULL, 'Green Integer ', 2003, 'Heart of Darkness, a novel by Joseph Conrad, was originally a three-part series in Blackwood\'s Magazine in 1899. It is a story within a story, following a character named Charlie Marlow, who recounts his adventure to a group of men onboard an anchored ship. ', 'Fantasy books', ''),
('1000501', 'The Rebel Doctor\'s Bride ', 'Sarah Morgan', NULL, 'Harlequin ', 2008, 'Bad boy surgeon Connor MacNeil is greeted with a less-than-sparkling welcome when he returns to his hometown as the local doctor and must put to rest his past demons when he and nurse Flora Harris discover a fiery attraction to each other.', 'Romance', ''),
('1000502', 'Accidental Wife', 'Leclaire', NULL, 'Harlequin', 1996, 'Fairytale Weddings Trilogy', 'Romance', ''),
('1000503', 'The Bride\'s Baby', 'Liz Fielding', NULL, 'Harlequin', 2008, 'For 60 years, Harlequin has been\r\nproviding millions of women with\r\npure reading pleasure.\r\nWe hope you enjoy this great story!', 'Romance', ''),
('1000601', 'The Classic Horror Stories', 'H. P. Lovecraft', NULL, 'OUP Oxford', 2016, 'This book is a testament to Lovecraft\'s enduring ability to thrill us while simultaneously scaring us stupid', 'Horror', ''),
('1000602', 'Year\'s Best Horror Stories XVIII ', 'Karl Edward Wagner, Les Edwards', 1, 'Karl Edward Wagner', 1990, 'Imagination can be a terrible revenge when a storybook\r\ncharacter takes on a life of his own....\r\nThese are just a few of the twenty-six dwelling places\r\nof terror you\'ll visit in', 'Horror', ''),
('1000603', '51 Sleepless Nights', 'Tobias Wade', 2, 'Createspace Independent Publishing Platform', 2017, 'Thriller short story collection about Demons, Undead, Paranormal, Psychopaths, Ghosts, Aliens, and Mystery', 'Horror', ''),
('1000701', 'Art of Drawing The Human Body', 'Edgar Loy Fankbonner', NULL, 'Sterling', 2008, 'This sequel to Art of Drawing offers a large format, vibrant illustrations, and instruction.', 'Science Fiction', ''),
('1000702', 'Knits for Nerds', 'Joan of Dark a.k.a Toni Carr', NULL, 'Andrews McMeel Publishing', 2012, '30 Projects_ Science Fiction, Comic Books, Fantasy', 'Science Fiction', ''),
('1000703', 'Time Machine Tales', 'Paul J. Nahin', 1, 'Springer', 2016, 'The Science Fiction Adventures and Philosophical Puzzles of Time Travel', 'Science Fiction', '');

-- --------------------------------------------------------

--
-- Table structure for table `downloads`
--

CREATE TABLE `downloads` (
  `email` varchar(30) NOT NULL,
  `ISBN_no` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `manages`
--

CREATE TABLE `manages` (
  `admin_id` varchar(50) NOT NULL,
  `ISBN_no` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `my_library`
--

CREATE TABLE `my_library` (
  `email` varchar(30) NOT NULL,
  `ISBN_no` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `reader`
--

CREATE TABLE `reader` (
  `email` varchar(30) NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `email` varchar(30) NOT NULL,
  `ISBN_no` varchar(30) NOT NULL,
  `date` date NOT NULL,
  `content` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`ISBN_no`);

--
-- Indexes for table `downloads`
--
ALTER TABLE `downloads`
  ADD PRIMARY KEY (`email`,`ISBN_no`),
  ADD KEY `fk_books` (`ISBN_no`);

--
-- Indexes for table `manages`
--
ALTER TABLE `manages`
  ADD PRIMARY KEY (`admin_id`,`ISBN_no`),
  ADD KEY `fk_manage_books` (`ISBN_no`);

--
-- Indexes for table `my_library`
--
ALTER TABLE `my_library`
  ADD PRIMARY KEY (`email`,`ISBN_no`),
  ADD KEY `fk_books_lib` (`ISBN_no`);

--
-- Indexes for table `reader`
--
ALTER TABLE `reader`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`email`,`ISBN_no`),
  ADD KEY `book_review` (`ISBN_no`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `downloads`
--
ALTER TABLE `downloads`
  ADD CONSTRAINT `fk_books` FOREIGN KEY (`ISBN_no`) REFERENCES `books` (`ISBN_no`),
  ADD CONSTRAINT `fk_reader` FOREIGN KEY (`email`) REFERENCES `reader` (`email`);

--
-- Constraints for table `manages`
--
ALTER TABLE `manages`
  ADD CONSTRAINT `fk_admin` FOREIGN KEY (`admin_id`) REFERENCES `admin` (`id`),
  ADD CONSTRAINT `fk_manage_books` FOREIGN KEY (`ISBN_no`) REFERENCES `books` (`ISBN_no`);

--
-- Constraints for table `my_library`
--
ALTER TABLE `my_library`
  ADD CONSTRAINT `fk_books_lib` FOREIGN KEY (`ISBN_no`) REFERENCES `books` (`ISBN_no`),
  ADD CONSTRAINT `fk_reader_lib` FOREIGN KEY (`email`) REFERENCES `reader` (`email`);

--
-- Constraints for table `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `book_review` FOREIGN KEY (`ISBN_no`) REFERENCES `books` (`ISBN_no`),
  ADD CONSTRAINT `reader_review` FOREIGN KEY (`email`) REFERENCES `reader` (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
