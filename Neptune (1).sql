-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 14, 2022 at 05:03 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Neptune`
--

-- --------------------------------------------------------

--
-- Table structure for table `idbrands`
--

CREATE TABLE `idbrands` (
  `id` int(11) NOT NULL,
  `logo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `idbrands`
--

INSERT INTO `idbrands` (`id`, `logo`) VALUES
(28, '166477240413948.png'),
(36, '166572705315312.png'),
(38, '166572726113248.png');

-- --------------------------------------------------------

--
-- Table structure for table `portflio`
--

CREATE TABLE `portflio` (
  `id` int(11) NOT NULL,
  `p_name` varchar(255) NOT NULL,
  `p_category` varchar(1200) NOT NULL,
  `p_descprition` text NOT NULL,
  `photo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `portflio`
--

INSERT INTO `portflio` (`id`, `p_name`, `p_category`, `p_descprition`, `photo`) VALUES
(13, 'Vincent Duffy', 'Nostrud itaque in cu', '', 'portfolio_details.jpg'),
(14, 'Shaeleigh Dillard', 'Quos quasi debitis p', '', 'portfolio_details01.jpg'),
(15, 'Jasper Duffy', 'Minima do non facili', 'Sunt Nam ipsa, quis .&nbsp;', 'portfolio_details.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `sent_message`
--

CREATE TABLE `sent_message` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sent_message`
--

INSERT INTO `sent_message` (`id`, `name`, `email`, `message`) VALUES
(1, 'mamum', 'mamun1234@gmail.com', 'vmgj'),
(2, 'mamum', 'mamun1234@gmail.com', 'nice work');

-- --------------------------------------------------------

--
-- Table structure for table `Services`
--

CREATE TABLE `Services` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `logo` varchar(100) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Services`
--

INSERT INTO `Services` (`id`, `title`, `description`, `logo`, `status`) VALUES
(27, 'web Degin', 'best design', 'fa-bookmark', 1),
(30, 'Web Development', 'Web developer', 'fa-angellist', 1),
(31, 'andriod', 'Lorem Ipsum is simply dummy text of the printing a', 'fa-android', 1);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `settings_name` varchar(255) NOT NULL,
  `settings_value` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `settings_name`, `settings_value`) VALUES
(1, 'address', 'Dhaka'),
(2, 'phone number', '017xxxxxxxxx'),
(3, 'email_address', 'mi@gamil.com'),
(4, 'about_me', 'i am progemmer.'),
(5, 'Owner Name', 'Mahababur'),
(6, 'owner describe', 'i am Mahababur. i am programmer. i like codding'),
(7, 'FB', 'hj');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` int(11) NOT NULL,
  `skill_nmae` varchar(255) NOT NULL,
  `skill_details` text NOT NULL,
  `skill_range` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `skill_nmae`, `skill_details`, `skill_range`) VALUES
(2, 'Html', 'Incididunt consequat bnfjyt fytuyk fjykul strete dy5uyki stet5 hgjy vjyk xrfewt vjyk', 93),
(3, 'C++', 'Incididunt consequat bnfjyt fytuyk fjykul strete dy5uyki stet5 hgjy vjyk xrfewt vjyk', 83),
(4, 'python', 'Incididunt consequat bnfjyt fytuyk fjykul strete dy5uyki stet5 hgjy vjyk xrfewt vjyk', 58);

-- --------------------------------------------------------

--
-- Table structure for table `testmonial`
--

CREATE TABLE `testmonial` (
  `id` int(11) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `descprition` text NOT NULL,
  `name` varchar(200) NOT NULL,
  `idea` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `testmonial`
--

INSERT INTO `testmonial` (`id`, `photo`, `descprition`, `name`, `idea`) VALUES
(3, 'DSC06224.jpg', 'Aut dicta a consecte', 'Giselle Winters', 'Uriah Pollard'),
(4, 'Logo-PNG.png', 'Labore eos ipsa be', 'Neve Cook', 'Quinn Stanton');

-- --------------------------------------------------------

--
-- Table structure for table `upload_pdf`
--

CREATE TABLE `upload_pdf` (
  `id` int(11) NOT NULL,
  `cv_pdf` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `upload_pdf`
--

INSERT INTO `upload_pdf` (`id`, `cv_pdf`) VALUES
(1, '166522318816334.pdf'),
(2, '166522371120944.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `user_regi`
--

CREATE TABLE `user_regi` (
  `id` int(11) NOT NULL,
  `u_name` varchar(150) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `imge` varchar(100) DEFAULT NULL,
  `phone` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_regi`
--

INSERT INTO `user_regi` (`id`, `u_name`, `email`, `pass`, `imge`, `phone`) VALUES
(14, 'nokum', 'weka@mailinator.com', '25d55ad283aa400af464c76d713c07ad', '14.png', ''),
(15, 'Mamun', 'mamun123@gmail.com', '25d55ad283aa400af464c76d713c07ad', '15.png', ''),
(16, 'Mamun', 'mamun1@gmail.com', '25d55ad283aa400af464c76d713c07ad', NULL, ''),
(17, 'Mamun', 'mamun1234@gmail.com', '25d55ad283aa400af464c76d713c07ad', NULL, ''),
(18, 'Mamun', 'mamun5@gmail.com', '25d55ad283aa400af464c76d713c07ad', NULL, ''),
(19, 'Mamun', 'mamun8@gmail.com', '25d55ad283aa400af464c76d713c07ad', NULL, ''),
(20, 'Mamun', 'mamun11@gmail.com', '25d55ad283aa400af464c76d713c07ad', NULL, ''),
(21, 'Mamun', 'mamun134@gmail.com', '25d55ad283aa400af464c76d713c07ad', NULL, ''),
(22, 'zypiwyhi', 'zekepi@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', NULL, ''),
(23, 'waqobypowi', 'keqasat@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', NULL, ''),
(25, 'bywiqe', 'joficul@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', NULL, '01452363656'),
(26, 'mynog', 'tapodyriv@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', NULL, '+1 (842) 492-1743'),
(27, 'gyseqehufe', 'puse@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', NULL, '01745010925'),
(28, 'Mamun', 'mamun0@gmail.com', '22975d8a5ed1b91445f6c55ac121505b', NULL, '01745010925'),
(29, 'fetatynida', 'lukomi@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', NULL, '01745010925'),
(30, 'zexodolec', 'tuhe@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', NULL, '01745010925'),
(31, 'hohary', 'fogujyp@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', NULL, '01745010925'),
(32, 'wusevafi', 'vaduc@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', NULL, '01745010925'),
(33, 'Joy Mahanta', 'joy@gmail.com', '25f9e794323b453885f5181f1b624d0b', NULL, '01745010925'),
(34, 'didohimavu', 'bavofihyn@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', NULL, '01745010925');

-- --------------------------------------------------------

--
-- Table structure for table `work`
--

CREATE TABLE `work` (
  `id` int(11) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `number` int(11) NOT NULL,
  `descprition` text NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `work`
--

INSERT INTO `work` (`id`, `logo`, `number`, `descprition`, `status`) VALUES
(3, 'fa-amazon', 223, 'Account', 1),
(4, 'fa-500px', 122, 'mams', 0),
(5, 'fa-code', 30, 'Project', 1),
(6, 'fa-birthday-cake', 2, 'Company', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `idbrands`
--
ALTER TABLE `idbrands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portflio`
--
ALTER TABLE `portflio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sent_message`
--
ALTER TABLE `sent_message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Services`
--
ALTER TABLE `Services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testmonial`
--
ALTER TABLE `testmonial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `upload_pdf`
--
ALTER TABLE `upload_pdf`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_regi`
--
ALTER TABLE `user_regi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `work`
--
ALTER TABLE `work`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `idbrands`
--
ALTER TABLE `idbrands`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `portflio`
--
ALTER TABLE `portflio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `sent_message`
--
ALTER TABLE `sent_message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `Services`
--
ALTER TABLE `Services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `testmonial`
--
ALTER TABLE `testmonial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `upload_pdf`
--
ALTER TABLE `upload_pdf`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_regi`
--
ALTER TABLE `user_regi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `work`
--
ALTER TABLE `work`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
