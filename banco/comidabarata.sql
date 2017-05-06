-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 06-Maio-2017 às 21:00
-- Versão do servidor: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `comidabarata`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `produto_id` int(11) NOT NULL,
  `produto_nome` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `produto_descricao` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `produto_estoque` int(11) NOT NULL,
  `produto_marca` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `produto_preco_velho` float NOT NULL,
  `produto_preco_novo` float NOT NULL,
  `produto_visita` int(11) NOT NULL,
  `produto_foto` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `produto_status` tinyint(1) NOT NULL,
  `produto_user_id` int(11) DEFAULT NULL,
  `produto_tipo_produto_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`produto_id`, `produto_nome`, `produto_descricao`, `produto_estoque`, `produto_marca`, `produto_preco_velho`, `produto_preco_novo`, `produto_visita`, `produto_foto`, `produto_status`, `produto_user_id`, `produto_tipo_produto_id`) VALUES
(4, 'Caixa de Leite de Ma', '', 0, '', 0, 1.12, 0, '', 1, NULL, 1),
(10, 'Saco de Leite de Mar', '', 0, '', 0, 0.41, 0, '6383d2d7588c176ce03b8af77d594555.jpg', 1, 3, 1),
(13, 'Iogurt', '', 0, '', 0, 0.45, 0, 'iogurte.jpg', 1, 3, 1),
(14, 'Iogurt', '', 0, '', 0, 1.12, 0, 'iogurte.jpg', 1, 3, 1),
(15, 'Saco de Leite de Marca Barata', '', 0, '', 0, 0.45, 0, '30476df37c51a8b56eeb169911788a7b.jpg', 1, 3, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo_produto`
--

CREATE TABLE `tipo_produto` (
  `tipo_produto_id` int(11) NOT NULL,
  `tipo_produto_nome` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo_produto_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `tipo_produto`
--

INSERT INTO `tipo_produto` (`tipo_produto_id`, `tipo_produto_nome`, `tipo_produto_status`) VALUES
(1, 'Lalaticínios', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `transacao`
--

CREATE TABLE `transacao` (
  `transacao_id` int(11) NOT NULL,
  `transacao_produto_id` int(11) NOT NULL,
  `transacao_user_id` int(11) NOT NULL,
  `transacao_quant_produto` int(11) NOT NULL,
  `transacao_status_pag` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_nome` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_email` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_senha` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_cpf` int(11) NOT NULL,
  `user_cep` int(11) NOT NULL,
  `user_sexo` tinyint(1) NOT NULL,
  `user_tel_1` int(11) NOT NULL,
  `user_tel_2` int(11) NOT NULL,
  `user_dt_aniversario` date NOT NULL,
  `user_nivel` int(11) NOT NULL,
  `user_cad_data` date NOT NULL,
  `user_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `user`
--

INSERT INTO `user` (`user_id`, `user_nome`, `user_email`, `user_senha`, `user_cpf`, `user_cep`, `user_sexo`, `user_tel_1`, `user_tel_2`, `user_dt_aniversario`, `user_nivel`, `user_cad_data`, `user_status`) VALUES
(3, 'Gabriel Goulart Caetano', 'gabriel@gmail.com', '123456', 0, 0, 0, 0, 0, '0000-00-00', 0, '0000-00-00', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`produto_id`),
  ADD KEY `produto_tipo_produto_id_2` (`produto_tipo_produto_id`),
  ADD KEY `produto_tipo_produto_id_3` (`produto_tipo_produto_id`),
  ADD KEY `produto_user_id_2` (`produto_user_id`);

--
-- Indexes for table `tipo_produto`
--
ALTER TABLE `tipo_produto`
  ADD PRIMARY KEY (`tipo_produto_id`);

--
-- Indexes for table `transacao`
--
ALTER TABLE `transacao`
  ADD UNIQUE KEY `quant_produto` (`transacao_quant_produto`),
  ADD UNIQUE KEY `transacao__user_id` (`transacao_user_id`),
  ADD UNIQUE KEY `transacao_produto_id` (`transacao_produto_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_email` (`user_email`),
  ADD UNIQUE KEY `user_cpf` (`user_cpf`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `produto`
--
ALTER TABLE `produto`
  MODIFY `produto_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `tipo_produto`
--
ALTER TABLE `tipo_produto`
  MODIFY `tipo_produto_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `produto`
--
ALTER TABLE `produto`
  ADD CONSTRAINT `produto_ibfk_1` FOREIGN KEY (`produto_user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `produto_ibfk_2` FOREIGN KEY (`produto_tipo_produto_id`) REFERENCES `tipo_produto` (`tipo_produto_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `transacao`
--
ALTER TABLE `transacao`
  ADD CONSTRAINT `transacao_ibfk_1` FOREIGN KEY (`transacao_produto_id`) REFERENCES `produto` (`produto_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `transacao_ibfk_2` FOREIGN KEY (`transacao_user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
