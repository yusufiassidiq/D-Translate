-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Bulan Mei 2019 pada 06.41
-- Versi server: 10.1.30-MariaDB
-- Versi PHP: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project1`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `job`
--

CREATE TABLE `job` (
  `namadokumen` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `job`
--

INSERT INTO `job` (`namadokumen`, `keterangan`, `harga`, `image`, `file`, `user_id`, `id`, `created_at`, `updated_at`) VALUES
('Dokumen Perusahaan X', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque nec convallis purus. Nullam odio felis, efficitur vel nisi at, malesuada vulputate turpis. Vivamus viverra pulvinar turpis, eu fermentum neque ultricies a. Nulla maximus libero urna, et hendrerit nisi pretium quis. Curabitur ultricies suscipit odio eget eleifend. Aenean purus libero, rhoncus et ipsum quis, elementum dictum quam. Vestibulum semper nibh id tempor fringilla. Nulla placerat a diam vel euismod.', 100000, '1557645937_rahasia.jpg', 'Jadwal.xlsx', 1, 35, '2019-05-12 00:25:37', '2019-05-12 00:25:37'),
('Dokumen Pajak', 'Vivamus ut elit viverra, maximus justo ut, volutpat nibh. Suspendisse feugiat, magna nec rutrum dictum, ipsum tellus elementum metus, sed posuere tortor sem at tellus. Cras pulvinar, velit a finibus tincidunt, neque dui tincidunt ligula, et molestie ex lorem eu diam. Vestibulum venenatis libero et lorem condimentum, et malesuada nulla tincidunt. Aenean aliquet enim quis massa facilisis, vitae vestibulum tortor posuere. Nunc nunc arcu, facilisis eu leo ac, tempus aliquet nisi. Etiam ut libero ut velit dignissim scelerisque.', 150000, '1557645977_pajak.jpg', 'Jadwal.xlsx', 1, 36, '2019-05-12 00:26:17', '2019-05-12 00:26:17'),
('Ijazah', 'Suspendisse ut odio eget turpis porta porta. Cras in hendrerit ipsum. Morbi porta dapibus tortor sed placerat. Duis aliquet condimentum orci in consectetur. Aenean eu rhoncus tellus. Sed finibus nisl in aliquet ultricies. Aliquam erat volutpat. Sed vel dictum purus. Proin rhoncus urna ac ipsum consequat, vitae molestie ipsum tincidunt. Vivamus sodales eros pretium lacus porttitor ullamcorper. Fusce a rutrum massa, in tristique leo. Pellentesque tempor, augue ut feugiat ullamcorper, purus nisi porttitor felis, aliquam gravida sem felis sed velit. Proin sodales nunc augue, ac ultricies metus vulputate a. Class aptent taciti sociosqu ad litora torquent.', 40000, '1557647609_ijazah.jpg', 'Jadwal.xlsx', 2, 38, '2019-05-12 00:53:29', '2019-05-12 00:53:29');

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
(1, '2019_05_09_073645_create_job_table', 1),
(2, '2019_05_09_075545_create_job_table', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notelf` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `notelf`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Yusuf I Assidiq', 'yusufiassidiq@gmail.com', '082119148488', NULL, '$2y$10$5jCcTcBZnl29qC6BiMcbTe8nq413MoOKaHkbITjAQRgBKt53GQf5i', NULL, '2019-05-08 10:17:07', '2019-05-08 10:17:07'),
(2, 'Siganteng', 'siganteng@gmail.com', '082119148488', NULL, '$2y$10$dNmCMzovSnPiMF5KwpSQweLSdihdFXuVZTKJ3qyMM0Kf23r..sq.K', NULL, '2019-05-12 07:48:32', '2019-05-12 07:48:32');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `job`
--
ALTER TABLE `job`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
