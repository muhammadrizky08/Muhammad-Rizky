-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 03, 2022 at 06:50 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db mahasiswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `Nim` int(9) NOT NULL,
  `Nama` varchar(64) NOT NULL,
  `Email` varchar(64) NOT NULL,
  `Jurusan` varchar(64) NOT NULL,
  `Fakultas` varchar(64) NOT NULL,
  `Gambar` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`Nim`, `Nama`, `Email`, `Jurusan`, `Fakultas`, `Gambar`) VALUES
(701210038, 'Musyari', 'ariokeguys@gmail.com', 'sistem informasi', 'Sains dan teknologi', 'Ari.jpg'),
(701210106, 'Melan Sari', 'melansari025@gmail.com', 'Sistem informasi', 'Sains dan Teknologi', 'melan.jpg'),
(701210202, 'M.Rizky', 'Rizkybele@gmail.com', 'Sistem Informasi', 'Sains dan teknologi', 'Rizky.jpg'),
(701210205, 'Aziz', 'Azizbb@gmail.com', 'Sistem Informasi', 'Sains Dan Teknologi', 'Aziz.jpg'),
(701210208, 'M.Ishaq rashyafi \r\n', 'ishaqrashyafi@gmail.com ', 'sistem informasi', 'sains dan teknologi', 'Ishaq.jpg'),
(701210255, 'Heru Wahyu', 'heruwahyu620@gmail.com', 'Sistem informasi', 'Sains dan teknologi', 'wahyu.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`Nim`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
