-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Nov 2020 pada 18.45
-- Versi server: 10.4.13-MariaDB
-- Versi PHP: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `casvall`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `dessert`
--

CREATE TABLE `dessert` (
  `id` int(15) NOT NULL,
  `makanan` varchar(200) NOT NULL,
  `deskripsi` varchar(300) NOT NULL,
  `harga` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `dessert`
--

INSERT INTO `dessert` (`id`, `makanan`, `deskripsi`, `harga`) VALUES
(1, 'Tiramissu', 'kue keju khas Italia dengan taburan bubuk kakao di atasnya', 33000),
(2, 'Strawberry Cheese Cake', 'Adonan keju krim yang lembut gurih, dipadu dengan manis segar buah strawberry', 25500),
(3, 'Eskrim Goreng', 'berupa es krim yang digoreng', 20000),
(4, 'Pie Lemon', 'kulit kue dengan isi rasa lemon\r\n', 17500),
(5, 'Choc a block', 'Pudding coklat dengan krim, karamel, kacang dan marsmellow', 30000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `makan_malam`
--

CREATE TABLE `makan_malam` (
  `id` int(15) NOT NULL,
  `makanan` varchar(200) NOT NULL,
  `deskripsi` varchar(300) NOT NULL,
  `harga` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `makan_malam`
--

INSERT INTO `makan_malam` (`id`, `makanan`, `deskripsi`, `harga`) VALUES
(1, 'Steak', 'sepotong besar daging, biasanya daging sapi, dada ayam dan ikan sering kali dipotong menjadi steik lalu di goreng atau dipanggang', 45000),
(2, 'Spagetti', 'pasta yang berbentuk panjang, tipis, silindris, dan padat lalu diberi saus dan bumbu', 35500),
(3, 'Makaroni', 'pasta yang bentuknya seperti pipa kecil yang bengkok membentuk busur. Makaroni biasanya diolah dengan saus krim dan kacang polong', 35500),
(4, 'Risotto', 'hidangan nasi campur khas Italia Utara, yaitu beras yang dimasak dengan kaldu sehingga lengket menyerupai krim', 30000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `minuman`
--

CREATE TABLE `minuman` (
  `id` int(15) NOT NULL,
  `makanan` varchar(200) NOT NULL,
  `deskripsi` varchar(300) NOT NULL,
  `harga` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `minuman`
--

INSERT INTO `minuman` (`id`, `makanan`, `deskripsi`, `harga`) VALUES
(1, 'Es teh', 'Teh yang didinginkan dengan es batu\r\n', 3000),
(2, 'Es Jeruk', 'Air jeruk yang didinginkan dengan es batu\r\n', 5000),
(3, 'Es Teler', 'buah-buahan yang disajikan dengan santan, dan susu kental manis', 8000),
(4, 'Es Coklat', 'air coklat yang dicampur dengan es', 5000),
(5, 'Jus Buah', 'Buah yang diblender dicampur dengan air dan gula', 7000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `sarapan`
--

CREATE TABLE `sarapan` (
  `id` int(15) NOT NULL,
  `makanan` varchar(200) NOT NULL,
  `deskripsi` varchar(300) NOT NULL,
  `harga` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `sarapan`
--

INSERT INTO `sarapan` (`id`, `makanan`, `deskripsi`, `harga`) VALUES
(1, 'Omelet', 'hidangan telur goreng yang disiapkan dengan cara mengocok telur dan menggorengnya dengan minyak goreng atau mentega panas di sebuah wajan', 20500),
(2, 'Nasi Goreng', 'nasi yang digoreng dan diaduk dalam minyak goreng, margarin atau mentega, biasanya ditambah kecap manis, bawang merah, bawang putih, asam jawa, lada dan bumbu-bumbu lainnya', 25500),
(3, 'Fish n Chips', 'Makanan ini terdiri dari ikan ditepungi dengan tepung roti dan dimakan bersama kentang goreng yang dipotong panjang', 30500),
(4, 'Roti Bakar', 'kepingan roti yang dibakar atau dipanggang dengan proses radiasi termal sehingga roti menjadi lebih kecoklatan dan garing', 15000),
(5, 'Telur dan daging', 'Telur goreng yang dihidangkan bersama daging yang dipotong tipis tipis', 28500),
(6, 'Sereal', 'Makanan yang umumnya dimakan dingin, dan dimakan bersama susu, air atau yoghurt, atau dimakan langsung', 12000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `snack`
--

CREATE TABLE `snack` (
  `id` int(15) NOT NULL,
  `makanan` varchar(200) NOT NULL,
  `deskripsi` varchar(300) NOT NULL,
  `harga` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `snack`
--

INSERT INTO `snack` (`id`, `makanan`, `deskripsi`, `harga`) VALUES
(1, 'Kripik Kentang', 'potongan tipis kentang yang digoreng deep fried atau dipanggang sampai garing', 10500),
(2, 'Siomai', 'daging cincang yang dibungkus kulit yang tipis dari tepung terigu', 14000),
(3, 'Biskuit Coklat', 'biskuit yang dilapisi cokelat, atau yang dibuat dengan mengganti sebagian tepung dengan bubuk coklat', 5000),
(4, 'Pizza', 'adonan bundar dan pipih, yang dipanggang di oven dan biasanya dilumuri saus tomat serta keju dengan bahan makanan tambahan lainnya yang bisa dipilih', 40000),
(5, 'Cilok', 'Tapioka yang kenyal dengan tambahan bumbu pelengkap seperti sambal kacang, kecap, dan saus', 10000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(15) NOT NULL,
  `username` varchar(70) NOT NULL,
  `email` varchar(70) NOT NULL,
  `password` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`) VALUES
(1, 'admin', 'aceztea@gmail.com', '$2y$10$uCjgpfEkVrQDuLaa37xSmeWCeTBGvCzeIft.boWrG5EPttagHIqmK'),
(2, 'ACEZ', 'abelimmanuelakristianto@gmail.com', '$2y$10$gWpt3lsvegoCFbp/81U2ruZn3R/7UbRAiuCQRqJDosnjzggRLF27m');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `dessert`
--
ALTER TABLE `dessert`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `makan_malam`
--
ALTER TABLE `makan_malam`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `minuman`
--
ALTER TABLE `minuman`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `sarapan`
--
ALTER TABLE `sarapan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `snack`
--
ALTER TABLE `snack`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `dessert`
--
ALTER TABLE `dessert`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `makan_malam`
--
ALTER TABLE `makan_malam`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `minuman`
--
ALTER TABLE `minuman`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `sarapan`
--
ALTER TABLE `sarapan`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `snack`
--
ALTER TABLE `snack`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
