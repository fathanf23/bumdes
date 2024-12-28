-- MySQL Script generated by MySQL Workbench
-- Sat Dec 28 22:33:58 2024
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema db_bumdes
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema db_bumdes
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `db_bumdes` DEFAULT CHARACTER SET utf8 ;
USE `db_bumdes` ;

-- -----------------------------------------------------
-- Table `db_bumdes`.`user`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db_bumdes`.`user` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `username` VARCHAR(45) NOT NULL,
  `password` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `db_bumdes`.`jenis_produk`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db_bumdes`.`jenis_produk` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `jenis_produk` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `db_bumdes`.`produk`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db_bumdes`.`produk` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nm_produk` VARCHAR(45) NOT NULL,
  `harga` DOUBLE NOT NULL,
  `deskripsi` VARCHAR(255) NOT NULL,
  `foto` VARCHAR(255) NOT NULL,
  `jenis_produk_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_produk_jenis_produk1_idx` (`jenis_produk_id` ASC) ,
  CONSTRAINT `fk_produk_jenis_produk1`
    FOREIGN KEY (`jenis_produk_id`)
    REFERENCES `db_bumdes`.`jenis_produk` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `db_bumdes`.`transaksi`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db_bumdes`.`transaksi` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `tanggal` DATE NOT NULL,
  `pembayaran` VARCHAR(45) NOT NULL,
  `total_bayar` DOUBLE NOT NULL,
  `status` VARCHAR(45) NOT NULL,
  `jenis_transaksi` VARCHAR(45) NOT NULL,
  `user_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_transaksi_user1_idx` (`user_id` ASC) ,
  CONSTRAINT `fk_transaksi_user1`
    FOREIGN KEY (`user_id`)
    REFERENCES `db_bumdes`.`user` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `db_bumdes`.`detail_transaksi`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db_bumdes`.`detail_transaksi` (
  `produk_id` INT NOT NULL,
  `transaksi_id` INT NOT NULL,
  `jumlah` INT NOT NULL,
  `subtotal` DOUBLE NOT NULL,
  INDEX `fk_detail_transaksi_produk1_idx` (`produk_id` ASC) ,
  INDEX `fk_detail_transaksi_transaksi1_idx` (`transaksi_id` ASC) ,
  CONSTRAINT `fk_detail_transaksi_produk1`
    FOREIGN KEY (`produk_id`)
    REFERENCES `db_bumdes`.`produk` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_detail_transaksi_transaksi1`
    FOREIGN KEY (`transaksi_id`)
    REFERENCES `db_bumdes`.`transaksi` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;