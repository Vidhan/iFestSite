-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 28, 2012 at 08:22 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `goolockquestions`
--

-- --------------------------------------------------------

--
-- Table structure for table `googlockdareg`
--

CREATE TABLE IF NOT EXISTS `googlockdareg` (
  `Teamname` varchar(20) NOT NULL,
  `member1` varchar(20) NOT NULL,
  `ifestidmem1` varchar(30) NOT NULL,
  `member2` varchar(20) NOT NULL,
  `ifestidmem2` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `Contactno` char(15) NOT NULL,
  `emailid` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `googlockdareg`
--

INSERT INTO `googlockdareg` (`Teamname`, `member1`, `ifestidmem1`, `member2`, `ifestidmem2`, `password`, `Contactno`, `emailid`) VALUES
('Cannibals', '200901240', '', '200901161', '', '9f56624a2930395d4e05', '9016472817', ''),
('SH', '200801092', '', '', '', 'ec5704f0d56945d1e5b8', '9426864626', ''),
('PoleBearers', 'Ayush Kapoor', '', '', '', '0e8b1dbca95297c4244d', '9450163565', 'ayush21011991@gmail.com'),
('Biker Boyz', '201112055', '', '201112078', '', '827ccb0eea8a706c4c34', '9979706055', ''),
('Falcons', 'Sonu Buchasia', '', 'Suyashi Purwar', '', '323f3251d9225d046534', '9586928665', '201001234@daiict.ac.in'),
('naman', 'Naman Mishra', '', '', '', '2d550e60902ea34a606b', '9712733261', '200801194@daiict.ac.in'),
('Hydra', 'dhruvin', '', 'pranav', '', '295feeed5a2354001bae', '9724163484', 'vadapaw123@yahoo.com'),
('CRETE DIVA', 'PRITHA DAS', '', '', '', '702f3cd2f6006b4e7a4f', '9016893477', 'prthdas11@gmail.com'),
('GITS Rockerz', 'Tushar Mathur', '', '', '', 'afe9b1cb31dbc3aa3705', '09783210356', 'tusharmathur23@gmail.com'),
('E-smit', 'Smit Ambaliya', '', '', '', '5f4dcc3b5aa765d61d83', '9824220797', ''),
('Ishi', 'Ishita Lakhani', '', '', '', '5f4dcc3b5aa765d61d83', '9427378061', ''),
('Manisha & Pooja', 'Manisha Khatri', '', 'Pooja Vaishnav', '', '5f4dcc3b5aa765d61d83', '9228067195', 'manishakhatri@rocketmail.com'),
('Mayuri', 'Mayuri Purohit', '', 'Nehal Visavadiya', '', '5f4dcc3b5aa765d61d83', '9428266007', 'mgpurohit.15@gmail.com'),
('kR@ToS', 'Chinmay Bhuva', '', 'Ashish Radadiya', '', 'e2279479ab797e9ac508', '9898829295', 'chinmay.soni91@gmail.com'),
('MJ', 'Jaymin kuvardiya', '', 'Meit Maheshwari', '', '20eec5c336fcd546e601', '9724278285', 'meit.9176@gmail.com'),
('Nikhil Marathe', '200801011', '', '', '', '350d89c1cd6592bbbd1e', '9998564495', ''),
('pranky', 'Pratik Jain', '', 'Janki Mehta', '', 'e86bfaf8f1a63d17f76c', '7878779455', '201001098@daiict.ac.in'),
('pappu rangers', '201101052', '', '201101111', '', 'd439a3f8c11bfdce8c24', '8866286047', ''),
('tharkees', 'vinit', '', 'sahil', '', '4f94d7e65f1e7e55b5bf', '9624994585', '201101090@daiict.ac.in'),
('Ranka-Sahay', '201101220', '', '201101190', '', 'd8578edf8458ce06fbc5', '7878459853', ''),
('Dhaansu Dhundaaru', 'Abhishek Shah', '', 'Vishrut Patel', '', 'f589a6959f3e04037eb2', '9426759820', ''),
('Sam', 'Samkit Shah', '', '', '', '462413f70e52dd623a8f', '08866480100', 'samkitshah.ldite@gmail.com'),
('superspies', '201101217', '', '201101222', '', '1d365921b371fb0b832f', '9727188990', ''),
('Google Doodle', '200901003', '', '200901005', '', 'e89c0be12fda3885c4cb', '9510296540', ''),
('X-Men', '200901205', '', '', '', 'a1fa59e79bba1a38bb06', '9904045656', ''),
('Emerald', '201001048', '', '201001032', '', 'c57abe86de4e516e12df', '9624331656', ''),
('Nirav', 'Nirav Sharda', '', 'Saurabh Singh', '', '45165807ab26b73d16db', '8866893637', 'rishi260991@gmail.com'),
('Prefectionist', 'amit sengupta', '', 'ishanu dhar', '', '53661d666958a29b961f', '09035040793', 'ishanu@live.in'),
('anusha', 'anusha', '', 'anshul', '', '140a3797aae50b3588ec', '9705515801', 'amazinganshul@gmail.com'),
('sherlock-holmes', 'ayush', '', '', '', 'b291559957ffc706fc38', '7878771417', 'geniusayush@gmail.com'),
('a team', 'devendra darbar', '', 'nishant rajput', '', 'cb08ca4a7bb5f9683c19', '9879296061', 'darbar.dev@gmail.com'),
('braindead', '201001133', '', '201001127', '', '36a2b79e4c40eabc3824', '8690968550', ''),
('rajveers', 'paramveersingh raj', '', 'chirag paramar', '', '3147da8ab4a0437c15ef', '9722445123', 'rajparamveersingh@gmail.com'),
('Bebo''s Brothers', '200901056', '', '200901014', '', 'fcea920f7412b5da7be0', '9924136179', ''),
('springs', 'gj', '', '', '', 'e807f1fcf82d132f9bb0', '7679510947', 'gjoshi0311@gmail.com'),
('Agent Vinod', 'Ronak Patel', '', 'Siddhartha Raval', '', '14ff9fc1a1e5e242364d', '9601999063', 'raja19101991@live.com'),
('shakunibhaijaan', '201101004', '', '201101136', '', '202cb962ac59075b964b', '8460228337', ''),
('Blossoms', '201101175', '', '201101185', '', '0b93098375edd10963ad', '9724313851', ''),
('GoogleForever', '200801064', '', '200801023', '', 'e537bfa04fef8b9e6b29', '8000431235', ''),
('Sinners', '201001156', '', '201001154', '', '9d5bad81ee900a0c07e5', '9727300435', ''),
('chuni-muni', 'mansi', '', 'shruti', '', '891f9ce0e97803b6f23e', '9979863767', '200901184@daiict.ac.in'),
('khoji kutte', '201001002', '', '201001146', '', '202cb962ac59075b964b', '9173126103', ''),
('f114', 'Akash', '', 'Rushi', '', 'db79c2f1b4fe0542fd48', '7567215002', '201001188@daiict.ac.in'),
('JCS', 'Jai Chaudhry', '', 'Shiva Sankar e.v.p.', '', 'bc60a535b5fcb3dd9657', '7878327400', '201001242@daiict.ac.in'),
('SnOw-WhiTeS', '201101228', '', '201101229', '', '96cfc9d2edce1d7c1a2a', '9724250070', ''),
('SHERLOCK', 'saushthav saxena', '', 'nalin patidar', '', 'a4a0bbb47732598bb439', '7405129183', '201001037@da-iict.org'),
('googlock', '200801018', '', '', '', 'e745c205c11ab4d28f49', '9016971092', ''),
('G3N3S!S', '201001116', '', '', '', 'b9f2558226b7eb2707be', '9510746996', ''),
('Sneaky Fireballs', 'Shirali Desai', '', 'Hetaswi Vankani', '', '60634da8a243f925603c', '919714720470', 'hetaswi@gmail.com'),
('SimplE', 'Sanjay Kumar Jain', '', 'Ayush Mishra', '', '63436b3ebb85afe453a6', '9429518498', 'sanjay92jain@gmail.com'),
('Watsons', '201101230', '', '201101233', '', '4a8a629c3b45c6cd74c8', '9099649215', ''),
('BeanStalks', 'Rashmi S', '', 'Mansi Gokhale', '', '0ce4ff80e8a029c19aba', '9924782437', '200901192@daiict.ac.in'),
('Watbeta', '200901047', '', '', '', '21232f297a57a5a74389', '9723244630', ''),
('Untitled X', '200901071', '', '200901077', '', 'e3070c927b172a48ea00', '9510965329', ''),
('3t3rNaLL!', '200901165', '', '', '', '202cb962ac59075b964b', '9999999999', ''),
('Remy1991', '200901164', '', '', '', '238708ac6d192d7ce574', '9898884060', ''),
('Ankur Trapasiya', '201112040', '', '', '', '5fd86aef90e89e5bcfcf', '9998849799', ''),
('maniacs', '201101129', '', '201101237', '', '82be4e55a825c7af380a', '7698942491', ''),
('Undergods', '201001072', '', '201001130', '', 'fe0a2dd2104db6a24798', '9712601177', ''),
('TheCerealKillers', 'Hetaswi', '', 'Ishani', '', '883d04d700fdc250a4c6', '9986091876', 'hetaswi@yahoo.com'),
('Swingerz', '200801016', '', '', '', '26ae075297d5f9360cf5', '9714720470', ''),
('Phenomenon', '200901151', '', '200901153', '', 'c44a471bd78cc6c2fea3', '9998721156', ''),
('Columbus', '201101067', '', '201101075', '', 'e59ed2a1da1da51a78e0', '9998519814', ''),
('kaushalv27', '201001217', '', '201001199', '', 'f573d58b8de1ce623b14', '9408433449', ''),
('Deadly Sleuths', '201001131', '', '201001135', '', '96233031ae7568000ffb', '09904873844', ''),
('Boomerang', 'Mridul Birla', '', '', '', 'b4af804009cb036a4ccd', '9028847579', 'mridulbirla@gmail.com'),
('surag', '200901108', '', '', '', '63f4eb87198e402d19dc', '9824047182', ''),
('Royals', 'Khyati', '', 'Nilisha', '', '99b39bb6e1376f85c2bf', '9429917017', 'khyatihz@gmail.com'),
('krish', 'krishna rangani', '', '', '', '9df7ef85bcf8d4b47911', '7405262254', ''),
('Andromeda', '201001213', '', '201001238', '', 'a786805a49b0c12fbbda', '9624122862', ''),
('Stricker', '201111049', '', '201111050', '', 'e57b11428328493a0802', '8000597109', ''),
('ayush', '201001219', '', '', '', 'b291559957ffc706fc38', '7878771417', ''),
('Rockers!', '201101030', '', '201101189', '', '94a21e06f4a0609c7b87', '9898948837', ''),
('googLed', '200901069', '', '200901159', '', '0f4137ed1502b5045d60', '9510965416', ''),
('Squad', 'Swarnim Vyas', '', '', '', '827ccb0eea8a706c4c34', '7878778890', '201001137@daiict.ac.in'),
('Industrial Interns', '200801211', '', '200801135', '', '81c3b08a268c498be5d8', '7829279982', ''),
('techfreezer', 'kalani kaushal', '', '', '', 'a62c6e7251b8880408cc', '9429233567', 'kaxfever@gmail.com'),
('woohoo', '200801036', '', '', '', 'ff4a39caf198e4f3e8f3', '9925061787', ''),
('viva la raza', 'Nitin', '', '', '', 'ff4a39caf198e4f3e8f3', '9925061787', 'nitingond@gmail.com'),
('mAzAk', '200801151', '', '', '', 'a5173d12d911e3ef577b', '9099773165', ''),
('NIA', '200801221', '', '200801096', '', '6dd3e1e3daf37a0ee1b3', '9714887676', ''),
('FM', '201112071', '', '201112025', '', '7155e3419fdd34c4d895', '7405280110', ''),
('BO#R@', '200901007', '', '', '', '30e37bafa2945fc0df42', '8866571451', ''),
('Rocketeer', '200801021', '', '200801019', '', '347703988ae39a7021ab', '9879925636', ''),
('D@$herS', 'Aagam Shah', '', 'Aenik Shah', '', '25f9e794323b453885f5', '9409084835', 'aagam94@gmail.com'),
('ChristieJuiors', 'Chirayu', '', 'Brijesh', '', 'e3569e8b8ae8ed89dc76', '9979866297', '200801154@daiict.ac.in'),
('Frontiers', '201112020', '', '201112083', '', 'ee8e9082cf4d9c9cf062', '9427960448', ''),
('Krazy4', 'Presha Thakkar', '', 'Kinjal Patel', '', 'ed746e2f6c637d3eeb67', '9377417505', 'presha_thakkar@yahoo.co.in'),
('Xanix', '201112044', '', '201112064', '', 'd8578edf8458ce06fbc5', '7527277881', ''),
('tasneem', 'tasneem', '', 'tasu.me@gmail.com', '', '493f5718bb9403984d9a', '8866291190', 'tasu.me@gmail.com'),
('Hello World', '201112037', '', '201112063', '', 'f58cb1b9c3e73d9d14d1', '8000964684', ''),
('Panduranga', '201101074', '', '201101073', '', '90a243ca252402ce77af', '8128422272', ''),
('Swat Kats', 'Yash', '', 'Vatsal', '', 'cdf91cc7c0fd9508f1a6', '9537633707', 'yashvshah91@yahoo.co.in'),
('NK', '201101049', '', '201101041', '', '442846c3c28ddf6081cb', '8469698282', ''),
('qwerty', '201101055', '', '201101043', '', 'd8578edf8458ce06fbc5', '7405196233', ''),
('Alumni', 'Akshay', '', 'Husain', '', '50977d6b4d7d7b056427', '9904979577', 'akshayrhundia@gmail.com'),
('e-LEMON-ators', '201101184', '', '201101183', '', '0500f01603777cf144de', '9725740625', ''),
('himanshu', 'himanshu', '', '', '', 'dd75dce737f169d17c13', '9601374791', '200901111@daiict.ac.in'),
('destruction', '201101131', '', '201101146', '', '3fc0a7acf087f549ac2b', '8469281057', ''),
('Remember the Milk', '200801180', '', '200801187', '', '202cb962ac59075b964b', '9998943936', ''),
('Dodge Chargers', 'Himanshu Bhambhlani', '', 'Urvesh Devani', '', '276fb370d01492c736a6', '9904958483', 'whizkidhimanshu@gmail.com'),
('vikings', '201101119', '', '201101122', '', '8fbb106a799db49490af', '7874566877', ''),
('Roomie Rockers !!', '201101202', '', '201101203', '', '756190a9e143070b7b36', '9662063179', ''),
('The Futurists', 'Bhaumik Ganatra', '', 'Utkarsha Barve', '', '45f1c94761b53c7a6e73', '9974864602', 'ganatrabhaumik@gmail.com'),
('Remy', 'Ravi Hemnani', '', '', '', '238708ac6d192d7ce574', '9898884060', 'raviiihemnani@gmail.com'),
('Goku', 'Mohit', '', '', '', '6011fbeec46c380c89ec', '8905424349', 'mohit3171992@yahoo.co.in'),
('Santa Banta', '201001020', '', '201001008', '', '4d069b4e77b1d1804bea', '9033877370', ''),
('crusaders', '201001179', '', '201001053', '', 'f2bfe2c8842839fef355', '8460428583', ''),
('Scorpions', '201001019', '', '201001001', '', 'ec8cf3344ab41399b624', '9173126169', ''),
('abc', 'a', '', '', '', '900150983cd24fb0d696', '9377924080', ''),
('coordinators', '200901154', '', '', '', '8dd6ac1bca081e7329dc', '9377924080', ''),
('WikiGeeks', '201001193', '', '201001159', '', '260922607662ee0c3ae8', '9925236332', ''),
('team moriarty', '200901155', '', '200901162', '', '7ebd2b761cc689cc556c', '9510845312', ''),
('Aliens', '201101147', '', '201101158', '', 'a551ec20634a9dd99957', '8460467048', ''),
('Gumshoe', '201001167', '', '201001173', '', '8b36e9207c24c76e6719', '9913085587', ''),
('Google Knight', '201101194', '', '201101130', '', 'f0efd1d3660de9cffe99', '7359477417', ''),
('jojeetawahisikander', '201001136', '', '201001149', '', 'b36d2e630d9927ec75c6', '7878778867', ''),
('qwertyICU', '201001021', '', '201001028', '', 'ff3d4596fa791a9c8b61', '9913146603', ''),
('Nocturnal Creatures', '200901209', '', '200901224', '', '1bea3a3d4bc3be1149a7', '9924203677', ''),
('crazzy!!', '201001079', '', '201001007', '', '60651c4e1100c57676a1', '7600743091', ''),
('Googlies', '201001084', '', '201001089', '', '017d9516a0a8b44db462', '9714449648', ''),
('Point Breakers', '200801028', '', '200801102', '', '90e86bcd0f5fb665383a', '9033291649', ''),
('FuriousMonks', '201001056', '', '201001107', '', 'a2f85c7d58e523aa01b0', '9428820349', ''),
('ajayparmar904', '201011032', '', '', '', 'bbb949894d48460e3d7a', '9714755204', ''),
('Shivang', '200801085', '', '200801037', '', '5c843bd82838f70b8321', '09930525058', ''),
('seachers', '201101090', '', '201101085', '', '4f94d7e65f1e7e55b5bf', '8347796612', ''),
('johnny walker and bl', '201001103', '', '201001005', '', '6b157916b43b09df5a22', '7878778852', ''),
('piratess', '201012055', '', '201112004', '', '149e200961ea52955bd5', '8460585057', ''),
('Mycroft', '200801224', '', '200801024', '', '72dd68b1fab7bbe82b69', '8000820775', ''),
('Aliens', '201101147', '', '201101158', '', 'a551ec20634a9dd99957', '8460467048', ''),
('team moriarty', '200901155', '', '200901162', '', '7ebd2b761cc689cc556c', '9510845312', ''),
('WikiGeeks', '201001193', '', '201001159', '', '260922607662ee0c3ae8', '9925236332', ''),
('abc', 'a', '', '', '', '900150983cd24fb0d696', '9377924080', ''),
('d', '200801154', '', '', '', '8277e0910d750195b448', '9377924080', ''),
('Scorpions', '201001019', '', '201001001', '', 'ec8cf3344ab41399b624', '9173126169', ''),
('crusaders', '201001179', '', '201001053', '', 'f2bfe2c8842839fef355', '8460428583', ''),
('Santa Banta', '201001020', '', '201001008', '', '4d069b4e77b1d1804bea', '9033877370', ''),
('Goku', 'Mohit', '', '', '', '6011fbeec46c380c89ec', '8905424349', 'mohit3171992@yahoo.co.in'),
('BO#R@', '200901007', '', '', '', '30e37bafa2945fc0df42', '8866571451', ''),
('Rocketeer', '200801021', '', '200801019', '', '347703988ae39a7021ab', '9879925636', ''),
('D@$herS', 'Aagam Shah', '', 'Aenik Shah', '', '25f9e794323b453885f5', '9409084835', 'aagam94@gmail.com'),
('Remy', 'Ravi Hemnani', '', '', '', '238708ac6d192d7ce574', '9898884060', 'raviiihemnani@gmail.com'),
('The Futurists', 'Bhaumik Ganatra', '', 'Utkarsha Barve', '', '45f1c94761b53c7a6e73', '9974864602', 'ganatrabhaumik@gmail.com'),
('Roomie Rockers !!', '201101202', '', '201101203', '', '756190a9e143070b7b36', '9662063179', ''),
('vikings', '201101119', '', '201101122', '', '8fbb106a799db49490af', '7874566877', ''),
('Dodge Chargers', 'Himanshu Bhambhlani', '', 'Urvesh Devani', '', '276fb370d01492c736a6', '9904958483', 'whizkidhimanshu@gmail.com'),
('Remember the Milk', '200801180', '', '200801187', '', '202cb962ac59075b964b', '9998943936', ''),
('destruction', '201101131', '', '201101146', '', '3fc0a7acf087f549ac2b', '8469281057', ''),
('himanshu', 'himanshu', '', '', '', 'dd75dce737f169d17c13', '9601374791', '200901111@daiict.ac.in'),
('e-LEMON-ators', '201101184', '', '201101183', '', '0500f01603777cf144de', '9725740625', ''),
('Alumni', 'Akshay', '', 'Husain', '', '50977d6b4d7d7b056427', '9904979577', 'akshayrhundia@gmail.com'),
('qwerty', '201101055', '', '201101043', '', 'd8578edf8458ce06fbc5', '7405196233', ''),
('NK', '201101049', '', '201101041', '', '442846c3c28ddf6081cb', '8469698282', ''),
('Swat Kats', 'Yash', '', 'Vatsal', '', 'cdf91cc7c0fd9508f1a6', '9537633707', 'yashvshah91@yahoo.co.in'),
('Panduranga', '201101074', '', '201101073', '', '90a243ca252402ce77af', '8128422272', ''),
('Hello World', '201112037', '', '201112063', '', 'f58cb1b9c3e73d9d14d1', '8000964684', ''),
('tasneem', 'tasneem', '', 'tasu.me@gmail.com', '', '493f5718bb9403984d9a', '8866291190', 'tasu.me@gmail.com'),
('Xanix', '201112044', '', '201112064', '', 'd8578edf8458ce06fbc5', '7527277881', ''),
('Krazy4', 'Presha Thakkar', '', 'Kinjal Patel', '', 'ed746e2f6c637d3eeb67', '9377417505', 'presha_thakkar@yahoo.co.in'),
('Frontiers', '201112020', '', '201112083', '', 'ee8e9082cf4d9c9cf062', '9427960448', ''),
('ChristieJuiors', 'Chirayu', '', 'Brijesh', '', 'e3569e8b8ae8ed89dc76', '9979866297', '200801154@daiict.ac.in'),
('FM', '201112071', '', '201112025', '', '7155e3419fdd34c4d895', '7405280110', ''),
('NIA', '200801221', '', '200801096', '', '6dd3e1e3daf37a0ee1b3', '9714887676', ''),
('mAzAk', '200801151', '', '', '', 'a5173d12d911e3ef577b', '9099773165', ''),
('viva la raza', 'Nitin', '', '', '', 'ff4a39caf198e4f3e8f3', '9925061787', 'nitingond@gmail.com'),
('woohoo', '200801036', '', '', '', 'ff4a39caf198e4f3e8f3', '9925061787', ''),
('techfreezer', 'kalani kaushal', '', '', '', 'a62c6e7251b8880408cc', '9429233567', 'kaxfever@gmail.com'),
('Industrial Interns', '200801211', '', '200801135', '', '81c3b08a268c498be5d8', '7829279982', ''),
('Squad', 'Swarnim Vyas', '', '', '', '827ccb0eea8a706c4c34', '7878778890', '201001137@daiict.ac.in'),
('googLed', '200901069', '', '200901159', '', '0f4137ed1502b5045d60', '9510965416', ''),
('Rockers!', '201101030', '', '201101189', '', '94a21e06f4a0609c7b87', '9898948837', ''),
('ayush', '201001219', '', '', '', 'b291559957ffc706fc38', '7878771417', ''),
('Stricker', '201111049', '', '201111050', '', 'e57b11428328493a0802', '8000597109', ''),
('Andromeda', '201001213', '', '201001238', '', 'a786805a49b0c12fbbda', '9624122862', ''),
('krish', 'krishna rangani', '', '', '', '9df7ef85bcf8d4b47911', '7405262254', ''),
('Royals', 'Khyati', '', 'Nilisha', '', '99b39bb6e1376f85c2bf', '9429917017', 'khyatihz@gmail.com'),
('surag', '200901108', '', '', '', '63f4eb87198e402d19dc', '9824047182', ''),
('Boomerang', 'Mridul Birla', '', '', '', 'b4af804009cb036a4ccd', '9028847579', 'mridulbirla@gmail.com'),
('Deadly Sleuths', '201001131', '', '201001135', '', '96233031ae7568000ffb', '09904873844', ''),
('Falcons', 'Sonu Buchasia', '', 'Suyashi Purwar', '', '323f3251d9225d046534', '9586928665', '201001234@daiict.ac.in'),
('naman', 'Naman Mishra', '', '', '', '2d550e60902ea34a606b', '9712733261', '200801194@daiict.ac.in'),
('Hydra', 'dhruvin', '', 'pranav', '', '295feeed5a2354001bae', '9724163484', 'vadapaw123@yahoo.com'),
('CRETE DIVA', 'PRITHA DAS', '', '', '', '702f3cd2f6006b4e7a4f', '9016893477', 'prthdas11@gmail.com'),
('kaushalv27', '201001217', '', '201001199', '', 'f573d58b8de1ce623b14', '9408433449', ''),
('Columbus', '201101067', '', '201101075', '', 'e59ed2a1da1da51a78e0', '9998519814', ''),
('Phenomenon', '200901151', '', '200901153', '', 'c44a471bd78cc6c2fea3', '9998721156', ''),
('Swingerz', '200801016', '', '', '', '26ae075297d5f9360cf5', '9714720470', ''),
('TheCerealKillers', 'Hetaswi', '', 'Ishani', '', '883d04d700fdc250a4c6', '9986091876', 'hetaswi@yahoo.com'),
('Undergods', '201001072', '', '201001130', '', 'fe0a2dd2104db6a24798', '9712601177', ''),
('nando', '200801114', '', '', '', '1c50be191cd0d4133e87', '9714390861', ''),
('Kuch Bhi', '201001201', '', '201001233', '', 'de5b5bf65ba66517f9b7', '9979641775', ''),
('''Sharan''lock ''Om''s', 'Sharan Shodhan', '', 'Om Thakkar', '', '12edbe8577ba1b24a287', '9737073420', '201001051@daiict.ac.in'),
('The Invaders', 'Purushotam', '', 'Prakruti', '', '235ec52392b77977539c', '9712733313', '201011050@daiict.ac.in'),
('Declined Rulers', 'Nikit Saraf', '', 'Shivang Bhatt', '', '9f76ed31647ccba6c4d6', '9898985307', 'shivang93@gmail.com'),
('dewc', 'vaishali', '', 'chitharanjan', '', '9d9e63c0cfd38537d300', '9687741113', '200801199@daiict.ac.in'),
('C wing ke bhayanak l', '200901087', '', '200901091', '', '389548468bcdb8773128', '9510180030', ''),
('girlzz', '201112038', '', '201112090', '', 'a172eb8a7cad69832c28', '9426464501', ''),
('999', '201101199', '', '201101219', '', 'a9aedc6c39f654e55275', '9824801378', ''),
('Rockers', '201101091', '', '201101188', '', '19fdf24f04b9c1805b10', '7405280531', ''),
('Quantums', '201101137', '', '201101165', '', '1bea3a3d4bc3be1149a7', '8866338972', ''),
('techfreezers', 'kaushal kalani', '', 'vijay ahir', '', 'a62c6e7251b8880408cc', '9429233567', 'kaxfever@gmail.com'),
('Ayush chhari', '200901133', '', '', '', '313617aabca39884a09d', '9099709765', ''),
('numerouno', '200901001', '', '', '', 'bd028f0ba46490d134ab', '8905057271', ''),
('Hulks', 'Palash Jain', '', 'Ishan Modi', '', 'c9033868c79928d052f2', '8460428583', 'metpalash@gmail.com'),
('misfits', '200901039', '', '', '', '4551a823fb0fa78310a0', '09409081118', ''),
('Spangela', '200901110', '', '200901175', '', '775adc8545f3f6f878f2', '8905285763', ''),
('Pirates', 'Tushar Rajpal', '', 'Varun Jandar', '', 'e4e7d1c393c5e9539622', '8460585057', '201012055@daiict.ac.in'),
('codevertex', '201011034', '', '', '', '7749a3e4ceb78e48718a', '8000007401', ''),
('A', '200801235', '', '', '', 'd90d87941927cb49e545', '9555093223', ''),
('INVINCIBLES', '201101025', '', '201101024', '', 'c5467d921e736340d380', '7359473892', ''),
('Golden Gophers', 'Akshay Soni', '', 'Gaurav Chopra', '', '2738744dd4a4a0abaa47', '+18583377478', 'sonix022@umn.edu'),
('rai', 'vivek', '', 'shivanshu', '', 'e11d2fd8d87d681b9638', '09574306265', 'vivekrai2800@gmail.com'),
('killer', '201001152', '', '201001151', '', 'a67e565b11cd18f7a922', '8866201337', ''),
('Karam Chand', '201001212@daiict.ac.', '', '201001235@daiict.ac.', '', 'b194a79cb3e4e8aa5fbd', '9427325566', '201001212@daiict.ac.in'),
('phoenix', '200801032', '', '200801131', '', '0960ca86b540d83a0516', '9714442673', ''),
('DUMMY', 'DUMMY', '', '', '', 'bd2103035a8021942390', '9723449434', '200901043@daiict.ac.in'),
('googlers', '201001161', '', '', '', 'a500b93bd1d753f11558', '8905124742', ''),
('cg_india', 'Chetan Gupta', '', '', '', 'f0f8595253b6234c5bea', '9725416664', 'cg_daiict@yahoo.com'),
('Hachiko', 'Maulik Dave', '', 'Renu Sharma', '', 'e10adc3949ba59abbe56', '8000486570', 'maulikdave05@gmail.com'),
('Holmes', '201001165', '', '', '', 'e99a18c428cb38d5f260', '7359473740', ''),
('One', 'Utkarsh', '', '', '', '7aab7568b0b7b4663475', '9727014600', 'utkarsh.jainbtech09@spt.pdpu.a'),
('Zephyr', '200901183', '', '200901213', '', 'fe384d066aa548c4add3', '9327503746', ''),
('Knucker', '200901081', '', '', '', '3216348e0f2afcdda2d4', '7874488899', ''),
('zealots', 'Shikha Shah', '', 'Rudrakshi Bargal', '', 'af07d66895fce93fbef8', '7567248408', '201112061@daiict.ac.in'),
('The Chipmunks', '200901192', '', '200901184', '', '0ce4ff80e8a029c19aba', '9924782437', ''),
('gworld', '201112014', '', '', '', 'e01c81c16c70a8b53635', '8980706556', ''),
('Dabeli Doubles retur', '201001231', '', '201001236', '', '816c2a1ba34a8374a58f', '8866576324', ''),
('dvs', '200901033', '', '', '', 'cfe9fd51e413d63ef532', '9723449434', ''),
('Dabeli Doubles', 'Aman Jain', '', 'Amandeep singh ghai', '', '816c2a1ba34a8374a58f', '8866576324', '91aman@gmail.com'),
('Innovators', '201101128', '', '201101062', '', 'd94729ce13f4ee6395bf', '09429472200', ''),
('Hardy-Nancy', '201001043', '', '201001046', '', '75588bd397d60bb6228d', '7878778830', ''),
('BitBangers', '200901088', '', '200901094', '', '3fc0a7acf087f549ac2b', '8000502199', ''),
('ateam', 'surabhi', '', '', '', 'aeb6b3ff2608256c8a0a', '28082714', 'simply.sur@gmail.com'),
('abcd', 'asd', '', 'ghd', '', '240bc306d1a19916d636', '9234', 'ans'),
('swena', 'se', '', 'as', '', '2d488a349a85cb8e9c6c', '9234', 'ans'),
('superuser', 'as', '', 'asd', '', '54c84b40e9ff5a314729', '23', 'ajs'),
('R_H', '200801040', '', '', '', '87e4210c7d7e6dbf9a65', '9824222659', ''),
('Wikis', '201101072', '', '', '', '1fd98ea2ce375a1e66c8', '9327634020', ''),
('Prodigals', '201001080', '', '201001078', '', '7fb92f35601ab0b1c88b', '9724949547', ''),
('BFK', '201001015', '', '201001010', '', 'd8578edf8458ce06fbc5', '9712385086', ''),
('chutiye', '200801227', '', '200801001', '', 'e10adc3949ba59abbe56', '846016481', ''),
('robinhood', '200901134', '', '200901078', '', '41788953551245ce3545', '9510239392', ''),
('Bert & Ernie', '200801213', '', '200801127', '', 'a67249732484cd60ccec', '9978742402', ''),
('coordinators2', '200201156', '', '', '', '8dd6ac1bca081e7329dc', '9377924080', ''),
('google surfer', '200901141', '', '200901144', '', 'c822c1b63853ed273b89', '9428101292', ''),
('POTTER', 'ZEEL SHAH', '', 'AYUSH KULSHRESTHA', '', 'a3922a93c26fda544565', '9724960102', '201001215@daiict.ac.in'),
('Gujju', '201001200', '', '201001199', '', '1bea3a3d4bc3be1149a7', '7405363652', ''),
('sandeepmertia', '201001113', '', '', '', '9ecde4aa9f1b7654b629', '9374949418', ''),
('Googol Googlers', '200801226', '', '200801042', '', '509b05cb166abe87bf58', '8306210452', ''),
('WoDkUrAm', '201001055', '', '201001151', '', '45165807ab26b73d16db', '9033539149', ''),
('Zap', '200901136', '', '200901177', '', 'b700fbcc3c0bc7b82cb8', '8905272131', ''),
('DeaDSouL', '200801029', '', '200801152', '', '5abdb300c330d4e86481', '9904878847', ''),
('Indian', '200901024', '', '', '', '19a54d6299a4cbd9a46e', '9173500226', ''),
('saranya', 'saranya', '', 'karishma', '', 'a572f25cd9f2a77034e5', '9510412756', '201112008@daiict.ac.in'),
('e310', '201101210', '', '201101206', '', '96d9ab806555f7f79c5f', '8511682243', ''),
('OPTIMISTAKE', '201101200', '', '201101218', '', '90b03c356ef9291d3afc', '7405237569', ''),
('causality', '201011003', '', '', '', '361eefc3357ab4657106', '9016590440', ''),
('Mr. Google', 'Rishi Yadav', '', '', '', '7003a14d700aeab79f24', '9924729596', ''),
('bhatkeleSatkele', '200912046', '', '200912055', '', 'b43b770788d71abc9244', '9510571716', ''),
('ABraxxx', 'Jayesh Gumber', '', '', '', 'c94aef0e7324f507d396', '09907969099', 'jayeshgumber@gmail.com'),
('Dynamic Duo', 'Mufaddal Makati', '', 'Sunny Pandya', '', '552f711dd924ec9af25a', '9099024405', 'prenx4x@gmail.com'),
('J103', '200801202', '', '200801208', '', 'eb61eead90e3b899c6bc', '7878779960', ''),
('DP', '201112082', '', '', '', '6e0a58451eaf81930aa6', '9687100771', ''),
('solance', '200912056', '', '200912012', '', '9f60ae47e70504f616ef', '09535108309', ''),
('times of da', '201001184', '', '201001170', '', '202cb962ac59075b964b', '9033000901', ''),
('apandays', '201001211', '', '201001170', '', '202cb962ac59075b964b', '9998808282', ''),
('DA Boyz', '201101110', '', '201101231', '', 'b0d7afc8ffd4ec4150ce', '8460383201', ''),
('raven', 'ravi', '', '', '', '5ebe2294ecd0e0f08eab', '08866213626', 'ravimakadia027@gmail.com'),
('Devils', '201112015', '', '201112051', '', '421d4f75a36c1566c7bc', '9016899209', ''),
('Shreya googlock', 'shreya agrawal', '', '', '', '81dc9bdb52d04dc20036', '9737853796', '200901090@daiict.ac.in'),
('SkysLimit', 'Neeharika', '', '', '', 'f6dd7c5f25218f182a91', '9510406784', ''),
('Prince', '200801181', '', '200801179', '', '2077e4a6bafa9b4e7b55', '9016811364', ''),
('Future Turners', '201101096', '', '201101113', '', '7b6cc70959a647646c67', '9375366276', ''),
('Awesome twosome', '201001220', '', '201001232', '', '4d04cedd6d05b1f16a44', '9173184984', ''),
('SherlockHolmes', '200801076', '', '', '', '3f1c9a4c20e55fdf1021', '7405588338', ''),
('RanRag', '200801077', '', '', '', '90f2c9c53f66540e6734', '7405550198', ''),
('hahaha', '200801222', '', '200801123', '', '79cfab624c6f02057146', '09742824944', ''),
('sa', '201101007', '', '201101048', '', '55c94be789c72941c11c', '7359455003', ''),
('dum', 'dum', '', '', '', 'f36178feffc1db4b9b72', '9999999', ''),
('sylar', '200801027', '', '', '', 'd005fbd841786fcb5830', '8866871121', ''),
('ert', '200901043', '', '', '', 'f36178feffc1db4b9b72', '9999', ''),
('searchengine', 'Divyam Rastogi', '', 'Vivek Vaish', '', 'fe384d066aa548c4add3', '9327503746', '200901183@daiict.ac.in'),
('fighters', '201001191', '', '201001192', '', '827ccb0eea8a706c4c34', '7878778871', ''),
('Loafer', 'vikash', '', 'osho', '', 'd48fc32c0d5e94d2931e', '8000119327', '200801139@daiict.ac.in'),
('XYZ', '201001195', '', '', '', '3d2dea4b582efe5f3cb1', '8690247999', ''),
('S&S', '201001209', '', '201001158', '', '316928e0d260556eaccb', '9925480258', ''),
('subh', 'subh', '', '', '', '827ccb0eea8a706c4c34', '8866510304', 'subh.singh007@gmail.com'),
('Ping', '201011044', '', '', '', '827ccb0eea8a706c4c34', '8866510304', ''),
('blah', '201001077', '', '201001075', '', '55ca49079f13284958f1', '8000877398', ''),
('pg', '201011050', '', '', '', '235ec52392b77977539c', '9712733313', ''),
('DnW', 'Gajnedra', '', 'Arun', '', 'e10adc3949ba59abbe56', '9724512205', '200901018@daiict.ac.in'),
('brunello', 'pinky', '', 'roly', '', '349b9872d79048fe4cc4', '9173476209', '201001022@daiict.ac.in'),
('SeeJay', 'Jwalitha', '', '', '', 'd3fd2a073ed71f82e1f1', '9949202600', 'jwalitha147@gmail.com'),
('farjii', 'archit', '', '', '', '76765b21f8e028e3260c', '8460626631', 'farjiid001@gmail.com'),
('Sparta', 'geek_guy', '', '', '', '23ff5d5bbe912b41259e', '8141235438', 'dhaval6244@yahoo..in'),
('Dictator', '201112007', '', '201112013', '', 'bb4618219a55c0d215b3', '9725109690', ''),
('abcdefghij', '201101039', '', '201101046', '', '25f9e794323b453885f5', '9409084835', ''),
('Challenger', '201112031', '', '201112029', '', '8fb07f56df325ac6ca32', '9016550363', ''),
('j wingers', '200601117', '', '', '', '900150983cd24fb0d696', '8800294117', ''),
('One to Many', '201101214', '', '', '', 'c44a471bd78cc6c2fea3', '7567680000', ''),
('golu', 'Shubham Agarwal', '', 'Piyush Meshram', '', '3667dfe4a66089c51620', '8866495062', 'shubham.agarwal@iitgn.ac.in'),
('b', 'b', '', '', '', '92eb5ffee6ae2fec3ad7', '9377924080', ''),
('niros', '201101151', '', '201101159', '', 'f567cb85556dea700061', '7405366980', ''),
('Surbhi47', '200901188', '', '', '', 'afac2cb9d66feb0967a4', '8690597959', ''),
('@d!d@s', 'Naman Gupta', '', 'Ankit Naugaria', '', '940ad9aa975a9f3b0abb', '8000528024', '201001206@daiict.ac.in'),
('Warrior', '201012038', '', '201012049', '', '3e3806659785b5be6b7a', '8000909341', ''),
('thinker', '200901160', '', '', '', '3300b67eb448cc252876', '9328125038', 'nikhil.agrwl07@gmail.com'),
('Valkyries', '201101026', '', '201101014', '', 'a16f00480bd1892f3f00', '07405588314', ''),
('Clueless Idiots', 'Kunal Doshi', '', 'Harsh Kothari', '', '72be192232cc951a869d', '9638810277', 'kunalhdoshi@gmail.com'),
('Mindless Idiot', '201101176', '', '', '', '72be192232cc951a869d', '9638810277', ''),
('Ronak', '201101081', '', '', '', 'af92b415465e9a00c05f', '7567249636', ''),
('OLD MONKS', '201112075', '', '201112062', '', '0062d21c1a97acad0fff', '7405083447', ''),
('wild bullets', '200901006', '', '200901017', '', 'ac2b868b1208e2d0a4ce', '8401972588', ''),
('Bing', 'Ankur Trapasiya', '', 'Kushal Pandya', '', '5fd86aef90e89e5bcfcf', '9998849799', '201112040@daiict.ac.in'),
('Pink Panthers', '201101124', '', '201101118', '', '70d77690fb7e56c6a5e4', '9913480247', ''),
('gomes', '201001031', '', '201001029', '', '787344f6a093ca8dce5f', '9687347576', ''),
('Team', '200901149', '', '', '', '2e4c54a60ae5156c6082', '9574067020', ''),
('Psyre', 'Shondhi Singhal', '', 'Rini Joshi', '', 'e9af690d71cc53da50e3', '9687614655', 'shondhi_singhal@daiict.ac.in'),
('Pinnacle', '200901173', '', '200901135', '', 'e9abb2e6697882705a4b', '9687614655', ''),
('eureka!', '200901178', '', '', '', 'f1b662fe6ae53fbcd5a5', '9726153970', ''),
('googlegod', 'bhargav', '', 'naman', '', 'c822c1b63853ed273b89', '9429586065', '200901144@daiict.ac.in'),
('Masterminds', 'Vaibhavi Desai', '', 'Himani Kapoor', '', '79cfeb94595de33b3326', '7698876900', '201101209@daiict.ac.in'),
('Rockstars', '201101209', '', '201101197', '', '79cfeb94595de33b3326', '7698876900', ''),
('m''n''m', '201001118', '', '201001112', '', '80efc4dcc55ef3629b6b', '9714020568', ''),
('Deamon', '201101036', '', '201101001', '', 'eaae1c61a30d95422c07', '7405485471', ''),
('crazy minds', '201101201', '', '', '', '14f8cde569c7a1da78cf', '7359473643', '201101201@daiict.ac.in'),
('viswe', '201001034', '', '201001104', '', '827ccb0eea8a706c4c34', '8905491767', ''),
('Watbeta64', 'Pankaj Bhambhani', '', 'Soumik Pal', '', '21232f297a57a5a74389', '9173500226', 'pankajb64@gmail.com'),
('saurabh', '201101195', '', '', '', '6e361315573bd76e6c44', '9998777052', ''),
('spartacus', 'nalin', '', 'saushthav', '', 'a6e063d04a94d6dce40f', '08866569767', 'nalin.patidar@gmail.com'),
('spartacus.fan', '201001011', '', '201001037', '', 'a6e063d04a94d6dce40f', '08866569767', ''),
('Mutants', '201101038', '', '201101045', '', '3077c8a531615a6b13aa', '8306793666', ''),
('Winner', 'Dinesh', '', 'Jaydeep', '', 'e10adc3949ba59abbe56', '9099044157', 'din.daiict@gmail.com'),
('va', '201011037', '', '', '', 'e915939ff6835c15b04b', '7878779862', ''),
('csd', 'Charusmita Dhiman', '', '', '', '2bd6ae6015fafe327ed7', '9374723855', 'charusmita.dhiman@gmail.com'),
('zzz', '201001042', '', '201001047', '', '0b93098375edd10963ad', '9904760424', ''),
('Signoffour', '201101095', '', '201101117', '', 'aed6cf2c986fab4b95f8', '9723449028', ''),
('vipkud', 'Ankita Doshi', '', 'Vipul Garg', '', 'e80b5017098950fc58aa', '7878779783', '201001105@daiict.ac.in'),
('Viku', '201001049', '', '201001105', '', 'e80b5017098950fc58aa', '7878779783', ''),
('NICM''ians', 'Ruchi Gupta', '', 'Lokesh Lakhwani', '', '1cab52eaff0d134054b6', '9427891307, 901', 'rcg0705@gmail.com, run.lokesh2'),
('TeamA', '200801060', '', '', '', '2c1743a391305fbf367d', '7405406054', ''),
('Mohrenstrasse', '200801210', '', '200901185', '', 'd35a02eb49149450fb2f', '9099575167', ''),
('RC', '200801038', '', '', '', '75b9a229bb1873d751a1', '9426864626', ''),
('abhivats', '201101031', '', '201101010', '', 'df74d6aa2bc8ea6478e4', '9429522509', ''),
('a45', 'a45', '', '', '', '306754ce45dc3a2441a1', '9377924080', ''),
('b45', 'b45', '', '', '', '48044979623ab599d955', '9377924080', ''),
('c65', 'c65', '', '', '', 'cf30c5a9bfb152765dae', '9377924080', ''),
('d65', 'd65', '', '', '', 'a14d6779bced4e2ed497', '9377924080', ''),
('e15', 'e15', '', '', '', '69746dd9b05454baef42', '9377924080', ''),
('jackson.tolaram', '200801218', '', '200801219', '', '908880209a64ea539ae8', '9909984988', ''),
('f15', 'f15', '', '', '', 'd3c8a0832878a5e1d4e8', '9377924080', ''),
('g5', 'g5', '', '', '', '37c965a8d6d7bec292c7', '9377924080', ''),
('h125', 'h125', '', '', '', '424430d9b110b26d227b', '9377924080', ''),
('i195', 'i195', '', '', '', '7f2cce71b332c3ac180d', '9377924080', ''),
('ramu', 'to', '16', 'to1', '15', '03c7c0ace395d80182db', '9626335719', 'g'),
('yahoooooooo', 'jamila', '16', 'das', '15', '03c7c0ace395d80182db', '9626335719', 'gupta.swena@gmail.com'),
('jaaaaadooooo', '200701104', '9', '200701105', '10', '03c7c0ace395d80182db', '9626335719', 'gupta.swena@gmail.com'),
('hay', 'h', '12', 'j', '13', '03c7c0ace395d80182db', '9626335719', 'swenagupta@sify.com'),
('ifest', 'wer', '13', 'weres', '12', '03c7c0ace395d80182db', '9626335719', 'swenagupta@sify.com'),
('rampyaari', 'mela', '15', 'mea2', '16', '03c7c0ace395d80182db', '9626335719', 'gupta.swena@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `googlockquestions`
--

CREATE TABLE IF NOT EXISTS `googlockquestions` (
  `no` int(11) NOT NULL,
  `question` text NOT NULL,
  `answer` text NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `googlockquestions`
--

INSERT INTO `googlockquestions` (`no`, `question`, `answer`) VALUES
(15, '', 'cancer;'),
(14, '', '71songs;seventyonesongs;seventyonesong;71song;'),
(12, '', 'regis;regisphilbin;'),
(13, '', 'aryanpapers;'),
(10, '', 'americageorginaferrara;americaferrara;uglybetty;'),
(11, '', ' baichungbhutia;'),
(9, '', 'michaelphelps;michaelfredphelps;'),
(7, '', 'wimbledon;wimbledontournament;wimbledonopen;'),
(8, '', 'googlockholmes;'),
(6, '', 'chrysler;chryslergroup;chryslercorporation;chryslercorp;daimlerchrysler;daimlerchryslerag;'),
(4, '', 'splinter;'),
(5, '', 'jonathannivenjoncryer;joncryer;'),
(3, '', 'android;'),
(1, '', 'tata;tatagroup;'),
(2, '', 'henryford;');

-- --------------------------------------------------------

--
-- Table structure for table `googlockstart_end`
--

CREATE TABLE IF NOT EXISTS `googlockstart_end` (
  `no` int(11) NOT NULL,
  `start_timestamp` varchar(20) NOT NULL,
  `finish_timestamp` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `googlockstart_end`
--

INSERT INTO `googlockstart_end` (`no`, `start_timestamp`, `finish_timestamp`) VALUES
(0, '1348592100', '1348594200');

-- --------------------------------------------------------

--
-- Table structure for table `googlockusers`
--

CREATE TABLE IF NOT EXISTS `googlockusers` (
  `username` varchar(50) NOT NULL,
  `timed` bigint(20) NOT NULL DEFAULT '0',
  `password` varchar(50) NOT NULL,
  `completed` int(11) NOT NULL DEFAULT '0',
  `score` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `googlockusers`
--

INSERT INTO `googlockusers` (`username`, `timed`, `password`, `completed`, `score`) VALUES
('superuser', 0, '0baea2f0ae20150db78f58cddac442a9', 0, 0),
('c65', 0, 'cf30c5a9bfb152765dae97cee99689f8', 0, 0),
('abcd', 0, '240bc306d1a19916d636f3d614e03024', 0, 0),
('Remember the Milk', 1329325100, '202cb962ac59075b964b07152d234b70', 0, 0),
('team moriarty', 1329324479, '7ebd2b761cc689cc556cbb80af2bceda', 0, 0),
('coordinators2', 0, '8dd6ac1bca081e7329dcff208cfe28fb', 0, 0),
('kaushalv27', 1329325882, 'f573d58b8de1ce623b14b7569a96424c', 0, 0),
('a45', 0, '306754ce45dc3a2441a1828dcf3fe238', 0, 0),
('b45', 0, '48044979623ab599d9557300637aa49b', 0, 0),
('swena', 1348074641, '2d488a349a85cb8e9c6c0a0888fd4e06', 1, 10),
('coordinators', 0, '8dd6ac1bca081e7329dcff208cfe28fb', 15, 0),
('TheCerealKillers', 1329326064, '883d04d700fdc250a4c6a0332598faad', 0, 0),
('Prodigals', 1329324372, '7fb92f35601ab0b1c88b51d9beef53b9', 0, 0),
('times of da', 1329324654, '202cb962ac59075b964b07152d234b70', 0, 0),
('blah', 1329324373, '55ca49079f13284958f165aee3912c81', 0, 0),
('OLD MONKS', 1329325734, '0062d21c1a97acad0fff653df56849b2', 0, 0),
('d65', 1329324365, 'a14d6779bced4e2ed4971d7556a0da06', 0, 0),
('swena1', 0, '2d488a349a85cb8e9c6c0a0888fd4e06', 0, 0),
('hey', 0, '2d488a349a85cb8e9c6c0a0888fd4e06', 0, 0),
('jiya', 0, '2d488a349a85cb8e9c6c0a0888fd4e06', 0, 0),
('j201', 0, '2d488a349a85cb8e9c6c0a0888fd4e06', 0, 0),
('hum', 0, '03c7c0ace395d80182db07ae2c30f034', 0, 0),
('jaaaaadooooo', 1348575769, '03c7c0ace395d80182db07ae2c30f034', 20, 30),
('hay', 0, '03c7c0ace395d80182db07ae2c30f034', 0, 0),
('ifest', 0, '03c7c0ace395d80182db07ae2c30f034', 0, 0),
('rampyaari', 0, '03c7c0ace395d80182db07ae2c30f034', 0, 0),
('ramu', 0, '03c7c0ace395d80182db07ae2c30f034', 0, 0),
('yahoooooooo', 0, '03c7c0ace395d80182db07ae2c30f034', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `ifestid`
--

CREATE TABLE IF NOT EXISTS `ifestid` (
  `id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ifestid`
--

INSERT INTO `ifestid` (`id`) VALUES
(15),
(16),
(20),
(24);
