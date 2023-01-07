-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 10, 2021 at 02:46 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bpwd_uas`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `CUST_CODE` varchar(6) NOT NULL,
  `CUST_NAME` varchar(40) NOT NULL,
  `CUST_CITY` varchar(35) DEFAULT NULL,
  `WORKING_AREA` varchar(35) NOT NULL,
  `CUST_COUNTRY` varchar(20) NOT NULL,
  `PHONE_NO` varchar(17) NOT NULL,
  PRIMARY KEY (`CUST_CODE`)
) ENGINE=InnoDB DEFAULT CHARSET=latin7;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`CUST_CODE`, `CUST_NAME`, `CUST_CITY`, `WORKING_AREA`, `CUST_COUNTRY`, `PHONE_NO`) VALUES
('C00001', 'Micheal', 'New York', 'New York', 'USA', 'CCCCCCC'),
('C00002', 'Bolt', 'New York', 'New York', 'USA', 'DDNRDRH'),
('C00003', 'Martin', 'Torento', 'Torento', 'Canada', 'MJYURFD'),
('C00004', 'Winston', 'Brisban', 'Brisban', 'Australia', 'AAAAAAA'),
('C00005', 'Sasikant', 'Mumbai', 'Mumbai', 'India', '147-25896312'),
('C00006', 'Shilton', 'Torento', 'Torento', 'Canada', 'DDDDDDD'),
('C00007', 'Ramanathan', 'Chennai', 'Chennai', 'India', 'GHRDWSD'),
('C00008', 'Karolina', 'Torento', 'Torento', 'Canada', 'HJKORED'),
('C00009', 'Ramesh', 'Mumbai', 'Mumbai', 'India', 'Phone No'),
('C00010', 'Charles', 'Hampshair', 'Hampshair', 'UK', 'MMMMMMM'),
('C00011', 'Sundariya', 'Chennai', 'Chennai', 'India', 'PPHGRTS'),
('C00012', 'Steven', 'San Jose', 'San Jose', 'USA', 'KRFYGJK'),
('C00013', 'Holmes', 'London', 'London', 'UK', 'BBBBBBB'),
('C00014', 'Rangarappa', 'Bangalore', 'Bangalore', 'India', 'AAAATGF'),
('C00015', 'Stuart', 'London', 'London', 'UK', 'GFSGERS'),
('C00016', 'Venkatpati', 'Bangalore', 'Bangalore', 'India', 'JRTVFDD'),
('C00017', 'Srinivas', 'Bangalore', 'Bangalore', 'India', 'AAAAAAB'),
('C00018', 'Fleming', 'Brisban', 'Brisban', 'Australia', 'NHBGVFC'),
('C00019', 'Yearannaidu', 'Chennai', 'Chennai', 'India', 'ZZZZBFV'),
('C00020', 'Albert', 'New York', 'New York', 'USA', 'BBBBSBB'),
('C00021', 'Jacks', 'Brisban', 'Brisban', 'Australia', 'WERTGDF'),
('C00022', 'Avinash', 'Mumbai', 'Mumbai', 'India', '113-12345678'),
('C00023', 'Karl', 'London', 'London', 'UK', 'AAAABAA'),
('C00024', 'Cook', 'London', 'London', 'UK', 'FSDDSDF'),
('C00025', 'Ravindran', 'Bangalore', 'Bangalore', 'India', 'AVAVAVA'),
('C00026', 'Otong Suratong', 'Pekanbaru', 'Pekanbaru', 'Indonesia', 'NOMORAPAAJABOLEH');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
