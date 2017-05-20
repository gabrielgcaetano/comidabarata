-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 20-Maio-2017 às 19:55
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
-- Estrutura da tabela `carrinho`
--

CREATE TABLE `carrinho` (
  `carrinho_id` int(11) NOT NULL,
  `carrinho_produto_id` int(11) NOT NULL,
  `carrinho_user_id` int(11) NOT NULL,
  `carrinho_quant` int(11) NOT NULL,
  `carrinho_valor_unit` float(9,2) NOT NULL,
  `carrinho_valor_total` float(9,2) NOT NULL,
  `carrinho_session_id` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cupom`
--

CREATE TABLE `cupom` (
  `cupom_id` int(11) NOT NULL,
  `cupom_carrinho_session_id` int(25) NOT NULL,
  `cupom_status_cupom_id` int(11) NOT NULL,
  `cupom_valor_total` float(9,2) NOT NULL
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
  `produto_classificacao` float(1,1) NOT NULL,
  `validade` date NOT NULL,
  `produto_status` tinyint(1) NOT NULL,
  `produto_user_id` int(11) DEFAULT NULL,
  `produto_tipo_produto_id` int(11) NOT NULL
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
  `tipo_produto_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `tipo_produto`
--

INSERT INTO `tipo_produto` (`tipo_produto_id`, `tipo_produto_nome`, `tipo_produto_status`) VALUES
(1, 'Lalaticínios', 1),
(2, 'Cereal', 1),
(3, 'Vegetal', 1),
(4, 'Fruta', 1),
(5, 'd', 1),
(6, 'dggg', 1),
(7, 'g', 1),
(8, 'Fruta', 1),
(9, 'g', 1),
(10, 'v', 1),
(11, 'l', 1),
(12, 'Fruta', 1),
(13, 's', 1),
(14, 'd', 1),
(15, 'dddddddddddddddddddddddddddddddddddddddddddddddddd', 1),
(16, 'f', 1),
(17, 'sd', 1),
(18, 'ADM', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_nome` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_email` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_senha` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_documento` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_cep` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_sexo` tinyint(1) NOT NULL,
  `user_tel_1` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_tel_2` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_dt_aniversario` date NOT NULL,
  `user_cad_data` date NOT NULL,
  `user_classificacao` float(1,1) NOT NULL,
  `user_status` tinyint(1) NOT NULL,
  `user_tipo_user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `user`
--

INSERT INTO `user` (`user_id`, `user_nome`, `user_email`, `user_senha`, `user_documento`, `user_cep`, `user_sexo`, `user_tel_1`, `user_tel_2`, `user_dt_aniversario`, `user_cad_data`, `user_classificacao`, `user_status`, `user_tipo_user_id`) VALUES
(3, 'Gabriel Goulart Caetano', 'gabriel@gmail.com', '123456', '0', '0', 0, '0', '0', '0000-00-00', '0000-00-00', 0.0, 1, 0);

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
(2, 'Administrador', 0);

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
  ADD KEY `carrinho_session_id` (`carrinho_session_id`),
  ADD KEY `carrinho_session_id_2` (`carrinho_session_id`),
  ADD KEY `carrinho_session_id_3` (`carrinho_session_id`),
  ADD KEY `carrinho_session_id_4` (`carrinho_session_id`);

--
-- Indexes for table `cupom`
--
ALTER TABLE `cupom`
  ADD PRIMARY KEY (`cupom_id`),
  ADD KEY `cupom_carrinho_session_id` (`cupom_carrinho_session_id`),
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
-- Indexes for table `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`produto_id`),
  ADD KEY `produto_tipo_produto_id_2` (`produto_tipo_produto_id`),
  ADD KEY `produto_tipo_produto_id_3` (`produto_tipo_produto_id`),
  ADD KEY `produto_user_id_2` (`produto_user_id`);

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
  MODIFY `cupom_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `produto`
--
ALTER TABLE `produto`
  MODIFY `produto_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `status_cupom`
--
ALTER TABLE `status_cupom`
  MODIFY `status_cupom_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tipo_produto`
--
ALTER TABLE `tipo_produto`
  MODIFY `tipo_produto_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `user_tipo`
--
ALTER TABLE `user_tipo`
  MODIFY `user_tipo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
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
  ADD CONSTRAINT `produto_ibfk_2` FOREIGN KEY (`produto_tipo_produto_id`) REFERENCES `tipo_produto` (`tipo_produto_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `status_cupom`
--
ALTER TABLE `status_cupom`
  ADD CONSTRAINT `status_cupom_ibfk_1` FOREIGN KEY (`status_cupom_id`) REFERENCES `cupom` (`cupom_status_cupom_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `view`
--
ALTER TABLE `view`
  ADD CONSTRAINT `view_ibfk_1` FOREIGN KEY (`view_id`) REFERENCES `produto` (`produto_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
