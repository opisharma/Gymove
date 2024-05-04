-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 04, 2022 at 07:19 AM
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
-- Database: `eggle`
--

-- --------------------------------------------------------

--
-- Table structure for table `baner_img`
--

CREATE TABLE `baner_img` (
  `id` int(11) NOT NULL,
  `baner_img` varchar(200) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'hide'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `baner_img`
--

INSERT INTO `baner_img` (`id`, `baner_img`, `status`) VALUES
(12, '12.png', 'show');

-- --------------------------------------------------------

--
-- Table structure for table `baner_img2`
--

CREATE TABLE `baner_img2` (
  `baner_img` varchar(100) NOT NULL,
  `id` int(11) NOT NULL,
  `status` text NOT NULL DEFAULT 'hide'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `baner_img2`
--

INSERT INTO `baner_img2` (`baner_img`, `id`, `status`) VALUES
('18.png', 18, 'hide'),
('19.png', 19, 'show');

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `id` int(11) NOT NULL,
  `brand_thumnail_1` varchar(100) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'hide'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`id`, `brand_thumnail_1`, `status`) VALUES
(9, '9.png', 'show'),
(12, '12.png', 'show'),
(16, '16.png', 'show'),
(17, '17.png', 'show'),
(18, '18.png', 'show'),
(20, '20.png', 'show');

-- --------------------------------------------------------

--
-- Table structure for table `fact_area`
--

CREATE TABLE `fact_area` (
  `id` int(11) NOT NULL,
  `fact_icon` varchar(100) NOT NULL,
  `fact_count` varchar(100) NOT NULL,
  `fact_content` varchar(100) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'hide'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fact_area`
--

INSERT INTO `fact_area` (`id`, `fact_icon`, `fact_count`, `fact_content`, `status`) VALUES
(7, 'fa fa-bullhorn', '345', 'Feature Item', 'show'),
(10, 'fa fa-beer', '3000', 'OUR CLIENTS', 'show');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `ID` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` varchar(100) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'unread'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`ID`, `name`, `email`, `message`, `status`) VALUES
(3, 'Dexter Nielsen', 'holelo@mailinator.com', 'Molestiae dolore des', 'read'),
(4, 'Drew Mathis', 'wihezajip@mailinator.com', 'Dolore earum repelle', 'read');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

CREATE TABLE `portfolio` (
  `id` int(11) NOT NULL,
  `portfolio_catagory` varchar(100) NOT NULL,
  `portfolio_title` varchar(100) NOT NULL,
  `portfolio_details` varchar(100) NOT NULL,
  `portfolio_thumbnail` varchar(100) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'hide'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `portfolio`
--

INSERT INTO `portfolio` (`id`, `portfolio_catagory`, `portfolio_title`, `portfolio_details`, `portfolio_thumbnail`, `status`) VALUES
(1, 'HTML', 'Web Design', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatibus illum provident saepe. Quidem', '1.jpg', 'show'),
(3, 'JAVASCRIFT', 'Web Design', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatibus illum provident saepe. Quidem', '3.jpg', 'show'),
(5, 'HTML', 'Web Design', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatibus illum provident saepe. Quidem', '5.jpg', 'show');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id` int(11) NOT NULL,
  `service_name` varchar(100) NOT NULL,
  `service_details` varchar(100) NOT NULL,
  `service_icon` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'show'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id`, `service_name`, `service_details`, `service_icon`, `status`) VALUES
(16, 'APP DEVELOPING', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed venenatis lectus tortorism.', 'fa fa-assistive-listening-systems', 'show'),
(17, 'WEB DESIGN', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed venenatis lectus tortorism.', 'fa fa-arrow-circle-o-up', 'show'),
(18, 'WEB DEVELOPMENT', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed venenatis lectus tortorism.', 'fa fa-assistive-listening-systems', 'show');

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE `setting` (
  `id` int(11) NOT NULL,
  `setting_name` varchar(100) NOT NULL,
  `setting_value` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`id`, `setting_name`, `setting_value`) VALUES
(1, 'owner_name', 'Jahin al mahmud'),
(3, 'owner_phone', '01881471974'),
(4, 'owner_email', 'mahmudaljahi@gmial.com'),
(5, 'office_address', '123/A, MirpurCity, Likaoli Prikano, Bangladesh'),
(6, 'office_in', 'Dhaka'),
(7, 'contact_details', 'Event definition is - somthing that happens occurre How evesnt sentence. Synonym when an unknown printer took a galley.'),
(8, 'facebook', 'https://www.facebook.com/'),
(9, 'twitter', 'https://twitter.com/'),
(10, 'instagram', 'https://www.instagram.com/'),
(11, 'pinterest', 'https://www.facebook.com/'),
(13, 'logo_img', '1643827244.png'),
(14, 'about_description', 'I am jahin al mahmud , professional web developer with long time experience in this field​.'),
(15, 'about_me_description', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid perferendis placeat at suscipit atque temporibus sequi perspiciatis nisi accusamus cumque, deleniti laborum ad commodi inventore ratione, repellendus voluptas facere architecto?');

-- --------------------------------------------------------

--
-- Table structure for table `skill`
--

CREATE TABLE `skill` (
  `id` int(11) NOT NULL,
  `skill_width` varchar(100) NOT NULL,
  `skill_value` varchar(100) NOT NULL,
  `skill_catagory` varchar(100) NOT NULL,
  `skill_details` varchar(100) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'hide'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `skill`
--

INSERT INTO `skill` (`id`, `skill_width`, `skill_value`, `skill_catagory`, `skill_details`, `status`) VALUES
(5, '30% ', '30', 'Html', 'php', 'show');

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE `testimonial` (
  `ID` int(10) UNSIGNED NOT NULL,
  `section_title_img` varchar(100) NOT NULL,
  `testi_details` varchar(100) NOT NULL,
  `testi_content_name` varchar(100) NOT NULL,
  `testi_content_h5` varchar(100) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'hide'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `testimonial`
--

INSERT INTO `testimonial` (`ID`, `section_title_img`, `testi_details`, `testi_content_name`, `testi_content_h5`, `status`) VALUES
(4, '4.png', ' An event is a message sent by an object to signal the occur rence of an action. The action can caus', 'Jahin Al Mahmud', 'head of idea', 'show');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `FullName` varchar(100) NOT NULL,
  `UserName` varchar(100) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `PhoneNumber` varchar(20) NOT NULL,
  `Dob` date NOT NULL,
  `password` varchar(100) NOT NULL,
  `default_photo` varchar(100) NOT NULL DEFAULT 'default_profile_photo.jpg',
  `default_cover_photo` varchar(100) NOT NULL DEFAULT 'default_cover_photo.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `FullName`, `UserName`, `Email`, `PhoneNumber`, `Dob`, `password`, `default_photo`, `default_cover_photo`) VALUES
(26, 'Jahin Al Mahmud', 'Mahmud', 'mahmudaljahin@gmail.com ', '', '2000-10-05', '152928', '26.png', '26.png'),
(27, 'Almahmud', 'almahmud', 'zodex@mailinator.com ', '', '1973-09-13', '12', 'default_profile_photo.jpg', 'default_cover_photo.jpg'),
(28, 'John', 'vubopa', 'John@mailinator.com ', '', '1990-12-02', 'Pa$$w0rd!', 'default_profile_photo.jpg', 'default_cover_photo.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `baner_img`
--
ALTER TABLE `baner_img`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `baner_img2`
--
ALTER TABLE `baner_img2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fact_area`
--
ALTER TABLE `fact_area`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skill`
--
ALTER TABLE `skill`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonial`
--
ALTER TABLE `testimonial`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `baner_img`
--
ALTER TABLE `baner_img`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `baner_img2`
--
ALTER TABLE `baner_img2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `fact_area`
--
ALTER TABLE `fact_area`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `setting`
--
ALTER TABLE `setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `skill`
--
ALTER TABLE `skill`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
