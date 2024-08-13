-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2024 at 02:54 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bajotour`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `nama_paket` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `jumlah_orang` int(11) NOT NULL,
  `nama_depan` varchar(255) NOT NULL,
  `nama_belakang` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `hp` varchar(20) NOT NULL,
  `metode_pembayaran` varchar(50) NOT NULL,
  `total_harga` decimal(10,2) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `nama_paket`, `tanggal`, `jumlah_orang`, `nama_depan`, `nama_belakang`, `email`, `hp`, `metode_pembayaran`, `total_harga`, `created_at`) VALUES
(1, 'Open Trip Pulau Komodo dan Pulau Padar', '2024-06-01', 6, 'a', 'b', 'a@a', '9', 'transfer', '9000000.00', '2024-06-01 00:23:53'),
(2, 'Private Trip Pantai Pink dan Pulau Komodo', '2024-06-01', 4, 'steven', 'wongso', 'a@a', '111', 'transfer', '8000000.00', '2024-06-01 00:25:23');

-- --------------------------------------------------------

--
-- Table structure for table `destinasiwisata`
--

CREATE TABLE `destinasiwisata` (
  `destinasi` varchar(255) NOT NULL,
  `rating` decimal(3,1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `destinasiwisata`
--

INSERT INTO `destinasiwisata` (`destinasi`, `rating`) VALUES
('Air Terjun Cunca', '4.6'),
('Goa Rangko', '4.5'),
('Gua Batu Cermin', '4.3'),
('Pantai Pink', '4.7'),
('Pulau Kanawa', '5.0'),
('Pulau Kelor', '5.0'),
('Pulau Koaba', '4.7'),
('Pulau Komodo', '5.0'),
('Pulau Padar', '4.8');

-- --------------------------------------------------------

--
-- Table structure for table `opini`
--

CREATE TABLE `opini` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `visit_date` date NOT NULL,
  `email` varchar(255) NOT NULL,
  `experience` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `paketwisata`
--

CREATE TABLE `paketwisata` (
  `nama_paket` varchar(255) NOT NULL,
  `deskripsi` text DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `destinasi` varchar(255) DEFAULT NULL,
  `durasi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `paketwisata`
--

INSERT INTO `paketwisata` (`nama_paket`, `deskripsi`, `harga`, `destinasi`, `durasi`) VALUES
('Open Trip Pantai Pink dan Pulau Komodo', 'Trip Pantai Pink dan Pulau Komodo', 1000000, 'Pantai Pink dan Pulau Komodo', '2 Hari 1 Malam'),
('Open Trip Pulau Komodo dan Pulau Padar', 'Trip Pulau Komodo dan Pulau Padar', 1500000, 'Pulau Komodo dan Pulau Padar', '3 Hari 2 Malam'),
('Open Trip Sailing Boat', 'Trip Sailing Boat', 500000, 'Pulau Kelor, Pulau Padar dan Pulau Kanawa', '1 Hari'),
('Private Trip Pantai Pink dan Pulau Komodo', 'Private Trip Pantai Pink dan Pulau Komodo', 2000000, 'Pantai Pink dan Pulau Komodo', '2 Hari 1 Malam'),
('Private Trip Pulau Komodo dan Pulau Padar', 'Private Trip Pulau Komodo dan Pulau Padar', 2500000, 'Pulau Komodo dan Pulau Padar', '3 Hari 2 Malam'),
('Private Trip Sailing Boat', 'Private Trip Sailing Boat', 500000, 'Pulau Kelor, Pulau Padar dan Pulau Kanawa', '1 Hari');

-- --------------------------------------------------------

--
-- Table structure for table `paket_destinasi`
--

CREATE TABLE `paket_destinasi` (
  `nama_paket` varchar(255) DEFAULT NULL,
  `destinasi` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `paket_destinasi`
--

INSERT INTO `paket_destinasi` (`nama_paket`, `destinasi`) VALUES
('Open Trip Pantai Pink dan Pulau Komodo', 'Pantai Pink'),
('Open Trip Pantai Pink dan Pulau Komodo', 'Pulau Komodo'),
('Open Trip Pulau Komodo dan Pulau Padar', 'Pulau Komodo'),
('Open Trip Pulau Komodo dan Pulau Padar', 'Pulau Padar'),
('Open Trip Sailing Boat', 'Pulau Padar'),
('Open Trip Sailing Boat', 'Pulau Kelor'),
('Open Trip Sailing Boat', 'Pulau Kanawa'),
('Private Trip Pantai Pink dan Pulau Komodo', 'Pantai Pink'),
('Private Trip Pantai Pink dan Pulau Komodo', 'Pulau Komodo'),
('Private Trip Pulau Komodo dan Pulau Padar', 'Pulau Komodo'),
('Private Trip Pulau Komodo dan Pulau Padar', 'Pulau Padar'),
('Private Trip Sailing Boat', 'Pulau Kelor'),
('Private Trip Sailing Boat', 'Pulau Padar'),
('Private Trip Sailing Boat', 'Pulau Kanawa');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama_lengkap`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'aaa', 'aaa@gmail.com', '$2y$10$OLtWUCLnxH649MYBulnfYeBFV6LccM2gjNIwnbXzy73HKOgwSxnqG', '2024-05-26 13:06:58', '2024-05-26 14:10:47'),
(2, 'bbb', 'bbb@gmail.com', '$2y$10$v8a/GoUSPVVv3PlZYevES.LxakcS8rosiYcs0Ysh4CBdsHshNV9K2', '2024-05-26 13:12:00', '2024-05-26 13:12:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_booking_nama_paket` (`nama_paket`);

--
-- Indexes for table `destinasiwisata`
--
ALTER TABLE `destinasiwisata`
  ADD PRIMARY KEY (`destinasi`);

--
-- Indexes for table `opini`
--
ALTER TABLE `opini`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `paketwisata`
--
ALTER TABLE `paketwisata`
  ADD PRIMARY KEY (`nama_paket`);

--
-- Indexes for table `paket_destinasi`
--
ALTER TABLE `paket_destinasi`
  ADD KEY `nama_paket` (`nama_paket`),
  ADD KEY `destinasi` (`destinasi`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `opini`
--
ALTER TABLE `opini`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `fk_booking_nama_paket` FOREIGN KEY (`nama_paket`) REFERENCES `paketwisata` (`nama_paket`) ON DELETE CASCADE;

--
-- Constraints for table `paket_destinasi`
--
ALTER TABLE `paket_destinasi`
  ADD CONSTRAINT `paket_destinasi_ibfk_1` FOREIGN KEY (`nama_paket`) REFERENCES `paketwisata` (`nama_paket`),
  ADD CONSTRAINT `paket_destinasi_ibfk_2` FOREIGN KEY (`destinasi`) REFERENCES `destinasiwisata` (`destinasi`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
