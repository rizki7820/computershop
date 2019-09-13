-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 12 Sep 2019 pada 04.09
-- Versi Server: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `shop`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `ID_ADMIN` varchar(12) NOT NULL,
  `PASS` varchar(100) DEFAULT NULL,
  `NAME` varchar(50) DEFAULT NULL,
  `GENDER` varchar(1) NOT NULL,
  `CELL PHONE` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`ID_ADMIN`, `PASS`, `NAME`, `GENDER`, `CELL PHONE`) VALUES
('admin', 'e00cf25ad42683b3df678c61f42c6bda', 'FISHERMAN', 'F', '+6281234567890');

-- --------------------------------------------------------

--
-- Struktur dari tabel `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `ID_CATEGORY` varchar(12) NOT NULL,
  `NAME` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `category`
--

INSERT INTO `category` (`ID_CATEGORY`, `NAME`) VALUES
('C001', 'Laptop'),
('C002', 'Desktop Computer'),
('C003', 'Notebook'),
('C004', 'PC ALL IN ONE'),
('C005', 'Spare Part'),
('C006', 'Accessories');

-- --------------------------------------------------------

--
-- Struktur dari tabel `member`
--

CREATE TABLE IF NOT EXISTS `member` (
  `ID_MEMBER` varchar(12) NOT NULL,
  `USERNAME` varchar(12) NOT NULL,
  `PASSWORD` varchar(100) NOT NULL,
  `NAME` varchar(50) DEFAULT NULL,
  `GENDER` varchar(1) NOT NULL,
  `EMAIL` varchar(320) NOT NULL,
  `CELLPHONE` int(15) NOT NULL,
  `ADDRESS` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `member`
--

INSERT INTO `member` (`ID_MEMBER`, `USERNAME`, `PASSWORD`, `NAME`, `GENDER`, `EMAIL`, `CELLPHONE`, `ADDRESS`) VALUES
('IDM001', 'FISH', 'c7764cfed23c5ca3bb393308a0da2306', 'HAFIZHI', 'M', 'cynthiawidodo370@gmail.com', 2147483647, 'INDONESIA'),
('IDM002', 'FISHA', '123456', 'WidodoEE', 'M', '', 875727728, 'INDONESIA'),
('IDM004', 'cynthia', '24fd6ceb05a8495a073e513ca1dd0e08', 'Cynthia Widodo', 'F', '', 62, 'Jl Kemiri Gg 3 No 19 Kec Taman Kel Taman'),
('IDM005', 'ahoy', '12345', 'Rizki Rahman', 'M', '', 12124124, 'Jl.brigjen hasan basri no.50'),
('IDM006', 'rizki', '377e9e425431bc4c1113efb7ebf82e00', 'Rizki Rahman', 'M', '', 12124124, 'Jl.brigjen hasan basri no.50'),
('IDM007', 'iki', 'fa4ab883faa52a07a17cde34dd865577', 'Rizki Rahman', 'M', '', 12124124, 'Jl.brigjen hasan basri no.50'),
('IDM008', 'admin', 'e00cf25ad42683b3df678c61f42c6bda', 'Rizki Rahman', 'M', '', 2147483647, 'Jl.brigjen hasan basri no.50');

-- --------------------------------------------------------

--
-- Struktur dari tabel `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `ID_ORDER` varchar(12) NOT NULL,
  `ID_ADMIN` varchar(12) DEFAULT NULL,
  `ID_DORDER` varchar(12) DEFAULT NULL,
  `ID_MEMBER` varchar(12) DEFAULT NULL,
  `TOTAL` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `order_details`
--

CREATE TABLE IF NOT EXISTS `order_details` (
  `ID_DORDER` varchar(12) NOT NULL,
  `NAME` varchar(50) DEFAULT NULL,
  `QTY` int(11) DEFAULT NULL,
  `PRICE` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `ID_PRODUCT` varchar(12) NOT NULL,
  `ID_CATEGORY` varchar(12) DEFAULT NULL,
  `NAME` varchar(50) DEFAULT NULL,
  `BRAND` varchar(50) NOT NULL,
  `PRICE` float DEFAULT NULL,
  `STOCK` int(11) DEFAULT NULL,
  `DESCRIBE` varchar(255) NOT NULL,
  `IMAGE` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `product`
--

INSERT INTO `product` (`ID_PRODUCT`, `ID_CATEGORY`, `NAME`, `BRAND`, `PRICE`, `STOCK`, `DESCRIBE`, `IMAGE`) VALUES
('IDP001', 'C002', 'ASUS - E510', 'ASUS', 320, 15, '4th generation IntelÂ® Coreâ„¢Processor, powerful graphics, and support for up to 16 GB of DDR3 memory.\r\nASUS WebStorage Up to 100GB free space, Windows 10.', '1.png'),
('IDP003', 'C002', 'PARTAKER - B15', 'PARTAKER', 405, 10, 'Intel Core i7-8550U, RAM M.2, SSD 512 GB, WINDOWS 10, support for up to 32 GB of DDR4.\r\n', 'DMPC003.jpg'),
('IDP004', 'C002', 'ASUS - E510', 'ASUS', 310, 20, '4th generation IntelÂ® Coreâ„¢Processor, powerful graphics, and support for up to 16 GB of DDR3 memory.\r\nASUS WebStorage Up to 100GB free space, Windows 10.', 'DMPC001.jpg'),
('IDP005', 'C001', 'ACER - ASPIRE E15', 'Acer', 160, 10, '1TB HDD, 8th Gen Intel Core i3 Processor, 6GB dual channel RAM, 15.6 inch display', 'LC001.jpg'),
('IDP006', 'C001', 'Lenovo - IdeaPad 320', 'Lenovo', 127, 10, '4GB RAM, 256GB SSD, 15.6 inch screen, Intel Core i3, 4 GB RAM 1TB HDD Windows 10.', 'LC002.jpg'),
('IDP007', 'C001', 'DELL - INSPIRON 14', 'DELL', 255, 10, 'Processor Intel Core i7-8565U (Intel Core i7)\r\nGraphics adapterIntel UHD Graphics 620, Core: 300 MHz,\r\nMemory 1200 MHz, DDR4,Memory8192 MB ,1333.3 MHz, DDR4-2666, PC\r\nDisplay 14"', 'LH02.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`ID_ADMIN`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
 ADD PRIMARY KEY (`ID_CATEGORY`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
 ADD PRIMARY KEY (`ID_MEMBER`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
 ADD PRIMARY KEY (`ID_ORDER`), ADD KEY `FK_RELATIONSHIP_1` (`ID_ADMIN`), ADD KEY `FK_RELATIONSHIP_2` (`ID_MEMBER`), ADD KEY `FK_RELATIONSHIP_3` (`ID_DORDER`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
 ADD PRIMARY KEY (`ID_DORDER`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
 ADD PRIMARY KEY (`ID_PRODUCT`), ADD KEY `FK_RELATIONSHIP_5` (`ID_CATEGORY`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `orders`
--
ALTER TABLE `orders`
ADD CONSTRAINT `FK_RELATIONSHIP_1` FOREIGN KEY (`ID_ADMIN`) REFERENCES `admin` (`ID_ADMIN`),
ADD CONSTRAINT `FK_RELATIONSHIP_2` FOREIGN KEY (`ID_MEMBER`) REFERENCES `member` (`ID_MEMBER`),
ADD CONSTRAINT `FK_RELATIONSHIP_3` FOREIGN KEY (`ID_DORDER`) REFERENCES `order_details` (`ID_DORDER`);

--
-- Ketidakleluasaan untuk tabel `order_details`
--
ALTER TABLE `order_details`
ADD CONSTRAINT `order_details_ibfk_1` FOREIGN KEY (`ID_DORDER`) REFERENCES `product` (`ID_PRODUCT`);

--
-- Ketidakleluasaan untuk tabel `product`
--
ALTER TABLE `product`
ADD CONSTRAINT `FK_RELATIONSHIP_5` FOREIGN KEY (`ID_CATEGORY`) REFERENCES `category` (`ID_CATEGORY`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
