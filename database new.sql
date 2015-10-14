-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 14, 2015 at 05:22 PM
-- Server version: 5.5.42
-- PHP Version: 5.6.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `flex_pool_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_users`
--

CREATE TABLE `admin_users` (
  `id` int(100) NOT NULL,
  `name` text NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_users`
--

INSERT INTO `admin_users` (`id`, `name`, `username`, `password`) VALUES
(1, 'Adrian Diaz', 'adrian', 'flex');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(100) NOT NULL,
  `category` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category`) VALUES
(1, 'Design'),
(2, 'Motion'),
(3, 'Development'),
(4, 'QA');

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `id` int(100) NOT NULL,
  `name` text NOT NULL,
  `country` text NOT NULL,
  `category` int(11) NOT NULL,
  `role` text NOT NULL,
  `skills` text NOT NULL,
  `availability` text NOT NULL,
  `agency` text NOT NULL,
  `last_modified` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`id`, `name`, `country`, `category`, `role`, `skills`, `availability`, `agency`, `last_modified`) VALUES
(2, 'Daniel', 'CR', 1, 'Front-End Engineer', 'chao', '["available","booked","booked","booked","booked","available","available","booked","booked","booked","booked","booked","halftime","halftime","halftime","halftime","halftime","available","available","available","available","available"]', '["","Flex","Flex","Flex","Flex","","","Flex","Flex","Flex","Flex","Flex","Flex","Flex","Flex","Flex","Flex","","","","",""]', '2015-10-01'),
(14, 'carlos', 'CR', 1, 'Creative Enginner', 'Web Designer', '["available","booked","booked","booked","booked","available","available","booked","booked","booked","booked","booked","halftime","halftime","halftime","halftime","halftime","available","available","available","available","available"]', '["","Flex","Flex","Flex","Flex","","","Flex","Flex","Flex","Flex","Flex","Flex","Flex","Flex","Flex","Flex","","","","",""]', '2015-10-02'),
(15, 'carlos', 'CR', 1, 'Creative QA Analyst', 'Web Designer', '["available","available","available","available","available","available","available","booked","booked","booked","booked","booked","halftime","halftime","halftime","halftime","halftime","available","available","available","available","available"]', '', '2015-10-03'),
(19, 'Carlos Campos Vargas', 'CR', 4, 'Functional QA Analyst', 'QA', '["available","booked","booked","booked","booked","available","available","booked","booked","booked","booked","booked","halftime","halftime","halftime","halftime","halftime","available","available","available","available","available"]', '["","Flex","Flex","Flex","Flex","","","Flex","Flex","Flex","Flex","Flex","Flex","Flex","Flex","Flex","Flex","","","","",""]', '2015-10-13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_users`
--
ALTER TABLE `admin_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category` (`category`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_users`
--
ALTER TABLE `admin_users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=28;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `profiles`
--
ALTER TABLE `profiles`
  ADD CONSTRAINT `profiles_ibfk_1` FOREIGN KEY (`category`) REFERENCES `categories` (`id`);
