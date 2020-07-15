-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 20-Jun-2020 às 20:00
-- Versão do servidor: 10.4.12-MariaDB
-- versão do PHP: 7.2.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `u591578783_corta7_db`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `entradaProduto`
--

CREATE TABLE `entradaProduto` (
  `id_entradaProduto` int(11) NOT NULL,
  `data_entrada` timestamp NOT NULL DEFAULT current_timestamp(),
  `fk_empresa` int(11) DEFAULT NULL,
  `fk_entrada_func` int(11) DEFAULT NULL,
  `fk_entrada_forn` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `entradaProduto`
--

INSERT INTO `entradaProduto` (`id_entradaProduto`, `data_entrada`, `fk_empresa`, `fk_entrada_func`, `fk_entrada_forn`) VALUES
(3, '2020-06-11 23:56:45', 1, 1, 4);

-- --------------------------------------------------------

--
-- Estrutura da tabela `itemproduto`
--

CREATE TABLE `itemproduto` (
  `id_itemProduto` int(11) NOT NULL,
  `item_produto_quantidade` int(11) DEFAULT NULL,
  `fk_produto` int(11) NOT NULL,
  `fk_entradaProduto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `itemproduto`
--

INSERT INTO `itemproduto` (`id_itemProduto`, `item_produto_quantidade`, `fk_produto`, `fk_entradaProduto`) VALUES
(1, 10, 3, 3),
(2, 10, 6, 3),
(3, 10, 7, 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `servicos_atendimento`
--

CREATE TABLE `servicos_atendimento` (
  `id_servicos_atendimento` int(11) NOT NULL,
  `quant_servico` int(11) DEFAULT NULL,
  `fk_servico_atend` int(11) NOT NULL,
  `fk_atendimento_serv` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `servicos_atendimento`
--

INSERT INTO `servicos_atendimento` (`id_servicos_atendimento`, `quant_servico`, `fk_servico_atend`, `fk_atendimento_serv`) VALUES
(1, 2, 1, 1),
(2, 2, 3, 1),
(3, 3, 5, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbatendimento`
--

CREATE TABLE `tbatendimento` (
  `id_atendimento` int(11) NOT NULL,
  `data_atendimento` timestamp NOT NULL DEFAULT current_timestamp(),
  `fk_empresa_atend` int(11) NOT NULL,
  `fk_cliente_atend` int(11) NOT NULL,
  `fk_func_atend` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `tbatendimento`
--

INSERT INTO `tbatendimento` (`id_atendimento`, `data_atendimento`, `fk_empresa_atend`, `fk_cliente_atend`, `fk_func_atend`) VALUES
(1, '2020-06-07 14:33:25', 1, 1, 1),
(2, '2020-06-08 15:08:12', 1, 1, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbclientes`
--

CREATE TABLE `tbclientes` (
  `id_cliente` int(11) NOT NULL,
  `nomecli` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `endcli` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cidadecli` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bairrocli` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ufcli` varchar(2) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cepcli` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rgcli` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cpfcli` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fonecli` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `emailcli` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fk_empresa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `tbclientes`
--

INSERT INTO `tbclientes` (`id_cliente`, `nomecli`, `endcli`, `cidadecli`, `bairrocli`, `ufcli`, `cepcli`, `rgcli`, `cpfcli`, `fonecli`, `emailcli`, `fk_empresa`) VALUES
(1, 'Ana Carolina', 'Rua Auriflama, 169', 'Rio de Janeiro', 'Guadalupe', 'RJ', '21660070', '1111111111', '17553025466', '2131069409', 'ana.carol@gmail.com', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbempresa`
--

CREATE TABLE `tbempresa` (
  `idempresa` int(11) NOT NULL,
  `nome` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fantasia` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `emailempresa` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foneemp` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `endemp` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bairroemp` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cidadeemp` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ufemp` varchar(2) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cepemp` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cnpjemp` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fk_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `tbempresa`
--

INSERT INTO `tbempresa` (`idempresa`, `nome`, `fantasia`, `emailempresa`, `foneemp`, `endemp`, `bairroemp`, `cidadeemp`, `ufemp`, `cepemp`, `cnpjemp`, `fk_usuario`) VALUES
(1, 'Insanity Systems', 'Pedrão', 'pedrohebercunha@gmail.com', '21975709607', 'Rua Auriflama, 169', 'Guadalupe', 'Rio de Janeiro', 'RJ', '21660070', '95156904000', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbfornecedor`
--

CREATE TABLE `tbfornecedor` (
  `id_fornecedor` int(11) NOT NULL,
  `nome_fornecedor` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `emailfornecedor` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fonefornecedor` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cnpjfornecedor` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fk_empresa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `tbfornecedor`
--

INSERT INTO `tbfornecedor` (`id_fornecedor`, `nome_fornecedor`, `emailfornecedor`, `fonefornecedor`, `cnpjfornecedor`, `fk_empresa`) VALUES
(4, 'Piracanjuba', 'pedrohebercunha@gmail.com', '2131078987', '33333333333', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbfuncionario`
--

CREATE TABLE `tbfuncionario` (
  `id_func` int(11) NOT NULL,
  `nome_func` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fone_func` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `func_nasc` date NOT NULL,
  `func_end` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `func_bairro` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `func_cidade` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `func_uf` varchar(2) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `func_cep` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `func_cpf` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `func_rg` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `func_pis` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fk_empresa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `tbfuncionario`
--

INSERT INTO `tbfuncionario` (`id_func`, `nome_func`, `fone_func`, `func_nasc`, `func_end`, `func_bairro`, `func_cidade`, `func_uf`, `func_cep`, `func_cpf`, `func_rg`, `func_pis`, `fk_empresa`) VALUES
(1, 'Pedro Heber Leitão', '21975709607', '1997-08-04', 'Rua Auriflama, 169', 'Guadalupe', 'Rio de Janeiro', 'RJ', '21660070', '17339002766', '1733900276', '53574265466', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbitens`
--

CREATE TABLE `tbitens` (
  `id_itens_atendimento` int(11) NOT NULL,
  `quant_produto_atendimento` int(11) NOT NULL,
  `fk_produto_atend` int(11) NOT NULL,
  `fk_atendimento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `tbitens`
--

INSERT INTO `tbitens` (`id_itens_atendimento`, `quant_produto_atendimento`, `fk_produto_atend`, `fk_atendimento`) VALUES
(70, 2, 3, 1),
(71, 2, 6, 1),
(72, 2, 7, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbprodutos`
--

CREATE TABLE `tbprodutos` (
  `produtoid` int(11) NOT NULL,
  `descricao_pro` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `preco_venda` decimal(10,2) NOT NULL,
  `uni_estoque` int(11) NOT NULL,
  `fk_empresa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `tbprodutos`
--

INSERT INTO `tbprodutos` (`produtoid`, `descricao_pro`, `preco_venda`, `uni_estoque`, `fk_empresa`) VALUES
(3, 'Cerveja Latão', '5.00', 13, 1),
(6, 'Loção Pós Barba', '52.05', 14, 1),
(7, 'Barra de Cereal', '1.00', 28, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbservicos`
--

CREATE TABLE `tbservicos` (
  `id_servico` int(11) NOT NULL,
  `nome_servico` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `valor_servico` decimal(10,2) NOT NULL,
  `fk_empresa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `tbservicos`
--

INSERT INTO `tbservicos` (`id_servico`, `nome_servico`, `valor_servico`, `fk_empresa`) VALUES
(1, 'Rastafari', '40.00', 1),
(3, 'Corte Desfarçado', '40.00', 1),
(5, 'Sobrancelha', '25.00', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `usuario` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `senha` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `email`, `senha`) VALUES
(1, 'pedro.heber', 'pedrohebercunha@ragnarok.com.br', 'e10adc3949ba59abbe56e057f20f883e'),
(2, 'champcha', 'arnoldocharuto@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(5, 'najara cunha', 'najara481@gmail.com', '831ecaa2dce96b3ade22c2ec370445e6'),
(6, 'Thais', 'thaisteixeira387@gmail.com', '25ae919ad74925b86bfe95ffd74f3547'),
(7, 'ronaldo.gaucho', 'ronaldo.gaucho@bol.com', 'd3ce9efea6244baa7bf718f12dd0c331');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `entradaProduto`
--
ALTER TABLE `entradaProduto`
  ADD PRIMARY KEY (`id_entradaProduto`),
  ADD KEY `fk_entrada_func` (`fk_entrada_func`),
  ADD KEY `fk_entrada_forn` (`fk_entrada_forn`),
  ADD KEY `fk_empresa` (`fk_empresa`);

--
-- Índices para tabela `itemproduto`
--
ALTER TABLE `itemproduto`
  ADD PRIMARY KEY (`id_itemProduto`),
  ADD KEY `fk_produto` (`fk_produto`),
  ADD KEY `fk_entradaProduto` (`fk_entradaProduto`);

--
-- Índices para tabela `servicos_atendimento`
--
ALTER TABLE `servicos_atendimento`
  ADD PRIMARY KEY (`id_servicos_atendimento`),
  ADD KEY `fk_servico_atend` (`fk_servico_atend`),
  ADD KEY `fk_atendimento_serv` (`fk_atendimento_serv`);

--
-- Índices para tabela `tbatendimento`
--
ALTER TABLE `tbatendimento`
  ADD PRIMARY KEY (`id_atendimento`),
  ADD KEY `fk_cliente_atend` (`fk_cliente_atend`),
  ADD KEY `fk_empresa_atend` (`fk_empresa_atend`),
  ADD KEY `fk_func_atend` (`fk_func_atend`);

--
-- Índices para tabela `tbclientes`
--
ALTER TABLE `tbclientes`
  ADD PRIMARY KEY (`id_cliente`),
  ADD KEY `fk_empresa` (`fk_empresa`);

--
-- Índices para tabela `tbempresa`
--
ALTER TABLE `tbempresa`
  ADD PRIMARY KEY (`idempresa`),
  ADD KEY `fk_usuario` (`fk_usuario`);

--
-- Índices para tabela `tbfornecedor`
--
ALTER TABLE `tbfornecedor`
  ADD PRIMARY KEY (`id_fornecedor`),
  ADD KEY `fk_empresa` (`fk_empresa`);

--
-- Índices para tabela `tbfuncionario`
--
ALTER TABLE `tbfuncionario`
  ADD PRIMARY KEY (`id_func`),
  ADD KEY `fk_empresa` (`fk_empresa`);

--
-- Índices para tabela `tbitens`
--
ALTER TABLE `tbitens`
  ADD PRIMARY KEY (`id_itens_atendimento`),
  ADD KEY `fk_produto_atend` (`fk_produto_atend`),
  ADD KEY `fk_atendimento` (`fk_atendimento`);

--
-- Índices para tabela `tbprodutos`
--
ALTER TABLE `tbprodutos`
  ADD PRIMARY KEY (`produtoid`),
  ADD KEY `fk_empresa` (`fk_empresa`);

--
-- Índices para tabela `tbservicos`
--
ALTER TABLE `tbservicos`
  ADD PRIMARY KEY (`id_servico`),
  ADD KEY `fk_empresa` (`fk_empresa`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `entradaProduto`
--
ALTER TABLE `entradaProduto`
  MODIFY `id_entradaProduto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `itemproduto`
--
ALTER TABLE `itemproduto`
  MODIFY `id_itemProduto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `servicos_atendimento`
--
ALTER TABLE `servicos_atendimento`
  MODIFY `id_servicos_atendimento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `tbatendimento`
--
ALTER TABLE `tbatendimento`
  MODIFY `id_atendimento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `tbclientes`
--
ALTER TABLE `tbclientes`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `tbempresa`
--
ALTER TABLE `tbempresa`
  MODIFY `idempresa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `tbfornecedor`
--
ALTER TABLE `tbfornecedor`
  MODIFY `id_fornecedor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `tbfuncionario`
--
ALTER TABLE `tbfuncionario`
  MODIFY `id_func` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `tbitens`
--
ALTER TABLE `tbitens`
  MODIFY `id_itens_atendimento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT de tabela `tbprodutos`
--
ALTER TABLE `tbprodutos`
  MODIFY `produtoid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `tbservicos`
--
ALTER TABLE `tbservicos`
  MODIFY `id_servico` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `entradaProduto`
--
ALTER TABLE `entradaProduto`
  ADD CONSTRAINT `entradaProduto_ibfk_1` FOREIGN KEY (`fk_entrada_func`) REFERENCES `tbfuncionario` (`id_func`),
  ADD CONSTRAINT `entradaProduto_ibfk_2` FOREIGN KEY (`fk_entrada_forn`) REFERENCES `tbfornecedor` (`id_fornecedor`),
  ADD CONSTRAINT `fk_empresa` FOREIGN KEY (`fk_empresa`) REFERENCES `tbempresa` (`idempresa`);

--
-- Limitadores para a tabela `itemproduto`
--
ALTER TABLE `itemproduto`
  ADD CONSTRAINT `itemproduto_ibfk_1` FOREIGN KEY (`fk_produto`) REFERENCES `tbprodutos` (`produtoid`),
  ADD CONSTRAINT `itemproduto_ibfk_2` FOREIGN KEY (`fk_entradaProduto`) REFERENCES `entradaProduto` (`id_entradaProduto`);

--
-- Limitadores para a tabela `servicos_atendimento`
--
ALTER TABLE `servicos_atendimento`
  ADD CONSTRAINT `servicos_atendimento_ibfk_1` FOREIGN KEY (`fk_servico_atend`) REFERENCES `tbservicos` (`id_servico`),
  ADD CONSTRAINT `servicos_atendimento_ibfk_2` FOREIGN KEY (`fk_atendimento_serv`) REFERENCES `tbatendimento` (`id_atendimento`);

--
-- Limitadores para a tabela `tbatendimento`
--
ALTER TABLE `tbatendimento`
  ADD CONSTRAINT `tbatendimento_ibfk_1` FOREIGN KEY (`fk_cliente_atend`) REFERENCES `tbclientes` (`id_cliente`),
  ADD CONSTRAINT `tbatendimento_ibfk_2` FOREIGN KEY (`fk_empresa_atend`) REFERENCES `tbempresa` (`idempresa`),
  ADD CONSTRAINT `tbatendimento_ibfk_3` FOREIGN KEY (`fk_func_atend`) REFERENCES `tbfuncionario` (`id_func`);

--
-- Limitadores para a tabela `tbclientes`
--
ALTER TABLE `tbclientes`
  ADD CONSTRAINT `tbclientes_ibfk_1` FOREIGN KEY (`fk_empresa`) REFERENCES `tbempresa` (`idempresa`);

--
-- Limitadores para a tabela `tbempresa`
--
ALTER TABLE `tbempresa`
  ADD CONSTRAINT `tbempresa_ibfk_1` FOREIGN KEY (`fk_usuario`) REFERENCES `usuarios` (`id`);

--
-- Limitadores para a tabela `tbfornecedor`
--
ALTER TABLE `tbfornecedor`
  ADD CONSTRAINT `tbfornecedor_ibfk_1` FOREIGN KEY (`fk_empresa`) REFERENCES `tbempresa` (`idempresa`);

--
-- Limitadores para a tabela `tbfuncionario`
--
ALTER TABLE `tbfuncionario`
  ADD CONSTRAINT `tbfuncionario_ibfk_1` FOREIGN KEY (`fk_empresa`) REFERENCES `tbempresa` (`idempresa`);

--
-- Limitadores para a tabela `tbitens`
--
ALTER TABLE `tbitens`
  ADD CONSTRAINT `tbitens_ibfk_1` FOREIGN KEY (`fk_produto_atend`) REFERENCES `tbprodutos` (`produtoid`),
  ADD CONSTRAINT `tbitens_ibfk_2` FOREIGN KEY (`fk_atendimento`) REFERENCES `tbatendimento` (`id_atendimento`);

--
-- Limitadores para a tabela `tbprodutos`
--
ALTER TABLE `tbprodutos`
  ADD CONSTRAINT `tbprodutos_ibfk_1` FOREIGN KEY (`fk_empresa`) REFERENCES `tbempresa` (`idempresa`);

--
-- Limitadores para a tabela `tbservicos`
--
ALTER TABLE `tbservicos`
  ADD CONSTRAINT `tbservicos_ibfk_1` FOREIGN KEY (`fk_empresa`) REFERENCES `tbempresa` (`idempresa`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
