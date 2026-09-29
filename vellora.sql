-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 29, 2026 at 05:04 PM
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
-- Database: `vellora`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `nama`, `username`, `password`, `created_at`) VALUES
(1, 'Administrator', 'admin', '$2y$10$98vbxh4xT65X0Rnc9/L33eWkPdxz8VL4hbvd338D7IILqDOqYj4e6', '2026-09-27 13:56:08');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` int NOT NULL,
  `nama` varchar(100) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `harga` decimal(12,2) NOT NULL,
  `stok` int NOT NULL DEFAULT '0',
  `gambar` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `nama`, `kategori`, `deskripsi`, `harga`, `stok`, `gambar`, `created_at`) VALUES
(1, 'Sepatu Flats Balet Bow Satin - Pink', 'Flatshoes Casual', 'Sepatu balet berwarna pink ini terbuat dari satin dan dilengkapi tali silang yang dihiasi pita serta ujung kaki persegi yang tertutup. Padukan dengan rok lipit atau celana panjang yang rapi untuk menciptakan tampilan elegan yang terasa anggun tanpa usaha.', '500000.00', 20, '6abbeb0540946.webp', '2026-09-27 13:32:53'),
(2, 'Sepatu Flats Mary Jane Embriodered-Mesh Satin - White', 'Flatshoes Casual', 'Sepatu flat Mary Jane berwarna putih ini terbuat dari satin dan dilengkapi dengan hiasan bunga bordir di sekeliling bagian atas jaring, tali tipis yang dapat disesuaikan di bagian punggung kaki, ujung sepatu bulat yang tertutup, serta sol datar yang nyaman untuk berjalan. Warna lembut dan detail halusnya akan memberikan sentuhan akhir yang menawan pada penampilan formal Anda.', '300000.00', 15, '6abbeaae21f03.webp', '2026-09-27 13:32:53'),
(3, 'Sepatu Flats Mary Jane Crossover Triple-Strap - Chalk', 'Flatshoes Casual', 'Sepatu Flats Mary Jane berwarna chalk ini memiliki ujung bulat tertutup, sol datar rendah, dan desain tiga tali silang yang sederhana namun khas. Kenakan dengan rok berlipit atau celana lebar untuk menambahkan sentuhan visual pada busana sehari-hari Anda.', '250000.00', 25, '6abbea3f2446b.jpg', '2026-09-27 13:32:53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
