-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 25, 2021 at 10:20 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.2.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tk_tunas_rimba`
--

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `nuptk` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `ttl` varchar(100) NOT NULL,
  `statusguru` varchar(100) NOT NULL,
  `kpt` varchar(100) NOT NULL,
  `kelasdiampu` varchar(100) NOT NULL,
  `menjadiguru` varchar(100) NOT NULL,
  `jumlahjam` varchar(100) NOT NULL,
  `no` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`nuptk`, `nama`, `ttl`, `statusguru`, `kpt`, `kelasdiampu`, `menjadiguru`, `jumlahjam`, `no`) VALUES
('3238759661300003', 'Darwati, S.Pd.AUD ', 'Kotabaru, 6 September 1974 ', 'PTT', 'SI PAUD', 'Kepsek/ Guru Kelas A', '21 Juli 1997', '24 Jam', 1),
('604275765830063', 'Rohani, S.Pd', 'Teluk Kepayang, 10 Juli1979', 'PTT', 'SI PAUD', 'Guru Kelas B', '01 Juli 1998', '24 Jam', 2),
('6751759661300002', 'Hadawiyatul Islamiah, S.Pd', 'Pagatan, 19 April 1981', 'PTT', 'SI PAUD', 'Guru Kelas A', '17 Juli 2004', '24 Jam', 3),
('6548764665300020', 'Yayuk Srirahayu', 'Kotabaru,16 Desember 1986 ', 'PTT', 'SI PAUD', 'Guru Kelas B', '24 Januari 2007', '24 Jam', 4),
('', 'Selvu Sukesi, S.Pd', 'Sei Pinang, 14 Agustus 1986', 'Honor Daerah', 'SI PAUD', 'Guru Kelas B', '10 Agustus 2011', '24 Jam', 5),
('', 'Nor Hasanah, S.Pd', 'DarasanBinjai, 3 Februari 1989', 'Honor Daerah', 'SI PAUD', 'Guru Kelas A', '02 Januari 2012', '24 Jam', 6),
('', 'Herni Dahlia, S.Pd ', 'Tapus, 6 November 1983', 'Honor Daerah', 'SI PAUD', 'Guru Kelas B', '02 Januari 2012', '24 Jam', 7),
('', 'Purna Wildayanti', 'Bakarangan, 25 Agustus 1990', 'Honor Daerah', 'SMA', 'Guru Kelas A', '02 Januari 2012', '24 Jam', 8),
('', 'Ria Norwida', 'Teluk Kepayang, 08 Agustus 19933', 'Honor Daerah', 'SMA', 'Guru Kelas A / Operator', '21 Agustus 2013', '24 Jam', 9);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `nama`, `username`, `password`) VALUES
(1, 'admin', 'admin', 'rimba123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
