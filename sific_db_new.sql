-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2016 at 05:58 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sific_db_new`
--

-- --------------------------------------------------------

--
-- Table structure for table `bahan_baku`
--

CREATE TABLE `bahan_baku` (
  `Id_Bahan` char(8) NOT NULL,
  `Nama_Bahan` varchar(25) NOT NULL,
  `Satuan` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `detail_kompensasi_dan_benefit_bulanan`
--

CREATE TABLE `detail_kompensasi_dan_benefit_bulanan` (
  `Id_KomBen` char(8) NOT NULL,
  `Id_Karyawan` char(8) NOT NULL,
  `Keterangan` char(4) NOT NULL,
  `Jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `detail_pemesanan_bahanbaku`
--

CREATE TABLE `detail_pemesanan_bahanbaku` (
  `Id_pesan` char(8) NOT NULL,
  `BahanBaku` char(8) NOT NULL,
  `Jumlah` int(11) NOT NULL,
  `Harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `detail_transaksi_penjualan`
--

CREATE TABLE `detail_transaksi_penjualan` (
  `Id_Trans` int(8) NOT NULL,
  `Id_Detail` char(8) NOT NULL,
  `Menu` char(8) NOT NULL,
  `Jumlah_Barang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_transaksi_penjualan`
--

INSERT INTO `detail_transaksi_penjualan` (`Id_Trans`, `Id_Detail`, `Menu`, `Jumlah_Barang`) VALUES
(9873222, '987989', 'Ayam', 2);

-- --------------------------------------------------------

--
-- Table structure for table `history_perubahan_pemesanan_bahan_baku`
--

CREATE TABLE `history_perubahan_pemesanan_bahan_baku` (
  `Id_Pemesanan` char(8) NOT NULL,
  `Timestamp_Perubahan_Bahan_Baku` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Riwayat_Perubahan_Pesanan` varchar(25) NOT NULL,
  `Id_User_Pengubah_Pesanan` char(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `history_perubahan_pengeluaran_harian`
--

CREATE TABLE `history_perubahan_pengeluaran_harian` (
  `Id_Pengeluaran` char(8) NOT NULL,
  `Total` int(11) NOT NULL,
  `Riwayat_Perubahan_Pengeluaran` varchar(25) NOT NULL,
  `Id_User_Pengubah_Pengeluaran` char(8) NOT NULL,
  `Timestamp_Perubahan_Pengeluaran_Harian` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `inventory_manager`
--

CREATE TABLE `inventory_manager` (
  `Id_Inventory_Manager` char(8) NOT NULL,
  `Laporan` varchar(50) NOT NULL,
  `Jam_Kerja` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `invoice_bulanan`
--

CREATE TABLE `invoice_bulanan` (
  `Id_Invoice` char(8) NOT NULL,
  `Tanggal_Diterima` date NOT NULL,
  `Status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invoice_bulanan`
--

INSERT INTO `invoice_bulanan` (`Id_Invoice`, `Tanggal_Diterima`, `Status`) VALUES
('00000001', '0000-00-00', 'Sudah dibayar');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_pengeluaran_harian`
--

CREATE TABLE `jenis_pengeluaran_harian` (
  `Id_Jenis` char(4) NOT NULL,
  `Nama_Pengeluaran` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE `karyawan` (
  `Id_Karyawan` char(8) NOT NULL,
  `Nama` varchar(25) NOT NULL,
  `Alamat` varchar(25) NOT NULL,
  `No_Telepon` char(12) NOT NULL,
  `Pendidikan_Terakhir` varchar(25) NOT NULL,
  `Gaji` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kasir`
--

CREATE TABLE `kasir` (
  `Id_Kasir` char(8) NOT NULL,
  `Jam_Kerja` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `keterangan_komben`
--

CREATE TABLE `keterangan_komben` (
  `Id_Keterangan` char(4) NOT NULL,
  `Nama_Keterangan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kompensasi_dan_benefit_bulanan`
--

CREATE TABLE `kompensasi_dan_benefit_bulanan` (
  `Id_Komben` char(8) NOT NULL,
  `Bulan_Tahun` char(8) NOT NULL,
  `Timestamp_KomBen` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `komposisi`
--

CREATE TABLE `komposisi` (
  `Menu` char(8) NOT NULL,
  `Bahan_Baku` char(8) NOT NULL,
  `Jumlah_Bahan_Baku` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `komposisi`
--

INSERT INTO `komposisi` (`Menu`, `Bahan_Baku`, `Jumlah_Bahan_Baku`) VALUES
('ayam', 'ayam', 12);

-- --------------------------------------------------------

--
-- Table structure for table `menu_makanan`
--

CREATE TABLE `menu_makanan` (
  `Id_Menu` char(8) NOT NULL,
  `Nama_Menu` varchar(25) NOT NULL,
  `Harga_Menu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `owner`
--

CREATE TABLE `owner` (
  `Id_Owner` char(8) NOT NULL,
  `Nama` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan_bahan_baku`
--

CREATE TABLE `pemesanan_bahan_baku` (
  `Id_Pemesanan` char(8) NOT NULL,
  `Timestamp_Pemesanan_Bahan_Baku` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pengeluaran_harian`
--

CREATE TABLE `pengeluaran_harian` (
  `Id_Pengeluaran` char(8) NOT NULL,
  `Jenis_Pengeluaran` char(4) NOT NULL,
  `Total` int(11) NOT NULL,
  `Keterangan` varchar(50) NOT NULL,
  `Pencatat` varchar(15) NOT NULL,
  `Timestamp_Pengeluaran_Harian` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `status_penerimaan_bahan_baku`
--

CREATE TABLE `status_penerimaan_bahan_baku` (
  `Id_Penerimaan` char(8) NOT NULL,
  `BahanBaku` char(8) NOT NULL,
  `Jumlah_Dipesan` int(11) NOT NULL,
  `Jumlah_Diterima` int(11) NOT NULL,
  `Keterangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status_penerimaan_bahan_baku`
--

INSERT INTO `status_penerimaan_bahan_baku` (`Id_Penerimaan`, `BahanBaku`, `Jumlah_Dipesan`, `Jumlah_Diterima`, `Keterangan`) VALUES
('123456', 'Roti', 100, 99, 'Semua Diterima');

-- --------------------------------------------------------

--
-- Table structure for table `status_produksi_bahan_baku`
--

CREATE TABLE `status_produksi_bahan_baku` (
  `Id_Produksi` char(8) NOT NULL,
  `BahanBakuProduksi` char(8) NOT NULL,
  `Bahan_Diambil` int(11) NOT NULL,
  `Bahan_Terproses` int(11) NOT NULL,
  `Keterangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status_produksi_bahan_baku`
--

INSERT INTO `status_produksi_bahan_baku` (`Id_Produksi`, `BahanBakuProduksi`, `Bahan_Diambil`, `Bahan_Terproses`, `Keterangan`) VALUES
('00000001', 'Ayam', 100, 95, 'Daging Biru');

-- --------------------------------------------------------

--
-- Table structure for table `stok_bahan_baku`
--

CREATE TABLE `stok_bahan_baku` (
  `Id_Bahan_Baku` char(8) NOT NULL,
  `Jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `transaksi_penjualan_harian`
--

CREATE TABLE `transaksi_penjualan_harian` (
  `Id_Transaksi` char(8) NOT NULL,
  `Kasir` varchar(15) NOT NULL,
  `Timestamp_Penjualan` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(50) NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `password_reset_token` varchar(32) DEFAULT NULL,
  `auth_key` varchar(32) DEFAULT NULL,
  `email` varchar(30) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bahan_baku`
--
ALTER TABLE `bahan_baku`
  ADD PRIMARY KEY (`Id_Bahan`);

--
-- Indexes for table `detail_kompensasi_dan_benefit_bulanan`
--
ALTER TABLE `detail_kompensasi_dan_benefit_bulanan`
  ADD PRIMARY KEY (`Id_KomBen`,`Id_Karyawan`);

--
-- Indexes for table `detail_pemesanan_bahanbaku`
--
ALTER TABLE `detail_pemesanan_bahanbaku`
  ADD PRIMARY KEY (`Id_pesan`,`BahanBaku`);

--
-- Indexes for table `detail_transaksi_penjualan`
--
ALTER TABLE `detail_transaksi_penjualan`
  ADD PRIMARY KEY (`Id_Trans`,`Id_Detail`);

--
-- Indexes for table `inventory_manager`
--
ALTER TABLE `inventory_manager`
  ADD PRIMARY KEY (`Id_Inventory_Manager`);

--
-- Indexes for table `invoice_bulanan`
--
ALTER TABLE `invoice_bulanan`
  ADD PRIMARY KEY (`Id_Invoice`);

--
-- Indexes for table `jenis_pengeluaran_harian`
--
ALTER TABLE `jenis_pengeluaran_harian`
  ADD PRIMARY KEY (`Id_Jenis`);

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`Id_Karyawan`);

--
-- Indexes for table `kasir`
--
ALTER TABLE `kasir`
  ADD PRIMARY KEY (`Id_Kasir`);

--
-- Indexes for table `keterangan_komben`
--
ALTER TABLE `keterangan_komben`
  ADD PRIMARY KEY (`Id_Keterangan`);

--
-- Indexes for table `kompensasi_dan_benefit_bulanan`
--
ALTER TABLE `kompensasi_dan_benefit_bulanan`
  ADD PRIMARY KEY (`Id_Komben`);

--
-- Indexes for table `komposisi`
--
ALTER TABLE `komposisi`
  ADD PRIMARY KEY (`Menu`,`Bahan_Baku`);

--
-- Indexes for table `menu_makanan`
--
ALTER TABLE `menu_makanan`
  ADD PRIMARY KEY (`Id_Menu`);

--
-- Indexes for table `owner`
--
ALTER TABLE `owner`
  ADD PRIMARY KEY (`Id_Owner`);

--
-- Indexes for table `pemesanan_bahan_baku`
--
ALTER TABLE `pemesanan_bahan_baku`
  ADD PRIMARY KEY (`Id_Pemesanan`);

--
-- Indexes for table `pengeluaran_harian`
--
ALTER TABLE `pengeluaran_harian`
  ADD PRIMARY KEY (`Id_Pengeluaran`);

--
-- Indexes for table `status_penerimaan_bahan_baku`
--
ALTER TABLE `status_penerimaan_bahan_baku`
  ADD PRIMARY KEY (`Id_Penerimaan`);

--
-- Indexes for table `status_produksi_bahan_baku`
--
ALTER TABLE `status_produksi_bahan_baku`
  ADD PRIMARY KEY (`Id_Produksi`);

--
-- Indexes for table `stok_bahan_baku`
--
ALTER TABLE `stok_bahan_baku`
  ADD PRIMARY KEY (`Id_Bahan_Baku`);

--
-- Indexes for table `transaksi_penjualan_harian`
--
ALTER TABLE `transaksi_penjualan_harian`
  ADD PRIMARY KEY (`Id_Transaksi`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
