-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2023 at 11:58 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nkpp`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `idAdmin` int(2) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`idAdmin`, `nama`, `email`, `password`) VALUES
(1, 'admin', 'admin@admin.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `at`
--

CREATE TABLE `at` (
  `idAT` int(2) NOT NULL,
  `nama_at` varchar(50) NOT NULL,
  `nip_at` varchar(16) NOT NULL,
  `unit_kerja_at` varchar(50) NOT NULL,
  `idKT` int(2) DEFAULT NULL,
  `idPT` int(2) DEFAULT NULL,
  `email_at` varchar(255) NOT NULL,
  `password_at` varchar(150) NOT NULL,
  `periode_at` year(4) NOT NULL,
  `no_surat_dinas_at` varchar(20) NOT NULL,
  `idBimbingan` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `at`
--

INSERT INTO `at` (`idAT`, `nama_at`, `nip_at`, `unit_kerja_at`, `idKT`, `idPT`, `email_at`, `password_at`, `periode_at`, `no_surat_dinas_at`, `idBimbingan`) VALUES
(5, 'Rizki Ananda Ruvvy', '7890123456334455', 'Humas dan TU', 3, 2, 'at@gmail.com', '1234', 2023, '1/ER/2023', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `bimbingan`
--

CREATE TABLE `bimbingan` (
  `idBimbingan` int(2) NOT NULL,
  `tanggal` date NOT NULL DEFAULT current_timestamp(),
  `nama` varchar(255) NOT NULL,
  `nip` varchar(255) NOT NULL,
  `bimbingan_satu` varchar(255) NOT NULL,
  `bimbingan_dua` varchar(255) NOT NULL,
  `tanggapan_satu` varchar(255) DEFAULT 'Belum Ditanggapi',
  `tanggapan_dua` varchar(255) DEFAULT 'Belum Ditanggapi',
  `bagian` varchar(255) NOT NULL,
  `periode` int(11) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bimbingan`
--

INSERT INTO `bimbingan` (`idBimbingan`, `tanggal`, `nama`, `nip`, `bimbingan_satu`, `bimbingan_dua`, `tanggapan_satu`, `tanggapan_dua`, `bagian`, `periode`, `status`) VALUES
(4, '2023-05-11', '', 'at', 'Susah', 'GImana YA??', NULL, NULL, '', 0, 'sudah ditanggapi'),
(15, '2023-05-22', 'Alika Maharani', '5432167890123098', 'kurangnya akomondasi kendaraan untuk menunjang pelaksanaan pemeriksaan', 'tidak adanya SDM yang memadai untuk melakukan pemeriksaan', 'yyyy', 'ok', 'kt', 2023, 'Selesai'),
(18, '2023-05-22', 'Silvia Julianti', '0987654321091231', 'kurangnya akomondasi kendaraan untuk menunjang pelaksanaan pemeriksaan', 'tidak adanya SDM yang memadai untuk melakukan pemeriksaan', 'yyyy', 'ok', 'pt', 2023, 'Selesai'),
(19, '2023-05-27', 'Rizki Ananda Ruvvy', '7890123456334455', 'kurangnya akomondasi kendaraan untuk menunjang pelaksanaan pemeriksaan', 'tidak adanya SDM yang memadai untuk melakukan pemeriksaan', 'yyyy', 'ok', 'at', 2023, 'Selesai');

-- --------------------------------------------------------

--
-- Table structure for table `kt`
--

CREATE TABLE `kt` (
  `idKT` int(2) NOT NULL,
  `nama_kt` varchar(50) NOT NULL,
  `nip_kt` varchar(16) NOT NULL,
  `unit_kerja_kt` varchar(50) NOT NULL,
  `idPT` int(2) NOT NULL,
  `idPJ` int(2) NOT NULL,
  `email_kt` varchar(255) NOT NULL,
  `password_kt` varchar(150) NOT NULL,
  `periode_kt` year(4) NOT NULL,
  `no_surat_dinas_kt` varchar(20) NOT NULL,
  `idBimbingan` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kt`
--

INSERT INTO `kt` (`idKT`, `nama_kt`, `nip_kt`, `unit_kerja_kt`, `idPT`, `idPJ`, `email_kt`, `password_kt`, `periode_kt`, `no_surat_dinas_kt`, `idBimbingan`) VALUES
(3, 'Alika Maharani', '5432167890123098', 'Server', 2, 4, 'kt@gmail.com', '1234', 2023, '1/ER/2023', 0);

-- --------------------------------------------------------

--
-- Table structure for table `nilai_nkt`
--

CREATE TABLE `nilai_nkt` (
  `id_nilai_nkt` int(11) NOT NULL,
  `nilai_soal` int(11) DEFAULT 0,
  `waktu` time NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `nilai_nkt`
--

INSERT INTO `nilai_nkt` (`id_nilai_nkt`, `nilai_soal`, `waktu`) VALUES
(1, 100, '01:54:40'),
(2, 85, '01:54:40'),
(3, 100, '01:54:40'),
(4, 70, '01:54:40'),
(5, 85, '01:54:40'),
(6, 85, '01:54:40'),
(7, 70, '01:54:40'),
(8, 85, '01:54:40'),
(9, 70, '01:54:40'),
(10, 70, '01:54:40'),
(11, 70, '01:54:40'),
(12, 85, '01:54:40'),
(13, 70, '01:54:40'),
(14, 70, '01:54:40');

-- --------------------------------------------------------

--
-- Table structure for table `nkp`
--

CREATE TABLE `nkp` (
  `id_nkp` int(11) NOT NULL,
  `soal` varchar(255) NOT NULL,
  `melebihi` int(11) NOT NULL,
  `memenuhi` int(11) NOT NULL,
  `perlu_perhatian` int(11) NOT NULL,
  `tidak_memenuhi` int(11) NOT NULL,
  `bagian` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `nkp`
--

INSERT INTO `nkp` (`id_nkp`, `soal`, `melebihi`, `memenuhi`, `perlu_perhatian`, `tidak_memenuhi`, `bagian`) VALUES
(1, 'Mampu mendapatkan informasi yang relevan', 100, 85, 70, 55, 'at'),
(2, 'Mampu mengklarifikasi data/informasi yang telah diperoleh', 100, 85, 70, 55, 'at'),
(3, 'Mampu berdiskusi dengan AT lain/KT  terkait informasi yang diperoleh', 100, 85, 70, 55, 'at'),
(4, 'Mampu melakukan konfirmasi dengan pihak ketiga yang kompeten', 100, 85, 70, 55, 'at'),
(5, 'Mampu menganalisis data-data yang relevan terkait permasalahan', 100, 85, 70, 55, 'at'),
(6, 'Mampu menyusun konsep temuan secara logis mencakup unsur-unsur Temuan Pemeriksaan (judul, kondisi, kriteria, sebab, dan akibat)', 100, 85, 70, 55, 'at'),
(7, 'Mampu melakukan peer review antara Anggota Tim', 100, 85, 70, 55, 'at'),
(8, 'Mampu melakukan konfirmasi kepada pihak terkait, mengenai kecukupan, dan validitas data audit yang diterima', 100, 85, 70, 55, 'at'),
(9, 'Mampu mengutarakan pendapat/usulan yang bersifat substansial, dengan cara yang positif serta konstruktif', 100, 85, 70, 55, 'at'),
(10, 'Mampu menghargai pendapat Anggota Tim lainnya', 100, 85, 70, 55, 'at'),
(11, 'Mampu menjaga keutuhan dan komunikasi antar Tim', 100, 85, 70, 55, 'at'),
(12, 'Mampu membantu menyelesaikan pekerjaan Tim yang tidak mampu diselesaikan oleh  Anggota Tim lainnya, agar target Pemeriksaan dapat tercapai', 100, 85, 70, 55, 'at'),
(26, 'Mampu menerapkan sistem/metode bekerja yang efektif sesuai dengan kondisi di lapangan, sehingga Tim Pemeriksa bekerja lebih efektif dan efisien, termasuk di dalamnya merancang prosedur alternatif untuk mengatasi hambatan pelaksanaan atau langkah P2.', 100, 85, 70, 55, 'kt'),
(27, 'Mampu menyelesaikan Pemeriksaan menggunakan sumber daya yang ada dengan baik walaupun dengan banyak hambatan teknis (faktor lokasi, fasilitas, geografis, kestabilan politik daerah, dan lain-lain).', 100, 85, 70, 55, 'kt'),
(28, 'Mampu menyimpulkan faktor yang merupakan penyebab utama dari beberapa permasalahan.', 100, 85, 70, 55, 'kt'),
(29, 'Mampu mengidentifikasi beberapa faktor yang merupakan penyebab timbulnya suatu pemasalahan dan keterkaitan antar faktor, dalam penyusunan TP.', 100, 85, 70, 55, 'kt'),
(30, 'Mampu mereviu hasil kerja AT yang tertuang dalam P2 serta memberikan solusi maupun saran terhadap langkah Pemeriksaan yang sudah dilakukan, guna memastikan kecukupan Bukti Pemeriksaan.', 100, 85, 70, 55, 'kt'),
(31, 'Mampu mereviu hasil kerja AT yang tertuang dalam P2 serta memberikan solusi maupun saran terhadap langkah Pemeriksaan yang sudah dilakukan, guna memastikan kecukupan Bukti Pemeriksaan.', 100, 85, 70, 55, 'kt'),
(32, 'Mampu menemukan solusi yang tepat dalam memecahkan masalah yang dihadapi berdasarkan wawasan dan pengetahuan yang ia miliki (contoh: prosedur alternatif).', 100, 85, 70, 55, 'kt'),
(33, 'Mampu mengaplikasikan teori dan pengalaman  guna menganalisis data Pemeriksaan.', 100, 85, 70, 55, 'kt'),
(34, 'Mampu mengomunikasikan dan memberikan gambaran secara utuh mengenai tujuan dan harapan penugasan Pemeriksaan.', 100, 85, 70, 55, 'kt'),
(35, 'Mampu memberikan arahan yang jelas terkait Pelaksanaan Pemeriksaan.', 100, 85, 70, 55, 'kt'),
(36, 'Mampu memastikan kebutuhan kerja Tim dalam Pemeriksaan terpenuhi dan mampu memotivasi Anggota Tim dalam Pemeriksaan.', 100, 85, 70, 55, 'kt'),
(37, 'Mampu mengantisipasi kendala-kendala yang mungkin muncul pada saat Pemeriksaan.', 100, 85, 70, 55, 'kt'),
(50, 'Mampu mengarahkan dan menyimpulkan Temuan Pemeriksaan secara valid, terstruktur, dan sistematis', 100, 85, 70, 55, 'pt'),
(51, 'Mampu merangkum informasi yang kompleks menjadi sebuah kesimpulan yang sederhana dan mudah dipahami oleh orang lain', 100, 85, 70, 55, 'pt'),
(52, 'Mampu memberikan arahan secara teknis dan rinci kepada Ketua Tim agar menerapkan suatu sistem/metode bekerja yang efektif sesuai dengan kondisi di lapangan sehingga Tim Pemeriksa dapat bekerja lebih efektif, efisien, dan/atau melebihi target dari yang dit', 100, 85, 70, 55, 'pt'),
(53, 'Mampu memantau penyelesaian penugasan Tim Pemeriksa secara periodik dan memberikan masukan jika terjadi hambatan teknis (faktor lokasi, fasilitas, alam, kestabilan politik daerah, dan lain-lain)', 100, 85, 70, 55, 'pt'),
(54, 'Mampu memahami dan mengarahkan Tim mengenai psikologi audit agar dapat menyesuaikan dengan karakter Entitas', 100, 85, 70, 55, 'pt'),
(55, 'Mereviu materi penyampaian Hasil Pemeriksaan yang disusun oleh KT dengan memperhatikan latar belakang Entitas', 100, 85, 70, 55, 'pt'),
(56, 'Mampu mengarahkan materi penyampaian Hasil Pemeriksaan sesuai dengan tujuan dan harapan penugasan', 100, 85, 70, 55, 'pt'),
(57, 'Mampu memprediksi tanggapan dari Auditee dan mengarahkan Tim Pemeriksa untuk dapat mengantisipasi reaksi yang muncul', 100, 85, 70, 55, 'pt'),
(58, 'Mampu memberikan penjelasan yang jelas dan bersikap wajar serta meyakinkan dalam menanggapi sanggahan dari Auditee dan meyakinkan Entitas atas  Temuan Pemeriksaan', 100, 85, 70, 55, 'pt'),
(59, 'Mampu mengomunikasikan dan memberikan gambaran secara utuh mengenai tujuan dan harapan penugasan Pemeriksaan kepada Tim melalui, diskusi 2 (dua) arah', 100, 85, 70, 55, 'pt'),
(60, 'Mampu memotivasi Tim Pemeriksaan dalam Pelaksanaan Pemeriksaan untuk mencapai tujuan dan harapan penugasan', 100, 85, 70, 55, 'pt'),
(61, 'Mengantisipasi kendala-kendala yang akan dihadapi Tim Pemeriksaan dalam pelaksanaan Pemeriksaan dan kebutuhan Tim terpenuhi', 100, 85, 70, 55, 'pt');

-- --------------------------------------------------------

--
-- Table structure for table `nkpp`
--

CREATE TABLE `nkpp` (
  `id_nkpp` int(11) NOT NULL,
  `tanggal` date NOT NULL DEFAULT current_timestamp(),
  `periode` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `nilai_sasaran` float DEFAULT NULL,
  `nilai_nkp` float DEFAULT NULL,
  `nilai_nkt` float DEFAULT NULL,
  `nilai_kinerja_sasaran` float DEFAULT NULL,
  `nilai_kinerja_nkp` float DEFAULT NULL,
  `nilai_kinerja_nkt` float DEFAULT NULL,
  `nkpp` float DEFAULT 0,
  `bagian` varchar(255) DEFAULT NULL,
  `nip` varchar(255) NOT NULL,
  `id_nkp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `nkpp`
--

INSERT INTO `nkpp` (`id_nkpp`, `tanggal`, `periode`, `status`, `nilai_sasaran`, `nilai_nkp`, `nilai_nkt`, `nilai_kinerja_sasaran`, `nilai_kinerja_nkp`, `nilai_kinerja_nkt`, `nkpp`, `bagian`, `nip`, `id_nkp`) VALUES
(34, '2023-05-25', '2023', 'Pending', NULL, 100, NULL, NULL, 20, NULL, 0, 'at', '7890123456334455', 0),
(35, '2023-05-25', '2023', 'Proses', NULL, 100, NULL, NULL, 20, NULL, 0, 'at', '7890123456334455', 25),
(36, '2023-06-08', '2023', 'Pending', NULL, 85, NULL, NULL, 17, NULL, 0, 'at', '7890123456334455', 0),
(37, '2023-06-08', '2023', 'Pending', NULL, NULL, 100, NULL, NULL, 20, 0, 'at', '7890123456334455', 0),
(38, '2023-06-11', '2023', 'Pending', NULL, 98.875, NULL, NULL, 19.775, NULL, 0, 'at', '7890123456334455', 0);

-- --------------------------------------------------------

--
-- Table structure for table `nkp_at`
--

CREATE TABLE `nkp_at` (
  `id_nkp_at` int(11) NOT NULL,
  `nama_at` varchar(255) NOT NULL,
  `nip_at` varchar(255) NOT NULL,
  `tanggal` date NOT NULL DEFAULT current_timestamp(),
  `periode` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `realisasi_nilai` float NOT NULL,
  `review_nilai` float NOT NULL,
  `nilai` float NOT NULL,
  `nilai_nkp` float NOT NULL,
  `nilai_kinerja_nkp` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `nkp_at`
--

INSERT INTO `nkp_at` (`id_nkp_at`, `nama_at`, `nip_at`, `tanggal`, `periode`, `status`, `realisasi_nilai`, `review_nilai`, `nilai`, `nilai_nkp`, `nilai_kinerja_nkp`) VALUES
(27, 'Rizki Ananda Ruvvy', '7890123456334455', '2023-06-11', 2023, 'Pending', 0, 0, 98.875, 98.875, 0);

-- --------------------------------------------------------

--
-- Table structure for table `nkp_kt`
--

CREATE TABLE `nkp_kt` (
  `id_nkp_kt` int(11) NOT NULL,
  `nama_kt` varchar(255) NOT NULL,
  `nip_kt` varchar(255) NOT NULL,
  `tanggal` date NOT NULL DEFAULT current_timestamp(),
  `periode` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `realisasi_nilai` float NOT NULL,
  `review_nilai` float NOT NULL,
  `nilai` float NOT NULL,
  `nilai_nkp` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `nkp_kt`
--

INSERT INTO `nkp_kt` (`id_nkp_kt`, `nama_kt`, `nip_kt`, `tanggal`, `periode`, `status`, `realisasi_nilai`, `review_nilai`, `nilai`, `nilai_nkp`) VALUES
(11, 'Alika Maharani', '5432167890123098', '2023-05-24', 2023, 'Proses', 100, 0, 100, 100);

-- --------------------------------------------------------

--
-- Table structure for table `nkp_pt`
--

CREATE TABLE `nkp_pt` (
  `id_nkp_pt` int(11) NOT NULL,
  `nama_pt` varchar(255) NOT NULL,
  `nip_pt` varchar(255) NOT NULL,
  `tanggal` date NOT NULL DEFAULT current_timestamp(),
  `periode` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `realisasi_nilai` float NOT NULL,
  `review_nilai` float NOT NULL,
  `nilai` float NOT NULL,
  `nilai_nkp` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `nkp_pt`
--

INSERT INTO `nkp_pt` (`id_nkp_pt`, `nama_pt`, `nip_pt`, `tanggal`, `periode`, `status`, `realisasi_nilai`, `review_nilai`, `nilai`, `nilai_nkp`) VALUES
(8, 'Silvia Julianti', '0987654321091231', '2023-05-22', 2023, 'Pending', 0, 0, 100, 100);

-- --------------------------------------------------------

--
-- Table structure for table `nkt`
--

CREATE TABLE `nkt` (
  `id_nkt` int(11) NOT NULL,
  `soal` varchar(255) DEFAULT NULL,
  `melebihi` int(11) DEFAULT 100,
  `memenuhi` int(11) DEFAULT 85,
  `perlu_perhatian` int(11) DEFAULT 70,
  `tidak_memenuhi` int(11) DEFAULT 55,
  `bagian` varchar(255) DEFAULT NULL,
  `nilai` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `nkt`
--

INSERT INTO `nkt` (`id_nkt`, `soal`, `melebihi`, `memenuhi`, `perlu_perhatian`, `tidak_memenuhi`, `bagian`, `nilai`) VALUES
(1, 'Mampu memahami proses bisnis sesuai pembagian tugas dalam PKP', 100, 85, 70, 55, 'at', 85),
(2, 'Mampu menjelaskan perbedaan (gap) yang terjadi antara praktek riil dengan dokumen proses bisnis formal yang ada', 100, 85, 70, 55, 'at', 100),
(3, 'Mampu menerapkan langkah-langkah pengumpulan data yang ditetapkan dalam Program Pemeriksaan', 100, 85, 70, 55, 'at', 43),
(4, 'Mampu menggunakan metode pengumpulan data yang tepat', 100, 85, 70, 55, 'at', NULL),
(5, 'Mampu mengumpulkan data yang dapat dijadikan Bukti Pemeriksaan', 100, 85, 70, 55, 'at', NULL),
(6, 'Menganalisis dan menyajikan data sesuai dengan Tujuan Pemeriksaan', 100, 85, 70, 55, 'at', NULL),
(7, 'Mampu merumuskan permasalahan dari data yang sudah dianalisisnya', 100, 85, 70, 55, 'at', NULL),
(8, 'Mampu mengolah data dengan suatu aplikasi komputer', 100, 85, 70, 55, 'at', NULL),
(9, 'Mampu menyusun KKP secara sistematis (terdapat indeks, cross reference) dan sesuai Juklak Penyusunan KKP', 100, 85, 70, 55, 'at', NULL),
(10, 'Mampu menyusun KKP dengan jelas, tidak menimbulkan arti ganda, mudah dimengerti, dan informatif', 100, 85, 70, 55, 'at', NULL),
(11, 'Mampu mendokumentasikan bukti pendukung yang akurat, lengkap, relevan, dan mutakhir sesuai dengan Program Pemeriksaan', 100, 85, 70, 55, 'at', NULL),
(12, 'Mampu menyusun konsep Temuan Pemeriksaan yang memenuhi unsur kondisi, kriteria, sebab, dan akibat dan memiliki keterkaitan yang logis', 100, 85, 70, 55, 'at', NULL),
(13, 'Mampu menyusun konsep Temuan Pemeriksaan sesuai dengan kaidah bahasa selingkung', 100, 85, 70, 55, 'at', NULL),
(14, 'Mampu menyusun Konsep Temuan Pemeriksaan berdasarkan pada dokumen pendukung yang diperoleh dan mengandung kebenaran matematis serta akurasi angka', 100, 85, 70, 55, 'at', NULL),
(15, 'Mampu mengevaluasi hasil pemahaman KT atas proses bisnis Entitas', 100, 85, 70, 55, 'pt', NULL),
(16, 'Mampu menetapkan secara tepat tujuan, lingkup, dan sasaran Pemeriksaan berdasarkan hasil analisis atas proses bisnis Entitas', 100, 85, 70, 55, 'pt', NULL),
(17, 'Mampu memberikan saran yang tepat agar KKP mendukung Temuan dan Tujuan Pemeriksaan ', 100, 85, 70, 55, 'pt', NULL),
(18, 'Mampu menjamin kebenaran pembahasaan dalam TP', 100, 85, 70, 55, 'pt', NULL),
(19, 'Mampu mengevaluasi hasil pemahaman AT atas proses bisnis Entitas', 100, 85, 70, 55, 'kt', NULL),
(20, 'Mampu mengusulkan secara tepat tujuan, lingkup, dan sasaran Pemeriksaan berdasarkan hasil analisis atas proses bisnis Entitas', 100, 85, 70, 55, 'kt', NULL),
(21, 'Mampu mengidentifikasi kekuatan dan kelemahan serta potensi permasalahan pada proses bisnis Entitas', 100, 85, 70, 55, 'kt', NULL),
(22, 'Mampu mengevaluasi bahwa kegiatan pengumpulan data yang dilakukan  sudah  sesuai  dengan Program  Pemeriksaan ', 100, 85, 70, 55, 'kt', NULL),
(23, 'Mampu mengevaluasi bahwa data yang dikumpulkan mendukung kecukupan dan keandalan Bukti Pemeriksaan', 100, 85, 70, 55, 'kt', NULL),
(24, 'Mampu mengevaluasi apakah Bukti Pemeriksaan yang diperoleh melalui kegiatan pengumpulan data telah menjawab Tujuan Pemeriksaan', 100, 85, 70, 55, 'kt', NULL),
(25, 'Mampu mengevaluasi apakah kegiatan pengolahan data sudah dilakukan sesuai dengan Program Pemeriksaan', 100, 85, 70, 55, 'kt', NULL),
(26, 'Mampu mengevaluasi apakah hasil pengolahan data mendukung kecukupan dan keandalan Bukti Pemeriksaan', 100, 85, 70, 55, 'kt', NULL),
(27, 'Mampu mengevaluasi apakah Bukti Pemeriksaan yang diperoleh melalui  kegiatan  pengolahan  data  mampu  menjawab  Tujuan Pemeriksaan', 100, 85, 70, 55, 'kt', NULL),
(28, 'Mampu mereviu kesesuaian KKP Anggota Tim dengan prosedur Pemeriksaan pada saat Pemeriksaan', 100, 85, 70, 55, 'kt', NULL),
(29, 'Mampu segera memperbaiki/melengkapi KKP sesuai arahan Pengendali Teknis dan mendokumentasikan proses reviu', 100, 85, 70, 55, 'kt', NULL),
(30, 'Mampu mereviu kecukupan, relevansi, dan keandalan bukti pendukung dan akurasi perhitungan matematis', 100, 85, 70, 55, 'kt', NULL),
(31, 'Mampu mereviu kelogisan substansi, kebenaran matematis, dan  akurasi  angka  dalam  konsep  Temuan Pemeriksaan', 100, 85, 70, 55, 'kt', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `nkt_at`
--

CREATE TABLE `nkt_at` (
  `id_nkt_at` int(11) NOT NULL,
  `nama_at` varchar(255) NOT NULL,
  `nip_at` varchar(255) NOT NULL,
  `tanggal` date NOT NULL DEFAULT current_timestamp(),
  `periode` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `realisasi_nilai` float NOT NULL,
  `review_nilai` float NOT NULL,
  `nilai` float NOT NULL,
  `waktu` time NOT NULL DEFAULT current_timestamp(),
  `nilai_nkt` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `nkt_at`
--

INSERT INTO `nkt_at` (`id_nkt_at`, `nama_at`, `nip_at`, `tanggal`, `periode`, `status`, `realisasi_nilai`, `review_nilai`, `nilai`, `waktu`, `nilai_nkt`) VALUES
(19, 'Rizki Ananda Ruvvy', '7890123456334455', '2023-05-25', 2023, 'Proses', 100, 0, 100, '20:19:11', 100);

-- --------------------------------------------------------

--
-- Table structure for table `nkt_kt`
--

CREATE TABLE `nkt_kt` (
  `id_nkt_kt` int(11) NOT NULL,
  `nama_kt` varchar(255) NOT NULL,
  `nip_kt` varchar(255) NOT NULL,
  `tanggal` date NOT NULL DEFAULT current_timestamp(),
  `periode` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `realisasi_nilai` float NOT NULL,
  `review_nilai` float NOT NULL,
  `nilai` float NOT NULL,
  `waktu` time NOT NULL DEFAULT current_timestamp(),
  `nilai_nkt` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `nkt_kt`
--

INSERT INTO `nkt_kt` (`id_nkt_kt`, `nama_kt`, `nip_kt`, `tanggal`, `periode`, `status`, `realisasi_nilai`, `review_nilai`, `nilai`, `waktu`, `nilai_nkt`) VALUES
(6, 'Alika Maharani', '5432167890123098', '2023-05-22', 2023, 'Proses', 100, 0, 100, '10:03:25', 100);

-- --------------------------------------------------------

--
-- Table structure for table `nkt_pt`
--

CREATE TABLE `nkt_pt` (
  `id_nkt_pt` int(11) NOT NULL,
  `nama_pt` varchar(255) NOT NULL,
  `nip_pt` varchar(255) NOT NULL,
  `tanggal` date NOT NULL DEFAULT current_timestamp(),
  `periode` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `realisasi_nilai` float NOT NULL,
  `review_nilai` float NOT NULL,
  `nilai` float NOT NULL,
  `waktu` time NOT NULL DEFAULT current_timestamp(),
  `nilai_nkt` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `nkt_pt`
--

INSERT INTO `nkt_pt` (`id_nkt_pt`, `nama_pt`, `nip_pt`, `tanggal`, `periode`, `status`, `realisasi_nilai`, `review_nilai`, `nilai`, `waktu`, `nilai_nkt`) VALUES
(6, 'Silvia Julianti', '0987654321091231', '2023-06-08', 2023, 'Pending', 0, 0, 87.4, '21:43:12', 87.4);

-- --------------------------------------------------------

--
-- Table structure for table `pj`
--

CREATE TABLE `pj` (
  `idPJ` int(2) NOT NULL,
  `nama_pj` varchar(50) NOT NULL,
  `nip_pj` varchar(16) NOT NULL,
  `email_pj` varchar(255) NOT NULL,
  `password_pj` varchar(150) NOT NULL,
  `periode_pj` year(4) NOT NULL,
  `no_surat_dinas_pj` varchar(20) NOT NULL,
  `idBimbingan` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pj`
--

INSERT INTO `pj` (`idPJ`, `nama_pj`, `nip_pj`, `email_pj`, `password_pj`, `periode_pj`, `no_surat_dinas_pj`, `idBimbingan`) VALUES
(4, 'Elsa Ayuningthias', '1234567891234213', 'pj@gmail.com', '1234', 2023, '1/ER/2023', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pt`
--

CREATE TABLE `pt` (
  `idPT` int(2) NOT NULL,
  `nama_pt` varchar(50) NOT NULL,
  `nip_pt` varchar(16) NOT NULL,
  `unit_kerja_pt` varchar(50) NOT NULL,
  `email_pt` varchar(255) NOT NULL,
  `password_pt` varchar(150) NOT NULL,
  `idPJ` int(2) NOT NULL,
  `periode_pt` year(4) NOT NULL,
  `no_surat_dinas_pt` varchar(20) NOT NULL,
  `idBimbingan` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pt`
--

INSERT INTO `pt` (`idPT`, `nama_pt`, `nip_pt`, `unit_kerja_pt`, `email_pt`, `password_pt`, `idPJ`, `periode_pt`, `no_surat_dinas_pt`, `idBimbingan`) VALUES
(2, 'Silvia Julianti', '0987654321091231', 'SDM', 'pt@gmail.com', '1234', 4, 2023, '1/ER/2023', 0);

-- --------------------------------------------------------

--
-- Table structure for table `sasaran_kinerja_anggota`
--

CREATE TABLE `sasaran_kinerja_anggota` (
  `id_kinerja_anggota` int(11) NOT NULL,
  `nama_at` varchar(255) NOT NULL,
  `nip_at` varchar(255) NOT NULL,
  `kuantitas` int(11) NOT NULL,
  `kualitas` int(11) NOT NULL,
  `waktu` int(255) NOT NULL,
  `kuantitas2` int(11) NOT NULL,
  `kualitas2` int(11) NOT NULL,
  `waktu2` int(255) NOT NULL,
  `periode_at` int(11) NOT NULL,
  `catatan_at` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL,
  `nilai` float DEFAULT 0,
  `nilai2` float NOT NULL DEFAULT 0,
  `tanggal` date NOT NULL DEFAULT current_timestamp(),
  `nilai_skp` float NOT NULL,
  `realisasi_kuantitas` int(11) NOT NULL,
  `realisasi_kualitas` int(11) NOT NULL,
  `realisasi_waktu` int(11) NOT NULL,
  `realisasi_kuantitas2` int(11) NOT NULL,
  `realisasi_kualitas2` int(11) NOT NULL,
  `realisasi_waktu2` int(11) NOT NULL,
  `review_kuantitas` int(11) NOT NULL DEFAULT 0,
  `review_kualitas` int(11) DEFAULT 0,
  `review_waktu` int(11) NOT NULL DEFAULT 0,
  `review_kuantitas2` int(11) NOT NULL DEFAULT 0,
  `review_kualitas2` int(11) NOT NULL DEFAULT 0,
  `review_waktu2` int(11) NOT NULL DEFAULT 0,
  `realisasi_nilai` float NOT NULL,
  `review_nilai` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sasaran_kinerja_anggota`
--

INSERT INTO `sasaran_kinerja_anggota` (`id_kinerja_anggota`, `nama_at`, `nip_at`, `kuantitas`, `kualitas`, `waktu`, `kuantitas2`, `kualitas2`, `waktu2`, `periode_at`, `catatan_at`, `status`, `nilai`, `nilai2`, `tanggal`, `nilai_skp`, `realisasi_kuantitas`, `realisasi_kualitas`, `realisasi_waktu`, `realisasi_kuantitas2`, `realisasi_kualitas2`, `realisasi_waktu2`, `review_kuantitas`, `review_kualitas`, `review_waktu`, `review_kuantitas2`, `review_kualitas2`, `review_waktu2`, `realisasi_nilai`, `review_nilai`) VALUES
(33, 'Rizki Ananda Ruvvy', '7890123456334455', 1, 100, 12, 1, 100, 12, 2023, '', 'Proses', 92, 92, '2023-05-28', 92, 1, 100, 12, 1, 100, 12, 0, 0, 0, 0, 0, 0, 92, 0),
(35, 'Rizki Ananda Ruvvy', '7890123456334455', 1, 100, 12, 1, 100, 21, 2023, '', 'Proses', 92, 92, '2023-06-11', 92, 1, 100, 12, 1, 100, 21, 0, 0, 0, 0, 0, 0, 92, 0),
(36, 'Rizki Ananda Ruvvy', '7890123456334455', 1, 100, 12, 1, 100, 12, 2023, 'fgfgfyu7867hjuiy', 'Proses', 92, 92, '2023-06-11', 92, 1, 100, 12, 1, 100, 12, 0, 0, 0, 0, 0, 0, 92, 0);

-- --------------------------------------------------------

--
-- Table structure for table `sasaran_kinerja_kt`
--

CREATE TABLE `sasaran_kinerja_kt` (
  `id_kinerja_kt` int(11) NOT NULL,
  `nama_kt` varchar(255) NOT NULL,
  `nip_kt` varchar(255) NOT NULL,
  `kuantitas` int(11) NOT NULL,
  `kualitas` int(11) NOT NULL,
  `waktu` int(255) NOT NULL,
  `kuantitas2` int(11) NOT NULL,
  `kualitas2` int(11) NOT NULL,
  `waktu2` int(255) NOT NULL,
  `kuantitas3` int(11) NOT NULL,
  `kualitas3` int(11) NOT NULL,
  `waktu3` int(11) NOT NULL,
  `kuantitas4` int(11) NOT NULL,
  `kualitas4` int(11) NOT NULL,
  `waktu4` int(11) NOT NULL,
  `periode_kt` int(11) NOT NULL,
  `catatan_kt` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL,
  `nilai` float DEFAULT 0,
  `nilai2` float NOT NULL DEFAULT 0,
  `nilai3` float DEFAULT 0,
  `nilai4` float DEFAULT 0,
  `tanggal` date NOT NULL DEFAULT current_timestamp(),
  `nilai_skp` float NOT NULL,
  `realisasi_kuantitas` int(11) NOT NULL,
  `realisasi_kualitas` int(11) NOT NULL,
  `realisasi_waktu` int(11) NOT NULL,
  `realisasi_kuantitas2` int(11) NOT NULL,
  `realisasi_kualitas2` int(11) NOT NULL,
  `realisasi_waktu2` int(11) NOT NULL,
  `realisasi_kuantitas3` int(11) NOT NULL,
  `realisasi_kualitas3` int(11) NOT NULL,
  `realisasi_waktu3` int(11) NOT NULL,
  `realisasi_kuantitas4` int(11) NOT NULL,
  `realisasi_kualitas4` int(11) NOT NULL,
  `realisasi_waktu4` int(11) NOT NULL,
  `review_kuantitas` int(11) NOT NULL DEFAULT 0,
  `review_kualitas` int(11) DEFAULT 0,
  `review_waktu` int(11) NOT NULL DEFAULT 0,
  `review_kuantitas2` int(11) NOT NULL DEFAULT 0,
  `review_kualitas2` int(11) NOT NULL DEFAULT 0,
  `review_waktu2` int(11) NOT NULL DEFAULT 0,
  `review_kuantitas3` int(11) NOT NULL,
  `review_kualitas3` int(11) NOT NULL,
  `review_waktu3` int(11) NOT NULL,
  `review_kuantitas4` int(11) NOT NULL,
  `review_kualitas4` int(11) NOT NULL,
  `review_waktu4` int(11) NOT NULL,
  `realisasi_nilai` float NOT NULL,
  `review_nilai` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sasaran_kinerja_kt`
--

INSERT INTO `sasaran_kinerja_kt` (`id_kinerja_kt`, `nama_kt`, `nip_kt`, `kuantitas`, `kualitas`, `waktu`, `kuantitas2`, `kualitas2`, `waktu2`, `kuantitas3`, `kualitas3`, `waktu3`, `kuantitas4`, `kualitas4`, `waktu4`, `periode_kt`, `catatan_kt`, `status`, `nilai`, `nilai2`, `nilai3`, `nilai4`, `tanggal`, `nilai_skp`, `realisasi_kuantitas`, `realisasi_kualitas`, `realisasi_waktu`, `realisasi_kuantitas2`, `realisasi_kualitas2`, `realisasi_waktu2`, `realisasi_kuantitas3`, `realisasi_kualitas3`, `realisasi_waktu3`, `realisasi_kuantitas4`, `realisasi_kualitas4`, `realisasi_waktu4`, `review_kuantitas`, `review_kualitas`, `review_waktu`, `review_kuantitas2`, `review_kualitas2`, `review_waktu2`, `review_kuantitas3`, `review_kualitas3`, `review_waktu3`, `review_kuantitas4`, `review_kualitas4`, `review_waktu4`, `realisasi_nilai`, `review_nilai`) VALUES
(19, 'Alika Maharani', '5432167890123098', 1, 100, 12, 1, 100, 12, 1, 100, 12, 1, 100, 12, 2023, 'fgfgfyu7867hjuiy', 'Pending', 0, 0, 0, 0, '2023-05-25', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `sasaran_kinerja_pt`
--

CREATE TABLE `sasaran_kinerja_pt` (
  `id_kinerja_pt` int(11) NOT NULL,
  `nama_pt` varchar(255) NOT NULL,
  `nip_pt` varchar(255) NOT NULL,
  `kuantitas` int(11) NOT NULL,
  `kualitas` int(11) NOT NULL,
  `waktu` int(255) NOT NULL,
  `kuantitas2` int(11) NOT NULL,
  `kualitas2` int(11) NOT NULL,
  `waktu2` int(255) NOT NULL,
  `kuantitas3` int(11) NOT NULL,
  `kualitas3` int(11) NOT NULL,
  `waktu3` int(11) NOT NULL,
  `periode_pt` int(11) NOT NULL,
  `catatan_pt` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL,
  `nilai` float DEFAULT 0,
  `nilai2` float NOT NULL DEFAULT 0,
  `nilai3` float NOT NULL,
  `tanggal` date NOT NULL DEFAULT current_timestamp(),
  `nilai_skp` float NOT NULL,
  `realisasi_kuantitas` int(11) NOT NULL,
  `realisasi_kualitas` int(11) NOT NULL,
  `realisasi_waktu` int(11) NOT NULL,
  `realisasi_kuantitas2` int(11) NOT NULL,
  `realisasi_kualitas2` int(11) NOT NULL,
  `realisasi_waktu2` int(11) NOT NULL,
  `realisasi_kuantitas3` int(11) NOT NULL,
  `realisasi_kualitas3` int(11) NOT NULL,
  `realisasi_waktu3` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sasaran_kinerja_pt`
--

INSERT INTO `sasaran_kinerja_pt` (`id_kinerja_pt`, `nama_pt`, `nip_pt`, `kuantitas`, `kualitas`, `waktu`, `kuantitas2`, `kualitas2`, `waktu2`, `kuantitas3`, `kualitas3`, `waktu3`, `periode_pt`, `catatan_pt`, `status`, `nilai`, `nilai2`, `nilai3`, `tanggal`, `nilai_skp`, `realisasi_kuantitas`, `realisasi_kualitas`, `realisasi_waktu`, `realisasi_kuantitas2`, `realisasi_kualitas2`, `realisasi_waktu2`, `realisasi_kuantitas3`, `realisasi_kualitas3`, `realisasi_waktu3`) VALUES
(8, 'Silvia Julianti', '0987654321091231', 1, 100, 12, 1, 100, 12, 1, 100, 21, 2023, '', 'Selesai', 92, 92, 92, '2023-05-25', 92, 1, 100, 12, 1, 100, 12, 1, 100, 21);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`idAdmin`);

--
-- Indexes for table `at`
--
ALTER TABLE `at`
  ADD PRIMARY KEY (`idAT`),
  ADD KEY `idKT` (`idKT`),
  ADD KEY `idPT` (`idPT`);

--
-- Indexes for table `bimbingan`
--
ALTER TABLE `bimbingan`
  ADD PRIMARY KEY (`idBimbingan`);

--
-- Indexes for table `kt`
--
ALTER TABLE `kt`
  ADD PRIMARY KEY (`idKT`),
  ADD KEY `idPJ` (`idPJ`),
  ADD KEY `idPT` (`idPT`);

--
-- Indexes for table `nilai_nkt`
--
ALTER TABLE `nilai_nkt`
  ADD PRIMARY KEY (`id_nilai_nkt`);

--
-- Indexes for table `nkp`
--
ALTER TABLE `nkp`
  ADD PRIMARY KEY (`id_nkp`);

--
-- Indexes for table `nkpp`
--
ALTER TABLE `nkpp`
  ADD PRIMARY KEY (`id_nkpp`);

--
-- Indexes for table `nkp_at`
--
ALTER TABLE `nkp_at`
  ADD PRIMARY KEY (`id_nkp_at`);

--
-- Indexes for table `nkp_kt`
--
ALTER TABLE `nkp_kt`
  ADD PRIMARY KEY (`id_nkp_kt`);

--
-- Indexes for table `nkp_pt`
--
ALTER TABLE `nkp_pt`
  ADD PRIMARY KEY (`id_nkp_pt`);

--
-- Indexes for table `nkt`
--
ALTER TABLE `nkt`
  ADD PRIMARY KEY (`id_nkt`);

--
-- Indexes for table `nkt_at`
--
ALTER TABLE `nkt_at`
  ADD PRIMARY KEY (`id_nkt_at`);

--
-- Indexes for table `nkt_kt`
--
ALTER TABLE `nkt_kt`
  ADD PRIMARY KEY (`id_nkt_kt`);

--
-- Indexes for table `nkt_pt`
--
ALTER TABLE `nkt_pt`
  ADD PRIMARY KEY (`id_nkt_pt`);

--
-- Indexes for table `pj`
--
ALTER TABLE `pj`
  ADD PRIMARY KEY (`idPJ`);

--
-- Indexes for table `pt`
--
ALTER TABLE `pt`
  ADD PRIMARY KEY (`idPT`),
  ADD KEY `idPJ` (`idPJ`);

--
-- Indexes for table `sasaran_kinerja_anggota`
--
ALTER TABLE `sasaran_kinerja_anggota`
  ADD PRIMARY KEY (`id_kinerja_anggota`);

--
-- Indexes for table `sasaran_kinerja_kt`
--
ALTER TABLE `sasaran_kinerja_kt`
  ADD PRIMARY KEY (`id_kinerja_kt`);

--
-- Indexes for table `sasaran_kinerja_pt`
--
ALTER TABLE `sasaran_kinerja_pt`
  ADD PRIMARY KEY (`id_kinerja_pt`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `idAdmin` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `at`
--
ALTER TABLE `at`
  MODIFY `idAT` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `bimbingan`
--
ALTER TABLE `bimbingan`
  MODIFY `idBimbingan` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `kt`
--
ALTER TABLE `kt`
  MODIFY `idKT` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `nilai_nkt`
--
ALTER TABLE `nilai_nkt`
  MODIFY `id_nilai_nkt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `nkp`
--
ALTER TABLE `nkp`
  MODIFY `id_nkp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `nkpp`
--
ALTER TABLE `nkpp`
  MODIFY `id_nkpp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `nkp_at`
--
ALTER TABLE `nkp_at`
  MODIFY `id_nkp_at` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `nkp_kt`
--
ALTER TABLE `nkp_kt`
  MODIFY `id_nkp_kt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `nkp_pt`
--
ALTER TABLE `nkp_pt`
  MODIFY `id_nkp_pt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `nkt`
--
ALTER TABLE `nkt`
  MODIFY `id_nkt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `nkt_at`
--
ALTER TABLE `nkt_at`
  MODIFY `id_nkt_at` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `nkt_kt`
--
ALTER TABLE `nkt_kt`
  MODIFY `id_nkt_kt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `nkt_pt`
--
ALTER TABLE `nkt_pt`
  MODIFY `id_nkt_pt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pj`
--
ALTER TABLE `pj`
  MODIFY `idPJ` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pt`
--
ALTER TABLE `pt`
  MODIFY `idPT` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sasaran_kinerja_anggota`
--
ALTER TABLE `sasaran_kinerja_anggota`
  MODIFY `id_kinerja_anggota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `sasaran_kinerja_kt`
--
ALTER TABLE `sasaran_kinerja_kt`
  MODIFY `id_kinerja_kt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `sasaran_kinerja_pt`
--
ALTER TABLE `sasaran_kinerja_pt`
  MODIFY `id_kinerja_pt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `at`
--
ALTER TABLE `at`
  ADD CONSTRAINT `at_ibfk_1` FOREIGN KEY (`idKT`) REFERENCES `kt` (`idKT`),
  ADD CONSTRAINT `at_ibfk_2` FOREIGN KEY (`idPT`) REFERENCES `pt` (`idPT`);

--
-- Constraints for table `kt`
--
ALTER TABLE `kt`
  ADD CONSTRAINT `kt_ibfk_1` FOREIGN KEY (`idPJ`) REFERENCES `pj` (`idPJ`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `kt_ibfk_2` FOREIGN KEY (`idPT`) REFERENCES `pt` (`idPT`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pt`
--
ALTER TABLE `pt`
  ADD CONSTRAINT `pt_ibfk_1` FOREIGN KEY (`idPJ`) REFERENCES `pj` (`idPJ`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
