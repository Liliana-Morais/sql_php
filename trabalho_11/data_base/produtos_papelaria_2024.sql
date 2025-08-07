-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 07-Ago-2025 às 17:02
-- Versão do servidor: 10.4.32-MariaDB
-- versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `codemaster_bd`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos_papelaria_2024`
--

CREATE TABLE `produtos_papelaria_2024` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `preco` float NOT NULL,
  `quantidade` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `produtos_papelaria_2024`
--

INSERT INTO `produtos_papelaria_2024` (`id`, `nome`, `preco`, `quantidade`) VALUES
(1, 'Caneta Verde', 1.24, 1),
(57, 'Tinta Vermelha 50ml', 1.89, 2),
(58, 'Tinta Branca 50ml', 1.89, 3),
(59, 'Tinta Preta 50ml', 1.89, 25),
(60, 'Bolsa Branca', 8.99, 12),
(61, 'Papel A4 50un', 1.5, 5),
(62, 'Afia Cinza', 0.27, 32),
(64, 'Borracha Branca Pequena', 0.25, 41),
(82, 'Afia Branco', 0.52, 123),
(83, 'Afia Preto', 0.65, 35),
(84, 'Caneta Cinza', 1.55, 55);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `produtos_papelaria_2024`
--
ALTER TABLE `produtos_papelaria_2024`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `produtos_papelaria_2024`
--
ALTER TABLE `produtos_papelaria_2024`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
