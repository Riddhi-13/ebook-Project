-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 01, 2021 at 07:04 AM
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
  `image` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`ISBN_no`, `book_name`, `author`, `edition`, `publisher_name`, `year_of_publication`, `description`, `category`, `image`) VALUES
('1000001', '21 days of effective communication_ everyday habit', 'IAN TUHOVSKY', 1, 'Createspace Independent Publishing Platform', 2018, 'Discover how unlocking the hidden secrets to successful communication can create powerful, changes across all areas of your life.', 'Self development books', 'communication_ everyday.jpg'),
('1000002', 'Stop Procrastinating', 'NILS SALZGEBER', 1, 'Createspace Independent Publishing Platform', 2018, ' A Simple Guide to Hacking Laziness, Building Self Discipline, and Overcoming Procrastination', 'Self development books', 'Stop Procrastinating.jpg'),
('1000003', 'The now habit', 'NEIL FIORE', NULL, 'Penguin USA', 2007, 'A Strategic Program for Overcoming Procrastination and Enjoying Guilt-Free Play', 'Self development books', 'The now habit.jpg'),
('1000004', 'Daily Self-Discipline', 'Martin Meadows', NULL, 'Meadows Publishing', 2015, 'Everyday Habits and Exercises to Build Self-Discipline and Achieve Your Goals', 'Self development books', 'Daily Self-Discipline.jpg'),
('1000005', 'Eat That Frog!', 'Brian Tracy', 3, 'Berrett Koehler Publishers', 2018, '21 Great Ways to Stop Procrastinating and Get More Done in Less Time ', 'Self development books', 'Eat That Frog!.jpg'),
('1000101', 'Boundaries', 'Dr. Henry Cloud and Dr. John Townsend', NULL, 'Zondervan', 2018, 'When to Say Yes, How to Say No, to Take Control of Your Life', 'Motivational', 'Boundaries.jpg'),
('1000102', 'The 5 Second Rule', 'Mel Robbins', NULL, 'Savio Republic', 2017, 'Transform your Life, Work, and Confidence with Everyday Courage', 'Motivational', 'The 5 Second Rule.jpg'),
('1000103', 'The Gifts of Imperfection', 'Brene Brown', NULL, 'Hazelden Publishing', 2010, 'Let Go of Who You Think You\'re Supposed to Be and Embrace Who You Are', 'Motivational', 'The Gifts of Imperfection.jpg'),
('1000104', 'The Purpose-Driven Life', 'Rick Warren', NULL, 'Zondervan', 2004, 'What on Earth Am I Here For', 'Motivational', 'The Purpose-Driven Life.jpg'),
('1000105', 'Living in the Light', 'Shakti Gawain', NULL, 'Bantam', 1993, 'A Guide To Personal And Planetary Transformation', 'Motivational', 'Living in the Light.jpg'),
('1000201', 'Essentials of Medical Microbiology ', 'Rajesh Bhatia and Rattan Lal ichhpujani', 4, 'JAYPEE BROTHERS MEDICAL PUBLISHERS (P) LTD', 2008, 'Medical microbiology is the science which deals with the study of\r\norganisms that cause infectious diseases.', 'Educational books', 'Essentials of Medical Microbiology.jpg'),
('1000202', 'Encyclopedia of Biology', 'Don Rittner , Timothy L. McCabe ', NULL, 'Facts On File Inc', 2004, 'The Encyclopedia of Biology pulls together the specialized terminology that has found its way into the language of the biologist', 'Educational books', 'Encyclopedia of Biology.jpg'),
('1000203', 'Encyclopedia of Mathematics Education', 'Stephen Lerman', NULL, 'Springer Reference', 2014, 'The encyclopedia is intended to be a comprehensive reference text, covering\r\nevery topic in the field of mathematics education research with entries\r\nranging from short descriptions to much longer ones where the topic warrants\r\nmore elaboration.', 'Educational books', 'Encyclopedia of Mathematics.jpg'),
('1000301', 'Grimms’ Fairy Tales', 'Jacob and ‎Wilhelm Grimm', 1, 'Maple Press', 2014, 'Popularly known as the \'Grimm Brothers\', Jacob and Wilhelm are well-received for their contribution in reviving the oral tradition of German folklore. In their attempt to preserve the Germanic literary tradition, they collected stories from the countryside, appealingly rewrote and published them as *Grimms’ Fairy Tales.*', 'Fantasy books', 'Grimms’ Fairy Tales.jpg'),
('1000302', 'alices-adventures-in-wonderland', 'Lewis Carroll', NULL, 'Puffin', 1865, 'On an ordinary summer\'s afternoon, Alice tumbles down a hole and an extraordinary adventure begins. In a strange world with even stranger characters, she meets a rabbit with a pocket watch, joins a Mad Hatter\'s Tea Party, and plays croquet with the Queen! Lost in this fantasy land, Alice finds herself growing more and more curious by the minute.....', 'Fantasy books', 'alices-adventures-in-wonderland.jpg'),
('1000402', 'heart-of-darkness', 'Joseph Conrad', NULL, 'Green Integer ', 2003, 'Heart of Darkness, a novel by Joseph Conrad, was originally a three-part series in Blackwood\'s Magazine in 1899. It is a story within a story, following a character named Charlie Marlow, who recounts his adventure to a group of men onboard an anchored ship. ', 'Fantasy books', 'heart-of-darkness.jpg'),
('1000501', 'The Rebel Doctor\'s Bride ', 'Sarah Morgan', NULL, 'Harlequin ', 2008, 'Bad boy surgeon Connor MacNeil is greeted with a less-than-sparkling welcome when he returns to his hometown as the local doctor and must put to rest his past demons when he and nurse Flora Harris discover a fiery attraction to each other.', 'Romance', 'rebbel_doctors_wife.jpg'),
('1000502', 'Accidental Wife', 'Leclaire', NULL, 'Harlequin', 1996, 'Fairytale Weddings Trilogy', 'Romance', 'accidental_wife.jpg'),
('1000503', 'The Bride\'s Baby', 'Liz Fielding', NULL, 'Harlequin', 2008, 'For 60 years, Harlequin has been\r\nproviding millions of women with\r\npure reading pleasure.\r\nWe hope you enjoy this great story!', 'Romance', 'the_brides_baby.jpg'),
('1000601', 'The Classic Horror Stories', 'H. P. Lovecraft', NULL, 'OUP Oxford', 2016, 'This book is a testament to Lovecraft\'s enduring ability to thrill us while simultaneously scaring us stupid', 'Horror', 'classic horror stories.jpg'),
('1000602', 'Year\'s Best Horror Stories XVIII ', 'Karl Edward Wagner, Les Edwards', 1, 'Karl Edward Wagner', 1990, 'Imagination can be a terrible revenge when a storybook\r\ncharacter takes on a life of his own....\r\nThese are just a few of the twenty-six dwelling places\r\nof terror you\'ll visit in', 'Horror', 'the_years_best _horror.jpg'),
('1000603', '51 Sleepless Nights', 'Tobias Wade', 2, 'Createspace Independent Publishing Platform', 2017, 'Thriller short story collection about Demons, Undead, Paranormal, Psychopaths, Ghosts, Aliens, and Mystery', 'Horror', '51_sleepless_nights.jpg'),
('1000701', 'Art of Drawing The Human Body', 'Edgar Loy Fankbonner', NULL, 'Sterling', 2008, 'This sequel to Art of Drawing offers a large format, vibrant illustrations, and instruction.', 'Science Fiction', 'art of draing the humn body.jpg'),
('1000702', 'Knits for Nerds', 'Joan of Dark a.k.a Toni Carr', NULL, 'Andrews McMeel Publishing', 2012, '30 Projects_ Science Fiction, Comic Books, Fantasy', 'Science Fiction', 'knit for nerds.jpg'),
('1000703', 'Time Machine Tales', 'Paul J. Nahin', 1, 'Springer', 2016, 'The Science Fiction Adventures and Philosophical Puzzles of Time Travel', 'Science Fiction', 'the timemachine tales.jpg');

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
-- Table structure for table `reader`
--

CREATE TABLE `reader` (
  `id` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(34, 'd@gmail.com', 'doisy', '$2y$10$PRD7jk3wT3Qti7j.uPmueOacp8F69hyK49gDRIWFgQS3YwTa7OjmC');

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
-- Indexes for table `manages`
--
ALTER TABLE `manages`
  ADD PRIMARY KEY (`admin_id`,`ISBN_no`),
  ADD KEY `fk_manage_books` (`ISBN_no`);

--
-- Indexes for table `reader`
--
ALTER TABLE `reader`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `reader`
--
ALTER TABLE `reader`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;