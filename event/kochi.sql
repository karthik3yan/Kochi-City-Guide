-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 04, 2019 at 03:57 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kochi`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('luvin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `bid` int(3) NOT NULL,
  `title` varchar(200) NOT NULL,
  `details` varchar(500) NOT NULL,
  `dateandtime` datetime NOT NULL,
  `views` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`bid`, `title`, `details`, `dateandtime`, `views`) VALUES
(1, 'Top 10 places to visit', '1. Fort Kochi\r\n\r\n\r\n2. Mattancherry\r\n\r\n\r\n3. Bolghatty & Vypeen Islands\r\n\r\n\r\n4. Lulu Shopping Mall, Edappally\r\n\r\n\r\n5. Malayattoor\r\n\r\n\r\n\r\n6. Cherai & Vypeen beach\r\n\r\n\r\n\r\n7. Kodanand Elephant Training Centre\r\n\r\n\r\n\r\n8. Andhakaranazhi Beach\r\n\r\n\r\n\r\n9. Marine Drive\r\n\r\n\r\n10. Hill Palace Museum', '2019-05-01 00:00:00', 20),
(2, 'uyf', 'gihglhbyg', '2019-05-16 00:00:00', 1),
(4, 'kbhj,', 'ljbjljn j\r\n\r\nkj', '2019-05-04 18:53:02', 0);

-- --------------------------------------------------------

--
-- Table structure for table `blogrequest`
--

CREATE TABLE `blogrequest` (
  `brid` int(11) NOT NULL,
  `btitle` varchar(200) NOT NULL,
  `bdetail` varchar(500) NOT NULL,
  `dateandtime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blogrequest`
--

INSERT INTO `blogrequest` (`brid`, `btitle`, `bdetail`, `dateandtime`) VALUES
(4, 'hello', 'hello world              ', '2019-05-04 19:03:46'),
(6, 'hello23', '              hello world 23', '2019-05-04 19:07:54');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `cid` int(3) NOT NULL,
  `bid` int(3) NOT NULL,
  `user` varchar(200) NOT NULL,
  `comment` varchar(500) NOT NULL,
  `dateandtime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`cid`, `bid`, `user`, `comment`, `dateandtime`) VALUES
(1, 1, 'karthik', '              hjj', '2019-05-04 13:14:05'),
(2, 1, 'karthik', '              Good Places', '2019-05-04 13:17:01');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `eid` int(11) NOT NULL,
  `ename` varchar(30) NOT NULL,
  `einfo` text NOT NULL,
  `date` date NOT NULL,
  `interests` int(20) NOT NULL,
  `charges` int(11) NOT NULL,
  `host` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`eid`, `ename`, `einfo`, `date`, `interests`, `charges`, `host`) VALUES
(1, 'Vh1 SuperSonic Kochi', 'Candice Redding is a French-Canadian DJ/Producer born in South Africa, currently residing in India. She\'s one of the most critically acclaimed entertainers within the subcontinent, recently ranked thesaasdasdasdasdasd', '2019-03-09', 4, 500, 'admin'),
(2, 'Lets Play HOLI', 'God\'s Own Music Festival is bringing back the madness to the hottest spot in town!\r\n\r\nJoin with your friends and family for the ultimate Holi Celebrations.\r\n\r\nMain Attractions:\r\nSiddharth Menon with h', '2019-03-23', 2, 500, 'admin'),
(3, 'party1', 'happeing at crown plaze', '2019-04-12', 0, 200, 'admin'),
(8, 'Explore', 'shsjhs ajhsg jah akjgkh ', '2019-05-24', 0, 100, 'admin'),
(10, 'hgv', '              k k hvhjhhbi', '2019-05-04', 0, 2000, 'karthik'),
(11, 'hgv', '              k k hvhjhhbi', '2019-05-04', 0, 2000, 'karthik');

-- --------------------------------------------------------

--
-- Table structure for table `eventbooking`
--

CREATE TABLE `eventbooking` (
  `bid` int(11) NOT NULL,
  `eid` int(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(200) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `zip` int(20) NOT NULL,
  `cardnumber` int(20) NOT NULL,
  `cardname` varchar(30) NOT NULL,
  `expmonth` int(10) NOT NULL,
  `expyear` varchar(10) NOT NULL,
  `cvv` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `eventbooking`
--

INSERT INTO `eventbooking` (`bid`, `eid`, `username`, `email`, `address`, `city`, `state`, `zip`, `cardnumber`, `cardname`, `expmonth`, `expyear`, `cvv`) VALUES
(1, 2, 'luvin', 'luvinsa@gmail.com', 'ernakulam', 'ernakulam', 'kerala', 683511, 0, '22222', 0, '2019', 222),
(2, 1, 'luvin', 'luvinsa@gmail.com', 'ernakulam', 'ernakulam', 'kerala', 683511, 0, '22222', 4, '2019', 222),
(3, 1, 'luvin', 'luvinsa@gmail.com', 'ernakulam', 'ernakulam', 'kerala', 683511, 0, '22', 4, '2019', 222),
(4, 2, 'luvin', 'luvinsa@gmail.com', 'ernakulam', 'ernakulam', 'kerala', 683511, 2222, 'sasas', 4, '2019', 222),
(5, 1, 'sanddeep', 'sanddeep@gmail.com', 'ernakulam', 'ernakulam', 'kerala', 683511, 123123, 'sandeep soman', 0, '2018', 22),
(6, 1, 'karthik', 'karthk@gmail.com', 'mg road', 'ernakulam', 'kerala', 683511, 2147483647, 'karthik', 0, '2021', 123);

-- --------------------------------------------------------

--
-- Table structure for table `eventrequest`
--

CREATE TABLE `eventrequest` (
  `erid` int(3) NOT NULL,
  `user` varchar(200) NOT NULL,
  `ename` varchar(200) NOT NULL,
  `edetail` varchar(400) NOT NULL,
  `charge` int(100) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `eventrequest`
--

INSERT INTO `eventrequest` (`erid`, `user`, `ename`, `edetail`, `charge`, `date`) VALUES
(3, 'karthik', 'hgv', '              k k hvhjhhbi', 2000, '2019-05-04');

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

CREATE TABLE `hotel` (
  `hid` int(11) NOT NULL,
  `hotelname` varchar(30) NOT NULL,
  `hoteldetails` varchar(200) NOT NULL,
  `hoteladdress` varchar(100) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hotel`
--

INSERT INTO `hotel` (`hid`, `hotelname`, `hoteldetails`, `hoteladdress`, `image`) VALUES
(1, 'Alica homes', 'Home Spacious Stay Airport Mansion is ideally located in the heart of Kochi. A perfect choice for the business and leisure travellers, the hotel offers quality comfort at unbelievable prices. Maintain', 'krk road, aluva , ernakulam 683511', 'hotel1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `prmocode`
--

CREATE TABLE `prmocode` (
  `pcid` int(3) NOT NULL,
  `Title` varchar(200) NOT NULL,
  `by` varchar(200) NOT NULL,
  `code` varchar(100) NOT NULL,
  `desc` varchar(400) NOT NULL,
  `expdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prmocode`
--

INSERT INTO `prmocode` (`pcid`, `Title`, `by`, `code`, `desc`, `expdate`) VALUES
(1, '20% off on all drinks', 'Tea Book', 'BL123', 'As a part of 1 year anniversary Get 20% off from teabook on all drinks', '2019-05-18'),
(2, '30% off on veg', 'Burger Hut', 'BL541', 'As a part of 5 year anniversary Get 30% off from burgerhut on all veg dishes', '2019-05-22'),
(4, '50% Offer on tea', 'coco tree', 'MN141', 'coco tree new offer', '2019-05-18');

-- --------------------------------------------------------

--
-- Table structure for table `resto`
--

CREATE TABLE `resto` (
  `rid` int(11) NOT NULL,
  `rname` varchar(100) NOT NULL,
  `rinfo` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `catigory` varchar(200) NOT NULL,
  `aseat` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resto`
--

INSERT INTO `resto` (`rid`, `rname`, `rinfo`, `address`, `catigory`, `aseat`) VALUES
(3, 'mustake', 'its located near sez and have a great ambience', 'ernakulam', 'multi', 20);

-- --------------------------------------------------------

--
-- Table structure for table `restobooking`
--

CREATE TABLE `restobooking` (
  `bid` int(11) NOT NULL,
  `rid` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `numbers` int(10) NOT NULL,
  `date` date NOT NULL,
  `email` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `restobooking`
--

INSERT INTO `restobooking` (`bid`, `rid`, `username`, `numbers`, `date`, `email`) VALUES
(1, 3, 'hgv', 4, '2019-05-03', ''),
(2, 3, '', 16, '2019-05-03', ''),
(3, 3, 'kjb', 2, '2019-05-10', 'jhb'),
(4, 3, 'kjb', 2, '2019-05-10', 'jhb'),
(5, 3, 'nb ', 1, '2019-05-04', 'b'),
(6, 3, 'nb ', 1, '2019-05-04', 'b'),
(7, 3, 'kh', 4, '2019-05-07', 'jhb');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `rid` int(3) NOT NULL,
  `user` varchar(200) NOT NULL,
  `star` int(100) NOT NULL,
  `comment` varchar(200) NOT NULL,
  `hid` int(3) NOT NULL,
  `dateandtime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`rid`, `user`, `star`, `comment`, `hid`, `dateandtime`) VALUES
(7, 'karthik2', 2, '              hgjh', 1, '2019-05-03 12:32:21'),
(8, 'luvin', 3, '              mb,m', 1, '2019-05-03 12:41:22'),
(10, 'ramesh', 4, 'Not a bad place to stay', 1, '2019-05-01 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'admin', 'luvinsa@gmail.com', 'kochipediya'),
(2, 'asas', 'luvinsaas@gmail.com', '2f3e9eccc22ee583cf7bad86c751d865'),
(3, 'luvin', 'luvi@gmail.com', '202cb962ac59075b964b07152d234b70'),
(4, 'a', 'a@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b'),
(5, 'k', 'dh@gmail.com', '202cb962ac59075b964b07152d234b70'),
(6, 'r', 'r@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b'),
(7, 'we', 'we@gmail.com', '0cc175b9c0f1b6a831c399e269772661'),
(8, 'rahul', 'r@gmal.com', '4b43b0aee35624cd95b910189b3dc231'),
(9, 'karthik', 'xkarthik97@gmail.com', '202cb962ac59075b964b07152d234b70');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`bid`);

--
-- Indexes for table `blogrequest`
--
ALTER TABLE `blogrequest`
  ADD PRIMARY KEY (`brid`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`cid`),
  ADD KEY `bid` (`bid`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`eid`);

--
-- Indexes for table `eventbooking`
--
ALTER TABLE `eventbooking`
  ADD PRIMARY KEY (`bid`);

--
-- Indexes for table `eventrequest`
--
ALTER TABLE `eventrequest`
  ADD PRIMARY KEY (`erid`);

--
-- Indexes for table `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`hid`);

--
-- Indexes for table `prmocode`
--
ALTER TABLE `prmocode`
  ADD PRIMARY KEY (`pcid`);

--
-- Indexes for table `resto`
--
ALTER TABLE `resto`
  ADD PRIMARY KEY (`rid`);

--
-- Indexes for table `restobooking`
--
ALTER TABLE `restobooking`
  ADD PRIMARY KEY (`bid`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`rid`),
  ADD KEY `hid` (`hid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `bid` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `blogrequest`
--
ALTER TABLE `blogrequest`
  MODIFY `brid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `cid` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `eid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `eventbooking`
--
ALTER TABLE `eventbooking`
  MODIFY `bid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `eventrequest`
--
ALTER TABLE `eventrequest`
  MODIFY `erid` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `hotel`
--
ALTER TABLE `hotel`
  MODIFY `hid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `prmocode`
--
ALTER TABLE `prmocode`
  MODIFY `pcid` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `resto`
--
ALTER TABLE `resto`
  MODIFY `rid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `restobooking`
--
ALTER TABLE `restobooking`
  MODIFY `bid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `rid` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
