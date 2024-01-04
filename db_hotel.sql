-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 04, 2024 at 01:37 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `chatbot`
--

CREATE TABLE `chatbot` (
  `id` int(11) NOT NULL,
  `queries` varchar(300) NOT NULL,
  `replies` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `chatbot`
--

INSERT INTO `chatbot` (`id`, `queries`, `replies`) VALUES
(1, 'hai', 'Hello there, how can i help you?'),
(2, 'halo', 'Hello there, how can i help you?'),
(3, 'hello', 'Hello there, how can i help you?'),
(4, 'hallo', 'Hello there, how can i help you?\r\n'),
(5, 'hi', 'Hello there, how can i help you?'),
(6, 'what are the room rates for deluxe balcony room?', 'The rates for DELUXE BALCONY ROOM $50 per night'),
(7, 'what are the room rates for deluxe room?', 'The rates for DELUXE ROOM $45 per night'),
(8, 'what are the room rates for standar room?', 'The rates for STANDAR ROOM $30 per night'),
(9, 'what are the room rates for premiere room?', 'The rates for PREMIERE ROOM $40 per night'),
(10, 'what are the room rates for superior room?', 'The rates for SUPERIOR ROOM $35 per night'),
(11, 'what amenities are provided by ungu hotel?', 'Ungu hotel offers various amenities such as a swimming pool, fitness center, free Wi-Fi, room service, and complimentary breakfast.'),
(12, 'how far is ungu hotel from the popular tourist attractions in the area?', 'Our hotel is conveniently located within a short distance from several popular tourist attractions. For example, Prambanan Temple is approximately 1 kilometers away, Taman Sari Water Castle is around 2 kilometers away, Kraton Yogyakarta is around 2 kilometers away, and Malioboro Street is around 1,5'),
(13, 'does ungu hotel have a restaurant or dining options?', 'Yes, we have an on-site restaurant that offers a variety of delicious cuisines for breakfast, lunch, and dinner.'),
(14, 'what is the booking process for a room at ungu hotel?', 'To book a room, you can either visit our website and fill out the online booking form.'),
(15, 'what are the accepted methods of payment at ungu hotel?', 'We accept paypal and credit cards, including Visa, Mastercard, and American Express. Cash payment in the local currency is also accepted.');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `phoneno` int(10) DEFAULT NULL,
  `email` text DEFAULT NULL,
  `cdate` date DEFAULT NULL,
  `approval` varchar(12) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `phoneno`, `email`, `cdate`, `approval`, `description`) VALUES
(1, 'Hanun Salsabila', 2147483647, 'hanunsalsabila0202@gmail.com', NULL, NULL, 'sdfg');

-- --------------------------------------------------------

--
-- Table structure for table `gabout`
--

CREATE TABLE `gabout` (
  `id_about` int(8) NOT NULL,
  `gabout` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gabout`
--

INSERT INTO `gabout` (`id_about`, `gabout`) VALUES
(11, 'about.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `gambar`
--

CREATE TABLE `gambar` (
  `id_gambar` int(11) NOT NULL,
  `gambar` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gambar`
--

INSERT INTO `gambar` (`id_gambar`, `gambar`) VALUES
(41, 'g2.jpg'),
(42, 'g3.jpg'),
(43, 'g4.jpg'),
(44, 'g5.jpg'),
(45, 'g6.jpg'),
(46, 'g7.jpg'),
(47, 'g8.jpg'),
(48, 'g10.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `lim1` varchar(250) NOT NULL,
  `lim2` varchar(250) NOT NULL,
  `lh1` text NOT NULL,
  `lh2` text NOT NULL,
  `ld1` text NOT NULL,
  `ld2` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`lim1`, `lim2`, `lh1`, `lh2`, `ld1`, `ld2`) VALUES
('', '', '', '', '', ''),
('', '', '', '', '', ''),
('', '', '', '', '', ''),
('Screenshot 2023-03-11 103217.png', 'Screenshot 2023-03-19 174433.png', 'car', 'mobil', 'cewgvjhbk cugwvjaxbjknlsuod4ib ydtdshb', 'cewgvjhbk cugwvjaxbjknlsuod4ib ydtdshb'),
('', '', '', '', '', ''),
('Screenshot 2023-03-11 103209.png', 'Screenshot 2023-03-20 190826.png', 'fdshsj', 'zrggghdt', 'rwggesfdfghewafgdeehjt', 'rwggesfdfghewafgdeehjt');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(10) UNSIGNED NOT NULL,
  `usname` varchar(30) DEFAULT NULL,
  `pass` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `usname`, `pass`) VALUES
(4, 'alifia', 'alifia'),
(5, 'alfa', 'alfa'),
(6, 'izhar', 'izhar'),
(7, 'hanun', 'hanun'),
(8, 'galang', 'galang');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(11) DEFAULT NULL,
  `title` varchar(5) DEFAULT NULL,
  `fname` varchar(30) DEFAULT NULL,
  `lname` varchar(30) DEFAULT NULL,
  `troom` varchar(30) DEFAULT NULL,
  `nroom` int(11) DEFAULT NULL,
  `cin` date DEFAULT NULL,
  `cout` date DEFAULT NULL,
  `ttot` double(8,2) DEFAULT NULL,
  `fintot` double(8,2) DEFAULT NULL,
  `btot` double(8,2) DEFAULT NULL,
  `noofdays` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `title`, `fname`, `lname`, `troom`, `nroom`, `cin`, `cout`, `ttot`, `fintot`, `btot`, `noofdays`) VALUES
(27, 'Mrs.', 'salsa', 'bila', 'Deluxe Room', 1, '2024-01-07', '2024-01-14', 1540.00, 1540.00, NULL, 7),
(28, 'Prof.', 'lala', 'pou', 'Superior Room', 1, '2024-01-04', '2024-01-31', 8640.00, 8640.00, NULL, 27),
(25, 'Dr.', 'Ha', 'N', 'Single Room', 1, '2024-01-04', '2024-01-06', 300.00, 300.00, NULL, 2);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'available'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `image`, `description`, `status`) VALUES
(25, 'Single Room', '150', 'r4.jpg', 'Enjoy comfort, style and fresh air in the Deluxe Balcony Room. All rooms are furnished with plush duvet covers and also equipped with LCD TV 37 inch, a safe deposit box – laptop size and overlooking the luscious green valley. With views over the surroundi', 'available'),
(318, 'Deluxe Room', '220', 'r1.jpg', 'Combining Comfort And Style, Deluxe Rooms Offer Guests A Tranquil Space Overlooking Either The Greenery Of The Valley Or The Hotel Pool. Complemented By A Range Of Luxurious Amenities, All Rooms Feature Contemporary Bathrooms With Shower, King-Sized Beds,', 'available'),
(319, 'Superior Room', '320', 'r2.jpg', 'Combining Comfort And Style, Superior Rooms Offer Guests A Tranquil Space Overlooking Either The Greenery Of The Valley Or The Hotel Pool. Complemented By A Range Of Luxurious Amenities, All Rooms Feature Contemporary Bathrooms With Shower, King-Sized Bed', 'available');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `id` int(10) UNSIGNED NOT NULL,
  `type` varchar(15) DEFAULT NULL,
  `cusid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`id`, `type`, `cusid`) VALUES
(1, 'Superior Room', 28),
(2, 'Superior Room', 28),
(3, 'Superior Room', 28),
(4, 'Single Room', 25),
(5, 'Superior Room', 28),
(6, 'Deluxe Room', 27),
(7, 'Deluxe Room', 27),
(8, 'Deluxe Room', 27),
(9, 'Deluxe Room', 27),
(10, 'Guest House', 0),
(11, 'Guest House', 0),
(12, 'Guest House', 0),
(13, 'Single Room', 25),
(14, 'Single Room', 25),
(16, '', NULL),
(17, 'Superior Room', 28),
(18, 'Superior Room', 28),
(19, 'Superior Room', 28),
(20, 'Superior Room', 28),
(21, 'Superior Room', 28),
(22, 'Superior Room', 28),
(23, 'Superior Room', 28),
(24, 'Superior Room', 28),
(25, 'Superior Room', 28),
(26, 'Superior Room', 28),
(27, 'Superior Room', 28),
(28, 'Superior Room', 28),
(29, 'Superior Room', 28),
(30, 'Superior Room', 28),
(31, 'Superior Room', 28),
(32, 'Superior Room', 28),
(33, 'Superior Room', 28),
(34, 'Superior Room', 28),
(35, 'Superior Room', 28),
(36, 'Superior Room', 28),
(37, 'Deluxe Room', 27),
(38, 'Deluxe Room', 27),
(39, 'Deluxe Room', 27),
(40, 'Deluxe Room', 27),
(41, 'Deluxe Room', 27),
(42, 'Deluxe Room', 27),
(43, 'Deluxe Room', 27),
(44, 'Deluxe Room', 27),
(45, 'Deluxe Room', 27),
(46, 'Deluxe Room', 27),
(47, 'Deluxe Room', 27),
(48, 'Deluxe Room', 27),
(49, 'Deluxe Room', 27),
(50, 'Deluxe Room', 27),
(51, 'Deluxe Room', 27),
(52, 'Deluxe Room', 27),
(53, 'Deluxe Room', 27),
(54, 'Deluxe Room', 27),
(55, 'Deluxe Room', 27),
(56, 'Deluxe Room', 27),
(57, 'Guest House', NULL),
(58, 'Guest House', NULL),
(59, 'Guest House', NULL),
(60, 'Guest House', NULL),
(61, 'Guest House', NULL),
(62, 'Guest House', NULL),
(63, 'Guest House', NULL),
(64, 'Guest House', NULL),
(65, 'Guest House', NULL),
(66, 'Guest House', NULL),
(67, 'Guest House', NULL),
(68, 'Guest House', NULL),
(69, 'Guest House', NULL),
(70, 'Guest House', NULL),
(71, 'Guest House', NULL),
(72, 'Guest House', NULL),
(73, 'Guest House', NULL),
(74, 'Guest House', NULL),
(75, 'Guest House', NULL),
(76, 'Guest House', NULL),
(77, 'Single Room', 25),
(78, 'Single Room', 25),
(79, 'Single Room', 25),
(80, 'Single Room', 25),
(81, 'Single Room', 25),
(82, 'Single Room', 25),
(83, 'Single Room', 25),
(84, 'Single Room', 25),
(85, 'Single Room', 25),
(86, 'Single Room', 25),
(87, 'Single Room', 25),
(88, 'Single Room', 25),
(89, 'Single Room', 25),
(90, 'Single Room', 25),
(91, 'Single Room', 25),
(92, 'Single Room', 25),
(93, 'Single Room', 25),
(94, 'Single Room', 25),
(95, 'Single Room', 25),
(96, 'Single Room', 25);

-- --------------------------------------------------------

--
-- Table structure for table `roombook`
--

CREATE TABLE `roombook` (
  `id` int(10) UNSIGNED NOT NULL,
  `Title` varchar(5) DEFAULT NULL,
  `FName` text DEFAULT NULL,
  `LName` text DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `Phone` text DEFAULT NULL,
  `TRoom` varchar(20) DEFAULT NULL,
  `NRoom` varchar(2) DEFAULT NULL,
  `cin` date DEFAULT NULL,
  `cout` date DEFAULT NULL,
  `stat` varchar(15) DEFAULT NULL,
  `nodays` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `roombook`
--

INSERT INTO `roombook` (`id`, `Title`, `FName`, `LName`, `Email`, `Phone`, `TRoom`, `NRoom`, `cin`, `cout`, `stat`, `nodays`) VALUES
(1, 'Rev .', 'aji', 'mus', 'aji@gmail.com', '12345678', 'Deluxe Room', '1', '2023-07-04', '2023-07-06', 'Confirm', 2),
(3, 'Prof.', 'wgfr', 'rgfr3qwe', 'hanunsalsabila02@gmail.com', '085646331989', 'Single Room', '1', '2023-07-11', '2023-07-14', 'Confirm', 3),
(6, 'Miss.', 'ergtwer', 'asd', 'asdvila0202@gmail.com', '4353466', 'Deluxe Room', '1', '2023-07-19', '2023-07-20', 'Confirm', 1),
(7, 'Mrs.', 'jamal', 'yu', 'dem@gmail.com', '07348262', 'Guest House', '1', '2023-07-07', '2023-07-08', 'Confirm', 1),
(9, 'Mr.', 'Alifia', 'Rizki', 'dsfghjkal@gmail.com', '0258617968', 'Sakura', '1', '2023-07-19', '2023-07-20', 'Confirm', 1),
(11, 'Miss.', 'sal', 'A', 'g@gmail.com', '2376320968', 'kmr hanun', '1', '2023-07-20', '2023-07-21', 'Confirm', 1),
(13, 'Mr.', 'JINA', 'JLFD', 'JAHA@gmail.com', '86545', 'Duluxe Room', '1', '2023-07-20', '2023-07-25', 'Confirm', 5),
(18, 'Miss.', 'bila', 'salsa', 'bila@gmail.com', '09987642', 'Duluxe Room', '1', '2024-01-26', '2024-01-29', 'Confirm', 3),
(19, 'Mr.', 'jo', 'no', 'jono@gmail.com', '097986', 'Single Room', '1', '2024-01-31', '2024-02-01', 'Confirm', 1),
(21, 'Rev .', 'lala', 'sal', 'lala@gmail.com', '018275423628', 'Duluxe Room', '1', '2024-01-04', '2024-01-05', 'Confirm', 1),
(22, 'Dr.', 'bil', 'la', 'billa@gmail.com', '091287654', 'Single Room', '1', '2024-01-04', '2024-01-06', 'Confirm', 2),
(23, 'Mr.', 'caca', 'bila', 'caca@gmail.com', '089431111111', 'Guest Room', '1', '2024-01-23', '2024-01-30', 'Confirm', 7),
(24, 'Prof.', 'hani', 'sal', 'hani@gmail.com', '09864111', 'Deluxe Room', '1', '2024-01-27', '2024-01-30', 'Confirm', 3),
(25, 'Dr.', 'Ha', 'N', 'han@gmail.com', '0851444444', 'Single Room', '1', '2024-01-04', '2024-01-06', 'Confirm', 2),
(26, 'Miss.', 'Hanun', 'Salsabila', 'hanunsalsabila0202@gmail.com', '0850965444', 'Guest Room', '1', '2024-01-17', '2024-01-21', 'Confirm', 4),
(27, 'Mrs.', 'salsa', 'bila', 'salsabila@gmail.com', '081697879', 'Deluxe Room', '1', '2024-01-07', '2024-01-14', 'Confirm', 7),
(28, 'Prof.', 'lala', 'pou', 'l@gmail.com', '081234567890', 'Superior Room', '1', '2024-01-04', '2024-01-31', 'Confirm', 27),
(29, 'Prof.', 'wibowo', 'k', 'wib@gmail.com', '09875421', 'Guest Room	', '1', '2024-01-04', '2024-01-13', 'Confirm', 9),
(30, 'Miss.', 'Hanun', 'Salsabila', 'hanunssss@gmail.com', '08563456789', 'Suite Room	', '1', '2024-01-17', '2024-01-31', 'Confirm', 14),
(32, 'Miss.', 'Hanun', 'Salsabila', 'hanunsals@gmail.com', '0851234567', 'Suite Room	', '1', '2024-02-03', '2024-02-10', 'Not Confirm', 7);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chatbot`
--
ALTER TABLE `chatbot`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gabout`
--
ALTER TABLE `gabout`
  ADD PRIMARY KEY (`id_about`);

--
-- Indexes for table `gambar`
--
ALTER TABLE `gambar`
  ADD PRIMARY KEY (`id_gambar`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roombook`
--
ALTER TABLE `roombook`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chatbot`
--
ALTER TABLE `chatbot`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `gabout`
--
ALTER TABLE `gabout`
  MODIFY `id_about` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `gambar`
--
ALTER TABLE `gambar`
  MODIFY `id_gambar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=323;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT for table `roombook`
--
ALTER TABLE `roombook`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
