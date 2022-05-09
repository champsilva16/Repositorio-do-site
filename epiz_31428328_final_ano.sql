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
-- Banco de dados: `epiz_31428328_final_ano`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `14949_menu`
--

CREATE TABLE `14949_menu` (
  `idmenu` int(11) NOT NULL,
  `nomeop` varchar(250) NOT NULL,
  `link` varchar(100) NOT NULL,
  `permissao` int(11) NOT NULL,
  `target` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `14949_menu`
--

INSERT INTO `14949_menu` (`idmenu`, `nomeop`, `link`, `permissao`, `target`) VALUES
(1, 'Home', 'index.php', 0, ''),
(2, 'Home', 'index.php', 1, ''),
(5, 'Adicionar', 'add.php', 1, ''),
(6, 'Admin', 'adim.php', 2, ''),
(7, 'Entrar', 'login.php', 0, ''),
(12, 'Trabalhos', 'trabalho.php', 1, ''),
(13, 'Portfólio', 'portfolio.php', 1, '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `a14949_alteracoes`
--

CREATE TABLE `a14949_alteracoes` (
  `id_al` int(11) NOT NULL,
  `email` varchar(250) DEFAULT NULL,
  `trabalho2` varchar(250) DEFAULT NULL,
  `Tipo` varchar(250) NOT NULL,
  `dta` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `a14949_alteracoes`
--

INSERT INTO `a14949_alteracoes` (`id_al`, `email`, `trabalho2`, `Tipo`, `dta`) VALUES
(4, 'champsilva16@gmai.com', 'trabalhos/b60c49fcf2cac9trabalho.zip', 'UPDATE', '2021-06-13 08:34:06'),
(5, 'teste@teste.pt', 'trabalhos/b60c1ed0f26c7484268.jpg', 'UPDATE', '2021-06-13 09:32:10'),
(6, 'champsilva16@gmai.com', 'trabalhos/b60c49f79e0258revisoes-sobre-cesario-verde.pdf', 'DELETE', '2021-06-13 10:24:04'),
(7, 'champsilva16@gmai.com', 'trabalhos/b60c49fcf2cac9trabalho.zip', 'DELETE', '2021-06-13 10:24:06'),
(8, 'aaaa@cic.pt', 'trabalhos/b60c5dcdb9320f936c4e0be4eb334035762d571ebc01cfe74e5f37r1-512-512v2_00.jpg', 'UPDATE', '2021-06-13 10:24:34'),
(9, 'aaaa@cic.pt', 'trabalhos/b60c5dd0bbd926936c4e0be4eb334035762d571ebc01cfe74e5f37r1-512-512v2_00.jpg', 'UPDATE', '2021-06-13 10:26:25'),
(10, 'champsilva16@gmai.com', 'trabalhos/b60c60a43828e0936c4e0be4eb334035762d571ebc01cfe74e5f37r1-512-512v2_00.jpg', 'UPDATE', '2021-06-13 13:38:25'),
(11, 'champsilva16@gmai.com', 'trabalhos/b60c60a43828e0936c4e0be4eb334035762d571ebc01cfe74e5f37r1-512-512v2_00.jpg', 'DELETE', '2021-06-13 13:38:28'),
(12, 'champsilva16@gmai.com', 'trabalhos/b60be42baa3747IMG-20200329-WA0009.jpg', 'DELETE', '2021-06-13 13:48:59'),
(13, 'teste@teste.pt', 'trabalhos/b60c63ab66dcddunknown.png', 'DELETE', '2021-06-13 17:04:58'),
(14, 'teste@teste.pt', 'trabalhos/b60c63af3ef402unknown.png', 'DELETE', '2021-06-13 17:05:59'),
(15, 'teste@teste.pt', 'trabalhos/b60c63bc3357d2unknown.png', 'DELETE', '2021-06-13 17:09:29'),
(16, 'teste@teste.pt', 'trabalhos/b60c6405b407b1mais 1 valor no teste.png', 'DELETE', '2021-06-13 17:29:02'),
(17, 'teste@teste.pt', 'trabalhos/b60c6412611533unknown.png', 'DELETE', '2021-06-13 17:32:25'),
(18, 'teste@teste.pt', 'trabalhos/b60c66e56e7638unknown.png', 'DELETE', '2021-06-13 20:45:17'),
(19, 'teste@teste.pt', 'trabalhos/b60c6740f5646cmais 1 valor no teste.png', 'DELETE', '2021-06-13 21:09:40'),
(20, 'teste@teste.pt', 'trabalhos/b60c1ed0f26c7484268.jpg', 'UPDATE', '2021-06-13 21:21:23'),
(21, '1@cic.pt', 'trabalhos/b60c678146dffbProofOfDelivery.pdf', 'UPDATE', '2021-06-13 21:27:25'),
(22, '1@cic.pt', 'trabalhos/b60c678a9023dfmais 1 valor no teste.png', 'DELETE', '2021-06-13 21:30:28'),
(23, '1@cic.pt', 'trabalhos/b60c67a13efd0aguedes.png', 'DELETE', '2021-06-13 21:35:25'),
(24, '1@cic.pt', 'trabalhos/b60c67a3744014mais 1 valor no teste.png', 'DELETE', '2021-06-13 21:36:23'),
(25, '1@cic.pt', 'trabalhos/b60c67a3d0f0ae0a5bacc4832ab27fc49dc4d5c323df64.png', 'DELETE', '2021-06-13 21:36:23'),
(26, '1@cic.pt', 'trabalhos/b60c67b79bf29aunknown.png', 'DELETE', '2021-06-13 21:41:28'),
(27, '1@cic.pt', 'trabalhos/b60c67b7e454dbguedes.png', 'DELETE', '2021-06-13 21:41:28'),
(28, '1@cic.pt', 'trabalhos/b60c67bb60ee93unknown.png', 'DELETE', '2021-06-13 21:42:38'),
(29, '1@cic.pt', 'trabalhos/b60c67bc0b42193.png', 'DELETE', '2021-06-13 21:42:38'),
(30, '1@cic.pt', 'trabalhos/b60c741381c8594.png', 'DELETE', '2021-06-14 11:45:16'),
(31, 'champsilva16@gmai.com', 'trabalhos/b60be420847885logo.jpg', 'DELETE', '2021-06-14 12:29:13'),
(32, 'champsilva16@gmai.com', 'trabalhos/b60bf627eec30d122 Days(MP3_160K).mp3', 'DELETE', '2021-06-14 12:29:13'),
(33, 'teste@teste.pt', 'trabalhos/b60bf733850dbaunknown.png', 'DELETE', '2021-06-14 12:29:13'),
(34, 'teste@teste.pt', 'trabalhos/b60c1ed0f26c7484268.jpg', 'DELETE', '2021-06-14 12:29:13'),
(35, 'champsilva16@gmai.com', 'trabalhos/b60c4775082a34play.mp4', 'DELETE', '2021-06-14 12:29:13'),
(36, 'champsilva16@gmai.com', 'trabalhos/b60c47bedd9ffe90MH - TREFUEGO(MP3_160K).mp3', 'DELETE', '2021-06-14 12:29:13'),
(37, 'champsilva16@gmai.com', 'trabalhos/b60c4a018788d1exemplo.html', 'DELETE', '2021-06-14 12:29:13'),
(38, 'champsilva16@gmai.com', 'trabalhos/b60c5dc675fd4a6.jpeg', 'DELETE', '2021-06-14 12:29:13'),
(39, 'aaaa@cic.pt', 'trabalhos/b60c5dcdb9320f936c4e0be4eb334035762d571ebc01cfe74e5f37r1-512-512v2_00.jpg', 'DELETE', '2021-06-14 12:29:13'),
(40, 'aaaa@cic.pt', 'trabalhos/b60c5dd0bbd926936c4e0be4eb334035762d571ebc01cfe74e5f37r1-512-512v2_00.jpg', 'DELETE', '2021-06-14 12:29:13'),
(41, 'teste@teste.pt', 'trabalhos/b60c6779a0eb76ProofOfDelivery.pdf', 'DELETE', '2021-06-14 12:29:13'),
(42, '1@cic.pt', 'trabalhos/b60c678146dffbProofOfDelivery.pdf', 'DELETE', '2021-06-14 12:29:13'),
(43, '1@cic.pt', 'trabalhos/b60c745bd6a0733.png', 'DELETE', '2021-06-14 12:29:13'),
(44, '1@cic.pt', 'trabalhos/b60c745c1b07918.png', 'DELETE', '2021-06-14 12:29:13'),
(45, '1@cic.pt', 'trabalhos/b60c745cd3a1fcexemplo.html', 'DELETE', '2021-06-14 12:29:13'),
(46, 'champsilva16@gmai.com', 'trabalhos/b60c746729b6edlogo - min.png', 'DELETE', '2021-06-14 12:29:13'),
(47, '1@cic.pt', 'trabalhos/b60c74bdf6eaa9revisoes-sobre-cesario-verde.pdf', 'UPDATE', '2021-06-14 12:47:41'),
(48, '1@cic.pt', 'trabalhos/b60c74bda5226e936c4e0be4eb334035762d571ebc01cfe74e5f37r1-512-512v2_00.jpg', 'DELETE', '2021-06-14 12:48:50'),
(49, 'ma@cic.pt', 'trabalhos/b60c7523b354f61.jpeg', 'UPDATE', '2021-06-14 12:57:51'),
(50, 'ma@cic.pt', 'trabalhos/b60c7523b354f61.jpeg', 'DELETE', '2021-06-14 12:59:07'),
(51, 'ma@cic.pt', 'trabalhos/b60c752d3298292.jpeg', 'UPDATE', '2021-06-14 13:00:07'),
(52, 'ma@cic.pt', 'trabalhos/b60c75353a1780forms.html', 'UPDATE', '2021-06-14 13:02:34'),
(53, 'ma@cic.pt', 'trabalhos/b60c7535e525a6play2.mp4', 'UPDATE', '2021-06-14 13:02:34'),
(54, 'ma@cic.pt', 'trabalhos/b60c75367a8eea_uicideBoy_ – ...And To Those I Love_ Thanks For S(MP3_160K).mp3', 'UPDATE', '2021-06-14 13:02:35'),
(55, 'champsilva16@gmai.com', 'trabalhos/b60c74baaed6d11.jpeg', 'UPDATE', '2021-06-14 14:17:21'),
(56, 'champsilva16@gmai.com', 'trabalhos/b60c74baaed6d11.jpeg', 'UPDATE', '2021-06-14 14:17:31'),
(57, 'champsilva16@gmai.com', 'trabalhos/b60c74baaed6d11.jpeg', 'UPDATE', '2021-06-14 14:19:42'),
(58, 'ma@cic.pt', 'trabalhos/b60c75367a8eea_uicideBoy_ – ...And To Those I Love_ Thanks For S(MP3_160K).mp3', 'DELETE', '2021-06-14 14:20:08'),
(59, 'ma@cic.pt', 'trabalhos/b60c752d3298292.jpeg', 'UPDATE', '2021-06-14 14:21:39'),
(60, 'ma@cic.pt', 'trabalhos/b60c75353a1780forms.html', 'UPDATE', '2021-06-14 14:22:11'),
(61, 'ma@cic.pt', 'trabalhos/b60c7535e525a6play2.mp4', 'UPDATE', '2021-06-14 14:22:33'),
(62, 'ma@cic.pt', 'trabalhos/b60c7535e525a6play2.mp4', 'UPDATE', '2021-06-14 14:22:55'),
(63, 'ma@cic.pt', 'trabalhos/b60c7535e525a6play2.mp4', 'UPDATE', '2021-06-14 14:23:16'),
(64, 'ma@cic.pt', 'trabalhos/b60c7535e525a6play2.mp4', 'DELETE', '2021-06-14 14:23:38');

-- --------------------------------------------------------

--
-- Estrutura da tabela `a14949_noti`
--

CREATE TABLE `a14949_noti` (
  `id` int(11) NOT NULL,
  `email_noti` varchar(250) DEFAULT NULL,
  `noti` text DEFAULT NULL,
  `dta` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `a14949_portfolio`
--

CREATE TABLE `a14949_portfolio` (
  `id` int(11) NOT NULL,
  `email` varchar(250) DEFAULT NULL,
  `area` varchar(250) DEFAULT NULL,
  `areatext` text DEFAULT NULL,
  `sobremin` text DEFAULT NULL,
  `back` varchar(250) DEFAULT NULL,
  `perfil` varchar(250) DEFAULT NULL,
  `real_email` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `a14949_portfolio`
--

INSERT INTO `a14949_portfolio` (`id`, `email`, `area`, `areatext`, `sobremin`, `back`, `perfil`, `real_email`) VALUES
(3, 'champsilva16@gmail.com', 'fotografia', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'portfolioimgs/b60c60d1a8479e84268.jpg', 'portfolioimgs/b60c472cac9593logo.jpg', 'champsilva16@gmai.com'),
(8, 'champsilva16@gmail.com', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'portfolioimgs/b60c7566bc06572.jpeg', 'portfolioimgs/b60c7566fb19f92.jpeg', 'ma@cic.pt'),
(0, 'champsilva16@gmail.com', 'adadad', 'sadasda', 'adasdasdas', 'portfolioimgs/b6247850de6c4fdelicate flor.png', 'portfolioimgs/b6247850de6c56unknown.png', 'admin@cic.pt');

-- --------------------------------------------------------

--
-- Estrutura da tabela `a14949_trabalhos`
--

CREATE TABLE `a14949_trabalhos` (
  `id_tra` int(11) NOT NULL,
  `trabalho` text DEFAULT NULL,
  `email_tra` varchar(250) DEFAULT NULL,
  `titulo` varchar(250) DEFAULT NULL,
  `descricao` text DEFAULT NULL,
  `dta` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `standby` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `a14949_trabalhos`
--

INSERT INTO `a14949_trabalhos` (`id_tra`, `trabalho`, `email_tra`, `titulo`, `descricao`, `dta`, `standby`) VALUES
(135, 'trabalhos/b60c74baaed6d11.jpeg', 'chouricobanl@come.me', 'chouriços de carne', '', '2021-06-14 14:19:42', 1),
(137, 'trabalhos/b60c74bdf6eaa9revisoes-sobre-cesario-verde.pdf', '1@cic.pt', 'revisoes-sobre-cesario-verde', '', '2021-06-14 12:47:41', 1),
(139, 'trabalhos/b60c752d3298292.jpeg', 'ma@cic.pt', 'xzcsfsdgsgsgs', '', '2021-06-14 14:21:39', 1),
(140, 'trabalhos/b60c75353a1780forms.html', 'ma@cic.pt', 'csdvsdgsbs', '', '2021-06-14 14:22:11', 1),
(0, 'trabalhos/b624784e0e1f7ddelicate flor.png', 'admin@cic.pt', 'yes', 'yes', '2022-04-01 22:51:30', 1),
(0, 'trabalhos/b62489cc31a367keyhole.png', 'admin@cic.pt', 'key', 'key', '2022-04-02 18:45:38', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `a14949_utils`
--

CREATE TABLE `a14949_utils` (
  `email` varchar(250) NOT NULL,
  `nome` varchar(250) DEFAULT NULL,
  `telefone` int(11) DEFAULT NULL,
  `password` varchar(250) DEFAULT NULL,
  `nickname` varchar(250) DEFAULT NULL,
  `tipo` int(11) DEFAULT NULL,
  `foto` varchar(250) NOT NULL DEFAULT 'profile/default.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `a14949_utils`
--

INSERT INTO `a14949_utils` (`email`, `nome`, `telefone`, `password`, `nickname`, `tipo`, `foto`) VALUES
('admin@cic.pt', 'admin7', 934460917, '111', 'admin', 2, 'profile/a6247898d114ec.jpg'),
('pedrosalimaa@gmail.com', 'teste', 0, 'lisboa09', 'ferreira', 1, 'profile/default.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
