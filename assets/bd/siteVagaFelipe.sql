-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema vaga
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema vaga
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `vaga` DEFAULT CHARACTER SET utf8 ;
USE `vaga` ;

-- -----------------------------------------------------
-- Table `vaga`.`cliente`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `vaga`.`cliente` (
  `idCliente` INT NOT NULL AUTO_INCREMENT,
  `nomeMae` VARCHAR(60) NOT NULL,
  `dataNascimento` DATE NOT NULL,
  `logradouro` VARCHAR(45) NOT NULL,
  `cep` VARCHAR(9) NOT NULL,
  `bairro` VARCHAR(60) NOT NULL,
  `estado` VARCHAR(60) NOT NULL,
  `cidade` VARCHAR(60) NOT NULL,
  `numero` INT(6) NOT NULL,
  `complemento` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`idCliente`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `vaga`.`venda`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `vaga`.`venda` (
  `idVenda` INT NOT NULL AUTO_INCREMENT,
  `idCliente` INT NOT NULL,
  `nome` VARCHAR(60) NOT NULL,
  `cpf` VARCHAR(14) NOT NULL,
  `email` VARCHAR(40) NOT NULL,
  `fone` VARCHAR(15) NOT NULL,
  `dataHora` DATETIME NOT NULL,
  `parcelas` INT(2) NOT NULL,
  `valorParcelas` VARCHAR(10) NOT NULL,
  `valorTotal` VARCHAR(13) NOT NULL,
  `checkbox` TINYINT(1) NOT NULL,
  PRIMARY KEY (`idVenda`, `idCliente`),
  INDEX `fk_cliente_clienteInformacoes_idx` (`idCliente` ASC),
  CONSTRAINT `fk_cliente_clienteInformacoes`
    FOREIGN KEY (`idCliente`)
    REFERENCES `vaga`.`cliente` (`idCliente`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
