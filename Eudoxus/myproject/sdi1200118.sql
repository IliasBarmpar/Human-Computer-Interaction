-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 14, 2019 at 09:48 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `Title` varchar(30) CHARACTER SET utf16 NOT NULL,
  `Writer` varchar(30) CHARACTER SET utf16 NOT NULL,
  `Department` varchar(30) CHARACTER SET utf16 NOT NULL,
  `University` varchar(30) CHARACTER SET utf16 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`Title`, `Writer`, `Department`, `University`) VALUES
('?㼿㼿㼿‱', '?㼿㼿㼠㼿㼿㼿㼿', '?㼿㼿㼿㼿㼿', '㼿㼿㼿㼿㼿㼠㼿㼠㼿㼿㼿㼿㼿㼿'),
('Ανάλυση 1', 'Μάριος Τζαβάρας', 'Μαθηματικών', 'ΑΛΕΞΑΝΔΡΕΙΟ ΤΕΙ ΘΕΣΣΑΛΟΝΙΚΗΣ'),
('Ανάλυση 2', 'Μάριος Τζαβάρας', 'Μαθηματικών', 'ΑΛΕΞΑΝΔΡΕΙΟ ΤΕΙ ΘΕΣΣΑΛΟΝΙΚΗΣ'),
('Θρησκεύματα και Πίστη', 'Βαγγέλης Δαλιάνης', 'Εκκλησιαστικών Σπουδών', 'ΑΝΩΤΑΤΗ ΕΚΚΛΗΣΙΑΣΤΙΚΗ ΑΚΑΔΗΜΙΑ'),
('Ινδουισμός', 'Βαγγέλης Δαλιάνης', 'Εκκλησιαστικών Σπουδών', 'ΑΝΩΤΑΤΗ ΕΚΚΛΗΣΙΑΣΤΙΚΗ ΑΚΑΔΗΜΙΑ');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Email` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Lastname` varchar(30) NOT NULL,
  `Type` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Email`, `Password`, `Name`, `Lastname`, `Type`) VALUES
('sdi@aaa', '1234', 'ilias', 'barbar', '1'),
('sdi@dididi', 'liakou', 'aaa', 'bbb', 'student'),
('sdi@htm', '1234', 'ilias', 'barbar', '1'),
('sdi@htmmm', '1234', 'ilias', 'barbar', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
