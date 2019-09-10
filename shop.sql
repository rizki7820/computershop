-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 27 Agu 2019 pada 10.12
-- Versi Server: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `ID_ADMIN` varchar(12) NOT NULL,
  `PASS` varchar(6) DEFAULT NULL,
  `NAME` varchar(32) DEFAULT NULL,
  `GENDER` varchar(1) NOT NULL,
  `CELL PHONE` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`ID_ADMIN`, `PASS`, `NAME`, `GENDER`, `CELL PHONE`) VALUES
('IDP001', 'admin', 'ADMIN', 'F', '+6281234567890'),
('KARINS', '123456', NULL, '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `category`
--

CREATE TABLE `category` (
  `ID_CATEGORY` varchar(12) NOT NULL,
  `NAME` varchar(32) DEFAULT NULL
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

CREATE TABLE `member` (
  `ID_MEMBER` varchar(12) NOT NULL,
  `USERNAME` varchar(12) NOT NULL,
  `PASSWORD` int(6) NOT NULL,
  `NAME` varchar(32) DEFAULT NULL,
  `GENDER` varchar(1) NOT NULL,
  `EMAIL` varchar(320) NOT NULL,
  `CELLPHONE` int(15) NOT NULL,
  `ADDRESS` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `member`
--

INSERT INTO `member` (`ID_MEMBER`, `USERNAME`, `PASSWORD`, `NAME`, `GENDER`, `EMAIL`, `CELLPHONE`, `ADDRESS`) VALUES
('IDM001', 'FISH', 123456, 'HAFIZHI', 'M', 'cynthiawidodo370@gmail.com', 2147483647, 'INDONESIA'),
('IDM002', 'FISHA', 123456, 'WidodoEE', 'M', '', 875727728, 'INDONESIA'),
('IDM003', 'zasfq', 123456, 'asqjtq', 'M', '', 928289912, 'Jl Kemiri Gg 3 No 19 Kec Taman K');

-- --------------------------------------------------------

--
-- Struktur dari tabel `orders`
--

CREATE TABLE `orders` (
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

CREATE TABLE `order_details` (
  `ID_DORDER` varchar(12) NOT NULL,
  `NAME` varchar(32) DEFAULT NULL,
  `QTY` int(10) DEFAULT NULL,
  `PRICE` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `product`
--

CREATE TABLE `product` (
  `ID_PRODUCT` varchar(12) NOT NULL,
  `ID_CATEGORY` varchar(12) DEFAULT NULL,
  `NAME` varchar(32) DEFAULT NULL,
  `PRICE` float DEFAULT NULL,
  `STOCK` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `product`
--

INSERT INTO `product` (`ID_PRODUCT`, `ID_CATEGORY`, `NAME`, `PRICE`, `STOCK`) VALUES
('IDP001', 'C001', 'ASUSX', 5000000, 20);

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
  ADD PRIMARY KEY (`ID_ORDER`),
  ADD KEY `FK_RELATIONSHIP_1` (`ID_ADMIN`),
  ADD KEY `FK_RELATIONSHIP_2` (`ID_MEMBER`),
  ADD KEY `FK_RELATIONSHIP_3` (`ID_DORDER`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`ID_DORDER`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`ID_PRODUCT`),
  ADD KEY `FK_RELATIONSHIP_5` (`ID_CATEGORY`);

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
