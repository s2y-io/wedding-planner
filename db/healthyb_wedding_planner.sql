-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 04, 2021 at 06:09 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `healthyb_wedding_planner`
--

-- --------------------------------------------------------

--
-- Table structure for table `couplereg`
--

CREATE TABLE `couplereg` (
  `idcouplereg` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `weddingdate` varchar(20) NOT NULL,
  `regdate` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `couplereg`
--

INSERT INTO `couplereg` (`idcouplereg`, `name`, `email`, `password`, `weddingdate`, `regdate`) VALUES
(1, 'Shan', 'shan@gmail.com', '123', '11/30/2020', '11/30/2021'),
(2, 'Oshadi', 'oshi@gmail.com', '1234', '25/02/2020', '25/02/2021'),
(3, 'Saranga', 'saranga@gmail.com', '456', '04/10/2021', '04/10/2022'),
(4, 'Yasith', 'yasith@gmail.com', 'qwe', '17/05/2021', '17/05/2022'),
(5, 'Imaya', 'imaya@gmail.com', 'asd', '10/03/2020', '10/03/2021'),
(8, 'test1', 'test1@gmail.com', '123', '03/03/2021', '2021/02/28'),
(9, 'NImal ', 'nimal@gmail.com', '123', '04/30/2021', '2021/04/25'),
(10, 'oshadi', 'kithmini90@gmail.com', '123', '05/31/2021', '2021/05/02');

-- --------------------------------------------------------

--
-- Table structure for table `cpltodolist`
--

CREATE TABLE `cpltodolist` (
  `idcpltodolist` int(10) UNSIGNED NOT NULL,
  `title` longtext NOT NULL,
  `dodate` varchar(45) NOT NULL,
  `cpleID` varchar(45) NOT NULL,
  `comflag` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cpltodolist`
--

INSERT INTO `cpltodolist` (`idcpltodolist`, `title`, `dodate`, `cpleID`, `comflag`) VALUES
(1, 'Book Hotel', '2019/01/01', '5', '1'),
(2, 'Book Photographer', '2019/01/01', '5', '0'),
(4, 'Design Wedding Card', '2019/01/23', '5', '0'),
(5, 'Call Rent a Car', '2018/12/26', '5', '1'),
(6, 'Book Flowers', '2019/02/06', '5', '0'),
(7, 'Print Wedding Cards', '2021/03/30', '1', '1'),
(8, 'Test', '2021/03/24', '1', '0');

-- --------------------------------------------------------

--
-- Table structure for table `district`
--

CREATE TABLE `district` (
  `iddistrict` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `province` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `district`
--

INSERT INTO `district` (`iddistrict`, `name`, `province`) VALUES
(1, 'Gampaha', 'Western'),
(2, 'Colombo', 'Western'),
(3, 'Kalutara', 'Western'),
(4, 'test1', 'Northern');

-- --------------------------------------------------------

--
-- Table structure for table `exhibitions`
--

CREATE TABLE `exhibitions` (
  `idexhibitions` int(10) UNSIGNED NOT NULL,
  `exhiname` varchar(255) NOT NULL,
  `exhidiscription` longtext NOT NULL,
  `exhifromdate` varchar(45) NOT NULL,
  `exhitodate` varchar(45) NOT NULL,
  `excontactno` varchar(45) NOT NULL,
  `delflag` varchar(45) NOT NULL,
  `eximage` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `exhibitions`
--

INSERT INTO `exhibitions` (`idexhibitions`, `exhiname`, `exhidiscription`, `exhifromdate`, `exhitodate`, `excontactno`, `delflag`, `eximage`) VALUES
(1, 'Kids Birthday Party', 'Join with us and enjoy your day. National kite festival.come with your kites and win prizes', '2021-02-28', '2021-02-28', '0715781663', '0', 'uploads/exhi/event1.jpg'),
(2, 'Sunfest', 'Join with us and enjoy your day. National kite festival.come with your kites and win prizes', '2021-03-21', '2021-03-22', '0715781662', '0', 'uploads/exhi/event6.jpg'),
(3, 'Jana Sangeetha', 'Jana Sangeetha Prasangaya', '2021-04-15', '2021-04-17', '07785213366', '0', 'uploads/exhi/event3.jpg'),
(4, 'Mamma Mia', 'International Tour', '2021-04-03', '2021-04-04', '0715718663', '0', 'uploads/exhi/event5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `galleryimages`
--

CREATE TABLE `galleryimages` (
  `idgalleryImages` int(10) UNSIGNED NOT NULL,
  `magno` varchar(255) NOT NULL,
  `regdate` varchar(45) NOT NULL,
  `imagepath` longtext NOT NULL,
  `delflag` int(10) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `galleryimages`
--

INSERT INTO `galleryimages` (`idgalleryImages`, `magno`, `regdate`, `imagepath`, `delflag`) VALUES
(1, 'SHAN & OSHADI', '2021/05/01', 'uploads/post-img-4.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `guesttable`
--

CREATE TABLE `guesttable` (
  `idguesttable` int(10) UNSIGNED NOT NULL,
  `guestname` varchar(255) NOT NULL,
  `tableno` varchar(45) NOT NULL,
  `cplid` varchar(45) NOT NULL,
  `delflag` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `guesttable`
--

INSERT INTO `guesttable` (`idguesttable`, `guestname`, `tableno`, `cplid`, `delflag`) VALUES
(8, '1', '1', '5', '0'),
(9, '2', '1', '5', '0'),
(10, '3', '2', '5', '1'),
(11, '5', '2', '5', '1'),
(12, '3', '3', '5', '0'),
(13, '5', '4', '5', '0'),
(14, '6', '1', '7', '0'),
(15, '7', '1', '1', '0'),
(16, '8', '1', '1', '0'),
(17, '9', '2', '1', '0'),
(18, '10', '2', '1', '0'),
(19, '12', '3', '1', '0'),
(20, '11', '2', '1', '0');

-- --------------------------------------------------------

--
-- Table structure for table `magazineadd`
--

CREATE TABLE `magazineadd` (
  `idmagazineadd` int(10) UNSIGNED NOT NULL,
  `magno` varchar(45) NOT NULL,
  `regdate` varchar(45) NOT NULL,
  `imagepath` longtext NOT NULL,
  `delflag` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `magazineadd`
--

INSERT INTO `magazineadd` (`idmagazineadd`, `magno`, `regdate`, `imagepath`, `delflag`) VALUES
(1, 'page 01', '2018/12/10', 'uploads/mag1.jpg', '0'),
(2, 'page 02', '2018/12/10', 'uploads/mag2.jpg', '0'),
(3, 'page 03', '2018/12/10', 'uploads/mag3.jpg', '0'),
(4, 'page 04', '2018/12/10', 'uploads/mag4.jpg', '0'),
(5, 'page 05', '2018/12/10', 'uploads/mag5.jpg', '0'),
(6, 'page 06', '2018/12/10', 'uploads/mag6.jpg', '0');

-- --------------------------------------------------------

--
-- Table structure for table `makereq`
--

CREATE TABLE `makereq` (
  `idmakereq` int(10) UNSIGNED NOT NULL,
  `cusname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(45) NOT NULL,
  `wedate` varchar(45) NOT NULL,
  `comments` longtext NOT NULL,
  `del_flag` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `venid` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `makereq`
--

INSERT INTO `makereq` (`idmakereq`, `cusname`, `email`, `mobile`, `wedate`, `comments`, `del_flag`, `venid`) VALUES
(2, 'SHAN ANUSHKA', 'kithmini90@gmail.com', '0715781663', '05/19/2021', 'This is a comment', 0, 0),
(3, 'kithmini', 'kithmi@gmail.com', '33443343', '05/31/2021', 'ttt', 0, 1),
(4, 'oshi', 'kithmi@gmail.com', '33443343', '05/31/2021', 'test req', 0, 1),
(5, 'oshi', 'kithmi@gmail.com', '334455667788', '06/01/2021', 'Is this date available?', 0, 3);

-- --------------------------------------------------------

--
-- Table structure for table `newguest`
--

CREATE TABLE `newguest` (
  `idnewguest` int(10) UNSIGNED NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(45) NOT NULL,
  `address` longtext NOT NULL,
  `telephone` varchar(45) NOT NULL,
  `inviteflag` varchar(45) NOT NULL,
  `acceptflag` varchar(45) NOT NULL,
  `declinedflag` varchar(45) NOT NULL,
  `delflag` varchar(45) NOT NULL,
  `regdate` varchar(45) NOT NULL,
  `cuplid` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `newguest`
--

INSERT INTO `newguest` (`idnewguest`, `fullname`, `email`, `mobile`, `address`, `telephone`, `inviteflag`, `acceptflag`, `declinedflag`, `delflag`, `regdate`, `cuplid`) VALUES
(1, 'Shan Anushka', 'anushka.shan7@gmail.com', '0715781663', '408/5A, 3rd Lane, Samanpura, Kottawa, Pannipitiya', '0113649917', '0', '0', '1', '0', '2018/12/03', '5'),
(2, 'Kithmini Oshadi', 'oshi@gmail.com', '077458967', '408/5A, 3rd Lane, Samanpura, Kottawa, Pannipitiya', '0112546887', '1', '0', '1', '0', '2018/12/03', '5'),
(3, 'Saman', 'anushka.shan7@gmail.com', '0715781663', 'Galle', '0112548976', '1', '1', '1', '0', '2018/12/04', '5'),
(5, 'Nimal Priyashantha', 'anushka.shan7@gmail.com', '0715781663', 'Aluthnuwara', '+94715781663', '1', '0', '1', '0', '2018/12/05', '5'),
(6, 'Test Guest', 'anushka.shan7@gmail.com', '715781663', '408/5A, 3rd Lane, Samanpura, Kottawa, Pannipitiya', '+94715781663', '1', '0', '1', '0', '2019/01/31', '7'),
(7, 's', 'anushka.shan7@gmail.com', '+94715781663', '408/5A, 3rd Lane, Samanpura, Kottawa, Pannipitiya', '+94715781663', '1', '1', '1', '0', '2021/03/21', '1'),
(8, 'Oshadi', 'oshi@gmail.com', '0777777777', 'Samanpura', '01447555566', '0', '0', '1', '0', '2021/04/18', '1'),
(9, 'Saranga', 'Saranga@gmail.com', '0715555555', 'Colombo', '01124548456', '0', '0', '1', '0', '2021/04/18', '1'),
(10, 'Yasith', 'yasith@gamil.com', '0715654654', 'Colombo', '0112468456', '0', '0', '1', '0', '2021/04/18', '1'),
(11, 'Yasith', 'yasith@gamil.com', '0715654654', 'Colombo', '0112468456', '0', '0', '1', '0', '2021/04/18', '1'),
(12, 'Imaya', 'imaya@gmail.com', '07146546515', 'Colombo', '01124654684', '1', '0', '1', '0', '2021/04/18', '1');

-- --------------------------------------------------------

--
-- Table structure for table `newlisting`
--

CREATE TABLE `newlisting` (
  `idnewlisting` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `tel` varchar(45) NOT NULL,
  `address` longtext NOT NULL,
  `web` longtext NOT NULL,
  `descripton` longtext NOT NULL,
  `lat` varchar(45) NOT NULL,
  `longtitude` varchar(45) NOT NULL,
  `imageven` varchar(255) NOT NULL,
  `videolink` varchar(255) NOT NULL,
  `fb` varchar(255) NOT NULL,
  `twt` varchar(255) NOT NULL,
  `insta` varchar(255) NOT NULL,
  `regdate` varchar(45) NOT NULL,
  `approveflag` varchar(45) NOT NULL,
  `delflag` varchar(45) NOT NULL,
  `venid` varchar(45) NOT NULL,
  `mobileno` varchar(45) NOT NULL,
  `topflag` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `newlisting`
--

INSERT INTO `newlisting` (`idnewlisting`, `title`, `tel`, `address`, `web`, `descripton`, `lat`, `longtitude`, `imageven`, `videolink`, `fb`, `twt`, `insta`, `regdate`, `approveflag`, `delflag`, `venid`, `mobileno`, `topflag`) VALUES
(1, 'STUDIO 3000', '0112456789', '408/5A, 3rd Lane, Samanpura, Kottawa, Pannipitiya', 'https://www.studio300.lk', 'We Have Developed A Range Of Services That Meet Our Clients’ Needs.Ranging From: Full Wedding Coordination,  Tailor Made Services, Day Coordination,Pre-Wedding Events, Vendor Sourcing.We Also Organise  Birthdays,  Engagements & Corporate Events ', '6.9271', '79.8612', 'uploads/Studio_3000DF.png', '0001227UTC2018', '', '', '', '2018/11/27', '1', '0', '1', '0715781662', '1'),
(2, 'CHEF WARM', '0112856478', '408/5A, 3rd Lane, Samanpura, Kottawa, Pannipitiya', '', '', '6.9271', '79.8612', 'uploads/Chef_warm.jpg', '', '', '', '', '2018/11/27', '1', '0', '1', '0718469572', '0'),
(3, 'GRAND MONARCH', '0112256458', '408/5A, 3rd Lane, Samanpura, Kottawa, Pannipitiya', '', '', '6.9271', '79.8612', 'uploads/gm.jpeg', 'gfrsgew', '', '', '', '2018/11/27', '1', '0', '1', '0774815497', '1'),
(4, 'CHEF WARM', '0112856475', '408/5A, 3rd Lane, Samanpura, Kottawa, Pannipitiya', '', '<p>dfsdf fsdfs sdfdsf</p>', '6.9271', '79.8612', 'uploads/Chef_warm.jpg', '', '', '', '', '2018/11/27', '1', '0', '1', '0762498654', '0'),
(5, 'PORUWA', '0715781663', '50, Kandy', '', '', '6.9271', '79.8612', 'uploads/Chef_warm.jpg', '', '', '', '', '2018/11/27', '0', '0', '1', '0754568521', '0'),
(6, 'HOTEL ABC', '0112356487', '46/5, Galle', '', '', '6.9271', '79.8612', 'uploads/Chef_warm.jpg', '', '', '', '', '2018/11/27', '0', '0', '1', '0758461555', '0'),
(7, 'IMAGEI', '0754896125', '23/8, Delgoda, BAdulla', '', '', '6.9271', '79.8612', 'uploads/Chef_warm.jpg', '', '', '', '', '2018/11/27', '0', '0', '1', '0775485536', '0'),
(8, 'TRIO', '0112546984', '#45/8, Ranwala, Kegalle', '', '', '6.9271', '79.8612', 'uploads/Chef_warm.jpg', '', '', '', '', '2018/11/27', '0', '0', '1', '0715551651', '0'),
(9, 'MALSHAN FLORA', '0115647895', 'Samanpura, Kottawa', '', '', '6.9271', '79.8612', 'uploads/Chef_warm.jpg', '', '', '', '', '2018/11/27', '0', '0', '1', '0758451621', '0'),
(10, 'HOME LANDS', '0112769854', '408/5A, 3rd Lane, Samanpura, Kottawa, Pannipitiya', 'www.shan.com', '<p>dfsdf dfsdf sdgdsgsd gsdgsdgs dgwrgtwr&nbsp;</p>', '6.9271', '79.8612', 'uploads/Chef_warm.jpg', '', '', '', '', '2018/11/27', '1', '0', '1', '0714685249', '0'),
(11, 'ASHTAKA MAHA GEDARA', '0775645651', '405/5S, Colombo Rd, Galle', '', '<h1>Shan Anushka</h1><p><b>Kithmini Oshadi</b></p>', '6.9271', '79.8612', 'uploads/Chef_warm.jpg', '', '', '', '', '2018/11/27', '0', '0', '1', '0725486955', '0'),
(12, 'SOUTHERN FRUITS', '0914562147', '405/5S, Colombo Rd, Galle', 'www.sf.com', '<p>New fruits for every wedding</p>', '6.9271', '79.8612', 'uploads/Chef_warm.jpg', '', '', '', '', '2018/11/30', '1', '0', '1', '0714578561', '0'),
(13, 'NELUMA', '0715781665', '408/5A, 3rd Lane, Thalawathugoda', '', '<p>This the best pharmacy i have ever heard</p>', '6.9271', '79.8612', 'uploads/Studio_3000DF_Cars.png', '', '', '', '', '2018/12/01', '0', '0', '1', '+94715781663', '1'),
(14, 'GRANDMONARCH', '0571578166', '408/5A, 3rd Lane, Samanpura, Kottawa, Pannipitiya', 'www.shan.com', '<p>mama shanmama shanmama shanmama shanmama shanmama shanmama shanmama shanmama shanmama shanmama shanmama shanmama shanmama shanmama shanmama shanmama shanmama shanmama shanmama shanmama shanmama shanmama shanmama shanmama shanmama shanmama shanmama shanmama shanmama shanmama shanmama shanmama shanmama shanmama shanmama shanmama shanmama shanmama shanmama shanmama shan<br></p>', '9.9271', '79.8612', 'uploads/The_swiss_Resident.png', '', '', '', '', '2018/12/02', '0', '0', '1', '+94715781663', '0'),
(15, 'SASHINDU CATRES', '01123465465', '405/5S, Colombo Rd, Galle', '', '', '', '', 'uploads/fragile-or-breakable-material-packaging-symbol.jpg', '', '', '', '', '2021/02/01', '0', '0', '', '07584698224', '0'),
(16, 'STUDIO 3000 CARS', '0715781663', '408/5A, 3rd Lane, Samanpura, Kottawa, Pannipitiya', 'www.azx.lk', '<p>Test description</p>', '6.9271', '79.8612', 'uploads/Studio_3000DF_Cars.png', '', '', '', '', '2021/03/21', '1', '0', '1', '+94715781663', '1'),
(17, 'Neesha Salon', '0715781663', 'Neesha mAharagama', '', '', '6.9271', '79.8612', 'uploads/cooper-convertible-exterior-right-front-three-quarter.jpeg', '', '', '', '', '2021/04/25', '0', '0', '7', '0715781663', '0'),
(20, 'sss', '+94715781663', '408/5A, 3rd Lane, Samanpura, Kottawa, Pannipitiya', '', '', '6.9271', '79.8612', 'uploads/vendor-carousel-img-4.jpg', '', '', '', '', '2021/04/25', '1', '0', '7', '+94715781663', '0'),
(21, 'ad', '+94715781663', '408/5A, 3rd Lane, Samanpura, Kottawa, Pannipitiya', '', '', '6.9271', '79.8612', 'uploads/ashtaka.jpg', '', '', '', '', '2021/04/25', '0', '0', '7', '+94715781663', '0'),
(26, 'tt', '123456', '4trgtg', '', '', '6.9271', '79.8612', 'uploads/vendor-carousel-img-1.jpg', '', '', '', '', '2021/05/02', '0', '0', '1', '3444', '0');

-- --------------------------------------------------------

--
-- Table structure for table `offerstbl`
--

CREATE TABLE `offerstbl` (
  `idofferstbl` int(10) UNSIGNED NOT NULL,
  `offersname` varchar(255) NOT NULL,
  `offersdiscription` longtext NOT NULL,
  `offersfromdate` varchar(45) NOT NULL,
  `offerstodate` varchar(45) NOT NULL,
  `offerscontactno` varchar(45) NOT NULL,
  `delflag` varchar(45) NOT NULL,
  `offersimage` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `offerstbl`
--

INSERT INTO `offerstbl` (`idofferstbl`, `offersname`, `offersdiscription`, `offersfromdate`, `offerstodate`, `offerscontactno`, `delflag`, `offersimage`) VALUES
(1, 'New Offers', 'Offer Description', '2021-04-22', '2021-04-23', '0715781663', '0', 'uploads/off1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `proposaltbl`
--

CREATE TABLE `proposaltbl` (
  `idproposaltbl` int(10) UNSIGNED NOT NULL,
  `profname` varchar(255) NOT NULL,
  `progender` varchar(45) NOT NULL,
  `probdate` varchar(45) NOT NULL,
  `procaste` varchar(45) NOT NULL,
  `proreligion` varchar(45) NOT NULL,
  `proheight` varchar(45) NOT NULL,
  `pronic` varchar(45) NOT NULL,
  `proprovine` varchar(100) NOT NULL,
  `procity` varchar(100) NOT NULL,
  `delflag` varchar(45) NOT NULL,
  `proimage` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `proposaltbl`
--

INSERT INTO `proposaltbl` (`idproposaltbl`, `profname`, `progender`, `probdate`, `procaste`, `proreligion`, `proheight`, `pronic`, `proprovine`, `procity`, `delflag`, `proimage`) VALUES
(1, 'R.A. Shan Anushka', 'Male', '1989-02-25', 'Bodu Govi', 'Buddist', '170', '890561209v', 'Southern', 'Galle', '0', 'uploads/prop/review-pic-1.jpg'),
(2, 'Kithmini Oshadi', 'Female', '1990-10-08', 'Bodu Govi', 'Buddist', '165', '907820017v', 'Western', 'Kottawa', '0', 'uploads/prop/review-pic-2.jpg'),
(3, 'Saranga', 'Male', '1989-05-31', 'Bodu Govi', 'Buddist', '150', '890512482v', 'Western', 'Gamunupura', '0', 'uploads/prop/team-member-5.jpg'),
(4, 'Yasith', 'Male', '1990-09-19', 'Bodu Govi', 'Buddist', '150', '904251264v', 'Western', 'Kottawa', '0', 'uploads/prop/couple1.jpg'),
(5, 'Imaya', 'Female', '1990-02-28', 'Bodu Govi', 'Buddist', '165', '907852461v', 'Western', 'Kottawa', '0', 'uploads/prop/couple1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `province`
--

CREATE TABLE `province` (
  `idprovince` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `province`
--

INSERT INTO `province` (`idprovince`, `name`) VALUES
(1, 'Northern'),
(2, 'North Western'),
(3, 'Western'),
(4, 'North Central'),
(5, 'Central'),
(6, 'Sabaragamuwa'),
(7, 'Eastern'),
(8, 'Uva'),
(9, 'Southern');

-- --------------------------------------------------------

--
-- Table structure for table `useregistry`
--

CREATE TABLE `useregistry` (
  `iduseregistry` int(10) UNSIGNED NOT NULL,
  `usertype` varchar(45) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(45) NOT NULL,
  `address` longtext NOT NULL,
  `password` varchar(45) NOT NULL,
  `delflag` varchar(45) NOT NULL,
  `regdate` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `useregistry`
--

INSERT INTO `useregistry` (`iduseregistry`, `usertype`, `fname`, `email`, `mobile`, `address`, `password`, `delflag`, `regdate`) VALUES
(1, 'Admin', 'Shan', 'shan@gmail.com', '07123456784', '408/5A, 3rd Lane, Samanpura, Kottawa, Pannipitiya', '123', '0', '2021/02/23'),
(2, 'Admin', 'Oshadi', 'oshadi@gmail.com', '07712345678', '59/33B, Pasal Mawatha, Rukmale', '4569', '0', '2021/02/23'),
(3, 'Admin', 'Saranga', 'sara@gmail.com', '07245681237', '59/33B, Pasal Mawatha, Rukmale', '4569', '0', '2021/02/23'),
(4, 'Admin', 'Yasith', 'yasith@gmail.com', '07854689254', '59/33B, Pasal Mawatha, Rukmale', '4569', '0', '2021/02/23'),
(5, 'Admin', 'Imaya', 'imaya\'@gmail.com', '07154869725', '59/33B, Pasal Mawatha, Rukmale', '4569', '0', '2021/02/23');

-- --------------------------------------------------------

--
-- Table structure for table `vendorcat`
--

CREATE TABLE `vendorcat` (
  `idvendorcat` int(10) UNSIGNED NOT NULL,
  `catname` varchar(255) NOT NULL,
  `catimage` varchar(255) NOT NULL,
  `delflag` varchar(45) NOT NULL,
  `regdate` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `vendorcat`
--

INSERT INTO `vendorcat` (`idvendorcat`, `catname`, `catimage`, `delflag`, `regdate`) VALUES
(1, 'Hotels', 'uploads/Hotels.jpg', '0', '2018/12/02'),
(3, 'Ashtaka', 'uploads/ashtaka.jpg', '0', '2018/12/02'),
(4, 'Reciption Halls', 'uploads/banquet.jpg', '0', '2018/12/02'),
(7, 'Sarees', 'uploads/bwear.jpg', '0', '2018/12/06'),
(8, 'Salons', 'uploads/beautician.jpg', '0', '2018/12/06'),
(9, 'Wedding Cars', 'uploads/carhire.jpg', '0', '2018/12/06'),
(10, 'Jewellery', 'uploads/jewellery.jpg', '0', '2018/12/06'),
(11, 'Cake Structure', 'uploads/cake.jpg', '0', '2018/12/06'),
(14, 'Photography', 'uploads/photography.jpg', '0', '2021/04/26'),
(15, 'Wedding Cards', 'uploads/weddingcards.jpg', '0', '2021/04/26'),
(16, 'Wedding Decors', 'uploads/weddingdecor.jpg', '0', '2021/04/26');

-- --------------------------------------------------------

--
-- Table structure for table `vendoreg`
--

CREATE TABLE `vendoreg` (
  `idvendoreg` int(10) UNSIGNED NOT NULL,
  `busname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `vendorcat` varchar(255) NOT NULL,
  `magazinemood` varchar(10) NOT NULL,
  `regdate` varchar(45) NOT NULL,
  `delflag` int(10) UNSIGNED NOT NULL,
  `province` varchar(100) NOT NULL,
  `district` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `vendoreg`
--

INSERT INTO `vendoreg` (`idvendoreg`, `busname`, `username`, `email`, `password`, `vendorcat`, `magazinemood`, `regdate`, `delflag`, `province`, `district`) VALUES
(1, 'GRAND17', 'Shan', 'shan@gmail.com', '123', 'Hotel', '1', '2021/02/24', 0, 'Western', 'Colombo'),
(2, 'WIMANA', 'Oshi', 'oshi@gmail.com', '456', 'Hotel', '1', '2021/02/25', 0, 'Western', 'Colombo'),
(3, 'WED365', 'Sara', 'sara@gmail.com', 'asd', 'Photography', '1', '2021/02/25', 0, 'Western', 'Colombo'),
(4, 'IMAGEi', 'Yasi', 'yasi@gmail.com', '12345', 'Photography', '1', '2021/02/26', 0, 'Western', 'Colombo'),
(5, 'PORUWA', 'Maya', 'maya@gmail.com', '987654', 'Poruwa', '1', '2021/02/28', 0, 'Western', 'Colombo'),
(6, 'ASHTAKA', 'Test', 'test@gmail.com', 'test123', 'Poruwa', '1', '2021/02/28', 0, 'Western', 'Colombo'),
(7, 'Neesha', 'Neesha', 'neesha@gmail.com', '123', 'Salons', '1', '2021/04/25', 0, 'Western', 'Colombo');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `couplereg`
--
ALTER TABLE `couplereg`
  ADD PRIMARY KEY (`idcouplereg`);

--
-- Indexes for table `cpltodolist`
--
ALTER TABLE `cpltodolist`
  ADD PRIMARY KEY (`idcpltodolist`);

--
-- Indexes for table `district`
--
ALTER TABLE `district`
  ADD PRIMARY KEY (`iddistrict`);

--
-- Indexes for table `exhibitions`
--
ALTER TABLE `exhibitions`
  ADD PRIMARY KEY (`idexhibitions`);

--
-- Indexes for table `galleryimages`
--
ALTER TABLE `galleryimages`
  ADD PRIMARY KEY (`idgalleryImages`);

--
-- Indexes for table `guesttable`
--
ALTER TABLE `guesttable`
  ADD PRIMARY KEY (`idguesttable`);

--
-- Indexes for table `magazineadd`
--
ALTER TABLE `magazineadd`
  ADD PRIMARY KEY (`idmagazineadd`);

--
-- Indexes for table `makereq`
--
ALTER TABLE `makereq`
  ADD PRIMARY KEY (`idmakereq`);

--
-- Indexes for table `newguest`
--
ALTER TABLE `newguest`
  ADD PRIMARY KEY (`idnewguest`);

--
-- Indexes for table `newlisting`
--
ALTER TABLE `newlisting`
  ADD PRIMARY KEY (`idnewlisting`);

--
-- Indexes for table `offerstbl`
--
ALTER TABLE `offerstbl`
  ADD PRIMARY KEY (`idofferstbl`);

--
-- Indexes for table `proposaltbl`
--
ALTER TABLE `proposaltbl`
  ADD PRIMARY KEY (`idproposaltbl`);

--
-- Indexes for table `province`
--
ALTER TABLE `province`
  ADD PRIMARY KEY (`idprovince`);

--
-- Indexes for table `useregistry`
--
ALTER TABLE `useregistry`
  ADD PRIMARY KEY (`iduseregistry`);

--
-- Indexes for table `vendorcat`
--
ALTER TABLE `vendorcat`
  ADD PRIMARY KEY (`idvendorcat`);

--
-- Indexes for table `vendoreg`
--
ALTER TABLE `vendoreg`
  ADD PRIMARY KEY (`idvendoreg`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `couplereg`
--
ALTER TABLE `couplereg`
  MODIFY `idcouplereg` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `cpltodolist`
--
ALTER TABLE `cpltodolist`
  MODIFY `idcpltodolist` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `district`
--
ALTER TABLE `district`
  MODIFY `iddistrict` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `exhibitions`
--
ALTER TABLE `exhibitions`
  MODIFY `idexhibitions` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `galleryimages`
--
ALTER TABLE `galleryimages`
  MODIFY `idgalleryImages` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `guesttable`
--
ALTER TABLE `guesttable`
  MODIFY `idguesttable` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `magazineadd`
--
ALTER TABLE `magazineadd`
  MODIFY `idmagazineadd` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `makereq`
--
ALTER TABLE `makereq`
  MODIFY `idmakereq` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `newguest`
--
ALTER TABLE `newguest`
  MODIFY `idnewguest` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `newlisting`
--
ALTER TABLE `newlisting`
  MODIFY `idnewlisting` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `offerstbl`
--
ALTER TABLE `offerstbl`
  MODIFY `idofferstbl` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `proposaltbl`
--
ALTER TABLE `proposaltbl`
  MODIFY `idproposaltbl` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `province`
--
ALTER TABLE `province`
  MODIFY `idprovince` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `useregistry`
--
ALTER TABLE `useregistry`
  MODIFY `iduseregistry` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `vendorcat`
--
ALTER TABLE `vendorcat`
  MODIFY `idvendorcat` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `vendoreg`
--
ALTER TABLE `vendoreg`
  MODIFY `idvendoreg` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
