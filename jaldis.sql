-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 26 Sep 2019 pada 22.41
-- Versi server: 5.7.27
-- Versi PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dprdsetw_sindangjaring`
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
  `waktu` datetime NOT NULL,
  `tempat` varchar(200) NOT NULL,
  `acara` varchar(300) NOT NULL,
  `materi` varchar(1000) NOT NULL,
  `peserta` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `agenda`
--

INSERT INTO `agenda` (`id`, `kode_agenda`, `tanggal`, `jam`, `waktu`, `tempat`, `acara`, `materi`, `peserta`) VALUES
(1, 'A-00001', '2018-05-30', '10:00:00', '2018-05-30 10:00:00', 'R. Rapat Paripurna DPRD', 'Menerima Kunjungan Kerja', 'DPRD Kota Bandung membaha sterkait Raperda tentang Bangunan Gedung<br>DPRD Kab. Banjar membahas terkait Investasi dan Pengembangan Pariwisata untuk Peningkatan PAD', 'Pimpinan DPRD, Anggota Komisi B, Anggota Komisi D, Anggota BPP, OPD'),
(2, 'A-00002', '2018-06-05', '10:00:00', '2018-06-05 10:00:00', 'R. Rapat Paripurna DPRD', 'Menerima Kunjungan Kerja', 'DPRD Kota Bekasi membahas terkait Pembangunan, Pengelolaan Air Minum dan Pertanian<br>DPRD Kabupaten Organ Komering Ulu membahas terkait Keberadaan Anak Jalanan dan Pengemis dalam kaitannya dengan Perkembangan Perkotaan', 'Pimpinan DPRD, Anggota Komisi C, Anggota Komisi D, OPD'),
(3, 'A-00003', '2018-06-07', '15:00:00', '2018-06-07 15:00:00', 'Studio TVku', 'Dialog Interaktif', 'Kesiapan Jalur Mudik Lebaran di Kota Semarang Tahun 2018', 'Ketua DPRD, Kepala Dishub, Pakar Transportasi'),
(5, 'A-00004', '2018-07-11', '10:00:00', '2018-07-11 10:00:00', 'Ruang Serbaguna 2', 'Menerima Kunjungan Kerja', 'Membahas Penyusunan Tata Tertib DPRD dan KUA PPAS', 'DPRD Kabupaten Muaro Jambi '),
(6, 'A-00005', '2018-07-11', '10:00:00', '2018-07-11 10:00:00', 'Ruang Serbaguna 2 DPRD Kota Semarang', 'Menerima Kunjungan Kerja  DPRD Kab. Jombang', 'Implementasi, Target Perda tentang Kawasan Tanpa Rokok, Fungsi Pengawasan DPRD terhadap Perda Kawasan Tanpa Rokok, dan Dampak Pelaksanaan Perda tentang Asap Rokok', 'Anggota Banggar, Anggota Komisi D, Anggota BPP, OPD'),
(7, 'A-00006', '2018-07-13', '10:00:00', '2018-07-13 10:00:00', 'R.Rapat Paripurna DPRD', 'Menerima Kunjungan kerja DPRD Kab. Malang', 'Membahas terkait Pengembangan Investasi', 'Pimpinan DPRD, Anggota Komisi A, Anggota Komisi B, OPD'),
(8, 'A-00007', '2018-07-13', '10:00:00', '2018-07-13 10:00:00', 'R.Rapat Paripurna DPRD', 'Menerima Kunjungan kerja DPRD Kab. Jember ', 'Membahas terkait Be Smart City Dan System Penerimaan Peserta Didik Tingkat SD dan SMP', 'Pimpinan DPRD, Anggota Komisi A, Anggota Komisi B, OPD'),
(9, 'A-00008', '2018-07-13', '10:00:00', '2018-07-13 10:00:00', 'R.Rapat Paripurna ', 'Menerima Kunjungan kerja DPRD DPRD Kab. Sidoarjo ', 'Membahas terkait Pendapatan pajak dan Retribusi Daerah serta pendapatan lain', 'Pimpinan DPRD, Anggota Komisi A, Anggota Komisi B, OPD'),
(10, 'A-00009', '2018-07-25', '09:00:00', '2018-07-25 09:00:00', 'Studio TVku', 'Dialog Interaktif ', 'Dialog Interaktif Bersama DPRD Kota Semarang yang disiarkan melalui media Electronik ', 'Umum'),
(11, 'A-00010', '2018-08-02', '10:00:00', '2018-08-02 10:00:00', 'Ruang Serbaguna 2 DPRD Kota Semarang', 'Menerima Kunjungan Kerja  DPRD Kab. Pasuruan', 'Realisasi semester Pertama APBD th 2018', 'Anggota Komisi D, Anggota BPP, OPD'),
(12, 'A-00011', '2018-08-02', '22:00:00', '2018-08-02 22:00:00', 'Ruang Serbaguna 2 DPRD Kota Semarang', 'Menerima Kunjungan Kerja  DPRD Kab. Blitar membahas terkait Penyusunan Tata Tertib', 'Penyusunan Tata Tertib', 'Anggota Komisi D, Anggota BPP, OPD'),
(13, 'A-00012', '2018-08-03', '10:00:00', '2018-08-03 10:00:00', 'Ruang Serbaguna 2 DPRD Kota Semarang', 'Menerima Kunjungan kerja DPRD Kota Batu', 'Membahas terkait Penyusunan Tata Tertib DPRD', 'Pimpinan DPRD, Anggota BPP'),
(14, 'A-00013', '2018-08-03', '14:00:00', '2018-08-03 14:00:00', 'Ruang Rapat Paripurna  DPRD Kota Semarang', 'Rapat Paripurna', '1. Pembicaraan Tk.II Penetapan Keputusan DPRD terhadap, 2. Permohonan Persetujuan MSP Sister City Semarang-Brisbane, 3. Rancangan TPP TA 2019', 'Pimpinan DPRD,  Anggota DPRD, OPD'),
(15, 'A-00014', '2018-08-03', '14:00:00', '2018-08-03 14:00:00', 'Ruang Rapat Paripurna  DPRD Kota Semarang', 'Penandatanganan Nota Kesepakatan', 'Penadatanganan Nota Kesepakatan antara Walikota Semarang dengan DPRD Kota Semarang tentang KUA TA.2019 dan PPAS TA.2019', 'Anggota DPRD'),
(16, 'A-00015', '2018-07-31', '10:00:00', '2018-07-31 10:00:00', 'Ruang Rapat Paripurna  DPRD Kota Semarang', 'Rapat Badan Anggaran', 'Sinkronisasi hasil pembahasan Rancangan KUA dan PPAS serta TPP TA.2019', 'Agggota Banggar, OPD'),
(17, 'A-00016', '2018-07-30', '09:00:00', '2018-07-30 09:00:00', 'Ruang Serbaguna 2 DPRD Kota Semarang', 'RAPAT BPP tentang FGD Kajian ', '<ul><li>Optimalisasi Peran DPRD dalam Pembangunan Infrastruktur</li><li>Optimalisasi Peran Perusahaan untuk ikut Penanganan Kemiskinan Masyarakat Perkotaan</li></ul>', 'Anggota BPP, OPD, Pihak Ketiga'),
(18, 'A-00017', '2018-07-30', '10:00:00', '2018-07-30 10:00:00', 'Ruang Rapat Komis a', 'Rapat Komisi A DPRD', 'Membahas kajian tentang Sistem Akuntabilitas Kinerja Istansi Pemerintah di Kota Semarang', 'Anggota Komisi A, OPD, Tim Ahli DPRD, Pihak Ketiga'),
(19, 'A-00018', '2018-07-30', '22:00:00', '2018-07-30 22:00:00', 'Ruang Rapat Komisi D', 'Rapat Komisi D', 'FGD Komisi D DPRD Kota Semarang dengan Pihak Ketiga selaku Penyusun Kajian tentang Penanganan Anak Autis dan Disabilitas', 'Anggota Komisi D, OPD, Pihak Ketiga'),
(20, 'A-00019', '2018-07-30', '09:03:00', '2018-07-30 09:03:00', 'Ruang Rapat Komisi B', 'Rapat Komisi B ', 'Membahas rispoda tentang potensi pendapatan BBNKB', 'Anggota Komisi B, OPD, Tim Ahli DPRD, Pihak Ketiga'),
(21, 'A-00020', '2018-07-30', '00:00:00', '2018-07-30 00:00:00', 'Ruang Rapat Komisi B', 'Rapat Komisi B', 'Membahas kajian tentang sentralisasi PKL, - Membahas rispoda tentang potensi pendapatan tera ulang kemetrologian ', 'Anggota Komisi B, OPD,Tim Ahli DPRD, Pihak Ketiga'),
(22, 'A-00021', '2018-07-27', '19:00:00', '2018-07-27 19:00:00', 'Ruang Rapat Paripurna  DPRD Kota Semarang', 'Rapat Paripurna ', 'Pembicaraan Tk. II Penetapan Keputusan DPRD atas Raperda tentang Pertanggungjawaban Pelaksanaan APBD Kota Semarangb TA.2017', 'Anggota DPRD, OPD'),
(23, 'A-00022', '2018-08-09', '10:00:00', '2018-08-09 10:00:00', 'Ruang Serbaguna 2 DPRD Kota Semarang', 'Menerima Kunjungan kerja DPRD Kab. Kulon Progo', ' Terkait Cadangan Pangan, Pajak, Retribusi Daerah dan Kebijakan Penataan Ruang terkait Pengurangan Kesenjangan Wilayah', 'Pimpinan DPRD, Anggota Komisi B, C , OPD'),
(24, 'A-00023', '2018-08-09', '10:00:00', '2018-08-09 10:00:00', 'Ruang Serbaguna 2 DPRD Kota Semarang', 'Menerima Kunjungan kerja  DPRD Kab. Langkat ', 'Terkait tugas pokok pimpinan', 'Pimpinan DPRD, Anggota Komisi B, C , OPD'),
(25, 'A-00024', '2018-08-10', '10:00:00', '2018-08-10 10:00:00', 'Ruang Serbaguna 2 DPRD Kota Semarang', 'Menerima Kunjungan Kerja  Kabupaten Batang', 'Pelaksanaan Tugas dan Kewenangan Badan Anggaran', 'Pimpinan DPRD,Anggota Banggar,  OPD'),
(26, 'A-00025', '2018-08-13', '10:00:00', '2018-08-13 10:00:00', 'Ruang Rapat Komisi B', '1. Rapat kerja membahas kekosongan jabatan direksi PDAM Kota Semarang  2. Rapat kerja membahas Kelanjutan Pembangunan Proyek SPAM Semarang Barat', 'Membahas kekosongan jabatan direksi PDAM Kota Semarang dan membahas Kelanjutan Pembangunan Proyek SPAM Semarang Barat', 'Anggota Komisi B, OPD'),
(27, 'A-00026', '2018-08-13', '10:00:00', '2018-08-13 10:00:00', 'Ruang Serbaguna 2 DPRD Kota Semarang', 'Menerima Kunjungan kerja DPRD Kota Madiun', 'Pembahasan Raperda Perubahan APBD Tahun 2018', 'Pimpinan DPRD, Anggota Banggar, OPD'),
(28, 'A-00027', '2018-08-13', '10:00:00', '2018-08-13 10:00:00', 'Ruang Serbaguna 2 DPRD Kota Semarang', 'Rapat Badan Musyawarah', 'Membahas Surat Komisi C Perihal Rencana Kegiatan Komisi C DPRD Kota Semarang', 'Anggota Badan Musyawarah, Ketua Komisi C'),
(29, 'A-00028', '2018-08-13', '15:00:00', '2018-08-13 15:00:00', 'Stadion Tri Lomba Juangsari', 'Dialog interaktif', 'Upaya Pemerintah dalam membentuk Generasi muda yang kreatif dan tangguh serta pola Pembinaan calon atlet agar berlevel Internasional', 'H.Supriyadi,S.Sos, MA ( Ketua DPRD), Gurun Risyaf Moko, SH, SE,MM ( Dispora), Yolanda ( Ketua Komunitas cah Semarang Hebat )'),
(30, 'A-00029', '2018-08-16', '08:00:00', '2018-08-16 08:00:00', 'Ruang Rapat Pimpinan DPRD', 'Pemberitahuan Pelaksanakan Pengukuran Pakaian Dinas Anggota DPRD', 'Pelaksanakan Pengukuran Pakaian Dinas Anggota DPRD', 'Anggota DPRD'),
(31, 'A-00030', '2018-08-17', '09:00:00', '2018-08-17 09:00:00', 'Lt 2 Gd DPRD kota Semarang ( Selasar Ruang BK)', 'Pengambilan Foto Pimpinan dan Anggota DPRD Kota Semarang', 'Pengambilan Foto Pimpinan dan Anggota DPRD Kota Semarang (Pakaian : PSL Berpeci)', 'Anggota DPRD'),
(32, 'A-00031', '2018-08-16', '09:00:00', '2018-08-16 09:00:00', 'Lt 2 Gd DPRD kota Semarang ( Selasar Ruang BK)', 'Pengambilan Foto Pimpinan dan Anggota DPRD Kota Semarang', 'Pengambilan Foto Pimpinan dan Anggota DPRD Kota Semarang (Pakaian : PSL Berpeci)', 'Anggota DPRD'),
(33, 'A-00031', '2018-08-16', '09:00:00', '2018-08-16 09:00:00', 'Ruang Rapat Paripurna DPRD', 'Rapat Paripurna Istimewa ', 'Mendengarkan Pidato Kenegaraan Presiden RI dalam rangka HUT ke-73 Kemerdekaan RI Tahun 2018 (Pakaian : PSL)', 'FORKOMPIMDA,Mantan Walikota dan DPRD, Pimpinan dan Anggota DPRD, OPD, Organisasi Wanita, Organisasi Sesepuh, Ormas dan Parpol, PTN/PTS, Tokoh Agama, Juara teladan, Organisasi Profesi, Media cetak'),
(34, 'A-00033', '2018-08-16', '13:00:00', '2018-08-16 13:00:00', 'Ruang Rapat Paripurna DPRD', 'Rapat Paripurna', 'Penutupan Masa Sidang II Tahun 2018 DPRD Kota Semarang (Pakaian : PSH)', 'Pimpinan dan Anggota DPRD, OPD'),
(35, 'A-00034', '2018-08-16', '23:59:00', '2018-08-16 23:59:00', 'Taman Makam Pahlawab Nasional (TMPN) Giri Tunggal Semarang', 'Apel Kehormatan dan Renungan Suci', 'Apel Kehormatan dan Renungan Suci', 'Pimpinan dan Anggota DPRD'),
(36, 'A-00035', '2018-08-21', '09:00:00', '2018-08-21 09:00:00', 'Ruang Rapat Paripurna  DPRD Kota Semarang', 'Rapat Paripurna', 'Pembukaan Masa Sidang III Tahun 2018 DPRD Kota Semarang<br>Pakaian : PSH', 'Anggota DPRD, OPD'),
(37, 'A-00036', '2018-08-21', '10:30:00', '2018-08-21 10:30:00', 'Ruang Rapat Paripurna  DPRD Kota Semarang', 'Rapat Badan Anggaran', 'Membahas Laporan Realisasi Semester I APBD TA.2018 dan Prognosis untuk enam bulan berikutnya', 'Anggota Banggar, TAPD'),
(38, 'A-00037', '2018-08-21', '11:00:00', '2018-08-21 11:00:00', 'Ruang Serbaguna 2 DPRD Kota Semarang', 'Pansus RPJ APBD', 'Pembahasan Evaluasi Raperda dan Raperwal tentang Pertanggungjawaban Pelaksanaan APBD Kota Semarang TA.2017', 'Anggota Pansus, TAPD'),
(39, 'A-00038', '2018-08-27', '12:00:00', '2018-08-27 12:00:00', 'R. Rapat Paripurna DPRD ', 'Rapat Badan Anggaran', 'Membahas Rancangan KUA dan PPAS Perubahan APBD TA.2018', 'Anggota Banggar, OPD'),
(40, 'A-00039', '2018-08-27', '10:00:00', '2018-08-27 10:00:00', 'R. Rapat Komisi B DPRD', 'Komisi B', 'Membahas rencana relokasi PKL Barito Karangtempel dan dilanjutkan kunjungan lapangan', 'Anggota Komisi B, OPD, Perwakilan PKL Barito Karangtempel'),
(41, 'A-00040', '2018-08-27', '10:00:00', '2018-08-27 10:00:00', 'R. Rapat Komisi C DPRD', 'Komisi C', 'FGD tentang :<br>- Pengelolaan Daerah Aliran Sungai<br>- Implementasi Sistem Pengelolaan Persampahan Berbasis Masyarakat<br>- Pengendalian Pemanfaatan ruang pada kawasan Industri', 'Anggota Komisi C, OPD, Tenaga Ahli DPRD'),
(42, 'A-00041', '2018-08-27', '11:00:00', '2018-08-27 11:00:00', 'R.Rapat Komisi C DPRD', 'Komisi C', ' FGD tentang Pendekatan Teknologi untuk Penanggulangan Banjir di Kota Semarang', 'Anggota Komisi C, OPD, Tenaga Ahli DPRD'),
(43, 'A-00042', '2018-08-24', '10:00:00', '2018-08-24 10:00:00', 'R. Serbaguna 2 DPRD', 'Menerima Kunjungan kerja DPRD Kota Madiun', 'Membahas terkait Pemerintahan, Hukum, SDM, Pendidikan dan Sosial Budaya', 'Pimpinan DPRD, Anggota Komisi D DPRD, OPD'),
(44, 'A-00043', '2018-08-28', '09:00:00', '2018-08-28 09:00:00', 'Ruang Rapat Paripurna  DPRD Kota Semarang', 'Rapat Badan Anggaran', 'Membahas Rancangan KUA dan PPAS Perubahan APBD TA.2018', 'Anggota Banggar, OPD'),
(45, 'A-00044', '2018-08-28', '10:00:00', '2018-08-28 10:00:00', 'Ruang Serbaguna 2 DPRD Kota Semarang', 'PANSUS PEMBENTUKAN BPR SYARIAH', 'Pembahasan materi Raperda', 'Anggota Pansus, OPD, Tim Ahli DPRD'),
(46, 'A-00045', '2018-08-28', '10:00:00', '2018-08-28 10:00:00', 'Ruang Serbaguna 2 DPRD Kota Semarang', 'Menerima Kunjungan kerja DPRD Kota Tegal ', 'membahas terkait Mekanisme Penghapusan Aset Milik Pemerintah Daerah', 'Pimpinan DPRD, Anggota Komisi B, Anggota BPP, Anggota BK, OPD'),
(47, 'A-00046', '2018-08-28', '10:00:00', '2018-08-28 10:00:00', 'Ruang Serbaguna 2 DPRD Kota Semarang', 'Menerima Kunjungan Kerja  DPRD Kab. Blitar', 'Pedoman penyusunan Tata Tertib', 'Pimpinan DPRD, Angota Komisi B, Anggota BPP, Anggota BK, OPD'),
(48, 'A-00047', '2018-08-29', '10:00:00', '2018-08-29 10:00:00', 'Ruang Serbaguna 2 DPRD Kota Semarang', 'Menerima Kunjungan kerja DPRD Kab.Nganjuk', 'Membahas terkait Pelaksanaan APBD Tahun 2019', 'Pimpinan DPRD, Anggota Banggar, OPD'),
(49, 'A-00048', '2018-08-30', '10:00:00', '2018-08-30 10:00:00', 'Ruang Rapat Komisi C', 'Rapat Komisi C DPRD', 'FGD tentang Pengelolaan Daerah Aliran Sungai  di Kota Semarang Yang ', 'Anggota Komisi C, OPD'),
(50, 'A-00049', '2018-08-31', '13:00:00', '2018-08-31 13:00:00', 'Ruang Rapat Paripurna  DPRD Kota Semarang', 'Rapat Paripurna', 'Pembicaraan Tk.Imembhas Rancangan Peratuaran DPRD Kota Semarang tentang Perubahan Kedua atas Peraturan DPRD Kota Semarang Nomor 1 Tahun 2016 tentang Tata Tertib DPRD Kota Semarang, meliputi :<br>a. Penjelasan Pengusul ( BPP)<br>b. Pendapat Anggota selain pengusul<br>c. Jawaban Pengusul terhadap Pendapat A', 'Anggota DPRD, OPD'),
(51, 'A-00050', '2018-08-31', '10:00:00', '2018-08-31 10:00:00', 'Ruang Serbaguna 2 DPRD Kota Semarang', 'Menerima Kunjungan kerja DPRD  Kab. Karawang', 'Membahas terkait Pelaksanaan Pembahasan Perubahan KUA dan PPAS TA.2018', 'Pimpinan DPRD, Anggota Banggar, OPD'),
(52, 'A-00051', '2018-09-03', '09:00:00', '2018-09-03 09:00:00', 'Ruang Serbaguna 2 DPRD Kota Semarang', 'Rapat Badan Pembentukan Perda ', 'Harmonisasi NA 3 Raperda<br>- Raperda tentang Bantuan Keuangan Kepada Partai Politik<br>- Raperda tentang PDAM Tirta Noedal <br>- Raperdra tentang Pembentukan Dana Cadangan untuk Pemilihan Walikota dan Wakil Walikota Tahun 2020', 'Anggota BPP, OPD'),
(53, 'A-00052', '2018-09-03', '10:00:00', '2018-09-03 10:00:00', 'Ruang Rapat Komis A', 'Rapat Komisi A DPRD', 'Membahas Evaluasi Kinerja Inspektorat Kota Semarang', 'Anggota Komisi A, OPD'),
(54, 'A-00053', '2018-09-03', '10:00:00', '2018-09-03 10:00:00', 'Ruang Rapat Komisi C', 'Rapat Komisi C DPRD', ' FGD tentang Implementasi Sistem Pengelolaan Persampahan Berbasis Masyarakat', 'Anggota Komisi C, Tenaga Ahli DPRD'),
(55, 'A-00054', '2018-09-05', '10:00:00', '2018-09-05 10:00:00', 'Ruang Serbaguna 2 DPRD Kota Semarang', 'Menerima Kunjungan kerja DPRD Kab.Kulon Progo', 'Pembahasan APBD Tahun 2018<br>', 'Pimpinan DPRD, Anggota Banggar, OPD'),
(56, 'A-00055', '2018-09-05', '10:00:00', '2018-09-05 10:00:00', 'Ruang Serbaguna 2 DPRD Kota Semarang', 'Pansus Raperda tentang Penyelenggaraan Keolahragaan', 'Membahas Materi Raperda tentang Penyelenggaraan Keolahragaan', 'Anggota Pansus, Kanwil kemenkumham,  OPD, '),
(57, 'A-00056', '2018-09-05', '10:00:00', '2018-09-05 10:00:00', 'Ruang Rapat Badan Kehormatan', 'Rapat Badan Kehormatan', 'Membahas Surat Sekretariat DPRD tentang Pelaksanaan reses di Luar Jadwal Banmus DPRD Kota Semarang', 'Anggota BK, Sekretaris DPRD'),
(58, 'A-00057', '2018-09-06', '10:00:00', '2018-09-06 10:00:00', 'Ruang Rapat Paripurna  DPRD Kota Semarang', 'Menerima Kunjungan Kerja DPRD Kab.Langkat', ' Membahas terkait fungsi Pengawasan DPRD terhadap Penerimaan PAD di Bidang Pajak dan Retribusi Daerah;', 'Pimpinan DPRD, Anggota Komisi B, C dan D, OPD'),
(59, 'A-00058', '2018-09-06', '10:00:00', '2018-09-06 10:00:00', 'Ruang Rapat Paripurna  DPRD Kota Semarang', 'Menerima Kunjungan Kerja  DPRD Kota Solok ', 'Membahas terkait mekanisme Pelaksanaaan PBBP2, BPHTB dan Retribusi Pemakaian Kekayaan Daerah', 'Pimpinan DPRD, Anggota Komisi B, C dan D, OPD'),
(60, 'A-00059', '2018-09-05', '10:00:00', '2018-09-05 10:00:00', 'Ruang Rapat Paripurna  DPRD Kota Semarang', 'Menerima Kunjungan Kerja  DPRD Kab Sampang ', 'Membahas terkait kinerja , tugas dan fungdi Komisi II dan III DPRD;<br>', 'Pimpinan DPRD, Anggota Komisi B, C dan D, OPD'),
(61, 'A-00060', '2018-09-06', '10:00:00', '2018-09-06 10:00:00', 'Studio Kompas TV Jawa Tengah', 'Dialog interaktif', 'Mengantisipasi Perubahan Iklim Global Warming di Kota Semarang', 'H. AGUNG BUDI MARGONO, ST. MT ( Wakil Ketua DPRD), Kepala Bappeda, Rukuh Setiadi, ST.MEM.PhD ( Dosen Planologi UNDIP)'),
(62, 'A-00061', '2018-09-07', '08:30:00', '2018-09-07 08:30:00', 'Ruang Serbaguna 2 DPRD Kota Semarang', 'Pansus BPR Syariah', 'Konsultasi ke Biro Perekonomian Setda Provinsi Jawa Tengah', 'Anggota Pansus, OPD'),
(63, 'A-00062', '2018-09-07', '09:30:00', '2018-09-07 09:30:00', 'Ruang Rapat Komisi B', 'Rapat Komisi B DPRD', 'Membahas rencana relokasi PKL Barito Mlatiharjo', 'Anggota Komisi B,Perwakilan PKL Barito Mlatiharjo'),
(64, 'A-00063', '2018-09-07', '10:00:00', '2018-09-07 10:00:00', 'Ruang Serbaguna 2 DPRD Kota Semarang', 'Pansus Raperda tentang Penyelenggaraan Keolahragaan', 'Membahas Materi Raperda ', 'Anggota Pansus, Kanwil kemenkumham,  OPD'),
(65, 'A-00064', '2018-09-07', '10:00:00', '2018-09-07 10:00:00', 'Ruang Serbaguna 2 DPRD Kota Semarang', 'Menerima Kunjungan Kerja  DPRD Kab Tabanan', 'Menerima Kunjungan kerja<br>Jam : 10.00 WIB<br>Tempat : R. Serbaguna 2 DPRD<br>Acara : Menerima Kunjungan kerja :<br>-  membahas terkait Tata Tertib dan Penyusunan Rancangan APBD Tahun 2019;', 'Anggota Banggar, Anggota Komisi C, Anggota Komisi D, OPD'),
(66, 'A-00065', '2018-09-07', '10:00:00', '2018-09-07 10:00:00', 'Ruang Serbaguna 2 DPRD Kota Semarang', 'Menerima Kunjungan Kerja  DPRD Kota Cimahi', 'Membahas terkait Raperda tentang Jasa Kontruksi', 'Anggota Banggar, Anggota Komisi C, Anggota Komisi D, OPD'),
(67, 'A-00066', '2018-09-07', '10:00:00', '2018-09-07 10:00:00', 'Ruang Rapat Pimpinan ', 'Rapat Pimpinan ', 'Membahas Perubahan Peraturan DPRD tentang Tata Tertib DPRD Kota Semarang', '- Pimpinan DPRD,  <br>- Pimpinan Banmus, <br>- Pimpinan Banggar,<br>- Pimpinan BK, <br>- Pimpinan BPP, <br>- Pimpinan Komisi- komisi DPRD,<br>- Pimpinan Fraksi - Fraksi  DPRD'),
(68, 'A-00067', '2018-09-10', '10:00:00', '2018-09-10 10:00:00', 'Ruang Rapat Paripurna DPRD ', 'Menerima Kunjungan Sekolah SDIT Harapan Bunda Kota Semarang', 'Siswa Mengetahui Tugas dan wewenang DPRD, Memahami Hak-hak Anggota DPRD dan Pembagian Komisi, Mengetahui Gambaran Audivisual contoh suasana', 'Pimpinan DPRD, Anggota Komisi D, OPD'),
(69, 'A-00068', '2018-09-12', '09:00:00', '2018-09-12 09:00:00', 'Ruang Rapat Komisi C', 'Rapat Komisi C', 'Membahas Capaian Program / kegiatan OPD Tahun 2018', 'Komisi C , OPD'),
(70, 'A-00069', '2018-09-12', '10:00:00', '2018-09-12 10:00:00', 'Ruang Serbaguna 2 DPRD Kota Semarang', 'Menerima Kunjungan kerja DPRD Kota Jambi', 'Membahas terkait RAPBD Perubahan Tahun 2018', 'Anggota Banggar, OPD'),
(71, 'A-00070', '2018-09-13', '09:00:00', '2018-09-13 09:00:00', 'Ruang Rapat Komisi C', 'Rapat Komisi C DPRD', 'Membahas capaian program/kegiatan OPD Tahun 2018', 'Anggota Komisi C, OPD'),
(72, 'A-00071', '2018-09-13', '10:00:00', '2018-09-13 10:00:00', 'Ruang Rapat Komisi B', 'Ruang Rapat Komisi B', 'Rapat internal dilanjutkan kunjungan lapangan ke lokasi relokasi PKL Barito di MAsjid Agung Jawa Tengah (MAJT) dan Pasar Klitikan Penggaron Kunjungan Lapangan pengecekan pembangunan Pasar Kapling Kedungmundu', 'Anggota Komisi B'),
(73, 'A-00072', '2018-09-13', '10:00:00', '2018-09-13 10:00:00', 'Ruang Serbaguna 2 DPRD Kota Semarang', 'Menerima Kunjungan kerja DPRD Kab. Jombang ', 'Membahas terkait Peran dan Tupoksi Badan Kehormatan ', 'Pimpinan DPRD, Anggota BK'),
(74, 'A-00073', '2018-09-17', '09:00:00', '2018-09-17 09:00:00', 'Ruang Rapat Paripurna DPRD', 'Rapat Badan Anggaran', 'Membahas Raperda Kota Semarang tentang Perubahan APBD Kota Semarang TA.2018', 'Anggota Banggar, OPD'),
(75, 'A-00074', '2018-09-17', '10:00:00', '2018-09-17 10:00:00', 'Lobby Hotel Quest', 'Dialog Interaktif', 'Menjaga Kualitas Air Bersih', 'Bp. Wiwin Subiyono, S ( Wakil Ketua DPRD), Dirut PDAM, Bp Ngargono(LP2K)'),
(76, 'A-00075', '2018-09-18', '09:00:00', '2018-09-18 09:00:00', 'Ruang Rapat Komisi A', 'Rapat Komisi A', 'Membahas Perubahan APBD Kota Semarang TA. 2018', 'Anggota Komisi A, OPD'),
(77, 'A-00076', '2018-09-18', '09:00:00', '2018-09-18 09:00:00', 'Ruang Rapat Komisi B', 'Rapat Komisi B', 'Membahas Perubahan APBD Kota Semarang TA.2018', 'Anggota Komisi B , OPD'),
(78, 'A-00077', '2018-09-18', '09:00:00', '2018-09-18 09:00:00', 'Ruang Rapat Komisi C', 'Rapat Komisi C', 'Membahas Perubahan APBD Kota Semarang  ', ' Anggota Komisi D , OPD'),
(79, 'A-00078', '2018-09-18', '09:00:00', '2018-09-18 09:00:00', 'Ruang Rapat Komisi D', 'Rapat Komisi D', 'Membahas Perubahan APBD Kota Semarang', 'Anggota Komisi D , OPD'),
(80, 'A-00079', '2018-09-18', '14:30:00', '2018-09-18 14:30:00', 'Ruang Rapat Pimpinan DPRD', 'Rapat Badan Anggaran', 'FGD Kajian tentang Serapan Anggaran Pemerintah Kota Semarang', 'Anggota Banggar, OPD, Tim Ahli DPRD'),
(81, 'A-00080', '2018-09-18', '15:00:00', '2018-09-18 15:00:00', 'Ruang Rapat Pimpinan DPRD', 'Rapat Badan Musyawarah', 'FGD Kajian tentang optimalisasi Kinerja Fungsi Pengawasan SPRS Kota Semarang', 'Anggota Banmus, OPD, Tim Ahli DPRD'),
(82, 'A-00081', '2018-09-19', '09:00:00', '2018-09-19 09:00:00', 'Ruang Rapat Komisi D', 'Rapat Komisi D DPRD', 'Membahas Perubahan APBD Kota Semarang TA. 2018', 'Anggota Komisi D, OPD'),
(83, 'A-00082', '2018-09-19', '09:00:00', '2018-09-19 09:00:00', 'Ruang Rapat Komisi C', 'Rapat Komisi C DPRD', 'Membahas Perubahan APBD Kota Semarang TA. 2018', 'Anggota Komisi C, OPD'),
(84, 'A-00083', '2018-09-19', '09:00:00', '2018-09-19 09:00:00', 'Ruang Rapat Komisi B', 'Membahas Perubahan APBD Kota Semarang TA. 2018', 'Membahas Perubahan APBD Kota Semarang TA. 2018', 'Anggota Komisi B, OPD'),
(85, 'A-00084', '2018-09-19', '09:00:00', '2018-09-19 09:00:00', 'Ruang Rapat Komis A', 'Rapat Komisi A DPRD', 'Membahas Perubahan APBD Kota Semarang TA. 2018', 'Anggota Komisi A, OPD'),
(86, 'A-00085', '2018-09-19', '07:00:00', '2018-09-19 07:00:00', 'Ruang Serbaguna 2 DPRD Kota Semarang', 'Rapat Gabungan Komisi B dan Komisi C', 'Membahas Rencana Program Parkir Berlangganan di Kota semarang', 'Anggota Komisi B, Anggota Komisi C, OPD, Kapolda Jawa Tengah, Kapolrestabes Semarang'),
(87, 'A-00086', '2018-09-19', '10:00:00', '2018-09-19 10:00:00', 'Ruang Serbaguna 2 DPRD Kota Semarang', 'Menerima Kunjungan kerja DPRD Kota Surakarta ', 'Membahas terkait Pemerintahan, Kependuddukan dan Catatan Sipil, Perijinan Terpadu dan Kesehatan', 'Pimpinan DPRD, Anggota Komisi A, Komisi D, OPD'),
(88, 'A-00087', '2018-09-20', '09:00:00', '2018-09-20 09:00:00', 'Ruang Rapat Komisi D', 'Rapat Komisi D DPRD', 'Membahas Perubahan APBD Kota Semarang TA. 2018', 'Anggota Komisi D, OPD'),
(89, 'A-00088', '2018-09-20', '09:00:00', '2018-09-20 09:00:00', 'Ruang Rapat Komisi C', 'Rapat Komisi B DPRD', 'Membahas Perubahan APBD Kota Semarang TA. 2018', 'Anggota Komisi C, OPD'),
(90, 'A-00089', '2018-09-20', '09:00:00', '2018-09-20 09:00:00', 'Ruang Rapat Komisi B', 'Rapat Komisi B DPRD', 'Membahas Perubahan APBD Kota Semarang TA. 2018', 'Anggota Komisi B, OPD'),
(91, 'A-00090', '2018-09-20', '09:00:00', '2018-09-20 09:00:00', 'Ruang Rapat Komis A', 'Rapat Komisi A DPRD', 'Membahas Perubahan APBD Kota Semarang TA. 2018', 'Anggota Komisi A, OPD'),
(92, 'A-00091', '2018-09-20', '09:00:00', '2018-09-20 09:00:00', 'Ruang Serbaguna 2 DPRD Kota Semarang', 'Rapat Badan Pembentukan Perda', 'Pembahasan Perubahan Tata Tertib DPRD Kota Semarang', 'Anggota BPP, OPD, Tim Ahli DPRD'),
(93, 'A-00092', '2018-09-20', '10:00:00', '2018-09-20 10:00:00', 'Ruang Serbaguna 2 DPRD Kota Semarang', 'Menerima Kunjungan Kerja  DPRD Kab. Bengkulu Tengah ', 'Membahas terkait Bidang Pengawasan terhadap masyarakat yaitu pengawasan tentang Pendapatan dan Keuangan Pemerintah Daerah', 'Pimpinan DPRD, Angggota Komisi B, Anggota Badan Musyawarah, Anggota BPP, OPD'),
(94, 'A-00093', '2018-09-20', '10:00:00', '2018-09-20 10:00:00', 'Ruang Serbaguna 2 DPRD Kota Semarang', 'Menerima Kunjungan Kerja  DPRD Kab. Bengkayang ', 'Membahas terkait Sinkronisasi Penyusunan Kerja Tahunan dan 5 Tahunan DPRD dan Seluruh rencana kerja alat Kelengkapan DPRD dan Tindak Lanjut  Perda Inisiatif DPRD Yang Sudah disetujui bersama Kepala Daerah', 'Pimpinan DPRD, Angggota Komisi B, Anggota Badan Musyawarah, Anggota BPP, OPD'),
(95, 'A-00094', '2018-09-24', '09:00:00', '2018-09-24 09:00:00', 'Ruang Rapat Paripurna  DPRD Kota Semarang', 'Rapat Paripurna Istimewa', 'Peresmian Pemberhentian dan Peresmian Pengangkatan Pengganti Antar Waktu Anggota DPRD Kota Semarang', 'FORKOMPIMDA, Pimpinan dan Anggota DPRD, OPD<br>Pakaian :PSL'),
(96, 'A-00095', '2018-09-24', '11:00:00', '2018-09-24 11:00:00', 'Ruang Rapat Paripurna  DPRD Kota Semarang', 'Rapat Paripurna', 'a. Penetapan Keputusan DPRD tentang Perubahan Keanggotaan Alat-alat kelengkapan DPRD dari Fraksi PAN<br>b. Pembicaraan Tk.I membahas Permohonan Persetujuan MSP Sister City Semarang – Nanjing, meliputi :<br>- Penjelasan Walikota<br>- Pemandangan umum Anggota DPRD<br>- Jawaban Walikota atas Pemandangan Umum Anggota DPRD<br>c. Pembicaraan Tk,II Penetapan keputusan DPRD tentang Raperda tentang Perubahan APBD Kota Semarang TA.2018', 'Pimpinan dan Anggota DPRD, OPD<br>Pakaian : PSR'),
(97, 'A-00096', '2018-09-25', '10:00:00', '2018-09-25 10:00:00', 'Ruang Serbaguna 2 DPRD Kota Semarang', 'Pansus  Raperda tentang PDAM Tirta Moedal Kota Semarang', 'a.   Menyusun jadwal/mekanisme rapat pembahasan<br>b.   Penyampaian Paparan NA dan draft tentang pendirian Perusahaan Umum PDAM Tirta Moedal Kota Semarang', 'Anggota Pansus, OPD, Kanwil Kemenkumham, Tim Ahli DPRD'),
(98, 'A-00097', '2018-09-25', '09:00:00', '2018-09-25 09:00:00', 'Ruang Serbaguna 3 DPRD Kota Semarang', 'Pansus Pembentukan BPR Syariah', 'Pembahasan materi Raperda Pembentukan BPR Syariah', 'Anggota Pansus, OPD, Kemenkumhan Perwakilan Jawa Tengah, Tim Ahli DPRD'),
(99, 'A-00098', '2018-09-26', '10:00:00', '2018-09-26 10:00:00', 'Ruang Rapat Komisi B', 'Rapat Komisi B DPRD', '- Audiensi dengan paguyuban pedagang pasar ikan hias kenari<br>- Audiensi dengan PKL Meneteri Supeno', 'Anggota Komisi B , OPD, PKL Menteri Supeno, Paguyuban pedagang pasar ikan kenari'),
(100, 'A-00099', '2018-09-26', '10:00:00', '2018-09-26 10:00:00', 'Ruang Rapat Komisi D', 'Rapat Komisi D DPRD', 'FGD Komisi D DPRD dengan Pihak Ketiga tentang Kajian Bantuan Kepada Warga Lansia di Kota Semarang', 'Anggota Komisi D, Tim Penyusun'),
(101, 'A-00100', '2018-09-26', '10:00:00', '2018-09-26 10:00:00', 'Ruang Serbaguna 3 DPRD Kota Semarang', 'Rapat Pansus BPR Syariah', 'Pembahasan materi Raperda Pembentukan BPR Syariah', 'Anggota Pansus, Kanwil Kemenkumham, OPD, Tim Ahli '),
(102, 'A-00101', '2018-09-26', '10:00:00', '2018-09-26 10:00:00', 'Ruang Serbaguna 2 DPRD Kota Semarang', 'Rapat Pansus PDAM Tirta Moedal', 'Pembahasan materi PDAM Tirta Moedal', 'Anggota Pansus, OPD, Kanwill Kemenkumham, Tim Penyusun NA'),
(103, 'A-00102', '2018-09-26', '10:00:00', '2018-09-26 10:00:00', 'Ruang Rapat  Badan Kehormatan DPRD', 'Menerima Kunjungan kerja DPRD Provinsi Jawa Timur', 'Membahas terkait Menegakkan Kode Etik DPRD sebagai bentuk Akuntanbilitas Lembaga Perwakilan kepada Masyarakat', 'Pimpinan DPRD, Anggota BK'),
(104, 'A-00103', '2018-09-27', '10:00:00', '2018-09-27 10:00:00', 'Ruang Serbaguna 2 DPRD Kota Semarang', 'Pansus Penyelenggaraan Keolahragaan', 'Rapat dengar pendapat membahas Materi Raperda tentang Penyelenggaraan Keolahragaan DPRD Kota Semarang', 'Anggota Pansus, Kanwil Kemenkumham, OPD'),
(105, 'A-00104', '2018-09-27', '10:00:00', '2018-09-27 10:00:00', 'Ruang Rapat Paripurna  DPRD Kota Semarang', 'Menerima Kunjungan Kerja  DPRD Kota Tasikmalaya', 'Membahas terkait Peningkatan dan Daya Saing UMKM serta Pentaan PKL', 'Pimpinan DPRD,  Anggota Komisi B, OPD'),
(106, 'A-00105', '2018-09-27', '10:00:00', '2018-09-27 10:00:00', 'Ruang Rapat Paripurna  DPRD Kota Semarang', 'Menerima Kunjungan Kerja  DPRD Kab. Jember', 'Membahas terkait mekanisme Pencairan Dana Opearasional Pimpinan DPRD', 'Pimpinan DPRD,  Anggota Komisi B, OPD'),
(107, 'A-00106', '2018-09-28', '09:00:00', '2018-09-28 09:00:00', 'Ruang Rapat Komisi C', 'Rapat Komisi C DPRD', 'FGD tentang <br>- Kajian tentang Implementasi Sistem Pengelolaan Persampahan berbasis Masyarakat<br>- Kajian tentang Pendekatan Teknologi untuk Penanggulangan Banjir<br>- Kajian tentang Dampak Kawasan Industri', 'Anggota Komis C'),
(108, 'A-00107', '2018-09-28', '09:00:00', '2018-09-28 09:00:00', 'Ruang Rapat Pimpinan ', 'Rapat Pimpinan', ' Membahas Permohonan Persetujuan MSP Sister City Semarang Nanjing', 'Pimpinan DPRD, OPD'),
(109, 'A-00108', '2018-09-28', '09:00:00', '2018-09-28 09:00:00', 'Ruang Serbaguna 3 DPRD Kota Semarang', 'Rapat Pansus Pembentukan Dana Cadangan untuk pemilihan Walikota dan Walikota Th.2020', 'Penyusunan jadwal Pembahasan Raperda', 'Anggota Pansus, OPD'),
(110, 'A-00109', '2018-09-28', '09:00:00', '2018-09-28 09:00:00', 'Ruang Rapat Komisi D', 'Rapat Pansus Raperda tentang Bantuan Keuangan Parpol', 'Rapat internal Pansus Raperda dan mekanisme Penjadwalan Pansus Raperda', 'Anggota Pansus, '),
(111, 'A-00110', '2018-09-28', '09:00:00', '2018-09-28 09:00:00', 'Ruang Serbaguna 2 DPRD Kota Semarang', 'Rapat Pansus Penyelenggaraan Keolahragaan', 'Dengar pendapat membahas materi tentang Penyelenggaraan Keolahragaan', 'Anggota Pansus, Kanwil Kemenkumham,  OPD'),
(112, 'A-00111', '2018-09-28', '10:00:00', '2018-09-28 10:00:00', 'Ruang Rapat Paripurna  DPRD Kota Semarang', 'Menerima Kunjungan kerja DPRD Kota Bekasi', ' Membahas terkait KUA PPAS Perubahan TA 2018 dan Kebijakan Anggaran dalam KUA PPAS Perubahan TA 2018', 'Anggota Banggar, OPD'),
(113, 'A-00112', '2018-10-01', '10:00:00', '2018-10-01 10:00:00', 'Ruang Rapat Komisi A', 'Rapat Komisi A DPRD', 'Rapat internal Komisi A DPRD', 'Anggota Komisi A DPRD'),
(114, 'A-00113', '2018-10-01', '09:00:00', '2018-10-01 09:00:00', 'Ruang Serbaguna 3 DPRD Kota Semarang', 'Pansus Raperda tentang Pembentukan Dana Cadangan untuk Pemilihan Walikota dan Wakil Walikota Semarang Tahun 2020', 'Pembahasan materi Raperda tentang Pembentukan Dana Cadangan untuk Pemilihan Walikota dan Wakil Walikota Semarang Tahun 2020', 'Anggota Pansus, OPD, Kanwil Kemenkumham, Tim Ahli DPRD'),
(115, 'A-00114', '2018-10-01', '09:00:00', '2018-10-01 09:00:00', 'Ruang Serbaguna 2 DPRD Kota Semarang', 'Pansus Raperda tentang Bantuan Keuangan Parpol', 'Penyampaian Paparan NA dan draft Raperda tentang Bantuan Keuangan Parpol', 'Anggota Pansus, OPD, Tim Ahli '),
(116, 'A-00115', '2018-10-02', '09:00:00', '2018-10-02 09:00:00', 'Ruang Rapat Komisi A', 'Rapat Pembentukan Perda', 'Pembahasan materi Perubahan Tata Tertib DPRD Kota Semarang', 'Anggota BPP, Kanwil Kemenkumham, OPD, Tim Ahli DPRD'),
(117, 'A-00116', '2018-10-02', '09:00:00', '2018-10-02 09:00:00', 'Ruang Serbaguna 2 DPRD Kota Semarang', 'Rapat Pansus Pansus Raperda tentang Bantuan Keuangan Parpol', 'Pembahasan materi draft Raperda tentang Bantuan Keuangan Parpol', 'Anggota Pansus, Kanwil Kemenkumham, OPD, Tim Ahli DPRD'),
(118, 'A-00117', '2018-10-03', '09:00:00', '2018-10-03 09:00:00', 'Ruang Rapat Komisi A', 'Rapat Badan Pembentukan Perda', 'Pembahasan materi Perubahan Tata tertib DPRD kota Semarang', 'Anggota BPP, Kanwil Kemenkumham, OPD, Tim Ahli DPR'),
(119, 'A-00118', '2018-10-03', '09:00:00', '2018-10-03 09:00:00', 'Ruang Serbaguna 3 DPRD Kota Semarang', 'Pansus Raperda tentang Pembentukan Dana Cadangan untuk Pemilihan Walikota dan Wakil Walikota Semarang Tahun 2020', 'Pembahasan materi Raperda  tentang Pembentukan Dana Cadangan untuk Pemilihan Walikota dan Wakil Walikota Semarang Tahun 2020', 'Anggota Pansus, OPD, Kanwil Kemenkumham, Tim Ahli DPRD'),
(120, 'A-00119', '2018-10-03', '10:00:00', '2018-10-03 10:00:00', 'Ruang Rapat Paripurna  DPRD Kota Semarang', 'Menerima Kunjungan kerja DPRD Kabupaten Lamongan', 'Pelaksanaan Pokok-Pokok pikiran DPRD berdasarkan Permendagri Nomor 86 Tahun 2017', 'Pimpinan DPRD, Anggota Badan Anggaran, OPD'),
(121, 'A-00120', '2018-09-04', '09:00:00', '2018-09-04 09:00:00', 'Ruang Serbaguna 3 DPRD Kota Semarang', 'Rapat Pansus Pembentukan BPR Syariah', 'Membahas Materi RaperdaPembentukan BPR Syariah', 'Anggota Pansus, Kanwil Kemenkumham, OPD,BUMD,  Tim Ahli'),
(122, 'A-00121', '2018-10-04', '09:00:00', '2018-10-04 09:00:00', 'Ruang Rapat Komisi B', 'Pansus Pendirian Peruda PDAM Tirta Moedal', 'Pembahasan materi Pendirian Peruda PDAM Tirta Moedal', 'Anggota Pansus, Kanwil kemenkumham, OPD, Tim Ahli'),
(123, 'A-00122', '2018-10-04', '10:00:00', '2018-10-04 10:00:00', 'Ruang Serbaguna 2 DPRD Kota Semarang', 'Menerima Kunjungan Kerja  DPRD Kab. Bogor ', 'Membahas terkait konsultasi dalam rangka persiapan pembahasan Laporan kinerja Akhir Masa Jabatan Bupati / Walikota', 'Pimpinan DPRD, Anggota Komisi A, Anggota Banmus, Anggota LKPJ, OPD'),
(124, 'A-00123', '2018-10-04', '10:00:00', '2018-10-04 10:00:00', 'Ruang Serbaguna 2 DPRD Kota Semarang', 'Menerima Kunjungan Kerja  DPRD Kota Palembang ', 'Membaha sterkait efektifitas penjadwalan pembahasan Raperda di DPRD', 'Pimpinan DPRD, Anggota Komisi A, Anggota Banmus, Anggota LKPJ, OPD'),
(125, 'A-00124', '2018-10-05', '09:00:00', '2018-10-05 09:00:00', 'Ruang Rapat Paripurna  DPRD Kota Semarang', 'Menerima Kunjungan Dewan Perwakilan Mahasiswa Universitas  Negeri Semarang', 'Menerima Kunjungan Dewan Perwakilan Mahasiswa Universitas  Negeri Semarang', 'Pimpinan DPRD, Anggota Komisi D'),
(126, 'A-00125', '2018-10-04', '15:00:00', '2018-10-04 15:00:00', 'Ruang Rapat Paripurna  DPRD Kota Semarang', 'R. Rapat Paripurna DPRD', 'Pembicaraan Tk.II  Penetapan Keputusan DPRD tentang Permohonan MSP Sister City Semarang Nanjing', 'Anggota DPRD, OPD <br> Pakaian : PSR'),
(127, 'A-00126', '2018-10-05', '09:00:00', '2018-10-05 09:00:00', 'Ruang Serbaguna 3 DPRD Kota Semarang', 'Pansus Pembentukan Dana Cadangan untuk Pemilihan Walikota dan Wakil Walikota', 'Pembahasan materi Pembentukan Dana Cadangan untuk Pemilihan Walikota dan Wakil Walikota', 'Anggota Pansus, OPD, Kanwil Kemenkumham, Tim Ahli'),
(128, 'A-00127', '2018-10-05', '09:00:00', '2018-10-05 09:00:00', 'Ruang Rapat Komisi B', 'Pansus Pendirian Perumda PDAM Tirta Moedal', 'Pembahasan materi Pendirian Perumda PDAM Tirta Moedal', 'Anggota Pansus, Kanwil kemenkumham, OPD, Tim Ahli'),
(129, 'A-00128', '2018-10-08', '10:00:00', '2018-10-08 10:00:00', 'Ruang Rapat Komisi B', 'Rapat Pansus Pendirian Perumda PDAM Tirta Moedal', 'Pembahasan materi Pendirian Perumda PDAM Tirta Moedal', 'Anggota Pansus, Kanwil kemenkumham, OPD, Tim Ahli'),
(130, 'A-00129', '2018-10-08', '10:00:00', '2018-10-08 10:00:00', 'Ruang Rapat Serbaguna 2', 'Rapat Pansus Penyelenggaraan Keolaragaan', 'Rapat dengar pendapat membahas materi Raperda Penyelenggaraan Keolaragaan', 'Anggota Pansus, OPD'),
(131, 'A-00130', '2018-10-08', '10:00:00', '2018-10-08 10:00:00', 'Ruang Rapat Komisi A', 'Rapat Komisi A', 'Membahas kajian tentang system Akuntabilitas Kinerja Instansi Pemerintah di Kota Semarang', 'Anggota Pansus, OPD'),
(132, 'A-00131', '2018-10-09', '10:00:00', '2018-10-09 10:00:00', 'Ruang Rapat Paripurna DPRD', 'Menerima Kunjungan Kerja DPRD Kota Bekasi ', 'membahas terkait pelaksanaan kode etik Anggota DPRD', 'Pimpinan DPRD, ANggota Banggar, Anggota BK, Anggota Komisi A, OPD'),
(133, 'A-00132', '2018-10-09', '10:00:00', '2018-10-09 10:00:00', 'Ruang Rapat Paripurna DPRD', 'Menerima Kunjungan Kerja DPRD Kab.Nganjuk ', 'membahas terkait pedoman Penyusunan APBD TA.2019', 'Pimpinan DPRD, ANggota Banggar, Anggota BK, Anggota Komisi A, OPD'),
(134, 'A-00133', '2018-10-09', '10:00:00', '2018-10-09 10:00:00', 'Ruang Rapat Paripurna DPRD', 'Menerima Kunjungan Kerja DPRS Kab. Wonogiri ', 'membahas terkait pelaksanaaan tugas dan fungsi Pimpinan DPRD', 'Pimpinan DPRD, ANggota Banggar, Anggota BK, Anggota Komisi A, OPD'),
(135, 'A-00134', '2018-10-09', '10:00:00', '2018-10-09 10:00:00', 'Ruang Rapat Komisi B', 'Rapat Komisi B', 'Ausiensi lanjutan terkait rencana relokasi pedagang pasar ikan hias kenari', 'Anggota Komisi B, OPD, Dirut PT.Brantas Abipraya, Paguyuban pedagang pasar ikan hias kenari'),
(136, 'A-00135', '2018-10-10', '10:00:00', '2018-10-10 10:00:00', 'Ruang Serbaguna 2 DPRD Kota Semarang', 'Menerima Kunjungan Kerja  DPRD Kab Jombang ', 'membahas terkait Pencegahan dan Penanggulangan HIV/ AIDS;', 'Pimpinan DPRD, Anggota Komisi D, OPD'),
(137, 'A-00136', '2018-10-10', '10:00:00', '2018-10-10 10:00:00', 'Ruang Serbaguna 2 DPRD Kota Semarang', 'Menerima Kunjungan Kerja  DPRD Kabupaten Aceh Timur Propinsi Jawa Timur ', 'membahas terkait Sistem Pengelolaan Kearsipan Daerah dan Perpustakaan', 'Pimpinan DPRD, Anggota Komisi D, OPD'),
(138, 'A-00137', '2018-10-11', '09:00:00', '2018-10-11 09:00:00', 'Ruang Serbaguna 3 DPRD Kota Semarang', 'Pansus Pembentukan Dana Cadangan untukPemilihan Walikota dan Wakil Walikota Tahun 2020', 'Pembahasan Materi Raperda ( Paparan dari Panitia Pengawas Pemilihan Umum Kota Semarang)', 'Anggota Pansus, Kepala Kanwil Kemenkumham, OPD, Tim Ahli'),
(139, 'A-00138', '2018-10-11', '09:00:00', '2018-10-11 09:00:00', 'Ruang Rapat Paripurna  DPRD Kota Semarang', 'Menerima Kunjungan Kerja  Pansus DPRD Kota Surabaya ', 'membahas terkait Tata Tertib DPRD berdasarkan Peraturan Pemerintah Nomor 12 Tahun 2018', 'Pimpinan DPRD, Anggota Banggar, Anggota Komisi C, OPD'),
(140, 'A-00139', '2018-10-11', '09:00:00', '2018-10-11 09:00:00', 'Ruang Rapat Paripurna  DPRD Kota Semarang', 'Menerima Kunjungan Kerja  DPRD Kab Jombang Komisi B DPRD Kabupaten Jembrana ', 'membahas terkait Perlindungan Komoditas Hasil Pertanian dalam rangka Peningkatan Daya Saing', 'Pimpinan DPRD, Anggota Banggar, Anggota Komisi C, OPD'),
(141, 'A-00140', '2018-10-11', '09:00:00', '2018-10-11 09:00:00', 'Ruang Rapat Paripurna  DPRD Kota Semarang', 'Menerima Kunjungan Kerja Badan Anggaran DPRD Kabupaten Pamekasan ', 'membahas terkait Upaya meningkatankan Pendapatan Asli Daerah ( Sektor Pajak Hotel dan restoran)', 'Pimpinan DPRD, Anggota Banggar, Anggota Komisi C, OPD'),
(142, 'A-00141', '2018-10-11', '09:00:00', '2018-10-11 09:00:00', 'Ruang Rapat Paripurna  DPRD Kota Semarang', 'Menerima Kunjungan Kerja  Wakil Ketua DPRD Kabupaten Langkat ', 'membahas terkait tugas pokok dan fungsi Pimpinan DPRD', 'Pimpinan DPRD, Anggota Banggar, Anggota Komisi C, OPD'),
(143, 'A-00142', '2018-10-11', '10:00:00', '2018-10-11 10:00:00', 'Ruang Serbaguna 2 DPRD Kota Semarang', 'Pansus Penyelenggaraan Keolahragaan', 'Rapat dengar pendapat membahas materi Raperda', 'Anggota Pansus, Kanwil Kemenkumham, OPD,Tim Ahli'),
(144, 'A-00143', '2018-10-11', '10:00:00', '2018-10-11 10:00:00', 'Ruang Rapat Komisi B', 'Pansus Pendirian Perumda PDAM Tirta Moedal', 'Pembahasan materi Raperda Pendirian Perumda PDAM Tirta Moedal', 'Anggota Pansus, OPD, Kanwil Kemenkumham, Tim Ahli DPRD'),
(145, 'A-00144', '2018-10-11', '11:00:00', '2018-10-11 11:00:00', 'Ruang Rapat Paripurna  DPRD Kota Semarang', 'Rapat Paripurna', 'Pembicaraan Tk. II Penetapan Peraturan DPRD tentang Tata Tertib DPRD Kota Semarang', 'Pimpinan dan Anggota DPRD, OPD<br>Pakaian : PSR'),
(146, 'A-00145', '2018-10-11', '13:00:00', '2018-10-11 13:00:00', 'Ruang Rapat Paripurna  DPRD Kota Semarang', 'Rapat Badan Anggaran', 'Membahas Evaluasi Gubernur Raperda dan Raperwal tentang Perubahan APBD Kota Semarang TA.2018', 'Anggota Badan Anggaran, OPD'),
(147, 'A-00146', '2018-10-12', '10:00:00', '2018-10-12 10:00:00', 'Ruang Serbaguna 2 DPRD Kota Semarang', 'Menerima Kunjungan Kerja  DPRD Provinsi DKI Jakarta', 'Menerima Kunjungan kerja DPRD Provinsi DKI Jakarta', 'Anggota BK'),
(148, 'A-00147', '2018-10-12', '09:00:00', '2018-10-12 09:00:00', 'Ruang Rapat Paripurna  DPRD Kota Semarang', 'Sosialisasi Gratifikasi dan Bimbingan Teknis e-Filling LHKPN', 'Sosialisasi Gratifikasi dan Bimbingan Teknis e-Filling LHKPN', 'Pimpinan dan Anggota DPRD, OPD'),
(149, 'A-00148', '2018-10-12', '14:00:00', '2018-10-12 14:00:00', 'Ruang Rapat Paripurna  DPRD Kota Semarang', 'Rapat Paripurna', 'Pembicaraan Tk. I II Penetapan Rancangan Peraturan Daerah Dewan Perwakilan Rakyat Daerah Kota Semarang tentang Tata Tertib Dewan Perwakilan Rakyat Daerah Kota Semarang.', 'Pimpinan dan Anggota DPRD, OPD<br>Pakaian : PSR'),
(150, 'A-00149', '2018-10-16', '08:30:00', '2018-10-16 08:30:00', 'Ruang Rapat Paripurna  DPRD Kota Semarang', 'Pansus Penyelenggaraan Keolahragaan', 'Public Hearing Materi Raperda tentang Penyelenggaraan Keolahragaan', 'Anggota Pansus, Kanwil Kemenkumham, OPD, '),
(151, 'A-00150', '2018-10-16', '09:00:00', '2018-10-16 09:00:00', 'Ruang Serbaguna 2 DPRD Kota Semarang', 'Pansus Raperda tentang Bantuan Keuangan Partai Politik', 'Pembahasan  materi draft Raperda tentang Bantuan Keuangan Partai Politik', 'Anggota Pansus, Kanwil Kemenkumham, OPD, Tim AHli DPRD, Tim NA'),
(152, 'A-00151', '2018-10-16', '09:00:00', '2018-10-16 09:00:00', 'Ruang Serbaguna 3 DPRD Kota Semarang', 'Menerima Kunjungan kerja DPRD Kabupaten Lamongan', 'Membahas terkait Kode Etik Rancangan Peraturan DPRD tentang Kode Etik DPRD berdasarkan ketentuan dalam PP Nomor 12 Tahun 2018', 'Pimpinan DPRD, Anggota BPP'),
(153, 'A-00152', '2018-10-22', '10:00:00', '2018-10-22 10:00:00', 'Ruang Rapat Paripurna  DPRD Kota Semarang', 'Menerima Kunjungan kerja DPRD', 'Membahas terkait Pengelolaan PAD dari sector pajak dan Peningkatan Kualitas Pendidikan dan Layanan Kesehatan, dan Program kerja DPRD Tahun 2019', 'Pimpinan DPRD, Anggota Komisi B, Anggota Komisi D , Anggota Banmus,OPD'),
(154, 'A-00153', '2018-10-23', '10:00:00', '2018-10-23 10:00:00', 'Ruang Rapat Paripurna  DPRD Kota Semarang', 'Menerima Kunjungan kerja DPRD Kota Pariaman', 'Membahas terkait Kawasan Pasar, Perda Administrasi Kependudukan, dan Perda Penyelenggaraan Kearsipan dilingkungan Pemerintahan;', 'Pimpinan DPRD, Anggota Komisi B, Anggota BPP, OPD'),
(155, 'A-00154', '2018-10-23', '10:00:00', '2018-10-23 10:00:00', 'Ruang Rapat Paripurna  DPRD Kota Semarang', 'Menerima Kunjungan Kerja  DPRD Kab Jombang DPRD Kab. Batang', 'Membahas terkait Kebijakan Daerah dalam Pembangunan Perpustakaan Daerah dan Arsip', 'Pimpinan DPRD, Anggota Komisi B, Anggota BPP, OPD'),
(156, 'A-00155', '2018-10-24', '09:00:00', '2018-10-24 09:00:00', 'Ruang Serbaguna 3 DPRD Kota Semarang', 'Pansus Pembentukan Dana Cadangan untuk Pemilihan Walikota dan Wakil Walikota', 'Pembahasan Materi Raperda ( Paparan Penggunaan dana cadangan untuk Kapolrestabes dan Dandim 0733/BS)', 'Anggota Pansus, Kapolrestabes, Dandim 0733/BS, OPD, Kanwil Kemenkumham, Tim Ahli DPRD'),
(157, 'A-00156', '2018-10-24', '10:00:00', '2018-10-24 10:00:00', 'Ruang Serbaguna 2 DPRD Kota Semarang', 'Menerima Kunjungan kerja DPRD Kab. Sidoarjo', 'Membahas terkait tugas pokok dan fungsi Badan Pembentukan Peraturan Daerah', 'Pimpinan DPRD, Anggota BPP'),
(158, 'A-00157', '2018-10-25', '10:00:00', '2018-10-25 10:00:00', 'Ruang Rapat Komisi B', 'Rapat Komisi B DPRD', 'Rapat kerja terkait rencana relokasi pedagang pasar ikan hias kenari', 'Anggota Komisi B , Dinas Perdagangan'),
(159, 'A-00158', '2018-10-29', '10:00:00', '2018-10-29 10:00:00', 'Ruang Rapat Paripurna  DPRD Kota Semarang', 'Menerima Kunjungan Kerja  DPRD Kab. Sleman', 'Membahas terkait Tata Tertib DPRD dan Pokok-pokok Pikiran DPRD', 'Pimpinan DPRD, Anggota Komisi C, Anggota BPP, Anggota Banmus, OPD'),
(160, 'A-00159', '2018-10-29', '10:00:00', '2018-10-29 10:00:00', 'Ruang Rapat Paripurna  DPRD Kota Semarang', 'Menerima Kunjungan kerja DPRD Kota Bekasi ', 'Membahas terkait Tata cara Pengambilan Keputusan dalam rapat Badan Musyawarah;', 'Pimpinan DPRD, Anggota Komisi C, Anggota BPP, Anggota Banmus, OPD'),
(161, 'A-00160', '2018-10-29', '10:00:00', '2018-10-29 10:00:00', 'Ruang Rapat Paripurna  DPRD Kota Semarang', 'Menerima Kunjungan kerja DPRD Kab. Bogor ', 'Membahas terkait Sistem Jaringan Jalan, fungsi jalan, Status Jalan dan Pengawasan Jalan serta Pengawasan , Pengendalian , Pencemaran dan Kerusakan Lingkungan Hidup;', 'Pimpinan DPRD, Anggota Komisi C, Anggota BPP, Anggota Banmus, OPD'),
(162, 'A-00161', '2018-10-29', '10:00:00', '2018-10-29 10:00:00', 'Ruang Rapat Paripurna  DPRD Kota Semarang', 'Menerima Kunjungan kerja DPRD Kab. Tangerang ', 'Membahas terkait Penyusunan Program Pembentukan Perda Tahun 2019 dan Penyusunan dan Notulasi Rapat Banmus;', 'Pimpinan DPRD, Anggota Komisi C, Anggota BPP, Anggota Banmus, OPD'),
(163, 'A-00162', '2018-11-01', '14:00:00', '2018-11-01 14:00:00', 'Ruang Rapat Paripurna  DPRD Kota Semarang', 'Rapat Paripurna', 'Pembicaraan Tk. I membahas Raperda tentang APBD Kota Semarang TA.2019', 'FORKOPIMDA, Pimpinan dan Anggota DPRD, OPD<br>Pakaian : PSH'),
(164, 'A-00163', '2018-11-01', '11:00:00', '2018-11-01 11:00:00', 'Studio Kompas TV Lt.V', 'Dialog interaktif', 'Revitalisasi Drainase dan Sanitase Menjelang Musim Hujan di Kota Semarang', 'H. Joko Santoso, SE, MM( Wakil Ketua DPRD), Ali, ST, MM ( Sekretaris Disperkim). Dr.Ir Nelwan, Dipl. HE( Dosen UNDIP Semarang)'),
(165, 'A-00164', '2018-11-06', '09:00:00', '2018-11-06 09:00:00', 'Ruang Serbaguna 2 DPRD Kota Semarang', 'Rapat Badan Musyawarah', 'Menyusun jadwal kegiatan DPRD', 'Anggota Banmus'),
(166, 'A-00165', '2018-11-06', '09:00:00', '2018-11-06 09:00:00', 'R. Rapat Paripurna DPRD', 'Menerima Kunjungan Kerja DPRD Kab. Gresik ', 'Membahas terkait Penyediaan, Penyerahan Pengelolaan Prasarana dan Utilitas Perumahan;', 'Pimpinan DPRD, Anggota Komisi A, C dan D, Anggota BPP, OPD'),
(167, 'A-00166', '2018-11-06', '09:00:00', '2018-11-06 09:00:00', 'R. Rapat Paripurna DPRD', 'Menerima Kunjungan Kerja DPRD Kab. Sidoarjo ', 'Membahas terkait Penyelenggaraan Pendidikan;', 'Pimpinan DPRD, Anggota Komisi A, C dan D, Anggota BPP, OPD'),
(168, 'A-00167', '2018-11-03', '09:00:00', '2018-11-03 09:00:00', 'R. Rapat Paripurna DPRD', 'Menerima Kunjungan kerja DPRD Kota Banjarmasin', 'Membahas terkait Penyusunan Kode Etik', 'Pimpinan DPRD, Anggota Komisi A, C dan D, Anggota BPP, OPD'),
(169, 'A-00168', '2018-11-06', '09:00:00', '2018-11-06 09:00:00', 'R. Rapat Paripurna DPRD', 'Menerima Kunjungan Kerja DPRD Kota Batam ', 'Membahas terkait Peran Satpol PP dalam penegakkan Perda', 'Pimpinan DPRD, Anggota Komisi A, C dan D, Anggota BPP, OPD'),
(170, 'A-00169', '2018-11-06', '09:00:00', '2018-11-06 09:00:00', 'R. Rapat Paripurna DPRD', 'Menerima Kunjungan Kerja DPRD Kab. Sukoharjo ', 'Membahas terkait Hukum, Pemerintahan, Jaminan Kesehatan bagi warga tidak mampu', 'Pimpinan DPRD, Anggota Komisi A, C dan D, Anggota BPP, OPD'),
(171, 'A-00170', '2018-11-06', '09:00:00', '2018-11-06 09:00:00', 'R. Rapat Paripurna DPRD', 'Rapat Badan Anggaran', 'Membahas Raperda Kota Semarang tentang APBD Kota Semarang Tahun Anggaran 2019', 'Anggota Banggar, OPD'),
(172, 'A-00171', '2018-11-08', '09:00:00', '2018-11-08 09:00:00', 'R.Rapat Komisi A DPRD', 'Rapat Komisi A', 'Membahas RAPBF Kota Semarang TA 2019', 'Anggota Komisi A,OPD'),
(173, 'A-00172', '2018-11-08', '09:00:00', '2018-11-08 09:00:00', 'R.Rapat Komisi B DPRD', 'Rapat Komisi B', 'Membahas RAPBF Kota Semarang TA 2019', 'Anggota Komisi B,OPD'),
(174, 'A-00173', '2018-11-08', '09:00:00', '2018-11-08 09:00:00', 'R.Rapat Komisi C DPRD', 'Rapat Komisi C', 'Membahas RAPBF Kota Semarang TA 2019', 'Anggota Komisi C,OPD'),
(175, 'A-00174', '2018-11-08', '09:00:00', '2018-11-08 09:00:00', 'R.Rapat Komisi D DPRD', 'Rapat Komisi C', 'Membahas RAPBF Kota Semarang TA 2019', 'Anggota Komisi D,OPD'),
(176, 'A-00175', '2018-11-07', '10:00:00', '2018-11-07 10:00:00', 'Ruang Serbaguna 2 DPRD Kota Semarang', 'Menerima Kunjungan Kerja Kab. Pasuruan', 'Membahas terkait prioritas anggaran pada RAPBD Tahun 2019 khususnya Bidang Pembangunan', 'Pimpinan DPRD,Anggota Komisi C, OPD'),
(177, 'A-00176', '2018-11-05', '09:00:00', '2018-11-05 09:00:00', 'R. Rapat Paripurna DPRD', 'Rapat Badan Anggaran', 'Membahas Raperda Kota Semarang tentang APBD Kota Semarang TA. 2019', 'Anggota Bangar, OPD'),
(178, 'A-00177', '2018-11-05', '10:00:00', '2018-11-05 10:00:00', 'Ruang Serbaguna 2 DPRD Kota Semarang', 'Menerima Kunjungan kerja DPRD Kabupaten Kuningan', 'Membahas terkait RAPBD Tahun 2019', 'Pimpinan DPRD, Anggota Banggar, OPD'),
(179, 'A-00178', '2018-11-07', '09:00:00', '2018-11-07 09:00:00', 'R.Rapat Komisi B DPRD', 'Rapat Komisi B', 'Membahas RAPBD Kota Semarang TA 2019', 'Anggota Komisi B,OPD'),
(180, 'A-00179', '2018-11-07', '09:00:00', '2018-11-07 09:00:00', 'R.Rapat Komisi A DPRD', 'Rapat Komisi A', 'Membahas RAPBD Kota Semarang TA 2019', 'Anggota Komisi A,OPD'),
(181, 'A-00180', '2018-11-07', '09:00:00', '2018-11-07 09:00:00', 'R.Rapat Komisi C DPRD', 'Rapat Komisi C', 'Membahas RAPBD Kota Semarang TA 2019', 'Anggota Komisi C,OPD'),
(182, 'A-00181', '2018-11-07', '09:00:00', '2018-11-07 09:00:00', 'R.Rapat Komisi D DPRD', 'Rapat Komisi D', 'Membahas RAPBD Kota Semarang TA 2019', 'Anggota Komisi D,OPD'),
(183, 'A-00182', '2018-11-08', '10:00:00', '2018-11-08 10:00:00', 'R. Rapat Paripurna DPRD', 'Menerima Kunjungan Kerja DPRD Kota Pasuruan ', 'Membahas terkait Raperda APBD 2019 khususnya di Komisi A', 'Pimpinan DPRD,Anggota Komisi A, OPD'),
(184, 'A-00183', '2018-11-08', '10:00:00', '2018-11-08 10:00:00', 'R. Rapat Paripurna DPRD', 'Menerima Kunjungan Kerja DPRD Kab. Sumedang ', 'Membahas terkait Perusahaan Umum Daerah Perkreditan Rakyat kota Semarang', 'Pimpinan DPRD,Anggota Komisi A, OPD'),
(185, 'A-00184', '2018-11-09', '09:00:00', '2018-11-09 09:00:00', 'R.Rapat Komisi D DPRD', 'Rapat Komisi D', 'Membahas RAPBD Kota Semarang TA 2019', 'Anggota Komisi D,OPD'),
(186, 'A-00185', '2018-11-09', '10:00:00', '2018-11-09 10:00:00', 'R.Rapat Komisi C DPRD', 'Rapat Komisi C', 'Membahas RAPBD Kota Semarang TA 2019', 'Anggota Komisi C,OPD'),
(187, 'A-00186', '2018-11-09', '10:00:00', '2018-11-09 10:00:00', 'R.Rapat Komisi B DPRD', 'Rapat Komisi B', 'Membahas RAPBD Kota Semarang TA 2019', 'Anggota Komisi B,OPD'),
(188, 'A-00187', '2018-11-09', '09:00:00', '2018-11-09 09:00:00', 'R.Rapat Komisi A DPRD', 'Rapat Komisi A', 'Membahas RAPBD Kota Semarang TA 2019', 'Anggota Komisi A,OPD'),
(189, 'A-00188', '2018-11-09', '10:00:00', '2018-11-09 10:00:00', 'R. Rapat Paripurna DPRD', 'Menerima Kunjungan Kerja DPRD Kab. Gresik DPRD Kota Surakarta ', 'Membahas tugas pokok dan fungsi Bapemperda', 'Pimpinan DPRD, Anggota BPP, Anggota Komisi C, OPD');
INSERT INTO `agenda` (`id`, `kode_agenda`, `tanggal`, `jam`, `waktu`, `tempat`, `acara`, `materi`, `peserta`) VALUES
(190, 'A-00189', '2018-11-09', '10:00:00', '2018-11-09 10:00:00', 'R. Rapat Paripurna DPRD', 'Menerima Kunjungan Kerja DPRD DPRD Kab. Tuban ', 'Membahas terkait Jalan, Jembatan dan Pemukiman', 'Pimpinan DPRD, Anggota BPP, Anggota Komisi C, OPD'),
(191, 'A-00190', '2018-11-09', '10:00:00', '2018-11-09 10:00:00', 'R. Rapat Paripurna DPRD', 'Menerima Kunjungan Kerja DPRD Kota Cimahi  ', 'Membahas terkait  Perda Jasa Kontruksi;', 'Pimpinan DPRD, Anggota BPP, Anggota Komisi C, OPD'),
(192, 'A-00191', '2018-11-10', '08:00:00', '2018-11-10 08:00:00', 'Halaman Balaikota', 'Upacara Peringatan Hari Pahlawan dan Hari Kesaktian Pancasila', 'Upacara Peringatan Hari Pahlawan dan Hari Kesaktian Pancasila', 'Pimpinan DPRD, Anggota Komisi A, B, C dan D<br>Pakaian : PSL'),
(193, 'A-00192', '2018-11-10', '18:30:00', '2018-11-10 18:30:00', 'Taman Indonesia Kaya Semarang', 'Semarang Insternasional Keroncong Festival', 'Semarang Insternasional Keroncong Festival', 'Yang diundnag : Ketua DPRD, Ketua Komisi D, H.M Rukiyanto AB, SH, Dr. Anang Budi U, S.Pd, S.Mn, MPd'),
(195, 'A-00194', '2018-11-12', '09:00:00', '2018-11-12 09:00:00', 'Ruang Rapat Komisi B', 'Rapat Komisi B DPRD', 'Membahas RAPBD Kota Semarang TA 2019', 'Anggota Komisi B,OPD'),
(196, 'A-00195', '2018-11-12', '09:00:00', '2018-11-12 09:00:00', 'Ruang Rapat Komisi C', 'Rapat Komisi C DPRD', 'Membahas RAPBD Kota Semarang TA 2019', 'Anggota Komisi C,OPD'),
(197, 'A-00196', '2018-11-12', '09:00:00', '2018-11-12 09:00:00', 'Ruang Rapat Komisi D', 'Rapat Komisi D DPRD', 'Membahas RAPBD Kota Semarang TA 2019', 'Anggota Komisi D,OPD'),
(198, 'A-00197', '2018-11-12', '10:00:00', '2018-11-12 10:00:00', 'Ruang Rapat Paripurna  DPRD Kota Semarang', 'Menerima Kunjungan kerja DPRD DPRD DPRD Kab. Blitar ', 'Membahas terkait Kebijakan Anggaran Mitra Komisi II', 'Pimpinan DPRD, Anggota Komisi B, Anggota BPP, OPD'),
(199, 'A-00198', '2018-11-12', '10:00:00', '2018-11-12 10:00:00', 'Ruang Rapat Paripurna  DPRD Kota Semarang', 'Menerima Kunjungan Kerja  DPRD Kab. Bojonegoro ', 'Membahas terkait Penyusunan Propemperda Tahun 2019', 'Pimpinan DPRD, Anggota Komisi B, Anggota BPP, OPD'),
(200, 'A-00199', '2018-11-12', '09:00:00', '2018-11-12 09:00:00', 'Ruang Rapat Komisi A', 'Rapat Komisi A DPRD', 'Membahas RAPBD Kota Semarang TA 2019', 'Anggota Komisi A,OPD'),
(201, 'A-00200', '2018-11-13', '09:00:00', '2018-11-13 09:00:00', 'Ruang Rapat Komisi B', 'Rapat Komisi B DPRD', 'Membahas RAPBD Kota Semarang TA 2019', 'Anggota Komisi B,OPD'),
(202, 'A-00201', '2018-11-13', '09:00:00', '2018-11-13 09:00:00', 'Ruang Rapat Komisi C', 'Rapat Komisi C DPRD', 'Membahas RAPBD Kota Semarang TA 2019', 'Anggota Komisi C,OPD'),
(203, 'A-00202', '2018-11-13', '09:00:00', '2018-11-13 09:00:00', 'Ruang Rapat Komisi D', 'Rapat Komisi D DPRD', 'Membahas RAPBD Kota Semarang TA 2019', 'Anggota Komisi D,OPD'),
(204, 'A-00203', '2018-11-13', '09:00:00', '2018-11-13 09:00:00', 'Ruang Serbaguna 2 DPRD Kota Semarang', 'Rapat Badan Pembentukan Perda', 'Penjelasan atas Usulan Raperda Kota Semarang Tahun 2019 tentang : <br>- Rencanan Pembangunan Industri Kota (RPIK) Tahun 2019-2039;<br>- Perlindungan dan Pengelolaan Lingkungan Hidup;<br>- Penyelenggaraan Lalu Lintas dan Angkutan Jalan;<br>- Pennaggulangan Penyakit Tuberkolosis di Kota Semarang', 'Anggota BPP, OPD'),
(205, 'A-00204', '2018-11-13', '10:00:00', '2018-11-13 10:00:00', 'Ruang Serbaguna 3 DPRD Kota Semarang', 'Menerima Kunjungan kerja DPRD Kabupaten Karanganyar', 'Membahas terkait bidang Perekonomian dan Pembangunan', 'Pimpinan DPRD, Anggota Komisi B, Anggota Komisi C, OPD'),
(206, 'A-00205', '2018-11-13', '09:00:00', '2018-11-13 09:00:00', 'Ruang Rapat Komisi A', 'Rapat Komisi A DPRD', 'Membahas RAPBD Kota Semarang TA 2019', 'Anggota Komisi A,OPD'),
(207, 'A-00206', '2018-11-14', '09:00:00', '2018-11-14 09:00:00', 'Ruang Rapat Paripurna  DPRD Kota Semarang', 'Rapat Badan Anggaran', '- Sinkronisasi Hasil Pembahasan Komisi-Komisi mengenai Raperda tentang APBD Kota Semarang TA.2018;<br>- Penyampaian Pendapat akhir Fraksi', 'Pimpinan dan Anggota Banggar, OPD, Ketua Fraksi DPRD'),
(208, 'A-00207', '2018-11-14', '09:00:00', '2018-11-14 09:00:00', 'Ruang Serbaguna 2 DPRD Kota Semarang', 'Rapat Badan Pembentukan Perda', 'Penjelasan atas Usulan Raperda Kota Semarang Tahun 2019 tentang Reklame, Pedoman Pengelolaan Barang Milik Daerah , Penyelenggaraan Pendidikan, Pendirian Perumda BPR Bank Pasar, Penyertaan Modal Bank Jateng', 'Anggota BPP, OPD'),
(209, 'A-00208', '2018-11-14', '10:00:00', '2018-11-14 10:00:00', 'Ruang Serbaguna 3 DPRD Kota Semarang', 'Menerima Kunjungan kerja DPRD Kab. Lampung Tengah ', 'Membahas terkait Raperda Rencana Tata Ruang Wilayah (RTRW)', 'Pimpinan DPRD, Anggota Komisi C, OPD'),
(210, 'A-00209', '2018-11-15', '09:00:00', '2018-11-15 09:00:00', 'Ruang Rapat Paripurna  DPRD Kota Semarang', 'Rapat Paripurna', '- Penetapan Keputusan DPRD atas Program Pembentukan Perda Kota Semarang Tahun 2019;<br>- Pembicaraan Tk.II Penetapan Keputusan DPRD atas Raperda tentang APBD Kota Semarang TA.2019<br>- Penetapan Keputusan DPRD tentang Perubahan Susunan Alat Kelengkapan DPRD Kota Semarang', 'Pimpinan dan Anggota DPRD, OPD<br>Pakaian : PSR'),
(211, 'A-00210', '2018-11-16', '10:00:00', '2018-11-16 10:00:00', 'Ruang Serbaguna 2 DPRD Kota Semarang', 'Menerima Kunjungan kerja DPRD Kota Tangerang ', 'Membahas terkait Penyusunan Prolegda Tahun 2019', 'Pimpinan DPRD, Anggota BPP'),
(212, 'A-00211', '2018-11-21', '10:00:00', '2018-11-21 10:00:00', 'Ruang Rapat Paripurna  DPRD Kota Semarang', 'Menerima Kunjungan kerja Pimpinan dan Anggota DPRD Kab.Bantul', 'Membahas terkait Penanganan Keamanan dan Ketertiban Masyarakat, PAD,Pengelolaan Lingkungan Hidup dari Persampahan, Pengentasan Kemiskinan dan Kesra', 'Pimpinan DPRD, Anggota Komisi A,B,C dan D, OPD'),
(213, 'A-00212', '2018-12-07', '09:00:00', '2018-12-07 09:00:00', 'Ruang Rapat Serbaguna 2', 'Pansus Raperda tentang Perumda Air Minum Tirta Moedal', '- Pembahasan Raperda<br>- Pendapat akhir fraksi terhadap Raperda<br>- Perumusan hasil Pembahasan raperda', 'Pimpinan dan anggota Pansus, Pimpinan fraksi, OPD, Tim Ahli DPRD, Tim Penyusun NA'),
(214, 'A-00213', '2018-12-06', '10:00:00', '2018-12-06 10:00:00', 'Ruang Rapat Serbaguna 2', 'Pansus Raperda tentang Perumda Air Minum Tirta Moedal', 'Pembahasan raperda dan Perumusan hasil pembahasan Raperda', 'Pimpinan dan anggota Pansus, OPD, Tim Ahli DPRD, Tim Penyusun NA'),
(215, 'A-00214', '2018-12-06', '10:00:00', '2018-12-06 10:00:00', 'Ruang Rapat Komisi A', 'Rapat Komisi A', 'Membahas aduan masyarakat terkait bangunan masjid al-Falah yang terletak di jalan Karangwulan Timur RT 04 RW 01 Kelurahan Jagalan Kecamatan Semarang Tengah ', 'Anggota Komisi A, OPD'),
(216, 'A-00215', '2018-12-06', '10:00:00', '2018-12-06 10:00:00', 'Ruang Rapat Paripurna DPRD', 'Menerima Kunjungan Kerja DPRD Kab. Bojonegoro', 'Membahas terkait Penganggaran BLUD', 'Pimpinan DPRD, Anggota Komisi A, B, C, D, OPD'),
(217, 'A-00216', '2018-12-06', '10:00:00', '2018-12-06 10:00:00', 'Ruang Rapat Paripurna DPRD', 'Menerima Kunjungan Kerja DPRD Kab. Purwakarta ', 'Membahas terkait Raperda Kawasan Tanpa Rokok dan Raperda Pengelolaan Limbah Domestik;', 'Pimpinan DPRD, Anggota Komisi A, B, C, D, OPD'),
(218, 'A-00217', '2018-12-03', '10:00:00', '2018-12-03 10:00:00', 'Ruang Rapat Paripurna DPRD', 'Menerima Kunjungan Kerja DPRD ', 'Membahas terkait:<br>- strategi perumusan dan penyusunan KUA PPAS dan APBD<br>- Sektor Kepariwisataan', 'Pimpinan DPRD, Anggota Banggar, Anggota Komisi B, Anggota Komisi D dan OPD'),
(219, 'A-00218', '2018-12-03', '09:00:00', '2018-12-03 09:00:00', 'Ruang Rapat Paripurna DPRD', 'Pansus Penyelenggaraan Keolaragaan', 'Rapat dengar pendapat membahas materi Raperda tentang Penyelenggaraan Keolahragaan DPRD Kota Semarang', ' Anggota Pansus, OPD, Ketua KONI, Ketua NPC, Ketua FORMI, Dekan UNNES'),
(220, 'A-00219', '2018-11-27', '09:00:00', '2018-11-27 09:00:00', 'Ruang Rapat Komisi A', 'Rapat Komisi A', ' Rapat kerja Komisi A DPRD Kota Semarang dengan Sekretariat DPRD Kota Semarang ', 'Anggota Komisi A, OP'),
(221, 'A-00220', '2018-11-27', '09:00:00', '2018-11-27 09:00:00', 'Ruang Rapat Serbaguna 3', 'Rapat Pansus Raperda Pembentukan BPR Syariah', 'Pembahasan materi Raperda', 'Anggota Pansus, OPD, Tima Hli DPRD, KAnwil Kemenkumham'),
(222, 'A-00221', '2018-11-27', '10:00:00', '2018-11-27 10:00:00', 'Lobby Hotel Getz', 'Dialog interaktif', 'Menjaga stabilitas Keamanan Menjelang Natal dan Tahun baru 2019', 'H. Wiwin Subiyono, SH ( Wakil Ketua DPRD), Kombes Pol Abioso Seno Aji ( Kapolrestabes Semarang), Drs.Isdiyanto ( Ka. Kesbangpol)'),
(224, 'A-00223', '2018-12-11', '10:00:00', '2018-12-11 10:00:00', 'Ruang Serbaguna 2 DPRD Kota Semarang', 'Rapat Badan Anggaran', '- FGD Kajian tentang Optimalisasi Pajak dan Retribusi Parkir<br>- FGD Kajian tentang Pengadaan Tanah / Line Banking untuk Kepentingan Publik dan Ruang terbuka', 'Anggota Banggar, OPD'),
(225, 'A-00224', '2018-12-11', '10:00:00', '2018-12-11 10:00:00', 'Ruang Serbaguna 2 DPRD Kota Semarang', 'Menerima Kunjungan kerja DPRD', 'Membahas terkait Program kerja BAPPERDA DPRD', 'Pimpinan DPRD, Anggota BPP'),
(226, 'A-00225', '2018-12-12', '09:00:00', '2018-12-12 09:00:00', 'Ruang Serbaguna 2 DPRD Kota Semarang', 'Pansus Penyelenggaran Keolahragaan', 'a. Pembahasan materi;<br>b. Penyampaian Pendapat Akhir fraksi;<br>c. Perumusan Hasil Pembahasan Raperda.', 'Anggota Pansus,Pimpinan fraksi,  OPD, Kanwil Kemenkumham, KONI, NPC, FORMI, Tim Ahli DPRD'),
(227, 'A-00226', '2018-12-12', '10:00:00', '2018-12-12 10:00:00', 'Ruang Serbaguna 2 DPRD Kota Semarang', 'Menerima Kunjungan kerja DPRD Kabupaten Ogan Komering Ulu', 'Membahas terkait Program Penyusunan Agenda Kegiatan Tahun 2019 ', 'Pimpinan DPRD, Anggota Banmus'),
(228, 'A-00227', '2018-12-13', '00:30:00', '2018-12-13 00:30:00', 'Ruang Serbaguna 3 DPRD Kota Semarang', 'Pansus Pembentukan BPR Syariah', 'Tindak Lanjut Pembahasan Raperda tentang Pembentukan BPR Syariah ', 'Anggota Pansus, Kanwil kemenkumham, OPD, Tim Ahli DPRD'),
(229, 'A-00228', '2018-12-14', '09:00:00', '2018-12-14 09:00:00', 'Ruang Serbaguna 2 DPRD Kota Semarang', 'Rapat Pansus PDAM', '- Pembahasan Raperda tentang Perumda Air minum Tirta Moedal Kota Semarang<br>- Pendapat akhir fraksi terhadap Raperda<br>- Perumusan hasil pembahasan Raperda', 'Anggota Pansus, Pimpinan Fraksi, OPD, Tim Ahli DPRD, Tim Penyusun NA'),
(230, 'A-00229', '2018-12-17', '10:00:00', '2018-12-17 10:00:00', 'Ruang Rapat Paripurna  DPRD Kota Semarang', 'Menerima Kunjungan kerja DPRD Kota Madiun ', 'Membahas terkait tugas pokok dan fungsi Komisi.', 'Pimpinan DPRD, ANggota Komisi C, OPD'),
(231, 'A-00230', '2018-12-17', '10:00:00', '2018-12-17 10:00:00', 'Ruang Rapat Paripurna  DPRD Kota Semarang', 'Menerima Kunjungan kerja DPRD DPRD Kota Jambi ', 'Membahas terkait tugas pokok dan fungsi DPRD;', 'Pimpinan DPRD, ANggota Komisi C, OPD'),
(232, 'A-00231', '2018-12-18', '10:00:00', '2018-12-18 10:00:00', 'Ruang Rapat Paripurna  DPRD Kota Semarang', 'Menerima Kunjungan kerja DPRD DPRD Kota Magelang ', 'Membahas terkait bidang Pendidikan, Pembangunan dan Kesejahteraan rakyat;', 'Pimpinan DPRD, Anggota BK, Anggota Komisi C, OPD'),
(233, 'A-00232', '2018-12-18', '10:00:00', '2018-12-18 10:00:00', 'Ruang Rapat Paripurna  DPRD Kota Semarang', 'Menerima Kunjungan kerja DPRD DPRD Kab. Jembrana ', 'Membahas terkait Pemanfaatan teknologi informasi dalam rangka mendukung performance fungsi, tugas dan wewenag DPRD', 'Pimpinan DPRD, Anggota BK, Anggota Komisi C, OPD'),
(234, 'A-00233', '2018-12-18', '10:00:00', '2018-12-18 10:00:00', 'Ruang Rapat Paripurna  DPRD Kota Semarang', 'Menerima Kunjungan kerja DPRD DPRD Kab.Cirebon', 'Membahas terkait Tata beracara dan penegakan Kode Etik DPRD;', 'Pimpinan DPRD, Anggota BK, Anggota Komisi C, OPD'),
(235, 'A-00234', '2018-12-18', '10:00:00', '2018-12-18 10:00:00', 'Ruang Serbaguna 3 DPRD Kota Semarang', 'Rapat Pansus Pembentukan dana cadangan untuk Pemilihan Walikota dan Wakil Walikota', '- Pendapat akhir fraksi terhadap raperda ;<br>- Perumusan hasil pembahasan raperda', 'Anggota Pansus, OPD'),
(236, 'A-00235', '2018-12-19', '10:00:00', '2018-12-19 10:00:00', 'Ruang Serbaguna 3 DPRD Kota Semarang', 'Rapat Pansus Pembentukan dana cadangan untuk Pemilihan Walikota dan Wakil Walikota', '- Pendapat akhir fraksi terhadap raperda ;<br>- Perumusan hasil pembahasan raperda', 'Anggota Pansus, OPD'),
(237, 'A-00236', '2018-12-19', '11:00:00', '2018-12-19 11:00:00', 'Ruang Rapat Paripurna  DPRD Kota Semarang', 'Rapat Badan Anggaran', 'Membahas hasil Evaluasi Gubernur Raperda dan Raperwal tentang APBD Kota Semarang TA. 2019', 'Anggota Banggar, OPD'),
(238, 'A-00237', '2018-12-19', '00:00:00', '2018-12-19 00:00:00', 'Ruang Serbaguna 2 DPRD Kota Semarang', 'Rapat Badan Musyawarah', 'Membahas Keputusan Gubernur Jawa Tengah Nomor 170/124 Tahun 2018 tanggal 17 Desember 2018 tentang Peresmian Pemberhentian dan Peresmian Pengangkatan Pengganti Antar Waktu Anggota DPRD Kota Semarang', 'Anggota Banmus, Ketua Fraksi PKS, OPD'),
(239, 'A-00238', '2018-12-20', '09:00:00', '2018-12-20 09:00:00', 'Ruang Rapat Paripurna  DPRD Kota Semarang', 'Rapat Paripurna', 'Pembicaraan Tk. II Penetapan Keputusan DPRD atas Raperda Kota Semarang tentang :<br>- Keolahragaan;<br>- PDAM Tirta Moedal Kota Semarang;<br>- Pembentukan dana cadangan Walikota dan Wakil Walikora Semarang Tahun 2020', 'Pimpinan dan Anggota DPRD Kota Semarang, OPD<br>Pakaian : PSR'),
(240, 'A-00239', '2018-12-27', '10:00:00', '2018-12-27 10:00:00', 'Ruang Rapat Badan Kehormatan DPRD', 'Rapat Badan Kehormatan', 'Rakor Pimpinan dan Anggota BK DPRD terkait Surat Sekretariat DPRD Kota Semarang Nomor 170/2270 tanggal 19 Desember 2018 perihal Permohonan Judul Raperda, Kajian dan Rispoda tahun 2018', 'Pimpinan dan Anggota BK'),
(241, 'A-00240', '2018-12-27', '10:00:00', '2018-12-27 10:00:00', 'Ruang Rapat Komisi B DPRD', 'Rapat Komisi B DPRD', 'Rapat internal Komisi B DPRD Kota Semarang', 'Anggota Komisi B'),
(242, 'A-00241', '2018-12-28', '09:00:00', '2018-12-28 09:00:00', 'Ruang Serbaguna 2 DPRD Kota Semarang', 'Menerima Kunjungan kerja DPRD Kabupaten Gresik', 'Membahas terkait Pengelolaan Parkir', 'Pimpinan DPRD, Anggota Komisi B, OPD'),
(243, 'A-00242', '2018-12-31', '09:00:00', '2018-12-31 09:00:00', 'Ruang Rapat Paripurna  DPRD Kota Semarang', 'Rapat Paripurna', '- Penetapan keputusan DPRD tentang rencana kerja DPRD Kota Semarang Tahun 2019;- Penetapan Keputusan DPRD tentang Perubahan susunan Pimpinan dan Keanggotaan Komisi D DPRD Kota Semarang;- Penutupan Masa  Persidangan III Tahun 2018 dan Tahun Sidang 2018', 'Pimpinan dan Anggota DPRD, OPD<br>Pakaian : PSR'),
(244, 'A-00243', '2019-01-03', '09:00:00', '2019-01-03 09:00:00', 'Ruang Rapat Pimpinan ', 'Rapat Pimpinan ', 'Rapat Pimpinan DPRD dengan Sekretaris DPRD Kota Semarang beserta Kabag di Lingkungan Sekretariat DPRD Kota Semarang', 'Pimpinan DPRD, Sekretaris DPRD, Para Kabag Setwan'),
(245, 'A-00244', '2019-01-04', '10:00:00', '2019-01-04 10:00:00', 'Ruang Serbaguna 2 DPRD Kota Semarang', 'Menerima Kunjungan kerja DPRD Kota Cimahi', 'Membahas terkait mekanisme penyusunan NA :<br>- Penertiban Izin Pendidikan Dasar yang diselenggarakan Masyarakat;- Penerbitan Izin Pendidikan Anak Usia Dini dan Pendidikan Non Formal yang diselenggarakan oleh Masyarakat;- Penerbitan Izin Usaha Jasa Kontruksi', 'Pimpinan DPRD, Anggota Komisi C, Anggota Komisi D, OPD'),
(246, 'A-00245', '2019-01-15', '09:00:00', '2019-01-15 09:00:00', 'Ruang Serbaguna 2 DPRD Kota Semarang', 'Rapat Badan Musyawarah', 'Menyusun rencana kegiatan DPRD Kota Semarang', 'Anggota Banmus'),
(247, 'A-00246', '2019-01-15', '10:00:00', '2019-01-15 10:00:00', 'Ruang Rapat Paripurna  DPRD Kota Semarang', 'Menerima Kunjungan kerja DPRD Kabupaten Pamekasan ', 'Membahas terkait Pengelolaan Limbah Bahan berbahaya dan beracun (B3);', 'Anggota Komisi A, Komisi B, Komisi C , Komisi D, OPD'),
(248, 'A-00247', '2019-01-15', '10:00:00', '2019-01-15 10:00:00', 'Ruang Rapat Paripurna  DPRD Kota Semarang', 'Menerima Kunjungan kerja DPRD Kabupaten Sukoharjo ', 'Membahas terkait bidang Pendidikan, bidang hokum dan bidang Pemerintahan', 'Anggota Komisi A, Komisi B, Komisi C , Komisi D, OPD'),
(249, 'A-00248', '2019-01-15', '10:00:00', '2019-01-15 10:00:00', 'Ruang Rapat Paripurna  DPRD Kota Semarang', 'Menerima Kunjungan kerja DPRD Kota Cimahi', 'Membahas terkait dengan implementasi Tugas dan fungsi Komisi II,', 'Anggota Komisi A, Komisi B, Komisi C , Komisi D, OPD'),
(250, 'A-00249', '2019-01-17', '10:00:00', '2019-01-17 10:00:00', 'Ruang Serbaguna 2 DPRD Kota Semarang', 'Menerima Kunjungan kerja DPRD Kabupaten Cilacap ', 'membahas terkait Penerapan Tat Tertib DPRD terkait terbitnya PP 12 Tahun 2018', 'Pimpinan dan Anggota Badan Musyawarah'),
(251, 'A-00250', '2019-01-18', '10:00:00', '2019-01-18 10:00:00', 'Ruang Rapat Paripurna  DPRD Kota Semarang', 'Menerima Kunjungan kerja Badan Kehormatan DPRD Kabupaten Boyolali ', 'membahas terkait Penegakkan Kedisiplinan dan kode etik bagi anggota DPRD;', 'Anggota BK, Anggota Banggar, OPD'),
(252, 'A-00251', '2019-01-18', '10:00:00', '2019-01-18 10:00:00', 'Ruang Serbaguna 2 DPRD Kota Semarang', 'Menerima Kunjungan kerja Badan Anggaran DPRD Kota Tangerang ', 'membahas terkait capaian realisasi anggaran tahun 2018', 'Anggota BK, Anggota Banggar, OPD'),
(253, 'A-00252', '2019-01-18', '10:00:00', '2019-01-18 10:00:00', 'Ruang Rapat Paripurna  DPRD Kota Semarang', 'Menerima Kunjungan kerja Bapemperda DPRD Kabupaten Boyolali ', 'membahas terkait Penyusunan Raperda tentang Penanggulangan HIV/AIDS;', 'Anggota BK, Anggota Banggar, OPD'),
(254, 'A-00253', '2019-01-22', '10:00:00', '2019-01-22 10:00:00', 'Ruang Serbaguna 2 DPRD Kota Semarang', 'Menerima Kunjungan kerja DPRD Kota Bekasi', 'Membahas terkait peranan dan kendala serta solusi BPP dalam evaluasi Perda yang sudah ditetapkan pada tahun 2014-2018', 'Pimpinan DPRD, Anggota BPP'),
(255, 'A-00254', '2019-01-22', '10:00:00', '2019-01-22 10:00:00', 'Ruang Rapat Komisi D DPRD', 'Rapat Komisi D', 'Rapat internal Persiapan membahas surat masuk, jadwal kegiatan dan persiapan Adeksi ke Jakarta', 'Anggota Komisi D'),
(256, 'A-00255', '2019-01-22', '14:00:00', '2019-01-22 14:00:00', 'Lapangan Citarum Semarang', 'Acara Pembukaan POPDA 2019', 'Pembukaan POPDA 2019', 'Anggota Komisi D<br>Pakaian : Olahraga');

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
(1, 'J-00001', 2),
(2, 'J-00002', 2),
(3, 'J-00003', 2),
(4, 'J-00004', 2),
(5, 'J-00005', 2),
(6, 'J-00006', 2),
(7, 'J-00007', 2),
(8, 'J-00008', 2),
(9, 'J-00009', 2),
(10, 'J-00010', 2),
(11, 'J-00011', 2),
(12, 'J-00012', 2);

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
  `jabatan` varchar(300) NOT NULL,
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
(1, 'H.SUPRIYADI, S.Sos, MA', '', '1', '1@gmail.com', NULL, '4', NULL, '', 'Ketua', '', '', 'file_1556624144.jpg', 'anggota legislatif', '1'),
(2, 'H.JOKO SANTOSO, SE, MM', '', '2', '2@gmail.com', NULL, '6', NULL, '', 'Wakil Ketua', '', '', '', 'anggota legislatif', '1'),
(3, 'H.WIWIN SUBIYONO, SH', '', '3', '3@gmail.com', NULL, '7', NULL, '', 'Wakil Ketua', '', '', '', 'anggota legislatif', '1'),
(4, 'H. AGUNG BUDI MARGONO, ST, MT', '', '4', '4@gmail.com', NULL, '3', NULL, '', 'Wakil Ketua', '', '', '', 'anggota legislatif', '1'),
(5, 'Drs. H. AGUS RIYANTO SLAMET', '', '5', '5@gmail.com', NULL, '3', 'K-00002', 'Ketua Komisi B DPRD Kota Semarang', 'Anggota', '', '', '', 'anggota legislatif', '1'),
(6, 'LASER NARINDRO, ST', '', '6', '6@gmail.com', NULL, '7', 'K-00004', 'Ketua Komisi D DPRD Kota Semarang', 'Anggota', '', '', '', 'anggota legislatif', '1'),
(7, 'H. MEIDIANA KUSWARA, A.Md', '', '7', '7@gmail.com', NULL, '4', 'K-00001', 'Ketua Komisi A DPRD Kota Semarang', 'Anggota', '', '', '', 'anggota legislatif', '1'),
(8, 'DANUR RISPRIYANTO', '', '8', '8@gmail.com', NULL, '7', 'K-00002', 'Wakil Ketua Komisi B DPRD Kota Semarang', 'Anggota', '', '', '', 'anggota legislatif', '1'),
(9, 'Hj. UMI SUROTUD DINIYAH, SE', '', '9', '9@gmail.com', NULL, '8', 'K-00004', 'Wakil Ketua Komisi D DPRD Kota Semarang', 'Anggota', '', '', '', 'anggota legislatif', '1'),
(10, 'SWASTI ASWAGATI, S.Psi', '', '10', '10@gmail.com', NULL, '7', 'K-00001', 'Wakil Ketua Komisi A DPRD Kota Semarang', 'Anggota', '', '', '', 'anggota legislatif', '1'),
(11, 'KADAR LUSMAN, SE', '', '11', '11@gmail.com', NULL, '4', 'K-00003', 'Ketua Komisi C DPRD Kota Semarang', 'Anggota', '', '', '', 'anggota legislatif', '1'),
(12, 'H. SUHARTO MASRI', '', '12', '12@gamil.com', NULL, '6', 'K-00001', 'Sekretaris Ketua Komisi A DPRD Kota Semarang', 'Anggota', '', '', '', 'anggota legislatif', '1'),
(13, 'NUNGKI SUNDARI, SE', '', '13', '13@gmai.com', NULL, '4', 'K-00001', 'Anggota Komisi A DPRD Kota Semarang', 'Anggota', '', '', '', 'anggota legislatif', '1'),
(14, 'H.M. RUKIYANTO AB, SH', '', '14', '14@gmail.com', NULL, '4', 'K-00004', 'Sekretaris Komisi D DPRD Kota Semarang', 'Anggota', '', '', '', 'anggota legislatif', '1'),
(15, 'ERRY SADEWO, SH', '', '15', '15@gmail.com', NULL, '5', 'K-00003', 'Wakil Ketua Komisi C DPRD Kota Semarang', 'Anggota', '', '', '', 'anggota legislatif', '1'),
(16, 'Ir. WACHID NURMIYANTO', '', '16', '16@gmail.com', NULL, '8', 'K-00003', 'Sekretaris Komisi C DPRD Kota Semarang', 'Anggota', '', '', '', 'anggota legislatif', '1'),
(17, 'R.YUWANTO', '', '17', '17@gamil.com', NULL, '4', 'K-00003', 'Anggota Komisi C DPRD Kota Semarang', 'Anggota', '', '', '', 'anggota legislatif', '1'),
(18, 'JOKO SUSILO', '', '18', '18@gmail.com', NULL, '4', 'K-00002', 'Sekretaris Komisi B DPRD Kota Semarang', 'Anggota', '', '', '', 'anggota legislatif', '1'),
(19, 'BUDIHARTO, ST, MM', '', '19', '19@gmail.com', NULL, '4', 'K-00001', 'Anggota Komisi A DPRD Kota Semarang', 'Anggota', '', '', '', 'anggota legislatif', '1'),
(20, 'dr.Wilujeng Riningrum', '', '20', '20@gmail.com', NULL, '4', NULL, '', 'Anggota', '', '', '', 'anggota legislatif', '0'),
(21, 'dr. WILUJENG RININGRUM', '', '20', '20@gmail.com', NULL, '6', 'K-00004', 'Anggota Komisi D DPRD Kota Semarang', 'Anggota', '', '', '', 'anggota legislatif', '1'),
(22, 'HERMAWAN SULIS SUSNARKO, SE', '', '21', '21@gmail.com', NULL, '6', 'K-00001', 'Anggota Komisi A DPRD Kota Semarang', 'Anggota', '', '', '', 'anggota legislatif', '1'),
(23, 'NUNUNG SRIYANTO, SH, MM', '', '22', '22@gmail.com', NULL, '6', 'K-00003', 'Anggota Komisi C DPRD Kota Semarang', 'Anggota', '', '', '', 'anggota legislatif', '1'),
(24, 'H. MUHAMMAD CHAFID', '', '23', '23@gmail.com', NULL, '6', 'K-00003', 'Anggota Komisi C DPRD Kota Semarang', 'Anggota', '', '', '', 'anggota legislatif', '1'),
(25, 'FAJAR RINAWAN SITORUS, SH', '', '24', '24@gmail.com', NULL, '4', 'K-00001', 'Anggota Komisi A DPRD Kota Semarang', 'Anggota', '', '', '', 'anggota legislatif', '1'),
(26, 'MUALIM, S.Pd, MM', '', '25', '25@gmail.com', NULL, '6', 'K-00002', 'Anggota Komisi B DPRD Kota Semarang', 'Anggota', '', '', '', 'anggota legislatif', '1'),
(27, 'V. DJOKO RIYANTO, SE', '', '26', '26@gmail.com', NULL, '4', 'K-00004', 'Anggota Komisi D DPRD Kota Semarang', 'Anggota', '', '', '', 'anggota legislatif', '1'),
(28, 'TRIFENA WEYATIN SOEHENDRO, S.Kom ', '', '28', '28@gmail.com', NULL, '4', 'K-00001', 'Anggota Komisi A DPRD Kota Semarang', 'Anggota', '', '', '', 'anggota legislatif', '1'),
(29, 'H. SUGI HARTONO, S.Sos I', '', '28', '28@gmail.com', NULL, '7', 'K-00004', 'Anggota Komisi D DPRD Kota Semarang', 'Anggota', '', '', '', 'anggota legislatif', '1'),
(30, 'HANIK KHOIRU SOLIKAH, SE', '', '29', '29@gmail.com', NULL, '4', 'K-00002', 'Anggota Komisi B DPRD Kota Semarang', 'Anggota', '', '', '', 'anggota legislatif', '1'),
(31, 'SUCIATI, SKM', '', '30', '30@gmail.com', NULL, '7', 'K-00003', 'Anggota Komisi C DPRD Kota Semarang', 'Anggota', '', '', '', 'anggota legislatif', '1'),
(32, 'Ir. H. JOHAN RIFAI', '', '31', '31@gmail.com', NULL, '3', 'K-00001', 'Anggota Komisi A DPRD Kota Semarang', 'Anggota', '', '', '', 'anggota legislatif', '1'),
(33, 'H. ARI PURBONO, SE', '', '32', '32@gmail.com', NULL, '3', 'K-00002', 'Anggota Komisi B DPRD Kota Semarang', 'Anggota', '', '', '', 'anggota legislatif', '1'),
(34, 'FRIS DWI YULIANTO, S.Pi', '', '33', '33@gmail.com', NULL, '3', 'K-00004', 'Anggota Komisi D DPRD Kota Semarang', 'Anggota', '', '', '', 'anggota legislatif', '1'),
(35, 'Hj. HESTY WAHYUNINGSIH', '', '34', '34@gmail.com', NULL, '4', 'K-00002', 'Anggota Komisi B DPRD Kota Semarang', 'Anggota', '', '', '', 'anggota legislatif', '1'),
(36, 'SUHARSONO, SS. M.Si', '', '35', '35@gmail.com', NULL, '3', 'K-00003', 'Anggota Komisi C DPRD Kota Semarang', 'Anggota', '', '', '', 'anggota legislatif', '1'),
(37, 'SOVAN HASLIN PRADANA, SE', '', '36', '36@gmail.com', NULL, '8', 'K-00001', 'Anggota Komisi A DPRD Kota Semarang', 'Anggota', '', '', '', 'anggota legislatif', '1'),
(38, 'ADIARTO SURYO KUSUMO, SH, M.Kn', '', '37', '37@gmail.com', NULL, '8', 'K-00002', 'Anggota Komisi B DPRD Kota Semarang', 'Anggota', '', '', '', 'anggota legislatif', '1'),
(39, 'DYAH RATNA HARIMURTI, S.Sos', '', '38', '38@gmail.com', NULL, '4', 'K-00004', 'Anggota Komisi D DPRD Kota Semarang', 'Anggota', '', '', '', 'anggota legislatif', '1'),
(40, 'H. DIBYO SUTIMAN, SH', '', '39', '39@gmail.com', NULL, '4', 'K-00003', 'Anggota Komisi C DPRD Kota Semarang', 'Anggota', '', '', '', 'anggota legislatif', '1'),
(41, 'H. HASAN BISRI', '', '40', '40@gmail.com', NULL, '9', 'K-00003', 'Anggota Komisi C DPRD Kota Semarang', 'Anggota', '', '', '', 'anggota legislatif', '1'),
(42, 'EVI RAHMAWATI, S.Pd. I', '', '41', '41@gmail.com', NULL, '8', 'K-00004', 'Anggota Komisi D DPRD Kota Semarang', 'Anggota', '', '', '', 'anggota legislatif', '1'),
(43, 'GIYANTO', '', '42', '42@gmail.com', NULL, '4', 'K-00003', 'Anggota Komisi C DPRD Kota Semarang', 'Anggota', '', '', '', 'anggota legislatif', '1'),
(44, 'NABILA', '', '43', '43@gmail.com', NULL, '5', 'K-00002', 'Anggota Komisi B DPRD Kota Semarang', 'Anggota', '', '', '', 'anggota legislatif', '1'),
(45, 'WISNU PUDJONGGO, SH', '', '44', '44@gmail.com', NULL, '5', 'K-00001', 'Anggota Komisi A DPRD Kota Semarang', 'Anggota', '', '', '', 'anggota legislatif', '1'),
(46, 'H. AGUNG PRIYAMBODO, SE, ST', '', '45', '45@gmail.com', NULL, '5', 'K-00002', 'Anggota Komisi B DPRD Kota Semarang', 'Anggota', '', '', '', 'anggota legislatif', '1'),
(47, 'DR. H. ANANG BUDI UTOMO, SMn, S.Pd, M.Pd', '', '46', '46@gmail.com', NULL, '5', 'K-00004', 'Anggota Komisi D DPRD Kota Semarang', 'Anggota', '', '', '', 'anggota legislatif', '1'),
(48, 'H. SYAHRUL QIROM, ST', '', '47', '47@gmail.com', NULL, '2', 'K-00002', 'Anggota Komisi B DPRD Kota Semarang', 'Anggota', '', '', '', 'anggota legislatif', '1'),
(49, 'H. SODRI, SH', '', '48', '48@gmail.com', NULL, '2', 'K-00003', 'Anggota Komisi C DPRD Kota Semarang', 'Anggota', '', '', '', 'anggota legislatif', '1'),
(50, 'H. MOH ROHAINI', '', '49', '49@gmail.com', NULL, '2', 'K-00004', 'Anggota Komisi D DPRD Kota Semarang', 'Anggota', '', '', '', 'anggota legislatif', '1'),
(51, 'Linna Aliana, Sh', '', '50', '50@gmail.com', NULL, '2', NULL, '', 'Anggota', '', '', '', 'anggota legislatif', '0'),
(52, 'LINNA ALIANA, SH', '', '50', '50@gmail.com', NULL, '2', 'K-00001', 'Anggota Komisi A DPRD Kota Semarang', 'Anggota', '', '', '', 'anggota legislatif', '1'),
(53, 'Ir. EKO CAHYONO, M.T', '196001041988031001', '', '', NULL, NULL, NULL, '', 'Sekretaris DPRD Kota Semarang', 'IV / c', 'Pembina Utama Muda', '', 'bukan anggota legislatif', '1'),
(54, 'Drs. JOKO PURWANTO, MM', '196509201992031012', '', '', NULL, NULL, NULL, '', 'Kepala Bagian Persidangan dan Perundang-undangan Sekretariat DPRD Kota Semarang', 'IV / a', 'Pembina', '', 'bukan anggota legislatif', '1'),
(55, 'Dra. DWI MARIASTOETI', '196509021994022001', '', '', NULL, NULL, NULL, '', 'Kepala Bagian Perencanaan dan Keuangan Sekretariat DPRD Kota Semarang', 'IV / a', 'Pembina', '', 'bukan anggota legislatif', '1'),
(56, 'Dra. SRI KUSDIYANTI, MM', '196305051990092001', '', '', NULL, NULL, NULL, '', 'Kepala Bagian Umum Sekretariat', 'IV / b', 'Pembina Tk.I', '', 'bukan anggota legislatif', '1'),
(57, 'Ir. PURNOMO DWI SASONGKO, MT, MM', '196605231991011001', '', '', NULL, NULL, NULL, '', 'Kepala Bagian Hubungan Masyarakat Sekretariat', 'IV / b', 'Pembina Tk.I', '', 'bukan anggota legislatif', '1'),
(58, 'KOMARA YUNI ARMI, S.Ip', '196406141986082002', '', '', NULL, NULL, NULL, '', 'Kepala Sub Bagian Rumah Tangga Pada Bagian Umum Sekretariat', 'III / d', 'Penata Tk.I', '', 'bukan anggota legislatif', '1'),
(59, 'PULUNG BRAHMANTYO, S.H, S.P.N, MM', '196508181992031016', '', '', NULL, NULL, NULL, '', 'Kepala Sub Bagian Perlengkapan dan Aset pada Bagian Umum Sekretariat', 'IV / a', 'Pembina', '', 'bukan anggota legislatif', '1'),
(60, 'Drs. I NENGAH GUNADA, M.Si', '196310171998031005', '', '', NULL, NULL, NULL, '', 'Kepala Sub Bagian Evaluasi dan Pelaporan pada Bagian Perencanaan dan Keuangan Sekretariat', 'IV / a', 'Pembina', '', 'bukan anggota legislatif', '1'),
(61, 'SRI PUJININGSIH, SE', '19701006199203006', '', '', NULL, NULL, NULL, '', 'Kepala Sub Bagian Tata Usaha dan Kepegawaian pada Bagian Umum Sekretariat', 'III / c', 'Penata', '', 'bukan anggota legislatif', '1'),
(62, 'VICTORIA SRI REDJEKI, SE, MM', '197111091997032007', '', '', NULL, NULL, NULL, '', 'Kepala Sub Bagian Program dan Anggaran pada Bagian Perencanaan dan Keuangan Sekretariat', 'III / d', 'Penata Tk.I', '', 'bukan anggota legislatif', '1'),
(63, 'YUNI ARTATI, SE', '197510292010012005', '', '', NULL, NULL, NULL, '', 'Kepala Bagian Sub Penatausahaan Keuangan pada Bagian Perencanaan dan Keuangan Sekretariat', 'III / b', 'Penata Muda Tk.I', '', 'bukan anggota legislatif', '1'),
(64, 'SURYA PRANATA, S.Sos', '196308261992081001', '', '', NULL, NULL, NULL, '', 'Staf Sub Bag Kajian Hukum dan Perundang-undangan pada Bagian Persidangan dan Perundangan-undang Sekr', 'III / d', 'Penata Tk.I', '', 'bukan anggota legislatif', '1'),
(65, 'TITIK  YULIANI, SE', '196107251986092001', '', '', NULL, NULL, NULL, '', 'Kepala Sub Bagian Risalah pada Bagian Persidangan dan Perundang-undangan Sekretariat', 'III / d', 'Penata Tk.I', '', 'bukan anggota legislatif', '1'),
(66, 'HENDRATMOKO, SE', '1964111071990031012', '', '', NULL, NULL, NULL, '', 'Staf Sub Bagian Persidangan pada Bagian Persidangan dan Perundang-undangan Sekretariat', 'III / d', 'Penata Tk.I', '', 'bukan anggota legislatif', '1'),
(67, 'ENY SUWARTININGSIHRUM, SE', '196505051988032030', '', '', NULL, NULL, NULL, '', 'Kepala Sub Bagian Protokol Pada Bagian Hubungan Masyarakat Sekretariat', 'III / d', 'Penata Tk.I', '', 'bukan anggota legislatif', '1'),
(68, 'Drs. I NENGAH GUNADA, M.Si.', '196310171998031005', '', '', NULL, NULL, NULL, '', 'Kepala Sub Bagian Evaluasi dan Pelaporan pada Bagian Perencanaan dan Keuangan Sekretariat', 'IV / a', 'Pembina', '', 'bukan anggota legislatif', '1'),
(69, 'SRI PUJININGSIH, SE.', '197010061992032006', '', '', NULL, NULL, NULL, '', 'Kepala Sub Bagian Tata Usaha dan Kepegawaian pada Bagian Umum Sekretariat', 'III / c', 'Penata ', '', 'bukan anggota legislatif', '1'),
(70, 'VICTORIA SRI REDJEKI, SE, MM', '197111091997032007', '', '', NULL, NULL, NULL, '', 'Kepala Sub Bagian Program dan Anggaran pada Bagian Perencanaan dan Keuangan Sekretariat', 'III / d', 'Penata Tk. I', '', 'bukan anggota legislatif', '1'),
(71, 'YUNI ARTATI, SE', '197510292010012005', '', '', NULL, NULL, NULL, '', 'Kepala Sub Bagian Penatausahaan Keuangan pada Bagian Perencanaan dan Keuangan Sekretariat ', 'III / c', 'Penata', '', 'bukan anggota legislatif', '1'),
(72, 'SURYA PRANATA, S.Sos.', '196308261992081001', '', '', NULL, NULL, NULL, '', 'Kepala Sub Bagian Kajian Hukum dan Perundang-undangan pada Bagian Persidangan dan Perundang-undangan', 'III / d', 'Penata Tk.I', '', 'bukan anggota legislatif', '1'),
(73, 'TITIK YULIANI, SE.', '196107251986092001', '', '', NULL, NULL, NULL, '', 'Kepala Sub Bagian Risalah pada Bagian Persidangan dan Perundang-undangan Sekretariat', 'III / d', 'Penata Tk.I', '', 'bukan anggota legislatif', '1'),
(74, 'HENDRATMOKO, SE', '196411071990031012', '', '', NULL, NULL, NULL, '', 'Staf Sub Bagian Persidangan pada Bagian Persidangan dan Perundang-undangan Sekretariat', 'III / d', 'Penata Tk. I', '', 'bukan anggota legislatif', '1'),
(75, 'ENY SUWARTININGRUM, SE', '196505051988032030', '', '', NULL, NULL, NULL, '', 'Kepala Sub Bagian Protokol pada Bagian Hubungan Masyarakat Sekretariat', 'III / d', 'Penata Tk. I', '', 'bukan anggota legislatif', '1'),
(76, 'BAGUS SANTOSO, S.STP, MM.', '198603092004121002', '', '', NULL, NULL, NULL, '', 'Kepala Sub Bagian Pemberitaan pada Bagian Hubungan Masyarakat Sekretariat', 'III / c', 'Penata ', '', 'bukan anggota legislatif', '1'),
(77, 'MARGARETHA SULISTYOWATI, SE', '196311141989032007', '', '', NULL, NULL, NULL, '', 'Staf Sub Bagian Penatausahaan Keuangan pada Bagian Perencanaan dan Keuangan Sekretariat', 'III / c', 'Penata ', '', 'bukan anggota legislatif', '1'),
(78, 'NURAINI SOFIA, SE.', '197009051996032001', '', '', NULL, NULL, NULL, '', 'Kepala Sub Bagian Peliputan dan Dokumentasi pada Bagian Hubungan Masyarakat Sekretariat', 'III / d', 'Penata Tk. I', '', 'bukan anggota legislatif', '1'),
(79, 'CATUR WULANSARI, S.Kom.', '197908071998032001', '', '', NULL, NULL, NULL, '', 'Staf Sub Bagian Tata Usaha dan Kepegawaian pada Bagian Umum Sekretariat', 'III / d', 'Penata Tk. I', '', 'bukan anggota legislatif', '1'),
(80, 'NUR MAULITA, SH', '197404062006042007', '', '', NULL, NULL, NULL, '', 'Staf Sub Bagian Persidangan pada Bagian Persidangan dan Perundang-undangan Sekretariat', 'III / d', 'Penata Tk. I', '', 'bukan anggota legislatif', '1'),
(81, 'RUSMINI, SE', '197206052008012013', '', '', NULL, NULL, NULL, '', 'Staf Sub Bagian Persidangan pada Bagian Persidangan dan Perundang-undangan Sekretariat', 'III / a', 'Penata Muda', '', 'bukan anggota legislatif', '1'),
(82, 'EKO LAKSONO, A.Md', '197304012010011001', '', '', NULL, NULL, NULL, '', 'Staf Sub Bagian Persidangan pada Bagian Persidangan dan Perundang-undangan Sekretariat', 'II / d', 'Pengatur Tk. I', '', 'bukan anggota legislatif', '1'),
(83, 'MUHAMMAD ALI', '196110251993101001', '', '', NULL, NULL, NULL, '', 'Staf Sub Bagian Persidangan pada Bagian Persidangan dan Perundang-undangan Sekretariat', 'III / b', 'Penata Muda Tk. I', '', 'bukan anggota legislatif', '1'),
(84, 'SURYA HARTATI, S.Sos.', '197710212008012003', '', '', NULL, NULL, NULL, '', 'Staf Sub Bagian Persidangan pada Bagian Persidangan dan Perundang-undangan Sekretariat', 'III / c', 'Penata', '', 'bukan anggota legislatif', '1'),
(85, 'R A H A R D J O', '196404091993101001', '', '', NULL, NULL, NULL, '', 'Staf Sub Bagian Peliputan dan Dokumentasi pada Bagian Hubungan Masyarakat Sekretariat', 'III / b', 'Penata Muda Tk. I', '', 'bukan anggota legislatif', '1'),
(86, 'SEKHA YUSFI', '197304121994032001', '', '', NULL, NULL, NULL, '', 'Staf Sub Bagian Persidangan pada Bagian Persidangan dan Perundang-undangan Sekretariat', 'III / b', 'Penata Muda Tk. I', '', 'bukan anggota legislatif', '1'),
(87, 'DIAH PRAWATI, S.IP.', '198612122010012033', '', '', NULL, NULL, NULL, '', 'Staf Sub Bagian Kajian Hukum dan Perundang-undangan pada Bagian Persidangan dan Perundang-undangan S', 'III / c', 'Penata', '', 'bukan anggota legislatif', '1'),
(88, 'ANDI A. F. SUKONYONO, S.Sos', '197011291995031002', '', '', NULL, NULL, NULL, '', 'Staf Sub Bagian Program dan Anggaran pada Bagian Perencanaan dan Keuangan Sekretariat', 'III / b', 'Penata Muda Tk. I', '', 'bukan anggota legislatif', '1'),
(89, 'UTAMI DIAN YUSTIANI, SE, MM.', '198002042011012007', '', '', NULL, NULL, NULL, '', 'Staf Sub Bagian Evaluasi dan Pelaporan pada Bagian Perencanaan dan Keuangan Sekretariat', 'III / b', 'Penata Muda Tk. I', '', 'bukan anggota legislatif', '1'),
(90, 'IMAN SOLICHIN, SE', '196910202007011027', '', '', NULL, NULL, NULL, '', 'Staf Sub Bagian Tata Usaha dan Kepegawaian pada Bagian Umum Sekretariat', 'III / a', 'Penata Muda ', '', 'bukan anggota legislatif', '1'),
(91, 'ARDIAN WIDIARDI, A.Md', '198612032010011010', '', '', NULL, NULL, NULL, '', 'Staf Sub Bagian Persidangan pada Bagian Persidangan dan Perundang-undangan Sekretariat', 'II / d', 'Pengatur Tk. I', '', 'bukan anggota legislatif', '1'),
(92, 'EKO HADI SUNARYO, ST.', '198012082006041010', '', '', NULL, NULL, NULL, '', 'Staf Sub Bagian Rumah Tangga pada Bagian Umum Sekretariat', 'III/ a', 'Penata Muda ', '', 'bukan anggota legislatif', '1'),
(93, 'MAHARYANI OCTARIA, S.AP.', '198410082010012001', '', '', NULL, NULL, NULL, '', 'Staf Sub Bagian Protokol pada Bagian Hubungan Masyarakat Sekretariat', 'III/ a', 'Penata Muda ', '', 'bukan anggota legislatif', '1'),
(94, 'RODLIYAH, SE', '197102082007012011', '', '', NULL, NULL, NULL, '', 'Staf Sub Bagian Tata Usaha dan Kepegawaian pada Bagian Umum Sekretariat', 'III/ a', 'Penata Muda ', '', 'bukan anggota legislatif', '1'),
(95, 'ACHMAD BUDIONO, SM', '197403041996121001', '', '', NULL, NULL, NULL, '', 'Staf Sub Bagian Penatausahaan Keuangan pada Bagian Perencanaan dan Keuangan Sekretariat', 'III/ a', 'Penata Muda', '', 'bukan anggota legislatif', '1'),
(96, 'NOVI TRI SURYANI, A.Md.', '197811102011012005', '', '', NULL, NULL, NULL, '', 'Staf Sub Bagian Pemberitaan pada Hubungan Masyarakat Sekretariat', 'II / d', 'Pengatur Tk. I', '', 'bukan anggota legislatif', '1'),
(97, 'ANANGGA SUSILO EDINOMO, A.Md.', '198406132011011010', '', '', NULL, NULL, NULL, '', 'Staf Sub Bagian Penatausahaan Keuangan pada Bagian Perencanaan dan Keuangan Sekretariat', 'II / d', 'Pengatur Tk. I', '', 'bukan anggota legislatif', '1'),
(98, 'RINA DEWI, A.Md, S.I.Kom.', '198112072010012003', '', '', NULL, NULL, NULL, '', 'Staf Sub Bagian Pemberitaan pada Hubungan Masyarakat Sekretariat', 'III / a', 'Penata Muda ', '', 'bukan anggota legislatif', '1'),
(99, 'S U M I A H, SE', '196802042007012014', '', '', NULL, NULL, NULL, '', 'Staf Sub Bagian Rumah Tangga pada Bagian Umum Sekretariat', 'III / a', 'Penata Muda ', '', 'bukan anggota legislatif', '1'),
(100, 'J O E N A R T O', '196906192009011002', '', '', NULL, NULL, NULL, '', 'Staf Sub Bagian Rumah Tangga pada Bagian Umum Sekretariat', 'II / b', 'Pengatur Muda Tk. I', '', 'bukan anggota legislatif', '1'),
(101, 'AGUS PRASETYO', '197108022009011002', '', '', NULL, NULL, NULL, '', 'Staf Sub Bagian Tata Usaha dan Kepegawaian pada Bagian Umum Sekretariat', 'II / b', 'Pengatur Muda Tk. I', '', 'bukan anggota legislatif', '1'),
(102, 'MUSLIKUN, SM', '196809052009011002', '', '', NULL, NULL, NULL, '', 'Staf Sub Bagian Risalah pada Bagian Persidangan dan Perundang-undangan Sekretariat', 'III / a', 'Pengatur Muda Tk. I', '', 'bukan anggota legislatif', '1'),
(103, 'A\'ANG MOCHTAR YAKA', '197604222011011004', '', '', NULL, NULL, NULL, '', 'Staf Sub Bagian Tata Usaha dan Kepegawaian pada Bagian Umum Sekretariat', 'II / b', 'Pengatur Muda Tk. I', '', 'bukan anggota legislatif', '1'),
(104, 'MIFTACHUL HUDA', '198504042011011010', '', '', NULL, NULL, NULL, '', 'Staf Sub Bagian Perlengkapan dan Aset pada Bagian Umum Sekretariat', 'II / b', 'Pengatur Muda Tk. I', '', 'bukan anggota legislatif', '1'),
(105, 'DADI RASMANTO', '196102231985111001', '', '', NULL, NULL, NULL, '', 'Staf Sub Bagian Rumah Tangga pada Bagian Umum Sekretariat', 'II / a', 'Pengatur Muda ', '', 'bukan anggota legislatif', '1'),
(106, 'M. KAMDAN FAI\'ZIN', '198502072010011003', '', '', NULL, NULL, NULL, '', 'Staf Sub Bagian Tata Usaha dan Kepegawaian pada Bagian Umum Sekretariat', 'II / a', 'Pengatur Muda ', '', 'bukan anggota legislatif', '1'),
(107, 'MISNAHWATI', '196107232006042002', '', '', NULL, NULL, NULL, '', 'Staf Sub Bagian Rumah Tangga pada Bagian Umum Sekretariat', 'II / b', 'Pengatur Muda Tk.I', '', 'bukan anggota legislatif', '1'),
(108, 'M U R S I D I', '197006022010011001', '', '', NULL, NULL, NULL, '', 'Staf Sub Bagian Protokol pada Bagian Hubungan Masyarakat Sekretariat', 'II / a', 'Pengatur Muda ', '', 'bukan anggota legislatif', '1'),
(109, 'D A R M O N O', '197404222010011001', '', '', NULL, NULL, NULL, '', 'Staf Sub Bagian Tata Usaha dan Kepegawaian pada Bagian Umum Sekretariat', 'II / a', 'Pengatur Muda ', '', 'bukan anggota legislatif', '1'),
(110, 'ANIK WIDIASTOETI, SE', '0', '', '', NULL, NULL, NULL, '', 'Staf Sub Bagian Perlengkapan dan Aset pada Bagian Umum Sekretariat', '0', '0', '', 'bukan anggota legislatif', '1'),
(111, 'H A R T I N I', '196604012007012012', '', '', NULL, NULL, NULL, '', 'Staf Sub Bagian Evaluasi dan Pelaporan pada Bagian Perencanaan dan Keuangan Sekretariat DPRD Kota Semarang', 'II / a', 'Pengatur Muda', '', 'bukan anggota legislatif', '1'),
(112, 'ALOUSYUS PUJI RAHARJO, SH, SpN', '196405081993021002', '', '', NULL, NULL, NULL, '', 'Kepala Sub Bagian Persidangan pada Bagian Persidangan dan Perundang-undangan Sekretariat', 'III / d', 'Penata Tk. I', '', 'bukan anggota legislatif', '1'),
(113, 'DWI HARTANTO', '0', '', '', NULL, NULL, NULL, '', 'Pengemudi Sekretariat DPRD Semarang', '0', 'Staf', '', 'bukan anggota legislatif', '1'),
(114, 'LILIK KUSTANTO', '0', '', '', NULL, NULL, NULL, '', 'Pengemudi Sekretariat DPRD Semarang', '0', 'Staf', '', 'bukan anggota legislatif', '1');

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
(1, 'B-00001', 1, 'Ketua DPRD Kota Semarang'),
(2, 'B-00001', 2, 'Wakil Ketua DPRD Kota Semarang '),
(3, 'B-00001', 3, 'Wakil Ketua DPRD Kota Semarang'),
(4, 'B-00001', 4, 'Wakil Ketua DPRD Kota Semarang'),
(5, 'B-00001', 12, 'Ketua Badan Pembentukan Peraturan Daerah'),
(6, 'B-00001', 40, 'Wakil Ketua Badan Pembentukan Peraturan Daerah'),
(7, 'B-00001', 21, 'Anggota Badan Pembentukan Peraturan Daerah'),
(8, 'B-00001', 25, 'Anggota Badan Pembentukan Peraturan Daerah'),
(9, 'B-00001', 29, 'Anggota Badan Pembentukan Peraturan Daerah'),
(10, 'B-00001', 31, 'Anggota Badan Pembentukan Peraturan Daerah'),
(11, 'B-00001', 33, 'Anggota Badan Pembentukan Peraturan Daerah'),
(12, 'B-00001', 36, 'Anggota Badan Pembentukan Peraturan Daerah'),
(13, 'B-00001', 37, 'Anggota Badan Pembentukan Peraturan Daerah'),
(14, 'B-00001', 9, 'Anggota Badan Pembentukan Peraturan Daerah'),
(15, 'B-00001', 43, 'Anggota Badan Pembentukan Peraturan Daerah'),
(16, 'B-00001', 45, 'Anggota Badan Pembentukan Peraturan Daerah'),
(17, 'B-00001', 52, 'Anggota Badan Pembentukan Peraturan Daerah'),
(18, 'B-00002', 1, 'Ketua DPRD Kota Semarang'),
(19, 'B-00002', 2, 'Wakil Ketua DPRD Kota Semarang'),
(20, 'B-00002', 3, 'Wakil Ketua DPRD Kota Semarang'),
(21, 'B-00002', 4, 'Wakil Ketua DPRD Kota Semarang'),
(22, 'B-00002', 5, 'Anggota Badan Anggaran'),
(23, 'B-00002', 6, 'Anggota Badan Anggaran'),
(24, 'B-00002', 8, 'Anggota Badan Anggaran'),
(25, 'B-00002', 10, 'Anggota Badan Anggaran'),
(26, 'B-00002', 12, 'Anggota Badan Anggaran'),
(27, 'B-00002', 14, 'Anggota Badan Anggaran'),
(28, 'B-00002', 16, 'Anggota Badan Anggaran'),
(29, 'B-00002', 22, 'Anggota Badan Anggaran'),
(30, 'B-00002', 24, 'Anggota Badan Anggaran'),
(31, 'B-00002', 26, 'Anggota Badan Anggaran'),
(32, 'B-00002', 27, 'Anggota Badan Anggaran'),
(33, 'B-00002', 30, 'Anggota Badan Anggaran'),
(34, 'B-00002', 35, 'Anggota Badan Anggaran'),
(35, 'B-00002', 36, 'Anggota Badan Anggaran'),
(36, 'B-00002', 39, 'Anggota Badan Anggaran'),
(37, 'B-00002', 40, 'Anggota Badan Anggaran'),
(38, 'B-00002', 46, 'Anggota Badan Anggaran'),
(39, 'B-00002', 47, 'Anggota Badan Anggaran'),
(40, 'B-00002', 48, 'Anggota Badan Anggaran'),
(41, 'B-00002', 49, 'Anggota Badan Anggaran'),
(42, 'B-00003', 1, 'Ketua DPRD Kota Semarang'),
(43, 'B-00003', 2, 'Wakil Ketua DPRD Kota Semarang'),
(44, 'B-00003', 3, 'Wakil Ketua DPRD Kota Semarang'),
(45, 'B-00003', 4, 'Wakil Ketua DPRD Kota Semarang'),
(46, 'B-00003', 7, 'Anggota Badan Musyawarah'),
(47, 'B-00003', 11, 'Anggota Badan Musyawarah'),
(48, 'B-00003', 13, 'Anggota Badan Musyawarah'),
(49, 'B-00003', 17, 'Anggota Badan Musyawarah'),
(50, 'B-00003', 18, 'Anggota Badan Musyawarah'),
(51, 'B-00003', 19, 'Anggota Badan Musyawarah'),
(52, 'B-00003', 21, 'Anggota  Badan Musyawarah'),
(53, 'B-00003', 23, 'Anggota Badan Musyawarah'),
(54, 'B-00003', 25, 'Anggota Badan Musyawarah'),
(55, 'B-00003', 28, 'Anggota Badan Musyawarah'),
(56, 'B-00003', 29, 'Anggota Badan Musyawarah'),
(57, 'B-00003', 32, 'Anggota Badan Musyawarah'),
(58, 'B-00003', 33, 'Anggota Badan Musyawarah'),
(59, 'B-00003', 38, 'Anggota Badan Musyawarah'),
(60, 'B-00003', 42, 'Anggota Badan Musyawarah'),
(61, 'B-00003', 44, 'Anggota Badan Musyawarah'),
(62, 'B-00003', 47, 'Anggota Badan Musyawarah'),
(63, 'B-00003', 50, 'Anggota Badan Musyawarah'),
(64, 'B-00003', 52, 'Anggota Badan Musyawarah'),
(65, 'B-00004', 14, 'Anggota'),
(66, 'B-00004', 23, 'Wakil Ketua'),
(67, 'B-00004', 31, 'Anggota'),
(68, 'B-00004', 34, 'Ketua'),
(69, 'B-00004', 41, 'Anggota');

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
(1, 'P-00001', 1, 'Ketua DPRD Kota Semarang'),
(2, 'P-00001', 2, 'Wakil Ketua DPRD Kota Semarang'),
(3, 'P-00001', 3, 'Wakil Ketua DPRD Kota Semarang'),
(4, 'P-00001', 4, 'Wakil Ketua DPRD Kota Semarang'),
(5, 'P-00001', 7, 'Anggota Pansus Pembentukan BPR Syariah'),
(6, 'P-00001', 10, 'Anggota Pansus Pembentukan BPR Syariah'),
(7, 'P-00001', 11, 'Anggota Pansus Pembentukan BPR Syariah'),
(8, 'P-00001', 14, 'Anggota Pansus Pembentukan BPR Syariah'),
(9, 'P-00001', 18, 'Anggota Pansus Pembentukan BPR Syariah'),
(10, 'P-00001', 21, 'Anggota Pansus Pembentukan BPR Syariah'),
(11, 'P-00001', 24, 'Anggota Pansus Pembentukan BPR Syariah'),
(12, 'P-00001', 29, 'Anggota Pansus Pembentukan BPR Syariah'),
(13, 'P-00001', 31, 'Anggota Pansus Pembentukan BPR Syariah'),
(14, 'P-00001', 33, 'Anggota Pansus Pembentukan BPR Syariah'),
(15, 'P-00001', 36, 'Anggota Pansus Pembentukan BPR Syariah'),
(16, 'P-00001', 39, 'Anggota Pansus Pembentukan BPR Syariah'),
(17, 'P-00001', 41, 'Anggota Pansus Pembentukan BPR Syariah'),
(18, 'P-00001', 44, 'Anggota Pansus Pembentukan BPR Syariah'),
(19, 'P-00001', 47, 'Anggota Pansus Pembentukan BPR Syariah'),
(20, 'P-00001', 48, 'Anggota Pansus Pembentukan BPR Syariah'),
(21, 'P-00002', 1, 'Ketua DPRD Kota Semarang'),
(22, 'P-00002', 2, 'Wakil Ketua DPRD Kota Semarang'),
(23, 'P-00002', 3, 'Wakil Ketua DPRD Kota Semarang'),
(24, 'P-00002', 4, 'Wakil Ketua DPRD Kota Semarang'),
(25, 'P-00002', 5, 'Anggota Panitia Khusus Dewan Perwakilan Rakyat Daerah Kota Semarang dalam rangka membahas Rancangan Peraturan Daerah Kota Semarang tentang Pertanggungjawaban Pelaksanaan APBD Kota Semarang TA 2017'),
(26, 'P-00002', 8, 'Sekretaris Panitia Khusus Dewan Perwakilan Rakyat Daerah Kota Semarang dalam rangka membahas Rancangan Peraturan Daerah Kota Semarang tentang Pertanggungjawaban Pelaksanaan APBD Kota Semarang TA 2017'),
(27, 'P-00002', 9, 'Anggota Panitia Khusus Dewan Perwakilan Rakyat Daerah Kota Semarang dalam rangka membahas Rancangan Peraturan Daerah Kota Semarang tentang Pertanggungjawaban Pelaksanaan APBD Kota Semarang TA 2017'),
(28, 'P-00002', 14, 'Ketua Panitia Khusus Dewan Perwakilan Rakyat Daerah Kota Semarang dalam rangka membahas Rancangan Peraturan Daerah Kota Semarang tentang Pertanggungjawaban Pelaksanaan APBD Kota Semarang TA 2017'),
(29, 'P-00002', 15, 'Wakil Ketua Panitia Khusus Dewan Perwakilan Rakyat Daerah Kota Semarang dalam rangka membahas Rancangan Peraturan Daerah Kota Semarang tentang Pertanggungjawaban Pelaksanaan APBD Kota Semarang TA 2017'),
(30, 'P-00002', 18, 'Anggota Panitia Khusus Dewan Perwakilan Rakyat Daerah Kota Semarang dalam rangka membahas Rancangan Peraturan Daerah Kota Semarang tentang Pertanggungjawaban Pelaksanaan APBD Kota Semarang TA 2'),
(31, 'P-00002', 22, 'Anggota Panitia Khusus Dewan Perwakilan Rakyat Daerah Kota Semarang dalam rangka membahas Rancangan Peraturan Daerah Kota Semarang tentang Pertanggungjawaban Pelaksanaan APBD Kota Semarang TA 2'),
(32, 'P-00002', 23, 'Anggota Panitia Khusus Dewan Perwakilan Rakyat Daerah Kota Semarang dalam rangka membahas Rancangan Peraturan Daerah Kota Semarang tentang Pertanggungjawaban Pelaksanaan APBD Kota Semarang TA 2'),
(33, 'P-00002', 25, 'Anggota Panitia Khusus Dewan Perwakilan Rakyat Daerah Kota Semarang dalam rangka membahas Rancangan Peraturan Daerah Kota Semarang tentang Pertanggungjawaban Pelaksanaan APBD Kota Semarang TA 2017'),
(34, 'P-00002', 27, 'Anggota Panitia Khusus Dewan Perwakilan Rakyat Daerah Kota Semarang dalam rangka membahas Rancangan Peraturan Daerah Kota Semarang tentang Pertanggungjawaban Pelaksanaan APBD Kota Semarang TA 2017'),
(35, 'P-00002', 29, 'Anggota Panitia Khusus Dewan Perwakilan Rakyat Daerah Kota Semarang dalam rangka membahas Rancangan Peraturan Daerah Kota Semarang tentang Pertanggungjawaban Pelaksanaan APBD Kota Semarang TA 2'),
(36, 'P-00002', 32, 'Anggota Panitia Khusus Dewan Perwakilan Rakyat Daerah Kota Semarang dalam rangka membahas Rancangan Peraturan Daerah Kota Semarang tentang Pertanggungjawaban Pelaksanaan APBD Kota Semarang TA 2'),
(37, 'P-00002', 38, 'Anggota Panitia Khusus Dewan Perwakilan Rakyat Daerah Kota Semarang dalam rangka membahas Rancangan Peraturan Daerah Kota Semarang tentang Pertanggungjawaban Pelaksanaan APBD Kota Semarang TA 2017'),
(38, 'P-00002', 45, 'Anggota Panitia Khusus Dewan Perwakilan Rakyat Daerah Kota Semarang dalam rangka membahas Rancangan Peraturan Daerah Kota Semarang tentang Pertanggungjawaban Pelaksanaan APBD Kota Semarang TA 2'),
(39, 'P-00002', 49, 'Anggota Panitia Khusus Dewan Perwakilan Rakyat Daerah Kota Semarang dalam rangka membahas Rancangan Peraturan Daerah Kota Semarang tentang Pertanggungjawaban Pelaksanaan APBD Kota Semarang TA 2'),
(40, 'P-00002', 11, 'Anggota Panitia Khusus Dewan Perwakilan Rakyat Daerah Kota Semarang dalam rangka membahas Rancangan Peraturan Daerah Kota Semarang tentang Pertanggungjawaban Pelaksanaan APBD Kota Semarang TA 2017');

-- --------------------------------------------------------

--
-- Struktur dari tabel `badan`
--

CREATE TABLE `badan` (
  `id` int(9) NOT NULL,
  `id_badan` varchar(7) NOT NULL,
  `nama_badan` varchar(200) NOT NULL,
  `keterangan` varchar(1000) NOT NULL,
  `tanggal_buat` date NOT NULL,
  `tanggal_selesai` date NOT NULL,
  `status` enum('1','0') NOT NULL,
  `hasil` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `badan`
--

INSERT INTO `badan` (`id`, `id_badan`, `nama_badan`, `keterangan`, `tanggal_buat`, `tanggal_selesai`, `status`, `hasil`) VALUES
(1, 'B-00001', 'BADAN PEMBENTUKAN PERDA', 'BPP DPRD KOTA SEMARANG', '2018-05-09', '0000-00-00', '1', ''),
(2, 'B-00002', 'BADAN ANGGARAN', 'BADAN ANGGARAN MEMPUNYAI TUGAS :     –      memberikan saran dan pendapat berupa pokok – pokok pikiran DPRD kepada Walikota dalam mempersiapkan rancangan APBD;  –      melakukan konsultasi kepada komisi terkait untuk memperoleh masukan dalam rangka pembahasan rancangan KUA PPAS;  –      memberikan saran dan pendapat kepada DPRD mengenai pra rancangan APBD, rancangan APBD baik penetapan, perubahan dan perhitungan APBD yang telah disampaikan oleh Walikota;  –      melakukan penyempurnaan rancangan peraturan daerah tentang APBD dan rancangan peraturan daerah tentang pertanggungjawaban pelaksanaan APBD berdasarkan hasil evaluasi Gubernur bersama Tim Anggaran Pemerintah Daerah.  –      melakukan pembahasan bersama tim anggaran pemerintah daerah terhadap KUA PPAS yang disampaikan oleh Walikota; dan  –      memberikan saran kepada pimpinan DPRD dalam penyusunan anggaran belanja DPRD.', '2018-05-09', '0000-00-00', '1', ''),
(3, 'B-00003', 'BADAN MUSYAWARAH', 'BADAN MUSYAWARAH DPRD Kota Semarang', '2018-05-09', '0000-00-00', '1', ''),
(4, 'B-00004', 'BADAN KEHORMATAN', 'BADAN KEHORMATAN DPRD KOTA SEMARANG', '2018-07-10', '0000-00-00', '1', '');

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
(1, 'J-00001', 'Peraturan Daerah Kota Semarang Nomor 11 Tahun 2018 tentang Anggaran Pendapatan dan Belanja Daerah Kota Semarang Tahun 2019'),
(2, 'J-00001', 'Surat Badan Anggaran DPRD Kota Semarang Nomor : 02/BANGGAR/DPRD/2018  tanggal  21 Januari 2019 perihal Rencana Kunjungan Kerja Badan Anggaran DPRD Kota Semarang'),
(3, 'J-00002', '2. Surat Badan Anggaran DPRD Kota Semarang Nomor : 04/BANGGAR/DPRD/2019  tanggal 21 Februari 2019 perihal Rencana Kunjungan Kerja Badan Anggaran DPRD Kota Semarang'),
(4, 'J-00003', '2. Surat Badan Anggaran DPRD Kota Semarang Nomor : 8/BANGGAR/DPRD/2019  tanggal 25 April 2019 perihal Rencana Kunjungan Kerja Badan Anggaran DPRD Kota Semarang'),
(5, 'J-00004', '2. Surat Badan Anggaran DPRD Kota Semarang Nomor : 12/BANGGAR/DPRD/2019  tanggal 10 Juni 2019 perihal Kunjungan Kerja Badan Anggaran DPRD Kota Semarang'),
(6, 'J-00005', '2. Surat Badan Anggaran DPRD Kota Semarang Nomor : 14/BANGGAR/DPRD/2019  tanggal 11 Juni 2019 perihal Kunjungan Kerja Badan Anggaran DPRD Kota Semarang'),
(7, 'J-00006', '2. Surat Walikota Semarang Nomor : 070/3733  tanggal 19 Juni 2019 perihal Permohonan Pendampingan Kunjungan Kerja Badan Anggaran DPRD Kota Semarang'),
(8, 'J-00007', '2. Surat Badan Kehormatan DPRD Kota Semarang Nomor : 1 / BK / DPRD / 2019 tanggal              31 Januari 2019 perihal Rencana Kunjungan Kerja Badan Kehormatan DPRD Kota Semarang'),
(9, 'J-00008', '2. Surat Badan Kehormatan DPRD Kota Semarang Nomor : 8 / BK / DPRD / 2019 tanggal              28 Maret 2019 perihal Rencana Kunjungan Kerja Badan Kehormatan DPRD Kota Semarang'),
(10, 'J-00009', '2. Surat Badan Kehormatan DPRD Kota Semarang Nomor : 8 / BK / DPRD / 2019 tanggal                 29 April 2019 perihal Rencana Kunjungan Kerja Badan Kehormatan DPRD Kota Semarang'),
(11, 'J-00010', '2. Surat Badan Kehormatan DPRD Kota Semarang Nomor : 12 / BK / DPRD / 2019 tanggal                 14 Juni 2019 perihal Rencana Kunjungan Kerja Badan Kehormatan DPRD Kota Semarang'),
(12, 'J-00011', '2. Surat Badan Kehormatan DPRD Kota Semarang Nomor : 12 / BK / DPRD / 2019 tanggal                 14 Juni 2019 perihal Rencana Kunjungan Kerja Badan Kehormatan DPRD Kota Semarang'),
(13, 'J-00012', '2. Surat Badan Kehormatan DPRD Kota Semarang Nomor : 15 / BK / DPRD / 2019 tanggal                 22 Juli 2019 perihal Rencana Kunjungan Kerja Badan Kehormatan DPRD Kota Semarang');

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
(1, 'J-00001', 1, '2019-01-28', '2019-01-31', ''),
(2, 'J-00001', 4, '2019-01-28', '2019-01-31', ''),
(3, 'J-00001', 5, '2019-01-29', '2019-01-31', ''),
(4, 'J-00001', 6, '2019-01-28', '2019-01-31', ''),
(5, 'J-00001', 8, '2019-01-28', '2019-01-31', ''),
(6, 'J-00001', 10, '2019-01-28', '2019-01-31', ''),
(7, 'J-00001', 12, '2019-01-28', '2019-01-31', ''),
(8, 'J-00001', 14, '2019-01-28', '2019-01-31', ''),
(9, 'J-00001', 16, '2019-01-28', '2019-01-31', ''),
(10, 'J-00001', 22, '2019-01-28', '2019-01-31', ''),
(11, 'J-00001', 24, '2019-01-28', '2019-01-31', ''),
(12, 'J-00001', 26, '2019-01-28', '2019-01-31', ''),
(13, 'J-00001', 27, '2019-01-28', '2019-01-31', ''),
(14, 'J-00001', 30, '2019-01-28', '2019-01-31', ''),
(15, 'J-00001', 35, '2019-01-28', '2019-01-31', ''),
(16, 'J-00001', 36, '2019-01-28', '2019-01-31', ''),
(17, 'J-00001', 39, '2019-01-28', '2019-01-31', ''),
(18, 'J-00001', 40, '2019-01-28', '2019-01-31', ''),
(19, 'J-00001', 46, '2019-01-28', '2019-01-31', ''),
(20, 'J-00001', 47, '2019-01-28', '2019-01-31', ''),
(21, 'J-00001', 48, '2019-01-28', '2019-01-31', ''),
(22, 'J-00001', 49, '2019-01-28', '2019-01-31', ''),
(23, 'J-00001', 65, '2019-01-28', '2019-01-31', ''),
(24, 'J-00001', 86, '2019-01-28', '2019-01-31', ''),
(25, 'J-00001', 92, '2019-01-28', '2019-01-31', ''),
(26, 'J-00002', 1, '2019-03-03', '2019-03-06', ''),
(27, 'J-00002', 2, '2019-03-03', '2019-03-06', ''),
(28, 'J-00002', 4, '2019-03-03', '2019-03-06', ''),
(29, 'J-00002', 5, '2019-03-03', '2019-03-06', ''),
(30, 'J-00002', 6, '2019-03-03', '2019-03-06', ''),
(31, 'J-00002', 8, '2019-03-03', '2019-03-06', ''),
(32, 'J-00002', 10, '2019-03-03', '2019-03-06', ''),
(33, 'J-00002', 12, '2019-03-03', '2019-03-06', ''),
(34, 'J-00002', 14, '2019-03-03', '2019-03-06', ''),
(35, 'J-00002', 16, '2019-03-03', '2019-03-06', ''),
(36, 'J-00002', 22, '2019-03-03', '2019-03-06', ''),
(37, 'J-00002', 24, '2019-03-03', '2019-03-06', ''),
(38, 'J-00002', 26, '2019-03-03', '2019-03-06', ''),
(39, 'J-00002', 27, '2019-03-03', '2019-03-06', ''),
(40, 'J-00002', 30, '2019-03-03', '2019-03-06', ''),
(41, 'J-00002', 35, '2019-03-03', '2019-03-06', ''),
(42, 'J-00002', 36, '2019-03-03', '2019-03-06', ''),
(43, 'J-00002', 39, '2019-03-03', '2019-03-06', ''),
(44, 'J-00002', 40, '2019-03-03', '2019-03-06', ''),
(45, 'J-00002', 46, '2019-03-03', '2019-03-06', ''),
(46, 'J-00002', 47, '2019-03-03', '2019-03-06', ''),
(47, 'J-00002', 48, '2019-03-03', '2019-03-06', ''),
(48, 'J-00002', 49, '2019-03-03', '2019-03-06', ''),
(49, 'J-00002', 55, '2019-03-03', '2019-03-06', ''),
(50, 'J-00002', 85, '2019-03-03', '2019-03-06', ''),
(51, 'J-00002', 86, '2019-03-03', '2019-03-06', ''),
(52, 'J-00003', 1, '2019-05-02', '2019-05-03', ''),
(53, 'J-00003', 4, '2019-05-02', '2019-05-03', ''),
(54, 'J-00003', 5, '2019-05-02', '2019-05-03', ''),
(55, 'J-00003', 6, '2019-05-02', '2019-05-03', ''),
(56, 'J-00003', 8, '2019-05-02', '2019-05-03', ''),
(57, 'J-00003', 10, '2019-05-02', '2019-05-03', ''),
(58, 'J-00003', 12, '2019-05-02', '2019-05-03', ''),
(59, 'J-00003', 14, '2019-05-02', '2019-05-03', ''),
(60, 'J-00003', 16, '2019-05-02', '2019-05-03', ''),
(61, 'J-00003', 22, '2019-05-02', '2019-05-03', ''),
(62, 'J-00003', 24, '2019-05-02', '2019-05-03', ''),
(63, 'J-00003', 26, '2019-05-02', '2019-05-03', ''),
(64, 'J-00003', 27, '2019-05-02', '2019-05-03', ''),
(65, 'J-00003', 30, '2019-05-02', '2019-05-03', ''),
(66, 'J-00003', 35, '2019-05-02', '2019-05-03', ''),
(67, 'J-00003', 36, '2019-05-02', '2019-05-03', ''),
(68, 'J-00003', 39, '2019-05-02', '2019-05-03', ''),
(69, 'J-00003', 40, '2019-05-02', '2019-05-03', ''),
(70, 'J-00003', 46, '2019-05-02', '2019-05-03', ''),
(71, 'J-00003', 47, '2019-05-02', '2019-05-03', ''),
(72, 'J-00003', 48, '2019-05-02', '2019-05-03', ''),
(73, 'J-00003', 49, '2019-05-02', '2019-05-03', ''),
(74, 'J-00003', 67, '2019-05-02', '2019-05-03', ''),
(75, 'J-00003', 86, '2019-05-02', '2019-05-03', ''),
(76, 'J-00003', 89, '2019-05-02', '2019-05-03', ''),
(77, 'J-00003', 114, '2019-05-02', '2019-05-03', ''),
(78, 'J-00004', 1, '2019-06-13', '2019-06-14', ''),
(79, 'J-00004', 2, '2019-06-13', '2019-06-14', ''),
(80, 'J-00004', 3, '2019-06-13', '2019-06-14', ''),
(81, 'J-00004', 4, '2019-06-13', '2019-06-14', ''),
(82, 'J-00004', 5, '2019-06-13', '2019-06-14', ''),
(83, 'J-00004', 6, '2019-06-13', '2019-06-14', ''),
(84, 'J-00004', 8, '2019-06-13', '2019-06-14', ''),
(85, 'J-00004', 10, '2019-06-13', '2019-06-14', ''),
(86, 'J-00004', 12, '2019-06-13', '2019-06-14', ''),
(87, 'J-00004', 14, '2019-06-13', '2019-06-14', ''),
(88, 'J-00004', 16, '2019-06-13', '2019-06-14', ''),
(89, 'J-00004', 22, '2019-06-13', '2019-06-14', ''),
(90, 'J-00004', 24, '2019-06-13', '2019-06-14', ''),
(91, 'J-00004', 26, '2019-06-13', '2019-06-14', ''),
(92, 'J-00004', 27, '2019-06-13', '2019-06-14', ''),
(93, 'J-00004', 30, '2019-06-13', '2019-06-14', ''),
(94, 'J-00004', 35, '2019-06-13', '2019-06-14', ''),
(95, 'J-00004', 36, '2019-06-13', '2019-06-14', ''),
(96, 'J-00004', 39, '2019-06-13', '2019-06-14', ''),
(97, 'J-00004', 40, '2019-06-13', '2019-06-14', ''),
(98, 'J-00004', 46, '2019-06-13', '2019-06-14', ''),
(99, 'J-00004', 47, '2019-06-13', '2019-06-14', ''),
(100, 'J-00004', 48, '2019-06-13', '2019-06-14', ''),
(101, 'J-00004', 49, '2019-06-13', '2019-06-14', ''),
(102, 'J-00004', 59, '2019-06-13', '2019-06-14', ''),
(103, 'J-00004', 81, '2019-06-13', '2019-06-14', ''),
(104, 'J-00004', 92, '2019-06-13', '2019-06-14', ''),
(105, 'J-00004', 114, '2019-06-13', '2019-06-14', ''),
(106, 'J-00005', 1, '2019-06-19', '2019-06-22', ''),
(107, 'J-00005', 2, '2019-06-19', '2019-06-22', ''),
(108, 'J-00005', 3, '2019-06-19', '2019-06-22', ''),
(109, 'J-00005', 4, '2019-06-19', '2019-06-22', ''),
(110, 'J-00005', 5, '2019-06-19', '2019-06-22', ''),
(111, 'J-00005', 6, '2019-06-19', '2019-06-22', ''),
(112, 'J-00005', 8, '2019-06-19', '2019-06-22', ''),
(113, 'J-00005', 10, '2019-06-19', '2019-06-22', ''),
(114, 'J-00005', 12, '2019-06-19', '2019-06-22', ''),
(115, 'J-00005', 14, '2019-06-19', '2019-06-22', ''),
(116, 'J-00005', 16, '2019-06-19', '2019-06-22', ''),
(117, 'J-00005', 22, '2019-06-19', '2019-06-22', ''),
(118, 'J-00005', 24, '2019-06-19', '2019-06-22', ''),
(119, 'J-00005', 26, '2019-06-19', '2019-06-22', ''),
(120, 'J-00005', 27, '2019-06-19', '2019-06-22', ''),
(121, 'J-00005', 30, '2019-06-19', '2019-06-22', ''),
(122, 'J-00005', 35, '2019-06-19', '2019-06-22', ''),
(123, 'J-00005', 36, '2019-06-19', '2019-06-22', ''),
(124, 'J-00005', 39, '2019-06-19', '2019-06-22', ''),
(125, 'J-00005', 40, '2019-06-19', '2019-06-22', ''),
(126, 'J-00005', 46, '2019-06-19', '2019-06-22', ''),
(127, 'J-00005', 47, '2019-06-19', '2019-06-22', ''),
(128, 'J-00005', 48, '2019-06-19', '2019-06-22', ''),
(129, 'J-00005', 49, '2019-06-19', '2019-06-22', ''),
(130, 'J-00005', 78, '2019-06-19', '2019-06-22', ''),
(131, 'J-00005', 86, '2019-06-19', '2019-06-22', ''),
(132, 'J-00005', 90, '2019-06-19', '2019-06-22', ''),
(133, 'J-00006', 1, '2019-06-23', '2019-06-25', ''),
(134, 'J-00006', 2, '2019-06-23', '2019-06-25', ''),
(135, 'J-00006', 3, '2019-06-23', '2019-06-25', ''),
(136, 'J-00006', 4, '2019-06-23', '2019-06-25', ''),
(137, 'J-00006', 5, '2019-06-23', '2019-06-25', ''),
(138, 'J-00006', 6, '2019-06-23', '2019-06-25', ''),
(139, 'J-00006', 8, '2019-06-23', '2019-06-25', ''),
(140, 'J-00006', 10, '2019-06-23', '2019-06-25', ''),
(141, 'J-00006', 12, '2019-06-23', '2019-06-25', ''),
(142, 'J-00006', 14, '2019-06-23', '2019-06-25', ''),
(143, 'J-00006', 16, '2019-06-23', '2019-06-25', ''),
(144, 'J-00006', 22, '2019-06-23', '2019-06-25', ''),
(145, 'J-00006', 24, '2019-06-23', '2019-06-25', ''),
(146, 'J-00006', 26, '2019-06-23', '2019-06-25', ''),
(147, 'J-00006', 27, '2019-06-23', '2019-06-25', ''),
(148, 'J-00006', 30, '2019-06-23', '2019-06-25', ''),
(149, 'J-00006', 35, '2019-06-23', '2019-06-25', ''),
(150, 'J-00006', 36, '2019-06-23', '2019-06-25', ''),
(151, 'J-00006', 39, '2019-06-23', '2019-06-25', ''),
(152, 'J-00006', 40, '2019-06-23', '2019-06-25', ''),
(153, 'J-00006', 46, '2019-06-23', '2019-06-25', ''),
(154, 'J-00006', 47, '2019-06-23', '2019-06-25', ''),
(155, 'J-00006', 48, '2019-06-23', '2019-06-25', ''),
(156, 'J-00006', 49, '2019-06-23', '2019-06-25', ''),
(157, 'J-00006', 55, '2019-06-23', '2019-06-25', ''),
(158, 'J-00006', 86, '2019-06-23', '2019-06-25', ''),
(159, 'J-00006', 99, '2019-06-23', '2019-06-25', ''),
(172, 'J-00008', 2, '2019-03-31', '2019-04-03', 'pimpinan'),
(173, 'J-00008', 3, '2019-03-31', '2019-04-03', 'pimpinan'),
(174, 'J-00008', 4, '2019-03-31', '2019-04-03', 'pimpinan'),
(175, 'J-00008', 14, '2019-03-31', '2019-04-03', ''),
(176, 'J-00008', 23, '2019-03-31', '2019-04-03', ''),
(177, 'J-00008', 31, '2019-03-31', '2019-04-03', ''),
(178, 'J-00008', 34, '2019-03-31', '2019-04-03', ''),
(179, 'J-00008', 41, '2019-03-31', '2019-04-03', ''),
(180, 'J-00008', 56, '2019-03-31', '2019-04-03', ''),
(181, 'J-00008', 87, '2019-03-31', '2019-04-03', ''),
(193, 'J-00009', 1, '2019-05-05', '2019-05-06', 'pimpinan'),
(194, 'J-00009', 2, '2019-05-05', '2019-05-06', 'pimpinan'),
(195, 'J-00009', 3, '2019-05-05', '2019-05-06', 'pimpinan'),
(196, 'J-00009', 4, '2019-05-05', '2019-05-06', 'pimpinan'),
(197, 'J-00009', 14, '2019-05-05', '2019-05-06', ''),
(198, 'J-00009', 23, '2019-05-05', '2019-05-06', ''),
(199, 'J-00009', 31, '2019-05-05', '2019-05-06', ''),
(200, 'J-00009', 41, '2019-05-05', '2019-05-06', ''),
(201, 'J-00009', 70, '2019-05-05', '2019-05-06', ''),
(202, 'J-00009', 102, '2019-05-05', '2019-05-06', ''),
(203, 'J-00009', 113, '2019-05-05', '2019-05-06', ''),
(204, 'J-00010', 2, '2019-06-30', '2019-07-01', 'pimpinan'),
(205, 'J-00010', 3, '2019-06-30', '2019-07-01', 'pimpinan'),
(206, 'J-00010', 14, '2019-06-30', '2019-07-01', ''),
(207, 'J-00010', 23, '2019-06-30', '2019-07-01', ''),
(208, 'J-00010', 31, '2019-06-30', '2019-07-01', ''),
(209, 'J-00010', 41, '2019-06-30', '2019-07-01', ''),
(210, 'J-00010', 56, '2019-06-30', '2019-07-01', ''),
(211, 'J-00010', 83, '2019-06-30', '2019-07-01', ''),
(212, 'J-00007', 2, '2019-02-12', '2019-02-15', 'pimpinan'),
(213, 'J-00007', 3, '2019-02-12', '2019-02-15', 'pimpinan'),
(214, 'J-00007', 4, '2019-02-12', '2019-02-15', 'pimpinan'),
(215, 'J-00007', 14, '2019-02-12', '2019-02-15', ''),
(216, 'J-00007', 23, '2019-02-12', '2019-02-15', ''),
(217, 'J-00007', 31, '2019-02-12', '2019-02-15', ''),
(218, 'J-00007', 34, '2019-02-12', '2019-02-15', ''),
(219, 'J-00007', 41, '2019-02-12', '2019-02-15', ''),
(220, 'J-00007', 87, '2019-02-12', '2019-02-15', ''),
(221, 'J-00007', 105, '2019-02-12', '2019-02-15', ''),
(222, 'J-00007', 112, '2019-02-12', '2019-02-15', ''),
(223, 'J-00011', 2, '2019-07-02', '2019-07-05', 'pimpinan'),
(224, 'J-00011', 3, '2019-07-02', '2019-07-05', 'pimpinan'),
(225, 'J-00011', 4, '2019-07-02', '2019-07-05', 'pimpinan'),
(226, 'J-00011', 14, '2019-07-02', '2019-07-05', ''),
(227, 'J-00011', 23, '2019-07-02', '2019-07-05', ''),
(228, 'J-00011', 31, '2019-07-02', '2019-07-05', ''),
(229, 'J-00011', 41, '2019-07-02', '2019-07-05', ''),
(230, 'J-00011', 71, '2019-07-02', '2019-07-05', ''),
(231, 'J-00011', 87, '2019-07-02', '2019-07-05', ''),
(241, 'J-00012', 3, '2019-07-31', '2019-08-01', 'pimpinan'),
(242, 'J-00012', 4, '2019-07-31', '2019-08-01', 'pimpinan'),
(243, 'J-00012', 23, '2019-07-31', '2019-08-01', ''),
(244, 'J-00012', 31, '2019-07-31', '2019-08-01', ''),
(245, 'J-00012', 41, '2019-07-31', '2019-08-01', ''),
(246, 'J-00012', 75, '2019-07-31', '2019-08-01', ''),
(247, 'J-00012', 87, '2019-07-31', '2019-08-01', ''),
(248, 'J-00012', 109, '2019-07-31', '2019-08-01', ''),
(249, 'J-00012', 114, '2019-07-31', '2019-08-01', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `guest`
--

CREATE TABLE `guest` (
  `id` int(9) UNSIGNED NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `address` varchar(100) DEFAULT NULL,
  `phone_number` varchar(100) DEFAULT NULL,
  `created_by` int(9) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_by` int(9) DEFAULT NULL,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted_by` int(9) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `deleted` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `guest`
--

INSERT INTO `guest` (`id`, `fullname`, `address`, `phone_number`, `created_by`, `created_at`, `updated_by`, `updated_at`, `deleted_by`, `deleted_at`, `deleted`) VALUES
(1, 'Fakhir Rizal', 'Jln. dr. Cipto 61, Proyonanggan Tengah', '085696303627', 0, '2019-01-24 21:34:31', NULL, '2019-01-24 21:59:00', NULL, NULL, 0),
(2, 'Aff', 'O', 'O', 2, '2019-01-27 00:16:48', NULL, '2019-01-27 00:16:48', NULL, NULL, 0),
(3, '', '', '', 3, '2019-02-18 16:48:27', NULL, '2019-02-18 16:48:27', NULL, NULL, 0),
(4, 'jnj', 'nj', 'njn', 4, '2019-02-26 08:10:54', NULL, '2019-02-26 08:10:54', NULL, NULL, 0),
(5, 'sutrisno', 'pamekasan', '082336006363', 5, '2019-03-06 09:30:56', NULL, '2019-03-06 09:30:56', NULL, NULL, 0),
(6, 'bh', 'bh', 'bh', 6, '2019-03-09 00:18:28', NULL, '2019-03-09 00:18:28', NULL, NULL, 0),
(7, 'Afif', 'j', 'j', 7, '2019-03-12 11:08:54', NULL, '2019-03-12 11:08:54', NULL, NULL, 0),
(8, 'h', 'h', 'h', 8, '2019-03-21 19:53:40', NULL, '2019-03-21 19:53:40', NULL, NULL, 0),
(9, 'Pengunjung', 'Batang', '0', 9, '2019-04-18 22:55:43', NULL, '2019-04-18 22:55:43', NULL, NULL, 0),
(10, '\' or 1=1 limit 1 -- -+', '\' or 1=1 limit 1 -- -+', '\' or 1=1 limit 1 -- -+', 10, '2019-04-30 18:25:39', NULL, '2019-04-30 18:25:39', NULL, NULL, 0),
(11, '\' or 1=1 limit 1 -- -+', '\' or 1=1 limit 1 -- -+', '\' or 1=1 limit 1 -- -+', 11, '2019-04-30 18:25:39', NULL, '2019-04-30 18:25:39', NULL, NULL, 0),
(12, '\'=\'\'or\'', '\'=\'\'or\'', '\'=\'\'or\'', 12, '2019-04-30 19:17:58', NULL, '2019-04-30 19:17:58', NULL, NULL, 0),
(13, '\'=\'\'or\'', '\'=\'\'or\'', '\'=\'\'or\'', 13, '2019-04-30 20:27:00', NULL, '2019-04-30 20:27:00', NULL, NULL, 0),
(14, 'Riswan', 'Sekayu', '085799000000', 14, '2019-04-30 20:45:23', NULL, '2019-04-30 20:45:23', NULL, NULL, 0),
(15, 'th', 'th', 'rth', 15, '2019-05-03 23:59:46', NULL, '2019-05-03 23:59:46', NULL, NULL, 0),
(16, 'Persidangan', 'sekayu', '', 16, '2019-05-21 21:17:01', NULL, '2019-05-21 21:17:01', NULL, NULL, 0),
(17, '', '', '', 17, '2019-05-24 16:37:11', NULL, '2019-05-24 16:37:11', NULL, NULL, 0),
(18, 'renita', 'tembalang', '085799896111', 18, '2019-07-17 07:31:29', NULL, '2019-07-17 07:31:29', NULL, NULL, 0),
(19, 'hbhbb', 'hb', 'jh', 19, '2019-07-17 09:23:54', NULL, '2019-07-17 09:23:54', NULL, NULL, 0),
(20, 'reinta', 'tembalang', '-', 20, '2019-07-18 07:20:24', NULL, '2019-07-18 07:20:24', NULL, NULL, 0),
(21, 'Fakhir Rizal', 'Jln. dr. Cipto 61, Proyonanggan Tengah', '85696303627', 21, '2019-07-18 21:00:16', NULL, '2019-07-18 21:00:16', NULL, NULL, 0),
(22, 'renita', 'renita@gmail.com', '089999999998', 22, '2019-07-22 07:38:37', NULL, '2019-07-22 07:38:37', NULL, NULL, 0),
(23, 'pengunjung', '1', '0', 23, '2019-07-24 09:34:41', NULL, '2019-07-24 09:34:41', NULL, NULL, 0),
(24, 'febri', 'Jl. Medoho Raya no 21', '081210635117', 24, '2019-07-24 11:50:00', NULL, '2019-07-24 11:50:00', NULL, NULL, 0),
(25, 'ewe', '21321321', '21321321321', 25, '2019-07-31 06:06:11', NULL, '2019-07-31 06:06:11', NULL, NULL, 0),
(26, 'Iwan', 'Semarang', '0812823658', 26, '2019-08-03 08:16:00', NULL, '2019-08-03 08:16:00', NULL, NULL, 0),
(27, 'rr', 'rr', '88', 27, '2019-09-06 12:02:54', NULL, '2019-09-06 12:02:54', NULL, NULL, 0),
(28, 'fanin', 'zebra vii', '0821', 28, '2019-09-10 12:44:57', NULL, '2019-09-10 12:44:57', NULL, NULL, 0),
(29, 'awawd', 'awdwad', '02198451848412', 29, '2019-09-24 20:47:36', NULL, '2019-09-24 20:47:36', NULL, NULL, 0);

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
(1, 'J-00001', 'J-0000115.jpeg'),
(2, 'J-00001', 'J-0000116.jpeg'),
(3, 'J-00001', 'J-0000117.jpeg'),
(4, 'J-00001', 'J-0000118.jpeg'),
(5, 'J-00001', 'J-0000119.jpeg'),
(6, 'J-00001', 'J-00001110.jpeg'),
(7, 'J-00001', 'J-00001111.jpeg'),
(8, 'J-00001', 'J-00001112.jpeg'),
(9, 'J-00001', 'J-00001113.jpeg'),
(10, 'J-00003', 'J-0000314.jpeg'),
(11, 'J-00003', 'J-0000315.jpeg'),
(12, 'J-00003', 'J-0000316.jpeg'),
(13, 'J-00003', 'J-0000317.jpeg'),
(14, 'J-00003', 'J-0000318.jpeg'),
(15, 'J-00003', 'J-0000319.jpeg');

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
(1, '4', '1531294722.jpeg'),
(2, '4', '15312947221.jpeg'),
(3, '4', '15312947222.jpeg'),
(4, '4', '15312947223.jpeg'),
(5, '4', '15312947224.jpeg'),
(6, '4', '15312947225.jpeg'),
(7, '4', '15312947226.jpeg'),
(8, '4', '15312947227.jpeg'),
(9, '4', '15312947228.jpeg'),
(10, '4', '15312947229.jpeg'),
(11, '4', '153129472210.jpeg'),
(12, '4', '153129472211.jpeg'),
(13, '5', '1531364227.jpeg'),
(14, '5', '15313642271.jpeg'),
(15, '5', '15313642272.jpeg'),
(16, '7', '1531872837.jpeg'),
(17, '7', '15318728371.jpeg'),
(18, '7', '1531872838.jpeg'),
(19, '8', '1532658578.jpeg'),
(20, '8', '15326585781.jpeg'),
(21, '8', '15326585782.jpeg'),
(22, '9', '1532661483.jpeg'),
(23, '9', '15326614831.jpeg'),
(24, '9', '15326614832.jpeg'),
(25, '10', '1533057712.jpeg'),
(26, '10', '1533057713.jpeg'),
(27, '10', '15330577131.jpeg'),
(28, '10', '15330577132.jpeg'),
(29, '10', '15330577133.jpeg'),
(30, '10', '15330577134.jpeg'),
(31, '10', '15330577135.jpeg'),
(32, '6', '1533058557.jpeg'),
(33, '6', '15330585571.jpeg'),
(34, '6', '15330585572.jpeg'),
(35, '11', '1533141469.jpeg'),
(36, '11', '15331414691.jpeg'),
(37, '11', '15331414692.jpeg'),
(38, '12', '1533142348.jpeg'),
(39, '12', '15331423481.jpeg'),
(40, '12', '15331423482.jpeg'),
(41, '13', '1534222779.jpeg'),
(42, '13', '15342227791.jpeg'),
(43, '13', '15342227792.jpeg'),
(44, '18', '1536544857.jpeg'),
(45, '18', '15365448571.jpeg'),
(46, '18', '15365448572.jpeg'),
(47, '18', '15365448573.jpeg'),
(48, '18', '15365448574.jpeg'),
(49, '18', '15365448575.jpeg'),
(50, '18', '1536544974.jpeg'),
(51, '17', '1536545041.jpeg'),
(52, '17', '15365450411.jpeg'),
(53, '17', '15365450412.jpeg'),
(54, '19', '1536546982.jpeg'),
(55, '19', '15365469821.jpeg'),
(56, '19', '15365469822.jpeg'),
(57, '13', '1536547462.jpeg'),
(58, '13', '1536547463.jpeg'),
(59, '15', '1536716611.jpeg'),
(60, '15', '15367166111.jpeg'),
(61, '15', '15367166112.jpeg');

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
  `diterima` varchar(1000) NOT NULL,
  `catatan` varchar(30000) NOT NULL,
  `anggaran` varchar(20) NOT NULL,
  `tanggal_ttd` date NOT NULL,
  `file_laporan` varchar(100) NOT NULL,
  `deleted` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jaldis`
--

INSERT INTO `jaldis` (`id`, `kode_jaldis`, `start_date`, `end_date`, `tujuan`, `pimpinan`, `transportasi`, `kategori`, `keperluan`, `alat_kelengkapan`, `diterima`, `catatan`, `anggaran`, `tanggal_ttd`, `file_laporan`, `deleted`) VALUES
(1, 'J-00001', '2019-01-28', '2019-01-31', 'Pemerintah Kota Tangerang dan Pemerintah Provinsi DKI Jakarta', '1', 'Pesawat Terbang', '3', 'Melaksanakan Kunjungan Kerja Badan Anggaran DPRD Kota Semarang dalam rangka mendapatkan data dan informasi terkait dengan penyusunan Kajian tentang Optimalisasi Penerimaan Pajak melalui E-Tax', 'B-00002', '', '', '', '2019-01-28', '', '0'),
(2, 'J-00002', '2019-03-03', '2019-03-06', 'Pemerintah Kabupaten Tangerang dan Pemerintah Provinsi DKI Jakarta', '1', 'Pesawat Terbang', '3', '1. Melaksanakan Kunjungan Kerja Badan Anggaran DPRD Kota Semarang dalam rangka mendapatkan data dan informasi terkait dengan penyusunan Kajian tentang Optimalisasi Penerimaan Pendapatan Daerah melalui Sektor Pariwisata ', 'B-00002', '', '', '', '2019-03-01', '', '0'),
(3, 'J-00003', '2019-05-02', '2019-05-03', 'DPRD Kota Surakarta', '1', 'Pesawat Terbang', '1', '1. Melaksanakan Kunjungan Kerja Badan Anggaran DPRD Kota Semarang dalam rangka mendapatkan data dan informasi tentang Evaluasi Target Retribusi Pasar Tradisional ', 'B-00002', 'Bp, Budi Haryanto, SE Akt  ( Kepala  Bidang  Pendapatan Bappenda )', '<b>PEMERINTAH KOTA\r\nTANGERANG</b>\r\n\r\n<span>1.        \r\nRombongan DPRD Kota Semarang dipimpin\r\noleh : Wakil Ketua  H. Agung Budi\r\nMargono,ST,MT Diterima  pada Hari Selasa,\r\n29 Januari 2019 oleh Bp, Budi Haryanto, SE Akt \r\n( Kepala  Bidang  Pendapatan Bappenda )</span>\r\n\r\n<span>2.        \r\nPajak online / E-Tax Prov Kota\r\nTangerang sudah melaksanakan pembayaran pajak lewat E-Tax  dengan 7 ( tujuh ) jenis pajak  antara lain \r\n:</span>\r\n\r\n<span>a.            \r\nPajak Hotel</span>\r\n\r\n<span>b.            \r\nPajak Restoran</span>\r\n\r\n<span>c.             \r\nPajak \r\nHiburan</span>\r\n\r\n<span>d.           \r\nPajak Reklame</span>\r\n\r\n<span>e.            \r\nBPHTB dan PBB</span>\r\n\r\n<span>f.              \r\nParkir Swasta </span>\r\n\r\n<span>g.            \r\nPajak Air Tanah / PDAM</span>\r\n\r\n<span>3.        \r\nDari ke 7 jenis pajak tsb yang paling\r\nmenonjol omsetnnya adalah  Pajak Parkir\r\nSwasta ( Perkir Bandara ) Sedangkan yang kurang berhasil adalah dari Pajak\r\nRestoran, karena banyak alasan2 dan rekayasa dari pihak  Restoran.</span>\r\n\r\n<span>4.        \r\nDengan adanya Sistem E- Tax Pemerintah\r\nKota Tangerang telah bekerjasama dengan Bank Jabar  , Indomart dan Alfamart  ( Deposit ) dan Bank Swasta  tertentu</span>\r\n\r\n<span>·               \r\nDengan sistem melaporkan ke Bank  dengan nomor \r\nbayar.</span>\r\n\r\n<span>·               \r\nTiap bulan melaporkan ke Bank baru\r\nbayar tanggal 20 bulan berikutnya.</span>\r\n\r\n<span>·               \r\nTelah menyiapkan aplikasi  dan program pe;ayanan PBB online yg berbasis\r\nandroid,</span>\r\n\r\n<span>5.        \r\nPemerintah Kota Tangerang melalui\r\nBadan Pendapatan Daerah ( Bapenda  )\r\nterus melakukan terobosan sebagai upaya meningkatkan penerimaan pajak daerah\r\ndan partisipasi masyarakat dalam membayar pajak.</span>\r\n\r\n<span>6.        \r\nDari Phak BPKAD Kota Tangerang juga\r\ngencar Pemasangan Tapping box dengan sasaran meliputi Restoran dan Hotel  / di tempat \r\nusaha untuk memantau transakasi dari satu tempat usaha secara online\r\ndengan tujuan mencegah kecurangan, sehingga penerimaan pajak daerah menjadi\r\nmaximal.</span>\r\n\r\n        \r\n\r\n<b>PROVINSI DKI JAKARTA\r\n.</b>\r\n\r\n<span>1.        \r\nRombongan DPRD Kota Semarang dipimpin\r\noleh : H.M  Rukiyanto – Anggota Banggar Diterima  pada Hari Rabu, 30 Januari 2019  oleh \r\nDigdo Prasetyo  (  Ka Sub Bid Pendapatan BPRD DKI Jakarta )</span>\r\n\r\n<span>2.        \r\nBadan Pajak Dan Retribusi  Daerah ( BPRD ) Provinsi DKI Jakarta  terbentuk \r\nberdasarkan Peraturan Daerah Nomor 5 Tahun 2016 tentang Organisasi\r\nPerangkat Daerah Provinsi  DKI Jakarta.</span>\r\n\r\n<span>3.        \r\n<b>VISI</b>\r\n: Pelayanan Yang Profesional Dalam Optimalisasi Penerimaan Pajak Dan Retribusi Daerah.</span>\r\n\r\n<span><b>MISI</b>  :  Mewujudkan\r\nPerencanaan Pelayanan Pajak Dan Retribusi Daerah Yang Inovatif.</span>\r\n\r\n \r\n\r\n<span>4.        \r\nPerkembangan Pajak Online  :</span>\r\n\r\n<span>·               \r\nPajak online diawali tahun 2008\r\nbekerjasama dengan PT, Finnet Indonesia, untuk Pajak Hotel, Pajak Restoram,\r\nPajak Hiburan dan Pajakl Parkir.</span>\r\n\r\n<span>·               \r\nDiawal tahun 2012 Pemda DKI Jakarta\r\nbekerjasama dengan BRI membangun  Online\r\nsystem untuk Pajak Hotel, Pajak Restoran, Pajak Hiburan dan Pajak Parkir.</span>\r\n\r\n<span>·               \r\nTahun 2015dibangun lagi pembayaran\r\npajak melalui Portal pjak online untuk 4 jenis pajak  ( PKB, PBB-P2, Reklame dan Restoran ), dan\r\nditahun 2016 akan dikembangkan sehingga dapat melayani seluruh jenis pajak\r\nDaerah.</span>\r\n\r\n<span>5.        \r\nPemerintah Pemprov DKI Jakarta\r\nmenargetkan kenaikan pajak sebesar  6\r\ntrilliun atau mencapai 44,18 trilliun pada tahun 2019. Pajak tahun sebelumnnya\r\ndiketahui senilai 38,12 trilliun. Untuk mencapai target tersebut melalui revisi\r\nlima Rancangan oeraturan Daerah ( Raperda ) yang terkait dengan pajak\r\nyaitu  :</span>\r\n\r\n<span>a.            \r\nRaperda ttg Perubahan atas Raperda\r\nNo.16/2010 ttg Pajak Parkir</span>\r\n\r\n<span>b.            \r\nRaperda ttg Perubahan Atas Perda\r\nNo.15/2010 ttg Pajak Penerangan Jalan</span>\r\n\r\n<span>c.             \r\nRaperda ttg  Perubahan Atas Perda No.18/2010 ttg bea\r\nPerolehan hah atas tanah dan Bangunan ( BPHTB )</span>\r\n\r\n<span>d.           \r\nRaperda ttg Perubahan  atas Perda No.3/2012 ttg Retribusi Daerah</span>\r\n\r\n<span>e.            \r\nRaperda ttg  Perubahan atas Perda No.9/2010 ttg Bea  balik nama kendaraan Bermotor ( BBNKB ). </span>\r\n\r\n<span>6.        \r\nUpaya Badan Pajak dan Retribusi Daerah\r\n( BPRD ) Provinsi DKI Jakarta   untuk\r\nmngoptimalkan penerimaaan pajak antara lain \r\n:</span>\r\n\r\n<span>·               \r\nIntregrasi perizinan usaha dalam\r\nbentuk tax clearance – BPRD DKI bekerjasama dengan Dinas Penanaman Modal  dan Pelayanan Terpadu Satu Pintu ( PM-PTSP)\r\nDKI  Jakarta.</span>\r\n\r\n<span>·               \r\nBPRD Prov DKI Jakarta telah\r\nmenandatangani rencana aksi Optimalisasi Penerimaan Daerah bersma KPK – BPRD\r\nDKI membangun system Fiscal Cadaster yaitu mencermati dan mendata asset-aset\r\nyang signifikan dimiliki wajib Pajak.</span>\r\n\r\n<span>·               \r\nMelakukan  Pelayanan Pajak berbasis informasi tekonologi\r\ndengan penambahan kanal pembayaran pajak daerah kerjasama dengan perbankan  Bank Indonesia .BI dgn mewajibkan setiap transaksi\r\nEletric Data Capture ( EDC) di took/restoran/perpakiran seperti kartu kredit\r\nyang terhubung dengan BPRD dgn harapan pajak bisa terpantau secara real time.</span>\r\n\r\n<span>·               \r\nMelakukan penegakan hukum dengan\r\nmelakukan penempatan plang dan stiker penunggak pajak – dengan melakukan Razia\r\nBersama Dirlantas Pokda Metro Jaya BPRD DKI juga meminta pendamping KPK untuk\r\npemanggilan wajib pajak yang menunggak.</span>\r\n\r\nDPRD\r\nDKI Jakarta terus menerus melakukan sosialisasi kewajiban pepajakan  di sseluruh wilayah DKI Jakarta ', '0', '2019-05-01', 'file_1568246790.docx', '0'),
(4, 'J-00004', '2019-06-13', '2019-06-14', 'Pemerintah Kabupaten Magelang', '1', 'Pesawat Terbang', '2', '1. Melaksanakan Kunjungan Kerja Badan Anggaran DPRD Kota Semarang dalam rangka mendapatkan wawasan dan informasi terkait Evaluasi Target Retribusi tempat Rekreasi ', 'B-00002', '', '', '', '2019-06-12', '', '0'),
(5, 'J-00005', '2019-06-19', '2019-06-22', 'DPRD Kota Depok dan DPRD Provinsi DKI Jakarta', '1', 'Pesawat Terbang', '2', '1. Melaksanakan Kunjungan Kerja Badan Anggaran DPRD Kota Semarang dalam rangka mendapatkan wawasan dan informasi terkait Optimalisasi Penerimaan Pendapatan dari Sektor Pajak Hiburan dan Restoran', 'B-00002', '', '', '', '2019-06-18', '', '0'),
(6, 'J-00006', '2019-06-23', '2019-06-25', 'Badan Pendapatan Daerah Kota Tangerang dan Badan Pendapatan Daerah Provinsi DKI Jakarta', '1', 'Pesawat Terbang', '5', '1. Melaksanakan Pendampingan Kunjungan Kerja / studi tiru Pemerintah Kota Semarang terkait dengan Sistem Rekonsiliasi Pendapatan Daerah ', 'B-00002', '', '', '', '2019-06-21', '', '0'),
(7, 'J-00007', '2019-02-12', '2019-02-15', 'DPRD Kota Yogyakarta dan DPRD Kabupaten Gunung Kidul', '1', 'Pesawat Terbang', '3', '1. Melaksanakan Kunjungan Kerja Badan Kehormatan DPRD Kota Semarang dalam rangka mendapatkan data dan informasi terkait dengan penyusunan Kajian tentang Strategi Badan Kehormatan dalam meningkatkan Disiplin dan Penjagaan Kode Etik Anggota DPRD ke DPRD Kota Yogyakarta dan DPRD Kabupaten Gunung Kidul', 'B-00004', '', '', '', '2019-02-11', '', '0'),
(8, 'J-00008', '2019-03-31', '2019-04-03', 'DPRD Kabupaten Cirebon dan DPRD Kota Cirebon', '1', 'Pesawat Terbang', '3', '1. Melaksanakan Kunjungan Kerja Badan Kehormatan DPRD Kota Semarang dalam rangka mendapatkan data dan informasi terkait dengan penyusunan Kajian tentang Implementasi Kewenangan Badan Kehormatan DPRD Kota Semarang ke DPRD Kabupaten Cirebon dan DPRD Kota Cirebon ', 'B-00004', '', '', '', '2019-03-29', '', '0'),
(9, 'J-00009', '2019-05-05', '2019-05-06', 'Badan Kehormatan DPRD Kota Pekalongan', '1', 'Pesawat Terbang', '2', '1. Melaksanakan Kunjungan Kerja Badan Kehormatan DPRD Kota Semarang dalam rangka mendapatkan data dan informasi Tugas Pokok dan Fungsi Badan Kehormatan DPRD dan Mengolah isu di Media Masa bila ada kasus kehormatan yang menimpa Anggota DPRD ke Badan Kehormatan DPRD Kota Pekalongan', 'B-00004', '', '', '', '2019-05-03', '', '0'),
(10, 'J-00010', '2019-06-30', '2019-07-01', 'DPRD Kabupaten Sragen', '1', 'Pesawat Terbang', '2', '1. Melaksanakan Kunjungan Kerja Badan Kehormatan DPRD Kota Semarang dalam rangka mendapatkan data dan informasi Tugas Pokok dan Fungsi Badan Kehormatan DPRD dan Penanganan dugaan pelanggaran Anggota DPRD yang tersiar di media cetak dan media sosial', 'B-00004', '', '', '', '2019-06-28', '', '0'),
(11, 'J-00011', '2019-07-02', '2019-07-05', 'DPRD Provinsi Jawa Timur dan DPRD Kabupaten Bangkalan', '1', 'Pesawat Terbang', '2', '1. Melaksanakan Kunjungan Kerja Badan Kehormatan DPRD Kota Semarang dalam rangka mendapatkan data dan informasi Tugas Pokok dan Fungsi Badan Kehormatan DPRD dan Penanganan dugaan pelanggaran Anggota DPRD yang tersiar di media cetak dan media sosial', 'B-00004', '', '', '', '2019-07-01', '', '0'),
(12, 'J-00012', '2019-07-31', '2019-08-01', 'DPRD Kota Surakarta', '1', 'Kendaraan Roda Empat', '2', '1. Melaksanakan Kunjungan Kerja Badan Kehormatan DPRD Kota Semarang dalam rangka mendapatkan data dan informasi terkait Tugas Pokok dan Fungsi Badan Kehormatan DPRD serta Efektifitas Badan Kehormatan dalam Penegakan Tata Tertib dan Kode Etik DPRD', 'B-00004', '', '', '', '2019-07-30', '', '0');

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
(1, 'Kunjungan Kerja Tupoksi', '1'),
(2, 'Konsultasi Tupoksi', '1'),
(3, 'Kunjungan Kerja Kajian', '1'),
(4, 'Konsultasi Pendampingan', '1'),
(5, 'Kunjungan Kerja Pendampingan', '1'),
(6, 'Konsultasi Kajian', '1'),
(7, 'Kunjungan Kerja Luar Daerah (Jateng)', '1'),
(8, 'Bimtek', '1'),
(9, 'Kunjungan Kerja Rispoda', '1'),
(10, 'Konsultasi Rispoda', '1'),
(11, 'Kunjungan Kerja Pansus', '1'),
(12, 'Konsultasi Pansus', '1'),
(13, 'Kunjungan Kerja Pimpinan', '1'),
(14, 'Bedah Buku', '1'),
(15, 'Kunjungan Kerja Luar Negeri', '1');

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
(1, '12.678.09.89.456.90.00.07.08.6.89.9.0.000.56.0.1', 'Surya Pranata, S.Sos', '700000000', '0'),
(2, '3.1.05.3.1.05.04.01.018.5.2.2.15.02', 'SRI PUJININGSIH, SE', '42540462000', '1'),
(3, '3.1.05.3.1.05.04.15.007.5.2.2.17.03', 'SURYA PRANATA, S.Sos.', '4300440000', '1');

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
(1, 'K-00001', 'KOMISI A', 'Komisi A'),
(3, 'K-00002', 'KOMISI B', 'ALAT KELENGKAPAN KOMISI DEWAN'),
(4, 'K-00003', 'KOMISI C', 'ALAT KELENGKAPAN KOMISI DEWAN '),
(5, 'K-00004', 'KOMISI D', 'ALAT KELENGKAPAN KOMISI DEWAN');

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
(1, 1, 'Menambah kategori keperluan baru', '2018-06-02 15:52:40'),
(2, 1, 'Menambah data perjalanan dinas', '2018-06-02 16:09:35'),
(3, 1, 'Menambah data perjalanan dinas', '2018-06-02 16:16:46'),
(4, 1, 'Menambah kategori keperluan baru', '2018-06-02 18:20:15'),
(5, 1, 'Menambah data perjalanan dinas', '2018-06-02 18:26:19'),
(6, 1, 'Menambah data perjalanan dinas', '2018-06-02 21:54:29'),
(7, 1, 'Menambah data perjalanan dinas', '2018-06-02 22:02:49'),
(8, 1, 'Menambah data perjalanan dinas', '2018-06-02 23:03:47'),
(9, 1, 'Mengubah data perjalanan dinas', '2018-06-03 04:26:01'),
(10, 1, 'Mengubah data perjalanan dinas', '2018-06-03 04:26:54'),
(11, 1, 'Menambah data perjalanan dinas', '2018-06-03 11:37:14'),
(12, 1, 'Menambah kode rekening baru', '2018-06-04 13:54:38'),
(13, 1, 'Mengubah data kode rekening', '2018-06-04 13:55:07'),
(14, 1, 'Mengubah data kode rekening', '2018-06-06 15:03:18'),
(15, 1, 'Mengubah data kode rekening', '2018-06-06 15:13:29'),
(16, 1, 'Menambah kode rekening baru', '2018-06-06 15:19:09'),
(17, 1, 'Mengubah data kode rekening', '2018-06-06 15:19:52'),
(18, 1, 'Mengubah data kode rekening', '2018-06-06 15:20:33'),
(19, 1, 'Mengubah kategori keperluan', '2018-06-07 08:23:43'),
(20, 1, 'Mengubah kategori keperluan', '2018-06-07 08:23:53'),
(21, 1, 'Mengubah kategori keperluan', '2018-06-07 08:24:06'),
(22, 1, 'Menambah kategori keperluan baru', '2018-06-07 08:24:26'),
(23, 1, 'Menambah data perjalanan dinas', '2018-06-07 08:45:51'),
(24, 1, 'Menambah data perjalanan dinas', '2018-06-07 10:48:31'),
(25, 1, 'Menambah data perjalanan dinas', '2018-06-07 14:57:35'),
(26, 1, 'Menambah data perjalanan dinas', '2018-06-22 18:35:23'),
(27, 1, 'Menambah data perjalanan dinas', '2018-06-22 18:43:55'),
(28, 1, 'Menambah data perjalanan dinas', '2018-06-29 11:10:14'),
(29, 1, 'Menambah kategori keperluan baru', '2018-06-29 11:51:32'),
(30, 1, 'Menambah kategori keperluan baru', '2018-06-29 11:52:08'),
(31, 1, 'Mengubah kategori keperluan', '2018-06-29 11:52:28'),
(32, 1, 'Mengubah kategori keperluan', '2018-06-29 11:52:56'),
(33, 1, 'Mengubah data jabatan Pimpinan DPRD', '2018-06-29 11:54:56'),
(34, 1, 'Mengubah data jabatan Pimpinan DPRD', '2018-06-29 11:55:13'),
(35, 1, 'Mengubah data jabatan Pimpinan DPRD', '2018-06-29 11:55:27'),
(36, 1, 'Mengubah data jabatan Pimpinan DPRD', '2018-06-29 11:55:53'),
(37, 1, 'Menambah data perjalanan dinas', '2018-07-02 07:21:22'),
(38, 1, 'Menambah data perjalanan dinas', '2018-07-03 09:21:27'),
(39, 1, 'Mengubah data anggota', '2018-07-03 11:37:37'),
(40, 1, 'Mengubah data anggota', '2018-07-03 11:38:16'),
(41, 1, 'Mengubah data anggota', '2018-07-03 11:38:47'),
(42, 1, 'Mengubah data anggota', '2018-07-03 11:39:31'),
(43, 1, 'Mengubah data anggota', '2018-07-03 11:39:54'),
(44, 1, 'Mengubah data anggota', '2018-07-03 11:40:08'),
(45, 1, 'Mengubah data anggota', '2018-07-03 11:40:33'),
(46, 1, 'Mengubah data anggota', '2018-07-03 11:40:55'),
(47, 1, 'Mengubah data anggota', '2018-07-03 11:41:12'),
(48, 1, 'Mengubah data anggota', '2018-07-03 11:41:30'),
(49, 1, 'Mengubah data anggota', '2018-07-03 11:41:56'),
(50, 1, 'Mengubah data anggota', '2018-07-03 11:42:16'),
(51, 1, 'Mengubah data anggota', '2018-07-03 11:42:40'),
(52, 1, 'Mengubah data anggota', '2018-07-03 11:42:59'),
(53, 1, 'Mengubah data anggota', '2018-07-03 11:43:16'),
(54, 1, 'Mengubah data anggota', '2018-07-03 11:43:31'),
(55, 1, 'Mengubah data anggota', '2018-07-03 11:43:47'),
(56, 1, 'Mengubah data anggota', '2018-07-03 11:44:04'),
(57, 1, 'Mengubah data anggota', '2018-07-03 11:44:28'),
(58, 1, 'Mengubah data anggota', '2018-07-03 11:44:45'),
(59, 1, 'Mengubah data anggota', '2018-07-03 11:45:03'),
(60, 1, 'Mengubah data anggota', '2018-07-03 11:45:39'),
(61, 1, 'Mengubah data anggota', '2018-07-03 11:45:56'),
(62, 1, 'Mengubah data anggota', '2018-07-03 11:46:14'),
(63, 1, 'Mengubah data anggota', '2018-07-03 11:46:29'),
(64, 1, 'Mengubah data anggota', '2018-07-03 11:46:51'),
(65, 1, 'Mengubah data anggota', '2018-07-03 11:47:11'),
(66, 1, 'Mengubah data anggota', '2018-07-03 11:47:33'),
(67, 1, 'Mengubah data anggota', '2018-07-03 11:47:56'),
(68, 1, 'Mengubah data anggota', '2018-07-03 11:48:10'),
(69, 1, 'Mengubah data anggota', '2018-07-03 11:48:24'),
(70, 1, 'Mengubah data anggota', '2018-07-03 11:48:46'),
(71, 1, 'Mengubah data anggota', '2018-07-03 11:49:03'),
(72, 1, 'Mengubah data anggota', '2018-07-03 11:49:26'),
(73, 1, 'Mengubah data anggota', '2018-07-03 11:49:49'),
(74, 1, 'Mengubah data anggota', '2018-07-03 11:50:13'),
(75, 1, 'Mengubah data anggota', '2018-07-03 11:50:43'),
(76, 1, 'Mengubah data anggota', '2018-07-03 11:51:03'),
(77, 1, 'Mengubah data anggota', '2018-07-03 11:51:29'),
(78, 1, 'Mengubah data anggota', '2018-07-03 11:51:52'),
(79, 1, 'Mengubah data anggota', '2018-07-03 11:52:02'),
(80, 1, 'Mengubah data anggota', '2018-07-03 11:52:26'),
(81, 1, 'Mengubah data anggota', '2018-07-03 11:52:45'),
(82, 1, 'Mengubah data anggota', '2018-07-03 11:53:01'),
(83, 1, 'Mengubah data anggota', '2018-07-03 11:53:13'),
(84, 1, 'Mengubah data anggota', '2018-07-03 11:53:28'),
(85, 1, 'Mengubah data anggota', '2018-07-03 11:53:46'),
(86, 1, 'Mengubah data anggota', '2018-07-03 11:54:22'),
(87, 1, 'Mengubah data anggota', '2018-07-03 11:54:39'),
(88, 1, 'Mengubah data anggota', '2018-07-03 11:54:56'),
(89, 1, 'Mengubah data anggota', '2018-07-03 11:55:12'),
(90, 1, 'Mengubah data anggota', '2018-07-03 11:55:28'),
(91, 1, 'Mengubah data anggota', '2018-07-04 09:22:35'),
(92, 1, 'Mengubah data anggota', '2018-07-04 09:43:59'),
(93, 1, 'Mengubah data anggota', '2018-07-04 09:44:38'),
(94, 1, 'Mengubah data anggota', '2018-07-04 09:45:21'),
(95, 1, 'Mengubah data anggota', '2018-07-04 09:45:36'),
(96, 1, 'Mengubah data anggota', '2018-07-04 09:46:26'),
(97, 1, 'Mengubah data anggota', '2018-07-04 09:47:22'),
(98, 1, 'Mengubah data anggota', '2018-07-04 09:47:42'),
(99, 1, 'Mengubah data anggota', '2018-07-04 09:48:03'),
(100, 1, 'Mengubah data anggota', '2018-07-04 09:48:23'),
(101, 1, 'Mengubah data anggota', '2018-07-04 09:48:49'),
(102, 1, 'Mengubah data anggota', '2018-07-04 09:49:06'),
(103, 1, 'Mengubah data anggota', '2018-07-04 09:49:28'),
(104, 1, 'Mengubah data anggota', '2018-07-04 09:49:48'),
(105, 1, 'Mengubah data anggota', '2018-07-04 10:01:38'),
(106, 1, 'Mengubah data anggota', '2018-07-04 10:02:54'),
(107, 1, 'Mengubah data anggota', '2018-07-04 10:03:20'),
(108, 1, 'Menambah data perjalanan dinas', '2018-07-05 17:18:04'),
(109, 1, 'Menambah data perjalanan dinas', '2018-07-09 11:26:20'),
(110, 1, 'Menambah data perjalanan dinas', '2018-07-09 11:39:05'),
(111, 1, 'Menambah data perjalanan dinas', '2018-07-09 11:50:59'),
(112, 1, 'Menambah data perjalanan dinas', '2018-07-09 13:21:10'),
(113, 1, 'Menambah kategori keperluan baru', '2018-07-09 13:29:12'),
(114, 1, 'Menambah kategori keperluan baru', '2018-07-09 13:29:24'),
(115, 1, 'Mengubah data perjalanan dinas', '2018-07-09 13:30:13'),
(116, 1, 'Menghapus data perjalanan dinas', '2018-07-09 13:31:37'),
(117, 1, 'Mengubah data perjalanan dinas', '2018-07-09 13:32:50'),
(118, 1, 'Mengubah data perjalanan dinas', '2018-07-09 13:33:45'),
(119, 1, 'Menambah data anggota setwan baru', '2018-07-09 14:10:08'),
(120, 1, 'Mengubah data anggota', '2018-07-09 14:15:05'),
(121, 1, 'Mengubah data perjalanan dinas', '2018-07-09 14:16:05'),
(122, 1, 'Menambah data perjalanan dinas', '2018-07-10 07:18:21'),
(123, 1, 'Menambah data pembentukan panitia BADAN KEHORMATAN', '2018-07-10 07:34:32'),
(124, 1, 'Menambah data perjalanan dinas', '2018-07-10 07:36:43'),
(125, 1, 'Menambah data perjalanan dinas', '2018-07-10 07:40:44'),
(126, 1, 'Menambah data perjalanan dinas', '2018-07-10 07:49:40'),
(127, 1, 'Menambah data perjalanan dinas', '2018-07-11 11:25:14'),
(128, 1, 'Menambah data perjalanan dinas', '2018-07-11 11:27:06'),
(129, 1, 'Mengubah jabatan anggota Komisi', '2018-07-11 11:31:50'),
(130, 1, 'Mengubah jabatan anggota Komisi', '2018-07-11 11:32:17'),
(131, 1, 'Mengubah jabatan anggota Komisi', '2018-07-11 11:32:54'),
(132, 1, 'Mengubah jabatan anggota Komisi', '2018-07-11 11:33:24'),
(133, 1, 'Mengubah data anggota', '2018-07-11 11:35:17'),
(134, 1, 'Mengubah data anggota', '2018-07-11 11:35:34'),
(135, 1, 'Mengubah data anggota', '2018-07-11 11:35:49'),
(136, 1, 'Menambah data perjalanan dinas', '2018-07-11 14:37:48'),
(137, 1, 'Mengubah foto profil', '2018-07-12 10:07:25'),
(138, 1, 'Update profil', '2018-07-12 10:13:49'),
(139, 1, 'Menghapus data perjalanan dinas', '2018-07-12 23:59:34'),
(140, 1, 'Menghapus data perjalanan dinas', '2018-07-13 07:54:54'),
(141, 1, 'Menghapus data perjalanan dinas', '2018-07-13 07:56:01'),
(142, 1, 'Menambah data SKPD baru', '2018-07-13 09:01:31'),
(143, 1, 'Menambah data SKPD baru', '2018-07-13 09:02:00'),
(144, 1, 'Mengubah data master SKPD', '2018-07-13 09:02:16'),
(145, 1, 'Menambah data SKPD baru', '2018-07-13 09:04:17'),
(146, 1, 'Mengubah data master SKPD', '2018-07-13 09:04:37'),
(147, 1, 'Menambah data SKPD baru', '2018-07-13 09:04:59'),
(148, 1, 'Menambah data SKPD baru', '2018-07-13 09:05:25'),
(149, 1, 'Menambah data SKPD baru', '2018-07-13 09:35:39'),
(150, 1, 'Menambah data perjalanan dinas', '2018-07-13 10:20:22'),
(151, 1, 'Menghapus data perjalanan dinas', '2018-07-13 10:55:16'),
(152, 1, 'Menambah data SKPD baru', '2018-07-13 12:56:55'),
(153, 1, 'Menambah data SKPD baru', '2018-07-13 12:57:26'),
(154, 1, 'Menambah data SKPD baru', '2018-07-13 12:59:11'),
(155, 1, 'Menambah data SKPD baru', '2018-07-13 12:59:30'),
(156, 1, 'Menambah data SKPD baru', '2018-07-13 13:00:00'),
(157, 1, 'Menambah data SKPD baru', '2018-07-13 13:00:24'),
(158, 1, 'Menambah data SKPD baru', '2018-07-13 13:00:43'),
(159, 1, 'Menambah data perjalanan dinas', '2018-07-19 07:39:25'),
(160, 1, 'Menambah data pembentukan PANSUS', '2018-07-19 07:46:26'),
(161, 1, 'Mengubah data PANSUS', '2018-07-19 07:50:35'),
(162, 1, 'Menambah kategori keperluan baru', '2018-07-19 07:52:35'),
(163, 1, 'Menambah kategori keperluan baru', '2018-07-19 07:52:43'),
(164, 1, 'Menambah data perjalanan dinas', '2018-07-19 07:55:16'),
(165, 1, 'Menambah kategori keperluan baru', '2018-07-19 07:56:32'),
(166, 1, 'Menambah data perjalanan dinas', '2018-07-19 08:00:38'),
(167, 1, 'Menghapus data perjalanan dinas', '2018-07-31 08:20:46'),
(168, 1, 'Menambah data perjalanan dinas', '2018-07-31 08:28:08'),
(169, 1, 'Menambah data perjalanan dinas', '2018-07-31 08:38:27'),
(170, 1, 'Menambah data perjalanan dinas', '2018-07-31 09:32:50'),
(171, 1, 'Menambah data perjalanan dinas', '2018-07-31 09:42:40'),
(172, 1, 'Menambah data perjalanan dinas', '2018-07-31 10:39:54'),
(173, 1, 'Menghapus data perjalanan dinas', '2018-07-31 13:22:40'),
(174, 1, 'Menambah data perjalanan dinas', '2018-07-31 13:25:18'),
(175, 1, 'Menambah data perjalanan dinas', '2018-07-31 13:29:05'),
(176, 1, 'Menambah data perjalanan dinas', '2018-07-31 13:36:31'),
(177, 1, 'Menambah data perjalanan dinas', '2018-07-31 13:48:27'),
(178, 1, 'Menambah data perjalanan dinas', '2018-07-31 14:59:02'),
(179, 1, 'Menambah data perjalanan dinas', '2018-07-31 15:01:59'),
(180, 1, 'Menambah data perjalanan dinas', '2018-07-31 15:13:39'),
(181, 1, 'Menambah data perjalanan dinas', '2018-07-31 15:16:57'),
(182, 1, 'Menambah data perjalanan dinas', '2018-07-31 15:22:35'),
(183, 1, 'Menambah data SKPD baru', '2018-07-31 23:24:58'),
(184, 1, 'Menambah data SKPD baru', '2018-07-31 23:27:53'),
(185, 1, 'Menambah data perjalanan dinas', '2018-08-01 14:31:06'),
(186, 1, 'Menambah data SKPD baru', '2018-08-01 23:19:38'),
(187, 1, 'Menambah data SKPD baru', '2018-08-01 23:46:14'),
(188, 1, 'Menambah data SKPD baru', '2018-08-01 23:47:38'),
(189, 1, 'Menambah data SKPD baru', '2018-08-01 23:49:01'),
(190, 1, 'Menambah data perjalanan dinas', '2018-08-02 10:51:58'),
(191, 1, 'Menambah data perjalanan dinas', '2018-08-02 11:38:52'),
(192, 1, 'Menambah data perjalanan dinas', '2018-08-07 09:16:03'),
(193, 1, 'Menambah data perjalanan dinas', '2018-08-07 09:18:47'),
(194, 1, 'Menambah data perjalanan dinas', '2018-08-07 09:21:32'),
(195, 1, 'Menambah data perjalanan dinas', '2018-08-07 09:27:59'),
(196, 1, 'Menghapus data perjalanan dinas', '2018-08-09 06:58:22'),
(197, 1, 'Menambah data perjalanan dinas', '2018-08-13 09:53:35'),
(198, 1, 'Menambah data perjalanan dinas', '2018-08-14 08:33:24'),
(199, 1, 'Menambah data perjalanan dinas', '2018-08-14 08:37:36'),
(200, 1, 'Mengubah data kode rekening', '2018-08-14 08:37:54'),
(201, 1, 'Mengubah data kode rekening', '2018-08-14 08:38:55'),
(202, 1, 'Menambah data perjalanan dinas', '2018-08-15 08:36:50'),
(203, 1, 'Menambah data perjalanan dinas', '2018-08-20 10:54:36'),
(204, 1, 'Menambah data perjalanan dinas', '2018-08-23 07:59:31'),
(205, 1, 'Menambah data perjalanan dinas', '2018-08-23 08:41:44'),
(206, 1, 'Mengubah data perjalanan dinas', '2018-08-23 08:43:21'),
(207, 1, 'Menambah data perjalanan dinas', '2018-08-23 08:54:24'),
(208, 1, 'Menambah kategori keperluan baru', '2018-08-27 07:39:31'),
(209, 1, 'Menambah data perjalanan dinas', '2018-08-27 07:42:03'),
(210, 1, 'Menambah kategori keperluan baru', '2018-08-27 07:42:43'),
(211, 1, 'Menambah data perjalanan dinas', '2018-08-27 07:50:30'),
(212, 1, 'Menambah data SKPD baru', '2018-08-30 08:06:51'),
(213, 1, 'Menambah data SKPD baru', '2018-08-30 08:07:55'),
(214, 1, 'Menambah data SKPD baru', '2018-08-30 08:09:08'),
(215, 1, 'Menambah data SKPD baru', '2018-08-30 08:22:14'),
(216, 1, 'Menambah data perjalanan dinas', '2018-09-03 11:09:24'),
(217, 1, 'Menambah data SKPD baru', '2018-09-10 08:47:22'),
(218, 1, 'Menambah data SKPD baru', '2018-09-10 08:49:36'),
(219, 1, 'Menambah data SKPD baru', '2018-09-10 08:51:24'),
(220, 1, 'Menambah data perjalanan dinas', '2018-09-10 09:03:16'),
(221, 1, 'Menambah data perjalanan dinas', '2018-09-10 09:21:50'),
(222, 1, 'Menambah data perjalanan dinas', '2018-09-10 09:29:57'),
(223, 1, 'Menambah data perjalanan dinas', '2018-09-10 09:48:11'),
(224, 1, 'Menambah data perjalanan dinas', '2018-09-10 10:08:34'),
(225, 1, 'Menambah data perjalanan dinas', '2018-09-10 10:25:27'),
(226, 1, 'Menambah data perjalanan dinas', '2018-09-10 10:44:22'),
(227, 1, 'Menambah data perjalanan dinas', '2018-09-10 10:55:11'),
(228, 1, 'Menambah data perjalanan dinas', '2018-09-10 11:00:07'),
(229, 1, 'Menambah data perjalanan dinas', '2018-09-10 11:07:43'),
(230, 1, 'Menambah data perjalanan dinas', '2018-09-14 13:34:29'),
(231, 1, 'Menambah data perjalanan dinas', '2018-09-26 10:34:57'),
(232, 1, 'Menambah data perjalanan dinas', '2018-09-26 11:22:31'),
(233, 1, 'Menambah data perjalanan dinas', '2018-10-03 14:27:19'),
(234, 1, 'Menambah data perjalanan dinas', '2018-10-03 15:19:24'),
(235, 1, 'Mengubah data perjalanan dinas', '2018-10-03 15:21:04'),
(236, 1, 'Menambah data perjalanan dinas', '2018-10-10 08:48:38'),
(237, 1, 'Menambah data anggota setwan baru', '2018-10-10 08:50:26'),
(238, 1, 'Mengubah data anggota', '2018-10-10 08:54:51'),
(239, 1, 'Menambah data perjalanan dinas', '2018-10-10 08:56:32'),
(240, 1, 'Menambah data perjalanan dinas', '2018-11-14 07:52:12'),
(241, 1, 'Menambah data perjalanan dinas', '2018-11-14 08:08:51'),
(242, 1, 'Mengubah data perjalanan dinas', '2018-11-15 07:52:54'),
(243, 1, 'Menambah data perjalanan dinas', '2018-11-15 09:01:30'),
(244, 1, 'Menambah data perjalanan dinas', '2018-11-15 09:36:54'),
(245, 1, 'Menambah data perjalanan dinas', '2018-11-19 11:51:59'),
(246, 1, 'Menambah data perjalanan dinas', '2018-11-19 12:46:42'),
(247, 1, 'Mengubah data anggota', '2018-12-06 14:31:57'),
(248, 1, 'Mengubah kategori keperluan', '2019-01-02 11:18:30'),
(249, 1, 'Menambah data perjalanan dinas', '2019-01-02 11:21:55'),
(250, 1, 'Menambah data perjalanan dinas', '2019-01-02 12:38:50'),
(251, 1, 'Menambah data perjalanan dinas', '2019-01-02 13:17:09'),
(252, 1, 'Mengubah data anggota', '2019-01-02 15:32:43'),
(253, 1, 'Menambah data perjalanan dinas', '2019-01-02 15:36:10'),
(254, 1, 'Mengubah data anggota', '2019-01-02 15:38:47'),
(255, 1, 'Menambah data perjalanan dinas', '2019-01-04 07:51:52'),
(256, 1, 'Menambah data perjalanan dinas', '2019-01-04 08:51:41'),
(257, 1, 'Mengubah data perjalanan dinas', '2019-01-04 09:31:50'),
(258, 1, 'Menambah data perjalanan dinas', '2019-01-07 11:53:17'),
(259, 1, 'Menambah data perjalanan dinas', '2019-01-10 09:34:13'),
(260, 1, 'Menambah data perjalanan dinas', '2019-01-10 09:36:42'),
(261, 1, 'Menambah data perjalanan dinas', '2019-01-10 09:39:20'),
(262, 1, 'Menambah data perjalanan dinas', '2019-01-10 15:03:42'),
(263, 1, 'Menambah data perjalanan dinas', '2019-01-10 15:46:19'),
(264, 1, 'Menambah data perjalanan dinas', '2019-01-11 13:54:52'),
(265, 1, 'Menambah data perjalanan dinas', '2019-01-11 14:07:09'),
(266, 1, 'Menambah data perjalanan dinas', '2019-01-14 08:58:39'),
(267, 1, 'Menambah data perjalanan dinas', '2019-01-14 11:08:26'),
(268, 1, 'Menambah data perjalanan dinas', '2019-01-14 11:11:45'),
(269, 1, 'Menambah data perjalanan dinas', '2019-01-16 12:24:36'),
(270, 1, 'Menambah data perjalanan dinas', '2019-01-17 14:24:10'),
(271, 1, 'Menambah data perjalanan dinas', '2019-01-17 14:31:25'),
(272, 1, 'Menambah data perjalanan dinas', '2019-01-17 14:53:52'),
(273, 1, 'Mengubah data perjalanan dinas', '2019-01-17 15:05:27'),
(274, 1, 'Mengubah data perjalanan dinas', '2019-01-17 15:06:45'),
(275, 1, 'Mengubah data perjalanan dinas', '2019-01-17 15:07:15'),
(276, 1, 'Menambah data perjalanan dinas', '2019-01-22 08:58:41'),
(277, 1, 'Menambah data perjalanan dinas', '2019-01-28 11:51:53'),
(278, 1, 'Menambah data perjalanan dinas', '2019-01-28 12:07:37'),
(279, 1, 'Menambah data perjalanan dinas', '2019-01-28 12:09:30'),
(280, 1, 'Menambah data perjalanan dinas', '2019-02-01 09:25:03'),
(281, 1, 'Menambah data perjalanan dinas', '2019-02-01 09:46:09'),
(282, 1, 'Menambah data anggota setwan baru', '2019-02-01 10:43:49'),
(283, 1, 'Menambah data anggota setwan baru', '2019-02-01 10:45:18'),
(284, 1, 'Menambah data perjalanan dinas', '2019-02-01 10:49:01'),
(285, 1, 'Menambah data perjalanan dinas', '2019-02-01 11:04:56'),
(286, 1, 'Menambah data perjalanan dinas', '2019-02-01 13:10:35'),
(287, 1, 'Menambah data perjalanan dinas', '2019-02-04 14:07:55'),
(288, 1, 'Menambah data perjalanan dinas', '2019-02-04 14:09:55'),
(289, 1, 'Menambah data perjalanan dinas', '2019-02-04 14:12:08'),
(290, 1, 'Menambah data perjalanan dinas', '2019-02-04 14:14:34'),
(291, 1, 'Menambah data perjalanan dinas', '2019-02-12 07:05:57'),
(292, 1, 'Menambah data perjalanan dinas', '2019-02-12 07:10:11'),
(293, 1, 'Menambah data perjalanan dinas', '2019-02-13 11:49:32'),
(294, 1, 'Menambah data perjalanan dinas', '2019-02-13 11:51:24'),
(295, 1, 'Menambah data perjalanan dinas', '2019-02-14 11:20:12'),
(296, 1, 'Menambah data perjalanan dinas', '2019-02-18 08:20:42'),
(297, 1, 'Menambah data perjalanan dinas', '2019-02-18 08:26:46'),
(298, 1, 'Menambah data perjalanan dinas', '2019-02-18 08:29:22'),
(299, 1, 'Menambah data perjalanan dinas', '2019-02-25 11:54:25'),
(300, 1, 'Menambah data perjalanan dinas', '2019-02-25 11:56:55'),
(301, 1, 'Menambah data perjalanan dinas', '2019-02-25 12:10:08'),
(302, 1, 'Menambah data perjalanan dinas', '2019-02-26 08:39:50'),
(303, 1, 'Menambah data perjalanan dinas', '2019-02-26 08:44:18'),
(304, 1, 'Menambah data perjalanan dinas', '2019-03-06 09:43:18'),
(305, 1, 'Menambah data perjalanan dinas', '2019-03-06 10:31:50'),
(306, 11, 'Mengubah foto anggota', '2019-04-30 18:35:44'),
(307, 1, 'Mengubah data Badan', '2019-07-22 22:48:13'),
(308, 1, 'Menambah data perjalanan dinas', '2019-08-26 08:10:14'),
(309, 1, 'Menambah data perjalanan dinas', '2019-08-26 11:19:43'),
(310, 1, 'Menambah data perjalanan dinas', '2019-08-26 11:27:54'),
(311, 1, 'Menambah data perjalanan dinas', '2019-08-26 11:49:40'),
(312, 1, 'Menambah data perjalanan dinas', '2019-08-26 11:54:41'),
(313, 1, 'Menambah data perjalanan dinas', '2019-08-26 12:02:04'),
(314, 1, 'Menambah data perjalanan dinas', '2019-08-26 13:55:36'),
(315, 1, 'Menambah data perjalanan dinas', '2019-08-26 14:03:20'),
(316, 1, 'Mengubah data perjalanan dinas', '2019-08-26 14:05:41'),
(317, 1, 'Menambah data perjalanan dinas', '2019-08-26 14:16:40'),
(318, 1, 'Menambah data perjalanan dinas', '2019-08-26 14:23:36'),
(319, 1, 'Mengubah data perjalanan dinas', '2019-08-26 14:25:21'),
(320, 1, 'Menambah data perjalanan dinas', '2019-08-26 14:30:36'),
(321, 1, 'Menambah data perjalanan dinas', '2019-08-26 14:34:46'),
(322, 1, 'Mengubah data perjalanan dinas', '2019-08-26 15:19:37');

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

-- --------------------------------------------------------

--
-- Struktur dari tabel `pansus`
--

CREATE TABLE `pansus` (
  `id` int(9) NOT NULL,
  `kode_pansus` varchar(7) NOT NULL,
  `nama_pansus` varchar(200) NOT NULL,
  `perihal` varchar(1000) NOT NULL,
  `awal_periode` date NOT NULL,
  `akhir_periode` date NOT NULL,
  `hasil` varchar(30000) NOT NULL,
  `status` enum('1','0') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pansus`
--

INSERT INTO `pansus` (`id`, `kode_pansus`, `nama_pansus`, `perihal`, `awal_periode`, `akhir_periode`, `hasil`, `status`) VALUES
(1, 'P-00001', 'Pembentukan BPR Syariah', 'Pembentukan BPR Syariah', '2018-04-17', '2018-12-31', '', '1'),
(2, 'P-00002', 'Pansus RPJ 2017', 'Panitia Khusus Dewan Perwakilan Rakyat Daerah Kota Semarang dalam rangka membahas Rancangan Peraturan Daerah Kota Semarang tentang Pertanggungjawaban Pelaksanaan APBD Kota Semarang Tahun Anggaran 2017 ', '2018-07-01', '2018-08-01', '', '1');

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
(12, 'R-00001', '-', 'umum', '1', '1'),
(13, 'R-00002', '1', 'P-00001', '1', '1'),
(14, 'R-00002', '2', 'P-00001', '1', '1'),
(15, 'R-00002', '3', 'P-00001', '1', '1'),
(16, 'R-00002', '4', 'P-00001', '1', '1'),
(17, 'R-00002', '7', 'P-00001', '1', '1'),
(18, 'R-00002', '10', 'P-00001', '1', '1'),
(19, 'R-00002', '11', 'P-00001', '1', '1'),
(20, 'R-00002', '14', 'P-00001', '1', '1'),
(21, 'R-00002', '18', 'P-00001', '1', '1'),
(22, 'R-00002', '21', 'P-00001', '1', '1'),
(23, 'R-00002', '24', 'P-00001', '1', '1'),
(24, 'R-00002', '29', 'P-00001', '1', '1'),
(25, 'R-00002', '31', 'P-00001', '1', '1'),
(26, 'R-00002', '33', 'P-00001', '1', '1'),
(27, 'R-00002', '36', 'P-00001', '1', '1'),
(28, 'R-00002', '39', 'P-00001', '1', '1'),
(29, 'R-00002', '41', 'P-00001', '1', '1'),
(30, 'R-00002', '44', 'P-00001', '1', '1'),
(31, 'R-00002', '47', 'P-00001', '1', '1'),
(32, 'R-00002', '48', 'P-00001', '1', '1'),
(33, 'R-00002', '-', 'umum', '1', '1'),
(35, 'R-00003', '1', 'B-00003', '1', '1'),
(36, 'R-00003', '2', 'B-00003', '1', '1'),
(37, 'R-00003', '3', 'B-00003', '1', '1'),
(38, 'R-00003', '4', 'B-00003', '1', '1'),
(39, 'R-00003', '7', 'B-00003', '1', '1'),
(40, 'R-00003', '11', 'B-00003', '1', '1'),
(41, 'R-00003', '13', 'B-00003', '1', '1'),
(42, 'R-00003', '17', 'B-00003', '1', '1'),
(43, 'R-00003', '18', 'B-00003', '1', '1'),
(44, 'R-00003', '19', 'B-00003', '1', '1'),
(45, 'R-00003', '21', 'B-00003', '1', '1'),
(46, 'R-00003', '23', 'B-00003', '1', '1'),
(47, 'R-00003', '25', 'B-00003', '1', '1'),
(48, 'R-00003', '28', 'B-00003', '1', '1'),
(49, 'R-00003', '29', 'B-00003', '1', '1'),
(50, 'R-00003', '32', 'B-00003', '1', '1'),
(51, 'R-00003', '33', 'B-00003', '1', '1'),
(52, 'R-00003', '38', 'B-00003', '1', '1'),
(53, 'R-00003', '42', 'B-00003', '1', '1'),
(54, 'R-00003', '44', 'B-00003', '1', '1'),
(55, 'R-00003', '47', 'B-00003', '1', '1'),
(56, 'R-00003', '50', 'B-00003', '1', '1'),
(57, 'R-00003', '52', 'B-00003', '1', '1'),
(58, 'R-00003', '.', 'umum', '1', '1'),
(72, 'R-00006', '7', 'K-00001', '1', '1'),
(73, 'R-00006', '10', 'K-00001', '1', '1'),
(74, 'R-00006', '12', 'K-00001', '1', '1'),
(75, 'R-00006', '13', 'K-00001', '1', '1'),
(76, 'R-00006', '19', 'K-00001', '1', '1'),
(77, 'R-00006', '22', 'K-00001', '1', '1'),
(78, 'R-00006', '25', 'K-00001', '1', '1'),
(79, 'R-00006', '28', 'K-00001', '1', '1'),
(80, 'R-00006', '32', 'K-00001', '1', '1'),
(81, 'R-00006', '37', 'K-00001', '1', '1'),
(82, 'R-00006', '45', 'K-00001', '1', '1'),
(83, 'R-00006', '52', 'K-00001', '1', '1'),
(84, 'R-00006', '6', 'skpd', '1', '1'),
(85, 'R-00006', 'Tidak ada', 'umum', '1', '1'),
(86, 'R-00001', '7', 'K-00001', '1', '1'),
(87, 'R-00001', '10', 'K-00001', '1', '1'),
(88, 'R-00001', '12', 'K-00001', '1', '1'),
(89, 'R-00001', '13', 'K-00001', '1', '1'),
(90, 'R-00001', '19', 'K-00001', '1', '1'),
(91, 'R-00001', '22', 'K-00001', '1', '1'),
(92, 'R-00001', '25', 'K-00001', '1', '1'),
(93, 'R-00001', '28', 'K-00001', '1', '1'),
(94, 'R-00001', '32', 'K-00001', '1', '1'),
(95, 'R-00001', '37', 'K-00001', '1', '1'),
(96, 'R-00001', '45', 'K-00001', '1', '1'),
(97, 'R-00001', '52', 'K-00001', '1', '1'),
(98, 'R-00001', '6', 'skpd', '1', '1'),
(103, 'R-00004', '7', 'K-00001', '1', '1'),
(104, 'R-00004', '10', 'K-00001', '1', '1'),
(105, 'R-00004', '12', 'K-00001', '1', '1'),
(106, 'R-00004', '13', 'K-00001', '1', '1'),
(107, 'R-00004', '19', 'K-00001', '1', '1'),
(108, 'R-00004', '22', 'K-00001', '1', '1'),
(109, 'R-00004', '25', 'K-00001', '1', '1'),
(110, 'R-00004', '28', 'K-00001', '1', '1'),
(111, 'R-00004', '32', 'K-00001', '1', '1'),
(112, 'R-00004', '37', 'K-00001', '1', '1'),
(113, 'R-00004', '45', 'K-00001', '1', '1'),
(114, 'R-00004', '52', 'K-00001', '1', '1'),
(115, 'R-00004', '6', 'skpd', '1', '1'),
(116, 'R-00005', '10', 'K-00001', '1', '1'),
(117, 'R-00005', '19', 'K-00001', '1', '1'),
(118, 'R-00005', '32', 'K-00001', '1', '1'),
(119, 'R-00005', '45', 'K-00001', '1', '1'),
(120, 'R-00005', '52', 'K-00001', '1', '1'),
(121, 'R-00005', '6', 'skpd', '1', '1'),
(122, 'R-00007', '12', 'K-00001', '1', '1'),
(123, 'R-00007', '13', 'K-00001', '1', '1'),
(124, 'R-00007', '19', 'K-00001', '1', '1'),
(125, 'R-00007', '25', 'K-00001', '1', '1'),
(126, 'R-00007', '28', 'K-00001', '1', '1'),
(127, 'R-00007', '37', 'K-00001', '1', '1'),
(128, 'R-00007', '2', 'skpd', '1', '1'),
(129, 'R-00007', '5', 'skpd', '1', '1'),
(130, 'R-00007', 'bagian tapem', 'umum', '1', '1'),
(131, 'R-00008', '10', 'K-00001', '1', '1'),
(132, 'R-00008', '19', 'K-00001', '1', '1'),
(133, 'R-00008', '28', 'K-00001', '1', '1'),
(134, 'R-00008', '32', 'K-00001', '1', '1'),
(135, 'R-00008', '52', 'K-00001', '1', '1'),
(136, 'R-00008', 'kesbangpol', 'umum', '1', '1'),
(137, 'R-00009', '10', 'K-00001', '1', '1'),
(138, 'R-00009', '12', 'K-00001', '1', '1'),
(139, 'R-00009', '13', 'K-00001', '1', '1'),
(140, 'R-00009', '19', 'K-00001', '1', '1'),
(141, 'R-00009', '22', 'K-00001', '1', '1'),
(142, 'R-00009', '25', 'K-00001', '1', '1'),
(143, 'R-00009', '28', 'K-00001', '1', '1'),
(144, 'R-00009', '32', 'K-00001', '1', '1'),
(145, 'R-00009', '37', 'K-00001', '1', '1'),
(146, 'R-00009', '45', 'K-00001', '1', '1'),
(147, 'R-00009', '52', 'K-00001', '1', '1'),
(148, 'R-00009', 'dispendukcapil', 'umum', '1', '1'),
(149, 'R-00010', '5', 'K-00002', '1', '1'),
(150, 'R-00010', '8', 'K-00002', '1', '1'),
(151, 'R-00010', '18', 'K-00002', '1', '1'),
(152, 'R-00010', '26', 'K-00002', '1', '1'),
(153, 'R-00010', '30', 'K-00002', '1', '1'),
(154, 'R-00010', '33', 'K-00002', '1', '1'),
(155, 'R-00010', '35', 'K-00002', '1', '1'),
(156, 'R-00010', '38', 'K-00002', '1', '1'),
(157, 'R-00010', '44', 'K-00002', '1', '1'),
(158, 'R-00010', '46', 'K-00002', '1', '1'),
(159, 'R-00010', '48', 'K-00002', '1', '1'),
(160, 'R-00010', '1', 'skpd', '1', '1'),
(161, 'R-00010', '12', 'skpd', '1', '1'),
(162, 'R-00010', '14', 'skpd', '1', '1'),
(163, 'R-00010', '15', 'skpd', '1', '1'),
(164, 'R-00010', 'Tim Kajian', 'umum', '1', '1'),
(179, 'R-00011', 'Tim Kajian', 'umum', '1', '1'),
(195, 'R-00011', '5', 'K-00002', '1', '1'),
(196, 'R-00011', '8', 'K-00002', '1', '1'),
(197, 'R-00011', '18', 'K-00002', '1', '1'),
(198, 'R-00011', '26', 'K-00002', '1', '1'),
(199, 'R-00011', '30', 'K-00002', '1', '1'),
(200, 'R-00011', '33', 'K-00002', '1', '1'),
(201, 'R-00011', '35', 'K-00002', '1', '1'),
(202, 'R-00011', '38', 'K-00002', '1', '1'),
(203, 'R-00011', '44', 'K-00002', '1', '1'),
(204, 'R-00011', '46', 'K-00002', '1', '1'),
(205, 'R-00011', '48', 'K-00002', '1', '1'),
(206, 'R-00011', '1', 'skpd', '1', '1'),
(207, 'R-00011', '12', 'skpd', '1', '1'),
(208, 'R-00011', '15', 'skpd', '1', '1'),
(209, 'R-00011', '16', 'skpd', '1', '1'),
(222, 'R-00012', 'Tidak ada', 'umum', '1', '1'),
(241, 'R-00012', '7', 'K-00001', '1', '1'),
(242, 'R-00012', '10', 'K-00001', '1', '1'),
(243, 'R-00012', '12', 'K-00001', '1', '1'),
(244, 'R-00012', '13', 'K-00001', '1', '1'),
(245, 'R-00012', '19', 'K-00001', '1', '1'),
(246, 'R-00012', '22', 'K-00001', '1', '1'),
(247, 'R-00012', '25', 'K-00001', '1', '1'),
(248, 'R-00012', '28', 'K-00001', '1', '1'),
(249, 'R-00012', '32', 'K-00001', '1', '1'),
(250, 'R-00012', '37', 'K-00001', '1', '1'),
(251, 'R-00012', '45', 'K-00001', '1', '1'),
(252, 'R-00012', '52', 'K-00001', '1', '1'),
(253, 'R-00012', '1', 'skpd', '1', '1'),
(254, 'R-00012', '11', 'skpd', '1', '1'),
(255, 'R-00012', '12', 'skpd', '1', '1'),
(256, 'R-00012', '15', 'skpd', '1', '1'),
(257, 'R-00012', '18', 'skpd', '1', '1'),
(258, 'R-00012', '19', 'skpd', '1', '1'),
(259, 'R-00013', '5', 'K-00002', '1', '1'),
(260, 'R-00013', '8', 'K-00002', '1', '1'),
(261, 'R-00013', '18', 'K-00002', '1', '1'),
(262, 'R-00013', '33', 'K-00002', '1', '1'),
(263, 'R-00013', '38', 'K-00002', '1', '1'),
(264, 'R-00013', '48', 'K-00002', '1', '1'),
(265, 'R-00013', 'PDAM, Perekonomian', 'umum', '1', '1'),
(266, 'R-00014', '5', 'K-00002', '1', '1'),
(267, 'R-00014', '8', 'K-00002', '1', '1'),
(268, 'R-00014', '18', 'K-00002', '1', '1'),
(269, 'R-00014', '26', 'K-00002', '1', '1'),
(270, 'R-00014', '30', 'K-00002', '1', '1'),
(271, 'R-00014', '33', 'K-00002', '1', '1'),
(272, 'R-00014', '35', 'K-00002', '1', '1'),
(273, 'R-00014', '38', 'K-00002', '1', '1'),
(274, 'R-00014', '44', 'K-00002', '1', '1'),
(275, 'R-00014', '46', 'K-00002', '1', '1'),
(276, 'R-00014', '48', 'K-00002', '1', '1'),
(277, 'R-00014', '16', 'skpd', '1', '1'),
(278, 'R-00014', 'Perwakilan PKL Barito Karangtempel', 'umum', '1', '1'),
(279, 'R-00015', '11', 'K-00003', '1', '1'),
(280, 'R-00015', '15', 'K-00003', '1', '1'),
(281, 'R-00015', '16', 'K-00003', '1', '1'),
(282, 'R-00015', '17', 'K-00003', '1', '1'),
(283, 'R-00015', '23', 'K-00003', '1', '1'),
(284, 'R-00015', '24', 'K-00003', '1', '1'),
(285, 'R-00015', '31', 'K-00003', '1', '1'),
(286, 'R-00015', '36', 'K-00003', '1', '1'),
(287, 'R-00015', '40', 'K-00003', '1', '1'),
(288, 'R-00015', '41', 'K-00003', '1', '1'),
(289, 'R-00015', '43', 'K-00003', '1', '1'),
(290, 'R-00015', '49', 'K-00003', '1', '1'),
(291, 'R-00015', '1', 'skpd', '1', '1'),
(292, 'R-00015', '15', 'skpd', '1', '1'),
(293, 'R-00015', 'CV. KRCI', 'umum', '1', '1'),
(294, 'R-00016', '11', 'K-00003', '1', '1'),
(295, 'R-00016', '15', 'K-00003', '1', '1'),
(296, 'R-00016', '16', 'K-00003', '1', '1'),
(297, 'R-00016', '17', 'K-00003', '1', '1'),
(298, 'R-00016', '23', 'K-00003', '1', '1'),
(299, 'R-00016', '24', 'K-00003', '1', '1'),
(300, 'R-00016', '31', 'K-00003', '1', '1'),
(301, 'R-00016', '36', 'K-00003', '1', '1'),
(302, 'R-00016', '40', 'K-00003', '1', '1'),
(303, 'R-00016', '41', 'K-00003', '1', '1'),
(304, 'R-00016', '43', 'K-00003', '1', '1'),
(305, 'R-00016', '49', 'K-00003', '1', '1'),
(306, 'R-00016', '15', 'skpd', '1', '1'),
(307, 'R-00016', '23', 'skpd', '1', '1'),
(308, 'R-00016', 'Tidak ada', 'umum', '1', '1'),
(309, 'R-00017', '7', 'K-00001', '1', '1'),
(310, 'R-00017', '10', 'K-00001', '1', '1'),
(311, 'R-00017', '12', 'K-00001', '1', '1'),
(312, 'R-00017', '13', 'K-00001', '1', '1'),
(313, 'R-00017', '19', 'K-00001', '1', '1'),
(314, 'R-00017', '22', 'K-00001', '1', '1'),
(315, 'R-00017', '25', 'K-00001', '1', '1'),
(316, 'R-00017', '28', 'K-00001', '1', '1'),
(317, 'R-00017', '32', 'K-00001', '1', '1'),
(318, 'R-00017', '37', 'K-00001', '1', '1'),
(319, 'R-00017', '45', 'K-00001', '1', '1'),
(320, 'R-00017', '52', 'K-00001', '1', '1'),
(321, 'R-00017', '5', 'skpd', '1', '1'),
(322, 'R-00017', 'tidak ada', 'umum', '1', '1'),
(323, 'R-00018', '5', 'K-00002', '1', '1'),
(324, 'R-00018', '8', 'K-00002', '1', '1'),
(325, 'R-00018', '18', 'K-00002', '1', '1'),
(326, 'R-00018', '26', 'K-00002', '1', '1'),
(327, 'R-00018', '30', 'K-00002', '1', '1'),
(328, 'R-00018', '33', 'K-00002', '1', '1'),
(329, 'R-00018', '35', 'K-00002', '1', '1'),
(330, 'R-00018', '38', 'K-00002', '1', '1'),
(331, 'R-00018', '44', 'K-00002', '1', '1'),
(332, 'R-00018', '46', 'K-00002', '1', '1'),
(333, 'R-00018', '48', 'K-00002', '1', '1'),
(334, 'R-00018', '1', 'skpd', '1', '1'),
(335, 'R-00018', '3', 'skpd', '1', '1'),
(336, 'R-00018', '16', 'skpd', '1', '1'),
(337, 'R-00018', '24', 'skpd', '1', '1'),
(338, 'R-00018', '25', 'skpd', '1', '1'),
(339, 'R-00018', '26', 'skpd', '1', '1'),
(340, 'R-00018', 'Koordinator PKL bapak Yulianto', 'umum', '1', '1'),
(341, 'R-00019', '5', 'K-00002', '1', '1'),
(342, 'R-00019', '8', 'K-00002', '1', '1'),
(343, 'R-00019', '18', 'K-00002', '1', '1'),
(344, 'R-00019', '26', 'K-00002', '1', '1'),
(345, 'R-00019', '30', 'K-00002', '1', '1'),
(346, 'R-00019', '33', 'K-00002', '1', '1'),
(347, 'R-00019', '35', 'K-00002', '1', '1'),
(348, 'R-00019', '38', 'K-00002', '1', '1'),
(349, 'R-00019', '44', 'K-00002', '1', '1'),
(350, 'R-00019', '46', 'K-00002', '1', '1'),
(351, 'R-00019', '48', 'K-00002', '1', '1'),
(352, 'R-00019', '16', 'skpd', '1', '1'),
(353, 'R-00019', 'Perwakilan BKL Barito Mlatiharjo', 'umum', '1', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pimpinan`
--

CREATE TABLE `pimpinan` (
  `id` int(9) NOT NULL,
  `id_anggota` varchar(9) NOT NULL,
  `jabatan` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pimpinan`
--

INSERT INTO `pimpinan` (`id`, `id_anggota`, `jabatan`) VALUES
(1, '1', 'Ketua DPRD Kota Semarang'),
(2, '2', 'Wakil Ketua DPRD Kota Semarang'),
(3, '3', 'Wakil Ketua DPRD Kota Semarang'),
(4, '4', 'Wakil Ketua DPRD Kota Semarang');

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
  `hasil_rapat` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `rapat`
--

INSERT INTO `rapat` (`id`, `kode_rapat`, `nomor_surat`, `acara`, `keterangan`, `warna`, `kategori`, `tanggal`, `tanggal_selesai`, `jam`, `jam_berakhir`, `materi`, `pemimpin`, `nama_file`, `hasil_rapat`) VALUES
(1, 'R-00001', '-', 'Rapat Dengar Pendapat', 'Ruang Rapat Komisi A', '#D91E18', 'Komisi', '2018-05-22', '2018-05-22', '09:30:00', '00:00:00', 'Membahas capaian kinerja Set. DPRD tahun 2018 dan TPP Kota Semarang', 10, 'file_1527926713.pdf', '<ol><li>Capaian kinerja Setwan selama catur wulan pertama pada  tahun 2018 sudah cukup baik, yaitu penyerapan anggaran sebesar 20,43 persen sedangkan secara fusik sebesar 39,77 persen, namun perlu ditingkatkan lagi agar output fisik dan penyerapan anggaran agar dapat lebih optimal.</li><li>Perhitungan TPP dilingkungan pemkot smg menggunakan kelas jabatan.</li><li>Dalam pemberian TPP dilingkungan RSUD kota smg  perlu ditinjau kembali agar tidak menimbulkan gap yg terlalu lebar dg OPD lainnya.</li><li>Komisi A DPRD kota smg pada dasarnya menyetujui rencana kenaikan TPP bagi ASN di Kota Semarang sepanjang sesuai dg RPJMD dan kenaikannya tdk lebih dari 50 persen.</li><li>Untuk biaya perjalanan dinas dibayarkan sesuai dg surat tugas yg meliputi biaya transportasi, biaya penginapan, uang harian dan uang representasi berdasarkan SSH.</li><li>Pemkot smg agar mengkaji ulang terkait dg SSH representasi perjalanan dinas bagi anggota DPRD menyesuaikan dg besaran representasi pimpinan dewan.</li><li>Sehubungan dg penghapusan uang representasi perjalanan dinas bagi pejabat eselon 3 dan 4, maka diusulkan agar besaran uang harian ditinjau ulang utk dinaikkan.</li><li>TAPD dimohon bisa memaparkan kajian ttg SSH representasi dan  TPP ASN sebelum pembahasan KUA PPAS.</li></ol>'),
(2, 'R-00002', '-', 'Rapat Pansus', 'Ruang Serbaguna 3', '#f3c200', 'Pansus', '2018-05-22', '2018-05-22', '10:00:00', '00:00:00', 'Membahas materi raperda', 33, 'file_1527926713.pdf', '<ol><li>Pembentukan BUMD termasuk BPR Syariah berpedoman pd PP No 54 Th 2017 ttg BUMD yg baru ditetapkan pd bulan Desember 2017 shg materi raperda yg telah disusun sebelumnya harus disesuaikan</li><li>Usulan pendirian BUMD dilakukan Kepala Daerah kpd Menteri</li><li>Usulan pendirian diatas dilampiri :</li><ul><li>Kebutuhan daerah</li><li>Analisa kelayakan usaha</li><li>Ringkasan laporan keuangan Pemerintah Daerah 3 thn terakhir</li><li>Dokumen Perda ttg APBD 3 thn terakhir</li><li>Dokumen RPJMD</li></ul><li>Menteri melakukan penilaian atas usulan rencana pendirian BUMD dimana hasil penelitian tsb disampaikan kpd gubernur dan bupati/ walikota plng lmbat 15 hari kerja sejakusulan rencana pendirian BUMD diterima</li><li>Berdasarkan hasil penilaian diatas, Daerah dpt menyusun raperda yg mengatur ttg pendirian BUMD</li><li>Pansus akan mengajukan permohonan pendampingan selama pembahasan kpd Otoritas Jasa Keuangan Wil Prov Jawa tengah dan DIY</li></ol>'),
(3, 'R-00003', '-', 'Rapat Badan Musyawarah', 'Ruang Serbaguna 2', '#3598dc', 'Badan', '2018-05-23', '2018-05-23', '11:00:00', '00:00:00', 'Membahas Surat Komisi A No 23/A/DPRD/2018 Tentang Permohonan Perubahan Jadwal Kunjungan Kerja', 4, 'file_1527933252.pdf', '<ol><li>Menyetujui permohonan komisi A untuk merubah waktu kunker dalam provinsi semula tgl 21-22 juni 2018 menjadi tgl 3-4 juni 2018</li><li>Menyetujui permohonan BPP utk mengubah waktu kunker semula tgl 24-27 juni menjadi tgl 1-4 juli 2018</li><li><div>Merubah jadwal dan menjadwalkan kegiatan baru sbb dibawah ini :<br><img src=\"https://dprd.semarangkota.go.id/sindangjalin/assets/hasil_rapat/WhatsApp Image 2018-05-30 at 12.05.35 PM.jpeg\" width=\"620\"></div></li></ol>'),
(4, 'R-00004', '30/A/DPRD/2018', 'Rapat Dengar Pendapat Komisi A ', 'Ruang Rapat Komisi A DPRD Kota Semarang', '#D91E18', 'Komisi', '2018-07-10', '2018-07-10', '10:00:00', '00:00:00', 'Membahas kajian ttg pengawasan dan pengendalian tenaga kontrak dilingkungan pemkot smg', 45, 'file_1531294572.jpeg', '<h2><b>Kesimpulan/hasil yg diperoleh:</b></h2><ol><li>Dasar hukum penggunana tenaga kontrak mengacu pada UU no 5 tahun 2014 dan perwal no.8 tahun 2017 sedangkan filosofinya adalah profesi yg memiliki nilai, kode etik, kompetensi dan organisasi </li><li>Tenaga kontrak yg ada di kota smg berdasarkan pada kebijakan lokal tdk murni dr UU Asn </li><li>Berdasarkan survey penerimaan tenaga kontrak di kota smg rata2  blm memakai instrumen analisis beban kerja karena masing2 opd melakukan pengadaan sendiri\r\n4. Penetapan kebutuhan tenaga kontrak perlu diatur mekanisme dan instrumen utk melakukan ABK dan di berlakukan utk seluruh Opd termasuk bag. Organisasi selaku Opd yg bertanggung jwb menverifikasi kebutuhan tenaga kerja kontrak </li><li>Mekanisme Pengadaannya selama ini blm ada kesamaan tiap opd krn dilakukan sendiri2 sehingga perlu penyusunan dan penerapan Sop pengadaan scr terpusat utk meningkatkan transparasi akubtabilitas dengan membentuk panitia independen dlm pengadaan\r\n6. Untuk penggajian dan tunjangan semua Opd  sesuai umk                                                                     </li></ol>'),
(5, 'R-00005', '33/A/DPRD/2018', 'Rapat Dengar Pendapat Komisi A ', 'Ruang Rapat Komisi A DPRD Kota Semarang', '#D91E18', 'Komisi', '2018-07-11', '2018-07-11', '09:30:00', '00:00:00', 'rapat kerja membahas capaian kinerja diskominfo bulan jan  s/d. Juni 2018', 45, 'file_1531364118.jpeg', 'Nama keg.: Rapat dengar pendapat\r\n- Hari/Tgl: rabu, 11 juli 2018\r\n-Jam : 09.30 - 12.30 wib\r\n-AKD : Komisi A \r\n- Tempat : Ruang Rapat Komisi A\r\n-Agenda : rapat kerja membahas capaian kinerja diskominfo bulan jan  s/d. Juni 2018\r\n- Pimp Rapat :  Bapak wisnu pujonggo, sh\r\n- Dihadiri oleh :\r\n1. Anggota Komisi A\r\n2. Sekretaris diskominfo beserta jajarannya\r\n- Kesimpulan/hasil yg diperoleh:\r\n1. Capaian kinerja diskominfo sampai dengan bulan juni secara fisik sebesar 49,1 persen sehingga penyerapan anggaran belum sampai 50 persen \r\n2. Pengelolaan bandwidth supaya tdk dikerjasamakan dg pihak ketiga dg harapan kewenangan penuh ada di diskominfo\r\n3. Sebelum menentukan titik pemadangan videotron supaya dilakukan studi/kajian terlebih dahulu serta videotron yg sdh terpadang di evaluasi, utk anggaran  videotron th  2018 supaya di pasang di area bandara ahmad yani\r\n4. Untuk materi penayangan pd videotron jgn sampai ada iklan/sponsor terkait konten akan diseleksi terlebih dahulu oleh diskominfo sekali masuk maksim'),
(6, 'R-00006', '-', 'Rapat dengar pendapat', 'Ruang Rapat Komisi A', '#D91E18', 'Komisi', '2018-07-11', '2018-07-11', '09:30:00', '00:00:00', 'Rapat kerja membahas capaian kinerja diskominfo bulan jan  s/d. Juni 2018', 45, 'file_1531449722.pdf', '1. Capaian kinerja diskominfo sampai dengan bulan juni secara fisik sebesar 49,1 persen sehingga penyerapan anggaran belum sampai 50 persen \r\n2. Pengelolaan bandwidth supaya tdk dikerjasamakan dg pihak ketiga dg harapan kewenangan penuh ada di diskominfo\r\n3. Sebelum menentukan titik pemadangan videotron supaya dilakukan studi/kajian terlebih dahulu serta videotron yg sudah terpadang di evaluasi, utk anggaran  videotron th  2018 supaya di pasang di area bandara ahmad yang\r\n4. Untuk materi penayangan pd videotron jgn sampai ada iklan/sponsor terkait konten akan diseleksi terlebih dahulu oleh diskominfo sekali masuk maksimal 5 slot serta menayangkan kegiatan DPRD Kota  Semarang\r\n5. Pengelolaan bandwidth sdh dilakukan secara maksimal namun masih terdapat kendala pada aplikasi ruter (alat pembagi jaringan) shg pemakainnya blm bs maksimal\r\n6. Diskominfo saat ini masih kekurangan tenaga tenaga IT jaringan hy ada 2 personil non asn  sehingga perlu penambahan\r\n7. Perekrutan tenag'),
(7, 'R-00007', '33/A/DPRD/2018', 'Rapat Dengar Pendapat Komisi A ', 'Ruang Rapat Komisi A DPRD Kota Semarang', '#D91E18', 'Komisi', '2018-07-17', '0000-00-00', '10:00:00', '00:00:00', ' Membahas kajian ttg pengawasan dan pengendalian tenaga kontrak dilingkungan pemkot smg', 19, 'file_1531872725.jpeg', 'Kesimpulan/hasil yg diperoleh:\r\n1. Konsep dari tenaga kontrak adalah : bukan tenaga P3K seperti tertuang dalam UU ASN,  bukan pula tenaga outsoursing seoerti tertuang dalam UU tenaga kerja, penerapan tenaga kontrak mengkompilasi konsep P3K  dan konsep tenaga kerja  outsoursing  dengan penyesuaian2 atas kondisi lokal pemkot smg\r\n2. Di kota smg ada dua jenis tenaga kontrak yaitu tenaga kobtrak dg perjanjian kerja adanya kegiatan (kontrak dg kpa) dan outsoursing dg perjanjian pihak ketiga.\r\n3. Definisii tenaga kontrak dan honor agar bs disesuaikan supaya lebih jelas.\r\n4. Utk honor tenaga kontrak  sdh tercantum dlm ssh (kpa tdk bs membayarkan melebihi ssh)\r\n5. Perlu adanya revisi perwal nomor 58 tahun 2018\r\n6. Abk yg dilakukan bag organisasi agar lebih teliti dan komprehensif agar tdk terjadi kekurangan pegawai pd opd terkait\r\n7. Perlu penyusunan dan penerapan instrumen evaluasi kinerja dan disiplin spt asn dan perlu di buatkan aturan khusus utk hal tsb\r\n8. Pemutusan hub kerja shrsnya berdasarkan '),
(8, 'R-00008', '33/A/DPRD/2015', 'Rapat Dengar Pendapat Komisi A ', 'Ruang Rapat Komisi A DPRD Kota Semarang', '#D91E18', 'Komisi', '2018-07-24', '0000-00-00', '00:30:00', '02:30:00', 'Rapat kerja dengan kesbangpol terkait capaian kinerja bulan jan  s/d. Juni 2018', 10, 'file_1532658258.jpeg', '1. Capaian kinerja kesbangpol dari bulan januari s/d. Juni 2018  secara fisik sebesar 50 persen\r\n2. Dalam program pengembangan wawasan kebangsaan supaya di laporkan capaiannya secara fisik. \r\n3. Kesbangpol selalu mengadakan rapat setiap minggu bersama kominda (komunitas intelijen daerah) dan melaporkan hasilnya kepada Komisi A\r\n4. Terkait dengan tenaga kerja asing Yg ada di smg kesbangpol sdh melakukan sosialisasi dalam rangka pengawasan terhadap orang asing dg membuat tim pengawasan berdasarkan sk walikota. \r\n5. Khusus Pelajar asing sampai saat ini belum ada pengawasan maupun sosialisasi namun kesbangpol sdh menyurati universitas/sekolah2 Yg ada pelajar/mahasiswa asing supaya mengurus surat2nya. \r\n6. Untuk perizinan tenaga kerja asing berada di disnaker.\r\n7. Sampai saat ini kesbangpol Blm pernah mengeluarkan izin operasional bagi ormas asing. '),
(9, 'R-00009', '35/A/DPRD/2015', 'Rapat Dengar Pendapat Komisi A ', 'Ruang Rapat Komisi A DPRD Kota Semarang', '#D91E18', 'Komisi', '2018-07-24', '0000-00-00', '09:30:00', '00:00:00', 'Membahas kajian ttg implementasi penyelenggaraan administrasi kependudukan di kota smg', 10, 'file_1532661419.jpeg', '1. Kajian adminduk di buat Utk mengkaji kualitas pelayanan adminduk dan Memetakan permasalahan ke masyarakat dalam melayani adminduk serta  membuat rekomendasi grand desain peningkatan pelayanan adminduk di kota smg karena dukcapil merupakan pencatat penduduk  Yg meliputi data layanan dan data kependudukan. \r\n2. Adminduk tsb meliputi pendaftaran penduduk, pencatatan sipil dan pengelolaan data informasi kependudukan. \r\n3. Pada dinas dukcapil saat ini masih kekurangan personil Utk mendukung pelayanan adminduk berdasarkan UU nomor 25 tahun 2009 ttg pelayanan publik\r\n4. Dalam memberikan pelayanan adminduk dukcapil sdh bekerja sama dengan pihak ketiga antara lain dg rumah sakit, dan bidan dalam pembuatan akte kelahiran\r\n5.  Utk kelengkapan data pendukung pembuatan kajian tim Pengkaji supaya berkoordinasi dg dukcapil kota smg\r\n'),
(10, 'R-00010', '-', 'Rapat dengar pendapat', 'Ruang Rapat Komisi B', '#D91E18', 'Komisi', '2018-07-30', '0000-00-00', '09:30:00', '14:00:00', 'Rispoda potensi Balik Nama Kendaraan Bermotor (BBNKB)', 5, 'file_1533054846.pdf', '1. Pajak BBNKB merupakan pajak atas penyerahan hak milik kendaraan bermotor sebagai akibat perjanjian dua pihak / perbuatan sepihak atau keadaan yang terjadi karena jual beli,tukar menukar,hibah, warisan ( UU No 28/2009)\r\n2. Pajak BBNKB menjadi salah satu sumber pendapatan daerah yang besar pengaruhnya terhadap pembangunan daerah\r\n3. Peningkatan pembelian kendaraan bermotor yang tiap tahun meningkat 10 s/d 12 % seharusnya berkolerasi dengan penerimaan BBNKB, namun pada prakteknya hanya terjadi transaksi jual beli namun tidak untuk balik nama kendaraan, khususnya pada transaksi kendaraan bekas.\r\n4. Untuk Kota Semarang sendiri, BBNKB merupakan pendapatan yang diterima dari bagi hasil oleh Pemerintah Provinsi yang perhitungannya dengan prosentase 70 ( Provinsi ) 30 (kabupaten/kota se Provinsi), Tahun 2018 ini target BBNKB Kota Semarang 157 Milyar dan sampai dengan Bulan Juni terealisasi 74,56 Milyar\r\n5. Untuk Pemerintah Kota Semarang target Penerimaan BBNKB tiap tahun nilainya tidak selalu me'),
(11, 'R-00011', '-', 'Rapat dengar pendapat', 'Ruang Rapat Komisi B', '#D91E18', 'Komisi', '2018-07-30', '0000-00-00', '12:00:00', '14:00:00', 'Rispoda pendapatan tera ulang kemetrologian  & kajian tentang sentralisasi pedagang kaki lima (PKL)\r\n', 5, 'file_1533140368.pdf', '1. UU No 23 th 2014 Tentang Pemerintah Daerah sebagaimana telah diubah dengan UU no 9 tahun 2015 tentang perubahan kedua atas UU No 23 Tahun 2014 mengatakan bahwa urusan Metrologi Legal berupa layanan tera, tera ulang alat ukur timbang takar dan perlengkapannya (UTTP) serta pengawasan menjadi urusan Pemerintah Kabupaten/Kota\r\n2. Menurut UU no 28 tahun 2009 ps 1109 salah satu obyek retribusi daerah yang sah salah satunya adalah retribusi jasa umum dan pelayanan tera dan tera ulang merupakan salah satu jenis retribusi jasa umum.\r\n3. UPT Metrologi Kota Semarang yang merupakan peralihan Metrologi Jawa Tengah baru beroperasi sekitar pertengahan tahun 2017\r\n4. Potensi penerimaan retribusi dari pelayanan tera dan tera ulang di Kota Semarang tahun 2017 yang terealisasi sebanyak 2.877 orang dengan hasil retribusi 628 juta yang dilaksanakan hanya 2 bulan yaitu Nopember dan Desember\r\n5. Potensi wajib tera ulang tahun 2018 sebanyak 9.403 orang dengan target 3,5 milyar terealisasi s/d Juni Sebanyak 700'),
(12, 'R-00012', '-', 'Rapat dengar pendapat', 'Ruang Rapat Komisi A', '#D91E18', 'Komisi', '2018-07-30', '0000-00-00', '10:00:00', '14:00:00', 'Kajian ttg sistem akuntabilitas kinerja instansi pemerintah kota semarang', 7, 'file_1533141844.pdf', '1. Akuntabikitas/keterbukaan pemkot semarang harus terbuka thd publik agar bisa di koreksi. \r\n2. Pusat informasi di kota smg saat ini sdh di kelola dg baik dan bagus bila di bandingkan dg kota/kab lain\r\n3. Saat ini Sakip di kota smg utk keterbukaan publik belum sepenuhnya tercapai, meskipun capaian kinerja th 2016 sangat tinggi namun menurut data yg ada di kemenpan nilai sakipnya masih standar dg nilai 60=B, hal ini dpt di pengaruhi beberapa faktor antara lain : data tdk detail, target dan output kerja tdk sinkron, bu sakip tdk nyambung shg perlu cluster/diklat pim scr khusus. \r\n4. Kedepan diharapkan ada bintek utk evaluasi sakip dg narasumber langsung dari kemenpan\r\n5. Evaluasi kinerja Asn di kota semarang blm berjalan dg baik karena saat ini masih mendapat nilai sedang (6).\r\n6. Dengan di bangunnya kantor diklat yg baru di harapkan dapat meningkatkan kualitas dan mutunya\r\n7. Opd yg ada di kota smg di harapkan agar bs memaksimalkan program monitoring dan evaluasi utk mendukung sakip\r\n8. Pengu'),
(13, 'R-00013', '1-13/8/2018/komisi B', 'Rapat dengar pendapat Komisi B ', 'Ruang Rapat Komisi B DPRD Kota Semarang', '#D91E18', 'Komisi', '2018-08-13', '0000-00-00', '10:00:00', '00:00:00', 'Membahas kelanjutan pembanguna proyek SPAM Semarang Barat,  Membahas kekosongan jabatan direksi PDAM Kota Semarang', 5, 'file_1534222728.jpeg', '<ol><li>SPAM\r\nSemarang Barat adalah proyek pembangunan SPAM yang direncanakan sebagai pilot\r\nproject SPAM dengan skema pendanaan KPBU di Indonesia. SPAM Semarang Barat akan\r\nmenyelesaikan permasalahan krisis air bersih dan penurunan permukaan tanah\r\nkarena penggunaan air tanah di Kota Semarang. <br></li><li>Proses\r\nPembangunan SPAM Semarang Barat telah sampai pada tahapan lelang dan ada 4\r\n(empat) konsorsium yang lulus tahapan pra kualifikasi, namun ada 1 (satu)\r\nkonsorsium mengundurkan diri. <br></li><li>Dukungan\r\nkelayakan dari Kementerian Keuangan (VGF) telah diterbitkan oleh Menteri\r\nKeuangan dengan Nomor Surat S-450/MK.08/2018 tanggal 28 Juni 2018. <br></li><li>Sementara\r\ndukungan dari Kementerian PUPR berupa pembangunan dukungan fasilitas Intake\r\noleh Dirjen Sumber Daya air sampai saat ini pelaksanaan kontruksi sudah\r\nmencapai 25 %, kemudian untuk jaringan pipa distribusi Utama oleh Dirjen Cipta\r\nKarya telah disetujui melalui surat Menteri PUPR No PR 0103 Mn/249 tgl 2\r\nPebruari 2018. <br></li><li>MOU antara\r\nKementerian PUPR dan Pemerintah Kota Semarang telah dilakukan dan akan\r\nditindaklanjuti dengan perjanjian kerjasama.</li><li>Telah\r\nditerbitkan Perda Kota Semarang nomor 8 Tahun 2018 yang mengatur tentang KPBU\r\nSPAM Semarang Barat. <br></li><li>Kesediaan\r\npenjaminan dari PII sudah diterbitkan Surat Nomor 406/PII/DRU/0618, tanggal 28\r\nJuni 2018. <br></li><li>Proses\r\npembebasan lahan ditargetkan selesai pada bulan Oktober 2018 </li><li>Berkaitan\r\nkekosongan jabatan direksi PDAM, seleksi masih berlangsung dan pengumuman hasil\r\nseleksi akan disampaikan segera</li></ol><br>'),
(14, 'R-00014', '-', 'Rapat Komisi B', 'Ruang Serbaguna 2 DPRD Kota Semarang', '#D91E18', 'Komisi', '2018-08-27', '0000-00-00', '10:00:00', '00:00:00', 'Membahas rencana relokasi PKL Barito Karangtempel dan dilanjutkan kunjungan lapangan', 5, '', '1. Bapak Sugiyarto (anggota PKL0<br>Sosialisasi yang telah dilakukan antara PKL Karangtempel dengan Disperindag terkait permohonan untuk audiensi yang jeals terkait gambar tentang relokasi PKL, baik batas maupun bentuknya, bangunan-bangunan mana saja yang terkena infrastruktur BKT.<br>Opsi-Opsi yang diusulkan masyarakat PKL terkait relokasi yaitu:<br>- Siap pindah, namun pemerintah menyediakan sarana prasarana sesuai dengan kebutuhan seluruh PKL<br>- Mohon dilakukan penataan ulang terkait lokasi, agar mudah mengakses peluang untuk usaha<br>- Dicarikan tanah milik pemerintah kota yang sesuai dengan kebutuhan untuk usaha warga (sudah disewakan tanah yang berlokasi di MAJT dengan jangka waktu 3 tahun yang akan dilakukan survey lapangan pada tanggal 28 Agustus 2018)<br><br>2. Tanggapan (Bp. Agus)<br>Porsi \"tercukupi\" menurut pemerintah dengan masyarakat itu berbeda, sebagian masyarakat yang sudah pindah di Penggaron juga ada yang membangun sendiri. Relokasi akan difasilitasi oleh pemerintah, namun tidak secara instant karena dana yang turun juga belum penuh dari pemerintah pusat.<br><br>3. Tanggapan (Bp Arif Kubuwono)<br>Progress dari OPD belum diklarifikasi dengan PKL, untuk sementara ini inventaris hanya bisa ditampung karena dari Dinas yang bisa memutuskan.'),
(15, 'R-00015', '005/258', 'Rapat Kerja Komisi C DPRD Kota Semarang', 'Ruang Rapat Komisi C', '#D91E18', 'Komisi', '2018-08-27', '0000-00-00', '10:00:00', '12:30:00', '1. Pengelolaan Daerah Aliran Sungai.\r\n2. Implementasi Sistem Pengelolaan Persampahan Berbasis Masyarakat.\r\n3. Kajian Tentang Dampak Kawasan Industri Kota Semarang.', 11, 'file_1535591887.jpg', '<div><span><b>1.    \r\n</b><b>Laporan\r\nPendahuluan Kajian Daerah Aliran Sungai (DAS) Di Kota Semarang.</b></span> <br></div><div><ul><li>Diharapkan untuk\r\nmencari tahu limbah apa yang paling dominan di kota Semarang.</li><li>Diharapkan\r\npengelolaan DAS yang maksimal dapat \r\nberkontribusi guna menangani banjir di kota Semarang. </li><li>Apa output yang\r\ndihasilkan dari pengadaan pengelolaan DAS di kota Semarang. </li><li>Model\r\npengelolaan DAS apa saja yang digunakan di kota Semarang. </li><li>Diharapkan\r\nmenampilkan kondisi dan solusi dari kondisi yang ada di lapangan, dan segera\r\nmenangani yang prioritas terlebih dahulu.</li></ul></div><div><br></div><div><span><b>2.    \r\n</b><b>Implementasi\r\nSistem Pengelolaan Persampahan Berbasis Masyarakat.</b></span></div><div><ul><li>\r\n\r\nTujuan dari\r\npengelolaan sampah ini adalah mengurangi pemasukan sampah ke TPA di Semarang\r\nsesuai dengan Peraturan Daerah No.6 Tahun 2012. Karena masyarakat Semarang\r\nmemproduksi sampah sebanyak 1.400 Ton/Hari.</li><li>Solusi yang\r\ndisarankan adalah berupa bank sampah dan pengelolaan kompos. </li><li>Tidak ada hal\r\nyang baru atau inovasi dalam penyampaian dari narasumber. </li><li>Di dalam\r\nmasyarakat sudah memiliki pengelolaan sampah yang tidak resmi seperti bank\r\nsampah. Seharusnya tidak hanya dari masyarakatnya saja, tetapi juda dari OPD\r\nyang terkait. </li><li>Masyarakat yang\r\ndimaksud adalah sekelompok kecil saja atau seluruhnya. Seharusnya tidak hanya\r\ndikalangan masyarakat menengah saja yang ikut serta mengolah sampah ini.</li></ul></div><div><br></div><div> <span><b>3.    \r\n</b><b>Kajian Tentang\r\nDampak Kawasan Industri Kota Semarang.</b></span> <br></div><div><ul><li>\r\nDampak\r\nlingkungan industri sangat besar, terutama pada lingkungan di sekitar industri.\r\nContohnya kawasan industri di kaligawe yang terlihat kumuh, dan bagaimana cara\r\nmengelola dampak tersebut.</li><li>Tujuan dari\r\nkajian disini adalah mengidentifikasi, memberi rekomendasi dan solusi. </li><li>Dimana wilayah\r\nyang paling besar mendapatkan dampak yang buruk dari industri, dan segera\r\nditangani. Jika berhasil ditangani, diharapkan dapat menjadi tempat percontohan\r\nbagi wilayah lain yang terkena dari dampak industri. </li><li>Home industri\r\ndan pertanian, termasuk dalam klasifikasi industri yang seperti apa. </li><li>Agar dikaji\r\nsecara detail terkait tenaga kerja yang diserap oleh industri. </li><li>Dampak jalan\r\nyang dilewati oleh angkutan industri tersebut. </li><li>Sudah sejauh\r\nmana proses analisis atau baru di tahap pengumpulan data.\r\n\r\n</li></ul></div>'),
(16, 'R-00016', '005/263', 'Rapat Kerja Komisi C DPRD Kota Semarang', 'Ruang Rapat Komisi C', '#D91E18', 'Komisi', '2018-08-27', '0000-00-00', '11:00:00', '00:00:00', 'Pendekatan Teknologi Untuk Penanggulangan Banjir Kota Semarang.', 11, 'file_1535592431.jpg', '<div><span>·      \r\nBisakah air rob\r\ndiubah menjadi air PDAM.</span>\r\n\r\n<br></div><div><span>·      \r\nJenis, kapasitas\r\ndan model apa yang digunakan untuk mengatasi banjir.</span> <br></div><div>\r\n<span>·      \r\nMenjelaskan\r\npersyaratan seperti apa yang dapat memenuhi teknologi seperti apa.</span>\r\n\r\n</div><br><br><br><br>'),
(17, 'R-00017', '-', 'Rapat Komisi A', 'Ruang Rapat Komisi A', '#D91E18', 'Komisi', '2018-09-03', '0000-00-00', '10:00:00', '00:00:00', 'Capaian kinerja Inspektorat Kota Semarang', 10, '', '<ol><li>Inspektorat kota semarang mempunyai tugas membantu walikota dalam melaksanakan pengawasan terhadap penyelenggaraan urusan pemerintahan yang menjadi kewenangan daerah dan tugas pembantuan yang di tugaskan kepada daerah</li><li>Salah satu Fungsi inspektorat membuat perumusan kebijakan teknis pelaksanaan dan pengendalian di bidang pengawasan, perumusan rencana strategis sesuai dengan visi misi Walikota.</li><li>Program /kegiatan Pembinaan dan pengawasan yang dilakukan inspektorat meliputi : kinerja rutin pengawasan, pengawasan prioritas nasional, pengawalan reformasi birokrasi penegakan integritas dan peningkatan kapabilitas aparat pengawasan intern pemerintah (APIP) </li><li>Inspektorat Kota Semarang pada tahun 2018 melaksanakan 5 program dan 32 kegiatan.</li><li>Realisasi kegiatan sampai dengan bln agustus program kegiatan administrasi perkantoran mencapai 65, 29 %, program peningkatan sarpras aparatur mencapai 17,15 %, program peningkatan pengembangan sistem pelaporan pelaporan capaian kinerja dan keuangan 49,75 %, bu program peningkatan sistem pengawasan internal 57,43 ?n program peningkatan profesionalisme tenaga pemeriksa dan aparatur pengawasan 25,58 %. </li><li>Tim saber pungli dalam menyelesaikan permasalahan sdh obyektif dalam membuat laporan kepada walikota thd sanksi yang diberikan kepada aparatur yang melanggar</li><li>Setiap bulan inpektorat menurunkan 8 tim untuk melakukan pemeriksaan secara reguler, satu tim menangani 2 OPD</li><li>Bantuan partai politik dapat di pergunakan apabila sudah mendapatkan persetujuan dari Walikota dan setiap parpol berbeda2 .<br></li></ol>'),
(18, 'R-00018', '-', 'Rapat Dengar Pendapat', 'Ruang Serbaguna 2 DPRD', '#D91E18', 'Komisi', '2018-08-27', '0000-00-00', '10:00:00', '00:00:00', 'Audiensi Rencana Relokasi PKL Barito Karangtempel', 5, '', '<br><blockquote>Rapat dimulai pukul 10.30 dibuka oleh pimpinan rapat<br></blockquote><blockquote>Koordinator PKL bapak Yulianto menyampaikan bahwa terdapat 536 PKL yang tergabung dalam paguyuban PKL Karangtempel mendukung penuh Proyek BKT yang dilaksanakan Pemerintah dan bersedia pindah.<br></blockquote><blockquote>Sosialisasi sebelumnya antara PKL dan Dinas Perdagangan pada dasarnya PKL siap dipindah jika disediakan lokasi , sarana dan prasarana yang sesuai kebutuhan para PKL.<br></blockquote><blockquote> Mohon untuk lokasi relokasi agar mudah diakses oleh masyarakat sehingga tidak mengurangi pemasukan PKL selama ini.<br></blockquote><blockquote>Untuk relokasi PKL Barito Karangtempel sudah disediakan lokasi menggunakan Tanah MAJT yang disewa oleh Pemerintah selama 3 tahun ( 2019 sd 2021), setelah itu PKL berharap disediakan tempat permanen oleh Pemerintah.<br></blockquote><blockquote>Dalam proses relokasi diharapkan PKL dapat membangun sendiri lapak-lapak secara swadaya, karena belum dibahasnya anggaran di perubahan.<br></blockquote><blockquote>Pemerintah melalui Dinas Perdagangan menjanjikan akan membantu berkaitan dengan pemadatan tanah dan pemlesteran tanah untuk kios.<br></blockquote><blockquote>Jangka waktu pembongkaran PKL Barito Karang tempel diharapkan akhir September seluruh PKL Barito Karangtempel sudah pindah ke lokasi Relokasi di daerah MAJT.<br></blockquote><blockquote>Rapat diakhiri pukul 13.00 WIB dan ditutup oleh pimpinan rapat.<br></blockquote>'),
(19, 'R-00019', '-', 'Rapat Dengar Pendapat', 'Ruang RApat Komisi B', '#D91E18', 'Komisi', '2018-09-07', '0000-00-00', '09:00:00', '00:00:00', 'Audiensi dengan PKL Barito Mlatiharjo', 5, '', '<blockquote><div>Relokasi PKL Barito Mlatiharjo<br></div></blockquote><ol><li>Rapat dimulai pukul 09.30 dibuka oleh pimpinan rapat</li><li>Pimpinan rapat menyampaikan bahwa jumlah PKL Barito Mlatiharjo yang akan direlokasi menurut informasi bertambah dari sekitar 80 pedagang menjadi lebih dari 100 pedagang<br></li><li>Sosialisasi sebelumnya disampaikan bahwa terjadi salah informasi yang didapatkan Dinas Perdagangan bahwa jumlah Pedagang masih sama sesuai database yaitu sekitar 80 an pedagang yang siap direlokasi</li><li>PKL Barito Mlatiharjo sudah menyetujui untuk lokasi relokasi yaitu di Penggaron dan siap pindah seluruhnya mulai tanggal 9 September 2018</li><li>Pada dasarnya PKL Barito Mlatiharjo mengucapkan terimakasih sudah difasilitasi dan dibantu baik Oleh Angoota DPRD maupun Pemerintah dalam penyediaan lokasi relokasi </li><li>Permintaan pedagang mohon untuk Pemerintah dapat menambah fasilitas sarana dan prasarana yang ada di lokasi relokasi, sehingga memberikan kenyamanan pada pedagang </li><li>Rapat diakhiri pukul 11.00 WIB dan ditutup oleh pimpinan rapat.</li></ol><br>');

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
(1, 'BAPPEDA', 'Badan Perancanaan Daerah', '1'),
(2, 'B K D ', 'BAdan Kepegawaian Daerah', '1'),
(3, 'BPKAD', 'Badan Pengelolaan Keuangan & Aset', '1'),
(4, 'Badan Pendapatan Daerah', '-', '1'),
(5, 'Inspektor Kota', '-', '1'),
(6, 'Diskominfo', '-', '1'),
(7, 'Badan Kesbangpol', '-', '1'),
(8, 'RSUD', '-', '1'),
(9, 'Badan Penanggulangan Bencana Daerah', '-', '1'),
(10, 'Bag. Tata Pemerintahan', '-', '1'),
(11, 'Bag. Otonomi Daerah', '-', '1'),
(12, 'Bag. Hukum', '-', '1'),
(13, 'Bag. Organisasi', '-', '1'),
(14, 'Dinas Perhubungan', '-', '1'),
(15, 'Tenaga Ahli DPRD', 'Unit pendukung yang membantu tugas alat kelengkapan DPRD', '1'),
(16, 'Dinas Perdagangan', '-', '1'),
(17, 'Bagian Otonomi Daerah dan Kerjasama ', '-', '1'),
(18, 'BKPP', 'Badan Kepegawaian, Pendidikan dan Pelatihan Daerah', '1'),
(19, 'Bagian Tata Pemerintahan', '-', '1'),
(20, 'Dinas Lingkungan Hidup Kota Semarang', '-', '1'),
(21, 'Dinas Penataan Ruang Kota Semarang', '-', '1'),
(22, 'Dinas Perumahan dan Kawasan Permukiman Kota Semarang', '-', '1'),
(23, 'Dinas Pekerjaan Umum Kota Semarang', '-', '1'),
(24, 'BAPENDA', 'Badan Pendapatan Daerah', '1'),
(25, 'Kecamatan Semarang Timur', '-', '1'),
(26, 'Kelurahan Karangtempel', '-', '1');

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
  `status` enum('user','admin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `kd_user`, `username`, `password`, `nama_lengkap`, `tempat_lahir`, `tanggal_lahir`, `email`, `alamat`, `no_hp`, `foto`, `status`) VALUES
(1, 'A-0001', 'admin', '11111', 'ADMIN siNDANGJALIN', 'Semarang', '1557-02-01', 'user@admin.com', 'Jln. Pemuda 146', '(024) 3540089 - 3541', 'file_1531364845.png', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `agenda`
--
ALTER TABLE `agenda`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kode_agenda` (`kode_agenda`);

--
-- Indeks untuk tabel `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kode_jaldis` (`kode_jaldis`);

--
-- Indeks untuk tabel `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_komisi` (`id_komisi`);

--
-- Indeks untuk tabel `anggota_badan`
--
ALTER TABLE `anggota_badan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_badan` (`id_badan`,`id_anggota`);

--
-- Indeks untuk tabel `anggota_panja`
--
ALTER TABLE `anggota_panja`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kode_panja` (`kode_panja`,`id_anggota`);

--
-- Indeks untuk tabel `anggota_pansus`
--
ALTER TABLE `anggota_pansus`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kode_pansus` (`kode_pansus`,`id_anggota`);

--
-- Indeks untuk tabel `badan`
--
ALTER TABLE `badan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_badan` (`id_badan`);

--
-- Indeks untuk tabel `dasar_hukum`
--
ALTER TABLE `dasar_hukum`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kode_jaldis` (`kode_jaldis`);

--
-- Indeks untuk tabel `detail_jaldis`
--
ALTER TABLE `detail_jaldis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kode_jaldis` (`kode_jaldis`,`id_anggota`);

--
-- Indeks untuk tabel `guest`
--
ALTER TABLE `guest`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `hasil_jaldis`
--
ALTER TABLE `hasil_jaldis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kode_jaldis` (`kode_jaldis`);

--
-- Indeks untuk tabel `hasil_rapat`
--
ALTER TABLE `hasil_rapat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kode_rapat` (`kode_rapat`);

--
-- Indeks untuk tabel `jaldis`
--
ALTER TABLE `jaldis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kode_jaldis` (`kode_jaldis`),
  ADD KEY `alat_kelengkapan` (`alat_kelengkapan`);

--
-- Indeks untuk tabel `kategori_keperluan`
--
ALTER TABLE `kategori_keperluan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `keterangan_jaldis`
--
ALTER TABLE `keterangan_jaldis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kode_jaldis` (`kode_jaldis`,`id_anggota`);

--
-- Indeks untuk tabel `kode_rekening`
--
ALTER TABLE `kode_rekening`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `komisi`
--
ALTER TABLE `komisi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_komisi` (`id_komisi`);

--
-- Indeks untuk tabel `log_activity`
--
ALTER TABLE `log_activity`
  ADD PRIMARY KEY (`id`),
  ADD KEY `aktor` (`aktor`);

--
-- Indeks untuk tabel `nomor_surat`
--
ALTER TABLE `nomor_surat`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `panja`
--
ALTER TABLE `panja`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kode_panja` (`kode_panja`);

--
-- Indeks untuk tabel `pansus`
--
ALTER TABLE `pansus`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kode_pansus` (`kode_pansus`);

--
-- Indeks untuk tabel `peserta_rapat`
--
ALTER TABLE `peserta_rapat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kode_rapat` (`kode_rapat`,`anggota`);

--
-- Indeks untuk tabel `pimpinan`
--
ALTER TABLE `pimpinan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_anggota` (`id_anggota`);

--
-- Indeks untuk tabel `rapat`
--
ALTER TABLE `rapat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kode_rapat` (`kode_rapat`,`pemimpin`);

--
-- Indeks untuk tabel `skpd`
--
ALTER TABLE `skpd`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `surat_cetak`
--
ALTER TABLE `surat_cetak`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kode_jaldis` (`kode_jaldis`,`id_anggota`,`nomor_surat`);

--
-- Indeks untuk tabel `tblpartai`
--
ALTER TABLE `tblpartai`
  ADD PRIMARY KEY (`id_partai`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kd_user` (`kd_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `agenda`
--
ALTER TABLE `agenda`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=257;

--
-- AUTO_INCREMENT untuk tabel `akun`
--
ALTER TABLE `akun`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `anggota`
--
ALTER TABLE `anggota`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;

--
-- AUTO_INCREMENT untuk tabel `anggota_badan`
--
ALTER TABLE `anggota_badan`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT untuk tabel `anggota_panja`
--
ALTER TABLE `anggota_panja`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `anggota_pansus`
--
ALTER TABLE `anggota_pansus`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT untuk tabel `badan`
--
ALTER TABLE `badan`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `dasar_hukum`
--
ALTER TABLE `dasar_hukum`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `detail_jaldis`
--
ALTER TABLE `detail_jaldis`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=250;

--
-- AUTO_INCREMENT untuk tabel `guest`
--
ALTER TABLE `guest`
  MODIFY `id` int(9) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT untuk tabel `hasil_jaldis`
--
ALTER TABLE `hasil_jaldis`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `hasil_rapat`
--
ALTER TABLE `hasil_rapat`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT untuk tabel `jaldis`
--
ALTER TABLE `jaldis`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `kategori_keperluan`
--
ALTER TABLE `kategori_keperluan`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `keterangan_jaldis`
--
ALTER TABLE `keterangan_jaldis`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kode_rekening`
--
ALTER TABLE `kode_rekening`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `komisi`
--
ALTER TABLE `komisi`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `log_activity`
--
ALTER TABLE `log_activity`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=323;

--
-- AUTO_INCREMENT untuk tabel `nomor_surat`
--
ALTER TABLE `nomor_surat`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `panja`
--
ALTER TABLE `panja`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pansus`
--
ALTER TABLE `pansus`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `peserta_rapat`
--
ALTER TABLE `peserta_rapat`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=354;

--
-- AUTO_INCREMENT untuk tabel `pimpinan`
--
ALTER TABLE `pimpinan`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `rapat`
--
ALTER TABLE `rapat`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `skpd`
--
ALTER TABLE `skpd`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT untuk tabel `surat_cetak`
--
ALTER TABLE `surat_cetak`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tblpartai`
--
ALTER TABLE `tblpartai`
  MODIFY `id_partai` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
