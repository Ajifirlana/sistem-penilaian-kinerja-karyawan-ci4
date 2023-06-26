-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versi server:                 5.7.33 - MySQL Community Server (GPL)
-- OS Server:                    Win64
-- HeidiSQL Versi:               11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Membuang struktur basisdata untuk db_nkpp
CREATE DATABASE IF NOT EXISTS `db_nkpp` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `db_nkpp`;

-- membuang struktur untuk table db_nkpp.admin
CREATE TABLE IF NOT EXISTS `admin` (
  `idAdmin` int(2) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Membuang data untuk tabel db_nkpp.admin: ~0 rows (lebih kurang)
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` (`idAdmin`, `nama`, `email`, `password`) VALUES
	(1, 'admin', 'admin@admin.com', 'admin');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;

-- membuang struktur untuk table db_nkpp.at
CREATE TABLE IF NOT EXISTS `at` (
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Membuang data untuk tabel db_nkpp.at: ~0 rows (lebih kurang)
/*!40000 ALTER TABLE `at` DISABLE KEYS */;
INSERT INTO `at` (`idAT`, `nama_at`, `nip_at`, `unit_kerja_at`, `idKT`, `idPT`, `email_at`, `password_at`, `periode_at`, `no_surat_dinas_at`, `idBimbingan`) VALUES
	(5, 'Rizki Ananda Ruvvy', '7890123456334455', 'Humas dan TU', 3, 2, 'at@gmail.com', '1234', '2023', '1/ER/2023', NULL);
/*!40000 ALTER TABLE `at` ENABLE KEYS */;

-- membuang struktur untuk table db_nkpp.kt
CREATE TABLE IF NOT EXISTS `kt` (
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Membuang data untuk tabel db_nkpp.kt: ~0 rows (lebih kurang)
/*!40000 ALTER TABLE `kt` DISABLE KEYS */;
INSERT INTO `kt` (`idKT`, `nama_kt`, `nip_kt`, `unit_kerja_kt`, `idPT`, `idPJ`, `email_kt`, `password_kt`, `periode_kt`, `no_surat_dinas_kt`, `idBimbingan`) VALUES
	(3, 'Alika Maharani', '5432167890123098', 'Server', 2, 4, 'kt@gmail.com', '1234', '2023', '1/ER/2023', 0);
/*!40000 ALTER TABLE `kt` ENABLE KEYS */;

-- membuang struktur untuk table db_nkpp.nkp
CREATE TABLE IF NOT EXISTS `nkp` (
  `id_nkp` int(11) NOT NULL,
  `soal` varchar(255) NOT NULL,
  `melebihi` int(11) DEFAULT NULL,
  `memenuhi` int(11) NOT NULL,
  `perlu_perhatian` int(11) NOT NULL,
  `tidak_memenuhi` int(11) NOT NULL,
  `bagian` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Membuang data untuk tabel db_nkpp.nkp: ~28 rows (lebih kurang)
/*!40000 ALTER TABLE `nkp` DISABLE KEYS */;
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
/*!40000 ALTER TABLE `nkp` ENABLE KEYS */;

-- membuang struktur untuk table db_nkpp.nkpp
CREATE TABLE IF NOT EXISTS `nkpp` (
  `id_nkpp` int(11) NOT NULL,
  `tanggal` varchar(255) DEFAULT NULL,
  `periode` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `nilai_sasaran` float DEFAULT NULL,
  `nilai_nkp` float DEFAULT NULL,
  `nilai_nkt` float DEFAULT NULL,
  `nilai_kinerja_sasaran` float DEFAULT NULL,
  `nilai_kinerja_nkp` float DEFAULT NULL,
  `nilai_kinerja_nkt` float DEFAULT NULL,
  `nkpp` float DEFAULT '0',
  `bagian` varchar(255) DEFAULT NULL,
  `nip` varchar(255) NOT NULL,
  `id_nkp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Membuang data untuk tabel db_nkpp.nkpp: ~6 rows (lebih kurang)
/*!40000 ALTER TABLE `nkpp` DISABLE KEYS */;
INSERT INTO `nkpp` (`id_nkpp`, `tanggal`, `periode`, `status`, `nilai_sasaran`, `nilai_nkp`, `nilai_nkt`, `nilai_kinerja_sasaran`, `nilai_kinerja_nkp`, `nilai_kinerja_nkt`, `nkpp`, `bagian`, `nip`, `id_nkp`) VALUES
	(34, '2023-05-25', '2023', 'Pending', NULL, 100, NULL, NULL, 20, NULL, 0, 'at', '7890123456334455', 0),
	(35, '2023-05-25', '2023', 'Proses', 33, 100, 100, 10, 20, 100, 0, 'at', '7890123456334455', 25),
	(36, '2023-06-08', '2023', 'Pending', NULL, 85, NULL, NULL, 17, NULL, 0, 'at', '7890123456334455', 0),
	(37, '2023-06-08', '2023', 'Pending', NULL, NULL, 100, NULL, NULL, 20, 0, 'at', '7890123456334455', 0),
	(38, '2023-06-11', '2023', 'Pending', NULL, 98.875, NULL, NULL, 19.775, NULL, 0, 'at', '7890123456334455', 0),
	(33, '2023-05-25', '2023', 'Proses', 33, 100, 100, 10, 20, 100, 0, 'kt', '5432167890123098', 25);
/*!40000 ALTER TABLE `nkpp` ENABLE KEYS */;

-- membuang struktur untuk table db_nkpp.nkp_at
CREATE TABLE IF NOT EXISTS `nkp_at` (
  `id_nkp_at` int(11) NOT NULL,
  `nama_at` varchar(255) NOT NULL,
  `nip_at` varchar(255) NOT NULL,
  `tanggal` varchar(255) DEFAULT NULL,
  `periode` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `realisasi_nilai` float NOT NULL,
  `review_nilai` float NOT NULL,
  `nilai` float NOT NULL,
  `nilai_nkp` float NOT NULL,
  `nilai_kinerja_nkp` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Membuang data untuk tabel db_nkpp.nkp_at: ~0 rows (lebih kurang)
/*!40000 ALTER TABLE `nkp_at` DISABLE KEYS */;
INSERT INTO `nkp_at` (`id_nkp_at`, `nama_at`, `nip_at`, `tanggal`, `periode`, `status`, `realisasi_nilai`, `review_nilai`, `nilai`, `nilai_nkp`, `nilai_kinerja_nkp`) VALUES
	(27, 'Rizki Ananda Ruvvy', '7890123456334455', '2023-06-11', 2023, 'Pending', 0, 0, 98.875, 98.875, 0);
/*!40000 ALTER TABLE `nkp_at` ENABLE KEYS */;

-- membuang struktur untuk table db_nkpp.nkp_kt
CREATE TABLE IF NOT EXISTS `nkp_kt` (
  `id_nkp_kt` int(11) NOT NULL,
  `nama_kt` varchar(255) NOT NULL,
  `nip_kt` varchar(255) NOT NULL,
  `tanggal` varchar(255) DEFAULT NULL,
  `periode` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `realisasi_nilai` float NOT NULL,
  `review_nilai` float NOT NULL,
  `nilai` float NOT NULL,
  `nilai_nkp` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Membuang data untuk tabel db_nkpp.nkp_kt: ~1 rows (lebih kurang)
/*!40000 ALTER TABLE `nkp_kt` DISABLE KEYS */;
INSERT INTO `nkp_kt` (`id_nkp_kt`, `nama_kt`, `nip_kt`, `tanggal`, `periode`, `status`, `realisasi_nilai`, `review_nilai`, `nilai`, `nilai_nkp`) VALUES
	(11, 'Alika Maharani', '5432167890123098', '2023-05-24', 2023, 'Proses', 100, 0, 100, 100);
/*!40000 ALTER TABLE `nkp_kt` ENABLE KEYS */;

-- membuang struktur untuk table db_nkpp.nkp_pt
CREATE TABLE IF NOT EXISTS `nkp_pt` (
  `id_nkp_pt` int(11) NOT NULL,
  `nama_pt` varchar(255) NOT NULL,
  `nip_pt` varchar(255) NOT NULL,
  `tanggal` varchar(255) DEFAULT NULL,
  `periode` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `realisasi_nilai` float NOT NULL,
  `review_nilai` float NOT NULL,
  `nilai` float NOT NULL,
  `nilai_nkp` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Membuang data untuk tabel db_nkpp.nkp_pt: ~1 rows (lebih kurang)
/*!40000 ALTER TABLE `nkp_pt` DISABLE KEYS */;
INSERT INTO `nkp_pt` (`id_nkp_pt`, `nama_pt`, `nip_pt`, `tanggal`, `periode`, `status`, `realisasi_nilai`, `review_nilai`, `nilai`, `nilai_nkp`) VALUES
	(8, 'Silvia Julianti', '0987654321091231', '2023-05-22', 2023, 'Pending', 0, 0, 100, 100);
/*!40000 ALTER TABLE `nkp_pt` ENABLE KEYS */;

-- membuang struktur untuk table db_nkpp.nkp_relation
CREATE TABLE IF NOT EXISTS `nkp_relation` (
  `bagian` varchar(50) DEFAULT NULL,
  `id` int(11) DEFAULT NULL,
  `melebihi_rel` int(11) DEFAULT NULL,
  `memenuhi_rel` int(11) DEFAULT NULL,
  `perlu_perhatian_rel` int(11) DEFAULT NULL,
  `tidak_memenuhi_rel` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Membuang data untuk tabel db_nkpp.nkp_relation: ~3 rows (lebih kurang)
/*!40000 ALTER TABLE `nkp_relation` DISABLE KEYS */;
INSERT INTO `nkp_relation` (`bagian`, `id`, `melebihi_rel`, `memenuhi_rel`, `perlu_perhatian_rel`, `tidak_memenuhi_rel`) VALUES
	('at', 1, 99, 85, NULL, NULL),
	('at', 2, 100, NULL, NULL, NULL),
	('at', 3, 0, NULL, 70, NULL);
/*!40000 ALTER TABLE `nkp_relation` ENABLE KEYS */;

-- membuang struktur untuk table db_nkpp.nkt
CREATE TABLE IF NOT EXISTS `nkt` (
  `id_nkt` int(11) NOT NULL,
  `soal` varchar(255) DEFAULT NULL,
  `melebihi` int(11) DEFAULT '100',
  `memenuhi` int(11) DEFAULT '85',
  `perlu_perhatian` int(11) DEFAULT '70',
  `tidak_memenuhi` int(11) DEFAULT '55',
  `bagian` varchar(255) DEFAULT NULL,
  `nilai` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Membuang data untuk tabel db_nkpp.nkt: ~1 rows (lebih kurang)
/*!40000 ALTER TABLE `nkt` DISABLE KEYS */;
INSERT INTO `nkt` (`id_nkt`, `soal`, `melebihi`, `memenuhi`, `perlu_perhatian`, `tidak_memenuhi`, `bagian`, `nilai`) VALUES
	(1, 'Mampu memahami proses bisnis sesuai pembagian tugas dalam PKP', 90, 80, 60, 55, 'at', 85);
/*!40000 ALTER TABLE `nkt` ENABLE KEYS */;

-- membuang struktur untuk table db_nkpp.nkt_at
CREATE TABLE IF NOT EXISTS `nkt_at` (
  `id_nkt_at` int(11) NOT NULL,
  `nama_at` varchar(255) NOT NULL,
  `nip_at` varchar(255) NOT NULL,
  `tanggal` varchar(11) DEFAULT NULL,
  `periode` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `realisasi_nilai` float NOT NULL,
  `review_nilai` float NOT NULL,
  `nilai` float NOT NULL,
  `waktu` varchar(11) DEFAULT NULL,
  `nilai_nkt` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Membuang data untuk tabel db_nkpp.nkt_at: ~0 rows (lebih kurang)
/*!40000 ALTER TABLE `nkt_at` DISABLE KEYS */;
INSERT INTO `nkt_at` (`id_nkt_at`, `nama_at`, `nip_at`, `tanggal`, `periode`, `status`, `realisasi_nilai`, `review_nilai`, `nilai`, `waktu`, `nilai_nkt`) VALUES
	(19, 'Rizki Ananda Ruvvy', '7890123456334455', '2023-05-25', 2023, 'Pending', 100, 0, 77.35, '20:19:11', 100);
/*!40000 ALTER TABLE `nkt_at` ENABLE KEYS */;

-- membuang struktur untuk table db_nkpp.nkt_pt
CREATE TABLE IF NOT EXISTS `nkt_pt` (
  `id_nkt_pt` int(11) NOT NULL,
  `nama_pt` varchar(255) NOT NULL,
  `nip_pt` varchar(255) NOT NULL,
  `tanggal` varchar(255) NOT NULL,
  `periode` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `realisasi_nilai` float NOT NULL,
  `review_nilai` float NOT NULL,
  `nilai` float NOT NULL,
  `waktu` varchar(255) NOT NULL,
  `nilai_nkt` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Membuang data untuk tabel db_nkpp.nkt_pt: ~1 rows (lebih kurang)
/*!40000 ALTER TABLE `nkt_pt` DISABLE KEYS */;
INSERT INTO `nkt_pt` (`id_nkt_pt`, `nama_pt`, `nip_pt`, `tanggal`, `periode`, `status`, `realisasi_nilai`, `review_nilai`, `nilai`, `waktu`, `nilai_nkt`) VALUES
	(6, 'Silvia Julianti', '0987654321091231', '2023-06-08', 2023, 'Pending', 0, 0, 87.4, '21:43:12', 87.4);
/*!40000 ALTER TABLE `nkt_pt` ENABLE KEYS */;

-- membuang struktur untuk table db_nkpp.pj
CREATE TABLE IF NOT EXISTS `pj` (
  `idPJ` int(2) NOT NULL,
  `nama_pj` varchar(50) NOT NULL,
  `nip_pj` varchar(16) NOT NULL,
  `email_pj` varchar(255) NOT NULL,
  `password_pj` varchar(150) NOT NULL,
  `periode_pj` year(4) NOT NULL,
  `no_surat_dinas_pj` varchar(20) NOT NULL,
  `idBimbingan` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Membuang data untuk tabel db_nkpp.pj: ~0 rows (lebih kurang)
/*!40000 ALTER TABLE `pj` DISABLE KEYS */;
INSERT INTO `pj` (`idPJ`, `nama_pj`, `nip_pj`, `email_pj`, `password_pj`, `periode_pj`, `no_surat_dinas_pj`, `idBimbingan`) VALUES
	(4, 'Elsa Ayuningthias', '1234567891234213', 'pj@gmail.com', '1234', '2023', '1/ER/2023', NULL);
/*!40000 ALTER TABLE `pj` ENABLE KEYS */;

-- membuang struktur untuk table db_nkpp.pt
CREATE TABLE IF NOT EXISTS `pt` (
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Membuang data untuk tabel db_nkpp.pt: ~0 rows (lebih kurang)
/*!40000 ALTER TABLE `pt` DISABLE KEYS */;
INSERT INTO `pt` (`idPT`, `nama_pt`, `nip_pt`, `unit_kerja_pt`, `email_pt`, `password_pt`, `idPJ`, `periode_pt`, `no_surat_dinas_pt`, `idBimbingan`) VALUES
	(2, 'Silvia Julianti', '0987654321091231', 'SDM', 'pt@gmail.com', '1234', 4, '2023', '1/ER/2023', 0);
/*!40000 ALTER TABLE `pt` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
