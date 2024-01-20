-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Waktu pembuatan: 10 Bulan Mei 2023 pada 05.51
-- Versi server: 5.7.39
-- Versi PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `entertaiment`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `type` enum('musik','video') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `categories`
--

INSERT INTO `categories` (`id`, `name`, `type`) VALUES
(1, 'Trending', 'video'),
(2, 'Popular', 'musik'),
(3, 'Game', 'video'),
(4, 'Olahraga', 'video'),
(5, 'Akustik Indonesia', 'musik'),
(6, 'Lagu Barat', 'musik');

-- --------------------------------------------------------

--
-- Struktur dari tabel `musics`
--

CREATE TABLE `musics` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `body` text NOT NULL,
  `category_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `musics`
--

INSERT INTO `musics` (`id`, `title`, `body`, `category_id`, `user_id`) VALUES
(1, 'Ulang Tahun dan Kisah Lainnya di Kuala Lumpur', '05102023_052116.mp3', 5, 1),
(2, 'Mabuk Cinta', '05102023_052106.mp3', 2, 1),
(3, 'Kau Rumahku', '05102023_052058.mp3', 5, 1),
(4, 'You Go It', '05102023_052049.mp3', 6, 1),
(5, 'Wish You All The Best', '05102023_052025.mp3', 2, 1),
(6, 'Cheetah', '05102023_052037.mp3', 2, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` enum('Admin','Pengguna') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `username`, `password`, `level`) VALUES
(1, 'Jhon', 'Doe', 'jhondoe', 'password', 'Admin'),
(2, 'Alex', 'Doe', 'alexdoe', 'password', 'Pengguna');

-- --------------------------------------------------------

--
-- Struktur dari tabel `videos`
--

CREATE TABLE `videos` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `thumbnail` varchar(255) NOT NULL,
  `url` text NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `category_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `videos`
--

INSERT INTO `videos` (`id`, `name`, `thumbnail`, `url`, `created_at`, `category_id`, `user_id`) VALUES
(1, 'Cara Bikin Pascol Ngamuk Part 1', '05102023_051418.png', 'https://www.youtube.com/watch?v=QFDOCNA7VY0', '2023-05-10 04:41:59', 3, 1),
(2, 'Tiba Tiba Pro Player Mabar EXE', '05102023_051408.png', 'https://www.youtube.com/watch?v=uyY0JVwOCgU', '2023-05-10 04:42:37', 3, 1),
(3, 'Real Madrid 1 x 1 Manchester City - Melhores Momentos', '05102023_051354.png', 'https://www.youtube.com/watch?v=Ibg0U6pcNVQ', '2023-05-10 04:45:25', 4, 1),
(4, 'KING OF ASEAN!! Indonesia Sabet MEDALI EMAS!! | INDONESIA (3) VS KAMBOJA (0) | SEA GAMES 32 CAMBODIA', '05102023_051324.png', 'https://www.youtube.com/watch?v=7Umx_8Q6Fe4', '2023-05-10 04:46:32', 1, 1),
(5, 'aespa Spicy MV', '05102023_051342.png', 'https://www.youtube.com/watch?v=Os_heh8vPfs', '2023-05-10 04:47:38', 1, 1),
(6, 'Penuh Ketegangan! Detik-Detik Terpilihnya GRAND FINALISTS Indonesian Idol 2023', '05102023_051630.png', 'https://www.youtube.com/watch?v=Mp71KpZaoNQ', '2023-05-10 05:16:30', 1, 1),
(7, 'INI REAKSI ANANG ASHANTY LIAT ATTA PUNYA ANAK LAGI!!', '05102023_051713.png', 'https://www.youtube.com/watch?v=_vmipszSAJ8', '2023-05-10 05:17:13', 1, 1),
(8, 'EXCLUSIVE!! CERITA AUREL HAMIL!! DETIK DETIK BABY A KEDUA!!', '05102023_051737.png', 'https://www.youtube.com/watch?v=hawz4giV9KA', '2023-05-10 05:17:37', 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `musics`
--
ALTER TABLE `musics`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_CategoryId` (`category_id`),
  ADD KEY `FK_UserId` (`user_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indeks untuk tabel `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_VideosCategoryId` (`category_id`),
  ADD KEY `FK_VideosUserId` (`user_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `musics`
--
ALTER TABLE `musics`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `musics`
--
ALTER TABLE `musics`
  ADD CONSTRAINT `FK_CategoryId` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_UserId` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `videos`
--
ALTER TABLE `videos`
  ADD CONSTRAINT `FK_VideosCategoryId` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_VideosUserId` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
