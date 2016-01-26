-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 12-Dez-2015 às 13:06
-- Versão do servidor: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `projeto`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionarios`
--

CREATE TABLE IF NOT EXISTS `funcionarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` char(30) NOT NULL,
  `idade` int(11) NOT NULL,
  `departamento` varchar(100) NOT NULL,
  `salario` decimal(15,2) NOT NULL,
  `telefone` int(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Extraindo dados da tabela `funcionarios`
--

INSERT INTO `funcionarios` (`id`, `nome`, `idade`, `departamento`, `salario`, `telefone`) VALUES
(1, 'Gregorio', 24, 'X', '0.00', 981057742),
(5, ' Vanita', 30, ' TI ', '5000.00', 123),
(11, ' Jhon', 19, ' Desenvolvimento ', '1000.00', 213);

-- --------------------------------------------------------

--
-- Estrutura da tabela `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` char(20) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  `senha` varchar(30) DEFAULT NULL,
  `usuario` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `login`
--

INSERT INTO `login` (`id`, `nome`, `email`, `senha`, `usuario`) VALUES
(1, 'Admin', 'admin@admin.com', '123', ''),
(2, 'Greg', 'greg@admin.com', '123', 'gregmaster'),
(3, 'Vanita', 'van@fatec.com.br', '123', ''),
(4, 'Jhon', 'jhonerick_10@hotmail', 'jhon', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
