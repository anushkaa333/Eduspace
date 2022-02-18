-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2021 at 05:19 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eduspace`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `course_count` (OUT `tot_course` INT(50))  BEGIN
SELECT COUNT(*) INTO tot_course FROM course;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `apply`
--

CREATE TABLE `apply` (
  `sid` int(11) DEFAULT NULL,
  `cid` int(11) DEFAULT NULL,
  `Status` varchar(100) DEFAULT NULL,
  `add_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `apply`
--

INSERT INTO `apply` (`sid`, `cid`, `Status`, `add_date`) VALUES
(1, 24, 'completed', '2021-01-11');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `sid` int(11) DEFAULT NULL,
  `tid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`sid`, `tid`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `cid` int(11) NOT NULL,
  `cname` varchar(100) DEFAULT NULL,
  `description` varchar(100) DEFAULT NULL,
  `tid` int(11) DEFAULT NULL,
  `picsource` varchar(200) DEFAULT NULL,
  `ad_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`cid`, `cname`, `description`, `tid`, `picsource`, `ad_date`) VALUES
(24, 'AI', 'complete knowledge of artificial intelligence', 1, 'upload image/home_background.jpg', '2021-01-09');

-- --------------------------------------------------------

--
-- Table structure for table `placement_cell`
--

CREATE TABLE `placement_cell` (
  `username` varchar(100) NOT NULL,
  `PASSWORD` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `placement_cell`
--

INSERT INTO `placement_cell` (`username`, `PASSWORD`) VALUES
('PES_PC', 'Pes@1234');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `sid` int(11) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `sname` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`sid`, `username`, `password`, `email`, `sname`) VALUES
(1, 'harshita', '1234', 'harshitagirniwale1008@gmail.com', 'harshita Girniwale'),
(2, 'anushka', '12345', 'mulayanushka@gmail.com', 'Anushka Mulay'),
(3, 'Atharva', '123456789', 'atharvamulay@gmail.com', 'Atharva Mulay'),
(4, 'tejaswini', '1234', 'tejukadam@gmail.com', 'tejaswini kadam'),
(5, 'pranali', 'pranali@1234', 'pranaligirniwale@gmail.com', 'pranali Girniwale'),
(6, 'vaishnavi', '12345', 'vaishnavij2000@gmail.com', 'vaishnavi jagtap'),
(7, 'pallavi', '78910', 'pallavi@gmail.com', 'pallavi girniwale'),
(8, 'aakansha', '12345', 'aakanshagirniwale@gmail.com', 'aakansha girniwale'),
(9, 'pranjali', '123456', 'pranajalimohalkar@gmail.com', 'pranjali mohalkar'),
(10, 'utkarsha', '12341234', 'u@gmail.com1234', 'utkarsha abhang'),
(11, 'tappu', '1234', 'tipendragada@gmail.com', 'trpendra gada'),
(12, 'dipali', '123456', 'dipalijain@gmail.com', 'Dipali jain'),
(13, 'goli', '1234', 'gulab1@gmail.com', 'gulabkumar hathi'),
(14, 'sonu', '1234', 'sonailaka@gmail.com', 'sonalika bhide'),
(15, 'riya', '1234', 'riya@gmail.com', 'riya jadhav'),
(16, 'rupa', '1234', 'r@gmail.com', 'rupali'),
(17, 'tejas', 'tejas123', 'tejasgirniwale1008@gmail.com', 'tejas Girniwale'),
(18, 'suyog', '123456', 'suyogsawji8@gmail.com', 'suyog sawji'),
(19, 'sadhna', '1234', 'sadhna@gmail.com', 'sadhna Girniwale'),
(20, 'jayshree', '1234', 'jayshree@gmail.com', 'jayshree pacharne'),
(21, 'dheeraj', '1234', 'dheerajdhooper@gmail.com', 'dheeraj dhooper'),
(22, 'shraddha', '12345', 'sarya@gmail.com', 'shraddha arya'),
(23, 'divyanka', '1234', 'divyankatripathi@gmail.com', 'divyanka tripathi');

-- --------------------------------------------------------

--
-- Table structure for table `stud_phone`
--

CREATE TABLE `stud_phone` (
  `sid` int(11) DEFAULT NULL,
  `contact_no` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stud_phone`
--

INSERT INTO `stud_phone` (`sid`, `contact_no`) VALUES
(1, 7745072441),
(1, 9423447530),
(2, 9423447383),
(2, 9423855012),
(3, 8275272640),
(3, 0),
(4, 7745072),
(4, 0),
(5, 7745072441),
(5, 0),
(6, 7745072441),
(6, 7756412332),
(7, 7745072441),
(7, 0),
(8, 7745072441),
(8, 0),
(9, 7745072441),
(9, 0),
(10, 77450),
(10, 0),
(11, 7745072),
(11, 0),
(12, 7745072),
(12, 0),
(13, 7745072),
(13, 0),
(14, 0),
(14, 0),
(15, 0),
(15, 0),
(16, 0),
(16, 0),
(17, 7745072441),
(17, 0),
(18, 9028614141),
(18, 0),
(19, 9175970867),
(19, 7756412332),
(20, 7745072441),
(20, 0),
(21, 0),
(21, 0),
(22, 0),
(22, 0),
(23, 7745072441),
(23, 7756412332);

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `tid` int(11) NOT NULL,
  `tname` varchar(100) DEFAULT NULL,
  `t_email` varchar(100) DEFAULT NULL,
  `designation` varchar(100) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`tid`, `tname`, `t_email`, `designation`, `username`, `password`) VALUES
(1, 'harry chuck', 'chuck@gmail.com', 'PHD holder', 'dr.chuck', 'chuck@1234'),
(2, 'swapna bhavsar', 'swapna@gmail.com', 'professor', 'Swapna', '12345'),
(3, 'supriya jagtap', 'supriya@gmail.com', 'professor', 'supriya ', 'supriya@1234'),
(4, 'Gajanan Jadhav', 'gajanan@gmail.com', 'professor', 'Gajanan', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_phone`
--

CREATE TABLE `teacher_phone` (
  `tid` int(11) DEFAULT NULL,
  `mobile_no` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacher_phone`
--

INSERT INTO `teacher_phone` (`tid`, `mobile_no`) VALUES
(1, 7745072441),
(1, 0),
(2, 7745072441),
(2, 0),
(3, 7745072441),
(3, 0),
(4, 7745072441),
(4, 7745072442);

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `cid` int(11) DEFAULT NULL,
  `vname` varchar(100) DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`cid`, `vname`, `title`, `id`) VALUES
(24, 'https://youtu.be/qYbkQpSI9_o', 'VIDEO1', 9),
(24, 'https://www.youtube.com/', 'VIDEO2', 10);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `apply`
--
ALTER TABLE `apply`
  ADD KEY `sid` (`sid`),
  ADD KEY `cid` (`cid`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD KEY `sid` (`sid`),
  ADD KEY `tid` (`tid`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`cid`),
  ADD KEY `tid` (`tid`);

--
-- Indexes for table `placement_cell`
--
ALTER TABLE `placement_cell`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `stud_phone`
--
ALTER TABLE `stud_phone`
  ADD KEY `sid` (`sid`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`tid`);

--
-- Indexes for table `teacher_phone`
--
ALTER TABLE `teacher_phone`
  ADD KEY `tid` (`tid`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cid` (`cid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `tid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `apply`
--
ALTER TABLE `apply`
  ADD CONSTRAINT `apply_ibfk_1` FOREIGN KEY (`sid`) REFERENCES `student` (`sid`),
  ADD CONSTRAINT `apply_ibfk_2` FOREIGN KEY (`cid`) REFERENCES `course` (`cid`);

--
-- Constraints for table `contact`
--
ALTER TABLE `contact`
  ADD CONSTRAINT `contact_ibfk_1` FOREIGN KEY (`sid`) REFERENCES `student` (`sid`),
  ADD CONSTRAINT `contact_ibfk_2` FOREIGN KEY (`tid`) REFERENCES `teacher` (`tid`);

--
-- Constraints for table `course`
--
ALTER TABLE `course`
  ADD CONSTRAINT `course_ibfk_1` FOREIGN KEY (`tid`) REFERENCES `teacher` (`tid`);

--
-- Constraints for table `stud_phone`
--
ALTER TABLE `stud_phone`
  ADD CONSTRAINT `stud_phone_ibfk_1` FOREIGN KEY (`sid`) REFERENCES `student` (`sid`);

--
-- Constraints for table `teacher_phone`
--
ALTER TABLE `teacher_phone`
  ADD CONSTRAINT `teacher_phone_ibfk_1` FOREIGN KEY (`tid`) REFERENCES `teacher` (`tid`);

--
-- Constraints for table `video`
--
ALTER TABLE `video`
  ADD CONSTRAINT `video_ibfk_1` FOREIGN KEY (`cid`) REFERENCES `course` (`cid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
