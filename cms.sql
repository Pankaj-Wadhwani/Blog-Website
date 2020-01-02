-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2019 at 01:02 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(11) NOT NULL,
  `cat_title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(4, 'java'),
(7, 'c'),
(8, 'c++');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(11) NOT NULL,
  `comment_post_id` int(11) NOT NULL,
  `comment_author` varchar(255) NOT NULL,
  `comment_email` varchar(255) NOT NULL,
  `comment_content` text NOT NULL,
  `comment_status` varchar(255) NOT NULL DEFAULT 'unapproved',
  `comment_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `comment_post_id`, `comment_author`, `comment_email`, `comment_content`, `comment_status`, `comment_date`) VALUES
(3, 7, 'pankaj', 'pan@g.com', 'http', 'approved', '2019-01-03'),
(4, 7, 'shailu', 'a', 'aaa', 'approved', '2019-01-03'),
(5, 6, 'pankaj', 'pan@g.com', 'ooooo', 'unapproved', '2019-02-04'),
(6, 6, 'pankaj', 'pankajwadhwani100@gmail.com', 'mmmmmmmmmmmmmmmmmm', 'unapproved', '2019-02-04'),
(7, 6, 'pankaj', 'pankajwadhwani100@gmail.com', 'mmmmmmmmmmmmmmmmmm', 'unapproved', '2019-02-04'),
(8, 6, 'pankaj', 'pankajwadhwani100@gmail.com', 'mmmmmmmmmmmmmmmmmm', 'unapproved', '2019-02-04'),
(9, 6, 'pankaj', 'pankajwadhwani100@gmail.com', 'mmmmmmmmmmmmmmmmmm', 'unapproved', '2019-02-04'),
(10, 6, 'shailu', 'shai@gmail.com', 'ooooooooooooooooaaaaaaaaaaa', 'unapproved', '2019-02-04'),
(11, 6, 'tar', 'tar', 'tar', 'unapproved', '2019-02-04');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(11) NOT NULL,
  `post_cat_id` int(11) NOT NULL,
  `post_title` varchar(255) NOT NULL,
  `post_author` varchar(255) NOT NULL,
  `post_date` date NOT NULL,
  `post_image` text NOT NULL,
  `post_content` text NOT NULL,
  `post_tags` varchar(255) NOT NULL,
  `post_comment_count` int(11) NOT NULL DEFAULT '0',
  `post_status` varchar(255) NOT NULL,
  `post_views_count` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `post_cat_id`, `post_title`, `post_author`, `post_date`, `post_image`, `post_content`, `post_tags`, `post_comment_count`, `post_status`, `post_views_count`) VALUES
(6, 7, 'colors', '4', '2018-12-28', 'emiliano-vittoriosi-703094-unsplash.jpg', 'colors', 'tarun,ui,iu', 0, 'draft', 0),
(7, 8, 'classes', '6', '2018-12-28', 'emiliano-vittoriosi-703094-unsplash.jpg', 'classes', 'c++,shailu', 0, 'published', 0),
(8, 4, 'a', '6', '2019-01-03', 'fancycrave-458022-unsplash.jpg', 'a', 'a', 0, 'draft', 0),
(9, 7, 'classes', '6', '2019-01-20', 'images.jpg', 'classes', 'c++,shailu', 0, 'draft', 0),
(10, 8, 'classes and objects', '6', '2019-02-03', 'IMG-20180324-WA0016.jpg', 'pppppppppppppppp', 'c++,shailu', 0, 'published', 0),
(11, 4, 'a', '6', '2019-02-03', 'IMG-20180324-WA0016.jpg', '<p style=\"text-align: center;\"><em><strong>paa</strong></em></p>\r\n<p style=\"text-align: center;\"><em><strong>apapap</strong></em></p>', 'tarun,ui,iu', 0, 'draft', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `role` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `first_name`, `last_name`, `email`, `image`, `role`, `token`) VALUES
(6, 'paa', '$2y$10$5qpiKZ2lcHWWkLbzCMw/PeZ//OzRoxMNxRGWtF9oHLtfcKezfbF6S', 'pa', 'pa', 'pankajwadhwani100@gmail.com', 'boat.jpg', 'subscriber', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
