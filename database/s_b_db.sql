-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 31, 2019 at 04:18 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `s_b_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `b_about`
--

CREATE TABLE `b_about` (
  `id` int(11) NOT NULL,
  `img` varchar(50) NOT NULL,
  `details` text NOT NULL,
  `project` int(11) NOT NULL,
  `satisfaction` int(11) NOT NULL,
  `rating` int(11) NOT NULL,
  `skills` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `b_about`
--

INSERT INTO `b_about` (`id`, `img`, `details`, `project`, `satisfaction`, `rating`, `skills`) VALUES
(1, 'c8a532fd7c.png', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum, nisi sed deleniti ex nostrum qui veritatis necessitatibus quod, ea reiciendis saepe est culpa! Dolor debitis, suscipit tenetur inventore, magnam est iure aliquam vel sint dolore libero architecto impedit accusamus eos dolorum autem voluptatem, assumenda commodi minus omnis quasi eum veniam?</p>\r\n                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga nostrum deleniti consequuntur, soluta corporis similique.</p>', 37, 56, 96, 86);

-- --------------------------------------------------------

--
-- Table structure for table `b_companyname`
--

CREATE TABLE `b_companyname` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `b_companyname`
--

INSERT INTO `b_companyname` (`id`, `name`) VALUES
(1, 'Hola');

-- --------------------------------------------------------

--
-- Table structure for table `b_contact`
--

CREATE TABLE `b_contact` (
  `id` int(11) NOT NULL,
  `link` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `b_contact`
--

INSERT INTO `b_contact` (`id`, `link`) VALUES
(1, 'https://www.youtube.com/watch?v=uqkm0MnHAv4');

-- --------------------------------------------------------

--
-- Table structure for table `b_count`
--

CREATE TABLE `b_count` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `b_count`
--

INSERT INTO `b_count` (`id`, `name`, `number`) VALUES
(1, 'Work Done', 2350270),
(2, 'Happy Client', 3542085),
(3, 'Coffee Taken', 8573391),
(4, 'Got Award', 13021);

-- --------------------------------------------------------

--
-- Table structure for table `b_header`
--

CREATE TABLE `b_header` (
  `id` int(11) NOT NULL,
  `heading` varchar(40) NOT NULL,
  `subtitle` text NOT NULL,
  `images` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `b_header`
--

INSERT INTO `b_header` (`id`, `heading`, `subtitle`, `images`) VALUES
(38, ' CREATIVE TEAM', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text.\r\n', '../image/3addf209fa.jpg'),
(39, ' AWESOME AGENCY', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text.', '../image/7cc1166d13.jpg'),
(40, ' POWERFUL COMPANY', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text.', '../image/75c0ed75dc.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `b_navigator`
--

CREATE TABLE `b_navigator` (
  `id` int(11) NOT NULL,
  `slag` varchar(20) NOT NULL,
  `menuName` varchar(20) NOT NULL,
  `icon` varchar(58) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `b_navigator`
--

INSERT INTO `b_navigator` (`id`, `slag`, `menuName`, `icon`) VALUES
(1, 'banner', 'Home', 'fas fa-fw fa-home'),
(2, 'about', 'About Us', 'fas fa-fw fa-user'),
(3, 'portfolio', 'Our Protfolio', 'fas fa-fw fa-graduation-cap'),
(4, 'service', 'Our Service', 'fas fa-fw fa-server'),
(5, 'team', 'Our Team', 'fas fa-fw fa-child'),
(6, 'contact', 'Contact Us', 'fas fa-fw fa-phone-square');

-- --------------------------------------------------------

--
-- Table structure for table `b_our_serv`
--

CREATE TABLE `b_our_serv` (
  `id` int(11) NOT NULL,
  `s_text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `b_our_serv`
--

INSERT INTO `b_our_serv` (`id`, `s_text`) VALUES
(1, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia quaerat accusantium, voluptate tempore natus ipsam minima tenetur et sed debitis, veniam cum illum, hic aperiam saepe! Voluptates, illum obcaecati modi blanditiis eius pariatur officiis veniam. quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.');

-- --------------------------------------------------------

--
-- Table structure for table `b_porfolio`
--

CREATE TABLE `b_porfolio` (
  `id` int(11) NOT NULL,
  `topimg_1` varchar(255) NOT NULL,
  `topimg_2` varchar(255) NOT NULL,
  `btmimg_1` varchar(255) NOT NULL,
  `btmimg_2` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `b_porfolio`
--

INSERT INTO `b_porfolio` (`id`, `topimg_1`, `topimg_2`, `btmimg_1`, `btmimg_2`) VALUES
(39, '8af6c9fb8f.jpg', 'thumb1_8af6c9fb8f.jpg', '8af6c9fb8f.jpg', 'thumb2_8af6c9fb8f.jpg'),
(40, 'cd34b6a3ad.jpg', 'thumb1_cd34b6a3ad.jpg', 'cd34b6a3ad.jpg', 'thumb2_cd34b6a3ad.jpg'),
(41, '4fbd78c5c3.jpg', 'thumb1_4fbd78c5c3.jpg', '4fbd78c5c3.jpg', 'thumb2_4fbd78c5c3.jpg'),
(42, 'cb46974841.jpg', 'thumb1_cb46974841.jpg', 'cb46974841.jpg', 'thumb2_cb46974841.jpg'),
(43, '3ecfde0116.png', 'thumb1_3ecfde0116.png', '3ecfde0116.png', 'thumb2_3ecfde0116.png'),
(44, '97e940d798.png', 'thumb1_97e940d798.png', '97e940d798.png', 'thumb2_97e940d798.png');

-- --------------------------------------------------------

--
-- Table structure for table `b_price`
--

CREATE TABLE `b_price` (
  `id` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `title` varchar(20) NOT NULL,
  `tag_1` varchar(50) NOT NULL,
  `tag_2` varchar(50) NOT NULL,
  `tag_3` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `b_price`
--

INSERT INTO `b_price` (`id`, `price`, `title`, `tag_1`, `tag_2`, `tag_3`) VALUES
(1, 15, 'freelance', '1 GB of space', 'Support at $25/hour', 'Limited cloud access'),
(2, 30, 'business', '5 GB of space', 'Support at $5/hour', 'Full cloud access'),
(3, 60, 'enterprise', '10 GB of space', 'Support at $5/hour', 'Full cloud access');

-- --------------------------------------------------------

--
-- Table structure for table `b_serv`
--

CREATE TABLE `b_serv` (
  `id` int(11) NOT NULL,
  `icon` varchar(30) NOT NULL,
  `title` varchar(20) NOT NULL,
  `details` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `b_serv`
--

INSERT INTO `b_serv` (`id`, `icon`, `title`, `details`) VALUES
(3, 'fa fa-cogs', 'Web Development', 'Lorem ipsum dolor sit amet, consectetur adiing elit, sed do eiusmod tempor incididunt utabore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.'),
(4, 'fa fa-tablet', 'Apps Development', 'Lorem ipsum dolor sit amet, consectetur adiing elit, sed do eiusmod tempor incididunt utabore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.'),
(13, 'fa fa-tablet', 'Apps Development', 'Lorem ipsum dolor sit amet, consectetur adiing elit, sed do eiusmod tempor incididunt utabore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.');

-- --------------------------------------------------------

--
-- Table structure for table `b_team`
--

CREATE TABLE `b_team` (
  `id` int(11) NOT NULL,
  `nm` varchar(20) NOT NULL,
  `designation` varchar(30) NOT NULL,
  `fb` varchar(30) NOT NULL,
  `twitter` varchar(30) NOT NULL,
  `linkedin` varchar(30) NOT NULL,
  `img` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `b_team`
--

INSERT INTO `b_team` (`id`, `nm`, `designation`, `fb`, `twitter`, `linkedin`, `img`) VALUES
(17, 'Shakib', 'Web Designer', 'Shakib', 'Shakib', 'Shakib', '18a8dd8bd4.jpg'),
(18, 'Tahsan', 'Web Developer', 'Tahsan', 'Tahsan', 'Tahsan', '36a4617655.jpg'),
(19, 'Fatima', 'Digital Marketer', 'Fatima', 'Fatima', 'Fatima', 'ee82287ebf.jpg'),
(21, 'Alex', 'App Developer', 'Alex', 'Alex', 'Alex', '1f9abc4012.jpg'),
(22, 'hrlll', 'fdgdfg', 'fgdf', 'fgfg', 'dfgdfg', '2b3211cf63.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `b_testimonial`
--

CREATE TABLE `b_testimonial` (
  `id` int(11) NOT NULL,
  `comment` text NOT NULL,
  `nm` varchar(20) NOT NULL,
  `img` varchar(20) NOT NULL,
  `cdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `b_testimonial`
--

INSERT INTO `b_testimonial` (`id`, `comment`, `nm`, `img`, `cdate`) VALUES
(1, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum, veritatis, aut. Aperiam quas sunt numquam, quos eaque', 'Shakibul A.', 'testimonial2.png', '2019-08-27'),
(2, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum, veritatis, aut. Aperiam quas sunt numquam, quos eaque', 'Mrs Jerry', 'testimonial1.png', '2019-01-17'),
(3, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum, veritatis, aut. Aperiam quas sunt numquam, quos eaque', 'Shuvo Kiron', 'testimonial3.png', '2019-08-22'),
(4, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum, veritatis, aut. Aperiam quas sunt numquam, quos eaque', 'Alvi Alam', 'testimonial2.png', '2019-08-26');

-- --------------------------------------------------------

--
-- Table structure for table `b_user`
--

CREATE TABLE `b_user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `pass` varchar(50000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `b_user`
--

INSERT INTO `b_user` (`id`, `username`, `pass`) VALUES
(1, 'demo', '$2y$10$w.pu0TQdXybe5peDWuVL7eNThm6E59Pa.dvn7hYdBJdiWyhE1j7Ta');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `b_about`
--
ALTER TABLE `b_about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `b_companyname`
--
ALTER TABLE `b_companyname`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `b_contact`
--
ALTER TABLE `b_contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `b_count`
--
ALTER TABLE `b_count`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `b_header`
--
ALTER TABLE `b_header`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `b_navigator`
--
ALTER TABLE `b_navigator`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `b_our_serv`
--
ALTER TABLE `b_our_serv`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `b_porfolio`
--
ALTER TABLE `b_porfolio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `b_price`
--
ALTER TABLE `b_price`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `b_serv`
--
ALTER TABLE `b_serv`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `b_team`
--
ALTER TABLE `b_team`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `b_testimonial`
--
ALTER TABLE `b_testimonial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `b_user`
--
ALTER TABLE `b_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `b_about`
--
ALTER TABLE `b_about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `b_companyname`
--
ALTER TABLE `b_companyname`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `b_contact`
--
ALTER TABLE `b_contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `b_count`
--
ALTER TABLE `b_count`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `b_header`
--
ALTER TABLE `b_header`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `b_navigator`
--
ALTER TABLE `b_navigator`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `b_our_serv`
--
ALTER TABLE `b_our_serv`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `b_porfolio`
--
ALTER TABLE `b_porfolio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `b_price`
--
ALTER TABLE `b_price`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `b_serv`
--
ALTER TABLE `b_serv`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `b_team`
--
ALTER TABLE `b_team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `b_testimonial`
--
ALTER TABLE `b_testimonial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `b_user`
--
ALTER TABLE `b_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
