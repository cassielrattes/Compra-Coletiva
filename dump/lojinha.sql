-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           10.4.8-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Copiando estrutura do banco de dados para lojinha
CREATE DATABASE IF NOT EXISTS `lojinha` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `lojinha`;

-- Copiando estrutura para tabela lojinha.t_produtos
CREATE TABLE IF NOT EXISTS `t_produtos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `preco` float DEFAULT NULL,
  `qtdecoletiva` int(11) DEFAULT NULL,
  `precocoletivo` float DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela lojinha.t_produtos: ~1 rows (aproximadamente)
/*!40000 ALTER TABLE `t_produtos` DISABLE KEYS */;
INSERT INTO `t_produtos` (`id`, `nome`, `foto`, `preco`, `qtdecoletiva`, `precocoletivo`) VALUES
	(1, 'teste', 'https://d26lpennugtm8s.cloudfront.net/stores/938/754/products/oak0111-b435eb9a5e42eb989f15596819819516-640-0.png', 10.9, NULL, NULL);
/*!40000 ALTER TABLE `t_produtos` ENABLE KEYS */;

-- Copiando estrutura para tabela lojinha.t_usuarios
CREATE TABLE IF NOT EXISTS `t_usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) DEFAULT NULL,
  `senha` varchar(255) DEFAULT NULL,
  `cep` varchar(9) DEFAULT NULL,
  `numero` int(11) DEFAULT NULL,
  `complemento` varchar(255) DEFAULT NULL,
  `nome` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela lojinha.t_usuarios: ~5 rows (aproximadamente)
/*!40000 ALTER TABLE `t_usuarios` DISABLE KEYS */;
INSERT INTO `t_usuarios` (`id`, `email`, `senha`, `cep`, `numero`, `complemento`, `nome`) VALUES
	(1, 'cassiel@gmail.com', 'admin123', NULL, NULL, NULL, NULL),
	(2, 'teste@gmail.com', '123', NULL, NULL, NULL, 'cassiel'),
	(3, 'admin@gmail', '123', '123', 123, '123', 'Cassiel Rattes Cortez'),
	(5, '0', '123', '33294', 123, '0', '0'),
	(39, 'testando@gmail.com', '123', '123', 123, '123', 'testando');
/*!40000 ALTER TABLE `t_usuarios` ENABLE KEYS */;

-- Copiando estrutura para tabela lojinha.v_compras
CREATE TABLE IF NOT EXISTS `v_compras` (
  `id_usuario` int(11) DEFAULT NULL,
  `id_produto` int(11) DEFAULT NULL,
  `quantidade` int(11) DEFAULT NULL,
  KEY `id_usuario` (`id_usuario`),
  KEY `id_produto` (`id_produto`),
  CONSTRAINT `v_compras_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `t_usuarios` (`id`),
  CONSTRAINT `v_compras_ibfk_2` FOREIGN KEY (`id_produto`) REFERENCES `t_produtos` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela lojinha.v_compras: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `v_compras` DISABLE KEYS */;
INSERT INTO `v_compras` (`id_usuario`, `id_produto`, `quantidade`) VALUES
	(3, 1, 31),
	(39, 1, 13),
	(3, 1, 122);
/*!40000 ALTER TABLE `v_compras` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
