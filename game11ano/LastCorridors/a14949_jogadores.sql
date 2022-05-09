-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 24-Maio-2021 às 14:25
-- Versão do servidor: 10.4.14-MariaDB
-- versão do PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `a14949`
--

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
(46, 'daniel', 2147483647, 'fotos/nda.jpg'),
(47, '1', 44, 'fotos/nda.jpg'),
(48, '2', 1, 'fotos/nda.jpg'),
(49, '3', 13, 'fotos/nda.jpg'),
(50, '4', 5, 'fotos/nda.jpg'),
(51, '5', 13, 'fotos/nda.jpg'),
(52, '6', 2, 'fotos/nda.jpg'),
(53, '7', 10, 'fotos/nda.jpg'),
(54, 'alterar', 90, 'fotos/nda.jpg'),
(57, 'adastyruyerawRATESTU', 0, NULL),
(58, 'o rei do parkour', 104, NULL);

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
  MODIFY `id_jogador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
