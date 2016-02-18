SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE SCHEMA IF NOT EXISTS `website` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `website` ;

-- -----------------------------------------------------
-- Table `website`.`subject`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `website`.`subject` ;

CREATE TABLE IF NOT EXISTS `website`.`subject` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `website`.`department`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `website`.`department` ;

CREATE TABLE IF NOT EXISTS `website`.`department` (
  `id` INT(10) NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(50) NULL,
  `discription` VARCHAR(500) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `website`.`courses`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `website`.`courses` ;

CREATE TABLE IF NOT EXISTS `website`.`courses` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NULL,
  `description` VARCHAR(45) NULL,
  `department_id` INT(10) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_courses_department1_idx` (`department_id` ASC),
  CONSTRAINT `fk_courses_department1`
    FOREIGN KEY (`department_id`)
    REFERENCES `website`.`department` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `website`.`semester`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `website`.`semester` ;

CREATE TABLE IF NOT EXISTS `website`.`semester` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NULL,
  `cources_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_semester_cources1_idx` (`cources_id` ASC),
  CONSTRAINT `fk_semester_cources1`
    FOREIGN KEY (`cources_id`)
    REFERENCES `website`.`courses` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `website`.`semester_subject`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `website`.`semester_subject` ;

CREATE TABLE IF NOT EXISTS `website`.`semester_subject` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `subject_id` INT NULL,
  `semester_id` INT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_semester_subject_subject1_idx` (`subject_id` ASC),
  INDEX `fk_semester_subject_semester1_idx` (`semester_id` ASC),
  CONSTRAINT `fk_semester_subject_subject1`
    FOREIGN KEY (`subject_id`)
    REFERENCES `website`.`subject` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_semester_subject_semester1`
    FOREIGN KEY (`semester_id`)
    REFERENCES `website`.`semester` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
