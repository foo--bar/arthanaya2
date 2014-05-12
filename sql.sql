-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 10, 2014 at 08:41 AM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `sedatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `contact` int(10) NOT NULL,
  `company` varchar(256) NOT NULL,
  `customer_id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`customer_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`name`, `email`, `contact`, `company`, `customer_id`) VALUES
('ameya', 'abc@gmail.com', 878, 'nvidia', 1),
('shivani', 'pqr@gmail.com', 888999, 'foobar', 2),
('ankit', 'sdd@gmail.com', 787897, ';lkj', 3),
('sharvari', 'shu@gmail.com', 3334, 'coep', 4),
('shubham', 'ghi@gmail.com', 8777, 'pqr', 5);

-- --------------------------------------------------------

--
-- Table structure for table `password`
--

CREATE TABLE IF NOT EXISTS `password` (
  `passwd` varchar(30) NOT NULL,
  PRIMARY KEY (`passwd`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `password`
--

INSERT INTO `password` (`passwd`) VALUES
('password');

-- --------------------------------------------------------

--
-- Table structure for table `purchaseorder`
--

CREATE TABLE IF NOT EXISTS `purchaseorder` (
  `date` date NOT NULL,
  `description` varchar(256) NOT NULL,
  `quantity` int(11) NOT NULL,
  `rate` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  KEY `customer_id` (`customer_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchaseorder`
--

INSERT INTO `purchaseorder` (`date`, `description`, `quantity`, `rate`, `customer_id`) VALUES
('2014-04-24', 'purchase goods', 7, 340, 1),
('2014-04-01', 'purchase goods', 7, 90, 1),
('2014-04-09', 'purchase goods', 7, 90, 2),
('2014-04-02', 'abc', 4, 5, 2),
('2014-05-07', 'lsakjf', 12, 12, 2);

-- --------------------------------------------------------

--
-- Table structure for table `salesorder`
--

CREATE TABLE IF NOT EXISTS `salesorder` (
  `date` date NOT NULL,
  `description` varchar(256) NOT NULL,
  `quantity` int(11) NOT NULL,
  `rate` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `pending` tinyint(1) NOT NULL,
  `salesorder_id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`salesorder_id`),
  KEY `customer_id` (`customer_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `salesorder`
--

INSERT INTO `salesorder` (`date`, `description`, `quantity`, `rate`, `customer_id`, `pending`, `salesorder_id`) VALUES
('2014-04-02', 'goods', 7, 87, 2, 1, 1),
('2014-03-05', 'in june', 65, 54, 4, 0, 2),
('2014-04-14', 'final working goods', 70, 1000, 2, 0, 3),
('2014-05-05', 'nothin', 12, 12, 3, 1, 8),
('2014-05-05', 'nothin', 12, 12, 3, 1, 9);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `purchaseorder`
--
ALTER TABLE `purchaseorder`
  ADD CONSTRAINT `purchaseorder_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`);

--
-- Constraints for table `salesorder`
--
ALTER TABLE `salesorder`
  ADD CONSTRAINT `salesorder_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`);
