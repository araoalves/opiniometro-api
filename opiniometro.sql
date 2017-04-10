-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 10-Abr-2017 às 21:24
-- Versão do servidor: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `opiniometro`
--
CREATE DATABASE IF NOT EXISTS `opiniometro` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `opiniometro`;

DELIMITER $$
--
-- Functions
--
CREATE DEFINER=`root`@`localhost` FUNCTION `obter_nome_empresa` (`id` INTEGER) RETURNS VARCHAR(255) CHARSET latin1 BEGIN 
	DECLARE retorno varchar(255);
	SELECT empresa_razao_social into retorno from empresa where empresa_id = id;
    RETURN retorno;
END$$

CREATE DEFINER=`root`@`localhost` FUNCTION `obter_nome_permissao` (`id` INTEGER) RETURNS VARCHAR(255) CHARSET latin1 BEGIN 
	DECLARE retorno varchar(255);
	SELECT permissao_descricao into retorno from permissao where permissao_id = id;
    RETURN retorno;
END$$

CREATE DEFINER=`root`@`localhost` FUNCTION `obter_nome_setor` (`id` INTEGER) RETURNS VARCHAR(255) CHARSET latin1 BEGIN 
	DECLARE retorno varchar(255);
	SELECT setor_descricao into retorno from setor where setor_id = id;
    RETURN retorno;
END$$

CREATE DEFINER=`root`@`localhost` FUNCTION `obter_nome_usuario` (`id` INTEGER) RETURNS VARCHAR(255) CHARSET latin1 BEGIN 
	DECLARE retorno varchar(255);
	SELECT usuario_nome into retorno from usuario where usuario_id = id;
    RETURN retorno;
END$$

CREATE DEFINER=`root`@`localhost` FUNCTION `obter_qtd_opiniao_empresa` (`tipo` INTEGER, `data_opiniao` DATE, `empresa` INTEGER) RETURNS INT(11) BEGIN 
		DECLARE retorno INTEGER;
		select count(*) into retorno from opiniao
		where opiniao_tipo = tipo		
		and opiniao_data = data_opiniao
		and opiniao_empresa = empresa;
    RETURN retorno;
END$$

CREATE DEFINER=`root`@`localhost` FUNCTION `obter_qtd_opiniao_usuario` (`tipo` INT, `usuario` INT, `data_opiniao` DATE, `empresa` INT) RETURNS INT(11) BEGIN 
		DECLARE retorno int;
        select count(*) into retorno from opiniao
		where opiniao_tipo = tipo
		and opiniao_usuario = usuario
		and opiniao_data = data_opiniao
		and opiniao_empresa = empresa;
    RETURN retorno;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `empresa`
--

CREATE TABLE `empresa` (
  `empresa_id` int(11) NOT NULL,
  `empresa_cnpj` varchar(50) NOT NULL,
  `empresa_razao_social` varchar(100) NOT NULL,
  `empresa_nome_fantasia` varchar(100) NOT NULL,
  `empresa_inscricao_municipal` varchar(100) NOT NULL,
  `empresa_inscricao_estadual` varchar(100) NOT NULL,
  `empresa_endereco` varchar(150) NOT NULL,
  `empresa_telefone` varchar(20) NOT NULL,
  `empresa_email` varchar(100) NOT NULL,
  `empresa_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `empresa`
--

INSERT INTO `empresa` (`empresa_id`, `empresa_cnpj`, `empresa_razao_social`, `empresa_nome_fantasia`, `empresa_inscricao_municipal`, `empresa_inscricao_estadual`, `empresa_endereco`, `empresa_telefone`, `empresa_email`, `empresa_status`) VALUES
(1, '23.862.143/0001­08', 'NODE TI', 'NODE TI', '', '', 'Rua Nossa Senhora da Conceição, Nº02, QD 25, Santa Clara, São luis - MA', '98982468103', 'arao.alves7@gmail.com', 1),
(2, '544545454545', 'Universidade Ceuma', 'Universidade Ceuma', '', '', 'rua da saudade', '3424234234234', 'arao.alves7@gmail.com', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `opiniao`
--

CREATE TABLE `opiniao` (
  `opiniao_id` int(11) NOT NULL,
  `opiniao_data` date NOT NULL,
  `opiniao_usuario` int(11) NOT NULL,
  `opiniao_tipo` int(11) NOT NULL,
  `opiniao_empresa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `opiniao`
--

INSERT INTO `opiniao` (`opiniao_id`, `opiniao_data`, `opiniao_usuario`, `opiniao_tipo`, `opiniao_empresa`) VALUES
(1, '2017-04-06', 2, 1, 1),
(2, '2017-04-06', 2, 3, 1),
(3, '2017-04-06', 1, 4, 1),
(4, '2017-04-07', 2, 3, 1),
(5, '2017-04-06', 2, 4, 1),
(6, '2017-04-06', 2, 1, 1),
(7, '2017-04-06', 1, 1, 1),
(8, '2017-04-07', 2, 1, 1),
(9, '2017-04-07', 2, 4, 1),
(10, '2017-04-07', 2, 4, 1),
(11, '2017-04-07', 2, 4, 1),
(12, '2017-04-07', 1, 1, 1),
(13, '2017-04-07', 1, 2, 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `permissao`
--

CREATE TABLE `permissao` (
  `permissao_id` int(11) NOT NULL,
  `permissao_descricao` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `permissao`
--

INSERT INTO `permissao` (`permissao_id`, `permissao_descricao`) VALUES
(1, 'Administrador'),
(2, 'Área Administrativa'),
(3, 'Usuário do Aplicativo');

-- --------------------------------------------------------

--
-- Estrutura da tabela `setor`
--

CREATE TABLE `setor` (
  `setor_id` int(11) NOT NULL,
  `setor_descricao` varchar(150) NOT NULL,
  `setor_empresa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `setor`
--

INSERT INTO `setor` (`setor_id`, `setor_descricao`, `setor_empresa`) VALUES
(1, 'RECEPÇÃO PRINCIPAL', 1),
(2, 'RECEPÇÃO CARDIO', 2),
(5, 'RECEPÇÃO OFTALMO', 2),
(6, 'teste 2', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo_opiniao`
--

CREATE TABLE `tipo_opiniao` (
  `tipo_opiniao_id` int(11) NOT NULL,
  `tipo_opiniao_descricao` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tipo_opiniao`
--

INSERT INTO `tipo_opiniao` (`tipo_opiniao_id`, `tipo_opiniao_descricao`) VALUES
(1, 'Ótimo'),
(2, 'Bom'),
(3, 'Regular'),
(4, 'Ruim'),
(5, 'Péssimo');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `usuario_id` int(11) NOT NULL,
  `usuario` varchar(100) DEFAULT NULL,
  `usuario_senha` varchar(100) DEFAULT NULL,
  `usuario_nome` varchar(150) DEFAULT NULL,
  `usuario_cpf` varchar(20) NOT NULL,
  `usuario_email` varchar(100) NOT NULL,
  `usuario_telefone` varchar(100) NOT NULL,
  `usuario_dt_nasc` date NOT NULL,
  `usuario_permissao` int(11) DEFAULT NULL,
  `usuario_empresa` int(11) NOT NULL,
  `usuario_setor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`usuario_id`, `usuario`, `usuario_senha`, `usuario_nome`, `usuario_cpf`, `usuario_email`, `usuario_telefone`, `usuario_dt_nasc`, `usuario_permissao`, `usuario_empresa`, `usuario_setor`) VALUES
(1, 'afarias', 'e10adc3949ba59abbe56e057f20f883e', 'Arão Alves de Farias', '03650089319', 'arao.alves7@gmail.com', '98982468103', '1991-06-23', 1, 1, 1),
(2, 'lol', 'e10adc3949ba59abbe56e057f20f883e', 'Usuário Teste', '57567567', 'arao.alves7@gmail.com', '345345', '2017-04-05', 2, 1, 2),
(3, 'lolol', 'e10adc3949ba59abbe56e057f20f883e', 'lolol', '535345345', 'lolol', '34534543', '2017-04-05', 2, 2, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`empresa_id`);

--
-- Indexes for table `opiniao`
--
ALTER TABLE `opiniao`
  ADD PRIMARY KEY (`opiniao_id`);

--
-- Indexes for table `permissao`
--
ALTER TABLE `permissao`
  ADD PRIMARY KEY (`permissao_id`);

--
-- Indexes for table `setor`
--
ALTER TABLE `setor`
  ADD PRIMARY KEY (`setor_id`);

--
-- Indexes for table `tipo_opiniao`
--
ALTER TABLE `tipo_opiniao`
  ADD PRIMARY KEY (`tipo_opiniao_id`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`usuario_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `empresa`
--
ALTER TABLE `empresa`
  MODIFY `empresa_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `opiniao`
--
ALTER TABLE `opiniao`
  MODIFY `opiniao_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `permissao`
--
ALTER TABLE `permissao`
  MODIFY `permissao_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `setor`
--
ALTER TABLE `setor`
  MODIFY `setor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tipo_opiniao`
--
ALTER TABLE `tipo_opiniao`
  MODIFY `tipo_opiniao_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `usuario_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
