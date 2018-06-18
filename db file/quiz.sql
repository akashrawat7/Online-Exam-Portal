-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2018 at 04:40 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quiz`
--

-- --------------------------------------------------------

--
-- Table structure for table `quizz`
--

CREATE TABLE `quizz` (
  `id` int(100) NOT NULL,
  `ques` varchar(500) NOT NULL,
  `ans1` varchar(100) NOT NULL,
  `ans2` varchar(100) NOT NULL,
  `ans3` varchar(100) NOT NULL,
  `ans4` varchar(100) NOT NULL,
  `corr_ans` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quizz`
--

INSERT INTO `quizz` (`id`, `ques`, `ans1`, `ans2`, `ans3`, `ans4`, `corr_ans`) VALUES
(1, ' Which of the following JavaScript cannot do ?', ' JavaScript can react to events	', 'JavaScript can manipulate HTML elements	', 'JavaScript can be use to validate data.', ' All of the Above', 4),
(2, 'Whats so great about XML?', 'Easy data exchange', ' High speed on network	 ', ' Only B.is correct	', ' Both A & B', 4),
(3, 'Which is not a property of attribute Behaviour of Marquee tag?', 'alternate	 ', 'blur ', 'scroll	', 'slide', 2),
(4, ' The attribute used to define a new namespace is.', 'XMLNS	', ' XmlNameSpace', ' Xmlns', ' XmlNs', 3),
(5, 'Which CSS property can provide to add an effect when changing from one style to another without using Javascript?', ' Associations	', 'Transitions', 'Transistor	', 'None of the above', 2),
(6, 'Which tag(s) can handle mouse events in Netscape?', 'IMG tag', 'Br tag', 'A tag', 'All of The Above', 3),
(7, 'In JavaScript, _____ is an object of the target language data type that encloses\r\n an object of the', 'a wrapper ', ' a link	 ', ' a cursor	', 'a form', 1),
(8, 'What do you add to a template in order to control where page content goes?', 'Text Frames', ' HTML Controllers	', ' Editable Regions', ' Page Content Controllers', 3),
(9, 'Which of the following is NOT a Style?', ' Linked ', 'Embedded ', ' Inline ', 'Orthogonal ', 4),
(10, 'Which of the following is not supported by older browsers?', 'CSS', 'Layers', 'Frames', 'All of the Above', 4);

-- --------------------------------------------------------

--
-- Table structure for table `signin`
--

CREATE TABLE `signin` (
  `id` int(225) NOT NULL,
  `name` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signin`
--

INSERT INTO `signin` (`id`, `name`, `password`) VALUES
(1, 'akash', 'akash'),
(2, ' cvcvcv', 'vcvcvcv'),
(3, '', ''),
(4, 'fsfsds', 'sdfgfsdg'),
(5, 'sdfgsdfgf', 'sfdgfgfg'),
(6, 'dsfgfdg', 'fdsgfsdg'),
(7, 'sdfgfsdg', 'sdfgfdgfdsg'),
(8, 'FSDsadaSDD', 'SADFASDFDASF'),
(9, 'ASDFSFDSFD', 'DSFSDFDFDFDFDF'),
(10, 'SDFDSF', 'DSDFSDFDSF'),
(11, 'akash', '123456'),
(12, 'akasg', 'sdfggrf'),
(13, 'sffgggggg', 'eefrererer'),
(14, 'sdfgfdg', 'sfdgffsdg'),
(15, 'ggggg', 'ggggg'),
(16, 'akash', 'akash1'),
(17, 'tarun', '12345'),
(18, 'asdfdsf', 'asdfsadfsd'),
(19, 'shivam ', '123456789'),
(20, 'shivam', '12345'),
(21, 'sumit', 'sumit'),
(22, 'asdf', 'asdfsdf');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `uid` int(100) NOT NULL,
  `username` varchar(225) NOT NULL,
  `totalque` int(225) NOT NULL,
  `anscorrect` int(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `username`, `totalque`, `anscorrect`) VALUES
(1, 'akash', 10, 1),
(2, 'akash', 10, 1),
(3, 'akash', 10, 1),
(4, 'akash', 10, 0),
(5, 'akash', 10, 0),
(6, 'akash', 10, 0),
(7, 'akash', 10, 0),
(8, 'akash', 10, 0),
(9, 'akash', 10, 0),
(10, 'akash', 10, 1),
(11, 'akash', 10, 1),
(12, 'akash', 10, 1),
(13, 'akash', 10, 3),
(14, 'akash', 10, 3),
(15, 'akash', 10, 3),
(16, 'akash', 10, 7),
(17, 'akash', 10, 1),
(18, 'akash', 10, 0),
(19, 'akash', 10, 0),
(20, 'akash', 10, 0),
(21, 'akash', 10, 0),
(22, 'akash', 10, 0),
(23, 'akash', 10, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `quizz`
--
ALTER TABLE `quizz`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signin`
--
ALTER TABLE `signin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `signin`
--
ALTER TABLE `signin`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `uid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
