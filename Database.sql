-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 04, 2021 at 10:14 AM
-- Server version: 5.7.35-log
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `databasename`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `AdminID` varchar(1) NOT NULL DEFAULT 'A',
  `AdminUsername` varchar(250) NOT NULL,
  `Password` varchar(250) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`AdminID`, `AdminUsername`, `Password`) VALUES
('A', 'admin', '04314001997');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `CategoryID` bigint(250) NOT NULL,
  `Category` varchar(50) NOT NULL,
  `CategoryStatus` int(1) NOT NULL DEFAULT '1',
  `CategoryAddedDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `CategoryLastEditedOn` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`CategoryID`, `Category`, `CategoryStatus`, `CategoryAddedDate`, `CategoryLastEditedOn`) VALUES
(1, 'Photo Gallery', 1, '2018-04-20 14:22:11', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `category_gallery`
--

CREATE TABLE `category_gallery` (
  `CategoryGalleryID` bigint(250) NOT NULL,
  `CategoryID` bigint(250) NOT NULL,
  `CategoryGallery` text NOT NULL,
  `CategoryGalleryStatus` int(1) NOT NULL DEFAULT '1',
  `CategoryGalleryAddedDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `CategoryGalleryLastEditedOn` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category_gallery`
--

INSERT INTO `category_gallery` (`CategoryGalleryID`, `CategoryID`, `CategoryGallery`, `CategoryGalleryStatus`, `CategoryGalleryAddedDate`, `CategoryGalleryLastEditedOn`) VALUES
(1, 1, 'upload/Photo-Gallery/250/Untitled-1 copy.jpg', 1, '2018-04-20 14:22:28', '0000-00-00 00:00:00'),
(2, 1, 'upload/Photo-Gallery/250/Untitled-2 copy.jpg', 1, '2018-04-20 14:22:28', '0000-00-00 00:00:00'),
(3, 1, 'upload/Photo-Gallery/250/Untitled-3 copy.jpg', 1, '2018-04-20 14:22:28', '0000-00-00 00:00:00'),
(4, 1, 'upload/Photo-Gallery/250/Untitled-4 copy.jpg', 1, '2018-04-20 14:22:28', '0000-00-00 00:00:00'),
(5, 1, 'upload/Photo-Gallery/250/Untitled-5  copy.jpg', 1, '2018-04-20 14:22:28', '0000-00-00 00:00:00'),
(6, 1, 'upload/Photo-Gallery/250/Untitled-6 copy.jpg', 1, '2018-04-20 14:22:28', '0000-00-00 00:00:00'),
(7, 1, 'upload/Photo-Gallery/250/zoofunction.JPG', 1, '2018-04-20 14:22:30', '0000-00-00 00:00:00'),
(8, 1, 'upload/Photo-Gallery/250/All Association Inauguration1.JPG', 1, '2018-04-20 14:22:31', '0000-00-00 00:00:00'),
(9, 1, 'upload/Photo-Gallery/250/Founder Commomeration.JPG', 1, '2018-04-20 14:22:32', '0000-00-00 00:00:00'),
(10, 1, 'upload/Photo-Gallery/250/Com function1.JPG', 1, '2018-04-20 14:22:33', '0000-00-00 00:00:00'),
(11, 1, 'upload/Photo-Gallery/250/Founder Commomeration1.JPG', 1, '2018-04-20 14:22:35', '0000-00-00 00:00:00'),
(12, 1, 'upload/Photo-Gallery/250/ISRO Expo.JPG', 0, '2018-04-20 14:25:10', '2018-04-21 05:36:39'),
(13, 1, 'upload/Photo-Gallery/250/ISRO Expo2.JPG', 0, '2018-04-20 14:25:10', '2018-04-21 05:36:38'),
(14, 1, 'upload/Photo-Gallery/250/All Association Inauguration.JPG', 1, '2018-04-21 05:44:54', '0000-00-00 00:00:00'),
(15, 1, 'upload/Photo-Gallery/250/Boys Convocation.JPG', 1, '2018-04-21 05:49:19', '0000-00-00 00:00:00'),
(16, 1, 'upload/Photo-Gallery/250/Girls Convocation 1.JPG', 1, '2018-04-21 05:49:20', '0000-00-00 00:00:00'),
(17, 1, 'upload/Photo-Gallery/250/ISRO Expo.JPG', 1, '2018-04-21 05:49:33', '0000-00-00 00:00:00'),
(18, 1, 'upload/Photo-Gallery/250/Girls Convocation 2.JPG', 1, '2018-04-21 05:49:34', '0000-00-00 00:00:00'),
(19, 1, 'upload/Photo-Gallery/250/ISRO Expo2.JPG', 1, '2018-04-21 05:49:45', '0000-00-00 00:00:00'),
(20, 1, 'upload/Photo-Gallery/250/Com function.JPG', 1, '2018-04-21 05:49:46', '0000-00-00 00:00:00'),
(21, 1, 'upload/Photo-Gallery/250/Indepenence Day Celebration.JPG', 1, '2018-04-21 05:49:47', '0000-00-00 00:00:00'),
(22, 1, 'upload/Photo-Gallery/250/Botany function.JPG', 1, '2018-04-21 05:49:52', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `dynamic_page`
--

CREATE TABLE `dynamic_page` (
  `DynamicPageID` bigint(250) NOT NULL,
  `DynamicPageName` varchar(50) NOT NULL,
  `DynamicPageURL` text NOT NULL,
  `DynamicPageContent` text NOT NULL,
  `DynamicPageStatus` int(1) NOT NULL DEFAULT '1',
  `DynamicPageAddedDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `DynamicPageCreatedBy` varchar(10) NOT NULL,
  `DynamicPageLastEditedBy` varchar(10) NOT NULL,
  `DynamicPageLastEditedOn` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `news_events`
--

CREATE TABLE `news_events` (
  `NewsEventsID` bigint(250) NOT NULL,
  `NewsEventsTitle` varchar(50) NOT NULL,
  `NewsEventsURL` text NOT NULL,
  `NewsEventsContent` text NOT NULL,
  `NewsEventsStatus` int(1) NOT NULL DEFAULT '1',
  `NewsEventsAddedDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `NewsEventsCreatedBy` varchar(10) NOT NULL,
  `NewsEventsLastEditedBy` varchar(10) NOT NULL,
  `NewsEventsLastEditedOn` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news_events`
--

INSERT INTO `news_events` (`NewsEventsID`, `NewsEventsTitle`, `NewsEventsURL`, `NewsEventsContent`, `NewsEventsStatus`, `NewsEventsAddedDate`, `NewsEventsCreatedBy`, `NewsEventsLastEditedBy`, `NewsEventsLastEditedOn`) VALUES
(1, 'Results - 2016', 'results---2016', '<p><span style=\"color: #ff0000;\"><strong><a title=\"U.G., &amp; P.G., NOVEMBER - 2016 RESULTS\" href=\"http://results.sripushpamcollege.co.in/\" target=\"_blank\">U.G., &amp; P.G., NOVEMBER - 2016 RESULTS</a></strong></span></p>', 0, '2016-12-24 06:43:37', 'A', 'A', '2017-05-25 16:25:41'),
(2, 'Department of Physics', 'department-of-physics', '<p><a title=\"JRF Call Letter\" href=\"../pdf/JRF%20Call%20Letter.pdf\" target=\"_blank\"><strong><span>Applications are invited from eligible candidates for the post of JRF</span></strong></a></p>', 1, '2017-02-25 07:44:57', 'A', 'A', '2017-02-25 13:16:10'),
(3, 'National Conference', 'national-conference', '<p><strong><a href=\"../pdf/RDNMRTR-2017.pdf\" target=\"_blank\">NATIONAL CONFERENCE ON RECENT DEVELOPMENTS IN NANO MATRIALS AND THIN FILMS RESEARCH (RDNMTR-2017)</a></strong></p>', 1, '2017-03-06 08:45:51', 'A', 'A', '2017-03-06 14:16:55'),
(4, 'April Result - 2017', 'april-result---2017', '<p><a title=\"Result April 2017\" href=\"https://results.sripushpamcollege.co.in/\" target=\"_blank\"><strong>M.Phil., P.G., AND U.G. APRIL - 2017 RESULTS</strong></a></p>', 0, '2017-05-25 10:55:23', 'A', '', '2017-07-03 16:34:10'),
(5, 'U.G., & P.G. SUPPLEMENTARY EXAMINATIONS RESULTS- J', 'u.g.-&-p.g.-supplementary-examinations-results--june-2017', '<p><a title=\"Result\" href=\"https://results.sripushpamcollege.co.in/\" target=\"_blank\"><strong>U.G., &amp; P.G. SUPPLEMENTARY EXAMINATIONS RESULTS- JUNE 2017</strong></a></p>', 0, '2017-07-03 11:04:02', 'A', '', '2017-07-03 16:34:51'),
(6, 'June Results - 2017', 'june-results---2017', '<p><a title=\"Result\" href=\"https://results.sripushpamcollege.co.in/\" target=\"_blank\"><strong>U.G., &amp; P.G. SUPPLEMENTARY EXAMINATIONS RESULTS- JUNE 2017</strong></a></p>', 1, '2017-07-03 11:04:45', 'A', '', '0000-00-00 00:00:00'),
(7, '13th Graduation Day (Girls)', '13th-graduation-day-(girls)', '<p><a href=\"images/graduategirls.jpg\" target=\"_blank\">13th Graduation Day (Girls) on saturday 14th October 2017, at 10.30 a.m.</a></p>', 1, '2017-10-11 13:17:17', 'A', '', '0000-00-00 00:00:00'),
(8, '42nd Graduation Day (Boys)', '42nd-graduation-day-(boys)', '<p><a href=\"images/graduateboys.jpg\" target=\"_blank\">42nd&nbsp;Graduation Day (Boys) on Sunday 15th October 2017, at 10.30 a.m.</a></p>', 1, '2017-10-11 13:19:49', 'A', '', '0000-00-00 00:00:00'),
(9, 'U.G. P.G. & M.Phil., - NOVEMBER 2017 RESULTS', 'u.g.-p.g.-&-m.phil.---november-2017-results', '<p><a title=\"Result\" href=\"https://results.sripushpamcollege.co.in/\" target=\"_blank\">U.G. P.G. &amp; M.Phil., - NOVEMBER 2017 RESULTS&nbsp;</a></p>', 1, '2017-12-06 13:42:59', 'A', '', '0000-00-00 00:00:00'),
(10, 'National Level Seminar', 'national-level-seminar', '<p><a title=\"National Level Seminar\" href=\"../pdf/National%20level%20seminar.pdf\" target=\"_blank\"><em>ICSSR Sponsored National level seminar on &ldquo;<strong>Women in Indian agriculture&rdquo;&nbsp;</strong>&nbsp;5<sup>th</sup>&nbsp;&amp; 6<sup>th</sup>&nbsp;March, 2018\'</em></a></p>', 1, '2018-01-25 06:11:30', 'A', 'A', '2018-01-25 11:53:22'),
(11, 'UGC SPONSORED NATIONAL SEMINAR', 'ugc-sponsored-national-seminar', '<p><a title=\"UGC SPONSORED NATIONAL SEMINAR\" href=\"../pdf/national_level_seminar_mar_2018.pdf\" target=\"_blank\">UGC SPONSORED NATIONAL SEMINAR on ENHANCINGTHE ECONOMY OFTAMILNADU THROUGH EMERGING TECHNOLOGIES IN AGRICULTURE IN THE CAUVERY DELTA DISTRICTS organised by PG and Research dept of Economics on 16th &amp; 17th March 2018.</a></p>', 1, '2018-03-02 06:31:20', 'A', '', '0000-00-00 00:00:00'),
(12, 'Invitation from Department of Economics', 'invitation-from-department-of-economics', '<p><span style=\"color: #0000ff; font-size: x-small;\"><em><strong><a title=\"Invitation from Department of Economics\" href=\"../pdf/AVVM%20SPC%20%20Invitaion%20Economics.pdf\" target=\"_blank\" data-saferedirecturl=\"https://www.google.com/url?hl=en&amp;q=https://www.sripushpamcollege.co.in/pdf/national_level_seminar_mar_2018.pdf&amp;source=gmail&amp;ust=1521104904477000&amp;usg=AFQjCNG4__9Hyrxhdg1nYPgY36_Daa2SdA\">UGC sponsored national seminar on enhancing the economy of Tamilnadu through Emerging technologies in Agriculture in the Cauvery delta Districts Organised by PG and Research Dept of Economics on 16<sup>th</sup>&nbsp;&amp; 17<sup>th</sup>&nbsp;March 2018.</a></strong></em></span></p>', 1, '2018-03-14 11:57:09', 'A', 'A', '2018-03-14 17:30:01'),
(13, 'U.G., P.G. & M.Phil.,  APRIL - 2018 RESULTS', 'u.g.-p.g.-&-m.phil.-april---2018-results', '<p><a title=\"U.G., P.G. &amp; M.Phil.,  APRIL - 2018 RESULTS\" href=\"http://www.sripushpamcollege.co.in/result/APril2018/\" target=\"_blank\"><span>U.G. P.G. &amp; M.Phil., - APRIL 2018 RESULTS</span></a></p>', 0, '2018-05-23 10:28:42', 'A', '', '2018-06-29 07:26:56'),
(14, 'June 2018 UG, PG Supplementary Examinations Result', 'june-2018-ug-pg-supplementary-examinations-results', '<p><a title=\"June 2018\" href=\"https://results.sripushpamcollege.co.in/\" target=\"_blank\"><span style=\"font-size: small;\">JUNE 2018 UG, PG SUPPLEMENTARY EXAMINATIONS RESULTS</span></a></p>', 1, '2018-06-29 07:26:51', 'A', '', '0000-00-00 00:00:00'),
(15, 'Infofez-2018', 'infofez-2018', '<p><a title=\"Infofez\'18\" href=\"../pdf/infofez2018.pdf\" target=\"_blank\"><span style=\"font-size: small;\">Infofez\'18 Inter Collegiate Competitions - Depertment of Computer Science</span></a></p>', 1, '2018-08-14 06:03:23', 'A', '', '0000-00-00 00:00:00'),
(16, 'Graduation Day for Boys and Girls 2018', 'graduation-day-for-boys-and-girls-2018', '<p><a title=\"Graduation Day for Boys and Girls\" href=\"../pdf/imagetopdf.pdf\"><span>Graduation Day for Boys and Girls</span></a></p>', 1, '2018-08-24 06:04:12', 'A', '', '0000-00-00 00:00:00'),
(17, 'Founder\'s Day Celebration 2018', 'founder\'s-day-celebration-2018', '<p><a title=\"Founder\'s Day Celebration\" href=\"../pdf/FoundersDaycelebration2018.pdf\" target=\"_blank\"><span>Founder\'s Day Celebration</span></a></p>', 1, '2018-08-24 06:08:13', 'A', '', '0000-00-00 00:00:00'),
(18, 'JRF Recruitment', 'jrf-recruitment', '<p><a href=\"../pdf/Circular%20for%20JRF,%20Principal%20forwarded.pdf\" target=\"_blank\">JRF Recruitment</a></p>', 1, '2018-10-13 13:46:48', 'A', 'A', '2018-10-13 13:47:25'),
(19, 'ONE DAY BASIC TRAINING PROGRAMME ON HUMAN RIGHTS o', 'one-day-basic-training-programme-on-human-rights-on-7th-december-2018', '<p><a title=\"ONE DAY BASIC TRAINING PROGRAMME ON HUMAN RIGHTS on 7th December, 2018\" href=\"../pdf/Human%20Rights%20Training.pdf\" target=\"_blank\"><span>ONE DAY BASIC TRAINING PROGRAMME ON HUMAN RIGHTS on 7th December, 2018</span></a></p>\r\n<p><a title=\"Registration Form\" href=\"../pdf/Training%20Registration-Form.pdf\" target=\"_blank\">Registration Form</a> - Click to download</p>', 1, '2018-10-22 05:58:31', 'A', '', '0000-00-00 00:00:00'),
(20, 'NOVEMBER - 2018 U.G., P.G., M.Phil., EXAMINATIONS ', 'november---2018-u.g.-p.g.-m.phil.-examinations-results', '<p><a title=\"NOVEMBER - 2018 U.G., P.G., M.Phil., EXAMINATIONS RESULTS\" href=\"http://results.sripushpamcollege.co.in/\" target=\"_blank\"><span>NOVEMBER - 2018 U.G., P.G., M.Phil., EXAMINATIONS RESULTS</span></a></p>', 0, '2018-12-22 11:03:47', 'A', '', '2019-12-03 06:01:57'),
(21, 'Entrepreneurship development cell organize â€œSecu', 'entrepreneurship-development-cell-organize-â€œsecurities-and-exchange-board-of-india-sponsored-faculty-development-programme-on-financial-market-&-investors-awarenessâ€-on-11.01.2019-at-2.00-pm.', '<p><a title=\"Entrepreneurship development cell organize &ldquo;Securities and Exchange board of India Sponsored Faculty Development Programme on Financial, Market &amp; Investors Awareness&rdquo; on 11.01.2019 at 2.00 pm.\" href=\"pdf/Securities%20and%20Exchange%20board%20of%20India%20Sponsored%20Faculty%20Development%20Programme%20on%20Financial,%20Market%20&amp;%20Investors%20Awareness.pdf\"><strong>Entrepreneurship development cell</strong> organize &ldquo;<strong><em>Securities and</em></strong> <strong><em>Exchange board of India Sponsored Faculty Development Programme on Financial, Market &amp; Investors Awareness&rdquo;</em></strong> on 11.01.2019 at 2.00 pm.</a></p>', 0, '2019-01-04 11:14:10', 'A', 'A', '2019-01-04 11:21:31'),
(22, 'Securities and Exchange board of India ', 'securities-and-exchange-board-of-india-', '<p><a href=\"pdf/Securities%20and%20Exchange%20board%20of%20India%20Sponsored%20Faculty%20Development%20Programme%20on%20Financial,%20Market%20&amp;%20Investors%20Awareness.pdf\"><strong>Entrepreneurship development cell</strong> organize &ldquo;<strong><em>Securities and</em></strong> <strong><em>Exchange board of India Sponsored Faculty Development Programme on Financial, Market &amp; Investors Awareness&rdquo;</em></strong> on 11.01.2019 at 2.00 pm.</a></p>', 1, '2019-01-04 11:22:29', 'A', '', '0000-00-00 00:00:00'),
(23, 'Why INTELLECTUAL PROPERTY RIGHTS Importants?', 'why-intellectual-property-rights-importants?', '<p><a href=\"pdf/Why%20INTELLECTUAL%20PROPERTY%20RIGHTS%20Importants.pdf\"><strong>Entrepreneurship development cell</strong> organize National seminar on &ldquo;<strong><em>Why INTELLECTUAL PROPERTY RIGHTS Importants?</em></strong>&rdquo; on 02.02.2019 .</a></p>', 1, '2019-01-04 11:24:59', 'A', '', '0000-00-00 00:00:00'),
(24, 'Papper Advertisment', 'papper-advertisment', '<p><a href=\"pdf/Paper%20Advertisement.pdf\">Papper Advertisment</a></p>', 0, '2019-02-12 12:53:58', 'A', 'A', '2019-02-12 13:28:20'),
(25, 'Paper Advertisment', 'paper-advertisment', '<p><a href=\"pdf/Paper%20Advertisement.pdf\">Paper Advertisment</a></p>', 0, '2019-02-12 13:29:48', 'A', '', '2019-02-13 09:33:53'),
(26, 'Employment Notification', 'employment-notification', '<p><a href=\"pdf/Paper%20Advertisement.pdf\">Employment Notification</a></p>', 1, '2019-02-13 09:43:43', 'A', '', '0000-00-00 00:00:00'),
(27, 'APRIL- 2019 U.G., P.G., M.Phil., EXAMINATIONS RESU', 'http://sripushpamcollege.co.in/result/ApRil2019/', '<p><a href=\"../result/ApRil2019/\">APRIL- 2019 U.G., P.G., M.Phil., EXAMINATIONS RESULTS</a></p>', 0, '2019-05-22 07:08:04', 'A', 'A', '2019-12-03 06:02:04'),
(28, '44th Graduation Day (Boys)', '44th-graduation-day-(boys)', '<p><a href=\"../pdf/14%20Boys%20(B).pdf\" target=\"_blank\"><span>44th Graduation Day (Boys)</span></a></p>', 1, '2019-09-09 11:35:17', 'A', '', '0000-00-00 00:00:00'),
(29, '15th Graduation Day(Girls)', '15th-graduation-day(girls)', '<p><a href=\"../pdf/15%20Girls%20(F).pdf\" target=\"_blank\"><span>15th Graduation Day(Girls)</span></a></p>', 1, '2019-09-09 11:45:18', 'A', '', '0000-00-00 00:00:00'),
(30, 'Call for Interview (Permanent Assistant Professor ', 'call-for-interview-(permanent-assistant-professor-post)', '<p>As per our paper advertisement in Hindu dated 17th February 2019 calling for an application for the posts of Assistant professors (Economics, Tamil, Commerce, Mathematics, Botany, Zoology, Physical Education, Physical Director) can attend the interview on 09.11.2019 in our college premises.</p>', 1, '2019-11-05 07:26:00', 'A', '', '0000-00-00 00:00:00'),
(31, 'NOVEMBER - 2019 U.G., P.G., M.Phil., EXAMINATIONS ', 'november---2019-u.g.-p.g.-m.phil.-examinations-results-', '<p><a href=\"http://results.sripushpamcollege.co.in/\" target=\"_blank\">NOVEMBER - 2019 U.G., P.G., M.Phil., EXAMINATIONS RESULTS&nbsp;</a></p>', 1, '2019-12-03 05:59:44', 'A', 'A', '2019-12-03 06:00:40'),
(32, 'ONE DAY BASIC TRAINING PROGRAMME ON HUMAN RIGHTS', 'one-day-basic-training-programme-on-human-rights', '<p>&nbsp;<a href=\"pdf/Programme.pdf\" target=\"_blank\">In Collaboration with National Human Rights Commission, New Delhi.&nbsp;Organised by Department of Commerce.</a>&nbsp;Click and download the&nbsp;<a href=\"pdf/Training_Registration-Form.pdf\" target=\"_blank\">Training Registration Form</a></p>', 1, '2019-12-10 07:31:43', 'A', 'A', '2019-12-10 07:32:54'),
(33, 'National Conference on â€œIntellectual property Ri', 'national-conference-on-â€œintellectual-property-rights-in-biodiversity-and-biotechnologyâ€-organized-by-department-of-zoology.', '<p><a href=\"../pdf/Pamphlet[5814]%2024.01.2020.pdf\" target=\"_blank\"><span>National Conference on &ldquo;Intellectual property Rights in Biodiversity and Biotechnology&rdquo; Organized by Department of Zoology.</span></a></p>', 0, '2020-01-24 13:08:57', 'A', '', '2020-01-24 13:12:08'),
(34, 'National Conference', 'national-conference', '<p><a href=\"../pdf/Pamphlet[5814]%2024.01.2020.pdf\" target=\"_blank\"><span>National Conference on &ldquo;Intellectual property Rights in Biodiversity and Biotechnology&rdquo; Organized by Department of Zoology.</span></a></p>', 1, '2020-01-24 13:13:06', 'A', '', '0000-00-00 00:00:00'),
(35, 'Public Notice', 'public-notice', '<p><a href=\"pdf/IMG-20200511-WA0004-converted.pdf\" target=\"_blank\">Redressal of Grievances Related to covid-19 Pandemic</a></p>', 1, '2020-05-11 06:34:37', 'A', '', '2020-07-16 11:48:04'),
(36, 'UG Application Form', 'ug-application-form', '<p><span><a title=\"UG Application Form\" href=\"../pdf/UG%20Application%20Form_Correct.pdf\" target=\"_blank\">UG Application Form - <strong>2020-2021</strong></a></span></p>', 0, '2020-07-16 11:47:13', 'A', 'A', '2020-07-16 13:35:21'),
(37, 'Application for Admission (2020-2021)', 'application-for-admission-(2020-2021)', '<p><span style=\"text-decoration: underline;\"><a style=\"color: #0000ff; text-decoration: underline;\" title=\"Offline Application\" href=\"../pdf/UG%20Application%20Form_Correct.pdf\" target=\"_blank\">Offline&nbsp;Application</a><span><strong><br /></strong></span></span></p>\r\n<p><span style=\"text-decoration: underline;\"><span style=\"color: #0000ff; text-decoration: underline;\"><a title=\"Online Application\" href=\"https://forms.gle/VL1E3G4okwkZGJxr7\" target=\"_blank\"><span style=\"color: #0000ff; text-decoration: underline;\">Online Application</span></a></span></span></p>', 0, '2020-07-16 13:37:52', 'A', 'A', '2020-07-27 13:20:02'),
(38, 'ONLINE Admission FORM FOR UNDERGRADUATE COURSES 20', '', '<p><a href=\"https://forms.gle/rgEcNjYspedWPoXL6\" target=\"_blank\" data-saferedirecturl=\"https://www.google.com/url?q=https://forms.gle/rgEcNjYspedWPoXL6&amp;source=gmail&amp;ust=1595939186953000&amp;usg=AFQjCNGQzE0lgZc7wVY_LXbiJIqc2EbwBA\">https://forms.gle/rgEcNjYspedWPoXL6</a></p>', 0, '2020-07-27 12:29:54', 'A', '', '2020-07-27 12:35:14'),
(39, 'ONLINE Admission FORM FOR UG COURSES 2020-21 :', 'online-admission-form-for-ug-courses-2020-21-:', '<p><a href=\"https://forms.gle/rgEcNjYspedWPoXL6\" target=\"_blank\" data-saferedirecturl=\"https://www.google.com/url?q=https://forms.gle/rgEcNjYspedWPoXL6&amp;source=gmail&amp;ust=1595939186953000&amp;usg=AFQjCNGQzE0lgZc7wVY_LXbiJIqc2EbwBA\">https://forms.gle/rgEcNjYspedWPoXL6</a></p>', 0, '2020-07-27 12:36:45', 'A', '', '2020-07-27 12:42:07'),
(40, 'ONLINE Admission FORM FOR UG COURSES 2020-21 :', 'https://forms.gle/rgEcNjYspedWPoXL6', '', 0, '2020-07-27 12:43:32', 'A', '', '2020-07-27 12:44:09'),
(41, 'ONLINE Admission FORM FOR UG COURSES 2020-21 :', 'online-admission-form-for-ug-courses-2020-21-:', '<p><a href=\"https://forms.gle/rgEcNjYspedWPoXL6\" target=\"_blank\" data-saferedirecturl=\"https://www.google.com/url?q=https://forms.gle/rgEcNjYspedWPoXL6&amp;source=gmail&amp;ust=1595939186953000&amp;usg=AFQjCNGQzE0lgZc7wVY_LXbiJIqc2EbwBA\">https://forms.gle/rgEcNjYspedWPoXL6</a></p>', 0, '2020-07-27 12:44:32', 'A', '', '2020-07-27 12:59:11'),
(42, 'ONLINE Admission FORM FOR UG COURSES 2020-21 :', 'online-admission-form-for-ug-courses-2020-21-:', '<p>&lt;a href=\"<a href=\"https://forms.gle/rgEcNjYspedWPoXL6\" target=\"_blank\" data-saferedirecturl=\"https://www.google.com/url?q=https://forms.gle/rgEcNjYspedWPoXL6&amp;source=gmail&amp;ust=1595939186953000&amp;usg=AFQjCNGQzE0lgZc7wVY_LXbiJIqc2EbwBA\">https://forms.gle/rgEcNjYspedWPoXL6</a>\"&gt;Online Admission&lt;/a&gt;</p>', 0, '2020-07-27 13:01:30', 'A', '', '2020-07-27 13:01:47'),
(43, 'ONLINE Admission FORM FOR UG COURSES 2020-21 :', 'online-admission-form-for-ug-courses-2020-21-:', '<p><a href=\"https://forms.gle/rgEcNjYspedWPoXL6\">Online Admission</a>(<span>Link for admission conformed applicants to upload supporting documents)</span></p>', 0, '2020-07-27 13:05:22', 'A', '', '2020-07-27 13:05:59'),
(44, 'ONLINE Admission FORM FOR UG COURSES 2020-21 :', 'online-admission-form-for-ug-courses-2020-21-:', '<p><a href=\"https://forms.gle/rgEcNjYspedWPoXL6\" target=\"_blank\">Online Admission</a><br /> (Link for admission conformed applicants to upload supporting documents)</p>', 0, '2020-07-27 13:07:16', 'A', 'A', '2020-07-27 13:09:00'),
(45, 'ONLINE Admission FORM FOR UG COURSES 2020-21 :', 'online-admission-form-for-ug-courses-2020-21-:', '<p><a href=\"https://forms.gle/rgEcNjYspedWPoXL6\" target=\"blank\">Online Admission</a><br /> (Link for admission conformed applicants to upload supporting documents)</p>', 0, '2020-07-27 13:10:33', 'A', '', '2020-07-27 13:20:03'),
(46, 'UG Application Form', 'ug-application-form', '<p><span style=\"text-decoration: underline;\"><a style=\"color: #0000ff; text-decoration: underline;\" title=\"Offline Application\" href=\"../pdf/UG%20Application%20Form_Correct.pdf\" target=\"_blank\">Offline&nbsp;Application</a><span><strong><br /></strong></span></span></p>\r\n<p><span style=\"text-decoration: underline;\"><span style=\"color: #0000ff; text-decoration: underline;\"><a title=\"Online Application\" href=\"https://forms.gle/VL1E3G4okwkZGJxr7\" target=\"_blank\"><span style=\"color: #0000ff; text-decoration: underline;\">Online Application</span></a></span></span></p>', 0, '2020-07-27 13:22:46', 'A', '', '2020-07-27 13:27:08'),
(47, 'Form for UG Courses 2020-21 :', 'form-for-ug-courses-2020-21-:', '<p><a href=\"https://forms.gle/rgEcNjYspedWPoXL6\" target=\"blank\">Online Admission</a><br /> (Link for admission conformed applicants to upload supporting documents)</p>', 0, '2020-07-27 13:24:45', 'A', '', '2020-07-27 13:27:05'),
(48, 'UG Application Form (2020-21) :', 'ug-application-form-(2020-21)-:', '<p><span style=\"text-decoration: underline;\"><a style=\"color: #0000ff; text-decoration: underline;\" title=\"Offline Application\" href=\"../pdf/UG%20Application%20Form_Correct.pdf\" target=\"_blank\">Offline&nbsp;Application</a><span><strong><br /></strong></span></span></p>\r\n<p><span style=\"text-decoration: underline;\"><span style=\"color: #0000ff; text-decoration: underline;\"><a title=\"Online Application\" href=\"https://forms.gle/VL1E3G4okwkZGJxr7\" target=\"_blank\"><span style=\"color: #0000ff; text-decoration: underline;\">Online Application</span></a></span></span></p>', 0, '2020-07-27 13:28:18', 'A', '', '2020-07-27 13:43:56'),
(49, 'Form for UG Courses (2020-21) :', 'form-for-ug-courses-(2020-21)-:', '<p><a href=\"https://forms.gle/rgEcNjYspedWPoXL6\" target=\"blank\">Online Admission</a><br /> (Link for admission conformed applicants to upload supporting documents)</p>', 0, '2020-07-27 13:30:46', 'A', '', '2020-07-27 13:32:12'),
(50, 'ONLINE Admission Form for UG Courses (2020-21) :', 'online-admission-form-for-ug-courses-(2020-21)-:', '<p><a href=\"https://forms.gle/rgEcNjYspedWPoXL6\" target=\"blank\">Online Admission</a><br /> (Link for admission conformed applicants to upload supporting documents)</p>', 0, '2020-07-27 13:33:09', 'A', '', '2020-07-27 13:43:58'),
(51, 'ONLINE Application Form for UG Courses (2020-21) :', 'online-application-form-for-ug-courses-(2020-21)-:', '<p><span style=\"text-decoration: underline;\"><a style=\"color: #0000ff; text-decoration: underline;\" title=\"Offline Application\" href=\"../pdf/UG%20Application%20Form_Correct.pdf\" target=\"_blank\">Offline&nbsp;Application</a><span><strong><br /></strong></span></span></p>\r\n<p><span style=\"text-decoration: underline;\"><span style=\"color: #0000ff; text-decoration: underline;\"><a title=\"Online Application\" href=\"https://forms.gle/VL1E3G4okwkZGJxr7\" target=\"_blank\"><span style=\"color: #0000ff; text-decoration: underline;\">Online Application</span></a></span></span></p>', 1, '2020-07-27 13:44:47', 'A', '', '0000-00-00 00:00:00'),
(52, 'ONLINE Admission Form for UG Courses (2020-21) :', 'online-admission-form-for-ug-courses-(2020-21)-:', '<p><span style=\"text-decoration: underline;\"><a style=\"color: #0000ff; text-decoration: underline;\" href=\"https://forms.gle/rgEcNjYspedWPoXL6\" target=\"blank\">Online Admission</a></span><br /> (Link for admission conformed applicants to upload supporting documents)</p>', 1, '2020-07-27 13:46:32', 'A', '', '0000-00-00 00:00:00'),
(53, 'ONLINE Application Form for UGC', 'online-application-form-for-ugc', '<p>ONLINE Application Form for UGC sponsored one year Diploma courses under (NSQF) (2020-21) - <span style=\"color: #993300;\"><a href=\"https://forms.gle/Zc5gNtd1EyL5hnLG6\" target=\"_blank\"><span style=\"color: #993300;\">Click here to Register</span></a></span></p>', 0, '2020-10-27 09:57:31', 'A', 'A', '2020-10-30 11:18:40'),
(54, 'APRIL - 2020, U.G., P.G., (FINAL YEAR) and M.Phil.', 'april---2020-u.g.-p.g.-(final-year)-and-m.phil.-', '<p><a title=\"Result\'s\" href=\"https://results.sripushpamcollege.co.in/\" target=\"_blank\">Click here to Result\'s</a></p>\r\n<p><strong style=\"color: #222222; font-family: Arial, Helvetica, sans-serif; font-size: small;\">APRIL - 2020, U.G., P.G., (FINAL YEAR) and M.Phil.,&nbsp;</strong></p>', 0, '2020-10-28 06:17:59', 'A', '', '2021-03-16 09:54:24'),
(55, 'Vigilance Awareness Week', 'vigilance-awareness-week', '<p><span>Observance of Vigilance Awareness Week&nbsp;</span><span>(from 27th October to 2nd November 2020).</span></p>\r\n<p><span><span>Higher Education(A2) Department, Secretariat, Chennai-9.</span><span>(Letter No. 13455/A2/2020-1, Dt. 12.10.2020)</span></span></p>\r\n<ul>\r\n<li><span><span>Integrity Pledge for Citizens</span></span></li>\r\n<ul>\r\n<li><a href=\"../pdf/Read%20Pledge(Tamil).pdf\" target=\"_blank\"><span><span>Read Pledge(Tamil)&nbsp;</span></span></a></li>\r\n<li><a href=\"../pdf/Read%20Pledge(English).pdf\" target=\"_blank\"><span><span>Read Pledge(English)</span></span></a></li>\r\n</ul>\r\n<li><a href=\"https://pledge.cvc.nic.in\"><span>Integrity Pledge for Citizens (for Registration)</span></a></li>\r\n<li><a href=\"https://docs.google.com/forms/d/e/1FAIpQLSeFrteUkj8ZWEoNMQnK8bqUoRLTjzwuPqGSEnFG1guEb5xiew/viewform\" target=\"_blank\"><span><span>INTERNATIONAL LEVEL ONLINE QUIZ-XIII PROGRAMME ON \'VIGILANCE AWARENESS WEEK-2020\' SPECIAL \"VIGILANT INDIA, PROSPEROUS INDIA\"</span></span></a></li>\r\n</ul>', 1, '2020-10-30 11:25:11', 'A', 'A', '2020-10-30 12:11:25'),
(56, 'ONLINE Application Form ', 'online-application-form', '<p>ONLINE Application Form for UGC sponsored one year Diploma courses under (NSQF) (2020-21) -&nbsp;<span><a href=\"https://forms.gle/Zc5gNtd1EyL5hnLG6\" target=\"_blank\"><span>Click here to Register</span></a></span></p>', 1, '2020-10-30 12:05:21', 'A', '', '0000-00-00 00:00:00'),
(57, 'The 65th College Day Celebration', 'the-65th-college-day-celebration', '<p><a title=\"The 65th college day celebration\" href=\"pdf/College%20day%20Invitation%201-converted.pdf\" target=\"_blank\">The 65th College Day Celebration</a></p>', 1, '2021-02-23 10:28:01', 'A', '', '0000-00-00 00:00:00'),
(58, '65th Annual Sports Meet', '65th-annual-sports-meet', '<p><a href=\"pdf/sportmeet.pdf\" target=\"_blank\">65th Annual Sports Meet</a></p>', 1, '2021-02-24 10:23:16', 'A', '', '0000-00-00 00:00:00'),
(59, 'November - 2020, U.G., P.G., (FINAL YEAR) and M.Ph', 'november---2020-u.g.-p.g.-(final-year)-and-m.phil.-results', '<p><a href=\"https://sripushpamcollege.co.in/result/NovE2020/\" target=\"_blank\">Click here to Result\'s</a></p>', 0, '2021-03-16 10:09:02', 'A', '', '2021-03-16 10:10:31'),
(60, 'November - 2020, U.G., P.G., (FINAL YEAR) and M.Ph', 'november---2020-u.g.-p.g.-(final-year)-and-m.phil.-results', '<p><a href=\"https://sripushpamcollege.co.in/result/NovE2020/\" target=\"_blank\">Click here to Result\'s</a></p>', 0, '2021-03-16 10:12:13', 'A', '', '2021-03-16 10:12:32'),
(61, 'November - 2020, U.G., P.G.,And  M.Phil results', 'november---2020-u.g.-p.g.-and-m.phil-results', '<p><strong><a href=\"https://sripushpamcollege.co.in/result/NovE2020/\" target=\"_blank\">Click here to Result\'s</a></strong></p>', 1, '2021-03-16 10:14:52', 'A', 'A', '2021-03-16 10:15:16'),
(62, 'Online Admissions for academic year 2021-2022', 'online-admissions-for-academic-year-2021-2022', '<div>\r\n<h5>To book the admission please click the following link</h5>\r\n<h4>Step-1:</h4>\r\n<a title=\"Online application payment\" href=\"https://pages.razorpay.com/AVVMSPCforUG\">Online application payment</a></div>\r\n<div>\r\n<p>Step-2:</p>\r\n<a title=\"Online application submission\" href=\"https://forms.gle/X4v6VdJVNx3GzDWa6\">Online application submission</a></div>', 0, '2021-06-11 04:06:00', 'A', '', '2021-06-11 11:03:42'),
(63, '', '', '', 0, '2021-06-11 11:03:45', 'A', '', '2021-06-11 11:04:38'),
(64, 'Online Admissions for the academic year 2021-2022 ', 'online-admissions-for-the-academic-year-2021-2022-', '<div>\r\n<h5><span style=\"font-size: 1em;\"><span>For admission,</span></span>&nbsp;</h5>\r\n<p>Step-1:&nbsp;&nbsp;<strong><a title=\"Online application payment\" href=\"https://pages.razorpay.com/AVVMSPCforUG\">Online application payment</a></strong></p>\r\n</div>\r\n<div>\r\n<p>Step-2:&nbsp;&nbsp;<strong><a title=\"Online application submission\" href=\"https://forms.gle/X4v6VdJVNx3GzDWa6\">Online application submission</a></strong></p>\r\n</div>', 1, '2021-06-11 11:07:12', 'A', 'A', '2021-06-11 11:14:17'),
(65, '', '', '<p>&lt;div&gt;<br />&lt;h5&gt;&lt;span style=\"font-size: 1em;\"&gt;&lt;span&gt;For PG admission,&lt;/span&gt;&lt;/span&gt;&amp;nbsp;&lt;/h5&gt;<br />&lt;p&gt;Step-1:&amp;nbsp;&amp;nbsp;&lt;strong&gt;&lt;a title=\"Online application payment\" href=\"<a href=\"https://pages.razorpay.com/AVVMSPCforPG\" target=\"_blank\" data-saferedirecturl=\"https://www.google.com/url?q=https://pages.razorpay.com/AVVMSPCforPG&amp;source=gmail&amp;ust=1626864485905000&amp;usg=AFQjCNEviLQcVHmdr8bkcVYHmSw-bUnO7Q\">https://pages.razorpay.com/AVVMSPCforPG</a>\"&gt;Online application payment&lt;/a&gt;&lt;/strong&gt;&lt;/p&gt;<br />&lt;/div&gt;<br />&lt;div&gt;<br />&lt;p&gt;Step-2:&amp;nbsp;&amp;nbsp;&lt;strong&gt;&lt;a title=\"Online application submission\" href=\"</p>\r\n<div class=\"gs\">\r\n<div id=\":p9\" class=\"ii gt\">\r\n<div id=\":p8\" class=\"a3s aiL \">\r\n<div dir=\"auto\">\r\n<div dir=\"auto\"><a href=\"https://forms.gle/XhVoBzZbT2mMj2JM6\" target=\"_blank\" data-saferedirecturl=\"https://www.google.com/url?q=https://forms.gle/XhVoBzZbT2mMj2JM6&amp;source=gmail&amp;ust=1626864485905000&amp;usg=AFQjCNF4vLUq8tTawvhJ5dcL_HEoSrowLA\">https://forms.gle/XhVoBzZbT2mMj2JM6</a></div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<p>\"&gt;Online application submission&lt;/a&gt;&lt;/strong&gt;&lt;/p&gt;<br />&lt;/div&gt;</p>', 0, '2021-07-20 11:58:12', 'A', '', '2021-07-20 12:00:37'),
(66, 'Online Admissions for the academic year 2021-2022', 'online-admissions-for-the-academic-year-2021-2022', '<div>\r\n<h5><span style=\"font-size: 1em;\"><span>For PG admission,</span></span>&nbsp;</h5>\r\n<p>Step-1:&nbsp;&nbsp;<strong><a title=\"Online application payment\" href=\"https://pages.razorpay.com/AVVMSPCforPG\">Online application payment</a></strong></p>\r\n</div>\r\n<div>\r\n<p>Step-2:&nbsp;&nbsp;<strong><a title=\"Online application submission\" href=\"https://forms.gle/XhVoBzZbT2mMj2JM6\">Online application submission</a></strong></p>\r\n</div>', 1, '2021-07-20 12:02:33', 'A', '', '0000-00-00 00:00:00'),
(67, 'April - 2021', 'april---2021', '<p><a title=\"Result\" href=\"http://results.sripushpamcollege.co.in/\" target=\"_blank\">APRIL- 2021 U.G., P.G., M.Phil., EXAMINATIONS RESULTS</a></p>', 1, '2021-08-04 04:33:56', 'A', '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `pdf_upload`
--

CREATE TABLE `pdf_upload` (
  `PDFUploadID` bigint(250) NOT NULL,
  `PDFUploadName` varchar(50) NOT NULL,
  `PDFUploadURL` text NOT NULL,
  `PDFUploadStatus` int(1) NOT NULL DEFAULT '1',
  `PDFUploadAddedDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `PDFUploadCreatedBy` varchar(10) NOT NULL,
  `PDFUploadLastEditedBy` varchar(10) NOT NULL,
  `PDFUploadLastEditedOn` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pdf_upload`
--

INSERT INTO `pdf_upload` (`PDFUploadID`, `PDFUploadName`, `PDFUploadURL`, `PDFUploadStatus`, `PDFUploadAddedDate`, `PDFUploadCreatedBy`, `PDFUploadLastEditedBy`, `PDFUploadLastEditedOn`) VALUES
(1, 'Greenline Technologies', 'pdf/4x12-paper advt.pdf', 1, '2016-12-24 06:25:37', 'A', '', '0000-00-00 00:00:00'),
(2, 'JRF Call Letter', 'pdf/JRF Call Letter.pdf', 1, '2017-02-25 07:39:22', 'A', '', '0000-00-00 00:00:00'),
(3, 'RDNMRTR 2017', 'pdf/RDNMRTR-2017.pdf', 1, '2017-03-06 08:40:28', 'A', '', '0000-00-00 00:00:00'),
(4, 'National Level Seminar', 'pdf/national_level_seminar.pdf', 1, '2018-01-25 06:09:42', 'A', '', '0000-00-00 00:00:00'),
(5, 'National-Level-Seminar', 'pdf/National level seminar.pdf', 1, '2018-01-25 06:21:48', 'A', '', '0000-00-00 00:00:00'),
(6, 'National Level Seminar March 2018', 'pdf/national_level_seminar_mar_2018.pdf', 1, '2018-03-02 06:29:29', 'A', '', '0000-00-00 00:00:00'),
(7, 'National Level Seminar March 16 & 17, 2018', 'pdf/AVVM SPC  Invitaion Economics.pdf', 1, '2018-03-14 11:45:45', 'A', '', '0000-00-00 00:00:00'),
(8, 'Report of  2017 - 2018 ', 'pdf/EDC- Report( 2017-2018).pdf', 1, '2018-05-22 05:16:06', 'A', '', '0000-00-00 00:00:00'),
(9, 'EDC Objective Main', 'pdf/EDC-Objective.pdf', 1, '2018-05-22 10:04:23', 'A', '', '0000-00-00 00:00:00'),
(10, 'Infofez\'18', 'pdf/infofez2018.pdf', 1, '2018-08-14 06:02:31', 'A', '', '0000-00-00 00:00:00'),
(11, 'Graduation Day for Boys and Girls', 'pdf/imagetopdf.pdf', 1, '2018-08-24 06:01:55', 'A', '', '0000-00-00 00:00:00'),
(12, 'Founder\'s Day celebration2018', 'pdf/FoundersDaycelebration2018.pdf', 1, '2018-08-24 06:07:18', 'A', '', '0000-00-00 00:00:00'),
(13, 'JRF Recruitment', 'pdf/Circular for JRF, Principal forwarded.pdf', 1, '2018-10-13 13:43:43', 'A', '', '0000-00-00 00:00:00'),
(14, 'Training Programmes on Human Rights 7th December 2', 'pdf/Human Rights Training.pdf', 1, '2018-10-22 05:54:18', 'A', '', '0000-00-00 00:00:00'),
(15, 'Human Rights Training Programme Registration Form', 'pdf/Training Registration-Form.pdf', 1, '2018-10-22 05:55:18', 'A', '', '0000-00-00 00:00:00'),
(16, 'Securities and Exchange board of India Sponsored F', 'pdf/Securities and Exchange board of India Sponsored Faculty Development Programme on Financial, Market & Investors Awareness.pdf', 0, '2019-01-04 10:51:13', 'A', '', '2019-01-04 10:53:35'),
(17, 'Securities and Exchange board of India Sponsored F', 'pdf/Securities and Exchange board of India Sponsored Faculty Development Programme on Financial, Market & Investors Awareness.pdf', 1, '2019-01-04 11:08:14', 'A', '', '0000-00-00 00:00:00'),
(18, 'Why INTELLECTUAL PROPERTY RIGHTS Importants?', 'pdf/Why INTELLECTUAL PROPERTY RIGHTS Importants.pdf', 1, '2019-01-04 11:10:57', 'A', '', '0000-00-00 00:00:00'),
(19, 'Paper Advertisment', 'pdf/Paper Advertisement.pdf', 1, '2019-02-12 13:25:05', 'A', '', '0000-00-00 00:00:00'),
(20, '44th Graduation Day Boys', 'pdf/14 Boys (B).pdf', 1, '2019-09-09 11:34:47', 'A', '', '0000-00-00 00:00:00'),
(21, '15th Graduation Day Girls', 'pdf/15 Girls (F).pdf', 1, '2019-09-09 11:37:52', 'A', '', '0000-00-00 00:00:00'),
(22, 'TRAINING PROGRAMME', 'pdf/Programme.pdf', 1, '2019-12-10 07:26:37', 'A', '', '0000-00-00 00:00:00'),
(23, 'TRAINING REGISTRATION', 'pdf/Training_Registration-Form.pdf', 1, '2019-12-10 07:29:47', 'A', '', '0000-00-00 00:00:00'),
(24, 'N a t i o n a l   C o n f e r e n c e   o n     I ', 'pdf/Pamphlet[5814] 24.01.2020.pdf', 1, '2020-01-24 13:05:44', 'A', '', '0000-00-00 00:00:00'),
(25, 'Covid19', 'pdf/IMG-20200511-WA0004-converted.pdf', 1, '2020-05-11 06:32:24', 'A', '', '0000-00-00 00:00:00'),
(26, 'UG Application Form', 'pdf/UG Application Form_Correct.pdf', 1, '2020-07-16 13:33:48', 'A', '', '0000-00-00 00:00:00'),
(27, 'Read Pledge(Tamil) ', 'pdf/Read Pledge(Tamil).pdf', 1, '2020-10-30 11:19:25', 'A', '', '0000-00-00 00:00:00'),
(28, 'Read Pledge(English) ', 'pdf/Read Pledge(English).pdf', 1, '2020-10-30 11:20:28', 'A', '', '0000-00-00 00:00:00'),
(29, 'college day celebration', 'pdf/College day Invitation 1-converted.pdf', 1, '2021-02-23 10:22:02', 'A', '', '0000-00-00 00:00:00'),
(30, 'annual sport meet', 'pdf/sportmeet.pdf', 1, '2021-02-24 10:21:18', 'A', '', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`CategoryID`);

--
-- Indexes for table `category_gallery`
--
ALTER TABLE `category_gallery`
  ADD PRIMARY KEY (`CategoryGalleryID`);

--
-- Indexes for table `dynamic_page`
--
ALTER TABLE `dynamic_page`
  ADD PRIMARY KEY (`DynamicPageID`);

--
-- Indexes for table `news_events`
--
ALTER TABLE `news_events`
  ADD PRIMARY KEY (`NewsEventsID`);

--
-- Indexes for table `pdf_upload`
--
ALTER TABLE `pdf_upload`
  ADD PRIMARY KEY (`PDFUploadID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `CategoryID` bigint(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category_gallery`
--
ALTER TABLE `category_gallery`
  MODIFY `CategoryGalleryID` bigint(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `dynamic_page`
--
ALTER TABLE `dynamic_page`
  MODIFY `DynamicPageID` bigint(250) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `news_events`
--
ALTER TABLE `news_events`
  MODIFY `NewsEventsID` bigint(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `pdf_upload`
--
ALTER TABLE `pdf_upload`
  MODIFY `PDFUploadID` bigint(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
