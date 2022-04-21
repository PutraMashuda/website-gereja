-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Apr 2022 pada 08.00
-- Versi server: 10.4.20-MariaDB
-- Versi PHP: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gereja`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(2) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `artikel`
--

CREATE TABLE `artikel` (
  `id_artikel` int(11) NOT NULL,
  `judul` varchar(200) DEFAULT NULL,
  `isi` text DEFAULT NULL,
  `gambar` varchar(100) DEFAULT NULL,
  `penulis` varchar(100) DEFAULT NULL,
  `tanggal` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `artikel`
--

INSERT INTO `artikel` (`id_artikel`, `judul`, `isi`, `gambar`, `penulis`, `tanggal`) VALUES
(4, 'Kobayashi San', 'KOMPAS.com - Artikel merupakan salah satu jenis karya tulis. Teks artikel ada yang berisikan persuasi, dan ada pula yang berupa informasi tambahan untuk pembaca.\r\n\r\nTeks artikel biasanya ditulis secara singkat, padat dan jelas agar pembaca lebih mudah mengerti. Tidak hanya itu, biasanya dalam artikel ada opini yang turut didukung dengan fakta.\r\n\r\nArtikel bersifat faktual dan informatif, karena sesuai dengan fakta di lapangan serta untuk memberi informasi atau pengetahuan kepada pembaca.\r\n\r\nMengutip dari Buku Cepat Menguasai Soal Bahasa Indonesia SMA dan MA (2019) karya Tomi Rianto, teks artikel memiliki tiga struktur, yaitu:\r\n\r\nTesis\r\nTesis adalah gagasan utama dari permasalahan yang akan dibahas. Tesis berangkat dari fakta yang ada.\r\nArgumentasi\r\nArgumentasi adalah pendapat yang disampaikan penulis yang juga harus disesuaikan dengan fakta.\r\nPenegasan ulang\r\nPenegasan ulang adalah bentuk penjelasan ulang untuk memperkuat argumentasi yang dibuat penulis dan harus sesuai dengan fakta.\r\nBagaimana contoh teks artikel beserta strukturnya?\r\n\r\nContoh 1:\r\nPentingnya melakukan Peregangan Sebelum Olahraga\r\n\r\nPeregangan sebelum berolahraga sangatlah penting. Tujuannya untuk menghindari cedera serius dan ketegangan pada tubuh.\r\n\r\nDapatkan informasi, inspirasi dan insight di email kamu.\r\nDaftarkan email\r\n\r\nMelakukan peregangan sebelum berolahraga memang memiliki banyak manfaat yang sangat baik untuk kesehatan tubuh. Para ahli menyarankan jika sebaiknya peregangan dilakukan saat pagi hari, tepatnya sebelum memulai aktivitas fisik.\r\n\r\nBentuk peregangan yang paling mudah dan menyehatkan adalah berlari. Para ahli mengatakan jika berlari membawa dampak positif bagi orang yang melakukannya. Berlari dapat melatih kekuatan dan kesehatan otot jantung.\r\n\r\nBaca juga: Teks Artikel: Pengertian, Ciri-ciri, Jenis, Struktur, dan Kebahasaan\r\n\r\nBentuk peregangan mudah lainnya adalah dengan memutar kepala, tangan, pundak dan kaki searah jarum jam. Peregangan ini sangat mudah untuk dilakukan di mana saja tanpa perlu mengeluarkan biaya untuk melakukannya.\r\n\r\nContoh bentuk peregangan lainnya adalah dengan melakukan squat. Squat dapat melatih banyak fungsi tubuh dalam satu gerakan serta melatih kekuatan sendi serta ligamen dalam tubuh.\r\n\r\nMaka disarankan untuk tidak lupa melakukan peregangan sebelum berolahraga agar tubuh tetap sehat dan tidak mengalami cedera. \r\n\r\nTesis: \r\n\r\nDalam contoh di atas, tesis berada di paragraf pertama karena gagasan utama dari permasalahan yang dibahas adalah dampak negatif jika tidak melakukan peregangan. \r\n\r\nArgumentasi: \r\n\r\nDalam contoh di atas, argumentasi berada di paragraf ketiga karena penulis menyampaikan pendapat jika berlari merupakan olahraga yang paling mudah dan menyehatkan. Pendapat dari penulis ini dibuktikan dengan perkataan dari para ahli.\r\n\r\nPenegasan ulang: \r\n\r\nDalam contoh di atas, penegasan ulang berada di paragraf terakhir karena penulis ingin mengingatkan agar pembaca melakukan pemanasan sebelum berolahraga', 'artikel/Ai_no_Supreme!_Anime.jpg', 'Huda', '2021-12-17'),
(5, 'Corona Virus kaya nya', 'Pengertian Virus Corona (COVID-19)\r\n\r\nInfeksi coronavirus merupakan penyakit yang disebabkan oleh virus corona dan menimbulkan gejala utama berupa gangguan pernapasan. Penyakit ini menjadi sorotan karena kemunculannya di akhir tahun 2019 pertama kali di Wuhan, China. Lokasi kemunculannya pertama kali ini, membuat coronavirus juga dikenal dengan sebutan Wuhan virus.  \r\n\r\nSelain China, coronavirus juga menyebar secara cepat ke berbagai negara lain, termasuk Jepang, Thailand, Jepang, Korea Selatan, bahkan hingga ke Amerika Serikat.\r\n\r\nPenyebab Virus Corona (COVID-19)\r\n\r\nPenyebab Corona virus merupakan virus single stranded RNA yang berasal dari kelompok Coronaviridae. Dinamakan coronavirus karena permukaannya yang berbentuk seperti mahkota (crown/corona).\r\n\r\nVirus lain yang termasuk dalam kelompok yang serupa adalah virus yang menyebabkan Middle East Respiratory Syndrome (MERS-CoV) dan Severe Acute Respiratory Syndrome (SARS-CoV) beberapa tahun silam.\r\n\r\nNamun, virus corona dari Wuhan ini merupakan virus baru yang belum pernah teridentifikasi pada manusia sebelumnya. Karena itu, virus ini juga disebut sebagai 2019 Novel Coronavirus atau 2019-nCoV.\r\n\r\nVirus corona umumnya ditemukan pada hewan –seperti unta, ular, hewan ternak, kucing, dan kelelawar. Manusia dapat tertular virus apabila terdapat riwayat kontak dengan hewan tersebut, misalnya pada peternak atau pedagang di pasar hewan.\r\n\r\nNamun, adanya ledakan jumlah kasus di Wuhan, China menunjukkan bahwa corona virus dapat ditularkan dari manusia ke manusia. Virus bisa ditularkan lewat droplet, yaitu partikel air yang berukuran sangat kecil dan biasanya keluar saat batuk atau bersin. Apabila droplet tersebut terhirup atau mengenai lapisan kornea mata, seseorang berisiko untuk tertular penyakit ini.\r\n\r\nMeski semua orang dapat terinfeksi virus corona, mereka yang lanjut usia, memiliki penyakit kronis, dan memiliki daya tahan tubuh rendah lebih rentan mengalami infeksi ini serta komplikasinya.\r\n\r\nGejala Virus Corona (COVID-19)\r\n\r\nGejala Coronavirus bervariasi, mulai dari flu biasa hingga gangguan pernapasan berat menyerupai pneumonia. Gejala Corona yang umum dialami mereka yang mengalami infeksi coronavirus adalah:\r\n\r\nDemam tinggi disertai menggigil\r\nBatuk kering\r\nPilek\r\nHidung berair dan bersin-bersin\r\nNyeri tenggorokan\r\nSesak napas\r\nGejala virus corona tersebut dapat bertambah parah secara cepat dan menyebabkan gagal napas hingga kematian. Centers for Disease Control and Prevention (CDC) gejala infeksi virus 2019-nCoV dapat muncul mulai dua hari hingga 14 hari setelah terpapar virus tersebut.\r\n\r\nDiagnosis Virus Corona (COVID-19)\r\n\r\nInfeksi coronavirus umumnya diketahui melalui gejala dan pemeriksaan fisik yang dikeluhkan pasien. Setelah itu, dokter akan melakukan sejumlah pemeriksaan penunjang untuk membantu menegakkan diagnosis.\r\n\r\nPemeriksaan penunjang tersebut antara lain adalah pemeriksaan darah lengkap, pemeriksaan pembekuan darah, fungsi ginjal dan hati serta pemeriksaan virologi. Selain itu, spesimen dari hidung dan faring (tenggorokan) pasien pun akan diambil dengan teknik swab. Demikian pula, sediaan dahak dan, bila diperlukan, cairan bronkus (saluran pernapasan yang lebih kecil).\r\n\r\nMelalui pemeriksaan tersebut dapat diketahui apakah penyakit pasien disebabkan oleh virus atau sebab yang lain. Sementara itu, plasma darah pasien pun akan diperiksa untuk menemukan RNA virus corona.\r\n\r\nUntuk pemeriksaan radiologi, dapat dilakukan pemeriksaan rontgen (x-ray) dada dan CT-scan dada. Sebagian besar pasien akan menunjukkan gambaran kekeruhan di kedua paru.\r\n\r\nKomplikasi Virus Corona (COVID-19)\r\n\r\nPasien yang terinfeksi coronavirus dapat mengalami gejala gangguan pernapasan seperti pneumonia berat, seperti demam tinggi dan sesak napas.\r\n\r\nKomplikasi seperti gagal napas, gagal jantung akut, dan infeksi sekunder akibat kuman lainnya dapat terjadi bila kondisi tersebut tidak segera diatasi atau bila penyakit mengalami perburukan dengan sangat cepat.\r\n\r\nPengobatan Virus Corona (COVID-19)\r\n\r\nHingga saat ini, belum ada terapi anti-virus yang terbukti efektif untuk mengatasi infeksi 2019-novel coronavirus. Beberapa anti-virus yang telah berhasil menangani infeksi MERS-CoV dan SARS-CoV sebelumnya, belum menunjukkan hasil memuaskan untuk mengatasi infeksi coronavirus yang baru ini.\r\n\r\nPenderita yang terinfeksi virus corona akan menerima terapi yang bersifat suportif untuk mengurangi gejala. Misalnya anti-piretik untuk menurunkan suhu tubuh dan cairan untuk mencegah dehidrasi, serta terapi oksigen pada pasien yang mengalami sesak napas.\r\n\r\nPada kondisi yang berat, bantuan napas melalui mesin ventilator dapat diberikan pada pasien untuk menyokong fungsi organ vital lainnya.\r\n\r\nPencegahan Virus Corona (COVID-19)\r\n\r\nMeski gejala penyakit coronavirus menyerupai penyakit pernapasan lain seperti pneumonia atau influenza, sejauh ini belum ada vaksin yang dapat mencegah penularan penyakit coronavirus. Pemberian vaksin pneumonia maupun vaksin influenza tidak dapat memberikan proteksi terhadap penyebaran infeksi virus corona.\r\n\r\nCara terbaik untuk menghindari penyakit infeksi coronavirus adalah melakukan tindakan pencegahan secara aktif. CDC menyarankan setiap orang melakukan tindakan seperti:\r\n\r\nRutin mencuci tangan menggunakan sabun dan air mengalir selama setidaknya 20 detik\r\nApabila tidak memungkinkan atau tidak tersedia air dan sabun, bersihkan tangan menggunakan pembersih tangan berbahan alkohol\r\nHindari menyentuh hidung, mata, atau mulut terutama bila tangan masih kotor\r\nHindari kontak dengan orang yang sedang sakit\r\nTetaplah di rumah bila sedang sakit\r\nTutup mulut dengan tisu atau dengan menekuk siku saat Anda batuk atau bersin\r\nHindari kontak dengan hewan ternak secara langsung\r\nHindari bepergian, terutama ke daerah dengan kasus infeksi coronavirus\r\nHindari mengonsumsi daging yang belum matang sempurna.\r\nMenjaga nutrisi dengan mengonsumsi makanan yang bergizi seimbang, minum air putih dalam jumlah cukup, dan istirahat cukup juga dapat membantu menjaga kondisi tubuh agar tetap bugar dan terhindar dari infeksi virus corona.\r\n\r\nSetiap orang yang mengalami gejala menyerupai infeksi corona, jangan ragu untuk segera berkonsultasi dengan tenaga kesehatan untuk memastikan penyebabnya.', 'artikel/WhatsApp_Image_2021-07-05_at_10_31_44.jpeg', 'Admin', '2021-12-17');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ekstrakulikuler`
--

CREATE TABLE `ekstrakulikuler` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `deskripsi` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ekstrakulikuler`
--

INSERT INTO `ekstrakulikuler` (`id`, `nama`, `deskripsi`) VALUES
(6, '2022-04-24', 'ibadah haji'),
(7, '2022-05-09', 'Ibadah orang dewasa banget'),
(8, '2022-05-16', 'ibadah orang dewasa aja');

-- --------------------------------------------------------

--
-- Struktur dari tabel `galeri`
--

CREATE TABLE `galeri` (
  `id_galeri` int(11) NOT NULL,
  `berkas` text DEFAULT NULL,
  `deskripsi` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `galeri`
--

INSERT INTO `galeri` (`id_galeri`, `berkas`, `deskripsi`) VALUES
(4, 'galeri/p2.jpg', 'Foto pada pelaksanaan apa gitu misalnya'),
(5, 'galeri/p3.jpg', 'Ini foto pas kegiatan anu misalnya'),
(6, 'galeri/p2.jpg', 'Deskripsi apa'),
(9, 'galeri/p2.jpg', 'tes');

-- --------------------------------------------------------

--
-- Struktur dari tabel `guru`
--

CREATE TABLE `guru` (
  `id_guru` int(11) NOT NULL,
  `nip` varchar(255) DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `jenis_kelamin` varchar(15) DEFAULT NULL,
  `umur` int(2) DEFAULT NULL,
  `alamat` varchar(500) DEFAULT NULL,
  `id_mapel` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `guru`
--

INSERT INTO `guru` (`id_guru`, `nip`, `nama`, `jenis_kelamin`, `umur`, `alamat`, `id_mapel`) VALUES
(16, 'asd', '<a href=\"../assets_user/form-screening.pdf\">Asd</a>', 'Perempuan', 45, 'Palangka', 2),
(27, '098765', 'uml2.pdf', 'Laki-Laki', 45, 'dimana aja', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `mapel`
--

CREATE TABLE `mapel` (
  `id_mapel` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mapel`
--

INSERT INTO `mapel` (`id_mapel`, `nama`) VALUES
(1, 'Pengurus 1'),
(2, 'Pengurus 2'),
(3, 'Jemaat');

-- --------------------------------------------------------

--
-- Struktur dari tabel `profil`
--

CREATE TABLE `profil` (
  `id_profil` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `isi` text DEFAULT NULL,
  `gambar` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `profil`
--

INSERT INTO `profil` (`id_profil`, `nama`, `isi`, `gambar`) VALUES
(1, 'Apa sih', 'SMA Negeri 1 Harapan berdiri sejak tanggal 1 November tahun 1877. Terletak di Jalan Bodjong 149 (Jl. Pemuda 149). Mula-mula adalah HBS (Hogere Bunger School). Pada tahun 1930 dipergunakan untuk untuk HBS dan AMS (Algemene Meddelbare School), kemudian tahun 1937 HBS pindah di jalan Oei Tong Ham (sekarang Jl Menteri Supeno No. 1 / SMU 1 Harapan), sedangkan bangunan di jalan Bodjong dipergunakan untuk AMS dan MULO.Pada zaman pendudukan Jepang bangunan ini dipergunakan untuk SMT (Sekolah Menengah Tinggi).', 'profil/');

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `id_siswa` int(11) NOT NULL,
  `nis` int(10) DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `jenis_kelamin` varchar(15) DEFAULT NULL,
  `angkatan` int(5) DEFAULT NULL,
  `alamat` varchar(500) DEFAULT NULL,
  `kelas` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`id_siswa`, `nis`, `nama`, `jenis_kelamin`, `angkatan`, `alamat`, `kelas`) VALUES
(1, 13782738, 'Dani Purnama', 'Laki-Laki', 2014, 'Bandung', 'III'),
(2, 13782738, 'Dani Purnama', 'Laki-Laki', 2014, 'Bandung', 'III'),
(3, 123, 'qw', 'Laki-Laki', 2014, 'Konoha', 'II');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_barang`
--

CREATE TABLE `tb_barang` (
  `id_brg` int(11) NOT NULL,
  `nama_brg` varchar(120) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `kategori` varchar(60) NOT NULL,
  `harga` text NOT NULL,
  `stok` varchar(25) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_barang`
--

INSERT INTO `tb_barang` (`id_brg`, `nama_brg`, `keterangan`, `kategori`, `harga`, `stok`, `gambar`) VALUES
(1, 'coba', 'keterangan', 'kategori', '<a href=\"assets_user/uml.pdf\">Mendekatkan-Diri-Dengan-Tuhan</a>', '2', 'gambar.jpg'),
(2, 'Test', 'Kitab1', 'Pria', '122', '2', 'gambar.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indeks untuk tabel `ekstrakulikuler`
--
ALTER TABLE `ekstrakulikuler`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id_galeri`);

--
-- Indeks untuk tabel `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id_guru`);

--
-- Indeks untuk tabel `mapel`
--
ALTER TABLE `mapel`
  ADD PRIMARY KEY (`id_mapel`);

--
-- Indeks untuk tabel `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`id_profil`);

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indeks untuk tabel `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`id_brg`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id_artikel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `ekstrakulikuler`
--
ALTER TABLE `ekstrakulikuler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id_galeri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `guru`
--
ALTER TABLE `guru`
  MODIFY `id_guru` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT untuk tabel `mapel`
--
ALTER TABLE `mapel`
  MODIFY `id_mapel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `profil`
--
ALTER TABLE `profil`
  MODIFY `id_profil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_barang`
--
ALTER TABLE `tb_barang`
  MODIFY `id_brg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
