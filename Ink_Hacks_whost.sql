-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Apr 21, 2023 at 09:40 PM
-- Server version: 5.7.39
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id20642620_ink_hacks`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `course_id` int(11) NOT NULL,
  `course_name` text NOT NULL,
  `course_code` varchar(225) NOT NULL,
  `course_type` varchar(255) NOT NULL,
  `course_desc` text NOT NULL,
  `course_img` varchar(255) NOT NULL,
  `l_id` int(11) NOT NULL,
  `school_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`course_id`, `course_name`, `course_code`, `course_type`, `course_desc`, `course_img`, `l_id`, `school_id`) VALUES
(1, 'Web Systems Design\r\n                                            & Management', 'INFS 634', 'Winter', 'A course about website development', 'Assets/img/websys.png', 1, 1),
(2, 'Information Security', 'INFS 629', 'Summer', 'A course about the securitization of information both physically and digitally.', 'Assets/img/infosec.png', 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `document`
--

CREATE TABLE `document` (
  `doc_id` int(11) NOT NULL,
  `doc_name` text NOT NULL,
  `doc_desc` text NOT NULL,
  `doc_type` varchar(255) NOT NULL,
  `pdf_data` varchar(255) DEFAULT NULL,
  `doc_date` date NOT NULL,
  `d_role` int(11) NOT NULL,
  `course_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `document`
--

INSERT INTO `document` (`doc_id`, `doc_name`, `doc_desc`, `doc_type`, `pdf_data`, `doc_date`, `d_role`, `course_id`) VALUES
(1, 'Saved', 'Sample Document and Jesus loves us!', 'Notes', 'Assets/pdfs/Jesus.pdf', '2022-09-09', 2, 2),
(2, 'Rover', 'Rover Command', 'Notes', 'Assets/pdfs/Rover Command.pdf', '2023-04-21', 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feed_id` int(11) NOT NULL,
  `feed_emo` varchar(255) NOT NULL,
  `feed_details` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feed_id`, `feed_emo`, `feed_details`) VALUES
(1, 'smiley', 'Great Service'),
(2, 'happy', 'I am glad');

-- --------------------------------------------------------

--
-- Table structure for table `lecturers`
--

CREATE TABLE `lecturers` (
  `l_id` int(2) NOT NULL,
  `l_fname` varchar(225) NOT NULL,
  `l_email` varchar(225) NOT NULL,
  `l_number` varchar(225) NOT NULL,
  `l_password` varchar(225) NOT NULL,
  `l_description` text NOT NULL,
  `l_photo` varchar(300) DEFAULT NULL,
  `l_role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `lecturers`
--

INSERT INTO `lecturers` (`l_id`, `l_fname`, `l_email`, `l_number`, `l_password`, `l_description`, `l_photo`, `l_role`) VALUES
(1, 'Pamela Anang', 'pam@mail.com', 'MGU23', '830410c4c7f304b2480fc96ae8bbb9f0', 'Interested in creating effective, user-friendly, and visually appealing websites. To achieve this, they need to have a solid understanding of various design principles and web technologies. As such, their research interests may include exploring new design trends, studying user behavior, and testing new web technologies.\r\n\r\nOne area of interest for web designers is user experience (UX) design. This involves studying how users interact with websites and designing websites that are intuitive and easy to navigate. Web designers may conduct user testing to gather data on how users interact with different website designs and features. They may also study UX design principles and best practices to improve their skills and knowledge.', 'Assets/pro_img/profile.webp', 2),
(2, 'Kwaku Ananse', 'kwek@mail.com', 'INF23', 'd43394056da277d2ee8388f35b2a1c37', 'Data analysts are interested in using data to solve problems and inform decision-making. To achieve this, they need to have a solid understanding of various data analysis techniques, statistical methods, and programming languages. As such, their research interests may include exploring new data analysis methods, studying different types of data, and testing new data analysis tools.', 'Assets/pro_img/Fac33.jpeg', 2),
(3, 'Henry Charway', 'hen@mail.com', 'IN22', '3da06b928c94ae8b6103d9a3f67328ac', 'As a cyber security analys, I am responsible for protecting an organization\'s computer networks and systems from unauthorized access, attacks, and theft of data. This role involves identifying vulnerabilities, designing and implementing security measures, and monitoring and analyzing security incidents to respond to threats', 'Assets/pro_img/hen.jpeg', 2),
(4, 'Simon Gray', 'simon@mail.com', 'ING23', '6ab98c629ef097d938f52512b68e0403', 'I am an engineering lecturer with a Ph.D. in engineering or a related field. Relevant work experience in industry or academia and teaching experience are also beneficial. Strong communication, organizational, and interpersonal skills are important qualities for an engineering teacher, as well as a passion for teaching and a desire to mentor and guide students.', 'Assets/pro_img/simon.jpeg', 2);

-- --------------------------------------------------------

--
-- Table structure for table `lec_details`
--

CREATE TABLE `lec_details` (
  `lec_details_id` int(11) NOT NULL,
  `l_id` int(11) NOT NULL,
  `last_activity` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `is_type` enum('no','yes') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `lec_details`
--

INSERT INTO `lec_details` (`lec_details_id`, `l_id`, `last_activity`, `is_type`) VALUES
(1, 1, '2023-04-21 17:55:50', 'no'),
(2, 1, '2023-04-21 17:55:50', 'no'),
(3, 1, '2023-04-21 17:55:50', 'no'),
(4, 1, '2023-04-21 17:55:50', 'no'),
(5, 2, '2023-04-19 01:22:30', 'no'),
(6, 1, '2023-04-21 17:55:50', 'no'),
(7, 1, '2023-04-21 17:55:50', 'no'),
(8, 1, '2023-04-21 17:55:50', 'no'),
(9, 1, '2023-04-21 17:55:50', 'no'),
(10, 1, '2023-04-21 17:55:50', 'no'),
(11, 1, '2023-04-21 17:55:50', 'no'),
(12, 1, '2023-04-21 17:55:50', 'no'),
(13, 1, '2023-04-21 17:55:50', 'no'),
(14, 1, '2023-04-21 17:55:50', 'no'),
(15, 1, '2023-04-21 17:55:50', 'no'),
(16, 1, '2023-04-21 17:55:50', 'no'),
(17, 1, '2023-04-21 17:55:50', 'no'),
(18, 1, '2023-04-21 17:55:50', 'no'),
(19, 1, '2023-04-21 17:55:50', 'no'),
(20, 1, '2023-04-21 17:55:50', 'no'),
(21, 1, '2023-04-21 17:55:50', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `program`
--

CREATE TABLE `program` (
  `program_id` int(11) NOT NULL,
  `program_name` varchar(255) NOT NULL,
  `program_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `program`
--

INSERT INTO `program` (`program_id`, `program_name`, `program_img`) VALUES
(1, 'Undergraduate', 'Assets/img/under.webp'),
(2, 'Graduate', 'Assets/img/Graduate.jpeg'),
(3, 'Certifications & Diplomas', 'Assets/img/diploma.webp');

-- --------------------------------------------------------

--
-- Table structure for table `schools`
--

CREATE TABLE `schools` (
  `school_id` int(11) NOT NULL,
  `school_name` varchar(255) NOT NULL,
  `school_desc` text NOT NULL,
  `school_img` varchar(255) NOT NULL,
  `dept_name` varchar(255) NOT NULL,
  `program_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `schools`
--

INSERT INTO `schools` (`school_id`, `school_name`, `school_desc`, `school_img`, `dept_name`, `program_id`) VALUES
(1, 'School of Information Studies', 'Your center for Library & Archival Studies, Knowledge Management UX/UI, Data Analysis.', 'Assets/img/sis.jpeg', 'Arts', 2),
(2, 'School of Management', 'Learn Business Analytics from the best professionals in the field including Management and Accounting principles.', 'Assets/img/des.webp', 'Business', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`course_id`),
  ADD KEY `lec_id` (`l_id`),
  ADD KEY `school_id` (`school_id`);

--
-- Indexes for table `document`
--
ALTER TABLE `document`
  ADD PRIMARY KEY (`doc_id`),
  ADD KEY `course_id` (`course_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feed_id`);

--
-- Indexes for table `lecturers`
--
ALTER TABLE `lecturers`
  ADD PRIMARY KEY (`l_id`);

--
-- Indexes for table `lec_details`
--
ALTER TABLE `lec_details`
  ADD PRIMARY KEY (`lec_details_id`),
  ADD KEY `l_id` (`l_id`);

--
-- Indexes for table `program`
--
ALTER TABLE `program`
  ADD PRIMARY KEY (`program_id`);

--
-- Indexes for table `schools`
--
ALTER TABLE `schools`
  ADD PRIMARY KEY (`school_id`),
  ADD KEY `prog_id` (`program_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `document`
--
ALTER TABLE `document`
  MODIFY `doc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feed_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `lecturers`
--
ALTER TABLE `lecturers`
  MODIFY `l_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `lec_details`
--
ALTER TABLE `lec_details`
  MODIFY `lec_details_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `program`
--
ALTER TABLE `program`
  MODIFY `program_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `schools`
--
ALTER TABLE `schools`
  MODIFY `school_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `courses`
--
ALTER TABLE `courses`
  ADD CONSTRAINT `lec_id` FOREIGN KEY (`l_id`) REFERENCES `lecturers` (`l_id`),
  ADD CONSTRAINT `school_id` FOREIGN KEY (`school_id`) REFERENCES `schools` (`school_id`);

--
-- Constraints for table `document`
--
ALTER TABLE `document`
  ADD CONSTRAINT `course_id` FOREIGN KEY (`course_id`) REFERENCES `courses` (`course_id`);

--
-- Constraints for table `lec_details`
--
ALTER TABLE `lec_details`
  ADD CONSTRAINT `l_id` FOREIGN KEY (`l_id`) REFERENCES `lecturers` (`l_id`);

--
-- Constraints for table `schools`
--
ALTER TABLE `schools`
  ADD CONSTRAINT `prog_id` FOREIGN KEY (`program_id`) REFERENCES `program` (`program_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
