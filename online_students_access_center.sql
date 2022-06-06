-- phpMyAdmin SQL Dump
-- version 5.3.0-dev+20220605.3bb0712d47
-- https://www.phpmyadmin.net/
--
-- Host: localhost:4306:4306
-- Generation Time: Jun 06, 2022 at 08:08 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online students access center`
--

-- --------------------------------------------------------

--
-- Table structure for table `file`
--

CREATE TABLE `file` (
  `file_id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `file` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `file`
--

INSERT INTO `file` (`file_id`, `name`, `file`) VALUES
(1, 'Chapter 2 Functions', 'files/Chapter 2 Functions.pptx'),
(2, 'Chapter 1', 'files/Chapter 1.docx'),
(3, 'data structure1', 'files/data structure1.docx');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `filepath` text NOT NULL,
  `uploaded_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `title`, `description`, `filepath`, `uploaded_date`) VALUES
(1, 'Calculator', 'new product', 'images/images (11).jpeg', '2022-04-28 13:32:57');

-- --------------------------------------------------------

--
-- Table structure for table `laundarypay`
--

CREATE TABLE `laundarypay` (
  `payment_id` int(20) NOT NULL,
  `user_id` int(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `clothes` int(20) NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `laundarypay`
--

INSERT INTO `laundarypay` (`payment_id`, `user_id`, `username`, `phone`, `clothes`, `Date`) VALUES
(3, 7, 'Meti23', '0911123305', 2, '2022-05-20'),
(4, 4, 'Abebe20', '0911123305', 3, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `laundaryrating`
--

CREATE TABLE `laundaryrating` (
  `providername` varchar(20) NOT NULL,
  `username` varchar(11) NOT NULL,
  `rating` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `laundaryrating`
--

INSERT INTO `laundaryrating` (`providername`, `username`, `rating`) VALUES
('Abebe', 'Abebe20', 0);

-- --------------------------------------------------------

--
-- Table structure for table `poll`
--

CREATE TABLE `poll` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `phone` varchar(25) NOT NULL,
  `feedback` text NOT NULL,
  `suggestions` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `productName` text NOT NULL,
  `productProvider` text NOT NULL,
  `productCategory` text NOT NULL,
  `cost` float NOT NULL,
  `Selling_Price` float NOT NULL,
  `quantity` int(11) NOT NULL,
  `productCode` varchar(10) NOT NULL,
  `handler` varchar(20) NOT NULL,
  `image` text NOT NULL,
  `Description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `userId`, `productName`, `productProvider`, `productCategory`, `cost`, `Selling_Price`, `quantity`, `productCode`, `handler`, `image`, `Description`) VALUES
(1, 4, 'Nike complete suit', '3-Brothers Fashion', 'men clothes', 500, 700, 15, '1234mc', '', 'IMG_20211218_130416_730.jpg', 'original product\r\nmade in turkey'),
(2, 7, 'Cargo Trouser/Tuta', '3-Brothers Fashion', 'men clothes', 800, 1000, 8, '1345kl', '', 'IMG_20211218_130055_088.jpg', ''),
(3, 3, 'jacket', '3 Brothers Fashion', 'men clothes', 700, 800, 10, '1456df', '', 'IMG_20211218_131241_654.jpg', ''),
(4, 6, 'infinix smart 5(32GB)', 'Wende Electronics', 'Electronics', 10500, 12000, 10, '789opu', 'W_Provider', '', ''),
(5, 2, 'dress', 'Hewi Fashion', 'women cloth', 800, 900, 0, '4567ujm', 'L_Provider', '', ''),
(6, 6, 'Samsund_MO2', 'Wende Electronics', 'Electronics', 9050, 9200, 0, '234huii', 'W_Provider', '', ''),
(7, 6, 'Samsund_MO2', 'Wende Electronics', 'Electronics', 9050, 9200, 5, '234huii', 'W_Provider', '', ''),
(8, 3, 'Champion Hoodie', '3 Brothers Fashion', 'men clothes', 850, 1000, 10, '234tyui', 'S_Provider', 'IMG_20211218_130157_853.jpg', ''),
(9, 0, 'Printed Tshirts all size', '3 Brothers Fashion', 'men clothes', 180, 250, 5, '890uytr', 'S_Provider', 'IMG_20211218_130109_723.jpg', ''),
(10, 0, 'shirt', '3 Brothers Fashion', 'men clothes', 400, 500, 5, 'ghj456', 'S_Provider', 'IMG_20211218_131455_243.jpg', ''),
(11, 0, 'Bosten hoddie', '3 Brothers Fashion', 'men clothes', 650, 800, 6, 'hut465', 'S_Provider', 'IMG_20211218_131509_083.jpg', ''),
(12, 0, 'hoddie', '3 Brothers Fashion', 'men clothes', 550, 650, 5, 'tyu678', 'S_Provider', 'IMG_20211218_131436_927.jpg', ''),
(13, 0, 'Dior complete Suit', '3 Brothers Fashion', 'men clothes1', 1300, 1500, 5, 'fgh423', 'S_Provider', 'IMG_20211228_152038_966.jpg', ''),
(14, 0, 'H&M Ranger hoodie', '3 Brothers Fashion', 'men clothes1', 500, 600, 5, 'fds234', 'S_Provider', 'IMG_20211228_151658_734.jpg', ''),
(15, 0, 'Supreme adidas shirts', '3 Brothers Fashion', 'men clothes1', 500, 650, 10, 'vbn234', 'S_Provider', 'IMG_20211228_151707_978.jpg', ''),
(16, 0, 'Hoodie Jacket', '3 Brothers Fashion', 'men clothes1', 1250, 1500, 3, 'bvc167', 'S_Provider', 'IMG_20211228_152021_770.jpg', ''),
(17, 0, 'vans oldskul', '3 Brothers Fashion', 'men shoes1', 1000, 1200, 10, 'vbn098', 'S_Provider', 'IMG_20211212_110031_502.jpg', ''),
(18, 0, 'Allstar boots', '3 Brothers Fashion', 'men shoes1', 1200, 1400, 12, 'asx345', 'S_Provider', 'IMG_20211212_110134_171.jpg', ''),
(19, 4, 'Nike airforce 1', '3 Brothers Fashion', 'men shoes1', 1200, 1500, 10, 'asd321', 'S_Provider', 'IMG_20211212_110058_984.jpg', ''),
(20, 8, 'Nike boots', '3 Brothers Fashion', 'men shoes1', 1400, 1600, 12, 'lkd325', 'S_Provider', 'IMG_20211212_110114_382.jpg', ''),
(21, 6, 'Vans leather', '3 Brothers Fashion', 'men shoes', 1000, 1200, 5, 'xml213', 'S_Provider', 'IMG_20211212_110332_065.jpg', ''),
(22, 0, 'Air jordan 4', '3 Brothers Fashion', 'men shoes', 1750, 2000, 10, 'asd086', 'S_Provider', 'IMG_20211218_130218_129.jpg', ''),
(23, 0, 'Nike airjordan 1', '3 Brothers Fashion', 'men shoes', 1150, 1300, 5, 'aqw213', 'S_Provider', 'IMG_20211212_110316_157.jpg', ''),
(24, 10, 'vitlese', 'Hewi Fashion', 'Women cloth', 400, 550, 5, '445123', '', 'IMG_20211218_131038_438.jpg', 'best Quality cotton vitlese \r\nmade in vetnam'),
(25, 0, 'short shirt', 'Hewi Fashion', 'Women cloth', 400, 500, 5, 'hut423', 'L_Provider', 'IMG_20211218_131210_241.jpg', 'good quality'),
(26, 0, 'Crop Top', 'Hewi Fashion', 'Women cloth', 480, 600, 5, 'vff123', 'L_Provider', 'IMG_20211214_084458_695.jpg', 'good quality'),
(27, 0, 'hollister california jeans', 'Hewi Fashion', 'Women cloth', 850, 950, 6, 'kks123', 'L_Provider', 'IMG_20211218_131603_674.jpg', 'good quality'),
(34, 4, 'T-shirt dress', 'Hewi Fashion', 'women cloth1', 800, 850, 3, 'kkkjjj', 'L_Provider', 'IMG_20211218_131300_672.jpg', 'good quality'),
(35, 6, 'longsleeve croptop', 'Hewi Fashion', 'women cloth1', 480, 600, 6, 'axx345', 'L_Provider', 'IMG_20211218_131123_836.jpg', 'good quality'),
(36, 9, 'high waist pant', 'Hewi Fashion', 'women cloth1', 700, 800, 5, 'vgh123', 'L_Provider', 'IMG_20211214_084627_851.jpg', 'good quality'),
(37, 0, 'adidas', 'Hewi Fashion', 'women shoes', 1300, 1500, 5, 'zzz123', 'L_Provider', 'IMG_20211212_110010_447.jpg', 'good quality'),
(38, 20, 'Vans', 'Hewi Fashion', 'women shoes', 1050, 1200, 6, 'ssswww', 'L_Provider', 'IMG_20211212_110020_952.jpg', 'good quality'),
(39, 0, 'Airforce', 'Hewi Fashion', 'women shoes', 1660, 1800, 5, 'v=mff123', 'L_Provider', 'IMG_20211212_110051_742.jpg', 'good quality'),
(40, 0, 'Puma', 'Hewi Fashion', 'women shoes', 0, 0, 6, 'zas123', 'L_Provider', 'IMG_20211212_110117_371.jpg', 'good quality'),
(41, 0, 'Fila shoe', 'Hewi Fashion', 'women shoes1', 1110, 1300, 5, '123fmc', 'L_Provider', 'IMG_20211212_110303_006.jpg', 'good quality'),
(42, 0, 'Samsung Galaxy Note 10(256 GB)', 'Wende Electronics', 'electronics', 23500, 25000, 10, 'qsd123', 'W_Provider', '5b470c9254197590c8b04bcb9d4cc8cfe8fea29a.jpg', 'best quality product'),
(43, 0, 'lenovo ideapad 8th generation', 'Wende Electronics', 'electronics', 28350, 29500, 5, 'axd134', 'W_Provider', '7ccc5dc8a402e61968e5a87e6b8da715a0745612.jpg', 'best quality product'),
(44, 0, 'Hp power pavilion gaming core i5', 'Wende Electronics', 'electronics', 56000, 5800, 6, 'ax1245', 'W_Provider', '7ca067549983ec3e04198996d1e9535c60f13c3d.jpg', 'best quality product'),
(45, 4, 'Samsung_M02(32GB)', 'Wende Electronics', 'electronics', 8500, 9200, 7, 'qws908', 'W_Provider', '501db384bd4b3fd734d195c782ae9c98a057dc45.jpg', 'best quality product'),
(46, 6, 'Redmi 9A', 'Wende Electronics', 'electronics', 8000, 9000, 7, 'zxc123', 'W_Provider', '2443e60f1d262770a1c49df9def74f9a94982b11.jpg', 'best quality product'),
(47, 0, 'Scientific Calculator', 'Abi Stationary', 'stationary', 170, 200, 10, 'nml098', '', 'images (11).jpeg', 'good quality product'),
(48, 0, 'Bic pen', 'Abi Stationary', 'stationary', 8, 10, 50, 'as123', '', 'images (8).jpeg', 'good quality pen'),
(49, 0, 'Box File', 'Abi Stationary', 'stationary', 80, 85, 10, 'vbn123', '', 'images (10).jpeg', 'good quality product'),
(50, 0, 'A4 paper 500 sheets', 'Abi Stationary', 'stationary', 250, 280, 20, 'kks123', '', 'Uf82609a0952345b5bdfd1a14172668d8F.jpg_720x720q50.jpg', 'good product'),
(51, 0, 'UHU stick', 'Abi Stationary', 'stationary', 70, 75, 5, 'asw213', '', 'Screenshot_20211218-142105_Chrome.jpg', 'good quality'),
(52, 0, 'Dove soap', 'Hewi Fashion', 'cosmotics', 50, 55, 10, 'asdew2', 'L_Provider', 'IMG_20211228_160330_003.jpg', 'good product'),
(53, 0, 'Dove shampoo and conditionaire', 'Hewi Fashion', 'cosmotics', 800, 900, 8, 'asx345', 'L_Provider', 'IMG_20211228_160441_005.jpg', 'good product'),
(54, 0, 'Victoria secret splash', 'Hewi Fashion', 'cosmotics', 650, 700, 10, 'vbn123', 'L_Provider', 'IMG_20211228_160559_102.jpg', 'good quality'),
(55, 0, 'Irish spring soap', 'Hewi Fashion', 'cosmotics', 55, 65, 10, 'zas123', 'L_Provider', 'IMG_20211228_160333_281.jpg', 'good product'),
(56, 0, 'Tresemme shampoo', 'Hewi Fashion', 'cosmotics', 600, 700, 10, 'zxc123', 'L_Provider', '6Y7A0060.jpg', 'good product'),
(57, 0, 'signal toothpaste', 'Hewi Fashion', 'cosmotics', 25, 30, 30, 'ghi865', '', '6Y7A6521.jpg', 'good product'),
(58, 0, 'Back bag', 'Hewi Fashion', 'accessory', 700, 800, 5, '1456df', '', 'IMG_20211218_131645_607.jpg', 'good product'),
(59, 0, 'Hair band', 'Hewi Fashion', 'accessory', 25, 30, 10, '1345kl', '', 'IMG_20211212_100626_751.jpg', 'good product'),
(60, 0, 'Belts', 'Hewi Fashion', 'accessory', 300, 400, 10, 'vff123', '', 'IMG_20211212_100635_454.jpg', 'good quality'),
(61, 0, 'stylish eyeglass', 'Hewi Fashion', 'accessory', 220, 300, 8, 'kks123', '', 'IMG_20211218_130852_285.jpg', 'good product'),
(62, 0, 'Hair clip', 'Hewi Fashion', 'accessory', 40, 50, 20, 'zxc123', '', 'IMG_20211212_100746_344.jpg', 'good product');

-- --------------------------------------------------------

--
-- Table structure for table `pwdreset`
--

CREATE TABLE `pwdreset` (
  `pwdResetId` int(11) NOT NULL,
  `pwdResetEmail` text NOT NULL,
  `pwdResetSelector` text NOT NULL,
  `pwdResetToken` longtext NOT NULL,
  `pwdResetExpires` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pwdreset`
--

INSERT INTO `pwdreset` (`pwdResetId`, `pwdResetEmail`, `pwdResetSelector`, `pwdResetToken`, `pwdResetExpires`) VALUES
(3, 'metiadugna7', '484bde5df97082ab', '$2y$10$RbPZUhCixw7gZXn71etoquvXyqbNgtzSbiKaxeVUpKSrsLzvinuhS', '1652580594'),
(7, 'metiadugna14@gmail.com', '3c273b9e636fbd85', '$2y$10$9mcUJ8NYLNytyrFri1Fuzeoehf.HGHodVMEGwPbXv005C6PWYarQu', '1652581629'),
(9, 'metiadugna39@gmail.com', 'ba185a0605e22385', '$2y$10$c6l8Gqw4I/DdsWS0oISnReeIPhqMR497Us/agjhVac4zKVtgEhdJy', '1652581773'),
(19, 'metiadugna74@gmail.com', '84d1bf2d2001895a', '$2y$10$kdMBQGxyWr4Zi2PUjIqjD.pve6OYi9vZSFjuo159G19blKl9bKHdu', '1653801351');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `firstName` varchar(20) NOT NULL,
  `lastName` varchar(20) NOT NULL,
  `userName` varchar(20) NOT NULL,
  `role` varchar(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(32) NOT NULL,
  `profile` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `firstName`, `lastName`, `userName`, `role`, `gender`, `mobile`, `email`, `password`, `profile`) VALUES
(2, 'Nardos', 'Tadesse', 'Nardi21', 'admin', 'F', '0976543245', 'nardosa953@gmail.com', 'hellonardos14', 'photo_2022-05-09_19-41-48.jpg'),
(3, 'Metasebia', 'Tariku', 'Metii14', 'admin', 'F', '0987654336', 'meti23@gmail.com', 'metiad', 'photo_2022-05-09_19-41-48.jpg'),
(4, 'Abebe', 'Kebede', 'Abebe20', 'user', 'M', '0987655432', 'metiadugna79@gmail.com', '123456', 'photo_2022-05-09_19-41-48.jpg'),
(6, 'Rediet', 'Chebud', 'Rediet29', 'user', 'F', '0987655432', 'kabebe438@gmail.com', 'hellorediet29', 'hair2.jpg'),
(7, 'Meti', 'Adugna', 'Meti23', 'admin', 'F', '0923456789', 'metiadugna14@gmail.com', 'welcomemeti14', 'photo_2022-05-09_19-41-48.jpg'),
(9, 'henok', 'gryui', 'hemio', 'user', 'M', '0987654336', 'enok@gmail.com', 'metiadugna14', 'photo_2022-05-09_19-41-48.jpg'),
(10, 'Kaleb', 'Tariku', 'Kalwb14', 'L_Provider', 'M', '0923456789', 'metiadugn74@gmail.com', 'metiad22345', 'photo_2022-05-09_19-41-48.jpg'),
(11, 'Biruk', 'Kebede', 'biruk14', 'S_Provider', 'M', '0923456789', 'biruk@gmail.com', 'welcomebiruk', 'photo_2022-05-09_19-41-48.jpg'),
(13, 'Meron', 'Temam', 'meron14', 'provider', 'F', '0987654336', 'metiadugna84@gmail.com', '$2y$10$hriwDgk4J4ByX3ogMQ7swO8.N', 'photo_2022-05-09_19-41-48.jpg'),
(20, 'henok', 'Tariku', 'Heni14', 'user', 'M', '0923456789', 'metiadugna@gmail.com', '$2y$10$2RrNzkqhhfa5slmftDO.quyhH', 'photo_2022-05-09_19-41-48.jpg'),
(42, 'Rahel', 'Tesfaye', 'rahel123', 'user', 'F', '0987643216', 'rahel1234@gmail.com', '$2y$10$O.LNIxFzmXoj0tDwtzBjdupis', 'photo_2022-05-09_19-41-48.jpg'),
(43, 'Mastewal', 'Tesema', 'mastewal123', 'W_Provider', 'F', '0912345678', 'mastewal1234@gmail.com', '$2y$10$34bd9jTLkZr/sfuzu2oprOsqs', 'photo_2022-05-09_19-41-48.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `file`
--
ALTER TABLE `file`
  ADD PRIMARY KEY (`file_id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `laundarypay`
--
ALTER TABLE `laundarypay`
  ADD PRIMARY KEY (`payment_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `poll`
--
ALTER TABLE `poll`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userId` (`userId`);

--
-- Indexes for table `pwdreset`
--
ALTER TABLE `pwdreset`
  ADD PRIMARY KEY (`pwdResetId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `file`
--
ALTER TABLE `file`
  MODIFY `file_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `laundarypay`
--
ALTER TABLE `laundarypay`
  MODIFY `payment_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `poll`
--
ALTER TABLE `poll`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `pwdreset`
--
ALTER TABLE `pwdreset`
  MODIFY `pwdResetId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `laundarypay`
--
ALTER TABLE `laundarypay`
  ADD CONSTRAINT `laundarypay_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;



