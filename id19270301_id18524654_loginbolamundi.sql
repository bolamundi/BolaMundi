-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 27-Jul-2022 às 23:41
-- Versão do servidor: 10.5.16-MariaDB
-- versão do PHP: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `id19270301_id18524654_loginbolamundi`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `avaliacoes`
--

CREATE TABLE `avaliacoes` (
  `Id` int(11) NOT NULL,
  `Estrelas` int(5) NOT NULL,
  `Id_usuario` int(11) NOT NULL,
  `Id_selecao` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `avaliacoes`
--

INSERT INTO `avaliacoes` (`Id`, `Estrelas`, `Id_usuario`, `Id_selecao`) VALUES
(1, 5, 57, 1),
(2, 5, 57, 1),
(3, 5, 57, 1),
(4, 2, 57, 1),
(5, 1, 57, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `comentarios`
--

CREATE TABLE `comentarios` (
  `Id` int(255) NOT NULL,
  `Comentario` varchar(800) COLLATE utf8_unicode_ci NOT NULL,
  `Nome` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `Data` date NOT NULL,
  `Id_usuario` int(11) NOT NULL,
  `Id_selecao` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `comentarios`
--

INSERT INTO `comentarios` (`Id`, `Comentario`, `Nome`, `Data`, `Id_usuario`, `Id_selecao`) VALUES
(64, 'Neymar craque de bola, gênio ', 'Lucas', '2022-04-17', 3, 0),
(65, 'Pega eles, pit', 'Lucas', '2022-04-17', 3, 0),
(66, 'Thales, onde quem é vc??????', 'Didico', '2022-04-17', 5, 0),
(67, 'quem é**', 'Didico', '2022-04-17', 5, 0),
(68, 'teste', 'Lucas', '2022-04-19', 3, 0),
(69, 'Comentario', 'Lucas', '2022-07-07', 57, 1),
(71, 'fefefe', 'Lucas', '2022-07-27', 57, 1),
(73, 'scce', 'Lucas', '2022-07-27', 57, 1),
(74, 'dffd', 'Lucas', '2022-07-27', 57, 1),
(75, 'gtfrbr', 'Lucas', '2022-07-27', 57, 1),
(76, 'ihiih', 'Lucas', '2022-07-27', 57, 1),
(77, 'kbk,', 'TIMESTAMP', '2022-07-27', 63, 1),
(78, 'O tempo está passando', 'TIMESTAMP', '2022-07-27', 63, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `jogadores`
--

CREATE TABLE `jogadores` (
  `Id` int(11) NOT NULL,
  `Nome` varchar(40) NOT NULL,
  `Numero` int(11) NOT NULL,
  `Posicao` varchar(40) NOT NULL,
  `Id_selecao` int(11) NOT NULL,
  `Pais` varchar(54) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `jogadores`
--

INSERT INTO `jogadores` (`Id`, `Nome`, `Numero`, `Posicao`, `Id_selecao`, `Pais`) VALUES
(1, 'Neymar ', 10, 'Meia', 1, 'Brasil'),
(5, 'Vinícius Junior', 20, 'Ponta esquerda', 1, 'Brasil'),
(6, 'Wesley Safadão ', 33, 'Ponta esquerda', 1, 'Brasil'),
(7, 'Lucas', 14, 'Ponta esquerda', 1, 'Brasil');

-- --------------------------------------------------------

--
-- Estrutura da tabela `selecoes`
--

CREATE TABLE `selecoes` (
  `Id` int(11) NOT NULL,
  `Pais` varchar(88) NOT NULL,
  `Bandeira` varchar(88) NOT NULL,
  `Ajetivo` varchar(88) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `selecoes`
--

INSERT INTO `selecoes` (`Id`, `Pais`, `Bandeira`, `Ajetivo`) VALUES
(1, 'Brasil', '', 'Brasileira');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `Id` int(11) NOT NULL,
  `Nome` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Senha` varchar(400) NOT NULL,
  `Acesso` varchar(10) NOT NULL,
  `Data` date NOT NULL,
  `Status` varchar(100) NOT NULL DEFAULT 'Ativo',
  `Rank` varchar(100) NOT NULL DEFAULT '0',
  `Saldo` int(100) NOT NULL DEFAULT 0,
  `Xp` int(100) NOT NULL DEFAULT 0,
  `RecompensaTimestamp` timestamp NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`Id`, `Nome`, `Email`, `Senha`, `Acesso`, `Data`, `Status`, `Rank`, `Saldo`, `Xp`, `RecompensaTimestamp`) VALUES
(57, 'Lucas', 'lucas@bolamundi.com', '$2y$10$Xy28YXMQKSMfokA2wJuituQMH70kU9urrbTeSyVBgppEc5B/zoES6', 'Admin', '2022-07-07', 'Ativo', '0', 25, 0, '2022-07-27 16:12:26'),
(58, 'Carol', 'general@bolamundi.com', '$2y$10$YgyM5zRCA4EO8IroShYsg.oVrsavqt8SBUnJLvZrLdx6/eTO1s5Em', 'Admin', '2022-07-17', 'Ativo', '0', 0, 0, '0000-00-00 00:00:00'),
(59, 'Dj Regerinho', 'djrogerinho@gmail.com', '$2y$10$ck1xzNc7eAwIwUn7/kUqme1BJMFXpWkXkC5LO/2tmBwP/AqHA7G02', 'Admin', '2022-07-18', 'Ativo', '0', 0, 0, '0000-00-00 00:00:00'),
(61, 'Vinícius Junior', 'vinijr@gmail.com', '$2y$10$UoSoa8AD0ArFqKDCEDq8.ulIMZieh4sb.fHwS.zkLrd6Us6Xgkude', 'Admin', '2022-07-21', 'Ativo', '0', 0, 0, '0000-00-00 00:00:00'),
(62, 'Dj Rogerinho', 'teste@gmail.com', '$2y$10$YFYbJOO.B/aSgS/hOBm9MeVhbR1XnfRCt/DeV9EdUKs0vkuXTFlEu', 'Usuario', '2022-07-24', 'Ativo', '0', 0, 0, '0000-00-00 00:00:00'),
(63, 'TIMESTAMP', 'timestamp@gmail.com', '$2y$10$xA8crjgh/ajRE0lmj0EErusKWdj14m4YGzGrQbW2ZuEOW/YwLtH9S', 'Usuario', '2022-07-25', 'Ativo', '0', 165, 0, '2022-07-27 16:48:40'),
(66, 'Lucas343', 'lucas@gmail.com', '$2y$10$bKrs.0IXlMXPjdiZDKdWUOTMasNkbvqQOFPHw4HJoXPdeUDAurLwW', 'Usuario', '2022-07-25', 'Ativo', '0', 470, 0, '2022-07-26 21:04:02'),
(67, 'bruno henrique', 'brunohenrique@bolamundi.com', '$2y$10$CgODEfoHCHq3IJB/ZlB7B.seWoUner3J0lE62H9oCXBSb0bW9a9Wa', 'Usuario', '2022-07-27', 'Ativo', '0', 0, 0, '0000-00-00 00:00:00'),
(68, 'io', 'iosupremacy@gmail.com', '$2y$10$R4aeu5EhrOBfrG7F9cf83.TERF51Clrcs2Gwixf6yfawJETK7ug..', 'Usuario', '2022-07-27', 'Ativo', '0', 0, 0, '0000-00-00 00:00:00');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `avaliacoes`
--
ALTER TABLE `avaliacoes`
  ADD PRIMARY KEY (`Id`);

--
-- Índices para tabela `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`Id`);

--
-- Índices para tabela `jogadores`
--
ALTER TABLE `jogadores`
  ADD PRIMARY KEY (`Id`);

--
-- Índices para tabela `selecoes`
--
ALTER TABLE `selecoes`
  ADD PRIMARY KEY (`Id`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `avaliacoes`
--
ALTER TABLE `avaliacoes`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `Id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT de tabela `jogadores`
--
ALTER TABLE `jogadores`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `selecoes`
--
ALTER TABLE `selecoes`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
