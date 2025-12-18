-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Tempo de geração: 18-Dez-2025 às 16:09
-- Versão do servidor: 8.0.40
-- versão do PHP: 8.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `ponchateaqui`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `alojamentos`
--

CREATE TABLE `alojamentos` (
  `id` int NOT NULL,
  `nome` varchar(100) NOT NULL,
  `localizacao` varchar(100) NOT NULL,
  `descricao` text NOT NULL,
  `preco_noite` decimal(6,2) NOT NULL,
  `capacidade` int NOT NULL,
  `imagem` varchar(255) NOT NULL,
  `pontos_por_estadia` int NOT NULL DEFAULT '3'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `alojamentos`
--

INSERT INTO `alojamentos` (`id`, `nome`, `localizacao`, `descricao`, `preco_noite`, `capacidade`, `imagem`, `pontos_por_estadia`) VALUES
(1, 'Casa do Miradouro', 'Funchal', 'Casa com vista para o mar e perto do centro.', 120.00, 4, 'casamiradouro.jpg', 3),
(2, 'Alojamento A Fábrica', 'Santa Luzia', 'Apartamento a 13 minutos a pé de Marina do Funchal. ', 140.00, 4, 'santaluzia.jpg', 3),
(3, 'Casas de Santana', 'Santana', 'Experiência única numa verdadeira casa tradicional.', 180.00, 2, 'casa.jpg', 4),
(4, 'Quinta Santo Antonio Da Serra', 'Santa Cruz', 'A aldeia de Santo António da Serra fica a pouca distância a pé e dispõe de ligações de autocarros, lojas e jardins públicos com vista sobre a Madeira.', 272.00, 5, 'quinta.jpg', 6);

-- --------------------------------------------------------

--
-- Estrutura da tabela `utilizadores`
--

CREATE TABLE `utilizadores` (
  `id` int NOT NULL,
  `nome` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(255) NOT NULL,
  `pontos` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `utilizadores`
--

INSERT INTO `utilizadores` (`id`, `nome`, `email`, `password`, `pontos`) VALUES
(1, 'maria', 'maria@teste.com', 'maria123', 6),
(2, 'Diana Figueiredo', 'diana@teste.com', 'diana123', 0);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `alojamentos`
--
ALTER TABLE `alojamentos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `utilizadores`
--
ALTER TABLE `utilizadores`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `alojamentos`
--
ALTER TABLE `alojamentos`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `utilizadores`
--
ALTER TABLE `utilizadores`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
