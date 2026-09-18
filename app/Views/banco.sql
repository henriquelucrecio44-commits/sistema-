-- phpMyAdmin SQL Dump
-- version 5.2.1deb1+deb12u1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 11/09/2026 às 00:40
-- Versão do servidor: 10.11.18-MariaDB-0+deb12u1
-- Versão do PHP: 8.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `a28916`
--
CREATE DATABASE IF NOT EXISTS `a28916` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `a28916`;

-- --------------------------------------------------------

--
-- Estrutura para tabela `Conteudo`
--

CREATE TABLE `Conteudo` (
  `Id` int(11) NOT NULL,
  `Titulo` varchar(255) NOT NULL,
  `Texto` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `Conteudo`
--

INSERT INTO `Conteudo` (`Id`, `Titulo`, `Texto`) VALUES
(1, 'teste', 'Ola'),
(2, 'gato', 'marina'),
(3, 'teste', 'ola'),
(4, 'inicio da pagina ', 'Bem-vindo a minha pagina'),
(5, 'Quemsou', 'Óla, meu nome e Henrique\r\ntenho 28 anos,estou cursando ADS na univiçosa.\r\n'),
(6, 'Produtos', 'Sou movido por curiosidade,criatividade e pela vontade de transformar boas ideias em algo real.'),
(7, 'habilidade', 'comunição,Atenção aos detalhes, criatividades,Adaptabilidade, proatividade.\r\n'),
(8, 'Fale Comigo', 'wtspp (31)99859****\r\n@insta lucrecio');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `Conteudo`
--
ALTER TABLE `Conteudo`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `Conteudo`
--
ALTER TABLE `Conteudo`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
