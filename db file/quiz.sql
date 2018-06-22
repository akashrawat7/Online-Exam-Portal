-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2018 at 07:18 AM
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
  `sub` varchar(100) NOT NULL,
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

INSERT INTO `quizz` (`id`, `sub`, `ques`, `ans1`, `ans2`, `ans3`, `ans4`, `corr_ans`) VALUES
(1, 'JS', ' Which of the following JavaScript cannot do ?', ' JavaScript can react to events	', 'JavaScript can manipulate HTML elements	', 'JavaScript can be use to validate data.', ' All of the Above', 4),
(2, 'XML', 'Whats so great about XML?', 'Easy data exchange', ' High speed on network	 ', ' Only B.is correct	', ' Both A & B', 4),
(3, 'HTML', 'Which is not a property of attribute Behaviour of Marquee tag?', 'alternate	 ', 'blur ', 'scroll	', 'slide', 2),
(4, 'XML', ' The attribute used to define a new namespace is.', 'XMLNS	', ' XmlNameSpace', ' Xmlns', ' XmlNs', 3),
(5, 'CSS', 'Which CSS property can provide to add an effect when changing from one style to another without using Javascript?', ' Associations	', 'Transitions', 'Transistor	', 'None of the above', 2),
(6, 'HTML', 'Which tag(s) can handle mouse events in Netscape?', 'IMG tag', 'Br tag', 'A tag', 'All of The Above', 3),
(7, 'PHP', ' How will you concatenate two strings?', 'Using . operator. ', 'Using + operator.  ', 'Using add() function ', 'Using append() function', 1),
(8, 'HTML', 'What do you add to a template in order to control where page content goes?', 'Text Frames', ' HTML Controllers	', ' Editable Regions', ' Page Content Controllers', 3),
(9, 'CSS', 'Which of the following is NOT a Style?', ' Linked ', 'Embedded ', ' Inline ', 'Orthogonal ', 4),
(10, 'HTML', 'Which of the following is not supported by older browsers?', 'CSS', 'Layers', 'Frames', 'All of the Above', 4),
(11, 'SQL', 'What Is The Full Form Of SQL?', 'Structured query language ', 'Sheduled query language', ' Structured quototion language ', 'Standard query language', 1),
(12, 'HTML', ' From which tag descriptive list starts ?', 'LL TAG ', 'DD TAG ', 'DL TAG ', 'DS TAG ', 3),
(13, 'PHP', 'What does PHP stand for?', ' PHP: Hypertext Preprocessor  ', ' Personal Hypertext Processor ', '  Private Home Page', 'None Of These', 1),
(14, 'PHP', ' The PHP syntax is most similar to', ' VBScript ', '  JavaScript ', ' Perl and C', 'None Of These', 3),
(15, 'PHP', 'Which of the following type of variables are instances of programmer-defined classes?', ' Strings ', '  Arrays ', ' Objects', ' Resources', 3),
(16, 'PHP', 'Which of the following can be used to get information sent via get/post method in PHP?', '$_REQUEST', '$REQUEST', '$REQUEST_PAGE', 'None of the above.', 1),
(17, 'PHP', ' Which of the following function is used to check if a file exists or not?', 'fopen()  ', ' fread() ', ' filesize()  ', ' file_exist()', 4),
(18, 'PHP', 'Which of the following gives a string containing PHP script file name in which it is called?', '$_PHP_SELF ', '$php_errormsg ', '$_COOKIE', ' $_SESSION', 1),
(19, 'PHP', 'Which of the following method acts as a constructor function in a PHP class?', 'class_name() ', ' __construct ', 'constructor  ', 'None of the above.', 2),
(20, 'PHP', 'Which of the following magic constant of PHP returns class method name?', '_METHOD_  ', ' _FILE_', ' _FUNCTION_  ', '_METHOD_ ', 1),
(21, 'PHP', 'How do you write "Hello World" in PHP?', 'echo "Hello World";  ', '"Hello World"; ', ' Document.Write("Hello World");', 'None Of These', 1),
(22, 'JS', 'Inside which HTML element do we put the JavaScript?', 'js tag', 'scripting tag', ' script tag', ' javascript tag', 3),
(23, 'JS', 'Where is the correct place to insert a JavaScript?', 'The head section', 'The body section', 'Both the head section and the body section are correct', 'None of These ', 3),
(24, 'JS', 'How do you call a function named "myFunction"?', 'myFunction()', 'call myFunction()', 'call function myFunction()', 'None of These', 1),
(25, 'JS', 'How to write an IF statement in JavaScript?', 'if (i == 5)', 'if i == 5 then', ' if i = 5', 'if i = 5 then', 1),
(26, 'JS', 'How does a WHILE loop start?', 'while (i <= 10)', 'while i = 1 to 10', ' while (i <= 10; i++)', 'None of These', 1),
(27, 'JS', 'How does a FOR loop start?', 'for i = 1 to 5', 'for (i <= 5; i++)', 'for (i = 0; i <= 5)', 'for (i = 0; i <= 5; i++)', 4),
(28, 'JS', 'How can you add a comment in a JavaScript?', 'This is a comment', ' //This is a comment', '||This is a comment', 'None of These', 2),
(29, 'JS', 'Which event occurs when the user clicks on an HTML element?', 'onchange', 'onmouseclick', 'onclick', 'onmouseover', 3),
(30, 'JS', 'How do you declare a JavaScript variable?', ' variable carName;', 'var carName;', 'v carName;', 'None of these', 2),
(31, 'CSS', 'What does CSS stand for?', 'Cascading Style Sheets', ' Creative Style Sheets', 'Creative Style Sheets', 'Computer Style Sheets', 1),
(32, 'CSS', 'Where in an HTML document is the correct place to refer to an external style sheet?', 'In the head section', 'In the body section', ' At the end of the document', 'None Of These', 1),
(33, 'CSS', 'Which HTML tag is used to define an internal style sheet?', 'css tag', 'script tag', 'style tag', 'All of the above', 3),
(34, 'CSS', 'Which HTML attribute is used to define inline styles?', 'Styles', 'Style', 'Class', 'Font', 4),
(35, 'CSS', 'Which property is used to change the background color?', 'Color', 'Background-color', 'Back-color', 'All of Above', 2),
(36, 'CSS', 'How do you display hyperlinks without an underline?', 'decoration:no-underline', 'text-decoration:no-underline', 'text-decoration:none', 'underline:none', 3),
(37, 'CSS', ' Which property is used to change the font of an element?', 'Font', 'Font-style', 'Font-family', 'Font-weight', 3),
(38, 'CSS', 'How do you select an element with id "demo"?', '.demo', '*demo', '!demo', '#demo', 4),
(39, 'SQL', 'Which SQL statement is used to extract data from a database?', 'EXTRACT', 'GET', 'SELECT', 'OPEN', 3),
(40, 'SQL', 'Which SQL statement is used to update data in a database?', 'MODIFY', 'SAVE AS', 'SAVE', 'UPDATE', 3),
(41, 'SQL', 'Which SQL statement is used to delete data from a database?', 'DELETE', 'COLLAPSE', 'REMOVE', 'CLEAN', 1),
(42, 'SQL', ' Which SQL statement is used to insert new data in a database?', 'ADD NEW', 'INSERT NEW', 'ADD INTO', 'INSERT INTO', 4),
(43, 'SQL', 'Which SQL statement is used to return only different values?', 'SELECT DISTINCT', 'SELECT UNIQUE', 'SELECT DIFFRENT', 'NONE', 1),
(44, 'SQL', 'Which SQL keyword is used to sort the result-set?', 'SORT BY', 'SORT', 'ORDER BY', 'ORDER', 1),
(45, 'SQL', 'What is the most common type of join?', 'JOINED', 'INNER JOIN', 'INSIDE JOIN', 'NONE', 2),
(46, 'SQL', 'Which operator is used to select values within a range?', 'RANGE', 'WITHIN', 'BETWEEN', 'NONE', 3),
(47, 'SQL', 'Which operator is used to search for a specified pattern in a column?', 'GET', 'FROM', 'LIKE', 'NONE', 3),
(48, 'XML', 'What does XML stand for?', 'eXtra Modern Link', 'X-Markup Language', 'Example Markup Language', ' eXtensible Markup Language', 4),
(49, 'XML', 'There is a way of describing XML data, how?', 'XML uses XSL to describe data', ' XML uses a DTD to describe the data', ' XML uses a description node to describe data', 'NONE', 3),
(50, 'XML', 'What does DTD stand for?', ' Direct Type Definition', 'Do The Dance', 'Document Type Definition', ' Dynamic Type Definition', 3),
(51, 'XML', ' Which statement is true?', 'All XML elements must be lower case', 'All XML elements must be properly closed', 'All XML documents must have a DTD', 'All the statements are true', 2),
(52, 'XML', 'Which statement is true?', 'XML tags are case sensitive.', 'XML documents must have a root tag.', 'XML elements must be properly closed.', 'All of the above.', 4),
(53, 'XML', 'How many root elements can we have in XML ?', '1', '2', '3', '4', 1),
(54, 'XML', 'Why XLink is used in XML file?', 'Remove Link', 'Create link', 'Fetch Link', 'Modify Link', 2),
(55, 'XML', 'Modify Link', 'Data store', 'Data fetch', 'Data store', 'Data display', 2),
(56, 'HTML ', 'The attribute of form tag ', ' Method', ' Action', ' Both (a)&(b)', 'None of these ', 3),
(57, 'HTML ', 'Markup tags tell the web browser ', ' How to organise the page', 'How to display the page ', ' How to display message box on page', 'None of these', 2),
(58, 'HTML ', '\r\nwww is based on which model? ', 'Local-server ', ' Client-server', ' 3-tier', 'None ', 2),
(59, 'HTML ', 'Which of the following attributes of text box control allow to limit the maximum character? ', ' Size', 'Len ', 'Maxlength ', 'All of these ', 3),
(60, 'HTML ', '\r\nWhat are Empty elements and is it valid? ', ' No, there is no such terms as Empty Element', 'Empty elements are element with no data ', ' No, it is not valid to use Empty Element', 'None of these ', 2),
(61, 'Computer Fundamental', 'What is ROM?', 'Random Odinary Memory', 'Reliable Older Memory', 'Readable Only Memory', 'Read Only Memory', 4);

-- --------------------------------------------------------

--
-- Table structure for table `signin`
--

CREATE TABLE `signin` (
  `id` int(100) NOT NULL,
  `name` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `repassword` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signin`
--

INSERT INTO `signin` (`id`, `name`, `password`, `repassword`, `email`) VALUES
(19, 'akash', 'akash123', 'akash123', 'akshrawat7@gmail.com'),
(20, 'akku', 'akash123', 'akash123', 'akash@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `subid` int(100) NOT NULL,
  `subname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`subid`, `subname`) VALUES
(1, 'SQL'),
(2, 'CSS'),
(3, 'HTML'),
(4, 'JS'),
(5, 'XML'),
(6, 'PHP'),
(7, 'Computer Fundamental');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `uid` int(100) NOT NULL,
  `username` varchar(225) NOT NULL,
  `sub` varchar(200) NOT NULL,
  `totalque` int(225) NOT NULL,
  `attempt` int(120) NOT NULL,
  `anscorrect` int(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `username`, `sub`, `totalque`, `attempt`, `anscorrect`) VALUES
(120, 'rahul', 'Computer Fundamental ', 10, 3, 3),
(121, 'akash', 'Computer Fundamental ', 10, 2, 0);

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
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`subid`);

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
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `subid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `uid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=122;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
