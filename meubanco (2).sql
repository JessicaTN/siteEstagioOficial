-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 05-Dez-2019 às 21:15
-- Versão do servidor: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `meubanco`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `administrador`
--

CREATE TABLE `administrador` (
  `id_administrador` int(11) NOT NULL,
  `email` varchar(60) COLLATE utf8_bin NOT NULL,
  `senha` varchar(255) COLLATE utf8_bin NOT NULL,
  `nome` varchar(60) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `administrador`
--

INSERT INTO `administrador` (`id_administrador`, `email`, `senha`, `nome`) VALUES
(1, 'admin@admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'diego');

-- --------------------------------------------------------

--
-- Estrutura da tabela `noticias`
--

CREATE TABLE `noticias` (
  `idnoticias` int(11) NOT NULL,
  `titulo_da_noticia` varchar(100) DEFAULT NULL,
  `foto` varchar(100) DEFAULT NULL,
  `data` date DEFAULT NULL,
  `texto` varchar(2500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `noticias`
--

INSERT INTO `noticias` (`idnoticias`, `titulo_da_noticia`, `foto`, `data`, `texto`) VALUES
(1, 'Agenda em Caxias', 'novembro 6.jpg', '2019-09-29', ' Foi realizado um agena com o Secretario de planejamento Ricardo Dutra e com o responsavel da defesa civil, Alex'),
(4, 'Agenda em Livramento', '10 setembro.jpg', '2019-07-09', 'Entrega de 22 óculos para crianças carentes da escola João Souto Duarte '),
(5, 'Agenda na Assandef', '5 novembro.jpg', '2019-09-04', 'Foi anunciado a Assandef que atraves de uma emenda realizada pelo vereador, a instituiçao teria um repasse no valor de R$20.000,00.'),
(6, ' Santa Maria', '8 de novembro.jpeg', '2019-08-01', 'oi tudo bem?');

-- --------------------------------------------------------

--
-- Estrutura da tabela `servicos`
--

CREATE TABLE `servicos` (
  `idservicos` int(11) NOT NULL,
  `data` date DEFAULT NULL,
  `titulo` varchar(100) DEFAULT NULL,
  `texto` varchar(2000) DEFAULT NULL,
  `foto` varchar(100) DEFAULT NULL,
  `idtipo_servico` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `servicos`
--

INSERT INTO `servicos` (`idservicos`, `data`, `titulo`, `texto`, `foto`, `idtipo_servico`) VALUES
(23, '2019-10-28', 'Processo Seletivo Educação', 'aprovada hoje ', '54435982_1221268298047979_8264139916481396736_n.jpg', 'lei');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo_servico`
--

CREATE TABLE `tipo_servico` (
  `idtipo_servico` int(11) NOT NULL,
  `nome` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tipo_servico`
--

INSERT INTO `tipo_servico` (`idtipo_servico`, `nome`) VALUES
(2, 'Projetos'),
(3, 'Agenda'),
(5, 'Viagem'),
(6, 'Fala na tribuna');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`id_administrador`);

--
-- Indexes for table `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`idnoticias`);

--
-- Indexes for table `servicos`
--
ALTER TABLE `servicos`
  ADD PRIMARY KEY (`idservicos`);

--
-- Indexes for table `tipo_servico`
--
ALTER TABLE `tipo_servico`
  ADD PRIMARY KEY (`idtipo_servico`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administrador`
--
ALTER TABLE `administrador`
  MODIFY `id_administrador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `noticias`
--
ALTER TABLE `noticias`
  MODIFY `idnoticias` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `servicos`
--
ALTER TABLE `servicos`
  MODIFY `idservicos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tipo_servico`
--
ALTER TABLE `tipo_servico`
  MODIFY `idtipo_servico` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
