-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 07-Ago-2025 às 17:01
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
-- Estrutura da tabela `colaboradores_papelaria_2024`
--

CREATE TABLE `colaboradores_papelaria_2024` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `login` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `colaboradores_papelaria_2024`
--

INSERT INTO `colaboradores_papelaria_2024` (`id`, `nome`, `login`, `password`) VALUES
(1, 'Administrador', 'admin ', '$2y$10$DdKIdU/AekRzlyBvPrVQmev6HcnX4udLB2RjASe1xv5vY20C7gAxm'),
(2, 'Maria', 'maria', '$2y$10$mqsqmut1ljgmPVsl8NpSVeIhOd5AJV/UIgQF0ozvgw8H7W/ddHxBu'),
(3, 'João', 'joao', '$2y$10$Jbnr1bMt5TWFIJP8hBX6MetEp1k/4aMtvze9hGhPQnEuZSeTZrxDm');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `colaboradores_papelaria_2024`
--
ALTER TABLE `colaboradores_papelaria_2024`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `colaboradores_papelaria_2024`
--
ALTER TABLE `colaboradores_papelaria_2024`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
