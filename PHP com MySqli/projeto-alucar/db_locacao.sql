-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: 11-Jul-2020 às 11:06
-- Versão do servidor: 5.7.30-0ubuntu0.18.04.1
-- PHP Version: 7.2.24-0ubuntu0.18.04.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `locacao`
--
DROP DATABASE IF EXISTS `locacao`;
CREATE DATABASE IF NOT EXISTS `locacao` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `locacao`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro`
--

DROP TABLE IF EXISTS `cadastro`;
CREATE TABLE IF NOT EXISTS `cadastro` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) DEFAULT NULL,
  `endereco` varchar(50) DEFAULT NULL,
  `cpf` varchar(50) DEFAULT NULL,
  `telefone` varchar(50) DEFAULT NULL,
  `situacao` varchar(20) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=93 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `cadastro`
--

INSERT INTO `cadastro` (`id`, `nome`, `endereco`, `cpf`, `telefone`, `situacao`, `email`) VALUES
(89, 'pablo', 'Rua Francisco Sales, 200', '11222233344', '9988557744', 'sim', 'pablolucas@yahoo.com.br'),
(90, 'joao', 'rua flores peixoto', '11555760635', '142014201240', 'sim', 'joao@hotmail'),
(91, 'Maria Eduarda', 'Rua Francisco Sales, 200', '11555760635', '9988557744', 'sim', 'junio30cp@gmail.com'),
(92, 'teste', 'kutyfku', '5804540', 'f45064', 'sim', '406540');

-- --------------------------------------------------------

--
-- Estrutura da tabela `solicitacao`
--

DROP TABLE IF EXISTS `solicitacao`;
CREATE TABLE IF NOT EXISTS `solicitacao` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nomeCarro` varchar(50) DEFAULT NULL,
  `tempo` int(11) DEFAULT NULL,
  `data` varchar(50) DEFAULT NULL,
  `hora` varchar(50) DEFAULT NULL,
  `situacao` varchar(20) DEFAULT NULL,
  `nomePessoa` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `solicitacao`
--

INSERT INTO `solicitacao` (`id`, `nomeCarro`, `tempo`, `data`, `hora`, `situacao`, `nomePessoa`) VALUES
(29, 'Gol', 3, '2018-06-20', '23:01', 'sim', 'pablo'),
(30, 'Fiat Toro', 3, '2020-04-21', '14:58', 'sim', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(50) DEFAULT NULL,
  `senha` varchar(10) DEFAULT NULL,
  `tipo` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `login`, `senha`, `tipo`) VALUES
(1, 'admin', 'admin', 'admin'),
(29, 'pablo', 'pablo123', 'normal'),
(30, 'Maria', 'Maria123', 'normal'),
(31, 'teste', 'teste123', 'normal'),
(32, 'joao', 'joao123', 'normal');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
