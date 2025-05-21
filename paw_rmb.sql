-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Jul 2022 pada 09.16
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `paw_rmb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(35, '2014_10_12_000000_create_users_table', 1),
(36, '2014_10_12_100000_create_password_resets_table', 1),
(37, '2019_08_19_000000_create_failed_jobs_table', 1),
(38, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(39, '2022_06_07_073046_create_mobil_table', 1),
(40, '2022_06_12_070807_create_rental_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `mobil`
--

CREATE TABLE `mobil` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `merk_mobil` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `plat_mobil` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `warna_mobil` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga_mobil` int(11) NOT NULL,
  `tahun` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `max_penumpang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `transmisi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `mobil`
--

INSERT INTO `mobil` (`id`, `merk_mobil`, `plat_mobil`, `warna_mobil`, `harga_mobil`, `tahun`, `max_penumpang`, `transmisi`, `status`, `photo`, `created_at`, `updated_at`) VALUES
(1, 'alphard', 'b90flm', 'hitam', 2000000, '2020', '6', 'matic', 'ada', '/storage/images/1656229581alphard.jpg', '2022-06-26 00:46:21', '2022-06-26 00:46:21'),
(2, 'avanza', 'dk1209bn', 'putih', 750000, '2022', '4', 'manual', 'kosong', '/storage/images/1656229708avanza.jpg', '2022-06-26 00:48:28', '2022-06-26 20:13:26'),
(3, 'calya', 'tr6786w', 'merah', 1000000, '2021', '4', 'matic', 'ada', '/storage/images/1656232431calya.jpg', '2022-06-26 01:33:51', '2022-06-26 01:33:51'),
(7, 'xpander', 'hy2809iu', 'putih', 800000, '2022', '6', 'manual', 'ada', '/storage/images/1656232980xpander.jpg', '2022-06-26 01:43:00', '2022-06-26 01:43:00'),
(8, 'xenia', 'tt638ty', 'abu abu', 700000, '2020', '6', 'manual', 'ada', '/storage/images/1656233149xenia.jpg', '2022-06-26 01:45:49', '2022-06-26 01:45:49');

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `rental`
--

CREATE TABLE `rental` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nik_penyewa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_penyewa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_penyewa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hp_penyewa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_penyewa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `merk_mobil` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `plat_mobil` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `warna_mobil` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga_mobil` int(11) NOT NULL,
  `tahun` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `max_penumpang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `transmisi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `lama_sewa` int(11) NOT NULL,
  `total_bayar` int(11) NOT NULL,
  `tgl_dikembalikan` date NOT NULL,
  `status_rent` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `rental`
--

INSERT INTO `rental` (`id`, `nik_penyewa`, `nama_penyewa`, `email_penyewa`, `hp_penyewa`, `alamat_penyewa`, `merk_mobil`, `plat_mobil`, `warna_mobil`, `harga_mobil`, `tahun`, `max_penumpang`, `transmisi`, `tgl_pinjam`, `lama_sewa`, `total_bayar`, `tgl_dikembalikan`, `status_rent`, `created_at`, `updated_at`) VALUES
(1, '3574020206980003', 'ivan dwi setiawan', 'ivan@gmail.com', '087956270948', 'dsn pakis jaya rt 08, rw 02 kedung asem wonoasih', 'xpander', 'hy2809iu', 'putih', 800000, '2022', '6', 'manual', '2022-06-27', 4, 3200000, '2022-07-01', 'baru', '2022-06-26 01:52:33', '2022-06-26 01:52:33'),
(3, '7602011603550003', 'erbito', 'eribito@gmail.com', '098736827662', 'rimuku mamiju', 'avanza', 'dk1209bn', 'putih', 750000, '2022', '4', 'manual', '2022-06-27', 2, 1500000, '2022-06-29', 'baru', '2022-06-26 20:07:03', '2022-06-26 20:07:03');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `level`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'admin', 'admin', 'admin@gmail.com', NULL, '$2y$10$bRf30Fq3Ff8HlR.9ojcyUu4irc4h0QMamNAaZctAT1nEU7KZJJoKe', 'c4hEJiAUykNet3c0bvjQ75vdbMSbIZ7K1QXgdkTWcao8NAUX0rOH84xGQOR6', '2022-06-24 08:39:28', '2022-06-24 08:39:28'),
(4, 'user', 'user', 'user@gmail.com', NULL, '$2y$10$FMTQdL8T7s5QMJHMdft80.Exe7t52pjmipvxklghAVNxqiaxcRNjO', 'OS0IXzdXehH6l00kpGq6VJIS9zGFz8fbZSvbxu10SFMJfD97KKIoyGqZHiHy', '2022-06-25 10:01:25', '2022-06-25 10:01:25'),
(5, 'owner', 'owner', 'owner@gmail.com', NULL, '$2y$10$CgmNpNyEk0PZJpZQwlOVH.0p9rvbd0youdk7KBroz7bpgpHeKxx/6', 'X8U98PwjuOJaBNCX7kgd2VM2613vk9d8iE8pv00SFZqpLB9uoSU0l0GlXHg4', '2022-06-25 10:09:06', '2022-06-25 10:09:06');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `mobil`
--
ALTER TABLE `mobil`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `rental`
--
ALTER TABLE `rental`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT untuk tabel `mobil`
--
ALTER TABLE `mobil`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `rental`
--
ALTER TABLE `rental`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
