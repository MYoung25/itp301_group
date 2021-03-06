-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema youn462_weather_db
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema youn462_weather_db
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `youn462_weather_db` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `youn462_weather_db` ;

-- -----------------------------------------------------
-- Table `youn462_weather_db`.`weather`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `youn462_weather_db`.`weather` ;

CREATE TABLE IF NOT EXISTS `youn462_weather_db`.`weather` (
  `weather_id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `temp` VARCHAR(5) NOT NULL COMMENT '',
  `time` VARCHAR(8) NOT NULL COMMENT '',
  PRIMARY KEY (`weather_id`)  COMMENT '')
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
