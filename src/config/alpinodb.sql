-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Nov 16, 2020 at 07:41 PM
-- Server version: 5.7.24
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alpinodb`
--

-- --------------------------------------------------------

--
-- Table structure for table `modelo_impressora`
--

CREATE TABLE `modelo_impressora` (
  `id` int(10) UNSIGNED NOT NULL,
  `modelo_impressora` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `modelo_impressora`
--

INSERT INTO `modelo_impressora` (`id`, `modelo_impressora`) VALUES
(6, 'BROTHER DCP-L5652DN'),
(5, 'CANON IR2525'),
(4, 'OKI B431'),
(3, 'OKI MB491+');

-- --------------------------------------------------------

--
-- Table structure for table `modelo_maquina`
--

CREATE TABLE `modelo_maquina` (
  `id` int(10) UNSIGNED NOT NULL,
  `modelo_maquina` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `modelo_maquina`
--

INSERT INTO `modelo_maquina` (`id`, `modelo_maquina`) VALUES
(7, 'DELL LATITUDE 3440'),
(5, 'DELL LATITUDE E5140'),
(8, 'DELL LATITUDE E5410'),
(9, 'DELL LATITUDE E5420'),
(10, 'DELL LATITUDE E5430'),
(11, 'DELL LATITUDE E6430'),
(12, 'DELL OPTIPLEX 3010'),
(13, 'DELL OPTIPLEX 320'),
(14, 'DELL OPTIPLEX 380'),
(15, 'DELL OPTIPLEX 390'),
(16, 'DELL OPTIPLEX 745'),
(17, 'DELL OPTIPLEX 755'),
(18, 'DELL OPTIPLEX GX 260'),
(19, 'DELL OPTIPLEX GX 620'),
(6, 'DELL POWER EDGE T410'),
(20, 'DELL PRECISION T3500'),
(22, 'DELL PRECISION T3600'),
(23, 'DELL VOSTRO 1014'),
(24, 'DELL VOSTRO 220S'),
(25, 'DELL VOSTRO 3460'),
(28, 'LENOVO IDEIAPAD B320'),
(29, 'LENOVO THINKPAD T440P'),
(3, 'LENOVO V520S'),
(27, 'LENOVO W10 S510'),
(26, 'NCOMPUTING');

-- --------------------------------------------------------

--
-- Table structure for table `modelo_ms_office`
--

CREATE TABLE `modelo_ms_office` (
  `id` int(10) UNSIGNED NOT NULL,
  `modelo_ms_office` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `modelo_ms_office`
--

INSERT INTO `modelo_ms_office` (`id`, `modelo_ms_office`) VALUES
(8, 'LINUX  LIBRE OFFICE'),
(7, 'MICROSOFT HOME & BUSINESS 2007'),
(6, 'MICROSOFT HOME & BUSINESS 2010'),
(5, 'MICROSOFT HOME & BUSINESS 2013'),
(3, 'MICROSOFT HOME & BUSINESS 2016'),
(4, 'MICROSOFT OFFICE 365');

-- --------------------------------------------------------

--
-- Table structure for table `modelo_ramal`
--

CREATE TABLE `modelo_ramal` (
  `id` int(10) UNSIGNED NOT NULL,
  `modelo_ramal` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `modelo_ramal`
--

INSERT INTO `modelo_ramal` (`id`, `modelo_ramal`) VALUES
(5, 'YEALINK SIP-T19P E2');

-- --------------------------------------------------------

--
-- Table structure for table `processador`
--

CREATE TABLE `processador` (
  `id` int(10) UNSIGNED NOT NULL,
  `processador` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `processador`
--

INSERT INTO `processador` (`id`, `processador`) VALUES
(11, 'INTEL CORE I3'),
(7, 'INTEL CORE I5'),
(8, 'INTEL CORE I7'),
(9, 'INTEL CORE I9'),
(4, 'INTEL CORE PENTIUM'),
(6, 'INTEL DUAL CORE'),
(10, 'INTEL XEON');

-- --------------------------------------------------------

--
-- Table structure for table `setor`
--

CREATE TABLE `setor` (
  `id` int(10) UNSIGNED NOT NULL,
  `setor` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `setor`
--

INSERT INTO `setor` (`id`, `setor`) VALUES
(21, 'ALMOXARIFADO'),
(28, 'ALMOXARIFADO TUBOS'),
(3, 'COMPRAS'),
(24, 'CURVADEIRA'),
(7, 'DESENVOLVIMENTO'),
(13, 'DIRETORIA'),
(30, 'ENGENHARIA'),
(20, 'EXPEDIÇÃO'),
(26, 'FERRAMENTARIA'),
(4, 'FINANCEIRO'),
(5, 'FISCAL'),
(10, 'GERENTE COMERCIAL'),
(9, 'GERENTE CONTROLADORIA'),
(12, 'GERENTE INDUSTRIAL'),
(11, 'GERENTE LOGÍSTICA'),
(17, 'LOGÍSTICA'),
(27, 'MANUTENÇÃO'),
(29, 'METROLOGIA'),
(8, 'PROJETOS'),
(15, 'QUALIDADE'),
(19, 'RECEPÇÃO'),
(18, 'RECURSOS HUMANOS'),
(23, 'SALA CLEAN'),
(16, 'SGI'),
(25, 'SOLDA'),
(2, 'TECNOLOGIA DA INFORMAÇÃO'),
(14, 'VENDAS');

-- --------------------------------------------------------

--
-- Table structure for table `sistema_operacional`
--

CREATE TABLE `sistema_operacional` (
  `id` int(10) UNSIGNED NOT NULL,
  `sistema_operacional` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sistema_operacional`
--

INSERT INTO `sistema_operacional` (`id`, `sistema_operacional`) VALUES
(9, 'LINUX'),
(2, 'MICROSOFT WINDOWS 10'),
(8, 'MICROSOFT WINDOWS 7 32 BITS'),
(7, 'MICROSOFT WINDOWS 7 64 BITS'),
(5, 'MICROSOFT WINDOWS 8'),
(6, 'MICROSOFT WINDOWS SERVER 2019');

-- --------------------------------------------------------

--
-- Table structure for table `tipo_maquina`
--

CREATE TABLE `tipo_maquina` (
  `id` int(10) UNSIGNED NOT NULL,
  `tipo_maquina` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tipo_maquina`
--

INSERT INTO `tipo_maquina` (`id`, `tipo_maquina`) VALUES
(2, 'DESKTOP'),
(1, 'NOTEBOOK'),
(3, 'SERVIDOR'),
(4, 'VIRTUALIZAÇÃO');

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE `usuario` (
  `wlan` varchar(45) NOT NULL,
  `ip` int(10) UNSIGNED NOT NULL,
  `usuario` varchar(100) NOT NULL,
  `setor` varchar(100) NOT NULL,
  `homeOffice` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`wlan`, `ip`, `usuario`, `setor`, `homeOffice`) VALUES
('192.168.1.', 1, 'TESTE', 'MANUTENÇÃO', 'SIM');

-- --------------------------------------------------------

--
-- Table structure for table `wlan`
--

CREATE TABLE `wlan` (
  `id` int(10) UNSIGNED NOT NULL,
  `wlan` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `wlan`
--

INSERT INTO `wlan` (`id`, `wlan`) VALUES
(1, '192.168.1.'),
(2, '192.168.2.'),
(3, '192.168.3.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `modelo_impressora`
--
ALTER TABLE `modelo_impressora`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `modelo_impressora` (`modelo_impressora`);

--
-- Indexes for table `modelo_maquina`
--
ALTER TABLE `modelo_maquina`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `modelo_maquina` (`modelo_maquina`);

--
-- Indexes for table `modelo_ms_office`
--
ALTER TABLE `modelo_ms_office`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `modelo_ms_office` (`modelo_ms_office`);

--
-- Indexes for table `modelo_ramal`
--
ALTER TABLE `modelo_ramal`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `modelo_ramal` (`modelo_ramal`);

--
-- Indexes for table `processador`
--
ALTER TABLE `processador`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `processador` (`processador`);

--
-- Indexes for table `setor`
--
ALTER TABLE `setor`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `setor` (`setor`);

--
-- Indexes for table `sistema_operacional`
--
ALTER TABLE `sistema_operacional`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sistema_operacional` (`sistema_operacional`);

--
-- Indexes for table `tipo_maquina`
--
ALTER TABLE `tipo_maquina`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tipo_maquina` (`tipo_maquina`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`ip`),
  ADD UNIQUE KEY `ip` (`ip`),
  ADD UNIQUE KEY `usuario` (`usuario`);

--
-- Indexes for table `wlan`
--
ALTER TABLE `wlan`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `wlan` (`wlan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `modelo_impressora`
--
ALTER TABLE `modelo_impressora`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `modelo_maquina`
--
ALTER TABLE `modelo_maquina`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `modelo_ms_office`
--
ALTER TABLE `modelo_ms_office`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `modelo_ramal`
--
ALTER TABLE `modelo_ramal`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `processador`
--
ALTER TABLE `processador`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `setor`
--
ALTER TABLE `setor`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `sistema_operacional`
--
ALTER TABLE `sistema_operacional`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tipo_maquina`
--
ALTER TABLE `tipo_maquina`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `wlan`
--
ALTER TABLE `wlan`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
