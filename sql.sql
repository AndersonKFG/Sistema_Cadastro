create database apashe;

use apashe;

CREATE TABLE `apashe`.`cadastro` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NOT NULL,
  `senha` VARCHAR(45) NOT NULL,
  `email` VARCHAR(75) NOT NULL,
  `data_nascimento` DATE NOT NULL,
  PRIMARY KEY (`id`));