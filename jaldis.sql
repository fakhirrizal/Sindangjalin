-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 13 Agu 2018 pada 15.00
-- Versi Server: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jaldis`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `agenda`
--

CREATE TABLE `agenda` (
  `id` int(9) NOT NULL,
  `kode_agenda` varchar(7) NOT NULL,
  `tanggal` date NOT NULL,
  `jam` time NOT NULL,
  `tempat` varchar(200) NOT NULL,
  `acara` varchar(300) NOT NULL,
  `materi` varchar(300) NOT NULL,
  `peserta` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `agenda`
--

INSERT INTO `agenda` (`id`, `kode_agenda`, `tanggal`, `jam`, `tempat`, `acara`, `materi`, `peserta`) VALUES
(1, 'A-00001', '2018-05-30', '10:00:00', 'R. Rapat Paripurna DPRD', 'Menerima Kunjungan Kerja', 'DPRD Kota Bandung membaha sterkait Raperda tentang Bangunan Gedung<br>DPRD Kab. Banjar membahas terkait Investasi dan Pengembangan Pariwisata untuk Peningkatan PAD', 'Pimpinan DPRD, Anggota Komisi B, Anggota Komisi D, Anggota BPP, OPD'),
(2, 'A-00002', '2018-06-05', '10:00:00', 'R. Rapat Paripurna DPRD', 'Menerima Kunjungan Kerja', 'DPRD Kota Bekasi membahas terkait Pembangunan, Pengelolaan Air Minum dan Pertanian<br>DPRD Kabupaten Organ Komering Ulu membahas terkait Keberadaan Anak Jalanan dan Pengemis dalam kaitannya dengan Perkembangan Perkotaan', 'Pimpinan DPRD, Anggota Komisi C, Anggota Komisi D, OPD'),
(3, 'A-00003', '2018-06-07', '15:00:00', 'Studio TVku', 'Dialog Interaktif', 'Kesiapan Jalur Mudik Lebaran di Kota Semarang Tahun 2018', 'Ketua DPRD, Kepala Dishub, Pakar Transportasi'),
(5, 'A-00004', '2018-07-11', '10:00:00', 'Ruang Serbaguna 2', 'Menerima Kunjungan Kerja', 'Membahas Penyusunan Tata Tertib DPRD dan KUA PPAS', 'DPRD Kabupaten Muaro Jambi '),
(6, 'A-00005', '2018-07-11', '10:00:00', 'Ruang Serbaguna 2 DPRD Kota Semarang', 'Menerima Kunjungan Kerja  DPRD Kab. Jombang', 'Implementasi, Target Perda tentang Kawasan Tanpa Rokok, Fungsi Pengawasan DPRD terhadap Perda Kawasan Tanpa Rokok, dan Dampak Pelaksanaan Perda tentang Asap Rokok', 'Anggota Banggar, Anggota Komisi D, Anggota BPP, OPD'),
(7, 'A-00006', '2018-07-13', '10:00:00', 'R.Rapat Paripurna DPRD', 'Menerima Kunjungan kerja DPRD Kab. Malang', 'Membahas terkait Pengembangan Investasi', 'Pimpinan DPRD, Anggota Komisi A, Anggota Komisi B, OPD'),
(8, 'A-00007', '2018-07-13', '10:00:00', 'R.Rapat Paripurna DPRD', 'Menerima Kunjungan kerja DPRD Kab. Jember ', 'Membahas terkait Be Smart City Dan System Penerimaan Peserta Didik Tingkat SD dan SMP', 'Pimpinan DPRD, Anggota Komisi A, Anggota Komisi B, OPD'),
(9, 'A-00008', '2018-07-13', '10:00:00', 'R.Rapat Paripurna ', 'Menerima Kunjungan kerja DPRD DPRD Kab. Sidoarjo ', 'Membahas terkait Pendapatan pajak dan Retribusi Daerah serta pendapatan lain', 'Pimpinan DPRD, Anggota Komisi A, Anggota Komisi B, OPD'),
(10, 'A-00009', '2018-07-25', '09:00:00', 'Studio TVku', 'Dialog Interaktif ', 'Dialog Interaktif Bersama DPRD Kota Semarang yang disiarkan melalui media Electronik ', 'Umum'),
(11, 'A-00010', '2018-08-02', '10:00:00', 'Ruang Serbaguna 2 DPRD Kota Semarang', 'Menerima Kunjungan Kerja  DPRD Kab. Pasuruan', 'Realisasi semester Pertama APBD th 2018', 'Anggota Komisi D, Anggota BPP, OPD'),
(12, 'A-00011', '2018-08-02', '22:00:00', 'Ruang Serbaguna 2 DPRD Kota Semarang', 'Menerima Kunjungan Kerja  DPRD Kab. Blitar membahas terkait Penyusunan Tata Tertib', 'Penyusunan Tata Tertib', 'Anggota Komisi D, Anggota BPP, OPD'),
(13, 'A-00012', '2018-08-03', '10:00:00', 'Ruang Serbaguna 2 DPRD Kota Semarang', 'Menerima Kunjungan kerja DPRD Kota Batu', 'Membahas terkait Penyusunan Tata Tertib DPRD', 'Pimpinan DPRD, Anggota BPP'),
(14, 'A-00013', '2018-08-03', '14:00:00', 'Ruang Rapat Paripurna  DPRD Kota Semarang', 'Rapat Paripurna', '1. Pembicaraan Tk.II Penetapan Keputusan DPRD terhadap, 2. Permohonan Persetujuan MSP Sister City Semarang-Brisbane, 3. Rancangan TPP TA 2019', 'Pimpinan DPRD,  Anggota DPRD, OPD'),
(15, 'A-00014', '2018-08-03', '14:00:00', 'Ruang Rapat Paripurna  DPRD Kota Semarang', 'Penandatanganan Nota Kesepakatan', 'Penadatanganan Nota Kesepakatan antara Walikota Semarang dengan DPRD Kota Semarang tentang KUA TA.2019 dan PPAS TA.2019', 'Anggota DPRD'),
(16, 'A-00015', '2018-07-31', '10:00:00', 'Ruang Rapat Paripurna  DPRD Kota Semarang', 'Rapat Badan Anggaran', 'Sinkronisasi hasil pembahasan Rancangan KUA dan PPAS serta TPP TA.2019', 'Agggota Banggar, OPD'),
(17, 'A-00016', '2018-07-30', '09:00:00', 'Ruang Serbaguna 2 DPRD Kota Semarang', 'RAPAT BPP tentang FGD Kajian ', '<ul><li>Optimalisasi Peran DPRD dalam Pembangunan Infrastruktur</li><li>Optimalisasi Peran Perusahaan untuk ikut Penanganan Kemiskinan Masyarakat Perkotaan</li></ul>', 'Anggota BPP, OPD, Pihak Ketiga'),
(18, 'A-00017', '2018-07-30', '10:00:00', 'Ruang Rapat Komis a', 'Rapat Komisi A DPRD', 'Membahas kajian tentang Sistem Akuntabilitas Kinerja Istansi Pemerintah di Kota Semarang', 'Anggota Komisi A, OPD, Tim Ahli DPRD, Pihak Ketiga'),
(19, 'A-00018', '2018-07-30', '22:00:00', 'Ruang Rapat Komisi D', 'Rapat Komisi D', 'FGD Komisi D DPRD Kota Semarang dengan Pihak Ketiga selaku Penyusun Kajian tentang Penanganan Anak Autis dan Disabilitas', 'Anggota Komisi D, OPD, Pihak Ketiga'),
(20, 'A-00019', '2018-07-30', '09:03:00', 'Ruang Rapat Komisi B', 'Rapat Komisi B ', 'Membahas rispoda tentang potensi pendapatan BBNKB', 'Anggota Komisi B, OPD, Tim Ahli DPRD, Pihak Ketiga'),
(21, 'A-00020', '2018-07-30', '00:00:00', 'Ruang Rapat Komisi B', 'Rapat Komisi B', 'Membahas kajian tentang sentralisasi PKL, - Membahas rispoda tentang potensi pendapatan tera ulang kemetrologian ', 'Anggota Komisi B, OPD,Tim Ahli DPRD, Pihak Ketiga'),
(22, 'A-00021', '2018-07-27', '19:00:00', 'Ruang Rapat Paripurna  DPRD Kota Semarang', 'Rapat Paripurna ', 'Pembicaraan Tk. II Penetapan Keputusan DPRD atas Raperda tentang Pertanggungjawaban Pelaksanaan APBD Kota Semarangb TA.2017', 'Anggota DPRD, OPD');

-- --------------------------------------------------------

--
-- Struktur dari tabel `akun`
--

CREATE TABLE `akun` (
  `id` int(9) NOT NULL,
  `kode_jaldis` varchar(7) NOT NULL,
  `kode_rekening` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `akun`
--

INSERT INTO `akun` (`id`, `kode_jaldis`, `kode_rekening`) VALUES
(1, 'J-10024', 2),
(2, 'J-10024', 3),
(3, 'J-10025', 2),
(4, 'J-10025', 3),
(5, 'J-10026', 2),
(6, 'J-10026', 3),
(7, 'J-10027', 2),
(8, 'J-10027', 3),
(9, 'J-10028', 2),
(10, 'J-10029', 3),
(11, 'J-10030', 2),
(12, 'J-10030', 3),
(13, 'J-10031', 2),
(14, 'J-10032', 2),
(15, 'J-10033', 2),
(16, 'J-10033', 3),
(17, 'J-10034', 2),
(18, 'J-10035', 2),
(19, 'J-10036', 2),
(20, 'J-10037', 2),
(21, 'J-10037', 3),
(22, 'J-10038', 2),
(23, 'J-10038', 3),
(24, 'J-10039', 2),
(25, 'J-10040', 2),
(26, 'J-10040', 3),
(27, 'J-10041', 3),
(29, 'J-10041', 2),
(30, 'J-10042', 2),
(31, 'J-10043', 5),
(32, 'J-10044', 5),
(33, 'J-10045', 5),
(34, 'J-10045', 6),
(35, 'J-10046', 5),
(36, 'J-10046', 6),
(37, 'J-10045', 3),
(38, 'J-10047', 5),
(39, 'J-10047', 6),
(40, 'J-10048', 5),
(41, 'J-10049', 5),
(42, 'J-10049', 6),
(43, 'J-10049', 2),
(44, 'J-10050', 3),
(45, 'J-10051', 2),
(46, 'J-10052', 6),
(47, 'J-10053', 3),
(48, 'J-10054', 3),
(49, 'J-10055', 2),
(50, 'J-10055', 5),
(51, 'J-10056', 2),
(52, 'J-10057', 2),
(53, 'J-10058', 0),
(54, 'J-10059', 0),
(55, 'J-10060', 2),
(56, 'J-10061', 3),
(57, 'J-10062', 5),
(58, 'J-10063', 5),
(59, 'J-10064', 5),
(60, 'J-10065', 6),
(61, 'J-10066', 6),
(62, 'J-10067', 6),
(63, 'J-10068', 6),
(64, 'J-10069', 6),
(65, 'J-10070', 6),
(66, 'J-10071', 6),
(67, 'J-10072', 6);

-- --------------------------------------------------------

--
-- Struktur dari tabel `anggota`
--

CREATE TABLE `anggota` (
  `id` int(9) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nip` varchar(20) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `partai` varchar(2) DEFAULT NULL,
  `fraksi` varchar(2) DEFAULT NULL,
  `id_komisi` varchar(7) DEFAULT NULL,
  `jabatan_komisi` varchar(200) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `golongan` varchar(10) NOT NULL,
  `pangkat` varchar(30) NOT NULL,
  `foto` varchar(20) NOT NULL,
  `keterangan` varchar(24) NOT NULL,
  `status` enum('1','0') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `anggota`
--

INSERT INTO `anggota` (`id`, `nama`, `nip`, `no_hp`, `email`, `partai`, `fraksi`, `id_komisi`, `jabatan_komisi`, `jabatan`, `golongan`, `pangkat`, `foto`, `keterangan`, `status`) VALUES
(1, 'H.Supriyadi, S.Sos', '', '1', '1@gmail.com', NULL, '4', 'K-00001', 'ketua', 'Ketua', '', '', '', 'anggota legislatif', '1'),
(2, 'H.Joko Santoso, SE', '', '2', '2@gmail.com', NULL, '6', 'K-00002', 'Anggota', 'Wakil Ketua', '', '', '', 'anggota legislatif', '1'),
(3, 'H.Wiwin Subiyono, SH  ', '', '3', '3@gmail.com', NULL, '7', 'K-00002', 'Anggota', 'Wakil Ketua', '', '', '', 'anggota legislatif', '1'),
(4, 'H.Agung Budi Margono, ST.MT', '', '4', '4@gmail.com', NULL, '3', 'K-00003', '', 'Wakil Ketua', '', '', '', 'anggota legislatif', '1'),
(5, 'Joko Susilo', '', '5', '5@gmail.com', NULL, '4', 'K-00001', '', 'Anggota', '', '', '', 'anggota legislatif', '1'),
(6, 'H.M. Rukiyanto AB,SH', '', '6', '6@gmail.com', NULL, '4', 'K-00002', '', 'Anggota', '', '', '', 'anggota legislatif', '1'),
(7, 'Trifena Weyatin Soehendro, S.Kom ', '', '7', '7@gmail.com', NULL, '4', 'K-00002', 'Anggota', 'Anggota', '', '', '', 'anggota legislatif', '1'),
(8, 'Hanik Khoiru Solikah', '', '8', '8@gmail.com', NULL, '4', 'K-00003', '', 'Anggota', '', '', '', 'anggota legislatif', '1'),
(9, 'Dyah Ratna Harimurti, S.Sos', '', '9', '9@gmail.com', NULL, '4', 'K-00003', '', 'Anggota', '', '', '', 'anggota legislatif', '1'),
(10, 'H.Meidiana Koswara, A.Md', '', '10', '10@gmail.com', NULL, '4', 'K-00001', 'Ketua Komisi A', 'Anggota', '', '', '', 'anggota legislatif', '1'),
(11, 'H.Dibyo Sutiman, SH', '', '11', '11@gmail.com', NULL, '4', 'K-00002', '', 'Anggota', '', '', '', 'anggota legislatif', '1'),
(12, 'Fajar Rinawan Sitorus, SH', '', '12', '12@gmail.com', NULL, '4', 'K-00002', 'Anggota', 'Anggota', '', '', '', 'anggota legislatif', '1'),
(13, 'Nungki Sundari, SE', '', '13', '13@gmai.com', NULL, '4', 'K-00003', 'Anggota', 'Anggota', '', '', '', 'anggota legislatif', '1'),
(14, 'V.Djoko Riyanto, SE', '', '14', '14@gmail.com', NULL, '4', 'K-00003', 'Anggota', 'Anggota', '', '', '', 'anggota legislatif', '1'),
(15, 'Giyanto', '', '15', '15@gmail.com', NULL, '4', 'K-00001', '', 'Anggota', '', '', '', 'anggota legislatif', '1'),
(16, 'Kadar Lusman, SE', '', '16', '16@gmail.com', NULL, '4', 'K-00002', '', 'Anggota', '', '', '', 'anggota legislatif', '1'),
(17, 'R.Yuwanto', '', '17', '17@gamil.com', NULL, '4', 'K-00002', '', 'Anggota', '', '', '', 'anggota legislatif', '1'),
(18, 'HJ.Hesti Wahyuningsih', '', '18', '18@gmail.com', NULL, '4', 'K-00003', '', 'Anggota', '', '', '', 'anggota legislatif', '1'),
(19, 'Budiharo, ST,MM', '', '19', '19@gmail.com', NULL, '4', 'K-00001', 'Anggota', 'Anggota', '', '', '', 'anggota legislatif', '1'),
(20, 'dr.Wilujeng Riningrum', '', '20', '20@gmail.com', NULL, '4', NULL, '', 'Anggota', '', '', '', 'anggota legislatif', '0'),
(21, 'dr.Wilujeng Riningrum', '', '20', '20@gmail.com', NULL, '6', 'K-00002', '', 'Anggota', '', '', '', 'anggota legislatif', '1'),
(22, 'Hermawan Sulis Susnarko, SE', '', '21', '21@gmail.com', NULL, '6', 'K-00002', 'Anggota', 'Anggota', '', '', '', 'anggota legislatif', '1'),
(23, 'Nunung Sriyanto, SH, MM', '', '22', '22@gmail.com', NULL, '6', 'K-00003', '', 'Anggota', '', '', '', 'anggota legislatif', '1'),
(24, 'H.Muhammad Chafid', '', '23', '23@gmail.com', NULL, '6', 'K-00001', '', 'Anggota', '', '', '', 'anggota legislatif', '1'),
(25, 'H.Suharto Masri', '', '24', '24@gamil.com', NULL, '6', 'K-00002', 'Sekretaris Ketua Komisi A', 'Anggota', '', '', '', 'anggota legislatif', '1'),
(26, 'Mualim, S.Pd.M.M', '', '25', '25@gmail.com', NULL, '6', 'K-00002', '', 'Anggota', '', '', '', 'anggota legislatif', '1'),
(27, 'Laser Narindro, ST', '', '26', '26@gmail.com', NULL, '7', 'K-00003', '', 'Anggota', '', '', '', 'anggota legislatif', '1'),
(28, 'Swasti Asgawasti, S.Psi', '', '27', '27@gmail.com', NULL, '7', 'K-00001', 'Wakil Ketua Komisi A', 'Anggota', '', '', '', 'anggota legislatif', '1'),
(29, 'H.Sugi Hartono, S.Sos.I', '', '28', '28@gmail.com', NULL, '7', 'K-00002', '', 'Anggota', '', '', '', 'anggota legislatif', '1'),
(30, 'Danur Rispriyanto', '', '29', '29@gmail.com', NULL, '7', 'K-00002', '', 'Anggota', '', '', '', 'anggota legislatif', '1'),
(31, 'Suciati, SKM', '', '30', '30@gmail.com', NULL, '7', 'K-00003', '', 'Anggota', '', '', '', 'anggota legislatif', '1'),
(32, 'do', '', '31', '31@gmail.com', NULL, '3', 'K-00001', 'Anggota', 'Anggota', '', '', '', 'anggota legislatif', '1'),
(33, 'H.Ari Purbono, SE', '', '32', '32@gmail.com', NULL, '3', 'K-00002', '', 'Anggota', '', '', '', 'anggota legislatif', '1'),
(34, 'H.Imam Mardjuki, S.Sos M.I.Kom', '', '33', '33@gmail.com', NULL, '3', 'K-00002', '', 'Anggota', '', '', '', 'anggota legislatif', '1'),
(35, 'Drs.Agus Riyanto Slamet', '', '34', '34@gmail.com', NULL, '3', 'K-00003', '', 'Anggota', '', '', '', 'anggota legislatif', '1'),
(36, 'Suharsono, SS.Msi', '', '35', '35@gmail.com', NULL, '3', 'K-00003', '', 'Anggota', '', '', '', 'anggota legislatif', '1'),
(37, 'Sovan Haslin Pradana, SE', '', '36', '36@gmail.com', NULL, '8', 'K-00001', 'Anggota', 'Anggota', '', '', '', 'anggota legislatif', '1'),
(38, 'Adiaro Suryo Kusumo, SH,M.Kn', '', '37', '37@gmail.com', NULL, '8', 'K-00002', '', 'Anggota', '', '', '', 'anggota legislatif', '1'),
(39, 'HJ.Umi Surotud Diniyah, SE', '', '38', '38@gmail.com', NULL, '8', 'K-00002', 'Ketua Komisi II', 'Anggota', '', '', '', 'anggota legislatif', '1'),
(40, 'Ir.Wachid Nurmiyanto', '', '39', '39@gmail.com', NULL, '8', 'K-00003', 'Anggota', 'Anggota', '', '', '', 'anggota legislatif', '1'),
(41, 'H.Hasan Bisri', '', '40', '40@gmail.com', NULL, '9', 'K-00003', '', 'Anggota', '', '', '', 'anggota legislatif', '1'),
(42, 'dr.H.Syafi''i', '', '41', '41@gmail.com', NULL, '8', 'K-00001', '', 'Anggota', '', '', '', 'anggota legislatif', '1'),
(43, 'Erry Sadewo, SH', '', '42', '42@gmail.com', NULL, '5', 'K-00002', '', 'Anggota', '', '', '', 'anggota legislatif', '1'),
(44, 'Nabila', '', '43', '43@gmail.com', NULL, '5', 'K-00002', '', 'Anggota', '', '', '', 'anggota legislatif', '1'),
(45, 'Wisnu Pudjonggo, SH', '', '44', '44@gmail.com', NULL, '5', 'K-00003', 'Anggota', 'Anggota', '', '', '', 'anggota legislatif', '1'),
(46, 'H.Agung Priyambodo', '', '45', '45@gmail.com', NULL, '5', 'K-00001', '', 'Anggota', '', '', '', 'anggota legislatif', '1'),
(47, 'H.Anang Budi Utomo, SMn.M.Pd', '', '46', '46@gmail.com', NULL, '5', 'K-00002', '', 'Anggota', '', '', '', 'anggota legislatif', '1'),
(48, 'H.Syahrul Qirom, ST', '', '47', '47@gmail.com', NULL, '2', 'K-00002', '', 'Anggota', '', '', '', 'anggota legislatif', '1'),
(49, 'H.Sodri, SH', '', '48', '48@gmail.com', NULL, '2', 'K-00003', '', 'Anggota', '', '', '', 'anggota legislatif', '1'),
(50, 'H.Moh Rohaini', '', '49', '49@gmail.com', NULL, '2', 'K-00002', '', 'Anggota', '', '', '', 'anggota legislatif', '1'),
(51, 'Linna Aliana, Sh', '', '50', '50@gmail.com', NULL, '2', NULL, '', 'Anggota', '', '', '', 'anggota legislatif', '0'),
(52, 'Linna Aliana, SH', '', '50', '50@gmail.com', NULL, '2', 'K-00003', 'Anggota', 'Anggota', '', '', '', 'anggota legislatif', '1'),
(53, 'Ir. Eko Cahyono, M.T', '196001041988031001', '', '', NULL, NULL, NULL, '', 'Sekretaris', 'IV / c', 'Pembina Utama Muda', '', 'bukan anggota legislatif', '1'),
(54, 'Drs. Joko Purwanto, MM', '196509201992031012', '', '', NULL, NULL, NULL, '', 'Kepal Bagian Persidangan dan Perundang-undangan Sekretariat', 'IV / a', 'Pembina', '', 'bukan anggota legislatif', '1'),
(55, 'Dra. Dwi Mariastoeti', '196509021994022001', '', '', NULL, NULL, NULL, '', 'Kepala Bagian Perencanaan dan Keuangan Sekretariat', 'IV / a', 'Pembina', '', 'bukan anggota legislatif', '1'),
(56, 'Dra. Sri Kusdiyanti, MM', '196305051990092001', '', '', NULL, NULL, NULL, '', 'Kepala Bagian Umum Sekretariat', 'IV / b', 'Pembina Tk.I', '', 'bukan anggota legislatif', '1'),
(57, 'Ir. Purnomo Dwi Sasongko, MT, MM', '196605231991011001', '', '', NULL, NULL, NULL, '', 'Kepala Bagian Hubungan Masyarakat Sekretariat', 'IV / b', 'Pembina Tk.I', '', 'bukan anggota legislatif', '1'),
(58, 'Komara Yuni Armi, S.Ip', '196406141986082002', '', '', NULL, NULL, NULL, '', 'Kepala Sub Bagian Rumah Tangga Pada Bagian Umum Sekretariat', 'III / d', 'Penata Tk.I', '', 'bukan anggota legislatif', '1'),
(59, 'Pulung Brahmantyo, S.H, S.P.N, MM', '196508181992031016', '', '', NULL, NULL, NULL, '', 'Kepala Sub Bagian Perlengkapan dan Aset pada Bagian Umum Sekretariat', 'IV / a', 'Pembina', '', 'bukan anggota legislatif', '1'),
(60, 'Drs. I Nengah Gunada, M.Si', '196310171998031005', '', '', NULL, NULL, NULL, '', 'Kepala Sub Bagian Evaluasi dan Pelaporan pada Bagian Perencanaan dan Keuangan Sekretariat', 'IV / a', 'Pembina', '', 'bukan anggota legislatif', '1'),
(61, 'Sri Pujiningsih, SE', '19701006199203006', '', '', NULL, NULL, NULL, '', 'Kepala Sub Bagian Tata Usaha dan Kepegawaian pada Bagian Umum Sekretariat', 'III / c', 'Penata', '', 'bukan anggota legislatif', '1'),
(62, 'Victoria Sri Redjeki, SE, MM', '197111091997032007', '', '', NULL, NULL, NULL, '', 'Kepala Sub Bagian Program dan Anggaran pada Bagian Perencanaan dan Keuangan Sekretariat', 'III / d', 'Penata Tk.I', '', 'bukan anggota legislatif', '1'),
(63, 'Yuni Artati, SE', '197510292010012005', '', '', NULL, NULL, NULL, '', 'Kepala Bagian Sub Penatausahaan Keuangan pada Bagian Perencanaan dan Keuangan Sekretariat', 'III / b', 'Penata Muda Tk.I', '', 'bukan anggota legislatif', '1'),
(64, 'Surya Pranata, S.Sos', '196308261992081001', '', '', NULL, NULL, NULL, '', 'Staf Sub Bag Kajian Hukum dan Perundang-undangan pada Bagian Persidangan dan Perundangan-undang Sekr', 'III / d', 'Penata Tk.I', '', 'bukan anggota legislatif', '1'),
(65, 'Titik  Yuliani, SE', '196107251986092001', '', '', NULL, NULL, NULL, '', 'Kepala Sub Bagian Risalah pada Bagian Persidangan dan Perundang-undangan Sekretariat', 'III / d', 'Penata Tk.I', '', 'bukan anggota legislatif', '1'),
(66, 'Hendratmoko, SE', '1964111071990031012', '', '', NULL, NULL, NULL, '', 'Staf Sub Bagian Persidangan pada Bagian Persidangan dan Perundang-undangan Sekretariat', 'III / d', 'Penata Tk.I', '', 'bukan anggota legislatif', '1'),
(67, 'Eny Suwartiningsihrum, SE', '196505051988032030', '', '', NULL, NULL, NULL, '', 'Kepala Sub Bagian Protokol Pada Bagian Hubungan Masyarakat Sekretariat', 'III / d', 'Penata Tk.I', '', 'bukan anggota legislatif', '1'),
(68, 'Ir.H.Johan Rafai', '', '8888888', 'fakhir_rizal@hotmail.com', NULL, '1', 'K-00001', '', 'Litbang Departemen Sosial', '', '', '', 'anggota legislatif', '1'),
(69, 'ubah', '', '1', 'ubah@kjnk.sdf', NULL, '1', 'K-00002', '', 'ubah', '', '', '', 'anggota legislatif', '1'),
(70, 'ubah', '1', '', '', NULL, NULL, NULL, '', 'ubah', 'ubah', 'ubah', '', 'bukan anggota legislatif', '1'),
(71, 'ggg', '', '', '', NULL, NULL, NULL, '', '', '', '', '', 'anggota legislatif', '0');

-- --------------------------------------------------------

--
-- Struktur dari tabel `anggota_badan`
--

CREATE TABLE `anggota_badan` (
  `id` int(9) NOT NULL,
  `id_badan` varchar(7) NOT NULL,
  `id_anggota` int(9) NOT NULL,
  `jabatan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `anggota_badan`
--

INSERT INTO `anggota_badan` (`id`, `id_badan`, `id_anggota`, `jabatan`) VALUES
(5, 'B-00003', 58, 'Staff Departemen Sosial'),
(6, 'B-00003', 2, 'Sekretaris'),
(7, 'B-00003', 7, 'Ketua Himpunan'),
(8, 'B-00003', 8, 'Koordinator Litbang'),
(9, 'B-00004', 1, 'xxxxe'),
(10, 'B-00004', 2, 'Litbang Departemen Sosiall'),
(11, 'B-00004', 7, 'Litbang Departemen Sosialv'),
(12, 'B-00004', 8, 'Litbang Departemen Sosialff'),
(13, 'B-00004', 10, 'Litbang Departemen Sosialsdf'),
(14, 'B-00004', 11, 'Litbang Departemen Sosialff'),
(15, 'B-00004', 12, 'Litbang Departemen Sosialb'),
(16, 'B-00004', 13, 'Litbang Departemen Sosialff'),
(17, 'B-00005', 1, 'Ketua'),
(18, 'B-00005', 2, 'Bendahara'),
(19, 'B-00005', 7, 'Sekretaris'),
(20, 'B-00005', 8, 'Anggota'),
(21, 'B-00005', 11, 'Anggota'),
(22, 'B-00005', 12, 'Anggota'),
(24, 'B-00005', 15, 'Anggota'),
(25, 'B-00006', 1, ''),
(26, 'B-00006', 2, ''),
(27, 'B-00006', 7, ''),
(28, 'B-00006', 8, ''),
(29, 'B-00006', 10, ''),
(30, 'B-00006', 11, ''),
(31, 'B-00006', 12, ''),
(32, 'B-00006', 13, ''),
(33, 'B-00006', 15, ''),
(34, 'B-00005', 3, 'Anggota'),
(35, 'B-00005', 4, 'Anggota'),
(36, 'B-00007', 1, ''),
(37, 'B-00007', 2, ''),
(38, 'B-00008', 1, 'dfv'),
(39, 'B-00008', 2, 'dfv'),
(40, 'B-00008', 7, 'dfv'),
(41, 'B-00008', 8, 'df'),
(42, 'B-00008', 10, 'df'),
(43, 'B-00008', 11, 'df'),
(44, 'B-00008', 12, 'df'),
(45, 'B-00008', 13, 'fd'),
(46, 'B-00008', 15, 'dfv'),
(47, 'B-00008', 17, 'df'),
(48, 'B-00008', 18, 'df'),
(49, 'B-00008', 20, 'd'),
(50, 'B-00009', 3, 'Ketua'),
(51, 'B-00009', 7, 'Wakil'),
(56, 'B-00010', 5, 'Ketua'),
(57, 'B-00010', 6, 'Ketua'),
(58, 'B-00010', 7, 'Ketua'),
(59, 'B-00010', 8, 'Ketua'),
(60, 'B-00010', 1, 'Anggota'),
(61, 'B-00010', 2, 'Anggota'),
(62, 'B-00010', 3, 'Anggota'),
(63, 'B-00010', 4, 'Anggota'),
(64, 'B-00010', 9, 'Anggota'),
(65, 'B-00011', 1, 'Anggota'),
(66, 'B-00011', 2, 'Anggota'),
(67, 'B-00011', 3, 'Anggota'),
(68, 'B-00011', 4, 'Anggota'),
(69, 'B-00011', 5, 'Anggota'),
(70, 'B-00011', 6, 'Anggota'),
(71, 'B-00011', 7, 'Anggota'),
(72, 'B-00011', 8, 'Anggota'),
(73, 'B-00011', 9, 'Anggota'),
(74, 'B-00011', 10, 'Anggota'),
(75, 'B-00011', 11, 'Anggota'),
(76, 'B-00011', 12, 'Anggota'),
(77, 'B-00011', 13, 'Anggota'),
(78, 'B-00011', 14, 'Anggota'),
(79, 'B-00011', 15, 'Anggota'),
(80, 'B-00011', 16, 'Anggota'),
(81, 'B-00011', 17, 'Anggota'),
(82, 'B-00011', 18, 'Anggota'),
(83, 'B-00011', 19, 'Anggota'),
(84, 'B-00011', 21, 'Anggota'),
(85, 'B-00011', 22, 'Anggota'),
(86, 'B-00011', 23, 'Anggota'),
(87, 'B-00011', 24, 'Anggota'),
(88, 'B-00011', 25, 'Anggota'),
(89, 'B-00011', 26, 'Anggota'),
(90, 'B-00011', 27, 'Anggota'),
(91, 'B-00011', 28, 'Anggota'),
(92, 'B-00011', 29, 'Anggota'),
(93, 'B-00011', 30, 'Anggota'),
(94, 'B-00011', 31, 'Anggota'),
(95, 'B-00011', 32, 'Anggota'),
(96, 'B-00011', 33, 'Anggota'),
(97, 'B-00011', 34, 'Anggota'),
(98, 'B-00011', 35, 'Anggota'),
(99, 'B-00011', 36, 'Anggota'),
(100, 'B-00011', 37, 'Anggota'),
(101, 'B-00011', 38, 'Anggota'),
(102, 'B-00011', 39, 'Anggota'),
(103, 'B-00011', 40, 'Anggota'),
(104, 'B-00011', 41, 'Anggota'),
(105, 'B-00011', 42, 'Anggota'),
(106, 'B-00011', 43, 'Anggota'),
(107, 'B-00011', 44, 'Anggota'),
(108, 'B-00011', 45, 'Anggota'),
(109, 'B-00011', 46, 'Anggota'),
(110, 'B-00011', 47, 'Anggota'),
(111, 'B-00011', 48, 'Anggota'),
(112, 'B-00011', 49, 'Anggota'),
(113, 'B-00011', 50, 'Anggota'),
(114, 'B-00011', 52, 'Anggota'),
(115, 'B-00011', 68, 'Anggota'),
(116, 'B-00011', 69, 'Anggota'),
(117, 'B-00012', 1, 'Anggota'),
(118, 'B-00012', 5, 'Anggota'),
(119, 'B-00012', 10, 'Anggota'),
(120, 'B-00012', 14, 'Anggota'),
(121, 'B-00012', 18, 'Anggota'),
(122, 'B-00012', 23, 'Anggota'),
(123, 'B-00012', 27, 'Anggota'),
(124, 'B-00012', 31, 'Anggota'),
(125, 'B-00012', 35, 'Anggota'),
(126, 'B-00012', 39, 'Anggota'),
(127, 'B-00012', 43, 'Anggota'),
(128, 'B-00012', 47, 'Anggota');

-- --------------------------------------------------------

--
-- Struktur dari tabel `anggota_panja`
--

CREATE TABLE `anggota_panja` (
  `id` int(9) NOT NULL,
  `kode_panja` varchar(7) NOT NULL,
  `id_anggota` int(9) NOT NULL,
  `jabatan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `anggota_panja`
--

INSERT INTO `anggota_panja` (`id`, `kode_panja`, `id_anggota`, `jabatan`) VALUES
(75, 'J-00002', 1, 'Ketua'),
(76, 'J-00002', 5, 'Anggota'),
(77, 'J-00001', 1, 'Panja 1'),
(78, 'J-00001', 2, 'Panja 2'),
(79, 'J-00001', 3, 'Panja 3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `anggota_pansus`
--

CREATE TABLE `anggota_pansus` (
  `id` int(9) NOT NULL,
  `kode_pansus` varchar(7) NOT NULL,
  `id_anggota` int(9) NOT NULL,
  `jabatan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `anggota_pansus`
--

INSERT INTO `anggota_pansus` (`id`, `kode_pansus`, `id_anggota`, `jabatan`) VALUES
(5, 'P-00003', 1, 'Staff Departemen Sosial'),
(6, 'P-00003', 2, '2'),
(7, 'P-00003', 7, 'required'),
(8, 'P-00003', 8, 'required'),
(17, 'P-00005', 1, 'required'),
(18, 'P-00005', 2, 'required'),
(19, 'P-00005', 7, 'Anggota'),
(22, 'P-00005', 11, 'Anggota'),
(23, 'P-00005', 12, 'Anggota'),
(24, 'P-00005', 13, 'Anggota'),
(25, 'P-00005', 15, 'Anggota'),
(26, 'P-00001', 1, 'Anggota'),
(27, 'P-00001', 2, 'jabatan pansus 1'),
(30, 'P-00001', 4, 'jabatan pansus 2'),
(32, 'P-00001', 3, 'jabatan pansus 3'),
(33, 'P-00001', 7, 'jabatan pansus 4'),
(34, 'P-00001', 11, 'jabatan pansus 5'),
(35, 'P-00006', 1, 'jabatan pansus 6'),
(36, 'P-00006', 2, 'jabatan pansus 1'),
(37, 'P-00006', 7, ''),
(38, 'P-00006', 8, ''),
(39, 'P-00006', 10, ''),
(40, 'P-00006', 11, ''),
(41, 'P-00006', 12, ''),
(42, 'P-00006', 13, ''),
(43, 'P-00006', 15, ''),
(44, 'P-00006', 17, ''),
(45, 'P-00006', 18, ''),
(46, 'P-00006', 20, ''),
(47, 'P-00007', 1, ''),
(48, 'P-00007', 2, ''),
(49, 'P-00007', 7, ''),
(50, 'P-00007', 8, ''),
(51, 'P-00007', 10, ''),
(52, 'P-00007', 11, ''),
(53, 'P-00007', 12, ''),
(54, 'P-00007', 13, ''),
(55, 'P-00007', 15, ''),
(56, 'P-00007', 17, ''),
(57, 'P-00007', 18, ''),
(58, 'P-00007', 20, ''),
(59, 'P-00008', 2, 'ketua'),
(61, 'P-00009', 1, 'Ketua'),
(62, 'P-00009', 2, 'Anggota'),
(63, 'P-00009', 3, 'Anggota'),
(64, 'P-00009', 4, 'Anggota'),
(65, 'P-00008', 5, 'Anggota'),
(66, 'P-00008', 1, 'Anggota');

-- --------------------------------------------------------

--
-- Struktur dari tabel `badan`
--

CREATE TABLE `badan` (
  `id` int(9) NOT NULL,
  `id_badan` varchar(7) NOT NULL,
  `nama_badan` varchar(200) NOT NULL,
  `keterangan` text NOT NULL,
  `tanggal_buat` date NOT NULL,
  `tanggal_selesai` date NOT NULL,
  `status` enum('1','0') NOT NULL,
  `hasil` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `badan`
--

INSERT INTO `badan` (`id`, `id_badan`, `nama_badan`, `keterangan`, `tanggal_buat`, `tanggal_selesai`, `status`, `hasil`) VALUES
(1, 'B-00003', 'Badan Anggaran', 'Mengurusi masalah anggaran', '2018-01-01', '2018-04-11', '0', 'tes'),
(2, 'B-00004', 'Badan Musyawarah', 'Untuk mengurusi musyawarah', '2018-01-16', '2018-05-14', '0', 'jhj<b>hgjh</b>'),
(3, 'B-00005', 'Badan sehat', 'Indikasinya adalah batuk-batuk dan menggigil kalau pagi harii', '2018-03-01', '0000-00-00', '0', 'kmklm<b> ,.m  k.m.km.<i>lm,;lm<u>lkml;m<br></u></i></b><br><b><i><u>,m,l,m<br>;l,m;<br></u></i></b><ol><li><b><i><u>l;,</u></i></b></li></ol>'),
(4, 'B-00006', 'Badan gemuk', 'Makannya banyak', '2018-03-09', '2018-03-18', '0', 'iki'),
(5, 'B-00007', 'Badan pegel', 'Baru olahraga berat', '2018-03-10', '0000-00-00', '0', '<b>asdasd<i>asdasd</i></b><i>asdasd<br>sdf<br>sdf<br></i><ol><li><i>sdf</i></li><li><i>sdf</i></li><li><i>sdf</i></li></ol><blockquote><blockquote><i>sdsdfsdf</i></blockquote></blockquote>'),
(6, 'B-00008', 'dfvdfv', 'dfvdfv', '2018-03-22', '2018-03-22', '0', '<h3><b>fghfghfghfdgh</b></h3>fgh<br>fh<br><ol><li>fg</li><li>h</li><li>fg</li></ol>fgfgh<br><ul><li>hhh</li><li>hhh</li><li>h</li><li>hf</li></ul><br>'),
(7, 'B-00009', 'Badan Anggaran', '(1) Badan Anggaran bertugas:<br>\n<li>membahas bersama Pemerintah yang diwakili oleh menteri untuk menentukan pokok-pokok kebijakan fiskal umum dan prioritas anggaran untuk dijadikan acuan bagi setiap kementerian/lembaga dalam menyusun usulan anggaran</li>\n<li>menetapkan pendapatan negara bersama Pemerintah dengan mengacu pada usulan komisi terkait</li>\n<li>membahas rancangan undang-undang tentang APBN bersama Presiden yang dapat diwakili oleh menteri dengan mengacu pada keputusan rapat kerja komisi dan Pemerintah mengenai alokasi anggaran untuk fungsi, program, dan kegiatan kementerian/lembaga</li>\n<li>melakukan sinkronisasi terhadap hasil pembahasan di komisi mengenai rencana kerja dan anggaran kementerian/lembaga</li>\n<li>membahas laporan realisasi dan prognosis yang berkaitan dengan APBN</li>\n<li>membahas pokok-pokok penjelasan atas rancangan undang-undang tentang pertanggungjawaban pelaksanaan APBN</li>\n(2) Badan Anggaran hanya membahas alokasi anggaran yang sudah diputuskan oleh komisi<br>\n(3) Anggota komisi dalam Badan Anggaran harus mengupayakan alokasi anggaran yang diputuskan komisi dan menyampaikan hasil pelaksanaan tugas sebagaimana dimaksud pada ayat (1) kepada komisi', '2018-04-30', '2018-08-31', '1', ''),
(8, 'B-00010', 'Badan Musyawarah', 'xxxxxxxxeeeeeee', '2018-04-30', '0000-00-00', '1', ''),
(9, 'B-00011', 'asda', 'asd', '2018-06-20', '2018-06-20', '0', ''),
(10, 'B-00012', 'Badan Keuangan', 'Mengurusi masalah keuangan', '2018-06-22', '0000-00-00', '1', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dasar_hukum`
--

CREATE TABLE `dasar_hukum` (
  `id` int(9) NOT NULL,
  `kode_jaldis` varchar(7) NOT NULL,
  `dasar_hukum` varchar(3000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dasar_hukum`
--

INSERT INTO `dasar_hukum` (`id`, `kode_jaldis`, `dasar_hukum`) VALUES
(1, 'J-10024', 'UUD 1945'),
(2, 'J-10024', 'UU No 13 Tahun 2017 pasal a'),
(3, 'J-10025', 'UU kesatu'),
(4, 'J-10025', 'UU kedua'),
(5, 'J-10026', '1'),
(6, 'J-10026', '2'),
(7, 'J-10027', 'A'),
(8, 'J-10027', 'B'),
(9, 'J-10027', 'C'),
(10, 'J-10028', 'V'),
(11, 'J-10028', 'W'),
(12, 'J-10029', 'XXX'),
(13, 'J-10030', 'X'),
(14, 'J-10030', 'Y'),
(15, 'J-10030', 'Z'),
(16, 'J-10031', 'M'),
(17, 'J-10031', 'N'),
(18, 'J-10032', 'UUD 1945'),
(19, 'J-10032', 'UU MD3'),
(20, 'J-10033', 'ds1'),
(21, 'J-10033', 'ds2'),
(22, 'J-10034', 'sdf'),
(23, 'J-10034', 'sdfdsf'),
(24, 'J-10035', 'dfg'),
(25, 'J-10035', 'bbb'),
(26, 'J-10036', 'dfff'),
(27, 'J-10037', 'Peraturan Daerah Kota Semarang Nomor 13 Tahun 2017 tentang Anggaran Pendapatan dan Belanja Daerah\n                                Kota Semarang Tahun 2018'),
(28, 'J-10037', 'Surat Komisi C DPRD Kota Semarang Nomor : 4 / C / DPRD / 2018 tanggal 24 Januari 2018 perihal\n                                Pendampingan Kunjungan Kerja Komisi C DPRD Kota Semarang'),
(29, 'J-10038', 'aa'),
(30, 'J-10038', 'bb'),
(31, 'J-10039', 'xdgsdf'),
(32, 'J-10040', 'tes123'),
(35, 'J-10041', 'vvvvvvvvvv'),
(36, 'J-10041', 'xxxxxxxxxx'),
(38, 'J-10042', 'ddd'),
(39, 'J-10043', 'aaa'),
(40, 'J-10043', 'eeee'),
(41, 'J-10044', 'tes terakhir'),
(42, 'J-10045', 'ubah'),
(43, 'J-10045', 'bbbbbb'),
(44, 'J-10046', '1'),
(45, 'J-10046', '2'),
(46, 'J-10045', 'baru'),
(47, 'J-10047', 'Peraturan Daerah Kota Semarang Nomor 13 Tahun 2017 tentang Anggaran Pendapatan dan Belanja Daerah Kota Semarang Tahun 2018'),
(48, 'J-10047', 'Peraturan Daerah Kota Semarang Nomor 13 Tahun 2017 tentang Anggaran Pendapatan dan Belanja Daerah Kota Semarang Tahun 2018'),
(49, 'J-10047', 'Peraturan Daerah Kota Semarang Nomor 13 Tahun 2017 tentang Anggaran Pendapatan dan Belanja Daerah Kota Semarang Tahun 2018'),
(50, 'J-10048', 'a'),
(51, 'J-10049', 'a'),
(52, 'J-10049', 'aa'),
(53, 'J-10049', 'aaa'),
(54, 'J-10050', 'setwan'),
(55, 'J-10051', '1'),
(56, 'J-10052', 's'),
(57, 'J-10053', 'vbvb'),
(58, 'J-10054', 'tes bintek'),
(59, 'J-10055', 'asd'),
(60, 'J-10055', 'asd'),
(61, 'J-10056', 'hhbj'),
(62, 'J-10057', 'dfv'),
(63, 'J-10058', 'gn'),
(64, 'J-10059', 'v'),
(65, 'J-10060', 'f'),
(66, 'J-10061', 'ff'),
(67, 'J-10062', 'sdf'),
(68, 'J-10063', 'f'),
(69, 'J-10064', 'fgh'),
(70, 'J-10065', 'fg'),
(71, 'J-10066', 'v'),
(72, 'J-10067', 'k'),
(73, 'J-10068', 'sdf'),
(74, 'J-10069', 'panja'),
(75, 'J-10070', 'sdfsdf'),
(76, 'J-10071', 'tes pimpinan'),
(77, 'J-10072', 'Dasar Hukum 1'),
(78, 'J-10072', 'Dasar Hukum 2'),
(79, 'J-10072', 'Dasar Hukum 3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_jaldis`
--

CREATE TABLE `detail_jaldis` (
  `id` int(9) NOT NULL,
  `kode_jaldis` varchar(7) NOT NULL,
  `id_anggota` int(9) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `keterangan_posisi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `detail_jaldis`
--

INSERT INTO `detail_jaldis` (`id`, `kode_jaldis`, `id_anggota`, `start_date`, `end_date`, `keterangan_posisi`) VALUES
(5, 'J-10003', 1, '0000-00-00', '0000-00-00', ''),
(6, 'J-10003', 2, '0000-00-00', '0000-00-00', ''),
(7, 'J-10003', 10, '0000-00-00', '0000-00-00', ''),
(8, 'J-10004', 1, '0000-00-00', '0000-00-00', ''),
(9, 'J-10005', 1, '0000-00-00', '0000-00-00', ''),
(10, 'J-10006', 1, '0000-00-00', '0000-00-00', ''),
(11, 'J-10007', 1, '0000-00-00', '0000-00-00', ''),
(12, 'J-10008', 1, '0000-00-00', '0000-00-00', ''),
(13, 'J-10008', 2, '0000-00-00', '0000-00-00', ''),
(14, 'J-10009', 1, '0000-00-00', '0000-00-00', ''),
(15, 'J-10009', 2, '0000-00-00', '0000-00-00', ''),
(16, 'J-10010', 1, '0000-00-00', '0000-00-00', ''),
(17, 'J-10010', 2, '0000-00-00', '0000-00-00', ''),
(18, 'J-10011', 1, '0000-00-00', '0000-00-00', ''),
(19, 'J-10011', 2, '0000-00-00', '0000-00-00', ''),
(20, 'J-10012', 1, '0000-00-00', '0000-00-00', ''),
(21, 'J-10012', 2, '0000-00-00', '0000-00-00', ''),
(22, 'J-10013', 1, '0000-00-00', '0000-00-00', ''),
(23, 'J-10013', 2, '0000-00-00', '0000-00-00', ''),
(24, 'J-10014', 3, '0000-00-00', '0000-00-00', ''),
(25, 'J-10014', 9, '0000-00-00', '0000-00-00', ''),
(28, 'J-10015', 1, '0000-00-00', '0000-00-00', ''),
(29, 'J-10015', 2, '0000-00-00', '0000-00-00', ''),
(30, 'J-10017', 1, '0000-00-00', '0000-00-00', ''),
(31, 'J-10017', 2, '0000-00-00', '0000-00-00', ''),
(32, 'J-10018', 1, '2018-02-14', '2018-02-24', ''),
(33, 'J-10018', 2, '2018-02-12', '2018-02-24', ''),
(34, 'J-10019', 1, '0000-00-00', '0000-00-00', ''),
(35, 'J-10019', 2, '0000-00-00', '0000-00-00', ''),
(36, 'J-10020', 1, '0000-00-00', '0000-00-00', ''),
(37, 'J-10020', 2, '0000-00-00', '0000-00-00', ''),
(38, 'J-10020', 7, '0000-00-00', '0000-00-00', ''),
(39, 'J-10020', 8, '0000-00-00', '0000-00-00', ''),
(40, 'J-10020', 10, '0000-00-00', '0000-00-00', ''),
(41, 'J-10021', 1, '0000-00-00', '0000-00-00', ''),
(42, 'J-10021', 2, '0000-00-00', '0000-00-00', ''),
(43, 'J-10021', 7, '0000-00-00', '0000-00-00', ''),
(44, 'J-10021', 8, '0000-00-00', '0000-00-00', ''),
(45, 'J-10021', 10, '0000-00-00', '0000-00-00', ''),
(46, 'J-10021', 11, '0000-00-00', '0000-00-00', ''),
(47, 'J-10021', 12, '0000-00-00', '0000-00-00', ''),
(48, 'J-10021', 13, '0000-00-00', '0000-00-00', ''),
(49, 'J-10021', 15, '0000-00-00', '0000-00-00', ''),
(50, 'J-10021', 3, '0000-00-00', '0000-00-00', ''),
(51, 'J-10021', 4, '0000-00-00', '0000-00-00', ''),
(52, 'J-10021', 5, '0000-00-00', '0000-00-00', ''),
(53, 'J-10021', 6, '0000-00-00', '0000-00-00', ''),
(54, 'J-10022', 1, '2018-03-01', '2018-03-04', ''),
(55, 'J-10022', 2, '2018-03-01', '2018-03-04', ''),
(56, 'J-10022', 7, '2018-03-01', '2018-03-04', ''),
(57, 'J-10022', 8, '2018-03-01', '2018-03-05', ''),
(58, 'J-10022', 10, '2018-03-01', '2018-03-05', ''),
(59, 'J-10022', 11, '2018-03-01', '2018-03-05', ''),
(60, 'J-10022', 12, '2018-03-01', '2018-03-05', ''),
(61, 'J-10022', 13, '2018-03-01', '2018-03-05', ''),
(62, 'J-10022', 15, '2018-03-01', '2018-03-05', ''),
(63, 'J-10022', 3, '2018-03-01', '2018-03-04', ''),
(64, 'J-10022', 4, '2018-03-01', '2018-03-05', ''),
(65, 'J-10022', 5, '2018-03-01', '2018-03-05', ''),
(66, 'J-10022', 6, '2018-03-01', '2018-03-05', ''),
(67, 'J-10022', 9, '2018-03-01', '2018-03-05', ''),
(68, 'J-10022', 14, '2018-03-01', '2018-03-05', ''),
(69, 'J-10023', 1, '2018-03-02', '2018-03-13', ''),
(70, 'J-10023', 2, '2018-03-01', '2018-03-13', ''),
(71, 'J-10023', 7, '2018-03-01', '2018-03-13', ''),
(72, 'J-10023', 8, '2018-03-01', '2018-03-13', ''),
(73, 'J-10023', 10, '2018-03-01', '2018-03-13', ''),
(74, 'J-10023', 11, '2018-03-01', '2018-03-13', ''),
(75, 'J-10023', 12, '2018-03-01', '2018-03-13', ''),
(76, 'J-10023', 13, '2018-03-01', '2018-03-13', ''),
(77, 'J-10023', 15, '2018-03-01', '2018-03-13', ''),
(78, 'J-10023', 3, '2018-03-01', '2018-03-13', ''),
(79, 'J-10023', 4, '2018-03-01', '2018-03-13', ''),
(80, 'J-10023', 5, '2018-03-01', '2018-03-13', ''),
(81, 'J-10023', 6, '2018-03-01', '2018-03-13', ''),
(82, 'J-10023', 9, '2018-03-01', '2018-03-13', ''),
(83, 'J-10023', 14, '2018-03-01', '2018-03-13', ''),
(84, 'J-10024', 2, '2018-03-01', '2018-03-03', ''),
(85, 'J-10024', 8, '2018-03-01', '2018-03-03', ''),
(86, 'J-10024', 12, '2018-03-01', '2018-03-03', ''),
(87, 'J-10024', 3, '2018-03-01', '2018-03-03', ''),
(88, 'J-10024', 4, '2018-03-01', '2018-03-03', ''),
(89, 'J-10024', 5, '2018-03-01', '2018-03-03', ''),
(90, 'J-10024', 6, '2018-03-01', '2018-03-03', ''),
(91, 'J-10024', 9, '2018-03-01', '2018-03-03', ''),
(92, 'J-10024', 14, '2018-03-01', '2018-03-03', ''),
(93, 'J-10024', 16, '2018-03-01', '2018-03-03', ''),
(94, 'J-10025', 1, '2018-03-23', '2018-03-26', ''),
(95, 'J-10025', 2, '2018-03-23', '2018-03-26', ''),
(96, 'J-10025', 7, '2018-03-23', '2018-03-26', ''),
(97, 'J-10025', 8, '2018-03-23', '2018-03-26', ''),
(98, 'J-10025', 12, '2018-03-24', '2018-03-26', ''),
(99, 'J-10025', 15, '2018-03-24', '2018-03-26', ''),
(100, 'J-10025', 3, '2018-03-23', '2018-03-26', ''),
(101, 'J-10025', 4, '2018-03-23', '2018-03-26', ''),
(102, 'J-10025', 5, '2018-03-23', '2018-03-26', ''),
(103, 'J-10026', 1, '2018-03-01', '2018-03-04', ''),
(104, 'J-10026', 2, '2018-03-01', '2018-03-04', ''),
(105, 'J-10026', 7, '2018-03-01', '2018-03-04', ''),
(106, 'J-10026', 8, '2018-03-01', '2018-03-04', ''),
(107, 'J-10026', 12, '2018-03-01', '2018-03-04', ''),
(108, 'J-10026', 15, '2018-03-01', '2018-03-04', ''),
(109, 'J-10026', 3, '2018-03-01', '2018-03-04', ''),
(110, 'J-10026', 4, '2018-03-01', '2018-03-04', ''),
(111, 'J-10026', 5, '2018-03-01', '2018-03-04', ''),
(112, 'J-10026', 6, '2018-03-01', '2018-03-04', ''),
(113, 'J-10026', 9, '2018-03-01', '2018-03-04', ''),
(114, 'J-10026', 14, '2018-03-01', '2018-03-04', ''),
(115, 'J-10026', 16, '2018-03-01', '2018-03-04', ''),
(116, 'J-10027', 10, '2018-03-23', '2018-03-26', ''),
(117, 'J-10027', 11, '2018-03-23', '2018-03-26', ''),
(118, 'J-10027', 13, '2018-03-23', '2018-03-26', ''),
(119, 'J-10027', 3, '2018-03-23', '2018-03-26', ''),
(120, 'J-10027', 4, '2018-03-23', '2018-03-26', ''),
(121, 'J-10027', 5, '2018-03-23', '2018-03-26', ''),
(122, 'J-10028', 1, '2018-03-16', '2018-03-18', ''),
(123, 'J-10028', 2, '2018-03-16', '2018-03-18', ''),
(124, 'J-10028', 7, '2018-03-16', '2018-03-18', ''),
(125, 'J-10028', 8, '2018-03-16', '2018-03-18', ''),
(126, 'J-10028', 3, '2018-03-16', '2018-03-18', ''),
(127, 'J-10028', 4, '2018-03-16', '2018-03-18', ''),
(128, 'J-10028', 5, '2018-03-16', '2018-03-18', ''),
(129, 'J-10028', 6, '2018-03-16', '2018-03-18', ''),
(130, 'J-10028', 9, '2018-03-16', '2018-03-18', ''),
(131, 'J-10028', 14, '2018-03-16', '2018-03-18', ''),
(132, 'J-10028', 16, '2018-03-16', '2018-03-18', ''),
(133, 'J-10029', 1, '2018-04-05', '2018-04-12', ''),
(134, 'J-10029', 2, '2018-04-05', '2018-04-12', ''),
(135, 'J-10029', 7, '2018-04-05', '2018-04-12', ''),
(136, 'J-10029', 8, '2018-04-05', '2018-04-12', ''),
(137, 'J-10029', 10, '2018-04-05', '2018-04-12', ''),
(138, 'J-10029', 11, '2018-04-05', '2018-04-12', ''),
(139, 'J-10029', 12, '2018-04-05', '2018-04-12', ''),
(140, 'J-10029', 13, '2018-04-05', '2018-04-12', ''),
(141, 'J-10029', 3, '2018-04-05', '2018-04-12', ''),
(142, 'J-10029', 4, '2018-04-05', '2018-04-12', ''),
(143, 'J-10029', 5, '2018-04-05', '2018-04-12', ''),
(144, 'J-10029', 6, '2018-04-05', '2018-04-12', ''),
(145, 'J-10029', 9, '2018-04-05', '2018-04-12', ''),
(146, 'J-10029', 14, '2018-04-05', '2018-04-12', ''),
(147, 'J-10029', 16, '2018-04-05', '2018-04-12', ''),
(148, 'J-10030', 1, '2018-03-30', '2018-04-02', ''),
(149, 'J-10030', 2, '2018-03-30', '2018-04-02', ''),
(150, 'J-10030', 4, '2018-03-30', '2018-04-02', ''),
(151, 'J-10030', 3, '2018-03-30', '2018-04-02', ''),
(152, 'J-10030', 7, '2018-03-30', '2018-04-02', ''),
(153, 'J-10030', 11, '2018-03-30', '2018-04-02', ''),
(154, 'J-10030', 3, '2018-03-30', '2018-04-02', ''),
(155, 'J-10030', 4, '2018-03-30', '2018-04-02', ''),
(156, 'J-10030', 5, '2018-03-30', '2018-04-02', ''),
(157, 'J-10030', 6, '2018-03-30', '2018-04-02', ''),
(158, 'J-10030', 9, '2018-03-30', '2018-04-02', ''),
(159, 'J-10030', 14, '2018-03-30', '2018-04-02', ''),
(160, 'J-10030', 16, '2018-03-30', '2018-04-02', ''),
(161, 'J-10031', 1, '2018-04-05', '2018-04-09', ''),
(162, 'J-10031', 2, '2018-04-05', '2018-04-09', ''),
(163, 'J-10031', 7, '2018-04-05', '2018-04-09', ''),
(164, 'J-10031', 8, '2018-04-05', '2018-04-09', ''),
(165, 'J-10031', 3, '2018-04-05', '2018-04-09', ''),
(166, 'J-10031', 4, '2018-04-05', '2018-04-09', ''),
(167, 'J-10031', 5, '2018-04-05', '2018-04-09', ''),
(168, 'J-10031', 6, '2018-04-05', '2018-04-09', ''),
(169, 'J-10031', 9, '2018-04-05', '2018-04-09', ''),
(170, 'J-10031', 14, '2018-04-05', '2018-04-09', ''),
(171, 'J-10031', 16, '2018-04-05', '2018-04-09', ''),
(172, 'J-10032', 1, '2018-04-19', '2018-04-23', ''),
(173, 'J-10032', 2, '2018-04-19', '2018-04-23', ''),
(174, 'J-10032', 7, '2018-04-19', '2018-04-23', ''),
(175, 'J-10032', 8, '2018-04-19', '2018-04-23', ''),
(176, 'J-10032', 3, '2018-04-19', '2018-04-23', ''),
(177, 'J-10032', 4, '2018-04-19', '2018-04-23', ''),
(178, 'J-10032', 5, '2018-04-19', '2018-04-23', ''),
(179, 'J-10033', 1, '2018-03-23', '2018-03-25', ''),
(180, 'J-10033', 2, '2018-03-23', '2018-03-25', ''),
(181, 'J-10033', 4, '2018-03-23', '2018-03-25', ''),
(182, 'J-10033', 3, '2018-03-23', '2018-03-25', ''),
(183, 'J-10033', 7, '2018-03-23', '2018-03-25', ''),
(184, 'J-10033', 11, '2018-03-23', '2018-03-25', ''),
(185, 'J-10033', 3, '2018-03-23', '2018-03-25', ''),
(186, 'J-10033', 4, '2018-03-23', '2018-03-25', ''),
(187, 'J-10033', 5, '2018-03-23', '2018-03-25', ''),
(188, 'J-10034', 1, '2018-03-23', '2018-03-25', ''),
(189, 'J-10034', 2, '2018-03-23', '2018-03-25', ''),
(190, 'J-10034', 7, '2018-03-23', '2018-03-25', ''),
(191, 'J-10034', 8, '2018-03-23', '2018-03-25', ''),
(192, 'J-10034', 10, '2018-03-23', '2018-03-25', ''),
(193, 'J-10034', 11, '2018-03-23', '2018-03-25', ''),
(194, 'J-10034', 12, '2018-03-23', '2018-03-25', ''),
(195, 'J-10034', 13, '2018-03-23', '2018-03-25', ''),
(196, 'J-10034', 15, '2018-03-23', '2018-03-25', ''),
(197, 'J-10034', 17, '2018-03-23', '2018-03-25', ''),
(198, 'J-10034', 18, '2018-03-23', '2018-03-25', ''),
(199, 'J-10034', 3, '2018-03-23', '2018-03-25', ''),
(200, 'J-10034', 4, '2018-03-23', '2018-03-25', ''),
(201, 'J-10034', 5, '2018-03-23', '2018-03-25', ''),
(202, 'J-10034', 6, '2018-03-23', '2018-03-25', ''),
(203, 'J-10034', 9, '2018-03-23', '2018-03-25', ''),
(204, 'J-10034', 14, '2018-03-23', '2018-03-25', ''),
(205, 'J-10034', 16, '2018-03-23', '2018-03-25', ''),
(206, 'J-10034', 19, '2018-03-23', '2018-03-25', ''),
(207, 'J-10034', 21, '2018-03-23', '2018-03-25', ''),
(208, 'J-10035', 1, '2018-03-31', '2018-04-03', ''),
(209, 'J-10035', 2, '2018-03-31', '2018-04-03', ''),
(210, 'J-10035', 7, '2018-03-31', '2018-04-03', ''),
(211, 'J-10035', 8, '2018-03-31', '2018-04-03', ''),
(212, 'J-10035', 3, '2018-03-31', '2018-04-03', ''),
(213, 'J-10035', 4, '2018-03-31', '2018-04-03', ''),
(214, 'J-10035', 5, '2018-03-31', '2018-04-03', ''),
(215, 'J-10035', 6, '2018-03-31', '2018-04-03', ''),
(216, 'J-10035', 9, '2018-03-31', '2018-04-03', ''),
(217, 'J-10035', 14, '2018-03-31', '2018-04-03', ''),
(218, 'J-10035', 16, '2018-03-31', '2018-04-03', ''),
(219, 'J-10035', 19, '2018-03-31', '2018-04-03', ''),
(220, 'J-10035', 21, '2018-03-31', '2018-04-03', ''),
(221, 'J-10036', 1, '2018-03-01', '2018-03-04', ''),
(222, 'J-10036', 2, '2018-03-01', '2018-03-04', ''),
(223, 'J-10036', 7, '2018-03-01', '2018-03-04', ''),
(224, 'J-10036', 8, '2018-03-01', '2018-03-04', ''),
(225, 'J-10036', 10, '2018-03-01', '2018-03-04', ''),
(226, 'J-10036', 11, '2018-03-01', '2018-03-04', ''),
(227, 'J-10036', 12, '2018-03-01', '2018-03-04', ''),
(228, 'J-10036', 13, '2018-03-01', '2018-03-04', ''),
(229, 'J-10036', 15, '2018-03-01', '2018-03-04', ''),
(230, 'J-10036', 17, '2018-03-01', '2018-03-04', ''),
(231, 'J-10036', 18, '2018-03-01', '2018-03-04', ''),
(232, 'J-10036', 3, '2018-03-01', '2018-03-04', ''),
(233, 'J-10036', 4, '2018-03-01', '2018-03-04', ''),
(234, 'J-10036', 5, '2018-03-01', '2018-03-04', ''),
(235, 'J-10036', 6, '2018-03-01', '2018-03-04', ''),
(236, 'J-10036', 9, '2018-03-01', '2018-03-04', ''),
(237, 'J-10036', 14, '2018-03-01', '2018-03-04', ''),
(238, 'J-10036', 16, '2018-03-01', '2018-03-04', ''),
(239, 'J-10036', 19, '2018-03-01', '2018-03-04', ''),
(240, 'J-10036', 21, '2018-03-01', '2018-03-04', ''),
(241, 'J-10037', 1, '2018-03-29', '2018-03-31', ''),
(242, 'J-10037', 2, '2018-03-29', '2018-03-31', ''),
(243, 'J-10037', 7, '2018-03-29', '2018-03-31', ''),
(244, 'J-10037', 8, '2018-03-29', '2018-03-31', ''),
(245, 'J-10037', 53, '2018-03-30', '2018-03-31', ''),
(246, 'J-10037', 54, '2018-03-29', '2018-03-31', ''),
(247, 'J-10037', 55, '2018-03-29', '2018-03-31', ''),
(248, 'J-10037', 56, '2018-03-29', '2018-03-31', ''),
(249, 'J-10037', 57, '2018-03-29', '2018-03-31', ''),
(250, 'J-10037', 58, '2018-03-29', '2018-03-31', ''),
(251, 'J-10037', 59, '2018-03-29', '2018-03-31', ''),
(252, 'J-10037', 60, '2018-03-29', '2018-03-31', ''),
(253, 'J-10037', 61, '2018-03-29', '2018-03-31', ''),
(254, 'J-10037', 62, '2018-03-29', '2018-03-31', ''),
(255, 'J-10037', 63, '2018-03-29', '2018-03-31', ''),
(256, 'J-10037', 64, '2018-03-29', '2018-03-31', ''),
(257, 'J-10037', 65, '2018-03-29', '2018-03-31', ''),
(258, 'J-10037', 66, '2018-03-29', '2018-03-31', ''),
(259, 'J-10037', 67, '2018-03-29', '2018-03-31', ''),
(260, 'J-10038', 58, '2018-04-11', '2018-04-14', ''),
(261, 'J-10038', 2, '2018-04-12', '2018-04-14', ''),
(262, 'J-10038', 7, '2018-04-11', '2018-04-14', ''),
(263, 'J-10038', 8, '2018-04-11', '2018-04-14', ''),
(264, 'J-10038', 53, '2018-04-11', '2018-04-14', ''),
(265, 'J-10038', 54, '2018-04-11', '2018-04-14', ''),
(266, 'J-10038', 55, '2018-04-11', '2018-04-14', ''),
(267, 'J-10038', 56, '2018-04-11', '2018-04-14', ''),
(268, 'J-10038', 57, '2018-04-11', '2018-04-14', ''),
(269, 'J-10038', 58, '2018-04-11', '2018-04-14', ''),
(270, 'J-10038', 59, '2018-04-11', '2018-04-14', ''),
(271, 'J-10038', 60, '2018-04-11', '2018-04-14', ''),
(272, 'J-10038', 61, '2018-04-11', '2018-04-14', ''),
(273, 'J-10038', 62, '2018-04-11', '2018-04-14', ''),
(274, 'J-10038', 63, '2018-04-11', '2018-04-14', ''),
(275, 'J-10038', 64, '2018-04-11', '2018-04-14', ''),
(276, 'J-10038', 65, '2018-04-11', '2018-04-14', ''),
(277, 'J-10038', 66, '2018-04-11', '2018-04-14', ''),
(278, 'J-10038', 67, '2018-04-11', '2018-04-14', ''),
(279, 'J-10039', 7, '2018-04-28', '2018-04-30', ''),
(280, 'J-10039', 10, '2018-04-28', '2018-04-30', ''),
(281, 'J-10039', 12, '2018-04-28', '2018-04-30', ''),
(282, 'J-10039', 13, '2018-04-28', '2018-04-30', ''),
(283, 'J-10039', 19, '2018-04-28', '2018-04-30', ''),
(284, 'J-10039', 22, '2018-04-28', '2018-04-30', ''),
(285, 'J-10039', 25, '2018-04-28', '2018-04-30', ''),
(286, 'J-10039', 28, '2018-04-28', '2018-04-30', ''),
(287, 'J-10039', 32, '2018-04-28', '2018-04-30', ''),
(288, 'J-10039', 37, '2018-04-28', '2018-04-30', ''),
(289, 'J-10039', 45, '2018-04-28', '2018-04-30', ''),
(290, 'J-10039', 52, '2018-04-28', '2018-04-30', ''),
(291, 'J-10039', 53, '2018-04-28', '2018-04-30', ''),
(292, 'J-10039', 54, '2018-04-28', '2018-04-30', ''),
(293, 'J-10039', 55, '2018-04-28', '2018-04-30', ''),
(294, 'J-10039', 56, '2018-04-28', '2018-04-30', ''),
(295, 'J-10039', 57, '2018-04-28', '2018-04-30', ''),
(296, 'J-10039', 58, '2018-04-28', '2018-04-30', ''),
(297, 'J-10039', 59, '2018-04-28', '2018-04-30', ''),
(298, 'J-10039', 60, '2018-04-28', '2018-04-30', ''),
(299, 'J-10039', 61, '2018-04-28', '2018-04-30', ''),
(300, 'J-10039', 62, '2018-04-28', '2018-04-30', ''),
(301, 'J-10039', 63, '2018-04-28', '2018-04-30', ''),
(302, 'J-10039', 64, '2018-04-28', '2018-04-30', ''),
(303, 'J-10039', 65, '2018-04-28', '2018-04-30', ''),
(304, 'J-10039', 66, '2018-04-28', '2018-04-30', ''),
(305, 'J-10039', 67, '2018-04-28', '2018-04-30', ''),
(306, 'J-10040', 1, '2018-05-01', '2018-05-04', ''),
(307, 'J-10040', 2, '2018-05-01', '2018-05-04', ''),
(308, 'J-10040', 7, '2018-05-01', '2018-05-04', ''),
(309, 'J-10040', 8, '2018-05-01', '2018-05-04', ''),
(310, 'J-10040', 10, '2018-05-01', '2018-05-04', ''),
(311, 'J-10040', 11, '2018-05-01', '2018-05-04', ''),
(312, 'J-10040', 12, '2018-05-01', '2018-05-04', ''),
(313, 'J-10040', 13, '2018-05-01', '2018-05-04', ''),
(314, 'J-10040', 53, '2018-05-01', '2018-05-04', ''),
(315, 'J-10040', 54, '2018-05-01', '2018-05-04', ''),
(316, 'J-10040', 55, '2018-05-01', '2018-05-04', ''),
(317, 'J-10040', 56, '2018-05-01', '2018-05-04', ''),
(318, 'J-10040', 57, '2018-05-01', '2018-05-04', ''),
(319, 'J-10040', 58, '2018-05-01', '2018-05-04', ''),
(320, 'J-10040', 59, '2018-05-01', '2018-05-04', ''),
(321, 'J-10040', 60, '2018-05-01', '2018-05-04', ''),
(322, 'J-10040', 61, '2018-05-01', '2018-05-04', ''),
(323, 'J-10040', 62, '2018-05-01', '2018-05-04', ''),
(324, 'J-10040', 63, '2018-05-01', '2018-05-04', ''),
(325, 'J-10040', 64, '2018-05-01', '2018-05-04', ''),
(326, 'J-10040', 65, '2018-05-01', '2018-05-04', ''),
(327, 'J-10040', 66, '2018-05-01', '2018-05-04', ''),
(328, 'J-10040', 67, '2018-05-02', '2018-05-04', ''),
(336, 'J-10041', 1, '2018-05-04', '2018-05-08', ''),
(337, 'J-10041', 2, '2018-05-04', '2018-05-08', ''),
(338, 'J-10041', 7, '2018-05-04', '2018-05-08', ''),
(339, 'J-10041', 8, '2018-05-04', '2018-05-08', ''),
(340, 'J-10041', 53, '2018-05-04', '2018-05-08', ''),
(341, 'J-10041', 54, '2018-05-04', '2018-05-08', ''),
(342, 'J-10041', 55, '2018-05-04', '2018-05-08', ''),
(343, 'J-10041', 56, '2018-05-04', '2018-05-08', ''),
(344, 'J-10041', 57, '2018-05-04', '2018-05-08', ''),
(345, 'J-10041', 58, '2018-05-04', '2018-05-08', ''),
(346, 'J-10041', 59, '2018-05-04', '2018-05-08', ''),
(347, 'J-10041', 60, '2018-05-04', '2018-05-08', ''),
(348, 'J-10042', 50, '2018-05-06', '2018-05-10', ''),
(349, 'J-10042', 65, '2018-05-05', '2018-05-10', ''),
(356, 'J-10043', 22, '2018-05-01', '2018-05-05', ''),
(357, 'J-10043', 37, '2018-05-01', '2018-05-05', ''),
(358, 'J-10043', 45, '2018-05-01', '2018-05-05', ''),
(359, 'J-10043', 56, '2018-05-01', '2018-05-05', ''),
(360, 'J-10043', 60, '2018-05-01', '2018-05-05', ''),
(361, 'J-10043', 61, '2018-05-01', '2018-05-05', ''),
(362, 'J-10044', 1, '2018-05-02', '2018-05-03', ''),
(363, 'J-10044', 2, '2018-05-02', '2018-05-03', ''),
(364, 'J-10044', 3, '2018-05-02', '2018-05-03', ''),
(365, 'J-10044', 14, '2018-05-02', '2018-05-03', ''),
(366, 'J-10044', 53, '2018-05-02', '2018-05-03', ''),
(367, 'J-10044', 54, '2018-05-02', '2018-05-03', ''),
(368, 'J-10044', 55, '2018-05-02', '2018-05-03', ''),
(369, 'J-10044', 56, '2018-05-02', '2018-05-03', ''),
(424, 'J-10046', 1, '2018-05-18', '2018-05-21', ''),
(425, 'J-10046', 2, '2018-05-18', '2018-05-21', ''),
(426, 'J-10046', 3, '2018-05-18', '2018-05-21', ''),
(427, 'J-10046', 4, '2018-05-18', '2018-05-21', ''),
(428, 'J-10046', 5, '2018-05-18', '2018-05-21', ''),
(429, 'J-10046', 6, '2018-05-18', '2018-05-21', ''),
(430, 'J-10046', 7, '2018-05-18', '2018-05-21', ''),
(431, 'J-10046', 8, '2018-05-18', '2018-05-21', ''),
(432, 'J-10046', 9, '2018-05-18', '2018-05-21', ''),
(433, 'J-10046', 10, '2018-05-18', '2018-05-21', ''),
(434, 'J-10046', 11, '2018-05-18', '2018-05-21', ''),
(435, 'J-10046', 12, '2018-05-18', '2018-05-21', ''),
(436, 'J-10046', 13, '2018-05-18', '2018-05-21', ''),
(437, 'J-10046', 14, '2018-05-18', '2018-05-21', ''),
(438, 'J-10046', 15, '2018-05-18', '2018-05-21', ''),
(439, 'J-10046', 16, '2018-05-18', '2018-05-21', ''),
(440, 'J-10046', 17, '2018-05-18', '2018-05-21', ''),
(441, 'J-10046', 18, '2018-05-18', '2018-05-21', ''),
(442, 'J-10046', 19, '2018-05-18', '2018-05-21', ''),
(443, 'J-10046', 21, '2018-05-18', '2018-05-21', ''),
(444, 'J-10046', 22, '2018-05-18', '2018-05-21', ''),
(445, 'J-10046', 23, '2018-05-18', '2018-05-21', ''),
(446, 'J-10046', 24, '2018-05-18', '2018-05-21', ''),
(447, 'J-10046', 25, '2018-05-18', '2018-05-21', ''),
(448, 'J-10046', 26, '2018-05-18', '2018-05-21', ''),
(449, 'J-10046', 27, '2018-05-18', '2018-05-21', ''),
(450, 'J-10046', 28, '2018-05-18', '2018-05-21', ''),
(451, 'J-10046', 29, '2018-05-18', '2018-05-21', ''),
(452, 'J-10046', 30, '2018-05-18', '2018-05-21', ''),
(453, 'J-10046', 31, '2018-05-18', '2018-05-21', ''),
(454, 'J-10046', 32, '2018-05-18', '2018-05-21', ''),
(455, 'J-10046', 33, '2018-05-18', '2018-05-21', ''),
(456, 'J-10046', 34, '2018-05-18', '2018-05-21', ''),
(457, 'J-10046', 35, '2018-05-18', '2018-05-21', ''),
(458, 'J-10046', 36, '2018-05-18', '2018-05-21', ''),
(459, 'J-10046', 37, '2018-05-18', '2018-05-21', ''),
(460, 'J-10046', 38, '2018-05-18', '2018-05-21', ''),
(461, 'J-10046', 39, '2018-05-18', '2018-05-21', ''),
(462, 'J-10046', 40, '2018-05-18', '2018-05-21', ''),
(463, 'J-10046', 41, '2018-05-18', '2018-05-21', ''),
(464, 'J-10046', 42, '2018-05-18', '2018-05-21', ''),
(465, 'J-10046', 43, '2018-05-18', '2018-05-21', ''),
(466, 'J-10046', 44, '2018-05-18', '2018-05-21', ''),
(467, 'J-10046', 45, '2018-05-18', '2018-05-21', ''),
(468, 'J-10046', 46, '2018-05-18', '2018-05-21', ''),
(469, 'J-10046', 47, '2018-05-18', '2018-05-21', ''),
(470, 'J-10046', 48, '2018-05-18', '2018-05-21', ''),
(471, 'J-10046', 49, '2018-05-18', '2018-05-21', ''),
(472, 'J-10046', 50, '2018-05-18', '2018-05-21', ''),
(473, 'J-10046', 52, '2018-05-18', '2018-05-21', ''),
(474, 'J-10046', 53, '2018-05-18', '2018-05-21', ''),
(475, 'J-10046', 54, '2018-05-18', '2018-05-21', ''),
(476, 'J-10046', 55, '2018-05-18', '2018-05-21', ''),
(477, 'J-10046', 56, '2018-05-18', '2018-05-21', ''),
(545, 'J-10047', 5, '2018-05-17', '2018-05-23', ''),
(546, 'J-10047', 6, '2018-05-17', '2018-05-23', ''),
(547, 'J-10047', 7, '2018-05-17', '2018-05-23', ''),
(548, 'J-10047', 8, '2018-05-17', '2018-05-23', ''),
(549, 'J-10047', 9, '2018-05-17', '2018-05-23', ''),
(550, 'J-10047', 10, '2018-05-17', '2018-05-23', ''),
(551, 'J-10047', 11, '2018-05-17', '2018-05-23', ''),
(552, 'J-10047', 12, '2018-05-17', '2018-05-23', ''),
(553, 'J-10047', 13, '2018-05-17', '2018-05-23', ''),
(554, 'J-10047', 14, '2018-05-17', '2018-05-23', ''),
(555, 'J-10047', 15, '2018-05-17', '2018-05-23', ''),
(556, 'J-10047', 16, '2018-05-17', '2018-05-23', ''),
(557, 'J-10047', 17, '2018-05-17', '2018-05-23', ''),
(558, 'J-10047', 18, '2018-05-17', '2018-05-23', ''),
(559, 'J-10047', 19, '2018-05-17', '2018-05-23', ''),
(560, 'J-10047', 21, '2018-05-17', '2018-05-23', ''),
(561, 'J-10047', 22, '2018-05-17', '2018-05-23', ''),
(562, 'J-10047', 23, '2018-05-17', '2018-05-23', ''),
(563, 'J-10047', 24, '2018-05-17', '2018-05-23', ''),
(564, 'J-10047', 25, '2018-05-17', '2018-05-23', ''),
(565, 'J-10047', 26, '2018-05-17', '2018-05-23', ''),
(566, 'J-10047', 27, '2018-05-17', '2018-05-23', ''),
(567, 'J-10047', 28, '2018-05-17', '2018-05-23', ''),
(568, 'J-10047', 29, '2018-05-17', '2018-05-23', ''),
(569, 'J-10047', 30, '2018-05-17', '2018-05-23', ''),
(570, 'J-10047', 31, '2018-05-17', '2018-05-23', ''),
(571, 'J-10047', 32, '2018-05-17', '2018-05-23', ''),
(572, 'J-10047', 33, '2018-05-17', '2018-05-23', ''),
(573, 'J-10047', 34, '2018-05-17', '2018-05-23', ''),
(574, 'J-10047', 35, '2018-05-17', '2018-05-23', ''),
(575, 'J-10047', 36, '2018-05-17', '2018-05-23', ''),
(576, 'J-10047', 37, '2018-05-17', '2018-05-23', ''),
(577, 'J-10047', 38, '2018-05-17', '2018-05-23', ''),
(578, 'J-10047', 39, '2018-05-17', '2018-05-23', ''),
(579, 'J-10047', 40, '2018-05-17', '2018-05-23', ''),
(580, 'J-10047', 41, '2018-05-17', '2018-05-23', ''),
(581, 'J-10047', 42, '2018-05-17', '2018-05-23', ''),
(582, 'J-10047', 43, '2018-05-17', '2018-05-23', ''),
(583, 'J-10047', 44, '2018-05-17', '2018-05-23', ''),
(584, 'J-10047', 45, '2018-05-17', '2018-05-23', ''),
(585, 'J-10047', 46, '2018-05-17', '2018-05-23', ''),
(586, 'J-10047', 47, '2018-05-17', '2018-05-23', ''),
(587, 'J-10047', 48, '2018-05-17', '2018-05-23', ''),
(588, 'J-10047', 49, '2018-05-17', '2018-05-23', ''),
(589, 'J-10047', 50, '2018-05-17', '2018-05-23', ''),
(590, 'J-10047', 52, '2018-05-17', '2018-05-23', ''),
(591, 'J-10047', 53, '2018-05-17', '2018-05-23', ''),
(592, 'J-10047', 54, '2018-05-17', '2018-05-23', ''),
(593, 'J-10047', 55, '2018-05-17', '2018-05-23', ''),
(594, 'J-10047', 56, '2018-05-17', '2018-05-23', ''),
(615, 'J-10049', 1, '2018-05-08', '2018-05-11', ''),
(616, 'J-10049', 2, '2018-05-08', '2018-05-11', ''),
(617, 'J-10049', 7, '2018-05-08', '2018-05-11', ''),
(618, 'J-10049', 8, '2018-05-08', '2018-05-11', ''),
(619, 'J-10049', 53, '2018-05-08', '2018-05-11', ''),
(620, 'J-10049', 54, '2018-05-08', '2018-05-11', ''),
(621, 'J-10049', 55, '2018-05-08', '2018-05-11', ''),
(622, 'J-10049', 56, '2018-05-08', '2018-05-11', ''),
(623, 'J-10049', 57, '2018-05-08', '2018-05-11', ''),
(624, 'J-10049', 58, '2018-05-08', '2018-05-11', ''),
(625, 'J-10049', 59, '2018-05-08', '2018-05-11', ''),
(626, 'J-10049', 60, '2018-05-08', '2018-05-11', ''),
(627, 'J-10050', 53, '2018-05-16', '2018-05-19', ''),
(628, 'J-10050', 54, '2018-05-16', '2018-05-19', ''),
(629, 'J-10050', 55, '2018-05-16', '2018-05-19', ''),
(630, 'J-10050', 56, '2018-05-16', '2018-05-19', ''),
(639, 'J-10048', 53, '2018-05-23', '2018-05-26', ''),
(640, 'J-10048', 54, '2018-05-23', '2018-05-26', ''),
(641, 'J-10048', 55, '2018-05-23', '2018-05-26', ''),
(642, 'J-10048', 56, '2018-05-23', '2018-05-26', ''),
(643, 'J-10051', 53, '2018-05-16', '2018-05-19', ''),
(644, 'J-10051', 54, '2018-05-16', '2018-05-19', ''),
(645, 'J-10051', 55, '2018-05-16', '2018-05-19', ''),
(646, 'J-10051', 56, '2018-05-16', '2018-05-19', ''),
(652, 'J-10052', 53, '2018-05-31', '2018-06-02', ''),
(653, 'J-10052', 54, '2018-05-31', '2018-06-02', ''),
(654, 'J-10052', 55, '2018-05-31', '2018-06-02', ''),
(655, 'J-10052', 56, '2018-05-31', '2018-06-02', ''),
(656, 'J-10053', 3, '2018-05-25', '2018-05-27', ''),
(657, 'J-10053', 7, '2018-05-25', '2018-05-27', ''),
(658, 'J-10053', 53, '2018-05-25', '2018-05-27', ''),
(659, 'J-10054', 1, '2018-05-25', '2018-05-26', ''),
(660, 'J-10054', 5, '2018-05-25', '2018-05-26', ''),
(661, 'J-10054', 10, '2018-05-25', '2018-05-26', ''),
(662, 'J-10054', 14, '2018-05-25', '2018-05-26', ''),
(663, 'J-10054', 18, '2018-05-25', '2018-05-26', ''),
(664, 'J-10055', 7, '2018-05-29', '2018-06-02', ''),
(665, 'J-10055', 10, '2018-05-29', '2018-06-02', ''),
(666, 'J-10055', 12, '2018-05-29', '2018-06-02', ''),
(667, 'J-10055', 13, '2018-05-29', '2018-06-02', ''),
(668, 'J-10055', 19, '2018-05-29', '2018-06-02', ''),
(669, 'J-10055', 22, '2018-05-29', '2018-06-02', ''),
(670, 'J-10055', 25, '2018-05-29', '2018-06-02', ''),
(671, 'J-10055', 28, '2018-05-29', '2018-06-02', ''),
(672, 'J-10055', 32, '2018-05-29', '2018-06-02', ''),
(673, 'J-10055', 37, '2018-05-29', '2018-06-02', ''),
(674, 'J-10055', 52, '2018-05-29', '2018-06-02', ''),
(675, 'J-10055', 66, '2018-05-29', '2018-06-02', ''),
(676, 'J-10055', 67, '2018-05-29', '2018-06-02', ''),
(677, 'J-10056', 47, '2018-06-06', '2018-06-08', ''),
(678, 'J-10056', 52, '2018-06-06', '2018-06-08', ''),
(679, 'J-10056', 53, '2018-06-06', '2018-06-08', ''),
(680, 'J-10056', 54, '2018-06-06', '2018-06-08', ''),
(681, 'J-10056', 55, '2018-06-06', '2018-06-08', ''),
(682, 'J-10056', 56, '2018-06-06', '2018-06-08', ''),
(683, 'J-10056', 57, '2018-06-06', '2018-06-08', ''),
(684, 'J-10056', 58, '2018-06-06', '2018-06-08', ''),
(685, 'J-10056', 59, '2018-06-06', '2018-06-08', ''),
(686, 'J-10056', 60, '2018-06-06', '2018-06-08', ''),
(687, 'J-10056', 61, '2018-06-06', '2018-06-08', ''),
(688, 'J-10056', 62, '2018-06-06', '2018-06-08', ''),
(689, 'J-10056', 63, '2018-06-06', '2018-06-08', ''),
(690, 'J-10056', 64, '2018-06-06', '2018-06-08', ''),
(691, 'J-10056', 65, '2018-06-06', '2018-06-08', ''),
(692, 'J-10056', 66, '2018-06-06', '2018-06-08', ''),
(693, 'J-10056', 67, '2018-06-06', '2018-06-08', ''),
(694, 'J-10045', 7, '2018-05-04', '2018-05-08', ''),
(695, 'J-10045', 10, '2018-05-04', '2018-05-08', ''),
(696, 'J-10045', 12, '2018-05-04', '2018-05-08', ''),
(697, 'J-10045', 13, '2018-05-04', '2018-05-08', ''),
(698, 'J-10045', 19, '2018-05-04', '2018-05-08', ''),
(699, 'J-10045', 22, '2018-05-04', '2018-05-08', ''),
(700, 'J-10045', 25, '2018-05-04', '2018-05-08', ''),
(701, 'J-10045', 28, '2018-05-04', '2018-05-08', ''),
(702, 'J-10045', 32, '2018-05-04', '2018-05-08', ''),
(703, 'J-10045', 37, '2018-05-04', '2018-05-08', ''),
(704, 'J-10045', 52, '2018-05-04', '2018-05-08', ''),
(705, 'J-10045', 57, '2018-05-04', '2018-05-08', ''),
(706, 'J-10045', 58, '2018-05-04', '2018-05-08', ''),
(707, 'J-10045', 59, '2018-05-04', '2018-05-08', ''),
(708, 'J-10045', 60, '2018-05-04', '2018-05-08', ''),
(709, 'J-10057', 1, '2018-06-30', '2018-07-02', ''),
(710, 'J-10057', 2, '2018-06-30', '2018-07-02', ''),
(711, 'J-10057', 4, '2018-06-30', '2018-07-02', ''),
(712, 'J-10057', 3, '2018-06-30', '2018-07-02', ''),
(713, 'J-10057', 7, '2018-06-30', '2018-07-02', ''),
(714, 'J-10057', 11, '2018-06-30', '2018-07-02', ''),
(715, 'J-10057', 53, '2018-06-30', '2018-07-02', ''),
(716, 'J-10057', 54, '2018-06-30', '2018-07-02', ''),
(717, 'J-10057', 55, '2018-06-30', '2018-07-02', ''),
(718, 'J-10057', 56, '2018-06-30', '2018-07-02', ''),
(719, 'J-10057', 57, '2018-06-30', '2018-07-02', ''),
(720, 'J-10057', 58, '2018-06-30', '2018-07-02', ''),
(721, 'J-10057', 59, '2018-06-30', '2018-07-02', ''),
(722, 'J-10057', 60, '2018-06-30', '2018-07-02', ''),
(723, 'J-10057', 61, '2018-06-30', '2018-07-02', ''),
(724, 'J-10057', 62, '2018-06-30', '2018-07-02', ''),
(725, 'J-10057', 63, '2018-06-30', '2018-07-02', ''),
(726, 'J-10057', 64, '2018-06-30', '2018-07-02', ''),
(727, 'J-10057', 65, '2018-06-30', '2018-07-02', ''),
(728, 'J-10057', 66, '2018-06-30', '2018-07-02', ''),
(729, 'J-10057', 67, '2018-06-30', '2018-07-02', ''),
(730, 'J-10057', 70, '2018-06-30', '2018-07-02', ''),
(731, 'J-10058', 1, '2018-06-14', '2018-06-14', ''),
(732, 'J-10058', 5, '2018-06-14', '2018-06-14', ''),
(733, 'J-10058', 10, '2018-06-14', '2018-06-14', ''),
(734, 'J-10058', 15, '2018-06-14', '2018-06-14', ''),
(735, 'J-10058', 19, '2018-06-14', '2018-06-14', ''),
(736, 'J-10058', 24, '2018-06-14', '2018-06-14', ''),
(737, 'J-10058', 28, '2018-06-14', '2018-06-14', ''),
(738, 'J-10058', 32, '2018-06-14', '2018-06-14', ''),
(739, 'J-10058', 37, '2018-06-14', '2018-06-14', ''),
(740, 'J-10058', 42, '2018-06-14', '2018-06-14', ''),
(741, 'J-10058', 46, '2018-06-14', '2018-06-14', ''),
(742, 'J-10058', 68, '2018-06-14', '2018-06-14', ''),
(743, 'J-10058', 53, '2018-06-14', '2018-06-14', ''),
(744, 'J-10058', 54, '2018-06-14', '2018-06-14', ''),
(745, 'J-10058', 55, '2018-06-14', '2018-06-14', ''),
(746, 'J-10058', 56, '2018-06-14', '2018-06-14', ''),
(747, 'J-10058', 57, '2018-06-14', '2018-06-14', ''),
(748, 'J-10058', 58, '2018-06-14', '2018-06-14', ''),
(749, 'J-10058', 59, '2018-06-14', '2018-06-14', ''),
(750, 'J-10058', 60, '2018-06-14', '2018-06-14', ''),
(751, 'J-10058', 61, '2018-06-14', '2018-06-14', ''),
(752, 'J-10058', 62, '2018-06-14', '2018-06-14', ''),
(753, 'J-10058', 63, '2018-06-14', '2018-06-14', ''),
(754, 'J-10058', 64, '2018-06-14', '2018-06-14', ''),
(755, 'J-10058', 65, '2018-06-14', '2018-06-14', ''),
(756, 'J-10058', 66, '2018-06-14', '2018-06-14', ''),
(757, 'J-10058', 67, '2018-06-14', '2018-06-14', ''),
(758, 'J-10058', 70, '2018-06-14', '2018-06-14', ''),
(759, 'J-10059', 1, '2018-06-22', '2018-06-23', ''),
(760, 'J-10059', 5, '2018-06-22', '2018-06-23', ''),
(761, 'J-10059', 10, '2018-06-22', '2018-06-23', ''),
(762, 'J-10059', 15, '2018-06-22', '2018-06-23', ''),
(763, 'J-10059', 19, '2018-06-22', '2018-06-23', ''),
(764, 'J-10059', 24, '2018-06-22', '2018-06-23', ''),
(765, 'J-10059', 28, '2018-06-22', '2018-06-23', ''),
(766, 'J-10059', 32, '2018-06-22', '2018-06-23', ''),
(767, 'J-10059', 37, '2018-06-22', '2018-06-23', ''),
(768, 'J-10059', 42, '2018-06-22', '2018-06-23', ''),
(769, 'J-10059', 46, '2018-06-22', '2018-06-23', ''),
(770, 'J-10059', 68, '2018-06-22', '2018-06-23', ''),
(809, 'J-10060', 1, '2018-06-25', '2018-06-26', 'pimpinan'),
(810, 'J-10060', 5, '2018-06-25', '2018-06-26', 'pimpinan'),
(811, 'J-10060', 4, '2018-06-25', '2018-06-26', ''),
(812, 'J-10060', 14, '2018-06-25', '2018-06-26', ''),
(813, 'J-10060', 31, '2018-06-25', '2018-06-26', ''),
(814, 'J-10060', 53, '2018-06-25', '2018-06-26', ''),
(815, 'J-10060', 57, '2018-06-25', '2018-06-26', ''),
(822, 'J-10061', 1, '2018-06-28', '2018-06-29', 'pimpinan'),
(823, 'J-10061', 4, '2018-06-28', '2018-06-29', 'pimpinan'),
(824, 'J-10061', 5, '2018-06-28', '2018-06-29', 'pimpinan'),
(825, 'J-10061', 53, '2018-06-28', '2018-06-29', ''),
(826, 'J-10061', 57, '2018-06-28', '2018-06-29', ''),
(855, 'J-10062', 1, '2018-06-29', '2018-06-30', 'pimpinan'),
(856, 'J-10062', 2, '2018-06-29', '2018-06-30', 'pimpinan'),
(857, 'J-10062', 3, '2018-06-29', '2018-06-30', 'pimpinan'),
(858, 'J-10062', 4, '2018-06-29', '2018-06-30', 'pimpinan'),
(859, 'J-10062', 5, '2018-06-29', '2018-06-30', 'pimpinan'),
(860, 'J-10062', 6, '2018-06-29', '2018-06-30', 'pimpinan'),
(861, 'J-10062', 8, '2018-06-29', '2018-06-30', ''),
(862, 'J-10062', 9, '2018-06-29', '2018-06-30', ''),
(863, 'J-10062', 14, '2018-06-29', '2018-06-30', ''),
(864, 'J-10062', 18, '2018-06-29', '2018-06-30', ''),
(865, 'J-10062', 23, '2018-06-29', '2018-06-30', ''),
(866, 'J-10062', 31, '2018-06-29', '2018-06-30', ''),
(867, 'J-10062', 35, '2018-06-29', '2018-06-30', ''),
(868, 'J-10062', 36, '2018-06-29', '2018-06-30', ''),
(869, 'J-10062', 41, '2018-06-29', '2018-06-30', ''),
(870, 'J-10062', 45, '2018-06-29', '2018-06-30', ''),
(871, 'J-10062', 49, '2018-06-29', '2018-06-30', ''),
(872, 'J-10062', 53, '2018-06-29', '2018-06-30', ''),
(873, 'J-10062', 54, '2018-06-29', '2018-06-30', ''),
(874, 'J-10062', 55, '2018-06-29', '2018-06-30', ''),
(875, 'J-10062', 57, '2018-06-29', '2018-06-30', ''),
(876, 'J-10062', 58, '2018-06-29', '2018-06-30', ''),
(877, 'J-10062', 59, '2018-06-29', '2018-06-30', ''),
(878, 'J-10062', 62, '2018-06-29', '2018-06-30', ''),
(879, 'J-10062', 63, '2018-06-29', '2018-06-30', ''),
(880, 'J-10062', 64, '2018-06-29', '2018-06-30', ''),
(881, 'J-10062', 66, '2018-06-29', '2018-06-30', ''),
(882, 'J-10062', 67, '2018-06-29', '2018-06-30', ''),
(883, 'J-10062', 70, '2018-06-29', '2018-06-30', ''),
(884, 'J-10063', 1, '2018-06-28', '2018-06-30', 'pimpinan'),
(885, 'J-10063', 5, '2018-06-28', '2018-06-30', 'pimpinan'),
(886, 'J-10063', 4, '2018-06-28', '2018-06-30', ''),
(887, 'J-10063', 14, '2018-06-28', '2018-06-30', ''),
(888, 'J-10063', 31, '2018-06-28', '2018-06-30', ''),
(889, 'J-10063', 41, '2018-06-28', '2018-06-30', ''),
(890, 'J-10063', 53, '2018-06-28', '2018-06-30', ''),
(891, 'J-10063', 57, '2018-06-28', '2018-06-30', ''),
(892, 'J-10064', 1, '2018-06-28', '2018-06-29', 'pimpinan'),
(893, 'J-10064', 5, '2018-06-28', '2018-06-29', 'pimpinan'),
(894, 'J-10064', 3, '2018-06-28', '2018-06-29', ''),
(895, 'J-10064', 7, '2018-06-28', '2018-06-29', ''),
(896, 'J-10064', 53, '2018-06-28', '2018-06-29', ''),
(897, 'J-10065', 3, '2018-07-03', '2018-07-05', 'pimpinan'),
(898, 'J-10065', 4, '2018-07-03', '2018-07-05', 'pimpinan'),
(899, 'J-10065', 2, '2018-07-03', '2018-07-05', ''),
(900, 'J-10065', 7, '2018-07-03', '2018-07-05', ''),
(901, 'J-10065', 53, '2018-07-03', '2018-07-05', ''),
(902, 'J-10066', 2, '2018-07-06', '2018-07-10', 'pimpinan'),
(903, 'J-10066', 3, '2018-07-06', '2018-07-10', 'pimpinan'),
(904, 'J-10066', 68, '2018-07-06', '2018-07-10', ''),
(905, 'J-10066', 69, '2018-07-06', '2018-07-10', ''),
(906, 'J-10066', 54, '2018-07-06', '2018-07-10', ''),
(907, 'J-10067', 1, '2018-06-30', '2018-07-03', 'pimpinan'),
(908, 'J-10067', 5, '2018-06-30', '2018-07-03', 'pimpinan'),
(909, 'J-10067', 10, '2018-06-30', '2018-07-03', ''),
(910, 'J-10067', 15, '2018-06-30', '2018-07-03', ''),
(911, 'J-10067', 19, '2018-06-30', '2018-07-03', ''),
(912, 'J-10067', 24, '2018-06-30', '2018-07-03', ''),
(913, 'J-10067', 28, '2018-06-30', '2018-07-03', ''),
(914, 'J-10067', 32, '2018-06-30', '2018-07-03', ''),
(915, 'J-10067', 37, '2018-06-30', '2018-07-03', ''),
(916, 'J-10067', 42, '2018-06-30', '2018-07-03', ''),
(917, 'J-10067', 46, '2018-06-30', '2018-07-03', ''),
(918, 'J-10067', 68, '2018-06-30', '2018-07-03', ''),
(919, 'J-10067', 53, '2018-06-30', '2018-07-03', ''),
(920, 'J-10067', 57, '2018-06-30', '2018-07-03', ''),
(928, 'J-10068', 5, '2018-07-02', '2018-07-05', 'pimpinan'),
(929, 'J-10068', 6, '2018-07-02', '2018-07-05', 'pimpinan'),
(930, 'J-10068', 1, '2018-07-02', '2018-07-05', ''),
(931, 'J-10068', 2, '2018-07-02', '2018-07-05', ''),
(932, 'J-10068', 3, '2018-07-02', '2018-07-05', ''),
(933, 'J-10068', 53, '2018-07-02', '2018-07-05', ''),
(934, 'J-10068', 57, '2018-07-02', '2018-07-05', ''),
(935, 'J-10069', 5, '2018-07-02', '2018-07-05', 'pimpinan'),
(936, 'J-10069', 6, '2018-07-02', '2018-07-05', 'pimpinan'),
(937, 'J-10069', 1, '2018-07-02', '2018-07-05', ''),
(938, 'J-10069', 2, '2018-07-02', '2018-07-05', ''),
(939, 'J-10069', 3, '2018-07-02', '2018-07-05', ''),
(940, 'J-10069', 53, '2018-07-02', '2018-07-05', ''),
(941, 'J-10069', 57, '2018-07-02', '2018-07-05', ''),
(942, 'J-10070', 4, '2018-07-01', '2018-07-02', 'pimpinan'),
(943, 'J-10070', 6, '2018-07-01', '2018-07-02', 'pimpinan'),
(944, 'J-10070', 1, '2018-07-01', '2018-07-02', ''),
(945, 'J-10070', 2, '2018-07-01', '2018-07-02', ''),
(946, 'J-10070', 3, '2018-07-01', '2018-07-02', ''),
(947, 'J-10070', 53, '2018-07-01', '2018-07-02', ''),
(948, 'J-10070', 57, '2018-07-01', '2018-07-02', ''),
(949, 'J-10070', 62, '2018-07-01', '2018-07-02', ''),
(950, 'J-10070', 66, '2018-07-01', '2018-07-02', ''),
(951, 'J-10071', 2, '2018-07-01', '2018-07-02', 'pimpinan'),
(952, 'J-10071', 3, '2018-07-01', '2018-07-02', 'pimpinan'),
(953, 'J-10071', 1, '2018-07-01', '2018-07-02', ''),
(954, 'J-10071', 5, '2018-07-01', '2018-07-02', ''),
(955, 'J-10071', 10, '2018-07-01', '2018-07-02', ''),
(956, 'J-10071', 15, '2018-07-01', '2018-07-02', ''),
(957, 'J-10071', 19, '2018-07-01', '2018-07-02', ''),
(958, 'J-10071', 24, '2018-07-01', '2018-07-02', ''),
(959, 'J-10071', 28, '2018-07-01', '2018-07-02', ''),
(960, 'J-10071', 32, '2018-07-01', '2018-07-02', ''),
(961, 'J-10071', 37, '2018-07-01', '2018-07-02', ''),
(962, 'J-10071', 42, '2018-07-01', '2018-07-02', ''),
(963, 'J-10071', 46, '2018-07-01', '2018-07-02', ''),
(964, 'J-10071', 68, '2018-07-01', '2018-07-02', ''),
(965, 'J-10071', 53, '2018-07-01', '2018-07-02', ''),
(966, 'J-10071', 57, '2018-07-01', '2018-07-02', ''),
(967, 'J-10071', 62, '2018-07-01', '2018-07-02', ''),
(968, 'J-10071', 66, '2018-07-01', '2018-07-02', ''),
(969, 'J-10072', 5, '2018-07-18', '2018-07-20', 'pimpinan'),
(970, 'J-10072', 1, '2018-07-18', '2018-07-20', ''),
(971, 'J-10072', 10, '2018-07-18', '2018-07-20', ''),
(972, 'J-10072', 15, '2018-07-18', '2018-07-20', ''),
(973, 'J-10072', 19, '2018-07-18', '2018-07-20', ''),
(974, 'J-10072', 24, '2018-07-18', '2018-07-20', ''),
(975, 'J-10072', 28, '2018-07-18', '2018-07-20', ''),
(976, 'J-10072', 32, '2018-07-18', '2018-07-20', ''),
(977, 'J-10072', 37, '2018-07-18', '2018-07-20', ''),
(978, 'J-10072', 42, '2018-07-18', '2018-07-20', ''),
(979, 'J-10072', 46, '2018-07-18', '2018-07-20', ''),
(980, 'J-10072', 53, '2018-07-18', '2018-07-20', ''),
(981, 'J-10072', 54, '2018-07-18', '2018-07-20', ''),
(982, 'J-10072', 55, '2018-07-18', '2018-07-20', ''),
(983, 'J-10072', 56, '2018-07-18', '2018-07-20', ''),
(984, 'J-10072', 57, '2018-07-18', '2018-07-20', ''),
(985, 'J-10072', 58, '2018-07-18', '2018-07-20', ''),
(986, 'J-10072', 59, '2018-07-18', '2018-07-20', ''),
(987, 'J-10072', 60, '2018-07-18', '2018-07-20', ''),
(988, 'J-10072', 61, '2018-07-18', '2018-07-20', ''),
(989, 'J-10072', 62, '2018-07-18', '2018-07-20', ''),
(990, 'J-10072', 63, '2018-07-18', '2018-07-20', ''),
(991, 'J-10072', 64, '2018-07-18', '2018-07-20', ''),
(992, 'J-10072', 65, '2018-07-18', '2018-07-20', ''),
(993, 'J-10072', 66, '2018-07-18', '2018-07-20', ''),
(994, 'J-10072', 67, '2018-07-18', '2018-07-20', ''),
(995, 'J-10072', 70, '2018-07-18', '2018-07-20', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hasil_jaldis`
--

CREATE TABLE `hasil_jaldis` (
  `id` int(9) NOT NULL,
  `kode_jaldis` varchar(7) NOT NULL,
  `nama_file` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `hasil_jaldis`
--

INSERT INTO `hasil_jaldis` (`id`, `kode_jaldis`, `nama_file`) VALUES
(1, 'J-10034', '1.png'),
(2, 'J-10034', '11.png'),
(3, 'J-10024', 'J-100071.png'),
(4, 'J-10007', 'J-1000711.png'),
(5, 'J-10008', 'J-100081.png'),
(6, 'J-10018', 'J-100181521995907.png'),
(7, 'J-10018', 'J-100181.png'),
(8, 'J-10018', 'J-1001811.png'),
(9, 'J-10009', 'J-100091.jpg'),
(10, 'J-10018', 'J-100181.jpg'),
(11, 'J-10018', 'J-1001811.jpg'),
(12, 'J-10018', 'J-1001812.png'),
(13, 'J-10010', 'J-100101.png'),
(14, 'J-10010', 'J-100101.jpeg'),
(15, 'J-10011', 'J-100111.png'),
(16, 'J-10011', 'J-1001111.png'),
(17, 'J-10018', 'J-1001812.jpg'),
(18, 'J-10018', 'J-1001813.jpg'),
(19, 'J-10018', 'J-1001813.png'),
(20, 'J-10018', 'J-1001814.png'),
(21, 'J-10018', 'J-1001815.png'),
(22, 'J-10018', 'J-1001816.png'),
(23, 'J-10018', 'J-1001817.png'),
(24, 'J-10018', 'J-1001818.png'),
(25, 'J-10018', 'J-1001819.png'),
(26, 'J-10018', 'J-10018110.png'),
(27, 'J-10018', 'J-10018111.png'),
(28, 'J-10018', 'J-10018112.png'),
(29, 'J-10018', 'J-10018113.png'),
(30, 'J-10018', 'J-1001814.jpg'),
(31, 'J-10018', 'J-10018114.png'),
(32, 'J-10018', 'J-1001815.jpg'),
(33, 'J-10018', 'J-1001816.jpg'),
(34, 'J-10018', 'J-1001817.jpg'),
(35, 'J-10012', 'J-100121521997797.jpg'),
(36, 'J-10012', 'J-1001215219977971.jpg'),
(37, 'J-10013', 'J-100131521997852.jpg'),
(38, 'J-10013', 'J-100131521997853.jpg'),
(39, 'J-10055', 'J-100551.jpg'),
(40, 'J-10055', 'J-1005511.jpg'),
(41, 'J-10055', 'J-1005512.jpg'),
(42, 'J-10055', 'J-1005513.jpg'),
(43, 'J-10045', 'J-100451.jpg'),
(44, 'J-10046', 'J-100461.jpg'),
(45, 'J-10047', 'J-100471.jpg'),
(46, 'J-10053', 'J-100531.jpg'),
(47, 'J-10045', 'J-1004511.jpg'),
(48, 'J-10047', 'J-1004711.jpg'),
(49, 'J-10047', 'J-1004712.jpg'),
(50, 'J-10072', 'J-100721.jpg'),
(51, 'J-10072', 'J-1007211.jpg'),
(52, 'J-10072', 'J-1007212.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hasil_rapat`
--

CREATE TABLE `hasil_rapat` (
  `id` int(9) NOT NULL,
  `kode_rapat` varchar(7) NOT NULL,
  `nama_file` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `hasil_rapat`
--

INSERT INTO `hasil_rapat` (`id`, `kode_rapat`, `nama_file`) VALUES
(1, '12', '1527760251.jpg'),
(2, '12', '15277602511.jpg'),
(3, '12', '1527760322.jpg'),
(6, '12', '1527784076.jpg'),
(7, '12', '15277840761.jpg'),
(8, '12', '15277840762.jpg'),
(9, '1', '1533184285.jpg'),
(10, '1', '1533184285.PNG'),
(11, '1', '15331842851.png'),
(12, '1', '1533184348.jpg'),
(13, '1', '15331843481.jpg'),
(14, '1', '15331843482.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jaldis`
--

CREATE TABLE `jaldis` (
  `id` int(9) NOT NULL,
  `kode_jaldis` varchar(7) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `tujuan` varchar(1000) NOT NULL,
  `pimpinan` varchar(9) NOT NULL,
  `transportasi` varchar(50) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `keperluan` varchar(30000) NOT NULL,
  `alat_kelengkapan` varchar(7) NOT NULL,
  `diterima` varchar(100) NOT NULL,
  `catatan` varchar(30000) NOT NULL,
  `anggaran` varchar(20) NOT NULL,
  `tanggal_ttd` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jaldis`
--

INSERT INTO `jaldis` (`id`, `kode_jaldis`, `start_date`, `end_date`, `tujuan`, `pimpinan`, `transportasi`, `kategori`, `keperluan`, `alat_kelengkapan`, `diterima`, `catatan`, `anggaran`, `tanggal_ttd`) VALUES
(46, 'J-10045', '2018-05-04', '2018-05-08', 'baru', '14', 'Pesawat Terbang', '1', 'baru', 'anggota', 'df', '<ol><li>Capaian\r\nkinerja Setwan selama catur wulan pertama pada \r\ntahun 2018 sudah cukup baik, yaitu penyerapan anggaran sebesar 20,43\r\npersen sedangkan secara fusik sebesar 39,77 persen, namun perlu ditingkatkan\r\nlagi agar output fisik dan penyerapan anggaran agar dapat lebih optimal.</li><li>Perhitungan\r\nTPP dilingkungan pemkot smg menggunakan kelas jabatan.</li><li>Dalam\r\npemberian TPP dilingkungan RSUD kota smg \r\nperlu ditinjau kembali agar tidak menimbulkan gap yg terlalu lebar dg\r\nOPD lainnya.</li><li>Komisi\r\nA DPRD kota smg pada dasarnya menyetujui rencana kenaikan TPP bagi ASN di Kota\r\nSemarang sepanjang sesuai dg RPJMD dan kenaikannya tdk lebih dari 50 persen.</li><li>Untuk\r\nbiaya perjalanan dinas dibayarkan sesuai dg surat tugas yg meliputi biaya\r\ntransportasi, biaya penginapan, uang harian dan uang representasi berdasarkan\r\nSSH.</li><li>Pemkot\r\nsmg agar mengkaji ulang terkait dg SSH representasi perjalanan dinas bagi\r\nanggota DPRD menyesuaikan dg besaran representasi pimpinan dewan.</li><li>Sehubungan\r\ndg penghapusan uang representasi perjalanan dinas bagi pejabat eselon 3 dan 4,\r\nmaka diusulkan agar besaran uang harian ditinjau ulang utk dinaikkan.</li><li>TAPD\r\ndimohon bisa memaparkan kajian ttg SSH representasi dan  TPP ASN sebelum pembahasan KUA PPAS.</li></ol>', '11', '2018-05-20'),
(47, 'J-10046', '2018-05-18', '2018-05-21', '3', '', 'Kereta Api', '1', '4', 'semua', 'c', '<ol><li>Pembentukan BUMD termasuk BPR Syariah berpedoman pd PP No 54 Th 2017 ttg BUMD yg baru ditetapkan pd bulan Desember 2017 shg materi raperda yg telah disusun sebelumnya harus disesuaikan</li><li>Usulan pendirian BUMD dilakukan Kepala Daerah kpd Menteri</li><li>Usulan pendirian diatas dilampiri :</li><ul><li>Kebutuhan daerah</li><li>Analisa kelayakan usaha</li><li>Ringkasan laporan keuangan Pemerintah Daerah 3 thn terakhir</li><li>Dokumen Perda ttg APBD 3 thn terakhir</li><li>Dokumen RPJMD</li></ul><li>Menteri melakukan penilaian atas usulan rencana pendirian BUMD dimana hasil penelitian tsb disampaikan kpd gubernur dan bupati/ walikota plng lmbat 15 hari kerja sejakusulan rencana pendirian BUMD diterima</li><li>Berdasarkan hasil penilaian diatas, Daerah dpt menyusun raperda yg mengatur ttg pendirian BUMD</li><li>Pansus akan mengajukan permohonan pendampingan selama pembahasan kpd Otoritas Jasa Keuangan Wil Prov Jawa tengah dan DIY</li></ol>', '354', '2018-05-04'),
(48, 'J-10047', '2018-05-17', '2018-05-23', 'ffff', '', 'Kendaraan Roda Empat', '2', 'fffff', 'K-00001', 'd', '<ol><li>Menyetujui permohonan komisi A utk merubah waktu kunker dalam provinsi semula tgl 21-22 juni 2018 menjadi tgl 3-4 juni 2018</li><li>Menyetujui permohonan BPP utk mengubah waktu kunker semula tgl 24-27 juni menjadi tgl 1-4 juli 2018</li><li><div>Merubah jadwal dan menjadwalkan kegiatan baru</div></li></ol>', '555', '2018-05-04'),
(49, 'J-10048', '2018-05-23', '2018-05-26', 'aa', '', 'Pesawat Terbang', '3', 'aaa', 'semua', '', '', '6', '2018-05-04'),
(50, 'J-10049', '2018-05-08', '2018-05-11', 'bb', '', 'Kereta Api', '2', 'cc', 'K-00001', '', '', '1', '2018-05-04'),
(51, 'J-10050', '2018-05-16', '2018-05-19', 'setwan', '', 'Kereta Api', '2', 'setwan', 'anggota', '', '', '53', '2018-05-04'),
(52, 'J-10051', '2018-05-16', '2018-05-19', '1', '', 'Kereta Api', '2', '1', 'anggota', '', '', '5', '2018-05-04'),
(53, 'J-10052', '2018-05-31', '2018-06-02', 's', '', 'Kereta Api', '2', 's', 'anggota', '', '', '3', '2018-05-04'),
(54, 'J-10053', '2018-05-25', '2018-05-27', 'vb', '', 'Kereta Api', '1', 'vb', 'B-00009', 'sfdg', 'sdfsdf<b>sdfsdf<i>sdfsdf<u>sdfsdfsdfsdf</u></i></b>', '345345000', '2018-05-04'),
(55, 'J-10054', '2018-05-25', '2018-05-26', 'asdas', '', 'Kendaraan Roda Empat', '2', 'bintek', 'intek', '', '', '55', '2018-05-04'),
(56, 'J-10055', '2018-05-29', '2018-06-02', 'asdasd', '14', 'Kendaraan Roda Empat', '1', 'asdasd', 'K-00001', 'contoh', 'sdfsdfsdf<b>sdfsdfsdf<i>sdfsdfsdf<u>sdfsdfsdf<br></u></i></b><br><ul><li><b><i><u>sdfsdfssdf</u></i></b></li><li><b><i><u>sdfsdf</u></i></b></li><li><b><i><u>sdf</u></i></b></li></ul>', '4', '2018-05-04'),
(57, 'J-10056', '2018-06-06', '2018-06-08', 'Batang', '2', 'Kendaraan Roda Empat', '1', 'jnjn', 'intek', '', '', '2', '2018-05-04'),
(58, 'J-10057', '2018-06-30', '2018-07-02', 'v', '14', 'Kendaraan Roda Empat', '1', 'dfv', 'P-00001', '', '', '', '2018-06-29'),
(59, 'J-10058', '2018-06-14', '2018-06-14', 'gb', '3', 'Kendaraan Roda Empat', '1', 'gn', 'K-00001', '', '', '', '2018-06-12'),
(60, 'J-10059', '2018-06-22', '2018-06-23', 'f', '7', 'Kendaraan Roda Empat', '2', 'v', 'K-00001', '', '', '', '2018-06-07'),
(61, 'J-10060', '2018-06-25', '2018-06-26', 'f', '7', 'Kendaraan Roda Empat', '1', 'f', 'anggota', '', '', '', '2018-06-25'),
(62, 'J-10061', '2018-06-28', '2018-06-29', 'f', '12', 'Kendaraan Roda Empat', '1', 'f', 'K-00003', '', '', '', '2018-06-27'),
(63, 'J-10062', '2018-06-29', '2018-06-30', 'f', '24', 'Kendaraan Roda Empat', '2', 'sdf', 'K-00003', 'gvg', 'dsfsd', '10000909', '2018-06-25'),
(64, 'J-10063', '2018-06-28', '2018-06-30', 'g', '15', 'Kendaraan Roda Empat', '1', 'f', 'K-00003', '', '', '', '2018-06-27'),
(65, 'J-10064', '2018-06-28', '2018-06-29', 'h', '6', 'Kendaraan Roda Empat', '2', 'fgh', 'B-00009', '', '', '', '2018-06-29'),
(66, 'J-10065', '2018-07-03', '2018-07-05', 'n', '3', 'Pesawat Terbang', '3', 'fg', 'P-00001', '', '', '', '2018-06-04'),
(67, 'J-10066', '2018-07-06', '2018-07-10', 'f', '48', 'Kendaraan Roda Empat', '2', 'v', 'intek', '', '', '', '2018-06-16'),
(68, 'J-10067', '2018-06-30', '2018-07-03', 'k', '16', 'Kendaraan Roda Empat', '2', 'j', 'K-00001', '', '', '', '2018-06-30'),
(69, 'J-10068', '2018-07-02', '2018-07-05', 'panja', '6', 'Kendaraan Roda Empat', '1', 'sfdg', 'J-00001', '', '', '', '2018-07-01'),
(70, 'J-10069', '2018-07-02', '2018-07-05', 'panja', '6', 'Kereta Api', '2', 'panja', 'J-00001', '', '', '', '2018-07-01'),
(71, 'J-10070', '2018-07-01', '2018-07-02', 'sdf', '6', 'Pesawat Terbang', '1', 'dsfgsd', 'J-00001', '', '', '', '2018-07-01'),
(72, 'J-10071', '2018-07-01', '2018-07-02', 'tes pimpinan', '2', 'Kereta Api', '2', 'tes pimpinan', 'K-00001', '', '', '', '2018-07-01'),
(73, 'J-10072', '2018-07-18', '2018-07-20', 'DRPD Kabupaten Batu', '5', 'Pesawat Terbang', '1', 'tes', 'K-00001', 't', 'k', '770000000', '2018-07-16');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori_keperluan`
--

CREATE TABLE `kategori_keperluan` (
  `id` int(9) NOT NULL,
  `nama_keperluan` varchar(100) NOT NULL,
  `status` enum('1','0') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori_keperluan`
--

INSERT INTO `kategori_keperluan` (`id`, `nama_keperluan`, `status`) VALUES
(1, 'Tupoksi Kunjungan Kerja', '1'),
(2, 'Tupoksi Konsultasi', '1'),
(3, 'Kajian Kunjungan Kerja', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `keterangan_jaldis`
--

CREATE TABLE `keterangan_jaldis` (
  `id` int(9) NOT NULL,
  `kode_jaldis` varchar(7) NOT NULL,
  `id_anggota` int(9) NOT NULL,
  `keterangan` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `keterangan_jaldis`
--

INSERT INTO `keterangan_jaldis` (`id`, `kode_jaldis`, `id_anggota`, `keterangan`) VALUES
(1, 'J-10018', 1, 'Sakit');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kode_rekening`
--

CREATE TABLE `kode_rekening` (
  `id` int(9) NOT NULL,
  `kode_rekening` varchar(50) NOT NULL,
  `pptk` varchar(50) NOT NULL,
  `anggaran` varchar(20) NOT NULL,
  `status` enum('1','0') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kode_rekening`
--

INSERT INTO `kode_rekening` (`id`, `kode_rekening`, `pptk`, `anggaran`, `status`) VALUES
(2, '310', 'Bu Rini Sayuti', '90000000', '1'),
(3, '111', 'Bu Susi', '8000000', '1'),
(4, '33', '33rr', '333344', '0'),
(5, '3.1.05.3.1.05.04.15.007.5.2.2.17.02', 'hh', '345345', '1'),
(6, '12.678.09.89.456.90.00.07.08.6.89.9.0.000.56.0.1', 'Surya Pranata, S.Sos', '700000000', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `komisi`
--

CREATE TABLE `komisi` (
  `id` int(9) NOT NULL,
  `id_komisi` varchar(7) NOT NULL,
  `nama_komisi` varchar(200) NOT NULL,
  `keterangan` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `komisi`
--

INSERT INTO `komisi` (`id`, `id_komisi`, `nama_komisi`, `keterangan`) VALUES
(1, 'K-00001', 'KOMISI A', 'Bidang Pemerintahan (Meliputi pemerintahan umum, kepegawaian/aparatur, ketentraman dan ketertiban, hukum/perundang-undangan, perijinan, pertanahan, kependudukan dan catatan sipil, pemadam kebakaran dan penanggulangan bencana, kesatuan bangsa dan politik, organisasi dan tata laksana, kepala daerah dan kerjasama luar negeri, tata pemerintahan, perlindungan masyarakat, pendidikan dan pelatihan pegawai, kewilayahan, komunikasi, informatika dan kehumasan)'),
(2, 'K-00002', 'KOMISI B', 'Bidang Perekonomian (Meliputi perindustrian dan energi, kelautan dan pertanian, koperasi, usaha mikro, kecil dan menengah dan perdagangan, pariwisata dan kebudayaan, penanaman modal dan promosi, ketahanan pangan, perhubungan, perikanan, peternakan, ketenagakerjaan dan transmigrasi, pemberdayaan aset/kekayaan daerah, perusahaan daerah)'),
(3, 'K-00003', 'KOMISI C', 'Menangani masalah Suku, Agama, Ras dan Abdul :D'),
(4, 'K-00004', 'Komisi XXX', 'fgdsfg'),
(5, 'K-00005', 'Komisi XXX', 'dfgdfg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `log_activity`
--

CREATE TABLE `log_activity` (
  `id` int(9) NOT NULL,
  `aktor` int(9) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `waktu` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `log_activity`
--

INSERT INTO `log_activity` (`id`, `aktor`, `keterangan`, `waktu`) VALUES
(1, 1, 'Menghapus data perjalanan dinas', '2018-02-23 08:38:37'),
(2, 1, 'Menghapus data perjalanan dinas', '2018-02-23 08:39:09'),
(3, 1, 'Menghapus data perjalanan dinas', '2018-02-23 14:40:24'),
(4, 1, 'Menambah data perjalanan dinas', '2018-02-23 22:21:06'),
(5, 1, 'Menambah data perjalanan dinas', '2018-02-23 22:25:32'),
(6, 1, 'Menambah data perjalanan dinas', '2018-02-23 22:36:05'),
(7, 1, 'Menambah data perjalanan dinas', '2018-02-23 22:36:27'),
(8, 1, 'Mengubah foto anggota', '2018-02-24 21:01:55'),
(9, 1, 'Mengubah foto anggota', '2018-02-24 21:03:04'),
(10, 1, 'Mengubah foto anggota', '2018-02-24 21:04:04'),
(11, 1, 'Menambah data pembentukan PANSUS', '2018-02-24 22:05:27'),
(12, 1, 'Menambah data pembentukan PANSUS', '2018-02-24 23:58:25'),
(13, 1, 'Menambah data pembentukan PANSUS', '2018-02-25 00:30:11'),
(14, 1, 'Menghapus data PANSUS', '2018-02-25 01:01:29'),
(15, 1, 'Menghapus data PANSUS', '2018-02-25 01:01:55'),
(16, 1, 'Menambah data perjalanan dinas', '2018-02-26 10:17:04'),
(17, 1, 'Menambah data anggota baru', '2018-03-05 21:57:11'),
(18, 1, 'Menambah data anggota baru', '2018-03-05 22:01:08'),
(19, 1, 'Menambah data anggota baru', '2018-03-05 23:25:29'),
(20, 1, 'Menambah data anggota baru', '2018-03-05 23:27:27'),
(21, 1, 'Menambah data pembentukan PANSUS', '2018-03-07 22:27:11'),
(22, 1, 'Menambah data anggota baru', '2018-03-07 22:53:28'),
(23, 1, 'Menambah data pembentukan Komisi', '2018-03-08 00:19:30'),
(24, 1, 'Menambah data pembentukan Komisi', '2018-03-08 00:20:35'),
(25, 1, 'Menambah data pembentukan Komisi', '2018-03-08 11:49:00'),
(26, 1, 'Menambah data pembentukan Komisi', '2018-03-08 13:35:39'),
(27, 1, 'Mengubah jabatan anggota Komisi', '2018-03-08 13:35:44'),
(28, 1, 'Menghapus data komisi', '2018-03-08 13:40:28'),
(29, 1, 'Alat kelengkapan Badan telah selesai tugas', '2018-03-08 17:27:09'),
(30, 1, 'Menambah data pembentukan Komisi', '2018-03-08 23:37:35'),
(31, 1, 'Mengubah jabatan anggota Komisi', '2018-03-08 23:38:21'),
(32, 1, 'Menambah data pembentukan PANSUS', '2018-03-08 23:39:33'),
(33, 1, 'Menghapus data PANSUS', '2018-03-08 23:45:44'),
(34, 1, 'Menambah data pembentukan panitia Badan kurang sehat', '2018-03-08 23:55:52'),
(35, 1, 'Mengubah data PANSUS', '2018-03-09 00:34:27'),
(36, 1, 'Menghapus data PANSUS', '2018-03-09 00:46:39'),
(37, 1, 'Menghapus data PANSUS', '2018-03-09 00:48:27'),
(38, 1, 'Mengubah data PANSUS', '2018-03-09 00:49:24'),
(39, 1, 'Mengubah data PANSUS', '2018-03-09 00:50:10'),
(40, 1, 'Mengubah data PANSUS', '2018-03-09 00:50:47'),
(41, 1, 'Mengubah data PANSUS', '2018-03-09 00:50:52'),
(42, 1, 'Menghapus data PANSUS', '2018-03-09 00:54:05'),
(43, 1, 'Mengubah foto anggota', '2018-03-09 18:43:09'),
(44, 1, 'Menghapus data anggota', '2018-03-09 18:44:01'),
(45, 1, 'Menghapus data komisi', '2018-03-09 18:45:30'),
(46, 1, 'Mengubah data Komisi', '2018-03-09 19:20:22'),
(47, 1, 'Mengubah data Komisi', '2018-03-09 19:20:47'),
(48, 1, 'Mengubah data Komisi', '2018-03-09 19:28:50'),
(49, 1, 'Mengubah data Komisi', '2018-03-09 19:29:08'),
(50, 1, 'Mengubah data Komisi', '2018-03-09 19:30:36'),
(51, 1, 'Mengubah data Komisi', '2018-03-09 19:32:48'),
(52, 1, 'Mengubah data Komisi', '2018-03-09 19:33:02'),
(53, 1, 'Mengubah data Komisi', '2018-03-09 19:33:23'),
(54, 1, 'Mengubah data PANSUS', '2018-03-09 20:58:27'),
(55, 1, 'Mengubah data PANSUS', '2018-03-09 21:01:12'),
(56, 1, 'Mengubah data PANSUS', '2018-03-09 21:06:36'),
(57, 1, 'Mengubah data PANSUS', '2018-03-09 22:56:33'),
(58, 1, 'Mengubah data PANSUS', '2018-03-09 22:57:27'),
(59, 1, 'Mengubah data PANSUS', '2018-03-09 22:57:45'),
(60, 1, 'Menambah data pembentukan panitia Badan gemuk', '2018-03-09 23:13:23'),
(61, 1, 'Alat kelengkapan Badan telah selesai tugas', '2018-03-09 23:13:38'),
(62, 1, 'Mengubah data Badan', '2018-03-10 13:08:51'),
(63, 1, 'Mengubah data Badan', '2018-03-10 13:13:15'),
(64, 1, 'Menambah data pembentukan panitia Badan pegel', '2018-03-10 13:15:54'),
(65, 1, 'Menambah data partai politik baru', '2018-03-10 13:45:31'),
(66, 1, 'Mengubah logo partai politik', '2018-03-10 13:45:59'),
(67, 1, 'Mengubah data anggota', '2018-03-10 21:10:11'),
(68, 1, 'Mengubah data anggota', '2018-03-10 21:13:12'),
(69, 1, 'Menambah data perjalanan dinas', '2018-03-11 19:55:42'),
(70, 1, 'Menambah data perjalanan dinas', '2018-03-11 21:26:30'),
(71, 1, 'Alat kelengkapan Badan telah selesai tugas', '2018-03-12 11:43:35'),
(72, 1, 'Menambah data perjalanan dinas', '2018-03-13 17:19:48'),
(73, 1, 'Menambah data anggota setwan baru', '2018-03-14 14:33:34'),
(74, 1, 'Menambah data anggota dewan baru', '2018-03-14 14:44:09'),
(75, 1, 'Mengubah nomor surat', '2018-03-14 15:59:52'),
(76, 1, 'Mengubah nomor surat', '2018-03-14 16:00:05'),
(77, 1, 'Menambah kode rekening baru', '2018-03-14 16:06:30'),
(78, 1, 'Mengubah data kode rekening', '2018-03-14 16:06:44'),
(79, 1, 'Menambah kode rekening baru', '2018-03-15 21:44:05'),
(80, 1, 'Menambah kode rekening baru', '2018-03-15 21:44:21'),
(81, 1, 'Menambah data perjalanan dinas', '2018-03-15 23:33:34'),
(82, 1, 'Menambah data perjalanan dinas', '2018-03-15 23:37:35'),
(83, 1, 'Menambah data perjalanan dinas', '2018-03-15 23:44:26'),
(84, 1, 'Menambah data perjalanan dinas', '2018-03-15 23:46:38'),
(85, 1, 'Menambah data perjalanan dinas', '2018-03-15 23:47:37'),
(86, 1, 'Menambah data perjalanan dinas', '2018-03-15 23:50:47'),
(87, 1, 'Menambah data perjalanan dinas', '2018-03-16 00:21:27'),
(88, 1, 'Menambah data perjalanan dinas', '2018-03-16 10:42:47'),
(89, 1, 'Alat kelengkapan Badan telah selesai tugas', '2018-03-18 13:48:51'),
(90, 1, 'Alat kelengkapan Badan telah selesai tugas', '2018-03-18 13:50:48'),
(91, 1, 'Alat kelengkapan Badan telah selesai tugas', '2018-03-18 13:55:22'),
(92, 1, 'Alat kelengkapan Badan telah selesai tugas', '2018-03-18 13:58:20'),
(93, 1, 'Menambah data perjalanan dinas', '2018-03-18 21:01:14'),
(94, 1, 'Menambah data perjalanan dinas', '2018-03-19 20:17:50'),
(95, 1, 'Menambah data perjalanan dinas', '2018-03-19 20:19:39'),
(96, 1, 'Menambah data perjalanan dinas', '2018-03-19 20:20:23'),
(97, 1, 'Menambah data perjalanan dinas', '2018-03-19 20:21:17'),
(98, 1, 'Menambah data perjalanan dinas', '2018-03-19 20:22:19'),
(99, 1, 'Menambah data perjalanan dinas', '2018-03-19 20:23:09'),
(100, 1, 'Menambah data perjalanan dinas', '2018-03-19 20:24:09'),
(101, 1, 'Menambah data anggota dewan baru', '2018-03-21 16:29:39'),
(102, 1, 'Menambah data anggota setwan baru', '2018-03-21 16:29:53'),
(103, 1, 'Menambah data anggota dewan baru', '2018-03-22 19:29:59'),
(104, 1, 'Menambah data anggota setwan baru', '2018-03-22 19:30:28'),
(105, 1, 'Menambah data pembentukan Komisi', '2018-03-22 19:31:28'),
(106, 1, 'Menambah data perjalanan dinas', '2018-03-22 19:37:04'),
(107, 1, 'Menambah data pembentukan Komisi', '2018-03-22 22:14:32'),
(108, 1, 'Menambah data pembentukan panitia dfvdfv', '2018-03-22 22:18:22'),
(109, 1, 'Menambah data pembentukan PANSUS', '2018-03-22 22:24:48'),
(110, 1, 'Menghapus data komisi', '2018-03-22 22:25:41'),
(111, 1, 'Menghapus data komisi', '2018-03-22 22:25:44'),
(112, 1, 'Menghapus data komisi', '2018-03-22 22:25:47'),
(113, 1, 'Mengubah data Komisi', '2018-03-22 22:26:11'),
(114, 1, 'Mengubah jabatan anggota Komisi', '2018-03-22 22:26:23'),
(115, 1, 'Menambah data pembentukan PANSUS', '2018-03-22 22:35:39'),
(116, 1, 'Alat kelengkapan Badan telah selesai tugas', '2018-03-22 22:46:06'),
(117, 1, 'Mengubah nomor surat', '2018-03-22 23:00:27'),
(118, 1, 'Menambah data partai politik baru', '2018-03-22 23:01:11'),
(119, 1, 'Mengubah logo partai politik', '2018-03-22 23:02:09'),
(120, 1, 'Mengubah data partai politik', '2018-03-22 23:02:24'),
(121, 1, 'Menghapus data partai politik', '2018-03-22 23:02:48'),
(122, 1, 'Menambah kode rekening baru', '2018-03-22 23:07:44'),
(123, 1, 'Mengubah data kode rekening', '2018-03-22 23:07:53'),
(124, 1, 'Menambah data perjalanan dinas', '2018-03-22 23:18:14'),
(125, 1, 'Menambah data perjalanan dinas', '2018-03-23 00:04:08'),
(126, 1, 'Menambah data perjalanan dinas', '2018-03-23 00:06:23'),
(127, 1, 'Menambah data perjalanan dinas', '2018-03-29 14:33:46'),
(128, 1, 'Menambah nomor surat baru', '2018-04-05 00:42:27'),
(129, 1, 'Mengubah nomor surat', '2018-04-05 00:42:56'),
(130, 1, 'Menambah data perjalanan dinas', '2018-04-10 17:46:08'),
(131, 1, 'Alat kelengkapan Badan telah selesai tugas', '2018-04-11 14:46:25'),
(132, 1, 'Menambah data perjalanan dinas', '2018-04-20 20:35:04'),
(133, 1, 'Menambah data perjalanan dinas', '2018-04-22 14:35:15'),
(134, 1, 'Menambah data perjalanan dinas', '2018-04-23 11:20:09'),
(135, 1, 'Mengubah data perjalanan dinas', '2018-04-23 14:09:20'),
(136, 1, 'Mengubah data perjalanan dinas', '2018-04-23 14:10:43'),
(137, 1, 'Menambah data perjalanan dinas', '2018-04-25 21:44:28'),
(138, 1, 'Menambah kode rekening baru', '2018-04-30 17:33:42'),
(139, 1, 'Menambah data pembentukan Komisi', '2018-04-30 17:44:45'),
(140, 1, 'Menambah data pembentukan PANSUS', '2018-04-30 17:45:20'),
(141, 1, 'Menambah data pembentukan panitia ,nj,n', '2018-04-30 17:45:43'),
(142, 1, 'Menambah data perjalanan dinas', '2018-04-30 17:49:40'),
(143, 1, 'Mengubah data perjalanan dinas', '2018-04-30 17:53:30'),
(144, 1, 'Menambah kode rekening baru', '2018-04-30 19:41:32'),
(145, 1, 'Mengubah data kode rekening', '2018-04-30 19:41:44'),
(146, 1, 'Menambah kategori keperluan baru', '2018-04-30 20:18:14'),
(147, 1, 'Menambah kategori keperluan baru', '2018-04-30 20:18:40'),
(148, 1, 'Mengubah kategori keperluan', '2018-04-30 20:35:28'),
(149, 1, 'Mengubah kategori keperluan', '2018-04-30 20:35:34'),
(150, 1, 'Mengubah kategori keperluan', '2018-04-30 20:35:45'),
(151, 1, 'Mengubah kategori keperluan', '2018-04-30 20:35:51'),
(152, 1, 'Menambah kategori keperluan baru', '2018-04-30 20:36:04'),
(153, 1, 'Mengubah kategori keperluan', '2018-04-30 20:38:03'),
(154, 1, 'Mengubah kategori keperluan', '2018-04-30 20:38:13'),
(155, 1, 'Mengubah kategori keperluan', '2018-04-30 20:38:22'),
(156, 1, 'Menambah data pembentukan Komisi', '2018-04-30 20:43:44'),
(157, 1, 'Mengubah jabatan anggota Komisi', '2018-04-30 20:44:19'),
(158, 1, 'Menambah data pembentukan Komisi', '2018-04-30 20:46:12'),
(159, 1, 'Menambah data pembentukan Komisi', '2018-04-30 20:49:43'),
(160, 1, 'Mengubah data Komisi', '2018-04-30 20:51:11'),
(161, 1, 'Menambah data pembentukan PANSUS', '2018-04-30 21:04:10'),
(162, 1, 'Menambah data pembentukan panitia xxxxxx', '2018-04-30 21:29:53'),
(163, 1, 'Mengubah data Badan', '2018-04-30 21:30:34'),
(164, 1, 'Mengubah data Badan', '2018-04-30 21:34:11'),
(165, 1, 'Mengubah data Badan', '2018-04-30 21:36:50'),
(166, 1, 'Mengubah data PANSUS', '2018-04-30 21:37:22'),
(167, 1, 'Mengubah data PANSUS', '2018-04-30 21:44:06'),
(168, 1, 'Mengubah data Komisi', '2018-04-30 21:44:42'),
(169, 1, 'Mengubah jabatan anggota Komisi', '2018-04-30 21:45:00'),
(170, 1, 'Mengubah data Komisi', '2018-04-30 21:45:20'),
(171, 1, 'Mengubah logo partai politik', '2018-04-30 21:46:10'),
(172, 1, 'Menambah data perjalanan dinas', '2018-05-01 20:46:29'),
(173, 1, 'Menambah data perjalanan dinas', '2018-05-02 21:33:58'),
(174, 1, 'Menambah data perjalanan dinas', '2018-05-03 00:22:31'),
(175, 1, 'Mengubah data perjalanan dinas', '2018-05-03 22:54:25'),
(176, 1, 'Menambah data perjalanan dinas', '2018-05-06 07:39:29'),
(177, 1, 'Mengubah data perjalanan dinas', '2018-05-06 07:40:08'),
(178, 1, 'Menambah data perjalanan dinas', '2018-05-06 07:42:24'),
(179, 1, 'Menambah data perjalanan dinas', '2018-05-06 10:20:53'),
(180, 1, 'Mengubah data perjalanan dinas', '2018-05-06 10:21:30'),
(181, 1, 'Mengubah data perjalanan dinas', '2018-05-06 10:36:19'),
(182, 1, 'Mengubah data perjalanan dinas', '2018-05-06 10:41:36'),
(183, 1, 'Mengubah data perjalanan dinas', '2018-05-06 10:42:18'),
(184, 1, 'Menambah data perjalanan dinas', '2018-05-06 11:15:23'),
(185, 1, 'Mengubah data perjalanan dinas', '2018-05-14 21:49:31'),
(186, 1, 'Mengubah data perjalanan dinas', '2018-05-14 21:50:03'),
(187, 1, 'Menambah data perjalanan dinas', '2018-05-14 21:51:18'),
(188, 1, 'Menambah data perjalanan dinas', '2018-05-14 21:52:19'),
(189, 1, 'Mengubah data perjalanan dinas', '2018-05-14 21:52:56'),
(190, 1, 'Mengubah data perjalanan dinas', '2018-05-14 21:55:21'),
(191, 1, 'Mengubah data perjalanan dinas', '2018-05-14 22:02:05'),
(192, 1, 'Menghapus data PANSUS', '2018-05-14 22:39:17'),
(193, 1, 'Alat kelengkapan Badan telah selesai tugas', '2018-05-14 22:39:34'),
(194, 1, 'Menambah data perjalanan dinas', '2018-05-15 00:40:02'),
(195, 1, 'Mengubah data master skpd', '2018-05-21 19:58:42'),
(196, 1, 'Mengubah data master skpd', '2018-05-21 19:59:05'),
(197, 1, 'Menghapus data SKPD', '2018-05-21 19:59:56'),
(198, 1, 'Menambah data SKPD baru', '2018-05-21 20:15:47'),
(199, 1, 'Menambah data perjalanan dinas', '2018-05-22 11:31:10'),
(200, 1, 'Menambah data SKPD baru', '2018-05-22 11:44:27'),
(201, 1, 'Menghapus data SKPD', '2018-05-22 11:44:31'),
(202, 1, 'Menambah data anggota dewan baru', '2018-05-30 10:42:17'),
(203, 1, 'Menambah data perjalanan dinas', '2018-06-02 12:59:51'),
(204, 1, 'Menambah data perjalanan dinas', '2018-06-05 12:17:10'),
(205, 1, 'Menambah data anggota dewan baru', '2018-06-07 12:59:41'),
(206, 1, 'Mengubah data anggota', '2018-06-07 13:03:35'),
(207, 1, 'Menambah data anggota setwan baru', '2018-06-07 13:04:22'),
(208, 1, 'Mengubah data anggota', '2018-06-07 13:11:04'),
(209, 1, 'Mengubah data perjalanan dinas', '2018-06-20 20:37:57'),
(210, 1, 'Menambah data pembentukan panitia asda', '2018-06-20 22:26:21'),
(211, 1, 'Alat kelengkapan Badan telah selesai tugas', '2018-06-20 22:26:28'),
(212, 1, 'Mengubah data Komisi', '2018-06-22 10:56:14'),
(213, 1, 'Mengubah data Komisi', '2018-06-22 10:56:31'),
(214, 1, 'Mengubah data Komisi', '2018-06-22 10:58:51'),
(215, 1, 'Menambah data pembentukan panitia Badan Keuangan', '2018-06-22 13:22:41'),
(216, 1, 'Menambah data perjalanan dinas', '2018-06-22 15:02:11'),
(217, 1, 'Menambah data perjalanan dinas', '2018-06-22 18:44:42'),
(218, 1, 'Menambah data perjalanan dinas', '2018-06-22 19:59:59'),
(219, 1, 'Mengubah data jabatan Pimpinan DPRD', '2018-06-25 18:24:30'),
(220, 1, 'Menambah data perjalanan dinas', '2018-06-25 18:43:31'),
(221, 1, 'Mengubah data perjalanan dinas', '2018-06-25 23:17:02'),
(222, 1, 'Menambah data perjalanan dinas', '2018-06-25 23:19:30'),
(223, 1, 'Mengubah data perjalanan dinas', '2018-06-25 23:25:49'),
(224, 1, 'Menambah data perjalanan dinas', '2018-06-25 23:32:16'),
(225, 1, 'Mengubah data perjalanan dinas', '2018-06-25 23:49:28'),
(226, 1, 'Mengubah data perjalanan dinas', '2018-06-26 00:01:24'),
(227, 1, 'Menambah data perjalanan dinas', '2018-06-26 10:02:30'),
(228, 1, 'Menambah data perjalanan dinas', '2018-06-26 10:08:36'),
(229, 1, 'Menambah data perjalanan dinas', '2018-06-26 10:20:53'),
(230, 1, 'Menambah data perjalanan dinas', '2018-06-26 10:23:49'),
(231, 1, 'Menambah data perjalanan dinas', '2018-06-29 10:51:24'),
(232, 1, 'Menambah data pembentukan Panja', '2018-07-02 10:42:05'),
(233, 1, 'Menambah data pembentukan Panja', '2018-07-02 10:43:32'),
(234, 1, 'Mengubah data Panja', '2018-07-02 10:44:44'),
(235, 1, 'Menambah data pembentukan Panja', '2018-07-02 10:45:39'),
(236, 1, 'Mengubah data Panja', '2018-07-02 10:48:02'),
(237, 1, 'Menghapus data Panja', '2018-07-02 10:48:41'),
(238, 1, 'Menambah data perjalanan dinas', '2018-07-02 11:33:50'),
(239, 1, 'Mengubah data perjalanan dinas', '2018-07-02 11:40:39'),
(240, 1, 'Menambah data perjalanan dinas', '2018-07-02 13:17:57'),
(241, 1, 'Menambah data perjalanan dinas', '2018-07-02 14:42:32'),
(242, 1, 'Menambah data perjalanan dinas', '2018-07-02 14:56:02'),
(243, 1, 'Menambah data perjalanan dinas', '2018-07-15 20:01:32');

-- --------------------------------------------------------

--
-- Struktur dari tabel `nomor_surat`
--

CREATE TABLE `nomor_surat` (
  `id` int(9) NOT NULL,
  `nomor_surat` varchar(10) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `ttd` varchar(100) NOT NULL,
  `nip` varchar(50) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `status` enum('1','0') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `nomor_surat`
--

INSERT INTO `nomor_surat` (`id`, `nomor_surat`, `keterangan`, `ttd`, `nip`, `jabatan`, `status`) VALUES
(1, '170', 'Surat Tugas Dewan', 'H. SUPRIYADI, S.Sos', '0', 'KETUA', '1'),
(2, '090', 'Surat Jalan', 'H. SUPRIYADI, S.Sos', '0', 'KETUA', '1'),
(3, '170', 'Surat Perintah', '', '', '', '0'),
(4, '080', 'Surat Tugas Setwan', 'Ir. EKO CAHYONO, MT', '196001041988031001', 'Pembina Utama Muda', '1'),
(5, '090', 'Surat Perjalanan Dinas', 'H. SUPRIYADI, S.Sos', '0', 'KETUA', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `panja`
--

CREATE TABLE `panja` (
  `id` int(9) NOT NULL,
  `kode_panja` varchar(7) NOT NULL,
  `nama_panja` varchar(200) NOT NULL,
  `perihal` text NOT NULL,
  `awal_periode` date NOT NULL,
  `akhir_periode` date NOT NULL,
  `hasil` varchar(30000) NOT NULL,
  `status` enum('1','0') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `panja`
--

INSERT INTO `panja` (`id`, `kode_panja`, `nama_panja`, `perihal`, `awal_periode`, `akhir_periode`, `hasil`, `status`) VALUES
(11, 'J-00001', 'tes panja ubah', 'ubah tes panja (tujuan)', '2018-07-02', '2018-09-02', '', '1'),
(12, 'J-00002', 'xxx', 'xxx tes', '2018-06-01', '2018-07-01', '<h3>sdf<b>sdfsdfsdf<i>sdfsdfsdf<u>sdfsdfsdfsdfsdf</u></i></b>sdfsdf</h3><ol><li>sdf</li><li>sdf</li><li>sdf</li><li>sdf</li></ol>', '0');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pansus`
--

CREATE TABLE `pansus` (
  `id` int(9) NOT NULL,
  `kode_pansus` varchar(7) NOT NULL,
  `nama_pansus` varchar(200) NOT NULL,
  `perihal` text NOT NULL,
  `awal_periode` date NOT NULL,
  `akhir_periode` date NOT NULL,
  `hasil` varchar(30000) NOT NULL,
  `status` enum('1','0') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pansus`
--

INSERT INTO `pansus` (`id`, `kode_pansus`, `nama_pansus`, `perihal`, `awal_periode`, `akhir_periode`, `hasil`, `status`) VALUES
(1, 'P-00001', 'Hak Angket untuk KPK', 'Aspek Kelembagaan<br>\n<li>Meminta presiden menyempurnakan struktur organisasi KPK sesuai dengan Undang-Undang Nomor 30 Tahun 2002 tentang KPK yang meliputi koordinasi, supervisi, penindakan, pencegahan, dan monitoring</li>\n<li>Meminta KPK meningkatkan kerja sama dengan lembaga penegak hukum dan lembaga lain, seperti Pusat Pelaporan Analisis dan Transaksi Keuangan serta perbankan, agar pemberantasan korupsi dapat dilakukan secara optimal, terintegrasi, dan bersinergi</li>\n<li>Meminta presiden serta KPK membentuk lembaga pengawas independen yang beranggotakan unsur internal KPK dan tokoh masyarakat yang berintegritas melalui peraturan presiden</li>\nAspek Kewenangan<br>\n<li>Meminta KPK membangun jaringan kerja yang kuat dalam menjalankan tugas koordinasi dengan kepolisian dan kejaksaan</li>\n<li>Meminta KPK memperhatikan prinsip hak asasi manusia serta mengacu pada hukum acara pidana yang berlaku dalam menjalankan tugas penyelidikan, penyidikan, dan penuntutan</li>\n<li>Meminta KPK membangun sistem pencegahan dan monitoring yang sistemik agar dapat mencegah korupsi berulang serta penyalahgunaan keuangan negara</li>', '2018-03-01', '2018-08-01', '', '1'),
(3, 'P-00003', 'TKA', 'Tidak Tahu', '2018-02-01', '2018-06-01', '', '1'),
(5, 'P-00005', 'RUU sdf', 'Tidak Tahu', '2018-01-01', '2018-03-01', '<h2><b><u>sdfsdf</u></b></h2>n<br><blockquote>l<br>l<br>l</blockquote><ol><li>n</li><li>n</li><li>n</li><li>n</li><li>n</li><li>n</li><li>n</li><li>m</li><li>m</li></ol><ul><li>m</li><li>m</li><li>m</li></ul>', '0'),
(6, 'P-00006', 'RUU Pemilu', 'vvv', '2018-03-31', '2018-05-19', '', '1'),
(7, 'P-00007', 'RUU Terorisme', 'nnn', '2018-02-01', '2018-03-21', '', '1'),
(8, 'P-00008', 'kn', 'lkj', '2018-04-04', '2018-05-04', '', '0'),
(9, 'P-00009', 'Angket untuk Bank Century', 'svsdfv', '0000-00-00', '0000-00-00', '', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `peserta_rapat`
--

CREATE TABLE `peserta_rapat` (
  `id` int(9) NOT NULL,
  `kode_rapat` varchar(7) NOT NULL,
  `anggota` varchar(200) NOT NULL,
  `keterangan` varchar(7) NOT NULL,
  `sebelum` enum('1','0') NOT NULL,
  `setelah` enum('1','0') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `peserta_rapat`
--

INSERT INTO `peserta_rapat` (`id`, `kode_rapat`, `anggota`, `keterangan`, `sebelum`, `setelah`) VALUES
(332, 'R-00014', '1', 'K-00001', '1', '1'),
(333, 'R-00014', '5', 'K-00001', '1', '1'),
(334, 'R-00014', '10', 'K-00001', '1', '1'),
(335, 'R-00014', '15', 'K-00001', '1', '1'),
(336, 'R-00014', '19', 'K-00001', '1', '1'),
(337, 'R-00014', '24', 'K-00001', '1', '1'),
(338, 'R-00014', '28', 'K-00001', '1', '1'),
(339, 'R-00014', '32', 'K-00001', '1', '1'),
(340, 'R-00014', '37', 'K-00001', '1', '1'),
(341, 'R-00014', '42', 'K-00001', '1', '1'),
(342, 'R-00014', '46', 'K-00001', '1', '1'),
(343, 'R-00014', '68', 'K-00001', '1', '1'),
(344, 'R-00014', '1', 'skpd', '1', '1'),
(345, 'R-00014', '2', 'skpd', '1', '1'),
(346, 'R-00014', '3', 'skpd', '1', '1'),
(347, 'R-00014', '4', 'skpd', '1', '1'),
(348, 'R-00014', 'tes lagi', 'umum', '1', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pimpinan`
--

CREATE TABLE `pimpinan` (
  `id` int(11) NOT NULL,
  `id_anggota` varchar(9) NOT NULL,
  `jabatan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pimpinan`
--

INSERT INTO `pimpinan` (`id`, `id_anggota`, `jabatan`) VALUES
(1, '1', 'pimpinan 1'),
(2, '2', 'pimpinan 2'),
(3, '3', 'pimpinan 3'),
(4, '4', 'pimpinan 4'),
(5, '5', 'pimpinan 5'),
(6, '6', 'pimpinan 6');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rapat`
--

CREATE TABLE `rapat` (
  `id` int(9) NOT NULL,
  `kode_rapat` varchar(7) NOT NULL,
  `nomor_surat` varchar(20) NOT NULL,
  `acara` varchar(1000) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `warna` varchar(7) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `tanggal_selesai` date NOT NULL,
  `jam` time NOT NULL,
  `jam_berakhir` time NOT NULL,
  `materi` varchar(1000) NOT NULL,
  `pemimpin` int(9) NOT NULL,
  `nama_file` varchar(30) NOT NULL,
  `hasil_rapat` varchar(3000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `rapat`
--

INSERT INTO `rapat` (`id`, `kode_rapat`, `nomor_surat`, `acara`, `keterangan`, `warna`, `kategori`, `tanggal`, `tanggal_selesai`, `jam`, `jam_berakhir`, `materi`, `pemimpin`, `nama_file`, `hasil_rapat`) VALUES
(1, 'R-00001', '-', 'Rapat Dengar Pendapat', 'Ruang Rapat Komisi A', '#D91E18', 'Komisi', '2018-05-22', '2018-05-22', '09:30:00', '14:00:00', 'Membahas capaian kinerja Set. DPRD tahun 2018 dan TPP Kota Semarang', 10, 'file_1527926713.pdf', '<ol><li>Capaian kinerja Setwan selama catur wulan pertama pada  tahun 2018 sudah cukup baik, yaitu penyerapan anggaran sebesar 20,43 persen sedangkan secara fusik sebesar 39,77 persen, namun perlu ditingkatkan lagi agar output fisik dan penyerapan anggaran agar dapat lebih optimal.</li><li>Perhitungan TPP dilingkungan pemkot smg menggunakan kelas jabatan.</li><li>Dalam pemberian TPP dilingkungan RSUD kota smg  perlu ditinjau kembali agar tidak menimbulkan gap yg terlalu lebar dg OPD lainnya.</li><li>Komisi A DPRD kota smg pada dasarnya menyetujui rencana kenaikan TPP bagi ASN di Kota Semarang sepanjang sesuai dg RPJMD dan kenaikannya tdk lebih dari 50 persen.</li><li>Untuk biaya perjalanan dinas dibayarkan sesuai dg surat tugas yg meliputi biaya transportasi, biaya penginapan, uang harian dan uang representasi berdasarkan SSH.</li><li>Pemkot smg agar mengkaji ulang terkait dg SSH representasi perjalanan dinas bagi anggota DPRD menyesuaikan dg besaran representasi pimpinan dewan.</li><li>Sehubungan dg penghapusan uang representasi perjalanan dinas bagi pejabat eselon 3 dan 4, maka diusulkan agar besaran uang harian ditinjau ulang utk dinaikkan.</li><li>TAPD dimohon bisa memaparkan kajian ttg SSH representasi dan  TPP ASN sebelum pembahasan KUA PPAS.</li></ol>'),
(2, 'R-00002', '-', 'Rapat Pansus', 'Ruang Serbaguna 3', '#f3c200', 'Pansus', '2018-05-22', '2018-05-22', '10:00:00', '14:00:00', 'Membahas materi raperda', 33, 'file_1527926713.pdf', '<ol><li>Pembentukan BUMD termasuk BPR Syariah berpedoman pd PP No 54 Th 2017 ttg BUMD yg baru ditetapkan pd bulan Desember 2017 shg materi raperda yg telah disusun sebelumnya harus disesuaikan</li><li>Usulan pendirian BUMD dilakukan Kepala Daerah kpd Menteri</li><li>Usulan pendirian diatas dilampiri :</li><ul><li>Kebutuhan daerah</li><li>Analisa kelayakan usaha</li><li>Ringkasan laporan keuangan Pemerintah Daerah 3 thn terakhir</li><li>Dokumen Perda ttg APBD 3 thn terakhir</li><li>Dokumen RPJMD</li></ul><li>Menteri melakukan penilaian atas usulan rencana pendirian BUMD dimana hasil penelitian tsb disampaikan kpd gubernur dan bupati/ walikota plng lmbat 15 hari kerja sejakusulan rencana pendirian BUMD diterima</li><li>Berdasarkan hasil penilaian diatas, Daerah dpt menyusun raperda yg mengatur ttg pendirian BUMD</li><li>Pansus akan mengajukan permohonan pendampingan selama pembahasan kpd Otoritas Jasa Keuangan Wil Prov Jawa tengah dan DIY</li></ol>'),
(3, 'R-00003', '-', 'Rapat Badan Musyawarah', 'Ruang Serbaguna 2', '#3598dc', 'Badan', '2018-05-23', '2018-05-23', '11:00:00', '14:00:00', 'Membahas Surat Komisi A No 23/A/DPRD/2018 Tentang Permohonan Perubahan Jadwal Kunjungan Kerja', 4, 'file_1527933252.pdf', '<ol><li>Menyetujui permohonan komisi A untuk merubah waktu kunker dalam provinsi semula tgl 21-22 juni 2018 menjadi tgl 3-4 juni 2018</li><li>Menyetujui permohonan BPP utk mengubah waktu kunker semula tgl 24-27 juni menjadi tgl 1-4 juli 2018</li><li><div>Merubah jadwal dan menjadwalkan kegiatan baru sbb dibawah ini :<br><img src="https://dprd.semarangkota.go.id/sindangjalin/assets/hasil_rapat/WhatsApp Image 2018-05-30 at 12.05.35 PM.jpeg" width="620"></div></li></ol>'),
(4, 'R-00004', '30/A/DPRD/2018', 'Rapat Dengar Pendapat Komisi A ', 'Ruang Rapat Komisi A DPRD Kota Semarang', '#D91E18', 'Komisi', '2018-07-10', '2018-07-10', '10:00:00', '14:00:00', 'Membahas kajian ttg pengawasan dan pengendalian tenaga kontrak dilingkungan pemkot smg', 45, 'file_1531294572.jpeg', 'Kesimpulan/hasil yg diperoleh:\r\n1. Dasar hukum penggunana tenaga kontrak mengacu pada UU no 5 tahun 2014 dan perwal no.8 tahun 2017 sedangkan filosofinya adalah profesi yg memiliki nilai, kode etik, kompetensi dan organisasi\r\n2. Tenaga kontrak yg ada di kota smg berdasarkan pada kebijakan lokal tdk murni dr UU Asn\r\n3. Berdasarkan survey penerimaan tenaga kontrak di kota smg rata2  blm memakai instrumen analisis beban kerja karena masing2 opd melakukan pengadaan sendiri\r\n4. Penetapan kebutuhan tenaga kontrak perlu diatur mekanisme dan instrumen utk melakukan ABK dan di berlakukan utk seluruh Opd termasuk bag. Organisasi selaku Opd yg bertanggung jwb menverifikasi kebutuhan tenaga kerja kontrak\r\n5. Mekanisme Pengadaannya selama ini blm ada kesamaan tiap opd krn dilakukan sendiri2 sehingga perlu penyusunan dan penerapan Sop pengadaan scr terpusat utk meningkatkan transparasi akubtabilitas dengan membentuk panitia independen dlm pengadaan\r\n6. Untuk penggajian dan tunjangan semua Opd  sesuai umk '),
(5, 'R-00005', '33/A/DPRD/2018', 'Rapat Dengar Pendapat Komisi A ', 'Ruang Rapat Komisi A DPRD Kota Semarang', '#D91E18', 'Komisi', '2018-07-11', '2018-07-11', '09:30:00', '14:00:00', 'rapat kerja membahas capaian kinerja diskominfo bulan jan  s/d. Juni 2018', 45, 'file_1531364118.jpeg', 'Nama keg.: Rapat dengar pendapat\r\n- Hari/Tgl: rabu, 11 juli 2018\r\n-Jam : 09.30 - 12.30 wib\r\n-AKD : Komisi A \r\n- Tempat : Ruang Rapat Komisi A\r\n-Agenda : rapat kerja membahas capaian kinerja diskominfo bulan jan  s/d. Juni 2018\r\n- Pimp Rapat :  Bapak wisnu pujonggo, sh\r\n- Dihadiri oleh :\r\n1. Anggota Komisi A\r\n2. Sekretaris diskominfo beserta jajarannya\r\n- Kesimpulan/hasil yg diperoleh:\r\n1. Capaian kinerja diskominfo sampai dengan bulan juni secara fisik sebesar 49,1 persen sehingga penyerapan anggaran belum sampai 50 persen \r\n2. Pengelolaan bandwidth supaya tdk dikerjasamakan dg pihak ketiga dg harapan kewenangan penuh ada di diskominfo\r\n3. Sebelum menentukan titik pemadangan videotron supaya dilakukan studi/kajian terlebih dahulu serta videotron yg sdh terpadang di evaluasi, utk anggaran  videotron th  2018 supaya di pasang di area bandara ahmad yani\r\n4. Untuk materi penayangan pd videotron jgn sampai ada iklan/sponsor terkait konten akan diseleksi terlebih dahulu oleh diskominfo sekali masuk maksim'),
(6, 'R-00006', '-', 'Rapat dengar pendapat', 'Ruang Rapat Komisi A', '#D91E18', 'Komisi', '2018-07-11', '2018-07-11', '09:30:00', '14:00:00', 'Rapat kerja membahas capaian kinerja diskominfo bulan jan  s/d. Juni 2018', 45, 'file_1531449722.pdf', '1. Capaian kinerja diskominfo sampai dengan bulan juni secara fisik sebesar 49,1 persen sehingga penyerapan anggaran belum sampai 50 persen \r\n2. Pengelolaan bandwidth supaya tdk dikerjasamakan dg pihak ketiga dg harapan kewenangan penuh ada di diskominfo\r\n3. Sebelum menentukan titik pemadangan videotron supaya dilakukan studi/kajian terlebih dahulu serta videotron yg sudah terpadang di evaluasi, utk anggaran  videotron th  2018 supaya di pasang di area bandara ahmad yang\r\n4. Untuk materi penayangan pd videotron jgn sampai ada iklan/sponsor terkait konten akan diseleksi terlebih dahulu oleh diskominfo sekali masuk maksimal 5 slot serta menayangkan kegiatan DPRD Kota  Semarang\r\n5. Pengelolaan bandwidth sdh dilakukan secara maksimal namun masih terdapat kendala pada aplikasi ruter (alat pembagi jaringan) shg pemakainnya blm bs maksimal\r\n6. Diskominfo saat ini masih kekurangan tenaga tenaga IT jaringan hy ada 2 personil non asn  sehingga perlu penambahan\r\n7. Perekrutan tenag'),
(7, 'R-00007', '33/A/DPRD/2018', 'Rapat Dengar Pendapat Komisi A ', 'Ruang Rapat Komisi A DPRD Kota Semarang', '#D91E18', 'Komisi', '2018-07-17', '2018-07-11', '10:00:00', '14:00:00', ' Membahas kajian ttg pengawasan dan pengendalian tenaga kontrak dilingkungan pemkot smg', 19, 'file_1531872725.jpeg', 'Kesimpulan/hasil yg diperoleh:\r\n1. Konsep dari tenaga kontrak adalah : bukan tenaga P3K seperti tertuang dalam UU ASN,  bukan pula tenaga outsoursing seoerti tertuang dalam UU tenaga kerja, penerapan tenaga kontrak mengkompilasi konsep P3K  dan konsep tenaga kerja  outsoursing  dengan penyesuaian2 atas kondisi lokal pemkot smg\r\n2. Di kota smg ada dua jenis tenaga kontrak yaitu tenaga kobtrak dg perjanjian kerja adanya kegiatan (kontrak dg kpa) dan outsoursing dg perjanjian pihak ketiga.\r\n3. Definisii tenaga kontrak dan honor agar bs disesuaikan supaya lebih jelas.\r\n4. Utk honor tenaga kontrak  sdh tercantum dlm ssh (kpa tdk bs membayarkan melebihi ssh)\r\n5. Perlu adanya revisi perwal nomor 58 tahun 2018\r\n6. Abk yg dilakukan bag organisasi agar lebih teliti dan komprehensif agar tdk terjadi kekurangan pegawai pd opd terkait\r\n7. Perlu penyusunan dan penerapan instrumen evaluasi kinerja dan disiplin spt asn dan perlu di buatkan aturan khusus utk hal tsb\r\n8. Pemutusan hub kerja shrsnya berdasarkan '),
(8, 'R-00008', '33/A/DPRD/2015', 'Rapat Dengar Pendapat Komisi A ', 'Ruang Rapat Komisi A DPRD Kota Semarang', '#D91E18', 'Komisi', '2018-07-24', '2018-07-24', '00:30:00', '02:30:00', 'Rapat kerja dengan kesbangpol terkait capaian kinerja bulan jan  s/d. Juni 2018', 10, 'file_1532658258.jpeg', '1. Capaian kinerja kesbangpol dari bulan januari s/d. Juni 2018  secara fisik sebesar 50 persen\r\n2. Dalam program pengembangan wawasan kebangsaan supaya di laporkan capaiannya secara fisik. \r\n3. Kesbangpol selalu mengadakan rapat setiap minggu bersama kominda (komunitas intelijen daerah) dan melaporkan hasilnya kepada Komisi A\r\n4. Terkait dengan tenaga kerja asing Yg ada di smg kesbangpol sdh melakukan sosialisasi dalam rangka pengawasan terhadap orang asing dg membuat tim pengawasan berdasarkan sk walikota. \r\n5. Khusus Pelajar asing sampai saat ini belum ada pengawasan maupun sosialisasi namun kesbangpol sdh menyurati universitas/sekolah2 Yg ada pelajar/mahasiswa asing supaya mengurus surat2nya. \r\n6. Untuk perizinan tenaga kerja asing berada di disnaker.\r\n7. Sampai saat ini kesbangpol Blm pernah mengeluarkan izin operasional bagi ormas asing. '),
(9, 'R-00009', '35/A/DPRD/2015', 'Rapat Dengar Pendapat Komisi A ', 'Ruang Rapat Komisi A DPRD Kota Semarang', '#D91E18', 'Komisi', '2018-07-24', '2018-07-24', '09:30:00', '14:00:00', 'Membahas kajian ttg implementasi penyelenggaraan administrasi kependudukan di kota smg', 10, 'file_1532661419.jpeg', '1. Kajian adminduk di buat Utk mengkaji kualitas pelayanan adminduk dan Memetakan permasalahan ke masyarakat dalam melayani adminduk serta  membuat rekomendasi grand desain peningkatan pelayanan adminduk di kota smg karena dukcapil merupakan pencatat penduduk  Yg meliputi data layanan dan data kependudukan. \r\n2. Adminduk tsb meliputi pendaftaran penduduk, pencatatan sipil dan pengelolaan data informasi kependudukan. \r\n3. Pada dinas dukcapil saat ini masih kekurangan personil Utk mendukung pelayanan adminduk berdasarkan UU nomor 25 tahun 2009 ttg pelayanan publik\r\n4. Dalam memberikan pelayanan adminduk dukcapil sdh bekerja sama dengan pihak ketiga antara lain dg rumah sakit, dan bidan dalam pembuatan akte kelahiran\r\n5.  Utk kelengkapan data pendukung pembuatan kajian tim Pengkaji supaya berkoordinasi dg dukcapil kota smg\r\n'),
(10, 'R-00010', '-', 'Rapat dengar pendapat', 'Ruang Rapat Komisi B', '#D91E18', 'Komisi', '2018-07-30', '2018-07-30', '09:30:00', '14:00:00', 'Rispoda potensi Balik Nama Kendaraan Bermotor (BBNKB)', 5, 'file_1533054846.pdf', '1. Pajak BBNKB merupakan pajak atas penyerahan hak milik kendaraan bermotor sebagai akibat perjanjian dua pihak / perbuatan sepihak atau keadaan yang terjadi karena jual beli,tukar menukar,hibah, warisan ( UU No 28/2009)\r\n2. Pajak BBNKB menjadi salah satu sumber pendapatan daerah yang besar pengaruhnya terhadap pembangunan daerah\r\n3. Peningkatan pembelian kendaraan bermotor yang tiap tahun meningkat 10 s/d 12 % seharusnya berkolerasi dengan penerimaan BBNKB, namun pada prakteknya hanya terjadi transaksi jual beli namun tidak untuk balik nama kendaraan, khususnya pada transaksi kendaraan bekas.\r\n4. Untuk Kota Semarang sendiri, BBNKB merupakan pendapatan yang diterima dari bagi hasil oleh Pemerintah Provinsi yang perhitungannya dengan prosentase 70 ( Provinsi ) 30 (kabupaten/kota se Provinsi), Tahun 2018 ini target BBNKB Kota Semarang 157 Milyar dan sampai dengan Bulan Juni terealisasi 74,56 Milyar\r\n5. Untuk Pemerintah Kota Semarang target Penerimaan BBNKB tiap tahun nilainya tidak selalu me'),
(11, 'R-00011', '-', 'Rapat dengar pendapat', 'Ruang Rapat Komisi B', '#D91E18', 'Komisi', '2018-07-30', '2018-07-30', '12:00:00', '14:00:00', 'Rispoda pendapatan tera ulang kemetrologian  & kajian tentang sentralisasi pedagang kaki lima (PKL)\r\n', 5, 'file_1533140368.pdf', '1. UU No 23 th 2014 Tentang Pemerintah Daerah sebagaimana telah diubah dengan UU no 9 tahun 2015 tentang perubahan kedua atas UU No 23 Tahun 2014 mengatakan bahwa urusan Metrologi Legal berupa layanan tera, tera ulang alat ukur timbang takar dan perlengkapannya (UTTP) serta pengawasan menjadi urusan Pemerintah Kabupaten/Kota\r\n2. Menurut UU no 28 tahun 2009 ps 1109 salah satu obyek retribusi daerah yang sah salah satunya adalah retribusi jasa umum dan pelayanan tera dan tera ulang merupakan salah satu jenis retribusi jasa umum.\r\n3. UPT Metrologi Kota Semarang yang merupakan peralihan Metrologi Jawa Tengah baru beroperasi sekitar pertengahan tahun 2017\r\n4. Potensi penerimaan retribusi dari pelayanan tera dan tera ulang di Kota Semarang tahun 2017 yang terealisasi sebanyak 2.877 orang dengan hasil retribusi 628 juta yang dilaksanakan hanya 2 bulan yaitu Nopember dan Desember\r\n5. Potensi wajib tera ulang tahun 2018 sebanyak 9.403 orang dengan target 3,5 milyar terealisasi s/d Juni Sebanyak 700'),
(12, 'R-00012', '-', 'Rapat dengar pendapat', 'Ruang Rapat Komisi A', '#D91E18', 'Komisi', '2018-07-30', '2018-07-30', '10:00:00', '14:00:00', 'Kajian ttg sistem akuntabilitas kinerja instansi pemerintah kota semarang', 7, 'file_1533141844.pdf', '1. Akuntabikitas/keterbukaan pemkot semarang harus terbuka thd publik agar bisa di koreksi. \r\n2. Pusat informasi di kota smg saat ini sdh di kelola dg baik dan bagus bila di bandingkan dg kota/kab lain\r\n3. Saat ini Sakip di kota smg utk keterbukaan publik belum sepenuhnya tercapai, meskipun capaian kinerja th 2016 sangat tinggi namun menurut data yg ada di kemenpan nilai sakipnya masih standar dg nilai 60=B, hal ini dpt di pengaruhi beberapa faktor antara lain : data tdk detail, target dan output kerja tdk sinkron, bu sakip tdk nyambung shg perlu cluster/diklat pim scr khusus. \r\n4. Kedepan diharapkan ada bintek utk evaluasi sakip dg narasumber langsung dari kemenpan\r\n5. Evaluasi kinerja Asn di kota semarang blm berjalan dg baik karena saat ini masih mendapat nilai sedang (6).\r\n6. Dengan di bangunnya kantor diklat yg baru di harapkan dapat meningkatkan kualitas dan mutunya\r\n7. Opd yg ada di kota smg di harapkan agar bs memaksimalkan program monitoring dan evaluasi utk mendukung sakip\r\n8. Pengu'),
(13, 'R-00013', 'sdc', 'tes waktu', 'f', '#D91E18', 'Komisi', '2018-08-07', '0000-00-00', '13:00:00', '14:00:00', 'f', 62, 'file_1533744858.pdf', 'tes'),
(14, 'R-00014', 'tes lagi', 'tes lagi', 'tes lagi', '#D91E18', 'Komisi', '2018-08-07', '0000-00-00', '13:00:00', '14:00:00', 'tes lagi', 24, 'file_1533745492.pdf', 'tes');

-- --------------------------------------------------------

--
-- Struktur dari tabel `skpd`
--

CREATE TABLE `skpd` (
  `id` int(9) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `keterangan` varchar(200) NOT NULL,
  `status` enum('1','0') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `skpd`
--

INSERT INTO `skpd` (`id`, `nama`, `keterangan`, `status`) VALUES
(1, 'tes1', 'diskusi sambil bertukar ide dengan suasana santai', '1'),
(2, 'coba', 'coba', '1'),
(3, 'vv', 'vvvv', '1'),
(4, 'm', 'm', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat_cetak`
--

CREATE TABLE `surat_cetak` (
  `id` int(9) NOT NULL,
  `kode_jaldis` varchar(7) NOT NULL,
  `id_anggota` int(9) NOT NULL,
  `nomor_surat` int(9) NOT NULL,
  `kode_cetak` varchar(7) NOT NULL,
  `waktu_cetak` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `surat_cetak`
--

INSERT INTO `surat_cetak` (`id`, `kode_jaldis`, `id_anggota`, `nomor_surat`, `kode_cetak`, `waktu_cetak`) VALUES
(1, 'J-10013', 1, 1, '', '0000-00-00 00:00:00'),
(2, 'J-10013', 2, 1, '', '0000-00-00 00:00:00'),
(3, 'J-10014', 3, 2, '', '0000-00-00 00:00:00'),
(4, 'J-10014', 9, 2, '', '0000-00-00 00:00:00'),
(7, 'J-10015', 1, 1, '', '0000-00-00 00:00:00'),
(8, 'J-10015', 2, 1, '', '0000-00-00 00:00:00'),
(9, 'J-10017', 1, 1, '', '0000-00-00 00:00:00'),
(10, 'J-10017', 2, 1, '', '0000-00-00 00:00:00'),
(11, 'J-10018', 1, 1, '', '0000-00-00 00:00:00'),
(12, 'J-10018', 2, 1, '', '0000-00-00 00:00:00'),
(13, 'J-10019', 1, 1, '', '0000-00-00 00:00:00'),
(14, 'J-10019', 2, 1, '', '0000-00-00 00:00:00'),
(15, 'J-10020', 1, 1, '', '0000-00-00 00:00:00'),
(16, 'J-10020', 2, 1, '', '0000-00-00 00:00:00'),
(17, 'J-10020', 7, 1, '', '0000-00-00 00:00:00'),
(18, 'J-10020', 8, 1, '', '0000-00-00 00:00:00'),
(19, 'J-10020', 10, 1, '', '0000-00-00 00:00:00'),
(20, 'J-10020', 1, 2, '', '0000-00-00 00:00:00'),
(21, 'J-10020', 2, 2, '', '0000-00-00 00:00:00'),
(22, 'J-10020', 7, 2, '', '0000-00-00 00:00:00'),
(23, 'J-10020', 1, 3, '', '0000-00-00 00:00:00'),
(24, 'J-10020', 2, 3, '', '0000-00-00 00:00:00'),
(25, 'J-10018', 1, 3, '', '0000-00-00 00:00:00'),
(26, 'J-10018', 2, 2, '', '0000-00-00 00:00:00'),
(27, 'J-10025', 1, 1, '', '0000-00-00 00:00:00'),
(28, 'J-10025', 2, 1, '', '0000-00-00 00:00:00'),
(29, 'J-10025', 7, 1, '', '0000-00-00 00:00:00'),
(30, 'J-10025', 8, 1, '', '0000-00-00 00:00:00'),
(31, 'J-10025', 12, 1, '', '0000-00-00 00:00:00'),
(32, 'J-10025', 15, 1, '', '0000-00-00 00:00:00'),
(33, 'J-10025', 3, 1, '', '0000-00-00 00:00:00'),
(34, 'J-10025', 4, 1, '', '0000-00-00 00:00:00'),
(35, 'J-10025', 5, 1, '', '0000-00-00 00:00:00'),
(36, 'J-10033', 1, 1, '', '0000-00-00 00:00:00'),
(37, 'J-10033', 2, 1, '', '0000-00-00 00:00:00'),
(38, 'J-10033', 4, 1, '', '0000-00-00 00:00:00'),
(39, 'J-10033', 3, 1, '', '0000-00-00 00:00:00'),
(40, 'J-10033', 7, 1, '', '0000-00-00 00:00:00'),
(41, 'J-10033', 11, 1, '', '0000-00-00 00:00:00'),
(42, 'J-10033', 5, 1, '', '0000-00-00 00:00:00'),
(43, 'J-10019', 1, 2, '', '0000-00-00 00:00:00'),
(44, 'J-10019', 2, 2, '', '0000-00-00 00:00:00'),
(45, 'J-10037', 1, 1, '', '0000-00-00 00:00:00'),
(46, 'J-10037', 2, 1, '', '0000-00-00 00:00:00'),
(47, 'J-10037', 7, 1, '', '0000-00-00 00:00:00'),
(48, 'J-10037', 8, 1, '', '0000-00-00 00:00:00'),
(49, 'J-10037', 53, 1, '', '0000-00-00 00:00:00'),
(50, 'J-10037', 54, 1, '', '0000-00-00 00:00:00'),
(51, 'J-10037', 55, 1, '', '0000-00-00 00:00:00'),
(52, 'J-10037', 56, 1, '', '0000-00-00 00:00:00'),
(53, 'J-10037', 57, 1, '', '0000-00-00 00:00:00'),
(54, 'J-10037', 58, 1, '', '0000-00-00 00:00:00'),
(55, 'J-10037', 59, 1, '', '0000-00-00 00:00:00'),
(56, 'J-10037', 60, 1, '', '0000-00-00 00:00:00'),
(57, 'J-10037', 61, 1, '', '0000-00-00 00:00:00'),
(58, 'J-10037', 62, 1, '', '0000-00-00 00:00:00'),
(59, 'J-10037', 63, 1, '', '0000-00-00 00:00:00'),
(60, 'J-10037', 64, 1, '', '0000-00-00 00:00:00'),
(61, 'J-10037', 65, 1, '', '0000-00-00 00:00:00'),
(62, 'J-10037', 66, 1, '', '0000-00-00 00:00:00'),
(63, 'J-10037', 67, 1, '', '0000-00-00 00:00:00'),
(64, 'J-10018', 1, 4, '', '0000-00-00 00:00:00'),
(65, 'J-10018', 2, 4, '', '0000-00-00 00:00:00'),
(66, 'J-10037', 1, 4, '', '0000-00-00 00:00:00'),
(67, 'J-10037', 2, 4, '', '0000-00-00 00:00:00'),
(68, 'J-10037', 7, 4, '', '0000-00-00 00:00:00'),
(69, 'J-10037', 8, 4, '', '0000-00-00 00:00:00'),
(70, 'J-10037', 53, 4, '', '0000-00-00 00:00:00'),
(71, 'J-10037', 54, 4, '', '0000-00-00 00:00:00'),
(72, 'J-10037', 55, 4, '', '0000-00-00 00:00:00'),
(73, 'J-10037', 56, 4, '', '0000-00-00 00:00:00'),
(74, 'J-10037', 57, 4, '', '0000-00-00 00:00:00'),
(75, 'J-10037', 58, 4, '', '0000-00-00 00:00:00'),
(76, 'J-10037', 59, 4, '', '0000-00-00 00:00:00'),
(77, 'J-10037', 60, 4, '', '0000-00-00 00:00:00'),
(78, 'J-10037', 61, 4, '', '0000-00-00 00:00:00'),
(79, 'J-10037', 62, 4, '', '0000-00-00 00:00:00'),
(80, 'J-10037', 63, 4, '', '0000-00-00 00:00:00'),
(81, 'J-10037', 64, 4, '', '0000-00-00 00:00:00'),
(82, 'J-10037', 65, 4, '', '0000-00-00 00:00:00'),
(83, 'J-10037', 66, 4, '', '0000-00-00 00:00:00'),
(84, 'J-10037', 67, 4, '', '0000-00-00 00:00:00'),
(85, 'J-10036', 1, 1, '', '0000-00-00 00:00:00'),
(86, 'J-10036', 10, 1, '', '0000-00-00 00:00:00'),
(87, 'J-10036', 15, 1, '', '0000-00-00 00:00:00'),
(88, 'J-10036', 4, 1, '', '0000-00-00 00:00:00'),
(89, 'J-10036', 14, 1, '', '0000-00-00 00:00:00'),
(90, 'J-10009', 1, 1, '', '0000-00-00 00:00:00'),
(91, 'J-10009', 2, 1, '', '0000-00-00 00:00:00'),
(92, 'J-10003', 1, 1, '', '0000-00-00 00:00:00'),
(93, 'J-10003', 2, 1, '', '0000-00-00 00:00:00'),
(94, 'J-10003', 10, 1, '', '0000-00-00 00:00:00'),
(95, 'J-10019', 1, 4, '', '0000-00-00 00:00:00'),
(96, 'J-10019', 2, 4, '', '0000-00-00 00:00:00'),
(97, 'J-10030', 1, 4, '', '0000-00-00 00:00:00'),
(98, 'J-10030', 2, 4, '', '0000-00-00 00:00:00'),
(99, 'J-10030', 4, 4, '', '0000-00-00 00:00:00'),
(100, 'J-10030', 3, 4, '', '0000-00-00 00:00:00'),
(101, 'J-10030', 9, 4, '', '0000-00-00 00:00:00'),
(102, 'J-10030', 14, 4, '', '0000-00-00 00:00:00'),
(103, 'J-10030', 1, 2, '', '0000-00-00 00:00:00'),
(104, 'J-10030', 2, 2, '', '0000-00-00 00:00:00'),
(105, 'J-10030', 4, 2, '', '0000-00-00 00:00:00'),
(106, 'J-10030', 3, 2, '', '0000-00-00 00:00:00'),
(107, 'J-10030', 7, 2, '', '0000-00-00 00:00:00'),
(108, 'J-10030', 11, 2, '', '0000-00-00 00:00:00'),
(109, 'J-10030', 5, 2, '', '0000-00-00 00:00:00'),
(110, 'J-10030', 6, 2, '', '0000-00-00 00:00:00'),
(111, 'J-10030', 9, 2, '', '0000-00-00 00:00:00'),
(112, 'J-10030', 14, 2, '', '0000-00-00 00:00:00'),
(113, 'J-10030', 16, 2, '', '0000-00-00 00:00:00'),
(114, 'J-10018', 1, 2, '', '0000-00-00 00:00:00'),
(115, 'J-10018', 1, 5, '', '0000-00-00 00:00:00'),
(116, 'J-10018', 2, 5, '', '0000-00-00 00:00:00'),
(117, 'J-10039', 7, 2, '', '0000-00-00 00:00:00'),
(118, 'J-10039', 10, 2, '', '0000-00-00 00:00:00'),
(119, 'J-10039', 7, 1, '', '0000-00-00 00:00:00'),
(120, 'J-10039', 10, 1, '', '0000-00-00 00:00:00'),
(121, 'J-10039', 12, 1, '', '0000-00-00 00:00:00'),
(122, 'J-10039', 13, 1, '', '0000-00-00 00:00:00'),
(123, 'J-10018', 1, 1, '', '0000-00-00 00:00:00'),
(124, 'J-10018', 1, 2, 'C-00001', '2018-04-21 11:56:32'),
(125, 'J-10018', 1, 2, 'C-00002', '2018-04-21 11:59:25'),
(126, 'J-10018', 1, 2, 'C-00003', '2018-04-22 12:00:26'),
(127, 'J-10018', 1, 2, 'C-00004', '2018-04-22 12:05:08'),
(128, 'J-10018', 1, 2, 'C-00005', '2018-04-22 12:07:21'),
(129, 'J-10018', 2, 2, 'C-00005', '2018-04-22 12:07:21'),
(130, 'J-10018', 1, 1, 'C-00006', '2018-04-22 12:09:48'),
(131, 'J-10018', 2, 1, 'C-00006', '2018-04-22 12:09:48'),
(132, 'J-10018', 1, 1, 'C-00007', '2018-04-22 12:14:03'),
(133, 'J-10018', 2, 1, 'C-00007', '2018-04-22 12:14:03'),
(134, 'J-10018', 1, 2, 'C-00008', '2018-04-22 12:15:00'),
(135, 'J-10018', 2, 2, 'C-00008', '2018-04-22 12:15:00'),
(136, 'J-10018', 1, 2, 'C-00009', '2018-04-22 12:15:42'),
(137, 'J-10018', 2, 2, 'C-00009', '2018-04-22 12:15:42'),
(138, 'J-10018', 1, 2, 'C-00010', '2018-04-22 12:18:00'),
(139, 'J-10018', 2, 2, 'C-00010', '2018-04-22 12:18:00'),
(140, 'J-10018', 1, 2, 'C-00011', '2018-04-22 12:18:49'),
(141, 'J-10018', 2, 2, 'C-00011', '2018-04-22 12:18:49'),
(142, 'J-10018', 1, 2, 'C-00012', '2018-04-22 12:20:03'),
(143, 'J-10018', 2, 2, 'C-00012', '2018-04-22 12:20:03'),
(144, 'J-10018', 1, 2, 'C-00013', '2018-04-22 12:21:24'),
(145, 'J-10018', 2, 2, 'C-00013', '2018-04-22 12:21:24'),
(146, 'J-10018', 1, 2, 'C-00014', '2018-04-22 12:22:11'),
(147, 'J-10018', 2, 2, 'C-00014', '2018-04-22 12:22:11'),
(148, 'J-10018', 1, 2, 'C-00015', '2018-04-22 12:23:09'),
(149, 'J-10018', 2, 2, 'C-00015', '2018-04-22 12:23:09'),
(150, 'J-10018', 1, 1, 'C-00016', '2018-04-22 12:24:08'),
(151, 'J-10018', 2, 1, 'C-00016', '2018-04-22 12:24:08'),
(152, 'J-10039', 53, 4, 'C-00017', '2018-04-22 12:24:48'),
(153, 'J-10039', 54, 4, 'C-00017', '2018-04-22 12:24:48'),
(154, 'J-10039', 58, 4, 'C-00017', '2018-04-22 12:24:48'),
(155, 'J-10039', 55, 4, 'C-00018', '2018-04-22 12:26:56'),
(156, 'J-10039', 59, 4, 'C-00018', '2018-04-22 12:26:56'),
(157, 'J-10039', 7, 2, 'C-00019', '2018-04-22 12:27:28'),
(158, 'J-10039', 10, 2, 'C-00019', '2018-04-22 12:27:28'),
(159, 'J-10040', 1, 5, 'C-00020', '2018-04-22 06:53:06'),
(160, 'J-10040', 2, 5, 'C-00020', '2018-04-22 06:53:06'),
(161, 'J-10040', 7, 5, 'C-00020', '2018-04-22 06:53:06'),
(162, 'J-10040', 13, 5, 'C-00020', '2018-04-22 06:53:06'),
(163, 'J-10040', 1, 5, 'C-00021', '2018-04-22 07:48:48'),
(164, 'J-10040', 67, 5, 'C-00021', '2018-04-22 07:48:48'),
(165, 'J-10040', 1, 5, 'C-00022', '2018-04-22 07:51:24'),
(166, 'J-10040', 67, 5, 'C-00022', '2018-04-22 07:51:24'),
(167, 'J-10043', 22, 5, 'C-00023', '2018-04-30 05:50:34'),
(168, 'J-10043', 37, 5, 'C-00023', '2018-04-30 05:50:34'),
(169, 'J-10043', 45, 5, 'C-00023', '2018-04-30 05:50:34'),
(170, 'J-10043', 56, 5, 'C-00023', '2018-04-30 05:50:34'),
(171, 'J-10043', 60, 5, 'C-00023', '2018-04-30 05:50:34'),
(172, 'J-10043', 61, 5, 'C-00023', '2018-04-30 05:50:34'),
(173, 'J-10043', 22, 5, 'C-00024', '2018-04-30 05:51:00'),
(174, 'J-10043', 60, 5, 'C-00024', '2018-04-30 05:51:00'),
(175, 'J-10043', 61, 5, 'C-00025', '2018-04-30 05:53:40'),
(176, 'J-10043', 22, 5, 'C-00026', '2018-04-30 05:54:09'),
(177, 'J-10052', 53, 5, 'C-00027', '2018-05-14 10:11:09'),
(178, 'J-10052', 54, 5, 'C-00027', '2018-05-14 10:11:09'),
(179, 'J-10052', 55, 5, 'C-00027', '2018-05-14 10:11:09'),
(180, 'J-10052', 56, 5, 'C-00027', '2018-05-14 10:11:09'),
(181, 'J-10045', 7, 5, 'C-00028', '2018-05-14 10:13:33'),
(182, 'J-10045', 10, 5, 'C-00028', '2018-05-14 10:13:33'),
(183, 'J-10045', 12, 5, 'C-00028', '2018-05-14 10:13:33'),
(184, 'J-10045', 13, 5, 'C-00028', '2018-05-14 10:13:33'),
(185, 'J-10045', 19, 5, 'C-00028', '2018-05-14 10:13:33'),
(186, 'J-10045', 22, 5, 'C-00028', '2018-05-14 10:13:33'),
(187, 'J-10045', 25, 5, 'C-00028', '2018-05-14 10:13:33'),
(188, 'J-10045', 28, 5, 'C-00028', '2018-05-14 10:13:33'),
(189, 'J-10045', 32, 5, 'C-00028', '2018-05-14 10:13:33'),
(190, 'J-10045', 37, 5, 'C-00028', '2018-05-14 10:13:33'),
(191, 'J-10045', 52, 5, 'C-00028', '2018-05-14 10:13:33'),
(192, 'J-10045', 57, 5, 'C-00028', '2018-05-14 10:13:33'),
(193, 'J-10045', 58, 5, 'C-00028', '2018-05-14 10:13:33'),
(194, 'J-10045', 59, 5, 'C-00028', '2018-05-14 10:13:33'),
(195, 'J-10045', 60, 5, 'C-00028', '2018-05-14 10:13:33'),
(196, 'J-10052', 53, 2, 'C-00029', '2018-05-14 10:14:51'),
(197, 'J-10052', 54, 2, 'C-00029', '2018-05-14 10:14:51'),
(198, 'J-10052', 55, 2, 'C-00029', '2018-05-14 10:14:51'),
(199, 'J-10052', 56, 2, 'C-00029', '2018-05-14 10:14:51'),
(200, 'J-10052', 53, 5, 'C-00030', '2018-05-14 10:27:41'),
(201, 'J-10052', 54, 5, 'C-00030', '2018-05-14 10:27:41'),
(202, 'J-10052', 55, 5, 'C-00030', '2018-05-14 10:27:41'),
(203, 'J-10052', 56, 5, 'C-00030', '2018-05-14 10:27:41'),
(204, 'J-10054', 1, 5, 'C-00031', '2018-05-22 11:31:20'),
(205, 'J-10054', 5, 5, 'C-00031', '2018-05-22 11:31:20'),
(206, 'J-10054', 10, 5, 'C-00031', '2018-05-22 11:31:20'),
(207, 'J-10054', 14, 5, 'C-00031', '2018-05-22 11:31:20'),
(208, 'J-10054', 18, 5, 'C-00031', '2018-05-22 11:31:20'),
(209, 'J-10045', 7, 5, 'C-00032', '2018-06-04 02:27:38'),
(210, 'J-10045', 10, 5, 'C-00032', '2018-06-04 02:27:38'),
(211, 'J-10045', 12, 5, 'C-00032', '2018-06-04 02:27:38'),
(212, 'J-10045', 13, 5, 'C-00032', '2018-06-04 02:27:38'),
(213, 'J-10045', 19, 5, 'C-00032', '2018-06-04 02:27:38'),
(214, 'J-10045', 22, 5, 'C-00032', '2018-06-04 02:27:38'),
(215, 'J-10045', 25, 5, 'C-00032', '2018-06-04 02:27:38'),
(216, 'J-10045', 28, 5, 'C-00032', '2018-06-04 02:27:38'),
(217, 'J-10045', 32, 5, 'C-00032', '2018-06-04 02:27:38'),
(218, 'J-10045', 37, 5, 'C-00032', '2018-06-04 02:27:38'),
(219, 'J-10045', 52, 5, 'C-00032', '2018-06-04 02:27:38'),
(220, 'J-10045', 57, 5, 'C-00032', '2018-06-04 02:27:38'),
(221, 'J-10045', 58, 5, 'C-00032', '2018-06-04 02:27:38'),
(222, 'J-10045', 59, 5, 'C-00032', '2018-06-04 02:27:38'),
(223, 'J-10045', 60, 5, 'C-00032', '2018-06-04 02:27:38'),
(224, 'J-10046', 10, 5, 'C-00033', '2018-06-04 03:18:17'),
(225, 'J-10045', 7, 5, 'C-00034', '2018-06-20 08:51:37'),
(226, 'J-10045', 7, 5, 'C-00035', '2018-06-20 08:52:44'),
(227, 'J-10045', 7, 2, 'C-00036', '2018-06-20 08:52:55'),
(228, 'J-10045', 7, 1, 'C-00037', '2018-06-20 09:00:41'),
(229, 'J-10045', 57, 4, 'C-00038', '2018-06-20 09:01:00'),
(230, 'J-10045', 7, 2, 'C-00039', '2018-06-20 09:23:26'),
(231, 'J-10047', 5, 2, 'C-00040', '2018-06-20 09:23:51'),
(232, 'J-10047', 54, 2, 'C-00041', '2018-06-20 09:29:38'),
(233, 'J-10047', 23, 2, 'C-00042', '2018-06-20 09:29:55'),
(234, 'J-10047', 54, 2, 'C-00042', '2018-06-20 09:29:55'),
(235, 'J-10047', 28, 2, 'C-00043', '2018-06-20 09:30:25'),
(236, 'J-10047', 5, 2, 'C-00044', '2018-06-20 09:30:36'),
(237, 'J-10047', 6, 2, 'C-00044', '2018-06-20 09:30:36'),
(238, 'J-10047', 7, 2, 'C-00044', '2018-06-20 09:30:36'),
(239, 'J-10047', 8, 2, 'C-00044', '2018-06-20 09:30:36'),
(240, 'J-10047', 9, 2, 'C-00044', '2018-06-20 09:30:36'),
(241, 'J-10047', 10, 2, 'C-00044', '2018-06-20 09:30:36'),
(242, 'J-10047', 11, 2, 'C-00044', '2018-06-20 09:30:36'),
(243, 'J-10047', 12, 2, 'C-00044', '2018-06-20 09:30:36'),
(244, 'J-10047', 13, 2, 'C-00044', '2018-06-20 09:30:36'),
(245, 'J-10047', 14, 2, 'C-00044', '2018-06-20 09:30:36'),
(246, 'J-10047', 15, 2, 'C-00044', '2018-06-20 09:30:36'),
(247, 'J-10047', 16, 2, 'C-00044', '2018-06-20 09:30:36'),
(248, 'J-10047', 17, 2, 'C-00044', '2018-06-20 09:30:36'),
(249, 'J-10047', 18, 2, 'C-00044', '2018-06-20 09:30:36'),
(250, 'J-10047', 19, 2, 'C-00044', '2018-06-20 09:30:36'),
(251, 'J-10047', 21, 2, 'C-00044', '2018-06-20 09:30:36'),
(252, 'J-10047', 22, 2, 'C-00044', '2018-06-20 09:30:36'),
(253, 'J-10047', 23, 2, 'C-00044', '2018-06-20 09:30:36'),
(254, 'J-10047', 24, 2, 'C-00044', '2018-06-20 09:30:36'),
(255, 'J-10047', 25, 2, 'C-00044', '2018-06-20 09:30:36'),
(256, 'J-10047', 26, 2, 'C-00044', '2018-06-20 09:30:36'),
(257, 'J-10047', 27, 2, 'C-00044', '2018-06-20 09:30:36'),
(258, 'J-10047', 28, 2, 'C-00044', '2018-06-20 09:30:36'),
(259, 'J-10047', 29, 2, 'C-00044', '2018-06-20 09:30:36'),
(260, 'J-10047', 30, 2, 'C-00044', '2018-06-20 09:30:36'),
(261, 'J-10047', 31, 2, 'C-00044', '2018-06-20 09:30:36'),
(262, 'J-10047', 32, 2, 'C-00044', '2018-06-20 09:30:36'),
(263, 'J-10047', 33, 2, 'C-00044', '2018-06-20 09:30:36'),
(264, 'J-10047', 34, 2, 'C-00044', '2018-06-20 09:30:36'),
(265, 'J-10047', 35, 2, 'C-00044', '2018-06-20 09:30:36'),
(266, 'J-10047', 36, 2, 'C-00044', '2018-06-20 09:30:36'),
(267, 'J-10047', 37, 2, 'C-00044', '2018-06-20 09:30:36'),
(268, 'J-10047', 38, 2, 'C-00044', '2018-06-20 09:30:36'),
(269, 'J-10047', 39, 2, 'C-00044', '2018-06-20 09:30:36'),
(270, 'J-10047', 40, 2, 'C-00044', '2018-06-20 09:30:36'),
(271, 'J-10047', 41, 2, 'C-00044', '2018-06-20 09:30:36'),
(272, 'J-10047', 42, 2, 'C-00044', '2018-06-20 09:30:36'),
(273, 'J-10047', 43, 2, 'C-00044', '2018-06-20 09:30:36'),
(274, 'J-10047', 44, 2, 'C-00044', '2018-06-20 09:30:36'),
(275, 'J-10047', 45, 2, 'C-00044', '2018-06-20 09:30:36'),
(276, 'J-10047', 46, 2, 'C-00044', '2018-06-20 09:30:36'),
(277, 'J-10047', 47, 2, 'C-00044', '2018-06-20 09:30:36'),
(278, 'J-10047', 48, 2, 'C-00044', '2018-06-20 09:30:36'),
(279, 'J-10047', 49, 2, 'C-00044', '2018-06-20 09:30:36'),
(280, 'J-10047', 50, 2, 'C-00044', '2018-06-20 09:30:36'),
(281, 'J-10047', 52, 2, 'C-00044', '2018-06-20 09:30:36'),
(282, 'J-10047', 53, 2, 'C-00044', '2018-06-20 09:30:36'),
(283, 'J-10047', 54, 2, 'C-00044', '2018-06-20 09:30:36'),
(284, 'J-10047', 55, 2, 'C-00044', '2018-06-20 09:30:36'),
(285, 'J-10047', 56, 2, 'C-00044', '2018-06-20 09:30:36'),
(286, 'J-10047', 5, 1, 'C-00045', '2018-06-20 09:56:34'),
(287, 'J-10047', 6, 1, 'C-00045', '2018-06-20 09:56:34'),
(288, 'J-10047', 7, 1, 'C-00045', '2018-06-20 09:56:34'),
(289, 'J-10047', 8, 1, 'C-00045', '2018-06-20 09:56:34'),
(290, 'J-10047', 9, 1, 'C-00045', '2018-06-20 09:56:34'),
(291, 'J-10047', 10, 1, 'C-00045', '2018-06-20 09:56:34'),
(292, 'J-10047', 11, 1, 'C-00045', '2018-06-20 09:56:34'),
(293, 'J-10047', 12, 1, 'C-00045', '2018-06-20 09:56:34'),
(294, 'J-10047', 13, 1, 'C-00045', '2018-06-20 09:56:34'),
(295, 'J-10047', 14, 1, 'C-00045', '2018-06-20 09:56:34'),
(296, 'J-10047', 15, 1, 'C-00045', '2018-06-20 09:56:34'),
(297, 'J-10047', 16, 1, 'C-00045', '2018-06-20 09:56:34'),
(298, 'J-10047', 17, 1, 'C-00045', '2018-06-20 09:56:34'),
(299, 'J-10047', 18, 1, 'C-00045', '2018-06-20 09:56:34'),
(300, 'J-10047', 19, 1, 'C-00045', '2018-06-20 09:56:34'),
(301, 'J-10047', 21, 1, 'C-00045', '2018-06-20 09:56:34'),
(302, 'J-10047', 22, 1, 'C-00045', '2018-06-20 09:56:34'),
(303, 'J-10047', 23, 1, 'C-00045', '2018-06-20 09:56:34'),
(304, 'J-10047', 24, 1, 'C-00045', '2018-06-20 09:56:34'),
(305, 'J-10047', 25, 1, 'C-00045', '2018-06-20 09:56:34'),
(306, 'J-10047', 26, 1, 'C-00045', '2018-06-20 09:56:34'),
(307, 'J-10047', 27, 1, 'C-00045', '2018-06-20 09:56:34'),
(308, 'J-10047', 28, 1, 'C-00045', '2018-06-20 09:56:34'),
(309, 'J-10047', 29, 1, 'C-00045', '2018-06-20 09:56:34'),
(310, 'J-10047', 30, 1, 'C-00045', '2018-06-20 09:56:34'),
(311, 'J-10047', 31, 1, 'C-00045', '2018-06-20 09:56:34'),
(312, 'J-10047', 32, 1, 'C-00045', '2018-06-20 09:56:34'),
(313, 'J-10047', 33, 1, 'C-00045', '2018-06-20 09:56:34'),
(314, 'J-10047', 34, 1, 'C-00045', '2018-06-20 09:56:34'),
(315, 'J-10047', 35, 1, 'C-00045', '2018-06-20 09:56:34'),
(316, 'J-10047', 36, 1, 'C-00045', '2018-06-20 09:56:34'),
(317, 'J-10047', 37, 1, 'C-00045', '2018-06-20 09:56:34'),
(318, 'J-10047', 38, 1, 'C-00045', '2018-06-20 09:56:34'),
(319, 'J-10047', 39, 1, 'C-00045', '2018-06-20 09:56:34'),
(320, 'J-10047', 40, 1, 'C-00045', '2018-06-20 09:56:34'),
(321, 'J-10047', 41, 1, 'C-00045', '2018-06-20 09:56:34'),
(322, 'J-10047', 42, 1, 'C-00045', '2018-06-20 09:56:34'),
(323, 'J-10047', 43, 1, 'C-00045', '2018-06-20 09:56:34'),
(324, 'J-10047', 44, 1, 'C-00045', '2018-06-20 09:56:34'),
(325, 'J-10047', 45, 1, 'C-00045', '2018-06-20 09:56:34'),
(326, 'J-10047', 46, 1, 'C-00045', '2018-06-20 09:56:34'),
(327, 'J-10047', 47, 1, 'C-00045', '2018-06-20 09:56:34'),
(328, 'J-10047', 48, 1, 'C-00045', '2018-06-20 09:56:34'),
(329, 'J-10047', 49, 1, 'C-00045', '2018-06-20 09:56:34'),
(330, 'J-10047', 50, 1, 'C-00045', '2018-06-20 09:56:34'),
(331, 'J-10047', 52, 1, 'C-00045', '2018-06-20 09:56:34'),
(332, 'J-10047', 53, 4, 'C-00046', '2018-06-20 09:56:51'),
(333, 'J-10047', 54, 4, 'C-00046', '2018-06-20 09:56:51'),
(334, 'J-10047', 55, 4, 'C-00046', '2018-06-20 09:56:51'),
(335, 'J-10047', 56, 4, 'C-00046', '2018-06-20 09:56:51'),
(336, 'J-10059', 1, 2, 'C-00047', '2018-06-22 08:00:24'),
(337, 'J-10059', 5, 2, 'C-00047', '2018-06-22 08:00:24'),
(338, 'J-10059', 10, 2, 'C-00047', '2018-06-22 08:00:24'),
(339, 'J-10059', 15, 2, 'C-00047', '2018-06-22 08:00:24'),
(340, 'J-10059', 19, 2, 'C-00047', '2018-06-22 08:00:24'),
(341, 'J-10059', 24, 2, 'C-00047', '2018-06-22 08:00:24'),
(342, 'J-10059', 28, 2, 'C-00047', '2018-06-22 08:00:24'),
(343, 'J-10059', 32, 2, 'C-00047', '2018-06-22 08:00:24'),
(344, 'J-10059', 37, 2, 'C-00047', '2018-06-22 08:00:24'),
(345, 'J-10059', 42, 2, 'C-00047', '2018-06-22 08:00:24'),
(346, 'J-10059', 46, 2, 'C-00047', '2018-06-22 08:00:24'),
(347, 'J-10059', 68, 2, 'C-00047', '2018-06-22 08:00:24'),
(348, 'J-10062', 1, 2, 'C-00048', '2018-06-26 12:27:49'),
(349, 'J-10062', 2, 2, 'C-00048', '2018-06-26 12:27:49'),
(350, 'J-10062', 3, 2, 'C-00048', '2018-06-26 12:27:49'),
(351, 'J-10062', 4, 2, 'C-00048', '2018-06-26 12:27:49'),
(352, 'J-10062', 5, 2, 'C-00048', '2018-06-26 12:27:49'),
(353, 'J-10062', 6, 2, 'C-00048', '2018-06-26 12:27:49'),
(354, 'J-10062', 8, 2, 'C-00048', '2018-06-26 12:27:49'),
(355, 'J-10062', 9, 2, 'C-00048', '2018-06-26 12:27:49'),
(356, 'J-10062', 14, 2, 'C-00048', '2018-06-26 12:27:49'),
(357, 'J-10062', 18, 2, 'C-00048', '2018-06-26 12:27:49'),
(358, 'J-10062', 23, 2, 'C-00048', '2018-06-26 12:27:49'),
(359, 'J-10062', 31, 2, 'C-00048', '2018-06-26 12:27:49'),
(360, 'J-10062', 35, 2, 'C-00048', '2018-06-26 12:27:49'),
(361, 'J-10062', 36, 2, 'C-00048', '2018-06-26 12:27:49'),
(362, 'J-10062', 41, 2, 'C-00048', '2018-06-26 12:27:49'),
(363, 'J-10062', 45, 2, 'C-00048', '2018-06-26 12:27:49'),
(364, 'J-10062', 49, 2, 'C-00048', '2018-06-26 12:27:49'),
(365, 'J-10062', 53, 2, 'C-00048', '2018-06-26 12:27:49'),
(366, 'J-10062', 54, 2, 'C-00048', '2018-06-26 12:27:49'),
(367, 'J-10062', 55, 2, 'C-00048', '2018-06-26 12:27:49'),
(368, 'J-10062', 57, 2, 'C-00048', '2018-06-26 12:27:49'),
(369, 'J-10062', 58, 2, 'C-00048', '2018-06-26 12:27:49'),
(370, 'J-10062', 59, 2, 'C-00048', '2018-06-26 12:27:49'),
(371, 'J-10062', 62, 2, 'C-00048', '2018-06-26 12:27:49'),
(372, 'J-10062', 63, 2, 'C-00048', '2018-06-26 12:27:49'),
(373, 'J-10062', 64, 2, 'C-00048', '2018-06-26 12:27:49'),
(374, 'J-10062', 66, 2, 'C-00048', '2018-06-26 12:27:49'),
(375, 'J-10062', 67, 2, 'C-00048', '2018-06-26 12:27:49'),
(376, 'J-10062', 70, 2, 'C-00048', '2018-06-26 12:27:49'),
(377, 'J-10062', 1, 1, 'C-00049', '2018-06-26 12:28:01'),
(378, 'J-10062', 2, 1, 'C-00049', '2018-06-26 12:28:01'),
(379, 'J-10062', 3, 1, 'C-00049', '2018-06-26 12:28:01'),
(380, 'J-10062', 4, 1, 'C-00049', '2018-06-26 12:28:01'),
(381, 'J-10062', 5, 1, 'C-00049', '2018-06-26 12:28:01'),
(382, 'J-10062', 6, 1, 'C-00049', '2018-06-26 12:28:01'),
(383, 'J-10062', 8, 1, 'C-00049', '2018-06-26 12:28:01'),
(384, 'J-10062', 9, 1, 'C-00049', '2018-06-26 12:28:01'),
(385, 'J-10062', 14, 1, 'C-00049', '2018-06-26 12:28:01'),
(386, 'J-10062', 18, 1, 'C-00049', '2018-06-26 12:28:01'),
(387, 'J-10062', 23, 1, 'C-00049', '2018-06-26 12:28:01'),
(388, 'J-10062', 31, 1, 'C-00049', '2018-06-26 12:28:01'),
(389, 'J-10062', 35, 1, 'C-00049', '2018-06-26 12:28:01'),
(390, 'J-10062', 36, 1, 'C-00049', '2018-06-26 12:28:01'),
(391, 'J-10062', 41, 1, 'C-00049', '2018-06-26 12:28:01'),
(392, 'J-10062', 45, 1, 'C-00049', '2018-06-26 12:28:01'),
(393, 'J-10062', 49, 1, 'C-00049', '2018-06-26 12:28:01'),
(394, 'J-10063', 1, 5, 'C-00050', '2018-06-26 10:02:40'),
(395, 'J-10063', 5, 5, 'C-00050', '2018-06-26 10:02:40'),
(396, 'J-10063', 4, 5, 'C-00050', '2018-06-26 10:02:40'),
(397, 'J-10063', 14, 5, 'C-00050', '2018-06-26 10:02:40'),
(398, 'J-10063', 31, 5, 'C-00050', '2018-06-26 10:02:40'),
(399, 'J-10063', 41, 5, 'C-00050', '2018-06-26 10:02:40'),
(400, 'J-10063', 53, 5, 'C-00050', '2018-06-26 10:02:40'),
(401, 'J-10063', 57, 5, 'C-00050', '2018-06-26 10:02:40'),
(402, 'J-10063', 1, 5, 'C-00051', '2018-06-26 10:04:49'),
(403, 'J-10063', 5, 5, 'C-00051', '2018-06-26 10:04:49'),
(404, 'J-10063', 4, 5, 'C-00051', '2018-06-26 10:04:49'),
(405, 'J-10063', 14, 5, 'C-00051', '2018-06-26 10:04:49'),
(406, 'J-10063', 31, 5, 'C-00051', '2018-06-26 10:04:49'),
(407, 'J-10063', 41, 5, 'C-00051', '2018-06-26 10:04:49'),
(408, 'J-10063', 53, 5, 'C-00051', '2018-06-26 10:04:49'),
(409, 'J-10063', 57, 5, 'C-00051', '2018-06-26 10:04:49'),
(410, 'J-10064', 1, 5, 'C-00052', '2018-06-26 10:08:44'),
(411, 'J-10064', 5, 5, 'C-00052', '2018-06-26 10:08:44'),
(412, 'J-10064', 3, 5, 'C-00052', '2018-06-26 10:08:44'),
(413, 'J-10064', 7, 5, 'C-00052', '2018-06-26 10:08:44'),
(414, 'J-10064', 53, 5, 'C-00052', '2018-06-26 10:08:44'),
(415, 'J-10064', 3, 2, 'C-00053', '2018-06-26 10:14:50'),
(416, 'J-10065', 3, 5, 'C-00054', '2018-06-26 10:21:00'),
(417, 'J-10065', 4, 5, 'C-00054', '2018-06-26 10:21:00'),
(418, 'J-10065', 2, 5, 'C-00054', '2018-06-26 10:21:00'),
(419, 'J-10065', 7, 5, 'C-00054', '2018-06-26 10:21:00'),
(420, 'J-10065', 53, 5, 'C-00054', '2018-06-26 10:21:00'),
(421, 'J-10065', 3, 5, 'C-00055', '2018-06-26 10:22:29'),
(422, 'J-10065', 4, 5, 'C-00055', '2018-06-26 10:22:29'),
(423, 'J-10065', 2, 5, 'C-00055', '2018-06-26 10:22:29'),
(424, 'J-10065', 7, 5, 'C-00055', '2018-06-26 10:22:29'),
(425, 'J-10065', 53, 5, 'C-00055', '2018-06-26 10:22:29'),
(426, 'J-10066', 2, 5, 'C-00056', '2018-06-26 10:24:32'),
(427, 'J-10066', 3, 5, 'C-00056', '2018-06-26 10:24:32'),
(428, 'J-10066', 68, 5, 'C-00056', '2018-06-26 10:24:32'),
(429, 'J-10066', 69, 5, 'C-00056', '2018-06-26 10:24:32'),
(430, 'J-10066', 54, 5, 'C-00056', '2018-06-26 10:24:32'),
(431, 'J-10066', 2, 2, 'C-00057', '2018-06-26 10:42:03'),
(432, 'J-10066', 3, 2, 'C-00057', '2018-06-26 10:42:03'),
(433, 'J-10066', 68, 2, 'C-00057', '2018-06-26 10:42:03'),
(434, 'J-10066', 69, 2, 'C-00057', '2018-06-26 10:42:03'),
(435, 'J-10066', 54, 2, 'C-00057', '2018-06-26 10:42:03'),
(436, 'J-10066', 2, 2, 'C-00058', '2018-06-26 10:54:27'),
(437, 'J-10066', 3, 2, 'C-00058', '2018-06-26 10:54:27'),
(438, 'J-10066', 68, 2, 'C-00058', '2018-06-26 10:54:27'),
(439, 'J-10066', 69, 2, 'C-00058', '2018-06-26 10:54:27'),
(440, 'J-10066', 54, 2, 'C-00058', '2018-06-26 10:54:27'),
(441, 'J-10066', 2, 1, 'C-00059', '2018-06-26 10:58:02'),
(442, 'J-10066', 3, 1, 'C-00059', '2018-06-26 10:58:02'),
(443, 'J-10066', 68, 1, 'C-00059', '2018-06-26 10:58:02'),
(444, 'J-10066', 69, 1, 'C-00059', '2018-06-26 10:58:02'),
(445, 'J-10045', 7, 5, 'C-00060', '2018-06-28 12:19:18'),
(446, 'J-10045', 7, 2, 'C-00061', '2018-06-28 12:19:39'),
(447, 'J-10045', 7, 1, 'C-00062', '2018-06-28 12:19:55'),
(448, 'J-10045', 19, 1, 'C-00062', '2018-06-28 12:19:55'),
(449, 'J-10045', 7, 1, 'C-00063', '2018-06-28 12:20:09'),
(450, 'J-10045', 19, 1, 'C-00063', '2018-06-28 12:20:09'),
(451, 'J-10045', 57, 4, 'C-00064', '2018-06-28 12:20:27'),
(452, 'J-10045', 58, 4, 'C-00064', '2018-06-28 12:20:27'),
(453, 'J-10045', 59, 4, 'C-00064', '2018-06-28 12:20:27'),
(454, 'J-10045', 60, 4, 'C-00064', '2018-06-28 12:20:27'),
(455, 'J-10069', 5, 5, 'C-00065', '2018-07-02 01:18:05'),
(456, 'J-10069', 6, 5, 'C-00065', '2018-07-02 01:18:05'),
(457, 'J-10069', 1, 5, 'C-00065', '2018-07-02 01:18:05'),
(458, 'J-10069', 2, 5, 'C-00065', '2018-07-02 01:18:05'),
(459, 'J-10069', 3, 5, 'C-00065', '2018-07-02 01:18:05'),
(460, 'J-10069', 53, 5, 'C-00065', '2018-07-02 01:18:05'),
(461, 'J-10069', 57, 5, 'C-00065', '2018-07-02 01:18:05'),
(462, 'J-10069', 5, 5, 'C-00066', '2018-07-02 01:19:33'),
(463, 'J-10069', 6, 5, 'C-00066', '2018-07-02 01:19:33'),
(464, 'J-10069', 1, 5, 'C-00066', '2018-07-02 01:19:33'),
(465, 'J-10069', 2, 5, 'C-00066', '2018-07-02 01:19:33'),
(466, 'J-10069', 3, 5, 'C-00066', '2018-07-02 01:19:33'),
(467, 'J-10069', 53, 5, 'C-00066', '2018-07-02 01:19:33'),
(468, 'J-10069', 57, 5, 'C-00066', '2018-07-02 01:19:33'),
(469, 'J-10057', 11, 2, 'C-00067', '2018-07-02 01:22:58'),
(470, 'J-10057', 11, 2, 'C-00068', '2018-07-02 01:23:26'),
(471, 'J-10045', 7, 5, 'C-00069', '2018-07-09 08:49:46'),
(472, 'J-10045', 19, 5, 'C-00069', '2018-07-09 08:49:46'),
(473, 'J-10066', 2, 2, 'C-00070', '2018-07-14 11:03:51'),
(474, 'J-10066', 3, 2, 'C-00070', '2018-07-14 11:03:51'),
(475, 'J-10066', 68, 2, 'C-00070', '2018-07-14 11:03:51'),
(476, 'J-10066', 69, 2, 'C-00070', '2018-07-14 11:03:51'),
(477, 'J-10066', 54, 2, 'C-00070', '2018-07-14 11:03:51'),
(478, 'J-10066', 2, 2, 'C-00071', '2018-07-14 11:05:28'),
(479, 'J-10066', 3, 2, 'C-00071', '2018-07-14 11:05:28'),
(480, 'J-10066', 68, 2, 'C-00071', '2018-07-14 11:05:28'),
(481, 'J-10066', 69, 2, 'C-00071', '2018-07-14 11:05:28'),
(482, 'J-10066', 54, 2, 'C-00071', '2018-07-14 11:05:28'),
(483, 'J-10072', 1, 2, 'C-00072', '2018-07-15 08:12:06'),
(484, 'J-10072', 5, 2, 'C-00072', '2018-07-15 08:12:06'),
(485, 'J-10072', 19, 2, 'C-00072', '2018-07-15 08:12:06'),
(486, 'J-10072', 24, 2, 'C-00072', '2018-07-15 08:12:06'),
(487, 'J-10072', 37, 2, 'C-00072', '2018-07-15 08:12:06'),
(488, 'J-10072', 42, 2, 'C-00072', '2018-07-15 08:12:06'),
(489, 'J-10072', 54, 2, 'C-00072', '2018-07-15 08:12:06'),
(490, 'J-10072', 55, 2, 'C-00072', '2018-07-15 08:12:06'),
(491, 'J-10072', 58, 2, 'C-00072', '2018-07-15 08:12:06'),
(492, 'J-10072', 59, 2, 'C-00072', '2018-07-15 08:12:06'),
(493, 'J-10072', 62, 2, 'C-00072', '2018-07-15 08:12:06'),
(494, 'J-10072', 63, 2, 'C-00072', '2018-07-15 08:12:06'),
(495, 'J-10072', 66, 2, 'C-00072', '2018-07-15 08:12:06'),
(496, 'J-10072', 67, 2, 'C-00072', '2018-07-15 08:12:06'),
(497, 'J-10072', 1, 1, 'C-00073', '2018-07-15 08:12:23'),
(498, 'J-10072', 5, 1, 'C-00073', '2018-07-15 08:12:23'),
(499, 'J-10072', 10, 1, 'C-00073', '2018-07-15 08:12:23'),
(500, 'J-10072', 15, 1, 'C-00073', '2018-07-15 08:12:23'),
(501, 'J-10072', 19, 1, 'C-00073', '2018-07-15 08:12:23'),
(502, 'J-10072', 24, 1, 'C-00073', '2018-07-15 08:12:23'),
(503, 'J-10072', 28, 1, 'C-00073', '2018-07-15 08:12:23'),
(504, 'J-10072', 32, 1, 'C-00073', '2018-07-15 08:12:23'),
(505, 'J-10072', 37, 1, 'C-00073', '2018-07-15 08:12:23'),
(506, 'J-10072', 42, 1, 'C-00073', '2018-07-15 08:12:23'),
(507, 'J-10072', 46, 1, 'C-00073', '2018-07-15 08:12:23'),
(508, 'J-10072', 53, 4, 'C-00074', '2018-07-15 08:12:49'),
(509, 'J-10072', 54, 4, 'C-00074', '2018-07-15 08:12:49'),
(510, 'J-10072', 55, 4, 'C-00074', '2018-07-15 08:12:49'),
(511, 'J-10072', 56, 4, 'C-00074', '2018-07-15 08:12:49'),
(512, 'J-10072', 57, 4, 'C-00074', '2018-07-15 08:12:49'),
(513, 'J-10072', 58, 4, 'C-00074', '2018-07-15 08:12:49'),
(514, 'J-10072', 59, 4, 'C-00074', '2018-07-15 08:12:49'),
(515, 'J-10072', 60, 4, 'C-00074', '2018-07-15 08:12:49'),
(516, 'J-10072', 61, 4, 'C-00074', '2018-07-15 08:12:49'),
(517, 'J-10072', 62, 4, 'C-00074', '2018-07-15 08:12:49'),
(518, 'J-10072', 63, 4, 'C-00074', '2018-07-15 08:12:49'),
(519, 'J-10072', 64, 4, 'C-00074', '2018-07-15 08:12:49'),
(520, 'J-10072', 65, 4, 'C-00074', '2018-07-15 08:12:49'),
(521, 'J-10072', 66, 4, 'C-00074', '2018-07-15 08:12:49'),
(522, 'J-10072', 67, 4, 'C-00074', '2018-07-15 08:12:49'),
(523, 'J-10072', 70, 4, 'C-00074', '2018-07-15 08:12:49'),
(524, 'J-10072', 53, 4, 'C-00075', '2018-07-15 08:13:11'),
(525, 'J-10072', 54, 4, 'C-00075', '2018-07-15 08:13:11'),
(526, 'J-10072', 55, 4, 'C-00075', '2018-07-15 08:13:11'),
(527, 'J-10072', 56, 4, 'C-00075', '2018-07-15 08:13:11'),
(528, 'J-10072', 57, 4, 'C-00075', '2018-07-15 08:13:11'),
(529, 'J-10072', 58, 4, 'C-00075', '2018-07-15 08:13:11'),
(530, 'J-10072', 59, 4, 'C-00075', '2018-07-15 08:13:11'),
(531, 'J-10072', 60, 4, 'C-00075', '2018-07-15 08:13:11'),
(532, 'J-10072', 61, 4, 'C-00075', '2018-07-15 08:13:11'),
(533, 'J-10072', 62, 4, 'C-00075', '2018-07-15 08:13:11'),
(534, 'J-10072', 63, 4, 'C-00075', '2018-07-15 08:13:11'),
(535, 'J-10072', 64, 4, 'C-00075', '2018-07-15 08:13:11'),
(536, 'J-10072', 65, 4, 'C-00075', '2018-07-15 08:13:11'),
(537, 'J-10072', 66, 4, 'C-00075', '2018-07-15 08:13:11'),
(538, 'J-10072', 67, 4, 'C-00075', '2018-07-15 08:13:11'),
(539, 'J-10071', 1, 2, 'C-00076', '2018-07-16 12:36:57'),
(540, 'J-10071', 2, 2, 'C-00076', '2018-07-16 12:36:57'),
(541, 'J-10071', 3, 2, 'C-00076', '2018-07-16 12:36:57'),
(542, 'J-10071', 5, 2, 'C-00076', '2018-07-16 12:36:57'),
(543, 'J-10071', 10, 2, 'C-00076', '2018-07-16 12:36:57'),
(544, 'J-10071', 15, 2, 'C-00076', '2018-07-16 12:36:57'),
(545, 'J-10071', 19, 2, 'C-00076', '2018-07-16 12:36:57'),
(546, 'J-10071', 24, 2, 'C-00076', '2018-07-16 12:36:57'),
(547, 'J-10071', 28, 2, 'C-00076', '2018-07-16 12:36:57'),
(548, 'J-10071', 32, 2, 'C-00076', '2018-07-16 12:36:57'),
(549, 'J-10071', 37, 2, 'C-00076', '2018-07-16 12:36:57'),
(550, 'J-10071', 42, 2, 'C-00076', '2018-07-16 12:36:57'),
(551, 'J-10071', 46, 2, 'C-00076', '2018-07-16 12:36:57'),
(552, 'J-10071', 68, 2, 'C-00076', '2018-07-16 12:36:57'),
(553, 'J-10071', 53, 2, 'C-00076', '2018-07-16 12:36:57'),
(554, 'J-10071', 57, 2, 'C-00076', '2018-07-16 12:36:57'),
(555, 'J-10071', 62, 2, 'C-00076', '2018-07-16 12:36:57'),
(556, 'J-10071', 66, 2, 'C-00076', '2018-07-16 12:36:57'),
(557, 'J-10071', 1, 1, 'C-00077', '2018-07-16 12:37:08'),
(558, 'J-10071', 2, 1, 'C-00077', '2018-07-16 12:37:08'),
(559, 'J-10071', 3, 1, 'C-00077', '2018-07-16 12:37:08'),
(560, 'J-10071', 5, 1, 'C-00077', '2018-07-16 12:37:08'),
(561, 'J-10071', 10, 1, 'C-00077', '2018-07-16 12:37:08'),
(562, 'J-10071', 15, 1, 'C-00077', '2018-07-16 12:37:08'),
(563, 'J-10071', 19, 1, 'C-00077', '2018-07-16 12:37:08'),
(564, 'J-10071', 24, 1, 'C-00077', '2018-07-16 12:37:08'),
(565, 'J-10071', 28, 1, 'C-00077', '2018-07-16 12:37:08'),
(566, 'J-10071', 32, 1, 'C-00077', '2018-07-16 12:37:08'),
(567, 'J-10071', 37, 1, 'C-00077', '2018-07-16 12:37:08'),
(568, 'J-10071', 42, 1, 'C-00077', '2018-07-16 12:37:08'),
(569, 'J-10071', 46, 1, 'C-00077', '2018-07-16 12:37:08'),
(570, 'J-10071', 68, 1, 'C-00077', '2018-07-16 12:37:08'),
(571, 'J-10072', 1, 1, 'C-00078', '2018-07-16 12:37:53'),
(572, 'J-10072', 5, 1, 'C-00078', '2018-07-16 12:37:53'),
(573, 'J-10072', 10, 1, 'C-00078', '2018-07-16 12:37:53'),
(574, 'J-10072', 15, 1, 'C-00078', '2018-07-16 12:37:53'),
(575, 'J-10072', 19, 1, 'C-00078', '2018-07-16 12:37:53'),
(576, 'J-10072', 24, 1, 'C-00078', '2018-07-16 12:37:53'),
(577, 'J-10072', 28, 1, 'C-00078', '2018-07-16 12:37:53'),
(578, 'J-10072', 32, 1, 'C-00078', '2018-07-16 12:37:53'),
(579, 'J-10072', 37, 1, 'C-00078', '2018-07-16 12:37:53'),
(580, 'J-10072', 42, 1, 'C-00078', '2018-07-16 12:37:53'),
(581, 'J-10072', 46, 1, 'C-00078', '2018-07-16 12:37:53'),
(582, 'J-10072', 53, 4, 'C-00079', '2018-07-16 12:38:09'),
(583, 'J-10072', 54, 4, 'C-00079', '2018-07-16 12:38:09'),
(584, 'J-10072', 55, 4, 'C-00079', '2018-07-16 12:38:09'),
(585, 'J-10072', 56, 4, 'C-00079', '2018-07-16 12:38:09'),
(586, 'J-10072', 57, 4, 'C-00079', '2018-07-16 12:38:09'),
(587, 'J-10072', 58, 4, 'C-00079', '2018-07-16 12:38:09'),
(588, 'J-10072', 59, 4, 'C-00079', '2018-07-16 12:38:09'),
(589, 'J-10072', 60, 4, 'C-00079', '2018-07-16 12:38:09'),
(590, 'J-10072', 61, 4, 'C-00079', '2018-07-16 12:38:09'),
(591, 'J-10072', 62, 4, 'C-00079', '2018-07-16 12:38:09'),
(592, 'J-10072', 63, 4, 'C-00079', '2018-07-16 12:38:09'),
(593, 'J-10072', 64, 4, 'C-00079', '2018-07-16 12:38:09'),
(594, 'J-10072', 65, 4, 'C-00079', '2018-07-16 12:38:09'),
(595, 'J-10072', 66, 4, 'C-00079', '2018-07-16 12:38:09'),
(596, 'J-10072', 67, 4, 'C-00079', '2018-07-16 12:38:09'),
(597, 'J-10072', 70, 4, 'C-00079', '2018-07-16 12:38:09'),
(598, 'J-10058', 1, 2, 'C-00080', '2018-07-17 11:15:42'),
(599, 'J-10058', 5, 2, 'C-00080', '2018-07-17 11:15:42'),
(600, 'J-10058', 10, 2, 'C-00080', '2018-07-17 11:15:42'),
(601, 'J-10058', 15, 2, 'C-00080', '2018-07-17 11:15:42'),
(602, 'J-10058', 19, 2, 'C-00080', '2018-07-17 11:15:42'),
(603, 'J-10058', 24, 2, 'C-00080', '2018-07-17 11:15:42'),
(604, 'J-10058', 28, 2, 'C-00080', '2018-07-17 11:15:42'),
(605, 'J-10058', 32, 2, 'C-00080', '2018-07-17 11:15:42'),
(606, 'J-10058', 37, 2, 'C-00080', '2018-07-17 11:15:42'),
(607, 'J-10058', 42, 2, 'C-00080', '2018-07-17 11:15:42'),
(608, 'J-10058', 46, 2, 'C-00080', '2018-07-17 11:15:42'),
(609, 'J-10058', 68, 2, 'C-00080', '2018-07-17 11:15:42'),
(610, 'J-10058', 53, 2, 'C-00080', '2018-07-17 11:15:42'),
(611, 'J-10058', 54, 2, 'C-00080', '2018-07-17 11:15:42'),
(612, 'J-10058', 55, 2, 'C-00080', '2018-07-17 11:15:42'),
(613, 'J-10058', 56, 2, 'C-00080', '2018-07-17 11:15:42'),
(614, 'J-10058', 57, 2, 'C-00080', '2018-07-17 11:15:42'),
(615, 'J-10058', 58, 2, 'C-00080', '2018-07-17 11:15:42'),
(616, 'J-10058', 59, 2, 'C-00080', '2018-07-17 11:15:42'),
(617, 'J-10058', 60, 2, 'C-00080', '2018-07-17 11:15:42'),
(618, 'J-10058', 61, 2, 'C-00080', '2018-07-17 11:15:42'),
(619, 'J-10058', 62, 2, 'C-00080', '2018-07-17 11:15:42'),
(620, 'J-10058', 63, 2, 'C-00080', '2018-07-17 11:15:42'),
(621, 'J-10058', 64, 2, 'C-00080', '2018-07-17 11:15:42'),
(622, 'J-10058', 65, 2, 'C-00080', '2018-07-17 11:15:42'),
(623, 'J-10058', 66, 2, 'C-00080', '2018-07-17 11:15:42'),
(624, 'J-10058', 67, 2, 'C-00080', '2018-07-17 11:15:42'),
(625, 'J-10058', 70, 2, 'C-00080', '2018-07-17 11:15:42'),
(626, 'J-10072', 1, 2, 'C-00081', '2018-07-18 09:58:00'),
(627, 'J-10072', 5, 2, 'C-00081', '2018-07-18 09:58:00'),
(628, 'J-10072', 10, 2, 'C-00081', '2018-07-18 09:58:00'),
(629, 'J-10072', 15, 2, 'C-00081', '2018-07-18 09:58:00'),
(630, 'J-10072', 19, 2, 'C-00081', '2018-07-18 09:58:00'),
(631, 'J-10072', 24, 2, 'C-00081', '2018-07-18 09:58:00'),
(632, 'J-10072', 28, 2, 'C-00081', '2018-07-18 09:58:00'),
(633, 'J-10072', 32, 2, 'C-00081', '2018-07-18 09:58:00'),
(634, 'J-10072', 37, 2, 'C-00081', '2018-07-18 09:58:00'),
(635, 'J-10072', 42, 2, 'C-00081', '2018-07-18 09:58:00'),
(636, 'J-10072', 46, 2, 'C-00081', '2018-07-18 09:58:00'),
(637, 'J-10072', 53, 2, 'C-00081', '2018-07-18 09:58:00'),
(638, 'J-10072', 54, 2, 'C-00081', '2018-07-18 09:58:00'),
(639, 'J-10072', 55, 2, 'C-00081', '2018-07-18 09:58:00'),
(640, 'J-10072', 56, 2, 'C-00081', '2018-07-18 09:58:00'),
(641, 'J-10072', 57, 2, 'C-00081', '2018-07-18 09:58:00'),
(642, 'J-10072', 58, 2, 'C-00081', '2018-07-18 09:58:00'),
(643, 'J-10072', 59, 2, 'C-00081', '2018-07-18 09:58:00'),
(644, 'J-10072', 60, 2, 'C-00081', '2018-07-18 09:58:00'),
(645, 'J-10072', 61, 2, 'C-00081', '2018-07-18 09:58:00'),
(646, 'J-10072', 62, 2, 'C-00081', '2018-07-18 09:58:00'),
(647, 'J-10072', 63, 2, 'C-00081', '2018-07-18 09:58:00'),
(648, 'J-10072', 64, 2, 'C-00081', '2018-07-18 09:58:00'),
(649, 'J-10072', 65, 2, 'C-00081', '2018-07-18 09:58:00'),
(650, 'J-10072', 66, 2, 'C-00081', '2018-07-18 09:58:00'),
(651, 'J-10072', 67, 2, 'C-00081', '2018-07-18 09:58:00'),
(652, 'J-10072', 70, 2, 'C-00081', '2018-07-18 09:58:00'),
(653, 'J-10072', 53, 4, 'C-00082', '2018-07-25 10:18:51'),
(654, 'J-10072', 54, 4, 'C-00082', '2018-07-25 10:18:51'),
(655, 'J-10072', 55, 4, 'C-00082', '2018-07-25 10:18:51'),
(656, 'J-10072', 56, 4, 'C-00082', '2018-07-25 10:18:51'),
(657, 'J-10072', 57, 4, 'C-00082', '2018-07-25 10:18:51'),
(658, 'J-10072', 58, 4, 'C-00082', '2018-07-25 10:18:51'),
(659, 'J-10072', 59, 4, 'C-00082', '2018-07-25 10:18:51'),
(660, 'J-10072', 60, 4, 'C-00082', '2018-07-25 10:18:51'),
(661, 'J-10072', 61, 4, 'C-00082', '2018-07-25 10:18:51'),
(662, 'J-10072', 62, 4, 'C-00082', '2018-07-25 10:18:51'),
(663, 'J-10072', 63, 4, 'C-00082', '2018-07-25 10:18:51'),
(664, 'J-10072', 64, 4, 'C-00082', '2018-07-25 10:18:51'),
(665, 'J-10072', 65, 4, 'C-00082', '2018-07-25 10:18:51'),
(666, 'J-10072', 66, 4, 'C-00082', '2018-07-25 10:18:51'),
(667, 'J-10072', 67, 4, 'C-00082', '2018-07-25 10:18:51'),
(668, 'J-10072', 70, 4, 'C-00082', '2018-07-25 10:18:51'),
(669, 'J-10072', 1, 5, 'C-00083', '2018-07-25 10:22:49'),
(670, 'J-10072', 5, 5, 'C-00083', '2018-07-25 10:22:49'),
(671, 'J-10072', 10, 5, 'C-00083', '2018-07-25 10:22:49'),
(672, 'J-10072', 15, 5, 'C-00083', '2018-07-25 10:22:49'),
(673, 'J-10072', 19, 5, 'C-00083', '2018-07-25 10:22:49'),
(674, 'J-10072', 24, 5, 'C-00083', '2018-07-25 10:22:49'),
(675, 'J-10072', 28, 5, 'C-00083', '2018-07-25 10:22:49'),
(676, 'J-10072', 32, 5, 'C-00083', '2018-07-25 10:22:49'),
(677, 'J-10072', 37, 5, 'C-00083', '2018-07-25 10:22:49'),
(678, 'J-10072', 42, 5, 'C-00083', '2018-07-25 10:22:49'),
(679, 'J-10072', 46, 5, 'C-00083', '2018-07-25 10:22:49'),
(680, 'J-10072', 53, 5, 'C-00083', '2018-07-25 10:22:49'),
(681, 'J-10072', 54, 5, 'C-00083', '2018-07-25 10:22:49'),
(682, 'J-10072', 55, 5, 'C-00083', '2018-07-25 10:22:49'),
(683, 'J-10072', 56, 5, 'C-00083', '2018-07-25 10:22:49'),
(684, 'J-10072', 57, 5, 'C-00083', '2018-07-25 10:22:49'),
(685, 'J-10072', 58, 5, 'C-00083', '2018-07-25 10:22:49'),
(686, 'J-10072', 59, 5, 'C-00083', '2018-07-25 10:22:49'),
(687, 'J-10072', 60, 5, 'C-00083', '2018-07-25 10:22:49'),
(688, 'J-10072', 61, 5, 'C-00083', '2018-07-25 10:22:49'),
(689, 'J-10072', 62, 5, 'C-00083', '2018-07-25 10:22:49'),
(690, 'J-10072', 63, 5, 'C-00083', '2018-07-25 10:22:49'),
(691, 'J-10072', 64, 5, 'C-00083', '2018-07-25 10:22:49'),
(692, 'J-10072', 65, 5, 'C-00083', '2018-07-25 10:22:49'),
(693, 'J-10072', 66, 5, 'C-00083', '2018-07-25 10:22:49'),
(694, 'J-10072', 67, 5, 'C-00083', '2018-07-25 10:22:49'),
(695, 'J-10072', 70, 5, 'C-00083', '2018-07-25 10:22:49'),
(696, 'J-10072', 1, 2, 'C-00084', '2018-07-25 10:23:18'),
(697, 'J-10072', 5, 2, 'C-00084', '2018-07-25 10:23:18'),
(698, 'J-10072', 10, 2, 'C-00084', '2018-07-25 10:23:18'),
(699, 'J-10072', 15, 2, 'C-00084', '2018-07-25 10:23:18'),
(700, 'J-10072', 19, 2, 'C-00084', '2018-07-25 10:23:18'),
(701, 'J-10072', 24, 2, 'C-00084', '2018-07-25 10:23:18'),
(702, 'J-10072', 28, 2, 'C-00084', '2018-07-25 10:23:18'),
(703, 'J-10072', 32, 2, 'C-00084', '2018-07-25 10:23:18'),
(704, 'J-10072', 37, 2, 'C-00084', '2018-07-25 10:23:18'),
(705, 'J-10072', 42, 2, 'C-00084', '2018-07-25 10:23:18'),
(706, 'J-10072', 46, 2, 'C-00084', '2018-07-25 10:23:18'),
(707, 'J-10072', 53, 2, 'C-00084', '2018-07-25 10:23:18'),
(708, 'J-10072', 54, 2, 'C-00084', '2018-07-25 10:23:18'),
(709, 'J-10072', 55, 2, 'C-00084', '2018-07-25 10:23:18'),
(710, 'J-10072', 56, 2, 'C-00084', '2018-07-25 10:23:18'),
(711, 'J-10072', 57, 2, 'C-00084', '2018-07-25 10:23:18'),
(712, 'J-10072', 58, 2, 'C-00084', '2018-07-25 10:23:18'),
(713, 'J-10072', 59, 2, 'C-00084', '2018-07-25 10:23:18'),
(714, 'J-10072', 60, 2, 'C-00084', '2018-07-25 10:23:18'),
(715, 'J-10072', 61, 2, 'C-00084', '2018-07-25 10:23:18'),
(716, 'J-10072', 62, 2, 'C-00084', '2018-07-25 10:23:18'),
(717, 'J-10072', 63, 2, 'C-00084', '2018-07-25 10:23:18'),
(718, 'J-10072', 64, 2, 'C-00084', '2018-07-25 10:23:18'),
(719, 'J-10072', 65, 2, 'C-00084', '2018-07-25 10:23:18'),
(720, 'J-10072', 66, 2, 'C-00084', '2018-07-25 10:23:18'),
(721, 'J-10072', 67, 2, 'C-00084', '2018-07-25 10:23:18'),
(722, 'J-10072', 70, 2, 'C-00084', '2018-07-25 10:23:18'),
(723, 'J-10072', 1, 1, 'C-00085', '2018-07-25 10:30:20'),
(724, 'J-10072', 5, 1, 'C-00085', '2018-07-25 10:30:20'),
(725, 'J-10072', 10, 1, 'C-00085', '2018-07-25 10:30:20'),
(726, 'J-10072', 15, 1, 'C-00085', '2018-07-25 10:30:20'),
(727, 'J-10072', 19, 1, 'C-00085', '2018-07-25 10:30:20'),
(728, 'J-10072', 24, 1, 'C-00085', '2018-07-25 10:30:20'),
(729, 'J-10072', 28, 1, 'C-00085', '2018-07-25 10:30:20'),
(730, 'J-10072', 32, 1, 'C-00085', '2018-07-25 10:30:20'),
(731, 'J-10072', 37, 1, 'C-00085', '2018-07-25 10:30:20'),
(732, 'J-10072', 42, 1, 'C-00085', '2018-07-25 10:30:20'),
(733, 'J-10072', 46, 1, 'C-00085', '2018-07-25 10:30:20'),
(734, 'J-10072', 1, 1, 'C-00086', '2018-07-25 10:31:26'),
(735, 'J-10072', 5, 1, 'C-00086', '2018-07-25 10:31:26'),
(736, 'J-10072', 10, 1, 'C-00086', '2018-07-25 10:31:26'),
(737, 'J-10072', 15, 1, 'C-00086', '2018-07-25 10:31:26'),
(738, 'J-10072', 19, 1, 'C-00086', '2018-07-25 10:31:26'),
(739, 'J-10072', 24, 1, 'C-00086', '2018-07-25 10:31:26'),
(740, 'J-10072', 28, 1, 'C-00086', '2018-07-25 10:31:26'),
(741, 'J-10072', 32, 1, 'C-00086', '2018-07-25 10:31:26'),
(742, 'J-10072', 37, 1, 'C-00086', '2018-07-25 10:31:26'),
(743, 'J-10072', 42, 1, 'C-00086', '2018-07-25 10:31:26'),
(744, 'J-10072', 46, 1, 'C-00086', '2018-07-25 10:31:26'),
(745, 'J-10047', 5, 1, 'C-00087', '2018-07-25 10:36:55'),
(746, 'J-10047', 6, 1, 'C-00087', '2018-07-25 10:36:55'),
(747, 'J-10047', 7, 1, 'C-00087', '2018-07-25 10:36:55'),
(748, 'J-10047', 8, 1, 'C-00087', '2018-07-25 10:36:55'),
(749, 'J-10047', 9, 1, 'C-00087', '2018-07-25 10:36:55'),
(750, 'J-10047', 10, 1, 'C-00087', '2018-07-25 10:36:55'),
(751, 'J-10047', 11, 1, 'C-00087', '2018-07-25 10:36:55'),
(752, 'J-10047', 12, 1, 'C-00087', '2018-07-25 10:36:55'),
(753, 'J-10047', 13, 1, 'C-00087', '2018-07-25 10:36:55'),
(754, 'J-10047', 14, 1, 'C-00087', '2018-07-25 10:36:55'),
(755, 'J-10047', 15, 1, 'C-00087', '2018-07-25 10:36:55'),
(756, 'J-10047', 16, 1, 'C-00087', '2018-07-25 10:36:55'),
(757, 'J-10047', 17, 1, 'C-00087', '2018-07-25 10:36:55'),
(758, 'J-10047', 18, 1, 'C-00087', '2018-07-25 10:36:55'),
(759, 'J-10047', 19, 1, 'C-00087', '2018-07-25 10:36:55'),
(760, 'J-10047', 21, 1, 'C-00087', '2018-07-25 10:36:55'),
(761, 'J-10047', 22, 1, 'C-00087', '2018-07-25 10:36:55'),
(762, 'J-10047', 23, 1, 'C-00087', '2018-07-25 10:36:55'),
(763, 'J-10047', 24, 1, 'C-00087', '2018-07-25 10:36:55'),
(764, 'J-10047', 25, 1, 'C-00087', '2018-07-25 10:36:55'),
(765, 'J-10047', 26, 1, 'C-00087', '2018-07-25 10:36:55'),
(766, 'J-10047', 27, 1, 'C-00087', '2018-07-25 10:36:55'),
(767, 'J-10047', 28, 1, 'C-00087', '2018-07-25 10:36:55'),
(768, 'J-10047', 29, 1, 'C-00087', '2018-07-25 10:36:55'),
(769, 'J-10047', 30, 1, 'C-00087', '2018-07-25 10:36:55'),
(770, 'J-10047', 31, 1, 'C-00087', '2018-07-25 10:36:55'),
(771, 'J-10047', 32, 1, 'C-00087', '2018-07-25 10:36:55'),
(772, 'J-10047', 33, 1, 'C-00087', '2018-07-25 10:36:55'),
(773, 'J-10047', 34, 1, 'C-00087', '2018-07-25 10:36:55'),
(774, 'J-10047', 35, 1, 'C-00087', '2018-07-25 10:36:55'),
(775, 'J-10047', 36, 1, 'C-00087', '2018-07-25 10:36:55'),
(776, 'J-10047', 37, 1, 'C-00087', '2018-07-25 10:36:55'),
(777, 'J-10047', 38, 1, 'C-00087', '2018-07-25 10:36:55'),
(778, 'J-10047', 39, 1, 'C-00087', '2018-07-25 10:36:55'),
(779, 'J-10047', 40, 1, 'C-00087', '2018-07-25 10:36:55'),
(780, 'J-10047', 41, 1, 'C-00087', '2018-07-25 10:36:55'),
(781, 'J-10047', 42, 1, 'C-00087', '2018-07-25 10:36:55'),
(782, 'J-10047', 43, 1, 'C-00087', '2018-07-25 10:36:55'),
(783, 'J-10047', 44, 1, 'C-00087', '2018-07-25 10:36:55'),
(784, 'J-10047', 45, 1, 'C-00087', '2018-07-25 10:36:55'),
(785, 'J-10047', 46, 1, 'C-00087', '2018-07-25 10:36:55'),
(786, 'J-10047', 47, 1, 'C-00087', '2018-07-25 10:36:55'),
(787, 'J-10047', 48, 1, 'C-00087', '2018-07-25 10:36:55'),
(788, 'J-10047', 49, 1, 'C-00087', '2018-07-25 10:36:55'),
(789, 'J-10047', 50, 1, 'C-00087', '2018-07-25 10:36:55'),
(790, 'J-10047', 52, 1, 'C-00087', '2018-07-25 10:36:55'),
(791, 'J-10047', 5, 1, 'C-00088', '2018-07-25 10:39:33'),
(792, 'J-10047', 6, 1, 'C-00088', '2018-07-25 10:39:33'),
(793, 'J-10047', 7, 1, 'C-00088', '2018-07-25 10:39:33'),
(794, 'J-10047', 8, 1, 'C-00088', '2018-07-25 10:39:33'),
(795, 'J-10047', 9, 1, 'C-00088', '2018-07-25 10:39:33'),
(796, 'J-10047', 10, 1, 'C-00088', '2018-07-25 10:39:33'),
(797, 'J-10047', 11, 1, 'C-00088', '2018-07-25 10:39:33'),
(798, 'J-10047', 12, 1, 'C-00088', '2018-07-25 10:39:33'),
(799, 'J-10047', 13, 1, 'C-00088', '2018-07-25 10:39:33'),
(800, 'J-10047', 14, 1, 'C-00088', '2018-07-25 10:39:33'),
(801, 'J-10047', 15, 1, 'C-00088', '2018-07-25 10:39:33'),
(802, 'J-10047', 16, 1, 'C-00088', '2018-07-25 10:39:33'),
(803, 'J-10047', 17, 1, 'C-00088', '2018-07-25 10:39:33'),
(804, 'J-10047', 18, 1, 'C-00088', '2018-07-25 10:39:33'),
(805, 'J-10047', 19, 1, 'C-00088', '2018-07-25 10:39:33'),
(806, 'J-10047', 21, 1, 'C-00088', '2018-07-25 10:39:33'),
(807, 'J-10047', 22, 1, 'C-00088', '2018-07-25 10:39:33'),
(808, 'J-10047', 23, 1, 'C-00088', '2018-07-25 10:39:33'),
(809, 'J-10047', 24, 1, 'C-00088', '2018-07-25 10:39:33'),
(810, 'J-10047', 25, 1, 'C-00088', '2018-07-25 10:39:33'),
(811, 'J-10047', 26, 1, 'C-00088', '2018-07-25 10:39:33'),
(812, 'J-10047', 27, 1, 'C-00088', '2018-07-25 10:39:33'),
(813, 'J-10047', 28, 1, 'C-00088', '2018-07-25 10:39:33'),
(814, 'J-10047', 29, 1, 'C-00088', '2018-07-25 10:39:33'),
(815, 'J-10047', 30, 1, 'C-00088', '2018-07-25 10:39:33'),
(816, 'J-10047', 31, 1, 'C-00088', '2018-07-25 10:39:33'),
(817, 'J-10047', 32, 1, 'C-00088', '2018-07-25 10:39:33'),
(818, 'J-10047', 33, 1, 'C-00088', '2018-07-25 10:39:33'),
(819, 'J-10047', 34, 1, 'C-00088', '2018-07-25 10:39:33'),
(820, 'J-10047', 35, 1, 'C-00088', '2018-07-25 10:39:33'),
(821, 'J-10047', 36, 1, 'C-00088', '2018-07-25 10:39:33'),
(822, 'J-10047', 37, 1, 'C-00088', '2018-07-25 10:39:33'),
(823, 'J-10047', 38, 1, 'C-00088', '2018-07-25 10:39:33'),
(824, 'J-10047', 39, 1, 'C-00088', '2018-07-25 10:39:33'),
(825, 'J-10047', 40, 1, 'C-00088', '2018-07-25 10:39:33'),
(826, 'J-10047', 41, 1, 'C-00088', '2018-07-25 10:39:33'),
(827, 'J-10047', 42, 1, 'C-00088', '2018-07-25 10:39:33'),
(828, 'J-10047', 43, 1, 'C-00088', '2018-07-25 10:39:33'),
(829, 'J-10047', 44, 1, 'C-00088', '2018-07-25 10:39:33'),
(830, 'J-10047', 45, 1, 'C-00088', '2018-07-25 10:39:33'),
(831, 'J-10047', 46, 1, 'C-00088', '2018-07-25 10:39:33'),
(832, 'J-10047', 47, 1, 'C-00088', '2018-07-25 10:39:33'),
(833, 'J-10047', 48, 1, 'C-00088', '2018-07-25 10:39:33'),
(834, 'J-10047', 49, 1, 'C-00088', '2018-07-25 10:39:33'),
(835, 'J-10047', 50, 1, 'C-00088', '2018-07-25 10:39:33'),
(836, 'J-10047', 52, 1, 'C-00088', '2018-07-25 10:39:33');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tblpartai`
--

CREATE TABLE `tblpartai` (
  `id_partai` int(5) NOT NULL,
  `nm_partai` varchar(250) NOT NULL,
  `singkatan` varchar(25) NOT NULL,
  `tanggal_berdiri` date NOT NULL,
  `jumlah_anggota` int(9) NOT NULL,
  `kantor_pusat` varchar(100) NOT NULL,
  `ketua_umum` varchar(100) NOT NULL,
  `logo` varchar(20) NOT NULL,
  `status` enum('1','0') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tblpartai`
--

INSERT INTO `tblpartai` (`id_partai`, `nm_partai`, `singkatan`, `tanggal_berdiri`, `jumlah_anggota`, `kantor_pusat`, `ketua_umum`, `logo`, `status`) VALUES
(1, 'PARTAI NASIONAL DEMOKRAT', 'NASDEM', '2011-07-26', 402769, 'Jln. R.P. Soeroso No. 44, Gondangdia Lama, Menteng, Jakarta Pusat, Jakarta 10350', 'Surya Paloh', 'file_1525099570.PNG', '1'),
(2, 'PARTAI KEBANGKITAN BANGSA', 'PKB', '1998-07-23', 375254, 'Jln. Raden Saleh 1 No. 9, Menteng Jakarta Pusat DKI Jakarta', 'Muhaimin Iskandar', 'pkb.png', '1'),
(3, 'PARTAI KEADILAN SEJAHTERA', 'PKS', '2002-04-20', 300158, 'Jalan TB.Simatupang No.82 Pasar Minggu, Jakarta 12520', 'Mohamad Sohibul Iman, Ph.D.', 'pks.png', '1'),
(4, 'PARTAI DEMOKRASI INDONESIA PERJUANGAN', 'PDIP', '1973-01-10', 339224, 'Lenteng Agung, Jagakarsa, Jakarta Selatan', 'Megawati Soekarnoputri', 'pdip.png', '1'),
(5, 'PARTAI GOLONGAN KARYA', 'GOLKAR', '1964-10-20', 675088, 'Jalan Anggrek Neli Murni, RT 02 / RW 01, Kemanggisan,  Palmerah, Jakarta Barat 11480', 'Ir. Airlangga Hartarto, MBA, MMT', 'golkar.png', '1'),
(6, 'PARTAI GERAKAN INDONESIA RAYA', 'GERINDRA', '2008-02-06', 468519, 'Jln. Harsono RM no. 54, Ragunan, Pasar Minggu, Jakarta Selatan 12550', 'Prabowo Subianto', 'gerindra.jpg', '1'),
(7, 'PARTAI DEMOKRAT', 'DEMOKRAT', '2001-09-09', 412397, 'Jln. Proklamasi No.41, Menteng - Jakarta Pusat 10320', 'Susilo Bambang Yudhoyono', 'demokrat.jpg', '1'),
(8, 'PARTAI AMANAT NASIONAL', 'PAN', '1998-08-23', 496623, 'Jalan Senopati No. 113, Kebayoran Baru', 'Zulkifli Hasan', 'pan.jpg', '1'),
(9, 'PARTAI PERSATUAN PEMBANGUNAN', 'PPP', '1973-01-05', 390982, 'Jln. Pangeran Diponegoro No.60 Daerah Khusus Ibukota Jakarta 10310', 'Muhammad Romahurmuziy', 'ppp.png', '1'),
(10, 'PARTAI HATI NURANI RAKYAT', 'HANURA', '2006-12-21', 828225, 'Jln. Mh Thamrin No.81 Jakarta Pusat', 'DR. H. OESMAN SAPTA', 'hanura.png', '1'),
(11, 'PARTAI BULAN BINTANG', 'PBB', '1998-07-17', 373063, 'Jln Kramat VI/14A, Jakarta 10450', 'Yusril Ihza Mahendra', 'pbb.png', '1'),
(12, 'PARTAI KEADILAN DAN PERSATUAN INDONESIA', 'PKPI', '2002-09-09', 460822, 'Jln. Diponegoro No. 63 Menteng, Jakarta 10310', 'General (Ret) Prof. Dr. Abdullah Makhmud Hendropriyono. ST., SH., MH.', 'pkpi.png', '1'),
(13, 'PARTAI ACEH', 'PA', '2007-06-07', 8469, 'Jln. T.Imum Gp.Blang Cut', 'Muzakir', '', '1'),
(14, 'PARTAI NANGGROE ACEH', 'PNA', '2017-05-02', 14373, 'GAMPONG PANGO RAYA', 'IRWANDI YUSUF', '', '1'),
(15, 'PARTAI DAERAH ACEH', 'PDA', '0000-00-00', 6791, 'Jln. Soekarno Hatta No. 167-168 Mibo, Banda Aceh', 'Jamaluddin, S.Pdi, MA', '', '1'),
(17, 'PARTAI BERKARYA', 'BERKARYA', '2016-10-13', 409022, 'Jalan Pangeran Antasari No 20\r\nCilandak, Jakarta Selatan 12430', 'NENENG A. TUTTY, S.H', 'berkarya.png', '1'),
(18, 'PARTAI SOLIDARITAS INDONESIA', 'PSI', '2014-11-16', 332172, 'Jln. K.H. Wahid Hasyim No.194, Tanah Abang, Jakarta Pusat 10250', 'Grace Natalie Louisa', 'psi.jpg', '1'),
(19, 'PARTAI GERAKAN PERUBAHAN INDONESIA', 'Garuda', '2015-04-16', 693191, 'Jln Kwitang Raya No. 8 Jakarta 10420', 'Ahmad Ridha Sabana, SE.,MBA.', 'garuda.png', '1'),
(20, 'PARTAI PERSATUAN INDONESIA', 'PERINDO', '2015-02-07', 629859, 'Jln. Pangeran Diponegoro 29 \r\nMenteng, Jakarta Pusat 10310', 'HARY TANOESOEDIBJO', 'perindo.jpeg', '1'),
(21, 'sdf', 'sdf', '2018-03-14', 3333, 'sdf', 'dsf', 'file_1521734529.png', '0');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(9) NOT NULL,
  `kd_user` varchar(6) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `email` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `foto` varchar(30) NOT NULL,
  `status` enum('user','admin','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `kd_user`, `username`, `password`, `nama_lengkap`, `tempat_lahir`, `tanggal_lahir`, `email`, `alamat`, `no_hp`, `foto`, `status`) VALUES
(1, 'A-0001', 'admin', '11111', 'Mukhammad Fakhir Rizal', 'Batang', '1994-11-16', 'user@admin.com', 'Jln. dr. Cipto 61, Proyonanggan Tengah, Batang 51211', '085696303627', 'file_1518453299.jpg', 'admin'),
(2, '', '', '', '', '', '0000-00-00', '', '', '', '', ''),
(3, '', '', '', '', '', '0000-00-00', '', '', '', '', ''),
(4, '', '', '', '', '', '0000-00-00', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agenda`
--
ALTER TABLE `agenda`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `anggota_badan`
--
ALTER TABLE `anggota_badan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `anggota_panja`
--
ALTER TABLE `anggota_panja`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `anggota_pansus`
--
ALTER TABLE `anggota_pansus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `badan`
--
ALTER TABLE `badan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dasar_hukum`
--
ALTER TABLE `dasar_hukum`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `detail_jaldis`
--
ALTER TABLE `detail_jaldis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hasil_jaldis`
--
ALTER TABLE `hasil_jaldis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hasil_rapat`
--
ALTER TABLE `hasil_rapat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jaldis`
--
ALTER TABLE `jaldis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori_keperluan`
--
ALTER TABLE `kategori_keperluan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `keterangan_jaldis`
--
ALTER TABLE `keterangan_jaldis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kode_rekening`
--
ALTER TABLE `kode_rekening`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `komisi`
--
ALTER TABLE `komisi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `log_activity`
--
ALTER TABLE `log_activity`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nomor_surat`
--
ALTER TABLE `nomor_surat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `panja`
--
ALTER TABLE `panja`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pansus`
--
ALTER TABLE `pansus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `peserta_rapat`
--
ALTER TABLE `peserta_rapat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pimpinan`
--
ALTER TABLE `pimpinan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rapat`
--
ALTER TABLE `rapat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skpd`
--
ALTER TABLE `skpd`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `surat_cetak`
--
ALTER TABLE `surat_cetak`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblpartai`
--
ALTER TABLE `tblpartai`
  ADD PRIMARY KEY (`id_partai`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agenda`
--
ALTER TABLE `agenda`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `akun`
--
ALTER TABLE `akun`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;
--
-- AUTO_INCREMENT for table `anggota`
--
ALTER TABLE `anggota`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;
--
-- AUTO_INCREMENT for table `anggota_badan`
--
ALTER TABLE `anggota_badan`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=129;
--
-- AUTO_INCREMENT for table `anggota_panja`
--
ALTER TABLE `anggota_panja`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;
--
-- AUTO_INCREMENT for table `anggota_pansus`
--
ALTER TABLE `anggota_pansus`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;
--
-- AUTO_INCREMENT for table `badan`
--
ALTER TABLE `badan`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `dasar_hukum`
--
ALTER TABLE `dasar_hukum`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;
--
-- AUTO_INCREMENT for table `detail_jaldis`
--
ALTER TABLE `detail_jaldis`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=996;
--
-- AUTO_INCREMENT for table `hasil_jaldis`
--
ALTER TABLE `hasil_jaldis`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
--
-- AUTO_INCREMENT for table `hasil_rapat`
--
ALTER TABLE `hasil_rapat`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `jaldis`
--
ALTER TABLE `jaldis`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;
--
-- AUTO_INCREMENT for table `kategori_keperluan`
--
ALTER TABLE `kategori_keperluan`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `keterangan_jaldis`
--
ALTER TABLE `keterangan_jaldis`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `kode_rekening`
--
ALTER TABLE `kode_rekening`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `komisi`
--
ALTER TABLE `komisi`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `log_activity`
--
ALTER TABLE `log_activity`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=244;
--
-- AUTO_INCREMENT for table `nomor_surat`
--
ALTER TABLE `nomor_surat`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `panja`
--
ALTER TABLE `panja`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `pansus`
--
ALTER TABLE `pansus`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `peserta_rapat`
--
ALTER TABLE `peserta_rapat`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=349;
--
-- AUTO_INCREMENT for table `pimpinan`
--
ALTER TABLE `pimpinan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `rapat`
--
ALTER TABLE `rapat`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `skpd`
--
ALTER TABLE `skpd`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `surat_cetak`
--
ALTER TABLE `surat_cetak`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=837;
--
-- AUTO_INCREMENT for table `tblpartai`
--
ALTER TABLE `tblpartai`
  MODIFY `id_partai` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
