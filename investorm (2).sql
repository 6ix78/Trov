-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 01, 2023 at 09:40 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `investorm`
--

-- --------------------------------------------------------

--
-- Table structure for table `balance`
--

CREATE TABLE `balance` (
  `id` int(100) NOT NULL,
  `ref_id` varchar(100) NOT NULL,
  `main_balance` varchar(100) NOT NULL,
  `deposit_balance` varchar(100) NOT NULL,
  `investment_balance` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `balance`
--

INSERT INTO `balance` (`id`, `ref_id`, `main_balance`, `deposit_balance`, `investment_balance`) VALUES
(1, '359352120', '0', '', ''),
(2, '1234241870', '0', '', ''),
(3, '433927401', '0', '', ''),
(4, '119387965', '0', '', ''),
(5, '630252126', '0', '', ''),
(6, '1217336886', '0', '', ''),
(7, '1517094444', '0', '', ''),
(8, '188206436', '0', '', ''),
(9, '55531155', '0', '', ''),
(10, '686402726', '0', '', ''),
(11, '976263808', '0', '', ''),
(12, '537270095', '0', '', ''),
(13, '438756388', '0', '', ''),
(14, '138090954', '0', '', ''),
(15, '376814111', '0', '', ''),
(16, '1175641074', '0', '', ''),
(17, '416518496', '0', '', ''),
(18, '142651627', '0', '', ''),
(19, '1661654288', '0', '', ''),
(20, '423347212', '0', '', ''),
(21, '1015346439', '0', '', ''),
(22, '884615343', '0', '', ''),
(23, '608371885', '0', '', ''),
(24, '1033735185', '0', '', ''),
(25, '1221502916', '0', '', ''),
(26, '335477493', '0', '', ''),
(27, '1668399045', '0', '', ''),
(28, '924192', '0', '', ''),
(29, '217247', '0', '', ''),
(30, '766827', '0', '', ''),
(31, '289442', '0', '', ''),
(32, '393557', '0', '', ''),
(33, '894803', '0', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `deposit`
--

CREATE TABLE `deposit` (
  `id` int(100) NOT NULL,
  `ref_id` varchar(100) NOT NULL,
  `trans_id` varchar(100) NOT NULL,
  `deposit_currency` varchar(100) NOT NULL,
  `deposit_amount` varchar(100) NOT NULL,
  `credit_amount` varchar(100) NOT NULL,
  `confirm_payment` varchar(100) NOT NULL,
  `tran` varchar(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `stats` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `deposit`
--

INSERT INTO `deposit` (`id`, `ref_id`, `trans_id`, `deposit_currency`, `deposit_amount`, `credit_amount`, `confirm_payment`, `tran`, `date`, `stats`) VALUES
(36, '359352120', '354943', 'BTC', '0.001', '16.841', '34567890-098765', 'Deposit', '2022-12-27 01:16:45', 'pending'),
(37, '359352120', '660929', 'USDT', '100', '100', '34567890-098765', 'Deposit', '2022-12-27 01:19:03', 'pending'),
(38, '359352120', '261496', 'USDT', '12', '12', '', 'Deposit', '2022-12-27 01:33:46', 'pending'),
(39, '359352120', '394834', 'USDT', '12', '12', '', 'Deposit', '2022-12-27 01:35:34', 'pending'),
(40, '359352120', '971957', 'BTC', '12', '202088.245', '', 'Deposit', '2022-12-27 01:38:08', 'pending'),
(41, '359352120', '637190', 'BTC', '12', '202088.245', '', 'Deposit', '2022-12-27 08:19:31', 'pending'),
(42, '359352120', '282801', 'BTC', '12', '202088.245', '', 'Deposit', '2022-12-27 08:20:30', 'pending'),
(43, '359352120', '426778', 'TRX', '0.24', '0.013', '', 'Deposit', '2022-12-27 08:23:34', 'pending'),
(44, '1234241870', '634628', 'USDT', '12', '12', '34567890-098765', 'Deposit', '2022-12-27 10:05:14', 'pending'),
(45, '1234241870', '896950', 'USDT', '100', '100', '34567890-098765', 'Deposit', '2022-12-27 20:59:03', 'pending'),
(46, '335477493', '369441', 'USDT', '12', '12', '', 'Deposit', '2022-12-29 23:46:02', 'Pending'),
(47, '335477493', '746042', 'USDT', '12', '12', '34567890-098765', 'Deposit', '2022-12-29 23:50:26', 'Pending'),
(48, '335477493', '446374', 'BTC', '100', '1684068.71', '34567890-098765', 'Deposit', '2022-12-29 23:53:07', 'Pending'),
(49, '335477493', '808994', 'BTC', '0.001', '16.841', '', 'Deposit', '2022-12-29 23:54:29', 'Pending'),
(50, '335477493', '748839', 'BTC', '0.1', '1684.069', '34567890-098765', 'Deposit', '2022-12-29 23:59:04', 'Pending'),
(51, '335477493', '444932', 'BTC', '100', '1684068.71', '34567890-098765', 'Deposit', '2022-12-30 00:00:55', 'Pending'),
(52, '335477493', '375171', 'BTC', '12', '202088.245', '34567890-098765', 'Deposit', '2022-12-30 00:03:29', 'Pending'),
(53, '335477493', '537550', 'BTC', '100', '1684068.71', '34567890-098765', 'Deposit', '2022-12-30 11:05:31', 'Pending'),
(54, '766827', '516350', 'BTC', '0.001', '16.841', '', 'Deposit', '2022-12-31 01:05:41', 'Pending'),
(55, '766827', '773854', 'BTC', '0.001', '16.841', '', 'Deposit', '2022-12-31 01:06:26', 'Pending'),
(56, '766827', '742980', 'TRX', '1', '0.054', '', 'Deposit', '2022-12-31 01:06:59', 'Pending'),
(57, '766827', '499375', 'USDT', '12', '12', '34567890-098765', 'Deposit', '2022-12-31 01:08:57', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `investment_plans`
--

CREATE TABLE `investment_plans` (
  `id` int(225) NOT NULL,
  `ref_id` varchar(100) NOT NULL,
  `plans` varchar(100) NOT NULL,
  `amount` varchar(100) NOT NULL,
  `investment_stats` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(225) NOT NULL,
  `ref_id` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `ref_code` varchar(100) NOT NULL,
  `stats` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `code` varchar(100) NOT NULL,
  `balance` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `dob` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `ref_id`, `name`, `email`, `password`, `ref_code`, `stats`, `date`, `code`, `balance`, `gender`, `dob`, `phone`) VALUES
(48, '894803', 'Daniel Owen Derefaka', 'danielderefaka@yahoo.com', '12345', '', 'Verified', '2023-01-01 20:26:59', '0', '300', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user_address`
--

CREATE TABLE `user_address` (
  `id` int(225) NOT NULL,
  `ref_id` varchar(225) NOT NULL,
  `address_line` varchar(225) NOT NULL,
  `second_address_line` varchar(225) NOT NULL,
  `city` varchar(225) NOT NULL,
  `user_state` varchar(225) NOT NULL,
  `profile_zip` varchar(225) NOT NULL,
  `country` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_address`
--

INSERT INTO `user_address` (`id`, `ref_id`, `address_line`, `second_address_line`, `city`, `user_state`, `profile_zip`, `country`) VALUES
(3, '766827', 'Woji Gbalajam', 'Gbalajam', 'Port Harcourt', 'Rivers', '500102', 'Nigeria'),
(4, '289442', '', '', '', '', '', ''),
(5, '393557', '', '', '', '', '', ''),
(6, '894803', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `id` int(11) NOT NULL,
  `ref_id` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `dob` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `agree` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`id`, `ref_id`, `gender`, `dob`, `phone`, `agree`) VALUES
(28, '766827', '', '', '', ''),
(29, '289442', '', '', '', ''),
(30, '393557', '', '', '', ''),
(31, '894803', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user_wallet`
--

CREATE TABLE `user_wallet` (
  `id` int(100) NOT NULL,
  `ref_id` varchar(100) NOT NULL,
  `btc` varchar(100) NOT NULL,
  `usdt` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_wallet`
--

INSERT INTO `user_wallet` (`id`, `ref_id`, `btc`, `usdt`) VALUES
(2, '289442', '', ''),
(3, '393557', '', ''),
(4, '894803', 'DF9aTV58GXxyZf69Tc9pW8JtxAjKVz7gGh', 'DN9H6NKHtq6ioYqwuGPVmg8jpqyjNM3fDi');

-- --------------------------------------------------------

--
-- Table structure for table `user_withdraw`
--

CREATE TABLE `user_withdraw` (
  `id` int(100) NOT NULL,
  `ref_id` varchar(100) NOT NULL,
  `withdraw_amount` varchar(100) NOT NULL,
  `withdraw_amount_btc` varchar(100) NOT NULL,
  `withdraw_des` varchar(100) NOT NULL,
  `withdrawal_id` varchar(100) NOT NULL,
  `btc_wallet` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wallet_address`
--

CREATE TABLE `wallet_address` (
  `id` int(100) NOT NULL,
  `USDT` varchar(100) NOT NULL,
  `BTC` varchar(100) NOT NULL,
  `TRX` varchar(100) NOT NULL,
  `ETH` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `wallet_address`
--

INSERT INTO `wallet_address` (`id`, `USDT`, `BTC`, `TRX`, `ETH`) VALUES
(2, 'TDYdmCpQJ8FQsRekDVF1GHBZ9URRMaGmWZ', '1KwnbaPBoMEumLUaVwYXhGBevojHHfhhNA', 'TDYdmCpQJ8FQsRekDVF1GHBZ9URRMaGmWZ', '0x06f1878e14444d9f8f01bf0ffaae3194132f7c7a');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `balance`
--
ALTER TABLE `balance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `deposit`
--
ALTER TABLE `deposit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `investment_plans`
--
ALTER TABLE `investment_plans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_address`
--
ALTER TABLE `user_address`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_wallet`
--
ALTER TABLE `user_wallet`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_withdraw`
--
ALTER TABLE `user_withdraw`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wallet_address`
--
ALTER TABLE `wallet_address`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `balance`
--
ALTER TABLE `balance`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `deposit`
--
ALTER TABLE `deposit`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `investment_plans`
--
ALTER TABLE `investment_plans`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `user_address`
--
ALTER TABLE `user_address`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `user_wallet`
--
ALTER TABLE `user_wallet`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_withdraw`
--
ALTER TABLE `user_withdraw`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `wallet_address`
--
ALTER TABLE `wallet_address`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
