-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 09, 2020 at 08:21 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spk_moora`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_alternatif`
--

CREATE TABLE `tb_alternatif` (
  `id_alternatif` int(11) NOT NULL,
  `kode_alternatif` varchar(105) NOT NULL,
  `nama_alternatif` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_alternatif`
--

INSERT INTO `tb_alternatif` (`id_alternatif`, `kode_alternatif`, `nama_alternatif`) VALUES
(1, 'A1', 'Giono'),
(2, 'A2', 'Martono'),
(3, 'A3', 'Bagiono'),
(4, 'A4', 'Susanto'),
(5, 'A5', 'Sukini'),
(6, 'A6', 'Ponidi'),
(7, 'A7', 'Marfuatin'),
(8, 'A8', 'Semi'),
(9, 'A9', 'Darinem'),
(10, 'A10', 'Sarti'),
(11, 'A11', 'Wulyono'),
(12, 'A12', 'Sumarno'),
(13, 'A13', 'Imam'),
(14, 'A14', 'Mat Kosim Geger'),
(15, 'A15', 'Harto'),
(16, 'A16', 'Sukimin'),
(17, 'A17', 'Karti'),
(18, 'A18', 'Sugiran'),
(19, 'A19', 'Nur Alif'),
(20, 'A20', 'Suratin'),
(21, 'A21', 'Marijan'),
(22, 'A22', 'Subandi'),
(23, 'A23', 'Soepini'),
(24, 'A24', 'Suminto'),
(25, 'A25', 'Wakisah'),
(26, 'A26', 'Wiji Santoso'),
(27, 'A27', 'Ninik'),
(28, 'A28', 'Rasim'),
(29, 'A29', 'Paniman'),
(30, 'A30', 'Salbiyah'),
(31, 'A31', 'Kanah'),
(32, 'A32', 'Sodi Kromo'),
(33, 'A33', 'Eko Widodo'),
(34, 'A34', 'Sugeng'),
(35, 'A35', 'Mardi'),
(36, 'A36', 'Rianah'),
(37, 'A37', 'Yatemo'),
(38, 'A38', 'Sasi Rahayu'),
(39, 'A39', 'Sareh'),
(40, 'A40', 'Purwanto'),
(41, 'A41', 'Partin'),
(42, 'A42', 'Winarko'),
(43, 'A43', 'Yayuk Wijayajati'),
(44, 'A44', 'Moerdani'),
(45, 'A45', 'Tamsirin'),
(46, 'A46', 'Setro Karyo Gumun'),
(47, 'A47', 'Gombreg'),
(48, 'A48', 'Ponirin'),
(49, 'A49', 'Mursidi'),
(50, 'A50', 'Suharianto'),
(51, 'A51', 'Suparngi'),
(52, 'A52', 'Regu'),
(53, 'A53', 'Wardi'),
(54, 'A54', 'Suyatno'),
(55, 'A55', 'Rasimin'),
(56, 'A56', 'Sumiatun'),
(57, 'A57', 'Karsiyem'),
(58, 'A58', 'Murdi Yatno'),
(59, 'A59', 'Yahmat'),
(60, 'A60', 'Gimin'),
(61, 'A61', 'Muntalfiin'),
(62, 'A62', 'Syahri'),
(63, 'A63', 'Mubadi'),
(64, 'A64', 'Purwati'),
(65, 'A65', 'Paijem'),
(66, 'A66', 'Sri Maningsih'),
(67, 'A67', 'Sukarlan'),
(68, 'A68', 'Wagimin'),
(69, 'A69', 'Sumarjoko'),
(70, 'A70', 'Sih Wilujeng'),
(71, 'A71', 'Pirnadi'),
(72, 'A72', 'Nurwiyono'),
(73, 'A73', 'Surati'),
(74, 'A74', 'Saiin'),
(75, 'A75', 'Wagini'),
(76, 'A76', 'Siswari'),
(77, 'A77', 'Supiyah'),
(78, 'A78', 'Sumarti'),
(79, 'A79', 'Girah'),
(80, 'A80', 'Sugeng Santoso'),
(81, 'A81', 'Suyitno'),
(82, 'A82', 'Ginten'),
(83, 'A83', 'Kadi'),
(84, 'A84', 'Madkemi'),
(85, 'A85', 'Gimah'),
(86, 'A86', 'Sumardiono'),
(87, 'A87', 'Junianto'),
(88, 'A88', 'Soniran'),
(89, 'A89', 'Sawal'),
(90, 'A90', 'Ropingi'),
(91, 'A91', 'Hariyanto'),
(92, 'A92', 'Mardiono'),
(93, 'A93', 'Sarimah'),
(94, 'A94', 'Kasdi'),
(95, 'A95', 'Tambah'),
(96, 'A96', 'Lasimin'),
(97, 'A97', 'Suryani'),
(98, 'A98', 'Wakiyah'),
(99, 'A99', 'Sardo'),
(100, 'A100', 'Rasinah'),
(101, 'A101', 'Sutari'),
(102, 'A102', 'Suwarni'),
(103, 'A103', 'Gini'),
(104, 'A104', 'Ponimin'),
(105, 'A105', 'Jumini'),
(106, 'A106', 'Sinto'),
(107, 'A107', 'Siti Romlah'),
(108, 'A108', 'Parman'),
(109, 'A109', 'Sunarno'),
(110, 'A110', 'Suparto'),
(111, 'A111', 'Welas'),
(112, 'A112', 'Suminah'),
(113, 'A113', 'Srigeno'),
(114, 'A114', 'Nuriman'),
(115, 'A115', 'Abdul Rosid'),
(116, 'A116', 'Marimin'),
(117, 'A117', 'Katumi'),
(118, 'A118', 'Sarno'),
(119, 'A119', 'Suraji'),
(120, 'A120', 'Kaderi'),
(121, 'A121', 'Sumali'),
(122, 'A122', 'Paeran'),
(123, 'A123', 'Usman'),
(124, 'A124', 'Sirep'),
(125, 'A125', 'Sumarjo'),
(126, 'A126', 'Kober'),
(127, 'A127', 'Suparno'),
(128, 'A128', 'Sundayani'),
(129, 'A129', 'Karminto'),
(130, 'A130', 'Katmiran'),
(131, 'A131', 'Sutaji'),
(132, 'A132', 'Sukiyat'),
(133, 'A133', 'Pairin'),
(134, 'A134', 'Seger'),
(135, 'A135', 'Purnan'),
(136, 'A136', 'Saino'),
(137, 'A137', 'Parin Suparto'),
(138, 'A138', 'Rigo'),
(139, 'A139', 'Harmiati'),
(140, 'A140', 'Suyati'),
(141, 'A141', 'Tasmiran'),
(142, 'A142', 'Sarmi'),
(143, 'A143', 'Munasri'),
(144, 'A144', 'Kaeran'),
(145, 'A145', 'Suyanto'),
(146, 'A146', 'Mulyono'),
(147, 'A147', 'Murtiani'),
(148, 'A148', 'Bonijan'),
(149, 'A149', 'Lastri'),
(150, 'A150', 'Rasidi'),
(151, 'A151', 'Sali'),
(152, 'A152', 'Jani'),
(153, 'A153', 'Wakijo'),
(154, 'A154', 'Sumilan'),
(155, 'A155', 'Tuminem'),
(156, 'A156', 'Warimin'),
(157, 'A157', 'Rianto'),
(158, 'A158', 'Suhadi'),
(159, 'A159', 'Kamat'),
(160, 'A160', 'Sukari'),
(161, 'A161', 'Kemis'),
(162, 'A162', 'Katini'),
(163, 'A163', 'Jumadi'),
(164, 'A164', 'Setiawan'),
(165, 'A165', 'Warsito'),
(166, 'A166', 'Marsih'),
(167, 'A167', 'Musikin'),
(168, 'A168', 'Tukiman'),
(169, 'A169', 'Mursadi'),
(170, 'A170', 'Tumidi'),
(171, 'A171', 'Suti'),
(172, 'A172', 'Siti Mariyam'),
(173, 'A173', 'Djumani'),
(174, 'A174', 'Legiyem'),
(175, 'A175', 'Winih'),
(176, 'A176', 'Warsiadi'),
(177, 'A177', 'Sukardi'),
(178, 'A178', 'Tumini Situm'),
(179, 'A179', 'Mahfudz'),
(180, 'A180', 'Tukiran'),
(181, 'A181', 'Jati Siswa Setiawan'),
(182, 'A182', 'Wiji'),
(183, 'A183', 'Sanipan'),
(184, 'A184', 'Maenah'),
(185, 'A185', 'Langkir'),
(186, 'A186', 'Ngatemi'),
(187, 'A187', 'Sunaryo'),
(188, 'A188', 'Rasikin'),
(189, 'A189', 'Kasiman'),
(190, 'A190', 'Ali Suko'),
(191, 'A191', 'Sukamto'),
(192, 'A192', 'Warjito'),
(193, 'A193', 'Samini'),
(194, 'A194', 'Kaslan'),
(195, 'A195', 'Slamet Riadi'),
(196, 'A196', 'Panirin'),
(197, 'A197', 'Suroto'),
(198, 'A198', 'Paikin'),
(199, 'A199', 'Rajiman'),
(200, 'A200', 'Nur Arifin'),
(201, 'A201', 'Poniran'),
(202, 'A202', 'Ponilah'),
(203, 'A203', 'Pujud'),
(204, 'A204', 'Tambir'),
(205, 'A205', 'Sarengat'),
(206, 'A206', 'Mirah'),
(207, 'A207', 'Kromo Bejo'),
(208, 'A208', 'Batin Sunarno'),
(209, 'A209', 'Wakijan'),
(210, 'A210', 'Sugeng Purnomo'),
(211, 'A211', 'M Choirul A'),
(212, 'A212', 'Ngutriyanto'),
(213, 'A213', 'Romelah'),
(214, 'A214', 'Kasini'),
(215, 'A215', 'Muksin'),
(216, 'A216', 'Gemi'),
(217, 'A217', 'Sunarti'),
(218, 'A218', 'Basuki'),
(219, 'A219', 'Suroso'),
(220, 'A220', 'Supirah'),
(221, 'A221', 'Tokit'),
(222, 'A222', 'Mujiati'),
(223, 'A223', 'Marsam'),
(224, 'A224', 'Bejo'),
(225, 'A225', 'Mukholik'),
(226, 'A226', 'Jembres'),
(227, 'A227', 'Karso Kanten'),
(228, 'A228', 'Slamet'),
(229, 'A229', 'Boniran'),
(230, 'A230', 'Aci'),
(231, 'A231', 'Suparlan'),
(232, 'A232', 'Jainem'),
(233, 'A233', 'Kateni'),
(234, 'A234', 'Paijan'),
(235, 'A235', 'Sripah'),
(236, 'A236', 'Mitun'),
(237, 'A237', 'Andri Arso'),
(238, 'A238', 'Sumiati'),
(239, 'A239', 'Samilah'),
(240, 'A240', 'Minem'),
(241, 'A241', 'Katirin'),
(242, 'A242', 'Satiyah'),
(243, 'A243', 'Andika'),
(244, 'A244', 'Katijan'),
(245, 'A245', 'Tarzan'),
(246, 'A246', 'Partiyah'),
(247, 'A247', 'Kamdari'),
(248, 'A248', 'Pini'),
(249, 'A249', 'Katimin'),
(250, 'A250', 'Suwarno'),
(251, 'A251', 'Misdi'),
(252, 'A252', 'Adi Sunarko'),
(253, 'A253', 'Sumastri'),
(254, 'A254', 'Komarudin'),
(255, 'A255', 'Mardianto'),
(256, 'A256', 'Sumini'),
(257, 'A257', 'Sringatun'),
(258, 'A258', 'Sugeno'),
(259, 'A259', 'Panidi'),
(260, 'A260', 'Sumadi'),
(261, 'A261', 'Sumarsih'),
(262, 'A262', 'Wage'),
(263, 'A263', 'Sutikno'),
(264, 'A264', 'Poniyem'),
(265, 'A265', 'Suwaji'),
(266, 'A266', 'Mariatun'),
(267, 'A267', 'Imam Solikin');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kriteria`
--

CREATE TABLE `tb_kriteria` (
  `id_kriteria` int(11) NOT NULL,
  `nama_kriteria` varchar(255) NOT NULL,
  `tipe` varchar(105) NOT NULL,
  `bobot` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kriteria`
--

INSERT INTO `tb_kriteria` (`id_kriteria`, `nama_kriteria`, `tipe`, `bobot`) VALUES
(1, 'Status Bangunan Tinggal', 'Benefit', 0.25),
(2, 'Status Lahan Tinggal', 'Benefit', 0.25),
(3, 'Jenis Lantai Terluas', 'Benefit', 0.15),
(4, 'Jenis Dinding ', 'Benefit', 0.2),
(5, 'Kondisi Dinding', 'Cost', 0.15),
(6, 'Jenis Atap', 'Benefit', 0.2),
(7, 'Kondisi Atap', 'Cost', 0.15),
(8, 'Sumber Air Minum', 'Benefit', 0.3),
(9, 'Sumber Penerangan', 'Benefit', 0.35);

-- --------------------------------------------------------

--
-- Table structure for table `tb_level`
--

CREATE TABLE `tb_level` (
  `id_level` int(11) NOT NULL,
  `keterangan` varchar(155) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_level`
--

INSERT INTO `tb_level` (`id_level`, `keterangan`) VALUES
(1, 'Administrator'),
(2, 'Kepala Desa');

-- --------------------------------------------------------

--
-- Table structure for table `tb_nilai`
--

CREATE TABLE `tb_nilai` (
  `id_nilai` int(11) NOT NULL,
  `fk_id_alternatif` int(11) NOT NULL,
  `fk_id_kriteria` int(11) NOT NULL,
  `total_nilai` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_nilai`
--

INSERT INTO `tb_nilai` (`id_nilai`, `fk_id_alternatif`, `fk_id_kriteria`, `total_nilai`) VALUES
(48, 1, 1, 100),
(49, 1, 2, 100),
(50, 1, 3, 100),
(51, 1, 4, 100),
(52, 1, 5, 100),
(53, 1, 6, 100),
(54, 1, 7, 100),
(55, 1, 8, 80),
(56, 1, 9, 100),
(57, 2, 1, 100),
(58, 2, 2, 100),
(59, 2, 3, 100),
(60, 2, 4, 100),
(61, 2, 5, 100),
(62, 2, 6, 100),
(63, 2, 7, 100),
(64, 2, 8, 100),
(65, 2, 9, 100);

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(155) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fk_id_level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nama_lengkap`, `email`, `username`, `password`, `fk_id_level`) VALUES
(1, 'Andre Prayogo', 'andreprayoga187@gmail.com', 'chibi7', '52947e0ade57a09e4a1386d08f17b656', 1),
(2, 'Agus Dwi Waluyo', 'agusdwiwaluyo@gmail.com', 'waluyo', '81dc9bdb52d04dc20036dbd8313ed055', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tb_warga`
--

CREATE TABLE `tb_warga` (
  `id_warga` int(11) NOT NULL,
  `nama_kepala_keluarga` varchar(255) NOT NULL,
  `status_bangunan_tinggal` varchar(255) NOT NULL,
  `status_lahan_tinggal` varchar(255) NOT NULL,
  `jenis_lantai_terluas` varchar(255) NOT NULL,
  `jenis_dinding` varchar(255) NOT NULL,
  `kondisi_dinding` varchar(255) NOT NULL,
  `jenis_atap` varchar(255) NOT NULL,
  `kondisi_atap` varchar(255) NOT NULL,
  `sumber_air_minum` varchar(255) NOT NULL,
  `sumber_penerangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_warga`
--

INSERT INTO `tb_warga` (`id_warga`, `nama_kepala_keluarga`, `status_bangunan_tinggal`, `status_lahan_tinggal`, `jenis_lantai_terluas`, `jenis_dinding`, `kondisi_dinding`, `jenis_atap`, `kondisi_atap`, `sumber_air_minum`, `sumber_penerangan`) VALUES
(2, 'Martono', 'Milik Sendiri', 'Milik Sendiri', 'Keramik', 'Tembok', 'Jelek / Kualitas Rendah', 'Genteng Tanah Liat', 'Jelek / Kualitas Rendah', 'Sumur Terlindung', 'Listrik Non - Pln'),
(3, 'Bagiono', 'Milik Sendiri', 'Milik Sendiri', 'Ubin / Tegel / Teraso', 'Tembok', 'Jelek / Kualitas Rendah', 'Genteng Tanah Liat', 'Jelek / Kualitas Rendah', 'Sumur Terlindung', 'Listrik Non - Pln'),
(4, 'Susanto', 'Kontrak / Sewa', 'Milik Orang Lain', 'Ubin / Tegel / Teraso', 'Tembok', 'Bagus / Kualitas Tinggi', 'Genteng Tanah Liat', 'Bagus / Kualitas Tinggi', 'Sumur Bor / Pompa', 'Listrik Pln'),
(5, 'Sukini', 'Kontrak / Sewa', 'Milik Orang Lain', 'Ubin / Tegel / Teraso', 'Tembok', 'Jelek / Kualitas Rendah', 'Genteng Tanah Liat', 'Jelek / Kualitas Rendah', 'Sumur Terlindung', 'Listrik Non - Pln'),
(6, 'Ponidi', 'Milik Sendiri', 'Milik Sendiri', 'Keramik', 'Tembok', 'Jelek / Kualitas Rendah', 'Genteng Tanah Liat', 'Jelek / Kualitas Rendah', 'Sumur Terlindung', 'Listrik Pln'),
(7, 'Marfuatin', 'Milik Sendiri', 'Milik Orang Lain', 'Ubin / Tegel / Teraso', 'Tembok', 'Jelek / Kualitas Rendah', 'Genteng Tanah Liat', 'Jelek / Kualitas Rendah', 'Sumur Terlindung', 'Listrik Pln'),
(8, 'Semi', 'Kontrak / Sewa', 'Milik Orang Lain', 'Keramik', 'Tembok', 'Jelek / Kualitas Rendah', 'Beton / Cor', 'Jelek / Kualitas Rendah', 'Sumur Terlindung', 'Listrik Pln'),
(9, 'Darinem', 'Milik Sendiri', 'Milik Sendiri', 'Keramik', 'Tembok', 'Jelek / Kualitas Rendah', 'Genteng Tanah Liat', 'Jelek / Kualitas Rendah', 'Sumur Terlindung', 'Listrik Pln'),
(10, 'Sarti', 'Kontrak / Sewa', 'Milik Orang Lain', 'Keramik', 'Tembok', 'Jelek / Kualitas Rendah', 'Genteng Tanah Liat', 'Jelek / Kualitas Rendah', 'Sumur Terlindung', 'Listrik Pln'),
(11, 'Wulyono', 'Milik Sendiri', 'Milik Sendiri', 'Keramik', 'Tembok', 'Jelek / Kualitas Rendah', 'Genteng Tanah Liat', 'Jelek / Kualitas Rendah', 'Sumur Terlindung', 'Listrik Pln'),
(12, 'Sumarno', 'Milik Sendiri', 'Milik Sendiri', 'Keramik', 'Tembok', 'Jelek / Kualitas Rendah', 'Genteng Tanah Liat', 'Jelek / Kualitas Rendah', 'Sumur Terlindung', 'Listrik Non - Pln'),
(13, 'Imam', 'Milik Sendiri', 'Milik Sendiri', 'Keramik', 'Tembok', 'Jelek / Kualitas Rendah', 'Genteng Tanah Liat', 'Jelek / Kualitas Rendah', 'Sumur Terlindung', 'Listrik Pln'),
(14, 'Mat Kosim Geger', 'Milik Sendiri', 'Milik Sendiri', 'Keramik', 'Tembok', 'Jelek / Kualitas Rendah', 'Genteng Tanah Liat', 'Jelek / Kualitas Rendah', 'Sumur Terlindung', 'Listrik Pln'),
(15, 'Harto', 'Milik Sendiri', 'Milik Orang Lain', 'Keramik', 'Tembok', 'Bagus / Kualitas Tinggi', 'Genteng Tanah Liat', 'Jelek / Kualitas Rendah', 'Sumur Terlindung', 'Listrik Pln'),
(16, 'Sukimin', 'Milik Sendiri', 'Milik Sendiri', 'Ubin / Tegel / Teraso', 'Tembok', 'Jelek / Kualitas Rendah', 'Genteng Tanah Liat', 'Jelek / Kualitas Rendah', 'Sumur Terlindung', 'Listrik Pln'),
(17, 'Karti', 'Milik Sendiri', 'Milik Sendiri', 'Keramik', 'Tembok', 'Jelek / Kualitas Rendah', 'Genteng Tanah Liat', 'Jelek / Kualitas Rendah', 'Sumur Bor / Pompa', 'Listrik Pln'),
(18, 'Sugiran', 'Milik Sendiri', 'Milik Sendiri', 'Keramik', 'Tembok', 'Jelek / Kualitas Rendah', 'Genteng Tanah Liat', 'Jelek / Kualitas Rendah', 'Sumur Terlindung', 'Listrik Pln'),
(19, 'Nur Alif', 'Milik Sendiri', 'Milik Sendiri', 'Keramik', 'Tembok', 'Jelek / Kualitas Rendah', 'Genteng Tanah Liat', 'Jelek / Kualitas Rendah', 'Sumur Bor / Pompa', 'Listrik Pln'),
(20, 'Suratin', 'Milik Sendiri', 'Milik Sendiri', 'Keramik', 'Tembok', 'Jelek / Kualitas Rendah', 'Genteng Tanah Liat', 'Jelek / Kualitas Rendah', 'Sumur Terlindung', 'Listrik Pln'),
(21, 'Marijan', 'Kontrak / Sewa', 'Milik Orang Lain', 'Ubin / Tegel / Teraso', 'Plesteran Anyaman Bambu / Kawat', 'Jelek / Kualitas Rendah', 'Genteng Tanah Liat', 'Jelek / Kualitas Rendah', 'Sumur Terlindung', 'Listrik Pln'),
(22, 'Subandi', 'Milik Sendiri', 'Milik Sendiri', 'Keramik', 'Tembok', 'Jelek / Kualitas Rendah', 'Genteng Tanah Liat', 'Jelek / Kualitas Rendah', 'Sumur Terlindung', 'Listrik Pln'),
(23, 'Soepini', 'Milik Sendiri', 'Milik Sendiri', 'Keramik', 'Tembok', 'Jelek / Kualitas Rendah', 'Genteng Tanah Liat', 'Jelek / Kualitas Rendah', 'Sumur Terlindung', 'Listrik Pln'),
(24, 'Suminto', 'Milik Sendiri', 'Milik Orang Lain', 'Ubin / Tegel / Teraso', 'Plesteran Anyaman Bambu / Kawat', 'Jelek / Kualitas Rendah', 'Genteng Tanah Liat', 'Jelek / Kualitas Rendah', 'Sumur Bor / Pompa', 'Listrik Pln'),
(25, 'Wakisah', 'Milik Sendiri', 'Milik Sendiri', 'Keramik', 'Tembok', 'Jelek / Kualitas Rendah', 'Genteng Tanah Liat', 'Jelek / Kualitas Rendah', 'Sumur Terlindung', 'Listrik Pln'),
(26, 'Wiji Santoso', 'Milik Sendiri', 'Milik Sendiri', 'Keramik', 'Tembok', 'Jelek / Kualitas Rendah', 'Genteng Tanah Liat', 'Jelek / Kualitas Rendah', 'Sumur Terlindung', 'Listrik Non - Pln'),
(27, 'Ninik', 'Milik Sendiri', 'Milik Sendiri', 'Keramik', 'Tembok', 'Jelek / Kualitas Rendah', 'Genteng Tanah Liat', 'Jelek / Kualitas Rendah', 'Sumur Terlindung', 'Listrik Pln'),
(28, 'Rasim', 'Milik Sendiri', 'Milik Sendiri', 'Keramik', 'Tembok', 'Jelek / Kualitas Rendah', 'Genteng Tanah Liat', 'Jelek / Kualitas Rendah', 'Sumur Terlindung', 'Listrik Pln'),
(29, 'Paniman', 'Milik Sendiri', 'Milik Sendiri', 'Ubin / Tegel / Teraso', 'Tembok', 'Jelek / Kualitas Rendah', 'Genteng Tanah Liat', 'Jelek / Kualitas Rendah', 'Sumur Bor / Pompa', 'Listrik Pln'),
(30, 'Salbiyah', 'Milik Sendiri', 'Milik Sendiri', 'Keramik', 'Tembok', 'Jelek / Kualitas Rendah', 'Genteng Tanah Liat', 'Jelek / Kualitas Rendah', 'Sumur Terlindung', 'Listrik Pln'),
(31, 'Kanah', 'Milik Sendiri', 'Milik Sendiri', 'Keramik', 'Tembok', 'Jelek / Kualitas Rendah', 'Genteng Tanah Liat', 'Jelek / Kualitas Rendah', 'Sumur Terlindung', 'Listrik Pln'),
(32, 'Sodi Kromo', 'Milik Sendiri', 'Milik Sendiri', 'Keramik', 'Tembok', 'Jelek / Kualitas Rendah', 'Genteng Tanah Liat', 'Jelek / Kualitas Rendah', 'Sumur Terlindung', 'Listrik Pln'),
(33, 'Eko Widodo', 'Milik Sendiri', 'Milik Sendiri', 'Keramik', 'Tembok', 'Jelek / Kualitas Rendah', 'Genteng Tanah Liat', 'Jelek / Kualitas Rendah', 'Sumur Terlindung', 'Listrik Pln'),
(34, 'Sugeng', 'Milik Sendiri', 'Milik Sendiri', 'Keramik', 'Tembok', 'Jelek / Kualitas Rendah', 'Genteng Tanah Liat', 'Jelek / Kualitas Rendah', 'Sumur Bor / Pompa', 'Listrik Pln'),
(35, 'Mardi', 'Milik Sendiri', 'Milik Sendiri', 'Keramik', 'Tembok', 'Jelek / Kualitas Rendah', 'Genteng Tanah Liat', 'Jelek / Kualitas Rendah', 'Sumur Terlindung', 'Listrik Pln'),
(36, 'Rianah', 'Milik Sendiri', 'Milik Sendiri', 'Keramik', 'Tembok', 'Jelek / Kualitas Rendah', 'Genteng Tanah Liat', 'Jelek / Kualitas Rendah', 'Sumur Terlindung', 'Listrik Pln'),
(37, 'Yatemo', 'Milik Sendiri', 'Milik Sendiri', 'Keramik', 'Tembok', 'Jelek / Kualitas Rendah', 'Genteng Tanah Liat', 'Jelek / Kualitas Rendah', 'Sumur Terlindung', 'Listrik Pln'),
(38, 'Sasi Rahayu', 'Milik Sendiri', 'Milik Sendiri', 'Ubin / Tegel / Teraso', 'Plesteran Anyaman Bambu / Kawat', 'Jelek / Kualitas Rendah', 'Genteng Tanah Liat', 'Jelek / Kualitas Rendah', 'Sumur Terlindung', 'Listrik Pln'),
(39, 'Sareh', 'Milik Sendiri', 'Milik Orang Lain', 'Keramik', 'Tembok', 'Jelek / Kualitas Rendah', 'Seng / Esbes', 'Jelek / Kualitas Rendah', 'Sumur Terlindung', 'Listrik Pln'),
(40, 'Purwanto', 'Milik Sendiri', 'Milik Orang Lain', 'Keramik', 'Tembok', 'Jelek / Kualitas Rendah', 'Genteng Tanah Liat', 'Jelek / Kualitas Rendah', 'Sumur Bor / Pompa', 'Listrik Pln'),
(41, 'Partin', 'Milik Sendiri', 'Milik Sendiri', 'Keramik', 'Tembok', 'Jelek / Kualitas Rendah', 'Genteng Tanah Liat', 'Jelek / Kualitas Rendah', 'Sumur Terlindung', 'Listrik Pln'),
(42, 'Winarko', 'Milik Sendiri', 'Milik Sendiri', 'Keramik', 'Tembok', 'Jelek / Kualitas Rendah', 'Genteng Tanah Liat', 'Jelek / Kualitas Rendah', 'Sumur Terlindung', 'Listrik Pln'),
(43, 'Yayuk Wijayajati', 'Milik Sendiri', 'Milik Sendiri', 'Keramik', 'Tembok', 'Jelek / Kualitas Rendah', 'Genteng Tanah Liat', 'Jelek / Kualitas Rendah', 'Sumur Terlindung', 'Listrik Pln'),
(44, 'Moerdani', 'Milik Sendiri', 'Milik Sendiri', 'Keramik', 'Tembok', 'Jelek / Kualitas Rendah', 'Genteng Tanah Liat', 'Jelek / Kualitas Rendah', 'Sumur Terlindung', 'Listrik Pln'),
(45, 'Tamsirin', 'Milik Sendiri', 'Milik Sendiri', 'Keramik', 'Tembok', 'Jelek / Kualitas Rendah', 'Genteng Tanah Liat', 'Jelek / Kualitas Rendah', 'Sumur Terlindung', 'Listrik Pln'),
(46, 'Setro Karyo Gumun', 'Milik Sendiri', 'Milik Sendiri', 'Keramik', 'Tembok', 'Jelek / Kualitas Rendah', 'Genteng Tanah Liat', 'Jelek / Kualitas Rendah', 'Sumur Terlindung', 'Listrik Pln'),
(47, 'Gombreg', 'Milik Sendiri', 'Milik Sendiri', 'Keramik', 'Tembok', 'Jelek / Kualitas Rendah', 'Genteng Tanah Liat', 'Jelek / Kualitas Rendah', 'Sumur Tak Terlindung', 'Listrik Pln'),
(48, 'Ponirin', 'Milik Sendiri', 'Milik Sendiri', 'Keramik', 'Tembok', 'Jelek / Kualitas Rendah', 'Genteng Tanah Liat', 'Jelek / Kualitas Rendah', 'Sumur Terlindung', 'Listrik Non - Pln'),
(49, 'Mursidi', 'Milik Sendiri', 'Milik Sendiri', 'Keramik', 'Tembok', 'Jelek / Kualitas Rendah', 'Genteng Tanah Liat', 'Jelek / Kualitas Rendah', 'Sumur Bor / Pompa', 'Listrik Pln'),
(50, 'Suharianto', 'Milik Sendiri', 'Milik Sendiri', 'Keramik', 'Tembok', 'Jelek / Kualitas Rendah', 'Genteng Tanah Liat', 'Jelek / Kualitas Rendah', 'Sumur Terlindung', 'Listrik Pln'),
(51, 'Suparngi', 'Milik Sendiri', 'Milik Sendiri', 'Keramik', 'Tembok', 'Jelek / Kualitas Rendah', 'Genteng Tanah Liat', 'Jelek / Kualitas Rendah', 'Sumur Terlindung', 'Listrik Pln'),
(52, 'Regu', 'Milik Sendiri', 'Milik Sendiri', 'Keramik', 'Tembok', 'Jelek / Kualitas Rendah', 'Genteng Tanah Liat', 'Jelek / Kualitas Rendah', 'Sumur Bor / Pompa', 'Listrik Pln'),
(53, 'Wardi', 'Milik Sendiri', 'Milik Sendiri', 'Keramik', 'Tembok', 'Jelek / Kualitas Rendah', 'Genteng Tanah Liat', 'Jelek / Kualitas Rendah', 'Sumur Bor / Pompa', 'Listrik Pln'),
(54, 'Suyatno', 'Milik Sendiri', 'Milik Orang Lain', 'Keramik', 'Tembok', 'Jelek / Kualitas Rendah', 'Genteng Tanah Liat', 'Jelek / Kualitas Rendah', 'Sumur Bor / Pompa', 'Listrik Pln'),
(55, 'Rasimin', 'Milik Sendiri', 'Milik Sendiri', 'Keramik', 'Tembok', 'Jelek / Kualitas Rendah', 'Genteng Tanah Liat', 'Jelek / Kualitas Rendah', 'Sumur Terlindung', 'Listrik Pln'),
(56, 'Sumiatun', 'Milik Sendiri', 'Milik Orang Lain', 'Keramik', 'Tembok', 'Jelek / Kualitas Rendah', 'Genteng Tanah Liat', 'Jelek / Kualitas Rendah', 'Sumur Bor / Pompa', 'Listrik Pln'),
(57, 'Karsiyem', 'Milik Sendiri', 'Milik Sendiri', 'Keramik', 'Tembok', 'Jelek / Kualitas Rendah', 'Genteng Tanah Liat', 'Jelek / Kualitas Rendah', 'Sumur Tak Terlindung', 'Listrik Pln'),
(58, 'Murdi Yatno', 'Milik Sendiri', 'Milik Sendiri', 'Keramik', 'Tembok', 'Jelek / Kualitas Rendah', 'Genteng Tanah Liat', 'Jelek / Kualitas Rendah', 'Sumur Terlindung', 'Listrik Pln'),
(59, 'Yahmat', 'Milik Sendiri', 'Milik Sendiri', 'Keramik', 'Tembok', 'Jelek / Kualitas Rendah', 'Genteng Tanah Liat', 'Jelek / Kualitas Rendah', 'Sumur Bor / Pompa', 'Listrik Pln'),
(60, 'Gimin', 'Milik Sendiri', 'Milik Sendiri', 'Ubin / Tegel / Teraso', 'Tembok', 'Jelek / Kualitas Rendah', 'Genteng Tanah Liat', 'Jelek / Kualitas Rendah', 'Sumur Terlindung', 'Listrik Pln'),
(61, 'Muntalfiin', 'Milik Sendiri', 'Milik Sendiri', 'Keramik', 'Tembok', 'Jelek / Kualitas Rendah', 'Genteng Tanah Liat', 'Jelek / Kualitas Rendah', 'Sumur Terlindung', 'Listrik Pln'),
(62, 'Syahri', 'Milik Sendiri', 'Milik Sendiri', 'Keramik', 'Tembok', 'Jelek / Kualitas Rendah', 'Genteng Tanah Liat', 'Jelek / Kualitas Rendah', 'Sumur Terlindung', 'Listrik Pln'),
(63, 'Mubadi', 'Milik Sendiri', 'Milik Sendiri', 'Keramik', 'Tembok', 'Jelek / Kualitas Rendah', 'Genteng Tanah Liat', 'Jelek / Kualitas Rendah', 'Sumur Tak Terlindung', 'Listrik Pln'),
(64, 'Purwati', 'Milik Sendiri', 'Milik Sendiri', 'Keramik', 'Tembok', 'Jelek / Kualitas Rendah', 'Genteng Tanah Liat', 'Jelek / Kualitas Rendah', 'Sumur Terlindung', 'Listrik Pln'),
(65, 'Paijem', 'Milik Sendiri', 'Milik Sendiri', 'Keramik', 'Tembok', 'Jelek / Kualitas Rendah', 'Genteng Tanah Liat', 'Jelek / Kualitas Rendah', 'Sumur Terlindung', 'Listrik Pln'),
(66, 'Sri Maningsih', 'Milik Sendiri', 'Milik Sendiri', 'Keramik', 'Tembok', 'Jelek / Kualitas Rendah', 'Genteng Tanah Liat', 'Jelek / Kualitas Rendah', 'Sumur Terlindung', 'Listrik Pln'),
(67, 'Sukarlan', 'Milik Sendiri', 'Milik Sendiri', 'Keramik', 'Tembok', 'Jelek / Kualitas Rendah', 'Genteng Tanah Liat', 'Jelek / Kualitas Rendah', 'Leding Meteran', 'Listrik Pln'),
(68, 'Wagimin', 'Milik Sendiri', 'Milik Sendiri', 'Keramik', 'Tembok', 'Jelek / Kualitas Rendah', 'Genteng Tanah Liat', 'Jelek / Kualitas Rendah', 'Sumur Terlindung', 'Listrik Non - Pln'),
(69, 'Sumarjoko', 'Milik Sendiri', 'Milik Sendiri', 'Keramik', 'Tembok', 'Jelek / Kualitas Rendah', 'Genteng Tanah Liat', 'Jelek / Kualitas Rendah', 'Sumur Terlindung', 'Listrik Pln'),
(70, 'Sih Wilujeng', 'Milik Sendiri', 'Milik Sendiri', 'Keramik', 'Tembok', 'Jelek / Kualitas Rendah', 'Genteng Tanah Liat', 'Jelek / Kualitas Rendah', 'Sumur Terlindung', 'Listrik Non - Pln'),
(71, 'Pirnadi', 'Milik Sendiri', 'Milik Sendiri', 'Keramik', 'Tembok', 'Jelek / Kualitas Rendah', 'Genteng Tanah Liat', 'Jelek / Kualitas Rendah', 'Sumur Terlindung', 'Listrik Pln'),
(72, 'Nurwiyono', 'Milik Sendiri', 'Milik Sendiri', 'Keramik', 'Tembok', 'Jelek / Kualitas Rendah', 'Genteng Tanah Liat', 'Jelek / Kualitas Rendah', 'Sumur Bor / Pompa', 'Listrik Pln'),
(73, 'Surati', 'Milik Sendiri', 'Milik Sendiri', 'Keramik', 'Tembok', 'Jelek / Kualitas Rendah', 'Genteng Tanah Liat', 'Jelek / Kualitas Rendah', 'Sumur Terlindung', 'Listrik Pln'),
(74, 'Saiin', 'Milik Sendiri', 'Milik Sendiri', 'Keramik', 'Tembok', 'Jelek / Kualitas Rendah', 'Genteng Tanah Liat', 'Jelek / Kualitas Rendah', 'Sumur Bor / Pompa', 'Listrik Pln'),
(75, 'Wagini', 'Milik Sendiri', 'Milik Sendiri', 'Keramik', 'Tembok', 'Jelek / Kualitas Rendah', 'Genteng Tanah Liat', 'Jelek / Kualitas Rendah', 'Sumur Terlindung', 'Listrik Pln'),
(76, 'Siswari', 'Kontrak / Sewa', 'Milik Orang Lain', 'Keramik', 'Tembok', 'Jelek / Kualitas Rendah', 'Genteng Tanah Liat', 'Jelek / Kualitas Rendah', 'Sumur Terlindung', 'Listrik Pln'),
(77, 'Supiyah', 'Milik Sendiri', 'Milik Sendiri', 'Keramik', 'Tembok', 'Jelek / Kualitas Rendah', 'Genteng Tanah Liat', 'Jelek / Kualitas Rendah', 'Sumur Bor / Pompa', 'Listrik Pln'),
(78, 'Sumarti', 'Milik Sendiri', 'Milik Sendiri', 'Keramik', 'Tembok', 'Jelek / Kualitas Rendah', 'Genteng Tanah Liat', 'Jelek / Kualitas Rendah', 'Sumur Tak Terlindung', 'Listrik Pln'),
(79, 'Girah', 'Milik Sendiri', 'Milik Sendiri', 'Keramik', 'Tembok', 'Jelek / Kualitas Rendah', 'Genteng Tanah Liat', 'Jelek / Kualitas Rendah', 'Sumur Bor / Pompa', 'Listrik Pln'),
(80, 'Sugeng Santoso', 'Milik Sendiri', 'Milik Sendiri', 'Keramik', 'Tembok', 'Jelek / Kualitas Rendah', 'Genteng Tanah Liat', 'Jelek / Kualitas Rendah', 'Sumur Terlindung', 'Listrik Pln'),
(81, 'Suyitno', 'Milik Sendiri', 'Milik Sendiri', 'Keramik', 'Tembok', 'Jelek / Kualitas Rendah', 'Genteng Tanah Liat', 'Jelek / Kualitas Rendah', 'Sumur Terlindung', 'Listrik Pln'),
(82, 'Ginten', 'Milik Sendiri', 'Milik Sendiri', 'Ubin / Tegel / Teraso', 'Tembok', 'Jelek / Kualitas Rendah', 'Genteng Tanah Liat', 'Jelek / Kualitas Rendah', 'Sumur Terlindung', 'Listrik Pln'),
(83, 'Kadi', 'Milik Sendiri', 'Milik Sendiri', 'Keramik', 'Tembok', 'Jelek / Kualitas Rendah', 'Genteng Tanah Liat', 'Jelek / Kualitas Rendah', 'Sumur Terlindung', 'Listrik Pln'),
(84, 'Madkemi', 'Milik Sendiri', 'Milik Sendiri', 'Keramik', 'Tembok', 'Jelek / Kualitas Rendah', 'Genteng Tanah Liat', 'Jelek / Kualitas Rendah', 'Sumur Tak Terlindung', 'Listrik Pln'),
(85, 'Gimah', 'Milik Sendiri', 'Milik Sendiri', 'Keramik', 'Tembok', 'Jelek / Kualitas Rendah', 'Genteng Tanah Liat', 'Jelek / Kualitas Rendah', 'Sumur Terlindung', 'Listrik Pln'),
(86, 'Sumardiono', 'Milik Sendiri', 'Milik Sendiri', 'Keramik', 'Tembok', 'Jelek / Kualitas Rendah', 'Genteng Tanah Liat', 'Jelek / Kualitas Rendah', 'Sumur Terlindung', 'Listrik Pln'),
(87, 'Junianto', 'Milik Sendiri', 'Milik Sendiri', 'Keramik', 'Tembok', 'Jelek / Kualitas Rendah', 'Genteng Tanah Liat', 'Jelek / Kualitas Rendah', 'Sumur Terlindung', 'Listrik Pln'),
(88, 'Soniran', 'Milik Sendiri', 'Milik Sendiri', 'Keramik', 'Tembok', 'Jelek / Kualitas Rendah', 'Genteng Tanah Liat', 'Jelek / Kualitas Rendah', 'Sumur Bor / Pompa', 'Listrik Pln'),
(89, 'Sawal', 'Milik Sendiri', 'Milik Sendiri', 'Keramik', 'Tembok', 'Jelek / Kualitas Rendah', 'Genteng Tanah Liat', 'Jelek / Kualitas Rendah', 'Sumur Tak Terlindung', 'Listrik Pln'),
(90, 'Ropingi', 'Milik Sendiri', 'Milik Orang Lain', 'Keramik', 'Tembok', 'Jelek / Kualitas Rendah', 'Genteng Tanah Liat', 'Jelek / Kualitas Rendah', 'Sumur Terlindung', 'Listrik Non - Pln'),
(91, 'Hariyanto', 'Milik Sendiri', 'Milik Orang Lain', 'Keramik', 'Tembok', 'Jelek / Kualitas Rendah', 'Genteng Tanah Liat', 'Jelek / Kualitas Rendah', 'Sumur Bor / Pompa', 'Listrik Pln'),
(92, 'Mardiono', 'Milik Sendiri', 'Milik Sendiri', 'Keramik', 'Tembok', 'Jelek / Kualitas Rendah', 'Genteng Tanah Liat', 'Jelek / Kualitas Rendah', 'Sumur Terlindung', 'Listrik Non - Pln'),
(93, 'Sarimah', 'Milik Sendiri', 'Milik Sendiri', 'Keramik', 'Tembok', 'Jelek / Kualitas Rendah', 'Genteng Tanah Liat', 'Jelek / Kualitas Rendah', 'Sumur Bor / Pompa', 'Listrik Pln'),
(94, 'Kasdi', 'Milik Sendiri', 'Milik Sendiri', 'Keramik', 'Tembok', 'Jelek / Kualitas Rendah', 'Genteng Tanah Liat', 'Jelek / Kualitas Rendah', 'Sumur Terlindung', 'Listrik Pln'),
(95, 'Tambah', 'Milik Sendiri', 'Milik Sendiri', 'Keramik', 'Tembok', 'Jelek / Kualitas Rendah', 'Genteng Tanah Liat', 'Jelek / Kualitas Rendah', 'Sumur Terlindung', 'Listrik Pln'),
(96, 'Lasimin', 'Milik Sendiri', 'Milik Sendiri', 'Keramik', 'Tembok', 'Jelek / Kualitas Rendah', 'Genteng Tanah Liat', 'Jelek / Kualitas Rendah', 'Sumur Terlindung', 'Listrik Pln'),
(97, 'Suryani', 'Milik Sendiri', 'Milik Sendiri', 'Keramik', 'Tembok', 'Jelek / Kualitas Rendah', 'Genteng Tanah Liat', 'Jelek / Kualitas Rendah', 'Sumur Terlindung', 'Listrik Pln'),
(98, 'Wakiyah', 'Milik Sendiri', 'Milik Sendiri', 'Keramik', 'Tembok', 'Jelek / Kualitas Rendah', 'Genteng Tanah Liat', 'Jelek / Kualitas Rendah', 'Sumur Terlindung', 'Listrik Pln'),
(99, 'Sardo', 'Milik Sendiri', 'Milik Sendiri', 'Keramik', 'Tembok', 'Jelek / Kualitas Rendah', 'Genteng Tanah Liat', 'Jelek / Kualitas Rendah', 'Sumur Terlindung', 'Listrik Pln'),
(100, 'Rasinah', 'Milik Sendiri', 'Milik Sendiri', 'Keramik', 'Tembok', 'Jelek / Kualitas Rendah', 'Genteng Tanah Liat', 'Jelek / Kualitas Rendah', 'Sumur Bor / Pompa', 'Listrik Pln'),
(101, 'Sutari', 'Milik Sendiri', 'Milik Sendiri', 'Keramik', 'Tembok', 'Jelek / Kualitas Rendah', 'Genteng Tanah Liat', 'Jelek / Kualitas Rendah', 'Sumur Bor / Pompa', 'Listrik Pln'),
(102, 'Suwarni', 'Milik Sendiri', 'Milik Sendiri', 'Keramik', 'Tembok', 'Jelek / Kualitas Rendah', 'Genteng Tanah Liat', 'Jelek / Kualitas Rendah', 'Sumur Bor / Pompa', 'Listrik Pln'),
(103, 'Gini', 'Milik Sendiri', 'Milik Sendiri', 'Keramik', 'Tembok', 'Jelek / Kualitas Rendah', 'Genteng Tanah Liat', 'Jelek / Kualitas Rendah', 'Sumur Terlindung', 'Listrik Pln'),
(104, 'Ponimin', 'Milik Sendiri', 'Milik Sendiri', 'Ubin / Tegel / Teraso', 'Plesteran Anyaman Bambu / Kawat', 'Jelek / Kualitas Rendah', 'Genteng Tanah Liat', 'Jelek / Kualitas Rendah', 'Sumur Terlindung', 'Listrik Pln'),
(105, 'Jumini', 'Milik Sendiri', 'Milik Sendiri', 'Keramik', 'Tembok', 'Jelek / Kualitas Rendah', 'Genteng Tanah Liat', 'Jelek / Kualitas Rendah', 'Sumur Bor / Pompa', 'Listrik Pln'),
(106, 'Sinto', 'Milik Sendiri', 'Milik Sendiri', 'Keramik', 'Tembok', 'Jelek / Kualitas Rendah', 'Genteng Tanah Liat', 'Jelek / Kualitas Rendah', 'Sumur Terlindung', 'Listrik Pln'),
(107, 'Siti Romlah', 'Milik Sendiri', 'Milik Sendiri', 'Keramik', 'Tembok', 'Jelek / Kualitas Rendah', 'Genteng Tanah Liat', 'Jelek / Kualitas Rendah', 'Sumur Terlindung', 'Listrik Pln'),
(108, 'Parman', 'Milik Sendiri', 'Milik Sendiri', 'Keramik', 'Tembok', 'Jelek / Kualitas Rendah', 'Genteng Tanah Liat', 'Jelek / Kualitas Rendah', 'Sumur Bor / Pompa', 'Listrik Pln'),
(109, 'Sunarno', 'Milik Sendiri', 'Milik Sendiri', 'Keramik', 'Tembok', 'Jelek / Kualitas Rendah', 'Genteng Tanah Liat', 'Bagus / Kualitas Tinggi', 'Sumur Bor / Pompa', 'Listrik Pln'),
(110, 'Suparto', 'Milik Sendiri', 'Milik Sendiri', 'Keramik', 'Tembok', 'Jelek / Kualitas Rendah', 'Genteng Tanah Liat', 'Jelek / Kualitas Rendah', 'Sumur Terlindung', 'Listrik Pln'),
(111, 'Welas', 'Milik Sendiri', 'Milik Sendiri', 'Keramik', 'Tembok', 'Jelek / Kualitas Rendah', 'Genteng Tanah Liat', 'Jelek / Kualitas Rendah', 'Sumur Terlindung', 'Listrik Pln'),
(112, 'Suminah', 'Milik Sendiri', 'Milik Sendiri', 'Keramik', 'Tembok', 'Jelek / Kualitas Rendah', 'Genteng Tanah Liat', 'Jelek / Kualitas Rendah', 'Sumur Terlindung', 'Listrik Non - Pln'),
(113, 'Srigeno', 'Milik Sendiri', 'Milik Sendiri', 'Keramik', 'Tembok', 'Jelek / Kualitas Rendah', 'Genteng Tanah Liat', 'Jelek / Kualitas Rendah', 'Sumur Terlindung', 'Listrik Pln'),
(114, 'Nuriman', 'Milik Sendiri', 'Milik Sendiri', 'Keramik', 'Tembok', 'Jelek / Kualitas Rendah', 'Genteng Tanah Liat', 'Jelek / Kualitas Rendah', 'Sumur Terlindung', 'Listrik Non - Pln'),
(115, 'Abdul Rosid', 'Milik Sendiri', 'Milik Sendiri', 'Keramik', 'Tembok', 'Jelek / Kualitas Rendah', 'Genteng Tanah Liat', 'Jelek / Kualitas Rendah', 'Sumur Terlindung', 'Listrik Pln'),
(116, 'Marimin', 'Milik Sendiri', 'Milik Sendiri', 'Keramik', 'Tembok', 'Jelek / Kualitas Rendah', 'Genteng Tanah Liat', 'Jelek / Kualitas Rendah', 'Sumur Bor / Pompa', 'Listrik Pln'),
(117, 'Katumi', 'Milik Sendiri', 'Milik Sendiri', 'Keramik', 'Tembok', 'Jelek / Kualitas Rendah', 'Genteng Tanah Liat', 'Jelek / Kualitas Rendah', 'Sumur Terlindung', 'Listrik Pln'),
(118, 'Sarno', 'Milik Sendiri', 'Milik Sendiri', 'Keramik', 'Tembok', 'Jelek / Kualitas Rendah', 'Seng / Esbes', 'Jelek / Kualitas Rendah', 'Sumur Terlindung', 'Listrik Pln'),
(119, 'Suraji', 'Milik Sendiri', 'Milik Orang Lain', 'Keramik', 'Tembok', 'Jelek / Kualitas Rendah', 'Genteng Tanah Liat', 'Jelek / Kualitas Rendah', 'Sumur Terlindung', 'Listrik Pln'),
(120, 'Kaderi', 'Milik Sendiri', 'Milik Orang Lain', 'Keramik', 'Tembok', 'Jelek / Kualitas Rendah', 'Genteng Tanah Liat', 'Jelek / Kualitas Rendah', 'Sumur Bor / Pompa', 'Listrik Pln'),
(121, 'Sumali', 'Milik Sendiri', 'Milik Sendiri', 'Keramik', 'Tembok', 'Jelek / Kualitas Rendah', 'Genteng Tanah Liat', 'Jelek / Kualitas Rendah', 'Sumur Bor / Pompa', 'Listrik Pln'),
(122, 'Paeran', 'Milik Sendiri', 'Milik Orang Lain', 'Keramik', 'Tembok', 'Jelek / Kualitas Rendah', 'Genteng Tanah Liat', 'Jelek / Kualitas Rendah', 'Sumur Terlindung', 'Listrik Non - Pln'),
(123, 'Usman', 'Milik Sendiri', 'Milik Sendiri', 'Keramik', 'Tembok', 'Jelek / Kualitas Rendah', 'Genteng Tanah Liat', 'Jelek / Kualitas Rendah', 'Sumur Terlindung', 'Listrik Pln'),
(124, 'Sirep', 'Milik Sendiri', 'Milik Sendiri', 'Keramik', 'Tembok', 'Jelek / Kualitas Rendah', 'Genteng Tanah Liat', 'Jelek / Kualitas Rendah', 'Sumur Terlindung', 'Listrik Pln'),
(125, 'Sumarjo', 'Milik Sendiri', 'Milik Sendiri', 'Keramik', 'Tembok', 'Jelek / Kualitas Rendah', 'Genteng Tanah Liat', 'Jelek / Kualitas Rendah', 'Sumur Terlindung', 'Listrik Pln'),
(126, 'Kober', 'Milik Sendiri', 'Milik Sendiri', 'Ubin / Tegel / Teraso', 'Tembok', 'Jelek / Kualitas Rendah', 'Genteng Tanah Liat', 'Jelek / Kualitas Rendah', 'Sumur Terlindung', 'Listrik Pln'),
(127, 'Suparno', 'Milik Sendiri', 'Milik Orang Lain', 'Keramik', 'Tembok', 'Jelek / Kualitas Rendah', 'Genteng Tanah Liat', 'Jelek / Kualitas Rendah', 'Sumur Terlindung', 'Listrik Pln'),
(128, 'Sundayani', 'Milik Sendiri', 'Milik Sendiri', 'Keramik', 'Tembok', 'Jelek / Kualitas Rendah', 'Genteng Tanah Liat', 'Jelek / Kualitas Rendah', 'Sumur Tak Terlindung', 'Listrik Pln'),
(129, 'Karminto', 'Milik Sendiri', 'Milik Orang Lain', 'Keramik', 'Tembok', 'Jelek / Kualitas Rendah', 'Genteng Tanah Liat', 'Jelek / Kualitas Rendah', 'Sumur Terlindung', 'Listrik Pln'),
(130, 'Katmiran', 'Milik Sendiri', 'Milik Sendiri', 'Keramik', 'Tembok', 'Jelek / Kualitas Rendah', 'Genteng Tanah Liat', 'Jelek / Kualitas Rendah', 'Sumur Bor / Pompa', 'Listrik Pln'),
(131, 'Sutaji', 'Milik Sendiri', 'Milik Sendiri', 'Keramik', 'Tembok', 'Jelek / Kualitas Rendah', 'Genteng Tanah Liat', 'Jelek / Kualitas Rendah', 'Sumur Terlindung', 'Listrik Pln'),
(132, 'Sukiyat', 'Milik Sendiri', 'Milik Sendiri', 'Keramik', 'Tembok', 'Jelek / Kualitas Rendah', 'Genteng Tanah Liat', 'Jelek / Kualitas Rendah', 'Sumur Terlindung', 'Listrik Pln'),
(133, 'Pairin', 'Milik Sendiri', 'Milik Sendiri', 'Keramik', 'Tembok', 'Jelek / Kualitas Rendah', 'Genteng Tanah Liat', 'Jelek / Kualitas Rendah', 'Sumur Bor / Pompa', 'Listrik Pln'),
(134, 'Seger', 'Milik Sendiri', 'Milik Orang Lain', 'Keramik', 'Tembok', 'Jelek / Kualitas Rendah', 'Genteng Tanah Liat', 'Jelek / Kualitas Rendah', 'Sumur Terlindung', 'Listrik Pln'),
(135, 'Purnan', 'Milik Sendiri', 'Milik Orang Lain', 'Keramik', 'Tembok', 'Jelek / Kualitas Rendah', 'Genteng Tanah Liat', 'Jelek / Kualitas Rendah', 'Sumur Bor / Pompa', 'Listrik Pln'),
(136, 'Saino', 'Milik Sendiri', 'Milik Sendiri', 'Keramik', 'Tembok', 'Jelek / Kualitas Rendah', 'Genteng Tanah Liat', 'Jelek / Kualitas Rendah', 'Sumur Bor / Pompa', 'Listrik Non - Pln'),
(137, 'Parin Suparto', 'Milik Sendiri', 'Milik Sendiri', 'Keramik', 'Tembok', 'Jelek / Kualitas Rendah', 'Genteng Tanah Liat', 'Jelek / Kualitas Rendah', 'Sumur Terlindung', 'Listrik Pln'),
(138, 'Rigo', 'Milik Sendiri', 'Milik Sendiri', 'Keramik', 'Tembok', 'Jelek / Kualitas Rendah', 'Genteng Tanah Liat', 'Jelek / Kualitas Rendah', 'Sumur Terlindung', 'Listrik Pln'),
(139, 'Harmiati', 'Kontrak / Sewa', 'Milik Orang Lain', 'Ubin / Tegel / Teraso', 'Plesteran Anyaman Bambu / Kawat', 'Jelek / Kualitas Rendah', 'Genteng Tanah Liat', 'Jelek / Kualitas Rendah', 'Sumur Terlindung', 'Listrik Pln'),
(140, 'Suyati', 'Milik Sendiri', 'Milik Sendiri', 'Keramik', 'Tembok', 'Jelek / Kualitas Rendah', 'Genteng Tanah Liat', 'Jelek / Kualitas Rendah', 'Sumur Terlindung', 'Listrik Pln'),
(141, 'Tasmiran', 'Milik Sendiri', 'Milik Sendiri', 'Keramik', 'Tembok', 'Jelek / Kualitas Rendah', 'Genteng Tanah Liat', 'Jelek / Kualitas Rendah', 'Sumur Bor / Pompa', 'Listrik Pln'),
(142, 'Sarmi', 'Milik Sendiri', 'Milik Sendiri', 'Keramik', 'Tembok', 'Jelek / Kualitas Rendah', 'Genteng Tanah Liat', 'Jelek / Kualitas Rendah', 'Sumur Terlindung', 'Listrik Pln'),
(143, 'Munasri', 'Milik Sendiri', 'Milik Sendiri', 'Keramik', 'Tembok', 'Jelek / Kualitas Rendah', 'Genteng Tanah Liat', 'Jelek / Kualitas Rendah', 'Sumur Terlindung', 'Listrik Pln'),
(144, 'Kaeran', 'Milik Sendiri', 'Milik Sendiri', 'Keramik', 'Tembok', 'Jelek / Kualitas Rendah', 'Genteng Tanah Liat', 'Jelek / Kualitas Rendah', 'Sumur Bor / Pompa', 'Listrik Pln'),
(145, 'Suyanto', 'Milik Sendiri', 'Milik Sendiri', 'Keramik', 'Tembok', 'Jelek / Kualitas Rendah', 'Genteng Tanah Liat', 'Jelek / Kualitas Rendah', 'Sumur Bor / Pompa', 'Listrik Pln'),
(146, 'Mulyono', 'Milik Sendiri', 'Milik Sendiri', 'Keramik', 'Tembok', 'Jelek / Kualitas Rendah', 'Genteng Tanah Liat', 'Jelek / Kualitas Rendah', 'Sumur Terlindung', 'Listrik Pln'),
(147, 'Murtiani', 'Milik Sendiri', 'Milik Sendiri', 'Keramik', 'Tembok', 'Jelek / Kualitas Rendah', 'Genteng Tanah Liat', 'Jelek / Kualitas Rendah', 'Sumur Terlindung', 'Listrik Pln'),
(148, 'Bonijan', 'Milik Sendiri', 'Milik Sendiri', 'Ubin / Tegel / Teraso', 'Tembok', 'Jelek / Kualitas Rendah', 'Genteng Tanah Liat', 'Jelek / Kualitas Rendah', 'Sumur Terlindung', 'Listrik Pln'),
(149, 'Lastri', 'Milik Sendiri', 'Milik Sendiri', 'Keramik', 'Tembok', 'Jelek / Kualitas Rendah', 'Genteng Tanah Liat', 'Jelek / Kualitas Rendah', 'Sumur Bor / Pompa', 'Listrik Pln'),
(150, 'Rasidi', 'Milik Sendiri', 'Milik Sendiri', 'Keramik', 'Tembok', 'Jelek / Kualitas Rendah', 'Genteng Tanah Liat', 'Jelek / Kualitas Rendah', 'Sumur Terlindung', 'Listrik Pln'),
(151, 'Sali', 'Milik Sendiri', 'Milik Sendiri', 'Keramik', 'Tembok', 'Jelek / Kualitas Rendah', 'Genteng Tanah Liat', 'Jelek / Kualitas Rendah', 'Sumur Bor / Pompa', 'Listrik Pln'),
(152, 'Jani', 'Milik Sendiri', 'Milik Sendiri', 'Keramik', 'Tembok', 'Jelek / Kualitas Rendah', 'Genteng Tanah Liat', 'Jelek / Kualitas Rendah', 'Sumur Bor / Pompa', 'Listrik Pln'),
(153, 'Wakijo', 'Milik Sendiri', 'Milik Sendiri', 'Keramik', 'Tembok', 'Jelek / Kualitas Rendah', 'Genteng Tanah Liat', 'Jelek / Kualitas Rendah', 'Sumur Terlindung', 'Listrik Pln'),
(154, 'Sumilan', 'Milik Sendiri', 'Milik Sendiri', 'Keramik', 'Tembok', 'Jelek / Kualitas Rendah', 'Genteng Tanah Liat', 'Jelek / Kualitas Rendah', 'Sumur Bor / Pompa', 'Listrik Pln'),
(155, 'Tuminem', 'Milik Sendiri', 'Milik Sendiri', 'Keramik', 'Tembok', 'Jelek / Kualitas Rendah', 'Genteng Tanah Liat', 'Jelek / Kualitas Rendah', 'Sumur Bor / Pompa', 'Listrik Pln'),
(156, 'Warimin', 'Milik Sendiri', 'Milik Sendiri', 'Keramik', 'Tembok', 'Jelek / Kualitas Rendah', 'Genteng Tanah Liat', 'Jelek / Kualitas Rendah', 'Sumur Terlindung', 'Listrik Non - Pln'),
(157, 'Rianto', 'Milik Sendiri', 'Milik Sendiri', 'Keramik', 'Tembok', 'Jelek / Kualitas Rendah', 'Genteng Tanah Liat', 'Jelek / Kualitas Rendah', 'Sumur Terlindung', 'Listrik Pln'),
(158, 'Suhadi', 'Milik Sendiri', 'Milik Sendiri', 'Keramik', 'Tembok', 'Jelek / Kualitas Rendah', 'Genteng Tanah Liat', 'Jelek / Kualitas Rendah', 'Sumur Terlindung', 'Listrik Non - Pln'),
(159, 'Kamat', 'Milik Sendiri', 'Milik Sendiri', 'Keramik', 'Tembok', 'Jelek / Kualitas Rendah', 'Genteng Tanah Liat', 'Jelek / Kualitas Rendah', 'Sumur Terlindung', 'Listrik Pln'),
(160, 'Sukari', 'Milik Sendiri', 'Milik Sendiri', 'Keramik', 'Tembok', 'Jelek / Kualitas Rendah', 'Genteng Tanah Liat', 'Jelek / Kualitas Rendah', 'Sumur Terlindung', 'Listrik Pln'),
(161, 'Kemis', 'Milik Sendiri', 'Milik Sendiri', 'Ubin / Tegel / Teraso', 'Tembok', 'Jelek / Kualitas Rendah', 'Genteng Tanah Liat', 'Jelek / Kualitas Rendah', 'Sumur Terlindung', 'Listrik Pln'),
(162, 'Katini', 'Milik Sendiri', 'Milik Sendiri', 'Keramik', 'Tembok', 'Jelek / Kualitas Rendah', 'Genteng Tanah Liat', 'Jelek / Kualitas Rendah', 'Sumur Terlindung', 'Listrik Pln'),
(163, 'Jumadi', 'Milik Sendiri', 'Milik Sendiri', 'Keramik', 'Tembok', 'Jelek / Kualitas Rendah', 'Genteng Tanah Liat', 'Jelek / Kualitas Rendah', 'Sumur Terlindung', 'Listrik Pln'),
(164, 'Setiawan', 'Milik Sendiri', 'Milik Orang Lain', 'Keramik', 'Tembok', 'Jelek / Kualitas Rendah', 'Genteng Tanah Liat', 'Jelek / Kualitas Rendah', 'Sumur Terlindung', 'Listrik Pln'),
(165, 'Warsito', 'Milik Sendiri', 'Milik Sendiri', 'Keramik', 'Tembok', 'Jelek / Kualitas Rendah', 'Genteng Tanah Liat', 'Jelek / Kualitas Rendah', 'Sumur Terlindung', 'Listrik Pln'),
(166, 'Marsih', 'Milik Sendiri', 'Milik Sendiri', 'Keramik', 'Tembok', 'Jelek / Kualitas Rendah', 'Genteng Tanah Liat', 'Jelek / Kualitas Rendah', 'Sumur Terlindung', 'Listrik Non - Pln'),
(167, 'Musikin', 'Milik Sendiri', 'Milik Sendiri', 'Keramik', 'Tembok', 'Jelek / Kualitas Rendah', 'Genteng Tanah Liat', 'Jelek / Kualitas Rendah', 'Sumur Terlindung', 'Listrik Pln'),
(168, 'Tukiman', 'Milik Sendiri', 'Milik Orang Lain', 'Keramik', 'Tembok', 'Jelek / Kualitas Rendah', 'Genteng Tanah Liat', 'Jelek / Kualitas Rendah', 'Sumur Terlindung', 'Listrik Pln'),
(169, 'Mursadi', 'Milik Sendiri', 'Milik Sendiri', 'Keramik', 'Tembok', 'Jelek / Kualitas Rendah', 'Genteng Tanah Liat', 'Jelek / Kualitas Rendah', 'Sumur Terlindung', 'Listrik Pln'),
(170, 'Tumidi', 'Milik Sendiri', 'Milik Sendiri', 'Ubin / Tegel / Teraso', 'Tembok', 'Jelek / Kualitas Rendah', 'Genteng Tanah Liat', 'Jelek / Kualitas Rendah', 'Sumur Bor / Pompa', 'Listrik Pln'),
(171, 'Suti', 'Milik Sendiri', 'Milik Sendiri', 'Keramik', 'Tembok', 'Jelek / Kualitas Rendah', 'Genteng Tanah Liat', 'Jelek / Kualitas Rendah', 'Sumur Bor / Pompa', 'Listrik Pln'),
(172, 'Siti Mariyam', 'Milik Sendiri', 'Milik Sendiri', 'Keramik', 'Tembok', 'Jelek / Kualitas Rendah', 'Genteng Tanah Liat', 'Jelek / Kualitas Rendah', 'Sumur Tak Terlindung', 'Listrik Pln'),
(173, 'Djumani', 'Milik Sendiri', 'Milik Sendiri', 'Keramik', 'Tembok', 'Jelek / Kualitas Rendah', 'Genteng Tanah Liat', 'Jelek / Kualitas Rendah', 'Sumur Terlindung', 'Listrik Pln'),
(174, 'Legiyem', 'Milik Sendiri', 'Milik Sendiri', 'Keramik', 'Tembok', 'Jelek / Kualitas Rendah', 'Genteng Tanah Liat', 'Jelek / Kualitas Rendah', 'Sumur Terlindung', 'Listrik Pln'),
(175, 'Winih', 'Milik Sendiri', 'Milik Orang Lain', 'Keramik', 'Tembok', 'Jelek / Kualitas Rendah', 'Genteng Tanah Liat', 'Jelek / Kualitas Rendah', 'Sumur Terlindung', 'Listrik Pln'),
(176, 'Warsiadi', 'Milik Sendiri', 'Milik Sendiri', 'Keramik', 'Tembok', 'Jelek / Kualitas Rendah', 'Genteng Tanah Liat', 'Jelek / Kualitas Rendah', 'Sumur Terlindung', 'Listrik Pln'),
(177, 'Sukardi', 'Milik Sendiri', 'Milik Sendiri', 'Keramik', 'Tembok', 'Jelek / Kualitas Rendah', 'Genteng Tanah Liat', 'Jelek / Kualitas Rendah', 'Sumur Terlindung', 'Listrik Pln'),
(178, 'Tumini Situm', 'Milik Sendiri', 'Milik Sendiri', 'Keramik', 'Tembok', 'Jelek / Kualitas Rendah', 'Genteng Tanah Liat', 'Jelek / Kualitas Rendah', 'Sumur Terlindung', 'Listrik Pln'),
(179, 'Mahfudz', 'Milik Sendiri', 'Milik Orang Lain', 'Keramik', 'Tembok', 'Jelek / Kualitas Rendah', 'Genteng Tanah Liat', 'Jelek / Kualitas Rendah', 'Sumur Bor / Pompa', 'Listrik Pln'),
(180, 'Tukiran', 'Milik Sendiri', 'Milik Sendiri', 'Keramik', 'Tembok', 'Jelek / Kualitas Rendah', 'Genteng Tanah Liat', 'Jelek / Kualitas Rendah', 'Sumur Bor / Pompa', 'Listrik Pln'),
(181, 'Jati Siswa Setiawan', 'Milik Sendiri', 'Milik Sendiri', 'Keramik', 'Tembok', 'Jelek / Kualitas Rendah', 'Genteng Tanah Liat', 'Jelek / Kualitas Rendah', 'Sumur Terlindung', 'Listrik Pln'),
(182, 'Wiji', 'Milik Sendiri', 'Milik Sendiri', 'Keramik', 'Tembok', 'Jelek / Kualitas Rendah', 'Genteng Tanah Liat', 'Jelek / Kualitas Rendah', 'Sumur Tak Terlindung', 'Listrik Pln'),
(183, 'Sanipan', 'Milik Sendiri', 'Milik Sendiri', 'Ubin / Tegel / Teraso', 'Tembok', 'Jelek / Kualitas Rendah', 'Genteng Tanah Liat', 'Jelek / Kualitas Rendah', 'Sumur Bor / Pompa', 'Listrik Pln'),
(184, 'Maenah', 'Milik Sendiri', 'Milik Sendiri', 'Keramik', 'Tembok', 'Jelek / Kualitas Rendah', 'Genteng Tanah Liat', 'Jelek / Kualitas Rendah', 'Sumur Terlindung', 'Listrik Pln'),
(185, 'Langkir', 'Milik Sendiri', 'Milik Sendiri', 'Keramik', 'Tembok', 'Jelek / Kualitas Rendah', 'Genteng Tanah Liat', 'Jelek / Kualitas Rendah', 'Sumur Bor / Pompa', 'Listrik Pln'),
(186, 'Ngatemi', 'Milik Sendiri', 'Milik Sendiri', 'Keramik', 'Tembok', 'Jelek / Kualitas Rendah', 'Genteng Tanah Liat', 'Jelek / Kualitas Rendah', 'Sumur Terlindung', 'Listrik Pln'),
(187, 'Sunaryo', 'Milik Sendiri', 'Milik Orang Lain', 'Keramik', 'Tembok', 'Jelek / Kualitas Rendah', 'Genteng Tanah Liat', 'Jelek / Kualitas Rendah', 'Sumur Bor / Pompa', 'Listrik Pln'),
(188, 'Rasikin', 'Milik Sendiri', 'Milik Sendiri', 'Keramik', 'Tembok', 'Jelek / Kualitas Rendah', 'Genteng Tanah Liat', 'Jelek / Kualitas Rendah', 'Sumur Terlindung', 'Listrik Non - Pln'),
(189, 'Kasiman', 'Kontrak / Sewa', 'Milik Orang Lain', 'Keramik', 'Tembok', 'Jelek / Kualitas Rendah', 'Genteng Tanah Liat', 'Jelek / Kualitas Rendah', 'Sumur Terlindung', 'Listrik Pln'),
(190, 'Ali Suko', 'Milik Sendiri', 'Milik Sendiri', 'Keramik', 'Tembok', 'Jelek / Kualitas Rendah', 'Genteng Tanah Liat', 'Jelek / Kualitas Rendah', 'Sumur Terlindung', 'Listrik Pln'),
(191, 'Sukamto', 'Milik Sendiri', 'Milik Sendiri', 'Keramik', 'Tembok', 'Jelek / Kualitas Rendah', 'Genteng Tanah Liat', 'Jelek / Kualitas Rendah', 'Sumur Bor / Pompa', 'Listrik Pln'),
(192, 'Warjito', 'Milik Sendiri', 'Milik Sendiri', 'Ubin / Tegel / Teraso', 'Tembok', 'Jelek / Kualitas Rendah', 'Genteng Tanah Liat', 'Jelek / Kualitas Rendah', 'Sumur Terlindung', 'Listrik Pln'),
(193, 'Samini', 'Milik Sendiri', 'Milik Sendiri', 'Keramik', 'Tembok', 'Jelek / Kualitas Rendah', 'Genteng Tanah Liat', 'Jelek / Kualitas Rendah', 'Sumur Terlindung', 'Listrik Pln'),
(194, 'Kaslan', 'Milik Sendiri', 'Milik Sendiri', 'Keramik', 'Tembok', 'Jelek / Kualitas Rendah', 'Genteng Tanah Liat', 'Jelek / Kualitas Rendah', 'Sumur Terlindung', 'Listrik Pln'),
(195, 'Slamet Riadi', 'Milik Sendiri', 'Milik Sendiri', 'Keramik', 'Tembok', 'Jelek / Kualitas Rendah', 'Genteng Tanah Liat', 'Jelek / Kualitas Rendah', 'Sumur Terlindung', 'Listrik Pln'),
(196, 'Panirin', 'Milik Sendiri', 'Milik Sendiri', 'Keramik', 'Tembok', 'Jelek / Kualitas Rendah', 'Genteng Tanah Liat', 'Jelek / Kualitas Rendah', 'Sumur Terlindung', 'Listrik Pln'),
(197, 'Suroto', 'Milik Sendiri', 'Milik Sendiri', 'Keramik', 'Tembok', 'Jelek / Kualitas Rendah', 'Genteng Tanah Liat', 'Jelek / Kualitas Rendah', 'Sumur Terlindung', 'Listrik Pln'),
(198, 'Paikin', 'Milik Sendiri', 'Milik Sendiri', 'Keramik', 'Tembok', 'Jelek / Kualitas Rendah', 'Genteng Tanah Liat', 'Jelek / Kualitas Rendah', 'Sumur Terlindung', 'Listrik Pln'),
(199, 'Rajiman', 'Milik Sendiri', 'Milik Sendiri', 'Keramik', 'Tembok', 'Jelek / Kualitas Rendah', 'Genteng Tanah Liat', 'Jelek / Kualitas Rendah', 'Sumur Terlindung', 'Listrik Pln'),
(200, 'Nur Arifin', 'Milik Sendiri', 'Milik Sendiri', 'Keramik', 'Tembok', 'Jelek / Kualitas Rendah', 'Genteng Tanah Liat', 'Jelek / Kualitas Rendah', 'Sumur Terlindung', 'Listrik Non - Pln'),
(201, 'Poniran', 'Milik Sendiri', 'Milik Sendiri', 'Keramik', 'Tembok', 'Jelek / Kualitas Rendah', 'Genteng Tanah Liat', 'Jelek / Kualitas Rendah', 'Sumur Terlindung', 'Listrik Pln'),
(202, 'Ponilah', 'Milik Sendiri', 'Milik Sendiri', 'Keramik', 'Tembok', 'Jelek / Kualitas Rendah', 'Genteng Tanah Liat', 'Jelek / Kualitas Rendah', 'Sumur Tak Terlindung', 'Listrik Pln'),
(203, 'Pujud', 'Milik Sendiri', 'Milik Sendiri', 'Keramik', 'Tembok', 'Jelek / Kualitas Rendah', 'Genteng Tanah Liat', 'Jelek / Kualitas Rendah', 'Sumur Terlindung', 'Listrik Pln'),
(204, 'Tambir', 'Milik Sendiri', 'Milik Sendiri', 'Keramik', 'Tembok', 'Jelek / Kualitas Rendah', 'Genteng Tanah Liat', 'Jelek / Kualitas Rendah', 'Sumur Terlindung', 'Listrik Pln'),
(205, 'Sarengat', 'Milik Sendiri', 'Milik Sendiri', 'Ubin / Tegel / Teraso', 'Plesteran Anyaman Bambu / Kawat', 'Jelek / Kualitas Rendah', 'Genteng Tanah Liat', 'Jelek / Kualitas Rendah', 'Sumur Bor / Pompa', 'Listrik Pln'),
(206, 'Mirah', 'Milik Sendiri', 'Milik Orang Lain', 'Keramik', 'Tembok', 'Jelek / Kualitas Rendah', 'Genteng Tanah Liat', 'Jelek / Kualitas Rendah', 'Sumur Terlindung', 'Listrik Pln'),
(207, 'Kromo Bejo', 'Milik Sendiri', 'Milik Sendiri', 'Keramik', 'Tembok', 'Jelek / Kualitas Rendah', 'Genteng Tanah Liat', 'Jelek / Kualitas Rendah', 'Sumur Terlindung', 'Listrik Pln'),
(208, 'Batin Sunarno', 'Milik Sendiri', 'Milik Sendiri', 'Keramik', 'Tembok', 'Jelek / Kualitas Rendah', 'Genteng Tanah Liat', 'Jelek / Kualitas Rendah', 'Sumur Terlindung', 'Listrik Pln'),
(209, 'Wakijan', 'Milik Sendiri', 'Milik Sendiri', 'Keramik', 'Tembok', 'Jelek / Kualitas Rendah', 'Genteng Tanah Liat', 'Jelek / Kualitas Rendah', 'Sumur Terlindung', 'Listrik Pln'),
(210, 'Sugeng Purnomo', 'Milik Sendiri', 'Milik Sendiri', 'Keramik', 'Tembok', 'Jelek / Kualitas Rendah', 'Genteng Tanah Liat', 'Jelek / Kualitas Rendah', 'Sumur Tak Terlindung', 'Listrik Non - Pln');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_alternatif`
--
ALTER TABLE `tb_alternatif`
  ADD PRIMARY KEY (`id_alternatif`);

--
-- Indexes for table `tb_kriteria`
--
ALTER TABLE `tb_kriteria`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- Indexes for table `tb_level`
--
ALTER TABLE `tb_level`
  ADD PRIMARY KEY (`id_level`);

--
-- Indexes for table `tb_nilai`
--
ALTER TABLE `tb_nilai`
  ADD PRIMARY KEY (`id_nilai`),
  ADD KEY `fk_id_kriteria` (`fk_id_kriteria`),
  ADD KEY `fk_id_alternatif` (`fk_id_alternatif`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `id_level` (`fk_id_level`);

--
-- Indexes for table `tb_warga`
--
ALTER TABLE `tb_warga`
  ADD PRIMARY KEY (`id_warga`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_alternatif`
--
ALTER TABLE `tb_alternatif`
  MODIFY `id_alternatif` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=268;

--
-- AUTO_INCREMENT for table `tb_kriteria`
--
ALTER TABLE `tb_kriteria`
  MODIFY `id_kriteria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tb_level`
--
ALTER TABLE `tb_level`
  MODIFY `id_level` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_nilai`
--
ALTER TABLE `tb_nilai`
  MODIFY `id_nilai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_warga`
--
ALTER TABLE `tb_warga`
  MODIFY `id_warga` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=211;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_nilai`
--
ALTER TABLE `tb_nilai`
  ADD CONSTRAINT `tb_nilai_ibfk_1` FOREIGN KEY (`fk_id_kriteria`) REFERENCES `tb_kriteria` (`id_kriteria`),
  ADD CONSTRAINT `tb_nilai_ibfk_2` FOREIGN KEY (`fk_id_alternatif`) REFERENCES `tb_alternatif` (`id_alternatif`);

--
-- Constraints for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD CONSTRAINT `tb_user_ibfk_1` FOREIGN KEY (`fk_id_level`) REFERENCES `tb_level` (`id_level`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
