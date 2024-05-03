-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:4306
-- Generation Time: May 03, 2024 at 08:42 AM
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
-- Database: `ges_crm`
--

-- --------------------------------------------------------

--
-- Table structure for table `activityscheduler`
--

CREATE TABLE `activityscheduler` (
  `ActivityID` int(11) NOT NULL,
  `TypeOfActivity` varchar(255) DEFAULT NULL,
  `Project` varchar(255) DEFAULT NULL,
  `AssignedTo` varchar(255) DEFAULT NULL,
  `Priority` varchar(50) DEFAULT NULL,
  `Status` varchar(50) DEFAULT NULL,
  `StartDate` date DEFAULT NULL,
  `EndDate` date DEFAULT NULL,
  `description` text DEFAULT NULL,
  `links` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `activityscheduler`
--

INSERT INTO `activityscheduler` (`ActivityID`, `TypeOfActivity`, `Project`, `AssignedTo`, `Priority`, `Status`, `StartDate`, `EndDate`, `description`, `links`) VALUES
(5, 'Meeting ', 'HVAC', 'Sabarinathan Pachaiyappan', 'High', 'Pending', '2023-10-18', '2023-10-18', NULL, NULL),
(7, 'Meeting ', 'New Project ', 'Vijay anand M', 'High', 'Pending', '2023-10-21', '2023-10-21', NULL, NULL),
(8, 'Proposal ', 'Ace Metro ', 'Vijay anand M', 'High', 'Completed', '2023-10-23', '2023-10-23', 'CRM Software ', ''),
(9, 'Proposal ', 'Sonashi', 'Vijay anand M', 'High', 'Completed', '2023-10-23', '2023-10-23', '', ''),
(10, 'Meeting ', 'Hamara Mitti ', 'Vijay anand M', 'Medium', 'Pending', '2023-10-20', '2023-12-22', 'Need to follow up ', ''),
(11, 'Estimation ', 'Akk Line Media - ZAM ZAM ', 'Vijay anand M', 'High', 'Completed', '2023-10-19', '0000-00-00', NULL, NULL),
(12, 'Meeting', 'Fedelta CRM', 'Kumara Guru Raj', 'High', 'Pending', '2023-10-21', '0000-00-00', NULL, NULL),
(13, 'Task ', 'GES', 'sri priya', 'Medium', 'Pending', '2023-10-21', '2023-10-25', NULL, NULL),
(14, 'Task ', 'getfarms', 'Manikandan T', 'High', 'Pending', '2023-10-20', '2023-10-25', NULL, NULL),
(15, 'Estimation', 'Agni Steels', 'Manikandan T', 'High', 'Pending', '2023-10-24', '2023-10-25', NULL, NULL),
(16, 'Meeting', 'Hemdeep shirts', 'Manikandan T', 'High', 'Pending', '2023-10-25', '0000-00-00', NULL, NULL),
(17, 'Follow up ', '', 'Sabarinathan Pachaiyappan', 'Medium', 'In Progress', '2023-10-26', '2023-10-27', NULL, NULL),
(18, 'Task ', 'GES CRM', 'Kumara Guru Raj', 'Medium', 'Pending', '2023-10-26', '2023-10-26', NULL, NULL),
(19, 'Meeting', '', 'Vijay anand M', 'High', 'Pending', '2023-10-26', '0000-00-00', NULL, NULL),
(20, 'Estimation', '', 'Manikandan T', 'High', 'Pending', '2023-10-27', '2023-10-28', NULL, NULL),
(21, 'Estimation', 'Hemdeep shirts', 'Manikandan T', 'High', 'Pending', '2023-10-27', '2023-10-28', NULL, NULL),
(22, 'Estimation', 'Agni Steels', 'Manikandan T', 'Medium', 'Pending', '2023-10-27', '2023-10-28', NULL, NULL),
(23, 'Issue', 'Hemdeep shirts', 'Manikandan T', 'High', 'Pending', '2023-10-26', '2023-10-27', NULL, NULL),
(24, 'Task ', 'getfarms', 'Manikandan T', 'High', 'Pending', '2023-10-28', '2023-10-29', NULL, NULL),
(25, 'Meeting', 'Fedelta CRM', '', '', '', '0000-00-00', '0000-00-00', NULL, NULL),
(26, '', '', '', '', '', '0000-00-00', '0000-00-00', NULL, NULL),
(27, 'Meeting', 'Lead ', 'Vijay anand M', 'High', 'Pending', '2023-11-07', '0000-00-00', NULL, NULL),
(29, 'Estimation', 'Lead ', 'Manikandan T', 'High', 'Pending', '2023-11-09', '2023-11-10', 'Hi Mani , Kindly check and update the Sonashi project requirements. i have shared the excel by mail. They need in whatsapp ', ''),
(30, 'Meeting', 'Lead ', 'Vijay anand M', 'High', 'Pending', '2023-11-13', '0000-00-00', 'Meeting for Fortune UPVC changes and Rebar project discussion', ''),
(31, 'Issue', 'GES', 'sri priya', 'Medium', 'Pending', '2023-11-15', '2023-11-16', '1. Add Client Logos in home page \r\nhttp://gesdigit.com/index.html#Rotateimg\r\n2. Change all the headings Like \"Our Services\" except projects and contact us \r\nhttp://gesdigit.com/index.html#Rotateimg', 'https://drive.google.com/drive/u/1/folders/1dC_c_rePMPEeZcxIDO2qzmF3Ydg4IMGg'),
(33, 'Meeting', 'SSDAC', 'Vijay anand M', 'High', 'Completed', '2023-11-16', '2023-11-17', '', ''),
(34, 'Estimation', 'Lead ', 'Kumara Guru Raj', 'High', 'Completed', '2023-11-16', '2023-11-17', 'Kindly estimate the time required for the changes mentioned in the document of the following website \r\nhttps://sanacademy.edu.in/', 'https://docs.google.com/spreadsheets/d/11H7QS6M1Cmv2qZEmtkwEWTxHzPDSC3hHFfPVtwonzAo/edit#gid=0'),
(35, 'Task ', 'kiscol grands', 'Manikandan T', 'High', 'Pending', '2023-11-17', '2023-11-17', 'Kindly update the given code in kiscol TMT \r\nDetails are given in whatsapp ', ''),
(36, 'Task ', 'Lead ', 'Sabarinathan Pachaiyappan', 'Medium', 'Pending', '2023-11-16', '2023-11-21', 'Kindly follow up with the Cards we discussed today and schedule for a meeting ', ''),
(37, 'Issue', 'Lead ', 'Vijay anand M', 'High', 'Pending', '2023-11-18', '0000-00-00', '', 'https://drive.google.com/drive/u/1/folders/1dC_c_rePMPEeZcxIDO2qzmF3Ydg4IMGg'),
(38, 'Estimation', 'Lead ', 'Manikandan T', 'High', 'Pending', '2023-11-18', '2023-11-20', 'Hi Mani \r\nKindly send me the inputs required for HVAC CRM Application ', ''),
(39, 'Meeting', 'Lead ', 'Manikandan T', 'High', 'Completed', '2023-11-22', '2023-11-23', 'New Project on library books management using QR CODE Scanner ', ''),
(40, 'Meeting', 'Lead ', 'Vijay anand M', 'High', 'Pending', '2023-11-30', '0000-00-00', 'To Meet Mr. Prakash on Mogappair by 11.30 AM Lions Chapter ', ''),
(41, 'Task ', 'Lead ', 'Manikandan T', 'High', 'Pending', '2023-11-28', '2023-12-01', 'Hi Mani \r\nKindly plan for a demo for Sonashi india on Friday ', ''),
(42, 'Issue', 'Lead ', 'Manikandan T', 'High', 'Pending', '2023-11-28', '2023-11-29', 'Hi Mani \r\nKindly fix the issues of websites i have sent through mail. \r\nhttps://snowworld.sg/ is not working  ', 'https://snowworld.sg/'),
(43, 'Task ', 'Hemdeep shirts', 'Manikandan T', 'High', 'Pending', '2023-11-28', '2023-11-30', '1) Hemdeep needs a change in colour of the recently added banner \r\n2) needs removal of content provided in the screenshot ', ''),
(44, 'Issue', 'akk line media ', 'Vijay anand M', 'High', 'In Progress', '2023-12-04', '2023-12-06', 'FIx issue fixing of websites \r\nhttps://mahalashmigroups.com/service-1-2/', 'https://mahalashmigroups.com/service-1-2/'),
(45, 'Estimation', 'Lead ', 'Manikandan T', 'Medium', 'Pending', '2023-12-11', '2023-12-12', 'Need an E Commerce Website for textile with Payment , Shipping and Whatsapp Integration ', ''),
(46, 'Task ', 'GES CRM', 'Kumara Guru Raj', 'High', 'Pending', '2023-12-11', '2023-12-12', 'Edit and Update not working in all the menus like Leads , Deal and activity in CRM ', ''),
(47, 'Task ', 'GES', 'sri priya', 'Medium', 'In Progress', '2023-12-11', '2023-12-14', 'Develop a new Training Page for GES , Content already shared in mail ', ''),
(48, 'Demo', 'Fedelta CRM', 'Kumara Guru Raj', 'Medium', 'Completed', '2023-12-30', '2023-12-30', 'sd', 'testing'),
(49, 'Requirements', 'Lead ', 'Vijay anand M', 'High', 'Pending', '2023-12-15', '2023-12-16', 'Get inputs from Sunrise Ecosystems For  Estimation ', ''),
(50, 'Meeting', 'Lead ', 'Vijay anand M', 'High', 'Pending', '2023-12-18', '0000-00-00', 'To meet Architect Gopi Chandran for website development ', ''),
(51, 'Follow up ', 'sekaass.com', 'Vijay anand M', 'High', 'Pending', '2023-12-15', '2023-12-18', 'Get Advance for Website project ', ''),
(52, 'Follow up ', 'Vishwak Pharma', 'Vijay anand M', 'High', 'In Progress', '2023-12-15', '2023-12-18', 'Get advance from Viswak Pharma ', ''),
(53, 'Meeting', 'MWC', 'Vijay anand M', 'High', 'In Progress', '2023-12-22', '0000-00-00', '', ''),
(54, 'Meeting', 'Fedelta CRM', 'Kumara Guru Raj', 'High', 'Pending', '2023-12-22', '0000-00-00', '', ''),
(55, 'Meeting', 'GES', 'Vijay anand M', 'High', 'In Progress', '2024-01-02', '0000-00-00', 'Meeting with Karthik', ''),
(56, 'Task ', 'SSDAC', 'Manikandan T', 'High', 'Pending', '2024-01-03', '2024-01-05', '', ''),
(57, 'Follow up ', 'Fedelta CRM', 'Vijay anand M', 'High', 'Pending', '2024-01-03', '2024-01-10', '', ''),
(58, 'Task ', 'MWC', 'Vijay anand M', '', '', '0000-00-00', '0000-00-00', '', ''),
(59, 'Internal Activity ', 'Internal Activity ', 'Karthick S', 'Medium', 'Completed', '2024-01-03', '0000-00-00', 'Hi Karthik\r\nKindly Check the below mail account \r\n\r\nGO DADDY MAIL:\r\nUsername: Sales@gesdigit.com\r\nPassword: GesSales@123\r\n	\r\n', 'https://sso.godaddy.com/?realm=pass&app=ox'),
(60, 'Meeting', 'Fedelta CRM', 'Vijay anand M', 'High', 'Pending', '2024-01-04', '0000-00-00', '', ''),
(61, 'Task ', 'SSDAC', 'Vijay anand M', 'High', 'Pending', '2024-01-04', '0000-00-00', '', ''),
(62, 'Estimation', 'Lead ', 'Vijay anand M', 'High', 'Pending', '2024-01-04', '0000-00-00', '', ''),
(63, 'Estimation', 'Lead ', 'Vijay anand M', 'High', 'Pending', '2024-01-05', '2024-01-05', '', ''),
(64, 'Meeting', 'Lead ', 'Vijay anand M', 'High', 'Pending', '2024-01-05', '0000-00-00', 'meeting with Ilayaraja ', ''),
(65, 'Task ', 'Lead ', 'Karthick S', 'High', 'Completed', '2024-01-08', '2024-01-10', 'Dear Karthik \r\nCollect all the Data from the Link sent to you for BNI Chapter and create a google Sheet. Share the google sheet to sales@gesdigit.com ', 'https://bnigtaplus.ca/en-CA/advancedchaptersearch'),
(66, 'Follow up ', 'SSDAC', 'Vijay anand M', 'High', 'Pending', '2024-01-13', '2024-01-14', '', ''),
(67, 'Task ', 'Fedelta CRM', 'Vijay anand M', 'High', 'Pending', '2024-01-22', '2024-01-25', '', ''),
(68, 'Task ', 'GES', 'Vijay anand M', 'High', 'Pending', '2024-01-23', '2024-01-24', 'Need to meet rohan ', ''),
(69, 'Meeting', 'Lead ', 'Karthick S', 'High', 'Pending', '2024-01-31', '2024-01-31', 'test ', 'test '),
(70, 'Task ', 'Fedelta CRM', 'Kumara Guru Raj', 'High', 'Pending', '2024-02-15', '2024-02-20', 'HI Kumaraguru \r\nAs We discussed , Kindly Update the quotations part in Fedelta CRM ', ''),
(71, 'Task ', 'Alpine Coach tree ', 'Manikandan T', 'High', 'Pending', '2024-02-16', '2024-02-17', '', 'https://akklinemedia.com/demo/wp-admin/customize.php'),
(72, 'Task ', 'V Connect', '', 'High', 'Pending', '2024-02-21', '2024-02-21', '', ''),
(73, 'Task ', 'Fedelta CRM', 'Kumara Guru Raj', 'High', 'Pending', '2024-02-21', '2024-02-22', '', ''),
(74, 'Task ', 'V Connect', 'sri priya', 'Medium', 'Pending', '2024-02-24', '2024-02-24', '', ''),
(75, 'Task ', 'Fedelta CRM', 'Kumara Guru Raj', 'High', 'In Progress', '2024-02-24', '2024-02-26', '', ''),
(76, 'Task ', 'MWC', 'Vijay anand M', 'High', 'Pending', '2024-02-24', '2024-02-27', 'correct the changes ', ''),
(77, 'Requirements', 'Lead ', 'Manikandan T', 'Medium', 'Pending', '2024-02-26', '2024-02-29', 'Nexus CRM \r\n\r\n•	BDM Login , registration \r\n•	Dashboard \r\n•	Vendor Management \r\n•	Reports\r\no	Call wise customer wise \r\no	BDM wise \r\no	Employee Wise \r\no	Date filter \r\n•	Add attachment – Title ,Description and Images\r\n•	Data Base – Assign \r\n\r\nVendor Login : \r\nU: TMS113\r\nP : 260812\r\n\r\nEmployee Login :\r\nU: dlc100\r\nP: 260812\r\n\r\n', 'https://nexuscrm.in/login'),
(78, 'Task ', 'MWC', 'sri priya', 'Medium', 'Pending', '2024-02-28', '2024-02-29', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `campaign_source`
--

CREATE TABLE `campaign_source` (
  `id` int(11) NOT NULL,
  `source_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `campaign_source`
--

INSERT INTO `campaign_source` (`id`, `source_name`) VALUES
(1, 'Whatsapp '),
(2, 'BNI '),
(3, 'Digital Marketing '),
(4, 'Existing Clients ');

-- --------------------------------------------------------

--
-- Table structure for table `conversion_rate`
--

CREATE TABLE `conversion_rate` (
  `id` int(11) NOT NULL,
  `rate` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `conversion_rate`
--

INSERT INTO `conversion_rate` (`id`, `rate`) VALUES
(1, 10.00),
(2, 30.00),
(3, 40.00),
(4, 60.00),
(5, 80.00),
(6, 100.00),
(7, 0.00);

-- --------------------------------------------------------

--
-- Table structure for table `customertype`
--

CREATE TABLE `customertype` (
  `id` int(11) NOT NULL,
  `CustomerType` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `customertype`
--

INSERT INTO `customertype` (`id`, `CustomerType`) VALUES
(4, 'Individual '),
(5, 'Corporate ');

-- --------------------------------------------------------

--
-- Table structure for table `it_services`
--

CREATE TABLE `it_services` (
  `IT_services_id` int(11) NOT NULL,
  `Deal_Owner` varchar(255) DEFAULT NULL,
  `Project_Category` varchar(255) DEFAULT NULL,
  `Services_Required` varchar(255) DEFAULT NULL,
  `Company_Name` varchar(255) DEFAULT NULL,
  `Type_Of_Business` varchar(255) DEFAULT NULL,
  `Next_Step` varchar(255) DEFAULT NULL,
  `Contact_Number` varchar(20) DEFAULT NULL,
  `Project_Value` decimal(18,2) DEFAULT NULL,
  `Closing_Date` date DEFAULT NULL,
  `Stage` varchar(255) DEFAULT NULL,
  `Conversion_Rate` decimal(5,2) DEFAULT NULL,
  `Campaign_Source` varchar(255) DEFAULT NULL,
  `Contact_Name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `it_services`
--

INSERT INTO `it_services` (`IT_services_id`, `Deal_Owner`, `Project_Category`, `Services_Required`, `Company_Name`, `Type_Of_Business`, `Next_Step`, `Contact_Number`, `Project_Value`, `Closing_Date`, `Stage`, `Conversion_Rate`, `Campaign_Source`, `Contact_Name`) VALUES
(20, 'Vijay anand M', 'Web Application ', 'CRM ', 'Shresthan Infra', 'New Business', 'Deal Closed ', '8939838171', 85000.00, '2023-08-31', 'Requirements ', 100.00, 'BNI ', 'Siva Subramanian '),
(21, 'Vijay anand M', 'Web Application ', 'CRM ', 'Maruti trips', 'New Business', 'Technical Discussion ', '9176221505', 60000.00, '2023-08-22', 'Requirements ', 40.00, 'BNI ', 'Tharachand'),
(22, 'Vijay anand M', 'Web Application ', 'CRM ', 'Tecminion ', 'New Business', 'Requirements Gathering ', '8754484818', 80000.00, '2023-08-25', 'Qualification ', 60.00, 'BNI ', 'Divya '),
(23, 'Vijay anand M', 'Web Application ', 'CRM ', 'akkline media ', 'New Business', 'Proposal ', '9841663161', 80000.00, '2023-08-23', 'Proposal ', 40.00, 'BNI ', 'Dinesh '),
(24, 'Vijay anand M', 'Website ', 'E Commerce Website ', 'Naseem Al Sabah and RAZ prime Gen.Trading LLC', 'New Business', 'Proposal ', '+971 52 786 0635', 80000.00, '2023-09-26', 'Proposal ', 60.00, 'BNI ', 'Meeragani'),
(25, 'Vijay anand M', 'Web Application ', 'CRM ', 'Bros Bullet ', 'New Business', 'Get Advance ', '9677881606', 50000.00, '2023-09-30', 'Negotiation ', 60.00, 'BNI ', 'Ranjith '),
(26, 'Vijay anand M', 'Web Application ', 'CRM ', 'Sonashi ', 'New Business', 'Project Cost Estimation ', '+91 89399 98646', 40000.00, '2023-10-25', 'Requirements ', 40.00, 'BNI ', 'Kapil '),
(28, 'admin admin', 'Website ', 'Wordpress Website ', 'Impeccable Infrastructure Solutions ', '', 'Project Cost Estimation ', '9840547676', 0.00, '2023-10-28', 'Requirements ', 60.00, 'Digital Marketing ', 'Dinesh '),
(30, 'admin admin', 'Website ', 'Wordpress Website ', 'Fortune rebar', 'New Business', 'Requirements Gathering ', '90032 69303', 15000.00, '2023-11-20', 'Requirements ', 30.00, 'BNI ', 'Gokul '),
(31, 'admin admin', 'Mobile Application ', 'Hybrid Application', 'Ace Metro Pvt Ltd ', 'New Business', 'Requirements Gathering ', '9841972227', 100000.00, '2023-11-18', 'Qualification ', 30.00, 'BNI ', 'Thyagarajan '),
(32, 'admin admin', 'Website ', 'Wordpress Website ', 'akkline media ', '', 'Get Advance ', '9841663161', 15000.00, '2023-11-16', 'Deal Won ', 100.00, 'BNI ', 'Dinesh '),
(33, 'admin admin', 'Website ', 'Wordpress Website ', 'akkline media ', '', 'Get Advance ', '9841663161', 15000.00, '2023-11-14', 'Deal Won ', 100.00, 'BNI ', 'Dinesh '),
(34, 'admin admin', 'Web Application ', 'CRM ', 'Sunrise Ecosystems ', 'New Business', 'Requirements Gathering ', '88701 61055', 50000.00, '2023-11-20', 'Requirements ', 30.00, 'BNI ', 'Ashok Kumar'),
(35, 'admin admin', 'Website ', 'Wordpress Website ', 'millesberry', 'New Business', 'Get Advance ', '9360682540', 15000.00, '2023-11-24', 'Deal Won ', 100.00, 'BNI ', 'Narasimharaju'),
(36, 'admin admin', 'Web Application ', 'CRM ', 'Tiruveni Finance ', 'New Business', 'Technical Discussion ', '7786916143', 25000.00, '2023-11-22', 'Proposal ', 40.00, 'BNI ', 'Sachin Singh Yadav'),
(37, 'admin admin', 'Web Application ', 'CRM ', 'akkline media ', 'New Business', 'Project Cost Estimation ', '9841663161', 25000.00, '2023-12-15', 'Proposal ', 40.00, 'BNI ', 'Dinesh '),
(38, 'admin admin', 'Web Application ', 'CRM ', 'Tecminion ', 'New Business', 'Project Cost Estimation ', '8754484818', 80000.00, '2023-12-12', 'Proposal ', 30.00, 'BNI ', 'Divya '),
(40, 'admin admin', 'Website ', 'Website issue Fixing ', 'akkline media ', 'Existing Business', 'Get Advance ', '9841663161', 3000.00, '0000-00-00', 'Deal Won ', 100.00, 'BNI ', 'Dinesh '),
(41, 'admin admin', 'Website ', 'Website issue Fixing ', 'akkline media ', 'Existing Business', 'Get Advance ', '9841663161', 5000.00, '2023-12-25', 'Deal Won ', 100.00, 'BNI ', 'Dinesh '),
(42, 'admin admin', 'Website ', 'Wordpress Website ', 'akkline media ', 'New Business', 'Get Advance ', '9841663161', 8000.00, '2023-12-31', 'Deal Won ', 100.00, 'BNI ', 'Dinesh '),
(43, 'admin admin', 'Website ', 'Website issue Fixing ', 'akkline media ', 'Existing Business', 'Get Advance ', '9841663161', 5000.00, '2023-12-21', 'Deal Won ', 100.00, 'BNI ', 'Dinesh '),
(44, 'admin admin', 'Website ', 'Website issue Fixing ', 'akkline media ', 'New Business', 'Get Advance ', '9841663161', 3000.00, '2023-12-25', 'Deal Won ', 100.00, 'BNI ', 'Dinesh '),
(45, 'admin admin', 'Website ', 'Website issue Fixing ', 'akkline media ', 'New Business', 'Project Cost Estimation ', '9841663161', 6000.00, '2024-01-05', 'Proposal ', 100.00, 'BNI ', 'Dinesh '),
(46, 'admin admin', 'Web Application ', 'CRM ', 'Sekaran Associates ', 'New Business', 'Requirements Gathering ', '9444358882', 50000.00, '2024-01-13', 'Requirements ', 30.00, 'BNI ', 'Raghu Kumar '),
(47, 'admin admin', 'Website ', 'Basic HTML Website ', 'Media Bazaar ', 'New Business', 'Get Advance ', '87544 07333', 10000.00, '2024-01-12', 'Deal Won ', 100.00, 'BNI ', 'James '),
(48, 'admin admin', 'Mobile Application ', 'Hybrid Application', 'Media Bazaar ', 'New Business', 'Requirements Gathering ', '87544 07333', 100000.00, '2024-01-20', 'Qualification ', 10.00, 'BNI ', 'James '),
(49, 'admin admin', 'Mobile Application ', 'CRM ', 'Lavender Beauty Saloon ', '', 'Requirements Gathering ', '9884061902', 40000.00, '2024-01-27', 'Qualification ', 10.00, 'BNI ', 'Niranjana '),
(50, 'admin admin', 'Website ', 'Wordpress Website ', 'akkline media ', 'New Business', 'Get Advance ', '9841663161', 15000.00, '2024-02-10', 'Deal Won ', 100.00, 'BNI ', 'Dinesh ');

-- --------------------------------------------------------

--
-- Table structure for table `it_trainings`
--

CREATE TABLE `it_trainings` (
  `id` int(11) NOT NULL,
  `DealOwner` varchar(50) DEFAULT NULL,
  `CustomerType` varchar(50) DEFAULT NULL,
  `TrainingCategory` varchar(50) DEFAULT NULL,
  `CoursesRequired` varchar(100) DEFAULT NULL,
  `NumberOfParticipants` int(11) DEFAULT NULL,
  `Concessions` varchar(50) DEFAULT NULL,
  `CompanyName` varchar(100) DEFAULT NULL,
  `TypeOfBusiness` varchar(50) DEFAULT NULL,
  `NextStep` varchar(100) DEFAULT NULL,
  `ContactName` varchar(50) DEFAULT NULL,
  `CourseValue` decimal(10,2) DEFAULT NULL,
  `ClosingDate` date DEFAULT NULL,
  `Stage` varchar(50) DEFAULT NULL,
  `ConversionRate` decimal(5,2) DEFAULT NULL,
  `CampaignSource` varchar(50) DEFAULT NULL,
  `Contact_Name` varchar(255) DEFAULT 'DefaultContactName'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `it_trainings`
--

INSERT INTO `it_trainings` (`id`, `DealOwner`, `CustomerType`, `TrainingCategory`, `CoursesRequired`, `NumberOfParticipants`, `Concessions`, `CompanyName`, `TypeOfBusiness`, `NextStep`, `ContactName`, `CourseValue`, `ClosingDate`, `Stage`, `ConversionRate`, `CampaignSource`, `Contact_Name`) VALUES
(4, 'Vijay anand M', 'Individual ', 'Software Development ', 'HTML ', 1, '10', 'individual ', 'New Business', '', '8608533430', 40000.00, '2023-09-15', 'Negotiation ', 60.00, '', 'Sri Priya ');

-- --------------------------------------------------------

--
-- Table structure for table `lead`
--

CREATE TABLE `lead` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `company` varchar(255) DEFAULT NULL,
  `contact_no` varchar(20) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `gst_no` varchar(50) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `follow_up_date` date DEFAULT NULL,
  `industry` varchar(255) DEFAULT NULL,
  `l_source` varchar(255) DEFAULT 'default_value',
  `l_status` varchar(50) DEFAULT 'default_value',
  `ServicesRequired` varchar(255) NOT NULL DEFAULT 'DefaultService',
  `TypeOfCustomer` varchar(255) NOT NULL DEFAULT 'DefaultType',
  `line_of_business` varchar(255) DEFAULT 'DefaultLOB'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lead`
--

INSERT INTO `lead` (`id`, `name`, `company`, `contact_no`, `email`, `address`, `gst_no`, `location`, `country`, `follow_up_date`, `industry`, `l_source`, `l_status`, `ServicesRequired`, `TypeOfCustomer`, `line_of_business`) VALUES
(13, 'Dinesh ', 'Impeccable Infrastructure Solutions ', '9840547676', 'impeccableinfrasolution@gmail.com', 'Triplicane', '', 'Chennai', 'India', '2023-08-20', 'Interior', 'BNI Crown ', 'FollowUp', 'IT Services ', 'Organization', 'CRM'),
(14, 'Ranjith ', 'Bros Bullet ', '9677881606', 'brosbullet@gmail.com', 'Maraimalai Nagar ', 'hhjjjhjvvgvghv gh', 'Chennai', 'India', '2023-07-21', 'Automobile Service ', 'BNI Crown ', 'FollowUp', 'IT Services ', 'Organization', 'CRM'),
(15, 'Mr. Sai Sundhar ', 'Yoga Academy', '9841282836', 'vijay.anand189@gmail.com', 'Anna Nagar', '', 'Chennai', 'India', '2023-08-03', 'Yoga Academy', 'BNI Crown ', 'No Response', 'IT Services ', 'Individual', 'Website'),
(16, 'Vijay Sairam ', 'ILRJ', '+65 93710695', 'iloveremotejobs.com@gmail.com', 'Singapore ', 'hhjjjhjvvgvghv gh', 'Singapore ', 'Singapore', '2023-08-05', 'Software ', 'Own network', 'No Response', 'IT Services ', 'Individual', 'Issue Fixing '),
(17, 'Raja Mohammad ', 'E Trichy Infotech ', '9994599592', 'vijay.anand189@gmail.com', 'Trichy ', 'hhjjjhjvvgvghv gh', 'Trichy ', 'India', '2023-08-05', 'IT', 'BNI Crown ', 'Out of scope', 'IT Services ', 'Organization', 'Custom Website'),
(18, 'Venkatesh ', 'Cocomittai ', '8056025660', 'stuholidays@gmail.com', 'Anna Nagar ', 'hhjjjhjvvgvghv gh', 'Chennai ', 'India', '2023-08-07', 'Food ', 'BNI Crown ', 'No Response', 'IT Services ', 'Organization', 'E Commerce Website '),
(19, 'Raghu Kumar ', 'Sekaran Associates ', '9444358882', 'raghukumarca@gmail.com', 'T Nagar ', 'hhjjjhjvvgvghv gh', 'Chennai', 'India', '2023-08-10', 'Chartered Accountants ', 'BNI Crown ', 'FollowUp', 'IT Services ', 'Organization', 'Website'),
(20, 'Arun Thomas ', 'Touch n Chill ', '9043000012', 'arun@touchnchill.com', 'Vada Perumbakkam ', '', 'Chennai', 'India', '2023-08-31', 'HVAC', 'BNI Crown ', 'FollowUp', 'IT Services ', 'Organization', 'Website'),
(21, 'Christopher ', 'Marvin Ceramics ', '9940326196', 'marvinceramiccentre@gmail.com', 'Kodungaiyur ', 'hhjjjhjvvgvghv gh', 'Chennai', 'India', '2023-08-30', 'Tiles & Marbles ', 'BNI Crown ', 'FollowUp', 'IT Services ', 'Organization', 'CRM'),
(22, 'Thyagarajan ', 'Ace Metro Pvt Ltd ', '9841972227', 'vijay.anand189@gmail.com', 'Mogappair West ', 'hhjjjhjvvgvghv gh', 'Chennai', 'India', '2023-08-07', 'HVAC', 'BNI Crown ', 'FollowUp', 'IT Services ', 'Organization', 'Mobile Application'),
(23, 'Ashok Kumar', 'Sunrise Ecosystems ', '88701 61055', 'vijay.anand189@gmail.com', 'Maduravayol ', 'hhjjjhjvvgvghv gh', 'Chennai', 'India', '2023-08-05', 'HVAC', 'BNI Crown ', 'FollowUp', 'IT Services ', 'Organization', 'CRM'),
(24, 'Niranjana ', 'Lavender Beauty Saloon ', '9884061902', 'niranjana.bhavani@gmail.com', 'Plot No 2 , 8th Cross Street', 'hhjjjhjvvgvghv gh', 'Chennai', 'India', '2023-08-15', 'Saloon ', 'BNI Crown ', 'FollowUp', 'IT Services ', 'Organization', 'CRM'),
(25, 'Saranya ', 'LINE UP ', '9655447368', 'vijay.anand189@gmail.com', 'Plot No 2 , 8th Cross Street', 'hhjjjhjvvgvghv gh', 'Chennai', 'India', '2023-08-07', 'IT', 'BNI Crown ', 'No Response', 'IT Services ', 'Individual', 'Custom Website'),
(26, 'Tharachand', 'Maruti trips', '9176221505', 'marutitravels.ch29@gmail.com', 'Maruti Trips , Aminjikarai ,Chennai ', '', 'Chennai', 'India', '2023-08-19', 'Travel ', 'BNI Crown ', 'No Response', 'IT Services ', 'Organization', 'Custom Website'),
(27, 'Siva Subramanian ', 'Shresthan Infra Pvt Ltd  ', '8939838171', 'vijay.anand189@gmail.com', 'Mogappair ', '', 'Chennai', 'India', '2023-08-19', 'Construction', 'BNI Crown ', 'Interested', 'IT Services ', 'Organization', 'CRM'),
(28, 'Divya ', 'Tecminion ', '8754484818', 'Designs.techminion@gmail.com', 'Velachery ', '', 'Chennai', 'India', '2023-08-21', 'Real Estate ', 'BNI Crown ', 'Interested', 'IT Services ', 'Organization', 'Custom Website'),
(29, 'Dinesh ', 'akkline media ', '9841663161', 'akklinemedia@gmail.com', 'Tambaram ', '', 'Chennai', 'India', '2023-08-18', 'Real Estate ', 'BNI', 'Interested', 'IT Services ', 'Organization', 'Issue Fixing '),
(30, 'Gopal ', 'Hostel ', '9042956799', 'vijay.anand189@gmail.com', 'Plot No 2 , 8th Cross Street', '', 'Chennai', 'India', '2023-09-09', 'Hotel ', 'BNI Crown ', 'Interested', 'IT Services ', 'Organization', 'Custom Website'),
(31, 'Lakshmi ', 'Viswak Pharma ', '9840705960', 'vijay.anand189@gmail.com', 'Plot No 2 , 8th Cross Street', '', 'Chennai', 'India', '2023-09-08', 'Pharma ', 'BNI Crown ', 'FollowUp', 'IT Services ', 'Organization', 'Website'),
(32, 'Sri Priya ', 'individual ', '8608533430', 'vijay.anand189@gmail.com', 'Plot No 2 , 8th Cross Street', 'nil', 'Chennai', 'India', '2023-09-12', 'Training ', 'Own network', 'Interested', 'Trainings', 'Individual', 'Web Development Training '),
(34, 'Meeragani', 'Naseem Al Sabah and RAZ prime Gen.Trading LLC', '+971527860635', 'kungani@gmail.com', 'Dubai ', '', 'Dubai ', 'UAE', '2023-09-22', 'Retail ', 'BNI Crown ', 'Interested', 'IT Services ', 'Organization', ''),
(35, 'Kapil ', 'Sonashi ', '8939998646', 'vijay.anand189@gmail.com', 'Floor, F(8, Kandaah\'s Chamber 6th, 115, Nelson Manickam Rd, Aminjikarai, \r\nChennai - 600029', '', 'Chennai ', 'India', '2023-10-13', 'Electrical Appliances ', 'BNI Crown ', 'Interested', 'IT Services ', 'Organization', 'CRM'),
(36, 'Dr. Bharat Guru ', 'Billroth Hospitals ', '8861868323', 'vijay.anand189@gmail.com', 'Plot No 2 , 8th Cross Street', '', 'Chennai', 'India', '2023-10-18', 'HealthCare ', 'BNI Crown ', 'Interested', 'IT Services ', 'Individual', 'DefaultLOB'),
(37, 'Vijay Anand ', 'GES', '9003290339', 'vijay.anand189@gmail.com', 'Plot No 2 , 8th Cross Street', '', 'Bangalore', 'India', '2023-10-18', 'IT', 'Own network', 'Interested', 'IT Services ', 'Organization', 'DefaultLOB'),
(38, 'Srinivas Rajaram ', 'Hamari Mitti ', '9494715150', 'hamarimitti.cso@gmail.com', 'Hamari Mitti Society & Vidyalay Campus. Devaipalli Road, Vill: Krishnajiwadi, Mdl:Tadwai, Dist: Kamareddy, Telangana, Bharat -503111.', '', 'Telangana ', 'India', '2023-10-18', 'NGO', 'Other Sources', 'Interested', 'Trainings', 'Organization', 'DefaultLOB'),
(39, 'Thirumalai Kumar ', 'GES', '9003290339', 'vijay.anand189@gmail.com', 'Plot No 2 , 8th Cross Street', '', 'Kanchipuram ', 'India', '2023-10-18', 'Machine Supplier ', 'Own network', 'Interested', 'IT Services ', 'Organization', 'Website'),
(41, 'Pankaj Sinha', 'GES', '9841282836', 'vijay.anand189@gmail.com', 'Plot No 2 , 8th Cross Street', '', 'Bangalore', 'India', '2023-10-28', 'Environment ', 'Own network', 'Interested', 'IT Services ', 'Organization', 'Website'),
(44, 'Sowmiya Narayan', 'Tescribe', '7397341611', 'vijay.anand189@gmail.com', 'Plot No 2 , 8th Cross Street', '', 'Chennai ', 'India', '2023-11-08', 'Medical Research', 'BNI', 'Interested', 'IT Services ', 'Organization', 'Custom Website'),
(45, 'Gokul ', 'Fortune rebar', '90032 69303', 'fortuneupvcwindows@gmail.com', '#17, Kumaran Nagar, \r\nMorai, \r\nChennai 600055', '', 'Chennai ', 'India', '2023-11-13', 'Construction', 'BNI Crown ', 'Interested', 'IT Services ', 'Organization', 'Website'),
(46, 'Iyappan', '', '9884072238', 'vijay.anand189@gmail.com', 'Avadi ', '', 'Chennai ', 'India', '2023-11-22', 'Library ', 'BNI', 'Interested', 'IT Services ', 'Individual', 'Custom Website'),
(47, 'Narasimharaju', 'millesberry', '9360682540', 'hello@millesberry.com', 'Chennai ', '', '', 'India', '2023-11-22', 'Personal Health Coach ', 'BNI Crown ', 'Interested', 'IT Services ', 'Individual', 'Website'),
(48, 'Sachin Singh Yadav', 'Tiruveni Finance ', '7786916143', 'vijay.anand189@gmail.com', 'Plot No 2 , 8th Cross Street', '', 'Chennai', 'India', '2023-11-22', 'Finance (Pawn Broking) ', 'BNI Crown ', 'Interested', 'IT Services ', 'Organization', 'CRM'),
(49, 'Mukesh Kumar', 'Narendra Textiles', '98848 88517', '', 'Kasi Chetty Street, Broadway ,Chennai ', '', 'Chennai', 'India', '2023-12-11', 'Textiles', 'BNI', 'Interested', 'IT Services ', 'Organization', 'E Commerce Website '),
(50, 'Karthikeyan ', 'Sincere Syndication ', '9840883576', 'karthik.partner@sinceresyndicvation.com', 'T Nagar ', '', 'Chennai', 'India', '2023-12-10', 'Manufacturing ', 'BNI', 'Interested', 'Consulting ', 'Organization', ''),
(51, 'Dhinesh ', 'India Floats Technologies ', '8072046626', 'info@indiafloats.in', 'Plot no : 9B, 4th street, Jothi Nagar, Chitlapakkam, Chennai, Tamil Nadu 600064', '', 'Chennai', 'India', '2024-01-02', 'Digital Marketing ', 'BNI', 'Interested', 'IT Services ', 'Organization', 'Mobile Application'),
(52, 'Venkateshwara ', 'Veebros Global Publications', '9840731240', 'seniorconsultant@veebrospublications.us', '3rd St, AG Block, River View Colony, Anna Nagar, Chennai, Tamil Nadu 600040', '', 'Anna Nagar ', 'India', '0000-00-00', 'IT Training ', 'BNI', 'Interested', 'Trainings', 'Organization', 'Web Development Training '),
(54, 'S. Kumaran ', 'Universe Trade Consulting Services ', '9444043253', 'utcsworld@gmail.com', 'No.206,7 th Main Road, SIDCO INDUSTRIAL ESTATE,Thirumazhisai, Chennai -600 124 ', '', 'Chennai ', 'India', '2024-01-05', 'Import Export Consultent ', 'BNI', 'Interested', 'IT Services ', 'Organization', ''),
(55, 'Venkatesh ', '', '9841037129', '', '', '', '', '', '2024-01-18', '', 'BNI', 'Interested', 'IT Services ', 'Organization', ''),
(56, 'James ', 'Media Bazaar ', '87544 07333', 'jamesmediaa@gmail.com', ' #69, Kumarappa St, Ponnangipuram, Nungambakkam, Chennai, Tamil Nadu 600034', '', 'Chennai', 'India', '2024-01-10', 'HealthCare ', 'BNI', 'Interested', 'IT Services ', 'Organization', 'CRM'),
(57, 'Rathini Daniel ', 'Church ', '9342187805', 'fptl.rathinidaniel@gmail.com', '', '', 'Chennai', 'India', '2024-01-16', '', 'Own network', 'Interested', 'IT Services ', 'Organization', 'CRM'),
(58, 'Prakash ', 'P2Clicks ', '99401 41616', 'inboxp2click@gmail.com', '', '', 'Chennai', 'India', '2024-01-24', 'Photography ', 'BNI', 'Interested', 'IT Services ', 'Organization', 'Custom Website'),
(59, 'Boopathi', 'KNB Family ', '7010816053', 'boopathi@knbfamily.com', 'Coimbatore ', '', 'Coimbatore ', 'India', '2024-01-24', 'Finance ', 'Own network', 'Interested', 'IT Services ', 'Organization', 'Website'),
(60, 'Prabakaran ', '', '', '', '', '', 'Chennai ', '', '2024-01-25', 'Flower Shop ', 'BNI Crown ', 'Interested', 'IT Services ', 'Organization', 'Website'),
(61, 'Dinesh ', '', '99447 64010', 'vijay.anand189@gmail.com', 'Ambattur', '', 'Chennai', 'India', '2024-01-25', '', 'Own network', 'Interested', 'Trainings', 'Individual', 'Power BI Training '),
(62, 'Sudakar', 'Lancor Constructions ', '98842 42807', '', 'Lancor Holdings Ltd\r\nVTN Square, 2nd Floor,\r\nNo. 58, G N Chetty road,\r\nT. Nagar, Chennai 600 017.', '', 'Chennai', 'India', '2024-01-31', 'Real Estate ', 'Own network', 'Interested', 'IT Services ', 'Organization', 'Mobile Application'),
(63, 'Karthik', '', '99411 47800', 'vijay.anand189@gmail.com', 'Arumbakkam ', '', 'Chennai', 'India', '0000-00-00', 'CCTV', 'BNI Crown ', 'Interested', 'IT Services ', 'Organization', 'E Commerce Website '),
(64, 'Aysha ', '', '80561 19553', 'vijay.anand189@gmail.com', 'OMR ', '', 'Chennai', 'India', '2024-02-01', '', 'Own network', 'Interested', 'IT Services ', 'Organization', 'Custom Website'),
(65, 'Rohit ', 'R Dental Care ', '98409 07699', '', 'Plot No 2 , 8th Cross Street', '', 'Chennai', 'India', '2024-02-14', 'HealthCare ', 'BNI', 'Interested', 'IT Services ', 'Individual', 'Website'),
(66, 'Narayanan', 'Homecontrol4u', '8754576433', 'skcs2015@gmail.com', '', '', 'Chennai', 'India ', '2024-02-19', 'Home Automation', 'Existing Clients ', 'Interested', 'IT Services ', 'Organization', 'CRM'),
(67, 'Indira Kumar ', 'Lensmen', '', '', '', '', 'Chennai', 'India ', '2024-02-20', '', 'BNI', 'Interested', 'IT Services ', 'Individual', 'E Commerce Website ');

-- --------------------------------------------------------

--
-- Table structure for table `leadservicesrequired`
--

CREATE TABLE `leadservicesrequired` (
  `id` int(11) NOT NULL,
  `ServicesRequired` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `leadservicesrequired`
--

INSERT INTO `leadservicesrequired` (`id`, `ServicesRequired`) VALUES
(1, 'IT Services '),
(2, 'Trainings'),
(3, 'Consulting ');

-- --------------------------------------------------------

--
-- Table structure for table `lead_source`
--

CREATE TABLE `lead_source` (
  `source_id` int(11) NOT NULL,
  `source_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lead_source`
--

INSERT INTO `lead_source` (`source_id`, `source_name`) VALUES
(2, 'BNI'),
(4, 'Own network'),
(5, 'Existing Clients '),
(6, 'Other Sources'),
(7, 'BNI Crown ');

-- --------------------------------------------------------

--
-- Table structure for table `lead_status`
--

CREATE TABLE `lead_status` (
  `status_id` int(11) NOT NULL,
  `status_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lead_status`
--

INSERT INTO `lead_status` (`status_id`, `status_name`) VALUES
(1, 'Interested'),
(2, 'Not Interested'),
(3, 'Not Reachable'),
(4, 'No Response'),
(5, 'FollowUp'),
(7, 'Out of scope');

-- --------------------------------------------------------

--
-- Table structure for table `line_of_business`
--

CREATE TABLE `line_of_business` (
  `id` int(11) NOT NULL,
  `line_of_business` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `line_of_business`
--

INSERT INTO `line_of_business` (`id`, `line_of_business`) VALUES
(1, 'Website'),
(2, 'E Commerce Website '),
(3, 'CRM'),
(4, 'Web Development Training '),
(5, 'Custom Website'),
(6, 'Issue Fixing '),
(7, 'Mobile Application'),
(8, 'Power BI Training ');

-- --------------------------------------------------------

--
-- Table structure for table `next_step`
--

CREATE TABLE `next_step` (
  `id` int(11) NOT NULL,
  `next_step` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `next_step`
--

INSERT INTO `next_step` (`id`, `next_step`) VALUES
(1, 'Requirements Gathering '),
(2, 'Technical Discussion '),
(3, 'Project Cost Estimation '),
(4, 'Proposal '),
(5, 'Negotiation '),
(6, 'Get Advance ');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `sku_code` varchar(50) NOT NULL,
  `warranty_period` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `sku_code`, `warranty_period`) VALUES
(1, 'Mosquito Racket Bat SMR 001', 'SMR001', '1 year'),
(2, 'Mosquito Bat SMR-010', 'SMR-010N', '6 Months'),
(3, 'Electronic Mosquito Machine SMR-002 Green', 'SMR-002-green', '1 year'),
(4, 'Electronic Mosquito Machine SMR-002 Orange', 'SMR-002 Orange', '1 year'),
(5, 'Electronic Mosquito Trap Killer SMR-012', 'SMR-012', '1 year'),
(6, 'Half Litre Kettle SKT-1005S', 'SKT1005S', '1 Year'),
(7, '1 Litre Electric Kettle SKT-1010S', 'SKT1010S', '1 Year'),
(8, '2Litre Electric Kettle SKT-1019S', 'SKT1019S', '1 Year'),
(9, '4-Inch Rechargeable Mini Fan SRF-104', 'SRF104', '1 year'),
(10, '16 Inch Rechargeable Desk Fan SRF-716 [White]', 'SRF716', '6 Month'),
(11, '12 inch Wall mount Desk Fan SF-8041 Grey', 'SF-8041', '1 Year'),
(12, 'Tower Fan SF-8035 [Red Black]', 'SF-8035', '1 Year'),
(13, '7 Inch Rechargeable Fan SRF-007', 'SRF007', '6 Month'),
(14, 'Dry Iron SDI-6018T Blue', 'SDI-6018T- Blue', '2 Year '),
(15, 'Dry Iron Box SDI-6018T Grey', 'SDI-6018T-Grey', '2 Year '),
(16, 'Heavy Iron Box SHI-6015 Gold', 'SHI-6015', '2 Year '),
(17, 'Lite Weight Dry Iron SDI-6019T', 'SDI-6019T', '2 Year '),
(18, 'Sandwich Maker SSM-879', 'SSM879', '1 Year'),
(19, 'Grill Maker SGM-879', 'SGM879', '1 Year'),
(20, 'Hand Blender SHB-182', 'SHB182', '1 year'),
(21, 'Hand Mixer Blender SMX-111', 'SMX111', '1 year'),
(22, 'Stainless Steel Bottle 500ML Set of 3 SVF-560', 'CSVF-560', 'NA'),
(23, 'Stainless Steel Bottle 500ML Set of 6 SVF-560', 'CSVF-560-1', 'NA'),
(24, 'Hair Dryer Combo', 'CSHD-30095001', 'NA'),
(25, '1 Litre Kettle & 600ML Steel Water Bottle Combo', 'SKT-1010SVF660', '1 Year'),
(26, 'Rechargeable LED Torch with Bright LED SPLT-109', 'SPLT109', '6 month'),
(27, 'Rechargeable LED Torch Light 1 KM Range SLT-182', 'SLT-182', '1 Year'),
(28, 'High Power Rechargeable Torch Flashlight 1KM SLT-185', 'SLT-185', '1 Year'),
(29, 'Rechargeable Emergency 24Pcs Led Light SEL-1003', 'SEL-1003', '1 Year'),
(30, 'Rechargeable Emergency Bright Led Light SEL-1002', 'SEL1002', '1 Year'),
(31, 'Rechargeable Emergency Light SEL-690 Green-White', 'SEL690', '1 Year'),
(32, '3 Way Extension Socket 2 USB SES-703U Grey', 'SES-703U', '1 Year'),
(33, 'Rechargeable Dual LED Touch Study Lamp SEL-1001 White', 'SEL1001', '1 Year'),
(34, '4 Ways Extension Socket 2 USB SES-704U Grey', 'SES704U', '1 Year'),
(35, 'Rechargeable LED Torch Light 2.5KM Range SLT-384', 'SLT-384', '1 Year'),
(36, 'Hair Dryer SHD-3009 Black', 'SHD-3009', '2 Year '),
(37, 'Hair Dryer SHD-3034 Pink', 'SHD-3034', '2 Year '),
(38, 'Foldable Hair Dryer SHD-5001 Pink', 'SHD-5001', '2 Year '),
(39, '8 Ways Extension Socket 2 USB SES-708U Grey', 'SES708U', '1 Year'),
(40, 'Tower Fan SF-8030', 'SF-8030', '1 Year'),
(41, '16 inch High Speed Table Fan SF-8028D', 'SF-8028D', '2 Year '),
(42, 'Hand Blender & Mixer Combo', 'SMX111SHB182', '1 year'),
(43, 'Dry Iron & Sandwich Maker Combo', 'SDI6018TSSM879', '1 Year'),
(44, '4 Way Extension Socket - SES-604 White', 'SES604', '1 Year'),
(45, 'Rechargeable Led Emergency Light Sel-692S Maroon', 'SEL692RED', '1 Year'),
(46, 'Rechargeable LED Torch Light 1 KM Range SLT-175', 'SLT-175', '1 Year'),
(47, '14 Inch Rechargeable Desk Fan SRF-014 [White]', 'SRF014', '6 Month'),
(48, 'Rechargeable Emergency Light SEL-695 Green-White', 'SEL690-1', '1 Year'),
(49, 'Extension Socket - 605', 'SES-605', '1 Year'),
(50, 'Extension Socket - 303U', 'SES-303U', '1 Year'),
(51, 'Extension Socket - 903', 'SES-903', '6 Month'),
(52, 'Mosquito Bat SMR-003', 'SMR-003', '4 Month'),
(53, 'Mosquito Bat SMR-009', 'SMR-009', '1 year'),
(54, 'Mosquito Bat SMR-004', 'SMR-004', '1 year'),
(55, 'Extension Socket SES-1005', 'SES-1005', '1 year'),
(56, 'Emergency Light SEL-720N', 'SEL-720N', '1 year');

-- --------------------------------------------------------

--
-- Table structure for table `product_feedback`
--

CREATE TABLE `product_feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `model` varchar(50) NOT NULL,
  `purchase_location` varchar(255) NOT NULL,
  `purchase_date` date NOT NULL,
  `location` varchar(255) NOT NULL,
  `contact_number` varchar(15) NOT NULL,
  `alt_contact_number` varchar(15) DEFAULT NULL,
  `submission_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `ticket_id` varchar(100) DEFAULT NULL,
  `status` int(10) NOT NULL DEFAULT 0,
  `warranty_status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `product_feedback`
--

INSERT INTO `product_feedback` (`id`, `name`, `model`, `purchase_location`, `purchase_date`, `location`, `contact_number`, `alt_contact_number`, `submission_date`, `ticket_id`, `status`, `warranty_status`) VALUES
(21, 'Kumara Guru Raj Ganesan', '999', 'Chennai ', '2023-12-15', 'Chennai ', '8056916118', '8056916118', '2023-12-22 06:10:04', 'SONA170322540421', 0, NULL),
(22, 'Mani', '987654', 'Chennai', '2023-12-01', 'chennai', '8056036607', '8056036607', '2023-12-22 07:20:25', 'SONA170322962522', 0, NULL),
(23, 'Testing ', '111', 'Chennai ', '2023-12-01', 'chennai', '8056916118', '8056916118', '2023-12-22 07:25:43', 'SONA170322994323', 0, NULL),
(24, 'Vijay Anand ', 'ncncncnc ', 'Chennai ', '2023-12-12', 'Bangalore', '9003290339', '', '2023-12-22 07:35:16', 'SONA170323051624', 0, NULL),
(25, 'Dinesh', 'Test', 'Tesdess', '2023-12-25', 'Hhj', '9841663161', '', '2023-12-22 10:06:30', 'SONA170323959025', 0, NULL),
(26, 'Srinivasan C', 'Srf716', 'Amazon', '2023-11-02', '3/238 G1 loganathan street nanmangalam chennai 600129', '7395956651', '9944962938', '2023-12-29 06:31:42', 'SONA170383150226', 0, NULL),
(27, 'V', 'Ghg', 'Che', '2024-01-01', 'Chennai ', '9003290339', '', '2024-01-03 10:50:13', 'SONA170427901327', 0, NULL),
(28, 'Kumara Guru Raj Ganesan', 'Mosquito Bat SMR-010', 'Chennai ', '2024-01-01', 'Chennai ', '8056916118', '8056916118', '2024-01-06 07:21:55', 'SONA170452571528', 0, NULL),
(29, 'testing 12', 'Mosquito Bat SMR-010', 'Chennai ', '2023-06-08', 'india', '8056916118', '8056916118', '2024-01-08 08:03:53', 'SONA170470103329', 0, 'Warranty Expired'),
(30, 'Testing 14', 'Electronic Mosquito Trap Killer SMR-012', 'Chennai ', '2023-12-01', 'India ', '8056916118', '8056916118', '2024-01-08 11:26:48', 'SONA170471320830', 0, 'Warranty is valid'),
(31, 'Vijay Anand ', 'Mosquito Racket Bat SMR 001', 'Chennai ', '2023-11-08', 'Chennai', '9003290339', '', '2024-01-08 11:32:53', 'SONA170471357331', 0, 'Warranty is valid'),
(32, 'srinivasan c', 'Electronic Mosquito Trap Killer SMR-012', 'saravana store', '2022-12-01', 'nanmangalam', '7395956651', '', '2024-01-08 11:36:31', 'SONA170471379132', 0, 'Warranty Expired'),
(33, 'Srinivasan C', 'Heavy Iron Box SHI-6015 Gold', 'Amazon', '2023-12-01', '3/238 G1 loganathan street nanmangalam chennai 600129', '9944962938', '', '2024-01-08 11:42:25', 'SONA170471414533', 0, 'Warranty is valid'),
(34, 'Kumara Guru Raj Ganesan', 'Electronic Mosquito Machine SMR-002 Green', 'Chennai ', '2023-12-04', 'India', '8056916118', '8056916118', '2024-01-09 04:41:06', 'SONA170477526634', 0, 'Warranty is valid'),
(35, 'Kumara Guru Raj Ganesan', 'Mosquito Racket Bat SMR 001', 'Chennai ', '2024-01-01', 'India ', '8056916118', '8056916118', '2024-01-09 04:45:11', 'S010035', 0, 'Warranty is valid'),
(36, 'srinivasan c', 'Mosquito Racket Bat SMR 001', 'saravana store', '2021-10-12', 'nanmangalam', '7395956651', '', '2024-01-09 09:22:20', 'S010036', 0, 'Warranty Expired'),
(37, 'srinivasan c', '14 Inch Rechargeable Desk Fan SRF-014 [White]', 'saravana store', '2023-11-02', 'nanmangalam', '7395956651', '', '2024-01-27 07:02:04', 'S010037', 0, 'Warranty is valid'),
(38, 'Guru', 'Mosquito Racket Bat SMR 001', 'Chennai ', '2024-01-30', 'India ', '8056916118', '8056916118', '2024-01-29 10:01:48', 'S010038', 0, 'Warranty is valid'),
(39, 'Srinivasan C', '1 Litre Electric Kettle SKT-1010S', 'Amazon', '2023-11-08', 'Keelkattalai ', '7395956651', '', '2024-01-31 09:59:00', 'S010039', 0, 'Warranty is valid'),
(40, 'Vijay Anand ', 'Extension Socket - 605', 'Chennai ', '2024-01-24', 'Chennai ', '09003290339', '9894794760', '2024-01-31 11:07:05', 'S010040', 0, 'Warranty is valid'),
(41, 'Srinivasan C', '4-Inch Rechargeable Mini Fan SRF-104', 'Amazon', '2024-02-01', 'Nanmangalam', '07395956651', '', '2024-02-06 09:18:04', 'S020041', 0, 'Warranty is valid');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `id` int(11) NOT NULL,
  `Project` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`id`, `Project`) VALUES
(1, 'Fedelta CRM'),
(2, 'SSDAC'),
(3, 'MWC'),
(4, 'Hemdeep shirts'),
(5, 'GES CRM'),
(6, 'GES'),
(7, 'getfarms'),
(8, 'MWC'),
(9, 'Agni Steels'),
(10, 'Lead '),
(11, 'kiscol grands'),
(13, 'akk line media '),
(14, 'mahalakshmi groups'),
(15, 'sekaass.com'),
(16, 'Vishwak Pharma'),
(17, 'Internal Activity '),
(18, 'Deal '),
(19, 'Alpine Coach tree '),
(20, 'V Connect'),
(21, 'R Dental Care'),
(22, 'Lensmen ');

-- --------------------------------------------------------

--
-- Table structure for table `project_category`
--

CREATE TABLE `project_category` (
  `id` int(11) NOT NULL,
  `category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `project_category`
--

INSERT INTO `project_category` (`id`, `category`) VALUES
(1, 'Website '),
(2, 'Web Application '),
(3, 'Mobile Application '),
(4, 'Business Intelligence '),
(5, 'Digital Marketing ');

-- --------------------------------------------------------

--
-- Table structure for table `project_value`
--

CREATE TABLE `project_value` (
  `id` int(11) NOT NULL,
  `amount` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `project_value`
--

INSERT INTO `project_value` (`id`, `amount`) VALUES
(1, 15000.00),
(2, 80000.00),
(3, 25000.00),
(4, 50000.00),
(5, 40000.00),
(6, 100000.00),
(7, 10000.00),
(9, 3000.00),
(10, 4000.00),
(11, 5000.00),
(12, 6000.00),
(13, 7000.00),
(14, 8000.00);

-- --------------------------------------------------------

--
-- Table structure for table `services_required`
--

CREATE TABLE `services_required` (
  `id` int(11) NOT NULL,
  `Required` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `services_required`
--

INSERT INTO `services_required` (`id`, `Required`) VALUES
(1, 'Basic HTML Website '),
(2, 'E Commerce Website '),
(3, 'Wordpress Website '),
(4, 'Landing Page '),
(5, 'CRM '),
(6, 'SEO '),
(7, 'Hybrid Application'),
(8, 'Native Application'),
(9, 'Website issue Fixing ');

-- --------------------------------------------------------

--
-- Table structure for table `stage`
--

CREATE TABLE `stage` (
  `id` int(11) NOT NULL,
  `stage` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `stage`
--

INSERT INTO `stage` (`id`, `stage`) VALUES
(1, 'Qualification '),
(2, 'Requirements '),
(3, 'Proposal '),
(6, 'Negotiation '),
(7, 'Deal Won '),
(8, 'Deal Lost ');

-- --------------------------------------------------------

--
-- Table structure for table `store_location`
--

CREATE TABLE `store_location` (
  `id` int(11) NOT NULL,
  `location` varchar(255) NOT NULL,
  `routes` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `store_location`
--

INSERT INTO `store_location` (`id`, `location`, `routes`) VALUES
(1, 'Alapakkam\r\n', 1),
(2, 'Alwarthirunagar', 1),
(3, 'Arumbakkam\r\n', 2),
(4, 'Ashok Nagar\r\n', 2),
(5, 'Arumbakkam\r\n', 2),
(6, 'Ashok Nagar\r\n', 2),
(7, 'Adambakkam\r\n', 3),
(8, 'Basin Bridge\r\n', 3);

-- --------------------------------------------------------

--
-- Table structure for table `trainingcategory`
--

CREATE TABLE `trainingcategory` (
  `id` int(11) NOT NULL,
  `TrainingCategory` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `trainingcategory`
--

INSERT INTO `trainingcategory` (`id`, `TrainingCategory`) VALUES
(1, 'Software Development '),
(2, 'Software Testing '),
(3, 'Data Science ');

-- --------------------------------------------------------

--
-- Table structure for table `type_of_activity`
--

CREATE TABLE `type_of_activity` (
  `id` int(11) NOT NULL,
  `Type_of_Activity` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `type_of_activity`
--

INSERT INTO `type_of_activity` (`id`, `Type_of_Activity`) VALUES
(3, 'Meeting'),
(4, 'Estimation'),
(5, 'Demo'),
(6, 'Proposal '),
(7, 'Task '),
(8, 'Requirements'),
(9, 'Follow up '),
(10, 'Issue'),
(11, 'Internal Activity ');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `full_name` varchar(255) DEFAULT NULL,
  `email_id` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(20) NOT NULL,
  `account_status` int(11) NOT NULL DEFAULT 0,
  `timestamp` int(11) NOT NULL DEFAULT 0,
  `mod_timestamp` int(11) NOT NULL DEFAULT 0,
  `type` varchar(255) DEFAULT 'admin'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `full_name`, `email_id`, `password`, `role`, `account_status`, `timestamp`, `mod_timestamp`, `type`) VALUES
(7, 'admin', 'admin', 'admin admin', 'admin@demo.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'SUADMIN', 1, 0, 0, 'admin'),
(8, 'user', 'user', 'user user', 'user@demo.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'SUADMIN', 1, 0, 0, 'user'),
(9, 'Vijay anand', 'M', 'Vijay anand M', 'vijay.anand189@gmail.com', 'd96b33e9e23af1f6da697311cd3c4424378e34b0', 'SUADMIN', 1, 0, 0, 'user'),
(10, 'Sabarinathan', 'Pachaiyappan', 'Sabarinathan Pachaiyappan', 'sabari21pachaiyappan@gmail.com', 'cdc2d5e801ccfad83289a644ca372b752e8a03a2', 'SUADMIN', 1, 0, 0, 'user'),
(11, 'Benzer Bel', 'Y', 'Benzer Bel Y', 'benzer1711@gmail.com', '2a8cc7802e39f312ad1f6be0a2fee919856f4269', 'SUADMIN', 1, 0, 0, 'admin'),
(12, 'Kumara Guru', 'Raj', 'Kumara Guru Raj', 'kumaragururaj2k@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'SUADMIN', 1, 0, 0, 'user'),
(13, 'sri', 'priya', 'sri priya', 'spriya1416@gmail.com', 'bb02812aa0005b987db88cffa97151fae0a65023', 'SUADMIN', 1, 0, 0, 'user'),
(14, 'Manikandan', 'T', 'Manikandan T', 'manikandantraj@gmail.com', 'b67092be8efad7698a7877c75d70857360f4401d', 'SUADMIN', 1, 0, 0, 'user'),
(15, 'Karthick', 'S', 'Karthick S', 'karthickr352@gmail.com', '9f6c2c03f3b9e902cdaaa28c3c6ba6393908989c', 'SUADMIN', 1, 0, 0, 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activityscheduler`
--
ALTER TABLE `activityscheduler`
  ADD PRIMARY KEY (`ActivityID`);

--
-- Indexes for table `campaign_source`
--
ALTER TABLE `campaign_source`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `conversion_rate`
--
ALTER TABLE `conversion_rate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customertype`
--
ALTER TABLE `customertype`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `it_services`
--
ALTER TABLE `it_services`
  ADD PRIMARY KEY (`IT_services_id`);

--
-- Indexes for table `it_trainings`
--
ALTER TABLE `it_trainings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lead`
--
ALTER TABLE `lead`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leadservicesrequired`
--
ALTER TABLE `leadservicesrequired`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lead_source`
--
ALTER TABLE `lead_source`
  ADD PRIMARY KEY (`source_id`);

--
-- Indexes for table `lead_status`
--
ALTER TABLE `lead_status`
  ADD PRIMARY KEY (`status_id`);

--
-- Indexes for table `line_of_business`
--
ALTER TABLE `line_of_business`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `next_step`
--
ALTER TABLE `next_step`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `product_feedback`
--
ALTER TABLE `product_feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_category`
--
ALTER TABLE `project_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_value`
--
ALTER TABLE `project_value`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services_required`
--
ALTER TABLE `services_required`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stage`
--
ALTER TABLE `stage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `store_location`
--
ALTER TABLE `store_location`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trainingcategory`
--
ALTER TABLE `trainingcategory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `type_of_activity`
--
ALTER TABLE `type_of_activity`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email_id` (`email_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activityscheduler`
--
ALTER TABLE `activityscheduler`
  MODIFY `ActivityID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `campaign_source`
--
ALTER TABLE `campaign_source`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `conversion_rate`
--
ALTER TABLE `conversion_rate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `customertype`
--
ALTER TABLE `customertype`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `it_services`
--
ALTER TABLE `it_services`
  MODIFY `IT_services_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `it_trainings`
--
ALTER TABLE `it_trainings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `lead`
--
ALTER TABLE `lead`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `leadservicesrequired`
--
ALTER TABLE `leadservicesrequired`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `lead_source`
--
ALTER TABLE `lead_source`
  MODIFY `source_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `lead_status`
--
ALTER TABLE `lead_status`
  MODIFY `status_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `line_of_business`
--
ALTER TABLE `line_of_business`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `next_step`
--
ALTER TABLE `next_step`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `product_feedback`
--
ALTER TABLE `product_feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `project_category`
--
ALTER TABLE `project_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `project_value`
--
ALTER TABLE `project_value`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `services_required`
--
ALTER TABLE `services_required`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `stage`
--
ALTER TABLE `stage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `store_location`
--
ALTER TABLE `store_location`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `trainingcategory`
--
ALTER TABLE `trainingcategory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `type_of_activity`
--
ALTER TABLE `type_of_activity`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
