-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2020 at 03:18 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_proyek2`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id_artikel` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `Tanggal` date NOT NULL,
  `gambar` varchar(225) NOT NULL,
  `sumber` varchar(500) NOT NULL,
  `konten` varchar(50000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id_artikel`, `id_kategori`, `judul`, `Tanggal`, `gambar`, `sumber`, `konten`) VALUES
(33, 1, 'Tips Membangun Kepercayaan untuk Hubungan yang Baik', '2020-11-16', '5fb220a376c9d.jpg', 'sehatq.com', 'Satu hal yang tidak mudah diciptakan dalam semalam adalah bagaimana membangun kepercayaan dari orang lain. Percaya adalah bagian paling krusial dalam tiap hubungan. Jika sudah terwujud, akan tercipta hubungan yang sehat. <br><br> Sayangnya, rasa percaya bisa hilang begitu saja dalam hitungan detik. Untuk bisa membangunnya kembali, perlu waktu, kerja keras, dan tentu saja kesabaran. <br><br><b>Cara membangun kepercayaan</b><br> Meski mustahil bisa terwujud dalam waktu singkat, berikut ini beberapa cara membangun kepercayaan yang bisa dilakukan: <br><br> <b>1. Berkata sungguh-sungguh</b> <br> Meski sepele sekalipun, pastikan selalu berkata dengan sungguh-sungguh. Jangan hanya mengobral janji yang pada akhirnya tidak dilaksanakan atau ditepati. Ini akan membuat seseorang dicap sebagai sosok yang tidak dapat dipercaya. <br><br> Dengan demikian, untuk bisa membangun kepercayaan dalam sebuah hubungan, jangan katakan hal yang tidak akan dipenuhi. Hindari pula mengucapkan sesuatu yang tidak menunjukkan bagaimana perasaan sesungguhnya. <br><br> <b>2. Secara bertahap mulai terbuka terhadap kekurangan Anda</b> <br><br> Bersikap terbuka dan menyampaikan kelemahan yang Anda miliki baik secara emosional maupun fisik apabila dikomunikasikan secara bertahap dapat mempererat hubungan Anda dengan pasangan. Membuka diri kepada lawan bicara dengan menceritakan hal yang dapat melemahkan justru akan membangun rasa percaya. <br><br> Terlebih jika interaksi atau hubungan terus berlanjut dengan baik. Pasangan sudah tahu apa hal yang berpotensi melukai, namun tidak melakukannya. Lambat laun, hal ini justru akan memperkuat pondasi dalam sebuah hubungan, yaitu kepercayaan. <br><br> <b>3. Respect</b> <br> Menghargai orang lain atau respek adalah cara penting untuk menjaga sebuah hubungan. Utamanya jika sudah berkaitan dengan hubungan dengan orang terdekat seperti orangtua, saudara kandung, pasangan, dan sahabat. <br><br> Ketika respek tak diterapkan dalam hubungan yang semula dekat, maka konsekuensinya bisa lebih besar ketimbang hubungan dengan orang yang tidak begitu dekat. Untuk itu, pastikan selalu mengedepankan respek ketika berinteraksi dengan orang lain, terutama kekasih. <br><br> <b>4. Berani ambil risiko bersama</b> <br> Rasa senasib sepenanggungan saat bersama-sama menghadapi sebuah risiko atau tantangan akan membangun kepercayaan dengan pasangan. Contohnya menghadapi restu dari orangtua, mengubah gaya hidup menjadi lebih sehat, atau berlibur ke area dengan medan yang menantang. <br><br> Ketika menghadapi tantangan bersama pasangan, keduanya berada di luar zona nyaman. Dari situlah rasa percaya akan meningkat. Bonusnya, perasaan ini bisa menjadi rangsangan sehingga sex appealpun meningkat. <br><br> <b>5. Memberi dan menerima</b> <br> Kepercayaan juga berakar dari kerelaan untuk saling memberi dan menerima. Harus ada timbal balik yang seimbang antara setiap pihak dalam sebuah hubungan. Tak harus selalu bersamaan, terkadang saling memberi dan menerima ini dilakukan bergantian dalam sebuah hubungan. <br><br> Nikmati saja seluruh proses yang terjadi. Ketika pasangan sedang butuh, maka saatnya diberi dukungan. Begitu pula sebaliknya. Dengan hubungan yang saling timbal balik ini, maka kepercayaan akan terbangun dengan sendirinya. <br><br> <b>6. Prioritaskan waktu berkualitas</b> <br> Waktu berkualitas atau quality time adalah hal yang harus diprioritaskan dalam sebuah hubungan. Tidak berlebihan jika ada ungkapan bahwa hal paling berharga yang bisa diberikan seseorang adalah waktu. <br><br> Bukan hanya sekadar berkencan atau makan bersama, tapi juga benar-benar tidak terdistraksi dengan hal lain seperti sibuk melihat ponsel masing-masing. Saat sedang bersama, bicaralah dengan terbuka untuk semakin memahami satu sama lain. <br><br> <b>7. Buat batasan yang jelas</b> <br><br> Dalam sebuah hubungan pun perlu ada batasan yang jelas, mana yang boleh dilewati dan tidak. Perlu kepercayaan untuk bisa yakin bahwa pasangan tak akan melewati batas itu. Contoh sederhana adalah dengan tidak memaksa pasangan memberi tahu apa kata sandi ponselnya. Jika sudah percaya, tentu hal-hal semacam itu tak perlu dilakukan. <br><br> <b>8. Bertanggung jawab atas tindakan</b> <br> Jadilah orang yang benar-benar siap menerima konsekuensi dari apa yang dilakukan. Ketika hal tidak berjalan sesuai ekspektasi, jangan menyalahkan situasi atau orang lain. Akui bahwa itu adalah kesalahan Anda, minta maaf, dan bertanggung jawablah. <br><br> <b>9. Komunikasi</b> <br> Tidak ada orang yang bisa menjadi cenayang, piawai menebak-nebak apa yang ada di pikiran pasangannya. Untuk itu, selalu kedepankan komunikasi dengan pasangan untuk hal apapun. Bahkan terkadang, hal yang dirasa sepele sekalipun bisa jadi adalah isu penting bagi pasangan. <br><br> Jadi, kuncinya adalah komunikasi. Dengan terus berkomunikasi secara efektif, perlahan akan terbangun rasa percaya. Saling bicara dengan terbuka ini juga berlaku ketika situasi sedang rumit dan terkadang muncul godaan untuk menghindari membahasnya.'),
(34, 5, 'Haid 2 Kali Sebulan Apakah Normal? Ini Sebabnya', '2020-11-16', '5fb22a4bd2a76.jpg', 'sehatq.com', 'Siklus menstruasi yang normal adalah 21-35 hari. Oleh karena itu, haid 2 kali dalam sebulan bisa saja terjadi jika memang haid yang pertama, muncul di awal bulan dan yang kedua terjadi di akhir bulan. Ini adalah normal selama siklus haid Anda tidak kurang dari 21 hari. <br><br> Namun, pada beberapa orang yang tidak biasa mengalami menstruasi 2 kali dalam sebulan, ‘keanehan’ ini bisa menandakan gangguan di tubuh. Gangguan tersebut tidak selalu berbahaya. Meski begitu, Anda tetap perlu waspada dalam menghadapinya. <br><br> <b>Haid 2 kali sebulan, ini penyebabnya</b> <br><br> Berbeda dari orang dewasa, siklus menstruasi normal pada remaja adalah 21-40 hari. Namun umumnya, siklus haid remaja belum akan teratur selama 2 tahun pertama kemunculannya. <br><br> Oleh karena itu untuk remaja putri, mengalami haid 2 kali sebulan adalah hal yang normal terjadi selama tidak disertai oleh gejala lain yang mengganggu.<br><br>Sementara itu, pada perempuan dewasa yang siklus menstruasinya sudah teratur, ada beberapa hal yang bisa menyebabkan haid muncul 2 kali dalam sebulan, seperti:<br><br> <b>1. Stres</b> <br>Apabila ini adalah kali pertama Anda mengalami haid 2 kali dalam sebulan, maka penyebabnya bisa jadi bukanlah gangguan yang menetap, seperti stres.<br><br>Biasanya, hal ini akan muncul saat Anda sedang kelelahan atau saat pekerjaan sedang menumpuk. Dengan demikian, ini bukanlah sesuatu yang perlu dikhawatirkan.<br><br>Namun, apabila kejadian menstruasi dua kali dalam sebulan terus-menerus terjadi tanpa sebab yang jelas, sebaiknya Anda memeriksakan diri ke dokter.<br><br> <b>2. Perimenopause</b> <br>Perimenopause adalah waktu menjelang menopause, dengan gejala penuaan yang sudah mulai terjadi. Masa perimenopause bisa terjadi sejak 10 tahun sebelum menopause menjelang.<br><br>Selama masa tersebut, Anda bisa mengalami siklus menstruasi yang tidak teratur, termasuk haid 2 kali dalam sebulan.<br><br><b>3. Penggunaan KB</b><br>Anda juga dapat mengalami perdarahan dari vagina yang terlihat seperti menstruasi akibat penggunaan alat kontrasepsi seperti alat KB spiral (IUD) dan konsumsi pil KB.<br><br>Menggunakan pil KB yang mengandung hormon, akan membuat kadar hormon alami di tubuh turun dan menyebabkan peradarahan. Kondisi ini biasanya terjadi 2 minggu setelah haid Anda yang terakhir.<br><br>Di awal pemakaian KB, siklus haid juga biasanya akan berubah menjadi sedikit tidak teratur. Namun biasanya siklus akan kembali normal setelah 6 bulan. Telat minum pil KB juga bisa memicu siklus haid jadi tidak teratur.<br><br><b>4. Endometriosis</b><br>Endometriosis adalah gangguan dimana jaringan rahim tumbuh di luar rahim. Penyakit ini, selain bisa menyebabkan haid 2 kali sebulan, juga akan membuat pengidapnya meraskan nyeri yang teramat sangat saat menstruasi.<br><br>Gejala endometriosis lainnya adalah volume darah yang sangat banyak saat menstruasi dan waktu menstruasi lebih lama dari kondisi normal.<br><br> <b>5. Gangguan tiroid</b> <br>Gangguan pada produksi hormon tiroid, seperti hipotiroidisme dan hipertiroidisme juga bisa menyebabkan siklus haid tidak normal, sehingga menstruasi terjadi 2 kali dalam sebulan.<br><br>Seseorang dikatakan mengalami hipotiroidisme saat kelenjar tiroidnya tidak mampu memproduksi hormon tiroid dalam jumlah yang cukup. Selain haid yang tidak teratur, penyakit ini juga bisa memicu naiknya berat badan, konstipasi, dan detak jantung yang lambat.<br><br>Sementara pada kondisi hipertiroidisme, produksi hormon tiroid yang sangat berlebih juga dapat memicu berbagai gejala, seperti susah tidur, detak jantung meningkat cepat, berat badan turun, dan diare.<br><br> <b>6. Fibroid rahim</b> <br>Fibroid rahim adalah tumbuhnya jaringan berlebih di rahim. Kondisi ini tidaklah ganas maupun mengarah pada kanker, tapi bisa menyebabkan volume darah yang keluar saat haid menjadi meningkat drastis.<br><br>Selain bisa menyebabkan haid 2 kali sebulan, kondisi ini juga dapat membuat pengidapnya merasakan nyeri saat berhubungan seks, sering bolak-balik buang air kecil, dan terasa berat di bagian pinggul.<br><br> <b>7. Kehamilan</b> <br>Minggu-minggu awal kehamilan bisa memicu keluarnya flek yang sering disalahartikan sebagai menstruasi. Tidak jarang, hal ini membuat para perempuan mengira mengalami haid 2 kali sebulan.<br><br> <b>8. Infeksi menular seksual</b> <br>Beberapa infeksi menular seksual juga dapat memicu keluarga perdarahan atau keputihan yang disertai darah. Hal ini sering dikira sebagai menstruasi, tapi sebenarnya adalah dampak dari infeksi tersebut.<br><br> <b>9. Keguguran</b> <br>Pada beberapa kasus, menstruasi 2 kali sebulan juga bisa menandakan keguguran, karena menstruasi terakhir dikira sebagai darah haid. Hal ini biasanya terjadi saat usia kehamilan paling awal, ketika ibu belum menyadari kehamilannya<br><br><br> <b>Saat haid dua kali sebulan, perlukah periksa ke dokter?</b> <br><br>Mengalami haid 2 kali dalam sebulan tidak selalu menandakan gangguan atau penyakit. Namun, jika kemunculannya juga disertai gejala lain yang mengganggu dan Anda curiga kondisi ini mencirikan penyakit tertentu, maka berkonsultasilah dengan dokter.<br><br>Berikut ini beberapa gejala saat mengalami menstruasi 2 kali dalam sebulan, yang membutuhkan pemeriksaan dokter.<br><br>-   Volume darah yang keluar sangat banyak, bahkan sampai membuat Anda harus ganti pembalut setiap jam<br>-   Merasa lemas dan sama sekali tidak ada tenaga<br>-   Rasa sakit yang parah<br>-   Nyeri di bagian pinggul<br>-   Sesak napas<br>-   Berat badan naik atau turun secara tiba-tiba<br>-   Siklus menstruasi tiba-tiba jadi tidak teratur dan Anda berusia kurang dari 45 tahun<br>-   Menstruasi berlangsung lebih dari 7 hari<br>-   Siklus haid yang tidak teratur ini membuat Anda sulit hamil'),
(35, 5, 'Cara Membedakan Jenis Keputihan Normal dan Tidak Normal', '2020-11-16', '5fb233b1f1190.jpg', 'sehatq.com', 'Keputihan adalah cairan atau lendir vagina yang dihasilkan di luar masa haid. Keluarnya cairan ini merupakan kondisi normal yang dapat dialami semua wanita. Keputihan berfungsi melembapkan dan membersihkan vagina sekaligus melindunginya dari infeksi.<br><br>Keputihan bisa memiliki tekstur atau warna berbeda. Kondisi ini umumnya tidak mengkhawatirkan. Akan tetapi, ada beberapa jenis keputihan patut diwaspadai karena bisa menandakan adanya infeksi atau peradangan.<br><br>Berikut adalah sejumlah perbedaan jenis keputihan normal dan keputihan abnormal atau berbahaya yang menjadi gejala penyakit tertentu.<br><br><b>Jenis keputihan normal</b><br><br>Jenis keputihan normal biasanya tidak berbau tajam dan memiliki warna putih atau bening. Teksturnya tebal, lengket (berlendir), licin, dan basah. Banyaknya volume keputihan bisa bervariasi.<br><br>Biasanya keputihan menjadi lebih deras saat masa kehamilan atau menggunakan alat kontrasepsi. Cairan keputihan juga bisa keluar lebih banyak pada masa ovulasi dan ketika Anda aktif secara seksual.<br><br><b>Jenis keputihan abnormal</b><br><br>Ada beberapa jenis keputihan abnormal yang harus diwaspadai. Jenis keputihan tidak normal biasanya menandakan adanya infeksi atau peradangan di area kewanitaan. Berikut adalah sejumlah karakteristik dari keputihan yang tidak normal.<br><br><b>1. Keputihan berbau amis</b><br><br>Jenis keputihan berbau amis biasanya merupakan gejala keputihan karena infeksi vaginosis bakterialis. Infeksi ini bukan merupakan jenis penyakit menular seksual (PMS). Namun, wanita yang terjangkit vaginosis bakterialis memiliki risiko lebih tinggi terkena PMS, misalnya klamidia.<br><br>Aroma tidak sedap akibat vaginosis bakterialis biasanya tercium lebih kuat setelah melakukan hubungan seksual. Selain itu, keputihan juga dapat berubah warna putih keabuan, lebih tipis, dan lebih cair. Keputihan jenis ini juga tidak disertai rasa nyeri dan gatal. Meski demikian, sekitar 50 persen wanita yang terinfeksi masalah ini tidak memiliki gejala.<br><br><b>2. Keputihan menggumpal</b><br><br>Jenis keputihan yang tebal, putih, dan menggumpal dapat menandakan adanya infeksi jamur. Kondisi ini biasanya tidak memiliki aroma menyengat, tapi dapat menimbulkan gatal dan iritasi di area vagina. Selain itu, penderitanya juga dapat merasa nyeri dan perih hingga nyeri saat buang air kecil atau berhubungan seksual.<br><br><b>3. Keputihan berwarna kehijauan, kuning, atau berbuih</b><br><br>Jenis keputihan berwarna putih hingga keabuan, kuning, atau kehijauan dapat menandakan adanya infeksi parasit trikomoniasis vaginalis. Trikomoniasis termasuk penyakit menular seksual dan bisa berkembang tanpa adanya gejala.<br><br>Gejala trikomoniasis sering kali memiliki kemiripan dengan penyakit menular seksual lainnya. Oleh karena itu, diperlukan pemeriksaan laboratorium untuk memastikannya.<br><br>Gejala lain yang mungkin muncul pada jenis keputihan akibat infeksi trikomoniasis adalah:<br>-  Berbuih<br>-  Lebih deras dari biasanya<br>-  Dapat berbau amis<br>-  Terdapat pembengkakan dan gatal di sekitar vagina hingga bagian paha dalam<br>-  Terasa sakit dan tidak nyaman saat berkemih atau berhubungan seksual.<br><br> <b>4. Keputihan disertai rasa sakit di area panggul dan pendarahan</b> <br><br>Keputihan yang diiringi nyeri di area panggul atau perdarahan, dapat mengindikasikan adanya infeksi klamidia atau penyakit gonore (kencing nanah). Klamidia dan gonore merupakan infeksi menular seksual akibat bakteri.<br><br>Kedua penyakit ini dapat menimbulkan gejala keputihan berwarna kuning atau kehijauan, berbau tidak sedap, sakit saat buang air kecil, dan pendarahan di luar masa haid atau setelah berhubungan seksual.<br><br> <b>5. Keputihan disertai lepuhan dan rasa nyeri</b><br><br>Jenis keputihan yang disertai adanya luka lepuh dan rasa nyeri, dapat menandakan gejala herpes genital. Herpes genital adalah jenis penyakit yang disebabkan oleh infeksi virus dan salah satu jenis PMS. Gejala lain dari herpes genital adalah:<br><br>-  Bisul kecil kemerahan di sekitar kelamin, anus, paha, atau bokong<br>-  Rasa gatal, geli dan panas di sekitar kelamin<br>-  Rasa sakit saat berkemih<br>-  Keputihan yang tidak biasa.<br><br> <b>Cara mengatasi keputihan</b><br><br>Keputihan normal merupakan kondisi wajar yang tidak bisa dicegah dan tidak mengganggu kesehatan. Sementara itu, jenis keputihan abnormal karena infeksi harus ditangani oleh dokter sesuai dengan penyebabnya.<br><br>Ada beberapa hal yang harus diperhatikan untuk menjaga kesehatan area vagina dan mencegah terjadinya keputihan karena infeksi.<br><br>-  Selalu menjaga kebersihan area kewanitaan.<br>-  Mengganti celana dalam secara rutin.<br>-  Menggunakan air dan sabun berbahan ringan untuk membersihkan vagina secara lembut.<br>-  Jangan menggunakan sabun atau gel mengandung parfum.<br>-  Jangan menggunakan tisu pembersih kewanitaan yang beraroma.<br>-  Jangan menggunakan vaginal douche.<br>-  Keringkan area vagina setelah berkemih atau buang air besar.<br>-  Bersih dan keringkan area vagina dari arah depan ke belakang.<br>-  Menggunakan celana dalam berbahan katun dan tidak ketat.<br><br> <b>Kapan harus ke dokter</b> <br><br>Jika kondisi-kondisi di bawah ini terjadi pada Anda, segera periksakan diri ke dokter:<br><br>-  Jenis keputihan mengalami perubahan (volume, tekstur, warna atau aroma).<br>-  Terasa gatal dan sakit di area vagina.<br>-  Terjadi pendarahan di luar masa haid atau setelah berhubungan seksual.<br>-  Sakit saat berkemih dan muncul rasa sakit di area panggul.'),
(36, 5, '9 Penyebab Miss V Terasa Panas yang Wajib Dipahami Wanita', '2020-11-16', '5fb237d9a3855.jpg', 'sehatq.com', 'Miss V terasa panas dapat menjadi pertanda adanya kondisi medis yang diderita. Meskipun masalah ini umumnya tidak berbahaya, kondisi ini tetap tidak boleh diacuhkan supaya kesehatan alat kelamin Anda tetap terjaga. Mari kenali lebih jauh seputar penyebab Miss V terasa panas. <br><br> <b>9 penyebab Miss V terasa panas</b> <br><br>Sensasi panas biasanya terasa di bagian labia, klitoris dan lubang vagina. Kemunculan rasa panas pada Miss V bisa diperparah dengan aktivitas-aktivitas yang melibatkan organ intim ini, seperti buang air kecil atau berhubungan badan.<br>Berikut adalah sejumlah penyebab Miss V terasa panas yang mungkin terjadi.<br><br><b>1. Iritasi</b><br><br>Beberapa objek atau bahan kimia dapat menyebabkan vagina mengalami iritasi. Kondisi ini dikenal dengan sebutan dermatitis kontak.<br><br>Sabun, kain, hingga parfum dapat menyebabkan vagina teriritasi. Selain terasa panas, gatal dan nyeri juga bisa muncul sebagai gejala iritasi.<br><br>Cara mengatasi iritasi vagina adalah dengan menghindari berbagai macam objek yang menyebabkan Miss V teriritasi. Selama masa penyembuhan, jangan menggaruk bagian vagina agar proses pemulihannya dapat berjalan lancar.<br><br><b>2. Vaginosis bakterialis</b><br><br>Menurut Centers for Disease Control and Prevention (CDC), vaginosis bakterialis adalah penyebab umum infeksi vagina yang dirasakan wanita berusia 15-44 tahun. Vagina terasa panas adalah salah satu gejala umum dari penyakit ini.<br><br>Tidak hanya itu, vaginosis bakterialis juga dapat menyebabkan gejala lain, di antaranya:<br><br>-  Cairan berwarna abu-abu atau putih dari vagina<br>-  Nyeri<br>-  Gatal<br>-  Bau tidak sedap, terutama setelah berhubungan badan.<br><br>Mengidap vaginosis bakterialis dapat meningkatkan risiko Anda terserang penyakit menular seksual. Dokter biasanya akan memberikan obat antibiotik untuk mengatasi vaginosis bakterialis.<br><br> <b>3. Infeksi ragi vagina</b> <br><br>Infeksi ragi vagina (yeast infection) dapat mengundang sensasi panas pada vagina. Gejala lain dari infeksi ragi vagina meliputi gatal-gatal, rasa nyeri, sakit saat berhubungan intim, rasa tidak nyaman saat buang air kecil, hingga keluarnya cairan dari vagina.<br><br>Wanita yang sedang mengandung, menggunakan alat kontrasepsi hormonal, mengidap diabetes, atau memiliki sistem imun tubuh lemah, lebih berisiko menderita infeksi ragi vagina. Dokter akan memberikan obat-obatan antijamur dalam bentuk krim atau kapsul untuk mengobatinya.<br><br> <b>4. Infeksi saluran kemih</b> <br><br>Selain menyebabkan Miss V terasa panas saat buang air kecil, infeksi saluran kemih juga bisa memunculkan gejala mengganggu lainnya, seperti rasa kebelet buang air kecil, sakit saat kencing, warna urine yang buram dan berbau tak sedap, darah pada urine, sakit di bagian perut bawah, hingga merasa lelah.<br><br>Dokter dapat memberikan obat antibiotik untuk mengatasi infeksi saluran kemih. Dalam beberapa kasus, biasanya infeksi saluran kemih akan sembuh dalam waktu 5 hari.<br><br> <b>5. Trikomoniasis</b> <br><br>Trikomoniasis adalah penyakit menular seksual yang disebabkan oleh parasit. Hanya 30 persen penderita trikomoniasis yang akan mengalami gejala.<br><br>Sensasi panas pada vagina merupakan gejala umum dari penyakit ini. Gatal, kulit kemerahan, rasa tak nyaman saat kencing, hingga keluarnya cairan dari vagina juga dapat terjadi. Trikomoniasis dapat diobati dengan obat oral seperti, metronidazole atau tinidazole.<br><br> <b>6. Gonore</b> <br><br>Penyakit menular seksual lainnya yang mampu menyebabkan Miss V terasa panas adalah gonore. Penyakit ini disebabkan oleh bakteri bernama Neisseria gonorrheae yang mengakibatkan selaput lebdir leher rahim, rahim, dan saluran tuba mengalami infeksi.<br><br>Gonore dapat menyebabkan vagina terasa panas saat sedang kencing. Ditambah lagi, penyakit menular seksual ini umumnya dirasakan wanita 15-24 tahun ini juga bisa memunculkan gejala lain, seperti rasa nyeri saat kencing, keluarnya cairan dari vagina, sampai perdarahan vagina.<br><br>Kombinasi obat ceftriaxone dan azithromycin atau doxycycline biasanya diresepkan oleh dokter untuk mengobati gonore.<br><br> <b>7. Klamidia</b> <br><br>Klamidia disebabkan oleh bakteri Chlamydia trachomatisyang dapat ditularkan lewat hubungan seksual. Sebuah penelitian menyatakan, 70 persen penderita klamidia tidak akan mengalami gejala.<br><br>Namun, saat gejalanya muncul, rasa panas pada vagina dapat timbul. Selain itu, klamidia juga dapat menyebabkan keluarnya cairan dari vagina, rasa sakit saat kencing dan berhubungan intim, hingga perdarahan saat berhubungan badan.<br><br>Klamidia dapat diobati dengan obat antibiotik azithromycin dan doxycycline yang diresepkan oleh dokter.<br><br> <b>8. Herpes genital</b> <br><br>Herpes genital dapat menular lewat kontak fisik dengan penderitanya. Wanita lebih berisiko terserang penyakit ini dibandingkan pria. Gejala herpes genital biasanya baru akan muncul saat virusnya sudah mulai aktif di dalam tubuh.<br><br>Vagina terasa panas, gatal dan kesemutan, hingga rasa nyeri saat kencing adalah segelintir gejala herpes genital yang bisa muncul.<br><br>Saat seseorang terjangkit virus herpes, tidak ada obat yang dapat menyembuhkannya. Namun, gejala virus herpes dapat ditangani oleh obat antivirus.<br><br> <b>9. Menopause</b> <br><br>Perubahan kadar hormon yang terjadi saat wanita berada dalam fase menopause dapat menyebabkan vagina terasa panas, terutama saat sedang berhubungan intim.<br><br>Selain itu, menopause juga bisa menyebabkan gejala-gejala lain, yakni:<br><br>-  Keringat di malam hari<br>-  Sulit tidur<br>-  Libido menurun<br>-  Vagina kering<br>-  Sakit kepala<br>-  Perubahan suasana hati.<br><br>Untuk mengatasi berbagai gejala menopause yang sangat mengganggu, dokter akan merekomendasikan terapi hormon dan obat-obatan.'),
(37, 1, '5 Cara Menjaga Kesehatan Reproduksi Pria yang Bisa Anda Ikuti', '2020-11-16', '5fb23ac1da98c.jpg', 'sehatq.com', 'Tidak hanya wanita, pria juga perlu menjaga kesehatan organ reproduksinya secara teratur. Kesehatan reproduksi yang optimal akan membawa pengaruh positif terhadap performa seksual dan kemampuan Anda untuk memiliki keturunan. Oleh sebab itu, sebaiknya Anda tidak mengabaikan cara menjaga kesehatan reproduksi pria ini.<br><br><b>Cara menjaga kesehatan reproduksi pria</b><br><br>Berikut adalah sejumlah cara menjaga kesehatan reproduksi pria yang perlu Anda lakukan untuk menjaga fungsi dan kebersihan alat kelamin Anda.<br><br><b>1. Selalu menjaga kebersihan alat kelamin</b><br><br>Salah satu cara menjaga kesehatan reproduksi pria yang paling penting adalah memastikan kebersihan organ intim Anda. Bersihkan alat kelamin secara rutin untuk mencegah menumpuknya kotoran dan kuman sehingga berbagai risiko infeksi penyakit atau masalah lainnya dapat dihindari.<br><br>Mandi dua kali sehari dan membersihkan alat kelamin setelah buang air besar/kecil sudah cukup untuk menjaga kebersihannya. Di samping itu, jangan lupa rutin mengganti celana dalam supaya tetap bersih dan nyaman dikenakan.<br><br><b>2. Melakukan pemeriksaan penyakit menular seksual (PMS) secara rutin</b><br><br>Pria yang telah aktif secara seksual, terutama yang melakukan hubungan seks tanpa kondom, memiliki risiko terjangkit PMS. Oleh karena itu, sebaiknya Anda melakukan pemeriksaan PMS dan pemeriksaan alat kelamin pada dokter kulit dan kelamin secara rutin.<br><br>Selan itu, menghindari berganti-ganti pasangan seksual merupakan salah satu cara terbaik mencegah terjangkit PMS. Risiko penyakit PMS juga dapat diturunkan dengan penggunaan kondom.<br><br><b>3. Menjaga gaya hidup sehat</b><br><br>Diet sehat dan berolahraga merupakan dua cara menjaga kesehatan reproduksi pria yang penting. Untuk memastikan bahwa organ reproduksi berada dalam kondisi terbaik, praktikkan sejumlah gaya hidup sehat ini.<br><br> * <b>Konsumsi makanan bernutrisi</b><br>Makanan kaya serat dan rendah lemak dapat bermanfaat bagi kesehatan organ vital pria. Selain itu, beberapa jenis makanan juga dipercaya mampu meningkatkan performa seksual pria.<br><br>Bawang bombay, bawang putih, pisang, paprika, dan cabai dapat membantu meningkatkan aliran darah ke penis. Demikian juga dengan makanan mengandung asam lemak omega-3.<br><br>Makanan mengandung vitamin B1, seperti kacang tanah dan kacang merah, juga bermanfaat bagi kesehatan reproduksi pria. Selain melancarkan aliran darah, vitamin ini berkontribusi dalam meningkatkan reaksi saraf pada penis.<br><br> * <b>Banyak minum air putih</b><br><br>Banyak minum air putih dapat membantu ginjal membuang racun dari dalam tubuh melalui urine. Konsumsi air yang cukup ditandai dengan urine berwarna cerah, tidak berbau, dan mudah dikeluarkan.<br><br> * <b>Olahraga teratur</b><br><br>Berolahraga teratur termasuk gaya hidup sehat yang berkontribusi dalam menjaga kesehatan reproduksi pria. Dua olahraga yang bemanfaat bagi kesehatan reproduksi adalah olahraga kardio, seperti joging, renang, dan jalan cepat; serta latihan kekuatan otot, seperti angkat beban dan senam kegel.<br><br> * <b>Menjaga berat badan ideal</b><br><br>Cara menjaga kesehatan reproduksi pria dapat dilakukan dengan menjaga berat badan ideal. Sebuah penelitian menunjukkan bahwa berat badan berlebihan pada pria memiliki kaitan dengan menurunnya tingkat hormon testosteron, kualitas sperma yang lebih buruk, dan penurunan kesuburan.<br><br>Peluang infertilitas pada pria obesitas dapat meningkat hingga 10 persen pada setiap kenaikan berat badan sebesar 9 kg.<br><br> * <b>Berhenti merokok</b><br><br>Banyak hasil studi yang menunjukkan bahwa mayoritas pria yang mengalami disfungsi ereksi adalah seorang perokok. Atas dasar inilah, bahaya merokok perlu diwaspadai karena berperan besar dalam menyebabkan disfungsi seksual pada pria.<br><br>Kebiasaan merokok dapat menyumbat pembuluh arteri yang mengalirkan darah pada penis sehingga menyebabkan kesulitan ereksi ketika sedang berhubungan intim.<br><br>Oleh karena itu, cara menjaga kesehatan reproduksi pria yang perlu Anda lakukan adalah berhenti merokok. Selain berhenti merokok, pertahankan juga gaya hidup sehat tanpa alkohol dan obat-obatan terlarang.<br><br> * <b>Hindari stres</b><br><br>Menghindari dan mengelola stres termasuk cara menjaga kesehatan reproduksi pria. Stres mampu memengaruhi penurunan jumah produksi testosteron. Hal tersebut tidak saja berdampak pada menurunnya gairah seks, tapi juga bisa mengakibatkan disfungsi ereksi hingga impotensi.<br><br><b>4. Hindari memakai celana dalam ketat</b><br><br>Berdasarkan penelitian, celana dalam ketat dapat memengaruhi jumlah produksi sperma. Hal ini disebabkan produksi sperma sangat sensitif terhadap suhu udara.<br><br>Idealnya, suhu pada testis lebih rendah beberapa derajat dari suhu perut. Celana dalam yang ketat dapat menekan testis lebih dekat ke area perut sehingga menyebabkan peningkatan temperatur.<br><br><b>5. Gunakan athletic cup</b><br><br>Jika Anda gemar berolahraga yang memungkinkan terjadi kontak atau benturan dengan lawan, sebaiknya gunakan athletic cup atau protective cup.<br><br>Athletic cup adalah perlengkapan olahraga berupa pelindung organ vital pria yang berfungsi untuk melindungi alat kelamin Anda dari benturan dan cedera yang berbahaya saat olahraga.'),
(38, 4, 'Tak Hanya Wanita, Tes Kesuburan Pria Juga Perlu Dilakukan Saat Sulit Punya Momongan', '2020-11-16', '5fb23e2fdf3eb.jpg', 'sehatq.com', 'Banyak pasangan yang belum dikaruniai momongan meski mereka telah menikah dalam kurun waktu cukup lama. Hal tersebut bisa saja terjadi karena adanya pengaruh dari sejumlah faktor, salah satunya kesuburan pria.<br><br>Cara mengetahui kesuburan pria bisa dilakukan dengan mengikuti serangkaian tes dokter. Tes kesuburan pria dilakukan dengan berbagai macam cara, mulai melakukan pengecekan kondisi fisik pria hingga kualitas sel sperma.<br><br><b>Cara mengetahui kesuburan pria, tes apa saja yang harus dilakukan?</b><br><br>Untuk melakukan tes kesuburan pria, Anda harus berkonsultasi dengan dokter spesialis urologi. Nantinya, dokter akan melakukan pemeriksaan fisik dan bertanya mengenai gaya hidup serta riwayat kesehatan Anda.<br><br>Beberapa pertanyaan yang mungkin ditanyakan meliputi:<br><br>-   Obat yang pernah diminum<br>-   Operasi yang pernah dilakukan<br>-   Kehidupan seks bersama pasangan<br>-   Kebiasaan berolahraga yang dilakukan<br>-   Mempunyai kebiasaan merokok atau tidak<br>-   Riwayat menderita penyakit menular seksual (PMS)<br>-   Pernah menggunakan obat-obatan terlarang atau tidak<br><br>Setelah selesai melewati pemeriksaan tersebut, Anda kemudian akan diminta untuk menjalani sejumlah tes. Beberapa rangkaian tes kesuburan pria yang mungkin akan dilakukan dokter, di antaranya:<br><br><b>1. Tes air mani atau sperma</b><br><br>Cara mengetahui kesuburan pria bisa dilakukan dengan melihat jumlah, bentuk, dan gerakan sperma. Meski begitu, pria dengan jumlah, bentuk, dan gerakan sperma tidak normal belum tentu mengalami masalah kesuburan.<br><br>Guna memastikan kesuburan Anda, dokter biasanya akan melakukan tes sel sperma atau air mani sebanyak dua kali. Apabila hasil tes pertama normal, dokter akan kembali melakukan pengulangan tes untuk memastikan hasilnya.<br><br>Saat hasil kedua tes normal, maka Anda tidak mempunyai masalah pada kesuburan. Jika ada sesuatu yang tidak biasa, dokter mungkin akan meminta Anda menjalani serangkaian tes lain untuk mencari tahu penyebabnya. <br><br><b>2. Tes pemeriksaan fisik</b><br><br>Tes pemeriksaan fisik biasa dilakukan untuk melakukan pengecekan apakah Anda menderita varikokel. Varikokel adalah pembesaran pembuluh darah vena di dalam skrotum atau kantung testis. Kondisi ini dapat menghambat aliran darah dan mengganggu fungsi sistem reproduksi.<br><br>Apabila Anda terbukti mengalami varikokel, dokter akan melakukan operasi. Operasi dilakukan untuk melancarkan kembali aliran darah pada skrotum.<br><br><b>3. Tes pengecekan hormon</b><br><br>Kelainan testosteron dan hormon lain yang mengambil peran dalam proses produksi sperma dapat mengakibatkan masalah kesuburan, Namun, kasus ketidaksuburan yang disebabkan adanya masalah hormon sangat jarang terjadi. <br><br>Pada 97 persen pria yang dinyatakan tidak subur, hormon bukanlah penyebab utama mereka mengalami infertilitas.<br><br><b>4. Tes pemeriksaan genetik</b><br><br>Kelainan genetik mungkin menjadi penyebab Anda mengalami masalah kesuburan. Maka dari itu, tes ini bisa saja dilakukan untuk mengetahui apakah Anda memiliki kelainan genetik yang mengakibatkan kemandulan.<br><br><b>5. Tes anti-sperm antibody</b><br><br>Beberapa pria memproduksi antibodi abnormal, yang nantinya akan menyerang sel sperma dalam perjalanan menuju sel telur. Kondisi ini dapat membuat Anda dan pasangan kesulitan untuk punya momongan. Untuk mengetahui apakah Anda menderita kondisi ini, dokter akan melakukan tes anti-sperm antibody (ASA).<br><br><b>6. Urinalisis</b><br><br>Tes ini digunakan untuk mengetahui ada tidaknya infeksi dalam urine. Selain itu urinalisis juga dapat menunjukkan adanya sperma dalam urine. Jika ditemukan sperma dalam urine, kemungkinan terjadi masalah pada ejakulasi yang dikenal sebagai ejakulasi retrogade. <br><br>Jika ditemukan kondisi yang tidak normal dalam hasil tes, dokter mungkin akan meresepkan obat atau meminta Anda menerapkan gaya hidup sehat untuk mengatasi masalah kesuburan yang ada. Selain itu, tindakan operasi juga bisa saja diambil sebagai langkah penanganan.<br><br><br><b>Tips meningkatkan kesuburan pria</b><br><br>Meningkatkan kesuburan pria bisa dilakukan dengan meminum obat yang direkomendasikan oleh dokter. Selain minum obat dan suplemen, masih ada kebiasaan yang dapat Anda lakukan untuk meningkatkan kesuburan.<br><br>Berikut ini beberapa tips meningkatkan kesuburan pria tanpa harus menggunakan obat:<br><br>*  <b>Istirahat cukup</b><br><br>Menurut penelitian, kurang atau beristirahat secara berlebihan dapat memperburuk kualitas sperma. Maka dari itu, sebaiknya beristirahat dengan cukup untuk menjaga kesuburan Anda.<br><br>*  <b>Rajin berolahraga</b><br><br>Selain baik untuk kesehatan tubuh Anda secara keseluruhan, rajin berolahraga baik untuk kesuburan karena dapat membantu meningkatkan kadar hormon testosteron. Studi menunjukkan, pria yang berolahraga secara teratur mempunyai kadar testosteron lebih tinggi dan kualitas sperma lebih baik dibanding mereka yang tidak.<br><br>Meski begitu hindari olahraga secara berlebihan. Terlalu memforsir tubuh saat olahragamalah dapat menurunkan kadar testosteron.<br><br>*  <b>Membatasi konsumsi minuman beralkohol</b><br><br>Mengonsumsi minuman beralkohol secara berlebihan berpotensi menurunkan kadar testosteron dan merusak kualitas sel sperma. Untuk meningkatkan kesuburan Anda, sebaiknya hilangkan kebiasaan konsumsi minuman beralkohol.<br><br>*  <b>Melakukan aktivitas yang dapat mengurangi stres</b><br><br>Stres bisa mengurangi kepuasan seksual dan merusak kesuburan Anda. Meningkatnya hormon kortisol dalam tubuh saat stres dapat memberikan efek negatif pada produksi testosteron.<br><br>Untuk mengatasi stres, Anda bisa melakukan aktivitas-aktivitas yang membuat pikiran dan tubuh menjadi rileks seperti berjalan-jalan di alam terbuka, menghabiskan waktu bersama orang tersayang, atau bermeditasi.<br><br>*  <b>Mengonsumsi makanan yang mengandung vitamin C</b><br><br>Radikal bebas dapat mengakibatkan stres oksidatif. Stres oksidatif sendiri  terjadi ketika kadar reactive oxygen species (ROS) dalam tubuh mencapai tingkat berbahaya. Kondisi ini disebut dapat menyebabkan infertilitas pada pria.<br><br>Mengonsumsi makanan yang kaya akan kandungan vitamin C membantu melawan efek berbahaya tersebut. Selain itu, beberapa bukti juga menunjukkan bahwa mengonsumsi suplemen vitamin C dapat membantu meningkatkan kualitas dan pergerakan sperma.<br><br>*  <b>Mengonsumsi makananan yang mengandung vitamin D</b><br><br>Vitamin D sangatlah penting untuk kesuburan pria maupun wanita. Sebuah studi mengatakan, pria dengan kondisi kekurangan vitamin D cenderung punya kadar testosteron yang rendah. Rendahnya kadar testosteron dapat berpengaruh pada kesuburan Anda.');

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(11) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `Tanggal` date NOT NULL,
  `foto` varchar(225) NOT NULL,
  `sumber` varchar(500) NOT NULL,
  `konten` varchar(50000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_berita`, `judul`, `Tanggal`, `foto`, `sumber`, `konten`) VALUES
(9, 'Cium Mahasiswi yang Lagi KKP, Kades Ini Akhirnya Dihukum Penjara', '2020-10-22', '9.jpg', 'jateng.suara.com', 'Pelecehan seksual selalu terjadi terhadap wanita. Jika tidak diberikan tindakan tegas, laki-laki hidung belang biasanya akan semakin trengginas. <br><br> Apalagi pelakunya adalah oknum kepala desa, yang saharusnya bisa menjaga rakyatnya. Kasus pelecehan seksual ini dilakukan kepala desa (Kades) bernama Abdul Karim. <br><br> Ia nekat mencium mahasiswi berinisial AP yang melakukan Kuliah Kerja Profesi (KKP) di Kabupaten Wajo, Sulawesi Selatan (Sulsel). <br><br> Atas perbuatanya sang Kades Abdul Karim ditetapkan sebagai tersangka dan Kini ditahan di Polres Wajo. <br><br> Kepala Kepolisian Resor Wajo, AKBP Muhammad Islam Amirullah mengatakan, tersangka ditahan sejak Jumat (16/10/2020). <br><br> \"Kadesnya sudah ditahan, sejak hari jumat lalu,\" katanya dilansir dari SuaraSulsel.id, Kamis (22/10/2020). <br><br> Islam mengungkapkan Abdul Karim melecehkan mahasiswi di salah satu perguruan tinggi Kota Makassar. Dengan cara mencium pipi korban sebanyak tiga kali. <br><br> \"Iya (cium). Tiga kali pada saat yang sama,\" ungkap Islam. <br><br> Tidak terima dengan perlakuan Kades, korban AP melaporkan kejadian tidak senonoh itu ke Polres Wajo. <br><br> Hasilnya, Abdul Karim pun tetapkan sebagai tersangka. Karena terbukti melakukan tindak pidana pelecehan. <br><br> \"Karena terbukti, sehingga menjadi tersangka dan ditahan,\" kata dia.  \"Tidak ada indikasi pacaran (korban dengan pelaku),\" ungkap Islam. <br><br> Atas perbuatannya, pelaku dijerat pasal 289 KUHAPidana tentang pencabulan dengan ancaman hukuman penjara sembilan tahun dan pasal 294 KUHAPidana tentang pencabulan dengan ancaman hukuman tujuh tahun penjara. <br><br> \"Pasal 289 dan 294,\" katanya. <br><br> Kasat Reskrim Polres Wajo AKP Muhammad Warpa menjelaskan kejadian itu terjadi di Kantor Desa Lempong pada Juli 2020. <br><br> Kala itu, korban yang sedang melakukan KKP di desa tersebut mendatangi pelaku yang bekerja sebagai kepala desa dengan maksud untuk meminta tanda tangan. <br><br> Hanya saja, sang kades yang didatangi korban malah bertindak lain. Ia melecehkan korban dengan mencium pipi AP.  \"Iya korbannya mahasiswa KKP. Korban datang untuk minta tandatangan di kantor desa. Di situ kejadiannya,\" kata dia. <br><br> \"Pengaduannya tanggal 14 Juli 2020, kemudian laporannya tanggal 10 September 2020,\" sambung Warpa.'),
(10, 'Kronologis Istri Siri Polisi Dilecehkan di Ruangan Kerja Wakapolres', '2020-10-14', '10.jpg', 'kalbar.suara.com', 'Seorang perempuan berinisial PAK melaporkan perwira kepolisian karena dilecehkan. PAK mengaku dilecehkan polisi saat bikin surat izin mengemudi atau SIM. <br><br> Parahnya, si perempuan yang dilecehkan itu adalah istri siri polisi. <br><br> Pelecehan seksual itu dilakukan Wakil Kepala Polres (Wakapolres) Kompol N. Sementara korbannya adalah perempuan berinisial PAK. <br><br> Kompol N pun telah dicopot dari jabatannya sebagai Wakapolres. Selain itu dimutasi. <br><br> Berdasarkan informasi awal yang diterima, PAK yang melaporkan kejadian itu diketahui merupakan istri salah satu anggota polisi. <br><br> Kasus pelecehan tersebut memang telah diproses di Propam Polda Sulsel. Namun polisi Sulsel belum memastikan kebenaran peristiwa itu. Termasuk memberikan keterangan terkait bentuk-bentuk pelecehan yang dilakukan N kepada korban. <br><br> Kompol N adalah Wakapolres Takalar, Sulawesi Selatan. Kini kasus itu masih didalami Polda Sulsel. <br><br> Kepala Bidang Humas Polda Sulsel Kombes Ibrahim Tompo mengatakan, alasan dilakukan mutasi adalah untuk mempermudah proses pemeriksaan. <br><br> \"Masih diperiksa. Iya, mutasi untuk memudahkan pemeriksaannya,\" kata Ibrahim kepada Suara.com, Selasa (13/10/202).'),
(11, 'Berlangsung 20 Tahun, Kasus Pelecehan Ayah ke Anak Tiri Akhirnya Terbongkar', '2020-10-26', '11.jpg', 'www.suara.com', 'Kasus pelecehan seorang ayah terhadap anak tirinya di Singapura akhirnya terbongkar. Praktik bejat itu ternyata telah dilakukan tersangka selama lebih dari 20 tahun. <br><br> Menyadur Channel News Asia (CNA), Rabu (14/10/2020), pelecehan yang telah berlangsung sejak putri tirinya berusia 7 tahun itu terungkap setelah korban melapor ke polisi. <br><br> Pengadilan memaparkan bahwa korban selama ini bungkam terhadap pelecehan yang menimpanya lantaran takut ibu dan keluarganya tidak dapat suplai fin');

-- --------------------------------------------------------

--
-- Table structure for table `diskusi`
--

CREATE TABLE `diskusi` (
  `id_diskusi` int(11) NOT NULL,
  `id_topik` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `pembahasan` varchar(1000) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `diskusi`
--

INSERT INTO `diskusi` (`id_diskusi`, `id_topik`, `nama`, `pembahasan`, `tanggal`) VALUES
(10, 7, 'sania', 'saya lebih suka memakai pembalut, soalnya dengan bentuknya yang lebar memanjang hingga ke bagian bokong, pembalut dirasa bisa mencegah “tembus” saat dipakai. kalo memakai tampon terkadang saya lupa untuk menggantinya hehe', '2020-10-31'),
(12, 11, 'salma', 'Berenang saat menstruasi itu boleh kok, tetapi kita harus menggunakan tampon yaa bukan pembalut', '2020-10-31');

-- --------------------------------------------------------

--
-- Table structure for table `donasi`
--

CREATE TABLE `donasi` (
  `id_donasi` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_tujuan` int(11) NOT NULL,
  `nama_lengkap` varchar(225) NOT NULL,
  `no_hp` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `jmlh_donasi` varchar(225) NOT NULL,
  `metode` varchar(225) NOT NULL,
  `bukti_tf` varchar(225) NOT NULL,
  `note` varchar(225) NOT NULL,
  `tgl_donasi` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donasi`
--

INSERT INTO `donasi` (`id_donasi`, `id_user`, `id_tujuan`, `nama_lengkap`, `no_hp`, `email`, `jmlh_donasi`, `metode`, `bukti_tf`, `note`, `tgl_donasi`) VALUES
(7, 9, 6, 'Rahmanenen', '087123456176', 'nenen@gmail.com', '200000', 'linkaja', '', 'gae tumbas es', '2020-11-21');

-- --------------------------------------------------------

--
-- Table structure for table `kalender`
--

CREATE TABLE `kalender` (
  `id_kalender` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tgl_mens` date NOT NULL,
  `siklus_pendek` int(11) NOT NULL,
  `siklus_panjang` int(11) NOT NULL,
  `hasil` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kategori_artikel`
--

CREATE TABLE `kategori_artikel` (
  `id_kategori` int(11) NOT NULL,
  `kategori` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori_artikel`
--

INSERT INTO `kategori_artikel` (`id_kategori`, `kategori`) VALUES
(1, 'tips'),
(2, 'makanan & minuman'),
(4, 'pria'),
(5, 'wanita');

-- --------------------------------------------------------

--
-- Table structure for table `topik`
--

CREATE TABLE `topik` (
  `id_topik` int(11) NOT NULL,
  `topik` varchar(225) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `topik`
--

INSERT INTO `topik` (`id_topik`, `topik`, `nama`, `tanggal`) VALUES
(4, 'Apa indikator sperma sehat?', 'rifki', '2020-10-29'),
(5, 'Jika ternyata kualitas sperma kurang baik, apakah jenis pengobatan yang bisa mencegah infertilitas?', 'rifki', '2020-10-29'),
(6, 'Darah menstrusi mengapa tidak selalu merah?', 'sheva', '2020-10-29'),
(7, 'Mana yang lebih baik, pembalut atau tampon?', 'alya', '2020-10-30'),
(8, 'Apakah akan selalu mengalami kram perut setiap menstruasi?', 'nian', '2020-10-30'),
(9, 'Apa indikator sperma sehat?', 'admin', '2020-10-30'),
(10, 'apa bahaya hamil diluar nikah?', 'admin', '2020-10-31'),
(11, 'Ada yang bilang saat menstruasi boleh berenang karena tekanan air enggak membuat darah kita keluar tapi ada juga yang bilang enggak boleh. Jadi yang benar seperti apa?', 'vivi', '2020-10-31'),
(12, 'Apa Manfaat Toge bagi pria?', 'salma', '2020-11-03');

-- --------------------------------------------------------

--
-- Table structure for table `tujuan_donasi`
--

CREATE TABLE `tujuan_donasi` (
  `id_tujuan` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `deskripsi` varchar(5000) NOT NULL,
  `totaldana` varchar(1000) NOT NULL,
  `image` varchar(100) NOT NULL,
  `bni` varchar(50) NOT NULL,
  `bri` varchar(50) NOT NULL,
  `bca` varchar(50) NOT NULL,
  `linkaja` varchar(50) NOT NULL,
  `dana` varchar(50) NOT NULL,
  `mandiri` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tujuan_donasi`
--

INSERT INTO `tujuan_donasi` (`id_tujuan`, `nama`, `alamat`, `deskripsi`, `totaldana`, `image`, `bni`, `bri`, `bca`, `linkaja`, `dana`, `mandiri`) VALUES
(6, 'Rahmanian', 'Lamongan', 'bantu yukk jangan buat kuota mulu', '100000000', '6.png', '11', '22', '33', '44', '55', '1000'),
(8, 'panti asuhan inii', 'dimana mana hatiku senang', 'bantu yukk jangan buat kuota mulu', '300000', '5fb8c284cc481.png', '12', '34', '56', '78', '90', '100'),
(9, 'namaa', 'alamat', 'desk', '10', '', '12', '23', '34', '45', '56', '78');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `umur` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `username` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `level` enum('1','2') NOT NULL DEFAULT '2'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `umur`, `email`, `username`, `password`, `level`) VALUES
(1, 'admin', '20', 'admin@email.com', 'admin', 'admin', '1'),
(2, 'Salma', '20', 'salma123@gmail.com', 'salma', 'salma', '2'),
(3, 'Rahmanian', '20', 'rahmanian@gmail.com', 'rahmanian', 'rahmanian', '2'),
(4, 'rifki mulya', '20', 'rifki@gmail.com', 'rifki', 'rifki', '2'),
(5, 'sheva', '20', 'sheva@gmail.com', 'sheva', 'sheva', '2'),
(6, 'nabella', '20', 'nabella@gmail.com', 'nabella', 'nabella', '2'),
(7, 'Shania Bunga', '20', 'nabellasalma5@gmail.com', 'sania', 'sania', '2'),
(8, 'Alyaaaa', '20', 'belnabella0@gmail.com', 'alya', 'alya', '2'),
(9, 'Nian', '20', 'rahmanian@gmail.com', 'nian', 'nian', '2'),
(10, 'syaiful', '22', 'syaiful@gmail.com', 'syaiful', 'syaiful', '2'),
(11, 'anton', '27', 'anton100@gmail.com', 'anton', 'anton', '2'),
(12, 'vivi aluniah', '30', 'vivi19@gmail.com', 'vivi', 'vivi', '2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id_artikel`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `diskusi`
--
ALTER TABLE `diskusi`
  ADD PRIMARY KEY (`id_diskusi`),
  ADD KEY `id_topik` (`id_topik`);

--
-- Indexes for table `donasi`
--
ALTER TABLE `donasi`
  ADD PRIMARY KEY (`id_donasi`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_tujuan` (`id_tujuan`);

--
-- Indexes for table `kalender`
--
ALTER TABLE `kalender`
  ADD PRIMARY KEY (`id_kalender`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `kategori_artikel`
--
ALTER TABLE `kategori_artikel`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `topik`
--
ALTER TABLE `topik`
  ADD PRIMARY KEY (`id_topik`);

--
-- Indexes for table `tujuan_donasi`
--
ALTER TABLE `tujuan_donasi`
  ADD PRIMARY KEY (`id_tujuan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id_artikel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `diskusi`
--
ALTER TABLE `diskusi`
  MODIFY `id_diskusi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `donasi`
--
ALTER TABLE `donasi`
  MODIFY `id_donasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `kalender`
--
ALTER TABLE `kalender`
  MODIFY `id_kalender` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kategori_artikel`
--
ALTER TABLE `kategori_artikel`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `topik`
--
ALTER TABLE `topik`
  MODIFY `id_topik` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tujuan_donasi`
--
ALTER TABLE `tujuan_donasi`
  MODIFY `id_tujuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `artikel`
--
ALTER TABLE `artikel`
  ADD CONSTRAINT `artikel_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori_artikel` (`id_kategori`);

--
-- Constraints for table `diskusi`
--
ALTER TABLE `diskusi`
  ADD CONSTRAINT `diskusi_ibfk_1` FOREIGN KEY (`id_topik`) REFERENCES `topik` (`id_topik`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `donasi`
--
ALTER TABLE `donasi`
  ADD CONSTRAINT `donasi_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`),
  ADD CONSTRAINT `donasi_ibfk_2` FOREIGN KEY (`id_tujuan`) REFERENCES `tujuan_donasi` (`id_tujuan`);

--
-- Constraints for table `kalender`
--
ALTER TABLE `kalender`
  ADD CONSTRAINT `kalender_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
