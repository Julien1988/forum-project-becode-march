-- MySQL Script generated by MySQL Workbench
-- lun 02 mar 2020 14:15:39 CET
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema forum-project
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema forum-project
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `forum-project` DEFAULT CHARACTER SET utf8mb4 ;
USE `forum-project` ;

-- -----------------------------------------------------
-- Table `forum-project`.`Users`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `forum-project`.`Users` (
  `idUsers` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NULL,
  `email` VARCHAR(255) NULL,
  `password` VARCHAR(255) NULL,
  `date-creation` DATETIME NULL,
  `status` TINYINT(1) NOT NULL DEFAULT 1,
  PRIMARY KEY (`idUsers`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `forum-project`.`boards`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `forum-project`.`boards` (
  `idboards` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(255) NULL,
  `description` VARCHAR(255) NULL,
  PRIMARY KEY (`idboards`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `forum-project`.`topics`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `forum-project`.`topics` (
  `idtopics` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(255) NULL,
  `date-creation` DATETIME NULL,
  `date-edit` DATETIME NULL,
  `Users_idUsers` INT UNSIGNED NOT NULL,
  `boards_idboards` INT UNSIGNED NOT NULL,
  `status` TINYINT(1) NOT NULL DEFAULT 1,
  PRIMARY KEY (`idtopics`),
  UNIQUE INDEX `idtopics_UNIQUE` (`idtopics` ASC),
  INDEX `fk_topics_Users_idx` (`Users_idUsers` ASC),
  INDEX `fk_topics_boards1_idx` (`boards_idboards` ASC),
  CONSTRAINT `fk_topics_Users`
    FOREIGN KEY (`Users_idUsers`)
    REFERENCES `forum-project`.`Users` (`idUsers`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_topics_boards1`
    FOREIGN KEY (`boards_idboards`)
    REFERENCES `forum-project`.`boards` (`idboards`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `forum-project`.`messages`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `forum-project`.`messages` (
  `idmessages` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(255) NULL,
  `date-creation` DATETIME NULL,
  `date-edit` DATETIME NULL,
  `Users_idUsers` INT UNSIGNED NOT NULL,
  `topics_idtopics` INT NOT NULL,
  `status` TINYINT(1) NULL DEFAULT 1,
  PRIMARY KEY (`idmessages`),
  INDEX `fk_messages_Users1_idx` (`Users_idUsers` ASC),
  INDEX `fk_messages_topics1_idx` (`topics_idtopics` ASC),
  CONSTRAINT `fk_messages_Users1`
    FOREIGN KEY (`Users_idUsers`)
    REFERENCES `forum-project`.`Users` (`idUsers`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_messages_topics1`
    FOREIGN KEY (`topics_idtopics`)
    REFERENCES `forum-project`.`topics` (`idtopics`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;