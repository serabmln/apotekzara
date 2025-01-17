-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2025 at 07:33 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zara_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_obat`
--

CREATE TABLE `data_obat` (
  `kode` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `exp_date` date NOT NULL,
  `harga` int(11) NOT NULL,
  `stok` int(11) NOT NULL,
  `satuan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kode_obat_sequence`
--

CREATE TABLE `kode_obat_sequence` (
  `id` int(11) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `last_number` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kode_obat_sequence`
--

INSERT INTO `kode_obat_sequence` (`id`, `kategori`, `last_number`) VALUES
(1, 'GENERIK', 103),
(2, 'ALKES', 100),
(3, 'OTC', 100),
(4, 'ETHICAL', 100),
(5, 'KOSMETIK', 100),
(6, 'HERBAL', 100),
(7, 'RACIKAN', 101);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_dataobat`
--

CREATE TABLE `tbl_dataobat` (
  `kd_obat` varchar(18) NOT NULL,
  `nm_obat` varchar(80) NOT NULL,
  `exp_obat` date NOT NULL,
  `ktg_obat` varchar(15) NOT NULL,
  `sat_obat` varchar(11) NOT NULL,
  `hrg_obat` int(11) NOT NULL,
  `profit` int(11) NOT NULL,
  `prosentase` float NOT NULL,
  `hrgbeli_obat` int(11) NOT NULL,
  `stk_obat` int(11) NOT NULL,
  `minstk_obat` int(11) NOT NULL,
  `racikan_obat` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_dataobat`
--

INSERT INTO `tbl_dataobat` (`kd_obat`, `nm_obat`, `exp_obat`, `ktg_obat`, `sat_obat`, `hrg_obat`, `profit`, `prosentase`, `hrgbeli_obat`, `stk_obat`, `minstk_obat`, `racikan_obat`) VALUES
('GEN-00101', 'TEST GEN 1', '0000-00-00', 'GENERIK', 'STRIP', 35000, 17500, 100, 17500, 168, 10, ''),
('GEN-00102', 'Tes Gen 2', '0000-00-00', 'GENERIK', 'BOTOL', 0, 0, 0, 0, 0, 10, ''),
('GEN-00103', 'TEST GENERIK 2', '0000-00-00', 'GENERIK', 'STRIP', 13320, 3320, 20, 10000, 0, 10, ''),
('RCK-00101', 'RACIKAN ASAM USAT', '0000-00-00', 'RACIKAN', 'PCS', 10000, 0, 0, 0, 999, 10, 'obat a 1 jffjasbjfkbajkb');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_metode_ses`
--

CREATE TABLE `tbl_metode_ses` (
  `no_mtd_ses` varchar(16) NOT NULL,
  `no_obatramal` varchar(16) NOT NULL,
  `mae_ses1` double NOT NULL,
  `mae_ses2` double NOT NULL,
  `mape_ses1` double NOT NULL,
  `mape_ses2` double NOT NULL,
  `msd_ses1` double NOT NULL,
  `msd_ses2` double NOT NULL,
  `hasil_ses1` double NOT NULL,
  `hasil_ses2` double NOT NULL,
  `stat_ses1` enum('baik','kurang') DEFAULT NULL,
  `stat_ses2` enum('baik','kurang') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_metode_sma`
--

CREATE TABLE `tbl_metode_sma` (
  `no_mtd_sma` varchar(16) NOT NULL,
  `no_obatramal` varchar(16) NOT NULL,
  `mae_sma1` double NOT NULL,
  `mae_sma2` double NOT NULL,
  `mape_sma1` double NOT NULL,
  `mape_sma2` double NOT NULL,
  `msd_sma1` double NOT NULL,
  `msd_sma2` double NOT NULL,
  `hasil_sma1` double NOT NULL,
  `hasil_sma2` double NOT NULL,
  `stat_sma1` enum('baik','kurang') NOT NULL,
  `stat_sma2` enum('baik','kurang') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_obatramal`
--

CREATE TABLE `tbl_obatramal` (
  `no_obatramal` varchar(16) NOT NULL,
  `no_rml` varchar(16) NOT NULL,
  `kd_obat` varchar(18) NOT NULL,
  `nm_obat` varchar(80) NOT NULL,
  `sat_obat` varchar(11) NOT NULL,
  `mtd_terbaik` enum('SMA','SES') NOT NULL,
  `hasil_rml` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pegawai`
--

CREATE TABLE `tbl_pegawai` (
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `id_peg` varchar(11) NOT NULL,
  `nama_peg` varchar(50) NOT NULL,
  `alamat_peg` text NOT NULL,
  `hp_peg` varchar(13) NOT NULL,
  `jk_peg` varchar(10) NOT NULL,
  `lhr_peg` date NOT NULL,
  `msk_peg` date NOT NULL,
  `pos_peg` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pegawai`
--

INSERT INTO `tbl_pegawai` (`username`, `password`, `id_peg`, `nama_peg`, `alamat_peg`, `hp_peg`, `jk_peg`, `lhr_peg`, `msk_peg`, `pos_peg`) VALUES
('admin', 'admin', 'ADM02250114', 'test', 'sad', '4234', 'Laki-laki', '2025-01-14', '2025-01-14', 'Admin'),
('faris', 'admin', 'ADM01970215', 'FARIZ MAULANA', '-', '085333461216', 'Laki-laki', '1997-02-15', '2019-11-02', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pembelian`
--

CREATE TABLE `tbl_pembelian` (
  `no_faktur` varchar(20) NOT NULL,
  `no_supplier` varchar(2) NOT NULL,
  `tgl_pembelian` date NOT NULL,
  `cr_bayar` varchar(15) NOT NULL,
  `jth_tempo` date DEFAULT NULL,
  `total_pembelian` int(11) NOT NULL,
  `status_byr` varchar(12) NOT NULL,
  `tgl_lunas` date DEFAULT NULL,
  `id_peg` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pembelian`
--

INSERT INTO `tbl_pembelian` (`no_faktur`, `no_supplier`, `tgl_pembelian`, `cr_bayar`, `jth_tempo`, `total_pembelian`, `status_byr`, `tgl_lunas`, `id_peg`) VALUES
('Faktur 1	', '9', '2025-01-09', 'Langsung', '0000-00-00', 159840, 'Lunas', '2025-01-09', 'ADM01970215'),
('Faktur 1', '9', '2025-01-09', 'Langsung', '0000-00-00', 2614050, 'Lunas', '2025-01-09', 'ADM01970215'),
('Faktur 2', '9', '2025-01-09', 'Langsung', '0000-00-00', 15000, 'Lunas', '2025-01-09', 'ADM01970215'),
('Faktur 4', '9', '2025-01-09', 'Langsung', '0000-00-00', 388500, 'Lunas', '2025-01-09', 'ADM01970215'),
('Faktur Test', '9', '2025-01-12', 'Langsung', '0000-00-00', 111000, 'Lunas', '2025-01-12', 'ADM01970215');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pembeliandetail`
--

CREATE TABLE `tbl_pembeliandetail` (
  `no_idx` int(11) NOT NULL,
  `no_faktur` varchar(20) NOT NULL,
  `kd_obat` varchar(15) NOT NULL,
  `no_batch` varchar(50) NOT NULL,
  `exp_obatbeli` date NOT NULL,
  `hrg_beli` int(11) NOT NULL,
  `jml_beli` int(11) NOT NULL,
  `sat_beli` varchar(11) NOT NULL,
  `ppn_type` int(11) NOT NULL,
  `ppn_total` int(11) NOT NULL,
  `subtotal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pembeliandetail`
--

INSERT INTO `tbl_pembeliandetail` (`no_idx`, `no_faktur`, `kd_obat`, `no_batch`, `exp_obatbeli`, `hrg_beli`, `jml_beli`, `sat_beli`, `ppn_type`, `ppn_total`, `subtotal`) VALUES
(9, 'Faktur 1', 'GEN-00101', 'No Batch - 1', '2025-09-30', 15700, 150, 'STRIP', 11, 259050, 2614050),
(10, 'Faktur 2', 'GEN-00101', 'No Batch - 2', '2025-08-30', 15000, 1, 'STRIP', 0, 0, 15000),
(11, 'Faktur 1	', 'GEN-00101', 'No Batch - 3', '2026-03-28', 16000, 9, 'STRIP', 11, 15840, 159840),
(12, 'Faktur 4', 'GEN-00101', 'Test No batch 4', '2025-08-30', 17500, 20, 'STRIP', 11, 38500, 388500),
(13, 'Faktur Test', 'GEN-00103', 'Test No Batch', '2025-09-30', 10000, 10, 'STRIP', 11, 11000, 111000);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_penjualan`
--

CREATE TABLE `tbl_penjualan` (
  `no_penjualan` varchar(16) NOT NULL,
  `tgl_penjualan` date NOT NULL,
  `total_penjualan` int(11) NOT NULL,
  `tunai` int(11) NOT NULL,
  `kembali` int(11) NOT NULL,
  `id_peg` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_penjualan`
--

INSERT INTO `tbl_penjualan` (`no_penjualan`, `tgl_penjualan`, `total_penjualan`, `tunai`, `kembali`, `id_peg`) VALUES
('PJL/20250114/01', '2025-01-14', 70000, 80000, 10000, 'ADM01970215');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_penjualandetail`
--

CREATE TABLE `tbl_penjualandetail` (
  `no` int(11) NOT NULL,
  `no_penjualan` varchar(16) NOT NULL,
  `kd_obat` varchar(15) NOT NULL,
  `expired` date NOT NULL,
  `hrg_jual` int(11) NOT NULL,
  `jml_jual` int(11) NOT NULL,
  `sat_jual` varchar(11) DEFAULT NULL,
  `profit_obat` int(11) NOT NULL,
  `subtotal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_penjualandetail`
--

INSERT INTO `tbl_penjualandetail` (`no`, `no_penjualan`, `kd_obat`, `expired`, `hrg_jual`, `jml_jual`, `sat_jual`, `profit_obat`, `subtotal`) VALUES
(10, 'PJL/20250114/01', 'GEN-00101', '2026-03-28', 35000, 2, 'STRIP', 35000, 70000);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_peramalan`
--

CREATE TABLE `tbl_peramalan` (
  `no_rml` varchar(16) NOT NULL,
  `tgl_rml` date NOT NULL,
  `periode_rml` varchar(30) NOT NULL,
  `jml_obat` int(11) NOT NULL,
  `nilai_ma1` int(11) NOT NULL,
  `nilai_ma2` int(11) NOT NULL,
  `nilai_alpha1` double NOT NULL,
  `nilai_alpha2` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_prd_ses`
--

CREATE TABLE `tbl_prd_ses` (
  `no_prd_ses` int(11) NOT NULL,
  `no_mtd_ses` varchar(16) NOT NULL,
  `periode` varchar(30) NOT NULL,
  `jml_penjualan` int(11) NOT NULL,
  `rml_ses1` double NOT NULL,
  `rml_ses2` double NOT NULL,
  `ea_ses1` double NOT NULL,
  `ea_ses2` double NOT NULL,
  `pea_ses1` double NOT NULL,
  `pea_ses2` double NOT NULL,
  `sd_ses1` double NOT NULL,
  `sd_ses2` double NOT NULL,
  `stat_ses` enum('latih','hasil') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_prd_sma`
--

CREATE TABLE `tbl_prd_sma` (
  `no_prd_sma` int(11) NOT NULL,
  `no_mtd_sma` varchar(16) NOT NULL,
  `periode` varchar(30) NOT NULL,
  `jml_penjualan` int(11) NOT NULL,
  `rml_sma1` double NOT NULL,
  `rml_sma2` double NOT NULL,
  `ea_sma1` double NOT NULL,
  `ea_sma2` double NOT NULL,
  `pea_sma1` double NOT NULL,
  `pea_sma2` double NOT NULL,
  `sd_sma1` double NOT NULL,
  `sd_sma2` double NOT NULL,
  `stat_sma` enum('latih','hasil') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_stokexpobat`
--

CREATE TABLE `tbl_stokexpobat` (
  `no_stok` int(11) NOT NULL,
  `kd_obat` varchar(15) NOT NULL,
  `tgl_exp` date NOT NULL,
  `stok` int(11) NOT NULL,
  `no_batch` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_stokexpobat`
--

INSERT INTO `tbl_stokexpobat` (`no_stok`, `kd_obat`, `tgl_exp`, `stok`, `no_batch`) VALUES
(1225, 'GEN-00101', '2025-01-30', 1, ''),
(1226, 'GEN-00101', '2025-09-30', 150, 'No Batch - 1'),
(1227, 'GEN-00101', '2025-08-30', 17, 'No Batch - 2'),
(1228, 'GEN-00101', '2026-03-28', 0, 'No Batch - 3'),
(1229, 'GEN-00102', '0000-00-00', 0, ''),
(1230, 'RCK-00101', '2026-08-31', 999, ''),
(1231, 'GEN-00103', '0000-00-00', 0, ''),
(1232, 'GEN-00103', '2025-09-30', 0, 'Test No Batch');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_supplier`
--

CREATE TABLE `tbl_supplier` (
  `no_supp` int(11) NOT NULL,
  `nama_supp` varchar(50) NOT NULL,
  `nama_pet` varchar(50) NOT NULL,
  `nohp_pet` varchar(16) NOT NULL,
  `alm_supp` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_supplier`
--

INSERT INTO `tbl_supplier` (`no_supp`, `nama_supp`, `nama_pet`, `nohp_pet`, `alm_supp`) VALUES
(8, 'PT PRABA BARAKA JAYA', 'DENNY', '0857-7717-2684', 'JL. Pangeran Drajat No.1 120 Cirebon'),
(9, 'PT DUA PILAR LESTARI', 'RIZKI', '0878-2080-5010', 'JL. Adiwangsa No. 72, RT 001/004, Karang Lewas Lor, Purwokerto');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_obat`
--
ALTER TABLE `data_obat`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `kode_obat_sequence`
--
ALTER TABLE `kode_obat_sequence`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kategori` (`kategori`);

--
-- Indexes for table `tbl_dataobat`
--
ALTER TABLE `tbl_dataobat`
  ADD PRIMARY KEY (`kd_obat`);

--
-- Indexes for table `tbl_metode_ses`
--
ALTER TABLE `tbl_metode_ses`
  ADD PRIMARY KEY (`no_mtd_ses`),
  ADD KEY `mtd_ses_no_obatramal` (`no_obatramal`);

--
-- Indexes for table `tbl_metode_sma`
--
ALTER TABLE `tbl_metode_sma`
  ADD PRIMARY KEY (`no_mtd_sma`),
  ADD KEY `mtd_sma_no_obatramal` (`no_obatramal`);

--
-- Indexes for table `tbl_obatramal`
--
ALTER TABLE `tbl_obatramal`
  ADD PRIMARY KEY (`no_obatramal`),
  ADD KEY `tbl_obatramal_no_ramal` (`no_rml`),
  ADD KEY `tbl_obatramal_kd_obat` (`kd_obat`);

--
-- Indexes for table `tbl_pegawai`
--
ALTER TABLE `tbl_pegawai`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `tbl_pembelian`
--
ALTER TABLE `tbl_pembelian`
  ADD PRIMARY KEY (`no_faktur`);

--
-- Indexes for table `tbl_pembeliandetail`
--
ALTER TABLE `tbl_pembeliandetail`
  ADD PRIMARY KEY (`no_idx`);

--
-- Indexes for table `tbl_penjualan`
--
ALTER TABLE `tbl_penjualan`
  ADD PRIMARY KEY (`no_penjualan`);

--
-- Indexes for table `tbl_penjualandetail`
--
ALTER TABLE `tbl_penjualandetail`
  ADD PRIMARY KEY (`no`),
  ADD KEY `no_penjualan` (`no_penjualan`);

--
-- Indexes for table `tbl_peramalan`
--
ALTER TABLE `tbl_peramalan`
  ADD PRIMARY KEY (`no_rml`);

--
-- Indexes for table `tbl_prd_ses`
--
ALTER TABLE `tbl_prd_ses`
  ADD PRIMARY KEY (`no_prd_ses`),
  ADD KEY `prd_ses_no_mtd` (`no_mtd_ses`);

--
-- Indexes for table `tbl_prd_sma`
--
ALTER TABLE `tbl_prd_sma`
  ADD PRIMARY KEY (`no_prd_sma`),
  ADD KEY `prd_sma_no_mtd` (`no_mtd_sma`);

--
-- Indexes for table `tbl_stokexpobat`
--
ALTER TABLE `tbl_stokexpobat`
  ADD PRIMARY KEY (`no_stok`);

--
-- Indexes for table `tbl_supplier`
--
ALTER TABLE `tbl_supplier`
  ADD PRIMARY KEY (`no_supp`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kode_obat_sequence`
--
ALTER TABLE `kode_obat_sequence`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_pembeliandetail`
--
ALTER TABLE `tbl_pembeliandetail`
  MODIFY `no_idx` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_penjualandetail`
--
ALTER TABLE `tbl_penjualandetail`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_prd_ses`
--
ALTER TABLE `tbl_prd_ses`
  MODIFY `no_prd_ses` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_prd_sma`
--
ALTER TABLE `tbl_prd_sma`
  MODIFY `no_prd_sma` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_stokexpobat`
--
ALTER TABLE `tbl_stokexpobat`
  MODIFY `no_stok` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1233;

--
-- AUTO_INCREMENT for table `tbl_supplier`
--
ALTER TABLE `tbl_supplier`
  MODIFY `no_supp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_metode_ses`
--
ALTER TABLE `tbl_metode_ses`
  ADD CONSTRAINT `mtd_ses_no_obatramal` FOREIGN KEY (`no_obatramal`) REFERENCES `tbl_obatramal` (`no_obatramal`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_metode_sma`
--
ALTER TABLE `tbl_metode_sma`
  ADD CONSTRAINT `mtd_sma_no_obatramal` FOREIGN KEY (`no_obatramal`) REFERENCES `tbl_obatramal` (`no_obatramal`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_obatramal`
--
ALTER TABLE `tbl_obatramal`
  ADD CONSTRAINT `tbl_obatramal_kd_obat` FOREIGN KEY (`kd_obat`) REFERENCES `tbl_dataobat` (`kd_obat`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_obatramal_no_ramal` FOREIGN KEY (`no_rml`) REFERENCES `tbl_peramalan` (`no_rml`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_prd_ses`
--
ALTER TABLE `tbl_prd_ses`
  ADD CONSTRAINT `prd_ses_no_mtd` FOREIGN KEY (`no_mtd_ses`) REFERENCES `tbl_metode_ses` (`no_mtd_ses`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_prd_sma`
--
ALTER TABLE `tbl_prd_sma`
  ADD CONSTRAINT `prd_sma_no_mtd` FOREIGN KEY (`no_mtd_sma`) REFERENCES `tbl_metode_sma` (`no_mtd_sma`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
