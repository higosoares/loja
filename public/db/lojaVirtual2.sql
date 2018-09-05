-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema lojaVirtual
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `lojaVirtual` ;

-- -----------------------------------------------------
-- Schema lojaVirtual
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `lojaVirtual` DEFAULT CHARACTER SET utf8 ;
USE `lojaVirtual` ;

-- -----------------------------------------------------
-- Table `lojaVirtual`.`formaPagamento`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `lojaVirtual`.`formaPagamento` ;

CREATE TABLE IF NOT EXISTS `lojaVirtual`.`formaPagamento` (
  `id_formaPagamento` INT NOT NULL AUTO_INCREMENT,
  `dsc_formaPagamento` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id_formaPagamento`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `lojaVirtual`.`cliente`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `lojaVirtual`.`cliente` ;

CREATE TABLE IF NOT EXISTS `lojaVirtual`.`cliente` (
  `id_cliente` INT NOT NULL AUTO_INCREMENT,
  `nome_cliente` VARCHAR(255) NOT NULL,
  `nme_sobrenome_cliente` VARCHAR(255) NOT NULL,
  `dta_nasc_cliente` DATE NOT NULL,
  `eml_cliente` VARCHAR(45) NOT NULL,
  `end_cliente` VARCHAR(45) NOT NULL,
  `tel_cliente` VARCHAR(11) NOT NULL,
  `cpf_cliente` VARCHAR(11) NOT NULL,
  `rg_cliente` VARCHAR(7) NULL,
  `pwd_cliente` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id_cliente`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `lojaVirtual`.`carrinho`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `lojaVirtual`.`carrinho` ;

CREATE TABLE IF NOT EXISTS `lojaVirtual`.`carrinho` (
  `id_carrinho` INT NOT NULL AUTO_INCREMENT,
  `cod_cliente` INT NOT NULL,
  PRIMARY KEY (`id_carrinho`),
  INDEX `fk_carrinho_cliente1_idx` (`cod_cliente` ASC) ,
  CONSTRAINT `fk_carrinho_cliente1`
    FOREIGN KEY (`cod_cliente`)
    REFERENCES `lojaVirtual`.`cliente` (`id_cliente`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `lojaVirtual`.`categoria`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `lojaVirtual`.`categoria` ;

CREATE TABLE IF NOT EXISTS `lojaVirtual`.`categoria` (
  `id_categoria` INT NOT NULL AUTO_INCREMENT,
  `nme_categoria` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id_categoria`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `lojaVirtual`.`subCategoria`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `lojaVirtual`.`subCategoria` ;

CREATE TABLE IF NOT EXISTS `lojaVirtual`.`subCategoria` (
  `id_subCategoria` INT NOT NULL AUTO_INCREMENT,
  `nme_subCategoria` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id_subCategoria`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `lojaVirtual`.`categoria_subCategoria`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `lojaVirtual`.`categoria_subCategoria` ;

CREATE TABLE IF NOT EXISTS `lojaVirtual`.`categoria_subCategoria` (
  `id_categoria_subCategoria` INT NOT NULL AUTO_INCREMENT,
  `categoria_id_categoria` INT NOT NULL,
  `subCategoria_id_subCategoria` INT NOT NULL,
  PRIMARY KEY (`id_categoria_subCategoria`),
  INDEX `fk_categoria_has_subCategoria_subCategoria1_idx` (`subCategoria_id_subCategoria` ASC) ,
  INDEX `fk_categoria_has_subCategoria_categoria1_idx` (`categoria_id_categoria` ASC) ,
  CONSTRAINT `fk_categoria_has_subCategoria_categoria1`
    FOREIGN KEY (`categoria_id_categoria`)
    REFERENCES `lojaVirtual`.`categoria` (`id_categoria`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_categoria_has_subCategoria_subCategoria1`
    FOREIGN KEY (`subCategoria_id_subCategoria`)
    REFERENCES `lojaVirtual`.`subCategoria` (`id_subCategoria`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `lojaVirtual`.`produto`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `lojaVirtual`.`produto` ;

CREATE TABLE IF NOT EXISTS `lojaVirtual`.`produto` (
  `id_produto` INT NOT NULL AUTO_INCREMENT,
  `nme_produto` VARCHAR(45) NOT NULL,
  `dsc_produto` VARCHAR(45) NOT NULL,
  `vlr_produto` DOUBLE NOT NULL,
  `sts_inventario_produto` TINYINT NOT NULL,
  `vlr_peso_produto` DOUBLE NOT NULL,
  `cod_categoria_subCategoria` INT NOT NULL,
  PRIMARY KEY (`id_produto`),
  INDEX `fk_produto_categoria_subCategoria1_idx` (`cod_categoria_subCategoria` ASC) ,
  CONSTRAINT `fk_produto_categoria_subCategoria1`
    FOREIGN KEY (`cod_categoria_subCategoria`)
    REFERENCES `lojaVirtual`.`categoria_subCategoria` (`id_categoria_subCategoria`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `lojaVirtual`.`carrinho_produto`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `lojaVirtual`.`carrinho_produto` ;

CREATE TABLE IF NOT EXISTS `lojaVirtual`.`carrinho_produto` (
  `id_carrinho_produto` INT NOT NULL AUTO_INCREMENT,
  `cod_carrinho` INT NOT NULL,
  `cod_produto` INT NOT NULL,
  PRIMARY KEY (`id_carrinho_produto`),
  INDEX `fk_carrinho_has_produto_produto1_idx` (`cod_produto` ASC) ,
  INDEX `fk_carrinho_has_produto_carrinho1_idx` (`cod_carrinho` ASC) ,
  CONSTRAINT `fk_carrinho_has_produto_carrinho1`
    FOREIGN KEY (`cod_carrinho`)
    REFERENCES `lojaVirtual`.`carrinho` (`id_carrinho`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_carrinho_has_produto_produto1`
    FOREIGN KEY (`cod_produto`)
    REFERENCES `lojaVirtual`.`produto` (`id_produto`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `lojaVirtual`.`compra`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `lojaVirtual`.`compra` ;

CREATE TABLE IF NOT EXISTS `lojaVirtual`.`compra` (
  `id_compra` INT NOT NULL AUTO_INCREMENT,
  `cod_formaPagamento` INT NOT NULL,
  `cod_carrinho_produto` INT NOT NULL,
  `vlr_desconto_compra` VARCHAR(45) NULL,
  `vlr_taxa_compra` VARCHAR(45) NULL,
  `vlr_total_compra` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id_compra`),
  INDEX `fk_compra_formaPagamento1_idx` (`cod_formaPagamento` ASC) ,
  INDEX `fk_compra_carrinho_produto1_idx` (`cod_carrinho_produto` ASC) ,
  CONSTRAINT `fk_compra_formaPagamento1`
    FOREIGN KEY (`cod_formaPagamento`)
    REFERENCES `lojaVirtual`.`formaPagamento` (`id_formaPagamento`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_compra_carrinho_produto1`
    FOREIGN KEY (`cod_carrinho_produto`)
    REFERENCES `lojaVirtual`.`carrinho_produto` (`id_carrinho_produto`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `lojaVirtual`.`entrega`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `lojaVirtual`.`entrega` ;

CREATE TABLE IF NOT EXISTS `lojaVirtual`.`entrega` (
  `id_entrega` INT NOT NULL AUTO_INCREMENT,
  `cod_compra` INT NOT NULL,
  `sts_entrega` TINYINT NOT NULL,
  PRIMARY KEY (`id_entrega`),
  INDEX `fk_entrega_compra1_idx` (`cod_compra` ASC) ,
  CONSTRAINT `fk_entrega_compra1`
    FOREIGN KEY (`cod_compra`)
    REFERENCES `lojaVirtual`.`compra` (`id_compra`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `lojaVirtual`.`item`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `lojaVirtual`.`item` ;

CREATE TABLE IF NOT EXISTS `lojaVirtual`.`item` (
  `id_item` INT NOT NULL AUTO_INCREMENT,
  `nome_item` VARCHAR(45) NOT NULL,
  `dsc_item` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id_item`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `lojaVirtual`.`produto_item`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `lojaVirtual`.`produto_item` ;

CREATE TABLE IF NOT EXISTS `lojaVirtual`.`produto_item` (
  `id_produto_item` INT NOT NULL AUTO_INCREMENT,
  `cod_produto` INT NOT NULL,
  `cod_item` INT NOT NULL,
  PRIMARY KEY (`id_produto_item`),
  INDEX `fk_produto_has_item_item1_idx` (`cod_item` ASC) ,
  INDEX `fk_produto_has_item_produto1_idx` (`cod_produto` ASC) ,
  CONSTRAINT `fk_produto_has_item_produto1`
    FOREIGN KEY (`cod_produto`)
    REFERENCES `lojaVirtual`.`produto` (`id_produto`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_produto_has_item_item1`
    FOREIGN KEY (`cod_item`)
    REFERENCES `lojaVirtual`.`item` (`id_item`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `lojaVirtual`.`tipo_perfil`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `lojaVirtual`.`tipo_perfil` ;

CREATE TABLE IF NOT EXISTS `lojaVirtual`.`tipo_perfil` (
  `id_tipo_perfil` INT NOT NULL AUTO_INCREMENT,
  `tx_nome_tipo_perfil` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id_tipo_perfil`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `lojaVirtual`.`perfil`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `lojaVirtual`.`perfil` ;

CREATE TABLE IF NOT EXISTS `lojaVirtual`.`perfil` (
  `cod_tipo_perfil` INT NOT NULL,
  `cod_cliente` INT NOT NULL,
  INDEX `fk_perfil_tipo_perfil1_idx` (`cod_tipo_perfil` ASC) ,
  INDEX `fk_perfil_cliente1_idx` (`cod_cliente` ASC) ,
  CONSTRAINT `fk_perfil_tipo_perfil1`
    FOREIGN KEY (`cod_tipo_perfil`)
    REFERENCES `lojaVirtual`.`tipo_perfil` (`id_tipo_perfil`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_perfil_cliente1`
    FOREIGN KEY (`cod_cliente`)
    REFERENCES `lojaVirtual`.`cliente` (`id_cliente`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

-- -----------------------------------------------------
-- Data for table `lojaVirtual`.`formaPagamento`
-- -----------------------------------------------------
START TRANSACTION;
USE `lojaVirtual`;
INSERT INTO `lojaVirtual`.`formaPagamento` (`id_formaPagamento`, `dsc_formaPagamento`) VALUES (1, 'Boleto Bancário');
INSERT INTO `lojaVirtual`.`formaPagamento` (`id_formaPagamento`, `dsc_formaPagamento`) VALUES (2, 'Cartão de Crédito');
INSERT INTO `lojaVirtual`.`formaPagamento` (`id_formaPagamento`, `dsc_formaPagamento`) VALUES (3, 'Débito em conta corrente');

COMMIT;


-- -----------------------------------------------------
-- Data for table `lojaVirtual`.`cliente`
-- -----------------------------------------------------
START TRANSACTION;
USE `lojaVirtual`;
INSERT INTO `lojaVirtual`.`cliente` (`id_cliente`, `nome_cliente`, `nme_sobrenome_cliente`, `dta_nasc_cliente`, `eml_cliente`, `end_cliente`, `tel_cliente`, `cpf_cliente`, `rg_cliente`, `pwd_cliente`) VALUES (1, 'Higo', 'Soares', '1995-10-30', 'higo@gmail.com', 'Q X Conjunto Y Casa Z', '61998287726', '10123589520', '2355667', 'higo');
INSERT INTO `lojaVirtual`.`cliente` (`id_cliente`, `nome_cliente`, `nme_sobrenome_cliente`, `dta_nasc_cliente`, `eml_cliente`, `end_cliente`, `tel_cliente`, `cpf_cliente`, `rg_cliente`, `pwd_cliente`) VALUES (2, 'Admin', 'Admin', '1995-10-30', 'admin@admin.com', 'Site', '2222222222', '11111111111', '1233445', 'admin');

COMMIT;


-- -----------------------------------------------------
-- Data for table `lojaVirtual`.`carrinho`
-- -----------------------------------------------------
START TRANSACTION;
USE `lojaVirtual`;
INSERT INTO `lojaVirtual`.`carrinho` (`id_carrinho`, `cod_cliente`) VALUES (1, 1);

COMMIT;


-- -----------------------------------------------------
-- Data for table `lojaVirtual`.`categoria`
-- -----------------------------------------------------
START TRANSACTION;
USE `lojaVirtual`;
INSERT INTO `lojaVirtual`.`categoria` (`id_categoria`, `nme_categoria`) VALUES (1, 'Vestuário');
INSERT INTO `lojaVirtual`.`categoria` (`id_categoria`, `nme_categoria`) VALUES (2, 'Acessório');

COMMIT;


-- -----------------------------------------------------
-- Data for table `lojaVirtual`.`subCategoria`
-- -----------------------------------------------------
START TRANSACTION;
USE `lojaVirtual`;
INSERT INTO `lojaVirtual`.`subCategoria` (`id_subCategoria`, `nme_subCategoria`) VALUES (1, 'Camisa');
INSERT INTO `lojaVirtual`.`subCategoria` (`id_subCategoria`, `nme_subCategoria`) VALUES (2, 'Tênis');
INSERT INTO `lojaVirtual`.`subCategoria` (`id_subCategoria`, `nme_subCategoria`) VALUES (3, 'Short');
INSERT INTO `lojaVirtual`.`subCategoria` (`id_subCategoria`, `nme_subCategoria`) VALUES (4, 'Calça');
INSERT INTO `lojaVirtual`.`subCategoria` (`id_subCategoria`, `nme_subCategoria`) VALUES (5, 'Cinto');
INSERT INTO `lojaVirtual`.`subCategoria` (`id_subCategoria`, `nme_subCategoria`) VALUES (6, 'Sapato');
INSERT INTO `lojaVirtual`.`subCategoria` (`id_subCategoria`, `nme_subCategoria`) VALUES (7, 'Vestido');

COMMIT;


-- -----------------------------------------------------
-- Data for table `lojaVirtual`.`categoria_subCategoria`
-- -----------------------------------------------------
START TRANSACTION;
USE `lojaVirtual`;
INSERT INTO `lojaVirtual`.`categoria_subCategoria` (`id_categoria_subCategoria`, `categoria_id_categoria`, `subCategoria_id_subCategoria`) VALUES (1, 1, 1);
INSERT INTO `lojaVirtual`.`categoria_subCategoria` (`id_categoria_subCategoria`, `categoria_id_categoria`, `subCategoria_id_subCategoria`) VALUES (2, 1, 2);
INSERT INTO `lojaVirtual`.`categoria_subCategoria` (`id_categoria_subCategoria`, `categoria_id_categoria`, `subCategoria_id_subCategoria`) VALUES (3, 1, 3);
INSERT INTO `lojaVirtual`.`categoria_subCategoria` (`id_categoria_subCategoria`, `categoria_id_categoria`, `subCategoria_id_subCategoria`) VALUES (4, 1, 4);
INSERT INTO `lojaVirtual`.`categoria_subCategoria` (`id_categoria_subCategoria`, `categoria_id_categoria`, `subCategoria_id_subCategoria`) VALUES (5, 2, 5);
INSERT INTO `lojaVirtual`.`categoria_subCategoria` (`id_categoria_subCategoria`, `categoria_id_categoria`, `subCategoria_id_subCategoria`) VALUES (6, 1, 6);
INSERT INTO `lojaVirtual`.`categoria_subCategoria` (`id_categoria_subCategoria`, `categoria_id_categoria`, `subCategoria_id_subCategoria`) VALUES (7, 1, 7);

COMMIT;


-- -----------------------------------------------------
-- Data for table `lojaVirtual`.`produto`
-- -----------------------------------------------------
START TRANSACTION;
USE `lojaVirtual`;
INSERT INTO `lojaVirtual`.`produto` (`id_produto`, `nme_produto`, `dsc_produto`, `vlr_produto`, `sts_inventario_produto`, `vlr_peso_produto`, `cod_categoria_subCategoria`) VALUES (1, 'Camisa Hering', 'bla bla', 150.00, true, 100, 1);
INSERT INTO `lojaVirtual`.`produto` (`id_produto`, `nme_produto`, `dsc_produto`, `vlr_produto`, `sts_inventario_produto`, `vlr_peso_produto`, `cod_categoria_subCategoria`) VALUES (2, 'Tênis Nike Z-100', 'ble ble', 300.00, true, 200, 2);
INSERT INTO `lojaVirtual`.`produto` (`id_produto`, `nme_produto`, `dsc_produto`, `vlr_produto`, `sts_inventario_produto`, `vlr_peso_produto`, `cod_categoria_subCategoria`) VALUES (3, 'Short Calvin Klein', 'bli bli', 250.00, true, 300, 3);
INSERT INTO `lojaVirtual`.`produto` (`id_produto`, `nme_produto`, `dsc_produto`, `vlr_produto`, `sts_inventario_produto`, `vlr_peso_produto`, `cod_categoria_subCategoria`) VALUES (4, 'Calça Lacoste', 'blo blo', 199.99, true, 300, 4);
INSERT INTO `lojaVirtual`.`produto` (`id_produto`, `nme_produto`, `dsc_produto`, `vlr_produto`, `sts_inventario_produto`, `vlr_peso_produto`, `cod_categoria_subCategoria`) VALUES (5, 'Cinto mary kay', 'blu blu', 150.99, true, 150, 5);
INSERT INTO `lojaVirtual`.`produto` (`id_produto`, `nme_produto`, `dsc_produto`, `vlr_produto`, `sts_inventario_produto`, `vlr_peso_produto`, `cod_categoria_subCategoria`) VALUES (6, 'Sapato Dolce and Gabbana', 'blaa blaa', 179.99, true, 200, 6);
INSERT INTO `lojaVirtual`.`produto` (`id_produto`, `nme_produto`, `dsc_produto`, `vlr_produto`, `sts_inventario_produto`, `vlr_peso_produto`, `cod_categoria_subCategoria`) VALUES (7, 'Vestido Gold ', 'blee blee', 350.99, true, 200, 7);

COMMIT;


-- -----------------------------------------------------
-- Data for table `lojaVirtual`.`carrinho_produto`
-- -----------------------------------------------------
START TRANSACTION;
USE `lojaVirtual`;
INSERT INTO `lojaVirtual`.`carrinho_produto` (`id_carrinho_produto`, `cod_carrinho`, `cod_produto`) VALUES (1, 1, 1);
INSERT INTO `lojaVirtual`.`carrinho_produto` (`id_carrinho_produto`, `cod_carrinho`, `cod_produto`) VALUES (2, 1, 2);
INSERT INTO `lojaVirtual`.`carrinho_produto` (`id_carrinho_produto`, `cod_carrinho`, `cod_produto`) VALUES (3, 1, 4);

COMMIT;


-- -----------------------------------------------------
-- Data for table `lojaVirtual`.`compra`
-- -----------------------------------------------------
START TRANSACTION;
USE `lojaVirtual`;
INSERT INTO `lojaVirtual`.`compra` (`id_compra`, `cod_formaPagamento`, `cod_carrinho_produto`, `vlr_desconto_compra`, `vlr_taxa_compra`, `vlr_total_compra`) VALUES (1, 1, 1, NULL, NULL, '550.00');

COMMIT;


-- -----------------------------------------------------
-- Data for table `lojaVirtual`.`item`
-- -----------------------------------------------------
START TRANSACTION;
USE `lojaVirtual`;
INSERT INTO `lojaVirtual`.`item` (`id_item`, `nome_item`, `dsc_item`) VALUES (1, 'Cinto brinde', 'aosdkoask');

COMMIT;


-- -----------------------------------------------------
-- Data for table `lojaVirtual`.`produto_item`
-- -----------------------------------------------------
START TRANSACTION;
USE `lojaVirtual`;
INSERT INTO `lojaVirtual`.`produto_item` (`id_produto_item`, `cod_produto`, `cod_item`) VALUES (1, 4, 1);

COMMIT;


-- -----------------------------------------------------
-- Data for table `lojaVirtual`.`tipo_perfil`
-- -----------------------------------------------------
START TRANSACTION;
USE `lojaVirtual`;
INSERT INTO `lojaVirtual`.`tipo_perfil` (`id_tipo_perfil`, `tx_nome_tipo_perfil`) VALUES (1, 'Admin');
INSERT INTO `lojaVirtual`.`tipo_perfil` (`id_tipo_perfil`, `tx_nome_tipo_perfil`) VALUES (2, 'User');

COMMIT;


-- -----------------------------------------------------
-- Data for table `lojaVirtual`.`perfil`
-- -----------------------------------------------------
START TRANSACTION;
USE `lojaVirtual`;
INSERT INTO `lojaVirtual`.`perfil` (`cod_tipo_perfil`, `cod_cliente`) VALUES (1, 2);
INSERT INTO `lojaVirtual`.`perfil` (`cod_tipo_perfil`, `cod_cliente`) VALUES (2, 1);

COMMIT;

