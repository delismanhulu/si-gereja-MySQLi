-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 08 Mei 2020 pada 05.54
-- Versi Server: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbgereja`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_blog`
--

CREATE TABLE IF NOT EXISTS `tbl_blog` (
`kode` int(11) NOT NULL,
  `kategori` varchar(50) DEFAULT NULL,
  `judul` varchar(100) DEFAULT NULL,
  `konten` text,
  `tgl_posting` date DEFAULT NULL,
  `user` varchar(50) DEFAULT NULL,
  `status` varchar(10) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=62 ;

--
-- Dumping data untuk tabel `tbl_blog`
--

INSERT INTO `tbl_blog` (`kode`, `kategori`, `judul`, `konten`, `tgl_posting`, `user`, `status`, `gambar`) VALUES
(58, 'Firman', 'Gereja Sebagai Rumah Rohani (1 Petrus 2:4-8)', '<p style="text-align: justify;">Gereja &ndash; dalam arti&rdquo;kumpulan orang percaya&rdquo; - digambarkan melalui beragam metafora. Tiap metafora mengandung aspek-aspek tertentu yang khas dan ingin disampaikan oleh penulisnya. Salah satu metafora itu adalah gereja sebagai bangunan rohani (1 Kor 3:10-16; Ef 2:19-22; 1 Pet 2:4-8). Dalam metafora ini aspek komunal (kebersamaan) dari setiap orang percaya sangat ditekankan. Sama seperti sebuah bangunan dibuat dari banyak batu dan bahan lain, demikian pula bangunan rohani hanya dapat berdiri apabila ada keterkaitan antar bagiannya.</p>\r\n\r\n<p style="text-align: justify;">Walaupun metafora sebagai bangunan rohani disinggung di beberapa bagian Alkitab, dalam khotbah minggu ini kita akan berfokus pada tulisan Petrus saja. Ada tiga pertanyaan yang akan kita jawab melalui khotbah hari ini.</p>\r\n\r\n<p style="text-align: justify;">&nbsp;</p>\r\n\r\n<h3 style="text-align: justify;">Bagaimana kita dapat menjadi bangunan rohani?</h3>\r\n\r\n<p style="text-align: justify;">Sebuah bangunan tidak tercipta dalam sekejap. Tidak ada bangunan yang tercipta secara kebetulan. Pendirian sebuah bangunan membutuhkan sebuah proses. Bagaimana dengan gereja sebagai bangunan rohani?</p>\r\n\r\n<p style="text-align: justify;">Pertama, rumah rohani melibatkan orang-orang yang sudah bertobat (ayat 5). Di ayat 5 Petrus menyebut penerima suratnya sebagai &ldquo;batu-batu hidup&rdquo;. Secara hurufiah ayat ini berbunyi &ldquo;kalian sendiri seperti batu-batu hidup sedang dibangun sebagai sebuah bangunan rohani&rdquo;. Jadi, tidak semua batu cocok untuk pembangunan rumah rohani. Hanya batu-batu yang hidup saja yang pantas dipergunakan.</p>\r\n\r\n<p style="text-align: justify;">Aspek pertobatan ini juga selaras dengan keseluruhan konteks 2:1-10. Penerima surat sudah menjadi bayi-bayi rohani di dalam Kristus (2:2). Mereka sudah mengecap kebaikan Tuhan (2:3). Mereka dibedakan dari orang-orang lain yang tidak percaya (2:7) dan tidak taat kepada firman Allah (2:8). Mereka memiliki identitas baru sebagai umat Allah (2:9-10).</p>\r\n\r\n<p style="text-align: justify;">Penjelasan di atas mengajarkan bahwa tidak semua orang yang rajin ke gereja secara otomatis akan menjadi bagian dari rumah rohani. Tanpa pertobatan yang sungguh kepada Yesus Kristus sebagai Tuhan dan Juruselamat, seseorang tidak akan berguna bagi rumah rohani. Dengan kata lain, Petrus ingin menunjukkan bahwa pembangunan secara komunal (bersama) harus dimulai dari pertumbuhan secara individual (pertobatan dan keinginan untuk bertumbuh).</p>\r\n\r\n<p style="text-align: justify;">Kedua, rumah rohani membutuhkan orang-orang yang mau datang kepada Kristus (ayat 4a). Proses ini akan terlihat jelas apabila kita memperhatikan kalimat Yunani yang digunakan Petrus dalam bagian ini. Ayat 4 dan 5 sebenarnya terdiri dari satu kalimat saja, dengan induk kalimat terdapat pada ayat 5. Sesuai kalimat Yunaninya, dua ayat ini berbunyi &ldquo;tatkala kalian datang kepada-Nya&hellip;(ayat 4), kamu sedang dibangun sebagai sebuah rumah rohani&hellip;(ayat 5). Jadi, proses pembangunan sedang terjadi pada saat orang-orang datang kepada Kristus.</p>\r\n\r\n<p style="text-align: justify;">Datang kepada Kristus di sini tidak boleh diartikan sebagai pertobatan, seolah-olah Petrus sedang menasihati orang-orang non-Kristen untuk datang kepada Kristus. Petrus sedang berbicara kepada orang-orang yang sudah bertobat. Jadi, apakah maksud &ldquo;datang kepada Kristus&rdquo; di ayat 5?</p>\r\n\r\n<p style="text-align: justify;">Sesuai dengan konteks yang ada, kita seyogyanya menafsirkan ini sebagai kerinduan yang besar terhadap kebernilaian Kristus dalam kehidupan kita. Sama seperti bayi yang selalu membutuhkan dan menginginkan air susu (ayat 2), demikian pula kita harus menginginkan Kristus (2:4a). Kita menginginkan Dia karena Kristus sangat berharga. Dari-Nya kita mengecap kebaikan demi kebaikan (2:3). Dia adalah batu pilihan dan batu yang berharga di mata Allah (2:4; bdk. mayoritas versi Inggris). Bagi kita pun Dia begitu bernilai (2:7). Kita hanya bisa menjadi batu-batu yang hidup (2:5) apabila kita terus-menerus datang kepada Batu Hidup dan Yang Menghidupkan (2:4), yaitu Yesus Kristus.</p>\r\n\r\n<p style="text-align: justify;">Lagipula, sebuah rumah sangat bergantung pada batu penjuru, dan batu penjuru itu adalah Kristus (2:6-7). Sebuah batu penjuru (lithos akrogÅniaios, 2:6) merupakan kepala dari sudut rumah (kephalÄ“ gÅnia, 2:7; lihat KJV/ASV/RSV/NRSV &ldquo;the [very] head of the corner&rdquo;). Jadi, Kristus bukan sembarang batu. Tidak peduli berapa banyak batu yang digunakan untuk membangun sebuah rumah, tanpa batu penjuru semua batu lain akan menjadi percuma. Betapa penting dan berharganya Kristus bagi kita! Karena itu, sudah sepantasnya kalau kita mengharapkan Dia dengan penuh hasrat.</p>\r\n\r\n<p style="text-align: justify;">Kerinduan yang sama diekspresikan oleh pemazmur kepada Allah. Dia berkata: &ldquo;Betapa berharganya kasih setia-Mu, ya Allah! Anak-anak manusia berlindung dalam naungan sayap-Mu. Mereka mengenyangkan dirinya dengan lemak di rumah-Mu; Engkau memberi mereka minum dari sungai kesenangan-Mu&rdquo; (Mzm 36:8-9). Apakah kita benar-benar menyadari kebernilaian Kristus bagi kita? Jika benar, kita pasti akan memiliki kerinduan yang besar untuk selalu datang kepada-Nya: menikmati dan mengagumi Dia setiap waktu.</p>\r\n\r\n<p style="text-align: justify;">&nbsp;</p>\r\n\r\n<h3 style="text-align: justify;">Apa fungsi dari rumah rohani?</h3>\r\n\r\n<p style="text-align: justify;">Petrus tidak hanya menyebut gereja sebagai rumah, tetapi rumah rohani (ayat 5). Dalam kaitan dengan sebuah metafora, penambahan kata &ldquo;rohani&rdquo; tampaknya tidak terlalu diperlukan. Ini hanya sebuah metafora, sehingga rumah yang dimaksud jelas bukan secara hurufiah. Rumah itu pasti secara simbolis.</p>\r\n\r\n<p style="text-align: justify;">Walaupun demikian, Petrus tetap menambahkan kata &ldquo;rohani&rdquo; (pneumatikos). Alasan pertama adalah untuk penekanan. Alasan kedua adalah untuk membangun paralelisme antara &ldquo;rumah rohani&rdquo; (oikos pneumatikos) dengan &ldquo;persembahan rohani&rdquo; (pneumatikas thusias). Sebuah gereja bukan hanya perkumpulan biasa dengan aktivitas yang biasa. Gereja adalah perkumpulan rohani dengan aktivitas yang rohani pula.</p>\r\n\r\n<p style="text-align: justify;">Sebagai rumah rohani yang di dalamnya Roh Allah berdiam secara khusus (1 Kor 3:16; Ef 2:21-22), gereja memainkan dua fungsi yang saling berkaitan erat (ayat 5). Dua fungsi ini dalam teks Yunani dinyatakan melalui kata depan eis (eis hierateuma hagion, lit. &ldquo;untuk menjadi sebuah imamat yang kudus&rdquo;) dan kata kerja infinitif anenenkai (anenenkai pneumatikas thusias euprosdektous tÅ theÅ dia IÄ“sou Christou, lit. &ldquo;untuk mempersembahkan korban rohani yang berkenan kepada Allah melalui Yesus Kristus&rdquo;).</p>\r\n\r\n<p style="text-align: justify;">Gereja menjadi imamat yang kudus. Metafora rumah rohani bisa menimbulkan kesan bahwa orang-orang Kristen secara pasif dijadikan bahan bangunan. Kesan ini ternyata keliru. Orang-orang yang percaya kepada Kristus tidak hanya disamakan dengan bait Allah, melainkan juga dengan para imam yang melayani di dalamnya (lihat juga 2:9). Jadi, keterlibatan orang-orang Kristen dalam pembangunan rumah rohani bersifat aktif.</p>\r\n\r\n<p style="text-align: justify;">Gereja mempersembahkan korban rohani bagi Allah melalui Yesus Kristus. Sebagaimana para imam di dalam bait Allah selalu memberikan beragam korban kepada Allah, demikian pula gereja Tuhan sebagai imamat yang kudus. Kita harus selalu mempersembahkan korban yang berkenan di hadapan Allah, bukan sembarang korban. Korban yang menyenangkan hati Allah tidak dapat dipisahkan dari Kristus (&ldquo;melalui Yesus Kristus&rdquo;). Gereja yang tidak Kristosentris tidak mungkin menyenangkan Allah.</p>\r\n\r\n<p style="text-align: justify;">Apa saja yang termasuk korban yang memperkenankan hati Allah? Di bagian lain Alkitab disebutkan tiga contoh dari korban semacam ini. Korban rohani adalah persembahan tubuh kepada Allah sebagai persembahan yang hidup, kudus, dan berkenan kepada Allah (Rom 12:1). Korban rohani juga bisa berupa ucapan bibir yang memuji dan memuliakan Allah (Ibr 13:15 &ldquo;Sebab itu marilah kita, oleh Dia, senantiasa mempersembahkan korban syukur kepada Allah, yaitu ucapan bibir yang memuliakan nama-Nya&rdquo;). Tindakan kasih dan keterlibatan dalam pelayanan juga merupakan persembahan yang disukai Allah. Paulus menyebut bantuan dari jemaat Filipi sebagai &ldquo;suatu persembahan yang harum, suatu korban yang disukai dan yang berkenan kepada Allah&rdquo; (Flp 4:18). Penulis Surat Ibrani memberikan nasihat untuk terus melakukan kebaikan dengan alasan: &ldquo;sebab korban-korban yang demikianlah yang berkenan kepada Allah&rdquo; (Ibr 13:16). &nbsp;&nbsp;&nbsp;</p>\r\n\r\n<p style="text-align: justify;">&nbsp;</p>\r\n\r\n<h3 style="text-align: justify;">Apa jaminannya?</h3>\r\n\r\n<p style="text-align: justify;">Sebuah bangunan pasti melibatkan perencanaan. Tanpa rencana yang baik pembangunan akan menghadapi berbagai kendala. Kemunculan berbagai faktor X yang tidak diperkirakan sebelumnya akan menghambar proses pembangunan. Puji Tuhan, dalam pembangunan rumah rohani tidak ada sesuatu pun yang mengagetkan. Tidak ada faktor X dalam rencana ilahi. TUHAN sudah merencanakan semuanya secara tepat dan indah.</p>\r\n\r\n<p style="text-align: justify;">Ide di atas dinyatakan Petrus melalui dua cara. Pertama, pengutipan beberapa nubuat dari kitab suci (ayat 6-7; kutipan dari Mzm 117:22; Yes 8:14; 28:16). Kedua, keterangan tentang ketetapan ilahi (ayat 8 &ldquo;untuk itu mereka juga telah disediakan&rdquo;). Kedua cara ini dikaitkan dengan penolakan bangsa Israel terhadap Kristus (bdk. Mar 12:10//Mat 21:42//Luk 20:17; Kis 4:11). Apakah penolakan itu berarti kegagalan bagi Allah? Sama sekali tidak! Penolakan itu sudah dinyatakan (ayat 6-7) dalam kitab suci dan direncanakan (ayat 8) sebelumnya oleh Allah. Tidak ada suatu pun yang mengagetkan Allah.</p>\r\n', '2018-09-25', 'Admin', 'Aktif', 'prayer-1308663_960_720.jpg'),
(59, '333', '33', '<p>33</p>\r\n', '2018-10-10', '333', '33', 'cross-2087073_960_720.png'),
(60, '222', '22', '<p>22</p>\r\n', '0000-00-00', '222', '22', 'prayer-1308663_960_720.jpg'),
(61, 'Ibadah', 'Undangan Rapat', '<p>Diharapkan kepada seluruh jemaat untuk hadir di acara pembukaan Hari Natal di Tgl 20 - Desember 2018</p>\r\n\r\n<p><img alt="" src="/GIKI/admin/ckeditor/kcfinder/upload/images/gambar.jpg" style="height:600px; width:800px" /></p>\r\n', '2019-01-17', 'Pendeta', 'Aktif', 'cara mudah hosting web site layanan coding.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_file`
--

CREATE TABLE IF NOT EXISTS `tbl_file` (
`kode` int(11) NOT NULL,
  `kategori` varchar(50) DEFAULT NULL,
  `judul` varchar(100) DEFAULT NULL,
  `konten` text,
  `tgl_posting` date DEFAULT NULL,
  `user` varchar(50) DEFAULT NULL,
  `status` varchar(10) NOT NULL,
  `data_file` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=61 ;

--
-- Dumping data untuk tabel `tbl_file`
--

INSERT INTO `tbl_file` (`kode`, `kategori`, `judul`, `konten`, `tgl_posting`, `user`, `status`, `data_file`) VALUES
(1, 'MINGGU', '11 : 00 Jam Ibdah Telah di ubah', '<table border="1" cellpadding="1" cellspacing="1" style="height:80px; width:383px">\r\n	<tbody>\r\n		<tr>\r\n			<td>09:00-10.40 WIB</td>\r\n			<td>Ibadah Pertama</td>\r\n		</tr>\r\n		<tr>\r\n			<td>11.00-Selesai</td>\r\n			<td>Ibdah Ke II</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>\r\n			<p>Kami Mengharapkan Kedatangan Anda Untuk Tuhan</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n', '2018-09-16', 'Delisman', 'Aktif', ''),
(3, 'SELASA', '19 : 00 - Latihan Pelayanan Music - Di Gereja', '', '2018-09-16', 'Admin', 'Akif', ''),
(4, 'RABU', '19 : 00 - Doa Syafaat - Di Gereja', '', '2018-09-16', 'Admin', 'Akif', ''),
(58, 'KAMIS', 'Ibadah Doa Rumah Tangga', '', '2018-09-16', 'Admin', 'Akif', ''),
(59, 'JUMAT', '19 : 00 Latihan Pelayanan Musik - Di Gereja', '', '2018-09-16', 'Admin', 'Aktif', ''),
(60, 'SABTU', '17 : 00 Menara Doa di Gereja dan 20: 00 : Ibadah Kaum Muda-Mudi di Gereja', '', '2018-09-17', 'Admin', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_folio`
--

CREATE TABLE IF NOT EXISTS `tbl_folio` (
`kode` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `gambar` text
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data untuk tabel `tbl_folio`
--

INSERT INTO `tbl_folio` (`kode`, `nama`, `alamat`, `gambar`) VALUES
(16, 'gambar 2', '#', 'cara mudah hosting web site layanan coding delis.png'),
(17, 'Gambar3', '#', 'penduduk.jpg'),
(18, 'Gambar 4', '#', 'gambar.jpg'),
(19, 'Gambar ke 4', '#', 'layanan coding belajar html.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_janji`
--

CREATE TABLE IF NOT EXISTS `tbl_janji` (
`kode` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `jenis_kelamin` varchar(100) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `handphone` varchar(20) DEFAULT NULL,
  `catatan` varchar(100) DEFAULT NULL,
  `Alamat` varchar(100) DEFAULT NULL,
  `nominal` int(11) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  `tanggal_regis` date DEFAULT NULL,
  `tanggal_bayar` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pesan`
--

CREATE TABLE IF NOT EXISTS `tbl_pesan` (
`kode` int(11) NOT NULL,
  `nama` varchar(40) DEFAULT NULL,
  `hp` varchar(20) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `pesan` varchar(200) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `keterangan` int(11) NOT NULL COMMENT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE IF NOT EXISTS `tbl_user` (
`kode` int(11) NOT NULL,
  `user_name` varchar(40) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`kode`, `user_name`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_video`
--

CREATE TABLE IF NOT EXISTS `tbl_video` (
`kode` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data untuk tabel `tbl_video`
--

INSERT INTO `tbl_video` (`kode`, `nama`, `alamat`) VALUES
(3, 'Video Lagu - Lagu Rohani', 'kvF5QsrR1Z0'),
(4, 'Lagu-Lau Rohani 2', 'kvF5QsrR1Z0'),
(5, 'Video Ke COBA', 'cq4SUrLJfN8');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_blog`
--
ALTER TABLE `tbl_blog`
 ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `tbl_file`
--
ALTER TABLE `tbl_file`
 ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `tbl_folio`
--
ALTER TABLE `tbl_folio`
 ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `tbl_janji`
--
ALTER TABLE `tbl_janji`
 ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `tbl_pesan`
--
ALTER TABLE `tbl_pesan`
 ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
 ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `tbl_video`
--
ALTER TABLE `tbl_video`
 ADD PRIMARY KEY (`kode`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_blog`
--
ALTER TABLE `tbl_blog`
MODIFY `kode` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=62;
--
-- AUTO_INCREMENT for table `tbl_file`
--
ALTER TABLE `tbl_file`
MODIFY `kode` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=61;
--
-- AUTO_INCREMENT for table `tbl_folio`
--
ALTER TABLE `tbl_folio`
MODIFY `kode` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `tbl_janji`
--
ALTER TABLE `tbl_janji`
MODIFY `kode` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_pesan`
--
ALTER TABLE `tbl_pesan`
MODIFY `kode` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
MODIFY `kode` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_video`
--
ALTER TABLE `tbl_video`
MODIFY `kode` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
