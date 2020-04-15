-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.18 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             9.3.0.4984
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping structure for table registration_system.degree
DROP TABLE IF EXISTS `degree`;
CREATE TABLE IF NOT EXISTS `degree` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `department_id` int(11) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `code` varchar(50) DEFAULT NULL,
  `semester` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table registration_system.degree: ~0 rows (approximately)
DELETE FROM `degree`;
/*!40000 ALTER TABLE `degree` DISABLE KEYS */;
INSERT INTO `degree` (`id`, `department_id`, `name`, `code`, `semester`) VALUES
	(1, 4, 'bachelor', 'B-09', 8),
	(2, 4, 'Associate', 'B-10', 4);
/*!40000 ALTER TABLE `degree` ENABLE KEYS */;


-- Dumping structure for table registration_system.department
DROP TABLE IF EXISTS `department`;
CREATE TABLE IF NOT EXISTS `department` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `code` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Dumping data for table registration_system.department: ~4 rows (approximately)
DELETE FROM `department`;
/*!40000 ALTER TABLE `department` DISABLE KEYS */;
INSERT INTO `department` (`id`, `name`, `code`) VALUES
	(1, 'Computer Science', 'CS01'),
	(2, 'Math', 'MTH-02'),
	(3, 'Physics', 'PHY-03'),
	(4, 'BBA', 'BBA-05'),
	(5, 'English', 'Eng-01');
/*!40000 ALTER TABLE `department` ENABLE KEYS */;


-- Dumping structure for table registration_system.time_table
DROP TABLE IF EXISTS `time_table`;
CREATE TABLE IF NOT EXISTS `time_table` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `semester_id` varchar(50) DEFAULT NULL,
  `days` varchar(50) DEFAULT NULL,
  `slot` varchar(50) DEFAULT NULL,
  `teacher_id` varchar(50) DEFAULT NULL,
  `subject` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=latin1;

-- Dumping data for table registration_system.time_table: ~20 rows (approximately)
DELETE FROM `time_table`;
/*!40000 ALTER TABLE `time_table` DISABLE KEYS */;
INSERT INTO `time_table` (`id`, `semester_id`, `days`, `slot`, `teacher_id`, `subject`) VALUES
	(1, '4th', 'monday', '2:00PM To 2:59PM', '5', 'DataBase System'),
	(2, '4th', 'monday', '3:00PM To 3:59PM', '4', 'Linear Algebra'),
	(3, '4th', 'monday', '4:00PM To 4:59PM', '7', 'DAA'),
	(4, '4th', 'tuesday', '2:00PM To 2:59PM', '8', 'TOA'),
	(5, '4th', 'tuesday', '3:00PM To 3:59PM', '5', 'DataBase System'),
	(6, '4th', 'tuesday', '4:00PM To 4:59PM', '6', 'HRM'),
	(7, '4th', 'wednesday', '2:00PM To 2:59PM', '5', 'DataBase System'),
	(8, '4th', 'wednesday', '3:00PM To 3:59PM', '4', 'Linear Algebra'),
	(9, '4th', 'wednesday', '4:00PM To 4:59PM', '7', 'DAA'),
	(10, '4th', 'thursday', '1:00PM To 1:59PM', '5', 'DataBase System'),
	(11, '4th', 'thursday', '2:00PM To 2:59PM', '8', 'TOA'),
	(12, '4th', 'thursday', '3:00PM To 3:59PM', '6', 'HRM'),
	(13, '4th', 'thursday', '4:00PM To 4:59PM', '7', 'DAA'),
	(14, '4th', 'friday', '2:00PM To 2:59PM', '8', 'TOA'),
	(15, '4th', 'friday', '3:00PM To 3:59PM', '4', 'Linear Algebra'),
	(16, '4th', 'friday', '4:00PM To 4:59PM', '6', 'HRM'),
	(46, '2nd', 'monday', '9:00AM To 9:59AM', '3', 'DAA'),
	(49, NULL, 'monday', '12:00PM To 12:59PM', '3', 'a'),
	(50, NULL, 'monday', '12:00PM To 12:59PM', '3', 'a'),
	(51, '7th', 'monday', '12:00PM To 12:59PM', '3', 'a');
/*!40000 ALTER TABLE `time_table` ENABLE KEYS */;


-- Dumping structure for table registration_system.users
DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `department` varchar(50) DEFAULT NULL,
  `class` varchar(50) DEFAULT NULL,
  `role` varchar(50) DEFAULT NULL,
  `session` varchar(50) DEFAULT NULL,
  `semester` varchar(50) DEFAULT NULL,
  `subject` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

-- Dumping data for table registration_system.users: ~18 rows (approximately)
DELETE FROM `users`;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `email`, `password`, `department`, `class`, `role`, `session`, `semester`, `subject`) VALUES
	(1, 'admin', 'admin@gmail.com', 'admin1', NULL, NULL, 'Admin', NULL, NULL, NULL),
	(2, 'student', 'student@gmail.com', 'student', '', NULL, 'student', NULL, NULL, NULL),
	(3, 'teacher', 'teacher@gmail.com', 'teacher', NULL, NULL, 'teacher', NULL, NULL, 'a'),
	(4, 'Muhammad Adnan', 'adnan@gmail.com', 'adnan', 'math', NULL, 'teacher', NULL, NULL, 'Linear Algebra'),
	(5, 'Munnaza Iqbal', 'munnaza@gmail.com', 'munnaza', 'Computer Science', NULL, 'teacher', NULL, NULL, 'DataBase System'),
	(6, 'Ch Hamza Tariq', 'hamza@gmail.com', 'hamza', 'BBA', NULL, 'teacher', NULL, NULL, 'HRM'),
	(7, 'Sana Hameed', 'sana@gmail.com', 'sana1', 'Computer Science', NULL, 'teacher', NULL, NULL, 'DAA'),
	(8, 'Rayya Khan', 'rayya@gmail.com', 'rayya', 'Computer Science', NULL, 'teacher', NULL, NULL, 'TOA'),
	(10, 'Ahsan Rasheed', 'm.ahsanrasheed85@gmail.com', 'ahsan', 'Computer Science', 'evening', 'student', '2018-22', '4th', NULL),
	(12, 'ali', 'ali@gmail.com', 'ali123', 'Computer Science', 'evening', 'student', '2018-22', '1st', NULL),
	(13, 'Kalia Freeman', 'taku@mailinator.net', 'Pa$$w0rd!', 'BBA', 'Morning', 'student', '2018-22', '1st', NULL),
	(14, 'Holly Franks', 'giruqas@mailinator.net', 'Pa$$w0rd!', NULL, NULL, 'Admin', NULL, NULL, NULL),
	(15, '', '', '', NULL, NULL, 'Admin', NULL, NULL, NULL),
	(16, 'Amir Wilcox', 'kysuteni@mailinator.com', 'Pa$$w0rd!', 'math', 'evening', 'student', '2020-24', '5th', NULL),
	(17, 'Echo Sexton', 'cilisisug@mailinator.com', 'Pa$$w0rd!', 'physics', NULL, 'teacher', NULL, NULL, 'qwertyj'),
	(18, 'Piper Rivers', 'doroxitec@mailinator.net', 'Pa$$w0rd!', 'english', NULL, 'teacher', NULL, NULL, 'Some subject'),
	(19, 'Francis Shepherd', 'banen@mailinator.net', 'Pa$$w0rd!', 'BBA', NULL, 'teacher', NULL, NULL, 'Some new subject'),
	(20, 'Declan Fulton', 'pyhuwaza@mailinator.com', 'Pa$$w0rd!', NULL, NULL, 'Admin', NULL, NULL, NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
