-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Dec 22, 2020 at 07:35 PM
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
-- Database: `alpinodbteste`
--

-- --------------------------------------------------------

--
-- Table structure for table `geral`
--

CREATE TABLE `geral` (
  `ip` int(10) UNSIGNED NOT NULL,
  `usuario` varchar(100) NOT NULL,
  `setor` varchar(100) NOT NULL,
  `homeOffice` varchar(10) NOT NULL,
  `tag` varchar(100) NOT NULL,
  `modelo` varchar(100) NOT NULL,
  `tipo` varchar(100) NOT NULL,
  `processador` varchar(100) NOT NULL,
  `memoria` varchar(100) NOT NULL,
  `armazenamento` varchar(100) NOT NULL,
  `sistema_operacional` varchar(100) NOT NULL,
  `nfcompra` varchar(100) NOT NULL,
  `datacompra` varchar(100) NOT NULL,
  `distribuidora` varchar(100) NOT NULL,
  `nfgarantia` varchar(100) NOT NULL,
  `datagarantia` varchar(100) NOT NULL,
  `inicio` varchar(10) NOT NULL,
  `chave_produto` varchar(100) NOT NULL,
  `versao_office` varchar(100) NOT NULL,
  `ipRamal` varchar(10) NOT NULL,
  `ramal` varchar(100) NOT NULL,
  `modelo_ramal` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `maquina`
--

CREATE TABLE `maquina` (
  `id` int(10) UNSIGNED NOT NULL,
  `tag` varchar(100) NOT NULL,
  `modelo` varchar(100) NOT NULL,
  `tipo` varchar(100) NOT NULL,
  `pcid` varchar(100) NOT NULL,
  `processador` varchar(100) NOT NULL,
  `memoria` varchar(100) NOT NULL,
  `armazenamento` varchar(100) NOT NULL,
  `tipo_armazenamento` varchar(100) NOT NULL,
  `sistema_operacional` varchar(100) NOT NULL,
  `nfcompra` varchar(100) NOT NULL,
  `datacompra` varchar(100) NOT NULL,
  `distribuidora` varchar(100) NOT NULL,
  `nfgarantia` varchar(100) NOT NULL,
  `datagarantia` varchar(100) NOT NULL,
  `statusmaq` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `maquina`
--

INSERT INTO `maquina` (`id`, `tag`, `modelo`, `tipo`, `pcid`, `processador`, `memoria`, `armazenamento`, `tipo_armazenamento`, `sistema_operacional`, `nfcompra`, `datacompra`, `distribuidora`, `nfgarantia`, `datagarantia`, `statusmaq`) VALUES
(1, 'PE0477WF', 'LENOVO V520S', 'DESKTOP', 'TECNOLOGIA - 81', 'INTEL CORE I5', '8 GB', '240 GB', 'SSD', 'MICROSOFT WINDOWS 10', '-', '23/05/2019', '-', '-', '22/05/2020', 'ATIVO'),
(4, '6WBKQX1', 'DELL POWER EDGE T440', 'SERVIDOR', 'ALPINOSERVER', 'INTEL XEON', '32 GB', '2 TB', 'HDD E SSD', 'MICROSOFT WINDOWS SERVER 2019', '-', '28/06/2020', 'DELL', '-', '28/06/2022', 'ATIVO'),
(5, 'PE036SKL', 'LENOVO IDEIAPAD B320', 'NOTEBOOK', 'SGI - 5', 'INTEL CORE I5', '4 GB', '240 GB', 'SSD', 'MICROSOFT WINDOWS 10', '-', '06/04/2018', '-', '-', '05/04/2021', 'ATIVO'),
(6, 'PE036SL0', 'LENOVO IDEIAPAD B320', 'NOTEBOOK', 'FINANCEIRO10', 'INTEL CORE I5', '4 GB', '240 GB', 'SSD', 'MICROSOFT WINDOWS 10', '-', '06/04/2018', '-', '-', '05/04/2021', 'ATIVO'),
(7, 'PE0543T7', 'LENOVO THINKPAD E490', 'NOTEBOOK', 'LOGISTICA - IP13', 'INTEL CORE I5', '8 GB', '240 GB', 'SSD', 'MICROSOFT WINDOWS 10', '-', '19/12/2019', '-', '-', '18/12/2022', 'ATIVO'),
(8, 'PE0543TE', 'LENOVO THINKPAD E490', 'NOTEBOOK', 'FISCAL - IP16', 'INTEL CORE I5', '8 GB', '240 GB', 'SSD', 'MICROSOFT WINDOWS 10', '-', '11/07/2019', '-', '-', '11/06/2022', 'ATIVO'),
(9, 'PE05GKNQ', 'LENOVO THINKPAD E490', 'NOTEBOOK', 'DESENVOLVER - 18', 'INTEL CORE I5', '8 GB', '240 GB', 'SSD', 'MICROSOFT WINDOWS 10', '-', '12/03/2020', '-', '-', '11/03/2023', 'ATIVO'),
(10, 'PE03JKQV', 'LENOVO IDEIAPAD B320', 'NOTEBOOK', 'QUALIDADE - 19', 'INTEL CORE I5', '4 GB', '240 GB', 'SSD', 'MICROSOFT WINDOWS 10', '-', '09/07/2018', '-', '-', '08/07/2021', 'ATIVO'),
(11, '70JMZX1', 'DELL LATITUDE E6430', 'NOTEBOOK', 'CLEAN - 21', 'INTEL CORE I5', '4 GB', '1 TB', 'HDD', 'MICROSOFT WINDOWS 10', '-', '27/08/2014', '-', '-', '27/08/2016', 'ATIVO'),
(12, 'PE0543TC', 'LENOVO THINKPAD E490', 'NOTEBOOK', 'COMPRAS - 24', 'INTEL CORE I5', '8 GB', '240 GB', 'SSD', 'MICROSOFT WINDOWS 10', '-', '18/12/2019', '-', '-', '17/12/2022', 'ATIVO'),
(13, 'PE04023G', 'LENOVO IDEIAPAD B330S', 'NOTEBOOK', 'DESENVOL - 26', 'INTEL CORE I5', '8 GB', '240 GB', 'SSD', 'MICROSOFT WINDOWS 10', '-', '11/02/2019', '-', '-', '10/02/2020', 'ATIVO'),
(14, 'PE040238', 'LENOVO IDEIAPAD B330S', 'NOTEBOOK', 'ENGENHARIA31', 'INTEL CORE I5', '8 GB', '240 GB', 'SSD', 'MICROSOFT WINDOWS 10', '-', '06/03/2019', '-', '-', '05/03/2020', 'ATIVO'),
(15, 'PE036Y3A', 'LENOVO IDEIAPAD B320', 'NOTEBOOK', 'COMPRAS - IP33', 'INTEL CORE I5', '4 GB', '240 GB', 'SSD', 'MICROSOFT WINDOWS 10', '-', '06/04/2018', '-', '-', '05/04/2021', 'ATIVO'),
(16, 'PE03JKR8', 'LENOVO IDEIAPAD B320', 'NOTEBOOK', 'GERENTE - 34', 'INTEL CORE I5', '4 GB', '240 GB', 'SSD', 'MICROSOFT WINDOWS 10', '-', '09/07/2018', '-', '-', '08/07/2021', 'ATIVO'),
(17, 'PE039K6G', 'LENOVO IDEIAPAD B320', 'NOTEBOOK', 'QUALIDADE - 36', 'INTEL CORE I5', '4 GB', '240 GB', 'SSD', 'MICROSOFT WINDOWS 10', '-', '07/06/2018', '-', '-', '06/06/2019', 'ATIVO'),
(18, 'PE03Z9N6', 'LENOVO IDEIAPAD B330S', 'NOTEBOOK', 'SGI - IP37', 'INTEL CORE I5', '8 GB', '240 GB', 'SSD', 'MICROSOFT WINDOWS 10', '-', '04/12/2018', '-', '-', '03/12/2019', 'ATIVO'),
(19, 'PE054F32', 'LENOVO THINKPAD E490', 'NOTEBOOK', 'PCP - IP43', 'INTEL CORE I5', '8 GB', '240 GB', 'SSD', 'MICROSOFT WINDOWS 10', '-', '19/12/2019', '-', '-', '18/12/2022', 'ATIVO'),
(20, 'PE048X7T', 'LENOVO THINKPAD E480', 'NOTEBOOK', 'ENGENHARIA - 44', 'INTEL CORE I7', '8 GB', '240 GB', 'SSD', 'MICROSOFT WINDOWS 10', '-', '05/04/2019', '-', '-', '04/04/2020', 'ATIVO'),
(21, 'PE0543TF', 'LENOVO THINKPAD E490', 'NOTEBOOK', 'LOGISTICA - I45', 'INTEL CORE I5', '8 GB', '240 GB', 'SSD', 'MICROSOFT WINDOWS 10', '-', '19/12/2019', '-', '-', '18/12/2022', 'ATIVO'),
(22, 'PC015UEP', 'LENOVO THINKPAD T440P', 'NOTEBOOK', 'MARCO - 46', 'INTEL CORE I5', '16 GB', '240 GB', 'SSD', 'MICROSOFT WINDOWS 10', '-', '11/11/2015', '-', '-', '10/11/2018', 'ATIVO'),
(23, '2BZ53N2', 'DELL VOSTRO 14 3468', 'NOTEBOOK', 'VENDAS - IP47', 'INTEL CORE I5', '4 GB', '240 GB', 'SSD', 'MICROSOFT WINDOWS 10', '-', '10/01/2018', '-', '-', '24/02/2021', 'ATIVO'),
(24, 'PE054F27', 'LENOVO THINKPAD E490', 'NOTEBOOK', 'QUALIDADE - 54', 'INTEL CORE I5', '8 GB', '240 GB', 'SSD', 'MICROSOFT WINDOWS 10', '-', '27/11/2019', '-', '-', '26/11/2022', 'ATIVO'),
(25, 'PE04023C', 'LENOVO IDEIAPAD B330S', 'NOTEBOOK', 'ENGENHARIA - 55', 'INTEL CORE I5', '8 GB', '240 GB', 'SSD', 'MICROSOFT WINDOWS 10', '-', '11/02/2019', '-', '-', '10/02/2020', 'ATIVO'),
(26, 'PE03Z9M2', 'LENOVO IDEIAPAD B330S', 'NOTEBOOK', 'PAMPLONA - IP57', 'INTEL CORE I5', '8 GB', '240 GB', 'SSD', 'MICROSOFT WINDOWS 10', '-', '18/02/2019', '-', '-', '17/02/2020', 'ATIVO'),
(27, 'PE039K49', 'LENOVO IDEIAPAD B320', 'NOTEBOOK', 'SERGIO - IP59', 'INTEL CORE I5', '4 GB', '240 GB', 'SSD', 'MICROSOFT WINDOWS 10', '-', '16/03/2018', '-', '-', '15/03/2021', 'ATIVO'),
(28, 'PE036Y69', 'LENOVO IDEIAPAD B320', 'NOTEBOOK', 'COMERCIAL - 63', 'INTEL CORE I5', '4 GB', '240 GB', 'SSD', 'MICROSOFT WINDOWS 10', '-', '04/06/2018', '-', '-', '04/05/2021', 'ATIVO'),
(29, 'D9QC6W1', 'DELL LATITUDE E5430', 'NOTEBOOK', 'PRODUCAO65', 'INTEL CORE I3', '4 GB', '240 GB', 'SSD', 'MICROSOFT WINDOWS 10', '-', '10/04/2013', '-', '-', '11/04/2016', 'ATIVO'),
(30, 'HGPGQM2', 'DELL VOSTRO 14 3468', 'NOTEBOOK', 'QUALIDADE - 67', 'INTEL CORE I5', '4 GB', '240 GB', 'SSD', 'MICROSOFT WINDOWS 10', '-', '04/01/2018', '-', '-', '06/03/2019', 'ATIVO'),
(31, 'PE03ZQB3', 'LENOVO IDEIAPAD B330S', 'NOTEBOOK', 'LOGISTICA - 70', 'INTEL CORE I5', '8 GB', '240 GB', 'SSD', 'MICROSOFT WINDOWS 10', '-', '13/02/2019', '-', '-', '12/02/2020', 'ATIVO'),
(32, 'PE040232', 'LENOVO IDEIAPAD B330S', 'NOTEBOOK', 'ENGENHARIA - 73', 'INTEL CORE I5', '8 GB', '240 GB', 'SSD', 'MICROSOFT WINDOWS 10', '-', '11/02/2019', '-', '-', '10/02/2020', 'ATIVO'),
(33, 'PE03Z9PU', 'LENOVO IDEIAPAD B330S', 'NOTEBOOK', 'MANUTENCAO - IP74', 'INTEL CORE I5', '8 GB', '240 SSD', 'SSD', 'MICROSOFT WINDOWS 10', '-', '12/02/2019', '-', '-', '11/02/2020', 'ATIVO'),
(34, 'PE04022H', 'LENOVO IDEIAPAD B330S', 'NOTEBOOK', 'RH - IP75', 'INTEL CORE I5', '8 GB', '240 GB', 'SSD', 'MICROSOFT WINDOWS 10', '-', '04/12/2018', '-', '-', '03/12/2019', 'ATIVO'),
(35, 'PE04024C', 'LENOVO IDEIAPAD B330S', 'NOTEBOOK', 'ENGENHARIA - 87', 'INTEL CORE I5', '8 GB', '240 GB', 'SSD', 'MICROSOFT WINDOWS 10', '-', '04/12/2018', '-', '-', '03/12/2019', 'ATIVO'),
(36, 'PE02KTA8', 'LENOVO V310 - 14ISK', 'NOTEBOOK', 'EVIE - 89', 'INTEL CORE I5', '4 GB', '500 GB', 'HDD', 'MICROSOFT WINDOWS 10', '-', '29/03/2017', '-', '-', '28/03/2020', 'ATIVO'),
(39, 'PE0543T6', 'LENOVO THINKPAD E490', 'NOTEBOOK', 'TECNOLOGIA - 29', 'INTEL CORE I5', '8 GB', '240 GB', 'SSD', 'MICROSOFT WINDOWS 10', '-', '18/12/2019', '-', '-', '17/12/2022', 'ATIVO'),
(40, 'PE06L825', 'LENOVO THINKPAD E14', 'NOTEBOOK', 'RH-75', 'INTEL CORE I5', '8 GB', '240 GB', 'SSD', 'MICROSOFT WINDOWS 10', '220798', '05/12/2020', 'LENOVO', '21290', '18/01/2024', 'ATIVO'),
(41, 'PE06L81T', 'LENOVO THINKPAD E14', 'NOTEBOOK', 'TECNOLOGIA-IP29', 'INTEL CORE I5', '8 GB', '240 GB', 'SSD', 'MICROSOFT WINDOWS 10', '220798', '05/12/2020', 'LENOVO', '21290', '18/01/2024', 'ATIVO'),
(42, 'PE06L82H', 'LENOVO THINKPAD E14', 'NOTEBOOK', 'ENGENHARIA-IP55', 'INTEL CORE I5', '8 GB', '240 GB', 'SSD', 'MICROSOFT WINDOWS 10', '220798', '05/12/2020', 'LENOVO', '21290', '18/01/2024', 'ATIVO'),
(43, 'PE06M1WQ', 'LENOVO THINKPAD E14', 'NOTEBOOK', 'ALONSO-82', 'INTEL CORE I7', '8 GB', '240 GB', 'SSD', 'MICROSOFT WINDOWS 10', '220798', '10/12/2020', 'LENOVO', '21290', '09/12/2023', 'ATIVO'),
(44, 'PE054Y41', 'LENOVO THINKPAD E490', 'NOTEBOOK', 'PROJETOS-12', 'INTEL CORE I7', '8 GB', '240 GB', 'SSD', 'MICROSOFT WINDOWS 10', '-', '08/01/2020', '-', '-', '07/01/2023', 'ATIVO'),
(45, 'PE06L827', 'LENOVO THINKPAD E14', 'NOTEBOOK', 'VENDAS-63', 'INTEL CORE I5', '8 GB', '240 GB', 'SSD', 'MICROSOFT WINDOWS 10', '220798', '05/12/2020', 'LENOVO', '21290', '18/01/2024', 'ATIVO');

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
(32, 'DELL POWER EDGE T440'),
(20, 'DELL PRECISION T3500'),
(22, 'DELL PRECISION T3600'),
(23, 'DELL VOSTRO 1014'),
(34, 'DELL VOSTRO 14 3468'),
(24, 'DELL VOSTRO 220S'),
(25, 'DELL VOSTRO 3460'),
(28, 'LENOVO IDEIAPAD B320'),
(33, 'LENOVO IDEIAPAD B330S'),
(37, 'LENOVO THINKPAD E14'),
(36, 'LENOVO THINKPAD E480'),
(30, 'LENOVO THINKPAD E490'),
(29, 'LENOVO THINKPAD T440P'),
(35, 'LENOVO V310 - 14ISK'),
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
(7, 'GRANDSTREAM DP722'),
(6, 'GRANDSTREAM GXP1628'),
(5, 'YEALINK SIP-T19P E2');

-- --------------------------------------------------------

--
-- Table structure for table `msoffice`
--

CREATE TABLE `msoffice` (
  `id` int(10) UNSIGNED NOT NULL,
  `inicio` varchar(10) NOT NULL,
  `chave_produto` varchar(100) NOT NULL,
  `versao_office` varchar(100) NOT NULL,
  `statusoffice` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `msoffice`
--

INSERT INTO `msoffice` (`id`, `inicio`, `chave_produto`, `versao_office`, `statusoffice`) VALUES
(3, 'L.L.O', 'LINUX LIBRE OFFICE', 'LINUX  LIBRE OFFICE', 'ATIVO'),
(4, 'OFF 365', 'MICROSOFT OFFICE 365', 'MICROSOFT OFFICE 365', 'ATIVO'),
(5, 'PGP48', 'PGP48-VNMX6-PKK3G-GXMQJ-PKCMK', 'MICROSOFT HOME & BUSINESS 2016', 'INATIVO'),
(6, 'BH2N2', 'BH2N2-QXFHF-P66B3-DRM8H-CYT7X', 'MICROSOFT HOME & BUSINESS 2016', 'INATIVO'),
(7, 'D8P4N', 'D8P4N-9BP7R-PW4H8-2WMCD-G8X6P', 'MICROSOFT HOME & BUSINESS 2013', 'INATIVO'),
(8, 'QPNWV', 'QPNWV-DVDF2-RD76J-QRTKV-6XVGP', 'MICROSOFT HOME & BUSINESS 2013', 'INATIVO'),
(9, '7NG4M', '7NG4M-R98XQ-VXQ8T-V8MCP-2DHGP', 'MICROSOFT HOME & BUSINESS 2013', 'INATIVO'),
(10, 'XNRRD', 'XNRRD-JV4DM-64RGH-W2CYQ-PYQTP', 'MICROSOFT HOME & BUSINESS 2013', 'INATIVO'),
(11, 'X66PG', 'X66PG-N7YMF-TW9YG-QF736-234P2', 'MICROSOFT HOME & BUSINESS 2013', 'INATIVO'),
(12, 'YPFQ9', 'YPFQ9-DKNXW-K3CPV-Y6D3V-DRTBK', 'MICROSOFT HOME & BUSINESS 2016', 'INATIVO'),
(13, '6JTTF', '6JTTF-Q3298-Y8GTJ-9CVG8-JP42V', 'MICROSOFT HOME & BUSINESS 2010', 'INATIVO'),
(14, '7V3CG', '7V3CG-9C7FJ-PG36T-GW7PP-R9KFJ', 'MICROSOFT HOME & BUSINESS 2010', 'INATIVO'),
(15, 'CMDWD', 'CMDWD-YTTYD-JXKMP-VX7JD-832W3', 'MICROSOFT HOME & BUSINESS 2010', 'INATIVO'),
(16, 'PKR33', 'PKR33-3VFRB-QJQJM-B62PK-7X4TT', 'MICROSOFT HOME & BUSINESS 2010', 'INATIVO'),
(17, 'TV2FJ', 'TV2FJ-K3767-48T8B-9PB9J-BJW4G', 'MICROSOFT HOME & BUSINESS 2010', 'INATIVO'),
(18, '6TKPM', '6TKPM-K9WV7-26KR7-F92TX-6RCMH', 'MICROSOFT HOME & BUSINESS 2010', 'INATIVO'),
(19, '9DYFM', '9DYFM-2C3CM-DQHGT-498VW-V22GP', 'MICROSOFT HOME & BUSINESS 2010', 'INATIVO'),
(20, 'H4HXX', 'H4HXX-JT8CQ-72CWW-GRW4T-VR8FM', 'MICROSOFT HOME & BUSINESS 2010', 'INATIVO'),
(21, 'YFMQD', 'YFMQD-9Q663-79WKK-86RBC-XG2VX', 'MICROSOFT HOME & BUSINESS 2010', 'INATIVO'),
(22, '72TRV', '72TRV-DWCKB-2W26C-BY8C8-R86MT', 'MICROSOFT HOME & BUSINESS 2010', 'INATIVO'),
(23, '6R728', '6R728-YDHR3-QX2TC-BB4HC-B8KPQ', 'MICROSOFT HOME & BUSINESS 2010', 'INATIVO'),
(24, '9G7CM', '9G7CM-T9J7J-MCH2X-RRBXP-7RHRP', 'MICROSOFT HOME & BUSINESS 2010', 'INATIVO'),
(25, 'MG2PF', 'MG2PF-7QQQP-682TY-QQGXK-R8Q3J', 'MICROSOFT HOME & BUSINESS 2010', 'INATIVO'),
(26, '7VQMY', '7VQMY-84JHW-2MQ3Q-6VXWH-4Y4BP', 'MICROSOFT HOME & BUSINESS 2010', 'INATIVO'),
(27, '6JKYQ', '6JKYQ-YTW2R-7XFQJ-M337D-QB9C9', 'MICROSOFT HOME & BUSINESS 2010', 'INATIVO'),
(28, '7N89X', '7N89X-2MV46-6H67T-8RT6X-4JM22', 'MICROSOFT HOME & BUSINESS 2010', 'INATIVO'),
(29, 'P7MFG', 'P7MFG-GCFR2-W2PYW-V89TQ-TVXYB', 'MICROSOFT HOME & BUSINESS 2010', 'INATIVO'),
(30, 'Y9CNG', 'Y9CNG-YJ6HD-374CT-2V9GK-DYH39', 'MICROSOFT HOME & BUSINESS 2016', 'INATIVO');

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
-- Table structure for table `ramal`
--

CREATE TABLE `ramal` (
  `ip` int(10) UNSIGNED NOT NULL,
  `ramal` varchar(100) NOT NULL,
  `modelo_ramal` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ramal`
--

INSERT INTO `ramal` (`ip`, `ramal`, `modelo_ramal`) VALUES
(1, 'IP101 - 9101', 'YEALINK SIP-T19P E2'),
(2, 'IP102 - 9102', 'YEALINK SIP-T19P E2'),
(3, 'IP103 - 9103', 'YEALINK SIP-T19P E2'),
(4, 'IP104 - 9104', 'YEALINK SIP-T19P E2'),
(5, 'IP105 - 9105', 'YEALINK SIP-T19P E2'),
(6, 'IP106 - 9106', 'YEALINK SIP-T19P E2'),
(7, 'IP107 - 9107', 'GRANDSTREAM GXP1628'),
(8, 'IP108 - 9108', 'YEALINK SIP-T19P E2'),
(9, 'IP109 - 9109', 'YEALINK SIP-T19P E2'),
(10, 'IP110 - 9110', 'YEALINK SIP-T19P E2'),
(11, 'IP111 - 9111', 'YEALINK SIP-T19P E2'),
(12, 'IP112 - 9112', 'YEALINK SIP-T19P E2'),
(13, 'IP113 - 9113', 'YEALINK SIP-T19P E2'),
(14, 'IP114 - 9114', 'YEALINK SIP-T19P E2'),
(15, 'IP115 - 9115', 'YEALINK SIP-T19P E2'),
(16, 'IP116 - 9116', 'YEALINK SIP-T19P E2'),
(17, 'IP117 - 9117', 'YEALINK SIP-T19P E2'),
(18, 'IP118 - 9118', 'YEALINK SIP-T19P E2'),
(19, 'IP119 - 9119', 'YEALINK SIP-T19P E2'),
(20, 'IP120 - 9120', 'YEALINK SIP-T19P E2'),
(21, 'IP121 - 9121', 'YEALINK SIP-T19P E2'),
(22, 'IP122 - 9122', 'YEALINK SIP-T19P E2'),
(23, 'IP123 - 9123', 'YEALINK SIP-T19P E2'),
(24, 'IP124 - 9124', 'YEALINK SIP-T19P E2'),
(25, 'IP125 - 9125', 'YEALINK SIP-T19P E2'),
(26, 'IP126 - 9126', 'YEALINK SIP-T19P E2'),
(27, 'IP127 - 9127', 'YEALINK SIP-T19P E2'),
(28, 'IP128 - 9128', 'YEALINK SIP-T19P E2'),
(29, 'IP129 - 9129', 'YEALINK SIP-T19P E2'),
(30, 'IP130 - 9130', 'YEALINK SIP-T19P E2'),
(31, 'IP131 - 9131', 'YEALINK SIP-T19P E2'),
(32, 'IP132 - 9132', 'YEALINK SIP-T19P E2'),
(33, 'IP133 - 9133', 'YEALINK SIP-T19P E2'),
(34, 'IP134 - 9134', 'YEALINK SIP-T19P E2'),
(35, 'IP135 - 9135', 'YEALINK SIP-T19P E2'),
(36, 'IP136 - 9136', 'YEALINK SIP-T19P E2'),
(37, 'IP137 - 9137', 'YEALINK SIP-T19P E2'),
(38, 'IP138 - 9138', 'YEALINK SIP-T19P E2'),
(39, 'IP139 - 9139', 'YEALINK SIP-T19P E2'),
(40, 'IP140 - 9140', 'GRANDSTREAM DP722'),
(41, 'IP141 - 9141', 'YEALINK SIP-T19P E2'),
(42, 'IP142 - 9142', 'YEALINK SIP-T19P E2'),
(43, 'IP143 - 9143', 'YEALINK SIP-T19P E2'),
(44, 'IP144 - 9144', 'YEALINK SIP-T19P E2'),
(45, 'IP145 - 9145', 'YEALINK SIP-T19P E2'),
(46, 'IP146 - 9146', 'YEALINK SIP-T19P E2'),
(47, 'IP147 - 9147', 'YEALINK SIP-T19P E2'),
(48, 'IP148 - 9148', 'YEALINK SIP-T19P E2'),
(49, 'IP149 - 9149', 'YEALINK SIP-T19P E2'),
(50, 'IP150 - 9150', 'YEALINK SIP-T19P E2'),
(51, 'IP151 - 9151', 'YEALINK SIP-T19P E2'),
(52, 'IP152 - 9152', 'YEALINK SIP-T19P E2'),
(53, 'IP153 - 9153', 'YEALINK SIP-T19P E2'),
(54, 'IP154 - 9154', 'YEALINK SIP-T19P E2'),
(55, 'IP155 - 9155', 'YEALINK SIP-T19P E2'),
(56, 'IP156 - 9156', 'YEALINK SIP-T19P E2'),
(57, 'IP157 - 9157', 'YEALINK SIP-T19P E2'),
(58, 'IP158 - 9158', 'GRANDSTREAM GXP1628'),
(59, 'IP159 - 9159', 'YEALINK SIP-T19P E2'),
(60, 'IP160 - 9160', 'YEALINK SIP-T19P E2'),
(61, 'IP161 - 9161', 'YEALINK SIP-T19P E2'),
(62, 'IP162 - 9162', 'YEALINK SIP-T19P E2'),
(63, 'IP163 - 9163', 'YEALINK SIP-T19P E2'),
(64, 'IP164 - 9164', 'YEALINK SIP-T19P E2'),
(65, 'IP165 - 9165', 'YEALINK SIP-T19P E2'),
(66, 'IP166 - 9166', 'YEALINK SIP-T19P E2'),
(67, 'IP167 - 9167', 'YEALINK SIP-T19P E2'),
(68, 'IP168 - 9168', 'YEALINK SIP-T19P E2'),
(69, 'IP169 - 9169', 'YEALINK SIP-T19P E2'),
(70, 'IP170 - 9170', 'YEALINK SIP-T19P E2'),
(71, 'IP171 - 9171', 'YEALINK SIP-T19P E2'),
(72, 'IP172 - 9172', 'YEALINK SIP-T19P E2'),
(73, 'IP173 - 9173', 'YEALINK SIP-T19P E2'),
(74, 'IP174 - 9174', 'YEALINK SIP-T19P E2'),
(75, 'IP175 - 9175', 'YEALINK SIP-T19P E2'),
(76, 'IP176 - 9176', 'YEALINK SIP-T19P E2'),
(77, 'IP177 - 9177', 'YEALINK SIP-T19P E2'),
(78, 'IP178 - 9178', 'YEALINK SIP-T19P E2'),
(79, 'IP179 - 9179', 'YEALINK SIP-T19P E2'),
(80, 'IP180 - 9180', 'YEALINK SIP-T19P E2'),
(81, 'IP181 - 9181', 'YEALINK SIP-T19P E2'),
(82, 'IP182 - 9182', 'YEALINK SIP-T19P E2'),
(83, 'IP183 - 9183', 'YEALINK SIP-T19P E2'),
(84, 'IP184 - 9184', 'YEALINK SIP-T19P E2'),
(85, 'IP185 - 9185', 'YEALINK SIP-T19P E2'),
(86, 'IP186 - 9186', 'YEALINK SIP-T19P E2'),
(87, 'IP187 - 9187', 'YEALINK SIP-T19P E2'),
(88, 'IP188 - 9188', 'YEALINK SIP-T19P E2'),
(89, 'IP189 - 9189', 'YEALINK SIP-T19P E2'),
(90, 'IP190 - 9190', 'YEALINK SIP-T19P E2'),
(91, 'IP191 - 9191', 'YEALINK SIP-T19P E2'),
(92, 'IP192 - 9192', 'YEALINK SIP-T19P E2'),
(93, 'IP193 - 9193', 'YEALINK SIP-T19P E2'),
(94, 'IP194 - 9194', 'YEALINK SIP-T19P E2'),
(95, 'IP195 - 9195', 'YEALINK SIP-T19P E2'),
(96, 'IP196 - 9196', 'YEALINK SIP-T19P E2'),
(97, 'IP197 - 9197', 'YEALINK SIP-T19P E2'),
(98, 'IP198 - 9198', 'YEALINK SIP-T19P E2'),
(99, 'IP199 - 9199', 'YEALINK SIP-T19P E2'),
(100, 'IP100 - 9100', 'YEALINK SIP-T19P E2');

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
(33, 'LABORATÓRIO'),
(17, 'LOGÍSTICA'),
(27, 'MANUTENÇÃO'),
(29, 'METROLOGIA'),
(34, 'PORTARIA'),
(32, 'PRODUÇÃO'),
(8, 'PROJETOS'),
(15, 'QUALIDADE'),
(19, 'RECEPÇÃO'),
(18, 'RECURSOS HUMANOS'),
(23, 'SALA CLEAN'),
(35, 'SALA DE TREINAMENTO'),
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
  `ip` int(10) UNSIGNED NOT NULL,
  `usuario` varchar(100) NOT NULL,
  `setor` varchar(100) NOT NULL,
  `homeOffice` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`ip`, `usuario`, `setor`, `homeOffice`) VALUES
(2, 'SERVIDOR', 'TECNOLOGIA DA INFORMAÇÃO', 'NÃO'),
(3, 'VIRTUAL HYPER-V', 'TECNOLOGIA DA INFORMAÇÃO', 'NÃO'),
(4, 'MATHEUS SOUZA', 'MANUTENÇÃO', 'NÃO'),
(5, 'DECIO SILVA', 'SGI', 'NÃO'),
(6, 'REINALDO LIMA', 'PROJETOS', 'NÃO'),
(7, 'HEXAGON', 'METROLOGIA', 'NÃO'),
(8, 'ROBERTO FREITAS', 'VENDAS', 'NÃO'),
(9, 'CLAUDINEI SOUZA', 'ENGENHARIA', 'NÃO'),
(10, 'RENATA NANNIN', 'FINANCEIRO', 'SIM'),
(11, 'IZAIAS LEMES', 'ENGENHARIA', 'NÃO'),
(12, 'WELLINGTON SILCA', 'PROJETOS', 'NÃO'),
(13, 'ANDRÉ TEIXEIRA', 'LOGÍSTICA', 'NÃO'),
(14, 'EVANDRO SILVA', 'EXPEDIÇÃO', 'NÃO'),
(15, 'CASSIA CARDOSO', 'SGI', 'NÃO'),
(16, 'JENNER NETO', 'FISCAL', 'SIM'),
(17, 'MATHEUS AUGUSTO', 'MANUTENÇÃO', 'NÃO'),
(18, 'EDSON GIFFÚ', 'DESENVOLVIMENTO', 'NÃO'),
(19, 'ALAN COTELEZZE', 'QUALIDADE', 'NÃO'),
(20, 'LEANDRO MELO', 'EXPEDIÇÃO', 'NÃO'),
(21, 'NOTEBOOK SALA CLEAN', 'SALA CLEAN', 'NÃO'),
(22, 'GUILHERME REZENDES', 'LOGÍSTICA', 'NÃO'),
(23, 'ANA CLAUDIA', 'SGI', 'NÃO'),
(24, 'SOLANGE SOUZA', 'COMPRAS', 'NÃO'),
(25, 'CICERO HENRIQUE', 'LOGÍSTICA', 'NÃO'),
(26, 'MARCELO WEINGERTNER', 'DESENVOLVIMENTO', 'NÃO'),
(27, 'TALITA FIRMO', 'FINANCEIRO', 'SIM'),
(28, 'NALVA SANTOS', 'QUALIDADE', 'NÃO'),
(29, 'MAIKON SANTOS', 'TECNOLOGIA DA INFORMAÇÃO', 'NÃO'),
(30, 'RAFAEL VIEIRA', 'VENDAS', 'NÃO'),
(31, 'WELLINGTON NUNES', 'ENGENHARIA', 'NÃO'),
(32, 'SUELY SANTOS', 'LABORATÓRIO', 'NÃO'),
(33, 'MARIA GABRIELA', 'COMPRAS', 'SIM'),
(34, 'SERGIO TOGNOLI', 'GERENTE INDUSTRIAL', 'NÃO'),
(35, 'PORTARIA', 'PORTARIA', 'NÃO'),
(36, 'LEANDRO OLIVEIRA', 'QUALIDADE', 'NÃO'),
(37, 'GABRIELA BIGOTTI', 'SGI', 'SIM'),
(38, 'FABIO HENRIQUE', 'METROLOGIA', 'NÃO'),
(39, 'LEANDRO NUNES', 'ENGENHARIA', 'NÃO'),
(40, 'EDVALDO FERREIRA', 'METROLOGIA', 'NÃO'),
(41, 'ANGELICA VERTOAN', 'RECURSOS HUMANOS', 'SIM'),
(42, 'DANIVAL ALVES', 'DESENVOLVIMENTO', 'NÃO'),
(43, 'VINICIUS SOUZA', 'EXPEDIÇÃO', 'NÃO'),
(44, 'ERMESON RAMON', 'ENGENHARIA', 'NÃO'),
(45, 'LEANDRO RISATTO', 'LOGÍSTICA', 'NÃO'),
(46, 'MARCO GIAMPIETRI', 'DIRETORIA', 'NÃO'),
(47, 'JUNIOR MONTAGNOLI', 'VENDAS', 'SIM'),
(48, 'ESTHER SILVA', 'ENGENHARIA', 'NÃO'),
(49, 'HEXAGON', 'METROLOGIA', 'NÃO'),
(50, 'LIVRE', '', ''),
(51, 'DONIZETE RIBEIRO', 'FISCAL', 'SIM'),
(52, 'THAIS PEIXOTO', 'RECURSOS HUMANOS', 'SIM'),
(53, 'LEANDRO NOGUEIRA', 'SGI', 'NÃO'),
(54, 'TACIO CAMPOS', 'QUALIDADE', 'NÃO'),
(55, 'CLAUDIO SOUZA', 'ENGENHARIA', 'NÃO'),
(56, 'SIMONE TAVARES PROVISÓRIO', 'COMPRAS', 'NÃO'),
(57, 'PAULO PAMPLONA', 'GERENTE CONTROLADORIA', 'SIM'),
(58, 'LEANDRO FERRARI', 'LABORATÓRIO', 'NÃO'),
(59, 'SERGIO ALONSO', 'DIRETORIA', 'NÃO'),
(60, 'SALA CLEAN', 'SALA CLEAN', 'NÃO'),
(61, 'ANTONIO CARLOS', 'ALMOXARIFADO TUBOS', 'NÃO'),
(62, 'MARCEL SANTOS', 'VENDAS', 'NÃO'),
(63, 'SERGIO BARDARI', 'GERENTE COMERCIAL', 'NÃO'),
(64, 'SAMUEL BARBOSA', 'QUALIDADE', 'NÃO'),
(65, 'PAULO MASO', 'ENGENHARIA', 'NÃO'),
(66, 'SALA TREINAMENTO', '', ''),
(67, 'FELIPE TEJIMA', 'QUALIDADE', 'NÃO'),
(68, 'GABRIELA COGHETTO', 'LOGÍSTICA', 'NÃO'),
(69, 'DANIEL COSTA', 'LOGÍSTICA', 'NÃO'),
(70, 'SANDRO CRUZ', 'LOGÍSTICA', 'NÃO'),
(71, 'HELGA ARRUDA', 'FINANCEIRO', 'SIM'),
(72, 'MIRELLA OLIVERA', 'ENGENHARIA', 'NÃO'),
(73, 'TIAGO TEIXEIRA', 'ENGENHARIA', 'NÃO'),
(74, 'RODRIGO PARRA', 'MANUTENÇÃO', 'NÃO'),
(75, 'SIMONE TREVISAN', 'RECURSOS HUMANOS', 'SIM'),
(76, 'PAULO HENRIQUE', 'VENDAS', 'NÃO'),
(77, 'COMPUTADOR CUCINARE', '', ''),
(78, 'SIMONE TAVARES', 'COMPRAS', 'NÃO'),
(79, 'MARCIO NASCIMENTO', 'DESENVOLVIMENTO', 'NÃO'),
(80, 'CELSO OLIVEIRA', 'QUALIDADE', 'NÃO'),
(81, 'ARTHUR QUIESSI', 'TECNOLOGIA DA INFORMAÇÃO', 'NÃO'),
(82, 'FABIO ALONSO', 'DIRETORIA', 'NÃO'),
(83, 'GISELE PEDROSO', 'VENDAS', 'SIM'),
(84, 'CLAUDINEI LIMA', 'ENGENHARIA', 'NÃO'),
(85, 'JAYNE CASTELANI', 'RECURSOS HUMANOS', 'NÃO'),
(86, 'LUANDERSON BARROS', 'LOGÍSTICA', 'NÃO'),
(87, 'AURÉLIO DE ASSIS', 'ENGENHARIA', 'NÃO'),
(88, 'ROYCI LEMES', 'PROJETOS', 'NÃO'),
(89, 'EVIE MEDORI', 'GERENTE LOGÍSTICA', 'NÃO'),
(90, 'CATRACA COZINHA', '', ''),
(91, 'FOLHA DE PONTO', '', ''),
(92, 'FOLHA DE PONTO', '', ''),
(93, 'CATRACA COZINHA', '', ''),
(94, 'FOLHA DE PONTO', '', ''),
(95, 'CURVADEIRA', 'CURVADEIRA', ''),
(96, 'SOLDA', 'SOLDA', ''),
(97, 'ALMOXARIFADO', 'ALMOXARIFADO', ''),
(98, 'FERRAMENTARIA', 'FERRAMENTARIA', ''),
(99, 'SALA DE TREINAMENTO PROV.', 'SALA DE TREINAMENTO', ''),
(100, 'LIVRE', '', ''),
(101, 'LIVRE', '', ''),
(102, 'LIVRE', '', ''),
(103, 'LIVRE', '', ''),
(104, 'LIVRE', '', ''),
(105, 'LIVRE', '', ''),
(191, 'COLETOR 1', '', ''),
(192, 'COLETOR 2', '', ''),
(210, 'IMPRESSORA', '', ''),
(211, 'IMPRESSORA', '', ''),
(212, 'IMPRESSORA', '', ''),
(213, 'IMPRESSORA', '', ''),
(214, 'IMPRESSORA', '', ''),
(215, 'IMPRESSORA', '', ''),
(216, 'IMPRESSORA', '', ''),
(217, 'IMPRESSORA', '', ''),
(218, 'IMPRESSORA', '', ''),
(219, 'IMPRESSORA', '', ''),
(220, 'IMPRESSORA', '', ''),
(221, 'IMPRESSORA', '', ''),
(222, 'IMPRESSORA', '', ''),
(230, 'LASER LT8', '', ''),
(231, 'LASER LT7', '', ''),
(232, 'LASER CHAPA', '', ''),
(234, 'PPI - MULTITASK', '', ''),
(235, 'MESH 4', '', ''),
(236, 'SW5 - PRODUÇÃO', '', ''),
(237, 'MESH 3', '', ''),
(238, 'MESH 2', '', ''),
(239, 'MESH 1', '', ''),
(240, 'AP9', '', ''),
(241, 'AP8 - SALA DE CONFERêNCIA', '', ''),
(242, 'AP7 - ENGENHARIA', '', ''),
(243, 'AP6 - TERREO', '', ''),
(244, 'AP5 - 1º ANDAR - PRO', '', ''),
(245, 'AP4 - 2º ANDAR/SALA_171', '', ''),
(246, 'AP3 - 2º ANDAR/SALA_173', '', ''),
(247, 'AP2 - 2º ANDAR/SALA_173', '', ''),
(248, 'AP1 - 2º ANDAR', '', ''),
(249, 'SW4 - ENGENHARIA', '', ''),
(250, 'SW3 - 2º ANDAR', '', ''),
(251, 'SW2 - 2° ANDAR', '', ''),
(252, 'SW1 - 2° ANDAR', '', ''),
(253, 'CONTROLADORA CLOUDKEY', '', ''),
(254, 'UTM FIREWALL', '', '');

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
(3, '192.168.3.'),
(4, '192.168.4.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `geral`
--
ALTER TABLE `geral`
  ADD PRIMARY KEY (`ip`),
  ADD UNIQUE KEY `ip` (`ip`),
  ADD UNIQUE KEY `tag` (`tag`),
  ADD UNIQUE KEY `inicio` (`inicio`);

--
-- Indexes for table `maquina`
--
ALTER TABLE `maquina`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tag` (`tag`);

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
-- Indexes for table `msoffice`
--
ALTER TABLE `msoffice`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `inicio` (`inicio`),
  ADD UNIQUE KEY `chave_produto` (`chave_produto`);

--
-- Indexes for table `processador`
--
ALTER TABLE `processador`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `processador` (`processador`);

--
-- Indexes for table `ramal`
--
ALTER TABLE `ramal`
  ADD PRIMARY KEY (`ip`),
  ADD UNIQUE KEY `ip` (`ip`);

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
  ADD UNIQUE KEY `ip` (`ip`);

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
-- AUTO_INCREMENT for table `geral`
--
ALTER TABLE `geral`
  MODIFY `ip` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `maquina`
--
ALTER TABLE `maquina`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `modelo_impressora`
--
ALTER TABLE `modelo_impressora`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `modelo_maquina`
--
ALTER TABLE `modelo_maquina`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `modelo_ms_office`
--
ALTER TABLE `modelo_ms_office`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `modelo_ramal`
--
ALTER TABLE `modelo_ramal`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `msoffice`
--
ALTER TABLE `msoffice`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `processador`
--
ALTER TABLE `processador`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `ramal`
--
ALTER TABLE `ramal`
  MODIFY `ip` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `setor`
--
ALTER TABLE `setor`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `sistema_operacional`
--
ALTER TABLE `sistema_operacional`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tipo_maquina`
--
ALTER TABLE `tipo_maquina`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `wlan`
--
ALTER TABLE `wlan`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
