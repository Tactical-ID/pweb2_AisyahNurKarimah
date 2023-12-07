-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 07, 2023 at 03:40 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pemesananbouquet`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int NOT NULL,
  `admin_nama` varchar(100) NOT NULL,
  `admin_username` varchar(100) NOT NULL,
  `admin_password` varchar(100) NOT NULL,
  `admin_foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_nama`, `admin_username`, `admin_password`, `admin_foto`) VALUES
(6, 'Aisyah Nur Karimah', 'Ais', '274', '1970411042_user1.png'),
(17, 'Akmal Elmas Alrofi', 'Akmal', '893', 'default_value_or_empty');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` int NOT NULL,
  `customer_nama` varchar(255) NOT NULL,
  `customer_email` varchar(255) NOT NULL,
  `customer_hp` varchar(20) NOT NULL,
  `customer_alamat` text NOT NULL,
  `customer_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `customer_nama`, `customer_email`, `customer_hp`, `customer_alamat`, `customer_password`) VALUES
(1, 'Nur Salsabila Rahmah', 'salsabila@gmail.com', '08723465811', 'Jalan Benggala Barat ', '9612'),
(2, 'Kaivan Arkananta', 'kaivan@gmail.com', '087943265752', 'Banjarnegara', '12'),
(18, 'Tika Fitri Nur Azizah', 'tikafitri@gmail.com', '085647846482', ' Cilacap', '2698'),
(21, 'Genta Rizal Fauzi', 'genta@gmail.com', '087824367856', ' Jalan Merapi', '0588');

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `invoice_id` int NOT NULL,
  `invoice_tanggal` date NOT NULL,
  `invoice_customer` int NOT NULL,
  `invoice_nama` varchar(255) NOT NULL,
  `invoice_hp` varchar(255) NOT NULL,
  `invoice_alamat` text NOT NULL,
  `invoice_provinsi` varchar(255) NOT NULL,
  `invoice_kabupaten` varchar(255) NOT NULL,
  `invoice_kurir` varchar(255) NOT NULL,
  `invoice_berat` int NOT NULL,
  `invoice_ongkir` int NOT NULL,
  `invoice_total_bayar` int NOT NULL,
  `invoice_status` int NOT NULL,
  `invoice_resi` varchar(255) NOT NULL,
  `invoice_bukti` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`invoice_id`, `invoice_tanggal`, `invoice_customer`, `invoice_nama`, `invoice_hp`, `invoice_alamat`, `invoice_provinsi`, `invoice_kabupaten`, `invoice_kurir`, `invoice_berat`, `invoice_ongkir`, `invoice_total_bayar`, `invoice_status`, `invoice_resi`, `invoice_bukti`) VALUES
(5, '2023-11-01', 564335, 'Alifia Muthi Afifa', '087934768876', 'Jalan Flores', 'Jawa Tengah', 'Cilacap', 'SPX', 400, 10000, 80000, 3, '632542', 'buktibayar1.jpg'),
(6, '2023-10-03', 2423, 'Nur Salsabila Rahmah', '085647923195', 'Jalan Singa', 'Jawa Barat', 'Majalengka', 'JNE', 300, 20000, 120000, 1, 'ewrw2', 'buktibayar1'),
(8, '2023-09-04', 787332, 'Chinta Sejatining', '083672912632', 'Jalan Mawar', 'Jawa Tengah', 'Banyumas', 'JNT700', 600, 15000, 105000, 4, '9y65w654', 'buktibayar2');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `kategori_id` int NOT NULL,
  `kategori_nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ongkir`
--

CREATE TABLE `ongkir` (
  `id` int NOT NULL,
  `nama_daerah` varchar(50) NOT NULL,
  `ongkir` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `produk_id` int NOT NULL,
  `produk_nama` varchar(200) NOT NULL,
  `produk_harga` int NOT NULL,
  `produk_jumlah` int NOT NULL,
  `produk_berat` int NOT NULL,
  `produk_foto1` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`produk_id`, `produk_nama`, `produk_harga`, `produk_jumlah`, `produk_berat`, `produk_foto1`) VALUES
(2, 'Bouquet Bumbu Dapur', 55000, 5, 500, '352442544_bouquet1.jpeg'),
(6, 'Bouquet Foto', 40000, 2, 500, '784394211_bouquetfoto.jpeg'),
(8, 'Bouquet Coklat', 25000, 7, 300, '1538345236_bouquet23.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`invoice_id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`kategori_id`);

--
-- Indexes for table `ongkir`
--
ALTER TABLE `ongkir`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`produk_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `invoice_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `kategori_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ongkir`
--
ALTER TABLE `ongkir`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `produk_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
