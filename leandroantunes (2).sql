-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 15/09/2020 às 15:07
-- Versão do servidor: 10.4.13-MariaDB
-- Versão do PHP: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `leandroantunes`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `assinantes`
--

CREATE TABLE `assinantes` (
  `id` int(10) UNSIGNED NOT NULL,
  `nome` varchar(120) NOT NULL,
  `email` varchar(120) NOT NULL,
  `senha` varchar(120) NOT NULL,
  `status` int(10) NOT NULL COMMENT '1. ativo 2.inativo',
  `datacadastro` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `assinantes`
--

INSERT INTO `assinantes` (`id`, `nome`, `email`, `senha`, `status`, `datacadastro`) VALUES
(1, 'Felipe Sergio', 'felipesergio@outlook.com', 'admin', 1, '2020-09-15 01:23:39'),
(2, 'Lourival Netto', 'netto@grudigital.com.br', 'admin', 2, '2020-09-15 01:39:17');

-- --------------------------------------------------------

--
-- Estrutura para tabela `blog_categorias`
--

CREATE TABLE `blog_categorias` (
  `id` int(10) UNSIGNED NOT NULL,
  `categoria` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `blog_categorias`
--

INSERT INTO `blog_categorias` (`id`, `categoria`) VALUES
(2, 'adicionar 2'),
(3, 'sdfsd');

-- --------------------------------------------------------

--
-- Estrutura para tabela `blog_comentarios`
--

CREATE TABLE `blog_comentarios` (
  `id` int(10) UNSIGNED NOT NULL,
  `publicacao` int(10) NOT NULL,
  `assinante` int(10) NOT NULL,
  `mensagem` text NOT NULL,
  `status` int(10) NOT NULL COMMENT '1. em analise / 2. aprovado / 3. reprovado',
  `datacomentario` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `blog_comentarios`
--

INSERT INTO `blog_comentarios` (`id`, `publicacao`, `assinante`, `mensagem`, `status`, `datacomentario`) VALUES
(1, 3, 1, 'materia sensacional', 2, '2020-09-15 09:50:19');

-- --------------------------------------------------------

--
-- Estrutura para tabela `blog_imagens`
--

CREATE TABLE `blog_imagens` (
  `id` int(10) UNSIGNED NOT NULL,
  `publicacao` int(10) NOT NULL,
  `imagem` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura para tabela `blog_publicacao`
--

CREATE TABLE `blog_publicacao` (
  `id` int(10) UNSIGNED NOT NULL,
  `titulo` varchar(200) DEFAULT NULL,
  `categoria` int(11) DEFAULT NULL,
  `resumo` text DEFAULT NULL,
  `texto` text DEFAULT NULL,
  `imagem` varchar(100) DEFAULT NULL,
  `video` varchar(120) DEFAULT NULL,
  `status` int(10) DEFAULT NULL,
  `datapublicacao` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `blog_publicacao`
--

INSERT INTO `blog_publicacao` (`id`, `titulo`, `categoria`, `resumo`, `texto`, `imagem`, `video`, `status`, `datapublicacao`) VALUES
(3, 'Titulo2', 3, '2Resumo ', 'Texto', NULL, 'iDGywihPsKw', 1, '2020-09-15 12:17:27');

-- --------------------------------------------------------

--
-- Estrutura para tabela `publicidade_anuncio`
--

CREATE TABLE `publicidade_anuncio` (
  `id` int(10) UNSIGNED NOT NULL,
  `titulo` varchar(120) DEFAULT NULL,
  `local` varchar(120) DEFAULT NULL,
  `link` varchar(120) DEFAULT NULL,
  `imagem` varchar(120) DEFAULT NULL,
  `status` int(10) DEFAULT NULL COMMENT '1. ativo / 2.inativo',
  `datapublicacao` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `publicidade_anuncio`
--

INSERT INTO `publicidade_anuncio` (`id`, `titulo`, `local`, `link`, `imagem`, `status`, `datapublicacao`) VALUES
(4, 'Cliente teste', 'categorias', 'fdsfs', NULL, NULL, '2020-09-15 05:40:33');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(10) UNSIGNED NOT NULL,
  `nome` varchar(120) NOT NULL,
  `email` varchar(120) NOT NULL,
  `senha` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`) VALUES
(1, 'Felipe Sergio', 'felipe@grudigital.com.br', '21232f297a57a5a743894a0e4a801fc3');

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `assinantes`
--
ALTER TABLE `assinantes`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `blog_categorias`
--
ALTER TABLE `blog_categorias`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `blog_comentarios`
--
ALTER TABLE `blog_comentarios`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `blog_imagens`
--
ALTER TABLE `blog_imagens`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `blog_publicacao`
--
ALTER TABLE `blog_publicacao`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `publicidade_anuncio`
--
ALTER TABLE `publicidade_anuncio`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `assinantes`
--
ALTER TABLE `assinantes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `blog_categorias`
--
ALTER TABLE `blog_categorias`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `blog_comentarios`
--
ALTER TABLE `blog_comentarios`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `blog_imagens`
--
ALTER TABLE `blog_imagens`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `blog_publicacao`
--
ALTER TABLE `blog_publicacao`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `publicidade_anuncio`
--
ALTER TABLE `publicidade_anuncio`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
