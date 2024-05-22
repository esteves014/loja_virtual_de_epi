-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 25/10/2023 às 11:48
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `epi`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `marca` varchar(255) DEFAULT NULL,
  `tamanho` varchar(255) DEFAULT NULL,
  `categoria` varchar(255) DEFAULT NULL,
  `info` text DEFAULT NULL,
  `preco` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `quant` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `produtos`
--

INSERT INTO `produtos` (`id`, `nome`, `marca`, `tamanho`, `categoria`, `info`, `preco`, `img`, `quant`) VALUES
(3, 'Capacete AVANT', 'Camper', '64', 'capacete', 'Descrição Camper: Casco injetado em polietileno de alta\r\ndensidade, não sendo condutor de corrente elétrica,\r\npossui fenda lateral e aba frontal, com a opção de\r\nsuspensão plástica, injetada em polietileno de baixa\r\ndensidade.\r\nDisponível nas cores: Branco, Azul, Verde, Vermelho,\r\nAmarelo, Laranja, Cinza, Preto e Marrom.\r\n', '10.00', 'upload/produtos/6537f95628090.png', 1),
(12, 'Bota de PVC Branco Cano Longo Marluvas', ' Marluvas', '37, 38, 39, 40, 41', 'luva', 'Bota de borracha, estilo galocha, indicada para profissionais da indústria alimentícia e abatedouros que necessitam de proteção à umidade. Confeccionado em PVC (policloreto de polivinila), este calçado é de fácil higienização, tem cano alto com 32cm e solado antiderrapante. Aprovado nas normas NBR ISO 20347/2015 e BS EN 50321/2000, de classificação II, e solado PVC full grip antiderrapante.\r\nResistente a produtos químicos e solventes.\r\nBota ocupacional de cano alto (32cm), tipo D, classificação II, impermeável.\r\nCor: branca.\r\nCabedal confeccionado em PVC (policloreto de polivinila).\r\nFácil higienização.\r\nModelo com forração interna\r\nSolado PVC full grip antiderrapante.\r\n', '57', 'upload/produtos/6537fd678a45b.jpg', 10);

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `adm` int(11) NOT NULL,
  `user` varchar(255) DEFAULT NULL,
  `senha` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `telefone` varchar(255) DEFAULT NULL,
  `cpf` varchar(255) DEFAULT NULL,
  `rua` varchar(255) DEFAULT NULL,
  `numero_endereço` varchar(255) DEFAULT NULL,
  `bairro` varchar(255) DEFAULT NULL,
  `cidade` varchar(255) NOT NULL,
  `cep` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `adm`, `user`, `senha`, `email`, `telefone`, `cpf`, `rua`, `numero_endereço`, `bairro`, `cidade`, `cep`, `img`) VALUES
(0, 1, 'VITOR MIGUEL DA SILVA ESTEVES', '#wave777x', 'estevesv134@gmail.com', '(14) 99148-4207', '460.446.888-52', 'Pedro parra geres', '411', 'centro', 'Promissão', '16370-000', 'upload/6537f84adccdf.jpg');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
