-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 29-Set-2022 às 21:43
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `avaliacao`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `caminhos`
--

CREATE TABLE `caminhos` (
  `id` int(11) NOT NULL,
  `label` varchar(100) NOT NULL,
  `caminho` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `caminhos`
--

INSERT INTO `caminhos` (`id`, `label`, `caminho`) VALUES
(1, 'valores', 'acao/resultados_em_cores.php'),
(2, 'divisao', 'acao/divisao.php'),
(3, 'frutas', 'acao/frutas.php'),
(4, 'juros', 'acao/juros.php'),
(5, 'composto', 'acao/composto.php');

-- --------------------------------------------------------

--
-- Estrutura da tabela `frutas`
--

CREATE TABLE `frutas` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `peso` decimal(10,2) NOT NULL,
  `preco` decimal(10,2) NOT NULL,
  `img_caminho` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `frutas`
--

INSERT INTO `frutas` (`id`, `nome`, `peso`, `preco`, `img_caminho`) VALUES
(1, 'Maçã', '0.10', '10.00', 'img/maca.png'),
(2, 'Melancia', '1.00', '20.00', 'img/melancia.png'),
(3, 'Laranja', '0.30', '5.50', 'img/laranja.png'),
(4, 'Repolho', '0.50', '5.00', 'img/repolho.png'),
(5, 'Cenoura', '0.20', '10.00', 'img/cenoura.png'),
(6, 'Batata', '0.10', '2.00', 'img/batata.png');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `caminhos`
--
ALTER TABLE `caminhos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `frutas`
--
ALTER TABLE `frutas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `caminhos`
--
ALTER TABLE `caminhos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `frutas`
--
ALTER TABLE `frutas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
