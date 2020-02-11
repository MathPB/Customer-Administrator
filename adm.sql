-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 10-Fev-2020 às 22:28
-- Versão do servidor: 8.0.19
-- versão do PHP: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `adm`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `custumer`
--

CREATE TABLE `custumer` (
  `id` int NOT NULL,
  `nome` varchar(200) COLLATE utf8_bin NOT NULL,
  `nasc` text COLLATE utf8_bin NOT NULL,
  `cpf` varchar(100) COLLATE utf8_bin NOT NULL,
  `rg` varchar(100) COLLATE utf8_bin NOT NULL,
  `telefone` varchar(100) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `custumer`
--

INSERT INTO `custumer` (`id`, `nome`, `nasc`, `cpf`, `rg`, `telefone`) VALUES
(1, 'Matheus', '27/07/1997', '469.653.758-76', '54.502.074-8', '(19) 99830-9583'),
(2, 'Camila', '30/08/1995', '897.978.978-97', '64.546.564-6', '(19) 98998-8969'),
(9, 'Jorge', '30/07/1997', '123.620.968-07', '68.468.486-4', '(19) 99830-9583');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `nome` varchar(200) COLLATE utf8_bin NOT NULL,
  `email` varchar(200) COLLATE utf8_bin NOT NULL,
  `senha` varchar(200) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `nome`, `email`, `senha`) VALUES
(1, 'admin', 'admin@gmail.com', '$2y$10$x/jUnbPUk/LhUGqkTWGKlOwiAFoXi9C5ISPqxfDeKCC4toKwHVVJW');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `custumer`
--
ALTER TABLE `custumer`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `custumer`
--
ALTER TABLE `custumer`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
