-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 21, 2018 at 04:38 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ngo`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `subject` text NOT NULL,
  `message` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `subject`, `message`) VALUES
(1, 'Salik', 'msalik42@gmail.com', 'Join', ''),
(2, 'salik', 'msalik42@gmail.com', 'Join', 'hi i am interested to join this NGO'),
(4, 'Salik', 'msalik42@gmail.cotm', 'dfjak', 'jkldjflkajlk fla jklfj afkl adjlfa\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `donate`
--

CREATE TABLE `donate` (
  `id` int(11) NOT NULL,
  `email` varchar(60) NOT NULL,
  `contact` varchar(60) NOT NULL,
  `address` text NOT NULL,
  `type` varchar(60) NOT NULL,
  `description` text,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donate`
--

INSERT INTO `donate` (`id`, `email`, `contact`, `address`, `type`, `description`, `date`) VALUES
(8, 'msalik42@gmail.com', '8853365060', '91/1 malik tola maunath bhanjan, MAU', 'food', 'Some fried rice', '2018-03-07 00:25:30'),
(9, 'msalik42@gmail.com', '8853365060', '91/1 malik tola maunath bhanjan, MAU', 'cloth', 'some woolen cloths', '2018-03-07 00:25:41'),
(10, 'msalik42@gmail.com', '8853365060', '91/1 malik tola maunath bhanjan, MAU', 'food', 'Bhindi', '2018-03-07 00:26:01'),
(11, 'msalik42@gmail.com', '8853365060', '91/1 malik tola maunath bhanjan, MAU', 'food', 'keeme ki daal\r\n', '2018-03-07 00:26:15'),
(12, 'msalik42@gmail.com', '8853365060', '91/1 malik tola maunath bhanjan, MAU', 'cloth', 'Lower of 5 yr child', '2018-03-07 00:26:37'),
(13, 'msalik42@gmail.com', '8853365060', '91/1 malik tola maunath bhanjan, MAU', 'cloth', 'T-Shirt', '2018-03-07 00:26:48'),
(14, 'msalik42@gmail.com', '8853365060', '91/1 malik tola maunath bhanjan, MAU', 'cloth', 'some cotton cloths', '2018-03-07 00:38:15'),
(15, 'msalik42@gmail.com', '8853365060', '91/1 malik tola maunath bhanjan, MAU', 'cloth', 'some woolen cloths\r\n', '2018-03-10 13:15:24'),
(16, 'msalik42@gmail.com', '8853365060', '91/1 malik tola maunath bhanjan, MAU', 'cloth', 'abc def ghi jkl about the cloth', '2018-03-21 21:49:38'),
(17, 'msalik42@gmail.com', '8853365060', '91/1 daal mandi varansi', 'food', 'some rice', '2018-03-21 21:52:52');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `contact` varchar(60) NOT NULL,
  `address` text,
  `password` varchar(60) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `contact`, `address`, `password`) VALUES
(4, 'Mohammad Salik', 'msalik42@gmail.com', '8853365060', '91/1 daal mandi varansi', 'salikansari');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donate`
--
ALTER TABLE `donate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `donate`
--
ALTER TABLE `donate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
