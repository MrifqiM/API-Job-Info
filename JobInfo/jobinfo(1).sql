-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Jul 2022 pada 03.05
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jobinfo`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `komputer`
--

CREATE TABLE `komputer` (
  `id_komputer` int(11) NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `nama_perusahaan` varchar(255) NOT NULL,
  `penyebar` varchar(255) NOT NULL,
  `tanggal_sebar` date NOT NULL,
  `posisi` varchar(255) NOT NULL,
  `persyaratan` varchar(600) NOT NULL,
  `email` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `batas_pengumpulan` date NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `komputer`
--

INSERT INTO `komputer` (`id_komputer`, `kategori`, `nama_perusahaan`, `penyebar`, `tanggal_sebar`, `posisi`, `persyaratan`, `email`, `alamat`, `batas_pengumpulan`, `gambar`) VALUES
(3, 'IT', 'PT.MITRA PUTRA PROFITAMAS', 'JobInfo', '2021-08-30', 'STAFF IT', 'PERSYARATAN :\r\n1.Laki-laki, max 28 tahun\r\n2.Diutamakan S1 Teknik Informatika\r\n3.MenguasaiTCP/IP,router,mikrotik,winbox,networking dan bandwith management\r\n4.Penempatan di Palangka Raya', 'Kirimkan berkas lamaran lengkap anda ke email :\r\nahmad.zak@mitrasuzuki.com', 'Jl.Tijilik Riwuk No.7 Palangka Raya', '2021-09-11', 'suzuki.jpg'),
(4, 'IT', 'CV.ANGLE', 'JobInfo', '2021-07-31', 'STAFF IT', 'PERSYARATAN :\r\n1.Laki-laki, max 28 tahun\r\n2.Diutamakan S1 Teknik Informatika\r\n3.Memahami Troubelshooting Software & Hardware\r\n4.Menguasai sosial media & website\r\n5.Menguasai OS Windows dengan baik\r\n6.Mampu mengelola Jaringan LAN\r\n7.Mampu mengelola website berbasis Wordpress', 'Kirim lamaran ke : HRD CV.Angle', 'Jl.Kaliurang Km 10 Yogyakarta\r\n', '2021-08-21', 'angle.jpg'),
(7, 'IT', 'PT.MITRA EKSPEDISI SEJAHTERA (J&T EXPRESS)', 'jobinfo', '2021-08-04', 'STAFF IT', '1. Usia 22-30 Tahun\r\n2. Pendidikan Min. S1 Teknik Informatika, Teknik Komputer, Ilmu Komputer\r\n3. Berpengalaman Min. 1 Tahun Di Bidang Mikrotik dan Jaringan Lebih Di Sukai\r\n4. Mampu dan Memahami Sistem Operasional GPS Menjadi Nilai Tambah \r\n5. Mampu mengoperasikan Ms. Office & Internet\r\n6. Memiliki loyalitas dan dedikasi tinggi\r\n7. Sehat jasmani dan rohani\r\n8. Wajib melampirkan Foto Copy SKCK aktif\r\n9. Wajib melampirkan Surat Keterangan Sehat', 'kirim CV ke kantor kami :\r\nJl. Siliwangi No. 353 Kel. Krapyak, Semarang Barat', 'Jl. Siliwangi No. 353 Kel. Krapyak, Semarang Barat', '2021-09-15', 'j&t.jpg'),
(8, 'IT', 'PT RIFAN FINANCINDO BERJANGKA', 'jobinfo', '2021-09-01', 'OPERATOR KOMPUTER', '1. fotocopy ktp\r\n2. fotocopy ijasah\r\n3. fotocopy skck\r\n4. fotocopy kartu keluarga\r\n5. pas foto 3X4\r\n6. surat keterangan sehat', 'kirim CV ke :\r\nfinancerekruitmen@gmail.com', 'Jl. Asia Afrika No. 141 - 149 Gedung Wisma Bumi Putra Lt. 3', '2021-09-24', 'rifan.jpg'),
(59, 'Kesehatan', 'PRAKTIK MANDIRI BIDAN WANDA', 'JobInfo', '2022-07-11', 'ASISTEN BIDAN', 'PERSYARATAN :\r\n1.Domisili Cirebon\r\n2.Lulusan D3 Kebidanan\r\n3.STR aktif\r\n4.Mempunyai SIM C', 'Kirimkan berkas lamaran lengkap anda ke email :\r\nbidanwandadwi@gmail.com', 'Jl.Kusnan No.35 Kota Cirebon', '2022-08-05', ''),
(60, 'Kesehatan', 'RS JANTUNG JAKARTA', 'JobInfo', '2022-07-14', 'ASISTEN APOTEKER', 'PERSAYARATAN :\r\n1.Usia makasimal 30 tahun\r\n2.Bersedia bekerja dalam shift\r\n3.Penempatan di Rs Jantung Jakarta\r\n4.Memiliki STR aktif\r\n5.Pengalaman minimal 2 tahun\r\n6.Fresh Graduate dipersilahkan melamar', 'Kirimkan berkas lamaran lengkap anda ke email :\r\nrekrutmen.rsjantung@gmail.com', 'Jl. Matraman Raya No.23', '2022-08-07', ''),
(61, 'Kesehatan', 'PT SEHATQ HARSANA EMEDIKA', 'JobInfo', '2022-08-04', 'DOKTER UMUM', '1. Pendidikan Profesi Dokter\r\n2. STR (Surat Tanda Registrasi) Aktif\r\n3. Bersertifikat ACLS dan ATLS\r\n4. Memiliki Minimal 1 tahun pengalaman sebagai Dokter Umum di Rumah Sakit atau Klinik\r\n5. Integritas Tinggi\r\n6. Memiliki kemampuan komunikasi yang baik', 'Kirimkan resume anda ke :\r\nEmail : work@sehatq.com', 'Jl. M.H. Thamrin No.18, RT.9/RW.5, Gondangdia, Kec. Menteng, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10310', '2022-09-09', ''),
(63, 'Keuangan', 'RUMAH SAKIT IBU dan ANAK MITRA FAMILY', 'JobInfo', '2022-08-14', 'STAFF KEUANGAN', 'PERSYARATAN:\r\n1.Pria/wanita usia maksimal 30 tahun\r\n2.Fresh Graduate, diutamakan pengalaman 1 tahaun\r\n2.Pendidikan minimal D3 Akuntansi\r\n4.Bersedia bekerja dibawah takanan', 'Kirimkan berkas lamaran lengkap anda ke email :\r\nhrd@rsmitrafamily.com', 'Jl.Raya Guluh Mas Karawang', '2022-08-06', ''),
(64, 'IT', 'Kalla', 'Jobinfo', '2022-09-03', 'UI/UX', '1.sjdasdjdsahja\n2.jdjdsjjfds', 'muhrifqi3110@yahoo.com', 'kadsalsd', '2022-10-02', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_login` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `key_token` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_login`, `username`, `pass`, `key_token`) VALUES
(1, 'rifqi', '2000', '6a4ecbb08ef9455c6076dea87adefec2'),
(2, 'faqih', '12345', 'ac42278f355efd1198178c9627cafab0'),
(9, 'sri', '12345', 'e89bd9f6f51fce9e2923b3ba684a8591'),
(10, 'niar', '12345', 'acaea014c0330c0fb165e84f274b9be7'),
(11, 'afdal', '12345', '54281bc66b5eba708e35d38836d69245'),
(12, 'zhandy', '12345', 'dccc515c0a899700961e938c1f2a134a'),
(13, 'dsdsas', '3223443324', '31c208ff9312a7ba0ce33a5fa0bd7de9'),
(14, 'dsdsas', 'as', '1b371638dce1ebb9b859cec9db4e198c');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `komputer`
--
ALTER TABLE `komputer`
  ADD PRIMARY KEY (`id_komputer`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_login`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `komputer`
--
ALTER TABLE `komputer`
  MODIFY `id_komputer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_login` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
