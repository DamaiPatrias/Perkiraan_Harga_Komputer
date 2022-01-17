-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Jan 2022 pada 16.08
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phk`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `casing`
--

CREATE TABLE `casing` (
  `id_casing` int(5) NOT NULL,
  `nama_casing` varchar(20) NOT NULL,
  `harga_casing` int(10) NOT NULL,
  `ukuran_casing` varchar(20) DEFAULT NULL,
  `gambar_casing` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `casing`
--

INSERT INTO `casing` (`id_casing`, `nama_casing`, `harga_casing`, `ukuran_casing`, `gambar_casing`) VALUES
(1, 'IBOS Gamemax 100', 575000, 'Middle tower', 'casing1.png'),
(2, 'Venomrx Loki', 390000, 'Middle ATX Tower', 'casing2.jpg'),
(3, 'Venomrx Arasaka Blac', 385000, 'Middle tower', 'casing3.jpg'),
(4, 'Venomrx Drogon', 530000, 'Middle tower', 'casing4.jpg'),
(5, 'Enlight Infinity', 415000, 'Micro ATX', 'casing5.jpg'),
(6, 'Paradox Gaming Geoma', 380000, 'ATX', 'casing6.jpg'),
(7, 'Paradox Gaming Capit', 445000, 'ATX', 'casing7.jpg'),
(8, 'Paradox Gaming Duran', 485000, 'Micro ATX', 'casing8.jpg'),
(9, 'MSI Mag Vampiric 100', 499000, 'ATX', 'casing9.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gpu`
--

CREATE TABLE `gpu` (
  `id_gpu` int(5) NOT NULL,
  `nama_gpu` varchar(50) NOT NULL,
  `harga_gpu` int(20) NOT NULL,
  `brand_gpu` varchar(10) NOT NULL,
  `gambar_gpu` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `gpu`
--

INSERT INTO `gpu` (`id_gpu`, `nama_gpu`, `harga_gpu`, `brand_gpu`, `gambar_gpu`) VALUES
(1, 'Nvidia Quadro P400 2GB', 1945000, 'Nvidia', 'gpu1.jpg'),
(2, 'Nvidia GT 730 2GB', 810000, 'Nvidia', 'gpu2.jpg'),
(3, 'Nvidia GTX 1050Ti 4GB', 4499000, 'Nvidia', 'gpu3.jpg'),
(4, 'Nvidia GTX 1650 4GB', 5499000, 'Nvidia', 'gpu4.jpg'),
(5, 'Nvidia GTX 1030 2GB', 1620000, 'Nvidia', 'gpu5.jpg'),
(6, 'Nvidia RTX 3060 12GB', 12749000, 'Nvidia', 'gpu6.jpg'),
(7, 'Nvdia RTX 3080 10GB', 244999000, 'Nvidia', 'gpu7.jpg'),
(8, 'Radeon RX 6600 8GB', 9499000, 'Radeon', 'gpu8.jpg'),
(9, 'Radeon RX 5500 XT 8GB', 5599000, 'Radeon', 'gpu9.png'),
(10, 'Radeon RX 580 8GB', 4199000, 'Radeon', 'gpu10.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `motherboard`
--

CREATE TABLE `motherboard` (
  `id_motherboard` int(5) NOT NULL,
  `nama_motherboard` varchar(20) NOT NULL,
  `harga_motherboard` int(20) NOT NULL,
  `brand_motherboard` varchar(20) NOT NULL,
  `soket_motherboard` varchar(10) NOT NULL,
  `ukuran_motherboard` varchar(10) NOT NULL,
  `gambar_motherboard` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `motherboard`
--

INSERT INTO `motherboard` (`id_motherboard`, `nama_motherboard`, `harga_motherboard`, `brand_motherboard`, `soket_motherboard`, `ukuran_motherboard`, `gambar_motherboard`) VALUES
(1, 'ASUS H81M-K', 780000, 'ASUS', 'LGA 1150', 'ATX', '1.jpg'),
(2, 'ASUS H61M-E', 649900, 'ASUS', 'LGA 1155', 'ATX', '2.jpg'),
(3, 'ASUS H81M-E', 380000, 'ASUS', 'LGA 1150', 'ATX', '3.jpg'),
(4, 'MSI H110M GAMING', 1029000, 'MSI', 'LGA 1151', 'ATX', '4.jpg'),
(5, 'ASUS A68HM-E', 750000, 'ASUS', 'FM2+', 'ATX', '5.jpg'),
(6, 'ASUS H110M-D', 550000, 'ASUS', 'LGA 1151', 'ATX', '6.jpg'),
(7, 'MSI B250M GAMING PRO', 1575000, 'MSI', 'LGA 1151', 'ATX', '7.jpg'),
(8, 'ASROCK AM3 - AM3 PLU', 425000, 'ASUS', 'AM3+', 'ATX', '8.jpg'),
(9, 'ASUS PRIME Z270-A', 2500000, 'ASUS', 'LGA 1151', 'ATX', '9.jpg'),
(10, 'ASROCK 970 PRO3', 625000, 'ASUS', 'AM3+', 'ATX', '10.jpg'),
(11, 'ASUS H81M-D', 750000, 'ASUS', 'LGA 1150', 'ATX', '11.jpg'),
(12, 'ASUS ROG STRIX GAMIN', 3450000, 'ASUS', 'AMD AM3', 'ATX', '12.jpg'),
(13, 'ASUS X99', 4820000, 'ASUS', 'LGA 2011-V', 'ATX', '13.jpg'),
(14, 'MSI SOCKET 1151 B150', 939000, 'MSI', 'DDR4', 'ATX', '14.jpg'),
(15, 'ASUS H170 PRO', 1998000, 'ASUS', 'LGA 1151', 'ATX', '15.jpg'),
(16, 'ASUS 970 PRO', 2202000, 'ASUS', 'AM3+', 'ATX', '16.jpg'),
(17, 'MSI A68HM GAMING', 800000, 'MSI', 'FM2+', 'ATX', '17.jpg'),
(18, 'ASROCK H81 PRO BTC', 1018000, 'ASROCK', 'LGA 1150', 'ATX', '18.jpg'),
(19, 'ASUS PRIME B250-PLUS', 1935000, 'ASUS', 'LGA 1151', 'ATX', '19.jpg'),
(20, 'ASROCK B85M PRO4', 650000, 'ASROCK', 'LGA 1150', 'ATX', '20.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `paket`
--

CREATE TABLE `paket` (
  `id_paket` int(5) NOT NULL,
  `nama_paket` varchar(100) NOT NULL,
  `id_casing` int(5) DEFAULT NULL,
  `qty_casing` int(11) NOT NULL,
  `id_gpu` int(5) DEFAULT NULL,
  `qty_gpu` int(11) NOT NULL,
  `id_motherboard` int(5) DEFAULT NULL,
  `qty_motherboard` int(11) NOT NULL,
  `id_penyimpanan` int(5) DEFAULT NULL,
  `qty_penyimpanan` int(11) NOT NULL,
  `id_prosesor` int(5) DEFAULT NULL,
  `qty_prosesor` int(11) NOT NULL,
  `id_psu` int(5) DEFAULT NULL,
  `qty_psu` int(11) NOT NULL,
  `id_ram` int(5) DEFAULT NULL,
  `qty_ram` int(11) NOT NULL,
  `id_user` int(5) DEFAULT NULL,
  `tanggal` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `paket`
--

INSERT INTO `paket` (`id_paket`, `nama_paket`, `id_casing`, `qty_casing`, `id_gpu`, `qty_gpu`, `id_motherboard`, `qty_motherboard`, `id_penyimpanan`, `qty_penyimpanan`, `id_prosesor`, `qty_prosesor`, `id_psu`, `qty_psu`, `id_ram`, `qty_ram`, `id_user`, `tanggal`) VALUES
(51, 'coba', 0, 1, 0, 1, 0, 1, 0, 1, 2, 1, 0, 1, 0, 1, 0, '2022-01-06 01:52:08'),
(54, 'Komputer Impianku', 1, 1, 8, 1, 13, 1, 14, 2, 6, 1, 10, 1, 5, 2, 3, '2022-01-06 02:31:21'),
(56, 'Komputer Idaman', 1, 1, 1, 1, 1, 1, 1, 2, 1, 1, 1, 1, 1, 2, 3, '2022-01-06 03:07:13');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penyimpanan`
--

CREATE TABLE `penyimpanan` (
  `id_penyimpanan` int(11) NOT NULL,
  `nama_penyimpanan` varchar(15) NOT NULL,
  `harga_penyimpanan` int(11) NOT NULL,
  `brand_penyimpanan` varchar(15) NOT NULL,
  `jenis_penyimpanan` varchar(15) NOT NULL,
  `kapasitas_penyimpanan` varchar(5) NOT NULL,
  `gambar_penyimpanan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `penyimpanan`
--

INSERT INTO `penyimpanan` (`id_penyimpanan`, `nama_penyimpanan`, `harga_penyimpanan`, `brand_penyimpanan`, `jenis_penyimpanan`, `kapasitas_penyimpanan`, `gambar_penyimpanan`) VALUES
(1, '0', 280000, 'Seagate', 'HDD', '1TB', '1.jpg'),
(2, '0', 425000, 'Seagate', 'HDD', '1TB', '2.jpg'),
(3, '0', 160000, 'Seagate', 'HDD', '500GB', '3.jpg'),
(4, '0', 559000, 'Seagate', 'HDD', '2TB', '4.jpg'),
(5, '0', 670000, 'Seagate', 'HDD', '250GB', '5.jpg'),
(6, '0', 375000, 'Western Digital', 'HDD', '1TB', '6.jpg'),
(7, '0', 460000, 'Western Digital', 'HDD', '2TB', '7.jpg'),
(8, '0', 160000, 'Western Digital', 'HDD', '500GB', '8.jpg'),
(9, '0', 605000, 'Western Digital', 'HDD', '1TB', '9.jpg'),
(10, '0', 435000, 'Western Digital', 'HDD', '1TB', '10.jpg'),
(11, '0', 612000, 'Hitachi GST', 'HDD', '1TB', '11.jpg'),
(12, '0', 814000, 'Hitachi GST', 'HDD', '1TB', '12.jpg'),
(13, '0', 622000, 'Hitachi GST', 'HDD', '500GB', '13.jpg'),
(14, '0', 4100000, 'Hitachi GST', 'HDD', '4TB', '14.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `prosesor`
--

CREATE TABLE `prosesor` (
  `id_prosesor` int(5) NOT NULL,
  `nama_prosesor` varchar(20) NOT NULL,
  `harga_prosesor` int(20) NOT NULL,
  `brand_prosesor` varchar(10) NOT NULL,
  `soket_prosesor` varchar(10) NOT NULL,
  `gambar_prosesor` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `prosesor`
--

INSERT INTO `prosesor` (`id_prosesor`, `nama_prosesor`, `harga_prosesor`, `brand_prosesor`, `soket_prosesor`, `gambar_prosesor`) VALUES
(1, 'Intel Core i7-9700K ', 4849000, 'Intel', '1151v2', 'i7-9700K.jpg'),
(2, 'Intel Core i5-9600 3', 3290000, 'Intel', '1151v2', 'i5-9600.jpg'),
(3, 'Intel Core i7-7700 3', 3280000, 'Intel', '1151', 'i7-7700.jpg'),
(4, 'Intel Core i5-7500 3', 1815000, 'Intel', '1151', 'i5-7500.jpg'),
(5, 'Intel Core i3-7100 3', 1360000, 'Intel', '1151', 'i3-7100.jpg'),
(6, 'AMD Ryzen Threadripp', 63299000, 'AMD', 'sTRX4', 'Threadripper 3990X.jpg'),
(7, 'AMD Ryzen Threadripp', 30799000, 'AMD', 'sTRX4', 'Threadripper 3970X.jpg'),
(8, 'AMD Ryzen 9 5950X 3.', 12299000, 'AMD', 'AM4', 'Ryzen 9 5950X.jpg'),
(9, 'AMD Ryzen 7 5800X 3.', 6299000, 'AMD', 'AM4', 'Ryzen 7 5800X.jpg'),
(10, 'AMD Ryzen 5 5600X 3.', 4525000, 'AMD', 'AM4', 'Ryzen 5 5600X.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `psu`
--

CREATE TABLE `psu` (
  `id_psu` int(5) NOT NULL,
  `nama_psu` varchar(20) NOT NULL,
  `harga_psu` int(20) NOT NULL,
  `ukuran_psu` varchar(10) NOT NULL,
  `gambar_psu` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `psu`
--

INSERT INTO `psu` (`id_psu`, `nama_psu`, `harga_psu`, `ukuran_psu`, `gambar_psu`) VALUES
(1, 'Armaggeddon Voltron ', 239000, 'ATX', 'psu_1.jpg'),
(2, 'Armaggeddon Voltron ', 290000, 'ATX', 'psu_2.jpg'),
(3, 'Aerocool United Powe', 387000, 'ATX', 'psu_3.jpg'),
(4, 'Dazumba PS-450W', 345000, 'ATX', 'psu_4.jpg'),
(5, 'Corsair VS550-550Wat', 835000, 'ATX', 'psu_5.jpg'),
(6, 'Corsair CX500 V2 (CM', 1165000, 'ATX', 'psu_6.jpg'),
(7, 'Thermaltake Litepowe', 575000, 'ATX', 'psu_7.jpg'),
(8, 'Dazumba PS-500W', 540000, 'ATX', 'psu_8.jpg'),
(9, 'Cooler Master MWE 45', 695000, 'ATX', 'psu_9.jpg'),
(10, 'Seasonic Focus GX-65', 1700000, 'ATX', 'psu_10.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ram`
--

CREATE TABLE `ram` (
  `id_ram` int(5) NOT NULL,
  `nama_ram` varchar(20) NOT NULL,
  `harga_ram` int(20) NOT NULL,
  `gambar_ram` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `ram`
--

INSERT INTO `ram` (`id_ram`, `nama_ram`, `harga_ram`, `gambar_ram`) VALUES
(1, 'KLEVV DDR4 Value Ser', 280000, 'ram1.png'),
(2, 'KLEVV DDR4 Value Ser', 460000, 'ram2.png'),
(3, 'KLEVV DDR4 Value Ser', 850000, 'ram3.png'),
(4, 'KLEVV DDR4 Value Ser', 1850000, 'ram4.png'),
(5, 'GEIL DDR5 POLARIS RG', 5500000, 'ram5.png'),
(6, 'GEIL DDR4 SUPER LUCE', 1250000, ''),
(7, 'GEIL DDR4 SUPER LUCE', 2400000, ''),
(8, 'GEIL DDR4 EVO X II R', 1450000, ''),
(9, 'GEIL DDR4 EVO X II R', 2500000, ''),
(10, 'GEIL DDR4 EVO X II R', 1430000, ''),
(11, 'GEIL DDR4 EVO X II R', 2530000, ''),
(12, 'ADATA DDR5 Value Ser', 1029000, 'ram12.png'),
(13, 'ADATA DDR5 Value Ser', 1945000, 'ram13.png'),
(14, 'ADATA DDR4 XPG GAMMI', 1191000, 'ram14-15.png'),
(15, 'ADATA DDR4 XPG GAMMI', 2356000, 'ram14-15.png'),
(16, 'ADATA DDR4 XPG SPECT', 625000, 'ram16-18.png'),
(17, 'ADATA DDR4 XPG SPECT', 1226000, 'ram16-18.png'),
(18, 'ADATA DDR4 XPG SPECT', 2580000, 'ram16-18.png'),
(19, 'Corsair DDR4 Vengean', 379000, 'ram19-23.png'),
(20, 'Corsair DDR4 Vengean', 579000, 'ram19-23.png'),
(21, 'Corsair DDR4 Vengean', 589000, 'ram19-23.png'),
(22, 'Corsair DDR4 Vengean', 1109000, 'ram19-23.png'),
(23, 'Corsair DDR4 Vengean', 2329000, 'ram19-23.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(5) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `type` int(2) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `first_name`, `last_name`, `type`) VALUES
(2, 'admin@gmail.com', 'admin', 'Admin', 'Admin', 2),
(3, 'user@gmail.com', 'user', 'User', 'User', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `casing`
--
ALTER TABLE `casing`
  ADD PRIMARY KEY (`id_casing`);

--
-- Indeks untuk tabel `gpu`
--
ALTER TABLE `gpu`
  ADD PRIMARY KEY (`id_gpu`);

--
-- Indeks untuk tabel `motherboard`
--
ALTER TABLE `motherboard`
  ADD PRIMARY KEY (`id_motherboard`);

--
-- Indeks untuk tabel `paket`
--
ALTER TABLE `paket`
  ADD PRIMARY KEY (`id_paket`);

--
-- Indeks untuk tabel `penyimpanan`
--
ALTER TABLE `penyimpanan`
  ADD PRIMARY KEY (`id_penyimpanan`);

--
-- Indeks untuk tabel `prosesor`
--
ALTER TABLE `prosesor`
  ADD PRIMARY KEY (`id_prosesor`);

--
-- Indeks untuk tabel `psu`
--
ALTER TABLE `psu`
  ADD PRIMARY KEY (`id_psu`);

--
-- Indeks untuk tabel `ram`
--
ALTER TABLE `ram`
  ADD PRIMARY KEY (`id_ram`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `casing`
--
ALTER TABLE `casing`
  MODIFY `id_casing` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT untuk tabel `gpu`
--
ALTER TABLE `gpu`
  MODIFY `id_gpu` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `motherboard`
--
ALTER TABLE `motherboard`
  MODIFY `id_motherboard` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `paket`
--
ALTER TABLE `paket`
  MODIFY `id_paket` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT untuk tabel `penyimpanan`
--
ALTER TABLE `penyimpanan`
  MODIFY `id_penyimpanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `prosesor`
--
ALTER TABLE `prosesor`
  MODIFY `id_prosesor` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `psu`
--
ALTER TABLE `psu`
  MODIFY `id_psu` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `ram`
--
ALTER TABLE `ram`
  MODIFY `id_ram` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
