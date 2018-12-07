-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: 07-Dez-2018 às 04:55
-- Versão do servidor: 10.1.31-MariaDB
-- PHP Version: 7.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id8003811_dbnadjaboutique`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `administrador`
--

CREATE TABLE `administrador` (
  `pk_idAdministrador` int(11) NOT NULL,
  `nomeAdministrador` varchar(300) NOT NULL,
  `emailAdministrador` varchar(300) NOT NULL,
  `senhaAdministrador` varchar(18) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `administrador`
--

INSERT INTO `administrador` (`pk_idAdministrador`, `nomeAdministrador`, `emailAdministrador`, `senhaAdministrador`) VALUES
(1, 'admin', 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `pk_idCliente` int(11) NOT NULL,
  `nomeCliente` varchar(300) NOT NULL,
  `cpfCliente` char(11) NOT NULL,
  `sexoCliente` varchar(12) NOT NULL,
  `telefoneCliente` char(13) NOT NULL,
  `emailCliente` varchar(300) NOT NULL,
  `senhaCliente` varchar(18) NOT NULL,
  `nascimentoCliente` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`pk_idCliente`, `nomeCliente`, `cpfCliente`, `sexoCliente`, `telefoneCliente`, `emailCliente`, `senhaCliente`, `nascimentoCliente`) VALUES
(3, 'Thiago Marinho', '112.808.644', 'masculino', '83 98740-5953', 'tms@gmail.com', '1234567', '1996-09-08'),
(4, 'Thiago Marinho', '888.882.222', 'masculino', '83 99933-3333', 'thiago@gmail.com', '1234567', '1996-09-08');

-- --------------------------------------------------------

--
-- Estrutura da tabela `endereco`
--

CREATE TABLE `endereco` (
  `pk_idEndereco` int(11) NOT NULL,
  `fk_cliente` int(11) NOT NULL,
  `cepEndereco` char(8) NOT NULL,
  `logradouroEndereco` varchar(300) NOT NULL,
  `numeroEndereco` int(11) NOT NULL,
  `bairroEndereco` varchar(150) NOT NULL,
  `cidadeEndereco` varchar(150) NOT NULL,
  `estadoEndereco` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `endereco`
--

INSERT INTO `endereco` (`pk_idEndereco`, `fk_cliente`, `cepEndereco`, `logradouroEndereco`, `numeroEndereco`, `bairroEndereco`, `cidadeEndereco`, `estadoEndereco`) VALUES
(3, 3, '58064330', 'Rua Doutor Tolentino de Alcântara Lira', 118, 'Valentina de Figueiredo', 'João Pessoa', 'PB'),
(4, 4, '58064330', 'Rua Doutor Tolentino de Alcântara Lira', 118, 'Valentina de Figueiredo', 'João Pessoa', 'PB');

-- --------------------------------------------------------

--
-- Estrutura da tabela `item_pedido`
--

CREATE TABLE `item_pedido` (
  `fk_pedido` int(11) NOT NULL,
  `fk_produto` int(11) NOT NULL,
  `quantidadeItemPedido` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `item_pedido`
--

INSERT INTO `item_pedido` (`fk_pedido`, `fk_produto`, `quantidadeItemPedido`) VALUES
(23, 1, '1'),
(23, 2, '1'),
(23, 3, '1'),
(24, 2, '1'),
(24, 1, '1');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedido`
--

CREATE TABLE `pedido` (
  `pk_idPedido` int(11) NOT NULL,
  `fk_cliente` int(11) NOT NULL,
  `dataPedido` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `precoTotal` decimal(8,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `pedido`
--

INSERT INTO `pedido` (`pk_idPedido`, `fk_cliente`, `dataPedido`, `precoTotal`) VALUES
(23, 3, '2018-12-06 23:16:22', 339.70),
(24, 4, '2018-12-07 00:17:26', 129.80);

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `pk_idProduto` int(11) NOT NULL,
  `nomeProduto` varchar(300) NOT NULL,
  `tipoProduto` varchar(150) NOT NULL,
  `corProduto` varchar(150) NOT NULL,
  `marcaProduto` varchar(150) NOT NULL,
  `precoUnitarioProduto` decimal(8,2) NOT NULL,
  `quantidadeProduto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`pk_idProduto`, `nomeProduto`, `tipoProduto`, `corProduto`, `marcaProduto`, `precoUnitarioProduto`, `quantidadeProduto`) VALUES
(1, 'Vestido FiveBlu Curto Liso Preto', 'Malha', 'Preto', 'FiveBlu 181139', 69.90, 10),
(2, 'Blusa Ciganinha H Heli Floral Branca/Verde', 'Plano', 'Branco', 'H Heli', 59.90, 10),
(3, 'Calça Jeans Colcci Skinny Cory Azul', 'Jeans', 'Azul', 'Colcci', 209.90, 10),
(4, 'Bolsa Transversal Santa Lolla Pequena Matelassê Preta', 'Bolsa', 'Preta', 'Santa Lolla', 119.99, 10),
(5, 'Mochila Colcci Logo Preta', 'Mochila', 'Preta', 'Colcci', 104.00, 10),
(6, 'Óculos de Sol Evoke Hybrid I D01 Bege/Vermelho', 'Óculos', 'Vermelho', 'Evoke', 184.00, 10);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`pk_idAdministrador`);

--
-- Indexes for table `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`pk_idCliente`);

--
-- Indexes for table `endereco`
--
ALTER TABLE `endereco`
  ADD PRIMARY KEY (`pk_idEndereco`),
  ADD KEY `fkcliente` (`fk_cliente`);

--
-- Indexes for table `item_pedido`
--
ALTER TABLE `item_pedido`
  ADD KEY `fk_pedido` (`fk_pedido`),
  ADD KEY `fk_produto` (`fk_produto`);

--
-- Indexes for table `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`pk_idPedido`),
  ADD KEY `fk_cliente` (`fk_cliente`);

--
-- Indexes for table `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`pk_idProduto`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administrador`
--
ALTER TABLE `administrador`
  MODIFY `pk_idAdministrador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cliente`
--
ALTER TABLE `cliente`
  MODIFY `pk_idCliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `endereco`
--
ALTER TABLE `endereco`
  MODIFY `pk_idEndereco` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pedido`
--
ALTER TABLE `pedido`
  MODIFY `pk_idPedido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `produto`
--
ALTER TABLE `produto`
  MODIFY `pk_idProduto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `item_pedido`
--
ALTER TABLE `item_pedido`
  ADD CONSTRAINT `item_pedido_ibfk_1` FOREIGN KEY (`fk_pedido`) REFERENCES `pedido` (`pk_idPedido`),
  ADD CONSTRAINT `item_pedido_ibfk_2` FOREIGN KEY (`fk_produto`) REFERENCES `produto` (`pk_idProduto`);

--
-- Limitadores para a tabela `pedido`
--
ALTER TABLE `pedido`
  ADD CONSTRAINT `pedido_ibfk_1` FOREIGN KEY (`fk_cliente`) REFERENCES `cliente` (`pk_idCliente`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
