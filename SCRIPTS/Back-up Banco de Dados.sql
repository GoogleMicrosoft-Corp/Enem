-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 02-Dez-2018 às 16:25
-- Versão do servidor: 10.1.37-MariaDB
-- versão do PHP: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `enem`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `perguntas`
--

CREATE TABLE `perguntas` (
  `Pergunta_id` int(11) NOT NULL,
  `Pergunta` varchar(1500) DEFAULT NULL,
  `RespostaA` varchar(1500) DEFAULT NULL,
  `RespostaB` varchar(255) DEFAULT NULL,
  `RespostaC` varchar(255) DEFAULT NULL,
  `RespostaD` varchar(255) DEFAULT NULL,
  `RespostaE` varchar(255) DEFAULT NULL,
  `RespostaCorreta` text,
  `AreaConhecimento_id` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `perguntas`
--

INSERT INTO `perguntas` (`Pergunta_id`, `Pergunta`, `RespostaA`, `RespostaB`, `RespostaC`, `RespostaD`, `RespostaE`, `RespostaCorreta`, `AreaConhecimento_id`) VALUES
(1, 'Teste de Pergunta', 'Teste OpÃ§Ã£o A', 'Teste OpÃ§Ã£o B', 'Teste OpÃ§Ã£o C', 'Teste OpÃ§Ã£o D', 'Teste OpÃ§Ã£o E', '1', '1 '),
(2, '', '', '', '', '', '', '', ' '),
(3, '', '', '', '', '', '', '', ' '),
(4, '', '', '', '', '', '', '', ' ');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) UNSIGNED NOT NULL,
  `nome` varchar(50) NOT NULL,
  `usuario` varchar(25) NOT NULL,
  `senha` varchar(40) NOT NULL,
  `email` varchar(100) NOT NULL,
  `cadastro` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `usuario`, `senha`, `email`, `cadastro`) VALUES
(1, 'Adahylton Barlati Tenório', 'adahylton', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'adahyltonfilho@gmail.com', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `perguntas`
--
ALTER TABLE `perguntas`
  ADD PRIMARY KEY (`Pergunta_id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `perguntas`
--
ALTER TABLE `perguntas`
  MODIFY `Pergunta_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
