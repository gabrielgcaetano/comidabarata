-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 23-Set-2017 às 02:21
-- Versão do servidor: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
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
-- Estrutura da tabela `carrinho`
--

CREATE TABLE `carrinho` (
  `carrinho_id` int(11) NOT NULL,
  `carrinho_produto_id` int(11) NOT NULL,
  `carrinho_user_id` int(11) NOT NULL,
  `carrinho_quant` int(11) NOT NULL,
  `carrinho_valor_unit` float(9,2) NOT NULL,
  `carrinho_valor_total` float(9,2) NOT NULL,
  `carrinho_session_id` int(25) NOT NULL,
  `carrinho_data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cupom`
--

CREATE TABLE `cupom` (
  `cupom_id` int(11) NOT NULL,
  `cupom_token` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cupom_carrinho_session_id` int(25) NOT NULL,
  `cupom_status_cupom_id` int(11) NOT NULL,
  `cupom_valor_total` float(9,2) NOT NULL,
  `cupom_user_id` int(11) NOT NULL,
  `cupom_empresa_id` int(11) NOT NULL,
  `cupom_data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `cupom_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `denuncia`
--

CREATE TABLE `denuncia` (
  `denuncia_id` int(11) NOT NULL,
  `denuncia_titulo` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `denuncia_descricao` varchar(140) COLLATE utf8mb4_unicode_ci NOT NULL,
  `denuncia_user_id_usuario` int(11) DEFAULT NULL,
  `denuncia_user_id_empresa` int(11) NOT NULL,
  `denuncia_produto_id` int(11) NOT NULL,
  `denuncia_check` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `newsletter`
--

CREATE TABLE `newsletter` (
  `newsletter_id` int(11) NOT NULL,
  `newsletter_email` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `newsletter_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `newsletter`
--

INSERT INTO `newsletter` (`newsletter_id`, `newsletter_email`, `newsletter_status`) VALUES
(1, 'gabriel.goulartcaetano@gmail.com', 1);

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
  `produto_preco_venda` float NOT NULL,
  `produto_visita` int(11) NOT NULL,
  `produto_foto` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `produto_classificacao` float(1,1) NOT NULL,
  `produto_validade` date NOT NULL,
  `produto_fornecedor` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `produto_status` tinyint(1) NOT NULL,
  `produto_user_id` int(11) DEFAULT NULL,
  `produto_tipo_produto_sub_id` int(11) NOT NULL,
  `produto_validade_Bol` tinyint(1) NOT NULL,
  `produto_destaque` tinyint(1) NOT NULL,
  `produto_data_cadastro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `status_cupom`
--

CREATE TABLE `status_cupom` (
  `status_cupom_id` int(11) NOT NULL,
  `status_cupom_nome` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo_produto`
--

CREATE TABLE `tipo_produto` (
  `tipo_produto_id` int(11) NOT NULL,
  `tipo_produto_nome` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo_produto_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `tipo_produto`
--

INSERT INTO `tipo_produto` (`tipo_produto_id`, `tipo_produto_nome`, `tipo_produto_status`) VALUES
(1, 'Alimentos', 1),
(2, 'Congelados', 1),
(3, 'Bebidas', 1),
(4, 'Higiene Pessoal', 1),
(5, 'Lacticínios', 1),
(6, 'Limpeza', 1),
(7, 'Bebês', 1),
(8, 'Feira', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo_produto_sub`
--

CREATE TABLE `tipo_produto_sub` (
  `tipo_produto_sub_id` int(11) NOT NULL,
  `tipo_produto_sub_nome` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo_produto_sub_tipo_produto_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `tipo_produto_sub`
--

INSERT INTO `tipo_produto_sub` (`tipo_produto_sub_id`, `tipo_produto_sub_nome`, `tipo_produto_sub_tipo_produto_id`) VALUES
(3, 'Arroz', 1),
(4, 'Açúcar & Adoçantes', 1),
(5, 'Feijão', 1),
(6, 'Massas', 1),
(7, 'Biscoitos & Salgadinhos', 1),
(8, 'Doces & Chocolates', 1),
(9, 'Molhos', 1),
(10, 'Óleos, Azeites & Vinagres', 1),
(11, 'Condimentos', 1),
(12, 'Conservas & Enlatados', 1),
(13, 'Farinha', 1),
(14, 'Fermentos & Misturas para Bolos', 1),
(15, 'Aveias', 1),
(18, 'Carnes e Aves', 2),
(19, 'Hambúrguer', 2),
(20, 'Petiscos e Empanados', 2),
(21, 'Sobremesas e Sucos', 2),
(22, 'Refrigerante', 3),
(23, 'Sucos', 3),
(24, 'Água e Energéticos', 3),
(25, 'Sobremesas e Sucos', 3),
(26, 'Shampoo', 4),
(27, 'Sabonete', 4),
(28, 'Desodorante', 4),
(29, 'Leite', 5),
(30, 'Limpeza em Geral', 6),
(31, 'Para Cozinha', 6),
(32, 'Para Banheiro', 6),
(33, 'Fraldas', 7),
(34, 'Lenços Infantil', 7),
(35, 'Alimentação Infantil', 7),
(36, 'Shampoo Infantil', 7),
(37, 'Legumes', 8),
(38, 'Verduras', 8),
(39, 'Frutas', 8),
(40, 'Temperos', 8);

-- --------------------------------------------------------

--
-- Estrutura da tabela `transacao`
--

CREATE TABLE `transacao` (
  `transacao_id` int(11) NOT NULL,
  `transacao_produto_id` int(11) NOT NULL,
  `transacao_user_id` int(11) NOT NULL,
  `transacao_empresa_id` int(11) NOT NULL,
  `transacao_produto_quantidade` int(11) NOT NULL,
  `transacao_data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `transacao_status_item` tinyint(1) NOT NULL,
  `transacao_status` tinyint(1) NOT NULL,
  `transacao_token` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_nome` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_email` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_senha` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_documento` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_cep` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_sexo` tinyint(1) NOT NULL,
  `user_ddd_1` varchar(4) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_tel_1` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_ddd_2` varchar(4) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_tel_2` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_dt_aniversario` date NOT NULL,
  `user_cad_data` date NOT NULL,
  `user_classificacao` float(1,1) NOT NULL,
  `user_foto` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_status` tinyint(1) NOT NULL,
  `user_tipo_user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `user`
--

INSERT INTO `user` (`user_id`, `user_nome`, `user_email`, `user_senha`, `user_documento`, `user_cep`, `user_sexo`, `user_ddd_1`, `user_tel_1`, `user_ddd_2`, `user_tel_2`, `user_dt_aniversario`, `user_cad_data`, `user_classificacao`, `user_foto`, `user_status`, `user_tipo_user_id`) VALUES
(3, 'Gabriel Caetano', 'gabriel@gmail.com', '123456', '03675458024', '96030-023', 1, '53', '3302-6190', '53', '99982-2811', '1995-07-16', '0000-00-00', 0.0, '', 0, 1),
(4, 'Sandro Caetano', 'sandro@gmail.com', '123456', '036.000.000', '', 1, '53', '9998-2281', '53', '99998-2811', '2017-07-03', '0000-00-00', 0.0, '', 0, 2),
(7, 'Heloisa', 'heloisa@gmail.com', '123456', '040.040.040', '', 0, '', '', '', '', '0000-00-00', '0000-00-00', 0.0, '', 0, 3),
(8, 'michel', 'michel@gmail.com', '123456', '032.323.232', '', 0, '', '', '', '', '0000-00-00', '0000-00-00', 0.0, '', 0, 2),
(9, 'Martha Andrade', 'martha@gmail.com', '123456', '', '', 0, '', '', '', '', '0000-00-00', '0000-00-00', 0.0, '', 0, 2),
(12, 'Perseu Silva', 'perseu@gmail.com', '123456', '03675458022', '', 0, '', '33026190', '', '', '0000-00-00', '0000-00-00', 0.0, '', 0, 2),
(13, 'Joao Silva', 'joao@gmail.com', '123456', '03375458024', '', 0, '', '33333333333', '', '', '0000-00-00', '0000-00-00', 0.0, '', 0, 2),
(14, 'Comprador', 'comprador@gmail.com', '123456', '03367548525', '', 1, '53', '33333333', '51', '999999999', '1997-09-10', '0000-00-00', 0.0, '', 1, 2),
(15, 'Macro Atacado Krolow', 'vendedor@gmail.com', '123456', '03367548524', '', 1, '', '', '', '', '1998-09-04', '0000-00-00', 0.0, '15-2017-09-22_13-08-54.png', 0, 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `user_tipo`
--

CREATE TABLE `user_tipo` (
  `user_tipo_id` int(11) NOT NULL,
  `user_tipo_nome` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_tipo_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `user_tipo`
--

INSERT INTO `user_tipo` (`user_tipo_id`, `user_tipo_nome`, `user_tipo_status`) VALUES
(1, 'Administrador', 1),
(2, 'Usuário Fisico', 1),
(3, 'Usuário Jurídico', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `view`
--

CREATE TABLE `view` (
  `view_id` int(11) NOT NULL,
  `view_produto_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carrinho`
--
ALTER TABLE `carrinho`
  ADD PRIMARY KEY (`carrinho_id`),
  ADD KEY `carrinho_produto_id` (`carrinho_produto_id`),
  ADD KEY `carrinho_user_id` (`carrinho_user_id`),
  ADD KEY `carrinho_session_id` (`carrinho_session_id`);

--
-- Indexes for table `cupom`
--
ALTER TABLE `cupom`
  ADD PRIMARY KEY (`cupom_id`),
  ADD KEY `cupom_carrinho_session_id_2` (`cupom_carrinho_session_id`),
  ADD KEY `cupom_carrinho_session_id_3` (`cupom_carrinho_session_id`),
  ADD KEY `cupom_status_cupom_id` (`cupom_status_cupom_id`);

--
-- Indexes for table `denuncia`
--
ALTER TABLE `denuncia`
  ADD PRIMARY KEY (`denuncia_id`),
  ADD KEY `denuncia_user_id` (`denuncia_user_id_usuario`),
  ADD KEY `denuncia_user_id_2` (`denuncia_user_id_usuario`),
  ADD KEY `denuncia_produto_id` (`denuncia_produto_id`);

--
-- Indexes for table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`newsletter_id`);

--
-- Indexes for table `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`produto_id`),
  ADD KEY `produto_user_id_2` (`produto_user_id`),
  ADD KEY `produto_tipo_produto_id_3` (`produto_tipo_produto_sub_id`) USING BTREE;

--
-- Indexes for table `status_cupom`
--
ALTER TABLE `status_cupom`
  ADD PRIMARY KEY (`status_cupom_id`);

--
-- Indexes for table `tipo_produto`
--
ALTER TABLE `tipo_produto`
  ADD PRIMARY KEY (`tipo_produto_id`);

--
-- Indexes for table `tipo_produto_sub`
--
ALTER TABLE `tipo_produto_sub`
  ADD PRIMARY KEY (`tipo_produto_sub_id`),
  ADD KEY `tipo_produto_sub_tipo_produto_id` (`tipo_produto_sub_tipo_produto_id`);

--
-- Indexes for table `transacao`
--
ALTER TABLE `transacao`
  ADD PRIMARY KEY (`transacao_id`),
  ADD KEY `transacao_user_id` (`transacao_user_id`),
  ADD KEY `transacao_produto_id` (`transacao_produto_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_email` (`user_email`),
  ADD UNIQUE KEY `user_cpf` (`user_documento`),
  ADD KEY `user_tipo_user_id` (`user_tipo_user_id`);

--
-- Indexes for table `user_tipo`
--
ALTER TABLE `user_tipo`
  ADD PRIMARY KEY (`user_tipo_id`);

--
-- Indexes for table `view`
--
ALTER TABLE `view`
  ADD PRIMARY KEY (`view_id`),
  ADD KEY `view_produto_id` (`view_produto_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carrinho`
--
ALTER TABLE `carrinho`
  MODIFY `carrinho_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cupom`
--
ALTER TABLE `cupom`
  MODIFY `cupom_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `newsletter_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `produto`
--
ALTER TABLE `produto`
  MODIFY `produto_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;
--
-- AUTO_INCREMENT for table `status_cupom`
--
ALTER TABLE `status_cupom`
  MODIFY `status_cupom_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tipo_produto`
--
ALTER TABLE `tipo_produto`
  MODIFY `tipo_produto_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tipo_produto_sub`
--
ALTER TABLE `tipo_produto_sub`
  MODIFY `tipo_produto_sub_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `transacao`
--
ALTER TABLE `transacao`
  MODIFY `transacao_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `user_tipo`
--
ALTER TABLE `user_tipo`
  MODIFY `user_tipo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `view`
--
ALTER TABLE `view`
  MODIFY `view_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `carrinho`
--
ALTER TABLE `carrinho`
  ADD CONSTRAINT `carrinho_ibfk_1` FOREIGN KEY (`carrinho_produto_id`) REFERENCES `produto` (`produto_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `carrinho_ibfk_2` FOREIGN KEY (`carrinho_user_id`) REFERENCES `user` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `carrinho_ibfk_3` FOREIGN KEY (`carrinho_session_id`) REFERENCES `cupom` (`cupom_carrinho_session_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `denuncia`
--
ALTER TABLE `denuncia`
  ADD CONSTRAINT `denuncia_ibfk_1` FOREIGN KEY (`denuncia_user_id_usuario`) REFERENCES `user` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `denuncia_ibfk_2` FOREIGN KEY (`denuncia_produto_id`) REFERENCES `produto` (`produto_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `produto`
--
ALTER TABLE `produto`
  ADD CONSTRAINT `produto_ibfk_1` FOREIGN KEY (`produto_user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `produto_ibfk_2` FOREIGN KEY (`produto_tipo_produto_sub_id`) REFERENCES `tipo_produto_sub` (`tipo_produto_sub_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `status_cupom`
--
ALTER TABLE `status_cupom`
  ADD CONSTRAINT `status_cupom_ibfk_1` FOREIGN KEY (`status_cupom_id`) REFERENCES `cupom` (`cupom_status_cupom_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `tipo_produto_sub`
--
ALTER TABLE `tipo_produto_sub`
  ADD CONSTRAINT `tipo_produto_sub_ibfk_1` FOREIGN KEY (`tipo_produto_sub_tipo_produto_id`) REFERENCES `tipo_produto` (`tipo_produto_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `transacao`
--
ALTER TABLE `transacao`
  ADD CONSTRAINT `transacao_ibfk_1` FOREIGN KEY (`transacao_produto_id`) REFERENCES `produto` (`produto_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `transacao_ibfk_2` FOREIGN KEY (`transacao_user_id`) REFERENCES `user` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`user_tipo_user_id`) REFERENCES `user_tipo` (`user_tipo_id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Limitadores para a tabela `view`
--
ALTER TABLE `view`
  ADD CONSTRAINT `view_ibfk_1` FOREIGN KEY (`view_id`) REFERENCES `produto` (`produto_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
