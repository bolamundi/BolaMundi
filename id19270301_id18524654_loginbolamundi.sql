-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 17-Set-2022 às 04:04
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
(25, 5, 57, 1),
(26, 0, 57, 1),
(27, 5, 57, 1),
(28, 0, 57, 1),
(29, 5, 57, 1),
(30, 5, 57, 1),
(31, 5, 57, 1),
(32, 5, 57, 1),
(33, 5, 57, 2),
(34, 5, 57, 2),
(35, 5, 57, 2),
(36, 5, 57, 2),
(37, 5, 57, 2),
(38, 5, 57, 2),
(39, 5, 57, 1),
(40, 5, 57, 1),
(41, 5, 57, 2),
(42, 5, 57, 1),
(43, 5, 57, 1),
(44, 5, 57, 1),
(45, 5, 57, 1),
(46, 5, 57, 1);

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
(71, 'fefefe', 'Lucas', '2022-07-27', 57, 1),
(73, 'scce', 'Lucas', '2022-07-27', 57, 1),
(74, 'dffd', 'Lucas', '2022-07-27', 57, 1),
(75, 'gtfrbr', 'Lucas', '2022-07-27', 57, 1),
(76, 'ihiih', 'Lucas', '2022-07-27', 57, 1),
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
(94, 'teste', 'Lucas', '2022-08-05', 57, 1),
(97, 'regerg', 'Lucas', '2022-08-05', 57, 1),
(105, 'gssgsv', 'Lucas343', '2022-08-10', 66, 1),
(109, 'first', 'Lucas', '2022-08-11', 57, 2),
(125, 'sgs', 'Lucas', '2022-08-16', 57, 5),
(126, 'asd', 'Lucas', '2022-08-16', 57, 1),
(127, 'sef', 'Lucas', '2022-08-16', 57, 1),
(128, 'ewf', 'Lucas', '2022-08-16', 57, 1),
(129, 'rg', 'Lucas', '2022-08-16', 57, 1),
(130, 'rbd', 'Lucas', '2022-08-16', 57, 1),
(131, 'bd', 'Lucas', '2022-08-16', 57, 1),
(132, 'esfesdf', 'Lucas', '2022-08-16', 57, 1),
(133, 'efsfe', 'Lucas', '2022-08-16', 57, 1),
(134, 'rgd', 'Lucas', '2022-08-16', 57, 1),
(135, 'hkjbkjn', 'Lucas', '2022-08-16', 57, 1),
(136, 'khjkbkj', 'Lucas', '2022-08-16', 57, 1),
(138, 'çkk', 'Lucas', '2022-08-16', 57, 1),
(139, 'bvj', 'Lucas', '2022-08-16', 57, 1),
(140, 'jgfuhg', 'Lucas', '2022-08-16', 57, 1),
(141, 'ij', 'Lucas', '2022-08-16', 57, 1),
(142, '~;´´.´-0n.', 'Lucas', '2022-08-16', 57, 1),
(143, 'ohui', 'Lucas', '2022-08-16', 57, 1),
(144, 'dfbdf', 'Lucas', '2022-08-16', 57, 1),
(145, 'sdvsdv', 'Lucas', '2022-08-16', 57, 1),
(146, '´jyh', 'Lucas', '2022-08-17', 57, 1),
(148, 'kjgjk', 'Lucas', '2022-08-17', 57, 1),
(149, 'ddfdf', 'Lucas', '2022-08-17', 57, 1),
(150, 'wfefse', 'Lucas', '2022-08-17', 57, 1),
(151, 'htgge', 'Lucas', '2022-08-17', 57, 1),
(152, 'htgge', 'Lucas', '2022-08-17', 57, 1),
(153, 'awesdsdf', 'Lucas', '2022-08-17', 57, 1),
(154, 'dfdfsdvsdf', 'Lucas', '2022-08-17', 57, 1),
(155, 'efssrgrgerg', 'Lucas', '2022-08-17', 57, 1),
(156, 'dadsfdh', 'Lucas', '2022-08-17', 57, 1),
(157, 'asda', 'Lucas', '2022-08-17', 57, 1),
(163, 'sdfgrtjcdyh7ijued5tc5kidt7g6o', 'Lucas', '2022-08-17', 57, 1),
(164, ' dsfbdtn', 'Lucas', '2022-08-17', 57, 1),
(165, 'v8lc778vv789', 'Lucas', '2022-08-17', 57, 1),
(166, 'tdmg', 'Lucas', '2022-08-17', 57, 1),
(167, 'n-0[9- ç;n9~~nçnçñ', 'Lucas', '2022-08-17', 57, 1),
(168, 'nn~bnç~9-ç', 'Lucas', '2022-08-17', 57, 1),
(169, 'gbçç9n~´´ph9', 'Lucas', '2022-08-17', 57, 1),
(170, '~hn~]0n=]n0~]', 'Lucas', '2022-08-17', 57, 1),
(172, 'srgrSDTHDTHTHT', 'Lucas', '2022-08-17', 57, 1),
(173, 'OUYFD', 'Lucas', '2022-08-17', 57, 1),
(174, 'SFJF', 'Lucas', '2022-08-17', 57, 1),
(175, 'uepa', 'Lucas', '2022-08-31', 57, 6),
(176, 'teste', 'Lucas', '2022-09-07', 57, 1),
(177, 'thffg', 'Lucas', '2022-09-08', 57, 1),
(179, 'vinicius', 'Lucas', '2022-09-14', 57, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `contato`
--

CREATE TABLE `contato` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `assunto` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `conteudo` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `contato`
--

INSERT INTO `contato` (`id`, `nome`, `email`, `assunto`, `conteudo`) VALUES
(1, 'teste', 'teste@teste.com', 'testando', 'testes'),
(2, 'teste dnv', 'dnvteste@teste.com', 'testesss', 'testeeee'),
(3, 'teste dnv', 'dnvteste@teste.com', 'testesss', 'testearasda'),
(4, 'teste dnv', 'dnvteste@teste.com', 'testesss', 'asdasd'),
(5, 'teste de retorno', 'testederetorno@gmail.com', 'testeqwe', 'dostgfjkqpsaoek32'),
(6, 'Opa', 'Oi@gmail.com', 'oie', 'oiee'),
(7, 'opa', 'opa@gmail.com', 'opa', 'opaa'),
(8, 'uepa', 'uepa@gmail.com', 'uepa', 'uepaaa'),
(9, 'eta', 'eta@gmail.com', 'eta', 'etaaa'),
(10, 'aidels', 'aiaiai@gmail.com', 'aiaia', 'aialsl'),
(11, 'aoba', 'aoba@gmail.com', 'aoba', 'aobaaaa'),
(12, 'eba', 'ebaaa@gmail', 'ajekakkr', 'jskaks'),
(13, 'testedehoo', 'hook@gmail.com', 'aasidi', 'aisdoi'),
(14, 'aiai', 'aiaiai@gmail.com', 'aolkfja', 'SDLKJGÁLSDK'),
(15, 'a', 'a@gmail.com', 'a', 'aa'),
(16, 'b', 'b@gmail.com', 'b', 'bb'),
(17, 'c', 'c@gmail.com', 'c', 'cc'),
(18, 'c', 'd@gmail.com', 'asd', 'asd'),
(19, 'e', 'e@gmail.com', 'e', 'eeee'),
(20, 'testando', 'testando@gmail.com', 'testando', 'testandooo'),
(21, 'teste', 'teste@teste.com', 'flamengo', 'flamengo ');

-- --------------------------------------------------------

--
-- Estrutura da tabela `denuncia`
--

CREATE TABLE `denuncia` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mensagem` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `denuncia`
--

INSERT INTO `denuncia` (`id`, `nome`, `mensagem`) VALUES
(1, 'Lucas', 'teste');

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
(83, 'Ali Al-Bulaihi', 'Arábia Saudita', 5, 'Zagueiro', 3),
(84, 'Emiliano Martínez', 'Argentina', 23, 'Goleiro', 4),
(85, 'Franco Armani', 'Argentina', 1, 'Goleiro', 4),
(86, 'Juan Musso', 'Argentina', 28, 'Goleiro', 4),
(87, 'Cristian Romero ', 'Argentina', 13, 'Zagueiro', 4),
(88, 'Germán Pezzella ', 'Argentina', 6, 'Zagueiro', 4),
(89, 'Gonzalo Montiel ', 'Argentina', 4, 'Lateral-direito', 4),
(90, 'Lisandro Martínez ', 'Argentina', 5, 'Zagueiro', 4),
(91, 'Lucas Martínez Quarta ', 'Argentina', 2, 'Zagueiro', 4),
(92, 'Marcos Acuña', 'Argentina', 8, 'Lateral-esquerdo', 4),
(93, 'Nicolás Otamendi ', 'Argentina', 19, 'Zagueiro', 4),
(94, 'Nicolás Tagliafico ', 'Argentina', 3, 'Lateral-esquerdo', 4),
(95, 'Alexis Mac Allister ', 'Argentina', 8, 'Meia', 4),
(96, 'Ángel Di María ', 'Argentina', 11, 'Meia', 4),
(97, 'Giovani Lo Celso ', 'Argentina', 20, 'Meia', 4),
(98, 'Guido Rodríguez ', 'Argentina', 18, 'Meia', 4),
(99, 'Leandro Paredes ', 'Argentina', 5, 'Meia', 4),
(100, 'Papu Gómez ', 'Argentina', 17, 'Meia', 4),
(101, 'Rodrigo de Paul ', 'Argentina', 7, 'Meia', 4),
(102, 'Ángel Correa ', 'Argentina', 10, 'Atacante', 4),
(103, 'Julián Álvarez ', 'Argentina', 9, 'Atacante', 4),
(104, 'Lautaro Martínez ', 'Argentina', 22, 'Atacante', 4),
(105, 'Lionel Messi ', 'Argentina', 10, 'Atacante', 4),
(106, 'Lucas Ocampos ', 'Argentina', 16, 'Atacante', 4),
(107, 'Nicolás González ', 'Argentina', 15, 'Atacante', 4),
(108, 'Paulo Dybala ', 'Argentina', 21, 'Atacante', 4),
(109, 'Andrew Redmayne ', 'Austrália', 1, 'Goleiro', 5),
(110, 'Mathew Ryan ', 'Austrália', 1, 'Goleiro', 5),
(111, 'Mitchell Langerak ', 'Austrália', 12, 'Goleiro', 5),
(112, 'Aziz Behich ', 'Austrália', 16, 'Zagueiro', 5),
(113, 'Bailey Wright ', 'Austrália', 8, 'Zagueiro', 5),
(114, 'Fran Karačić ', 'Austrália', 3, 'Zagueiro', 5),
(115, 'Harry Souttar ', 'Austrália', 19, 'Zagueiro', 5),
(116, 'Kye Rowles', 'Austrália', 17, 'Zagueiro', 5),
(117, 'Trent Sainsbury', 'Austrália', 20, 'Zagueiro', 5),
(118, 'Aaron Mooy ', 'Austrália', 13, 'Meia', 5),
(119, 'Ajdin Hrustic ', 'Austrália', 10, 'Meia', 5),
(120, 'Denis Genreau ', 'Austrália', 17, 'Meia', 5),
(121, 'Jackson Irvine ', 'Austrália', 22, 'Meia', 5),
(122, 'James Jeggo ', 'Austrália', 5, 'Meia', 5),
(123, 'Kenneth Dougall ', 'Austrália', 23, 'Meia', 5),
(124, 'Martin Boyle ', 'Austrália', 6, 'Meia', 5),
(125, 'Tom Rogić ', 'Austrália', 23, 'Meia', 5),
(126, 'Awer Mabil ', 'Austrália', 11, 'Atacante', 5),
(127, 'Bruno Fornaroli ', 'Austrália', 9, 'Atacante', 5),
(128, 'Craig Goodwin ', 'Austrália', 19, 'Atacante', 5),
(129, 'Jamie Maclaren ', 'Austrália', 11, 'Atacante', 5),
(130, 'Riley McGree ', 'Austrália', 14, 'Atacante', 5),
(131, 'Mathew Leckie ', 'Austrália', 7, 'Atacante', 5),
(132, 'Mitchell Duke ', 'Austrália', 15, 'Atacante', 5),
(133, 'Koen Casteels ', 'Bélgica', 13, 'Goleiro', 6),
(134, 'Simon Mignolet ', 'Bélgica', 12, 'Goleiro', 6),
(135, 'Thibaut Courtois ', 'Bélgica', 1, 'Goleiro', 6),
(136, 'Arthur Theate ', 'Bélgica', 5, 'Zagueiro', 6),
(137, 'Jason Denayer ', 'Bélgica', 3, 'Zagueiro', 6),
(138, 'Jan Vertonghen', 'Bélgica', 5, 'Zagueiro', 6),
(139, 'Leander Dendoncker', 'Bélgica', 19, 'Zagueiro', 6),
(140, 'Toby Alderweireld', 'Bélgica', 2, 'Zagueiro', 6),
(141, 'Timothy Castagne', 'Bélgica', 21, 'Zagueiro', 6),
(142, 'Alexis Saelemaekers', 'Bélgica', 15, 'Meia', 6),
(143, 'Axel Witsel', 'Bélgica', 6, 'Meia', 6),
(144, 'Timothy Castagne', 'Bélgica', 21, 'Lateral-direito', 6),
(145, 'Thorgan Hazard', 'Bélgica', 16, 'Meia', 6),
(146, 'Thomas Meunier ', 'Bélgica', 15, 'Lateral-direito', 6),
(147, 'Yannick Carrasco ', 'Bélgica', 11, 'Meia', 6),
(148, 'Youri Tielemans ', 'Bélgica', 8, 'Meia', 6),
(149, 'Christian Benteke ', 'Bélgica', 20, 'Atacante', 6),
(150, 'Charles De Ketelaere ', 'Bélgica', 14, 'Atacante', 6),
(151, 'Dries Mertens ', 'Bélgica', 14, 'Atacante', 6),
(152, 'Eden Hazard ', 'Bélgica', 10, 'Atacante', 6),
(153, 'Kevin De Bruyne ', 'Bélgica', 7, 'Atacante', 6),
(154, 'Leandro Trossard ', 'Bélgica', 24, 'Atacante', 6),
(155, 'Michy Batshuayi ', 'Bélgica', 23, 'Atacante', 6),
(156, 'Romelu Lukaku ', 'Bélgica', 9, 'Atacante', 6),
(157, 'Dedryck Boyata ', 'Bélgica', 4, 'Zagueiro', 6),
(158, 'André Onana ', 'Camarões', 24, 'Goleiro', 7),
(159, 'Fabrice Ondoa ', 'Camarões', 1, 'Goleiro', 7),
(160, 'Simon Ngapandouetnbu ', 'Camarões', 1, 'Goleiro', 7),
(161, 'Ambroise Oyongo ', 'Camarões', 6, 'Lateral-esquerdo', 7),
(162, 'Collins Fai ', 'Camarões', 19, 'Lateral-direito', 7),
(163, 'Harold Moukoudi ', 'Camarões', 4, 'Zagueiro', 7),
(164, 'Jean-Charles Castelletto ', 'Camarões', 21, 'Zagueiro', 7),
(165, 'Jérôme Onguéné ', 'Camarões', 22, 'Zagueiro', 7),
(166, 'Michael Ngadeu-Ngadjui ', 'Camarões', 5, 'Zagueiro', 7),
(167, 'Nouhou Tolo ', 'Camarões', 11, 'Zagueiro', 7),
(168, 'Olivier Mbaissidara Mbaizo ', 'Camarões', 17, 'Zagueiro', 7),
(169, 'André-Frank Zambo Anguissa ', 'Camarões', 3, 'Meia', 7),
(170, 'Gaël Ondoua ', 'Camarões', 8, 'Meia', 7),
(171, 'Jean Onana ', 'Camarões', 26, 'Meia', 7),
(172, 'Martin Hongla ', 'Camarões', 18, 'Meia', 7),
(173, 'Pierre Kunde ', 'Camarões', 15, 'Meia', 7),
(174, 'Samuel Gouet ', 'Camarões', 14, 'Meia', 7),
(175, 'André-Frank Zambo Anguissa ', 'Camarões', 8, 'Meia', 7),
(176, 'Vincent Aboubakar ', 'Camarões', 26, 'Atacante', 7),
(177, 'Christian Bassogog ', 'Camarões', 11, 'Atacante', 7),
(178, 'Eric Maxim Choupo-Moting ', 'Camarões', 13, 'Atacante', 7),
(179, 'Ignatius Ganago ', 'Camarões', 20, 'Atacante', 7),
(180, 'Karl Toko Ekambi ', 'Camarões', 12, 'Atacante', 7),
(181, 'Léandre Tawamba ', 'Camarões', 3, 'Atacante', 7),
(182, 'Stéphane Bahoken ', 'Camarões', 9, 'Atacante', 7),
(183, 'Dayne St. Clair', 'Canadá', 1, 'Goleiro', 8),
(184, 'Milan Borjan', 'Canadá', 18, 'Goleiro', 8),
(185, 'Maxime Crépeau', 'Canadá', 16, 'Goleiro', 8),
(186, 'Alphonso Davies ', 'Canadá', 19, 'Zagueiro', 8),
(187, 'Alistair Johnston', 'Canadá', 2, ' Lateral-direito', 8),
(188, 'Doneil Henry ', 'Canadá', 15, 'Zagueiro', 8),
(189, 'Kamal Miller ', 'Canadá', 4, 'Zagueiro', 8),
(190, 'Richie Laryea ', 'Canadá', 22, 'Zagueiro', 8),
(191, 'Sam Adekugbe ', 'Canadá', 3, 'Lateral-esquerdo', 8),
(192, 'Scott Kennedy ', 'Canadá', 23, 'Zagueiro', 8),
(193, 'Steven Vitória ', 'Canadá', 5, 'Zagueiro', 8),
(194, 'Atiba Hutchinson ', 'Canadá', 13, 'Meia', 8),
(195, 'Ismaël Koné ', 'Canadá', 6, 'Meia', 8),
(196, 'Jonathan Osorio ', 'Canadá', 21, 'Meia', 8),
(197, 'Luca Koleosho ', 'Canadá', 0, 'Meia', 8),
(198, 'Mark-Anthony Kaye ', 'Canadá', 14, 'Meia', 8),
(199, 'Stephen Eustáquio ', 'Canadá', 7, 'Meia', 8),
(200, 'Samuel Piette ', 'Canadá', 6, 'Meia', 8),
(201, 'Cyle Larin ', 'Canadá', 17, 'Atacante', 8),
(202, 'Ike Ugbo ', 'Canadá', 12, 'Atacante', 8),
(203, 'Jonathan David ', 'Canadá', 20, 'Atacante', 8),
(204, 'Junior Hoilett ', 'Canadá', 10, 'Atacante', 8),
(205, 'Lucas Cavallini ', 'Canadá', 9, 'Atacante', 8),
(206, 'Tajon Buchanan ', 'Canadá', 11, 'Atacante', 8),
(207, 'Theodor Corbeanu ', 'Canadá', 11, 'Atacante', 8),
(208, 'Liam Millar', 'Canadá', 9, 'Atacante', 8),
(209, 'Jo Hyeon-woo', 'Coreia do sul', 21, 'Goleiro', 9),
(210, 'Kim Seung-Gyu', 'Coreia do sul', 1, 'Goleiro', 9),
(211, 'Song Bum-keun ', 'Coreia do sul', 12, 'Goleiro', 9),
(212, 'Cho Yu-min', 'Coreia do sul', 4, 'Zagueiro', 9),
(213, 'Hong Chul', 'Coreia do sul', 14, 'Zagueiro', 9),
(214, 'Kim Jin-Su', 'Coreia do sul', 3, 'Zagueiro', 9),
(215, 'Kim Tae-Hwan', 'Coreia do sul', 23, 'Zagueiro', 9),
(216, 'Kim Moon-hwan', 'Coreia do sul', 15, 'Lateral-direito', 9),
(217, 'Kwon Kyung-won ', 'Coreia do sul', 20, 'Zagueiro', 9),
(218, 'Lee Jae-ik', ' Coreia do sul', 19, 'Zagueiro', 9),
(219, 'Park Ji-soo', 'Coreia do sul', 18, 'Zagueiro', 9),
(220, 'Hwang In-beom', 'Coreia do sul', 6, 'Meia', 9),
(221, 'Kim Dong-hyun', 'Coreia do sul', 16, 'Meia', 9),
(222, 'Kim Jin-Kyu', 'Coreia do sul', 10, 'Meia', 9),
(223, 'Kwon Chang-hoon', 'Coreia do sul', 22, 'Meia', 9),
(224, 'Paik Seung-ho ', ' Coreia do sul', 8, 'Meia', 9),
(225, 'Um Won-sang', 'Coreia do sul', 11, 'Meia', 9),
(226, 'Cho Gue-sung', ' Coreia do sul', 9, 'Atacante', 9),
(227, 'Hwang Hee-chan', 'Coreia do sul', 11, 'Atacante', 9),
(228, 'Hwang Ui-jo', 'Coreia do sul', 18, 'Atacante', 9),
(229, 'Kang Seong-jin', 'Coreia do sul', 26, 'Atacante', 9),
(230, 'Ki-Hyuk Lee', 'Coreia do sul', 25, 'Atacante', 9),
(231, 'Na Sang-ho', 'Coreia do sul', 7, 'Atacante', 9),
(232, 'Son Heung-min', 'Coreia do sul', 7, 'Atacante', 9),
(233, 'Song Min-kyu', 'Coreia do sul', 13, 'Atacante', 9),
(234, 'Antony', 'Brasil', 11, 'Atacante', 1),
(235, 'Aarón Cruz', 'Costa Rica', 18, 'Goleiro', 10),
(236, 'Keylor Navas', 'Costa Rica', 1, 'Goleiro', 10),
(237, 'Leonel Moreira', 'Costa Rica', 23, 'Goleiro', 10),
(238, 'Bryan Oviedo', 'Costa Rica', 8, 'Lateral-esquerdo', 10),
(239, 'Carlos Martinez', 'Costa Rica', 2, 'Zagueiro', 10),
(240, 'Ian Lawrence', 'Costa Rica', 16, 'Zagueiro', 10),
(241, 'Juan Pablo Vargas', 'Costa Rica', 3, 'Zagueiro', 10),
(242, 'Orlando Galo', 'Costa Rica', 14, 'Zagueiro', 10),
(243, 'Óscar Duarte', 'Costa Rica', 6, 'Zagueiro', 10),
(244, 'Francisco Calvo', 'Costa Rica', 15, 'Zagueiro', 10),
(245, 'Kendall Waston', 'Costa Rica', 19, 'Zagueiro', 10),
(246, 'Keysher Fuller', 'Costa Rica', 4, 'Lateral-direito', 10),
(247, 'Brandon Aguilera', 'Costa Rica', 10, 'Meia', 10),
(248, 'Celso Borges', 'Costa Rica', 5, 'Meia', 10),
(249, 'Daniel Alonso Chacón Salas', 'Costa Rica', 20, 'Meia', 10),
(250, 'Gerson Torres', 'Costa Rica', 13, 'Meia', 10),
(251, 'Marvin Angulo', 'Costa Rica', 10, 'Meia', 10),
(252, 'Ricardo José Blanco Mora', 'Costa Rica', 2, 'Meia', 10),
(253, 'Yeltsin Tejeda', 'Costa Rica', 17, 'Meia', 10),
(254, 'Ariel Lassiter', 'Costa Rica', 11, 'Atacante', 10),
(255, 'Anthony Contreras', 'Costa Rica', 7, 'Atacante', 10),
(256, 'Alonso Martínez', 'Costa Rica', 16, 'Atacante', 10),
(257, 'Jewison Bennette', 'Costa Rica', 9, 'Atacante', 10),
(258, 'José Guillermo Ortiz', ' Costa Rica', 77, 'Atacante', 10),
(259, 'Joel Campbell ', 'Costa Rica', 12, 'Atacante', 10),
(260, 'Dominik Livakovic', 'Croácia', 1, 'Goleiro', 11),
(261, 'Ivo Grbic', 'Croácia', 1, 'Goleiro', 11),
(262, 'Simon Sluga', 'Croácia', 23, 'Goleiro', 11),
(263, 'Borna Barišić', 'Croácia', 3, 'Zagueiro', 11),
(264, 'Dejan Lovren', 'Croácia', 6, 'Zagueiro', 11),
(265, 'Domagoj Vida', 'Croácia', 21, 'Zagueiro', 11),
(266, 'Josip Juranović', 'Croácia', 22, 'Lateral-direito', 11),
(267, 'Josip Šutalo ', 'Croácia', 6, 'Zagueiro', 11),
(268, 'Josip Stanišić', 'Croácia', 3, 'Zagueiro', 11),
(269, 'Martin Erlić', 'Croácia', 20, 'Zagueiro', 11),
(270, 'Šime Vrsaljko', 'Croácia', 2, 'Lateral-direito', 11),
(271, 'Ivan Perišić ', 'Croácia', 4, 'Meia', 11),
(272, 'Josip Brekalo', 'Croácia', 7, 'Meia', 11),
(273, 'Kristijan Jakić', 'Croácia', 16, 'Meia', 11),
(274, 'Lovro Majer', 'Croácia', 11, 'Meia', 11),
(275, 'Luka Modrić ', 'Croácia', 10, 'Meia', 11),
(276, 'Luka Ivanušec ', 'Croácia', 26, 'Meia', 11),
(277, 'Marcelo Brozović', 'Croácia', 11, 'Meia', 11),
(278, 'Mario Pašalić', 'Croácia', 15, 'Meia', 11),
(279, 'Mateo Kovačić', 'Croácia', 8, 'Meia', 11),
(280, 'Bruno Petković', 'Croácia', 20, 'Atacante', 11),
(281, 'Andrej Kramarić ', 'Croácia', 9, 'Atacante', 11),
(282, 'Ante Budimir', 'Croácia', 14, 'Atacante', 11),
(283, 'Marko Livaja', 'Croácia', 14, 'Atacante', 11),
(284, 'Mislav Oršić', 'Croácia', 18, 'Atacante', 11),
(285, 'Frederik Rönnow', 'Dinamarca', 22, 'Goleiro', 12),
(286, 'Kasper Schmeichel', 'Dinamarca', 1, 'Goleiro', 12),
(287, 'Oliver Christensen', 'Dinamarca', 1, 'Goleiro', 12),
(288, 'Andreas Christensen', 'Dinamarca', 6, 'Zagueiro', 12),
(289, 'Jannik Vestergaard ', 'Dinamarca', 3, 'Zagueiro', 12),
(290, 'Joakim Mæhle ', 'Dinamarca', 5, 'Lateral-direito', 12),
(291, 'Jens Stryger Larsen', 'Dinamarca', 17, 'Zagueiro', 12),
(292, 'Rasmus Kristensen', 'Dinamarca', 13, 'Lateral-direito', 12),
(293, 'Simon Kjaer', 'Dinamarca', 4, 'Zagueiro', 12),
(294, 'Christian Nørgaard', 'Dinamarca', 15, 'Meia', 12),
(295, 'Daniel Wass', 'Dinamarca', 18, 'Meia', 12),
(296, 'Jesper Lindstrøm', 'Dinamarca', 18, 'Meia', 12),
(297, 'Oliver Abildgaard', 'Dinamarca', 28, 'Meia', 12),
(298, 'Pierre-Emile Højbjerg', 'Dinamarca', 23, 'Meia', 12),
(299, 'Mathias Jensen', 'Dinamarca', 24, 'Meia', 12),
(300, 'Thomas Delaney', 'Dinamarca', 8, 'Meia', 12),
(301, 'Andreas Cornelius', 'Dinamarca', 21, 'Atacante', 12),
(302, 'Andreas Skov Olsen', 'Dinamarca', 11, 'Atacante', 12),
(303, 'Jacob Bruun Larsen', 'Dinamarca', 9, 'Atacante', 12),
(304, 'Jonas Wind', 'Dinamarca', 19, 'Atacante', 12),
(305, 'Kasper Dolberg', 'Dinamarca', 12, 'Atacante', 12),
(306, 'Martin Braithwaite', 'Dinamarca', 9, 'Atacante', 12),
(307, 'Mikkel Damsgaard', 'Dinamarca', 14, 'Atacante', 12),
(308, 'Mohamed Daramy', 'Dinamarca', 15, 'Atacante', 12),
(309, 'Yussuf Poulsen', 'Dinamarca', 20, 'Atacante', 12),
(310, 'Alexander Domínguez ', 'Equador', 22, 'Goleiro', 13),
(311, 'Hernán Galíndez', 'Equador', 1, 'Goleiro', 13),
(312, 'Wellington Ramírez', 'Brasil', 1, 'Goleiro', 13),
(313, 'Ángelo Preciado ', 'Equador', 17, 'Lateral-direito', 13),
(314, 'Byron Castillo', 'Equador', 6, 'Lateral-direito', 13),
(315, 'Diego Palacios', 'Equador', 27, 'Lateral-esquerdo', 13),
(316, 'Félix Torres', 'Equador', 2, 'Zagueiro', 13),
(317, 'Luis Fernando Leon', 'Equador', 24, 'Zagueiro', 13),
(318, 'Pervis Estupiñan', 'Equador', 7, 'Lateral-esquerdo', 13),
(319, 'Piero Hincapie', 'Equador', 3, 'Zagueiro', 13),
(320, 'Robert Arboleda', 'Equador', 4, 'Zagueiro', 13),
(321, 'Xavier Arreaga ', 'Equador', 14, 'Zagueiro', 13),
(322, 'Carlos Gruezo', 'Equador', 10, 'Meia', 13),
(323, 'José Cifuentes', 'Equador', 8, 'Meia', 13),
(324, 'Jhegson Méndez', 'Equador', 20, 'Meia', 13),
(325, 'Michael Carcelén', 'Equador', 16, 'Meia', 13),
(326, 'Moisés Caicedo', 'Equador', 23, 'Meia', 13),
(327, 'Ángel Mena', 'Equador', 15, 'Atacante', 13),
(328, 'Enner Valencia', 'Equador', 13, 'Atacante', 13),
(329, 'Gonzalo Plata', 'Equador', 19, 'Atacante', 13),
(330, 'João Rojas', 'Equador', 9, 'Atacante', 13),
(331, 'Jordy Caicedo', 'Equador', 26, 'Atacante', 13),
(332, 'Romário Ibarra', 'Equador', 8, 'Atacante', 13),
(333, 'Alan Franco', 'Equador', 21, 'Meia', 13),
(334, 'Leonardo Campana', 'Equador', 9, 'Atacante', 13),
(335, 'David de Gea', 'Espanha', 1, 'Goleiro', 14),
(336, 'Robert Sanchez', 'Espanha', 13, 'Goleiro', 14),
(337, 'Unai Simon', 'Espanha', 23, 'Goleiro', 14),
(338, 'Aymeric Laporte', 'Espanha', 24, 'Zagueiro', 14),
(339, 'César Azpilicueta', 'Espanha', 2, 'Zagueiro', 14),
(340, 'Daniel Carvajal', 'Espanha', 20, 'Lateral-direito', 14),
(341, 'Diego Llorente', 'Espanha', 3, 'Zagueiro', 14),
(342, 'Eric Garcia', 'Espanha', 12, 'Zagueiro', 14),
(343, 'Inigo Martinez', 'Espanha', 16, 'Zagueiro', 14),
(344, 'Pau Torres', 'Espanha', 4, 'Zagueiro', 14),
(345, 'Jordi Alba', 'Espanha', 18, 'Lateral-esquerdo', 14),
(346, 'José Luis Gayà', 'Espanha', 14, 'Lateral-esquerdo', 14),
(347, 'Sergio Ramos', 'Espanha', 4, 'Zagueiro', 14),
(348, 'Gavi', 'Espanha', 9, 'Meia', 14),
(349, 'Koke', 'Espanha', 8, 'Meia', 14),
(350, 'Marcos Llorente', 'Espanha', 6, 'Meia', 14),
(351, 'Pedri', 'Espanha', 26, 'Meia', 14),
(352, 'Sergio Busqutes', 'Espanha', 5, 'Meia', 14),
(353, 'Thiago Alcântara', 'Espanha', 10, 'Meia', 14),
(354, 'Adama Traoré', 'Espanha', 20, 'Atacante', 14),
(355, 'Álvaro Morata', 'Espanha', 7, 'Atacante', 14),
(356, 'Dani Olmo', 'Espanha', 19, 'Atacante', 14),
(357, 'Ferran Torres', 'Espanha', 11, 'Atacante', 14),
(358, 'Mikel Oyarzabal', 'Espanha', 21, 'Atacante', 14),
(359, 'Pablo Sarabia', 'Espanha', 22, 'Atacante', 14),
(360, 'Ethan Horvath ', 'Estados Unidos', 1, 'Goleiro', 15),
(361, 'Matt Turner', 'Estados Unidos', 1, 'Goleiro', 15),
(362, 'Zack Steffen', 'Estados Unidos', 12, 'Goleiro', 15),
(363, 'Antonee Robinson', 'Estados Unidos', 17, 'Lateral-esquerdo', 15),
(364, 'Chris Richards', 'Estados Unidos', 15, 'Zagueiro', 15),
(365, 'DeAndre Yedlin', 'Estados Unidos', 2, 'Lateral-direito', 15),
(366, 'George Bello', 'Estados Unidos', 21, 'Lateral-esquerdo', 15),
(367, 'James Sands', 'Estados Unidos', 16, 'Zagueiro', 15),
(368, 'Joe Scally', 'Estados Unidos', 29, 'Zagueiro', 15),
(369, 'Miles Robinson', 'Estados Unidos', 12, 'Zagueiro', 15),
(370, 'Walker Zimmerman', 'Estados Unidos', 5, 'Zagueiro', 15),
(371, 'Cristian Roldan', 'Estados Unidos', 10, 'Meia', 15),
(372, 'Kellyn Acosta', 'Estados Unidos', 23, 'Meia', 15),
(373, 'Luca de la Torre', 'Estados Unidos', 14, 'Meia', 15),
(374, 'Paul Arriola', 'Estados Unidos', 7, 'Meia', 15),
(375, 'Tyler Adams', 'Estados Unidos', 4, 'Meia', 15),
(376, 'Weston McKennie', 'Estados Unidos', 8, 'Meia', 15),
(377, 'Brenden Aaronson', 'Estados Unidos', 11, 'Atacante', 15),
(378, 'Christian Pulisic', 'Estados Unidos', 10, 'Atacante', 15),
(379, 'Giovanni Reyna', 'Estados Unidos', 7, 'Atacante', 15),
(380, 'Jordan Morris', 'Estados Unidos', 13, 'Atacante', 15),
(381, 'Malik Tillman', 'Estados Unidos', 9, 'Atacante', 15),
(382, 'Ricardo Pepi', 'Estados Unidos', 9, 'Atacante', 15),
(383, 'Timothy Weah', 'Estados Unidos', 21, 'Atacante', 15),
(384, 'Reggie Cannon', 'Estados Unidos', 2, 'Lateral-direito', 15),
(385, 'Alphonse Areola', 'França', 23, 'Goleiro', 16),
(386, 'Hugo Lloris ', 'França', 1, 'Goleiro', 16),
(387, 'Mike Maignan', 'França', 23, 'Goleiro', 16),
(388, 'Benjamin Pavard ', 'França', 2, 'Lateral-direito', 16),
(389, 'Dayot Upamecano', 'França', 18, 'Zagueiro', 16),
(390, 'Jules Kounde', 'França', 25, 'Zagueiro', 16),
(391, 'Kurt Zouma', 'França', 15, 'Zagueiro', 16),
(392, 'Leo Dubois', 'França', 24, 'Lateral-direito', 16),
(393, 'Lucas Digne', 'França', 18, 'Lateral-esquerdo', 16),
(394, 'Lucas Hernandez', 'França', 21, 'Zagueiro', 16),
(395, 'Presnel Kimpembe', 'França', 3, 'Zagueiro', 16),
(396, 'Raphaël Varane', 'França', 4, 'Zagueiro', 16),
(397, 'Theo Hernandez', 'França', 22, 'Lateral-esquerdo', 16),
(398, 'Adrien Rabiot', 'França', 14, 'Meia', 16),
(399, 'Antoine Griezmann', 'França', 7, 'Meia', 16),
(400, 'Jordan Veretout', 'França', 17, 'Meia', 16),
(401, 'Matteo Guendouzi', 'França', 6, 'Meia', 16),
(402, 'N\'Golo Kanté ', 'França', 13, 'Meia', 16),
(403, 'Paul Pogba', 'França', 6, 'Meia', 16),
(404, 'Thomas Lemar', 'França', 8, 'Meia', 16),
(405, 'Christopher Nkunku', 'França', 12, 'Atacante', 16),
(406, 'Karim Benzema', 'França', 19, 'Atacante', 16),
(407, 'Kingsley Coman', 'França', 20, 'Atacante', 16),
(408, 'Kylian Mbappé ', 'França', 10, 'Atacante', 16),
(409, 'Ousmane Dembélé', 'França', 11, 'Atacante', 16),
(410, 'Joe Wollacot', 'Gana', 16, 'Goleiro', 17),
(411, 'Lawrence Ati-Zigi', 'Gana', 12, 'Goleiro', 17),
(412, 'Richard Ofori', 'Gana', 1, 'Goleiro', 17),
(413, 'Abdul Mumin', 'Gana', 26, 'Zagueiro', 17),
(414, 'Abdul-Rahman', 'Gana', 17, 'Lateral-esquerdo', 17),
(415, 'Alexander Djiku', 'Gana', 23, 'Zagueiro', 17),
(416, 'Andy Yiadom', 'Gana', 2, 'Zagueiro', 17),
(417, 'Daniel Amartey', 'Gana', 18, 'Zagueiro', 17),
(418, 'Denis Odoi', 'Gana', 3, 'Zagueiro', 17),
(419, 'Gideon Mensah ', 'Gana', 14, 'Lateral-esquerdo', 17),
(420, 'Joseph Aidoo', 'Gana', 14, 'Zagueiro', 17),
(421, 'Daniel-Kofi Kyereh', 'Gana', 8, 'Meia', 17),
(422, 'Edmund Addo', 'Gana', 6, 'Meia', 17),
(423, 'Iddrisu Baba', 'Gana', 21, 'Meia', 17),
(424, 'Jeffrey Schlupp', 'Gana', 25, 'Meia', 17),
(425, 'Kamaldeen Sulemana', 'Gana', 22, 'Meia', 17),
(426, 'Mohammed Kudus', 'Gana', 20, 'Meia', 17),
(427, 'Samuel Owusu', 'Gana', 19, 'Meia', 17),
(428, 'Thomas Partey', 'Gana', 5, 'Meia', 17),
(429, 'Abdul Fatawu Issahaku', 'Gana', 7, 'Atacante', 17),
(430, 'André Ayew', 'Gana', 10, 'Atacante', 17),
(431, 'Caleb Ekuban', 'Gana', 8, 'Atacante', 17),
(432, 'Emmanuel Boateng', 'Gana', 21, 'Atacante', 17),
(433, 'Felix Afena-Gyan', 'Gana', 13, 'Atacante', 17),
(434, 'Jordan Ayew ', 'Gana', 9, 'Atacante', 17),
(435, 'Jasper Cillessen', 'Holanda', 1, 'Goleiro', 18),
(436, 'Justin Bijlow', 'Holanda', 1, 'Goleiro', 18),
(437, 'Mark Flekken', 'Holanda', 1, 'Goleiro', 18),
(438, 'Daley Blind', 'Holanda', 17, 'Lateral-esquerdo', 18),
(439, 'Denzel Dumfries', 'Holanda', 22, 'Lateral-direito', 18),
(440, 'Jurrien Timber ', 'Holanda', 25, 'Zagueiro', 18),
(441, 'Matthijs de Ligt', 'Holanda', 3, 'Zagueiro', 18),
(442, 'Nathan Aké', 'Holanda', 4, 'Lateral-esquerdo', 18),
(443, 'Stefan de Vrij', 'Holanda', 6, 'Zagueiro', 18),
(444, 'Tyrell Malacia', 'Holanda', 12, 'Lateral-esquerdo', 18),
(445, 'Virgil van Dijk', 'Holanda', 4, 'Zagueiro', 18),
(446, 'Davy Klaassen', 'Holanda', 14, 'Meia', 18),
(447, 'Frenkie de Jong', 'Holanda', 21, 'Meia', 18),
(448, 'Georginio Wijnaldum', 'Holanda', 8, 'Meia', 18),
(449, 'Marten de Roon', 'Holanda', 15, 'Meia', 18),
(450, 'Ryan Gravenberch', 'Holanda', 16, 'Meia', 18),
(451, 'Teun Koopmeiners', 'Holanda', 24, 'Meia', 18),
(452, 'Arnaut Danjuma', 'Holanda', 9, 'Atacante', 18),
(453, 'Cody Gakpo', 'Holanda', 26, 'Atacante', 18),
(454, 'Donyell Malen', 'Holanda', 18, 'Atacante', 18),
(455, 'Memphis Depay', 'Holanda', 10, 'Atacante', 18),
(456, 'Steven Berghuis', 'Holanda', 7, 'Atacante', 18),
(457, 'Steven Bergwijn', 'Holanda', 7, 'Atacante', 18),
(458, 'Vincent Janssen', 'Holanda', 9, 'Atacante', 18),
(459, 'Wout Weghorst', 'Holanda', 19, 'Atacante', 18),
(460, 'Aaron Ramsdale', 'Inglaterra', 13, 'Goleiro', 19),
(461, 'Jordan Pickford', 'Inglaterra', 1, 'Goleiro', 19),
(462, 'Sam Johnstone', 'Inglaterra', 23, 'Goleiro', 19),
(463, 'Ben Chilwell', 'Inglaterra', 21, 'Lateral-esquerdo', 19),
(464, 'Conor Coady ', 'Inglaterra', 16, 'Zagueiro', 19),
(465, 'Harry Maguire', 'Inglaterra', 6, 'Zagueiro', 19),
(466, 'John Stones ', 'Inglaterra', 5, 'Zagueiro', 19),
(467, 'Kieran Trippier', 'Inglaterra', 12, 'Zagueiro', 19),
(468, 'Kyle Walker', 'Inglaterra', 2, 'Lateral-direito', 19),
(469, 'Luke Shaw', 'Inglaterra', 3, 'Lateral-esquerdo', 19),
(470, 'Reece James', 'Inglaterra', 24, 'Lateral-direito', 19),
(471, 'Tyrone Mings', 'Inglaterra', 15, 'Zagueiro', 19),
(472, 'Bukayo Saka', 'Inglaterra', 25, 'Meia', 19),
(473, 'Declan Rice', 'Inglaterra', 4, 'Meia', 19),
(474, 'Jack Grealish', 'Inglaterra', 7, 'Meia', 19),
(475, 'Jadon Sancho ', 'Inglaterra', 17, 'Meia', 19),
(476, 'Jordan Henderson', 'Inglaterra', 8, 'Meia', 19),
(477, 'Jude Bellingham ', 'Inglaterra', 26, 'Meia', 19),
(478, 'Kalvin Phillips', 'Inglaterra', 14, 'Meia', 19),
(479, 'Mason Mount ', 'Inglaterra', 19, 'Meia', 19),
(480, 'Phil Foden', 'Inglaterra', 20, 'Meia', 19),
(481, 'Harry Kane', 'Inglaterra', 9, 'Atacante', 19),
(482, 'Marcus Rashford', 'Inglaterra', 11, 'Atacante', 19),
(483, 'Raheem Sterling', 'Inglaterra', 10, 'Atacante', 19),
(484, 'Tammy Abraham', 'Inglaterra', 22, 'Atacante', 19);

-- --------------------------------------------------------

--
-- Estrutura da tabela `palpites`
--

CREATE TABLE `palpites` (
  `Id` int(11) NOT NULL,
  `Palpite` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `palpites`
--

INSERT INTO `palpites` (`Id`, `Palpite`, `Id_usuario`) VALUES
(3, 'nada', 57),
(6, 'nada', 57),
(7, 'nada', 57),
(13, 'Flamengo campeão da libertadores', 57),
(14, 'Flamengo campeão da copa do brasil', 57);

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedidos`
--

CREATE TABLE `pedidos` (
  `Id` int(11) NOT NULL,
  `Id_usuario` int(11) NOT NULL,
  `Id_produto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `pedidos`
--

INSERT INTO `pedidos` (`Id`, `Id_usuario`, `Id_produto`) VALUES
(1, 57, 1),
(2, 57, 2),
(3, 57, 5),
(12, 57, 6);

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `Id` int(11) NOT NULL,
  `Nome` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Numero_vendas` int(11) NOT NULL DEFAULT 0,
  `Preco` int(11) NOT NULL,
  `Imagem` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`Id`, `Nome`, `Numero_vendas`, `Preco`, `Imagem`) VALUES
(1, 'Camisa Amarela Neymar', 4, 50, 'p1.jpg'),
(2, 'Camisa Azul Neymar', 7, 55, 'p5.jpg'),
(5, ' Camisa Amarela Gabriel Jesus', 0, 50, 'p2.jpg'),
(6, ' Camisa Amarela Raphinha', 0, 50, 'p3.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `selecoes`
--

CREATE TABLE `selecoes` (
  `Id` int(11) NOT NULL,
  `Pais` varchar(88) NOT NULL,
  `Bandeira` varchar(88) NOT NULL,
  `Adjetivo` varchar(88) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `selecoes`
--

INSERT INTO `selecoes` (`Id`, `Pais`, `Bandeira`, `Adjetivo`) VALUES
(1, 'Brasil', '', 'Brasileira'),
(2, 'Alemanha', 'depois', 'Alemã'),
(3, 'Arábia Saudita', 'dps', 'Saudita'),
(4, 'Argentina', '', 'Argentina'),
(5, 'Austrália', '', 'Australiana'),
(6, 'Bélgica', '', 'Belga'),
(7, 'Camarões', '', 'Camaronesa '),
(8, 'Canadá', '', 'Canadense'),
(9, 'Coreia Do Sul', '', 'Sul-Coreana'),
(10, 'Costa Rica', '', 'Costarriquenha'),
(11, 'Croácia', '', 'Croata'),
(12, 'Dinamarca', '', 'Dinamarquesa'),
(13, 'Equador', '', ' Equatoriana'),
(14, 'Espanha', '', 'Espanhola'),
(15, 'Estados Unidos', '', 'Americana'),
(16, 'França', '', 'Francesa'),
(17, 'Gana', '', 'Ganesa'),
(18, 'Holanda', '', 'Holandesa'),
(19, 'Inglaterra', '', ' Inglesa '),
(20, 'Irã', '', 'Iraniana'),
(21, 'Japão', '', 'Japonesa'),
(22, 'Marrocos', '', 'Marroquina'),
(23, 'México', '', 'Mexicana'),
(24, 'País De Gales', '', 'Galesa '),
(25, 'Polônia', '', ' Polonesa'),
(26, 'Portugal', '', 'Portuguesa'),
(27, 'Qatar', '', 'Catari'),
(28, 'Senegal', '', 'Senegalesa'),
(29, 'Sérvia', '', 'Sérvia'),
(30, 'Suíça', '', 'Suíça'),
(31, 'Tunísia', '', 'Tunisiana'),
(32, 'Uruguai', '', 'Uruguaia');

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
  `País` varchar(20) DEFAULT NULL,
  `PaísTorcedor` varchar(20) DEFAULT NULL,
  `Nível` int(11) NOT NULL DEFAULT 0,
  `Rank` varchar(100) NOT NULL DEFAULT '0',
  `Saldo` int(100) NOT NULL DEFAULT 0,
  `Xp` int(100) NOT NULL DEFAULT 0,
  `RecompensaTimestamp` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  `Validador` int(11) NOT NULL,
  `Perfil` varchar(60) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`Id`, `Nome`, `Email`, `Senha`, `Acesso`, `Data`, `Status`, `País`, `PaísTorcedor`, `Nível`, `Rank`, `Saldo`, `Xp`, `RecompensaTimestamp`, `Validador`, `Perfil`) VALUES
(57, 'Lucas', 'lucas@bolamundi.com', '$2y$10$Xy28YXMQKSMfokA2wJuituQMH70kU9urrbTeSyVBgppEc5B/zoES6', 'Admin', '2022-07-07', 'Ativo', '', '', 0, '0', 150, 230, '2022-09-14 08:20:29', 0, 'p1.jpg'),
(58, 'Carol', 'general@bolamundi.com', 'gabigol9', 'Admin', '2022-07-17', 'Ativo', '', '', 0, '0', 5, 0, '2022-08-05 11:52:12', 0, NULL),
(59, 'Dj Regerinho', 'djrogerinho@gmail.com', '$2y$10$ck1xzNc7eAwIwUn7/kUqme1BJMFXpWkXkC5LO/2tmBwP/AqHA7G02', 'Admin', '2022-07-18', 'Ativo', '', '', 0, '0', 0, 0, '0000-00-00 00:00:00', 0, NULL),
(61, 'Vinícius Junior', 'vinijr@gmail.com', '$2y$10$UoSoa8AD0ArFqKDCEDq8.ulIMZieh4sb.fHwS.zkLrd6Us6Xgkude', 'Admin', '2022-07-21', 'Ativo', '', '', 0, '0', 10, 0, '2022-08-08 07:47:00', 0, NULL),
(72, 'salmandra', 'salmandra@gmail.com', '$2y$10$Rm19xYOO.5O02mgeGn7LP.MgxUkiiejKVYqLGNxaNf15tVen16Cle', 'Usuario', '2022-08-09', 'aguardando', '', '', 0, '0', 0, 0, '0000-00-00 00:00:00', 22634477, NULL),
(63, 'TIMESTAMP', 'timestamp@gmail.com', '$2y$10$xA8crjgh/ajRE0lmj0EErusKWdj14m4YGzGrQbW2ZuEOW/YwLtH9S', 'Usuario', '2022-07-25', 'Ativo', '', '', 0, '0', 10, 50, '2022-08-15 08:33:32', 0, NULL),
(66, 'Lucas343', 'lucas@gmail.com', '$2y$10$bKrs.0IXlMXPjdiZDKdWUOTMasNkbvqQOFPHw4HJoXPdeUDAurLwW', 'Usuario', '2022-07-25', 'Ativo', '', '', 0, '0', 485, 0, '2022-08-15 07:58:48', 0, NULL),
(67, 'bruno henrique', 'brunohenrique@bolamundi.com', '$2y$10$CgODEfoHCHq3IJB/ZlB7B.seWoUner3J0lE62H9oCXBSb0bW9a9Wa', 'Usuario', '2022-07-27', 'Ativo', '', '', 0, '0', 0, 0, '0000-00-00 00:00:00', 0, NULL),
(70, '1234', 'helpterapia@gmail.com', '$2y$10$1AeZpLjsPDrWjS7UZEjw5OPIZbjw1kUnEKKMqWvGJ8Q4u1RdEIHey', 'Usuario', '2022-08-02', 'Ativo', '', '', 0, '0', 0, 0, '0000-00-00 00:00:00', 0, NULL),
(71, 'dgaggg', 'nada', '$2y$10$H5TF4iOmNWnbgv9mN7BIOOAu9Kv6nV8quHxXcm6dabIaFzqE1uWmS', 'Usuario', '2022-08-08', 'aguardando', '', '', 0, '0', 0, 0, '0000-00-00 00:00:00', 86030424, NULL),
(73, 'salmandra2', 'samandra@gmail.com', '$2y$10$hP8i5Czo0xrgkt1LFezVy.hq/eCWzcPRAF9zLaXWeCXygW9.D2Mcu', 'Usuario', '2022-08-09', 'aguardando', '', '', 0, '0', 0, 0, '0000-00-00 00:00:00', 89270055, NULL),
(74, 'alvin', 'alvineesquilos@gmail.com', '$2y$10$MBJPEaI1dlnHWx.afH8m.uSHFC4TXPAayVNgBXwPa2GKwA/TEBrBS', 'Usuario', '2022-08-12', 'aguardando', '', '', 0, '0', 0, 0, '0000-00-00 00:00:00', 39367525, NULL),
(95, 'li', 'penguimgeneral@gmail.com', '$2y$10$RyWtXMQLm3mspQK7bc6z4O0oRp6RigLRh5OxVYWRm9yORKIIirQ8.', 'Usuario', '2022-08-31', 'aguardando', NULL, NULL, 0, '0', 0, 0, '0000-00-00 00:00:00', 43732394, NULL),
(86, 'ffffffffffffffffffffff', 'ffffffffffffffffffffff@gmail.com', '$2y$10$Giv6A0H4uHUOUM8QOwWXsO.3UAkXcAWQRa1fff5tFCssdSJLu0uOm', 'Usuario', '2022-08-22', 'aguardando', NULL, NULL, 0, '0', 0, 0, '0000-00-00 00:00:00', 80589415, NULL),
(87, 'anya', 'anacsouza2005@gmail.com', '$2y$10$ubNdXMaiseIcRDx6z8lRnOZSyjfNOFN/05W9wlcevufRrJ3uVfsIe', 'Usuario', '2022-08-22', 'Ativo', NULL, NULL, 0, '0', 0, 0, '0000-00-00 00:00:00', 88971765, NULL),
(90, 'teste', 'teste@teste.com', '$2y$10$ZiWVr4hBFUIgNB88il5DyOSEWNCtkUWw1jKRB/lYg5HGaIGxEXcCK', 'Usuario', '2022-08-31', 'aguardando', NULL, NULL, 0, '0', 0, 0, '0000-00-00 00:00:00', 61711407, NULL),
(91, 'Guilherme', 'guilherme.chafim@gmail.com', '$2y$10$CJVKH0leh7LKlqJqjxj8y.eMmZkem7j4YNCT/DFmqsQlFcLYkeA72', 'Usuario', '2022-08-31', 'aguardando', NULL, NULL, 0, '0', 0, 0, '0000-00-00 00:00:00', 23164674, NULL),
(93, 'south', 'anasofianorth@gmail.com', '$2y$10$.2y0pqZWiL5HorZ4DmFSY.bdPkmtfoeE9U2AfaOF5Mrl6C6wxE4y2', 'Usuario', '2022-08-31', 'aguardando', NULL, NULL, 0, '0', 0, 0, '0000-00-00 00:00:00', 75476145, NULL);

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
-- Índices para tabela `contato`
--
ALTER TABLE `contato`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `denuncia`
--
ALTER TABLE `denuncia`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `jogadores`
--
ALTER TABLE `jogadores`
  ADD PRIMARY KEY (`Id`);

--
-- Índices para tabela `palpites`
--
ALTER TABLE `palpites`
  ADD PRIMARY KEY (`Id`);

--
-- Índices para tabela `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`Id`);

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
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
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT de tabela `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `Id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=180;

--
-- AUTO_INCREMENT de tabela `contato`
--
ALTER TABLE `contato`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de tabela `denuncia`
--
ALTER TABLE `denuncia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `jogadores`
--
ALTER TABLE `jogadores`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=485;

--
-- AUTO_INCREMENT de tabela `palpites`
--
ALTER TABLE `palpites`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de tabela `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `selecoes`
--
ALTER TABLE `selecoes`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
