CREATE DATABASE `photobase`;
CREATE TABLE `photobase`.`photos` (
  `id` INT(10) NOT NULL AUTO_INCREMENT ,  
  `preview_src` VARCHAR(50) NOT NULL ,  
  `photo_src` VARCHAR(50) NOT NULL ,  
  `size` INT(30) NOT NULL ,  
  `name` VARCHAR(50) NULL DEFAULT NULL ,  
  `show_count` INT(30) NOT NULL DEFAULT '0' COMMENT ' количество просмотров' ,  
  `added` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ,    
  PRIMARY KEY  (`id`)
) ENGINE = InnoDB;

INSERT INTO `photos` 
(`preview_src`, `photo_src`, `size`, `name`, `show_count`, `added`) 
VALUES 
('./img/min/1.jpg', './img/max/1.jpg', '661462', 'planet js', '0', CURRENT_TIMESTAMP), 
('./img/min/2.jpg', './img/max/1.jpg', '25499', NULL, '0', CURRENT_TIMESTAMP);