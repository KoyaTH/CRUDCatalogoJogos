-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 08/11/2026 às 18:00
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `catalogojogos`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `prateleira`
--

Create database CatalogoDeJogos;
Use CatalogoDeJogos;
CREATE TABLE `prateleira` (
  `codigo` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `genero` varchar(50) NOT NULL,
  `lancamento` date DEFAULT NULL,
  `desenvolvedora` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `prateleira`
--

INSERT INTO `prateleira` (`codigo`, `nome`, `genero`, `lancamento`, `desenvolvedora`) VALUES
(1, 'Minecraft', 'Sandbox', '2011-11-18', 'Mojang'),
(2, 'Terraria', 'Aventura', '2011-05-16', 'Re-Logic'),
(3, 'Stardew Valley', 'Simulação', '2016-02-26', 'ConcernedApe');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `prateleira`
--
ALTER TABLE `prateleira`
  ADD PRIMARY KEY (`codigo`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `prateleira`
--
ALTER TABLE `prateleira`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
