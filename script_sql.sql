-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema db_delta
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema db_delta
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `db_delta` DEFAULT CHARACTER SET latin1 ;
USE `db_delta` ;

-- -----------------------------------------------------
-- Table `db_delta`.`tbl_student`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db_delta`.`tbl_student` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(100) NOT NULL,
  `photo` BLOB NULL DEFAULT NULL,
  `street` VARCHAR(100) NOT NULL,
  `number` VARCHAR(10) NOT NULL,
  `neighborhood` VARCHAR(60) NOT NULL,
  `city` VARCHAR(50) NOT NULL,
  `complement` VARCHAR(50) NOT NULL,
  `cep` VARCHAR(15) NOT NULL,
  `state` VARCHAR(50) NOT NULL,
  `country` VARCHAR(40) NOT NULL,
  `created_at` DATETIME NULL DEFAULT NULL,
  `updated_at` DATETIME NULL DEFAULT NULL,
  `deleted_at` DATETIME NULL DEFAULT NULL,
  PRIMARY KEY (`id`))
ENGINE = MyISAM
AUTO_INCREMENT = 4
DEFAULT CHARACTER SET = latin1;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
