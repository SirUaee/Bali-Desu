-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Feb 2024 pada 16.16
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `film`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `anime`
--

CREATE TABLE `anime` (
  `id` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `code` varchar(10) NOT NULL,
  `skor` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `total_episode` varchar(100) NOT NULL,
  `durasi` varchar(100) NOT NULL,
  `tgl_rilis` varchar(100) NOT NULL,
  `studio` varchar(100) NOT NULL,
  `genre` varchar(100) NOT NULL,
  `jadwal` varchar(20) NOT NULL,
  `poster` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `anime`
--

INSERT INTO `anime` (`id`, `judul`, `code`, `skor`, `status`, `total_episode`, `durasi`, `tgl_rilis`, `studio`, `genre`, `jadwal`, `poster`) VALUES
(1, 'One Piece', 'op', '8.54', 'On Going', '1090', '24 Menit', 'Oct 20, 1999', 'Toei Animation', 'Action, Adventure, Comedy , Drama, Fantasy, Shounen, Super Power', 'Minggu', 'onepiece.jpeg'),
(2, 'Naruto Shipuden', 'ns', '8.24', 'Completed', '500', '24 menit', 'Feb 15, 2007', 'Pierrot', 'Action, Adventurem Fantasy', 'Senin', 'naruto.jpeg'),
(3, 'Bleach', 'bl', '7.88', 'Completed', '366', '24 menit', 'Oct 5, 2004', 'Pierrot', 'Action, Adventure, Fantasy', 'Senin', 'bleach.jpeg'),
(4, 'Solo Leveling', 'sl', '8.41', 'On Going', '2', '24 menit', 'Jan 7, 2024', 'A-1 Pictures', 'Action, Adventure, Fantasy', 'Minggu', 'sololeveling.jpeg'),
(5, 'One Punch Man', 'opm', '8.75', 'Completed', '12 ', '24 menit', 'Oct 5, 2015', 'Mad House', 'Action, Supranatural, Comedy, Parody, Sci-Fi, Seinen, Super Power, Supernatural', 'Ended', 'onepunchman.jpeg'),
(11, 'Horimiya', 'hm', '8.9', 'Completed', '12 ', '24 Menit', 'Jan 10, 2021', 'CloverWorks', 'Slice of Life, Romance, School', 'Senin', '65b7c1889d609.jpeg'),
(12, 'Haikyuu', 'hk', '8.9', 'Completed', '24 ', '24 Menit', 'Jan 10, 2021', 'CloverWorks', 'Sport, Comedy, School', 'Senin', '65b7c1be8cb76.jpeg'),
(13, 'shangri-La Frontier', 'srl', '7,77', 'On Going', '17 ', '25 Menit', 'okt 01,2023', 'C2C', 'shangri-La Frontier', 'Senin', '65c2ee903f317.jpeg'),
(15, 'Shingeki no Kyojin', 'snk', '8.7', 'Completed', '24 ', '24 Menit', '2024-02-08', 'CloverWorks', 'Action, Adventure, Fantasy, Shounen, Thriler', 'Ended', '65cadccfc0b4a.jpg'),
(16, 'Sousou no Frieren', 'snf', '8', 'On Going', '22', '24 ', 'sep 29 2023', 'Madhouse', 'Slice of Life, Magic', 'Senin', '65cb02a2c6430.jpg'),
(17, 'Isekai quartet', 'iq', '77,6', 'Completed', '24 ', '24 Menit', 'Jan 15,2020', 'puyuKai', 'Action, Parody, Comedy, Magic', 'Senin', '65cb04738b3cb.jpg'),
(18, 'Youkoso Jitsuryoku', 'yj', '7.92', 'On Going', '12 ', '24 Menit', 'Jul 12,2017', 'Lerche', 'School,  Drama, Psychological, Slice of Life', 'Rabu', '65cb06acd1d52.jpg'),
(19, 'Kusuriya no Hitorigoto', 'knh', '8.4', 'On Going', '22', '22 Menit', 'Okt 22,2023', 'OLM TOHO', 'Drama, Historycal, Medical', 'Senin', '65cb07dde21ec.jpg'),
(20, 'Mashel ', 'msh', '7.57', 'On Going', '12 ', '24 Menit', 'Apr 8, 2023', 'A1 Picture', 'Action, Fantasy, Parodi, Comedy, School, Shounen', 'Selasa', '65cb090f4fe1b.jpg'),
(21, 'Ragna Crimson', 'rc', '7.27', 'On Going', '24 ', '24 Menit', 'Okt 1,2023', 'silver ink', 'Action,  Fantasy, Shounen', 'Rabu', '65cb09c7a6f7b.jpg'),
(22, 'Boku no Kokoro no Yabai Yatsu ', 'bnk', '8.3', 'On Going', '13 Episode', '21 Menit', 'Jan 07,2024', ' shin ei animation', 'Comedy, Romance, School, Shounen', 'Jumat', '65cb8d77d0ce8.jpg'),
(23, 'Tsuki ga Michibiku', 'tgm', '77.6', 'On Going', '12 Episode', '23 Menit', 'Jul 07,2021', 'C2C', 'Super Power, Isekai, Magic, Action, Adventure, Comedy', 'Selasa', '65cb0bb265547.jpg'),
(24, 'Ao no Exorcist', 'ane', '8.5', 'On Going', '12 Episode', '23 Menit', 'Jan 07,2023', 'VOLN', 'Action, Demon, Adventure, Magic, Supernatural', 'Minggu', '65cb0c6746eaf.jpg'),
(25, 'Jujutsu Kaisen', 'jk', '8.7', 'On Going', '24 episode', '24 Menit', 'Okt 3,2021', 'MAPPA', 'School, Action, Adventure, Shounen', 'Kamis', '65cb0d0a0c9e8.jpg'),
(26, 'Dark Gathering', 'dg', '7.41', 'On Going', '25 Episode', '23 Menit', 'Ju; 10,2023', 'OLM', 'Horor, Adventure, Slice of Life', 'Sabtu', '65cb0dd7521be.jpg'),
(27, 'Tensei Shitara Slime', 'TSS', '8.3', 'Completed', '24 ', '23 Menit', 'Okt 2,2018', '8 bit', 'Isekai, Action, Adventure, Supernatural, Demon', 'Ended', '65cb0ea1ea589.jpg'),
(28, 'Dr Stone: new world', 'drnw', '8.3', 'Completed', '11 Episode', '23 Menit', 'Okt 11,2023', 'TMS', 'Adventure, Comedy, Sci-Fi, Shounen,', 'Ended', '65cb0fd2e04c8.jpg'),
(29, 'Overlord', 'ovl', '8.16', 'On Going', '13 Episode', '23 Menit', 'Jul 5,2023', 'Madhouse', 'Isekai, Action, Adventure, Supernatural, Demon', 'Kamis', '65cb10c28f8ba.jpg'),
(30, 'Mushoku Tensei ', 'mt', '8.46', 'On Going', '11 Episode', '24 Menit', 'Jan 11,2021', 'Studio Bind', 'Isekai, Action, Adventure, Supernatural, Magic', 'Sabtu', '65cb117ce2119.jpg'),
(31, 'Masamune-kun No revenge', 'mkn', '7.13', 'Completed', '12 ', '23 Menit', 'Jul 03,2023', 'silver ink', 'School, Romance, Drama, Slice of Life', 'Ended', '65cb122058571.jpg'),
(32, 'Jigokuraku', 'jgk', '8.7', 'On Going', '24', '24 menit', 'JAN 9, 2023', 'CloverWorks', 'Action, Adventure, Fantasy, Shounen, Thriler', 'Jumat', '65d059d14fe26.jpg'),
(35, 'Gotobun No Hanayome', 'gnh', '10', 'Completed', '12', '24 Menit', 'Feb, 21 2024', 'Madhouse', 'Romance, School', 'Ended', '65d546fcb5a1e.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `episode`
--

CREATE TABLE `episode` (
  `idEps` int(11) NOT NULL,
  `episode` varchar(100) DEFAULT NULL,
  `eps` int(50) NOT NULL,
  `id` int(11) DEFAULT NULL,
  `code` varchar(10) NOT NULL,
  `tglRilisEps` varchar(100) DEFAULT NULL,
  `vidio` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `episode`
--

INSERT INTO `episode` (`idEps`, `episode`, `eps`, `id`, `code`, `tglRilisEps`, `vidio`) VALUES
(1, 'One Piece eps 1', 1, 1, 'op', '1 OCT 1999', 'eps1.mp4'),
(2, 'One Piece eps 2', 4, 1, 'op', '8 OCT 1999', '65d611bfedc94.mp4'),
(3, 'Solo Leveling eps 1', 1, 4, 'sl', '7 Jan 2024', 'sololevelingeps1'),
(14, 'Horimiya eps 2', 2, 11, 'hm', 'Jan 10, 2020', '65b7d092c4cc7.mp4'),
(15, 'One Piece eps 3', 3, 1, 'op', 'Jan 10, 2021', '65d54356d476e.mp4'),
(16, 'Episode 1', 1, 35, 'gnh', 'Feb, 21 2024', '65d5473a54280.mp4'),
(17, 'One Piece eps 4', 4, 1, 'op', 'Jan 10, 2021', '65d61283ec506.mp4');

-- --------------------------------------------------------

--
-- Struktur dari tabel `genre`
--

CREATE TABLE `genre` (
  `genre` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `genre`
--

INSERT INTO `genre` (`genre`) VALUES
('Action'),
('Adventure'),
('Comedy'),
('Demon'),
('Drama'),
('Fantasy'),
('Game'),
('Horor'),
('Isekai'),
('Magic'),
('Music'),
('Mystery'),
('Romance'),
('School'),
('Sci-Fi'),
('Sheinen'),
('Shounen'),
('Slice of Life'),
('Sport'),
('SuperNatural');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'gilang', '$2y$10$yH8DuJTRBq1ISGVSPtvBzuPEffilnx4lrHTjyyWwc3illSq.iBoF6'),
(2, 'user1', '$2y$10$gGJRuhw1v6PvgBQcxBgpmeiBnkUT.XErY3ymOjz8S1ZHeV74F6dqa'),
(3, 'user2', '$2y$10$ln1QXzKTWd9L/8uHNXBtKueORFkAiFTnAsSTG60ZSyG5E7FVKKtvu'),
(6, 'admin', '$2y$10$XXSa71iHa.dkqcdtMKliQuDVdJ.mCQykw76WcfQy/cONQJHDu83LG'),
(7, 'osea', '$2y$10$uflN7HDWA/7Ezy1AaiQxDe5pSPohVIZGKS8k9Q.zs/cURNXO8hLvC'),
(8, 'user12', '$2y$10$xBWv3/z5PiUD3Fp4Mk8k8OWCt4uA5jq9JXQWtSStGbLQsr.hVaUSO'),
(9, 'user5', '$2y$10$WXC1PPkhT7hB6nzVPKNN1OceBoHY3xzsGlzqK9DuVr.84p8NyRv2m'),
(10, 'sukiawan', '$2y$10$Yk6j3yrLaPu4Y/JmsLv.4ugSZ3qAV/HOZkOGedLMwbga46lzAK/oi');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `anime`
--
ALTER TABLE `anime`
  ADD PRIMARY KEY (`id`),
  ADD KEY `genre` (`genre`);

--
-- Indeks untuk tabel `episode`
--
ALTER TABLE `episode`
  ADD PRIMARY KEY (`idEps`),
  ADD KEY `id` (`id`);

--
-- Indeks untuk tabel `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`genre`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `anime`
--
ALTER TABLE `anime`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT untuk tabel `episode`
--
ALTER TABLE `episode`
  MODIFY `idEps` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
