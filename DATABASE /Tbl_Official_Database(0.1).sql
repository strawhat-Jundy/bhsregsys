-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 28, 2024 at 06:08 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Tbl_Official_Database`
--

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1732751795),
('m130524_201442_init', 1732751849),
('m190124_110200_add_verification_token_column_to_user_table', 1732751849);

-- --------------------------------------------------------

--
-- Table structure for table `Tbl_Official_Final_Schedule`
--

CREATE TABLE `Tbl_Official_Final_Schedule` (
  `Schedule_ID` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `Status` varchar(18) NOT NULL,
  `Day_Schedule` varchar(255) NOT NULL,
  `Time_Schedule` varchar(6) NOT NULL,
  `Room` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Tbl_Official_Final_Schedule`
--

INSERT INTO `Tbl_Official_Final_Schedule` (`Schedule_ID`, `subject_id`, `teacher_id`, `room_id`, `student_id`, `Status`, `Day_Schedule`, `Time_Schedule`, `Room`) VALUES
(2, 7, 14, 2, 1, 'single', 'F', '4AM', 'Room201');

-- --------------------------------------------------------

--
-- Table structure for table `Tbl_Official_Room_Table`
--

CREATE TABLE `Tbl_Official_Room_Table` (
  `room_id` int(11) NOT NULL,
  `Room` varchar(11) NOT NULL,
  `Floor` varchar(11) NOT NULL,
  `Building` varchar(30) NOT NULL,
  `Room_Number` int(11) NOT NULL,
  `Description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Tbl_Official_Room_Table`
--

INSERT INTO `Tbl_Official_Room_Table` (`room_id`, `Room`, `Floor`, `Building`, `Room_Number`, `Description`) VALUES
(1, 'Roon201', 'Floor5', 'Senior High Building', 201, 'With aircon and bed'),
(2, 'Roon201', 'Floor5', 'Senior High Building', 201, 'With aircon and bed');

-- --------------------------------------------------------

--
-- Table structure for table `Tbl_Official_Students`
--

CREATE TABLE `Tbl_Official_Students` (
  `student_id` int(11) NOT NULL,
  `lrn` varchar(20) NOT NULL,
  `first_name` varchar(200) NOT NULL,
  `last_name` varchar(200) NOT NULL,
  `gender` enum('Male','Female','LGBT','') NOT NULL,
  `birthdate` date NOT NULL,
  `place_of_birth` varchar(200) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `religion` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `civil_status` enum('single','married','widowed','divorced') NOT NULL,
  `nationality` varchar(200) NOT NULL,
  `language` varchar(200) NOT NULL,
  `middle_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Tbl_Official_Students`
--

INSERT INTO `Tbl_Official_Students` (`student_id`, `lrn`, `first_name`, `last_name`, `gender`, `birthdate`, `place_of_birth`, `address`, `religion`, `email`, `civil_status`, `nationality`, `language`, `middle_name`) VALUES
(1, '136490120344', 'John Kenneth', 'Apolong', 'Male', '2006-12-18', 'bilibid', 'dswd', 'ROMAN CATHOLIC', 'kennethpogi234@blabla.com', 'single', 'Pilipino', 'Filipino', 'Lupaypau'),
(3, '1573645376', 'Yeet', 'Yeeh', 'Female', '2024-11-13', 'HOSPITAL 2', 'Quezon citeh', 'Inc', 'meowmeow@gmail.com', 'single', 'Moon', 'Alien', 'Yaah'),
(4, '136518130218', 'Elaiza', 'Rosario', 'Female', '2007-02-05', 'Hospital', 'SM north ', 'INC', 'elaizakoparin@gmail.com', 'widowed', 'Pilipino', 'Filipino', 'Rodriguez'),
(5, '136490120344', 'Leonel', 'Rogon', 'Male', '2007-04-30', 'Chinese Hospital', '1076 Tibagan St. Balingasa Quezon City', 'Roman Catholic', 'leonelrogon10@gmail.com', 'single', 'Pilipino', 'Filipino', 'Reyes'),
(6, '136490143175', 'Erin', 'Alonzo', 'Female', '2006-04-07', 'Sa bahay', 'Sa katabi ng kapitbahay namin', 'Yes', 'maybe.no@example.com', 'widowed', 'Pilipino', 'Filipino', 'Manarang'),
(7, '109478130070', 'Van Cholo', 'Esguerra', 'Male', '2006-07-28', 'Quezon City', '4 Santillan, SFDM, Quezon City', 'Catholic', 'vancholo2006@gmail.com', 'single', 'Pilipino', 'Filipino', 'Valenzuela'),
(9, '109478130070', 'jundi', 'cholo', 'LGBT', '2006-12-18', 'bafe', 'munoz', 'roman', 'fake@fake.com', 'single', 'pilipino', 'pilipno', 'lupaypay');

-- --------------------------------------------------------

--
-- Table structure for table `Tbl_Official_Subjects`
--

CREATE TABLE `Tbl_Official_Subjects` (
  `subject_id` int(11) NOT NULL,
  `subject_name` varchar(200) NOT NULL,
  `schedule_day` varchar(10) NOT NULL,
  `schedule_time` varchar(30) NOT NULL,
  `room` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Tbl_Official_Subjects`
--

INSERT INTO `Tbl_Official_Subjects` (`subject_id`, `subject_name`, `schedule_day`, `schedule_time`, `room`) VALUES
(1, 'PROGRAMMING', 'M-TH', '7:30 AM - 9:30 AM', 'COMPUTER LABORATORY'),
(2, 'Health Optimization Physical Education', 'Wed', '1:00 P.M - 2:00 P.M', '12-ICT ROOM'),
(3, 'PRACTICAL RESEARCH 2', 'T - TH', '9:30AM to 11:30AM', '12 - ICT ROOM'),
(4, 'Filipino sa Piling Larang', 'M - T', '9:30AM to 11:30AM', '12-ICT ROOM'),
(5, 'Introduction to Human Philosophy ', 'TH - F', '12:00PM - 2:00PM', 'COMPUTER LABORATORY'),
(6, 'Media and Information Literacy', 'M & W', '9:30AM to 11:30AM', '12-ICT ROOM'),
(7, 'Physical Education', 'F', '4AM', 'Room201');

-- --------------------------------------------------------

--
-- Table structure for table `Tbl_Official_Teachers`
--

CREATE TABLE `Tbl_Official_Teachers` (
  `teacher_id` int(11) NOT NULL,
  `first_name` varchar(200) NOT NULL,
  `last_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Tbl_Official_Teachers`
--

INSERT INTO `Tbl_Official_Teachers` (`teacher_id`, `first_name`, `last_name`) VALUES
(1, 'Ana Isabel', 'Dupla'),
(2, 'Lorie', 'Rocha'),
(3, 'Jeremay', 'Pilapil'),
(4, 'Rochelle', 'Tan'),
(5, 'Ardel Mer', 'De Leon'),
(6, 'Sheena', 'Alboradora'),
(14, 'Kevin', 'Durant');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `auth_key` varchar(32) NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `password_reset_token` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT 10,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `verification_token` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`, `verification_token`) VALUES
(1, 'vancholo2006@gmail.com', 'VFuynsQpvmk_F74v3EEFmraFUP0m071Y', '$2y$13$wCNBnoAzMhCJjPvzMtMeKut.qCFNFg6TOqYqGziuxYx1MrEovCa6C', NULL, 'vancholo2006@gmail.com', 10, 1732751934, 1732752020, 'IgYJudLXCR6jCgAp1L6hehh018Vp8s5e_1732751934');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `Tbl_Official_Final_Schedule`
--
ALTER TABLE `Tbl_Official_Final_Schedule`
  ADD PRIMARY KEY (`Schedule_ID`),
  ADD KEY `subject_id` (`subject_id`,`teacher_id`,`room_id`),
  ADD KEY `teacher_id` (`teacher_id`),
  ADD KEY `room_id` (`room_id`),
  ADD KEY `student_id` (`student_id`);

--
-- Indexes for table `Tbl_Official_Room_Table`
--
ALTER TABLE `Tbl_Official_Room_Table`
  ADD PRIMARY KEY (`room_id`);

--
-- Indexes for table `Tbl_Official_Students`
--
ALTER TABLE `Tbl_Official_Students`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `Tbl_Official_Subjects`
--
ALTER TABLE `Tbl_Official_Subjects`
  ADD PRIMARY KEY (`subject_id`);

--
-- Indexes for table `Tbl_Official_Teachers`
--
ALTER TABLE `Tbl_Official_Teachers`
  ADD PRIMARY KEY (`teacher_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Tbl_Official_Final_Schedule`
--
ALTER TABLE `Tbl_Official_Final_Schedule`
  MODIFY `Schedule_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `Tbl_Official_Room_Table`
--
ALTER TABLE `Tbl_Official_Room_Table`
  MODIFY `room_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `Tbl_Official_Students`
--
ALTER TABLE `Tbl_Official_Students`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `Tbl_Official_Subjects`
--
ALTER TABLE `Tbl_Official_Subjects`
  MODIFY `subject_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `Tbl_Official_Teachers`
--
ALTER TABLE `Tbl_Official_Teachers`
  MODIFY `teacher_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Tbl_Official_Final_Schedule`
--
ALTER TABLE `Tbl_Official_Final_Schedule`
  ADD CONSTRAINT `Tbl_Official_Final_Schedule_ibfk_1` FOREIGN KEY (`subject_id`) REFERENCES `Tbl_Official_Subjects` (`subject_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Tbl_Official_Final_Schedule_ibfk_2` FOREIGN KEY (`teacher_id`) REFERENCES `Tbl_Official_Teachers` (`teacher_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Tbl_Official_Final_Schedule_ibfk_3` FOREIGN KEY (`room_id`) REFERENCES `Tbl_Official_Room_Table` (`room_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Tbl_Official_Final_Schedule_ibfk_4` FOREIGN KEY (`student_id`) REFERENCES `Tbl_Official_Students` (`student_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
