CREATE TABLE IF NOT EXISTS `clientes` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(100) NULL,
  `dt_cadastro` DATE NULL,
  `dt_cancelamento` DATE NULL,
  `dt_nascimento` DATE NULL,
  `cpf` VARCHAR(11) NULL,
  `telefone` INT(12) NULL,
  `email` VARCHAR(100) NULL,
  `endereco` VARCHAR(100) NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC));
