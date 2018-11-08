-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 08-Nov-2018 às 20:03
-- Versão do servidor: 5.7.17
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `desenvolvimento de sistemas`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `banco de dados`
--

CREATE TABLE `banco de dados` (
  `_Procedure` varchar(100) NOT NULL,
  `_Trigger` varchar(100) NOT NULL,
  `_Inserts` varchar(100) NOT NULL,
  `_Update` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `duvidas`
--

CREATE TABLE `duvidas` (
  `Nome` varchar(20) NOT NULL,
  `Email` varchar(35) NOT NULL,
  `Assunto` varchar(30) NOT NULL,
  `Recado` varchar(300) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `duvidas`
--

INSERT INTO `duvidas` (`Nome`, `Email`, `Assunto`, `Recado`) VALUES
('Gabriel', 'gabriel-jorge1999@hotmail.com', '1', 'eaeawe'),
('Gabriel', 'gabriel-jorge1999@hotmail.com', '1', 'esadasd'),
('Gabriel', 'gabriel-jorge1999@hotmail.com', '1', 'eae mano de boa'),
('Gabriel', 'gabriel-jorge1999@hotmail.com', 'Etec ZL', 'mano vai si fude');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
