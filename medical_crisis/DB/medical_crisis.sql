-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 24, 2022 at 10:58 AM
-- Server version: 5.6.14
-- PHP Version: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `medical_crisis`
--

-- --------------------------------------------------------

--
-- Table structure for table `ambulance`
--

CREATE TABLE IF NOT EXISTS `ambulance` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Conatct` varchar(100) NOT NULL,
  `District` varchar(100) NOT NULL,
  `Aadhaar` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Status` varchar(100) NOT NULL,
  `Usertype` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `ambulance`
--

INSERT INTO `ambulance` (`Id`, `Conatct`, `District`, `Aadhaar`, `Email`, `Status`, `Usertype`, `Password`) VALUES
(2, '9878787656', 'Kollam', '1234567890234567', 'amb@gmail.com', 'Active', 'Ambulance', 'amb');

-- --------------------------------------------------------

--
-- Table structure for table `amb_status`
--

CREATE TABLE IF NOT EXISTS `amb_status` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Location` text NOT NULL,
  `Reachtime` varchar(100) NOT NULL,
  `Sts` varchar(100) NOT NULL,
  `Msg` longtext NOT NULL,
  `Email` varchar(100) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `amb_status`
--

INSERT INTO `amb_status` (`Id`, `Location`, `Reachtime`, `Sts`, `Msg`, `Email`) VALUES
(3, 'Adoor', '1 hour', 'Yes', 'come', 'amb@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE IF NOT EXISTS `booking` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(100) NOT NULL,
  `Mobile` varchar(100) NOT NULL,
  `Gender` varchar(100) NOT NULL,
  `Age` varchar(100) NOT NULL,
  `Address` text NOT NULL,
  `Pin` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Date` date NOT NULL,
  `Status` varchar(100) NOT NULL,
  `Reply` varchar(100) NOT NULL,
  `Etocken` varchar(100) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`Id`, `Name`, `Mobile`, `Gender`, `Age`, `Address`, `Pin`, `Email`, `Date`, `Status`, `Reply`, `Etocken`) VALUES
(1, 'demo', '9898822222', 'Male', '18', 'fff', '689692', 'demo@gmail.com', '2021-01-31', 'Booked', '11:30AM-12:00PM', ''),
(3, 'Ammu', '9898822222', 'Female', '17', 'Ammu villa', '689692', 'kodzinfotech@gmail.com', '2021-01-31', 'Booked', '10:00AM-10:30AM', ''),
(4, 'demo', '9898822222', 'Male', '18', 'ds', '689692', 'a@gmail.com', '2021-02-10', 'Booked', '11:00AM-11:30AM', ''),
(5, 'sam', '9898822222', 'Male', '18', 'dr', '689692', 'sam@gmail.com', '2021-02-06', 'Booked', '10:30AM-11:00AM', 'EPTsam5'),
(6, 'demo', '9898822222', 'Female', '18', 'sds', '689692', 'demo@gmail.com', '2021-03-05', 'Booked', '11:00AM-11:30AM', 'EPTdemo6'),
(7, 'devu', '9898822222', 'Male', '18', 'ef', '689692', 'sam@gmail.com', '2021-07-02', 'Booked', '10:00AM-10:30AM', 'EPTdevu7');

-- --------------------------------------------------------

--
-- Table structure for table `complaints`
--

CREATE TABLE IF NOT EXISTS `complaints` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Ac_des` text NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `complaints`
--

INSERT INTO `complaints` (`Id`, `Name`, `Email`, `Ac_des`) VALUES
(1, 'anu', 'anu@gmail.com', 'complaints');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE IF NOT EXISTS `department` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Hid` int(11) NOT NULL,
  `Department` text NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`Id`, `Hid`, `Department`) VALUES
(4, 7, 'Neurology'),
(5, 6, 'Neurology'),
(6, 6, 'Ortho'),
(7, 2, 'Cardiology'),
(8, 2, 'Dermatology'),
(9, 2, 'Psychiatry'),
(10, 4, 'Neurology'),
(11, 4, 'Cardiology'),
(12, 4, 'Dermatology');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE IF NOT EXISTS `doctor` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Hospital` text NOT NULL,
  `Department` text NOT NULL,
  `Doctor` text NOT NULL,
  `Des` longtext NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`Id`, `Hospital`, `Department`, `Doctor`, `Des`) VALUES
(2, '6', 'Ortho', 'Dr. Arun Dev', 'An emergency physician trained in trauma management, resuscitation and critical care. Dr. Arun Dev is an expert in managing multiple medical emergencies like acute stroke, cardiac emergencies, seizure and sepsis. Trained in performing basic emergency diagnostic and invasive procedures in the ER. Areas of special interest include trauma care and ultrasound-guided procedures and diagnostics in ER.'),
(3, '2', 'Neurology', 'Dr. Merlin', ''),
(4, '2', 'Psychiatry', 'Dr.Stylessia', ''),
(5, '2', 'Dermatology', 'Dr.Antony', ''),
(6, '2', 'Cardiology', 'Dr.Vivek', ''),
(7, '6', 'Cardiology', 'Dr.Abey', 'An emergency physician trained in trauma management, resuscitation and critical care. Dr. Abey is an expert in managing multiple medical emergencies like acute stroke, cardiac emergencies, seizure and sepsis. Trained in performing basic emergency diagnostic and invasive procedures in the ER. Areas of special interest include trauma care and ultrasound-guided procedures and diagnostics in ER.'),
(8, '4', 'Neurology', 'Dr.Abey', 'An emergency physician trained in trauma management, resuscitation and critical care. Dr. Abey is an expert in managing multiple medical emergencies like acute stroke, cardiac emergencies, seizure and sepsis. Trained in performing basic emergency diagnostic and invasive procedures in the ER. Areas of special interest include trauma care and ultrasound-guided procedures and diagnostics in ER.');

-- --------------------------------------------------------

--
-- Table structure for table `emergency`
--

CREATE TABLE IF NOT EXISTS `emergency` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Ac_loc` varchar(500) NOT NULL,
  `Ac_city` varchar(500) NOT NULL,
  `Ac_des` text NOT NULL,
  `District` varchar(100) NOT NULL,
  `Photo` varchar(100) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `emergency`
--

INSERT INTO `emergency` (`Id`, `Name`, `Email`, `Ac_loc`, `Ac_city`, `Ac_des`, `District`, `Photo`) VALUES
(4, 'Anu', 'anu@gmail.com', 'Thatta', 'Thatta', 'Accident Description', 'Kollam', 'ac_pic/Jellyfish.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `facilities`
--

CREATE TABLE IF NOT EXISTS `facilities` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Hospital` varchar(100) NOT NULL,
  `Facilities` longtext NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `facilities`
--

INSERT INTO `facilities` (`Id`, `Hospital`, `Facilities`) VALUES
(1, '4', 'features'),
(4, '4', 'ssfsdggd dgfgjhc ');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Ac_des` text NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`Id`, `Name`, `Email`, `Ac_des`) VALUES
(1, 'Anu', 'anu@gmail.com', 'Feedback');

-- --------------------------------------------------------

--
-- Table structure for table `hospial`
--

CREATE TABLE IF NOT EXISTS `hospial` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Hospital` text NOT NULL,
  `Des` longtext NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `hospial`
--

INSERT INTO `hospial` (`Id`, `Hospital`, `Des`, `Username`, `Password`) VALUES
(1, 'Muthoot Hospital, Pathanamthitta', 'We are fostering innovative healthcare treatments through our Muthoot hospitals to help you recover completely. Our focus is to provide the finest treatments and help you convalesce in the verdant and serene environs of Kerala. Recuperate in the ambience of the world-class Muthoot hospitals with its innovative health programs. Our regular and consistent care helps you revitalise your health and regain your lost vigour. ', 'muthootpta', 'muthootpta'),
(3, 'Believer''s Hospital, Thiruvalla', 'We are fostering innovative healthcare treatments through our Muthoot hospitals to help you recover completely. Our focus is to provide the finest treatments and help you convalesce in the verdant and serene environs of Kerala. Recuperate in the ambience of the world-class Muthoot hospitals with its innovative health programs. Our regular and consistent care helps you revitalise your health and regain your lost vigour.', 'believerspta', 'believerspta'),
(4, 'Believer''s Hospital, Konni', 'We are fostering innovative healthcare treatments through our Muthoot hospitals to help you recover completely. Our focus is to provide the finest treatments and help you convalesce in the verdant and serene environs of Kerala. Recuperate in the ambience of the world-class Muthoot hospitals with its innovative health programs. Our regular and consistent care helps you revitalise your health and regain your lost vigour.', 'believerskonni', 'believerskonni');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Username` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Usertype` varchar(100) NOT NULL,
  `Status` varchar(100) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`Id`, `Username`, `Password`, `Usertype`, `Status`) VALUES
(2, 'admin', 'admin', 'admin', 'Active'),
(3, 'anu@gmail.com', 'anu', 'user', 'Active'),
(4, 'amb@gmail.com', 'amb', 'Ambulance', 'Active'),
(5, 'konnipolice@gmail.com', 'konnipolice', 'Police', 'Active'),
(6, 'believerskonni', 'believerskonni', 'hospital', 'Active'),
(7, 'seena', 'seena', 'staff', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE IF NOT EXISTS `patient` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Conatct` varchar(100) NOT NULL,
  `District` varchar(100) NOT NULL,
  `Aadhaar` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Status` varchar(100) NOT NULL,
  `Usertype` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`Id`, `Conatct`, `District`, `Aadhaar`, `Email`, `Status`, `Usertype`, `Password`) VALUES
(1, '9878766789', 'Alappuzha', '1234567890234567', 'anu@gmail.com', 'Inactive', 'user', 'anu');

-- --------------------------------------------------------

--
-- Table structure for table `patient_reg`
--

CREATE TABLE IF NOT EXISTS `patient_reg` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Hospital` varchar(100) NOT NULL,
  `Department` varchar(100) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Address` text NOT NULL,
  `Contact` varchar(100) NOT NULL,
  `City` varchar(100) NOT NULL,
  `District` varchar(100) NOT NULL,
  `Status` varchar(100) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `patient_reg`
--

INSERT INTO `patient_reg` (`Id`, `Hospital`, `Department`, `Name`, `Address`, `Contact`, `City`, `District`, `Status`) VALUES
(1, '4', 'Psychiatry', 'Thanku', 'Thanku villa', '9878977000', 'konni', 'Pathanamthitta', 'Admitted'),
(3, '4', 'Psychiatry', 'Ambili', 'Ambili villa', '9878977111', 'konni', 'Pathanamthitta', 'Admitted'),
(5, '4', 'Psychiatry', 'Sunu', 'Sunu house', '9878977000', 'konni', 'Pathanamthitta', 'Discharge');

-- --------------------------------------------------------

--
-- Table structure for table `police_registration`
--

CREATE TABLE IF NOT EXISTS `police_registration` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Hname` text NOT NULL,
  `Haddress` text NOT NULL,
  `Conatct` varchar(100) NOT NULL,
  `District` varchar(100) NOT NULL,
  `City` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Status` varchar(100) NOT NULL,
  `Usertype` varchar(100) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `police_registration`
--

INSERT INTO `police_registration` (`Id`, `Hname`, `Haddress`, `Conatct`, `District`, `City`, `Email`, `Password`, `Status`, `Usertype`) VALUES
(1, 'Konni', 'Konni Police', '7567886655', 'Pathanamthitta', 'Konni', 'konnipolice@gmail.com', 'konnipolice', 'Active', 'Police');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Hname` text NOT NULL,
  `Haddress` text NOT NULL,
  `Conatct` varchar(100) NOT NULL,
  `District` varchar(100) NOT NULL,
  `City` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Status` varchar(100) NOT NULL,
  `Usertype` varchar(100) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`Id`, `Hname`, `Haddress`, `Conatct`, `District`, `City`, `Email`, `Password`, `Status`, `Usertype`) VALUES
(3, 'Muthoot', 'Muthoot Pathanamthitta', '9495635070', 'Pathanamthitta', 'Pathanamthitta', 'muthoot@gmail.com', 'muthoot', 'Active', 'hospital'),
(4, 'BH', 'belivers Hospital', '987656000', 'Pathanamthitta', 'konni', 'bm@gmail.com', 'bm', 'Active', 'hospital');

-- --------------------------------------------------------

--
-- Table structure for table `replytime`
--

CREATE TABLE IF NOT EXISTS `replytime` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Rtime` varchar(100) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `replytime`
--

INSERT INTO `replytime` (`Id`, `Rtime`) VALUES
(2, '10:00AM-10:30AM'),
(3, '10:30AM-11:00AM'),
(4, '11:00AM-11:30AM'),
(5, '11:30AM-12:00PM'),
(6, '12:00PM-12:30PM');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE IF NOT EXISTS `staff` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Hospital` text NOT NULL,
  `Department` text NOT NULL,
  `Doctor` text NOT NULL,
  `Des` longtext NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`Id`, `Hospital`, `Department`, `Doctor`, `Des`, `Username`, `Password`) VALUES
(1, '4', 'Neurology', 'Minu', 'minu', '', ''),
(2, '4', 'Cardiology', 'Sanu', 'Sanu', '', ''),
(3, '4', 'Psychiatry', 'Aneeta', 'Aneeta', '', ''),
(4, '4', 'Psychiatry', 'Seena', 'Head Nurse', 'seena', 'seena');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
