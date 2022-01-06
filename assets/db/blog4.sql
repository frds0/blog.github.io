-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 29, 2021 at 06:55 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog4`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `Product_ID` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Description` varchar(200) NOT NULL,
  `Price` int(30) NOT NULL,
  `Photo` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`Product_ID`, `Name`, `Description`, `Price`, `Photo`) VALUES
(7, 'Mikrotik', 'Mampu menggunakan mikrotik ', 0, 'jrk3.jpg'),
(8, 'CodeIgneter', 'Mampu membuat website sederhana menggunakan CI', 0, 'Screenshot_(341)1.png'),
(9, 'APS', 'Mampu membuat perancangan sistem', 0, 'usecase1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `User_ID` int(11) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Full_Name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`User_ID`, `Username`, `Password`, `Full_Name`) VALUES
(1, 'admin', 'admin', 'Admin'),
(3, 'Firdaus', 'daus', 'Firdaus');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contacts`
--

CREATE TABLE `tbl_contacts` (
  `Name_ID` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Message` varchar(500) NOT NULL,
  `Date_and_Time` varchar(100) NOT NULL,
  `Subject` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_contacts`
--

INSERT INTO `tbl_contacts` (`Name_ID`, `Name`, `Email`, `Message`, `Date_and_Time`, `Subject`) VALUES
(1, 'Test', 'test@yahoo.com', 'This is a Test', '2014-09-24 02:04:50', 'Test'),
(2, 'Ahmad Firdaus', 'ahmad03firdaus@gmail.com', 'Jadi gini nih', '2021-07-08 20:35:40', 'My Job Alert 1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gallery`
--

CREATE TABLE `tbl_gallery` (
  `Photo_ID` int(11) NOT NULL,
  `Photo` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_gallery`
--

INSERT INTO `tbl_gallery` (`Photo_ID`, `Photo`) VALUES
(14, 'Ahmad_Firdaus_copy_880x380.jpg'),
(15, 'creative_copy_880x380.jpg'),
(16, 'ei_copy_880x380.jpg'),
(17, 'gb_copy_880x380.jpg'),
(18, 'invest_copy_880x380.jpg'),
(19, 'lead_copy_880x380.jpg'),
(20, 'problem_copy_880x380.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_info`
--

CREATE TABLE `tbl_info` (
  `Information_ID` int(11) NOT NULL,
  `Title` varchar(500) NOT NULL,
  `tgl_info` date NOT NULL,
  `Content` varchar(5000) NOT NULL,
  `Photo` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_info`
--

INSERT INTO `tbl_info` (`Information_ID`, `Title`, `tgl_info`, `Content`, `Photo`) VALUES
(18, 'Sebaran Kasus Corona di 34 Provinsi Indonesia 24 Juli 2021: Jakarta Tertinggi dengan 8.360 Kasus', '2021-07-01', 'TRIBUNNEWS.COM - Berikut informasi sebaran kasus virus corona (Covid-19) di 34 provinsi di Indonesia, Sabtu (24/7/2021).\r\n\r\nData di laman Covid19.go.id pukul 16.20 WIB, jumlah kasus terkonfirmasi positif Covid-19 di Indonesia bertambah 45.416 pasien.\r\n\r\nAdapun total kasus terkonfirmasi positif Covid-19 di Indonesia hari ini yakni 3.127.826 pasien.\r\nTRIBUNNEWS.COM - Berikut informasi sebaran kasus virus corona (Covid-19) di 34 provinsi di Indonesia, Sabtu (24/7/2021).\r\nCara Dapat Layanan Telemedicine bagi Pasien Isoman\r\n\r\nKementerian Kesehatan (Kemenkes) memperluas jangkauan penggunaan layanan Telemedicine di Jawa Barat, Jawa Tengah, Jawa Timur, dan Bali.\r\n\r\nNamun, penggunaan layanan Telemedicine ini baru menjangkau skala perkotaan.\r\n\r\nTelemedicine mencakup layanan konsultasi dan pengiriman obat gratis bagi pasien Covid-19 yang menjalani isolasi mandiri.\r\n\r\nSebelumnya, layanan Telemedicine sudah diujicobakan di DKI Jakarta, Bogor, Depok, Tangerang, dan Bekasi (Jabodetabek).\r\n\r\nKini penggunaan layanan Telemedicine diperluas lagi, antara lain Karawang, Kota Bandung, Kota Semarang, Kota Surakarta, Kota Yogyakarta, Kota Surabaya, Kota Malang, dan Kota Denpasar.\r\n', 'kopit8.jpg'),
(19, 'Bukayo Saka Jadi Sasaran Pelecehan Rasis Usai Gagal Penalti', '2021-07-12', 'TEMPO.CO, Jakarta - Bukayo Saka menjadi sasaran pelecehan rasis setelah ia gagal mengeksekusi penalti terakhir saat Inggris dikalahkan Italia dalam final Euro 2020 di Wembley, Senin dinihari, 12 Juli 2021.\r\n\r\nSaka, 19 tahun, masuk sebagai pemain pengganti dalam laga final Euro 2020 itu. Pemain itu harus melihat timnya bermain 1-1 hingga babak tambahan waktu usai.\r\n\r\nDalam adu penalti, ia menjadi penendang penalti kelima bagi Inggris. Ia gagal mencetak gol karena tembakannya diblik kiper Italia Gianluigi Donnarumma. Italia pun menang 3-2 dalam adu penalti itu.\r\n\r\nSeusai laga tersebut, Bukayo Saka langsung dikecam suporter. Lewat twitter dan komentar instagram, tak juga dilecehkan secara rasial. \"Keluar dari negara saya,\" tulis seorang netizen. Sedangkan yang lain berkata \"Kembalilah ke Nigeria\".\r\nAsosiasi Sepak Bola Inggris (FA) langsung bereaksi. Mereka mengecam aksi pelecehan rasial, yang juga menimpa Marcus Rashford dan Jadon Sancho yang sama-sama gagal mencetak gol dari penalti.\r\n\r\n\"Kami tidak bisa menjelaskan bahwa siapa pun di balik perilaku menjijikkan seperti itu tidak diterima untuk mengikuti tim,\" kata FA dalam sebuah pernyataan yang dikutip BBC Sport.\r\n\r\n\"Kami akan melakukan semua yang kami bisa untuk mendukung para pemain yang terkena dampak sambil mendesak hukuman seberat mungkin bagi siapa pun yang bertanggung jawab.\"\r\n\r\n\"Kami akan terus melakukan segala yang kami bisa untuk menghapus diskriminasi dari sepak bola, tetapi kami memohon pemerintah untuk bertindak  cepat dan membawa undang-undang yang sesuai sehingga penyalahgunaan ini memiliki konsekuensi di kehidupan nyata.\"\r\n', 'saka4.jpg'),
(20, 'Presiden Joko Widodo ke Windy Cantika Sang Pemenang Medali Pertama Indonesia di Olimpiade Tokyo 2020', '2021-07-24', 'KOMPAS.com - Presiden Joko Widodo (Jokowi) memberikan ucapan selamat kepada Windy Cantika Aisah yang mempersembahkan medali pertama untuk Indonesia di Olimpiade Tokyo 2020. Atlet angkat besi putri Indonesia, Windy Cantika Aisah, berhasil meraih medali perunggu di kelas 49 kg, Sabtu (24/7/2021) siang WIB. Bertanding di Tokyo International Forum, Windy Cantika berhak mendapatkan medali perunggu usai menempati posisi ketiga dengan total angkatan 194 kg.\r\nTotal angkatan snatch terbaik atlet angkat besi putri Tanah Air berusia 19 tahun itu, yakni 84 kg yang didapat pada kesempatan kedua. Sementara, total angkatan clean and jerk terbaik Windy Cantika adalah 110 kg yang diraih pada kesempatan ketiga.\r\nWindy Cantika sukses mengharumkan Tanah Air di kancah internasional pun mendapat pujian dari berbagai pihak. Ucapan selamat dilontarkan banyak pihak kepadanya via media sosial, tak terkecuali Presiden Indonesia Joko Widodo. \"Kabar baik datang dari Tokyo, hari ini. Atlet angkat besi putri Indonesia, Windy Cantika Aisah, mempersembahkan medali pertama dari ajang Olimpiade Tokyo dengan merebut medali perunggu di kelas 49 kg,\" tulis Presiden Jokowi lewat akun Instagram. \"Dari Tanah Air, saya menyampaikan selamat,\" demikian ucapan Jokowi.\r\nSementara itu, total angkatan Windy Cantika yang mencapai 194 kg ini merupakan suatu peningkatan besar dari event Kejuaraan Asia di Uzbekistan pada April 2021 lalu. Saat itu, Windy mengangkat total berat 189 kg sehingga membuatnya meraih tiket ke Olimpiade\r\n', 'tky4.jpeg'),
(21, 'Guru SMK di Nganjuk Berusaha Bikin Siswanya Cinta Ngoding', '2021-07-18', 'Jakarta - Tuntutan kompetensi pendidik di era digital sangat tinggi. Apalagi kalau murid yang diajar tak suka dengan apa yang mereka pelajari. Namun hal ini justru menjadi tantangan tersendiri bagi Mohammad Nur Huda, seorang guru SMK asal Nganjuk, Jawa Timur.\r\n\"Tantangan buat saya. Harus putar otak biar mereka cinta ngoding,\" cerita Huda, demikian dia akrab disapa.\r\n\r\nPerjalanan Huda sebagai developer dan juga guru, dimulai dari kecintaannya pada hal-hal yang berbau IT sejak di bangku sekolah.', 'grp2.jpeg'),
(22, 'Pemprov DKI Jakarta Butuh Relawan Kesehatan Bantu Tangani Pandemi Covid-19', '2021-07-20', 'JAKARTA - Wakil Gubernur DKI Jakarta Ahmad Riza Patria (Ariza) mengatakan, pihaknya membutuhkan relawan kesehatan untuk membantu tenaga kesehatan (nakes) yang jumlahnya terbatas dalam menangani pandemi Covid-19.\r\n\r\n\"Kami perlu tambahan tenaga kesehatan, kami ajak semua yang punya keahlian, kompetensi untuk mendaftar sebagai relawan,\" kata Ariza usai blusukan di RSUD Tebet dan RSUD Jagakarsa, Jakarta Selatan, Sabtu (24/7/2021).\r\nMenurut dia, pemerintah pusat menjanjikan akan menyiapkan sekitar 1.\r\n', 'jkt1.jpg'),
(23, 'Jack Grealish Beri Sinyal Semakin Dekat ke Manchester City', '2021-07-11', 'Liputan6.com, Manchester - Pemain sayap Aston Villa Jack Grealish semakin gencar dikaitkan dengan kabar kepindahannya ke Manchester City. Kabarnya, The Citizens siap untuk membuat tawaran sebesar 90 juta pound atau sekitar Rp 1,78 triliun untuk pemain Timnas Inggris itu.\r\n\r\nManchester City memang nampak serius untuk dapat memboyong Grealish ke Etihad. Usaha dari Man City sepertinya akan membuahkan hasil mengingat pemain Inggris itu tertarik bergabung untuk bisa bermain di Liga Champions musim depan\r\n', 'jack3.jpg'),
(24, 'Raih Penghargaan CEO BPD Terbaik di Indonesia, Dirut BJB Apresiasi Kerja Sama Solid Seluruh Insan Pe', '2021-07-03', 'KOMPAS.com - Direktur Utama (Dirut) PT Bank Pembangunan Daerah Jawa Barat dan Banten Tbk (BJB) Yuddy Renaldi berhasil meraih predikat “Indonesia Best CEO Award 2021-Employees’ Choice” dalam kategori Bank Pembangunan Daerah (BPD). Penghargaan yang diberikan oleh Iconomics Research and Consulting tersebut dilakukan secara virtual dalam gelaran webinar \"CEO Leadership On New Normal\", Jumat (23/7/2021). Adapun penghargaan tersebut diberikan atas dasar penilaian tim riset Iconomics Research\r\n', 'bjb3.jpg'),
(25, 'Makan di Warteg Maksimal 20 Menit, COVID-19 Menular Cuma Butuh 1 Menit', '2021-07-19', 'Jakarta - Pada Minggu (25/7/2021), Presiden Joko Widodo resmi menerapkan pemberlakuan pembatasan kegiatan masyarakat (PPKM) level 4 mulai 26 Juli hingga 2 Agustus 2021 mendatang. Beberapa peraturan dilonggarkan, salah satunya boleh makan di warung atau warteg.\r\nAturan memperbolehkan makan di tempat selama maksimal 20 menit. Aturan ini pun memicu pendapat banyak orang yang merasa 20 menit itu waktu yang terlalu singkat.\r\nMenurut pakar epidemiologi Universitas Griffith Australia Dicky Budiman, risiko penularan virus bisa terjadi lebih cepat dari 20 menit. Virus bisa menular hanya dalam waktu satu menit.\r\n\r\n\"Jelas sebetulnya, jangankan 20 menit ya sekarang satu menit saja sudah cukup (menularkan virus),\" jawab Dicky saat dihubungi detikcom, Senin (26/7/2021).\r\n\r\nNamun, Dicky mengatakan saat ini opsi tersebut mau tidak mau harus diambil. Sebab, kondisi pandemi COVID-19 di Indonesia sudah sangat membebani berbagai sektor, seperti sektor kesehatan, ekonomi, dan sosial.\r\n', 'warteg1.jpeg'),
(26, 'Mobil Mustang GT500 Terbakar di Pondok Indah', '2021-07-07', 'Jakarta - Mobil sport Mustang V8 terbakar di daerah Pondok Indah, Jakarta Selatan, sore tadi. Api melahap hangus bodi mobil tersebut.\r\nPeristiwa itu terjadi sekitar pukul 17.00 WIB. Kebakaran diduga akibat korsleting listrik.\r\n\r\nSaat itu pengemudi mobil tersebut tengah melaju usai membawa mobilnya ke bengkel. Tiba-tiba api keluar dari bagian depan mobil.\r\n\"Dari bengkel jaraknya berapa kilo terus dia lagi arah mau pulang. Tahu-tahu korslet dan kebakar. Awal api dari mesin depan, dari kap depan\"', 'mustang1.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`Product_ID`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`User_ID`);

--
-- Indexes for table `tbl_contacts`
--
ALTER TABLE `tbl_contacts`
  ADD PRIMARY KEY (`Name_ID`);

--
-- Indexes for table `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  ADD PRIMARY KEY (`Photo_ID`);

--
-- Indexes for table `tbl_info`
--
ALTER TABLE `tbl_info`
  ADD PRIMARY KEY (`Information_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `Product_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `User_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_contacts`
--
ALTER TABLE `tbl_contacts`
  MODIFY `Name_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  MODIFY `Photo_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tbl_info`
--
ALTER TABLE `tbl_info`
  MODIFY `Information_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
