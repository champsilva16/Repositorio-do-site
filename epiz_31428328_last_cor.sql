-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql110.epizy.com
-- Tempo de geração: 09-Maio-2022 às 17:17
-- Versão do servidor: 10.3.27-MariaDB
-- versão do PHP: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `epiz_31428328_last_cor`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `a14949_admin`
--

CREATE TABLE `a14949_admin` (
  `adim` varchar(250) DEFAULT NULL,
  `pass` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `a14949_admin`
--

INSERT INTO `a14949_admin` (`adim`, `pass`) VALUES
('a14949', '16082004');

-- --------------------------------------------------------

--
-- Estrutura da tabela `a14949_jogadores`
--

CREATE TABLE `a14949_jogadores` (
  `id_jogador` int(11) NOT NULL,
  `nome` varchar(250) DEFAULT NULL,
  `score` int(11) DEFAULT NULL,
  `foto` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `a14949_jogadores`
--

INSERT INTO `a14949_jogadores` (`id_jogador`, `nome`, `score`, `foto`) VALUES
(63, 'carecas', 817, NULL),
(64, 'No', 0, NULL),
(65, 'daneil', 22, NULL);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `a14949_jogadores`
--
ALTER TABLE `a14949_jogadores`
  ADD PRIMARY KEY (`id_jogador`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `a14949_jogadores`
--
ALTER TABLE `a14949_jogadores`
  MODIFY `id_jogador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
