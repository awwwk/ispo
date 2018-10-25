-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 22, 2018 at 03:03 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ISProject`
--

-- --------------------------------------------------------

--
-- Table structure for table `CLIENT`
--

CREATE TABLE `CLIENT` (
  `idcarowner` int(11) NOT NULL,
  `firstname` varchar(45) NOT NULL,
  `lastname` varchar(45) NOT NULL,
  `phonenumber` varchar(45) NOT NULL,
  `location` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `CLIENT`
--

INSERT INTO `CLIENT` (`idcarowner`, `firstname`, `lastname`, `phonenumber`, `location`, `password`) VALUES
(1, 'antony', 'tony', '0723088128', 'langata', 'Mmw1UWt5bjNtcnNKUXlXa05tNFJ5UT09'),
(3, 'antony', 'wand', '07230881289', 'langata', 'TWNDNFoxQit0M3FicG9ad3ROQzZEZz09');

-- --------------------------------------------------------

--
-- Table structure for table `GARAGE`
--

CREATE TABLE `GARAGE` (
  `garageid` int(11) NOT NULL,
  `garagename` varchar(45) NOT NULL,
  `phonenumber` varchar(45) NOT NULL,
  `location` varchar(45) NOT NULL,
  `specialization` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `GARAGE`
--

INSERT INTO `GARAGE` (`garageid`, `garagename`, `phonenumber`, `location`, `specialization`, `password`) VALUES
(1, 'la', '0723088128', 'langata', 'BMW', 'Mmw1UWt5bjNtcnNKUXlXa05tNFJ5UT09'),
(2, 'la', '07230881289', 'langata', 'BMW', 'LzRBUGJIS2pNNldmOWpUZ21WK0NOZz09'),
(3, 'spares', '072308812', 'kajiado', 'JEEP', 'SklyMFh2UUlWblFTYWFCRS9DNVJJdz09');

-- --------------------------------------------------------

--
-- Table structure for table `garagerequest`
--

CREATE TABLE `garagerequest` (
  `idgaragerequest` int(11) NOT NULL,
  `idcarowner` int(11) NOT NULL,
  `details` varchar(45) NOT NULL,
  `dateofrequest` date NOT NULL,
  `dateofservice` date NOT NULL,
  `location` varchar(45) NOT NULL,
  `carmodel` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `garagerequest`
--

INSERT INTO `garagerequest` (`idgaragerequest`, `idcarowner`, `details`, `dateofrequest`, `dateofservice`, `location`, `carmodel`) VALUES
(1, 3, ' bcasmnjcjss snhs', '2018-09-26', '2018-09-20', 'langata', 'toyota'),
(2, 3, ' zvzjKHG', '2018-10-03', '2018-09-20', 'nairobin', 'BMW m7');

-- --------------------------------------------------------

--
-- Table structure for table `MECHANIC`
--

CREATE TABLE `MECHANIC` (
  `mechanicid` int(11) NOT NULL,
  `firstname` varchar(45) NOT NULL,
  `lastname` varchar(45) NOT NULL,
  `phonenumber` varchar(45) NOT NULL,
  `location` varchar(45) NOT NULL,
  `experience` varchar(45) NOT NULL,
  `specialization` varchar(45) NOT NULL,
  `garagelocated` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `MECHANIC`
--

INSERT INTO `MECHANIC` (`mechanicid`, `firstname`, `lastname`, `phonenumber`, `location`, `experience`, `specialization`, `garagelocated`, `password`) VALUES
(7, 'antony', 'wansssseri', '0723088128', 'langata', '6', 'BMW', 'lA', 'LzRBUGJIS2pNNldmOWpUZ21WK0NOZz09'),
(8, 'phillip', 'james', '072308812890', 'langata', '6', 'JEEP', 'none', 'TWNDNFoxQit0M3FicG9ad3ROQzZEZz09');

-- --------------------------------------------------------

--
-- Table structure for table `mechanicrequest`
--

CREATE TABLE `mechanicrequest` (
  `idmechanicrequest` int(11) NOT NULL,
  `idcarowner` int(11) NOT NULL,
  `details` varchar(455) NOT NULL,
  `dateofrequest` date NOT NULL,
  `dateofservice` date NOT NULL,
  `location` varchar(45) NOT NULL,
  `carmodel` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mechanicrequest`
--

INSERT INTO `mechanicrequest` (`idmechanicrequest`, `idcarowner`, `details`, `dateofrequest`, `dateofservice`, `location`, `carmodel`) VALUES
(1, 5, 'Incharge of ensuring that all sparepart dealers are genuine and that the parts they supply are certified and from reliable sources.', '2018-11-05', '2018-09-29', 'langata', 'BMW'),
(2, 26, 'Incharge of ensuring that all sparepart deale', '2018-09-26', '2018-09-20', 'nairobin', 'toyota'),
(3, 26, ' bz cbz,nM', '2018-09-26', '2018-09-20', 'langata', 'toyota'),
(4, 3, ' of ensuring that all sparepart dealers are genuine and that the parts they supply are certified and from reliable sources.', '2018-09-26', '2018-09-20', '0723088128', 'toyota'),
(5, 3, 'Incharge of ensuring that all sparepart dealers are genuine and that the parts they supply are certified and from reliable sources.', '2018-09-26', '2018-09-20', 'lA', 'toyota');

-- --------------------------------------------------------

--
-- Table structure for table `serviceGQ`
--

CREATE TABLE `serviceGQ` (
  `idserviceGQ` int(11) NOT NULL,
  `idgaragerequest` int(11) NOT NULL,
  `idcarowner` int(11) NOT NULL,
  `garageid` int(11) NOT NULL,
  `servicecost` varchar(45) NOT NULL,
  `servicedate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `serviceMQ`
--

CREATE TABLE `serviceMQ` (
  `idserviceMQ` int(11) NOT NULL,
  `mechanicid` int(11) NOT NULL,
  `idmechanicrequest` int(11) NOT NULL,
  `idcarowner` int(11) NOT NULL,
  `servicecost` varchar(45) NOT NULL,
  `servicedate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sparepart`
--

CREATE TABLE `sparepart` (
  `idsparepart` int(11) NOT NULL,
  `idcarowner` int(11) NOT NULL,
  `spname` varchar(45) NOT NULL,
  `spmanufacturer` varchar(45) NOT NULL,
  `spmodel` varchar(45) NOT NULL,
  `spdescription` varchar(45) NOT NULL,
  `carmodel` varchar(45) NOT NULL,
  `pieces` varchar(45) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sparepart`
--

INSERT INTO `sparepart` (`idsparepart`, `idcarowner`, `spname`, `spmanufacturer`, `spmodel`, `spdescription`, `carmodel`, `pieces`, `date`) VALUES
(21, 0, 'rings', 'toyota', '1234', 'shock springs', 'toyota', '12', '2018-10-24'),
(22, 0, 'spring', 'toyota', '1234', 'engine rings', 'toyota', '12', '2018-11-01'),
(23, 0, 'toyota', 'BMW', '1234', 'shock springs', 'toyota', '12', '2018-11-01'),
(24, 0, 'toyota', 'toyota', '1234', 'shock springs', 'BMW', '12', '2018-10-12'),
(25, 0, 'spring', 'toyota', 'German/ UAE', 'shock springs', 'toyota', '12', '2018-11-01'),
(26, 0, 'rings', 'BMW', '1234', 'shock springs', 'toyota', '12', '2018-11-01'),
(27, 0, 'spring', 'toyota', '1234', 'engine rings', 'BMW', '1232', '2018-11-08'),
(28, 0, 'spring', 'toyota', '1234', 'shock springs', 'toyota', '12', '2018-11-08'),
(29, 0, 'toyota', 'BMW', '1234', 'shock springs', 'toyota', '1232', '2018-11-10'),
(30, 2, 'toyota', 'BMW', '1234', 'engine rings', 'BMW m7', '1', '2018-11-10'),
(31, 0, 'spring', 'toyota', '1234', 'shock springs', 'toyota', '1232', '2018-09-27'),
(32, 2, 'spring', 'toyota', '1234', 'shock springs', 'toyota', '12', '2018-11-01'),
(33, 3, 'spring', 'toyota', '1234', 'shock springs', 'toyota', '12', '2018-11-08'),
(34, 3, 'spring', 'toyota', '1234', 'shock springs', 'toyota', '12', '2018-11-08'),
(35, 3, 'spring', 'toyota', '1234', 'shock springs', 'toyota', '1', '2018-11-05'),
(36, 1, 'spring', 'toyota', 'German/ UAE', 'shock springs', 'BMW', '1232', '2018-11-09'),
(37, 723088128, 'spring', 'BMW', '1234', 'engine rings', 'toyota', '1232', '2018-09-27'),
(38, 1, 'toyota', 'toyota', 'German/ UAE', 'engine rings', 'BMW', '1', '2018-09-27'),
(39, 723088128, 'spring', 'toyota', '1234', 'shock springs', 'toyota', '2', '2018-09-27');

-- --------------------------------------------------------

--
-- Table structure for table `SPD`
--

CREATE TABLE `SPD` (
  `idspDealer` int(11) NOT NULL,
  `firstname` varchar(45) NOT NULL,
  `lastname` varchar(45) NOT NULL,
  `phonenumber` varchar(45) NOT NULL,
  `location` varchar(45) NOT NULL,
  `specialty` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `SPD`
--

INSERT INTO `SPD` (`idspDealer`, `firstname`, `lastname`, `phonenumber`, `location`, `specialty`, `password`) VALUES
(1, 'phillip', 'james', '0723088128', 'langata', 'BMW', 'LzRBUGJIS2pNNldmOWpUZ21WK0NOZz09');

-- --------------------------------------------------------

--
-- Table structure for table `spQuotation`
--

CREATE TABLE `spQuotation` (
  `idspQuotation` int(11) NOT NULL,
  `idspDealer` int(11) NOT NULL,
  `idsparepart` int(11) NOT NULL,
  `idcarowner` int(11) NOT NULL,
  `mechanicid` int(11) NOT NULL,
  `garageid` int(11) NOT NULL,
  `priceperpiece` varchar(45) NOT NULL,
  `totalprice` varchar(45) NOT NULL,
  `deliverystatus` varchar(45) NOT NULL,
  `manufacturer` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `CLIENT`
--
ALTER TABLE `CLIENT`
  ADD PRIMARY KEY (`idcarowner`),
  ADD UNIQUE KEY `phonenumber` (`phonenumber`);

--
-- Indexes for table `GARAGE`
--
ALTER TABLE `GARAGE`
  ADD PRIMARY KEY (`garageid`);

--
-- Indexes for table `garagerequest`
--
ALTER TABLE `garagerequest`
  ADD PRIMARY KEY (`idgaragerequest`,`idcarowner`),
  ADD KEY `fkIdx_114` (`idcarowner`);

--
-- Indexes for table `MECHANIC`
--
ALTER TABLE `MECHANIC`
  ADD PRIMARY KEY (`mechanicid`);

--
-- Indexes for table `mechanicrequest`
--
ALTER TABLE `mechanicrequest`
  ADD PRIMARY KEY (`idmechanicrequest`,`idcarowner`),
  ADD KEY `fkIdx_110` (`idcarowner`);

--
-- Indexes for table `serviceGQ`
--
ALTER TABLE `serviceGQ`
  ADD PRIMARY KEY (`idserviceGQ`,`idgaragerequest`,`idcarowner`,`garageid`),
  ADD KEY `fkIdx_117` (`idgaragerequest`,`idcarowner`),
  ADD KEY `fkIdx_121` (`garageid`);

--
-- Indexes for table `serviceMQ`
--
ALTER TABLE `serviceMQ`
  ADD PRIMARY KEY (`idserviceMQ`,`mechanicid`,`idmechanicrequest`,`idcarowner`),
  ADD KEY `fkIdx_104` (`mechanicid`),
  ADD KEY `fkIdx_107` (`idmechanicrequest`,`idcarowner`);

--
-- Indexes for table `sparepart`
--
ALTER TABLE `sparepart`
  ADD PRIMARY KEY (`idsparepart`,`idcarowner`),
  ADD KEY `fkIdx_89` (`idcarowner`);

--
-- Indexes for table `SPD`
--
ALTER TABLE `SPD`
  ADD PRIMARY KEY (`idspDealer`);

--
-- Indexes for table `spQuotation`
--
ALTER TABLE `spQuotation`
  ADD PRIMARY KEY (`idspQuotation`,`idspDealer`,`idsparepart`,`idcarowner`,`mechanicid`,`garageid`),
  ADD KEY `fkIdx_86` (`idspDealer`),
  ADD KEY `fkIdx_98` (`idsparepart`,`idcarowner`,`mechanicid`,`garageid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `CLIENT`
--
ALTER TABLE `CLIENT`
  MODIFY `idcarowner` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `GARAGE`
--
ALTER TABLE `GARAGE`
  MODIFY `garageid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `garagerequest`
--
ALTER TABLE `garagerequest`
  MODIFY `idgaragerequest` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `MECHANIC`
--
ALTER TABLE `MECHANIC`
  MODIFY `mechanicid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `mechanicrequest`
--
ALTER TABLE `mechanicrequest`
  MODIFY `idmechanicrequest` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `serviceGQ`
--
ALTER TABLE `serviceGQ`
  MODIFY `idserviceGQ` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `serviceMQ`
--
ALTER TABLE `serviceMQ`
  MODIFY `idserviceMQ` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sparepart`
--
ALTER TABLE `sparepart`
  MODIFY `idsparepart` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `SPD`
--
ALTER TABLE `SPD`
  MODIFY `idspDealer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `spQuotation`
--
ALTER TABLE `spQuotation`
  MODIFY `idspQuotation` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
