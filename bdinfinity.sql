-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 13-Nov-2021 às 22:49
-- Versão do servidor: 10.4.21-MariaDB
-- versão do PHP: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bdinfinity`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cad`
--

CREATE TABLE `cad` (
  `ID` int(11) NOT NULL,
  `emp` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `cnpj` int(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `telefone` varchar(30) NOT NULL,
  `cep` varchar(11) NOT NULL,
  `estado` varchar(20) NOT NULL,
  `cidade` text NOT NULL,
  `BAIRRO` text CHARACTER SET latin1 NOT NULL,
  `NUMCASA` int(11) NOT NULL,
  `SENHA` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cad`
--

INSERT INTO `cad` (`ID`, `emp`, `cnpj`, `email`, `telefone`, `cep`, `estado`, `cidade`, `BAIRRO`, `NUMCASA`, `SENHA`) VALUES
(1, '2', 2, '2', '2', '2', '2', '2', '2', 2, '2'),
(6, '', 0, '', '', '', '', '', '', 0, ''),
(7, '', 0, '', '', '', '', '', '', 0, '');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cad`
--
ALTER TABLE `cad`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cad`
--
ALTER TABLE `cad`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
