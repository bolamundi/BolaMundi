-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 26-Abr-2022 às 10:41
-- Versão do servidor: 10.5.12-MariaDB
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
-- Banco de dados: `id18524654_loginbolamundi`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `comentarios`
--

CREATE TABLE `comentarios` (
  `Id` int(255) NOT NULL,
  `Comentario` varchar(800) COLLATE utf8_unicode_ci NOT NULL,
  `Nome` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `Data` date NOT NULL,
  `Id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `comentarios`
--

INSERT INTO `comentarios` (`Id`, `Comentario`, `Nome`, `Data`, `Id_usuario`) VALUES
(64, 'Neymar craque de bola, gênio ', 'Lucas', '2022-04-17', 3),
(65, 'Pega eles, pit', 'Lucas', '2022-04-17', 3),
(66, 'Thales, onde quem é vc??????', 'Didico', '2022-04-17', 5),
(67, 'quem é**', 'Didico', '2022-04-17', 5),
(68, 'teste', 'Lucas', '2022-04-19', 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `Id` int(11) NOT NULL,
  `Nome` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Senha` varchar(50) NOT NULL,
  `Acesso` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`Id`, `Nome`, `Email`, `Senha`, `Acesso`) VALUES
(1, 'Marinho', 'Marinho@marinho.com', '123', 'Admin'),
(2, 'Pedro queixada', 'pedro@gmail.com', 'abc', 'Admin'),
(3, 'Lucas', 'lucas@bolamundi.com', '1234', 'Admin'),
(5, 'Didico', 'vapo@vapo.com', '123', 'Admin'),
(7, 'Caroline', 'caroline@bolamundi.com', 'gabigol9', 'Camisa 9'),
(12, 'gabriel', 'gabriel@flamengo.com', '2332', ''),
(22, 'Ana Clara', 'anaclara@bolamundi.com', 'aninha321', 'Camisa 2'),
(24, 'Sofia', 'sofia@bolamundi.com', 'sofia123', 'Camisa 77'),
(35, 'Coe tales, quem eh tu, meu patrão?', 'criaumperfil@parameresponder.com', '12345678Ab', 'Usuario'),
(31, 'teste', 'teste@gmail.com', 'Teste123', 'Usuario'),
(32, 'Suy', 'suy@teste.com', 'Susu12345', 'Usuario'),
(33, 'Flamengo', 'rubroNegro@gmail.com', 'Paralelepipedo8', 'Usuario'),
(34, 'Thales', 'pretoescuro@gmail.com', 'pRETOESCURO123', 'Usuario'),
(55, 'Ana Eduarda', 'anaeduardamartins04@gmail.com', '123Anime', 'Usuario'),
(56, 'Joao pé de feijçao', 'feijao@joao.com', '123', 'Admin');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `comentarios`
--
ALTER TABLE `comentarios`
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
-- AUTO_INCREMENT de tabela `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `Id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
