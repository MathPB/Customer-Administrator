-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 11-Fev-2020 às 03:14
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
-- Estrutura da tabela `customer`
--

CREATE TABLE `customer` (
  `id` int NOT NULL,
  `nome` varchar(200) COLLATE utf8_bin NOT NULL,
  `nasc` text COLLATE utf8_bin NOT NULL,
  `cpf` varchar(100) COLLATE utf8_bin NOT NULL,
  `rg` varchar(100) COLLATE utf8_bin NOT NULL,
  `telefone` varchar(100) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `customer`
--

INSERT INTO `customer` (`id`, `nome`, `nasc`, `cpf`, `rg`, `telefone`) VALUES
(1, 'Matheus', '27/07/1997', '999.999.999-99', '99.999.999-9', '(99) 99999-9999'),
(2, 'Maria', '30/08/1995', '888.888.888-88', '88.888.888-8', '(88) 88888-888'),
(9, 'Jorge', '30/07/1997', '777.777.777-77', '77.777.777-7', '(77) 77777-7777'),
(14, 'Rambo Silva', '27/07/1997', '666.666.666-66', '66.666.666-8', '(66) 66666-6666'),
(16, 'Lucas', '18/08/1998', '565.468.684-64', '55.555.555-5', '(21) 98875-9865');

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
(1, 'admin', 'admin@gmail.com', '$2y$10$x/jUnbPUk/LhUGqkTWGKlOwiAFoXi9C5ISPqxfDeKCC4toKwHVVJW'),
(2, 'Teste', 'test@gmail.com', '$2y$10$2hrM2.SuiMeSop8Ax2RQD.4wjZOXvpsp6tfMKd9EO66iPjYFe6R2e'),
(3, 'Teste', 'test@gmail.com', '$2y$10$6D8drSfql.PnScI2qTQ6kOZX3dkORG8BORI2el4AyjM.4ou5qdzK6'),
(4, 'User', 'user@gmail.com', '$2y$10$/j6W2vYDGcivNGV4XtfPhetN27XBhDz9q7FRI2m0Oecyq65F3COIa');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `customer`
--
ALTER TABLE `customer`
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
-- AUTO_INCREMENT de tabela `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
