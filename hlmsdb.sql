-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 29, 2021 at 06:41 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hlmsdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

CREATE TABLE `tbladmin` (
  `ID` int(10) NOT NULL,
  `AdminName` varchar(120) DEFAULT NULL,
  `UserName` varchar(120) DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `Email` varchar(120) DEFAULT NULL,
  `Password` varchar(120) DEFAULT NULL,
  `RegDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`ID`, `AdminName`, `UserName`, `MobileNumber`, `Email`, `Password`, `RegDate`) VALUES
(1, 'Admin', 'admin', 8989898989, 'admin@gmail.com', 'f925916e2754e5e03f75dd58a5733251', '2021-12-15 12:21:43');

-- --------------------------------------------------------

--
-- Table structure for table `tblapplication`
--

CREATE TABLE `tblapplication` (
  `ID` int(10) NOT NULL,
  `UserID` int(10) DEFAULT NULL,
  `ApplicationNumber` int(10) DEFAULT NULL,
  `PanNumber` varchar(200) DEFAULT NULL,
  `PanCardCopy` varchar(200) DEFAULT NULL,
  `Address` mediumtext DEFAULT NULL,
  `AddressProofType` varchar(200) DEFAULT NULL,
  `AdressDoc` varchar(200) DEFAULT NULL,
  `ServiceType` varchar(200) DEFAULT NULL,
  `MontlyIncome` decimal(10,2) DEFAULT NULL,
  `ExistingLoan` varchar(100) DEFAULT NULL,
  `ExpectedLoanAmount` decimal(10,2) DEFAULT NULL,
  `ProfilePic` varchar(200) DEFAULT NULL,
  `Tenure` int(5) DEFAULT NULL,
  `GName` varchar(200) DEFAULT NULL,
  `Gmobnum` bigint(10) DEFAULT NULL,
  `Gemail` varchar(200) DEFAULT NULL,
  `Gaddress` varchar(200) DEFAULT NULL,
  `SubmitDate` timestamp NULL DEFAULT current_timestamp(),
  `Remark` varchar(200) DEFAULT NULL,
  `Status` varchar(200) DEFAULT NULL,
  `LoanamountDisbursed` decimal(10,2) DEFAULT NULL,
  `RateofInterest` decimal(10,0) DEFAULT NULL,
  `DTenure` int(5) DEFAULT NULL,
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblapplication`
--

INSERT INTO `tblapplication` (`ID`, `UserID`, `ApplicationNumber`, `PanNumber`, `PanCardCopy`, `Address`, `AddressProofType`, `AdressDoc`, `ServiceType`, `MontlyIncome`, `ExistingLoan`, `ExpectedLoanAmount`, `ProfilePic`, `Tenure`, `GName`, `Gmobnum`, `Gemail`, `Gaddress`, `SubmitDate`, `Remark`, `Status`, `LoanamountDisbursed`, `RateofInterest`, `DTenure`, `UpdationDate`) VALUES
(1, 2, 12456789, '85456jhkh', '5e61e9ed045864c92566d697cf41a1291639486339.pdf', 'gjhgjjhghj', 'Voted ID', '5e61e9ed045864c92566d697cf41a1291639486339.pdf', 'govt', '900000.00', 'No', '3000000.00', 'd76eefc9b04a590512a95480a30ca1591639486339.jpg', 15, NULL, NULL, NULL, NULL, '2021-12-14 12:52:19', 'Your Loan has been disburesd', 'Disbursed', '1000000.00', '12', 15, '2021-12-28 16:39:44'),
(2, 1, 84468, '87998ghhytu', '5e61e9ed045864c92566d697cf41a1291640070270.pdf', 'klhdhfhouihrtiurseyhpiusthykj', 'Aadhar', '5e61e9ed045864c92566d697cf41a1291640070270.pdf', 'Private', '90.00', 'Yes', '200000.00', 'dc088ef0434115e7297fbed047ed1b791640070270.png', 18, NULL, NULL, NULL, NULL, '2021-12-21 07:04:30', 'Rejected', NULL, NULL, NULL, NULL, '2021-12-24 13:48:23'),
(3, 1, 99252, 'ETY123456', '5e61e9ed045864c92566d697cf41a1291640177390.pdf', 'hkjhkjhfgdtfdg', 'Voted ID', '5e61e9ed045864c92566d697cf41a1291640177390.pdf', 'Govt', '95000.00', 'Yes', '3000000.00', '4f0691cfe48c8f74fe413c7b92391ff41640177390.jpg', 18, 'Ramesh Yadav', 7787877874, 'ram@gmail.com', 'H911 ABC Street New Delhi Delhi 110001', '2021-12-22 12:49:50', 'Good Luck', 'Disbursed', '2000000.00', '18', 10, '2021-12-28 17:00:07'),
(4, 1, 14227, 'EPN6644656', '5e61e9ed045864c92566d697cf41a1291640583686.pdf', 'h-99, vviphhnn\\\r\nkjhkjlkdjl', 'Voted ID', '5e61e9ed045864c92566d697cf41a1291640583686.pdf', 'private', '8900000.00', 'No', '2500000.00', 'bcc5667786d6bd1b25e7c4d8a42e85501640583686.jpg', 15, 'Raghu', 4545646464, 'khkj@gmaol.com', 'ljoiuoiuiou', '2021-12-27 05:41:26', 'Approved', 'Approved', NULL, NULL, NULL, '2021-12-28 16:29:54'),
(5, 3, 67748, 'BAHCYD679H', '2c86e2aa7eb4cb4db70379e28fab9b521640717766.pdf', 'Q 5445 XYZ Streer GZb UP 201017', 'Voted ID', '2c86e2aa7eb4cb4db70379e28fab9b521640717766.pdf', 'Business', '100000.00', 'No', '2000000.00', '714c5b741d1ae5389fe86c7c97d5614a1640717766.png', 12, 'Rahul Singh', 1236587410, 'rahul@gmail.com', 'New Delhi India', '2021-12-28 18:56:06', 'NA', 'Disbursed', '1800000.00', '10', 10, '2021-12-28 18:58:39');

-- --------------------------------------------------------

--
-- Table structure for table `tblapplicationtracking`
--

CREATE TABLE `tblapplicationtracking` (
  `ID` int(10) NOT NULL,
  `ApplicationNumber` int(10) DEFAULT NULL,
  `Remark` varchar(200) DEFAULT NULL,
  `Status` varchar(200) DEFAULT NULL,
  `UpdationDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblapplicationtracking`
--

INSERT INTO `tblapplicationtracking` (`ID`, `ApplicationNumber`, `Remark`, `Status`, `UpdationDate`) VALUES
(1, 12456789, 'Your Application has been approved', 'Approved', '2021-12-21 05:09:19'),
(2, 12456789, 'Your Loan has been disburesd', 'Disbursed', '2021-12-21 06:41:40'),
(3, 84468, 'Rejected', 'Rejected', '2021-12-21 07:08:41'),
(4, 99252, 'Your Loan Has been approved', 'Approved', '2021-12-22 13:03:58'),
(5, 99252, 'Good Luck', 'Disbursed', '2021-12-22 13:06:17'),
(6, 14227, 'Approved', 'Approved', '2021-12-27 05:42:09'),
(7, 67748, 'Application is Approved', 'Approved', '2021-12-28 18:57:58'),
(8, 67748, 'NA', 'Disbursed', '2021-12-28 18:58:39');

-- --------------------------------------------------------

--
-- Table structure for table `tblcontact`
--

CREATE TABLE `tblcontact` (
  `ID` int(10) NOT NULL,
  `Name` varchar(200) DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `Message` mediumtext DEFAULT NULL,
  `EnquiryDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `IsRead` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblcontact`
--

INSERT INTO `tblcontact` (`ID`, `Name`, `Email`, `Message`, `EnquiryDate`, `IsRead`) VALUES
(1, 'Kiran', 'kran@gmail.com', 'cost of volvo place pritampura to dwarka', '2021-07-05 07:26:24', 1),
(2, 'Sarita Pandey', 'sar@gmail.com', 'huiyuihhjjkhkjvhknv iyi tuyvuoiup', '2021-07-09 12:48:40', 1),
(3, 'Test', 'test@gmail.com', 'Want to know price of forest cake', '2021-07-16 12:51:06', 1),
(4, 'Anuj', 'ak330@gmail.com', 'This is for testing.', '2021-07-18 14:35:50', 1),
(5, 'jkh', 'kjhkj@gmail.com', 'kjhk', '2021-12-23 11:24:44', 1),
(6, 'Test3424', 'test@gmail.com', 'kjugjhgkhefiuryi', '2021-12-27 06:17:31', 1),
(7, 'Anuj Kumar', 'anuj@gmail.com', 'Test', '2021-12-28 18:59:25', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tblpage`
--

CREATE TABLE `tblpage` (
  `ID` int(10) NOT NULL,
  `PageType` varchar(200) DEFAULT NULL,
  `PageTitle` mediumtext DEFAULT NULL,
  `PageDescription` mediumtext DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `UpdationDate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblpage`
--

INSERT INTO `tblpage` (`ID`, `PageType`, `PageTitle`, `PageDescription`, `Email`, `MobileNumber`, `UpdationDate`) VALUES
(1, 'aboutus', 'About Us', 'We are committed to offering travel services of the highest quality, combining our energy and enthusiasm, with our years of experience. Our greatest satisfaction comes in serving large numbers of satisfied clients who have experienced the joys and inspiration of travel.\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse porta erat sit amet eros sagittis, quis hendrerit libero aliquam. Fusce semper augue ac dolor efficitur, a pretium metus pellentesque.', NULL, NULL, NULL),
(2, 'contactus', 'Contact Us', '982, Sector 62, Gyan Sarovar, GAIL Noida(Delhi/NCR)', 'info@gmail.com', 7896541236, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbluser`
--

CREATE TABLE `tbluser` (
  `ID` int(10) NOT NULL,
  `FullName` varchar(200) DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `Password` varchar(200) DEFAULT NULL,
  `RegDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbluser`
--

INSERT INTO `tbluser` (`ID`, `FullName`, `MobileNumber`, `Password`, `RegDate`) VALUES
(1, 'Test', 8787878787, '202cb962ac59075b964b07152d234b70', '2021-12-14 05:36:39'),
(2, 'Rahul', 7878778787, '202cb962ac59075b964b07152d234b70', '2021-12-14 05:37:15'),
(3, 'Anuj kumar', 1234569870, 'f925916e2754e5e03f75dd58a5733251', '2021-12-28 18:52:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbladmin`
--
ALTER TABLE `tbladmin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblapplication`
--
ALTER TABLE `tblapplication`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ApplicationNumber` (`ApplicationNumber`),
  ADD KEY `UserID` (`UserID`);

--
-- Indexes for table `tblapplicationtracking`
--
ALTER TABLE `tblapplicationtracking`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ApplicationNumber` (`ApplicationNumber`);

--
-- Indexes for table `tblcontact`
--
ALTER TABLE `tblcontact`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblpage`
--
ALTER TABLE `tblpage`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbluser`
--
ALTER TABLE `tbluser`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbladmin`
--
ALTER TABLE `tbladmin`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblapplication`
--
ALTER TABLE `tblapplication`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tblapplicationtracking`
--
ALTER TABLE `tblapplicationtracking`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tblcontact`
--
ALTER TABLE `tblcontact`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tblpage`
--
ALTER TABLE `tblpage`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbluser`
--
ALTER TABLE `tbluser`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
