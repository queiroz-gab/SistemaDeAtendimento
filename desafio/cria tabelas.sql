CREATE DATABASE if not exists formulario;
use formulario;

CREATE TABLE `pessoas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) NOT NULL,
  `data_nasc` date NOT NULL,
  `cpf` int(11) NOT NULL,
  `sexo` varchar(45) DEFAULT NULL,
  `cidade` varchar(50) DEFAULT NULL,
  `bairro` varchar(50) DEFAULT NULL,
  `rua` varchar(45) DEFAULT NULL,
  `numero` int(11) DEFAULT NULL,
  `complemento` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`id`)
);

CREATE TABLE `protocolo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `num_prot` int(11) NOT NULL,
  `desc` varchar(60) DEFAULT NULL,
  `data_atual` date DEFAULT NULL,
  `prazo` int(11) DEFAULT NULL,
  `contribuinte` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
);

