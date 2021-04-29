-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 29, 2021 at 05:43 AM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sgan`
--

-- --------------------------------------------------------

--
-- Table structure for table `admission_list`
--

DROP TABLE IF EXISTS `admission_list`;
CREATE TABLE IF NOT EXISTS `admission_list` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `course_name` text NOT NULL,
  `comp_subject` text NOT NULL,
  `opt_subject` text NOT NULL,
  `oca_subject` text NOT NULL,
  `c_name` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admission_list`
--

INSERT INTO `admission_list` (`id`, `course_name`, `comp_subject`, `opt_subject`, `oca_subject`, `c_name`) VALUES
(3, '10 class Course', 'maths, scrience, gujrati, hindi, english,social science', 'computer, P.T', 'Music', 'Class 10'),
(4, '11 Sci course', 'Chemistry, Phycis', 'Maths, Biology', 'Computer', '11 Science');

-- --------------------------------------------------------

--
-- Table structure for table `admission_master`
--

DROP TABLE IF EXISTS `admission_master`;
CREATE TABLE IF NOT EXISTS `admission_master` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `admission_class` varchar(250) NOT NULL,
  `admission_session` varchar(250) NOT NULL,
  `student_name` varchar(250) NOT NULL,
  `student_photo` varchar(250) NOT NULL,
  `student_gender` varchar(250) NOT NULL,
  `date_of_birth` date NOT NULL,
  `date_of_birth_in_word` varchar(250) NOT NULL,
  `place_of_birth` varchar(250) NOT NULL,
  `parents_detail` text NOT NULL,
  `category` varchar(250) NOT NULL,
  `last_school_name_address` varchar(250) NOT NULL,
  `last_school_attend` varchar(250) NOT NULL,
  `last_school_affiliated` varchar(250) NOT NULL,
  `result_of_last_class` text NOT NULL,
  `transfer_certificate_no` varchar(250) NOT NULL,
  `date_of_issue` varchar(250) NOT NULL,
  `birth_certificate` varchar(250) NOT NULL,
  `case_certificate` varchar(250) NOT NULL,
  `report_card` varchar(250) NOT NULL,
  `transfer_certificate` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admission_master`
--

INSERT INTO `admission_master` (`id`, `admission_class`, `admission_session`, `student_name`, `student_photo`, `student_gender`, `date_of_birth`, `date_of_birth_in_word`, `place_of_birth`, `parents_detail`, `category`, `last_school_name_address`, `last_school_attend`, `last_school_affiliated`, `result_of_last_class`, `transfer_certificate_no`, `date_of_issue`, `birth_certificate`, `case_certificate`, `report_card`, `transfer_certificate`) VALUES
(1, 'sdf', 'gfh', 'bb', '1.jpeg', 'male', '2021-04-28', 'g', 'gh', '', 'on', 'as', 'sdf', 'sdaf', '', 'bdfg', '2021-04-28', 'birth-1.jpeg', 'case-1.jpeg', 'report-1.jpeg', 'transfer-1.jpeg'),
(2, 'sdf', 'gfh', 'bb', '2.jpeg', 'male', '2021-04-28', 'g', 'gh', '[\"fdg\",\"bnv\",\"jhb\",\"jh\",\"hj\",\"hj\"]', 'on', 'as', 'sdf', 'sdaf', '', 'bdfg', '2021-04-28', 'birth-2.jpeg', 'case-2.jpeg', 'report-2.jpeg', 'transfer-2.jpeg'),
(3, 'A', '1', 'Bansari Gorasiya', '3.jpg', 'female', '2021-04-29', 'four september fjkdgn', 'mankuva', '[\"Kantaben\",\"Murjibhai\",\"Mankuva\",\"Mankuva\",\"74689567\",\"9847359867\"]', 'OBC', 'Bhuj - leva patel', '9th', 'CBSE', '[\"Gujarati\",\"100\",\"56\",\"89\",\"df\",\"Hindi\",\"100\",\"34\",\"32\",\"mnb\",\"Maths\",\"100\",\"849\",\"89\",\"nm\",\"English\",\"100\",\"89\",\"23\",\"fjkg\",\"xyz\",\"100\",\"21\",\"12\",\"s4f\",\"xyz\",\"100\",\"342\",\"234\",\"sdf\",\"xyz\",\"100\",\"32\",\"43\",\"sdf\"]', '121', '2021-04-29', 'birth-3.jpg', 'case-3.jpg', 'report-3.jpg', 'transfer-3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `admission_procedure`
--

DROP TABLE IF EXISTS `admission_procedure`;
CREATE TABLE IF NOT EXISTS `admission_procedure` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ad_procedure` text NOT NULL,
  `ad_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admission_procedure`
--

INSERT INTO `admission_procedure` (`id`, `ad_procedure`, `ad_date`) VALUES
(1, 'An admission to this vidhyalaya is restricted under certain Government Regulations and by condition of age , ability and conduct.-students may have to be admitted to the standard they are found fit, under the rules and only after passing test for admission.', '2018-10-31 11:22:57'),
(2, 'Age of admission for Lower Kindergarten (L.K.G) is minimum three years, Upper Kindergarten (U.K.G) is minimum four years and standard 1st is minimum five years on or before 31st March. Corresponding increase of age for the higher classes shall be in accordance of this for admission.', '2018-10-31 11:23:09'),
(3, 'No admission is complete until the school leaving certificate from the previous recognized school is produced, duly countersigned by the education officer of the district if the students come from other state', '2018-10-31 11:23:22'),
(4, 'For fresh admission to L.K.G. classes, a photocopy of birth certificate must be produced duly attested by competent authority.', '2018-10-31 11:23:32');

-- --------------------------------------------------------

--
-- Table structure for table `album_list`
--

DROP TABLE IF EXISTS `album_list`;
CREATE TABLE IF NOT EXISTS `album_list` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `album_name` text NOT NULL,
  `year_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `album_list`
--

INSERT INTO `album_list` (`id`, `album_name`, `year_id`) VALUES
(1, 'Yoga Day - 2018', 2),
(2, 'Independence day - 2018', 2),
(6, 'Group tour - 2018', 2),
(7, 'Natal - 2017', 1),
(8, 'sarad punam', 1),
(9, 'Annual Function celebration  ', 1),
(10, 'Farewell of Class 12th', 2),
(11, 'Annual Function celebration  ', 1),
(12, 'Garba Making Competition ', 2),
(13, 'Group Song Competition ', 2),
(14, 'Solo Dance Competition ', 2),
(15, 'Field Trip ', 2),
(16, 'Kite Festival ', 3),
(17, 'Celebration of 70th Republic day. ', 3),
(18, 'Educational Trip to Vande Mataram Memorial', 3),
(19, 'Pariksha Pe Charcha ', 3),
(20, 'Remove Plastic Rally ', 3),
(21, 'Field trip to Rakshak Van ', 3),
(22, 'Yoga day celebration', 3),
(23, 'Solo dance competition ', 3),
(24, 'Drawing Competition', 3),
(25, 'Tree Plantation ', 3),
(26, 'Janmashtmi celebration ', 3),
(27, '73rd Independence day Celebration ', 3),
(29, 'Inter- School Volleyball Competition', 3),
(30, 'Prakruti Vandan  On The Occasion Teachers Day ', 4);

-- --------------------------------------------------------

--
-- Table structure for table `cbs_circular`
--

DROP TABLE IF EXISTS `cbs_circular`;
CREATE TABLE IF NOT EXISTS `cbs_circular` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `notice_title` text NOT NULL,
  `notice_date` date NOT NULL,
  `notice_image` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cbs_circular`
--

INSERT INTO `cbs_circular` (`id`, `notice_title`, `notice_date`, `notice_image`) VALUES
(1, 'Diwali Vacation', '2018-11-03', '1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `co_curricular`
--

DROP TABLE IF EXISTS `co_curricular`;
CREATE TABLE IF NOT EXISTS `co_curricular` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `c_date` date NOT NULL,
  `c_day` text NOT NULL,
  `primary_section` text NOT NULL,
  `secondary_section` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `co_curricular`
--

INSERT INTO `co_curricular` (`id`, `c_date`, `c_day`, `primary_section`, `secondary_section`) VALUES
(1, '2018-10-13', 'Saturday', 'Rangoli Competition', 'Rangoli Competition'),
(2, '2018-10-16', 'Tuesday', 'Navratri celebration', 'Navratri celebration'),
(3, '2018-10-27', 'Saturday', 'Extempore (Hindi)', 'Extempore (English)'),
(4, '2019-01-26', 'Saturday', '', 'Cycle Rally on Republic Day');

-- --------------------------------------------------------

--
-- Table structure for table `create_class`
--

DROP TABLE IF EXISTS `create_class`;
CREATE TABLE IF NOT EXISTS `create_class` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `class_name` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `create_class`
--

INSERT INTO `create_class` (`id`, `class_name`) VALUES
(1, 'Class - 1'),
(2, 'Class - 2'),
(3, 'Class - 10'),
(4, 'Class - 11'),
(5, 'Class- 9');

-- --------------------------------------------------------

--
-- Table structure for table `create_section`
--

DROP TABLE IF EXISTS `create_section`;
CREATE TABLE IF NOT EXISTS `create_section` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `section_name` text NOT NULL,
  `class_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `create_section`
--

INSERT INTO `create_section` (`id`, `section_name`, `class_id`) VALUES
(1, 'Section - A', 1),
(2, 'Section - A', 3),
(3, 'Section - B', 3),
(4, 'Section - C', 3),
(5, 'Science', 4),
(6, 'Commers', 4);

-- --------------------------------------------------------

--
-- Table structure for table `department_list`
--

DROP TABLE IF EXISTS `department_list`;
CREATE TABLE IF NOT EXISTS `department_list` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dep_name` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department_list`
--

INSERT INTO `department_list` (`id`, `dep_name`) VALUES
(1, 'Primary Section'),
(2, 'Secondary Section');

-- --------------------------------------------------------

--
-- Table structure for table `eduction_trip`
--

DROP TABLE IF EXISTS `eduction_trip`;
CREATE TABLE IF NOT EXISTS `eduction_trip` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `trip_date` date NOT NULL,
  `trip_title` text NOT NULL,
  `trip_duration` text NOT NULL,
  `trip_class` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `eduction_trip`
--

INSERT INTO `eduction_trip` (`id`, `trip_date`, `trip_title`, `trip_duration`, `trip_class`) VALUES
(3, '2019-01-23', 'Vande Mataram Memorial Museum.', '5 hours ', 5);

-- --------------------------------------------------------

--
-- Table structure for table `extra_circular`
--

DROP TABLE IF EXISTS `extra_circular`;
CREATE TABLE IF NOT EXISTS `extra_circular` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ec_date` date NOT NULL,
  `ec_day` text NOT NULL,
  `primary_section` text NOT NULL,
  `secondary_section` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `extra_circular`
--

INSERT INTO `extra_circular` (`id`, `ec_date`, `ec_day`, `primary_section`, `secondary_section`) VALUES
(1, '2018-09-15', 'Saturday', 'Group Dance', 'Group Dance'),
(2, '2018-08-25', 'Saturday', 'poem', 'Drama');

-- --------------------------------------------------------

--
-- Table structure for table `gallary_list`
--

DROP TABLE IF EXISTS `gallary_list`;
CREATE TABLE IF NOT EXISTS `gallary_list` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `album_id` text NOT NULL,
  `image_name` text NOT NULL,
  `gallary_title` text NOT NULL,
  `save_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `gallary_year` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=138 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallary_list`
--

INSERT INTO `gallary_list` (`id`, `album_id`, `image_name`, `gallary_title`, `save_date`, `gallary_year`) VALUES
(1, '1', '2018-1-1(1).jpg', 'Yoga Day', '2018-10-31 11:17:59', 2018),
(2, '1', '2018-1-2(2).jpg', 'Yoga Day', '2018-10-31 11:17:59', 2018),
(3, '2', '2018-2-3(1).jpg', 'Independence Day', '2018-10-31 11:21:29', 2018),
(4, '2', '2018-2-4(2).jpg', 'Independence Day', '2018-10-31 11:21:29', 2018),
(5, '2', '2018-2-5(3).jpg', 'Independence Day', '2018-10-31 11:21:29', 2018),
(6, '2', '2018-2-6(4).jpg', 'Independence Day', '2018-10-31 11:21:29', 2018),
(7, '6', '2018-6-7(1).jpg', 'Group Tour', '2018-11-15 06:04:21', 2018),
(8, '6', '2018-6-8(2).jpg', 'Group Tour', '2018-11-15 06:04:21', 2018),
(9, '6', '2018-6-9(3).jpg', 'Group Tour', '2018-11-15 06:04:21', 2018),
(10, '6', '2018-6-10(4).jpg', 'Group Tour', '2018-11-15 06:04:21', 2018),
(13, '7', '2019-7-11(1).jpg', 'christmas', '2018-11-15 09:03:10', 2019),
(14, '7', '2019-7-14(2).jpg', 'christmas', '2018-11-15 09:03:10', 2019),
(32, '10', '2018-10-32(1).jpg', 'Farewell of Class 12th students', '2018-12-03 04:38:21', 2018),
(33, '10', '2018-10-33(2).jpg', 'Farewell of Class 12th students', '2018-12-03 04:38:21', 2018),
(34, '10', '2018-10-34(3).jpg', 'Farewell of Class 12th students', '2018-12-03 04:38:21', 2018),
(35, '10', '2018-10-35(4).jpg', 'Farewell of Class 12th students', '2018-12-03 04:38:21', 2018),
(36, '11', '2017-11-36(1).jpg', 'Annual Function - 2017', '2018-12-03 04:42:08', 2017),
(37, '11', '2017-11-37(2).jpg', 'Annual Function - 2017', '2018-12-03 04:42:08', 2017),
(38, '11', '2017-11-38(3).jpg', 'Annual Function - 2017', '2018-12-03 04:42:08', 2017),
(39, '11', '2017-11-39(4).jpg', 'Annual Function - 2017', '2018-12-03 04:42:08', 2017),
(40, '11', '2017-11-40(5).jpg', 'Annual Function - 2017', '2018-12-03 04:42:08', 2017),
(41, '11', '2017-11-41(6).jpg', 'Annual Function - 2017', '2018-12-03 04:42:08', 2017),
(42, '11', '2017-11-42(7).jpg', 'Annual Function - 2017', '2018-12-03 04:42:08', 2017),
(43, '11', '2017-11-43(1).jpg', 'Annual Function - 2017', '2018-12-03 04:43:25', 2017),
(44, '11', '2017-11-44(1).jpg', 'Annual Function - 2017', '2018-12-03 04:43:40', 2017),
(48, '12', '2018-12-48(1).jpg', 'Garba Making competition of Class 3rd to 12th. ', '2018-12-03 04:59:20', 2018),
(49, '12', '2018-12-49(2).jpg', 'Garba Making competition of Class 3rd to 12th. ', '2018-12-03 04:59:20', 2018),
(50, '12', '2018-12-50(3).jpg', 'Garba Making competition of Class 3rd to 12th. ', '2018-12-03 04:59:20', 2018),
(51, '12', '2018-12-51(4).jpg', 'Garba Making competition of Class 3rd to 12th. ', '2018-12-03 04:59:20', 2018),
(52, '12', '2018-12-52(5).jpg', 'Garba Making competition of Class 3rd to 12th. ', '2018-12-03 04:59:20', 2018),
(53, '12', '2018-12-53(6).jpg', 'Garba Making competition of Class 3rd to 12th. ', '2018-12-03 04:59:20', 2018),
(54, '13', '2018-13-54(1).jpg', 'House Wise Group Song Competition ', '2018-12-04 03:05:59', 2018),
(55, '13', '2018-13-55(2).jpg', 'House Wise Group Song Competition ', '2018-12-04 03:05:59', 2018),
(56, '13', '2018-13-56(3).jpg', 'House Wise Group Song Competition ', '2018-12-04 03:05:59', 2018),
(57, '13', '2018-13-57(4).jpg', 'House Wise Group Song Competition ', '2018-12-04 03:05:59', 2018),
(58, '13', '2018-13-58(5).jpg', 'House Wise Group Song Competition ', '2018-12-04 03:05:59', 2018),
(59, '14', '2018-14-59(1).jpg', 'House Wise Solo Dance Competition', '2018-12-04 04:56:32', 2018),
(60, '14', '2018-14-60(2).jpg', 'House Wise Solo Dance Competition', '2018-12-04 04:56:32', 2018),
(61, '14', '2018-14-61(3).jpg', 'House Wise Solo Dance Competition', '2018-12-04 04:56:32', 2018),
(62, '14', '2018-14-62(4).jpg', 'House Wise Solo Dance Competition', '2018-12-04 04:56:32', 2018),
(63, '14', '2018-14-63(5).jpg', 'House Wise Solo Dance Competition', '2018-12-04 04:56:32', 2018),
(64, '14', '2018-14-64(6).jpg', 'House Wise Solo Dance Competition', '2018-12-04 04:56:32', 2018),
(65, '14', '2018-14-65(7).jpg', 'House Wise Solo Dance Competition', '2018-12-04 04:56:32', 2018),
(66, '15', '2018-15-66(1).jpg', 'Field trip of Class 3rd to 5th.  ', '2019-01-24 03:27:06', 2018),
(67, '15', '2018-15-67(2).jpg', 'Field trip of Class 3rd to 5th.  ', '2019-01-24 03:27:06', 2018),
(68, '15', '2018-15-68(3).jpg', 'Field trip of Class 3rd to 5th.  ', '2019-01-24 03:27:06', 2018),
(69, '15', '2018-15-69(4).jpg', 'Field trip of Class 3rd to 5th.  ', '2019-01-24 03:27:06', 2018),
(70, '15', '2018-15-70(5).jpg', 'Field trip of Class 3rd to 5th.  ', '2019-01-24 03:27:06', 2018),
(71, '15', '2018-15-71(6).jpg', 'Field trip of Class 3rd to 5th.  ', '2019-01-24 03:27:13', 2018),
(72, '15', '2018-15-72(7).jpg', 'Field trip of Class 3rd to 5th.  ', '2019-01-24 03:27:13', 2018),
(73, '15', '2018-15-73(8).jpg', 'Field trip of Class 3rd to 5th.  ', '2019-01-24 03:27:13', 2018),
(74, '16', '2019-16-74(1).jpg', 'Kite festival celebration at school. ', '2019-01-24 03:43:21', 2019),
(75, '16', '2019-16-75(2).jpg', 'Kite festival celebration at school. ', '2019-01-24 03:43:21', 2019),
(76, '16', '2019-16-76(3).jpg', 'Kite festival celebration at school. ', '2019-01-24 03:43:21', 2019),
(77, '16', '2019-16-77(4).jpg', 'Kite festival celebration at school. ', '2019-01-24 03:43:21', 2019),
(78, '16', '2019-16-78(5).jpg', 'Kite festival celebration at school. ', '2019-01-24 03:43:21', 2019),
(79, '16', '2019-16-79(6).jpg', 'Kite festival celebration at school. ', '2019-01-24 03:43:21', 2019),
(80, '17', '2019-17-80(1).jpg', '26th January Republic day Celebration ', '2019-01-31 08:27:17', 2019),
(81, '17', '2019-17-81(2).jpg', '26th January Republic day Celebration ', '2019-01-31 08:27:17', 2019),
(82, '17', '2019-17-82(3).jpg', '26th January Republic day Celebration ', '2019-01-31 08:27:17', 2019),
(83, '17', '2019-17-83(4).jpg', '26th January Republic day Celebration ', '2019-01-31 08:27:17', 2019),
(84, '17', '2019-17-84(5).jpg', '26th January Republic day Celebration ', '2019-01-31 08:27:17', 2019),
(85, '18', '2019-18-85(1).jpg', 'Class 9th Educational Trip to Vande Mataram Memorial Bhujodi.', '2019-02-09 05:42:19', 2019),
(86, '18', '2019-18-86(2).jpg', 'Class 9th Educational Trip to Vande Mataram Memorial Bhujodi.', '2019-02-09 05:42:19', 2019),
(87, '18', '2019-18-87(3).jpg', 'Class 9th Educational Trip to Vande Mataram Memorial Bhujodi.', '2019-02-09 05:42:19', 2019),
(88, '18', '2019-18-88(4).jpg', 'Class 9th Educational Trip to Vande Mataram Memorial Bhujodi.', '2019-02-09 05:42:19', 2019),
(89, '19', '2019-19-89(1).jpg', 'Students of Class 10th & 12th participated in the \'Pariksha Pe Charcha\' contest to get an opportunity to interact with the prime minister Narendra Modi.', '2019-02-20 03:30:35', 2019),
(90, '20', '2019-20-90(1).jpg', 'Initiative for remove plastic and save cow rally by the students. ', '2019-04-25 02:44:13', 2019),
(91, '20', '2019-20-91(2).jpg', 'Initiative for remove plastic and save cow rally by the students. ', '2019-04-25 02:44:13', 2019),
(92, '20', '2019-20-92(3).jpg', 'Initiative for remove plastic and save cow rally by the students. ', '2019-04-25 02:44:13', 2019),
(93, '21', '2019-21-93(1).jpg', 'Field trip of class 6th to 8th students.', '2019-04-25 02:45:40', 2019),
(94, '21', '2019-21-94(2).jpg', 'Field trip of class 6th to 8th students.', '2019-04-25 02:45:44', 2019),
(95, '21', '2019-21-95(3).jpg', 'Field trip of class 6th to 8th students.', '2019-04-25 02:45:44', 2019),
(96, '22', '2019-22-96(1).jpg', '5th International Yoga day celebration.', '2019-06-22 07:31:13', 2019),
(97, '22', '2019-22-97(2).jpg', '5th International Yoga day celebration.', '2019-06-22 07:31:13', 2019),
(98, '22', '2019-22-98(3).jpg', '5th International Yoga day celebration.', '2019-06-22 07:31:18', 2019),
(99, '22', '2019-22-99(4).jpg', '5th International Yoga day celebration.', '2019-06-22 07:31:18', 2019),
(100, '22', '2019-22-100(5).jpg', '5th International Yoga day celebration.', '2019-06-22 07:31:18', 2019),
(101, '22', '2019-22-101(6).jpg', '5th International Yoga day celebration.', '2019-06-22 07:31:18', 2019),
(102, '22', '2019-22-102(7).jpg', '5th International Yoga day celebration.', '2019-06-22 07:31:18', 2019),
(103, '22', '2019-22-103(8).jpg', '5th International Yoga day celebration.', '2019-06-22 07:31:18', 2019),
(104, '22', '2019-22-104(9).jpg', '5th International Yoga day celebration.', '2019-06-22 07:31:18', 2019),
(105, '22', '2019-22-105(10).jpg', '5th International Yoga day celebration.', '2019-06-22 07:31:18', 2019),
(106, '22', '2019-22-106(11).jpg', '5th International Yoga day celebration.', '2019-06-22 07:31:18', 2019),
(107, '22', '2019-22-107(12).jpg', '5th International Yoga day celebration.', '2019-06-22 07:31:18', 2019),
(109, '23', '2019-23-108(1).jpg', 'House wise solo dance competition  ', '2019-07-30 04:58:45', 2019),
(110, '23', '2019-23-110(2).jpg', 'House wise solo dance competition  ', '2019-07-30 04:58:45', 2019),
(111, '24', '2019-24-111(1).jpg', 'House wise Drawing Competition', '2019-07-30 05:00:08', 2019),
(112, '24', '2019-24-112(2).jpg', 'House wise Drawing Competition', '2019-07-30 05:00:08', 2019),
(113, '24', '2019-24-113(3).jpg', 'House wise Drawing Competition', '2019-07-30 05:00:08', 2019),
(114, '25', '2019-25-114(1).jpg', 'Tree Plantation by the S.G.A students. ', '2019-08-29 02:39:19', 2019),
(115, '25', '2019-25-115(2).jpg', 'Tree Plantation by the S.G.A students. ', '2019-08-29 02:39:19', 2019),
(116, '25', '2019-25-116(3).jpg', 'Tree Plantation by the S.G.A students. ', '2019-08-29 02:39:19', 2019),
(117, '25', '2019-25-117(4).jpg', 'Tree Plantation by the S.G.A students. ', '2019-08-29 02:39:19', 2019),
(118, '25', '2019-25-118(5).jpg', 'Tree Plantation by the S.G.A students. ', '2019-08-29 02:39:19', 2019),
(119, '26', '2019-26-119(1).jpg', 'Janmashtmi Celebration ', '2019-08-29 07:44:50', 2019),
(120, '26', '2019-26-120(2).jpg', 'Janmashtmi Celebration ', '2019-08-29 07:44:50', 2019),
(121, '26', '2019-26-121(3).jpg', 'Janmashtmi Celebration ', '2019-08-29 07:44:50', 2019),
(122, '27', '2019-27-122(1).jpg', '73rd Independence day Celebration ', '2019-08-29 07:54:29', 2019),
(123, '27', '2019-27-123(2).jpg', '73rd Independence day Celebration ', '2019-08-29 07:54:29', 2019),
(124, '27', '2019-27-124(3).jpg', '73rd Independence day Celebration ', '2019-08-29 07:54:29', 2019),
(126, '29', '2019-29-125(1).jpg', 'AROMA -2019 an Inter School Volleyball Competition ', '2019-09-16 02:24:25', 2019),
(127, '29', '2019-29-127(2).jpg', 'AROMA -2019 an Inter School Volleyball Competition ', '2019-09-16 02:24:25', 2019),
(128, '29', '2019-29-128(3).jpg', 'AROMA -2019 an Inter School Volleyball Competition ', '2019-09-16 02:24:25', 2019),
(129, '29', '2019-29-129(4).jpg', 'AROMA -2019 an Inter School Volleyball Competition ', '2019-09-16 02:24:25', 2019),
(130, '29', '2019-29-130(5).jpg', 'AROMA -2019 an Inter School Volleyball Competition ', '2019-09-16 02:24:25', 2019),
(131, '29', '2019-29-131(6).jpg', 'AROMA -2019 an Inter School Volleyball Competition ', '2019-09-16 02:24:25', 2019),
(132, '29', '2019-29-132(7).jpg', 'AROMA -2019 an Inter School Volleyball Competition ', '2019-09-16 02:24:25', 2019),
(133, '29', '2019-29-133(8).jpg', 'AROMA -2019 an Inter School Volleyball Competition ', '2019-09-16 02:24:25', 2019),
(134, '30', '2020-30-134(1).jpg', 'Prakruti Vandan at Shree Ghanshyam Smruti Van', '2020-09-09 03:52:18', 2020),
(135, '30', '2020-30-135(2).jpg', 'Prakruti Vandan at Shree Ghanshyam Smruti Van', '2020-09-09 03:52:18', 2020),
(136, '30', '2020-30-136(3).jpg', 'Prakruti Vandan at Shree Ghanshyam Smruti Van', '2020-09-09 03:52:18', 2020),
(137, '30', '2020-30-137(4).jpg', 'Prakruti Vandan at Shree Ghanshyam Smruti Van', '2020-09-09 03:52:18', 2020);

-- --------------------------------------------------------

--
-- Table structure for table `hostal_schedule`
--

DROP TABLE IF EXISTS `hostal_schedule`;
CREATE TABLE IF NOT EXISTS `hostal_schedule` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `hostal_activity` text NOT NULL,
  `activity_time` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hostal_schedule`
--

INSERT INTO `hostal_schedule` (`id`, `hostal_activity`, `activity_time`) VALUES
(1, 'Prayer', '6 AM');

-- --------------------------------------------------------

--
-- Table structure for table `leaving_certificate`
--

DROP TABLE IF EXISTS `leaving_certificate`;
CREATE TABLE IF NOT EXISTS `leaving_certificate` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `stu_name` varchar(100) NOT NULL,
  `stu_dob` date NOT NULL,
  `enrollment_no` text NOT NULL,
  `l_document` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `leaving_certificate`
--

INSERT INTO `leaving_certificate` (`id`, `stu_name`, `stu_dob`, `enrollment_no`, `l_document`) VALUES
(5, 'Nancy Pindoriya', '2003-06-10', '691', '5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `live_video`
--

DROP TABLE IF EXISTS `live_video`;
CREATE TABLE IF NOT EXISTS `live_video` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `live_title` varchar(20) NOT NULL,
  `live_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `live_video`
--

INSERT INTO `live_video` (`id`, `live_title`, `live_date`) VALUES
(2, 'https://www.youtube.', '2019-03-08');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ip_address` text NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=70 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `ip_address`, `datetime`) VALUES
(1, '103.96.12.91', '2019-09-10 09:56:43'),
(2, '103.96.12.91', '2019-09-10 10:09:18'),
(3, '42.106.4.138', '2019-09-10 10:11:21'),
(4, '103.96.12.91', '2019-09-10 11:37:50'),
(5, '103.96.12.91', '2019-09-10 11:53:38'),
(6, '103.96.12.91', '2019-09-11 06:18:30'),
(7, '103.96.12.91', '2019-09-12 05:37:54'),
(8, '103.96.12.91', '2019-09-12 12:33:09'),
(9, '103.96.12.91', '2019-09-13 05:54:20'),
(10, '103.96.12.91', '2019-09-13 11:08:03'),
(11, '103.96.12.91', '2019-09-14 04:18:04'),
(12, '103.96.12.91', '2019-09-14 13:31:59'),
(13, '103.108.0.10', '2019-09-16 02:20:30'),
(14, '103.96.12.91', '2019-09-16 04:21:32'),
(15, '103.96.12.91', '2019-09-16 04:37:05'),
(16, '103.96.12.91', '2019-09-17 10:59:57'),
(17, '103.108.0.10', '2019-09-20 05:46:13'),
(18, '103.96.12.91', '2019-09-20 05:51:17'),
(19, '103.96.12.91', '2019-09-20 07:50:51'),
(20, '103.108.0.10', '2019-09-21 02:21:05'),
(21, '103.108.0.10', '2019-09-21 06:57:02'),
(22, '103.108.0.10', '2019-11-11 03:51:45'),
(23, '103.108.0.10', '2019-12-14 03:56:48'),
(24, '103.96.12.91', '2019-12-14 09:18:39'),
(25, '2405:204:8307:fda2::716:c8a5', '2019-12-27 14:24:23'),
(26, '103.108.0.10', '2019-12-28 05:54:20'),
(27, '103.96.12.91', '2020-02-20 07:37:55'),
(28, '103.108.0.10', '2020-02-20 07:39:32'),
(29, '103.108.0.10', '2020-03-24 06:07:13'),
(30, '103.108.0.10', '2020-03-24 06:27:51'),
(31, '103.108.0.10', '2020-03-24 06:27:52'),
(32, '103.108.0.10', '2020-03-24 06:27:52'),
(33, '103.108.0.10', '2020-03-24 06:27:53'),
(34, '103.108.0.10', '2020-03-24 06:27:53'),
(35, '2409:4041:611:e866:14d8:bf1c:bb18:4085', '2020-04-04 05:09:41'),
(36, '2409:4041:611:e866:14d8:bf1c:bb18:4085', '2020-04-04 05:19:43'),
(37, '49.34.59.239', '2020-04-04 05:26:33'),
(38, '2409:4041:2614:dabf::53:10a4', '2020-04-04 07:29:48'),
(39, '2409:4041:2614:dabf::53:10a4', '2020-04-04 07:53:35'),
(40, '114.31.176.99', '2020-04-09 11:42:22'),
(41, '114.31.176.99', '2020-04-09 11:51:19'),
(42, '114.31.176.99', '2020-04-10 03:57:08'),
(43, '114.31.176.94', '2020-04-10 12:42:58'),
(44, '2409:4041:e8c:beb7::cb8b:2c0c', '2020-04-23 05:48:33'),
(45, '2409:4041:e8c:beb7::cb8b:2c0c', '2020-04-23 05:56:38'),
(46, '2405:205:c841:d8c4::df3:c0b0', '2020-05-04 14:14:54'),
(47, '103.108.0.10', '2020-05-08 05:23:35'),
(48, '103.108.0.10', '2020-05-08 05:35:03'),
(49, '103.108.0.10', '2020-05-08 05:53:57'),
(50, '103.108.0.10', '2020-05-08 05:56:50'),
(51, '157.32.4.91', '2020-05-15 12:29:51'),
(52, '2409:4041:2e85:35a2::cb0b:fa02', '2020-06-01 16:27:22'),
(53, '103.108.0.10', '2020-06-06 13:23:47'),
(54, '103.108.0.10', '2020-06-06 13:35:18'),
(55, '103.108.0.10', '2020-06-06 13:37:48'),
(56, '103.108.0.10', '2020-06-06 13:41:38'),
(57, '2405:205:c84c:56a8::182b:b8ad', '2020-07-15 09:49:36'),
(58, '2405:205:c84c:56a8::182b:b8ad', '2020-07-15 10:02:17'),
(59, '103.108.0.10', '2020-07-16 05:26:52'),
(60, '103.108.0.10', '2020-09-07 05:16:16'),
(61, '103.108.0.10', '2020-09-09 03:46:16'),
(62, '103.108.0.10', '2021-02-15 07:55:39'),
(63, '103.108.0.10', '2021-02-15 08:01:32'),
(64, '103.108.0.10', '2021-02-15 08:04:35'),
(65, '103.108.0.10', '2021-02-15 08:07:02'),
(66, '103.108.0.10', '2021-02-19 04:50:07'),
(67, '103.108.0.10', '2021-02-19 05:09:10'),
(68, '103.108.0.10', '2021-02-24 07:03:34'),
(69, '127.0.0.1', '2021-04-29 04:11:05');

-- --------------------------------------------------------

--
-- Table structure for table `news_event`
--

DROP TABLE IF EXISTS `news_event`;
CREATE TABLE IF NOT EXISTS `news_event` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ne_title` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `ne_date` date NOT NULL,
  `ne_type` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `ne_image` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `ne_desc` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=43 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news_event`
--

INSERT INTO `news_event` (`id`, `ne_title`, `ne_date`, `ne_type`, `ne_image`, `ne_desc`) VALUES
(20, 'Inter School Volleyball Competition AROMA-2019', '2019-09-07', 'Events', '1.jpg', 'SHREE GHANSHYAM ACADEMY-NARANPAR organised AROMA-2019 an Inter School Volleyball Competition'),
(29, 'SATY SAFE FROM COVID 19', '2020-04-04', 'Events', '29.jpeg', 'In continuation of the efforts to prevent the spread of COVID-19, the following initiatives of the Government may be brought to the notice of all the students and their family. • AROGYA SETU APP : This App has been developed to fight against COVID -19 which is useful for Students, parents, teachers , other staff and their family members.  • This App can be down loaded from:  IOS : itms-apps://itunes.apple.com/app/id505825357  Android : https://play.google.com/store/apps/details?id=nic.goi.arogyasetu  • PROTOCOL FOR IMMUNITY BOOSTING: Ministry of AYUSH has developed a protocol for immunity boosting measures for self care of kids. A detailed brochure of the same is enclosed for the use of students, teachers, other staff and their family members.  • LIGHTING OF CANDLE on 05-4-2020 at 9 P.M.: As addressed by the Hon’ble Prime Minister to the Nation on 3rd April 2020, students, teachers, other staff of the school and their family members may light a candle, diya or torch of their mobile for 9 minutes at 9 PM on 5th April, 2020 Sunday at their HOUSES to realise the power of light and to highlight the objective for which the whole nation is fighting together.'),
(30, 'EXTRAMARKS online content', '2020-04-04', 'Events', '30.jpg', 'Dear Parent,   Shree Ghanshyam Academy always put best efforts for Higher education and Overall development of its students. In the present scenario, when the whole country is fighting against the CORONA and as a part of Lockdown when school is totally closed, school has made an arrangement of \"Learning from Home By the Means of E-learning\" with the purpose that students stay in touch with studies in these days.  To avail the benifits of this facility, you need to download an application \"Extramarks\" from your mobile\'s play store. After completing the initial registration process, you need to activate it by entering \"GTS-GJ1673\"activation code. After this one time process, students can enjoy creative audio video learning through this application.  If you find any problem in using this application, then you can contact the respected class teacher of your child for the solution of the problem.  I request all the students and parents to use and get the benefits of this new initiative by school.   \"Stay Home, Stay Safe\"'),
(33, 'ADMISSION OPEN (2021-22)-એડમિશન ચાલુ છે (૨૦૨૧-૨૨) , SHREE GHANSHYAM ACADEMY - NARANPAR ENGLISH MEDIUM (CBSE Board): K.G. to 12th (Science & Commerce)  તથા શ્રી ઘનશ્યામ  વિદ્યાલય- નારણપર  ગુજરાતી માધ્યમ (GSEB)  ધોરાણ ૬,૭,૮,૯ અને ૧૦.', '2021-02-15', 'News', '33.jpg', '<p><b>SHREE GHANSHYAM ACADEMY - NARANPAR<br>\r\nENGLISH MEDIUM (CBSE):<br>\r\nK.G. to 12th (Science & Commerce)</b><br>\r\n</p><p><br></p><div style=\"text-align: left;\"><br></div>\r\n<!--/data/user/0/com.samsung.android.app.notes/files/share/clipdata_200504_195245_720.sdoc-->\r\n<!--/data/user/0/com.samsung.android.app.notes/files/share/clipdata_200504_195245_720.sdoc-->\r\n<!--/data/user/0/com.samsung.android.app.notes/files/share/clipdata_200504_195245_720.sdoc--><p></p>'),
(42, 'ADMISSION OPEN (2021-22)-એડમિશન ચાલુ છે (૨૦૨૧-૨૨) , ENGLISH MEDIUM (CBSE Board):  For Class L.K.G &  U.K.G. ', '2021-02-15', 'Events', '42.jpg', '<pre class=\"tw-data-text tw-text-large XcVN5d tw-ta\" data-placeholder=\"Translation\" id=\"tw-target-text\" dir=\"ltr\" style=\"unicode-bidi: isolate; line-height: 32px; background-color: rgb(248, 249, 250); border: none; padding: 2px 0.14em 2px 0px; position: relative; margin-top: -2px; margin-bottom: -2px; resize: none; overflow: hidden; width: 270px; overflow-wrap: break-word;\"><span style=\"color: rgb(255, 0, 0); font-family: inherit; font-size: 24px; white-space: pre-wrap;\">L.K.G  ના વિદ્યાર્થીઓ માટે સંંપૂર્ણ સ્કૂલ બેગ કિટ તથા યુનિફોર્મ ફ્રી.</span></pre>'),
(36, 'ONLINE DRAWING COMPETITION ', '2020-05-31', 'Events', '34.jpg', '<p>શ્રી ઘનશ્યામ એકેડેમી - નારણપર</p><p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;પ્રસ્તુત કરે છે</p><p>\"કલાકૃતિ\"- (ઓનલાઇન ચિત્ર સ્પર્ધા)</p><p>*-------------------------------*</p><p><span style=\"font-size: 13.5px;\"><br></span></p><p>૧.૦ : પ્રસ્તાવના :</p><p><span style=\"font-size: 13.5px;\"><br></span></p><p>ચિત્ર એક એવી કળા છે કે જેમા ચિત્રકાર એક નાનકડા પેપર પર પોતાના મનની તમામ પ્રકારની લાગણીઓ ને વિવિધ રંગોના માધ્યમથી એક નવો આકાર આપે છે. કોરોના મહામારી ના વૈશ્વિક સંકટ ના સમય દરમિયાન બાળક ઘરબેઠે ઓનલાઇન શિક્ષણ તો મેળવી રહ્યું છેે પરંતુ લોકડાઉન હોવાના કારણે બાળકની અન્ય સહઅભ્યાસિક પ્રવૃત્તિઓ પર તો જાણે સંપૂર્ણ પૂર્ણવિરામ લાગી ગયું છે અને તેથી જ બાળકોમાં એક નવી ઉર્જાનુ સંચાર કરવા માટે શ્રી ઘનશ્યામ એકેડેમી નારણપર દ્વારા એક ઓનલાઇન ચિત્ર સ્પર્ધાનું આયોજન કરવામાં આવ્યું છે.</p><p>--------------------------------------------</p><p>૨.૦ : વિભાગ તથા વિષયો :</p><p><span style=\"font-size: 13.5px;\"><br></span></p><p>વિભાગ - અ : (ધોરણ ૩ થી ૫)</p><p>વિષય : કોરોના થી રક્ષણ માટે સલામતી ના ઉપાયો</p><p><span style=\"font-size: 13.5px;\"><br></span></p><p>વિભાગ - બ : (ધોરણ ૬ થી ૮)</p><p>વિષય : કોરોના યોદ્ધાઓ</p><p><span style=\"font-size: 13.5px;\"><br></span></p><p>વિભાગ - ક : (ધોરણ ૯ થી ૧૨)</p><p>વિષય : કોરોના સામે આપણી એકતા - જાન ભી, જહાન ભી</p><p>---------------------------------------------*</p><p>*૩.૦ : સ્પર્ધાના નિયમો :*</p><p><span style=\"font-size: 13.5px;\"><br></span></p><p>૧) ચિત્ર ફરજિયાત પણે ચાર્ટ પેપર ઉપર બનાવવાનું રહેશે જેની *સાઇઝ અડધા ચાર્ટ પેપર* જેટલી હોવી જોઈએ.</p><p>૨) ચિત્ર બનાવવામાં માત્ર *વોટર કલર* નો જ ઉપયોગ કરવાનો રહેશે.</p><p>૩) ચિત્રની નીચે *જમણી બાજુ* ખૂણામાં વિદ્યાર્થીઓને પોતાનું *પૂરું નામ તથા પોતાનું ધોરણ* ફરજિયાત પણે લખવાનું રહેશે.</p><p>૪) દરેક વિદ્યાર્થીએ ગુરૂવાર, તારીખ *૪ જુન ના સવારે ૧૧ વાગ્યા સુધી* પોતાના ચિત્રનું વ્યવસ્થિત રીતે&nbsp; ફોટો પાડીને એટલે કે તમારું ચિત્ર એકદમ સ્પષ્ટ દેખાય એ રીતે પોતાના *વર્ગ શિક્ષકને અલગથી વોટ્સએપ કરવાનું રહેશે*. અહીં ખાસ ધ્યાન રાખવી કે કોઈ પણ વિદ્યાર્થીએ ઓનલાઇન શિક્ષણનો આપણું ગ્રુપ છે તેમાં વોટ્સએપ કરવું નહીં.&nbsp;</p><p>૫) *દરેક વિભાગમાંથી પ્રથમ, દ્વિતીય અને તૃતીય* એમ ત્રણ વિજેતાઓ જાહેર કરવામાં આવશે કે જેમને *ઇનામો તથા સર્ટિફિકેટ* દ્વારા સન્માનવામાં આવશે.</p><p>૬) દરેક વિદ્યાર્થીઓએ ચિત્ર બનાવવા સમયે શરૂઆતથી અંત સુધીનું *સમગ્ર પ્રક્રિયાનું વિડિયો રેકોર્ડિંગ ફરજિયાત પણે* કરી રાખવાનું રહેશે. ખાસ નોંધ લેવી કે ચિત્ર સાથે આ વીડિયો મોકલવાનું નથી પરંતુ જો નિર્ણાયકશ્રીને જરૂર લાગશે તો તેઓ આ વિડિયો રેકોર્ડિંગ જોઈ શકશે.</p><p>૭) *નિર્ણાયકશ્રીઓનો નિર્ણય આખરી રહેશે* કે જે કોઈપણ પ્રકારની ચર્ચા વિચારણાને પાત્ર રહેશે નહીં.</p><p><span style=\"font-size: 13.5px;\"><br></span></p><p>*---------------------------------------------*</p><p><span style=\"font-size: 13.5px;\"><br></span></p><p>*વિશેષ નોંધ:*</p><p><span style=\"font-size: 13.5px;\"><br></span></p><p>• આ સ્પર્ધાનું પરિણામનું તારીખ ૬ જુન,૨૦૨૦ ના સવારના ૧૧ વાગ્યે લાઈવ પ્રસારણ કરવામાં આવશે. આ લાઈવ પ્રસારણ શાળાના ઓફિસિયલ ફેસબુક એકાઉન્ટ ના માધ્યમથી કરવામાં આવશે.</p><p><br></p>'),
(37, 'Winners of Online Drawing Competition ', '2020-06-06', 'Events', '37.jpg', '<h3><b style=\"\"><font color=\"#ff0000\" style=\"background-color: rgb(247, 247, 247);\">\"KALAKRITI\"&nbsp;Online Drawing Competition&nbsp;</font></b></h3><p><font color=\"#9c00ff\"><b><span style=\"font-size: 18px;\">Winners of CATEGORY-A (CLASS 3rd to 5th)</span></b></font></p><p><font color=\"#9c00ff\"><b><br></b></font><span style=\"color: rgb(8, 82, 148); font-size: 18px;\"><b>1st Rank:Vekariya Priyanshi- (Class 5th)</b></span></p><p><b><span style=\"color: rgb(8, 82, 148); font-size: 18px;\">2nd Rank:</span><span style=\"color: rgb(8, 82, 148); font-size: 18px;\">Vekariya Anjni-(Class 4th)</span></b></p><p><b><span style=\"color: rgb(8, 82, 148); font-size: 18px;\">3rd Rank:&nbsp;</span><span style=\"color: rgb(8, 82, 148); font-size: 18px;\">Shah Pari-(Class 3rd)</span></b></p><ul><li><span style=\"font-size: 18px;\"><font color=\"#085294\"></font></span></li><li><span style=\"font-size: 18px;\"></span></li></ul>'),
(38, 'Winners of Online Drawing Competition', '2020-06-06', 'Events', '38.jpg', '<h3 style=\"font-family: Roboto, sans-serif; color: rgb(91, 98, 107); white-space: nowrap;\"><span style=\"font-weight: bolder;\"><font color=\"#ff0000\" style=\"background-color: rgb(247, 247, 247);\">\"KALAKRITI\"&nbsp;Online Drawing Competition&nbsp;</font></span></h3><p style=\"color: rgb(91, 98, 107); white-space: nowrap;\"><font color=\"#9c00ff\"><span style=\"font-weight: bolder;\"><span style=\"font-size: 18px;\">Winners of CATEGORY-B (CLASS 6th to 8th)</span></span></font></p><p style=\"color: rgb(91, 98, 107); white-space: nowrap;\"><font color=\"#9c00ff\"><span style=\"font-weight: bolder;\"><br></span></font><span style=\"color: rgb(8, 82, 148); font-size: 18px;\"><span style=\"font-weight: bolder;\">1st Rank:Mepani Vidhya (Class 8th)</span></span></p><p style=\"color: rgb(91, 98, 107); white-space: nowrap;\"><span style=\"font-weight: bolder;\"><span style=\"color: rgb(8, 82, 148); font-size: 18px;\">2nd Rank:Thacker Hetvi</span><span style=\"color: rgb(8, 82, 148); font-size: 18px;\">(Class 8th)</span></span></p><p style=\"color: rgb(91, 98, 107); white-space: nowrap;\"><span style=\"font-weight: bolder;\"><span style=\"color: rgb(8, 82, 148); font-size: 18px;\">3rd Rank: Vekariya Kivisha</span><span style=\"color: rgb(8, 82, 148); font-size: 18px;\">(Class 7th)</span></span></p>'),
(39, 'Winners of Online Drawing Competition', '2020-06-06', 'Events', '39.jpg', '<h3 style=\"font-family: Roboto, sans-serif; color: rgb(91, 98, 107); white-space: nowrap;\"><span style=\"font-weight: bolder;\"><font color=\"#ff0000\" style=\"background-color: rgb(247, 247, 247);\">\"KALAKRITI\"&nbsp;Online Drawing Competition&nbsp;</font></span></h3><p style=\"color: rgb(91, 98, 107); white-space: nowrap;\"><font color=\"#9c00ff\"><span style=\"font-weight: bolder;\"><span style=\"font-size: 18px;\">Winners of CATEGORY-B (CLASS 9th to 12th)</span></span></font></p><p style=\"color: rgb(91, 98, 107); white-space: nowrap;\"><font color=\"#9c00ff\"><span style=\"font-weight: bolder;\"><br></span></font><span style=\"color: rgb(8, 82, 148); font-size: 18px;\"><span style=\"font-weight: bolder;\">1st Rank:Kerai Vandna (Class 12th)</span></span></p><p style=\"color: rgb(91, 98, 107); white-space: nowrap;\"><span style=\"font-weight: bolder;\"><span style=\"color: rgb(8, 82, 148); font-size: 18px;\">2nd Rank:Kerai Chandni</span><span style=\"color: rgb(8, 82, 148); font-size: 18px;\">(Class12th)</span></span></p><p style=\"color: rgb(91, 98, 107); white-space: nowrap;\"><span style=\"font-weight: bolder;\"><span style=\"color: rgb(8, 82, 148); font-size: 18px;\">3rd Rank: Thakrani Sneha</span><span style=\"color: rgb(8, 82, 148); font-size: 18px;\">(Class 11th)</span></span></p>'),
(41, 'એડમિશન ચાલુ છે (૨૦૨૧-૨૨)', '2021-02-15', 'Events', '40.jpg', '<p>શ્રી ઘનશ્યામ&nbsp; વિદ્યાલય- નારણપર</p><p><b>&nbsp;<span style=\"white-space: nowrap;\">એડમિશન ચાલુ છે (૨૦૨૧-૨૨)</span></b></p><p><span style=\"white-space: nowrap;\"><b>ગુજરાતી માધ્યમ (GSEB)</b></span></p><p><span style=\"white-space: nowrap;\"><b>ધોરાણ ૬,૭,૮,૯ અને ૧૦.</b></span><br></p>');

-- --------------------------------------------------------

--
-- Table structure for table `school_management`
--

DROP TABLE IF EXISTS `school_management`;
CREATE TABLE IF NOT EXISTS `school_management` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `member_name` varchar(100) NOT NULL,
  `m_designation` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `school_management`
--

INSERT INTO `school_management` (`id`, `member_name`, `m_designation`) VALUES
(1, 'Swami Shree Narayanvallabhdasji', 'Chairman'),
(2, 'Mr. O.P Parashar', 'Director'),
(3, 'Mr. Saket Singh', 'Principle');

-- --------------------------------------------------------

--
-- Table structure for table `section_enrollment`
--

DROP TABLE IF EXISTS `section_enrollment`;
CREATE TABLE IF NOT EXISTS `section_enrollment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `class_id` int(11) NOT NULL,
  `section_id` int(11) DEFAULT NULL,
  `pr_student` int(11) NOT NULL,
  `left_student` int(11) NOT NULL,
  `enrolled` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `section_enrollment`
--

INSERT INTO `section_enrollment` (`id`, `class_id`, `section_id`, `pr_student`, `left_student`, `enrolled`) VALUES
(1, 1, 1, 100, 0, 100),
(2, 2, 0, 65, 0, 65),
(3, 3, 2, 55, 5, 60),
(4, 3, 3, 65, 5, 65),
(5, 4, 5, 120, 10, 120),
(6, 4, 6, 101, 5, 101);

-- --------------------------------------------------------

--
-- Table structure for table `slider_images`
--

DROP TABLE IF EXISTS `slider_images`;
CREATE TABLE IF NOT EXISTS `slider_images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider_images`
--

INSERT INTO `slider_images` (`id`, `image`) VALUES
(1, '1.png'),
(2, '2.jpg'),
(3, '3.jpg'),
(4, '4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `sports_activities`
--

DROP TABLE IF EXISTS `sports_activities`;
CREATE TABLE IF NOT EXISTS `sports_activities` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `s_date` date NOT NULL,
  `s_day` text NOT NULL,
  `sports_title` text NOT NULL,
  `std_3to5` varchar(10) NOT NULL,
  `std_6to8` text NOT NULL,
  `std_9to12` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sports_activities`
--

INSERT INTO `sports_activities` (`id`, `s_date`, `s_day`, `sports_title`, `std_3to5`, `std_6to8`, `std_9to12`) VALUES
(1, '2018-08-09', 'Thursday', 'Kabaddi', 'Girls', 'Girls', 'Girls'),
(2, '2018-09-15', 'Saturday', 'Football', 'Boys', 'Boys', 'Girls'),
(3, '2018-09-22', 'Saturday', 'Football', 'Boys', 'Boys', 'Boys');

-- --------------------------------------------------------

--
-- Table structure for table `system_user`
--

DROP TABLE IF EXISTS `system_user`;
CREATE TABLE IF NOT EXISTS `system_user` (
  `id` int(1) NOT NULL DEFAULT '0',
  `user_name` text NOT NULL,
  `user_pass` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `system_user`
--

INSERT INTO `system_user` (`id`, `user_name`, `user_pass`) VALUES
(0, 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(2, 'main', '1f620041989ec506a081616b154b2163');

-- --------------------------------------------------------

--
-- Table structure for table `teaching_staff`
--

DROP TABLE IF EXISTS `teaching_staff`;
CREATE TABLE IF NOT EXISTS `teaching_staff` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dep_id` int(11) NOT NULL,
  `t_name` varchar(100) NOT NULL,
  `t_designation` text NOT NULL,
  `t_image` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `video_list`
--

DROP TABLE IF EXISTS `video_list`;
CREATE TABLE IF NOT EXISTS `video_list` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `video_title` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `video_list`
--

INSERT INTO `video_list` (`id`, `video_title`) VALUES
(17, 'kf0AEjI_vyw'),
(19, 'CT78X5rwKsc'),
(20, '2xHNXH3CqgM'),
(21, '6Hh2vi1EZVY'),
(22, 'vhLTGBkscIs');

-- --------------------------------------------------------

--
-- Table structure for table `year_list`
--

DROP TABLE IF EXISTS `year_list`;
CREATE TABLE IF NOT EXISTS `year_list` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `year_name` varchar(12) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `year_list`
--

INSERT INTO `year_list` (`id`, `year_name`) VALUES
(1, '2017'),
(2, '2018'),
(3, '2019'),
(4, '2020'),
(5, '2021'),
(6, '2022'),
(7, '2023'),
(8, '2024'),
(9, '2025'),
(10, '2026');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
