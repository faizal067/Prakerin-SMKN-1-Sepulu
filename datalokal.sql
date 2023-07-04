-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 28, 2023 at 02:16 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `datalokal`
--

-- --------------------------------------------------------

--
-- Table structure for table `agendas`
--

CREATE TABLE `agendas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tglagenda` date NOT NULL,
  `agenda` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `attendances`
--

CREATE TABLE `attendances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_time` time NOT NULL,
  `batas_start_time` time NOT NULL,
  `end_time` time NOT NULL,
  `batas_end_time` time NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `attendances`
--

INSERT INTO `attendances` (`id`, `title`, `description`, `start_time`, `batas_start_time`, `end_time`, `batas_end_time`, `code`, `created_at`, `updated_at`) VALUES
(1, 'absensi masuk', 'absensi masuk siswa', '07:00:00', '23:59:00', '01:00:00', '06:59:00', 'JxfY7JMo0rVAlceC', '2023-06-03 16:14:25', '2023-06-03 16:14:25'),
(2, 'absensi masuk', 'absensi harian', '07:00:00', '08:00:00', '14:00:00', '16:00:00', 'IcUqpAzyQNKlCbcP', '2023-06-14 10:15:44', '2023-06-14 10:15:44');

-- --------------------------------------------------------

--
-- Table structure for table `attendance_position`
--

CREATE TABLE `attendance_position` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `attendance_id` bigint(20) UNSIGNED NOT NULL,
  `position_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `attendance_position`
--

INSERT INTO `attendance_position` (`id`, `attendance_id`, `position_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(2, 2, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `daftars`
--

CREATE TABLE `daftars` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kelas` enum('10','11','12') COLLATE utf8mb4_unicode_ci NOT NULL,
  `jurusan` enum('rpl','tkj','mm','aph','tkr') COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jeniskelamin` enum('laki-laki','perempuan') COLLATE utf8mb4_unicode_ci NOT NULL,
  `agama` enum('islam','kristen','katolik','budha','hindu') COLLATE utf8mb4_unicode_ci NOT NULL,
  `kelompok` enum('1','2','3','4','5','6','7','8') COLLATE utf8mb4_unicode_ci NOT NULL,
  `industri` enum('telkomsurabaya','ukirpecah','pttati','telkombangkalan') COLLATE utf8mb4_unicode_ci NOT NULL,
  `notelp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keahlian` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_accepted` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `daftars`
--

INSERT INTO `daftars` (`id`, `user_id`, `nama`, `kelas`, `jurusan`, `alamat`, `jeniskelamin`, `agama`, `kelompok`, `industri`, `notelp`, `foto`, `keahlian`, `is_accepted`, `created_at`, `updated_at`) VALUES
(4, 14, 'Dafa', '11', 'tkj', 'XP2Q+W54, Jl. Soekarno Hatta, Wr 08, Mlajah, Kec. Bangkalan, Kabupaten Bangkalan, Jawa Timur 69116', 'laki-laki', 'islam', '1', 'telkomsurabaya', '0825173671831', '2.jpg', 'Elektronik', 0, '2023-06-12 16:39:38', '2023-06-15 07:06:06');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
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
-- Table structure for table `holidays`
--

CREATE TABLE `holidays` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `holiday_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `holidays`
--

INSERT INTO `holidays` (`id`, `title`, `description`, `holiday_date`, `created_at`, `updated_at`) VALUES
(1, 'idul adha', 'hari raya', '2023-06-28', '2023-06-14 10:13:49', '2023-06-14 10:13:49');

-- --------------------------------------------------------

--
-- Table structure for table `industris`
--

CREATE TABLE `industris` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lokasi` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` varchar(5000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kebutuhan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `industris`
--

INSERT INTO `industris` (`id`, `nama`, `lokasi`, `deskripsi`, `kebutuhan`, `created_at`, `updated_at`) VALUES
(1, 'PT Tati Indonesia', '!1m18!1m12!1m3!1d3957.58326115157!2d112.80868477454625!3d-7.288164071632164!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7f1293de2dfcf%3A0xe2ec987e3e29550d!2sTATI!5e0!3m2!1sid!2sid!4v1686580875028!5m2!1sid!2sid', 'PT.  Tatacipta  Teknologi   Indonesia  merupakan perusahaan    yang  mempunyai kompetensi bisnis di bidang usaha Teknologi Informasi  yang berpengalaman lebih dari 10 tahun di lebih dari 30 Pemerintah Kota/ Kabupaten   di Indonesia.   Didukung   metode   Best   Practice  Internasional & Kajian Ilmiah dengan Pakar, Peneliti & Profesional TI berpendidikan S2/ S3 Luar Negeri  dan Bersertifikasi  Internasional\n\nKedepan teknologi    akan mengalami pertumbuhan yang positif dan  signifikan sejalan   de', 'IT, Desainer, Developer, UI/UX', '2023-06-07 18:49:52', '2023-06-12 14:42:08'),
(3, 'Ukir Pecah', '!1m18!1m12!1m3!1d3959.0006780826225!2d112.7124130745439!3d-7.125916269885114!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd80164617137b3%3A0x37123cf5503539bc!2sUkir%20Pecah%20-%20Central%20Cinderamata!5e0!3m2!1sid!2sid!4v1686580941609!5m2!1sid!2sid', 'afwadawdawfaw', 'scevaveerva', '2023-06-10 14:12:06', '2023-06-12 14:46:00'),
(4, 'Telkom Surabaya', '!1m18!1m12!1m3!1d3957.8093018191184!2d112.73719947454595!3d-7.262531471353308!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7f960937b5f67%3A0xcfd023fc8475ad51!2sTelkom%20Mergoyoso%20Surabaya!5e0!3m2!1sid!2sid!4v1686709964370!5m2!1sid!2sid', 'Perusahaan Perseroan PT Telekomunikasi Indonesia Tbk disingkat PT Telkom Indonesia Tbk adalah sebuah badan usaha milik negara Indonesia yang bergerak di bidang teknologi informasi dan komunikasi, berkedudukan di Bandung dan berkantor pusat di Jakarta', 'engginer dan teknisi listrik', '2023-06-14 02:35:15', '2023-06-14 02:35:15');

-- --------------------------------------------------------

--
-- Table structure for table `landings`
--

CREATE TABLE `landings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `laporans`
--

CREATE TABLE `laporans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kegiatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rincian` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tglkegiatan` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `logbooks`
--

CREATE TABLE `logbooks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `tglkegiatan` date NOT NULL,
  `kegiatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rincian` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_accepted` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `logbooks`
--

INSERT INTO `logbooks` (`id`, `user_id`, `tglkegiatan`, `kegiatan`, `rincian`, `foto`, `is_accepted`, `created_at`, `updated_at`) VALUES
(1, 13, '2023-06-03', 'Mendaur ulang sampah', 'kegiatan membersihkan dan mendaur ulang sampah', 'C:\\xampp\\tmp\\phpDD4.tmp', 1, '2023-06-03 16:08:42', '2023-06-15 07:14:50'),
(2, 13, '2023-06-05', 'Data produk', 'Pembangunan saluran PLAM', '1.jpg', 1, '2023-06-04 20:04:01', '2023-06-05 06:07:55'),
(4, 13, '2023-06-06', 'Mendaur Ulang Sampah', 'Uprating Instalasi Pengolahan Air (IPA) / Penambahan Sumur Dalam Terlindungi', '254767559_1676072985919565_1303026094783868210_n.jpg', 0, '2023-06-06 01:30:24', '2023-06-08 04:55:26'),
(5, 14, '2023-06-10', 'fwadadawda', 'fawfawfwafaw', 'a17d762d83b1849b9ef85f91cb6eebdb.jpg', 0, '2023-06-10 14:47:32', '2023-06-12 18:52:29');

-- --------------------------------------------------------

--
-- Table structure for table `lokals`
--

CREATE TABLE `lokals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `tglkegiatan` date NOT NULL,
  `kegiatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rincian` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_accepted` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(74, '2023_05_28_165605_add_lokal_date_to_lokals_table', 1),
(96, '2023_05_21_133430_add_is_accepted_to_logbooks_table', 2),
(101, '2014_10_12_000000_create_users_table', 3),
(102, '2014_10_12_100000_create_password_resets_table', 3),
(103, '2019_08_19_000000_create_failed_jobs_table', 3),
(104, '2019_12_14_000001_create_personal_access_tokens_table', 3),
(105, '2022_06_16_075041_create_roles_table', 3),
(106, '2022_06_16_075123_add_role_id_to_users_table', 3),
(107, '2022_06_17_134607_create_positions_table', 3),
(108, '2022_06_17_142639_add_phone_and_position_id_to_users_table', 3),
(109, '2022_06_20_114945_create_holidays_table', 3),
(110, '2022_06_21_135647_create_attendances_table', 3),
(111, '2022_06_21_135721_create_attendance_position_table', 3),
(112, '2022_06_21_144144_create_presences_table', 3),
(113, '2022_06_26_214220_create_permissions_table', 3),
(114, '2022_06_26_214239_add_is_permission_to_presences_table', 3),
(115, '2022_06_26_215859_add_permission_date_to_permissions_table', 3),
(116, '2022_06_27_162656_add_is_accepted_to_permissions_table', 3),
(117, '2023_05_02_060640_create_laporans_table', 3),
(118, '2023_05_08_224424_create_landings_table', 3),
(119, '2023_05_15_220246_create_industris_table', 3),
(120, '2023_05_17_005452_create_logbooks_table', 3),
(121, '2023_05_28_161241_create_lokals_table', 3),
(122, '2023_05_28_162502_add_is_lokal_to_logbooks_table', 3),
(123, '2023_05_28_170140_add_is_accepted_to_lokals_table', 3),
(124, '2023_05_28_162502_add_is_accepted_to_logbooks_table', 4),
(125, '2023_05_28_170140_add_is_logbook_to_lokals_table', 5),
(130, '2023_06_05_201711_create_daftars_table', 6),
(131, '2023_06_05_204725_add_is_accepted_to_daftars_table', 6),
(132, '2023_06_13_214524_create_agendas_table', 7),
(133, '2023_06_13_214949_create_nilai_prakerins_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `nilai_prakerins`
--

CREATE TABLE `nilai_prakerins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `kedisiplinan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kepemimpinan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kerjasama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adaptasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kemampuan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rata` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `attendance_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permission_date` date NOT NULL,
  `is_accepted` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `user_id`, `attendance_id`, `title`, `description`, `permission_date`, `is_accepted`, `created_at`, `updated_at`) VALUES
(1, 13, 1, 'sakit tipes', 'sakit tipes 3 hari\n', '2023-06-03', 1, '2023-06-03 16:14:57', '2023-06-03 16:16:03'),
(2, 13, 1, 'Sakit panas', 'sakitnya 2 hari kemarin', '2023-06-14', 0, '2023-06-14 10:19:19', '2023-06-14 10:19:19');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
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
-- Table structure for table `positions`
--

CREATE TABLE `positions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `positions`
--

INSERT INTO `positions` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'User', '2023-06-03 15:35:15', '2023-06-03 15:35:15'),
(2, 'Manager', '2023-06-03 15:35:15', '2023-06-03 15:35:15'),
(3, 'Direktur', '2023-06-03 15:35:15', '2023-06-03 15:35:15'),
(4, 'Operator', '2023-06-03 15:35:15', '2023-06-03 15:35:15');

-- --------------------------------------------------------

--
-- Table structure for table `presences`
--

CREATE TABLE `presences` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `attendance_id` bigint(20) UNSIGNED NOT NULL,
  `presence_date` date NOT NULL,
  `presence_enter_time` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `presence_out_time` time DEFAULT NULL,
  `is_permission` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `presences`
--

INSERT INTO `presences` (`id`, `user_id`, `attendance_id`, `presence_date`, `presence_enter_time`, `presence_out_time`, `is_permission`, `created_at`, `updated_at`) VALUES
(1, 13, 1, '2023-06-03', '23:16:03', '23:16:03', 1, '2023-06-03 16:16:03', '2023-06-03 16:16:03'),
(2, 13, 1, '2023-06-15', '14:18:20', NULL, 0, '2023-06-15 07:18:22', '2023-06-15 07:18:22');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'admin', '2023-06-03 15:35:15', '2023-06-03 15:35:15'),
(2, 'operator', '2023-06-03 15:35:15', '2023-06-03 15:35:15'),
(3, 'user', '2023-06-03 15:35:15', '2023-06-03 15:35:15');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `phone`, `position_id`, `role_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Muhammad Pauzi (Admin)', 'admin@gmail.com', '2023-06-03 15:35:15', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '940-486-0778', 4, 1, 'IXZYP9lBF1Du1GQAGrYZ02zuIw7Kbwd64z1fCCVsRcKq8hrVziP3SzJx3qAW', '2023-06-03 15:35:15', '2023-06-03 15:35:15'),
(2, 'Catalina Schulist', 'alana56@example.net', '2023-06-03 15:35:15', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '+18478098111', 4, 2, 'DoZ1afVuf3', '2023-06-03 15:35:15', '2023-06-03 15:35:15'),
(3, 'Ms. Abigail Stiedemann II', 'reuben.fay@example.net', '2023-06-03 15:35:15', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '+1.323.725.2187', 4, 3, 'EtpH25t8jx', '2023-06-03 15:35:15', '2023-06-03 15:35:15'),
(4, 'Mrs. Gina Labadie DVM', 'dkirlin@example.com', '2023-06-03 15:35:15', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '1-239-606-5110', 4, 3, 'jjzd2euAQ4', '2023-06-03 15:35:15', '2023-06-03 15:35:15'),
(5, 'Aryanna Mertz', 'mclaughlin.stephany@example.org', '2023-06-03 15:35:15', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '+1-323-303-6188', 4, 3, 'tkoVKFtfV3', '2023-06-03 15:35:15', '2023-06-03 15:35:15'),
(6, 'Alanna White', 'hondricka@example.com', '2023-06-03 15:35:15', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '+14589396357', 4, 3, 'OIGibbZj1K', '2023-06-03 15:35:15', '2023-06-03 15:35:15'),
(7, 'Mr. Sage Kessler MD', 'heath88@example.org', '2023-06-03 15:35:15', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '559.645.1645', 4, 3, '9SucVArJmX', '2023-06-03 15:35:15', '2023-06-03 15:35:15'),
(8, 'Johnson Hermann Sr.', 'charley.bins@example.org', '2023-06-03 15:35:15', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '831.646.8952', 4, 3, 'lQ9rFLMruV', '2023-06-03 15:35:15', '2023-06-03 15:35:15'),
(9, 'Lesly Haley II', 'lebsack.kieran@example.org', '2023-06-03 15:35:15', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '(934) 643-4682', 4, 3, 'BBvjt52Wv4', '2023-06-03 15:35:15', '2023-06-03 15:35:15'),
(10, 'Isabelle Jenkins', 'eankunding@example.com', '2023-06-03 15:35:15', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '+1-520-869-0336', 4, 3, 'mCHpebjB8e', '2023-06-03 15:35:15', '2023-06-03 15:35:15'),
(11, 'Prof. Lorine Weimann Sr.', 'stark.jewell@example.net', '2023-06-03 15:35:15', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '828-649-5417', 4, 3, 'xatklThXav', '2023-06-03 15:35:15', '2023-06-03 15:35:15'),
(12, 'Lisette Ferry Sr.', 'marquardt.derrick@example.net', '2023-06-03 15:35:15', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '754-662-2178', 4, 3, 'UNE2DsU4kf', '2023-06-03 15:35:15', '2023-06-03 15:35:15'),
(13, 'faiz', 'faiz@gmail.com', NULL, '$2y$10$jT07j2NNxHPwVxbmQuBORewiF8.mcg/fgpGzYSaCtjODAW/jB7EMe', '085225472631', 1, 3, 'O5rQz4JdGgqgfT2lVJ6Y3ifba77mGAeNyMccRehybhuz8tABW7k9vXyl254x', '2023-06-03 15:35:42', '2023-06-03 15:35:42'),
(14, 'dafa', 'dafa@gmail.com', NULL, '$2y$10$eqfyjJYnIShSLyITjDFm..ea9P3UnAODe6Rg1BKmPHbbEbwFs2SC.', '085221131123', 1, 3, NULL, '2023-06-05 06:09:47', '2023-06-05 06:09:47'),
(15, 'faizal', 'faizal@gmail.com', NULL, '$2y$10$xVoMMCZ2/x2Ax8DEoJVcGeu4gILXY295oVF3T7/YKDYSC14cSwhhS', '084951745632', 4, 2, NULL, '2023-06-14 04:44:52', '2023-06-14 04:44:52'),
(16, 'guru pendamping', 'guru@gmail.com', NULL, '$2y$10$nJKdr27oxkOcdfPGR2YDZOzGQB2jou2RkQBijc/XdBw7eti/mNnke', '93718973981', 1, 3, 'n7pkSIzBtiHpg0RMJB6oxWjn5TWgN8H2rlszoUJ1DvHDB3CzXzAjOxhpN4up', '2023-06-14 10:10:04', '2023-06-14 10:10:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agendas`
--
ALTER TABLE `agendas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attendances`
--
ALTER TABLE `attendances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attendance_position`
--
ALTER TABLE `attendance_position`
  ADD PRIMARY KEY (`id`),
  ADD KEY `attendance_position_attendance_id_foreign` (`attendance_id`),
  ADD KEY `attendance_position_position_id_foreign` (`position_id`);

--
-- Indexes for table `daftars`
--
ALTER TABLE `daftars`
  ADD PRIMARY KEY (`id`),
  ADD KEY `daftars_user_id_foreign` (`user_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `holidays`
--
ALTER TABLE `holidays`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `industris`
--
ALTER TABLE `industris`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `landings`
--
ALTER TABLE `landings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `laporans`
--
ALTER TABLE `laporans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logbooks`
--
ALTER TABLE `logbooks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `logbooks_user_id_foreign` (`user_id`);

--
-- Indexes for table `lokals`
--
ALTER TABLE `lokals`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lokals_user_id_foreign` (`user_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nilai_prakerins`
--
ALTER TABLE `nilai_prakerins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nilai_prakerins_user_id_foreign` (`user_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permissions_user_id_foreign` (`user_id`),
  ADD KEY `permissions_attendance_id_foreign` (`attendance_id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `positions`
--
ALTER TABLE `positions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `presences`
--
ALTER TABLE `presences`
  ADD PRIMARY KEY (`id`),
  ADD KEY `presences_user_id_foreign` (`user_id`),
  ADD KEY `presences_attendance_id_foreign` (`attendance_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_phone_unique` (`phone`),
  ADD KEY `users_role_id_foreign` (`role_id`),
  ADD KEY `users_position_id_foreign` (`position_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agendas`
--
ALTER TABLE `agendas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `attendances`
--
ALTER TABLE `attendances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `attendance_position`
--
ALTER TABLE `attendance_position`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `daftars`
--
ALTER TABLE `daftars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `holidays`
--
ALTER TABLE `holidays`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `industris`
--
ALTER TABLE `industris`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `landings`
--
ALTER TABLE `landings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `laporans`
--
ALTER TABLE `laporans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `logbooks`
--
ALTER TABLE `logbooks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `lokals`
--
ALTER TABLE `lokals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=134;

--
-- AUTO_INCREMENT for table `nilai_prakerins`
--
ALTER TABLE `nilai_prakerins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `positions`
--
ALTER TABLE `positions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `presences`
--
ALTER TABLE `presences`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `attendance_position`
--
ALTER TABLE `attendance_position`
  ADD CONSTRAINT `attendance_position_attendance_id_foreign` FOREIGN KEY (`attendance_id`) REFERENCES `attendances` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `attendance_position_position_id_foreign` FOREIGN KEY (`position_id`) REFERENCES `positions` (`id`);

--
-- Constraints for table `daftars`
--
ALTER TABLE `daftars`
  ADD CONSTRAINT `daftars_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `logbooks`
--
ALTER TABLE `logbooks`
  ADD CONSTRAINT `logbooks_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `lokals`
--
ALTER TABLE `lokals`
  ADD CONSTRAINT `lokals_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `nilai_prakerins`
--
ALTER TABLE `nilai_prakerins`
  ADD CONSTRAINT `nilai_prakerins_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `permissions`
--
ALTER TABLE `permissions`
  ADD CONSTRAINT `permissions_attendance_id_foreign` FOREIGN KEY (`attendance_id`) REFERENCES `attendances` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `permissions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `presences`
--
ALTER TABLE `presences`
  ADD CONSTRAINT `presences_attendance_id_foreign` FOREIGN KEY (`attendance_id`) REFERENCES `attendances` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `presences_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_position_id_foreign` FOREIGN KEY (`position_id`) REFERENCES `positions` (`id`),
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
