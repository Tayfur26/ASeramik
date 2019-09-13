-- phpMyAdmin SQL Dump
-- version 3.4.3.2
-- http://www.phpmyadmin.net
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 01 Oca 2018, 19:01:17
-- Sunucu sürümü: 5.5.15
-- PHP Sürümü: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Veritabanı: `seramik`
--
CREATE DATABASE `seramik` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `seramik`;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kullanici` varchar(20) NOT NULL,
  `parola` varchar(16) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Tablo döküm verisi `admin`
--

INSERT INTO `admin` (`id`, `kullanici`, `parola`) VALUES
(1, 'admin', '12345');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ilet`
--

CREATE TABLE IF NOT EXISTS `ilet` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `adsoyad` varchar(50) NOT NULL,
  `konu` varchar(30) NOT NULL,
  `acikla` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Tablo döküm verisi `ilet`
--

INSERT INTO `ilet` (`id`, `adsoyad`, `konu`, `acikla`) VALUES
(2, 'asd', 'abba', '');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kurs`
--

CREATE TABLE IF NOT EXISTS `kurs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ad` varchar(30) NOT NULL,
  `soyad` varchar(30) NOT NULL,
  `tel` varchar(30) NOT NULL,
  `ktip` varchar(30) NOT NULL,
  `kgun` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Tablo döküm verisi `kurs`
--

INSERT INTO `kurs` (`id`, `ad`, `soyad`, `tel`, `ktip`, `kgun`) VALUES
(1, 'Tayfur', 'Dindar', '', 'tekseans', 'ptesi');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
