-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 26, 2018 at 01:51 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_genpi`
--

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE `galeri` (
  `id_galeri` int(11) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`id_galeri`, `gambar`, `nama`) VALUES
(20, 'gambar-5691.jpg', 'ss'),
(21, 'gambar-486.jpg', 'sss'),
(22, 'gambar-5818.jpg', 'asa'),
(23, 'gambar-6354.jpg', 'aa'),
(24, 'gambar-1419.jpg', 'xxddf'),
(25, 'gambar-2710.jpg', 'asx'),
(26, 'gambar-510.jpg', 'xas'),
(27, 'gambar-7780.jpg', 'asx'),
(28, 'gambar-4880.jpg', 'asx'),
(29, 'gambar-3104.jpg', 'xasx'),
(30, 'gambar-5866.jpg', 'saxas'),
(32, 'gambar-3360.jpg', 'xas'),
(33, 'gambar-8135.jpg', 'xas'),
(34, 'gambar-3704.jpg', 'asxx'),
(35, 'gambar-4447.jpg', 'asxxx'),
(37, 'gambar-2744.PNG', 'sdds');

-- --------------------------------------------------------

--
-- Table structure for table `konfirmasi_p`
--

CREATE TABLE `konfirmasi_p` (
  `id_konfirmasi` int(50) NOT NULL,
  `tgl_sekarang` date NOT NULL,
  `invoice` int(40) NOT NULL,
  `gambar` varchar(200) NOT NULL,
  `konfirm` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `konfirmasi_p`
--

INSERT INTO `konfirmasi_p` (`id_konfirmasi`, `tgl_sekarang`, `invoice`, `gambar`, `konfirm`) VALUES
(54, '2018-07-20', 1724, 'buktitransfer-5075.jpg', 1),
(55, '2018-07-20', 3651, 'buktitransfer-4313.jpg', 1),
(56, '2018-07-23', 9960, 'buktitransfer-2468.jpg', 1),
(57, '2018-07-23', 2581, 'buktitransfer-2180.jpg', 1),
(58, '2018-07-23', 8395, 'buktitransfer-7926.jpg', 1),
(59, '2018-07-23', 5804, 'buktitransfer-5703.jpg', 1),
(60, '2018-07-24', 5581, 'buktitransfer-6856.jpg', 1),
(64, '2018-07-25', 8506, 'buktitransfer-4287.jpg', 2),
(65, '2018-07-25', 5730, 'buktitransfer-712.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `konfirmasi_t`
--

CREATE TABLE `konfirmasi_t` (
  `id_konfirmasi` int(11) NOT NULL,
  `tgl_sekarang` date NOT NULL,
  `invoice` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `tgl_kirim` date NOT NULL,
  `gambar` varchar(200) NOT NULL,
  `konfirm` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `konfirmasi_t`
--

INSERT INTO `konfirmasi_t` (`id_konfirmasi`, `tgl_sekarang`, `invoice`, `nama`, `jumlah`, `tgl_kirim`, `gambar`, `konfirm`) VALUES
(1, '2018-07-23', 6807, 'Jamul Pawaid', 300000, '2018-07-23', 'buktitransfer-9072.jpg', 1),
(2, '2018-07-23', 5226, 'Jamul Pawaid', 30000, '2018-07-23', 'buktitransfer-1138.jpg', 1),
(3, '2018-07-24', 364, 'edo', 250000, '2018-07-24', 'buktitransfer-5549.jpg', 1),
(5, '2018-07-24', 1, 'Hilmi Hidayat', 250000, '2018-07-24', 'buktitransfer-8275.jpg', 2);

-- --------------------------------------------------------

--
-- Table structure for table `paket_wisata`
--

CREATE TABLE `paket_wisata` (
  `id_paketwisata` int(12) NOT NULL,
  `nama_paketwisata` varchar(100) NOT NULL,
  `fasilitas` text NOT NULL,
  `harga` int(12) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `id_touragent` varchar(30) NOT NULL,
  `jadwal` text NOT NULL,
  `sk` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paket_wisata`
--

INSERT INTO `paket_wisata` (`id_paketwisata`, `nama_paketwisata`, `fasilitas`, `harga`, `gambar`, `id_touragent`, `jadwal`, `sk`) VALUES
(34, 'Gombengsari - Kawah Ijen (meeting point Banyuwangi)', '<ol>\r\n	<li>Transportasi</li>\r\n	<li>Hotel bintang 4</li>\r\n	<li>Makanan selama tour</li>\r\n	<li>Paket musik tradisional dan budaya Banyuwangi</li>\r\n	<li>Tiket masuk</li>\r\n	<li>Tour Leader</li>\r\n	<li>Local guide Ijen</li>\r\n	<li>Snack dan air mineral</li>\r\n	<li>Pertolongan pertama</li>\r\n</ol>\r\n', 4300000, 'gambar-8659.PNG', '7', '<p>&nbsp; &nbsp; &nbsp; &nbsp;Hari ke-1</p>\r\n\r\n<ol>\r\n	<li>07.00 Tiba di Banyuwangi</li>\r\n	<li>07.00 Sarapan di restoran lokal</li>\r\n	<li>08.00 Ke Kaliklatak menjelajahi perkebunan karet</li>\r\n	<li>10.00 Ke Gombengsari menjelajahi perkebunan kopi</li>\r\n	<li>12.00 Makan siang di Sanggar Genjah Arum</li>\r\n	<li>14.00 Check in hotel</li>\r\n	<li>18.00 Makan malam di Restoran Kemarang</li>\r\n</ol>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp;Hari ke-2</p>\r\n\r\n<ol>\r\n	<li>23.00 Persiapan ke Kawah Ijen</li>\r\n	<li>00.00 Menjelajahi Blue Fire dan Sunrise Kawah Ijen</li>\r\n	<li>08.00 Sarapan di Restoran Pondok Indah</li>\r\n	<li>10.00 Kembali ke hotel dan check out</li>\r\n	<li>12.00 Makan siang di Pantai Solong</li>\r\n	<li>13.00 Menjelajahi Taman Nasional Baluran atau menjelajahi Bangsring Underwater</li>\r\n</ol>\r\n', '<ol>\r\n	<li>Meeting point Banyuwangi (Bandara Blimbingsari, Dinas Kebudayaan dan Pariwisata).</li>\r\n	<li>Paket tersedia untuk 5 orang.</li>\r\n</ol>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; *NB: Apabila pemesanan dibawah 5 orang, harga tetap sama.</p>\r\n'),
(44, 'Gombengsari - Kawah Ijen (meeting point Bali)', '<ol>\r\n	<li>Transportasi</li>\r\n	<li>Hotel bintang 4</li>\r\n	<li>Makanan selama tour</li>\r\n	<li>Paket musik tradisional dan budaya Banyuwangi</li>\r\n	<li>Tiket masuk</li>\r\n	<li>Tour Leader</li>\r\n	<li>Local guide Ijen</li>\r\n	<li>Snack dan air mineral</li>\r\n	<li>Pertolongan pertama</li>\r\n	<li>Tikel kapal Katamaran</li>\r\n</ol>\r\n', 5000000, 'gambar-665.PNG', '7', '<p>&nbsp; &nbsp; &nbsp; &nbsp;Hari ke-1</p>\r\n\r\n<ol>\r\n	<li>07.00 Tiba di Banyuwangi</li>\r\n	<li>07.00 Sarapan di restoran lokal</li>\r\n	<li>08.00 Ke Kaliklatak menjelajahi perkebunan karet</li>\r\n	<li>10.00 Ke Gombengsari menjelajahi perkebunan kopi</li>\r\n	<li>12.00 Makan siang di Sanggar Genjah Arum</li>\r\n	<li>14.00 Check in hotel</li>\r\n	<li>18.00 Makan malam di Restoran Kemarang</li>\r\n</ol>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp;Hari ke-2</p>\r\n\r\n<ol>\r\n	<li>23.00 Persiapan ke Kawah Ijen</li>\r\n	<li>00.00 Menjelajahi Blue Fire dan Sunrise Kawah Ijen</li>\r\n	<li>08.00 Sarapan di Restoran Pondok Indah</li>\r\n	<li>10.00 Kembali ke hotel dan check out</li>\r\n	<li>12.00 Makan siang di Pantai Solong</li>\r\n	<li>13.00 Menjelajahi Taman Nasional Baluran atau menjelajahi Bangsring Underwater</li>\r\n	<li>18.00 Kembali ke Bali (program selesai)</li>\r\n</ol>\r\n', '<ol>\r\n	<li>Meeting point Bali&nbsp;(Bandara I Gusti Ngurah Rai).</li>\r\n	<li>Paket tersedia untuk 5 orang.</li>\r\n</ol>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; *NB: Apabila pemesanan dibawah 5 orang, harga tetap sama.</p>\r\n'),
(45, 'Gombengsari -Alas Purwo- Kawah Ijen (meeting point Banyuwangi)', '<ol>\r\n	<li>Transportasi</li>\r\n	<li>Hotel bintang 4</li>\r\n	<li>Makanan selama tour</li>\r\n	<li>Paket musik tradisional dan budaya Banyuwangi</li>\r\n	<li>Tiket masuk</li>\r\n	<li>Tour Leader</li>\r\n	<li>Local guide Ijen</li>\r\n	<li>Snack dan air mineral</li>\r\n	<li>Pertolongan pertama</li>\r\n	<li>Tikel kapal Katamaran</li>\r\n</ol>\r\n', 6700000, 'gambar-2479.PNG', '7', '<p>&nbsp; &nbsp; &nbsp; &nbsp;Hari ke-1</p>\r\n\r\n<ol>\r\n	<li>07.00 Tiba di Banyuwangi</li>\r\n	<li>07.00 Sarapan di restoran lokal</li>\r\n	<li>08.00 Ke Kaliklatak menjelajahi perkebunan karet</li>\r\n	<li>10.00 Ke Gombengsari menjelajahi perkebunan kopi</li>\r\n	<li>12.00 Makan siang di Sanggar Genjah Arum</li>\r\n	<li>14.00 Check in hotel</li>\r\n	<li>18.00 Makan malam di Restoran Kemarang</li>\r\n</ol>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp;Hari ke-2</p>\r\n\r\n<ol>\r\n	<li>08.00 Persiapan ke Taman Nasional Alas Purwo. Menikmati Taman Nasional Alas Purwo (dengan kapal Katamaran untuk menjelajahi hutan mangrove)</li>\r\n	<li>12.00 Makan siang di kapal katamaran dengan makanan tradisional</li>\r\n	<li>13.30 Menjelajahi Pantai Pulau Merah</li>\r\n	<li>16.00 Kembali ke hotel</li>\r\n	<li>19.00 Makan malam di restoran lokal</li>\r\n</ol>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; Hari ke-3</p>\r\n\r\n<ol>\r\n	<li>23.00 Persiapan ke Kawah Ijen</li>\r\n	<li>00.00 Menjelajahi Blue Fire dan Sunrise Kawah Ijen</li>\r\n	<li>08.00 Sarapan di Restoran Pondok Indah</li>\r\n	<li>10.00 Kembali ke hotel dan check out</li>\r\n	<li>12.00 Makan siang di Pantai Solong</li>\r\n	<li>13.00 Menjelajahi Taman Nasional Baluran atau menjelajahi Bangsring Underwater</li>\r\n</ol>\r\n', '<ol>\r\n	<li>Meeting point Banyuwangi (Bandara Blimbingsari, Dinas Kebudayaan dan Pariwisata).</li>\r\n	<li>Paket tersedia untuk 5 orang.</li>\r\n</ol>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp;*NB: Apabila pemesanan dibawah 5 orang, maka harga tetap sama.</p>\r\n'),
(46, 'Gombengsari -Alas Purwo- Kawah Ijen (meeting point Bali)', '<ol>\r\n	<li>Transportasi</li>\r\n	<li>Hotel bintang 4</li>\r\n	<li>Makanan selama tour</li>\r\n	<li>Paket musik tradisional dan budaya Banyuwangi</li>\r\n	<li>Tiket masuk</li>\r\n	<li>Tour Leader</li>\r\n	<li>Local guide Ijen</li>\r\n	<li>Snack dan air mineral</li>\r\n	<li>Pertolongan pertama</li>\r\n	<li>Tikel kapal Katamaran</li>\r\n</ol>\r\n', 7400000, 'gambar-897.PNG', '7', '<p>&nbsp; &nbsp; &nbsp; &nbsp;Hari ke-1</p>\r\n\r\n<ol>\r\n	<li>07.00 Tiba di Banyuwangi</li>\r\n	<li>07.00 Sarapan di restoran lokal</li>\r\n	<li>08.00 Ke Kaliklatak menjelajahi perkebunan karet</li>\r\n	<li>10.00 Ke Gombengsari menjelajahi perkebunan kopi</li>\r\n	<li>12.00 Makan siang di Sanggar Genjah Arum</li>\r\n	<li>14.00 Check in hotel</li>\r\n	<li>18.00 Makan malam di Restoran Kemarang</li>\r\n</ol>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp;Hari ke-2</p>\r\n\r\n<ol>\r\n	<li>08.00 Persiapan ke Taman Nasional Alas Purwo. Menikmati Taman Nasional Alas Purwo (dengan kapal Katamaran untuk menjelajahi hutan mangrove)</li>\r\n	<li>12.00 Makan siang di kapal katamaran dengan makanan tradisional</li>\r\n	<li>13.30 Menjelajahi Pantai Pulau Merah</li>\r\n	<li>16.00 Kembali ke hotel</li>\r\n	<li>19.00 Makan malam di restoran lokal</li>\r\n</ol>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; Hari ke-3</p>\r\n\r\n<ol>\r\n	<li>23.00 Persiapan ke Kawah Ijen</li>\r\n	<li>00.00 Menjelajahi Blue Fire dan Sunrise Kawah Ijen</li>\r\n	<li>08.00 Sarapan di Restoran Pondok Indah</li>\r\n	<li>10.00 Kembali ke hotel dan check out</li>\r\n	<li>12.00 Makan siang di Pantai Solong</li>\r\n	<li>13.00 Menjelajahi Taman Nasional Baluran atau menjelajahi Bangsring Underwater</li>\r\n	<li>18.00 Kembali ke Bali</li>\r\n</ol>\r\n', '<ol>\r\n	<li>Meeting point Bali&nbsp;(Bandara I Gusti Ngurah Rai).</li>\r\n	<li>Paket tersedia untuk&nbsp;5 orang.</li>\r\n</ol>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp;*NB: Apabila pemesanan dibawah 5 orang, harga tetap sama.</p>\r\n'),
(47, '3D2N TN. Baluran - Bangsring - Songgon - Kawah Ijen', '<ol>\r\n	<li>Dormitory / Homestay</li>\r\n	<li>Makan selama tour</li>\r\n	<li>Profesional Guide</li>\r\n	<li>Akomodasi</li>\r\n	<li>Air Mineral</li>\r\n</ol>\r\n', 7175000, 'gambar-864.jpg', '7', '<p>&nbsp; &nbsp; &nbsp; &nbsp; Hari ke-1</p>\r\n\r\n<ol>\r\n	<li>08.30 Tiba di Bandara Blimbingsari</li>\r\n	<li>09.00 Sarapan di Restoran Pecel Ayu</li>\r\n	<li>10.00 Menjelajahi TN. Baluran</li>\r\n	<li>13.00 Makan siang di restoran lokal</li>\r\n	<li>14.00 Menjelajahi Bangsring Under Water dan Pulau Tabuhan</li>\r\n	<li>17.00 Check in hotel</li>\r\n	<li>20.00 Makan malam di Mac Jo Fried Chicken</li>\r\n</ol>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp;Hari ke-2</p>\r\n\r\n<ol>\r\n	<li>06.00 Sarapan di hotel</li>\r\n	<li>08.00 ke Songgon dan menikmati air terjun Telunjuk Raung</li>\r\n	<li>10.00 Menjelajahi hutan Pinus dan rumah pohon</li>\r\n	<li>11.00 Rafting atau Tubing di X badeng</li>\r\n	<li>13.00 Makan siang</li>\r\n	<li>15.00 Ke hotel</li>\r\n	<li>19.00 Makan malam di Pesona Sea Food</li>\r\n</ol>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp;Hari ke-3</p>\r\n\r\n<ol>\r\n	<li>00.00 Menuju Paltuding</li>\r\n	<li>02.00 Menjelajahi Blue Fire dan Sunrise Kawah Ijen</li>\r\n	<li>07.00 Menikmati air terjun Kali Pahit dan sarapan</li>\r\n	<li>08.00 Menjelajahi Kawah Wurung</li>\r\n	<li>12.00 Makan siang di Pondok Sari dan menikmati perkebunan kopi</li>\r\n	<li>13.00 Kembali ke hotel</li>\r\n</ol>\r\n', '<ol>\r\n	<li>Meeting point Banyuwangi (Bandara Blimbingsari, Dinas Kebudayaan dan Pariwisata).</li>\r\n	<li>Paket tersedia untuk 5&nbsp;orang.</li>\r\n</ol>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp;*NB: Apabila pemesanan dibawah 5 orang, harga tetap sama.</p>\r\n'),
(48, '3D2N TN. Baluran - Bangsring - Songgon - Kawah Ijen', '<ol>\r\n	<li>Hotel bintang 3/4&nbsp;</li>\r\n	<li>Makan selama tour</li>\r\n	<li>Profesional Guide</li>\r\n	<li>Akomodasi</li>\r\n	<li>Air Mineral</li>\r\n</ol>\r\n', 12000000, 'gambar-5002.jpg', '7', '<p>&nbsp; &nbsp; &nbsp; &nbsp; Hari ke-1</p>\r\n\r\n<ol>\r\n	<li>08.30 Tiba di Bandara Blimbingsari</li>\r\n	<li>09.00 Sarapan di Restoran Pecel Ayu</li>\r\n	<li>10.00 Menjelajahi TN. Baluran</li>\r\n	<li>13.00 Makan siang di restoran lokal</li>\r\n	<li>14.00 Menjelajahi Bangsring Under Water dan Pulau Tabuhan</li>\r\n	<li>17.00 Check in hotel</li>\r\n	<li>20.00 Makan malam di Mac Jo Fried Chicken</li>\r\n</ol>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp;Hari ke-2</p>\r\n\r\n<ol>\r\n	<li>06.00 Sarapan di hotel</li>\r\n	<li>08.00 ke Songgon dan menikmati air terjun Telunjuk Raung</li>\r\n	<li>10.00 Menjelajahi hutan Pinus dan rumah pohon</li>\r\n	<li>11.00 Rafting atau Tubing di X badeng</li>\r\n	<li>13.00 Makan siang</li>\r\n	<li>15.00 Ke hotel</li>\r\n	<li>19.00 Makan malam di Pesona Sea Food</li>\r\n</ol>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp;Hari ke-3</p>\r\n\r\n<ol>\r\n	<li>00.00 Menuju Paltuding</li>\r\n	<li>02.00 Menjelajahi Blue Fire dan Sunrise Kawah Ijen</li>\r\n	<li>07.00 Menikmati air terjun Kali Pahit dan sarapan</li>\r\n	<li>08.00 Menjelajahi Kawah Wurung</li>\r\n	<li>12.00 Makan siang di Pondok Sari dan menikmati perkebunan kopi</li>\r\n	<li>13.00 Kembali ke hotel</li>\r\n</ol>\r\n', '<ol>\r\n	<li>Meeting point Banyuwangi (Bandara Blimbingsari, Dinas Kebudayaan dan Pariwisata).</li>\r\n	<li>Paket tersedia untuk 5 orang.</li>\r\n</ol>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp;*NB: Apabila pemesanan dibawah 5 orang, harga tetap sama.</p>\r\n'),
(49, '4D5N TN. Baluran - Bangsring - Songgon - Kawah Ijen - Menjangan - Tabuhan', '<ol>\r\n	<li>Dormitory/homestay</li>\r\n	<li>Makan selama tour</li>\r\n	<li>Profesional Guide</li>\r\n	<li>Akomodasi</li>\r\n	<li>Air Mineral</li>\r\n</ol>\r\n', 9600000, 'gambar-1656.jpg', '7', '<p>&nbsp; &nbsp; &nbsp; &nbsp; Hari ke-1</p>\r\n\r\n<ol>\r\n	<li>08.30 Tiba di Bandara Blimbingsari</li>\r\n	<li>09.00 Sarapan di Restoran Pecel Ayu</li>\r\n	<li>10.00 Menjelajahi TN. Baluran</li>\r\n	<li>13.00 Makan siang di restoran lokal</li>\r\n	<li>14.00 Menjelajahi Bangsring Under Water dan Pulau Tabuhan</li>\r\n	<li>17.00 Check in hotel</li>\r\n	<li>20.00 Makan malam di Mac Jo Fried Chicken</li>\r\n</ol>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp;Hari ke-2</p>\r\n\r\n<ol>\r\n	<li>06.00 Sarapan di hotel</li>\r\n	<li>08.00 ke Songgon dan menikmati air terjun Telunjuk Raung</li>\r\n	<li>10.00 Menjelajahi hutan Pinus dan rumah pohon</li>\r\n	<li>11.00 Rafting atau Tubing di X badeng</li>\r\n	<li>13.00 Makan siang</li>\r\n	<li>15.00 Ke hotel</li>\r\n	<li>19.00 Makan malam di Pesona Sea Food</li>\r\n</ol>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp;Hari ke-3</p>\r\n\r\n<ol>\r\n	<li>00.00 Menuju Paltuding</li>\r\n	<li>02.00 Menjelajahi Blue Fire dan Sunrise Kawah Ijen</li>\r\n	<li>07.00 Menikmati air terjun Kali Pahit dan sarapan</li>\r\n	<li>08.00 Menjelajahi Kawah Wurung</li>\r\n	<li>12.00 Makan siang di Pondok Sari dan menikmati perkebunan kopi</li>\r\n	<li>13.00 Kembali ke hotel</li>\r\n	<li>18.00 Makan malam di restoran lokal</li>\r\n</ol>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp;Hari ke-4</p>\r\n\r\n<ol>\r\n	<li>06.00 Sarapan di hotel</li>\r\n	<li>08.00 Tiba di Pantai Grand Watudodol. Ke kapal wisata untuk ke Menjangan dan snorkling</li>\r\n	<li>12.00 Makan siang di Menjangan</li>\r\n	<li>13.00 Ke Pulau Tabuhan</li>\r\n	<li>15.00 Kembali ke hotel dan persiapan untuk makan malam</li>\r\n</ol>\r\n', '<ol>\r\n	<li>Meeting point Banyuwangi (Bandara Blimbingsari, Dinas Kebudayaan dan Pariwisata).</li>\r\n	<li>Minimal pemesanan 5&nbsp;orang.</li>\r\n</ol>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp;*NB: Apabila pemesanan dibawah 5 orang, harga tetap sama.</p>\r\n'),
(50, '4D5N TN. Baluran - Bangsring - Songgon - Kawah Ijen - Menjangan - Tabuhan', '<ol>\r\n	<li>Hotel bintang 3/4</li>\r\n	<li>Makan selama tour</li>\r\n	<li>Profesional Guide</li>\r\n	<li>Akomodasi</li>\r\n	<li>Air Mineral</li>\r\n</ol>\r\n', 14350000, 'gambar-5976.jpg', '7', '<p>&nbsp; &nbsp; &nbsp; &nbsp; Hari ke-1</p>\r\n\r\n<ol>\r\n	<li>08.30 Tiba di Bandara Blimbingsari</li>\r\n	<li>09.00 Sarapan di Restoran Pecel Ayu</li>\r\n	<li>10.00 Menjelajahi TN. Baluran</li>\r\n	<li>13.00 Makan siang di restoran lokal</li>\r\n	<li>14.00 Menjelajahi Bangsring Under Water dan Pulau Tabuhan</li>\r\n	<li>17.00 Check in hotel</li>\r\n	<li>20.00 Makan malam di Mac Jo Fried Chicken</li>\r\n</ol>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp;Hari ke-2</p>\r\n\r\n<ol>\r\n	<li>06.00 Sarapan di hotel</li>\r\n	<li>08.00 ke Songgon dan menikmati air terjun Telunjuk Raung</li>\r\n	<li>10.00 Menjelajahi hutan Pinus dan rumah pohon</li>\r\n	<li>11.00 Rafting atau Tubing di X badeng</li>\r\n	<li>13.00 Makan siang</li>\r\n	<li>15.00 Ke hotel</li>\r\n	<li>19.00 Makan malam di Pesona Sea Food</li>\r\n</ol>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp;Hari ke-3</p>\r\n\r\n<ol>\r\n	<li>00.00 Menuju Paltuding</li>\r\n	<li>02.00 Menjelajahi Blue Fire dan Sunrise Kawah Ijen</li>\r\n	<li>07.00 Menikmati air terjun Kali Pahit dan sarapan</li>\r\n	<li>08.00 Menjelajahi Kawah Wurung</li>\r\n	<li>12.00 Makan siang di Pondok Sari dan menikmati perkebunan kopi</li>\r\n	<li>13.00 Kembali ke hotel</li>\r\n	<li>18.00 Makan malam di restoran lokal</li>\r\n</ol>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp;Hari ke-4</p>\r\n\r\n<ol>\r\n	<li>06.00 Sarapan di hotel</li>\r\n	<li>08.00 Tiba di Pantai Grand Watudodol. Ke kapal wisata untuk ke Menjangan dan snorkling</li>\r\n	<li>12.00 Makan siang di Menjangan</li>\r\n	<li>13.00 Ke Pulau Tabuhan</li>\r\n	<li>15.00 Kembali ke hotel dan persiapan untuk makan malam</li>\r\n</ol>\r\n', '<ol>\r\n	<li>Meeting point Banyuwangi (Bandara Blimbingsari, Dinas Kebudayaan dan Pariwisata).</li>\r\n	<li>Paket tersedia untuk 5&nbsp;orang.</li>\r\n</ol>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp;*NB: Apabila pemesanan dibawah 5 orang, harga tetap sama.</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id_pemesanan` int(12) NOT NULL,
  `nama_pemesan` varchar(100) NOT NULL,
  `nama_paket` varchar(200) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `jumlah_anggota` int(11) NOT NULL,
  `tanggal_sekarang` date NOT NULL,
  `tanggal_pemesanan` date NOT NULL,
  `invoice` varchar(100) NOT NULL,
  `total` int(11) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pemesanan`
--

INSERT INTO `pemesanan` (`id_pemesanan`, `nama_pemesan`, `nama_paket`, `alamat`, `email`, `no_telp`, `jumlah_anggota`, `tanggal_sekarang`, `tanggal_pemesanan`, `invoice`, `total`, `status`) VALUES
(115, 'Novan Fajar', '34', 'Malang', 'hilmihidayat.ti.poliwangi@gmail.com', '08766666', 2, '2018-07-20', '2018-07-26', '1724', 1720000, 1),
(116, 'james bonn', '44', 'Pontianak', 'psembonisme@gmail.com', '087666', 2, '2018-07-20', '2018-07-26', '3651', 2000000, 1),
(117, 'edo', '45', 'Banyuwangi', 'hilmiongisnade@yahoo.co.id', '0987654', 3, '2018-07-20', '2018-07-26', '9960', 4020000, 1),
(118, 'james bonn', '44', 'Banyuwangi', 'psembonisme@gmail.com', '098765', 2, '2018-07-23', '2018-07-29', '2581', 2000000, 1),
(119, 'edo', '44', 'Banyuwangi', 'psembonisme@gmail.com', '09876543', 2, '2018-07-23', '2018-07-29', '8395', 2000000, 1),
(120, 'kang nur', '44', 'Banyuwangi', 'hilmiongisnade@yahoo.co.id', '0987654', 2, '2018-07-23', '2018-07-29', '5804', 2000000, 1),
(121, 'Yusma Anwar', '44', 'Banyuwangi', 'hilmihidayat.ti.poliwangi@gmail.com', '0987654', 2, '2018-07-24', '2018-07-31', '5581', 2000000, 1),
(127, 'Alfian Khul', '47', 'Pontianak', 'hilmihidayat.ti.poliwangi@gmail.com', '09876543', 2, '2018-07-25', '2018-07-31', '8506', 2870000, 2),
(128, 'hilmi hidayat', '49', 'Banyuwangi', 'hilmihidayat.ti.poliwangi@gmail.com', '09876543', 1, '2018-07-25', '2018-08-01', '9820', 9600000, 0),
(129, 'hilmi hidayat', '46', 'Banyuwangi', 'hilmihidayat.ti.poliwangi@gmail.com', '09876543', 1, '2018-07-25', '2018-08-01', '5730', 7400000, 1),
(130, 'hilmi hidayat', '49', 'Banyuwangi', 'hilmihidayat.ti.poliwangi@gmail.com', '098765432', 1, '2018-07-25', '2018-08-02', '3024', 9600000, 0);

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan_tourguide`
--

CREATE TABLE `pemesanan_tourguide` (
  `id_pemesananguide` int(11) NOT NULL,
  `nama_pemesan` varchar(40) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `no_telp` varchar(11) NOT NULL,
  `id_tourguide` int(40) NOT NULL,
  `tanggal_sekarang` date NOT NULL,
  `tanggal_pemesanan` date NOT NULL,
  `invoice` varchar(100) NOT NULL,
  `total` int(100) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pemesanan_tourguide`
--

INSERT INTO `pemesanan_tourguide` (`id_pemesananguide`, `nama_pemesan`, `alamat`, `email`, `no_telp`, `id_tourguide`, `tanggal_sekarang`, `tanggal_pemesanan`, `invoice`, `total`, `status`) VALUES
(1, 'Jamul Pawaid', 'Lombok', 'psembonisme@gmail.com', '08524242', 31, '2018-07-23', '2018-07-29', '6807', 300000, 1),
(2, 'james bonn', 'Banyuwangi', 'hilmiongisnade@yahoo.co.id', '0987654', 32, '2018-07-23', '2018-07-29', '5226', 300000, 1),
(3, 'edo', 'Banyuwangi', 'hilmihidayat.ti.poliwangi@gmail.com', '09876543', 42, '2018-07-24', '2018-07-30', '364', 250000, 1),
(5, 'hilmi hidayat', 'Banyuwangi', 'hilmihidayat.ti.poliwangi@gmail.com', '09876543', 42, '2018-07-24', '2018-07-31', '1', 250000, 2),
(8, 'hilmi hidayat', 'Banyuwangi', 'hilmihidayat.ti.poliwangi@gmail.com', '2323232', 40, '2018-07-25', '2018-08-01', '5751', 250000, 0),
(9, 'hilmi hidayat', 'sanggar', 'hilmihidayat.ti.poliwangi@gmail.com', '098765432', 41, '2018-07-25', '2018-08-01', '5676', 250000, 0),
(10, 'hilmi hidayat', 'sanggar', 'hilmihidayat.ti.poliwangi@gmail.com', '098765432', 41, '2018-07-25', '2018-08-03', '6477', 250000, 0);

-- --------------------------------------------------------

--
-- Table structure for table `penginapan`
--

CREATE TABLE `penginapan` (
  `id_penginapan` int(12) NOT NULL,
  `nama_penginapan` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `kelas` varchar(200) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penginapan`
--

INSERT INTO `penginapan` (`id_penginapan`, `nama_penginapan`, `alamat`, `kelas`, `gambar`) VALUES
(12, 'Hotel Selamet', 'JL.PIERE TENDEAN 89 BANYUWANGI', 'melati 3', 'gambar-5130.PNG'),
(15, 'HOTEL MAHKOTA', 'JL. RAYA JEMBER 50 GENTENG', 'Melati 3', 'gambar-8206.jpg'),
(16, 'HOTEL NEW SURYA', 'JL YOS SUDARSO 2 GAMBIRAN', 'Melati 3', 'gambar-4593.PNG'),
(17, 'HOTEL BARU INDAH', 'JL.A.YANI NO.3 GAMBIRAN', 'Melati 3', 'gambar-1432.PNG'),
(18, 'HOTEL EL ROYALE ', 'JL RAYA JEMBER KABAT', 'bintang 4', 'gambar-6696.PNG'),
(19, 'HOTEL SANTIKA', 'JL. LETJEN S PARMAN NO. 1 SOBO KECAMATAN BANYUWANGI', 'bintang 3', 'gambar-4966.PNG');

-- --------------------------------------------------------

--
-- Table structure for table `restaurant`
--

CREATE TABLE `restaurant` (
  `id_restaurant` int(12) NOT NULL,
  `nama_restaurant` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_telp` int(20) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `restaurant`
--

INSERT INTO `restaurant` (`id_restaurant`, `nama_restaurant`, `alamat`, `no_telp`, `gambar`) VALUES
(14, 'RESTORAN DAIPOENG ROGOJAMPI', 'DESA MANGIR - KECAMATAN ROGOJAMPI', 1111, 'gambar-498.jpg'),
(15, 'RESTORAN DAIPOENG KABAT', 'DESA DADAPAN - KECAMATAN KABAT', 1111, 'gambar-20.jpg'),
(16, 'PUSAT OLEH-OLEH ISTANA GANDRUNG', 'DESA DADAPAN - KECAMATAN KABAT', 1111, 'gambar-8890.jpg'),
(17, 'CAFE BENTENG BUAH NAGA', 'DESA JAJAG - KECAMATAN GAMBIRAN', 1111, 'gambar-404.PNG'),
(18, 'CAFE GIS n GAS', 'JL AHMAD YANI - DESA JAJAG - KECAMATAN GAMBIRAN', 1111, 'gambar-3781.PNG'),
(19, 'RM. LESEHAN RINDU', 'JL. A. YANI - DESA JAJAG - KECAMATAN GAMBIRAN', 111, 'gambar-2061.PNG'),
(20, 'RM. BAJAK LAUT', 'JL. JENDRAL A. YANI NO. 65 - TUKANG KAYU', 111, 'gambar-5079.PNG'),
(21, 'CONATO CAFE & BAKERY GENTENG', 'JL. GAJAH MADA NO. 158 GENTENG KULON - KECAMATAN GENTENG', 1111, 'gambar-9074.PNG');

-- --------------------------------------------------------

--
-- Table structure for table `tour_agent`
--

CREATE TABLE `tour_agent` (
  `id_touragent` int(12) NOT NULL,
  `nama_touragent` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `gambar` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tour_agent`
--

INSERT INTO `tour_agent` (`id_touragent`, `nama_touragent`, `email`, `alamat`, `no_telp`, `gambar`) VALUES
(7, 'Genpi Banyuwngi', 'hilmihidayat.ti.poliwangi@gmail.com', 'Banyuwangi', '08231313', ''),
(16, 'jaya raya', 'asdsad@gmail.com', 'Banyuwangi', '0987654', ''),
(17, 'garuda tour', 'psembonisme@gmail.com', 'Banyuwangi', '0987654', 'gambar-1127.PNG'),
(18, 'permata travel', 'hilmihidayat.ti.poliwangi@gmail.com', 'Banyuwangi', '09876543', 'Touragent-606.PNG'),
(19, 'jaya raya', 'hilmihidayat.ti.poliwangi@gmail.com', 'Banyuwangi', '098765432', 'Touragent-6101.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tour_guide`
--

CREATE TABLE `tour_guide` (
  `id_tourguide` int(12) NOT NULL,
  `nama_tourguide` varchar(20) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` varchar(20) NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `bahasa` varchar(20) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `harga` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tour_guide`
--

INSERT INTO `tour_guide` (`id_tourguide`, `nama_tourguide`, `tanggal_lahir`, `alamat`, `no_telp`, `bahasa`, `gambar`, `harga`, `status`) VALUES
(31, 'ARIF ABDUR RAHMAN', '1991-07-16', 'Ds. Kebaman Kec. Sro', '2147483647', 'Inggris', 'gambar-8474.PNG', 250000, 1),
(32, 'ANGGUN NIRMALA SAFIT', '1990-08-15', 'Ds. Sukomaju Kec. SR', '87', 'Inggris', 'gambar-4823.PNG', 250000, 1),
(33, 'DEVITA ULINUHAYANTI', '1987-12-13', 'Ds. Kebaman Kec. Sro', '87', 'Mandarin', 'gambar-9296.PNG', 600000, 1),
(34, 'ANGGA DIHARJA FIRDAU', '1990-04-12', 'Ds. Kebaman Kec. Sro', '87', 'Inggris', 'gambar-7353.PNG', 250000, 1),
(35, 'FITRI NUR LAILY', '1990-04-20', 'Ds. Genteng Wetan  K', '85', 'Inggris', 'gambar-4872.PNG', 250000, 1),
(36, 'SUCI RAHMANINGTYAS', '1990-04-30', 'Ds. Genteng Kulon Ke', '81', 'Inggris', 'gambar-4173.PNG', 250000, 1),
(37, 'HARIYANTO', '1975-12-04', 'Ds. Ketapang Kec. Ka', '81', 'Inggris', 'gambar-6813.PNG', 250000, 1),
(38, 'NUR SHINTA', '1986-11-24', 'Ds. Setail Kec. Gent', '2147483647', 'Inggris', 'gambar-3802.PNG', 250000, 1),
(39, 'KHOIRON SUBAKTI', '1986-08-18', 'Ds. Bangorejo Kec. B', '2147483647', 'Inggris', 'gambar-9358.PNG', 250000, 1),
(40, 'FIIRLY KHOOFIDHA FAN', '1992-05-30', 'Kel. Tukangkayu Kec.', '2147483647', 'Inggris', 'gambar-4783.PNG', 250000, 1),
(41, 'SUPIYANTO', '1989-10-10', 'Kel. Giri Kec. Giri', '2147483647', 'Inggris', 'gambar-6363.PNG', 250000, 1),
(42, 'DINDA PUSPITA', '1992-05-17', 'Ds. Kedung Wungu Kec', '2147483647', 'Inggris', 'gambar-393.PNG', 250000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(255) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `level` enum('admin','touragent','tourguide','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `username`, `password`, `gambar`, `level`) VALUES
(21, 'Admin Genpi', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'gambar-5355.jpg', 'admin'),
(43, 'Jamul Pawaid', 'adminjamul', '21232f297a57a5a743894a0e4a801fc3', 'Admin-3535.jpg', 'admin'),
(44, 'joko', 'joko', '827ccb0eea8a706c4c34a16891f84e7b', 'Tour_guide-9099.jpg', 'tourguide'),
(45, 'test', 'joko', '827ccb0eea8a706c4c34a16891f84e7b', 'Tour_guide-2978.jpg', 'tourguide'),
(46, 'jaya raya', 'jayaraya', '827ccb0eea8a706c4c34a16891f84e7b', 'Touragent-6101.jpg', 'touragent');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id_galeri`);

--
-- Indexes for table `konfirmasi_p`
--
ALTER TABLE `konfirmasi_p`
  ADD PRIMARY KEY (`id_konfirmasi`);

--
-- Indexes for table `konfirmasi_t`
--
ALTER TABLE `konfirmasi_t`
  ADD PRIMARY KEY (`id_konfirmasi`);

--
-- Indexes for table `paket_wisata`
--
ALTER TABLE `paket_wisata`
  ADD PRIMARY KEY (`id_paketwisata`);

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id_pemesanan`);

--
-- Indexes for table `pemesanan_tourguide`
--
ALTER TABLE `pemesanan_tourguide`
  ADD PRIMARY KEY (`id_pemesananguide`);

--
-- Indexes for table `penginapan`
--
ALTER TABLE `penginapan`
  ADD PRIMARY KEY (`id_penginapan`);

--
-- Indexes for table `restaurant`
--
ALTER TABLE `restaurant`
  ADD PRIMARY KEY (`id_restaurant`);

--
-- Indexes for table `tour_agent`
--
ALTER TABLE `tour_agent`
  ADD PRIMARY KEY (`id_touragent`);

--
-- Indexes for table `tour_guide`
--
ALTER TABLE `tour_guide`
  ADD PRIMARY KEY (`id_tourguide`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id_galeri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `konfirmasi_p`
--
ALTER TABLE `konfirmasi_p`
  MODIFY `id_konfirmasi` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;
--
-- AUTO_INCREMENT for table `konfirmasi_t`
--
ALTER TABLE `konfirmasi_t`
  MODIFY `id_konfirmasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `paket_wisata`
--
ALTER TABLE `paket_wisata`
  MODIFY `id_paketwisata` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT for table `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `id_pemesanan` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=131;
--
-- AUTO_INCREMENT for table `pemesanan_tourguide`
--
ALTER TABLE `pemesanan_tourguide`
  MODIFY `id_pemesananguide` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `penginapan`
--
ALTER TABLE `penginapan`
  MODIFY `id_penginapan` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `restaurant`
--
ALTER TABLE `restaurant`
  MODIFY `id_restaurant` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `tour_agent`
--
ALTER TABLE `tour_agent`
  MODIFY `id_touragent` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `tour_guide`
--
ALTER TABLE `tour_guide`
  MODIFY `id_tourguide` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
