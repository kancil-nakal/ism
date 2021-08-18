-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Agu 2021 pada 06.49
-- Versi server: 10.4.19-MariaDB
-- Versi PHP: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ism_db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `access_menus`
--

CREATE TABLE `access_menus` (
  `access_menu_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `access_menus`
--

INSERT INTO `access_menus` (`access_menu_id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 3),
(4, 1, 4),
(5, 1, 5),
(6, 1, 6),
(7, 1, 7),
(8, 2, 1),
(9, 2, 2),
(10, 2, 3),
(11, 2, 4),
(12, 2, 5),
(13, 3, 1),
(14, 3, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin_users`
--

CREATE TABLE `admin_users` (
  `admin_user_id` int(11) NOT NULL,
  `name` varchar(128) DEFAULT NULL,
  `email` varchar(128) DEFAULT NULL,
  `password` varchar(256) DEFAULT NULL,
  `role_id` int(11) DEFAULT NULL,
  `is_active` int(1) DEFAULT NULL,
  `date_created` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin_users`
--

INSERT INTO `admin_users` (`admin_user_id`, `name`, `email`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(1, 'Irsyad Al Fahriza', 'izzarongsok@gmail.com', '$2y$10$.rNfK068O/3cLbyegS4nu.dXrtgsgPImGehjFu5JqLbysTsv9aORC', 1, 1, 1627805703),
(2, 'Sasa', 'sasa@gmail.com', '$2y$10$8rzHpeuAXVWgGh8r.YUFBOmJKz2B4aUZrkx.yAyCXtzjFHvPRirsC', 2, 1, 1627899930);

-- --------------------------------------------------------

--
-- Struktur dari tabel `assets`
--

CREATE TABLE `assets` (
  `asset_id` int(11) NOT NULL,
  `asset` varchar(256) DEFAULT NULL,
  `kode` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `assets`
--

INSERT INTO `assets` (`asset_id`, `asset`, `kode`) VALUES
(1, 'PC', 'PC'),
(2, 'Laptop', 'LT'),
(3, 'Smartphone/Tablet', 'SM'),
(4, 'Printer', 'PT'),
(5, 'Projector', 'PJ'),
(6, 'Monitor', 'MT'),
(7, 'Mouse', 'MS'),
(8, 'Router/Modem', 'AP'),
(9, 'Fingerprint', 'FP'),
(10, 'Accesorist', 'AS'),
(11, 'Other', 'OT'),
(12, 'Tools', 'TL'),
(13, 'Hardisk', 'HD');

-- --------------------------------------------------------

--
-- Struktur dari tabel `brands`
--

CREATE TABLE `brands` (
  `brand_id` int(11) NOT NULL,
  `brand` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `brands`
--

INSERT INTO `brands` (`brand_id`, `brand`) VALUES
(1, 'thinkpad'),
(2, 'macbook'),
(3, 'dell'),
(4, 'lg'),
(5, 'hp'),
(6, 'asus'),
(7, 'iphone'),
(8, 'samsung'),
(9, 'xiaomi'),
(10, 'canon'),
(11, 'epson'),
(12, 'logitect'),
(13, 'tp-link'),
(14, 'tenda'),
(15, 'infocus'),
(16, 'hikvision'),
(17, 'WD'),
(18, 'Sharp'),
(19, 'Alivess');

-- --------------------------------------------------------

--
-- Struktur dari tabel `log_product`
--

CREATE TABLE `log_product` (
  `log_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `date` date DEFAULT NULL,
  `age` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `menus`
--

CREATE TABLE `menus` (
  `menu_id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `menus`
--

INSERT INTO `menus` (`menu_id`, `menu`) VALUES
(1, 'Admin'),
(2, 'Inventory'),
(3, 'Submission'),
(4, 'Receipt'),
(5, 'Email'),
(6, 'Root'),
(7, 'User Management'),
(8, 'Test');

-- --------------------------------------------------------

--
-- Struktur dari tabel `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `asset_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `type` varchar(128) NOT NULL,
  `description` varchar(256) NOT NULL,
  `sn` varchar(128) DEFAULT NULL,
  `cond` varchar(128) NOT NULL,
  `purchase_date` date NOT NULL,
  `product_origin` varchar(128) NOT NULL,
  `is_active` int(11) DEFAULT NULL,
  `product_age` int(11) DEFAULT NULL,
  `qrcode` varchar(128) NOT NULL,
  `note` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `products`
--

INSERT INTO `products` (`product_id`, `asset_id`, `brand_id`, `type`, `description`, `sn`, `cond`, `purchase_date`, `product_origin`, `is_active`, `product_age`, `qrcode`, `note`) VALUES
(1, 2, 1, 'T450p', 'Core i5-4400M 2,6Ghz \r\nRAM 8Gb \r\nSSD 240GB \r\n15,6 Inch HD', 'R9-0299D8', 'standby', '2018-02-01', 'Tokopedia', NULL, NULL, 'LT-0218001', 'Layar bergaris'),
(2, 2, 1, 'T450', 'Core i7-5600U 1,6Ghz\r\nRAM 16GB\r\nSSD 500GB\r\n14 Inch HD+', 'PC-04C0N0', 'second', '2021-03-01', 'Tokopedia', 1, NULL, 'LT-0321001', ''),
(3, 13, 17, 'WD Book', '6TB', 'WX61DC91DN43', 'new', '2021-08-09', 'Tokopedia', 1, NULL, 'HD0821001', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `roles`
--

CREATE TABLE `roles` (
  `role_id` int(11) NOT NULL,
  `role` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `roles`
--

INSERT INTO `roles` (`role_id`, `role`) VALUES
(1, 'Administrator'),
(2, 'Full'),
(3, 'Normal');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sub_menus`
--

CREATE TABLE `sub_menus` (
  `sub_menu_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) DEFAULT NULL,
  `url` varchar(128) DEFAULT NULL,
  `icon` varchar(128) DEFAULT NULL,
  `is_active` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `sub_menus`
--

INSERT INTO `sub_menus` (`sub_menu_id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard', 'admin', 'fas fa-tachometer-alt', 1),
(2, 2, 'Product', 'product', 'fas fa-qrcode', 1),
(3, 2, 'Brand', 'brand', 'fas fa-registered', 1),
(4, 7, 'User', 'manage_user', 'fas fa-users', 1),
(5, 7, 'Menu', 'manage_menu', 'fas fa-folder', 1),
(6, 7, 'Submenu', 'manage_submenu', 'fas fa-folder-open', 1),
(7, 2, 'Asset', 'asset_inv', 'fas fa-barcode', 1),
(8, 1, 'Log Product', 'product/log', 'fas fa-desktop', 1),
(9, 5, 'List Email', 'listemail', 'fas fa-user-tie', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `nik` varchar(128) DEFAULT NULL,
  `name` varchar(128) DEFAULT NULL,
  `email1` varchar(128) DEFAULT NULL,
  `email2` varchar(128) DEFAULT NULL,
  `email3` varchar(128) DEFAULT NULL,
  `email4` varchar(128) DEFAULT NULL,
  `email5` varchar(128) DEFAULT NULL,
  `address` varchar(256) DEFAULT NULL,
  `dept` varchar(128) DEFAULT NULL,
  `position` varchar(128) DEFAULT NULL,
  `site` varchar(128) DEFAULT NULL,
  `region` varchar(128) DEFAULT NULL,
  `is_active` int(11) DEFAULT NULL,
  `telp` varchar(128) DEFAULT NULL,
  `pass1` varchar(128) DEFAULT NULL,
  `pass2` varchar(128) DEFAULT NULL,
  `pass3` varchar(128) DEFAULT NULL,
  `pass4` varchar(128) DEFAULT NULL,
  `pass5` varchar(128) DEFAULT NULL,
  `id_card` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`user_id`, `nik`, `name`, `email1`, `email2`, `email3`, `email4`, `email5`, `address`, `dept`, `position`, `site`, `region`, `is_active`, `telp`, `pass1`, `pass2`, `pass3`, `pass4`, `pass5`, `id_card`) VALUES
(1, '123124124121', 'Irsyad xorex', 'irsyad.alfahriza@tpm-facility.com', 'irsyad.alfahriza@tpm-security.com', 'irsyad.alfahriza@tpm-enterprise.com', 'irsyad.alfahriza@mindotek.com', 'irsyad.alfahriza@tpm-implementation.com', 'Komplek Dutamas Fatmawati Blok B2/26, Cipete Utara', 'IT', 'IT Support', 'JABODETABEK', 'DKI JAKARTA', NULL, '1241251251', NULL, NULL, NULL, NULL, NULL, '123456'),
(2, '9709869', 'Sasa', '', '', '', '', '', '', '', '', '', '', 1, '7820-1', NULL, NULL, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `access_menus`
--
ALTER TABLE `access_menus`
  ADD PRIMARY KEY (`access_menu_id`);

--
-- Indeks untuk tabel `admin_users`
--
ALTER TABLE `admin_users`
  ADD PRIMARY KEY (`admin_user_id`);

--
-- Indeks untuk tabel `assets`
--
ALTER TABLE `assets`
  ADD PRIMARY KEY (`asset_id`);

--
-- Indeks untuk tabel `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indeks untuk tabel `log_product`
--
ALTER TABLE `log_product`
  ADD PRIMARY KEY (`log_id`);

--
-- Indeks untuk tabel `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`menu_id`);

--
-- Indeks untuk tabel `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indeks untuk tabel `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`role_id`);

--
-- Indeks untuk tabel `sub_menus`
--
ALTER TABLE `sub_menus`
  ADD PRIMARY KEY (`sub_menu_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `access_menus`
--
ALTER TABLE `access_menus`
  MODIFY `access_menu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `admin_users`
--
ALTER TABLE `admin_users`
  MODIFY `admin_user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `assets`
--
ALTER TABLE `assets`
  MODIFY `asset_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `brands`
--
ALTER TABLE `brands`
  MODIFY `brand_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `log_product`
--
ALTER TABLE `log_product`
  MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `menus`
--
ALTER TABLE `menus`
  MODIFY `menu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `roles`
--
ALTER TABLE `roles`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `sub_menus`
--
ALTER TABLE `sub_menus`
  MODIFY `sub_menu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
