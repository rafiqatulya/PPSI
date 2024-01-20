-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 04, 2020 at 05:08 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 5.6.39

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_onlinelibrary`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblautonumbers`
--

CREATE TABLE `tblautonumbers` (
  `AUTOID` int(11) NOT NULL,
  `AUTOSTART` varchar(30) NOT NULL,
  `AUTOEND` int(11) NOT NULL,
  `AUTOINC` int(11) NOT NULL,
  `AUTOKEY` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblautonumbers`
--

INSERT INTO `tblautonumbers` (`AUTOID`, `AUTOSTART`, `AUTOEND`, `AUTOINC`, `AUTOKEY`) VALUES
(1, '000', 17, 1, 'BorrowerID');

-- --------------------------------------------------------

--
-- Table structure for table `tblbooknumber` to save books information DONE
--

CREATE TABLE `tblbooknumber` (
  `ID` int(11) NOT NULL,
  `BOOKTITLE` varchar(255) NOT NULL,
  `QTY` int(11) NOT NULL,
  `Desc` varchar(90) NOT NULL,
  `Author` varchar(90) NOT NULL,
  `PublishDate` date NOT NULL,
  `Publisher` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblbooknumber` 
--

INSERT INTO `tblbooknumber` (`ID`, `BOOKTITLE`, `QTY`, `Desc`, `Author`, `PublishDate`, `Publisher`) VALUES
(5, 'Android Studio : Kotlin', 2, 'Buku Tutorial Penggunaan Android Studio Kotlin', 'Putri Ramadhani', '2020-08-21', 'Erlangga'),
(6, '	Web Programming Essentials', 2, 'Buku Pemrograman Web Dasar', 'Kamila Dewi', '2021-10-10', 'Erlangga');

-- --------------------------------------------------------

--
-- Table structure for table `tblbooks`  to save book details DONE
--

CREATE TABLE `tblbooks` (
  `BookID` int(11) NOT NULL,
  `IBSN` varchar(13) NOT NULL,
  `BookTitle` varchar(125) NOT NULL,
  `BookDesc` varchar(255) NOT NULL,
  `Author` varchar(125) NOT NULL,
  `PublishDate` date NOT NULL,
  `BookPublisher` varchar(125) NOT NULL,
  `Category` varchar(90) NOT NULL,
  `BookPrice` double NOT NULL,
  `BookQuantity` int(11) NOT NULL,
  `Status` varchar(30) NOT NULL,
  `BookType` varchar(90) NOT NULL,
  `DeweyDecimal` varchar(90) NOT NULL,
  `OverAllQty` int(11) NOT NULL,
  `Donate` tinyint(1) NOT NULL,
  `Remarks` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblbooks`
--

INSERT INTO `tblbooks` (`BookID`, `IBSN`, `BookTitle`, `BookDesc`, `Author`, `PublishDate`, `BookPublisher`, `Category`, `BookPrice`, `BookQuantity`, `Status`, `BookType`, `DeweyDecimal`, `OverAllQty`, `Donate`, `Remarks`) VALUES
(1, '89021', 'Android Studio : Kotlin', 'Buku Tutorial Penggunaan Android Studio Kotlin', 'Putri Ramadhani', '2020-08-21', 'Erlangga', 'Pengembangan Aplikasi Mobile', 5, 3, 'Available', 'Non_Fiksi', '700', 3, 0, '-');

-- --------------------------------------------------------


--
-- Table structure for table `tblborrower` untuk save data borrower DONE
--

CREATE TABLE `tblborrower` (
  `IDNO` int(11) NOT NULL,
  `BorrowerId` varchar(90) NOT NULL,
  `Firstname` varchar(125) NOT NULL,
  `Lastname` varchar(125) NOT NULL,
  `MiddleName` varchar(125) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Sex` varchar(11) NOT NULL,
  `ContactNo` varchar(125) NOT NULL,
  `CourseYear` varchar(125) NOT NULL,
  `BorrowerPhoto` varchar(255) NOT NULL,
  `BorrowerType` varchar(35) NOT NULL,
  `Stats` varchar(36) NOT NULL,
  `BUsername` varchar(90) NOT NULL,
  `BPassword` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblborrower`
--

INSERT INTO `tblborrower` (`IDNO`, `BorrowerId`, `Firstname`, `Lastname`, `MiddleName`, `Address`, `Sex`, `ContactNo`, `CourseYear`, `BorrowerPhoto`, `BorrowerType`, `Stats`, `BUsername`, `BPassword`) VALUES
(22, '202000015', 'sad', 'sad', 'sad', 'asd', 'Female', 'asd', '213', 'photos/', 'Students', 'Active', 'asd', 'f10e2821bbbea527ea02200352313bc059445190');

-- --------------------------------------------------------

--
-- Table structure for table `tblcategory`        DONE
--

CREATE TABLE `tblcategory` (
  `CategoryId` int(11) NOT NULL,
  `Category` varchar(125) NOT NULL,
  `DDecimal` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcategory`
--

INSERT INTO `tblcategory` (`CategoryId`, `Category`, `DDecimal`) VALUES
(1, 'Pemrograman Komputer', '000'),
(2, 'Jaringan dan Keamanan Informasi', '100'),
(3, 'Sistem Operasi', '200'),
(4, 'Sistem Informasi dan Manajemen Proyek', '300'),
(5, 'Desain Perangkat Lunak dan Arsitektur', '400'),
(6, 'Ilmu Data dan Analitik', '500'),
(7, 'Pemrosesan Gambar dan Video', '600'),
(8, 'Pengembangan Aplikasi Mobile', '700'),
(9, 'Database dan Manajemen Data', '800'),
(10, 'Pengembangan Web', '900');

-- --------------------------------------------------------

--
-- Table structure for table `tbllogs`    DONE
--

CREATE TABLE `tbllogs` (
  `LogId` int(11) NOT NULL,
  `UserId` int(11) NOT NULL,
  `LogDate` datetime NOT NULL,
  `LogMode` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


-- --------------------------------------------------------



--
-- Table structure for table `tbltransaction` for peminjaman buku DONE
--

CREATE TABLE `tbltransaction` (
  `TransactionID` int(11) NOT NULL,
  `IBSN` varchar(13) NOT NULL,
  `NoCopies` int(11) NOT NULL,
  `DateBorrowed` datetime NOT NULL,
  `Purpose` varchar(90) NOT NULL,
  `Status` varchar(30) NOT NULL,
  `DueDate` datetime NOT NULL,
  `BorrowerId` int(11) NOT NULL,
  `Borrowed` tinyint(1) NOT NULL,
  `Due` tinyint(1) NOT NULL,
  `Returned` tinyint(1) NOT NULL,
  `DateReturned` datetime NOT NULL,
  `Remarks` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


-- --------------------------------------------------------

--
-- Table structure for table `tblusers`    DONE
--

CREATE TABLE `tblusers` (
  `USERID` int(11) NOT NULL,
  `NAME` varchar(124) NOT NULL,
  `UEMAIL` varchar(125) NOT NULL,
  `PASS` varchar(125) NOT NULL,
  `TYPE` varchar(125) NOT NULL,
  `Status` varchar(11) NOT NULL,
  `PicLoc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblusers`
--

INSERT INTO `tblusers` (`USERID`, `NAME`, `UEMAIL`, `PASS`, `TYPE`, `Status`, `PicLoc`) VALUES
(3, 'Hasya', 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'Administrator', 'Active', 'img/bhl-logo.jpg'),
(4, 'Amalia', 'admina', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'Administrator', 'Active', 'img/bhl-logo.jpg'),
(5, 'Syakina', 'admins', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'Administrator', 'Active', 'img/bhl-logo.jpg'),
(6, 'Ulya', 'adminu', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'Administrator', 'Active', 'img/bhl-logo.jpg'),
(7, 'Raidan', 'adminr', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'Administrator', 'Active', 'img/bhl-logo.jpg');
--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblautonumbers`
--
ALTER TABLE `tblautonumbers`
  ADD PRIMARY KEY (`AUTOID`);

--
-- Indexes for table `tblbooknumber`
--
ALTER TABLE `tblbooknumber`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblbooks`
--
ALTER TABLE `tblbooks`
  ADD PRIMARY KEY (`BookID`);

--
-- Indexes for table `tblborrower`
--
ALTER TABLE `tblborrower`
  ADD PRIMARY KEY (`IDNO`),
  ADD UNIQUE KEY `BorrowerId` (`BorrowerId`);

--
-- Indexes for table `tblcategory`
--
ALTER TABLE `tblcategory`
  ADD PRIMARY KEY (`CategoryId`);

--
-- Indexes for table `tbllogs`
--
ALTER TABLE `tbllogs`
  ADD PRIMARY KEY (`LogId`);


--
-- Indexes for table `tbltransaction`
--
ALTER TABLE `tbltransaction`
  ADD PRIMARY KEY (`TransactionID`);

--
-- Indexes for table `tblusers`
--
ALTER TABLE `tblusers`
  ADD PRIMARY KEY (`USERID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblautonumbers`
--
ALTER TABLE `tblautonumbers`
  MODIFY `AUTOID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblbooknumber`
--
ALTER TABLE `tblbooknumber`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tblbooks`
--
ALTER TABLE `tblbooks`
  MODIFY `BookID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tblborrower`
--
ALTER TABLE `tblborrower`
  MODIFY `IDNO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tblcategory`
--
ALTER TABLE `tblcategory`
  MODIFY `CategoryId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbllogs`
--
ALTER TABLE `tbllogs`
  MODIFY `LogId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=483;

--
-- AUTO_INCREMENT for table `tblpayment`
--
-- ALTER TABLE `tblpayment`
--   MODIFY `PaymentId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbltransaction`
--
ALTER TABLE `tbltransaction`
  MODIFY `TransactionID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `tblusers`
--
ALTER TABLE `tblusers`
  MODIFY `USERID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
