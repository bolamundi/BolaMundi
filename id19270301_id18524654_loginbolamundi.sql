-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 05-Ago-2022 às 14:42
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
(5, 1, 57, 1),
(6, 5, 57, 1),
(7, 2, 57, 1),
(8, 5, 57, 1),
(9, 5, 57, 1),
(10, 5, 57, 1),
(11, 5, 57, 1),
(12, 5, 57, 1),
(13, 5, 57, 1),
(14, 4, 57, 1),
(15, 5, 57, 1),
(16, 5, 57, 1),
(17, 5, 57, 1),
(18, 5, 57, 1),
(19, 5, 57, 1),
(20, 5, 57, 1),
(21, 5, 57, 1),
(22, 5, 57, 1),
(23, 5, 57, 1),
(24, 5, 57, 1),
(25, 5, 57, 1);

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
(78, 'O tempo está passando', 'TIMESTAMP', '2022-07-27', 63, 1),
(79, 'd', 'Lucas', '2022-08-04', 57, 1),
(80, 'sfd', 'Lucas', '2022-08-04', 57, 1),
(82, 'dpvijsrigbwergjefs', 'Lucas', '2022-08-04', 57, 1),
(83, 'ef', 'Lucas', '2022-08-04', 57, 1),
(84, 'testeeeeeeeeee', 'Lucas', '2022-08-04', 57, 1),
(85, 'teste', 'Lucas', '2022-08-05', 57, 1),
(86, 'teste', 'Lucas', '2022-08-05', 57, 1),
(87, 'teste', 'Lucas', '2022-08-05', 57, 1),
(88, 'teste', 'Lucas', '2022-08-05', 57, 1),
(89, 'teste', 'Lucas', '2022-08-05', 57, 1),
(90, 'teste', 'Lucas', '2022-08-05', 57, 1),
(91, 'teste', 'Lucas', '2022-08-05', 57, 1),
(92, 'teste', 'Lucas', '2022-08-05', 57, 1),
(93, 'teste', 'Lucas', '2022-08-05', 57, 1),
(94, 'teste', 'Lucas', '2022-08-05', 57, 1),
(95, 'teste\r\n\r\n', 'Lucas', '2022-08-05', 57, 1),
(96, 'yuudvS', 'Lucas', '2022-08-05', 57, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `jogadores`
--

CREATE TABLE `jogadores` (
  `Id` int(11) NOT NULL,
  `Nome` varchar(44) COLLATE utf8_unicode_ci NOT NULL,
  `Pais` varchar(56) COLLATE utf8_unicode_ci NOT NULL,
  `Numero` int(22) NOT NULL,
  `Posicao` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `Id_selecao` int(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `jogadores`
--

INSERT INTO `jogadores` (`Id`, `Nome`, `Pais`, `Numero`, `Posicao`, `Id_selecao`) VALUES
(1, 'Alisson', 'Brasil', 1, 'Goleiro', 1),
(2, 'Ederson', 'Brasil', 23, 'Goleiro', 1),
(3, 'Weverton', 'Brasil', 12, 'Goleiro', 1),
(7, 'Alex Sandro', 'Brasil', 6, 'Lateral-esquerdo', 1),
(8, 'Alex Telles', 'Brasil', 6, 'Lateral-esquerdo', 1),
(9, 'Daniel Alves', 'Brasil', 13, 'Lateral-direito', 1),
(10, 'Danilo', 'Brasil', 2, 'Lateral-direito', 1),
(11, 'Guilherme Arana', 'Brasil', 16, 'Lateral-esquerdo', 1),
(12, 'Eder Militão', 'Brasil', 14, 'Zagueiro', 1),
(13, 'Gabriel Magalhães', 'Brasil', 4, 'Zagueiro', 1),
(14, 'Marquinhos', 'Brasil', 4, 'Zagueiro', 1),
(15, 'Thiago Silva', 'Brasil', 3, 'Zagueiro', 1),
(16, 'Bruno Guimarães', 'Brasil', 8, 'Meia', 1),
(17, 'Casemiro', 'Brasil', 5, 'Meia', 1),
(18, 'Danilo', 'Brasil', 2, 'Meia', 1),
(19, 'Fabinho', 'Brasil', 15, 'Meia', 1),
(20, 'Fred', 'Brasil', 8, 'Meia', 1),
(21, 'Lucas Paquetá', 'Brasil', 17, 'Meia', 1),
(22, 'Philippe Coutinho', 'Brasil', 11, 'Meia', 1),
(23, 'Gabriel Jesus', 'Brasil', 9, 'Atacante', 1),
(24, 'Gabriel Martinelli', 'Brasil', 21, 'Atacante', 1),
(25, 'Matheus Cunha', 'Brasil', 9, 'Atacante', 1),
(26, 'Neymar Jr', 'Brasil', 10, 'Atacante', 1),
(27, 'Raphinha', 'Brasil', 19, 'Atacante', 1),
(28, 'Richarlison', 'Brasil', 7, 'Atacante', 1),
(29, 'Rodrygo', 'Brasil', 21, 'Atacante', 1),
(30, 'Vinícius Júnior', 'Brasil', 18, 'Atacante', 1),
(31, 'Manuel Neuer', 'Alemanha', 1, 'Goleiro', 2),
(32, 'Kevin Trapp', 'Alemanha', 22, 'Goleiro', 2),
(33, 'Oliver Baumann', 'Alemanha', 1, 'Goleiro', 2),
(34, 'Benjamin Henrichs', 'Alemanha', 6, 'Zagueiro', 2),
(35, 'Thilo Kehrer', 'Alemanha', 2, 'Zagueiro', 2),
(36, 'Lukas Klostermann', 'Alemanha', 16, 'Lateral-direito', 2),
(37, 'David Raum', 'Alemanha', 17, 'Lateral-esquerdo', 2),
(38, 'Antonio Rüdiger', 'Alemanha', 2, 'Zagueiro', 2),
(39, 'Nico Schlotterbeck', 'Alemanha', 23, 'Zagueiro', 2),
(40, ' Niklas Süle', 'Alemanha', 15, 'Zagueiro', 2),
(41, 'Jonathan Tah', 'Alemanha', 5, 'Zagueiro', 2),
(42, 'Julian Brandt', 'Alemanha', 20, 'Meia', 2),
(43, 'Serge Gnabry', 'Alemanha', 10, 'Meia', 2),
(44, 'Leon Goretzka', 'Alemanha', 18, 'Meia', 2),
(45, 'Ilkay Gündogan', 'Alemanha', 21, 'Meia', 2),
(46, 'Kai Havertz', 'Alemanha', 7, 'Meia', 2),
(47, 'Jonas Hofmann', 'Alemanha', 23, 'Meia', 2),
(48, 'Joshua Kimmich', 'Alemanha', 6, 'Meia', 2),
(49, 'Jamal Musiala ', 'Alemanha', 14, 'Meia', 2),
(50, 'Thomas Müller', 'Alemanha', 25, 'Meia', 2),
(51, 'Marco Reus', 'Alemanha', 11, 'Meia', 2),
(52, 'Leroy Sané', 'Alemanha', 19, 'Meia', 2),
(53, 'Anton Stach ', 'Alemanha', 24, 'Meia', 2),
(54, 'Karim Adeyemi', 'Alemanha', 13, 'Atacante', 2),
(55, 'Lukas Nmecha', 'Alemanha', 11, 'Atacante', 2),
(56, 'Timo Werner', 'Alemanha', 11, 'Atacante', 2),
(57, 'Mohammed Al-Owais', 'Arábia Saudita', 21, 'Goleiro', 3),
(58, 'Mohammed Al Yami', 'Arábia Saudita', 21, 'Goleiro', 3),
(59, 'Nawaf Al-Aqidi', 'Arábia Saudita', 21, 'Goleiro', 3),
(60, 'Ali Lajami', 'Arábia Saudita', 12, 'Zagueiro', 3),
(61, 'Ziyad Al-Sahafi', 'Arábia Saudita', 3, 'Zagueiro', 3),
(62, 'Abdulelah Ali Awadh Al Amri', 'Arábia Saudita', 4, 'Zagueiro', 3),
(63, 'Yasser Al-Shahrani', 'Arábia Saudita', 13, 'Lateral-esquerdo', 3),
(64, 'Mohamed Kanno', 'Arábia Saudita', 28, 'Meia', 3),
(65, 'Ali Al-Hassan', 'Arábia Saudita', 15, 'Meia', 3),
(66, 'Nasser Aldawsari', 'Arábia Saudita', 24, 'Meia', 3),
(67, 'Abdulaziz Al-Bishi', 'Arábia Saudita', 8, 'Atacante', 3),
(68, 'Firas Al-Buraikan', 'Arábia Saudita', 9, 'Atacante', 3),
(69, 'Salem Al-Dawsari', 'Arábia Saudita', 10, 'Atacante', 3),
(70, 'Saleh Al-Shehri', 'Arábia Saudita', 11, 'Atacante', 3),
(71, 'Salman Al-Faraj', 'Arábia Saudita', 7, 'Meia', 3),
(72, 'Abdullah Radif', 'Arábia Saudita', 19, 'Atacante', 3),
(73, 'Abdullah Otayf', 'Arábia Saudita', 14, 'Meia', 3),
(74, 'Khalid Al-Ghannam', 'Arábia Saudita', 25, 'Meia', 3),
(75, 'Hattan Bahebri', 'Arábia Saudita', 27, 'Meia', 3),
(76, 'Mohammed Al-Breik', 'Arábia Saudita', 6, 'Lateral-direito', 3),
(77, 'Hassan Tombakti', 'Arábia Saudita', 2, 'Zagueiro', 3),
(78, 'Abdulla Madou', 'Arábia Saudita', 3, 'Zagueiro', 3),
(79, 'Sami Al-Najei', 'Arábia Saudita', 16, 'Meia', 3),
(80, 'Fahad Al-Muwallad', 'Arábia Saudita', 19, 'Atacante', 3),
(81, 'Ahmed Sharahili', 'Arábia Saudita', 17, 'Zagueiro', 3),
(82, 'Sultan Al-Ghanam', 'Arábia Saudita', 2, 'Lateral-direito', 3),
(83, 'Ali Al-Bulaihi', 'Arábia Saudita', 5, 'Zagueiro', 3);

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
  `RecompensaTimestamp` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  `Validador` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`Id`, `Nome`, `Email`, `Senha`, `Acesso`, `Data`, `Status`, `Rank`, `Saldo`, `Xp`, `RecompensaTimestamp`, `Validador`) VALUES
(57, 'Lucas', 'lucas@bolamundi.com', '$2y$10$Xy28YXMQKSMfokA2wJuituQMH70kU9urrbTeSyVBgppEc5B/zoES6', 'Admin', '2022-07-07', 'Ativo', '0', 35, 0, '2022-08-05 10:48:27', 0),
(58, 'Carol', 'general@bolamundi.com', '$2y$10$YgyM5zRCA4EO8IroShYsg.oVrsavqt8SBUnJLvZrLdx6/eTO1s5Em', 'Admin', '2022-07-17', 'Bloqueado', '0', 0, 0, '0000-00-00 00:00:00', 0),
(59, 'Dj Regerinho', 'djrogerinho@gmail.com', '$2y$10$ck1xzNc7eAwIwUn7/kUqme1BJMFXpWkXkC5LO/2tmBwP/AqHA7G02', 'Admin', '2022-07-18', 'Ativo', '0', 0, 0, '0000-00-00 00:00:00', 0),
(61, 'Vinícius Junior', 'vinijr@gmail.com', '$2y$10$UoSoa8AD0ArFqKDCEDq8.ulIMZieh4sb.fHwS.zkLrd6Us6Xgkude', 'Admin', '2022-07-21', 'Ativo', '0', 0, 0, '0000-00-00 00:00:00', 0),
(62, 'Dj Rogerinho', 'teste@gmail.com', '$2y$10$YFYbJOO.B/aSgS/hOBm9MeVhbR1XnfRCt/DeV9EdUKs0vkuXTFlEu', 'Usuario', '2022-07-24', 'Ativo', '0', 0, 0, '0000-00-00 00:00:00', 0),
(63, 'TIMESTAMP', 'timestamp@gmail.com', '$2y$10$xA8crjgh/ajRE0lmj0EErusKWdj14m4YGzGrQbW2ZuEOW/YwLtH9S', 'Usuario', '2022-07-25', 'Ativo', '0', 165, 0, '2022-07-27 16:48:40', 0),
(66, 'Lucas343', 'lucas@gmail.com', '$2y$10$bKrs.0IXlMXPjdiZDKdWUOTMasNkbvqQOFPHw4HJoXPdeUDAurLwW', 'Usuario', '2022-07-25', 'Ativo', '0', 470, 0, '2022-07-26 21:04:02', 0),
(67, 'bruno henrique', 'brunohenrique@bolamundi.com', '$2y$10$CgODEfoHCHq3IJB/ZlB7B.seWoUner3J0lE62H9oCXBSb0bW9a9Wa', 'Usuario', '2022-07-27', 'Ativo', '0', 0, 0, '0000-00-00 00:00:00', 0),
(68, 'io', 'iosupremacy@gmail.com', '$2y$10$R4aeu5EhrOBfrG7F9cf83.TERF51Clrcs2Gwixf6yfawJETK7ug..', 'Usuario', '2022-07-27', 'Ativo', '0', 0, 0, '0000-00-00 00:00:00', 0),
(69, 'ioo', 'iobones@gmail.com', '$2y$10$Yxo15o8xqw6pNaQiSzCDh.ARsi3uxt7lsKG/G4MqsmOYSQmbHuGiG', 'Usuario', '2022-08-02', 'Ativo', '0', 0, 0, '0000-00-00 00:00:00', 0),
(70, '1234', 'helpterapia@gmail.com', '$2y$10$1AeZpLjsPDrWjS7UZEjw5OPIZbjw1kUnEKKMqWvGJ8Q4u1RdEIHey', 'Usuario', '2022-08-02', 'Ativo', '0', 0, 0, '0000-00-00 00:00:00', 0);

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
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de tabela `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `Id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT de tabela `jogadores`
--
ALTER TABLE `jogadores`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT de tabela `selecoes`
--
ALTER TABLE `selecoes`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
