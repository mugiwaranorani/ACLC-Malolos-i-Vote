-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 30, 2023 at 06:11 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aclcdata`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_account`
--

CREATE TABLE `admin_account` (
  `adminID` int(11) NOT NULL,
  `adminName` varchar(30) NOT NULL,
  `username` varchar(15) NOT NULL,
  `adminPassword` varchar(15) NOT NULL,
  `dateCreated` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_account`
--

INSERT INTO `admin_account` (`adminID`, `adminName`, `username`, `adminPassword`, `dateCreated`) VALUES
(1, 'Admin - Ranillo', 'admin', 'admin', '2023-05-19 16:49:23');

-- --------------------------------------------------------

--
-- Table structure for table `admin_home`
--

CREATE TABLE `admin_home` (
  `homeID` int(11) NOT NULL,
  `contentHeader` varchar(100) DEFAULT NULL,
  `content` varchar(5000) NOT NULL,
  `homeImages` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_home`
--

INSERT INTO `admin_home` (`homeID`, `contentHeader`, `content`, `homeImages`) VALUES
(0, 'Dashboard', 'In this admin page you can see in the filter a data reports which is a shorcut of the voters, candidates, voters account and verified account.', 'wwww.png'),
(1, NULL, 'You can view the student\'s access history, including the time and date of each login, in this user log in.', 'userlog.png'),
(2, NULL, 'The vote log displays the accounts that have already participated in the election by casting their votes.', 'votelog.png'),
(3, 'Votes', 'You can view the votes and the total number of votes cast for each candidate in the side navigation.', 'dash3.png'),
(4, NULL, 'Additionally, you can view the status of the voters and see which students have voted and have not.', 'dash4.png'),
(5, 'ADD EDIT DELETE in Candidates\'s Position and Party list', 'In side navigation you can see the Candidates\'s Position and Party list.', 'dash5.png'),
(6, 'How to add new position', 'Just click the add new position', 'dash6.png'),
(7, NULL, 'Just type what you want to add for example mayor after that click add content.', 'dash7.png'),
(8, NULL, 'after that there is a note that New position has been added to selection successfully!And then just click the back button', 'dash8.png'),
(9, 'How to edit?', 'Just click edit', 'dash9.png'),
(10, NULL, 'Just edit the mayor or whatever it is and change it to what you want a position.', 'dash10.png'),
(11, NULL, 'After that wait for the note of Position has been updated successfully! and then click back', 'dash11.png'),
(12, NULL, 'In this output you can view all that position that you put.', 'dash12.png'),
(13, 'How to delete?', 'Just click the delete button.', 'dash13.png'),
(14, NULL, 'Just click yes to delete the positiom you want to delete.', 'dash14.png'),
(15, NULL, 'Wait the note that Position has been deleted successfully!and then just click the back button.', 'dash15.png'),
(16, 'How to add new partylist', 'Just click the add new partylist.', 'dash16.png'),
(17, NULL, 'Just type what you want to add for example kalasag after that click add content.', 'dash17.png'),
(18, NULL, 'after that there is a note that New partylist has been added to selection successfully!And then just click the back button', 'dash18.png'),
(19, 'How to edit?', 'Just click edit.', 'dash19.png'),
(20, NULL, 'Just edit the kalasag or whatever it is and change it to what you want a position.', 'dash20.png'),
(21, NULL, 'After that wait for the note of Partylist has been updated successfully! and then click back', 'dash21.png'),
(22, 'How to delete?', 'Just click the delete button.', 'dash22.png'),
(23, NULL, 'Just click yes to delete the positiom you want to delete.', 'dash23.png'),
(24, NULL, 'Wait the note that Partylist has been deleted successfully!and then just click the back button.', 'dash24.png'),
(25, 'ADD EDIT DELETE Student Year level and Course', 'In side navigation you can see Student Year level and Course.', 'a1.png'),
(26, 'How to add new year level?', '\r\nJust click the add new Year level', 'a2.png'),
(27, NULL, 'Just type what you want to add for example grade1 after that click add content.', 'a3.png'),
(28, NULL, 'after that there is a note that New year level has been added to selection successfully!And then just click the back button', 'a4.png'),
(29, 'How to edit?\r\n', 'Just click edit.', 'a5.png'),
(30, NULL, 'Just edit the grade1 or whatever it is and change it to what you want a position.', 'a6.png'),
(31, NULL, 'After that wait for the note of Year level has been updated successfully! and then click back', 'a7.png'),
(32, 'How to delete?\r\n', 'Just click the delete button.', 'a8.png'),
(33, NULL, 'Just click yes to delete that you want to delete.\r\n\r\n', 'a9.png'),
(34, NULL, 'Wait the note that year level has been deleted successfully!and then just click the back button.', 'a10.png'),
(35, 'ADD EDIT DELETE IN HOME PAGE', 'In side navigation you can see the homepage ', 'q1.png'),
(36, NULL, ' In home page you can see \"Information, Announcement and System Guide\". Just click the add new content', 'q2.png'),
(37, NULL, 'Just fill the header title and content then click the choose file to add a photo after that in the bottom you can click the add content to save', 'q3.png'),
(38, NULL, '', 'q35.png'),
(39, NULL, 'after that there is a note that New information content has been added successfully!\r\n And then just click the back button\r\n\r\n', 'q4.png'),
(40, 'How to edit?\r\n', 'Just click edit.', 'q5.png'),
(41, NULL, 'In this page tou can edit the header, content or you can change the picture.', 'q6.png'),
(42, NULL, 'After you click the save wait for the notice of succesfully and just click back.', 'q7.png'),
(43, 'How to delete?\r\n', 'Just click the delete button.', 'q8.png'),
(44, NULL, 'Just click yes to delete the title, content and picture.', 'q9.png'),
(45, NULL, 'Wait the note that has been deleted successfully!and then just click the back button.\r\n\r\n', 'q10.png'),
(46, 'Add Edit Delete candidate', 'In side navigation you can see the candidate after you click that you can add edit delete a candidate and you can see in upper page a search bar to easily search a name or a position.', 'c1.png'),
(47, NULL, 'Just click the add new candidate ', 'c2.png'),
(48, NULL, 'Just add a picture and fill up the form and after that just click add new candidate', 'c3.png'),
(49, NULL, 'Wait for the notice new candidate has succesfully added', 'c4.png'),
(50, 'How to edit?', 'Just click the edit icon.', 'c5.png'),
(51, NULL, 'You can change or edit the picture and name and etc.after you edit just click save.', 'c6.png'),
(52, NULL, 'Wait for the notice of Candidate has been updated successfully! and just click back.', 'c7.png'),
(53, 'How to delete?', 'Just click the x icon.', 'c8.png'),
(54, NULL, 'Just click yes to delete the candidate.', 'c9.png'),
(55, NULL, 'Wait for the notice of Candidate has been deleted successfully! and just click back.', 'c10.png'),
(56, 'Voters account ADD, EDIT and DELETE.', 'In side navigation you can see the voters account.', 'v1.png'),
(57, 'Add new account.', 'Just click add new account.', 'v2.png'),
(58, NULL, 'Just fill up the form after that just click add new.', 'v3.png'),
(59, NULL, 'Wait for the notice that New voter account has been created successfully! and click back.', 'v4.png'),
(60, NULL, 'If you click the view voter full detail you can see the full details of the voters account.', 'v5.png'),
(61, NULL, '', 'v6.png'),
(62, NULL, 'In upper right you can see the search button to easily find the name of the voters.', 'v7.png'),
(63, NULL, 'You can edit and delete the account of the voters.', 'v8.png'),
(64, 'Election title settings', 'In side navigation you can see the election title you can edit the HOME PAGE TITLE, CANDIDATES PAGE TITLE, VOTE PAGE TITLE and RESULT PAGE TITLE.\r\n', 'v9.png'),
(65, 'Time settings', 'In side navigation you can see the time which you can set the date and time of the Student election.', 'v10.png'),
(66, NULL, 'After you set the date and time just click save date and time.', 'v11.png'),
(67, NULL, 'Wait for the notice of the Date and time has been updated successfully!and just click back.', 'v12.png');

-- --------------------------------------------------------

--
-- Table structure for table `admin_userlog`
--

CREATE TABLE `admin_userlog` (
  `id` int(11) NOT NULL,
  `adminID` int(11) NOT NULL,
  `logName` varchar(30) NOT NULL,
  `userIP` varbinary(16) NOT NULL,
  `loginTime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_userlog`
--

INSERT INTO `admin_userlog` (`id`, `adminID`, `logName`, `userIP`, `loginTime`) VALUES
(26, 1, 'Admin - Ranillo', 0x3a3a31, '2023-06-07 06:41:40'),
(27, 2, 'Admin - Ranillo', 0x3a3a31, '2023-06-07 15:56:47'),
(28, 3, 'Admin - Ranillo', 0x3a3a31, '2023-06-07 15:57:21'),
(29, 4, 'Admin - Ranillo', 0x3a3a31, '2023-06-07 16:11:50'),
(30, 5, 'Admin - Ranillo', 0x3a3a31, '2023-06-07 16:12:34'),
(31, 6, 'Admin - Ranillo', 0x3a3a31, '2023-06-07 16:12:39'),
(32, 7, 'Admin - Ranillo', 0x3a3a31, '2023-06-08 04:31:24'),
(33, 8, 'Admin - Ranillo', 0x3a3a31, '2023-06-08 07:57:41'),
(34, 9, 'Admin - Ranillo', 0x3a3a31, '2023-06-08 08:08:24'),
(35, 10, 'Admin - Ranillo', 0x3a3a31, '2023-06-08 10:19:12'),
(36, 11, 'Admin - Ranillo', 0x3a3a31, '2023-06-08 11:11:44'),
(37, 12, 'Admin - Ranillo', 0x3a3a31, '2023-06-08 13:35:16'),
(38, 13, 'Admin - Ranillo', 0x3a3a31, '2023-06-09 04:26:55'),
(39, 14, 'Admin - Ranillo', 0x3a3a31, '2023-06-11 02:47:55'),
(40, 15, 'Admin - Ranillo', 0x3a3a31, '2023-06-11 03:09:28'),
(41, 16, 'Admin - Ranillo', 0x3a3a31, '2023-06-14 06:30:34'),
(42, 17, 'Admin - Ranillo', 0x3a3a31, '2023-06-15 00:58:28'),
(43, 18, 'Admin - Ranillo', 0x3a3a31, '2023-06-15 08:19:04'),
(44, 19, 'Admin - Ranillo', 0x3a3a31, '2023-06-16 04:37:18'),
(45, 1, 'Admin - Ranillo', 0x3a3a31, '2023-06-16 14:21:38'),
(46, 1, 'Admin - Ranillo', 0x3a3a31, '2023-06-20 09:15:29'),
(47, 1, 'Admin - Ranillo', 0x3a3a31, '2023-06-27 10:02:38'),
(48, 1, 'Admin - Ranillo', 0x3a3a31, '2023-06-27 10:49:39'),
(49, 1, 'Admin - Ranillo', 0x3a3a31, '2023-06-27 12:06:28'),
(50, 1, 'Admin - Ranillo', 0x3a3a31, '2023-06-28 04:56:46'),
(51, 1, 'Admin - Ranillo', 0x3a3a31, '2023-06-28 08:11:08'),
(52, 1, 'Admin - Ranillo', 0x3a3a31, '2023-06-28 08:35:29'),
(53, 1, 'Admin - Ranillo', 0x3a3a31, '2023-06-28 10:38:50'),
(54, 1, 'Admin - Ranillo', 0x3a3a31, '2023-06-29 08:04:10'),
(55, 1, 'Admin - Ranillo', 0x3a3a31, '2023-06-29 15:55:33'),
(56, 1, 'Admin - Ranillo', 0x3a3a31, '2023-06-29 16:12:58'),
(57, 1, 'Admin - Ranillo', 0x3a3a31, '2023-06-29 16:27:27'),
(58, 1, 'Admin - Ranillo', 0x3a3a31, '2023-06-29 17:24:06'),
(59, 1, 'Admin - Ranillo', 0x3a3a31, '2023-06-29 17:27:49'),
(60, 1, 'Admin - Ranillo', 0x3a3a31, '2023-06-30 02:29:40'),
(61, 1, 'Admin - Ranillo', 0x3a3a31, '2023-06-30 02:35:04'),
(62, 1, 'Admin - Ranillo', 0x3a3a31, '2023-06-30 02:37:38');

-- --------------------------------------------------------

--
-- Table structure for table `clg_candidates`
--

CREATE TABLE `clg_candidates` (
  `candidateID` int(11) NOT NULL,
  `name` varchar(18) NOT NULL,
  `position` varchar(14) NOT NULL,
  `partyList` varchar(20) NOT NULL,
  `yearLvl` varchar(20) NOT NULL,
  `course` varchar(70) NOT NULL,
  `platform` varchar(5000) NOT NULL,
  `picture` varchar(50) NOT NULL DEFAULT 'defaultIMG.jpg',
  `voteCount` int(11) NOT NULL,
  `dateCreated` timestamp NOT NULL DEFAULT current_timestamp(),
  `dateUpdated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `clg_candidates`
--

INSERT INTO `clg_candidates` (`candidateID`, `name`, `position`, `partyList`, `yearLvl`, `course`, `platform`, `picture`, `voteCount`, `dateCreated`, `dateUpdated`) VALUES
(1, 'Power', 'PRESIDENT', 'PARTY LIST A', '2nd year College', 'Bachelor of Science in Computer Science', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse quod alias ut illo doloremque eum ipsum obcaecati distinctio debitis reiciendis quae quia soluta totam doloribus quos nesciunt necessitatibus, consectetur quisquam accusamus ex, dolorum, dicta vel? Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse quod alias ut illo doloremque eum ipsum obcaecati distinctio debitis reiciendis quae quia soluta totam doloribus quos nesciunt necessitatibus, consectetur quisquam accusamus ex, dolorum, dicta vel?', 'power.jpg', 0, '2023-04-09 15:57:33', '2023-06-16 15:38:51'),
(2, 'Hange Zoe', 'VICE PRESIDENT', 'PARTY LIST A', '4th year College', 'Bachelor of Science in Computer Science', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse quod alias ut illo doloremque eum ipsum obcaecati distinctio debitis reiciendis quae quia soluta totam doloribus quos nesciunt necessitatibus, consectetur quisquam accusamus ex, dolorum, dicta vel? Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse quod alias ut illo doloremque eum ipsum obcaecati distinctio debitis reiciendis quae quia soluta totam doloribus quos nesciunt necessitatibus, consectetur quisquam accusamus ex, dolorum, dicta vel?', 'hange.jpg', 0, '2023-05-05 11:34:51', '2023-06-16 15:38:51'),
(3, 'Nico Robin', 'SECRETARY', 'PARTY LIST A', '4th year College', ' Bachelor of Science in Accounting Information Sys', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse quod alias ut illo doloremque eum ipsum obcaecati distinctio debitis reiciendis quae quia soluta totam doloribus quos nesciunt necessitatibus, consectetur quisquam accusamus ex, dolorum, dicta vel? Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse quod alias ut illo doloremque eum ipsum obcaecati distinctio debitis reiciendis quae quia soluta totam doloribus quos nesciunt necessitatibus, consectetur quisquam accusamus ex, dolorum, dicta vel?', 'robin.jpg', 0, '2023-04-09 16:15:28', '2023-06-16 15:38:51'),
(4, 'Gintoki Sakata', 'TREASURER', 'PARTY LIST A', '4th year College', 'Associate in Computer Technology', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse quod alias ut illo doloremque eum ipsum obcaecati distinctio debitis reiciendis quae quia soluta totam doloribus quos nesciunt necessitatibus, consectetur quisquam accusamus ex, dolorum, dicta vel? Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse quod alias ut illo doloremque eum ipsum obcaecati distinctio debitis reiciendis quae quia soluta totam doloribus quos nesciunt necessitatibus, consectetur quisquam accusamus ex, dolorum, dicta vel?', 'sakata.jpg', 0, '2023-04-09 16:15:28', '2023-06-16 15:38:51'),
(5, 'Sakuragi Hanamichi', 'COLLEGE REP', 'PARTY LIST A', '1st year College', 'Associate in Computer Technology', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse quod alias ut illo doloremque eum ipsum obcaecati distinctio debitis reiciendis quae quia soluta totam doloribus quos nesciunt necessitatibus, consectetur quisquam accusamus ex, dolorum, dicta vel? Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse quod alias ut illo doloremque eum ipsum obcaecati distinctio debitis reiciendis quae quia soluta totam doloribus quos nesciunt necessitatibus, consectetur quisquam accusamus ex, dolorum, dicta vel?', 'sakuragi.jpg', 0, '2023-05-14 07:59:19', '2023-06-16 15:38:51'),
(6, 'Okita Sougo', 'PRESIDENT', 'PARTY LIST B', '3rd year College', 'Bachelor of Science in Computer Science', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse quod alias ut illo doloremque eum ipsum obcaecati distinctio debitis reiciendis quae quia soluta totam doloribus quos nesciunt necessitatibus, consectetur quisquam accusamus ex, dolorum, dicta vel? Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse quod alias ut illo doloremque eum ipsum obcaecati distinctio debitis reiciendis quae quia soluta totam doloribus quos nesciunt necessitatibus, consectetur quisquam accusamus ex, dolorum, dicta vel?', 'sougo.jpg', 0, '2023-05-14 08:00:28', '2023-06-11 03:41:16'),
(7, 'Nobara Kugisaki', 'VICE PRESIDENT', 'PARTY LIST B', '3rd year College', 'Bachelor of Science in Accounting Information System', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse quod alias ut illo doloremque eum ipsum obcaecati distinctio debitis reiciendis quae quia soluta totam doloribus quos nesciunt necessitatibus, consectetur quisquam accusamus ex, dolorum, dicta vel? Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse quod alias ut illo doloremque eum ipsum obcaecati distinctio debitis reiciendis quae quia soluta totam doloribus quos nesciunt necessitatibus, consectetur quisquam accusamus ex, dolorum, dicta vel?', 'nobara.jpg', 0, '2023-04-21 15:22:42', '2023-06-16 04:28:21'),
(8, 'Ayame Sarutobi', 'SECRETARY', 'PARTY LIST B', '4th year College', 'Bachelor of Science in Computer Science', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse quod alias ut illo doloremque eum ipsum obcaecati distinctio debitis reiciendis quae quia soluta totam doloribus quos nesciunt necessitatibus, consectetur quisquam accusamus ex, dolorum, dicta vel? Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse quod alias ut illo doloremque eum ipsum obcaecati distinctio debitis reiciendis quae quia soluta totam doloribus quos nesciunt necessitatibus, consectetur quisquam accusamus ex, dolorum, dicta vel?', 'sacchan.jpg', 0, '2023-04-21 15:27:43', '2023-06-11 03:41:16'),
(9, 'Rin Tosahka', 'TREASURER', 'PARTY LIST B', '2nd year College', 'Bachelor of Science in Accounting Information System', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse quod alias ut illo doloremque eum ipsum obcaecati distinctio debitis reiciendis quae quia soluta totam doloribus quos nesciunt necessitatibus, consectetur quisquam accusamus ex, dolorum, dicta vel? Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse quod alias ut illo doloremque eum ipsum obcaecati distinctio debitis reiciendis quae quia soluta totam doloribus quos nesciunt necessitatibus, consectetur quisquam accusamus ex, dolorum, dicta vel?', 'rin.jpg', 0, '2023-05-05 11:36:31', '2023-06-16 04:28:21'),
(10, 'Sasha Braus', 'COLLEGE REP', 'PARTY LIST B', '2nd year College', 'Bachelor of Science in Accounting Information System', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse quod alias ut illo doloremque eum ipsum obcaecati distinctio debitis reiciendis quae quia soluta totam doloribus quos nesciunt necessitatibus, consectetur quisquam accusamus ex, dolorum, dicta vel? Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse quod alias ut illo doloremque eum ipsum obcaecati distinctio debitis reiciendis quae quia soluta totam doloribus quos nesciunt necessitatibus, consectetur quisquam accusamus ex, dolorum, dicta vel?', 'sasha.jpg', 0, '2023-05-14 08:05:21', '2023-06-11 03:41:16');

-- --------------------------------------------------------

--
-- Table structure for table `clg_confirmedvote`
--

CREATE TABLE `clg_confirmedvote` (
  `confirmedVoteID` int(11) NOT NULL,
  `voterName` varchar(30) NOT NULL,
  `voterID` int(11) NOT NULL,
  `confirmedPresident` varchar(18) NOT NULL,
  `confirmedVicePresident` varchar(18) NOT NULL,
  `confirmedSecretary` varchar(18) NOT NULL,
  `confirmedTreasurer` varchar(18) NOT NULL,
  `confirmedCollegeRepresentative` varchar(18) NOT NULL,
  `dateConfirmedVote` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `clg_courseselection`
--

CREATE TABLE `clg_courseselection` (
  `courseID` int(11) NOT NULL,
  `course` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `clg_courseselection`
--

INSERT INTO `clg_courseselection` (`courseID`, `course`) VALUES
(1, 'Bachelor of Science in Computer Science'),
(2, 'Bachelor of Science in Accounting Information System'),
(3, 'Associate in Computer Technology');

-- --------------------------------------------------------

--
-- Table structure for table `clg_deviceguide`
--

CREATE TABLE `clg_deviceguide` (
  `deviceID` int(11) NOT NULL,
  `device` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `clg_deviceguide`
--

INSERT INTO `clg_deviceguide` (`deviceID`, `device`) VALUES
(1, 'Desktop'),
(2, 'Mobile');

-- --------------------------------------------------------

--
-- Table structure for table `clg_home`
--

CREATE TABLE `clg_home` (
  `homeID` int(11) NOT NULL,
  `homecontentID` varchar(20) NOT NULL,
  `device` varchar(20) NOT NULL,
  `contentHeader` varchar(100) DEFAULT NULL,
  `content` varchar(5000) NOT NULL,
  `homeImages` varchar(500) DEFAULT NULL,
  `dateCreated` timestamp NOT NULL DEFAULT current_timestamp(),
  `dateUpdated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `clg_home`
--

INSERT INTO `clg_home` (`homeID`, `homecontentID`, `device`, `contentHeader`, `content`, `homeImages`, `dateCreated`, `dateUpdated`) VALUES
(1, 'announcement', '', 'Announcements - Dev.', 'The website is still under development, important events will be posted here in the future. Please bear with us for a few month, thank you.', '', '2023-04-10 08:56:50', '2023-05-19 18:16:39'),
(2, '', '', '', '', 'zolo.JPG', '2023-05-17 16:29:38', '2023-06-16 13:46:24'),
(3, '', '', 'ee', 'eee', 'zolo.JPG', '2023-05-17 16:32:29', '2023-06-16 13:46:24'),
(4, 'information', '', 'Welcome to ACLC’s i-Voting System', 'ACLC Malolos is a private institution in Malolos City, Philippines, that offers various undergraduate and graduate programs in information technology, business, and education. It is one of the branches of the AMA Education System.\r\n\r\ni-Voting, also known as internet voting or electronic voting, is a system that allows voters to cast their ballots electronically using the internet or other electronic means. i-Voting systems have been developed and used in some countries as an alternative to traditional paper-based voting systems. i- Voting systems can be convenient for voters as they allow remote voting.\r\n\r\nACLC online i-voting system is a website platform that allows the ACLCians to securely conduct “StudentCouncil Election”. Using an online i-voting system will generate confidence in the results of your votes and elections, lower your voting-related costs, and streamline the election process for both you and your voters.', '', '2023-05-04 12:43:53', '2023-06-16 13:46:24'),
(5, 'systemGuide', '', 'View Candidates', 'Candidates navigation button: On the top navigation bar, you will see candidates button that will direct you to the list of candidates that are running for student council election.\r\n\r\nCandidates filter: Under the website title, you will see a variety of filters that will help you easily locate the candidates you are looking for.', 'zzzzzzz.png', '2023-05-19 19:04:38', '2023-06-16 13:46:24'),
(6, 'systemGuide', '', 'Know more about the running candidates', 'Click \"See Profile\" to view all the details of the candidates that includes their name, party list, course and their platform. ', '123.PNG', '2023-05-19 19:18:02', '2023-06-16 13:46:24'),
(7, 'systemGuide', '', 'e', 'e', NULL, '2023-06-08 13:01:43', '2023-06-16 13:46:24'),
(8, 'systemGuide', '', 'e', 'e', NULL, '2023-06-08 13:02:17', '2023-06-16 13:46:24'),
(9, 'systemGuide', '', 'e', 'e', NULL, '2023-06-08 13:02:19', '2023-06-16 13:46:24'),
(10, 'systemGuide', 'Desktop', 'Homepage Guide', 'The \"Information, Announcement and Sytem guide\" is visible in the filtter. Right now, under \"Information,\" you can find details on the school and the i-Voting system.', 'home 1.png', '2023-06-11 03:12:30', '2023-06-16 13:46:24'),
(11, 'systemGuide', 'Desktop', 'Homepage Guide', 'The \"Announcement\" section of the website contains news and updates regarding the election.', 'home 2.png', '2023-06-11 03:19:30', '2023-06-16 13:46:24'),
(12, 'systemGuide', 'Desktop', 'Homepage Guide', 'You can see \"Desktop Guide and Mobile View\" for the \"ACLC Malolos i-Voting system\" in the \"System Guide\" section, which will instruct you on how to use it.', 'home 3.png', '2023-06-11 03:28:30', '2023-06-16 13:46:24'),
(13, 'systemGuide', 'Desktop', 'How can you see candidate profile', 'Candidate navigation button: On the top navigation bar, you will see vote button that will direct you to the candidate that are running for student council election.\r\n', 'candidate.png', '2023-06-11 03:45:14', '2023-06-16 13:46:24'),
(14, 'systemGuide', 'Desktop', 'How can you see candidate profile', 'Candidate filter: Under the website title, you will see a variety of filters that will help you easily to view the candidates you are looking for.', 'candidate 2.png', '2023-06-11 03:52:30', '2023-06-16 13:46:24'),
(15, 'systemGuide', 'Desktop', 'How can you see candidate profile', 'Each card on the candidate page has a \"See profile\" button; click it to view the candidate’s information, including name, partylist, year, course and platform.', 'candidate 3.png', '2023-06-11 04:05:03', '2023-06-16 13:46:24'),
(16, 'systemGuide', 'Desktop', 'Voting Guide', 'Vote navigation button: On the top navigation bar, you will see vote button that will direct you to the voting page.', 'vote 1.png', '2023-06-11 04:09:13', '2023-06-16 13:46:24'),
(17, 'systemGuide', 'Desktop', 'Voting Guide', 'The voting page is currently locked, as you can see, and a blue timer on the right side of the screen indicates that voting is not yet possible. Please wait until the voting page is officially opened.', 'vote 2.png', '2023-06-11 04:16:05', '2023-06-16 13:46:24'),
(18, 'systemGuide', 'Desktop', 'Voting Guide', 'You can cast your vote if you see the timer turn green, which means the voting page is open.', 'vote 3.png', '2023-06-11 04:20:58', '2023-06-16 13:46:24'),
(19, 'systemGuide', 'Desktop', 'Voting Guide', 'Vote filter: Under the website title, you will see a variety of filters that will help you easily to vote the candidates you are looking for.', 'vote 4.png', '2023-06-11 04:24:06', '2023-06-16 13:46:24'),
(20, 'systemGuide', 'Desktop', 'Voting Guide', 'You can vote, for instance, by clicking the tiny circle to the right of the candidate position for which you wish to cast your vote.', 'vote 5.png', '2023-06-11 04:31:03', '2023-06-16 13:46:24'),
(21, 'systemGuide', 'Desktop', 'Voting Guide', 'Just click party list \"A or B\" to cast a straight vote.', 'vote 6.png', '2023-06-11 04:37:40', '2023-06-16 13:46:24'),
(22, 'systemGuide', 'Desktop', 'Voting Guide', 'Following your selection of a candidate, you will see a submit button and a reset vote button below. You can vote again or change your vote by selecting the \"Reset Vote\" button. Simply click the submit button once you are satisfied with your selections.', 'vote 7.png', '2023-06-11 04:48:47', '2023-06-16 13:46:24'),
(23, 'systemGuide', 'Desktop', 'Voting Guide', 'There is a confirmation about your vote after you click the submit button. If your mind changes, simply click the reset vote button. If you are confident in your vote, simply click the submit button.', 'vote 8.png', '2023-06-11 04:58:49', '2023-06-16 13:46:24'),
(24, 'systemGuide', 'Desktop', 'Voting Guide', 'You’ll see a confirmation that your vote was cast after pressing the submit button. Be advised: Do not photograph, distribute, or post your voting receipt. A Home button and a Result button that directs you to the page are visible below the screen.', 'vote 9.png', '2023-06-11 05:09:44', '2023-06-16 13:46:24'),
(25, 'systemGuide', 'Select device type..', 'Result Guide', 'Result navigation button: On the top navigation bar, you will see result button that will direct you to the result of candidates that are running for student council election.', 'result 1.png', '2023-06-11 05:23:45', '2023-06-16 13:46:24'),
(26, 'systemGuide', 'Desktop', 'Result Guide', 'Result filter: Under the website title, you will see a variety of filters that will help you easily locate the result you are looking for. if you want slide show result or table result just click it.', 'result 2.png', '2023-06-11 05:27:37', '2023-06-16 13:46:24'),
(27, 'systemGuide', 'Desktop', 'Result Guide', 'Table result', 'result 3.png', '2023-06-11 05:37:30', '2023-06-16 13:46:24'),
(28, 'systemGuide', 'Desktop', 'Warning', 'Notification for warning near to end the votig procedure.', 'solo.PNG', '2023-06-11 05:41:21', '2023-06-16 15:05:24'),
(30, 'systemGuide', 'Desktop', 'Voting end', 'If you see the timer ended and it turns red it means the election is ended', 'result 4.png', '2023-06-11 05:50:29', '2023-06-16 13:46:24'),
(31, 'systemGuide', 'Desktop', 'How to Change password', 'Look for a “Settings” or Account Settings” option. It’s typically located in the top-right corner or under a menu icon.', 'change pass1.png', '2023-06-11 05:55:01', '2023-06-16 13:46:24'),
(32, 'systemGuide', 'Desktop', 'Change password', ' Within the account settings, search for an option related to change password. Look for an option that allows to change password. It may be labeled as “Change Password”.\r\n', 'ch1.PNG', '2023-06-11 05:57:40', '2023-06-16 15:30:44'),
(33, 'systemGuide', 'Desktop', 'Change password', 'Click on the “Change Password” option, and you might be prompted to enter your old password and new password. Then click the save button.', 'change pass3.png', '2023-06-11 06:01:29', '2023-06-16 13:46:24'),
(34, 'systemGuide', 'Desktop', 'Change password', 'Then it will appear that tha password has been changed successfully and there is a notice to refresh/ restart the page.', 'change pass4.png', '2023-06-11 06:06:20', '2023-06-16 13:46:24'),
(35, 'systemGuide', 'Mobile', 'Homepage Guide', 'The \"Information, Announcement and Sytem guide\" is visible in the filtter. Right now, under \"Information,\" you can find details on the school and the i-Voting system.', '1.png', '2023-06-15 08:27:23', '2023-06-16 13:46:24'),
(36, 'systemGuide', 'Mobile', 'Homepage Guide', 'The \"Announcement\" section of the website contains news and updates regarding the election.', '2.png', '2023-06-15 08:28:43', '2023-06-16 13:46:24'),
(37, 'systemGuide', 'Mobile', 'Homepage Guide', 'You can see \"Desktop Guide and Mobile View\" for the \"ACLC Malolos i-Voting system\" in the \"System Guide\" section, which will instruct you on how to use it.', '3.png', '2023-06-15 08:29:28', '2023-06-16 13:46:24'),
(38, 'systemGuide', 'Mobile', 'How can you see candidate profile', 'Candidate navigation button: On the top navigation bar, you will see vote button that will direct you to the candidate that are running for student council election.', '4.png', '2023-06-15 08:30:54', '2023-06-16 13:46:24'),
(39, 'systemGuide', 'Mobile', 'How can you see candidate profile', 'Candidate filter: Under the website title, you will see a variety of filters that will help you easily to view the candidates you are looking for.', '5.png', '2023-06-15 08:31:29', '2023-06-16 13:46:24'),
(40, 'systemGuide', 'Mobile', 'How can you see candidate profile', 'Each card on the candidate page has a \"See profile\" button; click it to view the candidate’s information, including name, partylist, year, course and platform.\r\n\r\n', '6.png', '2023-06-15 08:33:45', '2023-06-16 13:46:24'),
(41, 'systemGuide', 'Select device type..', 'Voting Guide', '\r\nVote navigation button: On the top navigation bar, you will see vote button that will direct you to the voting page.', '7.png', '2023-06-15 08:34:26', '2023-06-16 13:46:24'),
(42, 'systemGuide', 'Mobile', 'Voting Guide', 'The voting page is currently locked, as you can see, and a blue timer on the right side of the screen indicates that voting is not yet possible. Please wait until the voting page is officially opened.', '8.png', '2023-06-15 08:35:06', '2023-06-16 13:46:24'),
(43, 'systemGuide', 'Mobile', 'Voting Guide', 'You can cast your vote if you see the timer turn green, which means the voting page is open.', '9.png', '2023-06-15 08:35:37', '2023-06-16 13:46:24'),
(44, 'systemGuide', 'Mobile', 'Voting Guide', 'Vote filter: Under the website title, you will see a variety of filters that will help you easily to vote the candidates you are looking for.', '10.png', '2023-06-15 08:36:08', '2023-06-16 13:46:24'),
(45, 'systemGuide', 'Mobile', 'Voting Guide', 'You can vote, for instance, by clicking the tiny circle to the right of the candidate position for which you wish to cast your vote.', '11.png', '2023-06-15 08:36:35', '2023-06-16 13:46:24'),
(46, 'systemGuide', 'Mobile', 'Voting Guide', 'Just click party list \"A or B\" to cast a straight vote.', '12.png', '2023-06-15 08:37:06', '2023-06-16 13:46:24'),
(47, 'systemGuide', 'Mobile', 'Voting Guide', 'Following your selection of a candidate, you will see a submit button and a reset vote button below. You can vote again or change your vote by selecting the \"Reset Vote\" button. Simply click the submit button once you are satisfied with your selections.\r\n\r\n', '13.png', '2023-06-15 08:37:50', '2023-06-16 13:46:24'),
(48, 'systemGuide', 'Mobile', 'Voting Guide', 'There is a confirmation about your vote after you click the submit button. If your mind changes, simply click the reset vote button. If you are confident in your vote, simply click the submit button.', '14.png', '2023-06-15 08:42:41', '2023-06-16 13:46:24'),
(49, 'systemGuide', 'Mobile', 'Voting Guide', 'You’ll see a confirmation that your vote was cast after pressing the submit button. Be advised: Do not photograph, distribute, or post your voting receipt. A Home button and a Result button that directs you to the page are visible below the screen.', '15.png', '2023-06-15 08:43:11', '2023-06-16 13:46:24'),
(50, 'systemGuide', 'Mobile', 'Result Guide', 'Result filter: Under the website title, you will see a variety of filters that will help you easily locate the result you are looking for. if you want slide show result or table result just click it.', '17.png', '2023-06-15 08:45:43', '2023-06-16 13:46:24'),
(51, 'systemGuide', 'Mobile', 'Result Guide', 'Table result you can use search bar to easily locate the candidate.', '18.png', '2023-06-15 08:48:07', '2023-06-16 13:46:24'),
(52, 'systemGuide', 'Mobile', 'Warning', 'Notification to warn the voters that voting process is nearly to end.', 'solo2.PNG', '2023-06-15 08:49:37', '2023-06-16 15:35:11'),
(54, 'systemGuide', 'Mobile', 'Voting End', 'If you see the timer ended and it turns red it means the election is ended', '19.png', '2023-06-15 08:51:41', '2023-06-16 13:46:24'),
(55, 'systemGuide', 'Mobile', 'How to change password', 'Look for a “Settings” or Account Settings” option. It’s typically located in the top-right corner or under a menu icon.', '20.png', '2023-06-15 08:52:41', '2023-06-16 13:46:24'),
(56, 'systemGuide', 'Mobile', 'How to change password', 'Within the account settings, search for an option related to change password. Look for an option that allows to change password. It may be labeled as “Change Password”.', '21.png', '2023-06-15 08:53:27', '2023-06-16 13:46:24'),
(57, 'systemGuide', 'Mobile', 'How to change password', 'Click on the “Change Password” option, and you might be prompted to enter your old password and new password. Then click the save button.', '22.png', '2023-06-15 08:54:00', '2023-06-16 13:46:24'),
(58, 'systemGuide', 'Select device type..', 'Change password.', 'Then it will appear that tha password has been changed successfully and there is a notice to refresh/ restart the page.', '23.png', '2023-06-15 08:54:38', '2023-06-16 13:46:24'),
(168, 'systemGuide', 'Mobile', 'Change password.', 'After you click the save there is a notification  and you can refresh the pa website.', '23.png', '2023-06-29 09:22:07', '2023-06-29 09:22:29');

-- --------------------------------------------------------

--
-- Table structure for table `clg_pendingvote`
--

CREATE TABLE `clg_pendingvote` (
  `pendingVoteID` int(11) NOT NULL,
  `voterName` varchar(30) NOT NULL,
  `voterID` int(11) NOT NULL,
  `pendingPresident` varchar(18) NOT NULL,
  `pendingVicePresident` varchar(18) NOT NULL,
  `pendingSecretary` varchar(18) NOT NULL,
  `pendingTreasurer` varchar(18) NOT NULL,
  `pendingCollegeRepresentative` varchar(18) NOT NULL,
  `datePendingVote` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `clg_plselection`
--

CREATE TABLE `clg_plselection` (
  `partyListID` int(11) NOT NULL,
  `partyList` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `clg_plselection`
--

INSERT INTO `clg_plselection` (`partyListID`, `partyList`) VALUES
(1, 'PARTY LIST A'),
(2, 'PARTY LIST B');

-- --------------------------------------------------------

--
-- Table structure for table `clg_positionselection`
--

CREATE TABLE `clg_positionselection` (
  `positionID` int(11) NOT NULL,
  `position` varchar(14) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `clg_positionselection`
--

INSERT INTO `clg_positionselection` (`positionID`, `position`) VALUES
(1, 'PRESIDENT'),
(2, 'VICE PRESIDENT'),
(3, 'SECRETARY'),
(4, 'TREASURER'),
(5, 'COLLEGE REP');

-- --------------------------------------------------------

--
-- Table structure for table `clg_title`
--

CREATE TABLE `clg_title` (
  `titlePage` varchar(20) NOT NULL,
  `title` varchar(100) NOT NULL,
  `dateCreated` timestamp NOT NULL DEFAULT current_timestamp(),
  `dateUpdated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `clg_title`
--

INSERT INTO `clg_title` (`titlePage`, `title`, `dateCreated`, `dateUpdated`) VALUES
('Candidates', 'ACLC Malolos SC Election Candidates S.Y 2022-2023 (College)', '2023-05-14 08:13:00', '2023-05-14 08:13:00'),
('Home', 'ACLC Malolos SC Election S.Y 2022-2023 (College)', '2023-05-20 02:01:31', '2023-05-20 02:01:31'),
('Result', 'ACLC Malolos SC Election Result S.Y 2022-2023 (College)', '2023-05-14 08:13:14', '2023-05-14 08:13:14'),
('Vote', 'ACLC Malolos SC Election Vote S.Y 2022-2023 (College)', '2023-05-14 08:13:05', '2023-05-14 08:13:05');

-- --------------------------------------------------------

--
-- Table structure for table `clg_userlog`
--

CREATE TABLE `clg_userlog` (
  `id` int(11) NOT NULL,
  `voterID` int(11) NOT NULL,
  `logName` varchar(100) NOT NULL,
  `logUSN` varchar(15) NOT NULL,
  `userIP` varbinary(16) NOT NULL,
  `loginTime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `clg_voter`
--

CREATE TABLE `clg_voter` (
  `voterID` int(11) NOT NULL,
  `fullName` varchar(30) NOT NULL,
  `yearLevel` varchar(20) NOT NULL,
  `course` varchar(70) NOT NULL,
  `usn` varchar(15) NOT NULL,
  `vpass` varchar(20) NOT NULL,
  `email` varchar(30) DEFAULT 'Not Verified',
  `voteStatus` varchar(20) NOT NULL DEFAULT 'Not Voted',
  `dateCreated` timestamp NOT NULL DEFAULT current_timestamp(),
  `dateUpdated` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `clg_voter`
--

INSERT INTO `clg_voter` (`voterID`, `fullName`, `yearLevel`, `course`, `usn`, `vpass`, `email`, `voteStatus`, `dateCreated`, `dateUpdated`) VALUES
(1, 'Ranillo Santos', '4th year College', 'Bachelor of Science in Computer Science', '19004505800', 'ran', 'Not Verified', 'Not Voted', '2023-04-08 15:16:31', '2023-06-16 04:30:15'),
(2, 'Arze E. Panganiban', '4th year College', 'Bachelor of Science in Computer Science', '19004533900', 'asd', 'Not Verified', 'Not Voted', '2023-05-06 10:03:11', '2023-06-29 16:11:41'),
(3, 'Syrelle Mendoza', '4th year College', 'Bachelor of Science in Computer Science', '17002756800', 'qwe', 'Not Verified', 'Not Voted', '2023-05-13 00:36:11', '2023-06-29 16:11:54');

-- --------------------------------------------------------

--
-- Table structure for table `clg_ylselection`
--

CREATE TABLE `clg_ylselection` (
  `yearLevelID` int(11) NOT NULL,
  `yearLevel` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `clg_ylselection`
--

INSERT INTO `clg_ylselection` (`yearLevelID`, `yearLevel`) VALUES
(1, '1st year College'),
(2, '2nd year College'),
(3, '3rd year College'),
(4, '4th year College');

-- --------------------------------------------------------

--
-- Table structure for table `datetimedata`
--

CREATE TABLE `datetimedata` (
  `dtID` int(11) NOT NULL,
  `dateTime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `datetimedata`
--

INSERT INTO `datetimedata` (`dtID`, `dateTime`) VALUES
(1, '2023-12-25 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `shs_candidates`
--

CREATE TABLE `shs_candidates` (
  `candidateID` int(11) NOT NULL,
  `name` varchar(18) NOT NULL,
  `position` varchar(14) NOT NULL,
  `partyList` varchar(20) NOT NULL,
  `yearLvl` varchar(20) NOT NULL,
  `strand` varchar(70) NOT NULL,
  `platform` varchar(5000) NOT NULL,
  `picture` varchar(50) NOT NULL DEFAULT 'defaultIMG.jpg',
  `voteCount` int(11) NOT NULL,
  `dateCreated` timestamp NOT NULL DEFAULT current_timestamp(),
  `dateUpdated` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `shs_candidates`
--

INSERT INTO `shs_candidates` (`candidateID`, `name`, `position`, `partyList`, `yearLvl`, `strand`, `platform`, `picture`, `voteCount`, `dateCreated`, `dateUpdated`) VALUES
(1, 'L Lawliet', 'PRESIDENT', 'PARTY LIST A', 'GRADE 12', 'Computer Programming', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse quod alias ut illo doloremque eum ipsum obcaecati distinctio debitis reiciendis quae quia soluta totam doloribus quos nesciunt necessitatibus, consectetur quisquam accusamus ex, dolorum, dicta vel? Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse quod alias ut illo doloremque eum ipsum obcaecati distinctio debitis reiciendis quae quia soluta totam doloribus quos nesciunt necessitatibus, consectetur quisquam accusamus ex, dolorum, dicta vel?', 'l.jpg', 0, '2023-06-28 10:39:30', '2023-06-28 10:39:30'),
(2, 'Edward Elric', 'VICE PRESIDENT', 'PARTY LIST A', 'GRADE 12', 'Information and Communications Technology', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse quod alias ut illo doloremque eum ipsum obcaecati distinctio debitis reiciendis quae quia soluta totam doloribus quos nesciunt necessitatibus, consectetur quisquam accusamus ex, dolorum, dicta vel? Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse quod alias ut illo doloremque eum ipsum obcaecati distinctio debitis reiciendis quae quia soluta totam doloribus quos nesciunt necessitatibus, consectetur quisquam accusamus ex, dolorum, dicta vel?', 'edward.jpg', 0, '2023-06-28 10:41:52', '2023-06-28 10:41:52'),
(3, 'Maki Oze', 'SECRETARY', 'PARTY LIST A', 'GRADE 12', 'Contact Center Services', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse quod alias ut illo doloremque eum ipsum obcaecati distinctio debitis reiciendis quae quia soluta totam doloribus quos nesciunt necessitatibus, consectetur quisquam accusamus ex, dolorum, dicta vel? Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse quod alias ut illo doloremque eum ipsum obcaecati distinctio debitis reiciendis quae quia soluta totam doloribus quos nesciunt necessitatibus, consectetur quisquam accusamus ex, dolorum, dicta vel?', 'Maki.jpg', 0, '2023-06-28 10:43:38', '2023-06-28 10:43:38'),
(4, 'Miwa Kasumi', 'TREASURER', 'PARTY LIST A', 'GRADE 11', 'Animation', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse quod alias ut illo doloremque eum ipsum obcaecati distinctio debitis reiciendis quae quia soluta totam doloribus quos nesciunt necessitatibus, consectetur quisquam accusamus ex, dolorum, dicta vel? Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse quod alias ut illo doloremque eum ipsum obcaecati distinctio debitis reiciendis quae quia soluta totam doloribus quos nesciunt necessitatibus, consectetur quisquam accusamus ex, dolorum, dicta vel?', 'miwa.jpg', 0, '2023-06-28 10:44:56', '2023-06-28 10:44:56'),
(5, 'Yuuta Okottsu', 'AUDITOR', 'PARTY LIST A', 'GRADE 11', 'Information and Communications Technology', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse quod alias ut illo doloremque eum ipsum obcaecati distinctio debitis reiciendis quae quia soluta totam doloribus quos nesciunt necessitatibus, consectetur quisquam accusamus ex, dolorum, dicta vel? Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse quod alias ut illo doloremque eum ipsum obcaecati distinctio debitis reiciendis quae quia soluta totam doloribus quos nesciunt necessitatibus, consectetur quisquam accusamus ex, dolorum, dicta vel?', 'yuta.jpg', 0, '2023-06-28 10:45:46', '2023-06-28 10:45:46'),
(6, 'Toga Himiko', 'G-11 REP', 'PARTY LIST A', 'GRADE 11', 'Animation', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse quod alias ut illo doloremque eum ipsum obcaecati distinctio debitis reiciendis quae quia soluta totam doloribus quos nesciunt necessitatibus, consectetur quisquam accusamus ex, dolorum, dicta vel? Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse quod alias ut illo doloremque eum ipsum obcaecati distinctio debitis reiciendis quae quia soluta totam doloribus quos nesciunt necessitatibus, consectetur quisquam accusamus ex, dolorum, dicta vel?', 'toga.jpg', 0, '2023-06-28 10:46:39', '2023-06-28 10:46:39'),
(7, 'Yoh Asakura', 'G-12 REP', 'PARTY LIST A', 'GRADE 12', 'Contact Center Services', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse quod alias ut illo doloremque eum ipsum obcaecati distinctio debitis reiciendis quae quia soluta totam doloribus quos nesciunt necessitatibus, consectetur quisquam accusamus ex, dolorum, dicta vel? Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse quod alias ut illo doloremque eum ipsum obcaecati distinctio debitis reiciendis quae quia soluta totam doloribus quos nesciunt necessitatibus, consectetur quisquam accusamus ex, dolorum, dicta vel?', 'Asakura-Yoh.jpg', 0, '2023-06-28 10:48:33', '2023-06-28 10:48:33'),
(8, 'Saiki Kusuo', 'PRESIDENT', 'PARTY LIST B', 'GRADE 12', 'Information and Communications Technology', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse quod alias ut illo doloremque eum ipsum obcaecati distinctio debitis reiciendis quae quia soluta totam doloribus quos nesciunt necessitatibus, consectetur quisquam accusamus ex, dolorum, dicta vel? Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse quod alias ut illo doloremque eum ipsum obcaecati distinctio debitis reiciendis quae quia soluta totam doloribus quos nesciunt necessitatibus, consectetur quisquam accusamus ex, dolorum, dicta vel?', 'saiki.jpg', 0, '2023-06-28 10:57:08', '2023-06-28 10:57:08'),
(9, 'Kobe Bryant', 'VICE PRESIDENT', 'PARTY LIST B', 'GRADE 12', 'Computer Programming', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse quod alias ut illo doloremque eum ipsum obcaecati distinctio debitis reiciendis quae quia soluta totam doloribus quos nesciunt necessitatibus, consectetur quisquam accusamus ex, dolorum, dicta vel? Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse quod alias ut illo doloremque eum ipsum obcaecati distinctio debitis reiciendis quae quia soluta totam doloribus quos nesciunt necessitatibus, consectetur quisquam accusamus ex, dolorum, dicta vel?', 'bryant.jpg', 0, '2023-06-28 10:57:45', '2023-06-28 10:57:45'),
(10, 'Kagura', 'SECRETARY', 'PARTY LIST B', 'GRADE 11', 'Animation', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse quod alias ut illo doloremque eum ipsum obcaecati distinctio debitis reiciendis quae quia soluta totam doloribus quos nesciunt necessitatibus, consectetur quisquam accusamus ex, dolorum, dicta vel? Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse quod alias ut illo doloremque eum ipsum obcaecati distinctio debitis reiciendis quae quia soluta totam doloribus quos nesciunt necessitatibus, consectetur quisquam accusamus ex, dolorum, dicta vel?', 'kagura.jpg', 0, '2023-06-28 10:58:58', '2023-06-28 10:58:58'),
(11, 'Kenma Kozume', 'TREASURER', 'PARTY LIST B', 'GRADE 11', 'Contact Center Services', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse quod alias ut illo doloremque eum ipsum obcaecati distinctio debitis reiciendis quae quia soluta totam doloribus quos nesciunt necessitatibus, consectetur quisquam accusamus ex, dolorum, dicta vel? Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse quod alias ut illo doloremque eum ipsum obcaecati distinctio debitis reiciendis quae quia soluta totam doloribus quos nesciunt necessitatibus, consectetur quisquam accusamus ex, dolorum, dicta vel?', 'kenma.jpg', 0, '2023-06-28 10:59:39', '2023-06-28 10:59:39'),
(12, 'Shinra Kusakabe', 'AUDITOR', 'PARTY LIST B', 'GRADE 11', 'Animation', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse quod alias ut illo doloremque eum ipsum obcaecati distinctio debitis reiciendis quae quia soluta totam doloribus quos nesciunt necessitatibus, consectetur quisquam accusamus ex, dolorum, dicta vel? Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse quod alias ut illo doloremque eum ipsum obcaecati distinctio debitis reiciendis quae quia soluta totam doloribus quos nesciunt necessitatibus, consectetur quisquam accusamus ex, dolorum, dicta vel?', 'Shinra.jpg', 0, '2023-06-28 11:07:25', '2023-06-28 11:07:25'),
(13, 'Yuji Itadori', 'G-11 REP', 'PARTY LIST B', 'GRADE 11', 'Information and Communications Technology', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse quod alias ut illo doloremque eum ipsum obcaecati distinctio debitis reiciendis quae quia soluta totam doloribus quos nesciunt necessitatibus, consectetur quisquam accusamus ex, dolorum, dicta vel? Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse quod alias ut illo doloremque eum ipsum obcaecati distinctio debitis reiciendis quae quia soluta totam doloribus quos nesciunt necessitatibus, consectetur quisquam accusamus ex, dolorum, dicta vel?', 'Yuji.jpg', 0, '2023-06-28 11:08:30', '2023-06-28 11:08:30'),
(14, 'Denji Hayakawa', 'G-12 REP', 'PARTY LIST B', 'GRADE 12', 'Contact Center Services', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse quod alias ut illo doloremque eum ipsum obcaecati distinctio debitis reiciendis quae quia soluta totam doloribus quos nesciunt necessitatibus, consectetur quisquam accusamus ex, dolorum, dicta vel? Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse quod alias ut illo doloremque eum ipsum obcaecati distinctio debitis reiciendis quae quia soluta totam doloribus quos nesciunt necessitatibus, consectetur quisquam accusamus ex, dolorum, dicta vel?', 'denji.jpg', 0, '2023-06-28 11:10:29', '2023-06-28 11:10:29');

-- --------------------------------------------------------

--
-- Table structure for table `shs_confirmedvote`
--

CREATE TABLE `shs_confirmedvote` (
  `confirmedVoteID` int(11) NOT NULL,
  `voterName` varchar(30) NOT NULL,
  `voterID` int(11) NOT NULL,
  `confirmedPresident` varchar(18) NOT NULL,
  `confirmedVicePresident` varchar(18) NOT NULL,
  `confirmedSecretary` varchar(18) NOT NULL,
  `confirmedTreasurer` varchar(18) NOT NULL,
  `confirmedAuditor` varchar(18) NOT NULL,
  `confirmedShs11Representative` varchar(18) NOT NULL,
  `confirmedShs12Representative` varchar(18) NOT NULL,
  `dateConfirmedVote` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `shs_deviceguide`
--

CREATE TABLE `shs_deviceguide` (
  `deviceID` int(11) NOT NULL,
  `device` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `shs_deviceguide`
--

INSERT INTO `shs_deviceguide` (`deviceID`, `device`) VALUES
(1, 'Desktop'),
(2, 'Mobile');

-- --------------------------------------------------------

--
-- Table structure for table `shs_home`
--

CREATE TABLE `shs_home` (
  `homeID` int(11) NOT NULL,
  `homecontentID` varchar(20) NOT NULL,
  `device` varchar(20) NOT NULL,
  `contentHeader` varchar(100) NOT NULL,
  `content` varchar(5000) NOT NULL,
  `homeImages` varchar(500) NOT NULL,
  `dateCreated` timestamp NOT NULL DEFAULT current_timestamp(),
  `dateUpdated` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `shs_home`
--

INSERT INTO `shs_home` (`homeID`, `homecontentID`, `device`, `contentHeader`, `content`, `homeImages`, `dateCreated`, `dateUpdated`) VALUES
(8, 'information', '', 'Welcome to ACLC’s i-Voting System', '\r\nACLC Malolos is a private institution in Malolos City, Philippines, that offers various undergraduate and graduate programs in information technology, business, and education. It is one of the branches of the AMA Education System.\r\n\r\ni-Voting, also known as internet voting or electronic voting, is a system that allows voters to cast their ballots electronically using the internet or other electronic means. i-Voting systems have been developed and used in some countries as an alternative to traditional paper-based voting systems. i- Voting systems can be convenient for voters as they allow remote voting.\r\n\r\nACLC online i-voting system is a website platform that allows the ACLCians to securely conduct “StudentCouncil Election”. Using an online i-voting system will generate confidence in the results of your votes and elections, lower your voting-related costs, and streamline the election process for both you and your voters.\r\n\r\n', '', '2023-06-29 08:20:16', '2023-06-29 08:20:16'),
(9, 'systemGuide', 'Desktop', 'Home Page Guide', 'The \"Information, Announcement and Sytem guide\" is visible in the filtter. Right now, under \"Information,\" you can find details on the school and the i-Voting system.', 'home 1.png', '2023-06-29 08:22:39', '2023-06-29 08:22:39'),
(10, 'systemGuide', 'Desktop', 'Homepage Guide', 'The \"Announcement\" section of the website contains news and updates regarding the election.', 'home 2.png', '2023-06-29 08:23:32', '2023-06-29 08:23:32'),
(11, 'systemGuide', 'Desktop', 'Homepage Guide', 'You can see \"Desktop Guide and Mobile View\" for the \"ACLC Malolos i-Voting system\" in the \"System Guide\" section, which will instruct you on how to use it.', 'home 3.png', '2023-06-29 08:24:35', '2023-06-29 08:24:35'),
(12, 'systemGuide', 'Desktop', 'How can you see candidate profile', 'Candidate navigation button: On the top navigation bar, you will see vote button that will direct you to the candidate that are running for student council election.', 'candidate.png', '2023-06-29 08:26:01', '2023-06-29 08:26:01'),
(13, 'systemGuide', 'Desktop', 'How can you see candidate profile', 'Candidate filter: Under the website title, you will see a variety of filters that will help you easily to view the candidates you are looking for.', 'candidate 2.png', '2023-06-29 08:26:54', '2023-06-29 08:26:54'),
(14, 'systemGuide', 'Desktop', 'How can you see candidate profile', 'Each card on the candidate page has a \"See profile\" button; click it to view the candidate’s information, including name, partylist, year, course and platform.', 'candidate 3.png', '2023-06-29 08:28:11', '2023-06-29 08:28:11'),
(15, 'systemGuide', 'Desktop', 'Voting Guide', 'Vote navigation button: On the top navigation bar, you will see vote button that will direct you to the voting page.', 'vote 1.png', '2023-06-29 08:29:07', '2023-06-29 08:29:07'),
(16, 'systemGuide', 'Desktop', 'Voting Guide', 'The voting page is currently locked, as you can see, and a blue timer on the right side of the screen indicates that voting is not yet possible. Please wait until the voting page is officially opened.', 'vote 2.png', '2023-06-29 08:29:52', '2023-06-29 08:29:52'),
(17, 'systemGuide', 'Desktop', 'Voting Guide', 'You can cast your vote if you see the timer turn green, which means the voting page is open.', 'vote 3.png', '2023-06-29 08:30:41', '2023-06-29 08:30:41'),
(18, 'systemGuide', 'Desktop', 'Voting Guide', 'Vote filter: Under the website title, you will see a variety of filters that will help you easily to vote the candidates you are looking for.', 'vote 4.png', '2023-06-29 08:31:31', '2023-06-29 08:31:31'),
(19, 'systemGuide', 'Desktop', 'Voting Guide', 'You can vote, for instance, by clicking the tiny circle to the right of the candidate position for which you wish to cast your vote.', 'vote 5.png', '2023-06-29 08:32:15', '2023-06-29 08:32:15'),
(20, 'systemGuide', 'Desktop', 'Voting Guide', 'Just click party list \"A or B\" to cast a straight vote.', 'vote 6.png', '2023-06-29 08:33:06', '2023-06-29 08:33:06'),
(21, 'systemGuide', 'Desktop', 'Voting Guide', 'Following your selection of a candidate, you will see a submit button and a reset vote button below. You can vote again or change your vote by selecting the \"Reset Vote\" button. Simply click the submit button once you are satisfied with your selections.', 'vote 7.png', '2023-06-29 08:34:05', '2023-06-29 08:34:05'),
(22, 'systemGuide', 'Desktop', 'Voting Guide', 'There is a confirmation about your vote after you click the submit button. If your mind changes, simply click the reset vote button. If you are confident in your vote, simply click the submit button.', 'vote 8.png', '2023-06-29 08:34:49', '2023-06-29 08:34:49'),
(23, 'systemGuide', 'Desktop', 'Voting Guide', 'You’ll see a confirmation that your vote was cast after pressing the submit button. Be advised: Do not photograph, distribute, or post your voting receipt. A Home button and a Result button that directs you to the page are visible below the screen.', 'vote 9.png', '2023-06-29 08:35:38', '2023-06-29 08:35:38'),
(24, 'systemGuide', 'Desktop', 'Result Guide', 'Result filter: Under the website title, you will see a variety of filters that will help you easily locate the result you are looking for. if you want slide show result or table result just click it.', 'result 1.png', '2023-06-29 08:36:42', '2023-06-29 08:36:42'),
(25, 'systemGuide', 'Desktop', 'Result Guide', 'Result filter: Under the website title, you will see a variety of filters that will help you easily locate the result you are looking for. if you want slide show result or table result just click it.', 'result 2.png', '2023-06-29 08:39:31', '2023-06-29 08:39:31'),
(26, 'systemGuide', 'Desktop', 'Result Guide', 'Table result', 'result 3.png', '2023-06-29 08:40:24', '2023-06-29 08:40:24'),
(27, 'systemGuide', 'Desktop', 'Warning', 'Notification for warning near to end the votig procedure.', 'solo.PNG', '2023-06-29 08:41:45', '2023-06-29 08:41:45'),
(28, 'systemGuide', 'Desktop', 'Voting End', 'If you see the timer ended and it turns red it means the election is ended', 'result 4.png', '2023-06-29 08:42:55', '2023-06-29 08:42:55'),
(29, 'systemGuide', 'Desktop', 'How to change password', 'Look for a “Settings” or Account Settings” option. It’s typically located in the top-right corner or under a menu icon.', 'change pass1.png', '2023-06-29 08:44:57', '2023-06-29 08:44:57'),
(30, 'systemGuide', 'Desktop', 'How to change password', 'Change password\r\nWithin the account settings, search for an option related to change password. Look for an option that allows to change password. It may be labeled as “Change Password”.', 'ch1.PNG', '2023-06-29 08:46:09', '2023-06-29 08:46:09'),
(31, 'systemGuide', 'Desktop', 'Change password.', 'Click on the “Change Password” option, and you might be prompted to enter your old password and new password. Then click the save button.\r\n\r\n', 'change pass3.png', '2023-06-29 08:47:03', '2023-06-29 08:47:03'),
(32, 'systemGuide', 'Desktop', 'Change password.', 'Then it will appear that tha password has been changed successfully and there is a notice to refresh/ restart the page.', 'change pass4.png', '2023-06-29 08:47:55', '2023-06-29 08:47:55'),
(33, 'systemGuide', 'Mobile', 'Homepage Guide', 'The \"Information, Announcement and Sytem guide\" is visible in the filtter. Right now, under \"Information,\" you can find details on the school and the i-Voting system.', '1.png', '2023-06-29 08:49:16', '2023-06-29 08:49:16'),
(34, 'systemGuide', 'Mobile', 'Homepage Guide', 'The \"Announcement\" section of the website contains news and updates regarding the election.', '2.png', '2023-06-29 08:52:19', '2023-06-29 08:52:19'),
(36, 'systemGuide', 'Mobile', 'Homepage Guide', 'You can see \"Desktop Guide and Mobile View\" for the \"ACLC Malolos i-Voting system\" in the \"System Guide\" section, which will instruct you on how to use it.', '3.png', '2023-06-29 08:57:07', '2023-06-29 08:57:07'),
(37, 'systemGuide', 'Mobile', 'How can you see candidate profile', 'Candidate navigation button: On the top navigation bar, you will see vote button that will direct you to the candidate that are running for student council election.', '4.png', '2023-06-29 08:57:55', '2023-06-29 08:57:55'),
(38, 'systemGuide', 'Mobile', 'How can you see candidate profile', '\r\nCandidate filter: Under the website title, you will see a variety of filters that will help you easily to view the candidates you are looking for.', '5.png', '2023-06-29 08:58:35', '2023-06-29 08:58:35'),
(39, 'systemGuide', 'Select device type..', 'How can you see candidate profile', 'Each card on the candidate page has a \"See profile\" button; click it to view the candidate’s information, including name, partylist, year, course and platform.', '6.png', '2023-06-29 08:59:16', '2023-06-29 08:59:16'),
(40, 'systemGuide', 'Mobile', 'Voting Guide', 'The voting page is currently locked, as you can see, and a blue timer on the right side of the screen indicates that voting is not yet possible. Please wait until the voting page is officially opened.', '8.png', '2023-06-29 09:00:05', '2023-06-29 09:00:05'),
(41, 'systemGuide', 'Mobile', 'Voting Guide', 'You can cast your vote if you see the timer turn green, which means the voting page is open.', '9.png', '2023-06-29 09:01:27', '2023-06-29 09:01:27'),
(42, 'systemGuide', 'Mobile', 'Voting Guide', 'Vote filter: Under the website title, you will see a variety of filters that will help you easily to vote the candidates you are looking for.', '10.png', '2023-06-29 09:05:16', '2023-06-29 09:05:16'),
(43, 'systemGuide', 'Mobile', 'Voting Guide', 'You can vote, for instance, by clicking the tiny circle to the right of the candidate position for which you wish to cast your vote.', '11.png', '2023-06-29 09:06:06', '2023-06-29 09:06:06'),
(44, 'systemGuide', 'Mobile', 'Voting Guide', 'Just click party list \"A or B\" to cast a straight vote.', '12.png', '2023-06-29 09:06:48', '2023-06-29 09:06:48'),
(45, 'systemGuide', 'Select device type..', 'Voting Guide', 'Following your selection of a candidate, you will see a submit button and a reset vote button below. You can vote again or change your vote by selecting the \"Reset Vote\" button. Simply click the submit button once you are satisfied with your selections.', '13.png', '2023-06-29 09:07:47', '2023-06-29 09:07:47'),
(46, 'systemGuide', 'Mobile', 'Voting Guide', 'There is a confirmation about your vote after you click the submit button. If your mind changes, simply click the reset vote button. If you are confident in your vote, simply click the submit button.', '14.png', '2023-06-29 09:09:30', '2023-06-29 09:09:30'),
(47, 'systemGuide', 'Mobile', 'Voting Guide', 'You’ll see a confirmation that your vote was cast after pressing the submit button. Be advised: Do not photograph, distribute, or post your voting receipt. A Home button and a Result button that directs you to the page are visible below the screen.', '15.png', '2023-06-29 09:10:56', '2023-06-29 09:10:56'),
(48, 'systemGuide', 'Mobile', 'Result Guide', 'Result filter: Under the website title, you will see a variety of filters that will help you easily locate the result you are looking for. if you want slide show result or table result just click it.', '17.png', '2023-06-29 09:12:21', '2023-06-29 09:12:21'),
(49, 'systemGuide', 'Mobile', 'Result Guide', 'Table result you can use search bar to easily locate the candidate.', '18.png', '2023-06-29 09:13:30', '2023-06-29 09:13:30'),
(50, 'systemGuide', 'Mobile', 'Warning', 'Notification to warn the voters that voting process is nearly to end.', 'solo2.PNG', '2023-06-29 09:14:43', '2023-06-29 09:14:43'),
(51, 'systemGuide', 'Select device type..', 'Voting End', 'If you see the timer ended and it turns red it means the election is ended', '19.png', '2023-06-29 09:15:40', '2023-06-29 09:15:40'),
(52, 'systemGuide', 'Mobile', 'How to change password', 'Look for a “Settings” or Account Settings” option. It’s typically located in the top-right corner or under a menu icon.', '20.png', '2023-06-29 09:16:27', '2023-06-29 09:16:27'),
(53, 'systemGuide', 'Mobile', 'How to change password', 'Within the account settings, search for an option related to change password. Look for an option that allows to change password. It may be labeled as “Change Password”.', '21.png', '2023-06-29 09:17:40', '2023-06-29 09:17:40'),
(54, 'systemGuide', 'Mobile', 'Change password.', 'Click on the “Change Password” option, and you might be prompted to enter your old password and new password. Then click the save button.\r\n\r\n', '22.png', '2023-06-29 09:18:26', '2023-06-29 09:18:26'),
(55, 'systemGuide', 'Mobile', 'Change password.', 'After you click the save there is a notification  and you can refresh the pa website.', '23.png', '2023-06-29 09:23:11', '2023-06-29 09:23:11'),
(56, 'announcement', '', 'Announcements - Dev.', 'The website is still under development, important events will be posted here in the future. Please bear with us for a few month, thank you.', '', '2023-06-29 16:02:00', '2023-06-29 16:02:00');

-- --------------------------------------------------------

--
-- Table structure for table `shs_pendingvote`
--

CREATE TABLE `shs_pendingvote` (
  `pendingVoteID` int(11) NOT NULL,
  `voterName` varchar(30) NOT NULL,
  `voterID` int(11) NOT NULL,
  `pendingPresident` varchar(18) NOT NULL,
  `pendingVicePresident` varchar(18) NOT NULL,
  `pendingSecretary` varchar(18) NOT NULL,
  `pendingTreasurer` varchar(18) NOT NULL,
  `pendingAuditor` varchar(18) NOT NULL,
  `pendingShs11Representative` varchar(18) NOT NULL,
  `pendingShs12Representative` varchar(18) NOT NULL,
  `datePendingVote` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `shs_plselection`
--

CREATE TABLE `shs_plselection` (
  `partyListID` int(11) NOT NULL,
  `partyList` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `shs_plselection`
--

INSERT INTO `shs_plselection` (`partyListID`, `partyList`) VALUES
(1, 'PARTY LIST A'),
(2, 'PARTY LIST B');

-- --------------------------------------------------------

--
-- Table structure for table `shs_positionselection`
--

CREATE TABLE `shs_positionselection` (
  `positionID` int(11) NOT NULL,
  `position` varchar(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `shs_positionselection`
--

INSERT INTO `shs_positionselection` (`positionID`, `position`) VALUES
(1, 'PRESIDENT'),
(2, 'VICE PRESIDENT'),
(3, 'SECRETARY'),
(4, 'TREASURER'),
(5, 'AUDITOR'),
(6, 'G-11 REP'),
(7, 'G-12 REP');

-- --------------------------------------------------------

--
-- Table structure for table `shs_strandselection`
--

CREATE TABLE `shs_strandselection` (
  `strandID` int(11) NOT NULL,
  `strand` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `shs_strandselection`
--

INSERT INTO `shs_strandselection` (`strandID`, `strand`) VALUES
(1, 'Information and Communications Technology'),
(2, 'Contact Center Services'),
(3, 'Computer Programming'),
(4, 'Animation');

-- --------------------------------------------------------

--
-- Table structure for table `shs_title`
--

CREATE TABLE `shs_title` (
  `titlePage` varchar(20) NOT NULL,
  `title` varchar(100) NOT NULL,
  `dateCreated` timestamp NOT NULL DEFAULT current_timestamp(),
  `dateUpdated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `shs_title`
--

INSERT INTO `shs_title` (`titlePage`, `title`, `dateCreated`, `dateUpdated`) VALUES
('Candidates', 'ACLC Malolos SC Election Candidates S.Y 2022-2023 (SHS)', '2023-06-27 09:28:35', '2023-06-28 05:10:27'),
('Home', 'ACLC Malolos SC Election S.Y 2022-2023 (SHS)', '2023-06-27 09:28:35', '2023-06-28 05:10:21'),
('Result', 'ACLC Malolos SC Election Result S.Y 2022-2023 (SHS)', '2023-06-27 09:28:35', '2023-06-28 05:10:40'),
('Vote', 'ACLC Malolos SC Election Vote S.Y 2022-2023 (SHS)', '2023-06-27 09:28:35', '2023-06-28 05:10:33');

-- --------------------------------------------------------

--
-- Table structure for table `shs_userlog`
--

CREATE TABLE `shs_userlog` (
  `id` int(11) NOT NULL,
  `voterID` int(11) NOT NULL,
  `logName` varchar(100) NOT NULL,
  `logUSN` varchar(15) NOT NULL,
  `userIP` varbinary(16) NOT NULL,
  `loginTime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `shs_voter`
--

CREATE TABLE `shs_voter` (
  `voterID` int(11) NOT NULL,
  `fullName` varchar(30) NOT NULL,
  `yearLevel` varchar(20) NOT NULL,
  `strand` varchar(70) NOT NULL,
  `usn` varchar(15) NOT NULL,
  `vpass` varchar(20) NOT NULL,
  `email` varchar(30) DEFAULT 'Not Verified',
  `voteStatus` varchar(20) NOT NULL DEFAULT 'Not Voted',
  `dateCreated` timestamp NOT NULL DEFAULT current_timestamp(),
  `dateUpdated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `shs_voter`
--

INSERT INTO `shs_voter` (`voterID`, `fullName`, `yearLevel`, `strand`, `usn`, `vpass`, `email`, `voteStatus`, `dateCreated`, `dateUpdated`) VALUES
(1, 'Ran (Sample for SHS)', 'GRADE 12', 'Information and Communications Technology', '123456', '123456', 'Not Verified', 'Not Voted', '2023-06-29 16:28:27', '2023-06-29 17:52:03');

-- --------------------------------------------------------

--
-- Table structure for table `shs_ylselection`
--

CREATE TABLE `shs_ylselection` (
  `yearLevelID` int(11) NOT NULL,
  `yearLevel` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `shs_ylselection`
--

INSERT INTO `shs_ylselection` (`yearLevelID`, `yearLevel`) VALUES
(1, 'GRADE 11'),
(2, 'GRADE 12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_account`
--
ALTER TABLE `admin_account`
  ADD PRIMARY KEY (`adminID`);

--
-- Indexes for table `admin_home`
--
ALTER TABLE `admin_home`
  ADD PRIMARY KEY (`homeID`);

--
-- Indexes for table `admin_userlog`
--
ALTER TABLE `admin_userlog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clg_candidates`
--
ALTER TABLE `clg_candidates`
  ADD PRIMARY KEY (`candidateID`);

--
-- Indexes for table `clg_confirmedvote`
--
ALTER TABLE `clg_confirmedvote`
  ADD PRIMARY KEY (`confirmedVoteID`);

--
-- Indexes for table `clg_courseselection`
--
ALTER TABLE `clg_courseselection`
  ADD PRIMARY KEY (`courseID`);

--
-- Indexes for table `clg_deviceguide`
--
ALTER TABLE `clg_deviceguide`
  ADD PRIMARY KEY (`deviceID`);

--
-- Indexes for table `clg_home`
--
ALTER TABLE `clg_home`
  ADD PRIMARY KEY (`homeID`);

--
-- Indexes for table `clg_pendingvote`
--
ALTER TABLE `clg_pendingvote`
  ADD PRIMARY KEY (`pendingVoteID`);

--
-- Indexes for table `clg_plselection`
--
ALTER TABLE `clg_plselection`
  ADD PRIMARY KEY (`partyListID`);

--
-- Indexes for table `clg_positionselection`
--
ALTER TABLE `clg_positionselection`
  ADD PRIMARY KEY (`positionID`);

--
-- Indexes for table `clg_title`
--
ALTER TABLE `clg_title`
  ADD PRIMARY KEY (`titlePage`);

--
-- Indexes for table `clg_userlog`
--
ALTER TABLE `clg_userlog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clg_voter`
--
ALTER TABLE `clg_voter`
  ADD PRIMARY KEY (`voterID`);

--
-- Indexes for table `clg_ylselection`
--
ALTER TABLE `clg_ylselection`
  ADD PRIMARY KEY (`yearLevelID`);

--
-- Indexes for table `datetimedata`
--
ALTER TABLE `datetimedata`
  ADD PRIMARY KEY (`dtID`);

--
-- Indexes for table `shs_candidates`
--
ALTER TABLE `shs_candidates`
  ADD PRIMARY KEY (`candidateID`);

--
-- Indexes for table `shs_confirmedvote`
--
ALTER TABLE `shs_confirmedvote`
  ADD PRIMARY KEY (`confirmedVoteID`);

--
-- Indexes for table `shs_deviceguide`
--
ALTER TABLE `shs_deviceguide`
  ADD PRIMARY KEY (`deviceID`);

--
-- Indexes for table `shs_home`
--
ALTER TABLE `shs_home`
  ADD PRIMARY KEY (`homeID`);

--
-- Indexes for table `shs_pendingvote`
--
ALTER TABLE `shs_pendingvote`
  ADD PRIMARY KEY (`pendingVoteID`);

--
-- Indexes for table `shs_plselection`
--
ALTER TABLE `shs_plselection`
  ADD PRIMARY KEY (`partyListID`);

--
-- Indexes for table `shs_positionselection`
--
ALTER TABLE `shs_positionselection`
  ADD PRIMARY KEY (`positionID`);

--
-- Indexes for table `shs_strandselection`
--
ALTER TABLE `shs_strandselection`
  ADD PRIMARY KEY (`strandID`);

--
-- Indexes for table `shs_title`
--
ALTER TABLE `shs_title`
  ADD PRIMARY KEY (`titlePage`);

--
-- Indexes for table `shs_userlog`
--
ALTER TABLE `shs_userlog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shs_voter`
--
ALTER TABLE `shs_voter`
  ADD PRIMARY KEY (`voterID`);

--
-- Indexes for table `shs_ylselection`
--
ALTER TABLE `shs_ylselection`
  ADD PRIMARY KEY (`yearLevelID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_account`
--
ALTER TABLE `admin_account`
  MODIFY `adminID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admin_home`
--
ALTER TABLE `admin_home`
  MODIFY `homeID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `admin_userlog`
--
ALTER TABLE `admin_userlog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `clg_candidates`
--
ALTER TABLE `clg_candidates`
  MODIFY `candidateID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `clg_confirmedvote`
--
ALTER TABLE `clg_confirmedvote`
  MODIFY `confirmedVoteID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `clg_courseselection`
--
ALTER TABLE `clg_courseselection`
  MODIFY `courseID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `clg_deviceguide`
--
ALTER TABLE `clg_deviceguide`
  MODIFY `deviceID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `clg_home`
--
ALTER TABLE `clg_home`
  MODIFY `homeID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=171;

--
-- AUTO_INCREMENT for table `clg_pendingvote`
--
ALTER TABLE `clg_pendingvote`
  MODIFY `pendingVoteID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `clg_plselection`
--
ALTER TABLE `clg_plselection`
  MODIFY `partyListID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `clg_positionselection`
--
ALTER TABLE `clg_positionselection`
  MODIFY `positionID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `clg_userlog`
--
ALTER TABLE `clg_userlog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=187;

--
-- AUTO_INCREMENT for table `clg_voter`
--
ALTER TABLE `clg_voter`
  MODIFY `voterID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `clg_ylselection`
--
ALTER TABLE `clg_ylselection`
  MODIFY `yearLevelID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `datetimedata`
--
ALTER TABLE `datetimedata`
  MODIFY `dtID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `shs_candidates`
--
ALTER TABLE `shs_candidates`
  MODIFY `candidateID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `shs_confirmedvote`
--
ALTER TABLE `shs_confirmedvote`
  MODIFY `confirmedVoteID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `shs_deviceguide`
--
ALTER TABLE `shs_deviceguide`
  MODIFY `deviceID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `shs_home`
--
ALTER TABLE `shs_home`
  MODIFY `homeID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `shs_pendingvote`
--
ALTER TABLE `shs_pendingvote`
  MODIFY `pendingVoteID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `shs_plselection`
--
ALTER TABLE `shs_plselection`
  MODIFY `partyListID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `shs_positionselection`
--
ALTER TABLE `shs_positionselection`
  MODIFY `positionID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `shs_strandselection`
--
ALTER TABLE `shs_strandselection`
  MODIFY `strandID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `shs_userlog`
--
ALTER TABLE `shs_userlog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `shs_voter`
--
ALTER TABLE `shs_voter`
  MODIFY `voterID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `shs_ylselection`
--
ALTER TABLE `shs_ylselection`
  MODIFY `yearLevelID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
