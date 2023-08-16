-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 16, 2023 at 01:16 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_appkasir`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id_admin` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `jabatan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id_admin`, `nama`, `username`, `password`, `email`, `jabatan`) VALUES
(1, 'bunga hanafi', 'admin', '1', 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tb_barang`
--

CREATE TABLE `tb_barang` (
  `id_barang` int(11) NOT NULL,
  `nama_brng` varchar(100) NOT NULL,
  `gambar_brng` varchar(100) NOT NULL,
  `harga_brng` varchar(100) NOT NULL,
  `jenis_brng` varchar(100) NOT NULL,
  `deskripsi` varchar(3000) NOT NULL,
  `jumlah_brng` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_barang`
--

INSERT INTO `tb_barang` (`id_barang`, `nama_brng`, `gambar_brng`, `harga_brng`, `jenis_brng`, `deskripsi`, `jumlah_brng`) VALUES
(9, 'Laptop Thinkpad 3180 ssd 256', 'thinkpad.jpg', '5.500.000', 'elektronik', 'Garansi : 1 bulan ( jasa dan service )\r\nGaransi : 1 minggu ( tukar unit selama stok ada )\r\n\r\nLenovo Thinkpad x270 Specs :\r\n# Prosesor : Intel Core i5-6300U (6TH)\r\n# Storage : SSD SATA 128/256/512\r\n# Ram : RAM 4/8/16 DDR4\r\n# Screen : 12,5\"inch\r\n# Grapic : Intel HD Grapic 520\r\n# Os : Window 10 PRO\r\n# Webcam : HD Web Camera\r\n# Keyboard JP\r\n# Realease date : 2017\r\n# Weight : 1,27 KG\r\n\r\nLenovo Thinkpad x270 Specs :\r\n# Prosesor : Intel Core i5-7300U (7TH)\r\n# Storage : SSD SATA 128/256/512\r\n# Ram : RAM 4/8/16 DDR4\r\n# Screen : 12,5\"inch\r\n# Grapic : Intel HD Grapic 620\r\n# Os : Window 10 PRO\r\n# Webcam : HD Web Camera\r\n# Keyboard JP\r\n# Realease date : 2017\r\n# Weight : 1,27 KGGaransi : 1 bulan ( jasa dan service )\r\nGaransi : 1 minggu ( tukar unit selama stok ada )\r\n\r\nLenovo Thinkpad x270 Specs :\r\n# Prosesor : Intel Core i5-6300U (6TH)\r\n# Storage : SSD SATA 128/256/512\r\n# Ram : RAM 4/8/16 DDR4\r\n# Screen : 12,5\"inch\r\n# Grapic : Intel HD Grapic 520\r\n# Os : Window 10 PRO\r\n# Webcam : HD Web Camera\r\n# Keyboard JP\r\n# Realease date : 2017\r\n# Weight : 1,27 KG\r\n\r\nLenovo Thinkpad x270 Specs :\r\n# Prosesor : Intel Core i5-7300U (7TH)\r\n# Storage : SSD SATA 128/256/512\r\n# Ram : RAM 4/8/16 DDR4\r\n# Screen : 12,5\"inch\r\n# Grapic : Intel HD Grapic 620\r\n# Os : Window 10 PRO\r\n# Webcam : HD Web Camera\r\n# Keyboard JP\r\n# Realease date : 2017\r\n# Weight : 1,27 KG', '3'),
(13, 'shampoo zink cool 340ml', 'shampo.jpg', '56.000', 'kecantikan', 'Zinc Shampoo Anti Ketombe adalah shampo persembaan dari Zinc dengan formula yang disempurnakan, Formula Complex Zinc-PTO yan merupakan serum inovasi dari LION JAPAN untuk mengurangi ketombe di kepala. Tersedia dalam 2 varian : - Zinc Hairfall Treatment : Dilengkapi dengan ekstrak Japanese Ginseng merawat kekuatan akar rambut sehingga mencegah kerontokan dan membuat rambut halus. - Zinc Clean Active : Dilengkapi dengan Sea Salt membersihkan rambut dan di waktu yang sama melindungi dari kuman penyebab gatal serta melembutkan rambut yang kering dan kasar. -ZInc Refreshing Cool', '100'),
(14, 'Infinix Hot 30 Play Ram 8/256', 'hp.jpg', '3.150.000', 'elektronik', 'Kelengkapan : - Unit - Charger - Antigores (Terpasang bawaan pabrikan) - Tempered Glass - Softcase - Wireless charge pad   NETWORK Technology GSM / HSPA / LTE LAUNCH Announced 2023, May 22 Status Available. Released 2023, May 22 BODY Dimensions 168.5 x 76.5 x 8.5 mm (6.63 x 3.01 x 0.33 in) Weight 205 g (7.23 oz) Build Glass front, plastic frame, glass back SIM Dual SIM (Nano-SIM, dual stand-by) IP53 DISPLAY Type AMOLED, 1B colors, 120Hz, 900 nits (peak) Size 6.78 inches, 113.7 cm2 (~88.2% screen-to-body ratio) Resolution 1080 x 2460 pixels (~388 ppi density) * the display diagonal size and resolution are not confirmed PLATFORM OS Android 13, XOS 13 Chipset Mediatek MT8781 Helio G99 (6nm) CPU Octa-core (2x2.2 GHz Cortex-A76 & 6x2.0 GHz Cortex-A55) GPU Mali-G57 MC2 MEMORY Card slot microSDXC (dedicated slot) Internal 128GB 8GB RAM, 256GB 8GB RAM UFS MAIN CAMERA Triple 108 MP, (wide), PDAF 2 MP, f/2.4, (depth) QVGA Features Quad-LED flash, HDR, panorama Video 1440p@30fps, 1080p@30fps SELFIE CAMERA Single 16 MP, f/2.0, (wide) Features LED flash, HDR Video 1080p@30fps SOUND Loudspeaker Yes, with dual speakers 3.5mm jack Yes Tuned by JBL 24-bit/192kHz audio COMMS WLAN Wi-Fi 802.11 a/b/g/n/ac, dual-band, Wi-Fi Direct Bluetooth Yes Positioning GPS NFC Yes (market/region dependent) Radio FM radio USB USB Type-C 2.0, OTG FEATURES Sensors Fingerprint (side-mounted), accelerometer, gyro, proximity, compass BATTERY Type Li-Po 5000 mAh, non-removable Charging 68W wired,', '3'),
(16, 'Kokain', 'kokain.jpg', 'Rp2.100.000.000.-/Kg', 'narkotika', 'Kokaina atau juga disebut sebagai kokain adalah senyawa sintesis yang memicu metabolisme sel menjadi sangat cepat. Semakin cepat obat diserap ke dalam aliran darah, maka semakin intens efeknya, dan semakin pendek pula efek tersebut bertahan lama. Nah, karena inilah, banyak orang yang ingin terus menggunakan zat ini agar bisa merasakan efeknya terus-terusan. Enjoy your life ~.', '5');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pelanggan`
--

CREATE TABLE `tb_pelanggan` (
  `id_plnggn` int(11) NOT NULL,
  `nama_plnggan` varchar(100) NOT NULL,
  `no_tlp` varchar(13) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_pelanggan`
--

INSERT INTO `tb_pelanggan` (`id_plnggn`, `nama_plnggan`, `no_tlp`, `alamat`, `email`) VALUES
(1, 'bunga hanafi', '21313123', 'sadasdw', 'bunga hanafi@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tb_supplier`
--

CREATE TABLE `tb_supplier` (
  `id_supp` int(11) NOT NULL,
  `nama_supp` varchar(100) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `no_tlp` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_supplier`
--

INSERT INTO `tb_supplier` (`id_supp`, `nama_supp`, `alamat`, `no_tlp`) VALUES
(1, 'bunga hanafi', 'asdsadasdas', '2132131231');

-- --------------------------------------------------------

--
-- Table structure for table `tb_transaksi`
--

CREATE TABLE `tb_transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `nota` int(11) NOT NULL,
  `id_plnggn` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `jumlah` varchar(1000) NOT NULL,
  `sub_total` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `no_telp` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `tb_pelanggan`
--
ALTER TABLE `tb_pelanggan`
  ADD PRIMARY KEY (`id_plnggn`);

--
-- Indexes for table `tb_supplier`
--
ALTER TABLE `tb_supplier`
  ADD PRIMARY KEY (`id_supp`);

--
-- Indexes for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id_barang` (`id_barang`),
  ADD KEY `id_plnggn` (`id_plnggn`),
  ADD KEY `nota` (`nota`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_barang`
--
ALTER TABLE `tb_barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tb_pelanggan`
--
ALTER TABLE `tb_pelanggan`
  MODIFY `id_plnggn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_supplier`
--
ALTER TABLE `tb_supplier`
  MODIFY `id_supp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
