-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 30 Ara 2023, 08:56:33
-- Sunucu sürümü: 10.4.32-MariaDB
-- PHP Sürümü: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `tncemlak`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ev2`
--

CREATE TABLE `ev2` (
  `id` int(11) NOT NULL,
  `ad` varchar(255) NOT NULL,
  `soyad` varchar(255) NOT NULL,
  `oda` varchar(255) NOT NULL,
  `tel` bigint(255) NOT NULL,
  `resim` varchar(255) NOT NULL,
  `gorus` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `ev2`
--

INSERT INTO `ev2` (`id`, `ad`, `soyad`, `oda`, `tel`, `resim`, `gorus`) VALUES
(6, 'mwhmet', 'tnc', '12', 34242, '', 'wdaw'),
(7, 'mehmet', 'mustafa', '23', 3242432, '', 'öamsndjadhw'),
(8, 'memet mustafa', 'tunc', '21', 5465984483, '', 'mwqdjqwdhqwnd');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ilanver`
--

CREATE TABLE `ilanver` (
  `id` int(11) NOT NULL,
  `baslik` varchar(50) NOT NULL,
  `resim` varchar(50) NOT NULL,
  `metrekare` varchar(50) NOT NULL,
  `odasayi` varchar(50) NOT NULL,
  `fiyat` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `ilanver`
--

INSERT INTO `ilanver` (`id`, `baslik`, `resim`, `metrekare`, `odasayi`, `fiyat`) VALUES
(1, 'SATILIK', '../images/picture1.jpg', '122', '3+10', 2700000),
(2, 'KİRALIK', '../images/picture3.jpg', '255', '9+1', 670000000),
(3, 'KİRALIK', '../images/picture9.jpg', '186', '9+1', 251470);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `ev2`
--
ALTER TABLE `ev2`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `ad` (`ad`,`soyad`,`oda`,`tel`,`resim`,`gorus`) USING HASH,
  ADD KEY `tel` (`tel`);

--
-- Tablo için indeksler `ilanver`
--
ALTER TABLE `ilanver`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `ev2`
--
ALTER TABLE `ev2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Tablo için AUTO_INCREMENT değeri `ilanver`
--
ALTER TABLE `ilanver`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
