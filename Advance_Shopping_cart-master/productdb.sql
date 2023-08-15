-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 15, 2023 at 10:29 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `productdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `user_name` varchar(20) NOT NULL,
  `password` varchar(40) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`user_name`, `password`, `email`) VALUES
('mok', '123', 'mok@gmail.com'),
('user1', '123', 'user1@gmail.com'),
('user2', '123', 'rwe@dda.com');

-- --------------------------------------------------------

--
-- Table structure for table `producttb`
--

CREATE TABLE `producttb` (
  `id` int(11) NOT NULL,
  `product_name` varchar(25) NOT NULL,
  `product_price` float DEFAULT NULL,
  `product_detail` text DEFAULT NULL,
  `product_image` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `producttb`
--

INSERT INTO `producttb` (`id`, `product_name`, `product_price`, `product_detail`, `product_image`) VALUES
(1, 'ILLEGEAR MACH 15', 5399, ' 15.6” Infinivision Narrow Bezel\r\n 144Hz Full HD Anti-glare IPS\r\n 13th Gen Intel Core Processors(I7 13700H)\r\n GeForce RTX 40 Series Graphics(RTX 4050)\r\n 8GB (2 Slots, Up to 64GB)\r\n 512GB NVMe SSD (2 M.2 Slots, Up to 4TB)\r\n Anodized Aluminum Back Cover\r\n Tactile Keyboard with Single-zone RGB\r\n ILLEGEAR G Plus\r\n HDMI 2.1 and Mini Displayport 1.4\r\n Intel or Killer Wi-Fi 6E AX\r\n 2kg', './upload/product1.png'),
(2, 'ILLEGEAR ONYX VX', 5698, '16” Striking Performance On-the-Go\r\n16” Infinivision 16:10 Narrow Bezel\r\n165Hz WUXGA Anti-glare IPS (300 nitts)\r\nAMD Ryzen™ 7735HS Processors\r\nGeForce RTX 4060 Graphics\r\n8GB DDR5 (2 Slots, Up to 64GB)\r\n512GB NVMe SSD (2 M.2 Slots, Up to 4TB)\r\nPCIe Gen 4 SSD Compatible\r\nTactile Keyboard with Single-zone RGB\r\nILLEGEAR G Plus\r\nHDMI 2.1 and Mini Displayport 1.4\r\nIntel or Killer Wi-Fi 6E AX\r\nFREE 16GB DDR5 RAM UPGRADE (RM279)\r\nFREE 512GB GEN4 HEATSINK SSD UPGRADE (RM199)\r\nFREE THERMAL GRIZZLY KRYONAUT (RM99)', './upload/product2.png'),
(3, 'ILLEGEAR SELENITE PRO ADL', 8399, '17.3” Infinivision Narrow Bezel\r\n240Hz WQHD IPS sRGB 100% (2560x1440) (300 nitts)\r\n12th gen (i9-12900h)Processors\r\nGeForce RTX 3070Ti Graphics\r\n16GB DDR5 (2 Slots, Up to 64GB)\r\n512GB NVMe SSD (2 M.2 Slots, Up to 4TB)\r\nPCIe Gen 4 SSD Compatible\r\nMagnesium Alloy Body with Protective Coating\r\nUltra-tactile Keyboard with 4-zone RGB\r\nBig Capacity 92Wh Battery\r\nILLEGEAR G Plus\r\nThunderbolt 4\r\nFull HD Windows Hello Camera\r\nIntel or Killer Wi-Fi 6 AX\r\n2.2kg | 19mm\r\n\r\n', './upload/product3.png'),
(4, 'ILLEGEAR SAPPHIRE GX', 16998, '17” Absolute Best-in-Class\r\n17” Infinivision 16:10 Narrow Bezel\r\n240Hz WQXGA IPS sRGB 100% (2560x1600) (350 nitts)\r\nNvidia G-Sync Technology\r\n13th Gen (I9-13900HX)Processors\r\nGeForce RTX 4090 Graphics\r\n16GB DDR5 (2 Slots, Up to 64GB)\r\n512GB NVMe SSD (2 M.2 Slots, Up to 4TB)\r\nPCIe Gen 4 SSD Compatible\r\nExternal Water Cooling Module Capable\r\nSandblasted Aluminum Body\r\nMechanical Keyboard v3 by Cherry MX Brown\r\nLarge Glass Touchpad (Dual Zone)\r\nBig Capacity 99Wh Battery\r\nILLEGEAR G Plus\r\nThunderbolt 4\r\nFull HD Windows Hello Camera\r\nIntel or Killer Wi-Fi 6E AX\r\n2.55kg | 27mm', './upload/product4.png'),
(5, 'ILLEGEAR BOLT 27 Curved G', 899, 'Samsung VA\r\nCurve R1500\r\n27″\r\n2560 x 1440 WQHD\r\n144Hz\r\n4ms\r\nHDR\r\n10 Bit Simulation (Up to 120Hz)\r\nsRGB: 99%, Adobe RGB: 83%, 90% DCI P3\r\nAdaptive Sync Capable\r\n4.76kg\r\nWarranty type: 3 Year Carry-in Warranty & Lifetime Technical Support', './upload/product5.png\n'),
(6, 'ILLEGEAR Fang ', 49, '199IC Sensor\r\nResolution: 800 - 6,400 DPI\r\nAcceleration: 12G\r\nSpeed: 30 IPS\r\nPolling Rate: 125Hz\r\nTUSK Command Center Software\r\nRGB Color (Non-programmable)\r\nDurable Huano Switches\r\n7x Programmable Buttons\r\nOnboard Memory\r\nBlack Matt UV Coating\r\n1.6 meter Black Braided Cable\r\n127 x 67 x 39 mm\r\n140 Grams', './upload/product6.png'),
(7, 'ILLEGEAR FLOW', 599, 'Flow is a one-of-a-kind laptop water cooling system that’s poised to take cooling for extreme laptops to unheard-of levels. Experience high-setting gaming without its heat dissipation drawbacks. It is now possible to fire up your laptop as if it’s a desktop without subjecting the fans to maximum capacity. The result? You enjoy desktop-like performance yet your laptop remains quiet as ever.\r\nBluetooth Connectivity to Laptop Command Center\r\nDistilled Water Only', './upload/product7.png'),
(8, 'ILLEGEAR RUKA DUO', 199, 'RUKA DUO | Dual Spring-assisted Monitor Arm\r\nEase of Use: self-adjusting counterbalance for most any monitors\r\nKeyhole Pattern: allows for easy installation Integrated 180° Rotation Stop: prevents monitor arm from swinging into screens or walls\r\nSpring-Assisted Mechanism: allows to easily move up and down \r\nTwo Mounting Options: both desk clamp and grommet are included\r\nReduced Package Size: relatively lower transport costs and storage fees (perfect for e-commerce platform sellers)\r\nBuilt-in Cable Management: for an organized and neat workspace\r\n\r\n', './upload/product8.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`user_name`);

--
-- Indexes for table `producttb`
--
ALTER TABLE `producttb`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `producttb`
--
ALTER TABLE `producttb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
