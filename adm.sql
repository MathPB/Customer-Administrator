-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 10-Fev-2020 às 17:15
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
  `nome` varchar(200) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `nasc` date NOT NULL,
  `cpf` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `rg` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `telefone` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `nome` varchar(200) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `email` varchar(200) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `senha` varchar(200) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `nome`, `email`, `senha`) VALUES
(1, 'admin', 'admin@gmail.com', '$2y$10$x/jUnbPUk/LhUGqkTWGKlOwiAFoXi9C5ISPqxfDeKCC4toKwHVVJW'),
(2, 'Matheus', 'matheus.pereira4025@gmail.com', '$2y$10$mtM1eAk29DI9EsypIlLwge8OCipwB2BB2KK/tTlv5fQgvLBLW09xK'),
(3, 'Thais', 't@gmail.com', '$2y$10$bWTLRkXfZs8h2Jr1gHjA3OUr5SUlfL/PFMXfYyUJFRtSJRX9kseYS'),
(4, 'Jorge', 'jr@gmail.com', '$2y$10$/IjCqYfNoH5ZTwKGBTBHUu8027CcHPDp3r6eUFz6LhzPJ91mWE9Xq'),
(5, 'Maria', 'ma@gmail.com', '$2y$10$n2w8LerzepIlwKoF9vQ8h.Ryuh4tXWS.jb8w8NBhIPgTrA8h7T0Qi');

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
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
